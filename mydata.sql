-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 07:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(10) NOT NULL,
  `emp_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `emp_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `emp_surname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `emp_birthday` date NOT NULL,
  `emp_adr` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `emp_skill` text NOT NULL,
  `emp_tel` varchar(20) NOT NULL,
  `emp_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_title`, `emp_name`, `emp_surname`, `emp_birthday`, `emp_adr`, `emp_skill`, `emp_tel`, `emp_status`) VALUES
(88, 'นาย', 'AAAAA', 'AAAAA', '2023-03-13', '1.ยกเลิกหมายเลขทรศ', '', '029518****', 'Inactive'),
(89, 'นาง ', 'BBBBBBB', 'BBBBBBB', '2023-03-14', '1.ยกเลิกหมายเลขทรศ', '', '02561****', 'Active'),
(90, 'นาย', 'CCCCCCC', 'CCCCCCCC', '2023-03-14', '1.ยกเลิกหมายเลขทรศ', 'ยกเลิก FIber ด้วย', '02991****', 'Active'),
(91, 'นาย ', 'DDDDD', 'DDDDD', '2023-03-14', '3.Fiber', '', '2580J6****', 'Active'),
(92, 'นาย', 'EEEEEE', 'EEEEEEE', '2023-04-13', '1.ยกเลิกหมายเลขทรศ', '', '0258****', 'Active'),
(93, 'นาย ', 'FFFFFFF', 'FFFFF', '2023-03-14', '1.ยกเลิกหมายเลขทรศ', '', '0295****', 'Active'),
(94, 'นางสาว', 'GGGGG', 'GGGGGG', '2023-03-14', '4.IP PHONE Fiber', '', '0298****', 'Active'),
(95, 'นาง ', 'HHHHHH', 'HHHHH', '2023-03-14', '1.ยกเลิกหมายเลขทรศ', '', '0257****', 'Active'),
(96, 'นาง ', 'IIIIIII', 'IIIIIII', '2023-03-14', '1.ยกเลิกหมายเลขทรศ', '', '02574****', 'Active'),
(97, 'นาย ', 'JJJJJJJ', 'JJJJJJj', '2023-03-14', '1.ยกเลิกหมายเลขทรศ', '', '0258****', 'Active'),
(98, 'นาย ', 'KKKKKK', 'KKKKKKK', '2023-03-14', '1.ยกเลิกหมายเลขทรศ', '', '02980****', 'Inactive'),
(99, 'นาง ', 'LLLLLL', 'LLLLLL', '2023-03-14', '2.IP PHONE Sim', '', '02954****', 'Active'),
(100, 'นาย ', 'MMMMM', 'MMMMMM', '2023-03-14', '1.ยกเลิกหมายเลขทรศ', '', '02952****', 'Inactive'),
(101, 'นาย ', 'NNNNNN', 'NNNNNN', '2023-03-14', '1.ยกเลิกหมายเลขทรศ', '', '02190****', 'Inactive'),
(102, 'นาย ', 'OOOOOO', 'OOOOOO', '2023-03-14', '3.Fiber', '', '2527J****', 'Inactive'),
(103, 'นางสาว', 'PPPPPP', 'PPPPPP', '2023-03-14', '1.ยกเลิกหมายเลขทรศ', '', '02586****', 'Inactive'),
(104, 'นางสาว', 'QQQQQ', 'QQQQQ', '2023-03-14', '4.IP PHONE Fiber', '', '02587****', 'Inactive'),
(105, 'นาง ', 'TTTTTT', 'TTTTTT', '2023-03-14', '1.ยกเลิกหมายเลขทรศ', '', '02911****', 'Inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
