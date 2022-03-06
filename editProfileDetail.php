<?php

include 'Admin/config.php';
$genarate_image = rand(100, 1000000).$_FILES["profile_image"]["name"];
if (file_exists("images/".$genarate_image)) {

	// code...

}
else{
	move_uploaded_file($_FILES['profile_image']["tmp_name"], "images/".$genarate_image);
}
            $id = $_GET["id"];
            $name = $_POST['name'];
            $profile_image = $genarate_image;
            $profession = $_POST['profession'];
            $company = $_POST['company'];
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $dob = $_POST['dob'];
            $religion = $_POST['religion'];
            $material_status = $_POST['material_status'];
            $about_me = $_POST['about_me'];

 $result=mysqli_query($conn,"SELECT count(*) as total from users");
    $data=mysqli_fetch_assoc($result);
     if($data['total']>=1){
        if($_POST['name']!=""){
            $update = "UPDATE users SET name = '$name' WHERE id = $id;";
            mysqli_query($conn,$update);
        }
        
        if($_FILES["profile_image"]["name"]!=""){
             $update = "UPDATE users SET photo = '$profile_image' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
        if($_POST['profession']!=""){
            $update = "UPDATE users SET profession = '$profession' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
         if($_POST['company']!=""){
            $update = "UPDATE users SET company = '$company' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
          if($_POST['address']!=""){
            $update = "UPDATE users SET address = '$address' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
        
         if($_POST['gender']!=""){
            $update = "UPDATE users SET gender = '$gender' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
        
           if($_POST['gender']!=""){
            $update = "UPDATE users SET gender = '$gender' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
          if($_POST['dob']!=""){
            $update = "UPDATE users SET dob = '$dob' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
          if($_POST['religion']!=""){
            $update = "UPDATE users SET religion = '$religion' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
        if($_POST['material_status']!=""){
            $update = "UPDATE users SET material_status = '$material_status' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
        
            if($_POST['about_me']!=""){
            $update = "UPDATE users SET about_me = '$about_me' WHERE id = $id;";
                mysqli_query($conn,$update);
        }
        
        
      
    
        header("refresh:0; url=profileDetail.php?id='$id' ");
    }

?>