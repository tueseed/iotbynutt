<?php
$KEY1 = $_GET['humu'];
$KEY2 = $_GET['textinput'];
$KEY3 = -$KEY2 ;
if($KEY1 == "ทั้งหมด"){
	$text = "https://raiingphu.com/psq/req_display.php?NUMBER=@".$KEY2;}

//$text ="https://raiingphu.com/psq/req_office.php?REQ=".$KEY1."&REQ2=".$KEY3;
//$text ="https://raiingphu.com/psq/req_office.php?REQ=กฟต.1";
function send_line_notify($message, $token)
{
  $ch = curl_init();
  curl_setopt( $ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
  curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt( $ch, CURLOPT_POST, 1);
  curl_setopt( $ch, CURLOPT_POSTFIELDS, "message=$message");
  curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
  $headers = array( "Content-type: application/x-www-form-urlencoded", "Authorization: Bearer $token", );
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec( $ch );
  curl_close( $ch );

  return $result;
}

$message = $KEY1 ;
$token = '6N01ZWf8QAxDnzyW7GMBk8pL8Xf1re9tSX6sZp6fNKJ';

echo send_line_notify($message, $token);

?>



