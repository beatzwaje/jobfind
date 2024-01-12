-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 04:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carwash`
--
CREATE DATABASE IF NOT EXISTS `carwash` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `carwash`;
--
-- Database: `fishing`
--
CREATE DATABASE IF NOT EXISTS `fishing` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fishing`;

-- --------------------------------------------------------

--
-- Table structure for table `catchlog`
--

CREATE TABLE `catchlog` (
  `catch_id` int(11) NOT NULL,
  `trip_id` int(11) DEFAULT NULL,
  `species_id` int(11) DEFAULT NULL,
  `weight` decimal(10,2) DEFAULT NULL,
  `length` decimal(10,2) DEFAULT NULL,
  `photo_url` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `catch_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catchlog`
--

INSERT INTO `catchlog` (`catch_id`, `trip_id`, `species_id`, `weight`, `length`, `photo_url`, `user_id`, `catch_count`) VALUES
(1, 1, 1, 1.20, 10.50, 'https://example.com/catch1.jpg', NULL, NULL),
(2, 1, 1, 1.50, 11.20, 'https://example.com/catch2.jpg', NULL, NULL),
(3, 2, 2, 4.80, 28.30, 'https://example.com/catch3.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fishinggear`
--

CREATE TABLE `fishinggear` (
  `gear_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `gear_name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fishinggear`
--

INSERT INTO `fishinggear` (`gear_id`, `user_id`, `gear_name`, `description`) VALUES
(1, 1, 'Spinning Rod', 'Lightweight rod for easy casting.'),
(2, 2, 'Fly Fishing Kit', 'Ideal for catching trout and salmon.');

-- --------------------------------------------------------

--
-- Table structure for table `fishingspots`
--

CREATE TABLE `fishingspots` (
  `spot_id` int(11) NOT NULL,
  `spot_name` varchar(100) DEFAULT NULL,
  `latitude` decimal(9,6) DEFAULT NULL,
  `longitude` decimal(9,6) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fishingspots`
--

INSERT INTO `fishingspots` (`spot_id`, `spot_name`, `latitude`, `longitude`, `description`) VALUES
(1, 'Lakeview Park', 40.123456, -75.654321, 'A serene lake with abundant fish.'),
(2, 'Riverfront Pier', 38.987654, -72.123456, 'Ideal spot for river fishing.');

-- --------------------------------------------------------

--
-- Table structure for table `fishingtrips`
--

CREATE TABLE `fishingtrips` (
  `trip_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `spot_id` int(11) DEFAULT NULL,
  `trip_date` date DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `catch_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fishingtrips`
--

INSERT INTO `fishingtrips` (`trip_id`, `user_id`, `spot_id`, `trip_date`, `duration`, `catch_count`) VALUES
(1, 1, 1, '2022-03-10', 5, 10),
(2, 2, 2, '2022-04-05', 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `fishspecies`
--

CREATE TABLE `fishspecies` (
  `species_id` int(11) NOT NULL,
  `species_name` varchar(50) DEFAULT NULL,
  `average_weight` decimal(10,2) DEFAULT NULL,
  `average_length` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fishspecies`
--

INSERT INTO `fishspecies` (`species_id`, `species_name`, `average_weight`, `average_length`, `description`) VALUES
(1, 'Bass', 2.50, 12.50, 'A popular freshwater fish.'),
(2, 'Salmon', 8.20, 30.00, 'Anadromous fish known for its flavor.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `registration_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `registration_date`) VALUES
(1, 'john_doe', 'john@example.com', 'password123', '2022-01-01'),
(2, 'jane_smith', 'jane@example.com', 'abc123', '2022-02-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catchlog`
--
ALTER TABLE `catchlog`
  ADD PRIMARY KEY (`catch_id`),
  ADD KEY `trip_id` (`trip_id`),
  ADD KEY `species_id` (`species_id`);

--
-- Indexes for table `fishinggear`
--
ALTER TABLE `fishinggear`
  ADD PRIMARY KEY (`gear_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `fishingspots`
--
ALTER TABLE `fishingspots`
  ADD PRIMARY KEY (`spot_id`);

--
-- Indexes for table `fishingtrips`
--
ALTER TABLE `fishingtrips`
  ADD PRIMARY KEY (`trip_id`);

--
-- Indexes for table `fishspecies`
--
ALTER TABLE `fishspecies`
  ADD PRIMARY KEY (`species_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catchlog`
--
ALTER TABLE `catchlog`
  ADD CONSTRAINT `catchlog_ibfk_1` FOREIGN KEY (`trip_id`) REFERENCES `fishingtrips` (`trip_id`),
  ADD CONSTRAINT `catchlog_ibfk_2` FOREIGN KEY (`species_id`) REFERENCES `fishspecies` (`species_id`);

--
-- Constraints for table `fishinggear`
--
ALTER TABLE `fishinggear`
  ADD CONSTRAINT `fishinggear_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
--
-- Database: `jobpostal`
--
CREATE DATABASE IF NOT EXISTS `jobpostal` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jobpostal`;

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `appid` int(10) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `cv` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`appid`, `fullname`, `email`, `address`, `city`, `zip`, `telephone`, `start_date`, `cv`) VALUES
(NULL, 'hacker', '', '', '', '', '1-(555)-555-5555', '2020-02-01', ''),
(NULL, 'uwajeneza beatrice', 'mkobusingye28@gmail.com', '123rtjkk', 'kigali', '', '1-(555)-555-5555', '2020-02-01', ''),
(NULL, 'uwajeneza beatrice', 'beatzwaje1257@gmail.com', '123rtjkk', 'kigali', '122222222', '1-(555)-555-5555', '2020-02-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(10) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `documentType` varchar(255) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `sector` varchar(100) DEFAULT NULL,
  `maritalStatus` varchar(50) DEFAULT NULL,
  `disability` varchar(255) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `educationLevel` varchar(255) DEFAULT NULL,
  `educationField` varchar(100) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `schoolname` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `graduationDate` varchar(255) DEFAULT NULL,
  `certificate` varchar(255) DEFAULT NULL,
  `attachment_file` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `email`, `phoneNumber`, `password`, `documentType`, `province`, `district`, `sector`, `maritalStatus`, `disability`, `nationality`, `educationLevel`, `educationField`, `grade`, `schoolname`, `country`, `qualification`, `graduationDate`, `certificate`, `attachment_file`) VALUES
(1, '', '', '', NULL, '', '', '', '', NULL, '', NULL, '', NULL, NULL, NULL, '', NULL, '', NULL),
(2, 'admin@gmail.com', '125612512', '11111', NULL, 'province1', 'district1', 'sector2', 'single', NULL, 'country2', NULL, 'country1', NULL, NULL, NULL, 'mmiimi', NULL, 'country1', NULL),
(3, 'niyonzima@gmail.com', '', '', NULL, '', '', '', '', NULL, '', NULL, '', NULL, NULL, NULL, '', NULL, '', 0x646f776e6c6f6164736d6174682061737369676e6d656e742e706466),
(4, 'beatz123@gmail.com', 'bbbbb', '', NULL, '', '', '', '', NULL, '', NULL, '', NULL, NULL, NULL, 'vevevvvsdvdd', NULL, '', 0x646f776e6c6f6164734c65637475726520312e706466),
(5, 'beatz123@gmail.com', 'fghjkl', 'BBBBBBB', NULL, 'province1', 'district1', 'sector1', 'married', NULL, 'country1', NULL, 'country1', NULL, NULL, NULL, 'vevevvvsdvdd', NULL, 'country1', 0x646f776e6c6f6164734c65637475726520312e706466),
(6, 'mkobusingye28@gmail.com', 'o988766', 'bbbbbbb', NULL, 'province1', 'district1', 'sector1', 'single', NULL, 'country1', NULL, 'country2', NULL, NULL, NULL, 'vvvv', NULL, 'country1', 0x646f776e6c6f6164734c65637475726520312e706466),
(7, 'beatz123@gmail.comkkk', '0987654', '', NULL, 'province2', 'district2', 'sector2', 'single', NULL, 'country1', NULL, 'country1', NULL, NULL, NULL, '', NULL, 'country1', 0x646f776e6c6f6164734c65637475726520312e706466),
(8, 'beatz123@gmail.comkkk', '0987654', '', NULL, 'province2', 'district2', 'sector2', 'single', NULL, 'country1', NULL, 'country1', NULL, NULL, NULL, '', NULL, 'country1', 0x646f776e6c6f6164734c65637475726520312e706466),
(9, 'beatz123@gmail.comkkk', '0987654', '', NULL, 'province2', 'district2', 'sector2', 'single', NULL, 'country1', NULL, 'country1', NULL, NULL, NULL, '', NULL, 'country1', 0x646f776e6c6f6164734c65637475726520312e706466),
(10, 'beatz123@gmail.comkkk', '0987654', '', NULL, 'province2', 'district2', 'sector2', 'single', NULL, 'country1', NULL, 'country1', NULL, NULL, NULL, '', NULL, 'country1', 0x646f776e6c6f6164734c65637475726520312e706466),
(11, 'beatz123@gmail.comkkk', '0987654', '', NULL, 'province2', 'district2', 'sector2', 'single', NULL, 'country1', NULL, 'country1', NULL, NULL, NULL, '', NULL, 'country1', 0x646f776e6c6f6164734c65637475726520312e706466),
(12, 'beatz123@gmail.comkkk', '0987654', '', NULL, 'province2', 'district2', 'sector2', 'single', NULL, 'country1', NULL, 'country1', NULL, NULL, NULL, '', NULL, 'country1', 0x646f776e6c6f6164734c65637475726520312e706466),
(13, 'beatzwaje123@gmail.c', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0x646f776e6c6f6164734c65637475726520312e706466);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `job_category` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `validation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_name`, `job_category`, `department`, `description`, `validation_date`) VALUES
(4, 'cooking', 'spe', 'agricul', 'mmmmsqwshdffff', '2024-01-19'),
(5, 'kubaka', 'guteka', 'guhaha', 'kurwana', '2024-01-26'),
(6, 'waje', 'cusial', 'ubuhinzi', 'kkkkkkkkkkkkkkkkknnnnnnnnnnnnnnf', '2024-01-31'),
(7, 'waje', 'cusial', 'ubuhinzi', 'kkkkkkkkkkkkkkkkknnnnnnnnnnnnnnf', '2024-01-31'),
(8, 'waje', 'cusial', 'ubuhinzi', 'kkkkkkkkkkkkkkkkknnnnnnnnnnnnnnf', '2024-01-31'),
(9, 'waje', 'cusial', 'ubuhinzi', 'kkkkkkkkkkkkkkkkknnnnnnnnnnnnnnf', '2024-01-31'),
(10, 'waje', 'cusial', 'ubuhinzi', 'kkkkkkkkkkkkkkkkknnnnnnnnnnnnnnf', '2024-01-31'),
(11, 'waje', 'cusial', 'ubuhinzi', 'kkkkkkkkkkkkkkkkknnnnnnnnnnnnnnf', '2024-01-31'),
(12, 'waje', 'cusial', 'ubuhinzi', 'kkkkkkkkkkkkkkkkknnnnnnnnnnnnnnf', '2024-01-31'),
(13, 'waje', 'cusial', 'ubuhinzi', 'kkkkkkkkkkkkkkkkknnnnnnnnnnnnnnf', '2024-01-31'),
(14, 'waje', 'cusial', 'ubuhinzi', 'kkkkkkkkkkkkkkkkknnnnnnnnnnnnnnf', '2024-01-31'),
(15, 'waje', 'cusial', 'ubuhinzi', 'kkkkkkkkkkkkkkkkknnnnnnnnnnnnnnf', '2024-01-31'),
(16, 'kubaka', 'guteka', 'Marketing', 'leeeeeeeeee', '2024-01-20'),
(17, 'kubaka', 'guteka', 'Marketing', 'lejnwammmm', '2024-01-25'),
(18, 'kubaka', 'guteka', 'Marketing', 'lejnwammmm', '2024-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `kwakakazi`
--

CREATE TABLE `kwakakazi` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `cv_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `employer_type` varchar(20) DEFAULT NULL,
  `employer_name` varchar(20) DEFAULT NULL,
  `national_id` varchar(20) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `pobox` varchar(20) DEFAULT NULL,
  `website` varchar(20) DEFAULT NULL,
  `province` varchar(20) DEFAULT NULL,
  `sector` varchar(20) DEFAULT NULL,
  `physical_address` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `email`, `username`, `password`, `employer_type`, `employer_name`, `national_id`, `district`, `pobox`, `website`, `province`, `sector`, `physical_address`) VALUES
(1, 'beatzwaje123@gmail.c', 'beatzwaje123@gmail.c', 'bbbb', '', 'ghjjkl', '4567890-', '', 'dfghjkl', 'wertyui', '', '', ''),
(2, 'rub@gmail.com', 'fghjkl', 'yuui', '', '', '', '', '', '', '', '', ''),
(3, 'beatzwaje123@gmail.c', 'beatzwaje123@gmail.c', 'sffffffs', '', '', '', '', '', '', '', '', 'xfcghjkl'),
(4, 'beazwaje455@gmai.com', 'bbbbb', 'mmmmmmmm', '', '', '', '', 'mkyattt', 'wertyui', '', '', 'xfcghjkl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kwakakazi`
--
ALTER TABLE `kwakakazi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kwakakazi`
--
ALTER TABLE `kwakakazi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

--
-- Dumping data for table `pma__navigationhiding`
--

INSERT INTO `pma__navigationhiding` (`username`, `item_name`, `item_type`, `db_name`, `table_name`) VALUES
('root', 'fishingspots', 'table', 'fishing', '');

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"jobpostal\",\"table\":\"jobs\"},{\"db\":\"jobpostal\",\"table\":\"employee\"},{\"db\":\"jobpostal\",\"table\":\"your_table_name\"},{\"db\":\"jobpostal\",\"table\":\"register\"},{\"db\":\"fishing\",\"table\":\"catchlog\"},{\"db\":\"fishing\",\"table\":\"fishspecies\"},{\"db\":\"fishing\",\"table\":\"users\"},{\"db\":\"fishing\",\"table\":\"fishinggear\"},{\"db\":\"fishing\",\"table\":\"fishingspots\"},{\"db\":\"fishing\",\"table\":\"fishingtrips\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2024-01-08 14:37:28', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
