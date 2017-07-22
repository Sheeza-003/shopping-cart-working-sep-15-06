-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2016 at 01:46 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `shipping` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `shipping`, `quantity`, `image`) VALUES
(1, 'ABC Book', 3, 'this is a book''s descrtiption', 3, 5, 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcS9JIqaZOXkKbn5OiCGYTzGf34e_rixaNVJ0nQpDEhWWBhZtksw'),
(2, 'Earl Tea', 4.9, 'this is earl tea''s description', 7, 15, 'http://www.indianteacompany.co.uk/Images/Lipton/Earl_Grey_box_100.jpg'),
(3, 'Novel Best seller', 5, 'This is the best seller novel of 2008 writen by abc author', 0, 3, 'http://cdn.hbowatch.com/wp-content/uploads/2012/01/A-Game-of-Thrones-book-Cover-NOvel.jpg'),
(4, 'Best Seller novel', 5, 'This is the best selling novel of 2008, its writen by abc author.', 2, 1, 'http://cdn.hbowatch.com/wp-content/uploads/2012/01/A-Game-of-Thrones-book-Cover-NOvel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE IF NOT EXISTS `user_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `location` text NOT NULL,
  `file` text NOT NULL,
  `status` text NOT NULL,
  `comments` text NOT NULL,
  `user_name` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`id`, `fname`, `lname`, `email`, `location`, `file`, `status`, `comments`, `user_name`, `product_id`, `quantity`, `product`) VALUES
(27, '', '', '', '', '', '', '', 'ali', 1, 7, '[Earl Tea x1],[Novel Best seller x1],[Novel Best seller x1],[Novel Best seller x1],[Novel Best seller x1],[Novel Best seller x1],[Novel Best seller x1],[Novel Best seller x1],[Novel Best seller x1],[Novel Best seller x1],[Novel Best seller x1],[Novel Best seller x1],[Novel Best seller x1],[Novel Best seller x1]');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` text NOT NULL,
  `user_pass` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_name`, `user_pass`, `email`) VALUES
(18, 'Sarah', 'sarah', 'sarahkhan@yahoo.com'),
(19, 'Ahmed Khan', 'ahmed', 'ahmed@yahoo.com'),
(20, 'Rabia Ali', 'rabia', 'rabiakhan@gmail.com'),
(22, 'new user', 'newuser', 'newuser@yahoo.com'),
(23, 'raheel', 'answer123', 'raheelthe1@yahoo.com'),
(24, 'nusrat', 'nusrat', 'alnusrat@gmail.com'),
(25, 'junaid', 'junaid', 'junais@jsk.com'),
(26, 'ali', 'ali', 'ali@gmail.com'),
(27, 'khan', 'khan', 'khan@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
