<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="signup_check.php" method="post">
<h2>SIGN UP</h2>

     <?php 
     if (isset($_GET['error'])) { ?>
     <p class="error"> <?php echo $_GET['error']; ?></p>
     
     <?php } ?>

     <?php 
     if (isset($_GET['success'])) { ?>
     <p class="success"> <?php echo $_GET['success']; ?></p>
     
     <?php } ?>


     <label for="">Name</label>
     <?php if (isset($_GET['name'])) { ?>
        <input type="text" 
        name="name" 
        placeholder = "Name" 
        value= "<?php echo $_GET['name']; ?>"> <br >
     
     <?php }else { ?>
        <input type="text" 
        name="name" 
        placeholder = "Name"> <br >
    <?php }?>


    <label for="">User Name</label>
    <?php if (isset($_GET['uname'])) { ?>
        <input type="text" 
        name="uname" 
        placeholder = "User Name" 
        value= "<?php echo $_GET['uname']; ?>"> <br >
     
     <?php }else { ?>
        <input type="text" 
        name="uname" 
        placeholder = "User Name"> <br >
    <?php }?>



    <label for="">Password</label>
    <input type="password" name="password" placeholder = "Password">  <br>

    <label for="">Confirm Password</label>
    <input type="password" name="re_password" placeholder = "Confirm Password">  <br>

    <button type ="submit">Sign Up</button>

    <a href="index.php" class= "ca">Already have an account?</a>


</form>
    

</body>
</html>