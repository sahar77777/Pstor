-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 08:21 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'گردنبند یاقوت آبی', '<p>این گردنبند منحصر به فرد ساخته شده از بهترین محصولات ضد زنگ، ایده آل برای کسانی که به دنبال زیورآلات منحصر به فرد هستند.</p>\r\n<h3>ویژگی ها</h3>\r\n<ul>\r\n<li>بسیار سبک</li>\r\n<li>با دوام</li>\r\n<li>مناسب برای تمام گروه سنی</li> \r\n<li>مناسب برای کادو دادن در بهترین روز های خود</li>\r\n</ul>', '35000.00', '0.00', 10, 'watch.jpg', '2022-03-13 17:55:22'),
(2, 'گردنبند مروارید', ' <p>این گردنبند منحصر به فرد ساخته شده از بهترین محصولات ضد زنگ، ایده آل برای کسانی که به دنبال زیورآلات منحصر به فرد هستند.</p>\r\n<h3>ویژگی ها</h3>\r\n<ul>\r\n<li>بسیار سبک</li>\r\n<li>با دوام</li>\r\n<li>مناسب برای تمام گروه سنی</li> \r\n<li>مناسب برای کادو دادن در بهترین روز های خود</li', '20000.00', '0.00', 34, 'wallet .jpg', '2022-03-13 18:52:49'),
(3, 'گردنبند ', '<p>این گردنبند منحصر به فرد ساخته شده از بهترین محصولات ضد زنگ، ایده آل برای کسانی که به دنبال زیورآلات منحصر به فرد هستند.</p>\r\n<h3>ویژگی ها</h3>\r\n<ul>\r\n<li>بسیار سبک</li>\r\n<li>با دوام</li>\r\n<li>مناسب برای تمام گروه سنی</li> \r\n<li>مناسب برای کادو دادن در بهترین روز های خود</li>\r\n', '50000.00', '0.00', 23, 'headphones.jpg', '2022-03-13 18:47:56'),
(4, 'انگشتر زیبا', '', '98000.00', '0.00', 7, 'camera.jpg', '2022-03-13 17:42:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
