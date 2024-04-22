-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 23, 2023 at 09:02 AM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u750085622_topcit`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `examination_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `student_answer` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `student_id`, `examination_id`, `question_id`, `student_answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 173, 7, 8, 'A. Lettermarks', 1, '2023-12-19 05:59:37', '2023-12-19 05:59:37'),
(2, 173, 7, 9, 'Emblems', 1, '2023-12-19 05:59:37', '2023-12-19 05:59:37'),
(3, 173, 7, 10, 'Brand Marks', 1, '2023-12-19 05:59:37', '2023-12-19 05:59:37'),
(4, 173, 8, 13, 'Jojo', 1, '2023-12-19 06:03:42', '2023-12-19 06:03:42'),
(5, 173, 8, 14, 'Yrel', 1, '2023-12-19 06:03:42', '2023-12-19 06:03:42'),
(6, 173, 8, 15, NULL, 1, '2023-12-19 06:03:42', '2023-12-19 06:03:42'),
(7, 173, 8, 13, 'Jonas', 1, '2023-12-19 06:09:17', '2023-12-19 06:09:17'),
(8, 173, 8, 14, 'Yrel', 1, '2023-12-19 06:09:17', '2023-12-19 06:09:17'),
(9, 173, 8, 15, 'Kristal May Munda', 1, '2023-12-19 06:09:17', '2023-12-19 06:09:17'),
(10, 173, 8, 13, 'Juan', 1, '2023-12-19 06:37:53', '2023-12-19 06:37:53'),
(11, 173, 8, 14, 'Yrel', 1, '2023-12-19 06:37:53', '2023-12-19 06:37:53'),
(12, 173, 8, 15, 'Kristal May Munda', 1, '2023-12-19 06:37:53', '2023-12-19 06:37:53'),
(13, 173, 7, 8, 'A. Lettermarks', 1, '2023-12-19 07:11:14', '2023-12-19 07:11:14'),
(14, 173, 7, 9, 'Emblems', 1, '2023-12-19 07:11:14', '2023-12-19 07:11:14'),
(15, 173, 7, 10, 'Brand Marks', 1, '2023-12-19 07:11:14', '2023-12-19 07:11:14'),
(16, 154, 7, 8, NULL, 1, '2023-12-19 07:42:29', '2023-12-19 07:42:29'),
(17, 154, 7, 9, NULL, 1, '2023-12-19 07:42:29', '2023-12-19 07:42:29'),
(18, 154, 7, 10, NULL, 1, '2023-12-19 07:42:29', '2023-12-19 07:42:29'),
(19, 154, 7, 8, NULL, 1, '2023-12-19 07:42:29', '2023-12-19 07:42:29'),
(20, 154, 7, 9, NULL, 1, '2023-12-19 07:42:29', '2023-12-19 07:42:29'),
(21, 154, 7, 10, NULL, 1, '2023-12-19 07:42:29', '2023-12-19 07:42:29'),
(22, 154, 6, 1, 'sd\\g', 1, '2023-12-19 07:49:35', '2023-12-19 07:49:35'),
(23, 154, 6, 2, 'fs\\dg', 1, '2023-12-19 07:49:35', '2023-12-19 07:49:35'),
(24, 154, 6, 3, 'fsdg', 1, '2023-12-19 07:49:35', '2023-12-19 07:49:35'),
(25, 154, 6, 4, 'ggfsg', 1, '2023-12-19 07:49:35', '2023-12-19 07:49:35'),
(26, 154, 6, 5, 'fdgds\\', 1, '2023-12-19 07:49:35', '2023-12-19 07:49:35'),
(27, 154, 7, 8, 'A. Lettermarks', 1, '2023-12-19 07:54:38', '2023-12-19 07:54:38'),
(28, 154, 7, 9, 'Lettermarks', 1, '2023-12-19 07:54:38', '2023-12-19 07:54:38'),
(29, 154, 7, 10, 'Lettermarks', 1, '2023-12-19 07:54:38', '2023-12-19 07:54:38'),
(30, 154, 6, 1, NULL, 1, '2023-12-19 07:59:03', '2023-12-19 07:59:03'),
(31, 154, 6, 2, NULL, 1, '2023-12-19 07:59:03', '2023-12-19 07:59:03'),
(32, 154, 6, 3, NULL, 1, '2023-12-19 07:59:03', '2023-12-19 07:59:03'),
(33, 154, 6, 4, NULL, 1, '2023-12-19 07:59:03', '2023-12-19 07:59:03'),
(34, 154, 6, 5, NULL, 1, '2023-12-19 07:59:03', '2023-12-19 07:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `examinations`
--

CREATE TABLE `examinations` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `title` text NOT NULL,
  `duration` int(11) NOT NULL COMMENT 'in minutes',
  `limit` int(3) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '0=pending,1=active,2=finished',
  `description` text DEFAULT NULL,
  `examination_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `administrator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examinations`
