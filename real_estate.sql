-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 06:00 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agents1`
--

CREATE TABLE `agents1` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(20, 'qqq'),
(3, 'شهر بازی'),
(2, 'پارکینگ'),
(1, 'کافی شاپ');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `date_submit` date NOT NULL,
  `time_submit` time NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `date_submit_fa` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `budget` int(11) DEFAULT NULL,
  `exchange_description` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  `exchange` enum('yes','no','','') COLLATE utf8_unicode_ci NOT NULL,
  `prefered_location` text COLLATE utf8_unicode_ci,
  `zone` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `first_name`, `last_name`, `tel`, `mobile`, `date_submit`, `time_submit`, `description`, `date_submit_fa`, `budget`, `exchange_description`, `exchange`, `prefered_location`, `zone`) VALUES
(175, 'علی', 'هاشمی', '8769089', 2147483647, '2018-04-22', '02:00:00', 'یییییی', '1397/02/02', 182, NULL, 'yes', NULL, NULL),
(176, 'مهران', 'ایمانی', '8206778', 2147483647, '2018-06-09', '02:15:00', 'ییییی', '1397/03/19', 235, NULL, 'yes', NULL, NULL),
(177, 'مریم', 'سردار', '8206778', 2147483647, '2018-08-27', '02:15:00', 'یییی', '1397/06/05', 104095344, NULL, 'yes', NULL, NULL),
(178, 'محمد', 'رهبر', '8769089', 2147483647, '2018-08-05', '03:16:00', '', '1397/05/14', 108683826, NULL, 'no', 'ییی', NULL),
(179, 'حسن', 'دهقانی', '8769089', 93590122, '2018-08-29', '02:15:00', '', '1397/06/07', 208126732, 'ییی', 'yes', NULL, NULL),
(180, 'محمد', 'هاشمی', '8769089', 2147483647, '2019-01-09', '02:15:00', '', '1397/10/19', 119442312, NULL, 'yes', NULL, NULL),
(181, 'مهران', 'کیانیان', '8206778', 2147483647, '2018-04-27', '02:15:00', '', '1397/02/07', 182589954, NULL, 'yes', 'یییییییی', NULL),
(182, 'سیروس', 'سردار', '8206778', 93590122, '2018-08-23', '02:30:00', '', '1397/06/01', 183066318, NULL, 'no', '', NULL),
(183, 'فاطمه', 'سردار', '8206778', 2147483647, '2018-08-13', '02:30:00', '', '1397/05/22', 277089330, NULL, 'no', '', NULL),
(184, 'فاطمه', 'غفوری', '8206778', 93590122, '2018-03-31', '06:04:00', '', '1397/01/11', 155493009, NULL, 'no', 'یییی', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_service_contracts`
--

