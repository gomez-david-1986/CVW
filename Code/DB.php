<?php
$dsn = 'mysql:host=mylogicweb.com;dbname=juanda19_tps';
$username = 'juanda19_tps';
$password = 'n7RF6iDfdQy59iy';

try {

    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (Exception $ex) {

    $Error_Message = $ex->getMessage();
    header("location: 404.php?error=" . $Error_Message);
  
}
?>
