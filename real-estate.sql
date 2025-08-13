-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2025 at 02:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real-estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `image`, `name`, `description`) VALUES
(1, 'palmjebel.jfif', 'Palm Jebel Ali', 'Palm Jebel Ali Palm Jebel Ali Palm Jebel Ali Palm Jebel Ali'),
(2, 'downtowndubai.jpg', 'Downtown Dubai', 'Downtown Dubai Downtown Dubai Downtown Dubai'),
(3, 'Business Bay.jpg', 'Business Bay', 'Business Bay Business Bay Business Bay'),
(4, 'dubaimarina.jfif', 'Dubai Marina', 'Dubai Marina Dubai Marina Dubai Marina'),
(5, 'dubaicreekharbouremaardubai.jpeg', 'Dubai Creek Harbour', 'Dubai Creek Harbour Dubai Creek Harbour Dubai Creek Harbour'),
(6, 'bluewatersislanddubai.jpg', 'Bluewaters Island', 'Bluewaters Island Bluewaters Island Bluewaters Island');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `message` varchar(100) DEFAULT 'nill',
  `interested_property` varchar(100) NOT NULL,
  `lang` varchar(100) DEFAULT 'nill'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone_no`, `message`, `interested_property`, `lang`) VALUES
(1, 'Shah Fahad', 'www.fahadkhan00087@gmail.com', '03309520278', 'testing', '', NULL),
(2, 'Shah Fahad', 'www.fahadkhan00087@gmail.com', '03309520278', 'fsadf', '', NULL),
(3, 'Shah Fahad', 'www.fahadkhan00087@gmail.com', '3309520278', 'sdafsa', '', NULL),
(4, 'Shah Fahad', 'www.fahadkhan00087@gmail.com', '+9713309520278', 'sdfasfasf', '', NULL),
(5, 'aaa', 'www.fahadkhan00087@gmail.com', '03309520278', '', '', ''),
(6, 'sdfsa', 'www.fahadkhan00087@gmail.com', '3309520278', '', '', 'arabic'),
(7, 'Shah Fahad', 'www.fahadkhan00087@gmail.com', '03309520278', '', '', ''),
(8, 'fffff', 'fffffffffffffff@gmail.com', '', '', '', 'urdu'),
(10, 'bbb', 'www.fahadkhan00087@gmail.com', '+9713309520278', '', '', 'urdu'),
(11, 'abab', 'www.fahadkhan00087@gmail.com', '+9713309520278', '', '', 'hindi'),
(12, 'Shah Fahad', 'www.fahadkhan00087@gmail.com', '+9713309520278', '', '', 'arabic'),
(13, 'Shah Fahad', 'www.fahadkhan00087@gmail.com', '+9713309520278', '', '', 'arabic'),
(14, 'Shah Fahad', 'www.fahadkhan00087@gmail.com', '+9713309520278', 'nill', '', 'hindi'),
(15, '', '', '', 'nill', 'single-page.php?id=3', 'nill'),
(16, '', '', '', 'nill', 'http://localhost/real-estate-project/single-page.php?id=3', 'nill'),
(17, '', '', '', 'nill', 'http://localhost/real-estate-project/single-page.php?id=2', 'nill'),
(18, 'Shah Fahad', 'www.fahadkhan00087@gmail.com', '03309520278', 'sas', 'http://localhost/real-estate-project/single-page.php?id=9', 'nill');

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `id` int(100) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`id`, `logo`, `name`, `description`) VALUES
(1, 'blog-image1.webp', 'EMAAR', 'Emaar Properties is one of Dubai\'s leading and largest developers. As the region\'s premier developer'),
(2, 'slider-logo2.jpg', 'DAMAC', 'Creator of iconic landmarks like Palm Jumeirah, shaping Dubai\'s coastline with innovative projects a'),
(3, 'slider-logo3.jpg', 'DEYAAR', ' Creator of iconic landmarks like Palm Jumeirah, shaping Dubai\'s coastline with innovative projects '),
(4, 'slider-logo4.jpg', 'SOBHA', '  Creator of iconic landmarks like Palm Jumeirah, shaping Dubai\'s coastline with innovative projects'),
(5, 'slider-logo5.jpg', 'SAMANA', '  Creator of iconic landmarks like Palm Jumeirah, shaping Dubai\'s coastline with\r\n                  '),
(6, 'slider-logo6.jpg', 'ELINGTON', '  Creator of iconic landmarks like Palm Jumeirah, shaping Dubai\'s coastline with  innovative project');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(100) NOT NULL,
  `facility_icon` varchar(1000) NOT NULL,
  `facility` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `facility_icon`, `facility`) VALUES
(1, '<svg class=\"w-6 h-6 text-blue-500\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 16.5V15a4.5 4.5 0 0 1 4.5-4.5h9A4.5 4.5 0 0 1 21 15v1.5M4.5 19.5h15M9 19.5v-1.5m6 1.5v-1.5\" /></svg>', 'Ample Parking Space'),
(2, '<svg class=\"w-6 h-6 text-red-500\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 3v2m6.364 1.636l-1.414 1.414M21 12h-2m-1.222 6.364l-1.414-1.414M12 21v-2M5.636 18.364l1.414-1.414M3 12h2M5.636 5.636l1.414 1.414M12 8a4 4 0 100 8 4 4 0 000-8z\" /></svg>', 'BBQ Areas'),
(3, '<svg class=\"w-6 h-6 text-green-600\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" /></svg>', 'Championship Golf Course'),
(4, '<svg class=\"w-6 h-6 text-yellow-600\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 10h16M10 14h10M10 18h10\" /></svg>', 'Cricket Field'),
(5, '<svg class=\"w-6 h-6 text-pink-500\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M5 13l4 4L19 7\" /></svg>', 'Cycling Trails'),
(6, '<svg class=\"w-6 h-6 text-green-400\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 12s3-6 9-6 9 6 9 6-3 6-9 6-9-6-9-6z\" /></svg>', 'Flowers Garden'),
(7, '<svg class=\"w-6 h-6 text-gray-700\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 2a10 10 0 100 20 10 10 0 000-20z\" /></svg>', 'Hospital'),
(8, '<svg class=\"w-6 h-6 text-orange-500\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\"><circle cx=\"12\" cy=\"12\" r=\"3\" /><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 3v3m0 12v3m9-9h-3M6 12H3\" /></svg>', 'Basketball Court'),
(9, '<svg class=\"w-6 h-6 text-cyan-500\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 12s4-8 9-8 9 8 9 8-4 8-9 8-9-8-9-8z\" /></svg>', 'Beach Access');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` varchar(500) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `purpose` varchar(50) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `listing_type` varchar(100) NOT NULL,
  `bedrooms` int(11) DEFAULT 0,
  `bathrooms` int(11) DEFAULT 0,
  `area_sqft` int(11) DEFAULT 0,
  `floors` int(100) NOT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `location_image` varchar(255) DEFAULT NULL,
  `about_location` text DEFAULT NULL,
  `masterPlan_image` varchar(255) DEFAULT NULL,
  `masterPlan_desc` text DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_desc` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = Draft, 1 = Published',
  `featured` tinyint(1) DEFAULT 0,
  `area_id` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `desc`, `type`, `purpose`, `location`, `listing_type`, `bedrooms`, `bathrooms`, `area_sqft`, `floors`, `price`, `image`, `location_image`, `about_location`, `masterPlan_image`, `masterPlan_desc`, `meta_title`, `meta_desc`, `status`, `featured`, `area_id`, `created_at`) VALUES
(1, 'Heritage Building', 'Quam et qui corrupti sunt amet iusto sunt. Et quod dolore laudantium voluptatem sit possimus aperiam. Autem consequatur dolore ipsam optio vel dolorem inventore hic nihil accusantium facilis ipsam. Aut et aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'Apartment', 'For Sale', 'Dubai, UAE', '', 2, 2, 1212, 0, 950000.00, '1753954551_third-sec-card1-img.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, '2025-07-31 09:35:51'),
(2, 'Modern Villa', 'Quam et qui corrupti sunt amet iusto sunt. Et quod dolore laudantium voluptatem sit possimus aperiam. Autem consequatur dolore ipsam optio vel dolorem inventore hic nihil accusantium facilis ipsam. Aut et aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'Apartment', 'For Rent', 'Abu Dhabi, UAE', '', 4, 3, 2323, 0, 1250000.00, '1753954767_third-sec-card2-img.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 2, '2025-07-31 09:39:27'),
(3, 'Luxury Penthouse', 'Quam et qui corrupti sunt amet iusto sunt. Et quod dolore laudantium voluptatem sit possimus aperiam. Autem consequatur dolore ipsam optio vel dolorem inventore hic nihil accusantium facilis ipsam. Aut et aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'Apartment', 'For Sale', 'Downtown Dubai, UAE', '', 4, 2, 34324, 0, 468000.00, '1753954844_third-sec-card3-img.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 3, '2025-07-31 09:40:44'),
(5, 'Luxury Penthouse', 'Quam et qui corrupti sunt amet iusto sunt. Et quod dolore laudantium voluptatem sit possimus aperiam. Autem consequatur dolore ipsam optio vel dolorem inventore hic nihil accusantium facilis ipsam. Aut et aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'Commercial', 'For Sale', 'Downtown Dubai, UAE', '', 5, 5, 555555, 0, 555555555.00, '1753977420_blog-image3.webp', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 2, '2025-07-31 15:57:00'),
(9, 'Luxury house', 'vxfxvd dfsgfdg dfgdsfg df', 'Office', 'For Rent', 'Downtown Dubai, UAE', '', 2, 2, 2423, 0, 10000.00, '1754379655_download.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, '2025-08-05 07:40:55'),
(10, 'TownHouse', 'Quam et qui corrupti sunt amet iusto sunt. Et quod dolore laudantium voluptatem sit possimus aperiam. Autem consequatur dolore ipsam optio vel dolorem inventore hic nihil accusantium facilis ipsam. Aut et aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'Office', 'For Sale', 'Downtown Dubai, UAE', '', 2, 2, 22222, 0, 10000.00, '1754821912_AnzoorGallery6copy.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 4, '2025-08-10 10:31:52'),
(11, 'aa', 'jkdsaf fsadjkf saf ksadfjksadf sak sadfjk sfadjk sadkfjh fdjdf f fd hfj df djf df dfdjfjhkdsh fhjdfks sk dsjkfs kf ks f dskfj sd fsdk fjhdskf sdk fjsakffs shah fahad khan  my name is abc i am from shabqadar charsadda i am a full stack web developer', 'Villa', 'For Sale', 'aa', '', 2, 3, 23232, 0, 6800.00, '1754911673_WhatsApp Image 2025-05-31 at 08.09.30_b3e86c12.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 3, '2025-08-11 11:27:53'),
(12, 'new property', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quos reiciendis dicta. Eos quam quis, illum cupiditate autem obcaecati nostrum magni iure temporibus suscipit animi labore mollitia, dolorem quasi reiciendis?', 'Townhouse', 'For Rent', 'Downtown Dubai, UAE', '', 3, 3, 100, 100, 10000.00, '1754981635_AnzoorGallery7-original.jpg', '1754981635_AnzoorGallery2.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quos reiciendis dicta. Eos quam quis, illum cupiditate autem obcaecati nostrum magni iure temporibus suscipit animi labore mollitia, dolorem quasi reiciendis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quos reiciendis dicta. Eos quam quis, illum cupiditate autem obcaecati nostrum magni iure temporibus suscipit animi labore mollitia, dolorem quasi reiciendis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quos reiciendis dicta. Eos quam quis, illum cupiditate autem obcaecati nostrum magni iure temporibus suscipit animi labore mollitia, dolorem quasi reiciendis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quos reiciendis dicta. Eos quam quis, illum cupiditate autem obcaecati nostrum magni iure temporibus suscipit animi labore mollitia, dolorem quasi reiciendis?', '1754981635_download.jpeg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quos reiciendis dicta. Eos quam quis, illum cupiditate autem obcaecati nostrum magni iure temporibus suscipit animi labore mollitia, dolorem quasi reiciendis?', 'meta title', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quos reiciendis dicta. Eos quam quis, illum cupiditate autem obcaecati nostrum magni iure temporibus suscipit animi labore mollitia, dolorem quasi reiciendis?', 1, 1, 3, '2025-08-12 06:53:55'),
(13, 'asf', '', 'Apartment', 'For Sale', 'fas', '', 0, 0, 0, 0, 0.00, '', '', '', '', '', '', '', 0, 0, 0, '2025-08-12 07:47:04'),
(14, '2', 'werw weqr', 'Apartment', 'For Sale', 'Business Bay, UAE', '', 3, 3, 333, 3, 6800.00, '1754984961_download.jpeg', '1754984961_AnzoorGallery3.jpg', 'rewqer', '1754984961_AnzoorGallery3.jpg', 'rewq', 'meta title', 'fsdadf', 1, 0, 5, '2025-08-12 07:49:21'),
(15, '', '', 'Apartment', '', '', '', 0, 0, 0, 0, 0.00, '', '', '', '', '', '', '', 0, 0, 0, '2025-08-12 07:53:44'),
(16, '', '', 'Apartment', '', '', '', 0, 0, 0, 0, 0.00, '', '', '', '', '', '', '', 0, 0, 0, '2025-08-12 07:53:50'),
(17, 'abc', 'safdas', 'Villa', 'For Rent', 'Downtown Dubai, UAE', 'offplan', 3, 3, 333333, 3, 10000.00, '1754995560_AnzoorGallery4.jpg', '1754995560_AnzoorGallery3.jpg', 'fsadfa afsd fsda', '1754995560_AnzoorGallery3.jpg', 'asfsadfsadf safda afsd dsaf', 'meta title', 'dsfa safd saf saf', 1, 1, 1, '2025-08-12 10:46:00'),
(18, 'new new property', 'klsdf flsakdf lsadkfj sd;akjfsda ;fsdaf; sdajfsadjjjjkdslfajjjjjjjjjjjjjjjjjjjjjjjjj kdsfs sdfjakfl kfsda fsda f sdajd fsda djfd jsadf jlsadkdf sadld f;kj;sd adaf jllsad;d f', 'Office', 'For Sale', 'Downtown Dubai, UAE', 'sale', 2, 2, 2233, 2, 10000.00, '1754998103_download.jpeg', '1754998103_AnzoorGallery3.jpg', 'sadkflas; ;fsdafdklfas sldkafj sakf sakfdsadf las fslafk slakdf sdkaf saldfk slaldfk saf', '1754998103_AnzoorGallery4copy.jpg', 'sdaklfjs kfsdadlf l kfjsladf lsafksa flsakfsafsa     safdlk', 'meta title', 'jkasd dAJKDS akjd KAJD Djak', 1, 1, 2, '2025-08-12 11:28:23'),
(19, 'lastest property', 'lksdaf ksadlfas lsakfl llsaflk salkf sfdalk', 'Villa', 'For Sale', 'Downtown Dubai, UAE', 'sale', 2, 2, 2323, 3, 10000.00, '1754998499_AnzoorGallery4copy.jpg', '1754998499_AnzoorGallery5.jpg', 'kslfda sadfkl jjljksfdaj', '1754998499_AnzoorGallery2.jpg', 'fskjkadl laskdf fsalkasflk  asfdlk', 'meta title', 'kjlsadfj sadklfsad lfksadfksadldfas', 1, 1, 4, '2025-08-12 11:34:59'),
(20, 'sdafas', '', 'Apartment', 'For Sale', 'fsdaf', '', 0, 0, 0, 0, 0.00, '', '', '', '', '', '', '', 0, 0, 0, '2025-08-12 11:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `property_developers`
--

CREATE TABLE `property_developers` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `developer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_developers`
--

INSERT INTO `property_developers` (`id`, `property_id`, `developer_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 4),
(4, 3, 5),
(8, 5, 1),
(9, 5, 2),
(10, 5, 3),
(11, 5, 4),
(20, 9, 2),
(21, 9, 4),
(22, 10, 2),
(23, 10, 5),
(24, 11, 3),
(25, 11, 4),
(26, 11, 5),
(27, 11, 6),
(28, 12, 2),
(29, 12, 3),
(30, 14, 4),
(31, 14, 5),
(32, 17, 2),
(33, 17, 4),
(34, 18, 2),
(35, 18, 3),
(36, 18, 4),
(37, 18, 5),
(38, 18, 6),
(39, 19, 2),
(40, 19, 3),
(41, 19, 4);

