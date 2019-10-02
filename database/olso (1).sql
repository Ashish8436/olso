-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2019 at 12:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olso`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'admin@gmail.com', 'f6fdffe48c908deb0f4c3bd36c032e72');

-- --------------------------------------------------------

--
-- Table structure for table `advance_booking_months`
--

CREATE TABLE `advance_booking_months` (
  `advmonth_id` int(11) NOT NULL,
  `advmonth_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advance_booking_months`
--

INSERT INTO `advance_booking_months` (`advmonth_id`, `advmonth_name`) VALUES
(1, '3'),
(2, '1'),
(3, '2'),
(4, '3'),
(5, '4'),
(6, '5'),
(7, '6'),
(8, '7'),
(9, '8'),
(10, '9'),
(11, '10'),
(12, '11'),
(13, '12');

-- --------------------------------------------------------

--
-- Table structure for table `advance_booking_notice`
--

CREATE TABLE `advance_booking_notice` (
  `adv_id` int(11) NOT NULL,
  `adv_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advance_booking_notice`
--

INSERT INTO `advance_booking_notice` (`adv_id`, `adv_name`) VALUES
(1, 'At Least 1 Day'),
(2, 'At Least 2 Day'),
(3, 'At Least 3 Day'),
(4, 'At Least 4 Day'),
(5, 'At Least 5 Day'),
(6, 'At Least 6 Day'),
(7, 'At Least 7 Day'),
(8, 'Same Day(Custom hour');

-- --------------------------------------------------------

--
-- Table structure for table `available_for_delivery`
--

CREATE TABLE `available_for_delivery` (
  `available_id` int(11) NOT NULL,
  `available_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available_for_delivery`
--

INSERT INTO `available_for_delivery` (`available_id`, `available_name`) VALUES
(1, 'Yes, But not'),
(2, 'Yes, Free'),
(3, 'No, Item delivery is not available');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(70) NOT NULL,
  `bank_status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`bank_id`, `bank_name`, `bank_status`) VALUES
(1, 'Allahabad Bank', '1'),
(2, 'Andhra Bank', '1'),
(3, 'Axis Bank', '1'),
(4, 'Bank of Bahrain and Kuwait', '1'),
(5, 'Bank of Baroda - Corporate Banking', '1');

-- --------------------------------------------------------

--
-- Table structure for table `booking_request`
--

CREATE TABLE `booking_request` (
  `req_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `oauth_uid` varchar(50) NOT NULL,
  `vendor_id` varchar(50) NOT NULL,
  `start_date` varchar(20) DEFAULT NULL,
  `end_date` varchar(20) DEFAULT NULL,
  `pickup_date` varchar(30) DEFAULT NULL,
  `pick_up` varchar(10) DEFAULT NULL,
  `drop_off` varchar(10) DEFAULT NULL,
  `booking_name` varchar(20) NOT NULL,
  `total_day` varchar(10) DEFAULT NULL,
  `total_hours` varchar(5) DEFAULT NULL,
  `total_month` varchar(5) DEFAULT NULL,
  `total_item_price` varchar(10) DEFAULT NULL,
  `discount_price` varchar(10) DEFAULT NULL,
  `service_price` varchar(10) NOT NULL,
  `total_amount` varchar(10) NOT NULL,
  `user_comments` text NOT NULL,
  `request_date` datetime NOT NULL,
  `request_apply` enum('Accept','Cancel') DEFAULT NULL,
  `cancel_reason` text,
  `default_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_request`
--

INSERT INTO `booking_request` (`req_id`, `item_id`, `oauth_uid`, `vendor_id`, `start_date`, `end_date`, `pickup_date`, `pick_up`, `drop_off`, `booking_name`, `total_day`, `total_hours`, `total_month`, `total_item_price`, `discount_price`, `service_price`, `total_amount`, `user_comments`, `request_date`, `request_apply`, `cancel_reason`, `default_time`) VALUES
(5, 2, '914209268917373', '108002987946946240367', '28-08-2019', '30-08-2019', NULL, '2:00 PM', '12:30 PM', 'day', '2', NULL, NULL, '120', NULL, '30', '150', 'dnmsandnjasd', '2019-08-28 06:35:13', NULL, NULL, '1566997513'),
(6, 2, '914209268917373', '108002987946946240367', NULL, NULL, '29-08-2019', '11:00 AM', NULL, 'hourly', NULL, '2', NULL, '120', '24', '30', '126', 'Hourly Testing', '2019-08-28 10:09:18', NULL, NULL, '1567010358'),
(8, 3, '914209268917373', '108002987946946240367', NULL, NULL, NULL, NULL, NULL, 'monthly', NULL, NULL, '1', '2000', '100', '30', '1930', 'Monthly Testing', '2019-08-28 10:46:29', 'Accept', NULL, '1567012589'),
(9, 2, '108002987946946240367', '108002987946946240367', '31-08-2019', '11-09-2019', NULL, '11:30 AM', '10:00 AM', 'day', '7', NULL, NULL, '420', '4.2', '30', '446', 'ghfghfhgf ghfghfgh', '2019-08-30 03:07:14', 'Accept', NULL, '1567157834'),
(10, 3, '108002987946946240367', '108002987946946240367', NULL, NULL, NULL, NULL, NULL, 'monthly', NULL, NULL, '2', '6000', '600', '30', '5430', 'sdvsdvdsvsd', '2019-09-07 12:28:40', 'Accept', NULL, '1567839520');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `oauth_uid` varchar(50) NOT NULL,
  `item_id` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date DEFAULT NULL,
  `open_from` varchar(20) DEFAULT NULL,
  `open_to` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `oauth_uid`, `item_id`, `start`, `end`, `open_from`, `open_to`) VALUES
(1, 'Deactive', '108002987946946240367', 1, '2019-08-19', '2019-08-20', NULL, NULL),
(2, 'Deactive', '108002987946946240367', 1, '2019-08-20', '2019-08-21', NULL, NULL),
(3, 'Deactive', '108002987946946240367', 1, '2019-08-21', '2019-08-22', NULL, NULL),
(4, 'Deactive', '108002987946946240367', 1, '2019-08-22', '2019-08-23', NULL, NULL),
(5, 'Deactive', '108002987946946240367', 1, '2019-08-23', '2019-08-24', NULL, NULL),
(7, 'Deactive', '108002987946946240367', 2, '2019-08-22', '2019-08-23', NULL, NULL),
(8, 'Deactive', '108002987946946240367', 2, '2019-08-23', '2019-08-24', NULL, NULL),
(10, 'Active 20:28 pm', '108002987946946240367', 2, '2019-08-25', '2019-08-26', '20:28 pm', '08:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_status`) VALUES
(1, 'Baby& Kids', '1'),
(2, 'Medical', '1'),
(3, 'Appliances', '1'),
(4, 'Books', '1'),
(5, 'Apparel', '1'),
(6, 'Tools & Equipments', '1'),
(7, 'Furniture', '1'),
(8, 'Bike', '1'),
(9, 'Car & Transport Vehicles', '1'),
(10, 'Sports & Fitness & Games', '1'),
(11, 'Musical Instruments', '1'),
(12, 'Electronics', '1'),
(13, 'Storage & Parking', '1'),
(14, 'Stalls other Party Equipment', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `city_status` enum('1','0') NOT NULL DEFAULT '1',
  `ex` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `state_id`, `city_name`, `city_status`, `ex`) VALUES
