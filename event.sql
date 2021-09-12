-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 01, 2021 at 04:54 AM
-- Server version: 10.4.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u771432390_lpv_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`email`, `password`) VALUES
('lokeshsinghal19', 'Lpv@12345');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_mobile` int(11) NOT NULL,
  `c_subject` varchar(1000) NOT NULL,
  `c_message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `e_startreg` datetime NOT NULL,
  `e_endreg` datetime NOT NULL,
  `e_startsub` datetime NOT NULL,
  `e_endsub` datetime NOT NULL,
  `e_poster` varchar(255) NOT NULL,
  `e_price` varchar(255) NOT NULL,
  `e_paymentlink` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`e_id`, `e_name`, `e_startreg`, `e_endreg`, `e_startsub`, `e_endsub`, `e_poster`, `e_price`, `e_paymentlink`) VALUES
(14, 'Celebrate this Independence day with LPV Weltweit academy', '2021-08-03 11:51:00', '2021-08-15 11:51:00', '2021-08-02 11:51:00', '2021-08-17 23:59:00', 'IMG-20210803-WA0011.jpg', '50', 'https://rzp.io/l/9amJrFbidi'),
(15, 'Rakhi Competition', '2021-08-18 13:02:00', '2021-08-22 23:59:00', '2021-08-18 13:02:00', '2021-08-22 23:59:00', 'aa.jpg', '50', 'https://pages.razorpay.com/pl_HmZvlVcw6k5XRn/view'),
(16, 'Celebrate this Janmastami With LPV Academy and show your kid love towards Radha Krishna', '2021-08-29 14:30:00', '2021-08-31 12:00:00', '2021-08-29 14:30:00', '2021-08-31 12:00:00', 'WhatsApp Image 2021-08-28 at 11.52.52 AM.jpeg', '100', 'https://rzp.io/l/ZCyQdwvqBD');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_key` int(11) NOT NULL,
  `g_id` int(11) NOT NULL,
  `g_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_key`, `g_id`, `g_image`) VALUES
(3, 1, 'Independence Day Poster.jpg'),
(4, 1, 'Art Contest R.jpg'),
(5, 1, 'Kids Competition R.jpg'),
(6, 1, 'YogaDay R.jpg'),
(7, 1, 'EDay R.jpg'),
(8, 1, 'Competition independence day R.jpg'),
(9, 1, 'Winner pic R.jpg'),
(10, 1, '940X788.jpg'),
(11, 2, '4F751A12-F33F-45B7-BB2A-DFE6153ADBAE - Jyoti Piplani.jpeg'),
(12, 2, '1214A13C-FF75-47F4-ACE7-F6D938EF005F - shwetal somthankar.jpeg'),
(13, 2, '20200823_232630 (1) - Shreelatha Shetty.jpg'),
(14, 2, '15978343856960.3163969140301065 - Rudraksh G. Telang.jpg'),
(15, 2, 'ahana basak1 - Lokesh Singhal.jpeg'),
(16, 2, 'Ganesh - Malay Nayek.jpg'),
(17, 2, 'ganesha - snehal kale.jpg'),
(18, 2, 'IMG_20200712_201019 - Debasis Sarkar.jpg'),
(19, 2, 'image - sonu garg.jpg'),
(20, 2, 'IMG_20200712_201019 - Debasis Sarkar.jpg'),
(21, 2, 'IMG_20200821_161144 - Sathyakala Murugan.jpg'),
(22, 2, 'IMG_20200821_230805__01 - manjusha nair.jpg'),
(23, 2, 'IMG_20200822_144734 - Moumita Mukherjee Modak.jpg'),
(24, 2, 'IMG_20200822_195139 - Pratyushi Swetapadma.JPG'),
(25, 2, 'IMG_20200822_221442__01 - VG Arts.jpg'),
(26, 2, 'IMG_20200823_082406~2 - Rajeeva rajeeva.jpg'),
(27, 2, 'IMG_Anusha - Anand D.jpg'),
(28, 2, 'IMG-20200716-WA0010 - chutan Bhowmik.jpg'),
(29, 2, 'Tharun lpv_1 - subha sadagopan.jpg'),
(30, 2, 'vedika - Lokesh Singhal.jpg'),
(31, 3, 'IMG_5298 - Divya Katyal.mov'),
(32, 3, 'VID-20210608-WA0090 - Pinki Singh.mp4'),
(33, 3, 'VID-20210621-WA0009 - Sony Singh.mp4'),
(34, 4, 'Baibhav Datta.jpg'),
(35, 4, 'Aarav Verma-1st.jpg'),
(36, 4, 'Baibhav Dutta-1st.jpg'),
(37, 4, 'Kanishka Khanna Winner.jpg'),
(38, 2, 'Fancy Dress- Vedika.jpeg'),
(39, 2, 'Fancy Dress- Mahi Jain.jpeg'),
(40, 4, 'Vasuh Gupta- Delhi1.jpg'),
(41, 4, 'Sherry Cherissa C. Chennai1.jpg'),
(42, 4, 'Kavya Jain Rohtak1.jpg'),
(43, 4, 'Aarna Shil.jpg'),
(44, 4, 'Akshata A.jpg'),
(45, 4, 'Animesh.jpg'),
(46, 4, 'M. Arjun.jpg'),
(47, 4, 'Vedashri W.jpg'),
(48, 4, 'Mahi Jain.jpg'),
(49, 4, 'Vedika Jain.jpg'),
(50, 4, 'Akshya Padmakrishanan.jpg'),
(51, 4, '1st.png'),
(52, 4, '2nd.png'),
(53, 4, '3rd.png'),
(54, 4, '3rd-2.png'),
(55, 1, 'Janmshtami.png'),
(56, 4, 'CVC Pledge Certificate.jpg'),
(57, 2, 'jeevaganesh s.jpg'),
(58, 2, 'ritam dalal.jpg'),
(59, 3, 'aashvita gangolli.mp4'),
(60, 4, 'a.png'),
(61, 4, 'b.png'),
(62, 4, 'c.png'),
(63, 4, 'd.png'),
(64, 4, 'e.png'),
(65, 4, 'f.png'),
(66, 4, 'g.png'),
(67, 4, 'h.png'),
(68, 4, 'i.png'),
(69, 3, 'dhairya sahani.mp4'),
(70, 3, 'varnika srivastava.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `registration_and_submission`
--

CREATE TABLE `registration_and_submission` (
  `u_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_mobile` varchar(255) NOT NULL,
  `u_std` varchar(255) NOT NULL,
  `u_school` varchar(255) NOT NULL,
  `u_city` varchar(255) NOT NULL,
  `u_receiptno` varchar(255) DEFAULT 'Free Registration',
  `u_submission` varchar(500) DEFAULT 'Not Submitted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_and_submission`
