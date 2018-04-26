<!DOCTYPE html> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0," data-ajax="false" charset="utf-8">
<title>ค้นหาข้อมูลผู้ใช้ไฟฟ้า</title>
<link href="jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css"/>
<link href="jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head> 
<?php

$keyword = $_GET['keyword'];
$office = $_GET['office'];
$route_check = substr($keyword,0,4);
$route_S_up = strtoupper($route_check);
//require('./connect-db.php');
if($office == "PTM"){
	require('./connect-db.php');
	if($keyword){
			if($route_S_up == "JPTM" OR $route_S_up == "JNKW"){
										$route_search = substr($keyword,0,7);
										$six_pole = substr($keyword,8,13);
										$sql_search = "SELECT * FROM tbl_cs WHERE route LIKE '%".$route_search."%' AND sixdigit LIKE '%".$six_pole."%'";
				
										}
			else{
							$sql_search = "SELECT * FROM tbl_cs WHERE (cs_name LIKE '%".$keyword."%') OR (pea_no LIKE '%".$keyword."%') OR (ca LIKE '%".$keyword."%')";
				}
$result = mysqli_query($conn,$sql_search);
$find_num = mysqli_num_rows($result);
if($find_num == 0){$find_result = "ไม่พบข้อมูล";} else if($find_num > 0){$find_result = "ค้นพบ ".$find_num." รายการ";}
}	
	}
if($office == "NKW")
{
	require('./connect-db-nkw.php');
	if($keyword){
			if($route_S_up == "JPTM" OR $route_S_up == "JNKW"){
										$route_search = substr($keyword,0,7);
										$six_pole = substr($keyword,8,13);
										$sql_search = "SELECT * FROM tbl_cs WHERE route LIKE '%".$route_search."%' AND sixdigit LIKE '%".$six_pole."%'";
				
										}
			else{
							$sql_search = "SELECT * FROM tbl_cs WHERE (cs_name LIKE '%".$keyword."%') OR (pea_no LIKE '%".$keyword."%') OR (ca LIKE '%".$keyword."%')";
				}
$result = mysqli_query($conn,$sql_search);
$find_num = mysqli_num_rows($result);
if($find_num == 0){$find_result = "ไม่พบข้อมูล";} else if($find_num > 0){$find_result = "ค้นพบ ".$find_num." รายการ";}
}
	
	}


?>
<body> 

<div data-role="page" id="page">
	<div data-role="header">
		<h1>รายละเอียดผู้ใช้ไฟฟ้า</h1>
	</div>
	<div data-role="content">	
			<?php
			while($objectresult = mysqli_fetch_array($result)){
            echo $objectresult["cs_name"]."<br>";
			echo $objectresult["address"]."<br>";
			echo "ca :".$objectresult["ca"]."<br>";
			echo "pea no.:".$objectresult["pea_no"]."<br>";
			echo "สายการจำหน่วย :".$objectresult["route"]."<br>";
			echo "เลข 6 หลัก :".$objectresult["sixdigit"]."<br>";
			echo "<a href='https://www.google.co.th/maps/search/".$objectresult["lat"].",".$objectresult["long"]."'>พิกัด Google map</a></h5><br><br>";
			}
			?>
            <h2><a href="#" class="ui-btn" data-rel="back">กลับหน้าค้นหา</a></h2>
	</div>
   
	<div data-role="footer">
		<h4>Dev By Nutthapong</h4>
	</div>
</div>



</body>
</html>