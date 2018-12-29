<?php
require('phpMQTT.php');
//$topic =  '/ESP/ST1';
$username = "test";                   
$password = "12345"; 
$client_id = "phpMQTT-subscriber";    
$mqtt = new Bluerhinos\phpMQTT('m12.cloudmqtt.com', '19053', $client_id);
if (!$mqtt->connect(true, NULL, $username, $password)) 
{
	exit(1);
}

$topics['ESP/ST1'] = array("qos" => 0,"function" => "procmsg");
$mqtt->subscribe($topics,0);
/*
while($mqtt->proc()) {}

$mqtt->close();

function procmsg($topic, $msg){
		echo "Msg Recieved: " . date("r") . "\n";
		echo "Topic: {$topic}\n\n";
		echo "\t$msg\n\n";
}/*