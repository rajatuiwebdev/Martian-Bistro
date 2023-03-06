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
  <script>
    window.addEventListener("load", () => {
        if (Notification?.permission === "granted") {
          let i = 0;
          const interval = setInterval(() => {
            const n = new Notification(`Order has been placed successfully. `, { tag: "soManyNotification" });
            if (i === 9) {
              clearInterval(interval);
            }
            i++;
          }, 200);
        } else if (Notification && Notification.permission !== "denied") {
          Notification.requestPermission((status) => {
            if (status === "granted") {
              let i = 0;
              const interval = setInterval(() => {
                const n = new Notification(`Order has been placed successfully.`, {
                  tag: "soManyNotification",
                });
                if (i === 9) {
                  clearInterval(interval);
                }
                i++;
              }, 200);
            } else {
              alert("Your order has been placed successfully. ");
            }
          });
        } else {
          alert("Your order has been placed successfully. ");
        }
      });
    ;

  </script>
  <body>
    <div class="menu-page">
      <div class="content">
        <div class="content-inner">
          <div class="order-details-wrapper">
            <div class="order-details">Order Details</div>
          </div>
        </div>
        <div class="order-details1">
          <img
            class="image-7-icon"
            alt=""
            loading="eager"
            src="https://api.qrcode-monkey.com/tmp/616537056423cd8fd94d39a0959acc98.png"
          />
          <div class="order-id-mars728394638-wrapper">
            <div class="order-id-mars728394638">Order Id: MARS728394638</div>
          </div>
          <div class="order-id-mars728394638-wrapper">
            <div class="order-id-mars728394638">Date: 5-MAR-2050</div>
          </div>
          <div class="order-details-inner">
            <div class="frame-parent">
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
          </div>
        </div>
      </div>
      <div class="sticky-bar">
        <a href="../index.html">
        <img
          class="material-symbolshome-app-logo-icon"
          alt=""
          src="public/materialsymbolshomeapplogo.svg"
        /></a><a href="../CartS/"><img
          class="material-symbolshome-app-logo-icon"
          alt=""
          src="public/mdifood.svg"
        /></a><a href="../OurTeam/index.html"><img
          class="material-symbolshome-app-logo-icon"
          alt=""
          src="public/riteamfill.svg"
        /></a><a href="../Gallery/index.html"><img
          class="material-symbolshome-app-logo-icon"
          alt=""
          src="public/clarityimagegallerysolid.svg"
        /></a><a href="../info/index.html"><img
          class="material-symbolshome-app-logo-icon"
          alt=""
          src="public/healthiconsuiuserprofile.svg"
        /></a>
      </div>
    </div>
  </body>
</html>
