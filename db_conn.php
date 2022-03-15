<?php

$sname = "localhost";
$db_login_name = "root";
$pass = "xxxx";

$db_name = "test_db";

$conn = mysqli_connect($sname,$db_login_name,$pass,$db_name);

if (!$conn) {
    echo "connection failed";
}