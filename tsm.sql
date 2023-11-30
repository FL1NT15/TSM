-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 06:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`) VALUES
(5, 'Air Jordan 1 Retro High (Smoke Grey)', 'n/p1.jpg', 10000.00),
(6, 'Air Jordan 1 Retro (Bred)', 'n/p2.jpg', 15000.00),
(7, 'Nike Blazer Mid 77 (Vintage White/Black)', 'n/p3.jpg', 5000.00),
(8, 'Air Jordan 6 Retro (DMP)', 'n/p4.jpg', 10000.00),
(9, 'Air Max 97 Summit (White Bleached Coral)', 'n/p5.jpg', 15000.00),
(10, 'Air Force 1 Low (Supreme)', 'n/p6.jpg', 16000.00),
(11, 'Air Jordan 1 Retro High (Bio Hack)', 'n/p7.jpg', 11000.00),
(12, 'Nike LD Waffle Sacai (Black Nylon)', 'n/p8.jpg', 10000.00),
(13, 'Nike Waffle Racer (Off White Black)', 'n/p9.jpg', 11000.00),
(14, 'Nike LeBron 7 Fairfax Away (2020)', 'n/p10.jpg', 6300.00),
(15, 'Nike Air Max 720 Odell Beckham Jr (Desert Ore)', 'n/p11.jpg', 4900.00),
(16, 'Nike Cortez Day of the Dead (2019)', 'n/p12.jpg', 2800.00);

-- --------------------------------------------------------

--
-- Table structure for table `products1`
--

CREATE TABLE `products1` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products1`
--

INSERT INTO `products1` (`id`, `name`, `image`, `price`) VALUES
(1, 'Adidas Superstar Cloud White (Core Black)', 'a/a1.jpg', 3800.00),
(2, 'Adidas Yeezy Boost 350 V2 (Zyon)', 'a/a2.jpg', 16000.00),
(3, 'Adidas Stan Smith1 (White/Green)', 'a/a3.jpg', 3800.00),
(4, 'Adidas NMD R1 (Star Wars Yoga)', 'a/a4.jpg', 3000.00),
(5, 'Adidas Harden Vol 4 (Barbershop)', 'a/a5.jpg', 4000.00),
(6, 'Adidas Continental 80 (White Scarlet Navy)', 'a/a6.jpg', 3500.00),
(7, 'Adidas ZX 4000 4D (Los Angeles Sunset)', 'a/a7.jpg', 8000.00),
(8, 'Adidas Predator Accelerator FG 25 Year Pack Zidane', 'a/a8.jpg', 13600.00),
(9, 'Adidas Nite Jogger Beyonce Ivy Park (Ecru Tint)', 'a/a9.jpg', 8600.00),
(10, 'Adidas I-5923 (Black White Gum)', 'a/a10.jpg', 2400.00),
(11, 'Adidas EQT ADV (Primeknit Dragon Ball Z)', 'a/a11.jpg', 6600.00),
(12, 'Adidas Nizza Hi Alife New York', 'a/a12.jpg', 6600.00);

-- --------------------------------------------------------

--
-- Table structure for table `products2`
--

CREATE TABLE `products2` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products2`
--

INSERT INTO `products2` (`id`, `name`, `image`, `price`) VALUES
(1, 'Reebok Club C 85 (Eames Monotone Pack White)', 'r/r1.png', 7099.00),
(2, 'Reebok Pump Omni Zone II (Chalk)', 'r/r2.png', 9566.00),
(3, 'Reebok Club C (Keith Haring Pop Shop Walls)', 'r/r3.png', 7511.00),
(4, 'Reebok Kamikaze II Low (Spearmint Maximum Orange)', 'r/r4.png', 3926.00),
(5, 'Reebok DMX 1200 Low (White Black Red)', 'r/r5.png', 4027.00),
(6, 'Reebok BB 4000 Mu (BBC Ice Cream Diamond Dollar 2020)', 'r/r6.png', 5034.00),
(7, 'Reebok Zig Kinetica(Ghostbusters Muncher)', 'r/r7.png', 4279.00),
(8, 'Reebok Freestyle Hi (DC Wonder Woman Gold TD)', 'r/r8.png', 2517.00),
(9, 'Reebok Classic Leather (Jurassic Park)', 'r/r9.png', 5990.00),
(10, 'Reebok Experiment 4 Trail Fury (Pyer Moss Fresco)', 'r/r10.png', 15908.00),
(11, 'Reebok Instapump Fury (Distortedd)', 'r/r11.png', 8200.00),
(12, 'Reebok Instapump Fury (Fading Tri-Color White)', 'r/r12.png', 5537.00);

-- --------------------------------------------------------
--
-- Table structure for table `products2`
--

CREATE TABLE `products3` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products3'
--

INSERT INTO `products3` (`id`, `name`, `image`, `price`) VALUES
(1, 'Fila Heritage ', 'r/r1.png', 7099.00),
(2, 'Reebok Pump Omni Zone II (Chalk)', 'r/r2.png', 9566.00),
(3, 'Reebok Club C (Keith Haring Pop Shop Walls)', 'r/r3.png', 7511.00),
(4, 'Reebok Kamikaze II Low (Spearmint Maximum Orange)', 'r/r4.png', 3926.00),
(5, 'Reebok DMX 1200 Low (White Black Red)', 'r/r5.png', 4027.00),
(6, 'Reebok BB 4000 Mu (BBC Ice Cream Diamond Dollar 2020)', 'r/r6.png', 5034.00),
(7, 'Reebok Zig Kinetica(Ghostbusters Muncher)', 'r/r7.png', 4279.00),
(8, 'Reebok Freestyle Hi (DC Wonder Woman Gold TD)', 'r/r8.png', 2517.00),
(9, 'Reebok Classic Leather (Jurassic Park)', 'r/r9.png', 5990.00),
(10, 'Reebok Experiment 4 Trail Fury (Pyer Moss Fresco)', 'r/r10.png', 15908.00),
(11, 'Reebok Instapump Fury (Distortedd)', 'r/r11.png', 8200.00),
(12, 'Reebok Instapump Fury (Fading Tri-Color White)', 'r/r12.png', 5537.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'ian', '123', 'Adrian'),
(2, 'admin', '000', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products1`
--
ALTER TABLE `products1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products2`
--
ALTER TABLE `products2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products3`
--
ALTER TABLE `products3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products1`
--
ALTER TABLE `products1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products2`
--
ALTER TABLE `products2`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products3`
--
ALTER TABLE `products3`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
