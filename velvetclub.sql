-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 02, 2023 at 06:57 AM
-- Server version: 5.7.42-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `velvetclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_classes`
--

CREATE TABLE `account_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_classes`
--

INSERT INTO `account_classes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'independent', NULL, NULL),
(2, 'establishment', NULL, NULL),
(3, 'agency', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

CREATE TABLE `agencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `original_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `descripion`, `user_id`, `original_filename`, `filename`, `file_path`, `file_url`, `created_at`, `updated_at`) VALUES
(1, '7 Amazing Health Benefits of Having More Sex', 'Sex is a natural and pleasurable part of life, but did you know that it also offers numerous health benefits? Engaging in regular sexual activity can have a positive impact on both your physical and mental well-being. In this blog post, we will explore ten surprising health benefits of having more sex. So, let\'s dive in and discover how intimacy can contribute to a healthier and happier you!\r\n\r\nBoosted Immunity:\r\nHaving sex regularly has been linked to a stronger immune system. Sexual activity increases the production of antibodies, which help fight off infections and boost your overall immunity.\r\n\r\nReduced Stress:\r\nEngaging in sexual activity releases endorphins, the feel-good hormones that promote relaxation and reduce stress levels. Regular sex can be a natural stress reliever, improving your mood and helping you cope with daily pressures.\r\n\r\nImproved Heart Health:\r\nSex is a form of physical exercise that gets your heart pumping. Regular cardiovascular activity during sex can improve blood circulation, lower blood pressure, and reduce the risk of heart disease.\r\n\r\nEnhanced Sleep Quality:\r\nAfter orgasm, the body releases prolactin, a hormone that promotes feelings of relaxation and contentment. This can lead to improved sleep quality, helping you feel more refreshed and rejuvenated.\r\n\r\nIncreased Intimacy and Connection:\r\nSexual activity fosters emotional closeness and strengthens the bond between partners. Regular intimacy can enhance trust, communication, and overall relationship satisfaction.\r\n\r\nStrengthened Pelvic Floor Muscles:\r\nEngaging in sexual activity, particularly activities like Kegel exercises, can help tone and strengthen the pelvic floor muscles. This can improve bladder control, enhance sexual pleasure, and prevent issues like urinary incontinence.\r\n\r\nPain Relief:\r\nDuring sexual arousal and orgasm, the body releases endorphins that act as natural painkillers. These endorphins can help alleviate headaches, menstrual cramps, and various types of body pain.', 1, 'pexels-danny-the-designer-14521368.jpg', '168983451363.jpg', '/home/p1djqf0cac6j/public_html/public/images/', 'https://www.velvetklub.com/public//images/168983451363.jpg', '2023-07-20 13:28:33', '2023-07-20 13:28:33'),
(2, 'Unveiling the Luxury and Elegance of Brisbane Escorts at Velvet Klub', 'When it comes to seeking companionship and creating unforgettable experiences, Brisbane has a thriving and diverse escort scene. Among the many establishments in this cosmopolitan city, one name stands out for its commitment to luxury, sophistication, and discretion: Velvet Klub. In this blog post, we will delve into the world of Brisbane escorts and explore how Velvet Klub sets itself apart as a premier destination for those in search of unforgettable encounters.\r\n\r\n1.	The Art of Luxury Companionship:\r\nAt Velvet Klub, the art of luxury companionship is taken to new heights. The escorts in Brisbane associated with Velvet Klub are not only stunningly beautiful but each companion is carefully selected, ensuring they possess the qualities necessary to create a memorable experience for their clients.\r\n\r\n2.	Unmatched Elegance and Style:\r\nVelvet Klub prides itself on offering an unparalleled level of elegance and style. From the moment you enter their doors, you\'ll be greeted by an atmosphere of sophistication and refinement\r\n\r\n3.	Discretion and Privacy:\r\nOne of the key elements that set Velvet Klub apart is its unwavering commitment to discretion and privacy. They understand the importance of maintaining the confidentiality of their clients and ensure that all interactions are treated with the utmost respect and confidentiality. Whether you\'re a high-profile individual or simply value your privacy, Velvet Klub provides a safe and secure environment for your indulgence.\r\n\r\n4.	A Focus on Connection:\r\nBeyond physical attraction, Velvet Klub escorts emphasize the importance of genuine connections. They strive to create an environment where you can feel comfortable, understood, and truly engaged. Through stimulating conversation and attentive companionship, they aim to foster a deeper connection that goes beyond the boundaries of a traditional escort encounter.', 1, 'pexels-ron-lach-9498392.jpg', '168985094781.jpg', '/home/p1djqf0cac6j/public_html/public/images/', 'https://www.velvetklub.com/public//images/168985094781.jpg', '2023-07-20 18:02:27', '2023-07-20 18:02:27'),
(3, 'How to Choose the Right Escort in Australia for a Memorable Experience', 'Selecting the perfect escort in Australia is a decision that demands careful consideration to ensure a safe, satisfying, and memorable encounter. In this comprehensive guide, we\'ll take you through the steps of making an informed choice, empowering you to find the best match for your needs and preferences.\r\n\r\nDetermine Your Needs and Preferences \r\nStart by understanding your personal desires, such as physical appearance, age, personality traits, specific services, and boundaries. Self-reflection will help you narrow down your choices and identify the qualities and experiences you seek.\r\n\r\nResearch Reputable Escort Directories \r\nPrioritize safety and professionalism by exploring reputable escort directories in Australia. These platforms often verify escorts, offering a higher level of authenticity and credibility. Look for well-established directories with positive reviews and solid reputations.\r\n\r\nRead Client Reviews and Testimonials \r\nGain valuable insights into an escort\'s performance and professionalism through client reviews and testimonials. Reading multiple reviews from different sources provides a balanced understanding of an escort\'s reputation and the experiences of others.\r\n\r\nReview Escort Profiles \r\nThoroughly review escort profiles to gather essential information, including photos, descriptions, rates, services offered, and additional details. Seek escorts whose profiles resonate with your preferences and desired experiences.\r\n\r\nContact and Communicate\r\nInitiate contact with potential escorts to assess compatibility and establish a rapport. Clear communication ensures both parties are on the same page regarding expectations, boundaries, and logistics, reflecting a reliable and trustworthy escort.\r\n\r\nConsider Safety and Privacy \r\nPrioritize your safety and privacy throughout the selection process. Choose escorts who prioritize client confidentiality, practice safe sex, and adhere to legal regulations. Verify their appropriate health checks and openness about sexual health.', 1, 'pexels-nathan-martins-10986454.jpg', '168985112453.jpg', '/home/p1djqf0cac6j/public_html/public/images/', 'https://www.velvetklub.com/public//images/168985112453.jpg', '2023-07-20 18:05:24', '2023-07-20 18:05:24');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Australia', NULL, NULL),
(2, 'New Zealand', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `model_id`, `user_id`, `created_at`, `updated_at`) VALUES
(103, 212, 1, '2023-04-24 10:09:21', '2023-04-24 10:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `original_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `user_id`, `original_filename`, `filename`, `file_path`, `file_url`, `created_at`, `updated_at`) VALUES
(23, 208, 'getFilesToClient (16).png', '168224700781.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168224700781.jpg', '2023-04-23 17:50:08', '2023-04-23 17:50:08'),
(24, 208, 'getFilesToClient (15).png', '16822470084.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/16822470084.jpg', '2023-04-23 17:50:08', '2023-04-23 17:50:08'),
(25, 208, 'getFilesToClient (14).png', '168224700844.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168224700844.jpg', '2023-04-23 17:50:08', '2023-04-23 17:50:08'),
(26, 208, 'getFilesToClient (13).png', '16822470086.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/16822470086.jpg', '2023-04-23 17:50:08', '2023-04-23 17:50:08'),
(27, 208, 'getFilesToClient (12).png', '168224700865.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168224700865.jpg', '2023-04-23 17:50:08', '2023-04-23 17:50:08'),
(28, 208, 'getFilesToClient (11).png', '168224700820.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168224700820.jpg', '2023-04-23 17:50:08', '2023-04-23 17:50:08'),
(29, 209, 'getFilesToClient (19).png', '16822477199.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/16822477199.jpg', '2023-04-23 18:01:59', '2023-04-23 18:01:59'),
(30, 209, 'getFilesToClient (18).png', '168224771913.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168224771913.jpg', '2023-04-23 18:01:59', '2023-04-23 18:01:59'),
(31, 209, 'getFilesToClient (17).png', '168224771999.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168224771999.jpg', '2023-04-23 18:01:59', '2023-04-23 18:01:59'),
(32, 210, 'Stunning-Redhead-Escorts-in-London.jpg', '16822502816.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/16822502816.jpg', '2023-04-23 18:44:41', '2023-04-23 18:44:41'),
(39, 250, 'IMG_0322.jpeg', '168545990527.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168545990527.jpg', '2023-05-30 22:18:25', '2023-05-30 22:18:25'),
(40, 250, 'CB9993E4-9063-4781-A9E2-8ADE2D87365A.jpeg', '168545990540.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168545990540.jpg', '2023-05-30 22:18:25', '2023-05-30 22:18:25'),
(41, 251, 'IMG_0004.jpeg', '168629095863.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168629095863.jpg', '2023-06-09 13:09:18', '2023-06-09 13:09:18'),
(42, 251, 'IMG_0226.jpeg', '168629095882.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168629095882.jpg', '2023-06-09 13:09:18', '2023-06-09 13:09:18'),
(43, 251, 'IMG_0044.jpeg', '168629095880.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168629095880.jpg', '2023-06-09 13:09:18', '2023-06-09 13:09:18'),
(44, 251, 'IMG_0064.jpeg', '168629095893.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168629095893.jpg', '2023-06-09 13:09:18', '2023-06-09 13:09:18'),
(45, 251, 'IMG_0284.jpeg', '168629095812.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168629095812.jpg', '2023-06-09 13:09:18', '2023-06-09 13:09:18'),
(46, 251, 'IMG_0151.jpeg', '168629095883.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168629095883.jpg', '2023-06-09 13:09:18', '2023-06-09 13:09:18'),
(47, 251, 'IMG_0200.jpeg', '168629095859.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168629095859.jpg', '2023-06-09 13:09:18', '2023-06-09 13:09:18'),
(48, 251, 'IMG_0048.jpeg', '168629095838.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168629095838.jpg', '2023-06-09 13:09:18', '2023-06-09 13:09:18'),
(49, 255, '1661171517353_thumbnail_1a1d805a-4cfd-4e5d-a794-d1681c334d37 copy.jpg', '168775625283.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168775625283.jpg', '2023-06-26 12:10:52', '2023-06-26 12:10:52'),
(50, 255, '1661171548475_thumbnail_07de75c9-5966-4fea-8591-5e90b6838eed copy.jpg', '168775625264.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168775625264.jpg', '2023-06-26 12:10:52', '2023-06-26 12:10:52'),
(51, 255, 'footer-bg.jpg', '168976794686.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168976794686.jpg', '2023-07-19 18:59:06', '2023-07-19 18:59:06'),
(52, 255, 'banner-1 (1).jpg', '168976794656.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168976794656.jpg', '2023-07-19 18:59:06', '2023-07-19 18:59:06'),
(53, 255, 'FMTV-home-ver-01.jpg', '168976794683.jpg', '/home/p1djqf0cac6j/public_html/public/gallarydata/', 'https://www.velvetklub.com/public//gallarydata/168976794683.jpg', '2023-07-19 18:59:06', '2023-07-19 18:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_04_08_063351_add_role_to_users', 1),
(11, '2022_04_29_092458_create_usermeta_table', 2),
(12, '2022_05_03_071232_create_user_accounts_table', 3),
(13, '2022_05_03_094820_add_delegated_user_id_to_users_table', 4),
(14, '2022_05_05_072347_create_payments_table', 5),
(15, '2022_05_05_081650_create_payments_table', 6),
(16, '2022_05_13_070332_add_columns_to_user_accounts_table', 7),
(17, '2022_05_13_072249_add_columns_to_payments_table', 8),
(18, '2022_05_31_095553_create_commissions_table', 9),
(19, '2022_05_31_132653_add_brokeradmin_to_payments_table', 10),
(20, '2022_06_02_122117_create_user_loans_table', 11),
(21, '2022_06_02_132637_create_loan_emi_data_table', 12),
(22, '2022_06_16_122146_add_cheque_url_to_payments_table', 13),
(23, '2022_06_23_112626_add_esci_to_user_loans_table', 14),
(24, '2022_06_23_133937_add_loan_amount_to_user_loans_table', 15),
(25, '2022_09_15_031653_create_user_metas_table', 16),
(26, '2022_09_16_033133_add_userid_to_usermets_table', 17),
(27, '2022_09_16_173740_add_phone_to_user_metas_table', 18),
(28, '2022_09_17_140825_create_models_table', 19),
(29, '2022_09_27_131544_add_profile_to_models_table', 20),
(30, '2022_09_28_114155_create_galleries_table', 21),
(31, '2022_10_01_141648_add_soft_deletes_to_user_table', 21),
(32, '2022_10_02_084230_create_favorites_table', 22),
(33, '2022_10_17_163437_create_blogs_table', 23),
(34, '2022_10_25_083236_add_created_byuserid_models_table', 24),
(35, '2022_10_25_094303_add_created_byuserid_users_table', 25),
(36, '2022_10_31_174636_create_agencies_table', 26),
(37, '2019_05_03_000001_create_customer_columns', 27),
(38, '2019_05_03_000002_create_subscriptions_table', 27),
(39, '2019_05_03_000003_create_subscription_items_table', 27),
(40, '2022_11_12_132820_create_plans_table', 28),
(41, '2022_11_20_061246_create_pages_table', 29),
(42, '2022_12_14_173235_add_price_to_modeles', 30),
(43, '2023_03_10_112639_create_countries_table', 31),
(44, '2023_03_10_113628_create_states_table', 31),
(45, '2023_03_10_140107_create_account_classes_table', 31),
(46, '2023_03_11_180531_create_user_verifies_table', 31),
(47, '2023_03_11_182449_create_user_profiles_table', 31),
(48, '2023_03_20_062107_add_paid_to_models_table', 32),
(49, '2023_03_20_064509_create_private_things_table', 33),
(50, '2023_03_21_123941_add_classify_to_models_table', 34);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `street_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferences` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `distance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lifestyle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_structure` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` bigint(20) UNSIGNED DEFAULT NULL,
  `bust` bigint(20) UNSIGNED DEFAULT NULL,
  `waist` bigint(20) UNSIGNED DEFAULT NULL,
  `hips` bigint(20) UNSIGNED DEFAULT NULL,
  `shoe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eyes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` bigint(20) UNSIGNED DEFAULT NULL,
  `age` bigint(20) UNSIGNED DEFAULT NULL,
  `sexuality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hair` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethnicity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `availability` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landline_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_landline_number_public` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_contact_methods` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_messages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hair_style` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spoken_language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `escort_for` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `review` text COLLATE utf8mb4_unicode_ci,
  `clothe_covered` text COLLATE utf8mb4_unicode_ci,
  `nipple_showing` text COLLATE utf8mb4_unicode_ci,
  `exposed_anus` text COLLATE utf8mb4_unicode_ci,
  `simulated_acts` text COLLATE utf8mb4_unicode_ci,
  `logos_branding` text COLLATE utf8mb4_unicode_ci,
  `accessories` text COLLATE utf8mb4_unicode_ci,
  `suburb` text COLLATE utf8mb4_unicode_ci,
  `postcode` text COLLATE utf8mb4_unicode_ci,
  `fifteen_min_incall` text COLLATE utf8mb4_unicode_ci,
  `fifteen_min_outcall` text COLLATE utf8mb4_unicode_ci,
  `thirteen_min_incall` text COLLATE utf8mb4_unicode_ci,
  `thirteen_min_outcall` text COLLATE utf8mb4_unicode_ci,
  `fourtyfive_min_incall` text COLLATE utf8mb4_unicode_ci,
  `fourtyfive_min_outcall` text COLLATE utf8mb4_unicode_ci,
  `hour_one_incall` text COLLATE utf8mb4_unicode_ci,
  `hour_one_outcall` text COLLATE utf8mb4_unicode_ci,
  `onehalf_incall` text COLLATE utf8mb4_unicode_ci,
  `onehalf_outcall` text COLLATE utf8mb4_unicode_ci,
  `twohour_incall` text COLLATE utf8mb4_unicode_ci,
  `twohour_outcall` text COLLATE utf8mb4_unicode_ci,
  `threehour_incall` text COLLATE utf8mb4_unicode_ci,
  `threehour_call` text COLLATE utf8mb4_unicode_ci,
  `ratesextra` text COLLATE utf8mb4_unicode_ci,
  `selfie` longtext COLLATE utf8mb4_unicode_ci,
  `display_contect_form` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `user_id`, `street_address`, `city`, `state`, `zip`, `phone`, `sex`, `preferences`, `bio`, `distance`, `marital_status`, `lifestyle`, `body_structure`, `created_at`, `updated_at`, `image_name`, `image_path`, `height`, `bust`, `waist`, `hips`, `shoe`, `eyes`, `created_user_id`, `price`, `age`, `sexuality`, `hair`, `dress`, `ethnicity`, `language`, `availability`, `gender`, `landline_number`, `display_landline_number_public`, `website`, `social_media`, `preferred_contact_methods`, `sms_messages`, `hair_style`, `spoken_language`, `body_type`, `escort_for`, `title`, `description`, `review`, `clothe_covered`, `nipple_showing`, `exposed_anus`, `simulated_acts`, `logos_branding`, `accessories`, `suburb`, `postcode`, `fifteen_min_incall`, `fifteen_min_outcall`, `thirteen_min_incall`, `thirteen_min_outcall`, `fourtyfive_min_incall`, `fourtyfive_min_outcall`, `hour_one_incall`, `hour_one_outcall`, `onehalf_incall`, `onehalf_outcall`, `twohour_incall`, `twohour_outcall`, `threehour_incall`, `threehour_call`, `ratesextra`, `selfie`, `display_contect_form`) VALUES
