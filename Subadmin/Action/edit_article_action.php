<?php

include '../config.php';
$genarate_image = rand(100, 1000000).$_FILES["message_image"]["name"];
if (file_exists("../Admin/Action/upload/".$genarate_image)) {

	// code...

}
else{
	move_uploaded_file($_FILES['message_image']["tmp_name"], "../Admin/Action/upload/".$genarate_image);
}
$id = $_GET["id"];
$message_date= $_POST['message_date'];
$message_image = $genarate_image;
$message_speaker_name = $_POST['message_speaker_name'];
$message_speaker_designation = $_POST['message_speaker_designation'];
$message_speaker_address = $_POST['message_speaker_address'];
$message_headline = $_POST['Message_headline'];
$message_body = $_POST['message_description'];

 $result=mysqli_query($conn,"SELECT count(*) as total from articles");
    $data=mysqli_fetch_assoc($result);
     if($data['total']>=1){
        if($_POST['message_date']!=""){
            $update = "UPDATE articles SET message_date = '$message_date' WHERE id = $id;";
            mysqli_query($conn,$update);
        }
        
        if($_FILES["message_image"]["name"]!=""){
            $update = "UPDATE articles SET image = '$message_image' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
        if($_POST['message_speaker_name']!=""){
            $update = "UPDATE articles SET name = '$message_speaker_name' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
         if($_POST['message_speaker_designation']!=""){
            $update = "UPDATE articles SET designation = '$message_speaker_designation' WHERE id = $id;";
                mysqli_query($conn,$update);
        }

        if($_POST['message_speaker_address']!=""){
            $update = "UPDATE articles SET address = '$message_speaker_address' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
          if($_POST['Message_headline']!=""){
            $update = "UPDATE articles SET headline = '$message_headline' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
          if($_POST['message_description']!=""){
            $update = "UPDATE articles SET body = '$message_body' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
        
        //header('location:../index.php');
        header("refresh:0; url=../article.php");
    }

?>