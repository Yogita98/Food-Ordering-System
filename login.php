<?php

if (isset($_POST['someAction'])) {
        header("location: /login_with_google_using_php/index.php");
  		exit;  

    //update action
}
else{
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: firstpage.php");
  exit;
}
 
// Include config file
require_once "config.php";
global $link;

$sql = "DELETE FROM itemsincart";

if ($link->query($sql) === TRUE) {
    //echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users2 WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
             // Set parameters
            $param_username = $username;
            
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
           
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                             //Password is correct, so start a new session
                            session_start();
                            
                            //Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                           
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: /WT MiniProject/firstpage.php");
                        } else{
                          //  // Display an error message if password is not valid
                            $password_err = "The password you entered is incorrect.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
         // Close statement
        mysqli_stmt_close($stmt);
    }
    // Close connection
    mysqli_close($link);
}
}
}


// $cookie_name = "User";
// $cookie_value = $username;
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

// if(!isset($_COOKIE[$cookie_name])) {
//      echo "Cookie named '" . $cookie_name . "' is not set!";
// } else {
//      echo "Cookie '" . $cookie_name . "' is set!<br>";
//      echo "Value is: " . $_COOKIE[$cookie_name];
// }

?>
 
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="login-clean">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        	<h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" onclick="document.location.href='/WT MiniProject/firstpage.php'">Log In</button></div><p style="font-size: 15px;">Dont have an account?<a href="register.php">Sign up now</a>.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; ---or Continue with---</p>
            <button class="btn btn-primary btn-block" name="someAction">Google</button>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>