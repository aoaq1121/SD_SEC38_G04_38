-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 17, 2023 at 08:29 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msnbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(50) NOT NULL,
  `fName` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phoneNumber` int NOT NULL,
  `gender` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `address` text NOT NULL,
  `postalcode` int NOT NULL,
  `state` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `country` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bank` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `fName`, `email`, `phoneNumber`, `gender`, `dob`, `address`, `postalcode`, `state`, `country`, `bank`) VALUES
('Admin', 'admin', 'Angie Ong An Qi', 'aoaq1121@gmail.com', 124729109, 'female', '21 November 2003', '19,TAMAN MERAK FASA 1', 6660, 'Kedah', 'Malaysia', '6788991779887');

-- --------------------------------------------------------

--
-- Table structure for table `badmintondurationoption`
--

CREATE TABLE `badmintondurationoption` (
  `durationid` int NOT NULL,
  `durationvalue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `badmintondurationoption`
--

INSERT INTO `badmintondurationoption` (`durationid`, `durationvalue`) VALUES
(1, '1 hour'),
(2, '2 hour'),
(3, '3 hour');

-- --------------------------------------------------------

--
-- Table structure for table `badmintonslots`
--

CREATE TABLE `badmintonslots` (
  `bookingid` bigint NOT NULL,
  `bsid` bigint NOT NULL,
  `date` date DEFAULT NULL,
  `starttime` time DEFAULT NULL,
  `endtime` time DEFAULT NULL,
  `isbooked` int NOT NULL,
  `price` double(10,2) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `badmintonslots`
--

INSERT INTO `badmintonslots` (`bookingid`, `bsid`, `date`, `starttime`, `endtime`, `isbooked`, `price`, `email`) VALUES
(110491699242340, 1, '2023-11-06', '18:00:00', '19:00:00', 1, 8.00, 'angieong1115@gmail.com'),
(119711699253834, 4, '2023-11-07', '07:00:00', '10:00:00', 1, 21.00, 'yoonxin123@gmail.com'),
(124441699238790, 2, '2023-11-22', '13:00:00', '14:00:00', 1, 8.00, 'angieong1115@gmail.com'),
(156011698564158, 2, '2023-11-10', '12:00:00', '15:00:00', 1, 24.00, 'angieong1115@gmail.com'),
(177221698568504, 1, '2023-10-31', '08:00:00', '11:00:00', 1, 24.00, 'angieong1115@gmail.com'),
(180711699198878, 4, '2023-11-18', '07:30:00', '08:30:00', 1, 9.00, 'angieong1115@gmail.com'),
(182071699252384, 2, '2023-11-15', '14:00:00', '16:00:00', 1, 14.00, 'yoonxin123@gmail.com'),
(197111699237988, 3, '2023-11-10', '17:00:00', '18:00:00', 1, 8.00, 'angieong1115@gmail.com'),
(210041699253876, 3, '2023-11-07', '07:00:00', '10:00:00', 1, 21.00, 'yoonxin123@gmail.com'),
(210481699248795, 1, '2023-11-06', '12:00:00', '13:00:00', 1, 7.00, 'angieong1115@gmail.com'),
(229521699252885, 4, '2023-11-07', '13:00:00', '15:00:00', 1, 14.00, 'yoonxin123@gmail.com'),
(253981699241892, 3, '2023-11-06', '12:00:00', '14:00:00', 1, 16.00, 'angieong1115@gmail.com'),
(271541699236969, 4, '2023-11-07', '14:00:00', '15:00:00', 1, 8.00, 'angieong1115@gmail.com'),
(285041698564039, 3, '2023-11-10', '12:00:00', '15:00:00', 1, 24.00, 'angieong1115@gmail.com'),
(297951698568458, 2, '2023-10-31', '08:00:00', '11:00:00', 1, 24.00, 'angieong1115@gmail.com'),
(302041698653683, 2, '2023-11-03', '11:00:00', '13:00:00', 1, 16.00, 'angieong1115@gmail.com'),
(310031699018981, 3, '2023-11-14', '13:00:00', '14:00:00', 1, 8.00, 'angieong1115@gmail.com'),
(315581699250159, 1, '2023-11-07', '09:00:00', '12:00:00', 1, 21.00, 'yoonxin123@gmail.com'),
(315661699897118, 2, '2023-11-15', '08:00:00', '09:00:00', 1, 8.00, 'aoaq1121@gmail.com'),
(321631699237306, 2, '2023-11-22', '07:30:00', '08:30:00', 1, 8.00, 'angieong1115@gmail.com'),
(329901698959137, 3, '2023-11-16', '07:30:00', '09:30:00', 1, 16.00, 'ooic9544@gmail.com'),
(331751699244642, 1, '2023-11-10', '12:00:00', '13:00:00', 1, 8.00, 'angieong1115@gmail.com'),
(354031699198359, 3, '2023-11-16', '19:00:00', '20:00:00', 1, 8.00, 'angieong1115@gmail.com'),
(376101699243838, 2, '2023-11-07', '12:00:00', '14:00:00', 1, 16.00, 'angieong1115@gmail.com'),
(376301699239750, 2, '2023-11-15', '17:00:00', '19:00:00', 1, 16.00, 'angieong1115@gmail.com'),
(383311699898475, 2, '2023-11-21', '09:00:00', '10:00:00', 1, 8.00, 'aoaq1121@gmail.com'),
(410191699246874, 2, '2023-11-16', '18:00:00', '19:00:00', 1, 7.00, 'angieong1115@gmail.com'),
(411941699245380, 1, '2023-11-07', '07:00:00', '09:00:00', 1, 16.00, 'angieong1115@gmail.com'),
(429491699243642, 1, '2023-11-18', '15:00:00', '16:00:00', 1, 9.00, 'angieong1115@gmail.com'),
(433501699198678, 3, '2023-11-18', '07:30:00', '08:30:00', 1, 9.00, 'angieong1115@gmail.com'),
(442761699249200, 3, '2023-11-06', '17:00:00', '18:00:00', 1, 7.00, 'yoonxin123@gmail.com'),
(444371699251810, 3, '2023-11-14', '16:00:00', '18:00:00', 1, 14.00, 'yoonxin123@gmail.com'),
(445361698519156, 2, '2023-11-11', '18:00:00', '19:00:00', 1, 9.00, 'aoaq1121@gmail.com'),
(470071699248086, 3, '2023-11-09', '16:00:00', '18:00:00', 1, 14.00, 'angieong1115@gmail.com'),
(482321699198497, 2, '2023-11-18', '07:30:00', '08:30:00', 1, 9.00, 'angieong1115@gmail.com'),
(482631699236134, 3, '2023-11-29', '07:00:00', '08:00:00', 1, 8.00, 'angieong1115@gmail.com'),
(567331699238347, 4, '2023-11-03', '10:00:00', '12:00:00', 1, 16.00, 'angieong1115@gmail.com'),
(580331699244687, 4, '2023-11-10', '12:00:00', '13:00:00', 1, 8.00, 'angieong1115@gmail.com'),
(586201699242808, 1, '2023-11-07', '14:00:00', '15:00:00', 1, 8.00, 'angieong1115@gmail.com'),
(595771699237842, 2, '2023-11-06', '15:00:00', '18:00:00', 1, 24.00, 'angieong1115@gmail.com'),
(602851699240883, 2, '2023-11-06', '20:00:00', '23:00:00', 1, 24.00, 'angieong1115@gmail.com'),
(612571699240064, 3, '2023-11-09', '12:00:00', '14:00:00', 1, 16.00, 'angieong1115@gmail.com'),
(664681699240233, 3, '2023-11-08', '10:00:00', '12:00:00', 1, 16.00, 'angieong1115@gmail.com'),
(665451699238602, 1, '2023-11-16', '16:00:00', '18:00:00', 1, 16.00, 'angieong1115@gmail.com'),
(670471698565101, 2, '2023-11-02', '20:00:00', '23:00:00', 1, 24.00, 'angieong1115@gmail.com'),
(676301698522416, 2, '2023-11-21', '19:00:00', '22:00:00', 1, 24.00, 'aoaq1121@gmail.com'),
(687801699237505, 2, '2023-11-15', '12:00:00', '14:00:00', 1, 16.00, 'angieong1115@gmail.com'),
(694591698578088, 1, '2023-11-09', '19:00:00', '20:00:00', 1, 8.00, 'angieong1115@gmail.com'),
(752391699251048, 1, '2023-11-08', '14:00:00', '16:00:00', 1, 14.00, 'yoonxin123@gmail.com'),
(754711699251505, 4, '2023-11-07', '11:00:00', '13:00:00', 1, 14.00, 'yoonxin123@gmail.com'),
(759541699241338, 2, '2023-11-10', '09:00:00', '10:00:00', 1, 8.00, 'angieong1115@gmail.com'),
(773611699237707, 2, '2023-11-08', '15:00:00', '17:00:00', 1, 16.00, 'angieong1115@gmail.com'),
(774411698572175, 2, '2023-11-09', '21:00:00', '22:00:00', 1, 8.00, 'angieong1115@gmail.com'),
(782001699236727, 2, '2023-11-30', '08:00:00', '09:00:00', 1, 8.00, 'angieong1115@gmail.com'),
(792951699244188, 3, '2023-11-19', '16:00:00', '18:00:00', 1, 18.00, 'angieong1115@gmail.com'),
(823111699238182, 2, '2023-11-09', '16:00:00', '18:00:00', 1, 16.00, 'angieong1115@gmail.com'),
(827141699239357, 2, '2023-11-14', '11:00:00', '12:00:00', 1, 8.00, 'angieong1115@gmail.com'),
(834141699249730, 3, '2003-12-22', '14:00:00', '16:00:00', 1, 14.00, 'yoonxin123@gmail.com'),
(871811699252619, 3, '2023-11-15', '16:00:00', '18:00:00', 1, 14.00, 'yoonxin123@gmail.com'),
(887631699243888, 3, '2023-11-07', '12:00:00', '14:00:00', 1, 16.00, 'angieong1115@gmail.com'),
(890091699246244, 3, '2023-11-15', '14:00:00', '16:00:00', 1, 14.00, 'angieong1115@gmail.com'),
(911621698565049, 3, '2023-11-02', '20:00:00', '23:00:00', 1, 24.00, 'angieong1115@gmail.com'),
(912241698648611, 3, '2023-10-25', '16:00:00', '19:00:00', 1, 24.00, 'angieong1115@gmail.com'),
(975671699198772, 1, '2023-11-18', '07:30:00', '08:30:00', 1, 9.00, 'angieong1115@gmail.com'),
(978731699239002, 2, '2023-11-08', '13:00:00', '14:00:00', 1, 8.00, 'angieong1115@gmail.com'),
(986911699247147, 4, '2023-11-08', '13:00:00', '15:00:00', 1, 14.00, 'angieong1115@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `badmintontimeoption`
--

CREATE TABLE `badmintontimeoption` (
  `timeid` time DEFAULT NULL,
  `timevalue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `badmintontimeoption`
--

INSERT INTO `badmintontimeoption` (`timeid`, `timevalue`) VALUES
('07:00:00', '07:00 AM'),
('08:00:00', '08:00 AM'),
('09:00:00', '09:00 AM'),
('10:00:00', '10:00 AM'),
('11:00:00', '11:00 AM'),
('12:00:00', '12:00 PM'),
('13:00:00', '01:00 PM'),
('14:00:00', '02:00 PM'),
('15:00:00', '03:00 PM'),
('16:00:00', '04:00 PM'),
('17:00:00', '05:00 PM'),
('18:00:00', '06:00 PM'),
('19:00:00', '07:00 PM'),
('20:00:00', '08:00 PM'),
('07:30:00', '07:30 AM'),
('08:30:00', '08:30 AM');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `yourname` varchar(50) NOT NULL,
  `youremail` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`yourname`, `youremail`, `subject`, `message`) VALUES
