-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2019 at 10:50 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qbr`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_no` varchar(200) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `shipping` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `customer_group` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_no`, `customer_name`, `shipping`, `city`, `country`, `customer_group`) VALUES
('1268997', 'ANSON BAY MEDICAL CENTRE', 'Jalan Maharaja Lela', 'HILIR PERAK', 'Malaysia', 'Malaysia Group of Hospitals'),
('1355273', 'AYUTTHAYA HOSPITAL', '46/1 MOO 4, UTHONG ROAD', 'AYUTTHAYA', 'Thailand', 'Thailand Hospitals'),
('1360503', 'DARMO HOSPITAL', 'Jl. Raya Darmo No.90, DR. Soetomo, Tegalsari', 'Surabaya', 'Indonesia', 'Indonesia Hospitals'),
('243134', 'Alexandra Hospital', '378 Alexandra Road', 'Singapore', 'Singapore', 'Singapore Hospitals'),
('3765576', 'Bac Lieu General Hospital', '6 Nguyen Hue, Phuong 3', 'Bac Lieu', 'Vietnam', 'Vietnam Hospitals'),
('393217', 'Asian Hospital and Medical Center', '# 2205 CIVIC DRIVE', 'Alabang,Muntinlupa', 'Philippines', 'Philippines Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `customers_group`
--

CREATE TABLE `customers_group` (
  `group_no` varchar(200) NOT NULL,
  `group_name` varchar(200) NOT NULL,
  `group_country` varchar(200) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers_group`
--

INSERT INTO `customers_group` (`group_no`, `group_name`, `group_country`, `date_created`) VALUES
('0001', 'Philippine Hospitals', 'Philippines', '2019-07-23 06:38:38'),
('002', 'Singapore Hospitals', 'Singapore', '2019-07-23 06:55:04'),
('003', 'Thailand Hospitals', 'Thailand', '2019-07-23 06:55:04'),
('004', 'Malaysia Group of Hospitals', 'Malaysia', '2019-07-23 06:55:58'),
('005', 'Vietnam Hospitals', 'Vietnam', '2019-07-23 06:55:58'),
('006', 'Indonesia Hospitals', 'Indonesia', '2019-07-23 14:53:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_no`);

--
-- Indexes for table `customers_group`
--
ALTER TABLE `customers_group`
  ADD PRIMARY KEY (`group_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
