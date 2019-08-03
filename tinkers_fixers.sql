-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2018 at 09:49 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tinkers_fixers`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `user_id` int(5) NOT NULL,
  `q_id` int(5) NOT NULL,
  `a_id` int(5) UNSIGNED NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `Score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`user_id`, `q_id`, `a_id`, `answer`, `Score`) VALUES
(3, 5, 1, 'Troubleshoot this by typing with an external USB keyboard to see if the problem goes away. If it still happens, then try reloading Windows.', 0),
(9, 7, 2, 'The most common cause for this behavior is a fragmented HD in WinDUHows, a full HD, or, eminent HD failure (depending on the age and care of the HD).', 0),
(7, 10, 3, 'Before committing to the expense of a new screen, I would disassemble the stepped-upon part (presumably the screen) to inspect for damage. You might learn something useful. Maybe it is just the cable. Maybe some additional parts are also damaged and need to be replaced.', 2),
(2, 3, 4, 'You must Shut down your laptop when not in use.<br>\r\nMake sure airflow is not impeded and\r\nfinally  Avoid playing advanced 3D games for hours :)', 5),
(1, 3, 5, 'First of all Avoid hostile working environments for your laptop.<br>\r\nand Keep you laptop well serviced and free of dust and lint buildup\r\nand finally Try some auxiliary cooling or check with coretemp application', 0),
(9, 8, 6, 'Click the Windows logo in the bottom-left corner of the screen.', 0),
(0, 26, 7, 'Depending on your ISP they may have to activate the modem before you can get Internet access from it. Call them and tell them the MAC address of your modem.', 0),
(2, 30, 8, 'Study and follow this video tutorial - https://youtu.be/CY45-N0dUYw - Then follow the instructions in reverse. This can help you with your problem... :)', 0),
(3, 9, 9, 'After several years many batteries slowly lose their ability to hold a charge. Most likely it is easy to fix this simply by buying a new battery and replacing the old one.', 0),
(8, 11, 10, 'Here is a link to the hardware manual for your laptop.Download and then scroll to p.55. There is the information regarding the base enclosure screw sizes.http://h10032.www1.hp.com/ctg/Manual/c03...', 0),
(7, 15, 11, 'faith peter,could be the hinges. Yes it should/could be fixable. Sometimes you can accomplish that by replacing the hinges, other times the top half must be replaced. It depends on exactly what is broken. Post a couple images of where and what is broken so we can see what you see. Use this guide to add images.', 0),
(7, 8, 12, 'Click the Windows logo in the bottom-left corner of the screen.\r\n\r\namal', 5),
(7, 3, 13, 'You must Shut down your laptop when not in use.\r\nMake sure airflow is not impeded and finally Avoid playing advanced 3D games for hours :)', 55),
(7, 6, 14, 'hi\r\n', 0),
(7, 11, 15, 'hi\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `contact_message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `phone`, `contact_message`) VALUES
('basma', 'aabr1992@hotmail.com', ' +96650145789', 'Nice and helpful location'),
('DCC', 'SSD@C.C', ' +96655555555', 'XC');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `deviceId` int(10) UNSIGNED NOT NULL,
  `deviceCompany` varchar(50) NOT NULL,
  `deviceName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`deviceId`, `deviceCompany`, `deviceName`) VALUES
(1, 'Toshiba', 'Tecra'),
(2, 'Toshiba', 'Satellite'),
(4, 'Toshiba', 'Portege'),
(5, 'Toshiba', 'other'),
(7, 'Dell', 'Studio'),
(8, 'Dell', 'Vostro'),
(9, 'Dell', 'Inspiron'),
(10, 'Dell', 'other'),
(11, 'Hp', 'Zbook'),
(12, 'Hp', 'TouchSmart'),
(13, 'Hp', 'Split 2x'),
(14, 'Hp', 'other'),
(15, 'Mac', 'Book'),
(16, 'Mac', 'Book Air'),
(17, 'Mac', 'Book Pro'),
(35, 'Mac', 'other'),
(37, 'other', 'other');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pasw` varchar(20) NOT NULL,
  `phone` int(13) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`user_id`, `user_name`, `email`, `pasw`, `phone`, `photo`) VALUES
(1, 'FAYZA', 'fayza12@hotmail.com', '2587', 567484705, 'imag/login.png'),
(2, 'Basma', 'basma1992@hotmail.com', '2147483647', 56982475, 'imag/login.png'),
(3, 'Youssef', 'youssef5@gmail.com', '159', 57481926, 'imag/login.png'),
(4, 'Amina', 'amina4@gmail.com', '1234567', 504781698, 'imag/login.png'),
(5, 'Waleed', 'waleed99@outlook.com', '951753', 52849763, 'imag/login.png'),
(6, 'Wala\'a', 'wala\'a58@gmail.com', '2684', 50694587, 'imag/login.png'),
(7, 'Reem', 'aab1992@hotmail.com', '1254', 0, 'imag/login.png'),
(8, 'Amjjad', 'amjjad11@hotmail.com', '159753', 503691257, 'imag/login.png'),
(9, 'amal', 'basmali@gmail.com', '2181894805', 0, 'imag/login.png');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `user_id` int(5) NOT NULL,
  `q_id` int(5) UNSIGNED NOT NULL,
  `device` int(5) NOT NULL,
  `q_title` varchar(100) NOT NULL,
  `q_description` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`user_id`, `q_id`, `device`, `q_title`, `q_description`, `image`) VALUES
(9, 1, 14, 'I have got a troubleshoot problem in Windows 10!! ', ' I will try to fix this problem but i dont know the steps how to do it Please help me! ', 'img_upload/Troubleshoot.jpg'),
(9, 2, 9, 'How to prevent laptop overheating?', ' Recently my computer has been overheating to the point were I have a to stop working on it because ', 'img_upload/back.jpg'),
(4, 3, 1, 'keyboard cursor moves jumps back while I am typing', 'my cursor always jumps back when i am typing or jumps a line above or below', 'img_upload/back.jpg'),
(7, 5, 15, 'How to backup my data?', ' I am searching for a backup application that can automatically get backup every second whenever is there is a changes in the file or folder in Windows 10 on the background, and the application has to work over internal network with network drives.\r\n\r\nplease suggest me something,\r\n\r\nThanks in advance.', 'img_upload/back.jpg'),
(2, 6, 7, 'Why does my battery only last 30 minutes?', 'I\'ve had this laptop for a few years now and it seems every time I use it off the charger the battery lasts less and less. What should I do?', 'img_upload/Hot-air-exhaust.jpg'),
(2, 7, 2, 'How to fix the screen?', 'My laptop was steeped on and now has a small crack on the mid-right side. The whole screen is white and black. Is there anyway i could fix this? It is a Toshiba Tecra.', 'img_upload/back.jpg'),
(3, 8, 12, 'What size screws are used for the Laptop?', 'What screw size is used by this Laptops body and or case?', 'imag/back.jpg'),
(8, 9, 13, 'I dropped my laptop.', 'I dropped my laptop and the top half is a bit loose. Is there anyway I can fix it, or have it fixed?', 'img_upload/imge10.JPG'),
(7, 10, 17, 'Mac  My laptop won\'t connect to wireless !!', 'For some reason my laptop won\'t connect to my wireless connection.   Any help!', 'img_upload/213645-L-LO.jpg'),
(4, 11, 9, 'How to instil my hinge cover', 'I was holding my laptop a certain way and one side of the hinge cover got tilted inward', 'img_upload/imge11.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`deviceId`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `a_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `deviceId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
