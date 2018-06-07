-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 07, 2018 at 11:49 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cat_db_t`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_lithuanian_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `pid`) VALUES
(1, 'cat1', 0),
(2, 'cat2', 0),
(18, 'subsubsubsub-cat', 17),
(17, 'subsubsub-cat', 16),
(16, 'subsub-cat', 15),
(15, 'sub-cat', 1),
(19, 'subcub-cat2', 16),
(20, 'sub-cat2', 2),
(21, 'subsub-cat2', 20),
(22, 'subsub2-cat2', 20),
(23, 'subsubsub-cat2', 21),
(24, 'subsubsub-cat2', 21),
(25, 'subsubsub-cat2', 21),
(26, 'subsubsub-cat2', 21),
(27, 'subsubsub-cat2', 21),
(28, 'huhu', 26),
(29, 'huhu', 26),
(30, 'huhu', 26),
(31, 'subbbbbb-cat', 28),
(32, 'sub-cat2', 15),
(33, 'a', 17);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
