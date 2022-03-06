<?php 
session_start(); 
include "Admin/config.php";

// $email = "rahim45@yahoo.com";
// $password = "khan1234@";

  $phone=$_GET['phone'];
  $password=$_GET['password'];

if (isset($phone) && isset($password)) {



		

        
		$sql = "SELECT * FROM users WHERE phone='$phone' AND password='$password'";

		$result = mysqli_query($conn, $sql);
		
		
	
		

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['phone'] === $phone && $row['password'] === $password) {
                $id = $row['id'];
                header('Location: /profile.php?id='.$id);
                
              
                
             
            	
            }else{
				echo "login failed";
			}
		}else{
		    echo "phone or password is invalid";
		}
	
	
}



?>