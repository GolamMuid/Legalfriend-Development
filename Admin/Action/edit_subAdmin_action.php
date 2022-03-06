<?php

include '../config.php';

    $id = $_GET['id'];
    $name= $_POST['name'];
    $username= $_POST['user_name'];
    $password= $_POST['password'];


    $result=mysqli_query($conn,"SELECT count(*) as total from subadmin");
    $data=mysqli_fetch_assoc($result);
    if($data['total']>=1){
        if($_POST['name']!=""){
            $update = "UPDATE subadmin SET name = '$name' WHERE id = $id;";
            mysqli_query($conn,$update);
        }

         if($_POST['user_name']!=""){
            $update = "UPDATE subadmin SET user_name = '$username' WHERE id = $id;";
            mysqli_query($conn,$update);
        }
        if($_POST['password']!=""){
            $update = "UPDATE subadmin SET password = '$password' WHERE id = $id;";
            mysqli_query($conn,$update);
        }
       
       
        //header('location:../index.php');
        header("refresh:0; url=../subAdmin.php");
    }
        
?>