function send_cmd()
{
	client = new Paho.MQTT.Client("m12.cloudmqtt.com", 19053,"web_" + parseInt(Math.random() * 100, 10));
	client.onConnectionLost = onConnectionLost;
	client.onMessageArrived = onMessageArrived;
	var options = {
		useSSL: true,
		userName: "test",
		password: "12345",
		onSuccess:onConnect,
		onFailure:doFail
	}
	client.connect(options);
}
function onConnect() 
{
    // Once a connection has been made, make a subscription and send a message.
    console.log("onConnect");
    client.subscribe("/cloudmqtt");
    message = new Paho.MQTT.Message("Hello CloudMQTT");
    message.destinationName = "/cloudmqtt";
    client.send(message);
  }
  function doFail(e){
    console.log(e);
  }
  function onConnectionLost(responseObject) {
    if (responseObject.errorCode !== 0) {
      console.log("onConnectionLost:"+responseObject.errorMessage);
    }
  }
  function onMessageArrived(message) {
    console.log("onMessageArrived:"+message.payloadString);
  }
function onoff(room_num)
{
	var x = document.getElementById("room" + room_num).checked;
	if(x == true)
	{
	alert('เปิดไฟห้อง' + room_num);
	send_cmd();
	}
	else if (x == false)
	{
		alert('ปิดไฟห้อง' + room_num);
	}
}