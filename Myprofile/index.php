<?php 
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
        header("location: index.php");}
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;800&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap"
    />
  </head>
  <body>
    <div class="profile">
      <div class="my-profile">Welcome</div>
      <div class="group-parent">
        <div class="ellipse-parent">
          <img class="group-child" alt="" src="public/ellipse-3@2x.png" />
          <div class="user-name">Martian!</div>
        </div>
        <div class="hackhoundgmailcom-parent">
          <div class="hackhoundgmailcom"><?php echo $_SESSION["user_email"]?></div>
          <div class="email">Email :</div>
        </div>
      </div>
    </div>
  </body>
</html>
