-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 04:22 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webnirma_autoguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `name` varchar(520) NOT NULL,
  `email` varchar(420) NOT NULL,
  `image` varchar(110) NOT NULL,
  `password` varchar(630) NOT NULL,
  `adminColor` varchar(110) NOT NULL,
  `adminFont` varchar(110) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `name`, `email`, `image`, `password`, `adminColor`, `adminFont`, `doc`) VALUES
(1, 'Neeraj Yadav', 'admin', '', '123456', '0', '0', '2019-10-23 16:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(100) NOT NULL,
  `brandSlug` varchar(100) NOT NULL,
  `brandIcon` varchar(100) NOT NULL,
  `brandStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brandId`, `brandName`, `brandSlug`, `brandIcon`, `brandStatus`) VALUES
(8, 'Maruti', 'maruti', 'job.png', 1),
(9, 'Honda', 'honda', 'job.png', 1),
(10, 'Audi', 'audi', 'COVER.jpg', 1),
(11, 'Fiat', 'fiat', 'ASHWINI KUMAR HM.jpeg', 1),
(12, 'BMW', 'bmw', 'ASHWINI KUMAR HM.jpeg', 1),
(13, 'Ford', 'ford', 'ASHWINI KUMAR HM.jpeg', 1),
(14, 'Kawasaki', 'kawasaki', 'ASHWINI KUMAR HM.jpeg', 1),
(15, 'Isuzu', 'isuzu', 'WhatsApp Image 2019-07-13 at 09.31.01.jpeg', 1),
(16, 'Dodge', 'dodge', 'ASHWINI KUMAR HM.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `carId` int(11) NOT NULL,
  `carName` varchar(200) NOT NULL,
  `carBrand` varchar(200) NOT NULL,
  `carModel` varchar(200) NOT NULL,
  `carMilage` varchar(200) NOT NULL,
  `carFuel` varchar(200) NOT NULL,
  `carEngineCapicity` varchar(200) NOT NULL,
  `carStock` varchar(200) NOT NULL,
  `carType` varchar(200) NOT NULL,
  `carTransmission` varchar(200) NOT NULL,
  `carTraction` varchar(200) NOT NULL,
  `carDrivingSide` varchar(200) NOT NULL,
  `carMenufectureYear` varchar(200) NOT NULL,
  `carDealer` varchar(200) NOT NULL,
  `carPrice` varchar(200) NOT NULL,
  `carKm` int(11) NOT NULL,
  `carFinance` varchar(200) NOT NULL,
  `carDescription` varchar(5000) NOT NULL,
  `carSlug` varchar(250) NOT NULL,
  `carView` int(11) NOT NULL,
  `carUserId` varchar(100) NOT NULL,
  `carUniqueId` int(100) NOT NULL,
  `carDate` varchar(200) NOT NULL,
  `carTime` varchar(200) NOT NULL,
  `carStatus` int(11) NOT NULL,
  `carApprove` varchar(100) NOT NULL,
  `carDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`carId`, `carName`, `carBrand`, `carModel`, `carMilage`, `carFuel`, `carEngineCapicity`, `carStock`, `carType`, `carTransmission`, `carTraction`, `carDrivingSide`, `carMenufectureYear`, `carDealer`, `carPrice`, `carKm`, `carFinance`, `carDescription`, `carSlug`, `carView`, `carUserId`, `carUniqueId`, `carDate`, `carTime`, `carStatus`, `carApprove`, `carDateTime`) VALUES
(9, 'Swift Dzire', '8', '2', '14', '2', '122', '12', '2', '1', '4', 'right', '2017', '', '123456', 0, 'no', 'sdfgdfg', 'swift-dzire', 5, '', 0, '25-10-2019', '12:40:14', 1, '1', '2019-10-27 04:47:59'),
(10, '2004 BMW Q200', '12', '14', '12', '3', '34', '2', '6', '2', '5', 'left', '2004', '', '123400', 0, 'no', 'GOOD', '2004-bmw-q200', 3, '', 0, '25-10-2019', '09:15:30', 1, '1', '2019-10-26 18:34:31'),
(11, '2019 Kia Optima', ' 11', '12', '23', '2', '2', '2', '9', '2', '5', 'right', '2018', '', '24000', 0, 'no', 'good', '2019-kia-optima', 6, '', 0, '25-10-2019', '09:21:03', 1, '1', '2019-10-30 03:41:53'),
(13, '2019 Ford Ecosport', '13', '19', '12', '2', '12', '12', '10', '2', '5', 'right', '2019', '', '20120', 0, 'no', 'good', '2019-ford-ecosport', 0, '', 0, '25-10-2019', '09:23:16', 1, '1', '2019-10-25 16:29:48'),
(14, '2017 Ford Figo', '13', '21', '12', '2', '1', '2', '4', '2', '5', 'right', '1997', '', '23450', 0, 'no', 'good', '2017-ford-figo', 0, '', 0, '25-10-2019', '09:28:24', 1, '1', '2019-10-25 18:51:34'),
(15, '2017 Ford Figo', '13', '21', '12', '2', '1', '2', '4', '2', '5', 'right', '2004', '', '23450', 0, 'no', 'good', '2017-ford-figo', 0, '', 0, '25-10-2019', '09:28:33', 1, '1', '2019-10-25 18:51:29'),
(16, '2016 BMW 1 Series', '12', '13', '12', '2', '2', '2', '11', '3', '5', 'right', '2002', '', '99000', 0, 'no', 'Good', '2016-bmw-1-series', 2, '', 0, '25-10-2019', '09:30:10', 1, '1', '2019-10-29 18:57:10'),
(17, '2016 BMW 5 Series', '12', '16', '12', '2', '2', '2', '11', '3', '5', 'right', '1997', '', '99000', 0, 'no', 'Good', '2016-bmw-5-series', 0, '', 0, '25-10-2019', '09:30:57', 1, '1', '2019-10-25 18:51:15'),
(18, '2014 Ford EcoSport', '13', '19', '12', '2', '12', '12', '4', '2', '5', 'right', '2004', '', '12345', 12000, 'no', 'Good', '2014-ford-ecosport', 9, '', 0, '25-10-2019', '09:40:59', 1, '1', '2019-10-27 04:25:33'),
(19, '2009 BMW 1 series', '12', '13', '12', '3', '2', '2', '13', '2', '5', 'right', '1996', '', '190000', 14500, 'no', 'Good', '2009-bmw-1-series', 0, '', 0, '25-10-2019', '09:43:26', 1, '1', '2019-10-25 18:51:02'),
(20, '2009 BMW 1 series', '12', '13', '12', '3', '2', '2', '13', '2', '5', 'right', '2005', '', '190000', 14500, 'no', 'Good', '2009-bmw-1-series', 0, '', 0, '25-10-2019', '09:43:42', 1, '1', '2019-10-25 18:50:56'),
(21, '2009 BMW 1 series', '12', '13', '12', '3', '2', '2', '13', '2', '5', 'right', '2003', '', '190000', 14500, 'no', 'Good', '2009-bmw-1-series', 0, '', 0, '25-10-2019', '09:43:53', 1, '1', '2019-10-25 18:50:44'),
(23, '2006 Fiat 500', '11', '10', '22', '3', '2', '2', '12', '2', '5', 'right', '1998', '', '4500', 12456, 'no', 'Good', '2006-fiat-500', 10, '', 0, '25-10-2019', '09:45:02', 1, '1', '2019-10-29 18:57:45'),
(25, '2012 Tyoto', '13', '21', '23', '2', '45', '43', '4', '2', '5', 'right', '2014', '2', '5400', 12746, 'yes', 'Good', '2012-tyoto', 0, '', 0, '26-10-2019', '12:15:38', 1, '1', '2019-10-30 01:48:49'),
(26, '2015 Hundai gft', '9', '3', '34', '2', '56', '34', '4', '2', '5', 'right', '2015', '2', '23400', 54838, 'yes', 'Good', '2015-hundai-gft', 0, '', 0, '26-10-2019', '12:19:21', 1, '1', '2019-10-26 03:43:45'),
(27, '2019 Kia Optima2019 Kia Optima2019 Kia Optima', '11', '12', '45', '3', '45', '23', '12', '2', '5', 'right', '2004', '', '23400', 12345, 'no', 'description', '2019-kia-optima2019-kia-optima2019-kia-optima', 8, '', 0, '26-10-2019', '01:51:36', 0, '1', '2019-10-30 01:52:02'),
(28, '2019 Kia Optima', '11', '12', '34', '3', '45', '23', '12', '2', '5', 'right', '2006', '2', '23400', 23400, 'no', 'description', '2019-kia-optima-1', 45, '', 0, '26-10-2019', '01:53:45', 0, '1', '2019-10-30 03:41:57'),
(29, '', '8', '10', '52', '2', '8', '', '4', '2', '', 'left', '1998', '', '8520', 0, '', 'cd', '', 0, '', 0, '', '', 0, '', '2019-10-30 04:06:04'),
(30, '', '8', '10', '52', '2', '8', '', '4', '2', '', 'left', '1998', '', '8520', 0, '', 'cd', '', 0, '', 0, '', '', 0, '', '2019-10-30 04:06:28'),
(31, '', '8', '10', '52', '2', '8', '', '4', '2', '', 'left', '1998', '', '8520', 0, '', 'cd', '', 0, '', 0, '', '', 0, '', '2019-10-30 04:07:22'),
(32, '', '8', '10', '52', '2', '8', '', '4', '2', '', 'left', '1998', '', '8520', 0, '', 'cd', '', 0, '', 0, '', '', 0, '', '2019-10-30 04:08:40'),
(33, '', '8', '10', '52', '2', '85', '', '5', '2', '', 'left', '2006', '', '85', 0, '', 'mcdk', '', 0, '', 0, '', '', 0, '', '2019-10-30 04:11:34'),
(34, '', '8', '13', '96', '2', '85', '', '4', '2', '', 'right', '2004', '', '85', 0, '', 'klb', '', 0, '', 0, '', '', 0, '', '2019-10-30 04:15:47'),
(35, 'jkf', '8', '2', '4', '2', '5', '', '4', '2', '', 'left', '1990', '', '852', 0, '', 'hjfj', 'jkf', 0, '16', 0, '', '', 0, '', '2019-10-30 05:19:50'),
(36, 'kjg', '8', '3', '21', '2', '35', '', '4', '2', '', 'left', '1990', '', '85252', 0, '', 'fvdjk', 'kjg', 0, '17', 0, '', '', 0, '', '2019-10-30 05:22:03'),
(37, 'kjf', '8', '2', '45', '3', '45', '', '4', '2', '', 'left', '1990', '', '8854', 0, '', 'jkg', 'kjf', 0, '18', 2, '', '', 0, '', '2019-10-30 05:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `carimage`
--

CREATE TABLE `carimage` (
  `carimageId` int(11) NOT NULL,
  `carProdId` varchar(10) NOT NULL,
  `carUserId` varchar(10) NOT NULL,
  `carUseId` varchar(123) NOT NULL,
  `carUniqueId` int(100) NOT NULL,
  `carimageImage` varchar(200) NOT NULL,
  `carimageDate` varchar(200) NOT NULL,
  `carimageTime` varchar(200) NOT NULL,
  `carimageDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carimage`
--

INSERT INTO `carimage` (`carimageId`, `carProdId`, `carUserId`, `carUseId`, `carUniqueId`, `carimageImage`, `carimageDate`, `carimageTime`, `carimageDateTime`) VALUES
(1, '23', '', '', 0, '6df2fba0ded8058.jpg', '', '', '2019-10-25 17:04:42'),
(2, '23', '', '', 0, '9b3191637c5adad.jpeg', '', '', '2019-10-25 17:05:56'),
(3, '23', '', '', 0, '9d23313de74cc2b.jpeg', '', '', '2019-10-25 17:07:16'),
(6, '26', '', '', 0, '526bd7c3ee56ca2.jpg', '', '', '2019-10-25 18:49:58'),
(7, '24', '', '', 0, 'f93e28e64cba8e8.jpg', '', '', '2019-10-25 18:52:39'),
(8, '16', '', '', 0, '91577bfbb2dd9b6.jpg', '', '', '2019-10-25 18:56:51'),
(9, '27', '', '', 0, '71701012f92cb24.jpg', '', '', '2019-10-25 20:21:49'),
(10, '28', '', '', 0, '14de4cdb4000b27.jpg', '', '', '2019-10-25 20:23:53'),
(11, '28', '', '', 0, 'e401478f016d7f6.jpg', '', '', '2019-10-25 20:44:00'),
(12, '9', '', '', 0, 'a453a3b81498210.jpg', '', '', '2019-10-26 02:49:35'),
(13, '9', '', '', 0, '02a00fbeb03b964.jpg', '', '', '2019-10-26 02:49:51'),
(14, '9', '', '', 0, 'ad4f0eee79c1046.jpg', '', '', '2019-10-26 02:50:18'),
(15, '29', '2', '', 0, '4e64c577ca1a774.jpg', '', '', '2019-10-26 03:35:54'),
(16, '29', '2', '', 0, '273d9447ce0ae38.png', '', '', '2019-10-26 03:36:03'),
(18, '24', '2', '', 0, '0fb99079094dadc.jpg', '', '', '2019-10-26 03:45:46'),
(19, '24', '2', '', 0, 'ae0ce245b3f6d90.jpg', '', '', '2019-10-26 03:45:59'),
(20, '25', '2', '', 0, 'e5a3fa458bd82ad.jpg', '', '', '2019-10-26 03:50:13'),
(21, '25', '2', '', 0, '2c22b92a20abb62.jpg', '', '', '2019-10-26 03:50:46'),
(22, '', '', '', 0, '9d23313de74cc2b.jpeg', '', '', '2019-10-30 04:11:34'),
(23, '', '', '', 0, '9b3191637c5adad.jpeg', '', '', '2019-10-30 04:15:47'),
(24, '', '', '', 0, '2c22b92a20abb62.jpg', '', '', '2019-10-30 05:19:50'),
(25, '', '', '17', 2, '2c22b92a20abb623.jpg', '', '', '2019-10-30 05:24:30'),
(26, '', '', '18', 0, '2c22b92a20abb624.jpg', '', '', '2019-10-30 05:28:23'),
(28, '10', '', '', 0, '07bbc99fa7ca705.jpg', '', '', '2019-10-30 09:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `cartype`
--

CREATE TABLE `cartype` (
  `cartypeId` int(11) NOT NULL,
  `cartypeName` varchar(200) NOT NULL,
  `cartypeStatus` int(11) NOT NULL,
  `cartypeSlug` varchar(250) NOT NULL,
  `cartypeDate` varchar(200) NOT NULL,
  `cartypeTime` varchar(200) NOT NULL,
  `cartypeDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartype`
--

INSERT INTO `cartype` (`cartypeId`, `cartypeName`, `cartypeStatus`, `cartypeSlug`, `cartypeDate`, `cartypeTime`, `cartypeDateTime`) VALUES
(4, 'Sedan', 1, 'sedan', '25-10-2019', '08:36:10', '2019-10-25 15:06:10'),
(5, 'MPV', 1, 'mpv', '25-10-2019', '08:36:57', '2019-10-25 15:06:57'),
(6, 'Coupe', 1, 'coupe', '25-10-2019', '08:37:14', '2019-10-25 15:07:14'),
(7, 'Panel Van', 1, 'panel-van', '25-10-2019', '08:37:35', '2019-10-25 15:07:35'),
(8, 'Station Vegan Cab', 1, 'station-vegan-cab', '25-10-2019', '08:37:54', '2019-10-25 15:07:54'),
(9, 'Collectible', 1, 'collectible', '25-10-2019', '08:47:27', '2019-10-25 15:17:27'),
(10, '4x4', 1, '4x4', '25-10-2019', '08:48:09', '2019-10-25 15:18:09'),
(11, 'Bakkie Double Cab', 1, 'bakkie-double-cab', '25-10-2019', '08:48:27', '2019-10-25 15:18:27'),
(12, 'Bakkie Exteded Cab', 1, 'bakkie-exteded-cab', '25-10-2019', '08:48:39', '2019-10-25 15:18:39'),
(13, 'Bakkie Single Cab', 1, 'bakkie-single-cab', '25-10-2019', '08:48:47', '2019-10-25 15:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `title_slug` varchar(100) NOT NULL,
  `cat_id` varchar(100) NOT NULL,
  `icons` varchar(100) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_id`, `title`, `title_slug`, `cat_id`, `icons`, `pic`, `doc`) VALUES