CREATE TABLE `client_service_contracts` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(125) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(125) CHARACTER SET utf8 NOT NULL,
  `cardid` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `checkin` int(11) DEFAULT NULL COMMENT 'unix timestamp',
  `checkout` int(11) DEFAULT NULL COMMENT 'unix timestamp',
  `mobile` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `card_expire_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `card_canceled` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `value`) VALUES
(1, 2),
(2, 3),
(3, 4),
(5, 6),
(6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_table` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `old_value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_changed` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int(11) DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_field` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_table`, `old_value`, `new_value`, `date_changed`, `userid`, `user_name`, `action`, `event_field`) VALUES
(1, 'properties', NULL, NULL, '2018-05-12 09:17:49', 2, '', 'add', NULL),
(2, 'properties', NULL, NULL, '2018-05-12 09:20:05', 2, '', 'add', NULL),
(3, 'properties', NULL, NULL, '2018-05-12 10:36:49', 2, '', 'update', NULL),
(4, 'properties', NULL, NULL, '2018-05-12 11:07:25', 2, '', 'add', NULL),
(5, 'properties', NULL, NULL, '2018-05-12 11:07:35', 2, '', 'add', NULL),
(6, 'properties', NULL, NULL, '2018-05-12 11:09:05', 2, '', 'add', NULL),
(7, 'properties', NULL, NULL, '2018-05-12 11:09:44', 2, '', 'add', NULL),
(8, 'properties', NULL, NULL, '2018-05-12 11:11:04', 2, '', 'add', NULL),
(9, 'properties', NULL, NULL, '2018-05-12 11:21:11', 2, '', 'add', NULL),
(10, 'properties', NULL, NULL, '2018-05-12 11:26:13', 2, '', 'add', NULL),
(11, 'properties', NULL, NULL, '2018-05-12 11:36:17', 2, '', 'add', NULL),
(12, 'properties', NULL, NULL, '2018-05-12 11:41:30', 2, '', 'add', NULL),
(13, 'properties', NULL, NULL, '2018-05-12 11:44:59', 2, '', 'add', NULL),
(14, 'properties', NULL, NULL, '2018-05-12 11:53:55', 2, '', 'add', NULL),
(15, 'properties', NULL, NULL, '2018-05-12 11:56:05', 2, '', 'add', NULL),
(16, 'properties', NULL, NULL, '2018-05-12 12:29:58', 2, '', 'add', NULL),
(17, 'properties', NULL, NULL, '2018-05-12 12:30:26', 2, '', 'add', NULL),
(18, 'properties', NULL, NULL, '2018-05-12 12:31:16', 2, '', 'add', NULL),
(19, 'properties', NULL, NULL, '2018-05-12 12:32:52', 2, '', 'add', NULL),
(20, 'properties', NULL, NULL, '2018-05-12 12:40:55', 2, '', 'add', NULL),
(21, 'properties', NULL, NULL, '2018-05-13 14:08:12', 2, '', 'add', NULL),
(22, 'properties', NULL, NULL, '2018-05-13 14:19:43', 2, '', 'add', NULL),
(23, 'properties', NULL, NULL, '2018-05-13 14:31:21', 2, '', 'add', NULL),
(24, 'properties', NULL, NULL, '2018-05-13 14:31:30', 2, '', 'add', NULL),
(25, 'properties', NULL, NULL, '2018-05-13 14:32:03', 2, '', 'add', NULL),
(26, 'properties', NULL, NULL, '2018-05-13 14:36:00', 2, '', 'add', NULL),
(27, 'properties', NULL, NULL, '2018-05-13 14:45:33', 2, '', 'add', NULL),
(28, 'properties', NULL, NULL, '2018-05-13 14:45:39', 2, '', 'add', NULL),
(29, 'properties', NULL, NULL, '2018-05-13 14:46:04', 2, '', 'add', NULL),
(30, 'properties', NULL, NULL, '2018-05-13 14:46:44', 2, '', 'add', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `feature_name` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feature_description` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `description` varchar(200) CHARACTER SET utf8 NOT NULL,
  `price` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='prices table';

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `description`, `price`, `cat_id`) VALUES
(22, 'پارک ۱ ساعت', 30000, 2),
(33, 'گریم', 10000, 3),
(34, 'دستگاه vr', 5000, 3),
(35, 'دستگاه تکان دهنده', 5000, 3),
(36, 'test1', 333, 3),
(37, 'teet3', 55555, 3),
(38, 'testsss', 5555, 20);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `property_name` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `property_description` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `owner_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `owner_family` varchar(50) CHARACTER SET utf8 NOT NULL,
  `owner_tel` varchar(50) CHARACTER SET utf8 NOT NULL,
  `owner_mobile` varchar(50) CHARACTER SET utf8 NOT NULL,
  `room_count` int(11) DEFAULT NULL,
  `parking` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL COMMENT 'پارکینگ',
  `parking_count` int(11) DEFAULT NULL COMMENT 'تعداد پارکینگ',
  `anbari` enum('yes','no') COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'انباری',
  `anbari_count` int(11) DEFAULT NULL COMMENT 'تعدا انباری',
  `zone` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT 'محدوده',
  `street` varchar(100) CHARACTER SET utf8 NOT NULL,
  `alley` varchar(100) CHARACTER SET utf8 NOT NULL,
  `property_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_on_market` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL COMMENT 'سن بنا',
  `num_stories` int(11) NOT NULL COMMENT 'تعداد طبقات',
  `unit_per_story` int(11) NOT NULL COMMENT 'تعداد واحد در طبق',
  `parking_area` int(11) NOT NULL COMMENT 'مساحت پارکینگ',
  `anbari_area` int(11) NOT NULL COMMENT 'مساحت انباری',
  `rent_amount` int(11) NOT NULL,
  `rahn_amount` int(11) NOT NULL,
  `rent_preconditions` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'شرایط اجاره',
  `rahn_preconditions` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT 'شرایط رهن',
  `pardakht_method` varchar(100) CHARACTER SET utf8 NOT NULL,
  `parvane` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL COMMENT 'پروانه',
  `parvane_description` varchar(500) CHARACTER SET utf8 NOT NULL COMMENT 'توضیحات پروانه',
  `deal_type` enum('rahn','rent','kharid','moaveze','none') COLLATE utf8_unicode_ci NOT NULL,
  `area` int(11) NOT NULL COMMENT 'مساحت',
  `renovated` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL COMMENT 'بازسازی شده',
  `renovation_age` int(11) NOT NULL COMMENT 'سن بازسازی',
  `price_per_square_meter` int(11) NOT NULL COMMENT 'قیمت هر متر مربع',
  `price_total` int(11) NOT NULL COMMENT 'قیمت کل',
  `sanad_type` enum('melki','oghaf','','') COLLATE utf8_unicode_ci NOT NULL COMMENT 'نوع سند',
  `user_id` int(11) NOT NULL,
  `for_rent` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `for_rahn` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `for_sale` enum('yes','no') COLLATE utf8_unicode_ci DEFAULT 'no',
  `fk_property_feature_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `property_name`, `property_description`, `owner_name`, `owner_family`, `owner_tel`, `owner_mobile`, `room_count`, `parking`, `parking_count`, `anbari`, `anbari_count`, `zone`, `street`, `alley`, `property_type`, `date_on_market`, `age`, `num_stories`, `unit_per_story`, `parking_area`, `anbari_area`, `rent_amount`, `rahn_amount`, `rent_preconditions`, `rahn_preconditions`, `pardakht_method`, `parvane`, `parvane_description`, `deal_type`, `area`, `renovated`, `renovation_age`, `price_per_square_meter`, `price_total`, `sanad_type`, `user_id`, `for_rent`, `for_rahn`, `for_sale`, `fk_property_feature_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(200, '', '', 'رضا', 'ادیب', '8206778', '09359012233', 2, 'no', 2, 'no', 2, 'عادل آباد', 'سراچ', 'کوچه 2', 'apartment', '', 7, 5, 5, 64, 50, 1323970, 0, 'شرایط اجاره', '', '', 'yes', '', 'rahn', 187, 'yes', 0, 0, 0, 'melki', 2, 'no', 'no', 'no', 40, '2018-05-13 14:08:12', '2018-05-13 14:08:12', NULL),
(201, '', '', 'حسن', 'غفوری', '8206778', '09359012233', 1, 'no', 6, 'no', 1, 'تاچارا', 'زند', 'کوچه اول', 'apartment', '', 2, 5, 3, 62, 50, 756695, 0, 'شرایط اجاره', '', '', 'yes', '', 'rahn', 300, 'yes', 0, 0, 0, 'melki', 2, 'no', 'no', 'no', 41, '2018-05-13 14:19:43', '2018-05-13 14:19:43', NULL),
(202, '', '', 'مهران', 'غفوری', '8769089', '093590122', 1, 'no', 4, 'no', 1, 'اطلسی', 'پیروزی', 'کوچه 5', 'apartment', '', 7, 1, 2, 57, 50, 884534, 0, 'شرایط اجاره', '', '', 'yes', '', 'rahn', 224, 'yes', 0, 0, 0, 'melki', 2, 'no', 'no', 'no', 42, '2018-05-13 14:31:21', '2018-05-13 14:31:21', NULL),
(203, '', '', 'اردلان', 'دهقانی', '8206778', '09359012244', 6, 'no', 5, 'no', 1, 'عادل آباد', 'سپاسی', 'کوچه 5', 'apartment', '', 4, 8, 2, 91, 50, 1226290, 0, 'شرایط اجاره', '', '', 'yes', '', 'rahn', 307, 'yes', 0, 0, 0, 'melki', 2, 'no', 'no', 'no', 43, '2018-05-13 14:31:30', '2018-05-13 14:31:30', NULL),
(204, '', '', 'اردلان', 'غفوری', '8769089', '09359012233', 2, 'no', 5, 'no', 2, 'ارتش', 'پیروزی', 'کوچه 1', 'apartment', '', 3, 4, 1, 91, 50, 545247, 0, 'شرایط اجاره', '', '', 'yes', '', 'rahn', 266, 'yes', 0, 0, 0, 'melki', 2, 'no', 'no', 'no', 44, '2018-05-13 14:32:03', '2018-05-13 14:32:03', NULL),
(205, '', '', 'قاسم', 'خلیلی', '8769089', '093590122', 3, 'no', 3, 'no', 1, 'عادل آباد', 'سراچ', 'کوچه 4', 'apartment', '', 1, 9, 4, 93, 50, 1335589, 0, 'شرایط اجاره', '', '', 'yes', '', 'rahn', 115, 'yes', 0, 0, 0, 'melki', 2, 'no', 'no', 'no', 45, '2018-05-13 14:35:59', '2018-05-13 14:35:59', NULL),
(206, '', '', 'مریم', 'دهقانی', '8206778', '09359012233', 6, 'no', 2, 'no', 2, 'اطلسی', 'ولیعسر', 'کوچه 5', 'apartment', '', 1, 10, 2, 52, 50, 1174560, 0, 'شرایط اجاره', '', '', 'yes', '', 'rahn', 341, 'yes', 0, 0, 0, 'melki', 2, 'no', 'no', 'no', 46, '2018-05-13 14:45:33', '2018-05-13 14:45:33', NULL),
(207, '', '', 'رضا', 'ایمانی', '8769089', '09359012244', 4, 'no', 3, 'no', 1, 'معالی آباد', 'اردیبهشت', 'کوچه 4', 'apartment', '', 5, 1, 4, 103, 50, 1039806, 0, 'شرایط اجاره', '', '', 'yes', '', 'rahn', 275, 'yes', 0, 0, 0, 'melki', 2, 'no', 'no', 'no', 47, '2018-05-13 14:45:39', '2018-05-13 14:45:39', NULL),
(208, '', '', 'سیروس', 'مدیری', '8769089', '09359012233', 1, 'no', 2, 'no', 1, 'تاچارا', 'سپاسی', 'کوچه اول', 'apartment', '', 7, 9, 5, 95, 50, 947869, 0, 'شرایط اجاره', '', '', 'yes', '', 'rahn', 254, 'yes', 0, 0, 0, 'melki', 2, 'no', 'no', 'no', 48, '2018-05-13 14:46:04', '2018-05-13 14:46:04', NULL),
(209, '', '', 'فاطمه', 'رهبر', '8769089', '09359012244', 6, 'no', 5, 'no', 2, 'ارتش', 'داریوش', 'کوچه 3', 'apartment', '', 3, 5, 3, 108, 50, 1339589, 0, 'شرایط اجاره', '', '', 'yes', '', 'rahn', 329, 'yes', 0, 0, 0, 'melki', 2, 'no', 'no', 'no', 49, '2018-05-13 14:46:43', '2018-05-13 14:46:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property_features`
--

CREATE TABLE `property_features` (
  `property_feature_id` int(11) NOT NULL,
  `elevator` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'آسانسور',
  `package` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'پکیج',
  `iphone` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'آیفون تصویری',
  `shomine` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'شومینه',
  `parde` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'پرده',
  `noor_pardazi` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'نورپردازی',
  `komod_divari` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'کمد دیواری',
  `sona` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'سونا',
  `jakozi` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'جکوزی',
  `electricity` tinyint(4) DEFAULT '0' COMMENT 'برق',
  `water` tinyint(4) DEFAULT '0' COMMENT 'آب',
  `gas` tinyint(4) DEFAULT '0' COMMENT 'گاز',
  `telephone` tinyint(4) DEFAULT '0' COMMENT 'تلفن',
  `decoration` tinyint(4) DEFAULT '0' COMMENT 'دکوراسیون',
  `metraj_balkon` int(11) DEFAULT '0' COMMENT 'متراژ بالکن',
  `tedad_dahane` int(11) DEFAULT '0' COMMENT 'تعداد دهنه',
  `arze_dahane` int(11) DEFAULT '0' COMMENT 'عرض دهنه',
  `ertefa_tejari` int(11) DEFAULT '0' COMMENT 'ارتفاع تجاری',
  `telephone_line_count` tinyint(4) DEFAULT '0' COMMENT 'تعداد خط تلفن',
  `garmayesh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'گرمایش',
  `sarmayesh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'سرمایش',
  `divar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'دیوار',
  `floor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'کف',
  `khab` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'تعداد خواب',
  `takhlie` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'وضعیت تخلیه',
  `payane_kar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'وضعیت پایان کار',
  `tahvil_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'زمان تحویل',
  `source` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'منبع اطلاعات',
  `kabinet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'کابینت',
  `land_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'نوع ملک کلنگی',
  `house_entry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'درب از حیاط-درب از ساختمان و ...'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `property_features`
--

INSERT INTO `property_features` (`property_feature_id`, `elevator`, `package`, `iphone`, `shomine`, `parde`, `noor_pardazi`, `komod_divari`, `sona`, `jakozi`, `electricity`, `water`, `gas`, `telephone`, `decoration`, `metraj_balkon`, `tedad_dahane`, `arze_dahane`, `ertefa_tejari`, `telephone_line_count`, `garmayesh`, `sarmayesh`, `divar`, `floor`, `khab`, `takhlie`, `payane_kar`, `tahvil_date`, `source`, `kabinet`, `land_type`, `house_entry`) VALUES
(32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '1 خواب', '', 'ییییییییییی', NULL, NULL, NULL, NULL, NULL),
(33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '1 خواب', '', '', '1397/02/10', NULL, NULL, NULL, NULL),
(34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '1 خواب', '', '', '', 'ککککککککککککککککککککککک', NULL, NULL, NULL),
(35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '1 خواب', '', '', '', '', 'ییییییییی', NULL, NULL),
(36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'باغ', NULL),
(39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'منزل ویلایی', ''),
(40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '1 خواب', '', '', '', '', '', NULL, NULL),
(41, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '1 خواب', '', '', '', '', '', NULL, NULL),
(42, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '1 خواب', '', '', '', '', '', NULL, NULL),
(43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '1 خواب', '', '', '', '', '', NULL, NULL),
(44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '1 خواب', '', '', '', '', '', NULL, NULL),
(45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '1 خواب', '', '', '', '', '', NULL, NULL),
(46, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '1 خواب', '', '', '', '', '', NULL, NULL),
(47, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '1 خواب', '', '', '', '', '', NULL, NULL),
(48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '1 خواب', '', '', '', '', '', NULL, NULL),
(49, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '1 خواب', '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `permissions`) VALUES
(11, 'ffffff', '{\"add_customer\":false,\"view_users\":false,\"change_user_password\":false}'),
(15, 'supervisor', '{\"add_customer\":false,\"view_users\":false,\"change_user_password\":false}'),
(16, 'karmand1', '{\"add_customer\":false,\"view_users\":false,\"change_user_password\":false,\"rent_apartment\":true,\"rent_store\":true,\"sell_apartment\":true,\"sell_store\":true,\"sell_land\":false}');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'title', 'site title');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `super_admin` enum('yes','no','','') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `active` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `agent_percent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `email`, `first_name`, `last_name`, `super_admin`, `active`, `role_id`, `agent_percent`) VALUES
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'a@b.com', 'admin', 'admin', 'yes', 'true', NULL, 0),
(4, 'test', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, 'test', 'test', 'no', '', 11, 0),
(8, 'moh', 'd34fa1f8f0b1a76ae79daca432f5ad6c21b71e0c', NULL, 'moh', 'moh', 'no', '', 11, 0),
(9, 'ali', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, 'ali', 'ali', 'no', '', 16, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents1`
--
ALTER TABLE `agents1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_service_contracts`
--
ALTER TABLE `client_service_contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_features`
--
ALTER TABLE `property_features`
  ADD PRIMARY KEY (`property_feature_id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agents1`
--
ALTER TABLE `agents1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `client_service_contracts`
--
ALTER TABLE `client_service_contracts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `property_features`
--
ALTER TABLE `property_features`
  MODIFY `property_feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
