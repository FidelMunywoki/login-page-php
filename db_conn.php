<?php

// $sname = "localhost";
$sname = "us-cdbr-east-05.cleardb.net";
// $db_login_name = "root";
$db_login_name = "b85d5ab4562a4c";
//$pass = " ";
$pass = "d34ae1a4";

//$db_name = "test_db";
$db_name = "heroku_a9ff77dede75a46";

$conn = mysqli_connect($sname,$db_login_name,$pass,$db_name);

if (!$conn) {
    echo "connection failed";
}