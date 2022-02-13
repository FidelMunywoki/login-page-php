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
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Hello,  <?php echo $_SESSION['name']; ?></h1>

    <nav class= "home-nav">
    <button>
    <a href="logout.php">Logout</a>
    </button>
    <a href="change-password.php">Change Password?</a>
    </nav>
   
    
</body>
</html>

<?php
}else {
    header("Location: index.php");
    exit();

}
?>