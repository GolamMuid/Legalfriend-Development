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
                <form name="registartion-form" class="login-form" method="POST" action="verification.php">
                    <input class="inputs" type="text" id="number" name="uname" placeholder="Phone Number 01#########">
                    <div id="recaptcha-container"></div>
                    <button class="create-new-profile" type="button" onclick="phoneAuth();">Send Otp</button>
                </form>




                <p> Your mobile number will be your USER ID </p>
                <p> It will be needed to login again </p>

            </div>

        </div>

    </section>


    <!-- Registration Body Ends  -->


    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {

        apiKey: "AIzaSyAElAlezjuBZR__T2-m1QcD6FygKYNPFQE",
        authDomain: "legal-friend.firebaseapp.com",
        projectId: "legal-friend",
        storageBucket: "legal-friend.appspot.com",
        messagingSenderId: "1072150333848",
        appId: "1:1072150333848:web:17e8b78b59160c9e8bc3ed",
        measurementId: "G-LPE10SQB21"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
    </script>
    <script src="firebase.js" type="text/javascript"></script>

</body>

</html>