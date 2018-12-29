<?php
	$method = $_SERVER["REQUEST_METHOD"];
	if($method == "POST")
	{
	require('connect-db.php');
	$data = $_POST["data"];
	$room = substr($data,0,5);
	$status = substr($data,5,2);
	$sql_uodate_sts = "UPDATE tbl_status SET status='$status' WHERE room='".$room."'";
	mysqli_query($conn,sql_uodate_sts);
	echo "INSERT SUCCESSFULL..";
	}
	else
	{
		echo "Method Not Allow!!!!";
	}
	?>