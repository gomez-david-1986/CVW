<?php

function pageProtect() {
    session_start();

    global $db;

    /* Secure against Session Hijacking by checking user agent */
    if (isset($_SESSION['HTTP_USER_AGENT'])) {
        if ($_SESSION['HTTP_USER_AGENT'] != md5($_SERVER['HTTP_USER_AGENT'])) {
            logout();
            exit;
        }

    }

// before we allow sessions, we need to check authentication key - ckey and ctime stored in database

    /* If session not set, check for cookies set by Remember me */
    if (!isset($_SESSION['employee_id']) && !isset($_SESSION['employee_name'])) {
        if (isset($_COOKIE['customer_user_id']) && isset($_COOKIE['customer_user_key'])) {

            $cookie_user_id = filter($_COOKIE['customer_user_id']);
            $rs_ctime = mysql_query("select `customer_ckey`,`customer_ctime` from `customer` where `customer_id` ='$cookie_user_id'") or die(mysql_error());
            list($ckey, $ctime) = mysql_fetch_row($rs_ctime);
            // coookie expiry
            if ((time() - $ctime) > 60 * 60 * 24 * COOKIE_TIME_OUT) {

                logout();
            }
            /* Security check with untrusted cookies - dont trust value stored in cookie. 		
              /* We also do authentication check of the `ckey` stored in cookie matches that stored in database during login */

            if (!empty($ckey) && is_numeric($_COOKIE['customer_user_id']) && isUserID($_COOKIE['customer_user_name']) && $_COOKIE['customer_user_key'] == sha1($ckey)) {
                session_regenerate_id(); //against session fixation attacks.

                $_SESSION['customer_user_id'] = $_COOKIE['customer_user_id'];
                $_SESSION['customer_user_name'] = $_COOKIE['customer_user_name'];

                /* query user level from database instead of storing in cookies */
                list($user_level) = mysql_fetch_row(mysql_query("select customer_level from customer where customer_id='$_SESSION[customer_user_id]'"));

                $_SESSION['user_level'] = $user_level;
                $_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
            } else {
                logout();
            }
        } else {
            header("Location: index.php");
            exit();
        }
    }
}

//GET THE CLASS PROPERTY VALUE FOR THE PROJECT STATUS
function get_class_color_for_register_status($Status) {

    $status_color = '';

    if (!isset($Status)) {
        return '';
    } else {
        switch ($Status) {

            case "AVAILABLE":
                $status_color = 'text-danger ';
                break;
            case "ACTIVE":
                $status_color = 'text-success';
                break;
            case "CLOSE":
                $status_color = 'text-info';
                break;
        }
        return $status_color;
    }
}

//GET THE FORMATED VALUE FOR A PHONE NUMBER
function format_phone($Unformated_phone) {

    // note: making sure we have something
    if (!isset($Unformated_phone[3])) {
        return '';
    }

    //REMOVE ALL NOT NUMERIC CHARACTES INCLUDING SPACES
    $Unformated_phone = preg_replace("/[^0-9]/", "", $Unformated_phone);
    $length = strlen($Unformated_phone);

    switch ($length) {
        case 7:
            $formated_phone = preg_replace("/([0-9]{3})([0-9]{4})/", "$1-$2", $Unformated_phone);
            break;
        case 10:
            $formated_phone = preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $Unformated_phone);
            break;
        case 11:
            $formated_phone = preg_replace("/([0-9]{1})([0-9]{3})([0-9]{3})([0-9]{4})/", "$1($2) $3-$4", $Unformated_phone);
            break;

        default:
            break;
    }

    return $formated_phone;
}

//TODO2 CHANGE AND OR ANALISE THIS CODE. 
function get_random_token() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 35; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

