<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>LegalFriend - National Calender</title>
    <link rel="icon" href="images/Legalfriend.png">
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
                    <li class="calender"> <a class="active" href="calender.php"> CALENDER
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
        include 'inc/responsivelogo.php'
        ?>

    </div>

    <section class="page-body">
        <div class="page-container">
            <div class="page-title-container">
                CALENDER
            </div>

            <div class="calender-page-body">
                <div class="calender-img-body">
                    <?php
                    include 'Admin/config.php';
                    $sql = "SELECT * FROM `calenders` ORDER BY ID LIMIT 1";

                    $result = $conn->query($sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $image = $row['image'];
                        $title = $row['image_link'];
                    }
                    ?>
                    <div class="calender-image">
                        <img src="./Admin/Action/upload/<?php echo $image ?>" rel=" img" />
                    </div>
                    <div class="calender-title">
                        <p> <?php echo $title ?> </p>
                    </div>
                    <div class="calender-buttons">
                        <button id="zoom-in"> + </button>
                        <button id="zoom-out"> - </button>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <footer>
        <?php
        include 'inc/footer.php'
        ?>
    </footer>
    <script src="zoom.js"></script>
</body>


</html>