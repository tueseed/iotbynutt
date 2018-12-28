function onoff(room_num)
{
	var x = document.getElementById("room" + room_num).checked;
	if(x == true)
	{
	alert('เปิดไฟห้อง' + room_num);
	}
	else if (x == false)
	{
		alert('ปิดไฟห้อง' + room_num);
	}
}