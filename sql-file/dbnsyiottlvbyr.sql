-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 26, 2022 at 02:32 AM
-- Server version: 5.7.38-41-log
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnsyiottlvbyr`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Elaine', 'Kirkland', 'wutuxoqala@mailinator.com', '+1 (102) 172-8964', 'Voluptas hic vel dis', '2021-09-23 04:59:20', '2021-09-23 04:59:20'),
(2, 'Cathleen', 'Reeves', 'zyqysih@mailinator.com', '+1 (124) 639-9799', 'Est natus dolorem p', '2021-09-23 05:00:01', '2021-09-23 05:00:01'),
(3, 'Angela', 'Donaldson', 'jegecy@mailinator.com', '+1 (562) 429-8288', 'Similique occaecat v', '2021-09-23 03:45:13', '2021-09-23 03:45:13'),
(4, 'asd', 'asd', 'asd@mail.com', 'asd', 'asd', '2022-05-14 01:04:25', '2022-05-14 01:04:25');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `countryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `countryName`, `created_at`, `updated_at`) VALUES
(1, 'USA', '2021-09-22 22:18:30', '2021-09-22 22:18:30'),
(3, 'Canada', '2021-09-22 22:19:48', '2021-09-22 22:19:48'),
(6, 'UK', '2021-09-22 22:20:43', '2021-09-22 22:20:43'),
(7, 'New Zealand', '2021-09-22 22:21:14', '2021-09-22 22:21:14'),
(9, 'Denmark', '2021-09-22 22:21:34', '2021-09-22 22:21:34'),
(10, 'Malaysia', '2021-09-22 22:21:46', '2021-09-22 22:21:46'),
(11, 'Australia', '2021-09-22 22:22:11', '2021-09-22 22:22:11'),
(12, 'Germany', '2021-09-22 22:23:36', '2021-09-22 22:23:36'),
(13, 'China', '2021-09-22 22:23:47', '2021-09-22 22:23:47'),
(14, 'Sweden', '2021-09-23 04:41:38', '2021-09-23 04:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `extra_miles`
--

CREATE TABLE `extra_miles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extra_miles`
--

INSERT INTO `extra_miles` (`id`, `title`, `logo`, `short_description`, `created_at`, `updated_at`) VALUES
(1, 'Authorized agent of British Council', '<i class=\"icofont-badge\"></i>', 'As authorized agent of British Council we help students for IELTS registration', '2021-09-22 05:34:25', '2021-09-22 22:44:55'),
(3, 'Higher Education Institute (HEI)', '<i class=\"icofont-institution\"></i>', 'We ensure all students get admission to the Higher Education Institute (HEI)', '2021-09-22 05:35:17', '2021-09-22 22:37:56'),
(4, 'Admission interview', '<i class=\"icofont-flame-torch\"></i>', 'We ensure the student is trained well for their admission interview', '2021-09-22 05:36:06', '2021-09-22 22:37:01'),
(5, 'Study permit renewal', '<i class=\"icofont-license\"></i>', 'We help our clients to renew their student’s study permit renewal if needed.', '2021-09-22 22:38:29', '2021-09-22 22:38:29'),
(6, 'Parents visitors’ visa', '<i class=\"icofont-papers\"></i>', 'If any of student’s parents want to accompany them, we help to attain the parent’s\r\nvisitor visa.', '2021-09-22 22:39:58', '2021-09-22 22:39:58'),
(7, 'Arrange accommodation', '<i class=\"icofont-ui-home\"></i>', 'We help students to book their accommodation if requested.', '2021-09-22 22:40:30', '2021-09-22 22:40:30'),
(8, 'Study to settlement', '<i class=\"icofont-slidshare\"></i>', 'If any student is interested to settle down in that particular country, we guide them on\r\nthis matter too.', '2021-09-22 22:42:29', '2021-09-22 22:42:29');

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
-- Table structure for table `front_page_heroes`
--

CREATE TABLE `front_page_heroes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkwriteup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_page_heroes`
--

INSERT INTO `front_page_heroes` (`id`, `heading`, `subheading`, `linkwriteup`, `link`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Explore - GIC Education', 'We help you to create better future', 'How do we make a difference', 'https://www.youtube.com/embed/vjmX16iPdc8', '1632311528medium-shot-graduate-student 2.png', '2021-09-22 05:01:52', '2021-09-25 00:12:38');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_09_22_094736_create_front_page_heroes_table', 2),
(7, '2021_09_22_111910_create_extra_miles_table', 3),
(8, '2021_09_22_115048_create_countries_table', 4),
(9, '2021_09_22_131801_create_partners_table', 4),
(10, '2021_09_22_150102_create_testimonials_table', 4),
(11, '2021_09_23_043532_create_success_stories_table', 5),
(12, '2021_09_23_104923_create_contacts_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `link`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Canterbury Christ Church University', '1632376043canterbury christ church university.png', 'https://www.canterbury.ac.uk/', 6, '2021-09-22 23:45:17', '2021-09-22 23:52:39'),
(2, 'University of Portsmouth', '1632375999university of portsmouth.jpg', 'https://www.port.ac.uk/', 6, '2021-09-22 23:46:39', '2021-09-22 23:46:39'),
(3, 'Coventry University', '1632376549conventry university.png', 'https://www.coventry.ac.uk/', 6, '2021-09-22 23:55:49', '2021-09-22 23:55:49'),
(4, 'University of Hertfordshire', '1632376599university of hertfordshire.png', 'https://www.herts.ac.uk/', 6, '2021-09-22 23:56:39', '2021-09-22 23:56:39'),
(5, 'Cardiff Metropolitan University', '1632376691cardiff metropolitan university.png', 'https://www.cardiffmet.ac.uk/', 6, '2021-09-22 23:58:11', '2021-09-22 23:58:11'),
(6, 'University of Plymouth', '1632376731university of plymouth.jpg', 'https://www.plymouth.ac.uk/', 6, '2021-09-22 23:58:51', '2021-09-22 23:58:51'),
(7, 'Birmingham City University', '1632376777birmingham city university.png', 'https://www.bcu.ac.uk/', 6, '2021-09-22 23:59:37', '2021-09-22 23:59:37'),
(8, 'Swansea University', '1632376806swansea university.jpg', 'https://www.swansea.ac.uk/', 6, '2021-09-23 00:00:06', '2021-09-23 00:00:06'),
(10, 'Brunel University London', '1632376856brunel university london.jpg', 'https://www.brunel.ac.uk/', 6, '2021-09-23 00:00:56', '2021-09-23 00:00:56'),
(11, 'Robert Gordon University', '1632376894robert gordon university.jpg', 'https://www.rgu.ac.uk/', 6, '2021-09-23 00:01:34', '2021-09-23 00:01:34'),
(12, 'University of Leicester', '1632376943university of leicester.jpg', 'https://le.ac.uk/', 6, '2021-09-23 00:02:23', '2021-09-23 00:02:23'),
(13, 'University of Northampton', '1632376981university of northampton.jpg', 'https://www.northampton.ac.uk/', 6, '2021-09-23 00:03:01', '2021-09-23 00:03:01'),
(14, 'Royal Holloway, University of London', '1632377170royal holloway university of london.png', 'https://www.royalholloway.ac.uk/', 6, '2021-09-23 00:06:10', '2021-09-23 00:06:10'),
(15, 'Kingston University London', '1632377200kingston university london.png', 'https://www.kingston.ac.uk/', 6, '2021-09-23 00:06:40', '2021-09-23 00:06:40'),
(16, 'University of Aberdeen', '1632377241university of aberdeen.jpg', 'https://www.abdn.ac.uk/', 6, '2021-09-23 00:07:21', '2021-09-23 00:07:21'),
(17, 'University of Huddersfield', '1632377290university of huddersfield.png', 'https://www.hud.ac.uk/', 6, '2021-09-23 00:08:10', '2021-09-23 00:08:10'),
(18, 'Liverpool John Moores University', '1632377326liverpool john moores university.jpg', 'https://www.ljmu.ac.uk/', 6, '2021-09-23 00:08:46', '2021-09-23 00:08:46'),
(19, 'Teesside University', '1632377349teesside university.png', 'https://www.tees.ac.uk/', 6, '2021-09-23 00:09:09', '2021-09-23 00:09:09'),
(20, 'Durham University', '1632377377durham university.png', 'https://www.durham.ac.uk/', 6, '2021-09-23 00:09:37', '2021-09-23 00:09:37'),
(21, 'University of Surrey', '1632377405university of surrey.png', 'https://www.surrey.ac.uk/', 6, '2021-09-23 00:10:05', '2021-09-23 00:10:05'),
(22, 'Cardiff University', '1632377429cardiff university.png', 'https://www.cardiff.ac.uk/', 6, '2021-09-23 00:10:29', '2021-09-23 00:10:29'),
(23, 'The University of Sheffield', '1632377460the university of sheffield.jpg', 'https://www.sheffield.ac.uk/', 6, '2021-09-23 00:11:00', '2021-09-23 00:11:00'),
(24, 'University of Sussex', '1632377490university of sussex.png', 'https://www.sussex.ac.uk/', 6, '2021-09-23 00:11:30', '2021-09-23 00:11:30'),
(25, 'Lancaster University', '1632377515lancaster university.png', 'https://www.lancaster.ac.uk/', 6, '2021-09-23 00:11:55', '2021-09-23 00:11:55'),
(26, 'University of Massachusetts Boston', '1632377565UMASS boston.png', 'https://www.umb.edu/', 1, '2021-09-23 00:12:45', '2021-09-23 00:12:45'),
(27, 'Western Washington University', '1632377633western.jpg', 'https://www.wwu.edu/', 1, '2021-09-23 00:13:53', '2021-09-23 00:13:53'),
(28, 'DePaul University', '1632377689depaul university.png', 'https://www.depaul.edu/', 1, '2021-09-23 00:14:49', '2021-09-23 00:14:49'),
(29, 'Queens College', '1632377729queens college.png', 'https://www.qc.cuny.edu/', 1, '2021-09-23 00:15:29', '2021-09-23 00:15:29'),
(30, 'Vaughn College', '1632377771vaughn college.jpg', 'https://www.vaughn.edu/', 1, '2021-09-23 00:16:11', '2021-09-23 00:16:11'),
(31, 'University of Hartford', '1632377801university of hartford.jpg', 'https://www.hartford.edu/', 1, '2021-09-23 00:16:41', '2021-09-23 00:16:41'),
(32, 'Lipscomb University', '1632377822lipscomb university.png', 'https://www.lipscomb.edu/', 1, '2021-09-23 00:17:02', '2021-09-23 00:17:02'),
(33, 'Long Island University', '1632377850long island university.png', 'https://www.liu.edu/', 1, '2021-09-23 00:17:30', '2021-09-23 00:17:30'),
(34, 'Baylor University', '1632377907baylor university.png', 'https://www.baylor.edu/', 1, '2021-09-23 00:18:27', '2021-09-23 00:18:27'),
(35, 'James Madison University', '1632377930james madison university.png', 'https://www.jmu.edu/', 1, '2021-09-23 00:18:50', '2021-09-23 00:18:50'),
(36, 'University Canada West', '1632377978university canada west.png', 'https://www.ucanwest.ca/', 3, '2021-09-23 00:19:38', '2021-09-23 00:19:38'),
(37, 'University of Manitoba', '1632378003university of manitoba.png', 'https://umanitoba.ca/', 3, '2021-09-23 00:20:03', '2021-09-23 00:20:03'),
(38, 'Lambton College', '1632378105lambton college.jpg', 'https://www.lambtoncollege.ca/', 3, '2021-09-23 00:21:45', '2021-09-23 00:21:45'),
(39, 'University of Regina', '1632378135university of regina.jpg', 'https://www.uregina.ca/', 3, '2021-09-23 00:22:15', '2021-09-23 00:22:15'),
(40, 'Simon Fraser University', '1632378160simon fraser university.jpg', 'https://www.sfu.ca/', 3, '2021-09-23 00:22:40', '2021-09-23 00:22:40'),
(41, 'Toronto School of Management', '1632378294toronto school of management.png', 'https://www.torontosom.ca/', 3, '2021-09-23 00:24:54', '2021-09-23 00:24:54'),
(42, 'Ryerson University', '1632378329ryerson university.png', 'https://www.ryerson.ca/', 3, '2021-09-23 00:25:29', '2021-09-23 00:25:29'),
(43, 'Acsenda School of Management', '1632378357acsenda school of management vancouver.png', 'https://acsenda.com/', 3, '2021-09-23 00:25:57', '2021-09-23 00:25:57'),
(44, 'Niagara College Canada', '1632378398niagara college canada.png', 'https://www.niagaracollege.ca/', 3, '2021-09-23 00:26:38', '2021-09-23 00:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `success_stories`
--

CREATE TABLE `success_stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `universityName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `success_stories`
--

INSERT INTO `success_stories` (`id`, `image`, `studentName`, `universityName`, `country_id`, `semester`, `created_at`, `updated_at`) VALUES
(1, '1632392880crop.png', 'A M Asif Faisal', 'University of Windsor', 3, 'Intake May 2021', '2021-09-23 04:28:00', '2021-09-23 04:28:00'),
(2, '1632398719crop.png', 'Md Ratan Bhuiyan', 'China Three Gorges University', 13, 'Intake September 2019', '2021-09-23 04:05:19', '2021-09-23 04:05:19'),
(3, '1632398753crop.png', 'Abdur Rahman Faisal', 'Brock University', 3, 'Intake September 2019', '2021-09-23 04:05:53', '2021-09-23 04:05:53'),
(4, '1632398822crop.png', 'Abu Hasan', 'Algoma University', 3, 'Intake November 2019', '2021-09-23 04:07:02', '2021-09-23 04:07:02'),
(5, '1632398828crop.png', 'Fairuz Nawar Raka', 'GISMA Business School', 12, 'Intake November 2019', '2021-09-23 04:07:08', '2021-09-23 04:07:08'),
(6, '1632398942crop.png', 'Afaque Jamal', 'University of Windsor', 3, 'Intake January 2021', '2021-09-23 04:09:02', '2021-09-23 04:09:02'),
(7, '1632398971crop.png', 'Md. Harunar Rashid', 'GISMA Business School', 12, 'Intake February 2020', '2021-09-23 04:09:31', '2021-09-23 04:09:31'),
(8, '1632399035crop.png', 'Mohammad Fayzul Islam Foysal', 'GISMA Business School', 12, 'Intake September 2020', '2021-09-23 04:10:35', '2021-09-23 04:10:35'),
(9, '1632399064crop.png', 'Amir Imtiaz Ahmed', 'Brock University', 3, 'Intake January 2021', '2021-09-23 04:11:04', '2021-09-23 04:11:04'),
(10, '1632399080crop.png', 'S M Mahir Faisal', 'GISMA Business School', 12, 'Intake February 2020', '2021-09-23 04:11:20', '2021-09-23 04:11:20'),
(11, '1632399125crop.png', 'Arefin Rashid', 'University Canada West', 3, 'Intake April 2019', '2021-09-23 04:12:05', '2021-09-23 04:12:05'),
(12, '1632399129crop.png', 'Shahzada Syed Mujtaba Mainuddin Ahmed', 'Arden University,Germany', 12, 'Intake February 2020', '2021-09-23 04:12:09', '2021-09-23 04:12:09'),
(13, '1632399196crop.png', 'Ayesha Hoque', 'Segi University', 10, 'Intake August 2019', '2021-09-23 04:13:16', '2021-09-23 04:13:16'),
(14, '1632399199crop.png', 'Dipta Roy', 'University of Windsor', 3, 'Intake January 2021', '2021-09-23 04:13:19', '2021-09-23 04:13:19'),
(15, '1632399280Crop.png', 'Fahina Chowdhury', 'Lakehead University', 3, 'Intake September 2020', '2021-09-23 04:14:40', '2021-09-23 04:14:40'),
(16, '1632399526Crop.png', 'Faiaz Mustakim', 'Seneca College', 3, 'Intake May 2020', '2021-09-23 04:18:46', '2021-09-23 04:18:46'),
(17, '1632400105crop.png', 'Faisal Ahmed Gazi', 'University of Windsor', 3, 'Intake January 2020', '2021-09-23 04:28:25', '2021-09-23 04:28:25'),
(18, '1632400160crop.png', 'Najmul Islam', 'Segi University', 10, 'Intake August 2019', '2021-09-23 04:29:20', '2021-09-23 04:29:20'),
(19, '1632400222crop.png', 'Iffath Mahjabeen Iqbal', 'Thompson Rivers University', 3, 'Intake September 2019', '2021-09-23 04:30:22', '2021-09-23 04:30:22'),
(20, '1632400286crop.png', 'Jenifer Costa', 'Crandall University', 3, 'Intake September 2021', '2021-09-23 04:31:26', '2021-09-23 04:31:26'),
(21, '1632400360crop.png', 'Khan Adib Al Ashik', 'Seneca College', 3, 'Intake January 2020', '2021-09-23 04:32:40', '2021-09-23 04:32:40'),
(22, '1632400467crop.png', 'Kowshik Ahmed', 'Concordia University', 3, 'Intake March 2019', '2021-09-23 04:34:27', '2021-09-23 04:34:27'),
(23, '1632400527crop.png', 'Nusrat Azad', 'Limkokwing University', 10, 'Intake March 2020', '2021-09-23 04:35:27', '2021-09-23 04:35:27'),
(24, '1632400535crop.png', 'Lawrence Akash Gomes', 'University of Canada West', 3, 'Intake January 2021', '2021-09-23 04:35:35', '2021-09-23 04:35:35'),
(25, '1632400619crop.png', 'Mahfuzur Rahman Khan', 'University of Windsor', 3, 'Intake January 2021', '2021-09-23 04:36:59', '2021-09-23 04:36:59'),
(26, '1632400633crop.png', 'Sanjida Akhter', 'Segi University', 10, 'Intake September 2019', '2021-09-23 04:37:13', '2021-09-23 04:37:13'),
(27, '1632400661crop.png', 'Mahodin Al Khurram', 'University of Windsor', 3, 'Intake January 2021', '2021-09-23 04:37:41', '2021-09-23 04:37:41'),
(28, '1632400679crop.png', 'Tahrin Tamin Akbor', 'Segi University', 10, 'Intake January 2021', '2021-09-23 04:37:59', '2021-09-23 04:37:59'),
(29, '1632400706crop.png', 'Md Abid Hossain', 'University of Windsor', 3, 'Intake January 2021', '2021-09-23 04:38:26', '2021-09-23 04:38:26'),
(30, '1632400789crop.png', 'Tanvir Ahmed', 'Limkokwing University', 10, 'Intake September 2019', '2021-09-23 04:39:49', '2021-09-23 04:39:49'),
(31, '1632400850crop.png', 'Md Rizwanul Haque Sameer', 'Navitas (ICM)', 3, 'Intake September 2021', '2021-09-23 04:40:50', '2021-09-23 04:40:50'),
(32, '1632400921crop.png', 'Md. Abidur Rahman Emran', 'University of Windsor', 3, 'Intake January 2020', '2021-09-23 04:42:01', '2021-09-23 04:42:01'),
(33, '1632400980crop.png', 'Ashadul Alam Molla', 'Umea University', 14, 'Intake September 2021', '2021-09-23 04:43:00', '2021-09-23 04:43:00'),
(34, '1632400993crop.png', 'Md. Mehedi Hasan', 'York Ville University', 3, 'Intake January 2021', '2021-09-23 04:43:13', '2021-09-23 04:43:13'),
(35, '1632401042crop.png', 'Fatema Akter Prity', 'Umea University', 14, 'Intake September 2019', '2021-09-23 04:44:02', '2021-09-23 04:44:02'),
(36, '1632401064crop.png', 'Md. Nazrul Islam', 'Lakehead University', 3, 'Intake September 2019', '2021-09-23 04:44:24', '2021-09-23 04:44:24'),
(37, '1632401097crop.png', 'Fhamida Akhter', 'Stockholm University', 14, 'Intake September 2020', '2021-09-23 04:44:57', '2021-09-23 04:44:57'),
(38, '1632401140crop.png', 'Md. Tousif Hossain', 'Concordia University', 3, 'Intake January 2020', '2021-09-23 04:45:40', '2021-09-23 04:45:40'),
(39, '1632401143crop.png', 'Hritwik Kishore Dhar', 'Linnaeus University', 14, 'Intake September 2019', '2021-09-23 04:45:43', '2021-09-23 04:45:43'),
(40, '1632401184crop.png', 'Lucky Gonsalves', 'Stockholm University', 14, 'Intake September 2020', '2021-09-23 04:46:24', '2021-09-23 04:46:24'),
(41, '1632401209crop.png', 'Milinda Chakma', 'Thompson Rivers University', 3, 'Intake September 2019', '2021-09-23 04:46:49', '2021-09-23 04:46:49'),
(42, '1632401246crop.png', 'Md. Fayshal Alam', 'Uppsala University', 14, 'Intake September 2021', '2021-09-23 04:47:26', '2021-09-23 04:47:26'),
(43, '1632401255crop.png', 'Minhazul Islam', 'Brock University', 3, 'Intake January 2019', '2021-09-23 04:47:35', '2021-09-23 04:47:35'),
(44, '1632401298crop.png', 'Mobina Islam Aishi', 'Stockholm University', 14, 'Intake September 2021', '2021-09-23 04:48:18', '2021-09-23 04:48:18'),
(45, '1632401310crop.png', 'Mithun Chandra Roy', 'Seneca College', 3, 'Intake September 2020', '2021-09-23 04:48:30', '2021-09-23 04:48:30'),
(46, '1632401356crop.png', 'Mohammad Kaiser Azad', 'Stockholm University', 14, 'Intake September 2020', '2021-09-23 04:49:16', '2021-09-23 04:49:16'),
(47, '1632401387crop.png', 'Mohammed Sadique Murshid', 'University Canada West', 3, 'Intake October 2021', '2021-09-23 04:49:47', '2021-09-23 04:49:47'),
(48, '1632401409crop.png', 'Naimul Houqe Abir', 'Lulea University', 14, 'Intake September 2020', '2021-09-23 04:50:09', '2021-09-23 04:50:09'),
(49, '1632401464crop.png', 'Montaz Bin Sharif', 'High School', 3, 'Intake February 2019', '2021-09-23 04:51:04', '2021-09-23 04:51:04'),
(50, '1632401469crop.png', 'Oishe Purnata', 'Lund University', 14, 'Intake September 2020', '2021-09-23 04:51:09', '2021-09-23 04:51:09'),
(51, '1632401500crop.png', 'Nasif Al Rafat Khan', 'University of Windsor', 3, 'Intake January 2020', '2021-09-23 04:51:40', '2021-09-23 04:51:40'),
(52, '1632401513crop.png', 'Prianka Das', 'Lund University', 14, 'Intake September 2020', '2021-09-23 04:51:53', '2021-09-23 04:51:53'),
(53, '1632401555crop.png', 'Provat Shourav', 'University of Gothenburg', 14, 'Intake September 2020', '2021-09-23 04:52:35', '2021-09-23 04:52:35'),
(54, '1632401562crop.png', 'Ninia Akter Papia', 'University of Windsor', 3, 'Intake September 2021', '2021-09-23 04:52:42', '2021-09-23 04:52:42'),
(55, '1632401602crop.png', 'Sabbir Ahmed', 'University of Gothenburg', 14, 'Intake September 2021', '2021-09-23 04:53:22', '2021-09-23 04:53:22'),
(56, '1632401657crop.png', 'Nur A Safa', 'University of Manitoba', 3, 'Intake January 2020', '2021-09-23 04:54:17', '2021-09-23 04:54:17'),
(57, '1632401665crop.png', 'Sanzida Rahman', 'Uppsala University', 14, 'Intake September 2020', '2021-09-23 04:54:25', '2021-09-23 04:54:25'),
(58, '1632401737crop.png', 'Nurul Afsar Chowdhury', 'University Of Toronto School', 3, 'Intake September 2019', '2021-09-23 04:55:37', '2021-09-23 04:55:37'),
(59, '1632401738crop.png', 'Sarafat Hossain', 'Umea University', 14, 'Intake September 2020', '2021-09-23 04:55:38', '2021-09-23 04:55:38'),
(60, '1632401774crop.png', 'Omar Nafis', 'Seneca College', 3, 'Intake January 2020', '2021-09-23 04:56:14', '2021-09-23 04:56:14'),
(61, '1632401787crop.png', 'Sultanul Muktasid Chowdhury', 'University of Gotherburg', 14, 'Intake September 2019', '2021-09-23 04:56:27', '2021-09-23 04:56:27'),
(62, '1632401837crop.png', 'Placid Pronoy Gomes', 'Placid Pronoy Gomes', 3, 'Intake September 2019', '2021-09-23 04:57:17', '2021-09-23 04:57:17'),
(63, '1632401878crop 2.png', 'Tasrima Trisha Ratna', 'Malardalen University', 14, 'Intake September 2021', '2021-09-23 04:57:58', '2021-09-23 04:57:58'),
(64, '1632401906crop.png', 'Reeti Eugenia Rozario', 'Seneca College', 3, 'Intake May 2019', '2021-09-23 04:58:26', '2021-09-23 04:58:26'),
(65, '1632401913crop.png', 'Zarin Ahmed', 'Linnaeus University', 14, 'Intake September 2020', '2021-09-23 04:58:33', '2021-09-23 04:58:33'),
(66, '1632401952crop.png', 'Romana Afroz Ankhi', 'Lakehead University', 3, 'Intake September 2020', '2021-09-23 04:59:12', '2021-09-23 04:59:12'),
(67, '1632401966crop.png', 'Abu Ashab', 'Cardiff Metropolitan University', 6, 'Intake January 2021', '2021-09-23 04:59:26', '2021-09-23 04:59:26'),
(68, '1632401997crop.png', 'S M Jubair Hossain', 'Navitas (ICM)', 3, 'Intake May 2021', '2021-09-23 04:59:57', '2021-09-23 04:59:57'),
(69, '1632402010crop.png', 'Al Fahad Tonmoy', 'Brunel University (Navitas)', 6, 'Intake January 2021', '2021-09-23 05:00:10', '2021-09-23 05:00:10'),
(70, '1632402043crop.png', 'Sabiha Hossain', 'Brock University', 3, 'Intake September 2018', '2021-09-23 05:00:43', '2021-09-23 05:00:43'),
(71, '1632402061crop.png', 'Md Khalilur Rahman Akhond', 'Heartfordshire (Navitas)', 6, 'Intake January 2021', '2021-09-23 05:01:01', '2021-09-23 05:01:01'),
(72, '1632402156crop.png', 'Md. Jamil Toufique', 'Cardiff Metropolitan University', 6, 'Intake September 2019', '2021-09-23 05:02:36', '2021-09-23 05:02:36'),
(73, '1632402268crop.png', 'Sadia Islam', 'University Canada West', 3, 'Intake January 2020', '2021-09-23 05:04:28', '2021-09-23 05:04:28'),
(74, '1632402311crop.png', 'Md. Ohidur Rahman', 'Coventry University', 6, 'Intake January 2020', '2021-09-23 05:05:11', '2021-09-23 05:05:11'),
(75, '1632402322crop.png', 'Salman Farsi', 'Thompson Rivers University', 3, 'Intake September 2019', '2021-09-23 05:05:22', '2021-09-23 05:05:22'),
(76, '1632402361crop.png', 'Md. Tasnimul Hasan Khan Tuhin', 'Cardiff Metropolitan University', 6, 'Intake January 2021', '2021-09-23 05:06:01', '2021-09-23 05:06:01'),
(77, '1632402374crop.png', 'Shadman Rabbi', 'University Canada West', 3, 'Intake January 2020', '2021-09-23 05:06:14', '2021-09-23 05:06:14'),
(78, '1632402425crop.png', 'Shah Abdullah Mahmud', 'Yorkville University', 3, 'Intake July 2020', '2021-09-23 05:07:05', '2021-09-23 05:07:05'),
(79, '1632402428crop.png', 'Mrinmoy Sarkar', 'University of Law', 6, 'Intake September 2019', '2021-09-23 05:07:08', '2021-09-23 05:07:08'),
(80, '1632402469crop.png', 'Shaon Barua', 'University of Windsor', 3, 'Intake January 2021', '2021-09-23 05:07:49', '2021-09-23 05:07:49'),
(81, '1632402503crop.png', 'Nahidur Rahman Labib', 'LBIC', 6, 'Intake September 2021', '2021-09-23 05:08:23', '2021-09-23 05:08:23'),
(82, '1632402540crop.png', 'Rifat Hassan', 'Coventry University', 6, 'Intake September 2020', '2021-09-23 05:09:00', '2021-09-23 05:09:00'),
(83, '1632402542crop.png', 'Sheikh Sadaf Tasin', 'University of Windsor', 3, 'Intake January 2020', '2021-09-23 05:09:02', '2021-09-23 05:09:02'),
(84, '1632402589crop.png', 'Syed Muhammad Tarequzzaman', 'Cardiff Metropolitan University', 6, 'Intake January 2020', '2021-09-23 05:09:49', '2021-09-23 05:09:49'),
(85, '1632402601crop.png', 'Shifat Kazi', 'Seneca College', 3, 'Intake January 2021', '2021-09-23 05:10:01', '2021-09-23 05:10:01'),
(86, '1632402660crop.png', 'Shimi Aznar', 'Brock University', 3, 'Intake August 2019', '2021-09-23 05:11:00', '2021-09-23 05:11:00'),
(87, '1632402697crop.png', 'Sukanya Dewan', 'Confedaration College', 3, 'Intake September 2021', '2021-09-23 05:11:37', '2021-09-23 05:11:37'),
(88, '1632402852Crop.png', 'Syed Amit Hossain', 'University Canada West', 3, 'Intake January 2021', '2021-09-23 05:14:12', '2021-09-23 05:14:12'),
(89, '1632402921crop.png', 'Syeda Mehbooba Sultana', 'University Canada West', 3, 'Intake January 2021', '2021-09-23 05:15:21', '2021-09-23 05:15:21'),
(90, '1632402932crop.png', 'Trocy Valentina Purification', 'York Ville University', 3, 'Intake January 2021', '2021-09-23 05:15:32', '2021-09-23 05:15:32'),
(91, '1632402975crop.png', 'Tahmidul Islam', 'Lakehead University', 3, 'Intake January 2019', '2021-09-23 05:16:15', '2021-09-23 05:16:15'),
(92, '1632402982crop.png', 'Zannat Mahal', 'Lakehead University', 3, 'Intake September 2019', '2021-09-23 05:16:22', '2021-09-23 05:16:22'),
(93, '1632403033crop.png', 'Tahziba Tabassum', 'Concordia University of Edmonton', 3, 'Intake September 2021', '2021-09-23 05:17:13', '2021-09-23 05:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `studentName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `studentName`, `testimonial`, `created_at`, `updated_at`) VALUES
(1, 'Amit Hasan', 'Highly recommendend agency for going abroad. With their help I finished my processing for studying UK without any problems. The most useful part is that they take their payment after getting visa. All of their Counselors are friendly and helpful', '2021-09-23 02:35:24', '2021-09-23 02:35:24'),
(2, 'Proyash Basu', 'Great institution. Would recommend to give it a try as I got my visa approved via working with GIC Education as well .', '2021-09-23 02:37:06', '2021-09-23 02:37:06'),
(4, 'Lawrence Gomes', 'Excellent consultant and well professionalism in their work. Totaly satisfied with their feedbacks and services. Trustworthy.', '2021-09-23 02:38:00', '2021-09-23 02:38:00'),
(5, 'Sabbir Raihan', 'So glad I found them! When I made a decision to study in Canada, I started looking for professional help and found GIC Education among others. After talking to all of them, I can happily say that GIC Education is the best I have ever found in terms of consultation and guidance. They provided all the information in detail and explained every single step to me with full disclosure about my preferred place to study, my educational background, etc. Later on, they suggested some really great options and scholarship opportunities! I am very pleased with the services they have provided till now.', '2021-09-23 02:38:32', '2021-09-23 02:38:32'),
(6, 'Tanvir Zakaria', 'Very cooperative people. Had great success working with GIC. They were always a phone call away to all of my problems/questions to getting my visa the right way.', '2021-09-23 02:38:44', '2021-09-23 02:38:44'),
(7, 'Razib Khan', 'I am really happy with the service offered by GIC Education. They made sure I had all the information needed. They guided me properly throughout the entire process for getting my Canadian study permit. My counsellor with her professional behavior & years of experience helped me extensively in every stage. With her help I got into my preferred university & the entire process went smoothly. Thank you so much for your support.', '2021-09-23 02:39:07', '2021-09-23 02:39:07'),
(8, 'Shahriar Kibria', 'I went to GIC education at Gulshan for my younger brother. I researched a lot about immigration agencies and found out that GIC have most high success rate than every other.\r\nTheir professionalism is outstanding.\r\nMy brother got admission in Cardiff Metropolitan University, UK. It was a happy moment for our family. I wish them good luck.', '2021-09-23 02:39:23', '2021-09-23 02:39:23'),
(9, 'Mustafizur Rahman', 'GIC Education is one of the most helpful educational consultants. The staff is very cooperative and ready to help the students who are looking for educational visas for various countries. GIC team possesses great knowledge of the process which helped me get my visa in a short span of time. Even my counsellor was very efficient and concentrated on each and every aspect with great precision. I highly recommend their services. They are definitely best in town.', '2021-09-23 02:39:41', '2021-09-23 02:39:41'),
(10, 'Iftekat Hossain', 'I was at GIC Education Ltd. for some information regarding how I can go abroad after finishing my graduation. The way they treated me and explained the whole process & cleared all my doughs was really amazing. They gave me all the information needed to know starting from finding the perfect university to helping me fill-up my application and submitting it as well as helping me with visa processing. Overall, everything was smooth and I would highly recommend you to take GIC Education as your consultancy for studying abroad.', '2021-09-23 02:39:57', '2021-09-23 02:39:57'),
(11, 'Priom Bhowmick', 'GIC Education Ltd. has really made my journey towards foreign study quite easy and tension free. There was no worry or any kind of miscommunication. My counsellor was very well spoken and well aware about the different courses and colleges in Canada. She advised me some good colleges and courses based on my interests and specialization. She made the whole process much easier for me. Everything was carried out well and on time. Really appreciate the efforts from for solving all my doubts. Thanks a ton! I totally recommend GIC to others for study abroad plans', '2021-09-23 02:40:10', '2021-09-23 02:40:10'),
(12, 'Priom Bhowmick', 'GIC Education Ltd. has really made my journey towards foreign study quite easy and tension free. There was no worry or any kind of miscommunication. My counsellor was very well spoken and well aware about the different courses and colleges in Canada. She advised me some good colleges and courses based on my interests and specialization. She made the whole process much easier for me. Everything was carried out well and on time. Really appreciate the efforts from for solving all my doubts. Thanks a ton! I totally recommend GIC to others for study abroad plans', '2021-09-23 02:40:10', '2021-09-23 02:40:10'),
(13, 'Arifa Rahman', 'Such a great service! Thanks to them, I didn’t miss any opportunity or time while applying. They clearly listened and understood my concerns and priorities regarding my studies and sorted out all the possible opportunities that I was absolutely delighted to see! Would definitely recommend others to take their advice if they want to study abroad.', '2021-09-23 02:40:21', '2021-09-23 02:40:21'),
(14, 'Arifa Rahman', 'Such a great service! Thanks to them, I didn’t miss any opportunity or time while applying. They clearly listened and understood my concerns and priorities regarding my studies and sorted out all the possible opportunities that I was absolutely delighted to see! Would definitely recommend others to take their advice if they want to study abroad.', '2021-09-23 02:40:21', '2021-09-23 02:40:21'),
(15, 'Zabed Hosen', 'GIC Education is genuine, professional and authentic. Counsellors are very devoted to their clients. My counsellor was really supportive and delivered amazing help and transparent communication. She provided all the necessary information, from shortlisting the universities and courses based on my interests and aspirations till, I got my visa. Overall, everything was smooth and I would highly recommend you to take GIC Education as your consultancy for studying abroad.', '2021-09-23 02:40:36', '2021-09-23 02:40:36'),
(16, 'Md. Dinar Hossain', 'I was looking for some information regarding how I can go abroad after finishing my graduation. Then I found about GIC Education. They gave me all the information needed to know starting from finding the perfect university to helping me fill-up my application and submitting it as well as helping me with visa processing. I am really glad I went to them and would highly recommend you to take GIC Education as your consultancy for studying abroad.', '2021-09-23 02:40:53', '2021-09-23 02:40:53'),
(17, 'Abu Shafin', 'GIC Education unquestionably a helpful organization for education counselling for studying abroad. My counselor was extremely helpful and reliable while dealing with my case. Students who want to apply abroad, should definitely get all their queries answered while choosing the university or the destination. I am 100% satisfied by their service. And I believe that the GIC team members will try their best to guide everyone in a proper direction.', '2021-09-23 02:41:09', '2021-09-23 02:41:09'),
(18, 'Ashadul Alam', 'Really faithful, they provide accurate information time to time.\r\nI have applied to Sweden through GIC and got visa within 8 months.', '2021-09-23 02:41:24', '2021-09-23 02:41:24'),
(19, 'Amin Mohammad', 'Superb place for counseling for studying abroad. Everyone at GIC Education are dedicated and helpful to the fullest. My situation with university admission and visa processing was handled very professionally. They even gave me helpful suggestions about scholarship and exemptions. I would recommend taking their service to anyone who wants to go abroad.', '2021-09-23 02:41:36', '2021-09-23 02:41:36'),
(20, 'Jubair Hossain', 'Good service...helpful Relationship managers..', '2021-09-23 02:41:50', '2021-09-23 02:41:50'),
(21, 'Sakil Ahmed', 'For me GIC Education Ltd. for foreign education is truly exemplary. A huge shout out goes to them, where the true experts helped me at each and every step. Right from applying for universities to my visa processing, I received immense support and guidance. With my amazing experience I recommend everyone to choose this place if you wish to get through everything successful and smoothly.', '2021-09-23 02:42:03', '2021-09-23 02:42:03'),
(22, 'Rafiqul Islam', 'Such a great service! Thanks to them, I didn’t miss any opportunity or time while applying. They clearly listened and understood my concerns and priorities regarding my studies and sorted out all the possible opportunities that I was absolutely delighted to see! Would definitely recommend others to take their advice if they want to study abroad.', '2021-09-23 02:42:14', '2021-09-23 02:42:14'),
(23, 'Aminul Akash', 'Superb place for counseling. You can learn every step by yourself to be more confident while applying for a visa. I did it and achieved my goal. A huge shout out to GIC Education Ltd for helping me to establish my dreams and goals. Hugely appreciate your kind assistance. Feel free to pay a visit, little effort always counts.', '2021-09-23 02:42:23', '2021-09-23 02:42:23'),
(24, 'Iftekar Hossain', 'Quite a positive experience with GIC Education Ltd. My counsellor was very supportive along the whole journey. I remember being a bit reluctant at certain stages during the process, however she guided me well. She helped me from the start, as in from shortlisting the universities and courses based on my interests till, I got my visa. Overall, everything was smooth and I would highly recommend you to take GIC Education as your consultancy for studying abroad.', '2021-09-23 02:42:34', '2021-09-23 02:42:34'),
(25, 'Raisul Islam', 'GIC Education is one of the most resourceful solution for higher education in abroad. For me, starting right from selecting specific countries and universities and then sending out applications, they provided guidance in every step. Later on with the file processing for my visa application was done with such professionalism that I didn’t even need to worry about anything. All those out there who want to study abroad, GIC Education Ltd is your best bet!', '2021-09-23 02:42:47', '2021-09-23 02:42:47'),
(26, 'Naser Abdullah', 'I\'ve consulted with GIC Education for my process of study abroad and their service and communication is excellent. My consultant gave me helpful suggestions whenever needed. Moreover, GIC education is really trustworthy and credible. They give best directions in almost every field of education and concentrate on each and every aspect with great precision. I highly recommend anyone who want to study abroad and looking for reliable sources to process their application', '2021-09-23 02:42:59', '2021-09-23 02:42:59'),
(27, 'Abdur Rahman', 'My experience with GIC Education has been exceptional. To me GIC Education is a thoroughly professional company with polite and knowledgeable staff. They guided and assisted me with all the processes, from university selection to the visa application process. They handled everything systematically and professionally. There is no doubt that I would recommend others to get in touch with GIC Education, if they are looking to study abroad.', '2021-09-23 02:43:14', '2021-09-23 02:43:14'),
(28, 'Sayma Haque', 'Superb place for counseling! They were the best choice for my first step to an international degree. I have learned so much from them. Their professionalism and calm demeanor made me more confident while preparing for this new journey. A huge shoutout to GIC for helping me to establish my dreams and goals. Thanks, GIC Education Ltd! :)', '2021-09-23 02:43:26', '2021-09-23 02:43:26'),
(29, 'Tareq Aziz', 'GIC Education is the most disciplined organized place for student counselling. They made sure I had all the information needed. People working here are really helpful and professional. All the counseling for selecting the best university as well as file processing is done with profoundness and utmost care. If anyone is planning to come to Canada, I will recommend them to visit GIC, as they are very helpful with maximum success rate.', '2021-09-23 02:43:39', '2021-09-23 02:43:39'),
(30, 'Kaniz Rahima', 'GIC agents are dedicated and helpful to the fullest. My situation with university admission and visa processing was handled very professionally. They truly focused on my requirements. I had a lot of questions regarding my options sponsorship and I got the fullest cooperation by them. I would recommend taking their advice regarding studying abroad.', '2021-09-23 02:43:52', '2021-09-23 02:43:52'),
(31, 'Obyedullah Dipto', 'Review for GIC education services. I contacted them for Canada student visa. They explained me all the necessary steps and the entire documents which I needed for the visa. I got my visa very easily. I like their services very much. They did fabulous job. They are best visa services provider. I would like to recommend them to all.', '2021-09-23 02:44:07', '2021-09-23 02:44:07'),
(32, 'Obyedullah Dipto', 'Review for GIC education services. I contacted them for Canada student visa. They explained me all the necessary steps and the entire documents which I needed for the visa. I got my visa very easily. I like their services very much. They did fabulous job. They are best visa services provider. I would like to recommend them to all.', '2021-09-23 02:44:07', '2021-09-23 02:44:07'),
(33, 'Shumona Akter', 'Such a cool service!  They had online consultancy option. Great initiative guys! Thanks to that, I could easily talk to them and didn’t miss any opportunity or time while applying. Even on phone they clearly listened and understood my hesitations and concerns regarding my studies and sorted out all the possible opportunities that I never imagined I had! Would definitely recommend others to take their advice if they want to study abroad.', '2021-09-23 02:44:22', '2021-09-23 02:44:22'),
(34, 'Sharmin Islam', 'A hassle-free getaway! I was thinking about getting a masters degree overseas.  A few of my cousins referred GIC Education Ltd. to me and said they were very proficient and reliable. So, I contacted them and they asked my educational background, my preferred place etc. And to my utter surprise, they suggested some really great options and scholarship opportunities! I would definitely recommend others to take GIC’s help to get into their dream university abroad!', '2021-09-23 03:18:30', '2021-09-23 03:18:30'),
(35, 'Amir Hossain', 'I decided to study in Canada in April and since then I was in contact with multiple consultancies until I had a talk here at GIC Education Ltd. They have helped me get admission into the university I wanted to. My counsellor has supported me whenever I looked out for her. She was very well spoken, efficient, calm and knowledgeable about all the requirements and opportunities. This has truly been a great experience for me. I\'d recommend GIC Education Ltd. to anyone who wants to study abroad, since they have the top-notch employees with proper skillset one would require.', '2021-09-23 03:18:41', '2021-09-23 03:18:41'),
(36, 'Md. Anisur Sadek', 'If anyone wishes to have international study experience with proper guidance then GIC Education definitely is the right place. It was one of my best decisions to proceed my application to the UK with them. GIC with their wonderful supervision and suggestions throughout the process will always have your back! Thank you GIC.', '2021-09-23 03:18:54', '2021-09-23 03:18:54'),
(37, 'Mehedi Hasan', 'I applied to Canada Through GIC education ltd. And got my visa.They are very authentic and well-known.', '2021-09-23 03:19:07', '2021-09-23 03:19:07'),
(38, 'Mohsin Billah', 'It has been a great experience with GIC Education! My best decision for signing up with GIC Education regarding my applications for universities in Canada. Everyone there, has tirelessly helped me with my admission and scholarship applications while advising me on the most suitable career paths based on my academic qualifications and financial capabilities.', '2021-09-23 03:19:19', '2021-09-23 03:19:19'),
(39, 'Mahedy Mahmood', 'As I intended to study in UK for my bachelors, I went to GIC Education Ltd. It was an excellent idea. My counselor helped me a lot throughout my application process starting from shortlisting universities, counselling, visa application interview and a lot more. I am completely satisfied with the service provided by GIC. During the middle of a pandemic when most of the offices were closed my counsellor was guiding me virtually. And it was her true efforts and guidance which made me eligible for a scholarship at a prestigious university. Thanks GIC Education Ltd!', '2021-09-23 03:19:35', '2021-09-23 03:19:35'),
(40, 'Ahmed Mostofa', 'Highly recommended! I was thinking about getting a Canadian degree. So I choose GIC education. It’s a really good place for higher education counseling and most importantly their constant support and genuine guidance made my process smooth and easy! Thank you GIC Education Ltd and team!', '2021-09-23 03:19:47', '2021-09-23 03:19:47'),
(41, 'Aysha Siddika', 'It has been a great experience with GIC Education! Most likely my best decision for signing up with them regarding my applications for universities at Sweden. Everyone there has tirelessly helped me with my admission and scholarship applications while advising me on the most suitable career paths based on my academic qualifications and financial capabilities. Thank you :)', '2021-09-23 03:24:49', '2021-09-23 03:24:49'),
(42, 'Nasrin Chowdhury', 'From my personal experience I can say that everyone in GIC Education is very professional when it comes to dealing with a client. I didn\'t need to go anywhere else. Huge thanks to all the staff members specially my counsellor. I know my papers were dealt with profoundness and utter care. It\'s been a really unforgettable journey and will stay a with me as a cherished memory as I study in UK. Thank you GIC Education Ltd.', '2021-09-23 03:25:00', '2021-09-23 03:25:00'),
(43, 'Kamrul Ahsan', 'So, I\'ve consulted with GIC Education Ltd. for my process of study abroad. Both their service and communication are excellent. My consultant was very professional. She helped me at every step and also gave me helpful suggestions whenever needed. Honestly, GIC Education Ltd. is very reliable for study abroad as their suggestions and direction are trustworthy. I highly recommend anyone who wants to study abroad and looking for reliable sources to process their application, I believe it\'ll be done with utter perfection.', '2021-09-23 03:25:10', '2021-09-23 03:25:10'),
(44, 'Sheikh Raju', 'GIC Education Ltd is the best agency for abroad studies. My experience was so good. They helped me with their technical advice and insights regarding my admission and scholarship applications. All credit goes to the GIC team for taking care of all the things and made it possible. Definitely recommend them for future students who are willing to study abroad, this is the one stop solution for all your queries. Thanks, GIC Education :)', '2021-09-23 03:25:19', '2021-09-23 03:25:19'),
(45, 'Saad Alam', 'Highly recommended! GIC Education Ltd. is such a great place for guidance and error free way to get student visa. After hearing about my future plans and my educational qualifications they suggested some really amazing options for me and I didn’t even need IELTS! Thank you!', '2021-09-23 03:25:28', '2021-09-23 03:25:28'),
(46, 'Asif Chowdhury', 'Studying in UK was my dream. I completed my A levels I contacted GIC Education. Selecting the best university, best suitable scholarship options as well as all of my visa processing task was done by them. They are very much concerned than any other consultancy firm while lodging the application. I am 100% satisfied by their service.', '2021-09-23 03:25:35', '2021-09-23 03:25:35'),
(47, 'Tareq Mahboob', 'Undoubtedly a helpful and an active organization. As a married student when me and my wife applied together, they answered both of our queries while helping us choose the best universities that would suit both of our interest and offer scholarship opportunity. Later on, they did such an amazing job with the file processing for our visa application! Really happy with it.', '2021-09-23 03:25:43', '2021-09-23 03:25:43'),
(48, 'Nazmur Rahman', 'I am highly satisfied with the assistance I received from GIC Education for my university application and visa processing for Canada. Everyone there, has tirelessly helped me with their technical advice and insights regarding my admission and scholarship applications while advising me on the most suitable career paths based on my academic qualifications. It has been a great experience with GIC Education! Thank you :)', '2021-09-23 03:25:54', '2021-09-23 03:25:54'),
(49, 'Aminul Haque', 'GIC Education Ltd is one of the most prominent and resourceful one stop solution in Bangladesh for higher education in abroad. They help you from the very beginning when you plan to study abroad. For me, starting right from selecting country, university and then sending out applications, they helped me in every step. When I was stressing out, they helped me along the way and provided the guidance. All those who want to study abroad, GIC Education Ltd is your best bet!', '2021-09-23 03:26:03', '2021-09-23 03:26:03'),
(50, 'Tashnia Tarannum', 'Undoubtedly a helpful and an active organization. My counselor was extremely helpful and reliable while dealing with my case. Students who want to apply abroad, should get all their queries answered while choosing the university or the destination state. I believe that the GIC team members will try their best to guide everyone in a proper direction.', '2021-09-23 03:26:11', '2021-09-23 03:26:11'),
(51, 'Adiba Rahman', 'GIC Education Ltd. is the most amazing and disciplined organization and a great place for student counselling. People working here are really friendly, helpful and professional . All the counseling for selecting the best university as well as file processing is done with profoundness and utter care. If anyone is planning to come to Canada, I will recommend them to visit GIC, as they are very helpful with maximum success rate.', '2021-09-23 03:26:17', '2021-09-23 03:26:17'),
(52, 'Sheuli Das', 'Best organization in student consultation! One of my friends referred GIC Education to me. I contacted them and they asked my preferred place to study, my educational background, etc. and suggested some really great options and scholarship opportunities!', '2021-09-23 03:26:30', '2021-09-23 03:26:30'),
(53, 'Nasrin Sultana', 'I really found the counselors of GIC Education Ltd to be very cooperative. My counselor was very helpful in dealing my case. Initially, one might find it a bit difficult in arranging all the papers but once the process starts it becomes relatively easy. I wish I should have contacted them in the first place. As a piece of advice to the new applicants, I request them all to contact GIC before starting the application process.', '2021-09-23 03:26:38', '2021-09-23 03:26:38'),
(54, 'Shafqat Ahmed', 'GIC Education maintains supreme quality, maximum honesty, incredible commitment of service standard. They truly focused on my requirements. I had a lot of questions regarding my options scholarship and I got the fullest cooperation by them.', '2021-09-23 03:26:45', '2021-09-23 03:26:45'),
(55, 'Md. Rubel', 'GIC Education has honestly helped me a lot. I have a got admitted to a great university in UK and it was possible because them. My counsellor was there for me throughout this journey. The way they simplify such a complicated procedure is absolutely commendable and I would surely recommend GIC Education to anybody who is looking to study abroad.', '2021-09-23 03:27:06', '2021-09-23 03:27:06'),
(56, 'Shofiqul Huda', 'It was a wonderful experience with GIC Education. Before coming to GIC, I had hundreds of questions, but they solved all my queries. She helped me with my applications, finding the right university for me and visa process. For me going abroad was a big decision and GIC took care of it. If anybody wants to go abroad for studying in UK, I would definitely recommend you to take on GIC as your guidance.', '2021-09-23 03:27:16', '2021-09-23 03:27:16'),
(57, 'Mizanur Rahman', 'GIC Education Ltd. helped me a lot when I went to them for guidance. After hearing about my aspirations, chosen place to study and my educational qualifications they suggested some really amazing options and scholarship opportunities! Best place for student consultation indeed!', '2021-09-23 03:27:27', '2021-09-23 03:27:27'),
(58, 'Abu Sadek', 'Great place for educational counseling! Extremely resourceful and adept professionals dedicated to each applicant. They are very helpful with all the steps regarding visa processing and always have the best advice ready for any unforeseen circumstances. Would definitely recommend for anyone wishing to pursue higher education abroad.', '2021-09-23 03:27:46', '2021-09-23 03:27:46'),
(59, 'Fahima Kobir', 'GIC Education provides the best service for choosing and getting into international universities. My counselor was extremely helpful and reliable while dealing with my case. A piece of advice to the new applicants - if you\'re looking for universities abroad, GIC Education Ltd is definitely your best option!', '2021-09-23 03:28:01', '2021-09-23 03:28:01'),
(60, 'Farhana Islam', 'My experience with them was awesome. I received my Canada visa from them. The way they guided me was recommendable. At first, I was confused regarding the documentation process. But they guided me throughout. Thank you team GIC Education Ltd. :)', '2021-09-23 03:28:08', '2021-09-23 03:28:08'),
(61, 'Sumaiya Monjur', 'Outstanding helpful service is all that I can say. People working here are really friendly, helpful and professional. Working to every bit of step from getting admission till you receive your visa in your hand, you\'re going to find them helping you till the beginning of your University journey and for me it was in one of the highest ranked universities in Canada. Thanks, GIC team!', '2021-09-23 03:28:17', '2021-09-23 03:28:17'),
(62, 'Bijoy Borua', 'Honestly, everyone at GIC Education Ltd is very cooperative. They were really helpful from managing all the paperwork to giving me mental pep talk and support for taking important decision like choosing the right university and courses. As a piece of advice to the new applicants, I request them all to contact GIC before starting the application process.', '2021-09-23 03:28:30', '2021-09-23 03:28:30'),
(63, 'Rafia Azam', 'I visited GIC Education Ltd. to get counselling and assistance for my further studies in Canada. My counsellor a very polite, knowledgeable and cooperative. She helped me with my university applications and visa process. GIC definitely is a one stop solution for all the study abroad guidance a prospective student would ever require.', '2021-09-23 03:28:39', '2021-09-23 03:28:39'),
(64, 'Md Shameem Ahmed', 'Counselors and Relationship managers are dedicated and helpful to the fullest. They focus on each case\'s requirements. I had issues with my documents, I got the fullest cooperation from them. I would recommend taking their advice on any issues covered by them.', '2021-09-23 03:28:48', '2021-09-23 03:28:48'),
(65, 'Mussharat Alam', 'I have learned so much from GIC Education. Their professionalism and calm demeanor made me more confident while preparing for this new journey. GIC Education really helped me establish my dreams and goals. They are the best!!', '2021-09-23 03:28:54', '2021-09-23 03:28:54'),
(66, 'Rafiqul Azam', 'GIC made my dream to study abroad possible with their wonderful guidance and patience throughout the process. My advisor very calmly explained the pros and cons about the various programs and helped me in choosing the right course. Thank you GIC and really grateful to have you guys as my savior.', '2021-09-23 03:29:03', '2021-09-23 03:29:03'),
(67, 'Mohammad Kamal Uddin', 'I am very happy with them and very thankful to the entire team who helps in my Canada process. Staff were very helpful and proactive with their work. Once again thank you so much @GIC Education Ltd.', '2021-09-23 03:29:10', '2021-09-23 03:29:10'),
(68, 'Nazma Tania', 'I am very happy with them and very thankful to the entire team. Who helps in my Canada process. Staff were very helpful and proactive with their work they rewrite my resume according to Canada standard and they help me in my process. Once again thank you so much @ Global Immigration Consultants Ltd .', '2021-09-23 03:29:18', '2021-09-23 03:29:18'),
(69, 'Sonali Ray', 'GIC Education has helped me to find the best university for me in UK and helped me throughout the process. Overall, everything was smooth and I would highly recommend anyone to take GIC Education as your consultancy for studying abroad.', '2021-09-23 03:29:26', '2021-09-23 03:29:26'),
(70, 'Tashfia Tarannum', 'Best organization in student consultation. One of my friends referred GIC Education Ltd. to me and said they helped him a lot when he went to them. So, I contacted them and they asked my preferred place to study, my educational background, etc. Later on, they suggested some really great options and scholarship opportunities! Definitely recommended!', '2021-09-23 03:29:34', '2021-09-23 03:29:34'),
(71, 'Tahiya Tabassum', 'Extremely polite and helpful. They advised me which universities are best for me and gave me to the point information about any help I needed. They help with university applications as well as visa processing. They were  tremendously helpful for fulfilling my dreams. Thanks, GIC Education Ltd.', '2021-09-23 03:29:42', '2021-09-23 03:29:42'),
(72, 'Tanzina Rahman', 'GIC Education Ltd is the best agency for abroad studies. They really helped me with their technical advice and insights regarding my admission and scholarship applications. Definitely recommend them for future students who are willing to study abroad, this is the one stop solution for all your queries. Thanks, GIC Education :)', '2021-09-23 03:29:50', '2021-09-23 03:29:50'),
(73, 'Mohammed Emtiaz', 'Finally, I found a company which could sort all my problems out. GIC Education Ltd is really helping me through the visa process in a more professional way. This is the only company that understood my problems and cleared all my doubts and now I am really in a comfortable zone. Thank you GIC Education Ltd for making things easy and good for me.', '2021-09-23 03:29:56', '2021-09-23 03:29:56'),
(74, 'Nur Alam Zico', 'Thanks GIC for the wonderful support.', '2021-09-23 03:30:23', '2021-09-23 03:30:23'),
(75, 'Najifa Anjum', 'GIC Education Ltd. has helped me to find the best university for me in CANADA and my counsellor, helped me throughout the process. Overall, everything was smooth and I would highly recommend anyone to take GIC Education as your consultancy for studying abroad.', '2021-09-23 03:30:30', '2021-09-23 03:30:30'),
(76, 'Rafsan Hossain', 'Everyone in this organization is very professional when it comes to dealing with a client. I didn\'t need to go anywhere else. Huge thanks to all the staff members specially my counsellor. I know my papers was not easy to handle but it was dealt with profoundness and utter care. It\'s been a really unforgettable journey and will stay a with me as a cherished memory as I study in Sweden. Thank you GIC Education Ltd.', '2021-09-23 03:30:39', '2021-09-23 03:30:39'),
(77, 'Md.Sabbir Amin', 'Thank you so much! I was thinking to apply for Canada student visa but I wasn\'t certain about the procedure so I choose GIC education. Good place for higher education counseling in Dhaka city. Behavior is good and student friendly.', '2021-09-23 03:30:46', '2021-09-23 03:30:46'),
(78, 'Zahid Iqbal', 'I applied for Canada student VISA through GIC . My experience with them was Awesome...I received my visa from them. The way they guided me was really recommendable. At first, I was confused regarding the documentation process. But they guided me throughout. Thank you team GIC.', '2021-09-23 03:31:16', '2021-09-23 03:31:16'),
(79, 'Sonia Akter', 'Best consultants I have ever found. I \'d like to do my higher education at Canada. GIC Education Ltd has helped me secure a student visa for Canada. They explained to me every single step. I am very pleased with the services they provide.', '2021-09-23 03:31:24', '2021-09-23 03:31:24'),
(80, 'Al Fahad Tonmoy', 'Applied for Canada and got the offer letter in a very short time. Really loved their prompt service. Now going forward with VISA services.', '2021-09-23 03:31:38', '2021-09-23 03:31:38'),
(81, 'Fatema Priyanka', 'If you want any information reading student visa I think GIC is the best place where you can go!! They will give you proper information step by step. They maintain their transparency about everything. The best thing is they are professional.Nice Experience.', '2021-09-23 03:31:50', '2021-09-23 03:31:50'),
(82, 'Omar Faruq', 'Finally got student VISA to study in a Canadian University. Their dedication to each applicant is unique. Therefore, I strongly recommend their services for students applying abroad.', '2021-09-23 03:32:07', '2021-09-23 03:32:07'),
(83, 'Md. Woazed Ali Khan', 'Alhamdulillah!! this is the best consultancy firm for Canada migration in Bangladesh. I  got my student visa with the help of this firm. Thank you GIC Education Ltd and their lawyer panel and application processing team. :) :) Best of luck for your future progress.', '2021-09-23 03:32:14', '2021-09-23 03:32:14'),
(84, 'Arif M', 'If you need fast, to the point, accurate assessment, this is the right place. They share all info upfront and there is no hidden costs involved. The team is well versed on handling unique clients, do regular checkups and keeps well informed throughout each steps of the application. I highly recommend them as they are the only company with verified lawyers & professional staff.', '2021-09-23 03:32:24', '2021-09-23 03:32:24'),
(85, 'Mainul Islam', 'Amazing work is done by the team. Thank you very much team for your support and the hard work you guys have put in. Never seen a consultation firm putting so much effort on an individual....kudos guys.', '2021-09-23 03:32:48', '2021-09-23 03:32:48'),
(86, 'Fakhrul Alam Majumder', 'Best organization. The team was extremely helpful and kind in answering all my questions and ensuring immediate follow-up of any action required of me. Thanks to the team of GIC Education Ltd.', '2021-09-23 03:32:56', '2021-09-23 03:32:56'),
(87, 'Md. Didarul Alam', 'I was a very long time connected with this awesome organization. The whole team at GIC is very professional, diligent and passionate about success. We were very specific about the procedure and the documentations.', '2021-09-23 03:33:11', '2021-09-23 03:33:11'),
(88, 'Sumon Chowdhury', 'Extremely polite and helpful. Advises which universities are best for you and gives you to the point information about any help you need. They do university applications and helps in visa processing. They helped me a lot with my Visa application.', '2021-09-23 03:33:18', '2021-09-23 03:33:18'),
(89, 'Ohaida Osman Tory', 'GIC Education is one of the best education farm in Bangladesh. I have gone through some other consulting farm. But I think GIC Education is best among them. I really appreciate their work and their professional behavior. 5 out of 5 from me.', '2021-09-23 03:33:24', '2021-09-23 03:33:24'),
(90, 'Tanveer Ahmed', 'GIC and team answered all my queries at ease and with an informative, in-detail, and analytical process, also the lawyer assessment helped me the most though my student visa to Canada. Best consultants in Bangladesh.', '2021-09-23 03:33:30', '2021-09-23 03:33:30'),
(91, 'Nasrin Akter', 'Good experience overall, all the counselors and relationship managers are very polite, helpful and cooperative.\r\nI would recommend everyone willing to move abroad for their services.', '2021-09-23 03:33:36', '2021-09-23 03:33:36'),
(92, 'Kazifatema Begum', 'Experienced support team with the instant update’s regarding the applications & document versions. Very professional organization in terms of process. Thank you for all your help and support.', '2021-09-23 03:33:42', '2021-09-23 03:33:42'),
(93, 'Arifa Sharmin', 'Best Organization in Student Consultation for Canada. There service is very good. Awesome hospitality. Very helpful team.', '2021-09-23 03:33:49', '2021-09-23 03:33:49'),
(94, 'Mashfika Hakim', 'Highly recommended most importantly their constant support and genuine guidance in these changing times made my process a smooth success they are always there to listen and explain to you the scenarios over and over. Thank you GIC Education Ltd and team.', '2021-09-23 03:34:02', '2021-09-23 03:34:02'),
(95, 'Mahinur Alam', 'I strongly believe that this company serves very well. I would like to thanks its staffs especially. Behaviour and disciplined them is really very good.', '2021-09-23 03:34:31', '2021-09-23 03:34:31'),
(96, 'Washi NB Sharif', 'GIC Education had always been taken the Study abroad option from Bangladesh to the next level. The employees working in this company are smart & passionate about client services. You can always rely on them if you want to Study Abroad.', '2021-09-23 03:34:38', '2021-09-23 03:34:38'),
(97, 'Provat Shourav', 'I must say GIC edu is very helpful, cooperative, friendly consultancy firm .Starting from reception to counselors they won\'t forget to greet with happy face. If you are looking for someone to guide you through the process of finding the right university, the correct program, as well as the options regarding financial aid; I highly recommend GIC education.', '2021-09-23 03:34:51', '2021-09-23 03:34:51'),
(98, 'Khairum Nahar Pinky', 'Polite and helpful. Advises which universities are best for you and gives you to the point information about any help you need. They do university applications and helps in visa processing .', '2021-09-23 03:35:01', '2021-09-23 03:35:01'),
(99, 'sajan jannat', 'A perfect destination for High School or fresh graduates who have recently completed their Bachelor’s Program. GIC Education provides the best solution with total care and guidance to choose the right pathway if you are planning to pursue higher studies at overseas!', '2021-09-23 03:35:07', '2021-09-23 03:35:07'),
(100, 'Onika Rahman', 'According to my findings and references I found GIC Education Ltd. is one of the most professional consulting firm in recent time  All the counselors of GIC Education Ltd. are so friendly and cooperative.I can highly recommend GIC for those opportunity seeker who are really interested to study abroad.', '2021-09-23 03:35:16', '2021-09-23 03:35:16'),
(101, 'Onika Rahman', 'According to my findings and references I found GIC Education Ltd. is one of the most professional consulting firm in recent time  All the counselors of GIC Education Ltd. are so friendly and cooperative.I can highly recommend GIC for those opportunity seeker who are really interested to study abroad.', '2021-09-23 03:35:16', '2021-09-23 03:35:16');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'ishuvprit@gmail.com', NULL, '$2y$10$7LBDn/P2Kjs3mdbUr/Dlku77opuzay7.mM2OZAnyV8z4XHgYAU11m', NULL, '2021-09-22 03:13:44', '2021-09-22 03:13:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_miles`
--
ALTER TABLE `extra_miles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `front_page_heroes`
--
ALTER TABLE `front_page_heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
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
-- Indexes for table `success_stories`
--
ALTER TABLE `success_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `extra_miles`
--
ALTER TABLE `extra_miles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_page_heroes`
--
ALTER TABLE `front_page_heroes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `success_stories`
--
ALTER TABLE `success_stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