-- --------------------------------------------------------

--
-- Table structure for table `property_facilities`
--

CREATE TABLE `property_facilities` (
  `id` int(100) NOT NULL,
  `property_id` int(100) NOT NULL,
  `facility_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_facilities`
--

INSERT INTO `property_facilities` (`id`, `property_id`, `facility_id`) VALUES
(1, 11, 1),
(2, 11, 2),
(3, 11, 4),
(4, 11, 5),
(5, 12, 1),
(6, 12, 2),
(7, 14, 3),
(8, 14, 5),
(9, 17, 3),
(10, 17, 4),
(11, 17, 5),
(12, 18, 2),
(13, 18, 4),
(14, 18, 5),
(15, 18, 6),
(16, 19, 2),
(17, 19, 3),
(18, 19, 4);

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `id` int(100) NOT NULL,
  `property_id` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_images`
--

INSERT INTO `property_images` (`id`, `property_id`, `type`, `image`) VALUES
(1, 10, 'interior', '1754821912_689875187c66f_AnzoorGallery1.jpg'),
(2, 10, 'interior', '1754821912_689875187dd25_AnzoorGallery3.jpg'),
(3, 10, 'interior', '1754821912_689875187f268_AnzoorGallery4.jpg'),
(4, 10, 'interior', '1754821912_6898751881b53_AnzoorGallery4copy.jpg'),
(5, 10, 'exterior', '1754821912_6898751883fcf_download (1).jpeg'),
(6, 10, 'exterior', '1754821912_6898751885ab7_download (2).jpeg'),
(7, 10, 'exterior', '1754821912_6898751887112_download.jpeg'),
(8, 11, 'interior', '1754911674_6899d3ba0b4cc_ranaban5-copy.jpg'),
(9, 11, 'interior', '1754911674_6899d3ba0cd9a_ranaban5-original.jpg'),
(10, 11, 'interior', '1754911674_6899d3ba0e3a7_ranban1-copy.jpg'),
(11, 11, 'interior', '1754911674_6899d3ba10f94_ranban1-original.jpg'),
(12, 11, 'exterior', '1754911674_6899d3ba124ea_06 Anzoorgallery.png'),
(13, 11, 'exterior', '1754911674_6899d3ba148e5_07 Om.png'),
(14, 11, 'exterior', '1754911674_6899d3ba15de3_AnzoorGallery5.jpg'),
(15, 11, 'exterior', '1754911674_6899d3ba1766c_AnzoorGallery5copy.jpg'),
(16, 12, 'interior', '1754981635_689ae5036cd1b_AnzoorGallery3.jpg'),
(17, 12, 'interior', '1754981635_689ae5036d879_AnzoorGallery4.jpg'),
(18, 12, 'interior', '1754981635_689ae5036e4e3_AnzoorGallery4copy.jpg'),
(19, 12, 'exterior', '1754981635_689ae5036fb97_AnzoorGallery4.jpg'),
(20, 12, 'exterior', '1754981635_689ae50370808_AnzoorGallery4copy.jpg'),
(21, 12, 'exterior', '1754981635_689ae503714bf_AnzoorGallery5.jpg'),
(22, 14, 'interior', '1754984961_689af201ed1aa_AnzoorGallery4.jpg'),
(23, 14, 'interior', '1754984961_689af201ef79e_AnzoorGallery4copy.jpg'),
(24, 14, 'exterior', '1754984961_689af201f1bfa_AnzoorGallery4.jpg'),
(25, 14, 'exterior', '1754984961_689af201f3861_AnzoorGallery4copy.jpg'),
(26, 17, 'interior', '1754995560_689b1b688f411_AnzoorGallery3.jpg'),
(27, 17, 'interior', '1754995560_689b1b6897ded_AnzoorGallery4.jpg'),
(28, 17, 'exterior', '1754995560_689b1b6899325_AnzoorGallery4.jpg'),
(29, 17, 'exterior', '1754995560_689b1b689a76d_AnzoorGallery4copy.jpg'),
(30, 17, 'exterior', '1754995560_689b1b689bd10_AnzoorGallery5.jpg'),
(31, 18, 'interior', '1754998103_689b2557eb3ab_AnzoorGallery4copy.jpg'),
(32, 18, 'interior', '1754998103_689b2557eddd4_AnzoorGallery5.jpg'),
(33, 18, 'interior', '1754998103_689b2557ef4a4_AnzoorGallery5copy.jpg'),
(34, 18, 'exterior', '1754998103_689b2557f122d_AnzoorGallery7-original.jpg'),
(35, 18, 'exterior', '1754998103_689b2557f279d_download (1).jpeg'),
(36, 18, 'exterior', '1754998104_689b255800d75_download.jpeg'),
(37, 19, 'interior', '1754998500_689b26e417d1e_AnzoorGallery3.jpg'),
(38, 19, 'interior', '1754998500_689b26e41c61c_AnzoorGallery4.jpg'),
(39, 19, 'interior', '1754998500_689b26e41eae1_AnzoorGallery4copy.jpg'),
(40, 19, 'interior', '1754998500_689b26e4211b1_AnzoorGallery5.jpg'),
(41, 19, 'exterior', '1754998500_689b26e426034_AnzoorGallery4copy.jpg'),
(42, 19, 'exterior', '1754998500_689b26e42a9d2_AnzoorGallery5.jpg'),
(43, 19, 'exterior', '1754998500_689b26e434dc3_AnzoorGallery7-original.jpg'),
(44, 19, 'exterior', '1754998500_689b26e435789_download (1).jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_developers`
--
ALTER TABLE `property_developers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`),
  ADD KEY `developer_id` (`developer_id`);

--
-- Indexes for table `property_facilities`
--
ALTER TABLE `property_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `property_developers`
--
ALTER TABLE `property_developers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `property_facilities`
--
ALTER TABLE `property_facilities`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `property_developers`
--
ALTER TABLE `property_developers`
  ADD CONSTRAINT `property_developers_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `property_developers_ibfk_2` FOREIGN KEY (`developer_id`) REFERENCES `developers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
