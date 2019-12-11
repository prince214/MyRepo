-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2018 at 05:28 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_email`, `user_password`, `user_age`, `user_mobile`) VALUES
(1, 'jai', 'jaichand53@gmail.com', '123456', 11, 1234567890),
(2, 'john', 'john@gmail.com', '123456', 11, 1234567890),
(3, 'ajay', 'ajay@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 12, 1234567890),
(4, 'sdasd', 'sfasd@dfsd.dssd', '202cb962ac59075b964b07152d234b70', 12, 2147483647),
(5, 'BCVSDGN', 'admin@GMAIL.COM', 'e6e061838856bf47e1de730719fb2609', 23, 453456),
(6, 'ash', 'ash@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 12, 2147483647),
(13, 'sufi', 'sufi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 12, 1234567890),
(14, 'alvert', 'alvert@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 12, 1234567890),
(16, 'vijay', 'vijay@gmail.com', '202cb962ac59075b964b07152d234b70', 12, 1234567891),
(18, 'ramesh', 'ramesh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 30, 1234567891),
(19, 'rock', 'rock@gmail.com', '202cb962ac59075b964b07152d234b70', 12, 2147483647),
(20, 'asf', 'fghf@asdf.gfh', 'd4b2758da0205c1e0aa9512cd188002a', 45, 1234567891),
(21, '454645', '', 'd41d8cd98f00b204e9800998ecf8427e', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
