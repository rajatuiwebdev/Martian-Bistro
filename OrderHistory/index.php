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
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
    />
  </head>
  <body>
    <div class="menu-page">
      <div class="content">
        <div class="content-inner">
          <div class="order-history-wrapper">
            <div class="order-history">Order History</div>
          </div>
        </div>
        <div class="history">
          <img class="history-child" alt="" src="public/frame-16@2x.png" />
          <div class="group-parent">
            <div class="martian-chhole-bhatoore-parent">
              <b class="martian-chhole-bhatoore">Martian Velvet Pastry</b>
              <div class="material-symbolsstar">
                <div class="order-date-time-wrapper">
                  <div class="martian-chhole-bhatoore">Order date & time</div>
                </div>
                <div class="o-25"><span class="o">O</span> 25</div>
              </div>
            </div>
            <div class="material-symbolsstar1">
              <div class="pm-wrapper">
                <div class="martian-chhole-bhatoore">12:12 pm</div>
              </div>
              <div class="mar-2050">03-MAR-2050</div>
            </div>
            <button class="button"><div class="menu">Reorder</div></button>
          </div>
        </div>
        <div class="history">
          <img class="history-child" alt="" src="public/frame-161@2x.png" />
          <div class="group-parent">
            <div class="martian-chhole-bhatoore-parent">
              <b class="martian-chhole-bhatoore">Martian Cheese Bite </b>
              <div class="material-symbolsstar">
                <div class="order-date-time-wrapper">
                  <div class="martian-chhole-bhatoore">Order date & time</div>
                </div>
                <div class="o-25"><span class="o">O</span> 25</div>
              </div>
            </div>
            <div class="material-symbolsstar1">
              <div class="pm-wrapper">
                <div class="martian-chhole-bhatoore">12:12 pm</div>
              </div>
              <div class="mar-2050">03-MAR-2050</div>
            </div>
            <button class="button"><div class="menu">Reorder</div></button>
          </div>
        </div>
        <div class="history">
          <img class="history-child" alt="" src="public/frame-162@2x.png" />
          <div class="group-parent">
            <div class="martian-chhole-bhatoore-parent">
              <b class="martian-chhole-bhatoore">Martian Choco Dust</b>
              <div class="material-symbolsstar">
                <div class="order-date-time-wrapper">
                  <div class="martian-chhole-bhatoore">Order date & time</div>
                </div>
                <div class="o-25"><span class="o">O</span> 25</div>
              </div>
            </div>
            <div class="material-symbolsstar1">
              <div class="pm-wrapper">
                <div class="martian-chhole-bhatoore">12:12 pm</div>
              </div>
              <div class="mar-2050">03-MAR-2050</div>
            </div>
            <button class="button"><div class="menu">Reorder</div></button>
          </div>
        </div>
        <div class="history">
          <img class="history-child" alt="" src="public/frame-163@2x.png" />
          <div class="group-parent">
            <div class="martian-chhole-bhatoore-parent">
              <b class="martian-chhole-bhatoore">Martian Egg Buster</b>
              <div class="material-symbolsstar">
                <div class="order-date-time-wrapper">
                  <div class="martian-chhole-bhatoore">Order date & time</div>
                </div>
                <div class="o-25"><span class="o">O</span> 25</div>
              </div>
            </div>
            <div class="material-symbolsstar1">
              <div class="pm-wrapper">
                <div class="martian-chhole-bhatoore">12:12 pm</div>
              </div>
              <div class="mar-2050">03-MAR-2050</div>
            </div>
            <button class="button"><div class="menu">Reorder</div></button>
          </div>
        </div>
      </div>
      <nav class="sticky-bar">
        <button class="material-symbolshome-app-logo">
          <a href="../index.html">
          <img class="vector-icon" alt="" src="public/vector.svg" /></a></button
        ><button class="mdifood">
          <img class="vector-icon1" alt="" src="public/vector1.svg" /></button
        ><button class="material-symbolshome-app-logo"><a href="../OurTeam/index.html">
          <img class="group-icon" alt="" src="public/vector2.svg" /></a></button
        ><button class="material-symbolshome-app-logo"><a href="../Gallery/index.html">
          <img class="vector-icon3" alt="" src="public/vector3.svg" /><img
            class="vector-icon4"
            alt=""
            src="public/vector4.svg"
          /><img class="vector-icon5" alt="" src="public/vector5.svg" /><img
            class="vector-icon6"
            alt=""
          /></button
        ></a><button class="material-symbolshome-app-logo"><a href="../info/index.html">
          <img class="group-icon" alt="" src="public/group.svg" /></a>
        </button>
      </nav>
    </div>
  </body>
</html>
