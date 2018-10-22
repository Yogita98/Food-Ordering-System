

<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\WT MiniProject\vendor\phpmailer\phpmailer\src\Exception.php';
require 'C:\xampp\htdocs\WT MiniProject\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\WT MiniProject\vendor\phpmailer\phpmailer\src\SMTP.php';

require 'C:\xampp\htdocs\vendor\autoload.php';

require_once 'config.php';
global $link;
   $id=$_SESSION['id']  ;
   $sql = "SELECT id, username, email FROM users2 WHERE id = $id";

	$retval = mysqli_query( $link, $sql );
	if(!$retval ) {
      die('Could not get data: ' . mysqli_error($link));
   	}

   	$row = mysqli_fetch_array($retval, MYSQLI_ASSOC);

    //echo "ID :{".$row['id']."}<br>NAME : {".$row['username']."} <br>EMAIL : {".$row['email']."} <br>--------------------------------<br>";
    // echo "Fetched data successfully\n";

	$sql = 'SELECT * FROM itemsincart';
	$retval1 = mysqli_query( $link, $sql );
	if(!$retval1 ) {
    	die('Could not get data: ' . mysqli_error($link));
   	}

   	//$row = mysqli_fetch_array($retval1, MYSQLI_ASSOC);

	while ($row1 = mysqli_fetch_array($retval1, MYSQLI_ASSOC)) {
		//$output = NULL;
		$output = $output." "."".$row1['restaurant_name']."<br>".$row1['food_name']." <br>".$row1['food_price']." <br>";
     //echo "Fetched data successfully\n";

	}
	$output = $output."---------------------------------<br><p style='font-style:italic;font-size:30px;'>Thanks for placing your order. We look forward to see you soon<p><br><br><br><br><i>Happy Eating!<br>From Team Foodaholic</i><br>";
	echo $output;


     $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '2016.yogita.bhatia@ves.ac.in';                 // SMTP username
    $mail->Password = 'yogita@123';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('2016.yogita.bhatia@ves.ac.in', 'Yogita Bhatia');
    $mail->addAddress('2016.hiro.nikhil@ves.ac.in', 'NIKHIL GHIND');
    $mail->addAddress($row['email'], $row['username']);     // Add a recipient
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Order placed';
    $mail->Body    = $output;

    $mail->send();
    echo 'Your order has been successfully placed and an email of the order description has been sent';
	} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}

$sql = "DELETE FROM itemsincart";

if ($link->query($sql) === TRUE) {
    //echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}


echo "<script type='text/javascript'>window.location.href='firstpage.php'</script>"; 

?>