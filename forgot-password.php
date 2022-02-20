<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <!-- Bootstrap 4 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- Fontawesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="css/forgot-password.css" />
</head>
<body class = "bg-info">

    <div class= "container">
        <!-- Forgot Password Form Start -->
        <div class="row justify-content-center wrapper" id="forgot-box">
        <div class="col-lg-10 my-auto myShadow">
          <div class="row">
            <div class="col-lg-7 bg-white p-4">
              <h3 class="text-center text-primary text-small">Forgot Your Password?</h3>
              <hr class="my-3" />
              <p class="lead text-center text-secondary">To reset your password, enter the registered e-mail adddress and we will send you password reset instructions on your e-mail!</p>
              <form action="#" method="post" class="px-3" id="forgot-form">
                <div id="forgotAlert"></div>
                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0"><i class="far fa-envelope fa-lg"></i></span>
                  </div>
                  <input type="email" id="femail" name="email" class="form-control rounded-0" placeholder="E-Mail" required />
                </div>
                <div class="form-group ">
                  <input type="submit" id="forgot-btn" value="Reset Password" class="btn btn-primary btn-sm btn-block myBtn btn-font-size" />
                </div>
              </form>
            </div>
            <div class="col-lg-5 d-flex flex-column justify-content-center myColor p-4">
                <form action="index.php">
              <h3 class="text-center font-weight-bold text-white">Reset Password!</h3>
              <hr class="my-4 bg-light myHr" />
              <button class="btn btn-outline-light btn-sm font-weight-bolder myLinkBtn align-self-center btn-font-size" id="back-link" type = "submit">Back</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Forgot Password Form End -->
      </div>


    
</body>
</html>