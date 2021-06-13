-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 04:31 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sem4project`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `regno` int(11) DEFAULT NULL,
  `sc` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `token` int(11) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `statuso` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`regno`, `sc`, `name`, `token`, `mname`, `statuso`) VALUES
(14973, 'CM2019C1030', 'Pratika Kamath', 20, 'MS. SHILPA KALANTRI', 'Pending'),
(15021, 'CM2019C4050', 'Ruchi Chakkarwar', 26, 'MS. SHILPA KALANTRI', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE `campus` (
  `regno` int(5) NOT NULL,
  `Smart Card Number` varchar(20) NOT NULL,
  `Name Of Company` varchar(50) NOT NULL,
  `Placement Type` varchar(10) NOT NULL,
  `Designation` varchar(10) NOT NULL,
  `Date of Appointment` date NOT NULL,
  `package` int(20) NOT NULL,
  `Offer letter` varchar(50) NOT NULL,
  `status` text NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`regno`, `Smart Card Number`, `Name Of Company`, `Placement Type`, `Designation`, `Date of Appointment`, `package`, `Offer letter`, `status`, `remark`) VALUES
(13695, 'CM2019C4356', 'Infosys', 'Off-Campus', 'Developer', '2021-05-07', 600000, '9327-PRATIKA-KAMATH-Participant-Certificate (1).pd', 'Pending', ''),
(14973, 'CM2019C1030', 'Tata Consultancy Services', 'On-Campus', 'Programmer', '2021-11-11', 900000, '4467-PRATIKA-KAMATH-Participant-Certificate (1).pd', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `cocact`
--

CREATE TABLE `cocact` (
  `regno` int(5) NOT NULL,
  `Smart Card Number` varchar(20) NOT NULL,
  `1.Event type` text NOT NULL,
  `1.Date of Participation` date NOT NULL,
  `1.Post` text NOT NULL,
  `1.Certificate` varchar(50) NOT NULL,
  `1.Event Details` text NOT NULL,
  `2.Event type` text NOT NULL,
  `2.Date of Participation` date NOT NULL,
  `2.Post` text NOT NULL,
  `2.Certificate` varchar(50) NOT NULL,
  `2.Details` text NOT NULL,
  `3.Event Name` text NOT NULL,
  `3.Date of Participation` date NOT NULL,
  `3.Post` text NOT NULL,
  `3.Certificate` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `status` text NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cocact`
--

