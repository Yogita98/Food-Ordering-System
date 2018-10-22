
<?php
session_start();

$rest_name = $_GET['title'];
$food_name = $_GET['food'];
$food_price = $_GET['price'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO itemsincart (restaurant_name,food_name,food_price)
VALUES ('$rest_name','$food_name','$food_price')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//alert('Item added to cart!');
echo "<script type='text/javascript'> window.location.href='grandmamas.php'</script>"; 

$conn->close();
//session_destroy();
?>