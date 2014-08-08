-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2014 at 01:00 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `labamba_work`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_list`
--

CREATE TABLE IF NOT EXISTS `food_list` (
  `id` int(10) NOT NULL,
  `food` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `modify` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `vat` float NOT NULL,
  `food_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_list`
--

INSERT INTO `food_list` (`id`, `food`, `catagory`, `modify`, `price`, `vat`, `food_type`) VALUES
(73, 'Juice Bar', 'Fruit Salad', '', 150, 15, 'non_food'),
(74, 'Juice Bar', 'Kasmiri Faluda', '', 180, 15, 'non_food'),
(75, 'Fastfood', 'Chicken Nugget', '', 120, 15, 'food'),
(78, 'Fastfood', 'Chicken wings with french fry', '', 120, 15, 'food'),
(201, 'Fastfood', 'Chicken Cheese Burger', '', 130, 15, 'food'),
(202, 'Fastfood', 'Beef Cheese Burger', '', 130, 15, 'food'),
(203, 'Fastfood', 'Chicken Burger', '', 110, 15, 'food'),
(204, 'Fastfood', 'Beef Burger', '', 110, 15, 'food'),
(205, 'Fastfood', 'Chicken Chili Pizza', '', 120, 15, 'food'),
(206, 'Fastfood', 'Beef Chili Pizza', '', 120, 15, 'food'),
(207, 'Fastfood', 'Chicken roll', '', 50, 15, 'food'),
(208, 'Fastfood', 'Chocolate Donut', '', 50, 15, 'food'),
(209, 'Cake/Muffin', 'Pastry chocolate/vanilla/blackforest', '', 60, 15, 'food'),
(210, 'Cake/Muffin', 'Plain Cake', '', 150, 15, 'food'),
(211, 'Cake/Muffin', 'Fruit Cake', '', 180, 15, 'food'),
(212, 'Fastfood', 'Arabiyan Sweet', '', 20, 15, 'food'),
(213, 'Fastfood', 'Chocolate Rice Ball', '', 50, 15, 'food'),
(214, 'Fastfood', 'Pudding', '', 50, 15, 'food'),
(215, 'Fastfood', 'French fry', '', 100, 15, 'food'),
(220, 'Cake/Muffin', 'Ready made Birthday cake', '', 400, 0, 'food'),
(221, 'Cake/Muffin', 'Order Cake Vanilla', '', 450, 0, 'food'),
(222, 'Cake/Muffin', 'Order Cake Chocolate ', '', 500, 0, 'food'),
(223, 'Cake/Muffin', 'Order Cake Blackforest', '', 600, 0, 'food'),
(101, 'Juice Bar', 'Orange Juice', '', 150, 15, 'non_food'),
(102, 'Juice Bar', 'Pineapple Juice', '', 130, 15, 'non_food'),
(103, 'Juice Bar', 'Apple & mint', '', 130, 15, 'non_food'),
(104, 'Juice Bar', 'Cucumber & Apple', '', 130, 15, 'non_food'),
(105, 'Juice Bar', 'Apple Juice', '', 130, 15, 'non_food'),
(106, 'Juice Bar', 'Papaya Juice', '', 130, 15, 'non_food'),
(107, 'Juice Bar', 'Guava Juice', '', 130, 15, 'non_food'),
(108, 'Juice Bar', 'Green mango juice', '', 130, 15, 'non_food'),
(109, 'Juice Bar', 'Mango Juice', '', 150, 15, 'non_food'),
(110, 'Juice Bar', 'Watermelon Juice', '', 130, 15, 'non_food'),
(111, 'Juice Bar', 'Fresh Lime Juice', '', 90, 15, 'non_food'),
(112, 'Juice Bar', 'Fruit Punch', '', 170, 15, 'non_food'),
(113, 'Juice Bar', 'Lemonage', '', 110, 15, 'non_food'),
(114, 'Juice Bar', 'Orangeade', '', 110, 15, 'non_food'),
(115, 'Juice Bar', 'Fresh lime soda', '', 110, 15, 'non_food'),
(116, 'Juice Bar', 'Lychee Rush', '', 150, 15, 'non_food'),
(117, 'Juice Bar', 'Virgin mojito classic', '', 150, 15, 'non_food'),
(118, 'Juice Bar', 'Virgin mojito Strawberry', '', 160, 15, 'non_food'),
(119, 'Juice Bar', 'Rabina Fizz', '', 110, 15, 'non_food'),
(120, 'Juice Bar', 'Energy Booster', '', 150, 15, 'non_food'),
(122, 'Juice Bar', 'Mr Barek.com', '', 150, 15, 'non_food'),
(123, 'Juice Bar', 'Pineapple Sunshine', '', 150, 15, 'non_food'),
(124, 'Juice Bar', 'Chocolate Milk Shake', '', 130, 15, 'non_food'),
(125, 'Juice Bar', 'Vanilla Milk Shake', '', 130, 15, 'non_food'),
(126, 'Juice Bar', 'Strawberry Milk Shake', '', 130, 15, 'non_food'),
(127, 'Juice Bar', 'Mango milk Shake', '', 130, 15, 'non_food'),
(128, 'Juice Bar', 'Mango Lassi', '', 150, 15, 'non_food'),
(129, 'Juice Bar', 'Strawberry Lassi', '', 130, 15, 'non_food'),
(130, 'Juice Bar', 'Banana Lassi', '', 120, 15, 'non_food'),
(131, 'Juice Bar', 'Mix Fruit Lassi', '', 150, 15, 'non_food'),
(132, 'Juice Bar', 'Masala Lassi', '', 80, 15, 'non_food'),
(133, 'Juice Bar', 'Sweet Lassi', '', 90, 15, 'non_food'),
(134, 'Juice Bar', 'Plain/Salt Lassi', '', 80, 15, 'non_food'),
(135, 'Juice Bar', 'Coke Can Local', '', 40, 0, 'non_food'),
(136, 'Juice Bar', 'Sprite Can Local', '', 40, 0, 'non_food'),
(137, 'Juice Bar', 'Black Coffee', '', 60, 15, 'non_food'),
(138, 'Juice Bar', 'Regular Coffee', '', 80, 15, 'non_food'),
(139, 'Juice Bar', 'Cafe Latte', '', 80, 15, 'non_food'),
(140, 'Juice Bar', 'Cafe Mocha', '', 90, 15, 'non_food'),
(141, 'Juice Bar', 'Cappuccino', '', 80, 15, 'non_food'),
(142, 'Juice Bar', 'Black Tea', '', 30, 15, 'non_food'),
(143, 'Juice Bar', 'Lemon Tea', '', 30, 15, 'non_food'),
(144, 'Juice Bar', 'Honey ginger lemon tea', '', 45, 15, 'non_food'),
(145, 'Juice Bar', 'Masala Tea', '', 45, 15, 'non_food'),
(146, 'Juice Bar', 'Milk Tea', '', 40, 15, 'non_food'),
(147, 'Juice Bar', 'Hot Chocolate', '', 100, 15, 'non_food'),
(148, 'Juice Bar', 'Hot Milo', '', 100, 15, 'non_food'),
(149, 'Juice Bar', 'Ice Lemon Tea', '', 80, 15, 'non_food'),
(150, 'Juice Bar', 'Ice Tea', '', 60, 15, 'non_food'),
(151, 'Juice Bar', 'Ice Mango Tea', '', 80, 15, 'non_food'),
(152, 'Juice Bar', 'Ice Mint Leaves Tea', '', 80, 15, 'non_food'),
(153, 'Juice Bar', 'Ice Coffee ( Black)', '', 70, 15, 'non_food'),
(154, 'Juice Bar', 'Ice Blended Coffee', '', 110, 15, 'non_food'),
(155, 'Juice Bar', 'Ice Cappuccino', '', 110, 15, 'non_food'),
(156, 'Juice Bar', 'Ice Mocha', '', 120, 15, 'non_food'),
(157, 'Juice Bar', 'Ice Milo', '', 110, 15, 'non_food'),
(158, 'Juice Bar', 'Ice Milo Float', '', 130, 15, 'non_food'),
(159, 'Juice Bar', 'Ice Chocolate', '', 110, 15, 'non_food'),
(160, 'Juice Bar', 'Coke/Sprite/Pepsi Imported', '', 135, 0, 'non_food'),
(161, 'Juice Bar', 'Sprite/7-up Imported', '', 135, 0, 'non_food'),
(162, 'Juice Bar', 'Coke Diet Local', '', 40, 0, 'non_food'),
(163, 'Juice Bar', 'Mum Water 500ml', '', 20, 0, 'non_food'),
(164, 'Juice Bar', 'Mum Water 1500ml', '', 35, 0, 'non_food'),
(170, 'Juice Bar', 'Coke Bottle', '', 25, 0, 'non_food'),
(171, 'Juice Bar', 'Sprite Bottle', '', 25, 0, 'non_food'),
(172, 'Juice Bar', 'Mauntain Dew Bottle', '', 25, 0, 'non_food'),
(301, 'Chocolate', 'Toblerone 170g', '', 390, 0, 'food'),
(302, 'Chocolate', 'Toblerone 50g', '', 90, 0, 'food'),
(303, 'Chocolate', 'Toblerone 35g', '', 65, 0, 'food'),
(304, 'Chocolate', 'Toblerone 100g', '', 170, 0, 'food'),
(305, 'Chocolate', 'Dairy Milk 200g', '', 375, 0, 'food'),
(306, 'Chocolate', 'Dairy milk silk 160g', '', 280, 0, 'food'),
(307, 'Chocolate', 'Dairy milk 120g', '', 240, 0, 'food'),
(308, 'Chocolate', 'Dairy milk 49g', '', 90, 0, 'food'),
(309, 'Chocolate', 'Dairy milk 60g ( 105)', '', 105, 0, 'food'),
(310, 'Chocolate', 'Kitkat White 45g', '', 85, 0, 'food'),
(311, 'Chocolate', 'Kitkat (chunky white) 48g', '', 100, 0, 'food'),
(312, 'Chocolate', 'Kitkat (chunky) 46g ', '', 80, 0, 'food'),
(313, 'Chocolate', 'Kitkat  45g', '', 70, 0, 'food'),
(314, 'Chocolate', 'Kitkat 20g ', '', 45, 0, 'food'),
(315, 'Chocolate', 'Eclipes 35g', '', 200, 0, 'food'),
(316, 'Chocolate', 'Mentos 27g', '', 135, 0, 'food'),
(317, 'Chocolate', 'Extra Pata', '', 75, 0, 'food'),
(318, 'Chocolate', 'Smarties/Marks 51g', '', 100, 0, 'food'),
(319, 'Chocolate', 'Snikers 57g/chuncie', '', 100, 0, 'food'),
(320, 'Chocolate', 'M+M 45g', '', 100, 0, 'food'),
(321, 'Chocolate', 'Milo 125g', '', 250, 0, 'food'),
(322, 'Chocolate', 'Choco eggy 125g', '', 450, 0, 'food'),
(323, 'Chocolate', 'Bohem 260g', '', 850, 0, 'food'),
(324, 'Chocolate', 'Lavache quirit 240', '', 320, 0, 'food'),
(325, 'Chocolate', 'Box (Hamlet/royal)', '', 960, 0, 'food'),
(326, 'Chocolate', 'Assorted Mix Nuts 225g', '', 700, 0, 'food'),
(327, 'Chocolate', 'Pistachio tin 125g', '', 340, 0, 'food'),
(328, 'Chocolate', 'Tong Garden ( Peanut) 150g', '', 450, 0, 'food'),
(329, 'Chocolate', 'Jacker 160g', '', 150, 0, 'food'),
(330, 'Chocolate', 'May Juice/Canberry ', '', 340, 0, 'food'),
(331, 'Toys', 'Car/Plain/Bike 700', '', 700, 0, 'non_food'),
(332, 'Toys', 'Car small(steel body) ', '', 250, 0, 'food'),
(333, 'Toys', 'Air Plane 200', '', 200, 0, 'non_food'),
(334, 'Toys', 'Air Plane 250', '', 250, 0, 'non_food'),
(335, 'Toys', 'Air Plane 400', '', 400, 0, 'non_food'),
(336, 'Toys', 'Air Plane 600', '', 600, 0, 'non_food'),
(337, 'Toys', 'Train 650', '', 650, 0, 'non_food'),
(338, 'Toys', 'Car 550', '', 550, 0, 'non_food'),
(339, 'Toys', 'Car small 150', '', 150, 0, 'non_food'),
(228, 'Fastfood', 'Beef Patties', '', 50, 15, 'food'),
(224, 'Fastfood', 'Vegetable roll', '', 35, 15, 'food'),
(225, 'Fastfood', 'Chicken Pizza', '', 95, 15, 'food'),
(226, 'Fastfood', 'Beef Pizza', '', 95, 15, 'food'),
(227, 'Fastfood', 'Chicken Patties', '', 50, 15, 'food'),
(229, 'Fastfood', 'Chicken Saslic', '', 90, 15, 'food'),
(230, 'Fastfood', 'Beef roll', '', 50, 15, 'food'),
(231, 'Fastfood', 'Chicken Chili roll', '', 50, 15, 'food'),
(232, 'Fastfood', 'Chicken Fry roll', '', 50, 15, 'food'),
(233, 'Fastfood', 'Chicken Meat Loaf', '', 90, 15, 'food'),
(234, 'Fastfood', 'Fried Chicken BK', '', 90, 15, 'food'),
(235, 'Fastfood', 'Chicken Momo', '', 25, 15, 'food'),
(281, 'Fuska/Chatpoti', 'La-Bamba Special Fuska', '', 100, 15, 'food'),
(282, 'Fuska/Chatpoti', 'Garam Fuska', '', 75, 15, 'food'),
(283, 'Fuska/Chatpoti', 'Dahi Fuska', '', 80, 15, 'food'),
(284, 'Fuska/Chatpoti', 'Churmur', '', 80, 15, 'food'),
(285, 'Fuska/Chatpoti', 'Bhel pur', '', 70, 15, 'food'),
(286, 'Fuska/Chatpoti', 'Pani Puri', '', 70, 15, 'food'),
(287, 'Fuska/Chatpoti', 'Papri Chat', '', 70, 15, 'food'),
(288, 'Fuska/Chatpoti', 'Aloo Chat', '', 70, 15, 'food'),
(289, 'Fuska/Chatpoti', 'Aloo Tikki', '', 60, 15, 'food'),
(290, 'Fuska/Chatpoti', 'Chatpoti', '', 70, 15, 'food'),
(236, 'Fastfood', 'Chicken Club Sandwich', '', 50, 15, 'food'),
(237, 'Fastfood', 'Cream Roll', '', 60, 15, 'food'),
(238, 'Fastfood', 'Movenpick Per Scope', '', 175, 0, 'food'),
(340, 'Chocolate', 'Nut Can 450', '', 450, 0, 'food'),
(239, 'fastfood', 'Chicken Burn', '', 50, 15, 'food'),
(341, 'Chocolate', 'Fox can 235', '', 235, 0, 'food'),
(173, 'Juice Bar', 'Appy Fizz', '', 35, 0, 'non_food'),
(174, 'Juice Bar', 'Fanta Can', '', 40, 0, 'non_food'),
(342, 'Chocolate', 'Elit Love chocolate110g', '', 300, 0, 'food'),
(343, 'Chocolate', 'Elit Sutlu 40g', '', 75, 0, 'food'),
(344, 'Chocolate', 'Elit Tuffle 43g', '', 110, 0, 'food'),
(345, 'Chocolate', 'Elit Box 365g (960)', '', 960, 0, 'food'),
(346, 'Chocolate', 'Swiss Extra fine 125g(385)', '', 385, 0, 'food'),
(347, 'Chocolate', 'Twirl 43g / Twix ', '', 90, 0, 'food'),
(348, 'Chocolate', 'Ferrero Rocher 3pcs', '', 115, 0, 'food'),
(349, 'Chocolate', 'Ferrero Rocher 16 pcs', '', 650, 0, 'food');

-- --------------------------------------------------------

--
-- Table structure for table `modify`
--

CREATE TABLE IF NOT EXISTS `modify` (
  `id` int(10) NOT NULL,
  `modify` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modify`
