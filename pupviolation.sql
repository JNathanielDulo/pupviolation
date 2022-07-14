-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 04:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pupviolation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2021_02_19_024827_create_admins_table', 2),
(5, '2021_02_24_043351_add_profile_image_to_user', 3),
(6, '2021_03_01_103522_role', 4),
(7, '2021_03_07_070459_create_violations_table', 5),
(8, '2021_03_08_174743_create_offenders_table', 6),
(9, '2021_03_10_050644_violation_softdelete', 7),
(10, '2021_03_10_051648_violation_soft_delete', 8),
(11, '2021_03_10_051930_offender_soft_delete', 9),
(12, '2021_03_10_153917_create__offender__violation_table', 10),
(13, '2021_03_10_160209_drop_violation_id_on_offender_table', 11),
(14, '2021_03_16_143316_create_violation_sanctions_table', 12),
(15, '2021_03_18_175529_violation_table_create_violation_type_dropping_sanctions', 13),
(17, '2021_03_19_161631_delete_table_violations_sanctions', 14),
(20, '2021_03_19_161856_recreate_violation_sanction_table', 15),
(21, '2021_03_24_131029_offender_violation_table_new_status', 16);

-- --------------------------------------------------------

--
-- Table structure for table `offenders`
--

CREATE TABLE `offenders` (
  `id` int(10) UNSIGNED NOT NULL,
  `filedby` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactnum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offenders`
--

INSERT INTO `offenders` (`id`, `filedby`, `studentNumber`, `name`, `email`, `contactnum`, `course`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Christian Esurena/campusdirector', '2017-00018-SP-0', 'Charmaine Joy P. Magtangob', 'charmainejoymagtangob@gmail.com', '09212398333', 'BSIT', '2021-04-11 09:17:26', '2021-04-11 23:51:33', NULL),
(7, 'Marj Palmares Cruz/admin', '2017-00027-SP-0', 'Joana Marie Kimpano', 'joana_kimpano@gmail.com', '09345621341', 'BSIT', '2021-04-11 09:19:55', '2021-04-11 09:19:55', NULL),
(8, 'Marj Palmares Cruz/admin', '2017-00018-SP-0', 'Cerilo Verdejo Jr.', 'verdejo@gmail.com', '09271892112', 'BSIT', '2021-04-11 09:22:45', '2021-04-11 09:55:49', NULL),
(9, 'Marj Palmares Cruz/admin', '2017-00013-SP-0', 'Patrick Tabogon', 'ptabogon@gmail.com', '09345621341', 'BSIT', '2021-04-11 09:24:56', '2021-04-11 09:24:56', NULL),
(10, 'Marj Palmares Cruz/admin', '2017-00013-SP-0', 'Marinel Cruz', 'marinel_cruz@gmail.com', '09212398333', 'BSENTREP', '2021-04-11 09:28:21', '2021-04-11 09:28:21', NULL),
(11, 'Charmaine Joy Magtangob/Guard', '2017-00019-SP-0', 'Marilyn Verdejo', 'marilynverdejo@gmail.com', '09345621341', 'BSBA-MM', '2021-04-11 09:29:42', '2021-04-11 09:29:42', NULL),
(12, 'Charmaine Joy Magtangob/Guard', '2017-00013-SP-0', 'Jessa Sinajonon', 'jessasinajonon@gmail.com', '09345621341', 'BSA', '2021-04-11 09:31:16', '2021-04-11 09:31:16', NULL),
(14, 'Christian Esurena/campusdirector', '2017-00013-SP-0', 'Joshua Magdadaro', 'joshuamagdadaro@gmail.com', '09283921021', 'BSBA-HRM', '2021-04-11 09:39:15', '2021-04-11 09:39:15', NULL),
(15, 'Charmaine Joy Magtangob/Guard', '2017-00087-SP-0', 'James Corbo', 'jamescorbo@gmail.com', '0909184561', 'BSBA-HRM', '2021-04-11 09:46:35', '2021-04-11 09:46:35', NULL),
(16, 'Christian Esurena/campusdirector', '2017-00085-SP-0', 'Harvey Demicillo', 'harveyD@gmail.com', '09178395122', 'BSEDEN', '2021-04-11 09:50:04', '2021-04-11 09:50:04', NULL),
(17, 'Marj Palmares Cruz/admin', '2017-00037-SP-0', 'John Gomez', 'johnharvey@gmail.com', '0926842111', 'BSBA-MM', '2021-04-11 09:54:21', '2021-04-11 09:54:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `offender_violation`
--

CREATE TABLE `offender_violation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `offender_id` bigint(20) NOT NULL,
  `violation_id` bigint(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offender_violation`
--

INSERT INTO `offender_violation` (`id`, `offender_id`, `violation_id`, `status`) VALUES
(1, 1, 5, 0),
(2, 1, 4, 0),
(4, 1, 6, 1),
(8, 1, 6, 1),
(9, 2, 4, 1),
(10, 2, 5, 0),
(11, 2, 6, 0),
(12, 1, 6, 1),
(13, 1, 4, 0),
(14, 1, 5, 0),
(15, 3, 4, 0),
(16, 3, 4, 0),
(17, 3, 4, 0),
(18, 3, 4, 0),
(19, 1, 6, 1),
(20, 1, 6, 1),
(22, 1, 4, 0),
(23, 1, 5, 0),
(24, 1, 5, 0),
(25, 1, 4, 0),
(26, 1, 7, 0),
(27, 1, 4, 0),
(28, 1, 5, 0),
(29, 1, 5, 0),
(30, 1, 5, 0),
(31, 1, 5, 0),
(32, 1, 5, 0),
(33, 1, 5, 0),
(34, 1, 5, 0),
(35, 1, 4, 0),
(36, 1, 5, 0),
(37, 1, 4, 0),
(38, 1, 5, 0),
(39, 1, 5, 0),
(40, 1, 5, 0),
(41, 1, 4, 0),
(42, 1, 5, 0),
(43, 1, 4, 0),
(44, 1, 7, 0),
(45, 1, 7, 0),
(46, 6, 33, 0),
(47, 6, 23, 0),
(48, 6, 33, 0),
(49, 7, 9, 0),
(50, 7, 11, 0),
(51, 7, 9, 0),
(52, 7, 14, 0),
(53, 7, 18, 0),
(54, 8, 9, 0),
(55, 8, 9, 0),
(56, 8, 10, 0),
(57, 9, 14, 0),
(58, 9, 19, 0),
(59, 9, 21, 0),
(60, 9, 21, 0),
(61, 8, 9, 0),
(62, 10, 21, 0),
(63, 10, 15, 0),
(64, 11, 13, 1),
(65, 11, 10, 0),
(66, 12, 13, 0),
(67, 12, 14, 0),
(68, 12, 21, 0),
(69, 13, 16, 0),
(70, 13, 22, 0),
(71, 13, 21, 0),
(72, 14, 15, 0),
(73, 14, 28, 0),
(74, 15, 9, 0),
(75, 15, 9, 0),
(76, 15, 11, 0),
(77, 16, 16, 0),
(78, 16, 16, 0),
(79, 16, 14, 1),
(80, 17, 10, 1),
(81, 17, 17, 0),
(82, 6, 11, 0),
(83, 6, 11, 0),
(84, 6, 11, 0),
(85, 6, 11, 0),
(86, 6, 11, 0),
(87, 6, 11, 0),
(88, 6, 11, 0),
(89, 6, 11, 0),
(90, 7, 9, 0),
(91, 7, 9, 0),
(92, 7, 9, 0),
(93, 7, 9, 0),
(94, 8, 9, 0),
(95, 8, 9, 0),
(96, 8, 9, 0),
(97, 8, 9, 0),
(98, 8, 9, 0),
(99, 6, 21, 0),
(100, 6, 22, 0),
(101, 6, 24, 0),
(102, 6, 26, 0),
(103, 6, 38, 0),
(104, 6, 34, 0);

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
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `profile_image`, `role`) VALUES
(8, 'John Nathaniel Dulo', 'nathaniel100692@gmail.com', NULL, '$2y$10$ITL76XL99b2JVRJEo40Qu.2X6X3GTGu48t2O849cQsxRTiglw8JgC', NULL, '2021-03-04 02:46:25', '2021-03-04 02:46:25', 'profile_images/1614854785John Nathaniel Dulo-profile.png', 'admin'),
(12, 'Marj Palmares Cruz', 'marj_palmares@gmail.com', NULL, '$2y$10$inqIHIrp0oN.4pFZiOfsHeFtokpLxTjuzvTn8PxB0UlMOuMfPW2eu', NULL, '2021-04-11 09:09:25', '2021-04-11 09:09:25', 'profile_images/1618103365Marj Palmares Cruz-profile.png', 'admin'),
(13, 'Charmaine Joy Magtangob', 'charmainejoymagtangob@gmail.com', NULL, '$2y$10$q.DA1SVdJ6Di7pMJUdwBnu8oY0rYvIae4KC0Twv3HIQA0VhYRCZvy', NULL, '2021-04-11 09:10:28', '2021-04-11 09:10:28', 'profile_images/1618103428Charmaine Joy Magtangob-profile.jpeg', 'Guard'),
(14, 'Christian Esurena', 'esurena@gmail.com', NULL, '$2y$10$zc7NuM0e/P3tFo.4eWY0VOtWLTm3ArjQ1USj1MSu9ZGm46P8fidFi', NULL, '2021-04-11 09:15:22', '2021-04-11 09:15:22', 'profile_images/1618103722Christian Esurena-profile.png', 'campusdirector'),
(15, 'quer laconico', 'test@test.com', NULL, '$2y$10$bARMIPDWkU2V6TUt9V0ng.D.aj1Dsv6e/qMK5ZBqW2p5.d7FtkjpK', NULL, '2021-05-08 03:27:33', '2021-05-08 03:27:33', 'profile_images/1620444453quer laconico-profile.png', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE `violations` (
  `id` int(10) UNSIGNED NOT NULL,
  `violationTitle` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `violations`
--

INSERT INTO `violations` (`id`, `violationTitle`, `created_at`, `updated_at`, `deleted_at`, `type`) VALUES
(9, 'Failure to bring validated I.D.', '2021-04-11 07:42:23', '2021-04-11 22:42:16', NULL, 'minor violation'),
(10, 'Failure to conspicuously always wear his/her validated ID inside the campus.', '2021-04-11 07:44:00', '2021-04-11 07:44:00', NULL, 'minor violation'),
(11, 'Loss of ID', '2021-04-11 07:45:33', '2021-04-11 07:45:33', NULL, 'minor violation'),
(12, 'Using fake, non-validated ID/another person’s ID or Lending one’s ID for the use of another person.', '2021-04-11 07:47:17', '2021-04-11 07:47:17', NULL, 'major violation'),
(13, 'Failure to secure an ID on time or late filing of application for ID. Freshmen and transferees shall secure ID upon registration.', '2021-04-11 07:48:17', '2021-04-11 07:48:17', NULL, 'minor violation'),
(14, 'Unauthorized stay (overnight or holidays) in the campus', '2021-04-11 07:49:47', '2021-04-11 07:49:47', NULL, 'minor violation'),
(15, 'Unauthorized use of name, logo, and seal of the University in printed programs, invitations, announcements, tickets, and the like', '2021-04-11 07:51:24', '2021-04-11 07:51:24', NULL, 'minor violation'),
(16, 'Unofficial or unauthorized participation in any activity outside the campus as a representative of the University', '2021-04-11 07:53:44', '2021-04-11 07:53:44', NULL, 'major violation'),
(17, 'Unauthorized release to the press or similar channels of public communication notices and other announcements about or on behalf of the University', '2021-04-11 07:55:20', '2021-04-11 07:55:20', NULL, 'minor violation'),
(18, 'Unauthorized entry of visitors/guests invited by students/organizations (e.g., lecturers, speakers, seminar participants, viewers of exhibits, etc.)', '2021-04-11 07:58:14', '2021-04-11 07:58:14', NULL, 'minor violation'),
(19, 'Unauthorized educational trips, excursions, activities and the like conducted by students/student organizations', '2021-04-11 08:00:20', '2021-04-11 08:00:49', NULL, 'major violation'),
(20, 'Illegal posting of bills, posters, tarpaulins, and the like', '2021-04-11 08:01:59', '2021-04-11 08:02:11', NULL, 'minor violation'),
(21, 'Littering', '2021-04-11 08:04:16', '2021-04-11 08:04:16', NULL, 'major violation'),
(22, 'Smoking', '2021-04-11 08:06:26', '2021-04-11 08:06:26', NULL, 'major violation'),
(23, 'Entering or being on school premises in a state of intoxication and bringing in and/or in possession of liquor and other intoxicating drinks in the University premises.', '2021-04-11 08:08:19', '2021-04-11 08:08:19', NULL, 'major violation'),
(24, 'Gambling, betting, or similar engagement in any game of chance within the school premises', '2021-04-11 08:09:44', '2021-04-11 08:09:44', NULL, 'major violation'),
(25, 'Use of internet/IT facilities within the Campus for gaming, pornography, cyber bullying, and the like', '2021-04-11 08:33:24', '2021-04-11 08:33:24', NULL, 'major violation'),
(26, 'Theft, vandalism, and defacing', '2021-04-11 08:38:02', '2021-04-11 08:38:02', NULL, 'major violation'),
(28, 'Deliberate disruption of classes, academic function, official meeting, or school activity which tends to create disorder or disturbance', '2021-04-11 08:41:00', '2021-04-11 08:42:44', NULL, 'major violation'),
(29, 'Gross acts of disrespect, in word or in deed, which tend to put any member of the faculty, administration or non-teaching staff in ridicule or contempt.', '2021-04-11 08:44:27', '2021-04-11 08:44:27', NULL, 'major violation'),
(30, 'Direct or Indirect assault upon the person of any member of the University academic community', '2021-04-11 08:46:08', '2021-04-11 08:46:08', NULL, 'major violation'),
(31, 'Scandalous display of affection', '2021-04-11 08:47:22', '2021-04-11 08:47:22', NULL, 'major violation'),
(32, 'Brawls on campus or at off-campus school functions.', '2021-04-11 08:48:22', '2021-04-11 08:48:22', NULL, 'major violation'),
(33, 'Dishonesty, such as cheating during any examination, quiz or test, and plagiarism in connection with any academic work.', '2021-04-11 08:56:16', '2021-04-11 08:56:16', NULL, 'major violation'),
(34, 'Carrying deadly weapons, such as firearms, explosives, ice picks, knives, and the like within the University premises', '2021-04-11 08:58:54', '2021-04-11 08:58:54', NULL, 'major violation'),
(35, 'Possession or use of prohibited drugs, such as LSD, marijuana, heroin, shabu or opiate of any kind', '2021-04-11 08:59:56', '2021-04-11 08:59:56', NULL, 'major violation'),
(36, 'All forms of bullying and/or harassment, threat, and intimidation', '2021-04-11 09:05:31', '2021-04-11 09:05:31', NULL, 'major violation'),
(37, 'Destruction and other intentional damage to University property or of an individual person’s property', '2021-04-11 09:12:26', '2021-04-11 09:12:26', NULL, 'major violation'),
(38, 'Tampering with, falsifying, or causing the falsification of any official document like registration certificate, transcript of records, identification cards, certifications and other documents of similar nature or purpose', '2021-04-11 13:15:55', '2021-04-11 13:15:55', NULL, 'major violation');

-- --------------------------------------------------------

--
-- Table structure for table `violation_sanctions`
--

CREATE TABLE `violation_sanctions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `violation_id` int(11) NOT NULL,
  `offense` int(11) NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `violation_sanctions`
--

INSERT INTO `violation_sanctions` (`id`, `violation_id`, `offense`, `details`, `deleted_at`, `created_at`, `updated_at`) VALUES
(8, 9, 1, 'The student shall secure a Student’s Entry Slip from the Office of the Director of the student services.', NULL, '2021-04-11 07:42:43', '2021-04-11 07:42:43'),
(9, 9, 2, 'The student shall be given a warning slip by the Student Affairs Section', NULL, '2021-04-11 07:43:05', '2021-04-11 07:43:05'),
(10, 9, 3, 'one (1) or (2) days suspension, depending on the reason for not bringing the I.D.', NULL, '2021-04-11 07:43:22', '2021-04-11 07:43:22'),
(11, 9, 4, 'minimum of (3) days suspension', NULL, '2021-04-11 07:43:36', '2021-04-11 07:43:36'),
(12, 10, 1, 'The student’s name, ID number, college, year and section shall be noted down by any official, faculty member or security office and submitted to the GCTSO for record and counseling purposes', NULL, '2021-04-11 07:44:27', '2021-04-11 07:44:27'),
(13, 10, 2, 'The student shall be given a letter of advice and interviewed by the GCTSO', NULL, '2021-04-11 07:44:41', '2021-04-11 07:44:41'),
(14, 10, 3, 'Community/Campus service of six (6) hours', NULL, '2021-04-11 07:44:56', '2021-04-11 07:44:56'),
(15, 10, 4, 'one (1) to three (3) days suspension, depending on the number of offenses.', NULL, '2021-04-11 07:45:12', '2021-04-11 07:45:12'),
(16, 11, 1, 'Warning and payment of the cost of printing of new ID', NULL, '2021-04-11 07:45:47', '2021-04-11 07:45:47'),
(17, 11, 2, 'Warning and 16-hour student assistant service to be rendered within 5 schooldays.', NULL, '2021-04-11 07:45:59', '2021-04-11 07:45:59'),
(18, 11, 3, '24- hour student assistant service to be rendered within 7 schooldays.', NULL, '2021-04-11 07:46:12', '2021-04-11 07:46:12'),
(19, 11, 4, '24- hour student assistant service to be rendered within 7 schooldays.', NULL, '2021-04-11 07:46:29', '2021-04-11 07:46:29'),
(20, 12, 1, 'Warning plus one (1) day suspension.', NULL, '2021-04-11 07:47:33', '2021-04-11 07:47:33'),
(21, 12, 2, 'The case shall be referred to the Student Disciplinary Board (SDB).', NULL, '2021-04-11 07:47:48', '2021-04-11 07:47:48'),
(22, 13, 1, 'three (3) hours community/campus service', NULL, '2021-04-11 07:48:42', '2021-04-11 07:48:42'),
(23, 13, 2, 'six (6) hours community/campus service', NULL, '2021-04-11 07:48:54', '2021-04-11 07:48:54'),
(24, 13, 3, 'two (2) days of suspension', NULL, '2021-04-11 07:49:10', '2021-04-11 07:49:10'),
(25, 13, 4, 'one (1) week suspension', NULL, '2021-04-11 07:49:23', '2021-04-11 07:49:23'),
(26, 14, 1, 'three (3) hours community/campus service', NULL, '2021-04-11 07:50:01', '2021-04-11 07:50:01'),
(27, 14, 2, 'six (6) hours community/campus service', NULL, '2021-04-11 07:50:09', '2021-04-11 07:50:09'),
(28, 14, 3, 'One day suspension', NULL, '2021-04-11 07:50:29', '2021-04-11 07:50:29'),
(29, 14, 4, 'Three (3) days suspension', NULL, '2021-04-11 07:50:43', '2021-04-11 07:50:43'),
(30, 14, 5, 'The case shall be referred to the SBD', NULL, '2021-04-11 07:50:55', '2021-04-11 07:50:55'),
(31, 15, 1, 'three (3) hours community/campus service', NULL, '2021-04-11 07:51:45', '2021-04-11 07:51:45'),
(32, 15, 2, 'six (6) hours community/campus service', NULL, '2021-04-11 07:51:56', '2021-04-11 07:51:56'),
(33, 15, 3, 'two (2) day suspension', NULL, '2021-04-11 07:52:19', '2021-04-11 07:52:19'),
(34, 15, 4, 'The case shall be referred to the SDB', NULL, '2021-04-11 07:52:36', '2021-04-11 07:52:36'),
(35, 15, 5, 'The case shall be referred to the SDB', NULL, '2021-04-11 07:52:45', '2021-04-11 07:52:45'),
(36, 16, 1, 'six (6) hours community/campus service', NULL, '2021-04-11 07:54:04', '2021-04-11 07:54:04'),
(37, 16, 2, 'two (2) day suspension', NULL, '2021-04-11 07:54:14', '2021-04-11 07:54:14'),
(38, 16, 3, 'The case shall be referred to the SBD', NULL, '2021-04-11 07:54:33', '2021-04-11 07:54:33'),
(39, 16, 4, 'The case shall be referred to the SBD', NULL, '2021-04-11 07:54:43', '2021-04-11 07:54:43'),
(40, 17, 1, 'three (3) hours community/campus service', NULL, '2021-04-11 07:55:36', '2021-04-11 07:55:36'),
(41, 17, 2, 'six (6) hours community/campus service', NULL, '2021-04-11 07:55:52', '2021-04-11 07:55:52'),
(42, 17, 3, 'two (2) day suspension', NULL, '2021-04-11 07:56:08', '2021-04-11 07:56:08'),
(43, 17, 4, 'The case shall be referred to the SBD', NULL, '2021-04-11 07:56:29', '2021-04-11 07:56:55'),
(44, 17, 5, 'The case shall be referred to the SBD', NULL, '2021-04-11 07:57:10', '2021-04-11 07:57:10'),
(45, 18, 1, 'three (3) hours community/campus service', NULL, '2021-04-11 07:58:31', '2021-04-11 07:58:31'),
(46, 18, 2, 'six (6) hours community/campus service', NULL, '2021-04-11 07:58:39', '2021-04-11 07:58:39'),
(47, 18, 3, 'two (2) day suspension', NULL, '2021-04-11 07:59:05', '2021-04-11 07:59:05'),
(48, 18, 4, 'The case shall be referred to the SBD', NULL, '2021-04-11 07:59:26', '2021-04-11 07:59:26'),
(49, 18, 5, 'The case shall be referred to the SDB', NULL, '2021-04-11 07:59:38', '2021-04-11 07:59:38'),
(50, 19, 1, 'The case shall be referred to the SDB for investigation and determination of applicable sanctions.', NULL, '2021-04-11 08:01:11', '2021-04-11 08:01:11'),
(51, 19, 2, 'The case shall be referred to the SDB for investigation and determination of applicable sanctions.', NULL, '2021-04-11 08:01:23', '2021-04-11 08:01:23'),
(52, 20, 1, 'three (3) hours community/campus service', NULL, '2021-04-11 08:02:28', '2021-04-11 08:02:28'),
(53, 20, 2, 'six (6) hours community/campus service', NULL, '2021-04-11 08:02:36', '2021-04-11 08:02:36'),
(54, 20, 3, 'three (3) day suspension', NULL, '2021-04-11 08:03:10', '2021-04-11 08:03:10'),
(55, 20, 4, 'one (1) week suspension and two (2) weeks cleaning inside the campus for two (2) hours each day.', NULL, '2021-04-11 08:03:32', '2021-04-11 08:03:32'),
(56, 20, 5, 'one (1) week suspension and two (2) weeks cleaning inside the campus for two (2) hours each day.', NULL, '2021-04-11 08:03:43', '2021-04-11 08:03:43'),
(57, 21, 1, 'Warning', NULL, '2021-04-11 08:04:33', '2021-04-11 08:04:33'),
(58, 21, 2, 'One (1) day suspension', NULL, '2021-04-11 08:04:43', '2021-04-11 08:04:43'),
(59, 21, 3, 'One (1) day suspension and one-week cleaning inside the campus for two (2) hours each day', NULL, '2021-04-11 08:05:10', '2021-04-11 08:05:10'),
(60, 21, 4, 'One (1) week suspension and two (2) weeks cleaning inside the campus for two (2) hours each day.', NULL, '2021-04-11 08:05:31', '2021-04-11 08:05:31'),
(61, 21, 5, 'One (1) week suspension and two (2) weeks cleaning inside the campus for two (2) hours each day.', NULL, '2021-04-11 08:05:39', '2021-04-11 08:05:39'),
(62, 22, 1, 'Warning', NULL, '2021-04-11 08:06:47', '2021-04-11 08:06:47'),
(63, 22, 2, 'One (1) day suspension', NULL, '2021-04-11 08:07:01', '2021-04-11 08:07:01'),
(64, 22, 3, 'One (1) day suspension and one-week cleaning inside the campus for two (2) hours each day', NULL, '2021-04-11 08:07:14', '2021-04-11 08:07:14'),
(65, 22, 4, 'One (1) week suspension and two (2) weeks cleaning inside the campus for two (2) hours each day', NULL, '2021-04-11 08:07:27', '2021-04-11 08:07:27'),
(66, 22, 5, 'One (1) week suspension and two (2) weeks cleaning inside the campus for two (2) hours each day', NULL, '2021-04-11 08:07:37', '2021-04-11 08:07:37'),
(67, 23, 1, 'Reprimand and barred from entering the campus/classes.', NULL, '2021-04-11 08:08:38', '2021-04-11 08:08:38'),
(68, 23, 2, 'One-week suspension', NULL, '2021-04-11 08:08:50', '2021-04-11 08:08:50'),
(69, 23, 3, 'Two-week suspension', NULL, '2021-04-11 08:09:02', '2021-04-11 08:09:02'),
(70, 23, 4, 'Dismissal', NULL, '2021-04-11 08:09:13', '2021-04-11 08:09:13'),
(71, 24, 1, 'Reprimand', NULL, '2021-04-11 08:10:05', '2021-04-11 08:10:05'),
(72, 24, 2, 'One-week suspension', NULL, '2021-04-11 08:10:20', '2021-04-11 08:10:20'),
(73, 24, 3, 'Two-week suspension', NULL, '2021-04-11 08:10:38', '2021-04-11 08:10:38'),
(74, 24, 4, 'Dismissal', NULL, '2021-04-11 08:11:15', '2021-04-11 08:11:15'),
(75, 24, 5, 'Dismissal', NULL, '2021-04-11 08:11:26', '2021-04-11 08:11:26'),
(76, 25, 1, 'Reprimand', NULL, '2021-04-11 08:33:48', '2021-04-11 08:33:48'),
(77, 25, 2, 'One-week suspension', NULL, '2021-04-11 08:34:00', '2021-04-11 08:34:00'),
(78, 25, 3, 'Two-week suspension', NULL, '2021-04-11 08:34:16', '2021-04-11 08:34:16'),
(79, 25, 4, 'Dismissal', NULL, '2021-04-11 08:34:30', '2021-04-11 08:34:30'),
(80, 26, 1, 'Reprimand', NULL, '2021-04-11 08:38:20', '2021-04-11 08:38:20'),
(81, 26, 2, 'One-week suspension', NULL, '2021-04-11 08:38:31', '2021-04-11 08:38:31'),
(82, 26, 3, 'Two-week suspension', NULL, '2021-04-11 08:38:42', '2021-04-11 08:38:42'),
(83, 26, 3, 'Dismissal', NULL, '2021-04-11 08:38:53', '2021-04-11 08:38:53'),
(84, 27, 1, 'Two (2) week suspension and restitution of damaged University property or individual person’s property and filing of administrative case', NULL, '2021-04-11 08:39:55', '2021-04-11 08:39:55'),
(85, 27, 2, 'Dismissal and restitution of damaged', NULL, '2021-04-11 08:40:10', '2021-04-11 08:40:10'),
(86, 28, 1, 'Reprimand', NULL, '2021-04-11 08:43:15', '2021-04-11 08:43:15'),
(87, 28, 2, 'One-week suspension', NULL, '2021-04-11 08:43:26', '2021-04-11 08:43:26'),
(88, 28, 3, 'Two-week suspension', NULL, '2021-04-11 08:43:39', '2021-04-11 08:43:39'),
(89, 28, 4, 'Dismissal', NULL, '2021-04-11 08:43:52', '2021-04-11 08:43:52'),
(90, 29, 1, 'Reprimand', NULL, '2021-04-11 08:44:51', '2021-04-11 08:44:51'),
(91, 29, 2, 'One-week suspension', NULL, '2021-04-11 08:45:01', '2021-04-11 08:45:01'),
(92, 29, 3, 'Two-week suspension', NULL, '2021-04-11 08:45:15', '2021-04-11 08:45:15'),
(93, 29, 4, 'Dismissal', NULL, '2021-04-11 08:45:25', '2021-04-11 08:45:25'),
(94, 30, 1, 'One- month suspension', NULL, '2021-04-11 08:46:36', '2021-04-11 08:46:36'),
(95, 30, 2, 'Dismissal and filing of criminal case', NULL, '2021-04-11 08:46:53', '2021-04-11 08:46:53'),
(96, 31, 1, 'Reprimand', NULL, '2021-04-11 08:47:41', '2021-04-11 08:47:41'),
(97, 31, 2, 'One-week suspension', NULL, '2021-04-11 08:47:49', '2021-04-11 08:47:49'),
(98, 31, 3, 'Dismissal', NULL, '2021-04-11 08:47:57', '2021-04-11 08:47:57'),
(99, 32, 1, 'One-week suspension', NULL, '2021-04-11 08:48:43', '2021-04-11 08:48:43'),
(100, 32, 2, 'Dismissal', NULL, '2021-04-11 08:48:55', '2021-04-11 08:48:55'),
(101, 33, 1, 'Failing grade in the examination/quiz concerned', NULL, '2021-04-11 08:57:50', '2021-04-11 08:57:50'),
(102, 33, 2, 'Failing grade in the subject concerned', NULL, '2021-04-11 08:58:10', '2021-04-11 08:58:10'),
(103, 33, 3, 'Two-week suspension', NULL, '2021-04-11 08:58:21', '2021-04-11 08:58:21'),
(104, 33, 4, 'Dismissal', NULL, '2021-04-11 08:58:33', '2021-04-11 08:58:33'),
(105, 34, 1, 'Dismissal and filing of criminal case', NULL, '2021-04-11 08:59:12', '2021-04-11 08:59:12'),
(106, 34, 2, 'Dismissal and filing of criminal case', NULL, '2021-04-11 08:59:18', '2021-04-11 08:59:18'),
(107, 36, 1, 'Reprimand plus one (1) day suspension', NULL, '2021-04-11 09:07:15', '2021-04-11 09:07:15'),
(108, 36, 2, 'One-week suspension', NULL, '2021-04-11 09:07:26', '2021-04-11 09:07:26'),
(109, 36, 3, 'Two-week suspension', NULL, '2021-04-11 09:07:38', '2021-04-11 09:07:38'),
(110, 36, 4, 'The case shall be referred to the SDB', NULL, '2021-04-11 09:07:49', '2021-04-11 09:07:49'),
(111, 36, 5, 'The case shall be referred to the SDB', NULL, '2021-04-11 09:07:59', '2021-04-11 09:07:59'),
(112, 37, 1, 'Two (2) week suspension and restitution of damaged University property or individual person’s property and filing of administrative case', NULL, '2021-04-11 09:13:08', '2021-04-11 09:13:08'),
(113, 37, 2, 'Dismissal and restitution of damaged', NULL, '2021-04-11 09:13:24', '2021-04-11 09:13:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offenders`
--
ALTER TABLE `offenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offender_violation`
--
ALTER TABLE `offender_violation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `violations`
--
ALTER TABLE `violations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `violation_sanctions`
--
ALTER TABLE `violation_sanctions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `offenders`
--
ALTER TABLE `offenders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `offender_violation`
--
ALTER TABLE `offender_violation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `violation_sanctions`
--
ALTER TABLE `violation_sanctions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
