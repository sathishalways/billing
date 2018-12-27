-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 12:34 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syndinzg_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` int(10) NOT NULL,
  `accessory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `accessory`) VALUES
(1, 'Accessories 1');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'welcome');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `status`) VALUES
(1, 'STAGO', 1),
(2, 'test', 0),
(3, 'ssss', 0),
(4, 'sssssds', 0);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(10) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`) VALUES
(1, 'MUMBAI'),
(2, 'PUNE'),
(3, 'KOLHAPUR'),
(4, 'AHMEDNAGAR'),
(5, 'MUNDRA'),
(6, 'SANGLI'),
(7, 'SOLAPUR'),
(8, 'AURANGABAD'),
(9, 'AHMEDNAGAR'),
(10, 'BARSHI'),
(11, 'NASHIK'),
(12, 'AKOLA'),
(13, 'Dader(MH)'),
(14, 'JABALPUR'),
(15, 'BHILAI'),
(16, 'DHAMTARI'),
(17, 'Satna'),
(18, 'GWALIOR'),
(19, 'INDORE'),
(20, 'BHUBANESWAR'),
(21, 'PATNA'),
(22, 'UJJAIN'),
(23, 'CHITRAKOOT'),
(24, 'BHOPAL'),
(25, 'AGRA'),
(26, 'GORAKHPUR'),
(27, 'MEERUT'),
(28, 'ALLAHABAD'),
(29, 'LUCKNOW'),
(30, 'HALDWANI'),
(31, 'VARANASI'),
(32, 'MIRZAPUR'),
(33, 'SAHARANPUR'),
(34, 'AZAMGARH'),
(35, 'NOIDA'),
(36, 'GHAZIABAD'),
(37, 'AGRA'),
(38, 'MURADABAD'),
(39, 'ALIGARH'),
(40, 'HALDWANI'),
(41, 'KASHI PUR'),
(42, 'Chennai'),
(43, 'Coimbatore'),
(44, 'Trichy'),
(45, 'Pondichery'),
(46, 'JODHPUR'),
(47, 'KARAULI'),
(48, 'KEKARI'),
(49, 'KISHANGARH'),
(50, 'KOTA'),
(51, 'KOTPUTLI'),
(52, 'NAGAUR'),
(53, 'NASIRABAD'),
(54, 'NATHDWARA'),
(55, 'RAJSAMAND'),
(56, 'SIKAR'),
(57, 'SIROHI'),
(58, 'SUJANGARH'),
(59, 'TONK'),
(60, 'UDAIPUR'),
(61, 'AJMER'),
(62, 'ALWAR'),
(63, 'BALOTARA'),
(64, 'BARAN'),
(65, 'BEAWAR'),
(66, 'BHARATPUR'),
(67, 'BHILWARA'),
(68, 'BIKANER'),
(69, 'BUNDI'),
(70, 'CHURU'),
(71, 'DAUSA'),
(72, 'DHAULPUR'),
(73, 'DIDWANA'),
(74, 'DUNGARPUR'),
(75, 'GANGAPUR CITY'),
(76, 'HANUMANGARH'),
(77, 'JAIPUR'),
(78, 'JHALAWAR'),
(79, 'JHUNJHUNU'),
(80, 'Belgaum'),
(81, 'Bangalore'),
(82, 'HYDERABAD'),
(83, 'Secunderabad.'),
(84, 'vijaywada'),
(85, 'VISAKHAPATTANAM '),
(86, 'Motihari'),
(87, 'Darbhanga'),
(88, 'Raipur'),
(89, 'Dehradun'),
(90, 'Anuppur'),
(91, 'Umariya'),
(92, 'Shahdol'),
(93, 'Jhanshi'),
(94, 'Kanpur'),
(95, 'Baswara'),
(96, 'Etawa'),
(97, 'AZAMGARH'),
(98, 'KARIMNAGAR'),
(99, 'Chennai'),
(100, 'Bangalore'),
(101, 'Chennai'),
(102, 'Chennai'),
(103, 'VARANASI'),
(104, 'GORAKHPUR'),
(105, 'LUCKNOW'),
(106, 'BHILWARA'),
(107, 'MUMBAI'),
(108, 'MUMBAI'),
(109, 'AURANGABAD'),
(110, 'PUNE'),
(111, 'SAGAR'),
(112, 'MEERUT'),
(113, 'BHOPAL'),
(114, 'Chennai'),
(115, 'Lucknow'),
(116, ''),
(117, 'Chennai'),
(118, 'Lucknow'),
(119, ''),
(120, ''),
(121, ''),
(122, 'Mumbai'),
(123, ''),
(124, ''),
(125, 'VARANASI'),
(126, ''),
(127, 'GORAKHPUR'),
(128, 'SAHARANPUR'),
(129, 'LUCKNOW'),
(130, 'BAREILLY'),
(131, 'ALLAHABAD'),
(132, 'ALLAHABAD'),
(133, 'JAUNPUR'),
(134, 'ALIGARH'),
(135, 'GORAKHPUR'),
(136, 'KAILLY BASTI'),
(137, 'GHAZIABAD'),
(138, 'HAPUR'),
(139, 'Patna'),
(140, 'Kanpur'),
(141, 'Bhopal'),
(142, 'Kanpur'),
(143, 'AGRA'),
(144, 'Bhopal'),
(145, 'bhadohi'),
(146, 'MAU'),
(147, 'LUCKNOW'),
(148, 'GONDA'),
(149, 'FIROZABAD'),
(150, 'MATHURA'),
(151, 'FARRUKHABAD'),
(152, 'KAUSHAMBI'),
(153, 'FATEHPUR'),
(154, 'PRATAPGARH'),
(155, 'BANDA'),
(156, 'BALLIA'),
(157, 'Hyderabad'),
(158, 'Hyderabad'),
(159, 'Hyderabad'),
(160, 'Hyderabad'),
(161, 'AZAMGARH'),
(162, 'SONBHADRA'),
(163, 'VARANASI'),
(164, 'DEORIA'),
(165, 'MEERUT'),
(166, 'Hyderabad'),
(167, 'Bangalore'),
(168, 'ALIGARH'),
(169, 'BULANDSHAHAR'),
(170, 'Kanpur'),
(171, 'Etawa'),
(172, 'BAHRAICH'),
(173, 'Etawa'),
(174, 'VARANASI'),
(175, 'MEERUT'),
(176, 'LAKHIMPUR KHIRI'),
(177, 'AMROHA'),
(178, 'RAMPUR'),
(179, 'LUCKNOW'),
(180, 'Jhanshi'),
(181, 'KUSHINAGAR'),
(182, 'MUMBAI'),
(183, 'LUCKNOW'),
(184, 'HAMIRPUR'),
(185, 'MORADABAD'),
(186, 'RAIBARLI'),
(187, 'BIJNOR'),
(188, 'LALITPUR'),
(189, 'SAMLI'),
(190, 'Bangalore'),
(191, 'Chennai'),
(192, 'BHILWARA'),
(193, 'MUMBAI'),
(194, 'MUMBAI'),
(195, 'LUCKNOW'),
(196, 'KOLHAPUR'),
(197, 'SANGLI'),
(198, 'SANGLI'),
(199, 'Bangalore'),
(200, 'TIRUPPUR'),
(201, 'HYDERABAD'),
(202, 'Chennai'),
(203, 'KOLHAPUR'),
(204, 'MANGALORE'),
(205, 'GWALIOR'),
(206, 'JAIPUR'),
(207, 'LUCKNOW'),
(208, 'KOTA'),
(209, 'KARAD'),
(210, 'Coimbatore'),
(211, 'Bangalore'),
(212, 'UDAIPUR'),
(213, 'KOTA'),
(214, 'BELAPUR'),
(215, 'Hyderabad'),
(216, 'Hyderabad'),
(217, 'MUMBAI'),
(218, 'MUMBAI'),
(219, 'MUMBAI'),
(220, 'tambaram'),
(221, 'PUNE'),
(222, 'CHITRAKOOT'),
(223, 'Chennai'),
(224, 'Chennai'),
(225, 'Patna'),
(226, 'CHITRAKOOT'),
(227, 'CHITRAKOOT'),
(228, 'Chennai'),
(229, 'Bhopal'),
(230, 'Chennai'),
(231, 'Chennai'),
(232, 'chennai'),
(233, 'Chennai'),
(234, 'KOLHAPUR'),
(235, 'Chennai'),
(236, 'MUMBAI'),
(237, ''),
(238, ''),
(239, 'MUMBAI'),
(240, ''),
(241, 'Pondichery'),
(242, 'CHITRAKOOT'),
(243, 'MATHURA'),
(244, 'PATNA'),
(245, 'Chennai');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` int(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `comp_email` varchar(100) NOT NULL,
  `mgr_email` varchar(100) NOT NULL,
  `addr1` varchar(250) NOT NULL,
  `addr2` varchar(250) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` int(10) NOT NULL,
  `service_tax` varchar(100) NOT NULL,
  `pan` varchar(100) NOT NULL,
  `vat_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `name`, `mobile`, `phone`, `comp_email`, `mgr_email`, `addr1`, `addr2`, `city`, `state`, `pincode`, `service_tax`, `pan`, `vat_no`) VALUES
(1, 'Syndicate Diagnostics', 123456790, '', '', 'order@syndicatediagnostics.com', 'NO 127B,1ST FLOOR,BRICKLIN ROAD,PURASAWALKAM,CHENNAI-07', '', 'Chennai', '31', 600007, '', '1111111111', '');

-- --------------------------------------------------------

--
-- Table structure for table `co_notess`
--

CREATE TABLE `co_notess` (
  `id` int(255) NOT NULL,
  `req_id` int(10) NOT NULL,
  `co_notess` varchar(500) NOT NULL,
  `usrr_id` int(10) NOT NULL,
  `created_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `co_notess`
--

INSERT INTO `co_notess` (`id`, `req_id`, `co_notess`, `usrr_id`, `created_on`) VALUES
(1, 3870, 'new notes', 1, '2017-06-17 16:59:00'),
(2, 3870, 'test notes', 1, '2017-06-17 17:10:58'),
(3, 3870, 'wwwwwwwwww', 1, '2017-06-17 17:12:45'),
(4, 3971, 'testing instructions new', 1, '2017-06-20 13:12:46'),
(5, 3978, 'aaaaaaaaaaaaaaa', 1, '2017-06-28 18:30:56'),
(6, 3996, 'sads', 1, '2017-06-29 11:10:24'),
(7, 3994, 'sdfdsfdsf', 1, '2017-06-29 11:13:57'),
(8, 3997, 'asasasa', 1, '2017-06-29 11:19:00'),
(9, 3998, 'kkkkkkkkkkkkkkkkkkkkk', 1, '2017-06-29 11:28:48'),
(10, 22, 'ggggggggggg', 1, '2017-07-01 15:38:48'),
(11, 1, 'PHOTOMETRIC CALIBRATION ISSUE', 1, '2017-07-03 14:23:24'),
(12, 30, 'test', 1, '2017-07-12 11:05:35'),
(13, 25, 'sssssssssssss', 1, '2017-07-12 11:14:59'),
(14, 25, 'sssssssssssss', 1, '2017-07-12 11:24:42'),
(15, 25, 'sssssssssssss', 1, '2017-07-12 11:54:20'),
(16, 33, 'test notes new', 1, '2017-07-12 12:05:46'),
(17, 36, 'first notes', 18, '2017-07-12 16:45:45'),
(18, 37, 'eeeeeeeeeeeeeeee', 18, '2017-07-12 16:54:54'),
(19, 37, 'eeeeeeeeeeeeeeee', 18, '2017-07-12 17:00:00'),
(20, 38, 'wwwwwwwwwwwwww', 18, '2017-07-12 17:04:12'),
(21, 39, 'second notes', 18, '2017-07-12 17:22:35'),
(22, 39, 'second notes', 18, '2017-07-12 17:23:29'),
(23, 40, 'test notess test notessss', 18, '2017-07-12 17:40:13'),
(24, 40, 'test notess test notessss', 18, '2017-07-12 17:41:03'),
(25, 1, 'PHOTOMETRIC CALIBRATION ISSUE', 9, '2017-07-17 13:40:40'),
(26, 48, 'CLEAN PDR HOME SENSOR ', 1, '2017-07-17 14:27:30'),
(27, 46, 'LLD cable issue replaced the same', 8, '2017-07-17 14:29:06'),
(28, 44, 'Mapping issue ,done mapping ', 5, '2017-07-17 14:32:09'),
(29, 51, 'Routine maintenance', 13, '2017-07-20 20:58:39'),
(30, 57, 'Routine maintenance', 13, '2017-07-24 14:26:37'),
(31, 56, 'Routine Maintenance', 13, '2017-07-24 14:26:54'),
(32, 61, 'Routine Maintenance', 13, '2017-07-26 13:04:05'),
(33, 33, 'test notes new', 18, '2017-07-26 13:04:28'),
(34, 25, 'sssssssssssss', 18, '2017-07-26 13:05:28'),
(35, 3, 'Machine sifted to apollo specialty.replaced EPROM latest.Need to get payment', 13, '2017-07-26 13:05:52'),
(36, 36, 'first notes', 18, '2017-07-29 15:46:31'),
(37, 62, 'Problem with FVIII calibration they found error in 3rd and 4th dilution', 5, '2017-07-31 13:41:32'),
(38, 69, 'sdfsdfds', 18, '2017-08-03 10:24:19'),
(39, 76, 'routine maintenance', 13, '2017-08-03 14:26:53'),
(40, 75, 'Routine Maintenance', 13, '2017-08-03 14:27:08'),
(41, 67, 'System stuck', 14, '2017-08-04 12:33:13'),
(42, 86, 'Routine maintenance', 13, '2017-08-08 12:47:44'),
(43, 2, 'BUBBLE FORMS IN NEEDLE NO. 1 TUBING', 7, '2017-08-10 16:36:36'),
(44, 95, 'test notes entry', 18, '2017-08-10 17:47:07'),
(45, 95, 'test notes entry', 18, '2017-08-10 17:47:16'),
(46, 106, 'PM&CAL', 10, '2017-08-24 15:38:16'),
(47, 135, 'maintenance', 13, '2017-09-19 14:31:22'),
(48, 134, 'maintenance routine', 13, '2017-09-19 14:31:45'),
(49, 146, 'PM&CAL', 9, '2017-09-21 13:11:47'),
(50, 289, 'this is test data. please ignore it', 18, '2017-12-30 12:18:55'),
(51, 290, 'asfasdfasfasf', 26, '2018-02-08 13:32:22'),
(52, 291, 'asfasfdsafasfasfasfasfsafsafsafasfsafsa', 26, '2018-02-08 17:14:29'),
(53, 292, 'ssssssssssssss', 26, '2018-02-13 16:41:33'),
(54, 296, 'sasdssdadsssas', 26, '2018-02-14 14:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` int(20) NOT NULL,
  `created_on` varchar(100) NOT NULL,
  `updated_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `mobile`, `email_id`, `address`, `city`, `state`, `pincode`, `created_on`, `updated_on`) VALUES
(00001, 'Vijayakumar', '999899899', '', 'No.22, Gangai Nagar', 'Patna', '5', 800021, '2018-10-10 19:33:46', '2018-10-11 12:51:45'),
(00002, 'Ramesh', '9840289188', '', 'No.21 Palavanthangal', 'Coimbatore', '31', 600054, '2018-10-11 12:52:26', '2018-10-11 12:52:44'),
(00003, 'Rakesh', '4569874125', '', 'fdafdasdf24234', 'Chennai', '31', 600021, '2018-10-12 18:32:30', '2018-10-12 18:32:30'),
(00004, 'Arjun', '2323232323', '', '12, Nowroji Road, Kilpauk, Chennai', 'Chennai', '31', 232323, '2018-10-12 18:36:15', '2018-10-16 11:22:33'),
(00005, 'Karthick', '9988776333', 'vijaykumarv@yoursefficiently.com', 'No.12 Test Address', 'Chennai', '31', 500012, '2018-10-17 15:24:38', '2018-10-22 15:42:03');

-- --------------------------------------------------------

--
-- Table structure for table `customer_labtech`
--

CREATE TABLE `customer_labtech` (
  `id` int(10) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `lab_name` varchar(255) NOT NULL,
  `lab_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_labtech`
--

INSERT INTO `customer_labtech` (`id`, `customer_id`, `lab_name`, `lab_value`) VALUES
(1, '325', '', ''),
(2, '327', '', ''),
(3, '329', '', ''),
(4, '331', '', ''),
(5, '332', '', ''),
(6, '333', '', ''),
(7, '334', '', ''),
(8, '335', '', ''),
(9, '336', '', ''),
(10, '337', '', ''),
(11, '338', '', ''),
(12, '340', '', ''),
(13, '342', '', ''),
(14, '343', '', ''),
(15, '344', '', ''),
(16, '345', '', ''),
(17, '346', '', ''),
(18, '347', '', ''),
(19, '348', '', ''),
(20, '349', '', ''),
(21, '350', '', ''),
(22, '351', '', ''),
(23, '352', '', ''),
(24, '353', '', ''),
(25, '354', '', ''),
(26, '355', '', ''),
(27, '356', '', ''),
(28, '357', '', ''),
(29, '358', '', ''),
(30, '359', '', ''),
(31, '360', '', ''),
(32, '361', '', ''),
(33, '362', '', ''),
(34, '363', '', ''),
(35, '364', '', ''),
(36, '365', '', ''),
(37, '366', '', ''),
(38, '367', '', ''),
(39, '368', '', ''),
(40, '369', '', ''),
(41, '370', '', ''),
(42, '371', '', ''),
(43, '372', '', ''),
(44, '373', '', ''),
(45, '374', '', ''),
(46, '375', '', ''),
(47, '376', '', ''),
(48, '377', '', ''),
(49, '378', '', ''),
(50, '379', '', ''),
(51, '380', '', ''),
(52, '381', '', ''),
(53, '382', '', ''),
(54, '383', '', ''),
(55, '384', '', ''),
(56, '385', '', ''),
(57, '386', '', ''),
(58, '387', '', ''),
(59, '388', '', ''),
(60, '389', '', ''),
(61, '390', '', ''),
(62, '391', '', ''),
(63, '392', '', ''),
(64, '00071', '', ''),
(65, '393', '', ''),
(66, '394', '', ''),
(67, '395', '', ''),
(68, '396', '', ''),
(69, '397', '', ''),
(70, '398', '', ''),
(71, '399', '', ''),
(72, '400', '', ''),
(73, '401', '', ''),
(74, '402', '', ''),
(75, '403', '', ''),
(76, '404', '', ''),
(77, '405', '', ''),
(78, '406', '', ''),
(79, '407', '', ''),
(80, '00407', '', ''),
(81, '408', '', ''),
(82, '00020', '', ''),
(83, '00021', '', ''),
(84, '00021', '', ''),
(85, '409', '', ''),
(86, '410', '', ''),
(87, '411', '', ''),
(88, '412', '', ''),
(89, '413', '', ''),
(90, '414', '', ''),
(91, '00017', '', ''),
(92, '00034', '', ''),
(93, '00017', '', ''),
(94, '00017', '', ''),
(95, '415', '', ''),
(96, '416', '', ''),
(97, '417', '', ''),
(98, '00417', '', ''),
(99, '418', '', ''),
(100, '419', '', ''),
(101, '00415', '', ''),
(102, '00415', '', ''),
(103, '420', '', ''),
(104, '00420', '', ''),
(105, '00419', '', ''),
(106, '421', '', ''),
(107, '422', '', ''),
(108, '423', '', ''),
(109, '424', '', ''),
(110, '427', '', ''),
(111, '00427', '', ''),
(112, '428', '', ''),
(113, '429', '', ''),
(114, '00429', '', ''),
(115, '00420', '', ''),
(116, '00419', '', ''),
(117, '00423', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_noperday_history`
--

CREATE TABLE `customer_noperday_history` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `no_perday` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_noperday_history`
--

INSERT INTO `customer_noperday_history` (`id`, `cust_id`, `no_perday`, `user_id`, `create_on`) VALUES
(1, 429, 8, 1, '2018-02-20'),
(2, 429, 3, 1, '2018-02-20'),
(3, 420, 0, 1, '2018-06-29'),
(4, 419, 0, 1, '2018-06-29'),
(5, 423, 0, 1, '2018-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `customer_service_location`
--

CREATE TABLE `customer_service_location` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `landline` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `address1` varchar(250) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` int(20) NOT NULL,
  `area` int(255) NOT NULL,
  `service_zone_loc` int(10) NOT NULL,
  `zone_coverage` varchar(100) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `created_on` varchar(100) NOT NULL,
  `updated_on` varchar(100) NOT NULL,
  `user_id` int(10) NOT NULL,
  `flag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_service_location`
--

INSERT INTO `customer_service_location` (`id`, `customer_id`, `branch_name`, `landline`, `address`, `address1`, `city`, `state`, `pincode`, `area`, `service_zone_loc`, `zone_coverage`, `contact_name`, `designation`, `mobile`, `email_id`, `created_on`, `updated_on`, `user_id`, `flag`) VALUES
(1, 1, 'Apollo Specialty Hospital', '?044 2433 4455', 'Cenatoph Road,Teyanampet,Chennai', '', 'Chennai', 'Tamil Nadu', 600035, 1, 8, '', 'Mr Deva', 'Senior Technician', '9841313358', 'lakshmanin@gmail.com', '2017-05-31', '2017-05-31', 1, ''),
(2, 2, 'Apollo Main Hospital', '91-44-28290200', 'Greams Rd,Chennai', '', 'Chennai', 'Tamil Nadu', 600006, 96, 8, '', 'Mr Madhu', 'Senior Technician', '9884057732', 'drmamta_s@apollohospitals.com', '2017-05-31', '2017-05-31', 1, ''),
(3, 3, 'Nungambakam', '4442925553', 'Nungambkkam,Chennai', '', 'Chennai', 'Tamil Nadu', 600034, 97, 8, '', 'Mr.Jeyapalan', 'Senior Technician', '9566275789', 'narasimhan@metropolisindia.com', '2017-05-31', '2017-05-31', 1, ''),
(4, 4, 'Vadapalani', '044 4921 1455', 'vadapalani,Chennai', '', 'Chennai', 'Tamil Nadu', 600026, 98, 8, '', 'Mr Ayal', 'Senior Technician', '9884050521', 'drdeepakala.n@simshospitals.com', '2017-05-31', '2017-05-31', 1, ''),
(5, 5, 'Chetpet', '044 4227 1001', 'Chetepet,Chennai', '', 'Chennai', 'Tamil Nadu', 600031, 99, 8, '', 'Mrs Shoby', 'Senior Technician', '9840605384', '', '2017-05-31', '2017-05-31', 1, ''),
(6, 6, 'Kilpauk Branch', '4426412096', 'PH rd,Chennai', '', 'Chennai', 'Tamil Nadu', 600010, 100, 8, '', 'Ms.Priya', 'Senior Technician', '9962474499', '', '2017-05-31', '2017-05-31', 1, ''),
(7, 7, 'Anna Nagar', '', 'Anna Nagar,Chennai', '', 'Chennai', 'Tamil Nadu', 600040, 101, 8, '', 'Dr shiva', 'pathologist', '9841429606', '', '2017-05-31', '2017-05-31', 1, ''),
(8, 8, 'CMC V', '', 'Vellore', '', 'Vellore', 'Tamil Nadu', 632009, 108, 9, '', 'Mr singh', 'Senior Technician', '9994780672', 'surendar61@gmail.com', '2017-05-31', '2017-05-31', 1, ''),
(9, 9, 'Adyar', '', 'adyar,chennai', '', 'Chennai', 'Tamil Nadu', 600020, 102, 8, '', 'Mr Jones', 'Admin', '9941623477', '', '2017-05-31', '2017-05-31', 1, ''),
(10, 10, 'Chitoor', '', 'Chitoor', '', 'Chitoor', 'Andhra Pradesh', 517219, 109, 10, '', '', '', '085732 83221', '', '2017-05-31', '2017-05-31', 1, ''),
(11, 11, 'Pallikaranai', '', 'Perumbakkam,Chennai', '', 'Chennai', 'Tamil Nadu', 600100, 103, 8, '', 'Mr Mohan', 'Senior Technician', '', '', '2017-05-31', '2017-05-31', 1, ''),
(12, 12, 'Nandanam', '', 'Nandanam,Chennai', '', 'Chennai', 'Tamil Nadu', 600035, 95, 8, '', 'Mrs Jesy', 'Senior Technician', '', '', '2017-05-31', '2017-05-31', 1, ''),
(13, 13, 'Perambur', '', 'Perambur,Chennai', '', 'Chennai', 'Tamil Nadu', 600023, 105, 8, '', 'Mr rajasekar', 'Senior Technician', '9444200883', '', '2017-05-31', '2017-05-31', 1, ''),
(14, 14, 'T nagar', '', 'T nagar ,Chennai', '', 'Chennai', 'Tamil Nadu', 600017, 106, 8, '', 'Dr Srinivasan', 'doctor', '', '', '2017-05-31', '2017-05-31', 1, ''),
(15, 15, 'West Mambalam', '', 'Chennai', '', 'Chennai', 'Tamil Nadu', 600033, 107, 8, '', 'Dr chitra', 'doctor', '9884270574', '', '2017-05-31', '2017-05-31', 1, ''),
(16, 16, 'PANJAGUTTA', '', 'Mumbai Highway, Punjagutta, Hyderabad', '', 'Hyderabad', 'Telangana', 500082, 110, 11, '', 'Dr Santhi Veera', 'Pathologist', '9866231933', '', '2017-05-31', '2017-05-31', 1, ''),
(17, 17, 'JUBILI HILLS', '040-60601066', ' Road No 72, Opp. Bharatiya Vidya Bhavan School, Film Nagar, Jubilee Hills', '', 'Hyderabad', 'Telangana', 500033, 111, 11, '', 'Dr vanjakshi', 'HOD (Hematology)', '8106298889', '', '2017-05-31', '2017-05-31', 1, ''),
(18, 18, 'BANJARA HILLS', '040-46999999', 'Virinchi Circle,, Hyderabad,', '', 'Hyderabad', 'Telangana', 500034, 112, 11, '', 'Dr Rehana Momin', 'Lab Director', '1111111111111', '', '2017-05-31', '2017-05-31', 1, ''),
(19, 19, 'BANJARA HILLS', '040-30418888', 'Road No. 1, Banjara Hills, Hyderabad', '', 'Hyderabad', 'Telangana', 500034, 112, 11, '', 'Dr Shanti Naidu', 'Lab Director', '11111114444444', '', '2017-05-31', '2017-05-31', 1, ''),
(20, 20, 'HIMAYAT NAGAR', '040-23420422', '3-6-16 & 17, Street No. 19, Himayatnagar,', '', 'Hyderabad', 'Telangana', 500029, 113, 11, '', 'Dr Neelamani', 'Lab Director', '123334566300', '', '2017-05-31', '2017-05-31', 1, ''),
(21, 21, 'MALAKPET', '', 'Old Malakpet, Nalgonda cross road, Hyderabad', '', 'Hyderabad', 'Telangana', 500036, 114, 11, '', 'Dr Majed B. Momin', 'Pathologist', '9849076574', 'dr.majeed@yashoda.in', '2017-05-31', '2017-05-31', 1, ''),
(22, 21, 'SOMAJIGUDA', '040-67776754', 'Raj Bhavan Rd, Matha Nagar, Somajiguda, Hyderabad,', '', 'Hyderabad', 'Telangana', 500082, 110, 11, '', 'Dr Bhuralakshmi', 'HOD (Hematology)', '040-67776754111', '', '2017-05-31', '2017-05-31', 1, ''),
(23, 21, 'SECUNDERABAD', '', 'Alexander Rd, Kummari Guda, Shivaji Nagar, Secunderabad, Telangana ', '', 'Secundrabad', 'Telangana', 500003, 0, 11, '', 'Dr Sachin', 'Pathologist', '9963465929', '', '2017-05-31', '2017-05-31', 1, ''),
(24, 22, 'BANJARA HILLS', '', 'Road No.12, Banjara Hills, Hyderabad', '', 'Hyderabad', 'Telangana', 500034, 112, 11, '', 'Dr KVVR Lakshmi', 'Lab Director', '9391044414', 'drlakshmi1964@gmail.com', '2017-05-31', '2017-05-31', 1, ''),
(25, 23, 'GACHIBOWLI', '', 'Plot No. 3, Road No. 2, IT & Financial District, Nanakramguda, Gachibowli', '', 'Hyderabad', 'Telangana', 500035, 115, 11, '', 'Dr. Upendra Srinivas', 'Pathologist', '9951576644', '', '2017-05-31', '2017-05-31', 1, ''),
(26, 24, 'Karim Nagar', '', 'Karimnagar, Nagunur,', '', 'Hyderabad', 'Telangana', 505417, 116, 11, '', '', '', '8782216380', '', '2017-05-31', '2017-05-31', 1, ''),
(27, 25, 'NEHRU PHARMA CITY (SEZ)', '', 'Hospira Health Care India Pvt Ltd,Plot No#117,Jawaharlal Nehru Pharma City,, (SEZ) ,Parawada Mandal, Visakhapatnam, Andhra Pradesh?', '', 'Visakhapatnam', 'Andhra Pradesh', 531019, 135, 12, '', 'Mr. Shankar', 'R&D Incharge', '8374444889', '', '2017-05-31', '2017-05-31', 1, ''),
(28, 26, 'TURAKAPALLI', '(040) 23480421', '230/235, Gemome Valley Road, Shamirper, ', '', 'Hyderabad', 'Telangana', 500078, 117, 11, '', 'Mr.kiran kumar', 'lab Incharge', '04023480421', '', '2017-05-31', '2017-05-31', 1, ''),
(29, 27, 'CHADERGHAT', '', '16-6-104 to 109, Old Kamal Theater Complex, Opp Niagara Hotel', '', 'Hyderabad', 'Telangana', 500024, 118, 11, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(30, 28, 'KARKANA', '040-44114444', 'Plot No. 203, Vasavinagar, Karkhana', '', 'Hyderabad', 'Telangana', 500015, 119, 11, '', 'Dr Smitha', 'Lab Director', '', '', '2017-05-31', '2017-05-31', 1, ''),
(31, 29, 'KING KOTI', '040-66924444', '4-1-1227, Abids Road, King Koti', '', 'Hyderabad', 'Telangana', 500001, 120, 11, '', 'Dr G Srinivas', 'Pathologist', '', '', '2017-05-31', '2017-05-31', 1, ''),
(32, 30, 'VISAKHAPATNAM', '0891-2584027', 'Nausena Baugh, Visakhapatnam, Andhra Pradesh', '', 'Visakhapatnam', 'Andhra Pradesh', 530005, 121, 11, '', 'Dr seerat pal', 'Pathologist', '', '', '2017-05-31', '2017-05-31', 1, ''),
(33, 31, 'LB NAGAR', '', 'Plot No 73/C & 73/D, Survey No # 52,  Saraswathi Nagar Colony, Mansoorabad Village,', '', 'Hyderabad', 'Telangana', 500074, 122, 11, '', 'Mr Madhukar reddy', 'lab Manager', '9100974616', 'madhukar.v@rainbowhospitals.in', '2017-05-31', '2017-05-31', 1, ''),
(34, 31, 'HYDERNAGAR', '', 'Plot No. 1, Opposite Chermas, Hydernagar, Kukatpally', '', 'Hyderabad', 'Telangana', 500072, 123, 11, '', 'Mr Madhukar reddy', 'LabManager', '9100974616', 'madhukar.v@rainbowhospitals.in', '2017-05-31', '2017-05-31', 1, ''),
(35, 32, 'KACHIGUDA', '', 'Plot No.27, KPHB Main Road, Jal Vayu Vihar, Opp Arjun Theatre', '', 'Hyderabad', 'Telangana', 500072, 123, 11, '', 'Dr KVVR Lakshmi', 'Lab Director', '9391044414', 'drlakshmi1964@gmail.com', '2017-05-31', '2017-05-31', 1, ''),
(36, 33, 'MALKAJGIRI', '', 'Makajgiri ', '', 'Hyderabad', 'Telangana', 500015, 119, 11, '', 'R Chatterjee', '', '8283060421', '', '2017-05-31', '2017-05-31', 1, ''),
(37, 34, 'KANCHANBAGH', '04024342222', 'DMRL X Road, Kanchan Bagh, Santosh Nagar, ', '', 'Hyderabad', 'Telangana', 500258, 125, 11, '', 'Dr Veer Prakesh', 'HOD (Hematology)', '', '', '2017-05-31', '2017-05-31', 1, ''),
(38, 35, 'BANJARA HILLS', '040-60601066', 'Road No 72, Opp. Bharatiya Vidya Bhavan School, Film Nagar, Jubilee Hills', '', 'Hyderabad', 'Telangana', 500033, 111, 12, '', 'Dr Shiva Ranjan Reddy', 'Pathologist', '', '', '2017-05-31', '2017-05-31', 1, ''),
(39, 36, 'TURAKAPALLI', '', 'Genome Valley Rd, Turkapally,', '', 'Hyderabad', 'Telangana', 500078, 117, 11, '', 'Mr Kalayan', 'R&D Incharge', '7032403133', '', '2017-05-31', '2017-05-31', 1, ''),
(40, 37, 'NIZAMPET', '', '#1-2-49/13B, Nizampet Road, Hydernagar, Kukatpally,', '', 'Hyderabad', 'Telangana', 500072, 123, 11, '', 'Mr Subba Raju', 'lab Incharge', '8897067733', '', '2017-05-31', '2017-05-31', 1, ''),
(41, 38, 'SECUNDERABAD', '', 'Secunderabad,telangana', '', 'Hyderabad', 'Telangana', 500015, 119, 11, '', 'Dr Gaurav Rastogi', 'HOD (Hematology)', '9948042253', '', '2017-05-31', '2017-05-31', 1, ''),
(42, 39, 'GUNTUR', '', 'Collector Office Rd, Nagarampalem, Guntur, Andhra Pradesh?', '', 'Guntur', 'Andhra Pradesh', 522004, 137, 12, '', 'Mr Naga Raju', 'lab Incharge', '9703222644', '', '2017-05-31', '2017-05-31', 1, ''),
(43, 39, 'VIJAYAWADA', '', 'MG Road, Opposite Indira Gandhi Municipal Stadium, Labbipet,', '', 'vijayawada', 'Andhra Pradesh', 520010, 138, 12, '', 'Dr YN Rao', 'Lab Director', '9490353046', '', '2017-05-31', '2017-05-31', 1, ''),
(44, 31, 'VIJAYAWADA', '', 'D.No: 48-10-12/2A, Opp. NTR University of Health Sciences, Vijayawada, Andhra Pradesh?', '', 'vijayawada', 'Andhra Pradesh', 520008, 0, 11, '', 'Mr Madhukar reddy', 'lab Manager', '9100974616', '', '2017-05-31', '2017-05-31', 1, ''),
(45, 31, 'KONDAPUR', '', 'Plot No # 32&33 Survey No: 12\nOpp CII , Kondapur, Serilingampally Mandal\nRangareddy District - 500081.', '', 'Hyderabad', 'Telangana', 500081, 0, 11, '', 'Mr Madhukar reddy', 'lab Manager', '9100974616', '', '2017-05-31', '2017-05-31', 1, ''),
(46, 31, 'VIKRAMPURI COLONY', '', 'Vikrampuri Colony,secunderabad', '', 'Hyderabad', 'Telangana', 500009, 0, 11, '', 'Mr Madhukar reddy', 'lab Manager', '9100974616', '', '2017-05-31', '2017-05-31', 1, ''),
(47, 31, 'BANJARA HILLS', '', '22, Road No. 4, Karvy Lanes, Banjara Hills, Hyderabad', '', 'Hyderabad', 'Telangana', 500034, 112, 11, '', 'Mr Madhukar reddy', 'lab Manager', '9100974616', '', '2017-05-31', '2017-05-31', 1, ''),
(48, 41, 'JAGADAMBHA CENTER', '', 'KGH Down Rd, Near Jagdamba, Ram Nagar, Visakhapatnam, ', '', 'visakhapatnam', 'Andhra Pradesh', 530002, 128, 11, '', 'Dr  Rooplata', 'HOD (Hematology)', '9490132498', '', '2017-05-31', '2017-05-31', 1, ''),
(49, 42, 'Rockdale Layout', '', 'Waltair Main Road, Rockdale Layout, Visakhapatnam, ', '', 'visakhapatnam', 'Andhra Pradesh', 530002, 128, 11, '', 'Mr Vamsi', 'Biomedical Engineer', '9014410414', '', '2017-05-31', '2017-05-31', 1, ''),
(50, 43, 'SARINILGAMPALLY', '', ' Near Aparna Sarovar, Nallagandla, Seri-lingampally, Hyderabad', '', 'Hyderabad', 'Telangana', 500019, 130, 11, '', 'Dr Manu Goel', 'HOD (Hematology)', '9866969997', '', '2017-05-31', '2017-05-31', 1, ''),
(51, 16, 'PANJAGUTTA', '', 'Mumbai Highway, Punjagutta, Hyderabad', '', 'Hyderabad', 'Telangana', 500082, 110, 11, '', 'Dr Sudheer', '', '8142931082', '', '2017-05-31', '2017-05-31', 1, ''),
(52, 17, 'SECUNDERABAD', '', 'Pollicetty Towers, St. John\'s Road, Bhagyanagar Colony, Beside Keyes High School, Secunderabad', '', 'Hyderabad', 'Telangana', 500003, 0, 11, '', 'Mr Paul Benhard', 'lab Incharge', '8106298889', '', '2017-05-31', '2017-05-31', 1, ''),
(53, 45, 'BANJARA HILLS', '', 'Road Number 12, AG Heights, Near Amrutha Valley Apartments, Hyderabad,', '', 'Hyderabad', 'Telangana', 500034, 112, 11, '', 'Dr Sheela', 'HOD (Hematology)', '9618240007', '', '2017-05-31', '2017-05-31', 1, ''),
(54, 17, 'Hyderguda', '', 'Plot No. 838, 3-5-836-838/1, Near Old MLA Quarters, Hyderguda, Hyderabad,', '', 'Hyderabad', 'Telangana', 500029, 113, 11, '', 'Mrs Sharda', 'lab Incharge', '9866812828', '', '2017-05-31', '2017-05-31', 1, ''),
(55, 46, 'Hyderguda', '', '3-6-282, Opp. Old MLA Quarters, Hyderguda, Hyderabad', '', 'Hyderabad', 'Telangana', 500029, 113, 11, '', 'Dr Kalayani', 'HOD (Hematology)', '9573313499', '', '2017-05-31', '2017-05-31', 1, ''),
(56, 47, 'VIJAYAWADA', '', 'NH-5, Soumya Nagar, Tadepalli, Vijayawada,', '', 'vijayawada', 'Andhra Pradesh', 522501, 132, 11, '', 'Mr Uday', 'lab Incharge', '9030439460', '', '2017-05-31', '2017-05-31', 1, ''),
(57, 48, 'TURAKAPALLI', '', 'turkapally hyderabad', '', 'Hyderabad', 'Telangana', 500078, 117, 11, '', 'Mr Naresh', 'R&D Incharge', '9966244736', '', '2017-05-31', '2017-05-31', 1, ''),
(58, 49, 'IDA,Pashamylaram', '', 'IDA Pashamylaram, Hyderabad', '', 'Hyderabad', 'Telangana', 502307, 133, 11, '', 'Mr  Purnachander', 'R&D Incharge', '9391386862', '', '2017-05-31', '2017-05-31', 1, ''),
(59, 50, 'MIYAPUR', '', '1-121/1, Survey Nos.66 (Part) & 67(Part) Miyapur, Serilingampally', '', 'Hyderabad', 'Telangana', 500049, 134, 11, '', 'Mr Vijay Basker', 'R&D Incharge', '9642445479', '', '2017-05-31', '2017-05-31', 1, ''),
(60, 17, 'Bannerghatta Road', '', '154/11, Bannerghatta Road, Opposite IIM, Bengaluru,?', '', 'Bangalore', 'Telangana', 560076, 80, 5, '', 'Mr Mani', 'Materials Incharge', '9900654134', '', '2017-05-31', '2017-05-31', 1, ''),
(61, 51, 'Sampangiram nagar', '', 'HCG Towers No 8, Kalinga Rao Road, HMT Estate, Sampangiram Nagar, Bengaluru,', '', 'Bangalore', 'Karnataka', 560013, 78, 5, '', 'Dr Renu', 'HOD (Hematology)', '9663827717', '', '2017-05-31', '2017-05-31', 1, ''),
(62, 52, 'BG rd', '080 2297 7400', 'Bannerghatta Main Road, Jayanagara 9th Block, Bengaluru, Karnataka', '', 'Bangalore', 'Karnataka', 560069, 79, 5, '', 'sunil', 'Lab Incharge', '9900564277', '', '2017-05-31', '2017-05-31', 1, ''),
(63, 53, 'BG rd', '', 'No. 9, TKN Towers, Bannerghatta Road, Bengaluru,?', '', 'Bangalore', 'Karnataka', 560076, 80, 5, '', 'Rajarao', 'Incharge lab', '9535633221', '', '2017-05-31', '2017-05-31', 1, ''),
(64, 54, 'Thippasandra', '', 'New Thippasandra Main Road, HAL 3rd Stage, New Thippasandra, Beside Thippasandra Post Office,', '', 'Bangalore', 'Karnataka', 560075, 81, 5, '', 'Samrat', 'lab Manager', '9741051170', '', '2017-05-31', '2017-05-31', 1, ''),
(65, 55, 'Yelahanka', '080 2217 6767', 'Venkatala, Near Bagalur Cross, Bellary Rd, Yelahanka, Bengaluru,?', '', 'Bangalore', 'Karnataka', 560064, 82, 5, '', 'admin', 'Admin', '?080 2217 6767', '', '2017-05-31', '2017-05-31', 1, ''),
(66, 56, 'MSRIT', '080 4052 8400', 'M S Ramaiah Narayana Heart Centre, Basement, M. S. Ramaiah Memorial Hospital, MSR College Road, MSRIT Post,', '', 'Bangalore', 'Karnataka', 560054, 83, 5, '', 'Abdulla', 'Incharge lab', '9972089942', '', '2017-05-31', '2017-05-31', 1, ''),
(67, 57, 'Bellary rd', '080 3399 3939', '?No.31, Behind Big Marker, G Block, Bellary Road, Sahakara Nagar,?', '', 'Bangalore', 'Karnataka', 560092, 84, 5, '', 'Sumitra', 'hod', '7829889829', '', '2017-05-31', '2017-05-31', 1, ''),
(68, 58, 'Lakkasandra', '080 2699 5000', 'Hosur Road, Lakkasandra, Wilson Garden', '', 'Bangalore', 'Karnataka', 560029, 85, 5, '', 'mahesh', 'Incharge lab', '9900566592', '', '2017-05-31', '2017-05-31', 1, ''),
(69, 59, 'C block Pathology Lab SGPGI', '', '1 st Floor, C block Pathology Lab SGPGI Lucknow', '', 'LUCKNOW', 'Uttar Pradesh', 226014, 19, 2, '', 'DR. seema sharma', '', '9918883214', '', '2017-05-31', '2017-05-31', 1, ''),
(70, 59, 'C block Hemtology Lab SGPGI ', '', ' 1st Floor, C block Hemtology Lab SGPGI Lucknow', '', 'LUCKNOW', 'Uttar Pradesh', 226014, 19, 2, '', 'Narendra', '', '9452243957', '', '2017-05-31', '2017-05-31', 1, ''),
(71, 59, '24 hr Lab', '', '1 st Floor, 24 hr Lab SGPGI Lucknow', '', 'LUCKNOW', 'Uttar Pradesh', 226014, 19, 2, '', 'dr. natu', '', '9335903344', '', '2017-05-31', '2017-05-31', 1, ''),
(72, 60, 'nirala nagar', '', 'nirala nagar lucknow', '', 'LUCKNOW', 'Uttar Pradesh', 226016, 20, 2, '', 'dr m kar', '', '7060771155', '', '2017-05-31', '2017-05-31', 1, ''),
(73, 61, 'doiawalla jolly grand', '', 'doiawalla jolly grand dehradun', '', 'Dehradun', 'Uttarakhand', 248016, 21, 2, '', 'DR. VIKASH', '', '9412901682', '', '2017-05-31', '2017-05-31', 1, ''),
(74, 62, 'Lucknow', '', 'K 994 (Basement) Aashiana', '', 'LUCKNOW', 'Uttar Pradesh', 206012, 22, 2, '', 'Dr, Deewan', '', '9936507369', '', '2017-05-31', '2017-05-31', 1, ''),
(75, 63, 'agra', '', '7 manjila bullding pathology lab moti katra agra', '', 'Agra', 'Uttar Pradesh', 282002, 23, 2, '', 'DR. POOJA', '', '8439233948', '', '2017-05-31', '2017-05-31', 1, ''),
(76, 64, 'Azamgarh', '', ' chakrapanpur medical college Azamgarh', '', 'AZAMGARH', 'Uttar Pradesh', 276127, 24, 2, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(77, 65, 'Meerut', '', 'jai bhim nagar medical college Meerut', '', 'MEERUT', 'Uttar Pradesh', 250004, 25, 2, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(78, 66, 'Gomti Nagr', '', '7th floor RMLIMS Vibhuti khand Gomti Nagr LUCKNOW', '', 'LUCKNOW', 'Uttar Pradesh', 226010, 26, 2, '', 'DR. NAMRATA', '', '9452177802', '', '2017-05-31', '2017-05-31', 1, ''),
(79, 67, 'VARANASI', '', 'BHU BLOOD BANK, LANKA VARANASI', '', 'VARANASI', 'Uttar Pradesh', 221005, 27, 2, '', 'DR. A K GUPTA', '', '9415389013', '', '2017-05-31', '2017-05-31', 1, ''),
(80, 68, 'VARANASI', '', 'LANKA VARANASI', '', 'VARANASI', 'Uttar Pradesh', 221005, 27, 2, '', 'DR. S D SINGH', '', '8423740390', '', '2017-05-31', '2017-05-31', 1, ''),
(81, 69, 'chowk', '', 'kgmc Trauma center chowk lucknow', '', 'LUCKNOW', 'Uttar Pradesh', 226003, 28, 2, '', 'DR WAHID ALI', '', '9208052893', '', '2017-05-31', '2017-05-31', 1, ''),
(82, 70, 'chowk', '', 'CVTS LAB  KGMC chowk lucknow', '', 'LUCKNOW', 'Uttar Pradesh', 226003, 28, 2, '', 'DR WAHID ALI ', '', '9208052893', '', '2017-05-31', '2017-05-31', 1, ''),
(83, 71, 'Rae Bareli Road', '', 'Graund Floor, blood bank SGPGI Lucknow', '', 'LUCKNOW', 'Uttar Pradesh', 226014, 19, 2, '', 'DR. ANUPAM', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(84, 72, 'nirala nagar ', '', 'nirala nagar lucknow', '', 'LUCKNOW', 'Uttar Pradesh', 226020, 29, 2, '', 'Dr. Snjay Mehrotra', '', '9628695518', '', '2017-05-31', '2017-05-31', 1, ''),
(85, 73, 'VARANASI', '', 'LANKA VARANASI', '', 'VARANASI', 'Uttar Pradesh', 221005, 27, 2, '', 'Dr. S p singh', '', '9452569502', '', '2017-05-31', '2017-05-31', 1, ''),
(86, 74, 'allhabad', '', 'nawab yusuf rd civil line  station allhabad', '', 'ALLAHABAD', 'Uttar Pradesh', 221001, 30, 2, '', 'Dr. Charu saksena', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(87, 75, 'Gomti Nagr', '', '6th floor RMLIMS Vibhuti khand Gomti Nagr LUCKNOW', '', 'LUCKNOW', 'Uttar Pradesh', 226010, 26, 2, '', 'DR. NAMRATA', '', '9452177802', '', '2017-05-31', '2017-05-31', 1, ''),
(88, 76, ' rampur road', '', ' rampur road  haldwani', '', 'HALDWANI', 'Uttarakhand', 263129, 31, 2, '', 'MR. PARMOD', '', '7579174424', '', '2017-05-31', '2017-05-31', 1, ''),
(89, 77, 'VARANASI', '', ' BHUIMS Lanka varanasi', '', 'VARANASI', 'Uttar Pradesh', 221005, 27, 2, '', 'DR. JOYTI SHUKLA', '', '8004083306', '', '2017-05-31', '2017-05-31', 1, ''),
(90, 78, 'gorakhpur', '', ' NH29 Rajendra nagar blood bank gorakhnath hospital gorakhpur', '', 'GORAKHPUR', 'Uttar Pradesh', 233015, 32, 2, '', 'DR. AVDHESH AGRWAL', '', '9044336419', '', '2017-05-31', '2017-05-31', 1, ''),
(91, 79, 'ALLHABAD', '', 'MLN MEDICAL COLLEGE CENTRAL LAB GEORGE TOWN ALLHABAD', '', 'ALLAHABAD', 'Uttar Pradesh', 211002, 33, 2, '', 'DR. VATSALA MISHRA', '', '7388700671', '', '2017-05-31', '2017-05-31', 1, ''),
(92, 80, 'CANT LUCKNOW', '', 'COMMANA HOSPITAL CANT LUCKNOW', '', 'LUCKNOW', 'Uttar Pradesh', 226021, 34, 2, '', 'L.K. RIGHVARDHAN', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(93, 81, 'jankipuram extention', '', 'Sector 10 jankipuram extention CDRI lucknow', '', 'LUCKNOW', 'Uttar Pradesh', 226031, 35, 2, '', 'DR.  MADHU DIXIT', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(94, 83, 'allhabad', '', 'Thorn hill road, civil line allhabad', '', 'ALLAHABAD', 'Uttar Pradesh', 211001, 37, 2, '', 'DR. ANUPAMA', '', '9415020350', '', '2017-05-31', '2017-05-31', 1, ''),
(95, 84, 'GORAKHPUR', '', 'BRDM GORAKHPUR', '', 'GORAKHPUR', 'Uttar Pradesh', 273013, 38, 2, '', 'DR. SHILPA', '', '7388700641', '', '2017-05-31', '2017-05-31', 1, ''),
(96, 85, 'ALLHABAD', '', '55B LOWTHER ROAD GEORGE TOWN ALLHABAD', '', 'ALLAHABAD', 'Uttar Pradesh', 211002, 33, 2, '', 'DR. PRACHI', '', '9838917698', '', '2017-05-31', '2017-05-31', 1, ''),
(97, 86, ' ghaila ', '', 'IIM ROAD ghaila  LUCKNOW 226020', '', 'LUCKNOW', 'Uttar Pradesh', 226020, 29, 2, '', 'DR. MANDIRA SHARMA', '', '7275100015', '', '2017-05-31', '2017-05-31', 1, ''),
(98, 87, 'BAREILLY', '', 'ROHILKHAND MEDICAL COOLEGE BAREILLY', '', 'BAREILLY', 'Uttar Pradesh', 243006, 40, 2, '', 'DR. RANJAN AGRWAL', '', '9412291009', '', '2017-05-31', '2017-05-31', 1, ''),
(99, 88, 'MEERUT', '', 'jai bhim nagar MEDICAL COLLEGE MEERUT', '', 'MEERUT', 'Uttar Pradesh', 250004, 25, 2, '', 'DR. ', '', '9719408040', '', '2017-05-31', '2017-05-31', 1, ''),
(100, 89, 'Jankipuram ', '', 'CP 2 Sector F Jankipuram lucknow', '', 'LUCKNOW', 'Uttar Pradesh', 226021, 34, 2, '', 'DR. MOHIT ', '', '8601047333', '', '2017-05-31', '2017-05-31', 1, ''),
(101, 90, 'gomti nagar', '', 'B1/12 vipul khand gomti nagar lucknow', '', 'LUCKNOW', 'Uttar Pradesh', 226010, 26, 2, '', 'DR. SHOBHA KHANDURI', '', '9795328522', '', '2017-05-31', '2017-05-31', 1, ''),
(102, 91, 'Chowk', '', 'new opd lab kgmc chowk lucknow', '', 'HALDWANI', 'Uttar Pradesh', 226003, 28, 2, '', 'DR. WAHID ALI', '', '9208052893', '', '2017-05-31', '2017-05-31', 1, ''),
(103, 92, 'vrindaban colony', '', 'vrindaban colony lucknow', '', 'ALLAHABAD', 'Uttar Pradesh', 226029, 43, 2, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(104, 93, 'chowk ', '', 'satabdi bulding kgmc chowk lucknow', '', 'LUCKNOW', 'Uttar Pradesh', 226003, 28, 2, '', 'DR. A K TRIPATHI', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(105, 94, ' noida ', '', 'Gautam Budh nagar sector 30 noida ', '', 'noida', 'Uttar Pradesh', 201303, 45, 2, '', 'DR. USHA BINDAL', '', '8376061302', '', '2017-05-31', '2017-05-31', 1, ''),
(106, 95, 'gomti nagar ', '', 'vijay khand gomti nagar lucknow', '', 'LUCKNOW', 'Uttar Pradesh', 226010, 26, 2, '', 'DR. MOHIT', '', '7310100705', '', '2017-05-31', '2017-05-31', 1, ''),
(107, 96, 'kanpur', '', 'Darsha porwa kanpur', '', 'kanpur', 'Uttar Pradesh', 208002, 47, 2, '', 'MR. MANISH', '', '9794994937', '', '2017-05-31', '2017-05-31', 1, ''),
(108, 97, 'jhansi', '', 'kanpur road bundelkhand university jhansi', '', 'Jhanshi', 'Uttar Pradesh', 284001, 48, 2, '', 'MR. VARUN SINGH', '', '7388700670', '', '2017-05-31', '2017-05-31', 1, ''),
(109, 98, 'LUCKNOW', '', 'k 994 Aashiyana lucknow ', '', 'LUCKNOW', 'Uttar Pradesh', 226012, 49, 2, '', 'mr. virendra kumar', '', '9919660578', '', '2017-05-31', '2017-05-31', 1, ''),
(110, 80, 'LUCKNOW', '', 'NIEL LINE CANT LUCKNOW', '', 'LUCKNOW', 'Uttar Pradesh', 226002, 0, 2, '', 'L.K. RIGHVARDHAN', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(111, 99, 'LUCKNOW', '', 'Gautam Budh nagar sector 30 noida ', '', 'noida', 'Uttar Pradesh', 201303, 45, 2, '', 'Mr. Rajeev', '', '8376061302', '', '2017-05-31', '2017-05-31', 1, ''),
(112, 100, 'Kanpur', '', '7/199 Swwaroop nagar kanur', '', 'kanpur', 'Uttar Pradesh', 208002, 47, 2, '', 'mr. kritinidhi man singh', '', '9935053720', '', '2017-05-31', '2017-05-31', 1, ''),
(113, 101, 'LUCKNOW', '', 'trauma center kamc chowk lucknow', '', 'LUCKNOW', 'Uttar Pradesh', 226003, 28, 2, '', 'Dr. wahid ali', '', '9198518227', '', '2017-05-31', '2017-05-31', 1, ''),
(114, 102, 'Dehradun', '', '7b astely hall dehradun', '', 'dehradun', 'Uttar Pradesh', 248001, 52, 2, '', 'dr. alok ahuja', '', '9627370258', '', '2017-05-31', '2017-05-31', 1, ''),
(115, 103, 'Etawa', '', 'State Highway saifai ', '', 'etawa', 'Uttar Pradesh', 206130, 53, 2, '', 'Dr. prachi', '', '9410058658', '', '2017-05-31', '2017-05-31', 1, ''),
(116, 104, 'BHOPAL', '0755 667 9101', 'Bhainsakhedi, Near Bairagarh, Bhopal-Indore Highway, Bhopal, Madhya Pradesh 462030', '', 'BHOPAL', 'Madhya Pradesh', 462030, 54, 3, '', 'DEEPAK SHRIVASTAVA', 'Quality manager', '9926369364', '', '2017-05-31', '2017-05-31', 1, ''),
(117, 105, 'BHOPAL', '', 'S 204 GM TOWERS 10 NO MARKET, Arera Colony, Bhopal, Madhya Pradesh', '', 'BHOPAL', 'Madhya Pradesh', 462016, 55, 3, '', 'Dr. Vipin Kotgirwar', 'Director', '9425006315', '', '2017-05-31', '2017-05-31', 1, ''),
(118, 106, 'BHOPAL', '', 'Kasturba Market, BHEL, Opposite Habibganj Station, Habib Ganj, Bhopal, Madhya Pradesh', '', 'BHOPAL', 'Madhya Pradesh', 462024, 56, 3, '', 'Mrs. Sushma', 'Head Technician', '9165799791', '', '2017-05-31', '2017-05-31', 1, ''),
(119, 107, 'BHOPAL', '', '52-117, Bhadbhada Road, North TT Nagar, TT Nagar, Bhopal, Madhya Pradesh', '', 'BHOPAL', 'Madhya Pradesh', 462003, 57, 3, '', 'Dr. Vivek Shukla', '', '9826089221', '', '2017-05-31', '2017-05-31', 1, ''),
(120, 108, 'RAIPUR', '0731 400 4368', ' New Bust Stand, Pandri, Raipur, Chhattisgarh ', '', 'RAIPUR', 'Madhya Pradesh', 492001, 58, 3, '', 'Mr. Pushpraj', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(121, 109, 'RAIPUR', '0731 249 3911', 'Gudhiyari Road, Behind Hotel Piccadily,Raipur (Chhattisgarh)', '', 'RAIPUR', 'Madhya Pradesh', 492001, 58, 3, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(122, 110, 'BHILAI', '0788 285 5011', 'Jawaharlal Nehru Hospital & Research Centre sector 9 Bhilai CG ', '', 'BHILAI', 'Madhya Pradesh', 490001, 59, 3, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(123, 111, 'JABALPUR', '076126 00568', 'Saraswati Vihar, Pachpedi, Jabalpur, Madhya Pradesh', '', 'JABALPUR', 'Madhya Pradesh', 482001, 60, 3, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(124, 142, 'INDORE', '(073) 16622222', 'A.B. Road, Near L.I.G Square, Indore, Madhya Pradesh', '', 'INDORE', 'Madhya Pradesh', 452008, 70, 3, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(125, 112, 'UJJAIN', ' 0734 253 4000', 'Hari Phatak Bye-Pass Road, Nana Kheda, Ujjain, Madhya Pradesh', '', 'UJJAIN', 'Madhya Pradesh', 456010, 61, 3, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(126, 113, 'INDORE', ' 0731 236 2491', '14, Manik Bagh Road, Indore, Madhya Pradesh', '', 'INDORE', 'Madhya Pradesh', 452014, 62, 3, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(127, 114, 'INDORE', '0731 252 7383', 'A.B.Road, Indore, Madhya Pradesh', '', 'INDORE', 'Madhya Pradesh', 452001, 63, 3, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(128, 115, 'INDORE', '0731 663 3333', '11/2, Old Palasia, Near Palasia Thana, Indore, Madhya Pradesh', '', 'INDORE', 'Madhya Pradesh', 452018, 64, 3, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(129, 116, 'INDORE', '0731 423 1000', 'Ujjain State Highway, Near MR 10 Crossing, Indore, Madhya Pradesh', '', 'INDORE', 'Madhya Pradesh', 453555, 65, 3, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(130, 117, 'INDORE', '0731 4412121', '34/2, Near Om Shanti Bhavan Circle, New Palasia, Indore, Madhya Pradesh', '', 'INDORE', 'Madhya Pradesh', 452001, 63, 3, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(131, 118, 'INDORE', '0731 455 0400', 'Vijay Nagar, Scheme No 74, Indore, Madhya Pradesh ', '', 'INDORE', 'Madhya Pradesh', 452010, 66, 3, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(132, 119, 'INDORE', '0731 6633111', '22, 23 24 First floor Yashwant Plaza, Opposite Indore Railway Station ( Pf 1 side), Indore, Madhya Pradesh', '', 'INDORE', 'Madhya Pradesh', 452001, 63, 3, '', '', '', '7869999937', '', '2017-05-31', '2017-05-31', 1, ''),
(133, 120, 'CHITRAKOOT', '076702 65320', 'Sadguru Eye Hospital, District Satna, Chitrakoot, Madhya Pradesh', '', 'CHITRAKOOT', 'Madhya Pradesh', 210204, 67, 3, '', 'Mr. Kamal', 'Head Technician', '8349235204', '', '2017-05-31', '2017-05-31', 1, ''),
(134, 121, 'BHOPAL', '0755-4086000', 'Near Shahpura Lake, Shahpura, Bhopal, Madhya Pradesh', '', 'BHOPAL', 'Madhya Pradesh', 462016, 55, 3, '', 'Mr. Vijay', '', '7987053765', '', '2017-05-31', '2017-05-31', 1, ''),
(135, 122, 'INDORE', '0731 402 9133', 'Morya Centre, 16/1 Race Course Rd, Opp. Basket Ball Complex, Palasia, Indore, Madhya Pradesh', '', 'INDORE', 'Madhya Pradesh', 452001, 63, 3, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(136, 123, 'BHOPAL', '0755-2737405', '6, Malipura, Bhopal, Madhya Pradesh', '', 'BHOPAL', 'Madhya Pradesh', 462001, 68, 3, '', 'Mr. Anil ', '', '9893264320', '', '2017-05-31', '2017-05-31', 1, ''),
(137, 124, 'BHOPAL', '0755-2556707', 'MP State Branch Red Cross Bhawan Shivaji Nagar,, Bhopal, Madhya Pradesh ', '', 'BHOPAL', 'Madhya Pradesh', 462016, 55, 3, '', 'Mr. Irshad', '', '8871979174', '', '2017-05-31', '2017-05-31', 1, ''),
(138, 109, 'INDORE', '0731 249 3911', '5/1, A B Road, Opposite MGM Medical College, Indore, Madhya Pradesh ', '', 'INDORE', 'Madhya Pradesh', 452001, 63, 3, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(139, 126, 'JABALPUR', '8720847047', 'Russel Crossing, Napier Town, Jabalpur, Madhya Pradesh', '', 'JABALPUR', 'Madhya Pradesh', 482002, 69, 3, '', 'Dr. Lokwani', '', '9425939131', '', '2017-05-31', '2017-05-31', 1, ''),
(140, 127, 'JABALPUR', '', 'Plot B, Scheme No 5, Ahinsa Chowk, Kanchnar City Road, Vijay Nagar Colony, Jabalpur, Madhya Pradesh', '', 'JABALPUR', 'Madhya Pradesh', 482002, 69, 3, '', 'Dr. Manish Gupta', '', '9575801110', '', '2017-05-31', '2017-05-31', 1, ''),
(141, 128, 'INDORE', '0731 679 9999', '5/1, Bhawarkuan Main Road, Transport Nagar, Indore, Madhya Pradesh ', '', 'INDORE', 'Madhya Pradesh', 452008, 70, 3, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(142, 127, 'INDORE', '0731 667 7777', 'Part 5 & 6, Race Course Road, R S bhandari Marg, Janjeerwala Square, Indore, Madhya Pradesh ', '', 'INDORE', 'Madhya Pradesh', 452003, 71, 3, '', 'Mr. Ashu', '', '7049918754', '', '2017-05-31', '2017-05-31', 1, ''),
(143, 130, 'INDORE', '0731 427 1600', ' Old Palasia, Ravindra Nagar, Manorama Ganj, Indore, Madhya Pradesh', '', 'INDORE', 'Madhya Pradesh', 452018, 64, 3, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(144, 131, 'SATNA', '076722 57412', ' J.R. Birla Road, Birla Vikas, Satna, Madhya Pradesh', '', 'SATNA', 'Madhya Pradesh', 485005, 72, 3, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(145, 132, 'GWALIOR', '', 'S K V Rd, Basant Vihar Colony, Lashkar, Gwalior, Madhya Pradesh', '', 'GWALIOR', 'Madhya Pradesh', 474002, 73, 3, '', '', '', '9554587808', '', '2017-05-31', '2017-05-31', 1, ''),
(146, 133, 'RAIPUR', '', ' Krishna Complex, Opposite Civil Court, Raipur', '', 'RAIPUR', 'Madhya Pradesh', 492001, 58, 3, '', 'Mr. Tilak', '', '9302321425', '', '2017-05-31', '2017-05-31', 1, ''),
(147, 134, 'INDORE', '', '14 Manik Bagh Road, Indore, Madhya Pradesh', '', 'INDORE', 'Madhya Pradesh', 452014, 62, 3, '', 'Mr.Sheel', '', '7314206705', '', '2017-05-31', '2017-05-31', 1, ''),
(148, 135, 'JABALPUR', '', ',Tilwara Road, Jabalpur, Madhya Pradesh ', '', 'JABALPUR', 'Madhya Pradesh', 482003, 74, 3, '', 'Mr. Virendra Tiwari', '', '9826132618', '', '2017-05-31', '2017-05-31', 1, ''),
(149, 136, 'BHOPAL', '', '120-121,Near Personal Branch SBI, Link Rd Number 3, E-3, Arera Colony, Bhopal, Madhya Pradesh ', '', 'BHOPAL', 'Madhya Pradesh', 462016, 55, 3, '', 'Dr. Nitu Kumar', '', '9425302826', '', '2017-05-31', '2017-05-31', 1, ''),
(150, 137, 'UMARIYA', '', 'Dist. Hospital Umariya', '', 'UMARIYA', 'Madhya Pradesh', 484661, 75, 3, '', 'Mr. Virendra ', '', '7987068397', '', '2017-05-31', '2017-05-31', 1, ''),
(151, 138, 'SHAHDOL', '', 'Pandav Nagar, Shahdol, Madhya Pradesh', '', 'SHAHDOL', 'Madhya Pradesh', 484001, 76, 3, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(152, 139, 'ANUPPUR', '', ',Chetna Nagar, Anuppur, Madhya Pradesh', '', 'ANUPPUR', 'Madhya Pradesh', 484224, 77, 3, '', 'Mr. Narendra', '', '7879301484', '', '2017-05-31', '2017-05-31', 1, ''),
(153, 140, 'BHOPAL', '', '52-117, Bhadbhada Road, North TT Nagar, TT Nagar, Bhopal, Madhya Pradesh', '', 'BHOPAL', 'Madhya Pradesh', 462003, 57, 3, '', 'Dr. Vivek Shukla', '', '9826089221', '', '2017-05-31', '2017-05-31', 1, ''),
(154, 141, 'BHOPAL', '', 'Sultania Rd, Royal Market, Near Hamidia Hospital, Bhopal, Madhya Pradesh ', '', 'BHOPAL', 'Madhya Pradesh', 462001, 68, 3, '', 'Mr. Verma', '', '7898003228', '', '2017-05-31', '2017-05-31', 1, ''),
(155, 143, 'Goregaon', '', 'Plot No 1, Prime Square building,Next to Patel Petrol Pump,S.V. Road,Goregaon West', '', 'Mumbai', 'Maharashtra', 400062, 1, 1, '', 'Mrs. Manisha ', 'Section Head', '9833031032', 'manisha.ramani@srl.in', '2017-05-31', '2017-05-31', 1, ''),
(156, 144, 'Vidyavihar', '022-30840771', '4rth floor, kohinoor commercial building', '', 'Mumbai', 'Maharashtra', 400070, 2, 1, '', 'Ms.Jinal', 'Senior Technician', '9869314808', 'jinal.dedhia@metropolisindia.com', '2017-05-31', '2017-05-31', 1, ''),
(157, 145, 'Parel', '', '6th floor,Global Hospital', '', 'Mumbai', 'Maharashtra', 400012, 3, 1, '', 'Mr. Rajesh Jadhav', 'Lab Manager', '9892982681', 'rajesh.jadhav@metropolisindia.com', '2017-05-31', '2017-05-31', 1, ''),
(158, 146, 'Pedder road', '022 23533333', 'Dr. deshmukh road', '', 'Mumbai', 'Maharashtra', 400026, 4, 1, '', 'Mr. Ramesh Bawkar', 'Senior Technician', '9765268965', 'ramesh3061@gmail.com', '2017-05-31', '2017-05-31', 1, ''),
(159, 147, 'Charni road', '022 67570111', 'Charni road ', '', 'Mumbai', 'Maharashtra', 400004, 5, 1, '', 'Mr. Bharat Malkhan', 'Senior Technician', '8691077402', '', '2017-05-31', '2017-05-31', 1, ''),
(160, 148, 'Andheri East', '022-30999999', 'Varsova', '', 'Mumbai', 'Maharashtra', 400053, 6, 1, '', 'Mrs. Bhavini', 'Senior Technician', '9820468893', '', '2017-05-31', '2017-05-31', 1, ''),
(161, 17, 'Belapur', '022-33503350', 'Belapur CBD', '', 'Mumbai', 'Telangana', 400614, 0, 13, '', 'Dr. Vishal', 'Doctor', '7738058952', 'drvishal_m@apollohospitals.com', '2017-05-31', '2017-05-31', 1, ''),
(162, 149, 'Chembur', '022-25598253', 'Anushakti nagar', '', 'Mumbai', 'Maharashtra', 400094, 7, 1, '', 'Dr. Jamuna', 'Doctor', '9833645854', 'jkurkundi8@gmail.com', '2017-05-31', '2017-05-31', 1, ''),
(163, 150, 'Thane', '', 'Wagle Industrial Estate, Ambika Nagar No 3', '', 'Mumbai', 'Maharashtra', 400604, 8, 1, '', 'Mrs. Gargi', 'Senior Technician', '9870889775', '', '2017-05-31', '2017-05-31', 1, ''),
(164, 151, 'Bhulabhai nagar', '022-23667788', '60 A, Bhulabhai desai road', '', 'Mumbai', 'Maharashtra', 400026, 4, 1, '', 'Mr. Shankar', 'Biomedical Enginner', '9819750173', 'shankarm@breachcandyhospital.org', '2017-05-31', '2017-05-31', 1, ''),
(165, 152, 'Andheri west', '', 'Juhu', '', 'Mumbai', 'Maharashtra', 400049, 10, 1, '', 'Mr. Trunal', 'Senior Technician', '9819281495', '', '2017-05-31', '2017-05-31', 1, ''),
(166, 153, 'Dahisar', '', 'near Trimurti film city', '', 'Mumbai', 'Maharashtra', 400068, 11, 1, '', 'Mrs. Parinda', 'Senior Technician', '9892259766', 'parindakrupal@yahoo.co.in', '2017-05-31', '2017-05-31', 1, ''),
(167, 154, 'Ghatkopar', '', 'Near Ghatkopar Railway station', '', 'Mumbai', 'Maharashtra', 400086, 12, 1, '', 'Mr. Sarfaraz', 'Senior Technician', '9769909209', '', '2017-05-31', '2017-05-31', 1, ''),
(168, 155, 'Parel', '022-24138518', '13 floor,New building, KEM Hospital', '', 'Mumbai', 'Maharashtra', 400012, 3, 1, '', 'Dr.Shrimati shetty', 'Doctor', '', '', '2017-05-31', '2017-05-31', 1, ''),
(169, 156, 'Charni road', '022-66173333', '383 Bhaveshwar Vihar, Sardar V P Road', '', 'Mumbai', 'Maharashtra', 400004, 5, 1, '', 'Mrs. Swati Bokil', 'Lab Manager', '9323483252', 'swati.bokil@jankharia.com', '2017-05-31', '2017-05-31', 1, ''),
(170, 157, 'Andheri East', '022-28262741', '1st floor, A wing, Ambika apmt.', '', 'Mumbai', 'Maharashtra', 400069, 13, 1, '', 'Mr. Shahid Saiyed', 'Senior Technician', '8767210472', '', '2017-05-31', '2017-05-31', 1, ''),
(171, 158, 'Ghatkopar', '022-25111313', 'Sarvodya Hospital, LBS road', '', 'Mumbai', 'Maharashtra', 400086, 12, 1, '', 'Dr. Nitin Manyar', 'Doctor', '9594032520', 'samarpanbb@gmail.com', '2017-05-31', '2017-05-31', 1, ''),
(172, 159, 'Dadar', '', 'Dadar', '', 'Mumbai', 'Maharashtra', 400014, 14, 1, '', 'Dr. Sushant', 'Doctor', '9833454470', '', '2017-05-31', '2017-05-31', 1, ''),
(173, 160, 'Kharghar', '', 'Bhumi tawer, Kharghar, sector-4', '', 'Mumbai', 'Maharashtra', 410210, 139, 13, '', 'Dr. Avi Nahar', 'Doctor', '9004402557', 'avi1983_nahar@yahoo.com', '2017-05-31', '2017-05-31', 1, ''),
(174, 161, 'Vashi', '', 'Forites hospital sector 10, Vashi', '', 'Mumbai', 'Maharashtra', 400703, 140, 13, '', 'Mr. Aparna', 'Senior Technician', '9757209333', '', '2017-05-31', '2017-05-31', 1, ''),
(175, 162, 'Parel', '022-65231212', 'Opp. KEM Hospital', '', 'Mumbai', 'Maharashtra', 400012, 3, 1, '', 'Mr. Devendra', 'Senior Technician', '9619952626', '', '2017-05-31', '2017-05-31', 1, ''),
(176, 163, 'Kalyan', '', 'Fortis Hospital, Bail bazar', '', 'Mumbai', 'Maharashtra', 421301, 15, 1, '', 'Mr. Bala Ugale', 'Senior Technician', '8108888464', 'balaugale@yahoo.in', '2017-05-31', '2017-05-31', 1, ''),
(177, 164, 'Gamdevi', '', 'Near Gamdevi polis station', '', 'Mumbai', 'Maharashtra', 400007, 16, 1, '', 'Mrs. Ashwini ', 'Senior Technician', '9820444855', '', '2017-05-31', '2017-05-31', 1, ''),
(178, 165, 'Bandra', '', 'S-341, Near Collector Office, Gandhi Nagar', '', 'Mumbai', 'Maharashtra', 400, 17, 1, '', 'Mr. Sujan', 'Senior Technician', '9869774812', '', '2017-05-31', '2017-05-31', 1, ''),
(179, 166, 'Sanpada', '', 'Sector 24, Sanpada', '', 'Mumbai', 'Maharashtra', 400705, 18, 1, '', 'Mr. Rajan', 'Lab in-charge', '9773315523', 'rajanmestri@yahoo.com', '2017-05-31', '2017-05-31', 1, ''),
(180, 80, 'Pune', '', 'Command Pathology Lab Camp Pune', '', 'Pune', 'Maharashtra', 411040, 186, 15, '', 'Mr. Navin', 'Technician', '7769800108', '', '2017-05-31', '2017-05-31', 1, ''),
(181, 167, 'Pune', '', 'MH, Range Hill, Kirki, Pune', '', 'Pune', 'Maharashtra', 411003, 177, 15, '', 'Dattatra Patil', 'Senior Technician', '9657357524', '', '2017-05-31', '2017-05-31', 1, ''),
(182, 168, 'Pune', '', 'Gokhale nagar, Pune', '', 'Pune', 'Maharashtra', 411016, 178, 15, '', 'Dr. Varsha Kadam', 'HOD', '8605123100', '', '2017-05-31', '2017-05-31', 1, ''),
(183, 169, 'Pune', '', 'Balgandharve Road, Pune', '', 'Pune', 'Maharashtra', 411001, 179, 15, '', 'Mr. Shirish', 'Lab Manager', '9890125380', '', '2017-05-31', '2017-05-31', 1, ''),
(184, 170, 'Pune', '', 'Chinchwad, Pune', '', 'Pune', 'Maharashtra', 411019, 180, 15, '', 'Mr.Santosh', 'Biomedical Enginner', '8888804546', '', '2017-05-31', '2017-05-31', 1, ''),
(185, 171, 'Pune', '', 'Deccan, Pune', '', 'Pune', 'Maharashtra', 411004, 181, 15, '', 'Mrs. Rupali', 'Biomedical Enginner', '9689911129', '', '2017-05-31', '2017-05-31', 1, ''),
(186, 172, 'Pune', '2066548700', '375,Urawade, Tal- Muishi, Pune', '', 'Pune', 'Maharashtra', 412115, 182, 15, '', 'Dr. Amol Kale', 'Doctor', '2331122546666', 'info@intoxlab.com', '2017-05-31', '2017-05-31', 1, ''),
(187, 180, 'Pune', '2024449527', 'Swargate, Pune', '', 'Pune', 'Maharashtra', 411042, 0, 15, '', 'Mrs. Amruta', 'Technician', '', '', '2017-05-31', '2017-05-31', 1, ''),
(188, 173, 'Pune', '', 'Kharadi Bypass Road, Hadapsar, Pune', '', 'Pune', 'Maharashtra', 411014, 183, 15, '', 'Mr. Paskal', 'Senior Technician', '8411000515', '', '2017-05-31', '2017-05-31', 1, ''),
(189, 174, 'Pune', '2066749457', '46/47A Nannde Mulshi, Pune', '', 'Pune', 'Maharashtra', 412108, 184, 15, '', 'Ms. Arpita Choudhary', 'Senior Technician', '', '', '2017-05-31', '2017-05-31', 1, ''),
(190, 175, 'Pune', '', 'Pawana Nagar Housing CHS chinchwad, Pune', '', 'Pune', 'Maharashtra', 411033, 185, 15, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(191, 176, 'Pune', '2026022599', 'MH ctc, Golibar Maidan Pune', '', 'Pune', 'Maharashtra', 411040, 186, 15, '', '', 'Senior Technician', '', '', '2017-05-31', '2017-05-31', 1, ''),
(192, 177, 'Barshi', '2172726858', 'barshi', '', 'Barshi', 'Maharashtra', 413001, 187, 15, '', 'Mr. Patil', 'Purchase Manager', '', '', '2017-05-31', '2017-05-31', 1, ''),
(193, 178, 'Solapur', '', 'Old Employment chowk, Solapur', '', 'Solapur', 'Maharashtra', 413002, 188, 15, '', '', 'Senior Technician', '', '', '2017-05-31', '2017-05-31', 1, ''),
(194, 179, 'Nashik', '', 'Dr.Athavale chamber, Tilak Rd, Nashik', '', 'Nashik', 'Maharashtra', 422001, 189, 15, '', 'Mr. Sandip', 'Senior Technician', '9881907660', '', '2017-05-31', '2017-05-31', 1, ''),
(195, 180, 'Pune', '', 'Gangapur Road, Shrirang Nagar, Nashik', '', 'Pune', 'Maharashtra', 422013, 190, 15, '', 'Mr. Prasad', 'Senior Technician', '8625996927', '', '2017-05-31', '2017-05-31', 1, ''),
(196, 181, 'Nanded', '', 'vazirabad, Nanded', '', 'Nanded', 'Maharashtra', 431601, 191, 15, '', 'Dr. Mrs. Deshpande', 'Doctor', '9421448576', '', '2017-05-31', '2017-05-31', 1, ''),
(197, 182, 'Aurangabad', '', 'Bajaj Marg, Beed Bypass Rd. Aurangabad', '', 'Aurangabad', 'Maharashtra', 431005, 192, 15, '', 'Dr. Mrs. Ekbote', 'Doctor', '9822329832', '', '2017-05-31', '2017-05-31', 1, ''),
(198, 183, 'Pune', '', 'Loni, Ahmadnagar', '', 'Pune', 'Maharashtra', 413736, 193, 15, '', 'Mr. Bhalerao', 'Biomedical Enginner', '9970532827', '', '2017-05-31', '2017-05-31', 1, ''),
(199, 180, 'Pune', '', 'Malegaon Road, Patangan, Ahmednagar', '', 'Pune', 'Maharashtra', 414001, 196, 15, '', '', 'Doctor', '', '', '2017-05-31', '2017-05-31', 1, ''),
(200, 184, 'Aurangabad', '', 'D-4, MIDC, Chikalthana Aurangabad', '', 'Aurangabad', 'Maharashtra', 431210, 194, 15, '', 'Mr. Bhushan Choudhry', 'Technician', '9175470933', 'mnandanwar@wockhardt.com', '2017-05-31', '2017-05-31', 1, ''),
(201, 185, 'Aurangabad', '', 'Gajanand Maharaj mandir rd. garkheda, Aurangabad', '', 'Aurangabad', 'Maharashtra', 431005, 192, 15, '', 'Dr. Patwadkar', 'Doctor', '9822435510', '', '2017-05-31', '2017-05-31', 1, ''),
(202, 186, 'Sangali', '2332331354', 'Ashirwad Bldg, Sangli', '', 'Sangali', 'Maharashtra', 416416, 195, 15, '', 'Dr. Gujar', 'Doctor', '', '', '2017-05-31', '2017-05-31', 1, ''),
(203, 187, 'Sangali', '', 'Redcross Chowk, Sangli', '', 'Sangali', 'Maharashtra', 416416, 195, 15, '', 'Dr. Mrs. Shruti Kulkarni', 'Doctor', '9422662066', '', '2017-05-31', '2017-05-31', 1, ''),
(204, 188, 'Ahamednagar', '', 'Anand Rishiji Marg, AHMADNAGAR', '', 'Ahamednagar', 'Maharashtra', 414001, 196, 15, '', 'Mrs. Ashwini', 'Biomedical Engineer', '9850184250', '', '2017-05-31', '2017-05-31', 1, ''),
(205, 189, 'Kolhapur', '', 'shahu nagar kolhapur', '', 'Kolhapur', 'Maharashtra', 416001, 197, 15, '', 'Mr. Sagar', 'Senior Technician', '9373827739', '', '2017-05-31', '2017-05-31', 1, ''),
(206, 190, 'Kolhapur', '', 'Communit Hall, Karveer, Kolhapur', '', 'Kolhapur', 'Maharashtra', 416003, 198, 15, '', 'Mr. Amar Patil', 'Purchase Manager', '9370503021', '', '2017-05-31', '2017-05-31', 1, ''),
(207, 191, 'Kolhapur', '', '1719, Panchsheel, rajaram puri, Kolhapur', '', 'Kolhapur', 'Maharashtra', 416008, 199, 15, '', 'Mr. Appa', 'Lab in-charge', '8485058315', '', '2017-05-31', '2017-05-31', 1, ''),
(208, 192, 'Latur', '2382245903', 'Vida nagar, Singal camp, Latur', '', 'Latur', 'Maharashtra', 413512, 200, 15, '', '', 'Biomedical Engineer', '', '', '2017-05-31', '2017-05-31', 1, ''),
(209, 193, 'Latur', '', 'Gandhi Market, sawewadi, Latur', '', 'Latur', 'Maharashtra', 413531, 201, 15, '', '', '', '9422072610', '', '2017-05-31', '2017-05-31', 1, ''),
(210, 194, 'Barshi', '', 'Jawahar Hospital Compound, Somwarpeth, barshi', '', 'Barshi', 'Maharashtra', 413401, 202, 15, '', 'Mr. Buduk', 'Technician', '9011095659', '', '2017-05-31', '2017-05-31', 1, ''),
(211, 178, 'Akola', '', 'Kela Plot, Jathar Pet, Akola', '', 'Akola', 'Maharashtra', 444010, 0, 15, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(212, 195, 'Goa', '', 'Dr.E Borges Rd. Dona paula, panjim, Goa', '', 'Goa', 'Maharashtra', 403004, 203, 15, '', 'Mr. Vishwanath Ganguly', 'Senior Technician', '9422639883', '', '2017-05-31', '2017-05-31', 1, ''),
(213, 196, 'karad', '', 'Malakapur, karad.', '', 'Karad', 'Maharashtra', 415539, 204, 15, '', 'Mr. Kanase', 'Senior Technician', '8796323157', '', '2017-05-31', '2017-05-31', 1, ''),
(214, 197, 'Sangali', '', 'Shanthisagar Colon, Miraj', '', 'Sangali', 'Maharashtra', 416410, 205, 15, '', 'Dr. Quraishi', 'Doctor', '9604542311', '', '2017-05-31', '2017-05-31', 1, ''),
(215, 198, 'Pune', '', 'NCL, Pashan RD. Pune', '', 'Pune', 'Maharashtra', 411008, 206, 15, '', 'Mrs. Manisha', 'Technician', '9420172329', '', '2017-05-31', '2017-05-31', 1, ''),
(216, 199, 'Nashik', '', 'United legend building, parijat Nagar , Nashik', '', 'Nashik', 'Maharashtra', 422005, 207, 15, '', 'Mr. Chirag Doshi', 'Purchase Manager', '8237077830', '', '2017-05-31', '2017-05-31', 1, ''),
(217, 200, 'Pune', '', 'Dhole Palit Rd. Pune', '', 'Pune', 'Maharashtra', 411001, 179, 15, '', 'Mr. Bhosale', 'Biomedical Engineer', '9890300502', '', '2017-05-31', '2017-05-31', 1, ''),
(218, 201, 'Pune', '', 'AFMC Special Lab Camp Pune', '', 'Pune', 'Maharashtra', 411040, 186, 15, '', 'Mr. Virendra Singh', '           Technician', '8168421620', '', '2017-05-31', '2017-05-31', 1, ''),
(219, 202, 'Pune', '', 'Hinjewadi Phase 2', '', 'Pune', 'Maharashtra', 41102, 208, 15, '', 'Mr. mahendra', '           Technician', '9922568759', '', '2017-05-31', '2017-05-31', 1, ''),
(220, 203, 'Pune', '', 'Narhe, Pune', '', 'Pune', 'Maharashtra', 411041, 209, 15, '', 'Dr. Mrs. Gogate', 'Doctor', '9822862623', '', '2017-05-31', '2017-05-31', 1, ''),
(221, 204, 'Nagpur', '', 'Nagpur', '', 'Nagpur', 'Maharashtra', 440003, 210, 15, '', 'Dr. Poornima', 'Doctor', '8975812067', '', '2017-05-31', '2017-05-31', 1, ''),
(222, 205, 'Nanded', '', 'vazirabad, Nanded', '', 'Nanded', 'Maharashtra', 431601, 191, 15, '', '         Dr. Amita', '            Doctor', '7719999118', '', '2017-05-31', '2017-05-31', 1, ''),
(223, 206, 'Nashik', '', 'Shalimar Chowk, Nashik', '', 'Nashik', 'Maharashtra', 422001, 189, 15, '', 'Dr. Shimpi', 'Doctor', '9890304750', '', '2017-05-31', '2017-05-31', 1, ''),
(224, 207, 'Amaravati', '', 'Amrawati', '', 'Amaravati', 'Maharashtra', 444601, 211, 15, '', 'Dr. Amol Wadekar', 'Biomedical Engineer', '9822470078', '', '2017-05-31', '2017-05-31', 1, ''),
(225, 208, 'Pune', '', 'Bhandarkar Road, Deccan, Pune', '', 'Pune', 'Maharashtra', 411004, 181, 15, '', 'Mrs. Nupoor', 'Technician', '9657722055', '', '2017-05-31', '2017-05-31', 1, ''),
(226, 209, 'head office', '', 'phuwari sarif,patna', '', 'patna', 'Bihar', 801505, 86, 6, '', 'jay singh', 'Head Technician', '9572288749', '', '2017-05-31', '2017-05-31', 1, ''),
(227, 210, 'head office', '', 'kamendra market,chhatauni Road,opposite Dr. kamta prasad singh,', '', 'motihari', 'Bihar', 800014, 87, 6, '', 'aurangjeb', 'Head Technician', '9504116518', '', '2017-05-31', '2017-05-31', 1, ''),
(228, 211, 'head office', '', 'Allalpatti,near donar chowk', '', 'Darbhanga', 'Bihar', 846003, 88, 6, '', 'Raghbendra kumar', 'Head Technician', '8271786771', '', '2017-05-31', '2017-05-31', 1, ''),
(229, 212, 'head office', '', 'Laheria srai bangali tola', '', 'Darbhanga', 'Bihar', 846003, 88, 6, '', 'Ramkrishna', 'Head Technician', '9608995602', '', '2017-05-31', '2017-05-31', 1, ''),
(230, 213, 'head office', '', 'Sachivalya colony,kankarbagh', '', 'patna', 'Bihar', 800020, 89, 6, '', 'Zunaid', 'Head Technician', '7781006893', '', '2017-05-31', '2017-05-31', 1, ''),
(231, 214, 'head office', '', 'Heaart Hospital,kankarbagh,', '', 'patna', 'Bihar', 800026, 90, 6, '', 'Randhir kumar', 'Head Technician', '7783856038', '', '2017-05-31', '2017-05-31', 1, ''),
(232, 175, 'head office', '', 'C/O MEDICA SUPER SPECIALTY HOSPITAL,', '', 'Ranchi', 'Bihar', 834009, 91, 6, '', 'Arvind Gupta', 'Quality manager', '9903778425', '', '2017-05-31', '2017-05-31', 1, ''),
(233, 216, 'head office', '', 'Raja bazar,shiekpura', '', 'patna', 'Bihar', 800014, 87, 6, '', 'Dr. bipin', 'HOD Pathology', '8804254155', '', '2017-05-31', '2017-05-31', 1, ''),
(234, 217, 'head office', '', 'Line bazar chowk', '', 'purnea', 'Bihar', 854301, 93, 6, '', 'sadique', 'Head Technician', '7480820534', '', '2017-05-31', '2017-05-31', 1, ''),
(235, 218, 'head office', '', 'BAILY ROAD , RAJA BAJAR', '', 'patna', 'Bihar', 800014, 87, 6, '', 'Jitendra kumar', 'Quality manager', '8877887712', '', '2017-05-31', '2017-05-31', 1, ''),
(236, 219, 'head office', '', 'vivek nand marg,,booring road', '', 'patna', 'Bihar', 800013, 94, 6, '', 'Dr. Sushanto Mukherjee', 'Director', '9334119090', '', '2017-05-31', '2017-05-31', 1, ''),
(237, 220, 'head office', '', 'JAWAHAR LAL NEHRU MEDICAL COLLEGE', '', 'AJMER', 'Rajasthan', 305001, 141, 14, '', 'Rajesh', 'Technician', '094148 34332', '', '2017-05-31', '2017-05-31', 1, ''),
(238, 221, 'head office', '', 'CENTRAL LAB JLN HOSPITAL', '', 'AJMER', 'Rajasthan', 305001, 141, 14, '', 'Rajesh', 'Technician', '094148 34333', '', '2017-05-31', '2017-05-31', 1, ''),
(239, 222, 'head office', '0144-6450005', 'GOVT. HOSPITAL', '', 'ALWAR', 'Rajasthan', 301001, 142, 14, '', 'Deepak', 'Technician', '', '', '2017-05-31', '2017-05-31', 1, ''),
(240, 222, 'head office', '', 'GOVT. HOSPITAL', '', 'BALOTARA', 'Rajasthan', 344022, 143, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(241, 222, 'head office', '07453-231435', 'GOVT. HOSPITAL', '', 'BARAN', 'Rajasthan', 325205, 144, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(242, 225, 'head office', '', 'LADDHA HOSPITAL', '', 'BANSWARA', 'Rajasthan', 327001, 145, 14, '', 'Neeraj laddha', 'Incharge', '9414725116', '', '2017-05-31', '2017-05-31', 1, ''),
(243, 222, 'head office', '', 'GOVT. HOSPITAL', '', 'BEAWAR', 'Rajasthan', 305901, 146, 14, '', 'Dr. Manish', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(244, 222, 'head office', '05644-224555', 'GOVT. HOSPITAL', '', 'BHARATPUR', 'Rajasthan', 321001, 147, 14, '', '', '', '9413787556', '', '2017-05-31', '2017-05-31', 1, ''),
(245, 228, 'head office', '1482253101', 'ARIHANT HOSPITAL & RESEARCH CENTER', '', 'BHILWARA', 'Rajasthan', 311001, 148, 14, '', 'Durga Prasad', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(246, 222, 'head office', '01482-239643', 'GOVT. HOSPITAL', '', 'BHILWARA', 'Rajasthan', 311001, 148, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, '');
INSERT INTO `customer_service_location` (`id`, `customer_id`, `branch_name`, `landline`, `address`, `address1`, `city`, `state`, `pincode`, `area`, `service_zone_loc`, `zone_coverage`, `contact_name`, `designation`, `mobile`, `email_id`, `created_on`, `updated_on`, `user_id`, `flag`) VALUES
(247, 230, 'head office', '', 'WELL CURE PATH LAB AND DIAGNOSTICS CENTRE', '', 'BHILWARA', 'Rajasthan', 311001, 148, 14, '', 'Anil', 'Technician', '', '', '2017-05-31', '2017-05-31', 1, ''),
(248, 222, 'head office', '0151-2204557', 'GOVT. HOSPITAL', '', 'BIKANER', 'Rajasthan', 334001, 149, 14, '', '', '', '9414139854', '', '2017-05-31', '2017-05-31', 1, ''),
(249, 232, 'head office', '0151-2204557', 'GOVT. P.B. HOSPITAL , BIKANER', '', 'BIKANER', 'Rajasthan', 334001, 149, 14, '', 'Dr. Arya', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(250, 233, 'head office', '', 'BINNANI X RAY CLINIC & DIAGNOSTICS CENTER', '', 'BIKANER', 'Rajasthan', 334001, 149, 14, '', 'Dr. Binani', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(251, 222, 'head office', '0747-2444169', 'GOVT. HOSPITAL', '', 'BUNDI', 'Rajasthan', 323001, 150, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(252, 222, 'head office', '01562-222092', 'GOVT. HOSPITAL', '', 'CHURU', 'Rajasthan', 331001, 151, 14, '', 'Ravi', 'Technician', '', '', '2017-05-31', '2017-05-31', 1, ''),
(253, 236, 'head office', '', 'SHIVAM AURTHO & GENERAL HOSPITAL', '', 'CHURU', 'Rajasthan', 331001, 151, 14, '', 'Vikash', 'Technician', '9610140113', '', '2017-05-31', '2017-05-31', 1, ''),
(254, 222, 'head office', '01427-230088', 'GOVT. HOSPITAL', '', 'DAUSA', 'Rajasthan', 303303, 152, 14, '', 'Dr. Rajkumari', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(255, 238, 'head office', '01427-230088', 'GOVT. TROMA CENTER', '', 'DAUSA', 'Rajasthan', 303303, 152, 14, '', 'Dr. Rajkumari', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(256, 222, 'head office', '05642-220765', 'GOVT. HOSPITAL', '', 'DHAULPUR', 'Rajasthan', 328001, 153, 14, '', 'Murari', 'Technician', '', '', '2017-05-31', '2017-05-31', 1, ''),
(257, 222, 'head office', '', 'GOVT. HOSPITAL', '', 'DIDWANA', 'Rajasthan', 341303, 154, 14, '', 'Mustak', 'Technician', '9460918951', '', '2017-05-31', '2017-05-31', 1, ''),
(258, 222, 'head office', '02964-232423', 'GOVT. HOSPITAL', '', 'DUNGARPUR', 'Rajasthan', 314001, 155, 14, '', 'Mahesh', 'Technician', '', '', '2017-05-31', '2017-05-31', 1, ''),
(259, 222, 'head office', '', 'GOVT. HOSPITAL', '', 'GANGAPUR CITY', 'Rajasthan', 322201, 156, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(260, 222, 'head office', '01552-265692', 'GOVT. HOSPITAL', '', 'HANUMANGARH', 'Rajasthan', 335512, 157, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(261, 244, 'head office', '1414101202', 'APEX HOSPITAL, MALVIYA NAGAR, JAIPUR', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Dr. Navnand', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(262, 245, 'head office', '1412754677', 'B LAL CLINICAL LAB, VIDYADHAR NAGAR', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Amit', 'Technician', '', '', '2017-05-31', '2017-05-31', 1, ''),
(263, 246, 'head office', '', 'BANI PARK DHARMARTH SANSTHAN, BANI PARK', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Neeta', 'Technician', '9414446280', '', '2017-05-31', '2017-05-31', 1, ''),
(264, 247, 'head office', '', 'BHAGWAN MAHAVIR CANCER HOSPITAL & RESEARCH CENTER', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Ranu', 'Technician', '8696666310', '', '2017-05-31', '2017-05-31', 1, ''),
(265, 248, 'head office', '', 'CENTRAL PATHOLOGY LAB, SMS HOSPITAL , JAIPUR', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Yadav Ji', 'Store Incharge', '9928204161', '', '2017-05-31', '2017-05-31', 1, ''),
(266, 249, 'head office', '', 'Dr. GOYAL\'S PATH LAB, SODALA', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Anil', 'Incharge', '8387065299', '', '2017-05-31', '2017-05-31', 1, ''),
(267, 250, 'head office', '', 'GANGAOURI HOSPITAL, JAIPUR', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Manish', 'Technician', '9782143671', '', '2017-05-31', '2017-05-31', 1, ''),
(268, 251, 'head office', '1412563743', 'GETWELL DIAGNOSTICS CENTER, JLN MARG, JAIPUR', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Dr. Devendr', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(269, 252, 'head office', '', 'HLA LAB & ADVANCED HEAMATOLOGY LAB, SMS MEDICAL COLLEGE , JAIPUR', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Dr. Sandhya', 'Incharge', '9829010184', '', '2017-05-31', '2017-05-31', 1, ''),
(270, 253, 'head office', '', 'J.K. LOAN HOSPITAL , JAIPUR', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', '', '', '8890365219', '', '2017-05-31', '2017-05-31', 1, ''),
(271, 254, 'head office', '', 'JEEVAN REKHA CRITICAL CARE AND TRAUMA HOSPITAL', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Dr. Ram', 'Incharge', '9694094521', '', '2017-05-31', '2017-05-31', 1, ''),
(272, 255, 'head office', '', 'GOVT. JAIPURIYA HOSPITA', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Ramesh', 'Technician', '9414887695', '', '2017-05-31', '2017-05-31', 1, ''),
(273, 256, 'head office', '', 'GOVT. KANWATIYA HOSPITAL', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Dinesh', 'Technician', '9829053073', '', '2017-05-31', '2017-05-31', 1, ''),
(274, 257, 'head office', '', 'GOVT. DENTAL HOSPITAL, SHASTRI NAGAR', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Satish', 'Store  ', '9413453143', '', '2017-05-31', '2017-05-31', 1, ''),
(275, 258, 'head office', '', 'GOVT. SETHI COLONI HOSPITAL', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(276, 259, 'head office', '', 'JAIPUR HOSPITAL, TONK ROAD', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Omna', 'Technician', '9460557229', '', '2017-05-31', '2017-05-31', 1, ''),
(277, 260, 'head office', '', 'M.G. HOSPITAL & MEDICAL COLLEGE, TONK ROAD', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Dr. Puspendr', 'Incharge', '9799999691', '', '2017-05-31', '2017-05-31', 1, ''),
(278, 261, 'head office', '', 'MAHILA CHIKITSHALAY HOSPITAL', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Dr. Yogesh', 'Incharge', '9413253748', '', '2017-05-31', '2017-05-31', 1, ''),
(279, 262, 'head office', '', 'MANU HOSPITAL& RESEARCH CENTRE, JAIPUR.', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', '', '', '9929239089', '', '2017-05-31', '2017-05-31', 1, ''),
(280, 263, 'head office', '', 'MENTAL HOSPITAL JAIPUR', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', '', '', '9829206370', '', '2017-05-31', '2017-05-31', 1, ''),
(281, 264, 'head office', '', 'NUROCARE HOSPITAL,VIDHYADHAR NAGAR , JAIPUR', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(282, 265, 'head office', '', 'PRECISION PATH LAB', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Dr. samir', 'Incharge', '9983117003', '', '2017-05-31', '2017-05-31', 1, ''),
(283, 266, 'head office', '', 'RELIABLLE DIAGNOSTICS CENTER, NEAR J.K. LOAN HOSPITAL', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Dr. G.N. Gupta', 'Incharge', '1412744929', '', '2017-05-31', '2017-05-31', 1, ''),
(284, 267, 'head office', '', 'RAILWAYS CENTRAL HOSPITAL', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Ramesh', 'Technician', '', '', '2017-05-31', '2017-05-31', 1, ''),
(285, 268, 'head office', '', 'S.K. SONI HOSPITAL', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Surendra', 'Technician', '', '', '2017-05-31', '2017-05-31', 1, ''),
(286, 269, 'head office', '', 'SANTOKABA DURLABH JI MEMORIAL HOSPITAL, JAIPUR', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Rakesh', 'Incharge', '7611933299', '', '2017-05-31', '2017-05-31', 1, ''),
(287, 270, 'head office', '', 'SHALBY HOSPITAL, JAIPUR', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Dr. Parul', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(288, 271, 'head office', '1412560291', 'SMS HOSPITAL', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'H C. Yadav', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(289, 272, 'head office', '', 'SMS HOSPITAL,TROMA UNIT, JAIPUR', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Dr. Ashish', 'Incharge', '9460115310', '', '2017-05-31', '2017-05-31', 1, ''),
(290, 273, 'head office', '1412560291', 'SMS HOSPITAL, LIVER TRANSPLANT', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Dr. Mukesh', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(291, 274, 'head office', '', 'T.B. HOSPITAL, SHASTRI NAGAR', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', '', '', '9414851935', '', '2017-05-31', '2017-05-31', 1, ''),
(292, 275, 'head office', '1412370271', 'TONGYA HEART & GENERAL HOSPITAL', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Valsamma', 'Technician', '', '', '2017-05-31', '2017-05-31', 1, ''),
(293, 276, 'head office', '', 'UNIPATH SPECIALITY LABORATORY', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(294, 277, 'head office', '', 'ZANANA HOSPITAL , JAIPUR', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, '', 'Ramesh', 'Technician', '7340293776', '', '2017-05-31', '2017-05-31', 1, ''),
(295, 222, 'head office', '07432-230906', 'GOVT. HOSPITAL', '', 'JHALAWAR', 'Rajasthan', 326001, 159, 14, '', 'Dr Chetna Jain', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(296, 222, 'head office', '01592-230953', 'GOVT. HOSPITAL', '', 'JHUNJHUNU', 'Rajasthan', 333001, 160, 14, '', 'A. Goyal', 'Technician', '9897023414', '', '2017-05-31', '2017-05-31', 1, ''),
(297, 280, 'head office', '0291 274 0741', 'AIIMS , JODHPUR', '', 'JODHPUR', 'Rajasthan', 342005, 161, 14, '', 'Dr. Archna Vajpeyee', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(298, 281, 'head office', '', 'GOVT. HOSPITAL , MANDOR', '', 'JODHPUR', 'Rajasthan', 342005, 161, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(299, 282, 'head office', '', 'M.G. HOSPITAL ', '', 'JODHPUR', 'Rajasthan', 342005, 161, 14, '', 'Surendra Ranawat', 'Technician', '7737360845', '', '2017-05-31', '2017-05-31', 1, ''),
(300, 283, 'head office', '', 'MATHURA DAS MATHUR HOSPITAL(MDM) JODHPUR', '', 'JODHPUR', 'Rajasthan', 342005, 161, 14, '', 'Dr. arpita', 'Incharge', '9828067203', '', '2017-05-31', '2017-05-31', 1, ''),
(301, 284, 'head office', '1415102613', 'OK DIAGNOSTICS CENTER,JODHPUR', '', 'JODHPUR', 'Rajasthan', 342005, 161, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(302, 285, 'head office', '1412744929', 'RELIABLE DIAGNOSTICS CENTRE JODHPUR', '', 'JODHPUR', 'Rajasthan', 342005, 161, 14, '', 'Dr. manish', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(303, 286, 'head office', '', 'ROG NIDAN SEWA , JALORI GATE', '', 'JODHPUR', 'Rajasthan', 342005, 161, 14, '', 'Dr. Mukesh', 'Incharge', '8829802738', '', '2017-05-31', '2017-05-31', 1, ''),
(304, 287, 'head office', '', 'S.N. MEDICAL COLLEGE', '', 'JODHPUR', 'Rajasthan', 342005, 161, 14, '', 'Dr. Upadhyay', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(305, 288, 'head office', '', 'UMMAID HOSPITAL ', '', 'JODHPUR', 'Rajasthan', 342005, 161, 14, '', 'Ramesh', 'Technician', '', '', '2017-05-31', '2017-05-31', 1, ''),
(306, 289, 'head office', '', 'VASUNDHARA LABORATORY, SARDARPURA', '', 'JODHPUR', 'Rajasthan', 342005, 161, 14, '', '', '', '9828243908', '', '2017-05-31', '2017-05-31', 1, ''),
(307, 222, 'head office', '07464-220996', 'GOVT. HOSPITAL', '', 'KARAULI', 'Rajasthan', 322230, 162, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(308, 222, 'head office', '', 'GOVT. HOSPITAL', '', 'KEKARI', 'Rajasthan', 305404, 163, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(309, 222, 'head office', '', 'GOVT. HOSPITAL', '', 'KISHANGARH', 'Rajasthan', 305801, 164, 14, '', 'Dr. Anil', 'Incharge', '9214556402', '', '2017-05-31', '2017-05-31', 1, ''),
(310, 293, 'head office', '', 'ANSHU DIAGNOSTICS CENTER KOTA', '', 'KOTA', 'Rajasthan', 324005, 165, 14, '', 'Dr. Anshu', 'Incharge', '9414186141', '', '2017-05-31', '2017-05-31', 1, ''),
(311, 294, 'head office', '', 'GOVERNMENT MEDICAL COLLEGE, KOTA', '', 'KOTA', 'Rajasthan', 324005, 165, 14, '', '', '', '9829038938', '', '2017-05-31', '2017-05-31', 1, ''),
(312, 295, 'head office', '', 'M.B.S. HOSPITAL ', '', 'KOTA', 'Rajasthan', 324005, 165, 14, '', 'Shiv Gautam', 'Incharge', '9829038938', '', '2017-05-31', '2017-05-31', 1, ''),
(313, 296, 'head office', '', 'KOTA HEART & GENERAL HOSPITAL', '', 'KOTA', 'Rajasthan', 324005, 165, 14, '', 'Dr. yogesh', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(314, 297, 'head office', '', 'SUDHA HOSPITAL & MEDICAL RESEARCH CENTRE PVT. LTD.', '', 'KOTA', 'Rajasthan', 324005, 165, 14, '', 'Dr. yogesh', 'Incharge', '9929418654', '', '2017-05-31', '2017-05-31', 1, ''),
(315, 222, 'head office', '1421226386', 'GOVT. HOSPITAL', '', 'KOTPUTLI', 'Rajasthan', 303108, 166, 14, '', 'Chetram', 'Technician', '', '', '2017-05-31', '2017-05-31', 1, ''),
(316, 222, 'head office', '01582-245680', 'GOVT. HOSPITAL', '', 'NAGAUR', 'Rajasthan', 341023, 167, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(317, 222, 'head office', '', 'GOVT. HOSPITAL', '', 'NASIRABAD', 'Rajasthan', 305601, 168, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(318, 222, 'head office', '', 'GOVT. HOSPITAL', '', 'NATHDWARA', 'Rajasthan', 313301, 169, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(319, 222, 'head office', '0295-2221268', 'GOVT. HOSPITAL', '', 'RAJSAMAND', 'Rajasthan', 313324, 170, 14, '', 'Manohar', 'Technician', '9414249964', '', '2017-05-31', '2017-05-31', 1, ''),
(320, 303, 'head office', '', 'WELIOR HEATH CARE ', '', 'SHAHPURA', 'Rajasthan', 303103, 171, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(321, 222, 'head office', '01572-248339', 'GOVT. HOSPITAL', '', 'SIKAR', 'Rajasthan', 332001, 172, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(322, 305, 'head office', '', 'RELIABLE DIAGNOSTIS CENTER', '', 'SIKAR', 'Rajasthan', 332001, 172, 14, '', 'Dr. Vibha', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(323, 222, 'head office', '', 'GOVT. HOSPITAL', '', 'SIROHI', 'Rajasthan', 307001, 173, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(324, 222, 'head office', '', 'GOVT. HOSPITAL', '', 'SUJANGARH', 'Rajasthan', 311507, 174, 14, '', '', '', '9887120414', '', '2017-05-31', '2017-05-31', 1, ''),
(325, 222, 'head office', '01432-246194', 'GOVT. HOSPITAL', '', 'TONK', 'Rajasthan', 304001, 175, 14, '', 'Pooran', 'Technician', '9214015200', '', '2017-05-31', '2017-05-31', 1, ''),
(326, 309, 'head office', '2945100917', 'AMOLAK DIAGNOSTICS PVT. LTD. / Dr. LAL Lab', '', 'UDAIPUR', 'Rajasthan', 313001, 176, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(327, 310, 'head office', '', 'ARAWALI HOSPITAL , UDAIPUR', '', 'UDAIPUR', 'Rajasthan', 313001, 176, 14, '', '', '', '', '', '2017-05-31', '2017-05-31', 1, ''),
(328, 311, 'head office', '2945102252', 'ARTH DIAGNOSTICS CENTER', '', 'UDAIPUR', 'Rajasthan', 313001, 176, 14, '', 'Mahendra', 'Technician', '', '', '2017-05-31', '2017-05-31', 1, ''),
(329, 312, 'head office', '', 'CENTRAL PATHOLOGY LAB, R.N.T. MEDICAL COLLEGE', '', 'UDAIPUR', 'Rajasthan', 313001, 176, 14, '', 'Vijay Rajat', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(330, 313, 'head office', '', 'GEETANJALI HOSPITAL & MEDICAL COLLEGE', '', 'UDAIPUR', 'Rajasthan', 313001, 176, 14, '', 'Ramesh Rajat', 'Technician', '9352030843', '', '2017-05-31', '2017-05-31', 1, ''),
(331, 314, 'head office', '', 'GOVT. HOSPITAL , HIRAN MAGRI', '', 'UDAIPUR', 'Rajasthan', 313001, 176, 14, '', '', '', '9460727698', '', '2017-05-31', '2017-05-31', 1, ''),
(332, 315, 'head office', '2942429210', 'G.B.H. AMERICAN HOSPITAL', '', 'UDAIPUR', 'Rajasthan', 313001, 176, 14, '', 'Dr. Manish Seth', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(333, 316, 'head office', '', 'GOYAL CLINIC & DIAGNOSTICS CENTER', '', 'UDAIPUR', 'Rajasthan', 313001, 176, 14, '', 'Vinod', 'Technician', '9649936655', '', '2017-05-31', '2017-05-31', 1, ''),
(334, 317, 'head office', '9828412258', 'HIRAN X-RAY Clinic', '', 'UDAIPUR', 'Rajasthan', 313001, 176, 14, '', 'Dr. Hiran', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(335, 318, 'head office', '2942523191', 'KALPANA NURSING HOME PVT. LTD.', '', 'UDAIPUR', 'Rajasthan', 313001, 176, 14, '', 'Dr. Sunil Chug', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(336, 319, 'head office', '2942523191', 'KALPANA PATH LAB / Govt. Hospital', '', 'UDAIPUR', 'Rajasthan', 313001, 176, 14, '', 'Dr. Sunil Chug', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(337, 320, 'head office', '2942429210', 'MEDICENTER SONOGRAPHY & CLINICAL LAB', '', 'UDAIPUR', 'Rajasthan', 313001, 176, 14, '', 'Dr. Amnish Seth', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(338, 321, 'head office', '', 'PACIFIC MEDICAL COLLEGE & HOSPITAL', '', 'UDAIPUR', 'Rajasthan', 313001, 176, 14, '', 'Anil', 'Biomedical', '9413776010', '', '2017-05-31', '2017-05-31', 1, ''),
(339, 322, 'head office', '', 'PACIFIC INSTITUTE OF MEDICAL SCIENCE,UMARADA ,UDAIPUR', '', 'UDAIPUR', 'Rajasthan', 313001, 176, 14, '', 'Anil', 'Biomedical', '9413776010', '', '2017-05-31', '2017-05-31', 1, ''),
(340, 323, 'head office', '', 'R.N.T.. MEDICAL COLLEGE BLOOD BANK', '', 'UDAIPUR', 'Rajasthan', 313001, 176, 14, '', 'Vijay Rajat', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(341, 324, 'head office', '', 'SRL FORTIS HOSPITAL', '', 'UDAIPUR', 'Rajasthan', 313001, 176, 14, '', 'Amit', 'Incharge', '', '', '2017-05-31', '2017-05-31', 1, ''),
(342, 325, 'Head Office', '', '154/9, bannerghata road, opp. IIM - B', '', 'Bangalore', 'Karnataka', 560076, 80, 5, 'outstation', 'Dr Manjula', '', '9880224502', '', '', '', 0, ''),
(343, 326, 'Head Office', '', '', '', '', '', 600010, 0, 8, 'outstation', 'Hitech', '', '9176869133', '', '', '', 0, ''),
(344, 327, 'Head Office', '', 'no. 2 test nagar', '', 'Chennai', 'Tamil Nadu', 600010, 100, 8, 'outstation', 'Test Contact', '', '9962135225', 'vijaykumarv@yoursefficiently.com', '', '', 0, ''),
(345, 328, 'Head Office', '', 'No.96,Industrial Suburb, II Stage,  Industrial Area, Yeshwantpur ', '', '', '', 560022, 0, 5, 'outstation', 'Jubilant biosys', '', '8066628736', '', '', '', 0, ''),
(346, 329, 'Head Office', '', 'Chandra nagar colony,varanas', '', 'VARANASI', 'Uttar Pradesh', 221010, 213, 2, 'outstation', 'Aish Asghar', '', '09811138416', '', '', '', 0, ''),
(347, 330, 'Head Office', '', 'new avadi rd chennai', '', '', '', 600010, 0, 8, 'outstation', 'SRL Lab New avadi', '', '9840645605', '', '', '', 0, ''),
(348, 331, 'Head Office', '', 'Gorakhpur, Uttar Pradesh ', '', 'GORAKHPUR', 'Uttar Pradesh', 273013, 38, 2, 'outstation', 'AAAA', '', '0551 250 1736', '', '', '', 0, ''),
(349, 332, 'Head Office', '', 'B-55 & C-42, Mandir Marg, Mahanagar Extention, Lucknow, Uttar Pradesh', '', 'LUCKNOW', 'Uttar Pradesh', 226006, 214, 0, '', 'bbbbbbbb', '', 'MIDLAND HEALTH CARE AND RESEARCH CENTRE', '', '', '', 0, ''),
(350, 333, 'Head Office', '', 'Nehru Road, Bhilwara', '', 'BHILWARA', 'Rajasthan', 311001, 148, 14, 'outstation', 'cccccccc', '', '01482 - 238642', '', '', '', 0, ''),
(351, 334, 'Head Office', '', '', '', '', '', 0, 0, 8, 'outstation', '', '', '', '', '', '', 0, ''),
(352, 335, 'Head Office', '', 'C/O DR.HEDGEWAR RUGNALAYA, ASHOK NAGAR, GARKHEDA-431005', '', 'AURANGABAD', 'Maharashtra', 431005, 215, 1, 'outstation', 'Mr.Ramgopal Malani', 'Lab Incharge', '9822435509', 'mahendra.chauhan1@yahoo.in', '', '', 0, ''),
(353, 336, 'Head Office', '', 'VEER SAVERKAR NAGAR, NEAR NIMBALKAR HOSPITAL, DAUND', '', 'PUNE', 'Maharashtra', 413801, 217, 15, 'outstation', 'Dr Pratibha Bhangale', 'HOD', '9637223520', 'pratibhabhangale@yahoo.com', '', '', 0, ''),
(354, 337, 'Head Office', '', 'Shivaji Ward, Tili Road, Sagar, Madhya Pradesh ', '', 'SAGAR', 'Madhya Pradesh', 470001, 218, 3, 'outstation', 'Dr Savita Verma', 'HOD', '9165804580', '', '', '', 0, ''),
(355, 338, 'Head Office', '', '', '', 'MEERUT', 'Uttar Pradesh', 250002, 220, 2, 'outstation', 'Dr Rashi', 'HOD', '7442150266', '', '', '', 0, ''),
(356, 339, 'Head Office', '', 'Aga Hall Nesbit Road, Mazagaon Mumbai-400 010', '', '', '', 400010, 0, 1, 'outstation', 'Prince Aly Khan Hospital', '', '2223777800', '', '', '', 0, ''),
(357, 340, 'Head Office', '', 'J.K. Town, Sarvadharam C-Sector, Kolar Road, Bhopal, Madhya Pradesh', 'J.K. Town, Sarvadharam C-Sector, Kolar Road, Bhopal, Madhya Pradesh', 'BHOPAL', 'Madhya Pradesh', 462042, 219, 3, 'outstation', 'SOMIL JAIN ', 'BIOMEDICAL ENGINEER', '9770836446', '', '', '', 0, ''),
(358, 341, 'Head Office', '', 'Dr. Ahujas\' Pathology and Imaging Centre 7-B, Astley Hall, Ugrasain Road,, Ashtley Hall, Irigation Colony, Karanpur, Dehradun, Uttarakhand ', '', '', '', 248001, 0, 2, 'outstation', 'Dr Abuja\'s pathology &imaging center', '', '8574654388', '', '', '', 0, ''),
(359, 342, 'Head Office', '', 'Lanka near bhu Varanasi', '', 'VARANASI', '', 221005, 27, 2, 'outstation', 'Dr S.P,SINGH', 'HOD', '9452566502', '', '', '', 0, ''),
(360, 9, 'SRL LTD C/O FORTIS HEALTHCARE  VADAPALANI BRANCH', '', '2nd floor,kochar pss tower,arcot rd,Chennai-26', '', 'CHENNAI', 'TAMILNADU', 600026, 98, 8, '', 'MURUGAVEL', 'SSE', '9840645605', '', '', '', 0, ''),
(361, 343, 'Head Office', '', 'Gorakhpur, Uttar Pradesh 273013', '', 'GORAKHPUR', 'Uttar Pradesh', 273013, 38, 2, 'outstation', 'Dr Shilpa', '', '9415313049', '', '', '', 0, ''),
(362, 344, 'Head Office', '', 'SAHAHRANPUR U.P', '', 'SAHARANPUR', 'Uttar Pradesh', 247001, 221, 2, 'outstation', 'MR JITENDRA SINGH', '', '9897300715', '', '', '', 0, ''),
(363, 345, 'Head Office', '', 'SULTANPUR,UP', '', 'SULTANPUR', 'Uttar Pradesh', 228001, 222, 2, 'on_site', 'Ramkumar', '', '11111111112', '', '', '', 0, ''),
(364, 346, 'Head Office', '', 'BAREILLY,UP', '', 'BAREILLY', 'Uttar Pradesh', 243001, 223, 0, '', 'UV SINGH', '', '111111111111', '', '', '', 0, ''),
(365, 347, 'Head Office', '', 'ALLAHABAD,UP', '', 'ALLAHABAD', 'Uttar Pradesh', 211002, 224, 0, '', 'DR NEETA SAHU', '', '11111111111111', '', '', '', 0, ''),
(366, 348, 'Head Office', '', 'ALLAHABAD UP', '', 'ALLAHABAD', 'Uttar Pradesh', 211003, 225, 2, 'on_site', 'DR NEERAJ MITAL', '', '111111111111111', '', '', '', 0, ''),
(367, 349, 'Head Office', '', 'JAUNPUR ,UP', '', 'JAUNPUR', 'Uttar Pradesh', 222001, 226, 2, 'on_site', 'Dr S DAS', '', '00000000000', '', '', '', 0, ''),
(368, 350, 'Head Office', '', 'ALIGARH,UP', '', 'ALIGARH', 'Uttar Pradesh', 202001, 227, 2, 'on_site', 'DR SAMRITI PRASAD', '', '9358203015', '', '', '', 0, ''),
(369, 351, 'Head Office', '', 'GORAKHPUR,UP', '', 'GORAKHPUR', 'Uttar Pradesh', 273001, 228, 2, 'on_site', 'DR K M SINGH', '', '000000000000', '', '', '', 0, ''),
(370, 352, 'Head Office', '', 'Kailly basti,up', '', 'KAILLY BASTI', 'Tamil Nadu', 272001, 229, 2, 'on_site', 'DR VK PRASAD', '', '00000000000000', '', '', '', 0, ''),
(371, 353, 'Head Office', '', 'GHAZIABAD UP', '', 'GHAZIABAD', 'Uttar Pradesh', 201009, 230, 2, 'on_site', 'DR AK DUA', '', '000000000000000', '', '', '', 0, ''),
(372, 354, 'Head Office', '', 'HAPUR,UP', '', 'HAPUR', 'Uttar Pradesh', 245101, 231, 2, 'on_site', 'DR MANISH CHANDRA', '', '', '', '', '', 0, ''),
(373, 355, 'Head Office', '', 'KANPUR DEHAT', '', 'Kanpur', 'Uttar Pradesh', 209101, 232, 2, 'on_site', 'MR MANOJ KUMAR', '', '1478523691', '', '', '', 0, ''),
(374, 356, 'Head Office', '', 'kanpur nagar u.p', '', 'Kanpur', 'Uttar Pradesh', 208001, 233, 2, 'on_site', 'DR SC VERMA', 'HOD', '9415068049', '', '', '', 0, ''),
(375, 357, 'Head Office', '', 'AGRA,UP', '', 'AGRA', 'Uttar Pradesh', 282001, 234, 2, 'on_site', 'DR NM SHARMA', '', '00012333345556', '', '', '', 0, ''),
(376, 358, 'Head Office', '', 'sant ravidas nagar u.p', '', 'bhadohi', 'Uttar Pradesh', 221304, 235, 2, 'on_site', 'PRAMOD KUMAR TIWARI', '', '9415845407', '', '', '', 0, ''),
(377, 359, 'Head Office', '', 'MAU,UP', '', 'MAU', 'Uttar Pradesh', 275101, 236, 2, 'on_site', 'XXX', '', '123589764213', '', '', '', 0, ''),
(378, 360, 'Head Office', '', 'LUCKNOW,UP', '', 'LUCKNOW', 'Uttar Pradesh', 226001, 237, 2, 'on_site', 'MR RAJ', '', '', '', '', '', 0, ''),
(379, 361, 'Head Office', '', '', '', 'GONDA', 'Uttar Pradesh', 271001, 238, 2, 'on_site', 'DR VISHAL', 'HOD', '9839900229', '', '', '', 0, ''),
(380, 362, 'Head Office', '', 'FIROZABAD,UP', '', 'FIROZABAD', 'Uttar Pradesh', 283203, 239, 2, 'on_site', 'MR NAVEEN JAIN', '', '333333333333333', '', '', '', 0, ''),
(381, 363, 'Head Office', '', 'MATHURA,UP', '', 'MATHURA', 'Uttar Pradesh', 281001, 240, 2, 'on_site', 'DR RITU RANJAN', '', '4444444444', '', '', '', 0, ''),
(382, 364, 'Head Office', '', 'FARRUKHABAD,UP', '', 'FARRUKHABAD', 'Uttar Pradesh', 209605, 241, 2, 'on_site', 'DR RAJESH KUMAR TIWARI', '', '44444444444', '', '', '', 0, ''),
(383, 365, 'Head Office', '', 'KAUSHAMBI,UP', '', 'KAUSHAMBI', 'Uttar Pradesh', 212207, 242, 2, 'on_site', 'MR CHANDRA KUMAR', '', '9839462910', '', '', '', 0, ''),
(384, 366, 'Head Office', '', 'FATEHPUR,UP', '', 'FATEHPUR', 'Uttar Pradesh', 212601, 243, 2, 'on_site', 'MR KC UMRAO', '', '444444444444', '', '', '', 0, ''),
(385, 366, '', '', '', '', '', '', 0, 216, 1, '', '', '', '', '', '', '', 0, ''),
(386, 367, 'Head Office', '', 'PRATAPGARH,UP', '', 'PRATAPGARH', 'Uttar Pradesh', 230001, 244, 2, 'on_site', 'MR K D PANDEY', '', '44444444411', '', '', '', 0, ''),
(387, 368, 'Head Office', '', 'BANDA,UP', '', 'BANDA', 'Uttar Pradesh', 210001, 245, 2, 'on_site', 'DR SK BAJPAYEE', '', '777777777777777', '', '', '', 0, ''),
(388, 369, 'Head Office', '', 'BALLIA,UP', '', 'BALLIA', 'Uttar Pradesh', 277001, 246, 2, 'on_site', 'DR R N SIDHARTH', '', '9832200297', '', '', '', 0, ''),
(389, 370, 'Head Office', '', '', '', 'AZAMGARH', 'Uttar Pradesh', 276001, 247, 2, 'on_site', 'DR AZAHAR SIDDHIQUI', '', '8888888888888', '', '', '', 0, ''),
(390, 371, 'Head Office', '', 'SONBHADRA,UP', '', '', 'Uttar Pradesh', 231216, 248, 2, 'on_site', 'MR RAKESH TIWARI', '', '321465478941', '', '', '', 0, ''),
(391, 372, 'Head Office', '', 'VARANASI,UP', '', 'VARANASI', 'Uttar Pradesh', 221002, 249, 2, 'on_site', 'MR JITENDRA', '', '9451638802', '', '', '', 0, ''),
(392, 373, 'Head Office', '', 'DEORIA,UP', '', 'DEORIA', 'Uttar Pradesh', 274001, 250, 2, 'on_site', 'MR GHANSYAM MISHRA', '', '9450482902', '', '', '', 0, ''),
(393, 374, 'Head Office', '', 'MEERUT,UP', '', 'MEERUT', 'Uttar Pradesh', 250004, 251, 2, 'on_site', '', '', '89099930001', '', '', '', 0, ''),
(394, 375, 'Head Office', '', 'ALIGARH,UP', '', 'ALIGARH', 'Uttar Pradesh', 202001, 227, 2, 'on_site', 'MR SHYAM', '', '3333333333333', '', '', '', 0, ''),
(395, 376, 'Head Office', '', 'BULANDSHAHAR,UP', '', 'BULANDSHAHAR', 'Uttar Pradesh', 203001, 252, 2, 'on_site', 'MR UTTAM SHARMA', '', '88888888888888', '', '', '', 0, ''),
(396, 377, 'Head Office', '', 'KANPUR,AP', '', 'Kanpur', '', 208002, 253, 2, 'on_site', 'DR LUBA KHAN', '', '8400033110', '', '', '', 0, ''),
(397, 378, 'Head Office', '', 'ETAWA,UP', '', 'Etawa', 'Uttar Pradesh', 206001, 254, 2, 'on_site', 'DR SS BHADAURIYA', '', '8279573396', '', '', '', 0, ''),
(398, 379, 'Head Office', '', 'BAHRAICH,UP', '', 'BAHRAICH', 'Uttar Pradesh', 271801, 255, 2, 'on_site', 'MR R PTRIPATHI', '', '', '', '', '', 0, ''),
(399, 380, 'Head Office', '', 'SAIFAI ,ETAWAH', '', 'Etawa', 'Uttar Pradesh', 206130, 256, 2, 'on_site', 'DR SHWETA', '', '44444444455', '', '', '', 0, ''),
(400, 381, 'Head Office', '', 'VARANASI,UP', '', 'VARANASI', 'Uttar Pradesh', 221001, 257, 2, 'on_site', 'SANJAY SINGH', '', '555555555555', '', '', '', 0, ''),
(401, 382, 'Head Office', '', 'MEERUT,UP', '', 'MEERUT', 'Uttar Pradesh', 250002, 220, 2, 'on_site', 'DR KAUSHALENDRA SINGH', '', '9999774370', '', '', '', 0, ''),
(402, 383, 'Head Office', '', '', '', 'LAKHIMPUR KHIRI', 'Uttar Pradesh', 262701, 258, 2, 'on_site', 'MR INDRJEET SINGH', '', '', '', '', '', 0, ''),
(403, 384, 'Head Office', '', 'AMROHA,UP', '', 'AMROHA', 'Uttar Pradesh', 244221, 259, 2, 'on_site', 'MR VIVEK SHARMA', '', '', '', '', '', 0, ''),
(404, 385, 'Head Office', '', 'RAMPUR UP', '', 'RAMPUR', 'Uttar Pradesh', 244901, 260, 2, 'on_site', 'MR IKARAM ALI', '', '963484870', '', '', '', 0, ''),
(405, 386, 'Head Office', '', 'LUCKNOW,UP', '', 'LUCKNOW', 'Uttar Pradesh', 226003, 51, 2, 'on_site', 'MR BRIJESH KUMAR', '', '77777777777', '', '', '', 0, ''),
(406, 387, 'Head Office', '', 'JHANSI,UP', '', 'Jhanshi', 'Uttar Pradesh', 284002, 261, 2, 'on_site', 'DR R K SAXENA', '', '999999999999', '', '', '', 0, ''),
(407, 388, 'Head Office', '', 'KUSHINAGAR,UP', '', 'KUSHINAGAR', 'Uttar Pradesh', 276507, 262, 2, 'on_site', 'MR ANAND KUMAR RAI', '', '9450886921', '', '', '', 0, ''),
(408, 389, 'Head Office', '', 'Tukaram Javaji Marg, Grant Road West, Tardeo, Mumbai, Maharashtra 400007', '', 'MUMBAI', 'Maharashtra', 400007, 216, 1, 'outstation', 'DR', '', '111111233332222', '', '', '', 0, ''),
(409, 384, 'DISTRICT COMBINE HOSPITAL SAMBHAL', '', 'SHAMBAL,UP', '', 'SHAMBAL', 'UTTAR PRADESH', 244302, 0, 2, '', ' Mr. K.K. Maurya', '', '9794189851', '', '', '', 0, ''),
(410, 390, 'Head Office', '', '8/3 river bank colony Lucknow 226018', '', 'LUCKNOW', 'Uttar Pradesh', 226018, 264, 2, 'on_site', 'DR M KAR', '', '9452925064', '', '', '', 0, ''),
(411, 391, 'Head Office', '', 'HAMIRPUR,UP', '', 'HAMIRPUR', 'Uttar Pradesh', 210301, 266, 2, 'on_site', 'SANTOSH', '', '2222222222', '', '', '', 0, ''),
(412, 392, 'Head Office', '', 'MORADABAD,UP', '', 'MORADABAD', 'Uttar Pradesh', 244001, 267, 2, 'on_site', 'Dr C b Singh', '', '333333333333', '', '', '', 0, ''),
(413, 71, 'SGPGI BLOOD BANK TRANSFUTION MEDICINE', '', 'Graund Floor, blood bank SGPGI Lucknow', '', 'LUCKNOW', 'UTTAR PRADESH', 226014, 0, 2, '', 'T. S. Sukla', 'HOD', '9334730220', '', '', '', 0, ''),
(414, 393, 'Head Office', '', 'RAIBARLI,UP', '', 'RAIBARLI', 'Uttar Pradesh', 229001, 268, 2, 'on_site', 'M RAJ KUMAR', '', '9335623018', '', '', '', 0, ''),
(415, 394, 'Head Office', '', 'BIJNOR,UP', '', 'BIJNOR', 'Uttar Pradesh', 250001, 269, 2, 'on_site', 'DR SANJAY KUMAR SHANKAR', '', '', '', '', '', 0, ''),
(416, 395, 'Head Office', '', 'LALITPUR,UP', '', 'LALITPUR', 'Uttar Pradesh', 284403, 270, 2, 'on_site', 'Dr M k Chaudhary', '', '44444444444444', '', '', '', 0, ''),
(417, 396, 'Head Office', '', 'SAMLI,UP', '', 'SAMLI', 'Uttar Pradesh', 247776, 271, 2, 'on_site', 'Dr Anupam sakxena', '', '6555555555556', '', '', '', 0, ''),
(418, 397, 'Head Office', '', 'No.7, Millers Tank Bed Area, Opposite Guru Nanak Bhavan, Jasma Bhavan Road, Vasanth Nagar, Bengaluru, ', '', 'Bangalore', 'Karnataka', 560052, 272, 5, 'outstation', 'Dr anuradha Srikrishna', '', '9538869421', '', '', '', 0, ''),
(419, 398, 'Head Office', '', 'Near Love garden chauraya,RC Vyas clony,Bhilwara', '', 'BHILWARA', 'Rajasthan', 311001, 273, 14, 'outstation', 'Dr Mahesh Garg', '', '01482233006', '', '', '', 0, ''),
(420, 399, 'Head Office', '', 'BANDRA EAST,MUMBAI 51', '', 'MUMBAI', 'Maharashtra', 400051, 274, 1, 'outstation', 'MRS BHAKTI MORE', '', '5555555555555', '', '', '', 0, ''),
(421, 400, 'Head Office', '', 'Sanjeev Bld , ground floor, Ganesh gavade road, next to vijaya bank, mulund W, Mumbai 400080', '', 'MUMBAI', 'Maharashtra', 400080, 276, 1, 'outstation', 'Dr Nilesh', 'HOD', '02225655354', '', '', '', 0, ''),
(422, 401, 'Head Office', '', '195/109 jagat narain road chowk, Lucknow 226003', '', 'LUCKNOW', 'Uttar Pradesh', 226003, 51, 2, 'on_site', 'Dr amit rastogi', '', '9889124814', '', '', '', 0, ''),
(423, 402, 'Head Office', '', 'R.S.No.628, B Ward, Near Shastri Nagar, Kolhapur-416012', '', 'KOLHAPUR', 'Maharashtra', 416012, 277, 1, 'outstation', 'Dr Ashwini Mane', 'hod', '9225068410', 'dr.ashwinimane@rediffmail.com', '', '', 0, ''),
(424, 403, 'Head Office', '', 'SANGLI MIRAJ ROAD,VIJAYA NAGAR', '', 'SANGLI', 'Maharashtra', 416414, 278, 1, 'outstation', 'MR KIRAN', '', '02332601593', '', '', '', 0, ''),
(425, 404, 'Head Office', '', 'NEAR CIVIL HOSPITAL', '', 'SANGLI', 'Maharashtra', 416416, 279, 15, 'outstation', 'DR BHUMI AGARWAL', '', '9585290232', '', '', '', 0, ''),
(426, 405, 'Head Office', '', 'Bommasandra Industrial Area, Phase 4, Jigani link road, Biocon Park,, Bengaluru, Karnataka 560099', '', 'Bangalore', 'Karnataka', 560099, 282, 5, 'outstation', 'LOGESH', '', '9962594660', '', '', '', 0, ''),
(427, 406, 'Head Office', '', '141,kamaraj rd,palladam main rd,tiruppur 641604', '', 'TIRUPPUR', 'Tamil Nadu', 641606, 283, 0, 'outstation', 'JAGATHEESWARAN', '', '9809727724', '', '', '', 0, ''),
(428, 407, 'Head Office', '', 'BOLLARAM RD,MIYAPUR', '', 'HYDERABAD', 'Telangana', 500049, 134, 11, 'outstation', 'YUVARAJU', 'ENGINEERING  MAINTENANCE', '7330834340', '', '', '', 0, ''),
(429, 408, 'Head Office', '', '1719, Panchsheel, 7th Lane, Rajarampuri, Kolhapur-416230', '', 'KOLHAPUR', 'Maharashtra', 416230, 280, 1, 'outstation', 'APPA', '', '8485058315', 'trimurtilaboratories@gmail.com', '', '', 0, ''),
(430, 409, 'Head Office', '', 'A J Hospital  Research Centre, Kuntikana, Mangalore - 575004', '', 'MANGALORE', 'Karnataka', 575004, 284, 5, 'outstation', 'SHANTI', 'HEAD HEMATOLOGY', '8246610800', '', '', '', 0, ''),
(431, 410, 'Head Office', '', 'CPL HAEMATOLOGY DEPT. KATORA TAL ROAD, LASHKAR,GWALIOR 10City State name- gwalior M.P.', '', 'GWALIOR', 'Madhya Pradesh', 474009, 285, 3, 'outstation', 'Dr Bharat Jain', '', '9425116399', '', '', '', 0, ''),
(432, 411, 'Head Office', '', 'FLAT NO 204 METRO PLAZA NEAR AJMERI PULIA ', '', 'JAIPUR', 'Rajasthan', 302001, 158, 14, 'outstation', 'Narendra Kumar Viswas', 'chief technician', '8004695112', '', '', '', 0, ''),
(433, 412, 'Head Office', '', 'Viraj Khand Gomti Nagar', '', 'LUCKNOW', 'Uttar Pradesh', 226010, 46, 2, 'on_site', 'Dr Surbhi Gupta', 'LAB Incharge', '9839261348', '', '', '', 0, ''),
(434, 413, 'Head Office', '', 'II A TALWANDI KOTA', '', 'KOTA', 'Rajasthan', 324005, 165, 14, 'outstation', 'DR YOGESH GUPTA', '', '7442790059', '', '', '', 0, ''),
(435, 414, 'Head Office', '', 'Near Dhebewadi Raod, Pune-Banglore Nh-4, Malkapur', '', 'KARAD', 'Maharashtra', 415110, 286, 15, 'outstation', ' Mrs Swati', 'Lab Incharge', '9623628646', '', '', '', 0, ''),
(436, 415, 'Head Office', '', '111,nanjappa nagar,trichy road,coimbatore-641005', '', 'Coimbatore', 'Tamil Nadu', 641005, 287, 17, 'outstation', ' DR Neminathan', '', '9842811198', '', '', '', 0, ''),
(437, 416, 'Head Office', '', 'chikkasandra,bengaluru', '', 'Bangalore', 'Karnataka', 560090, 288, 5, 'outstation', 'DR C VIJAYA', '', '9535282323', '', '', '', 0, ''),
(438, 417, 'Head Office', '', '276,2ND FLOOR,HIRANA,UDAIPUR', '', 'UDAIPUR', 'Rajasthan', 313001, 289, 14, 'outstation', 'DR ANKIT SHARMA', '', '02942483077', '', '', '', 0, ''),
(439, 417, 'molecular scientific jodhpur', '', '3-B-5 NIJKARMA HIGH COURT COLONY', '', 'jodhpur', 'Rajasthan', 0, 0, 14, '', 'Mr. Kuldeep Singh', '', '09984092480', '', '', '', 0, ''),
(440, 418, 'Head Office', '', 'BARANA ROAD BORKHERA OPPOSITE SANJEEVNI HOSPITAL', '', 'KOTA', 'Rajasthan', 324001, 291, 14, 'outstation', 'SANDEEP', '', '08840668600', '', '', '', 0, ''),
(441, 419, 'Head Office', '', 'BELAPUR CBD', '', 'BELAPUR', 'Maharashtra', 400614, 292, 13, 'outstation', 'DR VISHAL', '', '7738058952', '', '', '', 0, ''),
(442, 420, 'Head Office', '', 'No.12 test road ', 'test nagar', 'Chennai', 'Tamil Nadu', 600017, 106, 8, 'outstation', 'Test customer Contact', '', '9962135224', 'test@gmail.com', '', '', 0, ''),
(443, 421, 'Head Office', '08754510262', 'first main road', 'thillai ganga nagar', '', '', 0, 0, 0, 'outstation', '', '', '', '', '', '', 0, ''),
(444, 422, 'Head Office', '', 'orathur orthur', 'orathur', 'Chennai', 'Tamil Nadu', 614717, 296, 19, 'on_site', 'spvengat', '', '9874566258598', 'spvic@gmail.com', '', '', 0, ''),
(445, 423, 'Head Office', '', 'orathur', 'orathur', '', 'Tamil Nadu', 614717, 296, 19, 'on_site', 'afsdaasa', '', '9843609636', 'spvnew@gmail.com', '', '', 0, ''),
(446, 424, 'Head Office', '', 'otathur', 'orathur', 'Pondichery', 'Tamil Nadu', 614717, 296, 19, 'on_site', 'spvinayage', '', '9874656314855', 'sptest@gmail.com', '', '', 0, ''),
(447, 425, 'Head Office', '', 'safsaf', 'afsafas', '', '', 614717, 0, 19, 'on_site', 'svik', '', '7654321345566', 'svik@gmail.com', '', '', 0, ''),
(448, 426, 'Head Office', '', 'dsafas', 'afasfas', '', '', 614717, 296, 19, 'on_site', 'cvcvfdf', '', '45654345677', 'hear@gmail.com', '', '', 0, ''),
(449, 427, 'Head Office', '', 'chennai', '', 'CHITRAKOOT', 'Lakshadweep', 614717, 296, 19, 'on_site', 'susren', '', '342543252523523', 'givi@gmail.com', '', '', 0, ''),
(450, 428, 'Head Office', '', 'mannai', '', 'MATHURA', 'Tamil Nadu', 614717, 296, 19, 'on_site', 'vivek', '', '874596525885', 'vv@gmail.com', '', '', 0, ''),
(451, 429, 'Head Office', '', 'jaipur', '', 'PATNA', 'Tamil Nadu', 614717, 296, 19, 'on_site', 'chandru', '', '8965412365878', '', '', '', 0, ''),
(452, 430, 'Head Office', '', 'chetpet', 'nowroji road', '', '', 600010, 100, 8, 'outstation', 'sunrise', '', '9750098438', 'vigneshp@yoursefficiently.com', '', '', 0, ''),
(453, 431, 'Head Office', '', '', '', '', '', 600010, 100, 8, 'outstation', 'vijay', '', '9874563654', 'vijay@gmail.com', '', '', 0, ''),
(454, 432, 'Head Office', '', 'chennai', 'chennnai', '', '', 614717, 296, 19, 'on_site', 'lizy', '', '98456321458', 'lisy@gmail.com', '', '', 0, ''),
(455, 433, 'Head Office', '', 'kilpauk', 'kilpauk', '', '', 600010, 100, 8, 'outstation', 'jaya', '', '9874563698', 'jaya@gmail.com', '', '', 0, ''),
(456, 434, 'Head Office', '', '', '', '', '', 614717, 296, 19, 'on_site', 'arul', '', '96325874125', '', '', '', 0, ''),
(457, 435, 'Head Office', '', '', '', '', '', 614717, 296, 19, 'on_site', 'gfd', '', '89652314755', '', '', '', 0, ''),
(458, 436, 'Head Office', '', '', '', '', '', 614717, 296, 19, 'on_site', 'national', '', '9486043054', '', '', '', 0, ''),
(459, 437, 'Head Office', '', 'chennai', 'chennai', '', '', 600010, 100, 8, 'outstation', 'vens', '', '9856321474', 'jeva@gmail.com', '', '', 0, ''),
(460, 438, 'Head Office', '', 'chennai', 'chennai', '', '', 614717, 296, 19, 'on_site', 'vishnu', '', '7845963214', 'vishnu@gmail.com', '', '', 0, ''),
(461, 439, 'Head Office', '', 'chennai', 'chennai', '', '', 600010, 100, 8, 'outstation', 'sivaraj', '', '9874589654', 'siva@gmail.com', '', '', 0, ''),
(462, 440, 'Head Office', '', 'chennai', '', '', '', 614717, 296, 19, 'on_site', 'negal', '', '957845213698', 'negal@gmail.com', '', '', 0, ''),
(463, 441, 'Head Office', '', '', '', '', '', 614717, 296, 19, 'on_site', 'kavis', '', '258698745857', '', '', '', 0, 'Deleted'),
(464, 442, 'Head Office', '', 'chennai', 'chennai', '', '', 614717, 296, 19, 'on_site', 'testings', '', '98745862145', 'testings@gmail.com', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_type`
--

CREATE TABLE `customer_type` (
  `id` int(2) UNSIGNED ZEROFILL NOT NULL,
  `type` varchar(100) NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_type`
--

INSERT INTO `customer_type` (`id`, `type`, `Status`) VALUES
(01, 'Multispecialty Hospital', 0),
(02, 'Lab', 0),
(03, 'Medical college&Hospital', 0),
(04, 'district Govt Hospital', 0),
(05, 'Central Govt Hospital', 0),
(06, 'Clinic', 0),
(07, 'Trust Hospital', 0),
(08, 'Hospital  lab', 0),
(09, 'DIAGNOSTICS LAB', 0),
(10, 'Pharma', 0),
(11, 'College', 0),
(12, 'BLOOD BANK', 0),
(13, 'Laboratory', 0),
(14, 'Govt Hospital', 0),
(15, 'Mission Hospital', 0),
(16, 'medical center', 0),
(17, 'medical university', 0),
(18, 'Hospital', 0),
(19, 'research center', 0),
(20, 'cardiac center', 0),
(21, 'cancer care', 0),
(22, 'dental hospital', 0),
(23, 'HEART INSTITUTE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `emp_id` varchar(10) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_designation` varchar(100) NOT NULL,
  `emp_mobile` varchar(50) NOT NULL,
  `emp_email` varchar(100) NOT NULL,
  `emp_edu` varchar(100) NOT NULL,
  `emp_exp` varchar(250) NOT NULL,
  `doj` varchar(100) NOT NULL,
  `emp_addr` varchar(250) NOT NULL,
  `emp_addr1` varchar(250) NOT NULL,
  `emp_city` varchar(100) NOT NULL,
  `emp_state` varchar(100) NOT NULL,
  `emp_pincode` int(100) NOT NULL,
  `service_zone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_id`, `emp_name`, `emp_designation`, `emp_mobile`, `emp_email`, `emp_edu`, `emp_exp`, `doj`, `emp_addr`, `emp_addr1`, `emp_city`, `emp_state`, `emp_pincode`, `service_zone`) VALUES
(00001, 'ENG00001', 'Anil Kumar Dwivedi', 'Service Manager', '9302253658', 'service@syndicatediagnostics.com', 'B', '', '', '', '', 'Bhopal', '20', 0, '3,17'),
(00002, 'ENG00002', 'Dashrath Singh Jadon', '', '9827029218', 'dashrath.jadon@syndicatediagnostics.com', '', '', '', '', '', 'Bhopal', '', 0, '0'),
(00003, 'ENG00003', 'Rahul Tripathi', 'Sr. Manager', '9462941594', 'raahul.tripathi@syndicatediagnostics.com', '', '10 years', '11/1/2014', '', '', 'jaipur', 'Rajasthan', 302020, '0'),
(00004, 'ENG00004', 'Anshul PorWal', '', '9838251300', 'anshu.porwal@syndicatediagnostics.com', '', '', '', '', '', 'Lucknow', '', 0, '0'),
(00005, 'ENG00005', 'Ashutosh Dubey', '', '8574654388', 'ashutosh.dubey@syndicatediagnostics.com', 'BE', '', '', '', '', 'Lucknow', '', 0, '2'),
(00006, 'ENG00006', 'Vishal Kumar ', '', '9451194463', 'vishal@syndicatediagnostics.com', 'BE', '', '', '', '', '', '', 0, '2'),
(00007, 'ENG00007', 'Amit Kumar', '', '9860305866', 'amit@syndicatediagnostics.com', 'be', '', '', '', '', 'Mumbai', '', 0, '1'),
(00008, 'ENG00008', 'Jitendra Gupta', '', '9769306298', 'jitendra.gupta@syndicatediagnostics.com', 'BE', '', '', '', '', '', '', 0, '1'),
(00009, 'ENG00009', 'Arvind Yadav', '', '8669094180', 'arvindkumardv314@gmail.com', 'BE', '', '', '', '', '', '', 0, '15'),
(00010, 'ENG00010', 'Udaykumar Salunkhe', '', '9561717349', 'salunkhe.udaykumar@gmail.com', 'be', '', '', '', '', '', '', 0, '15'),
(00011, 'ENG00011', 'Upendra Singh', '', '9304589851', 'upendra.singh@syndicatediagnostics.com', 'B.E.', '', '', '', '', 'Patna', '5', 0, '1,3,6,8,9'),
(00012, 'ENG00012', 'Bhaskar s.', 'Service&application engineer', '9164923679', 'bhaskar.s@syndicatediagnostics.com', 'BE', '', '', '', '', 'Bangalore', '', 0, '5'),
(00013, 'ENG00013', 'srividhya.P', 'Service&application engineer', '9176869133', 'srividhya@syndicatediagnostics.com', 'BE', '4.5yrs', '1/1/2015', '', '', 'Chennai', '31', 600007, '8'),
(00014, 'ENG00014', 'C.V. Sravan', 'Service engineer', '9440488415', 'cvsravan@syndicatediagnostics.com', 'BE ', '', '', '', '', 'Hyderabad', '', 0, '11'),
(00015, 'ENG00015', 'Chenna Kesva', 'Service engineer', '9581284444', 'ckesava@syndicatediagnostics.com', 'BE', '', '', '', '', 'Hyderabad', '', 0, '5'),
(00016, 'ENG00016', 'J.Suresh', 'Application specialist', '7093301265', 'sureshj@syndicatediagnostics.com', '', '', '', '', '', 'Hyderabad', 'Telangana', 0, '0'),
(00017, 'ENG00017', 'Test Engineer', 'Service Engineer', '9962135225', 'vijaysavkaka@gmail.com', '', '', '', '', '', '', '', 0, '0'),
(00018, 'ENG00018', 'TestEmployee', 'Engineer', '7845124578', 'testuser@gmail.com', 'BE', '4', '2017-01-04', 'Chennai', 'Chennai', 'Chennai', '31', 600013, '2,8'),
(00019, 'ENG00019', 'tesing', 'afsasa', '23654178855', 'testing@gmail.com', 'mca', 'mca', '2017-12-20', 'safsa', 'safs', 'MUMBAI', '31', 614717, '1'),
(00020, 'ENG00020', 'testing ', 'asdfsallsa', '23145687455858', 'vig@gmail.com', 'mca', '', '', '', '', 'MUMBAI', '15', 614717, '3'),
(00021, 'ENG00021', 'ghhd', 'fdhfd', '21456987555', 'fghfdfdh@gmail.com', 'dsafsaf', '', '', 'kochi', 'kochi', 'tambaram', '15', 614717, '5'),
(00022, 'ENG00022', 'dgdsgds', 'fdsgfsdgds', '56231475852585', 'v@gnail.com', 'aslflas', '', '', '', '', 'PUNE', '16', 614717, '4'),
(00023, 'ENG00023', 'cvcvcvcvvdv', '', '23456788967543', 'wqeq@gmail.com', 'mca', '', '', '', '', 'CHITRAKOOT', '17', 614717, '2,6,8'),
(00024, 'ENG00024', 'dsgsdgsdg', '', '3454345454545', 'vu@gmail.com', 'vukasklf', '', '', '', '', 'Chennai', '18', 614717, '2,7'),
(00025, 'ENG00025', 'aaaa', 'aaaasss', '231312312323', 'sdsd@gmail.com', 'MCA', '4yrs', '2017-12-20', 'sda dsadas dasd asd', '3weqweqw e qwe', 'Chennai', '31', 600032, '17'),
(00026, 'ENG00026', 'spudhaya', 'supervisorf', '23658974155', 'spudhaya@gmail.com', 'mca', '5', '2018-02-08', 'mannai', 'mannai', 'KOLHAPUR', '31', 614717, '19'),
(00027, 'ENG00027', 'spram', 'engineerq', '3', 'spram@gmail.com', 'mca', '2', '2018-02-14', 'mannai', 'mannai', 'MUMBAI', '31', 614717, '19'),
(00028, 'ENG00028', 'd', 'd', '332345345353454', 'gbf@ghg.in', 'fgdg', '', '', '', '', '', '', 0, '5');

-- --------------------------------------------------------

--
-- Table structure for table `employee_service_skill`
--

CREATE TABLE `employee_service_skill` (
  `id` int(10) NOT NULL,
  `empid` varchar(50) NOT NULL,
  `p_category` varchar(100) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `p_model` varchar(100) NOT NULL,
  `service_category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_service_skill`
--

INSERT INTO `employee_service_skill` (`id`, `empid`, `p_category`, `sub_category`, `brand`, `p_model`, `service_category`) VALUES
(28, '00008', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', ''),
(29, '00008', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', ''),
(30, '00008', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', ''),
(31, '00008', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', 'BREAKDOWN'),
(32, '00008', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', ''),
(33, '00008', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', ''),
(34, '00008', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(35, '00008', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(36, '00008', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', ''),
(46, '00005', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', 'BREAKDOWN'),
(47, '00005', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', ''),
(48, '00005', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', ''),
(49, '00005', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', 'BREAKDOWN'),
(50, '00005', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', ''),
(51, '00005', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', ''),
(52, '00005', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(53, '00005', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(54, '00005', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', ''),
(64, '00010', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', ''),
(65, '00010', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', ''),
(66, '00010', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', ''),
(67, '00010', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', ''),
(68, '00010', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', 'PM&CAL'),
(69, '00010', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', ''),
(70, '00010', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(71, '00010', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(72, '00010', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', ''),
(82, '00007', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', 'PM&CAL'),
(83, '00007', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', ''),
(84, '00007', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', ''),
(85, '00007', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', 'BREAKDOWN'),
(86, '00007', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', ''),
(87, '00007', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', ''),
(88, '00007', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(89, '00007', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(90, '00007', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', ''),
(100, '00006', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', ''),
(101, '00006', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', ''),
(102, '00006', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', 'BREAKDOWN'),
(103, '00006', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', 'BREAKDOWN'),
(104, '00006', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', ''),
(105, '00006', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', ''),
(106, '00006', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(107, '00006', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(108, '00006', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', ''),
(109, '00009', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', 'PM&CAL'),
(110, '00009', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', ''),
(111, '00009', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', ''),
(112, '00009', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', ''),
(113, '00009', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', ''),
(114, '00009', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', ''),
(115, '00009', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(116, '00009', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(117, '00009', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', ''),
(172, '00014', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', 'BREAKDOWN,troubleshooting'),
(173, '00014', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', 'BREAKDOWN'),
(174, '00014', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', 'BREAKDOWN'),
(175, '00014', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', 'BREAKDOWN'),
(176, '00014', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', 'BREAKDOWN'),
(177, '00014', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', 'BREAKDOWN'),
(178, '00014', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(179, '00014', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(180, '00014', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', ''),
(190, '00012', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', ''),
(191, '00012', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', ''),
(192, '00012', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', 'BREAKDOWN'),
(193, '00012', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', ''),
(194, '00012', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', ''),
(195, '00012', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', ''),
(196, '00012', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(197, '00012', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(198, '00012', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', ''),
(199, '00013', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', ''),
(200, '00013', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', ''),
(201, '00013', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', ''),
(202, '00013', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', 'BREAKDOWN,troubleshooting'),
(203, '00013', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', ''),
(204, '00013', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', 'troubleshooting'),
(205, '00013', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(206, '00013', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(207, '00013', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', ''),
(217, '00015', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', ''),
(218, '00015', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', 'BREAKDOWN,Weekly maintenance,Monthly maintenance,PM&CAL,Calibration,troubleshooting'),
(219, '00015', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', 'BREAKDOWN'),
(220, '00015', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', 'BREAKDOWN,troubleshooting'),
(221, '00015', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', ''),
(222, '00015', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', ''),
(223, '00015', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(224, '00015', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(225, '00015', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', ''),
(226, '00019', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', 'BREAKDOWN,troubleshooting,General Visit'),
(227, '00019', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', 'Weekly maintenance'),
(228, '00019', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', 'BREAKDOWN,Monthly maintenance'),
(229, '00019', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', 'PM&CAL,Calibration,troubleshooting'),
(230, '00019', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', 'Monthly maintenance,Software Upgradation'),
(231, '00019', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', 'BREAKDOWN'),
(232, '00019', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', 'Software Upgradation'),
(233, '00019', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', 'Weekly maintenance'),
(234, '00019', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', 'Software Upgradation'),
(235, '00020', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', 'BREAKDOWN'),
(236, '00020', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', 'BREAKDOWN'),
(237, '00020', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', 'Weekly maintenance'),
(238, '00020', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', 'Weekly maintenance'),
(239, '00020', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', ''),
(240, '00020', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', 'Monthly maintenance'),
(241, '00020', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', 'PM&CAL'),
(242, '00020', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(243, '00020', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', 'Monthly maintenance'),
(244, '00021', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', 'BREAKDOWN'),
(245, '00021', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', 'Weekly maintenance'),
(246, '00021', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', ''),
(247, '00021', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', ''),
(248, '00021', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', 'Weekly maintenance'),
(249, '00021', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', 'Weekly maintenance'),
(250, '00021', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(251, '00021', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(252, '00021', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', ''),
(253, '00022', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', 'BREAKDOWN'),
(254, '00022', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', ''),
(255, '00022', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', 'Monthly maintenance'),
(256, '00022', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', 'Monthly maintenance'),
(257, '00022', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', 'Monthly maintenance'),
(258, '00022', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', ''),
(259, '00022', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(260, '00022', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(261, '00022', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', ''),
(280, '00024', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', 'BREAKDOWN'),
(281, '00024', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', 'BREAKDOWN'),
(282, '00024', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', ''),
(283, '00024', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', ''),
(284, '00024', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', ''),
(285, '00024', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', ''),
(286, '00024', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(287, '00024', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(288, '00024', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', ''),
(289, '00011', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', ''),
(290, '00011', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', ''),
(291, '00011', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', 'BREAKDOWN'),
(292, '00011', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', ''),
(293, '00011', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', ''),
(294, '00011', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', ''),
(295, '00011', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(296, '00011', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(297, '00011', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', ''),
(307, '00023', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', 'Weekly maintenance'),
(308, '00023', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', ''),
(309, '00023', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', 'Monthly maintenance'),
(310, '00023', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', ''),
(311, '00023', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', ''),
(312, '00023', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', ''),
(313, '00023', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(314, '00023', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(315, '00023', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', ''),
(316, '00018', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', 'BREAKDOWN'),
(317, '00018', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', 'BREAKDOWN'),
(318, '00018', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', ''),
(319, '00018', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', ''),
(320, '00018', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', ''),
(321, '00018', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', 'BREAKDOWN'),
(322, '00018', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(323, '00018', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(324, '00018', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', ''),
(325, '00001', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', 'BREAKDOWN,Weekly maintenance,Monthly maintenance,PM&CAL,Calibration,troubleshooting'),
(326, '00001', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', 'BREAKDOWN,Weekly maintenance,Monthly maintenance,PM&CAL,Calibration,troubleshooting'),
(327, '00001', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', 'BREAKDOWN,Weekly maintenance,Monthly maintenance,PM&CAL,Calibration,troubleshooting'),
(328, '00001', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', 'BREAKDOWN,Weekly maintenance,Monthly maintenance,PM&CAL,Calibration,troubleshooting'),
(329, '00001', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', 'BREAKDOWN,Weekly maintenance,Monthly maintenance,PM&CAL,Calibration,troubleshooting'),
(330, '00001', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', 'BREAKDOWN,Weekly maintenance,Monthly maintenance,PM&CAL,Calibration,troubleshooting'),
(331, '00001', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', 'BREAKDOWN,Weekly maintenance,Monthly maintenance,PM&CAL,Calibration,troubleshooting'),
(332, '00001', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', 'BREAKDOWN,Weekly maintenance,Monthly maintenance,PM&CAL,Calibration,troubleshooting'),
(333, '00001', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', 'BREAKDOWN,Weekly maintenance,Monthly maintenance,PM&CAL,Calibration,troubleshooting'),
(334, '00025', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', ''),
(335, '00025', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', ''),
(336, '00025', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', ''),
(337, '00025', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', ''),
(338, '00025', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', ''),
(339, '00025', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', ''),
(340, '00025', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(341, '00025', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(342, '00025', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', 'BREAKDOWN'),
(343, '00026', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', 'BREAKDOWN'),
(344, '00026', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', 'Weekly maintenance'),
(345, '00026', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', 'Weekly maintenance'),
(346, '00026', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', 'BREAKDOWN'),
(347, '00026', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', ''),
(348, '00026', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', ''),
(349, '00026', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(350, '00026', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(351, '00026', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', ''),
(370, '00027', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', 'BREAKDOWN,Calibration'),
(371, '00027', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', 'Weekly maintenance'),
(372, '00027', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', ''),
(373, '00027', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', ''),
(374, '00027', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', 'Calibration'),
(375, '00027', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', ''),
(376, '00027', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(377, '00027', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(378, '00027', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', ''),
(379, '00028', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start 4', ''),
(380, '00028', 'Semi Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'Start Max', ''),
(381, '00028', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Satellite', ''),
(382, '00028', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact', ''),
(383, '00028', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max', ''),
(384, '00028', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA Compact Max2', ''),
(385, '00028', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R ', ''),
(386, '00028', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R EVOLUTION', ''),
(387, '00028', 'Fully Automated Coagulation Analyzer', 'COAGULATION', 'STAGO', 'STA-R MAX', '');

-- --------------------------------------------------------

--
-- Table structure for table `eng_notess`
--

CREATE TABLE `eng_notess` (
  `id` int(255) NOT NULL,
  `req_id` int(10) NOT NULL,
  `eng_notess` varchar(500) NOT NULL,
  `engg_id` int(10) NOT NULL,
  `created_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eng_notess`
--

INSERT INTO `eng_notess` (`id`, `req_id`, `eng_notess`, `engg_id`, `created_on`) VALUES
(4, 25, 'test notes', 43, '2017-07-12 11:57:01'),
(5, 36, 'first notes', 18, '2017-07-12 16:49:52'),
(6, 37, '	eeeeeee', 18, '2017-07-12 16:59:32'),
(7, 39, 'second notes ma', 18, '2017-07-12 17:22:23'),
(8, 40, 'notest kjklsjdfkljskldjflkjs lkfjldsjf', 18, '2017-07-12 17:37:06'),
(9, 32, 'Liquid filter was cleaned, fluidic circuit connections was checked. Instrument is working.', 12, '2017-07-12 19:07:32'),
(10, 32, '	Liquid filter was cleaned, fluidic circuit connections was checked. Instrument is working.', 12, '2017-07-12 19:08:29'),
(11, 41, 'I visited instrument, customer complaint that its show\"error 49.03.04,\r\nmeasure timeout,waiting for ACK\".check instrument \r\n\'pc rack assembly\'\r\nboard and re-connected cable and board .Again start instrument   ,its working properly.\r\n', 6, '2017-07-13 22:22:58'),
(12, 47, 'Checked instrument ,this problem is due to distrub of test parameter ,so correct the setting .', 6, '2017-07-15 17:18:38'),
(13, 50, '	', 1, '2017-07-17 17:06:33'),
(14, 49, '	', 12, '2017-07-22 12:54:56'),
(15, 59, 'Weekly maintenance', 13, '2017-07-24 18:49:34'),
(16, 59, '	Weekly maintenance', 13, '2017-07-26 13:02:17'),
(17, 63, '	', 13, '2017-07-27 11:43:46'),
(18, 65, 'Visited in instrument, checked vacuum in pump and connection of tubing. Found problem in connection of filter and tube. Solved problem. Its working properly. ', 6, '2017-07-28 10:08:51'),
(19, 65, 'Visited in instrument, checked vacuum in pump and connection of tubing. Found problem in connection of filter and tube. Solved problem. Its working properly. ', 6, '2017-07-28 10:12:07'),
(20, 65, 'Visited in instrument, checked vacuum in pump and connection of tubing. Found problem in connection of filter and tube. Solved problem. Its working properly. ', 6, '2017-07-28 10:12:26'),
(21, 65, '	Visited in instrument, checked vacuum in pump and connection of tubing. Found problem in connection of filter and tube. Solved problem. Its working properly. ', 6, '2017-07-28 10:13:00'),
(22, 59, '		Weekly maintenance', 13, '2017-07-29 15:45:10'),
(23, 59, '			Weekly maintenance', 13, '2017-07-29 15:49:37'),
(24, 2, '	', 7, '2017-07-30 19:31:23'),
(25, 94, 'Printer head is faulty. Replaced with new one.', 1, '2017-08-10 16:31:52'),
(26, 89, 'Instrument in working condition, because x1axis belt is damage some corner, and in future problem is come due to this reason. ', 6, '2017-08-11 10:51:23'),
(27, 65, '		Visited in instrument, checked vacuum in pump and connection of tubing. Found problem in connection of filter and tube. Solved problem. Its working properly. ', 6, '2017-08-11 10:52:11'),
(28, 102, 'Instrument calibration done', 0, '2017-08-18 12:13:36'),
(29, 107, 'Temperature Problem is come due to temp senser not sensInstrument temperature  because heat sink comp are not working solved problem \r\nInstrument working properly', 0, '2017-08-19 11:13:06'),
(30, 107, 'Temperature Problem is come due to temp senser not sensInstrument temperature  because heat sink comp are not working solved problem \r\nInstrument working properly', 0, '2017-08-19 11:32:46'),
(31, 107, 'Temperature Problem is come due to temp senser not sensInstrument temperature  because heat sink comp are not working solved problem \r\nInstrument working properly', 0, '2017-08-19 11:32:47'),
(32, 107, 'Temperature Problem is come due to temp senser not sensInstrument temperature  because heat sink comp are not working solved problem \r\nInstrument working properly', 0, '2017-08-19 11:32:48'),
(33, 107, 'Temperature Problem is come due to temp senser not sensInstrument temperature  because heat sink comp are not working solved problem \r\nInstrument working properly', 0, '2017-08-19 11:32:49'),
(34, 107, 'Temperature Problem is come due to temp senser not sensInstrument temperature  because heat sink comp are not working solved problem \r\nInstrument working properly', 0, '2017-08-19 11:32:50'),
(35, 107, 'Temperature Problem is come due to temp senser not sensInstrument temperature  because heat sink comp are not working solved problem \r\nInstrument working properly', 0, '2017-08-19 11:32:51'),
(36, 106, 'Instrument working satisfactory.', 0, '2017-08-19 15:17:57'),
(37, 81, '	', 0, '2017-08-28 22:59:11'),
(38, 120, 'Checked instrument, problem is  temperature sense cable is not working. Changed cable. It working properly. I\'m ', 0, '2017-08-29 18:59:16'),
(39, 121, 'Dust in Home sensor,clean the same .Instrument is working.', 0, '2017-08-30 15:50:52'),
(40, 126, 'adjust printer ,need to replace printer thermic in future.', 0, '2017-09-01 13:00:22'),
(41, 126, 'adjust printer ,need to replace printer thermic in future.', 0, '2017-09-01 13:10:49'),
(42, 127, 'clean and re do the mapping of product carousol,clean the cuvette loading area.', 0, '2017-09-01 13:12:43'),
(43, 129, 'Replaced with new keyboard, Now instrument is working fine', 0, '2017-09-02 13:37:28'),
(44, 120, '	Checked instrument, problem is  temperature sense cable is not working. Changed cable. It working properly. I\'m ', 6, '2017-09-04 18:30:26'),
(45, 120, '		Checked instrument, problem is  temperature sense cable is not working. Changed cable. It working properly. I\'m ', 6, '2017-09-04 18:32:48'),
(46, 125, '	', 13, '2017-09-08 12:54:45'),
(47, 137, 'Needle is blocked, clean needle. After check program\r\nLoad new regent, its working properly. ', 0, '2017-09-10 01:38:41'),
(48, 140, 'Do the mapping and change the suction tip', 0, '2017-09-18 13:17:17'),
(49, 151, 'Make program for drvv s, drvv c, PC, PS, ATiii, and run drvv program  for the test  ', 0, '2017-09-23 19:19:01'),
(50, 164, 'APTT results and controles are in higher side', 0, '2017-09-26 16:50:40'),
(51, 174, 'This instrument is 5 year warranty ', 0, '2017-09-26 22:26:19'),
(52, 193, 'Sample Needle is bended and temperature is out of range', 0, '2017-10-05 22:13:51'),
(53, 197, 'Instrument working satisfactory.', 0, '2017-10-12 12:45:53'),
(54, 201, 'Replaced kit peltier. now instrument is working fine ', 0, '2017-10-16 16:31:27'),
(55, 219, 'Cuvette stuck in rail', 0, '2017-10-25 15:52:52'),
(56, 220, 'Reagents are not loaded properly by new technician. ', 1, '2017-10-26 14:58:17'),
(57, 199, 'PM and Calibration of start4', 9, '2017-10-28 14:19:04'),
(58, 230, 'Product carousel temp. Out of range ', 1, '2017-10-31 14:41:59'),
(59, 236, 'Shuttle is not moving properly, leakage in pneumatic jack tubing.', 14, '2017-10-31 18:53:19'),
(60, 234, 'Visited to produce the training certificates', 15, '2017-10-31 20:47:28'),
(61, 233, 'Lld issue with cephascrenn ', 15, '2017-10-31 20:48:33'),
(62, 232, 'Visited for lis purpose', 15, '2017-10-31 20:49:17'),
(63, 231, 'Visited to give demo of the instrument', 15, '2017-10-31 20:50:19'),
(64, 224, 'Steel ball struked in the first position of the washing well removed and done mapping for niddel ', 15, '2017-10-31 20:54:13'),
(65, 224, 'Steel ball strucked in the washing well first position', 15, '2017-10-31 20:55:05'),
(66, 237, 'Needle was pipetting sample from the wall of the sample tube some time it touch the wall and give the error . May be needle was hit. ', 8, '2017-11-01 12:24:50'),
(67, 241, 'Needle 3 broken', 15, '2017-11-06 15:11:55'),
(68, 238, 'Bio logical validation', 15, '2017-11-06 15:12:44'),
(69, 246, 'routine maintenance', 13, '2017-11-07 13:51:53'),
(70, 118, 'Instrument working fine.', 11, '2017-11-08 22:49:39'),
(71, 84, 'Instrument working fine', 0, '2017-11-08 22:50:59'),
(72, 248, 'Frequently cuvette missing', 9, '2017-11-09 13:20:50'),
(73, 211, 'In global Verification the arm No 2 is not checking suction pressure, then its giving a suction is not operating correctly. ', 14, '2017-11-10 18:16:55'),
(74, 253, 'Photometric board faulty.', 1, '2017-11-11 12:39:49'),
(75, 257, 'Preventive maintanence and training for new technicians', 15, '2017-11-20 12:07:50'),
(76, 261, 'Shuttle jam', 9, '2017-11-30 23:45:20'),
(77, 260, 'Shuttle missing', 9, '2017-11-30 23:47:56'),
(78, 265, 'software issue. ', 14, '2017-12-11 21:20:27'),
(79, 274, 'Visited in instrument and its show error \"incubation temperature is out of range \".and pipetting is blocked ', 6, '2017-12-15 19:35:11'),
(80, 263, 'May time it\'s products drawer not close properly and give drawer closing issue ', 5, '2017-12-16 11:39:39'),
(81, 290, 'hiiii', 0, '2018-02-08 16:33:09'),
(82, 290, 'sgdfsgsdgdsgsdgsdg', 26, '2018-02-08 16:41:12'),
(83, 289, 'tryreytttr', 0, '2018-02-08 17:03:31'),
(84, 289, 'tytttttttter', 0, '2018-02-08 17:04:44'),
(85, 289, 'rtyrtyyyyyy', 0, '2018-02-08 17:11:28'),
(86, 291, 'rsdgrrdcrtgerd', 0, '2018-02-08 17:15:46'),
(87, 291, 'rtdtrhygftrhycfghgd', 26, '2018-02-08 17:17:20'),
(88, 289, 'ygiytitfityu', 18, '2018-02-08 18:24:27'),
(89, 294, 'asffasfsafsaf', 26, '2018-02-13 18:24:41'),
(90, 295, 'aaaaaaaa', 27, '2018-02-14 11:28:53'),
(91, 297, 'sdafasfasfasf', 27, '2018-02-14 15:19:28'),
(92, 296, 'hgdfhdfhdfhdf', 0, '2018-02-14 16:13:03'),
(93, 298, 'sdgsdgsdgds', 26, '2018-02-14 16:33:04'),
(94, 298, 'sgfsgfsdgsdgds', 26, '2018-02-14 16:34:19');

-- --------------------------------------------------------

--
-- Table structure for table `history_cust_remark`
--

CREATE TABLE `history_cust_remark` (
  `id` int(255) NOT NULL,
  `req_id` int(10) NOT NULL,
  `cust_remark` varchar(500) NOT NULL,
  `engg_id` int(10) NOT NULL,
  `given_by` varchar(10) NOT NULL,
  `created_on` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_cust_remark`
--

INSERT INTO `history_cust_remark` (`id`, `req_id`, `cust_remark`, `engg_id`, `given_by`, `created_on`) VALUES
(9, 25, 'new remarks', 1, '1', '2017-07-12 11:24:42'),
(10, 25, '	new remarks', 1, '1', '2017-07-12 11:54:20'),
(11, 33, '	new test remark', 1, '1', '2017-07-12 12:05:46'),
(12, 36, '	first remark', 18, '1', '2017-07-12 16:45:45'),
(13, 37, '	secodndndndndnd', 18, '1', '2017-07-12 16:54:54'),
(14, 37, 'ewewrwerwer', 18, '1', '2017-07-12 17:00:00'),
(17, 39, 'second remarks', 18, '1', '2017-07-12 17:23:29'),
(18, 40, '	cust jbjdkfhsjdkdgsdg sdfdfsdf', 18, '1', '2017-07-12 17:40:13'),
(19, 40, '		cust jbjdkfhsjdkdgsdg sdfdfsdf', 18, '1', '2017-07-12 17:41:03'),
(20, 1, '		', 9, '1', '2017-07-17 13:40:40'),
(21, 48, '	Clean PDR.', 1, '1', '2017-07-17 14:27:30'),
(22, 47, '	', 6, '1', '2017-07-17 14:28:26'),
(23, 46, '	replaced the LLD cable', 8, '1', '2017-07-17 14:29:06'),
(24, 44, '	', 5, '1', '2017-07-17 14:32:09'),
(25, 51, '	', 13, '1', '2017-07-20 20:58:39'),
(26, 55, '	', 1, '1', '2017-07-22 12:22:23'),
(27, 57, '	', 13, '1', '2017-07-24 14:26:37'),
(28, 56, '	', 13, '1', '2017-07-24 14:26:54'),
(29, 60, '	', 13, '1', '2017-07-25 17:05:00'),
(30, 61, '	', 13, '1', '2017-07-26 13:04:05'),
(31, 33, '		new test remark', 18, '1', '2017-07-26 13:04:28'),
(32, 25, '		new remarks', 18, '1', '2017-07-26 13:05:28'),
(33, 3, '	', 13, '1', '2017-07-26 13:05:52'),
(34, 63, '	Product Drawer Temperature was high.Checked and filled coolant also lubricated coolant pump.Room temperature was high around 26-27.informed customer to maintain below 23deg.', 13, '1', '2017-07-27 11:46:24'),
(35, 36, '		first remark', 18, '1', '2017-07-29 15:46:31'),
(36, 64, '	', 13, '1', '2017-07-31 13:16:09'),
(37, 62, '	Mapping in eppendof cup was not proper.After mapping correctly issue solved.', 5, '1', '2017-07-31 13:41:32'),
(38, 59, '	', 13, '1', '2017-08-01 17:44:59'),
(39, 69, '	asasasa', 18, '1', '2017-08-03 10:24:19'),
(40, 77, '	After lubricating coolant pump problem solved.', 13, '1', '2017-08-03 14:26:39'),
(41, 76, '	', 13, '1', '2017-08-03 14:26:53'),
(42, 75, '	', 13, '1', '2017-08-03 14:27:08'),
(43, 67, '	After installing OS and software problem solved', 14, '1', '2017-08-04 12:33:13'),
(44, 82, '	', 9, '1', '2017-08-05 15:44:44'),
(45, 86, '	', 13, '1', '2017-08-08 12:47:44'),
(46, 87, '	', 8, '1', '2017-08-08 13:31:34'),
(47, 78, '	', 13, '1', '2017-08-09 17:54:43'),
(48, 94, '	', 1, '1', '2017-08-10 16:34:37'),
(49, 50, '	', 1, '1', '2017-08-10 16:35:27'),
(50, 2, '	', 7, '1', '2017-08-10 16:36:36'),
(51, 54, '	', 9, '1', '2017-08-10 16:37:54'),
(52, 95, '	', 18, '1', '2017-08-10 17:47:07'),
(53, 95, '		', 18, '1', '2017-08-10 17:47:16'),
(54, 84, '	', 11, '1', '2017-08-11 15:07:50'),
(55, 106, '	', 10, '1', '2017-08-24 15:38:16'),
(56, 113, '	', 0, '1', '2017-08-28 17:38:46'),
(57, 121, '	Dust in home sensor,clean the same instrument is working now', 1, '1', '2017-08-30 16:05:46'),
(58, 127, '	', 1, '1', '2017-09-08 16:15:43'),
(59, 126, '	', 1, '1', '2017-09-08 16:16:50'),
(60, 143, '	', 13, '1', '2017-09-18 18:46:31'),
(61, 145, '	', 13, '1', '2017-09-18 18:47:33'),
(62, 141, '	', 13, '1', '2017-09-18 18:48:36'),
(63, 119, '	', 13, '1', '2017-09-18 18:49:50'),
(64, 147, '	', 13, '1', '2017-09-19 14:30:50'),
(65, 142, '	', 13, '1', '2017-09-19 14:31:06'),
(66, 135, '	', 13, '1', '2017-09-19 14:31:22'),
(67, 134, '	', 13, '1', '2017-09-19 14:31:45'),
(68, 148, '	', 13, '1', '2017-09-20 16:43:48'),
(69, 150, '	', 13, '1', '2017-09-21 13:11:06'),
(70, 146, '	', 9, '1', '2017-09-21 13:11:47'),
(71, 140, '	', 9, '1', '2017-09-21 13:12:02'),
(72, 128, '	', 13, '1', '2017-09-21 13:12:23'),
(73, 152, '	', 13, '1', '2017-09-22 13:50:19'),
(74, 139, '	', 7, '1', '2017-09-22 13:50:34'),
(75, 153, '	', 13, '1', '2017-09-22 17:53:14'),
(76, 137, '	', 6, '1', '2017-09-22 17:55:07'),
(77, 154, '	', 13, '1', '2017-09-25 13:11:08'),
(78, 154, '		', 13, '1', '2017-09-25 13:13:06'),
(79, 158, '	', 13, '1', '2017-09-26 19:49:23'),
(80, 124, '	', 13, '1', '2017-09-29 13:39:20'),
(81, 188, '	', 13, '1', '2017-10-03 20:26:36'),
(82, 184, '	', 13, '1', '2017-10-03 20:26:50'),
(83, 195, '	', 13, '1', '2017-10-06 12:18:43'),
(84, 194, '	', 13, '1', '2017-10-06 12:22:43'),
(85, 193, '	', 6, '1', '2017-10-06 12:23:12'),
(86, 192, '	', 5, '1', '2017-10-06 12:23:24'),
(87, 198, '	', 13, '1', '2017-10-12 17:54:41'),
(88, 201, '	', 14, '1', '2017-10-16 17:59:59'),
(89, 197, '	', 10, '1', '2017-10-16 18:00:14'),
(90, 197, '	', 10, '1', '2017-10-16 18:02:14'),
(91, 196, '	', 5, '1', '2017-10-16 18:05:29'),
(92, 191, '	', 13, '1', '2017-10-16 18:06:28'),
(93, 190, '	', 6, '1', '2017-10-16 18:06:42'),
(94, 189, '	', 5, '1', '2017-10-16 18:06:56'),
(95, 189, '		', 5, '1', '2017-10-16 18:07:13'),
(96, 183, '	', 0, '1', '2017-10-16 18:07:32'),
(97, 182, '	', 13, '1', '2017-10-16 18:07:43'),
(98, 203, '	', 13, '1', '2017-10-16 18:31:15'),
(99, 177, '	', 6, '1', '2017-10-16 18:31:32'),
(100, 176, '	', 6, '1', '2017-10-16 18:31:47'),
(101, 175, '	', 6, '1', '2017-10-16 18:32:03'),
(102, 174, '	', 5, '1', '2017-10-16 18:32:24'),
(103, 173, '	', 6, '1', '2017-10-16 18:32:38'),
(104, 169, '	', 6, '1', '2017-10-16 18:33:04'),
(105, 168, '	', 6, '1', '2017-10-16 18:33:25'),
(106, 207, '	', 13, '1', '2017-10-17 18:44:48'),
(107, 167, '	', 6, '1', '2017-10-17 18:45:01'),
(108, 166, '	', 13, '1', '2017-10-17 18:45:15'),
(109, 165, '	', 0, '1', '2017-10-17 18:45:31'),
(110, 164, '	', 1, '1', '2017-10-17 18:45:45'),
(111, 160, '	', 5, '1', '2017-10-17 18:46:00'),
(112, 151, '	', 5, '1', '2017-10-17 18:46:47'),
(113, 212, '	', 8, '1', '2017-10-25 15:37:27'),
(114, 210, '	', 13, '1', '2017-10-25 15:37:41'),
(115, 209, '	', 13, '1', '2017-10-25 15:38:38'),
(116, 206, '	', 1, '1', '2017-10-25 15:39:29'),
(117, 136, '	', 1, '1', '2017-10-25 15:39:49'),
(118, 133, '	', 6, '1', '2017-10-25 15:40:08'),
(119, 132, '	', 5, '1', '2017-10-25 15:40:23'),
(120, 131, '	', 6, '1', '2017-10-25 15:40:37'),
(121, 129, '	', 14, '1', '2017-10-25 15:43:33'),
(122, 229, '	', 13, '1', '2017-10-31 15:32:24'),
(123, 95, 'xcxcvx', 18, '1', '2017-12-29 19:04:07'),
(124, 289, '	', 18, '1', '2017-12-30 12:18:55'),
(125, 285, '	', 15, '1', '2017-12-30 14:30:01'),
(126, 290, '	', 26, '1', '2018-02-08 13:32:22'),
(127, 290, 'sadfsafsadfdasfsafasdfasfsdaf', 26, '1', '2018-02-08 16:45:49'),
(128, 289, 'dfgdsfgsdgdsgsdgsd', 18, '1', '2018-02-08 17:01:22'),
(129, 291, '	trhyrdtxfthytjhnygtuj', 26, '1', '2018-02-08 17:14:29'),
(130, 289, 'gdhfgggggg', 18, '1', '2018-02-08 17:23:08'),
(131, 289, 'gsdgsdgsdgsdgsdgdsgds', 18, '1', '2018-02-08 18:31:19'),
(132, 292, '	a new customer remarks', 26, '1', '2018-02-13 16:41:33'),
(133, 296, '	', 26, '1', '2018-02-14 14:13:05'),
(134, 297, 'dsgsdgdsfgdsgsdgfdsgsdgsdgsdgfsd', 27, '1', '2018-02-14 15:28:25'),
(135, 298, 'sdgfdsgdsgsdgs', 26, '1', '2018-06-29 14:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `history_cust_solution`
--

CREATE TABLE `history_cust_solution` (
  `id` int(255) NOT NULL,
  `req_id` int(10) NOT NULL,
  `cust_solution` varchar(500) NOT NULL,
  `engg_id` int(10) NOT NULL,
  `given_by` varchar(10) NOT NULL,
  `created_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_cust_solution`
--

INSERT INTO `history_cust_solution` (`id`, `req_id`, `cust_solution`, `engg_id`, `given_by`, `created_on`) VALUES
(6, 25, 'test solution', 43, '7', '2017-07-12 11:56:24'),
(7, 36, 'first solution', 18, '7', '2017-07-12 16:26:26'),
(8, 37, 'soluttitititittiti', 18, '7', '2017-07-12 16:55:23'),
(9, 38, 'ssssssssssss', 18, '7', '2017-07-12 17:03:57'),
(10, 39, 'second solution', 18, '7', '2017-07-12 17:21:32'),
(11, 40, 'fghdfgdfgfdgfdg fdg fdg', 18, '7', '2017-07-12 17:37:40'),
(12, 40, '	fghdfgdfgfdgfdg fdg fdg', 18, '7', '2017-07-12 17:38:45'),
(13, 40, '		fghdfgdfgfdgfdg fdg fdg', 18, '7', '2017-07-12 17:39:31'),
(14, 53, 'Problem is due to product carasuel positioning sensor ,open instrument and clean sensor .And mapping instrument .it work properly', 6, '7', '2017-07-21 11:57:13'),
(15, 55, 'replaced printer head.', 1, '7', '2017-07-22 12:20:20'),
(16, 50, 'rEPLACED pHOTOMETRIC BOARD WITH FIBER DONE MAPPING,PHOTOMETRIC CALIBRATION RUN CONTROL,RUN 5 SAMPLES.', 1, '7', '2017-07-27 21:41:25'),
(17, 54, 'I have replace the needle No3 and run the endorance now machine is working fine.', 9, '7', '2017-07-31 12:58:11'),
(18, 67, 'Upgraded OS 107.03 to 108.08.02, Now instrument is working fine.', 14, '7', '2017-08-02 10:26:35'),
(19, 77, 'Due to too much dust and rust after lubrication problem solved', 13, '7', '2017-08-03 13:57:35'),
(20, 78, 'Lubricated the pump.need to change new pump', 13, '7', '2017-08-04 15:25:55'),
(21, 82, 'Factor 7 callibration  select the neoplastin lot number in callibration menu.', 9, '7', '2017-08-05 15:29:27'),
(22, 87, 'After removing paper cleaned the printer area.Problem solved', 8, '7', '2017-08-08 13:30:52'),
(23, 78, '	Lubricated the pump.need to change new pump', 13, '7', '2017-08-09 17:50:33'),
(24, 92, 'Measurement and callibration of temperature done', 9, '7', '2017-08-10 16:40:11'),
(25, 91, 'Clean glass windows of rail and clean camera then done mapping ', 5, '7', '2017-08-11 10:04:16'),
(26, 98, 'Change cacl2 and tip for electronic  pipettes  and then run and control  sample and find good results ', 0, '7', '2017-08-12 12:53:06'),
(27, 100, 'troubleshooted for time being.But need to replace cap', 0, '7', '2017-08-14 14:52:51'),
(28, 101, 'Tubeing in between vacuum reservoir and electrovalve are damage so change tube and solve problem', 0, '7', '2017-08-16 16:23:20'),
(29, 96, 'Routed x axis belt 180 degree and solve problem instrument in running condition but in future need to replace belt \r\nBecause some teeth of belt is damage \r\nWhen we routed belt 180 degree then damage teeth is not in use and belt working fine \r\n ', 0, '7', '2017-08-16 16:29:18'),
(30, 109, 'done instrument calibration and replaced cap waste container', 0, '7', '2017-08-19 12:23:48'),
(31, 117, 'Clean the printer and remove dust particles from printer.', 0, '7', '2017-08-28 22:58:22'),
(32, 121, 'Dust in home sensor clean the same. Instrument is working now.', 1, '7', '2017-08-30 15:53:46'),
(33, 123, 'We have make 1/15 dilution in between 1/7 & 1/40 dilutions for Immunodef Factor VIII test set up.\r\n\r\nFor PT comparison, we used same vial of PT Reagent on both Compact Max and Satellite Instrument.', 0, '7', '2017-09-01 13:41:39'),
(34, 123, '	We have make 1/15 dilution in between 1/7 & 1/40 dilutions for Immunodef Factor VIII test set up.\r\n\r\nFor PT comparison, we used same vial of PT Reagent on both Compact Max and Satellite Instrument.', 10, '7', '2017-09-01 13:43:50'),
(35, 131, 'Instrument is not start checked instrument it problem due to fuse F3(1A)\r\nChanged fuse. ', 0, '7', '2017-09-04 18:42:11'),
(36, 132, 'Problem due to dust in between barcode reader and product carousel glass ', 0, '7', '2017-09-05 13:27:49'),
(37, 112, 'I changed optical sensor, instrument working properly', 6, '7', '2017-09-06 16:45:07'),
(38, 141, 'Reset PID RAM in drawer product solved', 0, '7', '2017-09-15 11:35:43'),
(39, 145, 'Checked auto mode settings and did bidirectional interface.it worked', 0, '7', '2017-09-18 13:10:58'),
(40, 146, 'PM and Callibration of the Start4', 0, '7', '2017-09-18 22:42:53'),
(41, 147, 'Routine maintenance', 0, '7', '2017-09-19 14:30:12'),
(42, 152, 'Performed Recalibration.Qc is in range.It is under observation', 0, '7', '2017-09-22 13:49:48'),
(43, 153, 'Sample tube was empty so needle went to bottom of the tube.after checking prob solved', 0, '7', '2017-09-22 17:30:53'),
(44, 160, 'Make program for TT and run calibration and test ', 0, '7', '2017-09-23 21:10:36'),
(45, 164, 'decontaminate instrument done user maintenance run control .controls are in range.', 0, '7', '2017-09-26 16:50:40'),
(46, 165, 'decontaminate instrument run control.all are in range', 0, '7', '2017-09-26 16:52:01'),
(47, 174, 'Check instrument and find 20 pluses volume issue so set  V pump and slove problem \r\nThen run PC PS ATIII and APCR test ', 0, '7', '2017-09-26 22:26:19'),
(48, 177, 'Buffer vial can not create vaccume beacuse tube connection is break, reconnected tube connector. Its working properly. ', 0, '7', '2017-09-27 19:45:18'),
(49, 180, 'PM and Calibration', 0, '7', '2017-09-28 21:34:59'),
(50, 189, 'Change needle and done mapping solve problems', 0, '7', '2017-10-03 20:28:38'),
(51, 190, 'Done Instrument mapping. ', 0, '7', '2017-10-05 07:13:25'),
(52, 192, 'Run PC FIb and drvv c calibration and control also run test ', 0, '7', '2017-10-05 18:05:39'),
(53, 193, 'Done needle straight, reconnected in sample needle position. Checked volume of dispence, it is ok. And temprature problem due to glycol pump is not work and heating so open and clean pump it is working properly. ', 0, '7', '2017-10-05 22:13:51'),
(54, 196, 'Solve problems', 0, '7', '2017-10-07 21:37:20'),
(55, 197, 'Syringe Tip replaced.', 0, '7', '2017-10-12 12:45:53'),
(56, 198, 'replaced from spare box.they need new one for future', 0, '7', '2017-10-12 17:41:07'),
(57, 206, 'Arm Z movement is not proper,Clean arm and lubricate Z Pully,run tests.working OK', 0, '7', '2017-10-17 23:54:45'),
(58, 219, 'open and clean rail module,clean the theta motor pully and lubricate the same , check the mapping, run the test .', 0, '7', '2017-10-25 15:52:52'),
(59, 221, 'Checked instrument, no problem found ininstrument,  problem is in 50micro liter plama dispensing by Pipette. Changed pipette. Solve problem. ', 0, '7', '2017-10-25 17:44:40'),
(60, 220, 'Reload all reagents and guide about Loading unloading and to run control. ', 1, '7', '2017-10-26 14:58:17'),
(61, 230, 'Check the temperature it is showing 17 \'C in instrument and in temperature probe found that the filters are block from dust, replaced the filter clean the fan. Product temp. Is now 13\'C.', 1, '7', '2017-10-31 14:41:59'),
(62, 236, 'Refitted the pneumatic jack tubing tightly, and cleaned the shuttle rail, now Instrument is working fine.', 14, '7', '2017-10-31 18:53:19'),
(63, 233, 'Mapping done now the instrument is working fine', 15, '7', '2017-10-31 20:48:33'),
(64, 224, 'Removed and done mapping', 15, '7', '2017-10-31 20:55:05'),
(65, 237, 'Mapping for the sample pipetting and product pipetting was done. ', 8, '7', '2017-11-01 12:24:50'),
(66, 240, 'Neddle puresing volume is low cleaning needle and set volcur pump. Problem is solve. ', 6, '7', '2017-11-04 08:07:31'),
(67, 241, 'Replaced with new one and done mapping', 15, '7', '2017-11-06 15:11:55'),
(68, 245, 'completed  the Calibration and run the quality control both PT & APTT are passed.\r\nPT 13.2 / 22.3 , APTT 32.5 / 52.0', 14, '7', '2017-11-07 16:32:04'),
(69, 118, 'Multifunction board replaced.', 11, '7', '2017-11-08 22:49:39'),
(70, 84, 'Replaced PC Board.', 0, '7', '2017-11-08 22:50:59'),
(71, 248, 'Done the mapping arm 2 and clean the suction tip', 9, '7', '2017-11-09 13:20:50'),
(72, 249, 'Visit in lab and found problem APTT regent. APTT regent contaminate and also not proper trained  technician so give training to all technician and solve issue ', 5, '7', '2017-11-09 15:04:33'),
(73, 211, 'after replacing the I/O power board instrument is working fine.', 14, '7', '2017-11-10 18:16:55'),
(74, 253, 'Clean fibers and measurement area, but problem remain same, then press Q and start chronometric test  only. Need to replace photometricboard. ', 1, '7', '2017-11-11 12:39:49'),
(75, 250, 'Make program for fviii and fix also make program for fviii low curve and run calibration and control ', 5, '7', '2017-11-13 09:12:04'),
(76, 261, 'Remove the steel ball from shuttle rack after that machine is working fine.', 9, '7', '2017-11-30 23:45:20'),
(77, 260, 'Remove the steel ball from shuttle rack. Now machine is working fine.', 9, '7', '2017-11-30 23:47:56'),
(78, 265, 'Reloaded the software, and done all the mapping, and done calibration & QC. Now instrument is working fine. ', 14, '7', '2017-12-11 21:20:27'),
(79, 264, 'Solve error of instrument & Run control for pt & Appt ', 5, '7', '2017-12-11 22:55:19'),
(80, 274, 'Checked glycol pump is not liquid flow cooling reservoir to meeting block pump is not work .open and clean pump and rectifying the problem .after cleaning and holing its work properly. I', 6, '7', '2017-12-15 19:35:11'),
(81, 269, 'Find some broken cuvette in cuter which blocked the cuter movement so remove it and solve issue', 5, '7', '2017-12-16 11:36:20'),
(82, 273, 'Check pipetting tip, measurement chamber and product drawer teprature and calibration was done for temp.\r\n', 7, '7', '2017-12-16 14:16:51'),
(83, 290, 'how r u', 0, '7', '2018-02-08 16:33:09'),
(84, 290, 'fdsgdfsgsdgsdgd', 26, '7', '2018-02-08 16:41:12'),
(85, 289, 'yttryyyyyyyyy', 0, '7', '2018-02-08 17:03:31'),
(86, 289, 'yteyeetteyer', 0, '7', '2018-02-08 17:04:44'),
(87, 289, 'yyyyyyttttttttttttttttttttttttttttttttr', 0, '7', '2018-02-08 17:11:28'),
(88, 291, 'gtresdgtzsdgtdrshgyrtsyr', 0, '7', '2018-02-08 17:15:47'),
(89, 291, 'hjutfujgtfujgtjitgui', 26, '7', '2018-02-08 17:17:21'),
(90, 289, 'trjururt', 18, '7', '2018-02-08 18:24:27'),
(91, 294, 'safsafasfasfsafsafsafsafsfsafs', 26, '7', '2018-02-13 18:24:41'),
(92, 295, 'bbbbbbbbbbb', 27, '7', '2018-02-14 11:28:54'),
(93, 297, 'fsafdsafsdafsafsafdsafsdafasfafasfasfa', 27, '7', '2018-02-14 15:19:28'),
(94, 296, 'dhdfhdfhd', 0, '7', '2018-02-14 16:13:03'),
(95, 298, 'gdsgdsgsdgsdgsdgsdgsdgs', 26, '7', '2018-02-14 16:33:04'),
(96, 298, 'gsfdgdsfgsdgfsdgsdgsdgdsgdsgsdgds', 26, '7', '2018-02-14 16:34:19');

-- --------------------------------------------------------

--
-- Table structure for table `history_review`
--

CREATE TABLE `history_review` (
  `id` int(10) NOT NULL,
  `req_id` varchar(255) NOT NULL,
  `eng_notes` varchar(1000) NOT NULL,
  `engg_id` varchar(255) NOT NULL,
  `created_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_review`
--

INSERT INTO `history_review` (`id`, `req_id`, `eng_notes`, `engg_id`, `created_on`) VALUES
(1, '00002', 'dsd', '', '2017-06-08 13:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `lab_tech`
--

CREATE TABLE `lab_tech` (
  `id` int(10) NOT NULL,
  `lab_name` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_onhold`
--

CREATE TABLE `log_onhold` (
  `id` int(10) NOT NULL,
  `req_id` varchar(50) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `on_hold` varchar(50) NOT NULL,
  `onhold_reason` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_onhold`
--

INSERT INTO `log_onhold` (`id`, `req_id`, `emp_id`, `on_hold`, `onhold_reason`) VALUES
(1, '00017', '00012', '2017-06-08 15:53:35', 'TROUBLE SHOOTING STILL CONTINIOUE'),
(2, '00049', '00012', '2017-07-17 13:03:22', ''),
(3, '00050', '00001', '2017-07-17 17:00:06', 'need to replace Photometery board waiting for approval.'),
(4, '00050', '00001', '2017-07-17 17:06:03', ''),
(5, '00049', '00012', '2017-07-22 12:52:56', ''),
(6, '00078', '00013', '2017-08-04 15:23:46', 'Need to get spare approval'),
(7, '00081', '00009', '2017-08-05 15:29:48', 'Because there is printing issue in control values and patient result is printing clear.as per discuss with an sir. I am going to write the mail to Anil sir and boss'),
(8, '00096', '00005', '2017-08-11 10:04:39', 'Need to replace x arm   belt\r\n\r\n'),
(9, '00112', '00006', '2017-08-20 05:54:18', 'Biddlestone home senser is not available in stock. '),
(10, '00116', '00009', '2017-08-24 17:53:44', 'Due to AMC and part are not available.'),
(11, '00125', '00013', '2017-08-31 16:26:36', ''),
(12, '00143', '00013', '2017-09-15 13:19:18', 'PM due is on 28th'),
(13, '00211', '00014', '2017-11-07 09:57:07', ''),
(14, '00250', '00005', '2017-11-13 09:10:38', ''),
(15, '00263', '00005', '2017-12-16 11:36:32', ''),
(16, '00290', '0', '2018-02-08 16:32:33', 'fdsafddsafsafs'),
(17, '00289', '0', '2018-02-08 17:03:18', ''),
(18, '00291', '00026', '2018-02-08 17:13:54', 'hytutrutryujhtrhtynjty'),
(19, '00289', '00018', '2018-02-08 18:24:09', ''),
(20, '00289', '00018', '2018-02-08 18:30:16', 'dsgsgdsfgdsgdsgds'),
(21, '00289', '00018', '2018-02-08 18:32:58', ''),
(22, '00291', '00026', '2018-02-13 12:56:46', ''),
(23, '00291', '00026', '2018-02-13 12:58:18', ''),
(24, '00291', '00026', '2018-02-13 14:16:16', ''),
(25, '00291', '00026', '2018-02-13 14:16:33', ''),
(26, '00291', '00026', '2018-02-13 14:17:37', ''),
(27, '00291', '00026', '2018-02-13 14:18:12', ''),
(28, '00291', '00026', '2018-02-13 14:47:11', 'sadfsafasfasfafafaf'),
(29, '00292', '00026', '2018-02-13 16:40:20', 'sfsafasfsafasfsaf'),
(30, '00296', '0', '2018-02-14 16:11:59', 'dfhdfhdfhdfhdhdhh'),
(31, '00298', '00026', '2018-02-14 16:32:20', 'fsdgsgsgsdgsgsdgsdgdsgsdgsdgdsgsd');

-- --------------------------------------------------------

--
-- Table structure for table `log_onhold_stamping`
--

CREATE TABLE `log_onhold_stamping` (
  `id` int(10) NOT NULL,
  `req_id` int(10) NOT NULL,
  `stamping_id` int(10) NOT NULL,
  `emp_id` varchar(10) NOT NULL,
  `on_hold_date` varchar(50) NOT NULL,
  `on_hold_reason` varchar(250) NOT NULL,
  `updated_on` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_reassign_engg`
--

CREATE TABLE `log_reassign_engg` (
  `id` int(10) NOT NULL,
  `req_id` int(50) NOT NULL,
  `engg_id` varchar(100) NOT NULL,
  `updated_on` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_reassign_engg`
--

INSERT INTO `log_reassign_engg` (`id`, `req_id`, `engg_id`, `updated_on`) VALUES
(1, 127, '00001', '2017-09-01 12:47:26'),
(2, 128, '00013', '2017-09-02 12:30:42'),
(3, 129, '00014', '2017-09-02 12:33:31'),
(4, 130, '00012,00015', '2017-09-02 16:58:31'),
(5, 131, '00006', '2017-09-04 16:16:04'),
(6, 132, '00005', '2017-09-04 16:17:56'),
(7, 133, '00006', '2017-09-05 14:56:43'),
(8, 134, '00013', '2017-09-07 12:20:51'),
(9, 135, '00013', '2017-09-07 12:21:44'),
(10, 136, '00001', '2017-09-08 16:06:02'),
(11, 137, '00006', '2017-09-09 14:52:04'),
(12, 139, '00007', '2017-09-13 20:49:10'),
(13, 140, '00009', '2017-09-13 20:50:32'),
(14, 141, '00013', '2017-09-15 11:34:33'),
(15, 142, '00013', '2017-09-15 12:13:35'),
(16, 143, '00013', '2017-09-15 13:18:54'),
(17, 1, '00009', '2017-09-15 15:18:44'),
(18, 85, '00007', '2017-09-15 15:29:12'),
(19, 145, '00013', '2017-09-18 13:09:51'),
(20, 146, '00009', '2017-09-18 13:18:04'),
(21, 147, '00013', '2017-09-18 17:10:28'),
(22, 148, '00013', '2017-09-19 15:06:06'),
(23, 150, '00013', '2017-09-21 13:08:17'),
(24, 151, '00005', '2017-09-22 13:42:25'),
(25, 152, '00013', '2017-09-22 13:48:41'),
(26, 153, '00013', '2017-09-22 17:29:33'),
(27, 154, '00013', '2017-09-22 18:05:10'),
(28, 159, '00009', '2017-09-23 20:02:48'),
(29, 160, '00005', '2017-09-23 20:04:32'),
(30, 161, '00007', '2017-09-23 20:09:35'),
(31, 158, '00013', '2017-09-25 13:20:06'),
(32, 163, '00012,00015', '2017-09-26 12:21:41'),
(33, 164, '00001', '2017-09-26 13:22:11'),
(34, 165, '00001', '2017-09-26 13:36:26'),
(35, 166, '00013', '2017-09-26 13:39:00'),
(36, 167, '00006', '2017-09-26 14:44:35'),
(37, 168, '00006', '2017-09-26 14:45:39'),
(38, 169, '00006', '2017-09-26 14:46:17'),
(39, 173, '00006', '2017-09-26 14:50:34'),
(40, 174, '00005', '2017-09-26 19:20:25'),
(41, 175, '00006', '2017-09-26 19:46:46'),
(42, 176, '00006', '2017-09-26 20:57:59'),
(43, 177, '00006', '2017-09-27 15:24:44'),
(44, 179, '00007', '2017-09-27 15:42:01'),
(45, 178, '00007', '2017-09-27 15:42:21'),
(46, 179, '00007,00006', '2017-09-27 15:51:37'),
(47, 178, '00007,00006', '2017-09-27 15:51:53'),
(48, 179, '00007,00008', '2017-09-27 15:52:26'),
(49, 178, '00007,00008', '2017-09-27 15:52:42'),
(50, 180, '00009', '2017-09-28 15:56:28'),
(51, 182, '00013', '2017-09-29 13:36:34'),
(52, 183, '00007,00008', '2017-09-29 15:58:19'),
(53, 184, '00013', '2017-09-29 17:32:39'),
(54, 188, '00013', '2017-10-03 13:22:04'),
(55, 189, '00005', '2017-10-03 20:25:46'),
(56, 190, '00006', '2017-10-04 14:34:43'),
(57, 191, '00013', '2017-10-04 16:52:50'),
(58, 192, '00005', '2017-10-04 17:27:42'),
(59, 193, '00006', '2017-10-05 17:48:50'),
(60, 194, '00013', '2017-10-05 18:41:30'),
(61, 195, '00013', '2017-10-06 12:17:23'),
(62, 196, '00005', '2017-10-07 21:32:38'),
(63, 197, '00010', '2017-10-12 09:06:32'),
(64, 198, '00013', '2017-10-12 17:34:50'),
(65, 199, '00009', '2017-10-12 17:51:12'),
(66, 201, '00014', '2017-10-16 13:51:21'),
(67, 203, '00013', '2017-10-16 15:26:03'),
(68, 204, '00005', '2017-10-16 17:43:19'),
(69, 205, '00007', '2017-10-16 21:05:57'),
(70, 206, '00001', '2017-10-17 12:32:46'),
(71, 207, '00013', '2017-10-17 12:37:16'),
(72, 208, '00006', '2017-10-17 16:22:55'),
(73, 209, '00013', '2017-10-20 13:37:59'),
(74, 210, '00013', '2017-10-23 12:10:46'),
(75, 211, '00014', '2017-10-23 12:33:17'),
(76, 212, '00008', '2017-10-23 16:33:24'),
(77, 215, '00015', '2017-10-25 14:03:43'),
(78, 216, '00015', '2017-10-25 15:17:05'),
(79, 217, '00008', '2017-10-25 15:35:24'),
(80, 218, '00013', '2017-10-25 15:36:48'),
(81, 219, '00001', '2017-10-25 15:45:24'),
(82, 220, '00001', '2017-10-25 16:18:50'),
(83, 221, '00006', '2017-10-25 16:46:24'),
(84, 222, '00008', '2017-10-27 12:15:18'),
(85, 223, '00013', '2017-10-27 12:16:32'),
(86, 224, '00015', '2017-10-27 13:10:10'),
(87, 225, '00015', '2017-10-27 13:12:56'),
(88, 226, '00009', '2017-10-27 13:19:00'),
(89, 18, '00012', '2017-10-27 15:04:01'),
(90, 228, '00005', '2017-10-28 12:25:20'),
(91, 229, '00013', '2017-10-28 15:14:29'),
(92, 230, '00001', '2017-10-31 12:51:59'),
(93, 231, '00015', '2017-10-31 13:22:13'),
(94, 232, '00015', '2017-10-31 13:23:04'),
(95, 233, '00015', '2017-10-31 13:23:59'),
(96, 234, '00015', '2017-10-31 13:25:04'),
(97, 235, '00013', '2017-10-31 16:17:45'),
(98, 236, '00014', '2017-10-31 18:15:45'),
(99, 237, '00008', '2017-10-31 20:24:33'),
(100, 238, '00015', '2017-11-01 14:39:08'),
(101, 239, '00013', '2017-11-01 14:43:13'),
(102, 240, '00006', '2017-11-03 15:26:02'),
(103, 241, '00015', '2017-11-03 15:31:44'),
(104, 242, '00013', '2017-11-04 12:16:05'),
(105, 243, '00013', '2017-11-06 12:35:03'),
(106, 244, '00014', '2017-11-06 18:13:15'),
(107, 245, '00014', '2017-11-07 13:40:24'),
(108, 246, '00013', '2017-11-07 13:41:27'),
(109, 247, '00013', '2017-11-08 15:09:00'),
(110, 248, '00009', '2017-11-08 16:53:07'),
(111, 249, '00005', '2017-11-09 13:24:25'),
(112, 250, '00005', '2017-11-09 15:02:13'),
(113, 251, '00013', '2017-11-10 12:56:55'),
(114, 252, '00013', '2017-11-10 12:57:35'),
(115, 253, '00001', '2017-11-10 13:12:40'),
(116, 254, '00013', '2017-11-15 14:25:06'),
(117, 255, '00013', '2017-11-15 14:25:53'),
(118, 257, '00015', '2017-11-16 13:49:51'),
(119, 259, '00007', '2017-11-20 01:33:48'),
(120, 260, '00009', '2017-11-21 11:45:09'),
(121, 261, '00009', '2017-11-29 17:10:03'),
(122, 262, '00009', '2017-11-30 15:49:54'),
(123, 263, '00005', '2017-12-05 13:29:56'),
(124, 264, '00005', '2017-12-11 14:04:31'),
(125, 265, '00014', '2017-12-11 17:38:29'),
(126, 266, '00009', '2017-12-13 13:42:48'),
(127, 268, '00009', '2017-12-13 13:45:03'),
(128, 267, '00014', '2017-12-13 13:48:27'),
(129, 269, '00005', '2017-12-14 13:56:20'),
(130, 270, '00013', '2017-12-14 14:06:04'),
(131, 271, '00013', '2017-12-14 17:27:25'),
(132, 272, '00013', '2017-12-15 12:23:56'),
(133, 273, '00007,00008', '2017-12-15 12:57:25'),
(134, 274, '00006', '2017-12-15 14:01:45'),
(135, 275, '00013', '2017-12-15 17:28:52'),
(136, 276, '00013', '2017-12-16 12:43:47'),
(137, 278, '00013', '2017-12-16 14:32:23'),
(138, 280, '00013', '2017-12-18 13:37:13'),
(139, 281, '00013', '2017-12-19 12:53:16'),
(140, 282, '00015', '2017-12-19 13:12:54'),
(141, 283, '00015', '2017-12-19 13:13:34'),
(142, 284, '00015', '2017-12-19 13:23:10'),
(143, 285, '00015', '2017-12-19 13:24:09'),
(144, 284, '00012,00015', '2017-12-20 13:05:38'),
(145, 287, '00001,00025', '2017-12-20 14:52:38'),
(146, 289, '00018', '2017-12-30 10:48:29'),
(147, 290, '00026', '2018-02-08 13:31:53'),
(148, 291, '00026', '2018-02-08 17:13:41'),
(149, 292, '00026', '2018-02-13 16:40:13'),
(150, 293, '00026', '2018-02-13 18:18:34'),
(151, 294, '00026', '2018-02-13 18:23:59'),
(152, 295, '00027', '2018-02-14 10:25:30'),
(153, 296, '00026', '2018-02-14 14:11:43'),
(154, 297, '00027', '2018-02-14 15:18:18'),
(155, 298, '00026', '2018-02-14 16:29:59'),
(156, 299, '00011', '2018-07-02 11:18:33'),
(157, 300, '00027', '2018-07-02 11:41:26'),
(158, 301, '00027', '2018-07-02 11:45:06'),
(159, 302, '00011', '2018-07-02 11:53:02'),
(160, 303, '00013', '2018-07-02 12:01:26'),
(161, 304, '00026', '2018-07-02 12:08:40'),
(162, 305, '00026', '2018-07-02 12:17:48'),
(163, 306, '00027', '2018-07-02 12:18:25'),
(164, 307, '00026', '2018-07-03 14:43:28'),
(165, 313, '00018', '2018-10-10 11:07:05'),
(166, 314, '00018', '2018-10-10 11:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `log_service_payment_details`
--

CREATE TABLE `log_service_payment_details` (
  `id` int(10) NOT NULL,
  `req_id` int(11) NOT NULL,
  `cmr_paid` int(11) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `pending_amt` int(10) NOT NULL,
  `updated_on` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_service_payment_details`
--

INSERT INTO `log_service_payment_details` (`id`, `req_id`, `cmr_paid`, `payment_mode`, `pending_amt`, `updated_on`, `user_id`) VALUES
(1, 290, 111, '', 787, '2018-02-08 16:47:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log_stamping`
--

CREATE TABLE `log_stamping` (
  `id` int(10) NOT NULL,
  `req_id` int(10) NOT NULL,
  `stamping_id` int(10) NOT NULL,
  `cmr_paid` int(10) NOT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `pending_amt` int(10) NOT NULL,
  `updated_on` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `order_id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `customer_id` int(10) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `purchase_date` varchar(50) NOT NULL,
  `sub_total` double NOT NULL,
  `disc` int(11) NOT NULL,
  `grand_total` double NOT NULL,
  `amt_paid` int(11) NOT NULL,
  `amt_pending` int(11) NOT NULL,
  `created_on` varchar(50) NOT NULL,
  `updated_on` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `customer_id`, `mobile`, `email_id`, `address`, `city`, `state`, `pincode`, `status`, `purchase_date`, `sub_total`, `disc`, `grand_total`, `amt_paid`, `amt_pending`, `created_on`, `updated_on`) VALUES
(1, 000001, 2, '9840289188', '', 'No.21 Palavanthangal', 'Coimbatore', 'Tamil Nadu', 600054, '', '2018-10-15 15:05', 212, 20, 192, 130, 50, '2018-10-16 11:37:11', '2018-10-16 11:37:11'),
(2, 000002, 5, '9988776333', '', 'No.12 Test Address', 'Chennai', 'Tamil Nadu', 500012, '', '2018-10-17 15:54', 240, 10, 216, 216, 0, '2018-10-17 15:58:49', '2018-10-17 15:58:49'),
(3, 000003, 5, '9988776333', 'karthick@yahoo.com', 'No.12 Test Address', 'Chennai', 'Tamil Nadu', 500012, '', '2018-10-17 16:53', 2882, 10, 2594, 0, 2594, '2018-10-17 16:56:31', '2018-10-17 16:56:31'),
(4, 000004, 5, '9988776333', 'vijaykumarv@yoursefficiently.com', 'No.12 Test Address', 'Chennai', 'Tamil Nadu', 500012, '', '2018-10-17 17:06', 270, 0, 270, 0, 270, '2018-10-17 17:07:11', '2018-10-17 17:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `p_name` varchar(250) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double NOT NULL,
  `sub_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `p_name`, `qty`, `price`, `sub_total`) VALUES
(1, '1', 'Shirts', 2, 100, 200),
(2, '1', 'Pant', 1, 12, 12),
(3, '2', 'Jewels', 2, 120, 240),
(4, '3', 'Jewl', 22, 20, 440),
(5, '3', 'Kwii', 11, 222, 2442),
(6, '4', 'Ring', 2, 12, 24),
(7, '4', 'Chain', 2, 123, 246);

-- --------------------------------------------------------

--
-- Table structure for table `petty_log`
--

CREATE TABLE `petty_log` (
  `id` int(10) NOT NULL,
  `spare_id` int(30) NOT NULL,
  `qty_plus` int(30) NOT NULL,
  `employee` int(30) NOT NULL,
  `status` int(30) NOT NULL,
  `todaydate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petty_log`
--

INSERT INTO `petty_log` (`id`, `spare_id`, `qty_plus`, `employee`, `status`, `todaydate`) VALUES
(1, 1, 0, 0, 2, '18-09-2017 13:57:20'),
(2, 1, 0, 0, 2, '18-09-2017 13:57:26'),
(3, 156, 0, 0, 2, '18-09-2017 13:57:35'),
(4, 277, 0, 15, 2, '31-10-2017 15:34:42'),
(5, 277, 0, 15, 2, '31-10-2017 15:34:55'),
(6, 1, 50, 18, 1, '29-12-2017 17:14:59'),
(7, 82, 0, 18, 2, '29-12-2017 17:16:40'),
(8, 82, 30, 18, 1, '29-12-2017 17:16:49'),
(9, 305, 20, 18, 1, '29-12-2017 17:28:17'),
(10, 60, 20, 18, 1, '29-12-2017 17:28:51'),
(11, 82, 20, 18, 1, '29-12-2017 17:29:28'),
(12, 74, 5, 18, 1, '30-12-2017 10:51:09'),
(13, 0, 0, 0, 2, '08-02-2018 11:49:18'),
(14, 0, 0, 0, 2, '08-02-2018 11:55:30'),
(15, 0, 0, 0, 2, '08-02-2018 11:55:56'),
(16, 0, 0, 0, 2, '08-02-2018 12:14:27'),
(17, 0, 0, 0, 2, '08-02-2018 12:15:21'),
(18, 0, 0, 0, 2, '08-02-2018 16:38:24'),
(19, 0, 0, 0, 2, '08-02-2018 16:38:35'),
(20, 0, 0, 0, 2, '08-02-2018 18:22:30'),
(21, 0, 0, 0, 2, '08-02-2018 18:22:54'),
(22, 0, 0, 0, 2, '08-02-2018 18:25:17'),
(23, 0, 0, 0, 2, '08-02-2018 18:25:20'),
(24, 0, 0, 0, 2, '08-02-2018 18:25:51'),
(25, 0, 0, 0, 2, '08-02-2018 18:27:34'),
(26, 0, 0, 0, 2, '08-02-2018 18:27:46'),
(27, 0, 0, 0, 2, '08-02-2018 18:28:30'),
(28, 307, 1, 26, 1, '09-02-2018 10:39:48'),
(29, 6, 0, 4, 2, '09-02-2018 10:43:14'),
(30, 6, 1, 4, 1, '09-02-2018 10:43:34'),
(31, 308, 7, 27, 1, '14-02-2018 10:22:18'),
(32, 308, 2, 27, 1, '14-02-2018 11:55:28'),
(33, 309, 2, 27, 1, '14-02-2018 15:11:02'),
(34, 310, 2, 26, 1, '14-02-2018 16:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `petty_spare`
--

CREATE TABLE `petty_spare` (
  `id` int(10) NOT NULL,
  `spare_id` int(255) NOT NULL,
  `qty_plus` int(255) NOT NULL,
  `employee` int(255) NOT NULL,
  `todaydate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petty_spare`
--

INSERT INTO `petty_spare` (`id`, `spare_id`, `qty_plus`, `employee`, `todaydate`) VALUES
(1, 1, 0, 0, '18-09-2017 13:57:20'),
(2, 156, 0, 0, '18-09-2017 13:57:35'),
(3, 277, 0, 15, '31-10-2017 15:34:42'),
(4, 262, 1, 1, '2017-11-16'),
(5, 1, 50, 18, '29-12-2017 17:14:59'),
(6, 82, 54, 18, '29-12-2017 17:16:40'),
(7, 305, 24, 18, '29-12-2017 17:28:17'),
(8, 60, 23, 18, '29-12-2017 17:28:51'),
(9, 74, 11, 18, '30-12-2017 10:51:09'),
(10, 0, 0, 0, '08-02-2018 11:49:18'),
(11, 307, 3, 26, '09-02-2018 10:39:48'),
(12, 6, 1, 4, '09-02-2018 10:43:14'),
(13, 308, 11, 27, '14-02-2018 10:22:18'),
(14, 309, 2, 27, '14-02-2018 15:11:02'),
(15, 310, 4, 26, '14-02-2018 16:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `preventive_log`
--

CREATE TABLE `preventive_log` (
  `id` int(11) NOT NULL,
  `prev_main_alert` varchar(100) NOT NULL,
  `orderid` varchar(50) NOT NULL,
  `date_updated` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preventive_log`
--

INSERT INTO `preventive_log` (`id`, `prev_main_alert`, `orderid`, `date_updated`) VALUES
(1, '2017-08-05', '3481', '2017-08-05'),
(2, '2017-08-05', '3481', '2017-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `preventive_maintenance_alerts`
--

CREATE TABLE `preventive_maintenance_alerts` (
  `id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `schedule_date` varchar(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preventive_maintenance_alerts`
--

INSERT INTO `preventive_maintenance_alerts` (`id`, `order_id`, `schedule_date`, `status`) VALUES
(1, 4, '2017-12-22', 1),
(2, 174, '2017-07-29', 0),
(3, 207, '2017-09-23', 1),
(4, 173, '2017-09-23', 1),
(5, 172, '2017-09-21', 0),
(6, 200, '2017-07-15', 0),
(7, 190, '2017-08-04', 0),
(8, 189, '2017-08-19', 0),
(9, 209, '2017-08-18', 0),
(10, 251, '2017-08-19', 0),
(11, 18, '2017-07-12', 0),
(12, 22, '2017-07-19', 0),
(13, 97, '2017-08-10', 0),
(14, 110, '2017-08-28', 0),
(15, 73, '2017-08-10', 0),
(16, 87, '2017-07-03', 0),
(17, 78, '2017-07-31', 0),
(18, 88, '2017-07-18', 0),
(19, 7, '2017-08-22', 0),
(20, 462, '2018-03-18', 0),
(21, 65, '2017-09-26', 1),
(22, 194, '2017-09-26', 0),
(23, 196, '2017-09-27', 1),
(24, 195, '2017-09-27', 1),
(25, 221, '2017-09-28', 1),
(26, 463, '2017-08-08', 0),
(27, 464, '', 0),
(28, 465, '', 0),
(29, 466, '2017-08-01', 0),
(30, 467, '', 0),
(31, 468, '2018-10-15', 0),
(32, 185, '2017-10-16', 1),
(33, 77, '2017-10-17', 1),
(34, 469, '2018-09-24', 0),
(35, 470, '2018-10-16', 0),
(36, 43, '2017-10-24', 0),
(37, 471, '2018-10-22', 0),
(38, 472, '2017-10-24', 0),
(39, 473, '', 0),
(40, 474, '', 0),
(41, 475, '2018-10-23', 0),
(42, 476, '2018-10-23', 0),
(43, 477, '', 0),
(44, 478, '', 0),
(45, 479, '2017-12-19', 1),
(46, 480, '', 0),
(47, 245, '', 0),
(48, 150, '', 0),
(49, 75, '', 0),
(50, 171, '2017-10-14', 0),
(51, 481, '', 0),
(52, 482, '', 0),
(53, 483, '', 0),
(54, 484, '', 0),
(55, 485, '', 0),
(56, 486, '', 0),
(57, 487, '', 0),
(58, 175, '2017-10-31', 0),
(59, 488, '', 0),
(60, 489, '', 0),
(61, 490, '', 0),
(62, 491, '', 0),
(63, 492, '', 0),
(64, 179, '2017-11-09', 0),
(65, 191, '', 0),
(66, 184, '', 0),
(67, 493, '', 0),
(68, 494, '', 0),
(69, 210, '2017-05-22', 0),
(70, 210, '', 0),
(71, 495, '2017-11-16', 1),
(72, 5, '2017-11-17', 0),
(73, 496, '', 0),
(74, 177, '2017-11-20', 1),
(75, 497, '', 0),
(76, 498, '', 0),
(77, 176, '2017-11-18', 0),
(78, 178, '2017-11-22', 0),
(79, 246, '2017-11-30', 1),
(80, 499, '', 0),
(81, 500, '2018-05-27', 0),
(82, 229, '2017-12-13', 1),
(83, 228, '2017-12-13', 1),
(84, 501, '', 0),
(85, 502, '', 0),
(86, 503, '', 0),
(87, 6, '2017-12-23', 1),
(88, 504, '', 0),
(89, 505, '', 0),
(90, 506, '', 0),
(91, 507, '2017-12-16', 0),
(92, 508, '', 0),
(93, 4, '2017-12-31', 1),
(94, 4, '2017-12-30', 0),
(95, 509, '2017-12-30', 0),
(96, 510, '2018-02-08', 0),
(97, 529, '2018-02-14', 0),
(98, 530, '2018-02-14', 0),
(99, 531, '2018-02-14', 0),
(100, 532, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `problem_category`
--

CREATE TABLE `problem_category` (
  `id` int(10) NOT NULL,
  `prob_category` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `prob_code` varchar(50) NOT NULL,
  `prob_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem_category`
--

INSERT INTO `problem_category` (`id`, `prob_category`, `model`, `prob_code`, `prob_description`) VALUES
(7, 'multifunction board required', '3', '', ''),
(8, 'PREVENTIVE ', '5', '', ''),
(9, 'PHOTO METRIC CALIBRATION NOT DONE', '5', '', ''),
(10, '03.05.03 initialization waiting for carousel initialization time out', '3', '', ''),
(16, 'shuttle missing', '4', '', ''),
(17, '50102 Cleaner Solution Empty Unable to fill buffer vial. Fluidic circuit busy during 30 sec. ', '3', '', ''),
(19, 'SHUTTLE ERROR', '4', '', ''),
(22, 'showing error BREAKOFF VERSION 1.0', '4', '', ''),
(23, 'CTRL BREAK DESACTIVE', '4', '', ''),
(24, 'Printer problem', '1', '', ''),
(25, 'RINSING TIME OUT ', '3', '', ''),
(37, 'not identified', '4', '', ''),
(38, 'All results out of range', '4', '', ''),
(39, 'Reagent volume ', '3', '', ''),
(40, 'NRF error', '4', '', ''),
(41, 'not recived aknowledgement', '4', '', ''),
(43, 'DESORB U MISSING BY NEEDLE 3', '4', '', ''),
(44, 'Test category one', '4', '00001', 'test category description'),
(45, 'test category two', '5', '00002', 'test category two'),
(46, 'test category three', '8', '00003', 'test category three'),
(47, 'test category four', '3', '00004', 'test category four'),
(48, 'test category five', '3', '00005', 'test category five'),
(49, 'test category six', '4', '00006', 'test category six'),
(50, 'test category seven', '3', '00007', 'test category seven'),
(55, 'dddddddd', '5', 'dddddddddd', 'ddddddddddddd'),
(56, 'bbbbbbbbbb', '3', 'bbbbbbbbb', 'bbbbbbbbbbbbb'),
(57, 'sssssssss', '6', 'ssssss', 'sssss'),
(58, 'wwwwwwww', '5', 'wwwwww', 'wwwwwwwwwwwwww'),
(59, 'xxxxxxxxxx', '6', 'xxxxxx', 'xxxxxxx'),
(60, '', '4', '', ''),
(61, 'Reagent volume missing', '3', '', ''),
(62, '', '5', '', ''),
(63, 'results issue', '1', '', ''),
(64, '', '1', '', ''),
(65, 'ERROR 02.02.04 RINSING FAILURE TO CHECK PDR HOME POSITION', '3', '', ''),
(66, '', '3', '', ''),
(67, 'ERROR 12.01.10 CHECKING PHOTOMETRIC MODULE PHOTOMETRIC STATUS WRONG PS 402222 ', '3', '', ''),
(68, '', '6', '', ''),
(69, '03.05.03 INITIALIZATION WAITING TIME OUT', '3', '', ''),
(70, 'printer', '1', '', ''),
(71, 'Preventive Maintenance Visit', '9', '', ''),
(72, 'Calibration over due', '1', '', ''),
(73, 'Product Drawer Temperature is around 23deg.Instrument shown alarm', '4', '', ''),
(74, 'ERROR 01.06.00 VACUUM RESIERVOIR INSUFFICIENT VACUUM', '4', '', ''),
(75, '', '7', '', ''),
(76, 'Error-\"rinsing unable to depressurize the rinsing system timeout.', '3', '', ''),
(77, 'Reagent Drawer Temperature out of limit', '4', '', ''),
(78, 'PRINTING PROBLEM', '4', '', ''),
(79, 'FACTOR VII CAL PROBLEM', '5', '', ''),
(80, 'ERROR 02.02.19 RINSING UNABLE TO DEPRESSURIZE THE RINSING SYSTEM TIME OUT', '3', '', ''),
(81, 'DISPLAY REMAIN BLACK', '3', '', ''),
(82, '', '8', '', ''),
(83, 'Printing issue paper got stuck', '3', '', ''),
(84, 'Operating system loading screen stuck', '6', '', ''),
(85, 'n1', '4', '', ''),
(86, 'n2 bended during sample run', '4', '', ''),
(87, 'QNS error&ball movement is too low', '3', '', ''),
(88, 'while running samples during measurement it couldnt dispense starter reagent', '3', '', ''),
(89, 'AMBIENT TEMPERATURE OUT OF RANGE', '4', '', ''),
(90, 'x axis belt tooth damaged', '4', '', ''),
(91, 'dispensing samples problem', '4', '', ''),
(92, 'APTT results are going in Higher Side', '1', '', ''),
(93, 'Position F1 not detected drawer Jam error frequently', '4', '', ''),
(94, 'Sample draw home sensor', '4', '', ''),
(95, 'Used liquid container maximum error', '4', '', ''),
(96, 'Vacuum reservoir insufficient vacuum', '4', '', ''),
(97, 'APTT results problem', '4', '', ''),
(98, 'Product drawer temperature is high', '4', '', ''),
(99, 'DRVV product loading issues &pt aptt control out', '3', '', ''),
(100, 'error 11.08.05 chromogenic optical motor is too low', '4', '', ''),
(101, 'error 02.02.02 rinsing moving zaxis into well time out', '3', '', ''),
(102, 'sample drawer jammed', '4', '', ''),
(103, 'PM&CAL', '1', '', ''),
(104, 'status nRx error', '4', '', ''),
(105, 'Error 07.01.12 Uncompleted axis Y Movement', '4', '', ''),
(106, 'PRINTER NOT WORKING', '1', '', ''),
(107, 'ERROR 03.05.03 INITIALIZATION FOR CAROUSEL.INITIALIZATION TIME OUT', '3', '', ''),
(108, 'issue with FVIII cal and also PT sample comparison is not ok with backup instrument', '5', '', ''),
(109, 'product carousel missing', '3', '', ''),
(110, 'error 10.09.03 cuvette management', '3', '', ''),
(111, 'keypad issue', '1', '', ''),
(112, 'error 10.05.01', '3', '', ''),
(113, 'Instrument not started properly', '4', '', ''),
(114, 'product carousel initialization failure', '3', '', ''),
(115, 'factor viii qc is in lower side', '4', '', ''),
(116, 'QC out of range', '3', '', ''),
(117, 'ball movement too low', '3', '', ''),
(118, 'cuvette missing', '5', '', ''),
(119, 'NO 9 position in product drawer is blinking always.', '4', '', ''),
(120, 'PROBLEM WITH BIDIRECTIONAL INTERFACE', '6', '', ''),
(121, 'need modification in drvv program', '3', '', ''),
(122, 'Fib Qc is in higher side', '6', '', ''),
(123, 'Needle no 1 must be bended', '6', '', ''),
(124, 'for adding TT progam', '4', '', ''),
(125, 'aptt results and controls are in higher side', '3', '', ''),
(126, 'aptt results/controls are in high side', '3', '', ''),
(127, 'to prepare fvii program', '4', '', ''),
(128, 'to make fvii program', '4', '', ''),
(129, 'problem with thrombotic panel', '4', '', ''),
(130, 'LIS problem', '2', '', ''),
(131, 'error 03.01.06', '3', '', ''),
(132, 'error 05.17.01', '3', '', ''),
(133, 'unable to fill buffer', '3', '', ''),
(134, 'NEEDLE BENDED', '4', '', ''),
(135, 'needle hitting in reagent vial corner', '3', '', ''),
(136, 'pc ps test and calibration', '3', '', ''),
(137, 'temperature out of range', '4', '', ''),
(138, 'ddi control out of range', '4', '', ''),
(139, 'fib control lower side within range', '4', '', ''),
(140, 'syringe maintenance over due', '5', '', ''),
(141, 'N3 BEND', '4', '', ''),
(142, 'ambient tempertaure out of range', '5', '', ''),
(143, 'PS and ATIII calibration and test', '3', '', ''),
(144, 'error 02.02.01 rinsing', '3', '', ''),
(145, 'movinf z axis into well time out', '3', '', ''),
(146, 'Routine maintenance', '4', '', ''),
(147, 'MAINTENANCE', '4', '', ''),
(148, 'suction not operating correctly', '6', '', ''),
(149, 'cooling liquid pump stuck', '4', '', ''),
(150, 'decontamination and cleaning', '3', '', ''),
(151, 'error 10.04.02 cuvette adjustment', '3', '', ''),
(152, 'error 02.00.08 arm initialization', '3', '', ''),
(153, 'instrument is in sleeping mode', '3', '', ''),
(154, 'QC results are in higher side', '1', '', ''),
(155, 'technical error in sample tube due to LLD issue', '4', '', ''),
(156, 'contamination issue with PT LOT .They want other lot replacementt', '4', '', ''),
(157, 'NEEDLE STUCK IN WELL', '4', '', ''),
(158, 'REAGENT NOT TAKING', '6', '', ''),
(159, 'printer paper stuck', '1', '', ''),
(160, 'for running FVIII ', '2', '', ''),
(161, 'FIB', '2', '', ''),
(162, 'temperature out of range ', '3', '', ''),
(163, 'LIS CONNECTION CHECK', '3', '', ''),
(164, 'LLD issue with Cephascreen vial', '3', '', ''),
(165, '02.12.00 SHUTTLE MISSING', '5', '', ''),
(166, 'error 02.03.29 sample suction', '3', '', ''),
(167, 'liquid suction at the bottom of tube.', '3', '', ''),
(168, 'PS&PC result in higher side', '4', '', ''),
(169, 'needle n3 broken', '6', '', ''),
(170, 'CALIBRATION', '5', '', ''),
(171, 'CALIBRATION', '4', '', ''),
(172, 'ROUTINE  MONTLY MAINTENANCE', '6', '', ''),
(173, 'error cuvette missing', '5', '', ''),
(174, 'while running in measurement chamner got error ', '2', '', ''),
(175, 'low curve program for fviii and normal program fviii & ix', '4', '', ''),
(176, 'to run equas', '6', '', ''),
(177, 'TO RUN PC PS TEST', '6', '', ''),
(178, 'product drawer jam...', '4', '', ''),
(179, 'error during test run', '2', '', ''),
(180, 'system error', '6', '', ''),
(181, 'New site verification', '4', '', ''),
(182, 'after sample loading the status screen is not appearing', '4', '', ''),
(183, 'temp at pipetting tip out of limit', '4', '', ''),
(184, 'product and incubation temperature is out of range', '4', '', ''),
(185, 'routine maintenance', '6', '', ''),
(186, 'routine maintenance and also to run LIQ FIB cal', '4', '', ''),
(187, 'vacuum reservoir empty error', '4', '', ''),
(188, '', '2', '', ''),
(189, 'shuttle missing', '6', '', ''),
(190, 'calibration issue', '2', '', ''),
(191, 'sfsa', '4', 'dssfs', 'fdsafsaf'),
(192, 'multifunction board required', '6', '', ''),
(193, 'test category three', '12', '', ''),
(194, '', '12', '', ''),
(195, '', 'multiple', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` int(10) NOT NULL,
  `subcategory` int(10) NOT NULL,
  `brand` int(10) NOT NULL,
  `model` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `addlinfo` varchar(250) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category`, `subcategory`, `brand`, `model`, `description`, `addlinfo`, `status`) VALUES
(1, 'ANALYSER', 2, 2, 1, 'Start 4', '', '', 0),
(2, 'ANALYSER', 2, 2, 1, 'Start Max', '', '', 0),
(3, 'ANALYSER', 1, 1, 1, 'STA Satellite', '', '', 0),
(4, 'ANALYSER', 1, 1, 1, 'STA Compact', '', '', 1),
(5, 'ANALYSER', 1, 1, 1, 'STA Compact Max', '', '', 1),
(6, 'ANALYSER', 1, 1, 1, 'STA Compact Max2', '', '', 0),
(7, 'ANALYSER', 1, 1, 1, 'STA-R ', '', '', 0),
(8, 'ANALYSER', 1, 1, 1, 'STA-R EVOLUTION', '', '', 0),
(9, 'ANALYSER', 1, 1, 1, 'STA-R MAX', '', '', 0),
(10, 'prince', 1, 1, 3, 'prince1', 'afdasfdsafdasfsaf', 'Accessories 1', 0),
(11, 'sudar', 1, 1, 3, 'sudar', 'afdafdasfas', 'Accessories 1', 0),
(12, 'general', 1, 1, 4, 'generals', 'asfasfsafsa', 'Accessories 1', 0),
(13, 'havels', 1, 1, 3, 'havels', 'havesl', 'Accessories 1', 0),
(14, 'c123', 1, 1, 1, 'c123', 'aasfas', 'Accessories 1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prod_category`
--

CREATE TABLE `prod_category` (
  `id` int(10) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod_category`
--

INSERT INTO `prod_category` (`id`, `product_category`, `status`) VALUES
(1, 'Fully Automated Coagulation Analyzer', 0),
(2, 'Semi Automated Coagulation Analyzer', 0),
(3, 'test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prod_subcategory`
--

CREATE TABLE `prod_subcategory` (
  `id` int(10) NOT NULL,
  `prod_category_id` int(10) NOT NULL,
  `subcat_name` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod_subcategory`
--

INSERT INTO `prod_subcategory` (`id`, `prod_category_id`, `subcat_name`, `status`) VALUES
(1, 1, 'COAGULATION', 0),
(2, 2, 'COAGULATION', 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_orders`
--

CREATE TABLE `purchase_orders` (
  `id` int(10) NOT NULL,
  `to_name` varchar(100) NOT NULL,
  `to_addr` varchar(500) NOT NULL,
  `to_cont_name` varchar(100) NOT NULL,
  `to_cont_no` varchar(100) NOT NULL,
  `to_cont_mail` varchar(100) NOT NULL,
  `todaydate` varchar(100) NOT NULL,
  `refno` varchar(100) NOT NULL,
  `cst_no` varchar(100) NOT NULL,
  `basicamount` int(50) NOT NULL,
  `cst` varchar(100) NOT NULL,
  `tax_id` int(10) NOT NULL,
  `freight` int(50) NOT NULL,
  `totalamount` int(50) NOT NULL,
  `spec_addr` varchar(500) NOT NULL,
  `spec_ins` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_orders`
--

INSERT INTO `purchase_orders` (`id`, `to_name`, `to_addr`, `to_cont_name`, `to_cont_no`, `to_cont_mail`, `todaydate`, `refno`, `cst_no`, `basicamount`, `cst`, `tax_id`, `freight`, `totalamount`, `spec_addr`, `spec_ins`) VALUES
(1, '', '', '', '', '', '24-08-2017 12:19:16', '', '', 0, '', 1, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_details`
--

CREATE TABLE `purchase_order_details` (
  `id` int(10) NOT NULL,
  `purchase_order_id` int(10) NOT NULL,
  `sr_no` varchar(100) NOT NULL,
  `spare_name` int(10) NOT NULL,
  `spare_qty` int(10) NOT NULL,
  `rate` int(20) NOT NULL,
  `spare_tot` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_order_details`
--

INSERT INTO `purchase_order_details` (`id`, `purchase_order_id`, `sr_no`, `spare_name`, `spare_qty`, `rate`, `spare_tot`) VALUES
(1, 1, '', 0, 0, 0, 0),
(2, 1, '', 9, 0, 0, 0),
(3, 1, '', 0, 0, 0, 0),
(4, 1, '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `qc_masters`
--

CREATE TABLE `qc_masters` (
  `id` int(10) NOT NULL,
  `model` int(10) NOT NULL,
  `qc_param` varchar(100) NOT NULL,
  `qc_value` varchar(100) NOT NULL,
  `created_on` varchar(50) NOT NULL,
  `updated_on` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qc_masters`
--

INSERT INTO `qc_masters` (`id`, `model`, `qc_param`, `qc_value`, `created_on`, `updated_on`, `user_id`) VALUES
(1, 3, 'PT', '12.7', '2017-06-08 15:53:10', '2017-06-08 15:53:10', 1),
(2, 5, 'PT', '', '2017-07-22 13:28:59', '2017-07-22 13:28:59', 1),
(3, 5, 'APTT', '', '2017-07-22 13:28:59', '2017-07-22 13:28:59', 1),
(4, 5, 'FIB', '', '2017-07-22 13:28:59', '2017-07-22 13:28:59', 1),
(5, 5, 'D-DI', '', '2017-07-22 13:28:59', '2017-07-22 13:28:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qc_parameters_details`
--

CREATE TABLE `qc_parameters_details` (
  `id` int(10) NOT NULL,
  `request_id` int(50) NOT NULL,
  `qc_master_id` int(10) NOT NULL,
  `result_qc_value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qc_parameters_details`
--

INSERT INTO `qc_parameters_details` (`id`, `request_id`, `qc_master_id`, `result_qc_value`) VALUES
(1, 17, 1, '13.0'),
(3, 32, 1, ''),
(6, 48, 1, ''),
(7, 44, 1, ''),
(10, 52, 1, '13.4'),
(11, 53, 1, '13.4'),
(12, 49, 1, ''),
(13, 33, 2, ''),
(14, 33, 3, ''),
(15, 33, 4, ''),
(16, 33, 5, ''),
(17, 25, 2, ''),
(18, 25, 3, ''),
(19, 25, 4, ''),
(20, 25, 5, ''),
(26, 36, 2, '14.1'),
(27, 36, 3, ''),
(28, 36, 4, ''),
(29, 36, 5, ''),
(38, 82, 2, ''),
(39, 82, 3, ''),
(40, 82, 4, ''),
(41, 82, 5, ''),
(43, 87, 1, ''),
(44, 50, 1, ''),
(45, 54, 2, ''),
(46, 54, 3, ''),
(47, 54, 4, ''),
(48, 54, 5, ''),
(49, 91, 1, ''),
(55, 108, 1, ''),
(57, 106, 2, '15.8'),
(58, 106, 3, '33.8'),
(59, 106, 4, '226'),
(60, 106, 5, ''),
(63, 121, 1, ''),
(76, 127, 1, ''),
(84, 140, 2, ''),
(85, 140, 3, ''),
(86, 140, 4, ''),
(87, 140, 5, ''),
(88, 139, 1, ''),
(89, 137, 1, ''),
(104, 192, 1, ''),
(113, 201, 2, ''),
(114, 201, 3, ''),
(115, 201, 4, ''),
(116, 201, 5, ''),
(121, 197, 2, ''),
(122, 197, 3, ''),
(123, 197, 4, ''),
(124, 197, 5, ''),
(125, 190, 1, ''),
(126, 177, 1, '13.8'),
(127, 176, 1, ''),
(128, 165, 1, ''),
(129, 164, 1, ''),
(130, 151, 1, ''),
(132, 206, 1, ''),
(133, 136, 1, ''),
(134, 132, 1, ''),
(140, 161, 2, ''),
(141, 161, 3, ''),
(142, 161, 4, ''),
(143, 161, 5, ''),
(144, 220, 1, '13.7'),
(145, 219, 1, ''),
(146, 215, 1, ''),
(147, 130, 1, ''),
(148, 123, 2, ''),
(149, 123, 3, ''),
(150, 123, 4, ''),
(151, 123, 5, ''),
(152, 112, 1, ''),
(153, 83, 1, ''),
(154, 74, 1, ''),
(156, 204, 1, ''),
(165, 237, 1, ''),
(166, 236, 2, ''),
(167, 236, 3, ''),
(168, 236, 4, ''),
(169, 236, 5, ''),
(170, 233, 1, ''),
(171, 232, 1, ''),
(172, 230, 1, ''),
(174, 238, 1, ''),
(179, 244, 2, '13.7/22.8'),
(180, 244, 3, '31.6/51.0'),
(181, 244, 4, ''),
(182, 244, 5, ''),
(185, 118, 1, ''),
(186, 84, 1, ''),
(191, 248, 2, ''),
(192, 248, 3, ''),
(193, 248, 4, ''),
(194, 248, 5, ''),
(196, 253, 1, ''),
(205, 261, 2, ''),
(206, 261, 3, ''),
(207, 261, 4, ''),
(208, 261, 5, ''),
(209, 260, 2, ''),
(210, 260, 3, ''),
(211, 260, 4, ''),
(212, 260, 5, ''),
(214, 269, 1, ''),
(267, 291, 2, ''),
(268, 291, 3, ''),
(269, 291, 4, ''),
(270, 291, 5, ''),
(273, 298, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `quote_review`
--

CREATE TABLE `quote_review` (
  `id` int(10) NOT NULL,
  `req_id` int(10) NOT NULL,
  `model_id` int(10) NOT NULL,
  `spare_tax` float NOT NULL,
  `spare_tot` int(10) NOT NULL,
  `labourcharge` int(10) NOT NULL,
  `concharge` int(10) NOT NULL,
  `total_charge` int(10) NOT NULL,
  `total_amt` int(10) NOT NULL,
  `disc_amt` int(10) NOT NULL,
  `plus_amt` int(10) NOT NULL,
  `pending_amt` int(50) NOT NULL,
  `cmr_paid` int(50) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `delivery_date` varchar(100) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `assign_to` int(10) NOT NULL,
  `notes` varchar(500) NOT NULL,
  `eng_notes` varchar(500) NOT NULL,
  `cust_remark` varchar(500) NOT NULL,
  `rating` int(10) NOT NULL,
  `cust_feed` varchar(500) NOT NULL,
  `emp_pts` double NOT NULL,
  `eng_ack` varchar(100) NOT NULL,
  `created_on` varchar(50) NOT NULL,
  `updated_on` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL,
  `onhold_date` varchar(50) NOT NULL,
  `onhold_reason` varchar(500) NOT NULL,
  `warranty_mode` varchar(50) NOT NULL,
  `code_no` varchar(50) NOT NULL,
  `code_date` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `cust_solution` varchar(500) NOT NULL,
  `notes_all` varchar(30) NOT NULL,
  `eng_notes_sol` varchar(500) NOT NULL,
  `eng_notess` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote_review`
--

INSERT INTO `quote_review` (`id`, `req_id`, `model_id`, `spare_tax`, `spare_tot`, `labourcharge`, `concharge`, `total_charge`, `total_amt`, `disc_amt`, `plus_amt`, `pending_amt`, `cmr_paid`, `payment_mode`, `delivery_date`, `comments`, `assign_to`, `notes`, `eng_notes`, `cust_remark`, `rating`, `cust_feed`, `emp_pts`, `eng_ack`, `created_on`, `updated_on`, `user_id`, `onhold_date`, `onhold_reason`, `warranty_mode`, `code_no`, `code_date`, `status`, `cust_solution`, `notes_all`, `eng_notes_sol`, `eng_notess`) VALUES
(1, 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-06-07 18:25:44', '', 0, 'Machine sifted to apollo specialty.replaced EPROM latest.Need to get payment', '', '	', 0, '', 0, '', '2017-06-07 18:25:48', '2017-07-26 13:05:52', 1, '', '', '', '', '', '', '', '', '', ''),
(2, 2, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-06-08 13:09:28', 'Delivered', 0, 'BUBBLE FORMS IN NEEDLE NO. 1 TUBING', 'dsd', '	', 0, '', 0, '', '2017-06-08 13:10:00', '2017-08-10 16:36:36', 1, '', '', '', '', '', '', '', '', '', '	'),
(3, 17, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-06-08 15:53:35', '', 0, 'PT QC RESULTS ARE NOT OK', '', '', 0, '', 0, '', '2017-06-08 15:56:45', '2017-06-08 15:56:45', 0, '2017-06-08 15:53:35', 'TROUBLE SHOOTING STILL CONTINIOUE', '', '', '', '', '', '', '', ''),
(4, 22, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-01 15:38:38', '', 0, '', '', '	', 0, '', 0, '', '2017-07-01 15:38:48', '2017-07-01 16:04:36', 43, '', '', '', '', '', '', 'have to do', '', '', ''),
(5, 21, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-03 13:20:30', '', 0, '', '', '	', 1, '', 0, '', '2017-07-03 13:20:49', '2017-07-03 13:20:49', 0, '', '', '', '', '', '', '', '', '', ''),
(6, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-03 14:20:03', 'Delivered', 9, 'PHOTOMETRIC CALIBRATION ISSUE', '', '		', 0, '', 0, '', '2017-07-03 14:23:24', '2017-07-17 13:41:45', 1, '', '', '', '', '', '', '', '', '', ''),
(7, 30, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-12 11:05:22', '', 0, 'test', '', 'tested', 0, '', 0, '', '2017-07-12 11:05:35', '2017-07-12 11:05:35', 0, '', '', '', '', '', '', '', '', '', ''),
(8, 25, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-12 11:14:46', '', 0, 'sssssssssssss', '', '		new remarks', 0, '', 0, '', '2017-07-12 11:14:59', '2017-07-26 13:05:28', 1, '', '', '', '', '', '', '', '', '', 'test notes'),
(9, 33, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-12 12:05:31', 'Delivered', 0, 'test notes new', '', '		new test remark', 0, '', 0, '', '2017-07-12 12:05:46', '2017-07-26 13:04:28', 1, '', '', '', '', '', '', '', '', '', ''),
(10, 36, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-12 16:19:18', 'Delivered', 0, 'first notes', '', '		first remark', 0, '', 0, '', '2017-07-12 16:26:26', '2017-07-29 15:46:31', 1, '', '', '', '', '', '', '', '', '', 'first notes'),
(11, 37, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-12 16:54:42', '', 0, 'eeeeeeeeeeeeeeee', '', 'ewewrwerwer', 0, '', 0, '', '2017-07-12 16:54:54', '2017-07-12 17:00:00', 1, '', '', '', '', '', '', '', '', '', '	eeeeeee'),
(12, 37, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-12 16:54:36', '', 0, 'eeeeeeeeeeeeeeee', '', 'ewewrwerwer', 0, '', 0, '', '2017-07-12 16:55:23', '2017-07-12 17:00:00', 1, '', '', '', '', '', '', '', '', '', '	eeeeeee'),
(13, 38, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-12 17:03:51', '', 0, '', '', '', 0, '', 0, '', '2017-07-12 17:03:57', '2017-07-12 17:03:57', 0, '', '', '', '', '', '', 'ssssssssssss', '', '', ''),
(14, 38, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-12 17:03:43', '', 0, 'wwwwwwwwwwwwww', '', '	eeeeeeeeeeeeee', 0, '', 0, '', '2017-07-12 17:04:12', '2017-07-12 17:04:12', 0, '', '', '', '', '', '', '', '', '', ''),
(15, 39, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-12 17:21:21', '', 18, 'second notes', '', 'second remarks', 0, '', 0, '', '2017-07-12 17:21:32', '2017-07-22 12:27:36', 1, '', '', '', '', '', '', '', '', '', 'second notes ma'),
(16, 40, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-12 17:36:54', 'Delivered', 18, 'test notess test notessss', '', '		cust jbjdkfhsjdkdgsdg sdfdfsdf', 0, '', 0, '', '2017-07-12 17:37:06', '2017-07-12 17:41:26', 1, '', '', '', '', '', '', '		fghdfgdfgfdgfdg fdg fdg', '', '', ''),
(17, 32, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-12 19:04:10', '', 0, '', '', '', 2, '', 0, 'accept', '2017-07-12 19:07:32', '2017-07-12 19:08:29', 34, '', '', '', '', '', '', '', '', '', '	Liquid filter was cleaned, fluidic circuit connections was checked. Instrument is working.'),
(18, 41, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-13 15:00', '', 0, '', '', '', 0, '', 0, 'accept', '2017-07-13 22:22:58', '2017-07-13 22:22:58', 0, '', '', '', '', '', '', '', '', '', 'I visited instrument, customer complaint that its show\"error 49.03.04,\r\nmeasure timeout,waiting for ACK\".check instrument \r\n\'pc rack assembly\'\r\nboard and re-connected cable and board .Again start instrument   ,its working properly.\r\n'),
(19, 43, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-14 18:48:37', '', 0, '', '', '', 0, '', 0, 'accept', '2017-07-14 18:50:15', '2017-07-14 18:50:15', 0, '', '', '', '', '', '', '', '', '', ''),
(20, 48, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-15 13:05:53', 'Delivered', 0, 'CLEAN PDR HOME SENSOR ', '', '	Clean PDR.', 1, '', 0, '', '2017-07-15 13:06:36', '2017-07-17 14:27:30', 1, '', '', '', '', '', '', '', '', '', ''),
(21, 47, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-15 17:12:37', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-07-15 17:18:38', '2017-07-17 14:28:26', 1, '', '', '', '', '', '', '', '', '', 'Checked instrument ,this problem is due to distrub of test parameter ,so correct the setting .'),
(22, 49, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-17 13:03:22', '', 0, '', '', '', 0, '', 0, '', '2017-07-17 13:09:24', '2017-07-22 12:54:56', 34, '2017-07-22 12:52:56', '', '', '', '', '', '', '', '', '	'),
(23, 46, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-17 14:28:38', '', 0, 'LLD cable issue replaced the same', '', '	replaced the LLD cable', 0, '', 0, '', '2017-07-17 14:29:06', '2017-07-17 14:29:06', 0, '', '', '', '', '', '', '', '', '', ''),
(24, 44, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-17 14:31:49', '', 0, 'Mapping issue ,done mapping ', '', '	', 0, '', 0, '', '2017-07-17 14:32:09', '2017-07-17 14:32:09', 0, '', '', '', '', '', '', '', '', '', ''),
(25, 50, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-17 17:00:06', 'Delivered', 0, '', '', '	', 3, '', 0, '', '2017-07-17 17:01:27', '2017-08-10 16:35:27', 1, '2017-07-17 17:06:03', '', '', '', '', '', 'rEPLACED pHOTOMETRIC BOARD WITH FIBER DONE MAPPING,PHOTOMETRIC CALIBRATION RUN CONTROL,RUN 5 SAMPLES.', '', '', ''),
(26, 52, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-19 13:55:22', '', 0, '', '', '', 0, '', 0, '', '2017-07-19 13:56:07', '2017-07-19 13:56:07', 0, '', '', '', '', '', '', '', '', '', ''),
(27, 51, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-20 20:58:15', '', 13, 'Routine maintenance', '', '	', 0, '', 0, '', '2017-07-20 20:58:39', '2017-07-22 12:27:17', 1, '', '', '', '', '', '', '', '', '', ''),
(28, 53, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-21 11:51:22', '', 0, '', '', '', 0, '', 0, 'accept', '2017-07-21 11:57:13', '2017-07-21 11:57:13', 0, '', '', '', '', '', '', 'Problem is due to product carasuel positioning sensor ,open instrument and clean sensor .And mapping instrument .it work properly', '', '', ''),
(29, 55, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-22 12:19:12', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-07-22 12:20:20', '2017-07-22 12:22:23', 1, '', '', '', '', '', '', 'replaced printer head.', '', '', ''),
(30, 57, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-24 14:24:16', 'Delivered', 0, 'Routine maintenance', '', '	', 2, '', 0, '', '2017-07-24 14:24:38', '2017-07-24 14:26:37', 1, '', '', '', '', '', '', '', '', '', ''),
(31, 57, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-24 14:24:16', 'Delivered', 0, 'Routine maintenance', '', '	', 2, '', 0, '', '2017-07-24 14:25:41', '2017-07-24 14:26:37', 1, '', '', '', '', '', '', '', '', '', ''),
(32, 56, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-24 14:26:44', '', 0, 'Routine Maintenance', '', '	', 0, '', 0, '', '2017-07-24 14:26:54', '2017-07-24 14:26:54', 0, '', '', '', '', '', '', '', '', '', ''),
(33, 59, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-24 18:48:41', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-07-24 18:49:34', '2017-08-01 17:44:59', 1, '', '', '', '', '', '', '', '', '', '			Weekly maintenance'),
(34, 60, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-25 17:03:58', 'Delivered', 0, '', '', '	', 2, '', 0, '', '2017-07-25 17:04:21', '2017-07-25 17:05:00', 1, '', '', '', '', '', '', '', '', '', ''),
(35, 61, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-26 13:01:35', 'Delivered', 0, 'Routine Maintenance', '', '	', 2, '', 0, '', '2017-07-26 13:01:52', '2017-07-26 13:04:05', 1, '', '', '', '', '', '', '', '', '', ''),
(36, 63, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-26 13:02:25', 'Delivered', 0, '', '', '	Product Drawer Temperature was high.Checked and filled coolant also lubricated coolant pump.Room temperature was high around 26-27.informed customer to maintain below 23deg.', 1, '', 0, '', '2017-07-26 13:03:03', '2017-07-27 11:46:24', 1, '', '', '', '', '', '', '', '', '', '	'),
(37, 62, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-26 15:44:50', 'Delivered', 0, 'Problem with FVIII calibration they found error in 3rd and 4th dilution', '', '	Mapping in eppendof cup was not proper.After mapping correctly issue solved.', 0, '', 0, '', '2017-07-26 15:45:31', '2017-07-31 13:41:32', 1, '', '', '', '', '', '', '', '', '', ''),
(38, 65, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-28 10:01:36', '', 0, '', '', '', 0, '', 0, '', '2017-07-28 10:08:51', '2017-08-11 10:52:11', 40, '', '', '', '', '', '', '', '', '', '		Visited in instrument, checked vacuum in pump and connection of tubing. Found problem in connection of filter and tube. Solved problem. Its working properly. '),
(39, 65, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-28 10:01:36', '', 0, '', '', '', 0, '', 0, '', '2017-07-28 10:12:07', '2017-08-11 10:52:11', 40, '', '', '', '', '', '', '', '', '', '		Visited in instrument, checked vacuum in pump and connection of tubing. Found problem in connection of filter and tube. Solved problem. Its working properly. '),
(40, 65, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-28 10:01:36', '', 0, '', '', '', 0, '', 0, '', '2017-07-28 10:12:26', '2017-08-11 10:52:11', 40, '', '', '', '', '', '', '', '', '', '		Visited in instrument, checked vacuum in pump and connection of tubing. Found problem in connection of filter and tube. Solved problem. Its working properly. '),
(41, 54, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-28 17:56:01', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-07-28 17:56:35', '2017-08-10 16:37:54', 1, '', '', '', '', '', '', 'I have replace the needle No3 and run the endorance now machine is working fine.', '', '', ''),
(42, 64, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-07-31 13:14:55', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-07-31 13:15:07', '2017-07-31 13:16:09', 1, '', '', '', '', '', '', '', '', '', ''),
(43, 67, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-01 15:00', 'Delivered', 0, 'System stuck', '', '	After installing OS and software problem solved', 3, '', 0, '', '2017-08-02 10:26:35', '2017-08-04 12:33:13', 1, '', '', '', '', '', '', 'Upgraded OS 107.03 to 108.08.02, Now instrument is working fine.', '', '', ''),
(44, 69, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-03 10:24:14', '', 0, 'sdfsdfds', '', '	asasasa', 0, '', 0, '', '2017-08-03 10:24:19', '2017-08-03 10:24:19', 0, '', '', '', '', '', '', '', '', '', ''),
(45, 77, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-03 13:46:15', 'Delivered', 0, '', '', '	After lubricating coolant pump problem solved.', 0, '', 0, '', '2017-08-03 13:57:35', '2017-08-03 14:26:39', 1, '', '', '', '', '', '', 'Due to too much dust and rust after lubrication problem solved', '', '', ''),
(46, 76, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-03 13:57:41', 'Delivered', 0, 'routine maintenance', '', '	', 0, '', 0, '', '2017-08-03 13:57:51', '2017-08-03 14:26:53', 1, '', '', '', '', '', '', '', '', '', ''),
(47, 75, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-03 13:57:57', 'Delivered', 0, 'Routine Maintenance', '', '	', 0, '', 0, '', '2017-08-03 13:58:08', '2017-08-03 14:27:08', 1, '', '', '', '', '', '', '', '', '', ''),
(48, 78, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-04 15:23:46', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-08-04 15:25:55', '2017-08-09 17:54:43', 1, '2017-08-04 15:23:46', 'Need to get spare approval', '', '', '', '', '	Lubricated the pump.need to change new pump', '', '', ''),
(49, 82, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-05 15:24:55', 'Delivered', 0, '', '', '	', 4, '', 0, '', '2017-08-05 15:29:27', '2017-08-05 15:44:44', 1, '', '', '', '', '', '', 'Factor 7 callibration  select the neoplastin lot number in callibration menu.', '', '', ''),
(50, 81, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-05 15:29:48', '', 0, '', '', '', 0, '', 0, 'accept', '2017-08-05 15:34:54', '2017-10-27 15:26:29', 1, '2017-08-05 15:29:48', 'Because there is printing issue in control values and patient result is printing clear.as per discuss with an sir. I am going to write the mail to Anil sir and boss', '', '', '', '', '', '', '', '	'),
(51, 86, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-08 12:46:55', 'Delivered', 0, 'Routine maintenance', '', '	', 0, '', 0, '', '2017-08-08 12:47:09', '2017-08-08 12:47:44', 1, '', '', '', '', '', '', '', '', '', ''),
(52, 87, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-08 13:30:12', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-08-08 13:30:52', '2017-08-08 13:31:34', 1, '', '', '', '', '', '', 'After removing paper cleaned the printer area.Problem solved', '', '', ''),
(53, 94, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-10 16:25:16', 'Delivered', 0, '', '', '	', 2, '', 0, '', '2017-08-10 16:31:52', '2017-08-10 16:34:37', 1, '', '', '', '', '', '', '', '', '', 'Printer head is faulty. Replaced with new one.'),
(54, 92, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-10 16:38:20', '', 0, '', '', '', 4, '', 0, 'accept', '2017-08-10 16:40:11', '2017-08-10 16:40:11', 0, '', '', '', '', '', '', 'Measurement and callibration of temperature done', '', '', ''),
(55, 95, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-10 17:47:03', '', 0, 'test notes entry', '', 'xcxcvx', 1, '', 0, '', '2017-08-10 17:47:07', '2018-02-13 14:51:02', 1, '', '', '', '', '', '', '', '', '', ''),
(56, 91, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-11 09:59:54', '', 0, '', '', '', 1, '', 0, 'accept', '2017-08-11 10:04:16', '2017-08-11 10:04:16', 0, '', '', '', '', '', '', 'Clean glass windows of rail and clean camera then done mapping ', '', '', ''),
(57, 96, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-11 10:04:39', '', 0, '', '', '', 0, '', 0, 'accept', '2017-08-11 10:10:54', '2017-08-16 16:29:18', 39, '2017-08-11 10:04:39', 'Need to replace x arm   belt\r\n\r\n', '', '', '', '', 'Routed x axis belt 180 degree and solve problem instrument in running condition but in future need to replace belt \r\nBecause some teeth of belt is damage \r\nWhen we routed belt 180 degree then damage teeth is not in use and belt working fine \r\n ', '', '', ''),
(58, 89, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-11 10:20:29', '', 0, '', '', '', 0, '', 0, 'accept', '2017-08-11 10:51:23', '2017-08-11 10:51:23', 0, '', '', '', '', '', '', '', '', '', 'Instrument in working condition, because x1axis belt is damage some corner, and in future problem is come due to this reason. '),
(59, 84, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-11 15:06:50', '', 0, '', '', '	', 0, '', 0, '', '2017-08-11 15:07:50', '2017-11-09 13:11:36', 1, '', '', '', '', '', '', 'Replaced PC Board.', '', '', 'Instrument working fine'),
(60, 97, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-11 19:20:42', '', 0, '', '', '', 0, '', 0, '', '2017-08-11 19:20:54', '2017-08-11 19:20:54', 0, '', '', '', '', '', '', '', '', '', ''),
(61, 98, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-12 12:51:03', '', 0, '', '', '', 0, '', 0, '', '2017-08-12 12:53:06', '2017-08-12 12:53:06', 0, '', '', '', '', '', '', 'Change cacl2 and tip for electronic  pipettes  and then run and control  sample and find good results ', '', '', ''),
(62, 93, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-14 14:51:49', '', 0, '', '', '', 0, '', 0, '', '2017-08-14 14:51:57', '2017-08-14 14:51:57', 0, '', '', '', '', '', '', '', '', '', ''),
(63, 100, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-14 14:52:04', '', 0, '', '', '', 0, '', 0, '', '2017-08-14 14:52:51', '2017-08-14 14:52:51', 0, '', '', '', '', '', '', 'troubleshooted for time being.But need to replace cap', '', '', ''),
(64, 101, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-16 16:19:06', '', 0, '', '', '', 0, '', 0, '', '2017-08-16 16:23:20', '2017-08-16 16:23:20', 0, '', '', '', '', '', '', 'Tubeing in between vacuum reservoir and electrovalve are damage so change tube and solve problem', '', '', ''),
(65, 102, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-18 12:13:13', '', 0, '', '', '', 0, '', 0, '', '2017-08-18 12:13:36', '2017-08-18 12:13:36', 0, '', '', '', '', '', '', '', '', '', 'Instrument calibration done'),
(66, 103, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-18 12:13:42', '', 0, '', '', '', 0, '', 0, '', '2017-08-18 12:13:50', '2017-08-18 12:13:50', 0, '', '', '', '', '', '', '', '', '', ''),
(67, 104, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-18 12:16:36', '', 0, '', '', '', 0, '', 0, '', '2017-08-18 12:16:51', '2017-08-18 12:16:51', 0, '', '', '', '', '', '', '', '', '', ''),
(68, 105, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-18 17:03:44', '', 0, '', '', '', 4, '', 0, '', '2017-08-18 17:04:22', '2017-08-18 17:04:22', 0, '', '', '', '', '', '', '', '', '', ''),
(69, 107, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-19 11:03:35', '', 0, '', '', '', 2, '', 0, '', '2017-08-19 11:13:06', '2017-08-19 11:13:06', 0, '', '', '', '', '', '', '', '', '', 'Temperature Problem is come due to temp senser not sensInstrument temperature  because heat sink comp are not working solved problem \r\nInstrument working properly'),
(70, 107, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-19 11:03:35', '', 0, '', '', '', 2, '', 0, '', '2017-08-19 11:32:46', '2017-08-19 11:32:46', 0, '', '', '', '', '', '', '', '', '', 'Temperature Problem is come due to temp senser not sensInstrument temperature  because heat sink comp are not working solved problem \r\nInstrument working properly'),
(71, 107, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-19 11:03:35', '', 0, '', '', '', 2, '', 0, '', '2017-08-19 11:32:47', '2017-08-19 11:32:47', 0, '', '', '', '', '', '', '', '', '', 'Temperature Problem is come due to temp senser not sensInstrument temperature  because heat sink comp are not working solved problem \r\nInstrument working properly'),
(72, 107, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-19 11:03:35', '', 0, '', '', '', 2, '', 0, '', '2017-08-19 11:32:48', '2017-08-19 11:32:48', 0, '', '', '', '', '', '', '', '', '', 'Temperature Problem is come due to temp senser not sensInstrument temperature  because heat sink comp are not working solved problem \r\nInstrument working properly'),
(73, 107, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-19 11:03:35', '', 0, '', '', '', 2, '', 0, '', '2017-08-19 11:32:49', '2017-08-19 11:32:49', 0, '', '', '', '', '', '', '', '', '', 'Temperature Problem is come due to temp senser not sensInstrument temperature  because heat sink comp are not working solved problem \r\nInstrument working properly'),
(74, 107, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-19 11:03:35', '', 0, '', '', '', 2, '', 0, '', '2017-08-19 11:32:50', '2017-08-19 11:32:50', 0, '', '', '', '', '', '', '', '', '', 'Temperature Problem is come due to temp senser not sensInstrument temperature  because heat sink comp are not working solved problem \r\nInstrument working properly'),
(75, 107, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-19 11:03:35', '', 0, '', '', '', 2, '', 0, '', '2017-08-19 11:32:51', '2017-08-19 11:32:51', 0, '', '', '', '', '', '', '', '', '', 'Temperature Problem is come due to temp senser not sensInstrument temperature  because heat sink comp are not working solved problem \r\nInstrument working properly'),
(76, 109, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-19 12:22:26', '', 0, '', '', '', 1, '', 0, '', '2017-08-19 12:23:48', '2017-08-19 12:23:48', 0, '', '', '', '', '', '', 'done instrument calibration and replaced cap waste container', '', '', ''),
(77, 106, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-19 15:12:35', 'Delivered', 0, 'PM&CAL', '', '	', 4, '', 0, '', '2017-08-19 15:17:57', '2017-08-24 15:38:16', 1, '', '', '', '', '', '', '', '', '', 'Instrument working satisfactory.'),
(78, 108, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-19 19:49:57', '', 0, '', '', '', 0, '', 0, '', '2017-08-19 19:50:56', '2017-08-19 19:50:56', 0, '', '', '', '', '', '', '', '', '', ''),
(79, 112, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-20 05:54:18', '', 0, '', '', '', 0, '', 0, '', '2017-08-20 05:56:26', '2017-10-27 15:19:17', 1, '2017-08-20 05:54:18', 'Biddlestone home senser is not available in stock. ', '', '', '', '', 'I changed optical sensor, instrument working properly', '', '', ''),
(80, 115, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-24 17:53:07', '', 0, '', '', '', 4, '', 0, '', '2017-08-24 17:53:29', '2017-10-27 15:18:24', 1, '', '', '', '', '', '', '', '', '', ''),
(81, 116, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-24 17:53:44', '', 0, '', '', '', 4, '', 0, '', '2017-08-24 17:55:16', '2017-08-24 17:55:16', 0, '2017-08-24 17:53:44', 'Due to AMC and part are not available.', '', '', '', '', '', '', '', ''),
(82, 113, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-28 17:38:13', '', 0, '', '', '	', 0, '', 0, '', '2017-08-28 17:38:46', '2017-10-27 15:19:02', 1, '', '', '', '', '', '', '', '', '', ''),
(83, 119, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-28 18:42:25', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-08-28 18:42:33', '2017-09-18 18:49:50', 1, '', '', '', '', '', '', '', '', '', ''),
(84, 117, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-28 22:57:18', '', 0, '', '', '', 4, '', 0, '', '2017-08-28 22:58:22', '2017-10-27 15:18:00', 1, '', '', '', '', '', '', 'Clean the printer and remove dust particles from printer.', '', '', ''),
(85, 120, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-29 18:52:28', '', 0, '', '', '', 0, '', 0, '', '2017-08-29 18:59:16', '2017-10-27 15:17:46', 1, '', '', '', '', '', '', '', '', '', '		Checked instrument, problem is  temperature sense cable is not working. Changed cable. It working properly. I\'m '),
(86, 121, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-30 15:49:23', '', 0, '', '', '	Dust in home sensor,clean the same instrument is working now', 0, '', 0, '', '2017-08-30 15:50:52', '2017-08-30 16:05:46', 1, '', '', '', '', '', '', 'Dust in home sensor clean the same. Instrument is working now.', '', '', ''),
(87, 122, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-30 17:29:16', '', 0, '', '', '', 0, '', 0, '', '2017-08-30 17:29:27', '2017-10-27 15:17:32', 1, '', '', '', '', '', '', '', '', '', ''),
(88, 124, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-31 11:47:58', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-08-31 11:48:07', '2017-09-29 13:39:20', 1, '', '', '', '', '', '', '', '', '', ''),
(89, 125, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-08-31 16:26:36', '', 0, '', '', '', 0, '', 0, '', '2017-08-31 16:27:15', '2017-10-27 15:16:43', 1, '2017-08-31 16:26:36', '', '', '', '', '', '', '', '', '	'),
(90, 126, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-01 12:55:53', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-01 13:00:22', '2017-09-08 16:16:50', 1, '', '', '', '', '', '', '', '', '', 'adjust printer ,need to replace printer thermic in future.'),
(91, 126, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-01 12:55:53', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-01 13:10:49', '2017-09-08 16:16:50', 1, '', '', '', '', '', '', '', '', '', 'adjust printer ,need to replace printer thermic in future.'),
(92, 127, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-01 13:11:16', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-01 13:12:43', '2017-09-08 16:15:43', 1, '', '', '', '', '', '', '', '', '', 'clean and re do the mapping of product carousol,clean the cuvette loading area.'),
(93, 123, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-01 13:37:27', '', 0, '', '', '', 4, '', 0, '', '2017-09-01 13:41:39', '2017-10-27 15:16:57', 1, '', '', '', '', '', '', '	We have make 1/15 dilution in between 1/7 & 1/40 dilutions for Immunodef Factor VIII test set up.\r\n\r\nFor PT comparison, we used same vial of PT Reagent on both Compact Max and Satellite Instrument.', '', '', ''),
(94, 129, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-01 13:34', 'Delivered', 0, '', '', '	', 2, '', 0, '', '2017-09-02 13:37:28', '2017-10-25 15:43:33', 1, '', '', '', '', '', '', '', '', '', 'Replaced with new keyboard, Now instrument is working fine'),
(95, 131, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-04 18:00', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-04 18:42:11', '2017-10-25 15:40:37', 1, '', '', '', '', '', '', 'Instrument is not start checked instrument it problem due to fuse F3(1A)\r\nChanged fuse. ', '', '', ''),
(96, 128, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-05 12:51:43', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-05 12:51:55', '2017-09-21 13:12:23', 1, '', '', '', '', '', '', '', '', '', ''),
(97, 132, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-05 13:25:30', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-05 13:27:49', '2017-10-25 15:40:23', 1, '', '', '', '', '', '', 'Problem due to dust in between barcode reader and product carousel glass ', '', '', ''),
(98, 133, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-06 09:19:23', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-06 09:19:49', '2017-10-25 15:40:08', 1, '', '', '', '', '', '', '', '', '', ''),
(99, 135, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-07 12:22:03', 'Delivered', 0, 'maintenance', '', '	', 0, '', 0, '', '2017-09-07 12:22:09', '2017-09-19 14:31:22', 1, '', '', '', '', '', '', '', '', '', ''),
(100, 134, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-07 12:22:25', 'Delivered', 0, 'maintenance routine', '', '	', 0, '', 0, '', '2017-09-07 12:22:34', '2017-09-19 14:31:45', 1, '', '', '', '', '', '', '', '', '', ''),
(101, 136, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-08 16:06:26', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-08 16:06:46', '2017-10-25 15:39:49', 1, '', '', '', '', '', '', '', '', '', ''),
(102, 137, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-09 18:00', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-10 01:38:41', '2017-09-22 17:55:07', 1, '', '', '', '', '', '', '', '', '', 'Needle is blocked, clean needle. After check program\r\nLoad new regent, its working properly. '),
(103, 141, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-15 11:35:06', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-15 11:35:43', '2017-09-18 18:48:36', 1, '', '', '', '', '', '', 'Reset PID RAM in drawer product solved', '', '', ''),
(104, 142, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-15 12:14:00', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-15 12:16:05', '2017-09-19 14:31:06', 1, '', '', '', '', '', '', '', '', '', ''),
(105, 143, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-15 13:19:18', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-15 13:21:46', '2017-09-18 18:46:31', 1, '2017-09-15 13:19:18', 'PM due is on 28th', '', '', '', '', '', '', '', ''),
(106, 139, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-15 15:21:12', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-15 15:21:25', '2017-09-22 13:50:34', 1, '', '', '', '', '', '', '', '', '', ''),
(107, 145, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-18 13:10:18', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-18 13:10:58', '2017-09-18 18:47:33', 1, '', '', '', '', '', '', 'Checked auto mode settings and did bidirectional interface.it worked', '', '', ''),
(108, 140, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-18 13:16:23', 'Delivered', 0, '', '', '	', 1, '', 0, '', '2017-09-18 13:17:17', '2017-09-21 13:12:02', 1, '', '', '', '', '', '', '', '', '', 'Do the mapping and change the suction tip'),
(109, 146, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-18 22:42:20', 'Delivered', 0, 'PM&CAL', '', '	', 0, '', 0, '', '2017-09-18 22:42:53', '2017-09-21 13:11:47', 1, '', '', '', '', '', '', 'PM and Callibration of the Start4', '', '', ''),
(110, 147, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-19 14:29:45', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-19 14:30:12', '2017-09-19 14:30:50', 1, '', '', '', '', '', '', 'Routine maintenance', '', '', ''),
(111, 148, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-20 16:42:59', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-20 16:43:09', '2017-09-20 16:43:48', 1, '', '', '', '', '', '', '', '', '', ''),
(112, 150, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-21 13:09:04', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-21 13:09:13', '2017-09-21 13:11:06', 1, '', '', '', '', '', '', '', '', '', ''),
(113, 152, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-22 13:49:05', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-22 13:49:48', '2017-09-22 13:50:19', 1, '', '', '', '', '', '', 'Performed Recalibration.Qc is in range.It is under observation', '', '', ''),
(114, 153, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-22 17:30:14', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-22 17:30:53', '2017-09-22 17:53:14', 1, '', '', '', '', '', '', 'Sample tube was empty so needle went to bottom of the tube.after checking prob solved', '', '', ''),
(115, 151, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-23 19:17:19', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-23 19:19:01', '2017-10-17 18:46:47', 1, '', '', '', '', '', '', '', '', '', 'Make program for drvv s, drvv c, PC, PS, ATiii, and run drvv program  for the test  '),
(116, 160, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-23 18:00', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-23 21:10:36', '2017-10-17 18:46:00', 1, '', '', '', '', '', '', 'Make program for TT and run calibration and test ', '', '', ''),
(117, 154, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-25 13:08:52', 'Delivered', 0, '', '', '		', 0, '', 0, '', '2017-09-25 13:09:12', '2017-09-25 13:13:06', 1, '', '', '', '', '', '', '', '', '', ''),
(118, 154, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-25 13:08:52', 'Delivered', 0, '', '', '		', 0, '', 0, '', '2017-09-25 13:10:10', '2017-09-25 13:13:06', 1, '', '', '', '', '', '', '', '', '', ''),
(119, 164, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-26 16:48:31', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-26 16:50:40', '2017-10-17 18:45:45', 1, '', '', '', '', '', '', 'decontaminate instrument done user maintenance run control .controls are in range.', '', '', 'APTT results and controles are in higher side'),
(120, 165, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-26 16:51:02', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-26 16:52:01', '2017-10-17 18:45:31', 1, '', '', '', '', '', '', 'decontaminate instrument run control.all are in range', '', '', ''),
(121, 167, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-26 16:00', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-26 18:59:48', '2017-10-17 18:45:01', 1, '', '', '', '', '', '', '', '', '', ''),
(122, 168, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-26 14:00', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-26 19:03:16', '2017-10-16 18:33:25', 1, '', '', '', '', '', '', '', '', '', ''),
(123, 168, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-26 14:00', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-26 19:04:00', '2017-10-16 18:33:25', 1, '', '', '', '', '', '', '', '', '', ''),
(124, 158, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-26 19:48:05', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-26 19:48:17', '2017-09-26 19:49:23', 1, '', '', '', '', '', '', '', '', '', ''),
(125, 169, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-26 19:53:45', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-26 19:54:03', '2017-10-16 18:33:04', 1, '', '', '', '', '', '', '', '', '', ''),
(126, 173, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-26 19:54:13', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-26 19:54:30', '2017-10-16 18:32:38', 1, '', '', '', '', '', '', '', '', '', ''),
(127, 175, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-25 18:00', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-26 19:57:09', '2017-10-16 18:32:03', 1, '', '', '', '', '', '', '', '', '', ''),
(128, 176, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-26 21:48:32', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-26 21:49:15', '2017-10-16 18:31:47', 1, '', '', '', '', '', '', '', '', '', ''),
(129, 174, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-26 22:23:42', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-26 22:26:19', '2017-10-16 18:32:24', 1, '', '', '', '', '', '', 'Check instrument and find 20 pluses volume issue so set  V pump and slove problem \r\nThen run PC PS ATIII and APCR test ', '', '', 'This instrument is 5 year warranty '),
(130, 161, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-26 23:02:22', '', 0, '', '', '', 4, '', 0, '', '2017-09-26 23:28:20', '2017-10-27 15:14:46', 1, '', '', '', '', '', '', '', '', '', ''),
(131, 85, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-26 23:28:45', '', 0, '', '', '', 4, '', 0, '', '2017-09-26 23:29:04', '2017-10-27 15:25:34', 1, '', '', '', '', '', '', '', '', '', ''),
(132, 110, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-26 23:29:16', '', 0, '', '', '', 4, '', 0, '', '2017-09-26 23:29:42', '2017-10-27 15:23:49', 1, '', '', '', '', '', '', '', '', '', ''),
(133, 111, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-26 23:32:12', '', 0, '', '', '', 4, '', 0, '', '2017-09-26 23:32:33', '2017-10-27 15:22:53', 1, '', '', '', '', '', '', '', '', '', ''),
(134, 114, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-26 23:32:40', '', 0, '', '', '', 4, '', 0, '', '2017-09-26 23:32:57', '2017-10-27 15:18:36', 1, '', '', '', '', '', '', '', '', '', ''),
(135, 83, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-26 23:33:06', '', 0, '', '', '', 4, '', 0, '', '2017-09-26 23:33:32', '2017-10-27 15:26:03', 1, '', '', '', '', '', '', '', '', '', ''),
(136, 58, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-26 23:33:40', '', 0, '', '', '', 4, '', 0, '', '2017-09-26 23:33:54', '2017-10-27 15:23:12', 1, '', '', '', '', '', '', '', '', '', ''),
(137, 177, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-27 16:11:26', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-27 19:45:18', '2017-10-16 18:31:32', 1, '', '', '', '', '', '', 'Buffer vial can not create vaccume beacuse tube connection is break, reconnected tube connector. Its working properly. ', '', '', ''),
(138, 74, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-28 10:38:02', '', 0, '', '', '', 0, '', 0, '', '2017-09-28 10:38:23', '2017-10-27 15:26:43', 1, '', '', '', '', '', '', '', '', '', ''),
(139, 179, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-28 10:39:40', '', 0, '', '', '', 0, '', 0, '', '2017-09-28 10:40:18', '2017-10-27 15:14:08', 1, '', '', '', '', '', '', '', '', '', ''),
(140, 178, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-28 10:40:29', '', 0, '', '', '', 0, '', 0, '', '2017-09-28 10:40:40', '2017-10-27 15:14:20', 1, '', '', '', '', '', '', '', '', '', ''),
(141, 99, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-28 10:40:58', '', 0, '', '', '', 0, '', 0, '', '2017-09-28 10:41:55', '2017-10-27 15:24:14', 1, '', '', '', '', '', '', '', '', '', ''),
(142, 90, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-28 10:42:03', '', 0, '', '', '', 0, '', 0, '', '2017-09-28 10:42:27', '2017-10-27 15:25:01', 1, '', '', '', '', '', '', '', '', '', ''),
(143, 159, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-28 21:33:28', '', 0, '', '', '', 4, '', 0, '', '2017-09-28 21:34:01', '2017-10-27 15:15:00', 1, '', '', '', '', '', '', '', '', '', ''),
(144, 180, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-28 21:34:27', '', 0, '', '', '', 4, '', 0, '', '2017-09-28 21:34:59', '2017-10-27 15:13:53', 1, '', '', '', '', '', '', 'PM and Calibration', '', '', ''),
(145, 182, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-29 13:37:03', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-29 13:37:11', '2017-10-16 18:07:43', 1, '', '', '', '', '', '', '', '', '', ''),
(146, 166, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-29 13:37:21', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-29 13:37:27', '2017-10-17 18:45:15', 1, '', '', '', '', '', '', '', '', '', ''),
(147, 184, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-29 17:33:05', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-29 17:33:14', '2017-10-03 20:26:50', 1, '', '', '', '', '', '', '', '', '', ''),
(148, 183, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-09-30 22:11:32', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-09-30 22:11:53', '2017-10-16 18:07:32', 1, '', '', '', '', '', '', '', '', '', ''),
(149, 188, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-03 13:22:30', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-10-03 13:22:44', '2017-10-03 20:26:36', 1, '', '', '', '', '', '', '', '', '', ''),
(150, 189, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-03 20:27:29', 'Delivered', 0, '', '', '		', 0, '', 0, '', '2017-10-03 20:28:38', '2017-10-16 18:07:13', 1, '', '', '', '', '', '', 'Change needle and done mapping solve problems', '', '', ''),
(151, 191, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-04 16:53:22', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-10-04 16:53:34', '2017-10-16 18:06:28', 1, '', '', '', '', '', '', '', '', '', ''),
(152, 190, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-04 16:00', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-10-05 07:13:25', '2017-10-16 18:06:42', 1, '', '', '', '', '', '', 'Done Instrument mapping. ', '', '', ''),
(153, 192, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-05 18:04:18', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-10-05 18:05:39', '2017-10-06 12:23:24', 1, '', '', '', '', '', '', 'Run PC FIb and drvv c calibration and control also run test ', '', '', ''),
(154, 194, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-05 18:41:56', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-10-05 18:42:03', '2017-10-06 12:22:43', 1, '', '', '', '', '', '', '', '', '', ''),
(155, 193, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-05 19:00', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-10-05 22:13:51', '2017-10-06 12:23:12', 1, '', '', '', '', '', '', 'Done needle straight, reconnected in sample needle position. Checked volume of dispence, it is ok. And temprature problem due to glycol pump is not work and heating so open and clean pump it is working properly. ', '', '', 'Sample Needle is bended and temperature is out of range'),
(156, 195, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-06 12:17:54', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-10-06 12:18:09', '2017-10-06 12:18:43', 1, '', '', '', '', '', '', '', '', '', ''),
(157, 196, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-07 21:36:50', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-10-07 21:37:20', '2017-10-16 18:05:29', 1, '', '', '', '', '', '', 'Solve problems', '', '', ''),
(158, 197, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-12 12:44:30', 'Delivered', 0, '', '', '	', 4, '', 0, '', '2017-10-12 12:45:53', '2017-10-16 18:02:14', 1, '', '', '', '', '', '', 'Syringe Tip replaced.', '', '', 'Instrument working satisfactory.'),
(159, 198, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-12 17:40:18', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-10-12 17:41:07', '2017-10-12 17:54:41', 1, '', '', '', '', '', '', 'replaced from spare box.they need new one for future', '', '', ''),
(160, 201, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-16 15:52:32', 'Delivered', 0, '', '', '	', 2, '', 0, '', '2017-10-16 16:31:27', '2017-10-16 17:59:59', 1, '', '', '', '', '', '', '', '', '', 'Replaced kit peltier. now instrument is working fine '),
(161, 203, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-16 18:21:31', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-10-16 18:21:41', '2017-10-16 18:31:15', 1, '', '', '', '', '', '', '', '', '', ''),
(162, 207, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-17 12:43:44', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-10-17 12:43:51', '2017-10-17 18:44:48', 1, '', '', '', '', '', '', '', '', '', ''),
(163, 206, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-17 23:52:48', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-10-17 23:54:45', '2017-10-25 15:39:29', 1, '', '', '', '', '', '', 'Arm Z movement is not proper,Clean arm and lubricate Z Pully,run tests.working OK', '', '', ''),
(164, 208, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-17 18:00', '', 0, '', '', '', 0, '', 0, '', '2017-10-18 06:29:50', '2017-10-27 15:13:40', 1, '', '', '', '', '', '', '', '', '', ''),
(165, 208, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-17 18:00', '', 0, '', '', '', 0, '', 0, '', '2017-10-18 06:31:13', '2017-10-27 15:13:40', 1, '', '', '', '', '', '', '', '', '', ''),
(166, 208, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-17 18:00', '', 0, '', '', '', 0, '', 0, '', '2017-10-18 06:31:14', '2017-10-27 15:13:40', 1, '', '', '', '', '', '', '', '', '', ''),
(167, 208, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-17 18:00', '', 0, '', '', '', 0, '', 0, '', '2017-10-18 06:31:16', '2017-10-27 15:13:40', 1, '', '', '', '', '', '', '', '', '', ''),
(168, 208, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-17 18:00', '', 0, '', '', '', 0, '', 0, '', '2017-10-18 06:31:17', '2017-10-27 15:13:40', 1, '', '', '', '', '', '', '', '', '', ''),
(169, 208, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-17 18:00', '', 0, '', '', '', 0, '', 0, '', '2017-10-18 06:31:18', '2017-10-27 15:13:40', 1, '', '', '', '', '', '', '', '', '', ''),
(170, 208, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-17 18:00', '', 0, '', '', '', 0, '', 0, '', '2017-10-18 06:31:19', '2017-10-27 15:13:40', 1, '', '', '', '', '', '', '', '', '', ''),
(171, 208, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-17 18:00', '', 0, '', '', '', 0, '', 0, '', '2017-10-18 06:32:12', '2017-10-27 15:13:40', 1, '', '', '', '', '', '', '', '', '', ''),
(172, 209, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-20 13:38:26', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-10-20 13:38:35', '2017-10-25 15:38:38', 1, '', '', '', '', '', '', '', '', '', ''),
(173, 210, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-23 12:11:10', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-10-23 12:11:19', '2017-10-25 15:37:41', 1, '', '', '', '', '', '', '', '', '', ''),
(174, 212, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-24 10:16:14', 'Delivered', 0, '', '', '	', 0, '', 0, '', '2017-10-24 10:16:38', '2017-10-25 15:37:27', 1, '', '', '', '', '', '', '', '', '', ''),
(175, 219, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-25 15:48:01', '', 0, '', '', '', 0, '', 0, '', '2017-10-25 15:52:52', '2017-10-27 15:15:28', 1, '', '', '', '', '', '', 'open and clean rail module,clean the theta motor pully and lubricate the same , check the mapping, run the test .', '', '', 'Cuvette stuck in rail'),
(176, 220, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-25 16:19:24', '', 0, '', '', '', 0, '', 0, '', '2017-10-25 16:20:22', '2017-10-27 15:15:12', 1, '', '', '', '', '', '', 'Reload all reagents and guide about Loading unloading and to run control. ', '', '', 'Reagents are not loaded properly by new technician. '),
(177, 163, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-25 17:13:14', '', 0, '', '', '', 0, '', 0, '', '2017-10-25 17:13:43', '2017-10-27 15:14:32', 1, '', '', '', '', '', '', '', '', '', ''),
(178, 130, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-25 17:14:23', '', 0, '', '', '', 0, '', 0, '', '2017-10-25 17:14:48', '2017-10-27 15:16:27', 1, '', '', '', '', '', '', '', '', '', ''),
(179, 216, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-25 17:15:33', '', 0, '', '', '', 0, '', 0, '', '2017-10-25 17:15:52', '2017-10-27 15:16:01', 1, '', '', '', '', '', '', '', '', '', ''),
(180, 215, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-25 17:16:09', '', 0, '', '', '', 0, '', 0, '', '2017-10-25 17:16:18', '2017-10-27 15:16:13', 1, '', '', '', '', '', '', '', '', '', ''),
(181, 221, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-25 17:39:13', '', 0, '', '', '', 0, '', 0, '', '2017-10-25 17:44:40', '2017-10-27 15:07:59', 1, '', '', '', '', '', '', 'Checked instrument, no problem found ininstrument,  problem is in 50micro liter plama dispensing by Pipette. Changed pipette. Solve problem. ', '', '', ''),
(182, 218, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-27 12:32:13', '', 0, '', '', '', 0, '', 0, '', '2017-10-27 12:32:22', '2017-10-27 15:15:50', 1, '', '', '', '', '', '', '', '', '', ''),
(183, 218, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-27 12:32:13', '', 0, '', '', '', 0, '', 0, '', '2017-10-27 12:36:18', '2017-10-27 15:15:50', 1, '', '', '', '', '', '', '', '', '', ''),
(184, 218, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-27 12:32:13', '', 0, '', '', '', 0, '', 0, '', '2017-10-27 12:37:13', '2017-10-27 15:15:50', 1, '', '', '', '', '', '', '', '', '', ''),
(185, 223, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-27 15:27:59', '', 0, '', '', '', 0, '', 0, '', '2017-10-27 15:28:11', '2017-10-27 15:35:28', 1, '', '', '', '', '', '', '', '', '', ''),
(186, 222, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-27 22:59:23', '', 0, '', '', '', 0, '', 0, '', '2017-10-27 22:59:45', '2017-10-28 09:34:22', 1, '', '', '', '', '', '', '', '', '', ''),
(187, 217, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-27 22:59:59', '', 0, '', '', '', 0, '', 0, '', '2017-10-27 23:10:46', '2017-10-28 09:36:41', 1, '', '', '', '', '', '', '', '', '', ''),
(188, 204, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-28 14:16:41', '', 0, '', '', '', 0, '', 0, '', '2017-10-28 14:17:01', '2017-10-31 12:58:15', 1, '', '', '', '', '', '', '', '', '', ''),
(189, 226, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-28 14:17:39', '', 0, '', '', '', 0, '', 0, '', '2017-10-28 14:18:05', '2017-10-31 12:58:04', 1, '', '', '', '', '', '', '', '', '', ''),
(190, 228, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-28 14:17:08', '', 0, '', '', '', 0, '', 0, '', '2017-10-28 14:18:59', '2017-10-31 12:57:48', 1, '', '', '', '', '', '', '', '', '', ''),
(191, 199, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-28 14:18:19', '', 0, '', '', '', 0, '', 0, '', '2017-10-28 14:19:04', '2017-10-31 12:58:33', 1, '', '', '', '', '', '', '', '', '', 'PM and Calibration of start4'),
(192, 230, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-31 14:38:16', '', 0, '', '', '', 0, '', 0, '', '2017-10-31 14:41:59', '2017-11-02 15:03:19', 1, '', '', '', '', '', '', 'Check the temperature it is showing 17 \'C in instrument and in temperature probe found that the filters are block from dust, replaced the filter clean the fan. Product temp. Is now 13\'C.', '', '', 'Product carousel temp. Out of range '),
(193, 229, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-31 15:32:14', '', 0, '', '', '	', 0, '', 0, '', '2017-10-31 15:32:24', '2017-10-31 15:32:24', 0, '', '', '', '', '', '', '', '', '', ''),
(194, 235, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-31 17:37:00', '', 0, '', '', '', 0, '', 0, '', '2017-10-31 17:37:08', '2017-11-02 15:02:19', 1, '', '', '', '', '', '', '', '', '', ''),
(195, 236, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-31 18:44:22', '', 0, '', '', '', 0, '', 0, '', '2017-10-31 18:53:19', '2017-11-02 15:01:51', 1, '', '', '', '', '', '', 'Refitted the pneumatic jack tubing tightly, and cleaned the shuttle rail, now Instrument is working fine.', '', '', 'Shuttle is not moving properly, leakage in pneumatic jack tubing.'),
(196, 234, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-31 20:46:39', '', 0, '', '', '', 0, '', 0, '', '2017-10-31 20:47:28', '2017-11-02 15:02:30', 1, '', '', '', '', '', '', '', '', '', 'Visited to produce the training certificates'),
(197, 233, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-31 20:47:36', '', 0, '', '', '', 0, '', 0, '', '2017-10-31 20:48:33', '2017-11-02 15:02:42', 1, '', '', '', '', '', '', 'Mapping done now the instrument is working fine', '', '', 'Lld issue with cephascrenn '),
(198, 232, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-31 20:48:42', '', 0, '', '', '', 0, '', 0, '', '2017-10-31 20:49:17', '2017-11-02 15:02:57', 1, '', '', '', '', '', '', '', '', '', 'Visited for lis purpose'),
(199, 231, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-31 20:49:23', '', 0, '', '', '', 0, '', 0, '', '2017-10-31 20:50:19', '2017-11-02 15:03:08', 1, '', '', '', '', '', '', '', '', '', 'Visited to give demo of the instrument'),
(200, 225, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-31 20:50:31', '', 0, '', '', '', 0, '', 0, '', '2017-10-31 20:51:24', '2017-11-02 15:03:41', 1, '', '', '', '', '', '', '', '', '', ''),
(201, 224, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-10-31 20:51:33', '', 0, '', '', '', 0, '', 0, '', '2017-10-31 20:54:13', '2017-11-02 15:04:00', 1, '', '', '', '', '', '', 'Removed and done mapping', '', '', 'Steel ball strucked in the washing well first position'),
(202, 237, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-01 12:19:28', '', 0, '', '', '', 0, '', 0, '', '2017-11-01 12:24:50', '2017-11-02 15:01:35', 1, '', '', '', '', '', '', 'Mapping for the sample pipetting and product pipetting was done. ', '', '', 'Needle was pipetting sample from the wall of the sample tube some time it touch the wall and give the error . May be needle was hit. '),
(203, 240, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-04 08:05:03', '', 0, '', '', '', 0, '', 0, '', '2017-11-04 08:07:31', '2017-11-04 13:56:53', 1, '', '', '', '', '', '', 'Neddle puresing volume is low cleaning needle and set volcur pump. Problem is solve. ', '', '', ''),
(204, 242, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-04 12:16:56', '', 0, '', '', '', 0, '', 0, '', '2017-11-04 12:17:07', '2017-11-04 13:56:37', 1, '', '', '', '', '', '', '', '', '', '');
INSERT INTO `quote_review` (`id`, `req_id`, `model_id`, `spare_tax`, `spare_tot`, `labourcharge`, `concharge`, `total_charge`, `total_amt`, `disc_amt`, `plus_amt`, `pending_amt`, `cmr_paid`, `payment_mode`, `delivery_date`, `comments`, `assign_to`, `notes`, `eng_notes`, `cust_remark`, `rating`, `cust_feed`, `emp_pts`, `eng_ack`, `created_on`, `updated_on`, `user_id`, `onhold_date`, `onhold_reason`, `warranty_mode`, `code_no`, `code_date`, `status`, `cust_solution`, `notes_all`, `eng_notes_sol`, `eng_notess`) VALUES
(205, 239, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-04 12:17:13', '', 0, '', '', '', 0, '', 0, '', '2017-11-04 12:17:23', '2017-11-04 13:57:07', 1, '', '', '', '', '', '', '', '', '', ''),
(206, 243, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-06 12:47:07', '', 0, '', '', '', 0, '', 0, '', '2017-11-06 12:47:17', '2017-11-06 13:32:02', 1, '', '', '', '', '', '', '', '', '', ''),
(207, 241, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-06 15:11:13', '', 0, '', '', '', 0, '', 0, '', '2017-11-06 15:11:55', '2017-11-06 18:13:35', 1, '', '', '', '', '', '', 'Replaced with new one and done mapping', '', '', 'Needle 3 broken'),
(208, 238, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-06 15:12:04', '', 0, '', '', '', 0, '', 0, '', '2017-11-06 15:12:44', '2017-11-06 18:13:52', 1, '', '', '', '', '', '', '', '', '', 'Bio logical validation'),
(209, 244, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-07 09:53:45', '', 0, '', '', '', 0, '', 0, '', '2017-11-07 09:56:54', '2017-11-07 16:35:26', 1, '', '', '', '', '', '', '', '', '', ''),
(210, 211, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-07 09:57:07', '', 0, '', '', '', 0, '', 0, '', '2017-11-07 09:57:34', '2017-11-13 15:22:36', 1, '2017-11-07 09:57:07', '', '', '', '', '', 'after replacing the I/O power board instrument is working fine.', '', '', 'In global Verification the arm No 2 is not checking suction pressure, then its giving a suction is not operating correctly. '),
(211, 246, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-07 13:51:29', '', 0, '', '', '', 0, '', 0, '', '2017-11-07 13:51:53', '2017-11-07 16:35:52', 1, '', '', '', '', '', '', '', '', '', 'routine maintenance'),
(212, 245, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-07 16:23:08', '', 0, '', '', '', 0, '', 0, '', '2017-11-07 16:32:04', '2017-11-07 16:35:39', 1, '', '', '', '', '', '', 'completed  the Calibration and run the quality control both PT & APTT are passed.\r\nPT 13.2 / 22.3 , APTT 32.5 / 52.0', '', '', ''),
(213, 247, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-08 15:10:17', '', 0, '', '', '', 0, '', 0, '', '2017-11-08 15:10:26', '2017-11-08 15:10:51', 1, '', '', '', '', '', '', '', '', '', ''),
(214, 118, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-08 22:47:51', '', 0, '', '', '', 0, '', 0, '', '2017-11-08 22:49:39', '2017-11-09 13:11:07', 1, '', '', '', '', '', '', 'Multifunction board replaced.', '', '', 'Instrument working fine.'),
(215, 248, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-09 13:18:41', '', 0, '', '', '', 0, '', 0, '', '2017-11-09 13:20:50', '2017-11-10 13:15:58', 1, '', '', '', '', '', '', 'Done the mapping arm 2 and clean the suction tip', '', '', 'Frequently cuvette missing'),
(216, 249, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-09 15:01:27', '', 0, '', '', '', 0, '', 0, '', '2017-11-09 15:04:33', '2017-11-10 13:13:06', 1, '', '', '', '', '', '', 'Visit in lab and found problem APTT regent. APTT regent contaminate and also not proper trained  technician so give training to all technician and solve issue ', '', '', ''),
(217, 252, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-10 16:26:58', '', 0, '', '', '', 0, '', 0, '', '2017-11-10 16:27:11', '2017-11-10 16:29:26', 1, '', '', '', '', '', '', '', '', '', ''),
(218, 251, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-10 16:27:22', '', 0, '', '', '', 0, '', 0, '', '2017-11-10 16:27:31', '2017-11-10 16:29:41', 1, '', '', '', '', '', '', '', '', '', ''),
(219, 253, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-11 12:35:09', '', 0, '', '', '', 0, '', 0, '', '2017-11-11 12:39:49', '2017-11-13 15:21:44', 1, '', '', '', '', '', '', 'Clean fibers and measurement area, but problem remain same, then press Q and start chronometric test  only. Need to replace photometricboard. ', '', '', 'Photometric board faulty.'),
(220, 250, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-13 09:10:38', '', 0, '', '', '', 0, '', 0, '', '2017-11-13 09:12:04', '2017-11-13 15:22:24', 1, '2017-11-13 09:10:38', '', '', '', '', '', 'Make program for fviii and fix also make program for fviii low curve and run calibration and control ', '', '', ''),
(221, 255, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-15 14:36:55', '', 0, '', '', '', 0, '', 0, '', '2017-11-15 14:37:58', '2017-11-15 15:51:18', 1, '', '', '', '', '', '', '', '', '', ''),
(222, 254, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-15 14:38:26', '', 0, '', '', '', 0, '', 0, '', '2017-11-15 14:38:48', '2017-11-15 15:51:32', 1, '', '', '', '', '', '', '', '', '', ''),
(223, 257, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-20 12:07:13', '', 0, '', '', '', 0, '', 0, '', '2017-11-20 12:07:50', '2017-12-14 15:06:10', 1, '', '', '', '', '', '', '', '', '', 'Preventive maintanence and training for new technicians'),
(224, 262, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-30 23:43:00', '', 0, '', '', '', 0, '', 0, '', '2017-11-30 23:43:22', '2017-12-14 15:05:37', 1, '', '', '', '', '', '', '', '', '', ''),
(225, 261, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-30 23:43:37', '', 0, '', '', '', 0, '', 0, '', '2017-11-30 23:45:20', '2017-12-14 15:07:37', 1, '', '', '', '', '', '', 'Remove the steel ball from shuttle rack after that machine is working fine.', '', '', 'Shuttle jam'),
(226, 260, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-11-30 23:45:40', '', 0, '', '', '', 0, '', 0, '', '2017-11-30 23:47:56', '2017-12-14 15:07:51', 1, '', '', '', '', '', '', 'Remove the steel ball from shuttle rack. Now machine is working fine.', '', '', 'Shuttle missing'),
(227, 265, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-12-11 21:17:41', '', 0, '', '', '', 0, '', 0, '', '2017-12-11 21:20:27', '2017-12-14 15:07:00', 1, '', '', '', '', '', '', 'Reloaded the software, and done all the mapping, and done calibration & QC. Now instrument is working fine. ', '', '', 'software issue. '),
(228, 264, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-12-11 22:53:16', '', 0, '', '', '', 0, '', 0, '', '2017-12-11 22:55:19', '2017-12-14 15:07:22', 1, '', '', 'credit', '44', '12-02-2018', 'credit note received', 'Solve error of instrument & Run control for pt & Appt ', '', '', ''),
(229, 270, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-12-14 14:06:43', '', 0, '', '', '', 0, '', 0, '', '2017-12-14 14:06:51', '2017-12-14 15:06:34', 1, '', '', '', '', '', '', '', '', '', ''),
(230, 271, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-12-15 12:22:33', '', 0, '', '', '', 0, '', 0, '', '2017-12-15 12:22:44', '2017-12-15 17:04:53', 1, '', '', '', '', '', '', '', '', '', ''),
(231, 272, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-12-15 17:05:43', '', 0, '', '', '', 0, '', 0, '', '2017-12-15 17:06:00', '2017-12-15 17:06:54', 1, '', '', '', '', '', '', '', '', '', ''),
(232, 274, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-12-15 19:12:19', '', 0, '', '', '', 0, '', 0, '', '2017-12-15 19:35:11', '2017-12-18 14:03:46', 1, '', '', '', '', '', '', 'Checked glycol pump is not liquid flow cooling reservoir to meeting block pump is not work .open and clean pump and rectifying the problem .after cleaning and holing its work properly. I', '', '', 'Visited in instrument and its show error \"incubation temperature is out of range \".and pipetting is blocked '),
(233, 269, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-12-16 11:34:30', '', 0, '', '', '', 0, '', 0, '', '2017-12-16 11:36:20', '2017-12-18 14:04:20', 1, '', '', '', '', '', '', 'Find some broken cuvette in cuter which blocked the cuter movement so remove it and solve issue', '', '', ''),
(234, 263, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-12-16 11:36:32', '', 0, '', '', '', 0, '', 0, '', '2017-12-16 11:39:39', '2017-12-16 11:39:39', 0, '2017-12-16 11:36:32', '', '', '', '', '', '', '', '', 'May time it\'s products drawer not close properly and give drawer closing issue '),
(235, 276, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-12-16 13:01:28', '', 0, '', '', '', 0, '', 0, '', '2017-12-16 13:01:36', '2017-12-18 14:03:29', 1, '', '', '', '', '', '', '', '', '', ''),
(236, 273, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-12-16 14:14:08', '', 0, '', '', '', 0, '', 0, '', '2017-12-16 14:16:51', '2017-12-18 14:03:59', 1, '', '', '', '', '', '', 'Check pipetting tip, measurement chamber and product drawer teprature and calibration was done for temp.\r\n', '', '', ''),
(237, 280, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-12-18 16:21:57', '', 0, '', '', '', 0, '', 0, '', '2017-12-18 16:22:07', '2017-12-18 16:24:47', 1, '', '', '', '', '', '', '', '', '', ''),
(238, 278, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-12-18 16:22:13', '', 0, '', '', '', 0, '', 0, '', '2017-12-18 16:22:28', '2017-12-18 16:25:02', 1, '', '', '', '', '', '', '', '', '', ''),
(239, 281, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-12-19 12:54:14', '', 0, '', '', '', 0, '', 0, '', '2017-12-19 12:54:26', '2017-12-19 12:57:45', 1, '', '', '', '', '', '', '', '', '', ''),
(240, 289, 7, 0, 900, 0, 0, 0, 900, 0, 0, 900, 0, '', '2017-12-30 12:18:24', '', 0, 'this is test data. please ignore itgfdhgfhfd', '', 'gsdgsdgsdgsdgsdgdsgds', 0, '', 0, '', '2017-12-30 12:18:55', '2018-02-08 18:35:10', 1, '2018-02-08 18:32:58', '', '', '', '', '', 'trjururt', '', '', 'ygiytitfityu'),
(241, 285, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2017-12-30 14:29:56', '', 0, '', '', '	', 0, '', 0, '', '2017-12-30 14:30:01', '2017-12-30 14:30:01', 0, '', '', '', '', '', '', '', '', '', ''),
(242, 276, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', '', 0, '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(243, 290, 4, 0, 0, 0, 897, 0, 898, 0, 1, 787, 111, '', '2018-02-08 13:32:09', 'Cdsafafas', 0, 'asfasdfasfasf', '', 'sadfsafsadfdasfsafasdfasfsdaf', 0, '', 0, '', '2018-02-08 13:32:22', '2018-02-08 16:47:51', 1, '2018-02-08 16:32:33', 'fdsafddsafsafs', '', '', '', '', 'fdsgdfsgsdgsdgd', '', '', 'sgdfsgsdgdsgsdgsdg'),
(244, 291, 5, 0, 0, 0, 897, 0, 897, 0, 0, 897, 0, '', '2018-02-08 17:13:54', '', 0, 'asfasfdsafasfasfasfasfsafsafsafasfsafsa', '', '	trhyrdtxfthytjhnygtuj', 0, '', 0, '', '2018-02-08 17:14:29', '2018-02-13 14:47:35', 1, '2018-02-13 14:47:11', 'sadfsafasfasfafafaf', '', '', '', '', 'hjutfujgtfujgtjitgui', '', '', 'rtdtrhygftrhycfghgd'),
(245, 292, 4, 0, 234, 111111, 897, 0, 112242, 0, 0, 0, 0, '', '2018-02-13 16:40:20', '', 0, 'ssssssssssssss', '', '	a new customer remarks', 1, '', 0, '', '2018-02-13 16:41:33', '2018-02-13 16:41:33', 0, '2018-02-13 16:40:20', 'sfsafasfsafasfsaf', '', '', '', '', '', '', '', ''),
(246, 294, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-13 18:24:10', '', 0, '', '', '', 0, '', 0, '', '2018-02-13 18:24:41', '2018-02-13 18:24:41', 0, '', '', '', '', '', '', 'safsafasfasfsafsafsafsafsfsafs', '', '', 'asffasfsafsaf'),
(247, 295, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-14 11:28:14', '', 0, '', '', '', 0, '', 0, '', '2018-02-14 11:28:53', '2018-02-14 11:28:53', 0, '', '', '', '', '', '', 'bbbbbbbbbbb', '', '', 'aaaaaaaa'),
(248, 296, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2018-02-14 14:11:52', '', 0, 'sasdssdadsssas', '', '	', 0, '', 0, '', '2018-02-14 14:13:05', '2018-02-14 16:13:03', 44, '2018-02-14 16:11:59', 'dfhdfhdfhdfhdhdhh', '', '', '', '', 'dhdfhdfhd', '', '', 'hgdfhdfhdfhdf'),
(249, 297, 8, 0, 1752, 0, 897, 0, 2649, 0, 0, 2649, 0, '', '2018-02-14 15:18:55', 'dsfgsdgsdgsd', 0, '', '', 'dsgsdgdsfgdsgsdgfdsgsdgsdgsdgfsd', 1, '', 0, '', '2018-02-14 15:19:28', '2018-02-14 15:28:25', 1, '', '', '', '', '', '', 'fsafdsafsdafsafsafdsafsdafasfafasfasfa', '', '', 'sdafasfasfasf'),
(250, 298, 3, 0, 86508706, 0, 897, 0, 86509603, 0, 0, 86509603, 0, '', '2018-02-14 16:32:20', 'Delivered', 0, '', '', 'sdgfdsgdsgsdgs', 0, '', 0, '', '2018-02-14 16:33:04', '2018-06-29 14:58:56', 1, '2018-02-14 16:32:20', 'fsdgsgsgsdgsgsdgsdgdsgsdgsdgdsgsd', '', '', '', '', 'gsfdgdsfgsdgfsdgsdgsdgdsgdsgsdgds', '', '', 'sgfsgfsdgsdgds');

-- --------------------------------------------------------

--
-- Table structure for table `quote_review_spare_details`
--

CREATE TABLE `quote_review_spare_details` (
  `id` int(10) NOT NULL,
  `request_id` int(50) NOT NULL,
  `spare_id` int(10) NOT NULL,
  `spare_qty` int(10) NOT NULL,
  `amt` int(10) NOT NULL,
  `spare_engg_id` int(50) NOT NULL,
  `approval_status` varchar(50) NOT NULL,
  `warranty_claim_status` varchar(100) NOT NULL,
  `desc_failure` varchar(500) NOT NULL,
  `why_failure` varchar(500) NOT NULL,
  `correct_action` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote_review_spare_details`
--

INSERT INTO `quote_review_spare_details` (`id`, `request_id`, `spare_id`, `spare_qty`, `amt`, `spare_engg_id`, `approval_status`, `warranty_claim_status`, `desc_failure`, `why_failure`, `correct_action`) VALUES
(1, 17, 0, 0, 0, 0, '', 'to_claim', '', '', ''),
(4, 1, 63, 1, 0, 1, 'approved', '', '', '', ''),
(7, 55, 0, 0, 0, 0, '', '', '', '', ''),
(8, 49, 114, 1, 0, 1, 'approved', '', '', '', ''),
(9, 49, 189, 1, 0, 1, 'approved', '', '', '', ''),
(15, 78, 236, 1, 0, 0, '', '', '', '', ''),
(16, 50, 262, 1, 0, 0, '', 'to_claim', 'ERROR 12.01.10', 'DURING TEST RUN', 'REPLACED PHOTOMETRIC BOARD '),
(17, 54, 40, 0, 0, 0, '', '', '', '', ''),
(18, 84, 274, 1, 0, 0, '', 'to_claim', '', '', ''),
(19, 100, 111, 1, 0, 0, '', '', '', '', ''),
(20, 126, 71, 1, 0, 0, '', '', '', '', ''),
(21, 126, 71, 1, 0, 0, '', '', '', '', ''),
(22, 253, 262, 1, 0, 1, 'approved', 'to_claim', '', '', ''),
(23, 95, 60, 1, 100, 0, '', '', '', '', ''),
(24, 95, 82, 2, 400, 0, '', '', '', '', ''),
(25, 95, 305, 3, 150, 0, '', '', '', '', ''),
(26, 289, 74, 2, 100, 1, 'rejected', 'to_claim', 'fghdfhf', 'hgdf', 'hhfgfgfdhfghfgh'),
(27, 289, 305, 2, 100, 1, 'rejected', '', '', '', ''),
(28, 289, 82, 2, 400, 1, 'rejected', '', '', '', ''),
(29, 289, 60, 3, 300, 1, 'rejected', '', '', '', ''),
(30, 292, 307, 1, 234, 0, '', '', '', '', ''),
(31, 294, 307, 1, 234, 1, 'approved', '', '', '', ''),
(32, 295, 308, 2, 282828, 1, 'approved', '', '', '', ''),
(33, 297, 309, 2, 1752, 1, 'approved', '', '', '', ''),
(34, 298, 310, 2, 86508706, 1, 'approved', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE `service_category` (
  `id` int(10) NOT NULL,
  `service_category` varchar(100) NOT NULL,
  `created_on` varchar(100) NOT NULL,
  `updated_on` varchar(100) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_category`
--

INSERT INTO `service_category` (`id`, `service_category`, `created_on`, `updated_on`, `user_id`) VALUES
(1, 'BREAKDOWN', '2017-06-08 14:54:12', '2017-07-14 13:19:10', 1),
(2, 'Weekly maintenance', '2017-07-24 16:06:17', '2017-07-24 16:06:17', 1),
(3, 'Monthly maintenance', '2017-07-24 16:06:31', '2017-07-24 16:06:31', 1),
(4, 'PM&CAL', '2017-07-24 16:06:59', '2017-07-24 16:06:59', 1),
(5, 'Calibration', '2017-07-24 16:07:13', '2017-07-24 16:07:13', 1),
(6, 'troubleshooting', '2017-07-24 16:07:24', '2017-07-24 16:07:24', 1),
(7, 'General Visit', '2017-07-24 16:07:41', '2017-07-24 16:07:41', 1),
(8, 'Software Upgradation', '2017-07-24 16:08:15', '2017-07-24 16:08:15', 1),
(9, 'application call', '2017-10-31 15:36:23', '2018-02-14 14:35:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service_charge`
--

CREATE TABLE `service_charge` (
  `id` int(10) NOT NULL,
  `service_cat_id` int(10) NOT NULL,
  `model` int(10) NOT NULL,
  `service_charge` int(50) NOT NULL,
  `created_on` varchar(100) NOT NULL,
  `updated_on` varchar(100) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_charge`
--

INSERT INTO `service_charge` (`id`, `service_cat_id`, `model`, `service_charge`, `created_on`, `updated_on`, `user_id`) VALUES
(1, 1, 4, 111111, '2018-02-09 16:24:49', '2018-02-09 16:24:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service_location`
--

CREATE TABLE `service_location` (
  `id` int(10) NOT NULL,
  `serv_loc_code` varchar(100) NOT NULL,
  `service_loc` varchar(100) NOT NULL,
  `concharge` int(10) NOT NULL,
  `zone_coverage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_location`
--

INSERT INTO `service_location` (`id`, `serv_loc_code`, `service_loc`, `concharge`, `zone_coverage`) VALUES
(1, '1', 'MUMBAI', 0, 'outstation'),
(2, '2', 'UP', 0, 'on_site'),
(3, '3', 'BHOPAL', 0, 'outstation'),
(4, '4', 'JAIPUR', 0, 'outstation'),
(5, '5', 'BANGALORE', 0, 'outstation'),
(6, '6', 'PATNA', 0, 'outstation'),
(7, '7', 'HYDERABAD', 0, 'outstation'),
(8, '8', 'CHENNAI', 0, 'outstation'),
(9, '9', 'Vellore', 0, 'outstation'),
(10, '10', 'Chitoor', 0, 'outstation'),
(11, '11', 'Telangana', 0, 'outstation'),
(12, '12', 'ANDHARA PRADESH', 0, 'outstation'),
(13, '13', 'Navi-Mumbai', 0, 'outstation'),
(14, '14', 'Rajasthan', 0, 'outstation'),
(15, '15', 'PUNE', 0, 'outstation'),
(16, '16', 'INDORE', 0, 'outstation'),
(17, '17', 'TAMILNADU', 0, 'outstation'),
(18, '11', 'choolai', 3333, 'on_site'),
(19, '61', 'Mannargudi', 897, 'on_site');

-- --------------------------------------------------------

--
-- Table structure for table `service_request`
--

CREATE TABLE `service_request` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `request_id` varchar(50) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `br_name` int(10) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `address` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `request_date` varchar(100) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  `created_on` varchar(50) NOT NULL,
  `updated_on` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL,
  `active_req` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_request`
--

INSERT INTO `service_request` (`id`, `request_id`, `cust_name`, `br_name`, `mobile`, `email_id`, `address`, `address1`, `request_date`, `status`, `created_on`, `updated_on`, `user_id`, `active_req`) VALUES
(00001, '00001', '00201', 218, '8168421620', '', 'AFMC Special Lab Camp Pune', '', '2017-06-02 15:06', 3, '2017-06-02 15:10:37', '2017-09-15 15:18:52', 1, 0),
(00002, '00002', '00202', 219, '9922568759', '', 'Hinjewadi Phase 2', '', '2017-06-02 15:12', 3, '2017-06-02 15:14:10', '2017-08-10 16:36:36', 1, 0),
(00003, '00003', '00002', 2, '9884057732', 'drmamta_s@apollohospitals.com', 'Greams Rd,Chennai', '', '2017-06-02 17:02', 5, '2017-06-02 17:06:01', '2017-07-26 13:05:52', 1, 1),
(00017, '00004', '00057', 67, '7829889829', '', '?No.31, Behind Big Marker, G Block, Bellary Road, Sahakara Nagar,?', '', '2017-06-06 14:52', 3, '2017-06-08 15:12:49', '2017-07-13 17:06:47', 1, 0),
(00018, '00005', '00328', 345, '8066628736', '', 'No.96,Industrial Suburb, II Stage,  Industrial Area, Yeshwantpur ', '', '2017-06-20 12:38', 1, '2017-06-20 12:44:48', '2017-10-27 15:04:01', 1, 0),
(00019, '00006', '00002', 2, '9884057732', 'drmamta_s@apollohospitals.com', 'Greams Rd,Chennai', '', '2017-06-20 12:49', 3, '2017-06-20 12:51:37', '2017-06-20 12:51:37', 1, 0),
(00020, '00007', '00069', 81, '9208052893', '', 'kgmc Trauma center chowk lucknow', '', '2017-05-25 19:27', 1, '2017-06-29 19:31:00', '2017-07-03 12:53:11', 1, 0),
(00021, 'P-00001', '00155', 168, '', '', '', '', '2017-07-01 00:00:00', 3, '', '2017-07-03 13:20:49', 1, 0),
(00023, '00008', '00017', 161, '7738058952', 'drvishal_m@apollohospitals.com', 'Belapur CBD', '', '2017-07-29 13:33', 3, '2017-07-03 13:45:08', '2017-07-03 13:45:08', 1, 0),
(00024, '00009', '00134', 147, '7314206705', '', '14 Manik Bagh Road, Indore, Madhya Pradesh', '', '2017-06-24 16:37', 3, '2017-07-03 16:48:08', '2017-07-06 14:18:49', 1, 0),
(00025, '00010', '00002', 2, '9884057732', 'drmamta_s@apollohospitals.com', 'Greams Rd,Chennai', '', '2017-07-03 18:36', 10, '2017-07-03 18:38:03', '2017-07-26 13:05:28', 1, 1),
(00026, '00011', '00059', 69, '9918883214', '', '1 st Floor, C block Pathology Lab SGPGI Lucknow', '', '2017-07-05 14:14', 3, '2017-07-05 14:15:46', '2017-07-05 14:15:46', 1, 0),
(00027, '00012', '00140', 153, '9826089221', '', '52-117, Bhadbhada Road, North TT Nagar, TT Nagar, Bhopal, Madhya Pradesh', '', '2017-07-06 11:00', 3, '2017-07-06 14:16:37', '2017-07-06 14:21:19', 1, 0),
(00028, '00013', '00004', 4, '9884050521', 'drdeepakala.n@simshospitals.com', 'vadapalani,Chennai', '', '2017-07-07 15:31', 3, '2017-07-07 15:33:18', '2017-07-07 15:33:18', 1, 0),
(00029, '00014', '00203', 220, '9822862623', '', 'Narhe, Pune', '', '2017-07-11 14:26', 3, '2017-07-11 14:27:38', '2017-07-11 14:32:36', 1, 0),
(00030, '00015', '00059', 70, '9452243957', '', ' 1st Floor, C block Hemtology Lab SGPGI Lucknow', '', '2017-07-11 18:22', 3, '2017-07-11 18:37:33', '2017-07-12 14:40:12', 1, 0),
(00031, '00016', '00173', 188, '8411000515', '', 'Kharadi Bypass Road, Hadapsar, Pune', '', '2017-07-12 10:00', 3, '2017-07-12 11:13:56', '2017-07-12 14:37:04', 1, 0),
(00032, '00017', '00057', 67, '7829889829', '', '?No.31, Behind Big Marker, G Block, Bellary Road, Sahakara Nagar,?', '', '2017-07-12 11:14', 3, '2017-07-12 11:16:55', '2017-07-12 19:08:29', 34, 0),
(00033, '00018', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-07-12 12:00', 3, '2017-07-12 12:01:19', '2017-07-26 13:04:28', 1, 1),
(00034, '00019', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-07-12 12:04', 3, '2017-07-12 12:04:47', '2017-07-12 12:04:47', 1, 0),
(00035, '00020', '00004', 4, '9884050521', 'drdeepakala.n@simshospitals.com', 'vadapalani,Chennai', '', '2017-07-12 13:34', 3, '2017-07-12 13:35:37', '2017-07-12 13:35:37', 1, 0),
(00036, '00021', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-07-12 15:58', 3, '2017-07-12 16:08:01', '2017-07-29 15:46:31', 1, 0),
(00037, '00022', '1', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-07-12 16:53', 3, '2017-07-12 16:53:45', '2017-07-12 17:00:00', 1, 0),
(00038, '00023', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-07-12 17:02', 1, '2017-07-12 17:03:07', '2017-07-12 17:04:12', 1, 0),
(00039, '00024', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-07-12 17:20', 4, '2017-07-12 17:20:58', '2017-07-22 12:27:36', 1, 0),
(00040, '00025', '00327', 344, '9962135225', 'vijaykumarv@yoursefficiently.com', 'no. 2 test nagar', '', '2017-07-12 17:35', 4, '2017-07-12 17:36:35', '2017-07-12 17:41:26', 1, 0),
(00041, '00026', '00066', 78, '9452177802', '', '7th floor RMLIMS Vibhuti khand Gomti Nagr LUCKNOW', '', '2017-07-13 17:08', 3, '2017-07-13 17:10:46', '2017-07-14 11:15:27', 1, 0),
(00042, '00027', '00003', 3, '9566275789', 'narasimhan@metropolisindia.com', 'Nungambkkam,Chennai', '', '2017-07-13 18:43', 3, '2017-07-13 18:43:53', '2017-07-13 18:43:53', 1, 0),
(00043, '00028', '61', 73, '9412901682', '', 'doiawalla jolly grand dehradun', '', '2017-07-13 18:00', 3, '2017-07-14 11:08:58', '2017-07-14 18:50:15', 39, 0),
(00044, '00029', '00102', 114, '9627370258', '', '7b astely hall dehradun', '', '2017-07-14 11:10', 3, '2017-07-14 11:11:50', '2017-07-17 14:32:09', 1, 0),
(00045, '00030', '00330', 347, '9840645605', '', 'new avadi rd chennai', '', '2017-07-14 13:56', 3, '2017-07-14 14:03:07', '2017-07-14 17:55:09', 1, 0),
(00046, '00031', '00150', 163, '9870889775', '', 'Wagle Industrial Estate, Ambika Nagar No 3', '', '2017-07-14 17:38', 3, '2017-07-14 17:44:13', '2017-07-17 14:29:06', 1, 0),
(00047, '00032', '00076', 88, '7579174424', '', ' rampur road  haldwani', '', '2017-07-15 12:43', 3, '2017-07-15 12:44:23', '2017-07-17 14:28:26', 1, 0),
(00048, '00033', '00140', 153, '9826089221', '', '52-117, Bhadbhada Road, North TT Nagar, TT Nagar, Bhopal, Madhya Pradesh', '', '2017-07-15 13:01', 3, '2017-07-15 13:03:29', '2017-07-17 14:27:30', 1, 0),
(00049, '00034', '00057', 67, '7829889829', '', '?No.31, Behind Big Marker, G Block, Bellary Road, Sahakara Nagar,?', '', '2017-07-17 12:59', 9, '2017-07-17 13:00:20', '2017-07-22 12:54:56', 34, 0),
(00050, '00035', '00136', 149, '9425302826', '', '120-121,Near Personal Branch SBI, Link Rd Number 3, E-3, Arera Colony, Bhopal, Madhya Pradesh ', '', '2017-07-17 16:44', 3, '2017-07-17 16:49:44', '2017-08-10 16:35:27', 1, 0),
(00051, '00036', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-07-18 13:29', 3, '2017-07-18 13:30:31', '2017-07-22 12:27:17', 1, 0),
(00052, '00037', '00069', 81, '9208052893', '', 'kgmc Trauma center chowk lucknow', '', '2017-07-18 15:11', 3, '2017-07-18 15:13:12', '2017-07-19 13:56:07', 39, 0),
(00053, '00038', '69', 81, '9208052893', '', 'kgmc Trauma center chowk lucknow', '', '2017-07-20 20:48', 3, '2017-07-20 20:51:00', '2017-07-21 11:57:13', 40, 0),
(00054, '00039', '00201', 218, '8168421620', '', 'AFMC Special Lab Camp Pune', '', '2017-07-20 20:52', 3, '2017-07-20 20:53:19', '2017-08-10 16:37:54', 1, 0),
(00055, '00040', '00123', 136, '9893264320', '', '6, Malipura, Bhopal, Madhya Pradesh', '', '2017-07-21 18:36', 3, '2017-07-21 18:38:51', '2017-08-28 17:45:44', 1, 0),
(00056, '00041', '00006', 6, '9962474499', '', 'PH rd,Chennai', '', '2017-07-22 12:09', 3, '2017-07-22 12:10:29', '2017-07-24 14:26:54', 1, 0),
(00057, '00042', '00007', 7, '9841429606', '', 'Anna Nagar,Chennai', '', '2017-07-22 12:12', 3, '2017-07-22 12:14:12', '2017-07-24 14:26:37', 1, 0),
(00058, '00043', '00202', 219, '9922568759', '', 'Hinjewadi Phase 2', '', '2017-07-24 15:22', 3, '2017-07-24 15:23:19', '2017-10-27 15:23:12', 1, 0),
(00059, '00044', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-07-24 18:35', 3, '2017-07-24 18:36:58', '2017-08-01 17:44:59', 1, 0),
(00060, '00045', '00013', 13, '9444200883', '', 'Perambur,Chennai', '', '2017-07-25 17:01', 3, '2017-07-25 17:02:55', '2017-07-25 17:05:00', 1, 0),
(00061, '00046', '00004', 4, '9884050521', 'drdeepakala.n@simshospitals.com', 'vadapalani,Chennai', '', '2017-07-25 17:55', 3, '2017-07-25 17:56:40', '2017-07-26 13:04:05', 1, 0),
(00062, '00047', '00066', 78, '9452177802', '', '7th floor RMLIMS Vibhuti khand Gomti Nagr LUCKNOW', '', '2017-07-26 12:48', 3, '2017-07-26 12:53:26', '2017-07-31 13:41:32', 1, 0),
(00063, '00048', '00005', 5, '9840605384', '', 'Chetepet,Chennai', '', '2017-07-26 12:57', 3, '2017-07-26 13:00:34', '2017-07-27 11:46:24', 1, 0),
(00064, '00049', '00006', 6, '9962474499', '', 'PH rd,Chennai', '', '2017-07-27 15:52', 3, '2017-07-27 15:54:33', '2017-07-31 13:16:09', 1, 0),
(00065, '00050', '61', 73, '9412901682', '', 'doiawalla jolly grand dehradun', '', '2017-07-27 12:00', 3, '2017-07-27 21:38:19', '2017-08-11 10:52:11', 40, 0),
(00066, '00051', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-07-29 10:48', 1, '2017-07-29 10:49:53', '2017-07-29 10:49:53', 1, 1),
(00067, '00052', '00026', 28, '04023480421', '', '230/235, Gemome Valley Road, Shamirper, ', '', '2017-08-01 17:40', 3, '2017-08-01 17:41:22', '2017-08-04 12:33:13', 1, 0),
(00068, '00053', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-08-03 10:22', 1, '2017-08-03 10:22:37', '2017-08-03 10:22:37', 1, 1),
(00069, '00054', '3', 3, '9566275789', 'narasimhan@metropolisindia.com', 'Nungambkkam,Chennai', '', '2017-08-03 10:23', 1, '2017-08-03 10:23:37', '2017-08-03 10:24:19', 1, 1),
(00070, '00055', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-08-03 10:24', 1, '2017-08-03 10:24:52', '2017-08-03 10:24:52', 1, 1),
(00071, '00056', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-08-03 10:26', 1, '2017-08-03 10:26:41', '2017-08-03 10:26:41', 1, 1),
(00072, '00057', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-08-03 10:30', 1, '2017-08-03 10:30:36', '2017-08-03 10:30:36', 1, 1),
(00073, '00058', '00327', 344, '9962135225', 'vijaykumarv@yoursefficiently.com', 'no. 2 test nagar', '', '2017-08-03 11:08', 1, '2017-08-03 11:09:06', '2017-08-03 11:09:06', 1, 0),
(00074, '00059', '00152', 165, '9819281495', '', 'Juhu', '', '2017-08-03 13:01', 3, '2017-08-03 13:03:25', '2017-10-27 15:26:43', 1, 0),
(00075, '00060', '00004', 4, '9884050521', 'drdeepakala.n@simshospitals.com', 'vadapalani,Chennai', '', '2017-08-03 13:42', 3, '2017-08-03 13:43:18', '2017-08-03 14:27:08', 1, 0),
(00076, '00061', '00006', 6, '9962474499', '', 'PH rd,Chennai', '', '2017-08-03 13:43', 3, '2017-08-03 13:44:33', '2017-08-03 14:26:53', 1, 0),
(00077, '00062', '00007', 7, '9841429606', '', 'Anna Nagar,Chennai', '', '2017-08-03 13:45', 3, '2017-08-03 13:45:52', '2017-08-03 14:26:39', 1, 0),
(00078, '00063', '00007', 7, '9841429606', '', 'Anna Nagar,Chennai', '', '2017-08-04 15:22', 3, '2017-08-04 15:23:17', '2017-08-09 17:54:43', 1, 0),
(00079, '00064', '00327', 344, '9962135225', 'vijaykumarv@yoursefficiently.com', 'no. 2 test nagar', '', '2017-08-04 15:44', 1, '2017-08-04 15:45:21', '2017-08-04 15:45:21', 1, 1),
(00080, 'P-00002', '00329', 346, '09811138416', '', '', '', '2017-08-05 00:00:00', 3, '', '', 0, 0),
(00081, '00065', '00203', 220, '9822862623', '', 'Narhe, Pune', '', '2017-08-05 15:19', 3, '2017-08-05 15:20:25', '2017-10-27 15:26:29', 1, 0),
(00082, '00066', '00201', 218, '8168421620', '', 'AFMC Special Lab Camp Pune', '', '2017-08-05 15:20', 3, '2017-08-05 15:22:01', '2017-08-05 15:44:44', 1, 0),
(00083, '00067', '00153', 166, '9892259766', 'parindakrupal@yahoo.co.in', 'near Trimurti film city', '', '2017-08-07 13:00', 3, '2017-08-07 15:45:07', '2017-10-27 15:26:03', 1, 0),
(00084, '00068', '00218', 235, '8877887712', '', 'BAILY ROAD , RAJA BAJAR', '', '2017-08-06 11:00', 3, '2017-08-07 15:47:53', '2017-11-09 13:11:36', 1, 0),
(00085, '00069', '00144', 156, '9869314808', 'jinal.dedhia@metropolisindia.com', '4rth floor, kohinoor commercial building', '', '2017-07-29 10:00', 3, '2017-08-07 17:24:54', '2017-10-27 15:25:34', 1, 0),
(00086, '00070', '00005', 5, '9840605384', '', 'Chetepet,Chennai', '', '2017-08-08 12:45', 3, '2017-08-08 12:46:34', '2017-08-08 12:47:44', 1, 0),
(00087, '00071', '00339', 356, '2223777800', '', 'Aga Hall Nesbit Road, Mazagaon Mumbai-400 010', '', '2017-08-08 13:21', 3, '2017-08-08 13:27:19', '2017-08-08 13:31:34', 1, 0),
(00088, '00072', '00056', 66, '9972089942', '', 'M S Ramaiah Narayana Heart Centre, Basement, M. S. Ramaiah Memorial Hospital, MSR College Road, MSRI', '', '2017-08-08 16:28', 1, '2017-08-08 16:29:38', '2017-08-08 16:29:38', 1, 0),
(00089, '00073', '00061', 73, '9412901682', '', 'doiawalla jolly grand dehradun', '', '2017-08-09 16:39', 3, '2017-08-09 17:08:34', '2017-08-11 10:51:23', 40, 0),
(00090, '00074', '00017', 161, '7738058952', 'drvishal_m@apollohospitals.com', 'Belapur CBD', '', '2017-08-09 17:08', 3, '2017-08-09 17:13:39', '2017-10-27 15:25:01', 1, 0),
(00091, '00075', '00069', 81, '9208052893', '', 'kgmc Trauma center chowk lucknow', '', '2017-08-10 13:01', 3, '2017-08-10 13:06:47', '2017-08-11 10:04:16', 39, 0),
(00092, '00076', '00203', 220, '9822862623', '', 'Narhe, Pune', '', '2017-08-10 14:43', 3, '2017-08-10 14:44:53', '2017-08-10 16:40:11', 33, 0),
(00093, '00077', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-08-10 14:56', 3, '2017-08-10 14:57:20', '2017-08-14 14:51:57', 32, 0),
(00094, '00078', '00340', 357, '9770836446', '', 'J.K. Town, Sarvadharam C-Sector, Kolar Road, Bhopal, Madhya Pradesh', 'J.K. Town, Sarvadharam C-Sector, Kolar Road, Bhopal, Madhya Pradesh', '2017-08-10 12:00', 3, '2017-08-10 16:24:50', '2017-08-10 16:34:37', 1, 0),
(00095, '00079', '00327', 344, '9962135225', 'vijaykumarv@yoursefficiently.com', 'no. 2 test nagar', '', '2017-08-10 17:45', 1, '2017-08-10 17:46:42', '2018-02-13 14:51:02', 1, 0),
(00096, '00080', '00061', 73, '9412901682', '', 'doiawalla jolly grand dehradun', '', '2017-08-11 09:54', 3, '2017-08-11 09:56:58', '2017-08-16 16:29:18', 39, 0),
(00097, '00081', '00327', 344, '9962135225', 'vijaykumarv@yoursefficiently.com', 'no. 2 test nagar', '', '2017-08-11 19:14', 1, '2017-08-11 19:14:56', '2017-08-11 19:20:54', 43, 1),
(00098, '00082', '00093', 104, '', '', 'satabdi bulding kgmc chowk lucknow', '', '2017-08-12 12:07', 3, '2017-08-12 12:08:11', '2017-08-12 12:53:06', 39, 0),
(00099, '00083', '00145', 157, '9892982681', 'rajesh.jadhav@metropolisindia.com', '6th floor,Global Hospital', '', '2017-08-12 12:10', 3, '2017-08-12 12:17:58', '2017-10-27 15:24:14', 1, 0),
(00100, '00084', '00003', 3, '9566275789', 'narasimhan@metropolisindia.com', 'Nungambkkam,Chennai', '', '2017-08-14 14:49', 3, '2017-08-14 14:51:15', '2017-08-14 14:52:51', 32, 0),
(00101, '00085', '00063', 75, '8439233948', '', '7 manjila bullding pathology lab moti katra agra', '', '2017-08-16 15:53', 3, '2017-08-16 15:54:18', '2017-08-16 16:23:20', 39, 0),
(00102, '00086', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-08-16 15:54', 3, '2017-08-16 15:56:38', '2017-08-18 12:13:36', 32, 0),
(00103, '00087', '00007', 7, '9841429606', '', 'Anna Nagar,Chennai', '', '2017-08-18 12:10', 3, '2017-08-18 12:12:13', '2017-08-18 12:13:50', 32, 0),
(00104, '00088', '00006', 6, '9962474499', '', 'PH rd,Chennai', '', '2017-08-18 12:14', 3, '2017-08-18 12:15:51', '2017-08-18 12:16:51', 32, 0),
(00105, '00089', '00171', 185, '9689911129', '', 'Deccan, Pune', '', '2017-08-18 15:27', 3, '2017-08-18 15:28:48', '2017-08-18 17:04:22', 33, 0),
(00106, '00090', '00208', 225, '9657722055', '', 'Bhandarkar Road, Deccan, Pune', '', '2017-08-18 16:02', 3, '2017-08-18 16:02:45', '2017-08-24 15:38:16', 1, 0),
(00107, '00091', '00147', 159, '8691077402', '', 'Charni road ', '', '2017-08-18 17:48', 3, '2017-08-18 17:49:06', '2017-08-19 11:32:51', 40, 0),
(00108, '00092', '00102', 114, '9627370258', '', '7b astely hall dehradun', '', '2017-08-19 12:14', 3, '2017-08-19 12:14:59', '2017-08-19 19:50:56', 39, 0),
(00109, '00093', '00003', 3, '9566275789', 'narasimhan@metropolisindia.com', 'Nungambkkam,Chennai', '', '2017-08-19 12:21', 3, '2017-08-19 12:21:54', '2017-08-19 12:23:48', 32, 0),
(00110, '00094', '00156', 169, '9323483252', 'swati.bokil@jankharia.com', '383 Bhaveshwar Vihar, Sardar V P Road', '', '2017-08-19 16:42', 3, '2017-08-19 16:43:35', '2017-10-27 15:23:49', 1, 0),
(00111, '00095', '00147', 159, '8691077402', '', 'Charni road ', '', '2017-08-19 16:45', 3, '2017-08-19 16:46:11', '2017-10-27 15:22:53', 1, 0),
(00112, '00096', '00059', 71, '9335903344', '', '1 st Floor, 24 hr Lab SGPGI Lucknow', '', '2017-08-19 16:55', 3, '2017-08-19 16:57:49', '2017-10-27 15:19:17', 1, 0),
(00113, '00097', '00145', 157, '9892982681', 'rajesh.jadhav@metropolisindia.com', '6th floor,Global Hospital', '', '2017-08-21 19:36', 3, '2017-08-21 19:37:36', '2017-10-27 15:19:02', 1, 0),
(00114, '00098', '00147', 159, '8691077402', '', 'Charni road ', '', '2017-08-22 15:07', 3, '2017-08-22 15:07:55', '2017-10-27 15:18:36', 1, 0),
(00115, '00099', '00180', 187, '', '', 'Swargate, Pune', '', '2017-08-23 17:38', 3, '2017-08-23 17:40:18', '2017-10-27 15:18:24', 1, 0),
(00116, '00100', '00206', 223, '9890304750', '', 'Shalimar Chowk, Nashik', '', '2017-08-24 13:22', 9, '2017-08-24 13:26:15', '2017-08-24 17:55:16', 33, 0),
(00117, '00101', '00172', 186, '', 'info@intoxlab.com', '375,Urawade, Tal- Muishi, Pune', '', '2017-08-28 13:22', 3, '2017-08-28 13:23:08', '2017-10-27 15:18:00', 1, 0),
(00118, '00102', '00218', 235, '8877887712', '', 'BAILY ROAD , RAJA BAJAR', '', '2017-08-28 14:09', 3, '2017-08-28 14:10:41', '2017-11-09 13:11:07', 1, 0),
(00119, '00103', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-08-28 18:41', 3, '2017-08-28 18:42:01', '2017-09-18 18:49:50', 1, 0),
(00120, '00104', '00103', 115, '9410058658', '', 'State Highway saifai ', '', '2017-08-29 14:30', 3, '2017-08-29 14:31:56', '2017-10-27 15:17:46', 1, 0),
(00121, '00105', '00141', 154, '7898003228', '', 'Sultania Rd, Royal Market, Near Hamidia Hospital, Bhopal, Madhya Pradesh ', '', '2017-08-30 15:45', 3, '2017-08-30 15:48:47', '2017-08-30 16:05:46', 1, 0),
(00122, '00106', '00004', 4, '9884050521', 'drdeepakala.n@simshospitals.com', 'vadapalani,Chennai', '', '2017-08-30 17:28', 3, '2017-08-30 17:28:54', '2017-10-27 15:17:32', 1, 0),
(00123, '00107', '00208', 225, '9657722055', '', 'Bhandarkar Road, Deccan, Pune', '', '2017-08-31 07:41', 3, '2017-08-31 07:43:39', '2017-10-27 15:16:57', 1, 0),
(00124, '00108', '00003', 3, '9566275789', 'narasimhan@metropolisindia.com', 'Nungambkkam,Chennai', '', '2017-08-31 11:46', 3, '2017-08-31 11:47:15', '2017-09-29 13:39:20', 1, 0),
(00125, '00109', '00009', 9, '9941623477', '', 'adyar,chennai', '', '2017-08-31 13:39', 3, '2017-08-31 13:40:20', '2017-10-27 15:16:43', 1, 0),
(00126, '00110', '00124', 137, '8871979174', '', 'MP State Branch Red Cross Bhawan Shivaji Nagar,, Bhopal, Madhya Pradesh ', '', '2017-08-31 15:32', 3, '2017-08-31 15:33:06', '2017-09-08 16:16:50', 1, 0),
(00127, '00111', '00136', 149, '9425302826', '', '120-121,Near Personal Branch SBI, Link Rd Number 3, E-3, Arera Colony, Bhopal, Madhya Pradesh ', '', '2017-09-01 12:46', 3, '2017-09-01 12:47:18', '2017-09-08 16:15:43', 1, 0),
(00128, '00112', '00007', 7, '9841429606', '', 'Anna Nagar,Chennai', '', '2017-09-02 12:29', 3, '2017-09-02 12:30:24', '2017-09-21 13:12:23', 1, 0),
(00129, '00113', '00031', 44, '9100974616', '', 'D.No: 48-10-12/2A, Opp. NTR University of Health Sciences, Vijayawada, Andhra Pradesh?', '', '2017-09-02 12:32', 3, '2017-09-02 12:33:10', '2017-10-25 15:43:33', 1, 0),
(00130, '00114', '00057', 67, '7829889829', '', '?No.31, Behind Big Marker, G Block, Bellary Road, Sahakara Nagar,?', '', '2017-09-02 16:57', 3, '2017-09-02 16:58:08', '2017-10-27 15:16:27', 1, 0),
(00131, '00115', '00103', 115, '9410058658', '', 'State Highway saifai ', '', '2017-09-04 16:12', 3, '2017-09-04 16:15:46', '2017-10-25 15:40:37', 1, 0),
(00132, '00116', '00068', 80, '8423740390', '', 'LANKA VARANASI', '', '2017-09-04 16:16', 3, '2017-09-04 16:17:45', '2017-10-25 15:40:23', 1, 0),
(00133, '00117', '00059', 71, '9335903344', '', '1 st Floor, 24 hr Lab SGPGI Lucknow', '', '2017-09-05 14:54', 3, '2017-09-05 14:56:41', '2017-10-25 15:40:08', 1, 0),
(00134, '00118', '00005', 5, '9840605384', '', 'Chetepet,Chennai', '', '2017-09-07 12:20', 3, '2017-09-07 12:20:48', '2017-09-19 14:31:45', 1, 0),
(00135, '00119', '00004', 4, '9884050521', 'drdeepakala.n@simshospitals.com', 'vadapalani,Chennai', '', '2017-09-07 12:20', 3, '2017-09-07 12:21:38', '2017-09-19 14:31:22', 1, 0),
(00136, '00120', '00140', 153, '9826089221', '', '52-117, Bhadbhada Road, North TT Nagar, TT Nagar, Bhopal, Madhya Pradesh', '', '2017-09-08 16:04', 3, '2017-09-08 16:05:40', '2017-10-25 15:39:49', 1, 0),
(00137, '00121', '00102', 114, '9627370258', '', '7b astely hall dehradun', '', '2017-09-09 14:50', 3, '2017-09-09 14:51:43', '2017-09-22 17:55:07', 1, 0),
(00138, '00122', '', 0, '', '', '', '', '', 0, '2017-09-09 14:51:43', '2017-09-09 14:51:43', 0, 0),
(00139, '00123', '00152', 165, '9819281495', '', 'Juhu', '', '2017-09-13 20:48', 3, '2017-09-13 20:49:09', '2017-09-22 13:50:34', 1, 0),
(00140, '00124', '00208', 225, '9657722055', '', 'Bhandarkar Road, Deccan, Pune', '', '2017-09-13 20:49', 3, '2017-09-13 20:50:30', '2017-09-21 13:12:02', 1, 0),
(00141, '00125', '00007', 7, '9841429606', '', 'Anna Nagar,Chennai', '', '2017-09-15 11:33', 3, '2017-09-15 11:34:24', '2017-09-18 18:48:36', 1, 0),
(00142, '00126', '00004', 4, '9884050521', 'drdeepakala.n@simshospitals.com', 'vadapalani,Chennai', '', '2017-09-15 12:12', 3, '2017-09-15 12:13:32', '2017-09-19 14:31:06', 1, 0),
(00143, '00127', '00004', 4, '9884050521', 'drdeepakala.n@simshospitals.com', 'vadapalani,Chennai', '', '2017-09-28 13:18', 3, '2017-09-15 13:18:52', '2017-09-18 18:46:31', 1, 0),
(00144, '00128', '00097', 108, '7388700670', '', '', '', '2017-09-18 00:00:00', 0, '', '', 0, 0),
(00145, '00129', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-09-18 13:08', 3, '2017-09-18 13:09:49', '2017-09-18 18:47:33', 1, 0),
(00146, '00130', '00200', 217, '9890300502', '', 'Dhole Palit Rd. Pune', '', '2017-09-18 13:17', 3, '2017-09-18 13:17:40', '2017-09-21 13:11:47', 1, 0),
(00147, '00131', '00006', 6, '9962474499', '', 'PH rd,Chennai', '', '2017-09-18 17:09', 3, '2017-09-18 17:10:26', '2017-09-19 14:30:50', 1, 0),
(00148, '00132', '00004', 4, '9884050521', 'drdeepakala.n@simshospitals.com', 'vadapalani,Chennai', '', '2017-09-19 15:05', 3, '2017-09-19 15:06:04', '2017-09-20 16:43:48', 1, 0),
(00149, '00133', '00009', 360, '9941623477', '', '', '', '2017-09-21 00:00:00', 0, '', '', 0, 0),
(00150, '00134', '00005', 5, '9840605384', '', 'Chetepet,Chennai', '', '2017-09-21 13:07', 3, '2017-09-21 13:08:04', '2017-09-21 13:11:06', 1, 0),
(00151, '00135', '00102', 114, '9627370258', '', '7b astely hall dehradun', '', '2017-09-22 13:41', 3, '2017-09-22 13:42:22', '2017-10-17 18:46:47', 1, 0),
(00152, '00136', '00006', 6, '9962474499', '', 'PH rd,Chennai', '', '2017-09-22 13:47', 3, '2017-09-22 13:48:33', '2017-09-22 13:50:19', 1, 0),
(00153, '00137', '00006', 6, '9962474499', '', 'PH rd,Chennai', '', '2017-09-22 17:28', 3, '2017-09-22 17:29:26', '2017-09-22 17:53:14', 1, 0),
(00154, '00138', '00007', 7, '9841429606', '', 'Anna Nagar,Chennai', '', '2017-09-22 18:04', 3, '2017-09-22 18:05:06', '2017-09-25 13:13:06', 1, 0),
(00155, '00139', '00143', 155, '9833031032', 'manisha.ramani@srl.in', 'Plot No 1, Prime Square building,Next to Patel Petrol Pump,S.V. Road,Goregaon West', '', '2017-09-23 13:35', 1, '2017-09-23 13:38:18', '2017-09-23 13:38:18', 1, 0),
(00156, '00140', '00143', 155, '9833031032', 'manisha.ramani@srl.in', 'Plot No 1, Prime Square building,Next to Patel Petrol Pump,S.V. Road,Goregaon West', '', '2017-09-23 13:38', 1, '2017-09-23 13:38:56', '2017-09-23 13:38:56', 1, 0),
(00157, '00141', '00143', 155, '9833031032', 'manisha.ramani@srl.in', 'Plot No 1, Prime Square building,Next to Patel Petrol Pump,S.V. Road,Goregaon West', '', '2017-09-23 13:48', 1, '2017-09-23 13:48:44', '2017-09-23 13:48:44', 1, 0),
(00158, 'P-00003', '00004', 4, '9884050521', 'drdeepakala.n@simshospitals.com', 'vadapalani,Chennai', '', '2017-09-23', 3, '', '2017-09-26 19:49:23', 1, 0),
(00159, 'P-00004', '00169', 183, '9890125380', '', 'Balgandharve Road, Pune', '', '2017-09-23', 3, '', '2017-10-27 15:15:00', 1, 0),
(00160, '00142', '00061', 73, '9412901682', '', 'doiawalla jolly grand dehradun', '', '2017-09-23 20:03', 3, '2017-09-23 20:04:30', '2017-10-17 18:46:00', 1, 0),
(00161, 'P-00005', '00143', 155, '9833031032', 'manisha.ramani@srl.in', 'Plot No 1, Prime Square building,Next to Patel Petrol Pump,S.V. Road,Goregaon West', '', '2017-09-23', 3, '', '2017-10-27 15:14:46', 1, 0),
(00162, '00143', '00396', 417, '6555555555556', '', '', '', '2017-09-25 00:00:00', 0, '', '', 0, 0),
(00163, 'P-00006', '00051', 61, '9663827717', '', 'HCG Towers No 8, Kalinga Rao Road, HMT Estate, Sampangiram Nagar, Bengaluru,', '', '2017-09-26', 3, '', '2017-10-27 15:14:32', 1, 0),
(00164, '00144', '00136', 149, '9425302826', '', '120-121,Near Personal Branch SBI, Link Rd Number 3, E-3, Arera Colony, Bhopal, Madhya Pradesh ', '', '2017-09-26 13:21', 3, '2017-09-26 13:22:10', '2017-10-17 18:45:45', 1, 0),
(00165, '00145', '00136', 149, '9425302826', '', '120-121,Near Personal Branch SBI, Link Rd Number 3, E-3, Arera Colony, Bhopal, Madhya Pradesh ', '', '2017-09-26 13:35', 3, '2017-09-26 13:36:25', '2017-10-17 18:45:31', 1, 0),
(00166, '00146', '00005', 5, '9840605384', '', 'Chetepet,Chennai', '', '2017-09-26 13:38', 3, '2017-09-26 13:38:59', '2017-10-17 18:45:15', 1, 0),
(00167, '00147', '00059', 70, '9452243957', '', ' 1st Floor, C block Hemtology Lab SGPGI Lucknow', '', '2017-09-26 14:42', 3, '2017-09-26 14:43:38', '2017-10-17 18:45:01', 1, 0),
(00168, '00148', '00059', 70, '9452243957', '', ' 1st Floor, C block Hemtology Lab SGPGI Lucknow', '', '2017-09-26 14:42', 3, '2017-09-26 14:44:35', '2017-10-16 18:33:25', 1, 0),
(00169, '00149', '00059', 70, '9452243957', '', ' 1st Floor, C block Hemtology Lab SGPGI Lucknow', '', '2017-09-26 14:42', 3, '2017-09-26 14:45:40', '2017-10-16 18:33:04', 1, 0),
(00170, '00150', '', 0, '', '', '', '', '', 0, '2017-09-26 14:47:31', '2017-09-26 14:47:31', 1, 0),
(00171, '00151', '', 0, '', '', '', '', '', 0, '2017-09-26 14:47:34', '2017-09-26 14:47:34', 1, 0),
(00172, '00152', '', 0, '', '', '', '', '', 0, '2017-09-26 14:47:35', '2017-09-26 14:47:35', 1, 0),
(00173, '00153', '00059', 70, '9452243957', '', ' 1st Floor, C block Hemtology Lab SGPGI Lucknow', '', '2017-09-26 14:49', 3, '2017-09-26 14:50:23', '2017-10-16 18:32:38', 1, 0),
(00174, '00154', '00066', 78, '9452177802', '', '7th floor RMLIMS Vibhuti khand Gomti Nagr LUCKNOW', '', '2017-09-26 19:17', 3, '2017-09-26 19:20:24', '2017-10-16 18:32:24', 1, 0),
(00175, '00155', '00386', 405, '77777777777', '', 'LUCKNOW,UP', '', '2017-09-26 19:45', 3, '2017-09-26 19:46:44', '2017-10-16 18:32:03', 1, 0),
(00176, '00156', '00069', 81, '9208052893', '', 'kgmc Trauma center chowk lucknow', '', '2017-09-26 20:56', 3, '2017-09-26 20:57:58', '2017-10-16 18:31:47', 1, 0),
(00177, '00157', '00070', 82, '9208052893', '', 'CVTS LAB  KGMC chowk lucknow', '', '2017-09-27 15:19', 3, '2017-09-27 15:24:43', '2017-10-16 18:31:32', 1, 0),
(00178, 'P-00007', '00161', 174, '9757209333', '', 'Forites hospital sector 10, Vashi', '', '2017-09-27', 3, '', '2017-10-27 15:14:20', 1, 0),
(00179, 'P-00008', '00162', 175, '9619952626', '', 'Opp. KEM Hospital', '', '2017-09-27', 3, '', '2017-10-27 15:14:08', 1, 0),
(00180, 'P-00009', '00182', 197, '9822329832', '', 'Bajaj Marg, Beed Bypass Rd. Aurangabad', '', '2017-09-28', 3, '', '2017-10-27 15:13:53', 1, 0),
(00181, '00158', '00397', 418, '9538869421', '', '', '', '2017-09-29 00:00:00', 0, '', '', 0, 0),
(00182, '00159', '00005', 5, '9840605384', '', 'Chetepet,Chennai', '', '2017-09-29 13:36', 3, '2017-09-29 13:36:29', '2017-10-16 18:07:43', 1, 0),
(00183, '00160', '00149', 162, '9833645854', 'jkurkundi8@gmail.com', 'Anushakti nagar', '', '2017-09-29 15:57', 3, '2017-09-29 15:58:17', '2017-10-16 18:07:32', 1, 0),
(00184, '00161', '00007', 7, '9841429606', '', 'Anna Nagar,Chennai', '', '2017-09-29 17:32', 3, '2017-09-29 17:32:37', '2017-10-03 20:26:50', 1, 0),
(00185, '00162', '00001', 1, '9841313358', 'lakshmanin@gmail.com', '', '', '2017-10-03 00:00:00', 0, '', '', 0, 0),
(00186, '00163', '00002', 2, '9884057732', 'drmamta_s@apollohospitals.com', '', '', '2017-10-03 00:00:00', 0, '', '', 0, 0),
(00187, '00164', '00001', 1, '9841313358', 'lakshmanin@gmail.com', '', '', '2017-10-03 00:00:00', 0, '', '', 0, 0),
(00188, '00165', '00003', 3, '9566275789', 'narasimhan@metropolisindia.com', 'Nungambkkam,Chennai', '', '2017-10-03 13:21', 3, '2017-10-03 13:22:01', '2017-10-03 20:26:36', 1, 0),
(00189, '00166', '00066', 78, '9452177802', '', '7th floor RMLIMS Vibhuti khand Gomti Nagr LUCKNOW', '', '2017-10-03 20:24', 3, '2017-10-03 20:25:45', '2017-10-16 18:07:13', 1, 0),
(00190, '00167', '00101', 113, '9198518227', '', 'trauma center kamc chowk lucknow', '', '2017-10-04 14:33', 3, '2017-10-04 14:34:42', '2017-10-16 18:06:42', 1, 0),
(00191, '00168', '00004', 4, '9884050521', 'drdeepakala.n@simshospitals.com', 'vadapalani,Chennai', '', '2017-10-04 16:52', 3, '2017-10-04 16:52:49', '2017-10-16 18:06:28', 1, 0),
(00192, '00169', '00102', 114, '9627370258', '', '7b astely hall dehradun', '', '2017-10-04 17:26', 3, '2017-10-04 17:27:37', '2017-10-06 12:23:24', 1, 0),
(00193, '00170', '00060', 72, '7060771155', '', 'nirala nagar lucknow', '', '2017-10-05 17:47', 3, '2017-10-05 17:48:48', '2017-10-06 12:23:12', 1, 0),
(00194, '00171', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-10-05 18:40', 3, '2017-10-05 18:41:29', '2017-10-06 12:22:43', 1, 0),
(00195, '00172', '00006', 6, '9962474499', '', 'PH rd,Chennai', '', '2017-10-06 12:16', 3, '2017-10-06 12:17:21', '2017-10-06 12:18:43', 1, 0),
(00196, '00173', '00059', 71, '9335903344', '', '1 st Floor, 24 hr Lab SGPGI Lucknow', '', '2017-10-07 21:30', 3, '2017-10-07 21:32:37', '2017-10-16 18:05:29', 1, 0),
(00197, '00174', '00201', 218, '8168421620', '', 'AFMC Special Lab Camp Pune', '', '2017-10-12 09:04', 3, '2017-10-12 09:05:53', '2017-10-16 18:02:14', 1, 0),
(00198, '00175', '00005', 5, '9840605384', '', 'Chetepet,Chennai', '', '2017-10-12 17:34', 3, '2017-10-12 17:34:47', '2017-10-12 17:54:41', 1, 0),
(00199, '00176', '00172', 186, '2331122546666', 'info@intoxlab.com', '375,Urawade, Tal- Muishi, Pune', '', '2017-10-12 17:50', 3, '2017-10-12 17:51:11', '2017-10-31 12:58:33', 1, 0),
(00200, '00177', '00008', 8, '9994780672', 'surendar61@gmail.com', '', '', '2017-10-13 00:00:00', 0, '', '', 0, 0),
(00201, '00178', '00019', 19, '11111114444444', '', 'Road No. 1, Banjara Hills, Hyderabad', '', '2017-10-16 13:50', 3, '2017-10-16 13:51:18', '2017-10-16 17:59:59', 1, 0),
(00202, '00179', '', 0, '', '', '', '', '', 0, '2017-10-16 13:51:18', '2017-10-16 13:51:18', 0, 0),
(00203, '00180', '00004', 4, '9884050521', 'drdeepakala.n@simshospitals.com', 'vadapalani,Chennai', '', '2017-10-16 15:25', 3, '2017-10-16 15:26:01', '2017-10-16 18:31:15', 1, 0),
(00204, '00181', '00102', 114, '9627370258', '', '7b astely hall dehradun', '', '2017-10-16 17:42', 3, '2017-10-16 17:43:18', '2017-10-31 12:58:15', 1, 0),
(00205, 'P-00010', '00153', 166, '9892259766', 'parindakrupal@yahoo.co.in', 'near Trimurti film city', '', '2017-10-16', 0, '', '2017-11-14 14:09:30', 1, 0),
(00206, '00182', '00140', 153, '9826089221', '', '52-117, Bhadbhada Road, North TT Nagar, TT Nagar, Bhopal, Madhya Pradesh', '', '2017-10-17 12:30', 3, '2017-10-17 12:32:45', '2017-10-25 15:39:29', 1, 0),
(00207, '00183', '00006', 6, '9962474499', '', 'PH rd,Chennai', '', '2017-10-17 12:35', 3, '2017-10-17 12:37:14', '2017-10-17 18:44:48', 1, 0),
(00208, 'P-00011', '00059', 71, '9335903344', '', '1 st Floor, 24 hr Lab SGPGI Lucknow', '', '2017-10-17', 3, '', '2017-10-27 15:13:40', 1, 0),
(00209, '00184', '00005', 5, '9840605384', '', 'Chetepet,Chennai', '', '2017-10-20 13:37', 3, '2017-10-20 13:37:57', '2017-10-25 15:38:38', 1, 0),
(00210, '00185', '00003', 3, '9566275789', 'narasimhan@metropolisindia.com', 'Nungambkkam,Chennai', '', '2017-10-23 12:10', 3, '2017-10-23 12:10:45', '2017-10-25 15:37:41', 1, 0),
(00211, '00186', '00018', 18, '1111111111111', '', 'Virinchi Circle,, Hyderabad,', '', '2017-10-23 12:29', 3, '2017-10-23 12:29:42', '2017-11-13 15:22:36', 1, 0),
(00212, '00187', '00389', 408, '111111233332222', '', 'Tukaram Javaji Marg, Grant Road West, Tardeo, Mumbai, Maharashtra 400007', '', '2017-10-23 16:28', 3, '2017-10-23 16:29:24', '2017-10-25 15:37:27', 1, 0),
(00213, '00188', '00396', 417, '6555555555556', '', '', '', '2017-10-25 00:00:00', 0, '', '', 0, 0),
(00214, '00189', '00401', 422, '9889124814', '', '', '', '2017-10-25', 0, '', '', 0, 0),
(00215, '00190', '00057', 67, '7829889829', '', '?No.31, Behind Big Marker, G Block, Bellary Road, Sahakara Nagar,?', '', '2017-10-25 13:59', 3, '2017-10-25 14:00:36', '2017-10-27 15:16:13', 1, 0),
(00216, '00191', '00058', 68, '9900566592', '', 'Hosur Road, Lakkasandra, Wilson Garden', '', '2017-10-25 15:16', 3, '2017-10-25 15:17:02', '2017-10-27 15:16:01', 1, 0),
(00217, '00192', '00151', 164, '9819750173', 'shankarm@breachcandyhospital.org', '60 A, Bhulabhai desai road', '', '2017-10-25 15:31', 3, '2017-10-25 15:32:14', '2017-10-28 09:36:41', 1, 0),
(00218, '00193', '00004', 4, '9884050521', 'drdeepakala.n@simshospitals.com', 'vadapalani,Chennai', '', '2017-10-25 15:36', 3, '2017-10-25 15:36:42', '2017-10-27 15:15:50', 1, 0),
(00219, '00194', '00136', 149, '9425302826', '', '120-121,Near Personal Branch SBI, Link Rd Number 3, E-3, Arera Colony, Bhopal, Madhya Pradesh ', '', '2017-10-24 14:00', 3, '2017-10-25 15:45:18', '2017-10-27 15:15:28', 1, 0),
(00220, '00195', '00141', 154, '7898003228', '', 'Sultania Rd, Royal Market, Near Hamidia Hospital, Bhopal, Madhya Pradesh ', '', '2017-10-25 16:17', 3, '2017-10-25 16:18:42', '2017-10-27 15:15:12', 1, 0),
(00221, '00196', '00069', 81, '9208052893', '', 'kgmc Trauma center chowk lucknow', '', '2017-10-25 16:45', 3, '2017-10-25 16:46:19', '2017-10-27 15:07:59', 1, 0),
(00222, '00197', '00150', 163, '9870889775', '', 'Wagle Industrial Estate, Ambika Nagar No 3', '', '2017-10-27 12:14', 3, '2017-10-27 12:15:17', '2017-10-28 09:34:22', 1, 0),
(00223, '00198', '00004', 4, '9884050521', 'drdeepakala.n@simshospitals.com', 'vadapalani,Chennai', '', '2017-10-27 12:15', 3, '2017-10-27 12:16:31', '2017-10-27 15:35:28', 1, 0),
(00224, '00199', '00405', 426, '9962594660', '', 'Bommasandra Industrial Area, Phase 4, Jigani link road, Biocon Park,, Bengaluru, Karnataka 560099', '', '2017-10-27 13:09', 3, '2017-10-27 13:10:09', '2017-11-02 15:04:00', 1, 0),
(00225, '00200', '00325', 342, '9880224502', '', '154/9, bannerghata road, opp. IIM - B', '', '2017-10-27 13:11', 3, '2017-10-27 13:12:53', '2017-11-02 15:03:41', 1, 0),
(00226, '00201', '00404', 425, '9585290232', '', 'NEAR CIVIL HOSPITAL', '', '2017-10-27 13:15', 3, '2017-10-27 13:18:59', '2017-10-31 12:58:04', 1, 0),
(00227, '00202', '00171', 185, '9689911129', '', '', '', '2017-10-28', 0, '', '', 0, 0),
(00228, '00203', '00099', 111, '8376061302', '', 'Gautam Budh nagar sector 30 noida ', '', '2017-10-28 12:23', 3, '2017-10-28 12:25:10', '2017-10-31 12:57:48', 1, 0),
(00229, '00204', '00007', 7, '9841429606', '', 'Anna Nagar,Chennai', '', '2017-10-28 15:13', 3, '2017-10-28 15:14:28', '2017-10-31 15:32:24', 1, 0),
(00230, '00205', '00134', 147, '7314206705', '', '14 Manik Bagh Road, Indore, Madhya Pradesh', '', '2017-10-31 12:51', 3, '2017-10-31 12:51:54', '2017-11-02 15:03:19', 1, 0),
(00231, '00206', '00056', 66, '9972089942', '', 'M S Ramaiah Narayana Heart Centre, Basement, M. S. Ramaiah Memorial Hospital, MSR College Road, MSRI', '', '2017-10-31 13:21', 3, '2017-10-31 13:22:11', '2017-11-02 15:03:08', 1, 0),
(00232, '00207', '00397', 418, '9538869421', '', 'No.7, Millers Tank Bed Area, Opposite Guru Nanak Bhavan, Jasma Bhavan Road, Vasanth Nagar, Bengaluru', '', '2017-10-31 13:22', 3, '2017-10-31 13:23:02', '2017-11-02 15:02:57', 1, 0),
(00233, '00208', '00057', 67, '7829889829', '', '?No.31, Behind Big Marker, G Block, Bellary Road, Sahakara Nagar,?', '', '2017-10-31 13:23', 3, '2017-10-31 13:23:58', '2017-11-02 15:02:42', 1, 0),
(00234, '00209', '00325', 342, '9880224502', '', '154/9, bannerghata road, opp. IIM - B', '', '2017-10-31 13:24', 3, '2017-10-31 13:25:03', '2017-11-02 15:02:30', 1, 0),
(00235, '00210', '00005', 5, '9840605384', '', 'Chetepet,Chennai', '', '2017-10-31 16:16', 3, '2017-10-31 16:17:44', '2017-11-02 15:02:19', 1, 0),
(00236, '00211', '00019', 19, '11111114444444', '', 'Road No. 1, Banjara Hills, Hyderabad', '', '2017-10-31 18:14', 3, '2017-10-31 18:15:44', '2017-11-02 15:01:51', 1, 0),
(00237, '00212', '00152', 165, '9819281495', '', 'Juhu', '', '2017-10-31 20:23', 3, '2017-10-31 20:24:31', '2017-11-02 15:01:35', 1, 0),
(00238, '00213', '00397', 418, '9538869421', '', 'No.7, Millers Tank Bed Area, Opposite Guru Nanak Bhavan, Jasma Bhavan Road, Vasanth Nagar, Bengaluru', '', '2017-11-01 14:38', 3, '2017-11-01 14:39:06', '2017-11-06 18:13:52', 1, 0),
(00239, '00214', '00004', 4, '9884050521', 'drdeepakala.n@simshospitals.com', 'vadapalani,Chennai', '', '2017-11-01 14:41', 3, '2017-11-01 14:43:12', '2017-11-04 13:57:07', 1, 0),
(00240, '00215', '00059', 70, '9452243957', '', ' 1st Floor, C block Hemtology Lab SGPGI Lucknow', '', '2017-11-03 14:07', 3, '2017-11-03 15:26:01', '2017-11-04 13:56:53', 1, 0),
(00241, '00216', '00017', 60, '9900654134', '', '154/11, Bannerghatta Road, Opposite IIM, Bengaluru,?', '', '2017-11-03 15:30', 3, '2017-11-03 15:31:40', '2017-11-06 18:13:35', 1, 0),
(00242, '00217', '00006', 6, '9962474499', '', 'PH rd,Chennai', '', '2017-11-04 12:15', 3, '2017-11-04 12:16:04', '2017-11-04 13:56:37', 1, 0),
(00243, '00218', '00003', 3, '9566275789', 'narasimhan@metropolisindia.com', 'Nungambkkam,Chennai', '', '2017-11-06 12:34', 3, '2017-11-06 12:35:02', '2017-11-06 13:32:02', 1, 0),
(00244, '00219', '00020', 20, '123334566300', '', '3-6-16 & 17, Street No. 19, Himayatnagar,', '', '2017-11-06 18:12', 3, '2017-11-06 18:13:12', '2017-11-07 16:35:26', 1, 0),
(00245, '00220', '00021', 22, '040-67776754111', '', 'Raj Bhavan Rd, Matha Nagar, Somajiguda, Hyderabad,', '', '2017-11-07 13:39', 3, '2017-11-07 13:40:20', '2017-11-07 16:35:39', 1, 0),
(00246, '00221', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-11-07 13:40', 3, '2017-11-07 13:41:25', '2017-11-07 16:35:52', 1, 0),
(00247, '00222', '00004', 4, '9884050521', 'drdeepakala.n@simshospitals.com', 'vadapalani,Chennai', '', '2017-11-08 15:05', 3, '2017-11-08 15:08:57', '2017-11-08 15:10:51', 1, 0),
(00248, '00223', '00208', 225, '9657722055', '', 'Bhandarkar Road, Deccan, Pune', '', '2017-11-08 16:52', 3, '2017-11-08 16:53:04', '2017-11-10 13:15:58', 1, 0),
(00249, '00224', '00344', 362, '9897300715', '', 'SAHAHRANPUR U.P', '', '2017-11-09 13:23', 3, '2017-11-09 13:24:21', '2017-11-10 13:13:06', 1, 0),
(00250, '00225', '00061', 73, '9412901682', '', 'doiawalla jolly grand dehradun', '', '2017-11-09 15:00', 3, '2017-11-09 15:02:11', '2017-11-13 15:22:24', 1, 0),
(00251, '00226', '00006', 6, '9962474499', '', 'PH rd,Chennai', '', '2017-11-10 12:56', 3, '2017-11-10 12:56:53', '2017-11-10 16:29:41', 1, 0),
(00252, '00227', '00005', 5, '9840605384', '', 'Chetepet,Chennai', '', '2017-11-10 12:57', 3, '2017-11-10 12:57:34', '2017-11-10 16:29:26', 1, 0),
(00253, '00228', '00140', 153, '9826089221', '', '52-117, Bhadbhada Road, North TT Nagar, TT Nagar, Bhopal, Madhya Pradesh', '', '2017-11-10 13:11', 3, '2017-11-10 13:12:34', '2017-11-13 15:21:44', 1, 0),
(00254, '00229', '00006', 6, '9962474499', '', 'PH rd,Chennai', '', '2017-11-15 14:24', 3, '2017-11-15 14:25:04', '2017-11-15 15:51:32', 1, 0),
(00255, '00230', '00004', 4, '9884050521', 'drdeepakala.n@simshospitals.com', 'vadapalani,Chennai', '', '2017-11-15 14:25', 3, '2017-11-15 14:25:52', '2017-11-15 15:51:18', 1, 0),
(00256, 'P-00012', '00409', 430, '8246610800', '', '', '', '2017-11-16', 0, '', '', 0, 0),
(00257, 'P-00013', '00409', 430, '8246610800', '', 'A J Hospital  Research Centre, Kuntikana, Mangalore - 575004', '', '2017-11-16', 3, '', '2017-12-14 15:06:10', 1, 0),
(00258, '00231', '00033', 36, '8283060421', '', '', '', '2017-11-16', 0, '', '', 0, 0),
(00259, 'P-00014', '00146', 158, '9765268965', 'ramesh3061@gmail.com', 'Dr. deshmukh road', '', '2017-11-19', 0, '', '2017-11-20 01:33:48', 1, 0),
(00260, '00232', '00208', 225, '9657722055', '', 'Bhandarkar Road, Deccan, Pune', '', '2017-11-21 11:43', 3, '2017-11-21 11:45:08', '2017-12-14 15:07:51', 1, 0),
(00261, '00233', '00208', 225, '9657722055', '', 'Bhandarkar Road, Deccan, Pune', '', '2017-11-29 17:08', 3, '2017-11-29 17:10:02', '2017-12-14 15:07:37', 1, 0),
(00262, 'P-00015', '00203', 220, '9822862623', '', 'Narhe, Pune', '', '2017-11-30', 3, '', '2017-12-14 15:05:37', 1, 0),
(00263, '00234', '00059', 69, '9918883214', '', '1 st Floor, C block Pathology Lab SGPGI Lucknow', '', '2017-12-05 13:25', 9, '2017-12-05 13:29:55', '2017-12-16 11:39:39', 39, 0),
(00264, '00235', '00353', 371, '000000000000000', '', 'GHAZIABAD UP', '', '2017-12-11 14:02', 3, '2017-12-11 14:04:30', '2017-12-14 15:07:22', 1, 0),
(00265, '00236', '00017', 17, '8106298889', '', ' Road No 72, Opp. Bharatiya Vidya Bhavan School, Film Nagar, Jubilee Hills', '', '2017-12-11 17:37', 3, '2017-12-11 17:38:28', '2017-12-14 15:07:00', 1, 0),
(00266, 'P-00016', '00188', 204, '9850184250', '', 'Anand Rishiji Marg, AHMADNAGAR', '', '2017-12-13', 0, '', '2017-12-13 13:42:48', 1, 0),
(00267, 'P-00017', '00046', 55, '9573313499', '', '3-6-282, Opp. Old MLA Quarters, Hyderguda, Hyderabad', '', '2017-12-13', 0, '', '2017-12-13 13:48:27', 1, 0),
(00268, 'P-00018', '00188', 204, '9850184250', '', 'Anand Rishiji Marg, AHMADNAGAR', '', '2017-12-13', 0, '', '2017-12-13 13:45:03', 1, 0),
(00269, '00237', '00073', 85, '9452569502', '', 'LANKA VARANASI', '', '2017-12-14 13:54', 3, '2017-12-14 13:56:19', '2017-12-18 14:04:20', 1, 0),
(00270, '00238', '00007', 7, '9841429606', '', 'Anna Nagar,Chennai', '', '2017-12-14 14:03', 3, '2017-12-14 14:06:02', '2017-12-14 15:06:34', 1, 0),
(00271, '00239', '00005', 5, '9840605384', '', 'Chetepet,Chennai', '', '2017-12-14 17:26', 3, '2017-12-14 17:27:19', '2017-12-15 17:04:53', 1, 0),
(00272, '00240', '00003', 3, '9566275789', 'narasimhan@metropolisindia.com', 'Nungambkkam,Chennai', '', '2017-12-15 12:22', 3, '2017-12-15 12:23:54', '2017-12-15 17:06:54', 1, 0),
(00273, '00241', '00145', 157, '9892982681', 'rajesh.jadhav@metropolisindia.com', '6th floor,Global Hospital', '', '2017-12-15 12:55', 3, '2017-12-15 12:57:22', '2017-12-18 14:03:59', 1, 0),
(00274, '00242', '00060', 72, '7060771155', '', 'nirala nagar lucknow', '', '2017-12-15 14:00', 3, '2017-12-15 14:01:36', '2017-12-18 14:03:46', 1, 0),
(00275, 'P-00019', '00006', 6, '9962474499', '', 'PH rd,Chennai', '', '2017-12-15', 0, '', '2017-12-15 17:28:52', 1, 0),
(00276, '00243', '00001', 1, '9841313358', 'lakshmanin@gmail.com', 'Cenatoph Road,Teyanampet,Chennai', '', '2017-12-16 12:42', 3, '2017-12-16 12:43:46', '2017-12-18 14:03:29', 1, 0),
(00277, '00244', '00033', 36, '8283060421', '', '', '', '2017-12-16', 0, '', '', 0, 0),
(00278, '00245', '00007', 7, '9841429606', '', 'Anna Nagar,Chennai', '', '2017-12-16 14:31', 3, '2017-12-16 14:32:22', '2017-12-18 16:25:02', 1, 0),
(00279, '00246', '00411', 432, '8004695112', '', '', '', '2017-12-18 00:00:00', 0, '', '', 0, 0),
(00280, '00247', '00006', 6, '9962474499', '', 'PH rd,Chennai', '', '2017-12-18 13:36', 3, '2017-12-18 13:37:12', '2017-12-18 16:24:47', 1, 0),
(00281, '00248', '00005', 5, '9840605384', '', 'Chetepet,Chennai', '', '2017-12-19 12:52', 3, '2017-12-19 12:53:15', '2017-12-19 12:57:45', 1, 0),
(00282, '00249', '00052', 62, '9900564277', '', 'Bannerghatta Main Road, Jayanagara 9th Block, Bengaluru, Karnataka', '', '2017-12-19 13:11', 1, '2017-12-19 13:12:53', '2017-12-19 13:12:53', 1, 0),
(00283, '00250', '00416', 437, '9535282323', '', 'chikkasandra,bengaluru', '', '2017-12-19 13:13', 1, '2017-12-19 13:13:33', '2017-12-19 13:13:33', 1, 0),
(00284, '00251', '00017', 60, '9900654134', '', '154/11, Bannerghatta Road, Opposite IIM, Bengaluru,?', '', '2017-12-19 13:22', 1, '2017-12-19 13:23:08', '2017-12-20 13:05:38', 1, 0),
(00285, '00252', '00328', 345, '8066628736', '', 'No.96,Industrial Suburb, II Stage,  Industrial Area, Yeshwantpur ', '', '2017-12-19 13:23', 1, '2017-12-19 13:24:08', '2017-12-30 14:30:01', 1, 0),
(00286, '00253', '00415', 436, '9842811198', '', '', '', '2017-12-20', 0, '', '', 0, 0),
(00287, '00254', '00415', 436, '9842811198', '', '111,nanjappa nagar,trichy road,coimbatore-641005', '', '2017-12-20 14:51', 1, '2017-12-20 14:52:31', '2017-12-20 14:52:31', 1, 0),
(00288, 'P-00020', '00004', 4, '9884050521', 'drdeepakala.n@simshospitals.com', '', '', '2017-12-20', 0, '', '', 0, 0),
(00289, '00255', '00327', 344, '9962135225', 'vijaykumarv@yoursefficiently.com', 'no. 2 test nagar', '', '2017-12-30 10:47', 9, '2017-12-30 10:48:25', '2018-02-08 18:35:10', 1, 0),
(00290, '00256', '00422', 444, '9874566258598', 'spvic@gmail.com', 'orathur orthur', 'orathur', '2018-02-08 13:30', 3, '2018-02-08 13:31:46', '2018-02-08 16:45:49', 1, 0),
(00291, '00257', '00422', 444, '9874566258598', 'spvic@gmail.com', 'orathur orthur', 'orathur', '2018-02-08 17:12', 1, '2018-02-08 17:13:37', '2018-02-13 14:47:35', 1, 0),
(00292, '00258', '00422', 444, '9874566258598', 'spvic@gmail.com', 'orathur orthur', 'orathur', '2018-02-13 16:39', 9, '2018-02-13 16:40:08', '2018-02-13 16:41:33', 1, 0),
(00293, '00259', '00422', 444, '9874566258598', 'spvic@gmail.com', 'orathur orthur', 'orathur', '2018-02-13 18:17', 1, '2018-02-13 18:18:30', '2018-02-13 18:18:30', 1, 0),
(00294, '00260', '00422', 444, '9874566258598', 'spvic@gmail.com', 'orathur orthur', 'orathur', '2018-02-13 18:23', 16, '2018-02-13 18:23:55', '2018-02-13 18:24:41', 44, 0),
(00295, '00261', '00423', 445, '7373204044', 'spvnew@gmail.com', 'orathur', 'orathur', '2018-02-14 10:22', 16, '2018-02-14 10:25:21', '2018-02-14 11:28:53', 45, 0),
(00296, '00262', '00423', 445, '7373204044', 'spvnew@gmail.com', 'orathur', 'orathur', '2018-02-14 14:10', 9, '2018-02-14 14:11:38', '2018-02-14 16:13:03', 44, 0),
(00297, '00263', '00423', 445, '7373204044', 'spvnew@gmail.com', 'orathur', 'orathur', '2018-02-14 15:17', 3, '2018-02-14 15:18:12', '2018-02-14 15:28:25', 1, 0),
(00298, '00264', '00423', 445, '7373204044', 'spvnew@gmail.com', 'orathur', 'orathur', '2018-02-14 16:25', 3, '2018-02-14 16:29:55', '2018-06-29 14:58:56', 1, 0),
(00299, '00265', '00213', 230, '7781006893', '', 'Sachivalya colony,kankarbagh', '', '2018-07-02 11:17', 1, '2018-07-02 11:18:28', '2018-07-02 11:18:28', 1, 0),
(00300, '00266', '00429', 451, '8965412365878', '', 'jaipur', '', '2018-07-02 11:37', 1, '2018-07-02 11:41:20', '2018-07-02 11:41:20', 1, 0),
(00302, 'P-00021', '00327', 344, '9962135225', 'vijaykumarv@yoursefficiently.com', 'no. 2 test nagar', '', '2018-07-02 11:51', 1, '2018-07-02 11:53:00', '2018-07-02 11:53:00', 1, 0),
(00305, '00267', '00429', 451, '8965412365878', '', 'jaipur', '', '2018-07-02 12:17', 1, '2018-07-02 12:17:46', '2018-07-02 12:17:46', 1, 0),
(00306, 'P-00022', '00429', 451, '8965412365878', '', 'jaipur', '', '2018-07-02 12:18', 1, '2018-07-02 12:18:22', '2018-07-02 12:18:22', 1, 0),
(00307, '00268', '00423', 445, '9843609636', 'spvnew@gmail.com', 'orathur', 'orathur', '2018-07-03 14:41', 1, '2018-07-03 14:43:22', '2018-07-03 14:43:22', 1, 0),
(00308, '00269', '00429', 451, '8965412365878', '', 'jaipur', '', '2018-07-03 14:45', 1, '2018-07-03 14:46:27', '2018-07-03 14:46:27', 1, 0),
(00309, 'P-00023', '00429', 451, '8965412365878', '', 'jaipur', '', '2018-07-03 14:47', 1, '2018-07-03 14:47:56', '2018-07-03 14:47:56', 1, 0),
(00310, '00270', '00423', 445, '9843609636', 'spvnew@gmail.com', 'orathur', 'orathur', '2018-07-06 11:55', 1, '2018-07-06 11:56:11', '2018-07-06 11:56:11', 1, 0),
(00311, 'P-00024', '00429', 451, '8965412365878', '', '', '', '2018-07-27 00:00:00', 0, '', '', 0, 0),
(00312, 'P-00025', '00442', 464, '98745862145', 'testings@gmail.com', '', '', '2018-07-27 00:00:00', 0, '', '', 0, 0),
(00313, '00271', '00327', 344, '9962135225', 'vijaykumarv@yoursefficiently.com', 'no. 2 test nagar', '', '2018-10-10 11:06', 1, '2018-10-10 11:06:56', '2018-10-10 11:06:56', 1, 0),
(00314, '00272', '00327', 344, '9962135225', 'vijaykumarv@yoursefficiently.com', 'no. 2 test nagar', '', '2018-10-10 11:15', 1, '2018-10-10 11:28:58', '2018-10-10 11:31:48', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `service_request_details`
--

CREATE TABLE `service_request_details` (
  `id` int(10) NOT NULL,
  `request_id` varchar(100) NOT NULL,
  `serial_no` varchar(100) NOT NULL,
  `batch_no` varchar(100) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `subcat_id` int(10) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `model_id` int(10) NOT NULL,
  `warranty_date` varchar(100) NOT NULL,
  `amc_end_date` varchar(50) NOT NULL,
  `machine_status` varchar(100) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `service_cat` varchar(100) NOT NULL,
  `zone` varchar(100) NOT NULL,
  `service_loc_coverage` varchar(100) NOT NULL,
  `problem` varchar(100) NOT NULL,
  `assign_to` varchar(100) NOT NULL,
  `app_time` varchar(100) NOT NULL,
  `addl_engg_name` int(10) NOT NULL,
  `service_priority` varchar(100) NOT NULL,
  `blank_app` int(10) NOT NULL,
  `received` varchar(250) NOT NULL,
  `notes` varchar(500) NOT NULL,
  `eng_ack` varchar(100) NOT NULL,
  `accepted_engg_id` int(10) NOT NULL,
  `active_req` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_request_details`
--

INSERT INTO `service_request_details` (`id`, `request_id`, `serial_no`, `batch_no`, `cat_id`, `subcat_id`, `brand_id`, `model_id`, `warranty_date`, `amc_end_date`, `machine_status`, `service_type`, `service_cat`, `zone`, `service_loc_coverage`, `problem`, `assign_to`, `app_time`, `addl_engg_name`, `service_priority`, `blank_app`, `received`, `notes`, `eng_ack`, `accepted_engg_id`, `active_req`) VALUES
(1, '00001', 'CF75051429', '', 1, 1, 1, 5, '', '', 'Preventive', 'Breakdown', '', '15', 'outstation', '9,62,62', '00009', '', 0, 'Critical', 0, '', 'PHOTOMETRIC CALIBRATION ISSUE,replace the optical fiber harness', '', 0, 0),
(2, '00002', 'CJ06020456', '', 1, 1, 1, 9, '', '', 'Preventive', 'Breakdown', '', '15', 'outstation', '', '00007', '', 0, 'High', 0, '', 'BUBBLE FORMS IN NEEDLE NO. 1 TUBING', '', 0, 0),
(3, '00003', 'AA31042569', '', 1, 1, 1, 4, '', '', 'Preventive', 'Out Of Warranty', '', '8', 'outstation', '', '00013', '', 0, 'Low', 0, '', 'Machine sifted to apollo specialty.replaced EPROM latest.Need to get payment', '', 0, 0),
(10, '00017', 'BG 84122393', '', 1, 1, 1, 3, '2017-01-06', '', 'Preventive', 'Breakdown', '', '5', 'outstation', '18', '00012', '', 0, '', 0, '', 'PT QC RESULTS ARE NOT OK', '', 0, 0),
(11, '00018', 'DUM0000001', '', 2, 2, 1, 1, '', '', 'Chargeable', 'Breakdown', '', '5', '', '64', '00012', '', 0, 'High', 0, '', 'problem in measurement block,CHECKED AND FOUND PCB MOTHER IS FAULTY', '', 0, 0),
(12, '00019', 'AA31042569', '', 1, 1, 1, 4, '2011-08-16', '', 'Preventive', 'Reverification', '', '8', 'outstation', '', '00013', '', 0, 'Low', 0, '', 'need to get payment for eprom', '', 0, 0),
(13, '00020', 'BG84112343', '', 1, 1, 1, 3, '2017-07-11', '', 'Preventive', 'Breakdown', '1', '2', 'outstation', '7', '00005', '', 0, 'High', 0, '', '', '', 0, 0),
(14, '00021', '1156566000002', '', 2, 2, 1, 2, '', '', 'Preventive', 'Preventive', '', '1', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(16, '00023', 'CF76052625', '', 1, 1, 1, 5, '2017-12-11', '', 'Preventive', 'Preventive', '', '13', 'outstation', '8', '00008', '', 0, 'Low', 0, '', '', '', 0, 0),
(17, '00024', 'BJ04062089', '', 1, 1, 1, 3, '', '', 'Preventive', 'Breakdown', '', '3', 'outstation', '10,18', '00001', '', 0, 'High', 0, '', 'some particle in optical sensor,clean optical sensor run test.', '', 0, 0),
(18, '00025', 'EEER45', 'EEER45', 1, 1, 1, 5, '', '', 'Warranty', 'Demo', '', '8', 'outstation', '9,12', '00018', '', 0, 'Low', 0, '', 'sssssssssssss', '', 0, 0),
(19, '00026', 'CC30018168', '', 1, 1, 1, 4, '2011-06-08', '', 'Preventive', 'Breakdown', '', '2', 'outstation', '16', '00006', '', 0, 'High', 0, '', '', '', 0, 0),
(20, '00027', 'BG85052603', '', 1, 1, 1, 3, '2018-02-03', '', 'Preventive', 'Breakdown', '', '3', 'outstation', '17,18', '00001', '', 0, 'Critical', 0, '', 'cleaner solution tubing is loose so cleaner solution not supplied, re fix the tubing run test', '', 0, 0),
(21, '00028', 'CC32059880', '', 1, 1, 1, 4, '2015-03-09', '', 'Preventive', 'Breakdown', '', '8', 'outstation', '19', '00013', '', 0, 'High', 0, '', '', '', 0, 0),
(22, '00029', 'BR62029703', '', 1, 1, 1, 4, '', '', 'Warranty', 'Breakdown', '', '15', 'outstation', '20,20', '00009', '', 0, 'High', 0, '', 'control values are out of range, they are running system control instead of coag control', '', 0, 0),
(23, '00030', 'BT3203A640', '', 1, 1, 1, 4, '2016-02-02', '', 'Warranty', 'Breakdown', '', '2', 'outstation', '22,23,20', '00005', '', 0, 'High', 0, '', 'Fuse and key board is faulty,after replacement instrument working properly ', '', 0, 0),
(24, '00031', 'BR3007C385', '', 2, 2, 1, 1, '', '', 'AMC', 'Breakdown', '', '15', 'outstation', '24,27', '00009', '', 0, 'Low', 0, '', 'solved after cleaning of printer thermic', '', 0, 0),
(25, '00032', 'BG 84122393', '', 1, 1, 1, 3, '2017-01-06', '', 'Warranty', 'Breakdown', '', '5', 'outstation', '25', '00012', '', 0, 'Low', 0, '', '', '', 0, 0),
(26, '00033', 'DDS44', 'DDS44', 1, 1, 1, 5, '', '', 'Warranty', 'AMC', '', '8', 'outstation', '26', '00018', '', 0, '', 0, '', 'test notes new', '', 0, 0),
(27, '00034', 'DDS44', '', 1, 1, 1, 5, '', '', 'Warranty', 'Out Of Warranty', '', '8', 'outstation', '26', '00018', '', 0, 'Critical', 0, '', 'new test notes', '', 0, 0),
(28, '00035', 'CC32059880', '', 1, 1, 1, 4, '2015-03-09', '', 'Warranty', 'Preventive', '', '8', 'outstation', '20', '00013', '', 0, 'Low', 0, '', '', '', 0, 0),
(29, '00036', 'DDS44', 'DDS44', 1, 1, 1, 5, '', '', 'Warranty', 'Out Of Warranty', '', '8', 'outstation', '26', '00018', '', 0, '', 0, '', 'first notes', '', 0, 0),
(32, '00039', 'CF76062669', '', 1, 1, 1, 6, '', '', 'Rental', 'Breakdown', '', '8', 'outstation', '28', '00018', '', 0, 'High', 0, '', 'second notes', '', 0, 0),
(33, '00040', 'TESTSR8877', '', 1, 1, 1, 7, '2018-06-02', '', 'Warranty', 'Breakdown', '', '8', 'outstation', '32', '00018', '', 0, 'Low', 0, '', 'test notess test notessss', '', 0, 0),
(34, '00041', 'CC3212A195', '', 1, 1, 1, 4, '2018-06-07', '', 'Warranty', 'Breakdown', '', '2', 'outstation', '40,41', '00006', '', 0, 'High', 0, '', 're insert 4 port serial board , (Problem in 4 port serial port positioning)', '', 0, 0),
(35, '00042', 'BR61059245', '', 1, 1, 1, 4, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '20', '00013', '', 0, 'Low', 0, '', 'Weekly maintenance', '', 0, 0),
(36, '00043', 'AA38061371', '', 1, 1, 1, 4, '2012-11-18', '', 'Warranty', 'Breakdown', '', '2', 'outstation', '38', '00005', '', 0, 'High', 0, '', '', '', 0, 0),
(37, '00044', 'BG85032478', '', 1, 1, 1, 3, '2017-03-23', '', 'Warranty', 'Breakdown', '', '2', 'outstation', '61', '00005', '', 0, 'Critical', 0, '', 'Mapping issue ,done mapping ', '', 0, 0),
(38, '00045', 'DUM0000002', '', 2, 2, 1, 1, '', '', 'Chargeable', 'Demo', '', '8', 'outstation', '42,42', '00013', '', 0, 'High', 0, '', 'Instrument was brought from bangalore. amc should be signed.', '', 0, 0),
(39, '00046', 'BR69121947', '', 1, 1, 1, 4, '2018-01-03', '', 'Warranty', 'Breakdown', '', '1', 'outstation', '43,60', '00008', '', 0, 'High', 0, '', 'LLD cable issue replaced the same', '', 0, 0),
(40, '00047', 'BT31019267', '', 2, 2, 1, 1, '2012-08-01', '', 'Warranty', 'Breakdown', '', '2', 'outstation', '63,64', '00006', '', 0, 'High', 0, '', '', '', 0, 0),
(41, '00048', 'BG85052603', '', 1, 1, 1, 3, '2018-02-03', '', 'Warranty', 'Breakdown', '', '3', 'outstation', '65', '00001', '', 0, 'High', 0, '', 'CLEAN PDR HOME SENSOR ', '', 0, 0),
(42, '00049', 'BG 84122393', '', 1, 1, 1, 3, '2017-01-06', '', 'Warranty', 'Breakdown', '', '5', 'outstation', '25,66', '00012', '', 0, 'High', 0, '', '', '', 0, 0),
(43, '00050', 'BG84082177', '', 1, 1, 1, 3, '2017-11-08', '', 'Warranty', 'Breakdown', '', '3', 'outstation', '67,66', '00001', '', 0, 'High', 0, '', '', '', 0, 0),
(44, '00051', 'CF76062669', '', 1, 1, 1, 6, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '68', '00013', '', 0, 'Low', 0, '', 'Routine maintenance', '', 0, 0),
(45, '00052', 'BG85022476', '', 1, 1, 1, 3, '2017-09-25', '', 'Warranty', 'Breakdown', '', '2', 'outstation', '66', '00005', '', 0, 'Low', 0, '', '', '', 0, 0),
(46, '00053', 'BG85022476', '', 1, 1, 1, 3, '2017-09-25', '', 'Warranty', 'Breakdown', '', '2', 'outstation', '69', '00006', '', 0, 'High', 0, '', '', '', 0, 0),
(47, '00054', 'CF75051429', '', 1, 1, 1, 5, '2016-09-13', '', 'Warranty', 'Breakdown', '', '15', 'outstation', '62', '00009', '', 0, 'High', 0, '', '', '', 0, 0),
(48, '00055', 'BT3202A182', '', 2, 2, 1, 1, '', '', 'AMC', 'Breakdown', '1', '3', 'outstation', '106', '00001', '', 0, 'Low', 0, '', '', '', 0, 0),
(49, '00056', 'CF76052618', '', 1, 1, 1, 6, '2017-12-27', '', 'Warranty', 'Preventive', '', '8', 'outstation', '68', '00013', '', 0, 'Low', 0, '', 'Routine Maintenance', '', 0, 0),
(50, '00057', 'CC3301A199', '', 1, 1, 1, 4, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'Low', 0, '', 'Routine maintenance', '', 0, 0),
(51, '00058', 'CJ06020456', '', 1, 1, 1, 9, '2017-07-19', '', 'Warranty', 'Preventive', '', '15', 'outstation', '71', '00007', '', 0, 'Low', 0, '', '', '', 0, 0),
(52, '00059', 'CF76062669', '', 1, 1, 1, 6, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '68,68', '00013', '', 0, '', 0, '', '', '', 0, 0),
(53, '00060', 'BR30078980', '', 2, 2, 1, 1, '2011-10-12', '', 'Warranty', 'Preventive', '', '8', 'outstation', '72', '00013', '', 0, 'High', 0, '', '', '', 0, 0),
(54, '00061', 'CC32059880', '', 1, 1, 1, 4, '2015-03-09', '', 'Warranty', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'Low', 0, '', 'Routine Maintenance', '', 0, 0),
(55, '00062', 'CC3212A195', '', 1, 1, 1, 4, '2018-06-07', '', 'Warranty', 'Breakdown', '', '2', 'outstation', '60', '00005', '', 0, 'High', 0, '', 'Problem with FVIII calibration they found error in 3rd and 4th dilution', '', 0, 0),
(56, '00063', 'BR69077912', '', 1, 1, 1, 4, '', '', 'AMC', 'Breakdown', '', '8', 'outstation', '73', '00013', '', 0, 'High', 0, '', '', '', 0, 0),
(57, '00064', 'CF76052618', '', 1, 1, 1, 6, '2017-12-27', '', 'Warranty', 'Preventive', '', '8', 'outstation', '68', '00013', '', 0, 'Low', 0, '', '', '', 0, 0),
(58, '00065', 'AA38061371', '', 1, 1, 1, 4, '2012-11-18', '', 'Warranty', 'Breakdown', '', '2', 'outstation', '74', '00006', '', 0, 'High', 0, '', '', '', 0, 0),
(59, '00066', 'DDS44', '', 1, 1, 1, 5, '', '', 'Warranty', 'AMC', '', '8', 'outstation', '45,62', '00018', '', 0, 'Critical', 0, '', 'ssssssssssss', '', 0, 0),
(60, '00067', 'AA40032084', '', 1, 1, 1, 4, '', '', 'AMC', 'Breakdown', '', '11', 'outstation', '60', '00014', '', 0, 'High', 0, '', 'System stuck', '', 0, 0),
(61, '00068', 'DDS44', '', 1, 1, 1, 5, '', '', 'Warranty', 'AMC', '', '8', 'outstation', '9,62', '00017', '', 0, 'High', 0, '', 'asdasdasd', '', 0, 0),
(62, '00069', '7127199', '', 2, 2, 1, 1, '2009-07-18', '', 'Warranty', 'Out Of Warranty', '', '8', 'outstation', '64', '00018', '', 0, 'High', 0, '', 'sdfsdfds', '', 0, 0),
(63, '00070', 'DDS44', '', 1, 1, 1, 5, '', '', 'Warranty', 'Out Of Warranty', '', '8', 'outstation', '62', '00017', '', 0, '', 0, '', 'as', '', 0, 0),
(64, '00071', 'CF76062669', '', 1, 1, 1, 6, '', '', 'Rental', 'Out Of Warranty', '', '8', 'outstation', '68', '00018', '', 0, 'Critical', 0, '', 'sss', '', 0, 0),
(65, '00072', 'DDS44', '', 1, 1, 1, 5, '', '', 'Warranty', 'AMC', '', '8', 'outstation', '62', '00018', '', 0, 'Critical', 0, '', 'ggggg', '', 0, 0),
(66, '00073', 'TESTSR8877', '', 1, 1, 1, 7, '2018-06-02', '', 'Warranty', 'Breakdown', '', '8', 'outstation', '75', '00018', '', 0, 'Low', 0, '', '', '', 0, 0),
(67, '00074', 'BJ05042548', '', 1, 1, 1, 3, '2017-04-27', '', 'Warranty', 'Breakdown', '', '1', 'outstation', '76', '00008', '', 0, 'High', 0, '', '', '', 0, 0),
(68, '00075', 'CC32059880', '', 1, 1, 1, 4, '2015-03-09', '', 'Warranty', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'Low', 0, '', 'Routine Maintenance', '', 0, 0),
(69, '00076', 'CF76052618', '', 1, 1, 1, 6, '2017-12-27', '', 'Warranty', 'Preventive', '', '8', 'outstation', '68', '00013', '', 0, 'Low', 0, '', 'routine maintenance', '', 0, 0),
(70, '00077', 'CC3301A199', '', 1, 1, 1, 4, '', '', 'Rental', 'Breakdown', '', '8', 'outstation', '77', '00013', '', 0, 'High', 0, '', '', '', 0, 0),
(71, '00078', 'CC3301A199', '', 1, 1, 1, 4, '', '', 'Rental', 'Breakdown', '', '8', 'outstation', '77,60', '00013', '', 0, 'High', 0, '', '', '', 0, 0),
(72, '00079', 'TESTSR8877', '', 1, 1, 1, 7, '2018-06-02', '', 'Warranty', 'Breakdown', '', '8', 'outstation', '75', '00018', '', 0, 'Low', 0, '', 'test entry', '', 0, 0),
(73, '00080', ' BR3604C883', '', 2, 2, 1, 1, '2018-07-05', '', 'Warranty', 'Warranty', '', '2', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(74, '00081', 'BR62029703', '', 1, 1, 1, 4, '', '', 'Warranty', 'Breakdown', '', '15', 'outstation', '78', '00009', '', 0, 'High', 0, '', '', 'accept', 9, 0),
(75, '00082', 'CF75051429', '', 1, 1, 1, 5, '2016-09-13', '', 'Warranty', 'Breakdown', '', '15', 'outstation', '79', '00009', '', 0, '', 0, '', '', '', 0, 0),
(76, '00083', 'BJ84112342', '', 1, 1, 1, 3, '2016-09-08', '', 'Warranty', 'Breakdown', '', '1', 'outstation', '80', '00007', '', 0, 'High', 0, '', '', 'accept', 7, 0),
(77, '00084', 'BG-85042547', '', 1, 1, 1, 3, '2017-09-22', '', 'Warranty', 'Breakdown', '', '6', 'outstation', '81', '00011', '', 0, 'High', 0, '', '', 'accept', 11, 0),
(78, '00085', 'BS43035046', '', 1, 1, 1, 8, '2017-08-02', '', 'Warranty', 'Preventive', '', '1', 'outstation', '82,82', '00007', '', 0, 'Low', 0, '', '', '', 0, 0),
(79, '00086', 'BR69077912', '', 1, 1, 1, 4, '', '', 'AMC', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'Low', 0, '', 'Routine maintenance', '', 0, 0),
(80, '00087', 'BT3604C888', '', 1, 1, 1, 3, '2018-08-07 00:00:00', '', 'Preventive', 'Breakdown', '', '1', '', '83', '00008', '', 0, 'Low', 0, '', '', '', 0, 0),
(81, '00088', 'CF 75091711', '', 1, 1, 1, 6, '2017-02-08', '', 'Warranty', 'Preventive', '', '5', 'outstation', '84', '00012', '', 0, 'High', 0, '', '', '', 0, 0),
(82, '00089', 'AA38061371', '', 1, 1, 1, 4, '2012-11-18', '', 'Warranty', 'Preventive', '', '2', 'outstation', '85,86', '00006', '', 0, 'High', 0, '', '', '', 0, 0),
(83, '00090', 'BT3509C463', '', 2, 2, 1, 1, '2017-05-13', '', 'Warranty', 'Breakdown', '', '13', 'outstation', '64', '00008', '', 0, 'High', 0, '', 'PM AND CALIBRATION', '', 0, 0),
(84, '00091', 'BG85022476', '', 1, 1, 1, 3, '2017-09-25', '', 'Warranty', 'Breakdown', '', '2', 'outstation', '87,88', '00005', '', 0, 'High', 0, '', '', '', 0, 0),
(85, '00092', 'BR62029703', '', 1, 1, 1, 4, '', '', 'Warranty', 'Preventive', '', '15', 'outstation', '89', '00009', '', 0, 'High', 0, '', '', '', 0, 0),
(86, '00093', 'CF76062669', '', 1, 1, 1, 6, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '68', '00013', '', 0, 'Low', 0, '', 'Routine maintenance', 'accept', 13, 0),
(87, '00094', 'BR3407B839', '', 2, 2, 1, 1, '', '', 'AMC', 'Breakdown', '', '3', 'outstation', '24,64', '00001', '', 0, 'Low', 0, '', '', '', 0, 0),
(88, '00095', 'TESTSR8877', '', 1, 1, 1, 7, '2018-06-02', '', 'Warranty', 'Breakdown', '', '8', 'outstation', '75', '00018', '', 0, 'Low', 0, '', 'test notes entry', '', 0, 0),
(89, '00096', 'AA38061371', '', 1, 1, 1, 4, '2012-11-18', '', 'Warranty', 'Preventive', '', '2', 'outstation', '90,91', '00005', '', 0, 'Low', 0, '', '', 'accept', 5, 0),
(90, '00097', 'TESTSR8877', '', 1, 1, 1, 7, '2018-06-02', '', '1', 'Out Of Warranty', '', '8', 'outstation', '75', '00018,00001', '', 0, 'Low', 0, '', 'testing   kljsdklfjklsdf jslkfjlks djfl', 'accept', 18, 0),
(91, '00098', 'BT3507C384', '', 2, 2, 1, 1, '', '', 'Rental', 'Breakdown', '', '2', 'outstation', '92', '00005', '', 0, 'High', 0, '', '', 'accept', 5, 0),
(92, '00099', 'CC3411A823', '', 1, 1, 1, 4, '2016-11-22', '', '1', 'Breakdown', '', '1', 'outstation', '93,94', '00008', '', 0, 'High', 0, '', '', '', 0, 0),
(93, '00100', 'BR61059245', '', 1, 1, 1, 4, '', '', 'Rental', 'Breakdown', '', '8', 'outstation', '95', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(94, '00101', 'BR66065818', '', 1, 1, 1, 4, '2018-01-07', '', '1', 'Breakdown', '', '2', 'outstation', '96', '00005', '', 0, 'High', 0, '', '', 'accept', 5, 0),
(95, '00102', 'CF76062669', '', 1, 1, 1, 6, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '68', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(96, '00103', 'CC3301A199', '', 1, 1, 1, 4, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, '', 0, '', 'Routine maintenance', 'accept', 13, 0),
(97, '00104', 'CF76052618', '', 1, 1, 1, 6, '2017-12-27', '', '1', 'Preventive', '', '8', 'outstation', '68', '00013', '', 0, '', 0, '', 'routine maintenance', 'accept', 13, 0),
(98, '00105', 'BT31119967', '', 2, 2, 1, 1, '2013-02-18', '', '1', 'Preventive', '', '15', 'outstation', '64', '00009', '', 0, 'High', 0, '', 'CAL&PM', 'accept', 9, 0),
(99, '00106', 'CF76062684', '', 1, 1, 1, 5, '2017-08-25', '', '1', 'Preventive', '', '15', 'outstation', '62', '00010', '', 0, 'High', 0, '', 'PM&CAL', 'accept', 10, 0),
(100, '00107', 'BR61099413', '', 1, 1, 1, 4, '2017-11-21', '', '1', 'Breakdown', '', '1', 'outstation', '97,98', '00006', '', 0, 'High', 0, '', '', 'accept', 6, 0),
(101, '00108', 'BG85032478', '', 1, 1, 1, 3, '2017-03-23', '', '1', 'Breakdown', '', '2', 'outstation', '99', '00005', '', 0, 'High', 0, '', '', 'accept', 5, 0),
(102, '00109', 'BR61059245', '', 1, 1, 1, 4, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'High', 0, '', 'PM&CAL .', 'accept', 13, 0),
(103, '00110', 'BT3507C352', '', 2, 2, 1, 1, '2016-12-09', '', '1', 'Preventive', '', '1', 'outstation', '64', '00007', '', 0, 'High', 0, '', 'PM\r\n& CAL', '', 0, 0),
(104, '00111', 'BR61099413', '', 1, 1, 1, 4, '2017-11-21', '', '1', 'Breakdown', '', '1', 'outstation', '100', '00007', '', 0, 'High', 0, '', '', '', 0, 0),
(105, '00112', 'BG84122390', '', 1, 1, 1, 3, '2017-01-31', '', '1', 'Breakdown', '', '2', 'outstation', '101', '00006', '', 0, 'High', 0, '', '', 'accept', 6, 0),
(106, '00113', 'CC3411A823', '', 1, 1, 1, 4, '2016-11-22', '', '1', 'Breakdown', '', '1', 'outstation', '102', '00007', '', 0, 'High', 0, '', '', 'accept', 7, 0),
(107, '00114', 'BR61099413', '', 1, 1, 1, 4, '2017-11-21', '', '1', 'Breakdown', '', '1', 'outstation', '89,60', '00007', '', 0, 'High', 0, '', '', '', 0, 0),
(108, '00115', 'BT31049420', '', 2, 2, 1, 1, '2012-06-23', '', '1', 'Preventive', '', '15', 'outstation', '103', '00009', '', 0, 'High', 0, '', '', 'accept', 9, 0),
(109, '00116', 'CC3212A197', '', 1, 1, 1, 4, '2015-03-17', '', 'Chargeable', 'Breakdown', '', '15', 'outstation', '104,105', '00009', '', 0, 'High', 0, '', '', 'accept', 9, 0),
(110, '00117', 'BT31099793', '', 2, 2, 1, 1, '2012-12-06', '', 'Chargeable', 'Breakdown', '', '15', 'outstation', '24,64', '00009', '', 0, 'High', 0, '', '', 'accept', 9, 0),
(111, '00118', 'BG-85042547', '', 1, 1, 1, 3, '2017-09-22', '', 'Chargeable', 'Breakdown', '', '6', 'outstation', '67,66', '00011', '', 0, 'Critical', 0, '', '', 'accept', 11, 0),
(112, '00119', 'CF76062669', '', 1, 1, 1, 6, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '68', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(113, '00120', 'BR69118077', '', 1, 1, 1, 4, '2017-02-22', '', 'Chargeable', 'Breakdown', '', '2', 'on_site', '98,60', '00006', '', 0, '', 0, '', '', 'accept', 6, 0),
(114, '00121', 'BG85042544', '', 1, 1, 1, 3, '2018-03-19', '', 'Chargeable', 'Breakdown', '', '3', 'outstation', '107', '00001', '', 0, 'High', 0, '', '', 'accept', 1, 0),
(115, '00122', 'CC32059880', '', 1, 1, 1, 4, '2015-03-09', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(116, '00123', 'CF76062684', '', 1, 1, 1, 5, '2017-08-25', '', 'Chargeable', 'Reverification', '', '15', 'outstation', '108', '00010', '', 0, 'High', 0, '', '', 'accept', 10, 0),
(117, '00124', 'BR61059245', '', 1, 1, 1, 4, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(118, '00125', 'BR3503C076', '', 2, 2, 1, 1, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '64', '00013', '', 0, 'High', 0, '', 'PM', 'accept', 13, 0),
(119, '00126', 'BT3411B981', '', 2, 2, 1, 1, '2016-05-06', '', 'Chargeable', 'Preventive', '', '3', 'outstation', '24,64', '00001', '', 0, 'High', 0, '', '', 'accept', 1, 0),
(120, '00127', 'BG84082177', '', 1, 1, 1, 3, '2017-11-08', '', 'Chargeable', 'Preventive', '', '3', 'outstation', '109,110', '00001', '', 0, 'High', 0, '', '', 'accept', 1, 0),
(121, '00128', 'CC3301A199', '', 1, 1, 1, 4, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'Low', 0, '', '', 'accept', 13, 0),
(122, '00129', 'BT3401B580', '', 2, 2, 1, 1, '2016-03-09', '', 'Chargeable', 'Breakdown', '', '11', 'outstation', '111', '00014', '', 0, 'High', 0, '', '', 'accept', 14, 0),
(123, '00130', 'BG 84122393', '', 1, 1, 1, 3, '2017-01-06', '', 'Chargeable', 'Preventive', '', '5', 'outstation', '112', '00012,00015', '', 0, 'High', 0, '', '', 'accept', 15, 0),
(124, '00131', 'BR69118077', '', 1, 1, 1, 4, '2017-02-22', '', 'Chargeable', 'Breakdown', '', '2', 'on_site', '113', '00006', '', 0, 'High', 0, '', '', 'accept', 6, 0),
(125, '00132', 'BG84092243', '', 1, 1, 1, 3, '2016-10-13', '', 'Chargeable', 'Breakdown', '', '2', 'on_site', '114', '00005', '', 0, 'High', 0, '', '', 'accept', 5, 0),
(126, '00133', 'BR69108029', '', 1, 1, 1, 4, '2017-07-19', '', 'Chargeable', 'Breakdown', '', '2', 'on_site', '115', '00006', '', 0, 'High', 0, '', '', 'accept', 6, 0),
(127, '00134', 'BR69077912', '', 1, 1, 1, 4, '', '', 'AMC', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'Low', 0, '', 'maintenance routine', 'accept', 13, 0),
(128, '00135', 'CC32059880', '', 1, 1, 1, 4, '2015-03-09', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'Low', 0, '', 'maintenance', 'accept', 13, 0),
(129, '00136', 'BG85052603', '', 1, 1, 1, 3, '2018-02-03', '', 'Chargeable', 'Breakdown', '', '3', 'outstation', '66', '00001', '', 0, 'Critical', 0, '', '', 'accept', 1, 0),
(130, '00137', 'BG85032478', '', 1, 1, 1, 3, '2017-03-23', '', 'Chargeable', 'Breakdown', '', '2', 'on_site', '116', '00006', '', 0, 'High', 0, '', '', 'accept', 6, 0),
(131, '00139', 'BJ05042548', '', 1, 1, 1, 3, '2017-04-27', '', 'Chargeable', 'Breakdown', '', '1', 'outstation', '117', '00007', '', 0, 'High', 0, '', '', 'accept', 7, 0),
(132, '00140', 'CF76062684', '', 1, 1, 1, 5, '2017-08-25', '', 'Chargeable', 'Breakdown', '', '15', 'outstation', '118', '00009', '', 0, 'High', 0, '', '', 'accept', 9, 0),
(133, '00141', 'CC3301A199', '', 1, 1, 1, 4, '', '', 'Rental', 'Reverification', '', '8', 'outstation', '119', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(134, '00142', 'CC32059880', '', 1, 1, 1, 4, '2015-03-09', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(135, '00143', 'CC32059880', '', 1, 1, 1, 4, '2015-03-09', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, '', 0, '', '', 'accept', 13, 0),
(136, '00144', '1167208000718', '', 2, 2, 1, 2, '2018-08-17', '', 'Warranty', 'Warranty', '', '2', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(137, '00145', 'CF76062669', '', 1, 1, 1, 6, '', '', 'Rental', 'Reverification', '', '8', 'outstation', '120', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(138, '00146', 'BT3407B837', '', 2, 2, 1, 1, '2016-09-28', '', 'Chargeable', 'Preventive', '', '15', 'outstation', '64', '00009', '', 0, 'High', 0, '', 'PM&CAL', 'accept', 9, 0),
(139, '00147', 'CF76052618', '', 1, 1, 1, 6, '2017-12-27', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '68', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(140, '00148', 'CC32059880', '', 1, 1, 1, 4, '2015-03-09', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(141, '00149', '1167208000727', '', 2, 2, 1, 2, '', '', '1', '1', '', '8', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(142, '00150', 'BR69077912', '', 1, 1, 1, 4, '', '', 'AMC', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(143, '00151', 'BG85032478', '', 1, 1, 1, 3, '2017-03-23', '', 'Chargeable', 'Reverification', '', '2', 'on_site', '121', '00005', '', 0, 'Low', 0, '', '', 'accept', 5, 0),
(144, '00152', 'CF76052618', '', 1, 1, 1, 6, '2017-12-27', '', 'Chargeable', 'Reverification', '', '8', 'outstation', '122', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(145, '00153', 'CF76052618', '', 1, 1, 1, 6, '2017-12-27', '', 'Chargeable', 'Breakdown', '', '8', 'outstation', '123', '00013', '', 0, 'Low', 0, '', '', 'accept', 13, 0),
(146, '00154', 'CC3301A199', '', 1, 1, 1, 4, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'Low', 0, '', '', 'accept', 13, 0),
(147, '00158', 'CC32059880', '', 1, 1, 1, 4, '', '', 'Chargeable', 'Preventive', '', '8', '', '60', '00013', '', 0, '', 0, '', '', 'accept', 13, 0),
(148, '00159', 'BT3506C251', '', 2, 2, 1, 1, '', '', 'Chargeable', 'Preventive', '', '15', '', '64', '00009', '', 0, '', 0, '', '', 'accept', 9, 0),
(149, '00160', 'AA38061371', '', 1, 1, 1, 4, '2012-11-18', '', 'Chargeable', 'Reverification', '', '2', 'on_site', '124', '00005', '', 0, 'Low', 0, '', '', 'accept', 5, 0),
(150, '00161', 'CF75041348', '', 1, 1, 1, 5, '', '', 'Chargeable', 'Preventive', '', '1', '', '62', '00007', '', 0, '', 0, '', '', '', 0, 0),
(151, '00162', '1166369000664', '', 2, 2, 1, 2, '2018-08-24', '', 'Warranty', 'Warranty', '', '2', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(152, '00163', 'BR600-38278', '', 1, 1, 1, 4, '', '', 'Chargeable', 'Preventive', '', '5', '', '60', '00012,00015', '', 0, '', 0, '', '', 'accept', 15, 0),
(153, '00164', 'BG84082177', '', 1, 1, 1, 3, '2017-11-08', '', 'Chargeable', 'Preventive', '', '3', 'outstation', '125', '00001', '', 0, 'High', 0, '', '', 'accept', 1, 0),
(154, '00165', 'BG84082177', '', 1, 1, 1, 3, '2017-11-08', '', 'Chargeable', 'Preventive', '', '3', 'outstation', '126', '00001', '', 0, 'High', 0, '', '', '', 0, 0),
(155, '00166', 'BR69077912', '', 1, 1, 1, 4, '', '', 'AMC', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(156, '00167', 'CC32019673', '', 1, 1, 1, 4, '2017-03-21', '', 'Chargeable', 'Breakdown', '', '2', 'on_site', '127', '00006', '', 0, 'High', 0, '', '', 'accept', 6, 0),
(157, '00168', 'CC32019673', '', 1, 1, 1, 4, '2017-03-21', '', 'Chargeable', 'Breakdown', '', '2', 'on_site', '127', '00006', '', 0, 'High', 0, '', '', 'accept', 6, 0),
(158, '00169', 'CC32019673', '', 1, 1, 1, 4, '2017-03-21', '', 'Chargeable', 'Breakdown', '', '2', 'on_site', '127', '00006', '', 0, 'High', 0, '', '', 'accept', 6, 0),
(159, '00173', 'CC32019673', '', 1, 1, 1, 4, '2017-03-21', '', 'Chargeable', 'Preventive', '', '2', 'on_site', '128', '00006', '', 0, 'High', 0, '', '', 'accept', 6, 0),
(160, '00174', 'CC3212A195', '', 1, 1, 1, 4, '2018-06-07', '', 'Chargeable', 'Preventive', '', '2', 'on_site', '129', '00005', '', 0, 'High', 0, '', '', 'accept', 5, 0),
(161, '00175', '1164196000390', '', 2, 2, 1, 2, '', '', 'Warranty', 'Preventive', '', '2', 'on_site', '130', '00006', '', 0, 'High', 0, '', '', 'accept', 6, 0),
(162, '00176', 'BG85022476', '', 1, 1, 1, 3, '2017-09-25', '', 'Chargeable', 'Breakdown', '', '2', 'on_site', '131', '00006', '', 0, 'High', 0, '', '', 'accept', 6, 0),
(163, '00177', 'BG84122391', '', 1, 1, 1, 3, '2017-07-08', '', 'Chargeable', 'Breakdown', '', '2', 'on_site', '132,133', '00006', '', 0, 'High', 0, '', '', 'accept', 6, 0),
(164, '00178', 'BT3503C080', '', 2, 2, 1, 1, '', '', 'Chargeable', 'Preventive', '', '13', '', '64,64', '00007,00008', '', 0, '', 0, '', '', '', 0, 0),
(165, '00179', 'BT3503C089', '', 2, 2, 1, 1, '', '', 'Chargeable', 'Preventive', '', '1', '', '64,64', '00007,00008', '', 0, '', 0, '', '', '', 0, 0),
(166, '00180', 'BT31019259', '', 2, 2, 1, 1, '', '', 'Chargeable', 'Preventive', '', '15', '', '64', '00009', '', 0, '', 0, '', '', 'accept', 9, 0),
(167, '00181', 'BG86022822', '', 1, 1, 1, 3, '2018-08-28', '', 'Warranty', 'Warranty', '', '5', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(168, '00182', 'BR69077912', '', 1, 1, 1, 4, '', '', 'AMC', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(169, '00183', 'BR68127526', '', 1, 1, 1, 4, '2018-01-02', '', 'Chargeable', 'Breakdown', '', '1', 'outstation', '60', '00007,00008', '', 0, 'High', 0, '', '', '', 0, 0),
(170, '00184', 'CC3301A199', '', 1, 1, 1, 4, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'Low', 0, '', '', 'accept', 13, 0),
(171, '00185', 'DDS44', '', 1, 1, 1, 5, '2018-07-18', '', 'Warranty', 'Warranty', '', '8', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(172, '00186', 'EEER45', '', 1, 1, 1, 5, '2018-07-24', '', 'Warranty', 'Warranty', '', '8', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(173, '00187', 'FFFR45', '', 1, 1, 1, 5, '2018-07-24', '', 'Warranty', 'Warranty', '', '8', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(174, '00188', 'BR61059245', '', 1, 1, 1, 4, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(175, '00189', 'CC3212A195', '', 1, 1, 1, 4, '2018-06-07', '', 'Chargeable', 'Breakdown', '', '2', 'on_site', '134', '00005', '', 0, 'High', 0, '', '', 'accept', 5, 0),
(176, '00190', 'BG85022476', '', 1, 1, 1, 3, '2017-09-25', '', 'Chargeable', 'Breakdown', '', '2', 'on_site', '135', '00006', '', 0, 'High', 0, '', '', 'accept', 6, 0),
(177, '00191', 'CC32059880', '', 1, 1, 1, 4, '', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, '', 0, '', '', 'accept', 13, 0),
(178, '00192', 'BG85032478', '', 1, 1, 1, 3, '2017-03-23', '', 'Chargeable', 'Reverification', '', '2', 'on_site', '136', '00005', '', 0, 'High', 0, '', '', 'accept', 5, 0),
(179, '00193', 'BR68077154', '', 1, 1, 1, 4, '2016-11-29', '', 'Chargeable', 'Breakdown', '', '2', 'on_site', '134,137', '00006', '', 0, 'High', 0, '', '', 'accept', 6, 0),
(180, '00194', 'CF76062669', '', 1, 1, 1, 6, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '68', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(181, '00195', 'CF76052618', '', 1, 1, 1, 6, '2017-12-27', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '68', '00013', '', 0, 'Low', 0, '', '', 'accept', 13, 0),
(182, '00196', 'BR69108029', '', 1, 1, 1, 4, '2017-07-19', '', 'Chargeable', 'Breakdown', '', '2', 'on_site', '138,139', '00005', '', 0, 'High', 0, '', '', 'accept', 5, 0),
(183, '00197', 'CF75051429', '', 1, 1, 1, 5, '2016-09-13', '', 'Chargeable', 'Preventive', '', '15', 'outstation', '140', '00010', '', 0, '', 0, '', '', 'accept', 10, 0),
(184, '00198', 'BR69077912', '', 1, 1, 1, 4, '', '', 'AMC', 'Breakdown', '', '8', 'outstation', '141', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(185, '00199', 'BT31099793', '', 2, 2, 1, 1, '2012-12-06', '', 'Chargeable', 'Breakdown', '', '15', 'outstation', '64', '00009', '', 0, '', 0, '', '', 'accept', 9, 0),
(186, '00200', 'CJO7062124', '', 1, 1, 1, 9, '', '', '1', '1', '', '9', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(187, '00201', 'CF75021186', '', 1, 1, 1, 5, '', '', 'Rental', 'Breakdown', '', '11', 'outstation', '142', '00014', '', 0, 'High', 0, '', '', 'accept', 14, 0),
(188, '00203', 'CC32059880', '', 1, 1, 1, 4, '', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'Low', 0, '', '', 'accept', 13, 0),
(189, '00204', 'BG85032478', '', 1, 1, 1, 3, '2017-03-23', '', 'Chargeable', 'Reverification', '', '2', 'on_site', '143', '00005', '', 0, 'High', 0, '', '', 'accept', 5, 0),
(190, '00205', 'BJ84112342', '', 1, 1, 1, 3, '', '', 'Chargeable', 'Preventive', '4', '1', '', '66', '00007', '', 0, '', 0, '', '', '', 0, 0),
(191, '00206', 'BG85052603', '', 1, 1, 1, 3, '2018-02-03', '', 'Chargeable', 'Breakdown', '', '3', 'outstation', '144,145', '00001', '', 0, 'High', 0, '', '', 'accept', 1, 0),
(192, '00207', 'CF76052618', '', 1, 1, 1, 6, '2017-12-27', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '68', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(193, '00208', 'BR69108029', '', 1, 1, 1, 4, '', '', 'Chargeable', 'Preventive', '', '2', '', '60', '00006', '', 0, 'High', 0, '', 'PM&CAL', 'accept', 6, 0),
(194, '00209', 'BR69077912', '', 1, 1, 1, 4, '', '', 'AMC', 'Preventive', '', '8', 'outstation', '146', '00013', '', 0, 'High', 0, '', '', 'later', 13, 0),
(195, '00210', 'BR61059245', '', 1, 1, 1, 4, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '147', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(196, '00211', 'CF76052599', '', 1, 1, 1, 6, '', '', 'Chargeable', 'Breakdown', '', '11', 'outstation', '148', '00014', '', 0, 'High', 0, '', '', 'accept', 14, 0),
(197, '00212', 'BR63094065', '', 1, 1, 1, 4, '', '', 'Warranty', 'Breakdown', '', '1', 'outstation', '149', '00008', '', 0, 'High', 0, '', '', 'accept', 8, 0),
(198, '00213', '1166369000664', '', 2, 2, 1, 2, '2018-08-24', '', 'Warranty', 'Warranty', '', '2', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(199, '00214', '1167208000709', '', 2, 2, 1, 2, '2018-09-24', '', 'Warranty', 'Warranty', '', '2', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(200, '00215', 'BG 84122393', '', 1, 1, 1, 3, '2017-01-06', '', 'Chargeable', 'Preventive', '', '5', 'outstation', '150', '00015', '', 0, 'High', 0, '', '', 'accept', 15, 0),
(201, '00216', 'CC 31018805', '', 1, 1, 1, 4, '2012-07-11', '', 'Chargeable', 'Reverification', '', '5', 'outstation', '60', '00015', '', 0, 'High', 0, '', '', 'accept', 15, 0),
(202, '00217', 'BR63094055', '', 1, 1, 1, 4, '2012-09-12', '', 'Chargeable', 'Breakdown', '', '1', 'outstation', '134,60', '00008', '', 0, 'High', 0, '', '', 'accept', 8, 0),
(203, '00218', 'CC32059880', '', 1, 1, 1, 4, '', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(204, '00219', 'BG84082177', '', 1, 1, 1, 3, '2018-02-03', '', 'Chargeable', 'Breakdown', '', '3', 'outstation', '151,152,66', '00001', '', 0, 'High', 0, '', '', 'accept', 1, 0),
(205, '00220', 'BG85042544', '', 1, 1, 1, 3, '2018-03-19', '', 'Chargeable', 'Breakdown', '', '3', 'outstation', '153', '00001', '', 0, 'Critical', 0, '', '', 'accept', 1, 0),
(206, '00221', 'BT3402B600', '', 2, 2, 1, 1, '2015-12-31', '', 'Chargeable', 'Breakdown', '', '2', 'on_site', '154', '00006', '', 0, 'High', 0, '', '', 'accept', 6, 0),
(207, '00222', 'BR69121947', '', 1, 1, 1, 4, '2018-01-03', '', 'Chargeable', 'Breakdown', '', '1', 'outstation', '155', '00008', '', 0, 'High', 0, '', '', 'accept', 8, 0),
(208, '00223', 'CC32059880', '', 1, 1, 1, 4, '', '', 'Chargeable', 'Reverification', '', '8', 'outstation', '156', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(209, '00224', 'CC3305A349', '', 1, 1, 1, 4, '', '', 'Chargeable', 'Breakdown', '', '5', 'outstation', '157', '00015', '', 0, 'High', 0, '', '', 'accept', 15, 0),
(210, '00225', 'CF76052628', '', 1, 1, 1, 6, '', '', 'Rental', 'Breakdown', '', '5', 'outstation', '158', '00015', '', 0, 'High', 0, '', '', 'accept', 15, 0),
(211, '00226', 'BT33305B305', '', 2, 2, 1, 1, '', '', 'Warranty', 'Breakdown', '', '15', 'outstation', '159', '00009', '', 0, '', 0, '', '', 'accept', 9, 0),
(212, '00227', 'BT31119967', '', 2, 2, 1, 1, '', '2018-09-27', '1', '1', '', '15', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(213, '00228', 'BT3603C850', '', 2, 2, 1, 2, '', '', 'Chargeable', 'Preventive', '', '2', 'on_site', '160,161', '00005', '', 0, 'High', 0, '', '', 'accept', 5, 0),
(214, '00229', 'CC3301A199', '', 1, 1, 1, 4, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'High', 0, '', '', 'accept', 0, 0),
(215, '00230', 'BJ04062089', '', 1, 1, 1, 3, '2016-04-08', '', 'Chargeable', 'Breakdown', '', '3', 'outstation', '162', '00001', '', 0, 'High', 0, '', '', 'accept', 1, 0),
(216, '00231', 'CF 75091711', '', 1, 1, 1, 6, '2017-02-08', '', 'Chargeable', 'Demo', '', '5', 'outstation', '68', '00015', '', 0, '', 0, '', '', 'accept', 15, 0),
(217, '00232', 'BG86022822', '', 1, 1, 1, 3, '', '', 'Warranty', 'Reverification', '', '5', 'outstation', '163', '00015', '', 0, 'High', 0, '', '', 'accept', 15, 0),
(218, '00233', 'BG 84122393', '', 1, 1, 1, 3, '2017-01-06', '', 'Chargeable', 'Breakdown', '', '5', 'outstation', '164', '00015', '', 0, 'High', 0, '', '', 'accept', 15, 0),
(219, '00234', 'CF76052628', '', 1, 1, 1, 6, '', '', 'Rental', 'Reverification', '', '5', 'outstation', '68', '00015', '', 0, '', 0, '', '', 'accept', 15, 0),
(220, '00235', 'BR69077912', '', 1, 1, 1, 4, '', '', 'AMC', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'Low', 0, '', '', 'accept', 13, 0),
(221, '00236', 'CF75021186', '', 1, 1, 1, 5, '', '', 'Rental', 'Breakdown', '', '11', 'outstation', '165', '00014', '', 0, '', 0, '', '', 'accept', 14, 0),
(222, '00237', 'BJ05042548', '', 1, 1, 1, 3, '2017-04-27', '', 'Chargeable', 'Breakdown', '', '1', 'outstation', '166,167', '00008', '', 0, 'High', 0, '', '', 'accept', 8, 0),
(223, '00238', 'BG86022822', '', 1, 1, 1, 3, '', '', 'Warranty', 'Reverification', '', '5', 'outstation', '66', '00015', '', 0, 'Low', 0, '', '', 'accept', 15, 0),
(224, '00239', 'CC32059880', '', 1, 1, 1, 4, '', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, '', 0, '', '', 'accept', 13, 0),
(225, '00240', 'CC32019673', '', 1, 1, 1, 4, '2017-03-21', '', 'Chargeable', 'Breakdown', '', '2', 'on_site', '168', '00006', '', 0, 'High', 0, '', '', 'accept', 6, 0),
(226, '00241', 'CF76052599', '', 1, 1, 1, 6, '', '', 'Chargeable', 'Breakdown', '', '5', 'outstation', '169', '00015', '', 0, 'High', 0, '', '', 'accept', 15, 0),
(227, '00242', 'CF76052618', '', 1, 1, 1, 6, '2017-12-27', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '68', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(228, '00243', 'BR61059245', '', 1, 1, 1, 4, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(229, '00244', 'CF75061467', '', 1, 1, 1, 5, '', '', 'Rental', 'Preventive', '', '11', 'outstation', '170', '00014', '', 0, 'High', 0, '', '', 'accept', 14, 0),
(230, '00245', 'BR68097289', '', 1, 1, 1, 4, '', '', 'Rental', 'Preventive', '', '11', 'outstation', '171', '00014', '', 0, 'High', 0, '', '', 'accept', 14, 0),
(231, '00246', 'CF76062669', '', 1, 1, 1, 6, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '172', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(232, '00247', 'CC32059880', '', 1, 1, 1, 4, '', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '146,60', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(233, '00248', 'CF76062684', '', 1, 1, 1, 5, '', '', 'Chargeable', 'Breakdown', '', '15', 'outstation', '173', '00009', '', 0, 'High', 0, '', '', 'accept', 9, 0),
(234, '00249', '1163684000317', '', 2, 2, 1, 2, '', '', 'Warranty', 'Breakdown', '', '2', 'on_site', '174', '00005', '', 0, 'High', 0, '', '', 'accept', 5, 0),
(235, '00250', 'AA38061371', '', 1, 1, 1, 4, '2012-11-18', '', 'Chargeable', 'Reverification', '', '2', 'on_site', '175', '00005', '', 0, '', 0, '', '', 'accept', 5, 0),
(236, '00251', 'CF76052618', '', 1, 1, 1, 6, '2017-12-27', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '176', '00013', '', 0, 'Low', 0, '', '', 'accept', 13, 0),
(237, '00252', 'BR69077912', '', 1, 1, 1, 4, '', '', 'AMC', 'Preventive', '', '8', 'outstation', '146,60', '00013', '', 0, '', 0, '', '', 'accept', 13, 0),
(238, '00253', 'BG85052603', '', 1, 1, 1, 3, '2018-02-03', '', 'Chargeable', 'Breakdown', '', '3', 'outstation', '67,66', '00001', '', 0, 'High', 0, '', '', 'accept', 1, 0),
(239, '00254', 'CF76052618', '', 1, 1, 1, 6, '2017-12-27', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '177', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(240, '00255', 'CC32059880', '', 1, 1, 1, 4, '', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(241, '00256', 'BT3407B845', '', 2, 2, 1, 1, '', '', 'Chargeable', 'Preventive', '', '5', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(242, '00257', 'BT3407B845', '', 2, 2, 1, 1, '', '', 'Chargeable', 'Preventive', '', '5', '', '64', '00015', '', 0, '', 0, '', '', 'accept', 15, 0),
(243, '00258', 'BT3604C907', '', 2, 2, 1, 1, '2018-10-15', '', 'Warranty', 'Warranty', '', '11', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(244, '00259', 'BR61089392', '', 1, 1, 1, 4, '', '', 'Chargeable', 'Preventive', '', '1', '', '60', '00007', '', 0, '', 0, '', '', '', 0, 0),
(245, '00260', 'CF76062684', '', 1, 1, 1, 5, '', '', 'Chargeable', 'Breakdown', '', '15', 'outstation', '165,62', '00009', '', 0, '', 0, '', '', 'accept', 9, 0),
(246, '00261', 'CF76062684', '', 1, 1, 1, 5, '', '', 'Chargeable', 'Breakdown', '', '15', 'outstation', '62', '00009', '', 0, 'High', 0, '', '', 'accept', 9, 0),
(247, '00262', 'BR62029703', '', 1, 1, 1, 4, '', '', 'Chargeable', 'Preventive', '', '15', '', '60', '00009', '', 0, '', 0, '', '', 'accept', 9, 0),
(248, '00263', 'CC32019673', '', 1, 1, 1, 4, '2017-03-21', '', 'Chargeable', 'Breakdown', '', '2', 'on_site', '178', '00005', '', 0, 'Low', 0, '', '', 'accept', 5, 0),
(249, '00264', '1163684000332', '', 2, 2, 1, 2, '', '', 'Warranty', 'Breakdown', '', '2', 'on_site', '179', '00005', '', 0, 'High', 0, '', '', 'accept', 5, 0),
(250, '00265', 'CF76052599', '', 1, 1, 1, 6, '', '', 'Chargeable', 'Breakdown', '', '11', 'outstation', '180', '00014', '', 0, 'High', 0, '', '', 'accept', 14, 0),
(251, '00266', 'BT3410B960', '', 2, 2, 1, 1, '', '', 'Chargeable', 'Preventive', '', '15', '', '64', '00009', '', 0, '', 0, '', '', '', 0, 0),
(252, '00267', 'BT30089047', '', 2, 2, 1, 1, '', '2017-04-24', 'AMC', 'Preventive', '', '11', '', '64', '00014', '', 0, 'High', 0, '', '', '', 0, 0),
(253, '00268', 'BT39027959', '', 2, 2, 1, 1, '', '', 'Chargeable', 'Preventive', '', '15', '', '64', '00009', '', 0, '', 0, '', '', '', 0, 0),
(254, '00269', 'BG86012783', '', 1, 1, 1, 3, '', '', 'Warranty', 'Breakdown', '', '2', 'on_site', '110,66', '00005', '', 0, 'High', 0, '', '', 'accept', 5, 0),
(255, '00270', 'CC3301A199', '', 1, 1, 1, 4, '', '', 'Rental', 'Reverification', '', '8', 'outstation', '181', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(256, '00271', 'BR69077912', '', 1, 1, 1, 4, '', '', 'AMC', 'Preventive', '', '8', 'outstation', '60', '00013', '', 0, 'Low', 0, '', '', 'accept', 13, 0),
(257, '00272', 'BR61059245', '', 1, 1, 1, 4, '', '', 'Rental', 'Reverification', '', '8', 'outstation', '182', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(258, '00273', 'CC3411A823', '', 1, 1, 1, 4, '', '', 'Chargeable', 'Breakdown', '', '1', 'outstation', '183', '00007,00008', '', 0, 'High', 0, '', '', 'accept', 8, 0),
(259, '00274', 'BR68077154', '', 1, 1, 1, 4, '2016-11-29', '', 'Chargeable', 'Breakdown', '', '2', 'on_site', '184', '00006', '', 0, 'High', 0, '', '', 'accept', 6, 0),
(260, '00275', 'CF76052618', '', 1, 1, 1, 6, '', '', 'Chargeable', 'Preventive', '', '8', '', '68', '00013', '', 0, '', 0, '', '', '', 0, 0),
(261, '00276', 'CF76062669', '', 1, 1, 1, 6, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '185', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(262, '00277', 'BT3604C907', '', 2, 2, 1, 1, '2018-10-15', '', 'Warranty', 'Warranty', '', '11', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(263, '00278', 'CC3301A199', '', 1, 1, 1, 4, '', '', 'Rental', 'Preventive', '', '8', 'outstation', '186', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(264, '00279', '1168270000794', '', 2, 2, 1, 2, '2018-11-17', '', 'Warranty', 'Warranty', '', '14', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(265, '00280', 'CF76052618', '', 1, 1, 1, 6, '', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '185,68', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(266, '00281', 'BR69077912', '', 1, 1, 1, 4, '', '', 'AMC', 'Preventive', '', '8', 'outstation', '146,60', '00013', '', 0, 'High', 0, '', '', 'accept', 13, 0),
(267, '00282', '5045012', '', 1, 1, 1, 4, '2011-07-01', '', 'Chargeable', 'Breakdown', '', '5', 'outstation', '60,187', '00015', '', 0, 'High', 0, '', '', '', 0, 0),
(268, '00283', '1169599000887', '', 2, 2, 1, 2, '', '', 'Warranty', 'Installation', '', '5', 'outstation', '188', '00015', '', 0, '', 0, '', '', '', 0, 0),
(269, '00284', 'CF76052599', '', 1, 1, 1, 6, '', '', 'Chargeable', 'Breakdown', '', '5', 'outstation', '189', '00012,00015', '', 0, 'High', 0, '', '', '', 0, 0),
(270, '00285', '1167208000728', '', 2, 2, 1, 2, '', '', 'Warranty', 'Breakdown', '', '5', 'outstation', '190', '00015', '', 0, 'High', 0, '', '', 'accept', 0, 0),
(271, '00286', '1169599000881', '', 2, 2, 1, 2, '2018-11-19', '', 'Warranty', 'Warranty', '', '17', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(272, '00287', '1169599000881', '', 2, 2, 1, 2, '', '', 'Warranty', 'Preventive', '', '17', 'outstation', '188', '00001,00025', '', 0, 'High', 0, '', '', '', 0, 0),
(273, '00288', 'CC32059880', '', 1, 1, 1, 4, '', '', 'CMC', 'Preventive', '', '8', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(274, '00289', 'TESTSR8877', '', 1, 1, 1, 7, '', '', 'Chargeable', 'Breakdown', '', '8', 'outstation', '75', '00018', '', 0, 'Low', 0, '', 'this is test data. please ignore it', 'accept', 18, 0),
(275, '00290', '11111', 'afsafasfa', 1, 1, 1, 4, '', '', 'Chargeable', 'AMC', '', '19', 'on_site', '19,60', '00026', '', 0, 'Critical', 0, '', 'asfasdfasfasf', 'accept', 26, 0),
(276, '00291', 'DUM0000010', '', 1, 1, 1, 5, '', '', 'Chargeable', 'AMC', '', '19', 'on_site', '142,62', '00026', '', 0, 'Critical', 0, '', 'asfasfdsafasfasfasfasfsafsafsafasfsafsa', 'accept', 26, 0),
(277, '00292', '11111', 'afsafasfa', 1, 1, 1, 4, '', '', 'Chargeable', 'AMC', '1', '19', 'on_site', '19,60', '00026', '', 0, 'Critical', 0, '', 'ssssssssssssss', 'accept', 0, 0),
(278, '00293', 'DUM0000010', '', 1, 1, 1, 5, '', '', 'Chargeable', 'AMC', '', '19', 'on_site', '8,62', '00026', '', 0, 'Critical', 0, '', 'sadfsafsafasfasfs', '', 0, 0),
(279, '00294', '11111', 'afsafasfa', 1, 1, 1, 4, '', '', 'Chargeable', 'AMC', '1', '19', 'on_site', '23,60', '00026', '', 0, 'Critical', 0, '', 'sddfsafasfasf', 'accept', 26, 0),
(280, '00295', '124545', '1414', 1, 1, 1, 4, '', '', 'Chargeable', 'AMC', '1', '19', 'on_site', '19,60', '00027', '', 0, 'Critical', 0, '', 'dasfsadfdasfsafsafasfsafsafas', 'accept', 27, 0),
(281, '00296', '124545', '1414', 1, 1, 1, 4, '', '', 'Chargeable', 'Out Of Warranty', '1', '19', 'on_site', '19,60', '00026', '', 0, 'Critical', 0, '', 'sasdssdadsssas', 'accept', 26, 0),
(282, '00297', '232332', '2323', 1, 1, 1, 8, '', '', 'Chargeable', 'Out Of Warranty', '', '19', 'on_site', '46,82', '00027', '', 0, 'Critical', 0, '', 'gfsdgsdgdsgdsgdsgsdgsdgsdg', 'accept', 27, 0),
(283, '00298', '12332', '111', 1, 1, 1, 3, '', '', 'Chargeable', 'AMC', '', '19', 'on_site', '66', '00026', '', 0, 'Critical', 0, '', 'sdgdsgsdgsdgsdgs', 'accept', 26, 0),
(284, '00299', 'BR3508C408', '', 2, 2, 1, 1, '2017-05-26', '', 'Chargeable', 'Preventive', '', '6', 'outstation', '63,64', '00011', '', 0, 'Critical', 0, '', 'safsafasfasfafsf', '', 0, 0),
(285, '00300', '3456', '', 1, 1, 1, 6, '2019-06-25', '', 'Chargeable', 'AMC', '', '19', 'on_site', '158,68', '00027', '', 0, 'High', 0, '', 'fdsafdasfafaf', '', 0, 0),
(286, '00301', '3456', '', 1, 1, 1, 6, '2019-06-25', '', 'Chargeable', 'Preventive', '', '19', 'on_site', '68,192', '00027', '', 0, 'Critical', 0, '', 'safdsafasfafsafass', '', 0, 0),
(287, '00302', 'TESTSR8877', '', 1, 1, 1, 7, '2018-06-02', '', 'Chargeable', 'Preventive', '', '8', 'outstation', '75', '00011', '', 0, '', 0, '', '', '', 0, 0),
(288, '00303', 'TESTSR8877', '', 1, 1, 1, 7, '2018-06-02', '', 'Chargeable', 'AMC', '', '8', 'outstation', '75', '00013', '', 0, '', 0, '', 'asfasfdasfasfsafsa', '', 0, 0),
(289, '00304', '3456', '', 1, 1, 1, 6, '2019-06-25', '', 'Chargeable', 'Out Of Warranty', '', '19', 'on_site', '84,68', '00026', '', 0, 'Critical', 0, '', 'dfsgsdgdssdgdss', '', 0, 0),
(290, '00305', '3456', '', 1, 1, 1, 6, '2019-06-25', '', 'Chargeable', 'AMC', '', '19', 'on_site', '68', '00026', '', 0, '', 0, '', 'rerfewtrwe', '', 0, 0),
(291, '00306', '3456', '', 1, 1, 1, 6, '2019-06-25', '', 'Chargeable', 'Preventive', '', '19', 'on_site', '68', '00027', '', 0, '', 0, '', 'fdsafsafa', '', 0, 0),
(292, '00307', 'DUM0000023', '', 1, 1, 4, 12, '2019-07-02 00:00:00', '', 'Warranty', 'AMC', '', '19', '', '193,194', '00026', '', 0, '', 0, '', 'ASFASFDSAFASFASFAFASFAFASF', '', 0, 0),
(293, '00311', 's123', '', 1, 1, 1, 6, '', '', 'Preventive', 'Preventive', '', '19', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(294, '00312', 'ts1234', '', 1, 1, 3, 11, '', '', 'Preventive', 'Preventive', '', '19', '', '', '', '', 0, '', 0, '', '', '', 0, 0),
(295, '00313', 'TESTSR8877', '', 0, 0, 0, 0, '2018-06-02', '', 'Chargeable', 'soft_up', '4', '8', 'outstation', '195', '00018', '', 0, 'Low', 0, '', 'dcdsfdf', '', 0, 0),
(296, '00314', 'TESTSR8877', '', 1, 1, 1, 7, '2018-06-02', '', 'Chargeable', 'soft_up', '', '8', 'outstation', '75', '00018', '', 0, 'Low', 0, '', 'this is test description', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `service_status`
--

CREATE TABLE `service_status` (
  `id` int(10) NOT NULL,
  `prod_service_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spares`
--

CREATE TABLE `spares` (
  `id` int(10) NOT NULL,
  `spare_name` varchar(100) NOT NULL,
  `part_no` varchar(50) NOT NULL,
  `spare_qty` int(10) NOT NULL,
  `used_spare` int(10) NOT NULL,
  `eng_spare` int(10) NOT NULL,
  `purchase_price` int(10) NOT NULL,
  `purchase_qty` int(10) NOT NULL,
  `min_qty` int(10) NOT NULL,
  `purchase_date` varchar(100) NOT NULL,
  `sales_price` int(10) NOT NULL,
  `effective_date` varchar(100) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `dashboard_show` int(10) NOT NULL,
  `created_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spares`
--

INSERT INTO `spares` (`id`, `spare_name`, `part_no`, `spare_qty`, `used_spare`, `eng_spare`, `purchase_price`, `purchase_qty`, `min_qty`, `purchase_date`, `sales_price`, `effective_date`, `invoice_no`, `reason`, `dashboard_show`, `created_on`) VALUES
(1, 'Kit Valcor Pump Maint', '26009', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(2, 'String Bar -Triangular', '26405', 8, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(3, 'Filter Colorimetry Box', '26538', 52, 0, 0, 3453, 52, 0, '2018-02-15 10:52', 0, '', 'srdgvfdgfsd', 'dsfgdsgsgds', 0, ''),
(4, 'Memory Data Novram', '26549', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(5, 'Fuse Holder Cap6, 3 X32', '26664', 13, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(6, 'RED STIRRING BAR 3,2X12,7', '26674', 9, 0, 0, 0, 10, 0, '', 0, '', '', '', 0, ''),
(7, 'LAMP HALOGEN', '26699', 22, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(8, 'THERMAL PAPER', '26849', 5, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(9, '3 TUBINGS:NEEDLE-ELECTROVALVE', '27001', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(10, 'PCB Chronometry Analog', '27013', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(11, 'STA Compact PCB Fuse Board', '27018', 5, 0, 0, 0, 5, 0, '', 0, '', '', '', 0, ''),
(12, 'PCB Add Component', '27019', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(13, 'PCB Product Detection', '27023', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(14, 'STA Compact Suction Head Chain', '27025', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(15, 'Cuvette Loader Chain', '27026', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(16, 'STA Compact Sample Drawer Chain', '27027', 3, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(17, 'STA Compact Product Drawer Chain', '27028', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(18, 'STA Compact Cuv Loader Switches', '27029', 4, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(19, 'Drawer /Jack Microswitch', '27030', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(20, 'Fuses T03A6 3 x 32 (10)', '27034', 8, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(21, 'Fuses T4A6,3x32(10)', '27037', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(22, 'STA Compact Z Motor', '27038', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(23, 'STA Compact X,Y1, Y2 Motor', '27051', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(24, 'STA Compact Washing Well', '27059', 3, 0, 0, 0, 3, 0, '', 0, '', '', '', 0, ''),
(25, 'Glycol Researvoir', '27062', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(26, 'PCB Reagent Display (Round)', '27069', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(27, 'PCB Sample Detection', '27070', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(28, 'PCB PID Version 2', '27082', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(29, 'PCB A/D Photometry Measure', '27110', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(30, 'STB Sample Display Board (Round)', '27148', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(31, 'Membrance Kit Vaccum Pump', '27165', 4, 0, 0, 0, 4, 0, '', 0, '', '', '', 0, ''),
(32, 'Cooling Pump Maintenance Kit', '27169', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(33, 'Switch for Container Assy', '27171', 3, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(34, 'Sensor Temprature Multimeter', '27208', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(35, 'Pcb Main Rack', '27209', 3, 0, 0, 0, 3, 0, '', 0, '', '', '', 0, ''),
(36, 'Cuvette Temprature', '27223', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(37, 'Fuses (T)10A 6.3x32 UL (10)', '27224', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(38, 'FUSES (T) 8A 6,3X32 (10)', '27225', 3, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(39, 'PCB 4 PORT', '27262', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(40, 'NEEDLE ARM N[3 WITH NUT', '27307', 0, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(41, 'PCB Zero Axis', '27337', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(42, 'Fan Rear Panel', '27347', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(43, 'NEEDLE ARM N[2 WITH NUT B', '27354', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(44, 'Motor Z and Pippetor', '27355', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(45, 'Power Supply Switiching', '27375', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(46, 'Motor Assay x Sta Compact', '27407', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(47, 'Tube Heating Z 3', '27415', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(48, 'Filter Air Bag', '27420', 10, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(49, 'Suction Rubber Head', '27421', 5, 0, 0, 0, 5, 0, '', 0, '', '', '', 0, ''),
(50, 'WHITE STIRRING BAR (2X7)', '27425', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(51, 'Electrovalve 2 Way', '27432', 8, 0, 0, 0, 8, 0, '', 0, '', '', '', 0, ''),
(52, 'Filter Liquid', '27458', 6, 0, 0, 0, 6, 0, '', 0, '', '', '', 0, ''),
(53, 'Motor Optical Module', '27478', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(54, 'Fan Optical Module', '27481', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(55, 'Vacuum Test Tool', '27495', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(56, 'PCB Aton VGA', '27515', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(57, 'O Ring /teflon Tips (X6)', '27530', 18, 0, 0, 0, 18, 0, '', 0, '', '', '', 0, ''),
(58, 'SYRINGE AND O RING', '27538', 6, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(59, 'Service Floppy Disk', '27564', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(60, 'Filter Mains', '27574', 7, 0, 0, 300, 30, 0, '2017-12-29 17:00', 100, '', 'dfdsfs', 'sdfsdfs', 0, ''),
(61, 'Fuse T 1A 6,3x32(10)', '27579', 3, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(62, 'Fuse T 3A 6.3x32 (10)', '27581', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(63, 'Fibre Optic Harness', '38029', 1, 1, 1, 0, 2, 0, '', 0, '', '', '', 0, ''),
(64, 'Vaccum Switch 450mB', '38055', 5, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(65, 'Cuvetter Tem Perature ST Art', '38100', 3, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(66, 'Extractor Eprom Plcc', '38107', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(67, 'PCB Heating 4 & 8 Cells', '38108', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(68, 'Power Supply (+24V)', '38121', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(69, 'Power Supply (+5,+12,-12)', '38122', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(70, 'Filter Colorimetry Box V 3', '38125', 18, 0, 0, 0, 18, 0, '', 0, '', '', '', 0, ''),
(71, 'Printer Thermic Assembly', '38133', 1, 1, 1, 0, 0, 0, '', 0, '', '', '', 0, ''),
(72, 'PCB Multifunctions V.2', '38136', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(73, 'PCB Connections Motors V.2', '38149', 3, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(74, 'NIPPLE STRAIGHT PU : S TUBING', '38162', -8, 4, 4, 0, 5, 0, '', 50, '', '', '', 0, ''),
(75, 'Shutle Belt Driven', '38274', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(76, 'Shuttle Belt Driving', '38275', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(77, 'Y Arm Belt', '38280', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(78, 'Drawer Belt', '38288', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(79, 'Fiber Optic-Receiving L300(X1)', '38292', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(80, 'X1 Conveyor Belt', '38297', 3, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(81, 'X2 Conveyor Belt', '38298', 3, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(82, 'PCB ARM Junction', '38309', 16, 0, 0, 400, 40, 0, '2017-12-29 17:00', 200, '', 'sddsfds', 'dsfsfsdf', 0, ''),
(83, 'PCB Heating Head', '38310', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(84, 'PCB Analog Measurement', '38313', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(85, 'PCB Heating Measure', '38314', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(86, 'PCB Multifunctions Main Rack', '38318', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(87, 'PCB Cooling Unit Relay V.2.0', '38321', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(88, 'Cable Zero Y Switch Rack', '38349', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(89, 'Cable T Probe Product Drawer', '38363', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(90, 'Micro Switch with Cable', '38369', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(91, 'Fuse Holder Main', '38372', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(92, 'Motor Product Drawer', '38384', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(93, 'Motor X Stepper', '38387', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(94, 'Motor Y Stepper', '38388', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(95, 'Motor DC Tube Rotation', '38389', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(96, 'Motor Pipetor', '38390', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(97, 'Motor Shuttle Stop -Dual', '38546', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(98, 'Washing Well N2 / N3', '38558', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(99, 'Power Supply Dc+5,+1,-12,+24', '38559', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(100, 'Motor Z Steppper', '38564', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(101, 'Washing Well N1', '38565', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(102, 'Tubing PVC 6x9 L2', '38577', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(103, 'Tubing Teflon Diam=2 L=5', '38583', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(104, 'Electrovalve 2 Way Piercing', '38589', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(105, 'Water Trap', '38608', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(106, 'Fiber Optic 2.2x1220(X1)', '38627', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(107, 'Cover Measurement Assay', '38636', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(108, 'NEEDLE N[1 STADARD V.2', '38646', 6, 0, 0, 0, 6, 0, '', 0, '', '', '', 0, ''),
(109, 'PCB Multifunctions Head N4', '38652', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(110, 'Reservoir Vaccum', '38757', 4, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(111, 'Cap Used Liquied Container', '38764', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(112, 'PCB DC Motor Driver', '38790', 5, 0, 0, 0, 5, 0, '', 0, '', '', '', 0, ''),
(113, 'PCB Interface I/O PC V.3', '38806', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(114, 'Nipple Straight -PU4 Tubing PP', '38824', 5, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(115, 'Eprom CMDMOT Ver 1.81', '38828', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(116, 'Test Tool Incub.Temprature', '38838', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(117, 'PCB Mother Only / 4 Cells', '38856', 1, 0, 0, 0, 1, 0, '', 0, '', '', 'To SR', 0, ''),
(118, 'Distributor Cable J34', '38858', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(119, 'Cable Drawer Sample J15 L=770', '38862', 3, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(120, 'Cable Product Drawer J16 L=910', '38863', 3, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(121, 'Cpu Processor Fan 12v', '38868', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(122, 'Photometery Box Fan', '38869', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(123, 'Tubing PVC 3x2 L10', '38873', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(124, 'Tubing Pur-2.9x4.3L10', '38875', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(125, 'Tubing PE 4x6Lx10', '38911', 3, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(126, 'Tubing PUr 4x6L 10', '38912', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(127, 'PCB Power I/O Star', '38918', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(128, 'Tool V3 Optical Module', '38921', 3, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(129, 'Motor Drawer', '38939', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(130, 'Tool Maping Piercing', '39012', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(131, 'Tool Needle Positon Well', '39013', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(132, 'Motor Dc Y1/Y2 Rack V2', '39014', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(133, 'Motor DC X1/x2 Rack V.2', '39015', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(134, 'Wedge Adjust Cap Piercing', '39020', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(135, 'Needle 1 Piercing V.3', '39022', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(136, 'Piercing Washing Well', '39023', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(137, 'Eprom GSTFB Ver 2.40 Gestion', '39037', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(138, 'Eprom MSTFB Ver.2.40 Measure', '39039', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(139, 'Head +Support Suction Tip', '39127', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(140, 'Wheel Tube Rotation', '39134', 3, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(141, 'Nylon Screws M3x8(X5)', '39152', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(142, 'Suction Tip V.4', '39163', 4, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(143, 'Needle N1 Piercing STA-R A', '39164', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(144, 'Fiber Receiving Optic', '39168', 5, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(145, 'Motor Z DC Piercing', '39208', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(146, 'PCB Colo Measure', '39225', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(147, 'Head Measure VMIN=150ul COLO', '39234', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(148, 'PUMP VALCOR', '39240', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(149, 'Needle N1 Standard V.3B', '39249', 4, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(150, 'Needle N2 V2B', '39250', 5, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(151, 'Tubing PE 3x4 3L 10', '39278', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(152, 'Electrovalve 3 Wat 24v', '39306', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(153, 'Needle Equiped', '39356', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(154, 'Assay Lamp Support', '39369', 6, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(155, 'Qwerty Keyboard', '39394', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(156, 'Cutter Motor', '39399', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(157, 'Acc Axis Entry Rotation Screw', '39444', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(158, 'Flow Meter', '39481', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(159, 'Chain Pipetting Head', '39497', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(160, 'Key Board ST ART NG', '39549', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(161, 'Cable Block Measure Temp. Probe', '39599', 8, 0, 0, 0, 8, 0, '', 0, '', '', '', 0, ''),
(162, 'Electrovalve 2 Way Sirai', '39610', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(163, 'Cables Flates J20 J41', '39617', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(164, 'Tools ILS Swtich', '39628', 5, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(165, 'Electrovalve Well Equiped X3', '39629', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(166, 'Mapping Tool', '39635', 5, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(167, 'PCB Motor Interface', '39643', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(168, 'Filter Liquid X1', '39738', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(169, 'Positioner Of Carrousel', '39760', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(170, 'Mapping Tool (Cuvette)', '39769', 5, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(171, 'Sample Mapping Tool', '39857', 5, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(172, 'Cooler Fan CPU', '39861', 6, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(173, 'Equipped Printer + Cover', '39894', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(174, 'Measurement CPU Board', '39978', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(175, 'PCB Rotord Interface', '39979', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(176, 'Tool Assembly Optical Fiber', '39990', 5, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(177, 'KIT PELTIER V.2(X2)', '80022', 0, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(178, 'Ev Cuvette Base Plate', '80060', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(179, 'M5 Cuv.Base Plate Silencer', '80063', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(180, 'Bridge DIODE 35A 600V', '80070', 10, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(181, 'Cooling Pump Maintenance KT V2', '80084', 5, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(182, 'ROTOR PRODUCTS N0*1', '80091', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(183, 'PCB Multifunctions Head 3', '80105', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(184, 'PCB Multifunctions Head 1+2', '80106', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(185, 'CONNECTED PIPETTE', '80109', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(186, 'Reservoir Intermediate Cleaner', '80121', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(187, 'CASSETTE PRODUCT DRAWER V2', '80175', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(188, 'EU Removable Power Cord', '80224', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(189, 'Fluid Connector + Tubing Kit', '80235', 0, 1, 1, 0, 0, 0, '', 0, '', '', '', 0, ''),
(190, 'Optical Sensor + Adaptors', '80236', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(191, 'Equipped Z Motor', '80238', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(192, 'Rail Temporature Sensor Board', '80247', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(193, 'Equiped Fuses Board', '80251', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(194, 'Equipped Petter Assy', '80255', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(195, 'Assy Rail', '80259', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(196, 'Measurement CPU Board+Bracket', '80262', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(197, 'Motor Cuvette Roll Drive', '80432', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(198, 'PCB Temperature Regulation', '80437', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(199, 'Rail Nearness Sensor', '80514', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(200, 'Reed Rotor Switch Trap', '80515', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(201, 'Infrared Light Board', '80648', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(202, 'Filter Rinsing Asay Air', '80675', 16, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(203, 'LLD Cable (X3)', '80787', 3, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(204, 'Liquid Level Dectect Cable', '80792', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(205, 'Electrovave N1', '80901', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(206, 'PCB 4 Axis (Mpp4)', '80924', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(207, 'MPP4 Board Front Plate', '80949', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(208, 'Printer Installation SOFT V06', '80972', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(209, 'Satellite Techn.Manual (CDROM)', '80982', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(210, 'Rail Moter', '80994', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(211, 'Moteur Agitateur', '86554', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(212, 'Module Incubation', '86556', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(213, 'Kit Ventilateur', '86558', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(214, 'Kit Ecran', '86559', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(215, 'Carte Mere START MAX', '86565', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(216, 'YEARLY ADDITIONAL PM KIT', '87032', 3, 0, 0, 0, 3, 0, '', 0, '', '', '', 0, ''),
(217, 'Bar Code Reader Cable V2', '87034', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(218, 'Rinsing EV Block V2', '87054', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(219, 'Suction Tip V5(X2)', '87063', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(220, 'Gripping Nipples + Tubing Kit', '87077', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(221, 'PCb CPU Pentium ETX V2', '87095', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(222, 'Equipped Photo Motor Support', '87097', -1, 0, 0, 0, -1, 0, '', 0, '', '', '', 0, ''),
(223, 'Suction Tip V5 Mapping Tools', '88329', 4, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(224, 'Plate Bar Code Conveyor V4', '88332', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(225, 'Tourchscreen Control', '88367', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(226, 'Cuvette Loader STA Compact', '88394', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(227, 'CPU Measurement PCB', '88402', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(228, 'Intermediate Reservor', '88431', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(229, 'Eprom Comdmat Ver.10.90', '88440', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(230, 'Eprom CMDMOT Ver.1.90', '88441', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(231, 'Erom MCC Ver.1.20', '88442', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(232, 'Photomotor Current Reducer', '88461', 4, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(233, '1.41 & 2.01 Firmware Up Kit', '88462', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(234, 'ILS Reservoirs Test Adaptor', '88464', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(235, 'Nuts Connector Needle (X2)', '88473', 5, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(236, 'COOLING LIQUID PUMP V3', '88492', 0, 1, 1, 0, 1, 0, '', 0, '', '', '', 0, ''),
(237, 'Cooling Pump Membranes V2 & V3', '88493', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(238, 'Photometry Control Board V6', '88496', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(239, 'ARM1W/O Piercing Tubing Guide', '88512', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(240, 'SBCATLAS Motherboard', '88519', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(241, 'ARMS AND DRAWERS BELT', '88539', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(242, 'DVD Windows Embedded Standard', '88554', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(243, 'Software STC Version 424', '88556', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(244, 'Motor Cuvette Loader', '88557', 3, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(245, 'Asys Cuvette Loader V.2', '88558', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(246, 'MAINTENANCE KIT', '88596', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(247, 'YEARLY ADDITIONAL MAINT KIT', '88597', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(248, 'Pipetting Head Heating PCB', '88623', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(249, 'Version 3 (Pid Board Verion 2)', '88657', 3, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(250, 'Preventive Maintence Kit', '88690', 5, 0, 0, 0, 5, 0, '', 0, '', '', '', 0, ''),
(251, 'Software 108.06 / 208.06', '88712', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(252, 'Input/output Board Front Plate', '88724', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(253, 'Equipped Pneumatic Base', '88757', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(254, 'Flash Memory 256MO', '88795', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(255, 'Equippech Power Supply V2', '88809', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(256, 'Bar Code Sample Installation Kit', '88812', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(257, 'PDR Assy', '88842', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(258, 'Equipped Theta Motor', '88847', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(259, 'Vaccum Pump', '88857', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(260, 'Equipped Camera + Bracket', '88890', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(261, 'Shuttle Stop-Dual Retrofit Kit', '88949', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(262, 'Photometry Board + FIBERS', '88963', -1, 1, 1, 0, 0, 0, '', 0, '', '', '', 0, ''),
(263, 'MOTOR DC-FRONT PUSHER', '89003', 2, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(264, 'Motor CC Rateau Arriere', '89004', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(265, 'Y Conveyor Belts (X4)', '89010', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(266, 'PIPETING HEAD HEATING PCB', '89041', 3, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(267, 'Windos Embedded Std Usb Key', '89079', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(268, 'Module Mesure', '89185', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(269, 'Carte CDE Convoyeur Racks V2', '89204', 1, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(270, 'Carte Zero Pipeteur', '89206', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(271, 'CLE USB ACRONIS TRUE IMAGE', '89277', 0, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(272, 'Membrance Key Pads', '111111111', 30, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(273, 'Thermal Print Heads', '38133', 0, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(274, 'ASSY PC', '', 1, 1, 1, 0, 1, 0, '', 0, '', '', '', 0, ''),
(275, '4 SERIAL PORTS BOARD CPR RS232', '86605', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(276, 'pcb multifunctions carte multifunction', '89223', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(277, 'STANDARD MAINTENANCE KIT', '89035', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(278, 'Assy Measure Peltier Kits V2 ', '88778', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(279, 'Block 4 Measure Head V3 ', '39228', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(280, 'Bottle Glass Vacuum Reservoir', '38755', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(281, 'CABLE DRAWER TEMPRATURE PROBE', '89211/38086', 3, 0, 0, 0, 3, 0, '', 0, '', '', '', 0, ''),
(282, 'Cable Head Gripping L', '39148', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(283, 'Cable Platine Measure Tiroir ', '89207', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(284, 'Cable Flats J24 J29 J30', '39326', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(285, 'Carte Commande Moteur C.C.V3 /DC MOTOR PCB V3', '89159', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(286, 'Carte Mere ETX V3/PCB CPU ETX V3', '89294', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(287, 'CONVEYOR HEIGHT MAPPING TOOL ', '89279', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(288, 'Dual Reed Switch ', '27065', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(289, 'Electrovalve 3 Way', '88797', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(290, 'Equiped Axis Cuvette Roll', '80199', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(291, 'Glycol Tygon Tubing Fittings', '88849', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(292, 'Head Measurement V3', '39227', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(293, 'Microtainer Reducer X2 (Satellite)', '80057', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(294, 'Nipple Y Type', '38261', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(295, 'O Ring 42X2.6 ', '38254', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(296, 'PCB Head', '88961', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(297, 'PCB Interface I/o PC V.4', '80162', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(298, 'PCB Power I/O', '39309', 0, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(299, 'PCB POWER I/O V2', '89066', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(300, 'Product Peltier Assy V3', '88783', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(301, 'stirring motor V3', '88779', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(302, 'Thermal Switch ', '88781', 0, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, ''),
(303, 'Vacuum Pump With Fittings', '27360', 1, 0, 0, 0, 1, 0, '', 0, '', '', '', 0, ''),
(304, 'Fiber Optic 2.2x530(X1)', '38628', 2, 0, 0, 0, 2, 0, '', 0, '', '', '', 0, ''),
(305, 'LLD CABLE (X1)', '80785', -3, 0, 0, 200, 21, 0, '2017-12-29 17:00', 50, '', 'fdfd', 'fddgd', 0, ''),
(306, 'PCB Shuttle Conveyor', '38885', 6, 0, 0, 23432, 6, 0, '2018-02-15 11:00', 0, '', 'sdafdsafas', 'fsafasfasfasfasf', 0, ''),
(307, 'ssss1', '4343434', -1, 0, 0, 456, 2, 3, '2018-02-09 10:00', 234, '2018-02-09', 'sfgfds', 'gdsfgdsgggg', 0, ''),
(308, 'lvrs', '14', 15, 0, 0, 2323, 17, 3, '2018-02-14 12:00', 141414, '2018-02-14', 'dfgdg', 'dfgfggfgfd', 0, ''),
(309, 'dellnew', '876', 6, 2, 2, 1234, 10, 3, '2018-02-14 15:00', 876, '2018-02-14', 'asdsdds', 'fdasfasfasfas', 0, ''),
(310, 'awaw', '121222', 4, 2, 2, 6565, 10, 3, '2018-02-14 16:00', 43254353, '2018-02-14', 'gfdsgfsdg', 'gsdfgdsgsdgsgsd', 0, ''),
(311, 'prince', '7896544', 0, 0, 0, 0, 0, 2, '', 8000, '2018-06-26', '', '', 0, '26-06-2018 17:42:32'),
(312, 'princees', '454', 0, 0, 0, 0, 0, 4, '', 525, '2018-06-26', '', '', 0, '2018-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `spares_effective_date_history`
--

CREATE TABLE `spares_effective_date_history` (
  `id` int(10) NOT NULL,
  `spare_name` varchar(100) NOT NULL,
  `part_no` varchar(50) NOT NULL,
  `sales_price` int(10) NOT NULL,
  `effective_date` varchar(100) NOT NULL,
  `min_qty` int(10) NOT NULL,
  `created_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spares_effective_date_history`
--

INSERT INTO `spares_effective_date_history` (`id`, `spare_name`, `part_no`, `sales_price`, `effective_date`, `min_qty`, `created_on`) VALUES
(1, 'YEARLY ADDITIONAL PM KIT', '', 0, '', 0, ''),
(2, 'YEARLY ADDITIONAL PM KIT', '', 0, '', 0, ''),
(3, 'Photometry Board + FIBERS', '', 0, '', 0, ''),
(4, 'YEARLY ADDITIONAL PM KIT', '', 0, '', 0, ''),
(5, 'YEARLY ADDITIONAL MAINT KIT', '', 0, '', 0, ''),
(6, 'Y Conveyor Belts (X4)', '', 0, '', 0, ''),
(7, 'Windos Embedded Std Usb Key', '', 0, '', 0, ''),
(8, 'Version 3 (Pid Board Verion 2)', '', 0, '', 0, ''),
(9, 'Vaccum Pump', '', 0, '', 0, ''),
(10, 'Tourchscreen Control', '', 0, '', 0, ''),
(11, 'Tourchscreen Control', '', 0, '', 0, ''),
(12, 'Tool Assembly Optical Fiber', '', 0, '', 0, ''),
(13, 'Thermal Print Heads', '', 0, '', 0, ''),
(14, 'Suction Tip V5(X2)', '', 0, '', 0, ''),
(15, 'Suction Tip V5 Mapping Tools', '', 0, '', 0, ''),
(16, 'Software STC Version 424', '', 0, '', 0, ''),
(17, 'Software 108.06 / 208.06', '', 0, '', 0, ''),
(18, 'Shuttle Stop-Dual Retrofit Kit', '', 0, '', 0, ''),
(19, 'SBCATLAS Motherboard', '', 0, '', 0, ''),
(20, 'Satellite Techn.Manual (CDROM)', '', 0, '', 0, ''),
(21, 'ROTOR PRODUCTS N0*1', '', 0, '', 0, ''),
(22, 'Rinsing EV Block V2', '', 0, '', 0, ''),
(23, 'Rail Temporature Sensor Board', '', 0, '', 0, ''),
(24, 'Rail Nearness Sensor', '', 0, '', 0, ''),
(25, 'Rail Moter', '', 0, '', 0, ''),
(26, 'Qwerty Keyboard', '', 0, '', 0, ''),
(27, 'Printer Thermic Assembly', '', 0, '', 0, ''),
(28, 'Printer Installation SOFT V06', '', 0, '', 0, ''),
(29, 'Preventive Maintence Kit', '', 0, '', 0, ''),
(30, 'Plate Bar Code Conveyor V4', '', 0, '', 0, ''),
(31, 'Reservoir Intermediate Cleaner', '', 0, '', 0, ''),
(32, 'Pipetting Head Heating PCB', '', 0, '', 0, ''),
(33, 'PIPETING HEAD HEATING PCB', '', 0, '', 0, ''),
(34, 'Reed Rotor Switch Trap', '', 0, '', 0, ''),
(35, 'PCB Temperature Regulation', '', 0, '', 0, ''),
(36, 'Photomotor Current Reducer', '', 0, '', 0, ''),
(37, 'Photometry Control Board V6', '', 0, '', 0, ''),
(38, 'PDR Assy', '', 0, '', 0, ''),
(39, 'PCB Rotord Interface', '', 0, '', 0, ''),
(40, 'PCB Multifunctions Head 3', '', 0, '', 0, ''),
(41, 'PCB Multifunctions Head 1+2', '', 0, '', 0, ''),
(42, 'PCB Motor Interface', '', 0, '', 0, ''),
(43, 'PCb CPU Pentium ETX V2', '', 0, '', 0, ''),
(44, 'PCB 4 Axis (Mpp4)', '', 0, '', 0, ''),
(45, 'Optical Sensor + Adaptors', '', 0, '', 0, ''),
(46, 'Optical Sensor + Adaptors', '', 0, '', 0, ''),
(47, 'Nuts Connector Needle (X2)', '', 0, '', 0, ''),
(48, 'MPP4 Board Front Plate', '', 0, '', 0, ''),
(49, 'Motor Cuvette Roll Drive', '', 0, '', 0, ''),
(50, 'MOTOR DC-FRONT PUSHER', '', 0, '', 0, ''),
(51, 'Motor Cuvette Loader', '', 0, '', 0, ''),
(52, 'Motor CC Rateau Arriere', '', 0, '', 0, ''),
(53, 'Moteur Agitateur', '', 0, '', 0, ''),
(54, 'Module Mesure', '', 0, '', 0, ''),
(55, 'Module Incubation', '', 0, '', 0, ''),
(56, 'Membrance Key Pads', '', 0, '', 0, ''),
(57, 'Measurement CPU Board+Bracket', '', 0, '', 0, ''),
(58, 'Measurement CPU Board', '', 0, '', 0, ''),
(59, 'MAINTENANCE KIT', '', 0, '', 0, ''),
(60, 'M5 Cuv.Base Plate Silencer', '', 0, '', 0, ''),
(61, 'LLD Cable (X3)', '', 0, '', 0, ''),
(62, 'Liquid Level Dectect Cable', '', 0, '', 0, ''),
(63, 'Kit Ventilateur', '', 0, '', 0, ''),
(64, 'KIT PELTIER V.2(X2)', '', 0, '', 0, ''),
(65, 'Kit Ecran', '', 0, '', 0, ''),
(66, 'Intermediate Reservor', '', 0, '', 0, ''),
(67, 'Input/output Board Front Plate', '', 0, '', 0, ''),
(68, 'Infrared Light Board', '', 0, '', 0, ''),
(69, 'ILS Reservoirs Test Adaptor', '', 0, '', 0, ''),
(70, 'Gripping Nipples + Tubing Kit', '', 0, '', 0, ''),
(71, 'Fluid Connector + Tubing Kit', '', 0, '', 0, ''),
(72, 'Flash Memory 256MO', '', 0, '', 0, ''),
(73, 'Ev Cuvette Base Plate', '', 0, '', 0, ''),
(74, 'Filter Rinsing Asay Air', '', 0, '', 0, ''),
(75, 'EU Removable Power Cord', '', 0, '', 0, ''),
(76, 'Erom MCC Ver.1.20', '', 0, '', 0, ''),
(77, 'Equipped Z Motor', '', 0, '', 0, ''),
(78, 'Equipped Theta Motor', '', 0, '', 0, ''),
(79, 'Equipped Printer + Cover', '', 0, '', 0, ''),
(80, 'Equipped Printer + Cover', '', 0, '', 0, ''),
(81, 'Equipped Pneumatic Base', '', 0, '', 0, ''),
(82, 'Equipped Pneumatic Base', '', 0, '', 0, ''),
(83, 'Equipped Photo Motor Support', '', 0, '', 0, ''),
(84, 'Equipped Petter Assy', '', 0, '', 0, ''),
(85, 'Equipped Camera + Bracket', '', 0, '', 0, ''),
(86, 'Eprom Comdmat Ver.10.90', '', 0, '', 0, ''),
(87, 'Equippech Power Supply V2', '', 0, '', 0, ''),
(88, 'Equiped Fuses Board', '', 0, '', 0, ''),
(89, 'Eprom CMDMOT Ver.1.90', '', 0, '', 0, ''),
(90, 'Electrovave N1', '', 0, '', 0, ''),
(91, 'Electrovalve 3 Wat 24v', '', 0, '', 0, ''),
(92, 'DVD Windows Embedded Standard', '', 0, '', 0, ''),
(93, 'Cuvette Loader STA Compact', '', 0, '', 0, ''),
(94, 'Cutter Motor', '', 0, '', 0, ''),
(95, 'CPU Measurement PCB', '', 0, '', 0, ''),
(96, 'Cooling Pump Membranes V2 & V3', '', 0, '', 0, ''),
(97, 'Cooling Pump Maintenance KT V2', '', 0, '', 0, ''),
(98, 'COOLING LIQUID PUMP V3', '', 0, '', 0, ''),
(99, 'CONNECTED PIPETTE', '', 0, '', 0, ''),
(100, 'CLE USB ACRONIS TRUE IMAGE', '', 0, '', 0, ''),
(101, 'Bridge DIODE 35A 600V', '', 0, '', 0, ''),
(102, 'CASSETTE PRODUCT DRAWER V2', '', 0, '', 0, ''),
(103, 'Carte Zero Pipeteur', '', 0, '', 0, ''),
(104, 'Carte Mere START MAX', '', 0, '', 0, ''),
(105, 'Carte CDE Convoyeur Racks V2', '', 0, '', 0, ''),
(106, 'Bar Code Sample Installation Kit', '', 0, '', 0, ''),
(107, 'Bar Code Reader Cable V2', '', 0, '', 0, ''),
(108, 'Asys Cuvette Loader V.2', '', 0, '', 0, ''),
(109, 'Assy Rail', '', 0, '', 0, ''),
(110, 'ARMS AND DRAWERS BELT', '', 0, '', 0, ''),
(111, 'ARM1W/O Piercing Tubing Guide', '', 0, '', 0, ''),
(112, '1.41 & 2.01 Firmware Up Kit', '', 0, '', 0, ''),
(113, 'ASSY PC', '', 0, '', 0, ''),
(114, '4 SERIAL PORTS BOARD CPR RS232', '86605', 0, '', 0, ''),
(115, 'pcb multifunctions carte multifunction', '89223', 0, '', 0, ''),
(116, 'STANDARD MAINTENANCE KIT', '89035', 0, '', 0, ''),
(117, 'Assy Measure Peltier Kits V2 ', '88778', 0, '', 0, ''),
(118, 'Block 4 Measure Head V3 ', '39228', 0, '', 0, ''),
(119, 'Bottle Glass Vacuum Reservoir', '38755', 0, '', 0, ''),
(120, 'CABLE DRAWER TEMPRATURE PROBE', '89211/38086', 0, '', 0, ''),
(121, 'Cable Head Gripping L', '39148', 0, '', 0, ''),
(122, 'Cable Platine Measure Tiroir ', '89207', 0, '', 0, ''),
(123, 'Cable Flats J24 J29 J30', '39326', 0, '', 0, ''),
(124, 'Carte Commande Moteur C.C.V3 /DC MOTOR PCB V3', '89159', 0, '', 0, ''),
(125, 'Carte Mere ETX V3/PCB CPU ETX V3', '89294', 0, '', 0, ''),
(126, 'CONVEYOR HEIGHT MAPPING TOOL ', '89279', 0, '', 0, ''),
(127, 'Dual Reed Switch ', '27065', 0, '', 0, ''),
(128, 'Electrovalve 3 Way', '88797', 0, '', 0, ''),
(129, 'Equiped Axis Cuvette Roll', '80199', 0, '', 0, ''),
(130, 'Glycol Tygon Tubing Fittings', '88849', 0, '', 0, ''),
(131, 'Head Measurement V3', '39227', 0, '', 0, ''),
(132, 'Microtainer Reducer X2 (Satellite)', '80057', 0, '', 0, ''),
(133, 'Nipple Y Type', '38261', 0, '', 0, ''),
(134, 'O Ring 42X2.6 ', '38254', 0, '', 0, ''),
(135, 'PCB Head', '88961', 0, '', 0, ''),
(136, 'PCB Interface I/o PC V.4', '80162', 0, '', 0, ''),
(137, 'PCB Power I/O', '39309', 0, '', 0, ''),
(138, 'PCB POWER I/O V2', '89066', 0, '', 0, ''),
(139, 'Product Peltier Assy V3', '88783', 0, '', 0, ''),
(140, 'stirring motor V3', '88779', 0, '', 0, ''),
(141, 'Thermal Switch ', '88781', 0, '', 0, ''),
(142, 'Vacuum Pump With Fittings', '27360', 0, '', 0, ''),
(143, 'Fiber Optic 2.2x530(X1)', '38628', 0, '', 0, ''),
(144, 'LLD CABLE (X1)', '80785', 0, '', 0, ''),
(145, 'PCB Shuttle Conveyor', '38885', 0, '', 0, ''),
(146, 'Filter Mains', '', 100, '', 0, ''),
(147, 'PCB ARM Junction', '', 200, '', 0, ''),
(148, 'LLD CABLE (X1)', '', 50, '', 0, ''),
(149, 'NIPPLE STRAIGHT PU : S TUBING', '', 50, '', 0, ''),
(150, 'ssss1', '4343434', 234, '2018-02-09', 3, ''),
(151, 'lvrs', '14', 141414, '2018-02-14', 3, ''),
(152, 'dellnew', '876', 876, '2018-02-14', 3, ''),
(153, 'awaw', '121222', 43254353, '2018-02-14', 3, ''),
(154, 'princees', '454', 525, '2018-06-26', 4, '2018-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `spare_details`
--

CREATE TABLE `spare_details` (
  `id` int(10) NOT NULL,
  `spare_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `subcat_id` int(10) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `model_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spare_details`
--

INSERT INTO `spare_details` (`id`, `spare_id`, `cat_id`, `subcat_id`, `brand_id`, `model_id`) VALUES
(1, 1, 1, 1, 1, '4'),
(2, 1, 1, 1, 1, '5'),
(3, 1, 1, 1, 1, '6'),
(4, 2, 2, 2, 1, '1'),
(5, 2, 2, 2, 1, '2'),
(6, 3, 1, 1, 1, '4'),
(7, 3, 1, 1, 1, '5'),
(8, 3, 1, 1, 1, '6'),
(9, 4, 2, 2, 1, '1'),
(10, 4, 2, 2, 1, '2'),
(11, 5, 1, 1, 1, '4'),
(12, 5, 1, 1, 1, '5'),
(13, 5, 1, 1, 1, '6'),
(14, 6, 1, 1, 1, '4'),
(15, 6, 1, 1, 1, '5'),
(16, 6, 1, 1, 1, '6'),
(17, 7, 1, 1, 1, '4'),
(18, 7, 1, 1, 1, '5'),
(19, 7, 1, 1, 1, '6'),
(20, 8, 2, 2, 1, '1'),
(21, 8, 1, 1, 1, '3'),
(22, 9, 1, 1, 1, '4'),
(23, 9, 1, 1, 1, '5'),
(24, 9, 1, 1, 1, '6'),
(25, 10, 1, 1, 1, '4'),
(26, 10, 1, 1, 1, '5'),
(27, 10, 1, 1, 1, '6'),
(28, 11, 1, 1, 1, '4'),
(29, 11, 1, 1, 1, '5'),
(30, 11, 1, 1, 1, '6'),
(31, 12, 1, 1, 1, '4'),
(32, 12, 1, 1, 1, '5'),
(33, 12, 1, 1, 1, '6'),
(34, 13, 1, 1, 1, '4'),
(35, 13, 1, 1, 1, '5'),
(36, 13, 1, 1, 1, '6'),
(37, 14, 1, 1, 1, '4'),
(38, 14, 1, 1, 1, '5'),
(39, 14, 1, 1, 1, '6'),
(40, 15, 1, 1, 1, '4'),
(41, 15, 1, 1, 1, '5'),
(42, 15, 1, 1, 1, '6'),
(43, 16, 1, 1, 1, '4'),
(44, 16, 1, 1, 1, '5'),
(45, 16, 1, 1, 1, '6'),
(46, 17, 1, 1, 1, '4'),
(47, 17, 1, 1, 1, '5'),
(48, 17, 1, 1, 1, '6'),
(49, 18, 1, 1, 1, '4'),
(50, 18, 1, 1, 1, '5'),
(51, 18, 1, 1, 1, '6'),
(52, 19, 1, 1, 1, '4'),
(53, 19, 1, 1, 1, '5'),
(54, 19, 1, 1, 1, '6'),
(55, 20, 1, 1, 1, '4'),
(56, 20, 1, 1, 1, '5'),
(57, 20, 1, 1, 1, '6'),
(58, 21, 1, 1, 1, '4'),
(59, 21, 1, 1, 1, '5'),
(60, 21, 1, 1, 1, '6'),
(61, 22, 1, 1, 1, '4'),
(62, 22, 1, 1, 1, '5'),
(63, 22, 1, 1, 1, '6'),
(64, 23, 1, 1, 1, '4'),
(65, 23, 1, 1, 1, '5'),
(66, 23, 1, 1, 1, '6'),
(67, 24, 1, 1, 1, '4'),
(68, 24, 1, 1, 1, '5'),
(69, 24, 1, 1, 1, '6'),
(70, 25, 1, 1, 1, '4'),
(71, 25, 1, 1, 1, '5'),
(72, 25, 1, 1, 1, '6'),
(73, 26, 1, 1, 1, '4'),
(74, 26, 1, 1, 1, '5'),
(75, 26, 1, 1, 1, '6'),
(76, 27, 1, 1, 1, '4'),
(77, 27, 1, 1, 1, '5'),
(78, 27, 1, 1, 1, '6'),
(79, 28, 1, 1, 1, '4'),
(80, 28, 1, 1, 1, '5'),
(81, 28, 1, 1, 1, '6'),
(82, 29, 1, 1, 1, '4'),
(83, 29, 1, 1, 1, '5'),
(84, 29, 1, 1, 1, '6'),
(85, 30, 1, 1, 1, '4'),
(86, 30, 1, 1, 1, '5'),
(87, 30, 1, 1, 1, '6'),
(88, 31, 1, 1, 1, '4'),
(89, 31, 1, 1, 1, '5'),
(90, 31, 1, 1, 1, '6'),
(91, 32, 1, 1, 1, '4'),
(92, 32, 1, 1, 1, '5'),
(93, 32, 1, 1, 1, '6'),
(94, 33, 1, 1, 1, '4'),
(95, 33, 1, 1, 1, '5'),
(96, 33, 1, 1, 1, '6'),
(97, 33, 1, 1, 1, '7'),
(98, 33, 1, 1, 1, '8'),
(99, 33, 1, 1, 1, '9'),
(100, 34, 1, 1, 1, '4'),
(101, 34, 1, 1, 1, '5'),
(102, 34, 1, 1, 1, '6'),
(103, 34, 1, 1, 1, '3'),
(104, 35, 1, 1, 1, '4'),
(105, 35, 1, 1, 1, '5'),
(106, 35, 1, 1, 1, '6'),
(107, 36, 1, 1, 1, '4'),
(108, 36, 1, 1, 1, '5'),
(109, 36, 1, 1, 1, '6'),
(110, 37, 1, 1, 1, '4'),
(111, 37, 1, 1, 1, '5'),
(112, 37, 1, 1, 1, '6'),
(113, 38, 1, 1, 1, '4'),
(114, 38, 1, 1, 1, '5'),
(115, 38, 1, 1, 1, '6'),
(116, 39, 1, 1, 1, '4'),
(117, 39, 1, 1, 1, '5'),
(118, 39, 1, 1, 1, '6'),
(119, 40, 1, 1, 1, '4'),
(120, 40, 1, 1, 1, '5'),
(121, 40, 1, 1, 1, '6'),
(122, 41, 1, 1, 1, '4'),
(123, 41, 1, 1, 1, '5'),
(124, 41, 1, 1, 1, '6'),
(125, 42, 1, 1, 1, '4'),
(126, 42, 1, 1, 1, '5'),
(127, 42, 1, 1, 1, '6'),
(128, 43, 1, 1, 1, '4'),
(129, 43, 1, 1, 1, '5'),
(130, 43, 1, 1, 1, '6'),
(131, 44, 1, 1, 1, '4'),
(132, 44, 1, 1, 1, '5'),
(133, 44, 1, 1, 1, '6'),
(134, 45, 1, 1, 1, '4'),
(135, 45, 1, 1, 1, '5'),
(136, 45, 1, 1, 1, '6'),
(137, 46, 1, 1, 1, '4'),
(138, 46, 1, 1, 1, '5'),
(139, 46, 1, 1, 1, '6'),
(140, 47, 1, 1, 1, '4'),
(141, 47, 1, 1, 1, '5'),
(142, 47, 1, 1, 1, '6'),
(143, 48, 1, 1, 1, '4'),
(144, 48, 1, 1, 1, '5'),
(145, 48, 1, 1, 1, '6'),
(146, 49, 1, 1, 1, '4'),
(147, 49, 1, 1, 1, '5'),
(148, 49, 1, 1, 1, '6'),
(149, 50, 1, 1, 1, '4'),
(150, 50, 1, 1, 1, '5'),
(151, 50, 1, 1, 1, '6'),
(152, 51, 1, 1, 1, '4'),
(153, 51, 1, 1, 1, '5'),
(154, 51, 1, 1, 1, '6'),
(155, 52, 1, 1, 1, '4'),
(156, 52, 1, 1, 1, '5'),
(157, 52, 1, 1, 1, '6'),
(158, 53, 1, 1, 1, '4'),
(159, 53, 1, 1, 1, '5'),
(160, 53, 1, 1, 1, '6'),
(161, 54, 1, 1, 1, '4'),
(162, 54, 1, 1, 1, '5'),
(163, 54, 1, 1, 1, '6'),
(164, 55, 1, 1, 1, '4'),
(165, 55, 1, 1, 1, '5'),
(166, 55, 1, 1, 1, '6'),
(167, 56, 1, 1, 1, '4'),
(168, 56, 1, 1, 1, '5'),
(169, 56, 1, 1, 1, '6'),
(170, 57, 1, 1, 1, '4'),
(171, 57, 1, 1, 1, '5'),
(172, 57, 1, 1, 1, '6'),
(173, 58, 1, 1, 1, '4'),
(174, 58, 1, 1, 1, '5'),
(175, 58, 1, 1, 1, '6'),
(176, 59, 1, 1, 1, '4'),
(177, 59, 1, 1, 1, '5'),
(178, 59, 1, 1, 1, '6'),
(185, 61, 1, 1, 1, '4'),
(186, 61, 1, 1, 1, '5'),
(187, 61, 1, 1, 1, '6'),
(188, 62, 2, 2, 1, '1'),
(189, 62, 2, 2, 1, '2'),
(190, 63, 1, 1, 1, '4'),
(191, 63, 1, 1, 1, '5'),
(192, 63, 1, 1, 1, '6'),
(193, 64, 1, 1, 1, '4'),
(194, 64, 1, 1, 1, '5'),
(195, 64, 1, 1, 1, '6'),
(196, 65, 1, 1, 1, '4'),
(197, 65, 1, 1, 1, '5'),
(198, 65, 1, 1, 1, '6'),
(199, 66, 1, 1, 1, '4'),
(200, 66, 1, 1, 1, '5'),
(201, 66, 1, 1, 1, '6'),
(202, 67, 1, 1, 1, '4'),
(203, 67, 1, 1, 1, '5'),
(204, 67, 1, 1, 1, '6'),
(205, 68, 2, 2, 1, '1'),
(206, 68, 2, 2, 1, '2'),
(207, 69, 2, 2, 1, '1'),
(208, 69, 2, 2, 1, '2'),
(209, 70, 1, 1, 1, '4'),
(210, 70, 1, 1, 1, '5'),
(211, 70, 1, 1, 1, '6'),
(213, 72, 1, 1, 1, '4'),
(214, 72, 1, 1, 1, '5'),
(215, 72, 1, 1, 1, '6'),
(216, 73, 1, 1, 1, '4'),
(217, 73, 1, 1, 1, '5'),
(218, 73, 1, 1, 1, '6'),
(226, 75, 1, 1, 1, '4'),
(227, 75, 1, 1, 1, '5'),
(228, 75, 1, 1, 1, '6'),
(229, 76, 1, 1, 1, '4'),
(230, 76, 1, 1, 1, '5'),
(231, 76, 1, 1, 1, '6'),
(232, 77, 1, 1, 1, '4'),
(233, 77, 1, 1, 1, '5'),
(234, 77, 1, 1, 1, '6'),
(235, 78, 1, 1, 1, '4'),
(236, 78, 1, 1, 1, '5'),
(237, 78, 1, 1, 1, '6'),
(238, 79, 1, 1, 1, '7'),
(239, 79, 1, 1, 1, '8'),
(240, 79, 1, 1, 1, '9'),
(241, 80, 1, 1, 1, '4'),
(242, 80, 1, 1, 1, '5'),
(243, 80, 1, 1, 1, '6'),
(244, 81, 1, 1, 1, '4'),
(245, 81, 1, 1, 1, '5'),
(246, 81, 1, 1, 1, '6'),
(250, 83, 1, 1, 1, '4'),
(251, 83, 1, 1, 1, '5'),
(252, 83, 1, 1, 1, '6'),
(253, 84, 1, 1, 1, '4'),
(254, 84, 1, 1, 1, '5'),
(255, 84, 1, 1, 1, '6'),
(256, 85, 1, 1, 1, '4'),
(257, 85, 1, 1, 1, '5'),
(258, 85, 1, 1, 1, '6'),
(259, 86, 1, 1, 1, '4'),
(260, 86, 1, 1, 1, '5'),
(261, 86, 1, 1, 1, '6'),
(262, 87, 1, 1, 1, '7'),
(263, 87, 1, 1, 1, '8'),
(264, 87, 1, 1, 1, '9'),
(265, 88, 1, 1, 1, '7'),
(266, 88, 1, 1, 1, '8'),
(267, 88, 1, 1, 1, '9'),
(268, 89, 1, 1, 1, '7'),
(269, 89, 1, 1, 1, '8'),
(270, 89, 1, 1, 1, '9'),
(271, 90, 1, 1, 1, '7'),
(272, 90, 1, 1, 1, '8'),
(273, 90, 1, 1, 1, '9'),
(274, 91, 1, 1, 1, '4'),
(275, 91, 1, 1, 1, '5'),
(276, 91, 1, 1, 1, '6'),
(277, 91, 1, 1, 1, '7'),
(278, 92, 1, 1, 1, '7'),
(279, 92, 1, 1, 1, '8'),
(280, 92, 1, 1, 1, '9'),
(281, 93, 1, 1, 1, '7'),
(282, 93, 1, 1, 1, '8'),
(283, 93, 1, 1, 1, '9'),
(284, 94, 1, 1, 1, '7'),
(285, 94, 1, 1, 1, '8'),
(286, 94, 1, 1, 1, '9'),
(287, 95, 1, 1, 1, '7'),
(288, 95, 1, 1, 1, '8'),
(289, 95, 1, 1, 1, '9'),
(290, 96, 1, 1, 1, '7'),
(291, 96, 1, 1, 1, '8'),
(292, 96, 1, 1, 1, '9'),
(293, 97, 1, 1, 1, '7'),
(294, 97, 1, 1, 1, '8'),
(295, 97, 1, 1, 1, '9'),
(296, 98, 1, 1, 1, '7'),
(297, 98, 1, 1, 1, '8'),
(298, 98, 1, 1, 1, '9'),
(299, 99, 1, 1, 1, '7'),
(300, 99, 1, 1, 1, '8'),
(301, 99, 1, 1, 1, '9'),
(302, 100, 1, 1, 1, '7'),
(303, 100, 1, 1, 1, '8'),
(304, 100, 1, 1, 1, '9'),
(305, 101, 1, 1, 1, '7'),
(306, 101, 1, 1, 1, '8'),
(307, 101, 1, 1, 1, '9'),
(308, 102, 1, 1, 1, '4'),
(309, 102, 1, 1, 1, '5'),
(310, 102, 1, 1, 1, '6'),
(311, 103, 1, 1, 1, '4'),
(312, 103, 1, 1, 1, '5'),
(313, 103, 1, 1, 1, '6'),
(314, 103, 1, 1, 1, '7'),
(315, 103, 1, 1, 1, '3'),
(316, 104, 1, 1, 1, '4'),
(317, 104, 1, 1, 1, '5'),
(318, 104, 1, 1, 1, '6'),
(319, 105, 1, 1, 1, '7'),
(320, 105, 1, 1, 1, '8'),
(321, 105, 1, 1, 1, '9'),
(322, 106, 1, 1, 1, '7'),
(323, 106, 1, 1, 1, '8'),
(324, 106, 1, 1, 1, '9'),
(325, 107, 1, 1, 1, '4'),
(326, 107, 1, 1, 1, '5'),
(327, 107, 1, 1, 1, '6'),
(328, 108, 1, 1, 1, '4'),
(329, 108, 1, 1, 1, '5'),
(330, 108, 1, 1, 1, '6'),
(331, 108, 1, 1, 1, '7'),
(332, 109, 1, 1, 1, '7'),
(333, 109, 1, 1, 1, '8'),
(334, 109, 1, 1, 1, '9'),
(335, 110, 1, 1, 1, '4'),
(336, 110, 1, 1, 1, '5'),
(337, 110, 1, 1, 1, '6'),
(338, 110, 1, 1, 1, '7'),
(339, 111, 1, 1, 1, '4'),
(340, 111, 1, 1, 1, '5'),
(341, 111, 1, 1, 1, '6'),
(342, 111, 1, 1, 1, '7'),
(343, 112, 1, 1, 1, '4'),
(344, 112, 1, 1, 1, '5'),
(345, 112, 1, 1, 1, '6'),
(346, 112, 1, 1, 1, '7'),
(347, 113, 1, 1, 1, '7'),
(348, 113, 1, 1, 1, '8'),
(349, 113, 1, 1, 1, '9'),
(350, 114, 1, 1, 1, '4'),
(351, 114, 1, 1, 1, '5'),
(352, 114, 1, 1, 1, '6'),
(353, 114, 1, 1, 1, '7'),
(354, 114, 1, 1, 1, '3'),
(355, 115, 1, 1, 1, '4'),
(356, 115, 1, 1, 1, '5'),
(357, 115, 1, 1, 1, '6'),
(358, 116, 2, 2, 1, '1'),
(359, 116, 2, 2, 1, '2'),
(360, 117, 2, 2, 1, '1'),
(361, 117, 2, 2, 1, '2'),
(362, 118, 1, 1, 1, '4'),
(363, 118, 1, 1, 1, '5'),
(364, 118, 1, 1, 1, '6'),
(365, 119, 1, 1, 1, '4'),
(366, 119, 1, 1, 1, '5'),
(367, 119, 1, 1, 1, '6'),
(368, 120, 1, 1, 1, '4'),
(369, 120, 1, 1, 1, '5'),
(370, 120, 1, 1, 1, '6'),
(371, 121, 1, 1, 1, '7'),
(372, 121, 1, 1, 1, '8'),
(373, 121, 1, 1, 1, '9'),
(374, 122, 1, 1, 1, '4'),
(375, 122, 1, 1, 1, '5'),
(376, 122, 1, 1, 1, '6'),
(377, 122, 1, 1, 1, '7'),
(378, 123, 1, 1, 1, '3'),
(379, 124, 1, 1, 1, '4'),
(380, 124, 1, 1, 1, '5'),
(381, 124, 1, 1, 1, '6'),
(382, 124, 1, 1, 1, '7'),
(383, 125, 1, 1, 1, '4'),
(384, 125, 1, 1, 1, '5'),
(385, 125, 1, 1, 1, '6'),
(386, 125, 1, 1, 1, '7'),
(387, 125, 1, 1, 1, '3'),
(388, 126, 1, 1, 1, '4'),
(389, 126, 1, 1, 1, '5'),
(390, 126, 1, 1, 1, '6'),
(391, 126, 1, 1, 1, '7'),
(392, 127, 1, 1, 1, '7'),
(393, 127, 1, 1, 1, '8'),
(394, 127, 1, 1, 1, '9'),
(395, 128, 1, 1, 1, '4'),
(396, 128, 1, 1, 1, '5'),
(397, 128, 1, 1, 1, '6'),
(398, 128, 1, 1, 1, '7'),
(399, 129, 1, 1, 1, '4'),
(400, 129, 1, 1, 1, '5'),
(401, 129, 1, 1, 1, '6'),
(402, 130, 1, 1, 1, '4'),
(403, 130, 1, 1, 1, '5'),
(404, 130, 1, 1, 1, '6'),
(405, 131, 1, 1, 1, '4'),
(406, 131, 1, 1, 1, '5'),
(407, 131, 1, 1, 1, '6'),
(408, 132, 1, 1, 1, '7'),
(409, 132, 1, 1, 1, '8'),
(410, 132, 1, 1, 1, '9'),
(411, 133, 1, 1, 1, '7'),
(412, 133, 1, 1, 1, '8'),
(413, 133, 1, 1, 1, '9'),
(414, 134, 1, 1, 1, '4'),
(415, 134, 1, 1, 1, '5'),
(416, 134, 1, 1, 1, '6'),
(417, 135, 1, 1, 1, '4'),
(418, 135, 1, 1, 1, '5'),
(419, 135, 1, 1, 1, '6'),
(420, 136, 1, 1, 1, '4'),
(421, 136, 1, 1, 1, '5'),
(422, 136, 1, 1, 1, '6'),
(423, 137, 2, 2, 1, '1'),
(424, 137, 2, 2, 1, '2'),
(425, 138, 2, 2, 1, '1'),
(426, 138, 2, 2, 1, '2'),
(427, 139, 1, 1, 1, '4'),
(428, 139, 1, 1, 1, '5'),
(429, 139, 1, 1, 1, '6'),
(430, 140, 1, 1, 1, '7'),
(431, 140, 1, 1, 1, '8'),
(432, 140, 1, 1, 1, '9'),
(433, 141, 1, 1, 1, '7'),
(434, 141, 1, 1, 1, '8'),
(435, 141, 1, 1, 1, '9'),
(436, 142, 1, 1, 1, '7'),
(437, 142, 1, 1, 1, '8'),
(438, 142, 1, 1, 1, '9'),
(439, 143, 1, 1, 1, '7'),
(440, 143, 1, 1, 1, '8'),
(441, 143, 1, 1, 1, '9'),
(442, 144, 1, 1, 1, '4'),
(443, 144, 1, 1, 1, '5'),
(444, 144, 1, 1, 1, '6'),
(445, 145, 1, 1, 1, '4'),
(446, 145, 1, 1, 1, '5'),
(447, 145, 1, 1, 1, '6'),
(448, 145, 1, 1, 1, '7'),
(449, 145, 1, 1, 1, '8'),
(450, 145, 1, 1, 1, '9'),
(451, 146, 1, 1, 1, '4'),
(452, 146, 1, 1, 1, '5'),
(453, 146, 1, 1, 1, '6'),
(454, 147, 1, 1, 1, '7'),
(455, 147, 1, 1, 1, '8'),
(456, 147, 1, 1, 1, '9'),
(457, 148, 1, 1, 1, '4'),
(458, 148, 1, 1, 1, '5'),
(459, 148, 1, 1, 1, '6'),
(460, 148, 1, 1, 1, '7'),
(461, 148, 1, 1, 1, '8'),
(462, 148, 1, 1, 1, '9'),
(463, 149, 1, 1, 1, '7'),
(464, 149, 1, 1, 1, '8'),
(465, 149, 1, 1, 1, '9'),
(466, 150, 1, 1, 1, '7'),
(467, 150, 1, 1, 1, '8'),
(468, 150, 1, 1, 1, '9'),
(469, 151, 1, 1, 1, '3'),
(470, 151, 1, 1, 1, '4'),
(471, 151, 1, 1, 1, '5'),
(472, 151, 1, 1, 1, '6'),
(473, 151, 1, 1, 1, '7'),
(474, 151, 1, 1, 1, '8'),
(475, 151, 1, 1, 1, '9'),
(476, 153, 1, 1, 1, '3'),
(477, 154, 1, 1, 1, '4'),
(478, 154, 1, 1, 1, '5'),
(479, 154, 1, 1, 1, '6'),
(480, 154, 1, 1, 1, '7'),
(481, 154, 1, 1, 1, '8'),
(482, 154, 1, 1, 1, '9'),
(483, 157, 1, 1, 1, '7'),
(484, 157, 1, 1, 1, '8'),
(485, 157, 1, 1, 1, '9'),
(486, 158, 1, 1, 1, '4'),
(487, 158, 1, 1, 1, '5'),
(488, 158, 1, 1, 1, '6'),
(489, 159, 1, 1, 1, '4'),
(490, 159, 1, 1, 1, '5'),
(491, 159, 1, 1, 1, '6'),
(492, 160, 2, 2, 1, '1'),
(493, 161, 1, 1, 1, '4'),
(494, 161, 1, 1, 1, '5'),
(495, 161, 1, 1, 1, '6'),
(496, 162, 1, 1, 1, '7'),
(497, 162, 1, 1, 1, '8'),
(498, 162, 1, 1, 1, '9'),
(499, 163, 1, 1, 1, '4'),
(500, 163, 1, 1, 1, '5'),
(501, 163, 1, 1, 1, '6'),
(502, 164, 1, 1, 1, '3'),
(503, 165, 1, 1, 1, '7'),
(504, 165, 1, 1, 1, '8'),
(505, 165, 1, 1, 1, '9'),
(506, 166, 1, 1, 1, '3'),
(507, 168, 1, 1, 1, '4'),
(508, 168, 1, 1, 1, '5'),
(509, 168, 1, 1, 1, '6'),
(510, 168, 1, 1, 1, '7'),
(511, 168, 1, 1, 1, '8'),
(512, 168, 1, 1, 1, '9'),
(513, 169, 1, 1, 1, '3'),
(514, 170, 1, 1, 1, '3'),
(515, 171, 1, 1, 1, '3'),
(516, 172, 1, 1, 1, '3'),
(517, 262, 1, 1, 1, '3'),
(518, 216, 1, 1, 1, '9'),
(519, 216, 1, 1, 1, '7'),
(520, 216, 1, 1, 1, '8'),
(521, 247, 1, 1, 1, '4'),
(522, 247, 0, 0, 0, ''),
(523, 265, 1, 1, 1, '7'),
(524, 267, 1, 1, 1, '5'),
(525, 267, 1, 1, 1, '4'),
(526, 267, 1, 1, 1, '6'),
(527, 267, 1, 1, 1, '9'),
(528, 267, 1, 1, 1, '7'),
(529, 249, 1, 1, 1, '4'),
(530, 259, 0, 0, 0, ''),
(531, 176, 1, 1, 1, '3'),
(532, 273, 2, 2, 1, '1'),
(533, 273, 1, 1, 1, '3'),
(534, 219, 1, 1, 1, '7'),
(535, 219, 1, 1, 1, '9'),
(536, 219, 0, 0, 0, ''),
(537, 223, 1, 1, 1, '9'),
(538, 223, 1, 1, 1, '7'),
(539, 243, 1, 1, 1, '3'),
(540, 251, 1, 1, 1, '4'),
(541, 261, 1, 1, 1, '7'),
(542, 261, 1, 1, 1, '8'),
(543, 240, 1, 1, 1, '4'),
(544, 209, 1, 1, 1, '3'),
(545, 182, 1, 1, 1, '3'),
(546, 218, 1, 1, 1, '5'),
(547, 218, 1, 1, 1, '4'),
(548, 218, 1, 1, 1, '6'),
(549, 192, 1, 1, 1, '3'),
(550, 199, 1, 1, 1, '3'),
(551, 210, 1, 1, 1, '3'),
(552, 155, 1, 1, 1, '3'),
(553, 71, 2, 2, 1, '1'),
(554, 208, 1, 1, 1, '4'),
(555, 208, 1, 1, 1, '3'),
(556, 250, 1, 1, 1, '3'),
(557, 224, 1, 1, 1, '7'),
(558, 186, 1, 1, 1, '7'),
(559, 248, 1, 1, 1, '5'),
(560, 248, 1, 1, 1, '4'),
(561, 248, 1, 1, 1, '6'),
(562, 266, 1, 1, 1, '5'),
(563, 200, 1, 1, 1, '3'),
(564, 198, 1, 1, 1, '4'),
(565, 198, 1, 1, 1, '5'),
(566, 232, 1, 1, 1, '7'),
(567, 232, 1, 1, 1, '4'),
(568, 238, 1, 1, 1, '4'),
(569, 238, 1, 1, 1, '5'),
(570, 238, 1, 1, 1, '7'),
(571, 257, 1, 1, 1, '3'),
(572, 257, 1, 1, 1, '7'),
(573, 257, 1, 1, 1, '8'),
(574, 175, 1, 1, 1, '3'),
(575, 183, 1, 1, 1, '7'),
(576, 184, 1, 1, 1, '9'),
(577, 167, 1, 1, 1, '3'),
(578, 221, 1, 1, 1, '7'),
(579, 206, 1, 1, 1, '4'),
(580, 206, 1, 1, 1, '5'),
(581, 206, 1, 1, 1, '3'),
(582, 206, 1, 1, 1, '7'),
(583, 206, 1, 1, 1, '9'),
(585, 190, 1, 1, 1, '3'),
(586, 235, 1, 1, 1, '3'),
(587, 235, 1, 1, 1, '7'),
(588, 235, 1, 1, 1, '9'),
(589, 207, 1, 1, 1, '4'),
(590, 197, 1, 1, 1, '4'),
(591, 263, 1, 1, 1, '7'),
(592, 263, 1, 1, 1, '9'),
(593, 244, 1, 1, 1, '7'),
(594, 244, 1, 1, 1, '9'),
(595, 264, 1, 1, 1, '9'),
(596, 264, 1, 1, 1, '7'),
(597, 211, 2, 2, 1, '2'),
(598, 268, 2, 2, 1, '2'),
(599, 212, 2, 2, 1, '2'),
(600, 272, 2, 2, 1, '2'),
(601, 196, 1, 1, 1, '3'),
(602, 174, 1, 1, 1, '3'),
(603, 246, 1, 1, 1, '4'),
(604, 246, 1, 1, 1, '5'),
(605, 246, 1, 1, 1, '6'),
(606, 179, 1, 1, 1, '4'),
(607, 179, 1, 1, 1, '5'),
(608, 179, 0, 0, 0, ''),
(609, 203, 1, 1, 1, '7'),
(610, 203, 1, 1, 1, '9'),
(611, 204, 1, 1, 1, '4'),
(612, 204, 1, 1, 1, '5'),
(613, 204, 1, 1, 1, '6'),
(614, 213, 2, 2, 1, '2'),
(615, 177, 1, 1, 1, '4'),
(616, 177, 1, 1, 1, '5'),
(617, 177, 1, 1, 1, '6'),
(618, 214, 2, 2, 1, '2'),
(619, 228, 1, 1, 1, '4'),
(620, 228, 1, 1, 1, '5'),
(621, 228, 1, 1, 1, '6'),
(622, 252, 1, 1, 1, '4'),
(623, 201, 1, 1, 1, '3'),
(624, 234, 1, 1, 1, '7'),
(625, 234, 1, 1, 1, '3'),
(626, 234, 1, 1, 1, '4'),
(627, 234, 1, 1, 1, '9'),
(628, 220, 1, 1, 1, '7'),
(629, 220, 1, 1, 1, '9'),
(630, 189, 1, 1, 1, '3'),
(631, 189, 1, 1, 1, '7'),
(632, 189, 1, 1, 1, '9'),
(633, 189, 1, 1, 1, '8'),
(634, 189, 1, 1, 1, ''),
(635, 254, 1, 1, 1, '4'),
(636, 178, 1, 1, 1, '4'),
(637, 178, 1, 1, 1, '5'),
(638, 178, 1, 1, 1, '6'),
(639, 202, 1, 1, 1, '4'),
(640, 202, 1, 1, 1, '5'),
(641, 202, 1, 1, 1, '5'),
(642, 188, 1, 1, 1, '9'),
(643, 188, 1, 1, 1, '4'),
(644, 188, 1, 1, 1, '7'),
(645, 188, 1, 1, 1, '5'),
(646, 188, 1, 1, 1, '6'),
(647, 231, 1, 1, 1, '7'),
(648, 231, 1, 1, 1, '9'),
(649, 191, 1, 1, 1, '3'),
(650, 258, 1, 1, 1, '3'),
(652, 173, 1, 1, 1, '3'),
(654, 253, 1, 1, 1, '4'),
(655, 253, 1, 1, 1, '5'),
(656, 253, 1, 1, 1, '6'),
(657, 222, 1, 1, 1, '7'),
(658, 222, 1, 1, 1, '9'),
(659, 222, 1, 1, 1, '5'),
(660, 222, 1, 1, 1, '4'),
(661, 222, 1, 1, 1, '6'),
(662, 194, 1, 1, 1, '3'),
(663, 260, 1, 1, 1, '3'),
(664, 229, 1, 1, 1, '4'),
(665, 229, 1, 1, 1, '5'),
(666, 229, 1, 1, 1, '6'),
(667, 255, 1, 1, 1, '3'),
(668, 193, 1, 1, 1, '3'),
(669, 230, 1, 1, 1, '4'),
(670, 230, 1, 1, 1, '5'),
(671, 205, 1, 1, 1, '4'),
(672, 205, 1, 1, 1, '5'),
(673, 205, 1, 1, 1, '6'),
(674, 152, 1, 1, 1, '4'),
(675, 152, 1, 1, 1, '5'),
(676, 152, 1, 1, 1, '6'),
(677, 242, 1, 1, 1, '4'),
(678, 242, 1, 1, 1, '7'),
(679, 226, 1, 1, 1, '4'),
(680, 226, 1, 1, 1, '5'),
(681, 226, 1, 1, 1, '6'),
(682, 156, 1, 1, 1, '3'),
(683, 227, 1, 1, 1, '4'),
(684, 227, 1, 1, 1, '7'),
(685, 227, 1, 1, 1, '5'),
(686, 237, 1, 1, 1, '4'),
(687, 181, 1, 1, 1, '4'),
(688, 181, 1, 1, 1, '5'),
(689, 236, 1, 1, 1, '4'),
(690, 185, 2, 2, 1, '1'),
(691, 271, 1, 1, 1, '9'),
(692, 271, 1, 1, 1, '9'),
(693, 271, 1, 1, 1, '5'),
(694, 180, 1, 1, 1, '7'),
(695, 180, 1, 1, 1, '9'),
(696, 180, 1, 1, 1, '4'),
(697, 180, 1, 1, 1, '5'),
(698, 180, 1, 1, 1, '6'),
(699, 187, 1, 1, 1, '7'),
(700, 270, 1, 1, 1, '4'),
(701, 270, 1, 1, 1, '5'),
(702, 270, 1, 1, 1, '6'),
(703, 215, 2, 2, 1, '2'),
(704, 269, 1, 1, 1, '7'),
(705, 269, 1, 1, 1, '9'),
(706, 256, 1, 1, 1, '7'),
(707, 217, 1, 1, 1, '3'),
(708, 245, 1, 1, 1, '7'),
(709, 195, 1, 1, 1, '3'),
(710, 241, 1, 1, 1, '4'),
(711, 241, 1, 1, 1, '5'),
(712, 239, 1, 1, 1, '7'),
(713, 233, 1, 1, 1, '7'),
(714, 233, 1, 1, 1, '4'),
(715, 274, 1, 1, 1, '3'),
(716, 275, 1, 1, 1, '4'),
(717, 275, 0, 0, 0, '3'),
(718, 275, 0, 0, 0, '5'),
(719, 275, 0, 0, 0, '7'),
(720, 276, 1, 1, 1, '3'),
(721, 277, 1, 1, 1, '9'),
(722, 277, 1, 1, 1, '7'),
(723, 278, 1, 1, 1, '4'),
(724, 279, 2, 2, 1, '1'),
(725, 280, 1, 1, 1, '5'),
(726, 280, 1, 1, 1, '4'),
(727, 280, 1, 1, 1, '7'),
(728, 280, 1, 1, 1, '9'),
(729, 281, 1, 1, 1, '4'),
(730, 281, 1, 1, 1, '5'),
(731, 282, 1, 1, 1, '4'),
(732, 283, 1, 1, 1, '4'),
(733, 284, 1, 1, 1, '4'),
(734, 285, 1, 1, 1, '4'),
(735, 285, 1, 1, 1, '5'),
(736, 285, 1, 1, 1, '7'),
(737, 285, 1, 1, 1, '9'),
(738, 286, 1, 1, 1, '9'),
(739, 286, 1, 1, 1, '4'),
(740, 286, 1, 1, 1, '7'),
(741, 287, 1, 1, 1, '9'),
(742, 288, 1, 1, 1, '4'),
(743, 289, 1, 1, 1, '9'),
(744, 289, 1, 1, 1, '4'),
(745, 289, 1, 1, 1, '5'),
(746, 289, 1, 1, 1, '7'),
(747, 290, 1, 1, 1, '4'),
(748, 290, 1, 1, 1, '7'),
(749, 290, 1, 1, 1, '5'),
(750, 290, 1, 1, 1, '9'),
(751, 291, 1, 1, 1, '9'),
(752, 291, 1, 1, 1, '4'),
(753, 291, 1, 1, 1, '5'),
(754, 292, 1, 1, 1, '4'),
(755, 293, 1, 1, 1, '3'),
(756, 294, 1, 1, 1, '4'),
(757, 294, 1, 1, 1, '7'),
(758, 294, 1, 1, 1, '9'),
(759, 295, 1, 1, 1, '7'),
(760, 295, 1, 1, 1, '9'),
(761, 295, 1, 1, 1, '4'),
(762, 296, 0, 0, 0, '3'),
(763, 297, 1, 1, 1, '4'),
(764, 297, 1, 1, 1, '5'),
(765, 297, 1, 1, 1, '9'),
(766, 297, 1, 1, 1, '7'),
(767, 298, 0, 0, 0, '4'),
(768, 298, 1, 1, 1, '3'),
(769, 298, 1, 1, 1, '5'),
(770, 299, 1, 1, 1, '9'),
(771, 299, 1, 1, 1, '7'),
(772, 300, 1, 1, 1, '4'),
(773, 300, 1, 1, 1, '5'),
(774, 301, 1, 1, 1, '4'),
(775, 301, 2, 2, 1, '1'),
(776, 301, 1, 1, 1, '5'),
(777, 302, 1, 1, 1, '4'),
(778, 302, 1, 1, 1, '5'),
(779, 303, 1, 1, 1, '4'),
(780, 303, 1, 1, 1, '5'),
(781, 304, 1, 1, 1, '9'),
(782, 304, 1, 1, 1, '7'),
(785, 306, 1, 1, 1, '7'),
(786, 306, 1, 1, 1, '9'),
(787, 306, 1, 1, 1, '8'),
(788, 60, 1, 1, 1, '4'),
(789, 60, 1, 1, 1, '5'),
(790, 60, 1, 1, 1, '6'),
(791, 60, 1, 1, 1, '7'),
(792, 60, 1, 1, 1, '8'),
(793, 60, 1, 1, 1, '9'),
(794, 82, 1, 1, 1, '7'),
(795, 82, 1, 1, 1, '8'),
(796, 82, 1, 1, 1, '9'),
(797, 305, 1, 1, 1, '9'),
(798, 305, 1, 1, 1, '7'),
(799, 74, 1, 1, 1, '4'),
(800, 74, 1, 1, 1, '5'),
(801, 74, 1, 1, 1, '6'),
(802, 74, 1, 1, 1, '7'),
(803, 74, 1, 1, 1, '8'),
(804, 74, 1, 1, 1, '9'),
(805, 74, 1, 1, 1, '3'),
(806, 307, 2, 2, 1, '2'),
(807, 307, 1, 1, 1, '4'),
(808, 308, 1, 1, 1, '4'),
(809, 308, 2, 2, 1, '1'),
(810, 309, 1, 1, 1, '8'),
(811, 309, 1, 1, 1, '7'),
(812, 310, 1, 1, 1, '3'),
(813, 312, 1, 1, 1, '6'),
(814, 312, 1, 1, 1, '7');

-- --------------------------------------------------------

--
-- Table structure for table `spare_minimum_level`
--

CREATE TABLE `spare_minimum_level` (
  `id` int(10) NOT NULL,
  `spare_id` int(10) NOT NULL,
  `spare_name` varchar(100) NOT NULL,
  `spare_qty` int(10) NOT NULL,
  `min_qty` int(10) NOT NULL,
  `alert_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spare_purchase_details`
--

CREATE TABLE `spare_purchase_details` (
  `id` int(10) NOT NULL,
  `spare_id` int(50) NOT NULL,
  `purchase_qty` int(50) NOT NULL,
  `return_qty` int(50) NOT NULL,
  `purchase_date` varchar(50) NOT NULL,
  `purchase_price` int(50) NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `reason` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spare_purchase_details`
--

INSERT INTO `spare_purchase_details` (`id`, `spare_id`, `purchase_qty`, `return_qty`, `purchase_date`, `purchase_price`, `invoice_no`, `reason`) VALUES
(1, 117, 0, 1, '', 0, '', ''),
(2, 117, 1, 0, '', 0, '', ''),
(3, 117, 2, 0, '', 0, '', ''),
(4, 117, 0, 1, '', 0, '', 'To SR'),
(5, 274, 1, 0, '', 0, '', ''),
(6, 275, 1, 0, '', 0, '', ''),
(7, 241, 2, 0, '', 0, '', ''),
(8, 241, 3, 0, '', 0, '', ''),
(9, 241, 0, 2, '', 0, '', ''),
(10, 148, 0, 1, '', 0, '', ''),
(11, 148, 2, 0, '', 0, '', ''),
(12, 111, 0, 1, '', 0, '', ''),
(13, 111, 2, 0, '', 0, '', ''),
(14, 112, 1, 0, '', 0, '', ''),
(15, 112, 4, 0, '', 0, '', ''),
(16, 0, 0, 0, '', 0, '', ''),
(17, 112, 0, 2, '', 0, '', ''),
(18, 277, 2, 0, '', 0, '', ''),
(19, 40, 0, 3, '', 0, '', ''),
(20, 40, 3, 0, '', 0, '', ''),
(21, 0, 0, 0, '', 0, '', ''),
(22, 279, 1, 0, '', 0, '', ''),
(23, 278, 2, 0, '', 0, '', ''),
(24, 280, 2, 0, '', 0, '', ''),
(25, 161, 7, 0, '', 0, '', ''),
(26, 161, 1, 0, '', 0, '', ''),
(27, 281, 3, 0, '', 0, '', ''),
(28, 282, 1, 0, '', 0, '', ''),
(29, 283, 1, 0, '', 0, '', ''),
(30, 284, 1, 0, '', 0, '', ''),
(31, 163, 2, 0, '', 0, '', ''),
(32, 163, 1, 0, '', 0, '', ''),
(33, 285, 1, 0, '', 0, '', ''),
(34, 286, 1, 0, '', 0, '', ''),
(35, 270, 2, 0, '', 0, '', ''),
(36, 276, 3, 0, '', 0, '', ''),
(37, 287, 1, 0, '', 0, '', ''),
(38, 32, 0, 2, '', 0, '', ''),
(39, 32, 3, 0, '', 0, '', ''),
(40, 288, 1, 0, '', 0, '', ''),
(41, 51, 8, 0, '', 0, '', ''),
(42, 289, 1, 0, '', 0, '', ''),
(43, 289, 1, 0, '', 0, '', ''),
(44, 115, 0, 1, '', 0, '', ''),
(45, 115, 3, 0, '', 0, '', ''),
(46, 290, 1, 0, '', 0, '', ''),
(47, 63, 2, 0, '', 0, '', ''),
(48, 63, 1, 0, '', 0, '', ''),
(49, 3, 0, 1, '', 0, '', ''),
(50, 3, 18, 0, '', 0, '', ''),
(51, 70, 0, 1, '', 0, '', ''),
(52, 70, 19, 0, '', 0, '', ''),
(53, 52, 0, 6, '', 0, '', ''),
(54, 52, 12, 0, '', 0, '', ''),
(55, 291, 2, 0, '', 0, '', ''),
(56, 292, 2, 0, '', 0, '', ''),
(57, 177, 0, 1, '', 0, '', ''),
(58, 177, 2, 0, '', 0, '', ''),
(59, 246, 3, 0, '', 0, '', ''),
(60, 31, 4, 0, '', 0, '', ''),
(61, 293, 1, 0, '', 0, '', ''),
(62, 44, 2, 0, '', 0, '', ''),
(63, 153, 3, 0, '', 0, '', ''),
(64, 108, 6, 0, '', 0, '', ''),
(65, 74, 5, 0, '', 0, '', ''),
(66, 294, 2, 0, '', 0, '', ''),
(67, 295, 1, 0, '', 0, '', ''),
(68, 57, 18, 0, '', 0, '', ''),
(69, 206, 3, 0, '', 0, '', ''),
(70, 39, 2, 0, '', 0, '', ''),
(71, 112, 2, 0, '', 0, '', ''),
(72, 296, 1, 0, '', 0, '', ''),
(73, 297, 1, 0, '', 0, '', ''),
(74, 35, 3, 0, '', 0, '', ''),
(75, 72, 1, 0, '', 0, '', ''),
(76, 299, 1, 0, '', 0, '', ''),
(77, 198, 2, 0, '', 0, '', ''),
(78, 262, 1, 0, '', 0, '', ''),
(79, 248, 1, 0, '', 0, '', ''),
(80, 68, 1, 0, '', 0, '', ''),
(81, 156, 0, 0, '', 0, '', ''),
(82, 273, 0, 0, '', 0, '', ''),
(83, 300, 1, 0, '', 0, '', ''),
(84, 218, 2, 0, '', 0, '', ''),
(85, 11, 5, 0, '', 0, '', ''),
(86, 24, 3, 0, '', 0, '', ''),
(87, 23, 2, 0, '', 0, '', ''),
(88, 301, 1, 0, '', 0, '', ''),
(89, 63, 1, 0, '', 0, '', ''),
(90, 219, 1, 0, '', 0, '', ''),
(91, 156, 1, 0, '', 0, '', ''),
(92, 216, 3, 0, '', 0, '', ''),
(93, 247, 3, 0, '', 0, '', ''),
(94, 303, 1, 0, '', 0, '', ''),
(95, 285, 2, 0, '', 0, '', ''),
(96, 285, 0, 1, '', 0, '', ''),
(97, 50, 0, 4, '', 0, '', ''),
(98, 50, 4, 0, '', 0, '', ''),
(99, 6, 0, 10, '', 0, '', ''),
(100, 6, 11, 0, '', 0, '', ''),
(101, 246, 1, 0, '', 0, '', ''),
(102, 246, 0, 3, '', 0, '', ''),
(103, 6, 9, 0, '', 0, '', ''),
(104, 50, 1, 0, '', 0, '', ''),
(105, 63, 0, 2, '', 0, '', ''),
(106, 241, 0, 1, '', 0, '', ''),
(107, 163, 0, 1, '', 0, '', ''),
(108, 222, 0, 1, '', 0, '', ''),
(109, 106, 0, 1, '', 0, '', ''),
(110, 106, 3, 0, '', 0, '', ''),
(111, 304, 2, 0, '', 0, '', ''),
(112, 268, 1, 0, '', 0, '', ''),
(113, 268, 1, 0, '', 0, '', ''),
(114, 43, 0, 1, '', 0, '', ''),
(115, 43, 3, 0, '', 0, '', ''),
(116, 236, 0, 1, '', 0, '', ''),
(117, 236, 2, 0, '', 0, '', ''),
(118, 175, 0, 1, '', 0, '', ''),
(119, 175, 2, 0, '', 0, '', ''),
(120, 174, 2, 0, '', 0, '', ''),
(121, 262, 0, 0, '', 0, '', ''),
(122, 262, 0, 1, '', 0, '', ''),
(123, 289, 1, 0, '', 0, '', ''),
(124, 289, 0, 2, '', 0, '', ''),
(125, 305, 1, 0, '', 0, '', ''),
(126, 306, 1, 0, '', 0, '', ''),
(127, 246, 0, 0, '', 0, '', ''),
(128, 246, 0, 1, '', 0, '', ''),
(129, 247, 0, 1, '', 0, '', ''),
(130, 250, 0, 1, '', 0, '', ''),
(131, 250, 6, 0, '', 0, '', ''),
(132, 41, 0, 1, '', 0, '', ''),
(133, 41, 3, 0, '', 0, '', ''),
(134, 177, 0, 1, '', 0, '', ''),
(135, 276, 0, 1, '', 0, '', ''),
(136, 153, 0, 1, '', 0, '', ''),
(137, 271, 0, 5, '', 0, '', ''),
(138, 271, 5, 0, '', 0, '', ''),
(139, 49, 0, 1, '', 0, '', ''),
(140, 49, 6, 0, '', 0, '', ''),
(141, 19, 0, 1, '', 0, '', ''),
(142, 19, 3, 0, '', 0, '', ''),
(143, 206, 0, 1, '', 0, '', ''),
(144, 206, 0, 1, '', 0, '', ''),
(145, 246, 1, 0, '', 0, '', ''),
(146, 276, 0, 1, '', 0, '', ''),
(147, 305, 20, 0, '2017-12-29 17:00', 200, 'fdfd', 'fddgd'),
(148, 60, 30, 0, '2017-12-29 17:00', 300, 'dfdsfs', 'sdfsdfs'),
(149, 82, 40, 0, '2017-12-29 17:00', 400, 'sddsfds', 'dsfsfsdf'),
(150, 307, 2, 0, '2018-02-09 10:00', 456, 'sfgfds', 'gdsfgdsgggg'),
(151, 308, 7, 0, '2018-02-14 10:23', 14, 'dsgdsgsdgsd', 'gsdfgdsgdsgs'),
(152, 308, 10, 0, '2018-02-14 12:00', 2323, 'dfgdg', 'dfgfggfgfd'),
(153, 309, 10, 0, '2018-02-14 15:00', 1234, 'asdsdds', 'fdasfasfasfas'),
(154, 310, 10, 0, '2018-02-14 16:00', 6565, 'gfdsgfsdg', 'gsdfgdsgsdgsgsd'),
(155, 1, 2, 0, '', 0, '', ''),
(156, 306, 5, 0, '2018-02-15 11:00', 23432, 'sdafdsafas', 'fsafasfasfasfasf'),
(157, 3, 35, 0, '2018-02-15 10:52', 3453, 'srdgvfdgfsd', 'dsfgdsgsgds');

-- --------------------------------------------------------

--
-- Table structure for table `spare_to_engineers`
--

CREATE TABLE `spare_to_engineers` (
  `id` int(10) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `spare_id` int(10) NOT NULL,
  `qty_out` int(10) NOT NULL,
  `qty_in` int(10) NOT NULL,
  `engineer_date` varchar(100) NOT NULL,
  `req_id` int(255) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `spare_receipt` varchar(255) NOT NULL,
  `auto_cnt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spare_to_engineers`
--

INSERT INTO `spare_to_engineers` (`id`, `emp_id`, `spare_id`, `qty_out`, `qty_in`, `engineer_date`, `req_id`, `cust_name`, `reason`, `spare_receipt`, `auto_cnt`) VALUES
(1, '00012', 114, 0, 0, '', 49, '00057', '', 'with_service', 0),
(2, '00012', 189, 0, 0, '', 49, '00057', '', 'with_service', 0),
(3, '00009', 63, 1, 0, '2017-06-30', 1, '00201', '', 'with_service', 0),
(4, '00012', 114, 1, 0, '', 49, '00057', '', 'with_service', 0),
(5, '00012', 189, 1, 0, '', 49, '00057', '', 'with_service', 0),
(6, '00012', 114, 0, 1, '', 49, '00057', '', 'with_service', 0),
(7, '00012', 189, 0, 0, '', 49, '00057', '', 'with_service', 0),
(8, '00013', 236, 1, 0, '2017-08-08', 78, '00007', '', 'with_service', 0),
(9, '00013', 111, 0, 0, '', 100, '00003', '', 'with_service', 0),
(10, '00013', 236, 0, 0, '', 78, '00007', '', 'with_service', 0),
(11, '00012', 114, 0, 0, '', 49, '00057', '', 'with_service', 0),
(12, '00012', 189, 0, 0, '', 49, '00057', '', 'with_service', 0),
(13, '13', 111, 0, 0, '', 100, '00003', '', 'with_service', 0),
(14, '0', 274, 0, 0, '', 84, '00218', '', 'with_service', 0),
(15, '0', 274, 0, 0, '', 84, '00218', '', 'with_service', 0),
(16, '0', 274, 0, 0, '', 84, '00218', '', 'with_service', 0),
(17, '0', 40, 0, 0, '', 54, '00201', '', 'with_service', 0),
(18, '0', 262, 0, 0, '', 50, '00136', '', 'with_service', 0),
(19, '0', 114, 0, 0, '', 49, '00057', '', 'with_service', 0),
(20, '0', 189, 0, 0, '', 49, '00057', '', 'with_service', 0),
(21, '0', 114, 0, 0, '', 49, '00057', '', 'with_service', 0),
(22, '0', 189, 0, 0, '', 49, '00057', '', 'with_service', 0),
(23, '1', 262, 1, 0, '2017-11-16', 253, '00140', '', 'with_service', 0),
(24, '18', 74, 2, 0, '2018-02-08', 289, '00327', 'dffdhdfhdf', 'with_service', 0),
(25, '18', 74, 2, 0, '2018-02-08', 289, '00327', 'dsfdsgfds', 'with_service', 0),
(26, '18', 305, 2, 0, '2018-02-08', 289, '00327', 'ggsfdgdsgs', 'with_service', 0),
(27, '18', 82, 2, 0, '2018-02-08', 289, '00327', 'dgsfdgsdfg', 'with_service', 0),
(28, '18', 74, 2, 0, '2018-02-08', 289, '00327', 'dfgdsgds', 'with_service', 0),
(29, '18', 305, 0, 0, '', 289, '00327', '', 'with_service', 0),
(30, '18', 82, 0, 0, '', 289, '00327', '', 'with_service', 0),
(31, '18', 74, 2, 0, '2018-02-08', 289, '00327', '', 'with_service', 0),
(32, '18', 305, 2, 0, '2018-02-08', 289, '00327', '', 'with_service', 0),
(33, '18', 82, 2, 0, '2018-02-08', 289, '00327', '', 'with_service', 0),
(34, '18', 60, 3, 0, '2018-02-08', 289, '00327', '', 'with_service', 0),
(35, '0', 307, 0, 0, '', 292, '00422', '', 'with_service', 0),
(36, '0', 307, 0, 0, '', 292, '00422', '', 'with_service', 0),
(37, '0', 307, 0, 0, '', 292, '00422', '', 'with_service', 0),
(38, '0', 307, 0, 0, '', 292, '00422', '', 'with_service', 0),
(39, '26', 307, 0, 0, '', 294, '00422', '', 'with_service', 0),
(40, '26', 307, 1, 0, '2018-02-13', 294, '00422', 'sdgdsgdsgsgsd', 'with_service', 0),
(41, '26', 307, 0, 0, '', 294, '00422', '', 'with_service', 0),
(42, '26', 307, 0, 0, '', 294, '00422', '', 'with_service', 0),
(43, '26', 307, 0, 0, '', 294, '00422', '', 'with_service', 0),
(44, '26', 307, 0, 0, '', 294, '00422', '', 'with_service', 0),
(45, '26', 307, 1, 0, '2018-02-13', 294, '00422', 'sretretewte', 'with_service', 0),
(46, '27', 308, 2, 0, '2018-02-14', 295, '00423', 'llllllll', 'with_service', 0),
(47, '27', 309, 2, 0, '2018-02-14', 297, '00423', 'dfgsdgsdgs', 'with_service', 0),
(48, '26', 310, 2, 0, '2018-02-14', 298, '00423', 'sdafdasf', 'with_service', 0),
(49, '26', 310, 0, 0, '', 298, '00423', '', 'with_service', 0),
(50, '26', 310, 2, 0, '2018-02-14', 298, '00423', 'ertetrewtewte', 'with_service', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stamping_details`
--

CREATE TABLE `stamping_details` (
  `id` int(10) NOT NULL,
  `req_id` varchar(10) NOT NULL,
  `year` int(20) NOT NULL,
  `quarter` varchar(10) NOT NULL,
  `kg` varchar(50) NOT NULL,
  `stamping_charge` int(50) NOT NULL,
  `agn_charge` int(50) NOT NULL,
  `penalty` int(50) NOT NULL,
  `conveyance` int(50) NOT NULL,
  `tot_charge` int(50) NOT NULL,
  `cmr_paid` int(10) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `pending_amt` int(10) NOT NULL,
  `stamping_received` varchar(250) NOT NULL,
  `created_on` varchar(50) NOT NULL,
  `updated_on` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(10) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`) VALUES
(1, 'Andaman and Nicobar Islands'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli'),
(9, 'Daman and Diu'),
(10, 'Delhi'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry'),
(28, 'Punjab'),
(29, 'Rajasthan'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttar Pradesh'),
(35, 'Uttarakhand'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(10) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Quote Approved'),
(2, 'QC'),
(3, 'Call Completed'),
(4, 'Delivered'),
(5, 'Quote In Progress'),
(6, 'Quote Review'),
(7, 'Awaiting Approval'),
(8, 'Quote Rejected'),
(9, 'On Hold'),
(10, 'Cancel'),
(16, 'Job Done');

-- --------------------------------------------------------

--
-- Table structure for table `tax_details`
--

CREATE TABLE `tax_details` (
  `id` int(10) NOT NULL,
  `tax_name` varchar(50) NOT NULL,
  `tax_percentage` float NOT NULL,
  `tax_default` tinyint(1) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax_details`
--

INSERT INTO `tax_details` (`id`, `tax_name`, `tax_percentage`, `tax_default`, `status`) VALUES
(1, 'SERVICE TAX', 0, 1, 0),
(2, 'VAT', 0, 0, 1),
(3, 'asasa', 33, 0, 0),
(4, 'gfdgd', 5443, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `user_access` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_name`, `password`, `user_type`, `emp_id`, `user_access`, `status`) VALUES
(1, 'Admin', 'admin', 'welcome', '1', 0, '', 0),
(26, 'anil', 'anil', 'anil', '7', 1, 'stamping_user', 0),
(27, 'amit', 'amit', 'amit', '7', 7, 'nonstamping_user', 0),
(28, 'rahul', 'rahul', 'rahul', '7', 3, 'nonstamping_user', 0),
(29, 'Anshul', 'anshul', 'anshul', '5', 4, 'nonstamping_user', 0),
(30, 'jitendra', 'jitendra', 'jitendra', '7', 8, '', 0),
(31, 'Test User', 'testuser', '1234', '7', 1, '', 0),
(32, 'srividhya', 'srividhya', 'srividhya', '7', 13, 'nonstamping_user', 0),
(33, 'arvind yadav', 'arvind', 'arvind', '7', 9, 'nonstamping_user', 0),
(34, 'Bhaskar', 'bhaskar', 'bhaskar', '7', 12, 'nonstamping_user', 0),
(35, 'Sravan', 'sravan', 'sravan', '7', 14, 'nonstamping_user', 0),
(36, 'Upendra', 'upendra', 'upendra', '7', 11, 'nonstamping_user', 0),
(37, 'Chenna Kesva', 'kesva', 'kesva', '7', 15, 'nonstamping_user', 0),
(38, 'J.suresh', 'suresh', 'suresh', '7', 16, 'nonstamping_user', 0),
(39, 'Asutosh', 'asutosh', 'asutosh', '7', 5, 'nonstamping_user', 0),
(40, 'vishal', 'vishal', 'vishal', '7', 6, 'nonstamping_user', 0),
(41, 'Dashrath Singh', 'dashrath', 'dashrath', '5', 0, 'nonstamping_user', 0),
(42, 'uday kumar', 'uday', 'uday', '7', 10, 'nonstamping_user', 0),
(43, 'TestEmployee', 'testlogin', 'testlogin123', '7', 18, '', 0),
(44, 'spudhaya', '1sp', '1234', '7', 26, '', 0),
(45, 'spram', 'spram', '1234', '7', 27, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `zone_pincodes`
--

CREATE TABLE `zone_pincodes` (
  `id` int(10) NOT NULL,
  `zone_code` int(10) NOT NULL,
  `area_name` varchar(100) NOT NULL,
  `pincode` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zone_pincodes`
--

INSERT INTO `zone_pincodes` (`id`, `zone_code`, `area_name`, `pincode`) VALUES
(1, 1, 'Goregaon', 400062),
(2, 1, 'Vidyavihar', 400070),
(3, 1, 'Parel', 400012),
(4, 1, 'Pedder road', 400026),
(5, 1, 'Charni road', 400004),
(6, 1, 'Andheri East', 400053),
(7, 1, 'Chembur', 400094),
(8, 1, 'Thane', 400604),
(9, 1, 'Bhulabhai nagar', 400026),
(10, 1, 'Andheri west', 400049),
(11, 1, 'Dahisar', 400068),
(12, 1, 'Ghatkopar', 400086),
(13, 1, 'Andheri East', 400069),
(14, 1, 'Dadar', 400014),
(15, 1, 'Kalyan', 421301),
(16, 1, 'Gamdevi', 400007),
(17, 1, 'Bandra', 400),
(18, 1, 'Sanpada', 400705),
(19, 2, 'Rae Bareli Road', 226014),
(20, 2, 'nirala nagar', 226016),
(21, 2, 'doiawalla jolly grand', 248016),
(22, 2, 'Lucknow', 206012),
(23, 2, 'agra', 282002),
(24, 2, 'Azamgarh', 276127),
(25, 2, 'Meerut', 250004),
(26, 2, 'Gomti Nagr', 226010),
(27, 2, 'VARANASI', 221005),
(28, 2, 'chowk', 226003),
(29, 2, 'nirala nagar ', 226020),
(30, 2, 'allhabad', 221001),
(31, 2, ' rampur road', 263129),
(32, 2, 'gorakhpur', 233015),
(33, 2, 'ALLHABAD', 211002),
(34, 2, 'CANT LUCKNOW', 226021),
(35, 2, 'jankipuram extention', 226031),
(36, 2, 'nirala nagar', 226020),
(37, 2, 'allhabad', 211001),
(38, 2, 'GORAKHPUR', 273013),
(39, 2, ' ghaila ', 226020),
(40, 2, 'BAREILLY', 243006),
(41, 2, 'Jankipuram ', 226021),
(42, 2, 'gomti nagar', 226010),
(43, 2, 'vrindaban colony', 226029),
(44, 2, 'chowk ', 226003),
(45, 2, ' noida ', 201303),
(46, 2, 'gomti nagar ', 226010),
(47, 2, 'kanpur', 208002),
(48, 2, 'jhansi', 284001),
(49, 2, 'LUCKNOW', 226012),
(50, 2, 'LUCKNOW', 201303),
(51, 2, 'LUCKNOW', 226003),
(52, 2, 'Dehradun', 248001),
(53, 2, 'Etawa', 206130),
(54, 3, 'BHOPAL', 462030),
(55, 3, 'BHOPAL', 462016),
(56, 3, 'BHOPAL', 462024),
(57, 3, 'BHOPAL', 462003),
(58, 3, 'RAIPUR', 492001),
(59, 3, 'BHILAI', 490001),
(60, 3, 'JABALPUR', 482001),
(61, 3, 'UJJAIN', 456010),
(62, 3, 'INDORE', 452014),
(63, 3, 'INDORE', 452001),
(64, 3, 'INDORE', 452018),
(65, 3, 'INDORE', 453555),
(66, 3, 'INDORE', 452010),
(67, 3, 'CHITRAKOOT', 210204),
(68, 3, 'BHOPAL', 462001),
(69, 3, 'JABALPUR', 482002),
(70, 3, 'INDORE', 452008),
(71, 3, 'INDORE', 452003),
(72, 3, 'SATNA', 485005),
(73, 3, 'GWALIOR', 474002),
(74, 3, 'JABALPUR', 482003),
(75, 3, 'UMARIYA', 484661),
(76, 3, 'SHAHDOL', 484001),
(77, 3, 'ANUPPUR', 484224),
(78, 5, 'Sampangiram nagar', 560013),
(79, 5, 'BG rd', 560069),
(80, 5, 'BG rd', 560076),
(81, 5, 'Thippasandra', 560075),
(82, 5, 'Yelahanka', 560064),
(83, 5, 'MSRIT', 560054),
(84, 5, 'Bellary rd', 560092),
(85, 5, 'Lakkasandra', 560029),
(86, 6, 'Patna', 801505),
(87, 6, 'Motihari', 800014),
(88, 6, 'Darbhanga', 846003),
(89, 6, 'Patna', 800020),
(90, 6, 'Patna', 800026),
(91, 6, 'Ranchi', 834009),
(92, 6, 'Patna', 800014),
(93, 6, 'Purnea', 854301),
(94, 6, 'Patna', 800013),
(95, 8, 'Teynampet', 600035),
(96, 8, 'Greams Road', 600006),
(97, 8, 'Nungambakkam', 600034),
(98, 8, 'Vadapalani', 600026),
(99, 8, 'Chetpet', 600031),
(100, 8, 'Kilpauk', 600010),
(101, 8, 'Anna ngr', 600040),
(102, 8, 'Adyar', 600020),
(103, 8, 'Perumbakkam', 600100),
(104, 8, 'Nandanam', 600035),
(105, 8, 'Perambur', 600023),
(106, 8, 'T nagar', 600017),
(107, 8, 'Westmambalam', 600033),
(108, 9, 'Vellore', 632009),
(109, 10, 'Chitoor', 517219),
(110, 11, 'PANJAGUTTA', 500082),
(111, 11, 'JUBILI HILLS', 500033),
(112, 11, 'BANJARA HILLS', 500034),
(113, 11, 'HIMAYAT NAGAR', 500029),
(114, 11, 'MALAKPET', 500036),
(115, 11, 'GACHIBOWLI', 500035),
(116, 11, 'Hyderabad , Karim Nagar', 505417),
(117, 11, 'TURAKAPALLI', 500078),
(118, 11, 'CHADERGHAT', 500024),
(119, 11, 'KARKANA', 500015),
(120, 11, 'KING KOTI', 500001),
(121, 11, 'VISAKHAPATNAM', 530005),
(122, 11, 'LB NAGAR', 500074),
(123, 11, 'KACHIGUDA', 500072),
(124, 11, 'MALKAJGIRI', 500015),
(125, 11, 'KANCHANBAGH', 500258),
(126, 11, 'NIZAMPET', 500072),
(127, 11, 'SECUNDERABAD', 500015),
(128, 11, 'JAGADAMBHA CENTER', 530002),
(129, 11, 'Rockdale Layout', 530002),
(130, 11, 'SARINILGAMPALLY', 500019),
(131, 11, 'Hyderguda', 500029),
(132, 11, 'VIJAYAWADA', 522501),
(133, 11, 'IDA,Pashamylaram', 502307),
(134, 11, 'MIYAPUR', 500049),
(135, 12, 'NEHRU PHARMA CITY (SEZ)', 531019),
(136, 12, 'BANJARA HILLS', 500033),
(137, 12, 'GUNTUR', 522004),
(138, 12, 'VIJAYAWADA', 520010),
(139, 13, 'Kharghar', 410210),
(140, 13, 'Vashi', 400703),
(141, 14, 'Rajasthan', 305001),
(142, 14, 'Rajasthan', 301001),
(143, 14, 'Rajasthan', 344022),
(144, 14, 'Rajasthan', 325205),
(145, 14, 'Rajasthan', 327001),
(146, 14, 'Rajasthan', 305901),
(147, 14, 'Rajasthan', 321001),
(148, 14, 'Rajasthan', 311001),
(149, 14, 'Rajasthan', 334001),
(150, 14, 'Rajasthan', 323001),
(151, 14, 'Rajasthan', 331001),
(152, 14, 'Rajasthan', 303303),
(153, 14, 'Rajasthan', 328001),
(154, 14, 'Rajasthan', 341303),
(155, 14, 'Rajasthan', 314001),
(156, 14, 'Rajasthan', 322201),
(157, 14, 'Rajasthan', 335512),
(158, 14, 'Rajasthan', 302001),
(159, 14, 'Rajasthan', 326001),
(160, 14, 'Rajasthan', 333001),
(161, 14, 'Rajasthan', 342005),
(162, 14, 'Rajasthan', 322230),
(163, 14, 'Rajasthan', 305404),
(164, 14, 'Rajasthan', 305801),
(165, 14, 'Rajasthan', 324005),
(166, 14, 'Rajasthan', 303108),
(167, 14, 'Rajasthan', 341023),
(168, 14, 'Rajasthan', 305601),
(169, 14, 'Rajasthan', 313301),
(170, 14, 'Rajasthan', 313324),
(171, 14, 'Rajasthan', 303103),
(172, 14, 'Rajasthan', 332001),
(173, 14, 'Rajasthan', 307001),
(174, 14, 'Rajasthan', 311507),
(175, 14, 'Rajasthan', 304001),
(176, 14, 'Rajasthan', 313001),
(177, 15, 'Pune', 411003),
(178, 15, 'Pune', 411016),
(179, 15, 'Pune', 411001),
(180, 15, 'Pune', 411019),
(181, 15, 'Pune', 411004),
(182, 15, 'Pune', 412115),
(183, 15, 'Pune', 411014),
(184, 15, 'Pune', 412108),
(185, 15, 'Pune', 411033),
(186, 15, 'Pune', 411040),
(187, 15, 'Barshi', 413001),
(188, 15, 'Solapur', 413002),
(189, 15, 'Nashik', 422001),
(190, 15, 'Pune', 422013),
(191, 15, 'Nanded', 431601),
(192, 15, 'Aurangabad', 431005),
(193, 15, 'Pune', 413736),
(194, 15, 'Aurangabad', 431210),
(195, 15, 'Sangali', 416416),
(196, 15, 'Ahamednagar', 414001),
(197, 15, 'Kolhapur', 416001),
(198, 15, 'Kolhapur', 416003),
(199, 15, 'Kolhapur', 416008),
(200, 15, 'Latur', 413512),
(201, 15, 'Latur', 413531),
(202, 15, 'Barshi', 413401),
(203, 15, 'Goa', 403004),
(204, 15, 'karad', 415539),
(205, 15, 'Sangali', 416410),
(206, 15, 'Pune', 411008),
(207, 15, 'Nashik', 422005),
(208, 15, 'Pune', 41102),
(209, 15, 'Pune', 411041),
(210, 15, 'Nagpur', 440003),
(211, 15, 'Amaravati', 444601),
(212, 5, 'yashwantpur', 560022),
(213, 2, 'Chandra nagar colony,varanasi', 221010),
(214, 2, 'Mahanagar Extension', 226006),
(215, 1, 'Aurangabad', 431005),
(216, 1, 'TARDEO', 400007),
(217, 15, 'Daund', 413801),
(218, 3, 'SAGAR', 470001),
(219, 3, 'BHOPAL', 462042),
(220, 2, 'Meerut', 250002),
(221, 2, 'SAHAHRANPUR ', 247001),
(222, 2, 'SULTANPUR', 228001),
(223, 2, 'Bareilly', 243001),
(224, 2, 'allhabad', 211002),
(225, 2, 'Allhabad', 211003),
(226, 2, 'JAUNPUR', 222001),
(227, 2, 'ALIGARH', 202001),
(228, 2, 'GORAKHPUR', 273001),
(229, 2, 'Kaily Basti', 272001),
(230, 2, 'GHAZIABAD', 201009),
(231, 2, 'HAPUR', 245101),
(232, 2, 'KANPUR DEHAT', 209101),
(233, 2, 'KANPUR NAGAR', 208001),
(234, 2, 'AGRA', 282001),
(235, 2, 'Sant Ravidas Nagar', 221304),
(236, 2, 'Mau', 275101),
(237, 2, 'LUCKNOW', 226001),
(238, 2, 'Gonda', 271001),
(239, 2, 'FIROZABAD', 283203),
(240, 2, 'MATHURA', 281001),
(241, 2, 'Farrukhabad', 209605),
(242, 2, 'Kaushambi', 212207),
(243, 2, 'Fatehpur', 212601),
(244, 2, 'PRATAPGARH', 230001),
(245, 2, 'BANDA', 210001),
(246, 2, 'BALLIA', 277001),
(247, 2, 'AZAMGARH', 276001),
(248, 2, 'SONBHADRA', 231216),
(249, 2, 'VARANASI', 221002),
(250, 2, 'DEORIA', 274001),
(251, 2, 'MEERUT', 250004),
(252, 2, 'BULANDSHAHAR', 203001),
(253, 2, 'KANPUR', 208002),
(254, 2, 'ETAWAH', 206001),
(255, 2, 'BAHRAICH', 271801),
(256, 2, 'SAIFAI ETAWAH', 206130),
(257, 2, 'Varanasi', 221001),
(258, 2, 'Lakhimpur Khiri', 262701),
(259, 2, 'AMROHA', 244221),
(260, 2, 'RAMPUR', 244901),
(261, 2, 'JHANSI', 284002),
(262, 2, 'KUSHINAGAR', 276507),
(263, 2, 'SAMBHAL', 244302),
(264, 2, 'LUCKNOW', 226018),
(265, 9, 'VELLORE', 632004),
(266, 2, 'HAMIRPUR', 210301),
(267, 2, 'MORADABAD', 244001),
(268, 2, 'RAIBARLI', 229001),
(269, 2, 'BIJNOR', 250001),
(270, 2, 'LALITPUR', 284403),
(271, 2, 'SAMLI', 247776),
(272, 5, 'vasant nagar', 560052),
(273, 4, 'BHILWARA', 311001),
(274, 1, 'bandra east', 400051),
(275, 1, 'Badlapur', 421503),
(276, 1, 'mulund(w)', 400080),
(277, 1, 'KOLHAPUR', 416012),
(278, 1, 'VIJAYA NAGAR SANGLI', 416414),
(279, 1, 'SANGLI', 416416),
(280, 1, 'kolhapur', 416230),
(281, 11, 'KUKATPALLY', 500072),
(282, 5, 'bommasandra', 560099),
(283, 17, 'TIRUPPUR', 641606),
(284, 5, 'MANGALORE', 575004),
(285, 3, 'gwalior', 474009),
(286, 15, 'Karad', 415110),
(287, 17, 'coimbatore', 641005),
(288, 5, 'CHIKKASANDRA', 560090),
(289, 14, 'udaipur', 313001),
(290, 14, 'jodhpur', 342011),
(291, 14, 'KOTA', 324001),
(292, 13, 'BELAPUR', 400614),
(293, 18, 'Avadi', 600025),
(294, 18, 'vvvvv', 600025),
(295, 18, 'Avadi', 600025),
(296, 19, 'Adhichapuram', 614717);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `co_notess`
--
ALTER TABLE `co_notess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_labtech`
--
ALTER TABLE `customer_labtech`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_noperday_history`
--
ALTER TABLE `customer_noperday_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_service_location`
--
ALTER TABLE `customer_service_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_type`
--
ALTER TABLE `customer_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_service_skill`
--
ALTER TABLE `employee_service_skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eng_notess`
--
ALTER TABLE `eng_notess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_cust_remark`
--
ALTER TABLE `history_cust_remark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_cust_solution`
--
ALTER TABLE `history_cust_solution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_review`
--
ALTER TABLE `history_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_tech`
--
ALTER TABLE `lab_tech`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_onhold`
--
ALTER TABLE `log_onhold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_onhold_stamping`
--
ALTER TABLE `log_onhold_stamping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_reassign_engg`
--
ALTER TABLE `log_reassign_engg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_service_payment_details`
--
ALTER TABLE `log_service_payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_stamping`
--
ALTER TABLE `log_stamping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petty_log`
--
ALTER TABLE `petty_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petty_spare`
--
ALTER TABLE `petty_spare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preventive_log`
--
ALTER TABLE `preventive_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preventive_maintenance_alerts`
--
ALTER TABLE `preventive_maintenance_alerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem_category`
--
ALTER TABLE `problem_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod_category`
--
ALTER TABLE `prod_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod_subcategory`
--
ALTER TABLE `prod_subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_order_details`
--
ALTER TABLE `purchase_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qc_masters`
--
ALTER TABLE `qc_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qc_parameters_details`
--
ALTER TABLE `qc_parameters_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote_review`
--
ALTER TABLE `quote_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote_review_spare_details`
--
ALTER TABLE `quote_review_spare_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_category`
--
ALTER TABLE `service_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_charge`
--
ALTER TABLE `service_charge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_location`
--
ALTER TABLE `service_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_request`
--
ALTER TABLE `service_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_request_details`
--
ALTER TABLE `service_request_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_status`
--
ALTER TABLE `service_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spares`
--
ALTER TABLE `spares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spares_effective_date_history`
--
ALTER TABLE `spares_effective_date_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spare_details`
--
ALTER TABLE `spare_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spare_minimum_level`
--
ALTER TABLE `spare_minimum_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spare_purchase_details`
--
ALTER TABLE `spare_purchase_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spare_to_engineers`
--
ALTER TABLE `spare_to_engineers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stamping_details`
--
ALTER TABLE `stamping_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_details`
--
ALTER TABLE `tax_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zone_pincodes`
--
ALTER TABLE `zone_pincodes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `co_notess`
--
ALTER TABLE `co_notess`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_labtech`
--
ALTER TABLE `customer_labtech`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `customer_noperday_history`
--
ALTER TABLE `customer_noperday_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_service_location`
--
ALTER TABLE `customer_service_location`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=465;

--
-- AUTO_INCREMENT for table `customer_type`
--
ALTER TABLE `customer_type`
  MODIFY `id` int(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `employee_service_skill`
--
ALTER TABLE `employee_service_skill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=388;

--
-- AUTO_INCREMENT for table `eng_notess`
--
ALTER TABLE `eng_notess`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `history_cust_remark`
--
ALTER TABLE `history_cust_remark`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `history_cust_solution`
--
ALTER TABLE `history_cust_solution`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `history_review`
--
ALTER TABLE `history_review`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lab_tech`
--
ALTER TABLE `lab_tech`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_onhold`
--
ALTER TABLE `log_onhold`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `log_onhold_stamping`
--
ALTER TABLE `log_onhold_stamping`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_reassign_engg`
--
ALTER TABLE `log_reassign_engg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `log_service_payment_details`
--
ALTER TABLE `log_service_payment_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_stamping`
--
ALTER TABLE `log_stamping`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `petty_log`
--
ALTER TABLE `petty_log`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `petty_spare`
--
ALTER TABLE `petty_spare`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `preventive_log`
--
ALTER TABLE `preventive_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `preventive_maintenance_alerts`
--
ALTER TABLE `preventive_maintenance_alerts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `problem_category`
--
ALTER TABLE `problem_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `prod_category`
--
ALTER TABLE `prod_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prod_subcategory`
--
ALTER TABLE `prod_subcategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchase_order_details`
--
ALTER TABLE `purchase_order_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `qc_masters`
--
ALTER TABLE `qc_masters`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `qc_parameters_details`
--
ALTER TABLE `qc_parameters_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `quote_review`
--
ALTER TABLE `quote_review`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `quote_review_spare_details`
--
ALTER TABLE `quote_review_spare_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service_charge`
--
ALTER TABLE `service_charge`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_location`
--
ALTER TABLE `service_location`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `service_request`
--
ALTER TABLE `service_request`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;

--
-- AUTO_INCREMENT for table `service_request_details`
--
ALTER TABLE `service_request_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT for table `service_status`
--
ALTER TABLE `service_status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spares`
--
ALTER TABLE `spares`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT for table `spares_effective_date_history`
--
ALTER TABLE `spares_effective_date_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `spare_details`
--
ALTER TABLE `spare_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=815;

--
-- AUTO_INCREMENT for table `spare_minimum_level`
--
ALTER TABLE `spare_minimum_level`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spare_purchase_details`
--
ALTER TABLE `spare_purchase_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `spare_to_engineers`
--
ALTER TABLE `spare_to_engineers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `stamping_details`
--
ALTER TABLE `stamping_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tax_details`
--
ALTER TABLE `tax_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `zone_pincodes`
--
ALTER TABLE `zone_pincodes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
