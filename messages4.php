<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>LegalFriend - Messages</title>
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
                    <li><a class="active" href="messages.php">MESSAGES</a></li>
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
                MESSAGES
            </div>
            <div class="message-article-body">
                <?php
            include 'Admin/config.php';
            $sql = "SELECT * FROM `messages` ORDER BY ID DESC LIMIT 10 OFFSET 30";

            $result = $conn -> query($sql);

            while ($row = mysqli_fetch_assoc($result))
            { 
               
                $headline = $row['headline'];
                $image = $row['image']
            
            ?>
                <a href="">
                    <div class="articles">
                        <div class="article-image">
                            <img src="./Admin/Action/upload/<?php echo $image ?>" rel=" img" />
                        </div>
                        <div class="article-text">
                            <?php echo $headline ?>
                        </div>
                    </div>
                </a>

                <?php
            }
            ?>



            </div>

            <div class="page-numbers">
                <button onClick="window.location.href='messages.php';"> 1 </button>
                <button onClick="window.location.href='messages2.php';"> 2 </button>
                <button onClick="window.location.href='messages3.php';"> 3 </button>
                <button onClick="window.location.href='messages4.php';"> 4 </button>
                <button onClick="window.location.href='messages5.php';"> 5 </button>
            </div>

        </div>

    </section>
    <footer>
        <?php
        include 'inc/footer.php'
        ?>
    </footer>


</body>

</html>