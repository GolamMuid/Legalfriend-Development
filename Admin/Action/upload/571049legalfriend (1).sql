-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 06:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legalfriend`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(255) NOT NULL,
  `part_one` text NOT NULL,
  `part_one_title` varchar(255) NOT NULL,
  `part_two` text NOT NULL,
  `part_two_title` varchar(255) NOT NULL,
  `part_three` text NOT NULL,
  `part_three_title` varchar(255) NOT NULL,
  `part_four` text NOT NULL,
  `part_four_title` varchar(255) NOT NULL,
  `part_five` text NOT NULL,
  `part_five_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `part_one`, `part_one_title`, `part_two`, `part_two_title`, `part_three`, `part_three_title`, `part_four`, `part_four_title`, `part_five`, `part_five_title`) VALUES
(1, 'SIS Media is one of the prominent Value Added Service providers (VASP) of the country. We are developing and distributing digital products for the mobile audience since 2015. We have worked closely with mobile network SIS Media is one of the prominent Value Added Service providers (VASP) of the country. We are developing and distributing digital \r\nproducts for the mobile audience since 2015. We have worked closely with mobile network SIS Media is one of the prominent Value Added Service providers (VASP) of the country.  ', 'SIS MEDIA', 'It has been working since December 2015 in media. SIS Media Your Entertainment Friend.', 'Our Philosophy', 'SIS Media was established with the mission to be a leading developer and distributor of high impact mobile value-added-service products, applications and content for the mobile operators & mobile subscribers.', 'Our Vision', 'SIS Media proudly introduces itself as the Generation Next. To change the outlook of Bangladeshi Films and others digital content to the next generation viewers.', 'Our Goal', 'Leading Content Providers for Bangladeshi Media updates.', 'Our Acheievement');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', 'admin1234@');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL DEFAULT 0,
  `message_date` date NOT NULL,
  `image` varchar(250) NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `address` text NOT NULL,
  `headline` text NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `message_date`, `image`, `name`, `designation`, `address`, `headline`, `body`) VALUES