INSERT INTO `cocact` (`regno`, `Smart Card Number`, `1.Event type`, `1.Date of Participation`, `1.Post`, `1.Certificate`, `1.Event Details`, `2.Event type`, `2.Date of Participation`, `2.Post`, `2.Certificate`, `2.Details`, `3.Event Name`, `3.Date of Participation`, `3.Post`, `3.Certificate`, `details`, `status`, `remark`) VALUES
(14973, 'CM2019C1030', 'Online Course', '2021-05-20', 'Participant', '8638-PRATIKA-KAMATH-Participant-Certificate.pdf', 'It was spoken tutorial course on python 3.4.3.', 'Technical Paper Publication', '2021-05-07', 'Participant', '7394-PRATIKA-KAMATH-Participant-Certificate (1).pd', 'We published a IEEE paper on Web technologies.', 'Haackerrank', '2021-05-12', 'Participant', '6671-PRATIKA-KAMATH-Participant-Certificate (1).pd', 'It was based on python language.', 'Pending', ''),
(15021, 'CM2019C4050', 'Training', '2021-05-17', 'Participant', '4280-PRATIKA-KAMATH-Participant-Certificate.pdf', 'It was 7-day long bootcamp.', 'Project Poster Presentation', '2021-04-27', 'Participant', '2983-PRATIKA-KAMATH-Participant-Certificate.pdf', 'It was college organized event.', 'All India Hackathon', '2021-05-05', 'Participant', '5754-PRATIKA-KAMATH-Participant-Certificate.pdf', 'It was based on current pandemic crisis.', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `edu`
--

CREATE TABLE `edu` (
  `regno` int(5) NOT NULL,
  `Smart Card Number` varchar(20) NOT NULL,
  `SSC_Marks` int(5) NOT NULL,
  `Out Of` int(5) NOT NULL,
  `SSC Percentage` decimal(10,2) NOT NULL,
  `SSC Marksheet` varchar(50) NOT NULL,
  `HSC Marks` int(5) NOT NULL,
  `HSC Out Of` int(5) NOT NULL,
  `HSC Percentage` decimal(10,2) NOT NULL,
  `HSC Marsheet` varchar(50) NOT NULL,
  `Sem1 CGPA` decimal(10,2) NOT NULL,
  `Sem1 SGPA` decimal(10,2) NOT NULL,
  `Sem1 Kts` int(10) NOT NULL,
  `Sem1 Marksheet` varchar(50) NOT NULL,
  `Sem2 CGPA` decimal(10,2) NOT NULL,
  `Sem2 SGPA` decimal(10,2) NOT NULL,
  `Sem2 Kts` int(10) NOT NULL,
  `Sem2 Marksheet` varchar(50) NOT NULL,
  `Sem3 CGPA` decimal(10,2) NOT NULL,
  `Sem3 SGPA` decimal(10,2) NOT NULL,
  `Sem3 Kts` int(10) NOT NULL,
  `Sem3 Marksheet` varchar(50) NOT NULL,
  `Sem4 CGPA` decimal(10,2) NOT NULL,
  `Sem4 SGPA` decimal(10,2) NOT NULL,
  `Sem4 Kts` int(10) NOT NULL,
  `Sem4 Marksheet` varchar(50) NOT NULL,
  `Sem5 CGPA` decimal(10,2) NOT NULL,
  `Sem5 SGPA` decimal(10,2) NOT NULL,
  `Sem5 Kts` int(10) NOT NULL,
  `Sem5 Marksheet` varchar(50) NOT NULL,
  `Sem6 CGPA` decimal(10,2) NOT NULL,
  `Sem6 SGPA` decimal(10,2) NOT NULL,
  `Sem6 Kts` int(10) NOT NULL,
  `Sem6 Marksheet` varchar(50) NOT NULL,
  `Sem7 CGPA` decimal(10,2) NOT NULL,
  `Sem7 SGPA` decimal(10,2) NOT NULL,
  `Sem7 Kts` int(10) NOT NULL,
  `Sem7 Marksheet` varchar(50) NOT NULL,
  `Sem8 CGPA` decimal(10,2) NOT NULL,
  `Sem8 SGPA` decimal(10,2) NOT NULL,
  `Sem8 Kts` int(10) NOT NULL,
  `Sem8 Marksheet` varchar(50) NOT NULL,
  `statuse` text NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edu`
--

INSERT INTO `edu` (`regno`, `Smart Card Number`, `SSC_Marks`, `Out Of`, `SSC Percentage`, `SSC Marksheet`, `HSC Marks`, `HSC Out Of`, `HSC Percentage`, `HSC Marsheet`, `Sem1 CGPA`, `Sem1 SGPA`, `Sem1 Kts`, `Sem1 Marksheet`, `Sem2 CGPA`, `Sem2 SGPA`, `Sem2 Kts`, `Sem2 Marksheet`, `Sem3 CGPA`, `Sem3 SGPA`, `Sem3 Kts`, `Sem3 Marksheet`, `Sem4 CGPA`, `Sem4 SGPA`, `Sem4 Kts`, `Sem4 Marksheet`, `Sem5 CGPA`, `Sem5 SGPA`, `Sem5 Kts`, `Sem5 Marksheet`, `Sem6 CGPA`, `Sem6 SGPA`, `Sem6 Kts`, `Sem6 Marksheet`, `Sem7 CGPA`, `Sem7 SGPA`, `Sem7 Kts`, `Sem7 Marksheet`, `Sem8 CGPA`, `Sem8 SGPA`, `Sem8 Kts`, `Sem8 Marksheet`, `statuse`, `remark`) VALUES
(14973, 'CM2019C1030', 456, 500, '92.25', '7470-download-converted.pdf', 478, 600, '82.04', '2348-download (1)-converted.pdf', '8.60', '8.45', 0, '1580-SEM-I Hall Ticket.pdf', '8.32', '8.52', 0, '3929-PRATIKA-KAMATH-Participant-Certificate.pdf', '9.00', '9.21', 0, '8640-PRATIKA-KAMATH-Participant-Certificate (1).pd', '7.25', '7.50', 0, '7406-main-qimg-945ec74326b6c3b2e33d07fe2d698ea2-co', '9.45', '9.55', 0, '4428-PRATIKA-KAMATH-Participant-Certificate.pdf', '8.52', '8.25', 3, '9378-PRATIKA-KAMATH-Participant-Certificate.pdf', '8.47', '8.75', 2, '8588-main-qimg-945ec74326b6c3b2e33d07fe2d698ea2-co', '8.35', '8.65', 1, '5819-main-qimg-945ec74326b6c3b2e33d07fe2d698ea2-co', 'Rejected', 'HSC Marksheet is not uploaded'),
(15021, 'CMC2019C4050', 458, 500, '94.25', '2383-download (1)-converted.pdf', 524, 600, '96.20', '8464-download-converted.pdf', '7.02', '7.25', 0, '7462-PRATIKA-KAMATH-Participant-Certificate.pdf', '6.32', '6.32', 0, '7108-PRATIKA-KAMATH-Participant-Certificate.pdf', '9.00', '9.21', 0, '3761-PRATIKA-KAMATH-Participant-Certificate.pdf', '8.69', '8.43', 0, '8401-PRATIKA-KAMATH-Participant-Certificate.pdf', '9.45', '9.55', 0, '4998-PRATIKA-KAMATH-Participant-Certificate.pdf', '5.24', '5.25', 0, '4961-PRATIKA-KAMATH-Participant-Certificate (1).pd', '8.47', '8.75', 0, '8529-PRATIKA-KAMATH-Participant-Certificate.pdf', '8.35', '8.65', 0, '7188-PRATIKA-KAMATH-Participant-Certificate (1).pd', 'Pending', ''),
(15321, 'CM2019C7890	', 412, 500, '80.32', '8567-download-converted.pdf', 478, 600, '79.32', '2934-download (1)-converted.pdf', '5.36', '5.87', 0, '6104-PRATIKA-KAMATH-Participant-Certificate.pdf', '6.98', '7.25', 0, '2820-PRATIKA-KAMATH-Participant-Certificate.pdf', '7.58', '7.39', 0, '1844-PRATIKA-KAMATH-Participant-Certificate.pdf', '9.24', '9.17', 1, '8412-PRATIKA-KAMATH-Participant-Certificate.pdf', '8.14', '8.00', 0, '3629-PRATIKA-KAMATH-Participant-Certificate (1).pd', '7.65', '7.45', 0, '8511-PRATIKA-KAMATH-Participant-Certificate (1).pd', '8.47', '8.25', 2, '5876-PRATIKA-KAMATH-Participant-Certificate (1).pd', '8.35', '8.65', 0, '6958-PRATIKA-KAMATH-Participant-Certificate (1).pd', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `enter`
--

CREATE TABLE `enter` (
  `regno` int(5) NOT NULL,
  `Smart Card Number` varchar(20) NOT NULL,
  `Name of Company` varchar(50) NOT NULL,
  `designation` varchar(10) NOT NULL,
  `Idea` varchar(50) NOT NULL,
  `Related Photocopies` varchar(50) NOT NULL,
  `Details` varchar(500) NOT NULL,
  `status` text NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enter`
--

INSERT INTO `enter` (`regno`, `Smart Card Number`, `Name of Company`, `designation`, `Idea`, `Related Photocopies`, `Details`, `status`, `remark`) VALUES
(15321, 'CM2019C7890	', 'DP Software', 'CEO', 'Start-up', '3000-PRATIKA-KAMATH-Participant-Certificate.pdf', 'It is online-learning software for students.', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `excact`
--

CREATE TABLE `excact` (
  `regno` int(5) NOT NULL,
  `Smart Card Number` varchar(20) NOT NULL,
  `1.Event type` text NOT NULL,
  `1.Date of Participation` date NOT NULL,
  `1.Post` text NOT NULL,
  `1.Certificate` varchar(50) NOT NULL,
  `1.Event Details` text NOT NULL,
  `2.Event type` text NOT NULL,
  `2.Date of Participation` date NOT NULL,
  `post` text NOT NULL,
  `2.Certificate` varchar(50) NOT NULL,
  `2.Details` text NOT NULL,
  `3.Event Name` text NOT NULL,
  `3.Date of Participation` date NOT NULL,
  `3.Post` text NOT NULL,
  `3.Certificate` varchar(50) NOT NULL,
  `3.Details` text NOT NULL,
  `status` text NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `excact`
--

INSERT INTO `excact` (`regno`, `Smart Card Number`, `1.Event type`, `1.Date of Participation`, `1.Post`, `1.Certificate`, `1.Event Details`, `2.Event type`, `2.Date of Participation`, `post`, `2.Certificate`, `2.Details`, `3.Event Name`, `3.Date of Participation`, `3.Post`, `3.Certificate`, `3.Details`, `status`, `remark`) VALUES
(14973, 'CM2019C1030', 'FEST', '2021-05-09', 'Participant', '4493-PRATIKA-KAMATH-Participant-Certificate.pdf', 'Fun.', 'Kho-Kho', '2021-05-23', 'Participant', '7869-download-converted.pdf', 'Event', 'NSS Volunteer', '2021-05-19', 'Participant', '6694-download (1)-converted.pdf', 'Visited NGO.', 'Pending', ''),
(15021, 'CM2019C4050', 'Rangoli Competitions', '2021-05-19', 'Organizer', '5729-PRATIKA-KAMATH-Participant-Certificate.pdf', 'It was a successful event.', 'ThrowBall', '2021-05-07', 'Participant', '7171-PRATIKA-KAMATH-Participant-Certificate (1).pd', 'I got 3rd prize.', 'Safety Volunteer', '2021-05-13', 'Participant', '2326-PRATIKA-KAMATH-Participant-Certificate (1).pd', 'It was great.', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `geninfo`
--

CREATE TABLE `geninfo` (
  `regno` int(5) NOT NULL,
  `smart_card_number` varchar(20) NOT NULL,
  `fname` text NOT NULL,
  `lastname` text NOT NULL,
  `date_of_Birth` date NOT NULL,
  `gender` text NOT NULL,
  `branch` text NOT NULL,
  `year_of_admission` int(5) NOT NULL,
  `student_EmailID` varchar(50) NOT NULL,
  `student_Mobile_Number` text NOT NULL,
  `parent_EmailID` varchar(50) NOT NULL,
  `parent_Mobile_Number` text NOT NULL,
  `mname` varchar(50) NOT NULL,
  `type` text NOT NULL,
  `status` text NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `geninfo`
--

INSERT INTO `geninfo` (`regno`, `smart_card_number`, `fname`, `lastname`, `date_of_Birth`, `gender`, `branch`, `year_of_admission`, `student_EmailID`, `student_Mobile_Number`, `parent_EmailID`, `parent_Mobile_Number`, `mname`, `type`, `status`, `remark`) VALUES
(13695, 'CM2019C4356', 'Nithi', 'Poojary', '2001-12-24', 'Female', 'Computer', 2019, 'nithi.poojary_19@sakec.ac.in', '8527419630', 'poojary@gmail.com', '7025896314', 'MS. PRIYANKA GHULE', 'HSC', 'Rejected', 'fill details again'),
(14973, 'CM2019C1030', 'Pratika', 'Kamath', '2002-01-09', 'Female', 'Computer', 2019, 'pratika.kamath_19@sakec.ac.in', '8527419630', 'kamath@gmail.com', '9632587485', 'MS. SHILPA KALANTRI', 'HSC', 'Approved', ''),
(15021, 'CM2019C4050', 'Ruchi', 'Chakkarwar', '2001-11-28', 'Female', 'Computer', 2019, 'ruchi.chakkarwar_19@sakec.ac.in', '9874563210', 'chakkarwar@gmail.com', '7539854162', 'MS. SHILPA KALANTRI', 'HSC', 'Pending', ''),
(15321, 'CM2019C7890', 'Dhwani', 'Patel', '2021-05-11', 'Female', 'Computer', 2019, 'dhwani.patel_19@sakec.ac.in', '8092457612', 'patel@gmail.com', '9988771155', 'MS. DEEPSHIKHA CHATURVEDI', 'HSC', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `high`
--

CREATE TABLE `high` (
  `regno` int(5) NOT NULL,
  `Smart Card Number` varchar(20) NOT NULL,
  `Name of Exam` varchar(50) NOT NULL,
  `score` int(10) NOT NULL,
  `Name of University` varchar(50) NOT NULL,
  `Date of Exam` date NOT NULL,
  `Marksheet` varchar(50) NOT NULL,
  `Admission Letter` varchar(50) NOT NULL,
  `status` text NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `high`
--

INSERT INTO `high` (`regno`, `Smart Card Number`, `Name of Exam`, `score`, `Name of University`, `Date of Exam`, `Marksheet`, `Admission Letter`, `status`, `remark`) VALUES
(15021, 'CM2019C4050', 'GRE', 985, 'Harvard', '2021-05-19', '2590-download (1)-converted.pdf', '8659-PRATIKA-KAMATH-Participant-Certificate.pdf', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `intern`
--

CREATE TABLE `intern` (
  `regno` int(5) NOT NULL,
  `smart_Card_Number` varchar(20) NOT NULL,
  `name_of_Company` varchar(50) NOT NULL,
  `internship_Domain` varchar(50) NOT NULL,
  `internship_Type` text NOT NULL,
  `related_Certificates` text NOT NULL,
  `details` text NOT NULL,
  `status` text NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern`
--

INSERT INTO `intern` (`regno`, `smart_Card_Number`, `name_of_Company`, `internship_Domain`, `internship_Type`, `related_Certificates`, `details`, `status`, `remark`) VALUES
(13695, 'CM2019C4356', 'AWS', 'Software Testing', 'Non-Paid', '1409-PRATIKA-KAMATH-Participant-Certificate.pdf', 'It was 1-month internship.', 'Pending', ''),
(14973, 'CM2019C1030', 'Dell', 'Web Developer', 'Non-Paid', '2558-PRATIKA-KAMATH-Participant-Certificate.pdf', 'It was a 6-months internship', 'Rejected', 'Certificate is not valid'),
(15021, 'CM2019C4050', 'Langify', 'Android Developer', 'Non-Paid', '2216-PRATIKA-KAMATH-Participant-Certificate (1).pdf', 'It was 3-month internship.', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_file`
--

CREATE TABLE `pdf_file` (
  `id` int(10) NOT NULL,
  `pdf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdf_file`
--

INSERT INTO `pdf_file` (`id`, `pdf`) VALUES
(6, 'noc18_ee33_Assignment2.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`token`),
  ADD UNIQUE KEY `regno` (`regno`);

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`regno`),
  ADD UNIQUE KEY `Registration ID` (`regno`);

--
-- Indexes for table `cocact`
--
ALTER TABLE `cocact`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `edu`
--
ALTER TABLE `edu`
  ADD PRIMARY KEY (`regno`),
  ADD UNIQUE KEY `Registration ID` (`regno`);

--
-- Indexes for table `enter`
--
ALTER TABLE `enter`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `excact`
--
ALTER TABLE `excact`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `geninfo`
--
ALTER TABLE `geninfo`
  ADD UNIQUE KEY `Registration ID` (`regno`);

--
-- Indexes for table `high`
--
ALTER TABLE `high`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `intern`
--
ALTER TABLE `intern`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `pdf_file`
--
ALTER TABLE `pdf_file`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pdf_file`
--
ALTER TABLE `pdf_file`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
