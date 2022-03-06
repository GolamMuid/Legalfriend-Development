<?php

    include '../config.php';
    $genarate_logo= rand(100,1000000).$_FILES["logo"]["name"];
    
    
    if (file_exists("upload/".$genarate_logo))
          {
            // header("location:site_setting.php");
          }
        else
          {
          move_uploaded_file($_FILES["logo"]["tmp_name"],"upload/" .$genarate_logo);
          
          }
    $id = $_GET['id'];
    $p_name = $_POST['p_name'];
    $site_logo = $genarate_logo;
    
    $p_des = filter_input(INPUT_POST, 'p_des', FILTER_SANITIZE_STRING);
    $notification_date = $_POST['notification_date'];
    $headline = $_POST['notification_headline'];
    $image_title = $_POST['image_title'];

    $result=mysqli_query($conn,"SELECT count(*) as total from about");
    $data=mysqli_fetch_assoc($result);
    if($data['total']>=1){
        if($_POST['p_name']!=""){
            $update = "UPDATE about SET name = '$p_name' WHERE id = $id;";
            mysqli_query($conn,$update);
        }
        if($_FILES["logo"]!=""){
            $update = "UPDATE about SET image = '$site_logo' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
        if($_POST['p_des']!=""){
            $update = "UPDATE about SET des = '$p_des' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
         if($_POST['notification_date']!=""){
            $update = "UPDATE about SET notification_date = '$notification_date' WHERE id = $id;";
                mysqli_query($conn,$update);
        }

        if($_POST['notification_headline']!=""){
            $update = "UPDATE about SET headline = '$headline' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
        
         if($_POST['image_title']!=""){
            $update = "UPDATE about SET image_link = '$image_title' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
        //header('location:../index.php');
        header("refresh:0; url=../about.php");
    }
        
?>