-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ingrammicro`
--

-- --------------------------------------------------------

--
-- Структура на таблица `activities`
--

CREATE TABLE `activities` (
  `activity_id` int(11) NOT NULL,
  `activity_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `activities`
--

INSERT INTO `activities` (`activity_id`, `activity_name`) VALUES
(1, 'Advertising'),
(2, 'Business Intelligence'),
(3, 'Campaigns'),
(4, 'Core Packages'),
(5, 'Events'),
(6, 'Incentives');

-- --------------------------------------------------------

--
-- Структура на таблица `approvers`
--

CREATE TABLE `approvers` (
  `approver_id` int(11) NOT NULL,
  `approver_name` varchar(20) NOT NULL,
  `departament_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `approvers`
--

INSERT INTO `approvers` (`approver_id`, `approver_name`, `departament_id`) VALUES
(1, 'Ultyren', 1),
(2, 'Allack', 1),
(3, 'Urraony', 1),
(4, 'Calglae', 1),
(5, 'Lahia', 1),
(6, 'Lardren', 2),
(7, 'Harsnes', 2),
(8, 'Seesa', 2),
(9, 'Fordria', 2),
(10, 'Leyard', 2),
(11, 'Kliryl', 2),
(12, 'Jaibhi', 3),
(13, 'Dolie', 3),
(14, 'Eadam', 3),
(15, 'Chiaigi', 3),
(16, 'Loreela', 3),
(17, 'Chelard', 3),
(18, 'Chelyan', 3);

-- --------------------------------------------------------

--
-- Структура на таблица `departaments`
--

CREATE TABLE `departaments` (
  `departament_id` int(11) NOT NULL,
  `departament_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `departaments`
--

INSERT INTO `departaments` (`departament_id`, `departament_name`) VALUES
(2, 'Business Manager'),
(1, 'Campaign Manager'),
(3, 'Director');

-- --------------------------------------------------------

--
-- Структура на таблица `managers_has_projects`
--

CREATE TABLE `managers_has_projects` (
  `manager_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура на таблица `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `type_id` varchar(45) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `comments` varchar(200) DEFAULT NULL,
  `file_name` varchar(45) DEFAULT NULL,
  `projectscol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура на таблица `project_types`
--

CREATE TABLE `project_types` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(20) NOT NULL,
  `margin` float NOT NULL,
  `activity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `project_types`
--

INSERT INTO `project_types` (`type_id`, `type_name`, `margin`, `activity_id`) VALUES
(1, 'Branding', 4.7, 1),
(2, 'Banner', 5, 1),
(3, 'Ads', 0.9, 1),
(4, 'Attachments', 5.6, 2),
(5, 'Growth', 5.6, 2),
(6, 'Whitespice', 5.6, 2),
(7, 'Agency', 5, 3),
(8, 'Campaign', 4.4, 3),
(9, 'School', 4.4, 3),
(10, 'University', 2.5, 3),
(11, 'Office', 2.5, 3),
(12, 'Merchandise', 0.9, 3),
(13, 'Print', 2.5, 3),
(14, 'Value', 5.6, 4),
(15, 'Display', 5.6, 4),
(16, 'Networking', 5.6, 4),
(17, 'Hospitality', 0.9, 5),
(18, 'Golf', 1.9, 5),
(19, 'Dinner', 2.2, 5),
(20, 'Teambuildig', 2.2, 5),
(21, 'Training', 2.2, 5),
(22, 'Best Sales', 0.6, 6),
(23, 'Best Campaign', 0.6, 6),
(24, 'Bonus', 0.6, 6);

-- --------------------------------------------------------

--
-- Структура на таблица `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_name`) VALUES
(1, 'AMD'),
(2, 'APG'),
(3, 'B33D'),
(4, 'CAGARD'),
(5, 'Ecocom'),
(6, 'EL LTD'),
(7, 'EOSTOR'),
(8, 'F LLUV'),
(9, 'GATIDE'),
(10, 'I-ERA'),
(11, 'IONICS'),
(12, 'KETILE'),
(13, 'LCTER'),
(14, 'LLELL'),
(15, 'Necise'),
(16, 'NS-S-G'),
(17, 'ODEESK'),
(18, 'ONx1'),
(19, 'OROA1'),
(20, 'OXPB)'),
(21, 'PNY'),
(22, 'Q-ors'),
(23, 'Ra-S2'),
(24, 'ROOOOT'),
(25, 'RTAR'),
(26, 'STEOKS'),
(27, 'SUNONE'),
(28, 'Trivitiv'),
(29, 'USR'),
(30, 'WSOORS'),
(31, 'ZERASS');

-- --------------------------------------------------------

--
-- Структура на таблица `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor_name`) VALUES
(1, 'Amoamo'),
(2, 'Appapp'),
(3, 'Baloons'),
(4, 'Chirks'),
(5, 'Fctec'),
(6, 'Floem'),
(7, 'Floem2'),
(8, 'Erbbox'),
(9, 'Falalo'),
(10, 'IA CES'),
(11, 'IORIO'),
(12, 'LEISE'),
(13, 'MARARK'),
(14, 'NEMEMA'),
(15, 'OIVIO'),
(16, 'ONX2'),
(17, 'OYMO'),
(18, 'PPANY'),
(19, 'Quiiet'),
(20, 'Ram BV'),
(21, 'RTECOM'),
(22, 'Stetek'),
(23, 'SUNOR'),
(24, 'USTITY'),
(25, 'xcacone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activity_id`),
  ADD UNIQUE KEY `activity_id_UNIQUE` (`activity_id`),
  ADD UNIQUE KEY `activity_name_UNIQUE` (`activity_name`);

--
-- Indexes for table `approvers`
--
ALTER TABLE `approvers`
  ADD PRIMARY KEY (`approver_id`),
  ADD UNIQUE KEY `approver_id_UNIQUE` (`approver_id`),
  ADD KEY `departament_id_fk_idx` (`departament_id`);

--
-- Indexes for table `departaments`
--
ALTER TABLE `departaments`
  ADD PRIMARY KEY (`departament_id`),
  ADD UNIQUE KEY `department_id_UNIQUE` (`departament_id`),
  ADD UNIQUE KEY `departament_name_UNIQUE` (`departament_name`);

--
-- Indexes for table `managers_has_projects`
--
ALTER TABLE `managers_has_projects`
  ADD PRIMARY KEY (`manager_id`,`project_id`),
  ADD KEY `project_id_fk_idx` (`project_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD UNIQUE KEY `project_id_UNIQUE` (`project_id`);

--
-- Indexes for table `project_types`
--
ALTER TABLE `project_types`
  ADD PRIMARY KEY (`type_id`),
  ADD UNIQUE KEY `type_id_UNIQUE` (`type_id`),
  ADD UNIQUE KEY `type_name_UNIQUE` (`type_name`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`),
  ADD UNIQUE KEY `supplier_id_UNIQUE` (`supplier_id`),
  ADD UNIQUE KEY `supplier_name_UNIQUE` (`supplier_name`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendor_id`),
  ADD UNIQUE KEY `vendor_id_UNIQUE` (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `approvers`
--
ALTER TABLE `approvers`
  MODIFY `approver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `departaments`
--
ALTER TABLE `departaments`
  MODIFY `departament_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project_types`
--
ALTER TABLE `project_types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `approvers`
--
ALTER TABLE `approvers`
  ADD CONSTRAINT `departament_id_fk` FOREIGN KEY (`departament_id`) REFERENCES `departaments` (`departament_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения за таблица `managers_has_projects`
--
ALTER TABLE `managers_has_projects`
  ADD CONSTRAINT `manager_id_fk` FOREIGN KEY (`manager_id`) REFERENCES `approvers` (`approver_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `project_id_fk` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
