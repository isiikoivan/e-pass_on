-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 20, 2021 at 11:27 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passon_db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `activites`
--

CREATE TABLE `activites` (
  `activity_id` int(11) NOT NULL,
  `activity_description` tinytext DEFAULT NULL,
  `activity_stage` tinytext DEFAULT NULL,
  `activity_costs` varchar(255) DEFAULT NULL,
  `activity_date` timestamp NULL DEFAULT NULL,
  `farmer_farmer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `admin_passon`
--

CREATE TABLE `admin_passon` (
  `admin_id` int(11) NOT NULL,
  `admin_fname` varchar(45) DEFAULT NULL,
  `admin_lname` varchar(45) DEFAULT NULL,
  `admin_username` varchar(45) DEFAULT NULL,
  `admin_password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_passon`
--

INSERT INTO `admin_passon` (`admin_id`, `admin_fname`, `admin_lname`, `admin_username`, `admin_password`) VALUES
(1, 'isiiko', 'ivan', 'mpongo', '012345678');

-- --------------------------------------------------------

--
-- Table structure for table `allocate_input`
--

CREATE TABLE `allocate_input` (
  `allocate_id` int(11) NOT NULL,
  `farmer_farmer_id` int(11) NOT NULL,
  `animal_animal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocate_input`
--

INSERT INTO `allocate_input` (`allocate_id`, `farmer_farmer_id`, `animal_animal_id`) VALUES
(1, 15, 1),
(2, 14, 1),
(3, 14, 1),
(4, 14, 2),
(5, 14, 1),
(6, 14, 3),
(7, 14, 1),
(8, 14, 1),
(9, 14, 1),
(10, 15, 3),
(11, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `animal_id` int(11) NOT NULL,
  `animal_name` varchar(45) DEFAULT NULL,
  `animal_breed` varchar(45) DEFAULT NULL,
  `animal_quantity` varchar(45) DEFAULT NULL,
  `animal_date` timestamp NULL DEFAULT NULL,
  `admin_passon_admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`animal_id`, `animal_name`, `animal_breed`, `animal_quantity`, `animal_date`, `admin_passon_admin_id`) VALUES
