<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>LegalFriend - About Us</title>
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
                        <img src="./images/title.png" alt="">
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
                    <li><a class="active" href="aboutus.php">ABOUTus</a></li>
                </ul>
            </nav>


            <!-- Navbar Ends  -->


            <!-- Headline  -->

            <div class="headine-rightbar">

                <?php 
                include 'inc/headline.php'
                ?>
                <?php 
                include 'inc/rightbar.php'
                ?>

            </div>
        </div>
    </section>



    <div class="responsive-logo">

        <?php 
                include 'inc/rightbar.php'
                ?>


    </div>

    <section class="page-body">
        <div class="page-container">
            <div class="page-title-container">
                ABOUTus
            </div>
            <div class="about-us-body">
                <img src="./images/aboutus.png" alt="">
                <p>Honble Prime Minister's dream 'Digital Bangladesh' and one of our most beautiful initiatives to
                    fulfill this dream is LegalFriend. Bangladesh has already moved ahead in line with other developed
                    countries of the world. Every field has advanced with the use of knowledge and science as well as
                    technology. In This connection. Legaliriend has taken initiative to make some work easier through
                    online services of advocates practicing in the courts of Bangladesh.
                </p>
                <br />
                <p>Initially, it will start its activities in Judge Cour: Dhaka, due to The Dhaka Bar Association, the
                    largest bar in South Asia. So for good reason every member of Dhaka Bar Association spends a very
                    busy time. In addition to legal practice, court-related work has to be done 'or a large amount of
                    time during the day, or within a specified time to seek the assistance of a trusted person. Legal'
                    riend is an online app that promises to do the work of that trusted person. This is why it is a
                    legal f rierd. Also, "LegalFrienT w;11 become a social platform for everyone related to law &
                    justice. Legalfriend is working on that endeavor.
                </p>
                <br>

                <div class="about-us-title">
                    LegalFriend Bangladesh
                </div>
                <p> Sheikhdi R/A, Donia, Zatrabari, Dhaka. </p>
                <p> legalfriendbd@gmail.com </p>
                <p> +8801779888281 </p>
                <br>
            </div>
            <div class="our-app">
                <div class="about-us-title">
                    Our App:
                </div>
                <div class="about-us-icons">
                    <a href="">
                        <img src="./images/Legalfriend.png" alt="">
                    </a>
                    <a href="">
                        <img src="./images/Legaldiary.png" alt="">
                    </a>

                </div>
            </div>
            <div class="join-us">
                <div class="about-us-title">
                    <p>Join Us</p>
                </div>
                <a href=""> <img src="./images/facebook.png" alt=""> </a>
                <a href=""> <img src="./images/linkedin.png" alt=""> </a>
                <a href=""> <img src="./images/instagram.png" alt=""> </a>
                <a href=""> <img src="./images/youtube.png" alt=""> </a>
            </div>


        </div>


    </section>
</body>

<footer>
    <?php
    include 'inc/footer.php'
    ?>
</footer>