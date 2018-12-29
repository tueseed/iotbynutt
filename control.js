function send_cmd(msg)
{
	client = new Paho.MQTT.Client("m12.cloudmqtt.com", 39053,"web_" + parseInt(Math.random() * 100, 10));
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
	setTimeout(function()
	{
		message = new Paho.MQTT.Message(msg);
		message.destinationName = "/ESP/LED";
		message.qos = 0;
		message.retained = true;
		client.send(message);
   },5000);
	
}
function onConnect() 
{
    // Once a connection has been made, make a subscription and send a message.
    console.log("onConnect");
    
 }
function doFail(e){
    console.log(e);
  }
function onConnectionLost(responseObject)
 {
    if (responseObject.errorCode !== 0) 
	{
      console.log("onConnectionLost:"+responseObject.errorMessage);
    }
  }
function onMessageArrived(message) 
{
    console.log("onMessageArrived:"+message.payloadString);
  }

function onoff(room_num)
{
	var x = document.getElementById("room" + room_num).checked;
	if(x == true)
	{
	alert('เปิดไฟห้อง' + room_num);
	pub_cmd('ON');
	}
	else if (x == false)
	{
		alert('ปิดไฟห้อง' + room_num);
		pub_cmd('OFF');
	}
}
function pub_cmd(cmd)
{
	var formData = new FormData();
		formData.append('cmd', cmd);
		$.ajax({
			url: 'pub_cmd.php',
			method: 'POST',
			data: formData,
			async: true,
			cache: false,
			processData: false,
			contentType: false,
			success: function(response) {
                        alert(response);
                    },
                    complete: function() {
                        location.reload();
                    }				
			});
}