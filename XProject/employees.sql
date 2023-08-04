-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 04, 2023 at 10:43 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employees` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employees` (`id`, `name`, `address`, `salary`) VALUES
(1, 'Patrick', 'Suite 36', '1518'),
(2, 'Judye', 'Suite 99', '3892'),
(3, 'Wanda', 'Suite 5', '1484'),
(4, 'Clotilda', 'PO Box 43513', '1606'),
(5, 'Winn', 'Room 674', '4853'),
(6, 'Fidelia', 'Suite 74', '4212'),
(7, 'Riley', 'Room 320', '4655'),
(8, 'Eduino', 'Suite 15', '2384'),
(9, 'Siouxie', 'Apt 180', '2213'),
(10, 'Ernie', 'Apt 984', '1809'),
(11, 'Janene', 'Room 1253', '1381'),
(12, 'Lorrayne', 'Apt 688', '2576'),
(13, 'Lewie', 'PO Box 93280', '2017'),
(14, 'Minni', 'Room 1670', '1688'),
(15, 'Herby', 'Room 413', '1373'),
(16, 'Laurianne', 'Apt 1133', '4190'),
(17, 'Julian', 'Room 1519', '4552'),
(18, 'Cherey', 'PO Box 20808', '3788'),
(19, 'Agneta', 'Suite 40', '4451'),
(20, 'Augie', 'Suite 9', '1711'),
(21, 'Matilda', '15th Floor', '4817'),
(22, 'Joceline', 'PO Box 12446', '4935'),
(23, 'Bertrando', 'Suite 11', '2739'),
(24, 'Stern', '2nd Floor', '1895'),
(25, 'Sheilah', 'Apt 1694', '4900'),
(26, 'Salvidor', 'PO Box 82232', '2476'),
(27, 'Isadora', 'PO Box 47113', '3741'),
(28, 'Latrena', 'PO Box 68091', '1507'),
(29, 'Debera', 'Room 334', '1062'),
(30, 'Petra', 'Suite 82', '1634'),
(31, 'Tull', '18th Floor', '1697'),
(32, 'Henderson', 'PO Box 43174', '3487'),
(33, 'Madeleine', 'Suite 61', '2101'),
(34, 'Liv', 'Room 1272', '2943'),
(35, 'Jedidiah', '4th Floor', '4514'),
(36, 'Will', 'Room 341', '1531'),
(37, 'Faith', 'PO Box 59699', '1639'),
(38, 'Petronilla', 'Room 1320', '3692'),
(39, 'Gerald', 'Apt 1117', '2547'),
(40, 'Timmy', 'Apt 362', '3929'),
(41, 'Teri', 'PO Box 77677', '1547'),
(42, 'Shirleen', 'Suite 51', '3026'),
(43, 'Karon', '4th Floor', '1150'),
(44, 'Sydel', 'PO Box 90750', '4939'),
(45, 'Paulie', 'Suite 83', '2285'),
(46, 'Rosanna', 'Apt 564', '3915'),
(47, 'Craggy', 'PO Box 39783', '1380'),
(48, 'Kay', 'Suite 30', '1482'),
(49, 'Artus', 'Apt 813', '1963'),
(50, 'Gabbie', 'Suite 73', '4721');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
