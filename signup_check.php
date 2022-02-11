<?php
session_start();
include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['password'])
   && isset($_POST['name']) && isset($_POST['re_password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $password = validate($_POST['password']);

    $name = validate($_POST['name']);
    $re_password = validate($_POST['re_password']);

    $user_data = 'uname ='. $uname. '&name ='. $name;

 

    if (empty($uname)) {
        header("Location: signup.php?error=User Name is required&$user_data");
        exit();


    }else if(empty($password)) {
        header("Location: signup.php?error=Password is required&$user_data");
        exit();

    }
    else if(empty($re_password)) {
        header("Location: signup.php?error=Re Password is required&$user_data");
        exit();
    }

    else if(empty($name)) {
        header("Location: signup.php?error=Name is required");
        exit();
    }

    else if($password !== $re_password) {
        header("Location: signup.php?error=The confirmation password does not match&$user_data");
        exit();
    }

    else {

        //hashing the password

        $password = md5($password);

        $sql = "SELECT * FROM users WHERE user_name = '$uname' ";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error=The username is taken try another&$user_data");
            exit();
        } else {
            // inserting data after verification to db

            $sql2 = "INSERT INTO users(user_name, password,name) VALUES('$uname','$password','$name')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("Location: signup.php?success=The account has been created successfully");
                exit();

            } else {
                header("Location: signup.php?error=unknown error occurred&$user_data");
                exit();

            }
        }
        
    }


}else{
    header("Location: signup.php");
    exit();
}