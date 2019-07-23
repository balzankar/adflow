-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 27, 2019 at 09:12 AM
-- Server version: 10.2.23-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u374587372_adflo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(19, 'Camera'),
(20, 'Electronics'),
(16, 'Fashion'),
(18, 'Home Appliances'),
(21, 'Men\'s Fashion'),
(17, 'Mobiles'),
(23, 'PC components'),
(22, 'Women\'s Fashion');

-- --------------------------------------------------------

--
-- Table structure for table `manu`
--

CREATE TABLE `manu` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manu`
--

INSERT INTO `manu` (`id`, `name`) VALUES
(8, 'Puma'),
(9, 'Luis Vitton'),
(10, 'Samsung'),
(11, 'MSI'),
(15, 'LG'),
(16, 'Voltas'),
(17, 'Nokia Smartphones'),
(18, 'Honor'),
(19, 'Genric');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `file_name`, `file_type`) VALUES
(8, 'Srping sale 2.PNG', 'image/png'),
(10, 'Banner Ads new.PNG', 'image/png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `buy_price` decimal(25,2) DEFAULT NULL,
  `sale_price` decimal(25,2) NOT NULL,
  `categorie_id` int(11) UNSIGNED NOT NULL,
  `media_id` int(11) DEFAULT 0,
  `date` datetime NOT NULL,
  `manu` int(11) UNSIGNED NOT NULL,
  `keywords` varchar(5000) NOT NULL,
  `url` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `buy_price`, `sale_price`, `categorie_id`, `media_id`, `date`, `manu`, `keywords`, `url`) VALUES
(5, 'Footwear Sale 30% Off', '91', '4000.00', '3599.00', 16, 0, '2019-03-26 05:37:39', 8, 'Addidas, Puma, Nike, Fila, Reebok', 'http://www.flipkart.in'),
(6, 'Women\'s Cloths Summer Sale 30% Off', '13', '1400.00', '749.00', 16, 8, '2019-03-26 05:38:09', 9, 'Luis Vitton, Spring sale, Womens Cloths, Saree, Churidar', 'http://www.amazon.in'),
(7, 'Samsung Galaxy S10+ Rs. 6000 CashBack', '35', '15000.00', '12000.00', 17, 0, '2019-05-07 13:32:24', 10, 'Samsung, Galaxy, Android, Smartphones, Samsung Galaxy S10, Mobiles', 'http://www.samsung.com'),
(8, 'Voltas AC Rs. 4000 Off', '20', '25000.00', '21000.00', 18, 0, '2019-05-07 13:37:16', 16, 'Air Conditioners, Voltas, AC, Cooler, ', 'https://www.myvoltas.com/adjustable-ac-technology?utm_source=google&amp;utm_medium=cpc&amp;utm_campaign=brand&amp;utm_term=adjustable-ac'),
(14, 'LG 4K Television', '10', '40000.00', '30000.00', 18, 0, '2019-06-12 10:38:37', 15, 'LG, 4K, TV, Television', 'http://www.lg.in'),
(15, 'Men\'s Fashion 20% off', '20', '599.00', '399.00', 21, 0, '2019-06-12 10:46:05', 19, 'Shirts, T-Shirts, Jeans, Cargo, Tracks, Men\'s Fashion, Arrow, Peter England, Van Heusan', 'http://www.peterengland.in'),
(16, 'Fossil Watches Rs 1000 Off', '20', '9999.00', '8999.00', 21, 0, '2019-06-12 10:47:28', 19, 'Watches, Wrist watches, Smartwatches, fossil, men\'s fashion, men\'s watches', 'http://www.fossil.in'),
(17, '5% off on Intel Processors', '100', '16999.00', '15999.00', 23, 0, '2019-06-12 10:48:55', 19, 'i3, i5, i7, Intel, amd, processors', 'http://www.intel.in'),
(18, 'Honor Play', '22', '19999.00', '14999.00', 17, 0, '2019-06-12 10:50:08', 18, 'Honor, Play, Smartphone, mobile, Huawei, honor play', 'http://www.honor.com');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(25,2) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `product_id`, `qty`, `price`, `date`) VALUES
(7, 5, 4, '14396.00', '2019-03-26'),
(8, 7, 8, '96000.00', '2019-05-13'),
(9, 7, 1, '12000.00', '2019-06-13'),
(10, 7, 1, '1.00', '2019-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `user` varchar(60) NOT NULL,
  `retailer` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `name`, `user`, `retailer`, `time`) VALUES
(1, 'Samsung Galaxy s10', 'Balzankar', 'Amazon India', '2019-06-12 07:26:15'),
(2, 'Fashion', 'Balzankar', 'Amazon India', '2019-06-12 08:17:48'),
(3, 'fashion', 'Admin', 'Amazon India', '2019-06-12 08:38:21'),
(4, 'voltas', 'Admin', 'Flipkart India', '2019-06-12 08:39:48'),
(5, 'Smartphone', 'Akshay', 'Amazon India', '2019-06-12 08:45:18'),
(6, 'Honor', 'Balzankar', 'Amazon India', '2019-06-12 10:51:22'),
(7, 'Honor play', 'Balzankar', 'Amazon India', '2019-06-12 10:51:48'),
(8, 'Huawei', 'Balzankar', 'Amazon India', '2019-06-12 10:52:17'),
(9, 'Shirts', 'Balzankar', 'Flipkart India', '2019-06-12 10:53:11'),
(10, 'Saree', 'irin', 'Flipkart India', '2019-06-12 10:54:51'),
(12, 'Phone', 'Akshay', 'Amazon India', '2019-06-13 07:18:46'),
(14, 'Saree', 'Balzankar', 'Amazon India', '2019-06-13 08:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(11) NOT NULL,
  `image` varchar(255) DEFAULT 'no_image.jpg',
  `status` int(1) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `user_level`, `image`, `status`, `last_login`, `email`) VALUES
(1, 'Bal Zankar', 'Balzankar', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'xbiea1rr1.jpg', 1, '2019-06-13 08:02:16', ''),
(2, 'Haritha', 'haritha', 'e16d0c08831a532d5b90ca9f7ac93e9b18d1e4ab', 2, 'm9710rud2.png', 1, '2019-06-13 08:05:55', ''),
(3, 'Akshay', 'Akshay', '4a9c198ddfc9a400d75029e4b6bc7ac7fdf23d20', 3, 'gd52cz2h3.jpg', 1, '2019-06-13 08:03:23', ''),
(4, 'Irin', 'irin', '34d304d7e5a769572309c01e8d56ac93c2924d2a', 1, 'no_image.jpg', 1, '2019-06-13 07:12:18', ''),
(5, 'Admin', 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'no_image.jpg', 1, '2019-06-26 17:08:09', 'admin@adflow.in');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(150) NOT NULL,
  `group_level` int(11) NOT NULL,
  `group_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `group_name`, `group_level`, `group_status`) VALUES
(1, 'Admin', 1, 1),
(2, 'Advertiser', 2, 1),
(3, 'User', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `manu`
--
ALTER TABLE `manu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `categorie_id` (`categorie_id`),
  ADD KEY `media_id` (`media_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_level` (`user_level`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `group_level` (`group_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `manu`
--
ALTER TABLE `manu`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `SK` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`user_level`) REFERENCES `user_groups` (`group_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