(1, 1, 'Alipur', '1', '101'),
(2, 1, 'Andaman Island', '1', '102'),
(3, 1, 'Anderson Island', '1', '103'),
(4, 1, 'Arainj-Laka-Punga', '1', '104'),
(5, 1, 'Austinabad', '1', '105'),
(6, 1, 'Bamboo Flat', '1', '106'),
(7, 1, 'Barren Island', '1', '107'),
(8, 1, 'Beadonabad', '1', '108'),
(9, 1, 'Betapur', '1', '109'),
(10, 1, 'Bindraban', '1', '110'),
(11, 1, 'Bonington', '1', '111'),
(12, 1, 'Brookesabad', '1', '112'),
(13, 1, 'Cadell Point', '1', '113'),
(14, 1, 'Calicut', '1', '114'),
(15, 1, 'Chetamale', '1', '115'),
(16, 1, 'Cinque Islands', '1', '116'),
(17, 1, 'Defence Island', '1', '117'),
(18, 1, 'Digilpur', '1', '118'),
(19, 1, 'Dolyganj', '1', '119'),
(20, 1, 'Flat Island', '1', '120'),
(21, 1, 'Geinyale', '1', '121'),
(22, 1, 'Great Coco Island', '1', '122'),
(23, 1, 'Haddo', '1', '123'),
(24, 1, 'Havelock Island', '1', '124'),
(25, 1, 'Henry Lawrence Island', '1', '125'),
(26, 1, 'Herbertabad', '1', '126'),
(27, 1, 'Hobdaypur', '1', '127'),
(28, 1, 'Ilichar', '1', '128'),
(29, 1, 'Ingoie', '1', '128'),
(30, 1, 'Inteview Island', '1', '130'),
(31, 1, 'Jangli Ghat', '1', '131'),
(32, 1, 'Jhon Lawrence Island', '1', '132'),
(33, 1, 'Karen', '1', '133'),
(34, 1, 'Kartara', '1', '134'),
(35, 1, 'KYD Islannd', '1', '135'),
(36, 1, 'Landfall Island', '1', '136'),
(37, 1, 'Little Andmand', '1', '137'),
(38, 1, 'Little Coco Island', '1', '138'),
(39, 1, 'Long Island', '1', '138'),
(40, 1, 'Maimyo', '1', '140'),
(41, 1, 'Malappuram', '1', '141'),
(42, 1, 'Manglutan', '1', '142'),
(43, 1, 'Manpur', '1', '143'),
(44, 1, 'Mitha Khari', '1', '144'),
(45, 1, 'Neill Island', '1', '145'),
(46, 1, 'Nicobar Island', '1', '146'),
(47, 1, 'North Brother Island', '1', '147'),
(48, 1, 'North Passage Island', '1', '148'),
(49, 1, 'North Sentinel Island', '1', '149'),
(50, 1, 'Nothen Reef Island', '1', '150'),
(51, 1, 'Outram Island', '1', '151'),
(52, 1, 'Pahlagaon', '1', '152'),
(53, 1, 'Palalankwe', '1', '153'),
(54, 1, 'Passage Island', '1', '154'),
(55, 1, 'Phaiapong', '1', '155'),
(56, 1, 'Phoenix Island', '1', '156'),
(57, 1, 'Port Blair', '1', '157'),
(58, 1, 'Preparis Island', '1', '158'),
(59, 1, 'Protheroepur', '1', '159'),
(60, 1, 'Rangachang', '1', '160'),
(61, 1, 'Rongat', '1', '161'),
(62, 1, 'Rutland Island', '1', '162'),
(63, 1, 'Sabari', '1', '163'),
(64, 1, 'Saddle Peak', '1', '164'),
(65, 1, 'Shadipur', '1', '165'),
(66, 1, 'Smith Island', '1', '166'),
(67, 1, 'Sound Island', '1', '167'),
(68, 1, 'South Sentinel Island', '1', '168'),
(69, 1, 'Spike Island', '1', '169'),
(70, 1, 'Tarmugli Island', '1', '170'),
(71, 1, 'Taylerabad', '1', '171'),
(72, 1, 'Titaije', '1', '172'),
(73, 1, 'Toibalawe', '1', '173'),
(74, 1, 'Tusonabad', '1', '174'),
(75, 1, 'West Island', '1', '175'),
(76, 1, 'Wimberleyganj', '1', '176'),
(77, 1, 'Yadita', '1', '177'),
(78, 2, 'Adilabad', '1', '201'),
(79, 2, 'Anantapur', '1', '201'),
(80, 2, 'Chittoor', '1', '203'),
(81, 2, 'Cuddapah', '1', '204'),
(82, 2, 'East Godavari', '1', '205'),
(83, 2, 'Guntur', '1', '206'),
(84, 2, 'Hyderabad', '1', '207'),
(85, 2, 'Karimnagar', '1', '208'),
(86, 2, 'Khammam', '1', '209'),
(87, 2, 'Krishna', '1', '210'),
(88, 2, 'Kurnool', '1', '211'),
(89, 2, 'Mahabubnagar', '1', '212'),
(90, 2, 'Medak', '1', '213'),
(91, 2, 'Nalgonda', '1', '214'),
(92, 2, 'Nellore', '1', '215'),
(93, 2, 'Nizamabad', '1', '216'),
(94, 2, 'Prakasam', '1', '217'),
(95, 2, 'Rangareddy', '1', '218'),
(96, 2, 'Srikakulam', '1', '219'),
(97, 2, 'Visakhapatnam', '1', '220'),
(98, 2, 'Vizianagaram', '1', '221'),
(99, 2, 'Warangal', '1', '222'),
(100, 2, 'West Godavari', '1', '223'),
(101, 2, 'Adilabad', '1', '201'),
(102, 2, 'Anantapur', '1', '201'),
(103, 2, 'Chittoor', '1', '203'),
(104, 2, 'Cuddapah', '1', '204'),
(105, 2, 'East Godavari', '1', '205'),
(106, 2, 'Guntur', '1', '206'),
(107, 2, 'Hyderabad', '1', '207'),
(108, 2, 'Karimnagar', '1', '208'),
(109, 2, 'Khammam', '1', '209'),
(110, 2, 'Krishna', '1', '210'),
(111, 2, 'Kurnool', '1', '211'),
(112, 2, 'Mahabubnagar', '1', '212'),
(113, 2, 'Medak', '1', '213'),
(114, 2, 'Nalgonda', '1', '214'),
(115, 2, 'Nellore', '1', '215'),
(116, 2, 'Nizamabad', '1', '216'),
(117, 2, 'Prakasam', '1', '217'),
(118, 2, 'Rangareddy', '1', '218'),
(119, 2, 'Srikakulam', '1', '219'),
(120, 2, 'Visakhapatnam', '1', '220'),
(121, 2, 'Vizianagaram', '1', '221'),
(122, 2, 'Warangal', '1', '222'),
(123, 2, 'West Godavari', '1', '223'),
(124, 3, 'Anjaw', '1', '301'),
(125, 3, 'Changlang', '1', '302'),
(126, 3, 'Dibang Valley', '1', '303'),
(127, 3, 'East Kameng', '1', '304'),
(128, 3, 'East Siang', '1', '305'),
(129, 3, 'Itanagar', '1', '306'),
(130, 3, 'Kurung Kumey', '1', '307'),
(131, 3, 'Lohit', '1', '308'),
(132, 3, 'Lower Dibang Valley', '1', '309'),
(133, 3, 'Lower Subansiri', '1', '310'),
(134, 3, 'Papum Pare', '1', '311'),
(135, 3, 'Tawang', '1', '312'),
(136, 3, 'Tirap', '1', '313'),
(137, 3, 'Upper Siang', '1', '314'),
(138, 3, 'Upper Subansiri', '1', '315'),
(139, 3, 'West Kameng', '1', '316'),
(140, 3, 'West Siang', '1', '317'),
(141, 4, 'Barpeta', '1', '401'),
(142, 4, 'Bongaigaon', '1', '402'),
(143, 4, 'Cachar', '1', '403'),
(144, 4, 'Darrang', '1', '404'),
(145, 4, 'Dhemaji', '1', '405'),
(146, 4, 'Dhubri', '1', '406'),
(147, 4, 'Dibrugarh', '1', '407'),
(148, 4, 'Goalpara', '1', '408'),
(149, 4, 'Golaghat', '1', '409'),
(150, 4, 'Guwahati', '1', '410'),
(151, 4, 'Hailakandi', '1', '411'),
(152, 4, 'Jorhat', '1', '412'),
(153, 4, 'Kamrup', '1', '413'),
(154, 4, 'Karbi Anglong', '1', '414'),
(155, 4, 'Karimganj', '1', '415'),
(156, 4, 'Kokrajhar', '1', '416'),
(157, 4, 'Lakhimpur', '1', '417'),
(158, 4, 'Marigaon', '1', '418'),
(159, 4, 'Nagaon', '1', '419'),
(160, 4, 'Nalbari', '1', '420'),
(161, 4, 'North Cachar Hills', '1', '421'),
(162, 4, 'Silchar', '1', '422'),
(163, 4, 'Sivasagar', '1', '423'),
(164, 4, 'Sonitpur', '1', '424'),
(165, 4, 'Tinsukia', '1', '425'),
(166, 4, 'Udalguri', '1', '426'),
(167, 5, 'Araria', '1', '501'),
(168, 5, 'Aurangabad', '1', '502'),
(169, 5, 'Banka', '1', '503'),
(170, 5, 'Begusarai', '1', '504'),
(171, 5, 'Bhagalpur', '1', '505'),
(172, 5, 'Bhojpur', '1', '506'),
(173, 5, 'Buxar', '1', '507'),
(174, 5, 'Darbhanga', '1', '508'),
(175, 5, 'East Champaran', '1', '509'),
(176, 5, 'Gaya', '1', '510'),
(177, 5, 'Gopalganj', '1', '511'),
(178, 5, 'Jamshedpur', '1', '512'),
(179, 5, 'Jamui', '1', '513'),
(180, 5, 'Jehanabad', '1', '514'),
(181, 5, 'Kaimur (Bhabua)', '1', '515'),
(182, 5, 'Katihar', '1', '516'),
(183, 5, 'Khagaria', '1', '517'),
(184, 5, 'Kishanganj', '1', '518'),
(185, 5, 'Lakhisarai', '1', '519'),
(186, 5, 'Madhepura', '1', '520'),
(187, 5, 'Madhubani', '1', '521'),
(188, 5, 'Munger', '1', '522'),
(189, 5, 'Muzaffarpur', '1', '523'),
(190, 5, 'Nalanda', '1', '524'),
(191, 5, 'Nawada', '1', '525'),
(192, 5, 'Patna', '1', '526'),
(193, 5, 'Purnia', '1', '527'),
(194, 5, 'Rohtas', '1', '528'),
(195, 5, 'Saharsa', '1', '529'),
(196, 5, 'Samastipur', '1', '530'),
(197, 5, 'Saran', '1', '531'),
(198, 5, 'Sheikhpura', '1', '532'),
(199, 5, 'Sheohar', '1', '533'),
(200, 5, 'Sitamarhi', '1', '534'),
(201, 5, 'Siwan', '1', '535'),
(202, 5, 'Supaul', '1', '536'),
(203, 5, 'Vaishali', '1', '537'),
(204, 5, 'West Champaran', '1', '538'),
(205, 6, 'Chandigarh', '1', '601'),
(206, 6, 'Mani Marja', '1', '602'),
(207, 7, 'Bastar', '1', '701'),
(208, 7, 'Bhilai', '1', '702'),
(209, 7, 'Bijapur', '1', '703'),
(210, 7, 'Bilaspur', '1', '704'),
(211, 7, 'Dhamtari', '1', '705'),
(212, 7, 'Durg', '1', '706'),
(213, 7, 'Janjgir-Champa', '1', '707'),
(214, 7, 'Jashpur', '1', '708'),
(215, 7, 'Kabirdham-Kawardha', '1', '709'),
(216, 7, 'Korba', '1', '710'),
(217, 7, 'Korea', '1', '711'),
(218, 7, 'Mahasamund', '1', '712'),
(219, 7, 'Narayanpur', '1', '713'),
(220, 7, 'Norh Bastar-Kanker', '1', '714'),
(221, 7, 'Raigarh', '1', '715'),
(222, 7, 'Raipur', '1', '716'),
(223, 7, 'Rajnandgaon', '1', '717'),
(224, 7, 'South Bastar-Dantewada', '1', '718'),
(225, 7, 'Surguja', '1', '719'),
(226, 8, 'Amal', '1', '801'),
(227, 8, 'Amli', '1', '802'),
(228, 8, 'Bedpa', '1', '803'),
(229, 8, 'Chikhli', '1', '804'),
(230, 8, 'Dadra & Nagar Haveli', '1', '805'),
(231, 8, 'Dahikhed', '1', '806'),
(232, 8, 'Dolara', '1', '807'),
(233, 8, 'Galonda', '1', '808'),
(234, 8, 'Kanadi', '1', '809'),
(235, 8, 'Karchond', '1', '810'),
(236, 8, 'Khadoli', '1', '811'),
(237, 8, 'Kharadpada', '1', '812'),
(238, 8, 'Kherabari', '1', '813'),
(239, 8, 'Kherdi', '1', '814'),
(240, 8, 'Kothar', '1', '815'),
(241, 8, 'Luari', '1', '816'),
(242, 8, 'Mashat', '1', '817'),
(243, 8, 'Rakholi', '1', '818'),
(244, 8, 'Rudana', '1', '819'),
(245, 8, 'Saili', '1', '820'),
(246, 8, 'Sili', '1', '821'),
(247, 8, 'Silvassa', '1', '822'),
(248, 8, 'Sindavni', '1', '823'),
(249, 8, 'Udva', '1', '824'),
(250, 8, 'Umbarkoi', '1', '825'),
(251, 8, 'Vansda', '1', '826'),
(252, 8, 'Vasona', '1', '827'),
(253, 8, 'Velugam', '1', '828'),
(254, 9, 'Brancavare', '1', '901'),
(255, 9, 'Dagasi', '1', '902'),
(256, 9, 'Daman', '1', '903'),
(257, 9, 'Diu', '1', '904'),
(258, 9, 'Magarvara', '1', '905'),
(259, 9, 'Nagwa', '1', '906'),
(260, 9, 'Pariali', '1', '907'),
(261, 9, 'Passo Covo', '1', '908'),
(262, 10, 'Central Delhi', '1', '1001'),
(263, 10, 'East Delhi', '1', '1002'),
(264, 10, 'New Delhi', '1', '1003'),
(265, 10, 'North Delhi', '1', '1004'),
(266, 10, 'North East Delhi', '1', '1005'),
(267, 10, 'North West Delhi', '1', '1006'),
(268, 10, 'Old Delhi', '1', '1007'),
(269, 10, 'South Delhi', '1', '1008'),
(270, 10, 'South West Delhi', '1', '1009'),
(271, 10, 'West Delhi', '1', '1010'),
(272, 11, 'Canacona', '1', '1101'),
(273, 11, 'Candolim', '1', '1102'),
(274, 11, 'Chinchinim', '1', '1103'),
(275, 11, 'Cortalim', '1', '1104'),
(276, 11, 'Goa', '1', '1105'),
(277, 11, 'Jua', '1', '1106'),
(278, 11, 'Madgaon', '1', '1107'),
(279, 11, 'Mahem', '1', '1108'),
(280, 11, 'Mapuca', '1', '1109'),
(281, 11, 'Marmagao', '1', '1110'),
(282, 11, 'Panji', '1', '1111'),
(283, 11, 'Ponda', '1', '1112'),
(284, 11, 'Sanvordem', '1', '1113'),
(285, 11, 'Terekhol', '1', '1114'),
(286, 12, 'Ahmedabad', '1', '1201'),
(287, 12, 'Amreli', '1', '1202'),
(288, 12, 'Anand', '1', '1203'),
(289, 12, 'Banaskantha', '1', '1204'),
(290, 12, 'Baroda', '1', '1205'),
(291, 12, 'Bharuch', '1', '1206'),
(292, 12, 'Bhavnagar', '1', '1207'),
(293, 12, 'Dahod', '1', '1208'),
(294, 12, 'Dang', '1', '1209'),
(295, 12, 'Dwarka', '1', '1210'),
(296, 12, 'Gandhinagar', '1', '1211'),
(297, 12, 'Jamnagar', '1', '1212'),
(298, 12, 'Junagadh', '1', '1213'),
(299, 12, 'Kheda', '1', '1214'),
(300, 12, 'Kutch', '1', '1215'),
(301, 12, 'Mehsana', '1', '1216'),
(302, 12, 'Nadiad', '1', '1217'),
(303, 12, 'Narmada', '1', '1218'),
(304, 12, 'Navsari', '1', '1219'),
(305, 12, 'Panchmahals', '1', '1220'),
(306, 12, 'Patan', '1', '1221'),
(307, 12, 'Porbandar', '1', '1222'),
(308, 12, 'Rajkot', '1', '1223'),
(309, 12, 'Sabarkantha', '1', '1224'),
(310, 12, 'Surat', '1', '1225'),
(311, 12, 'Surendranagar', '1', '1226'),
(312, 12, 'Vadodara', '1', '1227'),
(313, 12, 'Valsad', '1', '1228'),
(314, 12, 'Vapi', '1', '1229'),
(315, 13, 'Ambala', '1', '1301'),
(316, 13, 'Bhiwani', '1', '1302'),
(317, 13, 'Faridabad', '1', '1303'),
(318, 13, 'Fatehabad', '1', '1304'),
(319, 13, 'Gurgaon', '1', '1305'),
(320, 13, 'Hisar', '1', '1306'),
(321, 13, 'Jhajjar', '1', '1307'),
(322, 13, 'Jind', '1', '1308'),
(323, 13, 'Kaithal', '1', '1309'),
(324, 13, 'Karnal', '1', '1310'),
(325, 13, 'Kurukshetra', '1', '1311'),
(326, 13, 'Mahendragarh', '1', '1312'),
(327, 13, 'Mewat', '1', '1313'),
(328, 13, 'Panchkula', '1', '1314'),
(329, 13, 'Panipat', '1', '1315'),
(330, 13, 'Rewari', '1', '1316'),
(331, 13, 'Rohtak', '1', '1317'),
(332, 13, 'Sirsa', '1', '1318'),
(333, 13, 'Sonipat', '1', '1319'),
(334, 13, 'Yamunanagar', '1', '1320'),
(335, 14, 'Bilaspur', '1', '1401'),
(336, 14, 'Chamba', '1', '1402'),
(337, 14, 'Dalhousie', '1', '1403'),
(338, 14, 'Hamirpur', '1', '1404'),
(339, 14, 'Kangra', '1', '1405'),
(340, 14, 'Kinnaur', '1', '1406'),
(341, 14, 'Kullu', '1', '1407'),
(342, 14, 'Lahaul & Spiti', '1', '1408'),
(343, 14, 'Mandi', '1', '1409'),
(344, 14, 'Shimla', '1', '1410'),
(345, 14, 'Sirmaur', '1', '1411'),
(346, 14, 'Solan', '1', '1412'),
(347, 14, 'Una', '1', '1413'),
(348, 15, 'Anantnag', '1', '1501'),
(349, 15, 'Baramulla', '1', '1502'),
(350, 15, 'Budgam', '1', '1503'),
(351, 15, 'Doda', '1', '1504'),
(352, 15, 'Jammu', '1', '1505'),
(353, 15, 'Kargil', '1', '1506'),
(354, 15, 'Kathua', '1', '1507'),
(355, 15, 'Kupwara', '1', '1508'),
(356, 15, 'Leh', '1', '1509'),
(357, 15, 'Poonch', '1', '1510'),
(358, 15, 'Pulwama', '1', '1511'),
(359, 15, 'Rajauri', '1', '1512'),
(360, 15, 'Srinagar', '1', '1513'),
(361, 15, 'Udhampur', '1', '1514'),
(362, 16, 'Bokaro', '1', '1601'),
(363, 16, 'Chatra', '1', '1602'),
(364, 16, 'Deoghar', '1', '1603'),
(365, 16, 'Dhanbad', '1', '1604'),
(366, 16, 'Dumka', '1', '1605'),
(367, 16, 'East Singhbhum', '1', '1606'),
(368, 16, 'Garhwa', '1', '1607'),
(369, 16, 'Giridih', '1', '1608'),
(370, 16, 'Godda', '1', '1609'),
(371, 16, 'Gumla', '1', '1610'),
(372, 16, 'Hazaribag', '1', '1611'),
(373, 16, 'Jamtara', '1', '1612'),
(374, 16, 'Koderma', '1', '1613'),
(375, 16, 'Latehar', '1', '1614'),
(376, 16, 'Lohardaga', '1', '1615'),
(377, 16, 'Pakur', '1', '1616'),
(378, 16, 'Palamu', '1', '1617'),
(379, 16, 'Ranchi', '1', '1618'),
(380, 16, 'Sahibganj', '1', '1619'),
(381, 16, 'Seraikela', '1', '1620'),
(382, 16, 'Simdega', '1', '1621'),
(383, 16, 'West Singhbhum', '1', '1622'),
(384, 17, 'Bagalkot', '1', '1701'),
(385, 17, 'Bangalore', '1', '1702'),
(386, 17, 'Bangalore Rural', '1', '1703'),
(387, 17, 'Belgaum', '1', '1704'),
(388, 17, 'Bellary', '1', '1705'),
(389, 17, 'Bhatkal', '1', '1706'),
(390, 17, 'Bidar', '1', '1707'),
(391, 17, 'Bijapur', '1', '1708'),
(392, 17, 'Chamrajnagar', '1', '1709'),
(393, 17, 'Chickmagalur', '1', '1710'),
(394, 17, 'Chikballapur', '1', '1711'),
(395, 17, 'Chitradurga', '1', '1712'),
(396, 17, 'Dakshina Kannada', '1', '1713'),
(397, 17, 'Davanagere', '1', '1714'),
(398, 17, 'Dharwad', '1', '1715'),
(399, 17, 'Gadag', '1', '1716'),
(400, 17, 'Gulbarga', '1', '1717'),
(401, 17, 'Hampi', '1', '1718'),
(402, 17, 'Hassan', '1', '1719'),
(403, 17, 'Haveri', '1', '1720'),
(404, 17, 'Hospet', '1', '1721'),
(405, 17, 'Karwar', '1', '1722'),
(406, 17, 'Kodagu', '1', '1723'),
(407, 17, 'Kolar', '1', '1724'),
(408, 17, 'Koppal', '1', '1725'),
(409, 17, 'Madikeri', '1', '1726'),
(410, 17, 'Mandya', '1', '1727'),
(411, 17, 'Mangalore', '1', '1728'),
(412, 17, 'Manipal', '1', '1729'),
(413, 17, 'Mysore', '1', '1730'),
(414, 17, 'Raichur', '1', '1731'),
(415, 17, 'Shimoga', '1', '1732'),
(416, 17, 'Sirsi', '1', '1733'),
(417, 17, 'Sringeri', '1', '1734'),
(418, 17, 'Srirangapatna', '1', '1735'),
(419, 17, 'Tumkur', '1', '1736'),
(420, 17, 'Udupi', '1', '1737'),
(421, 17, 'Uttara Kannada', '1', '1738'),
(422, 18, 'Alappuzha', '1', '1801'),
(423, 18, 'Alleppey', '1', '1802'),
(424, 18, 'Alwaye', '1', '1803'),
(425, 18, 'Ernakulam', '1', '1804'),
(426, 18, 'Idukki', '1', '1805'),
(427, 18, 'Kannur', '1', '1806'),
(428, 18, 'Kasargod', '1', '1807'),
(429, 18, 'Kochi', '1', '1808'),
(430, 18, 'Kollam', '1', '1809'),
(431, 18, 'Kottayam', '1', '1810'),
(432, 18, 'Kovalam', '1', '1811'),
(433, 18, 'Kozhikode', '1', '1812'),
(434, 18, 'Malappuram', '1', '1813'),
(435, 18, 'Palakkad', '1', '1814'),
(436, 18, 'Pathanamthitta', '1', '1815'),
(437, 18, 'Perumbavoor', '1', '1816'),
(438, 18, 'Thiruvananthapuram', '1', '1817'),
(439, 18, 'Thrissur', '1', '1818'),
(440, 18, 'Trichur', '1', '1819'),
(441, 18, 'Trivandrum', '1', '1820'),
(442, 18, 'Wayanad', '1', '1821'),
(443, 19, 'Agatti Island', '1', '1901'),
(444, 19, 'Bingaram Island', '1', '1902'),
(445, 19, 'Bitra Island', '1', '1903'),
(446, 19, 'Chetlat Island', '1', '1904'),
(447, 19, 'Kadmat Island', '1', '1905'),
(448, 19, 'Kalpeni Island', '1', '1906'),
(449, 19, 'Kavaratti Island', '1', '1907'),
(450, 19, 'Kiltan Island', '1', '1908'),
(451, 19, 'Lakshadweep Sea', '1', '1909'),
(452, 19, 'Minicoy Island', '1', '1910'),
(453, 19, 'North Island', '1', '1911'),
(454, 19, 'South Island', '1', '1912'),
(455, 20, 'Anuppur', '1', '2001'),
(456, 20, 'Ashoknagar', '1', '2002'),
(457, 20, 'Balaghat', '1', '2003'),
(458, 20, 'Barwani', '1', '2004'),
(459, 20, 'Betul', '1', '2005'),
(460, 20, 'Bhind', '1', '2006'),
(461, 20, 'Bhopal', '1', '2007'),
(462, 20, 'Burhanpur', '1', '2008'),
(463, 20, 'Chhatarpur', '1', '2009'),
(464, 20, 'Chhindwara', '1', '2010'),
(465, 20, 'Damoh', '1', '2011'),
(466, 20, 'Datia', '1', '2012'),
(467, 20, 'Dewas', '1', '2013'),
(468, 20, 'Dhar', '1', '2014'),
(469, 20, 'Dindori', '1', '2015'),
(470, 20, 'Guna', '1', '2016'),
(471, 20, 'Gwalior', '1', '2017'),
(472, 20, 'Harda', '1', '2018'),
(473, 20, 'Hoshangabad', '1', '2019'),
(474, 20, 'Indore', '1', '2020'),
(475, 20, 'Jabalpur', '1', '2021'),
(476, 20, 'Jagdalpur', '1', '2022'),
(477, 20, 'Jhabua', '1', '2023'),
(478, 20, 'Katni', '1', '2024'),
(479, 20, 'Khandwa', '1', '2025'),
(480, 20, 'Khargone', '1', '2026'),
(481, 20, 'Mandla', '1', '2027'),
(482, 20, 'Mandsaur', '1', '2028'),
(483, 20, 'Morena', '1', '2029'),
(484, 20, 'Narsinghpur', '1', '2030'),
(485, 20, 'Neemuch', '1', '2031'),
(486, 20, 'Panna', '1', '2032'),
(487, 20, 'Raisen', '1', '2033'),
(488, 20, 'Rajgarh', '1', '2034'),
(489, 20, 'Ratlam', '1', '2035'),
(490, 20, 'Rewa', '1', '2036'),
(491, 20, 'Sagar', '1', '2037'),
(492, 20, 'Satna', '1', '2038'),
(493, 20, 'Sehore', '1', '2039'),
(494, 20, 'Seoni', '1', '2040'),
(495, 20, 'Shahdol', '1', '2041'),
(496, 20, 'Shajapur', '1', '2042'),
(497, 20, 'Sheopur', '1', '2043'),
(498, 20, 'Shivpuri', '1', '2044'),
(499, 20, 'Sidhi', '1', '2045'),
(500, 20, 'Tikamgarh', '1', '2046'),
(501, 20, 'Ujjain', '1', '2047'),
(502, 20, 'Umaria', '1', '2048'),
(503, 20, 'Vidisha', '1', '2049'),
(504, 21, 'Ahmednagar', '1', '2101'),
(505, 21, 'Akola', '1', '2102'),
(506, 21, 'Amravati', '1', '2103'),
(507, 21, 'Aurangabad', '1', '2104'),
(508, 21, 'Beed', '1', '2105'),
(509, 21, 'Bhandara', '1', '2106'),
(510, 21, 'Buldhana', '1', '2107'),
(511, 21, 'Chandrapur', '1', '2108'),
(512, 21, 'Dhule', '1', '2109'),
(513, 21, 'Gadchiroli', '1', '2110'),
(514, 21, 'Gondia', '1', '2111'),
(515, 21, 'Hingoli', '1', '2112'),
(516, 21, 'Jalgaon', '1', '2113'),
(517, 21, 'Jalna', '1', '2114'),
(518, 21, 'Kolhapur', '1', '2115'),
(519, 21, 'Latur', '1', '2116'),
(520, 21, 'Mahabaleshwar', '1', '2117'),
(521, 21, 'Mumbai', '1', '2118'),
(522, 21, 'Mumbai City', '1', '2119'),
(523, 21, 'Mumbai Suburban', '1', '2120'),
(524, 21, 'Nagpur', '1', '2121'),
(525, 21, 'Nanded', '1', '2122'),
(526, 21, 'Nandurbar', '1', '2123'),
(527, 21, 'Nashik', '1', '2124'),
(528, 21, 'Osmanabad', '1', '2125'),
(529, 21, 'Parbhani', '1', '2126'),
(530, 21, 'Pune', '1', '2127'),
(531, 21, 'Raigad', '1', '2128'),
(532, 21, 'Ratnagiri', '1', '2129'),
(533, 21, 'Sangli', '1', '2130'),
(534, 21, 'Satara', '1', '2131'),
(535, 21, 'Sholapur', '1', '2132'),
(536, 21, 'Sindhudurg', '1', '2133'),
(537, 21, 'Thane', '1', '2134'),
(538, 21, 'Wardha', '1', '2135'),
(539, 21, 'Washim', '1', '2136'),
(540, 21, 'Yavatmal', '1', '2137'),
(541, 22, 'Bishnupur', '1', '2201'),
(542, 22, 'Chandel', '1', '2202'),
(543, 22, 'Churachandpur', '1', '2203'),
(544, 22, 'Imphal East', '1', '2204'),
(545, 22, 'Imphal West', '1', '2205'),
(546, 22, 'Senapati', '1', '2206'),
(547, 22, 'Tamenglong', '1', '2207'),
(548, 22, 'Thoubal', '1', '2208'),
(549, 22, 'Ukhrul', '1', '2209'),
(550, 23, 'East Garo Hills', '1', '2301'),
(551, 23, 'East Khasi Hills', '1', '2302'),
(552, 23, 'Jaintia Hills', '1', '2303'),
(553, 23, 'Ri Bhoi', '1', '2304'),
(554, 23, 'Shillong', '1', '2305'),
(555, 23, 'South Garo Hills', '1', '2306'),
(556, 23, 'West Garo Hills', '1', '2307'),
(557, 23, 'West Khasi Hills', '1', '2308'),
(558, 24, 'Aizawl', '1', '2401'),
(559, 24, 'Champhai', '1', '2402'),
(560, 24, 'Kolasib', '1', '2403'),
(561, 24, 'Lawngtlai', '1', '2404'),
(562, 24, 'Lunglei', '1', '2405'),
(563, 24, 'Mamit', '1', '2406'),
(564, 24, 'Saiha', '1', '2407'),
(565, 24, 'Serchhip', '1', '2408'),
(566, 25, 'Dimapur', '1', '2501'),
(567, 25, 'Kohima', '1', '2502'),
(568, 25, 'Mokokchung', '1', '2503'),
(569, 25, 'Mon', '1', '2504'),
(570, 25, 'Phek', '1', '2505'),
(571, 25, 'Tuensang', '1', '2506'),
(572, 25, 'Wokha', '1', '2507'),
(573, 25, 'Zunheboto', '1', '2508'),
(574, 26, 'Angul', '1', '2601'),
(575, 26, 'Balangir', '1', '2602'),
(576, 26, 'Balasore', '1', '2603'),
(577, 26, 'Baleswar', '1', '2604'),
(578, 26, 'Bargarh', '1', '2605'),
(579, 26, 'Berhampur', '1', '2606'),
(580, 26, 'Bhadrak', '1', '2607'),
(581, 26, 'Bhubaneswar', '1', '2608'),
(582, 26, 'Boudh', '1', '2609'),
(583, 26, 'Cuttack', '1', '2610'),
(584, 26, 'Deogarh', '1', '2611'),
(585, 26, 'Dhenkanal', '1', '2612'),
(586, 26, 'Gajapati', '1', '2613'),
(587, 26, 'Ganjam', '1', '2614'),
(588, 26, 'Jagatsinghapur', '1', '2615'),
(589, 26, 'Jajpur', '1', '2616'),
(590, 26, 'Jharsuguda', '1', '2617'),
(591, 26, 'Kalahandi', '1', '2618'),
(592, 26, 'Kandhamal', '1', '2619'),
(593, 26, 'Kendrapara', '1', '2620'),
(594, 26, 'Kendujhar', '1', '2621'),
(595, 26, 'Khordha', '1', '2622'),
(596, 26, 'Koraput', '1', '2623'),
(597, 26, 'Malkangiri', '1', '2624'),
(598, 26, 'Mayurbhanj', '1', '2625'),
(599, 26, 'Nabarangapur', '1', '2626'),
(600, 26, 'Nayagarh', '1', '2627'),
(601, 26, 'Nuapada', '1', '2628'),
(602, 26, 'Puri', '1', '2629'),
(603, 26, 'Rayagada', '1', '2630'),
(604, 26, 'Rourkela', '1', '2631'),
(605, 26, 'Sambalpur', '1', '2632'),
(606, 26, 'Subarnapur', '1', '2633'),
(607, 26, 'Sundergarh', '1', '2634'),
(608, 27, 'Bahur', '1', '2701'),
(609, 27, 'Karaikal', '1', '2701'),
(610, 27, 'Mahe', '1', '2701'),
(611, 27, 'Pondicherry', '1', '2701'),
(612, 27, 'Purnankuppam', '1', '2701'),
(613, 27, 'Valudavur', '1', '2701'),
(614, 27, 'Villianur', '1', '2701'),
(615, 27, 'Yanam', '1', '2701'),
(616, 28, 'Amritsar', '1', '2801'),
(617, 28, 'Barnala', '1', '2801'),
(618, 28, 'Bathinda', '1', '2801'),
(619, 28, 'Faridkot', '1', '2801'),
(620, 28, 'Fatehgarh Sahib', '1', '2801'),
(621, 28, 'Ferozepur', '1', '2801'),
(622, 28, 'Gurdaspur', '1', '2801'),
(623, 28, 'Hoshiarpur', '1', '2801'),
(624, 28, 'Jalandhar', '1', '2801'),
(625, 28, 'Kapurthala', '1', '2801'),
(626, 28, 'Ludhiana', '1', '2801'),
(627, 28, 'Mansa', '1', '2801'),
(628, 28, 'Moga', '1', '2801'),
(629, 28, 'Muktsar', '1', '2801'),
(630, 28, 'Nawanshahr', '1', '2801'),
(631, 28, 'Pathankot', '1', '2801'),
(632, 28, 'Patiala', '1', '2801'),
(633, 28, 'Rupnagar', '1', '2801'),
(634, 28, 'Sangrur', '1', '2801'),
(635, 28, 'SAS Nagar', '1', '2801'),
(636, 28, 'Tarn Taran', '1', '2801'),
(637, 29, 'Ajmer', '1', '2901'),
(638, 29, 'Alwar', '1', '2902'),
(639, 29, 'Banswara', '1', '2903'),
(640, 29, 'Baran', '1', '2904'),
(641, 29, 'Barmer', '1', '2905'),
(642, 29, 'Bharatpur', '1', '2906'),
(643, 29, 'Bhilwara', '1', '2907'),
(644, 29, 'Bikaner', '1', '2908'),
(645, 29, 'Bundi', '1', '2909'),
(646, 29, 'Chittorgarh', '1', '2910'),
(647, 29, 'Churu', '1', '2911'),
(648, 29, 'Dausa', '1', '2912'),
(649, 29, 'Dholpur', '1', '2913'),
(650, 29, 'Dungarpur', '1', '2914'),
(651, 29, 'Hanumangarh', '1', '2915'),
(652, 29, 'Jaipur', '1', '2916'),
(653, 29, 'Jaisalmer', '1', '2917'),
(654, 29, 'Jalore', '1', '2918'),
(655, 29, 'Jhalawar', '1', '2919'),
(656, 29, 'Jhunjhunu', '1', '2920'),
(657, 29, 'Jodhpur', '1', '2921'),
(658, 29, 'Karauli', '1', '2922'),
(659, 29, 'Kota', '1', '2923'),
(660, 29, 'Nagaur', '1', '2924'),
(661, 29, 'Pali', '1', '2925'),
(662, 29, 'Pilani', '1', '2926'),
(663, 29, 'Rajsamand', '1', '2927'),
(664, 29, 'Sawai Madhopur', '1', '2928'),
(665, 29, 'Sikar', '1', '2929'),
(666, 29, 'Sirohi', '1', '2930'),
(667, 29, 'Sri Ganganagar', '1', '2931'),
(668, 29, 'Tonk', '1', '2932'),
(669, 29, 'Udaipur', '1', '2933'),
(670, 30, 'Barmiak', '1', '3001'),
(671, 30, 'Be', '1', '3002'),
(672, 30, 'Bhurtuk', '1', '3003'),
(673, 30, 'Chhubakha', '1', '3004'),
(674, 30, 'Chidam', '1', '3005'),
(675, 30, 'Chubha', '1', '3006'),
(676, 30, 'Chumikteng', '1', '3007'),
(677, 30, 'Dentam', '1', '3008'),
(678, 30, 'Dikchu', '1', '3009'),
(679, 30, 'Dzongri', '1', '3010'),
(680, 30, 'Gangtok', '1', '3011'),
(681, 30, 'Gauzing', '1', '3012'),
(682, 30, 'Gyalshing', '1', '3013'),
(683, 30, 'Hema', '1', '3014'),
(684, 30, 'Kerung', '1', '3015'),
(685, 30, 'Lachen', '1', '3016'),
(686, 30, 'Lachung', '1', '3017'),
(687, 30, 'Lema', '1', '3018'),
(688, 30, 'Lingtam', '1', '3019'),
(689, 30, 'Lungthu', '1', '3020'),
(690, 30, 'Mangan', '1', '3021'),
(691, 30, 'Namchi', '1', '3022'),
(692, 30, 'Namthang', '1', '3023'),
(693, 30, 'Nanga', '1', '3024'),
(694, 30, 'Nantang', '1', '3025'),
(695, 30, 'Naya Bazar', '1', '3026'),
(696, 30, 'Padamachen', '1', '3027'),
(697, 30, 'Pakhyong', '1', '3028'),
(698, 30, 'Pemayangtse', '1', '3029'),
(699, 30, 'Phensang', '1', '3030'),
(700, 30, 'Rangli', '1', '3031'),
(701, 30, 'Rinchingpong', '1', '3032'),
(702, 30, 'Sakyong', '1', '3033'),
(703, 30, 'Samdong', '1', '3034'),
(704, 30, 'Singtam', '1', '3035'),
(705, 30, 'Siniolchu', '1', '3035'),
(706, 30, 'Sombari', '1', '3036'),
(707, 30, 'Soreng', '1', '3037'),
(708, 30, 'Sosing', '1', '3038'),
(709, 30, 'Tekhug', '1', '3039'),
(710, 30, 'Temi', '1', '3040'),
(711, 30, 'Tsetang', '1', '3041'),
(712, 30, 'Tsomgo', '1', '3042'),
(713, 30, 'Tumlong', '1', '3043'),
(714, 30, 'Yangang', '1', '3044'),
(715, 30, 'Yumtang', '1', '3045'),
(716, 31, 'Chennai', '1', '3101'),
(717, 31, 'Chidambaram', '1', '3102'),
(718, 31, 'Chingleput', '1', '3103'),
(719, 31, 'Coimbatore', '1', '3104'),
(720, 31, 'Courtallam', '1', '3105'),
(721, 31, 'Cuddalore', '1', '3106'),
(722, 31, 'Dharmapuri', '1', '3107'),
(723, 31, 'Dindigul', '1', '3108'),
(724, 31, 'Erode', '1', '3109'),
(725, 31, 'Hosur', '1', '3110'),
(726, 31, 'Kanchipuram', '1', '3111'),
(727, 31, 'Kanyakumari', '1', '3112'),
(728, 31, 'Karaikudi', '1', '3113'),
(729, 31, 'Karur', '1', '3114'),
(730, 31, 'Kodaikanal', '1', '3115'),
(731, 31, 'Kovilpatti', '1', '3116'),
(732, 31, 'Krishnagiri', '1', '3117'),
(733, 31, 'Kumbakonam', '1', '3118'),
(734, 31, 'Madurai', '1', '3119'),
(735, 31, 'Mayiladuthurai', '1', '3120'),
(736, 31, 'Nagapattinam', '1', '3121'),
(737, 31, 'Nagarcoil', '1', '3122'),
(738, 31, 'Namakkal', '1', '3123'),
(739, 31, 'Neyveli', '1', '3124'),
(740, 31, 'Nilgiris', '1', '3125'),
(741, 31, 'Ooty', '1', '3126'),
(742, 31, 'Palani', '1', '3127'),
(743, 31, 'Perambalur', '1', '3128'),
(744, 31, 'Pollachi', '1', '3129'),
(745, 31, 'Pudukkottai', '1', '3130'),
(746, 31, 'Rajapalayam', '1', '3131'),
(747, 31, 'Ramanathapuram', '1', '3132'),
(748, 31, 'Salem', '1', '3133'),
(749, 31, 'Sivaganga', '1', '3134'),
(750, 31, 'Sivakasi', '1', '3135'),
(751, 31, 'Thanjavur', '1', '3136'),
(752, 31, 'Theni', '1', '3137'),
(753, 31, 'Thoothukudi', '1', '3138'),
(754, 31, 'Tiruchirappalli', '1', '3139'),
(755, 31, 'Tirunelveli', '1', '3140'),
(756, 31, 'Tirupur', '1', '3141'),
(757, 31, 'Tiruvallur', '1', '3142'),
(758, 31, 'Tiruvannamalai', '1', '3143'),
(759, 31, 'Tiruvarur', '1', '3144'),
(760, 31, 'Trichy', '1', '3145'),
(761, 31, 'Tuticorin', '1', '3146'),
(762, 31, 'Vellore', '1', '3147'),
(763, 31, 'Villupuram', '1', '3148'),
(764, 31, 'Virudhunagar', '1', '3149'),
(765, 31, 'Yercaud', '1', '3150'),
(766, 32, 'Agartala', '1', '3201'),
(767, 32, 'Ambasa', '1', '3202'),
(768, 32, 'Bampurbari', '1', '3203'),
(769, 32, 'Belonia', '1', '3204'),
(770, 32, 'Dhalai', '1', '3205'),
(771, 32, 'Dharam Nagar', '1', '3206'),
(772, 32, 'Kailashahar', '1', '3207'),
(773, 32, 'Kamal Krishnabari', '1', '3208'),
(774, 32, 'Khopaiyapara', '1', '3209'),
(775, 32, 'Khowai', '1', '3210'),
(776, 32, 'Phuldungsei', '1', '3211'),
(777, 32, 'Radha Kishore Pur', '1', '3212'),
(778, 32, 'Tripura', '1', '3213');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `iso` char(2) DEFAULT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) NOT NULL,
  `numcode` smallint(6) NOT NULL,
  `phonecode` int(5) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`, `status`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93, '1'),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355, '1'),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213, '1'),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684, '1'),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376, '1'),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244, '1'),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264, '1'),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', '', 0, 0, '1'),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268, '1'),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54, '1'),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374, '1'),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297, '1'),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61, '1'),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43, '1'),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994, '1'),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242, '1'),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973, '1'),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880, '1'),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246, '1'),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375, '1'),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32, '1'),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501, '1'),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229, '1'),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441, '1'),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975, '1'),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591, '1'),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387, '1'),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267, '1'),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', '', 0, 0, '1'),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55, '1'),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', '', 0, 246, '1'),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673, '1'),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359, '1'),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226, '1'),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257, '1'),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855, '1'),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237, '1'),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1, '1'),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238, '1'),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345, '1'),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236, '1'),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235, '1'),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56, '1'),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86, '1'),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', '', 0, 61, '1'),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', '', 0, 672, '1'),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57, '1'),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269, '1'),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242, '1'),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242, '1'),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682, '1'),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506, '1'),
(53, 'CI', 'COTE D''IVOIRE', 'Cote D''Ivoire', 'CIV', 384, 225, '1'),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385, '1'),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53, '1'),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357, '1'),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420, '1'),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45, '1'),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253, '1'),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767, '1'),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809, '1'),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593, '1'),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20, '1'),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503, '1'),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240, '1'),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291, '1'),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372, '1'),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251, '1'),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500, '1'),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298, '1'),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679, '1'),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358, '1'),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33, '1'),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594, '1'),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689, '1'),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', '', 0, 0, '1'),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241, '1'),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220, '1'),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995, '1'),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49, '1'),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233, '1'),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350, '1'),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30, '1'),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299, '1'),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473, '1'),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590, '1'),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671, '1'),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502, '1'),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224, '1'),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245, '1'),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592, '1'),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509, '1'),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', '', 0, 0, '1'),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39, '1'),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504, '1'),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852, '1'),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36, '1'),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354, '1'),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91, '1'),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62, '1'),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98, '1'),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964, '1'),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353, '1'),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972, '1'),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39, '1'),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876, '1'),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81, '1'),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962, '1'),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7, '1'),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254, '1'),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686, '1'),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE''S REPUBLIC OF', 'Korea, Democratic People''s Republic of', 'PRK', 408, 850, '1'),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82, '1'),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965, '1'),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996, '1'),
(116, 'LA', 'LAO PEOPLE''S DEMOCRATIC REPUBLIC', 'Lao People''s Democratic Republic', 'LAO', 418, 856, '1'),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371, '1'),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961, '1'),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266, '1'),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231, '1'),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218, '1'),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423, '1'),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370, '1'),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352, '1'),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853, '1'),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389, '1'),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261, '1'),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265, '1'),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60, '1'),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960, '1'),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223, '1'),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356, '1'),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692, '1'),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596, '1'),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222, '1'),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230, '1'),
(137, 'YT', 'MAYOTTE', 'Mayotte', '', 0, 269, '1'),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52, '1'),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691, '1'),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373, '1'),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377, '1'),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976, '1'),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664, '1'),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212, '1'),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258, '1'),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95, '1'),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264, '1'),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674, '1'),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977, '1'),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31, '1'),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599, '1'),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687, '1'),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64, '1'),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505, '1'),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227, '1'),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234, '1'),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683, '1'),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672, '1'),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670, '1'),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47, '1'),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968, '1'),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92, '1'),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680, '1'),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', '', 0, 970, '1'),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507, '1'),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675, '1'),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595, '1'),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51, '1'),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63, '1'),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0, '1'),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48, '1'),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351, '1'),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787, '1'),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974, '1'),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262, '1'),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40, '1'),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70, '1'),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250, '1'),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290, '1'),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869, '1'),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758, '1'),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508, '1'),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784, '1'),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684, '1'),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378, '1'),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239, '1'),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966, '1'),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221, '1'),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', '', 0, 381, '1'),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248, '1'),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232, '1'),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65, '1'),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421, '1'),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386, '1'),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677, '1'),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252, '1'),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27, '1'),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', '', 0, 0, '1'),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34, '1'),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94, '1'),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249, '1'),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597, '1'),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47, '1'),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268, '1'),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46, '1'),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41, '1'),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963, '1'),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886, '1'),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992, '1'),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255, '1'),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66, '1'),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', '', 0, 670, '1'),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228, '1'),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690, '1'),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676, '1'),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868, '1'),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216, '1'),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90, '1'),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370, '1'),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649, '1'),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688, '1'),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256, '1'),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380, '1'),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971, '1'),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44, '1'),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1, '1'),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', '', 0, 1, '1'),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598, '1'),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998, '1'),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678, '1'),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58, '1'),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84, '1'),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284, '1'),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340, '1'),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681, '1'),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212, '1'),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967, '1'),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260, '1'),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263, '1');

-- --------------------------------------------------------

--
-- Table structure for table `create_item`
--

CREATE TABLE `create_item` (
  `item_id` int(11) NOT NULL,
  `oauth_uid` varchar(50) NOT NULL,
  `random_itemno` varchar(20) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_image1` varchar(200) DEFAULT NULL,
  `item_image2` varchar(200) DEFAULT NULL,
  `item_image3` varchar(200) DEFAULT NULL,
  `item_image4` varchar(200) DEFAULT NULL,
  `item_image5` varchar(200) DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `subtype_id` int(11) NOT NULL,
  `item_tags` text NOT NULL,
  `item_description` varchar(500) NOT NULL,
  `item_specification` text NOT NULL,
  `item_qty` int(10) NOT NULL,
  `item_oper_available` int(11) NOT NULL,
  `item_delivery` int(11) NOT NULL,
  `item_current_price` varchar(10) NOT NULL,
  `item_plans` varchar(7) NOT NULL,
  `gov_issued_ids` varchar(100) NOT NULL,
  `recom_byother_lender` enum('1','0') NOT NULL,
  `rules_of_renting` text NOT NULL,
  `item_offer` enum('1','0') NOT NULL,
  `item_create_date` datetime NOT NULL,
  `item_status` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_item`
--

INSERT INTO `create_item` (`item_id`, `oauth_uid`, `random_itemno`, `item_name`, `item_image1`, `item_image2`, `item_image3`, `item_image4`, `item_image5`, `cat_id`, `subcat_id`, `subtype_id`, `item_tags`, `item_description`, `item_specification`, `item_qty`, `item_oper_available`, `item_delivery`, `item_current_price`, `item_plans`, `gov_issued_ids`, `recom_byother_lender`, `rules_of_renting`, `item_offer`, `item_create_date`, `item_status`) VALUES
(1, '108002987946946240367', '1687856', 'PRINTELLIGENT Harley Davidson2', 'uploads/items/american-choppers-8a.jpg', 'uploads/items/harley-davidson-38v.jpg', 'uploads/items/bmw_k_1200_s-1920x1200.jpg', '', '', 8, 100, 939, 'bike,harley,devidson,harly  devidson', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.\r\nTo make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you ', 'Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.\r\nSave time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.\r\nReading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.\r\n', 4, 1, 2, '1200000', '1', 'Driving Licence,Aadhar Card', '1', 'applicability$offer and agreement', '0', '2019-07-27 08:33:17', '1'),
(2, '108002987946946240367', '1688476', 'Wishkey Set of 8 Pcs with Various Exciting Toys for New Borns & Infants Rattle Rattle  (Multicolor)', 'uploads/items/toy_foot-u848378r5_(2).JPG', 'uploads/items/toy_foot-u848378r5_(3).JPG', 'uploads/items/toy_foot-u848378r5_(4).JPG', 'uploads/items/toy_foot-u848378r5_(5).JPG', 'uploads/items/toy_foot-u848378r5_(4)1.JPG', 1, 3, 13, 'baby,toys', 'Wishkey presents 8 Pcs Rattle Comes In Multicolor. It Makes A Pleasant And Rattling Sound On Shaking Which Really Excite The Young Ones. This Toy Aids The Child To Learn About Sound And He Or She Tries To Concentrate On The Type Of Sound Produced. Apart From Entertainment It Is Also A Learning Device Which Increases The Concentration Level Of The New Borns.', 'General\r\nMinimum Age\r\n6 Month\r\nCharacter\r\nNA\r\nMaterial\r\nPlastic', 10, 2, 3, '549', '1,3', 'Driving Licence', '1', 'offer and agreement$take care$menu', '0', '2019-07-24 07:38:15', '1'),
(3, '108002987946946240367', '2877685', 'Duplicate Toy Car', 'uploads/items/toy_foot-u848378r5_(2).JPG', 'uploads/items/toy_foot-u848378r5_(3).JPG', 'uploads/items/toy_foot-u848378r5_(4).JPG', 'uploads/items/toy_foot-u848378r5_(5).JPG', 'uploads/items/toy_foot-u848378r5_(4)1.JPG', 1, 3, 13, 'baby,toys', 'Wishkey presents 8 Pcs Rattle Comes In Multicolor. It Makes A Pleasant And Rattling Sound On Shaking Which Really Excite The Young Ones. This Toy Aids The Child To Learn About Sound And He Or She Tries To Concentrate On The Type Of Sound Produced. Apart From Entertainment It Is Also A Learning Device Which Increases The Concentration Level Of The New Borns.', 'General\r\nMinimum Age\r\n6 Month\r\nCharacter\r\nNA\r\nMaterial\r\nPlastic', 7, 2, 3, '549', '1,2', 'Driving Licence,Aadhar Card', '1', 'offer and agreement$take care$menu', '1', '2019-08-20 04:40:58', '1');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `currency_id` int(11) NOT NULL,
  `currency_name` varchar(5) NOT NULL,
  `currency_status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`currency_id`, `currency_name`, `currency_status`) VALUES
