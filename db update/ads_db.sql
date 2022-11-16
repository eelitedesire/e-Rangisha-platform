-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 07:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ads_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `doc_lost`
--

CREATE TABLE `doc_lost` (
  `id` int(11) NOT NULL,
  `fullname1` text NOT NULL,
  `UserEmail` text NOT NULL,
  `phone` int(11) NOT NULL,
  `categories` text NOT NULL,
  `doc_number` text NOT NULL,
  `country` text NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc_lost`
--

INSERT INTO `doc_lost` (`id`, `fullname1`, `UserEmail`, `phone`, `categories`, `doc_number`, `country`, `dob`) VALUES
(1, 'Mukiza Jmv', 'gigsrick@gmail.com', 27987912, 'indangamuntu', '36921726100', 'rwanda', '2022-09-12'),
(2, 'muhimpundu', 'muhimpundu@gmail.com', 78999976, 'pasiporo', '32145', 'rwanda', '2022-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` varchar(255) NOT NULL,
  `about` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `about`) VALUES
('01', '                                                                        <p>This refer to every person who tracing</p><p> the document to found it back!!! </p><p>You\'re Welcome</p><p><br></p>\r\n                    \r\n                    \r\n                    ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `user_id` varchar(255) NOT NULL DEFAULT 'A237893',
  `username` varchar(255) NOT NULL DEFAULT 'admin',
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'admin',
  `avatar` varchar(255) DEFAULT NULL,
  `reg_date` varchar(255) NOT NULL,
  `verified` varchar(255) NOT NULL DEFAULT 'YES'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`user_id`, `username`, `email`, `login`, `role`, `avatar`, `reg_date`, `verified`) VALUES
