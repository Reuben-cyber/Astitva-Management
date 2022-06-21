-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 02, 2021 at 05:09 PM
-- Server version: 10.4.18-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u290281649_astitvadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `sr` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `spent` varchar(100) NOT NULL,
  `received` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `sr`, `date`, `title`, `spent`, `received`, `event`, `photo`) VALUES
(1, 1, '10/5/21', 'Dummy', '20', '0', 'BUSINESS PLAN', 'd88de63f3cded2240cd36050a0327475.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `astitva_countries`
--

CREATE TABLE `astitva_countries` (
  `id` int(4) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `astitva_countries`
--

INSERT INTO `astitva_countries` (`id`, `country`) VALUES
(1, 'Afghanistan'),
(2, 'Algeria'),
(3, 'Andorra'),
(4, 'Antigua and Barbuda'),
(5, 'Armenia'),
(6, 'Australia'),
(7, 'Azerbaijan'),
(8, 'Albania'),
(9, 'American Samoa'),
(10, 'Angola'),
(11, 'Argentina'),
(12, 'Aruba'),
(13, 'Austria'),
(14, 'Bahamas'),
(15, 'Bangladesh'),
(16, 'Belarus'),
(17, 'Belize'),
(18, 'Bermuda'),
(19, 'Bolivia'),
(20, 'Botswana'),
(21, 'British Virgin Islands'),
(22, 'Bulgaria'),
(23, 'Burundi'),
(24, 'Bahrain'),
(25, 'Barbados'),
(26, 'Belgium'),
(27, 'Benin'),
(28, 'Bhutan'),
(29, 'Bosnia and Herzegovina'),
(30, 'Brazil'),
(31, 'Brunei Darussalam'),
(32, 'Burkina Faso'),
(33, 'Cabo Verde'),
(34, 'Cameroon'),
(35, 'Cayman Islands'),
(36, 'Chad'),
(37, 'Chile'),
(38, 'Colombia'),
(39, 'Congo'),
(40, 'Costa Rica'),
(41, 'Croatia'),
(42, 'Curacao'),
(43, 'Czech Republic'),
(44, 'Cambodia'),
(45, 'Canada'),
(46, 'Central African Republic'),
(47, 'Channel Islands'),
(48, 'China'),
(49, 'Comoros'),
(50, 'Cote d\'Ivoire'),
(51, 'Cuba'),
(52, 'Cyprus'),
(53, 'Denmark'),
(54, 'Dominica'),
(55, 'Djibouti'),
(56, 'Dominican Republic'),
(57, 'Ecuador'),
(58, 'El Salvador'),
(59, 'Eritrea'),
(60, 'Eswatini'),
(61, 'Egypt'),
(62, 'Equatorial Guinea'),
(63, 'Estonia'),
(64, 'Ethiopia'),
(65, 'Faroe Islands'),
(66, 'Finland'),
(67, 'French Polynesia'),
(68, 'Fiji'),
(69, 'France'),
(70, 'Gabon'),
(71, 'Georgia'),
(72, 'Ghana'),
(73, 'Greece'),
(74, 'Grenada'),
(75, 'Guatemala'),
(76, 'Guinea-Bissau'),
(77, 'Gambia'),
(78, 'Germany'),
(79, 'Gibraltar'),
(80, 'Greenland'),
(81, 'Guam'),
(82, 'Guinea'),
(83, 'Guyana'),
(84, 'Haiti'),
(85, 'Hong Kong'),
(86, 'Honduras'),
(87, 'Hungary'),
(88, 'Iceland'),
(89, 'Indonesia'),
(90, 'Iraq'),
(91, 'Isle of Man'),
(92, 'Italy'),
(93, 'India'),
(94, 'Iran'),
(95, 'Ireland'),
(96, 'Israel'),
(97, 'Jamaica'),
(98, 'Jordan'),
(99, 'Japan'),
(100, 'Kazakhstan'),
(101, 'Kiribati'),
(102, 'North Korea'),
(103, 'Kuwait'),
(104, 'Kenya'),
(105, 'South Korea'),
(106, 'Kosovo'),
(107, 'Kyrgyz'),
(108, 'Lao'),
(109, 'Lebanon'),
(110, 'Liberia'),
(111, 'Liechtenstein'),
(112, 'Luxembourg'),
(113, 'Latvia'),
(114, 'Lesotho'),
(115, 'Libya'),
(116, 'Lithuania'),
(117, 'Macao'),
(118, 'Malawi'),
(119, 'Maldives'),
(120, 'Malta'),
(121, 'Mauritania'),
(122, 'Mexico'),
(123, 'Moldova'),
(124, 'Mongolia'),
(125, 'Morocco'),
(126, 'Myanmar'),
(127, 'Madagascar'),
(128, 'Malaysia'),
(129, 'Mali'),
(130, 'Marshall Islands'),
(131, 'Mauritius'),
(132, 'Micronesia'),
(133, 'Monaco'),
(134, 'Montenegro'),
(135, 'Mozambique'),
(136, 'Namibia'),
(137, 'Nepal'),
(138, 'New Caledonia'),
(139, 'Nicaragua'),
(140, 'Nigeria'),
(141, 'Northern Mariana Islands'),
(142, 'Nauru'),
(143, 'Netherlands'),
(144, 'New Zealand'),
(145, 'Niger'),
(146, 'North Macedonia'),
(147, 'Norway'),
(148, 'Oman'),
(149, 'Pakistan'),
(150, 'Panama'),
(151, 'Paraguay'),
(152, 'Philippines'),
(153, 'Portugal'),
(154, 'Palau'),
(155, 'Papua New Guinea'),
(156, 'Peru'),
(157, 'Poland'),
(158, 'Puerto Rico'),
(159, 'Qatar'),
(160, 'Romania'),
(161, 'Rwanda'),
(162, 'Russian Federation'),
(163, 'Samoa'),
(164, 'Sao Tome and Principe'),
(165, 'Senegal'),
(166, 'Seychelles'),
(167, 'Singapore'),
(168, 'Slovak'),
(169, 'Solomon Islands'),
(170, 'South Africa'),
(171, 'Spain'),
(172, 'St. Kitts and Nevis'),
(173, 'St. Martin'),
(174, 'Sudan'),
(175, 'Sweden'),
(176, 'Syrian Arab Republic'),
(177, 'San Marino'),
(178, 'Saudi Arabia'),
(179, 'Serbia'),
(180, 'Sierra Leone'),
(181, 'Sint Maarten'),
(182, 'Slovenia'),
(183, 'Somalia'),
(184, 'South Sudan'),
(185, 'Sri Lanka'),
(186, 'St. Lucia'),
(187, 'St. Vincent and the Grenadines'),
(188, 'Suriname'),
(189, 'Switzerland'),
(190, 'Tajikistan'),
(191, 'Thailand'),
(192, 'Togo'),
(193, 'Trinidad and Tobago'),
(194, 'Turkey'),
(195, 'Turks and Caicos Islands'),
(196, 'Timor-Leste'),
(197, 'Tanzania'),
(198, 'Tonga'),
(199, 'Tunisia'),
(200, 'Turkmenistan'),
(201, 'Tuvalu'),
(202, 'Uganda'),
(203, 'United Arab Emirates'),
(204, 'United States of America'),
(205, 'Uzbekistan'),
(206, 'Ukraine'),
(207, 'United Kingdom'),
(208, 'Uruguay'),
(209, 'Vanuatu'),
(210, 'Vietnam'),
(211, 'Venezuela'),
(212, 'Virgin Islands (U.S.)'),
(213, 'West Bank and Gaza'),
(214, 'Yemen'),
(215, 'Zambia'),
(216, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `astitva_events`
--

CREATE TABLE `astitva_events` (
  `id` int(2) NOT NULL,
  `eventname` varchar(100) NOT NULL,
  `price` double(5,2) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `age` int(2) DEFAULT NULL,
  `scope` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `astitva_events`
--

INSERT INTO `astitva_events` (`id`, `eventname`, `price`, `type`, `age`, `scope`) VALUES
(19, 'GROUP DISCUSSION', 70.00, 'S', 0, 0),
(17, 'FOOD BRANDING', 70.00, 'S', 0, 0),
(18, 'DOODLING', 70.00, 'S', 0, 0),
(20, 'INSTRUMENTAL', 70.00, 'S', 0, 0),
(21, 'INSTRUMENTAL', 110.00, 'G', 0, 0),
(22, 'FACE PAINTING', 70.00, 'S', 0, 0),
(23, 'ELOCUTION', 70.00, 'S', 0, 0),
(24, 'DANCE', 70.00, 'S', 0, 0),
(25, 'DANCE', 110.00, 'G', 0, 0),
(26, 'DANCE', 110.00, 'G', 1, 0),
(27, 'DANCE', 70.00, 'S', 1, 0),
(28, 'PAINTING', 70.00, 'S', 0, 0),
(29, 'SINGING', 70.00, 'S', 0, 0),
(30, 'SINGING', 110.00, 'G', 0, 0),
(31, 'SINGING', 70.00, 'S', 1, 0),
(32, 'SINGING', 110.00, 'G', 1, 0),
(33, 'TREASURE HUNT', 110.00, 'G', 0, 0),
(34, '30 SEC FILM', 70.00, 'S', 0, 0),
(35, '30 SEC FILM', 110.00, 'G', 0, 0),
(36, 'PHOTOGRAPHY', 70.00, 'S', 0, 0),
(37, 'BUSINESS PLAN', 70.00, 'S', 0, 0),
(38, 'BUSINESS PLAN', 110.00, 'G', 0, 0),
(39, 'BUSINESS PLAN', 70.00, 'S', 1, 0),
(40, 'BUSINESS PLAN', 110.00, 'G', 1, 0),
(41, 'CREATIVE WRITING', 70.00, 'S', 0, 0),
(42, 'QUIZ', 70.00, 'S', 0, 0),
(43, 'FASHION SHOW', 70.00, 'S', 0, 0),
(44, 'FASHION SHOW', 110.00, 'G', 0, 0),
(45, 'FASHION SHOW', 70.00, 'S', 1, 0),
(46, 'FASHION SHOW', 110.00, 'G', 1, 0),
(49, 'SKETCHING', 70.00, 'S', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `astitva_judges`
--

CREATE TABLE `astitva_judges` (
  `id` int(2) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `event` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `astitva_registrations`
--

CREATE TABLE `astitva_registrations` (
  `id` int(5) NOT NULL,
  `dot` date NOT NULL,
  `country` varchar(255) NOT NULL DEFAULT 'India',
  `name` varchar(255) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `photo_id` varchar(50) DEFAULT NULL,
  `college_name` varchar(255) DEFAULT NULL,
  `events` mediumtext DEFAULT NULL,
  `amount` double(6,2) DEFAULT 0.00,
  `transaction_id` varchar(50) DEFAULT NULL,
  `receipt` varchar(50) DEFAULT NULL,
  `agree` tinyint(1) DEFAULT NULL,
  `age` int(2) NOT NULL,
  `type` varchar(2) NOT NULL,
  `state` varchar(200) DEFAULT NULL,
  `verified` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `astitva_registrations`
--

INSERT INTO `astitva_registrations` (`id`, `dot`, `country`, `name`, `contact_no`, `email_address`, `photo_id`, `college_name`, `events`, `amount`, `transaction_id`, `receipt`, `agree`, `age`, `type`, `state`, `verified`) VALUES
(66, '2021-08-26', 'India', 'Avantika Dnyaneshwar More', '9763158399', 'owlavantika@gmail.com', 'my-passport-photo.jpg', 'SYMBIOSIS COLLEGE OF ARTS AND COMMERCE', 'FACE PAINTING|PAINTING|QUIZ|SKETCHING', 280.00, '123808421798', 'IMG-20210827-WA0067.jpg', 1, 0, 'S', '', 1),
(74, '2021-08-26', 'India', 'Maghavi Avinash Bakare', '7020071885', 'maghavibakare@gmail.com', '20210826_132114.JPG', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'DOODLING', 70.00, '123812533175', 'IMG-20210827-WA0019.jpg', 1, 0, 'S', '', 1),
(73, '2021-08-26', 'India', 'Aboli Anil Kodte', '9370569170', 'abolik333@gmail.com', 'IMG_20210826_123348 (1) (1) (2) (2) (1).jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'DANCE', 70.00, 'T2108261232057104432231', 'IMG-20210826-WA0029.jpg', 1, 0, 'S', '', 1),
(72, '2021-08-26', 'India', 'Aparna Arvind Lokhande', '8766877656', 'aparnalokhande834@gmail.com', 'IMG-20210826-WA0016.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'ELOCUTION', 70.00, '123829049326', 'IMG-20210827-WA0037.jpg', 1, 0, 'S', '', 1),
(70, '2021-08-26', 'India', 'Bhakti U Pandav', '7588400006', 'dancingbhakti@gmail.com', 'photo_1.jpg', 'BMCC, PUNE.', '30 SEC FILM|DANCE|FASHION SHOW', 210.00, '123811669276', 'IMG-20210827-WA0042.jpg', 1, 0, 'S', '', 1),
(69, '2021-08-26', 'India', 'Om Amol Vadgave', '7758025300', 'vadgave.om15@gmail.com', '20210826_112759.jpg', 'BMCC,PUNE', 'PHOTOGRAPHY', 70.00, '123844332134', 'IMG-20210827-WA0030.jpg', 1, 0, 'S', '', 1),
(68, '2021-08-26', 'India', 'Piyush  Sharma', '7509635056', 'piyush61655@gmail.com', 'Pan Card.pdf', 'NA', 'PHOTOGRAPHY', 70.00, 'P2108261123477919740064', 'IMG-20210827-WA0052.jpg', 1, 0, 'S', '', 1),
(67, '2021-08-26', 'India', 'VARSHA HEMANT DESHPANDE', '9767056611', 'varsha.des@rediffmail.com', '20210826_084118.jpg', 'NA', 'SINGING', 70.00, '123899174430', 'Screenshot_20210826-110420_Google Pay.jpg', 1, 1, 'S', '', 1),
(65, '2021-08-25', 'India', 'Shashwati Vijay Mule', '7875024428', 'muleshashwati@gmail.com', 'inbound3961893307703179296.jpg', 'BMCC COLLEGE OF COMMERCE', 'DANCE', 70.00, 'T2108252108580953424847', 'IMG-20210827-WA0044.jpg', 1, 0, 'S', '', 1),
(75, '2021-08-26', 'India', 'Priyanka Bhimaji Mose', '9975075312', 'priyankamose0@gmail.com', 'WhatsApp Image 2021-08-26 at 1.34.33 PM.jpeg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'ELOCUTION', 70.00, '123812356313', 'IMG-20210827-WA0040.jpg', 1, 0, 'S', '', 1),
(76, '2021-08-26', 'India', 'Areen Vinayak Amrutkar', '09022854954', 'areenvam14@gmail.com', '328e1120-b78a-4004-8219-81b56e3ac337.jpg', 'MES. GARWARE COLLEGE OF COMMERCE', 'PHOTOGRAPHY', 70.00, 'T2108261439006305135318', 'IMG-20210827-WA0038.jpg', 1, 0, 'S', '', 1),
(77, '2021-08-26', 'India', 'Areen Vinayak Amrutkar', '09022854954', 'aviate1403@gmail.com', '328e1120-b78a-4004-8219-81b56e3ac337.jpg', 'MES. GARWARE COLLEGE OF COMMERCE', 'BUSINESS PLAN', 110.00, 'T2108261440387431081673', 'IMG-20210827-WA0036.jpg', 1, 0, 'G', '', 1),
(78, '2021-08-26', 'India', 'Prathmesh Nandkishor Tekade', '9511978266', 'tprathmesh350@gmail.com', 'IMG-20210826-WA0009.jpg', 'SYMBIOSIS COLLEGE OF ART AND COMMERCE', 'BUSINESS PLAN', 0.00, 'T2108261440387431081673', 'IMG-20210827-WA0039.jpg', 1, 0, 'G', '', 1),
(79, '2021-08-26', 'India', 'Nikita Basawraj Birajdar', '9325920654', 'nikitabirajdar2005@gmail.com', 'inbound7272376654160460009.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE PUNE', 'FASHION SHOW', 110.00, 'APLAPf70809c84d399e984b08ce2df91b25', 'IMG-20210827-WA0031.jpg', 1, 0, 'G', '', 1),
(80, '2021-08-26', 'India', 'Samruddhi Ganesh Thite', '+919730776063', 'samruddhithite03@gmail.com', 'inbound6528919421393158671.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE PUNE', 'FASHION SHOW', 0.00, 'APLAPf70809c84d399e984b08ce2df91b25', 'IMG-20210827-WA0022.jpg', 1, 0, 'G', 'Maharashtra', 1),
(81, '2021-08-26', 'India', 'Shraddha Nilkanth Linge', '9168420706', 'lingeshraddha2000@gmail.com', '16299698090917467448805959838628.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE PUNE', 'SKETCHING', 70.00, '123835372899', 'IMG-20210827-WA0050.jpg', 1, 0, 'S', '', 1),
(82, '2021-08-26', 'India', 'Shraddha Nilkanth Linge', '9168420706', 'shubhamlinge0101@gmail.com', '16299740814364728789440124718975.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE PUNE', 'PAINTING', 70.00, '123836022699', 'IMG-20210827-WA0051.jpg', 1, 0, 'S', '', 1),
(83, '2021-08-26', 'India', 'Suyash Subhash Agrawal', '9644582859', 'suyashagrawale9644@gamil.com', 'IMG-20210712-WA0003.jpg', 'N/A', 'PHOTOGRAPHY', 70.00, '123820437144', 'IMG-20210827-WA0061.jpg', 1, 0, 'S', '', 1),
(84, '2021-08-26', 'India', 'Prabhjot  Kaur', '7385113449', 'prabhjotkaur9511@gmail.com', 'IMG_20210826_203449.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'PHOTOGRAPHY', 70.00, '123819169191', 'IMG-20210827-WA0026.jpg', 1, 0, 'S', '', 1),
(85, '2021-08-26', 'India', 'Rayel J Mathew', '+91 9605050443', 'rayelmathew@gmail.com', 'IMG-20210826-WA0022_compress76.jpg', 'N/A', 'PHOTOGRAPHY', 70.00, '123851675686', 'IMG-20210827-WA0041.jpg', 1, 0, 'S', '', 1),
(86, '2021-08-26', 'India', 'Mihir  Taksale', '7045705595', '201 purva kores nakshatra vartak nagar', '', 'MIT WPU PUNE', 'INSTRUMENTAL', 70.00, '123837665211', 'BMCC ASTITVA RECIEPT.pdf', 1, 0, 'S', '', 1),
(87, '2021-08-26', 'India', 'Mayuresh Bhushan Nalage', '9921892345', 'mayureshnalge2@gmail.com', '20210826_205723.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'TREASURE HUNT', 110.00, 'T2108262233188297590184', 'IMG-20210826-WA0006.jpg', 1, 0, 'G', '', 1),
(88, '2021-08-26', 'India', 'Ritesh Sanjay Shelar', '9518537051', 'sanjayshelar9764@gmail.com', 'CollageMaker_20210826_213417419.jpg', 'SIR PARSHURAMBHAU COLLEGE', 'TREASURE HUNT', 0.00, 'T2108262233188297590184', 'IMG-20210826-WA0006.jpg', 1, 0, 'G', 'Maharashtra', 0),
(89, '2021-08-26', 'India', 'Nidheesh Sandip Bavdekar', '72196 33054', 'nidheeshsb@gmail.com', 'inbound7967864083346103173.jpg', 'BMCC', '30 SEC FILM', 70.00, '123823352377', 'IMG-20210827-WA0066.jpg', 1, 0, 'S', '', 1),
(90, '2021-08-27', 'India', 'Pranali Nitin Patil', '7620022966', 'pranalipatil128@gmail.com', 'IMG_20210827_091935.jpg', 'MANGHANMAL UDHARAM COLLEGE OF COMMERCE', 'SKETCHING', 70.00, '123909714019', 'IMG-20210827-WA0035.jpg', 1, 0, 'S', '', 1),
(108, '2021-08-28', 'India', 'Kaushik Omkar Phatak', '9403438551', 'kophatak@gmail.com', 'Student Photo Resized Final.jpg', 'BMCC(BRIHAN MAHARASHTRA COLLEGE OF COMMERCE)', 'BUSINESS PLAN', 70.00, '124010211162', 'Bmcc Astitva Receipt resized final.jpg', 1, 0, 'S', '', 1),
(92, '2021-08-27', 'India', 'Mansi S. Kulkarni', '9975442948', 'Vishnuwadi , Circular road, Buldana', '1630058265456.jpeg', 'BMCC', 'DANCE|FASHION SHOW', 140.00, 'T2108271535451724876165', '1630058924955.jpeg', 1, 0, 'S', '', 1),
(93, '2021-08-27', 'India', 'Harshada Bharat Kalokhe', '8180942473', 'harshadakalokhe12345@gmail.com', '20210608_183656625_001.jpg', 'BRIHAN MAHARASTRA COLLEGE OF COMMERCE', 'DANCE', 70.00, 'T2108271610028428683251', 'IMG-20210827-WA0009.jpg', 1, 0, 'S', '', 1),
(94, '2021-08-27', 'India', 'Harshad Santosh Kalokhe', '7776034464', 'harshadkalokhe07@gamil.com', 'IMG-20210330-WA0015.jpg', 'SIR PARSHURAMBHAU COLLEGE', 'SKETCHING', 70.00, 'T2108271614051230071496', 'IMG-20210827-WA0010.jpg', 1, 0, 'S', '', 1),
(95, '2021-08-27', 'India', 'Santosh Namdev Jadhav', '9518954023', 'santoshjadhavart84@gmail.com', 'WhatsApp Image 2021-08-27 at 3.57.41 PM.jpeg', 'ABHINAV KALA MAHAVIDYALAY', 'PAINTING', 70.00, '123918577363', 'WhatsApp Image 2021-08-27 at 6.51.33 PM.jpeg', 1, 0, 'S', '', 1),
(96, '2021-08-27', 'India', 'Dhanashree Sachin Bhide', '9604354807', '250, Yashwant Nagar , Talegaon Dabhade ,Pune.', 'Screenshot_20210607_120958.jpg', 'B.M.C.C', 'DOODLING|INSTRUMENTAL', 140.00, '123918640400', 'IMG-20210827-WA0004.jpg', 1, 0, 'S', '', 1),
(97, '2021-08-27', 'India', 'Nancy  Dengre', '09340800929', 'nancydengre29@gmail.com', 'photo.pdf', 'BMCC', 'SINGING', 70.00, 'T2108271912354487661225', 'Screenshot_20210827-191314.jpg', 1, 0, 'S', '', 1),
(98, '2021-08-27', 'India', 'Akanksha Tukaram Nandgavkar', '8600612690', 'akankshanandgavkar@gmail.com', 'IMG_20200518_103917.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', '', 0.00, '4991691389', 'IMG-20210827-WA0016.jpg', 1, 0, 'S', '', 1),
(99, '2021-08-27', 'India', 'Vedant Jayesh Gandhi', '7249596836', 'gandhivedant.74@gmail.com', '16300724677047649366113480680575.jpg', 'MES GARWARE COLLEGE OF COMMERCE', 'PHOTOGRAPHY', 70.00, '123919507439', 'IMG-20210827-WA0317.jpg', 1, 0, 'S', '', 1),
(100, '2021-08-27', 'India', 'Pragati  Raj', '9142956962', 'rajpragati27@gmail.com', 'Adobe Scan Aug 27, 2021_1.jpg', 'BANASTHALI VIDYAPITH', 'DOODLING', 70.00, 'APLAPOfdb575ff6b8dde89058e758737838', 'Screenshot_2021-08-27-19-40-44-86_fd1e8ef594b195c5', 1, 0, 'S', '', 1),
(101, '2021-08-27', 'India', 'Janhavi Kishor Kshirsagar', '902869769', 'janhavikshirsagar17@gmail.com', '20210827_203927.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', '', 0.00, '123811405881', 'Screenshot_20210827-204458_GPay.jpg', 1, 0, 'S', '', 1),
(102, '2021-08-27', 'India', 'Sagar Prashant Bali', '7391919113', 'balisagar2324@gmail.com', 'rps20200721_123805.jpg', 'SYMBIOSIS COLLEGE OF ARTS AND COMMERCE PUNE', 'SINGING', 70.00, 'T2108272055585247467315', 'Screenshot_20210827-205607.jpg', 1, 0, 'S', '', 1),
(103, '2021-08-27', 'India', 'Sayali Ganpat Kamble', '7218762091', 'sayalikamble876@gmail.com', 'WhatsApp Image 2021-08-27 at 9.17.36 PM.jpeg', 'BMCC', 'DOODLING', 70.00, '123919198758', 'WhatsApp Image 2021-08-27 at 9.55.31 PM.jpeg', 1, 0, 'S', '', 1),
(104, '2021-08-27', 'India', 'Samrudhi Pritesh Khivansara', '7666554033', 'samrudhikhivansara1008@gmail.com', 'IMG-20210207-WA0017.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'QUIZ', 70.00, '123953414796', 'Screenshot_20210827-222206_GPay.jpg', 1, 0, 'S', '', 1),
(105, '2021-08-27', 'India', 'SMRUTI SAURABH PATWARDHAN', '7028020571', 'smrutivaidya19@gmail.com', 'Smruti.jpg', 'N/A', 'SINGING', 70.00, '193145640', 'bmcc_astitva_registration.jpg', 1, 1, 'S', '', 1),
(106, '2021-08-27', 'India', 'Anuja Arvind Lokhande', '7972556177', 'lokhandeanuja6@gmail.com', 'IMG-20210827-WA0005.jpg', 'N/A', 'DOODLING', 70.00, '123922867509', 'IMG-20210827-WA0008.jpg', 1, 0, 'S', '', 1),
(107, '2021-08-27', 'India', 'Anushka Arvind Lokhande', '7972549347', 'lokhandeanushka6@gmail.com', 'IMG-20210827-WA0006.jpg', 'N/A', 'DOODLING', 70.00, '123922869642', 'IMG-20210827-WA0007.jpg', 1, 0, 'S', '', 1),
(109, '2021-08-28', 'India', 'Savani Sameer Surana', '8767600189', 'savanisurana5@gmail.com', 'Snapchat-148332894.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE,PUNE', 'INSTRUMENTAL', 70.00, 'T2108281103245179043508', 'Screenshot_20210828-110346.png', 1, 0, 'S', '', 1),
(110, '2021-08-28', 'India', 'YADNYESH LOKESH KHAPEKAR', '8446579280', 'yadnyesh.khapekar@gmail.com', 'Driving Licence.jpg', 'BMCC', 'INSTRUMENTAL', 70.00, 'LT2808111074494MOAEZWPDJ1', 'Astitva (INSTRUMENTAL) Transaction.jpg', 1, 0, 'S', '', 1),
(111, '2021-08-28', 'India', 'Chandrakala B Murkute', '8208517572', 'rohini3612@gmail.com', 'IMG_20210828_112713.jpg', 'CHANDRAKALA', 'FASHION SHOW', 70.00, '124058202377', 'Screenshot_2021-08-28-11-36-40-8.jpg', 1, 0, 'S', '', 1),
(112, '2021-08-28', 'India', 'Chandrakala B Murkute', '8208517572', 'bapumurkute2224@gmail.com', 'IMG_20210828_112713.jpg', 'CCS COLLEGE WAKAD', 'FASHION SHOW', 70.00, '124058202377', 'Screenshot_2021-08-28-11-36-40-8.jpg', 1, 0, 'S', '', 1),
(113, '2021-08-28', 'India', 'Yuvraj Rameshwar Sable', '8421161641', 'yuvrajsable81435@gmail.com', 'IMG-20200910-WA0039.jpg', 'PROF. RAM KRISHNA MORE COLLEGE', 'PAINTING', 70.00, '124052441718', 'IMG-20210828-WA0002.jpg', 1, 0, 'S', '', 1),
(114, '2021-08-28', 'India', 'Priyanka  Salve', '9004723944', 'priyankasalve02233@gmail.com', 'Screenshot_2021_0828_111525.png', 'N/A', 'FASHION SHOW', 70.00, '12401213697', 'IMG-20210828-WA0013.jpg', 1, 1, 'S', '', 1),
(115, '2021-08-28', 'India', 'GAURI RAHUL SHINDE', '8329922413', 'SAMARTH NAGAR DHANEGAON, NANDED', '1630133448135.jpg', 'BLUE BELLS JR COLLEGE NANDED', 'FASHION SHOW', 70.00, '124012304193', 'IMG-20210828-WA0006.jpg', 1, 0, 'S', '', 1),
(116, '2021-08-28', 'India', 'Bhoomi Deepak Bhojane', '9356175716', 'juibhojane@gmail.com', '', 'N/A', 'FASHION SHOW', 70.00, '124059411246', 'IMG-20210828-WA0002.jpg', 1, 0, 'S', '', 1),
(117, '2021-08-28', 'India', 'CHETANA UTTAM CHAPTE', '9175152073', 'chetanachapte@gmail.com', 'WhatsApp Image 2021-08-28 at 12.35.36 PM.jpeg', 'BMCC', 'PAINTING|SKETCHING', 140.00, '124069383916', 'WhatsApp Image 2021-08-28 at 1.28.39 PM.jpeg', 1, 0, 'S', '', 1),
(118, '2021-08-28', 'India', 'Manshi  Pokharia', '9423735911', 'manshipokharia@gmail.com', 'IMG_20210828_143258.jpg', 'MITWPU(KOTHRUD)', '', 0.00, 'T2108281331276509935881', 'IMG-20210828-WA0055.jpg', 1, 0, 'S', '', 1),
(119, '2021-08-28', 'India', 'Anjali Vithal Sutar', '8180918926', 'anjalisutar1906@gmail.com', 'IMG_20210828_140919.jpg', 'BRIHANS MAHARASHTRA COLLEGE OF COMMERCE', 'PAINTING', 70.00, '123919017409', 'IMG-20210827-WA0025.jpg', 1, 0, 'S', '', 1),
(120, '2021-08-28', 'Bahrain', 'Aswathi Rajendran Thamarantavide', '+973 3691 2902', 'aswathi.rajendran1591@gmail.com', 'Achu cpr.pdf', 'JAIN UNIVERSITY', 'PHOTOGRAPHY', 0.00, '', '', 0, 0, 'S', '', 1),
(121, '2021-08-28', 'India', 'Snehal Sopan Shinde', '9049446299', 'snehals1210@gmail.com', '20210113_100518[1].jpg', 'BMCC', 'DOODLING', 70.00, '124026761473', 'ASTITVA RCT.jpg', 1, 0, 'S', '', 1),
(122, '2021-08-28', 'India', 'Savnee  Savarkar', '9769248684', 'savneesavarkar@gmail.com', 'NMIMS ID Card.jpg', 'NMIMS MUMBAI', 'SINGING', 70.00, '124076458391', 'WhatsApp Image 2021-08-28 at 9.49.42 PM.jpeg', 1, 0, 'S', '', 1),
(123, '2021-08-28', 'India', 'Rutuja Deepak Raorane', '9404737036', 'rutujaraorane894@gmail.com', '', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'PAINTING', 70.00, '124017911742', '1630168219235.jpg', 1, 0, 'S', '', 1),
(124, '2021-08-29', 'India', 'Radhika Sachin Deshmukh', '8390743069', 'radhikadeshmukh2211@gmail.com', 'inbound228659500449782812.pdf', 'SKNCOA', 'DOODLING|SKETCHING', 140.00, 'seemad19570@okaxis', 'inbound8187427001764329793.jpg', 1, 0, 'S', '', 1),
(125, '2021-08-29', 'India', 'RESHMA VIKAS PATAIT', '8788822188', 'pataitreshma.vm@gmail.com', 'scan.jpg', 'N/A', 'DOODLING', 70.00, 'T2108291019313488487523', 'Screenshot_20210829-102527_PhonePe', 1, 0, 'S', '', 1),
(126, '2021-08-29', 'India', 'Prerna Lala Gaikwad', '8390310833', 'prernagaikwad2280@gmail.com', 'WhatsApp Image 2021-08-28 at 10.20.01 PM.jpeg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE ,PUNE', 'FOOD BRANDING|QUIZ', 140.00, 'T2108291105411248093242', 'WhatsApp Image 2021-08-28 at 10.37.16 PM(1).jpeg', 1, 0, 'S', '', 1),
(127, '2021-08-29', 'India', 'Pragati Balasaheb Pawar', '9356348835', 'pragatipawar831@gmail.com', '', 'JEDHE COLLEGE PUNE', '', 0.00, 'T2108291151049269043674', '1630218131799.jpg', 1, 0, 'S', '', 1),
(128, '2021-08-29', 'India', 'Ayush Kumar Singh', '9131248553', 'baikunthpur', 'inbound3921474779929262664.jpg', 'N/A', 'PAINTING', 70.00, '124172220276', 'inbound5458596207990277610.jpg', 1, 0, 'S', '', 1),
(129, '2021-08-29', 'India', 'NAYAN GANESH JADHAV', '+91 90225 93015', 'MALKAUTHA NANDED', 'IMG-20210828-WA0110__01.jpg', 'NARAYANRAO CHAVHAN LAW COLLEGE BABANAGER NANDED.', 'FASHION SHOW', 70.00, '124112996987', 'Screenshot_20210829-121800.jpg', 1, 0, 'S', '', 1),
(130, '2021-08-29', 'India', 'Pranjal Rajashree Pradeep Kale', '7709602222', 'pranjalpkale@gmail.com', 'pranjal .jpg', 'BMCC', '', 0.00, 'T2108291302340300435428', 'Screenshot_20210829-130304_PhonePe.jpg', 1, 0, '', '', 1),
(131, '2021-08-29', '', 'Vaidehi Digambar Suryavanshi', '8080518692', 'vaidehisuryawanshi24@gmail.com', '86BF5269-F68B-4DE1-A999-86D619CE66A4.png', 'BMCC', 'SKETCHING', 0.00, '', '', 0, 0, 'S', '', 1),
(132, '2021-08-29', 'India', 'NIKITA SACHIN SHINDE', '8767670939', 'SAMARTH NAGAR DHANEGAON NANDED', '1630226342037.jpg', 'SWAMI VIVEKANAND JR COLLEGE', 'FASHION SHOW', 70.00, '????????????', 'IMG-20210829-WA0004.jpg', 1, 0, 'S', '', 1),
(133, '2021-08-29', 'India', 'NEHA KAILASH JADHAV', '8788707585', 'ASARJAN NANDED', 'IMG-20210829-WA0001.jpg', 'SAHYOG COLLEGE', 'FASHION SHOW', 70.00, '124114091750', 'IMG-20210829-WA0002.jpg', 1, 0, 'S', '', 1),
(134, '2021-08-29', 'India', 'SUPRIYA RAHUL SHINDE', '8412079440', 'DHANEGAON, NANDED', '1630228127868.jpg', 'N/A', 'FASHION SHOW', 70.00, '124114099390', 'IMG-20210829-WA0009.jpg', 1, 1, 'S', '', 1),
(135, '2021-08-29', '', 'Anushka Prashant Dhotre', '7620550264', 'somnath nagar near inorbit', '', 'BMCC', '', 0.00, '', '', 0, 0, 'S', '', 0),
(136, '2021-08-29', 'India', 'REKHA NITIN SHINDE', '7798789922', 'rekha.nitin.shinde@gmail.com', '20210520_121011-COLLAGE~2.jpg', 'N/A', 'FASHION SHOW', 70.00, '124115125109', 'IMG-20210829-WA0005.jpg', 1, 1, 'S', '', 1),
(137, '2021-08-29', 'India', 'Archana Appasaheb Desai', '9975892997', 'Archanad27082@gmail.com', 'WhatsApp Image 2021-08-29 at 2.58.04 AM.jpeg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE ,PUNE', 'QUIZ', 70.00, 'T2108291537331073018550', 'WhatsApp Image 2021-08-29 at 3.09.31 AM.jpeg', 1, 0, 'S', '', 1),
(138, '2021-08-29', 'India', 'RACHANA NITIN Shinde', '+917972056076', 'rachanashinde7722@gmail.com', '1630231629722.jpg', 'VASANTRAO NAIK MAHAVIDYALAYA', 'FASHION SHOW', 70.00, '124115130745', '1630231860991.jpg', 1, 0, 'S', '', 1),
(139, '2021-08-29', 'India', 'Swati  Jain', '8433260243', 'swatisoumyajain@gmail.com', '20210826_165631.jpg', 'N/A', 'DOODLING|SINGING', 140.00, '124136900445', 'IMG-20210829-WA0004.jpg', 1, 0, 'S', '', 1),
(140, '2021-08-29', 'India', 'Vaishnavi Atul Patil', '9011037616', 'vaishnavi9892@gmail.com', '4D21F99E-5567-4479-A405-EE646CE7BD06.jpeg', 'VIIT', 'DANCE', 70.00, '124178659222', '2846383B-C5D0-4D0A-A175-C86484CFD64A.png', 1, 0, 'S', '', 1),
(141, '2021-08-29', 'India', 'Siddharth Santosh Kale', '9890693161', 'siddharth.kale2016@gmail.com', 'inbound7695574903995430713.jpg', 'N/A', 'DANCE|ELOCUTION', 140.00, '124118816055', 'inbound6732318000932274027.jpg', 1, 0, 'S', '', 1),
(142, '2021-08-29', 'India', 'Jayati  Kalokhe', '9890587988', 'jayatikalokhe19@gmail.com', 'WhatsApp Image 2021-08-29 at 6.53.09 PM.jpeg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'PAINTING|SKETCHING', 140.00, 'CICAgODSs4vNQQ', 'WhatsApp Image 2021-08-29 at 7.23.10 PM.jpeg', 1, 0, 'S', '', 1),
(143, '2021-08-29', 'India', 'Akshay Pradip Mhapralkar', '9325509454', 'akkimhapralkar1998@gmail.cm', 'New Doc 2019-04-02 12.27.07_1.jpg', 'N/A', 'SINGING', 70.00, '124119716263', 'Screenshot_2021-08-29-19-25-01-819_com.google.andr', 1, 0, 'S', '', 0),
(144, '2021-08-29', 'India', 'Sumit Rajendra Kanade', '9325579490', 'sumitkanade2007@gmail.com', '1630245236022.jpg', 'BMCC', 'TREASURE HUNT', 110.00, 'T2108291941406890143187', '1630246420222.jpg', 1, 0, 'G', '', 1),
(145, '2021-08-29', 'India', 'Rushikesh Sachin Nale', '7745044489', 'rushikeshnale677@gmail.com', '1630245647917.jpg', 'BMCC', 'TREASURE HUNT', 0.00, 'T2108291941406890143187', '1630246420222.jpg', 1, 0, 'G', 'Maharashtra', 0),
(146, '2021-08-29', 'India', 'Samruddhi Prashant Raut', '8080647644', 'samupraut03@gmail.com', 'Samruddhi.jpeg', 'SECONDARY AND HIGHER-SECONDARY COLLEGE , KASAMPURA', 'DOODLING|FACE PAINTING|FASHION SHOW|FOOD BRANDING|PAINTING|PHOTOGRAPHY', 420.00, 'T2108292015368236966204', 'WhatsApp Image 2021-08-29 at 7.46.59 AM.jpeg', 1, 0, 'S', '', 1),
(147, '2021-08-29', 'India', 'Sanskruti A Tapdiya', '8975407777', 'sanskruti.tapadiya@gmail.com', '4565136C-8E59-44DC-AFA3-DD30918EC70D.jpeg', 'FOOTWEAR DESIGN AND DEVELOPMENT INSTITUTE, HYDERABAD', 'PAINTING', 70.00, '124149074234', '6AA45996-31FF-4214-89FB-9DE748A0991A.png', 1, 0, 'S', '', 1),
(148, '2021-08-29', 'India', 'Aishwarya Vitthal Shinde Vitthal Shinde', '7028088541', 'aishwaryashinde7117@gmail.com', 'didi com  (1).jpg', 'ABASAHEB  GARWARE COLLEGE', 'ELOCUTION|FASHION SHOW', 140.00, '124121226101', 'IMG-4108.jpg', 1, 0, 'S', '', 1),
(149, '2021-08-29', 'India', 'Sayandip  Dey', '9749551819', 'artandreads@gmail.com', '16302526663638036501819834777762.jpg', 'KIIT', 'FACE PAINTING', 70.00, '124181838721', 'Screenshot_20210829-211950_GPay.jpg', 1, 0, 'S', '', 1),
(150, '2021-08-29', 'India', 'Reva Milind Hendre', '9175919235', 'revahendre@gmail.com', 'photo (1).jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'DOODLING', 70.00, '500898318', 'Astitva payment.jpg', 1, 0, 'S', '', 1),
(151, '2021-08-29', 'India', 'Arya A Mandke', '8007095208', 'aryamandke2004@gmail.com', 'Arya pic.jpg', 'BMCC COLLEGE', 'FASHION SHOW', 70.00, '194385414', 'Fashion show payment pic.jpg', 1, 0, 'S', '', 1),
(152, '2021-08-29', 'India', 'Seajalhh Anil Govannde', '82753 60236', 'sejalgovande@gmail.com', '20210829_213129.jpg', 'INSTITUTE OF TECHNOLOGY AND MANAGEMENT', 'FASHION SHOW', 70.00, '124121410844', 'IMG-20210829-WA0008.jpg', 1, 0, 'S', '', 1),
(153, '2021-08-29', 'India', 'Prashant Arya Hinge', '7028960879', 'aryahinge15@gmail.com', 'IMG_20210829_203252.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'FASHION SHOW', 70.00, '124187664943', 'IMG-20210829-WA0001.jpg', 1, 0, 'S', '', 1),
(154, '2021-08-29', 'India', 'Chetan Anil Konde', '9637398585', 'chetankonde0@gmail.com', 'IMG_20210802_131712.jpg', 'BMCC', 'FASHION SHOW', 70.00, '124182630026', 'IMG-20210829-WA0004.jpg', 1, 0, 'S', '', 1),
(155, '2021-08-29', 'India', 'Rohan Pamela Aaron', '9763308385', 'rohanaaron04@gmail.com', 'Screenshot (21).png', 'NESS WADIA COLLEGE OF COMMERCE', 'ELOCUTION', 70.00, '124182990444', 'WhatsApp Image 2021-08-29 at 11.11.02 PM.jpeg', 1, 0, 'S', '', 1),
(156, '2021-08-29', 'India', 'Varada Abhijit Risbud', '7045507307', 'varadar2707@gmail.com', 'Varada ID Image Passport Size.jpg', 'K. J. SOMAIYA INSTITUTE OF DHARMA STUDIES', 'INSTRUMENTAL|SINGING', 140.00, '124123165341', 'WhatsApp Image 2021-08-29 at 11.34.46 PM.jpeg', 1, 0, 'S', '', 1),
(157, '2021-08-30', 'India', 'Anupam Ajaykumar Baj', '+919370858966', 'anubaj1101@gmail.com', 'IMG-20210830-WA0008.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE PUNE', 'PAINTING', 70.00, '124243702047', 'Screenshot_20210830-100314.jpg', 1, 0, 'S', '', 1),
(249, '2021-08-31', 'India', 'Vaishnavi Suresh Naidu', '8788991312', 'vaishnavinaidu30@gmail.com', 'IMG_20210831_223746.jpg', 'N/A', 'SINGING', 70.00, '124322098770', 'IMG-20210831-WA0031.jpg', 1, 0, 'S', '', 0),
(159, '2021-08-30', 'India', 'Akash Sudhir Bhosale', '6300946158', 'bhosaleakash2017@gmail.com', 'IMG-20210830-WA0004.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'QUIZ', 70.00, '124243961379', 'IMG-20210830-WA0005.jpg', 1, 0, 'S', '', 1),
(160, '2021-08-30', 'India', 'Zeel Ramesh Patel', '9673803441', 'zzeelpatel21@gmail.com', 'Scan Jun 30, 2021_1.jpg', 'BMCC', 'CREATIVE WRITING', 70.00, '124290163371', 'payment (1).jpg', 1, 0, 'S', '', 1),
(161, '2021-08-30', 'India', 'Sakshi Baburao Jamale', '9970910013', 'sjamale261203@gmail.com', 'New doc Aug 30, 2021 10.32 AM.jpg', 'BRIHAN MAHARASHTRA COLLAGE OF COMMERCE,PUNE', 'TREASURE HUNT', 0.00, 'T2108301055094665357198', 'New doc Aug 30, 2021 10.56 AM.jpg', 1, 0, 'G', '', 1),
(162, '2021-08-30', 'India', 'Payal Rajkumar Doshi', '9890984321', 'payaldoshi4321@gmail.com', 'New doc Apr 29, 2021 8.07 PM.jpg', 'BRIHAN MAHARASHTRA COLLAGE OF COMMERCE, PUNE', 'TREASURE HUNT', 0.00, 'T2108301055094665357198', 'New doc Aug 30, 2021 10.56 AM.jpg', 1, 0, 'G', 'Maharashtra', 1),
(163, '2021-08-30', 'India', 'Shrushti Anup Patil', '7498918627', 'samruddhipatil9890@gmail.com', '141845DE-6B80-445A-B7F3-0A4782E4F6A8.jpeg', 'N/A', 'PAINTING', 70.00, '124286626872', '3171B5A9-5279-4D32-905A-902856A7F391.png', 1, 0, 'S', '', 1),
(164, '2021-08-30', 'India', 'Sakshi Nitin Purandare', '8669469596', 'sakshipurandare0@gmail.com', 'sakshi purandare-min.jpg', 'BMCC', 'SINGING', 70.00, '124244406066', 'PaymentRECEITPT.jpeg', 1, 0, 'S', '', 1),
(165, '2021-08-30', 'India', 'Vaishnavi Dattatraya Kiwale', '7057649943', 'vaishnavi18kiwale2004@gmail.com', 'IMG-20201230-WA0007.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE , PUNE', 'QUIZ', 70.00, '124244694759', 'IMG-20210830-WA0007.jpg', 1, 0, 'S', '', 1),
(166, '2021-08-30', 'India', 'Zarina  Akhtar', '8459678668', 'zakhtarsh@gmail.com', 'zarina (1).jpg', 'BMCC', 'TREASURE HUNT', 110.00, 'CICAgODSx_f2Sw', 'IMG_20210830_112946.jpg', 1, 0, 'G', '', 1),
(167, '2021-08-30', 'India', 'Kanak Mahesh Kanade', '9370384436', 'kmk150502@gmail.com', 'kanak.jpg', 'BMCC', 'TREASURE HUNT', 0.00, 'CICAgODSx_f2Sw', 'IMG_20210830_112946.jpg', 1, 0, 'G', 'Maharashtra', 1),
(168, '2021-08-30', 'India', 'KRUSHNA  MUNDANKAR', '9156540712', 'm.krushna3502@gmail.com', 'WhatsApp Image 2021-08-30 at 10.19.59 AM.jpeg', 'BMCC, PUNE', 'CREATIVE WRITING', 70.00, '124291186454', 'WhatsApp Image 2021-08-30 at 11.51.56 AM.jpeg', 1, 0, 'S', '', 1),
(169, '2021-08-30', 'India', 'Aditi Chandrakant MUNDANKAR', '9309997359', 'm.aditi8744@gmail.com', 'Aditi.jpeg', 'SP COLLEGE PUNE', 'DOODLING|FOOD BRANDING', 140.00, '124291541163', 'WhatsApp Image 2021-08-30 at 12.16.51 PM.jpeg', 1, 0, 'S', '', 1),
(170, '2021-08-30', 'India', 'RUCHA R SALI', '9175403541', 'rupeshsali72769@gmail.com', 'WhatsApp Image 2021-08-30 at 12.28.37 PM.jpeg', 'FATIMA HIGH SCHOOL AND JUNIOR COLLEGE, AMBERNATH ,THANE', 'DOODLING', 70.00, '124291480313', 'Rucha reciept.jpeg', 1, 0, 'S', '', 1),
(171, '2021-08-30', 'India', 'Manisha Danu MD Danu', '07696335317', 'manishadanu07@gmail.com', '', 'BMCC', 'PAINTING', 70.00, '124212715867', 'Payment receipt manisha danu.pdf', 1, 0, 'S', '', 0),
(172, '2021-08-30', 'India', 'Manasi Milind Sagdeo', '9322690146', 'mansisagdeo31@gmail.com', 'IMG_20210830_124643 (1).jpg', 'SP COLLEGE PUNE', 'CREATIVE WRITING', 70.00, '124288297974', 'WhatsApp Image 2021-08-30 at 12.52.50 PM.jpeg', 1, 0, 'S', '', 1),
(173, '2021-08-30', 'India', 'Roshan  Mhasal', '9822149748', 'roshan.mhasal24@gmail.com', 'myphoto.jpg', 'BMCC, PUNE', 'GROUP DISCUSSION|QUIZ', 0.00, 'T2108301253168790962588', '1630308531265.jpg', 1, 0, 'S', '', 1),
(174, '2021-08-30', 'India', 'Hrushikesh SUNIL Pore', '9823375278', 'hrushipore9@gmail.com', 'hrushi image.jpg', 'S .N.D. COE YEOLA', 'INSTRUMENTAL', 70.00, '124293385990', 'Screenshot_2021-08-30-14-29-38-886_com.google.andr', 1, 0, 'S', '', 0),
(175, '2021-08-30', 'India', 'Shwetali Vijay Koli', '9325582756', 'shwetalikoli3@gmail.com', 'shwetali koli ID card.jpg', 'BHARATI VIDYAPEETH NEW LAW COLLEGE,PUNE', 'CREATIVE WRITING|ELOCUTION', 140.00, '124269116608', 'payment paytm details 2021-08-30 .jpg', 1, 0, 'S', '', 1),
(176, '2021-08-30', 'India', 'Aarti Tukaram Ghodke', '8698679521', 'aartighodke2007qmail.com', '', 'BMCC', 'SKETCHING', 70.00, '124294682868', 'Screenshot_2021-08-30-16-15-28-30_4336b74596784d9a', 1, 0, 'S', '', 1),
(177, '2021-08-30', 'India', 'Netra H Wasekar', '7020133650', 'bt20civ116@students.vnit.ac.in', '16303219117367859580957608018279.jpg', 'VNIT NAGPUR', 'DOODLING', 70.00, '124248733505', 'Screenshot_20210830-165038_GPay.jpg', 1, 0, 'S', '', 1),
(178, '2021-08-30', 'India', 'Rinku Bhagaram Kumavat', '8888319603', 'rinkukumavat8@gmail.com', 'Rinku photo', 'MODERN COLLEGE GANESHKHIND PUNE 16', 'DOODLING', 70.00, '124217283447', 'as.jpg', 1, 0, 'S', '', 1),
(179, '2021-08-30', 'India', 'Mugdha Manik Patil', '7709484908', 'mugdhapatil008@gmail.com', 'IMG_20210816_112928.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'SKETCHING', 70.00, '124249118151', 'Screenshot_2021-08-30-17-26-04-26.jpg', 1, 0, 'S', '', 1),
(180, '2021-08-30', 'India', 'Vaibhav Manmathswami Mathpati', '9766662030', 'vaibhav.m1010@gmail.com', '', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'PHOTOGRAPHY', 70.00, 'T2108301828273334369978', 'Screenshot_20210830-182839.jpg', 1, 0, 'S', '', 1),
(181, '2021-08-30', 'India', 'Sahyadri Mohan Shitole', '9552661400', 'shitolesahyadri2001@gmail.com', 'IMG-20200530-WA0000.jpeg', 'TULJARAM CHATURCHAND COLLAGE BARAMATI', 'FOOD BRANDING', 70.00, '124293750307', 'Screenshot_20210830-184521.jpg', 1, 0, 'S', '', 1),
(182, '2021-08-30', 'India', 'Vishwajeet M. Upadhye', '9011094669', 'Raj Tower, B wing, flat no. 409, Santoshnagar, Katraj, Pune 46', '16303281422672763145633663540201.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'BUSINESS PLAN|DOODLING|INSTRUMENTAL|PHOTOGRAPHY|SKETCHING', 350.00, '124218643792', 'IMG-20210830-WA0005.jpg', 1, 0, 'S', '', 0),
(183, '2021-08-30', 'India', 'Sahyadri Mohan Shitole', '7558711356', 'sahyadrishitole1@gmail.com', 'IMG-20200530-WA0000.jpeg', 'TULJARAM CHATURCHAND COLLAGE BARAMATI', 'FOOD BRANDING', 70.00, '124293750307', 'Screenshot_20210830-184521.jpg', 1, 0, 'S', '', 1),
(184, '2021-08-30', 'India', 'Sanjivani Kailas Wadgaonkar', '9970819393', 'sanjivaniwadgaonkar@gmail.com', '1595067389714.jpg', 'BMCC', '', 0.00, '124218718587', 'Screenshot_20210830-185805.jpg', 1, 0, '', '', 0),
(185, '2021-08-30', 'India', 'Vishwajeet M. Upadhye', '9011094669', 'vmupadhye04@gmail.com', '16303304485672129223166541243113.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'BUSINESS PLAN|DOODLING|INSTRUMENTAL|PHOTOGRAPHY|SINGING', 350.00, '124218643792', 'IMG-20210830-WA0005.jpg', 1, 0, 'S', '', 0),
(186, '2021-08-30', 'India', 'Rohini Kishan Sontakke', '8767889606', 'rohinisontakke2805@gmail.com', 'tTJBE8frd8YJ48d8T3y9JKgC.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', '', 0.00, '124219848463', 'Screenshot_20210830-190746_compress79~2_compress91', 1, 0, 'S', '', 0),
(187, '2021-08-30', 'India', 'Ashish  Kumar', '82949 47876', 'kumarashish2121@gmail.com', 'inbound7014091622559625680.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'QUIZ', 70.00, '124219039755', 'inbound2421387640054439292.jpg', 1, 0, 'S', '', 1),
(188, '2021-08-30', 'India', 'Sanchi Vijaykumar Waghmare', '09970659525', 'sanchiwaghmare597@gmail.com', 'DANCHI D.pdf', 'BMCC', 'QUIZ', 70.00, '124294746668', 'IMG-20210830-WA0004.jpg', 1, 0, 'S', '', 1),
(189, '2021-08-30', 'India', 'AJAY BHAU MARGALE', '7559134645', 'ajaymargale593@gmail.com', '', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'QUIZ', 70.00, 'T2108301920434093117165', 'Screenshot_20210830-194551_Gallery.jpg', 1, 0, 'S', '', 1),
(190, '2021-08-30', 'India', 'VAISHNAVI DNYANESHWAR NANAWARE', '9322234580', 'vaishunanaware2003@gmail.com', '20210801_200226.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'QUIZ', 70.00, '124220673576', '20210830_201259.jpg', 1, 0, 'S', '', 1),
(191, '2021-08-30', 'India', 'Nidhi Ashok Gilbile', '9503828549', 'nidhigilbile@gmail.com', 'IMG-20210827-WA0004.jpg', 'SARHAD COLLEGE', 'DOODLING', 70.00, '124295327300', 'IMG-20210830-WA0001.jpg', 1, 0, 'S', '', 1),
(192, '2021-08-30', 'India', 'Sarthaki Bhawanji Sarafdar', '9822616305', 'sarthakiredmi22@gmail.com', 'sarthaki photo.jpg', 'SYMBIOSIS JUNIOR COLLEGE,KIWALE', '', 0.00, 'pnr05172102290736165', 'bmcc receiot.jpg', 1, 0, '', '', 0),
(193, '2021-08-30', 'India', 'Vedant Arun Mete', '8975897694', 'metevedant4707@gmail.com', 'IMG_20210824_125335.jpg', 'BMCC, PUNE', 'PHOTOGRAPHY', 70.00, 'T2108302026457762611908', 'Screenshot_2021-08-30-20-27-00-771_com.phonepe.app', 1, 0, 'S', '', 0),
(194, '2021-08-30', 'India', 'Dhiren Ratnakar Matey', '9665209317', 'kashidhiren@gmail.com', 'New doc Aug 30, 2021 8.20 PM.jpg', 'B.M.C.C.', 'QUIZ', 70.00, '124281425491', 'Screenshot_2021-08-30-20-53-15-79_49b96b5fbae0d12a', 1, 0, 'S', '', 0),
(195, '2021-08-30', 'India', 'Satvik S Ingale', '8180820900', 'satviking101@gmail.com', 'Photo.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'QUIZ', 70.00, 'T2108302049202341201828', 'Astitva payment receipt.jpg', 1, 0, 'S', '', 1),
(196, '2021-08-30', 'India', 'Ayushi  Roy', '8936890332', 'ayushi28roy@gmail.com', 'IMG20201224121257.jpg', 'MIT SOA , PUNE', 'PAINTING', 70.00, '124220568448', 'IMG_20210830_205517.jpg', 1, 0, 'S', '', 1),
(197, '2021-08-30', 'India', 'Neha Mohan Warkhade', '7261983038', 'nehawarkhade1010@gmail.com', 'IMG-20210830-WA0010.jpg', 'H. V DESAI', 'PAINTING', 70.00, '124297455612', 'IMG-20210830-WA0012.jpg', 1, 0, 'S', '', 1),
(198, '2021-08-30', 'India', 'AMIT KUMAR SINGH', '07769930482', 'amitksingh2103@gmail.com', 'IMG_20210830_225444_compress58.jpg', 'MIT WPU PUNE', '', 0.00, '124223645604', 'Screenshot_2021-08-30-23-07-31-372_com.google.andr', 1, 0, 'S', '', 0),
(199, '2021-08-30', 'India', 'Anushka Ajay Sane', '8767773430', 'aasane2002@gmail.com', 'WhatsApp Image 2021-08-30 at 10.58.38 PM.jpeg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'SINGING', 70.00, '124223644403', 'WhatsApp Image 2021-08-30 at 11.07.15 PM.jpeg', 1, 0, 'S', '', 1),
(200, '2021-08-30', 'India', 'Avantika Rajkumar Patil', '9373923406', 'avantikapatil318@gmail.com', '', 'NUMAVI GIRLS HIGHSCHOOL AND JR COLLEGE', 'DANCE|FASHION SHOW', 140.00, '124297906169', 'IMG_20210830_233845.jpg', 1, 0, 'S', '', 1),
(201, '2021-08-31', 'India', 'Taher Firoj Master', '96567080527', 'taherrmasterr@gmail.com', 'IMG-20210830-WA0044.jpg', 'SYMBIOSIS COLLEGE OF ARTS AND COMMERCE PUNE', 'PHOTOGRAPHY', 70.00, 'T2108310824213403658788', 'Screenshot_20210831-082436.jpg', 1, 0, 'S', '', 1),
(202, '2021-08-31', 'India', 'Shambhavi  Rotithor', '9021340021', 'pune', '16303812179891261969384605203336.jpg', 'GS MOZE COLLEGE OF ENGINEERING, PUNE', 'PAINTING', 70.00, 'BM12420261627451', 'Screenshot_2021-08-31-09-09-03-181_com.adobe.reade', 1, 0, 'S', '', 0),
(203, '2021-08-31', 'India', 'Abhijeet Jivandas Bairagi', '9370102076', 'ajbairagi2002@gmail.com', '', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE,PUNE', 'PHOTOGRAPHY', 70.00, 'T2108310930351189009466', 'TapScanner 08-31-2021-09.34 (1) (1).jpg', 1, 0, 'S', '', 1),
(204, '2021-08-31', 'India', 'Sakshi Vikas Sathe', '7820893477', 'casakshisathe@gmail.com', 'WhatsApp Image 2020-08-31 at 7.09.01 PM.jpeg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'ELOCUTION', 70.00, 'T2108310940444419872823', 'WhatsApp Image 2021-08-31 at 9.41.47 AM (1).jpeg', 1, 0, 'S', '', 1),
(205, '2021-08-31', 'India', 'Rishi Jayagobinda Palai', '9763334644', 'rishipalai7@gmail.com', 'Rishi photograph.pdf', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'QUIZ', 70.00, 'T2108311048569438458220', 'IMG-20210831-WA0001.jpg', 1, 0, 'S', '', 1),
(206, '2021-08-31', 'India', 'Sahil Madhav Bhole', '9850826458', 'sahilbhole.as@gmail.com', 'photogrid.photocollagemaker.photoeditor.squarepic_', 'BMCC', 'CREATIVE WRITING', 70.00, '124310255876', 'Screenshot_2021-08-31-11-00-29-73.png', 1, 0, 'S', '', 1),
(207, '2021-08-31', 'India', 'Rutuja Vilasrao Chalikwar', '7522987773', 'chalikwarrutuja2@gmail.com', 'New Doc 2021-02-11 21.15.25_1.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE ,PUNE', 'GROUP DISCUSSION', 70.00, '124302473785', 'Screenshot_20210831-110204.png', 1, 0, 'S', '', 1),
(208, '2021-08-31', 'India', 'Poornima  .', '6282809020', 'poornimaak03@gmail.com', 'SAVE_20210831_123745.jpg', 'SYMBIOSIS COLLEGE OF ARTS AND COMMERCE', 'FASHION SHOW', 70.00, 'CICAgOCymP3OZA', 'Screenshot_2021-08-31-12-07-51-547_com.google.andr', 1, 0, 'S', '', 0),
(209, '2021-08-31', 'India', 'Sanjana Sameer Gad', '9921667784', 'sanjanagad@gmail.com', 'PicsArt_08-31-01.13.50.jpg', 'BMCC', 'DANCE', 70.00, '124357736699', 'IMG_20210831_131753_806.jpg', 1, 0, 'S', '', 1),
(210, '2021-08-31', 'India', 'Gauri R Heggadi', '9148067794', 'gauriheggadi@gmail.com', 'Gauri Photo.gif', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'SKETCHING', 70.00, '124312579243', 'IMG-20210831-WA0006.jpg', 1, 0, 'S', '', 1),
(211, '2021-08-31', 'India', 'Riya  Raj', '8840674011', 'riyaraj9591@gmail.com', 'Snapchat-1420383998.jpg', 'ADITYA NARAYAN RAJKIYA INTER COLLEGE, CHAKIA-CHANDAULI', 'QUIZ', 0.00, '124313321834', 'IMG-20210831-WA0014.jpg', 1, 0, 'S', '', 1),
(212, '2021-08-31', 'India', 'VIYONA PRIYA DSOUZA', '9552040129', 'dsouzaviyona18@gmail.com', 'DSC_0129.JPG', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'PHOTOGRAPHY', 70.00, '124303042506', 'RECIEPT-min.jpg', 1, 0, 'S', '', 1),
(213, '2021-08-31', 'India', 'Manasi Vijay Pingale', '9119474758', 'pingalemanasi@gmail.com', '16303980667958781869340388754864.jpg', 'MVP', 'CREATIVE WRITING', 70.00, '124304278291', 'IMG-20210831-WA0004.jpg', 1, 0, 'S', '', 1),
(214, '2021-08-31', 'India', 'Sakshi Balaji Dudhambe', '7385058435', 'sakshidudhambe@gmail.com', '20210313_085523.jpg', 'YASHWANT MAHAVIDYAL NANDED', 'FASHION SHOW', 70.00, '124313532843', 'c6051b83-1988-4fd9-b5ea-8777b59b8638.jpg', 1, 1, 'S', '', 1),
(215, '2021-08-31', 'India', 'Mahesh Balaji Naladkar', '9561221213', 'maheshnaladkar22@gmail.com', 'PicsArt_08-31-01.55.57.jpg', 'BMCC', 'PHOTOGRAPHY', 70.00, '124305074829', 'IMG-20210831-WA0020.jpg', 1, 0, 'S', '', 1),
(216, '2021-08-31', 'India', 'ANAYA DEVENDRA BUTALA', '9912938618', 'anayabutala@gmail.com', '1.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', '30 SEC FILM|FOOD BRANDING|PHOTOGRAPHY', 210.00, 'UA0416548568', 'IMG_20210831_143812 (1).jpg', 1, 0, 'S', '', 1),
(217, '2021-08-31', 'India', 'Yash Dnyaneshwar Amane', '7066438849', 'amane.yash@gmail.com', 'WhatsApp Image 2021-08-31 at 2.13.47 AM.jpeg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE ,PUNE', 'QUIZ', 70.00, 'T2108311450395231639291', 'WhatsApp Image 2021-08-31 at 2.21.54 AM.jpeg', 1, 0, 'S', '', 1),
(218, '2021-08-31', 'India', 'Samruddhi  Kavitkar', '9307170301', 'kavitkarminal@gmail.com', 'Scan 2020-7-25 22.05.38.pdf', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE (BMCC)', 'PHOTOGRAPHY', 70.00, '1243000 73076', 'PAYMENT SC.jpg', 1, 0, 'S', '', 1),
(219, '2021-08-31', 'India', 'SMK Rishi Kumaar', '9834785768', 'smk.rishikumaar@outlook.com', 'IMG-20210831-WA0037.jpg', 'N/A', 'PHOTOGRAPHY', 70.00, '124306275641', 'IMG-20210831-WA0040.jpg', 1, 0, 'S', '', 1),
(220, '2021-08-31', 'India', 'Arti Kisan Kengale', '8275302022', 'artikengale2002@gmail.com', 'New doc 14-Aug-2021 7.24 PM.pdf', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE ,PUNE', 'SKETCHING', 70.00, 'T2108311547042174857469', 'WhatsApp Image 2021-08-31 at 3.18.05 AM.jpeg', 1, 0, 'S', '', 1),
(221, '2021-08-31', 'India', 'Juilee A Petkar', '8007761518', 'juileepetkar4401@gmail.com', 'DSC_9445.JPG', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'DOODLING', 70.00, '124306461170', 'Screenshot_20210831-155253.png', 1, 0, 'S', '', 1),
(222, '2021-08-31', 'India', 'Tanaya Sunil Londhe', '9623442594', 'tanayaslondhe@gmail.com', 'IMG-20200718-WA0019.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'QUIZ', 70.00, '124306560116', 'IMG-20210831-WA0007.jpg', 1, 0, 'S', '', 1),
(223, '2021-08-31', 'India', 'Mayuri Balasaheb Telang', '9561778195', 'balasahebtelang@gmail.com', 'IMG-20210830-WA0022 (1).jpg', 'SMV COLLAGE', 'DANCE', 70.00, '124359861730', 'IMG-20210831-WA0011.jpg', 1, 0, 'S', '', 1),
(224, '2021-08-31', 'India', 'Dhanashree Baburao Patole', '9657588150', 'dhanashreepatole255@gmail.com', 'IMG_20200729_143527.jpg', 'BMCC', 'DANCE', 70.00, '124316204773', 'IMG-20210831-WA0008.jpg', 1, 0, 'S', '', 1),
(225, '2021-08-31', 'India', 'Arya Nitin Deo', '8668271599', 'arya.nitindeo@gmail.com', 'C7A284FB-C004-490E-9A78-2528C961578F.jpeg', 'MIT WPU', '', 0.00, '124315024105', '21D39628-3CBE-418F-AEA4-508BF7720D84.jpeg', 1, 0, '', '', 1),
(226, '2021-08-31', 'India', 'Bhumica Nandkumar Kuchekar', '9322275217', 'kuchekarbhumika@gmail.com', 'Bhumika 11th admission form.pdf', 'MODERN COLLEGE OF COMMERCE', 'DANCE', 70.00, '124307236110', 'WhatsApp Image 2021-08-31 at 4.53.25 PM.jpeg', 1, 0, 'S', '', 1),
(227, '2021-08-31', 'India', 'Payal Rajkumar Doshi', '9890984321', 'alpanadoshi1980@gmail.com', 'New doc Apr 29, 2021 8.07 PM.pdf', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'DOODLING', 70.00, 'T2108311642401104786615', 'IMG-20210831-WA0079.jpg', 1, 0, 'S', '', 1),
(228, '2021-08-31', 'India', 'Divya Pandurang Gulve', '8625026562', 'divyagulve11@gmail.com', '', 'BMCC', 'QUIZ', 70.00, 'T2108311859330804373846', 'IMG-20210831-WA0004.jpg', 1, 0, 'S', '', 1),
(229, '2021-08-31', 'India', 'Ketan Mahadu Dhanawade', '9850130901', 'dhanawadeketan93@gmail.com', 'IMG_20200607_183926_986.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE, PUNE', 'PAINTING', 70.00, '124319829201', 'IMG-20210831-WA0008.jpg', 1, 0, 'S', '', 1),
(230, '2021-08-31', 'India', 'Vaishnavi Santosh Jadhav', '7447614048', 'vaishjadhav2065@gmail.com', '259ec065ca991eb3323e91c5983a7bee.jpg', 'BRIHAN MAHARASTRA COLLEGE OF COMMERCE', 'QUIZ', 70.00, '124309694720', 'Screenshot_20210831-192013.png', 1, 0, 'S', '', 1),
(231, '2021-08-31', 'India', 'Kashish  Thakur', '8087940025', 'thakur.kashish2011@gmail.com', 'Kaagaz_20210730_184630270972-1 (1)-min (1)-compres', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'DOODLING|FOOD BRANDING', 140.00, 'T2108311921285258468070', 'WhatsApp Image 2021-08-31 at 7.24.00 PM.jpeg', 1, 0, 'S', '', 1),
(232, '2021-08-31', 'India', 'Ishani Vinayak Apte', '9604447691', 'ishani.apte@gmail.com', 'Ishani - Sep-2020.JPG', 'BMCC JUNIOR COLLEGE', '30 SEC FILM', 70.00, '124320054915', 'astitva payment.JPG', 1, 0, 'S', '', 0),
(233, '2021-08-31', 'India', 'Jay  Rawal', '8107867721', 'jayrawal07102000@gmail.com', 'Screenshot_20210831_195614.jpg', 'MMCOE, PUNE', '', 0.00, 'T2108312029052421518944', 'Screenshot_20210831_202916.jpg', 1, 0, 'S', '', 1),
(234, '2021-08-31', 'India', 'Sagar Anil Dadas', '9373511317', 'sagardadas904@gmail.com', 'WhatsApp Image 2021-08-31 at 7.54.51 AM.jpeg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE ,PUNE', 'QUIZ', 70.00, 'T2108312028407052234125', 'WhatsApp Image 2021-08-31 at 8.00.14 AM.jpeg', 1, 0, 'S', '', 1),
(235, '2021-08-31', 'Canada', 'Palak  Walia', '4312779397', 'palak.walia08@gmail.com', 'image.jpg', 'ASSINIBOINE COMMUNITY COLLEGE', 'DANCE', 0.00, '', '', 0, 0, 'S', '', 0),
(236, '2021-08-31', 'India', 'Sai Sunil Thokal', '7620017322', 'Alibag, Maharashtra', 'New doc Aug 31, 2021 8.13 PM.jpg', 'D. G. RUPAREL COLLEGE OF ARTS, SCIENCE AND COMMERCE', 'DOODLING', 70.00, '124311012056', 'New doc Aug 31, 2021 8.33 PM.jpg', 1, 0, 'S', '', 1),
(237, '2021-08-31', 'India', 'Hritik  Raj', '8873782095', 'rajhritik2202@gmail.com', 'Photo ID.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'QUIZ', 70.00, 'T2108312041303734746134', 'IMG-20210831-WA0012.jpg', 1, 0, 'S', '', 1),
(238, '2021-08-31', 'India', 'Saurabh  Singh', '7488588801', 'Yadav Saurabh4902@gmail.com', 'IMG-20210831-WA0026.jpg', 'BANARAS HINDU UNIVERSITY', 'TREASURE HUNT', 0.00, 'APLAPmCBH 4lmiUCwFlmGTIQ T7 WB Gzhnf690', 'Screenshot_2021-08-31-13-49-40-25_fd1e8ef594b195c5', 1, 0, 'G', 'Bihar', 0),
(239, '2021-08-31', 'India', 'AARTI DNYANESHWAR KOTHURKAR', '8956996767', 'aartikothurkar02@gmail.com', 'IMG-20210831-WA0069__01.jpg', 'JAGDAMBA INSTITUTE OF PHARMACY AND RESEARCH', 'FASHION SHOW', 70.00, '124320936871', '1630423977304.jpg', 1, 0, 'S', '', 1),
(240, '2021-08-31', 'India', 'Chaitanya Ganpat Gurme', '8600096215', 'chaitangurme@gmail.com', 'IMG_20210831_205238.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'QUIZ', 70.00, 'T2108312059421529701364', 'IMG-20210831-WA0006.jpg', 1, 0, 'S', '', 0),
(241, '2021-08-31', 'India', 'Shraddha Pramod Suryawanshi', '9022354039', 'suryavanshishraddha06@gmail.com', '', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'FOOD BRANDING', 70.00, 'T2108312057264308180077', 'Astitva.pdf', 1, 0, 'S', '', 0),
(242, '2021-08-31', 'India', 'Kusum Ganesh Gore', '9156058418', 'kusumgore894@gmail.com', 'IMG-20210831-WA0009.jpg', 'LAXAMANRAO APTE JUNIOR COLLEGE, PUNE', 'PAINTING', 70.00, 'S99332764', 'IMG-20210831-WA0006.jpg', 1, 0, 'S', '', 0),
(243, '2021-08-31', 'India', 'Nisha  Devi', '9096213315', 'madhu15092001@gmail.com', '20201204_135013.jpg', 'NA', 'FASHION SHOW', 70.00, '124321364893', 'IMG-20210831-WA0080.jpg', 1, 1, 'S', '', 1),
(244, '2021-08-31', 'India', 'Himanshi V Porwal', '07972322056', 'himanshiporwal12@gmail.com', '16304258245553549418209643935424.jpg', 'ST MIRA\'S COLLEGE', 'FOOD BRANDING', 70.00, 'KKBKH21243671358', 'IMG-20210831-WA0010.jpg', 1, 0, 'S', '', 1),
(245, '2021-08-31', 'United Arab Emirates', 'Shriya  Kokane', '0562010390', 'shriyablueberry@gmail.com', '', 'N/A', 'DOODLING', 0.00, '', '', 0, 0, 'S', '', 0),
(246, '2021-08-31', 'India', 'Ruchita Ramesh Joshi', '08275055450', 'ruchitajoshi2035@gmail.com', '20210610130817_IMG_4879-01_2.jpeg', 'S.P.COLLAGE', 'DOODLING|ELOCUTION', 140.00, '124322841069', 'IMG-20210831-WA0008.jpg', 1, 0, 'S', '', 0),
(247, '2021-08-31', 'India', 'KEYUR H GAIKWAD', '+917768909973', 'keyurgaikwad@gmail.com', 'xyz.jpg', 'TILAK MAHARASHTRA VIDYAPEETH', 'PAINTING|PHOTOGRAPHY|SKETCHING', 210.00, '196029326', 'MalharCompetitionFees20210831.jpg', 1, 0, 'S', '', 1),
(248, '2021-08-31', 'India', 'Jyoti Prabhakar Bhalerao', '9922268467', 'bhalerao.jyoti1508@gmail.com', 'Jyoti image.jpg', 'BMCC', 'FASHION SHOW|FOOD BRANDING', 140.00, '124313081612', 'IMG-20210831-WA0010.jpg', 1, 0, 'S', '', 0),
(250, '2021-08-31', 'India', 'Vivek  Singh', '9699418660', 'vivek.singh28042004@gmail.com', 'IMG_20210701_174804_411.jpg', 'KENDRIYA VIDYALAYA 9BRD AF PUNE', 'TREASURE HUNT', 110.00, '124312883194', 'IMG-20210831-WA0023.jpg', 1, 0, 'G', '', 1),
(251, '2021-08-31', 'India', 'Abhay  Singh', '9049997095', 'abhay05abhi@gmail.com', 'IMG-20210831-WA0022.jpg', 'KENDRIYA VIDYALAYA 9BRD AF PUNE', 'TREASURE HUNT', 0.00, '124312883194', 'IMG-20210831-WA0023.jpg', 1, 0, 'G', 'Maharashtra', 1),
(252, '2021-08-31', 'Bahrain', 'Leya Susan Joy', '+97338058143', 'susan.leya@gmail.com', 'F6FBF024-11AC-418D-9F18-3CB5057A90C5.jpeg', 'UNIVERSITY CANADA WEST, VANCOUVER', 'PHOTOGRAPHY', 0.00, '', '', 0, 0, 'S', '', 1),
(253, '2021-08-31', 'India', 'SAMIDHA PALASH SHIRAM', '8767690349', 'spshiram@gmail.com', 'PASSPORT PHOTO.jpeg', 'SP COLLEGE', 'DANCE', 70.00, 'IMPS/P2A-124400105047', 'PAYMENT SS.jpeg', 1, 0, 'S', '', 1),
(254, '2021-09-01', 'India', 'Ranjana Madathil Sasikumar', '7907153148', 'ranju271202@gmail.com', 'Adobe Scan 30 Aug 2021 (2)-min.pdf', 'SYMBIOSIS COLLEGE OF ARTS AND COMMERCE', 'DANCE', 70.00, '124408298757', '788ED1DC-3676-42B1-8888-B2E57B340C00-min.png', 1, 0, 'S', '', 1),
(255, '2021-09-01', 'India', 'Trisha Naresh Dhingra', '9168041456', 'trisha150402@gmail.com', '20210901_083237.jpg', 'SYMBIOSIS COLLEGE OF ARTS AND COMMERCE', 'SINGING', 70.00, '124422906976', '20210901_084503.jpg', 1, 0, 'S', '', 1),
(256, '2021-09-01', 'India', 'Swarali Atul Shete', '9763341399', 'swaralishete25@gmail.com', 'inbound4549963142529330719.jpg', 'DY PATIL COLLEGE OF ENGINEERING AKURDI', 'DANCE', 70.00, '124467316838', 'inbound7410197816126092873.jpg', 1, 0, 'S', '', 1),
(257, '2021-09-01', 'India', 'Gauri Sachin Shinde', '7219421732', 'gauri.shinde13092005@gmail.com', 'IMG-20210830-WA0050.jpg', 'BYK COLLEGE', 'DOODLING', 70.00, 'BM12440350947745', 'IMG-20210901-WA0011.jpg', 1, 0, 'S', '', 1),
(258, '2021-09-01', 'India', 'Akash  Singh', '8983841619', 'aakashsingh3917@gmail.com', 'IMG_20210712_5626.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', '', 0.00, '124409173738', 'Screenshot_2021-09-01-09-40-14-51_4336b74596784d9a', 1, 0, 'S', '', 0),
(259, '2021-09-01', '', '  ', '', '', '', '', '', 0.00, 'T2109010935275229672680', 'IMG_20210901_093731.pdf', 1, 0, '', '', 0),
(260, '2021-09-01', 'India', 'Nakshatra Avadhut Kulkarni', '7620983937', 'kulnaksh007@gmail.com', 'WhatsApp Image 2021-09-01 at 9.31.03 AM.jpeg', 'BMCC', 'QUIZ', 70.00, '124414836045', 'WhatsApp Image 2021-09-01 at 9.38.42 AM.jpeg', 1, 0, 'S', '', 1),
(261, '2021-09-01', 'India', 'ISHA SURESH MAHALLE', '8329877921', 'ishamaha524@gmail.com', 'dc2703b5-10db-4169-9e67-3f0158e9cc4a.jpg', 'SP COLLEGE', 'ELOCUTION', 70.00, '000015946425', 'isha mahalle_BMCC Pune.jpg', 1, 0, 'S', '', 1),
(262, '2021-09-01', 'India', 'Mrunmayee M Sonawale', '9673839900', 'mrunmayees7@gmail.com', '62D93581-DBE9-4E7E-8119-F788371B5964.jpeg', 'TATA INSTITUTE OF SOCIAL SCIENCES', 'DANCE', 70.00, 'T2109011027277429672114', '39D8DCE9-D8FA-4418-93C6-14707BCCF3F8.png', 1, 0, 'S', '', 1),
(263, '2021-09-01', 'India', 'Snehdeep Milind Tayade', '7887990359', 'nyannyanneko5@gmail.com', 'IMG_6026_11zon (1).jpg', 'SYMBIOSIS COLLEGE OF ARTS AND COMMERCE', 'PHOTOGRAPHY', 70.00, '124417361215', 'IMG_6526.PNG', 1, 0, 'S', '', 0),
(264, '2021-09-01', 'India', 'Mugdha Yogesh Angal', '7709458975', 'mugdhaangal123@gmail.com', 'VIRTUAL DL MUGDHA.jpeg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE, PUNE', 'CREATIVE WRITING|SINGING', 140.00, '124417532116', 'RECEIPT OF PAYMENT ASTITVA.jpeg', 1, 0, 'S', '', 1),
(265, '2021-09-01', 'India', 'Elifiyea Rapheal Carassco', '9284778318', 'carasscoelifiyea@gmail.com', 'IMG-20210827-WA0087.jpeg', 'CHRIST COLLEGE', 'SKETCHING', 70.00, '124312487399', 'IMG-20210831-WA0004.jpg', 1, 0, 'S', '', 0),
(266, '2021-09-01', 'India', 'Geetanjali Vilas Pandit', '7385913216', 'geetanjalipandit3117@gmail.com', 'IMG_20210827_183626.jpg', 'S.M.JOSHI HADPSAR, PUNE', 'TREASURE HUNT', 110.00, 'T2109011134518836257468', 'Screenshot_2021-09-01-11-35-14-089_com.phonepe.app', 1, 0, 'G', '', 0),
(267, '2021-09-01', 'India', 'Priyanka Dnyanoba Barate', '8010145058', 'priyankabarate23@gmail.com', 'IMG-20201228-WA0023.jpg', 'B. P. SULAKHE COMMERCE COLLEGE, BARSHI', 'TREASURE HUNT', 0.00, 'T2109011134518836257468', 'Screenshot_2021-09-01-11-35-14-089_com.phonepe.app', 1, 0, 'G', 'Maharashtra', 0),
(268, '2021-09-01', 'India', 'Kunal Prasad Damodare', '9975509440', 'damodarekunal@gmail.com', 'WhatsApp Image 2021-09-01 at 11.26.18 AM.jpeg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE, PUNE', 'QUIZ', 70.00, '124418465077', 'WhatsApp Image 2021-09-01 at 11.39.30 AM.jpeg', 1, 0, 'S', '', 1),
(269, '2021-09-01', 'India', 'Riya Ramakant Takle', '9022624544', 'riyart2020@gmail.com', 'IMG_20210811_201756.jpg', 'PRAVARA WOMEN\'S COLLEGE OF PHARMACY CHINCHOLI, SINNER', 'TREASURE HUNT', 110.00, 'T2109011144284465373992', 'Screenshot_2021-09-01-11-45-25-698_com.phonepe.app', 1, 0, 'G', '', 0),
(270, '2021-09-01', 'India', 'Arti Laxman Ware', '9373877105', 'artiware2@gmail.com', 'IMG-20210901-WA0009.jpg', 'N/A', 'TREASURE HUNT', 0.00, 'T2109011144284465373992', 'Screenshot_2021-09-01-11-45-25-698_com.phonepe.app', 1, 0, 'G', 'Maharashtra', 0),
(271, '2021-09-01', 'India', 'Nakshatra Avadhut Kulkarni', '7620983937', 'nakshatra052001@gmail.com', 'WhatsApp Image 2021-09-01 at 9.31.03 AM.jpeg', 'BMCC', 'TREASURE HUNT', 110.00, '124417275350', 'WhatsApp Image 2021-09-01 at 12.25.11 PM.jpeg', 1, 0, 'G', '', 0),
(272, '2021-09-01', 'India', 'Ashita Ganesh Dalvi', '9112877889', 'dalviashita9@gmail.com', 'my pic.jpeg', 'BMCC', 'CREATIVE WRITING', 70.00, 'T2109011315102919049871', 'WhatsApp Image 2021-09-01 at 1.17.26 PM.jpeg', 1, 0, 'S', '', 1);
INSERT INTO `astitva_registrations` (`id`, `dot`, `country`, `name`, `contact_no`, `email_address`, `photo_id`, `college_name`, `events`, `amount`, `transaction_id`, `receipt`, `agree`, `age`, `type`, `state`, `verified`) VALUES
(273, '2021-09-01', 'India', 'Sakshi Sudhir Valinkar', '9850793465', 'sakshivalinkar@gmail.com', 'PicsArt_09-01-01.18.52.jpg', 'BMCC', 'DOODLING', 70.00, '124431914297', 'PicsArt_09-01-01.27.48.jpg', 1, 0, 'S', '', 1),
(274, '2021-09-01', 'India', 'Dipak Shahaji Pawar', '+919604523804', 'pawardipak508@gmail.com', 'dipak pic.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE, PUNE', '', 0.00, '124418799011', 'Screenshot_2021-09-01-13-58-06-77.jpg', 1, 0, 'S', '', 0),
(275, '2021-09-01', 'India', 'Bhagat Ankita Narasinh', '9322979341', 'ankitab0304@gmail.com', '', 'BMCC', 'QUIZ', 70.00, 'TT2109011327509427962384', 'payment SS.pdf', 1, 0, 'S', '', 1),
(276, '2021-09-01', 'India', 'Gauri Pravin Surate', '8830768413', 'gauri.surate04@gmail.com', 'IMG_20210901_125256.jpg', 'M.E.S. BSMHSS', 'GROUP DISCUSSION', 70.00, '124414798469', 'Screenshot_2021-09-01-14-40-32-373_com.citiuat.jpg', 1, 0, 'S', '', 1),
(277, '2021-09-01', 'India', 'Komal Mukesh Gandhi', '8329701932', 'komalgandhi242@gmail.com', 'IMG20160619092604.jpg', '', 'SKETCHING', 70.00, '124472766634', 'IMG-20210901-WA0002.jpg', 1, 0, 'S', '', 1),
(278, '2021-09-01', 'India', 'Hrishita  AGARWAL', '7004043700', 'hagarwal1201@gmail.com', 'passport.jpg', 'SHRI RAM COLLEGE OF COMMERCE', 'DOODLING', 70.00, 'CICAgOCyhorncg', 'payment BMCC.jpeg', 1, 0, 'S', '', 1),
(279, '2021-09-01', 'India', 'Sanika Sanjay Bhalsing', '9067092210', 'sanikabhalsing1011@gmail.com', 'inbound8546076106061622387.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE, PUNE', 'DOODLING', 70.00, '124417859456', 'inbound2791361948383608565.jpg', 1, 0, 'S', '', 1),
(280, '2021-09-01', 'India', 'Mansi Chandrakant Yadav', '09158336007', 'manuyadav2323@gmail.com', 'Snapchat-447058601.jpg', 'MES GARWARE COLLEGE OF COMMERCE', '', 0.00, '124476986783', 'Screenshot_20210901-194003_GPay.jpg', 1, 0, 'S', '', 0),
(281, '2021-09-01', 'India', 'Shruti Mahavir Banthiya', '7720990789', 'smbanthiya789@gmail.com', 'IMG_20210901_193625.jpg', 'BMCC', 'DOODLING', 70.00, 'T2109011949069115408909', 'Screenshot_2021-09-01-19-49-32-558_com.phonepe.app', 1, 0, 'S', '', 0),
(282, '2021-09-01', 'India', 'Shubham Vishnu Shinde', '+91 80804 66609', 'Shubhamshindeca123@gmail.com', 'IMG_20210901_200024.jpg', 'BMCC PUNE', 'TREASURE HUNT', 0.00, 'T2109012003080453614244', 'Screenshot_2021-09-01-20-03-24-437_com.phonepe.app', 1, 0, 'G', 'Maharashtra', 0),
(283, '2021-09-01', 'India', 'Aniket Sambhaji Pawar', '9322240746', 'pawaraniket229@gmail.com', 'photo 001.png', 'BMCC', 'QUIZ', 70.00, 'T2109012020227049035589', 'Screenshot_20210901-202546_PhonePe.jpg', 1, 0, 'S', '', 1),
(284, '2021-09-01', 'India', 'Siddhi Rajendra Katule', '9422310393', 'Jayakatule253@gmail.com', 'Kaagaz_20210203_221505840-1.jpg', 'N/A', 'DANCE', 70.00, '124448858180', '1630507895322.jpg', 1, 0, 'S', '', 1),
(285, '2021-09-01', 'India', 'Abhijeet Satish Sonale', '7058021293', 'abhijeetsonale903@gmail.com', 'Candid !!.jpg', 'R.P COLLEGE OSMANABAD', 'QUIZ', 70.00, '124420461649', 'Screenshot_20210901_202909.jpg', 1, 0, 'S', '', 1),
(286, '2021-09-01', 'India', 'Kajol  Gandhi', '08408801980', 'ishitagandhi131095@gmail.com', 'IMG_20210901_161820.jpg', 'MARATHWADA MITRA MANDAL', 'DOODLING', 70.00, '124417775406', 'Screenshot_20210901-205527.jpg', 1, 0, 'S', '', 1),
(287, '2021-09-01', 'India', 'Vedant V Ingawale', '9284844821', 'vedantingawale1109@gmail.com', 'Square Fit_20207217522958.jpg', 'PVDP COLLEGE OF AGRICULTURE', 'SKETCHING', 70.00, '124421838855', 'Screenshot_2021-09-01-21-54-05-914_com.google.andr', 1, 0, 'S', '', 0),
(288, '2021-09-01', 'India', 'Prathamesh Prashant Morde', '9403706857', 'prathamesh.morde9@gmail.com', 'IMG_20210901_235251-min.jpg', 'V.N.G.C.A NEHRUNAGAR', 'QUIZ', 70.00, 'T2109012359301887819643', 'Screenshot_2021-09-01-23-59-44-538_com.phonepe.app', 1, 0, 'S', '', 0),
(289, '2021-09-02', 'India', 'Sainath Rameshwar Sontakke', '09405776500', 'sainathsontakke85@gmail.com', 'Title - Wed Jul 29 14_09_53 GMT+05_30 2020-min.jpg', 'BRIHAN MAHARASHTRA COLLAGE OF COMMERCE', 'PHOTOGRAPHY', 70.00, '124581111820', 'Screenshot_2021-09-02-07-51-14-96.jpg', 1, 0, 'S', '', 1),
(290, '2021-09-02', 'India', 'Satyajit  Rathod', '7756984844', 'satyajitrathod999@gmail.com', 'New Doc 2020-02-01 11.41.43_1.jpg', 'BILL GATES COLLEGE OSMANABAD', 'QUIZ', 70.00, 'T2109020849329537819558', 'Screenshot_2021-09-02-08-49-55-403_com.phonepe.app', 1, 0, 'S', '', 0),
(291, '2021-09-02', 'India', 'Anshul Prakash Petkar', '9011113024', 'anshulpetkar01@gmail.com', '16305539304344211207835753434818.jpg', 'MES ABASAHEB GARWARE COLLEGE, PUNE', '', 0.00, '124509379997', 'Screenshot_20210902_091810.jpg', 1, 0, 'S', '', 1),
(292, '2021-09-02', 'India', 'VISHNUJITH  S', '+91 8943047224', 'vishnujiths52@gmail.com', 'ID-min.jpg', 'N/A', 'PAINTING', 70.00, '124582001430', 'Transaction ID.jpeg', 1, 0, 'S', '', 1),
(293, '2021-09-02', 'India', 'Divya Ravindra Kulkarni', '9096490459', 'divyakulkarni0606@gmail.Com', '1630553487775IMG_20210608_110407.jpg', 'BMCC', 'DOODLING', 70.00, 'T2109020836222128212732', '1630554506408Screenshot_20210902_083633.jpg', 1, 0, 'S', '', 1),
(294, '2021-09-02', 'India', 'Saniya Ayub Attar', '9359159553', 'attarsaniya2@gmail.com', 'IMG_20210902_084301.jpg', 'BMCC', 'QUIZ', 70.00, 'T2109021022177118629428', 'IMG-20210902-WA0001.jpg', 1, 0, 'S', '', 1),
(295, '2021-09-02', 'India', 'Khushwantsingh B Rajput', '7264091987', 'rajputrk1777@gmail.com', 'inbound6077420134622838345.jpg', 'INSTITUTE OF CHEMICAL TECHNOLOGY,MARATHWADA CAMPUS, JALNA', 'FASHION SHOW|PHOTOGRAPHY|QUIZ|SINGING', 280.00, '124362441577', 'inbound6749658047689325371.jpg', 1, 0, 'S', '', 1),
(296, '2021-09-02', 'India', 'Sadanand Shashikant Bandawar', '9623058388', 'sadanandbandawar30081@gmail.com', 'WhatsApp Image 2021-09-01 at 9.30.29 PM (2).jpeg', 'BMCC COLLAGE PUNE', 'PHOTOGRAPHY', 70.00, 'T2109021102260796312072', '47f7234c-d996-4409-ac61-08615f810d11.jpg', 1, 0, 'S', '', 1),
(297, '2021-09-02', 'India', 'Sakshi Amol Darekar', '9049664665', 'saakshii0622@gmail.com', '', 'S P COLLEGE PUNE', 'PHOTOGRAPHY', 70.00, 'T2109021135591243580314', 'IMG-20210902-WA0000.jpg', 1, 0, 'S', '', 0),
(298, '2021-09-02', 'India', 'Yash Ulhas Sonawane', '7517704770', 'yashsonawane29111@gmail.com', '', 'BMCC', 'QUIZ', 70.00, 'IBKL210902375260', 'IMG-20210902-WA0000.jpg', 1, 0, 'S', '', 0),
(299, '2021-09-02', 'India', 'Harshal Prasad Vanjari', '9022361328', 'harshal.vanjari0606@gmail.com', 'IMG-20210902-WA0003.jpg', 'BMCC', '30 SEC FILM', 70.00, 'T2109021234077122720229', 'IMG-20210902-WA0004.jpg', 1, 0, 'S', '', 1),
(300, '2021-09-02', 'India', 'Ayat  Jan', '09596884018', 'ayatjaan7006@gmail.com', 'IMG_20210902_123553_212.webp', 'SYMBIOSIS COLLEGE OF ARTS AND COMMERCE', 'SINGING', 70.00, '124532545037', 'Screenshot_20210902-125311_GPay.jpg', 1, 0, 'S', '', 1),
(301, '2021-09-02', 'India', 'Chetna Vikas Chopade', '9119561041', 'chopadearchana12@gmail.com', '20210902_125006_compress12.jpg', 'D.E.S.HIGH SCHOOL AND JUNIOR COLLEGE, DATALA', 'PAINTING', 70.00, 'APLAP7151b688d848ec7184ed0b8c3848f9', 'Screenshot_20210902-130501_Amazon.jpg', 1, 0, 'S', '', 1),
(302, '2021-09-02', 'India', 'Sakshi Santosh Ovhal', '9579033383', 'sakshiovhal2410@gmail.com', 'WhatsApp Image 2021-09-02 at 1.02.45 PM.jpeg', 'BRIHAN MAHARSHTRA COLLEGE OF COMMERCE', 'ELOCUTION', 70.00, '124568021925', 'WhatsApp Image 2021-09-02 at 1.14.46 PM.jpeg', 1, 0, 'S', '', 1),
(303, '2021-09-02', 'India', 'Pratiksha Maruti Katkar', '9011296002', 'pratikshamk19@gmail.com', 'New doc 2 Sep 2021 1.13 pm.jpg', 'KAMAL NAYAN BAJAJ', 'PAINTING|SKETCHING', 140.00, '124513163250', 'Screenshot_20210902-132918_GPay.jpg', 1, 0, 'S', '', 1),
(304, '2021-09-02', 'India', 'Vaishnavi Vijay Ballal', '8149889304', 'vaishnaviballal104@gmail.com', '1630569156176730018135641292535.jpg', 'BMCC, PUNE', 'DANCE', 70.00, '124533123296', 'Screenshot_2021-09-02-13-30-31-188_com.google.andr', 1, 0, 'S', '', 0),
(305, '2021-09-02', 'India', 'Darshana  Pawar', '07721050663', 'darshanapawar558@gmail.com', '1630568991599.jpg', 'B.R GHOLAP SANGVI', 'TREASURE HUNT', 110.00, '124533288558', '1630570555382.jpg', 1, 0, 'G', '', 0),
(306, '2021-09-02', 'India', 'Bhakti  Waghulde', '9422470686', 'bhakti.waghulde@gmail.com', '1630568991534.jpg', 'M.M.C COLLEGE PUNE', 'TREASURE HUNT', 0.00, '124533288558', '1630570555382.jpg', 1, 0, 'G', 'Maharashtra', 0),
(307, '2021-09-02', 'India', 'Artpita Narayan Hole', '8010805304', 'arpitahole888@gmail.com', 'IMG-20210902-WA0060.jpg', 'BMCC PUNE', 'QUIZ', 0.00, 'T2109021351258844091581', 'IMG-20210902-WA0062.jpg', 1, 0, 'S', '', 1),
(308, '2021-09-02', 'India', 'Dev Rajesh Hedaoo', '9146917640', 'drhedaoo22@gmail.com', 'IMG_20210902_134942.jpg', 'BMCC COLLEGE', 'FOOD BRANDING|PHOTOGRAPHY', 140.00, '124514789873', 'IMG-20210902-WA0015.jpg', 1, 0, 'S', '', 1),
(309, '2021-09-02', 'India', 'Gouri Pradip Garad', '9834036537', 'gaurigarad1208@gmail.com', 'IMG-20210901-WA0067.jpg', 'N/A', 'TREASURE HUNT', 110.00, 'T2109021433399273285701', 'Screenshot_2021-09-02-14-34-11-010_com.phonepe.app', 1, 0, 'G', '', 0),
(310, '2021-09-02', 'India', 'Swapnil Pradip Garad', '7972102476', 'swapnilgaradpatil@gmail.com', 'IMG-20210901-WA0066.jpg', 'DR CHANDRABHANU SONVANE JR COLLGE UKKADGAV, BARSHI', 'TREASURE HUNT', 0.00, 'T2109021433399273285701', 'Screenshot_2021-09-02-14-34-11-010_com.phonepe.app', 1, 0, 'G', 'Maharashtra', 0),
(311, '2021-09-02', 'India', 'BHAKTI RAJESH BALDAWA', '9011016670', 'daksheshacademy@gmail.com', '001 (2).jpg', 'M P JR COLLEGE , PUNE', 'DOODLING', 70.00, '124514805931', 'doodling competition receipt.jpeg', 1, 0, 'S', '', 1),
(312, '2021-09-02', 'India', 'Bhaargavi  Deshmukh', '8408815366', 'deshmukhbhaargavi@gmail.com', 'IMG_20210902_122642.jpg', 'N/A', 'PAINTING', 70.00, '124512306184', 'IMG_20210902_143917.jpg', 1, 0, 'S', '', 1),
(313, '2021-09-02', 'India', 'Shrawani Avinash Parbale', '9767349187', 'shrawaniparbale@gmail.com', '20210902_143311.jpg', 'SIR PARSHURAMBHAU COLLEGE', 'DANCE', 70.00, '124534232794', 'IMG-20210902-WA0009.jpg', 1, 0, 'S', '', 1),
(314, '2021-09-02', 'India', 'Asit Dipak Adhainge', '07776992322', 'asitadhainge2001@gmail.com', 'IMG-20210902-WA0024.jpg', 'BMCC', 'QUIZ', 70.00, '124514194575', 'IMG-20210902-WA0028.jpg', 1, 0, 'S', '', 1),
(315, '2021-09-02', 'India', 'SHAMAL SACHIN KOLE', '8010164962', 'shamalkole254@gmail.com', 'IMG_20210902_144529.jpg', 'BMCC PUNE', 'DANCE|FASHION SHOW', 140.00, '124514320252', 'Screenshot_2021-09-02-14-52-35-795_in.org.npci.upi', 1, 0, 'S', '', 0),
(316, '2021-09-02', 'India', 'Tasmai Sanjay Kaipilyawar', '9561810131', 'tkaipilyawar@gmail.com', 'FC359C04-6658-431E-BA8C-30BFD68DE1FE.jpeg', 'BMCC', 'CREATIVE WRITING|DOODLING|PAINTING', 210.00, '124586920659', '45F64736-ED95-4B01-92D9-5113DFAD69CD.jpeg', 1, 0, 'S', '', 1),
(317, '2021-09-02', 'India', 'EKTHA  SANDHYA', '8888203973', 'ektha008@gmail.com', 'Capture.jpg', 'SYMBIOSIS COLLEGE OF ARTS AND COMMERCE', 'CREATIVE WRITING|ELOCUTION|GROUP DISCUSSION', 210.00, '000378939501', 'Screenshot (54).png', 1, 0, 'S', '', 1),
(318, '2021-09-02', 'India', 'Asit Dipak Adhainge', '07776992322', 'asitadhainge2005@gmail.com', 'IMG-20210902-WA0024.jpg', 'BMCC', 'FOOD BRANDING', 70.00, '124515841498', 'IMG-20210902-WA0038.jpg', 1, 0, 'S', '', 1),
(319, '2021-09-02', 'India', 'Shridhar Sanjay Kothavale', '7620250310', 'shridharkothavale1711@gmail.com', 'IMG-20200608-WA0013.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE (BMCC), PUNE', 'QUIZ', 70.00, 'T2109021609314063735966', 'Screenshot_2021-09-02-16-09-49-92_944a2809ea1b4cda', 1, 0, 'S', '', 0),
(320, '2021-09-02', 'India', 'Siya Avinash Borulkar', '7588537916', 'borulkarsiya2004@gmail.com', 'IMG_20210902_082636.jpg', 'DEOGIRI COLLEGE,AURANGABAD', 'DOODLING|PAINTING|PHOTOGRAPHY|SKETCHING', 280.00, 'T2109020944526135204397', 'SAVE_20210902_174939.jpg', 1, 0, 'S', '', 1),
(321, '2021-09-02', 'India', 'Chaitanya Shital Jadhav', '9370693731', 'chaitanyajadhav9370@gmail.com', 'Screenshot_2021-03-06-19-07-01-16_512d59465dcd1d9c', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', '', 0.00, 'T2109021825258620130028', 'Screenshot_2021-09-02-18-26-29-62_944a2809ea1b4cda', 1, 0, 'S', '', 0),
(322, '2021-09-02', 'India', 'Vaishnavi Sunil Mavale', '7666625512', 'vaishnavimavale175@gmail.com', '', 'S.P.COLLEGE, PUNE', 'PAINTING', 70.00, 'T2109021947016965301541', 'Screenshot_2021-09-02-19-47-34-250_com.phonepe.app', 1, 0, 'S', '', 0),
(323, '2021-09-02', 'India', 'Poorva Prashant Sorte', '7083866965', 'sortepurva14@gmail.com', 'IMG_20210902_192324.jpg', 'SIR PARSHURAMBHAU COLLEGE', 'INSTRUMENTAL', 70.00, 'APLAPfae801336ee872986cac25b8e4ce18', 'IMG_20210902_202223.jpg', 1, 0, 'S', '', 1),
(324, '2021-09-02', 'India', 'Arya Sandeep Godbole', '9869663268', 'aryagodbole2004@gmail.com', 'Arya Photo.jpg', 'N/A', 'INSTRUMENTAL', 70.00, '124540513726', 'Transaction receipt.JPG', 1, 0, 'S', '', 0),
(325, '2021-09-02', 'India', 'Ritika Arvind Kalyankar', '9322983909', 'ritikakalyankar@gmail.com', 'IMG-20210902-WA0025.jpg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'FASHION SHOW', 70.00, '124521917987', 'Screenshot_20210902-214251.png', 1, 0, 'S', '', 0),
(326, '2021-09-02', 'India', 'Rachana Raju Hegde', '8668320887', 'rachanahegde7928@gmail.com', 'WhatsApp Image 2021-09-02 at 9.51.55 PM.jpeg', 'BRIHAN MAHARASHTRA COLLEGE OF COMMERCE', 'DANCE', 70.00, '124541129724', 'WhatsApp Image 2021-09-02 at 10.03.45 PM.jpeg', 1, 0, 'S', '', 0),
(327, '2021-09-02', 'India', 'NEHA VIKRANT APTE', '7769853270', 'apteneha06@gmail.com', 'NEHA COLLEGE ID.jpeg', 'SP COLLEGE', 'DOODLING', 70.00, '000387717001', 'Neha receipt.JPG', 1, 0, 'S', '', 0),
(328, '2021-09-02', 'India', 'Gargi Mangesh Kolapkar', '7066505604', 'gargi.kolapkar@gmail.com', 'photo.jpg', 'NATIONAL INSTITUTE OF OPEN SCHOOLING', 'DANCE', 70.00, '9881907241@ybl', '241083082_570571730732087_8804025901238534401_n.jp', 1, 0, 'S', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `astitva_sponsors`
--

CREATE TABLE `astitva_sponsors` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `amount` int(10) NOT NULL,
  `balance` int(10) NOT NULL,
  `logo` varchar(600) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `astitva_sponsors`
--

INSERT INTO `astitva_sponsors` (`id`, `name`, `amount`, `balance`, `logo`) VALUES
(9, 'Dummy', 500, 300, 'mercedes-amg-gtr-3840x2160-2018-cars-4k-17087.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `astitva_users`
--

CREATE TABLE `astitva_users` (
  `id` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `year` varchar(3) NOT NULL,
  `event` varchar(200) NOT NULL,
  `usertype` char(2) NOT NULL DEFAULT 'U',
  `userstatus` varchar(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `astitva_users`
--

INSERT INTO `astitva_users` (`id`, `username`, `loginid`, `password`, `phone`, `stream`, `year`, `event`, `usertype`, `userstatus`) VALUES
(9, 'aditya', 'adityajanve@gmail.com', '8b019af0a1de935cc5e76d804967d51a', 9823080277, 'bca', 'TY', 'ALL', 'a', 'b'),
(3, 'reuben', 'reuben2000@outlook.com', '35fc7094500b59432b300c4dd1cb2230', 9823080277, 'bca', 'TY', 'PAINTING', 'eh', '1'),
(21, 'Vrushali Mahajan', 'vrushali.mahajan@gmail.com', '556e75cb438c7207e655db1fccb82984', 9881107321, 'TEACHER', 'TEA', 'ALL', 'a', '1'),
(12, 'Vardhan Rode', 'manojvr24@outlook.com', '556e75cb438c7207e655db1fccb82984', 9284856050, 'BCOM', 'TY', 'ALL', 'a', '1'),
(13, 'Kavya Balakrishnan', 'kavyabalakrishnan2302@gmail.com', '348d7ea418beca140da9c0141fc82ab4', 9146080645, 'BCOM', 'TY', 'ALL', 'a', '1'),
(14, 'Pratik Potdar', 'pratik.potdar@gmail.com', 'f88a2e4a562212fd4c7f9fc3d66bf3a7', 9766377047, 'MCOM', 'TY', 'ALL', 'a', '1'),
(16, 'Neetika Sharma', 'neetikamahajan.sharma@gmail.com', '47be1188ea328112ab577fdb9a4aca43', 7720008238, 'MCOM', 'TY', 'ALL', 'a', '1'),
(22, 'Manjusha', 'manjusha@gmail.com', '556e75cb438c7207e655db1fccb82984', 9637411845, 'TEACHER', 'TEA', 'ALL', 'a', '1'),
(20, 'Anagha Kale', 'anagha.kale@gmail.com', 'fe1d2f53ac8add6fd390fbb6f980b03d', 9595959939, 'TEACHER', 'TEA', 'ALL', 'a', '1');

-- --------------------------------------------------------

--
-- Table structure for table `astitva_volunteers`
--

CREATE TABLE `astitva_volunteers` (
  `id` int(3) NOT NULL,
  `volname` varchar(100) NOT NULL,
  `volphone` varchar(11) NOT NULL,
  `volstream` char(30) NOT NULL,
  `yr` varchar(3) NOT NULL,
  `hr` varchar(4) NOT NULL,
  `volevent` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `astitva_volunteers`
--

INSERT INTO `astitva_volunteers` (`id`, `volname`, `volphone`, `volstream`, `yr`, `hr`, `volevent`) VALUES
(7, 'Dummy', '9834370040', 'mcom', 'fy', 'yes', 'PHOTOS');

-- --------------------------------------------------------

--
-- Table structure for table `astitva_winners`
--

CREATE TABLE `astitva_winners` (
  `winner_id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `college` varchar(20) NOT NULL,
  `event` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `astitva_winners`
--

INSERT INTO `astitva_winners` (`winner_id`, `name`, `college`, `event`, `position`) VALUES
(1, 'Dummy', 'BMCC', 'PHOTOGRAPHY', '3rd');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `sr` int(100) NOT NULL,
  `plat` varchar(100) NOT NULL,
  `comm` int(5) NOT NULL,
  `part` varchar(5) NOT NULL,
  `part1` varchar(5) NOT NULL,
  `over` int(5) NOT NULL,
  `event` varchar(100) NOT NULL,
  `satis` int(5) NOT NULL,
  `freq` varchar(100) NOT NULL,
  `cap` int(5) NOT NULL,
  `con` int(5) NOT NULL,
  `crea` int(5) NOT NULL,
  `eng` int(5) NOT NULL,
  `freq1` int(5) NOT NULL,
  `social` int(5) NOT NULL,
  `reach` int(5) NOT NULL,
  `appeal` int(5) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `sugg` varchar(200) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sr`, `plat`, `comm`, `part`, `part1`, `over`, `event`, `satis`, `freq`, `cap`, `con`, `crea`, `eng`, `freq1`, `social`, `reach`, `appeal`, `youtube`, `sugg`, `name`) VALUES
(1, 'Dummy', 1, 'yes', 'yes', 1, 'DEBATE', 1, 'daily', 1, 1, 1, 1, 1, 1, 1, 1, 'yes', 'amazing ', 'reuben'),
(5, 'instagram', 1, 'yes', 'yes', 1, 'GROUP DISCUSSION', 1, 'daily', 1, 1, 1, 1, 1, 1, 1, 1, 'yes', '', ''),
(4, 'instagram', 1, 'yes', 'yes', 1, 'GROUP DISCUSSION', 1, 'daily', 1, 1, 1, 1, 1, 1, 1, 1, 'yes', '', 'Riya Raj'),
(6, 'instagram', 1, 'yes', 'yes', 1, 'GROUP DISCUSSION', 1, 'daily', 1, 1, 1, 1, 1, 1, 1, 1, 'yes', '', 'Khedekar Riya mhasku'),
(7, 'instagram', 1, 'yes', 'yes', 1, 'GROUP DISCUSSION', 1, 'daily', 1, 1, 1, 1, 1, 1, 1, 1, 'yes', '', 'Khedekar Riya mhasku'),
(8, 'whatsapp', 1, 'yes', 'yes', 1, 'GROUP DISCUSSION', 1, 'daily', 1, 1, 1, 1, 1, 1, 1, 1, 'yes', '', 'Sarthaki sarafdat'),
(9, 'whatsapp', 4, 'yes', 'yes', 1, 'GROUP DISCUSSION', 1, 'daily', 4, 5, 5, 5, 5, 5, 5, 4, 'yes', '', ''),
(10, 'whatsapp', 5, 'yes', 'yes', 5, 'FOOD BRANDING', 5, 'daily', 5, 5, 5, 5, 5, 4, 5, 5, 'yes', '', 'Rekha Meshram'),
(11, 'whatsapp', 1, 'yes', 'yes', 1, 'QUIZ', 1, 'alternate', 1, 1, 1, 1, 1, 1, 1, 1, 'no', 'No', 'Gulve Divya panduran');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(4) NOT NULL,
  `img1` varchar(200) NOT NULL,
  `img2` varchar(200) NOT NULL,
  `img3` varchar(200) NOT NULL,
  `img4` varchar(200) NOT NULL,
  `img5` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(3, 'IMG_1643.JPG', 'SDP_2289.JPG', 'decoration.jpg', 'essay.jpg', 'Poster2021.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `marquee`
--

CREATE TABLE `marquee` (
  `sr` int(2) NOT NULL,
  `id` int(2) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marquee`
--

INSERT INTO `marquee` (`sr`, `id`, `content`) VALUES
(5, 16, 'Hurry up!! Last few days left for registration..');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `astitva_countries`
--
ALTER TABLE `astitva_countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `country` (`country`);

--
-- Indexes for table `astitva_events`
--
ALTER TABLE `astitva_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `astitva_judges`
--
ALTER TABLE `astitva_judges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `astitva_registrations`
--
ALTER TABLE `astitva_registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_address` (`email_address`);

--
-- Indexes for table `astitva_sponsors`
--
ALTER TABLE `astitva_sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `astitva_users`
--
ALTER TABLE `astitva_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `loginid` (`loginid`);

--
-- Indexes for table `astitva_volunteers`
--
ALTER TABLE `astitva_volunteers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `astitva_winners`
--
ALTER TABLE `astitva_winners`
  ADD PRIMARY KEY (`winner_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marquee`
--
ALTER TABLE `marquee`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `astitva_countries`
--
ALTER TABLE `astitva_countries`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `astitva_events`
--
ALTER TABLE `astitva_events`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `astitva_judges`
--
ALTER TABLE `astitva_judges`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `astitva_registrations`
--
ALTER TABLE `astitva_registrations`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=329;

--
-- AUTO_INCREMENT for table `astitva_sponsors`
--
ALTER TABLE `astitva_sponsors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `astitva_users`
--
ALTER TABLE `astitva_users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `astitva_volunteers`
--
ALTER TABLE `astitva_volunteers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `astitva_winners`
--
ALTER TABLE `astitva_winners`
  MODIFY `winner_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `sr` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marquee`
--
ALTER TABLE `marquee`
  MODIFY `sr` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
