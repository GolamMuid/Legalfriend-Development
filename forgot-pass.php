<?php
$message="";
$valid='true';

include "Admin/config.php";
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email_reg=mysqli_real_escape_string($conn,$_POST['email']);
    $details=mysqli_query($conn,"SELECT name,email FROM users WHERE email='$email_reg'");
    if (mysqli_num_rows($details)>0) { //if the given email is in database, ie. registered
        $message_success=" Please check your email inbox or spam folder and follow the steps";
        //generating the random key
        $key=md5(time()+123456789% rand(4000, 55000000));
        //insert this temporary key into database
        $sql_insert=mysqli_query($conn,"INSERT INTO forget_password(email,temp_key) VALUES('$email_reg','$key')");
        //sending email about update
        $from = "help@legalfriendbd.com";
        $to      = $email_reg;
        $subject = 'Changing password LegalfriendBD.com';
        $msg = "Please copy the link and paste in your browser address bar". "\r\n"."www.legalfriendbd.com/forgot_password_reset.php?key=".$key."&email=".$email_reg;
        $headers = 'From: ' .$from ;
        mail($to, $subject, $msg, $headers);
    }
    else{
        $message="Sorry! no account associated with this email";
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
                        <button class="login" onClick="document.location='create-profile.php';"> Login </button>
                    </li>
                </ul>
            </nav>


            <!-- Navbar Ends  -->


            <?php 
                include 'inc/rightbar.php';
                ?>


        </div>



    </section>



    <div class="responsive-logo">
        <?php 
        include 'inc/responsivelogo.php'
        ?>


    </div>

    <!-- Registration Body Starts  -->

    <section class="Registration-body">
        <div class="login-body-container container">

            <div class="login-image-container">
                <img src="./images/aboutus.png" alt="LegalFriend">
                <p>
                    Make your professional life best
                </p>
            </div>

            <div class="login-form-container">
                <!--<form name="registartion-form" class="login-form" method="POST" action="verification.php">-->
                <!--    <input class="inputs" type="text" id="number" name="uname" placeholder="Email">-->
                <!--    <button class="create-new-profile" type="submit">Send Mail</button>-->
                <!--</form>-->
                
                
                
                <form name="registartion-form" class="login-form" role="form" method="POST">
            <div class="form-group">
              <label>Please enter your email to recover your password</label><br><br>
              <input  class="inputs" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" placeholder="Email" >
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
              <button type="submit" class="create-new-profile" name="submit" style="display: block; width: 100%;">Send Email</button>
              <br><br>
              <center><a href="login.php">Back to Login</a></center>
              <br>
          </form>




                <!--<p> Your mobile number will be your USER ID </p>-->
                <!--<p> It will be needed to login again </p>-->

            </div>

        </div>

    </section>


    <!-- forget password Body Ends  -->

</body>

</html>