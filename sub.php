<?php
require_once('phpMQTT.php');

$url = parse_url(getenv('m12.cloudmqtt.com'));
$topic = '/ESP/LED';
$username = "test";                   
$password = "12345"; 
$client_id = "phpMQTT-web";


    
$mqtt = new Bluerhinos\phpMQTT('m12.cloudmqtt.com', '19053', $client_id);
if ($mqtt->connect(true, NULL, $username, $password)) {
	
  $topics['/ESP/LED'] = array(
      "qos" => 0,
      "function" => "procmsg"
  );
  $mqtt->subscribe($topics,0);
  while($mqtt->proc()) {}
  $mqtt->close();
} else {
  exit(1);
}
function procmsg($topic, $msg){
  echo "Msg Recieved: $msg\n";
}
