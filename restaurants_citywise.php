<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citywise</title>
    <link rel="stylesheet" href="assets_citywise/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_citywise/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets_citywise/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets_citywise/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets_citywise/css/Projects-Clean.css">
    <link rel="stylesheet" href="assets_citywise/css/Search-Button.css">
    <link rel="stylesheet" href="assets_citywise/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a><img class="image" src="assets_citywise/logos/logo1_1.png" style="height: 70px;width: 70px;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation" data-bs-hover-animate="pulse"><a class="nav-link" href="firstpage.php" data-bs-hover-animate="pulse">Home</a></li>
                        <li class="nav-item" role="presentation" data-bs-hover-animate="pulse"><a class="nav-link" href="#" data-bs-hover-animate="pulse">About</a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse">Restaurants </a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="restaurants_citywise.php">Mumbai</a><a class="dropdown-item" role="presentation" href="restaurants_citywise.php">Navi Mumbai</a><a class="dropdown-item" role="presentation" href="restaurants_citywise.php">Thane</a></div>
                        </li>
                    </ul><span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="register.php">Sign Up</a></span></div>
            </div>
        </nav>
    </div>
    <!-- <div class="search-button" align="center">
        <form class="example" action="/action_page.php" style="margin:auto;max-width:75%">
            <input type="text" placeholder="Search Location.." name="search-location">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
     --><div class="projects-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Restaurants </h2>
                <p class="text-center">A collection of best restaurants of the city is right in front of you!! </p>
            </div>
            <div class="row projects">
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="assets_citywise/img/chaat3.jpg">
                    <h3 class="name">Urban Street Cafe</h3>
                    <p class="description"><a href="urban_street_cafe.php">Visit >> </a></p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="assets_citywise/img/noodles.jpg">
                    <h3 class="name">Flavours of China</h3>
                    <p class="description"><a href="flavors.php">Visit >> </a></p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="assets_citywise/img/food_pizza.jpg">
                    <h3 class="name">Trofima</h3>
                    <p class="description"><a href="trofima.php">Visit >> </a></p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="assets_citywise/img/pexel_artistic3.jpeg">
                    <h3 class="name">The Bar Stock Exchange</h3>
                    <p class="description"><a href="#">Visit >> </a></p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="assets_citywise/img/lollipop.jpg">
                    <h3 class="name">Yellow Chilli</h3>
                    <p class="description"><a href="#">Visit >> </a></p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="assets_citywise/img/food_icecream2.jpg">
                    <h3 class="name">Grandmama's Cafe</h3>
                    <p class="description"><a href="grandmamas.php">Visit >> </a> </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i></a><a href="https://www.snapchat.com/"><i class="icon ion-social-snapchat"></i></a><a href="https://twitter.com/login?lang=en"><i class="icon ion-social-twitter"></i></a><a href="https://www.facebook.com/"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="firstpage.php">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Foodaholic © 2018</p>
        </footer>
    </div>
    <script src="assets_citywise/js/jquery.min.js"></script>
    <script src="assets_citywise/bootstrap/js/bootstrap.min.js"></script>
    <script src="assests/js/auto_complete.js"></script>
</body>

</html>