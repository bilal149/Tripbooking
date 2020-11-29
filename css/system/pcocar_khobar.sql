-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 09, 2020 at 06:22 AM
-- Server version: 10.3.23-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcocar_khobar`
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
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `welcome`, `heading`, `sub_heading`, `details`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Welcome To', 'Adventure Khobar', 'Dubai\'s top Desert trip Company, Adventure Khobar', 'Adventure Khobar is a Saudi Based establishment in the Eastern Province of Saudi Arabia. We provide a platform for experiencing recreational activities in the Eastern province of Saudi Arabia. We aim to bridge gaps by bringing communities together and most of our activities are run by local Saudis.\r\n\r\nWhether you are single, couple, family or group, a memorable trip is always a good choice.\r\n\r\nOur pillar of strength is quality, safety and affordability.', NULL, '2020-10-05 07:16:16', '2020-10-05 07:16:16');

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
(4, '2020_09_26_051224_create_abouts_table', 1),
(5, '2020_09_26_053244_create_missions_table', 1),
(6, '2020_09_26_054734_create_visions_table', 1),
(7, '2020_09_26_183746_create_files_table', 1),
(8, '2020_09_27_082802_create_servics_table', 1),
(9, '2020_09_28_070135_create_uploaders_table', 1),
(10, '2020_09_28_074149_create_slids_table', 1),
(11, '2020_09_28_103637_create_slider1s_table', 1),
(12, '2020_09_28_104359_create_slider2s_table', 1),
(13, '2020_09_28_113303_create_service1s_table', 1),
(14, '2020_10_05_121241_create_abouts_table', 2),
(15, '2020_10_05_122153_create_missions_table', 3),
(16, '2020_10_05_122607_create_visions_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`id`, `heading`, `details`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'OUR MISSION', 'Our mission is to deliver quality affordable activities to the individuals and at the same time to ensure value of money. We have activities to offer for every season and are passionate in making the lives of people more joyful. We make sure that nobody stands alone and is taken care of well. We are committed in upgrading the skills of local talent and providing employment opportunities.', NULL, '2020-10-05 07:27:25', '2020-10-05 07:27:25');

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
(1, 'slides/5f7b09aec0ab6.jpg', '2020-10-05 06:55:26', '2020-10-05 06:55:26', NULL);

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
(1, 'slides/5f7b09b8bc790.jpg', '2020-10-05 06:55:36', '2020-10-05 06:55:36', NULL);

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
(1, 'slides/5f7b09a423180.jpg', '2020-10-05 06:55:16', '2020-10-05 06:55:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uploaders`
--

