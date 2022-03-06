<?php

include '../config.php';
session_start();
$genarate_logo= rand(100,1000000).$_FILES["logo"]["name"];


if (file_exists("../Admin/Action/upload/".$genarate_logo))
      {
        // header("location:site_setting.php");
      }
    else
      {
      move_uploaded_file($_FILES["logo"]["tmp_name"],"../Admin/Action/upload/" .$genarate_logo);
      
      }
    $sub_id = $_SESSION["user"];
    $p_name = $_POST['p_name'];
    $site_logo = $genarate_logo;
   
    $p_des = filter_input(INPUT_POST, 'p_des', FILTER_SANITIZE_STRING);
     $notifications_date = $_POST['notification_date'];
      $headline = $_POST['notification_headline'];
      $image_title = $_POST['image_title'];
 
        $insert = "INSERT into notifications (sub_id, name,image,des, notification_date, headline, image_link) 
        values ('$sub_id', '$p_name','$site_logo','$p_des', '$notifications_date', ' $headline', '$image_title' );";
        if(mysqli_query($conn,$insert)){
            header("refresh:0; url=../notification.php");
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
    ?>