(3, 'E1000', 'Pandal and Tent', 'pandal-and-tent', '', '', 'tent.jpg', '2018-05-18 14:18:07'),
(4, 'E1000', 'Flower Decorator', 'flower-decorator', '', '', 'florist.jpg', '2018-05-13 06:06:46'),
(6, 'E1000', 'Sweets', 'sweets', '', '', 'sweets.jpg', '2018-05-13 06:06:39'),
(7, 'E1000', 'Foods and Caterers', 'foods-and-caterers', '', '', 'caterer.jpg', '2018-05-18 14:19:19'),
(8, 'E1000', 'Cars and Drivers', 'cars-and-drivers', '', '', 'driver.jpg', '2018-05-22 04:47:25'),
(9, 'E1000', 'Cook', 'cook', '', '', 'cook.jpg', '2018-05-13 06:06:27'),
(10, 'E1000', 'Lighting', 'lighting', '', '', 'electricity.jpg', '2018-05-13 06:06:23'),
(11, 'E1000', 'Maids & Servents', 'maids-servents', '', '', 'servent.jpg', '2018-06-05 15:59:46'),
(12, 'E1000', 'Photographer', 'photographer', '', '', 'photo.jpg', '2018-05-13 06:06:17'),
(13, 'E1000', 'Beauty Parlour', 'beauty-parlour', '', '', 'makeup.jpg', '2018-05-13 06:06:13'),
(14, 'E1000', 'Mehndi Designers', 'mehndi-designers', '', '', 'mehandi.jpg', '2018-05-13 06:06:10'),
(15, 'E1000', 'Dj and Music', 'dj-and-music', '', '', 'dj.jpg', '2018-05-18 14:20:15'),
(16, 'E1000', 'Card Designers', 'card-designers', '', '', 'card.jpg', '2018-05-13 06:06:02'),
(17, 'E1000', 'Wedding Planner', 'wedding-planner', '', '', 'planner.jpg', '2018-05-13 06:19:42'),
(18, 'E1000', 'Dancer and Anchor', 'dancer-and-anchor', '', '', 'dance.jpg', '2018-05-18 14:20:38'),
(19, 'M1000', 'Doctors', 'doctors', '', 'fa-user-md', 'doctor-female.svg', '2018-06-22 09:49:01'),
(20, 'M1000', 'Hospitals', 'hospitals', '', 'fa-hospital-o', 'hospital.svg', '2018-06-22 09:49:08'),
(22, 'M1000', 'Laboratory', 'laboratory', '', 'fa-flask', 'laboratory.svg', '2018-06-22 09:49:22'),
(23, 'M1000', 'Medical Shop', 'medical-shop', '', 'fa-plus-square', 'medicine.svg', '2018-06-22 09:49:40'),
(24, 'M1000', 'Emergency 24x7', 'emergency-24x7', '', 'fa-ambulance', 'ambulance.svg', '2018-06-22 09:49:59'),
(25, 'M1000', 'Private Hospital', 'private-hospital', '20', 'fa-hospital-o', '', '2018-05-13 07:40:56'),
(26, 'M1000', 'Goverment Hospital', 'goverment-hospital', '20', 'fa-hospital-o', '', '2018-05-13 07:40:52'),
(27, 'M1000', 'Public Hospital', 'public-hospital', '20', 'fa-hospital-o', '', '2018-05-13 07:40:44'),
(28, 'M1000', 'ENT Hospital', 'ent-hospital', '20', 'fa-hospital-o', '', '2018-05-13 07:47:58'),
(29, 'M1000', 'Ayurvedic Hospital', 'ayurvedic-hospital', '20', 'fa-hospital-o', '', '2018-05-13 07:51:55'),
(30, 'M1000', 'Anesthesiology Hospital', 'anesthesiology-hospital', '20', 'fa-hospital-o', '', '2018-05-13 07:52:43'),
(31, 'M1000', 'Cancer Hospital', 'cancer-hospital', '20', 'fa-hospital-o', '', '2018-05-13 07:55:07'),
(32, 'M1000', 'Cardiology Hospital', 'cardiology-hospital', '20', 'fa-hospital-o', '', '2018-05-13 07:55:47'),
(33, 'M1000', 'Children Hospital', 'children-hospital', '20', 'fa-hospital-o', '', '2018-05-13 07:56:12'),
(34, 'M1000', 'Plastic Surgery & Cosmetic Hospital', 'plastic-surgery-cosmetic-hospital', '20', 'fa-hospital-o', '', '2018-05-13 07:57:20'),
(35, 'M1000', 'Dental Hospital', 'dental-hospital', '20', 'fa-hospital-o', '', '2018-05-13 07:58:04'),
(36, 'M1000', 'Dermatology Hospital', 'dermatology-hospital', '20', 'fa-hospital-o', '', '2018-05-13 07:58:59'),
(37, 'M1000', 'Gastroenterologist Hospital', 'gastroenterologist-hospital', '20', 'fa-hospital-o', '', '2018-05-13 08:00:10'),
(38, 'M1000', 'Gynecology Hospital', 'gynecology-hospital', '20', 'fa-hospital-o', '', '2018-05-13 08:00:53'),
(39, 'M1000', 'Neurology Hospital', 'neurology-hospital', '20', 'fa-hospital-o', '', '2018-05-13 08:01:10'),
(40, 'M1000', 'Oncology Hospital', 'oncology-hospital', '20', 'fa-hospital-o', '', '2018-05-13 08:01:27'),
(41, 'M1000', 'Orthopaedic Hospital', 'orthopaedic-hospital', '20', 'fa-hospital-o', '', '2018-05-13 08:01:53'),
(42, 'M1000', 'Psychiatric Hospital', 'psychiatric-hospital', '20', 'fa-hospital-o', '', '2018-05-13 08:02:35'),
(43, 'M1000', 'Radiology Hospital', 'radiology-hospital', '20', 'fa-hospital-o', '', '2018-05-13 08:02:56'),
(44, 'M1000', 'Maternity Hospital', 'maternity-hospital', '20', 'fa-hospital-o', '', '2018-05-13 08:04:41'),
(45, 'M1000', 'Urology Hospital', 'urology-hospital', '20', 'fa-hospital-o', '', '2018-05-13 08:05:43'),
(46, 'M1000', 'Nephrology Hospital', 'nephrology-hospital', '20', 'fa-hospital-o', '', '2018-05-13 08:06:07'),
(47, 'M1000', 'Eye Hospital', 'eye-hospital', '20', 'fa-hospital-o', '', '2018-05-13 08:07:12'),
(48, 'M1000', 'Blood bank', 'blood-bank', '20', 'fa-h-square', '', '2018-05-13 08:08:25'),
(49, 'M1000', 'Rheumatology Hospital', 'rheumatology-hospital', '20', 'fa-hospital-o', '', '2018-05-13 08:10:24'),
(50, 'M1000', 'Multi Speciality Hospital', 'multi-speciality-hospital', '20', 'fa-hospital-o', '', '2018-05-13 08:11:48'),
(51, 'M1000', 'Veterinary Hospital', 'veterinary-hospital', '20', 'fa-hospital-o', '', '2018-05-13 08:12:14'),
(52, 'M1000', 'Chemists & Druggist Store', 'chemists-druggist-store', '23', 'fa-medkit', '', '2018-05-13 08:15:16'),
(53, 'M1000', '24x7 Chemists', '24x7-chemists', '23', 'fa-medkit', '', '2018-05-13 08:15:01'),
(54, 'M1000', 'Ayurvedic Doctors', 'ayurvedic-doctors', '19', 'fa-user-md', '', '2018-05-14 06:41:41'),
(55, 'M1000', 'Paralysis Doctors', 'paralysis-doctors', '19', 'fa-user-md', '', '2018-05-14 06:42:58'),
(56, 'M1000', 'Homeopathic Doctors', 'homeopathic-doctors', '19', 'fa-user-md', '', '2018-05-14 06:43:52'),
(57, 'M1000', 'Neuro Physician Docotors', 'neuro-physician-docotors', '19', 'fa-user-md', '', '2018-05-14 06:44:26'),
(58, 'M1000', 'Cosmetic Surgeon Doctors', 'cosmetic-surgeon-doctors', '19', 'fa-user-md', '', '2018-05-14 06:45:04'),
(59, 'M1000', 'Neurologists', 'neurologists', '19', 'fa-user-md', '', '2018-05-14 06:45:33'),
(60, 'M1000', 'Neurosurgeons', 'neurosurgeons', '19', 'fa-user-md', '', '2018-05-14 06:47:59'),
(61, 'M1000', 'Orthopaedic Surgeons', 'orthopaedic-surgeons', '19', 'fa-user-md', '', '2018-05-14 06:48:30'),
(62, 'M1000', 'Diabetologist Doctors', 'diabetologist-doctors', '19', 'fa-user-md', '', '2018-05-14 06:49:03'),
(63, 'M1000', 'ENT Surgeon Doctors', 'ent-surgeon-doctors', '19', 'fa-user-md', '', '2018-05-14 06:49:40'),
(64, 'M1000', 'Eye Surgeon Doctors', 'eye-surgeon-doctors', '19', 'fa-user-md', '', '2018-05-14 06:50:00'),
(65, 'M1000', 'Kidney Stone Doctors', 'kidney-stone-doctors', '19', 'fa-user-md', '', '2018-05-14 06:50:31'),
(66, 'M1000', 'Piles Doctors', 'piles-doctors', '19', 'fa-user-md', '', '2018-05-14 06:50:56'),
(67, 'M1000', 'Pulmonologists Doctors', 'pulmonologists-doctors', '19', 'fa-user-md', '', '2018-05-14 06:51:28'),
(68, 'M1000', 'Rheumatology Doctors', 'rheumatology-doctors', '19', 'fa-user-md', '', '2018-05-14 06:51:52'),
(69, 'M1000', 'Sexologist Doctors', 'sexologist-doctors', '19', 'fa-user-md', '', '2018-05-14 06:52:14'),
(70, 'M1000', 'Ophthalmologist', 'ophthalmologist', '19', 'fa-user-md', '', '2018-05-14 06:53:02'),
(71, 'M1000', 'Acupuncture Doctors', 'acupuncture-doctors', '19', 'fa-user-md', '', '2018-05-14 06:57:32'),
(72, 'M1000', 'Physiotherapists', 'physiotherapists', '19', 'fa-user-md', '', '2018-05-14 06:58:49'),
(73, 'M1000', 'Asthma Doctors', 'asthma-doctors', '19', 'fa-user-md', '', '2018-05-14 07:00:04'),
(74, 'M1000', 'Endocrinologists', 'endocrinologists', '19', 'fa-user-md', '', '2018-05-14 07:00:27'),
(75, 'M1000', 'Trichologist Doctors', 'trichologist-doctors', '19', 'fa-user-md', '', '2018-05-14 07:00:59'),
(76, 'M1000', 'Cardiologists', 'cardiologists', '19', 'fa-user-md', '', '2018-05-14 07:01:21'),
(77, 'M1000', 'General Surgeon', 'general-surgeon', '19', 'fa-user-md', '', '2018-05-14 07:02:34'),
(78, 'M1000', 'Hepatologist Doctors', 'hepatologist-doctors', '19', 'fa-user-md', '', '2018-05-14 07:03:50'),
(79, 'M1000', 'Phychiatrists', 'phychiatrists', '19', 'fa-user-md', '', '2018-05-14 07:04:13'),
(80, 'M1000', 'Psychologist Doctors', 'psychologist-doctors', '19', 'fa-user-md', '', '2018-05-14 07:04:54'),
(81, 'M1000', 'Urologist Doctors', 'urologist-doctors', '19', 'fa-user-md', '', '2018-05-14 07:05:20'),
(82, 'M1000', 'Kidney Transplant Doctors', 'kidney-transplant-doctors', '19', 'fa-user-md', '', '2018-05-14 07:06:06'),
(83, 'M1000', 'Orthodontist Doctors', 'orthodontist-doctors', '19', 'fa-user-md', '', '2018-05-14 07:06:31'),
(84, 'M1000', 'Radiologist Doctors', 'radiologist-doctors', '19', 'fa-user-md', '', '2018-05-14 07:06:50'),
(85, 'M1000', 'Thyroid Doctors', 'thyroid-doctors', '19', 'fa-user-md', '', '2018-05-14 07:07:07'),
(86, 'M1000', 'Dentists', 'dentists', '19', 'fa-user-md', '', '2018-05-14 07:07:27'),
(87, 'M1000', 'Hair Loss Doctors', 'hair-loss-doctors', '19', 'fa-user-md', '', '2018-05-14 07:07:53'),
(88, 'M1000', 'Oncologists', 'oncologists', '19', 'fa-user-md', '', '2018-05-14 07:08:14'),
(89, 'M1000', 'Gastroenterologist Doctors', 'gastroenterologist-doctors', '19', 'fa-user-md', '', '2018-05-14 07:08:30'),
(90, 'M1000', 'Nephrologist Doctors', 'nephrologist-doctors', '19', 'fa-user-md', '', '2018-05-14 07:08:50'),
(91, 'M1000', 'Immunologist', 'immunologist', '19', 'fa-user-md', '', '2018-05-14 07:10:16'),
(92, 'M1000', 'Gynecologist Doctors', 'gynecologist-doctors', '19', 'fa-user-md', '', '2018-05-14 07:10:35'),
(93, 'M1000', 'Epidemiologist', 'epidemiologist', '19', 'fa-user-md', '', '2018-05-14 07:11:05'),
(94, 'M1000', 'Dermatologist', 'dermatologist', '19', 'fa-user-md', '', '2018-05-14 07:12:33'),
(95, 'M1000', 'Anesthesiologist', 'anesthesiologist', '19', 'fa-user-md', '', '2018-05-14 07:12:57'),
(96, 'M1000', 'Allergist Doctors', 'allergist-doctors', '19', 'fa-user-md', '', '2018-05-14 07:13:16'),
(97, 'M1000', 'Audiologist Doctors', 'audiologist-doctors', '19', 'fa-user-md', '', '2018-05-14 07:13:44'),
(98, 'M1000', 'Microbiologist', 'microbiologist', '19', 'fa-user-md', '', '2018-05-14 07:14:08'),
(99, 'M1000', 'Neonatologist', 'neonatologist', '19', 'fa-user-md', '', '2018-05-14 07:15:06'),
(100, 'M1000', 'Obstetrician Doctors', 'obstetrician-doctors', '19', 'fa-user-md', '', '2018-05-14 07:16:05'),
(101, 'M1000', 'Physician Doctors', 'physician-doctors', '19', 'fa-user-md', '', '2018-05-14 07:16:48'),
(102, 'M1000', 'Laparoscopic Surgeon', 'laparoscopic-surgeon', '19', 'fa-user-md', '', '2018-05-14 07:17:27'),
(103, 'M1000', 'Pathology Labs', 'pathology-labs', '22', 'fa-flask', '', '2018-05-14 07:22:53'),
(104, 'M1000', 'X Ray Center', 'x-ray-center', '22', 'fa-flask', '', '2018-05-14 07:23:40'),
(105, 'M1000', 'Diagnostic Center', 'diagnostic-center', '22', 'fa-flask', '', '2018-05-14 07:23:54'),
(106, 'M1000', 'Sonography Centers', 'sonography-centers', '22', 'fa-flask', '', '2018-05-14 07:24:31'),
(107, 'M1000', 'MRI Scan Centers', 'mri-scan-centers', '22', 'fa-flask', '', '2018-05-14 07:24:43'),
(108, 'M1000', 'Blood Testing Center', 'blood-testing-center', '22', 'fa-flask', '', '2018-05-14 07:25:32'),
(109, 'M1000', 'Clinical Pathology', 'clinical-pathology', '22', 'fa-flask', '', '2018-05-14 07:25:58'),
(110, 'M1000', 'Health & Fitness', 'health-fitness', '', 'fa-heartbeat', 'health.svg', '2018-06-22 09:50:10'),
(111, 'E1000', 'Boutique and Dresses', 'boutique-and-dresses', '', '', 'boutique.jpg', '2018-06-30 17:53:30'),
(112, 'E1000', 'Gifts and Cosmetic shop', 'gifts-and-cosmetic-shop', '', '', 'gift.jpg', '2018-06-30 17:53:13'),
(113, 'E1000', 'Banquet & Marriage Hall', 'banquet-and-marriage-hall', '', '', 'hall.jpg', '2018-06-30 17:53:02'),
(114, 'S1000', 'Schools', 'schools', '', '', 'school-building.svg', '2018-05-20 17:30:54'),
(115, 'S1000', 'Home Tutions', 'home-tutions', '', '', 'lecture-of-madam.svg', '2018-05-20 17:30:32'),
(116, 'S1000', 'Institute and Classes', 'institute-and-classes', '', '', 'classroom-with-teacher.svg', '2018-05-20 17:31:26'),
(117, 'S1000', 'Books and Stationary Stores', 'books-and-stationary-stores', '', '', '3-books.svg', '2018-05-20 17:29:38'),
(118, 'S1000', 'Old and Second Hand Books', 'old-and-second-hand-books', '', '', 'search-book.svg', '2018-05-20 17:32:31'),
(119, 'S1000', 'Play School', 'play-school', '114', 'fa-futbol-o', '', '2018-05-20 13:59:51'),
(120, 'S1000', 'Private School', 'private-school', '114', 'fa-graduation-cap', '', '2018-05-20 14:00:19'),
(121, 'S1000', 'Competition Classes', 'competition-classes', '116', 'fa-sitemap', '', '2018-05-20 14:02:52'),
(122, 'S1000', 'Computer Institute', 'computer-institute', '116', 'fa-desktop', '', '2018-05-20 14:05:48'),
(123, 'S1000', 'English Classes', 'english-classes', '116', 'fa-address-book-o', '', '2018-05-20 14:07:12'),
(124, 'S1000', 'Dance Academy', 'dance-academy', '116', 'fa-users', '', '2018-05-20 14:09:50'),
(125, 'S1000', 'Music Classes', 'music-classes', '116', 'fa-music', '', '2018-05-20 14:10:43'),
(126, 'S1000', 'Arts Classes', 'arts-classes', '116', 'fa-paint-brush', '', '2018-05-20 14:11:17'),
(127, 'S1000', 'Accounts and Commerce', 'accounts-and-commerce', '116', 'fa-money', '', '2018-05-20 14:12:29'),
(128, 'S1000', 'Science Classes', 'science-classes', '116', 'fa-flask', '', '2018-05-20 14:13:18'),
(129, 'S1000', 'Secondary (6-10) Classes', 'secondary-6-10-classes', '116', 'fa-address-book-o', '', '2018-05-20 14:15:02'),
(130, 'S1000', 'Senior Secondary (+2)', 'senior-secondary-2', '116', 'fa-graduation-cap', '', '2018-05-20 14:15:42'),
(131, 'S1000', 'Crash Course  Tutors', 'crash-course-tutors', '115', 'fa-address-book-o', '', '2018-05-20 14:17:27'),
(132, 'S1000', 'Primary', 'primary', '115', 'fa-address-book-o', '', '2018-05-22 05:16:18'),
(133, 'S1000', 'Secondary', 'secondary', '115', 'fa-address-book-o', '', '2018-05-22 05:16:32'),
(134, 'S1000', 'Higher Secondary', 'higher-secondary', '115', 'fa-address-book-o', '', '2018-05-22 05:22:54'),
(135, 'S1000', 'Drawing Tutors', 'drawing-tutors', '115', 'fa-paint-brush', '', '2018-05-20 14:23:46'),
(136, 'S1000', 'Music Tutors', 'music-tutors', '115', 'fa-music', '', '2018-05-20 14:20:30'),
(137, 'S1000', 'Dance Teachers', 'dance-teachers', '115', 'fa-user-o', '', '2018-05-20 14:21:07'),
(138, 'S1000', 'Student Zone', 'student-zone', '', '', 'boy-with-desktop.svg', '2018-05-24 03:44:17'),
(139, 'K1000', 'Electronics Repair', 'electronics-repair', '', '', 'electronic-bulb.svg', '2018-05-26 10:13:22'),
(140, 'K1000', 'Computer Repair', 'computer-repair', '', '', 'computer-repair.svg', '2018-05-26 10:13:19'),
(141, 'K1000', 'Mobile Repair', 'mobile-repair', '', '', 'two-mobile.svg', '2018-05-26 10:13:16'),
(142, 'K1000', 'Cyber cafe', 'cyber-cafe', '', '', 'earth.svg', '2018-05-26 10:13:13'),
(143, 'K1000', 'Web & App Development', 'web-and-app-development', '', '', 'web-setting.svg', '2018-05-26 10:13:08'),
(144, 'K1000', 'Plumber', 'plumber', '', '', 'plumber.svg', '2018-05-26 10:13:00'),
(145, 'K1000', 'Financial Services', 'financial-services', '', '', 'finance-money.svg', '2018-05-28 08:42:33'),
(146, 'K1000', 'Insurance Co. & Agents', 'insurance-co-agents', '', '', 'insurance-heart.svg', '2018-05-28 08:43:47'),
(147, 'K1000', 'Tours & Travels', 'tours-travels', '', '', 'tour-world.svg', '2018-05-28 08:44:18'),
(148, 'K1000', 'Automobile', 'automobile', '', '', 'car-repair.svg', '2018-05-28 08:43:44'),
(149, 'K1000', 'Advertisements & Press', 'advertisements-press', '', '', 'adv-press.svg', '2018-05-28 08:58:35'),
(150, 'K1000', 'Cars & Drivers', 'cars-and-drivers', '', '', 'car.svg', '2018-05-28 09:08:18'),
(151, 'C1000', 'Building Material', 'building-material', '', '', 'traders.svg', '2018-06-01 10:13:00'),
(152, 'C1000', 'Architect', 'architect', '', '', 'archi.svg', '2018-06-01 10:12:51'),
(153, 'C1000', 'Interior Designers', 'interior-designers', '', '', 'house1.svg', '2018-06-01 10:12:45'),
(154, 'C1000', 'Hardware Shop', 'hardware-shop', '', '', 'tools.svg', '2018-06-01 10:12:32'),
(155, 'C1000', 'Real Estate & Agents', 'real-estate-agents', '', '', 'house.svg', '2018-06-01 10:12:25'),
(156, 'C1000', 'Engineers', 'engineers', '', '', 'engineer.svg', '2018-06-01 10:12:17'),
(157, 'C1000', 'Sanitary Ware', 'sanitary-ware', '', '', 'sanitary.svg', '2018-06-01 10:28:59'),
(158, 'C1000', 'Electrician', 'electrician', '', '', 'electrician.svg', '2018-06-01 10:34:39'),
(159, 'SH100', 'Clothes', 'clothes', '', '', 'tshirt.svg', '2018-06-01 11:16:13'),
(160, 'SH100', 'Jewellery', 'jewellery', '', '', 'jewel.svg', '2018-06-01 11:18:35'),
(161, 'SH100', 'Furniture', 'furniture', '', '', 'furniture.svg', '2018-06-01 11:18:30'),
(162, 'SH100', 'Electronics', 'electronics', '', '', 'electronic1.svg', '2018-06-01 11:16:04'),
(163, 'SH100', 'Footware', 'footware', '', '', 'boot.svg', '2018-06-01 11:15:53'),
(164, 'SH100', 'Camera Store', 'camera-store', '', '', 'camera.svg', '2018-06-01 11:15:47'),
(165, 'SH100', 'Sanitary Ware', 'sanitary-ware', '', '', 'sanitary.svg', '2018-06-02 17:27:25'),
(166, 'SH100', 'Gifts and Cosmetic shop', 'gifts-and-cosmetic-shop', '', '', 'gift-cosmetic.svg', '2018-06-02 17:33:06'),
(167, 'SH100', 'Boutique and Dresses', 'boutique-and-dresses', '', '', 'female-dress.svg', '2018-06-02 17:33:06'),
(169, 'DN100', 'General Store', 'general-store', '', '', 'scale.svg', '2018-06-05 16:10:42'),
(170, 'DN100', 'Vegetable Shop', 'vegetable-shop', '', '', 'vegetable2.svg', '2018-06-05 16:08:25'),
(171, 'DN100', 'Fruits Shop', 'fruits-shop', '', '', 'apple.svg', '2018-06-05 16:08:46'),
(172, 'DN100', 'Laundry', 'laundry', '', '', 'laundry.svg', '2018-06-05 16:08:42'),
(173, 'DN100', 'Mens Saloon', 'mens-saloon', '', '', 'barber2.svg', '2018-06-05 16:09:17'),
(174, 'DN100', 'Maids & Servents', 'maids-servents', '', '', 'waiter.svg', '2018-06-05 16:16:30'),
(175, 'DN100', 'Gym', 'gym', '', '', 'gym.svg', '2018-06-05 16:16:25'),
(176, 'DN100', 'Movie Theaters & Cinemas', 'movie-theaters-cinemas', '', '', 'videoplayer.svg', '2018-06-05 16:06:43'),
(177, 'DN100', 'Amusement Parks', 'amusement-parks', '', '', 'castle.svg', '2018-06-05 16:10:50'),
(178, 'FR100', 'Fast Food', 'fast-food', '', '', 'fast.svg', '2018-06-05 16:57:38'),
(179, 'FR100', 'Dhaba', 'dhaba', '', '', 'vegfood.svg', '2018-06-05 17:00:59'),
(180, 'FR100', 'Sweet Shop', 'sweet-shop', '', '', 'sweets.svg', '2018-06-05 17:03:24'),
(181, 'FR100', 'Veg Restaurant', 'veg-restaurant', '', '', 'vegfoods.svg', '2018-06-05 17:00:53'),
(182, 'FR100', 'Coffee House', 'coffee-house', '', '', 'coffee.svg', '2018-06-05 16:58:04'),
(183, 'FR100', 'Non Veg Restaurant', 'non-veg-restaurant', '', '', 'meat.svg', '2018-06-05 16:58:12'),
(184, 'FR100', 'Indian Restaurant', 'indian-restaurant', '', '', 'plate.svg', '2018-06-05 16:58:23'),
(185, 'FR100', 'Pizza', 'pizza', '', '', 'pizza.svg', '2018-06-05 17:03:15'),
(186, 'FR100', 'Ice Cream Parlour', 'ice-cream-parlour', '', '', 'icecream.svg', '2018-06-05 16:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(200) NOT NULL,
  `state_id` varchar(200) NOT NULL,
  `state_name` varchar(200) NOT NULL,
  `parent_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `state_id`, `state_name`, `parent_id`) VALUES
(1, 'Adilabad', '32', 'Telangana', ''),
(2, 'Agra', '34', 'Uttar Pradesh', ''),
(3, 'Ahmed Nagar', '21', 'Maharashtra', ''),
(4, 'Ahmedabad City', '12', 'Gujarat', ''),
(5, 'Aizawl', '24', 'Mizoram', ''),
(6, 'Ajmer', '29', 'Rajasthan', ''),
(7, 'Akola', '21', 'Maharashtra', ''),
(8, 'Aligarh', '34', 'Uttar Pradesh', ''),
(9, 'Allahabad', '34', 'Uttar Pradesh', ''),
(10, 'Alleppey', '18', 'Kerala', ''),
(11, 'Almora', '35', 'Uttarakhand', ''),
(12, 'Alwar', '29', 'Rajasthan', ''),
(13, 'Alwaye', '18', 'Kerala', ''),
(14, 'Amalapuram', '2', 'Andhra Pradesh', ''),
(15, 'Ambala', '13', 'Haryana', ''),
(16, 'Ambedkar Nagar', '34', 'Uttar Pradesh', ''),
(17, 'Amravati', '21', 'Maharashtra', ''),
(18, 'Amreli', '12', 'Gujarat', ''),
(19, 'Amritsar', '28', 'Punjab', ''),
(20, 'Anakapalle', '2', 'Andhra Pradesh', ''),
(21, 'Anand', '12', 'Gujarat', ''),
(22, 'Anantapur', '2', 'Andhra Pradesh', ''),
(23, 'Ananthnag', '15', 'Jammu & Kashmir', ''),
(24, 'Anna Road H.O', '31', 'Tamil Nadu', ''),
(25, 'Arakkonam', '31', 'Tamil Nadu', ''),
(26, 'Asansol', '36', 'West Bengal', ''),
(27, 'Aska', '26', 'Odisha', ''),
(28, 'Auraiya', '34', 'Uttar Pradesh', ''),
(29, 'Aurangabad', '21', 'Maharashtra', ''),
(30, 'Aurangabad(Bihar)', '5', 'Bihar', ''),
(31, 'Azamgarh', '34', 'Uttar Pradesh', ''),
(32, 'Bagalkot', '17', 'Karnataka', ''),
(33, 'Bageshwar', '35', 'Uttarakhand', ''),
(34, 'Bagpat', '34', 'Uttar Pradesh', ''),
(35, 'Bahraich', '34', 'Uttar Pradesh', ''),
(36, 'Balaghat', '20', 'Madhya Pradesh', ''),
(37, 'Balangir', '26', 'Odisha', ''),
(38, 'Balasore', '26', 'Odisha', ''),
(39, 'Ballia', '34', 'Uttar Pradesh', ''),
(40, 'Balrampur', '34', 'Uttar Pradesh', ''),
(41, 'Banasanktha', '12', 'Gujarat', ''),
(42, 'Banda', '34', 'Uttar Pradesh', ''),
(43, 'Bandipur', '15', 'Jammu & Kashmir', ''),
(44, 'Bankura', '36', 'West Bengal', ''),
(45, 'Banswara', '29', 'Rajasthan', ''),
(46, 'Barabanki', '34', 'Uttar Pradesh', ''),
(47, 'Baramulla', '15', 'Jammu & Kashmir', ''),
(48, 'Baran', '29', 'Rajasthan', ''),
(49, 'Bardoli', '12', 'Gujarat', ''),
(50, 'Bareilly', '34', 'Uttar Pradesh', ''),
(51, 'Barmer', '29', 'Rajasthan', ''),
(52, 'Barnala', '28', 'Punjab', ''),
(53, 'Barpeta', '4', 'Assam', ''),
(54, 'Bastar', '7', 'Chattisgarh', ''),
(55, 'Basti', '34', 'Uttar Pradesh', ''),
(56, 'Bathinda', '28', 'Punjab', ''),
(57, 'Beed', '21', 'Maharashtra', ''),
(58, 'Begusarai', '5', 'Bihar', ''),
(59, 'Belgaum', '17', 'Karnataka', ''),
(60, 'Bellary', '17', 'Karnataka', ''),
(61, 'Bengaluru East', '17', 'Karnataka', ''),
(62, 'Bengaluru South', '17', 'Karnataka', ''),
(63, 'Bengaluru West', '17', 'Karnataka', ''),
(64, 'Berhampur', '26', 'Odisha', ''),
(65, 'Bhadrak', '26', 'Odisha', ''),
(66, 'Bhagalpur', '5', 'Bihar', ''),
(67, 'Bhandara', '21', 'Maharashtra', ''),
(68, 'Bharatpur', '29', 'Rajasthan', ''),
(69, 'Bharuch', '12', 'Gujarat', ''),
(70, 'Bhavnagar', '12', 'Gujarat', ''),
(71, 'Bhilwara', '29', 'Rajasthan', ''),
(72, 'Bhimavaram', '2', 'Andhra Pradesh', ''),
(73, 'Bhiwani', '13', 'Haryana', ''),
(74, 'Bhojpur', '5', 'Bihar', ''),
(75, 'Bhopal', '20', 'Madhya Pradesh', ''),
(76, 'Bhubaneswar', '26', 'Odisha', ''),
(77, 'Bidar', '17', 'Karnataka', ''),
(78, 'Bijapur', '17', 'Karnataka', ''),
(79, 'Bijnor', '34', 'Uttar Pradesh', ''),
(80, 'Bikaner', '29', 'Rajasthan', ''),
(81, 'Bilaspur', '7', 'Chattisgarh', ''),
(82, 'Birbhum', '36', 'West Bengal', ''),
(83, 'Bishnupur', '22', 'Manipur', ''),
(84, 'Bongaigaon', '4', 'Assam', ''),
(85, 'Budaun', '34', 'Uttar Pradesh', ''),
(86, 'Budgam', '15', 'Jammu & Kashmir', ''),
(87, 'Bulandshahr', '34', 'Uttar Pradesh', ''),
(88, 'Buldhana', '21', 'Maharashtra', ''),
(89, 'Bundi', '29', 'Rajasthan', ''),
(90, 'Burdwan', '36', 'West Bengal', ''),
(91, 'Cachar', '4', 'Assam', ''),
(92, 'Calicut', '18', 'Kerala', ''),
(93, 'Carnicobar', '1', 'Andaman & Nicobar Islands', ''),
(94, 'Chamba', '14', 'Himachal Pradesh', ''),
(95, 'Chamoli', '35', 'Uttarakhand', ''),
(96, 'Champawat', '35', 'Uttarakhand', ''),
(97, 'Champhai', '24', 'Mizoram', ''),
(98, 'Chandauli', '34', 'Uttar Pradesh', ''),
(99, 'Chandel', '22', 'Manipur', ''),
(100, 'Chandigarh', '6', 'Chandigarh', ''),
(101, 'Chandrapur', '21', 'Maharashtra', ''),
(102, 'Changanacherry', '18', 'Kerala', ''),
(103, 'Changlang', '3', 'Arunachal Pradesh', ''),
(104, 'Channapatna', '17', 'Karnataka', ''),
(105, 'Chengalpattu', '31', 'Tamil Nadu', ''),
(106, 'Chennai City Central', '31', 'Tamil Nadu', ''),
(107, 'Chennai City North', '31', 'Tamil Nadu', ''),
(108, 'Chennai City South', '31', 'Tamil Nadu', ''),
(109, 'Chhatarpur', '20', 'Madhya Pradesh', ''),
(110, 'Chhindwara', '20', 'Madhya Pradesh', ''),
(111, 'Chikmagalur', '17', 'Karnataka', ''),
(112, 'Chikodi', '17', 'Karnataka', ''),
(113, 'Chitradurga', '17', 'Karnataka', ''),
(114, 'Chitrakoot', '34', 'Uttar Pradesh', ''),
(115, 'Chittoor', '2', 'Andhra Pradesh', ''),
(116, 'Chittorgarh', '29', 'Rajasthan', ''),
(117, 'Churachandpur', '22', 'Manipur', ''),
(118, 'Churu', '29', 'Rajasthan', ''),
(119, 'Coimbatore', '31', 'Tamil Nadu', ''),
(120, 'Contai', '36', 'West Bengal', ''),
(121, 'Cooch Behar', '36', 'West Bengal', ''),
(122, 'Cuddalore', '31', 'Tamil Nadu', ''),
(123, 'Cuddapah', '2', 'Andhra Pradesh', ''),
(124, 'Cuttack City', '26', 'Odisha', ''),
(125, 'Cuttack North', '26', 'Odisha', ''),
(126, 'Cuttack South', '26', 'Odisha', ''),
(127, 'Dadra & Nagar Haveli', '8', 'Dadra & Nagar Haveli', ''),
(128, 'Daman', '9', 'Daman & Diu', ''),
(129, 'Darbhanga', '5', 'Bihar', ''),
(130, 'Darjiling', '36', 'West Bengal', ''),
(131, 'Darrang', '4', 'Assam', ''),
(132, 'Dausa', '29', 'Rajasthan', ''),
(133, 'Dehra Gopipur', '14', 'Himachal Pradesh', ''),
(134, 'Dehradun', '35', 'Uttarakhand', ''),
(135, 'Delhi', '10', 'Delhi', ''),
(136, 'Deoria', '34', 'Uttar Pradesh', ''),
(137, 'Dhalai', '33', 'Tripura', ''),
(138, 'Dhanbad', '16', 'Jharkhand', ''),
(139, 'Dharamsala', '14', 'Himachal Pradesh', ''),
(140, 'Dharmapuri', '31', 'Tamil Nadu', ''),
(141, 'Dharwad', '17', 'Karnataka', ''),
(142, 'Dhemaji', '4', 'Assam', ''),
(143, 'Dhenkanal', '26', 'Odisha', ''),
(144, 'Dholpur', '29', 'Rajasthan', ''),
(145, 'Dhubri', '4', 'Assam', ''),
(146, 'Dhule', '21', 'Maharashtra', ''),
(147, 'Dibang Valley', '3', 'Arunachal Pradesh', ''),
(148, 'Dibrugarh', '4', 'Assam', ''),
(149, 'Diglipur', '1', 'Andaman & Nicobar Islands', ''),
(150, 'Dimapur', '25', 'Nagaland', ''),
(151, 'Dindigul', '31', 'Tamil Nadu', ''),
(152, 'Diu', '9', 'Daman & Diu', ''),
(153, 'Doda', '15', 'Jammu & Kashmir', ''),
(154, 'Dungarpur', '29', 'Rajasthan', ''),
(155, 'Durg', '7', 'Chattisgarh', ''),
(156, 'East Champaran', '5', 'Bihar', ''),
(157, 'East Garo Hills', '23', 'Meghalaya', ''),
(158, 'East Kameng', '3', 'Arunachal Pradesh', ''),
(159, 'East Khasi Hills', '23', 'Meghalaya', ''),
(160, 'East Siang', '3', 'Arunachal Pradesh', ''),
(161, 'East Sikkim', '30', 'Sikkim', ''),
(162, 'Eluru', '2', 'Andhra Pradesh', ''),
(163, 'Ernakulam', '18', 'Kerala', ''),
(164, 'Erode', '31', 'Tamil Nadu', ''),
(165, 'Etah', '34', 'Uttar Pradesh', ''),
(166, 'Etawah', '34', 'Uttar Pradesh', ''),
(167, 'Faizabad', '34', 'Uttar Pradesh', ''),
(168, 'Faridabad', '13', 'Haryana', ''),
(169, 'Faridkot', '28', 'Punjab', ''),
(170, 'Farrukhabad', '34', 'Uttar Pradesh', ''),
(171, 'Fatehgarh Sahib', '28', 'Punjab', ''),
(172, 'Fatehpur', '34', 'Uttar Pradesh', ''),
(173, 'Fazilka', '28', 'Punjab', ''),
(174, 'Ferrargunj', '1', 'Andaman & Nicobar Islands', ''),
(175, 'Firozabad', '34', 'Uttar Pradesh', ''),
(176, 'Firozpur', '28', 'Punjab', ''),
(177, 'Gadag', '17', 'Karnataka', ''),
(178, 'Gadchiroli', '21', 'Maharashtra', ''),
(179, 'Gandhinagar', '12', 'Gujarat', ''),
(180, 'Ganganagar', '29', 'Rajasthan', ''),
(181, 'Gautam Buddha Nagar', '34', 'Uttar Pradesh', ''),
(182, 'Gaya', '5', 'Bihar', ''),
(183, 'Ghaziabad', '34', 'Uttar Pradesh', ''),
(184, 'Ghazipur', '34', 'Uttar Pradesh', ''),
(185, 'Giridih', '16', 'Jharkhand', ''),
(186, 'Goa', '11', 'Goa', ''),
(187, 'Goalpara', '4', 'Assam', ''),
(188, 'Gokak', '17', 'Karnataka', ''),
(189, 'Golaghat', '4', 'Assam', ''),
(190, 'Gonda', '34', 'Uttar Pradesh', ''),
(191, 'Gondal', '12', 'Gujarat', ''),
(192, 'Gondia', '21', 'Maharashtra', ''),
(193, 'Gorakhpur', '34', 'Uttar Pradesh', ''),
(194, 'Gudivada', '2', 'Andhra Pradesh', ''),
(195, 'Gudur', '2', 'Andhra Pradesh', ''),
(196, 'Gulbarga', '17', 'Karnataka', ''),
(197, 'Guna', '20', 'Madhya Pradesh', ''),
(198, 'Guntur', '2', 'Andhra Pradesh', ''),
(199, 'Gurdaspur', '28', 'Punjab', ''),
(200, 'Gurugram', '13', 'Haryana', ''),
(201, 'Gwalior', '20', 'Madhya Pradesh', ''),
(202, 'Hailakandi', '4', 'Assam', ''),
(203, 'Hamirpur (HP)', '14', 'Himachal Pradesh', ''),
(204, 'Hamirpur (UP)', '34', 'Uttar Pradesh', ''),
(205, 'Hanamkonda', '32', 'Telangana', ''),
(206, 'Hanumangarh', '29', 'Rajasthan', ''),
(207, 'Hardoi', '34', 'Uttar Pradesh', ''),
(208, 'Haridwar', '35', 'Uttarakhand', ''),
(209, 'Hassan', '17', 'Karnataka', ''),
(210, 'Hathras', '34', 'Uttar Pradesh', ''),
(211, 'Haveri', '17', 'Karnataka', ''),
(212, 'Hazaribagh', '16', 'Jharkhand', ''),
(213, 'Hindupur', '2', 'Andhra Pradesh', ''),
(214, 'Hingoli', '21', 'Maharashtra', ''),
(215, 'Hissar', '13', 'Haryana', ''),
(216, 'Hooghly', '36', 'West Bengal', ''),
(217, 'Hoshangabad', '20', 'Madhya Pradesh', ''),
(218, 'Hoshiarpur', '28', 'Punjab', ''),
(219, 'Howrah', '36', 'West Bengal', ''),
(220, 'Hut Bay', '1', 'Andaman & Nicobar Islands', ''),
(221, 'Hyderabad City', '32', 'Telangana', ''),
(222, 'Hyderabad South East', '32', 'Telangana', ''),
(223, 'Idukki', '18', 'Kerala', ''),
(224, 'Imphal East', '22', 'Manipur', ''),
(225, 'Imphal West', '22', 'Manipur', ''),
(226, 'Indore City', '20', 'Madhya Pradesh', ''),
(227, 'Indore Moffusil', '20', 'Madhya Pradesh', ''),
(228, 'Irinjalakuda', '18', 'Kerala', ''),
(229, 'Jabalpur', '20', 'Madhya Pradesh', ''),
(230, 'Jaintia Hills', '23', 'Meghalaya', ''),
(231, 'Jaipur', '29', 'Rajasthan', ''),
(232, 'Jaisalmer', '29', 'Rajasthan', ''),
(233, 'Jalandhar', '28', 'Punjab', ''),
(234, 'Jalaun', '34', 'Uttar Pradesh', ''),
(235, 'Jalgaon', '21', 'Maharashtra', ''),
(236, 'Jalna', '21', 'Maharashtra', ''),
(237, 'Jalor', '29', 'Rajasthan', ''),
(238, 'Jalpaiguri', '36', 'West Bengal', ''),
(239, 'Jammu', '15', 'Jammu & Kashmir', ''),
(240, 'Jamnagar', '12', 'Gujarat', ''),
(241, 'Jaunpur', '34', 'Uttar Pradesh', ''),
(242, 'Jhalawar', '29', 'Rajasthan', ''),
(243, 'Jhansi', '34', 'Uttar Pradesh', ''),
(244, 'Jhujhunu', '29', 'Rajasthan', ''),
(245, 'Jodhpur', '29', 'Rajasthan', ''),
(246, 'Jorhat', '4', 'Assam', ''),
(247, 'Junagadh', '12', 'Gujarat', ''),
(248, 'Jyotiba Phule Nagar', '34', 'Uttar Pradesh', ''),
(249, 'Kakinada', '2', 'Andhra Pradesh', ''),
(250, 'Kalahandi', '26', 'Odisha', ''),
(251, 'Kamrup', '4', 'Assam', ''),
(252, 'Kanchipuram', '31', 'Tamil Nadu', ''),
(253, 'Kannauj', '34', 'Uttar Pradesh', ''),
(254, 'Kanniyakumari', '31', 'Tamil Nadu', ''),
(255, 'Kannur', '18', 'Kerala', ''),
(256, 'Kanpur Dehat', '34', 'Uttar Pradesh', ''),
(257, 'Kanpur Nagar', '34', 'Uttar Pradesh', ''),
(258, 'Kapurthala', '28', 'Punjab', ''),
(259, 'Karaikal', '27', 'Poducherry', ''),
(260, 'Karaikudi', '31', 'Tamil Nadu', ''),
(261, 'Karauli', '29', 'Rajasthan', ''),
(262, 'Karbi Anglong', '4', 'Assam', ''),
(263, 'Kargil', '15', 'Jammu & Kashmir', ''),
(264, 'Karimganj', '4', 'Assam', ''),
(265, 'Karimnagar', '32', 'Telangana', ''),
(266, 'Karnal', '13', 'Haryana', ''),
(267, 'Karur', '31', 'Tamil Nadu', ''),
(268, 'Karwar', '17', 'Karnataka', ''),
(269, 'Kasaragod', '18', 'Kerala', ''),
(270, 'Kathua', '15', 'Jammu & Kashmir', ''),
(271, 'Kaushambi', '34', 'Uttar Pradesh', ''),
(272, 'Keonjhar', '26', 'Odisha', ''),
(273, 'Khammam (AP)', '2', 'Andhra Pradesh', ''),
(274, 'Khammam (TL)', '32', 'Telangana', ''),
(275, 'Khandwa', '20', 'Madhya Pradesh', ''),
(276, 'Kheda', '12', 'Gujarat', ''),
(277, 'Kheri', '34', 'Uttar Pradesh', ''),
(278, 'Kiphire', '25', 'Nagaland', ''),
(279, 'Kodagu', '17', 'Karnataka', ''),
(280, 'Kohima', '25', 'Nagaland', ''),
(281, 'Kokrajhar', '4', 'Assam', ''),
(282, 'Kolar', '17', 'Karnataka', ''),
(283, 'Kolasib', '24', 'Mizoram', ''),
(284, 'Kolhapur', '21', 'Maharashtra', ''),
(285, 'Kolkata', '36', 'West Bengal', ''),
(286, 'Koraput', '26', 'Odisha', ''),
(287, 'Kota', '29', 'Rajasthan', ''),
(288, 'Kottayam', '18', 'Kerala', ''),
(289, 'Kovilpatti', '31', 'Tamil Nadu', ''),
(290, 'Krishnagiri', '31', 'Tamil Nadu', ''),
(291, 'Kulgam', '15', 'Jammu & Kashmir', ''),
(292, 'Kumbakonam', '31', 'Tamil Nadu', ''),
(293, 'Kupwara', '15', 'Jammu & Kashmir', ''),
(294, 'Kurnool', '2', 'Andhra Pradesh', ''),
(295, 'Kurukshetra', '13', 'Haryana', ''),
(296, 'Kurung Kumey', '3', 'Arunachal Pradesh', ''),
(297, 'Kushinagar', '34', 'Uttar Pradesh', ''),
(298, 'Kutch', '12', 'Gujarat', ''),
(299, 'Lakhimpur', '4', 'Assam', ''),
(300, 'Lakshadweep', '19', 'Lakshadweep', ''),
(301, 'Lalitpur', '34', 'Uttar Pradesh', ''),
(302, 'Latur', '21', 'Maharashtra', ''),
(303, 'Lawngtlai', '24', 'Mizoram', ''),
(304, 'Leh', '15', 'Jammu & Kashmir', ''),
(305, 'Lohit', '3', 'Arunachal Pradesh', ''),
(306, 'Longleng', '25', 'Nagaland', ''),
(307, 'Lower Subansiri', '3', 'Arunachal Pradesh', ''),
(308, 'Lucknow', '34', 'Uttar Pradesh', ''),
(309, 'Ludhiana', '28', 'Punjab', ''),
(310, 'Lunglei', '24', 'Mizoram', ''),
(311, 'Machilipatnam', '2', 'Andhra Pradesh', ''),
(312, 'Madhubani', '5', 'Bihar', ''),
(313, 'Madurai', '31', 'Tamil Nadu', ''),
(314, 'Mahabubnagar', '32', 'Telangana', ''),
(315, 'Maharajganj', '34', 'Uttar Pradesh', ''),
(316, 'Mahesana', '12', 'Gujarat', ''),
(317, 'Mahoba', '34', 'Uttar Pradesh', ''),
(318, 'Mainpuri', '34', 'Uttar Pradesh', ''),
(319, 'Malda', '36', 'West Bengal', ''),
(320, 'Mammit', '24', 'Mizoram', ''),
(321, 'Mandi', '14', 'Himachal Pradesh', ''),
(322, 'Mandsaur', '20', 'Madhya Pradesh', ''),
(323, 'Mandya', '17', 'Karnataka', ''),
(324, 'Mangalore', '17', 'Karnataka', ''),
(325, 'Manjeri', '18', 'Kerala', ''),
(326, 'Mansa', '28', 'Punjab', ''),
(327, 'Marigaon', '4', 'Assam', ''),
(328, 'Mathura', '34', 'Uttar Pradesh', ''),
(329, 'Mau', '34', 'Uttar Pradesh', ''),
(330, 'Mavelikara', '18', 'Kerala', ''),
(331, 'Mayabander', '1', 'Andaman & Nicobar Islands', ''),
(332, 'Mayiladuthurai', '31', 'Tamil Nadu', ''),
(333, 'Mayurbhanj', '26', 'Odisha', ''),
(334, 'Medak', '32', 'Telangana', ''),
(335, 'Meerut', '34', 'Uttar Pradesh', ''),
(336, 'Meghalaya', '23', 'Meghalaya', ''),
(337, 'Midnapore', '36', 'West Bengal', ''),
(338, 'Mirzapur', '34', 'Uttar Pradesh', ''),
(339, 'Moga', '28', 'Punjab', ''),
(340, 'Mohali', '28', 'Punjab', ''),
(341, 'Mokokchung', '25', 'Nagaland', ''),
(342, 'Mon', '25', 'Nagaland', ''),
(343, 'Monghyr', '5', 'Bihar', ''),
(344, 'Moradabad', '34', 'Uttar Pradesh', ''),
(345, 'Morena', '20', 'Madhya Pradesh', ''),
(346, 'Muktsar', '28', 'Punjab', ''),
(347, 'Mumbai', '21', 'Maharashtra', ''),
(348, 'Murshidabad', '36', 'West Bengal', ''),
(349, 'Muzaffarnagar', '34', 'Uttar Pradesh', ''),
(350, 'Muzaffarpur', '5', 'Bihar', ''),
(351, 'Mysore', '17', 'Karnataka', ''),
(352, 'Nadia', '36', 'West Bengal', ''),
(353, 'Nagaon', '4', 'Assam', ''),
(354, 'Nagapattinam', '31', 'Tamil Nadu', ''),
(355, 'Nagaur', '29', 'Rajasthan', ''),
(356, 'Nagpur', '21', 'Maharashtra', ''),
(357, 'Nainital', '35', 'Uttarakhand', ''),
(358, 'Nalanda', '5', 'Bihar', ''),
(359, 'Nalbari', '4', 'Assam', ''),
(360, 'Nalgonda', '32', 'Telangana', ''),
(361, 'Namakkal', '31', 'Tamil Nadu', ''),
(362, 'Nancorie', '1', 'Andaman & Nicobar Islands', ''),
(363, 'Nancowrie', '1', 'Andaman & Nicobar Islands', ''),
(364, 'Nanded', '21', 'Maharashtra', ''),
(365, 'Nandurbar', '21', 'Maharashtra', ''),
(366, 'Nandyal', '2', 'Andhra Pradesh', ''),
(367, 'Nanjangud', '17', 'Karnataka', ''),
(368, 'Narasaraopet', '2', 'Andhra Pradesh', ''),
(369, 'Nashik', '21', 'Maharashtra', ''),
(370, 'Navsari', '12', 'Gujarat', ''),
(371, 'Nawadha', '5', 'Bihar', ''),
(372, 'Nawanshahr', '28', 'Punjab', ''),
(373, 'Nellore', '2', 'Andhra Pradesh', ''),
(374, 'Nilgiris', '31', 'Tamil Nadu', ''),
(375, 'Nizamabad', '32', 'Telangana', ''),
(376, 'North 24 Parganas', '36', 'West Bengal', ''),
(377, 'North Cachar Hills', '4', 'Assam', ''),
(378, 'North Dinajpur', '36', 'West Bengal', ''),
(379, 'North Sikkim', '30', 'Sikkim', ''),
(380, 'North Tripura', '33', 'Tripura', ''),
(381, 'Osmanabad', '21', 'Maharashtra', ''),
(382, 'Ottapalam', '18', 'Kerala', ''),
(383, 'Palamau', '16', 'Jharkhand', ''),
(384, 'Palghat', '18', 'Kerala', ''),
(385, 'Pali', '29', 'Rajasthan', ''),
(386, 'Panchmahals', '12', 'Gujarat', ''),
(387, 'Papum Pare', '3', 'Arunachal Pradesh', ''),
(388, 'Parbhani', '21', 'Maharashtra', ''),
(389, 'Parvathipuram', '2', 'Andhra Pradesh', ''),
(390, 'Patan', '12', 'Gujarat', ''),
(391, 'Pathanamthitta', '18', 'Kerala', ''),
(392, 'Patiala', '28', 'Punjab', ''),
(393, 'Patna', '5', 'Bihar', ''),
(394, 'Pattukottai', '31', 'Tamil Nadu', ''),
(395, 'Pauri Garhwal', '35', 'Uttarakhand', ''),
(396, 'Peddapalli', '32', 'Telangana', ''),
(397, 'Peren', '25', 'Nagaland', ''),
(398, 'Phek', '25', 'Nagaland', ''),
(399, 'Phulbani', '26', 'Odisha', ''),
(400, 'Pilibhit', '34', 'Uttar Pradesh', ''),
(401, 'Pithoragarh', '35', 'Uttarakhand', ''),
(402, 'Poducherry (PD)', '27', 'Poducherry', ''),
(403, 'Poducherry (TN)', '31', 'Tamil Nadu', ''),
(404, 'Pollachi', '31', 'Tamil Nadu', ''),
(405, 'Poonch', '15', 'Jammu & Kashmir', ''),
(406, 'Porbandar', '12', 'Gujarat', ''),
(407, 'Port Blair', '1', 'Andaman & Nicobar Islands', ''),
(408, 'Prakasam', '2', 'Andhra Pradesh', ''),
(409, 'Pratapgarh', '34', 'Uttar Pradesh', ''),
(410, 'Proddatur', '2', 'Andhra Pradesh', ''),
(411, 'Pudukkottai', '31', 'Tamil Nadu', ''),
(412, 'Pulwama', '15', 'Jammu & Kashmir', ''),
(413, 'Pune', '21', 'Maharashtra', ''),
(414, 'Puri', '26', 'Odisha', ''),
(415, 'Purnea', '5', 'Bihar', ''),
(416, 'Purulia', '36', 'West Bengal', ''),
(417, 'Puttur', '17', 'Karnataka', ''),
(418, 'Quilon', '18', 'Kerala', ''),
(419, 'Raebareli', '34', 'Uttar Pradesh', ''),
(420, 'Raichur', '17', 'Karnataka', ''),
(421, 'Raigarh (CT)', '7', 'Chattisgarh', ''),
(422, 'Raigarh (MH)', '21', 'Maharashtra', ''),
(423, 'Raipur', '7', 'Chattisgarh', ''),
(424, 'Rajahmundry', '2', 'Andhra Pradesh', ''),
(425, 'Rajauri', '15', 'Jammu & Kashmir', ''),
(426, 'Rajkot', '12', 'Gujarat', ''),
(427, 'Rajsamand', '29', 'Rajasthan', ''),
(428, 'Ramanathapuram', '31', 'Tamil Nadu', ''),
(429, 'Rampur', '34', 'Uttar Pradesh', ''),
(430, 'Rampur Bushahr', '14', 'Himachal Pradesh', ''),
(431, 'Ranchi', '16', 'Jharkhand', ''),
(432, 'Rangat', '1', 'Andaman & Nicobar Islands', ''),
(433, 'Ratlam', '20', 'Madhya Pradesh', ''),
(434, 'Ratnagiri', '21', 'Maharashtra', ''),
(435, 'Reasi', '15', 'Jammu & Kashmir', ''),
(436, 'Rewa', '20', 'Madhya Pradesh', ''),
(437, 'Ri Bhoi', '23', 'Meghalaya', ''),
(438, 'Rohtak', '13', 'Haryana', ''),
(439, 'Rohtas', '5', 'Bihar', ''),
(440, 'Ropar', '28', 'Punjab', ''),
(441, 'Rudraprayag', '35', 'Uttarakhand', ''),
(442, 'Rupnagar', '28', 'Punjab', ''),
(443, 'Sabarkantha', '12', 'Gujarat', ''),
(444, 'Sagar', '20', 'Madhya Pradesh', ''),
(445, 'Saharanpur', '34', 'Uttar Pradesh', ''),
(446, 'Saharsa', '5', 'Bihar', ''),
(447, 'Salem East', '31', 'Tamil Nadu', ''),
(448, 'Salem West', '31', 'Tamil Nadu', ''),
(449, 'Samastipur', '5', 'Bihar', ''),
(450, 'Sambalpur', '26', 'Odisha', ''),
(451, 'Sangareddy', '32', 'Telangana', ''),
(452, 'Sangli', '21', 'Maharashtra', ''),
(453, 'Sangrur', '28', 'Punjab', ''),
(454, 'Sant Kabir Nagar', '34', 'Uttar Pradesh', ''),
(455, 'Sant Ravidas Nagar', '34', 'Uttar Pradesh', ''),
(456, 'Santhal Parganas', '16', 'Jharkhand', ''),
(457, 'Saran', '5', 'Bihar', ''),
(458, 'Satara', '21', 'Maharashtra', ''),
(459, 'Sawai Madhopur', '29', 'Rajasthan', ''),
(460, 'Secunderabad', '32', 'Telangana', ''),
(461, 'Sehore', '20', 'Madhya Pradesh', ''),
(462, 'Senapati', '22', 'Manipur', ''),
(463, 'Serchhip', '24', 'Mizoram', ''),
(464, 'Shahdol', '20', 'Madhya Pradesh', ''),
(465, 'Shahjahanpur', '34', 'Uttar Pradesh', ''),
(466, 'Shimla', '14', 'Himachal Pradesh', ''),
(467, 'Shimoga', '17', 'Karnataka', ''),
(468, 'Shrawasti', '34', 'Uttar Pradesh', ''),
(469, 'Sibsagar', '4', 'Assam', ''),
(470, 'Siddharthnagar', '34', 'Uttar Pradesh', ''),
(471, 'Sikar', '29', 'Rajasthan', ''),
(472, 'Sindhudurg', '21', 'Maharashtra', ''),
(473, 'Singhbhum', '16', 'Jharkhand', ''),
(474, 'Sirohi', '29', 'Rajasthan', ''),
(475, 'Sirsi', '17', 'Karnataka', ''),
(476, 'Sitamarhi', '5', 'Bihar', ''),
(477, 'Sitapur', '34', 'Uttar Pradesh', ''),
(478, 'Sivaganga', '31', 'Tamil Nadu', ''),
(479, 'Siwan', '5', 'Bihar', ''),
(480, 'Solan', '14', 'Himachal Pradesh', ''),
(481, 'Solapur', '21', 'Maharashtra', ''),
(482, 'Sonbhadra', '34', 'Uttar Pradesh', ''),
(483, 'Sonepat', '13', 'Haryana', ''),
(484, 'Sonitpur', '4', 'Assam', ''),
(485, 'South 24 Parganas', '36', 'West Bengal', ''),
(486, 'South Dinajpur', '36', 'West Bengal', ''),
(487, 'South Garo Hills', '23', 'Meghalaya', ''),
(488, 'South Sikkim', '30', 'Sikkim', ''),
(489, 'South Tripura', '33', 'Tripura', ''),
(490, 'Srikakulam', '2', 'Andhra Pradesh', ''),
(491, 'Srinagar', '15', 'Jammu & Kashmir', ''),
(492, 'Srirangam', '31', 'Tamil Nadu', ''),
(493, 'Sultanpur', '34', 'Uttar Pradesh', ''),
(494, 'Sundargarh', '26', 'Odisha', ''),
(495, 'Surat', '12', 'Gujarat', ''),
(496, 'Surendranagar', '12', 'Gujarat', ''),
(497, 'Suryapet', '32', 'Telangana', ''),
(498, 'Tadepalligudem', '2', 'Andhra Pradesh', ''),
(499, 'Tambaram', '31', 'Tamil Nadu', ''),
(500, 'Tamenglong', '22', 'Manipur', ''),
(501, 'Tamluk', '36', 'West Bengal', ''),
(502, 'Tarn Taran', '28', 'Punjab', ''),
(503, 'Tawang', '3', 'Arunachal Pradesh', ''),
(504, 'Tehri Garhwal', '35', 'Uttarakhand', ''),
(505, 'Tenali', '2', 'Andhra Pradesh', ''),
(506, 'Thalassery', '18', 'Kerala', ''),
(507, 'Thane', '21', 'Maharashtra', ''),
(508, 'Thanjavur', '31', 'Tamil Nadu', ''),
(509, 'Theni', '31', 'Tamil Nadu', ''),
(510, 'Thoubal', '22', 'Manipur', ''),
(511, 'Tinsukia', '4', 'Assam', ''),
(512, 'Tirap', '3', 'Arunachal Pradesh', ''),
(513, 'Tiruchirapalli', '31', 'Tamil Nadu', ''),
(514, 'Tirunelveli', '31', 'Tamil Nadu', ''),
(515, 'Tirupati', '2', 'Andhra Pradesh', ''),
(516, 'Tirupattur', '31', 'Tamil Nadu', ''),
(517, 'Tirupur', '31', 'Tamil Nadu', ''),
(518, 'Tirur', '18', 'Kerala', ''),
(519, 'Tiruvalla', '18', 'Kerala', ''),
(520, 'Tiruvannamalai', '31', 'Tamil Nadu', ''),
(521, 'Tonk', '29', 'Rajasthan', ''),
(522, 'Trichur', '18', 'Kerala', ''),
(523, 'Trivandrum North', '18', 'Kerala', ''),
(524, 'Trivandrum South', '18', 'Kerala', ''),
(525, 'Tuensang', '25', 'Nagaland', ''),
(526, 'Tumkur', '17', 'Karnataka', ''),
(527, 'Tuticorin', '31', 'Tamil Nadu', ''),
(528, 'Udaipur', '29', 'Rajasthan', ''),
(529, 'Udham Singh Nagar', '35', 'Uttarakhand', ''),
(530, 'Udhampur', '15', 'Jammu & Kashmir', ''),
(531, 'Udupi', '17', 'Karnataka', ''),
(532, 'Ujjain', '20', 'Madhya Pradesh', ''),
(533, 'Ukhrul', '22', 'Manipur', ''),
(534, 'Una', '14', 'Himachal Pradesh', ''),
(535, 'Unnao', '34', 'Uttar Pradesh', ''),
(536, 'Upper Siang', '3', 'Arunachal Pradesh', ''),
(537, 'Upper Subansiri', '3', 'Arunachal Pradesh', ''),
(538, 'Uttarkashi', '35', 'Uttarakhand', ''),
(539, 'Vadakara', '18', 'Kerala', ''),
(540, 'Vadodara East', '12', 'Gujarat', ''),
(541, 'Vadodara West', '12', 'Gujarat', ''),
(542, 'Vaishali', '5', 'Bihar', ''),
(543, 'Valsad', '12', 'Gujarat', ''),
(544, 'Varanasi', '34', 'Uttar Pradesh', ''),
(545, 'Vellore', '31', 'Tamil Nadu', ''),
(546, 'Vidisha', '20', 'Madhya Pradesh', ''),
(547, 'Vijayawada', '2', 'Andhra Pradesh', ''),
(548, 'Virudhunagar', '31', 'Tamil Nadu', ''),
(549, 'Visakhapatnam', '2', 'Andhra Pradesh', ''),
(550, 'Vizianagaram', '2', 'Andhra Pradesh', ''),
(551, 'Vriddhachalam', '31', 'Tamil Nadu', ''),
(552, 'Wanaparthy', '32', 'Telangana', ''),
(553, 'Warangal', '32', 'Telangana', ''),
(554, 'Wardha', '21', 'Maharashtra', ''),
(555, 'Washim', '21', 'Maharashtra', ''),
(556, 'West Champaran', '5', 'Bihar', ''),
(557, 'West Garo Hills', '23', 'Meghalaya', ''),
(558, 'West Kameng', '3', 'Arunachal Pradesh', ''),
(559, 'West Khasi Hills', '23', 'Meghalaya', ''),
(560, 'West Siang', '3', 'Arunachal Pradesh', ''),
(561, 'West Sikkim', '30', 'Sikkim', ''),
(562, 'West Tripura', '33', 'Tripura', ''),
(563, 'Wokha', '25', 'Nagaland', ''),
(564, 'Yavatmal', '21', 'Maharashtra', ''),
(565, 'Zunhebotto', '25', 'Nagaland', ''),
(566, 'Andaman & Nicobar Islands', '1', 'Andaman & Nicobar Islands', ''),
(567, 'Andhra Pradesh', '2', 'Andhra Pradesh', ''),
(568, '', '0', 'Andaman & Nicobar Islands', '1'),
(569, '', '0', 'Andhra Pradesh', '2'),
(570, '', '0', 'Arunachal Pradesh', '3'),
(571, '', '0', 'Assam', '4'),
(572, '', '0', 'Bihar', '5'),
(573, '', '0', 'Chandigarh', '6'),
(574, '', '0', 'Chattisgarh', '7'),
(575, '', '0', 'Dadra & Nagar Haveli', '8'),
(576, '', '0', 'Daman & Diu', '9'),
(577, '', '0', 'Delhi', '10'),
(578, '', '0', 'Goa', '11'),
(579, '', '0', 'Gujarat', '12'),
(580, '', '0', 'Haryana', '13'),
(581, '', '0', 'Himachal Pradesh', '14'),
(582, '', '0', 'Jammu & Kashmir', '15'),
(583, '', '0', 'Jharkhand', '16'),
(584, '', '0', 'Karnataka', '17'),
(585, '', '0', 'Kerala', '18'),
(586, '', '0', 'Lakshadweep', '19'),
(587, '', '0', 'Madhya Pradesh', '20'),
(588, '', '0', 'Maharashtra', '21'),
(589, '', '0', 'Manipur', '22'),
(590, '', '0', 'Meghalaya', '23'),
(591, '', '0', 'Mizoram', '24'),
(592, '', '0', 'Nagaland', '25'),
(593, '', '0', 'Odisha', '26'),
(594, '', '0', 'Poducherry', '27'),
(595, '', '0', 'Punjab', '28'),
(596, '', '0', 'Rajasthan', '29'),
(597, '', '0', 'Sikkim', '30'),
(598, '', '0', 'Tamil Nadu', '31'),
(599, '', '0', 'Telangana', '32'),
(600, '', '0', 'Tripura', '33'),
(601, '', '0', 'Uttar Pradesh', '34'),
(602, '', '0', 'Uttarakhand', '35'),
(603, '', '0', 'West Bengal', '36');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `dealerId` int(11) NOT NULL,
  `dealerFname` varchar(200) NOT NULL,
  `dealerLname` varchar(200) NOT NULL,
  `dealerContact` varchar(200) NOT NULL,
  `dealerEmail` varchar(200) NOT NULL,
  `dealerCity` varchar(200) NOT NULL,
  `dealerState` varchar(200) NOT NULL,
  `dealerLandmark` varchar(200) NOT NULL,
  `dealerAltContact` varchar(200) NOT NULL,
  `dealerBio` varchar(5000) NOT NULL,
  `dealerPassword` varchar(200) NOT NULL,
  `dealerImage` varchar(200) NOT NULL,
  `dealerView` int(11) NOT NULL,
  `dealerdate` varchar(200) NOT NULL,
  `dealerTime` varchar(200) NOT NULL,
  `dealerSlug` varchar(500) NOT NULL,
  `dealerStatus` int(11) NOT NULL,
  `dealerDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`dealerId`, `dealerFname`, `dealerLname`, `dealerContact`, `dealerEmail`, `dealerCity`, `dealerState`, `dealerLandmark`, `dealerAltContact`, `dealerBio`, `dealerPassword`, `dealerImage`, `dealerView`, `dealerdate`, `dealerTime`, `dealerSlug`, `dealerStatus`, `dealerDateTime`) VALUES
