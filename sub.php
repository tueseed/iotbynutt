<?php
require_once('phpMQTT.php');

$url = parse_url(getenv('m12.cloudmqtt.com'));
$topic = substr($url['/ESP/LED'], 1);
$username = "test";                   
$password = "12345"; 
$client_id = "phpMQTT-web";

function procmsg($topic, $msg){
  echo "Msg Recieved: $msg\n";
}
    
$mqtt = new Bluerhinos\phpMQTT('m12.cloudmqtt.com', '19053', $client_id);
if ($mqtt->connect(true, NULL, $username, $password)) {
	
  $topics[$topic] = array(
      "qos" => 0,
      "function" => "procmsg"
  );
  $mqtt->subscribe($topics,0);
  while($mqtt->proc()) {}
  $mqtt->close();
} else {
  exit(1);
}
