 <?php
	require "init.php";
	
	$Category = $_POST["GET"];
	
	echo "hello";
	
	$sql = "SELECT * FROM `Offers`;";
	
	$result = mysqli_query($conn, $sql);
	
	$response = array();
	
	while($row = mysqli_fetch_array($result))
	{
		array_push($response, array("OfferID"=>$row[0], "Category"=>$row[1], "Offer"=>$row[2]));
	}
	
	echo json_encode(array("server_response"=>$response));
	
	mysqli_close($conn);
?>