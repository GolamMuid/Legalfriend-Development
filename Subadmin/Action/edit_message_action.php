<?php

include '../config.php';
$genarate_image = rand(100, 1000000).$_FILES["message_image"]["name"];

$id = $_GET["id"];
$message_date= $_POST['message_date'];
$message_image = $genarate_image;
$message_speaker_name = $_POST['message_speaker_name'];
$message_speaker_designation = $_POST['message_speaker_designation'];
$message_speaker_address = $_POST['message_speaker_address'];
$message_headline = $_POST['Message_headline'];
$message_body = $_POST['message_description'];
$message_url = $_POST['url_link'];
$message_topic = $_POST['topic'];

 $result=mysqli_query($conn,"SELECT count(*) as total from messages");
    $data=mysqli_fetch_assoc($result);
     if($data['total']>=1){
        if($_POST['message_date']!=""){
            $update = "UPDATE messages SET message_date = '$message_date' WHERE id = $id;";
            mysqli_query($conn,$update);
        }
        
        if($_FILES["message_image"]["name"]!=""){
            move_uploaded_file($_FILES['message_image']["tmp_name"], "../Admin/Action/upload/".$genarate_image);
            $update = "UPDATE messages SET image = '$message_image' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
        if($_POST['message_speaker_name']!=""){
            $update = "UPDATE messages SET name = '$message_speaker_name' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
         if($_POST['message_speaker_designation']!=""){
            $update = "UPDATE messages SET designation = '$message_speaker_designation' WHERE id = $id;";
                mysqli_query($conn,$update);
        }

        if($_POST['message_speaker_address']!=""){
            $update = "UPDATE messages SET address = '$message_speaker_address' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
          if($_POST['Message_headline']!=""){
            $update = "UPDATE messages SET headline = '$message_headline' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
          if($_POST['message_description']!=""){
            $update = "UPDATE messages SET body = '$message_body' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
          if($_POST['url_link']!=""){
            $update = "UPDATE messages SET url_link = '$message_url' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
        if($_POST['topic']!=""){
            $update = "UPDATE messages SET topic = '$message_topic' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
        
        //header('location:../index.php');
        header("refresh:0; url=../message.php");
    }

?>