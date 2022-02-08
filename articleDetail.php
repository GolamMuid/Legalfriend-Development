<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>LegalFriend - Article</title>
    <link rel="icon" href="images/Legalfriend.png">
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
                    <li><a class="active" href="articles.php">ARTICLES</a></li>
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
                ARTICLES
            </div>

            <div class="article-detail-body">

                <?php 
	        
			$sql = "SELECT * FROM `articles` WHERE id = $id";
			$result = $conn -> query($sql);
			while($row = mysqli_fetch_assoc($result))
			{
			$id = $row['id'];
			$message_date = $row['message_date'];
            $newdate = date('d M y',strtotime($message_date));
			$image = $row['image'];
			$name = $row['name'];
			$designation = $row['designation'];
			$address = $row['address'];
			$headline = $row['headline'];
			$body = $row['body'];
			$link = $row['url'];
			$image_title = $row['image_title'];

            }
			?>



                <div class="main-article">
                    <div class="main-article-title">
                        <?php echo $headline ?>
                    </div>
                    <div class="main-article-author">
                        <div class="article-author-image">
                            <img src="./images/author.jpg" alt="">
                        </div>
                        <div class="article-author-detail">
                            <?php echo $name ?>
                            <br>
                            <?php echo $newdate ?>
                        </div>
                        <div class="article-share">
                            <a href="">
                                <img src="./images/fb.png" alt="">
                            </a>
                            <a href="">
                                <img src="./images/copy.png" alt="">
                            </a>
                        </div>
                    </div>
                    <figure class="article-figure">
                        <img src="./Admin/Action/upload/<?php echo $image ?>" rel=" img" />
                        <figcaption> <?php echo $image_title ?> </figcaption>

                    </figure>
                    <div class="article-text-description">

                        <?php echo $body ?>

                    </div>

                    <div class="article-topic">

                    </div>

                    <div class="author-details">
                        <?php echo $name ?> <br>
                        <?php echo $designation ?> <br>
                        <?php echo $address ?> <br>
                        <a href="<?php echo $link ?>">Profile Link</a>

                    </div>


                </div>


                <div class="more-articles-sidebar">
                    <div class="article-sidebar-title">
                        জনপ্রীয় আর্টিকেল
                    </div>
                    <div class="article-sidebar-contents">
                        <?php
            include 'Admin/config.php';
            $sql = "SELECT * FROM `articles` ORDER BY ID DESC LIMIT 10 OFFSET 0";

            $result = $conn -> query($sql);

            while ($row = mysqli_fetch_assoc($result))
            { 
               $id = $row['id'];
                $headline = $row['headline'];
                $image = $row['image'];
            
            ?>
                        <a href="articleDetail.php?id=<?php echo $id; ?>">
                            <div class="sidebar-contents">
                                <div class="sidebar-image">
                                    <img src="./Admin/Action/upload/<?php echo $image ?>" rel=" img" />
                                </div>
                                <div class="sidebar-texts">
                                    <?php echo $headline ?>

                                </div>
                            </div>
                        </a>

                        <?php
             }
             ?>

                    </div>
                </div>
            </div>




        </div>
    </section>
</body>

<footer>
    <?php
    include 'inc/footer.php'
    ?>
</footer>