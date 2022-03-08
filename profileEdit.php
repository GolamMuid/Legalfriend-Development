<?php 

include_once 'Admin/config.php';

    $id = $_GET['id'];
?>



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

    <section class="profile-edit-body">

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
        <div class="profile-edit-container container">
            <div class="profile-edit-page-title-container">
                Edit your info
            </div>

            <div class="profile-information-container container">

                <form class="form-horizontal form-label-left" enctype="multipart/form-data"
                    action="editProfileDetail.php?id=<?php echo $id; ?>" method="post">
                    <div class="profile-title-container">
                        <p> Personal Info </p>

                    </div>

                    <div class="profile-information-list">

                        <div class="profile-information-category edit-information-category">
                            <p> Name </p>
                            <p> Profession </p>
                            <p> Company </p>
                            <p> From </p>
                            <p> Gender </p>
                            <p> Birth of Date </p>
                            <p> Religion </p>
                            <p> Marital Status </p>

                            <p> Upload Profile Picture </p>

                        </div>

                        <div class="profile-information-value">

                            <p> :
                                <input class="profile-edit" type="text" name="name" id="name"
                                    value="<?php echo $name; ?>">
                            </p>
                            <p> : <input class="profile-edit" type="text" name="profession" id="profession"
                                    value="<?php echo $profession; ?>">
                            </p>
                            <p> : <input class="profile-edit" type="text" name="company" id="company"
                                    value="<?php echo $company; ?>">
                            </p>
                            <p> : <input class="profile-edit" type="text" name="address" id="address"
                                    value="<?php echo $address; ?>">
                            </p>
                            <p> : <input class="profile-edit" type="text" name="gender" id="gender"
                                    value="<?php echo $gender; ?>">
                            </p>
                            <p> : <input class="profile-edit" type="date" name="dob" id="dob"
                                    value="<?php echo $dob; ?>">
                            </p>
                            <p> : <input class="profile-edit" type="text" name="religion" id="religion"
                                    value="<?php echo $religion; ?>">
                            </p>
                            <p> : <input class="profile-edit" type="text" name="material_status" id="material_status"
                                    value="<?php echo $material_status; ?>">
                            </p>
                            <!--  <p>
                <div class="profile-image-name-container">
                <div class="profile-image-container">
                    <img src="images/<?php echo $photo ?>" rel=" img" />
                </div>
                            </p> -->


                            <p>
                                <input class="profile-edit" name="profile_image" type="file"
                                    placeholder="Upload Profile Picture">
                            </p>


                        </div>


                    </div>



                    <div class="profile-title-container">
                        <p> About Me </p>

                    </div>

                    <div class="profile-about-me">
                        <input class="profile-edit-about-me" type="textarea" name="about_me" id="about_me"
                            value="<?php echo $about_me; ?>">
                    </div>



                    <button type="submit" class="create-new-profile">Submit</button>

                </form>
            </div>
        </div>




    </section>


</body>

</html>