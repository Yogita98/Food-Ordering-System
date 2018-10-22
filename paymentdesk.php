<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Desk</title>
    <link rel="stylesheet" href="assets_paymentdesk/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_paymentdesk/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets_paymentdesk/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets_paymentdesk/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets_paymentdesk/css/Projects-Clean.css">
    <link rel="stylesheet" href="assets_paymentdesk/css/styles.css">
    <link rel="stylesheet" href="assets_paymentdesk/css/Payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a><img class="image" src="assets_paymentdesk/logos/logo1_1.png" style="height:70px; width:70px;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation" data-bs-hover-animate="pulse"><a class="nav-link" href="firstpage.php" data-bs-hover-animate="pulse">Home</a></li>
                        <li class="nav-item" role="presentation" data-bs-hover-animate="pulse"><a class="nav-link" href="#" data-bs-hover-animate="pulse">About</a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse">Restaurants </a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="restaurants_citywise.php">Mumbai</a><a class="dropdown-item" role="presentation" href="restaurants_citywise.php">Navi Mumbai</a><a class="dropdown-item" role="presentation" href="restaurants_citywise.php">Thane</a></div>
                        </li>
                    </span></div>
            </div>
        </nav>
    </div>
    

    <div class="Payment">
      <div class="col-75">
        <div class="container1">
          <form action="orderconfirm.php">
          
            <div class="row">
              <div class="col-50">
                <h3>Billing Address</h3>
                <label for="fname"><i class="fa fa-user"></i>Name</label>
                <input type="text" id="fname" name="firstname">
                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                <input type="text" id="adr" name="address">
                <label for="city"><i class="fa fa-institution"></i> City</label>
                <input type="text" id="city" name="city">

                <div class="row">
                  <div class="col-50">
                    <label for="state">State</label>
                    <input type="text" id="state" name="state">
                  </div>
                  <div class="col-50">
                    <label for="zip">Pincode</label>
                    <input type="text" id="zip" name="zip">
                  </div>
                </div>
              </div>

              <div class="col-50">
                <h3>Payment</h3>
                <label for="fname">Accepted Cards</label>
                <div class="icon-container1">
                  <i class="fa fa-cc-visa" style="color:navy;"></i>
                  <i class="fa fa-cc-amex" style="color:blue;"></i>
                  <i class="fa fa-cc-mastercard" style="color:red;"></i>
                  <i class="fa fa-cc-discover" style="color:orange;"></i>
                </div>
                <label for="cname">Name on Card</label>
                <input type="text" id="cname" name="cardname">
                <label for="ccnum">Credit card number</label>
                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                <label for="expmonth">Exp Month</label>
                <input type="text" id="expmonth" name="expmonth">
                <div class="row">
                  <div class="col-50">
                    <label for="expyear">Exp Year</label>
                    <input type="text" id="expyear" name="expyear">
                  </div>
                  <div class="col-50">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv">
                  </div>
                </div>
              </div>
              
            </div >
            <button class="btn" onclick="showalert()">Continue to checkout </button>
            <h1 style="text-align: center"> OR </h1>
            <button class="btn" onclick="showalert()">Pay by COD</button> 
          </form>
        </div>
        
    </div> 
    <div class="footer-basic" style="padding:30px;">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="firstpage.php">Home</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Contact</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Foodaholic © 2018</p>
        </footer>
    </div>
    <script src="assets_paymentdesk/js/jquery.min.js"></script>
    <script src="assets_paymentdesk/bootstrap/js/bootstrap.min.js"></script>
    <script>
        function showalert()
        {
            alert("Order placed successfully!");
        }

    </script>
</body>

</html>