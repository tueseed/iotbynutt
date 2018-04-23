<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>jQuery Mobile Web App</title>
<link href="jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css"/>
<link href="jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head> 
<?php
$pea_no = $_GET['pea_no'];
require('./connect-db.php');
$sql_search = "SELECT * FROM tbl_cs WHERE (cs_name LIKE '%".$keyword."%')";
$result = mysqli_query($conn,$sql_search);
?>
<body> 

<div data-role="page" id="page">
	<div data-role="header">
		<h1>รายละเอียดผู้ใช้ไฟฟ้า</h1>
	</div>
	<div data-role="content">	
			<?php
            echo $pea_no;
			?>
	</div>
	<div data-role="footer">
		<h4>Dev By Nutthapong</h4>
	</div>
</div>



</body>
</html>