(6, 208, 'Australian Capital Territory', NULL, 'Australian Capital Territory', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-23 17:50:07', '2023-07-14 12:47:43', '168224700798.jpg', '/home/p1djqf0cac6j/public_html/public/images/', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, 'heterosexual', NULL, NULL, NULL, NULL, NULL, 'female', NULL, NULL, NULL, NULL, 'phone_calls', 'sms_messages', NULL, NULL, 'hour_glass', NULL, 'Escort Available and Drugs Available', '<p>I’m Down to fuck I cant stand it . Over and over I cum, gasping each time u keep your mouth right on my clit pulling at it and sucking wildly. vape cartridges, Molly , . Acid , tar, coke , moyoon rocks , concentrates , wa. - as long as you are respectful, kind, and communicative we will connect :).</p><p>I truly look forward to meeting you and spending quality time with you!&nbsp;</p><p>sussygray55201@gmail.com</p><p>Snapchat: Taddedup1/Telegram: @Emile55201<br>Instagram : Emilerose55201<br>I DO BDSM</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cairns', '4868', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>7676</p>', NULL, NULL),
(7, 209, 'Australian Capital Territory', NULL, 'Australian Capital Territory', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-23 18:01:59', '2023-07-14 12:48:13', '16822477197.jpg', '/home/p1djqf0cac6j/public_html/public/images/', 173, 34, NULL, NULL, NULL, 'black', NULL, NULL, 29, 'heterosexual', 'black', NULL, 'european', NULL, NULL, 'female', '482079825', NULL, NULL, NULL, 'phone_calls', 'sms_messages', 'long', 'english', 'petite_slim', NULL, 'I’m Down To Fuck You Good 👅🍆💦', '<p>Are you stressed and need Some hot reliever? I’m a horny mature girl, I love squirting 💦 I Wanna fulfill your widest sexual fantasies 👅 I’ll satisfy you with my full service such as **, oral, doggy, hardcore I can ride your cock 🍆 till you beg me to stop., I’m 💯 honest and sincere lady you’d ever love to meet 😍 I’m available all day and night for incall and outcall... text me for rate and unforgettable 💧 experience 💋 💯% Real &amp; Ready Now👅🍭Naughty Fun💋My Place Or Yours💋 my cell and whatsapp number 482079825 or text my email/ hangout is sexylonelysarah89@gmail.com</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Brisbane', '4000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>$100</strong></p>', NULL, NULL),
(9, 210, 'Australian Capital Territory', NULL, 'Australian Capital Territory', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-23 18:44:41', '2023-07-14 12:47:09', '168793558431.jpg', '/home/p1djqf0cac6j/public_html/public/images/', 173, 34, NULL, NULL, NULL, 'blue', NULL, NULL, 25, 'bisexual', 'red', NULL, 'asian', NULL, NULL, 'female', '456789567', NULL, NULL, NULL, NULL, 'sms_messages', 'long', 'english', 'curvey', 'couples', 'I got about fuck through cheap redhead escorts', NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, 'Homesy', '2053', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 250, 'Perth', NULL, 'Australian Capital Territory', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-30 22:18:25', '2023-07-14 13:42:50', '16854599051.jpg', '/home/p1djqf0cac6j/public_html/public/images/', 175, NULL, NULL, NULL, NULL, 'grey', NULL, NULL, 37, 'bisexual', 'blonde', '12', NULL, NULL, NULL, 'female', '0405172823', NULL, NULL, NULL, NULL, 'sms_messages', 'long', 'english', 'average', NULL, 'Aus Leggy Blonde Sub to Indulge Yourself', '<p>All Services Include: (Can include as many of these as you wish, where time permits)</p><ul><li>Lingerie/costumes</li><li>Light bondage on me</li><li>Light spanking on me</li><li>Wanking</li><li>Cock worship (bbbj) *Please note* You must be freshly shaved for this service*</li><li>Deep throat, gagging, facefuck (bbbj)</li><li>Fingering on me</li><li>Oral and rimming on me</li><li>Toys on me, pussy and ass (anal training/insertion)</li><li>Toy show (I fuck suction cup dildo Pussy and ass, insert toys into pussy and ass on display for you, fingering pussy and ass)</li><li>Pussy fucking (protected)</li><li>Ass fucking (protected)</li><li>CoB, CoF</li><li>Multiple shots</li><li>Shower or bath together (no sex)</li></ul><p><strong>Restrictions:</strong></p><ul><li>No golden shower</li><li>No pain</li><li>No marks</li><li>No rimming on you</li><li>No unprotected pussy or ass fucking</li></ul><p>If you’re interested in making a booking, please let me know which area you’re in and which days/times would work for you, and what services you’re looking for.</p><p>Liz x</p>', NULL, 'on', NULL, NULL, NULL, NULL, NULL, 'Perth', '6052', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '750', NULL, '950', '<p><strong>Min 2 hour booking required</strong></p><p>2 Hour- $750</p><p>3 Hour- $950</p><p>4 Hour- $1100</p><p><br>Overnight (10 hours)- $2500</p><p>Social Date- $950 (2 hrs date, 2 hrs play)</p>', NULL, 'on'),
(19, 251, 'Sydney', NULL, 'Australian Capital Territory', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 13:09:18', '2023-07-14 12:33:51', '168629095819.jpg', '/home/p1djqf0cac6j/public_html/public/images/', 157, NULL, NULL, NULL, NULL, 'brown', NULL, NULL, 26, 'heterosexual', 'black', '8', 'eurasian', NULL, NULL, 'female', '0455112908', 'on', NULL, 'https://instagram.com/urflower_kalea', NULL, 'sms_messages', 'curly', 'english', 'petite', 'men', 'Young, Petite Eurasian Sweetheart', '<p>Hey there, I\'m Kalea, an Australian beauty with enchanting South Korean heritage. I am available for incall or outcall in Macquarie Park just 20 minutes from Sydney. I may be petite, but I\'m a fun-sized package of excitement. If you\'re looking to relax, unwind, and indulge in both sweet and sinful experiences, I\'m the one for you. Picture my gorgeous curly dark hair, cute features, and my flirty nature. I enjoy the art of sensual touching and believe in providing a safe and trusting environment where we can explore your deepest desires together.</p><p>If you aren\'t in my location or meeting me in person isn\'t for you then you can play with me online, I offer a video call or sexting service where we can get to know each other, and I can take the stress out of your day. Starting at $50 this is a great way for us to connect and have fun virtually!&nbsp;</p><p>Let\'s meet and create unforgettable moments. I wholeheartedly invite you to strip me off and let the adventure begin!</p><p>Speaking of adventures, I give you the option to choose your own –</p><p>A soft and sensual experience with my Sweet GFE which encompasses: Light kissing, cuddles (my favourite), covered BJ, flirting and teasing, protected sex, sensual touching and one shot starting from $300.</p><p>OR</p><p>A steamy moment with my Sinful GFE, a more intense experience with no limits to your pleasure. Including: Deep French kissing, BBBJ, CIM/COB/COF, multiple positions, spanking me, rough kinky pounding, and multiple shots for you starting from $400.</p><p>To enquire on a price for your desired booking, please text me on 0455112908 , provide your name, location, service type and the preferred date and time. I cannot wait to meet you and form a genuine connection in our time together…</p><p>Kalea xx</p><p>&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Macquarie Park', '2113', '250', NULL, '400', '450', NULL, NULL, '600', '650', NULL, NULL, '1000', '1050', NULL, NULL, '<h3><i>Premium</i> Sinful GFE</h3><ul><li>250$ 15 minutes</li><li>400$ 30 minutes</li><li>600$ 1 hour</li></ul><h3><i>Standard</i> Sweet GFE&nbsp;</h3><ul><li>250$ 15 minutes</li><li>300$ 30 minutes</li><li>450$ 1 hour</li></ul><h4>Digital Experiences&nbsp;</h4><ul><li>50$ 20 minute texting/sexting</li><li>200$ 15 minute video call</li><li>200$ 30 minute video call</li><li>200$ custom photos - set of 10 (25$/photo)</li><li>200$ custom video - up to 3 minutes</li></ul>', NULL, NULL),
(20, 254, 'Adelaide', NULL, 'Australian Capital Territory', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 03:55:04', '2023-07-14 13:44:15', '168738117315.jpg', '/home/p1djqf0cac6j/public_html/public/images/', 165, 32, NULL, NULL, NULL, 'brown', NULL, NULL, 35, 'bisexual', 'brown', '8', 'european', NULL, NULL, 'female', '0415381292', 'on', NULL, 'onlyfans com/lozza_lauren', NULL, 'sms_messages', 'short', NULL, 'petite', NULL, 'All natural, bubbly fun girl', NULL, '<p>Hey babes, I am an natural, fun gal, who is wet and wild in bed and enjoys role play. I like to have fun in person or I can provide digital services, such as sexting or webcam services . I can offer anything from topless maid, strip tease to full service, let me accomadate your needs !</p>', 'on', NULL, NULL, NULL, NULL, 'on', 'Adelaide', '5000', NULL, '100', NULL, '170', NULL, '220', NULL, '250', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on'),
(21, 255, 'Perth', NULL, 'Australian Capital Territory', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-26 12:10:52', '2023-07-18 17:38:15', '168775625245.jpg', '/home/p1djqf0cac6j/public_html/public/images/', 175, 32, NULL, NULL, NULL, 'brown', NULL, NULL, 25, 'heterosexual', 'brunette', '8', 'white', NULL, NULL, 'female', '0411 770 496', 'on', NULL, 'https://www.instagram.com/Ameliajade_sb/', 'phone_calls', 'sms_messages', 'long', 'english', 'athletic', NULL, 'European brunette barbie!! Available for Outcalls x', '<p><strong>European brunette Barbie!!Available for Outcalls x&nbsp;</strong><br><br>Ps-Incall available every Friday and Saturday! Outcall available anytime!!Hello there, I\'m Amelia, a high class European beauty with a stunning intellect to match my sultry looks. My verified profile photos are just a glimpse of what you can expect when we meet.&nbsp;<br><br>With my exotic features, mesmerizing brown eyes, and long silky brown hair, I exude an air of sophistication that will make you weak in the knees. My hourglass figure, enhanced perky breasts, and athletic body are just the icing on the cake.&nbsp;<br><br><strong>I\'m not just a pretty face </strong>– my intelligence and wit will keep you engaged and stimulated both in and out of the bedroom. I\'m well-read and well-traveled, with a passion for exploring new places and trying new things.&nbsp;<br><br>In the bedroom, I\'m a master of pleasure, with a specialty in giving oral that will leave you breathless. But don\'t take my word for it – my satisfied clients rave about my skills.&nbsp;<br><br>So if you\'re looking for a beautiful, intelligent companion who can satisfy your mind and body, look no further. Book your time with me now and let\'s explore the ultimate expression of pleasure together.&nbsp;<br><br>I sure know how to please a man in the bedroom! I have been getting the highest rating from my clients who always come back for more! My specialty is giving oral, even though every booking includes covered bj you would be missing out if you dont add on a natural bj to your booking as this is my biggest specialty!!! I love what I do and I do it with passion and you will be easily able to tell this from how I please you and how genuine I am and how comfortable I will make you feel, even from the first met!&nbsp;<br><br>I love being well maintained and being manicured head to toe always, and smell nice. To add more, fashion is my hobby so you can be rest assured that I will always be dressed so elegant to what ever occasion you invite me for!&nbsp;<br><br>I am available for short bookings or variety of options like; dinner dates, special occasions, over nights and short trips to be your sweet company!! I generally do outcalls but some weekends I will have a place for incalls.&nbsp;<br><br>My qualities are beyond just my looks and giving pleasure, I am also able to hold a conversation and give you a genuine company and always make you feel welcomed and special.&nbsp;<br><br>I am kink friendly, msg me with your desires and I will help you make your wildest dreams come true or to tick off your bucket list! I am a switch meaning I can be a submissive baby girl or a dominant mistress which ever suits your fantasies!&nbsp;<br><br><strong>GFE - Girlfriend Experience&nbsp;</strong><br><br>I offer a girlfriend experience in which I fulfil your fantasies of being your sweet and fun girlfriend. This experience includes includes a shower for two, a sensual gf, oral on me, covered oral on you (natural oral is $150 extra or included in my PSE), lots of kissing, cuddling, masturbation, 69, multiple positions and two shots!&nbsp;<br><br><strong>PSE - Pornstar Experience&nbsp;</strong><br><br>This is my favourite booking because I love to get kinky. PSE is for the gentlemen who like it a bit more rough, starting with natural oral and while I\'m doing this you can pull my hair. It also includes everything mentioned in GFE plus light hair pulling, choking me, spanking me access to my toy collection and kinkier sex in any position you like and of course as many cum shots as you can!!&nbsp;<br><br><strong>In my free time I love to meditate , go to the beach and read!&nbsp;</strong><br><br><strong>Another passion of mine is to keeping fit so you can find me at the gym training!&nbsp;</strong><br><br>Honey birdette lingerie is my addiction :p and if you like I will be wearing a set of hb for your booking, unless you choose another costume of mine like school girl, babygirl, anime, dominatrix or sexy secretary is some of them! I love to get creative and explore in the bedroom and sensual pleasures to suit your preference!&nbsp;<br><br>I am also available for dinner dates or as a holiday companion! I also love being a companion if you need a lucky charm at the Casino or when you play gold or any other occasion you may wish!&nbsp;<br><br><strong>Looking forward to receiving a message from you xxxLove Amelia&lt;3&nbsp;</strong><br><br>-IMPORTANT NOTICE-Only sms bookings no calls or emails please as I cannot take calls most of the time!&nbsp;<br><br>Please do not book me if you have any cold or flu symptoms or been told to isolate or are suspecting having Cov!</p>', NULL, 'on', NULL, 'on', NULL, NULL, NULL, 'Perth', '6000', NULL, NULL, NULL, NULL, NULL, NULL, '650', '650', '850', '850', NULL, NULL, '2000', '2000', '<p>Overnight or all day (PSE) &nbsp;- $2750 AUD&nbsp;</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `meta_title`, `meta_description`, `location`, `content`, `created_at`, `updated_at`) VALUES
(16, 'Adelaide', 'Adelaide Escort | Escort Services in Adelaide', 'Find the best escort service in Adelaide. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'adelaide-escort', '<h1>Welcome to Velvet Klub &ndash; Adelaide&rsquo;s most discerning escort agency.</h1>\r\n\r\n<p>We understand that finding the perfect companion is no easy task. That&rsquo;s why we are dedicated to providing you with a selection of gorgeous, independent escorts in Adelaide. Our ladies offer a range of premium services that are sure to meet and exceed, your expectations of an unforgettable experience.</p>\r\n\r\n<p>At Velvet Klub, we understand that everyone is unique, so we take the time to get to know you and your desires. Whether you&rsquo;re searching for a sensual massage, a discreet dinner date or something more intimate, we can match you with the perfect companion.</p>\r\n\r\n<p>Our ladies come from all walks of life and all kinds of backgrounds, so you can be sure to find someone who can cater to all your needs and desires We pride ourselves on providing a safe and discreet environment for you to explore and express your fantasies.</p>\r\n\r\n<p>If you are looking to relieve stress from your daily life, engaging in escort services can provide a temporary escape from daily stress and responsibilities. Spending time with an escort who is attentive, empathetic, and attentive to your needs can help you relax, unwind, and recharge.</p>\r\n\r\n<p>Also, you get to explore new experiences. Our Escorts services offer an opportunity to explore new experiences and fulfil desires that may not be possible in your everyday life. Whether you&#39;re looking to try a new fetish, explore a different culture, or engage in an intimate encounter, escort services can provide an exciting and fulfilling experience.</p>\r\n\r\n<p>Also, it boosts your self-confidence as spending time with a companion who is supportive and positive is needed by everyone. Whether you are dealing with self-doubt or insecurity, engaging in escort services can provide a sense of validation and help you feel more confident in your personal and professional life.</p>\r\n\r\n<p>In conclusion, engaging in escort services can provide a range of benefits and enhance various aspects of your life. So, what are you waiting for? Browse our site for your ideal girl and take her out for a wonderful time.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2022-11-20 09:02:01', '2023-05-12 17:30:39'),
(17, 'Brisbane', 'Brisbane Escort | Escort Services in brisbane', 'Find the best escort service in brisbane. 100% verified account. No\r\nhidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile\r\nEscort Listing.', 'brisbane-escort', '<h1>Find the 100% Verified Escort in Brisbane</h1>\r\n\r\n<p>When choosing an escort in Brisbane, there are a variety of things to consider. You want to go with someone that makes you feel comfortable, whether you&#39;re in the middle of a date or on a romantic getaway with your partner. If you&#39;re looking for a escort in Brisbane, look no further. We have the best escorts in Brisbane and we know exactly how to get the most out of your time with them. Our team has many years of experience working with clients from all over the world. We&#39;ve helped&nbsp;hundreds of people find their perfect escort experience, so we know what it takes to get you laid at the best possible price. We understand that when you&#39;re traveling on business or pleasure, it can be difficult to find someone who&#39;s available and willing to go out with you right away. That&#39;s why we&#39;ve made our services as convenient as possible: we&#39;ll book your appointment in advance, so there&#39;s nothing standing between you and getting laid! The best escorts in Brisbane are the ones that know how to make you feel special and pampered. They should be able to do this in a way that doesn&#39;t feel like they&#39;re trying too hard, but rather just doing their job. It&#39;s important that they can make your experience comfortable, exciting and memorable. You don&#39;t want to spend a lot of time with a escort that makes you feel like you&#39;re being judged or talked down to, but rather one that makes you feel as though you&#39;re an important part of their world. If a escort is good at this, then you&#39;ll know that she&#39;s worth taking the time out of your day for&mdash;and if she&#39;s not? You might just want to find someone else who can give you what you need! Escorts in Brisbane are so good that they can make you forget about all your problems. They are available 24 hours a day, and will take care of all your needs. Brisbane escorts are the most attractive, attractive and most beautiful women in the world! Their personalities are amazing, and they will be able to make you feel comfortable. escorts in Brisbane are always ready to serve their clients with pleasure from the first moment they meet them until the last moment they leave their hotel room. If you want to spend some quality time with a beautiful woman then book a escort in Brisbane right now!</p>', '2022-11-20 16:54:21', '2023-02-28 11:32:36'),
(18, 'Canberra', 'Canberra Escort | Escort Services in Canberra', 'Find the best escort service in Canberra. 100% verified account. No\r\nhidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile\r\nEscort Listing.', 'canberra-escort', '<h1>Find the Best Escort in Canberra</h1>\r\n\r\n<p>Canberra is a unique city in that it is built around a large artificial lake with lots of national monuments, museums and galleries sprinkled across the city. Such a city oozes romance and fantasy.</p>\r\n\r\n<p>Hence, it is often said to enjoy the city with your partner. But if you are unlucky to visit the city single then don&rsquo;t worry Velvet Klub has you covered. We bring you Escort services in Canberra like no other. We have experienced girls who know how to satisfy a man&rsquo;s needs. These beautiful girls will leave you speechless and explode an orgasm inside you.</p>\r\n\r\n<p>If you are looking to reignite your sex drive with a picture-perfect girl, then you need to contact us as soon as possible. We will help you find the perfect escorts and make you feel better and enjoy the city.&nbsp; Our girls are known to reignite sexual drive in a person and filled it with love within a night.</p>\r\n\r\n<p>You can use our Escort services in Canberra for formal events as well. They can dress in eloquent outfits and behave according to your needs. These girls are working professionals who know what they are doing and are experts in it. Think of it, like you are going on a date with a person you recently met. The girls will take care of everything else, and you will be delighted with the time you spend with them.</p>\r\n\r\n<p>If you are new to sex life or haven&rsquo;t practiced much lately, don&rsquo;t worry our girls are trained. They will revive your manhood and even bring lubes, and toys and engage in sexual foreplay for your mood. So, what are you waiting for?</p>\r\n\r\n<p>You are getting all the needs of a fun night at a fantastic price with our call girls in Mumbai. This is a rarity in Canberra with fake services going around. Lastly, we have girls who range from high-end to your price. So, that you experience a good time, find your missing romance, and fulfill your sexually desires.</p>', '2022-11-20 17:46:11', '2023-01-12 11:35:53'),
(19, 'Gold Coast', 'Gold Coast Escort | Goldcoast Services in Canberra', 'Find the best escort service in Goldcoast. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile\r\nEscort Listing.', 'goldcoast-escort', '<h1>Best Escort Services in Goldcoast</h1>\r\n\r\n<p>Gold Coast is known around the world for its sandy beaches, surfing sites, and incredible system of inland canals and waterways. The city has also built big theme parks such as Sea World, Dreamworld, and Wet&rsquo;n&rsquo;Wild. The city is also host to natural marvels such as incredible hiking trails, and the national park&rsquo;s mountain ridges and valleys. The rainforest is also home to rare and exotic birds.</p>\r\n\r\n<p>Now, if you are the kind of person who enjoys sex at such a natural spectacle or just wants to enjoy some intercourse after incredible sightseeing then Velvet Klub has you covered. We have Escort services in Gold Coast which cover all bases. Our girls have talents and skills far beyond an average call girl. They are familiar with kissing and moaning techniques which will pleasure like never before.</p>\r\n\r\n<p>Our escorts will turn up at your location horny and inching to satisfy you. So, get ready to feel every moan and boob squeeze with our girls. Many men would kill to have an experience like this.</p>\r\n\r\n<p>We understand that sex is satisfying without foreplay. Thus, we have trained our girls to play out different foreplay according to customer demand. They can dance, be your teacher, stepdaughter, maid, and much more. Just name your desire, and our girls will do it for you. If you want more fun, they can introduce different sex toys, or you can bring some toys of your choice. Then, you can play out any more fantasy you want.</p>\r\n\r\n<p>Many Escort services in Gold Coast are not affordable. But Velvet Klub understands that sexual desire doesn&rsquo;t need to be empty your pocket; it is for every common man, including you. That is why we have an affordable price for our Escorts service. So, everyone can forget the sadness and tension in their life and just enjoy pleasure sex with beautiful and hot girls.</p>\r\n\r\n<p>Our call girls offer different varieties such as Blowjob, Sex, sucking, Cum on Body, Deep French Kissing with tongue, Doggie style from behind, Full body massage, Oral sex, Play with boobs, etc. Just tell us your demand beforehand, and we will show you the availability of our experienced hot girls.</p>\r\n\r\n<p>&nbsp;</p>', '2022-11-20 17:53:25', '2023-05-12 17:31:25'),
(20, 'Melbourne', 'Melbourne Escort | Escort Services in Melbourne', 'Find the best escort service in Melbourne. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile\r\nEscort Listing.', 'melbourne-escort', '<h1>Best Escort Services in Melbourne</h1>\r\n\r\n<p>Melbourne is a metropolitan city with people from different cultures. This makes the city a perfect place to date people from different ethnicity. However, this isn&rsquo;t as simple as you think. Quite a lot of people are busy building their life that they forget to enjoy it every other while.</p>\r\n\r\n<p>This results in a frustrating personal life where you don&rsquo;t have a partner or don&rsquo;t fulfill your sexual pleasure. Both of these are harmful to your physical strength and can make you moody. If you are experiencing similar trends in your life, it is time to introduce yourself to Velvet Klub professional escorts.</p>\r\n\r\n<p>Our Escort services in Melbourne understand escort is necessary in modern society. often, all of us dream about taking a beautiful girl for a date and then bedding her. Most people can&rsquo;t fulfill this dream due to one reason or another. This hurts, even more, when your friends are dating beautiful hot girls and having sex regularly.</p>\r\n\r\n<p>Well, Our Escort services in Melbourne are here to turn your dreams into reality. We are a top-rated escort service. We have experienced girls who know how to satisfy a man&rsquo;s needs. These beautiful girls will leave you speechless and guaranteed an orgasm.</p>\r\n\r\n<p>These are picture-perfect girls known for reigniting sex appeal even in the oldest of horses. They will blow you away with their looks and then blow you again with their hot lips. We are certain you can&rsquo;t find such beauties anywhere else in Melbourne.</p>\r\n\r\n<p>If you are looking for a memorable night but can&rsquo;t ask a girl out. Just, register and book an appointment with one of our sizzling escorts. They will erect your manhood and then tame it giving you a memorable night for life.</p>\r\n\r\n<p>The good thing is that we prioritize anonymity. Thus, you can enjoy our service with different escorts without any fear. In doing so, you can fulfill different fantasies at an affordable rate. So, what is stopping you from enjoying your life with us?</p>', '2022-11-20 17:58:57', '2023-05-12 17:31:48'),
(21, 'New Zealand', 'New Zealand Escort | Escort Services in New Zealand', 'Find the best escort service in New Zealand. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile\r\nEscort Listing.', 'new-zealand-escort', '<h1>Best Escort Services in New Zealand</h1>\r\n\r\n<p>Sex isn&rsquo;t a taboo in the modern age in New Zealand. This makes it easy for people to turn their fantasies into reality. However, it is difficult to engage in these activities especially on the internet, where people are waiting to prey on your lack of knowledge.</p>\r\n\r\n<p>Thus, it is important to contact a legit Escort service in New Zealand such as Velvet Klub. We are a professional escort service with beautiful, sizzling girls for you. These are smart and ambitious girls who are hungry for sex. So, when you meet them, they will seem like ordinary girls, but they are complete beasts in bed.</p>\r\n\r\n<p>You can engage in any sexual fantasies with our escorts such as a threesome, BDSM, etc. Our escorts are also well-versed in foreplay. So, you can play out a stepdaughter, have sex with a maid, have sex with a hot mom, and much more. You can also bring your sex toys for a steaming session of sex as well.</p>\r\n\r\n<p>We have a wide range of girls so that you can have sex with Russians, big booty, big boobs, party girls, etc. Just specify your demand beforehand and select the girl. We are proud to say we are one of the few Escort services in New Zealand which offer variety at an affordable price.&nbsp;&nbsp;</p>\r\n\r\n<p>Our girls are charming and very sensual and pretty. They offer a pleasurable and enjoyable time for you just like your girlfriend. We train them to be friendly and take time to get you fully satisfied with all my erotic skills.</p>\r\n\r\n<p>So, if you really looking for real fun just like the way you want it then we are the best. Our sensual, soft, and caring girls can offer mind-blowing sessions when it comes to lovemaking and you will tell the difference. For example, You can shower and cuddle with our girls.</p>\r\n\r\n<p>So, what is stopping you from experiencing our incredibly sexy and gorgeous girl? Come to see me, babe. I am lonely and want you now.</p>', '2022-11-20 18:03:39', '2023-05-12 17:32:06'),
(22, 'New South Wales', 'New South Wales Escort | Escort Services in New South Wales', 'Find the best escort service in New South Wales. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site.\r\nHigh Profile Escort Listing.', 'new-south-wales-escort', '<h1>Take a Trip to the Beautiful New South Wales with the Professional Escort Service</h1>\r\n\r\n<p>New South Wales is a stunning Australian state located on the east coast of the country. With a beautiful coastline and stunning landscapes, there is plenty to explore and enjoy in this unique part of the world. Whether you&rsquo;re in town for business or pleasure, why not make the most of your time in New South Wales with one of our professional escorts?</p>\r\n\r\n<p>Our Escorts Make Every Moment Special</p>\r\n\r\n<p>At Velvet Klub escort service, we specialize in providing the ultimate in companionship, pleasure, and fun. Our escorts are available throughout New South Wales and can be booked for a range of occasions. Whether you&rsquo;re in town for a night out or need company for an evening, our professional escorts are here to make sure every moment of your stay is special.</p>\r\n\r\n<p>Here are a few reasons why you should hire Velvet Klub Escorts.</p>\r\n\r\n<p>First and foremost, escorts can provide a sense of intimacy and connection that can be difficult to find in other areas of life. Whether it&#39;s a physical connection or an emotional one, escorts can provide a sense of closeness and understanding that can be hard to find elsewhere. This can be especially beneficial for people who are struggling with feelings of loneliness or isolation.</p>\r\n\r\n<p>Another benefit of our escort services is that they can be a great way to explore new sexual experiences and experiment with different types of pleasure. Escorts are highly skilled and experienced in different types of sexual practices and can help you to explore new things and to discover new aspects of yourself. This can be incredibly liberating and help you feel more confident and self-assured in your sexual experiences.</p>\r\n\r\n<p>In conclusion, engaging in escort services can be a great way to explore the beautiful landscape of New South Wales. Select the girl you want to spend this moment with and have a gorgeous memory for life!</p>\r\n\r\n<p>&nbsp;</p>', '2022-11-20 18:10:27', '2023-05-12 17:32:25'),
(23, 'Perth', 'Perth Escort | Escort Services in Perth', 'Find the best escort service in Perth. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile\r\nEscort Listing.', 'perth-escort', '<h1>Best Escort Service in Perth</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The capital of Western Australia, Perth is where soft-sand beaches and scenic parks meet street art, small bars, and creative restaurants. This feels like a city from a romantic movie where a guy meets cute a girl, they spend the night together, and then fall in love. But we all know such things only happen in the movie.</p>\r\n\r\n<p>Now, if I tell you there is a way for you to experience this. Velvet Klub is an escorts service in Perth with some of the most beautiful girls you can find in Perth and spend a night with them. These are professional girls who are experienced to drive up a man&rsquo;s sexual desire and fulfilling it in one night with foreplay, toys, and anything you want.</p>\r\n\r\n<p>We understand that not everyone has a partner who fulfills their desires or is busy building their career. Thus, we can arrange gorgeous girls for people like you. Think of us as a company that is helping you with your physical needs. Our girls are strictly instructed to be professional and never reveal any information. Plus, these girls can ease off your tension and turn you horny so that you can have the night of your life.</p>\r\n\r\n<p>All our girls are picture-perfect, hot as hell. But every one of us has a different preference. Some might want a girl with attitude; others want something different. That is why we have lots of different call girls of different nationalities, and ethnicity. So, you can have sex with a beautiful and hot girl with a girl of your choice.</p>\r\n\r\n<p>Our Perth escorts have talents and skills far beyond an average call girl. They are familiar with kissing and moaning techniques which will pleasure like never before. Our escorts will turn up at your location horny and inching to satisfy you. So, get ready to feel every moan and boob squeeze with our girls.</p>\r\n\r\n<p>&nbsp;</p>', '2022-11-20 18:29:53', '2023-05-12 17:32:57'),
(24, 'Queensland', 'Queensland Escort | Escort Services in Queensland', 'Find the best escort service in Queensland. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile\r\nEscort Listing.', 'queensland-escort', '<h1><strong>Best Escort Services in Queensland</strong></h1>\r\n\r\n<p>Everyone dreams of sleeping with a beautiful girl. Sometimes, we don&rsquo;t get what we dream of. This leaves a person with sadness and distress. Hence, Velvet Klub brings you the best escorts service in Queensland. We have some of the finest picture-ese escorts which you won&rsquo;t find anywhere else.</p>\r\n\r\n<p>You can even browse some of our escorts in the images which are hand-picked to show what you are getting when you book an appointment. So, feast on these images properly before choosing the one for you. We have tons of photos for each escort, which you can look through before finding the one hot and gorgeous.</p>\r\n\r\n<p>We have even categorized our beautiful escort picture so that it is easy for you to find your dream girl. Our gallery contains pictures of escorts of different ethnicities (Russian, Asian, American, etc.), body features (Big boobs, petite, etc.). and so on. So, use our gallery of beautiful escorts in Hyderabad to find the one you have to have steaming sex with.</p>\r\n\r\n<p>There are a few things that distinguish our escorts service in Queensland from other. For example, our girls are experienced and skilled. They understand the physical craving and lusty emotions of a man and know how to fulfill them. The experience comes in handy and gives you a fantastic orgasm.</p>\r\n\r\n<p>The best part about sex with our escorts is that they aren&rsquo;t shy. They will actively take charge, whether it is a blowjob or different sex positions. They would be willing to do the kind of things other women, or your partner can never do.</p>\r\n\r\n<p>You can also engage in different foreplay with these beautiful and hot girls like banging your stepmother, having sex with your teacher, etc. This will turn them on, and they will drive you crazy with their moves. The girls will take care of everything else, and you will be delighted with the time you spend with them. So, book an escort from our site and get ready for a lifetime experience.</p>', '2022-11-20 18:37:40', '2023-05-12 17:33:22'),
(25, 'Sunshine Coast', 'Sunshine Coast Escort | Escort Services in Sunshine Coast', 'Find the best escort service in Sunshine. 100% verified account. No hidden charges. Live cam. Immediately response. Beautiful Escort Listing site. High Profile Escort Listing in Sunshine.', 'sunshine-coast-escort', '<h1>Experience the Best Escort Services in Sunshine Coast</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>When you are in the Sunshine Coast and are in need of some companionship and pampering, then you should look no further than Sunshine Coast Escorts. Our escort service offers you the best of companionship and entertainment in the area. Your time with our escorts will be full of pleasure, sensuality, and relaxation.</p>\r\n\r\n<p>Our goal is to provide you with the highest level of service and the most pleasurable experiences possible. We are dedicated to making sure that each and every one of our clients are satisfied and that their desires are met.</p>\r\n\r\n<p>Velvet Klub offers a wide range of escort services, from dinner dates and nightlife to more intimate encounters. Our escorts are experienced, beautiful, and discreet. They are sure to exceed your expectations and provide a memorable experience. We take the time to get to know each of our clients so that we can ensure the best match for their individual needs.</p>\r\n\r\n<p>When you work with Velvet Klub, you can be sure that your experience will be private and discreet. We understand that discretion is important and guarantee that your personal information will remain confidential. We also offer a safe and secure payment system and accept a variety of payment methods, including online transactions.&nbsp;&nbsp;</p>\r\n\r\n<p>At Sunshine Coast Escorts, we offer a range of escort services to match all tastes. Whether you are a businessman, entertainer, or simply an individual who wants to experience the best in companionship, we can provide you with a perfect and unforgettable experience.</p>\r\n\r\n<p>Our escorts are all beautiful, and professional, and understand how to provide the best service to their clients. All our escorts are well-versed in the local culture, customs, and attractions of the Sunshine Coast, making them ideal companions for whatever kind of activity you have in mind.</p>\r\n\r\n<p>Browse our gallery of the best Sunshine coast girls today and book your appointment to indulge in the ultimate in companionship.</p>', '2022-11-20 18:43:24', '2023-05-12 17:33:34'),
(26, 'Tasmania', 'Tasmania Escort | Escort Services in Tasmania', 'Find the best escort service in Tasmania. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile\r\nEscort Listing.', 'tasmania-escort', '<p>&nbsp;Find the best escort service in Tasmania. 100% verified account. No<br />\r\nhidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile<br />\r\nEscort Listing.</p>', '2022-11-20 18:45:49', '2023-05-12 17:34:52'),
(27, 'Victoria', 'Victoria Escort | Escort Services in Victoria', 'Find the best escort service in Victoria. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile\r\nEscort Listing.', 'victoria-escort', '<h1>Victoria Escort | Escort Service in Victoria</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>When choosing an escort in Victoria, there are a variety of things to consider. You want to go with<br />\r\nsomeone that makes you feel comfortable, whether you&#39;re in the middle of a date or on a romantic<br />\r\ngetaway with your partner.</p>\r\n\r\n<p>If you&#39;re looking for a escort in Victoria, look no further. We have the best escorts in Victoria and we<br />\r\nknow exactly how to get the most out of your time with them.</p>\r\n\r\n<p>Our team has many years of experience working with clients from all over the world. We&#39;ve helped<br />\r\nhundreds of people find their perfect escort experience, so we know what it takes to get you laid at<br />\r\nthe best possible price.</p>\r\n\r\n<p>We understand that when you&#39;re traveling on business or pleasure, it can be difficult to find<br />\r\nsomeone who&#39;s available and willing to go out with you right away. That&#39;s why we&#39;ve made our<br />\r\nservices as convenient as possible: we&#39;ll book your appointment in advance, so there&#39;s nothing<br />\r\nstanding between you and getting laid!</p>\r\n\r\n<p>The best escorts in Victoria are the ones that know how to make you feel special and pampered.<br />\r\nThey should be able to do this in a way that doesn&#39;t feel like they&#39;re trying too hard, but rather just<br />\r\ndoing their job. It&#39;s important that they can make your experience comfortable, exciting and<br />\r\nmemorable.</p>\r\n\r\n<p>You don&#39;t want to spend a lot of time with a escort that makes you feel like you&#39;re being judged or<br />\r\ntalked down to, but rather one that makes you feel as though you&#39;re an important part of their<br />\r\nworld. If a escort is good at this, then you&#39;ll know that she&#39;s worth taking the time out of your day<br />\r\nfor&mdash;and if she&#39;s not? You might just want to find someone else who can give you what you need!</p>\r\n\r\n<p>escorts in Victoria are so good that they can make you forget about all your problems. They are<br />\r\navailable 24 hours a day, and will take care of all your needs.</p>\r\n\r\n<p>Victoria escorts are the most attractive, attractive and most beautiful women in the world! Their<br />\r\npersonalities are amazing, and they will be able to make you feel comfortable.</p>\r\n\r\n<p>escorts in Victoria are always ready to serve their clients with pleasure from the first moment they<br />\r\nmeet them until the last moment they leave their hotel room. If you want to spend some quality<br />\r\ntime with a beautiful woman then book a escort in Victoria right now!</p>', '2022-11-20 18:55:19', '2023-05-12 17:35:18'),
(30, 'Sunshine Coast Test', 'Sunshine Coast Escorts | Escort Services in Sunshine', 'Find the best escort service in Sunshine. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing in Sunshine.', 'sunshine-coast-escorts', '<h1>Experience the Best Escort Services in Sunshine Coast</h1>\r\n\r\n<p>When you are in the Sunshine Coast and are in need of some companionship and pampering, then you should look no further than Sunshine Coast Escorts. Our escort service offers you the best of companionship and entertainment in the area. Your time with our escorts will be full of pleasure, sensuality, and relaxation.</p>\r\n\r\n<p>Our goal is to provide you with the highest level of service and the most pleasurable experiences possible. We are dedicated to making sure that each and every one of our clients is satisfied and that their desires are met.</p>\r\n\r\n<p>Velvet Klub offers a wide range of escort services, from dinner dates and night life to more intimate encounters. Our escorts are experienced, beautiful, and discreet. They are sure to exceed your expectations and provide a memorable experience. We take the time to get to know each of our clients so that we can ensure the best match for their individual needs.</p>\r\n\r\n<p>When you work with Velvet Klub, you can be sure that your experience will be private and discreet. We understand that discretion is important and guarantee that your personal information will remain confidential. We also offer a safe and secure payment system and accept a variety of payment methods, including online transactions.&nbsp;&nbsp;</p>\r\n\r\n<p>At Sunshine Coast Escorts, we offer a range of escort services to match all tastes. Whether you are a businessman, entertainer, or simply an individual who wants to experience the best in companionship, we can provide you with a perfect and unforgettable experience.</p>\r\n\r\n<p>Our escorts are all beautiful, professional, and understand how to provide the best service to their clients. All our escorts are well-versed in the local culture, customs, and attractions of the Sunshine Coast, making them ideal companions for whatever kind of activity you have in mind.</p>\r\n\r\n<p>Browse our gallery of the best Sunshine coast girls today and book your appointment to indulge in the ultimate in companionship.</p>\r\n\r\n<p>&nbsp;</p>', '2022-12-07 07:37:22', '2023-05-12 17:38:03'),
(31, 'ipswich', 'ipswich Escorts | Escort Services in ipswich', 'Find the best escort service in Ipswich. 99% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing in Ipswich.', 'ipswich-escorts', '<h1>Indulge in the Ultimate Relaxation with Beautiful Escort Services in Ipswich</h1>\r\n\r\n<p>Introducing Velvet Klub, a luxurious and indulgent provider of Beautiful Escort Services in Ipswich. You can expect to enjoy a relaxing and rejuvenating escort experience from our highly skilled and professional massage escorts.</p>\r\n\r\n<p>We offer a wide range of escorts that are tailored to meet your specific needs and desires. Whether you&#39;re looking for a relaxing time, a deep sexual meeting to release tension and stress, or a sensual and erotic massage, we have something to suit everyone.</p>\r\n\r\n<p>Our Ipswich escorts are not only beautiful but also highly professional and experienced in providing the most exquisite experiences. They are dedicated to providing you with the ultimate pleasure and are completely satisfied.&nbsp;</p>\r\n\r\n<p>We understand that everyone&#39;s needs are different, which is why we have girls from different body types, ethnicity, kinks, etc. We will help you find the perfect escorts and make you feel better and enjoy the city.&nbsp; Our girls are known to reignite sexual drive in a person and fill it with love within a night. We can ensure we have something to suit everyone.</p>\r\n\r\n<p>At Velvet Klub, we can guarantee you won&rsquo;t find another escort service in Ipswich. Our picture-perfect girls have only one goal in mind, making your time better. So, you can ask her to roleplay, indulge in your kink and you will have the sex of your time. All you need to do is engage politely and let our girls do the magic.</p>\r\n\r\n<p>Our beautiful Ipswich girls are waiting to pamper and spoil you. Your sexual needs will be met completely and make that moment memorable for the rest of your life.</p>\r\n\r\n<p>In conclusion, Velvet Klub is the go-to destination for the most beautiful and professional Ipswich escorts. You can find girls who range from high-end to your price. So, that you experience a good time, find your missing romance, and fulfill your sexual desires. So, what are you waiting for? Find your dream girl and take her out.</p>\r\n\r\n<p>&nbsp;</p>', '2022-12-07 07:40:22', '2023-01-31 11:57:51'),
(33, 'Bundaberg', 'Bundaberg Escorts | Escorts Services in Bundaberg', 'Find the best escort service in Bundaberg. 90% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing in Bundaberg.', 'bundaberg-escorts', '<h1>Discover the ultimate Bundaberg Girls at Velvet Klub</h1>\r\n\r\n<p>Welcome to Velvet Klub, the premier destination for those seeking the ultimate escorts service in Bundaberg. We specialize in providing the best Bundaberg escorts who are not only beautiful and sensual, but also intelligent and engaging. Our escorts services are designed to cater to the unique needs and desires of each and every one of our clients. Whether you&#39;re looking for a romantic dinner date, a night out on the town, or something more intimate, our girls are here to fulfill your every fantasy.</p>\r\n\r\n<p>We offer a wide range of escorts services, from a simple dinner date to a weekend getaway. Our girls are well-versed in the art of conversation and can engage in any topic, making them perfect companions for any occasion. They are also trained to make you feel comfortable and relaxed, so you can fully enjoy your time with them.</p>\r\n\r\n<p>At Velvet Klub, we understand the importance of discretion and that&#39;s why we take great care to ensure that your experience with us is completely private and confidential. You can rest assured that your time with one of our girls will be a memorable one, and one that you will want to repeat again and again.</p>\r\n\r\n<p>Our selection process for the best Bundaberg girls is rigorous, we handpick each girl for their beauty, charm, and sparkling personalities. They possess the skills and talents to make sure that you have the time of your life. Whether you&#39;re looking for a fiery redhead or a sultry brunette, we have the perfect girl for you. Our gallery is constantly updated with new faces, so you will always have a wide selection to choose from.</p>\r\n\r\n<p>So why wait? Treat yourself to the best escort experience in Bundaberg with Velvet Klub. With our gorgeous girls, world-class service, and commitment to discretion, you are guaranteed an unforgettable experience. Browse our gallery of the best Bundaberg girls today and book your appointment to indulge in the ultimate in experience.</p>', '2022-12-07 07:45:14', '2023-01-31 12:01:14'),
(34, 'Gladstone', 'Gladstone Escorts | Escort Services in Gladstone', 'Find the best escort service in Gladstone. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing in Gladstone.', 'gladstone-escorts', '<h1>Find the best Escort service in Gladstone</h1>\r\n\r\n<p>Velvet Club offers professional online escorts service in Gladstone, Australia. We are a top-quality escort agency in Gladstone and we have a great selection of sexy ladies for your enjoyment. Each one is unique with her special look, which will appeal to your erotic desires.&nbsp;</p>\r\n\r\n<p>Our ladies are available for in-call and out-call services. You can invite them over to your apartment or you can visit their locations during your stay in Gladstone. Our girls are classy, warm-hearted, and very friendly. You will sense that they are genuinely interested in exploring your fantasy with you. They want you to feel confident and happy about what you choose from our services.</p>\r\n\r\n<p>Unlike most online dating services, our well-trained staff makes sure that every girl is 100% genuine and serious about meeting real men. When you join Velvet Club, you have access to many of the most beautiful, intelligent, and sophisticated women in the world.</p>\r\n\r\n<p>Our escort agency Gladstone offers high-quality services at attractive prices. We have a wide selection of models for you to choose from and we can customize your dates to match your budget and desire. All our ladies are very discreet, and they can arrive anywhere at any time, whether it is a dinner date or an overnight stay.</p>\r\n\r\n<p>Our service is unmatched in delivery and ease of use&hellip; all you need to do is sit back and enjoy!&nbsp;</p>\r\n\r\n<p>All of the ladies on our site are genuine, professional, and highly respected members of the community. They are members of society and career girls who have chosen to make a little extra money on the side by working for Velvet Club. Our women are proud of their careers and are extremely successful in what they do for a living. They are simply supplementing their income with a little fun on the side!</p>\r\n\r\n<p>With our gorgeous girls, world-class service, and commitment to discretion, you are guaranteed an unforgettable experience. Browse our gallery of the best Gladstone girls today and book your appointment to indulge in the ultimate in companionship.</p>\r\n\r\n<p>&nbsp;</p>', '2022-12-07 07:46:48', '2023-01-31 11:37:36'),
(35, 'Rockhampton', 'Rockhampton Escorts | Escort Services in Rockhampton', 'Find the best escort service in Rockhampton. 95% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing in Rockhampton.', 'rockhampton-escorts', '<h1>Professional escort services and companionship in Rockhampton</h1>\r\n\r\n<p>Rockhampton is known as the &quot;Beef Capital of Australia&quot;, Rockhampton is a major agricultural and mining center with a rich history and a vibrant cultural scene. Visitors can explore the city&#39;s many museums and art galleries, take a stroll along the picturesque Fitzroy River, or enjoy the great outdoors with hiking, fishing, and camping in the nearby national parks.</p>\r\n\r\n<p>Now, if I tell you there is a way for you to experience this with a gorgeous girl. Velvet Klub is an escort service in Rockhampton with some of the most beautiful Rockhampton you can find in Rockhampton and spend a night with them.&nbsp;</p>\r\n\r\n<p>The escorts we feature on our website are among the most beautiful, intelligent, and professional in Rockhampton. Our escorts travel around Australia and the world, so you can see why they are some of the most desirable companions anywhere.</p>\r\n\r\n<p>Our gorgeous escorts in Rockhampton are all unique and individual, with their own stunning personalities, who are always ready to meet your needs. They will certainly be able to help you unwind after a long and stressful day.</p>\r\n\r\n<p>Our Rockhampton escorts can travel with you wherever you need to go &ndash; home, hotel, business meeting, or event &ndash; and you don&rsquo;t need to feel embarrassed about bringing them in with you. They are highly trained and experienced in providing the most exquisite experiences. They are dedicated to providing you with the ultimate delight, leaving you feeling invigorated and completely satisfied.</p>\r\n\r\n<p>Trustworthy, Discreet, and Secure.</p>\r\n\r\n<p>We work hard to maintain a high standard of safety, security, and confidentiality. Our customers are important to us, and we will go out of our way to protect your privacy. Therefore, we offer multiple levels of protection on our servers to ensure your privacy is always protected.</p>\r\n\r\n<p>You can meet a real person through our service. Our escorts are independent, you can book directly with them with our assistance or choose to book independently yourself.</p>\r\n\r\n<p>&nbsp;</p>', '2022-12-07 07:48:53', '2023-01-31 12:02:17'),
(36, 'Mackey', 'Mackey Escorts | Escort Services in Mackey', 'Find the best escort service in Mackey. 100% trusted account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing in Mackey.', 'mackey-escorts', '<h1>Are you in search of the finest Mackay escorts?</h1>\r\n\r\n<p>Mackay is a coastal city located in the state of Queensland, Australia. Known for its beautiful beaches, scenic hiking trails, and rich cultural heritage, Mackay is a popular destination for tourists and locals alike. Mackay is a great destination for those looking to experience the best of Australian coastal living.</p>\r\n\r\n<p>Now, if there was a way to make that experience marvelous and memorable? Don&rsquo;t look further than Velvet Klub. Velvet Club is one of the leading independent escort service providers in Mackay.&nbsp;</p>\r\n\r\n<p>The escorts we feature on our website are among the most beautiful, intelligent, and professional in Mackay. Our escorts travel around Australia and the world, so you can see why they are some of the most desirable companions anywhere.</p>\r\n\r\n<p>We are a professional Escorts Service!</p>\r\n\r\n<p>Our Mackey escorts are very well-educated, sophisticated, and talented. Even though Mackey our escort service offers you the odd girlfriend experience, our escorts are still generally considered to be professionals with regard to the pre-arranged encounter. Our call girls have been carefully selected from all over the world. We cater to every need of men from all across the globe.</p>\r\n\r\n<p>Our Mackay escorts are versatile</p>\r\n\r\n<p>Some of the Mackey escorts are bisexual and some are lesbian. Some specialize in group sex, and some do not. All of them are available for the most adventurous and sensuous services. Our escort directory features a wide range of female companions to choose from. Whether you are seeking long-term friendships or simply want a one-night stand, you will find them on our website.</p>\r\n\r\n<p>No matter where you live or where you visit for pleasure, you can hire our Mackey escorts for a full evening of fun. We want you to feel satisfied every time you come to us. You can call us any time during the day or night because we work 24 hours a day. Book your appointment today and let us take you on a journey of pure satisfaction.</p>', '2022-12-07 07:51:18', '2023-01-31 12:03:08'),
(37, 'Townsville', 'Townsville Escorts | Escorts Services in Townsville', 'Find the best escort service in Townsville. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing in Townsville.', 'townsville-escorts', '<h1>Enjoy your time with Top Townsville Escorts</h1>\r\n\r\n<p>Welcome to Velvet Klub, the premier destination for fun in your life. If you are in Townsville, we have you covered. We specialize in providing top Townsville escorts who are not only skilled in intercourse but also beautiful, sensual, and engaging.</p>\r\n\r\n<p>Townsville is a vibrant and beautiful city that offers romantic sunsets on the beach to exciting adventures in the great outdoors, Townsville has something to offer for every couple. Whether you&#39;re looking for a relaxing getaway or an action-packed vacation, Townsville has it all. With its stunning natural beauty, delicious dining options, and endless activities.</p>\r\n\r\n<p>Our escort services are designed to cater to the unique design of Townsville, where our girls are here to help you unwind and relax.</p>\r\n\r\n<p>Here are a few reasons why you should choose Velvet Klub Townsville escorts.</p>\r\n\r\n<ul>\r\n	<li>Convenience: Our escorts are willing to join in at your house, hotel, or anywhere else. This ensures you don&rsquo;t have to leave your comfort zone to have a wonderful time. This makes it perfect for busy individuals who don&#39;t have the time to visit outside.</li>\r\n	<li>Variety: Whether you&#39;re looking for a fiery redhead or a sultry brunette, we have the perfect girl for you. Our gallery is constantly updated with new faces, so you will always have a wide selection to choose from.</li>\r\n	<li>Trained Professionals: Our team of professionals are highly trained and experienced, ensuring that you receive the best possible care. They are passionate about their work and are committed to helping you feel your best.</li>\r\n</ul>\r\n\r\n<p>At Velvet Klub, we believe that every client deserves the best. That&#39;s why we go above and beyond to ensure that your experience with us is truly unforgettable. From the moment you book your appointment, our friendly and professional staff will guide you through the process and answer any questions you may have.</p>\r\n\r\n<p>&nbsp;</p>', '2022-12-07 07:54:14', '2023-01-31 11:43:06'),
(38, 'Cairns', 'Cairns Escorts | Escort Services in Cairns', 'Enjoy the best escort service in Cairns. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing in Cairns.', 'cairns-escorts', '<h1>Relax with top Cairns Escorts at an affordable price</h1>\r\n\r\n<p>In this fast-paced life, people often forget about themselves and their desires. Thus, people don&rsquo;t engage in as much sex as their minds and body want. This leads to a frustrating and anxiety-filled daily life. However, you don&rsquo;t need to worry much about this. As Velvet Klub brings you high-class Cairns escorts.</p>\r\n\r\n<p>We have experienced girls who know how to satisfy a man&rsquo;s needs. These beautiful girls will leave you speechless and explode an orgasm inside you. If you are looking to reignite your sex drive with a picture-perfect girl, then you need to contact us as soon as possible. You can find the perfect Cairns escorts from our displays and make yourself the king for that day.</p>\r\n\r\n<p>Reignite Your Sexual desires with Velvet Klub Escorts!</p>\r\n\r\n<p>Do you feel your sexual desires aren&rsquo;t being fulfilled? If so, then we have girls, who can help you. These are experienced girls who know how to reignite sexual drive in a person and filled it with love within a night,</p>\r\n\r\n<p>Now, we know there is a taboo around escorts, but times are changing. These girls are working professionals who know what they are doing and are experts in it. Think of it, like you are going on a date with a person you recently met. The girls will take care of everything else, and you will be delighted with the time y spend with them.</p>\r\n\r\n<p>If you are new to sex life or haven&rsquo;t practiced much lately, don&rsquo;t worry our girls are trained. They will revive your manhood and even bring lubes, and toys and engage in sexual foreplay for your mood. The best thing is you are getting all the needs of a fun night at a fantastic price with our Escort Services in Cairns. This is a rarity in Cairns. Lastly, we have girls who range from high-end to your price. So, that you experience a good time, find your missing romance, and fulfill your sexual desires.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2022-12-07 07:56:13', '2023-01-31 12:04:10'),
(39, 'Mount isa', 'Mount isa Escorts | Escort Services in Mount ISA', 'Find the best escort service in Mount ISA. 100% verified account. No hidden charges. Immediately response. Best Escort Listing site. High Profile Escort Listing in Mount ISA.', 'mount-isa-escorts', '<h1>Welcome to the Best Escort Services in Mount ISA</h1>\r\n\r\n<p>Are you in search of the finest Mount Isa Escorts? Then you should look no further than our exclusive and professional escort services &ndash; Velvet Klub. Our Mount Isa escorts will provide you with a uniquely sensual and thrilling experience. Whether you are visiting Mount Isa for business or pleasure, we have the perfect escort to make your stay even more memorable.</p>\r\n\r\n<p>Our Mount Isa escorts are some of the sexiest and most attractive girls in town. From voluptuous blondes to fiery redheads, we have a wide selection of gorgeous women who are ready and willing to fulfill your every desire. Our escorts are experienced and eager to please you, and they will make sure that you have an unforgettable time.</p>\r\n\r\n<p>Our services provide the ultimate in discretion and privacy, so you can be sure that your privacy and satisfaction will be completely taken care of. Our escorts can accompany you on business trips, social events, and other occasions.</p>\r\n\r\n<p>Our escort services in Mount Isa are tailored to meet the individual needs of our clients. Whether you&#39;re looking for a dinner companion, a travel partner, or someone to spend an intimate evening with, we&#39;ve got you covered. Our companions are available for both incalls and outcalls and can be booked for any length of time.</p>\r\n\r\n<p>At our agency, we ensure that all our mount Isa escorts are thoroughly vetted and screened to ensure that they are of the highest quality. We also ensure that all our companions are respectable citizens of our society.</p>\r\n\r\n<p>n conclusion, if you&#39;re looking for the ultimate experience in Mount Isa, look no further than our mount Isa escort service. Our beautiful and charming girls are the perfect choice for any occasion, whether it&#39;s a dinner date, a night out on the town, or a more intimate encounter. We guarantee that you&#39;ll leave with an unforgettable experience and memories that will last a lifetime.</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', '2022-12-07 07:58:34', '2023-02-07 12:16:17');
INSERT INTO `pages` (`id`, `page_name`, `meta_title`, `meta_description`, `location`, `content`, `created_at`, `updated_at`) VALUES
(40, 'NSW', 'Escorts in NSW | Escorts Services in NSW', 'Find the best escort service in NSW. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'escorts-in-NSW', '<h1>Take a Trip to the Beautiful New South Wales with the Professional Escort Service</h1>\r\n\r\n<p>New South Wales is a stunning Australian state located on the east coast of the country. With a beautiful coastline and stunning landscapes, there is plenty to explore and enjoy in this unique part of the world. Whether you&rsquo;re in town for business or pleasure, why not make the most of your time in New South Wales with one of our professional escorts?</p>\r\n\r\n<p>Our Escorts Make Every Moment Special</p>\r\n\r\n<p>At Velvet Klub escort service, we specialize in providing the ultimate in companionship, pleasure, and fun. Our escorts are available throughout New South Wales and can be booked for a range of occasions. Whether you&rsquo;re in town for a night out or need company for an evening, our professional escorts are here to make sure every moment of your stay is special.</p>\r\n\r\n<p>Here are a few reasons why you should hire Velvet Klub Escorts.</p>\r\n\r\n<p>First and foremost, escorts can provide a sense of intimacy and connection that can be difficult to find in other areas of life. Whether it&#39;s a physical connection or an emotional one, escorts can provide a sense of closeness and understanding that can be hard to find elsewhere. This can be especially beneficial for people who are struggling with feelings of loneliness or isolation.</p>\r\n\r\n<p>Another benefit of our escort services is that they can be a great way to explore new sexual experiences and experiment with different types of pleasure. Escorts are highly skilled and experienced in different types of sexual practices and can help you to explore new things and to discover new aspects of yourself. This can be incredibly liberating and help you feel more confident and self-assured in your sexual experiences.</p>\r\n\r\n<p>In conclusion, engaging in escort services can be a great way to explore the beautiful landscape of New South Wales. Select the girl you want to spend this moment with and have a gorgeous memory for life!</p>', '2022-12-07 08:08:54', '2023-05-12 17:42:33'),
(41, 'Sydney', 'Sydney Escorts | Escort Services in Sydney', 'Book the best escort service in Sydney. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing.', 'sydney-escorts', '<h1>A Day of Luxury with Professional Escorts in Sydney</h1>\r\n\r\n<p>Are you longing for an indulgent escape from the mundane and the everyday? Are you in search of a luxurious experience that will make you feel alive and satisfied? Look no further than the Velvet Klub &ndash; A professional escort service in Sydney.</p>\r\n\r\n<p>At our escort agency, we are passionate about providing a unique and luxurious experience that you won&rsquo;t soon forget. Whether you&rsquo;re visiting Sydney on vacation or you&rsquo;re a local who&rsquo;s yearning for a special day out, our professional Sydney escorts are here to offer you the highest level of pleasure and satisfaction.</p>\r\n\r\n<p>Our escorts are knowledgeable and reliable, and they will make sure that your needs and wishes are taken care of. Before booking your appointment, you can take a look at our gallery of available escorts and make sure you choose the perfect match for you.</p>\r\n\r\n<p>Additionally, escorts can also be a great way to relax and unwind. The act of receiving a sensual massage or being in the company of a beautiful and attentive escort can be a great way to forget about the stresses of daily life and focus on the present moment. This can be especially beneficial for people who are dealing with stress or anxiety and who need a break from the constant demands of daily life.</p>\r\n\r\n<p>Lastly, engaging in escort services can be a great way to boost your self-esteem and confidence. The act of engaging in an escort can help you to feel more desirable and to feel more confident in yourself. This can be especially beneficial for people who are struggling with feelings of insecurity or self-doubt.</p>\r\n\r\n<p>In conclusion, engaging in escort services in Sydney can be a great way to explore your sexuality, relax and unwind, and boost your self-esteem and confidence. It can provide a sense of intimacy and connection that can be difficult to find in other areas of life and can help you to explore new sexual experiences and to experiment with different types of pleasure.</p>\r\n\r\n<p>&nbsp;</p>', '2022-12-07 08:15:34', '2023-01-31 11:54:30'),
(42, 'Kings Cross', 'Kings Cross Escorts | Escorts Services in Kings Cross', 'Find the best escort service in Kings Cross. 100% trusted Profile. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'kings-cross-escorts', '<h1>Spend a day with gorgeous Escorts Services in Kings Cross</h1>\r\n\r\n<p>King&#39;s Cross is known for its nightlife and entertainment. It is located just outside the central business district and is littered with bars, clubs, and restaurants. Additionally, it is home to several historic landmarks and is a popular tourist destination. It is also known for its street art and its association with the counterculture of the 1960s.&nbsp;</p>\r\n\r\n<p>In recent years it&#39;s been also associated with the red-light district, but there have been efforts to change this image and promote it as a cultural and creative hub. This has led to a taboo with kings&#39; cross escorts. It has made It hard to find beautiful, hot escorts. This is why velvet Klub is now available in the area.</p>\r\n\r\n<p>We are a professional escorts service with beautiful, sizzling girls for you. These are smart and ambitious girls who are hungry for sex. So, when you meet them, they will seem like ordinary girls, but they are complete beasts in bed.&nbsp;</p>\r\n\r\n<p>You can engage in any sexual fantasies with our escorts. So, a threesome with the wife or your friend is possible. You can also engage in foreplay such as stepdaughter, stepbrother, sexy maid, hot mom, and much more. If you are the kinky type, you can bring or demand sex toys to add another theme of excitement to sex.</p>\r\n\r\n<p>We have a wide range of girls so that you can have sex with Russians, big booty, big boobs, party girls, etc. Just specify your demand beforehand and select the girl. Now, you are ready to bring your fantasies into reality. That too at an affordable cost. So, you won&rsquo;t be emptying your pocket while engaging in your sexual fantasy. Also, we instruct our Kings cross escorts to ensure that your experience with us is completely private and confidential.</p>\r\n\r\n<p>Book your appointment now and let us show you why Velvet Klub is the best choice for Escorts services in kings cross.</p>\r\n\r\n<p><br />\r\n<br />\r\n&nbsp;</p>', '2022-12-07 08:17:18', '2023-02-06 13:09:30'),
(43, 'North Sydney', 'North Sydney Escorts | Escorts Services in North Sydney', 'Find the best escort service in North Sydney. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'north-sydney-escorts', '<p>Find the best escort service in North Sydney. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.</p>', '2022-12-07 08:19:06', '2022-12-07 08:54:28'),
(44, 'Liverpool', 'Liverpool Escorts | Escorts Services in Liverpool', 'Find the best escort service in Liverpool. 98% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'liverpool-escorts', '<h1>Fulfill your dream of bedding a Beautiful Liverpool Escorts&nbsp;</h1>\r\n\r\n<p>Every while, all of us dream about taking a beautiful girl for a date and then bedding her. Most people can&rsquo;t fulfill this dream due to one reason or another. This hurts, even more, when your friends are dating beautiful hot girls and having sex regularly.</p>\r\n\r\n<p>Well, Velvet Klub is here to turn your dreams into reality. We are a top-rated Escorts Services in Liverpool. We have experienced Liverpool escorts who know how to satisfy a man&rsquo;s need. These gorgeous girls will leave you speechless and guaranteed an orgasm.</p>\r\n\r\n<p>These are picture-perfect girls known for reigniting sex appeal even in the oldest of horses. They will blow you away with their looks and then blow you again with their hot lips. We are certain you can&rsquo;t find such beauties anywhere else in Liverpool.</p>\r\n\r\n<p>Why makes us Liverpool&#39;s best escort service?</p>\r\n\r\n<p>As a professional escorts service, we have screened out Liverpool escorts for health and safety reasons. This is important for both the client and the escort as it reduces the risk of any health issues and ensures that the client is safe.&nbsp;</p>\r\n\r\n<p>We also provide a wider range of services as well. Our escorts can offer a variety of services to cater to different client needs and preferences. They can provide companionship, sensual massage, or even fetish services. They are also able to provide services to a wider range of clients, including those with specific needs or desires.</p>\r\n\r\n<p>Lastly, professional escorts can provide a more discreet and confidential service. They understand the importance of privacy and confidentiality, and they will work to ensure that their client&#39;s information is kept private. This is important for clients who want to maintain a certain level of discretion.</p>\r\n\r\n<p>If you are looking for a memorable night but can&rsquo;t ask a girl out. Just, register and book an appointment with one of our sizzling escorts. They will erect your manhood and then tame it giving you a memorable night for life.</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', '2022-12-07 08:20:46', '2023-02-06 13:12:12'),
(45, 'Campbelltown', 'Campbelltown Escorts | Escorts Services in Campbelltown', 'Find the best escort service in Campbelltown. 100% verified account. No hidden charges. Quick response. Best Escort Listing site. High Profile Escort Listing.', 'campbelltown-escorts', '<h1>Introducing Campbelltown&rsquo;s Finest Escorts from Velvet Klub</h1>\r\n\r\n<p>Are you in search of the perfect companion for your evening or weekend? Look no further than Velvet Klub, Campbelltown&rsquo;s leading escort service. Our selection of experienced and professional escorts provides incomparable services that guarantee an unforgettable experience.</p>\r\n\r\n<p>At Velvet Klub, we pride ourselves on offering the most desirable escorts in Campbelltown. Our team of experienced professionals carefully screens and vets each applicant to ensure they meet the highest standards of beauty, intelligence, and sophistication. We know that each client&rsquo;s needs are unique and that&rsquo;s why we offer a variety of services, ranging from traditional companionship to intimate and sensual encounters.</p>\r\n\r\n<p>Take your Sexual Fantasy to next level:</p>\r\n\r\n<p>We understand that everyone&#39;s sexual fantasies are different. You might want to engage in roleplay such as fuck a school teacher, picking your female hot boss, etc. The best thing is you can find such willing girls of different ethnicity, body types, hair colour, etc. All of this is possible with our gorgeous Toowoomba escorts.</p>\r\n\r\n<p>Our Campbelltown escorts can even arrange sex toys before the meet. A sexy handcuff with the highest quality oil is a match made in heaven. All you need to do is mentioned these things in advance and our girl would willing to participate to ensure you have an orgasm worth remembering for the rest of your life.&nbsp;&nbsp;</p>\r\n\r\n<p>Whether you&rsquo;re in the mood for a romantic dinner date, a night out on the town, or a private evening in, Velvet Klub has the perfect escort for you.&nbsp; Browse through our online gallery to view our selection of feminine beauties, each with its unique talents and personality. Once you&rsquo;ve found the perfect companion for your evening, contact us to make your reservation.</p>\r\n\r\n<p>&nbsp;</p>', '2022-12-07 08:22:27', '2023-02-06 13:15:35'),
(46, 'Bankstown', 'Bankstown Escorts | Escort Services in Bankstown', 'Find the Premium escort service in Bankstown. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'bankstown-escorts', '<h1>Experience Premium Escort Services in Bankstown at Velvet Klub</h1>\r\n\r\n<p>Are you in search of quality escort services in Bankstown? Look no further than Velvet Klub! We are a premium escort service offering the most delightful escorts in Bankstown who will provide you with an unforgettable experience.</p>\r\n\r\n<p>At Velvet Klub, you can find the most stunning and talented escorts in town. Our escorts are experienced, friendly, and know how to make your time with them an unforgettable one. They are professionals and have a passion for providing the best services for our clients. Whether you are in town for business or pleasure, you can be assured that our escorts are ready to give you the time of your life.</p>\r\n\r\n<p>Explore your kinks with our Escort Services in Bankstown</p>\r\n\r\n<p>Exploring one&#39;s kinks and fetishes can be an exciting and liberating experience, but it can also be difficult to find partners who are willing or able to participate. This is where escort services can come in. By engaging in escort services, individuals can explore their kinks and fetishes in a safe, consensual and non-judgmental environment.</p>\r\n\r\n<p>One of the main benefits of exploring your kinks with our escort service is the level of privacy and discretion it offers. Many people may feel ashamed or embarrassed about their kinks and fetishes and may not want to share them with a partner or friends. Velvet Klub Bankstown escorts provide a safe and confidential space for individuals to explore their desires without fear of judgement or rejection.</p>\r\n\r\n<p>Another benefit is the level of professionalism and experience that comes with engaging in an escort service. Escorts are trained and experienced in providing a wide range of services, and they can often provide guidance and advice on how to explore your kinks safely and responsibly. They are also able to provide a wide range of services, including BDSM and fetish services, that may be difficult to find in a personal relationship.</p>\r\n\r\n<p>So, what are you waiting for? Browse our site and find the girl which fits your kink and we can take it from there!</p>\r\n\r\n<p>&nbsp;</p>', '2022-12-07 08:24:09', '2023-02-06 13:19:04'),
(47, 'Homebush', 'Homebush Escorts | Escorts Services in Homebush', 'Get the best escort service in Home Bush. 95% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. premium Profile Escort Listing.', 'homebush-escorts', '<h1>Enjoy a Night of Fun with Home Bush Escorts</h1>\r\n\r\n<p>Welcome to Velvet Klub, the top escort service in Home Bush. We have a night of fun in store for you with our gorgeous Home Bush escorts! Our selection of stunning, sensual ladies is available for an evening of pleasure and adventure.</p>\r\n\r\n<p>Experience the best Home Bush escorts with Velvet Klub. Our experienced escorts know how to satisfy your desires and provide you with an unforgettable evening. Our ladies are beautiful, passionate and know how to make any evening a memorable one. Whether you&#39;re after a wild night of passion or a romantic dinner date, our escorts have you covered.</p>\r\n\r\n<p>Fun and Discreet Escort Service&nbsp;</p>\r\n\r\n<p>Our discreet Home Bush escort service will ensure that your time with us is fun and exciting, without any worries. Our ladies are also very professional and know how to ensure that your privacy is respected at all times.</p>\r\n\r\n<p>Exploring your kinks with an escort service can also be a great way to build self-confidence and self-esteem. Many people who engage in kinks and fetishes may feel ashamed or guilty about their desires and exploring them with an escort can help to break down these negative feelings and build a more positive self-image.</p>\r\n\r\n<p>Additionally, engaging in escorts services can also be a great way to experiment and try new things. Escorts can help you to explore different kinks and fetishes that you may be curious about but have never had the opportunity to try. This can be incredibly liberating and can help you to discover new aspects of yourself.</p>\r\n\r\n<p>In conclusion, engaging in escorts services can be a great way to explore your kinks and fetishes in a safe, consensual and non-judgmental environment. It offers a level of privacy and discretion, professionalism and experience and can help to build self-confidence, self-esteem and experiment new things.&nbsp;</p>\r\n\r\n<p>Register with us and book an appointment with one of our sizzling escorts. They will erect your manhood and then tame it giving you a memorable night for life.</p>\r\n\r\n<p>&nbsp;</p>', '2022-12-07 08:26:07', '2023-02-06 13:29:05'),
(48, 'Parramatta', 'Parramatta Escorts | Escort Services in Parramatta', 'Find the best escort service in Parramatta. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. premium Profile Escort Listing.', 'parramatta-escorts', '<h1>Experience the Finest Parramatta Escorts with Velvet Klub</h1>\r\n\r\n<p>Are you ready for a night of pleasure and bliss? Welcome to Velvet Klub, the premier escort service in Parramatta. Our elite escorts will provide you with the best services in town. Our team of experienced professionals have been hand-picked to create an unforgettable experience for you.</p>\r\n\r\n<p>At Velvet Klub, we take pride in providing our clients with a luxurious and unforgettable experience. Our Parramatta Escorts are some of the city&#39;s most beautiful and passionate women. They have been carefully selected for their beauty and charm, as well as their ability to provide exceptional service. Our escorts are all impeccably groomed, delivering on the promise of a sensual and exciting experience.</p>\r\n\r\n<p>Here are a few reasons why you should choose Velvet Klub Townsville escorts.</p>\r\n\r\n<ul>\r\n	<li>Availability: Our escorts are available to meet you at your home, hotel, or any other location of your choice. This allows you to stay in the comfort of your own space and have a great time without having to leave it. This is ideal for those who have busy schedules and lack the time to travel elsewhere.</li>\r\n	<li>Diversity: No matter what your preference, whether it be a fiery redhead or a seductive brunette, we have the right girl for you. Our collection is frequently updated with new faces, providing you with a wide range of options to choose from.</li>\r\n	<li>Expertise: Our team of professionals are highly skilled and experienced, ensuring that you receive the best possible service. They are passionate about their work and dedicated to making sure you feel great.</li>\r\n	<li>Smart &amp; Intelligent: All our escorts are well-versed in the local culture, whether it is a professional or a personal meet, making them ideal companions for whatever kind of activity you have in mind.</li>\r\n</ul>\r\n\r\n<p>At Velvet Klub, we believe that every client deserves the best. That&#39;s why we go above and beyond to ensure that your experience with us is truly unforgettable. From the moment, you book an escort through Velvet Klub, you can be sure that you are receiving the highest level of service, professionalism and discretion.</p>\r\n\r\n<p>&nbsp;</p>', '2022-12-07 08:28:29', '2023-02-06 13:31:39'),
(49, 'Penrith', 'Penrith Escorts | Escorts Services in Penrith', 'Looking For the best escort service in Penrith. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'penrith-escorts', '<h1>Velvet Klub: The Best Escort Service in Penrith</h1>\r\n\r\n<p>Welcome to Velvet Klub, the premier escort service in Penrith. We are dedicated to providing our clients with the highest quality service and the best Penrith escorts. Whether you&rsquo;re in the mood for a romantic evening or just want to party the night away, Velvet Klub has the perfect escort to make your evening truly special.</p>\r\n\r\n<p>Our Penrith escorts are carefully selected for their exceptional beauty, intelligence, and style. We take great pride in offering the best escort services in Penrith. Our escorts come from a variety of backgrounds and have something for everyone. Whether you&rsquo;re interested in a sultry brunette or a blonde bombshell, we have the escort for you. Our escorts are discreet, professional, and always up for a good time.</p>\r\n\r\n<p>Here are a few reasons why you should hire Velvet Klub Penrith Escorts:</p>\r\n\r\n<ul>\r\n	<li>Offers intimacy and connection lacking in daily life: Our escorts provide emotional/physical closeness, helpful for combating loneliness/isolation. This can be especially beneficial for people who are struggling with feelings of loneliness or isolation.</li>\r\n	<li>A chance to try new sexual experiences, with skilled and experienced escorts to guide you. Escorts are highly skilled and experienced in different types of sexual practices and can help you to explore new things and to discover new aspects of yourself. This can be incredibly liberating and can help you to feel more confident and self-assured in your sexual experiences.</li>\r\n	<li>At our agency, we ensure that all our escorts are thoroughly vetted and screened to ensure that they are of the highest quality. We also ensure that all our companions are respectable citizens of our society.</li>\r\n</ul>\r\n\r\n<p>Thus, if you are in and around Penrith, contact us for a relaxing and rejuvenation experience in Penrith. Our gorgeous and hot girls are the perfect option, as they are trained professionally to make your experience. We guarantee that you&#39;ll leave with an unforgettable experience and memories that will last a lifetime.</p>\r\n\r\n<p>&nbsp;</p>', '2022-12-07 08:29:58', '2023-02-06 13:33:41'),
(50, 'Newcastle', 'Newcastle Escorts | Escorts Services in Newcastle', 'Find the best escort service in Newcastle. Fully trusted account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'newcastle-escorts', '<h1>Welcome to Velvet Klub &ndash; Best Newcastle Escorts</h1>\r\n\r\n<p>Are you in Newcastle and searching for a professional escort service that can satisfy your desires and deliver an experience unlike any other? Look no further than Velvet Klub &ndash; the best escort service in Newcastle.</p>\r\n\r\n<p>At Velvet Klub, we offer a range of services to suit all needs, from intimate companionship to wild night-outs. Our stunning escorts are carefully selected for their beauty, intelligence and sensuality and are available to provide you with an experience like no other. Our escorts are educated and well-mannered and will make sure you always feel respected and taken care of.</p>\r\n\r\n<p>We understand that everyone has different needs, and our escorts are dedicated to providing you with an unforgettable experience. Whether you&rsquo;re after something romantic and intimate or something more daring and wilder, we guarantee that you&rsquo;ll be able to find the perfect escort for your needs. You can rest assured that your time with one of our girls will be a memorable one and one that you will want to repeat again and again.</p>\r\n\r\n<p>Things that make us different from other escorts service:</p>\r\n\r\n<p>We pride ourselves to be an affordable and professional company. Unlike many other Newcastle escort services, we do not charge exorbitant fees or hidden costs. Our mission is to make meaningful connections accessible to everyone, and that means offering an affordable option for everyone.</p>\r\n\r\n<p>In addition to being affordable, we are also committed to safety and security for our clients and girls. Our platform is designed with privacy and protection in mind, and we take great care to ensure that all users feel secure and protected when using our service. We have a dedicated team of professionals who monitor the platform and are available to assist users 24/7.</p>\r\n\r\n<p>So why wait? Treat yourself to the best escort experience in Newcastle with Velvet Klub. With our gorgeous girls, world-class service, and commitment to discretion, you are guaranteed an unforgettable experience. Browse our gallery of the best Newcastle girls today and book your appointment to indulge in the ultimate in experience.</p>\r\n\r\n<p>&nbsp;</p>', '2022-12-07 08:32:26', '2023-02-06 13:36:01'),
(51, 'Wollongong', 'Wollongong Escorts | Escorts Services in Wollongong', 'Find the best Sex service in Wollongong. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'wollongong-escorts', '<h1>Welcome to Velvet Klub: Wollongong&rsquo;s Premier Escort Service</h1>\r\n\r\n<p>Are you in search of the best Wollongong escorts? Look no further than Velvet Klub, Wollongong&rsquo;s premier escort agency. For over a decade, we have been offering incomparable escort services in Wollongong and beyond. Our exquisite escorts are highly sought after by discerning gentlemen, who appreciate class and sophistication.</p>\r\n\r\n<p>At Velvet Klub, all our escorts are carefully selected to ensure that we provide you with the best companionship, making your experience nothing less than extraordinary. Our elite escorts have been chosen for their charm, grace and beauty. All of the escorts possess a wonderful personality, intelligence, and are well-versed in the art of seduction. We pride ourselves on providing a discreet and reliable service that can be tailored to suit your needs.</p>\r\n\r\n<p>Wollongong is known for its beautiful beaches, scenic coastline, and outdoor recreation opportunities. The city is surrounded by several popular tourist destinations, including the Illawarra Escarpment and the Royal National Park. Wollongong is also home to several cultural attractions, such as the Wollongong Art Gallery and the Illawarra Performing Arts Centre. It would be great to have a girlfriend or a beautiful girl in the city of Wollongong.&nbsp;</p>\r\n\r\n<p>Additionally, escorts can also be a great way to relax and unwind. The act of receiving a sensual massage or being in the company of a beautiful and attentive escort can be a great way to forget about the stresses of daily life and focus on the present moment. This can be especially beneficial for people who are dealing with stress or anxiety and who need a break from the constant demands of daily life.</p>\r\n\r\n<p>Lastly, engaging in escort services can be a great way to boost your self-esteem and confidence. The act of engaging in an escort can help you to feel more desirable and to feel more confident in yourself. Browse our gallery for the girls which suit your desire and book your appointment to indulge in the ultimate sexual experience.</p>', '2022-12-07 08:34:06', '2023-02-06 13:39:56'),
(52, 'Central Coast', 'Central Coast Escorts | Personal escort in centra coast', 'Find the best Independent escort service in Central Coast. 100% verified account. No hidden charges. Live cam. Quick response. Best Escort Listing site. High Profile Escort Listing.', 'central-coast-escorts', '<h1>Get Ready to Meet the Best Central coast Escorts at Velvet Klub</h1>\r\n\r\n<p>Welcome to Velvet Klub, the premier escort agency in the Central Coast. We provide a professional, reliable and luxurious service to meet all your escort needs in the Central coast and the surrounding area. Our hand-picked selection of Central coast escorts will make your night unforgettable.</p>\r\n\r\n<p>Whether you&#39;re after a wild night out, a casual date or a sensual evening of pleasure, our escorts are available for any occasion. Our Central coast escorts are all incredibly attractive, very discreet and eager to please. They will do their utmost to make sure you have a pleasurable evening, and you won&rsquo;t be disappointed. We take pride in being able to provide the best escort services in the Central Coast.</p>\r\n\r\n<p>At Velvet Klub, we know that every client has different preferences. That&rsquo;s why we offer a wide range of services. Our girls offer different varieties such as Blowjob, Sex, sucking, Cum on Body, Deep French, kissing with tongue, Doggie style from behind, Full body massage, Oral sex, Play with boobs, etc. Just tell us your demand beforehand, and we will show you the availability of our experienced hot girls.</p>\r\n\r\n<p>Also, we understand that sex isn&rsquo;t satisfying without foreplay. Thus, we have trained our girls to play out different foreplay according to customer demand. They can dance, be your teacher, stepdaughter, maid, and much more. Just name your desire, and our girls will do it for you. If you want more fun, they can introduce different sex toys, or you can bring some toys of your choice. Then, you can play out any more fantasy you want.</p>\r\n\r\n<p>Many Escort services in Central Coast are not affordable. But Velvet Klub understands that sexual desire doesn&rsquo;t need to empty your pocket; it is for every common man, including you. That is why we have an affordable price for our Escorts service. So, everyone can forget the sadness and tension in their life and just enjoy pleasure sex with beautiful and hot girls.</p>\r\n\r\n<p>&nbsp;</p>', '2022-12-07 08:35:12', '2023-05-12 17:46:47'),
(54, 'Forster', 'Forster Escorts | Escorts Services in Forster', 'Find the best Adult service in Forster. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. Premium Escort Listing.', 'forster-escorts', '<h1>Welcome to Velvet Klub, Forster&#39;s Finest Private Escorts Services</h1>\r\n\r\n<p>Are you in the mood for some quality time with an attractive and sophisticated woman? Velvet Klub is the premier escort service in Forster, offering the most sensual and discreet escort experience available. Our Forster Escorts are trained professionals with expert knowledge of the art of seduction. No matter what your desires are, we have the perfect companion to fulfil them.</p>\r\n\r\n<p>Our professional escorts are available for both in-call and out-call services, so you can experience the ultimate pleasure in the comfort and privacy of your own home or hotel. Our Forster Escorts come highly recommended and are carefully selected to ensure they meet the highest quality standards. Our team of experienced professionals is dedicated to providing a first-class, discreet experience that you will never forget.</p>\r\n\r\n<p>The escorts we feature on our website are among the most beautiful, intelligent, and professional in Mackay. Our escorts travel around Australia and the world, so you can see why they are some of the most desirable companions anywhere.</p>\r\n\r\n<p>Velvet Klub &ndash; A professional escort service:</p>\r\n\r\n<p>We have developed our service to be professional in order to offer the best service to our clients. Our Forster escorts are highly educated, refined, and skilled. While we offer the illusion of a girlfriend experience, our escorts are professional in pre-arranged encounters. They are handpicked from around the world to cater to men&#39;s needs globally.</p>\r\n\r\n<p>At Velvet Klub, we understand that your needs are unique. That is why we have focused on being versatile in our Forster escort services. Some are bisexual or lesbian, some specialize in group sex and some do not. They are open to adventurous and sensual services. Our directory offers a wide range of female companions to choose from, whether for a long-term friendship or a one-night stand.</p>\r\n\r\n<p>Hire our Forster escorts for a fun-filled evening, no matter where you are. Our goal is your satisfaction, which is why we&#39;re available 24/7. Book now and let us take you on a journey of pure satisfaction.&quot;</p>\r\n\r\n<p>&nbsp;</p>', '2022-12-07 08:40:36', '2023-02-06 13:45:36'),
(55, 'Byron Bay', 'Byron Bay Escorts | Escorts Services in Bay Escorts', 'Find the best Local escort in Byron Bay. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'byron-bay-escorts', '<h1>Welcome To Byron Bay Escorts at Velvet Klub</h1>\r\n\r\n<p>Are you in need of some companionship in one of Australia&rsquo;s most stunning coastal cities? Then you&rsquo;ve come to the right place &ndash; Velvet Klub, the premier private escort service in Byron Bay.</p>\r\n\r\n<p>At Velvet Klub, we have the most beautiful and professional escorts who are passionate about providing luxurious services that will make your time in Byron Bay even more memorable. Whether you&rsquo;re in town for business or pleasure, our escorts will make sure that you get to enjoy each moment with the utmost satisfaction.</p>\r\n\r\n<p>We understand that everyone has different tastes and preferences in terms of companionship. That&rsquo;s why we offer a wide selection of escorts to suit all sorts of needs. Simply take a look at our gallery to choose an escort of your choice. This is why the escorts we feature on our website are among the most beautiful, intelligent and professional in Byron Bay. Our escorts travel around Australia and the world, so you can see why they are some of the most desirable companions anywhere.</p>\r\n\r\n<p>Companionship for every event!</p>\r\n\r\n<p>Our Byron Bay escorts can travel with you wherever you need to go &ndash; home, hotel, business meeting or event &ndash; and you don&rsquo;t need to feel embarrassed about bringing them in with you. They are highly trained and experienced in providing the most exquisite experiences. They are dedicated to providing you with the ultimate delight, leaving you feeling invigorated and completely satisfied.</p>\r\n\r\n<p>Trustworthy, Discreet and Secure.</p>\r\n\r\n<p>We work hard to maintain a high standard of safety, security, and confidentiality. Our customers are important to us, and we will go out of our way to protect your privacy. Therefore, we offer multiple levels of protection on our servers to ensure your privacy is always protected. So, you can go out with them without the fear of it biting back.</p>\r\n\r\n<p>You can meet a real person through our service. Our escorts are independent, you can book directly with them with our assistance or choose to book independently yourself.</p>\r\n\r\n<p>&nbsp;</p>', '2022-12-07 08:42:16', '2023-02-06 13:47:17'),
(62, 'Toowoomba', 'Toowoomba Escorts | Escort Services in Toowoomba', 'Find the Gorgeous escort service in Toowoomba. 100% verified account. No hidden charges. Live cam. quick response. It best Escort Listing site. High Profile Escort Listing in Toowoomba.', 'toowoomba-escorts', '<h1>Experience Professional Escort Services in Toowoomba</h1>\r\n\r\n<p>Velvet Klub invites you to offer your body and mind a day free of stress and tension and full of pleasure and relaxation. You can find the girls of your dream in our Toowoomba escorts and then take her out.</p>\r\n\r\n<p>Although Toowoomba is one of the most populous cities in Inland Australia, the city can sometimes make you feel lonely with the colonial era architecture. You don&rsquo;t need to worry much in that case, just google &ldquo;Escort Services in Toowoomba&rdquo; and open the Velvet Klub site.</p>\r\n\r\n<p>We instruct our girls to focus on their pure erotic pleasure. They have been trained to use Kamasutra tips and techniques. This enhances and achieves sensual arousal creating a pleasurable surrender and the ultimate relaxation atmosphere. You will escape from the stress of your daily life and fall into ultimate sensational pleasure. This will be an erotic relaxing experience and a heightened awareness of your sensuality.</p>\r\n\r\n<p>Take your Sexual Fantasy to next level:</p>\r\n\r\n<p>We understand that everyone&#39;s sexual fantasies are different. You might wanna engage in roleplay such as fuck a school teacher, picking your female hot boss, etc. The best thing is you can find such willing girls of different ethnicity, body types, hair color, etc. All of this is possible with our gorgeous Toowoomba escorts.</p>\r\n\r\n<p>Our Toowoomba escorts can even arrange sex toys before the meet. A sexy handcuff with the highest quality oil is a match made in heaven. All you need to do is mentioned these things in advance and our girl would willing to participate to ensure you have an orgasm worth remembering for the rest of your life.&nbsp;&nbsp;</p>\r\n\r\n<p>At Velvet Klub, we pride ourselves on providing the most luxurious and indulgent escort experiences in Toowoomba. These are professional girls trained to achieve physical pleasure. In a nutshell, you will experience new sensations and relive sexual energy. It gives a feeling of elevated self-esteem and well-being. This further help you enjoy sex and make you feel like you are on cloud 9. So, don&rsquo;t wait for more to experience this sensation.</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:22:47', '2023-01-31 11:59:37'),
(63, 'Home bush', 'Best Home Bush Escorts | Escorts Services in Home Bush', 'Get the best escort service in Home Bush. 95% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. premium Profile Escort Listing.', 'home-bush-escorts', '<h1>Enjoy a Night of Fun with Home Bush Escorts</h1>\r\n\r\n<p>Welcome to Velvet Klub, the top escort service in Home Bush. We have a night of fun in store for you with our gorgeous Home Bush escorts! Our selection of stunning, sensual ladies is available for an evening of pleasure and adventure.</p>\r\n\r\n<p>Experience the best Home Bush escorts with Velvet Klub. Our experienced escorts know how to satisfy your desires and provide you with an unforgettable evening. Our ladies are beautiful, passionate and know how to make any evening a memorable one. Whether you&#39;re after a wild night of passion or a romantic dinner date, our escorts have you covered.</p>\r\n\r\n<p>Fun and Discreet Escort Service&nbsp;</p>\r\n\r\n<p>Our discreet Home Bush escort service will ensure that your time with us is fun and exciting, without any worries. Our ladies are also very professional and know how to ensure that your privacy is respected at all times.</p>\r\n\r\n<p>Exploring your kinks with an escort service can also be a great way to build self-confidence and self-esteem. Many people who engage in kinks and fetishes may feel ashamed or guilty about their desires and exploring them with an escort can help to break down these negative feelings and build a more positive self-image.</p>\r\n\r\n<p>Additionally, engaging in escorts services can also be a great way to experiment and try new things. Escorts can help you to explore different kinks and fetishes that you may be curious about but have never had the opportunity to try. This can be incredibly liberating and can help you to discover new aspects of yourself.</p>\r\n\r\n<p>In conclusion, engaging in escorts services can be a great way to explore your kinks and fetishes in a safe, consensual and non-judgmental environment. It offers a level of privacy and discretion, professionalism and experience and can help to build self-confidence, self-esteem and experiment new things.&nbsp;</p>\r\n\r\n<p>Register with us and book an appointment with one of our sizzling escorts. They will erect your manhood and then tame it giving you a memorable night for life.</p>', '2023-01-01 19:24:43', '2023-05-12 17:50:25'),
(64, 'Coffs Harbour', 'Coffs Harbour Escorts | Escorts Services in Coffs Harbour', 'Find Out the best  escort service in Coffs harbour. 100% verified account. No hidden charges. Live cam. Quick response. Our escorts are so kind hearted.', 'coffs-harbour-escorts', '<h1>Welcome to Velvet Klub, Coffs Harbour&#39;s Premier Escort Service</h1>\r\n\r\n<p>Are you in search of the perfect companion for a night out in the city? Look no further than Velvet Klub &ndash; the premier private escort service agency in Coffs Harbour. We offer an exclusive selection of the most desirable and desirable escorts in the area, all offering an unforgettable experience that you&#39;ll never forget.</p>\r\n\r\n<p>At Velvet Klub, our goal is to provide the ultimate escort service experience for our clients. Our selection of stunning escorts is all highly trained professionals, ensuring that you have the best time possible. You can choose from a variety of services, depending on your needs and wishes. From intimate dinner dates to a night out on the town, our Coffs Harbour escorts can provide you with a truly memorable experience. No matter what type of companion you&#39;re searching for, you&#39;ll find the perfect match here at Velvet Klub.</p>\r\n\r\n<p>Our selection of Coffs Harbour Escorts is truly unparalleled. Each one is handpicked for its beauty, charm, and sparkling personality. They are not only stunning to look at, but also possess the skills and talents to make sure that you have the time of your life. Whether you&#39;re looking for a fiery redhead or a sultry brunette, we have the perfect girl for you.</p>\r\n\r\n<p>At Velvet Klub, we understand that discretion is of the utmost importance. That&#39;s why we take great care to ensure that your experience with us is completely private and confidential. You can rest assured that your time with one of our girls will be a memorable one and one that you will want to repeat again and again.</p>\r\n\r\n<p>So why wait? Treat yourself to the best escort experience in Coffs Harbour with Velvet Klub. With our gorgeous girls, world-class service, and commitment to discretion, you are guaranteed an unforgettable experience. Browse our gallery of the best Bundaberg girls today and book your appointment to indulge in the ultimate in companionship.</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:25:27', '2023-02-06 13:44:01'),
(65, 'Tweed Heads', 'Tweed heads escorts | local female escort in Tweed heads', 'Find out the hottest Female escorts in Tweed Heads. Fully adult service. No hidden charges. Local Escorts. Immediately response. High Profile Escort listing site.', 'tweed-heads-escorts', '<h1>Are you ready for the time of your life?</h1>\r\n\r\n<p>Velvet Klub is the hottest escort service in Geelong, Australia. Our Geelong escorts are available to provide you with an unforgettable experience. From our range of stunning ladies to our discreet, reliable service, Velvet Klub is the perfect place to find the perfect companion.</p>\r\n\r\n<p>Our local female escorts in Tweed heads are some of the hottest escorts in Geelong, Australia. They are all beautiful and talented, with stunning bodies and charming personalities. You can choose from a variety of different ladies, all of which are sure to satisfy your desires. Whether you prefer a blonde bombshell or a mysterious brunette, we have the perfect companion for you.</p>\r\n\r\n<p>We pride ourselves on providing a discreet and reliable service, so you can be sure your experience will remain private and enjoyable. Our ladies will ensure that you have a night to remember. Every encounter is sensual and intimate, so you can be sure of ultimate pleasure.</p>\r\n\r\n<p>Reignite Your Sexual desires with Velvet Klub Tweed Heads escorts!</p>\r\n\r\n<p>Unfulfilled sexual desires? Let us help with experienced girls who can reignite your passion within a night. Escort services are no longer taboo, and these girls are professional in their work. Consider it like a date with a new acquaintance. They&#39;ll handle everything and you&#39;ll be pleased with your time together.</p>\r\n\r\n<p>Don&#39;t worry if you&#39;re new to sex or haven&#39;t had much experience lately. Our girls are trained to revive your manhood and bring lubes, and toys, and engage in foreplay. Enjoy a fun night at a great price with our Cairns Escort Services. With a range of girls from high-end to affordable, you&#39;re sure to find the missing romance and fulfil your desires.</p>\r\n\r\n<p>Lastly, we have girls who range from high-end to your price. So, that you experience a good time, find your missing romance and fulfil your sexual desires. Look around our gallery of local female escort in Tweed heads to find your match and book your appointment to indulge in the experience.</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:26:22', '2023-02-08 13:56:24'),
(66, 'St-kilda', 'St-kilda-escorts | Adult Service In St kilda', 'Find out the gorgeous and Hottest looking female escorts in St Kilda. 100% Genuine. No hidden charges. Immediately response. Best Escort listing site. Local Escorts', 'St-kilda-escorts', '<p>St-kilda-escorts</p>', '2023-01-01 19:27:47', '2023-05-12 17:54:23'),
(67, 'Geelong', 'Geelong escorts | Best escort in Geelong', 'Looking For the best escort service in Geelong. 100% verified account. No extra charges. Live cam. Immediately response. Best Adult Service site. High Profile Escort Listing.', 'geelong-escorts', '<h1>Are you in the mood for some naughty fun in Geelong?</h1>\r\n\r\n<p>Look no further than Velvet Klub, Geelong&#39;s hottest escort service. Our gorgeous Geelong escorts can provide you with the special treatment you deserve, ensuring an unforgettable experience that you won&#39;t soon forget.</p>\r\n\r\n<p>At Velvet Klub, our goal is to ensure that every client has an experience that exceeds their expectations. From providing you with top-notch customer service to offering a variety of stunning Geelong escorts, we guarantee you will be more than pleased with our high-quality services. We provide a safe and secure environment for our clients and our escorts, allowing you to relax and enjoy the company of the hottest escort in Geelong.</p>\r\n\r\n<p>We provide you with the highest level of service and the most pleasurable experiences possible. We are dedicated to making sure that every one of our clients is satisfied and that their desires are met.</p>\r\n\r\n<p>Our escorts are professional, courteous, and passionate about making sure your experience is nothing short of perfection. We know how important discretion is and rest assured that you can trust us to keep your contact and personal information completely private.</p>\r\n\r\n<p>Velvet Klub provides a wide range of escort services, from dinner dates and nightlife to intimate encounters. Our escorts are experienced, gorgeous, and discreet. They&#39;ll exceed your expectations and provide a memorable experience. We take the time to understand each client&#39;s needs to ensure the best match.</p>\r\n\r\n<p>Privacy and discretion are guaranteed when you work with Velvet Klub. We understand the importance of discretion and assure the confidentiality of your personal information. We also offer a safe payment system, accepting various payment methods including online transactions.</p>\r\n\r\n<p>At Geelong Escorts, we offer services to match all tastes. Businessmen, entertainers, and those seeking companionship will have a perfect and unforgettable experience. Our escorts are beautiful, professional, and knowledgeable in providing the best service to clients. They are well-versed in Geelong&#39;s culture, customs, and attractions, making them ideal companions for any activity.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:28:01', '2023-02-07 11:19:32');
INSERT INTO `pages` (`id`, `page_name`, `meta_title`, `meta_description`, `location`, `content`, `created_at`, `updated_at`) VALUES
(68, 'Ballarat', 'Ballarat escorts | Sex Services in ballarat', 'Find out the hottest female escorts near you. Local escorts from Ballarat. Independent escorts. 100% verified account. Best Adult Service site. High class Escorts Listing.', 'ballarat-escorts', '<h1>Spend a day with stunning Ballarat Escorts!</h1>\r\n\r\n<p>Velvet Klub is a professional escort service in Ballarat, Australia. Our Ballarat escorts are available to provide you with a memorable experience. We have a range of gorgeous ladies whose sole service is to satisfy you. We also make sure that our girls are discreet. This makes Velvet Klub the perfect place to find the perfect companion.</p>\r\n\r\n<p>Now, Ballarat is a historic city with a rich history and cultural heritage. The city has a lot of several historic landmarks and cultural institutions. Some of the famous attractions are Ballarat Botanical Gardens (Victorian-era botanical gardens), Ballarat Fine Art Gallery, etc.</p>\r\n\r\n<p>This offers a unique setting for costumes and role-play. Ballarat has a well-preserved historical atmosphere and architecture, and you can enhance this experience with a Ballarat escort. You can walk the streets and visit the buildings that were present during the Victorian era, creating a realistic backdrop for your cosplay.</p>\r\n\r\n<p>Overall, cosplaying in a Victorian-era city can offer a memorable and enjoyable experience that combines your love of historical costumes with the unique atmosphere of a historic location. You can have this experience with Velvet Klub.</p>\r\n\r\n<p>If you are not into such cosplay, we also offer a wide range of girls so that you can have sex with Russians, big booty, big boobs, party girls, etc. Just specify your demand beforehand and select the girl. Now, you are ready to bring your fantasies into reality. So, a threesome with the wife or your friend is possible. You can also engage in foreplay such as stepdaughter, stepbrother, sexy maid, hot mom and much more. If you are the kinky type, you can bring or demand sex toys to add another theme of excitement to sex.</p>\r\n\r\n<p>That too at an affordable cost. So, you won&rsquo;t be emptying your pocket while engaging in your sexual fantasy. Also, we instruct our Kings cross escorts to ensure that your experience with us is completely private and confidential.</p>\r\n\r\n<p>So, what are you waiting for? Book an escort with us and have a lifelong experience.</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:28:29', '2023-05-12 17:55:04'),
(69, 'South Australia', 'south australia escorts | Independent escort in south australia', 'Looking for the realbabes in south Australia. Find the real pleasure. 100% verified account. No hidden charges. Live cam service. Immediately response. It best Escort Listing site. High Profile Escort Listing.', 'south-australia-escorts', '<h1>Welcome to Velvet Klub, the premier provider of South Australian escorts.</h1>\r\n\r\n<p>Our independent escorts are available wherever and whenever you need them, providing an unparalleled level of companionship and pleasure.</p>\r\n\r\n<p>At Velvet Klub, we understand that no two people are the same - and neither are our escorts. We have a wide variety of women to choose from, all unique in their own way. Our selection of South Australian escorts includes experienced courtesans, playful party girls, and sensual sirens. Our experienced team can provide you with the perfect companion for whatever your heart desires.</p>\r\n\r\n<p>Here are some ways to enjoy your vacation with our independent escorts in South Australia:</p>\r\n\r\n<ul>\r\n	<li>Explore the local attractions: South Australia has many natural and man-made attractions, including the Adelaide Hills, the Barossa Valley, and Kangaroo Island. You can experience these attractions with our South Australia escorts to experience the best of the region.</li>\r\n	<li>Visit the beaches: South Australia is home to some of the country&#39;s most beautiful beaches, such as Glenelg, Henley Beach, and Semaphore. There is no better way to spend a day soaking up the sun, swimming, and taking in stunning views with a gorgeous girl beside yourself.</li>\r\n	<li>Try the local cuisine: South Australia is known for its great food and wine. Treat yourself to a fine dining experience or try some of the state&#39;s local produce. Our girls are well-versed in the local area and can guide you to the best restaurants.</li>\r\n	<li>Participate in outdoor activities: Take advantage of the natural beauty of South Australia by hiking, cycling, or kayaking in the stunning national parks and reserves.</li>\r\n	<li>Attend a cultural event: South Australia is home to a thriving arts and cultural scene, with regular events including festivals, concerts, and exhibitions. Our independent escorts are intelligent and are an excellent companion for you in such events.</li>\r\n	<li>Enjoy a romantic getaway: If you are in the mood for romance, just book a luxury hotel or a quaint bed and breakfast and spend quality time with your stunning girls exploring the region and each other.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:30:37', '2023-05-12 17:56:06'),
(71, 'Glenelg', 'glenelg escorts | Best Escort in Glenelg', 'Find the High class escort service in Glenelg. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'glenelg-escorts', '<h1>Welcome to Velvet Klub, Glenelg&#39;s leading escort service.</h1>\r\n\r\n<p>At Velvet Klub, you can find a beautiful and independent escort in Glenelg that is right for you. We are the ultimate in discreet companionship and sensuality. Our escorts are the cr&egrave;me de la cr&egrave;me of Glenelg&#39;s adult entertainment scene and each provides a unique and unforgettable experience.</p>\r\n\r\n<p>Our escorts are beautiful, sophisticated and educated, with a wide range of personalities and interests. Whether you&#39;re a spirit seeking adventure or a romantic at heart, we can provide you with a professional escort who can make your dreams come true. Our escorts are available for short or long sessions, depending on your desires.</p>\r\n\r\n<p>At Velvet Klub, we understand that discretion is paramount. That is why our escorts are always 100% confidential and discreet. When you book an escort with us, you can rest assured that your privacy will be respected, and your identity protected.</p>\r\n\r\n<p>To make things customizable for you, Velvet Klub&#39;s stunning escorts are always ready to make sure you get the most out of your experience. Whether you&#39;re after an intimate dinner date, an evening out, or an unforgettable night of passion, our escorts have got you covered.</p>\r\n\r\n<p>So, if you are not currently in a relationship, engaging in our escort services can provide a temporary outlet for intimacy. Our escorts are trained to understand your needs and provide a safe and satisfying experience.</p>\r\n\r\n<p>Our service can help enhance your social life. Engaging in our escort services can provide a social outlet for those who are looking to expand their circle of friends and meet new people. Whether you are travelling for business or pleasure, escorts can provide companionship and a social network to enhance your time in a new city.</p>\r\n\r\n<p>Last and not least, it is always wise to explore the local culture. So, our Glenelg escorts can provide a way to explore new experiences and enhance your intimate life. Whether you are looking to try new positions or role-play scenarios, escorts can provide a safe and fulfilling outlet for exploration.</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:31:04', '2023-05-12 17:57:14'),
(72, 'Flagstaff Hill', 'flagstaff hill escorts | Adult Services in Flagstaff Hill', 'Get the best escort service in Flagstaff Hill. 100% verified account. Find real babes. Live cam. Immediately response. It best Escort Listing site. premium Profile Escort Listing.', 'flagstaff-hill-escorts', '<h1>Experience the Ultimate Escort Services in Flagstaff Hill with Velvet Klub!</h1>\r\n\r\n<p>Are you looking for the ultimate escort services in Flagstaff Hill? Look no further than Velvet Klub! Velvet Klub offers a variety of services to adults in the Flagstaff Hill area and beyond. From traditional escort services to private companionship and beyond, Velvet Klub has something for everyone.</p>\r\n\r\n<p>At Velvet Klub, we offer a variety of services to meet the needs of our clients. We offer traditional escort services, private companionship, and more. We also offer a variety of packages to meet the needs of our clients.</p>\r\n\r\n<p>If you&rsquo;re looking for an escort, we have hundreds of girls which you can choose from to meet your needs. These girls are open to everything such as Swedish massage, deep tissue massage, sports massage, and more. The only requirement is to mention these things before booking so that our flagstaff escort can arrange the things required.</p>\r\n\r\n<p>If you&rsquo;re looking for something a little more intimate, we offer private companionship services. Our private companions are carefully selected to ensure that our clients get the best possible experience. Our companions are beautiful, intelligent, and professional, and they will make sure that your experience is as pleasurable as possible.</p>\r\n\r\n<p>The benefits of using Velvet Klub for adult services</p>\r\n\r\n<p>At Velvet Klub, we strive to provide the best possible experience for our clients. We offer a safe and secure environment, and our team of professionals is dedicated to providing the highest quality services. We also offer a variety of packages to meet the needs of our clients, so you can find the perfect package for your needs.</p>\r\n\r\n<p>We also pride ourselves on our customer service. Our team is always available to answer any questions or concerns you may have. We understand that adult services can be a sensitive topic, and we strive to make sure that our clients feel comfortable and secure during their experience. So, what are you waiting for? Browse our site and find the girls of your dream!</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:31:24', '2023-02-16 12:30:42'),
(73, 'Western Australia', 'western australia escorts | Hottest escort in western australia', 'Find independent and private escorts in Western australia. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'western-australia-escorts', '<h1>Welcome to Western Australia Escorts at Velvet Klub</h1>\r\n\r\n<p>Velvet Klub is a premier escort services provider located in Western Australia. We specialize in providing a wide range of services to adults in a safe and secure environment. Our services are tailored to meet the needs of our clients, and we strive to provide the best possible experience for each and every one of our customers. We are dedicated to providing the highest quality services in the area and beyond.</p>\r\n\r\n<p>At Velvet Klub, we understand that the needs of our clients are unique and varied. That&rsquo;s why we offer a variety of services to meet those needs. Whether you&rsquo;re looking for a traditional escort service, private companionship, or something else entirely, we can help. We also offer a variety of packages to meet the needs of our clients.</p>\r\n\r\n<p>Things that make us different from other escorts service:</p>\r\n\r\n<p>We pride ourselves to be an affordable and professional company. Unlike many other Newcastle escort services, we do not charge exorbitant fees or hidden costs. Our mission is to make meaningful connections accessible to everyone, and that means offering an affordable option for everyone.</p>\r\n\r\n<p>In addition to being affordable, we are also committed to safety and security for our clients and girls. Our platform is designed with privacy and protection in mind, and we take great care to ensure that all users feel secure and protected when using our service. We have a dedicated team of professionals who monitor the platform and are available to assist users 24/7.</p>\r\n\r\n<p>Booking adult services with Velvet Klub is easy and convenient. You can book your services online or over the phone. We also offer a variety of payment options, so you can choose the one that works best for you. We accept all major credit cards, as well as PayPal and Venmo.</p>\r\n\r\n<p>Browse our gallery of the best Western Australia escorts today and book your appointment to indulge in the ultimate experience.</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:33:41', '2023-02-16 12:25:57'),
(74, 'Mandurah', 'mandurah escorts | Personal Escort Services in mandurah', 'Find the best escort service in mandurah. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'mandurah-escorts', '<h1>Make your time special with Velvet Klub&rsquo;s Mandurah escorts</h1>\r\n\r\n<p>If you&rsquo;re looking to spend the ultimate time in Mandurah, look no further than Velvet Klub. We have a plethora of Mandurah escorts, who have been carefully trained to provide you with a luxurious and intimate experience, filled with sensuality, passion, and excitement. With our high standards of service, you can be assured that all of our clients are guaranteed the utmost pleasure and satisfaction in the company of our professional escorts.</p>\r\n\r\n<p>Our team of professionals is dedicated to providing the highest quality services, and we understand that adult services can be a sensitive topic. We are proud to say that our clients have had nothing but positive experiences with our services. So why not experience the ultimate escort services in Mandurah with Velvet Klub today?</p>\r\n\r\n<p>Why choose Velvet Klub for a fun night?</p>\r\n\r\n<p>Working with professional escorts like those at our agency can provide a number of advantages over working with local escorts. Our escorts are experienced, knowledgeable, and always willing to go the extra mile to ensure you have a memorable experience.</p>\r\n\r\n<p>At our agency, we have a strict selection process, ensuring that each of our escorts is highly skilled and trained in providing top-notch services. Our Mandurah escorts know how to make clients feel at ease, and they offer a wide range of services to meet your needs.</p>\r\n\r\n<p>Compared to local escorts, professional escorts like ours are often more reliable. Local escorts may not always be dependable or discreet, but our Mandurah escorts are committed to providing a top-notch experience and will always go the extra mile to ensure customer satisfaction.</p>\r\n\r\n<p>Our escorts are all beautiful, professional, and understand how to provide the best service to their clients. All our escorts are well-versed in the local culture, customs, and attractions of the Sunshine Coast, making them ideal companions for whatever kind of activity you have in mind.</p>\r\n\r\n<p>So, don&rsquo;t wait and browse our display to find a beautiful, gorgeous girl for yourself!</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:33:58', '2023-02-16 12:28:14'),
(75, 'Rockingham', 'rockingham escorts | Best Escort Services in Rockingham', 'Searching the independent and private escorts in Rockingham. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'rockingham-escorts', '<h1>Indulge in Elite Escort Service in Rockingham</h1>\r\n\r\n<p>The Velvet Klub is an adult service in Rockingham that caters to those who want to enjoy the best sex possible. We offer a wide range of services, including escorting, companionship, and even private parties.</p>\r\n\r\n<p>Our goal is to provide our clients with the best possible experience. This includes giving you the chance to meet like-minded individuals who share your interests and desires, while also providing you with a safe and comfortable environment where you can explore your sexuality in whatever form that may take. We believe that everyone deserves access to the best sex they can have&mdash;and we&#39;re here to help you get it!</p>\r\n\r\n<p>Enjoy the view of Rockingham with a stunning Escort</p>\r\n\r\n<p>Rockingham is a coastal city located in Western Australia, known for its beautiful beaches and scenic coastline. The area is popular for its marine wildlife, including dolphins and seals, as well as for its recreational activities such as fishing, boating, and swimming.</p>\r\n\r\n<p>Clearly, Rockingham has a vibrant scene all around and is one of the best places for a vacation. If you are single, then a beautiful escort is the only one you need. We have designed our service as such. Our escorts are intelligent and ooze confidence which places them as elite rockingham escorts that you won&rsquo;t find everywhere.</p>\r\n\r\n<p>Velvet Klub&rsquo;s girls are working professionals who know what they are doing and are experts in it. Think of it, like you are going on a date with a person you recently met. The girls will take care of everything else, and you will be delighted with the time you spend with them.</p>\r\n\r\n<p>These girls will satisfy your sexual desire and make your dream come true at a fantastic price; unlike the cheap call girls you find on shady roads. We have girls who range from high-end to your price. So, that you experience a good time, find your missing romance and fulfil your sexual desires.</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:34:12', '2023-02-16 12:20:07'),
(76, 'Bunbury', 'bunbury escorts | Hottest Escort Services in Bunbury', 'Looking for the real babes in Bunbury. 100% verified account. No hidden charges. Live cam service. Immediately response. Best Escort Listing site. High Profile\r\nEscort Listing.', 'bunbury-escorts', '<h1>Enjoy a Night of Fun with Bunbury Escorts</h1>\r\n\r\n<p>Velvet Klub, a top escort service in Bunbury welcomes you! If you are looking for a way to spend a fun night, look no further than our beautiful Bunbury escorts. Our selection of stunning, sensual ladies is available for an evening of pleasure and adventure.</p>\r\n\r\n<p>Our professional and elite adult service is just what you need. We have years of experience in the industry and have trained some of the best talents in Australia. Our goal is simple: provide quality adult entertainment services for our customers as efficiently as possible so they can get back to their lives without having any problems or obstacles getting in their way.</p>\r\n\r\n<p>Now, why choose us for a fun night?</p>\r\n\r\n<p>If you&#39;re like most people, you probably go out to a club and find someone. However, you might not be in the mood to do so. So, now you have decided to pick up an escort, but you don&#39;t want to waste your time on a bad experience with an adult service.</p>\r\n\r\n<p>You want to make sure that when you go out for a night of fun and excitement, it&#39;s going to be worth it. And what better way to do that than with someone who is experienced and trained in providing the best possible adult entertainment experience?</p>\r\n\r\n<p>Our services are designed to help you relax and enjoy your time with us&mdash;we know how important it is for you to feel comfortable in your own skin. That&#39;s why we do everything possible to make sure that our customers feel safe while they&#39;re here with us at Velvet Klub.</p>\r\n\r\n<p>In conclusion, engaging in escort services can be a great way to explore your kinks and fetishes in a safe, consensual and non-judgmental environment. It offers a level of privacy and discretion, professionalism and experience and can help to build self-confidence, and self-esteem and experiment with new things.</p>\r\n\r\n<p>Register with us and book an appointment with one of our sizzling escorts. They will erect your manhood and then tame it giving you a memorable night for life.</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:34:32', '2023-05-12 17:59:55'),
(77, 'Joondalup', 'joondalup escorts | Adult Services in joondalup', 'Find the best escort service in Joondalup. 100% verified account. No hidden charges. Live cam. Immediately response. Beautiful Escort Listing site. High Profile Escort Listing in Joondalup.', 'joondalup-escorts', '<h1>Experience the Premium Joondalup Escorts with Velvet Klub</h1>\r\n\r\n<p>At Velvet Klub, we pride ourselves on our ability to provide a safe and comfortable environment for our clients. We know that you can&#39;t just pick up and go somewhere else when you&#39;re ready for a change. That&#39;s why we&#39;ve designed our services to be as flexible as possible for your convenience&mdash;we want you to feel at home.</p>\r\n\r\n<p>We&#39;ve worked hard over the years to make sure that what makes us different from other Joondalup escorts services is also what makes us special. That means we invest in training our escorts and providing them with the tools they need to satisfy your sexual need and provide you with the ultimate orgasmic experience.</p>\r\n\r\n<p>It also means we offer a range of services designed specifically for people looking for something different than what they were getting elsewhere. Our Elite Escort Service in Joondalup provides variety in our girls. If you are looking for a fiery redhead or a seductive brunette, we have the right girl for you. Our collection is frequently updated with new faces, providing you with a wide range of options to choose from.</p>\r\n\r\n<p>Why choose Velvet Klub?</p>\r\n\r\n<p>We&#39;re a professional escort service, so you can be sure that you&#39;re getting your money&#39;s worth. We provide our clients with everything they need to have a great time and get off-together. The best part is that we offer a wide range of services, including kinky sex toys, bondage equipment, and more! You&#39;ll never have to worry about being bored or not having enough options.</p>\r\n\r\n<p>All our escorts are well-versed in the local culture, whether it is a professional or a personal meet, making them ideal companions for whatever kind of activity you have in mind.</p>\r\n\r\n<p>Whether you&#39;re looking for something casual or more intense, something private or even public, there&#39;s a service available at Velvet Klub that will meet your needs!</p>\r\n\r\n<p>Don&#39;t waste another minute&mdash;contact us today!</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:34:47', '2023-02-16 12:22:10'),
(78, 'Fremantle', 'fremantle escorts | Local Escorts in fermantle', 'Find the Gorgeous escort service in Fremantle. 100% verified account. No hidden charges. Live cam. quick response. Best Escort Listing site. High Class Escort Listing in Fermantle.', 'fremantle-escorts', '<h1>Indulge in the Finest Escort Services in Fremantle</h1>\r\n\r\n<p>If you find yourself in Fremantle and seeking companionship and indulgence, look no further than Fremantle Escorts. Velvet Klub offers the finest Fremantle escort service and offers the finest companionship and entertainment available in the region. Your time spent with our Fremantle escorts will be filled with pleasure, sensuality, and tranquillity.</p>\r\n\r\n<p>Our aim is to offer you unparalleled service and create the most satisfying experiences possible. We are committed to ensuring the complete satisfaction of each and every one of our clients, fulfilling their desires to the best of our ability.</p>\r\n\r\n<p>Velvet Klub offers a diverse array of escort services, from romantic dinner dates to nightlife adventures and intimate encounters. Our escorts are skilful, and gorgeous, and maintain a high degree of discretion. They will exceed your expectations and provide an unforgettable experience. We take the time to understand the unique needs of each client to ensure the perfect match for their individual desires.</p>\r\n\r\n<p>At Velvet Klub, we prioritize privacy and discretion. We understand the significance of confidentiality and guarantee that your personal information will be kept secure. We offer a safe and secure payment system, accepting various methods of payment including online transactions.</p>\r\n\r\n<p>Fremantle Escorts offers a diverse range of escort services to cater to all preferences. Whether you are a businessman, performer, or simply someone seeking the ultimate in companionship, we have the perfect and unforgettable experience waiting for you.</p>\r\n\r\n<p>All of our escorts are breathtakingly beautiful, highly professional, and possess the knowledge and expertise required to provide top-notch service to their clients. They are well-versed in the local culture, customs, and attractions of Fremantle, making them the ideal companions for any activity or excursion you may have in mind.</p>\r\n\r\n<p>Browse our gallery of the best Fremantle girls today and book your appointment to indulge in the ultimate in companionship.</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:35:02', '2023-02-16 11:40:45'),
(79, 'Kalgoorlie', 'kalgoorlie escorts | High class adult service in kalgoorlie', 'Get the best escort service in Kalgoorlie. 98% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. premium Profile Escort Listing.', 'kalgoorlie-escorts', '<h1>Enjoy your time with Elite Kalgoorlie Escorts</h1>\r\n\r\n<p>Velvet Klub invites you to experience the ultimate in entertainment and pleasure. If you&#39;re in the stunning city of Kalgoorlie, we&#39;ve got you covered. Our specialty is providing top-notch Kalgoorlie escorts who are not only expert in intimacy, but also beautiful, sensual, and charismatic.</p>\r\n\r\n<p>Kalgoorlie is a captivating and gorgeous city that boasts romantic sunsets on the beach, thrilling outdoor adventures, and much more. It has something to offer every couple, whether you&#39;re seeking a calming retreat or an action-packed vacation. With its breath-taking natural beauty, mouth-watering dining options, and endless activities, Kalgoorlie is truly a gem.</p>\r\n\r\n<p>Our escort services are tailored to fit the unique character of Kalgoorlie, where our girls are ready to help you relax and rejuvenate. We can guarantee you that you won&rsquo;t another professional escorts service like us in Kalgoorlie.</p>\r\n\r\n<p>Here are a few reasons why you should choose Velvet Klub&#39;s Kalgoorlie escorts:</p>\r\n\r\n<ul>\r\n	<li>Convenience: Our escorts are willing to meet you at your home, hotel, or any other location, so you don&#39;t have to leave your comfort zone for a delightful time. This makes it ideal for busy individuals who don&#39;t have the time to travel.</li>\r\n	<li>Diversity: Whether you prefer a fiery redhead or a seductive brunette, we have the perfect girl for you. Our gallery is regularly updated with new faces, ensuring you always have a broad selection to choose from.</li>\r\n	<li>Trained Experts: Our team of professionals are extensively trained and experienced, guaranteeing that you receive the finest care. They are passionate about their work and dedicated to making sure you feel your best.</li>\r\n</ul>\r\n\r\n<p>At Velvet Klub, we believe that each client deserves only the best. That&#39;s why we go the extra mile to make sure your experience with us is truly unforgettable. From the moment you book your appointment, our friendly and professional staff will assist you through the process and answer any questions you may have.</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:35:18', '2023-02-16 11:53:13'),
(80, 'Broome', 'broome escorts | Best Adult Services in broome', 'Find the best escort service in Broome. 100% verified account. No hidden charges. Live cam. Quick response. It best Escort Listing site. Top notch Escort Listing in Broome.', 'broome-escorts', '<h1>Relax with Elite Broome Escorts at a reasonable price</h1>\r\n\r\n<p>At Velvet Klub, we understand that daily life can often take its toll, leaving people feeling unsatisfied and unfulfilled in their desires. This is where we come in, offering top-notch Broome escorts to reignite your passions and bring excitement back into your life. Our experienced girls are not only beautiful, but they also know exactly how to satisfy a man&#39;s needs and leave you speechless.</p>\r\n\r\n<p>If you&#39;re seeking to reignite your sexual desires with a gorgeous companion, our displays are the perfect place to start. You&#39;ll find the ideal Broome escort to make you feel like a king for the day and experience a night of passion and pleasure.</p>\r\n\r\n<p>We understand that the idea of hiring an escort may still be taboo for some, but it&#39;s important to remember that our girls are professional and knowledgeable in their field. They are here to provide a fun and intimate experience, much like going on a date with someone new. They will take care of all the details, including bringing lubes and toys for added excitement and make sure your time with them is nothing short of unforgettable.</p>\r\n\r\n<p>Whether you&#39;re new to the sexual experience or just in need of a refresher, our girls are trained and equipped to reignite your passions and bring back the excitement. And, with a wide range of girls available at different price points, you&#39;ll be able to find the perfect match for your needs and budget. At Velvet Klub, we believe that every client deserves the best and will go above and beyond to ensure your experience is truly unforgettable.</p>\r\n\r\n<p>In conclusion, engaging in escort services can be a great way to explore your kinks and fetishes in a safe, consensual and non-judgmental environment. It offers a level of privacy and discretion, professionalism and experience and can help to build self-confidence, and self-esteem and experiment with new things. So, what are you waiting for?</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:35:33', '2023-02-16 11:38:29'),
(81, 'Port Hedland', 'port hedland escorts | Adult and escort Services in Port hedland', 'Get the best escort service in Port hedland. 100% verified account. Find Realbabes. Live cam. Immediately response. Best Escort Listing site. premium Profile Escort Listing.', 'port-hedland-escorts', '<h1>Fulfil Your Dream of Spending Intimate Time with a Gorgeous Port Hedland Escort</h1>\r\n\r\n<p>Every now and then, we all dream about spending quality time with a stunning and beautiful girl, whether it&#39;s for a romantic dinner or an intimate experience. However, many of us struggle to turn these dreams into reality due to various reasons. This can be especially disheartening when we see our friends enjoying their relationships with gorgeous, hot girls and having fulfilled sexual experiences.</p>\r\n\r\n<p>But there&#39;s good news! Velvet Klub is here to make your dreams come true. As one of the most highly regarded Escort Services in Port Hedland, we offer a range of gorgeous and experienced escorts who know exactly how to fulfil a man&#39;s desires. These stunning girls will leave you speechless and guarantee a truly satisfying experience.</p>\r\n\r\n<p>Our escorts are the epitome of beauty and sex appeal, possessing the ability to rekindle even the most dormant of desires. With their mesmerizing looks and seductive lips, they&#39;ll take your breath away and leave you begging for more. We are confident that you won&#39;t find such exquisite beauties anywhere else in Port Hedland.</p>\r\n\r\n<p>So, why do we consider ourselves to be Port Hedland&#39;s premier escort service? Well, for starters, we prioritize the health and safety of both our clients and escorts. Before they begin working with us, all of our Port Hedland escorts undergo thorough screening processes to ensure that they are in good health and pose no threat to their clients. This is important for both parties as it reduces the risk of any health-related issues and ensures that everyone involved is safe.</p>\r\n\r\n<p>Additionally, we offer a wide range of services to cater to the diverse needs and preferences of our clients. Whether you&#39;re looking for companionship, a sensual massage, or even fetish services, our escorts are equipped to provide it all. They are also able to accommodate clients with specific needs or desires, making us a versatile and inclusive service.</p>\r\n\r\n<p>Our professional escorts are trained to maintain the privacy of their clients and ensure that their information is kept confidential. This is especially important for clients who prefer to keep their intimate experiences private and maintain a certain level of anonymity.</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:35:48', '2023-02-16 12:00:02'),
(82, 'Northern Territory', 'northern territory escorts | Escort Service in nortern territory', 'Find out the hottest Female escorts in Northern territory. Fully adult service. No hidden charges. Local Escorts. Immediately response. High Class Escort listing site.', 'northern-territorya-escorts', '<p>Find out the hottest Female escorts in Northern territory. Fully adult service. No hidden charges. Local Escorts. Immediately response. High Class Escort listing site.</p>', '2023-01-01 19:37:57', '2023-05-12 18:03:05'),
(83, 'Darwin', 'Darwin escorts | hottest escort girl in darwin', 'Find out the hottest Female escorts in Darwin. Best adult service. No hidden charges. Local Escorts. Immediately response. High Class Escort listing site.', 'darwin-escorts', '<h1>Spend a day with gorgeous Escorts Services in Darwin</h1>\r\n\r\n<p>Darwin is a vibrant and eclectic area that is steeped in history and known for its dynamic nightlife and entertainment. Located just outside the bustling central business district, it offers a vast array of bars, clubs, and restaurants, as well as a variety of historical landmarks and street art that draw both tourists and locals alike.&nbsp;</p>\r\n\r\n<p>Despite its reputation as a cultural and creative hub, the area has unfortunately also gained notoriety as a red-light district. However, with efforts underway to transform this image, it can be challenging to find the perfect escort.&nbsp;</p>\r\n\r\n<p>Enter Velvet Klub, the premier escort service in Darwin. Our stunning, seductive escorts are handpicked for their beauty, charm, and intelligence. These gorgeous girls are not only stunning, but they are also beasts in the bedroom.&nbsp;</p>\r\n\r\n<p>They will fulfill your deepest desires and make all of your sexual fantasies a reality. Whether you are looking for a threesome with your spouse or a friend, or you have kinkier tastes and want to explore your wildest desires, our escorts are here to satisfy your every need.</p>\r\n\r\n<p>We offer a diverse selection of escorts, including Russian, party girls, big booty, big boobs, and more. Just let us know what you are looking for, and we will match you with the perfect escort to bring your fantasies to life. And, with our affordable rates, you can indulge in your sexual desires without breaking the bank.&nbsp;</p>\r\n\r\n<p>Finally, we understand the importance of discretion and confidentiality in this line of work. Our professional escorts are trained to maintain the privacy of their clients and ensure that their information is kept confidential. This is especially important for clients who prefer to keep their intimate experiences private and maintain a certain level of anonymity.</p>\r\n\r\n<p>Plus, our escorts are committed to ensuring that your experience with us is completely private and confidential. So, what are you waiting for? Book your day with a gorgeous escort from Velvet Klub and let your dreams come true!</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:38:20', '2023-02-16 11:32:34'),
(84, 'Katherine', 'katherine escorts | Young Escort girl in katherine', 'Find out the hottest Female escorts near you in Katherine. Best adult service. No hidden charges. Local Escorts. Immediately response. High-Class Escort listing site.', 'katherine-escorts', '<h1>Welcome to an Elite Escort Services in Katherine</h1>\r\n\r\n<p>Are you searching for the most exceptional escort services in Katherine? Look no further than Velvet Klub, your one-stop destination for the finest escort services in town. Our Katherine escorts will take you on a journey of sensual delight and provide you with a unique and thrilling experience. Whether you&#39;re visiting Katherine for business or leisure, we have the perfect escort to make your stay even more memorable.</p>\r\n\r\n<p>Our Katherine escorts are among the most beautiful and alluring women in the city. From stunning blondes to stunning redheads, we offer a broad range of gorgeous ladies who are eager and ready to fulfill your every desire. Our escorts have the experience and passion to please you, and they will make sure that your time with them is unforgettable.</p>\r\n\r\n<p>At Velvet Klub, we understand the importance of privacy and discretion. Our services are designed to protect your privacy and ensure that you are completely satisfied. Our escorts are available for both incalls and outcalls, and can accompany you on business trips, social events, or any other occasion.</p>\r\n\r\n<p>We cater to the specific needs of each of our clients. Whether you&#39;re looking for a dinner companion, a travel partner, or someone to spend an intimate evening with, our companions are available for any length of time. At our agency, we go above and beyond to ensure that all of our Katherine escorts are thoroughly vetted and screened to ensure that they are of the highest quality. They are also upstanding members of our society.</p>\r\n\r\n<p>In conclusion, if you&#39;re searching for the ultimate experience in Katherine, look no further than Velvet Klub. Our beautiful and charming escorts are the perfect choice for any occasion, whether it&#39;s a dinner date, a night out on the town, or a more intimate encounter. We guarantee that you will leave with an unforgettable experience and memories that will last a lifetime.</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:38:33', '2023-02-16 11:48:24'),
(85, 'Alice Springs', 'alice springs escorts | Best escort Service in alice sprongs', 'Find the best escort service in Alice spring . 100% adult service. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'alice-springs-escorts', '<h1>ake a Trip to the Wonderful Alice Springs with Gorgeous Escorts</h1>\r\n\r\n<p>At Velvet Klub, we are dedicated to providing the ultimate in escorting services, offering a wide range of experiences that are both pleasurable and exciting. Our escorts are based throughout Alice Springs and can be booked for a variety of occasions, from a night out on the town to an intimate dinner date.&nbsp;</p>\r\n\r\n<p>There are numerous reasons why you should consider hiring a Velvet Klub escort. Firstly, our escorts are trained to provide an exceptional level of intimacy and connection that can be challenging to find elsewhere. They are able to offer a physical and emotional connection that can be beneficial for individuals who are struggling with feelings of loneliness or isolation.&nbsp;</p>\r\n\r\n<p>In addition to providing intimacy, our escorts are also experienced in a variety of sexual practices and can assist you in exploring new experiences and sensations. They have a wealth of knowledge and skills in the realm of pleasure and can help you to discover new aspects of yourself, making you feel more confident and self-assured in your sexual adventures.&nbsp;</p>\r\n\r\n<p>Alice Springs is a vibrant and unique destination in the heart of the Australian Outback. With its stunning natural beauty, rich indigenous culture, and rich history, Alice Springs offers visitors a chance to experience the authentic Australia.&nbsp;</p>\r\n\r\n<p>From exploring the rugged and dramatic MacDonnell Ranges to learning about the traditional customs of the local Arrernte people, there is something for everyone in Alice Springs. Whether you&#39;re an adventure seeker, history buff, or nature lover, you&#39;ll find plenty of opportunities to immerse yourself in the local culture and landscape.</p>\r\n\r\n<p>In conclusion, hiring a Velvet Klub escort is a fantastic way to fully experience the beauty and excitement of Alice Springs. Choose the girl of your dreams and create memories that will last a lifetime. Allow yourself to indulge in an unforgettable experience and rediscover the joys of life.</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:38:46', '2023-02-16 11:35:11'),
(86, 'Australian Capital Territory', 'australian capital territory escorts | Independent Escort service in australian capital territory', 'Book best Escort in australian territory. 100% adult service. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'australian-capital-territory-escorts', '<p>Book best Escort in australian territory. 100% adult service. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-01 19:44:02', '2023-05-12 18:04:51'),
(88, 'Hobart', 'Hobart escorts | Adult and escort service in hobart', 'Find the best Variety of escort in Hobart. 100% verified account. No hidden charges. Live cam service. Immediately response. It best Escort Listing site. High class\r\nEscort Listing Site.', 'hobart-escorts', '<h1>Enjoy a sexual filled Night of Fun with Hobart Escorts</h1>\r\n\r\n<p>Welcome to Velvet Klub, the leading escort service provider in Hobart. Our establishment offers an evening filled with excitement, passion, and pleasure, thanks to our stunning and seductive Hobart escorts. Whether you are seeking a night of wild passion or a romantic dinner date, our ladies have the experience and skills necessary to make every moment unforgettable.</p>\r\n\r\n<p>Unforgettable Experience with Velvet Klub Escorts</p>\r\n\r\n<p>At Velvet Klub, we are committed to providing you with the ultimate escort experience. Our escorts are highly experienced and knowledgeable, making them the perfect choice for satisfying your desires and needs. Our ladies are beautiful, passionate, and know exactly how to make any evening special. Whether you&#39;re looking for an intimate night of passion or a fun and adventurous experience, our escorts have you covered.</p>\r\n\r\n<p>Discreet and Professional Escort Service</p>\r\n\r\n<p>Our escort service in Hobart is committed to ensuring that your time with us is as fun and exciting as possible, without any worries. Our ladies are highly professional and know how to respect your privacy at all times. You can rest assured that your personal information and the details of your encounter will be kept confidential.</p>\r\n\r\n<p>Exploring Your Kinks and Fetishes</p>\r\n\r\n<p>Engaging in escorts services can also be a great way to explore your kinks and fetishes in a safe, consensual, and non-judgmental environment. Escorts can help you to build self-confidence and self-esteem, as many people who engage in kinks and fetishes may feel ashamed or guilty about their desires. Exploring these desires with an escort can help to break down these negative feelings and build a more positive self-image. Additionally, escorts can also help you to experiment and try new things, giving you the opportunity to discover new aspects of yourself.</p>\r\n\r\n<p>Register with us today and book an appointment with one of our stunning ladies. They will ignite your desires and then fulfill them, giving you a memorable night that will last a lifetime.</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:51:30', '2023-05-12 18:05:55'),
(89, 'Launceston', 'launceston escorts | Local escort in Launceston', 'Find the best Hottest escort in Launceston. 100% Trusted account. No hidden charges. Live cam service. Immediately response. Best Escort Listing site. High Profile\r\nEscort Listing.', 'launceston-escorts', '<h1>Experience Premium Escort Services in Launceston at Velvet Klub</h1>\r\n\r\n<p>At Velvet Klub, we are dedicated to providing exceptional escort services to those seeking companionship, pleasure, and adventure in Launceston. Our collection of stunning and talented escorts is second to none and is sure to provide you with an unforgettable experience.</p>\r\n\r\n<p>Our escorts are not only beautiful and charming, but they are also professional, experienced, and passionate about providing the best possible service to our clients. Whether you are in town for business or leisure, our escorts are always ready to make your time with them a truly special one.</p>\r\n\r\n<p>One of the many benefits of exploring your kinks and fetishes with Velvet Klub&#39;s escort services is the level of privacy and discretion that we offer. Many individuals may feel embarrassed or ashamed about their desires and may not want to share them with a partner or friends. Our escorts provide a safe and confidential space where you can freely explore your desires without fear of judgement or rejection.</p>\r\n\r\n<p>In addition to privacy and discretion, our escort services also offer a level of professionalism and experience that cannot be found in a personal relationship. Our escorts are trained and experienced in providing a wide range of services, including BDSM and fetish services, and can provide guidance and advice on how to explore your kinks safely and responsibly.</p>\r\n\r\n<p>Thus, Velvet Klub is the perfect choice for anyone looking for an unforgettable evening of pleasure and excitement in Home Bush. Our professional and experienced escorts are available for your pleasure and can help you to explore your kinks and fetishes in a safe and confidential environment.</p>\r\n\r\n<p>So, why wait? Browse our site, find the escort that suits your kinks and fetishes, and book an appointment today. At Velvet Klub, we are committed to making your time with us an unforgettable one.</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-01 19:51:47', '2023-05-12 18:06:11'),
(90, 'Auckland', 'Auckland Escorts | Best Escort Services in Aucland', 'Find the best escort Girl in Auckland. 100% verified account.No hidden charges. Live cam. Immediately response. Best Escort Listing site. High ProfileEscort Listing.', 'auckland-escorts', '<p>Find the best escort Girl in Auckland. 100% verified account.No hidden charges. Live cam. Immediately response. Best Escort Listing site. High ProfileEscort Listing.</p>', '2023-01-02 17:48:55', '2023-05-12 18:07:41'),
(91, 'Devonport', 'Devonport Escort | hottest female Escort in Devonport', 'Find the best escort Girl in Devonport. 100% Trusted account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing.', 'devonport-escorts', '<p>Find the best escort Girl in Devonport. 100% Trusted account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 17:54:34', '2023-05-12 18:08:47'),
(92, 'Waiuku', 'Waiuku Escorts | Adult Services in Waiuku', 'Find the best escort Girl in Waiuku. 100% Trusted account. No hidden charges. Live cam. Quick response. It best Escort Listing site. High Profile Escort Listing.', 'waiuku-escorts', '<p>Find the best escort Girl in Waiuku. 100% Trusted account. No hidden charges. Live cam. Quick response. It best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 17:57:16', '2023-05-12 18:09:58'),
(93, 'Rotorua', 'Rotorua Escorts | best escort Services in Rotorua', 'Find the best escort Girl in Rotorua. 99% Trusted account. No hidden charges. Live cam. Quick response. Best Escort Listing site. High Profile Escort Listing.', 'rotorua-escorts', '<p>Find the best escort Girl in Rotorua. 99% Trusted account. No hidden charges. Live cam. Quick response. Best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 17:58:56', '2023-05-12 18:10:35'),
(94, 'Tauranga', 'Tauranga Escorts | best adult service in tauranga', 'Find the best escort Girl in Tauranga. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'tauranga-escorts', '<p>Find the best escort Girl in Tauranga. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 18:00:40', '2023-05-12 18:11:27'),
(95, 'Akaroa', 'Akaroa Escort | Escort Services in Akaroa', 'Find the best escort Girl in Akora. Local Escort. Verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'akaroa-escorts', '<p>Find the best escort Girl in Akora. Local Escort. Verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 18:01:51', '2023-05-12 18:12:08'),
(96, 'Christchurch', 'Christchurch Escort | best Escort in christchurch', 'Searching For the best escort service in Christchurch. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing.', 'christchurch-escorts', '<p>Searching For the best escort service in Christchurch. 100% verified account.&nbsp;No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile<br />\r\nEscort Listing.</p>', '2023-01-02 18:03:13', '2023-05-12 18:12:57'),
(97, 'Lyttelton', 'Lyttelton Escort | escort and adult Services in Lyttelton', 'Looking For the best escort service in Lyttelton. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing.', 'lyttelton-escorts', '<p>Looking For the best escort service in Lyttelton. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile<br />\r\nEscort Listing.</p>', '2023-01-02 18:04:34', '2023-05-12 18:13:58');
INSERT INTO `pages` (`id`, `page_name`, `meta_title`, `meta_description`, `location`, `content`, `created_at`, `updated_at`) VALUES
(98, 'Timaru', 'Timaru escorts | Adult, Escort Services in Timaru', 'Find the best escort service in Timaru. 100% Verified account. No hidden charges. Live cam. Quick response. It best Escort Listing site. High Profile Escort Listing in Mackey.', 'timaru-escorts', '<p>Find the best escort service in Timaru. 100% Verified account. No hidden charges. Live cam. Quick response. It best Escort Listing site. High Profile Escort Listing in Mackey.</p>', '2023-01-02 18:05:43', '2023-05-12 18:14:32'),
(99, 'Hastings', 'Hastings Escorts | Quality Escort service in Hastings', 'Find the best escort Female in Hastings. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing.', 'hastings-escorts', '<p>Find the best escort Female in Hastings. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 18:07:34', '2023-05-12 18:15:07'),
(100, 'Napier', 'Napier Escort | Best escorts in Napier', 'Find the best Local escort girl in Napier. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'napier-escorts', '<p>Find the best Local escort girl in Napier. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 18:08:31', '2023-05-12 18:15:34'),
(101, 'Pahiatua', 'Pahiatua escorts | Hottest Female Escorts in Pahiatua', 'Find the best escort service in Pahiatua. 100% trusted account. No hidden charges. Immediately response. Best Escort Listing site. High-Class Escort Listing in Pahiatua.', 'pahiatua-escorts', '<p>Find the best escort service in Pahiatua. 100% trusted account. No hidden charges. Immediately response. Best Escort Listing site. High Class Escort Listing in Pahiatua.</p>', '2023-01-02 18:10:15', '2023-05-12 18:16:03'),
(102, 'Palmerston North', 'Palmerston North escorts | Escort Services in Palmerston North', 'Book the best Hottest escort in Palmerston North. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'palmerston-North-escorts', '<p>Book the best Hottest escort in Palmerston North. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 18:11:36', '2023-05-12 18:16:33'),
(103, 'Taihape', 'Taihape Escorts | Female escorts in Taihape', 'Find the best beautiful escort in Taihape. 100% Verified Profile. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'taihape-escorts', '<p>Find the best beautiful escort in Taihape. 100% Verified Profile. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 18:12:28', '2023-05-12 18:18:11'),
(104, 'Wanganui', 'Wanganui Escorts | Best Escorts services in Wanganui', 'Find the best escort service in Wanganui. 95% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. Premium Escort Listing.', 'wanganui-escorts', '<p>Find the best escort service in Wanganui. 95% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. Premium Escort Listing.</p>', '2023-01-02 18:13:37', '2023-05-12 18:18:37'),
(105, 'Alexandra', 'Alexandra Escorts | High class Escort Services in Alexandra', 'Find the high Class Escort services in Alexandra. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Class Escort Listing.', 'alexandra-escorts', '<p>Find the high-Class Escort services in Alexandra. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High-Class Escort Listing.</p>', '2023-01-02 18:14:40', '2023-05-12 18:19:46'),
(106, 'Dunedin', 'Dunedin Escorts | Fully Escort Services in Dunedin', 'Find the Gorgeous escort service in Dunedin. 100% verified account. No hidden charges. Live cam. quick response. Best Escort Listing site. High Profile Escort Listing in Dunedin.', 'dunedin-escorts', '<p>Find the Gorgeous escort service in Dunedin. 100% verified account. No hidden charges. Live cam. quick response. Best Escort Listing site. High Profile Escort Listing in Dunedin.</p>', '2023-01-02 18:16:28', '2023-05-12 18:20:23'),
(107, 'Kaitangata', 'Kaitangata Escorts | Escorts Services in Kaitangata', 'Find the best escort service in Kaitangata. 100% verified account. No hidden charges. Live cam. quick response. Best Escort Listing site. High Profile Escort Listing in Kaitangata.', 'kaitangata-escorts', '<p>Find the best escort service in Kaitangata. 100% verified account. No hidden charges. Live cam. quick response. It best Escort Listing site. High Profile Escort Listing in Kaitangata.</p>', '2023-01-02 18:17:21', '2023-05-12 18:21:06'),
(108, 'Oamaru', 'Oamaru Escorts | Top Escort Services in Oamaru', 'Find the best Independent escort service in Oamaru. 100% Trusted account. No hidden charges. Live cam. Quick response. Best Escort Listing site. High Profile Escort Listing.', 'oamaru-escorts', '<p>Find the best Independent escort service in Oamaru. 100% Trusted account. No hidden charges. Live cam. Quick response. Best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 18:18:25', '2023-05-12 18:21:41'),
(109, 'Blenheim', 'Blenheim Escorts | The best Escorts services in Blenheim', 'Looking for best escort service in Blenheim. 95% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'blenheim-escorts', '<p>Looking for best escort service in Blenheim. 95% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 18:19:17', '2023-05-12 18:22:36'),
(110, 'Picton', 'Picton Escorts | The Best adult Services in Picton', 'Find the best escort service in Picton. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Class Escort Listing.', 'picton-escorts', '<p>Find the best escort service in Picton. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Class Escort Listing.</p>', '2023-01-02 18:20:06', '2023-05-12 18:23:14'),
(111, 'Invercargill', 'Invercargill Escorts | Escort Services in Invercargill', 'Find Out the best  escort service in Invercargill. 100% verified account. No hidden charges. Live cam. Quick response. Our escorts are so kind hearted. Best Escort Listing site. High Profile Escort Listing', 'invercargill-escorts', '<p>Find Out the best escort service in Invercargill. 100% verified account. No hidden charges. Live cam. Quick response. Our escorts are so kind hearted. Best Escort Listing site. High Profile Escort Listing</p>', '2023-01-02 18:21:23', '2023-05-12 18:23:52'),
(112, 'Hawera', 'Hawera Escort | Escorts and adult Services in Hawera', 'Find the best Adult service in Hawera. 100% verified account. No hidden charges. Live cam Services. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'hawera-escorts', '<p>Find the best Adult service in Hawera. 100% verified account. No hidden charges. Live cam Services. Immediately response. Best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 18:23:35', '2023-05-12 18:25:52'),
(113, 'Kapuni', 'Kapuni Escorts | Kapuni Escort Services', 'Find the best Independent escort service in Kapuni. 98% verified account. No hidden charges. Live cam. Quick response. Best Escort Listing site. High Profile Escort Listing.', 'kapuni-escorts', '<p>Find the best Independent escort service in Kapuni. 98% verified account. No hidden charges. Live cam. Quick response. Best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 18:24:44', '2023-05-12 18:26:40'),
(114, 'New Plymouth', 'New Plymouth Escort | Escort Services in New Plymouth', 'Find the best Adult service in New Plymouth. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High profile Escort Listing.', 'new-plymouth-escorts', '<p>Find the best Adult service in New Plymouth. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High-profile Escort Listing.</p>', '2023-01-02 18:25:55', '2023-05-12 18:27:43'),
(115, 'Stratford', 'Startford Escort | local escort services in Startford', 'Find out the hottest Female escorts in Stratford. Fully adult service. No hidden charges. Local Escorts. Quick response. High Profile Escort listing site.', 'stratford-escorts', '<p>Find out the hottest Female escorts in Stratford. Fully adult service. No hidden charges. Local Escorts. Quick response. High Profile Escort listing site.</p>', '2023-01-02 18:27:06', '2023-05-12 18:28:43'),
(116, 'Paeroa', 'Paeroa Escorts | The Best Escorts in Paeroa', 'Find the best Variety of escort  in Paeroa. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing.', 'paeroa-escorts', '<p>Find the best Variety of escort in Paeroa. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 18:28:10', '2023-05-12 18:29:46'),
(117, 'Te Aroha', 'Te Aroha Escorts | Top escort Services in Te Aroha', 'Find the best Variety of escort in Te Aroha. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High-Class Escort Listing.', 'te-aroha-escorts', '<p>Find the best Variety of escort in Te Aroha. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High-Class Escort Listing.</p>', '2023-01-02 18:29:17', '2023-05-12 18:30:25'),
(118, 'Tokoroa', 'Tokoroa Escorts | escort services in Tokaroa', 'Find out the gorgeous and Hottest looking female escorts in Tokaro. 100% Genuine. No hidden charges. Immediately response. high Profile Escort Listing.', 'tokoroa-escorts', '<p>Find out the gorgeous and Hottest looking female escorts in Tokaro. 100% Genuine. No hidden charges. Immediately response. high Profile Escort Listing.</p>', '2023-01-02 18:30:08', '2023-05-12 18:31:36'),
(119, 'Waihi', 'Waihi Escorts | Independent Escorts in Waihi', 'Looking For the best escort service in Waihi? 100% verified account. No extra charges. Live cam. Immediately response. Best Adult Service site. High-class Escort Listing.', 'waihi-escorts', '<p>Looking For the best escort service in Waihi? 100% verified account. No extra charges. Live cam. Immediately response. Best Adult Service site. High-class Escort Listing.</p>', '2023-01-02 18:31:49', '2023-05-12 18:32:08'),
(120, 'Hamilton', 'Hamilton Escorts | Best local Escorts Services in Hamilton', 'Find the best Independent escort service in Hamilton. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing.', 'hamilton-escorts', '<p>Find the best Independent escort service in Hamilton. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 18:32:44', '2023-05-12 18:33:05'),
(121, 'Lower Hutt', 'Lower hutt Escorts | Escort Services in Lower Hutt', 'Find out the hottest female escorts near you. Local escorts from Lower Hutt. Independent escorts. 100% verified account. Best Adult Service site. High Profile Escorts Listing.', 'lower-hutt-escorts', '<p>Find out the hottest female escorts near you. Local escorts from Lower Hutt. Independent escorts. 100% verified account. Best Adult Service site. High Profile Escorts Listing.</p>', '2023-01-02 18:34:14', '2023-05-12 18:33:48'),
(122, 'Masterton', 'Masterton Escorts | Best adult services in Masterton', 'Looking for the realbabes in Masterton. Find real pleasure. 100% verified account. No hidden charges. Live cam service. Immediately response. It best Escort Listing site. High Profile Escort Listing.', 'masterton-escorts', '<p>Looking for the real babes in Masterton. Find real pleasure. 100% verified account. No hidden charges. Live cam service. Immediately response. It best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 18:35:03', '2023-05-12 18:35:16'),
(123, 'Porirua', 'Porirua Escorts | Best Escorts Services in Porirua', 'Find the High class escort service in Porirua. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'porirua-escorts', '<p>Find the High class escort service in Porirua. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 18:36:26', '2023-05-12 18:36:43'),
(124, 'Upper Hutt', 'Upper Hutt | Top Escorts Service in Upper Hutt', 'Get the best escort service in Upper Hutt. 100% verified account. Find Realbabes. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'upper-hutt-escorts', '<p>Get the best escort service in Upper Hutt. 100% verified account. Find Realbabes. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 18:37:53', '2023-05-12 18:37:05'),
(125, 'Wellington', 'Wellington Escorts |  Escort Services from Wellington', 'Find the best escort service in Wellington. 100% verified account. No hidden charges. Live cam. Quick response. Best Escort Listing site. High Class and Premium Escort Listing.', 'wellington-escorts', '<p>Find the best escort service in Wellington. 100% verified account. No hidden charges. Live cam. Quick response. Best Escort Listing site. High Class and Premium Escort Listing.</p>', '2023-01-02 18:38:48', '2023-05-12 18:38:15'),
(126, 'Greymouth', 'Greymouth Escorts | Best Adult Services in Greymouth', 'Searching for the best escort service in Greymouth. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.', 'greymouth-escorts', '<p>Searching for the best escort service in Greymouth. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.</p>', '2023-01-02 18:39:49', '2023-05-12 18:39:04'),
(127, 'Hokitika', 'Hokitika Escorts | hottest Female Escorts in Hokitika', 'Looking for the realbabes in Hokitika. 100% verified account. No hidden charges. Live cam service. Immediately response. It best Escort Listing site. High-class Escort Listing.', 'hokitika-escorts', '<p>Looking for the real babes in Hokitika. 100% verified account. No hidden charges. Live cam service. Immediately response. It best Escort Listing site. High-class Escort Listing.</p>', '2023-01-02 18:40:57', '2023-05-12 18:39:45'),
(128, 'Westport', 'Westport Escorts | Private Escorts in Westport', 'Find out the hottest Female escorts in Westport. Fully adult service. No hidden charges. Local Escorts. Immediately response. High Class Escort listing site.', 'westport-escorts', '<p>Find out the hottest Female escorts in Westport. Fully adult service. No hidden charges. Local Escorts. Immediately response. High Class Escort listing site.</p>', '2023-01-02 18:41:38', '2023-05-12 18:43:38'),
(167, 'State Bay of Plenty', 'State Bay of Plenty Escorts | Adult Services in State Bay of Plenty', 'Searching For the best escort service in State Bay of Plenty. 100% verified account.\r\nNo hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile\r\nEscort Listing.', 'state-bay-of-plenty-escorts', '<p>Searching For the best escort service in State Bay of Plenty. 100% verified account.<br />\r\nNo hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile<br />\r\nEscort Listing.</p>', '2023-02-02 11:16:39', '2023-02-02 11:16:39'),
(168, 'State Canterbury', 'State Canterbury Escorts | Beautiful Escort Services in State Canterbury', 'Find the best escort service in State Canterbury. 100% verified account. No hidden charges. Live cam. Quick response. It best Escort Listing site. High Profile\r\nEscort Listing.', 'state-canterbury-escorts', '<p>Find the best escort service in State Canterbury. 100% verified account. No hidden charges. Live cam. Quick response. It best Escort Listing site. High Profile<br />\r\nEscort Listing.</p>', '2023-02-02 11:27:02', '2023-05-12 18:45:07'),
(169, 'State Gisborne', 'State Gisborne Escort | Escorts Services in  State Gisborne', 'Book the best Hottest escort in State Gisborne. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing.', 'state-gisborne-escort', '<p>Book the best Hottest escort in State Gisborne. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing.</p>', '2023-02-02 11:49:03', '2023-02-02 11:49:03'),
(170, 'State Hawke’s Bay', 'State Hawke’s Bay Escorts | Best Escort Services in State Hawke’s Bay', 'Find the best escort Girl in State Hawke’s Bay . 100% verified account.\r\nNo hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile\r\nEscort Listing.', 'state-hawke’s-bay-escorts', '<p>Find the best escort Girl in State Hawke&rsquo;s Bay . 100% verified account.<br />\r\nNo hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile<br />\r\nEscort Listing.</p>', '2023-02-02 11:52:17', '2023-02-02 11:52:17'),
(171, 'State Manawatu-Wanganui', 'State Manawatu-Wanganui escorts | Hottest Escorts in State Manawatu-Wanganui', 'Find the best beautiful escort in State Manawatu-Wanganui. 100% Verified Profile. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing.', 'state-manawatu-wanganui-escorts', '<p>Find the best beautiful escort in State Manawatu-Wanganui. 100% Verified Profile. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing.</p>', '2023-02-02 11:53:40', '2023-02-02 11:53:40'),
(172, 'State Marlborough', 'State Marlborough Escorts | Private Escorts in State Marlborough', 'Find out the hottest Female escorts in State Marlborough. Fully adult service. No hidden charges. Local Escorts. Immediately response. High-Class Escort listing site.', 'state-marlborough-escorts', '<p>Find out the hottest Female escorts in State Marlborough. Fully adult service. No hidden charges. Local Escorts. Immediately response. High-Class Escort listing site.</p>', '2023-02-02 11:55:10', '2023-02-02 11:55:10'),
(173, 'State Nelson', 'State Nelson Escorts | find the best Escort Services in State Nelson', 'Find the best escort service in State Nelson. 100% trusted account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing in State Nelson.', 'state-nelson-escorts', '<p>Find the best escort service in State Nelson. 100% trusted account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing in State Nelson.</p>', '2023-02-02 11:56:32', '2023-02-02 11:56:32'),
(174, 'State Otago', 'Top State Otago Escorts | Escorts Services in State Otago', 'Find the best escort service in State Otago. 100% verified account. No hidden charges. Live cam. Faster response. It best Escort Listing site. High Profile Escort Listing in Townsville', 'state-otago-escorts', '<p>Find the best escort service in State Otago. 100% verified account. No hidden charges. Live cam. Faster response. It best Escort Listing site. High Profile Escort Listing in Townsville</p>', '2023-02-02 11:58:05', '2023-02-02 11:58:05'),
(175, 'State Taranaki', 'State Taranaki Escorts | Escorts Top Services in State Taranaki', 'Find the best escort service in State Taranaki. 100% verified account. No hidden charges. Quick response. It best Escort Listing site. High Profile Escort Listing.', 'state-taranaki-escorts', '<p>Find the best escort service in State Taranaki. 100% verified account. No hidden charges. Quick response. It best Escort Listing site. High Profile Escort Listing.</p>', '2023-02-02 11:59:33', '2023-02-02 11:59:33'),
(176, 'State Southland', 'State Southland Best Escorts | Escorts Services in State Southland', 'Find the best escort service in State Southland. 98% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing.', 'state-southland-escorts', '<p>Find the best escort service in State Southland. 98% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing.</p>', '2023-02-02 12:01:34', '2023-02-02 12:01:34'),
(177, 'State Tasman', 'State Tasman Escorts | Growing Escorts Services in State Tasman', 'Find the best Sex service in the State of Tasman. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing.', 'state-tasman-escorts', '<p>Find the best Sex service in the State of Tasman. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. High Profile Escort Listing.</p>', '2023-02-02 12:02:54', '2023-02-02 12:02:54'),
(178, 'Waikato', 'Waikato Escorts | Personal escort in Waikato', 'Find the best Independent escort service in Waikato. 100% verified account. No hidden charges. Live cam. Quick response. It best Escort Listing site. High Profile Escort Listing.', 'waikato-escorts', '<p>Find the best Independent escort service in Waikato. 100% verified account. No hidden charges. Live cam. Quick response. It best Escort Listing site. High Profile Escort Listing.</p>', '2023-02-02 12:03:49', '2023-02-02 12:03:49'),
(179, 'Wellington', 'Wellington Escorts | Adult Services in Wellington', 'Find the best Adult service in Wellington. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. Premium Escort Listing.', 'wellington-escorts', '<p>Find the best Adult service in Wellington. 100% verified account. No hidden charges. Live cam. Immediately response. It best Escort Listing site. Premium Escort Listing.</p>', '2023-02-02 12:04:55', '2023-02-02 12:06:28'),
(180, 'West Coast', 'West Coast Escort | Escort Services in West Coast', 'Find the best Variety of escorts in West Coast. 100% verified account. No hidden charges. Live cam service. Immediately response. Best Escort Listing site. High Profile\r\nEscort Listing.', 'west-coast-escorts', '<p>Find the best Variety of escorts in the West Coast. 100% verified account. No hidden charges. Live cam service. Immediately response. It best Escort Listing site. High Profile<br />\r\nEscort Listing.</p>', '2023-02-02 12:08:22', '2023-05-12 19:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dev.lovnish@gmail.com', '$2y$10$XYgOx2./CQ6a5w1eBlKdUOycfO33xYEjVQ81hbrFOjFPGpYy.NrpW', '2022-12-22 17:34:53'),
('cheemaharkamal@yahoo.com.au', '$2y$10$zE9ykURS3WtPUXXTfOauK.4uGJ2VzCzwBtgh/wUF3OWI6xV8W15aG', '2023-01-04 17:37:49'),
('cheemaharkamal@gmail.com', '$2y$10$fZ/c3RMKB.L7ozbNih7pquBG7KWXDoWHeWA.TD/D.PDMnWyJw9Qb.', '2023-04-17 17:50:49'),
('aggarwal.lavish436@gmail.com', '$2y$10$ic7eMEZEgvfs75pHjEHONuHvwPbq071KmIccB.WIUuSM91yInTSLO', '2023-04-18 17:16:21'),
('testing@yopmail.com', '$2y$10$QIOMGSSUm7cmlUxQivtmuOUpyJPMR10UcwVTlILLeiTRrhKADEGPa', '2023-04-22 18:14:01'),
('test02@yopmail.com', '$2y$10$SGX6gD9swNQSv3xDFo9Ml.98EX7eqIWc5W.mmXxAMw05hWwPIFnhO', '2023-04-27 11:23:10'),
('celusso@mail.com', '$2y$10$ki6LRJf3ipf62QJ4ddCq.uLAR.60lSWTm/RhiUnhL1tBX2EL9om4.', '2023-05-26 12:31:35'),
('julianacroll@gmail.com', '$2y$10$77eRusK2hKCvId63tOp83OJjdKdcg8VnkJuCqBUwFsO4./YWa1YYa', '2023-07-28 04:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_plan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `slug`, `stripe_plan`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Basic', 'basic', 'price_1M3GOrSDrbMKikY9uPdZB4iF', 10, 'Basic', '2022-11-12 10:14:02', '2022-11-12 10:14:02'),
(2, 'Premium', 'premium', 'price_1M3GRJSDrbMKikY93vT25rIT', 100, 'Premium', '2022-11-12 10:14:02', '2022-11-12 10:14:02');

-- --------------------------------------------------------

--
-- Table structure for table `private_things`
--

CREATE TABLE `private_things` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `affectionate_cuddling` text COLLATE utf8mb4_unicode_ci,
  `affectionate_kissing` text COLLATE utf8mb4_unicode_ci,
  `anal_play` text COLLATE utf8mb4_unicode_ci,
  `anal_play_on_me` text COLLATE utf8mb4_unicode_ci,
  `anal_play_on_you` text COLLATE utf8mb4_unicode_ci,
  `atm` text COLLATE utf8mb4_unicode_ci,
  `b_and_d` text COLLATE utf8mb4_unicode_ci,
  `bbbj` text COLLATE utf8mb4_unicode_ci,
  `bdsm` text COLLATE utf8mb4_unicode_ci,
  `bi_twin` text COLLATE utf8mb4_unicode_ci,
  `bj` text COLLATE utf8mb4_unicode_ci,
  `bls` text COLLATE utf8mb4_unicode_ci,
  `bondage` text COLLATE utf8mb4_unicode_ci,
  `brazilian` text COLLATE utf8mb4_unicode_ci,
  `body_slide` text COLLATE utf8mb4_unicode_ci,
  `cbj` text COLLATE utf8mb4_unicode_ci,
  `cbt` text COLLATE utf8mb4_unicode_ci,
  `cd` text COLLATE utf8mb4_unicode_ci,
  `cim` text COLLATE utf8mb4_unicode_ci,
  `cimws` text COLLATE utf8mb4_unicode_ci,
  `cob` text COLLATE utf8mb4_unicode_ci,
  `cof` text COLLATE utf8mb4_unicode_ci,
  `costumes` text COLLATE utf8mb4_unicode_ci,
  `costumes_and_role_play` text COLLATE utf8mb4_unicode_ci,
  `couples` text COLLATE utf8mb4_unicode_ci,
  `dinner_companion` text COLLATE utf8mb4_unicode_ci,
  `doggy_style` text COLLATE utf8mb4_unicode_ci,
  `dp` text COLLATE utf8mb4_unicode_ci,
  `dt` text COLLATE utf8mb4_unicode_ci,
  `erotic_sensual_massage` text COLLATE utf8mb4_unicode_ci,
  `facial` text COLLATE utf8mb4_unicode_ci,
  `fe` text COLLATE utf8mb4_unicode_ci,
  `greek` text COLLATE utf8mb4_unicode_ci,
  `filming` text COLLATE utf8mb4_unicode_ci,
  `fire_and_ice_hot_and_cold_bj` text COLLATE utf8mb4_unicode_ci,
  `gs_on_you` text COLLATE utf8mb4_unicode_ci,
  `fk` text COLLATE utf8mb4_unicode_ci,
  `foot_fetish` text COLLATE utf8mb4_unicode_ci,
  `italian` text COLLATE utf8mb4_unicode_ci,
  `gagging` text COLLATE utf8mb4_unicode_ci,
  `gfe` text COLLATE utf8mb4_unicode_ci,
  `light_spanking` text COLLATE utf8mb4_unicode_ci,
  `GS` text COLLATE utf8mb4_unicode_ci,
  `gs_on_me` text COLLATE utf8mb4_unicode_ci,
  `massage` text COLLATE utf8mb4_unicode_ci,
  `happy_ending` text COLLATE utf8mb4_unicode_ci,
  `hj` text COLLATE utf8mb4_unicode_ci,
  `milf` text COLLATE utf8mb4_unicode_ci,
  `kissing` text COLLATE utf8mb4_unicode_ci,
  `light_bondage` text COLLATE utf8mb4_unicode_ci,
  `multiple_positions` text COLLATE utf8mb4_unicode_ci,
  `lk` text COLLATE utf8mb4_unicode_ci,
  `maid` text COLLATE utf8mb4_unicode_ci,
  `natural_oral` text COLLATE utf8mb4_unicode_ci,
  `masturbation` text COLLATE utf8mb4_unicode_ci,
  `mff` text COLLATE utf8mb4_unicode_ci,
  `pearl_necklace` text COLLATE utf8mb4_unicode_ci,
  `mmf` text COLLATE utf8mb4_unicode_ci,
  `msog` text COLLATE utf8mb4_unicode_ci,
  `prostate_massage` text COLLATE utf8mb4_unicode_ci,
  `mutual_french_oral` text COLLATE utf8mb4_unicode_ci,
  `mutual_natural_oral` text COLLATE utf8mb4_unicode_ci,
  `rimming` text COLLATE utf8mb4_unicode_ci,
  `nurse` text COLLATE utf8mb4_unicode_ci,
  `overnight_stays` text COLLATE utf8mb4_unicode_ci,
  `role_play` text COLLATE utf8mb4_unicode_ci,
  `photography` text COLLATE utf8mb4_unicode_ci,
  `police_woman` text COLLATE utf8mb4_unicode_ci,
  `sex_toys` text COLLATE utf8mb4_unicode_ci,
  `pse` text COLLATE utf8mb4_unicode_ci,
  `pse_with_filming` text COLLATE utf8mb4_unicode_ci,
  `snowballing` text COLLATE utf8mb4_unicode_ci,
  `rimming_on_me` text COLLATE utf8mb4_unicode_ci,
  `rimming_on_you` text COLLATE utf8mb4_unicode_ci,
  `spanking_on_me` text COLLATE utf8mb4_unicode_ci,
  `school girl` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secretary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `strap_on` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexy_lingerie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexy_shower_for_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `strip_tease` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_escort` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spanish` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuddling_and_touching` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spanking_on_you` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `squirting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mutual_masturbation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `strap_on_you` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teasing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tea_bagging` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tromboning` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erotic_relaxation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dirty_talk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_body_massage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wax_play` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overnight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passionate_kissing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sissy_play` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toys` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `escort` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wrestling` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lactating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slave_sub_play` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nipple_manipulation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urethral_play` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electrode_play` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relief` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cross_dressing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latex_leather_worship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boot_worship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ball_busting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `needle_play` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submissive` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intimidation_on_you` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brown_showers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ffm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dfk` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_girl` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overnigth` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daty` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caning` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ddp` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pearl_nacklace` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `private_things`
--

INSERT INTO `private_things` (`id`, `user_id`, `affectionate_cuddling`, `affectionate_kissing`, `anal_play`, `anal_play_on_me`, `anal_play_on_you`, `atm`, `b_and_d`, `bbbj`, `bdsm`, `bi_twin`, `bj`, `bls`, `bondage`, `brazilian`, `body_slide`, `cbj`, `cbt`, `cd`, `cim`, `cimws`, `cob`, `cof`, `costumes`, `costumes_and_role_play`, `couples`, `dinner_companion`, `doggy_style`, `dp`, `dt`, `erotic_sensual_massage`, `facial`, `fe`, `greek`, `filming`, `fire_and_ice_hot_and_cold_bj`, `gs_on_you`, `fk`, `foot_fetish`, `italian`, `gagging`, `gfe`, `light_spanking`, `GS`, `gs_on_me`, `massage`, `happy_ending`, `hj`, `milf`, `kissing`, `light_bondage`, `multiple_positions`, `lk`, `maid`, `natural_oral`, `masturbation`, `mff`, `pearl_necklace`, `mmf`, `msog`, `prostate_massage`, `mutual_french_oral`, `mutual_natural_oral`, `rimming`, `nurse`, `overnight_stays`, `role_play`, `photography`, `police_woman`, `sex_toys`, `pse`, `pse_with_filming`, `snowballing`, `rimming_on_me`, `rimming_on_you`, `spanking_on_me`, `school girl`, `secretary`, `strap_on`, `sexy_lingerie`, `sexy_shower_for_2`, `strip_tease`, `social_escort`, `spanish`, `cuddling_and_touching`, `spanking_on_you`, `squirting`, `mutual_masturbation`, `strap_on_you`, `teasing`, `tea_bagging`, `tromboning`, `erotic_relaxation`, `dirty_talk`, `full_body_massage`, `wax_play`, `overnight`, `passionate_kissing`, `sissy_play`, `toys`, `escort`, `wrestling`, `full_service`, `lactating`, `slave_sub_play`, `nipple_manipulation`, `urethral_play`, `electrode_play`, `relief`, `cross_dressing`, `latex_leather_worship`, `boot_worship`, `ball_busting`, `needle_play`, `submissive`, `intimidation_on_you`, `brown_showers`, `ffm`, `created_at`, `updated_at`, `dfk`, `school_girl`, `overnigth`, `daty`, `caning`, `ddp`, `pearl_nacklace`) VALUES
(17, 208, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-23 17:50:08', '2023-04-25 23:59:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 209, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, '2023-04-23 18:01:59', '2023-04-26 00:12:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 210, NULL, NULL, 'on', NULL, NULL, 'on', 'on', NULL, 'on', NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-23 18:44:41', '2023-04-23 18:44:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 250, 'on', NULL, 'on', 'on', NULL, 'on', 'on', 'on', 'on', NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', NULL, 'on', 'on', NULL, NULL, NULL, NULL, NULL, 'on', 'on', NULL, NULL, NULL, NULL, NULL, 'on', NULL, 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, 'on', 'on', NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', NULL, 'on', 'on', 'on', NULL, 'on', NULL, NULL, NULL, NULL, NULL, 'on', 'on', NULL, 'on', NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 'on', NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 'on', '2023-05-30 22:18:25', '2023-05-31 00:49:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 251, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 13:09:18', '2023-07-14 12:30:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 254, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 'on', NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, 'on', 'on', NULL, 'on', NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, 'on', 'on', NULL, 'on', NULL, NULL, 'on', NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, '2023-06-22 03:55:04', '2023-06-22 03:55:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 255, 'on', 'on', 'on', 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '2023-06-26 12:10:52', '2023-06-26 12:11:05', 'on', NULL, NULL, 'on', 'on', 'on', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Australian Capital Territory', 1, NULL, NULL),
(2, 'New South Wales', 1, NULL, NULL),
(3, 'Northern Territory', 1, NULL, NULL),
(4, 'Queensland', 1, NULL, NULL),
(5, 'South Australia', 1, NULL, NULL),
(6, 'Tasmania', 1, NULL, NULL),
(7, 'Victoria', 1, NULL, NULL),
(8, 'Western Australia', 1, NULL, NULL),
(9, 'Auckland', 2, NULL, NULL),
(10, 'New Plymouth', 2, NULL, NULL),
(11, 'Wellington', 2, NULL, NULL),
(12, 'Nelson', 2, NULL, NULL),
(13, 'Canterbury', 2, NULL, NULL),
(14, 'Otago', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_items`
--

CREATE TABLE `subscription_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscription_id` bigint(20) UNSIGNED NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delegated_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_last_four` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `is_email_verified` tinyint(1) NOT NULL DEFAULT '0',
  `is_profile_completed` tinyint(1) NOT NULL DEFAULT '0',
  `image_verification_status` tinyint(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `delegated_user_id`, `deleted_at`, `created_user_id`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`, `is_email_verified`, `is_profile_completed`, `image_verification_status`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$CHndvtMFgbwFxcJjfbmHJexJi7/4/ikYh.w1IG9JoL9KeXsrzdgky', NULL, '2022-04-29 03:06:13', '2023-04-12 18:09:27', 'admin', NULL, NULL, NULL, 'cus_Mmvrz1cpNGaMiX', 'visa', '4242', NULL, 0, 0, 0),
(198, 'test', 'test22@yopmail.com', NULL, '$2y$10$lMj212oWgO1v968KiJaIDuguudoKJKsPqnxWvCSPTIHhtL.F9Rtim', NULL, '2023-04-22 17:46:24', '2023-04-22 17:46:24', 'establishment', NULL, NULL, 197, NULL, NULL, NULL, NULL, 1, 0, 0),
(208, 'Emile', 'sussygray55201@gmail.com', NULL, '$2y$10$sIae/dl.6LQpZoUIwK/R5OYtqEp.ub8SBLJhkMX4qRuBHs/WL8T7u', NULL, '2023-04-23 17:46:01', '2023-07-14 12:47:43', 'model', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 1, 1),
(209, 'Sexysarah', 'sexylonelysarah89@gmail.com', NULL, '$2y$10$g3sqQedr50bHgD.5dqdx1uOAtzlokvA0r6uzxIfKRsj.0Vw6BCuo2', NULL, '2023-04-23 17:57:31', '2023-07-14 12:48:13', 'model', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 1, 1),
(210, 'cherlyn', 'raelilblack05@gmail.com', NULL, '$2y$10$vrwSA/Zzk2H4rP5SBuz7XeP3Clc/rEwx5hr/uJXY1xPHbtbZVbFcu', NULL, '2023-04-23 18:36:32', '2023-07-14 12:47:09', 'model', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(229, 'wertyjohn', 'test101@yopmail.com', NULL, '$2y$10$x2iFDNNTjaOkOlpp1hmXf.DoLym/9XxIORS2M6ODkuVm6DtMq3TPq', 'plCfWLDJOlpFU8HspNPXePPsx8rNZTpjcK5ti3vfvhvclj3iYpN9CFm5KsyE', '2023-05-02 19:40:14', '2023-05-02 19:46:04', 'establishment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0),
(249, 'Catherine Lusso', 'celusso@mail.com', NULL, '$2y$10$9NEBaOyR80wjY9Q9PdnyVelp5KCOTW5TrwKmbcKJLm2MVqraS4uMi', NULL, '2023-05-26 12:28:59', '2023-07-13 02:02:48', 'model', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1),
(250, 'ElizabethLane', 'elizabeth_lane85@outlook.com', NULL, '$2y$10$RGILVd8Yfh50Ty1stRPb2unxTwv58fVWiEfym1ZD.h3RB8PIhMnQy', NULL, '2023-05-30 18:37:31', '2023-07-14 13:42:50', 'model', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(251, 'Kalea Tiare', 'kalea.tiare@outlook.com', NULL, '$2y$10$Z5a2p9LdgEuT29xGD2pXfuQRghrT1zujebDE5MN8ie3TaEL1qVYDe', NULL, '2023-06-08 14:34:30', '2023-07-14 12:33:51', 'model', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(252, 'Irina Slovak', 'irinaslovaknz@gmail.com', NULL, '$2y$10$.odcZQ.lXJFl6yTfFV93H.A.uSXNF7TK3P0q8xisnLGpOy4PQNOim', NULL, '2023-06-09 13:55:22', '2023-06-09 13:55:22', 'model', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(253, 'Jordan Reign', 'jowill85@outlook.com', NULL, '$2y$10$LUkZA/K6U/GeUbTBzljuguho9wF236b9a/F8QZjPCMEc/f8wrsFU6', NULL, '2023-06-21 23:36:44', '2023-06-21 23:38:10', 'model', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0),
(254, 'LustyLaura', 'laurababes2022@outlook.com', NULL, '$2y$10$2Fffl0aEQL.hJdJVZj.zQeAE4x6xKNAXdosuAjdkC16z2eTrDajl6', NULL, '2023-06-22 03:42:21', '2023-07-14 13:44:15', 'model', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(255, 'Amelia Jade', 'babygirl_lolita@icloud.com', NULL, '$2y$10$nM5R058Kw2GW.BGEWiSD.uOddEtREvlAQ8.h8eFuEN7Fa.QYtbxF6', NULL, '2023-06-22 12:15:16', '2023-07-19 18:59:06', 'model', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(257, 'Shay', 'taraababyyxx@gmail.com', NULL, '$2y$10$i.xdxtRBBdcR2BR1rXSiwOLM1/HwH7J6sYrusnlYbLsKygdt0lZi.', NULL, '2023-06-28 14:56:53', '2023-06-28 14:56:53', 'model', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(258, 'Biancasinclare', 'biancasinclare@gmail.com', NULL, '$2y$10$RvIErSA/y0Uf0zXLY2FQjuvh/3w59ko.WognHfvNdzG8o.pst6KIq', NULL, '2023-07-02 07:07:00', '2023-07-02 07:07:00', 'model', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(261, 'JamieLea', 'jamie_lee66@outlook.com', NULL, '$2y$10$xhqtp/PitTkvtQOKoVpsDuvpCONE8ih.XU0e3wzFs1RPZymMjdHam', NULL, '2023-07-13 13:19:28', '2023-07-13 13:20:46', 'model', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0),
(262, 'Lauren', 'julianacroll@gmail.com', NULL, '$2y$10$glgP4fRNAfel.d5F3D1Rt.JzIZr85nfIBM.0aIl0FgCYQGAUryjTm', NULL, '2023-07-28 03:51:45', '2023-07-28 03:51:45', 'model', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(263, 'Lauren', 'molleyjane569@gmail.com', NULL, '$2y$10$FSGsG2joekfr2oW9kI8Q6.77ZUNz/tZEtOU1UYTq0CO2KQ0ott8BC', NULL, '2023-07-28 04:10:21', '2023-07-28 04:10:21', 'model', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_metas`
--

CREATE TABLE `user_metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `street_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preferences` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interests` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `distance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lifestyle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advertising_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `country`, `state`, `account_type`, `advertising_category`, `phone`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'India', 'Uttar Pradesh', 'establishment', 'strip_dance', '2', 198, '2023-04-22 17:46:24', '2023-04-22 17:46:24'),
(12, 'Australia', 'Queensland', 'model', 'bdsm', '1234567890', 208, '2023-04-23 17:46:01', '2023-04-23 17:46:01'),
(13, 'Australia', 'Queensland', 'model', 'bdsm', '1234567890', 209, '2023-04-23 17:57:31', '2023-04-23 17:57:31'),
(14, 'Australia', 'New South Wales', 'model', 'escort', '445546476776', 210, '2023-04-23 18:36:32', '2023-04-23 18:36:32'),
(30, 'Australia', 'Australian Capital Territory', 'establishment', 'bdsm', '9', 229, '2023-05-02 19:40:14', '2023-05-02 19:40:14'),
(50, 'Australia', 'New South Wales', 'model', 'escort', '0474000607', 249, '2023-05-26 12:28:59', '2023-05-26 12:28:59'),
(51, 'Australia', 'Western Australia', 'model', 'escort', '0405172823', 250, '2023-05-30 18:37:31', '2023-05-30 18:37:31'),
(52, 'Australia', 'New South Wales', 'model', 'escort', '0455112908', 251, '2023-06-08 14:34:30', '2023-06-08 14:34:30'),
(53, 'New Zealand', 'Auckland', 'model', 'escort', '64272371560', 252, '2023-06-09 13:55:22', '2023-06-09 13:55:22'),
(54, 'Australia', 'Western Australia', 'model', 'escort', '0480299806', 253, '2023-06-21 23:36:44', '2023-06-21 23:36:44'),
(55, 'Australia', 'South Australia', 'model', 'escort', '0415381292', 254, '2023-06-22 03:42:21', '2023-06-22 03:42:21'),
(56, 'Australia', 'Australian Capital Territory', 'model', 'escort', '0411770496', 255, '2023-06-22 12:15:16', '2023-06-22 12:15:16'),
(58, 'Australia', 'Western Australia', 'model', 'escort', '0432776612', 257, '2023-06-28 14:56:53', '2023-06-28 14:56:53'),
(59, 'Australia', 'Queensland', 'model', 'escort', '0448332396', 258, '2023-07-02 07:07:00', '2023-07-02 07:07:00'),
(61, 'Australia', 'South Australia', 'model', 'escort', '0450875243', 261, '2023-07-13 13:19:28', '2023-07-13 13:19:28'),
(62, 'Australia', 'Queensland', 'model', 'escort', '08151884436', 262, '2023-07-28 03:51:45', '2023-07-28 03:51:45'),
(63, 'Australia', 'Queensland', 'model', 'escort', '08151884436', 263, '2023-07-28 04:10:21', '2023-07-28 04:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_verifies`
--

CREATE TABLE `user_verifies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_verifies`
--

INSERT INTO `user_verifies` (`id`, `user_id`, `token`, `created_at`, `updated_at`) VALUES
(1, 189, '3yX4oJ5NEXNwD6ETe2rgDAxLfuzcK1hn2wjyhc8F5f3eicyQacGhxcoaBW1m4vs8', '2023-04-21 20:57:54', '2023-04-21 20:57:54'),
(2, 196, 'SHMns4dS9AeTt6n6Fh4RMNGhTnf412vLjiIaiM3oXZKWrxdnZIc68Y0WM7Tldm76', '2023-04-22 15:13:45', '2023-04-22 15:13:45'),
(3, 197, 'sC7zY4QNd1PGsKny124y5G1pC8QAwB1n6AU2NW1AXhZTm89GE0molHlBZtBywD9o', '2023-04-22 17:23:23', '2023-04-22 17:23:23'),
(4, 198, 'otV74lELm4AxIS2snfDqKIdDFIcLQEOlQW4yVQRZJcUF1xx7YRtD4Sk4w6mdlOAJ', '2023-04-22 17:46:24', '2023-04-22 17:46:24'),
(5, 201, 'BxNnWANR9yrm6iGCzfEwlRFH6oG1HTxukznP9GUw7LC4mJ53ijwk6FSyZDkLiOm0', '2023-04-22 19:05:58', '2023-04-22 19:05:58'),
(6, 202, 'wWhqAbr3JwrSP7ZGudYEGGmm4yguyaSbNDTzZFjkkSpI5GUxU02JFl62QByOdzWa', '2023-04-22 19:12:31', '2023-04-22 19:12:31'),
(7, 203, 'XCtVgLQJiOfvIi6xE1ogeqKDJukkfKqAaJSCaya4zkz2rRBQACRRXcwBLBDt1oTK', '2023-04-22 20:01:29', '2023-04-22 20:01:29'),
(8, 204, 'FUt4hnGXVdhOLdLkbuAzbFw8PP0wV6YaOieLCEwvx3QwJpqCEo35FZyGmWglGW7H', '2023-04-23 17:23:51', '2023-04-23 17:23:51'),
(9, 205, 'Eb1qsThkoQ9kBvpPOzRPaWv6UiIvdvdD1vYZgzYV3qcmqE4rdAP1Nt4J8i9gyf0b', '2023-04-23 17:26:54', '2023-04-23 17:26:54'),
(10, 206, 'ZkTWiJSebHAm7XFBKkHluBd8kXkhV0fnSxLpP27i36of4j1CeJOiol4zquztVH3H', '2023-04-23 17:37:36', '2023-04-23 17:37:36'),
(11, 207, 'H1uItLTTVuDIy2WA9DsZtskReqvkjSIpa7Tks32hoFNuwfZ6c2QaXLbnZGBIIqvC', '2023-04-23 17:38:36', '2023-04-23 17:38:36'),
(12, 208, 'WOQBuJ0NRUbzVyoXmeYJrYCmIuuki1FkaQSiJfDSUH9h6I88Rdyz8nKENqbpjcyY', '2023-04-23 17:46:01', '2023-04-23 17:46:01'),
(13, 209, 'HLAWFUyeqXRK8sxp5CQJsPzZ2TvMQ4LqwFaGkrWcbxSUSp7MBuLnluUwOEsPoygQ', '2023-04-23 17:57:31', '2023-04-23 17:57:31'),
(14, 210, 'IfKDBiNBzhTlRDv8S2knjSh98VcOqJLPAZdQ20TGontbgISOTCzkdAu4gLIEtthk', '2023-04-23 18:36:32', '2023-04-23 18:36:32'),
(15, 212, 'CwVuKO2W3EG37AJDSA4CZ29sjt7cCGMEW8J7yRHJZOabEVCjYtCMlj6ZnUFHnH3t', '2023-04-24 09:46:31', '2023-04-24 09:46:31'),
(16, 212, 'ilGwUatXspoXiurn90h3j0NIF1R5cNhSRa6q6E97QZEmUOgvj0BIn3mrHCrrKGfk', '2023-04-27 11:17:18', '2023-04-27 11:17:18'),
(17, 215, 'oal4EXb0B84h7nRtQ1f1icTdIZ14l8c30zoUTc5iPhavUQuHAMCfpYvEpgxs3rkt', '2023-04-27 21:34:52', '2023-04-27 21:34:52'),
(18, 216, 'NFOYBcHlpwQuD8PmX4OlS8qPNTBsKzQB113dFLnp8uhmpBl94MZuQa9JKd23ud6e', '2023-04-27 21:44:40', '2023-04-27 21:44:40'),
(20, 218, 's1DvXCMwBc9J0ZEyznJtvrFt6M4qPCTspzxABVZtgPjYFbA3ayOZ2mBLAXJKwLIV', '2023-04-27 23:23:21', '2023-04-27 23:23:21'),
(21, 219, 'vF93eT0i0RK7D1nlNjKqRxvq45LrDY7viBvc7rkG45Fukm30hr6kpHXWYDCgStlS', '2023-04-27 23:36:27', '2023-04-27 23:36:27'),
(22, 220, 'esblomVRyD7ul5QR5ZtulkBkpKVHm8fO02Z52PArtJGmC6sjzXH5n8UiA4iVQ9Lh', '2023-05-01 17:29:43', '2023-05-01 17:29:43'),
(23, 221, 'qODiKPnnDcZLXs9IupvPgWPHgjR45WPOKiiFlCLsDEWcXIMEiSuV74BDOH7LyyNm', '2023-05-01 17:39:03', '2023-05-01 17:39:03'),
(24, 222, 'PBpi8WnosJ8sh15uGOICA6WwiUJpbpoOAqVmcH5GYbxApxrdnGE9zodFkmO2vusj', '2023-05-01 17:40:12', '2023-05-01 17:40:12'),
(25, 223, 'vefEM4MAASE3tYr4o91szTRClVXrDGpqlkFwnUXtwdixXIYYVp4Wa0cs76SIYfjK', '2023-05-01 18:16:46', '2023-05-01 18:16:46'),
(26, 224, 'kRzPWkRoSy3EFrlceN3KV4Im1GV7CAnIqdwGWrhrJyKsDuQsqoENVsMVkUxk48YL', '2023-05-01 19:01:56', '2023-05-01 19:01:56'),
(27, 225, 'kj6BVwqfcecBLG9LVfXJpYFdXakP4QfpXKxY5TkTKnRtVvGx6DzxUS3vTdlPXWHD', '2023-05-02 17:48:17', '2023-05-02 17:48:17'),
(28, 226, '6eyd1o4mV8FJ2aHBDRMVLgCZLffP2xMTFUm2onmPoCXYuXHUM2yI9lsk9RwWbVIY', '2023-05-02 19:14:40', '2023-05-02 19:14:40'),
(29, 227, 'RbhCa1PW7z81Qt1Vx1eR2QpQjvciAJ7YVq7fvTwolT61JCVyIWB7mGkQT4gmbW5Y', '2023-05-02 19:20:10', '2023-05-02 19:20:10'),
(30, 228, 'QLQxMUtov3FTLaEfnosqa7qxoCoNd30hKFrFf5evOrAyGHVkYOh7vlesjsbyENjB', '2023-05-02 19:31:51', '2023-05-02 19:31:51'),
(31, 229, 'duBNuwS0PwW2tlGMuQDnwLRrdZptkvvk5YIXgBxk3YQywXpQNZEuASYKsrb6nb9a', '2023-05-02 19:40:14', '2023-05-02 19:40:14'),
(32, 230, 'cw17SFwMMF3KNvx37B6VtccbX3EGs0MFBLYKdzTTLj3mNtCJx08ESs8BWWwPCRzm', '2023-05-02 19:47:44', '2023-05-02 19:47:44'),
(33, 231, 'nogbNiXTGEL2PdlwRQmkYoST9nrWmrg5pemRwCdh7tEp8f6UiBphDEC0uurFCYnY', '2023-05-02 21:57:59', '2023-05-02 21:57:59'),
(34, 232, 'tCIZI9IvoLX3ywouyRMwJN5koZrpviAehRFmrx2HC2aQsowZrAvPhptyw1EuwoMP', '2023-05-04 04:56:10', '2023-05-04 04:56:10'),
(35, 233, 'ZncCE5HqOyEMg0mMBOIFXUzer9AXV8XYUiXSuv4IcEbRb5ktuHvukoqhad8m1nCu', '2023-05-04 11:06:14', '2023-05-04 11:06:14'),
(36, 234, 'AtOONOJNznUZav2FPvlHaWhi74AL4jiE169tjkQtS6xZvHEzs76I4tOkJzMwt5qq', '2023-05-06 17:53:04', '2023-05-06 17:53:04'),
(37, 235, 'KUyt3yrv8QWm1PniIEzvqIXbDTN4zeGTEy4AITxjm2XZhdZKMKe8te8c6xxUdDLo', '2023-05-06 18:09:01', '2023-05-06 18:09:01'),
(38, 236, 'Zdj2gI76X9DmcLy20JTARtSpmgcmHUZzr7iiHAnXrll6V4u0X25g4F48X67rxyY1', '2023-05-06 18:15:26', '2023-05-06 18:15:26'),
(39, 237, 'HE7nYuEvNUO9zNRFrKWuOoDw6RCvnVW4h5C4k7nDtq3Y7iJeWsOZAUxLjoOBLD0A', '2023-05-06 18:35:18', '2023-05-06 18:35:18'),
(40, 238, 'YIqVVAlGlssqjcRBdOXDbQlrYCuCwbYEJ1dNmCF0ite6DFpX5UPkBsN2zKiDnp6g', '2023-05-06 18:52:50', '2023-05-06 18:52:50'),
(41, 239, 'Uq5sPIZWMMUplUVARsXOltJWfEXYMpcf7GukxEltOOMZMXxwfqCb6CcVJsmS1ZOm', '2023-05-06 18:57:20', '2023-05-06 18:57:20'),
(42, 240, 'fK6lKLBmcKzO9boGdYmT1zx1kHRpPU2zkoh7MZ4H3ELeyd4tIwNnz163VvBPaIij', '2023-05-06 19:03:02', '2023-05-06 19:03:02'),
(43, 241, 'XyIePLr4iAh1g8jWXZty5RmdmFPtGaK3SBxC2ECo35iuflFg1DgASds8NRci0L8b', '2023-05-06 19:04:10', '2023-05-06 19:04:10'),
(44, 242, 'jM5oijbF84y1TUcXKPPLQ4FKSM4hox8wrjRarKIc1xK8WbPXKateFPq69ARZlNEQ', '2023-05-06 19:12:47', '2023-05-06 19:12:47'),
(45, 243, '95kGUw4cJcbIjuCWAV8JHatWpNDqjcwonzhxbZ2iR9HPpEUuM2jk0I21tifiWFXf', '2023-05-08 13:34:02', '2023-05-08 13:34:02'),
(46, 244, 'MbOmOhch5yqnwGcuZVau7TGh7U7QFjFH401cdsuFOudJCm8d1Gj4gRYGwg6fLxS0', '2023-05-08 14:00:19', '2023-05-08 14:00:19'),
(47, 245, '4yAjJmxuafhhsiToKMLOrghMvMnhxvvMwSwTDsptSiNRSbJOcbIAt4LprlFmZEoS', '2023-05-08 14:06:17', '2023-05-08 14:06:17'),
(48, 246, 'KaoyUX93OnbB1NeDFB5naVRuHPBm3WAovZ9cDIsvsee9rQTyWfrMcfUnh8nYHH4f', '2023-05-08 14:35:27', '2023-05-08 14:35:27'),
(49, 247, 'sMX6cu6y76gGnAw1SsH77hknunvOruEcFhzOkkFbgISVfOvJ2oZBXCQk8jURkrEB', '2023-05-08 14:51:22', '2023-05-08 14:51:22'),
(50, 248, '6y3ssn1yNzpqeg45lcBBA40HCs7YSvC8DkBa0H6TtdzsFDxcq5GfYz4UctwCQZP9', '2023-05-08 14:55:24', '2023-05-08 14:55:24'),
(51, 249, 'JjsJ98NyalNm1MzQPewTzExcvWZUqJXXJZOL00kJdfy2cMNHoG3UH2aMPiBwifeq', '2023-05-26 12:28:59', '2023-05-26 12:28:59'),
(52, 250, 'c4XW1kiarnEKMcj9zaCE4oE8o7p75LQAixV9DAHN0oqfZd5z9iMwVyrLSQLP2GQO', '2023-05-30 18:37:31', '2023-05-30 18:37:31'),
(53, 251, 'vTEQd1qxsOR28c3ztz1v7W3sFrkTroAiJnJbkxC3bdvmGWfRNks8eA61rKsqxHSa', '2023-06-08 14:34:30', '2023-06-08 14:34:30'),
(54, 252, 'xj1Xbof4rFXWFjTmdkcNViG19NDB6Q2uNJaZ1zQZsL60xgY62RTWtUK5ORaIopO3', '2023-06-09 13:55:22', '2023-06-09 13:55:22'),
(55, 253, 'M6rojcUoUZVABTwhh9TtS4Bsn3aIyGtHKfQyJVlP1XJ2u0vVAgUBaQhxEaXRsuLl', '2023-06-21 23:36:44', '2023-06-21 23:36:44'),
(56, 254, 'h7uAUSYlfheN8roFmagPAEInlWcREGtQg2ipT8WqqOueXxReQtzsfHzQLQxLLE6X', '2023-06-22 03:42:21', '2023-06-22 03:42:21'),
(57, 255, '5x4psYRDiso3NewZcOsILN4LhTzJI9baOvnTcW8Vbz1JBHTmjZHIMa6fxmkh5p97', '2023-06-22 12:15:16', '2023-06-22 12:15:16'),
(58, 256, 'Rtq7uhIPuf9mUfK7RpUtWlJFvfXk1ReTQkJokZUb4x1JjiqHOPmvnep2vFX4MPkw', '2023-06-27 08:48:53', '2023-06-27 08:48:53'),
(59, 257, 'O0L8gjwuzcubKOGxqVotpRMDurAiQDYdDtLl2ZTBY3P6KGkgm92Niauts0cPNpZi', '2023-06-28 14:56:53', '2023-06-28 14:56:53'),
(60, 258, 'FE7TKNQ7cHPskfDztvPFczpCQfPRFTL79VFzECE82IBOUSnKxSPRCsflGYSLDloB', '2023-07-02 07:07:00', '2023-07-02 07:07:00'),
(61, 259, 'icO4CpzfKJ2ECDEjTOmE3Dy6pp6TMPrU7SQwo8eQ6I1aLFOI7IB3twOf595Loe57', '2023-07-12 14:27:36', '2023-07-12 14:27:36'),
(62, 261, 'WkJyNcJ1HjHQ5qj66hCMiYaXkG5PgGG7QUFitwGlPv89nSqNQnRSmO5vGAaVYpoU', '2023-07-13 13:19:28', '2023-07-13 13:19:28'),
(63, 262, 'M5THoHCooUDGnS2lsXj9XSkaAkRF9vNWmipLVoGCLC8MVXDYOOgVnU3y9wwbvJhh', '2023-07-28 03:51:45', '2023-07-28 03:51:45'),
(64, 263, 'tHkctkxcK3kSKAvAMXCbuE7VSpoinhCIdjN076hOTEZjhI68yH4vfANxlU8zJg8J', '2023-07-28 04:10:21', '2023-07-28 04:10:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_classes`
--
ALTER TABLE `account_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agencies_user_id_foreign` (`user_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_user_id_foreign` (`user_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `models_user_id_foreign` (`user_id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `private_things`
--
ALTER TABLE `private_things`
  ADD PRIMARY KEY (`id`),
  ADD KEY `private_things_user_id_foreign` (`user_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscriptions_stripe_id_unique` (`stripe_id`),
  ADD KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`);

--
-- Indexes for table `subscription_items`
--
ALTER TABLE `subscription_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscription_items_subscription_id_stripe_price_unique` (`subscription_id`,`stripe_price`),
  ADD UNIQUE KEY `subscription_items_stripe_id_unique` (`stripe_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_stripe_id_index` (`stripe_id`);

--
-- Indexes for table `user_metas`
--
ALTER TABLE `user_metas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_metas_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_verifies`
--
ALTER TABLE `user_verifies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_classes`
--
ALTER TABLE `account_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `private_things`
--
ALTER TABLE `private_things`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_items`
--
ALTER TABLE `subscription_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `user_metas`
--
ALTER TABLE `user_metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `user_verifies`
--
ALTER TABLE `user_verifies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agencies`
--
ALTER TABLE `agencies`
  ADD CONSTRAINT `agencies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `models`
--
ALTER TABLE `models`
  ADD CONSTRAINT `models_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `private_things`
--
ALTER TABLE `private_things`
  ADD CONSTRAINT `private_things_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `user_metas`
--
ALTER TABLE `user_metas`
  ADD CONSTRAINT `user_metas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `user_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
