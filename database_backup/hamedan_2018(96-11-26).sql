-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 15, 2018 at 11:51 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamedan_2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertises`
--

CREATE TABLE `tbl_advertises` (
  `id` int(10) UNSIGNED NOT NULL,
  `aGId` int(10) UNSIGNED NOT NULL,
  `aState` tinyint(1) NOT NULL DEFAULT '1',
  `aLink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aLinkFaTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aLinkEnTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aLinkArTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aFaAlt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aEnAlt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aArAlt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aFaSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aEnSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aArSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aFaDescription` longtext COLLATE utf8mb4_unicode_ci,
  `aEnDescription` longtext COLLATE utf8mb4_unicode_ci,
  `aArDescription` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image_gallery`
--

CREATE TABLE `tbl_image_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `gPath` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gFaLocation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gFaPhotographer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gEnLocation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gEnPhotographer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gArLocation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gArPhotographer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_image_gallery`
--

INSERT INTO `tbl_image_gallery` (`id`, `gPath`, `gFaLocation`, `gFaPhotographer`, `gEnLocation`, `gEnPhotographer`, `gArLocation`, `gArPhotographer`, `created_at`, `updated_at`) VALUES
(1, 'pic/gallery/header/header_1.jpg', 'تویسرکان، کهنوش', 'مصطفی اسدبیگی', 'Toyserkan, Kohnush', 'Mostafa Asadbeygi', 'تویسرکان، کهنوش', 'مصطفی اسدبیگی', '2018-02-12 20:30:00', '2018-02-12 20:30:00'),
(4, 'pic/gallery/header/header_2.jpg', 'عمارت اردلان', 'مصطفی اسدبیگی', 'Ardalan House', 'Mostafa Asadbeygi', 'عمارة أردلان', 'مصطفی اسدبیگی', '2018-02-12 20:30:00', '2018-02-12 20:30:00'),
(5, 'pic/gallery/header/header_3.jpg', 'تویسرکان، دره گزندر', 'مصطفی اسدبیگی', 'Tuyserkan - Gazandar Valley', 'Mostafa Asadbeygi', 'تویسرکان، دره گزندر', 'مصطفی اسدبیگی', '2018-02-12 20:30:00', '2018-02-12 20:30:00'),
(6, 'pic/gallery/header/header_4.jpg', 'کوه الوند', 'مصطفی اسدبیگی', 'Mount Alvand', 'Mostafa Asadbeygi', 'جبل الوند', 'مصطفی اسدبیگی', '2018-02-12 20:30:00', '2018-02-12 20:30:00'),
(7, 'pic/gallery/lan_1.jpg', NULL, 'مصطفی اسدبیگی', NULL, 'Mostafa Asadbeygi', NULL, 'مصطفی اسدبیگی', '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(8, 'pic/gallery/lan_2.jpg', NULL, 'مصطفی اسدبیگی', NULL, 'Mostafa Asadbeygi', NULL, 'مصطفی اسدبیگی', '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(9, 'pic/gallery/lan_3.jpg', NULL, 'مصطفی اسدبیگی', NULL, 'Mostafa Asadbeygi', NULL, 'مصطفی اسدبیگی', '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(10, 'pic/gallery/lan_4.jpg', NULL, 'مصطفی اسدبیگی', NULL, 'Mostafa Asadbeygi', NULL, 'مصطفی اسدبیگی', '2018-02-14 20:30:00', '2018-02-14 20:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_main_menus`
--

CREATE TABLE `tbl_main_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `mmOrder` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `mmFaSubject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mmEnSubject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mmArSubject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mmPageLink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mmState` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_main_menus`
--

INSERT INTO `tbl_main_menus` (`id`, `mmOrder`, `mmFaSubject`, `mmEnSubject`, `mmArSubject`, `mmPageLink`, `mmState`, `created_at`, `updated_at`) VALUES
(1, 1, 'همدان', 'Hamedan', 'همدان', '/page/hamedan/history', 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(2, 1, 'اخبار', 'News', 'أخبار', '/news', 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(3, 1, 'رویدادها', 'Events', 'أحداث', '/page/event/scientificAndSports/flyOverTheHistory', 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `nViewedCount` bigint(20) NOT NULL DEFAULT '0',
  `nFaSubject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nEnSubject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nArSubject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nFaBriefDescription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nEnBriefDescription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nArBriefDescription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nFaDescription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nEnDescription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nArDescription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nState` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news_img`
--

CREATE TABLE `tbl_news_img` (
  `id` int(10) UNSIGNED NOT NULL,
  `niNId` int(10) UNSIGNED NOT NULL,
  `niGId` int(10) UNSIGNED NOT NULL,
  `niOrder` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `niState` tinyint(1) NOT NULL DEFAULT '1',
  `niFaAlt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niEnAlt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niArAlt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niFaSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `niEnSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `niArSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `niFaDescription` longtext COLLATE utf8mb4_unicode_ci,
  `niEnDescription` longtext COLLATE utf8mb4_unicode_ci,
  `niArDescription` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news_slider`
--

CREATE TABLE `tbl_news_slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `nsGId` int(10) UNSIGNED NOT NULL,
  `nsOrder` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `nsState` tinyint(1) NOT NULL DEFAULT '1',
  `nsFaAlt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nsEnAlt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nsArAlt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nsFaSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nsEnSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nsArSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nsFaDescription` longtext COLLATE utf8mb4_unicode_ci,
  `nsEnDescription` longtext COLLATE utf8mb4_unicode_ci,
  `nsArDescription` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `pMmId` int(10) UNSIGNED DEFAULT NULL,
  `pSmId` int(10) UNSIGNED DEFAULT NULL,
  `pPhtId` int(10) UNSIGNED NOT NULL,
  `pFaSubject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pEnSubject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pArSubject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pFaTitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pEnTitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pArTitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pLinkUrl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pFaDescription` longtext COLLATE utf8mb4_unicode_ci,
  `pEnDescription` longtext COLLATE utf8mb4_unicode_ci,
  `pArDescription` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`id`, `pMmId`, `pSmId`, `pPhtId`, `pFaSubject`, `pEnSubject`, `pArSubject`, `pFaTitle`, `pEnTitle`, `pArTitle`, `pLinkUrl`, `pFaDescription`, `pEnDescription`, `pArDescription`, `created_at`, `updated_at`) VALUES
(2, NULL, NULL, 1, 'همدان ۲۰۱۸', 'Hamadan 2018', 'همدان 2018', 'همدان ۲۰۱۸', 'Hamadan 2018', 'همدان 2018', '/', NULL, NULL, NULL, '2018-02-12 20:30:00', '2018-02-12 20:30:00'),
(3, 1, 2, 2, 'تاریخچه', 'History', 'تاريخ', 'تاریخچه همدان', 'History of Hamedan', 'تاريخ حمدان', '/hamedan/history', 'همدان پایتخت تاریخ و تمدن', 'Hamedan Capital of History and Civilization', 'حمدان عاصمة التاريخ والحضارة', '2018-02-13 20:30:00', '2018-02-13 20:30:00'),
(4, 1, 8, 2, 'همدان در یک نگاه', 'Hamedan at a glance', 'همدان في لمحة', 'همدان در یک نگاه', 'Hamedan at a glance', 'همدان في لمحة', '/hamedan/hemedan-at-a-glance', 'همدان خاستگاه تمدن و شهرنشینی', 'Hamedan is the origin of civilization and urbanization', 'همدان هو أصل الحضارة والتحضر', '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(5, 1, 4, 2, 'آداب و رسوم', 'Customs and traditions', 'العادات والتقاليد', 'آداب و رسوم', 'Customs and traditions', 'العادات والتقاليد', '/hamedan/customs-and-traditions', 'تجربه فرهنگ اصیل ایرانی', 'Experience the genuine Iranian culture', 'تجربة الثقافة الإيرانية الحقيقية', '2018-02-14 20:30:00', '2018-02-14 20:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_breadcrumbs`
--

CREATE TABLE `tbl_page_breadcrumbs` (
  `id` int(10) UNSIGNED NOT NULL,
  `pbPId` int(10) UNSIGNED NOT NULL,
  `pbPPId` int(10) UNSIGNED NOT NULL,
  `pbOrder` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_page_breadcrumbs`
--

INSERT INTO `tbl_page_breadcrumbs` (`id`, `pbPId`, `pbPPId`, `pbOrder`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 1, '2018-02-13 20:30:00', '2018-02-13 20:30:00'),
(2, 4, 2, 1, '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(3, 5, 2, 1, '2018-02-14 20:30:00', '2018-02-14 20:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_header_img`
--

CREATE TABLE `tbl_page_header_img` (
  `id` int(10) UNSIGNED NOT NULL,
  `phiPId` int(10) UNSIGNED NOT NULL,
  `phiGId` int(10) UNSIGNED NOT NULL,
  `phiOrder` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `phiState` tinyint(1) NOT NULL DEFAULT '1',
  `phiFaAlt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phiEnAlt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phiArAlt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phiLink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phiLinkFaTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phiLinkEnTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phiLinkArTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phiFaSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phiEnSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phiArSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phiFaDescription` longtext COLLATE utf8mb4_unicode_ci,
  `phiEnDescription` longtext COLLATE utf8mb4_unicode_ci,
  `phiArDescription` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_page_header_img`
--

INSERT INTO `tbl_page_header_img` (`id`, `phiPId`, `phiGId`, `phiOrder`, `phiState`, `phiFaAlt`, `phiEnAlt`, `phiArAlt`, `phiLink`, `phiLinkFaTitle`, `phiLinkEnTitle`, `phiLinkArTitle`, `phiFaSubject`, `phiEnSubject`, `phiArSubject`, `phiFaDescription`, `phiEnDescription`, `phiArDescription`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 1, 'طبیعت چهار فصل', 'Four Seasons Nature', 'فور سيزونز الطبيعة', '/page/hamedan/hemedan-at-a-glance', 'بیشتر', 'READ MORE', 'اقرأ أكثر', 'طبعیت چهار فصل', 'Four Seasons Nature', 'فور سيزونز الطبيعة', 'تجربه آرامش در چهار فصل', 'Experience the calm in four seasons', 'تجربة الهدوء في أربعة مواسم', '2018-02-12 20:30:00', '2018-02-12 20:30:00'),
(2, 2, 4, 1, 1, 'تجربه فرهنگ اصیل ایرانی', 'Experience the genuine Iranian culture', 'تجربة الثقافة الإيرانية الحقيقية', '/page/hamedan/customs-and-traditions', 'بیشتر', 'READ MORE', 'اقرأ أكثر', 'تجربه فرهنگ اصیل ایرانی', 'Experience the genuine Iranian culture', 'تجربة الثقافة الإيرانية الحقيقية', 'در اقامتگاه های بوم گردی میزبان شما هستیم', 'We are at your homesteads', 'نحن في بيوتكم', '2018-02-12 20:30:00', '2018-02-12 20:30:00'),
(3, 2, 5, 1, 1, 'سفر به اعماق تاریخ', 'A trip to the depths of history', 'رحلة إلى أعماق التاريخ', '/page/hamedan/history', 'بیشتر', 'READ MORE', 'اقرأ أكثر', 'همدان پایتخت تاریخ و تمدن', 'A trip to the depths of history', 'رحلة إلى أعماق التاريخ', 'همدان پایتخت تاریخ و تمدن', 'Hamedan Capital of History and Civilization', 'حمدان عاصمة التاريخ والحضارة', '2018-02-12 20:30:00', '2018-02-12 20:30:00'),
(4, 2, 6, 1, 1, 'زمستان، شادی و هیجان', 'Winter, joy and excitement', 'الشتاء، الفرح والإثارة', NULL, 'بیشتر', 'READ MORE', 'اقرأ أكثر', 'شکوه الوند', 'Alvand\'s glory', 'مجد الوند', 'زمستان، شادی و هیجان', 'Winter, joy and excitement', 'الشتاء، الفرح والإثارة', '2018-02-12 20:30:00', '2018-02-12 20:30:00'),
(5, 3, 5, 1, 1, 'تاریخچه همدان', 'History of Hamedan', 'تاريخ حمدان', NULL, NULL, NULL, NULL, 'تاریخچه', 'History', 'تاریخ', 'همدان پایتخت تاریخ و تمدن', 'Hamedan Capital of History and Civilization', 'حمدان عاصمة التاريخ والحضارة', '2018-02-13 20:30:00', '2018-02-13 20:30:00'),
(6, 4, 1, 1, 1, 'همدان در یک نگاه', 'Hamedan at a glance', 'همدان في لمحة', NULL, NULL, NULL, NULL, 'همدان در یک نگاه', 'Hamedan at a glance', 'همدان في لمحة', 'همدان خاستگاه تمدن و شهرنشینی', 'Hamedan is the origin of civilization and urbanization', 'همدان هو أصل الحضارة والتحضر', '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(7, 5, 4, 1, 1, 'آداب و رسوم همدان', 'Customs and traditions', 'العادات والتقاليد', NULL, NULL, NULL, NULL, 'آداب و رسوم همدان', 'Customs and traditions', 'العادات والتقاليد', 'تجربه فرهنگ اصیل ایرانی', 'Experience the genuine Iranian culture', 'تجربة الثقافة الإيرانية الحقيقية', '2018-02-14 20:30:00', '2018-02-14 20:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_header_types`
--

CREATE TABLE `tbl_page_header_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `phtType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phtSubject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_page_header_types`
--

INSERT INTO `tbl_page_header_types` (`id`, `phtType`, `phtSubject`, `created_at`, `updated_at`) VALUES
(1, 'ADVANCE', 'هدر صفحه پیشرفته، با عنوان تصاویر و امکان تعویض آن، عنوان هر تصویر در سمت راست صفحه (فارسی) نمایش داده می شود', '2018-02-13 05:21:34', '2018-02-13 05:21:34'),
(2, 'SIMPLE', 'هدر صفحه معمولی بدون امکان تغییر دستی تصاویر، عنوان صفحه و توضیحات آن در وسط هدر نمایش داده می شود', '2018-02-13 05:21:34', '2018-02-13 05:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sections`
--

CREATE TABLE `tbl_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `sPId` int(10) UNSIGNED NOT NULL,
  `sStId` int(10) UNSIGNED NOT NULL,
  `sMmId` int(10) UNSIGNED DEFAULT NULL,
  `sOrder` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `sState` tinyint(1) NOT NULL DEFAULT '1',
  `sLink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sLinkFaTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sLinkEnTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sLinkArTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sFaSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sEnSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sArSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sFaDescription` longtext COLLATE utf8mb4_unicode_ci,
  `sEnDescription` longtext COLLATE utf8mb4_unicode_ci,
  `sArDescription` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_sections`
--

INSERT INTO `tbl_sections` (`id`, `sPId`, `sStId`, `sMmId`, `sOrder`, `sState`, `sLink`, `sLinkFaTitle`, `sLinkEnTitle`, `sLinkArTitle`, `sFaSubject`, `sEnSubject`, `sArSubject`, `sFaDescription`, `sEnDescription`, `sArDescription`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-13 20:30:00', '2018-02-13 20:30:00'),
(2, 3, 6, 1, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-13 20:30:00', '2018-02-13 20:30:00'),
(3, 3, 12, 1, 3, 1, NULL, NULL, NULL, NULL, 'همدان پایتخت تاریخ و تمدن', 'Hamedan Capital of History and Civilization', 'حمدان عاصمة التاريخ والحضارة', '<p>&nbsp;</p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:18px\"><strong>پیشینه تاریخی</strong></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#8a8a8a\">موقعيت استان همدان از نظر اقليمي و طبيعي كه آن را جهت فعاليتهاي كشاورزي و دامداري مناسب نموده از دیرباز سبب شده است كه اين منطقه محل استقرار و نشو و نماي تمدنهاي باستاني باشد .وجود تعداد قابل ملاحظه اي از تپه های باستاني ماقبل تاريخ در نقاط مختلف استان دليل بر اثبات اين مدعا است .نتايج مطالعات و كاوشهاي تپه گيان نهاوند نشان ميدهد كه مردمان ساكن در استان در 6 هزار سال پيش از فرهنگ و تمدن نسبتاً پيش رفته اي برخوردار بوده اند. قديميترين متون سنگ نوشته آشوري همدان را تحت عنوان ٌ آكسيا ٌ به معني شهر كاسيان نام مي برد و اين امر نشان ميدهد كه پيشينه مدنيت مركز استان حداقل به هزاره سوم قبل از ميلاد باز ميگردد. </span></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:right\">&nbsp;</p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:right\"><span style=\"font-size:18px\"><strong>نگاهی به گذشته</strong></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#8a8a8a\">انجام حفاريهاي باستان شناسي در تپه هاي گودين و سگاوي نزديك كنگاور و نيز نوشيجان ملاير گوشه هايي از فرهنگ وتمدن اقوام ماد را در اين زمان بر ما آشكار ساخته است كه از جمله آنها ميتوان به نخستين نمونه هاي خط و نگارش و اشكال اوليه سكه و نخستين مظاهر فرهنگ ديني و معماري ايراني اشاره نمود .براساس آنچه كه هردوت مورخ يوناني نگاشته است مادها در اواخر قرن هشتم <em>ق.م</em> به رهبري شخصي به نام دياكو توانستند به تشكل سياسي ونظامي دست يافته ونخستين دولت مقتدر فلات ايران را پايه گذاري كنند .دياكو شهر همدان را به پايتختي برگزيد وبدستور او استحكامات عظيمي شامل هفت حصار تو در تو كه هركدام به رنگي خاص مزين شده بود ساخته شد .دو حصار مركزي يكي با الواح سيمين وديگري با الواح زرين پوشانيده شد وكاخها وخزاين درون حصار مركزي برپا گرديد ومردم پيرامون اين حصار ها ي هفتگانه منازل خود را برپا داشتند ،اكثر محققين علوم تاريخ وباستان شناسي را عقيده برآن است كه تپه هگمتانه همدان برجا مانده همين استحكامات است .شهر همدان طي 150سال حكومت مادها ،از نعمت وآباداني فراواني برخوردار بود و بعد از انقراض آن دولت هر چند مركزيت نخسيتن را از دست داد ولي بعنوان يكي از سه پايتخت هخامنشيان مورد توجه خاص بود .وجود كتيبه هاي گنجنامه بقاياي ستونهاي سنگي ،كاخهاي هخامنشي ،جامها و الواح زرين وسيمين بدست آمده از همدان مربوط به اين دوره حاكي ازاهميت اين شهر و منطقه در اين زمان است .در سال 330ق.م شهر همدان بدست اسكندر مقدوني ويران گرديد ولي بدليل موقعيت استراتژيك آن تبديل به مقر نظامي او شد .در اواخر دوره سلوكي شهر همدان محل تلاقي وبرخورد متعدد آنان با اشكانيان بود تا اينكه سرانجام در سال 155ق.م مهرداد اشكاني اين شهر را متصرف گرديد . از دوره اشكاني وسلوكي مجسمه شير سنگي وبقاياي يك گورستان در شهر همدان وآثار مختصري از معبد لائوديسه در شهر نهاوند برجاي مانده است .در يك كتابچه به زبان پهلوي بنام شهرها كه در زمان قباد (500ميلادي ) نگاشته شده بناي همدان به يزد گرد اول نسبت داده شده كه اين امر نشان دهنده انجام اقدامات عمراني مهمي در اين زمان در شهر مزبور است .</span></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:right\">&nbsp;</p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:right\"><span style=\"font-size:18px\"><strong>دوران اسلامی همدان</strong></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#8a8a8a\">لشگر اعراب به سال 26 هجري برابر با 645 ميلادي وارد همدان شدند. از اواسط قرن سوم رياست شهر در اخیتار علویان قرار گرفت و بناي ارزشمند گنبد علويان يادگار اين دوره است . در سال 319هجري قمري ،مرداويچ زياري باني آل بويه به قهر بسياري از ساكنان آن را هلاك نمودوشير سنگي معروف را از دروازه هاي شهر به خاك افكند . در سال 345هجري قمري شهر براثر زلزله خسارت فراوان ديد وتشنجات مذهبي نيزدرسال 351هجري قمري جان بسياري از مردم را گرفت .در قرن 4و5كشمكشهاي فراواني بين سلسله هاي حسنويه ،ديلميان ،وكاكويه درهمدان كه يكي از مراكز عمده جنگ وستيز ميان آنها بود رخ داد .همچنين باباطاهر عارف وشاعر وارسته مشهور در اين دوره در شهر همدان مي زيست .در سالهاي 387تا 412 هجري ،شمس الدوله ابو طاهر شاه خسرو ديلمي در همدان حكومت داشت و ابوعلي سينا طبيب و دانشمند بزرگ ايراني در اين شهر منصب وزارت اورا داشت . در اواخر قرن 5 اين شهر پايتخت بوييان جبال بود . تركمانان غز بسال 420همدان را تاراج كردند واز نيمه سده 5تركمانان سلجوقي بر آن چيره گشتند در سده 6 با تجزيه امپراتوري آنها ،همدان پايتخت سلاجقه عراق عجم شد . يورش مغولان (618و621 هجري قمري) بسياري از آباديها وشهرهاي استان از جمله همدان رايكسره دستخوش ويراني ساخت وكثيري از اهالي آن در دفاع قهرمانانه درمقابل سپاه جرار مغول جان باختند .اندكي بعد شهركي در حومه شمالي شهر سابق بنام همدان نو گرفت .در دوره ايلخانيان اين شهر تا حدودي اهميت سابق را باز يافت و در زمان وزارت خواجه رشيدالدين فضل اله همداني (718هجري قمري)شهر همدان مورد توجه خاص بود . ابنيه اسلامي نظير ،استر ومردخاي ،مقبره سابق باباطاهر،امامزاده اظهر ،هود ،حبقوق نبي و... از اين دوره است . در دوره صفويه شهر مجدداً از نعمت آباداني يهره مند گشت ، ايجاد كاروانسراها ،مدارس ،پلها در شهر همدان وديگر نقاط استان از جمله در تويسركان بيانگر توجه صفويان به امر آباداني شهرهاست . در دوره زنديه همدان در دست اميران آن خاندان بود.</span></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>وجه تسمیه</strong></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#8a8a8a\">نام همدان براي اولين بار در سال 1100ق. م در كتيبه تيگلات پليسر اول ،شاه آشور به چشم مي خورد كه آن را <strong>امدانه </strong>يا <strong>همدانا </strong>ذكر كرده است ،ولي در كتيبه هاي عهد هخامنشي آن را <strong>هگمتان </strong>ودر كتاب هردوت يوناني <strong>اكباتان </strong>مي خوانيم .</span></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#8a8a8a\">اسم اصلي اين شهر <strong>هانگ ماتانا </strong>يا <strong>هاكاماتانا </strong>بوده كه معني آن محل اجتماع مي باشد وبه واژه انجمن نزديك است .در تورات <strong>اخمشا </strong>نوشته شده كه مركب است از هاخاي زندي وثاناي پالي كه شعبه اي از زبان سانسكريت است وثانا به معني ستان فارسي است كه محل ومكان باشد واخمثا را به شهر دوستي ومحل دوستي ترجمه كرده اند ، زيرا شاهان ايران در تابستان ،دوستان خود را به اين شهر دعوت مي كردند .اعتماد السلطنه بر اين عقيده بود كه اسم اين شهر همدان بوده ، چه <strong>هم</strong> معني اتفاق و <strong>دان</strong> معني ظرفيت را مي رساند ،يعني مجمع متفقين . </span></span></p>\r\n', '<p><span style=\"font-size:18px\"><strong>Historical Background</strong></span></p>\r\n\r\n<p><span style=\"color:#8a8a8a\">The position of the province of Hamedan, from the natural and climatic point that has made it suitable for agricultural and livestock activities, has long since caused this area to be the location of an ancient civilizations. The presence of a considerable number of ancient hills of prehistoric history in different places The province proves this claim. The results of the studies and excavations of the Gian Nahavand hill show that the people living in the province have enjoyed a relatively advanced civilization and culture for six thousand years. The oldest Ashurdian-styled metaphor of Hamadan is called Asia, which means the city of Kasian, which indicates that the province&#39;s central civilization dates back to at least the third millennium before the Middle Ages.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><strong>Take a look past</strong></span></p>\r\n\r\n<p><span style=\"color:#8a8a8a\">Performing archaeological excavations in the mountains of Godin and the Coghavar near Kangavar, as well as the Nawshijan Malayer, has revealed to us the corners of the culture and culture of the Mother&#39;s tribes at this time, including the first samples of script and coins, and the first forms of coins. The manifestations of Iranian religious culture and architecture. According to what Herodotus wrote to the Greek historian, the Medes, at the end of the eighth century, were led by a person called Diako, who achieved a political and military structure and established the first powerful Iranian state on the Iranian plateau. Hamedan was chosen as the capital and his deputy built a great fortress including your seven fences. You were each made of a special color. The two central fences were covered with Simin and the other plates with golden pillars, and the windows and doors were located inside the central fence. The people around them set up their seven houses, most of the scholars of the history and theology It is believed that the hegematane hill of Hamedan is still the same. The city of Hamedan enjoyed great blessings during the 150 years of the rule of the Medes. After the extinction of the state, though it lost its centrality, but as one of the three Achaemenid capitals Special attention was paid to the presence of Ganjnameh inscriptions on the remnants of stone columns, The last Achaemenid, the cups and tablets of Zarrin and Wimin, obtained from Hamadan in this period, indicate the importance of this city and region at this time. In 330 BC, the city of Hamedan was destroyed by Alexander of Macedonia, but because of its strategic position, it became its military headquarters. At the end of the Solucci period, the city of Hamedan was the site of a confluence and a large number of them with the Parthians, until finally, in 155 AD, Mehrdad Ashkani was annexed to this city. From the period of Oshchani and Wloki there is a stone sculpture and the remains of a cemetery in Hamedan and a brief work of the temple of Laodicea in Nahavand. In a book written in Pahlavi, called Cities, written in the time of Qobad (500 AD), the Hamadan building attributed to the first round of Yazd This indicates that there are significant developmental measures at that time in the city.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><strong>Islamic era of Hamadan</strong></span></p>\r\n\r\n<p><span style=\"color:#8a8a8a\">The Arab armies entered Hamadan by 645 AD in 26 AH. From the middle of the third century, the head of the city was occupied by the Alevites, and the valuable building of the Dome of the Alawites dates back to this period. In the year 319 AH, Mardavich Baniyyyyyh Baniyal Buiyah, by the fury of many of its inhabitants, destroyed a well-known stone gemstone from the gates of the city to the soil. In the year 345 AH, the city suffered great damage due to the earthquake. Religious events also claimed the lives of many people in the 351 AH. In the 4th and 5th centuries, there were numerous conflicts between the Hanawi dynasties, Dilamians, and Kakwahi in Hamadan, one of the main centers of the war between them. Arif and Shahar were famous in this period in the city of Hamedan. Between 387 and 412 AH, Shams al-Dawlah Abu Taher Shah Khosrow Dilami ruled in Hamedan and Abu Ali Sina was the Iranian physician and great scientist in the city. At the end of the 5th century, the city was the capital of Boyuan Jabal. The Turkmen of Ghazi spoiled 420 Hamedans in the last millennium, and since the mid-fifth century, the Seljuk Turks had dominated it. In the 6th century, with the deconstruction of their empire, Hamedan became the capital of Iraqi Salaqiq. The attack on the Mughals (618 and 621 AH) destroyed many of the villages and towns of the province, including the Hamadan Rakeshra, and many of its people died in the heroic defense of the Military Revolutionary Guard Corps of Jerusalem. Next, a town in the northern suburbs of the former city called Hamedan. The city regained somewhat the importance of the former, and at the time of the Khowaja&#39;s ministry, Rashid al-Din Fazlullah Hamedani (718 AH), the city of Hamedan was especially noted. Islamic monument such as Ester and Mardakha, the former tomb of Baba Taher, Imamzadeh Azhar, Hood, Habukhuk, Nabi and ... of this period. In the Safavid period of the city, again, the city was renovated. The creation of caravansaries, schools, bridges in the city of Hamedan and other parts of the province, including in Tuyserkan, indicate the Safavid&#39;s attention to the development of cities. During the Zandieh era, Hamadan was in the hands of its emirs.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><strong>Signing</strong></span></p>\r\n\r\n<p><span style=\"color:#8a8a8a\">Hamedan name for the first time in 1100 AH. In the inscription of the first Plitser&#39;s inscription, the king of Assyria, he has referred to it as a prophet or companion, but in the Achaemenid inscriptions it is Hegmatan and in the Greek Herodotus Book of Ekbatan.<br />\r\nThe main name of this city is the city of Hun Matanah or Hakamatana, which means the community and is close to the name of the association. It is written in the Torah that it is composed of Hakhai Zandi and Palani, which is a branch of Sanskrit, and the name is Persian, where the place And they will translate Wahmahma into a friendship and friendship city because the Iranian kings invited their friends to this city in the summer. Trust al-Saltanah was of the opinion that the name of this city was Hamedan, what does it mean and what meaning means capacity Allied Assembly.</span></p>\r\n', '<p dir=\"rtl\"><strong><span style=\"font-size:18px\">خلفية تاريخية</span></strong><br />\r\n<br />\r\n<span style=\"font-size:14px\"><span style=\"color:#8a8a8a\">وقد تسبب موقف محافظة حمدان، من الناحية الطبيعية والمناخية التي جعلتها مناسبة للأنشطة الزراعية والحيوانية، منذ فترة طويلة في جعل هذه المنطقة موقع حضارات قديمة. وجود عدد كبير من التلال القديمة من التاريخ ما قبل التاريخ في أماكن مختلفة محافظة يثبت هذا الادعاء. وتظهر نتائج الدراسات والحفريات في تلة جيان نهافند أن الناس الذين يعيشون في المحافظة يتمتعون حضارة وثقافة متقدمة نسبيا لمدة ستة آلاف سنة. ويطلق على أقدم استعارة على غرار أشوردية من همدان آسيا، وهو ما يعني مدينة كاسيان، مما يدل على أن الحضارة المركزية في المحافظة يعود إلى ما لا يقل عن الألفية الثالثة قبل العصور الوسطى.</span></span><br />\r\n<br />\r\n&nbsp;<br />\r\n<br />\r\n<strong><span style=\"font-size:18px\">نلقي نظرة الماضي</span></strong><br />\r\n<br />\r\n<span style=\"font-size:14px\"><span style=\"color:#8a8a8a\">وقد كشف لنا حفريات أثرية في جبال غودين و كوغافار بالقرب من كانغافار، فضلا عن نوشيجان مالايير لنا زوايا ثقافة وثقافة قبائل الأم في هذا الوقت، بما في ذلك العينات الأولى من النصي والقطع النقدية، و الأشكال الأولى من القطع النقدية. مظاهر الثقافة الدينية الإيرانية والهندسة المعمارية. وفقا لما كتبه هيرودوت للمؤرخ اليوناني، كان ميديس، في نهاية القرن الثامن، بقيادة شخص يدعى دياكو، الذي حقق هيكلا سياسيا وعسكريا وأنشأ أول دولة إيرانية قوية على الهضبة الإيرانية. تم اختيار حمدان كعاصمة ونائبه بناء قلعة كبيرة بما في ذلك السبائك الخاصة بك سبعة. كنت كل مصنوعة من لون خاص. تم تغطية الأسوار المركزية مع سيمين والألواح الأخرى مع أعمدة ذهبية، وكانت النوافذ والأبواب تقع داخل السياج المركزي. الناس من حولهم أقاموا سبعة منازل، معظم علماء التاريخ واللاهوت ويعتقد أن تلة هيغماتان هامدان لا يزال هو نفسه. تتمتع مدينة هامدان بركات عظيمة خلال 150 عاما من حكم الميديين. بعد انقراض الدولة، على الرغم من أنها فقدت محوريتها، ولكن باعتبارها واحدة من العواصم الأخمينية الثلاث وقد أولي اهتمام خاص لوجود النقوش غانجنامه على بقايا أعمدة حجرية، وآخر الأخمينية، وأكواب وأقراص من زارين و ويمين ، التي تم الحصول عليها من همدان في هذه الفترة، تشير إلى أهمية هذه المدينة والمنطقة في هذا الوقت. في عام 330 قبل الميلاد، دمرت مدينة همدان من قبل ألكسندر مقدونيا، ولكن بسبب موقعها الاستراتيجي، أصبح مقرها العسكري. في نهاية فترة سولوتشي، كانت مدينة همدان موقع التقاء وعدد كبير منهم مع البارثيين، حتى النهاية، في 155 م، مهرداد اشكاني ضم إلى هذه المدينة. من فترة أوشكاني و ولوكي هناك تمثال حجري وبقايا مقبرة في همدان وعمل قصير من معبد لاودتشا في نهافاند. في كتاب مكتوب في بهلوي، يسمى المدن، كتب في وقت كوباد (500 م)، وبناء همدان يعزى إلى الجولة الأولى من يزد وهذا يشير إلى أن هناك تدابير تنموية كبيرة في ذلك الوقت في المدينة.</span></span><br />\r\n<br />\r\n&nbsp;<br />\r\n<br />\r\n<strong><span style=\"font-size:18px\">العصر الإسلامي من همدان</span></strong><br />\r\n<br />\r\n<span style=\"font-size:14px\"><span style=\"color:#8a8a8a\">دخلت الجيوش العربية همدان بحلول عام 645 ميلادية في 26 ه. من منتصف القرن الثالث، كان رئيس المدينة يحتلها أليفيتس، والمبنى القيم لقبة العلويين يعود إلى هذه الفترة. في عام 319 ه، دمر مردفيش بنيية بنيال بوعيا، بسبب غضب العديد من سكانها، الأحجار الكريمة الحجرية المعروفة من بوابات المدينة إلى التربة. في عام 345 ه، عانت المدينة من أضرار جسيمة بسبب الزلزال. وأدت الأحداث الدينية أيضا إلى مقتل العديد من الناس في عام 351 ه. في القرنين الرابع والخامس، كانت هناك صراعات عديدة بين سلالات الحناوي ودلاميان وكاكواهي في همدان، أحد المراكز الرئيسية للحرب بينهما. وكان عارف وشهار مشهورين في هذه الفترة في مدينة همدان. بين 387 و 412 ه، شمس الدولة أبو طاهر شاه خسرو ديلامي حكم في حمدان وأبو علي كان سينا ​​الطبيب الإيراني وعالم عظيم في المدينة. في نهاية القرن الخامس، كانت المدينة عاصمة بويوان جبال. تركمان غازي أفسد 420 حمدان في الألفية الأخيرة، ومنذ منتصف القرن الخامس، سيطرت الأتراك السلاجقة عليها. في القرن السادس، مع تفكيك إمبراطوريتهم، أصبح همدان عاصمة سلاقيق العراقية. ودمر الهجوم على المغول (618 و 621 ه) العديد من القرى والبلدات في المحافظة، بما في ذلك همدان راكيشرا، وكثير من مواطنيها ماتوا في الدفاع البطولي من فيلق الحرس الثوري العسكري في القدس. بعد ذلك، بلدة في الضواحي الشمالية للمدينة السابقة تدعى حمدان. استعادت المدينة إلى حد ما أهمية الأولى، وفي وقت وزارة خواجا، رشيد الدين فضل الله حمداني (718 ه)، مدينة حمدان وأشار بشكل خاص. النصب الإسلامي مثل استر ومارداخا، المقبرة السابقة لبابا طاهر، إمام زادة الأزهر، هود،</span></span></p>\r\n', '2018-02-13 20:30:00', '2018-02-13 20:30:00'),
(4, 4, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(5, 4, 6, 1, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(6, 4, 12, 1, 3, 1, NULL, NULL, NULL, NULL, 'همدان خاستگاه تمدن و شهرنشینی', 'Hamedan is the origin of civilization and urbanization', 'همدان هو أصل الحضارة والتحضر', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>موقعیت طبیعی</strong></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">استان همدان در گستره اي به مساحت 19493 كيلومتر مربع ، در غرب ايران بين 33 درجه و59 دقيقه تا 35درجه و48دقيقه عرض شمالي و47درجه و34دقيقه تا 49درجه و36دقيقه طول شرقي از نصف النهار گیرينويچ قرارگرفته است .<br />\r\nاين استان از شمال به استانهاي زنجان و قزوين ،از جنوب به استان لرستان ،از شرق به استان مركزي واز غرب به استان كرمانشاه وقسمتي از استان كردستان محدود است .</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><br />\r\n<span style=\"font-size:18px\"><strong>ناهمواري ها</strong></span><br />\r\n<span style=\"color:#8a8a8a\">ناهمواري هاي استان در طي دوران زمين شناسي دچار تغييرات زيادي شده است .يكي از عوامل تغيير شكل ناهمواري هاي استان ،آبهاي روان در برخي مناطق با تخريب ارتفاعات وانباشتن مواد درچاله ها ،سبب كاهش ارتفاع كوه ها وپيدايش دشت هاي متعددي شده اند . در برخي مناطق نيز ،شدت عمل آب هاي روان به اندازه اي بوده كه شكل ناهمواري ها را معكوس كرده است ،مثلاً كوه به دره تبديل شده يا دره ي عميق دوره هاي گذشته ،اكنون به صورت كوه در آمده است . كوه خان گرمز در غرب تويسركان نمونه اي جالب از اين پديده است.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><br />\r\n<span style=\"font-size:18px\"><strong>ارتفاعات </strong></span><br />\r\n<span style=\"color:#8a8a8a\">ارتفاعات استان عموماً جهت شمال غربي ـ جنوب شرقي دارند وبه طور كلي در شمال ، مركز وجنوب استان قرارگرفته اند . هر يك از اين ارتفاعات ،شامل بخشي از كوههاي مختلف ايران است .<br />\r\nارتفاعات شمالي - ارتفاعات مياني .( قله ي الوند با ارتفاع 3574 متر از سطح دريا در اين سلسله کوه ها قراردارد)- ارتفاعات جنوبي-&nbsp; كوه هاي پراكنده &nbsp;</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><strong>&nbsp;دشت ها</strong></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">دشت هاي استان از نظر نحوه ي پيدايش به دودسته تراکمی و فرسایشی تقسیم می شوند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><strong>آب وهوا</strong><br />\r\n<span style=\"color:#8a8a8a\">آب وهواي استان به طوركلي تحت تاثير عرض جغرافيايي ، ارتفاع ، مكان ،امتداد كوه ها و فاصله از درياست جابه جايي توده هاي هوا&nbsp; در تعيين نوع آب وهواي هرمنطقه نقش مهمي دارد . توده هاي هوايي كه استان را تحت تاثير قرار مي دهند عبارتند از :<br />\r\nتوده هاي شمالي:اين توده هوا در ماه هاي سرد سال از عرض هاي شمالي كشور حركت مي كند ، هواي استان را تحت تاثير قرار ميدهد&nbsp; وسبب كاهش دما وبارندگي بيشتر به صورت برف مي باشد .<br />\r\nتوده هاي جنوبي : اين توده هوا در ماه هاي گرم سال از عرض هاي جنوبي&nbsp; كشور و منطقه حركت مي كند .استان را تحت تاثير قرارميدهد و موجب افزايش دما وكاهش يا قطع بارندگي مي شود .<br />\r\nتوده هاي غربي:اين توده ها در ماه هاي مرطوب به سال (آبان تا خرداد )از غرب ،جنوب غرب وشمال غرب وارد كشور شده وموجب افزايش نسبي دما وبارندگي در سطح استان مي شود .<br />\r\nبه طور كلي آب وهواي استان در نتيجه وجود كوه هاي مرتفع ، رودخانه ها وچشمه سارهاي فراوان وپرآب وپستي وبلندي هاي زياد،متغير است . بدين ترتيب كه هواي دره هاي شمالي كوه الوند ،سرد وهواي دره هاي بخش مركزي ملايم مي باشد .زمستانهاي&nbsp; اين استان سرد وپربرف وباران وتابستانهاي آن معتدل است .</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><strong>رودخانه ها</strong><br />\r\n<span style=\"color:#8a8a8a\">رودخانه هاي استان ، عموماً از برف وباران فصول مرطوب تغذيه مي شوند ودر فصل تابستان كه گياهان نياز به آب دارند به استثناي يكي دو رود مثل گاماسياب وسيمينه رود ، خشك شده يا به حداقل ميزان آبدهي مي رسند .مهمترين&nbsp; رودهاي استان عبارتند از: سيمينه رود -&nbsp; قره چاي - وايده لو - وفرجين - دره مرادبيگ -&nbsp; سيمين - عباس آباد - خاكو -سرابی-خرم ررود- حرم رود ملایر- گاماسیاب- کرزان رود&nbsp; و &hellip;</span></p>\r\n', '<p><span style=\"font-size:18px\"><strong>Normal position</strong></span><br />\r\n<span style=\"color:#8a8a8a\">The province of Hamedan has an area of ​​19493 square kilometers in the west of Iran between 33 degrees and 59 minutes to 35 degrees and 48 minutes north latitude and 47 degrees 34 minutes to 49 degrees and 36 minutes east of the meridian of Girinvich.<br />\r\nThis province is limited to the provinces of Zanjan and Qazvin, from the south to Lorestan province, from the east to the central province of Vaz west to Kermanshah province and part of Kurdistan province.</span></p>\r\n\r\n<p><br />\r\n<span style=\"font-size:18px\"><strong>Unevenness</strong></span><br />\r\n<span style=\"color:#8a8a8a\">The roughnesses of the province have undergone many changes during the geological period. One of the factors of the unevenness of the province, flowing waters in some areas, with the destruction of heights and the accumulation of materials in the hills, have reduced the height of the mountains and the formation of several plains. In some areas, the intensity of the flowing waters is so large that it has reversed the form of roughness, for example, the mountain has become a valley or the deep valley of past periods has now become mountainous. Kuh Khan Karmas in the west of Tuiskeran is an interesting example of this phenomenon.</span></p>\r\n\r\n<p><br />\r\n<span style=\"font-size:18px\"><strong>High Heights</strong></span><br />\r\n<span style=\"color:#8a8a8a\">The altitudes of the province are generally to the northwest of the southeast and are generally in the north, center and south of the province. Each of these heights is part of the mountains of Iran.<br />\r\nNorth Highlands - Middle Ages (Alvand Peak with a height of 3574 meters above sea level in this mountain range) - Southern Highlands - Scattered Mountains</span><br />\r\n<br />\r\n<span style=\"font-size:18px\"><strong>Plains</strong></span></p>\r\n\r\n<p><span style=\"color:#8a8a8a\">Plains of the province are divided into two types: condensation and erosion.</span></p>\r\n\r\n<p><br />\r\n<span style=\"font-size:18px\"><strong>weather</strong></span><br />\r\n<span style=\"color:#8a8a8a\">The province&#39;s climate is generally influenced by the latitude, altitude, location, mountain range and distance from the sea of ​​air masses in determining the type of climate in each region. Air masses affecting the province include:<br />\r\nNorth masses: This air mass in cold months is moving from northern latitudes of the country, affecting the province&#39;s air and due to lower temperature and more fluidity in the form of snow.<br />\r\nSouthern masses: This air mass in hot months is moving from the southern latitudes of the country and the region. It affects the country and increases the temperature and decreases or disrupts precipitation.<br />\r\nWestern masses: These masses enter the country during the wet months to the year (from November to June) from the west, southwest, and northwest, due to the relative increase of temperature and intensity in the province.<br />\r\nIn general, the province&#39;s climate varies due to the presence of high mountains, rivers, and large springs of water and water, and many rivers. Thus, the air of the northern valleys of Alvand Mountains is cold and the valleys of the central part of the mild climate. Temperatures in this province are cold and windy, and its forests are temperate.<br />\r\nrivers<br />\r\nThe rivers of the province are generally fed by snow and wet seasons, and in summer, plants require water, with the exception of one or two rivers such as Gamasiab and Vizhimoroud, dry or at least discharge. The main intestines of the province are: Siminrood - Gharacheh - Wideh-le-And-Fargin - Valley of Muradbig - Simin - Abbas Abad - Khakoo-Sarabi-Khorram Rroud - Hram-e-Rud Malayer-Gamasiab-Karzan-e Rud and ...</span></p>\r\n', NULL, '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(7, 4, 13, 1, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(8, 5, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(9, 5, 6, 1, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-14 20:30:00', '2018-02-14 20:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_section_imgs`
--

CREATE TABLE `tbl_section_imgs` (
  `id` int(10) UNSIGNED NOT NULL,
  `siSId` int(10) UNSIGNED NOT NULL,
  `siGId` int(10) UNSIGNED NOT NULL,
  `siOrder` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `siState` tinyint(1) NOT NULL DEFAULT '1',
  `siLink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siFaAlt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siEnAlt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siArAlt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siFaSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siEnSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siArSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siFaDescription` longtext COLLATE utf8mb4_unicode_ci,
  `siEnDescription` longtext COLLATE utf8mb4_unicode_ci,
  `siArDescription` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_section_imgs`
--

INSERT INTO `tbl_section_imgs` (`id`, `siSId`, `siGId`, `siOrder`, `siState`, `siLink`, `siFaAlt`, `siEnAlt`, `siArAlt`, `siFaSubject`, `siEnSubject`, `siArSubject`, `siFaDescription`, `siEnDescription`, `siArDescription`, `created_at`, `updated_at`) VALUES
(1, 7, 7, 1, 1, NULL, 'جاده همدان به تویسرکان', 'Hamadan Road to Tuyserkan', 'طريق همدان إلى توسيركان', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(2, 7, 8, 2, 1, NULL, 'روستای سنجوزان', 'Sanjuzan village', 'سنجوزان القریه', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(3, 7, 9, 1, 1, NULL, 'میدان امام همدان', 'Hamedan Imam Square', 'ميدان حمدان الإمام', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(4, 7, 10, 1, 1, NULL, 'حیات وحش همدان', 'The Life of Hamdan', 'الحياة البرية في همدان', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-14 20:30:00', '2018-02-14 20:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_section_types`
--

CREATE TABLE `tbl_section_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `stType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stSubject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_section_types`
--

INSERT INTO `tbl_section_types` (`id`, `stType`, `stSubject`, `created_at`, `updated_at`) VALUES
(1, 'SUB_MENU', 'زیر منو - محل قرارگیری زیر هدر صفحه', '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(2, 'CONTENT_LEFT', 'بخش محتوای دارای تصویر - تصویر بزرگتر سمت چپ', '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(3, 'CONTENT_IMAGE_SLIDER', 'گالری تصاویر', '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(4, 'CONTENT_WIDE_SLIDER', 'گالری تصاویر تصاویر تمام صفحه', '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(5, 'SECTION_SPLITTER', 'جدا کننده بخش ها', '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(6, 'BREAD_CRUMB', 'مشخص کننده وضعیت صفحه', '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(7, 'CONTENT_VIDEO', 'گالری ویدیو', '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(8, 'CONTENT_SPONSOR', 'اسلایدر معرفی اسپانسرها', '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(9, 'CONTENT_IMAGE_RIGHT_TEXT_LEFT', 'تصویر در سمت راست و متن مربوطه در سمت چپ', '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(10, 'CONTENT_IMAGE_LEFT_TEXT_RIGHT', 'تصویر در سمت چپ و متن در سمت راست', '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(11, 'CONTENT_IMAGE_TOP_FADE', 'تصویر تمام صفحه، بالای تصویر محو شده', '2018-02-13 05:21:34', '2018-02-13 05:21:34'),
(12, 'CONTENT_TEXT', 'استفاده برای صفحه های info', '2018-02-13 05:21:34', '2018-02-13 05:21:34'),
(13, 'FOUR_IMAGE_GALLERY', 'چهار تصویر در کنار هم بدون متن', '2018-02-14 20:30:00', '2018-02-14 20:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_section_videos`
--

CREATE TABLE `tbl_section_videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `svSId` int(10) UNSIGNED NOT NULL,
  `svVgId` int(10) UNSIGNED NOT NULL,
  `svOrder` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `svState` tinyint(1) NOT NULL DEFAULT '1',
  `svFaSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `svEnSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `svArSubject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `svFaDescription` longtext COLLATE utf8mb4_unicode_ci,
  `svEnDescription` longtext COLLATE utf8mb4_unicode_ci,
  `svArDescription` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sponsors`
--

CREATE TABLE `tbl_sponsors` (
  `id` int(10) UNSIGNED NOT NULL,
  `sFaSubject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sEnSubject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sArSubject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sPath` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sState` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_menus`
--

CREATE TABLE `tbl_sub_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `smOrder` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `smMmId` int(10) UNSIGNED NOT NULL,
  `smFaSubject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smEnSubject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smArSubject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smPageLink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smState` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_sub_menus`
--

INSERT INTO `tbl_sub_menus` (`id`, `smOrder`, `smMmId`, `smFaSubject`, `smEnSubject`, `smArSubject`, `smPageLink`, `smState`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'جاذبه ها', 'Attraction', 'جاذبیه', '', 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(2, 2, 1, 'تاریخچه', 'History', 'تاریخ', '/page/hamedan/history', 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(3, 6, 1, 'مشاهیر', 'celebrities', 'المشاهير', NULL, 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(4, 5, 1, 'آداب و رسوم', 'Culture', 'ثقافة', '/page/hamedan/customs-and-traditions', 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(5, 4, 3, 'تفریحی و گردشگری', 'Recreation and tourism', 'الترفيه والسياحة', NULL, 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(6, 8, 3, 'علمی و ورزشی', 'Scientific and sports', 'العلمية والرياضية', NULL, 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(7, 7, 3, 'جشنواره های بومی', 'Native festivals', 'المهرجانات المحلية', NULL, 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(8, 1, 1, 'همدان در یک نگاه', 'Hamedan at a glance', 'همدان في لمحة', '/page/hamedan/hemedan-at-a-glance', 1, '2018-02-14 20:30:00', '2018-02-14 20:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video_gallery`
--

CREATE TABLE `tbl_video_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `gPath` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gFaLocation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gFaEditor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gEnLocation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gEnEditor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gArLocation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gArEditor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gPosterPath` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_advertises`
--
ALTER TABLE `tbl_advertises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_advertises_agid_foreign` (`aGId`);

--
-- Indexes for table `tbl_image_gallery`
--
ALTER TABLE `tbl_image_gallery`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_image_gallery_gpath_unique` (`gPath`);

--
-- Indexes for table `tbl_main_menus`
--
ALTER TABLE `tbl_main_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news_img`
--
ALTER TABLE `tbl_news_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_news_img_nigid_foreign` (`niGId`),
  ADD KEY `tbl_news_img_ninid_foreign` (`niNId`);

--
-- Indexes for table `tbl_news_slider`
--
ALTER TABLE `tbl_news_slider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_news_slider_nsgid_foreign` (`nsGId`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_pages_plinkurl_unique` (`pLinkUrl`),
  ADD KEY `tbl_pages_pmmid_foreign` (`pMmId`),
  ADD KEY `tbl_pages_psmid_foreign` (`pSmId`),
  ADD KEY `tbl_pages_pphtid_foreign` (`pPhtId`);

--
-- Indexes for table `tbl_page_breadcrumbs`
--
ALTER TABLE `tbl_page_breadcrumbs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_page_breadcrumbs_pbpid_foreign` (`pbPId`),
  ADD KEY `tbl_page_breadcrumbs_pbppid_foreign` (`pbPPId`);

--
-- Indexes for table `tbl_page_header_img`
--
ALTER TABLE `tbl_page_header_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_page_header_img_phipid_foreign` (`phiPId`),
  ADD KEY `tbl_page_header_img_phigid_foreign` (`phiGId`);

--
-- Indexes for table `tbl_page_header_types`
--
ALTER TABLE `tbl_page_header_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_page_header_types_phttype_unique` (`phtType`);

--
-- Indexes for table `tbl_sections`
--
ALTER TABLE `tbl_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_sections_spid_foreign` (`sPId`),
  ADD KEY `tbl_sections_sstid_foreign` (`sStId`),
  ADD KEY `tbl_sections_smmid_foreign` (`sMmId`);

--
-- Indexes for table `tbl_section_imgs`
--
ALTER TABLE `tbl_section_imgs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_section_imgs_silink_unique` (`siLink`),
  ADD KEY `tbl_section_imgs_sisid_foreign` (`siSId`),
  ADD KEY `tbl_section_imgs_sigid_foreign` (`siGId`);

--
-- Indexes for table `tbl_section_types`
--
ALTER TABLE `tbl_section_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_section_types_sttype_unique` (`stType`);

--
-- Indexes for table `tbl_section_videos`
--
ALTER TABLE `tbl_section_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_section_videos_svsid_foreign` (`svSId`),
  ADD KEY `tbl_section_videos_svvgid_foreign` (`svVgId`);

--
-- Indexes for table `tbl_sponsors`
--
ALTER TABLE `tbl_sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sub_menus`
--
ALTER TABLE `tbl_sub_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_sub_menus_smmmid_foreign` (`smMmId`);

--
-- Indexes for table `tbl_video_gallery`
--
ALTER TABLE `tbl_video_gallery`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_video_gallery_gpath_unique` (`gPath`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_advertises`
--
ALTER TABLE `tbl_advertises`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_image_gallery`
--
ALTER TABLE `tbl_image_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_main_menus`
--
ALTER TABLE `tbl_main_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_news_img`
--
ALTER TABLE `tbl_news_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_news_slider`
--
ALTER TABLE `tbl_news_slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_page_breadcrumbs`
--
ALTER TABLE `tbl_page_breadcrumbs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_page_header_img`
--
ALTER TABLE `tbl_page_header_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_page_header_types`
--
ALTER TABLE `tbl_page_header_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_sections`
--
ALTER TABLE `tbl_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_section_imgs`
--
ALTER TABLE `tbl_section_imgs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_section_types`
--
ALTER TABLE `tbl_section_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_section_videos`
--
ALTER TABLE `tbl_section_videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_sponsors`
--
ALTER TABLE `tbl_sponsors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_sub_menus`
--
ALTER TABLE `tbl_sub_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_video_gallery`
--
ALTER TABLE `tbl_video_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_advertises`
--
ALTER TABLE `tbl_advertises`
  ADD CONSTRAINT `tbl_advertises_agid_foreign` FOREIGN KEY (`aGId`) REFERENCES `tbl_image_gallery` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_news_img`
--
ALTER TABLE `tbl_news_img`
  ADD CONSTRAINT `tbl_news_img_nigid_foreign` FOREIGN KEY (`niGId`) REFERENCES `tbl_image_gallery` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_news_img_ninid_foreign` FOREIGN KEY (`niNId`) REFERENCES `tbl_news` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_news_slider`
--
ALTER TABLE `tbl_news_slider`
  ADD CONSTRAINT `tbl_news_slider_nsgid_foreign` FOREIGN KEY (`nsGId`) REFERENCES `tbl_image_gallery` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD CONSTRAINT `tbl_pages_pmmid_foreign` FOREIGN KEY (`pMmId`) REFERENCES `tbl_main_menus` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pages_pphtid_foreign` FOREIGN KEY (`pPhtId`) REFERENCES `tbl_page_header_types` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pages_psmid_foreign` FOREIGN KEY (`pSmId`) REFERENCES `tbl_sub_menus` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_page_breadcrumbs`
--
ALTER TABLE `tbl_page_breadcrumbs`
  ADD CONSTRAINT `tbl_page_breadcrumbs_pbpid_foreign` FOREIGN KEY (`pbPId`) REFERENCES `tbl_pages` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_page_breadcrumbs_pbppid_foreign` FOREIGN KEY (`pbPPId`) REFERENCES `tbl_pages` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_page_header_img`
--
ALTER TABLE `tbl_page_header_img`
  ADD CONSTRAINT `tbl_page_header_img_phigid_foreign` FOREIGN KEY (`phiGId`) REFERENCES `tbl_image_gallery` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_page_header_img_phipid_foreign` FOREIGN KEY (`phiPId`) REFERENCES `tbl_pages` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_sections`
--
ALTER TABLE `tbl_sections`
  ADD CONSTRAINT `tbl_sections_smmid_foreign` FOREIGN KEY (`sMmId`) REFERENCES `tbl_main_menus` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_sections_spid_foreign` FOREIGN KEY (`sPId`) REFERENCES `tbl_pages` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_sections_sstid_foreign` FOREIGN KEY (`sStId`) REFERENCES `tbl_section_types` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_section_imgs`
--
ALTER TABLE `tbl_section_imgs`
  ADD CONSTRAINT `tbl_section_imgs_sigid_foreign` FOREIGN KEY (`siGId`) REFERENCES `tbl_image_gallery` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_section_imgs_sisid_foreign` FOREIGN KEY (`siSId`) REFERENCES `tbl_sections` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_section_videos`
--
ALTER TABLE `tbl_section_videos`
  ADD CONSTRAINT `tbl_section_videos_svsid_foreign` FOREIGN KEY (`svSId`) REFERENCES `tbl_sections` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_section_videos_svvgid_foreign` FOREIGN KEY (`svVgId`) REFERENCES `tbl_video_gallery` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_sub_menus`
--
ALTER TABLE `tbl_sub_menus`
  ADD CONSTRAINT `tbl_sub_menus_smmmid_foreign` FOREIGN KEY (`smMmId`) REFERENCES `tbl_main_menus` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
