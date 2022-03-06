<?php

include '../config.php';
session_start();
$genarate_image = rand(100, 1000000).$_FILES["message_image"]["name"];
if (file_exists("../Admin/Action/upload/".$genarate_image)) {

	// code...

}
else{
	move_uploaded_file($_FILES['message_image']["tmp_name"], "../Admin/Action/upload/".$genarate_image);
}

$sub_id = $_SESSION["user"]; 

$message_date= $_POST['message_date'];
$message_image = $genarate_image;
$message_speaker_name = $_POST['message_speaker_name'];
$message_speaker_designation = $_POST['message_speaker_designation'];
$message_speaker_address = $_POST['message_speaker_address'];
$message_headline = $_POST['Message_headline'];
$message_body = $_POST['message_description'];
$message_topic = $_POST['message_topic'];
$message_url = $_POST['message_url'];

$insert = "INSERT into messages (sub_id, message_date, image, name, designation, address, headline, body, topic, url_link) values('$sub_id', '$message_date', '$message_image', '$message_speaker_name','$message_speaker_designation', '$message_speaker_address', '$message_headline', '$message_body',  '$message_topic', '$message_url');";


if (mysqli_query($conn, $insert)) {
	// code...
	header("refresh:0; url=../message.php");

}
else{
	echo "Error". $sql. "<br>". $conn->error;
}

?>