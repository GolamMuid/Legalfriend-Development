<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>LegalFriend - Profile</title>
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
    <section id="header">

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
                    <li><a href="index.php">HOME</a></li>
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


            <!-- Headline  -->

            <div class="headine-rightbar">

                <?php 
                include 'inc/headline.php';
                ?>

                <?php 
                include 'inc/rightbar.php';
                ?>


            </div>
        </div>


    </section>

    <section class="profile-detail-body">
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
            $company = $row['company'];
            $address = $row['address'];
            $gender = $row['gender'];
            $dob = $row['dob'];
            $religion = $row['religion'];
            $material_status = $row['material_status'];
            $status = $row['status'];
            $expire_date = $row['expire_date'];
            $about_me = $row['about_me'];
           
            }
            
           
    ?>
        <div class="profile-detail-container container">
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
                <div class="paid-unpaid-container">
                    <img src="./images/unpaid.png" alt="">
                </div>
            </div>
            <div class="profile-information-container">
                <div class="profile-title-container">
                    <p> Personal Info </p>
                    <span class="edit_button"> <a href="profileEdit.php?id=<?php echo $id; ?>"> edit </a> </span>
                </div>

                <div class="profile-information-list">

                    <div class="profile-information-category">
                        <p> Name </p>
                        <p> Profession </p>
                        <p> Company </p>
                        <p> From </p>
                        <p> Gender </p>
                        <p> Birth of Date </p>
                        <p> Religion </p>
                        <p> Marital Status </p>

                    </div>

                    <div class="profile-information-value">

                        <p> : <?php echo $name; ?> </p>
                        <p> : <?php echo $profession; ?> </p>
                        <p> : <?php echo $company; ?> </p>
                        <p> : <?php echo $address; ?> </p>
                        <p> : <?php echo $gender; ?> </p>
                        <p> : <?php echo $dob; ?> </p>
                        <p> : <?php echo $religion; ?></p>
                        <p> : <?php echo $material_status; ?></p>


                    </div>

                </div>

                <div class="profile-title-container">
                    <p> Profile Status </p>

                </div>

                <div class="profile-information-list">

                    <div class="profile-information-category">
                        <p> Status </p>
                        <p> Until </p>

                    </div>

                    <div class="profile-information-value">

                        <p> : <?php echo $status; ?> </p>
                        <p> : <?php echo $expire_date; ?> </p>

                    </div>

                </div>

                <div class="profile-title-container">
                    <p> About Me </p>

                </div>

                <div class="profile-about-me">
                    <?php echo $about_me; ?>
                </div>


            </div>
        </div>




    </section>


</body>

</html>