--

INSERT INTO `modify` (`id`, `modify`) VALUES
(1, 'leg'),
(2, 'chest'),
(3, 'oil free'),
(4, 'less oil'),
(5, 'no spicy'),
(6, 'more spicy'),
(7, 'less spicy'),
(8, 'kata hobay'),
(9, 'percell'),
(10, 'running table'),
(11, 'Chicken'),
(12, 'Beef'),
(13, 'Mutton'),
(14, 'Liver'),
(15, 'Salt');

-- --------------------------------------------------------

--
-- Table structure for table `order_det`
--

CREATE TABLE IF NOT EXISTS `order_det` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `order_no` int(20) NOT NULL,
  `food_code` varchar(20) NOT NULL,
  `food` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `modify` varchar(100) NOT NULL,
  `food_type` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `vat` float NOT NULL,
  `quentity` int(10) NOT NULL,
  `total_price` int(10) NOT NULL,
  `paid` varchar(10) NOT NULL DEFAULT 'no',
  `print` varchar(10) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `order_det`
--


-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE IF NOT EXISTS `order_list` (
  `order_no` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `person` int(2) NOT NULL,
  `order_total` float NOT NULL,
  `discount` float NOT NULL,
  `ser_charge` float NOT NULL,
  `incv_total` float NOT NULL,
  `vat_total` float NOT NULL,
  `cash` float NOT NULL,
  `paid` varchar(10) NOT NULL DEFAULT 'no',
  `waiter` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `terminal` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'false',
  PRIMARY KEY (`order_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `order_list`
--


-- --------------------------------------------------------

--
-- Table structure for table `package_det`
--

CREATE TABLE IF NOT EXISTS `package_det` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `food_code` int(10) NOT NULL,
  `food` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `food_type` varchar(100) NOT NULL,
  `package_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `package_det`
--


-- --------------------------------------------------------

--
-- Table structure for table `package_list`
--

CREATE TABLE IF NOT EXISTS `package_list` (
  `package_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`package_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `package_list`
--


-- --------------------------------------------------------

--
-- Table structure for table `table_info`
--

CREATE TABLE IF NOT EXISTS `table_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `floor` varchar(50) NOT NULL,
  `table_name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'free',
  `waiter` varchar(100) NOT NULL,
  `person` varchar(20) NOT NULL,
  `order_no` varchar(11) NOT NULL,
  `o_time` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `table_no` (`table_name`),
  UNIQUE KEY `table_name` (`table_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `table_info`
--

INSERT INTO `table_info` (`id`, `floor`, `table_name`, `status`, `waiter`, `person`, `order_no`, `o_time`) VALUES
(1, 'Floor 1', 'Table 1', 'ordered', '1', '1', '52372', 1401349866),
(2, 'Floor 1', 'Table 2', 'free', '', '', '', 0),
(3, 'Floor 1', 'Table 3', 'free', '', '', '', 0),
(4, 'Floor 1', 'Table 4', 'free', '', '', '', 0),
(5, 'Floor 1', 'Table 5', 'free', '', '', '', 0),
(6, 'Floor 1', 'Table 6', 'free', '', '', '', 0),
(7, 'Floor 1', 'Table 7', 'free', '', '', '', 0),
(8, 'Floor 1', 'Table 8', 'free', '', '', '', 0),
(9, 'Floor 1', 'Table 9', 'free', '', '', '', 0),
(10, 'Floor 1', 'Table 10', 'free', '', '', '', 0),
(11, 'Floor 1', 'Table 11', 'free', '', '', '', 0),
(12, 'Floor 1', 'Table 12', 'free', '', '', '', 0),
(13, 'Floor 1', 'Table 13', 'free', '', '', '', 0),
(14, 'Floor 1', 'Table 14', 'free', '', '', '', 0),
(15, 'Floor 1', 'Table 15', 'free', '', '', '', 0),
(16, 'Floor 1', 'Table 16', 'free', '', '', '', 0),
(17, 'Floor 1', 'Table 17', 'free', '', '', '', 0),
(18, 'Floor 1', 'Table 18', 'free', '', '', '', 0),
(19, 'Floor 1', 'Table 19', 'free', '', '', '', 0),
(20, 'Floor 1', 'Table 20', 'free', '', '', '', 0),
(21, 'Floor 1', 'Table 21', 'free', '', '', '', 0),
(22, 'Floor 1', 'Table 22', 'free', '', '', '', 0),
(23, 'Floor 1', 'Table 23', 'free', '', '', '', 0),
(24, 'Floor 1', 'Table 24', 'free', '', '', '', 0),
(25, 'Ground Floor', 'Table 30', 'free', '', '', '', 0),
(26, 'Ground Floor', 'Table 31', 'free', '', '', '', 0),
(27, 'Ground Floor', 'Table 32', 'free', '', '', '', 0),
(28, 'Ground Floor', 'Table 33', 'free', '', '', '', 0),
(29, 'Ground Floor', 'Table 34', 'free', '', '', '', 0),
(30, 'Ground Floor', 'Table 40', 'free', '', '', '', 0),
(65, 'Ground Floor', 'Table 41', 'free', '', '', '', 0),
(32, 'Ground Floor', 'Table 42', 'free', '', '', '', 0),
(33, 'Ground Floor', 'Table 43', 'free', '', '', '', 0),
(34, 'Ground Floor', 'Table 44', 'free', '', '', '', 0),
(35, 'Ground Floor', 'Table 50', 'free', '', '', '', 0),
(36, 'Ground Floor', 'Table 51', 'free', '', '', '', 0),
(37, 'Ground Floor', 'Table 52', 'free', '', '', '', 0),
(38, 'Ground Floor', 'Table 53', 'free', '', '', '', 0),
(39, 'Ground Floor', 'Table 54', 'free', '', '', '', 0),
(40, 'Ground Floor', 'Table 60', 'free', '', '', '', 0),
(41, 'Take Away', 'Take Away 01', 'free', '', '', '', 0),
(42, 'Take Away', 'Take Away 02', 'free', '', '', '', 0),
(43, 'Take Away', 'Take Away 03', 'free', '', '', '', 0),
(44, 'Take Away', 'Take Away 04', 'free', '', '', '', 0),
(45, 'Take Away', 'Take Away 05', 'free', '', '', '', 0),
(46, 'Take Away', 'Take Away 06', 'free', '', '', '', 0),
(47, 'Take Away', 'Take Away 07', 'free', '', '', '', 0),
(48, 'Take Away', 'Take Away 08', 'free', '', '', '', 0),
(49, 'Take Away', 'Take Away 09', 'free', '', '', '', 0),
(50, 'Take Away', 'Take Away 10', 'free', '', '', '', 0),
(51, 'Take Away', 'Take Away 11', 'free', '', '', '', 0),
(52, 'Take Away', 'Take Away 12', 'free', '', '', '', 0),
(53, 'Take Away', 'Take Away 13', 'free', '', '', '', 0),
(54, 'Take Away', 'Take Away 14', 'free', '', '', '', 0),
(55, 'Take Away', 'Take Away 15', 'free', '', '', '', 0),
(56, 'Take Away', 'Take Away 16', 'free', '', '', '', 0),
(57, 'Ground Floor', '61', 'free', '', '', '', 0),
(66, 'Ground Floor', 'Table 62', 'free', '', '', '', 0),
(59, 'Ground Floor', '63', 'free', '', '', '', 0),
(60, 'Ground Floor', '64', 'free', '', '', '', 0),
(61, 'Floor 1', '25', 'free', '', '', '', 0),
(62, 'Floor 1', '26', 'free', '', '', '', 0),
(63, 'Floor 1', '27', 'free', '', '', '', 0),
(64, 'Floor 1', '28', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `user` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user`, `password`, `permission`, `status`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `void_det`
--

CREATE TABLE IF NOT EXISTS `void_det` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `order_no` int(20) NOT NULL,
  `food_code` varchar(20) NOT NULL,
  `food` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `modify` varchar(100) NOT NULL,
  `food_type` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `vat` float NOT NULL,
  `quentity` int(10) NOT NULL,
  `total_price` int(10) NOT NULL,
  `paid` varchar(10) NOT NULL DEFAULT 'no',
  `print` varchar(10) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `void_det`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
