-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 25, 2020 at 04:05 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studymalaysia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Admin_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Name` longtext NOT NULL,
  `Gender` longtext NOT NULL,
  `Email` longtext NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Address` longtext NOT NULL,
  `Contact_Number` longtext NOT NULL,
  `Country` longtext NOT NULL,
  `Username` longtext CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `Password` longtext NOT NULL,
  PRIMARY KEY (`Admin_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Name`, `Gender`, `Email`, `Date_of_Birth`, `Address`, `Contact_Number`, `Country`, `Username`, `Password`) VALUES
(1, 'Ryan Lim Fang Yung', 'male', 'tp055343@mail.apu.edu.my', '2020-09-04', '      8, Jalan Bukit Indah 3/21, Taman Bukit Indah, 68000 Ampang', '014-6321806', 'Malaysia', 'Lim', '$2y$10$EXlyyvL1w.lByITX.vFckuAnYBmc5sfmk/Q4bmZN3wSyoLS8IVmtK'),
(2, 'John', 'male', 'ryanrlfy33@gmail.com', '2020-10-02', ' 8, Jalan Bukit Indah 3/21, Taman Bukit Indah, 68000 Ampang', '014-6321806', 'Malaysia', 'John', '$2y$10$0R8e/L32JlgUN9QR7cf2l.S5zxyGuRRl/5kBrBdWkkw6YJtLvdJ4y'),
(3, 'test', 'male', 'test@mail.com', '2020-10-02', 'test', '011-1111111', 'Antigua & Barbuda', 'test', '$2y$10$BBOzMH1Qz9eSt5YSA8fUZ.xqth8qWlf2/5yPOe8PP/p33FrHhZQf2');

-- --------------------------------------------------------

--
-- Table structure for table `apu_review`
--

DROP TABLE IF EXISTS `apu_review`;
CREATE TABLE IF NOT EXISTS `apu_review` (
  `Uni_Feedback_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Student_ID` int(255) NOT NULL,
  `Review` longtext NOT NULL,
  `Ratings` int(255) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Uni_Feedback_ID`),
  KEY `apu_review_ibfk_1` (`Student_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apu_review`
--

INSERT INTO `apu_review` (`Uni_Feedback_ID`, `Student_ID`, `Review`, `Ratings`, `Date`) VALUES
(8, 11, 'meh', 0, '2020-09-18'),
(10, 11, 'rID8', 8, '2020-09-18'),
(11, 11, 'max 10', 14, '2020-09-18'),
(12, 11, 'max 10', 14, '2020-09-18'),
(13, 11, 'max 10', 14, '2020-09-18'),
(18, 11, 'meh meh dei', 3, '2020-09-19'),
(19, 11, 'lol', 4, '2020-10-03'),
(20, 11, 'trash', 1, '2020-10-03'),
(21, 11, 'nice nice', 4, '2020-10-03'),
(22, 11, 'nice nice', 4, '2020-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `Chat_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Message` longtext NOT NULL,
  `Username` longtext NOT NULL,
  PRIMARY KEY (`Chat_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`Chat_ID`, `Message`, `Username`) VALUES
(1, 'yolo', '002'),
(2, 'Hi', ''),
(3, 'Hi', 'Cena'),
(4, '', 'Cena'),
(5, 'lol', 'Cena'),
(6, 'lol', ''),
(7, 'yeay', 'Cena'),
(8, 'yolo', 'Cena'),
(9, 'Hi', 'Cena'),
(10, 'admin here', 'Lim'),
(11, 'yeay', 'Lim'),
(12, 'lol', 'prem002'),
(13, 'hello', 'prem002'),
(14, 'lol', 'prem002'),
(15, 'test reload 1', 'prem002'),
(16, 'test reload 2', 'prem002'),
(17, 'hello', 'Joe'),
(18, 'test test ', 'John'),
(19, 'testing 2', 'John'),
(20, 'testing 3', 'John');

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