('chris', 'ooic9544@gmail.com', 'bla', 'bla'),
('angie', 'aoaq1121@gmail.com', 'problem', 'we have problem'),
('angie', 'aoaq1121@gmail.com', 'problem', 'we have problem'),
('angie', 'angieong1115@gmail.com', 'olleh', 'hello'),
('Erinoor', 'afiqerinoor@gmail.com', 'Loading time very slow', 'It is too slow. Thank you');

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `courtid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`courtid`) VALUES
(1),
(2),
(3),
(4);

-- --------------------------------------------------------

--
-- Table structure for table `editabout`
--

CREATE TABLE `editabout` (
  `id` int NOT NULL,
  `history` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `visi` varchar(500) NOT NULL,
  `misi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `editabout`
--

INSERT INTO `editabout` (`id`, `history`, `visi`, `misi`) VALUES
(1, 'The National Sports Council was established under the National Sports Council Act of Malaysia 1971 and the National Sports Council (Amendment) Act of 1979.', 
 'Peneraju Sukan Prestasi Tinggi Terunggul Ke Arah Melahirkan Lebih Ramai Atlet Bertaraf Antarabangsa', 
 'Memastikan Program Pembangunan Sukan Berprestasi Tinggi Dilaksanakan Secara Menyeluruh, Sistematik Dan Berkesan Di Semua Peringkat');

