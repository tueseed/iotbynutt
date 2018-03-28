<?php
require_once('phpMQTT.php');

$server = "m12.cloudmqtt.com";     // change if necessary
$port = 19053;                     // change if necessary
$username = "test";                   // set your username
$password = "12345";                   // set your password
$client_id = "phpMQTT-subscriberweb"; // make sure this is unique for connecting to sever - you could use uniqid()
$qq = '/ESP/LED';
$mqtt = new Bluerhinos\phpMQTT($server, $port, $client_id);
if(!$mqtt->connect(true, NULL, $username, $password)) {
	exit(1);
}
$topics[$qq] = array("qos" => 0, "function" => "procmsg");
$mqtt->subscribe($topics, 0);
while($mqtt->proc()){
		
}
$mqtt->close();
function procmsg($topic, $msg){
		echo "Msg Recieved: " . date("r") . "\n";
		echo "Topic: {$topic}\n\n";
		echo "\t$msg\n\n";
}
