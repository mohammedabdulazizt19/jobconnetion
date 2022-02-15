-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 06:16 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(1, 'Francis Lodovica Avila', 'admin', 'adminadmin', 'profile.png', '09554562584', 'Philippines', 'Web Developer', 'sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text'),
(2, 'fajardo', 'asdas@asd.com', 'asdasdasd', 'profile.png', '4546465465465', 'philippines', 'asdasd', 'asdasdasdasd'),
(3, 'asdasd', 'qwe@qwe.com', 'qweqwe', 'profile.png', '54545454545', 'asdasdasdas', 'asdasdasd', 'asdasdasdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `boxes_section`
--

CREATE TABLE `boxes_section` (
  `box_id` int(10) NOT NULL,
  `box_title` text NOT NULL,
  `box_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boxes_section`
--

INSERT INTO `boxes_section` (`box_id`, `box_title`, `box_desc`) VALUES
(1, 'WE LOVE CUSTOMERS', 'We are known to provide best possible service ever.'),
(2, 'BEST AND AFFORDABLE PRICES', 'You can check on all other sites about the prices and than compare with us.'),
(3, '100% SATISFACTION', 'Free returns on everything for 3 months. Be sure it is not broke.'),
(4, 'sample box', 'sample only');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_top` text NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_top`, `cat_image`) VALUES
(1, 'Men', 'yes', 'profile.png'),
(2, 'Women', 'no', 'profile.png'),
(3, 'Kids', 'no', 'profile.png'),
(4, 'Others', 'no', 'profile.png'),
(5, 'sample categorys', 'no', 'nba.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` double(10,2) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(1, 3, 259.00, 1258556263, 1, 'Medium', '2018-07-24 12:09:02', 'Complete'),
(2, 3, 69.00, 1258556263, 1, 'Medium', '2018-07-24 03:52:36', 'pending'),
(3, 3, 480.00, 1258556263, 5, 'Large', '2018-07-24 03:52:36', 'pending'),
(4, 1, 480.00, 2131925373, 5, 'Medium', '2018-07-24 08:19:39', 'Complete'),
(5, 4, 192.00, 2019585552, 2, 'Medium', '2018-07-25 08:40:36', 'pending'),
(6, 4, 690.00, 2019585552, 3, 'Small', '2018-07-25 08:40:37', 'pending'),
(7, 6, 400.00, 649549189, 2, 'Small', '2018-11-16 04:08:59', 'pending'),
(8, 6, 777.00, 649549189, 3, 'Small', '2018-11-16 04:08:59', 'pending'),
(9, 6, 600.00, 979696089, 3, 'Small', '2018-11-16 04:32:00', 'pending'),
(10, 6, 735.00, 471355598, 3, 'Small', '2018-11-16 07:05:11', 'pending'),
(11, 7, 192.00, 361979506, 2, 'Small', '2018-11-16 07:35:53', 'pending'),
(12, 7, 300.00, 361979506, 3, 'Small', '2018-11-16 07:35:54', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL,
  `manufacturer_title` text NOT NULL,
  `manufacturer_top` text NOT NULL,
  `manufacturer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturer_id`, `manufacturer_title`, `manufacturer_top`, `manufacturer_image`) VALUES
(2, 'Smpale Title 2', 'no', 'Black Blouse Versace Coat1.jpg'),
(3, 'Smpale Title 3', 'no', 'profile.png'),
(4, 'Smpale Title 4', 'yes', 'profile.png'),
(5, 'sample 5', 'no', 'Black Blouse Versace Coat1.jpg'),
(6, 'mnbmnbmb', 'yes', 'profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(1, 2131925373, 420.00, 'Landbank', 2312321, 121312, '07/24/2018'),
(3, 1258556263, 1000.00, 'BDO', 23132, 123123, '123123');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(1, 3, 1258556263, '5', 1, 'Medium', 'Complete'),
(2, 3, 1258556263, '2', 1, 'Medium', 'pending'),
(3, 3, 1258556263, '6', 5, 'Large', 'pending'),
(4, 1, 2131925373, '6', 5, 'Medium', 'Complete'),
(6, 4, 2019585552, '4', 3, 'Small', 'pending'),
(7, 6, 649549189, '7', 2, 'Small', 'pending'),
(8, 6, 649549189, '5', 3, 'Small', 'pending'),
(9, 6, 979696089, '7', 3, 'Small', 'pending'),
(10, 6, 471355598, '8', 3, 'Small', 'pending'),
(11, 7, 361979506, '6', 2, 'Small', 'pending'),
(12, 7, 361979506, '10', 3, 'Small', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `manufacturer_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keywords`) VALUES
(1, 7, 1, 1, '2018-11-16 01:05:25', 'new tshirt', 'Jack---Jones-White-Solid-Denim-Jacket-3115-5549091-1-pdp_slider_l.jpg', 'Jack---Jones-White-Solid-Denim-Jacket-3115-5549091-2-pdp_slider_l.jpg', 'Jack---Jones-White-Solid-Denim-Jacket-3115-5549091-3-pdp_slider_l.jpg', 150.00, '<p>sample sampe sappmelanlb</p>\r\n', 'T-Shirts'),
(2, 7, 3, 2, '2018-11-16 01:05:51', 'U.S Polo Assn. Blue Polos Shirt', 'U-S--Polo-Assn--Blue-Polos-0266-586842-1-pdp_slider_l.jpg', 'U-S--Polo-Assn--Blue-Polos-0268-586842-2-pdp_slider_l.jpg', 'U-S--Polo-Assn--Blue-Polos-0271-586842-3-pdp_slider_l.jpg', 69.00, 'Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description ', 'T-Shirts'),
(3, 7, 3, 3, '2018-11-16 01:05:56', 'BENETTON White Polo Shirt', 'United-Colors-of-Benetton-White-Polo-Shirt-0608-0914361-1-pdp_slider_l.jpg', 'United-Colors-of-Benetton-White-Polo-Shirt-0608-0914361-2-pdp_slider_l.jpg', 'United-Colors-of-Benetton-White-Polo-Shirt-0609-0914361-3-pdp_slider_l.jpg', 98.00, 'Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description ', 'T-Shirts'),
(4, 1, 1, 1, '2018-11-16 01:06:02', 'Navy Blue Solid Denim Jacket', 'Levi-s-Blue-Solid-Denim-Jacket-5953-6506172-1-pdp_slider_l.jpg', 'Levi-s-Blue-Solid-Denim-Jacket-5953-6506172-2-pdp_slider_l.jpg', 'Levi-s-Blue-Solid-Denim-Jacket-5953-6506172-3-pdp_slider_l.jpg', 230.00, 'Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description ', 'Jackets'),
(5, 1, 1, 2, '2018-11-16 01:06:10', 'Denim Borg Lined Western Jacket', 'Next-Denim-Borg-Lined-Western-Jacket-0463-0064553-1-pdp_slider_l.jpg', 'Next-Denim-Borg-Lined-Western-Jacket-0463-0064553-2-pdp_slider_l.jpg', 'Next-Denim-Borg-Lined-Western-Jacket-0465-0064553-3-pdp_slider_l.jpg', 259.00, 'Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description ', 'Jackets'),
(6, 1, 1, 3, '2018-11-16 01:06:14', 'Jack & White Solid Denim Jacket', 'Jack---Jones-White-Solid-Denim-Jacket-3115-5549091-1-pdp_slider_l.jpg', 'Jack---Jones-White-Solid-Denim-Jacket-3115-5549091-2-pdp_slider_l.jpg', 'Jack---Jones-White-Solid-Denim-Jacket-3115-5549091-3-pdp_slider_l.jpg', 96.00, 'Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description ', 'Jackets'),
(7, 4, 2, 1, '2018-11-16 01:06:17', 'Solid Long Coat with Lace', 'fur coat with button1.jpg', 'fur coat with button2.jpg', 'fur coat with button3.jpg', 200.00, 'Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description ', 'Coats'),
(8, 4, 2, 2, '2018-11-16 01:06:20', 'Sleeveless Faux Flur Hybrid Coat', 'Black Blouse Versace Coat1.jpg', 'Black Blouse Versace Coat2.jpg', 'Black Blouse Versace Coat3.jpg', 245.00, 'Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description ', 'Coats');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_top` text NOT NULL,
  `p_cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_top`, `p_cat_image`) VALUES
(1, 'Jackets', 'yes', 'profile.png'),
(2, 'Accessories', 'no', 'profile.png'),
(3, 'Shoes', 'no', 'profile.png'),
(4, 'Coats', 'yes', 'profile.png'),
(7, 'T-Shirts', 'no', 'profile.png'),
(9, 'asdasd', 'yes', 'profile.png'),
(11, 'asdasd', 'yes', 'nba.PNG'),
(12, 'pcategory', 'yes', 'bir.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `slide_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`, `slide_url`) VALUES
(1, 'Slide Number 1', '1.jpg', 'http://www.avilafrncs.ga'),
(2, 'Slide Number 2.2', '2.jpg', 'http://www.avilafrncs.ga'),
(6, 'Slide Try', '3.jpg', 'www.avilafrncs19.ga'),
(7, 'sample', '4.jpg', 'www.www.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(3, 'chavila', 'charisejoyescabusa@gmail.com', 'qwe', 'Philippines', 'Quezon City', '09554562584', 'Novaliches', 'profile.png', '::1'),
(4, 'Francis Avila', 'avila@yahoo.com', 'avilaavila', 'Philippines', 'Quezon City', '09954562584', 'Novaliches, Quezon City', 'profile.png', '::1'),
(5, 'asd', 'asdasd.asd@asd.asd', 'asd', 'asd', 'asd', '09554562584', 'asd', 'profile.png', '::1'),
(6, 'asdasd', 'asd@awd.asd', 'asdasdasd', 'asdasd', 'asdasdasd', '0959595959595', 'sdfsdfsdfsdfsdf', 'profile.png', '::1'),
(7, 'francis', 'asd@asd.com', 'asdasd', 'asdasd', 'asdasd', '123312312', 'asdaksdhahskjdahskjd', 'fghfg.jpg', '::1'),
(8, 'asdasdasd', 'asdasd@asdasd.asdasd', 'asdasdasd', 'asdasdas', 'asdasd', 'asdasd', 'asdasd', 'fghfg.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_id` int(10) NOT NULL,
  `term_title` varchar(100) NOT NULL,
  `term_link` varchar(100) NOT NULL,
  `term_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`term_id`, `term_title`, `term_link`, `term_desc`) VALUES
(2, 'Refund Policy', 'link2', 'sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample '),
(3, 'Pricing and Promotions Policy', 'link3', 'sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample s'),
(5, 'Terms and Conditions', 'termsconditions', 'sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample s'),
(6, 'asdasdasd', 'asdasd', 'sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample sample s');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `boxes_section`
--
ALTER TABLE `boxes_section`
  ADD PRIMARY KEY (`box_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `boxes_section`
--
ALTER TABLE `boxes_section`
  MODIFY `box_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
