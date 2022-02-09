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

    <section class="create-profile-body">
        <div class="create-profile-container container">
            <div class="login-image-container">
                <img src="./images/aboutus.png" alt="LegalFriend">
                <p>
                    Make your professional life best
                </p>
            </div>

            <div class="create-profile-form-container">
                <form name="create-profile" class="create-profile" action="" method="post">
                    <input class="profile-input" type="text" id="profile-first-name" name="first-name"
                        placeholder="First Name">
                    <input class="profile-input" type="text" id="profile-last-name" name="last-name"
                        placeholder="Last Name">

                    <label for="date-of-birth">Date of Birth</label>

                    <div class="grid-3">

                        <input class="profile-input" type="text" id="profile-birth-date-day" name="birth-date-day"
                            placeholder="Day">
                        <input class="profile-input" type="text" id="profile-birth-date-month" name="birth-date-month"
                            placeholder="Month">
                        <input class="profile-input" type="text" id="profile-birth-date-year" name="birth-date-year"
                            placeholder="Year">

                    </div>

                    <label for="date-of-birth">Gender</label>

                    <div class="grid-3">
                        <label class="select-button">Male
                            <input type="radio" name="gender" class="gender radio-hide">


                        </label>
                        <label class="select-button">Female
                            <input type="radio" name="gender" class="gender radio-hide">

                        </label>
                        <label class="select-button">Custom
                            <input type="radio" name="gender" class="gender radio-hide">

                        </label>

                    </div>

                    <label for="profession">Profession</label>

                    <div class="grid-2">


                        <label class="select-button">Judge
                            <input type="radio" name="profession" class="profession radio-hide">


                        </label>
                        <label class="select-button">Advocate
                            <input type="radio" name="profession" class="profession radio-hide">

                        </label>

                        <label class="select-button">Barrister
                            <input type="radio" name="profession" class="profession radio-hide">


                        </label>
                        <label class="select-button">App. Lawyer
                            <input type="radio" name="profession" class="profession radio-hide">

                        </label>

                        <label class="select-button">Clark
                            <input type="radio" name="profession" class="profession radio-hide">


                        </label>
                        <label class="select-button">Court Stuff
                            <input type="radio" name="profession" class="profession radio-hide">

                        </label>

                        <label class="select-button">Student
                            <input type="radio" name="profession" class="profession radio-hide">


                        </label>
                        <label class="select-button">Others
                            <input type="radio" name="profession" class="profession radio-hide">

                        </label>

                    </div>

                    <div class="grid-2">

                        <div class="workplace-location">
                            <label for="profession">Workplace</label>
                            <input class="profile-input" type="text" id="profile-workplace" name="workplace"
                                placeholder="Company Name">

                        </div>

                        <div class="workplace-location">
                            <label for="profession">From</label>
                            <input class="profile-input" type="text" id="profile-location" name="location"
                                placeholder="City">

                        </div>

                    </div>

                    <p style="text-align:center">
                        Remember your phone number and password <br>
                        You need to login to a new device
                    </p>
                    <br>

                    <input class="profile-input" type="password" id="new-password" name="new-password"
                        placeholder="Make New Password" autocomplete="off">

                    <input class="create-new-profile center" type="submit" value="Create your profile">

                </form>
                <p style="text-align:center">
                    RBy clicking create new profile, you are agreeing to the LegalFriend <a href=""
                        style="color:blue">Privacy Policy</a>
                    <br>
                    You may receive sms and notifications from us
                </p>
            </div>

        </div>


    </section>




</body>

</html>