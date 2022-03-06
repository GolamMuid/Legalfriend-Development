<?php
include "Admin/config.php";


  $name= $_POST['name'];
  $phone=$_POST['phone'];
  $dob =$_POST['birth-date'];
  $gender=$_POST['gender'];
  $profession=$_POST['profession'];
  $workplace=$_POST['workplace'];
  $address=$_POST['address'];
  $password=$_POST['password'];
  

  
 
     $query = "INSERT INTO users (`name`,`phone`,`dob`,`gender`,`profession`,`company`,`address`,`password`)  
    VALUES('$name','$phone','$dob','$gender','$profession','$workplace','$address','$password')";
    $result = $conn->query($query);
    if ($result == 1)
    {
        echo "registration done successfull";
         header('location: login.php');
        
    }
    else
    {
       echo "registration failed";
       header('location: create-profile.php');
            
    }

?>