-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 09:16 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enggjob`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name_id` int(11) NOT NULL,
  `student_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` date NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contuct_number` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`id`, `name`, `gender`, `class_name_id`, `student_group`, `date_time`, `nationality`, `father_name`, `mother_name`, `occupation`, `present_address`, `permanent_address`, `contuct_number`, `image`, `created_at`, `updated_at`) VALUES
(1, 'MohibUllah', 'male', 1, 'common', '2018-11-01', 'Bangladeshi', 'Zamal', 'namia', 'Farmer', 'Dhaka', 'Dhaka', 172543, '1543128626.png', '2018-11-25 00:50:26', '2018-11-25 00:50:26'),
(2, 'Mamun', 'male', 1, 'common', '2018-11-02', 'Bangladeshi', 'Zamal', 'namia', 'Farmer', 'dhaka', 'dhaka', 1728362318, '1543201620.jpg', '2018-11-25 21:07:00', '2018-11-25 21:07:00'),
(3, 'ff', 'male', 1, 'common', '2018-11-01', 'ff', 'ff', 'ff', 'ff', 'ff', 'ff', 1, '1543201768.jpg', '2018-11-25 21:09:28', '2018-11-25 21:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `class_names`
--

CREATE TABLE `class_names` (
  `id` int(10) UNSIGNED NOT NULL,
  `classNameEnglish` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classNameBangla` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_names`
--

INSERT INTO `class_names` (`id`, `classNameEnglish`, `classNameBangla`, `created_at`, `updated_at`) VALUES
(1, 'First', 'প্রথম', NULL, NULL),
(2, 'Second', 'দ্বিতীয়', NULL, NULL),
(3, 'Third', 'তৃতীয়', NULL, NULL),
(4, 'Fourth', 'চতুর্থ', NULL, NULL),
(5, 'Fifth', 'পঞ্চম', NULL, NULL),
(6, 'Six', 'Six', NULL, NULL),
(7, 'Seven', 'Seven', NULL, NULL),
(8, 'Eight', 'Eight', NULL, NULL),
(9, 'Nine', 'Nine', NULL, NULL),
(10, 'Ten', 'Ten', NULL, NULL),
(11, 'Eleven', 'Eleven', '2018-11-18 22:47:33', '2018-11-18 22:47:33'),
(12, 'Eleven', 'Eleven', '2018-11-18 22:47:55', '2018-11-18 22:47:55'),
(13, 'Eleven', 'Eleven', '2018-11-18 22:48:11', '2018-11-18 22:48:11'),
(14, 'Eleven', 'Eleven', '2018-11-18 22:48:49', '2018-11-18 22:48:49'),
(15, 'Twelve', 'Twelve', '2018-11-19 03:11:01', '2018-11-19 03:11:01'),
(16, 'Eleven', 'Eleven', '2018-11-28 21:48:37', '2018-11-28 21:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `examroutines`
--

CREATE TABLE `examroutines` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examroutines`
--