//TODO2 THIS CODE NEEDS TO BE REVISED AND IMPLEMENTED FOR SECURITY
function encryptor($action, $string) {

    $output = false;

    $encrypt_method = "AES-256-CBC";

    //pls set your unique hashing key
    $secret_key = 'muni';
    $secret_iv = 'muni123';

    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    //do the encyption given text/string/number
    if ($action == 'encrypt') {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if ($action == 'decrypt') {
        //decrypt the given text/string/number
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}

function add_to_constant_contact($customerListRS) {


    // By default, this sample code is designed to get the result from your ActiveCampaign installation and print out the result
    //-> $url = 'https://gomezdavid1986.api-us1.com';
    $url = 'https://kaleidoscopedirect.api-us1.com';

    $params = array(
        // the API Key can be found on the "Your Settings" page under the "API" tab.
        // replace this with your API Key
        //-> 'api_key' => 'fddc1d9f3c986961228a8ba1c969aed82892c1461d0480277a62b0b55b10fff6d7651db2',
        'api_key' => '8fdb77324259fa1c3a33fb2a4d28c572d010c8a889d9888654e2b36901a2b8ff3c149331',
        // this is the action that adds a contact
        'api_action' => 'contact_sync',
        // define the type of output you wish to get back
        // possible values:
        // - 'xml'  :      you have to write your own XML parser
        // - 'json' :      data is returned in JSON format and can be decoded with
        //                 json_decode() function (included in PHP since 5.2.0)
        // - 'serialize' : data is returned in a serialized format and can be decoded with
        //                 a native unserialize() function
        'api_output' => 'serialize',
    );

// here we define the data we are posting in order to perform an update
    // $post = array();
//    foreach ($customerListRS as $tck):
//        
//        $post = array(
//            'email' => $tck["email"],
//            'first_name' => $tck["first_name"],
//            'last_name' => $tck["last_name"],           
//            //'tags' => 'api',
//            'field[%GLOBAL_CUSTOMER_ID%,0]' => $tck["global_customer_id"], // using the personalization tag instead
//            // assign to lists:
//            'p[123]' => 2, // example list ID (REPLACE '123' WITH ACTUAL LIST ID, IE: p[5] = 5)
//            'status[123]' => 1, // 1: active, 2: unsubscribed (REPLACE '123' WITH ACTUAL LIST ID, IE: status[5] = 1)
//                // use the folowing only if status=1
//                //'instantresponders[123]' => 1, // set to 0 to if you don't want to sent instant autoresponders
//        );
//    endforeach;
// This section takes the input fields and converts them to the proper format
    $query = "";
    foreach ($params as $key => $value):
        $query .= urlencode($key) . '=' . urlencode($value) . '&';
    endforeach;
    $query = rtrim($query, '& ');

// This section takes the input data and converts it to the proper format
    $data = "";
    foreach ($customerListRS as $key):
        $data .= urlencode("email") . '=' . urlencode($key["email"]) . '&';
        $data .= urlencode("first_name") . '=' . urlencode($key["first_name"]) . '&';
        $data .= urlencode("last_name") . '=' . urlencode($key["last_name"]) . '&';
        $data .= urlencode("field[%GLOBALCUSTOMERID%]") . '=' . urlencode($key["global_customer_id"]) . '&';
        $data .= urlencode("field[%PACKAGE%]") . '=' . urlencode($key["package"]) . '&';
        $data .= urlencode("field[%SITEID%]") . '=' . urlencode($key["site_id"]) . '&';
        $data .= urlencode("field[%STATUS%]") . '=' . urlencode($key["status"]) . '&';
        $data .= urlencode("p[123]") . '=1&';
    endforeach;
    $data = rtrim($data, '& ');

// clean up the url
    $url = rtrim($url, '/ ');

// This sample code uses the CURL library for php to establish a connection,
// submit your request, and show (print out) the response.
    if (!function_exists('curl_init'))
        die('CURL not supported. (introduced in PHP 4.0.2)');

// If JSON is used, check if json_decode is present (PHP 5.2.0+)
    if ($params['api_output'] == 'json' && !function_exists('json_decode')) {
        die('JSON not supported. (introduced in PHP 5.2.0)');
    }

// define a final API request - GET
    $api = $url . '/admin/api.php?' . $query;

    echo "API = URL/admin/api.php? + query";
    echo $api;
    echo "\n\n\n";

    $request = curl_init($api); // initiate curl object
    curl_setopt($request, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
    curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
    curl_setopt($request, CURLOPT_POSTFIELDS, $data); // use HTTP POST to send form data
//curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE); // uncomment if you get no gateway response and are using HTTPS
    curl_setopt($request, CURLOPT_FOLLOWLOCATION, true);

    $info = curl_getinfo($request);
    print_r($info);

    $response = (string)curl_exec($request); // execute curl post and store results in $response
    //
// additional options may be required depending upon your server configuration
// you can find documentation on curl options at http://www.php.net/curl_setopt


    curl_close($request); // close curl object

    if (!$response) {
        die('Nothing was returned. Do you have a connection to Email Marketing server?');
    }

// This line takes the response and breaks it into an array using:
// JSON decoder
//$result = json_decode($response);
// unserializer
    $result = unserialize($response);
// XML parser...
// ...
// Result info that is always returned
    echo 'Result: ' . ($result['result_code'] ? 'SUCCESS' : 'FAILED') . '<br />';
    echo 'Message: ' . $result['result_message'] . '<br />';

// The entire result printed out
    echo 'The entire result printed out:<br />';
    echo '<pre>';
    print_r($result);
    echo '</pre>';

// Raw response printed out
    echo 'Raw response printed out:<br />';
    echo '<pre>';
    print_r($response);
    echo '</pre>';

// API URL that returned the result
    echo 'API URL that returned the result:<br />';
    echo $api;

    echo '<br /><br />POST params:<br />';
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function doc_expiration_date_format($exp_date, $expires) {

    $status_color = '';

    if ($expires == 1) {

        if ($exp_date >= date("Y-m-d", strtotime('+60 days'))) {
            $status_color = 'text-success';
        } else if ($exp_date >= date("Y-m-d", strtotime('+30 days'))) {
            $status_color = 'text-info ';
        } else if ($exp_date >= date("Y-m-d", strtotime('+1 days'))) {
            $status_color = 'text-warning ';
        } else if ($exp_date <= date("Y-m-d")) {
            $status_color = 'text-danger font-weight-bolder ';
        }


        return $status_color;
    }

    return $status_color;
}

function doc_expiration_date_format_tr($exp_date, $expires) {

    $status_color = '';

    if ($expires == 1) {


        if ($exp_date <= date("Y-m-d")) {
            $status_color = 'table-danger';
        }


        return $status_color;

        return $status_color;
    }
}

function doc_expiration_admin_table_format($exp_date) {

    $status_color = '';

    if ($exp_date <= date("Y-m-d", strtotime('-90 days'))) {
        $status_color = ' table-dark text-danger font-weight-bolder ';
    } else if ($exp_date <= date("Y-m-d", strtotime('-30 days'))) {
        $status_color = 'text-danger font-weight-bolder ';
    } else if ($exp_date <= date("Y-m-d")) {
        $status_color = 'text-dark ';
    }


    return $status_color;
}

function high_transaction_amount_format($Amount) {

    $status_color = '';


    if ($Amount >= 5000) {
        $status_color = 'table-dark  text-danger font-weight-bolder ';
    } else if ($Amount >= 3000) {
        $status_color = 'text-danger ';
    } else if ($Amount >= 2000) {
        $status_color = 'text-warning ';
    } else if ($Amount >= 1000) {
        $status_color = 'text-info ';
    }


    return $status_color;
}

function get_class_color_for_employee_status($Status) {

    $status_color = '';

    if (!isset($Status)) {
        return '';
    } else {
        switch ($Status) {
            case "ACTIVE":
                $status_color = 'text-info';
                break;
            case "LOCK":
                $status_color = 'text-danger';
                break;
            case "INACTIVE":
                $status_color = 'text-warning';
                break;
        }

        return $status_color;
    }
}

function get_class_location_text($Location) {

    $status_color = '';

    if (!isset($Location)) {
        return '';
    } else {
        switch ($Location) {
            case "0":
                $status_color = 'Norwalk/Stamford';
                break;
            case "1":
                $status_color = 'Norwalk';
                break;
            case "2":
                $status_color = 'Stamford';
                break;
        }
        return $status_color;
    }
}