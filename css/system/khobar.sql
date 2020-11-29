-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2020 at 02:37 PM
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
-- Database: `khobar`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `welcome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `welcome`, `heading`, `sub_heading`, `details`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Welcome To', 'Adventure Khobar', 'Dubai\'s top Desert trip Company, Adventure Khobar', 'Adventure Khobar is a Saudi Based establishment in the Eastren Province of Saudi Arabia. We provide platform for experiencing recreational activities in the Eastern province of Saudi Arabia. A trusted well reputed name in the market. We aim to bridge gaps', NULL, '2020-09-26 00:18:51', '2020-09-26 00:18:51');

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
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(18, '58.PNG', NULL, '2020-09-27 03:40:03', '2020-09-27 03:40:03'),
(19, '58.PNG', NULL, '2020-09-27 04:20:38', '2020-09-27 04:20:38'),
(20, '58.PNG', NULL, '2020-09-27 04:21:43', '2020-09-27 04:21:43'),
(21, '58.PNG', NULL, '2020-09-27 08:19:35', '2020-09-27 08:19:35'),
(22, 'acer.PNG', NULL, '2020-09-27 08:19:52', '2020-09-27 08:19:52'),
(23, 'student.png', NULL, '2020-09-27 11:07:54', '2020-09-27 11:07:54'),
(24, 'acer.PNG', NULL, '2020-09-27 11:09:41', '2020-09-27 11:09:41'),
(25, '58.PNG', NULL, '2020-09-27 11:12:05', '2020-09-27 11:12:05'),
(26, 'acer.PNG', NULL, '2020-09-27 11:13:45', '2020-09-27 11:13:45'),
(27, '11.PNG', NULL, '2020-09-27 13:37:10', '2020-09-27 13:37:10'),
(28, '58.PNG', NULL, '2020-09-27 13:58:07', '2020-09-27 13:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `fileuploads`
--

CREATE TABLE `fileuploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(4, '2020_09_25_064517_create_abouts_table', 2),
(5, '2020_09_25_070129_create_missions_table', 3),
(6, '2020_09_25_070146_create_visions_table', 3),
(7, '2020_09_25_072655_create_scuba_divings_table', 4),
(8, '2020_09_25_073316_create_services_table', 4),
(9, '2020_09_26_050247_create_abouts_table', 5),
(10, '2020_09_26_051224_create_abouts_table', 6),
(11, '2020_09_26_053244_create_missions_table', 7),
(12, '2020_09_26_054734_create_visions_table', 8),
(13, '2020_09_26_073608_create_slides_table', 9),
(14, '2020_09_26_151300_create_posts_table', 10),
(15, '2020_09_26_172303_create_posts_table', 11),
(16, '2020_09_26_175321_create_images_table', 12),
(17, '2020_09_26_175652_create_images_table', 13),
(18, '2020_09_26_180131_create_posts_table', 14),
(19, '2020_09_26_183143_create_images_table', 15),
(20, '2020_09_26_183344_create_slides_table', 16),
(21, '2020_09_26_183746_create_files_table', 17),
(22, '2020_09_27_082802_create_servics_table', 18),
(23, '2020_09_27_165533_create_fileupload_table', 19),
(24, '2020_09_27_172727_create_fileuploads_table', 20),
(25, '2020_09_27_174118_create_slides_table', 21),
(26, '2020_09_27_174729_create_sliders_table', 22),
(27, '2020_09_28_052246_create_uploaders_table', 23),
(28, '2020_09_28_063932_create_posts_table', 24),
(29, '2020_09_28_064320_create_posts_table', 25),
(30, '2020_09_28_065439_create_uploaders_table', 26),
(31, '2020_09_28_065649_create_uploaders_table', 27),
(32, '2020_09_28_070008_create_uploaders_table', 28),
(33, '2020_09_28_070135_create_uploaders_table', 29),
(34, '2020_09_28_074149_create_slids_table', 30),
(35, '2020_09_28_103637_create_slider1s_table', 31),
(36, '2020_09_28_104359_create_slider2s_table', 32),
(37, '2020_09_28_111656_create_service1s_table', 33),
(38, '2020_09_28_112145_create_service2s_table', 34),
(39, '2020_09_28_113303_create_service1s_table', 35);

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`id`, `heading`, `details`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'OUR MISSION', 'We want to expand globally and share the common principles of honesty, integrity and value creation. We want to support and create employment opportunities to support humanities.', NULL, '2020-09-26 00:41:00', '2020-10-03 05:01:04');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scuba_divings`
--

CREATE TABLE `scuba_divings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service1s`
--

CREATE TABLE `service1s` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servics`
--