--

INSERT INTO `examinations` (`id`, `title`, `duration`, `limit`, `status`, `description`, `examination_at`, `created_at`, `updated_at`, `administrator_id`) VALUES
(00000000002, 'ELEC 4  Graphics and Visual Computing', 10, 5, 0, 'PLEASE REVIEW THE LESSON THAT PROFESSORS UPLOADED BEFORE TAKING THE EXAM', '2023-12-20 12:02:00', '2023-12-13 02:08:17', '2023-12-19 05:06:20', 1),
(00000000003, 'HCI 102  TechnopreneurshipECommerce', 15, 5, 0, 'Please the download and review the lessons that professors uploaded before taking the exam', '2023-12-20 12:02:00', '2023-12-13 02:11:46', '2023-12-19 05:06:37', 1),
(00000000004, 'SOFTWARE ENGINEERING 102', 20, 3, 0, 'please review the lesson', '2023-12-20 10:30:00', '2023-12-14 01:22:16', '2023-12-19 05:06:57', 1),
(00000000006, 'Lorem ipsum', 10, 5, 1, 'olor sit amet consectetur adipiscing elit Aliquam sollicitudin tempus est in commodo Maecenas faucibus mauris quis arcu ullamcorper sed feugiat ipsum scelerisque Pellentesque sagittis elit et nulla eleifend blandit Cras enim odio tempor sed velit sed maximus efficitur diam', '2023-12-19 15:46:00', '2023-12-14 04:33:11', '2023-12-19 07:46:46', 1),
(00000000007, 'ELEC 4', 10, 5, 1, 'Please the download and review the lessons that professors uploaded before taking the exam', '2023-12-19 15:07:00', '2023-12-18 05:41:12', '2023-12-19 05:13:35', 1),
(00000000008, 'asdqweqw', 15, 3, 1, 'qweqweqw', '2023-12-19 13:22:00', '2023-12-19 06:01:03', '2023-12-19 06:07:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `employee_no` varchar(11) NOT NULL,
  `surname` text NOT NULL,
  `firstname` text NOT NULL,
  `designation` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'professor.jpg',
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '0 = INACTIVE, 1 = ACTIVE',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `examination_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `type` int(1) NOT NULL COMMENT '0=multiple choice, 1=enumeration, 2=fill in the blank',
  `choice_1` varchar(255) DEFAULT NULL,
  `choice_2` varchar(255) DEFAULT NULL,
  `choice_3` varchar(255) DEFAULT NULL,
  `choice_4` varchar(255) DEFAULT NULL,
  `answer` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '0=pending, 1=approved, 2=rejected',
  `professor_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `examination_id`, `question`, `type`, `choice_1`, `choice_2`, `choice_3`, `choice_4`, `answer`, `status`, `professor_id`, `created_at`, `updated_at`) VALUES
