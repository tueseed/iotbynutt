function chk_led()
{
	
}
function onoff(room_num)
{
	var x = document.getElementById("room" + room_num).checked;
	if(x == true)
	{
	alert('เปิดไฟห้อง' + room_num);
	pub_cmd('ON'+ room_num);
	}
	else if (x == false)
	{
		alert('ปิดไฟห้อง' + room_num);
		pub_cmd('OFF' + room_num);
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
                    }			
			});
}