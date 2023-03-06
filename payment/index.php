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
  </head>
  <body>
    <div class="menu-page">
      <div class="content">
        <div class="content-inner">
          <div class="payment-wrapper"><div class="payment">Payment</div></div>
        </div>
        <div class="frame-parent">
          <button class="image-2-wrapper">
            <img
              class="image-2-icon"
              alt=""
              src="public/image-2@2x.png"
            /></button
          ><button class="image-2-wrapper">
            <img
              class="image-3-icon"
              alt=""
              src="public/image-3@2x.png"
            /></button
          ><button class="image-2-wrapper">
            <img
              class="image-4-icon"
              alt=""
              src="public/image-4@2x.png"
            /></button
          ><button class="image-6-wrapper">
            <img class="image-6-icon" alt="" src="public/image-6@2x.png" />
          </button>
        </div>
        <button class="page-1-parent">
          <img class="page-1-icon" alt="" src="public/page1.svg" /><img
            class="vector-icon"
            alt=""
            src="public/vector.svg"
          /></button
        ><button class="content-child">
          <div class="image-5-parent">
            <img class="image-5-icon" alt="" src="public/image-5@2x.png" /><img
              class="vector-icon1"
              alt=""
              src="public/vector1.svg"
            />
          </div></button
        ><button class="material-symbolsadd-card-outl-parent">
          <img
            class="material-symbolsadd-card-outl-icon"
            alt=""
            src="public/materialsymbolsaddcardoutline.svg"
          />
          <div class="debit-card">Debit card</div>
          <img class="vector-icon" alt="" src="public/vector2.svg" /></button
        ><button class="material-symbolsadd-card-outl-parent">
          <img
            class="material-symbolsadd-card-outl-icon"
            alt=""
            src="public/materialsymbolsaddcardoutline1.svg"
          />
          <div class="debit-card">Credit card</div>
          <img class="vector-icon" alt="" src="public/vector2.svg" />
        </button>
      </div>
      <div class="frame-group">
        <div class="frame-container">
          <div class="subtotal-parent">
            <div class="subtotal">Subtotal</div>
            <div class="div"><span class="span">0</span> 50.00</div>
          </div>
          <div class="tax-parent">
            <div class="subtotal">Tax</div>
            <div class="div">+<span class="span">0</span> 5.00</div>
          </div>
          <div class="grand-total-parent">
            <div class="subtotal">Grand Total</div>
            <div class="div"><span class="span">0</span> 55.00</div>
          </div>
        </div>
        <a href="../OrderQR/index.php" style="text-decoration: none;"><button class="button"><div class="menu">Place Order</div></button></a>
        <div class="sticky-bar">
          <a href="../index.php"><img
            class="material-symbolsadd-card-outl-icon"
            alt=""
            src="public/materialsymbolshomeapplogo.svg"
          /></a><a href="../order/index.php"><img
            class="material-symbolsadd-card-outl-icon"
            alt=""
            src="public/materialsymbolsshoppingcartrounded.svg"
          /></a><a href="../OurTeam/index.php"><img
            class="material-symbolsadd-card-outl-icon"
            alt=""
            src="public/riteamfill.svg"
          /></a><a href=""></a><img
            class="material-symbolsadd-card-outl-icon"
            alt=""
            src="public/clarityimagegallerysolid.svg"
          /> <a href="../info/index.php"> <img
            class="material-symbolsadd-card-outl-icon"
            alt=""
            src="public/healthiconsuiuserprofile.svg"
          /></a>
        </div>
      </div>
    </div>
  </body>
</html>