(00000000001, 6, '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">olor sit amet, consectetur adipiscing elit. Aliquam sollicitudin tempus est in commodo. Maecenas faucibus mauris quis arcu ullamcorper, sed feugiat ipsum scelerisque. Pellentesque sagittis elit et nulla eleifend blandit. Cras enim odio, tempor sed velit sed, maximus efficitur diam.&nbsp;</span>', 2, NULL, NULL, NULL, NULL, 'amet', 1, '1', '2023-12-14 04:38:15', '2023-12-14 04:39:04'),
(00000000002, 6, '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Sed orci elit, efficitur a placerat ac, rhoncus nec sapien. Maecenas pharetra blandit leo, ac mollis erat euismod elementum. Pellentesque nisi nisi, condimentum at vulputate id, dictum et massa. Praesent dignissim quam sed sem placerat, et placerat erat viverra. Sed mollis eros nec magna varius</span>', 2, NULL, NULL, NULL, NULL, 'Sed', 1, '1', '2023-12-14 04:38:42', '2023-12-14 04:40:27'),
(00000000003, 6, '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">itae</span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;commodo est mattis. Donec laoreet orci eu lacus accumsan, sed tristique quam venenatis. Integer eleifend consequat nulla, vulputate pharetra sapien consequat eu. Nullam volutpat nibh et mi pellentesque, ac ultrices urna pretium. Ut libero sem, rhoncus quis massa quis, ornare lacinia ipsum. Aliquam ut commodo ligula.</span>', 2, NULL, NULL, NULL, NULL, 'itae', 1, '1', '2023-12-14 04:42:54', '2023-12-14 04:43:01'),
(00000000004, 6, '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Morbi convallis odio massa, laoreet tempus orci accumsan eget. Proin malesuada justo nec porta fermentum. Nulla a rutrum justo. Proin fringilla sapien a justo egestas, non pretium ipsum ultrices. Curabitur eu est arcu. Sed vitae diam sed mauris dapibus mattis. Nulla facilisi. Cras quis lacus eros.</span>', 1, NULL, NULL, NULL, NULL, 'Morbi', 1, '1', '2023-12-14 04:43:26', '2023-12-14 04:43:44'),
(00000000005, 6, '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Nam dolor nisl, fermentum a scelerisque eu, hendrerit suscipit urna. Pellentesque eget dui a leo iaculis maximus et non nunc. In sit amet sem sit amet dui pulvinar porta. Curabitur erat lacus, porta ac neque sed, placerat sollicitudin sem. Pellentesque eu urna non arcu eleifend pulvinar.&nbsp;</span>', 2, NULL, NULL, NULL, NULL, 'Nam dolor', 1, '1', '2023-12-14 04:44:08', '2023-12-14 04:46:53'),
(00000000006, 2, 'asdasd', 0, 'asdasd', 'asda', 'asdasd', 'sdasd', 'asdasd', 1, '166', '2023-12-14 04:45:04', '2023-12-15 01:33:45'),
(00000000007, 2, '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis condimentum eleifend mollis. Fusce quis risus nec metus cursus molestie non vel nisi.&nbsp;</span>', 2, NULL, NULL, NULL, NULL, 'Lorem', 1, '166', '2023-12-18 00:10:41', '2023-12-18 00:11:06'),
(00000000008, 7, '1. _______ are also based on text, but typically only use initials or an abbreviation.', 0, 'A. Lettermarks', 'B. Emblems', 'C. Brand Marks', 'D. Combination marks', 'Lettermarks', 1, '1', '2023-12-18 05:42:37', '2023-12-18 05:45:09'),
(00000000009, 7, '<div>2. _______ because symbols or icons can be more recognizable or memorable than</div><div>words, many businesses opt to use brandmark logos.</div>', 0, 'Lettermarks', 'Emblems', 'Brand Marks', 'Combination marks', 'Brand Marks', 1, '1', '2023-12-18 05:43:41', '2023-12-18 05:45:13'),
(00000000010, 7, '<div>3. _______ Symbols are incredibly useful for making an unknown brand name</div><div>immediately relevant by helping to establish a connection in the consumer’s mind.</div>', 0, 'Lettermarks', 'Emblems', 'Brand Marks', 'Combination marks', 'Combination marks', 1, '1', '2023-12-18 05:45:01', '2023-12-18 05:45:18'),
(00000000011, 3, '<div>&nbsp;is a prefix that means&nbsp;<span style=\"font-size: 1rem;\">\"computer\" or \"computer network,\"</span></div><div>as in cyberspace, the electronic&nbsp;<span style=\"font-size: 1rem;\">medium in which online&nbsp;</span><span style=\"font-size: 1rem;\">communication takes place.</span></div>', 0, 'Cyber', 'Lorem', 'Lorem', 'Lorem', 'Cyber', 0, '166', '2023-12-19 05:10:06', '2023-12-19 05:10:06'),
(00000000012, 3, '<div>Imaginary, intangible,&nbsp;<span style=\"font-size: 1rem;\">virtual</span></div><div><span style=\"font-size: 1rem;\">-reality realm where (in</span><span style=\"font-size: 1rem;\">general) computer</span></div><div><span style=\"font-size: 1rem;\">-communications</span><span style=\"font-size: 1rem;\">and simulations and (in particular)</span></div><div>internet activity takes place.</div>', 0, 'Cyberspace', 'Lorem', 'Lorem', 'Lorem', 'Cyberspace', 0, '166', '2023-12-19 05:11:01', '2023-12-19 05:11:01'),
(00000000013, 8, 'What is my Father\'s name', 0, 'Jojo', 'Juan', 'Jeric', 'Jonas', 'Danilo', 1, '1', '2023-12-19 06:01:29', '2023-12-19 06:01:52'),
(00000000014, 8, 'What is my daughter name?', 1, NULL, NULL, NULL, NULL, 'Yrel', 1, '1', '2023-12-19 06:01:47', '2023-12-19 06:01:55'),
(00000000015, 8, 'what is my wife\'s anme?', 2, NULL, NULL, NULL, NULL, 'Kristal May Munda', 1, '1', '2023-12-19 06:02:13', '2023-12-19 06:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `user_id` int(11) NOT NULL,
  `examination_id` int(11) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `remarks` int(1) NOT NULL DEFAULT 1 COMMENT '0 =as=d',
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '0=on going,1=finished,2=failed',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_id`, `examination_id`, `score`, `remarks`, `status`, `created_at`, `updated_at`) VALUES
(00000000003, 154, 6, NULL, 1, 1, '2023-12-19 07:58:29', '2023-12-19 07:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `reviewers`
--

CREATE TABLE `reviewers` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `examination_id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `professor_id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '0=requested, 1=approved, 2=rejected',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviewers`
--

INSERT INTO `reviewers` (`id`, `examination_id`, `professor_id`, `file`, `status`, `created_at`, `updated_at`) VALUES
(00000000001, 00000000006, 00000000166, 'XwWn3RNxJsGNKHxwvVk4NS4rrsrReDilrGCyWW5y.pdf', 1, '2023-12-14 04:39:38', '2023-12-14 04:47:22'),
(00000000002, 00000000002, 00000000166, 'BcOwJJA9z7i5dWhAw1vP0jv02LmWFoFUpuHPH3jc.xlsx', 1, '2023-12-14 04:45:50', '2023-12-14 04:45:50'),
(00000000003, 00000000002, 00000000166, 'VuqjUSlxu2hIrcSsu1cyj4CnVRlEcjncou2bY7MR.pdf', 0, '2023-12-14 04:47:22', '2023-12-14 04:47:22'),
(00000000004, 00000000002, 00000000166, '3eEtOg3wT9Iyut7mj9Tyf2dbIVIjTR2g2nXcmEY8.pdf', 0, '2023-12-16 22:48:19', '2023-12-16 22:48:19'),
(00000000005, 00000000003, 00000000166, 'DVkEduNIJzOx03ubUCmd5ypsYOAYmcSX7EtXcTsK.pdf', 0, '2023-12-19 05:08:46', '2023-12-19 05:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `student_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text DEFAULT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'profile.jpg',
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_no`, `lastname`, `firstname`, `middlename`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(00000000003, '2000358', 'Ruamero', 'Ruamero', 'F', 'profile.jpg', 1, '2023-12-13 14:19:27', '2023-12-13 17:57:36'),
(00000000011, '2000678', 'Nuez', 'Jeric', NULL, 'profile.jpg', 1, '2023-12-14 05:09:25', '2023-12-14 05:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `role` int(1) NOT NULL COMMENT '0=super admin, 1=sub admin, 2=professor, 3=student',
  `username` varchar(255) NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text DEFAULT NULL,
  `surname` text NOT NULL,
  `photo` varchar(255) DEFAULT 'administrator.jpg',
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '0=disabled, 1=enabled',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `firstname`, `middlename`, `surname`, `photo`, `email`, `contact`, `password`, `status`, `created_at`, `updated_at`) VALUES
(00000000001, 0, 'admin', 'Admin', NULL, 'Super', 'administrator.jpg', 'topcit@gmail.com', '09259418754', '$2y$10$RfOJoJ7.jGWBtoaFnBAb3eSysvwYCw4qxOt46ZPZPQOVWzQnyKd1q', 1, '2023-11-05 02:34:48', '2023-11-05 02:34:48'),
(00000000098, 1, 'kakashi', 'Po', NULL, 'Hello', '656f0d3f3b845.jpg', 'kakashi@gmail.com', '0956153648', '$2y$10$uip9thjf61KNtgR0lZ5P7uQg9qQhb7FcMO5pT/mwdA9fP7jeqX7EW', 1, '2023-12-05 11:45:03', '2023-12-12 06:43:20'),
(00000000128, 1, 'sampleadmin', 'Admin', NULL, 'Sample', '65706a34f1fe0.jpg', 'sampleadmin@gmail.com', '09876543210', '$2y$10$xnf4hKmCmnBaQGdPCJePgOXIu8zNtgR7nl/.v3aFKXAPcXPvK9ig.', 1, '2023-12-06 12:33:57', '2023-12-06 12:33:57'),
(00000000155, 3, '2000358', 'Ruamero', NULL, 'Ruamero', 'student.jpg', 'althearuanero21@gmail.com', '09876543210', '$2y$10$8bWyogWkEScbeLDCVynfpeaWKP70.HCaDIPCUc.7br16RpeT1Kyxu', 1, '2023-12-13 18:23:43', '2023-12-13 18:23:43'),
(00000000166, 2, '123456', 'Professor', NULL, 'Sample', '657a6c970a1b7.JPG', 'sampleprof@gmail.com', '09876543210', '$2y$10$bhoY38WQLIaBo.Mm7ZgSF.KoN1zMvUmQbqsMxQ.ga6c.8763.sMKC', 1, '2023-12-14 02:46:47', '2023-12-14 02:46:47'),
(00000000167, 2, '34242352', 'Jeric', NULL, 'Nuez', 'administrator.jpg', 'jeric@gmail.com', '9312418781', '$2y$10$gch.dbt184ekqnKJ/GL7W.h/PVKQrSxWhTojIOMljXSCMWBL1q2pW', 1, '2023-12-14 04:27:15', '2023-12-14 04:27:15'),
(00000000168, 2, '34653465', 'Edmar', 'G', 'Tan', 'administrator.jpg', 'edmar@gmail.com', '9418914458', '$2y$10$XUp61XLDlcUzxUy1q49gW.1jJJ38LfVlJmsmiYuCh0TUMAurKLYV6', 1, '2023-12-14 04:27:15', '2023-12-14 04:27:15'),
(00000000171, 3, '2000778', 'Jeric', NULL, 'Nuez', 'student.jpg', 'sirjeric@gmail.com', '09876543218', '$2y$10$TbubPHxbrYRWjTm0HnMvIe1EyHmd7JWAvSe9Efp2jeOtwzxghamPO', 1, '2023-12-14 05:07:19', '2023-12-14 05:07:19'),
(00000000172, 3, '2000678', 'Jeric', NULL, 'Nuez', 'student.jpg', 'sirjeric@gmail.com', '09876543210', '$2y$10$5.rdLPJEDIioayDZqmz8RuXT85MrGxah1WWSy0NzZct.GOgh3nFyi', 1, '2023-12-14 05:10:44', '2023-12-14 05:10:44'),
(00000000173, 3, '2000776', 'Juan', NULL, 'Dela Cruz', 'student.jpg', 'sajedhm@gmail.com', '09634905586', '$2y$10$KiIYI5SqdznNowf8q56afugVdmjOpdqWmBy062bt1aBHqYaFAkQ9W', 1, '2023-12-19 00:17:24', '2023-12-19 00:17:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examinations`
--
ALTER TABLE `examinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_no` (`employee_no`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviewers`
--
ALTER TABLE `reviewers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_no` (`student_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `examinations`
--
ALTER TABLE `examinations`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviewers`
--
ALTER TABLE `reviewers`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
