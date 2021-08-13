-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 04:12 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `majoo_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(128) NOT NULL,
  `price` varchar(128) NOT NULL,
  `detail_product` varchar(256) NOT NULL,
  `image_product` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `price`, `detail_product`, `image_product`) VALUES
(5, 'Majoo Pro', '2.800.000', 'With the proper ingredients, success comes naturally. Here\'s everything you need to make a distinctive tasting sausage stick that will be sure to tingle your taste buds. Comes with complete instructions.', 'standard_repo.png'),
(6, 'Majoo Advance', '2.750.000', 'Custom BioGenic Systems V5000-AB/C Isothermal Carousel Liquid Nitrogen Freezers offer liquid nitrogen storage temperatures without liquid nitrogen contact. Liquid nitrogen is stored in our patented jacketed space in the wall of the freezer.', 'paket-advance.png'),
(7, 'Majoo Lifestyle', '3.000.000', 'Selected by House Beautiful Magazine as Best For The Bath. Our award-winning Natural Honey Facial Cleansing Bar is enriched with natural skin nourishing extracts, honey and royal jelly.', 'paket-lifestyle.png'),
(8, 'Majoo Desktop', '4.500.000', 'At Hillbilly Stills we carry some of the best moonshine stills for sale you will find anywhere and our Turn Key Distillery is certainly no exception. This is the perfect whiskey, rum, and moonshine still kit for the serious distiller.', 'paket-desktop.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
