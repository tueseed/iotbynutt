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

$keyword = $_POST['keyword'];
$office = $_POST['office'];
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
							$sql_search = "SELECT * FROM tbl_cs WHERE (cs_name LIKE '%".$keyword."%') OR (pea_no LIKE '%".$keyword."%')";
				}
$result = mysqli_query($conn,$sql_search);
}
	
	}


?>
<div data-role="page" id="page">
	<div data-role="header">
		<h1>PTM CS DATA</h1>
	</div>
    <div data-role="content">
      <form action="index.php" method="post">
      	  <label for="selectmenu" class="select">Options:</label>
          <select name="office" id="office">
            <option value="PTM">กฟอ.พธร.</option>
            <option value="NKW">กฟย.นกว</option>
           
          </select>
        <label for="textinput">	คำค้นหา(ชื่อ,Pea.,ca,สายการจดหน่วย+เลข6หลัก):</label>
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