
<?php
session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grandmama's Cafe</title>
    <link rel="stylesheet" href="assets_menu/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_menu/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets_menu/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets_menu/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets_menu/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets_menu/css/Projects-Clean.css">
    <link rel="stylesheet" href="assets_menu/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets_menu/css/styles.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a><img class="image" src="assets_menu/logos/logo1_1.png" style="height:70px; width:70px;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation" data-bs-hover-animate="pulse"><a class="nav-link" href="firstpage.php" data-bs-hover-animate="pulse">Home</a></li>
                        <li class="nav-item" role="presentation" data-bs-hover-animate="pulse"><a class="nav-link" href="#" data-bs-hover-animate="pulse">About</a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse">Restaurants </a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="restaurants_citywise.html">Mumbai</a><a class="dropdown-item" role="presentation" href="restaurants_citywise.html">Navi Mumbai</a><a class="dropdown-item" role="presentation" href="restaurants_citywise.html">Thane</a></div>
                        </li>
                    </ul><span class="navbar-text actions" data-bs-hover-animate="pulse"> <button class="btn btn-light action-button" onclick="document.location.href='displaycart.php'"data-bs-hover-animate="pulse">Go to Cart</a></span></div>
            </div>
        </nav>
    </div>
    
    <img src="assets_menu/img/grandmamas.jpg" style="width: 100%">
    

    <div class="projects-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Our Menu</h2>
            </div>
            <div class="row projects">
                <div class="col-sm-6 col-lg-4 item">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="assets_menu/img/burger.jpg" alt="Food" style="width:350px;height:200px">
                            </div>
                            <div class="flip-box-back">
                                <h1>Price</h1>
                                <h1>Rs.100</h1>
                            </div>
                        </div>
                    </div>
                    <h3 class="name" id="burger">Burger</h3><a onclick="takeinput('Grandmamas Cafe','Burger',100)" method="get"><button class="btn btn-primary" type="button">Add to Cart</button></a>
                    <p class="description"></p>
                </div>


                <div class="col-sm-6 col-lg-4 item">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="assets_menu/img/fondue.jpg" alt="Food" style="width:350px;height:200px">
                            </div>
                            <div class="flip-box-back">
                                <h1>Price</h1>
                                <h1>Rs.200</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                    <h3 class="name" id="fondue">Fondue</h3><a onclick="takeinput('Grandmamas Cafe','Fondue',200)" method="get"><button class="btn btn-primary" type="button">Add to Cart</button></a>
                    <p class="description"></p>
                </div>

                </div>


                <div class="col-sm-6 col-lg-4 item">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="assets_menu/img/pizza.jpg" alt="Food" style="width:350px;height:200px">
                            </div>
                            <div class="flip-box-back">
                                <h1>Price</h1>
                                <h1>Rs.180</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                    <h3 class="name" id="pizza">Pizza</h3><a onclick="takeinput('Grandmamas Cafe','Pizza',180)" method="get"><button class="btn btn-primary" type="button">Add to Cart</button></a>
                    <p class="description"></p>
                </div>
                </div>


                <div class="col-sm-6 col-lg-4 item">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="assets_menu/img/pc_pasta.jpg" alt="Food" style="width:350px;height:200px">
                            </div>
                            <div class="flip-box-back">
                                <h1>Price</h1>
                                <h1>Rs.220</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                    <h3 class="name" id="pasta">Pasta</h3><a onclick="takeinput('Grandmamas Cafe','Pasta',220)" method="get"><button class="btn btn-primary" type="button">Add to Cart</button></a>
                    <p class="description"></p>
                </div>
                </div>


                <div class="col-sm-6 col-lg-4 item">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="assets_menu/img/pc_waffles.jpg" alt="Food" style="width:350px;height:200px">
                            </div>
                            <div class="flip-box-back">
                                <h1>Price</h1>
                                <h1>Rs.160</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                    <h3 class="name" id="waffles">Waffles</h3><a onclick="takeinput('Grandmamas Cafe','Waffles',160)" method="get"><button class="btn btn-primary" type="button">Add to Cart</button></a>
                    <p class="description"></p>
                </div>
                </div>


                <div class="col-sm-6 col-lg-4 item">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="assets_menu/img/chaat2.jpg" alt="Food" style="width:350px;height:200px">
                            </div>
                            <div class="flip-box-back">
                                <h1>Price</h1>
                                <h1>Rs.90</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                    <h3 class="name" id="chaat">Chaat</h3><a onclick="takeinput('Grandmamas Cafe','Chaat',90)" method="get"><button class="btn btn-primary" type="button">Add to Cart</button></a>
                    <p class="description"></p>
                </div>
                </div>


                <div class="col-sm-6 col-lg-4 item">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="assets_menu/img/nachos.jpg" alt="Food" style="width:350px;height:200px">
                            </div>
                            <div class="flip-box-back">
                                <h1>Price</h1>
                                <h1>Rs.210</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                    <h3 class="name" id="nachos">Nachos</h3><a onclick="takeinput('Grandmamas Cafe','Nachos',210)" method="get"><button class="btn btn-primary" type="button">Add to Cart</button></a>
                    <p class="description"></p>
                </div>
                </div>


                <div class="col-sm-6 col-lg-4 item">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="assets_menu/img/thai.jpg" alt="Food" style="width:350px;height:200px">
                            </div>
                            <div class="flip-box-back">
                                <h1>Price</h1>
                                <h1>Rs.230</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                    <h3 class="name" id="burger">Thai</h3><a onclick="takeinput('Grandmamas Cafe','Thai',230)" method="get"><button class="btn btn-primary" type="button">Add to Cart</button></a>
                    <p class="description"></p>
                </div>
                </div>


                <div class="col-sm-6 col-lg-4 item">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="assets_menu/img/pancakes.jpg" alt="Food" style="width:350px;height:200px">
                            </div>
                            <div class="flip-box-back">
                                <h1>Price</h1>
                                <h1>Rs.170</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                    <h3 class="name" id="burger">Pancakes</h3><a onclick="takeinput('Grandmamas Cafe','Pancakes',170)" method="get"><button class="btn btn-primary" type="button">Add to Cart</button></a>
                    <p class="description"></p>
                </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-basic">
        <footer>
            <div class="social"><a href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i></a><a href="https://www.snapchat.com/"><i class="icon ion-social-snapchat"></i></a><a href="https://twitter.com/login?lang=en"><i class="icon ion-social-twitter"></i></a><a href="https://www.facebook.com/"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="/WT MiniProject/firstpage.php">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Foodaholic © 2018</p>
        </footer>
    </div>
    <script src="assets_menu/js/jquery.min.js"></script>
    <script src="assets_menu/bootstrap/js/bootstrap.min.js"></script>

    <script>
    function takeinput(title,fid,price)
    {
        var x = title;
        var y = fid;
        var z = price;
        window.location.href = "addtocart.php?title="+x + "&food="+y + "&price="+z;
    }


    </script>



</body>

</html>