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



    <div class="responsive-logo">
        <?php 
        include 'inc/responsivelogo.php'
        ?>


    </div>

    <section class="full-body">
        <div class="body-container">
            <div class="notification-advertise-container">
                <div class="notification-container">
                    <div class="section-title">
                        NOTIFICATIONS
                    </div>

                    <?php
            include 'Admin/config.php';
            $sql = "SELECT * FROM `notifications` ORDER BY ID DESC LIMIT 3";

            $result = $conn -> query($sql);

            while ($row = mysqli_fetch_assoc($result))
            { 

                $id = $row['id'];
                $date = $row['notification_date'];
                $date1 = date('d', strtotime($date));
                $date2 = date('M y', strtotime($date));
                $headline = $row['headline'];
            
            ?>



                    <div class="notification-card">

                        <div class="notification-date">
                            <p class="date1"> <?php echo $date1 ?> </p>
                            <p class="date2"><?php echo $date2 ?></p>
                        </div>

                        <div class="notification-details">

                            <?php echo $headline; ?> <br>
                            <button onClick="document.location='notificationDetail.php?id=<?php echo $id; ?>';"
                                class="view-button">VIEW</button>

                        </div>

                    </div>

                    <?php
            }
            ?>


                    <div class="section-title right">
                        <a href="./notification.php"> ALL NOTIFICATIONS </a>
                    </div>



                </div>

                <div class="advertise-container">

                    <?php
            include 'Admin/config.php';
            $sql = "SELECT * FROM `advertisements` ORDER BY ID DESC LIMIT 2";

            $result = $conn -> query($sql);

            while ($row = mysqli_fetch_assoc($result))
            {
                $image = $row['image'];
                $advertise_link = $row['image_link'];
           

            ?>



                    <div class="advertises">
                        <div class="advertise-image">


                            <video controls>
                                <source src="./Admin/Action/upload/<?php echo $image ?>" type="video/mp4">

                            </video>

                        </div>
                        <div class="advertise-text">
                            <?php echo $advertise_link ?>

                        </div>


                    </div>

                    <?php
            }
            ?>


                </div>

            </div>



        </div>

        </div>
    </section>


    <section class="article-container">

        <span class="section-title">
            ARTICLES
        </span>
        <span class="section-title right">
            <a href="./articles.php"> ALL ARTICLES </a>
        </span>
        <div class="article-body">

            <?php
            include 'Admin/config.php';
            $sql = "SELECT * FROM `articles` ORDER BY ID DESC LIMIT 3";

            $result = $conn -> query($sql);

            while ($row = mysqli_fetch_assoc($result))
            { 
                $id = $row['id'];
                $headline = $row['headline'];
                $date = $row['message_date'];
                $newdate = date('d M y',strtotime($date));
                $image = $row['image']
            
            ?>


            <div class="home-article">
                <a href="articleDetail.php?id=<?php echo $id; ?>">
                    <img src="./Admin/Action/upload/<?php echo $image ?>" rel=" img" />
                    <p> <?php echo $headline ?> </p>
                </a>
                <div class="date">
                    <?php echo $newdate ?>
                </div>
            </div>

            <?php
            }
            ?>


        </div>
    </section>

    <div class="article-slider">
        <div class="section-title">
            ARTICLES
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <?php
            include 'Admin/config.php';
            $sql = "SELECT * FROM `articles` ORDER BY ID DESC LIMIT 3";

            $result = $conn -> query($sql);

            while ($row = mysqli_fetch_assoc($result))
            { 
                $id = $row['id'];
                $headline = $row['headline'];
                $date = $row['message_date'];
                $newdate = date('d M y',strtotime($date));
                $image = $row['image']
            
            ?>


                <div class="swiper-slide">
                    <div class="home-article">
                        <a href="articleDetail.php?id=<?php echo $id; ?>">
                            <img src="./Admin/Action/upload/<?php echo $image ?>" rel=" img" />
                            <p> <?php echo $headline ?> </p>
                        </a>
                        <div class="date">
                            <?php echo $newdate ?>
                        </div>
                    </div>
                </div>

                <?php
            }
            ?>

            </div>
        </div>
        <div class="section-title">
            <a href="./articles.php"> ALL ARTICLES </a>
        </div>
    </div>


    <section class="video-container">
        <span class="section-title">
            VIDEO
        </span>
        <span class="section-title right">
            <a href="https://www.youtube.com/channel/UCSpCs90r46ro4ttJos0JYpg" target="_blank"> ALL VIDEOS </a>
        </span>

        <div class="video-body">
            <?php
            include 'Admin/config.php';
            $sql = "SELECT * FROM `videos` ORDER BY ID DESC LIMIT 3";

            $result = $conn -> query($sql);

            while ($row = mysqli_fetch_assoc($result))
            { 
               
                $video = $row['image_link'];
                $title = $row['headline'];
            
            ?>
            <div class="home-video">
                <iframe src="<?php echo $video ;?>" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
                <p><a href=""> <?php echo $title ;?> </a></p>
            </div>

            <?php
            }
            ?>


        </div>
    </section>

    <section class="video-slider">
        <div class="section-title">
            VIDEO
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <?php
            include 'Admin/config.php';
            $sql = "SELECT * FROM `videos` ORDER BY ID DESC LIMIT 3";

            $result = $conn -> query($sql);

            while ($row = mysqli_fetch_assoc($result))
            { 
               
                $video = $row['image_link'];
                $title = $row['headline'];
            
            ?>


                <div class="swiper-slide">
                    <div class="home-video">
                        <iframe src="<?php echo $video ;?>" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                        <p><a href=""> <?php echo $title ;?> </a></p>
                    </div>
                </div>

                <?php
            }
            ?>


            </div>
        </div>

        <div class="section-title">
            <a href="https://www.youtube.com/channel/UCSpCs90r46ro4ttJos0JYpg"> ALL VIDEOS </a>
        </div>
    </section>


    <!-- Message starts -->

    <section class="message-container">
        <span class="section-title">
            MESSAGES
        </span>
        <span class="section-title right">
            <a href="./messages.php"> ALL MESSAGES </a>
        </span>
        <div class="message-body">

            <?php
            include 'Admin/config.php';
            $sql = "SELECT * FROM `messages` ORDER BY ID DESC LIMIT 3";

            $result = $conn -> query($sql);

            while ($row = mysqli_fetch_assoc($result))
            { 
                $id = $row['id'];
                $date = $row['message_date'];
                $newdate = date('d M y',strtotime($date));
                $image = $row['image'];
                $name = $row['name'];
                $designation = $row['designation'];
                $address = $row['address'];
                $address = $row['address'];
                $headline = $row['headline']; 
            
            ?>

            <div class="home-message">
                <a href="messageDetail.php?id=<?php echo $id; ?>">
                    <div class="message-image-author-container">
                        <div class="message-image">
                            <img src="./Admin/Action/upload/<?php echo $image ?>" rel=" img" />
                        </div>
                        <div class="message-author">
                            <div class="author-name">
                                <?php echo $name; ?>
                            </div>
                            <div class="author-designation">
                                <?php echo $designation; ?>
                                <br>
                                <?php echo $address; ?>

                            </div>
                        </div>
                    </div>
                    <div class="message-detail">
                        <?php echo $headline; ?>
                    </div>
                    <div class="date">
                        <?php echo $newdate; ?>
                    </div>


                </a>

            </div>

            <?php
                }
                ?>


        </div>
    </section>

    <!-- Message slider starts  -->

    <section class="message-slider">
        <div class="section-title">
            MESSAGES
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <?php
            include 'Admin/config.php';
            $sql = "SELECT * FROM `messages` ORDER BY ID DESC LIMIT 3";

            $result = $conn -> query($sql);

            while ($row = mysqli_fetch_assoc($result))
            { 
                $id = $row['id'];
                $date = $row['message_date'];
                $newdate = date('d M y',strtotime($date));
                $image = $row['image'];
                $name = $row['name'];
                $designation = $row['designation'];
                $address = $row['address'];
                $address = $row['address'];
                $headline = $row['headline']; 
            
            ?>


                <div class="swiper-slide">
                    <div class="home-message">
                        <a href="messageDetail.php?id=<?php echo $id; ?>">
                            <div class="message-image-author-container">
                                <div class="message-image">
                                    <img src="./Admin/Action/upload/<?php echo $image ?>" rel=" img" />
                                </div>
                                <div class="message-author">
                                    <div class="author-name">
                                        <?php echo $name; ?>
                                    </div>
                                    <div class="author-designation">
                                        <?php echo $designation; ?>
                                        <br>
                                        <?php echo $address; ?>

                                    </div>
                                </div>
                            </div>
                            <div class="message-detail">
                                <?php echo $headline; ?>
                            </div>
                            <div class="date">
                                <?php echo $newdate; ?>
                            </div>


                        </a>

                    </div>
                </div>

                <?php
            }
            ?>





            </div>

        </div>
        <div class="section-title">
            <a href="./messages.php"> ALL MESSAGES </a>
        </div>


    </section>

    <!-- Message slider ends  -->

    <!-- Message ends -->

    <section class="download-our-app">
        <div class="download-our-app-container">
            <!-- <div class="our-apps-title">
                Our App
            </div> -->
            <div class="our-apps-icons">
                <div class="icon-each">
                    <img src="./images/Legalfriend.png" alt=""> <br>
                    <button> <i class="fas fa-download"></i> Download</button>
                </div>
                <div class="icon-each">
                    <img src="./images/Legaldiary.png" alt=""> <br>
                    <button> <i class="fas fa-download"></i> Download</button>
                </div>
            </div>
        </div>

    </section>


    <!-- Footer starts  -->

    <footer>
        <?php
        include 'inc/footer.php'
        ?>



    </footer>

    <!-- Footer ends  -->


    <!-- Scrips  -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        }
    });
    </script>

</body>

</html>