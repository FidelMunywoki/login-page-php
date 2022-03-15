<?php

// $sname = "localhost";
$sname = "your host";
// $db_login_name = "root";
$db_login_name = "heroku db user name";
//$pass = " ";
$pass = "your password";

//$db_name = "test_db";
$db_name = "";

$conn = mysqli_connect($sname,$db_login_name,$pass,$db_name);

if (!$conn) {
    echo "connection failed";
}