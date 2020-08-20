-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 09:43 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `name` varchar(100) DEFAULT NULL,
  `roll` int(11) DEFAULT NULL,
  `series` int(11) DEFAULT NULL,
  `dept` varchar(10) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `cpass` varchar(100) DEFAULT NULL,
  `home_dist` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `bld_grp` varchar(10) DEFAULT NULL,
  `fb` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`name`, `roll`, `series`, `dept`, `pass`, `cpass`, `home_dist`, `gender`, `designation`, `company`, `country`, `email`, `phone`, `bld_grp`, `fb`) VALUES
('Snahashis Roy Shuvon', 1603091, 16, 'CSE', 'shuvon', 'shuvon', 'Dinajpur', 'male', 'Bekar', 'Baundule', 'Bangladesh', 'snahashis.shuvon@gmail.com', '+8801616602633', 'O+', 'https://www.facebook'),
('Nasif Raihan', 1603002, 16, 'CSE', '123456', '123456', 'Jhenaidah', 'male', 'Game developper', 'Ubisoft', 'Australia', 'nasif.raihan78@gmail.com', '01798557550', 'O+', 'facebook.com/nasif.r'),
('Sabir Khan Akash', 1603108, 16, 'CSE', 'akash', 'akash', 'Dhaka', 'male', 'Free lancer', 'Akashi', 'Bangladesh', 'sabir.akash@gmail.com', '+8801715604688', 'O-', 'facebook/sabir.khan.'),
('Sharif Jaman', 1603019, 16, 'CSE', 'sharif', 'sharif', 'Dinajpur', 'male', 'Foreign Cadre', 'BCS', 'USA', 'sharif.jaman@gmail.com', '01659410537', 'AB+', 'facebook/sharif.jama'),
('Abdur Raiyan Rian', 1601065, 16, 'EEE', 'oni', 'oni', 'Pabna', 'male', 'Researcher', 'Google', 'Canada', 'rian@gmail.com', '+8801653189471', 'A-', 'facebook/rian'),
('Shahriar Shohan', 1602069, 16, 'ME', 'shohan', 'shohan', 'Kustia', 'male', 'CSE', 'Walton', 'Bangladesh', 'shohan@gmail.com', '013456789101', 'B-', 'facebook/shahriar.sh'),
('Najmus Sakib Shoumik', 1604105, 16, 'CE', 'shoumik', 'shoumik', 'Lalmonirhat', 'male', 'Civil Engineer', 'Rajshahi City Corporation', 'Bangladesh', 'shoumik@gmail.com', '01656523589', 'B+', 'facebook/shoumik'),
('Morsheda Siddique Jeba', 1603051, 16, 'CSE', '1740', '1740', 'Mymensing', 'female', 'Software Engineer', 'Samsung ', 'England', 'morsheda.jiba@gmail.com', '+8801622395877', 'O+', 'facebook/morsheda.ji'),
('Jannatul Feordous Tania', 1605060, 16, 'ETE', 'tania', 'tania', 'Pabna', 'female', 'CEO', 'Grammenphone', 'Singapore', 'tania@gmail.com', '+8801973761754', 'A+', 'facebook/tania.janna'),
('Tarikul Islam Tamiti', 1604001, 16, 'ECE', 'votka', 'votka', 'Dhaka', 'male', 'Lecturer ', 'RUET', 'Bangladesh', 'tarikul@gmail.com', '01924569874', 'A+', 'facebook/tarik'),
('Amit Saha', 1503060, 15, 'CSE', 'amit', 'amit', 'Rajshahi', 'male', 'Software Engineer', 'Google', 'Switzerland', 'amit@gmail.com', '01714607985', 'B+', 'facebook/amit'),
('Alif Rahman', 1503061, 15, 'CSE', 'alif', 'alif', 'Jhenaidah', 'male', 'CEO', 'Google', 'Australia', 'alif@gmail.com', '01659874526', 'A+', 'facebook/alif');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
