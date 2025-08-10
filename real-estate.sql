-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2025 at 01:40 PM
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
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` varchar(500) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `purpose` varchar(50) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `bedrooms` int(11) DEFAULT 0,
  `bathrooms` int(11) DEFAULT 0,
  `area_sqft` int(11) DEFAULT 0,
  `price` decimal(15,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `featured` tinyint(1) DEFAULT 0,
  `area_id` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `desc`, `type`, `purpose`, `location`, `bedrooms`, `bathrooms`, `area_sqft`, `price`, `image`, `featured`, `area_id`, `created_at`) VALUES
(1, 'Heritage Building', 'Quam et qui corrupti sunt amet iusto sunt. Et quod dolore laudantium voluptatem sit possimus aperiam. Autem consequatur dolore ipsam optio vel dolorem inventore hic nihil accusantium facilis ipsam. Aut et aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'Apartment', 'For Sale', 'Dubai, UAE', 2, 2, 1212, 950000.00, '1753954551_third-sec-card1-img.jpg', 0, 1, '2025-07-31 09:35:51'),
(2, 'Modern Villa', 'Quam et qui corrupti sunt amet iusto sunt. Et quod dolore laudantium voluptatem sit possimus aperiam. Autem consequatur dolore ipsam optio vel dolorem inventore hic nihil accusantium facilis ipsam. Aut et aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'Apartment', 'For Rent', 'Abu Dhabi, UAE', 4, 3, 2323, 1250000.00, '1753954767_third-sec-card2-img.jpg', 0, 2, '2025-07-31 09:39:27'),
(3, 'Luxury Penthouse', 'Quam et qui corrupti sunt amet iusto sunt. Et quod dolore laudantium voluptatem sit possimus aperiam. Autem consequatur dolore ipsam optio vel dolorem inventore hic nihil accusantium facilis ipsam. Aut et aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'Apartment', 'For Sale', 'Downtown Dubai, UAE', 4, 2, 34324, 468000.00, '1753954844_third-sec-card3-img.jpg', 0, 3, '2025-07-31 09:40:44'),
(5, 'Luxury Penthouse', 'Quam et qui corrupti sunt amet iusto sunt. Et quod dolore laudantium voluptatem sit possimus aperiam. Autem consequatur dolore ipsam optio vel dolorem inventore hic nihil accusantium facilis ipsam. Aut et aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'Commercial', 'For Sale', 'Downtown Dubai, UAE', 5, 5, 555555, 555555555.00, '1753977420_blog-image3.webp', 0, 2, '2025-07-31 15:57:00'),
(9, 'Luxury house', 'vxfxvd dfsgfdg dfgdsfg df', 'Office', 'For Rent', 'Downtown Dubai, UAE', 2, 2, 2423, 10000.00, '1754379655_download.jpeg', 1, 2, '2025-08-05 07:40:55'),
(10, 'TownHouse', 'Quam et qui corrupti sunt amet iusto sunt. Et quod dolore laudantium voluptatem sit possimus aperiam. Autem consequatur dolore ipsam optio vel dolorem inventore hic nihil accusantium facilis ipsam. Aut et aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut aut.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'Office', 'For Sale', 'Downtown Dubai, UAE', 2, 2, 22222, 10000.00, '1754821912_AnzoorGallery6copy.jpg', 1, 4, '2025-08-10 10:31:52');

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
(23, 10, 5);

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
(7, 10, 'exterior', '1754821912_6898751887112_download.jpeg');

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
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `property_developers`
--
ALTER TABLE `property_developers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