(1, 'INR', '1'),
(2, 'USD', '1'),
(3, 'SGD', '1'),
(4, 'GBP', '1'),
(5, 'EUR', '1');

-- --------------------------------------------------------

--
-- Table structure for table `hours`
--

CREATE TABLE `hours` (
  `hours_id` int(11) NOT NULL,
  `hours_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hours`
--

INSERT INTO `hours` (`hours_id`, `hours_name`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `id_verification`
--

CREATE TABLE `id_verification` (
  `verification_id` int(11) NOT NULL,
  `oauth_uid` varchar(50) NOT NULL,
  `driving_license1` varchar(200) DEFAULT NULL,
  `driving_license2` varchar(200) NOT NULL,
  `passport1` varchar(200) DEFAULT NULL,
  `passport2` varchar(200) DEFAULT NULL,
  `aadhar_card1` varchar(200) DEFAULT NULL,
  `aadhar_card2` varchar(200) DEFAULT NULL,
  `selfi` varchar(200) DEFAULT NULL,
  `verification_status` enum('1','0') NOT NULL DEFAULT '0',
  `upload_date` datetime DEFAULT NULL,
  `no_verify_reason` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `id_verification`
--

INSERT INTO `id_verification` (`verification_id`, `oauth_uid`, `driving_license1`, `driving_license2`, `passport1`, `passport2`, `aadhar_card1`, `aadhar_card2`, `selfi`, `verification_status`, `upload_date`, `no_verify_reason`) VALUES
(4, '108002987946946240367', 'uploads/document/IMG_20170317_1303207081.jpg', 'uploads/document/IMG-20181203-WA0001.jpg', NULL, NULL, NULL, NULL, 'uploads/document/5d2cbd9ee305d.png', '1', '2019-07-15 11:23:34', NULL),
(5, 'gh45j5jk64', 'uploads/document/8Vcu17L6.jpg', 'uploads/document/best-Success-Wallpaper4.jpg', NULL, NULL, NULL, NULL, 'uploads/document/5d33ed79150e3.png', '0', '2019-07-21 10:13:37', '');

-- --------------------------------------------------------

--
-- Table structure for table `instant_book`
--

CREATE TABLE `instant_book` (
  `instant_id` int(11) NOT NULL,
  `oauth_uid` varchar(50) NOT NULL,
  `instant_book` enum('1','0') NOT NULL,
  `instant_book_notice` varchar(40) DEFAULT NULL,
  `instant_book_time` varchar(50) DEFAULT NULL,
  `instant_book_mesg` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instant_book`
--

INSERT INTO `instant_book` (`instant_id`, `oauth_uid`, `instant_book`, `instant_book_notice`, `instant_book_time`, `instant_book_mesg`) VALUES
(7, '108002987946946240367', '0', '1', '12:59 PM', 'njn jsaknjakndj nsajkdnsnksankxnask ');

-- --------------------------------------------------------

--
-- Table structure for table `item_address`
--

CREATE TABLE `item_address` (
  `random_itemno` varchar(20) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `pincode` int(10) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_address`
--

INSERT INTO `item_address` (`random_itemno`, `country_id`, `state_id`, `city_id`, `pincode`, `address`) VALUES
('1687856', 99, 12, 310, 394221, 'P-104,Kalpana Appt, Daxeswar Nagar, Pandesara'),
('1688476', 99, 12, 310, 394221, 'P-104, Kalpana Appt, Daxweswar Nagr, Pandesara'),
('2877685', 99, 12, 310, 394221, 'P-104, Kalpana Appt, Daxweswar Nagr, Pandesara');

-- --------------------------------------------------------

--
-- Table structure for table `item_price`
--

CREATE TABLE `item_price` (
  `random_itemno` varchar(20) NOT NULL,
  `hr_price` varchar(10) NOT NULL,
  `day_price` varchar(10) NOT NULL,
  `monthly_price` varchar(10) NOT NULL,
  `hr_disc` varchar(15) NOT NULL,
  `no_hr` varchar(15) NOT NULL,
  `month_disc` varchar(40) NOT NULL,
  `no_month` varchar(40) NOT NULL,
  `week_disc` varchar(15) NOT NULL,
  `min_day_book` varchar(10) NOT NULL,
  `max_day_book` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_price`
--

INSERT INTO `item_price` (`random_itemno`, `hr_price`, `day_price`, `monthly_price`, `hr_disc`, `no_hr`, `month_disc`, `no_month`, `week_disc`, `min_day_book`, `max_day_book`) VALUES
('1687856', '300', '', '', '10,20', '2,4', '', '', '', '', ''),
('1688476', '60', '300', '', '20,30', '2,4', '', '', '10', '1', '3'),
('2877685', '200', '', '2000', '10', '2', '5,20,10', '1,3,2', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `lan_id` int(11) NOT NULL,
  `lan_name` varchar(25) NOT NULL,
  `lan_status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`lan_id`, `lan_name`, `lan_status`) VALUES
(1, 'Assamese', '1'),
(2, 'Bengali', '1'),
(3, 'Bodo', '1'),
(4, 'Dorgi', '1'),
(5, 'English', '1'),
(6, 'Gujarati', '1'),
(7, 'Hindi', '1'),
(8, 'Kannada', '1'),
(9, 'Kashmiri', '1'),
(10, 'Konkani', '1'),
(11, 'Maithili', '1'),
(12, 'Malayalam', '1'),
(13, 'Marathi', '1'),
(14, 'Odia', '1'),
(15, 'Telugu', '1'),
(16, 'Tamil', '1'),
(17, 'Punjabi', '1'),
(18, 'Urdu', '1');

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `month_id` int(11) NOT NULL,
  `month_name` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`month_id`, `month_name`) VALUES
(1, 1),
(2, 3),
(3, 6),
(4, 12),
(5, 24);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `offer_id` int(11) NOT NULL,
  `oauth_uid` varchar(100) NOT NULL,
  `offer_type` enum('Price','Discount') NOT NULL,
  `offer_dis_price` int(10) NOT NULL,
  `offer_valid` enum('All Items','Select Item') NOT NULL,
  `random_itemno` int(11) DEFAULT NULL,
  `offer_validity` enum('Forever','Date') NOT NULL,
  `offer_date` date DEFAULT NULL,
  `offer_code` varchar(50) NOT NULL,
  `offer_visibility` enum('1','0') NOT NULL DEFAULT '0',
  `offer_status` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offer_id`, `oauth_uid`, `offer_type`, `offer_dis_price`, `offer_valid`, `random_itemno`, `offer_validity`, `offer_date`, `offer_code`, `offer_visibility`, `offer_status`) VALUES
(1, '108002987946946240367', 'Price', 100, 'All Items', 0, 'Forever', '0000-00-00', 'Sv9mpfd5', '0', '0'),
(2, '108002987946946240367', 'Discount', 20, 'Select Item', 1687856, '', '2019-08-17', 'jzxwA218', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `open_hours`
--

CREATE TABLE `open_hours` (
  `open_id` int(11) NOT NULL,
  `oauth_uid` varchar(50) NOT NULL,
  `open_from` varchar(20) NOT NULL,
  `open_to` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `open_hours`
--

INSERT INTO `open_hours` (`open_id`, `oauth_uid`, `open_from`, `open_to`) VALUES
(1, '108002987946946240367', '09:30 AM', '08:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `operator_be_available`
--

CREATE TABLE `operator_be_available` (
  `operator_id` int(11) NOT NULL,
  `operator_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator_be_available`
--

INSERT INTO `operator_be_available` (`operator_id`, `operator_name`) VALUES
(1, 'Yes, operator or Driver or instructor will be their with the Item'),
(2, 'No, item can be hadlled by Borrower no operator will be present');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `order_id` int(11) NOT NULL,
  `oauth_uid` varchar(50) NOT NULL,
  `vendor_id` varchar(50) NOT NULL,
  `req_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `payment_amount` varchar(10) NOT NULL,
  `payment_method` varchar(15) NOT NULL,
  `payment_bank` varchar(40) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `admin_payment` enum('1','0') NOT NULL DEFAULT '0',
  `admin_payment_name` varchar(50) DEFAULT NULL,
  `admin_payment_id` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`order_id`, `oauth_uid`, `vendor_id`, `req_id`, `item_id`, `payment_id`, `payment_amount`, `payment_method`, `payment_bank`, `created_at`, `payment_status`, `admin_payment`, `admin_payment_name`, `admin_payment_id`) VALUES
(8870850, '108002987946946240367', '108002987946946240367', 10, 3, 'pay_DFDj5MOA7RTBG5', '5430', 'netbanking', 'HDFC', '1567839968', 'captured', '1', 'Google Pay', 'olso_HG78787SHJH838'),
(8936524, '108002987946946240367', '108002987946946240367', 9, 2, 'pay_DEhy0HpxoZ13nK', '446', 'netbanking', 'HDFC', '1567728124', 'captured', '1', 'Google Pay', 'dsfnfkddfdsfsd');

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `policy_id` int(11) NOT NULL,
  `oauth_uid` varchar(50) NOT NULL,
  `policy_name` varchar(100) NOT NULL,
  `policy_desc` text NOT NULL,
  `policy_status` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`policy_id`, `oauth_uid`, `policy_name`, `policy_desc`, `policy_status`) VALUES
(3, '108002987946946240367', 'ashs', 'hjdkhaskdsaj ', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `description`, `image`, `price`, `status`) VALUES
(1, 'Product One', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy', 'http://placehold.it/700x400', 10.00, 1),
(2, 'Product Two', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy', 'http://placehold.it/700x400', 20.00, 1),
(3, 'Product Three', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy', 'http://placehold.it/700x400', 30.00, 1),
(4, 'Product Four', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy', 'http://placehold.it/700x400', 50.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `request_for_item`
--

CREATE TABLE `request_for_item` (
  `req_for_id` int(11) NOT NULL,
  `oauth_uid` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `subtype_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `item_price` varchar(10) NOT NULL,
  `req_for_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_for_item`
--

INSERT INTO `request_for_item` (`req_for_id`, `oauth_uid`, `cat_id`, `subcat_id`, `subtype_id`, `country_id`, `state_id`, `city_id`, `item_name`, `item_price`, `req_for_date`) VALUES
(1, 2147483647, 1, 4, 15, 99, 1, 1, 'kdakjdnaskjd', '1200', '2019-09-07 03:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `social_account`
--

CREATE TABLE `social_account` (
  `social_id` int(11) NOT NULL,
  `oauth_uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `social_oauth_provider` enum('','facebook','google','twitter','email') COLLATE utf8_unicode_ci NOT NULL,
  `social_oauth_uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `social_first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `social_last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `social_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `social_picture` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `social_created` datetime NOT NULL,
  `social_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `social_account`
--

INSERT INTO `social_account` (`social_id`, `oauth_uid`, `social_oauth_provider`, `social_oauth_uid`, `social_first_name`, `social_last_name`, `social_email`, `social_picture`, `social_created`, `social_modified`) VALUES
(0, 'gh45j5jk64', 'facebook', '914209268917373', 'Ashish', 'Sahu', 'ashishsahu25051997@gmail.com', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=914209268917373&height=50&width=50&ext=1565786594&hash=AeRjfjrr1BRuSY9w', '2019-07-11 19:35:57', '2019-07-15 14:40:38'),
(0, 'gh45j5jk64', 'facebook', '914209268917373', 'Ashish', 'Sahu', 'ashishsahu25051997@gmail.com', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=914209268917373&height=50&width=50&ext=1565786594&hash=AeRjfjrr1BRuSY9w', '2019-07-11 20:05:16', '2019-07-15 14:40:38'),
(0, '108002987946946240367', 'google', '108002987946946240367', 'Ashish', 'Sahu', 'ashishsahu25051997@gmail.com', 'https://lh3.googleusercontent.com/a-/AAuE7mAYn9tKx918bJ9reUEKXp8NjsFxB6JI6WjwGBl4fg', '2019-09-13 12:27:13', '2019-09-13 12:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_name` varchar(60) NOT NULL,
  `state_status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `country_id`, `state_name`, `state_status`) VALUES
(1, 99, 'Andaman & Nicobar [AN]', '1'),
(2, 99, 'Andhra Pradesh [AP]', '1'),
(3, 99, 'Arunachal Pradesh [AR]', '1'),
(4, 99, 'Assam [AS]', '1'),
(5, 99, 'Bihar [BH]', '1'),
(6, 99, 'Chandigarh [CH]', '1'),
(7, 99, 'Chhattisgarh [CG]', '1'),
(8, 99, 'Dadra & Nagar Haveli [DN]', '1'),
(9, 99, 'Daman & Diu [DD]', '1'),
(10, 99, 'Delhi [DL]', '1'),
(11, 99, 'Goa [GO]', '1'),
(12, 99, 'Gujarat [GU]', '1'),
(13, 99, 'Haryana [HR]', '1'),
(14, 99, 'Himachal Pradesh [HP]', '1'),
(15, 99, 'Jammu & Kashmir [JK]', '1'),
(16, 99, 'Jharkhand [JH]', '1'),
(17, 99, 'Karnataka [KR]', '1'),
(18, 99, 'Kerala [KL]', '1'),
(19, 99, 'Lakshadweep [LD]', '1'),
(20, 99, 'Madhya Pradesh [MP]', '1'),
(21, 99, 'Maharashtra [MH]', '1'),
(22, 99, 'Manipur [MN]', '1'),
(23, 99, 'Meghalaya [ML]', '1'),
(24, 99, 'Mizoram [MM]', '1'),
(25, 99, 'Nagaland [NL]', '1'),
(26, 99, 'Orissa [OR]', '1'),
(27, 99, 'Pondicherry [PC]', '1'),
(28, 99, 'Punjab [PJ]', '1'),
(29, 99, 'Rajasthan [RJ]', '1'),
(30, 99, 'Sikkim [SK]', '1'),
(31, 99, 'Tamil Nadu [TN]', '1'),
(32, 99, 'Tripura [TR]', '1'),
(33, 99, 'Uttar Pradesh [UP]', '1'),
(34, 99, 'Uttaranchal [UT]', '1'),
(35, 99, 'West Bengal [WB]', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subcat_type`
--

CREATE TABLE `subcat_type` (
  `subtype_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `subtype_name` varchar(50) NOT NULL,
  `subtype_status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat_type`
--

INSERT INTO `subcat_type` (`subtype_id`, `cat_id`, `subcat_id`, `subtype_name`, `subtype_status`) VALUES
(1, 1, 1, 'High Chairs', '1'),
(2, 1, 1, 'Space Saver High Chairs', '1'),
(3, 1, 1, 'Bottle Warmers', '1'),
(4, 1, 2, 'Cot', '1'),
(5, 1, 2, 'Cribs', '1'),
(6, 1, 2, 'Cradle', '1'),
(7, 1, 2, 'Toddler Bed', '1'),
(8, 1, 3, 'Bikes ,Car & Scooters', '1'),
(9, 1, 3, 'Outdoor Toys', '1'),
(10, 1, 3, 'Play Mats', '1'),
(11, 1, 3, 'Toys And Books', '1'),
(12, 1, 3, 'Swings/Bouncers', '1'),
(13, 1, 3, 'Games & Toys', ''),
(14, 1, 3, 'Walkers', '1'),
(15, 1, 4, 'Changing Tables', '1'),
(16, 1, 4, 'Potty', '1'),
(17, 1, 4, 'Tubs', '1'),
(18, 1, 4, 'Diaper Disposal Pail', '1'),
(19, 1, 5, 'Baby Carriers', '1'),
(20, 1, 5, 'Carrycots', '1'),
(21, 1, 5, 'Prams', '1'),
(22, 1, 5, 'Modular Travel Systems', '1'),
(23, 1, 6, 'Convertible', '1'),
(24, 1, 6, 'Infant Car Seats', '1'),
(25, 1, 6, 'Booster Seats', '1'),
(26, 2, 7, 'Bath Lifts', '1'),
(27, 2, 7, 'Bathroom Transfer Systems', '1'),
(28, 2, 7, 'Bathroom Wheelchair', '1'),
(29, 2, 7, 'Commodes', '1'),
(30, 2, 7, 'Grab Bars', '1'),
(31, 2, 7, 'Raised Toilet Seats', '1'),
(32, 2, 7, 'Shower / Bath Accessories', '1'),
(33, 2, 7, 'Shower Heads', '1'),
(34, 2, 7, 'Shower Seats & Bath Benches', '1'),
(35, 2, 7, 'Toilet Accessories', '1'),
(36, 2, 7, 'Transfer Benches', '1'),
(37, 2, 7, 'Walk-In Tubs', '1'),
(38, 2, 8, 'Bed Rails', '1'),
(39, 2, 8, 'Geri Chairs', '1'),
(40, 2, 8, 'Hip Chairs', '1'),
(41, 2, 8, 'Hospital Beds', '1'),
(42, 2, 8, 'Lift Chairs', '1'),
(43, 2, 8, 'Lifting Cushions', '1'),
(44, 2, 8, 'Mattresses', '1'),
(45, 2, 8, 'Overbed Tables', '1'),
(46, 2, 8, 'Support Rails', '1'),
(47, 2, 8, 'Trapeze Bars', '1'),
(48, 2, 8, 'Wheelchair Tables', '1'),
(49, 2, 9, 'Bath Lifts', '1'),
(50, 2, 9, 'Lift Parts & Accessories', '1'),
(51, 2, 9, 'Manual Patient Lifts', '1'),
(52, 2, 9, 'Overhead Patient Lifts', '1'),
(53, 2, 9, 'Pool Lifts', '1'),
(54, 2, 9, 'Power Patient Lifts', '1'),
(55, 2, 9, 'Safe Patient Handling', '1'),
(56, 2, 9, 'Slings', '1'),
(57, 2, 9, 'Stair Lifts', '1'),
(58, 2, 9, 'Stand Up Patient Lifts', '1'),
(59, 2, 10, 'Cane Accessories', '1'),
(60, 2, 10, 'Crutch Accessories', '1'),
(61, 2, 10, 'Lift Chair Accessories', '1'),
(62, 2, 10, 'Power Chair Accessories', '1'),
(63, 2, 10, 'Ramps', '1'),
(64, 2, 10, 'Scooter Accessories', '1'),
(65, 2, 10, 'Walker Accessories', '1'),
(66, 2, 10, 'Wheelchair Accessories', '1'),
(67, 2, 11, 'Air Purifier', '1'),
(68, 2, 11, 'Bi-Pap', '1'),
(69, 2, 11, 'Cpap', '1'),
(70, 2, 11, 'Humidifiers', '1'),
(71, 2, 11, 'Nebulizer', '1'),
(72, 2, 11, 'Oxygen Concentrators & Generators', '1'),
(73, 2, 12, '3 Wheel Scooters', '1'),
(74, 2, 12, '4 Wheel Scooters', '1'),
(75, 2, 12, 'Heavy Duty', '1'),
(76, 2, 12, 'Indoor', '1'),
(77, 2, 12, 'Outdoor', '1'),
(78, 2, 12, 'Portable', '1'),
(79, 2, 12, 'Recreational Scooter', '1'),
(80, 2, 12, 'Scooter Accessories', '1'),
(81, 2, 13, 'Canes', '1'),
(82, 2, 13, 'Crutches', '1'),
(83, 2, 13, 'Heavy Duty Walkers', '1'),
(84, 2, 13, 'Knee Walkers', '1'),
(85, 2, 13, 'Rolling Walkers', '1'),
(86, 2, 13, 'Specialty Walkers', '1'),
(87, 2, 13, 'Standard Walkers', '1'),
(88, 2, 13, 'Two-In-One Walker-Wheelchair', '1'),
(89, 2, 13, 'Walkers With Wheels', '1'),
(90, 2, 14, 'Bathroom Wheelchairs', '1'),
(91, 2, 14, 'Commercial Use Wheelchairs', '1'),
(92, 2, 14, 'Folding / Portable Wheelchairs', '1'),
(93, 2, 14, 'Handcycles', '1'),
(94, 2, 14, 'Manual Wheelchairs', '1'),
(95, 2, 14, 'Pediatric Wheelchairs', '1'),
(96, 2, 14, 'Power Wheelchairs', '1'),
(97, 2, 14, 'Sports Wheelchairs', '1'),
(98, 2, 14, 'Transport Wheelchairs', '1'),
(99, 3, 15, 'Central Air Conditioning ', '1'),
(100, 3, 15, 'Packaged Air Conditioner', '1'),
(101, 3, 15, 'Split Air Conditioner', '1'),
(102, 3, 15, 'Window Air Conditioner', '1'),
(103, 3, 16, 'Ceiling Fan', '1'),
(104, 3, 16, 'Desert Cooler', '1'),
(105, 3, 16, 'Electric Fan', '1'),
(106, 3, 16, 'Pedestal Fan', '1'),
(107, 3, 16, 'Personal Cooler', '1'),
(108, 3, 16, 'Reversible Motor Fan', '1'),
(109, 3, 16, 'Table Fan', '1'),
(110, 3, 16, 'Tower Cooler', '1'),
(111, 3, 16, 'Wall Fan', '1'),
(112, 3, 16, 'Window Cooler', '1'),
(113, 3, 17, 'Air Purifiers', '1'),
(114, 3, 17, 'Geysers', '1'),
(115, 3, 17, 'Inverters And Stablizers', '1'),
(116, 3, 17, 'Room Heaters', '1'),
(117, 3, 17, 'Water Purifiers', '1'),
(118, 3, 18, 'Coffee Maker', '1'),
(119, 3, 18, 'Cookers & Steamers', '1'),
(120, 3, 18, 'Dishwasher', '1'),
(121, 3, 18, 'Food Processors', '1'),
(122, 3, 18, 'Gas Stoves & Hobs', '1'),
(123, 3, 18, 'Grills & Tandoor & Bbqs', '1'),
(124, 3, 19, 'Convection Microwave Oven', '1'),
(125, 3, 19, 'Grill Microwave Oven', '1'),
(126, 3, 19, 'Solo Microwave Oven', '1'),
(127, 3, 20, 'Canopy Rangehoods\r\n', '1'),
(128, 3, 20, 'Electric & Gas Dual Fuel\r\n', '1'),
(129, 3, 20, 'Electric & Gas Elevated\r\n', '1'),
(130, 3, 20, 'Electric Cooktops\r\n', '1'),
(131, 3, 20, 'Electric Freestanding\r\n', '1'),
(132, 3, 20, 'Electric Ovens\r\n', '1'),
(133, 3, 20, 'Fixed Rangehoods\r\n', '1'),
(134, 3, 20, 'Gas Cooktops\r\n', '1'),
(135, 3, 20, 'Gas Freestanding\r\n', '1'),
(136, 3, 20, 'Gas Ovens\r\n', '1'),
(137, 3, 20, 'Outdoor Gas Bbq\r\n', '1'),
(138, 3, 20, 'Retractable Rangehoods\r\n', '1'),
(139, 3, 21, 'Bottom Freezer\r\n', '1'),
(140, 3, 21, 'Bottom Freezer\r\nCommercial\r\n', '1'),
(141, 3, 21, 'Freezerless\r\n', '1'),
(142, 3, 21, 'French Door\r\n', '1'),
(143, 3, 21, 'Mini\r\n', '1'),
(144, 3, 21, 'Side By Side\r\n', '1'),
(145, 3, 21, 'Top Freezer\r\n', '1'),
(146, 3, 21, 'Wine\r\n', '1'),
(147, 3, 22, 'Air Fryer\r\n', '1'),
(148, 3, 22, 'Blender\r\n', '1'),
(149, 3, 22, 'Bread Maker\r\n', '1'),
(150, 3, 22, 'Egg Cooker\r\n', '1'),
(151, 3, 22, 'Electric Deep Fryer\r\n', '1'),
(152, 3, 22, 'Electric Freestanding\r\n', '1'),
(153, 3, 22, 'Electric Frypan\r\n', '1'),
(154, 3, 22, 'Electric Knife\r\n', '1'),
(155, 3, 22, 'Electric Skillet\r\n', '1'),
(156, 3, 22, 'Food Mixer\r\n', '1'),
(157, 3, 22, 'Kettle\r\n', '1'),
(158, 3, 22, 'Pancake Maker\r\n', '1'),
(159, 3, 22, 'Rice Cooker\r\n', '1'),
(160, 3, 22, 'Sandwich Press\r\n', '1'),
(161, 3, 22, 'Slow Cooker\r\n', '1'),
(162, 3, 22, 'Snack Maker\r\n', '1'),
(163, 3, 22, 'Toaster\r\n', '1'),
(164, 3, 22, 'Toaster & Kettle Pack\r\n', '1'),
(165, 3, 22, 'Toaster Oven\r\n', '1'),
(166, 3, 23, 'Lcd Tv\r\n', '1'),
(167, 3, 23, 'Led Tv\r\n', '1'),
(168, 3, 23, 'Oled Tv\r\n', '1'),
(169, 3, 23, 'Plasma Tv\r\n', '1'),
(170, 3, 24, 'Automatic/Robot Vacuum\r\n', '1'),
(171, 3, 24, 'Barrel Vacuum Cleaner\r\n', '1'),
(172, 3, 24, 'Cordless Vacuum Cleaner\r\n', '1'),
(173, 3, 24, 'Upright Vacuum Cleaner\r\n', '1'),
(174, 3, 25, 'Alexa\r\n', '1'),
(175, 3, 25, 'Cortana\r\n', '1'),
(176, 3, 25, 'Google\r\n', '1'),
(177, 3, 25, 'Siri\r\n', '1'),
(178, 3, 26, 'Front-Loading\r\n', '1'),
(179, 3, 26, 'He Top-Loading\r\n', '1'),
(180, 3, 26, 'Laundry Center\r\n', '1'),
(181, 3, 26, 'Top-Loading\r\n', '1'),
(182, 3, 26, 'Washer Dryer Combo\r\n', '1'),
(183, 4, 27, 'Art History', '1'),
(184, 4, 27, 'Calligraphy\r\n', '1'),
(185, 4, 27, 'Drawing\r\n', '1'),
(186, 4, 27, 'Fashion\r\n', '1'),
(187, 4, 27, 'Film\r\n', '1'),
(188, 4, 27, 'Individual Artists\r\n', '1'),
(189, 4, 27, 'Music\r\n', '1'),
(190, 4, 27, 'Painting\r\n', '1'),
(191, 4, 27, 'Performing Arts\r\n', '1'),
(192, 4, 27, 'Photography\r\n', '1'),
(193, 4, 27, 'Sculpture\r\n', '1'),
(194, 4, 27, 'Theater\r\n', '1'),
(195, 4, 28, 'Ethnic & Cultural\r\n', '1'),
(196, 4, 28, 'Europe\r\n', '1'),
(197, 4, 28, 'Historical', '1'),
(198, 4, 28, 'Leaders & Notable People\r\n', '1'),
(199, 4, 28, 'Military\r\n', '1'),
(200, 4, 28, 'Modern\r\n', '1'),
(201, 4, 28, 'Sports', '1'),
(202, 4, 28, 'United States', '1'),
(203, 4, 28, 'Women', '1'),
(204, 4, 29, 'Careers\r\n', '1'),
(205, 4, 29, 'Economics', '1'),
(206, 4, 29, 'Finance', '1'),
(207, 4, 29, 'Industries', '1'),
(208, 4, 29, 'International', '1'),
(209, 4, 29, 'Management', '1'),
(210, 4, 29, 'Marketing', '1'),
(211, 4, 29, 'Small Business', '1'),
(212, 4, 30, 'Action & Adventure', '1'),
(213, 4, 30, 'Activities, Crafts & Games', '1'),
(214, 4, 30, 'Activity Books', '1'),
(215, 4, 30, 'Animals', '1'),
(216, 4, 30, 'Cars & Trains', '1'),
(217, 4, 30, 'Chapter Books', '1'),
(218, 4, 30, 'Classics', '1'),
(219, 4, 30, 'Cookbooks', '1'),
(220, 4, 30, 'Fairy Tales', '1'),
(221, 4, 30, 'Family Life', '1'),
(222, 4, 30, 'Growing Up', '1'),
(223, 4, 30, 'Humor', '1'),
(224, 4, 30, 'Mystery', '1'),
(225, 4, 30, 'Action & Adventure', '1'),
(226, 4, 30, 'Activities, Crafts & Games', '1'),
(227, 4, 30, 'Activity Books', '1'),
(228, 4, 30, 'Animals', '1'),
(229, 4, 30, 'Cars & Trains', '1'),
(230, 4, 30, 'Chapter Books', '1'),
(231, 4, 30, 'Classics', '1'),
(232, 4, 30, 'Cookbooks', '1'),
(233, 4, 30, 'Fairy Tales', '1'),
(234, 4, 30, 'Family Life', '1'),
(235, 4, 30, 'Growing Up', '1'),
(236, 4, 30, 'Humor', '1'),
(237, 4, 30, 'Mystery', '1'),
(238, 4, 30, 'Older Children''S Books', '1'),
(239, 4, 30, 'Sci-Fi', '1'),
(240, 4, 30, 'Science', '1'),
(241, 4, 30, 'Younger Children''S Books', '1'),
(242, 4, 32, 'Comic Books', '1'),
(243, 4, 32, 'Comic Strips', '1'),
(244, 4, 32, 'Dark Horse', '1'),
(245, 4, 32, 'Dc Comics', '1'),
(246, 4, 32, 'Fantasy', '1'),
(247, 4, 32, 'Graphic Novels', '1'),
(248, 4, 32, 'Manga', '1'),
(249, 4, 32, 'Marvel', '1'),
(250, 4, 32, 'Sci-Fi', '1'),
(251, 4, 32, 'Superheroes', '1'),
(252, 4, 33, 'Apple', '1'),
(253, 4, 33, 'Cad', '1'),
(254, 4, 33, 'Certification', '1'),
(255, 4, 33, 'Computer Science', '1'),
(256, 4, 33, 'Databases', '1'),
(257, 4, 33, 'Desktop Publishing', '1'),
(258, 4, 33, 'E-Commerce', '1'),
(259, 4, 33, 'Graphic Design', '1'),
(260, 4, 33, 'Home Computing', '1'),
(261, 4, 33, 'Internet & Social Media', '1'),
(262, 4, 33, 'Microsoft', '1'),
(263, 4, 33, 'Networking', '1'),
(264, 4, 33, 'Operating Systems', '1'),
(265, 4, 33, 'Phones & Tablets', '1'),
(266, 4, 33, 'Programming', '1'),
(267, 4, 33, 'Software', '1'),
(268, 4, 33, 'Video Games', '1'),
(269, 4, 33, 'Web Design', '1'),
(270, 4, 33, 'Web Development', '1'),
(271, 4, 34, 'Asian', '1'),
(272, 4, 34, 'Baking', '1'),
(273, 4, 34, 'Bbq', '1'),
(274, 4, 34, 'Celebrity Cookbooks', '1'),
(275, 4, 34, 'Culinary Arts', '1'),
(276, 4, 34, 'Desserts', '1'),
(277, 4, 34, 'Diet & Weight Loss', '1'),
(278, 4, 34, 'French', '1'),
(279, 4, 34, 'Healthy', '1'),
(280, 4, 34, 'Holiday', '1'),
(281, 4, 34, 'Italian', '1'),
(282, 4, 34, 'Nutrition', '1'),
(283, 4, 34, 'Preserving', '1'),
(284, 4, 34, 'Southern', '1'),
(285, 4, 34, 'Special Diets', '1'),
(286, 4, 34, 'Vegetarian', '1'),
(287, 4, 34, 'Wine & Spirits', '1'),
(288, 4, 35, 'Antiques', '1'),
(289, 4, 35, 'Clay', '1'),
(290, 4, 35, 'Collecting', '1'),
(291, 4, 35, 'Fashion', '1'),
(292, 4, 35, 'Jewelry Making', '1'),
(293, 4, 35, 'Needlecrafts', '1'),
(294, 4, 35, 'Papercrafts', '1'),
(295, 4, 35, 'Pets', '1'),
(296, 4, 35, 'Seasonal', '1'),
(297, 4, 35, 'Sewing', '1'),
(298, 4, 35, 'Soap & Candles', '1'),
(299, 4, 35, 'Toys & Models', '1'),
(300, 4, 35, 'Woodcarving', '1'),
(301, 4, 36, 'Almanacs & Yearbooks', '1'),
(302, 4, 36, 'Atlases & Maps', '1'),
(303, 4, 36, 'Catalogs', '1'),
(304, 4, 36, 'Colleges', '1'),
(305, 4, 36, 'Continuing Education', '1'),
(306, 4, 36, 'Curriculum', '1'),
(307, 4, 36, 'Dictionaries', '1'),
(308, 4, 36, 'Education', '1'),
(309, 4, 36, 'Encyclopedias', '1'),
(310, 4, 36, 'English', '1'),
(311, 4, 36, 'Foreign Languages', '1'),
(312, 4, 36, 'Homeschooling', '1'),
(313, 4, 36, 'Instruction Methods', '1'),
(314, 4, 36, 'Law Practice', '1'),
(315, 4, 36, 'Linguistics', '1'),
(316, 4, 36, 'Quotes', '1'),
(317, 4, 36, 'Schools & Teaching', '1'),
(318, 4, 36, 'Special Education', '1'),
(319, 4, 36, 'Study Guides', '1'),
(320, 4, 36, 'Study Skills', '1'),
(321, 4, 36, 'Test Prep', '1'),
(322, 4, 36, 'Textbooks', '1'),
(323, 4, 36, 'Thesauruses', '1'),
(324, 4, 36, 'Writing Skills', '1'),
(325, 4, 37, 'Anthologies', '1'),
(326, 4, 37, 'Biographies', '1'),
(327, 4, 37, 'Contemporary', '1'),
(328, 4, 37, 'Criticism & Theory', '1'),
(329, 4, 37, 'Drama', '1'),
(330, 4, 37, 'Erotica', '1'),
(331, 4, 37, 'Fiction', '1'),
(332, 4, 37, 'Gay Romance', '1'),
(333, 4, 37, 'Genre Fiction', '1'),
(334, 4, 37, 'History', '1'),
(335, 4, 37, 'History & Criticism', '1'),
(336, 4, 37, 'Humanities', '1'),
(337, 4, 37, 'Literary', '1'),
(338, 4, 37, 'Literature', '1'),
(339, 4, 37, 'Literature & Fiction', '1'),
(340, 4, 37, 'Mystery', '1'),
(341, 4, 37, 'Mystery, Thriller & Suspense', '1'),
(342, 4, 37, 'Nonfiction', '1'),
(343, 4, 37, 'Poetry', '1'),
(344, 4, 37, 'Politics & Social Sciences', '1'),
(345, 4, 37, 'Romance', '1'),
(346, 4, 37, 'Short Stories', '1'),
(347, 4, 37, 'Social Sciences', '1'),
(348, 4, 37, 'Specific Demographics', '1'),
(349, 4, 37, 'Textbooks', '1'),
(350, 4, 38, 'Addiction & Recovery', '1'),
(351, 4, 38, 'Aging', '1'),
(352, 4, 38, 'Alternative Medicine', '1'),
(353, 4, 38, 'Beauty, Grooming, & Style', '1'),
(354, 4, 38, 'Children''S Health', '1'),
(355, 4, 38, 'Diseases & Physical Ailments', '1'),
(356, 4, 38, 'Exercise & Fitness', '1'),
(357, 4, 38, 'Healthy Nutrition', '1'),
(358, 4, 38, 'Medical', '1'),
(359, 4, 38, 'Men''S Health', '1'),
(360, 4, 38, 'Mental Health', '1'),
(361, 4, 38, 'Safety & First Aid', '1'),
(362, 4, 38, 'Sexual Health', '1'),
(363, 4, 38, 'Women''S Health', '1'),
(364, 4, 39, 'African', '1'),
(365, 4, 39, 'Ancient', '1'),
(366, 4, 39, 'Asian', '1'),
(367, 4, 39, 'Black History', '1'),
(368, 4, 39, 'Canadian', '1'),
(369, 4, 39, 'Caribbean', '1'),
(370, 4, 39, 'European', '1'),
(371, 4, 39, 'Exploration', '1'),
(372, 4, 39, 'Indian', '1'),
(373, 4, 39, 'Latin American', '1'),
(374, 4, 39, 'Medieval', '1'),
(375, 4, 39, 'Middle Eastern', '1'),
(376, 4, 39, 'Military', '1'),
(377, 4, 39, 'Modern', '1'),
(378, 4, 39, 'Native American', '1'),
(379, 4, 39, 'Religious', '1'),
(380, 4, 39, 'Renaissance', '1'),
(381, 4, 39, 'Russian', '1'),
(382, 4, 39, 'South American', '1'),
(383, 4, 39, 'South Pacific', '1'),
(384, 4, 39, 'United States', '1'),
(385, 4, 39, 'World History', '1'),
(386, 4, 40, 'Architecture', '1'),
(387, 4, 40, 'Flowers', '1'),
(388, 4, 40, 'Fruit', '1'),
(389, 4, 40, 'Gardening', '1'),
(390, 4, 40, 'Home Decorating', '1'),
(391, 4, 40, 'Home Improvement', '1'),
(392, 4, 40, 'Landscaping', '1'),
(393, 4, 41, 'Ghosts', '1'),
(394, 4, 41, 'Occult', '1'),
(395, 4, 41, 'Paranormal', '1'),
(396, 4, 41, 'Supernatural', '1'),
(397, 4, 41, 'Vampires', '1'),
(398, 4, 41, 'Zombies', '1'),
(399, 4, 42, 'Brain Teasers', '1'),
(400, 4, 42, 'Entertainers', '1'),
(401, 4, 42, 'Games', '1'),
(402, 4, 42, 'Humor', '1'),
(403, 4, 42, 'Movies', '1'),
(404, 4, 42, 'Pop Culture', '1'),
(405, 4, 42, 'Satire', '1'),
(406, 4, 42, 'Television', '1'),
(407, 4, 42, 'Trivia', '1'),
(408, 4, 42, 'Word Games', '1'),
(409, 4, 43, 'Anthologies', '1'),
(410, 4, 43, 'Classics', '1'),
(411, 4, 43, 'Contemporary', '1'),
(412, 4, 43, 'Foreign Language', '1'),
(413, 4, 43, 'Genre Fiction', '1'),
(414, 4, 43, 'History & Criticism', '1'),
(415, 4, 43, 'Poetry', '1'),
(416, 4, 43, 'World Literature', '1'),
(417, 4, 44, 'Administration', '1'),
(418, 4, 44, 'Allied Health', '1'),
(419, 4, 44, 'Basic Sciences', '1'),
(420, 4, 44, 'Clinical', '1'),
(421, 4, 44, 'Dentistry', '1'),
(422, 4, 44, 'General Medicine', '1'),
(423, 4, 44, 'Health Careers', '1'),
(424, 4, 44, 'History', '1'),
(425, 4, 44, 'Internal Medicine', '1'),
(426, 4, 44, 'Nursing', '1'),
(427, 4, 44, 'Pathology', '1'),
(428, 4, 44, 'Pharmacology', '1'),
(429, 4, 44, 'Psychiatry', '1'),
(430, 4, 44, 'Psychology', '1'),
(431, 4, 44, 'Research', '1'),
(432, 4, 44, 'Veterinary Medicine', '1'),
(433, 4, 45, 'Conspiracy', '1'),
(434, 4, 45, 'Crime', '1'),
(435, 4, 45, 'Detective', '1'),
(436, 4, 45, 'Mysteries', '1'),
(437, 4, 45, 'Spy', '1'),
(438, 4, 45, 'Suspense', '1'),
(439, 4, 45, 'Thrillers', '1'),
(440, 4, 46, 'Adoption', '1'),
(441, 4, 46, 'Aging Parents', '1'),
(442, 4, 46, 'Child Care', '1'),
(443, 4, 46, 'Family Activities', '1'),
(444, 4, 46, 'Family Health', '1'),
(445, 4, 46, 'Family Relationships', '1'),
(446, 4, 46, 'Fertility', '1'),
(447, 4, 46, 'Infants', '1'),
(448, 4, 46, 'Pregnancy & Childbirth', '1'),
(449, 4, 46, 'Special Needs', '1'),
(450, 4, 47, 'Anarchy', '1'),
(451, 4, 47, 'Canadian Politics', '1'),
(452, 4, 47, 'Civil Rights', '1'),
(453, 4, 47, 'Comparative Politics', '1'),
(454, 4, 47, 'Cultural', '1'),
(455, 4, 47, 'Customs & Traditions', '1'),
(456, 4, 47, 'Democracy', '1'),
(457, 4, 47, 'Eastern', '1'),
(458, 4, 47, 'Elections', '1'),
(459, 4, 47, 'Ethnic Studies', '1'),
(460, 4, 47, 'Human Rights', '1'),
(461, 4, 47, 'Humanities', '1'),
(462, 4, 47, 'Immigration', '1'),
(463, 4, 47, 'National Security', '1'),
(464, 4, 47, 'Philosophy', '1'),
(465, 4, 47, 'Political Economy', '1'),
(466, 4, 47, 'Political Parties', '1'),
(467, 4, 47, 'Poverty', '1'),
(468, 4, 47, 'Race Relations', '1'),
(469, 4, 47, 'Socialism', '1'),
(470, 4, 47, 'Terrorism', '1'),
(471, 4, 47, 'Women''S Studies', '1'),
(472, 4, 48, 'Agnosticism', '1'),
(473, 4, 48, 'Astrology', '1'),
(474, 4, 48, 'Atheism', '1'),
(475, 4, 48, 'Buddhism', '1'),
(476, 4, 48, 'Christian', '1'),
(477, 4, 48, 'Christian Living', '1'),
(478, 4, 48, 'Comparative Religion', '1'),
(479, 4, 48, 'Earth-Based Religions', '1'),
(480, 4, 48, 'Hinduism', '1'),
(481, 4, 48, 'History Of Religion', '1'),
(482, 4, 48, 'Inspirational', '1'),
(483, 4, 48, 'Islamic', '1'),
(484, 4, 48, 'Judaism', '1'),
(485, 4, 48, 'New Age', '1'),
(486, 4, 48, 'Occult', '1'),
(487, 4, 48, 'Other Religions & Sacred Texts', '1'),
(488, 4, 48, 'Paganism', '1'),
(489, 4, 48, 'Religious Studies', '1'),
(490, 4, 48, 'Spirituality', '1'),
(491, 4, 48, 'Theology', '1'),
(492, 4, 49, 'Anthologies', '1'),
(493, 4, 49, 'Contemporary', '1'),
(494, 4, 49, 'Erotica', '1'),
(495, 4, 49, 'Fantasy', '1'),
(496, 4, 49, 'Gothic', '1'),
(497, 4, 49, 'Historical', '1'),
(498, 4, 49, 'Holidays', '1'),
(499, 4, 49, 'Military', '1'),
(500, 4, 49, 'Multicultural', '1'),
(501, 4, 49, 'Mystery', '1'),
(502, 4, 49, 'Regency', '1'),
(503, 4, 49, 'Romantic Comedy', '1'),
(504, 4, 49, 'Sci-Fi', '1'),
(505, 4, 49, 'Sports', '1'),
(506, 4, 49, 'Suspense', '1'),
(507, 4, 49, 'Time Travel', '1'),
(508, 4, 49, 'Vampires', '1'),
(509, 4, 49, 'Western', '1'),
(510, 4, 50, 'Agricultural Sciences', '1'),
(511, 4, 50, 'Anatomy', '1'),
(512, 4, 50, 'Animals', '1'),
(513, 4, 50, 'Astronomy', '1'),
(514, 4, 50, 'Biology', '1'),
(515, 4, 50, 'Biotechnology', '1'),
(516, 4, 50, 'Botany', '1'),
(517, 4, 50, 'Chemistry', '1'),
(518, 4, 50, 'Earth Sciences', '1'),
(519, 4, 50, 'Engineering', '1'),
(520, 4, 50, 'Entomology', '1'),
(521, 4, 50, 'Environmental', '1'),
(522, 4, 50, 'Evolution', '1'),
(523, 4, 50, 'Food Science', '1'),
(524, 4, 50, 'Geography', '1'),
(525, 4, 50, 'Geology', '1'),
(526, 4, 50, 'Mathematics', '1'),
(527, 4, 50, 'Nature & Ecology', '1'),
(528, 4, 50, 'Paleontology', '1'),
(529, 4, 50, 'Physics', '1'),
(530, 4, 50, 'Statistics', '1'),
(531, 4, 51, 'Action', '1'),
(532, 4, 51, 'Anthologies', '1'),
(533, 4, 51, 'Coming Of Age', '1'),
(534, 4, 51, 'Dark Fantasy', '1'),
(535, 4, 51, 'Fantasy', '1'),
(536, 4, 51, 'Fantasy Epics', '1'),
(537, 4, 51, 'High Tech', '1'),
(538, 4, 51, 'Historical', '1'),
(539, 4, 51, 'Horror', '1'),
(540, 4, 51, 'Humor', '1'),
(541, 4, 51, 'Role Playing', '1'),
(542, 4, 51, 'Sci-Fi Graphic Novels', '1'),
(543, 4, 51, 'Space', '1'),
(544, 4, 51, 'Superheroes', '1'),
(545, 4, 51, 'Time Travel', '1'),
(546, 4, 52, 'Abuse', '1'),
(547, 4, 52, 'Addictions', '1'),
(548, 4, 52, 'Anger Management', '1'),
(549, 4, 52, 'Anxieties & Phobias', '1'),
(550, 4, 52, 'Creativity', '1'),
(551, 4, 52, 'Death & Grief', '1'),
(552, 4, 52, 'Depression', '1'),
(553, 4, 52, 'Dreams', '1'),
(554, 4, 52, 'Eating Disorders', '1'),
(555, 4, 52, 'Happiness', '1'),
(556, 4, 52, 'Hypnosis', '1'),
(557, 4, 52, 'Inner Child', '1'),
(558, 4, 52, 'Meditation', '1'),
(559, 4, 52, 'Memory', '1'),
(560, 4, 52, 'Mid-Life', '1'),
(561, 4, 52, 'Motivational', '1'),
(562, 4, 52, 'Personal Transformation', '1'),
(563, 4, 52, 'Psychology', '1'),
(564, 4, 52, 'Relationships', '1'),
(565, 4, 52, 'Self-Esteem', '1'),
(566, 4, 52, 'Sex', '1'),
(567, 4, 52, 'Social Skills', '1'),
(568, 4, 52, 'Stress', '1'),
(569, 4, 52, 'Success', '1'),
(570, 4, 52, 'Time Management', '1'),
(571, 4, 53, 'Baseball & Softball', '1'),
(572, 4, 53, 'Basketball', '1'),
(573, 4, 53, 'Boating & Sailing', '1'),
(574, 4, 53, 'Camping', '1'),
(575, 4, 53, 'Extreme Sports', '1'),
(576, 4, 53, 'Football', '1'),
(577, 4, 53, 'Golf', '1'),
(578, 4, 53, 'Hiking', '1'),
(579, 4, 53, 'Hockey', '1'),
(580, 4, 53, 'Hunting & Fishing', '1'),
(581, 4, 53, 'Martial Arts', '1'),
(582, 4, 53, 'Motorsports', '1'),
(583, 4, 53, 'Olympics', '1'),
(584, 4, 53, 'Outdoor Recreation', '1'),
(585, 4, 53, 'Soccer', '1'),
(586, 4, 53, 'Survival Skills', '1'),
(587, 4, 53, 'Training', '1'),
(588, 4, 53, 'Water Sports', '1'),
(589, 4, 53, 'Winter Sports', '1'),
(590, 4, 54, 'Being A Teen', '1'),
(591, 4, 54, 'Fantasy', '1'),
(592, 4, 54, 'Fiction', '1'),
(593, 4, 54, 'Historical Fiction', '1'),
(594, 4, 54, 'Hobbies', '1'),
(595, 4, 54, 'Horror', '1'),
(596, 4, 54, 'Mystery & Thriller', '1'),
(597, 4, 54, 'Romance', '1'),
(598, 4, 54, 'Sci-Fi', '1'),
(599, 4, 54, 'Social Issues', '1'),
(600, 4, 55, 'Africa', '1'),
(601, 4, 55, 'Asia', '1'),
(602, 4, 55, 'Canada', '1'),
(603, 4, 55, 'Caribbean', '1'),
(604, 4, 55, 'Europe', '1'),
(605, 4, 55, 'Food, Lodging & Transportation', '1'),
(606, 4, 55, 'Latin America', '1'),
(607, 4, 55, 'Mexico', '1'),
(608, 4, 55, 'Middle East', '1'),
(609, 4, 55, 'Pictorial', '1'),
(610, 4, 55, 'Polar Regions', '1'),
(611, 4, 55, 'South America', '1'),
(612, 4, 55, 'South Pacific', '1'),
(613, 4, 55, 'Travel Writing', '1'),
(614, 4, 55, 'United States', '1'),
(615, 4, 56, 'Criminal Law', '1'),
(616, 4, 56, 'Famous Criminals', '1'),
(617, 4, 56, 'Murder & Mayhem', '1'),
(618, 4, 56, 'Organized Crime', '1'),
(619, 4, 56, 'Serial Killers', '1'),
(620, 4, 31, 'Native American', '1'),
(621, 5, 57, 'Asymmetric Dresses', '1'),
(622, 5, 57, 'Body Con Dresses', '1'),
(623, 5, 57, 'Cold Shoulder Dresses', '1'),
(624, 5, 57, 'Denim Dresses', '1'),
(625, 5, 57, 'Maxi Dresses', '1'),
(626, 5, 57, 'Midi Dresses', '1'),
(627, 5, 57, 'Off Shoulder Dresses', '1'),
(628, 5, 57, 'Off-Shoulder & Bandeau Dresses', '1'),
(629, 5, 57, 'Pencil Dresses', '1'),
(630, 5, 57, 'Plus Size', '1'),
(631, 5, 57, 'Sequins & Shimmers', '1'),
(632, 5, 57, 'Shift Dresses', '1'),
(633, 5, 57, 'Skater Dresses', '1'),
(634, 5, 57, 'T-Shirt Dresses', '1'),
(635, 5, 57, 'Tunic Dresses', '1'),
(636, 5, 58, 'Bow Tie', '1'),
(637, 5, 58, 'Brooch', '1'),
(638, 5, 58, 'Cufflinks & Studs', '1'),
(639, 5, 58, 'Handbags', '1'),
(640, 5, 58, 'Hats', '1'),
(641, 5, 58, 'Malas For Men', '1'),
(642, 5, 58, 'Pocket Square', '1'),
(643, 5, 58, 'Safas', '1'),
(644, 5, 58, 'Scarves', '1'),
(645, 5, 58, 'Shoes', '1'),
(646, 5, 58, 'Stoles For Men', '1'),
(647, 5, 58, 'Suspender', '1'),
(648, 5, 58, 'Tie', '1'),
(649, 5, 59, 'Leggings', '1'),
(650, 5, 59, 'Pants', '1'),
(651, 5, 59, 'Shorts', '1'),
(652, 5, 59, 'Skirts', '1'),
(653, 5, 60, 'Anarkali', '1'),
(654, 5, 60, 'Dhoti Set', '1'),
(655, 5, 60, 'Ethnic Cape Set', '1'),
(656, 5, 60, 'Ethnic Crop Top And Pants', '1'),
(657, 5, 60, 'Ethnic Crop Top Skirt', '1'),
(658, 5, 60, 'Ethnic Jacket', '1'),
(659, 5, 60, 'Kurta', '1'),
(660, 5, 60, 'Lehenga', '1'),
(661, 5, 60, 'Saree', '1'),
(662, 5, 60, 'Sharara Set', '1'),
(663, 5, 60, 'Suit', '1'),
(664, 5, 61, 'Accessories & Props', '1'),
(665, 5, 61, 'Kids Costumes', '1'),
(666, 5, 61, 'Mascot Costumes', '1'),
(667, 5, 61, 'Men’S Costumes', '1'),
(668, 5, 61, 'Other Fancy Dress', '1'),
(669, 5, 61, 'Unisex Costumes', '1'),
(670, 5, 61, 'Wigs', '1'),
(671, 5, 61, 'Women’S Costumes', '1'),
(672, 5, 62, 'A-Line Gowns', '1'),
(673, 5, 62, 'Ball Gowns', '1'),
(674, 5, 62, 'Empire Waist Gown', '1'),
(675, 5, 62, 'Ethnic Gown', '1'),
(676, 5, 62, 'Exaggerated Drop Gown', '1'),
(677, 5, 62, 'Jacket Gown', '1'),
(678, 5, 62, 'Mermaid Gown', '1'),
(679, 5, 62, 'Saree Gown', '1'),
(680, 5, 62, 'Sheath Gown', '1'),
(681, 5, 62, 'Trumpet Gown', '1'),
(682, 5, 62, 'Wedding Gown', '1'),
(683, 5, 63, 'Blazers', '1'),
(684, 5, 63, 'Capes', '1'),
(685, 5, 63, 'Faux Fur Coats', '1'),
(686, 5, 63, 'Jackets', '1'),
(687, 5, 63, 'Overcoat', '1'),
(688, 5, 63, 'Vests', '1'),
(689, 5, 63, 'Wool Coats', '1'),
(690, 5, 64, 'Bracelets', '1'),
(691, 5, 64, 'Bridal Accessories', '1'),
(692, 5, 64, 'Earrings', '1'),
(693, 5, 64, 'Necklaces', '1'),
(694, 5, 64, 'Rings', '1'),
(695, 5, 64, 'Watches', '1'),
(696, 5, 65, 'Jumpsuits', '1'),
(697, 5, 65, 'Rompers', '1'),
(698, 5, 66, 'First Trimester', '1'),
(699, 5, 66, 'Second Trimester', '1'),
(700, 5, 66, 'Third Trimester', '1'),
(701, 5, 67, 'Blazers', '1'),
(702, 5, 67, 'Broach & Lapel Pins', '1'),
(703, 5, 67, 'Embroidered Sherwanis', '1'),
(704, 5, 67, 'Indo Western', '1'),
(705, 5, 67, 'Jodhpuri', '1'),
(706, 5, 67, 'Jodhpuri Suits', '1'),
(707, 5, 67, 'Kurta Pyjama Sets', '1'),
(708, 5, 67, 'Kurta Set', '1'),
(709, 5, 67, 'Nehru Jacket', '1'),
(710, 5, 67, 'Plain Sherwanis', '1'),
(711, 5, 67, 'Sherwani', '1'),
(712, 5, 67, 'Suits And Tuxedos', '1'),
(713, 5, 67, 'Waistcoat', '1'),
(714, 5, 68, 'Blouses', '1'),
(715, 5, 68, 'Cropped', '1'),
(716, 5, 68, 'Tanks', '1'),
(717, 5, 68, 'Tunics', '1'),
(718, 5, 69, 'Dungarees', '1'),
(719, 5, 69, 'Pants', '1'),
(720, 5, 69, 'Shirt', '1'),
(721, 5, 69, 'Slit Top With Plazos', '1'),
(722, 5, 69, 'Top', '1'),
(723, 5, 69, 'Top Coat', '1'),
(724, 5, 69, 'Top Set', '1'),
(725, 6, 70, 'Aerial Attachments & Safety', '1'),
(726, 6, 70, 'Boom Lifts', '1'),
(727, 6, 70, 'Mobile Platforms', '1'),
(728, 6, 70, 'Scaffolding', '1'),
(729, 6, 70, 'Scissor Lifts', '1'),
(730, 6, 70, 'Vertical Lifts', '1'),
(731, 6, 70, 'Ladders', '1'),
(732, 6, 70, 'Pusharound Lifts', '1'),
(733, 6, 71, 'Air Compressors', '1'),
(734, 6, 71, 'Air Tool Accessories', '1'),
(735, 6, 71, 'Air Tools', '1'),
(736, 6, 72, 'Plate Compactors', '1'),
(737, 6, 72, 'Rammers', '1'),
(738, 6, 72, 'Ride-On Rollers', '1'),
(739, 6, 72, 'Walk-Behind Rollers', '1'),
(740, 6, 73, 'Concrete Grinders & Planers', '1'),
(741, 6, 73, 'Concrete Vibrators', '1'),
(742, 6, 73, 'Core Drills', '1'),
(743, 6, 73, 'Cut-Off Saws & Blades', '1'),
(744, 6, 73, 'Masonry & Tile Saws', '1'),
(745, 6, 73, 'Mixers', '1'),
(746, 6, 73, 'Power Buggies & Buckets', '1'),
(747, 6, 73, 'Screeds & Trowels', '1'),
(748, 6, 73, 'Street Saws & Blades', '1'),
(749, 6, 74, 'Backhoes', '1'),
(750, 6, 74, 'Bull Dozers', '1'),
(751, 6, 74, 'Earthmoving Attachments', '1'),
(752, 6, 74, 'Excavators', '1'),
(753, 6, 74, 'Mini-Excavators', '1'),
(754, 6, 74, 'Skid Steers & Track Loaders', '1'),
(755, 6, 74, 'Sweepers', '1'),
(756, 6, 74, 'Trenchers', '1'),
(757, 6, 74, 'Wheel Loaders', '1'),
(758, 6, 75, 'Cranes', '1'),
(759, 6, 75, 'Hoists', '1'),
(760, 6, 75, 'Material Lifts', '1'),
(761, 6, 75, 'Misc. Material Handling', '1'),
(762, 6, 75, 'Reach Forklifts', '1'),
(763, 6, 75, 'Rough Terrain Forklifts', '1'),
(764, 6, 75, 'Warehouse Forklifts', '1'),
(765, 6, 76, 'Augers', '1'),
(766, 6, 76, 'Chain Saws', '1'),
(767, 6, 76, 'Lawn Equipment', '1'),
(768, 6, 76, 'Chippers & Stumpers', '1'),
(769, 6, 76, 'Tillers', '1'),
(770, 6, 77, 'Diesel Generators', '1'),
(771, 6, 77, 'Portable Generators', '1'),
(772, 6, 77, 'Portable Work Lights', '1'),
(773, 6, 77, 'Towable Light Towers', '1'),
(774, 6, 78, 'Barricades & Signs', '1'),
(775, 6, 78, 'Ground Heaters', '1'),
(776, 6, 78, 'Plumbing Snakes', '1'),
(777, 6, 78, 'Storage Containers', '1'),
(778, 6, 79, 'Benders', '1'),
(779, 6, 79, 'Flange Spreaders & Crimping', '1'),
(780, 6, 79, 'Pipe Stands', '1'),
(781, 6, 79, 'Pipe Threaders & Accessories', '1'),
(782, 6, 79, 'Pipecutting', '1'),
(783, 6, 80, 'Portable Restrooms', '1'),
(784, 6, 81, 'Air Conditioners', '1'),
(785, 6, 81, 'Chillers', '1'),
(786, 6, 81, 'Dehumidifiers', '1'),
(787, 6, 81, 'Diesel Generators', '1'),
(788, 6, 81, 'Fans & Blowers', '1'),
(789, 6, 81, 'Heaters', '1'),
(790, 6, 81, 'Load Banks', '1'),
(791, 6, 81, 'Power Distribution Equipment', '1'),
(792, 6, 81, 'Transformers', '1'),
(793, 6, 82, 'Additional Products', '1'),
(794, 6, 82, 'Diaphragm Pumps', '1'),
(795, 6, 82, 'Hydraulic Pumps', '1'),
(796, 6, 82, 'Pump Hose', '1'),
(797, 6, 82, 'Small Portable Pumps', '1'),
(798, 6, 82, 'Containment Berms', '1'),
(799, 6, 82, 'Pump Pipe', '1'),
(800, 6, 82, 'Wellpoint Pumps', '1'),
(801, 6, 82, 'Vac Assist Diesel Driven Pumps', '1'),
(802, 6, 83, 'Carpet Installation', '1'),
(803, 6, 83, 'Sweepers', '1'),
(804, 6, 83, 'Polishers & Scrubbers', '1'),
(805, 6, 83, 'Pressure Washers', '1'),
(806, 6, 83, 'Sanders & Strippers', '1'),
(807, 6, 83, 'Vacuums', '1'),
(808, 6, 84, 'Bits & Blades', '1'),
(809, 6, 84, 'Fan/Blower', '1'),
(810, 6, 84, 'Drills', '1'),
(811, 6, 84, 'Electric Tool', '1'),
(812, 6, 84, 'Hand-Held Electric Sanders & Grinders', '1'),
(813, 6, 84, 'Handtools', '1'),
(814, 6, 84, 'Hoist', '1'),
(815, 6, 84, 'Hydraulic', '1'),
(816, 6, 84, 'Hydraulic Torquing', '1'),
(817, 6, 84, 'Impact Wrenches', '1'),
(818, 6, 84, 'Levels & Leveling Lasers', '1'),
(819, 6, 84, 'Lighting', '1'),
(820, 6, 84, 'Other Equipment', '1'),
(821, 6, 84, 'Pipe/Conduit', '1'),
(822, 6, 84, 'Pneumatic', '1'),
(823, 6, 84, 'Rock Splitters & Breakers', '1'),
(824, 6, 84, 'Rotary Hammers', '1'),
(825, 6, 84, 'Saws', '1'),
(826, 6, 84, 'Welding', '1'),
(827, 6, 85, 'Aluminum Boxes/Shields', '1'),
(828, 6, 85, 'Sheeting', '1'),
(829, 6, 85, 'Arch Spreaders', '1'),
(830, 6, 85, 'Bedding / Rock Boxes', '1'),
(831, 6, 85, 'Confined Space Entry & Rescue Equipment', '1'),
(832, 6, 85, 'Construction Lasers & Equipment', '1'),
(833, 6, 85, 'Guard Rail', '1'),
(834, 6, 85, 'Hydraulic Shoring', '1'),
(835, 6, 85, 'Manhole Boxes / Shields', '1'),
(836, 6, 85, 'Pipe Plugs & Testing Equipment', '1'),
(837, 6, 85, 'Road/Crossing Plates', '1'),
(838, 6, 85, 'Trench Boxes / Shields', '1'),
(839, 6, 86, 'Agricultural Truck', '1'),
(840, 6, 86, 'Pickup Truck', '1'),
(841, 6, 86, 'Tow Truck', '1'),
(842, 6, 86, 'Tractor', '1'),
(843, 6, 86, 'Trailers', '1'),
(844, 6, 86, 'Trucks', '1'),
(845, 6, 86, 'Utility Vehicle Attachment', '1'),
(846, 6, 86, 'Utility Vehicles', '1'),
(847, 6, 87, 'Welders', '1'),
(848, 6, 87, 'Welder Accessories', '1'),
(849, 7, 88, 'Bean Bag L', '1'),
(850, 7, 88, 'Bean Bag Xl', '1'),
(851, 7, 88, 'Bean Bag Xxl', '1'),
(852, 7, 89, 'Double Beds', '1'),
(853, 7, 89, 'Mattress', '1'),
(854, 7, 89, 'Single Beds', '1'),
(855, 7, 89, 'Event Bedding', '1'),
(856, 7, 90, 'Floor Lamps', '1'),
(857, 7, 90, 'Tripod Lamps', '1'),
(858, 7, 90, 'Table Lamps', '1'),
(859, 7, 90, 'Event Decor', '1'),
(860, 7, 90, 'Tabletop Decor & Centerpieces', '1'),
(861, 7, 91, 'Footstool', '1'),
(862, 7, 91, 'Ottomans', '1'),
(863, 7, 91, 'Pouffes', '1'),
(864, 7, 92, 'Outdoor Benches & Stools', '1'),
(865, 7, 92, 'Outdoor Furniture Set', '1'),
(866, 7, 92, 'Outdoor Tables', '1'),
(867, 7, 92, 'Sunloungers', '1'),
(868, 7, 92, 'Umbrellas, Canopies & Shade', '1'),
(869, 7, 92, 'Gazebos', '1'),
(870, 7, 92, 'Marquees', '1'),
(871, 7, 92, 'Marquee Accessories', '1'),
(872, 7, 92, 'Tents', '1'),
(873, 7, 93, 'Egg Swing', '1'),
(874, 7, 93, 'Papasan Chair', '1'),
(875, 7, 94, 'Couches', '1'),
(876, 7, 94, 'Recliner', '1'),
(877, 7, 94, 'Sofas', '1'),
(878, 7, 95, 'Cabinets', '1'),
(879, 7, 95, 'Chest Of Drawers', '1'),
(880, 7, 95, 'Dressers', '1'),
(881, 7, 95, 'Entertainment Units', '1'),
(882, 7, 95, 'Racks', '1'),
(883, 7, 95, 'Shelves', '1'),
(884, 7, 95, 'Wardrobe', '1'),
(885, 7, 96, 'Center Table', '1'),
(886, 7, 96, 'Chairs', '1'),
(887, 7, 96, 'Dining Table', '1'),
(888, 7, 96, 'Dressing Table', '1'),
(889, 7, 96, 'Side Table', '1'),
(890, 7, 96, 'Study Table', '1'),
(891, 7, 96, 'Event Tables & Chairs', '1'),
(892, 7, 97, 'Backdrops', '1'),
(893, 7, 97, 'Bars', '1'),
(894, 7, 97, 'Bead & Crystal', '1'),
(895, 7, 97, 'Ceiling Decor', '1'),
(896, 7, 97, 'Chair Covers', '1'),
(897, 7, 97, 'Event Curtains & Drapes', '1'),
(898, 7, 97, 'Flooring', '1'),
(899, 7, 97, 'Florals And Floral Supplies', '1'),
(900, 7, 97, 'Led Furniture', '1'),
(901, 7, 97, 'Other Furniture', '1'),
(902, 7, 97, 'Scratch & Dent', '1'),
(903, 7, 97, 'Seating', '1'),
(904, 7, 97, 'Table Linens & Table Skirts', '1'),
(905, 7, 98, 'Display Cabinets / Fridges', '1'),
(906, 7, 98, 'Hot Plates', '1'),
(907, 7, 98, 'Walk-In Fridge Trailers', '1'),
(908, 7, 98, 'Cooking Equipment', '1'),
(909, 7, 98, 'Cutlery, Crockery & Glassware', '1'),
(910, 7, 98, 'Other Catering Equipment', '1'),
(911, 8, 99, 'Aprilia', '1'),
(912, 8, 99, 'Bajaj', '1'),
(913, 8, 99, 'Benelli', '1'),
(914, 8, 99, 'Bmw', '1'),
(915, 8, 99, 'Ducati', '1'),
(916, 8, 99, 'Harley-Davidson', '1'),
(917, 8, 99, 'Hero', '1'),
(918, 8, 99, 'Honda India', '1'),
(919, 8, 99, 'Hysoung', '1'),
(920, 8, 99, 'Indian Motorcycle', '1'),
(921, 8, 99, 'Kawasaki', '1'),
(922, 8, 99, 'Ktm', '1'),
(923, 8, 99, 'Mahindra', '1'),
(924, 8, 99, 'Moto Guzzi', '1'),
(925, 8, 99, 'Mv Agusta India', '1'),
(926, 8, 99, 'Norton India', '1'),
(927, 8, 99, 'Royal Enfield', '1'),
(928, 8, 99, 'Suzuki', '1'),
(929, 8, 99, 'Triumph India', '1'),
(930, 8, 99, 'Tvs', '1'),
(931, 8, 99, 'Um', '1'),
(932, 8, 99, 'Vespa', '1'),
(933, 8, 99, 'Yamaha', '1'),
(934, 8, 100, 'Aprilia', '1'),
(935, 8, 100, 'Bajaj', '1'),
(936, 8, 100, 'Benelli', '1'),
(937, 8, 100, 'Bmw', '1'),
(938, 8, 100, 'Ducati', '1'),
(939, 8, 100, 'Harley-Davidson', '1'),
(940, 8, 100, 'Hero', '1'),
(941, 8, 100, 'Honda India', '1'),
(942, 8, 100, 'Hysoung', '1'),
(943, 8, 100, 'Indian Motorcycle', '1'),
(944, 8, 100, 'Kawasaki', '1'),
(945, 8, 100, 'Ktm', '1'),
(946, 8, 100, 'Mahindra', '1'),
(947, 8, 100, 'Moto Guzzi', '1'),
(948, 8, 100, 'Mv Agusta India', '1'),
(949, 8, 100, 'Norton India', '1'),
(950, 8, 100, 'Royal Enfield', '1'),
(951, 8, 100, 'Suzuki', '1'),
(952, 8, 100, 'Triumph India', '1'),
(953, 8, 100, 'Tvs', '1'),
(954, 8, 100, 'Um', '1'),
(955, 8, 100, 'Vespa', '1'),
(956, 8, 100, 'Yamaha', '1'),
(957, 8, 101, 'Aprilia', '1'),
(958, 8, 101, 'Bajaj', '1'),
(959, 8, 101, 'Benelli', '1'),
(960, 8, 101, 'Bmw', '1'),
(961, 8, 101, 'Ducati', '1'),
(962, 8, 101, 'Harley-Davidson', '1'),
(963, 8, 101, 'Hero', '1'),
(964, 8, 101, 'Honda India', '1'),
(965, 8, 101, 'Hysoung', '1'),
(966, 8, 101, 'Indian Motorcycle', '1'),
(967, 8, 101, 'Kawasaki', '1'),
(968, 8, 101, 'Ktm', '1'),
(969, 8, 101, 'Mahindra', '1'),
(970, 8, 101, 'Moto Guzzi', '1'),
(971, 8, 101, 'Mv Agusta India', '1'),
(972, 8, 101, 'Norton India', '1'),
(973, 8, 101, 'Royal Enfield', '1'),
(974, 8, 101, 'Suzuki', '1'),
(975, 8, 101, 'Triumph India', '1'),
(976, 8, 101, 'Tvs', '1'),
(977, 8, 101, 'Um', '1'),
(978, 8, 101, 'Vespa', '1'),
(979, 8, 101, 'Yamaha', '1'),
(980, 8, 102, 'Aprilia', '1'),
(981, 8, 102, 'Bajaj', '1'),
(982, 8, 102, 'Benelli', '1'),
(983, 8, 102, 'Bmw', '1'),
(984, 8, 102, 'Ducati', '1'),
(985, 8, 102, 'Harley-Davidson', '1'),
(986, 8, 102, 'Hero', '1'),
(987, 8, 102, 'Honda India', '1'),
(988, 8, 102, 'Hysoung', '1'),
(989, 8, 102, 'Indian Motorcycle', '1'),
(990, 8, 102, 'Kawasaki', '1'),
(991, 8, 102, 'Ktm', '1'),
(992, 8, 102, 'Mahindra', '1'),
(993, 8, 102, 'Moto Guzzi', '1'),
(994, 8, 102, 'Mv Agusta India', '1'),
(995, 8, 102, 'Norton India', '1'),
(996, 8, 102, 'Royal Enfield', '1'),
(997, 8, 102, 'Suzuki', '1'),
(998, 8, 102, 'Triumph India', '1'),
(999, 8, 102, 'Tvs', '1'),
(1000, 8, 102, 'Um', '1'),
(1001, 8, 102, 'Vespa', '1'),
(1002, 8, 102, 'Yamaha', '1'),
(1003, 8, 103, 'Aprilia', '1'),
(1004, 8, 103, 'Bajaj', '1'),
(1005, 8, 103, 'Benelli', '1'),
(1006, 8, 103, 'Bmw', '1'),
(1007, 8, 103, 'Ducati', '1'),
(1008, 8, 103, 'Harley-Davidson', '1'),
(1009, 8, 103, 'Hero', '1'),
(1010, 8, 103, 'Honda India', '1'),
(1011, 8, 103, 'Hysoung', '1'),
(1012, 8, 103, 'Indian Motorcycle', '1'),
(1013, 8, 103, 'Kawasaki', '1'),
(1014, 8, 103, 'Ktm', '1'),
(1015, 8, 103, 'Mahindra', '1'),
(1016, 8, 103, 'Moto Guzzi', '1'),
(1017, 8, 103, 'Mv Agusta India', '1'),
(1018, 8, 103, 'Norton India', '1'),
(1019, 8, 103, 'Royal Enfield', '1'),
(1020, 8, 103, 'Suzuki', '1'),
(1021, 8, 103, 'Triumph India', '1'),
(1022, 8, 103, 'Tvs', '1'),
(1023, 8, 103, 'Um', '1'),
(1024, 8, 103, 'Vespa', '1'),
(1025, 8, 103, 'Yamaha', '1'),
(1026, 9, 104, 'Abarth', '1'),
(1027, 9, 104, 'Aston Martin', '1'),
(1028, 9, 104, 'Audi', '1'),
(1029, 9, 104, 'Bentley', '1'),
(1030, 9, 104, 'Bmw', '1'),
(1031, 9, 104, 'Bugatti', '1'),
(1032, 9, 104, 'Conquest', '1'),
(1033, 9, 104, 'Datsun', '1'),
(1034, 9, 104, 'Dc', '1'),
(1035, 9, 104, 'Ferrari', '1'),
(1036, 9, 104, 'Fiat', '1'),
(1037, 9, 104, 'Force', '1'),
(1038, 9, 104, 'Ford', '1'),
(1039, 9, 104, 'Honda', '1'),
(1040, 9, 104, 'Hyundai', '1'),
(1041, 9, 104, 'Icml', '1'),
(1042, 9, 104, 'Isuzu', '1'),
(1043, 9, 104, 'Jaguar', '1'),
(1044, 9, 104, 'Jeep', '1'),
(1045, 9, 104, 'Lamborghini', '1'),
(1046, 9, 104, 'Land Rover', '1'),
(1047, 9, 104, 'Lexus', '1'),
(1048, 9, 104, 'Mahindra', '1'),
(1049, 9, 104, 'Mahindra Ssangyong', '1'),
(1050, 9, 104, 'Maruti', '1'),
(1051, 9, 104, 'Maserati', '1'),
(1052, 9, 104, 'Mercedes-Benz', '1'),
(1053, 9, 104, 'Mini', '1'),
(1054, 9, 104, 'Mitsubishi', '1'),
(1055, 9, 104, 'Nissan', '1'),
(1056, 9, 104, 'Porsche', '1'),
(1057, 9, 104, 'Premier', '1'),
(1058, 9, 104, 'Renault', '1'),
(1059, 9, 104, 'Rolls-Royce', '1'),
(1060, 9, 104, 'Skoda', '1'),
(1061, 9, 104, 'Tata', '1'),
(1062, 9, 104, 'Tesla', '1'),
(1063, 9, 104, 'Toyota', '1'),
(1064, 9, 104, 'Volkswagen', '1'),
(1065, 9, 104, 'Volvo', '1'),
(1066, 9, 105, 'Abarth', '1'),
(1067, 9, 105, 'Aston Martin', '1'),
(1068, 9, 105, 'Audi', '1'),
(1069, 9, 105, 'Bentley', '1'),
(1070, 9, 105, 'Bmw', '1'),
(1071, 9, 105, 'Bugatti', '1'),
(1072, 9, 105, 'Conquest', '1'),
(1073, 9, 105, 'Datsun', '1'),
(1074, 9, 105, 'Dc', '1'),
(1075, 9, 105, 'Ferrari', '1'),
(1076, 9, 105, 'Fiat', '1'),
(1077, 9, 105, 'Force', '1'),
(1078, 9, 105, 'Ford', '1'),
(1079, 9, 105, 'Honda', '1'),
(1080, 9, 105, 'Hyundai', '1'),
(1081, 9, 105, 'Icml', '1'),
(1082, 9, 105, 'Isuzu', '1'),
(1083, 9, 105, 'Jaguar', '1'),
(1084, 9, 105, 'Jeep', '1'),
(1085, 9, 105, 'Lamborghini', '1'),
(1086, 9, 105, 'Land Rover', '1'),
(1087, 9, 105, 'Lexus', '1'),
(1088, 9, 105, 'Mahindra', '1'),
(1089, 9, 105, 'Mahindra Ssangyong', '1'),
(1090, 9, 105, 'Maruti', '1'),
(1091, 9, 105, 'Maserati', '1'),
(1092, 9, 105, 'Mercedes-Benz', '1'),
(1093, 9, 105, 'Mini', '1'),
(1094, 9, 105, 'Mitsubishi', '1'),
(1095, 9, 105, 'Nissan', '1'),
(1096, 9, 105, 'Porsche', '1'),
(1097, 9, 105, 'Premier', '1'),
(1098, 9, 105, 'Renault', '1'),
(1099, 9, 105, 'Rolls-Royce', '1'),
(1100, 9, 105, 'Skoda', '1'),
(1101, 9, 105, 'Tata', '1'),
(1102, 9, 105, 'Tesla', '1'),
(1103, 9, 105, 'Toyota', '1'),
(1104, 9, 105, 'Volkswagen', '1'),
(1105, 9, 105, 'Volvo', '1'),
(1106, 9, 106, 'Abarth', '1'),
(1107, 9, 106, 'Aston Martin', '1'),
(1108, 9, 106, 'Audi', '1'),
(1109, 9, 106, 'Bentley', '1'),
(1110, 9, 106, 'Bmw', '1'),
(1111, 9, 106, 'Bugatti', '1'),
(1112, 9, 106, 'Conquest', '1'),
(1113, 9, 106, 'Datsun', '1'),
(1114, 9, 106, 'Dc', '1'),
(1115, 9, 106, 'Ferrari', '1'),
(1116, 9, 106, 'Fiat', '1'),
(1117, 9, 106, 'Force', '1'),
(1118, 9, 106, 'Ford', '1'),
(1119, 9, 106, 'Honda', '1'),
(1120, 9, 106, 'Hyundai', '1'),
(1121, 9, 106, 'Icml', '1'),
(1122, 9, 106, 'Isuzu', '1'),
(1123, 9, 106, 'Jaguar', '1'),
(1124, 9, 106, 'Jeep', '1'),
(1125, 9, 106, 'Lamborghini', '1'),
(1126, 9, 106, 'Land Rover', '1'),
(1127, 9, 106, 'Lexus', '1'),
(1128, 9, 106, 'Mahindra', '1'),
(1129, 9, 106, 'Mahindra Ssangyong', '1'),
(1130, 9, 106, 'Maruti', '1'),
(1131, 9, 106, 'Maserati', '1'),
(1132, 9, 106, 'Mercedes-Benz', '1'),
(1133, 9, 106, 'Mini', '1'),
(1134, 9, 106, 'Mitsubishi', '1'),
(1135, 9, 106, 'Nissan', '1'),
(1136, 9, 106, 'Porsche', '1'),
(1137, 9, 106, 'Premier', '1'),
(1138, 9, 106, 'Renault', '1'),
(1139, 9, 106, 'Rolls-Royce', '1'),
(1140, 9, 106, 'Skoda', '1'),
(1141, 9, 106, 'Tata', '1'),
(1142, 9, 106, 'Tesla', '1'),
(1143, 9, 106, 'Toyota', '1'),
(1144, 9, 106, 'Volkswagen', '1'),
(1145, 9, 106, 'Volvo', '1'),
(1146, 9, 107, 'Abarth', '1'),
(1147, 9, 107, 'Aston Martin', '1'),
(1148, 9, 107, 'Audi', '1'),
(1149, 9, 107, 'Bentley', '1'),
(1150, 9, 107, 'Bmw', '1'),
(1151, 9, 107, 'Bugatti', '1'),
(1152, 9, 107, 'Conquest', '1'),
(1153, 9, 107, 'Datsun', '1'),
(1154, 9, 107, 'Dc', '1'),
(1155, 9, 107, 'Ferrari', '1'),
(1156, 9, 107, 'Fiat', '1'),
(1157, 9, 107, 'Force', '1'),
(1158, 9, 107, 'Ford', '1'),
(1159, 9, 107, 'Honda', '1'),
(1160, 9, 107, 'Hyundai', '1'),
(1161, 9, 107, 'Icml', '1'),
(1162, 9, 107, 'Isuzu', '1'),
(1163, 9, 107, 'Jaguar', '1'),
(1164, 9, 107, 'Jeep', '1'),
(1165, 9, 107, 'Lamborghini', '1'),
(1166, 9, 107, 'Land Rover', '1'),
(1167, 9, 107, 'Lexus', '1'),
(1168, 9, 107, 'Mahindra', '1'),
(1169, 9, 107, 'Mahindra Ssangyong', '1'),
(1170, 9, 107, 'Maruti', '1'),
(1171, 9, 107, 'Maserati', '1'),
(1172, 9, 107, 'Mercedes-Benz', '1'),
(1173, 9, 107, 'Mini', '1'),
(1174, 9, 107, 'Mitsubishi', '1'),
(1175, 9, 107, 'Nissan', '1'),
(1176, 9, 107, 'Porsche', '1'),
(1177, 9, 107, 'Premier', '1'),
(1178, 9, 107, 'Renault', '1'),
(1179, 9, 107, 'Rolls-Royce', '1'),
(1180, 9, 107, 'Skoda', '1'),
(1181, 9, 107, 'Tata', '1'),
(1182, 9, 107, 'Tesla', '1'),
(1183, 9, 107, 'Toyota', '1'),
(1184, 9, 107, 'Volkswagen', '1'),
(1185, 9, 107, 'Volvo', '1'),
(1186, 9, 108, 'Abarth', '1'),
(1187, 9, 108, 'Aston Martin', '1'),
(1188, 9, 108, 'Audi', '1'),
(1189, 9, 108, 'Bentley', '1'),
(1190, 9, 108, 'Bmw', '1'),
(1191, 9, 108, 'Bugatti', '1'),
(1192, 9, 108, 'Conquest', '1'),
(1193, 9, 108, 'Datsun', '1'),
(1194, 9, 108, 'Dc', '1'),
(1195, 9, 108, 'Ferrari', '1'),
(1196, 9, 108, 'Fiat', '1'),
(1197, 9, 108, 'Force', '1'),
(1198, 9, 108, 'Ford', '1'),
(1199, 9, 108, 'Honda', '1'),
(1200, 9, 108, 'Hyundai', '1'),
(1201, 9, 108, 'Icml', '1'),
(1202, 9, 108, 'Isuzu', '1'),
(1203, 9, 108, 'Jaguar', '1'),
(1204, 9, 108, 'Jeep', '1'),
(1205, 9, 108, 'Lamborghini', '1'),
(1206, 9, 108, 'Land Rover', '1'),
(1207, 9, 108, 'Lexus', '1'),
(1208, 9, 108, 'Mahindra', '1'),
(1209, 9, 108, 'Mahindra Ssangyong', '1'),
(1210, 9, 108, 'Maruti', '1'),
(1211, 9, 108, 'Maserati', '1'),
(1212, 9, 108, 'Mercedes-Benz', '1'),
(1213, 9, 108, 'Mini', '1'),
(1214, 9, 108, 'Mitsubishi', '1'),
(1215, 9, 108, 'Nissan', '1'),
(1216, 9, 108, 'Porsche', '1'),
(1217, 9, 108, 'Premier', '1'),
(1218, 9, 108, 'Renault', '1'),
(1219, 9, 108, 'Rolls-Royce', '1'),
(1220, 9, 108, 'Skoda', '1'),
(1221, 9, 108, 'Tata', '1'),
(1222, 9, 108, 'Tesla', '1'),
(1223, 9, 108, 'Toyota', '1'),
(1224, 9, 108, 'Volkswagen', '1'),
(1225, 9, 108, 'Volvo', '1'),
(1226, 9, 109, 'Abarth', '1'),
(1227, 9, 109, 'Aston Martin', '1'),
(1228, 9, 109, 'Audi', '1'),
(1229, 9, 109, 'Bentley', '1'),
(1230, 9, 109, 'Bmw', '1'),
(1231, 9, 109, 'Bugatti', '1'),
(1232, 9, 109, 'Conquest', '1'),
(1233, 9, 109, 'Datsun', '1'),
(1234, 9, 109, 'Dc', '1'),
(1235, 9, 109, 'Ferrari', '1'),
(1236, 9, 109, 'Fiat', '1'),
(1237, 9, 109, 'Force', '1'),
(1238, 9, 109, 'Ford', '1'),
(1239, 9, 109, 'Honda', '1'),
(1240, 9, 109, 'Hyundai', '1'),
(1241, 9, 109, 'Icml', '1'),
(1242, 9, 109, 'Isuzu', '1'),
(1243, 9, 109, 'Jaguar', '1'),
(1244, 9, 109, 'Jeep', '1'),
(1245, 9, 109, 'Lamborghini', '1'),
(1246, 9, 109, 'Land Rover', '1'),
(1247, 9, 109, 'Lexus', '1'),
(1248, 9, 109, 'Mahindra', '1'),
(1249, 9, 109, 'Mahindra Ssangyong', '1'),
(1250, 9, 109, 'Maruti', '1'),
(1251, 9, 109, 'Maserati', '1'),
(1252, 9, 109, 'Mercedes-Benz', '1'),
(1253, 9, 109, 'Mini', '1'),
(1254, 9, 109, 'Mitsubishi', '1'),
(1255, 9, 109, 'Nissan', '1'),
(1256, 9, 109, 'Porsche', '1'),
(1257, 9, 109, 'Premier', '1'),
(1258, 9, 109, 'Renault', '1'),
(1259, 9, 109, 'Rolls-Royce', '1'),
(1260, 9, 109, 'Skoda', '1'),
(1261, 9, 109, 'Tata', '1'),
(1262, 9, 109, 'Tesla', '1'),
(1263, 9, 109, 'Toyota', '1'),
(1264, 9, 109, 'Volkswagen', '1'),
(1265, 9, 109, 'Volvo', '1'),
(1266, 9, 110, 'Motorhomes', '1'),
(1267, 9, 110, 'Towable Rvs', '1'),
(1268, 9, 111, 'Dune Buggy', '1'),
(1269, 9, 111, 'Atvs', '1'),
(1270, 9, 111, 'Sandrail', '1'),
(1271, 9, 111, 'Tomcar', '1'),
(1272, 9, 111, 'Ohv/Utv/ Side-By-Side', '1'),
(1273, 9, 112, 'Snowbikes', '1'),
(1274, 9, 112, 'Snowmobile', '1'),
(1275, 9, 113, 'Limousine(Limos)', '1'),
(1276, 9, 113, 'Minivan', '1'),
(1277, 9, 113, 'Passenger Bus', '1'),
(1278, 9, 113, 'Passenger Car Or Van', '1'),
(1279, 9, 114, 'Airplanes', '1'),
(1280, 9, 114, 'Blimps', '1'),
(1281, 9, 114, 'Gliders', '1'),
(1282, 9, 114, 'Helicopters', '1'),
(1283, 9, 114, 'Hot Air Balloons', '1'),
(1284, 9, 114, 'Jets', '1'),
(1285, 9, 114, 'Parachuting', '1'),
(1286, 9, 115, 'Motor Yachts', '1'),
(1287, 9, 115, 'Sail Yachts', '1'),
(1288, 9, 115, 'Speed Boats', '1'),
(1289, 9, 115, 'Sail Boats', '1'),
(1290, 9, 115, 'Cruisers', '1'),
(1291, 9, 115, 'Party Yachts', '1'),
(1292, 9, 115, 'Pontoon', '1'),
(1293, 9, 115, 'Houseboat', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `subcat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_name` varchar(50) NOT NULL,
  `subcat_status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`subcat_id`, `cat_id`, `subcat_name`, `subcat_status`) VALUES
(1, 1, 'Eat', '1'),
(2, 1, 'Bed', '1'),
(3, 1, 'Play Time', '1'),
(4, 1, 'Bath&Clean', '1'),
(5, 1, 'Strollers', '1'),
(6, 1, 'Car Seats', '1'),
(7, 2, 'Bathroom Safety', '1'),
(8, 2, 'Furniture', '1'),
(9, 2, 'Patient Lifts', '1'),
(10, 2, 'Ramps & Accessories', '1'),
(11, 2, 'Respiratory', '1'),
(12, 2, 'Scooters', '1'),
(13, 2, 'Walkers', '1'),
(14, 2, 'Wheelchairs', '1'),
(15, 3, 'Air Conditioner', '1'),
(16, 3, 'Fans and Coolers', '1'),
(17, 3, 'Home Appliances', '1'),
(18, 3, 'Kitchen Appliances ', '1'),
(19, 3, 'Microwave Ovens and Ots', '1'),
(20, 3, 'Oven & Cooktops', '1'),
(21, 3, 'Refrigerator & Freezers', '1'),
(22, 3, 'Small Kitchen Appliances', '1'),
(23, 3, 'Television', '1'),
(24, 3, 'Vacuum Cleaners', '1'),
(25, 3, 'Voice Assistant', '1'),
(26, 3, 'Washing Machine and Dryers', '1'),
(27, 4, 'Arts, Music & Photography', '1'),
(28, 4, 'Biography', '1'),
(29, 4, 'Business & Investing', '1'),
(30, 4, 'Children''s', '1'),
(31, 4, 'Western', '1'),
(32, 4, 'Comics & Graphic Novels', '1'),
(33, 4, 'Computers & Technology', '1'),
(34, 4, 'Cooking', '1'),
(35, 4, 'Hobbies & Crafts', '1'),
(36, 4, 'Education & Reference', '1'),
(37, 4, 'Gay & Lesbian', '1'),
(38, 4, 'Health & Fitness', '1'),
(39, 4, 'History', '1'),
(40, 4, 'Home & Garden', '1'),
(41, 4, 'Horror', '1'),
(42, 4, 'Humor & Entertainment', '1'),
(43, 4, 'Literature & Fiction', '1'),
(44, 4, 'Medical', '1'),
(45, 4, 'Mystery, Thriller & Suspense', '1'),
(46, 4, 'Parenting', '1'),
(47, 4, 'Politics & Social Sciences', '1'),
(48, 4, 'Religion & Spirituality', '1'),
(49, 4, 'Romance', '1'),
(50, 4, 'Science & Math', '1'),
(51, 4, 'Sci-Fi & Fantasy', '1'),
(52, 4, 'Self-Help', '1'),
(53, 4, 'Sports & Outdoors', '1'),
(54, 4, 'Teen & Young Adult', '1'),
(55, 4, 'Travel', '1'),
(56, 4, 'True Crime', '1'),
(57, 5, 'Styles', '1'),
(58, 5, 'Accessories', '1'),
(59, 5, 'Bottoms', '1'),
(60, 5, 'Ethnic', '1'),
(61, 5, 'Fancy Dress', '1'),
(62, 5, 'Gowns', '1'),
(63, 5, 'Jackets & Coats', '1'),
(64, 5, 'Jewellery', '1'),
(65, 5, 'Jumpsuits & Rompers', '1'),
(66, 5, 'MATERNITY', '1'),
(67, 5, 'Men', '1'),
(68, 5, 'Tops', '1'),
(69, 5, 'Western', '1'),
(70, 6, 'Aerial Work Platforms', '1'),
(71, 6, 'Air Compressors & Air Tools', '1'),
(72, 6, 'Compaction', '1'),
(73, 6, 'Concrete & Masonry', '1'),
(74, 6, 'Earthmoving Equipment', '1'),
(75, 6, 'Forklifts & Material Handling', '1'),
(76, 6, 'Lawn & Landscape', '1'),
(77, 6, 'Light Towers & Generators', '1'),
(78, 6, 'Other Equipment', '1'),
(79, 6, 'Plumbing/Pipe/Conduit', '1'),
(80, 6, 'Portable Sanitation Services', '1'),
(81, 6, 'Power & HVAC', '1'),
(82, 6, 'Pumps & Accessories', '1'),
(83, 6, 'Surface Preparation', '1'),
(84, 6, 'Tools - Power, Hand & Surveying', '1'),
(85, 6, 'Trench Safety & Shoring', '1'),
(86, 6, 'Trucks & Trailers', '1'),
(87, 6, 'Welders & Accessories', '1'),
(88, 7, 'Bean Bags', '1'),
(89, 7, 'Bed', '1'),
(90, 7, 'Decor(Lamp & Accessories)', '1'),
(91, 7, 'Ottomans', '1'),
(92, 7, 'Outdoor Furniture', '1'),
(93, 7, 'Patio Furniture', '1'),
(94, 7, 'Sofas & Recliners', '1'),
(95, 7, 'Storage & TV units	', '1'),
(96, 7, 'Tables &Chairs', '1'),
(97, 7, 'Event Furniture ', '1'),
(98, 7, 'Catering Equipment', '1'),
(99, 8, 'Commuters', '1'),
(100, 8, 'Cruiser', '1'),
(101, 8, 'Scooters	', '1'),
(102, 8, 'Sports', '1'),
(103, 8, 'Off-road', '1'),
(104, 9, 'Convertible/Sports', '1'),
(105, 9, 'Coupe', '1'),
(106, 9, 'Crossover', '1'),
(107, 9, 'Hatchback', '1'),
(108, 9, 'MUV/SUV', '1'),
(109, 9, 'Sedan', '1'),
(110, 9, 'RVs', '1'),
(111, 9, 'Terrain', '1'),
(112, 9, 'Snow', '1'),
(113, 9, 'Commercial Vehicles', '1'),
(114, 9, 'Air', '1'),
(115, 9, 'YACHTS & BOATS ', '1'),
(116, 10, 'Gaming Consoles ', '1'),
(117, 10, 'Camping & Hiking', '1'),
(118, 10, 'Gym & Fitness', '1'),
(119, 10, 'Water Sports', '1'),
(120, 10, 'Winter Sports', '1'),
(121, 10, 'Table & Other Games', '1'),
(122, 10, 'Beach Sport', '1'),
(123, 10, 'Sports Package', '1'),
(124, 10, 'Biking', '1'),
(125, 10, 'Country Sports', '1'),
(126, 10, 'Air Sports', '1'),
(127, 11, 'Amps', '1'),
(128, 11, 'Brass', '1'),
(129, 11, 'Guitars', '1'),
(130, 11, 'Keyboards and Synthesisers', '1'),
(131, 11, 'Percussion', '1'),
(132, 11, 'String Instruments ', '1'),
(133, 11, 'Woodwind', '1'),
(134, 12, 'Cameras', '1'),
(135, 12, 'Computer', '1'),
(136, 12, 'Audio & DJ', '1'),
(137, 12, 'Microphones', '1'),
(138, 12, 'Displays & Monitors', '1'),
(139, 12, 'Personal Electronics', '1'),
(140, 12, 'Recording', '1'),
(141, 12, 'Speakers', '1'),
(142, 12, 'Camera Accessories', '1'),
(143, 12, 'Drones', '1'),
(144, 12, 'Lenses', '1'),
(145, 12, 'Lighting', '1'),
(146, 12, 'Projector', '1'),
(147, 13, 'Garage', '1'),
(148, 13, 'Parking Space', '1'),
(149, 13, 'Spare Room', '1'),
(150, 13, 'Loft', '1'),
(151, 13, 'Outhouse', '1'),
(152, 13, 'Driveway', '1'),
(153, 13, 'Undercover', '1'),
(154, 13, 'Indoor lot', '1'),
(155, 13, 'Outdoor lot', '1'),
(156, 13, 'Shed', '1'),
(157, 13, 'Attic', '1'),
(158, 13, 'Basement', '1'),
(159, 13, 'Bedroom', '1'),
(160, 13, 'Storage Cage', '1'),
(161, 13, 'Storage Room', '1'),
(162, 13, 'Warehouse', '1'),
(163, 13, 'Portable Container Storage', '1'),
(164, 13, 'Self-storage Facility', '1'),
(165, 14, 'Stalls', '1'),
(166, 14, 'Entertainment', '1');

-- --------------------------------------------------------

--
-- Table structure for table `timezones`
--

CREATE TABLE `timezones` (
  `id` int(11) NOT NULL,
  `value` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `timezones`
--

INSERT INTO `timezones` (`id`, `value`, `label`) VALUES
(1, '-12:00', '(GMT -12:00) Eniwetok, Kwajalein'),
(2, '-11:00', '(GMT -11:00) Midway Island, Samoa'),
(3, '-10:00', '(GMT -10:00) Hawaii'),
(4, '-09:50', '(GMT -9:30) Taiohae'),
(5, '-09:00', '(GMT -9:00) Alaska'),
(6, '-08:00', '(GMT -8:00) Pacific Time (US &amp; Canada)'),
(7, '-07:00', '(GMT -7:00) Mountain Time (US &amp; Canada)'),
(8, '-06:00', '(GMT -6:00) Central Time (US &amp; Canada), Mexico City'),
(9, '-05:00', '(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima'),
(10, '-04:50', '(GMT -4:30) Caracas'),
(11, '-04:00', '(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz'),
(12, '-03:50', '(GMT -3:30) Newfoundland'),
(13, '-03:00', '(GMT -3:00) Brazil, Buenos Aires, Georgetown'),
(14, '-02:00', '(GMT -2:00) Mid-Atlantic'),
(15, '-01:00', '(GMT -1:00) Azores, Cape Verde Islands'),
(16, '+00:00', '(GMT) Western Europe Time, London, Lisbon, Casablanca'),
(17, '+01:00', '(GMT +1:00) Brussels, Copenhagen, Madrid, Paris'),
(18, '+02:00', '(GMT +2:00) Kaliningrad, South Africa'),
(19, '+03:00', '(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg'),
(20, '+03:50', '(GMT +3:30) Tehran'),
(21, '+04:00', '(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi'),
(22, '+04:50', '(GMT +4:30) Kabul'),
(23, '+05:00', '(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent'),
(24, '+05:50', '(GMT +5:30) Bombay, Calcutta, Madras, New Delhi'),
(25, '+05:75', '(GMT +5:45) Kathmandu, Pokhar'),
(26, '+06:00', '(GMT +6:00) Almaty, Dhaka, Colombo'),
(27, '+06:50', '(GMT +6:30) Yangon, Mandalay'),
(28, '+07:00', '(GMT +7:00) Bangkok, Hanoi, Jakarta'),
(29, '+08:00', '(GMT +8:00) Beijing, Perth, Singapore, Hong Kong'),
(30, '+08:75', '(GMT +8:45) Eucla'),
(31, '+09:00', '(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk'),
(32, '+09:50', '(GMT +9:30) Adelaide, Darwin'),
(33, '+10:00', '(GMT +10:00) Eastern Australia, Guam, Vladivostok'),
(34, '+10:50', '(GMT +10:30) Lord Howe Island'),
(35, '+11:00', '(GMT +11:00) Magadan, Solomon Islands, New Caledonia'),
(36, '+11:50', '(GMT +11:30) Norfolk Island'),
(37, '+12:00', '(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka'),
(38, '+12:75', '(GMT +12:45) Chatham Islands'),
(39, '+13:00', '(GMT +13:00) Apia, Nukualofa'),
(40, '+14:00', '(GMT +14:00) Line Islands, Tokelau');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` enum('','facebook','google','twitter','email') COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_active` int(5) DEFAULT NULL,
  `mobile_active` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `gender` enum('Male','Female','Other') COLLATE utf8_unicode_ci DEFAULT NULL,
  `bob` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `mobile_no` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language_tag` varchar(80) COLLATE utf8_unicode_ci DEFAULT '0',
  `live` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `school` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `work` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` text COLLATE utf8_unicode_ci,
  `gst_no` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `picture`, `created`, `modified`, `password`, `email_active`, `mobile_active`, `gender`, `bob`, `country_id`, `mobile_no`, `city`, `language_tag`, `live`, `bio`, `school`, `work`, `timezone`, `gst_no`) VALUES
(2, 'facebook', '2147483647', 'Ashish', 'Sahu', 'ashishsahu25051997@gmail.com', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=914209268917373&height=50&width=50&ext=1566468262&hash=AeQc3NaQqlGwXpLy', '2019-07-11 19:49:40', '2019-07-23 12:01:36', NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'email', '2147483647', 'Ashish', 'Sahu', 'ashishsahu.n@gmail.com', 'uploads/profile/IMG_20170317_130320708.jpg', '2019-07-10 00:00:00', '2019-07-10 00:00:00', 'e095dd0a4bf6ee28ca79d6b8e1f7efd8', 1, '1', 'Male', '25/05/1997', 99, '9668045267', 'surat', '5,6,7,14', NULL, '', '', '', '24', 0),
(7, 'google', '108002987946946240367', 'Ashish', 'Sahu', 'ashishsahu25051997@gmail.com', 'https://lh3.googleusercontent.com/a-/AAuE7mAYn9tKx918bJ9reUEKXp8NjsFxB6JI6WjwGBl4fg', '2019-08-12 16:09:13', '2019-09-10 18:52:14', 'e095dd0a4bf6ee28ca79d6b8e1f7efd8', 1, '0', NULL, NULL, NULL, '9558045267', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'facebook', '914209268917373', 'Ashish', 'Sahu', 'ashishsahu25051997@gmail.com', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=914209268917373&height=50&width=50&ext=1569602259&hash=AeTzXoMVL-beCE85', '2019-08-28 08:56:54', '2019-08-28 18:33:59', NULL, 1, '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_adv_book_month`
--

CREATE TABLE `user_adv_book_month` (
  `useradvmonth_id` int(11) NOT NULL,
  `oauth_uid` varchar(50) NOT NULL,
  `item_id` int(11) NOT NULL,
  `advmonth_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_adv_book_month`
--

INSERT INTO `user_adv_book_month` (`useradvmonth_id`, `oauth_uid`, `item_id`, `advmonth_id`) VALUES
(1, '108002987946946240367', 2, 4),
(3, '108002987946946240367', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_documents`
--

CREATE TABLE `user_documents` (
  `udoc_id` int(11) NOT NULL,
  `oauth_uid` varchar(50) NOT NULL,
  `voter_id1` varchar(200) DEFAULT NULL,
  `voter_id2` varchar(200) DEFAULT NULL,
  `stu_emp_id1` varchar(200) DEFAULT NULL,
  `stu_emp_id2` varchar(200) DEFAULT NULL,
  `rent_bill1` varchar(200) DEFAULT NULL,
  `rent_bill2` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_bank_details`
--

CREATE TABLE `vendor_bank_details` (
  `ven_bank_id` int(11) NOT NULL,
  `ven_bank_account` varchar(30) NOT NULL,
  `ven_bank_country` int(11) NOT NULL,
  `ven_bank_currency` int(11) NOT NULL,
  `ven_bank_name` int(11) NOT NULL,
  `ven_bank_account_name` varchar(50) NOT NULL,
  `ven_bank_account_no` varchar(30) NOT NULL,
  `ven_bank_ifsc` varchar(20) NOT NULL,
  `ven_bank_pan` varchar(20) NOT NULL,
  `ven_bank_account_type` varchar(20) NOT NULL,
  `ven_bank_account_status` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_bank_details`
--

INSERT INTO `vendor_bank_details` (`ven_bank_id`, `ven_bank_account`, `ven_bank_country`, `ven_bank_currency`, `ven_bank_name`, `ven_bank_account_name`, `ven_bank_account_no`, `ven_bank_ifsc`, `ven_bank_pan`, `ven_bank_account_type`, `ven_bank_account_status`) VALUES
(1, 'Personal account', 1, 1, 1, 'Ashish Sahu', '123456789', 'ABCD01234A', 'AAAPA1234A', 'Current', '0'),
(2, 'Personal account', 1, 1, 1, 'Ashish Sahu', '12345678999', 'ABCD01234A', 'AAAPA1234A', 'Savings', '0'),
(3, 'Personal account', 1, 1, 1, 'Ashish Sahu', '12345678900', 'ABCD01234A', 'AAAPA1234A', 'Current', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `advance_booking_months`
--
ALTER TABLE `advance_booking_months`
  ADD PRIMARY KEY (`advmonth_id`);

--
-- Indexes for table `advance_booking_notice`
--
ALTER TABLE `advance_booking_notice`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `available_for_delivery`
--
ALTER TABLE `available_for_delivery`
  ADD PRIMARY KEY (`available_id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `booking_request`
--
ALTER TABLE `booking_request`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_item`
--
ALTER TABLE `create_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `hours`
--
ALTER TABLE `hours`
  ADD PRIMARY KEY (`hours_id`);

--
-- Indexes for table `id_verification`
--
ALTER TABLE `id_verification`
  ADD PRIMARY KEY (`verification_id`);

--
-- Indexes for table `instant_book`
--
ALTER TABLE `instant_book`
  ADD PRIMARY KEY (`instant_id`);

--
-- Indexes for table `item_address`
--
ALTER TABLE `item_address`
  ADD PRIMARY KEY (`random_itemno`);

--
-- Indexes for table `item_price`
--
ALTER TABLE `item_price`
  ADD PRIMARY KEY (`random_itemno`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`lan_id`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`month_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `open_hours`
--
ALTER TABLE `open_hours`
  ADD PRIMARY KEY (`open_id`);

--
-- Indexes for table `operator_be_available`
--
ALTER TABLE `operator_be_available`
  ADD PRIMARY KEY (`operator_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`policy_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `request_for_item`
--
ALTER TABLE `request_for_item`
  ADD PRIMARY KEY (`req_for_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `subcat_type`
--
ALTER TABLE `subcat_type`
  ADD PRIMARY KEY (`subtype_id`),
  ADD KEY `cat_id` (`cat_id`,`subcat_id`),
  ADD KEY `subcat_id` (`subcat_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `timezones`
--
ALTER TABLE `timezones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_adv_book_month`
--
ALTER TABLE `user_adv_book_month`
  ADD PRIMARY KEY (`useradvmonth_id`),
  ADD KEY `advmonth_id` (`advmonth_id`);

--
-- Indexes for table `user_documents`
--
ALTER TABLE `user_documents`
  ADD PRIMARY KEY (`udoc_id`);

--
-- Indexes for table `vendor_bank_details`
--
ALTER TABLE `vendor_bank_details`
  ADD PRIMARY KEY (`ven_bank_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `advance_booking_months`
--
ALTER TABLE `advance_booking_months`
  MODIFY `advmonth_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `advance_booking_notice`
--
ALTER TABLE `advance_booking_notice`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `available_for_delivery`
--
ALTER TABLE `available_for_delivery`
  MODIFY `available_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `booking_request`
--
ALTER TABLE `booking_request`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=779;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT for table `create_item`
--
ALTER TABLE `create_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hours`
--
ALTER TABLE `hours`
  MODIFY `hours_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `id_verification`
--
ALTER TABLE `id_verification`
  MODIFY `verification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `instant_book`
--
ALTER TABLE `instant_book`
  MODIFY `instant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `lan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `month_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `open_hours`
--
ALTER TABLE `open_hours`
  MODIFY `open_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `operator_be_available`
--
ALTER TABLE `operator_be_available`
  MODIFY `operator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8936525;
--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `policy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `request_for_item`
--
ALTER TABLE `request_for_item`
  MODIFY `req_for_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `subcat_type`
--
ALTER TABLE `subcat_type`
  MODIFY `subtype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1294;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
--
-- AUTO_INCREMENT for table `timezones`
--
ALTER TABLE `timezones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_adv_book_month`
--
ALTER TABLE `user_adv_book_month`
  MODIFY `useradvmonth_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_documents`
--
ALTER TABLE `user_documents`
  MODIFY `udoc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vendor_bank_details`
--
ALTER TABLE `vendor_bank_details`
  MODIFY `ven_bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcat_type`
--
ALTER TABLE `subcat_type`
  ADD CONSTRAINT `subcat_type_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subcat_type_ibfk_2` FOREIGN KEY (`subcat_id`) REFERENCES `sub_category` (`subcat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_adv_book_month`
--
ALTER TABLE `user_adv_book_month`
  ADD CONSTRAINT `user_adv_book_month_ibfk_1` FOREIGN KEY (`advmonth_id`) REFERENCES `advance_booking_months` (`advmonth_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