(1, 'rabbits', 'local', '10', '2021-12-14 14:26:58', 1),
(2, 'cow', 'Freshian', '2', '2021-12-14 19:01:13', 1),
(3, 'pigs', 'local', '5', '2021-12-14 19:01:18', 1),
(5, 'goats', 'local', '5000', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `county`
--

CREATE TABLE `county` (
  `county_id` int(11) NOT NULL,
  `county_name` tinytext DEFAULT NULL,
  `county_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `district_district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `county`
--

INSERT INTO `county` (`county_id`, `county_name`, `county_date`, `district_district_id`) VALUES
(1, 'buswole', '2021-12-14 13:44:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(11) NOT NULL,
  `district_name` tinytext DEFAULT NULL,
  `district_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin_passon_admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`, `district_date`, `admin_passon_admin_id`) VALUES
(1, 'namutumba', '2021-12-14 13:29:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `farmer_id` int(11) NOT NULL,
  `farmer_first_name` varchar(255) DEFAULT NULL,
  `farmer_last_name` varchar(255) DEFAULT NULL,
  `farmer_last_others` varchar(255) DEFAULT NULL,
  `farmer_phonenumber` varchar(45) DEFAULT NULL,
  `farmer_occupation` varchar(45) DEFAULT NULL,
  `farmer_email` varchar(45) DEFAULT NULL,
  `farmer_sex` tinytext DEFAULT NULL,
  `farmer_nin` varchar(45) DEFAULT NULL,
  `farmer_dob` date NOT NULL,
  `imagepath` tinytext DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `farmer_group_group_id` int(11) NOT NULL,
  `farmerdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`farmer_id`, `farmer_first_name`, `farmer_last_name`, `farmer_last_others`, `farmer_phonenumber`, `farmer_occupation`, `farmer_email`, `farmer_sex`, `farmer_nin`, `farmer_dob`, `imagepath`, `password`, `farmer_group_group_id`, `farmerdate`) VALUES
(14, 'muwaga', 'joseph', 'ivo', '0773290408', 'teacher', 'joseph@gmail.com', 'M', 'CM23556435FG', '2021-12-15', 'files/', '741258', 5, '2021-12-14 11:52:41'),
(15, 'Namuleta', 'scovia', '', '0778451236', 'peasant farmer', 'scovia@gmail.com', 'F', 'CM4355553JK', '2021-12-15', '../files/bird5.png', 'qwerty123', 5, '2021-12-14 11:57:31'),
(16, 'muhereza', 'robert', '', '0784512369', 'engineer', 'robert@gmail.com', 'M', 'CM23556435FG4', '2021-12-29', '../files/1633249.png', '123456789', 6, '2021-12-15 02:46:19'),
(17, 'mwidu', 'isaac', 'kibwika', '0789451263', 'doctor', 'mwidu@gmail.com', 'M', 'CM455853366KL', '2021-12-22', '../files/', '', 5, '2021-12-15 18:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_group`
--

CREATE TABLE `farmer_group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `village_village_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `farmer_group`
--

INSERT INTO `farmer_group` (`group_id`, `group_name`, `created_on`, `village_village_id`) VALUES
(5, 'mutyaba', '2021-12-14 00:31:29', 1),
(6, 'bonna', '2021-12-14 19:01:28', 1),
(7, 'kafunda', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `parish`
--

CREATE TABLE `parish` (
  `parish_id` int(11) NOT NULL,
  `parish_name` tinytext DEFAULT NULL,
  `parish_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sub_county_sub_county_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parish`
--

INSERT INTO `parish` (`parish_id`, `parish_name`, `parish_date`, `sub_county_sub_county_id`) VALUES
(1, 'Namutumba A', '2021-12-14 14:15:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pass_on`
--

CREATE TABLE `pass_on` (
  `pass_id` int(11) NOT NULL,
  `pass_from` int(11) DEFAULT NULL,
  `pass_on_content` tinytext DEFAULT NULL,
  `farmer_farmer_id` int(11) NOT NULL,
  `pass_on_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pass_on`
--

INSERT INTO `pass_on` (`pass_id`, `pass_from`, `pass_on_content`, `farmer_farmer_id`, `pass_on_date`) VALUES
(1, NULL, '5', 0, '2021-12-15 15:24:25'),
(2, NULL, '5 pigs', 0, '2021-12-15 15:24:25'),
(3, 14, '5pigs', 0, '2021-12-15 15:24:25'),
(4, 14, '5cows', 0, '2021-12-15 15:24:25'),
(5, 14, '5 pigs', 14, '2021-12-15 15:24:25'),
(6, 17, '5 pigs', 14, '2021-12-15 15:24:25'),
(7, 14, '5 pigs', 14, '2021-12-15 15:24:25'),
(8, 15, '5 pigs', 14, '2021-12-15 15:24:25'),
(9, 15, '5000', 14, '2021-12-17 08:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(45) DEFAULT NULL,
  `product_type` varchar(45) DEFAULT NULL,
  `product_image_path` tinytext DEFAULT NULL,
  `product_price` varchar(45) DEFAULT NULL,
  `farmer_fk_product` int(11) NOT NULL,
  `products_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `request_type` varchar(45) DEFAULT NULL,
  `request_description` tinytext DEFAULT NULL,
  `request_date` timestamp NULL DEFAULT NULL,
  `farmer_farmer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sub_county`
--

CREATE TABLE `sub_county` (
  `sub_county_id` int(11) NOT NULL,
  `sub_county_name` tinytext DEFAULT NULL,
  `subcounty_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `county_county_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_county`
--

INSERT INTO `sub_county` (`sub_county_id`, `sub_county_name`, `subcounty_date`, `county_county_id`) VALUES
(1, 'namutumba central town council', '2021-12-14 14:00:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `support_id` int(11) NOT NULL,
  `support_first_name` varchar(45) DEFAULT NULL,
  `support_second_name` varchar(45) DEFAULT NULL,
  `support_sex` varchar(45) DEFAULT NULL,
  `support_expertise` tinytext DEFAULT NULL,
  `support_nationality` tinytext DEFAULT NULL,
  `support_contact` varchar(45) DEFAULT NULL,
  `support_email` varchar(255) DEFAULT NULL,
  `support_address` varchar(255) DEFAULT NULL,
  `support_date` timestamp NULL DEFAULT NULL,
  `admin_passon_admin_id` int(11) NOT NULL,
  `admin_passon_admin_id1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE `village` (
  `village_id` int(11) NOT NULL,
  `village_name` tinytext DEFAULT NULL,
  `village_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `parish_parish_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`village_id`, `village_name`, `village_date`, `parish_parish_id`) VALUES
(1, 'Kangulumo', '2021-12-14 14:22:59', 1),
(2, 'Kaiti', '2021-12-14 14:23:39', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`activity_id`),
  ADD KEY `fk_activites_farmer1_idx` (`farmer_farmer_id`);

--
-- Indexes for table `admin_passon`
--
ALTER TABLE `admin_passon`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `allocate_input`
--
ALTER TABLE `allocate_input`
  ADD PRIMARY KEY (`allocate_id`),
  ADD KEY `fk_allocate_input_farmer1_idx` (`farmer_farmer_id`),
  ADD KEY `fk_allocate_input_animal1_idx` (`animal_animal_id`);

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`animal_id`),
  ADD KEY `fk_animal_admin_passon1_idx` (`admin_passon_admin_id`);

--
-- Indexes for table `county`
--
ALTER TABLE `county`
  ADD PRIMARY KEY (`county_id`),
  ADD KEY `district_fk` (`county_id`,`county_name`(191)),
  ADD KEY `fk_county_district1_idx` (`district_district_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`),
  ADD KEY `fk_district_admin_passon1_idx` (`admin_passon_admin_id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`farmer_id`),
  ADD KEY `fk_farmer_farmer_group1_idx` (`farmer_group_group_id`);

--
-- Indexes for table `farmer_group`
--
ALTER TABLE `farmer_group`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `fk_group_village1_idx` (`village_village_id`);

--
-- Indexes for table `parish`
--
ALTER TABLE `parish`
  ADD PRIMARY KEY (`parish_id`),
  ADD KEY `fk_parish_sub_county1_idx` (`sub_county_sub_county_id`);

--
-- Indexes for table `pass_on`
--
ALTER TABLE `pass_on`
  ADD PRIMARY KEY (`pass_id`),
  ADD KEY `fk_pass_on_farmer1_idx` (`farmer_farmer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `farmer_fk_idx` (`farmer_fk_product`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `fk_request_farmer1_idx` (`farmer_farmer_id`);

--
-- Indexes for table `sub_county`
--
ALTER TABLE `sub_county`
  ADD PRIMARY KEY (`sub_county_id`),
  ADD KEY `fk_sub_county_county1_idx` (`county_county_id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`support_id`),
  ADD KEY `fk_support_admin_passon1_idx` (`admin_passon_admin_id`),
  ADD KEY `fk_support_admin_passon1_idx1` (`admin_passon_admin_id1`);

--
-- Indexes for table `village`
--
ALTER TABLE `village`
  ADD PRIMARY KEY (`village_id`),
  ADD KEY `fk_village_parish1_idx` (`parish_parish_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activites`
--
ALTER TABLE `activites`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_passon`
--
ALTER TABLE `admin_passon`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allocate_input`
--
ALTER TABLE `allocate_input`
  MODIFY `allocate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `county`
--
ALTER TABLE `county`
  MODIFY `county_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `farmer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `farmer_group`
--
ALTER TABLE `farmer_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parish`
--
ALTER TABLE `parish`
  MODIFY `parish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pass_on`
--
ALTER TABLE `pass_on`
  MODIFY `pass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_county`
--
ALTER TABLE `sub_county`
  MODIFY `sub_county_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `support_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `village`
--
ALTER TABLE `village`
  MODIFY `village_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activites`
--
ALTER TABLE `activites`
  ADD CONSTRAINT `fk_activites_farmer1` FOREIGN KEY (`farmer_farmer_id`) REFERENCES `farmer` (`farmer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `allocate_input`
--
ALTER TABLE `allocate_input`
  ADD CONSTRAINT `fk_allocate_input_animal1` FOREIGN KEY (`animal_animal_id`) REFERENCES `animal` (`animal_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_allocate_input_farmer1` FOREIGN KEY (`farmer_farmer_id`) REFERENCES `farmer` (`farmer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `fk_animal_admin_passon1` FOREIGN KEY (`admin_passon_admin_id`) REFERENCES `admin_passon` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `county`
--
ALTER TABLE `county`
  ADD CONSTRAINT `fk_county_district1` FOREIGN KEY (`district_district_id`) REFERENCES `district` (`district_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `fk_district_admin_passon1` FOREIGN KEY (`admin_passon_admin_id`) REFERENCES `admin_passon` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `farmer`
--
ALTER TABLE `farmer`
  ADD CONSTRAINT `fk_farmer_farmer_group1` FOREIGN KEY (`farmer_group_group_id`) REFERENCES `farmer_group` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `farmer_group`
--
ALTER TABLE `farmer_group`
  ADD CONSTRAINT `fk_group_village1` FOREIGN KEY (`village_village_id`) REFERENCES `village` (`village_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parish`
--
ALTER TABLE `parish`
  ADD CONSTRAINT `fk_parish_sub_county1` FOREIGN KEY (`sub_county_sub_county_id`) REFERENCES `sub_county` (`sub_county_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `farmer_fk_products` FOREIGN KEY (`farmer_fk_product`) REFERENCES `farmer` (`farmer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
