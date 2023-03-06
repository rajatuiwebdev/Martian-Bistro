<?php 
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
        header("location: index.php");}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap"
    />
  </head>
  <body>
    <div class="galleria">
      <div class="galleria1">
        <div class="galleria2">Galleria</div>
        <div class="rectangle-parent">
          <img class="frame-child" alt="" src="public/rectangle-2@2x.png" /><img
            class="frame-child"
            alt=""
            src="public/rectangle-3@2x.png"
          /><img
            class="frame-child"
            alt=""
            src="public/rectangle-4@2x.png"
          /><img
            class="frame-child"
            alt=""
            src="public/rectangle-5@2x.png"
          /><img class="frame-child" alt="" src="public/rectangle-1@2x.png" />
        </div>
      </div>
      <nav class="sticky-bar">
        <a href="../index.php"><button class="material-symbolshome-app-logo">
          <img class="vector-icon" alt="" src="public/vector.svg" /></button
        ></a><a href="../order/index.php"><button class="mdifood">
          <img class="vector-icon1" alt="" src="public/vector1.svg" /></button
        ></a><a href="../OurTeam/index.php"><button class="material-symbolshome-app-logo">
          <img class="group-icon" alt="" src="public/vector2.svg" /></button
        ></a><a href="../Gallery/index.php"><button class="material-symbolshome-app-logo">
          <img class="vector-icon3" alt="" src="public/vector3.svg" /><img
            class="vector-icon4"
            alt=""
            src="public/vector4.svg"
          /><img class="vector-icon5" alt="" src="public/vector5.svg" /><img
            class="vector-icon6"
            alt=""
          /></button
        ></a><a href="../info/index.php"><button class="material-symbolshome-app-logo">
          <img class="group-icon" alt="" src="public/group.svg" />
        </button></a>
      </nav>
    </div>
    
  </body>
</html>
