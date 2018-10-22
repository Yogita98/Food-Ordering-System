
<!DOCTYPE html>
<html>
<body>
<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cart";
$food = 'Waffles';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM itemsincart WHERE food_name = '$food' ";

if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$sql = "SELECT * FROM itemsincart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$restd_name = $row["restaurant_name"];
    	$foodd_name = $row["food_name"];
    	$foodd_price = $row["food_price"];
    	
        echo "<br> ". $restd_name . "  |  ".$foodd_name."  |  ".$foodd_price. "<br>";
    }
} else {
    echo "Cart is Empty";
}

$conn->close();
session_destroy();
?>
</body>
</html>