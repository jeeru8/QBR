-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2019 at 08:12 AM
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
-- Table structure for table `commercial_contact`
--

CREATE TABLE `commercial_contact` (
  `id` int(11) NOT NULL,
  `commercial_id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `info` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `corrective_alljobs`
--

CREATE TABLE `corrective_alljobs` (
  `id` int(11) NOT NULL,
  `data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `corrective_asset`
--

CREATE TABLE `corrective_asset` (
  `id` int(11) NOT NULL,
  `data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `corrective_comment`
--

CREATE TABLE `corrective_comment` (
  `id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `enable` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `corrective_fixrate`
--

CREATE TABLE `corrective_fixrate` (
  `id` int(11) NOT NULL,
  `data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `corrective_harddown`
--

CREATE TABLE `corrective_harddown` (
  `id` int(11) NOT NULL,
  `data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `corrective_parts`
--

CREATE TABLE `corrective_parts` (
  `id` int(11) NOT NULL,
  `data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `corrective_time`
--

CREATE TABLE `corrective_time` (
  `id` int(11) NOT NULL,
  `data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `corrective_uptime`
--

CREATE TABLE `corrective_uptime` (
  `id` int(11) NOT NULL,
  `data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('002', 'Singapore Hospitals', 'Singapore', '2019-07-23 06:55:04'),
('003', 'Thailand Hospitals', 'Thailand', '2019-07-23 06:55:04'),
('004', 'Malaysia Group of Hospitals', 'Malaysia', '2019-07-23 06:55:58'),
('005', 'Vietnam Hospitals', 'Vietnam', '2019-07-23 06:55:58'),
('006', 'Indonesia Hospitals', 'Indonesia', '2019-07-23 14:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_comment`
--

CREATE TABLE `equipment_comment` (
  `id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `enable` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipment_level`
--

CREATE TABLE `equipment_level` (
  `equipment_id` int(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `modality` varchar(200) NOT NULL,
  `coverage` varchar(200) NOT NULL,
  `warranty_expiration` varchar(200) NOT NULL,
  `coverage_start` varchar(200) NOT NULL,
  `coverage_end` varchar(200) NOT NULL,
  `current_year` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fmi`
--

CREATE TABLE `fmi` (
  `id` int(11) NOT NULL,
  `data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `installbase_comment`
--

CREATE TABLE `installbase_comment` (
  `id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `enable` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `installbase_connectivity`
--

CREATE TABLE `installbase_connectivity` (
  `id` int(11) NOT NULL,
  `data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `installbase_entitlement`
--

CREATE TABLE `installbase_entitlement` (
  `id` int(11) NOT NULL,
  `data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `sso` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other_information`
--

CREATE TABLE `other_information` (
  `id` int(11) NOT NULL,
  `data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_delivery`
--

CREATE TABLE `service_delivery` (
  `id` int(11) NOT NULL,
  `data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `technical_assesment`
--

CREATE TABLE `technical_assesment` (
  `id` int(11) NOT NULL,
  `system` varchar(200) NOT NULL,
  `findings` varchar(200) NOT NULL,
  `actions` varchar(200) NOT NULL,
  `recommendations` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `technical_comment`
--

CREATE TABLE `technical_comment` (
  `id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `enable` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `technical_contact`
--

CREATE TABLE `technical_contact` (
  `id` int(11) NOT NULL,
  `tech_id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `info` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commercial_contact`
--
ALTER TABLE `commercial_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corrective_alljobs`
--
ALTER TABLE `corrective_alljobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corrective_asset`
--
ALTER TABLE `corrective_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corrective_comment`
--
ALTER TABLE `corrective_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corrective_fixrate`
--
ALTER TABLE `corrective_fixrate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corrective_harddown`
--
ALTER TABLE `corrective_harddown`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corrective_time`
--
ALTER TABLE `corrective_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corrective_uptime`
--
ALTER TABLE `corrective_uptime`
  ADD PRIMARY KEY (`id`);

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

--
-- Indexes for table `equipment_comment`
--
ALTER TABLE `equipment_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installbase_comment`
--
ALTER TABLE `installbase_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installbase_connectivity`
--
ALTER TABLE `installbase_connectivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installbase_entitlement`
--
ALTER TABLE `installbase_entitlement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_delivery`
--
ALTER TABLE `service_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technical_assesment`
--
ALTER TABLE `technical_assesment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technical_comment`
--
ALTER TABLE `technical_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technical_contact`
--
ALTER TABLE `technical_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commercial_contact`
--
ALTER TABLE `commercial_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corrective_alljobs`
--
ALTER TABLE `corrective_alljobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corrective_asset`
--
ALTER TABLE `corrective_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corrective_comment`
--
ALTER TABLE `corrective_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corrective_fixrate`
--
ALTER TABLE `corrective_fixrate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corrective_harddown`
--
ALTER TABLE `corrective_harddown`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corrective_time`
--
ALTER TABLE `corrective_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corrective_uptime`
--
ALTER TABLE `corrective_uptime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `equipment_comment`
--
ALTER TABLE `equipment_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `installbase_comment`
--
ALTER TABLE `installbase_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `installbase_connectivity`
--
ALTER TABLE `installbase_connectivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `installbase_entitlement`
--
ALTER TABLE `installbase_entitlement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_delivery`
--
ALTER TABLE `service_delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `technical_assesment`
--
ALTER TABLE `technical_assesment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `technical_comment`
--
ALTER TABLE `technical_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `technical_contact`
--
ALTER TABLE `technical_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
