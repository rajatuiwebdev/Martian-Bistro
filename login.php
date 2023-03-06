<?php

include('config.php');

$login_button = '';
if(isset($_GET["code"]))
{
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
 if(!isset($token['error']))
 {
  $google_client->setAccessToken($token['access_token']);
  $_SESSION['access_token'] = $token['access_token'];
  $google_service = new Google_Service_Oauth2($google_client);
  $data = $google_service->userinfo->get();


  if(!empty($data['email']))
  {
   $email = $data['email'];
  }
  include 'database.php';
  $email = $_POST["userEmail"];
  $password = $_POST["userPassword"];
  $sql = "SELECT * FROM user_details WHERE user_email= '$email' AND user_password='googleauthenticated'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
      $login = true;
      $_SESSION["loggedin"] = true;
      header("location: menu.php");
  } else {
      $showError = 1;
  }
 }
}

//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if(!isset($_SESSION['access_token']))
{
 //Create a URL to obtain user authorization
 $login_button = '<a href="'.$google_client->createAuthUrl().'">';
}
?>
<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  
  $login = false;
  $showError = 0;
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
      include 'database.php';
      $email = $_POST["userEmail"];
      $password = $_POST["userPassword"];
      $sql = "SELECT * FROM user_details WHERE user_email= '$email' AND user_password='$password'";
      $result = mysqli_query($conn, $sql);
      $num = mysqli_num_rows($result);
      if ($num == 1) {
          $login = true;
          $_SESSION["loggedin"] = true;
          $_SESSION["user_email"] = $email ;
          header("location: menu.php");
      } else {
          $showError = 1;
      }
  }}
else{
  header("location: order.php");
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
<!-- JavaScript -->

<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>

  <link rel="stylesheet" href="./global.css" />
  <link rel="stylesheet" href="./index.css" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" />
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

.alertify-notifier .ajs-message.ajs-error{
    color: #000;
    text-shadow: none;
    font-family: 'Poppins', sans-serif;

}
</style>
<?php 
  if($showError == 1){
    echo '<script>
    window.onload = () => {
        alertify.error("You\'ve entered wrong password.");
    }
</script>';
  }
?>
<body>
  <div class="login-page">
    <div class="modal">
      <div class="section-title">
        <b class="log-in">Log In</b>
        <div class="login-to-get">Login to get delicious experience</div>
      </div>
      <form class="form" method="POST" action="login.php">
        <div class="input">
          <div class="email">Email*</div>
          <input class="text-input" type="email" required name="userEmail" autocomplete="off" />
        </div>
        <div class="input">
          <div class="password">Password*</div>
          <input class="text-input" type="password" required name="userPassword" autocomplete="off" />
        </div>
        <button class="button">
          <div class="menu">Login</div>
        </button>
      </form>
      <button class="buttons">
          <button class="button1">
            <img class="icon-google" alt="" src="public/icon--google.svg" /><?php echo $login_button;?><button class="button2"></button></a>
          </button>
        </button>
      <div class="links">
          <button class="forgot-your-password">Forgot your password?</button>
          <div class="content">
            <button class="dont-have-an">Don't have an account?</button><button class="forgot-your-password">Sign
              Up</button>
          </div>
        </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

</html>