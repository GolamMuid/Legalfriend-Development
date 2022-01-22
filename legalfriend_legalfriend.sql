-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2022 at 12:31 AM
-- Server version: 10.3.32-MariaDB-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legalfriend_legalfriend`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL DEFAULT 0,
  `name` text CHARACTER SET utf8mb4 NOT NULL,
  `image` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  `des` text CHARACTER SET utf8mb4 NOT NULL,
  `notification_date` text NOT NULL,
  `headline` text CHARACTER SET utf8mb4 NOT NULL,
  `image_link` varchar(250) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `image`, `des`, `notification_date`, `headline`, `image_link`) VALUES
(23, 'Sheikhdi R/A, Donia, Zatrabari, Dhaka.', '689907aboutus.png', 'Honble Prime Minister&#39;s dream &#39;Digital Bangladesh&#39; and one of our most beautiful initiatives to fulfill this dream is LegalFriend. Bangladesh has already moved ahead in line with other developed countries of the world. Every field has advanced with the use of knowledge and science as well as technology. In This connection. Legaliriend has taken initiative to make some work easier through online services of advocates practicing in the courts of Bangladesh.\r\n\r\n\r\nInitially, it will start its activities in Judge Cour: Dhaka, due to The Dhaka Bar Association, the largest bar in South Asia. So for good reason every member of Dhaka Bar Association spends a very busy time. In addition to legal practice, court-related work has to be done &#39;or a large amount of time during the day, or within a specified time to seek the assistance of a trusted person. Legal&#39; riend is an online app that promises to do the work of that trusted person. This is why it is a legal f rierd. Also, &#34;LegalFrienT w;11 become a social platform for everyone related to law & justice. Legalfriend is working on that endeavor', 'Glamworld IT', 'legalfriendbd@gmail.com', '+8801779888281');

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
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `image_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `image`, `image_link`) VALUES
(2, '240462download (1).png', 'fresh it solution'),
(3, '753702Walton-Stylex-100-red.jpg', 'Mongo DB');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `message_date` date NOT NULL,
  `image` varchar(250) NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `address` varchar(250) NOT NULL,
  `headline` text NOT NULL,
  `body` text NOT NULL,
  `url` varchar(250) NOT NULL,
  `image_title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `message_date`, `image`, `name`, `designation`, `address`, `headline`, `body`, `url`, `image_title`) VALUES
(1, '2022-01-27', '421296Capture.PNG', 'somon', 'islam', 'Glamworld IT', 'somon islam is so good', 'hello bangladewhs', 'fusionbd.com', 'pic image'),
(2, '2022-01-14', '444522255162462_883943018955068_2824386658262564982_n.jpg', 'fcsdcf', 'dcfvasdc', 'dsafvsdac', 'efasd', 'sdvasdfvffcasdafsgvfvavfar', 'dcfasvsd', 'cfd'),
(3, '2022-01-20', '782282download (2).jpg', 'author name', 'author designation', 'author workplace', 'article headline', 'gsdfbs segggaer greahw4htrrg fawfq', 'url link', 'image title');

-- --------------------------------------------------------

--
-- Table structure for table `calenders`
--

CREATE TABLE `calenders` (
  `id` int(11) NOT NULL DEFAULT 0,
  `image` varchar(250) NOT NULL,
  `image_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calenders`
--

INSERT INTO `calenders` (`id`, `image`, `image_link`) VALUES
(2, '236131255162462_883943018955068_2824386658262564982_n.jpg', 'Galmworld IT'),
(3, '177784suprem court calender.PNG', 'Suprim court calender');

-- --------------------------------------------------------

--
-- Table structure for table `headlines`
--

CREATE TABLE `headlines` (
  `id` int(11) NOT NULL,
  `headlines` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headlines`
--

