-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 11:25 AM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestionstockbiblio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
create Database gestionstockbiblio;
use gestionstockbiblio;

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `isbn` varchar(15) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `quantite` int(10) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `thumbnailUrl` varchar(200) DEFAULT NULL,
  `id_categorie` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`isbn`, `title`, `author`, `description`, `quantite`, `price`, `thumbnailUrl`, `id_categorie`) VALUES
('aa', 'KNKSDQ', 'apo', 'zzaz', 2, '1.00', '', 6),
('zaza', '121', 'SQDJK', 'sdqs', 2, '1.00', 'section 1.png', 5),
('1933988673', 'Specification by Example', 'Gojko Adzic', 'New web applications require engaging user-friendly interfaces   and the cooler, the better. With Flex 3, web developers at any skill level can create high-quality, effective, and interactive Rich Internet Applications (RIAs) quickly and easily. Flex removes the complexity barrier from RIA development by offering sophisticated tools and a straightforward programming language so you can focus on what you want to do instead of how to do it. And now that the major components of Flex are free and open-source, the cost barrier is gone, as well!    Flex 3 in Action is an easy-to-follow, hands-on Flex tutorial.', 73, '20.00', 'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/adzic.jpg', 4),
('1935182420', 'Flex 4 in Actions', 'Tariq Ahmed', 'Using Flex, you can create high-quality, effective, and interactive Rich Internet Applications (RIAs) quickly and easily. Flex removes the complexity barrier from RIA development by offering sophisticated tools and a straightforward programming language so you can focus on what you want to do instead of how to do it', 22, '33.00', '', 4),
('1884777384', 'Coffeehouse', 'Levi Asherr', 'Coffeehouse is an anthology of stories, poems and essays originally published on the World Wide Web.', 15, '10.00', '', 7),
('1933988592', 'Team Foundation Server 2008 in Action', 'Jamil Azher', 'In complex software projects, managing the development process can be as critical to success as writing the code itself. A project may involve dozens of developers, managers, architects, testers, and customers, hundreds of builds, and thousands of opportunities to get off-track. ', 70, '8.00', 'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/azher.jpg', 7),
('11222300', 'richesseAb', 'Christopher AllenA', 'NDJN', 3, '3.00', 'saadBooking.png', 6),
('DSQ', 'DS', 'AZAZD', 'DSQ', 2, '2.00', 'saadBooking.png', 5),
('193398886N', 'richesse', 'Christopher Allen', 'AAA', 3, '4.00', 'family-with-baby-girl-choosing-car-car-salon.jpg', 5),
('193398886NA', 'richesseopaaaaa', 'SQDJNSQ', 'SDQ', 3, '3.00', '', 9),
('1213232132', 'pppoapmmspxmpa', 'saad chaaay', 'apaaaah', 5, '5.00', '20C56FE2-C978-4D47-863E-FBE2F25A5954.JPG', 7),
('112212', 'ottmanlife', 'otman', 'dsqsqdnn', 4, '3.00', 'image037.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(100) NOT NULL,
  `name_categorie` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `name_categorie`) VALUES
(3, 'Web Development'),
(4, 'Microsoft .NET'),
(5, 'Miscellaneous'),
(6, 'Software Engine'),
(7, 'Software Engineering'),
(8, 'Internet'),
(9, 'math'),
(10, 'ezz'),
(12, 'ezzappma'),
(16, 'ezzappmal'),
(15, 'ezzappmam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