INSERT INTO `examroutines` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Exam Routines', '1543213406.pdf', '2018-11-26 00:23:26', '2018-11-26 00:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(10) UNSIGNED NOT NULL,
  `examName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `examName`, `created_at`, `updated_at`) VALUES
(1, '1st Term', '2018-11-13 04:58:50', '2018-11-13 04:58:50'),
(2, '2nd Term', '2018-11-13 04:59:02', '2018-11-13 04:59:02'),
(3, 'Final', '2018-11-13 05:43:08', '2018-11-13 05:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'gallery', '1543256343.jpg', '2018-11-26 12:19:03', '2018-11-26 12:19:03'),
(3, 'gallery', '1543256487.jpg', '2018-11-26 12:21:27', '2018-11-26 12:21:27'),
(4, 'gallery', '1543256666.jpg', '2018-11-26 12:24:26', '2018-11-26 12:24:26'),
(5, 'gallery', '1543256788.jpg', '2018-11-26 12:26:28', '2018-11-26 12:26:28'),
(6, 'gallery', '1543256846.jpg', '2018-11-26 12:27:26', '2018-11-26 12:27:26'),
(7, 'gallery', '1543256861.jpg', '2018-11-26 12:27:41', '2018-11-26 12:27:41'),
(8, 'gallery', '1543256873.jpg', '2018-11-26 12:27:53', '2018-11-26 12:27:53'),
(9, 'gallery', '1543256882.jpg', '2018-11-26 12:28:02', '2018-11-26 12:28:02');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `groupName` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `groupName`, `created_at`, `updated_at`) VALUES
(1, 'Common', '2018-11-17 00:47:55', '2018-11-17 00:47:55'),
(2, 'Science', '2018-11-17 00:48:06', '2018-11-17 00:48:06'),
(3, 'Humanities', '2018-11-17 00:48:17', '2018-11-17 00:48:17'),
(4, 'Commerce', '2018-11-17 00:48:37', '2018-11-17 00:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `g_p_a_ranges`
--

CREATE TABLE `g_p_a_ranges` (
  `id` int(10) UNSIGNED NOT NULL,
  `markRange` int(11) NOT NULL,
  `grade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gpa` float(8,2) NOT NULL,
  `setting_year` year(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `g_p_a_ranges`
--

INSERT INTO `g_p_a_ranges` (`id`, `markRange`, `grade`, `gpa`, `setting_year`, `created_at`, `updated_at`) VALUES
(9, 80, 'A+', 5.00, 2018, '2018-11-17 22:21:38', '2018-11-17 22:21:38'),
(10, 70, 'A', 4.00, 2018, '2018-11-17 22:22:14', '2018-11-17 22:22:14'),
(11, 60, 'A-', 3.50, 2018, '2018-11-17 22:22:31', '2018-11-17 22:22:31'),
(12, 50, 'B', 3.00, 2018, '2018-11-17 22:22:58', '2018-11-17 22:22:58'),
(13, 40, 'C', 2.00, 2018, '2018-11-17 22:23:11', '2018-11-17 22:23:11'),
(14, 33, 'D', 1.00, 2018, '2018-11-17 22:23:26', '2018-11-17 22:23:26'),
(15, 0, 'F', 0.00, 2018, '2018-11-17 22:23:56', '2018-11-17 22:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_08_063656_create_students_table', 2),
(4, '2018_11_08_064212_create_settings_table', 2),
(5, '2018_11_09_125552_create_teachers_table', 2),
(6, '2018_11_10_043254_create_class_names_table', 2),
(7, '2018_11_10_071949_create_pages_table', 2),
(8, '2018_11_10_072843_create_subjects_table', 2),
(9, '2018_11_10_093907_create_staff_table', 2),
(10, '2018_11_10_104418_create_posts_table', 2),
(11, '2018_11_11_042725_create_student_marks_table', 2),
(12, '2018_11_13_080900_create_subject_marks_table', 3),
(13, '2018_11_14_042934_create_g_p_a_ranges_table', 4),
(14, '2018_11_14_053013_create_subject_mark_totals_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateTime` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `summary`, `content`, `image`, `dateTime`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about-us', '<p>Education is a shining light that fills the life with which a person is regarded as a source of respect and honor in society.</p>', '<p>Coming Soon</p>', '', '2018-11-01', NULL, '2018-11-26 13:38:38'),
(4, 'Academic', 'academic', '<p>Education is the main tool for the development of the country and society. Teachers of the main drivers of educational institutions. Education promotes new ideas about the spread of human mind, life and the world. And so, education improves nation as the backbone of the nation.</p>', '<p>Coming Soon</p>', '', '2018-11-01', NULL, '2018-11-26 13:35:55'),
(5, 'Students', 'students', '<p>A student is primarily a person enrolled in a school or other educational institution who attends classes</p>', '<p>Coming Soon</p>', '', '2018-11-01', NULL, '2018-11-26 13:34:36'),
(7, 'News', 'news', '<p>News is information about current events. This may be provided through many different media: word of mouth, printing, postal systems, broadcasting, electronic communication, or through the testimony of observers and witnesses to events.</p>', '<p>Coming Soon</p>', '', '2018-11-01', NULL, '2018-11-26 13:33:13'),
(11, 'Contacts', 'contacts', '\r\nA pair of contact lenses, positioned with the concave side facing upward\r\nFile:Contact Lens Wiki 2 3.webm\r\nPutting contacts in and taking them out\r\n\r\nOne-day disposable contact lenses with blue handling tint in blister-pack packaging\r\nA contact lens, or simply contacts, is a thin lens placed directly on the surface of the eye', 'Coming Soon', '', '0000-00-00', NULL, NULL),
(13, 'Message from the Principal', 'message', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has .</p>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>It has survived not only five centuries, but also the leap type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>It has survived not only five centuries, but also the leap type and scrambled it to make a type specimen book.</p>', '1543383178.jpg', '2018-11-01', '2018-11-26 10:13:40', '2018-11-27 23:32:58'),
(14, 'Our History', 'our-history', '<p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '1543429960.jpg', '2018-11-01', NULL, '2018-11-28 12:32:40'),
(15, 'Mission & Vision', 'mission-vision', '<p>Coming Soon</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '', '2018-11-01', NULL, '2018-11-28 11:03:54'),
(16, 'Achievement & Success', 'achievement', '<p>Coming Soon</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '', '2018-11-01', NULL, '2018-11-28 11:19:40'),
(17, 'Infrastructure', 'infrastructure', '<p>Coming Soon</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '', '2018-11-02', NULL, '2018-11-28 11:21:26'),
(18, 'Virtual Campus', 'virtual-campus', '<p>Coming Soon</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '', '2018-11-01', NULL, '2018-11-28 11:21:50'),
(19, 'coming-soon', 'coming-soon', 'Coming Soon', 'Coming Soon', '', '0000-00-00', NULL, NULL),
(20, 'Lorem Ipsum is simply', 'Lorem-Ipsum-is-simply', NULL, '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1543382917.jpg', '2018-11-09', '2018-11-27 23:25:34', '2018-11-27 23:28:37'),
(21, 'Academic calendar', 'calendar', '<p>s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>', '<p>s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the&nbsp; I</p>', '1543633646.pdf', '2018-11-01', '2018-11-28 22:36:07', '2018-11-30 21:07:26'),
(22, 'Admission Information', 'admission-information', '<p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the in</p>', '<p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recent</p>', NULL, '2018-11-01', '2018-11-28 22:58:17', '2018-11-28 22:58:17'),
(23, 'Available Class', 'available-class', '<p>is simply dummy</p>', '<p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of</p>', NULL, '2018-11-01', '2018-11-28 23:11:41', '2018-11-28 23:11:41'),
(24, 'Text Book', 'text-book', '<p>s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when a</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', NULL, '2018-11-01', '2018-11-28 23:19:33', '2018-11-28 23:33:37'),
(25, 'Syllabus', 'syllabus', '<p>de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard</p>', '1543633860.pdf', '2018-11-01', '2018-11-28 23:21:34', '2018-11-30 21:11:00'),
(26, 'Scholarship', 'scholarship', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of th</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', NULL, '2018-11-01', '2018-11-28 23:28:52', '2018-11-28 23:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateTime` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `summary`, `content`, `image`, `type`, `dateTime`, `created_at`, `updated_at`) VALUES
(1, 'The website has been experimentally launched', 'news', '<p>The website has been experimentally launched. The website has been experimentally launched.</p>', '<p>The website has been experimentally launched. The website has been experimentally launched. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1543473501.jpg', 'news', '2018-11-14', NULL, '2018-11-29 00:38:21'),
(2, 'Where does it come from?', 'notice', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>The website has been experimentally launched. The website has been experimentally launched. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1543473516.jpg', 'notice', '2018-11-07', NULL, '2018-11-29 00:38:36'),
(3, 'Why do we use it?', 'event', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '<p>The website has been experimentally launched. The website has been experimentally launched. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1543473492.jpg', 'event', '2018-11-01', NULL, '2018-11-29 00:38:12'),
(4, 'Where can I get some?', 'publication', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '<p>The website has been experimentally launched. The website has been experimentally launched. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1543473534.jpg', 'publication', '2018-11-02', NULL, '2018-11-29 00:38:54'),
(5, 'The standard Lorem Ipsum passage, used since the 1500s', 'lorem-spam', '<p>The standard Lorem Ipsum passage, used since the 1500s &quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>', '<p>The standard Lorem Ipsum passage, used since the 1500s &quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>', '1543473584.jpg', 'news', '2018-11-01', NULL, '2018-11-29 01:16:27'),
(6, 'The website has been experimentally launched', 'The website has been experimentally launched', '<p>required</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '<p>required</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '1543473596.jpg', 'news', '2018-11-16', '2018-11-27 22:59:04', '2018-11-29 00:39:56'),
(7, '1914 translation by H. Rackham', 'Rackham', '<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how ?&quot;</p>', '<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>', NULL, 'news', '2018-11-01', '2018-11-29 03:38:45', '2018-11-29 03:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `routines`
--

CREATE TABLE `routines` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routines`
--

INSERT INTO `routines` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Class Routine', '1543213338.pdf', '2018-11-26 00:22:18', '2018-11-26 00:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `section` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section`, `created_at`, `updated_at`) VALUES
(9, 'A', '2018-11-17 00:35:30', '2018-11-17 00:35:30'),
(10, 'B', '2018-11-17 00:35:36', '2018-11-17 00:35:36'),
(11, 'C', '2018-11-17 00:35:42', '2018-11-17 00:35:42'),
(13, 'D', '2018-11-19 03:11:22', '2018-11-19 03:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eiin` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone_number` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eastablished` year(4) DEFAULT NULL,
  `class_name_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `widgetone` text COLLATE utf8mb4_unicode_ci,
  `widgettwo` text COLLATE utf8mb4_unicode_ci,
  `metakeyword` text COLLATE utf8mb4_unicode_ci,
  `metadescription` text COLLATE utf8mb4_unicode_ci,
  `authorurl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `slogan`, `logo`, `eiin`, `email`, `phone_number`, `telephone_number`, `school_time`, `eastablished`, `class_name_id`, `address`, `description`, `widgetone`, `widgettwo`, `metakeyword`, `metadescription`, `authorurl`, `created_at`, `updated_at`) VALUES
(1, 'শহীদ আকবর আলী বিজ্ঞান ও প্রযুক্তি কলেজ', 'Education is the backbon of a Nation', '1542882803.png', 12345, 'email@example.com', '01500000004', '12341423', 'Saturday-Thursday 9:0-4:30', 1950, '6,7,8,9', '<p>40 Baria Street 133/2, Dhaka</p>', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>', 'www.example.com', '2018-11-15 04:02:02', '2018-11-27 04:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `slider` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `content`, `slider`, `created_at`, `updated_at`) VALUES
(9, 'Award Winning College', 'education is the backbone of a nation', 'Education means a form of learning in which knowledge, skills and habits are transferred from', '1543247687.jpg', '2018-11-26 09:54:47', '2018-11-26 09:54:47'),
(10, 'Award Winning School', 'education is the backbone of a nation', 'Education means a form of learning in which knowledge, skills and habits are transferred from', '1543247718.jpg', '2018-11-26 09:55:18', '2018-11-26 09:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fatherName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motherName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `villageName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanaName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `districtName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `studentName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classNameId` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentGroup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compulsory_subjects` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fourth_subject` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fatherName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motherName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `villageName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanaName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `districtName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupationName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardianName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardianVillageName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardianPostName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardianThanaName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardianDistrictName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateTime` date NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religionName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion_subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `studentName`, `classNameId`, `roll`, `studentId`, `section`, `studentGroup`, `compulsory_subjects`, `fourth_subject`, `fatherName`, `motherName`, `villageName`, `postName`, `thanaName`, `districtName`, `phone_number`, `email`, `occupationName`, `image`, `guardianName`, `guardianVillageName`, `guardianPostName`, `guardianThanaName`, `guardianDistrictName`, `dateTime`, `nationality`, `religionName`, `religion_subject`, `created_at`, `updated_at`) VALUES
(1, 'Mehadi Hasan', 1, 1, 1001, 'A', 'Common', NULL, NULL, 'Abdul Jalil', 'Mst. Korimunnesa', 'dhaka', 'dhaka', 'Dhanmondi', 'Dhaka', '01500000004', 'M@gmail.com', 'Teacher', '1542095795.jpg', 'Karim Hasan', 'dhaka', 'dhaka', 'dhaka', 'dhaka', '1978-11-14', 'Bangladesh', 'Islam', NULL, '2018-11-13 01:56:35', '2018-11-28 22:48:37'),
(2, 'shomon Hasan', 1, 2, 1002, 'A', 'Common', '', '0', 'Rahim Ali', 'Ismat Ara', 'dhaka', 'dhaka', 'Dhanmondi', 'Dhaka', '', 'M1@gmail.com', 'Teacher', '1542095795.jpg', 'Karim Hasan', 'dhaka', 'dhaka', 'dhaka', 'dhaka', '1978-11-14', 'Bangladesh', 'Islam', NULL, '2018-11-13 01:56:35', '2018-11-13 01:56:35'),
(3, 'Mamun Hasan', 6, 3, 1003, 'A', 'Common', '', '0', 'Mr. Karim', 'Joly Begum', 'dhaka', 'dhaka', 'Dhanmondi', 'Dhaka', '', 'M2@gmail.com', 'Teacher', '1542095795.jpg', 'Karim Hasan', 'dhaka', 'dhaka', 'dhaka', 'dhaka', '1978-11-14', 'Bangladesh', 'Islam', NULL, '2018-11-13 01:56:35', '2018-11-13 01:56:35'),
(4, 'Sifat Hasan', 6, 4, 1004, 'A', 'Common', '', '0', 'Md. Bashed Ali', 'Renu Begum', 'dhaka', 'dhaka', 'Dhanmondi', 'Dhaka', '', 'M3@gmail.com', 'Teacher', '1542095795.jpg', 'Karim Hasan', 'dhaka', 'dhaka', 'dhaka', 'dhaka', '1978-11-14', 'Bangladesh', 'Islam', NULL, '2018-11-13 01:56:35', '2018-11-13 01:56:35'),
(5, 'Amirul Hasan', 6, 5, 1005, 'A', 'Common', '', '0', 'Rahmat Ullah', 'Mst. Kakoli', 'dhaka', 'dhaka', 'Mohammadpur', 'Dhaka', '', 'M4@gmail.com', 'Teacher', '1542095795.jpg', 'Karim Hasan', 'dhaka', 'dhaka', 'dhaka', 'dhaka', '1978-11-14', 'Bangladesh', 'Islam', NULL, '2018-11-13 01:56:35', '2018-11-13 01:56:35'),
(6, 'Nisan Ali', 6, 6, 1006, 'B', 'Common', '', '0', 'Nuru Mia', 'Sisir Buhayan', 'dhaka', 'dhaka', 'Mohammadpur', 'Dhaka', '', 'M5@gmail.com', 'Teacher', '1542095795.jpg', 'Karim Hasan', 'dhaka', 'dhaka', 'dhaka', 'dhaka', '1978-11-14', 'Bangladesh', 'Islam', NULL, '2018-11-13 01:56:35', '2018-11-13 01:56:35'),
(7, 'Hasan Ali', 6, 7, 1007, 'B', 'Common', '', '0', 'Abdul Jabbar', 'Bilkis Banu', 'dhaka', 'dhaka', 'Mohammadpur', 'Dhaka', '', 'M6@gmail.com', 'Teacher', '1542095795.jpg', 'Karim Hasan', 'dhaka', 'dhaka', 'dhaka', 'dhaka', '1978-11-14', 'Bangladesh', 'Islam', NULL, '2018-11-13 01:56:35', '2018-11-13 01:56:35'),
(8, 'Robin ', 6, 8, 1008, 'B', 'Common', '', '0', 'Abdul Alim', 'Shejuty Khanom', 'dhaka', 'dhaka', 'Mohammadpur', 'Dhaka', '', 'M7@gmail.com', 'Teacher', '1542095795.jpg', 'Karim Hasan', 'dhaka', 'dhaka', 'dhaka', 'dhaka', '1978-11-14', 'Bangladesh', 'Islam', NULL, '2018-11-13 01:56:35', '2018-11-13 01:56:35'),
(9, 'Rifat', 6, 9, 1009, 'B', 'Common', '', '0', 'Jahurul Islam', 'Nazmin Nessa', 'dhaka', 'dhaka', 'Jatrabari', 'Dhaka', '', 'M8@gmail.com', 'Teacher', '1542095795.jpg', 'Karim Hasan', 'dhaka', 'dhaka', 'dhaka', 'dhaka', '1978-11-14', 'Bangladesh', 'Islam', NULL, '2018-11-13 01:56:35', '2018-11-13 01:56:35'),
(10, 'Rakib', 6, 10, 1010, 'B', 'Common', '', '0', 'Abdur Rouf', 'Taraman Bibi', 'dhaka', 'dhaka', 'Gulistan', 'Dhaka', '', 'M9@gmail.com', 'Teacher', '1542095795.jpg', 'Karim Hasan', 'dhaka', 'dhaka', 'dhaka', 'dhaka', '1978-11-14', 'Bangladesh', 'Islam', NULL, '2018-11-13 01:56:35', '2018-11-13 01:56:35'),
(20, 'Rahim', 9, 11, 1021, 'A', 'Science', '12,14', '13', 'Noman', 'rajia', 'Mohammadpur', 'Mohammadpur', 'Mohammadpur', 'dhaka', '', 'M10@gmail.com', 'teacher', '20553.jpg', 'Noman', 'Mohammadpur', 'Mohammadpur', 'Mohammadpur', 'Dhaka', '2000-02-16', 'Bangladesh', 'Islam', NULL, '2018-11-20 01:36:56', '2018-11-20 01:36:56'),
(22, 'Resel', 1, 21, 1025, 'B', 'Science', '12,14,16', '13', 'Noman', 'rajia', 'Mohammadpur', 'Mohammadpur', 'Mohammadpur', 'Dhaka', '01500000004', 'resel@gmail.com', 'teacher', '45087.jpg', 'Noman', 'Mohammadpur', 'Mohammadpur', 'Mohammadpur', 'Dhaka', '2018-11-06', 'Bangladesh', 'Islam', NULL, '2018-11-27 22:11:50', '2018-11-27 22:11:50');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `id` int(11) NOT NULL,
  `studentRoll` int(11) NOT NULL,
  `classNameId` int(11) DEFAULT NULL,
  `subjectCode` int(11) NOT NULL,
  `semisterId` int(11) NOT NULL,
  `examYear` year(4) NOT NULL,
  `fullMark` int(11) DEFAULT NULL,
  `heightMark` int(11) DEFAULT NULL,
  `ca` float(10,2) DEFAULT NULL,
  `cr` float(10,2) DEFAULT NULL,
  `mcq` float(10,2) DEFAULT NULL,
  `pr` float(10,2) DEFAULT NULL,
  `ap` tinyint(3) NOT NULL DEFAULT '0',
  `subjectTotal` float(10,2) DEFAULT NULL,
  `letterGrade` varchar(255) DEFAULT NULL,
  `gpa` float(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`id`, `studentRoll`, `classNameId`, `subjectCode`, `semisterId`, `examYear`, `fullMark`, `heightMark`, `ca`, `cr`, `mcq`, `pr`, `ap`, `subjectTotal`, `letterGrade`, `gpa`, `created_at`, `updated_at`) VALUES
(1, 1001, 1, 1, 1, 2018, 100, NULL, 20.00, 56.00, 9.00, 0.00, 0, 85.00, 'A+', 5.00, '2018-11-14 07:19:20', '2018-11-29 02:52:23'),
(2, 1001, 1, 2, 1, 2018, NULL, NULL, 8.00, 32.00, 0.00, 0.00, 0, 40.00, 'A+', 5.00, '2018-11-14 07:19:20', '2018-11-14 07:19:20'),
(3, 1001, 1, 3, 1, 2018, NULL, NULL, 18.00, 55.00, 11.00, 0.00, 0, 40.00, 'A+', 5.00, '2018-11-14 07:19:20', '2018-11-14 07:19:20'),
(4, 1001, 1, 5, 1, 2018, NULL, NULL, 18.00, 55.00, 12.00, 0.00, 0, 85.00, 'A+', 5.00, '2018-11-14 07:19:20', '2018-11-14 07:19:20'),
(5, 1001, 1, 4, 1, 2018, NULL, NULL, 8.00, 33.00, 0.00, 0.00, 0, 41.00, 'A+', 5.00, '2018-11-14 07:19:20', '2018-11-14 07:19:20'),
(6, 1001, 1, 6, 1, 2018, NULL, NULL, 20.00, 55.00, 9.00, 0.00, 0, 84.00, 'A+', 5.00, '2018-11-14 07:19:20', '2018-11-14 07:19:20'),
(7, 1001, 1, 7, 1, 2018, NULL, NULL, 18.00, 55.00, 11.00, 0.00, 0, 40.00, 'A+', 5.00, '2018-11-14 07:19:20', '2018-11-14 07:19:20'),
(8, 1001, 1, 8, 1, 2018, NULL, NULL, 18.00, 55.00, 12.00, 0.00, 0, 85.00, 'A+', 5.00, '2018-11-14 07:19:20', '2018-11-14 07:19:20'),
(9, 1001, 1, 9, 1, 2018, NULL, NULL, 8.00, 33.00, 0.00, 0.00, 0, 41.00, 'A+', 5.00, '2018-11-14 07:19:20', '2018-11-14 07:19:20'),
(10, 1001, 1, 10, 1, 2018, NULL, NULL, 18.00, 55.00, 12.00, 0.00, 0, 85.00, 'A+', 5.00, '2018-11-14 07:19:20', '2018-11-14 07:19:20'),
(11, 1002, 1, 1, 1, 2018, 100, NULL, 15.00, 55.00, 9.00, 0.00, 0, 79.00, 'A', 4.00, '2018-11-14 07:19:20', '2018-11-29 02:52:23'),
(12, 1002, 1, 2, 1, 2018, NULL, NULL, 8.00, 32.00, 0.00, 0.00, 0, 40.00, 'A+', 5.00, '2018-11-14 07:19:20', '2018-11-14 07:19:20'),
(13, 1002, 1, 3, 1, 2018, NULL, NULL, 18.00, 55.00, 11.00, 0.00, 0, 40.00, 'A+', 5.00, '2018-11-14 07:19:20', '2018-11-14 07:19:20'),
(14, 1002, 1, 5, 1, 2018, NULL, NULL, 18.00, 55.00, 12.00, 0.00, 0, 85.00, 'A+', 5.00, '2018-11-14 07:19:20', '2018-11-14 07:19:20'),
(15, 1002, 1, 4, 1, 2018, NULL, NULL, 8.00, 33.00, 0.00, 0.00, 0, 41.00, 'A+', 5.00, '2018-11-14 07:19:20', '0000-00-00 00:00:00'),
(16, 1002, 1, 6, 1, 2018, NULL, NULL, 20.00, 55.00, 9.00, 0.00, 0, 84.00, 'A+', 5.00, '2018-11-14 07:19:20', '2018-11-14 07:19:20'),
(17, 1002, 1, 7, 1, 2018, NULL, NULL, 18.00, 55.00, 11.00, 0.00, 0, 40.00, 'A+', 5.00, '2018-11-14 07:19:20', '2018-11-14 07:19:20'),
(18, 1002, 1, 8, 1, 2018, NULL, NULL, 18.00, 55.00, 12.00, 0.00, 0, 85.00, 'A+', 5.00, '2018-11-14 07:19:20', '2018-11-14 07:19:20'),
(19, 1002, 1, 9, 1, 2018, NULL, NULL, 8.00, 33.00, 0.00, 0.00, 0, 41.00, 'A+', 5.00, '2018-11-14 07:19:20', '2018-11-14 07:19:20'),
(20, 1002, 1, 10, 1, 2018, NULL, NULL, 18.00, 55.00, 12.00, 0.00, 0, 85.00, 'A+', 5.00, '2018-11-14 07:19:20', '2018-11-14 07:19:20'),
(37, 1021, 9, 12, 3, 2018, 100, NULL, 22.00, 10.00, 10.00, 10.00, 0, 52.00, 'B', 3.00, '2018-11-20 01:49:12', '2018-11-20 01:49:12'),
(38, 1021, 9, 1, 3, 2018, 100, NULL, 33.00, 20.00, NULL, NULL, 0, 53.00, 'B', 3.00, '2018-11-20 03:11:13', '2018-11-20 03:11:13'),
(39, 1021, 9, 2, 3, 2018, 50, NULL, 22.00, 15.00, NULL, NULL, 0, 37.00, 'A', 4.00, '2018-11-20 03:11:35', '2018-11-20 03:11:35'),
(40, 1021, 9, 3, 3, 2018, 100, NULL, 55.00, 20.00, NULL, NULL, 0, 75.00, 'A', 4.00, '2018-11-20 03:12:12', '2018-11-20 03:12:12'),
(41, 1021, 9, 4, 3, 2018, 50, NULL, 26.00, 12.00, NULL, NULL, 0, 38.00, 'A', 4.00, '2018-11-20 03:12:35', '2018-11-20 03:12:35'),
(42, 1021, 9, 16, 3, 2018, 100, NULL, 30.00, 15.00, 10.00, 10.00, 0, 65.00, 'A-', 3.50, '2018-11-20 03:22:45', '2018-11-20 03:22:45'),
(43, 1021, 9, 14, 3, 2018, 100, NULL, 33.00, 14.00, 10.00, 8.00, 0, 65.00, 'A-', 3.50, '2018-11-20 03:24:50', '2018-11-20 03:24:50'),
(44, 1021, 9, 13, 3, 2018, 100, NULL, 30.00, 10.00, 10.00, 10.00, 0, 60.00, 'A-', 3.50, '2018-11-20 03:27:26', '2018-11-20 03:27:26'),
(45, 1021, 9, 5, 3, 2018, 100, NULL, 10.00, 50.00, NULL, NULL, 0, 60.00, 'A-', 3.50, '2018-11-20 03:30:38', '2018-11-20 03:30:38'),
(46, 1021, 9, 7, 3, 2018, 100, NULL, 15.00, 50.00, NULL, NULL, 0, 65.00, 'A-', 3.50, '2018-11-20 03:31:36', '2018-11-20 03:31:36'),
(48, 1021, 9, 7, 1, 2018, 100, NULL, 10.00, 3.00, NULL, NULL, 0, 13.00, 'F', 0.00, '2018-11-20 05:38:34', '2018-11-20 05:38:34');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `subjectNameEnglish` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjectNameBangla` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjectCode` int(11) NOT NULL,
  `group_name` int(11) NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_common` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subjectNameEnglish`, `subjectNameBangla`, `subjectCode`, `group_name`, `short_description`, `description`, `subject_common`, `created_at`, `updated_at`) VALUES
(1, 'Bangla 1st', 'বাংলা ১ম পত্র', 201, 0, '', '', NULL, '2018-11-12 18:00:00', '2018-11-12 18:00:00'),
(2, 'Bangla 2nd', 'বাংলা ২য় পত্র ', 202, 0, '', '', NULL, '2018-11-12 18:00:00', '2018-11-12 18:00:00'),
(3, 'English 1st', 'ইংরেজি ১ম পত্র', 203, 0, '', '', NULL, '2018-11-12 18:00:00', '2018-11-12 18:00:00'),
(4, 'English 2nd', 'ইংরেজি ২য় পত্র', 204, 0, '', '', NULL, '2018-11-12 18:00:00', '2018-11-12 18:00:00'),
(5, 'Mathematics', '', 205, 0, '', '', NULL, '2018-11-12 18:00:00', '2018-11-12 18:00:00'),
(6, 'BD & Glob.Studies', '', 206, 0, '', '', NULL, '2018-11-12 18:00:00', '2018-11-12 18:00:00'),
(7, 'Islam & Moral Edication', '', 207, 0, '', '', NULL, '2018-11-12 18:00:00', '2018-11-12 18:00:00'),
(8, 'Science', '', 208, 0, '', '', NULL, '2018-11-12 18:00:00', '2018-11-12 18:00:00'),
(9, 'ICT', '', 209, 0, '', '', NULL, '2018-11-12 18:00:00', '2018-11-12 18:00:00'),
(10, 'Agriculture Studies', '', 210, 0, '', '', NULL, '2018-11-12 18:00:00', '2018-11-12 18:00:00'),
(12, 'Physics', 'Physics', 211, 2, 'Science', 'Sciencs', NULL, '2018-11-19 03:13:50', '2018-11-19 03:13:50'),
(13, 'Biology', 'Biology', 213, 2, 'Biology', 'Biology', NULL, '2018-11-19 22:23:23', '2018-11-19 22:23:23'),
(14, 'Chemistry', 'Chemistry', 212, 2, 'Chemistry', 'Chemistry', NULL, '2018-11-19 23:17:19', '2018-11-19 23:17:19'),
(15, 'agricultural science', 'agricultural science', 214, 2, 'agricultural science', 'agricultural science', NULL, '2018-11-19 23:17:19', '2018-11-19 23:17:19'),
(16, 'higher math', 'higher math', 215, 2, 'higher math', 'higher math', NULL, '2018-11-19 23:17:19', '2018-11-19 23:17:19'),
(17, 'Accounting', 'Accounting', 216, 3, 'Accounting', 'Accounting', NULL, '2018-11-19 23:17:19', '2018-11-19 23:17:19'),
(18, 'Business Studies', 'Business Studies', 217, 3, 'Business Studies', 'Business Studies', NULL, '2018-11-19 23:17:19', '2018-11-19 23:17:19'),
(19, 'finance and banking', 'finance and banking', 218, 3, 'finance and banking', 'finance and banking', NULL, '2018-11-19 23:17:19', '2018-11-19 23:17:19'),
(20, 'History', 'History', 220, 4, 'History', 'History', NULL, '2018-11-19 23:17:19', '2018-11-19 23:17:19'),
(21, 'Psychology', 'Psychology', 221, 4, 'Psychology', 'Psychology', NULL, '2018-11-19 23:17:19', '2018-11-19 23:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `subject_marks`
--

CREATE TABLE `subject_marks` (
  `id` int(10) UNSIGNED NOT NULL,
  `subjectId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjectCode` int(11) NOT NULL,
  `full_mark` int(11) NOT NULL,
  `ca` int(11) DEFAULT NULL,
  `cr` int(11) DEFAULT NULL,
  `mcq` int(11) DEFAULT NULL,
  `pr` int(11) DEFAULT NULL,
  `setting_year` year(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject_marks`
--

INSERT INTO `subject_marks` (`id`, `subjectId`, `subjectCode`, `full_mark`, `ca`, `cr`, `mcq`, `pr`, `setting_year`, `created_at`, `updated_at`) VALUES
(51, '1', 201, 100, 20, 60, 20, NULL, 2018, '2018-11-13 22:15:10', '2018-11-13 22:15:10'),
(52, '2', 202, 50, 10, 20, 20, NULL, 2018, '2018-11-13 22:15:10', '2018-11-13 22:15:10'),
(53, '3', 203, 100, 20, 80, NULL, NULL, 2018, '2018-11-13 22:15:10', '2018-11-13 22:15:10'),
(54, '4', 204, 50, 10, 40, NULL, NULL, 2018, '2018-11-13 22:15:10', '2018-11-13 22:15:10'),
(55, '5', 205, 100, 20, 60, 20, NULL, 2018, '2018-11-13 22:15:10', '2018-11-13 22:15:10'),
(56, '6', 206, 100, 20, 55, 25, NULL, 2018, '2018-11-13 22:15:10', '2018-11-13 22:15:10'),
(57, '7', 207, 100, 20, 55, 25, NULL, 2018, '2018-11-13 22:15:10', '2018-11-13 22:15:10'),
(58, '8', 208, 100, 20, 60, 20, NULL, 2018, '2018-11-13 22:15:10', '2018-11-13 22:15:10'),
(59, '9', 209, 50, 10, 20, NULL, 20, 2018, '2018-11-13 22:15:10', '2018-11-13 22:15:10'),
(60, '10', 210, 100, 20, 50, 30, NULL, 2018, '2018-11-13 22:15:11', '2018-11-13 22:15:11'),
(61, '12', 211, 100, 20, 40, 15, 25, 2018, '2018-11-13 22:15:11', '2018-11-13 22:15:11'),
(62, '14', 212, 100, 20, 40, 15, 25, 2018, '2018-11-13 22:15:11', '2018-11-13 22:15:11'),
(63, '15', 214, 100, 20, 40, 15, 25, 2018, '2018-11-13 22:15:11', '2018-11-13 22:15:11'),
(64, '13', 213, 100, 20, 40, 15, 25, 2018, '2018-11-13 22:15:11', '2018-11-13 22:15:11'),
(65, '16', 215, 100, 20, 40, 15, 25, 2018, '2018-11-13 22:15:11', '2018-11-13 22:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contuctNumber` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailAddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nidNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indexNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateTime` date NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `address`, `contuctNumber`, `emailAddress`, `level1`, `level2`, `level3`, `level4`, `nidNumber`, `indexNumber`, `dateTime`, `image`, `training`, `created_at`, `updated_at`) VALUES
(1, 'Md Mamun', 'Dhaka', '25430381121', 'as@gmail.com', 'SSc', 'HSC', 'BBA', NULL, '44511845', '1000000', '2018-11-09', '1543464904.jpg', NULL, '2018-11-26 11:16:20', '2018-11-28 22:15:04'),
(2, 'sures', 'Dhaka', '01900000000', 'teacher@email.com', 'ssc', 'hsc', 'BBA', 'Masters', '3213213312321', '001', '2018-11-17', '1543465583.jpg', 'one year', '2018-11-27 22:36:55', '2018-11-28 22:26:23'),
(3, 'sures', 'Dhaka', '01900000000', 'teacher1@email.com', 'ssc', 'hsc', 'BBA', 'Masters', '3213213312321', '001', '2018-11-08', '1543464885.jpg', 'one year', '2018-11-27 22:37:15', '2018-11-28 22:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$Eb8sC1qJADbO864ywEYyouBEWnmnl0YyAduqg2epF.5/G0YgzycOC', 'fz4fG45JNTAJPWd7mHyn7JGKZcpBgVp7gU0EVb2jyKsk6lDfBOgejWBCRBcp', '2018-11-12 03:36:33', '2018-11-12 03:36:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_names`
--
ALTER TABLE `class_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examroutines`
--
ALTER TABLE `examroutines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g_p_a_ranges`
--
ALTER TABLE `g_p_a_ranges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routines`
--
ALTER TABLE `routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD UNIQUE KEY `studentId` (`studentId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_marks`
--
ALTER TABLE `subject_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `class_names`
--
ALTER TABLE `class_names`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `examroutines`
--
ALTER TABLE `examroutines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `g_p_a_ranges`
--
ALTER TABLE `g_p_a_ranges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `routines`
--
ALTER TABLE `routines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `student_marks`
--
ALTER TABLE `student_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `subject_marks`
--
ALTER TABLE `subject_marks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
