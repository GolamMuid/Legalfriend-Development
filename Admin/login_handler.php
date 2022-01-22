<?php
require 'config.php';

if(isset($_POST['login_button'])) { /*!<varibale of form POST metod */
	$email = filter_var($_POST['log_email'], FILTER_SANITIZE_EMAIL); /*sanitize email */
	$password = $_POST['log_password']; /*Get password */
    $check_user="SELECT * FROM admin WHERE email='$email' AND password='$password'";    
    $result=mysqli_query($conn,$check_user);
    $count = 0;
    while($row= mysqli_fetch_assoc($result)){
        $count++;
        session_start();
        $_SESSION["user"] = $row['id'];
        
    }
    
    if($count==1){
        header("Location: index.php"); // destination page after login
    }
    else{
        echo"..dd";
        $message = "Your Password is wrong!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("refresh:0; url=login.php");
    }
}
?>