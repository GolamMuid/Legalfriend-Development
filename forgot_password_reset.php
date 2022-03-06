<?php

?>

<?php 
$message="";
$valid='true';
include "Admin/config.php";
session_start();
if(isset($_GET['key']) && isset($_GET['email'])) {
    $key=$_GET['key'];
    $email=$_GET['email'];
    $check=mysqli_query($conn,"SELECT * FROM forget_password WHERE email='$email' and temp_key='$key'");
    //if key doesnt matches
    if (mysqli_num_rows($check)!=1) {
      echo "This url is invalid or already been used. Please verify and try again.";
      exit;
    }
}
else{
  header('location:login.php');
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
        $password1=mysqli_real_escape_string($conn,$_POST['password1']);
        $password2=mysqli_real_escape_string($conn,$_POST['password2']);
        if ($password2==$password1) {
            $message_success="New password has been set for ".$email;
            $password=$password1;
            //destroy the key from table
            mysqli_query($conn,"DELETE FROM forget_password where email='$email' and temp_key='$key'");
            //update password in database
            mysqli_query($conn,"UPDATE users set password='$password' where email='$email'");
        }
        else{
            $message="Verify your password";
        }
}
        
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>LegalFriend - Home</title>
    <link rel="icon" href="images/Legalfriend.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <section id="header" style="height:42px;">

        <div class="header-container">


            <!-- Navbar Starts  -->
            <nav id="navbar">


                <div class="logo">
                    <a href="index.php">
                        <img src="./images/title.png" alt="">
                    </a>
                </div>
                <input type="checkbox" id="click">
                <label for="click" class="menu-btn">
                    <i class="fas fa-bars"></i>
                </label>
                <ul>
                    <li><a class="active" href="index.php">HOME</a></li>
                    <li><a href="messages.php">MESSAGES</a></li>
                    <li><a href="articles.php">ARTICLES</a></li>
                    <li><a href="notification.php">NOTIFICATION</a></li>
                    <li class="calender"> <a href="calender.php"> CALENDER
                            <ul class="dropdown">
                                <li> <a href="nationalCalender.php"> জাতীয় ক্যালেন্ডার </a></li>
                                <li> <a href="highcourtCalender.php"> হাইকোর্ট ক্যালেন্ডার </a></li>
                            </ul>
                        </a>
                    </li>
                    <li><a href="aboutus.php">ABOUTus</a></li>
                    <li>
                        <button class="login" onClick="document.location='login.php';"> Login </button>
                    </li>
                </ul>
            </nav>


            <!-- Navbar Ends  -->


            <?php 
                include 'inc/rightbar.php';
                ?>


        </div>



    </section>


    <!-- Verification Body Starts  -->

    <section class="verfication-body">
        <div class="login-body-container container">

            <div class="login-image-container">
                <img src="./images/aboutus.png" alt="LegalFriend">
                <p>
                    Make your professional life best
                </p>
            </div>

            <div class="login-form-container">
                
                <form name="registartion-form" class="login-form" role="form" action= "login.php" method="POST">
              <label>Please enter your new password</label><br><br>
              <div class="form-group">
                <input type="password" class="inputs" id="pwd" name="password1" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="password" class="inputs" id="pwd" name="password2" placeholder="Re-type Password">
              </div>
                  <?php if (isset($error)) {
                    echo"<div class='alert alert-danger' role='alert'>
                    <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                    <span class='sr-only'>Error:</span>".$error."</div>";
                    } ?>
                  <?php if ($message<>"") {
                    echo"<div class='alert alert-danger' role='alert'>
                    <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                    <span class='sr-only'>Error:</span>".$message."</div>";
                    } ?>
                  <?php if (isset($message_success)) {
                    echo"<div class='alert alert-success' role='alert'>
                    <span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
                    <span class='sr-only'>Error:</span>".$message_success."</div>";
                    } ?>
                <button type="submit" class="create-new-profile" name="submit" style="display: block; width: 100%;">Save Password</button>
                <br><br>
                <label>This link will work only once for a limited time period.</label>
                <center> <a href="index.php">Back to Login</a></center>
                <br>
          </form>
                
                
                
                
                

            </div>

        </div>

    </section>


    <!-- Registration Body Ends  -->

</body>

</html>