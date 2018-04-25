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
while($objectresult = mysqli_fetch_array($result))
				{
					echo $objectresult["cs_name"];
					//echo "<li><a href='csdetial.php?pea_no=".$objectresult["pea_no"]."'>".$objectresult["cs_name"]."</a></li>";
					
					}


		 ?>
</body>
</html>