<?php

include 'Admin/config.php';

            $id = $_GET["id"];
            $password1=$_POST['password1'];
            $password2=$_POST['password2'];
        
        
        if ($_POST['password1'] == $_POST['password2']) {
 
    
            //update password in database
            mysqli_query($conn,"UPDATE users set password='$password1' where id='$id'");
            echo $password1;
        }
        else{
            $message="Verify your password";
        }
?>