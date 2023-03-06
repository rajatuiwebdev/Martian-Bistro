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

  <link rel="stylesheet" href="css/global.css" />
  <link rel="stylesheet" href="css/menu.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;800&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" />

</head>

<body>
  <div class="menu-dish-view">
    <div class="search-form">
      <input type="text" class="searchform" placeholder="Search here" id="searchTxt">
    </div>
    <div class="content">
      <div class="content-inner">
        <div class="martian-menu-wrapper">
          <div class="martian-menu">Martian Menu</div>
        </div>
      </div>
      <?php     if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['ex(1)']))
    {
        ex(1);
    }
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['ex(2)']))
    {
        ex(2);
    }
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['ex(3)']))
    {
        ex(3);
    }
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['ex(4)']))
    {
        ex(4);
    }
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['ex(5)']))
    {
        ex(5);
    }
        function ex($id)
        {
          include "database.php";
          $sql = "INSERT INTO cart VALUES('".$_SESSION['user_email']."', $id)";         
          mysqli_query($conn, $sql);
    
          echo '<script>
          window.onload = () => {
              alertify.success("Item added to cart successfully.");
          }

      </script>';
    
        }?>
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

        .alertify-notifier .ajs-message.ajs-success {
          color: #000;
          text-shadow: none;
          font-family: 'Poppins', sans-serif;

        }
      </style>
      <form action="menu.php" method="POST">
        <div class="dish-lists">
          <img class="dish-lists-child popubimg1" onclick='popUpbtn("assets/menupublic/frame-16@2x.png")' alt=""
            src="assets/menupublic/frame-16@2x.png" />
          <div class="group-parent">
            <div class="martian-chhole-bhatoore-parent">
              <b class="martian-chhole-bhatoore">Martian Velvet Pastry</b>
              <div class="material-symbolsstar">
                <div class="vector-parent">
                  <img class="vector-icon" alt="" src="assets/menupublic/vector.svg" />
                  <div class="div">5/5</div>
                </div>
                <div class="menu"><span class="span">0</span> 25.00</div>
              </div>
            </div>
            <button class="button" type="submit" name="ex(1)">
              <div class="menu">Add</div>
            </button>
          </div>
        </div>
        <div class="dish-lists">
          <img class="dish-lists-child" alt="" src="assets/menupublic/frame-161@2x.png" />
          <div class="group-parent">
            <div class="martian-chhole-bhatoore-parent">
              <b class="martian-chhole-bhatoore">Martian Egg Buster</b>
              <div class="material-symbolsstar">
                <div class="vector-parent">
                  <img class="vector-icon" alt="" src="assets/menupublic/vector.svg" />
                  <div class="div">5/5</div>
                </div>
                <div class="menu"><span class="span">0</span> 25.00</div>
              </div>
            </div>
            <button class="button" type="submit" name="ex(2)">
              <div class="menu">Add</div>
            </button>
          </div>
        </div>
        <div class="dish-lists">
          <button class="dish-lists-inner"></button>
          <div class="group-parent">
            <div class="martian-chhole-bhatoore-parent">
              <b class="martian-chhole-bhatoore">Martian Mega Cone</b>
              <div class="material-symbolsstar">
                <div class="vector-parent">
                  <img class="vector-icon" alt="" src="assets/menupublic/vector.svg" />
                  <div class="div">5/5</div>
                </div>
                <div class="menu"><span class="span">0</span> 25.00</div>
              </div>
            </div>
            <button class="button" type="submit" name="ex(3)">
              <div class="menu">Add</div>
            </button>
          </div>
        </div>
        <div class="dish-lists">
          <button class="frame-button"></button>
          <div class="group-parent">
            <div class="martian-chhole-bhatoore-parent">
              <b class="martian-chhole-bhatoore">Martian Coco Cookies</b>
              <div class="material-symbolsstar">
                <div class="vector-parent">
                  <img class="vector-icon" alt="" src="assets/menupublic/vector.svg" />
                  <div class="div">5/5</div>
                </div>
                <div class="menu"><span class="span">0</span> 25.00</div>
              </div>
            </div>
            <button class="button" type="submit" name="ex(4)">
              <div class="menu">Add</div>
            </button>
          </div>
        </div>
        <div class="dish-lists">
          <button class="dish-lists-child1"></button>
          <div class="group-parent">
            <div class="martian-chhole-bhatoore-parent">
              <b class="martian-chhole-bhatoore">Martian Choco Dust</b>
              <div class="material-symbolsstar">
                <div class="vector-parent">
                  <img class="vector-icon" alt="" src="assets/menupublic/vector.svg" />
                  <div class="div">5/5</div>
                </div>
                <div class="menu"><span class="span">0</span> 25.00</div>
              </div>
            </div>
            <button class="button" type="submit" name="ex(5)">
              <div class="menu">Add</div>
            </button>
          </div>
        </div>
    </div>
    <nav class="sticky-bar">
      <button class="material-symbolshome-app-logo">
        <a href="index.php">
          <img class="vector-icon5" alt="" src="assets/menupublic/vector5.svg" /></a></button><button
        class="material-symbolshome-app-logo">
        <a href="order/index.php">
          <img class="vector-icon6" alt="" src="assets/menupublic/vector6.svg" /></a></button><a
        href="OurTeam/index.php"><img class="riteam-fill-icon" alt="" src="assets/menupublic/riteamfill.svg" /></a><a
        href="Gallery/index.php"><button class="material-symbolshome-app-logo">
          <img class="vector-icon7" alt="" src="assets/menupublic/vector7.svg" /><img class="vector-icon8" alt=""
            src="assets/menupublic/vector8.svg" /><img class="vector-icon9" alt=""
            src="assets/menupublic/vector9.svg" /><img class="vector-icon10" alt="" /></button></a><button
        class="material-symbolshome-app-logo">
        <a href="info/index.php"><img class="group-icon" alt="" src="assets/menupublic/group.svg" /></a>
      </button>
    </nav>
    <a href="order/index.php">
      <button class="ellipse-parent">
        <img class="frame-child" alt="" src="assets/menupublic/ellipse-1.svg" /><img class="vector-icon11" alt=""
          src="assets/menupublic/vector10.svg" />
          <a href="order/index.php">

        <div class="ellipse-group">
          <img class="frame-item" alt="" src="assets/menupublic/ellipse-2.svg" />
          <div class="div10" id="add">0</div>
        </div>
    </a>
      </button>
    </a>

  </div>
  <div id="dish-view" class="dish-view">

    <div class="material-symbolscancel-outlin-wrapper">
      <button class="material-symbolscancel-outlin">
        <img class="group-icon" onclick="offpopup()" alt="" src="assets/menupublic/vector11.svg" />
      </button>
    </div>
    <div class="frame-parent">
      <div class="calories-parent">
        <div class="martian-chhole-bhatoore">Calories :</div>
        <div class="div11">12</div>
      </div>
      <div class="calories-parent">
        <div class="martian-chhole-bhatoore">Total Fat:</div>
        <div class="grams">0.7 grams</div>
      </div>
      <div class="calories-parent">
        <div class="martian-chhole-bhatoore">Saturated Fat:</div>
        <div class="grams1">0.4 grams</div>
      </div>
      <div class="calories-parent">
        <div class="martian-chhole-bhatoore">Calories :</div>
        <div class="grams2">0 grams</div>
      </div>
      <div class="calories-parent">
        <div class="martian-chhole-bhatoore">Trans Fat:</div>
        <div class="grams2">0 grams</div>
      </div>
      <div class="calories-parent">
        <div class="martian-chhole-bhatoore">Cholesterol:</div>
        <div class="milligrams">0 milligrams</div>
      </div>
    </div>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

  <script src="js/menu.js"></script>
</body>

</html>