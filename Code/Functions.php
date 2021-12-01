<?php

//function pageProtect() {
//    session_start();
//
//    global $db;
//
//    /* Secure against Session Hijacking by checking user agent */
//    if (isset($_SESSION['HTTP_USER_AGENT'])) {
//        if ($_SESSION['HTTP_USER_AGENT'] != md5($_SERVER['HTTP_USER_AGENT'])) {
//            logout();
//            exit;
//        }
//
//    }
//
//// before we allow sessions, we need to check authentication key - ckey and ctime stored in database
//
//    /* If session not set, check for cookies set by Remember me */
//    if (!isset($_SESSION['employee_id']) && !isset($_SESSION['employee_name'])) {
//        if (isset($_COOKIE['customer_user_id']) && isset($_COOKIE['customer_user_key'])) {
//
//            $cookie_user_id = filter($_COOKIE['customer_user_id']);
//            $rs_ctime = mysql_query("select `customer_ckey`,`customer_ctime` from `customer` where `customer_id` ='$cookie_user_id'") or die(mysql_error());
//            list($ckey, $ctime) = mysql_fetch_row($rs_ctime);
//            // coookie expiry
//            if ((time() - $ctime) > 60 * 60 * 24 * COOKIE_TIME_OUT) {
//
//                logout();
//            }
//            /* Security check with untrusted cookies - dont trust value stored in cookie.
//              /* We also do authentication check of the `ckey` stored in cookie matches that stored in database during login */
//
//            if (!empty($ckey) && is_numeric($_COOKIE['customer_user_id']) && isUserID($_COOKIE['customer_user_name']) && $_COOKIE['customer_user_key'] == sha1($ckey)) {
//                session_regenerate_id(); //against session fixation attacks.
//
//                $_SESSION['customer_user_id'] = $_COOKIE['customer_user_id'];
//                $_SESSION['customer_user_name'] = $_COOKIE['customer_user_name'];
//
//                /* query user level from database instead of storing in cookies */
//                list($user_level) = mysql_fetch_row(mysql_query("select customer_level from customer where customer_id='$_SESSION[customer_user_id]'"));
//
//                $_SESSION['user_level'] = $user_level;
//                $_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
//            } else {
//                logout();
//            }
//        } else {
//            header("Location: index.php");
//            exit();
//        }
//    }
//}
