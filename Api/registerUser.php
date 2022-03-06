<?php 
 include '../Admin/config.php';
if ($_SERVER["REQUEST_METHOD"] === 'POST')
{
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $phone = $_REQUEST["phone"];
    $password = $_REQUEST["password"];
    $profession = $_REQUEST["profession"];
    $company = $_REQUEST["company"];
    $address = $_REQUEST["address"];
    $gender = $_REQUEST["gender"];
    $dob = $_REQUEST["dob"];
    $religion = $_REQUEST["religion"];
    $material_status = $_REQUEST["material_status"];
    $status = $_REQUEST["status"];
    $expire_date = $_REQUEST["expire_date"];
    
    $query = "INSERT INTO users (`name`,`email`,`phone`,`password`,`profession`,`company`,`address`,`gender`,`dob`,`religion`,`material_status`,`status`,`expire_date`)  
    VALUES('$name','$email','$phone','$password','$profession','$company','$address','$gender','$dob','$religion','$material_status','0','0')";
    $result = $conn->query($query);
    if ($result == 1)
    {
        $data["status"] = "SUCCESS";
        $data["message"] = "data saved successfully";
        
    }
    else
    {
       $data["status"] = "error";
        $data["message"] = "data not saved successfully";
            
    }
}
else
{
     $data["status"] = "error";  
    $data["message"] = "Format not supported";
     
}
    echo json_encode($data);