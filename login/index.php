 <?php
	require "../init.php";
	
	$Email = $_GET["Email"];
	$Password = $_GET["Password"];
	
	$sql = "SELECT * FROM Users WHERE Email = '$Email' AND Password = '$Password';";
	
	$result = mysqli_query($conn, $sql);
	
	$user = array();
	
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		
		$user["Email"] = $row["Email"];
		$user["Mobile"] = $row["Mobile"];
		$user["AccountNumber"] = $row["AccountNumber"];
		$user["Name"] = $row["Name"];
		$user["Password"] = $row["Password"];
		
		echo json_encode($user);
	}
	else
	{
		echo "The email and password you entered don't match.";
	}
?>