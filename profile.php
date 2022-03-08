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
<?php
$id = $_GET['id'];

?>

<body>
    <section id="header" style="height:42px;">

        <div class="header-container">


            <!-- Navbar Starts  -->
            <nav id="navbar">


                <div class="logo">
                    <a href="index.php">
                        <img src="./images/title.svg" alt="">
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



    <div class="responsive-logo">
        <?php 
        include 'inc/responsivelogo.php'
        ?>


    </div>

    <!-- Profile Body Starts  -->



    <section class="Login-body">

        <div class="login-body-container container">
            <?php
    
     include 'Admin/config.php';

             $sql = "SELECT * FROM `users` WHERE id = $id";
             $result=$conn->query($sql);
            while($row = mysqli_fetch_assoc($result))
            {
            $id = $row['id'];
            $photo = $row['photo'];
            $name = $row['name'];
            $profession = $row['profession'];
            $address = $row['address'];
           
            }
            
           
    ?>

            <div class="login-image-container">
                <img src="./images/login.png" alt="LegalFriend">
            </div>

            <div class="profile-options-container">

                <div class="profile-image-name-container">
                    <div class="profile-image-container">
                        <img src="images/<?php echo $photo ?>" rel=" img" />
                    </div>
                    <div class="profile-name-container">
                        <?php echo $name; ?>
                    </div>
                    <div class="profile-occupation-address-container">
                        <?php echo $profession; ?>
                        <br>
                        <?php echo $address; ?>
                    </div>
                </div>
            </div>

            <div class="profile-buttons-container">
                <button class="profile-buttons profile"
                    onClick="document.location='profileDetail.php?id=<?php echo $id; ?>';"> Profile
                </button>
                <button class="profile-buttons password"
                    onClick="document.location='newPassword.php?id=<?php echo $id; ?>';"> Password
                </button>
                <button class="profile-buttons logout" onClick="document.location='logout.php';"> Logout </button>
            </div>

        </div>


    </section>

</body>

</html>