CREATE TABLE `uploaders` (
  `id` int(10) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uploaders`
--

INSERT INTO `uploaders` (`id`, `heading`, `details`, `image_url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Scuba Diving', 'Scuba Diving is an incredible experience of lifetime, and most divers never forget it. Not only is it both challenging and rewarding at the same time, it can also leave you completely breathless.', '5f7b0a3c76489.png', '2020-10-05 06:57:48', '2020-10-05 07:16:57', '2020-10-05 07:16:57'),
(2, 'Scuba Diving', 'Scuba Diving is an incredible experience of lifetime, and most divers never forget it. Not only is it both challenging and rewarding at the same time, it can also leave you completely breathless. The beauty of the ocean looks like a fairytale and is a life changing experience.  Let\'s break the boredom and experience the diving in an Arabian Gulf. The activity is open for everyone and Its an experimental dive called DSD \"Discover Scuba Diving\" with a coach to give you instructions and basic training before you dive in with him to the sea. The activity can be done from 10 years old onwards.  It\'s done in a specific location where you can see different type of fish and some man-made towers are installed under the sea. The view is simply breathtaking.  All equipment gear etc. will be provided. You will also get pictures and videos and make wonderful memories.  Charges Per Person:300 SR includes (videos & pictures)', '5f7b0f068a465.jpg', '2020-10-05 07:18:14', '2020-10-05 07:18:14', NULL),
(3, 'DAMAM TRIP', 'The city tour is the best way to explore the cultural and modern outlook of the Eastern Province of Saudi Arabia. The city tour includes visit to the following places as below and covers pick up and drop from the respective places.', '5f7b11c29b0f3.jpg', '2020-10-05 07:29:54', '2020-10-05 07:29:54', NULL),
(4, 'Desert Safari to Alasfar Lake', 'Alasfar lake is one of the largest lakes in the middle east. The lake is surrounded by beautiful sand dunes and Is home to many migratory birds. The activity includes dune bashing in the desert and to experience breathtaking view of the lake.  Prices to be decided by number of Person', '5f7b11ec36518.jpg', '2020-10-05 07:30:36', '2020-10-05 07:30:36', NULL),
(5, 'Parasailing', 'Lets enjoy the summer with these adrenaline rush activities.The list of activities are as follows and will be between 10 to 15 minutes each.      Parasailing     Sofa or Banana Boat ride     Jet Skiing  Activities will be arranged accordingly with the number of people. The activity is a good treat for adrenaline Junkies.  Charges Per Person: 200 SR', '5f7b120c5bb85.jpg', '2020-10-05 07:31:08', '2020-10-05 07:31:08', NULL),
(6, 'Paragliding or Paramotoring', 'Let\'s go for a lifetime experience of paragliding. Parachute is controlled by Pilot and you can sit, relax and enjoy the breathtaking view of the desert. Trip will be confirmed as per wind conditions.  Charges Per Person:200 SR', '5f7b123188925.jpg', '2020-10-05 07:31:45', '2020-10-05 07:31:45', NULL),
(7, 'Al Uqair Port', 'Al Uqair port in Alhasa on the Arab Gulf coast is one of the most important historical sites in KSA and was the first sea port. It was also the main port for consecutive civilizations in Alhasa even until recent times. Join our Half day tour to Uqair port.  Prices to be decided by number of Person', '5f7b124810d95.jpg', '2020-10-05 07:32:08', '2020-10-09 10:17:48', '2020-10-09 10:17:48'),
(8, 'Quad bikes or dune buggies:', 'Embrace the ultimate off-road driving adventure with an exhilarating quad bike experience. Navigate your way through sand dunes bracing yourself for every bump and twist in the road. Whether you’re a seasoned quad biker or you’re a driving enthusiast keen to learn more, a quad bike ride is an alternative driving experience you won’t forget!  Prices to be decided by number of Person', '5f7b12683b6a2.jpg', '2020-10-05 07:32:40', '2020-10-05 07:32:40', NULL),
(9, 'Algarah or Judas Caves Trip:', 'Enjoy our day trip to one of UNESCO Heritage sites in Saudi Arabia. Pick up and drop will be at your respective destinations. The caves look beautiful and are cool inside during the summer and warm during winters. Trip can be arranged solo or for groups too.  Prices to be decided by number of Person', '5f7b12bd4153e.jpg', '2020-10-05 07:34:05', '2020-10-05 07:34:05', NULL),
(10, 'Camel Riding:', 'Camel Riding in the desert is one of the most unforgettable experiences in life. Our Adventure Khobar team will be assisting you during the trip to live an enjoyable experience.  Prices to be decided by number of Person', '5f7b12d9d34a8.jpg', '2020-10-05 07:34:33', '2020-10-05 07:34:33', NULL),
(11, 'Archery and Air gun:', 'Archery and Air gun shooting are both fun activities for the whole family to enjoy. The challenge that comes with shooting is a true thrill.  We facilitate recreational archery and air gun just for recreational purposes only.  Prices to be decided by number of Person', '5f7b1302c7406.jpg', '2020-10-05 07:35:14', '2020-10-05 07:35:14', NULL),
(12, 'Resort Trips:', 'Relax and enjoy the solace in a lush green resort that brings cheers to the senses. You can relax by the pool and enjoy the mouthwatering food. The activity is suitable for family, groups or companies  Prices to be decided by number of Person', '5f7b132ea9657.jpg', '2020-10-05 07:35:58', '2020-10-05 07:35:58', NULL),
(13, 'Dunes Bashing Trip:', 'Dune bashing is a highly thrilling and adrenaline-pumping activity, that must be done with the utmost care and safety. A typical dune bashing experience begins with picking you up from your hotel or meeting point and driving you straight to the desert. After deflating the tires and meeting up with the other groups of people (taking the tour), your dune bashing adventure begins. Depending on what you choose and your comfort level, the dune bashing goes on for about one hour and you will experience views of beautiful majestic sand dunes.  Prices to be decided by number of Person  Beach Trips: Relax yourself or with friends in a beautiful beach. Volley ball, jet skiing and speed boat is available with extra cost.  Prices to be decided by number of Person', '5f7b1388d12fd.jpg', '2020-10-05 07:37:28', '2020-10-09 09:23:01', '2020-10-09 09:23:01'),
(14, 'Boat Trip', 'Sail through the pristine waters in Arabian sea and enjoy the breathtaking view of the ocean. Our boat covers to visit one of Islands known as Jana or Juraid.You can snorkel and experience the beautiful aquatic life. Scuba diving to be arranged accordingly as per the number of people. We arrange boat trips from small to bigger groups.  Prices to be decided by number of Person', '5f7bf45f22a32.jpg', '2020-10-05 23:36:47', '2020-10-05 23:36:47', NULL),
(15, 'Hiking Trip', 'Enjoy hiking on the majestic sand dunes in Dammam, Saudi Arabia. Adventure Khobar organizes hiking trips and lets you experience the breathtaking view of Sand Dunes. Whether you are a solo traveler, group, family, or a company, we let you experience the real hospitality of the Eastern Province of Saudi Arabia.  Prices to be decided by number of Person', '5f7bf47d93652.jpg', '2020-10-05 23:37:17', '2020-10-05 23:37:17', NULL),
(16, 'Farm Trip', 'Join our lush green farm trip where you will be able to pick your own fresh vegetables in the field! This tour takes 45 min to 2 hours.  Remember to wear closed-toe shoes as you will be walking through the fields which may be muddy and uneven.  Also, the wagon ride and fields are not shaded, so hats and sunscreen are recommended.  Prices to be decided by number of Person', '5f7bf49968716.jpg', '2020-10-05 23:37:45', '2020-10-05 23:40:29', '2020-10-05 23:40:29'),
(17, 'Falcon Show', 'The falcon show is part of the Bedouin Collection of experiences and incorporates many aspects of Bedouin life into a fully immersive experience. You will get to see how the falconers train these majestic creatures to fly and swoop for lures. Once the falcon catches the lure in the sky, they are rewarded with their favorite snack, usually pigeon. After the show, guests get great photo opportunities holding the falcon on the glove.  Prices to be decided by number of Person', '5f7bf4d4dd738.jpg', '2020-10-05 23:38:44', '2020-10-05 23:38:44', NULL),
(18, 'Camel Farm​', 'Let\'s visit camel farm and enjoy the essence of Bedouin hospitality. You can try fresh camel milk and also get an opportunity to know and feed these wonderful animals.  Activity to be booked in advance only.  Prices to be decided by number of Person', '5f7bf53716d63.jpg', '2020-10-05 23:40:23', '2020-10-05 23:40:23', NULL),
(19, 'Farm Trip', 'Join our lush green farm trip where you will be able to pick your own fresh vegetables in the field! This tour takes 45 min to 2 hours.  Remember to wear closed-toe shoes as you will be walking through the fields which may be muddy and uneven.  Also, the wagon ride and fields are not shaded, so hats and sunscreen are recommended.  Prices to be decided by number of Person', '5f7bf55751b69.jpg', '2020-10-05 23:40:55', '2020-10-05 23:40:55', NULL),
(20, 'Horse Riding', 'Lets ride horses in the desert in an open space or stable with trainers supervision. The distance to the horse stable is 20 minutes from Khobar. The activity is suitable for everyone. Riding is available daily and for individual basis so as to ensure the following of social distancing rules. Riding to be booked in advance only.   Charges Per Person: 150 SR for an hour', '5f7bf58294899.JPG', '2020-10-05 23:41:38', '2020-10-05 23:41:38', NULL),
(21, 'Parasailing', 'Lets enjoy the summer with these adrenaline rush activities.The list of activities are as follows and will be between 10 to 15 minutes each.      Parasailing     Sofa or Banana Boat ride     Jet Skiing  Activities will be arranged accordingly with the number of people. The activity is a good treat for adrenaline Junkies.  Charges Per Person: 200 SR', '5f7bf5a2bd299.jpg', '2020-10-05 23:42:10', '2020-10-05 23:42:10', NULL),
(22, 'Bedouin Desert Camping', 'One of the things that you shouldn\'t miss if you ever visit Saudi Arabia is Bedouin desert camping. The camp is located in Dammam and is 40 minutes\' drive from the city. The camp is surrounded by beautiful majestic sand dunes. Enjoy the fresh live BBQ and you may taste fresh camel milk.  Guest can sleep inside the tent, or just outside alongside the fire and enjoy storytelling, music, singing and dancing.   Prices to be decided by number of Person', '5f7bf6276aa0f.jpg', '2020-10-05 23:44:23', '2020-10-05 23:44:23', NULL),
(23, 'Alhasa Tour', 'Alhasa has been listed as “UNESCO WORLD HERITAGE SITE.\" The place is well known for desert oasis and historical places. The city tour includes visit to the following places as below and covers pick up and drop from the respective places.      Ibrahim Palace     Jawatha Mosque     Alkasaria Souk     Alkara Caves  Prices to be decided by number of Person', '5f7bf6c0dc47f.jpg', '2020-10-05 23:46:56', '2020-10-05 23:46:56', NULL),
(24, 'Al-Murjan Island', 'Tarot Castle     Heritage Village Museum & Restaurant     Halfmoon Bay     King Abdul Aziz Cultural Centre  Prices to be decided by number of Person', '5f7bf6e58a440.jpg', '2020-10-05 23:47:33', '2020-10-09 09:10:32', '2020-10-09 09:10:32'),
(25, 'Dunes Bashing Trip:', 'Dune bashing is a highly thrilling and adrenaline-pumping activity, that must be done with the utmost care and safety. A typical dune bashing experience begins with picking you up from your hotel or meeting point and driving you straight to the desert. After deflating the tires and meeting up with the other groups of people (taking the tour), your dune bashing adventure begins. Depending on what you choose and your comfort level, the dune bashing goes on for about one hour and you will experience views of beautiful majestic sand dunes. Prices to be decided by number of Person Beach Trips: Relax yourself or with friends in a beautiful beach. Volley ball, jet skiing and speed boat is available with extra cost. Prices to be decided by number of Person', '5f7ff2d104d05.webp', '2020-10-09 09:19:13', '2020-10-09 09:19:13', NULL),
(26, 'Al Uqair port:', 'Al Uqair port in Alhasa on the Arab Gulf coast is one of the most important historical sites in KSA and was the first sea port. It was also the main port for consecutive civilizations in Alhasa even until recent times. Join our Half day tour to Uqair port. Prices to be decided by number of Person', '5f8000b741f99.jpg', '2020-10-09 10:18:31', '2020-10-09 10:18:31', NULL);

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
(1, 'Bilal Hassan', 'bilalhasan251296@gmail.com', NULL, '$2y$10$cIvsGgVS5dUugu/BIM7z7O0xKeZw.Sg4JW7YRQhKmSd6Q0uYP.3Nm', NULL, '2020-10-05 06:54:50', '2020-10-05 06:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `visions`
--

CREATE TABLE `visions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visions`
--

INSERT INTO `visions` (`id`, `heading`, `details`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'OUR VISSION', 'We want to expand globally and share the common principles of honesty, integrity and value creation. We want to support and create employment opportunities to support humanities.', NULL, '2020-10-05 07:27:48', '2020-10-05 07:27:48');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slids`
--
ALTER TABLE `slids`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uploaders`
--
ALTER TABLE `uploaders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
