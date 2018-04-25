<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
require('./connect-db-nkw.php');
$sql_search = "SELECT * FROM tbl_cs";
$result = mysqli_query($conn,$sql_search);


		 ?>
</body>
</html>