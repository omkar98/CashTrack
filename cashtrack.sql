-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2018 at 03:11 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cashtrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Enterprise'),
(2, 'Healthcare'),
(3, 'Foodtech'),
(4, 'Transportation');

-- --------------------------------------------------------

--
-- Table structure for table `investments`
--

CREATE TABLE `investments` (
  `id` int(11) NOT NULL,
  `my_text_dates` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `category` text NOT NULL,
  `sub_category` text NOT NULL,
  `name` text NOT NULL,
  `raised` float NOT NULL,
  `area` text NOT NULL,
  `round` text NOT NULL,
  `investors` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investments`
--

INSERT INTO `investments` (`id`, `my_text_dates`, `date`, `category`, `sub_category`, `name`, `raised`, `area`, `round`, `investors`, `link`) VALUES
(12, '', '2018-06-11', 'Enterprise', 'Secondary Data-Storage', 'Cohesity', 250, '', 'Series D', 'SoftBank', 'https://techcrunch.com/2018/06/11/softbank-vision-fund-leads-250m-series-d-for-cohesitys-hyperconverged-data-platform/'),
(13, '', '2018-06-12', 'Enterprise', 'Database Software', 'Yugabyte', 16, '', 'Series A', 'Lightspeed Venture Partners\nDell Technologies Capital', 'https://techcrunch.com/2018/06/12/yugabytes-new-database-software-rakes-in-16-million-so-developers-can-move-to-any-cloud/'),
(14, '', '2018-06-14', 'Enterprise', 'Collaboration platform for scientists', 'Benchling', 14.5, '', 'Series B', 'Benchmark Capital', 'https://techcrunch.com/2018/06/14/benchling-raises-14-5m-to-help-streamline-collaboration-among-scientists/'),
(15, '', '2018-06-12', 'Enterprise', 'Supply Chain Sourcing Platform', 'LevaData', 12, '', 'Series B', 'Tola Capital', 'http://www.finsmes.com/2018/06/cognitive-sourcing-platform-levadata-raises-12m-in-series-b.html'),
(16, '', '2018-06-13', 'HealthCare', 'Infant Probiotic', 'Evolve Biosystems', 40, '', 'Series C', 'Bill & Melinda Gates Foundation\n Horizon Ventures', 'https://www.pehub.com/vc-journal/evolve-biosystems-uc-davis-baby-probiotic-spinout-going-global-new-40m-financing/'),
(17, '', '2018-06-12', 'HealthCare', 'medical device for lung disease', 'Broncus Technologies, Inc', 15, '', 'Series A', 'Intuitive Surgical', 'http://www.finsmes.com/2018/06/broncus-medical-closes-15m-series-a-funding.html'),
(18, '', '2018-06-14', 'HealthCare', 'brain health', 'Mindstrong Health ', 15, '', 'Series B', 'Bezos Expeditions', 'https://www.businesswire.com/news/home/20180614005130/en/Mindstrong-Health-Announces-15M-Series-Financing-Business'),
(19, '', '2018-06-13', 'HealthCare', 'prenatal and postpartum healthcare app', 'Cleo ', 10.5, '', 'Series A', 'Greylock Partners', 'http://www.finsmes.com/2018/06/cleo-raises-10-5m-in-series-a-funding.html'),
(20, '', '2018-06-14', 'FoodTech', 'salad robot', 'Chowbotics ', 11, '', 'Series A', 'Foundry Group and Techstars', 'https://techcrunch.com/2018/06/13/chowbotics-raises-11-million-to-move-its-robot-beyond-salads/'),
(21, '', '2018-06-12', 'Transportation', 'shared electric scooters', 'Skip Scooters ', 25, '', 'Series A', 'Menlo Ventures\n Accel Partners \n Y Combinator', 'https://www.theinformation.com/articles/scooter-mania-continues-as-skip-nabs-25-million-bird-goes-to-china?shared=c693980705d5aa5e'),
(22, '', '2018-06-11', 'Others', 'brain machine interface', 'Paradromics, Inc. ', 7, 'San Jose, CA', 'Seed', 'Synergy Ventures \nArkitekt Ventures', 'http://www.finsmes.com/2018/06/brain-machine-interface-company-paradromics-raises-in-7m-seed-funding.html');

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `series_id` int(11) NOT NULL,
  `series_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`series_id`, `series_type`) VALUES
(1, 'Series A'),
(2, 'Series B'),
(3, 'Series C'),
(4, 'Series D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `investments`
--
ALTER TABLE `investments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`series_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `investments`
--
ALTER TABLE `investments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `series_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
