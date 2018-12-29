<?php
	$server = "us-cdbr-iron-east-04.cleardb.net";
	$username = "bc4336c33e8c0e";
	$password = "d6d4156c";
	$db = "heroku_4b4b6df49a2f10d";
	$conn = new mysqli($server, $username, $password, $db);
	mysqli_query($conn, "SET NAMES utf8");
?>