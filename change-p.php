<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    include "db_conn.php";
if (isset($_POST['old_password']) && isset($_POST['new_password'])
   && isset($_POST['c_new_password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $old_password = validate($_POST['old_password']);
    $new_password = validate($_POST['new_password']);
    $c_new_password = validate($_POST['c_new_password']);

// check pasword validity and match 
    if(empty($old_password)) {
        header("Location: change-password.php?error=Old Password is required");
        exit();
    }else if (empty($new_password)){
        header("Location: change-password.php?error=New Password is required");
        exit();
    }else if (empty($c_new_password)){
        header("Location: change-password.php?error=Confirm Password is required");
        exit();
    }else if ($new_password !== $c_new_password){
        header("Location: change-password.php?error=Confirmation password does not match");
        exit();
    }else {
        // check complete proceed
        //hashing password

        $old_password = md5($old_password);
        $new_password = md5($new_password);
        $id = $_SESSION['id'];

        $sql = "SELECT password FROM users WHERE 
                id = '$id' AND password = '$old_password'";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)=== 1){
            // query to change the password
            $sql_2 = "UPDATE users
                      SET password = '$new_password'
                      WHERE id='$id'";

            mysqli_query($conn, $sql_2);
            header("Location: change-password.php?success=Password changed successfully");
            exit();
        }else {
            header("Location: change-password.php?error=Incorrect Old Password does not match");
            exit();

        }

    }


}else{
    header("Location: change-password.php");
    exit();
}


}else {
    header("Location: index.php");
    exit();

}