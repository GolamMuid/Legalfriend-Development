<?php 
session_start(); 
include "../Admin/config.php";

// $email = "rahim45@yahoo.com";
// $password = "khan1234@";

//   $email=$_POST['email'];
//   $password=$_POST['password'];


$phone = $_REQUEST["phone"];
$password = $_REQUEST["password"];

if (isset($phone) && isset($password)) {



		

        
		$sql = "SELECT * FROM users WHERE phone='$phone' AND password='$password'";

		$result = mysqli_query($conn, $sql);
		
		$sumon = row[email];
		

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['phone'] === $phone && $row['password'] === $password) {
                 $response['status']="success";
                 $response['user']=$row;
                 $response['error']="200";
                 $response['message']="login success";
            	
            }else{
				$response['user']=(object)[];
                $response['error']="400";
                $response['message']="Wrong credentials";
			}
		}else{
		    $response['status']="failed";
			$response['user']=(object)[];
            $response['error']="400";
        	$response['message']="phone or password is invalid";
		}
	
	
}

echo json_encode($response);



?>