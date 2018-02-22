-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2018 at 07:01 AM
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
(6, 'pic/gallery/header/header_4.jpg', 'کوه الوند', 'مصطفی اسدبیگی', 'Mount Alvand', 'Mostafa Asadbeygi', 'جبل الوند', 'مصطفی اسدبیگی', '2018-02-12 20:30:00', '2018-02-12 20:30:00');

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
(1, 1, 'همدان', 'Hamedan', 'همدان', '/page/hamadan/history', 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
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
(2, NULL, NULL, 1, 'همدان ۲۰۱۸', 'Hamadan 2018', 'همدان 2018', 'همدان ۲۰۱۸', 'Hamadan 2018', 'همدان 2018', '/', NULL, NULL, NULL, '2018-02-12 20:30:00', '2018-02-12 20:30:00');

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

INSERT INTO `tbl_page_header_img` (`id`, `phiPId`, `phiGId`, `phiOrder`, `phiState`, `phiFaAlt`, `phiEnAlt`, `phiArAlt`, `phiFaSubject`, `phiEnSubject`, `phiArSubject`, `phiFaDescription`, `phiEnDescription`, `phiArDescription`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 1, 'طبعیت چهار فصل', 'Four Seasons Nature', 'فور سيزونز الطبيعة', 'طبعیت چهار فصل', 'Four Seasons Nature', 'فور سيزونز الطبيعة', 'تجربه آرامش در چهار فصل', 'Experience the calm in four seasons', 'تجربة الهدوء في أربعة مواسم', '2018-02-12 20:30:00', '2018-02-12 20:30:00'),
(2, 2, 4, 1, 1, 'تجربه فرهنگ اصیل ایرانی', 'Experience the genuine Iranian culture', 'تجربة الثقافة الإيرانية الحقيقية', 'تجربه فرهنگ اصیل ایرانی', 'Experience the genuine Iranian culture', 'تجربة الثقافة الإيرانية الحقيقية', 'در اقامتگاه های بوم گردی میزبان شما هستیم', 'We are at your homesteads', 'نحن في بيوتكم', '2018-02-12 20:30:00', '2018-02-12 20:30:00'),
(3, 2, 5, 1, 1, 'سفر به اعماق تاریخ', 'A trip to the depths of history', 'رحلة إلى أعماق التاريخ', 'همدان پایتخت تاریخ و تمدن', 'A trip to the depths of history', 'رحلة إلى أعماق التاريخ', 'همدان پایتخت تاریخ و تمدن', 'Hamedan Capital of History and Civilization', 'حمدان عاصمة التاريخ والحضارة', '2018-02-12 20:30:00', '2018-02-12 20:30:00'),
(4, 2, 6, 1, 1, 'زمستان، شادی و هیجان', 'Winter, joy and excitement', 'الشتاء، الفرح والإثارة', 'شکوه الوند', 'Alvand\'s glory', 'مجد الوند', 'زمستان، شادی و هیجان', 'Winter, joy and excitement', 'الشتاء، الفرح والإثارة', '2018-02-12 20:30:00', '2018-02-12 20:30:00');

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
(12, 'CONTENT_TEXT', 'استفاده برای صفحه های info', '2018-02-13 05:21:34', '2018-02-13 05:21:34');

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
(1, 1, 1, 'جاذبه ها', 'Attraction', 'جاذبیه', '/page/hamadan/history', 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(2, 1, 1, 'تاریخچه', 'History', 'تاریخ', NULL, 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(3, 1, 1, 'مشاهیر', 'celebrities', 'المشاهير', NULL, 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(4, 1, 1, 'آداب و رسوم', 'Culture', 'ثقافة', NULL, 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(5, 1, 3, 'تفریحی و گردشگری', 'Recreation and tourism', 'الترفيه والسياحة', NULL, 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(6, 1, 3, 'علمی و ورزشی', 'Scientific and sports', 'العلمية والرياضية', NULL, 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(7, 1, 3, 'جشنواره های بومی', 'Native festivals', 'المهرجانات المحلية', NULL, 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_page_breadcrumbs`
--
ALTER TABLE `tbl_page_breadcrumbs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_page_header_img`
--
ALTER TABLE `tbl_page_header_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_page_header_types`
--
ALTER TABLE `tbl_page_header_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_sections`
--
ALTER TABLE `tbl_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_section_imgs`
--
ALTER TABLE `tbl_section_imgs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_section_types`
--
ALTER TABLE `tbl_section_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