('A237893', 'admin', 'admin@rangisha.com', '$2y$10$mqVKgjd1uR5lc7ZM5vQYLu8ZOqHpzhczYz/Eyflmnb3W4DCuxLHZ.', 'admin', NULL, '04/11/2018 - 03:10:57', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ads`
--

CREATE TABLE `tbl_ads` (
  `enc_id` int(255) NOT NULL,
  `ad_id` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `ad_condition` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `fixed` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `date_posted` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'inactive',
  `featured` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ads`
--

INSERT INTO `tbl_ads` (`enc_id`, `ad_id`, `author`, `title`, `category`, `city`, `ad_condition`, `price`, `fixed`, `brand`, `short_desc`, `description`, `date_posted`, `status`, `featured`) VALUES
(11, 'AD05322100', 'M844579', 'Ibyangombwa Byatakaye', 'Amadosiye yimanza', 'Burera', 'New', '0785999950', 'NO', 'Shndfope', 'Sndlflwjfpweojfp', '<p>FLHWOEUF\'QWP</p><p>wf;iuwe</p>', 'Sep 01, 2022', 'active', 'yes'),
(14, 'AD34043579', 'M844579', 'Driving License Yatakaye Kigali', 'Perimi', 'Kigali', 'New', '0785999950', 'NO', 'Congo', 'Icyi cyangwombwa', '<p><br></p><p><b>icyi cyangobwa twaragitoraguye ugishaka watwandikira cyangwa ukaduhamagara tukakiguha</b></p><p><b>murakoze cyane&nbsp;</b></p><p><b><br></b></p><p><b><br></b></p><table class=\"table table-bordered\"><tbody><tr><td>Business Call number</td><td>Location</td><td>plot</td></tr><tr><td>0785999950</td><td>Nyarugenge</td><td><br></td></tr><tr><td><p>0786735372</p><p><br></p></td><td>Kimisagara</td><td><br></td></tr><tr><td>0786238987</td><td>Kacyiru</td><td><br></td></tr></tbody></table><p><b><br></b></p>', 'Sep 05, 2022', 'active', 'yes'),
(15, 'AD91648904', 'M844579', 'Ikarita Ya Banki Yatakeye Kirehe', 'Ikarita ya Banki', 'Kirehe', 'New', '0785999950', 'NO', 'Visa Card', 'We found This Ca', '<p>what app me 0785999950</p>', 'Sep 05, 2022', 'active', 'no'),
(16, 'AD67755192', 'M844579', 'Passport Iri Kumwe Na Visa Byatakaye Muhanga', 'Visa', 'Muhanga', 'New', '0785999950', 'NO', 'Visa & Passport', 'We found it  now', '<p>you can call us 0785999950</p>', 'Sep 05, 2022', 'active', 'yes'),
(18, 'AD78414910', 'M844579', 'Ahoharanyerera Jean Marie Vianey', 'Icyangobwa cyubutaka', 'Gatsibo', 'Used', '250785999950', 'NO', '', 'Ashpidhwpe', '<p>bkjhjpI</p><p>ASOID</p>', 'Sep 21, 2022', 'inactive', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alerts`
--

CREATE TABLE `tbl_alerts` (
  `id` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alerts`
--

INSERT INTO `tbl_alerts` (`id`, `code`, `description`, `type`) VALUES
(1, '001', 'You have been registered successfully', 'success'),
(2, '002', 'Invalid email address or password', 'danger'),
(3, '003', 'Sorry, only JPG, JPEG, & PNG files are allowed.', 'warning'),
(4, '004', 'Sorry, your file is too large. avatar upload should be less than <strong>800KB</strong>', 'warning'),
(5, '005', 'Profile has been updated', 'success'),
(6, '006', 'Password has been updated', 'success'),
(7, '007', 'Image uploaded successfully', 'success'),
(8, '008', 'Ad has been updated successfully', 'success'),
(9, '009', 'Ad has been deleted successfully', 'success'),
(10, '010', 'Your image must have a width of <strong>750</strong> and a height of <strong>450</strong> ', 'warning'),
(11, '011', 'Your message has been sent', 'success'),
(12, '012', 'An error occurred while sending your message', 'warning'),
(13, '013', 'Account was not found', 'warning'),
(14, '014', 'Please check your email for more instructions', 'info'),
(15, '015', 'Unknown error occured', 'warning'),
(16, '016', 'Settings applied successfully', 'info'),
(17, '017', 'FAQ was added successfully', 'success'),
(18, '018', 'Email is already registered', 'warning'),
(19, '019', 'Email or username is already registered', 'warning'),
(20, '020', 'Username is already registered', 'warning');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `category`) VALUES
(9, 'Amadosiye yimanza'),
(8, 'Ibyangobwa byo kwirembo'),
(2, 'Icyangobwa cyubutaka'),
(3, 'Ikarita ya Banki'),
(4, 'Ikarita Yakazi'),
(5, 'Ikariya yishuri'),
(1, 'Indangamuntu'),
(11, 'Inyemezabwishyu'),
(13, 'Nibindi byinshi'),
(12, 'Others'),
(6, 'Pasoporo'),
(7, 'Perimi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cities`
--

CREATE TABLE `tbl_cities` (
  `id` int(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cities`
--

INSERT INTO `tbl_cities` (`id`, `city`) VALUES
(2, 'Bugesera'),
(12, 'Burera'),
(13, 'Gakenke'),
(9, 'Gasabo'),
(3, 'Gatsibo'),
(14, 'Gicumbi'),
(17, 'Huye '),
(18, 'Kamonyi'),
(24, 'Karongi'),
(4, 'Kayonza'),
(10, 'Kicukiro'),
(1, 'Kigali'),
(5, 'Kirehe'),
(19, 'Muhanga'),
(16, 'Musanze'),
(6, 'Ngoma'),
(25, 'Ngororero'),
(26, 'Nyabihu'),
(7, 'Nyagatare'),
(20, 'Nyamagabe'),
(27, 'Nyamasheke'),
(22, 'Nyanza'),
(11, 'Nyarugenge'),
(31, 'Others'),
(28, 'Rubavu'),
(23, 'Ruhango'),
(15, 'Rulindo'),
(29, 'Rusizi'),
(30, 'Rutsiro'),
(8, 'Rwamagana'),
(21, 'Rwamagana');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faqs`
--

CREATE TABLE `tbl_faqs` (
  `id` int(255) NOT NULL,
  `quest` varchar(255) NOT NULL,
  `answ` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faqs`
--

INSERT INTO `tbl_faqs` (`id`, `quest`, `answ`) VALUES
(1, 'How I Can Create An Account', '<p>Click Start</p><p>Click Register</p><p>Fill the form</p><p>Register now</p>'),
(2, 'How Admin Approval  The Post', '                                            <p><br></p>                                        '),
(3, 'Qwerty', 'aDNLIJWDL'),
(5, 'HOW CAN I HELP YOU?', '\r\n                    ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_tokens`
--

CREATE TABLE `tbl_reset_tokens` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `expires` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reset_tokens`
--

INSERT INTO `tbl_reset_tokens` (`id`, `email`, `token`, `role`, `expires`) VALUES
(3, 'gigsrick@gmail.com', '5585437780b670edb1eae617a3ad2f61', 'user', '2022-09-01 21:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `verified` varchar(255) NOT NULL DEFAULT 'NO',
  `reg_date` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `email`, `phone_number`, `login`, `role`, `verified`, `reg_date`, `avatar`) VALUES
('M035825', 'mugiza', 'mugizagmv@gmail.com', 0, '$2y$10$q0k5j.yx.uCH.Kk00TercOLplTTcoIvz/MusbRjxuyZ2iTwghS2bi', 'user', 'NO', '29/07/2022 - 07:58:57', NULL),
('M190111', 'furaha', 'furaha@gmail.com', 0, '$2y$10$V/JnRT4RL7muXOvr.7zHg.3EjG1EiL/iaeEyabF7YV3.1bvSIi5eu', 'user', 'NO', '30/08/2022 - 08:39:58', NULL),
('M263823', 'gigsrick', 'gigsrick1@gmail.com', 0, '$2y$10$/R.XePoRi2nKh9dXRORRD.jTNAnWcrxycejm45LTcKKqpr0mXFb02', 'user', 'NO', '25/05/2022 - 12:59:39', 'M26382325052022010136.png'),
('M401360', 'ineza', 'ineza@gmail.com', 0, '$2y$10$UIx908wldG1H3nFm8LBB4.Cb2vaVQ5nWySqQTDEPSsjZd0r9crfhK', 'user', 'NO', '30/08/2022 - 08:22:07', NULL),
('M502239', 'kozera', 'kozera@gmail.com', 0, '$2y$10$4i6BanSnufGxEzMUc4o/cevRO5/XNR2LceyGfmBLIeA4DQyf6LkM6', 'user', 'NO', '11/03/2022 - 01:50:08', NULL),
('M547197', 'emelyse', 'emelyse@gmail.com', 0, '$2y$10$pbbXZdhbcKWXbRku9SR6K.059VDe6TMp7KCLO7dvmsuqqpCprA6ye', 'user', 'NO', '31/07/2022 - 05:13:12', 'M54719731072022052609.png'),
('M550199', 'ref', 'ref@gmail.com', 0, '$2y$10$k1tEK1n3Djr/FDo99i06Aei9u4IBvUOfTvXpd7sOLQD9t6HZf/Lie', 'user', 'NO', '04/09/2022 - 06:27:40', NULL),
('M557809', 'muhimpundu', 'muhimpundu@gmail.com', 0, '$2y$10$XFso9FYCM00JPcd0Qhghau4odKQG2gcT.APWgv2Gh624fD8XvJyhC', 'user', 'NO', '31/07/2022 - 05:31:32', 'M55780931072022053247.png'),
('M563752', 'rytu', 'gig@gmail.com', 0, '$2y$10$fcFEslZQpYzZLIpxcVzD9ONroFmfrijOgzUzRGdy0GtdjWWCBPuvq', 'user', 'NO', '17/08/2022 - 11:48:11', NULL),
('M635230', 'uiojoi', 'gigis@gmail.com', 0, '$2y$10$LZfqPKkt1uigFvhcpiDy6eT/XRaAV7T0AjknWb9LB425NPhHspRM.', 'user', 'NO', '03/08/2022 - 06:58:29', NULL),
('M756126', 'eric', 'eric@gmail.com', 0, '$2y$10$zyOE2FhYan//4NaDLvGa0eNBL.xN5UZdQ82R.tPq7Cb4UoyjXRLDu', 'user', 'NO', '30/08/2022 - 09:06:14', NULL),
('M840168', 'JMV', 'JMV@gmail.com', 0, '$2y$10$DQ2B7Geox0meNpy6uvxbVOe4bQp6nrHpmYfsXKD3xmIpMAdD.ljEa', 'user', 'NO', '30/08/2022 - 08:37:13', NULL),
('M844579', 'gigsrick1', 'gigsrick@gmail.com', 0, '$2y$10$E9YaY/U0JzfowKmzvkpEueVQnGu09gnzRxww6.LlscIybCzHzCmsy', 'user', 'NO', '31/08/2022 - 01:57:26', 'M84457905092022104420.png'),
('M967949', 'regi', 'reg@gmail.com', 0, '$2y$10$RRsf/nNPI/mn4CMjex4NmO5ndNSw4ud.lMITTZQ7Km4Nio2DYhL.G', 'user', 'NO', '04/09/2022 - 06:21:39', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doc_lost`
--
ALTER TABLE `doc_lost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about` (`about`(3072));

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_ads`
--
ALTER TABLE `tbl_ads`
  ADD PRIMARY KEY (`enc_id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- Indexes for table `tbl_alerts`
--
ALTER TABLE `tbl_alerts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category` (`category`);

--
-- Indexes for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city` (`city`);

--
-- Indexes for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quest` (`quest`);

--
-- Indexes for table `tbl_reset_tokens`
--
ALTER TABLE `tbl_reset_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doc_lost`
--
ALTER TABLE `doc_lost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_ads`
--
ALTER TABLE `tbl_ads`
  MODIFY `enc_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_alerts`
--
ALTER TABLE `tbl_alerts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_reset_tokens`
--
ALTER TABLE `tbl_reset_tokens`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_ads`
--
ALTER TABLE `tbl_ads`
  ADD CONSTRAINT `tbl_ads_ibfk_1` FOREIGN KEY (`enc_id`) REFERENCES `tbl_alerts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  ADD CONSTRAINT `tbl_faqs_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbl_alerts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