(6, '2021-12-31', '664388prothomalo-bangla_2022-01_7ba4a5ab-9f48-469c-9e3c-2b0906bfdc5a_Rajbari_DH0544_20220111_IMG_20220111_WA0129.jpg', 'komol Islam', 'Tno', 'Fresh IT', 'this is very bad thing you know', 'i am very happy to know '),
(0, '2022-01-20', '737426design.PNG', 'vsdfv', 'adfvasda', 'sfasdv', '', 'asdcasv'),
(0, '2022-01-28', '428842dakterbari.PNG', 'asd', 'asd', 'asdasd', 'sdvfadsf', 'fsdafsdvc');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `last_date` varchar(255) NOT NULL,
  `instruction` varchar(255) NOT NULL,
  `job_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `job_title`, `last_date`, `instruction`, `job_file`) VALUES
(3, 'Camera Assitant', '2021-01-01', 'Drop your cv at admin@admin.com', '670192Employee_Handbook_12212016.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `date`, `name`, `email`, `subject`, `message`) VALUES
(10, '2012-05-21', 'Md. Sajid Ahmed', 'ahamedsajid18@gmail.com', 'Suggestion', 'Please focus on our culture.'),
(11, '2012-05-01', 'Asif Hossain', 'asif@it.com', 'Information', 'Please give me a brief description of your company.'),
(12, '2012-05-06', 'Rubel Mia', 'rubel@it.com', 'Media Manager', 'Hello Sir,\r\n\r\nDo you have any job?\r\nRegards,\r\n\r\nRubel Mia'),
(13, '2021-12-05', 'Rahim Uddin', 'rahim@gmail.com', 'Job', 'Hello Sir, Do you have any job? Regards, Rahim Uddin'),
(16, '2021-12-19', 'sismediabd.com', 'sismediabd.com@buycodeshop.com', 'sismediabd.com', ''),
(17, '2021-12-19', 'Gal', 'h4t0utth@gmail.com', 'I promised.', 'Hi, this is Irina. I am sending you my intimate photos as I promised. https://tinyurl.com/y4jhwnah'),
(18, '2021-12-19', 'xbetychgah', 'r.o.x.a.nu.e.lg.utker.h.o.ld@gmail.com', 'Casino X: Ð¾Ð±Ð·Ð¾Ñ€ Ð½Ð° Ð³Ð»Ð°ÑÐ½Ñ‹Ð¹ ÑÐ°Ð¹Ñ‚ ÐšÐ°Ð·Ð¸Ð½Ð¾ Ð¥, Ð¾Ñ‚Ð·Ñ‹Ð²Ñ‹', '<a href=https://casino-x.pp.ua/>casino x ÑÐ»ÑƒÐ¶ÐµÐ±Ð½Ñ‹Ð¹ ÑÐ°Ð¹Ñ‚</a> - ÑÑ‚Ð¾ Ð¾Ð½Ð»Ð°Ð¹Ð½-ÐºÐ°Ð·Ð¸Ð½Ð¾ Ñ Ð´ÐµÐ¹ÑÑ‚Ð²Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ð¾ Ð¼ÐµÐ¶Ð´ÑƒÐ½Ð°Ñ€Ð¾Ð´Ð½Ñ‹Ð¼ Ð¾Ñ…Ð²Ð°Ñ‚Ð¾Ð¼. Ð¥Ð¾Ñ€Ð¾ÑˆÐ¾ Ð¿Ñ€Ð¾Ð´ÑƒÐ¼Ð°Ð½Ð½Ñ‹Ð¹ Ð¸ Ð±ÐµÑÑ…Ð¸Ñ‚Ñ€Ð¾ÑÑ‚Ð½Ñ‹Ð¹ Ð² Ð¸ÑÐ'),
(19, '2021-12-21', 'Miltonlen', 'pdaria8875@yandex.ru', '', 'Ð£ ÐÐ°Ñ ÑÐºÐ¸Ð´ÐºÐ¸ ÐºÑ€ÑƒÐ³Ð»Ñ‹Ð¹ Ð³Ð¾Ð´! \r\nHoOkAh MaGic Ð½Ð°Ñˆ Ð¾Ñ„Ð¸Ñ†Ð¸Ð°Ð»ÑŒÐ½Ñ‹Ð¹ Ð±Ñ€ÐµÐ½Ð´ \r\nÐÐ°Ð±Ñ€Ð°Ð² Ð² Ð¿Ð¾Ð¸ÑÐºÐ¾Ð²Ð¸ÐºÐµ Ð’Ñ‹ Ð¼Ð¾Ð¶ÐµÑ‚Ðµ Ð¿Ð¾ÑÐµÑ‚Ð¸Ñ‚ÑŒ Ð½Ð°Ñˆ ÑÐ°Ð¹Ñ‚ \r\nÐ¸ Ð²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ Ð¿Ñ€Ð¸Ð¾Ð±Ñ€ÐµÑÑ‚Ð¸ ÐºÐ°Ð»ÑŒÑÐ½Ñ‹ Ð¸ Ð²'),
(20, '2021-12-22', 'Gal', 'pjimw8et@icloud.com', 'I promised.', 'Hi, this is Anna. I am sending you my intimate photos as I promised. https://tinyurl.com/y4z3wojm'),
(21, '2021-12-24', 'Gal', 'myncb1xl@icloud.com', 'I promised.', 'Hi, this is Jenny. I am sending you my intimate photos as I promised. https://tinyurl.com/y694xatw'),
(22, '2021-12-26', 'sismediabd.com', 'sismediabd.com@buycodeshop.com', 'sismediabd.com', ''),
(23, '2021-12-28', 'sismediabd.com', 'sismediabd.com@buycodeshop.com', 'sismediabd.com', ''),
(24, '2021-12-29', 'Gal', 'eoe8kp5w@icloud.com', 'I promised.', 'Hi, this is Jeniffer. I am sending you my intimate photos as I promised. https://tinyurl.com/y2tzd9ns'),
(25, '2021-12-29', 'bs.eh5@freeallapp.com', 'bs.eh5@freeallapp.com', 'christiansen.kam@gmail.com', 'Good job on the new site! Now go ahead and submit it to our free directory here https://1mdr.short.gy/submityoursite'),
(26, '2021-12-30', 'nem3555833tetcher', 'lera.minakina.93@mail.ru', 'tup3555833uytjthyegt', 'mns3555833uttjr rSfp6jA QoPd XGS41rY'),
(27, '2021-12-31', 'nym6152821tetcher', 'lera.minakina.93@mail.ru', 'tap6152821rtuyjyh', 'mys6152821ngkyt o8zjEBv 5NuT HVtYxwf'),
(28, '2022-01-02', 'Gal', 'k7l80vd8@gmail.com', 'I promised.', 'Hi, this is Anna. I am sending you my intimate photos as I promised. https://tinyurl.com/y3u2r8t3'),
(29, '2022-01-02', 'Gal', '0ei5dn7v@hotmail.com', 'I promised.', 'Hi, this is Jenny. I am sending you my intimate photos as I promised. https://tinyurl.com/y4bss8bc'),
(30, '2022-01-04', 'Gal', '4byod7gz@gmail.com', 'I promised.', 'Hi, this is Irina. I am sending you my intimate photos as I promised. https://tinyurl.com/y3pu3k2j'),
(31, '2022-01-05', 'Gal', 'l01zsa2r@icloud.com', 'I promised.', 'Hi, this is Julia. I am sending you my intimate photos as I promised. https://tinyurl.com/y2mttks4'),
(32, '2022-01-05', 'Gal', '1c5lc7f0@icloud.com', 'I promised.', 'Hi, this is Julia. I am sending you my intimate photos as I promised. https://tinyurl.com/y2kjnr38'),
(33, '2022-01-08', 'sismediabd.com', 'sismediabd.com@buycodeshop.com', 'sismediabd.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `digital_platform`
--

CREATE TABLE `digital_platform` (
  `id` int(255) NOT NULL,
  `main_title` varchar(255) NOT NULL,
  `main_title_des` text NOT NULL,
  `part_one_title` varchar(255) NOT NULL,
  `part_one_title_des` text NOT NULL,
  `part_two_title` varchar(255) NOT NULL,
  `part_two_title_des` text NOT NULL,
  `part_three_title` varchar(255) NOT NULL,
  `part_three_title_des` text NOT NULL,
  `part_four_title` varchar(255) NOT NULL,
  `part_four_title_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `digital_platform`
