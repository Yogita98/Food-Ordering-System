
     <?php
     session_start();
     ?>                   
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="assets_displaycart/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_displaycart/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets_displaycart/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets_displaycart/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets_displaycart/css/Projects-Clean.css">
    <link rel="stylesheet" href="assets_displaycart/css/styles.css">
    <link rel="stylesheet" href="assets_displaycart/css/Payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
        
    
.search-button {
  box-sizing: border-box;
  margin-top: 40px;
}

/* Style the search field */
form.search_cart input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
  border-radius: 10px;
}

/* Style the submit button */
form.search_cart button {
  float: left;
  width: 20%;
  padding: 10px;
  background: rgb(86,198,198);
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
  border-radius: 10px;
}

form.search_cart button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.search_cart::after {
  content: "";
  clear: both;
  display: table;
}



/*Auto Complete*/
.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9; 
}

.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
.table-responsive {
            width:75%;
            text-align: center;
            border-collapse: collapse;
            margin-top: 40px;
        }
        table,th,td {
            border:1px;

        }

        h4{
            margin-top: 40px;
            margin-bottom: 5px;

        }
        form, #results {
      width: 80%;
      margin: auto;
    }
    

</style>
</head>

<body>

<div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a><img class="image" src="assets_displaycart/logos/logo1_1.png" style="height:70px; width:70px;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation" data-bs-hover-animate="pulse"><a class="nav-link" href="firstpage.php" data-bs-hover-animate="pulse">Home</a></li>
                        <li class="nav-item" role="presentation" data-bs-hover-animate="pulse"><a class="nav-link" href="#" data-bs-hover-animate="pulse">About</a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse">Restaurants </a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="restaurants_citywise.php">Mumbai</a><a class="dropdown-item" role="presentation" href="restaurants_citywise.php">Navi Mumbai</a><a class="dropdown-item" role="presentation" href="restaurants_citywise.php">Thane</a></div>
                        </li>
                    </ul><span class="navbar-text actions"> </span></div>
            </div>
        </nav>
    </div>
    

    <div class="container" id="main" align="center">
        <div class="search-button">
            <form class="search_cart" id="search_cart" action="searchcart.php" method="post">
                <input type="text" placeholder="Search item in cart.." name="search-item" action="searchcart.php" id="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="row">
            <div id="results"></div>
        </div>
        



        

    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
     crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
     crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
     crossorigin="anonymous"></script>

    <script>
        $(function () {
            load_data();
            function load_data(query)
            {
                $.ajax({
                    url:"searchcart.php",
                    method:"POST",
                    data:{query:query},
                    success:function(data)
                    {
                        $('#results').html(data);
                    }
                });
            }
            $('#search').keyup(function(){
                var search = $(this).val();
                if(search != '')
                {
                    load_data(search);
                }
                else
                {
                    load_data();
                }
            });
        });
    </script>
             <script src="assets_menu/js/jquery.min.js"></script>
    <script src="assets_menu/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
