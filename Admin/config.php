<?php

ob_start();//Turns on output buffering

$timezone = date_default_timezone_set("Asia/Dhaka");

$conn = mysqli_connect("localhost", "root", "", "legalfriend"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>