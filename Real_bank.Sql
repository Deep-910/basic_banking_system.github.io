
-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: November 12, 2022 at 09:15 pM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Sahil kapoor', 'Shail11@gmail.com', 50000),
(2, 'Karan Advani', 'karanadvani@gmail.com', 30000),
(3, 'Sneha Shah', 'shah911@gmail.com', 40000),
(4, 'priya rao', 'priya_rao12@gmail.com', 50000),
(5, 'Yashika Yadav', 'yashikaYadav12@gmail.com', 40000),
(6, 'Diyu thakur', 'Diyu56@gmail.com', 30000),
(7, 'Deepika', 'padukone@gmail.com', 50000),
(8, 'Armaan gawada', 'armga46@gmail.com', 40000),
(9, 'Nikhil thakur', 'thakur123@gmail.com', 30000),
(10, 'tannu', 'tannu@gmail.com', 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

