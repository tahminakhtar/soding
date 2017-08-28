<?php
date_default_timezone_set("Asia/Dhaka");
$current_time=date("Y-m-d H:i:s");
$host="localhost";
$username="root";
$pass="";
$conn=mysql_connect($host,$username,$pass);
if($conn==true)
{
	$database="soding"; 
	$db=mysql_select_db($database,$conn);
	if(!$db)
	{
		echo "Failed to connect with Database";
	}	   
}
else
{
	echo "Failed to connect with host";
}
?>