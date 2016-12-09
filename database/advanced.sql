-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2016 at 01:02 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `advanced`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1478147450),
('m130524_201442_init', 1478147453);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `us_detail_data`
--

CREATE TABLE IF NOT EXISTS `us_detail_data` (
`id` int(11) NOT NULL,
  `state` varchar(200) NOT NULL,
  `white` float NOT NULL,
  `black` float NOT NULL,
  `hispanic` float NOT NULL,
  `state_name` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `us_detail_data`
--

INSERT INTO `us_detail_data` (`id`, `state`, `white`, `black`, `hispanic`, `state_name`) VALUES
(1, 'US-AL', 73.3, 58.3, 28.6, 'Alabama'),
(2, 'US-AK', 54.7, 42.3, 22.7, 'Alaska'),
(3, 'US-AZ', 51.1, 53.6, 31.2, 'Arizona'),
(4, 'US-AR', 75.6, 80, 79.9, 'Arkansas'),
(5, 'US-CA', 45.6, 55.7, 24.6, 'California'),
(6, 'US-CO', 45.2, 45.7, 41.2, 'Colorado'),
(7, 'US-CT', 62.4, 61.4, 44.1, 'Connecticut'),
(8, 'US-DE', 69.3, 68.9, 72.3, 'Delaware'),
(9, 'US-FL', 64.2, 49.4, 38.9, 'Florida'),
(10, 'US-GA', 71.1, 60.4, 31.3, 'Georgia'),
(11, 'US-HI', 43.4, 52.4, 54.4, 'Hawai'),
(12, 'US-ID', 52.5, 49.9, 36.8, 'Idaho'),
(13, 'US-IL', 66.2, 80.1, 33.2, 'Illinois'),
(14, 'US-IN', 72.1, 73.8, 38.8, 'Indiana'),
(15, 'US-IA', 62.8, 76.6, 42.5, 'Iowa'),
(16, 'US-KS', 58.7, 72.1, 41, 'Kansas'),
(17, 'US-KY', 94.6, 94.9, 89.5, 'Kentucky'),
(18, 'US-LA', 36.8, 49.7, 20.4, 'Louisiana'),
(19, 'US-ME', 75.8, 73, 56, 'Maine'),
(20, 'US-MD', 59.9, 57.1, 22.1, 'Maryland'),
(21, 'US-MA', 65.9, 50.6, 62, 'Massachusetts'),
(22, 'US-MI', 64.7, 78.2, 38.1, 'Michigan'),
(23, 'US-MN', 54.6, 61.5, 31.5, 'Minnesota'),
(24, 'US-MS', 77, 72.6, 83, 'Mississippi'),
(25, 'US-MO', 75.5, 84.6, 29.8, 'Missouri'),
(26, 'US-MT', 52.5, 48, 55, 'Montana'),
(27, 'US-NE', 58.5, 84.1, 32.2, 'Nebraska'),
(28, 'US-NV', 0, 0, 0, 'Nevada'),
(29, 'US-NH', 65.8, 69, 72, 'New Hampshire'),
(30, 'US-NJ', 59.7, 56.4, 37.2, 'New Jersey'),
(31, 'US-NM', 43.1, 40.2, 34.5, 'New Mexico'),
(32, 'US-NY', 64, 50.9, 35.8, 'New York'),
(33, 'US-NC', 69.2, 67, 33.5, 'North Carolina'),
(34, 'US-ND', 57, 54, 44, 'North Dakota'),
(35, 'US-OH', 67.9, 72.3, 29.6, 'Ohio'),
(36, 'US-OK', 68.2, 77.1, 29.5, 'Oklahoma'),
(37, 'US-OR', 56.8, 50.7, 39.5, 'Oregon'),
(38, 'US-PA', 64.1, 74, 77.9, 'Pennsylvania'),
(39, 'US-RI', 73, 63, 33.8, 'Rhode Island'),
(40, 'US-SC', 71.1, 60.8, 25.4, 'South Carolina'),
(41, 'US-SD', 54.2, 50, 47, 'South Dakota'),
(42, 'US-TN', 76.3, 71.9, 17.9, 'Tennessee'),
(43, 'US-TX', 54.9, 69.9, 29.1, 'Texas'),
(44, 'US-UT', 30.6, 38, 34.2, 'Utah'),
(45, 'US-VT', 64.1, 65, 60, 'Vermont'),
(46, 'US-VA', 62.3, 67.9, 72, 'Virginia'),
(47, 'US-WA', 60.5, 58.6, 36.2, 'Washington'),
(48, 'US-WV', 79.6, 60.8, 65, 'West Virginia'),
(49, 'US-WI', 58, 97, 35.1, 'Wisconsin'),
(50, 'US-WY', 48.9, 52, 64.5, 'Wyoming');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `us_detail_data`
--
ALTER TABLE `us_detail_data`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `us_detail_data`
--
ALTER TABLE `us_detail_data`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
