<?php include "db.php"; ?>
<?php
session_start();
if ( !empty($_SESSION['name']) && !empty($_SESSION['id']) )
{
   header ("location:home.php");

}

?>

<?php

if (isset($_POST['signin']))
{
     $email = mysqli_real_escape_string($con, $_POST['email']);
        $pass = mysqli_real_escape_string($con, $_POST['pass']);
       $query1 = "select * from user where email = '$email' and password = '$pass'";
        $result1 = mysqli_query($con,$query1); 
         if($result1)
        {
         if (mysqli_num_rows($result1) > 0)
         { 
             $row = mysqli_fetch_array($result1);
             $name = $row['name']; 
             $id = $row['id'];
             session_start();
             $_SESSION['id'] = $id;
             $_SESSION['name'] = $name;
             
    header("location:home.php");
         }else
         {
    echo "<script>alert('Invalid Userid or Password');window.location.assign('login.php'); </script>";
         }
        }
}

    
    ?>
<!DOCTYPE html>
<html lang="en"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="#">
  <meta name="description" content="#">
  <title>RENTODI | LOGIN</title>
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="#">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="#">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="#">
  <link rel="apple-touch-icon-precomposed" href="#">
  <link rel="shortcut icon" href="#">
  <!-- Bootstrap -->
  <link href="Login_files/bootstrap.css" rel="stylesheet">
  <!-- Fontawesome -->
  <link href="Login_files/font-awesome.css" rel="stylesheet">
  <!-- Flaticons -->
  <link href="Login_files/flaticon.css" rel="stylesheet">
  <!-- Swiper Slider -->
  <link href="Login_files/swiper.css" rel="stylesheet">
  <!-- Range Slider -->
  <link href="Login_files/ion.css" rel="stylesheet">
  <!-- magnific popup -->
  <link href="Login_files/magnific-popup.css" rel="stylesheet">
  <!-- Nice Select -->
  <link href="Login_files/nice-select.css" rel="stylesheet">
  <!-- Custom Stylesheet -->
  <link href="Login_files/style.css" rel="stylesheet">
  <!-- Custom Responsive -->
  <link href="Login_files/responsive.css" rel="stylesheet">
  <!-- Color Change -->
    <link rel="stylesheet" class="color-changing" href="Login_files/color2.css">
  <!-- Google Fonts -->
  <link href="Login_files/css.css" rel="stylesheet">
  <!-- place -->
<script type="text/javascript" charset="UTF-8" src="Login_files/common.js"></script><script type="text/javascript" charset="UTF-8" src="Login_files/util.js"></script></head>

<body>
  <div class="inner-wrapper">
    <div class="container-fluid no-padding">
      <div class="row no-gutters overflow-auto">
        <div class="col-md-6">
          <div class="main-banner">
            <img src="0.jpg" class="img-fluid full-width main-img" alt="banner">
<!--
            <div class="overlay-2 main-padding">
              <img src="Login_files/logo-2.jpg" class="img-fluid" alt="logo">
            </div>
-->
            <!-- <img src="Login_files/burger.png" class="footer-img" alt="footer-img"> -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="section-2 user-page main-padding">
            <div class="login-sec">
              <div class="login-box">
            
                  <h4 class="text-light-black fw-600">Sign in with your Rentodi account</h4>
                  <div class="row">
                    <div class="col-12">
                      <!-- <p class="text-light-black">Have a corporate username? <a href="#">Click here</a> -->
                      </p>
                        
                        
                        <form method="post" action="">
                            
                      <div class="form-group">
                        <label class="text-light-white fs-14">Email</label>
                        <input type="email" name="email" class="form-control form-control-submit" placeholder="Email I'd" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-light-white fs-14">Password</label>
                        <input type="password" id="password-field" name="pass" class="form-control form-control-submit"  placeholder="Password" required="">
                        <div data-name="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></div>
                      </div>
                      <div class="form-group checkbox-reset">
                        <label class="custom-checkbox mb-0">
                          <input type="checkbox" name="#"> <span class="checkmark"></span> Keep me signed in</label> <a href="#">Reset password</a>
                      </div>
                      <div class="form-group">
                        <button type="submit" name="signin" class="btn-second btn-submit full-width">
                          <img src="logoG.png" alt="btn logo">Sign in</button>
                      </div>
                        
                        </form>
                        
                      <div class="form-group text-center"> <span>or</span>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn-second btn-facebook full-width">
                          <img src="Login_files/facebook-logo.svg" alt="btn logo">Continue with Facebook</button>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn-second btn-google full-width">
                          <img src="Login_files/google-logo.png" alt="btn logo">Continue with Google</button>
                      </div>
                      <div class="form-group text-center mb-0"> <a href="Register.html">Create your account</a>
                      </div>
                    </div>
                  </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Theme skins -->
<!--
    <div class="color-theme transition-4">
        <div class="theme-switch">
            <span class="switch">
              <i class="fa fa-eye"></i>
            </span>
        </div>
        <div class="theme-colors transition-4">
            <h4>Theme Skins:</h4>
            <ul class="theme-ul">
                <li>
                  <span class="each-color co4" data-color="assets/css/color4.css">
                      <img src="Login_files/co-4.png" alt="">
                  </span>
                </li>
                <li>
                    <span class="each-color co2" data-color="assets/css/color2.css">
                        <img src="Login_files/co-2.png" alt="">
                    </span>
                </li>
                <li>
                    <span class="each-color co3" data-color="assets/css/color3.css">
                        <img src="Login_files/co-1.png" alt="">
                    </span>
                </li>
                <li>
                    <span class="each-color co5" data-color="assets/css/color5.css">
                        <img src="Login_files/co-5.png" alt="">
                    </span>
                </li>
                <li>
                    <span class="each-color co6" data-color="assets/css/color6.css">
                        <img src="Login_files/co-6.png" alt="">
                    </span>
                </li>
                <li>
                    <span class="each-color co7" data-color="assets/css/color7.css">
                        <img src="Login_files/co-7.png" alt="">
                    </span>
                </li>
                <li>
                    <span class="each-color co8" data-color="assets/css/color8.css">
                        <img src="Login_files/co-8.png" alt="">
                    </span>
                </li>
            
            </ul>
            <p class="fs-13 "><b>Note: </b>This will not change any image colors.</p>
        </div>
    </div>
-->
    <!-- Theme skins -->
  <!-- Place all Scripts Here -->
  <!-- jQuery -->
  <script src="Login_files/jquery.js"></script>
  <!-- Popper -->
  <script src="Login_files/popper.js"></script>
  <!-- Bootstrap -->
  <script src="Login_files/bootstrap.js"></script>
  <!-- Range Slider -->
  <script src="Login_files/ion.js"></script>
  <!-- Swiper Slider -->
  <script src="Login_files/swiper.js"></script>
  <!-- Nice Select -->
  <script src="Login_files/jquery_003.js"></script>
  <!-- magnific popup -->
  <script src="Login_files/jquery_002.js"></script>
  <!-- Maps -->
  <script src="Login_files/js"></script>
  <!-- sticky sidebar -->
  <script src="Login_files/sticksy.js"></script>
  <!-- Munch Box Js -->
  <script src="Login_files/munchbox.js"></script>
  <!-- /Place all Scripts Here -->



</body></html>