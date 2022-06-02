-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 08:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addedpower`
--

-- --------------------------------------------------------

--
-- Table structure for table `addedpower_admin`
--

CREATE TABLE `addedpower_admin` (
  `admin_id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addedpower_admin`
--

INSERT INTO `addedpower_admin` (`admin_id`, `username`, `email`, `full_name`, `password`) VALUES
(1, 'jairiidriss', 'jairiidriss@gmail.com', 'Idriss Jairi', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
(2, 'Bahaa', '219110085@psu.edu.sa', 'Bahaa Hammad', '875C7B6AD60087978307C75D98FDD4C5B202EB66');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(5) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `client_id` int(5) NOT NULL,
  `employee_id` int(2) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_time_expected` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `canceled` tinyint(1) NOT NULL DEFAULT 0,
  `cancellation_reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `date_created`, `client_id`, `employee_id`, `start_time`, `end_time_expected`, `canceled`, `cancellation_reason`) VALUES
(29, '2022-06-02 17:32:00', 1, 1, '2022-06-03 13:00:00', '2022-06-03 18:00:00', 0, NULL),
(30, '2022-06-02 17:32:00', 1, 2, '2022-06-06 06:00:00', '2022-06-06 08:00:00', 0, NULL),
(31, '2022-06-02 17:32:00', 1, 3, '2022-06-10 06:00:00', '2022-06-10 10:40:00', 0, NULL),
(32, '2022-06-02 17:33:00', 1, 4, '2022-06-04 07:00:00', '2022-06-04 08:00:00', 0, NULL),
(33, '2022-06-02 17:33:00', 1, 2, '2022-06-11 06:45:00', '2022-06-11 08:45:00', 0, NULL),
(34, '2022-06-02 17:42:00', 2, 3, '2022-06-10 07:15:00', '2022-06-10 09:15:00', 0, NULL),
(35, '2022-06-02 17:43:00', 3, 1, '2022-06-07 06:00:00', '2022-06-07 08:00:00', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(5) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `client_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `first_name`, `last_name`, `phone_number`, `client_email`) VALUES
(1, 'Bahaa', 'Hammad', '0555283517', 'BHAMMAD@gmail.com'),
(2, '', 'rain', '', 'rain@gmail.com'),
(3, 'mey', 'mey', '123', 'mey@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(2) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `first_name`, `last_name`, `phone_number`, `email`) VALUES
(1, 'Abdullah', 'Ahmed', '0555283518', 'AAhmed@addedPower.com'),
(2, 'Mohammed', 'Hussain', '0555283517', 'MHussain@addedPower.com'),
(3, 'Hassan', 'Ahmed', '0555283519', 'HAhmed@addedPower.com'),
(4, 'Ahmed', 'Salem', '0555283516', 'ASalem@addedPower.com');

-- --------------------------------------------------------

--
-- Table structure for table `employees_schedule`
--

CREATE TABLE `employees_schedule` (
  `id` int(5) NOT NULL,
  `employee_id` int(2) NOT NULL,
  `day_id` tinyint(1) NOT NULL,
  `from_hour` time NOT NULL,
  `to_hour` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees_schedule`
--

INSERT INTO `employees_schedule` (`id`, `employee_id`, `day_id`, `from_hour`, `to_hour`) VALUES
(7, 1, 1, '09:00:00', '18:00:00'),
(8, 1, 2, '08:00:00', '12:00:00'),
(9, 1, 3, '09:00:00', '18:00:00'),
(10, 1, 4, '09:00:00', '18:00:00'),
(11, 1, 5, '16:00:00', '23:00:00'),
(12, 1, 6, '09:00:00', '18:00:00'),
(13, 1, 7, '09:00:00', '18:00:00'),
(14, 2, 1, '09:00:00', '18:00:00'),
(15, 2, 2, '09:00:00', '18:00:00'),
(16, 2, 3, '09:00:00', '18:00:00'),
(17, 2, 4, '09:00:00', '18:00:00'),
(18, 2, 6, '09:00:00', '18:00:00'),
(19, 2, 7, '09:00:00', '18:00:00'),
(20, 3, 1, '09:00:00', '18:00:00'),
(21, 3, 2, '09:00:00', '18:00:00'),
(22, 3, 3, '09:00:00', '18:00:00'),
(23, 3, 4, '09:00:00', '18:00:00'),
(24, 3, 5, '09:00:00', '18:00:00'),
(25, 3, 7, '09:00:00', '18:00:00'),
(26, 4, 6, '09:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `img_id` int(5) NOT NULL,
  `img` varchar(225) NOT NULL,
  `img_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_id`, `img`, `img_path`) VALUES
(1, 'Slider_1', '../banners/Slider1.jpg'),
(2, 'Slider_2\r\n', '../banners/Slider2.jpg'),
(3, 'Slider_3', '../banners/Slider3.jpg'),
(4, 'Emp_Manager', '../banners/team1.jpg'),
(5, 'Emp_Mechanical_1', '../banners/team2.jpg'),
(6, 'Emp_Mechanical_2\r\n', '../banners/team3.jpg'),
(7, 'Director', '../banners/team4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(5) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `service_description` varchar(255) NOT NULL,
  `service_price` decimal(6,2) NOT NULL,
  `service_duration` int(5) NOT NULL,
  `category_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_description`, `service_price`, `service_duration`, `category_id`) VALUES
(1, 'Engine Diagnostics', 'Learn what is malfunctioning with your vehicle so you can make an educated decision that will put you back on the road safely and with confidence.', '500.00', 300, 2),
(2, 'Lube Oil and Filters', 'Oil is the lifeblood of your engine. Without the cleaning action of new oil, carbon and varnish buildup is toxic to the engine.', '300.00', 120, 1),
(3, 'Belts and Hoses', 'Car belts and hoses are essential to the functioning of your vehicle but are often overlooked. At AddedPower, you can get a professional belt and hose maintenance and replacement service.', '600.00', 280, 2),
(4, 'Air Conditioning', 'We service your car AC or heater to avoid drying out and cracking. with no leaky valves or blockages.', '100.00', 60, 1),
(5, 'Brake Repair', 'AddedPower technicians know every part of your brake system inside and out and can perform brake repair on any make and model', '1200.00', 120, 2),
(6, 'Tire and Wheel Services', 'We inspect, rotate, and balance your tires, as scheduled by your manufacturer &amp; make sure they are properly installed.', '200.00', 60, 3);

-- --------------------------------------------------------

--
-- Table structure for table `services_booked`
--

CREATE TABLE `services_booked` (
  `appointment_id` int(5) NOT NULL,
  `service_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services_booked`
--

INSERT INTO `services_booked` (`appointment_id`, `service_id`) VALUES
(29, 1),
(30, 2),
(31, 3),
(32, 4),
(33, 5),
(34, 5),
(35, 5);

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `category_id` int(2) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`category_id`, `category_name`) VALUES
(1, 'Interim'),
(2, 'Full'),
(3, 'Major');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `image_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersFirstName` varchar(20) NOT NULL,
  `usersLastName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersPhone` varchar(30) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `profile_image` varchar(225) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersFirstName`, `usersLastName`, `usersEmail`, `usersPhone`, `usersUid`, `profile_image`, `usersPwd`) VALUES
(1, '', 'BahaaHammad', 'Bahaahussamhammad@gmail.com', '', 'BahaaHammad', '', 'qwerty'),
(2, '', 'Mark Cuban', 'Mcuban@gmail.com', '', 'MCuban', '', '$2y$10$dFBYai6qoI7hS7fOZFL/QeGrS86SUgTV3Ytjfqs7ujuZoT/Gvo8ua'),
(3, '', 'Harry Styles', 'HStyles@gmail.com', '', 'HStyles', '', '$2y$10$6TwqLHakApnJooNPxJWBcON5dhj37VMQKgiZ6g9OkUepUA4zwkDoW'),
(4, '', 'rain', 'rain@gmail.com', '', 'Rain', 'uploads/pfpTest.png', '$2y$10$Iu.uSFst/SSFshaQpLm5G.G5x3P8A2zI2QGV.bxr4EwFIuvRpZRxi'),
(5, '', 'Steve ', 'SteveM@gmail.com', '', 'SteveM', '', '$2y$10$4ASHII.DqRR5Z99JHIsmrusHhOdCtO3FjN3st2PX7e/4NnF06.hoG'),
(6, 'Greg', 'House', 'House@gmail.com', '0555929292', 'House', '', '$2y$10$Om.EHqhIz1G5Dwjm.yLC.O6eA3IBARQiqGhN8PmFMexF5wWP99fpi'),
(7, 'Moh', 'Moh', 'Moh@gmail.com', '0909009', 'Moh', '', '$2y$10$zwlndOlKZfwvn43P.l13VOyOtLssHYjM3uxkQ.gQgGDdD4uB2QB7y'),
(8, 'x', 'y', 'xy@gmail.com', '121212', 'xy', '', '$2y$10$VZCAQMKtse6j.gQpKYfiIuxK19ATeBZkFnXhTFUv5yP2sHzkf.fI6'),
(9, 'Randy', 'House', 'Randy@gmail.com', '123456654321', 'Randy', '', '$2y$10$zn1lYSY3uVkvvrBUBr8hUOpKm4LlloSVbJ6G2gx9VAdmHSLt26GEK'),
(10, 'mey', 'mey', 'mey@gmail.com', '123', 'mey', 'uploads/pfpTest.png', '$2y$10$GLiKNydi.IobqjCtyJ67s.rBzrh60rDW1.MNJYmlRY31ZIh3kcy3q'),
(11, 'Bahaa', 'Hammad', 'BHAMMAD@gmail.com', '0555283517', 'BHammad', 'uploads/bah.jpg', '$2y$10$hF86goT66H/UMDN4PIUwmemiEpiUJ9DR8NvIZ7dUVsYPOQnrrG2Ie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addedpower_admin`
--
ALTER TABLE `addedpower_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `FK_client_appointment` (`client_id`),
  ADD KEY `FK_employee_appointment` (`employee_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `client_email` (`client_email`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `employees_schedule`
--
ALTER TABLE `employees_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_emp` (`employee_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `FK_service_category` (`category_id`);

--
-- Indexes for table `services_booked`
--
ALTER TABLE `services_booked`
  ADD PRIMARY KEY (`appointment_id`,`service_id`),
  ADD KEY `FK_SB_service` (`service_id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addedpower_admin`
--
ALTER TABLE `addedpower_admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees_schedule`
--
ALTER TABLE `employees_schedule`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `category_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `FK_client_appointment` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_employee_appointment` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE CASCADE;

--
-- Constraints for table `employees_schedule`
--
ALTER TABLE `employees_schedule`
  ADD CONSTRAINT `FK_emp` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `FK_service_category` FOREIGN KEY (`category_id`) REFERENCES `service_categories` (`category_id`) ON DELETE CASCADE;

--
-- Constraints for table `services_booked`
--
ALTER TABLE `services_booked`
  ADD CONSTRAINT `FK_SB_appointment` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`appointment_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_SB_service` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_appointment` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`appointment_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