-- --------------------------------------------------------

--
-- Table structure for table `editcontact`
--

CREATE TABLE `editcontact` (
  `id` int NOT NULL,
  `office` varchar(500) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `businesshour` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `editcontact`
--

INSERT INTO `editcontact` (`id`, `office`, `mobile`, `name`, `email`, `businesshour`) VALUES
(1, 'Jalan 6/27a, Wangsa Maju, 54200 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', '3-41420082', 'En. Muhammad Amzar Zulhizzam (Penyelia) ', 'amzar@nsc.gov.my', '7.00am - 11.00pm');

-- --------------------------------------------------------

--
-- Table structure for table `editpricerate`
--

CREATE TABLE `editpricerate` (
  `id` int NOT NULL,
  `weekdayrate` decimal(10,2) NOT NULL,
  `weekendrate` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `editpricerate`
--

INSERT INTO `editpricerate` (`id`, `weekdayrate`, `weekendrate`) VALUES
(1, '8.00', '9.00');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` int NOT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `gender` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `postalcode` int NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  `bank` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`username`, `password`, `fname`, `email`, `phoneNumber`, `dob`, `gender`, `address`, `postalcode`, `state`, `country`, `bank`) VALUES
('Staff01', 'd92cdaf0655e3c2d8691d65bf92e81e6', 'Angie Ong', 'aoaq1121@gmail.com', 124729109, '21 November 2003', 'Female', '19,TAMAN MERAK FASA 1', 6660, 'Kedah', 'Malaysia', '6788991779887'),
('Staff02', 'd41d8cd98f00b204e9800998ecf8427e', 'Areesha Nabila', 'areeshanabila@gmail.com', 124729109, '21 November 2003', 'Female', '19,TAMAN MERAK FASA 1', 6660, 'Kedah', 'Malaysia', '6788991779887'),
('Staff03', 'e925163145766789e8e61c8f1b4c090c', 'Alynn Azlina', 'alynnazlina117@gmail.com', 124729109, '21 November 2003', 'female', 'No 8 Jalan Lestari,', 54100, 'Kuala Lumpur', 'Malaysia', '6788991779887'),
('Staff05', '15724f9ea494e1aaabc08fd24b26ca7f', 'Danus', 'danusnadraja@gmail.com', 194567812, '05 September 2023', 'Male', 'No 8 Jalan Lestari,', 54100, 'Kuala Lumpur', 'Malaysia', '6788991779887'),
('Staff06', 'b6d64cfb4a7e1dba82abe49e172b58cc', 'Harith', 'harithdaniel@gmail.com', 124729109, '21 November 2003', 'Male', 'No 8 Jalan Lestari,', 54100, 'Kuala Lumpur', 'Malaysia', '6788991779887'),
('Staff07', '131afd59026c2bf3ac067bf0fb260082', 'Lavahnya Barni Kumar', 'lavahnya@gmail.com', 194567812, '10 December 2003', 'female', 'No 8 Jalan Lestari,', 54100, 'Kuala Lumpur', 'Malaysia', '6788991779887');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fullname` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `phoneNumber` int DEFAULT NULL,
  `email_verification_link` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fullname`, `email`, `password`, `gender`, `dateOfBirth`, `phoneNumber`, `email_verification_link`, `email_verified_at`) VALUES
(12, 'angie', 'Angie Ong An Qi', 'angieong1115@gmail.com', 'd92cdaf0655e3c2d8691d65bf92e81e6', 'female', '2003-11-21', 391711359, '035b21a1d45534fd10b5424050d635511982', '2023-09-09 10:30:05'),
(14, 'Chris123', 'Christopher Ooi Jun', 'ooic9544@gmail.com', '8555fd0a608e57e7d479b6d5b454284c', 'male', '2003-01-28', 124729109, '59c2a99df2c3647a1a8764345b654c884895', NULL),
(16, 'Angie1121', 'Angie Ong An Qi', 'aoaq1121@gmail.com', '9a64e4850a069cad86dfa1d9c6d09caa', 'female', '2003-11-21', 124729109, 'ea6086018a521c299a5957639df7e4d66313', '2023-10-28 00:43:40'),
(21, 'bamboo', 'PAT YOON XIN', 'yoonxin123@gmail.com', 'bae5c05d5f8c35fac172abb5a56d4061', 'female', '2003-09-08', 162163003, 'b6a098ded3fdc0ee59a5762866059f192890', NULL),
(23, 'alynnazlina', 'Alynn Azlina', 'alynnazlina17@gmail.com', 'c1e00f697b3a56ebcf233a22397a71cd', 'female', '2003-09-17', 124729109, 'b70d2e29ed398addad2a8250374f828e5384', NULL),
(24, 'danish', NULL, 'danishdanial787@gmail.com', '0cda4f6109321b785ca53642081afba4', NULL, NULL, NULL, '5b1af2a43013f3e49cd5994f9a6c54de4814', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `badmintondurationoption`
--
ALTER TABLE `badmintondurationoption`
  ADD PRIMARY KEY (`durationid`);

--
-- Indexes for table `badmintonslots`
--
ALTER TABLE `badmintonslots`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `badmintontimeoption`
--
ALTER TABLE `badmintontimeoption`
  ADD UNIQUE KEY `timeid` (`timeid`);

--
-- Indexes for table `editabout`
--
ALTER TABLE `editabout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editcontact`
--
ALTER TABLE `editcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editpricerate`
--
ALTER TABLE `editpricerate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
