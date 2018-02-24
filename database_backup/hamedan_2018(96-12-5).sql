-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2018 at 12:31 PM
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

--
-- Dumping data for table `tbl_advertises`
--

INSERT INTO `tbl_advertises` (`id`, `aGId`, `aState`, `aLink`, `aLinkFaTitle`, `aLinkEnTitle`, `aLinkArTitle`, `aFaAlt`, `aEnAlt`, `aArAlt`, `aFaSubject`, `aEnSubject`, `aArSubject`, `aFaDescription`, `aEnDescription`, `aArDescription`, `created_at`, `updated_at`) VALUES
(1, 22, 1, NULL, 'بیشتر', 'Read More', 'اکثر', 'تبلیغت ۲۰۱۸', 'تبلیغت ۲۰۱۸', 'تبلیغت ۲۰۱۸', 'نشست UNWTO', 'UNWTO leak', 'تسرب الأمم المتحدة', NULL, NULL, NULL, '2018-02-17 20:30:00', '2018-02-17 20:30:00');

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
(10, 'pic/gallery/lan_4.jpg', NULL, 'مصطفی اسدبیگی', NULL, 'Mostafa Asadbeygi', NULL, 'مصطفی اسدبیگی', '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(11, 'pic/gallery/header/poster_1.jpg', NULL, 'فردین چهاردولی', NULL, 'F.Chardowli', NULL, 'فردین چهاردولی', '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(12, 'pic/gallery/header/acd_1.jpg', 'نشت ACD', '', 'ACD leak', '', 'ACD الجمعية', '', '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(13, 'pic/gallery/lan_5.jpg', NULL, 'فردین چهاردولی', NULL, 'F.chardowli', NULL, 'فردین چهاردولی', '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(14, 'pic/gallery/news/n_1.jpg', NULL, 'رجبی', NULL, 'Rajabi', NULL, 'رجبی', '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(15, 'pic/gallery/lan_9.jpg', 'لالجین', 'عباس عرب زاده', 'lalejin', 'Abbas Arabzade', 'لالجین', 'عباس عرب زاده', '2018-02-17 20:30:00', '2018-02-17 20:30:00'),
(16, 'pic/gallery/lan_6.jpg', 'ملایر - مانیزان', 'عباس ونایی', 'Malayer - Manizan', 'Abbas Vanaee', 'ملایر - مانیزان', 'عباس ونایی', '2018-02-17 20:30:00', '2018-02-17 20:30:00'),
(17, 'pic/gallery/lan_7.jpg', 'پیست موتور سواری همدان', 'مصطفی اسدبیگی', 'Hamedan motorcycle ride', 'Mostafa AssadBeygi', 'همدان ركوب الدراجات النارية', 'مصطفی اسدبیگی', '2018-02-17 20:30:00', '2018-02-17 20:30:00'),
(18, 'pic/gallery/lan_8.jpg', 'آرامگاه بوعلی سینا', 'فردین چهاردولی', 'Abu Ali Sina tomb', 'F.chardowli', 'ضريح بو علي سينا', 'فردین چهاردولی', '2018-02-17 20:30:00', '2018-02-17 20:30:00'),
(19, 'pic/gallery/lan_10.jpg', 'بازار همدان', 'فردین چهاردولی', 'Hamedan market', 'F.chardowli', 'همدان السوق', 'فردین چهاردولی', '2018-02-17 20:30:00', '2018-02-17 20:30:00'),
(20, 'pic/gallery/lan_11.jpg', 'غارعلیصدر', 'مصطفی اسدبیگی', 'Aliasdar Cave', 'Mostafa Asadbeigi', 'كهف إلياسدار', 'مصطفی اسدبیگی', '2018-02-17 20:30:00', '2018-02-17 20:30:00'),
(21, 'pic/gallery/news/n_2.jpg', NULL, 'خبرگزاری', NULL, 'News agency', NULL, 'وكالة الأنباء', '2018-02-17 20:30:00', '2018-02-17 20:30:00'),
(22, 'pic/gallery/advertise/a_1.jpg', 'UN', '', 'UN', '', 'UN', '', '2018-02-17 20:30:00', '2018-02-17 20:30:00'),
(23, 'pic/gallery/lan_12.jpg', 'موزه لطفعلیان', 'فردین چهاردولی', 'The house of Lafaliyan', 'F.Chardowli', 'بیت لطفعلیان', 'فردین چهاردولی', '2018-02-18 20:30:00', '2018-02-18 20:30:00'),
(24, 'pic/gallery/lan_13.jpg', 'مسجد جامع همدان', 'مصطفی اسدبیگی', 'Mosque of Hamedan', 'Mostafa Asadbeygi', 'مسجد جامع همدان', 'مصطفی اسدبیگی', '2018-02-20 20:30:00', '2018-02-20 20:30:00'),
(25, 'pic/gallery/lan_14.jpg', 'آرامگاه باباطاهر', 'فردین چهاردولی', 'Tomb of Babtafar', 'F.Chardowli', 'قبر باباطاهر', 'فردین چهاردولی', '2018-02-20 20:30:00', '2018-02-20 20:30:00'),
(26, 'pic/gallery/lan_15.jpg', 'شیر سنگی', 'فردین چهاردولی', 'stone lion', 'F.Chardowli', 'حجر أسد', 'فردین چهاردولی', '2018-02-20 20:30:00', '2018-02-20 20:30:00'),
(27, 'pic/gallery/lan_16.jpg', 'حمام حاج آقا تراب', 'فردین چهاردولی', 'Bath Haj Ata Torab', 'F.Chardowli', 'حمام حاج آقا تراب', 'فردین چهاردولی', '2018-02-20 20:30:00', '2018-02-20 20:30:00'),
(28, 'pic/gallery/lan_18.jpg', 'آرامگاه بوعلی سینا', 'فردین چهاردولی', 'Abu Ali Sina tomb', 'F.Chardowli', 'ضريح بو علي سينا', 'فردین چهاردولی', '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(29, 'pic/gallery/lan_19.jpg', 'لالجین', '--', 'Lalejin', '--', 'لالجین', '--', '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(30, 'pic/gallery/lan_20.jpg', 'ملایر - مانیزان', 'فردین چهاردولی', 'Malayer - Manizan', 'F.Chardowli', 'ملایر - مانیزان', 'فردین چهاردولی', '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(31, 'pic/gallery/lan_21.jpg', 'ملایر - مانیزان', 'فردین چهاردولی', 'Malayer - Manizan', 'F.Chardowli', 'ملایر - مانیزان', 'فردین چهاردولی', '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(32, 'pic/gallery/lan_22.jpg', 'ملایر - مانیزان', 'فردین چهاردولی', 'Malayer - Manizan', 'F.Chardowli', 'ملایر - مانیزان', 'فردین چهاردولی', '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(33, 'pic/gallery/lan_23.jpg', 'ملایر - مانیزان', 'فردین چهاردولی', 'Malayer - Manizan', 'F.Chardowli', 'ملایر - مانیزان', 'فردین چهاردولی', '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(34, 'pic/gallery/lan_24.jpg', 'ملایر - مانیزان', 'فردین چهاردولی', 'Malayer - Manizan', 'F.Chardowli', 'ملایر - مانیزان', 'فردین چهاردولی', '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(35, 'pic/gallery/lan_25.jpg', 'اجلاس سران ACD', 'خبر گزاری', 'ACD Summit', 'News', 'أسد ACD', 'وكالة', '2018-02-23 20:30:00', '2018-02-23 20:30:00');

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
(3, 1, 'رویدادها', 'Events', 'أحداث', '/page/event/international', 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(4, 4, 'همدان ۲۰۱۸', 'Hamedan 2018', 'همدان ۲۰۱۸', '/page/hamedan-2018/introduction', 1, '2018-02-16 20:30:00', '2018-02-16 20:30:00');

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

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `nViewedCount`, `nFaSubject`, `nEnSubject`, `nArSubject`, `nFaBriefDescription`, `nEnBriefDescription`, `nArBriefDescription`, `nFaDescription`, `nEnDescription`, `nArDescription`, `nState`, `created_at`, `updated_at`) VALUES
(1, 7, 'لوگوی همدان ۲۰۱۸ رونمایی شد', 'Hamadan logo was unveiled in 2018', 'تم الكشف عن شعار حمادان في عام 2018', 'به گزارش روابط عمومی صدا و سیمای مرکز همدان لوگوی همدان ۲۰۱۸ در برنامه تلویزونی با حضور حاجی بابایی نماینده مردم همدان ، صوفی شهردار ، مالمیر رئیس سازمان میراث فرهنگی و عراقی معاون استاندار همدان رونمایی شد.\r\n', 'According to the Hamedan Broadcasting Public Relations Department, the Hamadan logo of 2018 in the TV program with the presence of Haji Babayi, the representative of the people of Hamedan, Mayor of Sufi, Malmir, the head of the Iraqi Cultural Heritage and Iraqi Deputy Commander-in-Chief, Hamedan, was unveiled.', 'ووفقا لدائرة همدان للإعلام والعلاقات العامة، فإن شعار همدان لعام 2018 في البرنامج التلفزيوني بحضور الحاج باباي، ممثل شعب همدان، عمدة الصوفية، مالمير، رئيس التراث الثقافي العراقي ونائب القائد العراقي رئيس مجلس الوزراء، حامدان.', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">به گزارش روابط عمومی صدا و سیمای مرکز همدان لوگوی همدان ۲۰۱۸ در برنامه تلویزونی با حضور حاجی بابایی نماینده مردم همدان ، صوفی شهردار ، مالمیر رئیس سازمان میراث فرهنگی و عراقی معاون استاندار همدان رونمایی شد. در این برنامه حاجی بابایی نماینده مردم همدان از صدا و سیما به عنوان یاری دیرین در ارتقاء فرهنگ و تمدن استان همدان نام برد و افزود: همدان پایتخت گردشگری آسیا در سال ۲۰۱۸ میزبان دو رویداد مهم است تا از این طریق خود را به عنوان مقصد گردشگری دنیا معرفی کند که رسانه ملی و استانی گام مهمی را در این حرکت بین المللی خواهد داشت. در ادامه مالمیر گفت:سال ۲۰۱۸ همدان میزبان فاز اول اجلاس وزرای گردشگری کشورهای آسیایی خواهد بود و در همین سال اجلاس دوره&zwnj;ای سازمان جهانی گردشگری UNWTO قرار است در همدان برگزار شود به طوری که این دو رویداد به عنوان فرصتی برای تبلیغ ظرفیت&zwnj;های گردشگری استان فراهم شده و لازم است ارگان&zwnj;های دولتی و خصوصی اهمیت و ارزش آن را دریابند و در جهت تبلیغ و معرفی جاذبه&zwnj;های گردشگری استان همدان به جهان تلاش کنند.وی در ادامه گفت: در این رویداد مهم نقش صدا و سیما بسیار پر اهمیت خواهد بود.</span></p>', '<p style=\"text-align:justify\"><span style=\"color:#8a8a8a\">According to the Hamedan Broadcasting Public Relations Department, the Hamadan logo of 2018 in the TV program with the presence of Haji Babayi, the representative of the people of Hamedan, Mayor of Sufi, Malmir, the head of the Iraqi Cultural Heritage and Iraqi Deputy Commander-in-Chief, Hamedan, was unveiled. In this program, Haji Babayi, a representative of the Hamedan people from the Voice and Television as a long-standing helper in promoting the culture and civilization of the province of Hamedan, added: &quot;Hamadan, the capital of Asia&#39;s tourism in 2018, hosts two important events, thus establishing itself as a tourist destination The world introduces the national and provincial media as an important step in this international movement. In 2018 Hamedan will host the first phase of the Asian Tourism Ministers&#39; Meeting, and this year, the UNWTO World Tourism Organization&#39;s round-table meeting is scheduled to take place in Hamadan so that these two events will be presented as an opportunity to promote the tourism capacity of the province. And it is necessary for public and private organizations to recognize the importance and value of it and to promote and introduce the tourist attractions of the province of Hamedan to the world. He continued: In this important event, the role of sound and television will be very important.</span></p>\r\n', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">وفقا لدائرة همدان للإعلام والعلاقات العامة، فإن شعار همدان لعام 2018 في البرنامج التلفزيوني بحضور الحاج باباي، ممثل شعب همدان، عمدة الصوفية، مالمير، رئيس التراث الثقافي العراقي ونائب القائد العراقي رئيس مجلس الوزراء، حامدان. في هذا البرنامج، قال الحاج باباي، ممثل عن شعب همدان من صوت وتلفزيون كمساعد منذ فترة طويلة في تعزيز ثقافة وحضارة مقاطعة حمدان: &quot;همدان، عاصمة السياحة في آسيا في عام 2018، تستضيف ومن ثم إقامة نفسها كوجهة سياحية يقدم العالم وسائل اإلعالم الوطنية واإلقليمية كخطوة مهمة في هذه الحركة الدولية، وفي عام 2018 سوف يستضيف همدان المرحلة األولى من اجتماع وزراء السياحة اآلسيويين، وهذه السنة، ومن المقرر عقد اجتماع المائدة المستديرة لمنظمة السياحة العالمية في همدان بحيث يتم عرض هذين الحدثين كفرصة لتعزيز القدرة السياحية للمقاطعة، ومن الضروري للمنظمات العامة والخاصة أن تعترف بأهمية وقيمة وذلك لتعزيز وإدخال مناطق الجذب السياحي في محافظة هامدان إلى العالم، واستمر: في هذا الحدث الهام، ودور الصوت و تي سوف ليفيسيون تكون مهمة جدا.</span></p>\r\n', 1, '2018-02-16 20:30:00', '2018-02-24 06:40:55'),
(2, 9, 'نوروز سال 1397 با محوریت رويدادهاي همدان 2018', 'Nowruz 1397, focusing on the events of Hamadan, 2018', 'نوروز 1397، مع التركيز على أحداث همدان، 2018', 'برنامه‌های نوروزی امسال با محوریت همدان 2018 و رویدادهای بین‌المللی آسیایی در همدان برگزار می‌شود\r\nمدیرکل میراث فرهنگی، صنایع‌دستی و گردشگری استان همدان در ستاد خدمات سفر استان همدان با اشاره به شركت همه ساله همدان در نمایشگاه بین‌المللی گردشگری تهران ، گفت : در این نمایشگاه میراث فرهنگی، شهرداري و بخش خصوصی حضور داشتند.\r\nعلي مالمير با بیان اینکه کودکان عناصر مهم و تأثیرگذار برای تصمیم‌گیری خانواده‌ها در انتخاب مقاصد سفر هستند، تأکید کرد: با سرمایه‌گذاری اندک در این زمینه می‌توانیم جاذبه‌های خوبي را برای کودکان ایجاد کنیم.\r\nوی با بیان اینکه هرساله به استان همدان در سالن 38 غرفه‌ای تخصیص می‌یافت، افزود: امسال برای استان همدان سالنی مجزا و در یک هزار و 800 مترمربع در نظر گرفته شدكه در این سالن علاوه بر تبلیغ رویدادهای همدان 2018 و جاذبه‌های گردشگری، همدان با سرفصل و عنوان همدان مقصد گردشگری کودک و خانواده حضور داشت که این امر برای اولین بار در نمایشگاه بین‌المللی تهران اتفاق ‌افتاد.\r\nاين مقام مسئول با اشاره به اینکه در سالن همدان در نمایشگاه بین‌المللی گردشگری غرفه باستان‌شناسی کودک دایر بود که همین ایده سبب شد تا کارگاه باستان شناسی کودک را در محوطه هگمتانه ایجاد کنیم، ابراز کرد: غرفه سفالگری کودکان از دیگر بخش‌های سالن همدان در نمایشگاه گردشگری تهران بود.كه با استقبال خانواده ها همراه بودو امسال جمعیت خانوارهای بازدیدکننده از نمایشگاه تا سه برابر افزایش‌یافته بود و رویکرد مثبت سالن همدان در نمایشگاه گردشگری و پخش مستقیم برنامه‌های سالن همدان در صداوسیما از جمله دلایل افزایش سه برابری بازدیدها از این نمایشگاه بود.\r\nمالمیر با تأکید بر اینکه از پیشنهادات شهرستان‌ها در راستای برگزاری رویدادهایی همزمان با رویداد همدان 2018 استقبال می‌کنیم، بیان کرد: پیشنهادهایی نظیر برگزاری جشنواره اسب اصیل ایرانی درشهرستان بهار به دبیرخانه ارائه شده و دبیرخانه رویداد همدان 2018 در محل همایش‌های بین‌المللی و قرانی همدان كه دایر شده پذيراي اين پيشنهادان خواهد بود .\r\nوی با اشاره به اینکه نظرسنجی‌ها نشان می‌دهد که در سال‌های گذشته با همراهی مسئولان خدمات مطلوبی به مسافران نوروزی ارائه‌شده است، عنوان کرد: تفاوت نوروز امسال با سال قبل این است که امسال برنامه‌های نوروزی اکثراً با محوریت همدان 2018 و رویدادهای بین‌المللی آسیایی در همدان برگزار می‌شود.\r\nمالمیر با بیان اینکه ساماندهی ورودی‌های همدان در کمیته زیرساخت رویداد همدان 2018 در حال انجام است، عنوان کرد: ساماندهی بخشی از ورودی‌های همدان تا نوروز امسال به تمام نمی‌رسد اما تا برگزاری رویدادهای 2018 انجام می‌شود.', 'This year\'s Norouz programs will be held in Hamadan, Hamadan, 2018 and the International Asian Events in Hamadan.\r\nDirector General of Cultural Heritage, Handicrafts and Tourism of Hamedan province in the Hamedan Travel Service Headquarters, referring to the annual Hamadan Company at the Tehran International Tourism Fair, said: \"The cultural heritage, the municipality and the private sector were present.\r\nAli Malmer said that with the small investment in this field, we can create good attractions for children, making it clear that children are important and influential elements for family decision making.\r\nHe stated that every year he was assigned to Hamedan province in the 38th floor of the pavilion. He added that this year for Hamedan province, a separate hall and one thousand and 800 square meters were considered, in addition to the announcement of events of Hamadan in 2018 and tourist attractions, Hamedan with headings Hamedan was the destination of the children\'s and family tourism destination, which was the first time in the Tehran International Fair.\r\nThe official said that in the Hamadan Hall at the International Tourism Fair of the Arbat, a children\'s archeological booth was set up, which led to the creation of a child\'s archeology workshop in the Heghmataneh area. The children\'s pottery pavilion from other parts of the Hamedan Hall was held at the Tourism Fair Tehran, which was welcomed by families, this year the population of the visitors of the exhibition was increased by three times, and the positive attitude of the Hamedan Hall in the exhibition of tourism and direct broadcasting of the Hamedan Hall programs in Sound and Television was one of the reasons for the increase of three times the number of visits to the exhibition.\r\nMalmir emphasized that the city suggests that events be coincided with the Hamadan event in 2018: \"Offers such as holding a Persian horse festival in the spring of spring to the Secretariat, and the Secretariat of the Hamadan event in 2018 will be hosted by the international congresses and the Qarani of Hamadan.\" It will be accepted by these promoters.\r\nPointing out that surveys show that in recent years, accompanied by good service providers to Norouz passengers, he said: the difference between this year\'s current year and the current year is that this year\'s current plans are mostly focused on Hamadan 2018 and the International Asian Events in Hamadan Gets\r\nMalmir said that organizing Hamedan inputs at the Hamadan Infrastructure Committee in 2018 is underway: \"The part of the Hamadan inputs will not be completed until this year, but until the events of 2018 are completed.', 'وستعقد برامج نوروز هذا العام في همدان، همدان، 2018 والأحداث الآسيوية الدولية في همدان.\r\n\r\nوقال علي مالمير أنه مع الاستثمار الصغير في هذا المجال، يمكننا خلق مناطق جذب جيدة للأطفال، مما يجعل من الواضح أن الأطفال هم العناصر الهامة والمؤثرة لصنع القرار الأسرة.\r\nوأضاف أن كل عام محافظة في تخصيص قاعة 38 كشك من شأنه، وقال هذا العام محافظة قاعة منفصلة وألف 800 متر مربع من العنصر الذي كان في الغرفة بالإضافة إلى تعزيز الأحداث همدان 2018 والجذب، عناوين همدان وكان حمدان مقصدا للوجهة السياحية للأطفال والأسرة، وهي المرة الأولى في معرض طهران الدولي.\r\nوأشار المسؤول إلى أن في قاعة معرض همدان الدولية للجناح السياحة تعقد الأطفال الأثري نفس الفكرة أدت إلى ورشة عمل علم الآثار للأطفال في منطقة Hegmataneh خلق، قائلا: بوث الأطفال الفخار من أجزاء أخرى من قاعة همدان السياحة التضامنية\r\nأكد أطلقت أن المدن مقترحات لتنظيم الأحداث تزامنا مع الحدث همدان عام 2018 ترحيبا وقال المقترحات مثل مهرجان الربيع مدينة الخيول الإيرانية قدمت الأمانة العامة والأمانة العامة للحدث همدان عام 2018 على الاتفاقية الدولية والقرآن همدان داير سيتم قبولها من قبل هؤلاء المروجين.\r\nوأشار إلى أن تظهر استطلاعات الرأي أنه في السنوات الأخيرة، يرافقه الخدمات المختصة للمسافرين نوروزي تم اقتراحها، على أساس الفرق من مارس من هذا العام عن العام الماضي هو أن هذا العام خطط السنة الجديدة، التي تدور في معظمها حول همدان 2018 والأحداث الدولية في آسيا في همدان أ.\r\n', 'برنامه‌های نوروزی امسال با محوریت همدان 2018 و رویدادهای بین‌المللی آسیایی در همدان برگزار می‌شود\r\nمدیرکل میراث فرهنگی، صنایع‌دستی و گردشگری استان همدان در ستاد خدمات سفر استان همدان با اشاره به شركت همه ساله همدان در نمایشگاه بین‌المللی گردشگری تهران ، گفت : در این نمایشگاه میراث فرهنگی، شهرداري و بخش خصوصی حضور داشتند.\r\nعلي مالمير با بیان اینکه کودکان عناصر مهم و تأثیرگذار برای تصمیم‌گیری خانواده‌ها در انتخاب مقاصد سفر هستند، تأکید کرد: با سرمایه‌گذاری اندک در این زمینه می‌توانیم جاذبه‌های خوبي را برای کودکان ایجاد کنیم.\r\nوی با بیان اینکه هرساله به استان همدان در سالن 38 غرفه‌ای تخصیص می‌یافت، افزود: امسال برای استان همدان سالنی مجزا و در یک هزار و 800 مترمربع در نظر گرفته شدكه در این سالن علاوه بر تبلیغ رویدادهای همدان 2018 و جاذبه‌های گردشگری، همدان با سرفصل و عنوان همدان مقصد گردشگری کودک و خانواده حضور داشت که این امر برای اولین بار در نمایشگاه بین‌المللی تهران اتفاق ‌افتاد.\r\nاين مقام مسئول با اشاره به اینکه در سالن همدان در نمایشگاه بین‌المللی گردشگری غرفه باستان‌شناسی کودک دایر بود که همین ایده سبب شد تا کارگاه باستان شناسی کودک را در محوطه هگمتانه ایجاد کنیم، ابراز کرد: غرفه سفالگری کودکان از دیگر بخش‌های سالن همدان در نمایشگاه گردشگری تهران بود.كه با استقبال خانواده ها همراه بودو امسال جمعیت خانوارهای بازدیدکننده از نمایشگاه تا سه برابر افزایش‌یافته بود و رویکرد مثبت سالن همدان در نمایشگاه گردشگری و پخش مستقیم برنامه‌های سالن همدان در صداوسیما از جمله دلایل افزایش سه برابری بازدیدها از این نمایشگاه بود.\r\nمالمیر با تأکید بر اینکه از پیشنهادات شهرستان‌ها در راستای برگزاری رویدادهایی همزمان با رویداد همدان 2018 استقبال می‌کنیم، بیان کرد: پیشنهادهایی نظیر برگزاری جشنواره اسب اصیل ایرانی درشهرستان بهار به دبیرخانه ارائه شده و دبیرخانه رویداد همدان 2018 در محل همایش‌های بین‌المللی و قرانی همدان كه دایر شده پذيراي اين پيشنهادان خواهد بود .\r\nوی با اشاره به اینکه نظرسنجی‌ها نشان می‌دهد که در سال‌های گذشته با همراهی مسئولان خدمات مطلوبی به مسافران نوروزی ارائه‌شده است، عنوان کرد: تفاوت نوروز امسال با سال قبل این است که امسال برنامه‌های نوروزی اکثراً با محوریت همدان 2018 و رویدادهای بین‌المللی آسیایی در همدان برگزار می‌شود.\r\nمالمیر با بیان اینکه ساماندهی ورودی‌های همدان در کمیته زیرساخت رویداد همدان 2018 در حال انجام است، عنوان کرد: ساماندهی بخشی از ورودی‌های همدان تا نوروز امسال به تمام نمی‌رسد اما تا برگزاری رویدادهای 2018 انجام می‌شود.', 'This year\'s Norouz programs will be held in Hamadan, Hamadan, 2018 and the International Asian Events in Hamadan.\r\nDirector General of Cultural Heritage, Handicrafts and Tourism of Hamedan province in the Hamedan Travel Service Headquarters, referring to the annual Hamadan Company at the Tehran International Tourism Fair, said: \"The cultural heritage, the municipality and the private sector were present.\r\nAli Malmer said that with the small investment in this field, we can create good attractions for children, making it clear that children are important and influential elements for family decision making.\r\nHe stated that every year he was assigned to Hamedan province in the 38th floor of the pavilion. He added that this year for Hamedan province, a separate hall and one thousand and 800 square meters were considered, in addition to the announcement of events of Hamadan in 2018 and tourist attractions, Hamedan with headings Hamedan was the destination of the children\'s and family tourism destination, which was the first time in the Tehran International Fair.\r\nThe official said that in the Hamadan Hall at the International Tourism Fair of the Arbat, a children\'s archeological booth was set up, which led to the creation of a child\'s archeology workshop in the Heghmataneh area. The children\'s pottery pavilion from other parts of the Hamedan Hall was held at the Tourism Fair Tehran, which was welcomed by families, this year the population of the visitors of the exhibition was increased by three times, and the positive attitude of the Hamedan Hall in the exhibition of tourism and direct broadcasting of the Hamedan Hall programs in Sound and Television was one of the reasons for the increase of three times the number of visits to the exhibition.\r\nMalmir emphasized that the city suggests that events be coincided with the Hamadan event in 2018: \"Offers such as holding a Persian horse festival in the spring of spring to the Secretariat, and the Secretariat of the Hamadan event in 2018 will be hosted by the international congresses and the Qarani of Hamadan.\" It will be accepted by these promoters.\r\nPointing out that surveys show that in recent years, accompanied by good service providers to Norouz passengers, he said: the difference between this year\'s current year and the current year is that this year\'s current plans are mostly focused on Hamadan 2018 and the International Asian Events in Hamadan Gets\r\nMalmir said that organizing Hamedan inputs at the Hamadan Infrastructure Committee in 2018 is underway: \"The part of the Hamadan inputs will not be completed until this year, but until the events of 2018 are completed.', 'وستعقد برامج نوروز هذا العام في همدان، همدان، 2018 والأحداث الآسيوية الدولية في همدان.\r\n\r\nوقال علي مالمير أنه مع الاستثمار الصغير في هذا المجال، يمكننا خلق مناطق جذب جيدة للأطفال، مما يجعل من الواضح أن الأطفال هم العناصر الهامة والمؤثرة لصنع القرار الأسرة.\r\nوأضاف أن كل عام محافظة في تخصيص قاعة 38 كشك من شأنه، وقال هذا العام محافظة قاعة منفصلة وألف 800 متر مربع من العنصر الذي كان في الغرفة بالإضافة إلى تعزيز الأحداث همدان 2018 والجذب، عناوين همدان وكان حمدان مقصدا للوجهة السياحية للأطفال والأسرة، وهي المرة الأولى في معرض طهران الدولي.\r\nوأشار المسؤول إلى أن في قاعة معرض همدان الدولية للجناح السياحة تعقد الأطفال الأثري نفس الفكرة أدت إلى ورشة عمل علم الآثار للأطفال في منطقة Hegmataneh خلق، قائلا: بوث الأطفال الفخار من أجزاء أخرى من قاعة همدان السياحة التضامنية\r\nأكد أطلقت أن المدن مقترحات لتنظيم الأحداث تزامنا مع الحدث همدان عام 2018 ترحيبا وقال المقترحات مثل مهرجان الربيع مدينة الخيول الإيرانية قدمت الأمانة العامة والأمانة العامة للحدث همدان عام 2018 على الاتفاقية الدولية والقرآن همدان داير سيتم قبولها من قبل هؤلاء المروجين.\r\nوأشار إلى أن تظهر استطلاعات الرأي أنه في السنوات الأخيرة، يرافقه الخدمات المختصة للمسافرين نوروزي تم اقتراحها، على أساس الفرق من مارس من هذا العام عن العام الماضي هو أن هذا العام خطط السنة الجديدة، التي تدور في معظمها حول همدان 2018 والأحداث الدولية في آسيا في همدان أ.\r\n', 1, '2018-02-17 20:30:00', '2018-02-22 10:27:00');

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

--
-- Dumping data for table `tbl_news_img`
--

INSERT INTO `tbl_news_img` (`id`, `niNId`, `niGId`, `niOrder`, `niState`, `niFaAlt`, `niEnAlt`, `niArAlt`, `niFaSubject`, `niEnSubject`, `niArSubject`, `niFaDescription`, `niEnDescription`, `niArDescription`, `created_at`, `updated_at`) VALUES
(1, 1, 14, 1, 1, 'رونمایی از لوگوی همدان ۲۰۱۸', 'Unveiling the logo of Hamadan 2018', 'كشف النقاب عن شعار همدان 2018', 'رونمایی از لوگوی همدان ۲۰۱۸', 'Unveiling the logo of Hamadan 2018', 'كشف النقاب عن شعار همدان 2018', NULL, NULL, NULL, '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(2, 2, 21, 1, 1, 'نوروز سال 1397 با محوریت رويدادهاي همدان 2018', 'Nowruz 1397, focusing on the events of Hamadan, 2018', 'نوروز 1397، مع التركيز على أحداث همدان، 2018', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-17 20:30:00', '2018-02-17 20:30:00');

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

--
-- Dumping data for table `tbl_news_slider`
--

INSERT INTO `tbl_news_slider` (`id`, `nsGId`, `nsOrder`, `nsState`, `nsFaAlt`, `nsEnAlt`, `nsArAlt`, `nsFaSubject`, `nsEnSubject`, `nsArSubject`, `nsFaDescription`, `nsEnDescription`, `nsArDescription`, `created_at`, `updated_at`) VALUES
(1, 14, 1, 1, 'رونمایی از لوگوی همدان ۲۰۱۸', 'Unveiling the logo of Hamadan 2018', 'كشف النقاب عن شعار همدان 2018', 'رونمایی از لوگوی همدان ۲۰۱۸', 'Unveiling the logo of Hamadan 2018', 'كشف النقاب عن شعار همدان 2018', NULL, NULL, NULL, '2018-02-16 20:30:00', '2018-02-16 20:30:00');

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
(5, 1, 4, 2, 'آداب و رسوم', 'Customs and traditions', 'العادات والتقاليد', 'آداب و رسوم', 'Customs and traditions', 'العادات والتقاليد', '/hamedan/customs-and-traditions', 'تجربه فرهنگ اصیل ایرانی', 'Experience the genuine Iranian culture', 'تجربة الثقافة الإيرانية الحقيقية', '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(6, 4, 9, 2, 'معرفی', 'Introduction', 'مقدمة', 'معرفی', 'Introduction', 'مقدمة', '/hamedan-2018/introduction', 'همدان پایتخت گردشگری کشورهای آسیایی', 'Hamedan Capital of Asian Tourism', 'حمدان كابيتال للسياحة الآسيوية', '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(7, 1, 1, 2, 'جاذبه ها', 'Attractions', 'جاذبية', 'جاذبه ها', 'Attractions', 'جاذبية', '/hamedan/attraction', 'ثبت خاطرات به یاد ماندنی در شهر کهن', 'Record memorable memories in the ancient city', 'سجل ذكريات لا تنسى في المدينة القديمة', '2018-02-18 20:30:00', '2018-02-18 20:30:00'),
(8, 1, 1, 2, 'آرامگاه بوعلی سینا', 'Abu Ali Sina tomb', 'ضريح بو علي سينا', 'آرامگاه بوعلی سینا', 'Abu Ali Sina tomb', 'ضريح بو علي سينا', '/hamedan/attraction/abu-ali-sina', 'بنای یادبود شیخ الرئیس ابن سینا', 'Monument to Sheikh Al-Raisi Avicenna', 'النصب التذكاري للشيخ الريسي ابن سينا', '2018-02-20 20:30:00', '2018-02-20 20:30:00'),
(9, 1, 1, 2, 'بزرگترین غار آبی جهان', 'The world\'s largest blue cave', 'أكبر كهف أزرق في العالم', 'بزرگترین غار آبی جهان', 'The world\'s largest blue cave', 'أكبر كهف أزرق في العالم', '/hamedan/attraction/aliasdar-cave', 'با سفر به همدان از شگفت انگیز ترین غار آبی جها دیدن کنید', 'Visit the most amazing water cave in Hamadan with your visit', 'زيارة كهف المياه المدهشة في همدان مع زيارتكم', '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(10, 1, 23, 2, 'صنایع دستی', 'Handicraft', 'حرفي', 'صنایع دستی', 'Handicraft', 'حرفي', '/hamedan/handicraft', 'صنایع دستی همدان تبلور هنر و زیبایی', 'Handicrafts of Hamedan Crystal Art and Beauty', 'الحرف اليدوية من همدان كريستال الفن والجمال', '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(11, 3, 7, 2, 'جشنواره شیره پزی مانیزان', 'Manizan Festival', 'مهرجان مانيزان الأعياد', 'جشنواره شیره پزی مانیزان', 'Manizan Festival', 'جشنواره شیره پزی مانیزان', '/event/native-festival/manizan-festival', 'شیره پزی در ملایر قدمتی دیرین دارد', 'The salty salmon in Malayer has a long history', 'سمك السلمون المالح في الملاير لديه تاريخ طويل', '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(12, 3, 7, 2, 'جشنواره های بومی', 'Native festivals', 'المهرجانات المحلية', 'جشنواره های بومی', 'Native festivals', 'المهرجانات المحلية', '/event/native-festival', 'همدان رویداد سنت های دیرین', 'Hamedan is the event of ancient traditions', 'همدان هو حدث من التقاليد القديمة', '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(13, 3, 5, 2, 'رویدادهای بین المللی', 'International events', 'الأحداث الدولية', 'رویدادهای بین المللی', 'International events', 'الأحداث الدولية', '/event/international', 'جهان در جام همدان', 'World in the Hamadan Cup', 'العالم في كأس همدان', '2018-02-23 20:30:00', '2018-02-23 20:30:00'),
(14, 1, 1, 2, 'لذت خرید در بازارهای همدان', 'Shopping pleasure in Hamedan markets', 'متعة التسوق في أسواق همدان', 'لذت خرید در بازارهای همدان', 'Shopping pleasure in Hamedan markets', 'متعة التسوق في أسواق همدان', '/hamedan/attraction/shopping', 'بهترین اوقات خود را با خرید در بازارهای همدان سپری و احساس رضایت نمایید', 'Enjoy your best time with shopping in Hamedan markets', 'استمتع بأفضل وقتك مع التسوق في أسواق همدان', '2018-02-23 20:30:00', '2018-02-23 20:30:00'),
(15, 1, 1, 2, 'شادی و هیجان', 'Joy and excitement', 'الفرح والإثارة', 'شادی و هیجان', 'Joy and excitement', 'الفرح والإثارة', '/hamedan/attraction/joy-and-excitement', 'لذت شادی و هیجان را از دست ندهید', 'Do not miss the joy of joy and excitement', 'لا تفوت فرحة الفرح والإثارة', '2018-02-23 20:30:00', '2018-02-23 20:30:00');

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
(3, 5, 2, 1, '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(4, 6, 2, 1, '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(5, 7, 2, 1, '2018-02-18 20:30:00', '2018-02-18 20:30:00'),
(6, 8, 2, 1, '2018-02-20 20:30:00', '2018-02-20 20:30:00'),
(7, 8, 7, 1, '2018-02-20 20:30:00', '2018-02-20 20:30:00'),
(8, 9, 2, 1, '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(9, 9, 7, 1, '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(10, 10, 2, 1, '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(11, 11, 2, 1, '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(12, 11, 12, 1, '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(13, 13, 2, 1, '2018-02-23 20:30:00', '2018-02-23 20:30:00'),
(15, 14, 2, 1, '2018-02-23 20:30:00', '2018-02-23 20:30:00'),
(16, 14, 7, 1, '2018-02-23 20:30:00', '2018-02-23 20:30:00'),
(17, 15, 2, 1, '2018-02-23 20:30:00', '2018-02-23 20:30:00'),
(18, 15, 7, 1, '2018-02-23 20:30:00', '2018-02-23 20:30:00');

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
(1, 2, 1, 2, 1, 'طبیعت چهار فصل', 'Four Seasons Nature', 'فور سيزونز الطبيعة', '/page/hamedan/hemedan-at-a-glance', 'بیشتر', 'READ MORE', 'اقرأ أكثر', 'طبعیت چهار فصل', 'Four Seasons Nature', 'فور سيزونز الطبيعة', 'تجربه آرامش در چهار فصل', 'Experience the calm in four seasons', 'تجربة الهدوء في أربعة مواسم', '2018-02-12 20:30:00', '2018-02-12 20:30:00'),
(2, 2, 4, 4, 1, 'تجربه فرهنگ اصیل ایرانی', 'Experience the genuine Iranian culture', 'تجربة الثقافة الإيرانية الحقيقية', '/page/hamedan/customs-and-traditions', 'بیشتر', 'READ MORE', 'اقرأ أكثر', 'تجربه فرهنگ اصیل ایرانی', 'Experience the genuine Iranian culture', 'تجربة الثقافة الإيرانية الحقيقية', 'در اقامتگاه های بوم گردی میزبان شما هستیم', 'We are at your homesteads', 'نحن في بيوتكم', '2018-02-12 20:30:00', '2018-02-12 20:30:00'),
(3, 2, 5, 3, 1, 'سفر به اعماق تاریخ', 'A trip to the depths of history', 'رحلة إلى أعماق التاريخ', '/page/hamedan/history', 'بیشتر', 'READ MORE', 'اقرأ أكثر', 'همدان پایتخت تاریخ و تمدن', 'A trip to the depths of history', 'رحلة إلى أعماق التاريخ', 'همدان پایتخت تاریخ و تمدن', 'Hamedan Capital of History and Civilization', 'حمدان عاصمة التاريخ والحضارة', '2018-02-12 20:30:00', '2018-02-12 20:30:00'),
(4, 2, 6, 5, 1, 'همدان ۲۰۱۸', 'Hamedan 2018', 'همدان ۲۰۱۸', NULL, 'بیشتر', 'READ MORE', 'اقرأ أكثر', 'همدان ۲۰۱۸', 'Hamedan 2018', 'همدان ۲۰۱۸', 'زمستان، شادی و هیجان', 'Winter, joy and excitement', 'الشتاء، الفرح والإثارة', '2018-02-12 20:30:00', '2018-02-12 20:30:00'),
(5, 3, 5, 1, 1, 'تاریخچه همدان', 'History of Hamedan', 'تاريخ حمدان', NULL, NULL, NULL, NULL, 'تاریخچه', 'History', 'تاریخ', 'همدان پایتخت تاریخ و تمدن', 'Hamedan Capital of History and Civilization', 'حمدان عاصمة التاريخ والحضارة', '2018-02-13 20:30:00', '2018-02-13 20:30:00'),
(6, 4, 1, 1, 1, 'همدان در یک نگاه', 'Hamedan at a glance', 'همدان في لمحة', NULL, NULL, NULL, NULL, 'همدان در یک نگاه', 'Hamedan at a glance', 'همدان في لمحة', 'همدان خاستگاه تمدن و شهرنشینی', 'Hamedan is the origin of civilization and urbanization', 'همدان هو أصل الحضارة والتحضر', '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(7, 5, 4, 1, 1, 'آداب و رسوم همدان', 'Customs and traditions', 'العادات والتقاليد', NULL, NULL, NULL, NULL, 'آداب و رسوم همدان', 'Customs and traditions', 'العادات والتقاليد', 'تجربه فرهنگ اصیل ایرانی', 'Experience the genuine Iranian culture', 'تجربة الثقافة الإيرانية الحقيقية', '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(8, 2, 11, 1, 1, 'همدان ۲۰۱۸', 'Hamedan 2018', 'همدان ۲۰۱۸', '/page/hamedan-2018/introduction', 'بیشتر', 'READ MORE', 'اقرأ أكثر', 'همدان ۲۰۱۸', 'Hamedan 2018', 'همدان ۲۰۱۸', 'همدان پایتخت گردشگری کشورهای آسیایی', 'Hamedan Capital of Asian Tourism', 'حمدان كابيتال للسياحة الآسيوية', '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(9, 6, 12, 1, 1, 'نشت ACD', 'ACD Leak', 'ACD الجمعية', NULL, NULL, NULL, NULL, 'نشت ACD', 'ACD Leak', 'ACD الجمعية', 'نشست وزرای گردشگری', 'Meeting of Ministers of Tourism', 'اجتماع وزراء السياحة', '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(10, 7, 23, 1, 1, 'موزه لطفعلیان', 'The house of Lafaliyan', 'بیت لطفعلیان', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-18 20:30:00', '2018-02-18 20:30:00'),
(11, 8, 18, 1, 1, 'آرامگاه بوعلی سینا', 'Abu Ali Sina tomb', 'ضريح بو علي سينا', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-20 20:30:00', '2018-02-20 20:30:00'),
(12, 9, 20, 1, 1, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(13, 10, 29, 1, 1, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(14, 11, 16, 1, 1, 'جشنواره شیره پزی مانیزان', 'Manizan Festival', 'مهرجان مانيزان الأعياد', NULL, NULL, NULL, NULL, 'جشنواره شیره پزی مانیزان', 'Manizan Festival', 'مهرجان مانيزان الأعياد', NULL, NULL, NULL, '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(15, 13, 35, 1, 1, 'رویدادهای بین المللی در همدان', 'International events in Hamadan', 'الأحداث الدولية في همدان', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-23 20:30:00', '2018-02-23 20:30:00'),
(16, 14, 19, 1, 1, 'لذت خرید در بازارهای همدان', 'Shopping pleasure in Hamedan markets', 'متعة التسوق في أسواق همدان', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-23 20:30:00', '2018-02-23 20:30:00'),
(17, 15, 17, 1, 1, 'شادی و هیجان در همدان', 'Happiness and excitement in Hamedan', 'السعادة والإثارة في همدان', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-23 20:30:00', '2018-02-23 20:30:00');

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
  `sFullScreen` tinyint(1) NOT NULL DEFAULT '1',
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

INSERT INTO `tbl_sections` (`id`, `sPId`, `sStId`, `sMmId`, `sOrder`, `sState`, `sFullScreen`, `sLink`, `sLinkFaTitle`, `sLinkEnTitle`, `sLinkArTitle`, `sFaSubject`, `sEnSubject`, `sArSubject`, `sFaDescription`, `sEnDescription`, `sArDescription`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-13 20:30:00', '2018-02-13 20:30:00'),
(2, 3, 6, 1, 2, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-13 20:30:00', '2018-02-13 20:30:00'),
(3, 3, 12, 1, 3, 1, 1, NULL, NULL, NULL, NULL, 'همدان پایتخت تاریخ و تمدن', 'Hamedan Capital of History and Civilization', 'حمدان عاصمة التاريخ والحضارة', '<p>&nbsp;</p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:18px\"><strong>پیشینه تاریخی</strong></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#8a8a8a\">موقعيت استان همدان از نظر اقليمي و طبيعي كه آن را جهت فعاليتهاي كشاورزي و دامداري مناسب نموده از دیرباز سبب شده است كه اين منطقه محل استقرار و نشو و نماي تمدنهاي باستاني باشد .وجود تعداد قابل ملاحظه اي از تپه های باستاني ماقبل تاريخ در نقاط مختلف استان دليل بر اثبات اين مدعا است .نتايج مطالعات و كاوشهاي تپه گيان نهاوند نشان ميدهد كه مردمان ساكن در استان در 6 هزار سال پيش از فرهنگ و تمدن نسبتاً پيش رفته اي برخوردار بوده اند. قديميترين متون سنگ نوشته آشوري همدان را تحت عنوان ٌ آكسيا ٌ به معني شهر كاسيان نام مي برد و اين امر نشان ميدهد كه پيشينه مدنيت مركز استان حداقل به هزاره سوم قبل از ميلاد باز ميگردد. </span></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:right\">&nbsp;</p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:right\"><span style=\"font-size:18px\"><strong>نگاهی به گذشته</strong></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#8a8a8a\">انجام حفاريهاي باستان شناسي در تپه هاي گودين و سگاوي نزديك كنگاور و نيز نوشيجان ملاير گوشه هايي از فرهنگ وتمدن اقوام ماد را در اين زمان بر ما آشكار ساخته است كه از جمله آنها ميتوان به نخستين نمونه هاي خط و نگارش و اشكال اوليه سكه و نخستين مظاهر فرهنگ ديني و معماري ايراني اشاره نمود .براساس آنچه كه هردوت مورخ يوناني نگاشته است مادها در اواخر قرن هشتم <em>ق.م</em> به رهبري شخصي به نام دياكو توانستند به تشكل سياسي ونظامي دست يافته ونخستين دولت مقتدر فلات ايران را پايه گذاري كنند .دياكو شهر همدان را به پايتختي برگزيد وبدستور او استحكامات عظيمي شامل هفت حصار تو در تو كه هركدام به رنگي خاص مزين شده بود ساخته شد .دو حصار مركزي يكي با الواح سيمين وديگري با الواح زرين پوشانيده شد وكاخها وخزاين درون حصار مركزي برپا گرديد ومردم پيرامون اين حصار ها ي هفتگانه منازل خود را برپا داشتند ،اكثر محققين علوم تاريخ وباستان شناسي را عقيده برآن است كه تپه هگمتانه همدان برجا مانده همين استحكامات است .شهر همدان طي 150سال حكومت مادها ،از نعمت وآباداني فراواني برخوردار بود و بعد از انقراض آن دولت هر چند مركزيت نخسيتن را از دست داد ولي بعنوان يكي از سه پايتخت هخامنشيان مورد توجه خاص بود .وجود كتيبه هاي گنجنامه بقاياي ستونهاي سنگي ،كاخهاي هخامنشي ،جامها و الواح زرين وسيمين بدست آمده از همدان مربوط به اين دوره حاكي ازاهميت اين شهر و منطقه در اين زمان است .در سال 330ق.م شهر همدان بدست اسكندر مقدوني ويران گرديد ولي بدليل موقعيت استراتژيك آن تبديل به مقر نظامي او شد .در اواخر دوره سلوكي شهر همدان محل تلاقي وبرخورد متعدد آنان با اشكانيان بود تا اينكه سرانجام در سال 155ق.م مهرداد اشكاني اين شهر را متصرف گرديد . از دوره اشكاني وسلوكي مجسمه شير سنگي وبقاياي يك گورستان در شهر همدان وآثار مختصري از معبد لائوديسه در شهر نهاوند برجاي مانده است .در يك كتابچه به زبان پهلوي بنام شهرها كه در زمان قباد (500ميلادي ) نگاشته شده بناي همدان به يزد گرد اول نسبت داده شده كه اين امر نشان دهنده انجام اقدامات عمراني مهمي در اين زمان در شهر مزبور است .</span></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:right\">&nbsp;</p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:right\"><span style=\"font-size:18px\"><strong>دوران اسلامی همدان</strong></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#8a8a8a\">لشگر اعراب به سال 26 هجري برابر با 645 ميلادي وارد همدان شدند. از اواسط قرن سوم رياست شهر در اخیتار علویان قرار گرفت و بناي ارزشمند گنبد علويان يادگار اين دوره است . در سال 319هجري قمري ،مرداويچ زياري باني آل بويه به قهر بسياري از ساكنان آن را هلاك نمودوشير سنگي معروف را از دروازه هاي شهر به خاك افكند . در سال 345هجري قمري شهر براثر زلزله خسارت فراوان ديد وتشنجات مذهبي نيزدرسال 351هجري قمري جان بسياري از مردم را گرفت .در قرن 4و5كشمكشهاي فراواني بين سلسله هاي حسنويه ،ديلميان ،وكاكويه درهمدان كه يكي از مراكز عمده جنگ وستيز ميان آنها بود رخ داد .همچنين باباطاهر عارف وشاعر وارسته مشهور در اين دوره در شهر همدان مي زيست .در سالهاي 387تا 412 هجري ،شمس الدوله ابو طاهر شاه خسرو ديلمي در همدان حكومت داشت و ابوعلي سينا طبيب و دانشمند بزرگ ايراني در اين شهر منصب وزارت اورا داشت . در اواخر قرن 5 اين شهر پايتخت بوييان جبال بود . تركمانان غز بسال 420همدان را تاراج كردند واز نيمه سده 5تركمانان سلجوقي بر آن چيره گشتند در سده 6 با تجزيه امپراتوري آنها ،همدان پايتخت سلاجقه عراق عجم شد . يورش مغولان (618و621 هجري قمري) بسياري از آباديها وشهرهاي استان از جمله همدان رايكسره دستخوش ويراني ساخت وكثيري از اهالي آن در دفاع قهرمانانه درمقابل سپاه جرار مغول جان باختند .اندكي بعد شهركي در حومه شمالي شهر سابق بنام همدان نو گرفت .در دوره ايلخانيان اين شهر تا حدودي اهميت سابق را باز يافت و در زمان وزارت خواجه رشيدالدين فضل اله همداني (718هجري قمري)شهر همدان مورد توجه خاص بود . ابنيه اسلامي نظير ،استر ومردخاي ،مقبره سابق باباطاهر،امامزاده اظهر ،هود ،حبقوق نبي و... از اين دوره است . در دوره صفويه شهر مجدداً از نعمت آباداني يهره مند گشت ، ايجاد كاروانسراها ،مدارس ،پلها در شهر همدان وديگر نقاط استان از جمله در تويسركان بيانگر توجه صفويان به امر آباداني شهرهاست . در دوره زنديه همدان در دست اميران آن خاندان بود.</span></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>وجه تسمیه</strong></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#8a8a8a\">نام همدان براي اولين بار در سال 1100ق. م در كتيبه تيگلات پليسر اول ،شاه آشور به چشم مي خورد كه آن را <strong>امدانه </strong>يا <strong>همدانا </strong>ذكر كرده است ،ولي در كتيبه هاي عهد هخامنشي آن را <strong>هگمتان </strong>ودر كتاب هردوت يوناني <strong>اكباتان </strong>مي خوانيم .</span></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#8a8a8a\">اسم اصلي اين شهر <strong>هانگ ماتانا </strong>يا <strong>هاكاماتانا </strong>بوده كه معني آن محل اجتماع مي باشد وبه واژه انجمن نزديك است .در تورات <strong>اخمشا </strong>نوشته شده كه مركب است از هاخاي زندي وثاناي پالي كه شعبه اي از زبان سانسكريت است وثانا به معني ستان فارسي است كه محل ومكان باشد واخمثا را به شهر دوستي ومحل دوستي ترجمه كرده اند ، زيرا شاهان ايران در تابستان ،دوستان خود را به اين شهر دعوت مي كردند .اعتماد السلطنه بر اين عقيده بود كه اسم اين شهر همدان بوده ، چه <strong>هم</strong> معني اتفاق و <strong>دان</strong> معني ظرفيت را مي رساند ،يعني مجمع متفقين . </span></span></p>\r\n', '<p><span style=\"font-size:18px\"><strong>Historical Background</strong></span></p>\r\n\r\n<p><span style=\"color:#8a8a8a\">The position of the province of Hamedan, from the natural and climatic point that has made it suitable for agricultural and livestock activities, has long since caused this area to be the location of an ancient civilizations. The presence of a considerable number of ancient hills of prehistoric history in different places The province proves this claim. The results of the studies and excavations of the Gian Nahavand hill show that the people living in the province have enjoyed a relatively advanced civilization and culture for six thousand years. The oldest Ashurdian-styled metaphor of Hamadan is called Asia, which means the city of Kasian, which indicates that the province&#39;s central civilization dates back to at least the third millennium before the Middle Ages.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><strong>Take a look past</strong></span></p>\r\n\r\n<p><span style=\"color:#8a8a8a\">Performing archaeological excavations in the mountains of Godin and the Coghavar near Kangavar, as well as the Nawshijan Malayer, has revealed to us the corners of the culture and culture of the Mother&#39;s tribes at this time, including the first samples of script and coins, and the first forms of coins. The manifestations of Iranian religious culture and architecture. According to what Herodotus wrote to the Greek historian, the Medes, at the end of the eighth century, were led by a person called Diako, who achieved a political and military structure and established the first powerful Iranian state on the Iranian plateau. Hamedan was chosen as the capital and his deputy built a great fortress including your seven fences. You were each made of a special color. The two central fences were covered with Simin and the other plates with golden pillars, and the windows and doors were located inside the central fence. The people around them set up their seven houses, most of the scholars of the history and theology It is believed that the hegematane hill of Hamedan is still the same. The city of Hamedan enjoyed great blessings during the 150 years of the rule of the Medes. After the extinction of the state, though it lost its centrality, but as one of the three Achaemenid capitals Special attention was paid to the presence of Ganjnameh inscriptions on the remnants of stone columns, The last Achaemenid, the cups and tablets of Zarrin and Wimin, obtained from Hamadan in this period, indicate the importance of this city and region at this time. In 330 BC, the city of Hamedan was destroyed by Alexander of Macedonia, but because of its strategic position, it became its military headquarters. At the end of the Solucci period, the city of Hamedan was the site of a confluence and a large number of them with the Parthians, until finally, in 155 AD, Mehrdad Ashkani was annexed to this city. From the period of Oshchani and Wloki there is a stone sculpture and the remains of a cemetery in Hamedan and a brief work of the temple of Laodicea in Nahavand. In a book written in Pahlavi, called Cities, written in the time of Qobad (500 AD), the Hamadan building attributed to the first round of Yazd This indicates that there are significant developmental measures at that time in the city.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><strong>Islamic era of Hamadan</strong></span></p>\r\n\r\n<p><span style=\"color:#8a8a8a\">The Arab armies entered Hamadan by 645 AD in 26 AH. From the middle of the third century, the head of the city was occupied by the Alevites, and the valuable building of the Dome of the Alawites dates back to this period. In the year 319 AH, Mardavich Baniyyyyyh Baniyal Buiyah, by the fury of many of its inhabitants, destroyed a well-known stone gemstone from the gates of the city to the soil. In the year 345 AH, the city suffered great damage due to the earthquake. Religious events also claimed the lives of many people in the 351 AH. In the 4th and 5th centuries, there were numerous conflicts between the Hanawi dynasties, Dilamians, and Kakwahi in Hamadan, one of the main centers of the war between them. Arif and Shahar were famous in this period in the city of Hamedan. Between 387 and 412 AH, Shams al-Dawlah Abu Taher Shah Khosrow Dilami ruled in Hamedan and Abu Ali Sina was the Iranian physician and great scientist in the city. At the end of the 5th century, the city was the capital of Boyuan Jabal. The Turkmen of Ghazi spoiled 420 Hamedans in the last millennium, and since the mid-fifth century, the Seljuk Turks had dominated it. In the 6th century, with the deconstruction of their empire, Hamedan became the capital of Iraqi Salaqiq. The attack on the Mughals (618 and 621 AH) destroyed many of the villages and towns of the province, including the Hamadan Rakeshra, and many of its people died in the heroic defense of the Military Revolutionary Guard Corps of Jerusalem. Next, a town in the northern suburbs of the former city called Hamedan. The city regained somewhat the importance of the former, and at the time of the Khowaja&#39;s ministry, Rashid al-Din Fazlullah Hamedani (718 AH), the city of Hamedan was especially noted. Islamic monument such as Ester and Mardakha, the former tomb of Baba Taher, Imamzadeh Azhar, Hood, Habukhuk, Nabi and ... of this period. In the Safavid period of the city, again, the city was renovated. The creation of caravansaries, schools, bridges in the city of Hamedan and other parts of the province, including in Tuyserkan, indicate the Safavid&#39;s attention to the development of cities. During the Zandieh era, Hamadan was in the hands of its emirs.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><strong>Signing</strong></span></p>\r\n\r\n<p><span style=\"color:#8a8a8a\">Hamedan name for the first time in 1100 AH. In the inscription of the first Plitser&#39;s inscription, the king of Assyria, he has referred to it as a prophet or companion, but in the Achaemenid inscriptions it is Hegmatan and in the Greek Herodotus Book of Ekbatan.<br />\r\nThe main name of this city is the city of Hun Matanah or Hakamatana, which means the community and is close to the name of the association. It is written in the Torah that it is composed of Hakhai Zandi and Palani, which is a branch of Sanskrit, and the name is Persian, where the place And they will translate Wahmahma into a friendship and friendship city because the Iranian kings invited their friends to this city in the summer. Trust al-Saltanah was of the opinion that the name of this city was Hamedan, what does it mean and what meaning means capacity Allied Assembly.</span></p>\r\n', '<p dir=\"rtl\"><strong><span style=\"font-size:18px\">خلفية تاريخية</span></strong><br />\r\n<br />\r\n<span style=\"font-size:14px\"><span style=\"color:#8a8a8a\">وقد تسبب موقف محافظة حمدان، من الناحية الطبيعية والمناخية التي جعلتها مناسبة للأنشطة الزراعية والحيوانية، منذ فترة طويلة في جعل هذه المنطقة موقع حضارات قديمة. وجود عدد كبير من التلال القديمة من التاريخ ما قبل التاريخ في أماكن مختلفة محافظة يثبت هذا الادعاء. وتظهر نتائج الدراسات والحفريات في تلة جيان نهافند أن الناس الذين يعيشون في المحافظة يتمتعون حضارة وثقافة متقدمة نسبيا لمدة ستة آلاف سنة. ويطلق على أقدم استعارة على غرار أشوردية من همدان آسيا، وهو ما يعني مدينة كاسيان، مما يدل على أن الحضارة المركزية في المحافظة يعود إلى ما لا يقل عن الألفية الثالثة قبل العصور الوسطى.</span></span><br />\r\n<br />\r\n&nbsp;<br />\r\n<br />\r\n<strong><span style=\"font-size:18px\">نلقي نظرة الماضي</span></strong><br />\r\n<br />\r\n<span style=\"font-size:14px\"><span style=\"color:#8a8a8a\">وقد كشف لنا حفريات أثرية في جبال غودين و كوغافار بالقرب من كانغافار، فضلا عن نوشيجان مالايير لنا زوايا ثقافة وثقافة قبائل الأم في هذا الوقت، بما في ذلك العينات الأولى من النصي والقطع النقدية، و الأشكال الأولى من القطع النقدية. مظاهر الثقافة الدينية الإيرانية والهندسة المعمارية. وفقا لما كتبه هيرودوت للمؤرخ اليوناني، كان ميديس، في نهاية القرن الثامن، بقيادة شخص يدعى دياكو، الذي حقق هيكلا سياسيا وعسكريا وأنشأ أول دولة إيرانية قوية على الهضبة الإيرانية. تم اختيار حمدان كعاصمة ونائبه بناء قلعة كبيرة بما في ذلك السبائك الخاصة بك سبعة. كنت كل مصنوعة من لون خاص. تم تغطية الأسوار المركزية مع سيمين والألواح الأخرى مع أعمدة ذهبية، وكانت النوافذ والأبواب تقع داخل السياج المركزي. الناس من حولهم أقاموا سبعة منازل، معظم علماء التاريخ واللاهوت ويعتقد أن تلة هيغماتان هامدان لا يزال هو نفسه. تتمتع مدينة هامدان بركات عظيمة خلال 150 عاما من حكم الميديين. بعد انقراض الدولة، على الرغم من أنها فقدت محوريتها، ولكن باعتبارها واحدة من العواصم الأخمينية الثلاث وقد أولي اهتمام خاص لوجود النقوش غانجنامه على بقايا أعمدة حجرية، وآخر الأخمينية، وأكواب وأقراص من زارين و ويمين ، التي تم الحصول عليها من همدان في هذه الفترة، تشير إلى أهمية هذه المدينة والمنطقة في هذا الوقت. في عام 330 قبل الميلاد، دمرت مدينة همدان من قبل ألكسندر مقدونيا، ولكن بسبب موقعها الاستراتيجي، أصبح مقرها العسكري. في نهاية فترة سولوتشي، كانت مدينة همدان موقع التقاء وعدد كبير منهم مع البارثيين، حتى النهاية، في 155 م، مهرداد اشكاني ضم إلى هذه المدينة. من فترة أوشكاني و ولوكي هناك تمثال حجري وبقايا مقبرة في همدان وعمل قصير من معبد لاودتشا في نهافاند. في كتاب مكتوب في بهلوي، يسمى المدن، كتب في وقت كوباد (500 م)، وبناء همدان يعزى إلى الجولة الأولى من يزد وهذا يشير إلى أن هناك تدابير تنموية كبيرة في ذلك الوقت في المدينة.</span></span><br />\r\n<br />\r\n&nbsp;<br />\r\n<br />\r\n<strong><span style=\"font-size:18px\">العصر الإسلامي من همدان</span></strong><br />\r\n<br />\r\n<span style=\"font-size:14px\"><span style=\"color:#8a8a8a\">دخلت الجيوش العربية همدان بحلول عام 645 ميلادية في 26 ه. من منتصف القرن الثالث، كان رئيس المدينة يحتلها أليفيتس، والمبنى القيم لقبة العلويين يعود إلى هذه الفترة. في عام 319 ه، دمر مردفيش بنيية بنيال بوعيا، بسبب غضب العديد من سكانها، الأحجار الكريمة الحجرية المعروفة من بوابات المدينة إلى التربة. في عام 345 ه، عانت المدينة من أضرار جسيمة بسبب الزلزال. وأدت الأحداث الدينية أيضا إلى مقتل العديد من الناس في عام 351 ه. في القرنين الرابع والخامس، كانت هناك صراعات عديدة بين سلالات الحناوي ودلاميان وكاكواهي في همدان، أحد المراكز الرئيسية للحرب بينهما. وكان عارف وشهار مشهورين في هذه الفترة في مدينة همدان. بين 387 و 412 ه، شمس الدولة أبو طاهر شاه خسرو ديلامي حكم في حمدان وأبو علي كان سينا ​​الطبيب الإيراني وعالم عظيم في المدينة. في نهاية القرن الخامس، كانت المدينة عاصمة بويوان جبال. تركمان غازي أفسد 420 حمدان في الألفية الأخيرة، ومنذ منتصف القرن الخامس، سيطرت الأتراك السلاجقة عليها. في القرن السادس، مع تفكيك إمبراطوريتهم، أصبح همدان عاصمة سلاقيق العراقية. ودمر الهجوم على المغول (618 و 621 ه) العديد من القرى والبلدات في المحافظة، بما في ذلك همدان راكيشرا، وكثير من مواطنيها ماتوا في الدفاع البطولي من فيلق الحرس الثوري العسكري في القدس. بعد ذلك، بلدة في الضواحي الشمالية للمدينة السابقة تدعى حمدان. استعادت المدينة إلى حد ما أهمية الأولى، وفي وقت وزارة خواجا، رشيد الدين فضل الله حمداني (718 ه)، مدينة حمدان وأشار بشكل خاص. النصب الإسلامي مثل استر ومارداخا، المقبرة السابقة لبابا طاهر، إمام زادة الأزهر، هود،</span></span></p>\r\n', '2018-02-13 20:30:00', '2018-02-13 20:30:00'),
(4, 4, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(5, 4, 6, 1, 2, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(6, 4, 12, 1, 3, 1, 1, NULL, NULL, NULL, NULL, 'همدان خاستگاه تمدن و شهرنشینی', 'Hamedan is the origin of civilization and urbanization', 'همدان هو أصل الحضارة والتحضر', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>موقعیت طبیعی</strong></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">استان همدان در گستره اي به مساحت 19493 كيلومتر مربع ، در غرب ايران بين 33 درجه و59 دقيقه تا 35درجه و48دقيقه عرض شمالي و47درجه و34دقيقه تا 49درجه و36دقيقه طول شرقي از نصف النهار گیرينويچ قرارگرفته است .<br />\r\nاين استان از شمال به استانهاي زنجان و قزوين ،از جنوب به استان لرستان ،از شرق به استان مركزي واز غرب به استان كرمانشاه وقسمتي از استان كردستان محدود است .</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><br />\r\n<span style=\"font-size:18px\"><strong>ناهمواري ها</strong></span><br />\r\n<span style=\"color:#8a8a8a\">ناهمواري هاي استان در طي دوران زمين شناسي دچار تغييرات زيادي شده است .يكي از عوامل تغيير شكل ناهمواري هاي استان ،آبهاي روان در برخي مناطق با تخريب ارتفاعات وانباشتن مواد درچاله ها ،سبب كاهش ارتفاع كوه ها وپيدايش دشت هاي متعددي شده اند . در برخي مناطق نيز ،شدت عمل آب هاي روان به اندازه اي بوده كه شكل ناهمواري ها را معكوس كرده است ،مثلاً كوه به دره تبديل شده يا دره ي عميق دوره هاي گذشته ،اكنون به صورت كوه در آمده است . كوه خان گرمز در غرب تويسركان نمونه اي جالب از اين پديده است.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><br />\r\n<span style=\"font-size:18px\"><strong>ارتفاعات </strong></span><br />\r\n<span style=\"color:#8a8a8a\">ارتفاعات استان عموماً جهت شمال غربي ـ جنوب شرقي دارند وبه طور كلي در شمال ، مركز وجنوب استان قرارگرفته اند . هر يك از اين ارتفاعات ،شامل بخشي از كوههاي مختلف ايران است .<br />\r\nارتفاعات شمالي - ارتفاعات مياني .( قله ي الوند با ارتفاع 3574 متر از سطح دريا در اين سلسله کوه ها قراردارد)- ارتفاعات جنوبي-&nbsp; كوه هاي پراكنده &nbsp;</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><strong>&nbsp;دشت ها</strong></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">دشت هاي استان از نظر نحوه ي پيدايش به دودسته تراکمی و فرسایشی تقسیم می شوند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><strong>آب وهوا</strong><br />\r\n<span style=\"color:#8a8a8a\">آب وهواي استان به طوركلي تحت تاثير عرض جغرافيايي ، ارتفاع ، مكان ،امتداد كوه ها و فاصله از درياست جابه جايي توده هاي هوا&nbsp; در تعيين نوع آب وهواي هرمنطقه نقش مهمي دارد . توده هاي هوايي كه استان را تحت تاثير قرار مي دهند عبارتند از :<br />\r\nتوده هاي شمالي:اين توده هوا در ماه هاي سرد سال از عرض هاي شمالي كشور حركت مي كند ، هواي استان را تحت تاثير قرار ميدهد&nbsp; وسبب كاهش دما وبارندگي بيشتر به صورت برف مي باشد .<br />\r\nتوده هاي جنوبي : اين توده هوا در ماه هاي گرم سال از عرض هاي جنوبي&nbsp; كشور و منطقه حركت مي كند .استان را تحت تاثير قرارميدهد و موجب افزايش دما وكاهش يا قطع بارندگي مي شود .<br />\r\nتوده هاي غربي:اين توده ها در ماه هاي مرطوب به سال (آبان تا خرداد )از غرب ،جنوب غرب وشمال غرب وارد كشور شده وموجب افزايش نسبي دما وبارندگي در سطح استان مي شود .<br />\r\nبه طور كلي آب وهواي استان در نتيجه وجود كوه هاي مرتفع ، رودخانه ها وچشمه سارهاي فراوان وپرآب وپستي وبلندي هاي زياد،متغير است . بدين ترتيب كه هواي دره هاي شمالي كوه الوند ،سرد وهواي دره هاي بخش مركزي ملايم مي باشد .زمستانهاي&nbsp; اين استان سرد وپربرف وباران وتابستانهاي آن معتدل است .</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><strong>رودخانه ها</strong><br />\r\n<span style=\"color:#8a8a8a\">رودخانه هاي استان ، عموماً از برف وباران فصول مرطوب تغذيه مي شوند ودر فصل تابستان كه گياهان نياز به آب دارند به استثناي يكي دو رود مثل گاماسياب وسيمينه رود ، خشك شده يا به حداقل ميزان آبدهي مي رسند .مهمترين&nbsp; رودهاي استان عبارتند از: سيمينه رود -&nbsp; قره چاي - وايده لو - وفرجين - دره مرادبيگ -&nbsp; سيمين - عباس آباد - خاكو -سرابی-خرم ررود- حرم رود ملایر- گاماسیاب- کرزان رود&nbsp; و &hellip;</span></p>\r\n', '<p><span style=\"font-size:18px\"><strong>Normal position</strong></span><br />\r\n<span style=\"color:#8a8a8a\">The province of Hamedan has an area of ​​19493 square kilometers in the west of Iran between 33 degrees and 59 minutes to 35 degrees and 48 minutes north latitude and 47 degrees 34 minutes to 49 degrees and 36 minutes east of the meridian of Girinvich.<br />\r\nThis province is limited to the provinces of Zanjan and Qazvin, from the south to Lorestan province, from the east to the central province of Vaz west to Kermanshah province and part of Kurdistan province.</span></p>\r\n\r\n<p><br />\r\n<span style=\"font-size:18px\"><strong>Unevenness</strong></span><br />\r\n<span style=\"color:#8a8a8a\">The roughnesses of the province have undergone many changes during the geological period. One of the factors of the unevenness of the province, flowing waters in some areas, with the destruction of heights and the accumulation of materials in the hills, have reduced the height of the mountains and the formation of several plains. In some areas, the intensity of the flowing waters is so large that it has reversed the form of roughness, for example, the mountain has become a valley or the deep valley of past periods has now become mountainous. Kuh Khan Karmas in the west of Tuiskeran is an interesting example of this phenomenon.</span></p>\r\n\r\n<p><br />\r\n<span style=\"font-size:18px\"><strong>High Heights</strong></span><br />\r\n<span style=\"color:#8a8a8a\">The altitudes of the province are generally to the northwest of the southeast and are generally in the north, center and south of the province. Each of these heights is part of the mountains of Iran.<br />\r\nNorth Highlands - Middle Ages (Alvand Peak with a height of 3574 meters above sea level in this mountain range) - Southern Highlands - Scattered Mountains</span><br />\r\n<br />\r\n<span style=\"font-size:18px\"><strong>Plains</strong></span></p>\r\n\r\n<p><span style=\"color:#8a8a8a\">Plains of the province are divided into two types: condensation and erosion.</span></p>\r\n\r\n<p><br />\r\n<span style=\"font-size:18px\"><strong>weather</strong></span><br />\r\n<span style=\"color:#8a8a8a\">The province&#39;s climate is generally influenced by the latitude, altitude, location, mountain range and distance from the sea of ​​air masses in determining the type of climate in each region. Air masses affecting the province include:<br />\r\nNorth masses: This air mass in cold months is moving from northern latitudes of the country, affecting the province&#39;s air and due to lower temperature and more fluidity in the form of snow.<br />\r\nSouthern masses: This air mass in hot months is moving from the southern latitudes of the country and the region. It affects the country and increases the temperature and decreases or disrupts precipitation.<br />\r\nWestern masses: These masses enter the country during the wet months to the year (from November to June) from the west, southwest, and northwest, due to the relative increase of temperature and intensity in the province.<br />\r\nIn general, the province&#39;s climate varies due to the presence of high mountains, rivers, and large springs of water and water, and many rivers. Thus, the air of the northern valleys of Alvand Mountains is cold and the valleys of the central part of the mild climate. Temperatures in this province are cold and windy, and its forests are temperate.<br />\r\nrivers<br />\r\nThe rivers of the province are generally fed by snow and wet seasons, and in summer, plants require water, with the exception of one or two rivers such as Gamasiab and Vizhimoroud, dry or at least discharge. The main intestines of the province are: Siminrood - Gharacheh - Wideh-le-And-Fargin - Valley of Muradbig - Simin - Abbas Abad - Khakoo-Sarabi-Khorram Rroud - Hram-e-Rud Malayer-Gamasiab-Karzan-e Rud and ...</span></p>\r\n', NULL, '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(7, 4, 13, 1, 4, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(8, 5, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(9, 5, 6, 1, 2, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(10, 5, 12, 1, 3, 1, 1, NULL, NULL, NULL, NULL, 'تجربه فرهنگ اصیل ایرانی', 'Experience the genuine Iranian culture', 'تجربة الثقافة الإيرانية الحقيقية', '<p dir=\"rtl\"><span style=\"font-size:18px\"><strong>همدان</strong></span><span style=\"color:#8a8a8a\"> با دارا بودن تاريخ و تمدن كهن ، تنوع قوميت و فرهنگ هاي مختلف كه با همزيستي وتفاهم در طي قرون متمادي در كنار هم زندگي كرده اند. فرهنگ و ميراث معنوي همدان از غني ترين ادبيات و فولكلور ، بازيهاي بومي ، هنرهاي سنتي ، خوراك ، طب سنتي ، آيين هاي بومي ، پيشه هاي سنتي و غيره برخوردار است. و همچنین به هنرهاي سنتي استان مانند سفال ، منبت ، سراجي ، مروار بافي ، موتابي و بسیاری دیگر از رشته های صنایع دستی و هنری اشاره نمود. از دیگر ظرفیت های فرهنگی استان همدان آيين هاي مذهبی و سنتی مثل:مراسم ماه محرم ، فال سوزن ، فن پخت انواع شيريني هاي سنتي ، ترانه هاي كار ، بازيهاي سنتي ، مراسم آييني نوروز ، ازدواج ،پوشاك ، موسيقي ، لالايي ها ، ادبيات و غيره است. </span></p>\r\n', '<p><span><strong>Hamedan,</strong></span> <span style=\"color:#8a8a8a\"><span>with its ancient history and civilization, the diversity of ethnicity and various cultures that have lived together with each other during centuries. The culture and heritage of Hamadan are from the richest literature and folklore, indigenous games, traditional arts, food, traditional medicine, indigenous ritual, traditional trades, and so on. As well as to the traditional arts of the province such as pottery, embroidered meals, seraji, marwan baffi, moutabi and many other arts and crafts. Among other cultural capacities of Hamedan province are religious and traditional religions such as: Muharram ceremonies, horoscope, fan cooking traditional types of sweets, work songs, traditional games, Nowruz ritual ceremony, marriage, garment, music, lullabies, literature and And so on.</span></span></p>\r\n', '<p dir=\"rtl\"><span><strong>ثقافة همدان</strong></span> <span style=\"color:#8a8a8a\"><span>والتراث الروحي من أغنى الأدب والفولكلور، والألعاب التقليدية والفنون التقليدية، والغذاء، والطب التقليدي، والطقوس الأصلية والمهن التقليدية، ويتمتع بذلك. فضلا عن الفنون التقليدية في المحافظة مثل الفخار والخشب والمعدات سرج، لآلئ النسيج والحرف اليدوية والفن Mvtaby والعديد من المجالات الأخرى المذكورة. قدرة الطقوس والتقاليد الدينية المحافظة الثقافية مثل مراسم محرم، إبرة ابراج، فان طبخ الحلويات التقليدية، مسار العمل، والألعاب التقليدية مراسم طقوس رأس السنة الجديدة، وحفلات الزفاف، الملابس، والموسيقى، التهويدات والأدب و وهلم جرا.</span></span></p>\r\n', '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(11, 5, 14, 1, 4, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(12, 6, 1, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(13, 6, 6, 4, 2, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(14, 6, 12, 4, 3, 1, 1, NULL, NULL, NULL, NULL, 'همدان ۲۰۱۸', 'Hamedan 2018', 'همدان ۲۰۱۸', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">در دومین اجلاس مجمع گفتگوی کشورهای آسیایی (acd) که در شهر سیم ریپ کشور کامبوج برگزار شد شهر همدان به عنوان پایتخت گردشگری آسیا پیشنهاد و به تایید اعضاء رسید. این پیشنهاد به خواست مدیران استانی و با توجه به ظرفیت بالای گردشگری استان همدان و قابلیت های آن، در مجمع ACD ارائه گردید. به همین واسطه شهر همدان در سال 2018 پایتخت گردشگری کشورهای آسیایی است و میزبان نشست سران گردشگری کشورهای عضو گفتگوی آسیایی است. سازمان گفتگوی همکاریهای آسیایی ACD یک سازمان دولتی بینالمللی پایه گذاری شده در 18 ژوئن 2002 میباشد. اهداف اصلی این سازمان یکی توسعه همکاری های بین المللی در قاره آسیا و دیگری ادغام سازمانهایی از قبیل: اتحادیه اقتصادی اوراسیا، شورای همکاری کشورهای عرب خلیج فارس، انجمن ملل آسیای جنوب شرقی و اتحادیه همکاری های منطقه ای جنوب آسیا بوده. ایده اصلی تأسیس یک اتحادیه آسیایی - گفتگوی همکاری های آسیایی نخستین بار توسط نخست وزیر تایلند ارائه شد. در حال حاضر 34 کشور عضو این مجمع هستند: ایران- تایلند- روسیه ترکیه چین اندونزی مالزی ژاپن کره جنوبی لائوس میانمار ویتنام فیلیپین سنگاپور کامبوج برونئی مغولستان بوتان هند پاکستان بنگلادش سریلانکا قزاقستان قرقیزستان تاجیکستان ازبکستان عربستان کویت قطر عمان امارات بحرین و افغانستان. کشورهای عضو می توانند با توجه به برنامه ها، اهداف و سیاست های خود در هر یک از زمینه های همکاری به عنوان اولویت اول مجموع اعضا تبدیل شود و فعالیت نماینداین زمینه ها در کشورهای مختلف ، متفاوت خواهد بود پروژه های پیشنهادی اعضای برای ایجاد زمینه های همکاری حدود حوزه است که مهمترین آنها عبارت است از کشاورزی انرژی بیوتکنولوژی گردشگری فناوری اطلاعات الکترونیک مالی و کشور جمهوری اسلامی ایران نیز با توجه به هدف گذاری در حوزه گردشگری و حرکت در مسیر بهرمندی از این صنعت در راستای تحقق توسعه پایدار خود، پیشنهاداتی در این زمینه به مجمع ارائه کرده است عموما محتوای اجلاس های اعضای مجمع گفتگوی آسیایی غالبا دارای بخش های مشخصی است این بخش ها عبارتند از نشست کارشناسان ارشد نشست وزرای گردشگری کشورهای عضو تور بازدیدهای فنی پنل های تخصصی گردشگری پایدار و شهرهای تاریخی که متناسب با هر موضوع، نمایندگانی از کشورهای عضو در این رویداد شرکت خواهند کرد.</span></p>\r\n', '<p><span style=\"color:#8a8a8a\">The second meeting of the Asian Dialogue Forum (ACD), which was held in Cambodia&#39;s Wire Rip Town, was proposed by Hamadan as the capital of Asian Tourism and approved by the members. This proposal was submitted to the ACD Assembly at the request of provincial administrators and in view of the high tourism capacity of Hamedan province and its capabilities. The mediator of the city of Hamedan in 2018 is the capital of Asian countries tourism and hosts the Asian Tourism Summit. The Asian Development Cooperation Organization (ACD) is an international governmental organization founded on June 18, 2002. The main objectives of this organization are the development of international cooperation in Asia and the integration of organizations such as the Eurasian Economic Union, the Arab Gulf Cooperation Council, the Southeast Asian Nations Association and the South Asian Regional Cooperation Union. The idea of ​​establishing an Asian union - The Asia-Pacific Dialogue was first presented by the Prime Minister of Thailand. Currently 34 countries are members of this forum: Iran-Thailand-Russia-Turkey-China-Indonesia-Malaysia-Japan-South Korea-Laos-Myanmar-Vietnam-Philippines-Singapore-Cambodia-Brunei-Mongolia-Bhutan-India-Pakistan-Bangladesh-Sri Lanka-Kazakhstan Kyrgyzstan Tajikistan Uzbekistan Kuwait Qatar Oman Emirates Bahrain and Afghanistan. Member States can, according to their programs, goals and policies in each of the fields of cooperation, become the first priority of the total membership, and will be active. These areas will vary from country to country. Members&#39; proposed projects to create areas The cooperation is around the field, the most important of which is agriculture tourism, tourism biotechnology, electronic information technology and the Islamic Republic of Iran. Considering the goal of tourism and moving on the path to this industry in order to realize its sustainable development, the suggestions in this The field has been presented to the general assembly The meetings of the members of the Asian Dialogue Forum often have specific sections. These are the meeting of the senior experts of the meeting of the Ministers of Tourism of the member countries. Technical visits to the permanent tourism panels and the historic cities that are tailor-made for each topic, representatives of the member countries of the event Will participate.</span></p>\r\n', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">يذكر ان منظمة التعاون الانمائى الاسيوى هى منظمة حكومية دولية تأسست فى 18 يونيو عام 2002. وقدم حوار التعاون الآسيوي لأول مرة من قبل رئيس وزراء تايلاند - الفكرة الرئيسية من الاتحاد الآسيوي. يمكن للدول الأعضاء وفقا للخطط والأهداف والسياسات في كل من مجالات التعاون كأولوية قصوى يصبح عدد الأعضاء الحقول&nbsp; النشطة في مختلف البلدان ستكون مختلفة اقترح أعضاء مشاريع لإنشاء حقول العمل في جميع أنحاء المنطقة، وأبرزها الزراعة والطاقة والتكنولوجيا الحيوية والسياحة وتكنولوجيا المعلومات التمويل الإلكتروني وجمهورية إيران الإسلامية فيما يتعلق المستهدفة في مجال السياحة والسعي وراء ممارسة هذه الصناعة من أجل تحقيق التنمية المستدامة، واقتراحات في هذا وقد تم تقديم هذا المجال إلى الجمعية العامة اجتماع لأعضاء رابطة فاتنة الآسيوية في كثير من الأحيان أجزاء معينة من هذا القسم ويجتمع كبار خبراء الاجتماع الوزاري حول السياحة في جولة يضرب المتخصصة لوحة الفنية السياحة والتاريخية المدن المستدامة التي تتناسب مع كل موضوع، وممثلين عن الدول الأعضاء في الحدث سوف تشارك.</span></p>\r\n', '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(15, 6, 9, 4, 4, 1, 0, NULL, NULL, NULL, NULL, 'همدان ارزشمندترین و تاریخی‌ترین شهر ایران', 'Hamedan is the most valuable and historic city in Iran', 'هامدان هي المدينة الأكثر قيمة وتاريخية في إيران', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">استان همدان شایستگی بسیاری در صنعت گردشگری به همین دلیل است و با توجه به ظرفیت ها، توانایی ها، تاریخی، امکانات و موقعیت جغرافیایی و اقلیمی، گردشگری به عنوان اصلی اصلی توسعه استان معرفی شده است. اجلاس مهم اعضا وابسته سازمان گردشگری جهانی در سال 2018 و نشست اعضای سازمان همکاری آسیا در هامدان فرصت بسیار خوبی برای معرفی این استان و جذب گردشگران است که برای استفاده از این فرصت ها آماده شده است. برنامه های متعدد و متنوع در سطح ملی و جهانی برای سال 2018 در همدان تدارک دیده شده است که امیدواریم با این روند، با همکاری شایستگی به جهانیان معرفی و خاطراتی خوش برای همه گردشگران، به ویژه مهمانان عزیز، رویدادهای بین المللی 2018 را ایجاد کنید.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">محمد ناصر نیکبخت، استاندار همدان</span></p>', '<p style=\"text-align:justify\"><span style=\"color:#8a8a8a\">Hamedan province has many talents in the tourism industry. Because of this, due to capabilities, abilities, historical monuments, facilities and geographical and climatic location, tourism has been introduced as the main axis of the province&#39;s development. The important meeting of the affiliated members of the World Tourism Organization in 2018 and the meeting of the members of the Organization of Asian Cooperation in Hamadan is a great opportunity to introduce the province and attract tourists who are prepared to use these opportunities. Various national and The World is scheduled for Hamadan in 2018, which we hope will introduce Hamadan to the world with merit and give a memorable welcome to all tourists, especially Dear Guests, for the 2018 International Events.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:null\">Mohamad Naser Nikbakht</span></p>\r\n', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">محافظة حمدان لديها العديد من المواهب في صناعة السياحة، ولهذا السبب، ونظرا للقدرات والقدرات والمعالم التاريخية والمرافق والموقع الجغرافي والمناخ، وقد أدخلت السياحة باعتبارها المحور الرئيسي للتنمية في المحافظة. إن الاجتماع الهام للأعضاء المنتسبين لمنظمة السياحة العالمية في 2018 واجتماع أعضاء منظمة التعاون الآسيوي في همدان هو فرصة عظيمة لإدخال المحافظة وجذب السياح الذين هم على استعداد لاستخدام هذه الفرص، ومن المقرر أن العالم في همدان في عام 2018، والتي نأمل أن أعرض همدان إلى العالم مع الجدارة وإعطاء ترحيبا لا تنسى لجميع السياح، وخاصة الضيوف الكرام، ل 2018 الأحداث الدولية.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">محمد ناصر نیکبخت</span></p>\r\n', '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(16, 2, 9, NULL, 3, 1, 1, '/page/hamedan/handicraft', 'بیشتر', 'Read More', 'اکثر', 'صنایع دستی همدان تبلور هنر و زیبایی', 'Handicrafts of Hamedan Crystal Art and Beauty', 'الحرف اليدوية من همدان كريستال الفن والجمال', 'همدان مهد هنرمندان و صنعتگرانی است که با ذوق و قریحه خود جلوه هایی از زیبایی و هنر را به رخ جهانیان کشیده اند. تبلور این هنرمندی در پس ویترین فروشگاه های صنایع دستی این استان خودنمایی می کند. با خرید صنایع دستی همدان هنر را به خانه خود ببرید.', 'Hamedan is a cradle of artists and artisans who, with their passion, have drawn the effects of beauty and art into the world. The crystallization of this artist is reflected in the showcase of the handicraft stores in the province. Get your own home-made art by handing Hamedan.', 'همدان هو مهد للفنانين والحرفيين الذين، مع شغفهم، وقد رسمت آثار الجمال والفن في العالم. تبلور هذا الفنان ينعكس في عرض مخازن الحرف اليدوية في المحافظة. الحصول على الفن الخاص بك محلية الصنع من خلال تسليم حمدان.', '2018-02-17 20:30:00', '2018-02-17 20:30:00'),
(17, 2, 2, NULL, 2, 1, 1, NULL, NULL, NULL, NULL, 'آغاز گردشگری اینجاست', 'The beginning of tourism is here', 'بداية السياحة هنا', '<p dir=\"rtl\" style=\"text-align:center\"><strong>همدان</strong> سرشار از جاذبه های متعدد و متنوع گردشگری است. این استان را بعنوان مقصد گردشگری خود انتخاب و از آن لذت ببرید.</p>\r\n', '<p style=\"text-align:center\"><strong><span style=\"color:null\">Hamedan</span></strong><span style=\"color:#8a8a8a\"> is full of diverse tourist attractions. Choose the province as your tourist destination and enjoy it.</span></p>\r\n', '<p dir=\"rtl\" style=\"text-align:center\"><strong><span style=\"color:null\">همدان</span></strong><span style=\"color:#8a8a8a\"> مليء بمناطق الجذب السياحي المتنوعة. اختيار المحافظة كوجهة سياحية الخاص بك والاستمتاع بها.</span></p>\r\n', '2018-02-17 20:30:00', '2018-02-17 20:30:00'),
(18, 2, 7, NULL, 4, 1, 1, NULL, NULL, NULL, NULL, 'همدان پایتخت تاریخ و تمدن', 'Hamedan Capital of History and Civilization', 'همدان عاصمة التاريخ والحضارة', NULL, NULL, NULL, '2018-02-17 20:30:00', '2018-02-17 20:30:00'),
(19, 7, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-18 20:30:00', '2018-02-18 20:30:00'),
(20, 7, 6, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-18 20:30:00', '2018-02-18 20:30:00'),
(21, 7, 12, 1, 3, 1, 1, NULL, NULL, NULL, NULL, 'ثبت خاطرات به یاد ماندنی در شهر کهن', 'Record memorable memories in the ancient city', 'سجل ذكريات لا تنسى في المدينة القديمة', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">استان همدان بیش از 1752 اثر&nbsp; تاریخی ، فرهنگی و طبیعی دارد که از اهمیت و جایگاه ویژه ای برخوردار هستند. با توجه به همین اهمیت است که تعداد 1004 اثر از این آثار در فهرست آثار ملی ایران ثبت رسیده. همدان مهد شهرنشینی است و شهرتاریخی </span><span style=\"color:null\"><strong>هگمتانه</strong></span><span style=\"color:#8a8a8a\"> گواه این موضوع است.</span></p>\r\n', '<p style=\"text-align:justify\"><span style=\"color:#8a8a8a\">There are more than 1752 historical, cultural and natural monuments in Hamedan province of particular importance. With this in mind, 1004 of these works have been registered in the National Iranian Book List. Hamedan is a township livelihood and </span><strong><span style=\"color:null\">Hegmataneh</span></strong><span style=\"color:#8a8a8a\"> city is a witness to this issue.</span></p>\r\n', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">وهناك أكثر من 1752 آثار تاريخية وثقافية وطبيعية في مقاطعة هامدان ذات أهمية خاصة. ومع أخذ ذلك في الاعتبار، تم تسجيل 1004 من هذه الأعمال في قائمة الكتب الإيرانية الوطنية. همدان هو مصدر رزق في البلدة ومدينة </span><span style=\"color:null\"><strong>هگمتانه</strong></span><span style=\"color:#8a8a8a\"> شاهدا على هذه القضية.</span></p>\r\n', '2018-02-18 20:30:00', '2018-02-18 20:30:00'),
(22, 7, 9, 1, 4, 1, 0, '/page/hamedan/attraction/abu-ali-sina', 'بیشتر', 'Read More', 'اکثر', 'پور سینا نابغه شرق', 'Boo-Ali Sina is the genius of the East', 'بوعلي سينا هو عبقرية الشرق', 'بنای آرامگاه شیخ الرئیس ابن سینا، فیلسوف، دانشمند در سال 1330 توسط انجمن آثار ملی ایران با طرح و نقشه هوشنگ سیحون در محل ساختمان قدیمی آن احداث گردید. این اثر درسال 1376 باشماره 1869 در لیست آثار ملی ایران به ثبت رسیده است.درسال 1387 بخشی ازبنا به موزه طب اختصاص داده شد که بیش از30 تابلو نمونه گیاهان دارویی، توضیحات وخواص آنها، کتب خطی و چاپی نفیس مربوط به آثار بوعلی سینا  وتعدادی ابزار و ادوات اولیه پزشکی از جنس سفال وشیشه به نمایش گذاشته شده است.', 'The construction of the shrine of Shaykh al-Rais Ibn Sina, a philosopher, scientist, was created in 1330 by the Iranian National Monuments Association with the design and map of Houshang Sihoun in his old building. This work was recorded in 1376 in the National Library of Iran in 1869. In December 2008, a part of the Buddha was dedicated to the Museum of Medicine, with more than 30 samples of herbs, their descriptions and their exquisite printed and printed books related to Bu-Ali Sinai\'s works and a number of tools And basic medical devices from pottery and sticks.', 'تم إنشاء ضريح الشيخ الريس ابن سينا، وهو فيلسوف، عالم، في عام 1330 من قبل جمعية الآثار الوطنية الإيرانية مع تصميم وخريطة هوشانغ سيحون في مبنىه القديم. وقد تم تسجيل هذا العمل في عام 1376 في المكتبة الوطنية الإيرانية في عام 1869. في ديسمبر 2008، خصص جزء من بوذا لمتحف الطب، مع أكثر من 30 عينة من الأعشاب وأوصافها وكتبها المطبوعة والمطبوعة الرائعة المتعلقة بأعمال بو علي سيناء وعدد من الأدوات والأجهزة الطبية الأساسية من الفخار والعصي.', '2018-02-18 20:30:00', '2018-02-18 20:30:00'),
(23, 7, 12, 1, 5, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">استان همدان جزء استان&zwnj;هاى غربى ايران است که از شمال به استان زنجان، از جنوب به استان لرستان، از شرق به استان مرکزى و از غرب به استان&zwnj;هاى کرمانشاه و کردستان محدود مى&zwnj;شود. بلندترين نقطه استان همدان، </span><span style=\"color:null\"><strong>قله الوند</strong></span><span style=\"color:#8a8a8a\"> با ارتفاع ۳۵۷۴ متر و کم ارتفاع ترین مکان اين استان اراضى عَمْرآباد در کنار رود قره&zwnj;چاى در بخش شرا و پيشخوار است. استان همدان از نظر تقسيمات کشورى، ۸ شهرستان، &zwnj; ۱۶ شهر، ۱۸ بخش و ۶۸ دهستان دارد و مرکز آن شهر همدان است.</span><br />\r\n&nbsp;</p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><strong><span style=\"color:null\">شهرستان&zwnj;هاى اين استان عبارت&zwnj;اند از:</span></strong><br />\r\n<span style=\"color:#8a8a8a\">همدان، ملاير،&nbsp;تويسرکان، نهاوند، کبودرآهنگ، اسدآباد، بهار ،رزن و فامنین.</span></p>\r\n', '<p style=\"text-align:justify\"><span style=\"color:#8a8a8a\">Hamedan province is one of the western provinces of Iran, which is limited north to Zanjan province, south to Lorestan province, east to central province and west to Kermanshah and Kurdistan provinces. The highest point of Hamedan province, </span><strong><span style=\"color:null\">Alvand peak</span></strong><span style=\"color:#8a8a8a\"> with a height of 3574 meters, and the lowest elevation of this province, is the Omarabad lands along the Gharakhay River in the Shara and Forekhand. Hamedan province has 8 districts, 16 cities, 18 districts and 68 rural districts, and the center of this city is Hamadan. The cities of this province are: Hamedan, Nahavand, Toyskerkan, Malayer, Kabudarah, Asadabad, Bahar, Razan and Famenin.</span></p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n<strong><span style=\"color:null\">Cities include:</span></strong><br />\r\n<span style=\"color:#8a8a8a\">Hamadan, Asadabad, Bahar, Ghorveh Dargizin, Kabudarah, Laljin, Marianj, Malayer, Samen, Nahavand, Tuyserkan, Sarkan, Razan, Famenin, Salehabad and Firouzan.</span></p>\r\n', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">تضم مقاطعة حمدان 8 مناطق و 16 مدينة و 18 مقاطعة و 68 منطقة ريفية، ووسط مدينة همدان.<br />\r\nمدن هذه المحافظة هي:<br />\r\nهمدان، نهاوند، تويسركان، ملاير، كابودارا، أسد آباد، بحر، رزان وفامنين.<br />\r\nتشمل المدن:<br />\r\nهمدان، أسد أباد، الربيع، قروه درجزين، كبودرأهنغ، لالجين، مریانج، ملاير، السمن، حليقي الرؤوس، تويسركان، سيركان، روزين، الفاميني، وفيروز هو صالح آباد.</span></p>\r\n', '2018-02-18 20:30:00', '2018-02-18 20:30:00'),
(24, 7, 13, 1, 6, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-20 20:30:00', '2018-02-20 20:30:00'),
(25, 8, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-20 20:30:00', '2018-02-20 20:30:00'),
(26, 8, 6, 1, 2, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-20 20:30:00', '2018-02-20 20:30:00'),
(27, 8, 12, 1, 3, 1, 0, NULL, NULL, NULL, NULL, 'بنای یادبود شیخ الریسی ابن سینا', 'Monument to Sheikh Al-Raisi Avicenna', 'النصب التذكاري للشيخ الريسي ابن سينا', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">ابن سینا از معروف&zwnj;ترین دانشمندان ایران&zwnj;زمین است. اوبیش از دویست کتاب در زمینه&zwnj;های مختلف طب و فلسفه و... نگاشته است. به دلیل آنکه در آن عصر، عربی زبان رایج آثار علمی بود، ابن سینا و سایر دانشمندان ایرانی که در آن روزگار می&zwnj;زیستند &rlm;کتابهای خود را به زبان عربی نوشتند. بعدها بعضی از این آثار به زبانهای دیگر از جمله فارسی ترجمه شد.&rlm; افزون بر این، ابن&zwnj;سینا در ادبیات فارسی نیز دستی قوی داشته&zwnj;است. بیش از ۲۰ اثر فارسی به او منسوب است که از میان آنها انتساب دانشنامه علائی و رساله نبض بهاو مسلم است.آثار فارسی ابن&zwnj;سینا، مانند سایر نثرهای علمی زمان وی، با &rlm;رعایت ایجاز و اختصار کامل نوشته شده&zwnj;است. آثار فراوانی از ابن&zwnj;سینا به جا مانده و یا به او نسبت داده شده که فهرست جامعی از آن&zwnj;ها در فهرست نسخه&zwnj;های مصنفات &rlm;ابن سینا آورده شده&zwnj;است. این فهرست شامل ۱۳۱ نوشته اصیل از ابن سینا و ۱۱۱ اثر منسوب به او است.که البته بسیاری از این رسالات و کتابها در چندین مجلد تالیف شده است.</span></p>\r\n', '<p style=\"text-align:justify\"><span style=\"color:#8a8a8a\">Avicenna is one of the most famous scientists in Iran. He has written about two hundred books on various fields of medicine and philosophy. Because Arabic was the language of scientific work in that era, Ibn Sina and other Iranian scholars who lived at that time wrote their books in Arabic. Later, some of these works were translated into other languages, including Farsi. In addition, Ibn Sina had a strong hand in Persian literature. More than 20 Persian works are attributed to him, among which the assignment of the encyclopedia of Ala&#39;i and the treatise of the pulse is certain. The works of Farsi Ibn Sina, like other scientific prose of his time, have been written with complete adherence and complete abbreviation. Many works have been left or attributed to Ibn Sinai, a comprehensive list of which is included in the list of editions of Ibn Sina. This list contains 131 original writings from Avicenna and 111 works related to him. Of course, many of these essays and books have been compiled in several volumes.</span></p>\r\n', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">ابن سينا ​​هو واحد من أشهر العلماء في إيران. وقد كتب حوالي مائتي كتاب في مختلف مجالات الطب والفلسفة. لأن اللغة العربية كانت لغة العمل العلمي في تلك الحقبة، كتب ابن سينا ​​وغيره من العلماء الإيرانيين الذين عاشوا في ذلك الوقت كتبهم باللغة العربية. وفي وقت لاحق، ترجمت بعض هذه الأعمال إلى لغات أخرى، بما فيها اللغة الفارسية. وبالإضافة إلى ذلك، كان ابن سينا ​​يد قوية في الأدب الفارسي. وينسب إليه أكثر من 20 عملا فارسيا، من بينها تكليف موسوعة العلاء وأطروحة النبض. أعمال الفارسية ابن سينا، مثل غيرها من النثر العلمي من وقته، وقد كتبت مع الالتزام الكامل والاختصار الكامل. وقد تركت العديد من الأعمال أو نسبت إلى ابن سيناء، وهي قائمة شاملة منها مدرجة في قائمة طبعات ابن سينا. تحتوي هذه القائمة على 131 كتابة أصلية من ابن سينا ​​و 111 عملا له. وبطبيعة الحال، تم تجميع العديد من هذه المقالات والكتب في عدة مجلدات.</span></p>\r\n', '2018-02-20 20:30:00', '2018-02-20 20:30:00'),
(28, 8, 14, 1, 4, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-21 20:30:00', '2018-02-21 20:30:00');
INSERT INTO `tbl_sections` (`id`, `sPId`, `sStId`, `sMmId`, `sOrder`, `sState`, `sFullScreen`, `sLink`, `sLinkFaTitle`, `sLinkEnTitle`, `sLinkArTitle`, `sFaSubject`, `sEnSubject`, `sArSubject`, `sFaDescription`, `sEnDescription`, `sArDescription`, `created_at`, `updated_at`) VALUES
(29, 9, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(30, 9, 6, 1, 2, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(31, 9, 12, 1, 3, 1, 1, NULL, NULL, NULL, NULL, 'علیصدر بزرگترین غار آبی جهان', 'Alisadr is the world\'s largest blue cave', 'أليسادر هو أكبر كهف أزرق في العالم', '<p dir=\"rtl\" style=\"text-align:justify\"><strong><span style=\"color:null\">غار علیصدر</span></strong><span style=\"color:#8a8a8a\"><strong> </strong>یکی از غارهای تالابی ایران و از معدود غارهای آبی جهان است. علیصدر همچنین بزرگ&zwnj;ترین غار آبی جهان می&zwnj;باشد. این غار در ارتفاعات ساری قیه نزدیک روستای علی&zwnj;صدر شهرستان کبودراهنگ در استان همدان واقع شده&zwnj;است. ارتفاع غار از سطح دریا ۲۱۰۰ متر است. محوطه غار دالان&zwnj;های پیچ در پیچ و دهلیزهای متعددی دارد. از مجموعه رشته آبها، دریاچه بزرگی در درون غار بوجود آمده و از این رو نفوذ به ژرفای غار تنها با قایق میسر است. غار علیصدر یکی از دیدنی&zwnj;های جهانگردی استان همدان است.</span></p>', '<p style=\"text-align:justify\"><strong><span style=\"color:null\">Alisadr Cave</span></strong><span style=\"color:#8a8a8a\"> is one of the wetlands in Iran and one of the few blue caves in the world. Alisadr is also the largest blue cave in the world. [Citation needed] This cave is located at Sighi heights near the village of Alisadr in the city of Kabotrajgh in Hamadan province. The height of the cave is 2100 meters above sea level. [2] The cave area has twisted corridors and corridors. From a series of waters, a large lake has been created inside the cave, and thus penetration into the cave depths is possible only by boat. Alisadr Cave is one of the tourist attractions of Hamedan province.</span></p>\r\n', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:null\"><strong>كهف علیصدر</strong></span><span style=\"color:#8a8a8a\"> هو واحد من الأراضي الرطبة في إيران واحدة من الكهوف الزرقاء القليلة في العالم. أليسادر هو أيضا أكبر كهف أزرق في العالم. [بحاجة لمصدر] يقع هذا الكهف في مرتفعات سيغي بالقرب من قرية اليسادر في مدينة كابوتراج في مقاطعة همدان. ارتفاع الكهف هو 2100 متر فوق مستوى سطح البحر. [2] منطقة الكهوف لديها ممرات وممرات ملتوية. من سلسلة من المياه، تم إنشاء بحيرة كبيرة داخل الكهف، وبالتالي الاختراق في أعماق الكهف هو ممكن فقط عن طريق القوارب. كهف أليسادر هو واحد من مناطق الجذب السياحي في مقاطعة هامدان.</span></p>\r\n', '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(32, 10, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(33, 10, 6, 1, 2, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(34, 10, 12, 1, 3, 1, 0, NULL, NULL, NULL, NULL, 'صنایع دستی همدان تبلور هنر و زیبایی', 'Handicrafts of Hamedan Crystal Art and Beauty', 'الحرف اليدوية من همدان كريستال الفن والجمال', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">با توجه پیشینه تاریخی و فرهنگی استان همدان این استان به عنوان یکی از مهمترین قطب های فعالیت صنعتگران و هنرمندان صنایع دستی ایران به حساب می&zwnj;آید و در حال حاضر بیش از&nbsp; 150&nbsp; رشته صنایع دستی در&nbsp; استان همدان فعال است. از جمله این هنرها می توان به </span><strong><span style=\"color:null\">سفال</span></strong><span style=\"color:#8a8a8a\"> و سراميک ، مصنوعات چوبی، مصنوعات چرمی، زيراندازها، رودوزي&shy;های سنتی و پاي&shy;پوش&shy;های سنتيی، سنگ&shy;تراشی، بافتني&shy;های سنتی و ... اشاره نمودکه غالبا بصورت بومی و دارای جایگاه خاصی هستند. برابر آخرين آمارهای موجود، تعداد كارگاه &shy;های این استان 22401 مورد است که تعداد شاغلين این کارگاه ها&nbsp; 43646&nbsp; نفر می باشد.&nbsp; تاكنون 21مورد از رشته&shy; های صنايع دستی استان&nbsp; ثبت ملي شده &shy;اند. این استان مهد هنرمندان و صنعتگران برجسته&zwnj;ای است که یادگارهای بسیار ارزشمندی از خود بجای گذاشته اند. امروزه نیز این دیار محل فعالیت بسیاری از هنرمندان با ذوق صنایع دستی است به نحوی که موفق به اخذ درجه يک هنری برابر با دكترای افتخاری برای&nbsp; 10 مورد نشان اصالت مرغوبيت كالا از سازمان بين &shy;المللي يونسكو و 73مورد نشان ملي مرغوبيت صنايع دستي شده اند. این استان مهد سفال و منبت ایران زمین است. شهر جهانی سفال لالجین و شهر ملی منبت ملایر در این استان هستند و تویسرکان نیز یکی از قطب های اصلی منبت ایران به حساب می آید.&nbsp; در مجموع استان همدان مهد هنر و اندیشه است و در طول تاریخ بزرگان زیادی را به دنیای بشریت عرضه کرده است.</span></p>\r\n', '<p style=\"text-align:justify\"><span style=\"color:#8a8a8a\">Considering historical and cultural background of Hamedan province, this province is considered as one of the most important poles of activity of craftsmen and craftsmen of Iran. Currently more than 150 arts are active in Hamedan province. Among these arts can be </span><span style=\"color:null\"><strong>pottery</strong></span><span style=\"color:#8a8a8a\"> and ceramics, wood artifacts, leather artifacts, submarines, traditional rovodians and traditional footwear, rock drilling, traditional knitwear, etc. Often they are native and have a special place. As far as the latest statistics are concerned, the number of workshops in the province is 22,401, of which 43,646 are in the workshops. So far, 21 of the national handicraft industries have been registered. This province is a cradle of artistic and artistic craftsmen who have relied on valuable relics. Today, this is the site of many artistic craftsmanship craftsmen who have succeeded in obtaining an honorary doctoral degree in 10 honors from the UNESCO International Organization for International Trade and 73 national handicraft labels. This province is the guardian of the province. Pottery and embellishment of Iran is the land. The city of Laljin is the world&#39;s largest pottery and the national city of Malayer in the province, and Tuyserkan is considered one of the main hubs of Iran.&nbsp; In total, the province of Hamedan is a cradle of art and thought, and throughout history has brought many elders into the world of humanity.</span></p>\r\n', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">وبالنظر إلى الخلفية التاريخية والثقافية لمقاطعة حمدان، تعتبر هذه المقاطعة واحدة من أهم أقطاب نشاط الحرفيين والحرفيين في إيران. ويعمل حاليا أكثر من 150 فنيا في مقاطعة همدان. من بين هذه الفنون يمكن أن يكون الفخار والسيراميك، والتحف الخشبية، والتحف والجلود والغواصات، روفوديانز </span><span style=\"color:null\"><strong>التقليدية</strong></span><span style=\"color:#8a8a8a\"> والأحذية التقليدية، حفر الصخور، تريكو التقليدية، الخ في كثير من الأحيان هم الأصلي ولها مكان خاص. وفيما يتعلق بآخر الاحصاءات، بلغ عدد حلقات العمل في المقاطعة 424 22 حلقة عمل، منها 646 43 حلقة عمل. وقد تم حتى الآن تسجيل 21 من الصناعات اليدوية الوطنية.هذه المحافظة هي مهد الحرفيين الفنيين والفنيين الذين اعتمدوا على الاثار القيمة. اليوم، هذا هو موقع العديد من الحرفيين الحرفيين الفنيين الذين نجحوا في الحصول على درجة الدكتوراه الفخرية في 10 مرتبة الشرف من منظمة اليونسكو الدولية للتجارة الدولية و 73 تسميات الحرف اليدوية الوطنية. هذه المقاطعة هي الوصي على المحافظة. الفخار وتزيين إيران هي الأرض. مدينة لالجين هي أكبر الفخار في العالم ومدينة مالايير الوطنية في المحافظة، ويعتبر توسيركان واحدة من المحاور الرئيسية لإيران.&nbsp; في المجموع، محافظة هامدان هي مهد الفن والفكر، وعلى مر التاريخ جلبت العديد من الشيوخ في عالم الإنسانية.</span></p>\r\n', '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(35, 10, 9, 1, 4, 1, 0, '/hamedan/page/hamedan/handicraft/pottery-and-ceramics', 'بیشتر', 'Read More', 'اکثر', 'هنر در دستان هنرمندان شهر جهانی سفال', 'Art in the hands of the world-famous pottery artists', 'الفن في أيدي الفنانين الفخار الشهيرة على مستوى العالم', 'هنر سفالگری نسل به نسل به مردم شهر لالجین رسیده و سفالگری، هنر آبا و اجدادی مردم این شهر است ، سفال های تولیدی این منطقه از کیفیت و اصالت فراوانی  برخوردارند و هنوز هم مردم لالجین برای ساخت سفال‌ از چرخ ‌های دستی استفاده می ‌کنند.', 'The pottery art of the generation has come to the people of the city of Laljin, and pottery is the art of the ancestors of this city, the pottery of this area is of high quality and authenticity, and the people of Laljin still use handcuffs to make pottery.', 'فن الفخار من جيل قد حان لشعب مدينة لالجين، والفخار هو فن أجداد هذه المدينة، والفخار من هذه المنطقة هي ذات جودة عالية وأصالة، وشعب لالجين لا تزال تستخدم الأصفاد لجعل الفخار.', '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(36, 2, 15, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(37, 11, 1, 3, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(38, 11, 6, 3, 2, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(39, 11, 12, 3, 3, 1, 0, NULL, NULL, NULL, NULL, 'شیره پزی در ملایر قدمتی دیرین دارد', 'The salty salmon in Malayer has a long history', 'سمك السلمون المالح في الملايو لديه تاريخ طويل', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">فصل پاییز که می شود حال و هوای روستاهای </span><span style=\"color:null\">ملایر</span><span style=\"color:#8a8a8a\"> حال و هوای دیگری است. جنب و جوش و شادی همه جا دیده می شود. انگار قرار است اتفاق مهمی بیافتد. کمی که توجه کنیم می فهمیم که فصل برداشت انگور رسیده و هر یک از اهالی به نحوی با این محصول سر و کار دارند. در این میان رسم و آیینی سنتی خودنمایی بیشتری میکند. و آن شیره پزی است. مراسم شیره پزی در همه روستاهای ملایر انجام می شود اما اگر گذرتان به مانیزان بیافتد می توان این مراسم را به خوبی مشاهده و از آن لذت برد.</span></p>', '<p style=\"text-align:justify\"><span style=\"color:#8a8a8a\">The fall season, when the weather of the villages of </span><span style=\"color:null\">Malayer</span><span style=\"color:#8a8a8a\"> is another. Joy and joy are seen everywhere. It seems that something is going to happen. We notice a little bit that we know that the grape harvest season has come and each of the villagers is somehow dealing with this product. In the meantime, the traditional tradition is more spectacular. And it&#39;s a sip. The salty ceremonies are performed in all villages of Malayer, but if you pass through, you can enjoy the ceremony well and enjoy it.</span></p>', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">موسم الخريف، عندما يكون الطقس من قرى </span><span style=\"color:null\">ملاير</span><span style=\"color:#8a8a8a\"> هو آخر. وينظر الفرح والفرح في كل مكان. يبدو أن شيئا ما سيحدث. نلاحظ قليلا أننا نعرف أن موسم الحصاد العنب قد حان وكل من القرويين التعامل بطريقة أو بأخرى مع هذا المنتج. في هذه الأثناء، التقليد التقليدي هو أكثر إثارة. وانها رشفة. يتم تنفيذ الاحتفالات المالحة في جميع قرى الملاير، ولكن إذا كنت تمر من خلال، يمكنك التمتع الحفل جيدا والاستمتاع بها.</span></p>\r\n', '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(40, 11, 14, 3, 4, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(41, 11, 12, 3, 5, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">شیره پزی در ملایر قدمتی دیرین دارد و به مرور تبدیل به یکی از رسوم این دیار شده است. در کنار تولید شیره انگور ؛نشاط ؛شادی و صمیمیت دستاورد های مهم دیگر این رسم کهن است. همه اهالی به دنبال تهیه انگور مناسب برای پخت شیره هستند تا بهترین محصول بدست آید. وسایل و ابزار خاص این کار که از پاییز سال گذشته در انبار بوده اند دوباره برای پخت شیره سال جدید بکار می آیند. همه اعضای خانواده بخصوص بانوان در انجام این کار نقش مهمی دارند. شیره پزی کاری جمعی است و همه باید کمک کنند. بهترین شیره انگور ایران در ملایر تولید می شود و شهرتی فراوان دارد. </span></p>\r\n', '<p style=\"text-align:justify\"><span style=\"color:#8a8a8a\">The salty salmon in Malayer has a long history and has become one of the customs of this country. In addition to the production of grape juice, vitality, happiness and intimacy, other important achievements of this ancient tradition. All people are looking for grapes suitable for baking sour until the best product is obtained. Special tools and equipment that have been in stock since last fall have been used again for the soup of the new year. All family members, especially women, have an important role to play. Cooking is a collective thing and everyone should help. The best Iranian grape juice is produced in Malayer and has a great reputation.</span></p>\r\n', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">السلمون المالح في الملايو لديه تاريخ طويل وأصبح واحدا من عادات هذا البلد. بالإضافة إلى إنتاج عصير العنب والحيوية والسعادة والحميمية، والإنجازات الهامة الأخرى لهذا التقليد القديم. كل الناس يبحثون عن العنب مناسبة للخبز الحامض حتى يتم الحصول على أفضل المنتجات. وقد استخدمت الأدوات والمعدات الخاصة التي كانت في المخزون منذ الخريف الماضي مرة أخرى لحساء السنة الجديدة. ويتعين على جميع أفراد الأسرة، ولا سيما النساء، أن يضطلعوا بدور هام. الطبخ هو شيء جماعي ويجب على الجميع أن يساعد. يتم إنتاج أفضل عصير العنب الإيراني في مالايير ولها سمعة كبيرة.</span></p>\r\n', '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(42, 11, 13, 3, 6, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(43, 11, 12, 3, 7, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">شيره پزي در روستا، بعد از برداشت انگور و معمولا در پايان شهريورماه انجام مي&zwnj;شود كه علاوه بر تامين مواد غذايي مورد نظر جهت فروش، در تامين مالي خانواده نيز موثر است. براي پخت شيره از انگور كشمشي استفاده مي&zwnj;كنند، چون آب&zwnj; دارتراست. از آب انگور علاوه بر شيره پزي، شربت و شيريني نيز درست مي&zwnj;كنند.علاوه بر ویژگی های منحصر به فرد شیره انگور ملایر؛ به ابعاد مختلف فرهنگی و آیینی این مراسم پرداخته می شود. به همین خاطر است که هر ساله و همزمان با شیره پزی؛جشنواره ای شاد و مفرح توسط مردم و مسولین برگزار می شود. محل این جشنواره روستای زیبای ملایر است که مردمانی مهربان؛مهمان نواز و شاد دارد. در این جشنواره علاوه بر نمایش مراحل تهیه شیره انگور؛ عرضه محصولات با کیفیت مرتبط با انگور؛ نمایش و فروش هنرهای سنتی و صنایع دستی و جشن های مفرح زیادی برگزار می شود. بازدید از این جشنواره شاد به شما که شادی و فرهنگ غنی ایران زمین را دوست دارید؛ توصیه می شود. حتما لذت خواهید برد.</span></p>', '<p style=\"text-align:justify\"><span style=\"color:#8a8a8a\">Sweets in the countryside, after harvesting grapes, are usually done at the end of September, which, in addition to providing the food for sale, is also effective in providing family financing. They use grape juice to cook bacon, because it is juicy. In addition to sparkling wine, grape juice also makes syrup and sweets. In addition to the unique attributes of the Malayer grape juice, this ceremony is devoted to various cultural and ritual dimensions. That is why every year, along with the grouse, a happy and fun festival is held by people and officials. The site of this festival is a beautiful Malayer village, which has friendly, hospitable and happy people. In addition to the presentation of grape juice, the presentation of grapevine quality products, the display of traditional crafts and handicrafts and many fun celebrations will take place at the festival. Visiting this joyous festival will tell you that you like the country&#39;s richness and rich culture. You will surely enjoy it.</span></p>\r\n', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">وعادة ما يتم الحلويات في الريف، بعد حصاد العنب، في نهاية شهر أيلول / سبتمبر، والتي، بالإضافة إلى توفير الغذاء للبيع، هي أيضا فعالة في توفير التمويل الأسري. يستخدمون عصير العنب لطهي لحم الخنزير المقدد، لأنه عصير. إلى جانب عصير العنب، عصير العنب يجعل الشراب والحلويات.بالإضافة إلى الخصائص الفريدة لعصير العنب الملاير، فإنه موجه إلى مختلف الجوانب الثقافية والطقوس الحفل. هذا هو السبب في كل عام، جنبا إلى جنب مع الطعن، ويقام مهرجان سعيد وممتع من قبل الشعب والسلطات. موقع هذا المهرجان هو قرية الملايو الجميلة، التي لديها ودية، مضياف وسعيدة الناس. بالإضافة إلى عرض عصير العنب، وتقديم منتجات ذات جودة الكرمة، وعرض الحرف التقليدية والحرف اليدوية، والعديد من الاحتفالات متعة تجري في المهرجان. زيارة هذا المهرجان الفرح سوف اقول لكم ان كنت مثل ثراء البلاد وثقافة غنية. سوف تستمتع بالتأكيد.</span></p>\r\n', '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(44, 13, 1, 3, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-23 20:30:00', '2018-02-23 20:30:00'),
(45, 13, 6, 3, 2, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-23 20:30:00', '2018-02-23 20:30:00'),
(46, 14, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-23 20:30:00', '2018-02-23 20:30:00'),
(47, 14, 6, 1, 2, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-23 20:30:00', '2018-02-23 20:30:00'),
(48, 14, 12, 1, 3, 1, 0, NULL, NULL, NULL, NULL, 'بهترین اوقات خود را با خرید در بازارهای همدان سپری و احساس رضایت نمایید', 'Enjoy your best time with shopping in Hamedan markets', 'استمتع بأفضل وقتك مع التسوق في أسواق همدان', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">خرید و فروش و تجارت در همدان سبقه ای بسیار طولانی دارد و بازارهای این استان از جایگاه ویژه ای در منطقه برخوردار بوده است.دلیل این مدعا وجود بازارهای تاریخی متعدد در این استان است. بازارهای تاریخی تویسرکان(قدیمی ترین بازار سرپوشیده استان)ُ همدان، ملایر ،نهاوند و ...&nbsp; از این جمله اند. خرید در بازارهای همدان بسیار جذاب و متنوع است. اگر سری به بازارهای همدان بزنید می&zwnj;توانید در فضاهایی تاریخی و یا مدرن خرید کنید و آنچه را که نیاز دارید با کیفیت و قیمتی مناسب تهیه کنید. کاسبان مهربان و منصف همدانی شهره عام و خاصند. در بازارهای استان همدان می&zwnj;توانید سوغات مانند( انگشت پیچ، کماج، شیرمال، گردو، باسلوق، بادام، آلو و &hellip;) و صنایع دستی همچون سفال، مصنوعات چرمی، مصنوعات مروار بافی، منبت و &hellip; را در کنار سایر مایحتاجتان مشاده و خرید کنید. مهمترین مراکز تجاری شهر همدان بازار تاریخی، و خیابان&zwnj;های منتهی به میدان امام است. به طور قطع از گردش در بازارهای همدان لذت خواهید برد. این لذت را تجربه کنید.</span></p>\r\n', '<p style=\"text-align:justify\"><span style=\"color:#8a8a8a\">Trading and trading in Hamedan has a very long cordon, and the markets of this province have enjoyed a special status in the region. Because of this claim there are numerous historical markets in this province. Historical markets of Toyserkan (the oldest indoor market in the province) are Hamadan, Malayer, Nahavand and the like. Shopping in Hamedan is very attractive and diverse. If you follow the series of Hamedan markets, you can buy in historical or modern spaces and get what you need with the right price and quality. The gentle and fair companion of Hamedani is famous and special. In the markets of Hamedan, you can buy and buy souvenirs like (screw, bits, beer, walnut, almonds, almonds, plums ...) and handicrafts such as pottery, leather artifacts, weavers, embroidery, etc. along with your other necessities. . The most important commercial centers of Hamedan are the historical market, and the streets leading to Imam Square. You will definitely enjoy the circulation of Hamedan markets. Experience this pleasure.</span></p>\r\n', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">التجارة والتداول في همدان لديها كردون طويل جدا، وأسواق هذه المحافظة تتمتع بوضع خاص في المنطقة. وبسبب هذا الادعاء هناك العديد من الأسواق التاريخية في هذه المحافظة. الأسواق التاريخية من تويسركان (أقدم سوق داخلي في المحافظة) هي همدان، مالاير، نهافاند وما شابه ذلك. التسوق في همدان جذابة جدا ومتنوعة. إذا كنت تتبع سلسلة من أسواق همدان، يمكنك شراء في المساحات التاريخية أو الحديثة والحصول على ما تحتاجه بالسعر المناسب والجودة. الرفيق لطيف وعادل من هامداني مشهورة وخاصة. في أسواق همدان، يمكنك شراء وشراء الهدايا التذكارية مثل (المسمار والبتات والبيرة والجوز واللوز واللوز والخوخ ...) والحرف اليدوية مثل الفخار، والقطع الجلدية والنساجين والتطريز، وما إلى ذلك جنبا إلى جنب مع الآخر الخاص بك الضروريات. . أهم المراكز التجارية في همدان هي السوق التاريخي، والشوارع المؤدية إلى ساحة الإمام. سوف تستمتع بالتأكيد تداول أسواق همدان. تجربة هذا متعة.</span></p>\r\n', '2018-02-23 20:30:00', '2018-02-23 20:30:00'),
(49, 7, 9, 1, 8, 1, 0, '/page/hamedan/attraction/shopping', 'بیشتر', 'Read More', 'اکثر', 'لذت خرید در بازارهای همدان', 'Shopping pleasure in Hamedan markets', 'متعة التسوق في أسواق همدان', 'خرید در بازارهای همدان بسیار جذاب و متنوع است. اگر سری به بازارهای همدان بزنید می‌توانید در فضاهایی تاریخی و یا مدرن خرید کنید و آنچه را که نیاز دارید با کیفیت و قیمتی مناسب تهیه کنید.', 'Shopping in Hamedan is very attractive and diverse. If you follow the series of Hamedan markets, you can buy in historical or modern spaces and get what you need with the right price and quality.', 'خرید در بازارهای همدان بسیار جذاب و متنوع است. في هذا الموقع، يمكنك الحصول على المزيد من المعلومات حول ما إذا كنت تريد أن تفعل ذلك.', '2018-02-23 20:30:00', '2018-02-23 20:30:00'),
(50, 7, 12, 1, 7, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">تنوع زبان و فرهنگ در استان همدان دارای تنوع زیادی است زيرا در سطح این استان، اقوام مختلفي با فرهنگها و آداب و سنن خاص سكونت دارند .كه عبارتند از: تركها:در شمال وغرب استان ،به ويژه درشمال وغرب شهرستان همدان ساكن مي باشند .تركها در 562 روستاي استان سكونت دارند. لر و لك :اين اقوام در شهرستانهاي ملاير ،نهاوند،بخش هایی از تویسرکان وبخش سامن در 255 روستا ساكن مي باشند . كردها:اين قوم در 159روستا درغرب وشمال غربي ودر مجاورت استانهاي كردستان وكرمانشاه سكونت دارند . فارسها:بيشتر ساكنان مركز استان را تشكيل مي دهند واز قديمي ترين مردم اين منطقه محسوب مي شوند كه از دوران مادها در اين سرزمين اسكان يافته اند .</span></p>\r\n', '<p style=\"text-align:justify\"><span style=\"color:#8a8a8a\">The diversity of language and culture in the province of Hamedan is very diverse because in this province, different ethnic groups reside with specific cultures and traditions. These are: Turks: In the north and west of the province, especially in the north and west of Hamedan, residents live in 562 villages of the province. Ler and Lak: These communities are located in the Malayer, Nahavand, parts of Tuyserkan and Saman in 255 villages. Kurds: These people live in 159 villages in the west and northwest, in the vicinity of Kurdistan and Kermanshah provinces. Persians: Most of the inhabitants of the provincial capital are considered to be the oldest inhabitants of the region, who settled down from the Medes.</span></p>\r\n', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">تنوع اللغة والثقافة في محافظة همدان متنوع جدا لأنه في هذه المقاطعة، تعيش مجموعات عرقية مختلفة بثقافات وتقاليد محددة وهي: الأتراك: في شمال وغرب المحافظة، وخاصة في شمال وغرب حميدان، يعيش السكان في 562 قرية في المحافظة. لير و لاك: تقع هذه المجتمعات في الملايو، نهافاند، وأجزاء من توسيركان وسامان في 255 قرية. الأكراد: يعيش هؤلاء الأشخاص في 159 قرية في الغرب والشمال الغربي، بالقرب من مقاطعتي كردستان وكرمانشاه. الفرس: يعتبر معظم سكان عاصمة المقاطعة أقدم سكان المنطقة التي استقرت منذ زمن الميديين.</span></p>\r\n', '2018-02-23 20:30:00', '2018-02-23 20:30:00'),
(51, 15, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-16 20:30:00', '2018-02-23 20:30:00'),
(52, 15, 6, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-23 20:30:00', '2018-02-23 20:30:00'),
(53, 15, 12, 1, 3, 1, 0, NULL, NULL, NULL, NULL, 'لذت شادی و هیجان را از دست ندهید', 'Do not miss the joy of joy and excitement', 'لا تفوت فرحة الفرح والإثارة', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">&nbsp;اگر علاقمند به گردشگری هیجانی و ورزشی هستید می&zwnj;توانید </span><span style=\"color:null\">همدان</span><span style=\"color:#8a8a8a\"> را به عنوان مقصد خود انتخاب کنید. ظرفیت&zwnj;های فرهنگی، طبیعی و انسانی در استان همدان باعث شده است تا مردمان این دیار از هر فرصتی برای شادی و نشاط بهره گیرند. ورزش های مفرحی همچون اسکی روی برف، اسکی روی چمن، پرواز با کایت و پاراگلایدر، اسب دوانی، موتور سواری، هاکی، کوهنوردی و صخره نوردی از آن جمله اند که بسیاری از جوانان و علاقمندان به آن&zwnj;ها می پردازند و زمینه&zwnj;های استفاده مسافران و گردشگران نیز فراهم شده است. اسکی کردن در پیست تاریکدره همدان، صخره نوردی و کوه&zwnj;نوردی در رشته کوه الوند و کوه&zwnj;های زیبای این استان و پرواز بر فراز طبیعت زیبای همدان بسیار جذاب و مفرح است. این لذت و شادی را از دست ندهید.</span></p>', '<p style=\"text-align:justify\"><span style=\"color:#8a8a8a\">If you are interested in exciting and sports tourism, you can choose </span><span style=\"color:null\">Hamedan</span><span style=\"color:#8a8a8a\"> as your destination. The cultural, natural and human capacities in Hamedan province have made the people of this country enjoy every opportunity for joy and joy. Incredible sports such as snowboarding, cross-country skiing, flying with kite and paragliding, horseback riding, motor racing, hockey, climbing and rock climbing include many young people and their enthusiasts, and the areas of use by travelers and tourists Also provided. Skiing in the dark road of Hamedan, rock climbing and climbing in the mountain range of Alvand mountains and beautiful mountains of this province and flying over the beautiful nature of Hamadan is awesome and fun. Do not miss this joy and joy.</span></p>\r\n', '<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"color:#8a8a8a\">إذا كنت مهتما في السياحة المثيرة والرياضة، يمكنك اختيار </span><span style=\"color:null\">همدان</span><span style=\"color:#8a8a8a\"> كوجهة. وقد جعلت القدرات الثقافية والطبيعية والبشرية في مقاطعة همدان شعب هذا البلد كل فرصة للفرح والفرح. الرياضة متعة مثل التزلج على الجليد والتزلج على العشب، ويطير الطائرات الورقية والطيران الشراعي وسباق الخيل، السيارات الرياضية، تسلق الجبال وتسلق الصخور هي من بين العديد من الشباب والمهتمين بها. أسباب لصالح المسافرين والسياح كما قدمت أيضا. لا تفوت هذه الفرح والفرح.</span></p>\r\n', '2018-02-23 20:30:00', '2018-02-23 20:30:00');

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
(4, 7, 10, 1, 1, NULL, 'حیات وحش همدان', 'The Life of Hamdan', 'الحياة البرية في همدان', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(5, 11, 7, 1, 1, NULL, 'پوشش مردم همدان', 'Hamedan People\'s Clothing', 'حامدان للملابس الشعبية', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(6, 11, 8, 2, 1, NULL, 'غذا در همدان', 'Food in Hamadan', 'الغذاء في همدان', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(7, 11, 9, 3, 1, NULL, 'آداب و رسوم همدان', 'Hamedan customs', 'آداب و رسوم همدان', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(8, 11, 10, 4, 1, NULL, 'آداب و رسوم در همدان', 'Hamedan Customss', 'آداب و رسوم در همدان', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(9, 15, 13, 1, 1, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(10, 16, 29, 1, 1, NULL, 'سفال همدان', 'Pottery in Hamadan', 'بلاط همدان', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-17 20:30:00', '2018-02-17 20:30:00'),
(11, 17, 16, 1, 1, '/page/event/native-festival/manizan-festival', 'جشنواره شیره پزی مانیزان', 'Festive Manizan Festival', 'مهرجان مانيزان الأعياد', 'جشنواره شیره پزی مانیزان', 'Manizan Festival', 'مهرجان مانيزان الأعياد', 'جشنواره های سنتی همدان نمودی از تاریخ و فرهنگ و آیین های مردمان این دیار هستند که به واسطه اصالت خود از دیرباز تا به حال پویا مانده اند.', 'The traditional festivals of Hamadan represent the history, culture and traditions of the people of this country, which have long been dynamic due to their originality.', 'المهرجانات التقليدية من همدان تمثل تاريخ وثقافة وتقاليد شعب هذا البلد، والتي كانت طويلة ديناميكية بسبب أصالة.', '2018-02-17 20:30:00', '2018-02-17 20:30:00'),
(12, 17, 19, 1, 1, '/page/hamedan/attraction/shopping', 'بازار همدان', 'Hamedan market', 'همدان السوق', 'لذت خرید در بازار همدان', 'Shopping pleasure in Hamedan market', 'التسوق متعة في همدان السوق', 'بهترین اوقات خود را با خرید در بازارهای همدان سپری و احساس رضایت نمایید.', 'Enjoy your best time with shopping in Hamedan markets.', 'استمتع بأفضل وقتك مع التسوق في أسواق همدان.', '2018-02-17 20:30:00', '2018-02-17 20:30:00'),
(13, 17, 18, 1, 1, '/page/hamedan/attraction/abu-ali-sina', 'آرامگاه بوعلی سینا', 'Abu Ali Sina tomb', 'ضريح بو علي سينا', 'دیار بزرگان و مشاهیر ایران زمین', 'The Land of Iran\'s Elders and Celebrities', 'أرض شيوخ إيران ومشاهيرها', '\r\nهمدان مهد بزرگان و مشاهیری همچون بوعلی سینا،باباطاهر،میررضی، سید جمال و بسیاری دیگر از ستاره های درخشان تاریخ و فرهنگ ایران زمین ', 'Hamedan is the cradle of great elders and celebrities like Bouali Sina, Baba Taher, Mirrazi, Seyyed Jamal and many other brilliant stars of Iran\'s history and culture.', 'حميدان هو مهد كبار السن والمشاهير مثل بوالي سينا وبابا طاهر وميرازي وسيد جمال والعديد من النجوم الرائعة الأخرى في تاريخ إيران وثقافتها.', '2018-02-17 20:30:00', '2018-02-17 20:30:00'),
(14, 17, 17, 1, 1, '/page/hamedan/attraction/joy-and-excitement', 'ورزش موتور سواری در همدان', 'Motor racing in Hamedan', 'رياضة الدراجات النارية في همدان', 'شادی و هیجان', 'Joy and excitement', 'الفرح والإثارة', '\r\nتفریحات هیجانی همچون اسکی،موتورسواری،صخره نوردی، کوهنوردی،اسب سواری، پالاگرایدر، بادی جامپینگ،سورتمه و یخ نوردی را در همدان تجربه کنید.', 'Experience the excitement of experiencing such as skiing, motorcycling, rock climbing, climbing, horseback riding, pilgrimage, windsurfing, sledding and ice climbing in Hamadan.', 'تجربة الإثارة من تجربة مثل التزلج، ركوب الدراجات النارية، تسلق الصخور، وتسلق الجبال، وركوب الخيل، والحج، وركوب الأمواج، التزلج وتسلق الجليد في همدان.', '2018-02-17 20:30:00', '2018-02-17 20:30:00'),
(15, 17, 20, 5, 1, '/page/hamedan/attraction/aliasdar-cave', 'غار علیصدر', 'Aliasdar Cave', 'كهف إلياسدار', 'بزرگترین غار آبی جهان', 'The world\'s largest blue cave', 'أكبر كهف أزرق في العالم', 'با سفر به همدان از شگفت انگیزترین غارآبی جهان دیدن کنید', 'Visit the world\'s most amazing blue cave by visiting Hamadan', 'زيارة الكهف الأزرق المدهش في العالم من خلال زيارة همدان', '2018-02-17 20:30:00', '2018-02-17 20:30:00'),
(16, 22, 18, 1, 1, '', 'پور سینا نابغه شرق', 'Boo-Ali Sina is the genius of the East', 'بوعلي سينا هو عبقرية الشرق', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-18 20:30:00', '2018-02-18 20:30:00'),
(17, 24, 25, 1, 1, NULL, 'آرامگاه باباطاهر', 'Tomb of Babtaher', 'قبر باباطاهر', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-20 20:30:00', '2018-02-20 20:30:00'),
(18, 24, 26, 2, 1, NULL, 'شیر سنگی', 'stone lion', 'حجر أسد', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-20 20:30:00', '2018-02-20 20:30:00'),
(19, 24, 24, 3, 1, NULL, 'مسجد جامع همدان', 'Mosque of Hamedan', 'مسجد جامع همدان', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-20 20:30:00', '2018-02-20 20:30:00'),
(20, 24, 27, 4, 1, NULL, 'حمام حاج آقا تراب', 'Bath Haj Ata Torab', 'حمام حاج آقا تراب', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-20 20:30:00', '2018-02-20 20:30:00'),
(21, 28, 28, 1, 1, NULL, 'آرامگاه بوعلی سینا', 'Abu Ali Sina tomb', 'ضريح بو علي سينا', 'آرامگاه بوعلی سینا', 'Abu Ali Sina tomb', 'ضريح بو علي سينا', NULL, NULL, NULL, '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(22, 35, 15, 1, 1, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-21 20:30:00', '2018-02-21 20:30:00'),
(23, 40, 30, 1, 1, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(32, 42, 31, 1, 1, NULL, 'جشنواره شیره پزی ملایر', 'Malayer Festival', 'مهرجان حساء ملاير', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(33, 42, 32, 1, 1, NULL, 'جشنواره شیره پزی ملایر', 'Malayer Festival', 'مهرجان حساء ملاير', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(34, 42, 33, 1, 1, NULL, 'جشنواره شیره پزی ملایر', 'Malayer Festival', 'مهرجان حساء ملاير', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(35, 42, 34, 1, 1, NULL, 'جشنواره شیره پزی ملایر', 'Malayer Festival', 'مهرجان حساء ملاير', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-22 20:30:00', '2018-02-22 20:30:00'),
(36, 49, 19, 1, 1, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-23 20:30:00', '2018-02-23 20:30:00');

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
(13, 'FOUR_IMAGE_GALLERY', 'چهار تصویر در کنار هم بدون متن', '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(14, 'LIGHT_BOX_IMAGE_GALLERY', 'گالری از تصاویر و امکان باز شدن تصویر تمام صفحه و تعویض تصاویر', '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(15, 'CONTENT_BRIEF_NEWS', 'نمایش تعدادی از اخبار با اولویت در صفحه نخست', '2018-02-21 20:30:00', '2018-02-21 20:30:00');

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

--
-- Dumping data for table `tbl_section_videos`
--

INSERT INTO `tbl_section_videos` (`id`, `svSId`, `svVgId`, `svOrder`, `svState`, `svFaSubject`, `svEnSubject`, `svArSubject`, `svFaDescription`, `svEnDescription`, `svArDescription`, `created_at`, `updated_at`) VALUES
(1, 18, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-17 20:30:00', '2018-02-17 20:30:00');

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
(1, 3, 1, 'جاذبه ها', 'Attraction', 'جاذبیه', '/page/hamedan/attraction', 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(2, 2, 1, 'تاریخچه', 'History', 'تاریخ', '/page/hamedan/history', 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(3, 6, 1, 'مشاهیر', 'celebrities', 'المشاهير', NULL, 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(4, 5, 1, 'آداب و رسوم', 'Culture', 'ثقافة', '/page/hamedan/customs-and-traditions', 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(5, 4, 3, 'بین المللی', 'international', 'دولي', NULL, 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(6, 8, 3, 'استانی', 'Provincial', 'ريفي', NULL, 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(7, 7, 3, 'ملی', 'National', 'مواطنی', NULL, 1, '2018-02-13 05:21:33', '2018-02-13 05:21:33'),
(8, 1, 1, 'همدان در یک نگاه', 'Hamedan at a glance', 'همدان في لمحة', '/page/hamedan/hemedan-at-a-glance', 1, '2018-02-14 20:30:00', '2018-02-14 20:30:00'),
(9, 1, 4, 'معرفی', 'Introduction', 'مقدمة', NULL, 1, '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(19, 3, 4, 'اهداف', 'Goals', 'الأهداف', NULL, 1, '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(20, 2, 4, 'ACD', 'ACD', 'ACD', NULL, 1, '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(22, 4, 4, 'چارت تشکیلات', 'Organization chart', 'المخطط التنظيمي', NULL, 1, '2018-02-16 20:30:00', '2018-02-16 20:30:00'),
(23, 4, 1, 'صنایع دستی', 'Handicraft', 'الحرف اليدوية', '/page/hamedan/handicraft', 1, '2018-02-21 20:30:00', '2018-02-21 20:30:00');

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
-- Dumping data for table `tbl_video_gallery`
--

INSERT INTO `tbl_video_gallery` (`id`, `gPath`, `gFaLocation`, `gFaEditor`, `gEnLocation`, `gEnEditor`, `gArLocation`, `gArEditor`, `gPosterPath`, `created_at`, `updated_at`) VALUES
(1, 'pic/video/1.mp4', 'همدان', 'اداره کل میراث فرهنگی استان همدان', 'Hamedan', 'General Directorate of Heritage of Hamedan Province', 'همدان', 'المديرية العامة للتراث في محافظة همدان', 'pic/video/posters/1.jpg', '2018-02-17 20:30:00', '2018-02-17 20:30:00');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_image_gallery`
--
ALTER TABLE `tbl_image_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tbl_main_menus`
--
ALTER TABLE `tbl_main_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_news_img`
--
ALTER TABLE `tbl_news_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_news_slider`
--
ALTER TABLE `tbl_news_slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_page_breadcrumbs`
--
ALTER TABLE `tbl_page_breadcrumbs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_page_header_img`
--
ALTER TABLE `tbl_page_header_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_page_header_types`
--
ALTER TABLE `tbl_page_header_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_sections`
--
ALTER TABLE `tbl_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `tbl_section_imgs`
--
ALTER TABLE `tbl_section_imgs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_section_types`
--
ALTER TABLE `tbl_section_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_section_videos`
--
ALTER TABLE `tbl_section_videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_sponsors`
--
ALTER TABLE `tbl_sponsors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_sub_menus`
--
ALTER TABLE `tbl_sub_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_video_gallery`
--
ALTER TABLE `tbl_video_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
