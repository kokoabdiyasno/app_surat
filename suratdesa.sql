-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2023 at 02:24 AM
-- Server version: 5.7.39
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suratdesa`
--

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_26_144113_create_surats_table', 1),
(7, '2023_05_29_121531_create_profils_table', 1);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id`, `judul`, `isi`, `gambar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kata Sambutan Direktur', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus aperiam, laborum maiores exercitationem reprehenderit fuga esse doloribus consequatur, officia perspiciatis eius praesentium commodi animi sed. Laudantium perferendis laborum ipsam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus aperiam, laborum maiores exercitationem reprehenderit fuga esse doloribus consequatur, officia perspiciatis eius praesentium commodi animi sed. Laudantium perferendis laborum ipsam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus aperiam, laborum maiores exercitationem reprehenderit fuga esse doloribus consequatur, officia perspiciatis eius praesentium commodi animi sed. Laudantium perferendis laborum ipsam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus aperiam, laborum maiores exercitationem reprehenderit fuga esse doloribus consequatur, officia perspiciatis eius praesentium commodi animi sed. Laudantium perferendis laborum ipsam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus aperiam, laborum maiores exercitationem reprehenderit fuga esse doloribus consequatur, officia perspiciatis eius praesentium commodi animi sed. Laudantium perferendis laborum ipsam.</p>', '6481368463d48.webp', 'sambutan', '2023-06-02 05:52:33', '2023-06-07 19:01:40'),
(2, 'Sejarah', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus aperiam, laborum maiores exercitationem reprehenderit fuga esse doloribus consequatur, officia perspiciatis eius praesentium commodi animi sed. Laudantium perferendis laborum ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus aperiam, laborum maiores exercitationem reprehenderit fuga esse doloribus consequatur, officia perspiciatis eius praesentium commodi animi sed. Laudantium perferendis laborum ipsam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus aperiam, laborum maiores exercitationem reprehenderit fuga esse doloribus consequatur, officia perspiciatis eius praesentium commodi animi sed. Laudantium perferendis laborum ipsam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus aperiam, laborum maiores exercitationem reprehenderit fuga esse doloribus consequatur, officia perspiciatis eius praesentium commodi animi sed. Laudantium perferendis laborum ipsam. elit. Eum natus aperiam, laborum maiores exercitationem reprehenderit fuga esse doloribus consequatur, officia perspiciatis eius praesentium commodi animi sed. Laudantium perferendis laborum ipsam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus aperiam, laborum maiores exercitationem reprehenderit fuga esse doloribus consequatur, officia perspiciatis eius praesentium commodi animi sed. Laudantium perferendis laborum ipsam.</p>', '6479eb9bb4825.webp', 'sejarah', '2023-06-02 05:52:33', '2023-06-02 06:16:11'),
(3, 'Struktur Organisasi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus aperiam, laborum maiores exercitationem reprehenderit fuga esse doloribus consequatur, officia perspiciatis eius praesentium commodi animi sed. Laudantium perferendis laborum ipsam.', 'default.jpg', 'struktur', '2023-06-02 05:52:33', '2023-06-02 05:52:33'),
(4, 'Visi & Misi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus aperiam, laborum maiores exercitationem reprehenderit fuga esse doloribus consequatur, officia perspiciatis eius praesentium commodi animi sed. Laudantium perferendis laborum ipsam.', 'default.jpg', 'visi-misi', '2023-06-02 05:52:33', '2023-06-02 05:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `surats`
--

CREATE TABLE `surats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci,
  `upload_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berkas_pendukung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `alasan_ditolak` text COLLATE utf8mb4_unicode_ci,
  `hasil_surat` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', NULL, '$2y$10$32btitxZCPrIkBUsT/ChyeTfdqdThSTaXvETtnzEMbOi2tAsOhmou', NULL, '2023-06-04 20:53:47', '2023-06-06 06:30:13'),
(3, 'Operator', 'operator@gmail.com', NULL, '$2y$10$WI.hn.LbjaohjjWgIFA6iO9WsEFCCLHiLtI7VhhTEIbpswtcSI9RO', NULL, '2023-06-06 06:45:07', '2023-06-06 06:45:07');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surats`
--
ALTER TABLE `surats`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surats`
--
ALTER TABLE `surats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
