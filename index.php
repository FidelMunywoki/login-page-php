<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<form action="login.php" method="post">
<h2>LOGIN</h2>

     <?php 
     if (isset($_GET['error'])) { ?>
     <p class="error"> <?php echo $_GET['error']; ?></p>
     
     <?php } ?>

     
    <label for="">User Name</label>
    <input type="text" name="uname" placeholder = "User Name"> <br >

    <label for="">Password</label>
    <input type="password" name="password" placeholder = "Password">  <br>

    <button type ="submit">Login</button>

    <a href="signup.php" class= "ca">Create an account</a>

    <hr>
    <a href="forgot-password.php" class="ca">Forgot your password?</a>


</form>
    

</body>
</html>