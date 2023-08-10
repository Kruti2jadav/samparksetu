-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 06:07 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `samparksetu`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `act_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `actname` text NOT NULL,
  `actdescription` text NOT NULL,
  PRIMARY KEY (`act_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`act_id`, `actname`, `actdescription`) VALUES
(1, 'SR General', ''),
(2, 'hospital', ''),
(3, 'VGTK', ''),
(4, 'SMVS', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE IF NOT EXISTS `admin1` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` text NOT NULL,
  `adminpassword` text NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`adminid`, `adminname`, `adminpassword`) VALUES
(1, 'samparkadmin@gmail.com', 'Admin@1s');

-- --------------------------------------------------------

--
-- Table structure for table `magazine`
--

CREATE TABLE IF NOT EXISTS `magazine` (
  `magazine_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `magazine_name` text NOT NULL,
  `magazine_description` text NOT NULL,
  PRIMARY KEY (`magazine_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `magazine`
--

INSERT INTO `magazine` (`magazine_id`, `magazine_name`, `magazine_description`) VALUES
(1, 'Sewa suvas', ''),
(2, 'annual', '');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `program_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `program_name` text NOT NULL,
  `program_description` text NOT NULL,
  PRIMARY KEY (`program_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `program_name`, `program_description`) VALUES
(1, 'VGKT program', ''),
(3, 'annual', ''),
(4, 'VGTK function', ''),
(5, 'SMVS program', ''),
(6, 'subhechhak milan', '');

-- --------------------------------------------------------

--
-- Table structure for table `sampark_form`
--

CREATE TABLE IF NOT EXISTS `sampark_form` (
  `sampark_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` text NOT NULL,
  `age` int(5) NOT NULL,
  `sex` text NOT NULL,
  `faliyu` text NOT NULL,
  `mukam` text NOT NULL,
  `post` text NOT NULL,
  `taluko` text NOT NULL,
  `district` text NOT NULL,
  `pincode` text NOT NULL,
  `occupation` text NOT NULL,
  `mobileno` text NOT NULL,
  `whatsappno` text,
  `emailid` text,
  `activity` text NOT NULL,
  `present_activity` text NOT NULL,
  `magazine` text NOT NULL,
  `program` text NOT NULL,
  `setuperson_name` text NOT NULL,
  `department` text NOT NULL,
  `visit_date` date NOT NULL,
  `name_operator` text NOT NULL,
  PRIMARY KEY (`sampark_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `sampark_form`
--

INSERT INTO `sampark_form` (`sampark_id`, `fullname`, `age`, `sex`, `faliyu`, `mukam`, `post`, `taluko`, `district`, `pincode`, `occupation`, `mobileno`, `whatsappno`, `emailid`, `activity`, `present_activity`, `magazine`, `program`, `setuperson_name`, `department`, `visit_date`, `name_operator`) VALUES
(1, 'Mann y jadav', 21, 'Male', 'toran', 'vagra', 'abcd', 'bharuch', 'bharuch', '392001', 'farmer', '9876543212', '', '', 'hospital', 'svgs', 'Sewa suvas', 'VGKT program', 'pankaj', 'abcd', '2023-03-16', 'vinny'),
(2, 'Meet y Jadav', 21, 'Male', 'shriji', 'vagra', 'rft', 'bharuch', 'bharuch', '392001', 'electrician', '8868611305', '8868611305', 'meet67@gmail.com', 'SR General', 'SR', 'annual', 'annual', 'jatin', 'jokoko', '2023-03-17', 'kashish'),
(3, 'Aniket B patel', 22, 'Male', 'ramji', 'valiya', 'efsd', 'bharuch', 'bharuch', '392001', 'barber', '9087654321', '', '', 'VGTK', 'SR', 'Sewa suvas', 'VGTK function', 'pankaj', 'abcd', '2023-03-25', 'mahek'),
(4, 'Dhwani t mehta', 25, 'Female', 'sainath', 'ankleshwar', 'efsd', 'bharuch', 'bharuch', '392001', 'farmer', '678945677890', '678945677890', 'dhwani@gmail.com', 'hospital', 'hospital', 'Sewa suvas', 'subhechhak milan', 'jatin', 'abcd', '2023-03-28', 'mahek'),
(5, 'Shiv k patel', 22, 'Male', 'sainath', 'valiya', 'efsd', 'bharuch', 'bharuch', '392001', 'barber', '6354678892', '6354678892', 'shiv2011@gmail.com', 'SMVS', 'SR', 'Sewa suvas', 'SMVS program', 'pankaj', 'health', '2023-03-17', 'vinny'),
(9, 'kashish verma', 21, '', 'sainath', 'palej', 'esuf', 'bharuch', 'bharuch', '392001', 'teacher', '6314785963', '', '', 'hospital', 'hospital', 'annual', 'VGTK function', 'pankaj', 'health', '2023-03-20', 'vinny');

-- --------------------------------------------------------

--
-- Table structure for table `setu_person`
--

CREATE TABLE IF NOT EXISTS `setu_person` (
  `setu_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `setu_person_name` text NOT NULL,
  `age` int(5) NOT NULL,
  `sex` text NOT NULL,
  `mobile_no` text NOT NULL,
  `wpmono` text,
  `email` text,
  `department` text NOT NULL,
  PRIMARY KEY (`setu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `setu_person`
--

INSERT INTO `setu_person` (`setu_id`, `setu_person_name`, `age`, `sex`, `mobile_no`, `wpmono`, `email`, `department`) VALUES
(1, 'pankaj', 40, 'male', '8908765434', '8908765434', 'pankaj1005@gmail.com', 'health'),
(2, 'jatin', 35, 'male', '9876543234', '9876543234', 'jatin2912@gmail.com', 'xyz'),
(3, 'jenil', 25, 'male', '9685741236', '9685741236', 'jenil@gmail.com', 'health');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