--

INSERT INTO `registration_and_submission` (`u_id`, `e_id`, `u_name`, `u_email`, `u_mobile`, `u_std`, `u_school`, `u_city`, `u_receiptno`, `u_submission`) VALUES
(45, 12, 'kfhjs', 'jkasjkc@gm.com', 'm,nasks', ',mdvvnsk', ',ncksc', 'smfnfsk', '1.png', 'Not Submitted'),
(46, 13, 'sdfsdfsf', 'fsdfsfw@gma.com', 'fsdfsfs', '3', 'fsdfsffsdf', 'fsdfwfw', '203655819_311672260652036_2187422355449725699_n.jpg', 'Not Submitted'),
(47, 14, 'lokesh singhal', 'lokeshsinghal19@gmail.com', '8860498005', '10', 'chdj', 'delhi', 'IMG_20200130_1133001.jpg', 'Not Submitted'),
(48, 14, 'parikshit agarwal', 'scholarnidhi.lodha@gmail.com', '7003788381', 'scholarnidhi.lodha@gmail.com', 'Birla High School, Moira Street', 'Kolkata', 'inbound698232042756856444.jpg', 'inbound2249399238624011235.jpg'),
(49, 14, 'shreeja dalal', 'mrityunjoydalal@gmail.com', '9163352375', 'CLASS VIII', 'RAMPURHAT GIRLS HIGH SCHOOL', 'RAMPURHAT', 'LPV PAY.jpg', 'ind3.jpg'),
(50, 14, 'ritam dalal', 'mrityunjoydalal@gmail.com', '9163352375', 'KG-2', 'PRANAB SIKSHA NIKETAN,RAMPURHAT,BIRBHUM.', 'RAMPURHAT,BIRBHUM', 'LPV2.jpg', 'ind3.jpg'),
(51, 14, 'shoham mukherjee', 'sriparna.bm09@gmail.com', '8240174745', '2', 'Lodha world school lsg', 'Dombivili Thane', 'inbound863887837504212747.jpg', 'inbound4013263598432816003.mp4'),
(52, 14, 'shreetama chakraborty', 'bhattacharya_chaitali@rediffmail.com', '9987092633', '1', 'DAV PUBLIC SCHOOL', 'Navi Mumbai kamothe', 'inbound5620298308697996424.jpg', 'Shreetama Chakraborty_Indepence Day_1.jpeg'),
(53, 14, 'shoham mukherjee', 'sriparna.bm09@gmail.com', '8240174745', '2', 'Lodha world school lsg', 'Dombivili Thane', 'inbound7487839703603690301.jpg', 'inbound4013263598432816003.mp4'),
(54, 14, 'aashvita gangolli', 'harshada.nayak@gmail.com', '09820250561', '1 st ', 'R.S.B Arya Vidya Mandir ', 'Mumbai', 'Screenshot_2021-08-09-21-02-26-83.png', 'VID20210809152135.mp4'),
(55, 14, 'dhairya sahani', 'sehgalsheena87@gmail.com', '07339779777', '1st', 'Sophia girls sr sec ', 'Kota', '20210811_141048.mp4', 'VID-20210812-WA0005.mp4'),
(56, 14, 'dhairya sahani', 'sehgalsheena87@gmail.com', '07339779777', '1st', 'Sophia girls sr sec ', 'Kota', '20210811_141048.mp4', 'VID-20210812-WA0005.mp4'),
(57, 14, 'dhairya sahani', 'sehgalsheena87@gmail.com', '07339779777', '1st', 'Sophia girls sr sec ', 'Kota', '20210811_141048.mp4', 'VID-20210812-WA0005.mp4'),
(58, 14, 'm.tanisha', 'jeeviparvathi23@gmail.com', '8939322832', 'SKG B', 'Velammal new Gen Kids School', 'Chennai', 'inbound6194230224943684323.jpg', 'inbound5285356502864257545.pdf'),
(59, 14, 'dhairya sahani', 'sehgalsheena87@gmail.com', '07339779777', '1st', 'Sophia girls sr sec ', 'Kota', '20210811_141048.mp4', 'VID-20210812-WA0005.mp4'),
(60, 14, 'dipanwita sutradhar ', 'anitasaha394@gmail.com', '8837047033', '8', 'KENDRIYA VIDYALAYA ONGC AGARTALA ', 'AGARTALA ', 'inbound725062197.png', 'inbound-1326181523.mp4'),
(61, 14, 'vasuh gupta ', 'vasuhgupta58@gmail.com', '9560714358', '9', 'GD Goenka Public School , sector -22 Rohini Delhi-110085', 'Delhi ', 'BEA35CD8-8C43-4DD8-B588-A93D2EA3AADD.jpeg', '8D24FDBC-A379-4361-9734-A4DAE94E286A.jpeg'),
(62, 14, 'mehul jain', 'carahulrohit@gmail.com', '9812872703', 'LKG', 'Flying Birds Preparatory School', 'Gurugram', 'Screenshot_2021-08-15-14-01-44-558_com.android.chrome.jpg', 'VID-20210813-WA0018.mp4'),
(63, 14, 'mehul jain', 'carahulrohit@gmail.com', '9812872703', 'LKG', 'Flying Birds Preparatory School', 'Gurugram', 'Screenshot_2021-08-15-14-01-44-558_com.android.chrome.jpg', 'VID-20210813-WA0018.mp4'),
(64, 14, 'varnika srivastava', 'sonukumar8519@gmail.com', '08887689618', '1', 'City Montessori school Aliganj campus 2 Lucknow', ' Lucknow', 'IMG_20210815_143754.jpg', 'VID-20210812-WA0011.mp4'),
(65, 14, 'diganta das', 'chutan.jtowll@gmail.com', '9436767488', 'chutan.jtowll@gmail.com', 'CHUTAN Bhowmik', 'Agartala', 'inbound4267709331089536783.jpg', 'Not Submitted'),
(66, 14, 'aaradhya pradeep ramekar ', 'radhikaramekar76@gmail.com', '9923138182', '4th std', 'Abhinava English Medium School ', 'Pune', 'inbound5636073954079690251.jpg', 'inbound7013035130621728493.jpg'),
(67, 14, 'akshaya padmakrishnan', '232980@gmail.com', '9842377669', '232980@gmail.com', 'Alphonsa matriculation hr.sec.school', 'Nagercoil', 'inbound4478003960571599485.jpg', 'inbound3578279459714172472.pdf'),
(68, 14, 'jeevaganesh s', 'jeevagnaesh1512@gmail.com', '7010773669', '4', 'St. Anns Matric Hr. Sec. School', 'Chennai', 'Receipt pay_HllKMmuT9TUmn3 from LPV WELTWEIT SOLUTIONS PRIVATE LIMITED (Paid).pdf', 'inbound6934524718143515500.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_designation` varchar(255) NOT NULL,
  `t_email` varchar(255) NOT NULL,
  `t_mobile` text NOT NULL,
  `t_intro` mediumtext NOT NULL,
  `t_biography` text NOT NULL,
  `t_education` varchar(255) NOT NULL,
  `t_profile_image` varchar(255) NOT NULL,
  `t_facebook` varchar(255) NOT NULL,
  `t_twitter` varchar(255) NOT NULL,
  `t_instagram` varchar(255) NOT NULL,
  `t_linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`t_id`, `t_name`, `t_designation`, `t_email`, `t_mobile`, `t_intro`, `t_biography`, `t_education`, `t_profile_image`, `t_facebook`, `t_twitter`, `t_instagram`, `t_linkedin`) VALUES
(8, 'Lokesh Singhal', 'Director', 'info@lpvweltweit.com', '7701860205', 'Founder and Promotor', 'Lokesh Singhal, the founder of “LPV Weltweit Academy” was born in a small town Uklana Mandi in Hissar Disctrict of Haryana and have been moved to various states in India. Since the very young age Mr. Lokesh had a keen interest in various Arts and acitivities.. Over the years he has shared his passion for drawing and painting by offering varios classes to beginners. With his guidance and patience, he has been able to bring out each person’s creativity.', 'CA', 'IMG-20200606-WA0016.jpg', '#', '#', '#', '#'),
(9, 'Muskan Kumari', 'Graphic Designer', 'info@lpvweltweit.com', '2147483647', 'Graphic Designer', 'Muskan is a very dedicated and enthusiast. She has completed her Graduated in the year 2020 with B.Sc (h) Computer Science and having over an year experiance in Adobe Photoshop, CorelDraw, Canva, etc. She is very Passionate and highly focused on creating aesthetic designs that satisfies the clients. Muskan is a great asset to LPV Weltweit Group. ', 'B.Sc.(h) Computer Science ', 'ProfilePic.jpg', '#', '#', '#', '#'),
(10, 'Garima Pal', 'Human Resource and Admin', 'info@lpvweltweit.com', '2147483647', 'Human Resource and Administration ', '#', '#', 'download.png', '#', '#', '#', '#'),
(11, 'Kiran Maharana', 'Web Developer', 'kiran11621@gmail.com', '8850969261', 'I\'m an Engineering Student.', 'I\'m an Engineering Student.', 'B.E. Information Technology', 'kiran.png', '#', '#', '#', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_key`);

--
-- Indexes for table `registration_and_submission`
--
ALTER TABLE `registration_and_submission`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `registration_and_submission`
--
ALTER TABLE `registration_and_submission`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
