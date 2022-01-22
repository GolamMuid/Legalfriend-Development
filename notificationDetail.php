<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>LegalFriend - Notification</title>
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
                    <li><a class="active" href="notification.html">NOTIFICATION</a></li>
                    <li class="calender"> <a class="active" href="calender.php"> CALENDER
                            <ul class="dropdown">
                                <li> <a href="nationalCalender.php"> জাতীয় ক্যালেন্ডার </a></li>
                                <li> <a href="highcourtCalender.php"> হাইকোর্ট ক্যালেন্ডার </a></li>
                            </ul>
                        </a>
                    </li>
                    <li><a href="aboutus.php">ABOUTus</a></li>
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
                NOTIFICATION
            </div>
            <div class="notification-detail-body">
                <div class="notification-detail-title">
                    ঈদুল ফিতর উপলক্ষে আগামী ২৪/০৫/২০২১ থেকে ৩০/০৫/২০২১ পর্যন্ত কজলিস্ট আপডেট বন্ধ থাকবে।
                </div>
                <div class="notification-detail-date">
                    ২১ ডিসেম্বর ২০২১
                </div>
                <div class="notification-detail-text">

                    অংশীদারী চুক্তিপত্র দলিল।
                    <br />
                    <br />
                    <br />

                    অত্র চুক্তি ্নামা দলিল অদ্য ১৮/০৩/২০২১ ইং তারিখে নিন লিখিত পক্ষের মধ্যে
                    সম্পাদিত হইল
                    <br />
                    <br />
                    <br />

                    সাব্বির আহমেদ, পিতাঃ মোঃ হযরত আলী, মাতাঃ খাদিজা বেগম, সাংঃ খাসেরাকান্দা, পোস্ট অফিস: হামছাদী, থানা:
                    দোনারগাঁও, জেলা: নারাযন্গঞ্ভ। বর্তমানে-বাড়ি নং
                    ১৪৭/৩, ৭/গ-ইউনাইটেড টাওয়ার, আকতার হোসেন রোড, থানা: ধানমন্ডি, জেলা: ঢাকা ।
                    জন্মতারিখ-০৫/০৬/১৯৯৬ইং, জাতীয়তা-বাংলাদেশী, ধর্ম ইসলাম, পেশা-ব্যবসা।
                    জনতুনিবদন নং-১৯৯৬৬৭১০৪১৭০২১১
                    <br />
                    <br />
                    <br />

                    পশ্চিম নয়াহাট, কালিকা প্রসাদ, পোস্ট অফিস: কালিকা প্রস্দ. থানা: ভৈরব, জেলা;
                    কিশোর উু নং- ১৪৭/৩, ৭/গ-ইউনাইটেড টাওয়ার, আকতার হোসেন
                    রোড, থানাঃ খাদি, জেলা; ঢাকা । জন্মতারিখ-১১/০২/১৯৮৮ইং. জাতীয়তা-বাংলাদেশী
                    ধর্ম ইসলাম, পেশা-ব্যবসা । জাতীয় পরিচয় নং- ১৯৮৮৪৮১১১৪৭০০০০১৭,
                    <br />
                    <br />
                    <br />

                </div>

                <div class="notification-detail-image">
                    <img src="./images/notification.png" alt="">
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

</html>