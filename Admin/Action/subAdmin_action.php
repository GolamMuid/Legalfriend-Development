<?php

include '../config.php';


$name= $_POST['name'];
$username= $_POST['user_name'];
$password= $_POST['password'];



 $insert = "INSERT into subadmin (name,user_name,password) 
        values ('$name','$username','$password' );";
        if(mysqli_query($conn,$insert)){
            header("refresh:0; url=../subAdmin.php");
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


?>