<?php 
session_start(); 
include "../Admin/config.php";

$email = "rahim45@yahoo.com";
$password = "khan1234@";

if (isset($email) && isset($password)) {



		

        
		$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

		$result = mysqli_query($conn, $sql);
		
		$sumon = row[email];
		

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
                echo "login succefullly done ";
            	
            }else{
				echo "password or username incorrect";
			}
		}else{
			echo "database not connected";
		}
	
	
}