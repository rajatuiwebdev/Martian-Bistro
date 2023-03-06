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
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;800&display=swap"
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
          <div class="cart-summary-wrapper">
            <div class="cart-summary">Cart summary</div>
          </div>
        </div>
        <div class="cart-summery">
          <img class="cart-summery-child" alt="" src="public/frame-16@2x.png" />
          <div class="group-parent">
            <div class="martian-chhole-bhatoore-parent">
              <b class="martian-chhole-bhatoore">Martian Velvet Pastry</b>
              <div class="material-symbolsstar">
                <div class="wrapper">
                  <div class="martian-chhole-bhatoore">
                    <span class="span">0</span><span class="span1"> 25.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-parent">
              <button class="container"><div class="div1 minus">-</div></button>
              <div class="div2" id="item1">1</div>
              <button class="container"><div class="div1 plus">+</div></button>
            </div>
          </div>
        </div>
        <div class="cart-summery">
          <img
            class="cart-summery-child"
            alt=""
            src="public/frame-161@2x.png"
          />
          <div class="group-parent">
            <div class="martian-chhole-bhatoore-group">
              <b class="martian-chhole-bhatoore">Martian Cheese Burger</b>
              <div class="material-symbolsstar">
                <div class="wrapper">
                  <div class="martian-chhole-bhatoore">
                    <span class="span">0</span><span class="span1"> 25.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-parent">
              <button class="container"><div class="div1 minus2">-</div></button>
              <div class="div2" id="item2">1</div>
              <button class="container plus2"><div class="div1">+</div></button>
            </div>
          </div>
        </div>
      </div>
      <div class="down-sec">
        <button class="offers">
          <div class="try-new-container">
            <span class="try-new">TRY NEW </span><span class="span4">|</span
            ><span class="try-new"> 40% FLAT ON 1ST ORDER</span>
          </div>
        </button>
        <div class="frame-container">
          <div class="subtotal-parent">
            <div class="subtotal">Subtotal</div>
            <div class="div8"><span class="span">0</span> 50.00</div>
          </div>
          <div class="tax-parent">
            <div class="subtotal">Tax</div>
            <div class="div8">+ <span class="span">0</span> 5.00</div>
          </div>
          <div class="subtotal-group">
            <div class="subtotal">Subtotal</div>
            <div class="div8"><span class="span">0</span> 55.00</div>
          </div>
        </div>
        <a href="../Payment/index.php" style="text-decoration: none;"><button class="button"><div class="menu" >Proceed</div></button></a>
        <div class="sticky-bar">
          <img
            class="material-symbolshome-app-logo-icon"
            alt=""
            src="public/materialsymbolshomeapplogo.svg"
          /><img
            class="material-symbolshome-app-logo-icon"
            alt=""
            src="public/materialsymbolsshoppingcartrounded.svg"
          /><img
            class="material-symbolshome-app-logo-icon"
            alt=""
            src="public/riteamfill.svg"
          /><img
            class="material-symbolshome-app-logo-icon"
            alt=""
            src="public/clarityimagegallerysolid.svg"
          /><img
            class="material-symbolshome-app-logo-icon"
            alt=""
            src="public/healthiconsuiuserprofile.svg"
          />
        </div>
      </div>
    </div>
    <script src="cart.js"></script>
  </body>
</html>