CREATE TABLE `servics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider1s`
--

CREATE TABLE `slider1s` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider1s`
--

INSERT INTO `slider1s` (`id`, `image_url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'slides/5f71bd6837e29.jpg', '2020-09-28 05:39:36', '2020-09-28 05:39:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider2s`
--

CREATE TABLE `slider2s` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider2s`
--

INSERT INTO `slider2s` (`id`, `image_url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'slides/5f71c0bf1180d.jpg', '2020-09-28 05:53:51', '2020-09-28 06:46:40', '2020-09-28 06:46:40'),
(2, 'slides/5f71cd2924d6b.jpg', '2020-09-28 06:46:49', '2020-09-28 06:46:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slids`
--

CREATE TABLE `slids` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slids`
--

INSERT INTO `slids` (`id`, `image_url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'slides/5f71a62f50473.jpg', '2020-09-28 04:00:31', '2020-09-28 04:55:54', '2020-09-28 04:55:54'),
(6, 'slides/5f71a6b1a77ca.jpg', '2020-09-28 04:02:41', '2020-09-28 04:12:49', '2020-09-28 04:12:49'),
(7, 'slides/5f71a741c3dfc.jpg', '2020-09-28 04:05:05', '2020-09-28 04:12:44', '2020-09-28 04:12:44'),
(8, 'slides/5f71b2c62c454.jpg', '2020-09-28 04:54:14', '2020-09-28 04:55:51', '2020-09-28 04:55:51'),
(9, 'slides/5f71b33109050.jpg', '2020-09-28 04:56:01', '2020-09-28 06:46:08', '2020-09-28 06:46:08'),
(10, 'slides/5f71b33a13fbd.jpg', '2020-09-28 04:56:10', '2020-09-28 05:09:46', '2020-09-28 05:09:46'),
(11, 'slides/5f71baf2765e0.jpg', '2020-09-28 05:29:06', '2020-09-28 06:46:14', '2020-09-28 06:46:14'),
(12, 'slides/5f71cd1031180.jpg', '2020-09-28 06:46:24', '2020-09-28 06:46:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uploaders`
--

CREATE TABLE `uploaders` (
  `id` int(10) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uploaders`
--

INSERT INTO `uploaders` (`id`, `heading`, `details`, `image_url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(14, 'BEACH TRIP', 'Enjoy hiking on the majestic sand dunes in Dammam, Saudi Arabia. Adventure Khobar organizes hiking trips and lets you experience Enjoy hiking on the majestic sand dunes in Dammam, Saudi Arabia. Adventure Khobar organizes hiking trips and lets you experience Enjoy hiking on the majestic sand dunes in Dammam, Saudi Arabia. Adventure Khobar organizes hiking trips and lets you experience Enjoy hiking on the majestic sand dunes in Dammam, Saudi Arabia. Adventure Khobar organizes hiking trips and lets you experience Enjoy hiking on the majestic sand dunes in Dammam, Saudi Arabia. Adventure Khobar organizes hiking trips and lets you experience Enjoy hiking on the majestic sand dunes in Dammam, Saudi Arabia. Adventure Khobar organizes hiking trips and lets you experience Enjoy hiking on the majestic sand dunes in Dammam, Saudi Arabia. Adventure Khobar organizes hiking trips and lets you experience Enjoy hiking on the majestic sand dunes in Dammam, Saudi Arabia. Adventure Khobar organizes hiking trips and lets you experience', '5f7311c2f15df.png', '2020-09-29 05:51:47', '2020-09-30 13:19:12', '2020-09-30 13:19:12'),
(15, 'Farm Trip', 'Join our lush green farm trip where you will be able to pick your own fresh vegetables in the field! This tour takes 45 min to 2 hours.  Remember to wear closed-toe shoes as you will be walking through the fields which may be muddy and uneven.  Also, the wagon ride and fields are not shaded, so hats and sunscreen are recommended.  Prices to be decided by number of Person', '5f731a8e115a3.jpg', '2020-09-29 06:29:18', '2020-09-29 06:29:18', NULL),
(16, 'Scuba Diving', 'Scuba Diving is an incredible experience of lifetime, and most divers never forget it. Not only is it both challenging and rewarding at the same time, it can also leave you completely breathless. The beauty of the ocean looks like a fairytale and is a life changing experience. Let\'s break the boredom and experience the diving in an Arabian Gulf. The activity is open for everyone and Its an experimental dive called DSD \"Discover Scuba Diving\" with a coach to give you instructions and basic training before you dive in with him to the sea. The activity can be done from 10 years old onwards.  It\'s done in a specific location where you can see different type of fish and some man-made towers are installed under the sea. The view is simply breathtaking. All equipment gear etc. will be provided. You will also get pictures and videos and make wonderful memories.  Charges Per Person:300 SR includes (videos & pictures)', '5f731ab620515.jpg', '2020-09-29 06:29:58', '2020-09-29 06:29:58', NULL),
(17, 'Camel Farm​', 'Let\'s visit camel farm and enjoy the essence of Bedouin hospitality. You can try fresh camel milk and also get an opportunity to know and feed these wonderful animals.  Activity to be booked in advance only.  Prices to be decided by number of Person', '5f731ae21d5b1.jpg', '2020-09-29 06:30:42', '2020-09-29 06:30:42', NULL),
(18, 'Camel Riding', 'Camel Riding in the desert is one of the most unforgettable experiences in life. Our Adventure Khobar team will be assisting you during the trip to live an enjoyable experience.  Prices to be decided by number of Person', '5f731b02b8cf6.jpg', '2020-09-29 06:31:14', '2020-09-29 06:31:14', NULL),
(19, 'Paragliding or Paramotoring', 'Let\'s go for a lifetime experience of paragliding. Parachute is controlled by Pilot and you can sit, relax and enjoy the breathtaking view of the desert. Trip will be confirmed as per wind conditions.  Charges Per Person:200 SR', '5f731b3672c0b.jpg', '2020-09-29 06:32:06', '2020-09-29 06:32:06', NULL),
(20, 'Parasailing', 'Lets enjoy the summer with these adrenaline rush activities.The list of activities are as follows and will be between 10 to 15 minutes each.      Parasailing     Sofa or Banana Boat ride     Jet Skiing  Activities will be arranged accordingly with the number of people. The activity is a good treat for adrenaline Junkies. Charges Per Person: 200 SR', '5f731b70511fe.jpg', '2020-09-29 06:33:04', '2020-09-29 06:33:04', NULL),
(21, 'Desert Safari to Alasfar Lake', 'Alasfar lake is one of the largest lakes in the middle east. The lake is surrounded by beautiful sand dunes and Is home to many migratory birds. The activity includes dune bashing in the desert and to experience breathtaking view of the lake.  Prices to be decided by number of Person', '5f731baee617e.jpg', '2020-09-29 06:34:06', '2020-09-29 06:34:06', NULL);

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
(1, 'bilal hassan', 'bilalhasan251296@gmail.com', NULL, '$2y$10$OYt1ZQJPMoGiJ.dQqdo6iuUmEdiej6GWoUqniGoRS5vHOv0I8WUd6', 'DkP0D86dPHnoYf3LhcyG8SvqM6XVX0ssAzzZVaqG7HLEpRJmazaegXtuv5vY', '2020-09-21 01:03:14', '2020-09-21 01:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `visions`
--

CREATE TABLE `visions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visions`
--

INSERT INTO `visions` (`id`, `heading`, `details`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'OUR VISSION', 'We want to expand globally and share the common principles of honesty, integrity and value creation. We want to support and create employment opportunities to support humanities.', NULL, '2020-09-26 00:51:47', '2020-09-26 12:19:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fileuploads`
--
ALTER TABLE `fileuploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missions`
--
ALTER TABLE `missions`
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
-- Indexes for table `scuba_divings`
--
ALTER TABLE `scuba_divings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service1s`
--
ALTER TABLE `service1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servics`
--
ALTER TABLE `servics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider1s`
--
ALTER TABLE `slider1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider2s`
--
ALTER TABLE `slider2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slids`
--
ALTER TABLE `slids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploaders`
--
ALTER TABLE `uploaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visions`
--
ALTER TABLE `visions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `fileuploads`
--
ALTER TABLE `fileuploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scuba_divings`
--
ALTER TABLE `scuba_divings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service1s`
--
ALTER TABLE `service1s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servics`
--
ALTER TABLE `servics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider1s`
--
ALTER TABLE `slider1s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider2s`
--
ALTER TABLE `slider2s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slids`
--
ALTER TABLE `slids`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `uploaders`
--
ALTER TABLE `uploaders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visions`
--
ALTER TABLE `visions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
