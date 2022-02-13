<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="change-p.php" method="post">
<h2>Change Password</h2>

     <?php 
     if (isset($_GET['error'])) { ?>
     <p class="error"> <?php echo $_GET['error']; ?></p>
     
     <?php } ?>

     <?php 
     if (isset($_GET['success'])) { ?>
     <p class="success"> <?php echo $_GET['success']; ?></p>
     
     <?php } ?>

    <label for="">Old Password</label>
    <input type="password" name="old_password" placeholder = "Old Password"> <br >

    <label for=""> New Password</label>
    <input type="password" name="new_password" placeholder = "New Password">  <br>

    <label for=""> Confirm New Password</label>
    <input type="password" name="c_new_password" placeholder = "Confirm New Password">  <br>

    <button type ="submit">Change Password</button>

    <a href="home.php" class= "ca">Home</a>


</form>
 
    
</body>
</html>

<?php
}else {
    header("Location: index.php");
    exit();

}
?>