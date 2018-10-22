<?php

$connect = mysqli_connect("localhost", "root", "", "food_data");
$output = '';
$sum = 0;
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM itemsincart
	WHERE food_name LIKE '%".$search."%'
	OR food_price LIKE '%".$search."%';";
}
else
{
	$query = "SELECT * FROM itemsincart;";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '
	<div class="table-responsive">
	<table class="table table-hover">
	<thead class="thead-light">
		<tr>
			<th scope="col">Item Name</th>
			<th scope="col">Price</th>
		</tr>
	</thead>
	<tbody>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
		<tr>
			<th scope="row">'.$row["food_name"].'</th>
			<td>'.$row["food_price"].'</td>
		</tr>';
		
	}
	$sum = $sum + $row["food_price"];
	$output .= '</tbody></table>';

	echo $output;
	//echo " <center><h4> Total : $sum </h4></center>";
    
}
else
{
	echo 'No such item found in cart';
}

	    

?>
<div>
        <?php

        	
        
        ?>

    </div>

    <div >
        <center><a href="paymentdesk.php"><button class="btn"> Confirm Order </button></a></center>

    </div>
