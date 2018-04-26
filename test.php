<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
         <form action="test.php" method="get">
         <input name="keyword" id="keyword" type="text" />
         <input name="" type="submit" />
         </form>
<?php
require('./connect-db.php');
	$keyword = $_GET["keyword"];
	$str2 = explode(" ",$keyword);
	if($keyword){
				$sql = "SELECT * FROM tbl_cs WHERE (cs_name LIKE '%".$keyword."%')";
				foreach($str2 as $k){
						$sql .= " OR (cs_name LIKE '%".$k."%')";
						$sql .= " OR (pea_no LIKE '%".$k."%')";
						$sql .= " OR (ca LIKE '%".$k."%')";
						$sql .= " OR (address LIKE '%".$k."%')";
									}
				echo $sql;
			}
		 ?>
</body>
</html>