--

INSERT INTO `digital_platform` (`id`, `main_title`, `main_title_des`, `part_one_title`, `part_one_title_des`, `part_two_title`, `part_two_title_des`, `part_three_title`, `part_three_title_des`, `part_four_title`, `part_four_title_des`) VALUES
(1, 'Our Digital Platforms', 'SIS Media works on the process of producing video content for television, social media, corporate promotions, commercial or other media-related fields.', 'Entertainment OTT Platforms', 'Complete platform to build a powerful all-inclusive white-label OTT streaming service. Trusted by over 400 clients worldwide from various industries. Request a free live demo. Customised Solutions. Advanced CMS. Advanced User Analytics.', 'Religious Digital Platforms', 'Digital Religion is the practice of religion in the digital world, and the academic study of such religious practice.', 'Music Streaming Services', 'Streaming music, or more accurately, streaming audio, is a method of feeding audio content to your device directly, without requiring you to download files from the internet.', 'IVR Services', 'An example of IVR is when you call a company or business, and then you hear press 1 for technical assistance, press 2 for sales support, press 0 to speak to the operator.');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `you_url` varchar(255) NOT NULL,
  `fb_url` varchar(255) NOT NULL,
  `ins_url` varchar(255) NOT NULL,
  `linkd_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `title`, `address`, `phone`, `email`, `you_url`, `fb_url`, `ins_url`, `linkd_url`) VALUES
(3, 'SIS MEDIA', ' Level # 9, Suite # 10-A, 383, Boro Moghbazar, Razzak Plaza,Dhaka 1217', '02-58317938', 'info@sismediabd.com', 'https://www.youtube.com/c/sismediabd', 'https://facebook.com/sismediabd', 'https://instagram.com/sismediabd', 'https://twitter.com/sismediabd');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(255) NOT NULL,
  `header_logo` varchar(255) NOT NULL,
  `video_one` varchar(255) NOT NULL,
  `video_two` varchar(255) NOT NULL,
  `video_three` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `header_logo`, `video_one`, `video_two`, `video_three`) VALUES
(11, '951355sismedia.png', '582218SISmedia.mp4', '963754SISmedia.mp4', '205968SISmedia.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(255) NOT NULL,
  `tab1` varchar(255) NOT NULL,
  `tab2` varchar(255) NOT NULL,
  `tab3` varchar(255) NOT NULL,
  `tab4` varchar(255) NOT NULL,
  `tab5` varchar(255) NOT NULL,
  `tab6` varchar(255) NOT NULL,
  `tab7` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `tab1`, `tab2`, `tab3`, `tab4`, `tab5`, `tab6`, `tab7`) VALUES
(2, 'Home', 'About Us', 'Our Digital Platform', 'Our service', 'Career', 'Our Clients', 'Contact Us');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message_date` date NOT NULL,
  `image` varchar(250) NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `address` text NOT NULL,
  `headline` text NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message_date`, `image`, `name`, `designation`, `address`, `headline`, `body`) VALUES
(6, '2021-12-31', '664388prothomalo-bangla_2022-01_7ba4a5ab-9f48-469c-9e3c-2b0906bfdc5a_Rajbari_DH0544_20220111_IMG_20220111_WA0129.jpg', 'komol Islam', 'Tno', 'Fresh IT', 'this is very bad thing you know', 'i am very happy to know '),
(8, '2022-01-14', '242062', 'rahim', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `des` text NOT NULL,
  `notification_date` date NOT NULL,
  `headline` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`) VALUES