(1, 'Gautam ', 'Kumar', '9110937615', 'gk@g.cd', '', '', '', '', '', '123', '', 0, '29-09-2019', '11:53:27', 'gautam', 1, '2019-10-19 15:43:45'),
(2, 'Neearj', 'Yadav', '8754214587', 'neeraj', '', '', '', '', '', '123', '', 0, '29-09-2019', '11:57:33', 'neearj', 1, '2019-10-19 15:52:38'),
(3, 'f', 'M', '8520852065', 'DFwr@jer.c', 'oig', 'oi', 'foi', '52052065852', 'foi', '', '', 0, '22-10-2019', '08:48:26', 'f', 1, '2019-10-22 03:18:26'),
(4, 'fW', 'DG', '8520220588', 'df@g.c', 'purnea', 'ini', 'oifeV', '8978547854', 'WOIEFQ', '', '', 0, '22-10-2019', '08:49:24', 'fw', 1, '2019-10-22 03:19:24'),
(5, 'dvs', 'iuokf', '8520852074', 'kfWJ@g.c', 'PURNEA', 'bihar', 'jge', '7418520963', 'rgy', '', '', 0, '22-10-2019', '08:52:07', 'dvs', 1, '2019-10-22 03:22:07'),
(6, 'FEGW', 'KJL,.', '8520741369', 'JSG@g.c', 'vgk', 'oigr', 'fo', '8456896585', 'of', '', '', 0, '22-10-2019', '08:52:28', 'fegw', 1, '2019-10-22 03:22:28'),
(7, 'dfwg', 'grej', '7896587425', 'f@g.co', 'er', 'gR', 'FDAB', '7854785695', 'GRHJYN FDNG ', '', 'g.jpg', 0, '22-10-2019', '08:56:15', 'dfwg', 1, '2019-10-22 03:26:15'),
(8, 'gautam', 'kumar', '9842184874', 'ga@g.c', 'purnea', 'bihar', 'kf', '5114884897', 'kfH', '', '9b3191637c5adad.jpeg', 0, '30-10-2019', '08:37:16', 'gautam-1', 1, '2019-10-30 03:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

CREATE TABLE `fuel` (
  `fuelId` int(11) NOT NULL,
  `fuelName` varchar(200) NOT NULL,
  `fuelStatus` int(11) NOT NULL,
  `fuelSlug` varchar(200) NOT NULL,
  `fuelDate` varchar(200) NOT NULL,
  `fuelTime` varchar(200) NOT NULL,
  `fuelDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fuel`
--

INSERT INTO `fuel` (`fuelId`, `fuelName`, `fuelStatus`, `fuelSlug`, `fuelDate`, `fuelTime`, `fuelDateTime`) VALUES
(2, 'Petrol', 1, 'petrol', '04-10-2019', '07:08:01', '2019-10-04 01:38:01'),
(3, 'Diesel', 1, 'diesel', '25-10-2019', '09:02:43', '2019-10-25 15:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `lead`
--

CREATE TABLE `lead` (
  `leadId` int(11) NOT NULL,
  `leadName` varchar(200) NOT NULL,
  `leadEmail` varchar(200) NOT NULL,
  `leadContact` varchar(200) NOT NULL,
  `leadDealer` varchar(200) NOT NULL,
  `leadCar` varchar(200) NOT NULL,
  `leadMessage` varchar(500) NOT NULL,
  `leadDate` varchar(200) NOT NULL,
  `leadTime` varchar(200) NOT NULL,
  `leadDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lead`
--

INSERT INTO `lead` (`leadId`, `leadName`, `leadEmail`, `leadContact`, `leadDealer`, `leadCar`, `leadMessage`, `leadDate`, `leadTime`, `leadDateTime`) VALUES
(1, 'Rajendra Prasad', 'rokssindranil869@gmail.com', '9110937613', '', '', 'hj gjb k bk g', '', '', '2019-10-31 13:14:27'),
(2, 'Rajendra Prasad', 'rokssindranil869@gmail.com', '9110937613', '', '', 'hj gjb k bk g', '', '', '2019-10-31 13:14:27'),
(4, 'Rajendra Prasad', 'rokssindranil869@gmail.com', '070 0451 9857', '', '', 'sADGV', '', '', '2019-10-31 13:14:27'),
(5, 'Rajendra Prasad', 'rokssindranil869@gmail.com', '070 0451 9857', '', '', 'adfs', '', '', '2019-10-31 13:14:27'),
(7, 'gautam kumar', 'gk@gmail.com', '9110937613', '', '', 'somehing', '', '', '2019-10-31 13:14:27'),
(8, 'gautam kumar', 'rokssindranil869@gmail.com', '3456789', '', '', 'vuyv', '', '', '2019-10-31 13:14:27'),
(9, 'f', 'ef@g.c', '8520852025', '2', '28', 'ew', '', '', '2019-10-31 14:07:19'),
(10, 'va', 'wdfgb@gkj.c', '8520852017', '', '', '[pae', '', '', '2019-10-31 13:14:27'),
(11, 'Gautam kumar', 'dwf@g.c', '8520', '2', '28', 'dfegr', '', '', '2019-10-31 14:07:14'),
(12, 'vSD', 'vds@h.b', '8520', '', '', 'hl', '', '', '2019-10-31 13:14:27'),
(13, 'Gautam kumar', 'gk@gmail.com', '8520852017', '', '', 'Hy', '', '', '2019-10-31 13:14:27'),
(14, 'Gautam kumar ', 'testing@gmail.com', '9110937613', '2', '28', 'kjldns vj', '31-10-2019', '02:48:09', '2019-10-31 13:51:50'),
(15, 'test', 'test@g.com', '8500745287', '2', '28', 'LWGK', '31-10-2019', '02:50:09', '2019-10-31 13:51:54'),
(16, 'vs', 'dsv@g.v', '85632852020', '2', '28', 'ffd', '31-10-2019', '02:51:09', '2019-10-31 13:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `maincategory`
--

CREATE TABLE `maincategory` (
  `main_id` int(11) NOT NULL,
  `main_title` varchar(100) NOT NULL,
  `main_titleslug` varchar(100) NOT NULL,
  `main_image` varchar(100) NOT NULL,
  `main_parentid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maincategory`
--

INSERT INTO `maincategory` (`main_id`, `main_title`, `main_titleslug`, `main_image`, `main_parentid`) VALUES
(1, 'Event', 'event', 'event.jpg', 'E1000'),
(2, 'Medical', 'medical', 'medical.jpg', 'M1000'),
(3, 'Education', 'education', 'education.jpg', 'S1000'),
(4, 'Services', 'services', 'services.jpg', 'K1000'),
(5, 'Construction', 'construction', 'construction.jpg', 'C1000'),
(6, 'Shops & Showroom', 'ShopsAndShowroom', 'showroom.jpg', 'SH100'),
(7, 'Foods & Restaurant', 'FoodsAndRestaurant', 'restro.jpg', 'FR100'),
(8, 'Daily Needs', 'dailyneeds', 'shopping.jpg', 'DN100');

-- --------------------------------------------------------

--
-- Table structure for table `menufecturer`
--

CREATE TABLE `menufecturer` (
  `menufecturerId` int(11) NOT NULL,
  `menufecturerName` varchar(200) NOT NULL,
  `menufecturerWebsite` varchar(200) NOT NULL,
  `menufecturerStatus` int(11) NOT NULL,
  `menufecturerSlug` varchar(250) NOT NULL,
  `menufecturerDate` varchar(200) NOT NULL,
  `menufecturerTime` varchar(200) NOT NULL,
  `menufecturerDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menufecturer`
--

INSERT INTO `menufecturer` (`menufecturerId`, `menufecturerName`, `menufecturerWebsite`, `menufecturerStatus`, `menufecturerSlug`, `menufecturerDate`, `menufecturerTime`, `menufecturerDateTime`) VALUES
(2, 'sgm group', 'http://www.codergautam.epizy.com', 1, 'sgm-group', '02-10-2019', '03:48:27', '2019-10-19 01:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `modelId` int(11) NOT NULL,
  `modelName` varchar(200) NOT NULL,
  `modelBrand` varchar(200) NOT NULL,
  `modelSlug` varchar(200) NOT NULL,
  `modelStatus` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`modelId`, `modelName`, `modelBrand`, `modelSlug`, `modelStatus`) VALUES
(2, 'gfhg', '9', 'gfhg', 1),
(3, 'maruti 100 fg j 34', '9', 'maruti-100-fg-j-34', 1),
(4, 'hf', '8', 'hf', 1),
(5, 'A1', '10', 'a1', 1),
(6, 'A3', '10', 'a3', 1),
(7, 'A4', '10', 'a4', 1),
(8, 'A5', '10', 'a5', 1),
(9, 'Journey', '16', 'journey', 1),
(10, '500', '11', '500', 1),
(11, 'Fullback', '11', 'fullback', 1),
(12, 'Tipo', '11', 'tipo', 1),
(13, '1 Series', '12', '1-series', 1),
(14, '3 Series', '12', '3-series', 1),
(15, '4 Series', '12', '4-series', 1),
(16, '5 Series', '12', '5-series', 1),
(17, '7 Series', '12', '7-series', 1),
(18, 'M2', '12', 'm2', 1),
(19, 'Eco Sport', '13', 'eco-sport', 1),
(20, 'Everest', '13', 'everest', 1),
(21, 'Figo', '13', 'figo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `requestcar`
--

CREATE TABLE `requestcar` (
  `requestId` int(11) NOT NULL,
  `requestName` varchar(200) NOT NULL,
  `requestEmail` varchar(200) NOT NULL,
  `requestContact` varchar(200) NOT NULL,
  `requestMessage` varchar(200) NOT NULL,
  `requestDate` varchar(200) NOT NULL,
  `requestTime` varchar(200) NOT NULL,
  `requestDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestcar`
--

INSERT INTO `requestcar` (`requestId`, `requestName`, `requestEmail`, `requestContact`, `requestMessage`, `requestDate`, `requestTime`, `requestDateTime`) VALUES
(1, 'Gautam Kumar', 'gautamm@gmail.com', '', 'SOmething', '30-10-2019', '02:26:55', '2019-10-30 01:26:55'),
(2, 'FWA', 'efh@g.c', '85620', 'tsrh', '30-10-2019', '02:29:47', '2019-10-30 01:29:47'),
(3, 'db', 'zg@g.c', '85', 'hhx', '30-10-2019', '02:32:50', '2019-10-30 01:32:50');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewId` int(11) NOT NULL,
  `reviewDate` varchar(200) NOT NULL,
  `reviewTime` varchar(200) NOT NULL,
  `reviewDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reviewDealer` varchar(200) NOT NULL,
  `reviewCar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`reviewId`, `reviewDate`, `reviewTime`, `reviewDateTime`, `reviewDealer`, `reviewCar`) VALUES
(1, '30-10-2019', '1572409187', '2019-10-30 04:19:47', '26', ''),
(2, '30-10-2019', '1572409234', '2019-10-30 04:20:34', '2', '26'),
(3, '30-10-2019', '1572409239', '2019-10-30 04:20:39', '2', '26'),
(4, '30-10-2019', '1572424256', '2019-10-30 08:30:56', '', '9'),
(5, '30-10-2019', '1572424302', '2019-10-30 08:31:42', '2', '26'),
(6, '30-10-2019', '1572424317', '2019-10-30 08:31:57', '', '9'),
(7, '30-10-2019', '1572424356', '2019-10-30 08:32:36', '', '9'),
(8, '30-10-2019', '1572426550', '2019-10-30 09:09:10', '2', '25'),
(9, '30-10-2019', '1572428267', '2019-10-30 09:37:47', '2', '25'),
(10, '30-10-2019', '1572429143', '2019-10-30 09:52:23', '', '10'),
(11, '30-10-2019', '1572429244', '2019-10-30 09:54:04', '', '10'),
(12, '30-10-2019', '1572429261', '2019-10-30 09:54:21', '', '10'),
(13, '30-10-2019', '1572429270', '2019-10-30 09:54:30', '2', '25'),
(14, '30-10-2019', '1572430410', '2019-10-30 10:13:30', '', '23'),
(15, '30-10-2019', '1572430432', '2019-10-30 10:13:52', '', '23'),
(16, '30-10-2019', '1572430432', '2019-10-30 10:13:52', '', '23'),
(17, '30-10-2019', '1572432612', '2019-10-30 10:50:12', '', '23'),
(18, '30-10-2019', '1572432821', '2019-10-30 10:53:41', '', '23'),
(19, '30-10-2019', '1572432864', '2019-10-30 10:54:24', '', '23'),
(20, '30-10-2019', '1572447451', '2019-10-30 14:57:31', '2', '25'),
(21, '30-10-2019', '1572448275', '2019-10-30 15:11:15', '', '11'),
(22, '31-10-2019', '1572499373', '2019-10-31 05:22:53', '2', '25'),
(23, '31-10-2019', '1572499376', '2019-10-31 05:22:56', '2', '25'),
(24, '31-10-2019', '1572501590', '2019-10-31 05:59:50', '', '10'),
(25, '31-10-2019', '1572502090', '2019-10-31 06:08:10', '2', '24'),
(26, '31-10-2019', '1572502188', '2019-10-31 06:09:48', '2', '24'),
(27, '31-10-2019', '1572508904', '2019-10-31 08:01:44', '', '11'),
(28, '31-10-2019', '1572508910', '2019-10-31 08:01:50', '2', '28'),
(29, '31-10-2019', '1572509133', '2019-10-31 08:05:33', '2', '28'),
(30, '31-10-2019', '1572512688', '2019-10-31 09:04:48', '2', '28'),
(31, '31-10-2019', '1572513725', '2019-10-31 09:22:05', '2', '28'),
(32, '31-10-2019', '1572526651', '2019-10-31 12:57:31', '2', '28'),
(33, '31-10-2019', '1572529436', '2019-10-31 13:43:56', '2', '28'),
(34, '31-10-2019', '1572529440', '2019-10-31 13:44:00', '2', '28'),
(35, '31-10-2019', '1572529597', '2019-10-31 13:46:37', '2', '28'),
(36, '31-10-2019', '1572529628', '2019-10-31 13:47:08', '2', '28'),
(37, '31-10-2019', '1572529724', '2019-10-31 13:48:44', '2', '28'),
(38, '31-10-2019', '1572529740', '2019-10-31 13:49:00', '2', '28'),
(39, '31-10-2019', '1572529773', '2019-10-31 13:49:33', '2', '28'),
(40, '31-10-2019', '1572529780', '2019-10-31 13:49:40', '2', '28'),
(41, '31-10-2019', '1572529850', '2019-10-31 13:50:50', '2', '28'),
(42, '31-10-2019', '1572529851', '2019-10-31 13:50:51', '2', '28'),
(43, '31-10-2019', '1572529869', '2019-10-31 13:51:09', '2', '28');

-- --------------------------------------------------------

--
-- Table structure for table `traction`
--

CREATE TABLE `traction` (
  `tractionId` int(11) NOT NULL,
  `tractionName` varchar(200) NOT NULL,
  `tractionSlug` varchar(200) NOT NULL,
  `tractionStatus` int(11) NOT NULL,
  `tractionDate` varchar(200) NOT NULL,
  `tractionTime` varchar(200) NOT NULL,
  `tractionDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traction`
--

INSERT INTO `traction` (`tractionId`, `tractionName`, `tractionSlug`, `tractionStatus`, `tractionDate`, `tractionTime`, `tractionDateTime`) VALUES
(5, 'Car', 'car', 1, '25-10-2019', '09:14:37', '2019-10-25 15:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `transmission`
--

CREATE TABLE `transmission` (
  `transmissionId` int(11) NOT NULL,
  `transmissionName` varchar(200) NOT NULL,
  `transmissionStatus` int(200) NOT NULL,
  `transmissionSlug` varchar(200) NOT NULL,
  `transmissionDate` varchar(200) NOT NULL,
  `transmissionTime` varchar(200) NOT NULL,
  `transmissionDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transmission`
--

INSERT INTO `transmission` (`transmissionId`, `transmissionName`, `transmissionStatus`, `transmissionSlug`, `transmissionDate`, `transmissionTime`, `transmissionDateTime`) VALUES
(2, 'Automatic', 1, 'automatic', '19-10-2019', '07:25:26', '2019-10-23 18:16:16'),
(3, 'Manual', 1, 'manual', '25-10-2019', '09:03:42', '2019-10-25 15:33:42');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `userEmail` varchar(200) NOT NULL,
  `userContact` varchar(200) NOT NULL,
  `userCity` varchar(200) NOT NULL,
  `userTrack` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `userEmail`, `userContact`, `userCity`, `userTrack`) VALUES
(1, 'Gautam', 'hg@g.co', '8520741258', '18', ''),
(2, 'Gautam', 'hg@g.co', '8520741258', '18', ''),
(3, 'Gautam', 'hg@g.co', '8520741258', '18', ''),
(4, 'Gautam', 'hg@g.co', '8520741258', '18', ''),
(5, 'Gautam', 'hg@g.co', '8520741258', '18', ''),
(6, 'Gautam', 'hg@g.co', '8520741258', '18', ''),
(7, 'Gautam', 'hg@g.co', '8520741258', '18', ''),
(8, 'Gautam', 'hg@g.co', '8520741258', '18', ''),
(9, 'Gautam', 'hg@g.co', '8520741258', '18', ''),
(10, 'Gautam', 'hg@g.co', '8520741258', '18', ''),
(11, 'Gautam', 'jhg@g.com', '8520852085', '1', ''),
(12, 'mfkj', 'jgk@g.c', '8520852785', '1', ''),
(13, 'Gautam Kumar', 'gautamm@h.c', '6485285741', '1', ''),
(14, 'dsvjk', 'jkf@g.c', '8542145253', '1', '301020191572411460'),
(15, 'jhf', 'jjf@g.c', '986208', '1', '301020191572411589'),
(16, 'hjf', 'jf@fh.c', '852085285', '4', 'a9fca5765f2b70bbfcfd'),
(17, 'hjd', 'kf@kgj.com', '852', '2', '2238714a2329f15de66d'),
(18, 'jkg', 'kg@g.com', '852756', '2', '8d13569aff9b2d059e21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `oauth_uid` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_username` varchar(100) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_contact` varchar(100) NOT NULL,
  `u_whatsapp` varchar(100) NOT NULL,
  `u_gender` varchar(100) NOT NULL,
  `u_doc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `u_image` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `u_address` varchar(100) NOT NULL,
  `u_dist` varchar(100) NOT NULL,
  `u_state` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `u_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `yearId` int(11) NOT NULL,
  `yearName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`yearId`, `yearName`) VALUES
(1, '1990'),
(2, '1991'),
(3, '1992'),
(4, '1993'),
(5, '1994'),
(6, '1995'),
(7, '1996'),
(8, '1998'),
(9, '1999'),
(10, '2000'),
(11, '2001'),
(12, '2002'),
(13, '2003'),
(14, '2004'),
(15, '2005'),
(16, '2006'),
(17, '2007'),
(18, '2008'),
(19, '2009'),
(20, '2010'),
(21, '2011'),
(22, '2012'),
(23, '2013'),
(24, '2014'),
(25, '2015'),
(26, '2016'),
(27, '2017'),
(28, '2018'),
(29, '2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`carId`);

--
-- Indexes for table `carimage`
--
ALTER TABLE `carimage`
  ADD PRIMARY KEY (`carimageId`);

--
-- Indexes for table `cartype`
--
ALTER TABLE `cartype`
  ADD PRIMARY KEY (`cartypeId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`dealerId`);

--
-- Indexes for table `fuel`
--
ALTER TABLE `fuel`
  ADD PRIMARY KEY (`fuelId`);

--
-- Indexes for table `lead`
--
ALTER TABLE `lead`
  ADD PRIMARY KEY (`leadId`);

--
-- Indexes for table `maincategory`
--
ALTER TABLE `maincategory`
  ADD PRIMARY KEY (`main_id`);

--
-- Indexes for table `menufecturer`
--
ALTER TABLE `menufecturer`
  ADD PRIMARY KEY (`menufecturerId`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`modelId`);

--
-- Indexes for table `requestcar`
--
ALTER TABLE `requestcar`
  ADD PRIMARY KEY (`requestId`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewId`);

--
-- Indexes for table `traction`
--
ALTER TABLE `traction`
  ADD PRIMARY KEY (`tractionId`);

--
-- Indexes for table `transmission`
--
ALTER TABLE `transmission`
  ADD PRIMARY KEY (`transmissionId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`yearId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `carId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `carimage`
--
ALTER TABLE `carimage`
  MODIFY `carimageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `cartype`
--
ALTER TABLE `cartype`
  MODIFY `cartypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=604;
--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `dealerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `fuel`
--
ALTER TABLE `fuel`
  MODIFY `fuelId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lead`
--
ALTER TABLE `lead`
  MODIFY `leadId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `maincategory`
--
ALTER TABLE `maincategory`
  MODIFY `main_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `menufecturer`
--
ALTER TABLE `menufecturer`
  MODIFY `menufecturerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `modelId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `requestcar`
--
ALTER TABLE `requestcar`
  MODIFY `requestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `traction`
--
ALTER TABLE `traction`
  MODIFY `tractionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `transmission`
--
ALTER TABLE `transmission`
  MODIFY `transmissionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `yearId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
