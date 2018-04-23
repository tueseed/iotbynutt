<!DOCTYPE html> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0," data-ajax="false" charset="utf-8"><title>ค้นหาข้อมูลผู้ใช้ไฟฟ้า</title>
<link href="jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css"/>
<link href="jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head> 
<body> 
<?php
$keyword = $_POST['keyword'];
require('./connect-db.php');
$sql_search = "SELECT * FROM tbl_cs WHERE (cs_name LIKE '%".$keyword."%')";
$result = mysqli_query($conn,$sql_search);


?>
<div data-role="page" id="page">
	<div data-role="header">
		<h1>ข้อมูลผู้ใช้ไฟฟ้า กฟอ.โพธาราม</h1>
	</div>
    <div data-role="content">
      <form action="index.php" method="post">
        <label for="textinput">	คำค้นหา(ชื่อ,Pea.,ca):</label>
        <input type="text" name="keyword" id="keyword" value=""  />
        <input type="submit" value="ค้นหา" data-icon="search" />
      	</form>
       
    </div>
	<div data-role="content">	
		<ul data-role="listview">
			<?php
				while($objectresult = mysqli_fetch_array($result))
				{
					//echo "<li>".$objectresult["cs_name"]."</li>";
					echo "<li><a href='csdetial.php?pea_no=".$objectresult["pea_no"]."'>".$objectresult["cs_name"]."</a></li>";
					
					}			
			
			?>
		</ul>		
	</div>
	<div data-role="footer" data-theme="a">
		<h4>Dev By Nutthapong</h4>
	</div>
</div>



</body>
</html>