(1, 'Blaglalink', '522613bl.png'),
(3, 'GrameenPhone', '547306gp.png'),
(4, 'Airtel', '740663airtel.png'),
(5, 'Robi', '295763robi.png'),
(7, 'Teletalk', '10954Teletalk.png');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(255) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `des` longtext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `image`, `des`) VALUES
(8, 'DHAMAKA', '503438Dhamaka-01 - Copy-new.png', 'â€œDHAMAKAâ€ is a TVAS WAP portal service, consisting a wide range of dhallywood movie song,  all kind of short video, wallpaper, animation, game, music, ringtone and others.   Users can enjoy different frame of videos from given categories depends on their compatible device.    From this portal, subscribers can download any amount of contents totally free as per their taste and desire.    But daily subscription charge is applicable for mobile users. '),
(9, 'CINEMABARTA', '479875JPEG-new.jpg', 'CINEMABARTAâ€ is a TVAS WAP portal service, consisting a of Bangali movie related news ,   movie mohorat, behind the scene,  shorts videos, short film, drama clips and others.    Users can enjoy different frame of videos from given categories depends on their compatible device.     From this portal, subscribers can download any amount of contents totally free as per their taste and desire.     But daily subscription charge is applicable for mobile users.'),
(16, 'Lifestyle Aajkal', '1376255162462_883943018955068_2824386658262564982_n.jpg', 'SIS Media have connections to talent agencies. SIS Media will work with different casting and modeling agencies as some of their projects might require hiring actors, extras, or models.&#39;, &#39;Ringtone services&#39;, &#39;Studios generally represent the main driving force behind developing a project, and they often choose to develop projects pitched by producers and agents.'),
(19, 'Furti24', '785781102374927_255088219256184_8033384590821294080_n.jpg', 'SIS media production company will focus on producing content. This could vary depending on the company, but there is an increased interest in making shareable content for social media.');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `video_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `digital_platform`
--
ALTER TABLE `digital_platform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `digital_platform`
--
ALTER TABLE `digital_platform`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