INSERT INTO `headlines` (`id`, `headlines`) VALUES
(1, '***Legalfriend à¦“à§Ÿà§‡à¦¬à¦¸à¦¾à¦‡à¦Ÿà§‡à¦° à¦¡à§‡à¦­à§‡à¦²à¦ªà¦®à§à¦¯à¦¾à¦¨à§à¦Ÿ à¦–à§à¦¬ à¦¸à§à¦¨à§à¦¦à¦° à¦†à¦—à¦¾à¦šà§à¦›à§‡à¥¤   ***à¦–à§à¦¬ à¦¶à§€à¦˜à§à¦°à¦‡ à¦²à¦¿à¦—à§à¦¯à¦¾à¦²à¦«à§à¦°à§‡à¦¨à§à¦¡ à¦…à¦¨à¦²à¦¾à¦‡à¦¨ à¦¯à¦¾à¦¤à§à¦°à¦¾ à¦¶à§à¦°à§ à¦•à¦°à¦¬à§‡à¥¤   *** à¦†à¦‡à¦¨à¦œà§€à¦¬à§€à¦¦à§‡à¦° à¦œà¦¨à§à¦¯ à¦¸à§-à¦–à¦¬à¦°à¦ƒ à¦²à¦¿à¦—à§à¦¯à¦¾à¦²à¦«à§à¦°à§‡à¦¨à§à¦¡ à¦¹à¦¬à§‡ à¦¨à¦¿à§Ÿà¦®à¦¿à¦¤ à¦ªà§à¦°à§à¦¯à¦¾à¦•à¦Ÿà¦¿à¦¸à§‡à¦° à¦¬à¦¿à¦¶à§à¦¬à¦¸à§à¦¤ à¦¸à¦™à§à¦—à§€à¥¤');

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
  `body` text NOT NULL,
  `topic` text NOT NULL,
  `url_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message_date`, `image`, `name`, `designation`, `address`, `headline`, `body`, `topic`, `url_link`) VALUES
(6, '2021-12-31', '664388prothomalo-bangla_2022-01_7ba4a5ab-9f48-469c-9e3c-2b0906bfdc5a_Rajbari_DH0544_20220111_IMG_20220111_WA0129.jpg', 'komol Islam', 'Tno', 'Fresh IT', 'this is very bad thing you know', 'i am very happy to know ', '', ''),
(8, '2022-01-14', '242062', 'rahim', '', '', '', '', '', ''),
(9, '2022-01-14', '427782', 'Somon Islam', 'CEO', 'Glamworld IT', 'This is very good to know that you are very good suitable person. i like you too much. do you like me?', 'computer science department is very essential department for university. because', '', 'http://glamworlditltd.com'),
(10, '2022-01-13', '960402', 'Tonmoy Ahammed', 'CPP', 'Glamworld IT', 'This is very good topics', 'this is good ', 'this is bad topics', 'http://tigeritsolution');

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
  `headline` text NOT NULL,
  `image_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `name`, `image`, `des`, `notification_date`, `headline`, `image_link`) VALUES
(20, 'à¦ªà¦¦à§à¦®à¦¾à§Ÿ à¦§à¦°à¦¾ à¦ªà§œà¦² à§§à§© à¦•à§‡à¦œà¦¿à¦° à¦šà¦¿à¦¤à¦², à§§à§® à¦¹à¦¾à¦œà¦¾à¦° à¦Ÿà¦¾à¦•à¦¾à§Ÿ à¦¬à¦¿à¦•à§à¦°à¦¿', '942277WELCOME.png', 'this is good you know', '2022-01-14', 'headline', ''),
(21, 'à¦ªà¦¦à§à¦®à¦¾à§Ÿ à¦§à¦°à¦¾ à¦ªà§œà¦² à§§à§© à¦•à§‡à¦œà¦¿à¦° à¦šà¦¿à¦¤à¦², à§§à§® à¦¹à¦¾à¦œà¦¾à¦° à¦Ÿà¦¾à¦•à¦¾à§Ÿ à¦¬à¦¿à¦•à§à¦°à¦¿', '546322Php laravel.png', 'awd', '2022-01-20', '  à¦ªà¦¦à§à¦®à¦¾à§Ÿ à¦§à¦°à¦¾ à¦ªà§œà¦² à§§à§© à¦•à§‡à¦œà¦¿à¦° à¦šà¦¿à¦¤à¦²', ''),
(22, '', '337556', '', '2022-01-20', ' ', ''),
(23, 'c cdsDCds', '238380prothomalo-bangla_2022-01_7ba4a5ab-9f48-469c-9e3c-2b0906bfdc5a_Rajbari_DH0544_20220111_IMG_20220111_WA0129.jpg', 'dsdv sdcv', '2022-01-20', ' csdc', ''),
(24, 'software industry', '876063', 'the most leading software industry in bangladesh is glamworld it.', '2022-01-13', ' leading software industry', 'good image');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `headline` varchar(250) NOT NULL,
  `image_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `headline`, `image_link`) VALUES
(1, 'glamworld it', 'facebook.com'),
(2, 'legalfriend', 'facebook.com'),
(3, 'sis media', 'facebook.com');

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
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
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
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
