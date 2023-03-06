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
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;800&display=swap"
    />
  </head>
  <body>
    <div class="profile">
      <div class="our-team">Our Team</div>
      <div class="frame-parent">
        <div class="frame-group">
          <div class="vector-parent">
            <img class="frame-child" alt="" src="public/ellipse-3@2x.png" />
            <div class="ashu">Ashu</div>
            <div class="uiux-head">UI/UX Head</div>
          </div>
          <div class="vector-parent">
            <img class="frame-child" alt="" src="public/ellipse-31@2x.png" />
            <div class="ashu">Tejasvi</div>
            <div class="uiux-head">UI/UX</div>
          </div>
        </div>
        <div class="frame-group">
          <div class="vector-parent">
            <img class="frame-child" alt="" src="public/ellipse-32@2x.png" />
            <div class="ashu">Rajat</div>
            <div class="uiux-head">Backend</div>
          </div>
          <div class="vector-parent">
            <img class="frame-child" alt="" src="public/ellipse-33@2x.png" />
            <div class="ashu">Ashish</div>
            <div class="uiux-head">Frontend</div>
          </div>
        </div>
        <div class="group-wrapper">
          <div class="ellipse-container">
            <img class="group-child" alt="" src="public/ellipse-34@2x.png" />
            <div class="mohd-zaid-khan">Mohd Zaid Khan</div>
            <div class="team-lead">Team Lead</div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