DROP TABLE IF EXISTS `pwdreset`;
CREATE TABLE IF NOT EXISTS `pwdreset` (
  `password_id` int(255) NOT NULL AUTO_INCREMENT,
  `password_reset_email` longtext NOT NULL,
  `password_reset_selector` longtext NOT NULL,
  `password_reset_token` longtext NOT NULL,
  `password_reset_expires` longtext NOT NULL,
  PRIMARY KEY (`password_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `Student_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `Date_of_Birth` date DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Contact_Number` varchar(20) DEFAULT NULL,
  `Country` varchar(20) DEFAULT NULL,
  `Username` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs DEFAULT NULL,
  `Password` longtext,
  PRIMARY KEY (`Student_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_ID`, `Name`, `Gender`, `Email`, `Date_of_Birth`, `Address`, `Contact_Number`, `Country`, `Username`, `Password`) VALUES
(10, 'Ryan Lim Fang Yung', 'male', 'ryanrlfy33@gmail.com', NULL, '8, Jalan Bukit Indah 3/21, Taman Bukit Indah, 68000 Ampang', '0146321806', 'Malaysia', '117', '$2y$10$O0eblv90OZpOAGE8MNNwDuwOB.v7yRN4CGS.mHuKJzwuzWGdS8dFK'),
(11, 'Prem', 'male', 'prem@gmail.com', '2020-05-07', '                            7, Jalan Bukit Indah 3/21, Taman Bukit Indah, 68000 Ampang', '010-1203948', 'Malaysia', 'prem002', '$2y$10$Rily0xmci/oIw9LGLcf96u5Nd1Ncrti8891JbKe2Gup02BXq5e.kG'),
(12, 'John', 'male', 'john@cena.com', '2020-05-23', '  8, Jalan Bukit Indah 3/21, Taman Bukit Indah, 68000 Ampang', '011-1111111', 'Malaysia', 'Cena', '$2y$10$rdzuXALyHz3sAPMoAm/zh.jAUMx.GOYrWQG9CQrvNtZz.fWRIweOy'),
(15, 'Jolin', 'female', 'jolin@mail.com', '2020-09-01', 'KL', '117', 'Barbados', '130', '$2y$10$imNEuqaiRrfuaAgbEo9Ca.RRT28VV6wZILM9FCVnTIYlq0xqF2Kk6'),
(16, 'Ryan Lim Fang Yung', 'male', 'ryanrlfy33@gmail.com', '2020-09-04', '   8, Jalan Bukit Indah 3/21, Taman Bukit Indah, 68000 Ampang', '0-146321806', 'Malaysia', 'Ryan', '$2y$10$VmuEr.tSJAP1fYukR.DET.Qp4fOJ/EEHM9szS.RIq23XfqWiiGYO2'),
(17, 'Zoro', 'male', 'zoro@1piece.com', '2020-10-01', 'Stone Ocean', '02-2010203', 'American Samoa', 'zoro', '$2y$10$U6IvG19Lc/63UPlj73YZuuvazqW3XiFj.wNEoWSLG27MVJ8ZBlJKi'),
(18, 'Joe', 'male', 'tp055343@mail.apu.edu.my', '2020-10-01', ' 8, Jalan Bukit Indah 3/21, Taman Bukit Indah, 68000 Ampang', '014-6321806', 'Malaysia', 'Joe', '$2y$10$ldABnaey.3CrmLOGDFmjYeucFAOIahKA77VvOHkpy/KRbpdZp3N06'),
(19, 'test', 'male', 'test@mail.com', '2020-10-02', 'test', '011-1111111', 'Albania', 'test', '$2y$10$Qtdw7ok3XOUk.KPjAh7l/OoXTSkPgp.UfPH.T760ddM6O3YCQY0oS');

-- --------------------------------------------------------

--
-- Table structure for table `student_feedback_enquiry`
--

DROP TABLE IF EXISTS `student_feedback_enquiry`;
CREATE TABLE IF NOT EXISTS `student_feedback_enquiry` (
  `Application_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` longtext NOT NULL,
  `Email` longtext NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Contact_Number` longtext NOT NULL,
  `Interested_Course` longtext NOT NULL,
  `School` longtext NOT NULL,
  `Country` longtext NOT NULL,
  `Address` longtext NOT NULL,
  `Nationality` longtext NOT NULL,
  `Comment` longtext NOT NULL,
  `Comment_Type` longtext NOT NULL,
  PRIMARY KEY (`Application_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_feedback_enquiry`
--

INSERT INTO `student_feedback_enquiry` (`Application_ID`, `Name`, `Email`, `Date_of_Birth`, `Contact_Number`, `Interested_Course`, `School`, `Country`, `Address`, `Nationality`, `Comment`, `Comment_Type`) VALUES
(1, 'Ryan Lim Fang Yung', 'ryanrlfy33@gmail.com', '2020-09-04', '0146321806', 'IT', 'CHKL', 'Malaysia', '8, Jalan Bukit Indah 3/21, Taman Bukit Indah, 68000 Ampang', 'Chinese', 'Love IT and hacking', 'Feedback'),
(2, 'Ryan Lim Fang Yung', 'ryanrlfy33@gmail.com', '2020-09-04', '0146321806', 'IT', 'CHKL', 'Malaysia', '8, Jalan Bukit Indah 3/21, Taman Bukit Indah, 68000 Ampang', 'Chinese', 'Do I love IT?', 'Enquiry'),
(3, 'John Cena', 'john@117.com', '2019-09-05', '019-1029384', 'Enginerring', 'APU', 'Japan', 'Jalan Rambutan', 'Chinese', 'I would give this website a 10/10. Sugoi', 'Feedback'),
(4, 'John Cena', 'john@117.com', '2019-09-05', '019-1029384', 'Enginerring', 'APU', 'Japan', 'Jalan Rambutan', 'Chinese', 'I would give this website a 10/10. Sugoi', 'Feedback'),
(8, 'John Cena', 'john@117.com', '2019-09-05', '019-1029384', 'Enginerring', 'APU', 'Japan', 'Jalan Rambutan', 'Chinese', 'I would give this website a 10/10. Sugoi', 'Feedback'),
(9, 'JoJo', 'ryanrlfy33@gmail.com', '2020-10-09', '0146321806', 'Sports', 'APU', 'Malaysia', '8, Jalan Bukit Indah 3/21, Taman Bukit Indah, 68000 Ampang', 'American', 'Can I learn sports at Malaysia?', 'Enquiry'),
(10, 'Prem', 'prem@gmail.com', '2020-10-03', '012-2039475', 'Information Technology', 'SMK Ampaag', 'Malaysia', '8, Jalan Bukit Indah 3/21, Taman Bukit Indah, 68000 Ampang', 'Indian', 'I love this website. 5/5 !!', 'Feedback'),
(11, 'Ryan Lim Fang Yung', 'ryanrlfy33@gmail.com', '2020-10-02', '014-6321806', 'IT', 'CHKL', 'Malaysia', '8, Jalan Bukit Indah 3/21, Taman Bukit Indah, 68000 Ampang', 'Chinese', 'itz fun', 'Feedback'),
(12, 'Sia', 'ryanrlfy33@gmail.com', '2020-10-01', '014-6321806', 'IT', 'SMK Ampaag', 'Malaysia', '8, Jalan Bukit Indah 3/21, Taman Bukit Indah, 68000 Ampang', 'Malay', 'I love this website', 'Feedback'),
(13, 'Sia', 'ryanrlfy33@gmail.com', '2020-07-02', '014-6321806', 'IT', 'SMK Ampaag', 'Malaysia', '8, Jalan Bukit Indah 3/21, Taman Bukit Indah, 68000 Ampang', 'Malay', 'Do u know how much i need to get for exam?', 'Enquiry'),
(14, 'Ryan Lim Fang Yung', 'ryanrlfy33@gmail.com', '2020-10-02', '014-6321806', 'IT', 'CHKL', 'Malaysia', '8, Jalan Bukit Indah 3/21, Taman Bukit Indah, 68000 Ampang', 'Chinese', 'Can I learn hacking at APU?', 'Enquiry');

-- --------------------------------------------------------

--
-- Table structure for table `student_mailbox`
--

DROP TABLE IF EXISTS `student_mailbox`;
CREATE TABLE IF NOT EXISTS `student_mailbox` (
  `Mail_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Student_ID` int(255) NOT NULL,
  `Date` date NOT NULL,
  `Details` longtext NOT NULL,
  `Content` longtext NOT NULL,
  `Sender` longtext NOT NULL,
  `Admin_ID` int(255) NOT NULL,
  PRIMARY KEY (`Mail_ID`),
  KEY `Student_ID` (`Student_ID`),
  KEY `student_mailbox_ibfk_2` (`Admin_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_mailbox`
--

INSERT INTO `student_mailbox` (`Mail_ID`, `Student_ID`, `Date`, `Details`, `Content`, `Sender`, `Admin_ID`) VALUES
(1, 10, '2020-09-03', 'admin test', 'Broadcast test', 'Ryan', 1),
(2, 11, '2020-09-03', 'admin test', 'Broadcast test', 'Ryan', 1),
(3, 12, '2020-09-03', 'admin test', 'Broadcast test', 'Ryan', 1),
(4, 15, '2020-09-03', 'admin test', 'Broadcast test', 'Ryan', 1),
(5, 16, '2020-09-03', 'admin test', 'Broadcast test', 'Ryan', 1),
(6, 10, '2020-09-01', 'Directed test', 'Test Test', 'Ryan', 1),
(7, 12, '2020-09-03', 'Testing', 'Here is ur file', 'Ryan', 1),
(8, 10, '2020-09-02', 'testing again', '--', 'Ryan', 1),
(9, 11, '2020-09-02', 'testing again', '--', 'Ryan', 1),
(10, 12, '2020-09-02', 'testing again', '--', 'Ryan', 1),
(11, 15, '2020-09-02', 'testing again', '--', 'Ryan', 1),
(12, 16, '2020-09-02', 'testing again', '--', 'Ryan', 1),
(13, 10, '2020-09-02', 'testing again', '--', 'Ryan', 1),
(14, 11, '2020-09-02', 'testing again', '--', 'Ryan', 1),
(15, 12, '2020-09-02', 'testing again', '--', 'Ryan', 1),
(16, 15, '2020-09-02', 'testing again', '--', 'Ryan', 1),
(17, 16, '2020-09-02', 'testing again', '--', 'Ryan', 1),
(18, 10, '2020-09-02', 'testing again 2', '--', 'Ryan', 1),
(19, 11, '2020-09-02', 'testing again 2', '--', 'Ryan', 1),
(20, 12, '2020-09-02', 'testing again 2', '--', 'Ryan', 1),
(21, 15, '2020-09-02', 'testing again 2', '--', 'Ryan', 1),
(22, 16, '2020-09-02', 'testing again 2', '--', 'Ryan', 1),
(29, 11, '2020-10-01', 'Online Application', 'Congrats u have been accepted by APU', 'John', 2),
(30, 10, '2020-10-01', 'To all subjects', 'Just testing ', 'Ryan', 1),
(31, 11, '2020-10-01', 'To all subjects', 'Just testing ', 'Ryan', 1),
(32, 12, '2020-10-01', 'To all subjects', 'Just testing ', 'Ryan', 1),
(33, 15, '2020-10-01', 'To all subjects', 'Just testing ', 'Ryan', 1),
(34, 16, '2020-10-01', 'To all subjects', 'Just testing ', 'Ryan', 1),
(35, 17, '2020-10-01', 'To all subjects', 'Just testing ', 'Ryan', 1),
(36, 10, '2020-10-01', 'To all subjects', 'Just testing ', 'Ryan', 1),
(37, 11, '2020-10-01', 'To all subjects', 'Just testing ', 'Ryan', 1),
(38, 12, '2020-10-01', 'To all subjects', 'Just testing ', 'Ryan', 1),
(39, 15, '2020-10-01', 'To all subjects', 'Just testing ', 'Ryan', 1),
(40, 16, '2020-10-01', 'To all subjects', 'Just testing ', 'Ryan', 1),
(41, 17, '2020-10-01', 'To all subjects', 'Just testing ', 'Ryan', 1),
(49, 10, '2020-10-02', 'Hello World', 'Broadcast Test', 'John', 2),
(50, 11, '2020-10-02', 'Hello World', 'Broadcast Test', 'John', 2),
(51, 12, '2020-10-02', 'Hello World', 'Broadcast Test', 'John', 2),
(52, 15, '2020-10-02', 'Hello World', 'Broadcast Test', 'John', 2),
(53, 16, '2020-10-02', 'Hello World', 'Broadcast Test', 'John', 2),
(54, 17, '2020-10-02', 'Hello World', 'Broadcast Test', 'John', 2),
(55, 18, '2020-10-02', 'Hello World', 'Broadcast Test', 'John', 2),
(56, 18, '2020-10-01', 'TEst', 'Just testing', 'John', 2);

-- --------------------------------------------------------

--
-- Table structure for table `student_uni_application`
--

DROP TABLE IF EXISTS `student_uni_application`;
CREATE TABLE IF NOT EXISTS `student_uni_application` (
  `Application_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Student_ID` int(255) NOT NULL,
  `Identification_Number` longtext NOT NULL,
  `Interested_Course` longtext NOT NULL,
  `Description` longtext NOT NULL,
  `Interested_University` longtext NOT NULL,
  PRIMARY KEY (`Application_ID`),
  KEY `student_uni_application_ibfk_1` (`Student_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_uni_application`
--

INSERT INTO `student_uni_application` (`Application_ID`, `Student_ID`, `Identification_Number`, `Interested_Course`, `Description`, `Interested_University`) VALUES
(1, 12, '010904101883', 'IT', 'Â Â 321123', 'APU'),
(2, 11, '010904101883', 'BIS', 'Â Â I am a 19 year old male.', 'Taylor'),
(3, 12, '123445235412', 'MKT', 'Â Â I love marketing and Taylor. Smart choice, eh?', 'Taylor'),
(6, 16, '010904101883', 'ACC', 'Â Â I luv to study account', 'APU'),
(7, 16, '010904101883', 'EEE', 'Â Â EEE is life', 'SWY'),
(9, 16, '010904101883', 'EEE', 'Â Â EEE is love and life', 'SWY');

-- --------------------------------------------------------

--
-- Table structure for table `sunway_review`
--

DROP TABLE IF EXISTS `sunway_review`;
CREATE TABLE IF NOT EXISTS `sunway_review` (
  `Uni_Feedback_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Student_ID` int(255) NOT NULL,
  `Review` longtext NOT NULL,
  `Ratings` int(255) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Uni_Feedback_ID`),
  KEY `Student_ID` (`Student_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sunway_review`
--

INSERT INTO `sunway_review` (`Uni_Feedback_ID`, `Student_ID`, `Review`, `Ratings`, `Date`) VALUES
(1, 12, '6* Uni', 5, '2020-10-05'),
(2, 12, 'Nice uni give me good marks', 4, '2020-10-05'),
(3, 16, 'I used to study in this university. Great place but terrible people in my opinion. My classmates and assignment members treat me badly. Felt helpless during that time. Luckily there is one lecturer, Ms Savinah, who gave me counseling and help me to overcome this problems. Overall, this is a great place to study. And also thanks to the lecturer :) ', 3, '2020-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `taylor_review`
--

DROP TABLE IF EXISTS `taylor_review`;
CREATE TABLE IF NOT EXISTS `taylor_review` (
  `Uni_Feedback_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Student_ID` int(255) NOT NULL,
  `Review` longtext NOT NULL,
  `Ratings` int(255) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Uni_Feedback_ID`),
  KEY `Student_ID` (`Student_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taylor_review`
--

INSERT INTO `taylor_review` (`Uni_Feedback_ID`, `Student_ID`, `Review`, `Ratings`, `Date`) VALUES
(1, 11, 'nice uni', 3, '2020-10-09'),
(3, 12, 'gave me nice marks. Nice uni', 4, '2020-10-04'),
(6, 11, 'i luv taylor', 4, '2020-10-09'),
(8, 18, 'best uni', 3, '2020-10-17');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apu_review`
--
ALTER TABLE `apu_review`
  ADD CONSTRAINT `apu_review_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`Student_ID`) ON DELETE CASCADE;

--
-- Constraints for table `student_mailbox`
--
ALTER TABLE `student_mailbox`
  ADD CONSTRAINT `student_mailbox_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`Student_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_mailbox_ibfk_2` FOREIGN KEY (`Admin_ID`) REFERENCES `admin` (`Admin_ID`) ON DELETE CASCADE;

--
-- Constraints for table `student_uni_application`
--
ALTER TABLE `student_uni_application`
  ADD CONSTRAINT `student_uni_application_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`Student_ID`) ON DELETE CASCADE;

--
-- Constraints for table `sunway_review`
--
ALTER TABLE `sunway_review`
  ADD CONSTRAINT `sunway_review_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`Student_ID`) ON DELETE CASCADE;

--
-- Constraints for table `taylor_review`
--
ALTER TABLE `taylor_review`
  ADD CONSTRAINT `taylor_review_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`Student_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
