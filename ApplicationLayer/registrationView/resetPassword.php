<?php

$email = $_GET['email'];
$token = $_GET['token'];




if(isset($_POST['submit'])){
    require_once '..\..\BusinessServiceLayer\accountController\accountController.php';
    $user = new accountController();
        $accountModel = $user->setPassword($email, $token);
        
    
  }
?>

<?php
require_once __DIR__ . '/../../BusinessServiceLayer/accountController/accountController.php';


$user = new accountController();

if (isset($_POST['login'])) {
    $user->login();
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Reset Form</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="../../src/css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="../../src/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="../../src/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="../../src/css/app-dark.css" id="darkTheme" disabled>
  </head>
  <body class="light ">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <!--  Reset form -->
        <form method="POST" class="col-lg-3 col-md-4 col-10 mx-auto text-center">
          <div class="mx-auto text-center my-4">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87    " />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51     " />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15  " />
                </g>
              </svg>
            </a>
            <h2 class="my-3">Reset Password</h2>
          </div>
          <p class="text-muted">Enter New Password</p>
          <div class="form-group">
            <label for="inputPassword" class="sr-only">New Password</label>
            <input type="password" id="inputPassword" name="tmpPass" class="form-control form-control-lg" placeholder="Enter Your New Password" required="" autofocus="">
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit" name="set">Reset Password</button>
        
          <p class="mt-5 mb-3 text-muted">© 2020</p>
        </form>
      </div>
    </div>
    <script src="../../src/js/jquery.min.js"></script>
    <script src="../../src/js/popper.min.js"></script>
    <script src="../../src/js/moment.min.js"></script>
    <script src="../../src/js/bootstrap.min.js"></script>
    <script src="../../src/js/simplebar.min.js"></script>
    <script src='../../src/js/daterangepicker.js'></script>
    <script src='../../src/js/jquery.stickOnScroll.js'></script>
    <script src="../../src/js/tinycolor-min.js"></script>
    <script src="../../src/js/config.js"></script>
    <script src="../../src/js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>
</body>
</html>