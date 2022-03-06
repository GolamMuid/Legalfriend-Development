<?php

include '../config.php';


$id = $_GET["id"];

$message_image = $_FILES["message_image"]["name"];


 $result=mysqli_query($conn,"SELECT count(*) as total from messages");
    $data=mysqli_fetch_assoc($result);
     if($data['total']>=1){
       
        if($_FILES["message_image"]["name"]!=""){
        	
        	move_uploaded_file($_FILES['message_image']["tmp_name"], "upload/".$message_image);
            $update = "UPDATE messages SET image = '$message_image' WHERE id = $id;";
                mysqli_query($conn,$update);

        	
        }
       
    
        
        //header('location:../index.php');
        header("refresh:0; url=../message.php");
    }

?>