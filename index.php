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
<body> 
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
							$sql_search = "SELECT * FROM tbl_cs WHERE (cs_name LIKE '%".$keyword."%') OR (pea_no LIKE '%".$keyword."%') OR (ca LIKE '%".$keyword."%') OR (address LIKE '%".$keyword."%')";
				}
$result = mysqli_query($conn,$sql_search);
$find_num = mysqli_num_rows($result);
if($find_num == 0){$find_result = "ไม่พบข้อมูล";} else if($find_num > 0){$find_result = "ค้นพบ ".$find_num." รายการ";}
}	
	}
///////////////////////////////////////////////////////////////////////////////////////////	
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
							$sql_search = "SELECT * FROM tbl_cs WHERE (cs_name LIKE '%".$keyword."%') OR (pea_no LIKE '%".$keyword."%') OR (ca LIKE '%".$keyword."%') OR (address LIKE '%".$keyword."%')";
				}
$result = mysqli_query($conn,$sql_search);
$find_num = mysqli_num_rows($result);
if($find_num == 0){$find_result = "ไม่พบข้อมูล";} else if($find_num > 0){$find_result = "ค้นพบ ".$find_num." รายการ";}
}
	
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($office == "BPA")
{
	require('./connect-db-bpa.php');
	if($keyword){
			if($route_S_up == "JBPA"){
										$route_search = substr($keyword,0,7);
										$six_pole = substr($keyword,8,13);
										$sql_search = "SELECT * FROM tbl_cs WHERE route LIKE '%".$route_search."%' AND sixdigit LIKE '%".$six_pole."%'";
				
										}
			else{
							$sql_search = "SELECT * FROM tbl_cs WHERE (cs_name LIKE '%".$keyword."%') OR (pea_no LIKE '%".$keyword."%') OR (ca LIKE '%".$keyword."%') OR (address LIKE '%".$keyword."%')";
				}
$result = mysqli_query($conn,$sql_search);
$find_num = mysqli_num_rows($result);
if($find_num == 0){$find_result = "ไม่พบข้อมูล";} else if($find_num > 0){$find_result = "ค้นพบ ".$find_num." รายการ";}
}
	
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($office == "DNS")
{
	require('./connect-db-bpa.php');
	if($keyword){
			if($route_S_up == "JDNS"){
										$route_search = substr($keyword,0,7);
										$six_pole = substr($keyword,8,13);
										$sql_search = "SELECT * FROM tbl_cs WHERE route LIKE '%".$route_search."%' AND sixdigit LIKE '%".$six_pole."%'";
				
										}
			else{
							$sql_search = "SELECT * FROM tbl_cs WHERE (cs_name LIKE '%".$keyword."%') OR (pea_no LIKE '%".$keyword."%') OR (ca LIKE '%".$keyword."%') OR (address LIKE '%".$keyword."%')";
				}
$result = mysqli_query($conn,$sql_search);
$find_num = mysqli_num_rows($result);
if($find_num == 0){$find_result = "ไม่พบข้อมูล";} else if($find_num > 0){$find_result = "ค้นพบ ".$find_num." รายการ";}
}
	
	}
?>
<div data-role="page" id="page">
	<div data-role="header">
		<h1>PTR Customer Data</h1>
	</div>
    <div data-role="content">
      <form action="index.php" method="get">
      	  <label for="selectmenu" class="select">การไฟฟ้า:</label>
          <select name="office" id="office">
            <option value="PTM">กฟอ.พธร.</option>
            <option value="NKW">กฟย.นกว</option>
            <option value="BPA">กฟส.บางแพ</option>
	     <option value="DNS">กฟส.ดำเนินสะดวก</option>
          </select>
        <label for="textinput">	คำค้นหา(ชื่อ,Pea.,ca,สายการจดหน่วย+เลข6หลัก):</label>
        <input type="text" name="keyword" id="keyword" value=""  />
        <input type="submit" value="ค้นหา" data-icon="search" />
      	</form>
       
    </div>
    <div><?php echo $find_result; ?></div>
	<div data-role="content">
    			
		<ul data-role="listview">
			<?php
				$a = 1 ;
				while($objectresult = mysqli_fetch_array($result))
				{
					//echo "<li>".$objectresult["cs_name"]."</li>";
					echo "<li><a href='csdetial.php?pea_no=".$objectresult["pea_no"]."&office=".$objectresult["office"]."'>".$a.".".$objectresult["cs_name"]."</a></li>";
					$a = $a+1;
					}			
				$a = 0;
				echo "<h2><a href='csdetial1.php?keyword=".$keyword."&office=".$office."' class='ui-btn'>ดูทั้งหมด</a></h2>";
			?>
		</ul>		
	</div>
 
	<div data-role="footer" data-theme="a">
		<h4>Dev By Nutthapong</h4>
	</div>
</div>



</body>
</html>
