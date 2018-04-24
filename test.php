<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$serverName = "raiingphu.com";
$userName = "raiingph_psq";
$userPassword = "12345678";
$dbName = "raiingph_psq";
$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
mysqli_set_charset($conn,"utf8");
$sql = "SELECT * FROM tbl_cs";
$result = mysqli_query($conn,$sql);
while($objectresult = mysqli_fetch_array($result)){
	
	echo $objectresult[1];
	
	
	
	
	}




		 ?>
</body>
</html>