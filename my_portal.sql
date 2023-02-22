-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 10:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `image`) VALUES
(1, 'student', NULL, NULL),
(2, 'alumni', NULL, NULL),
(3, 'parent', NULL, NULL),
(4, 'faculty', NULL, NULL),
(5, 'admin', NULL, NULL),
(6, 'library', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `url`, `image`) VALUES
(1, 'AIMS Student Portal', 'This module is exclusively for students only', 'https://aims.lpu.edu.ph/lpumnl/students/', NULL),
(2, 'AIMS Parent Portal', 'Parent Module', 'https://aims.lpu.edu.ph/lpumnl/login/index.php?l=Nw%3D%3D&t=UGFyZW50IE1vZHVsZQ%3D%3', NULL),
(3, 'AIMS Faculty Portal', 'Faculty Management Module', 'https://aims.lpu.edu.ph/lpumnl/faculty/', NULL),
(4, 'myLPU e-Learning Portal', 'Provides powerful tools to deliver engaging contents and activities for online learning.', 'https://lpu.mrooms.net/', NULL),
(5, 'Campus Mail', 'Microsoft 365 account login', 'https://login.microsoftonline.com/', NULL),
(6, 'Employee Portal', 'P&A Grant Thornton', 'https://dorado.grantthorntonsolutions.ph/1.0.8.1/Account/Login', NULL),
(7, 'Online Public Access Catalog', 'Search for over 70,000 books, 5,000 CDs/DVDs, 1,000 periodical articles, 200 graduate theses and 600 eBooks within the library’s collection.', 'https://library-opac.lpu.edu.ph/', 'images/follett.png'),
(8, 'ScienceDirect', 'Multi-disciplinary full-text scientific database offering journal articles and book chapters from nearly 2,500 journals and more than 30,000 book chapters.', 'https://www.sciencedirect.com/', 'images/science-direct.png'),
(9, 'Emerald Insight', 'Dedicated research platform for Emerald publications in Marketing; Public Policy and Environmental Management; and Tourism and Hospitality.', 'https://www.emerald.com/insight/', 'images/emerald.jpeg'),
(10, 'Gale Academic One File', '<strong>Academic OneFile</strong> has millions of peer-reviewed full-text multidisciplinary content in PDF and HTML.<br><p><strong>Gale eBooks</strong> has encyclopedias and specialized reference sources for multidisciplinary research. </p>', 'https://bit.ly/GaleLPU', 'images/gale.png'),
(11, 'Mendeley', 'A reference management tool that is used to manage citations (i.e. books, articles, and many more) which can be uploaded to the program and imported onto a Word document.', 'https://mendeley.com/', 'images/mendeley.png'),
(12, 'Scopus', 'The largest abstract and citation database of peer-reviewed literature: scientific journals, books and conference proceedings.', 'https://www.scopus.com/', 'images/Scopus.png'),
(13, 'AORA', '<strong>Ask Online Reference Assistance</strong><br>Students may ask our virtual librarians their concerns about but not limited to library services, collection, and operations.', 'https://bit.ly/ARCAORA', NULL),
(14, 'Thesis and Research Assistance', '<strong>Have concerns regarding your thesis?</strong> Need to access our databases? How to use them? APA citation? Additional resources? Our communication channels are always open for your concerns! Simply leave us a message and your librarians will serve.', 'https://www.facebook.com/lpumanilalibrary', NULL),
(15, 'Virtual Help Desk', '<strong>Need advise with your assignments, projects, lessons?</strong><br>No problem! Students get the privilege of inviting a librarian to their study session via virtual communication channels. We will do our utmost to aid you in your needs.', 'https://bit.ly/ARCVHelpDesk', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE `service_category` (
  `id` int(11) NOT NULL,
  `service` int(11) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_category`
--

INSERT INTO `service_category` (`id`, `service`, `category`) VALUES
(1, 1, 1),
(2, 2, 3),
(3, 3, 4),
(4, 4, 1),
(5, 5, 1),
(6, 5, 4),
(7, 5, 5),
(8, 5, 2),
(9, 6, 4),
(10, 6, 5),
(11, 7, 6),
(12, 8, 6),
(13, 9, 6),
(14, 10, 6),
(15, 11, 6),
(16, 12, 6),
(17, 13, 6),
(18, 14, 6),
(19, 15, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_category`
--
ALTER TABLE `service_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service` (`service`),
  ADD KEY `category` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
