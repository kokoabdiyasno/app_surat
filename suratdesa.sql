-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 21, 2023 at 02:07 PM
-- Server version: 8.0.33-0ubuntu0.22.04.4
-- PHP Version: 8.1.2-1ubuntu2.13

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
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
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
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id`, `judul`, `isi`, `gambar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kata Sambutan Kepala Desa', '<p>Assalamualaikum warahmatullahi wabarakatuh.</p><p>Salam sejahtera untuk kita semua.</p><p>Saya selaku kepala desa, mengucapkan terima kasih yang sebesar-besarnya kepada semua pihak yang telah berpartisipasi dalam pembuatan sistem informasi pelayanan surat ini. Semoga sistem ini dapat berguna dengan semestinya dan memberikan manfaat yang maksimal untuk kemajuan desa kita tercinta.</p><p>Saya mengharapkan partisipasi aktif dari semua pihak dalam pelayanan ini dan penentuan prioritas pembangunan desa kita. Semoga hasil dari sistem pelayanan surat ini dapat memberikan manfaat yang besar bagi masyarakat desa kita.</p><p>Wassalamualaikum warahmatullahi wabarakatuh.Terima kasih.</p>', '648a70c35c5ff.webp', 'sambutan', '2023-06-02 05:52:33', '2023-06-14 19:01:27'),
(2, 'Sejarah', '<p><strong>Asal Usul Desa Kerta Jaya</strong></p><p>Kabar pada abad ke-18 kilo kulu Sungai Sake, ada empat dusun kecil. Pada zaman itu dusun kecil disebut Rompok, pada zaman sekarang disebut dengan Talang. Untuk Talang paling ulu Namanya Talang Tanjung, untuk Talang paling Ilo Namanya Talang Pandan, dan untuk Talang yang berada di tengah-tengah Namanya Talang Sekecik dan Talang Lubuk Kucing.</p><p>Menurut cerita nenek puyang(moyang) atau cerita orang tua-tua dulu. Pada zaman itu dunia miskin, mengambil air memakai belaleng, buah keduduk jadi makanan, pandan musang jadi campur air. Bujang mau tandang kerumah Gadis, kilo kulu naik perahu. Pada zaman itu juga ada satu orang yang jagoan, dia pintar bermain Kuntau, terkenal juga jago Berpance, umur masih mudah sangat jagoan untuk membela kebenaran. Sudah tua menjadi Ulama dan Panutan sampai sekarang jadi keramat di Desa Kertayu. Orang Kertayu menyebutnya Puyang Burung Jauh dan Orang Kerta Jaya menyebutnya Puyang Ulu Dusun. Untuk nama aslinya adalah Puyang Tumak Miah. Sebelum ajalnya datang, berpesanlah Puyang Tumak Miah kepada Rompok Talang yang berada di pinggiran Sungai Sake. Isi dari pesannya adalah dalam waktu sebentar lagi akan banyak musuh datang, bangsa dari Cina dan Belanda yang mau menjajah negeri kita. Siapkan payung sebelum hujan kalo Bersatu kita teguh kalo bercerai kita runtuh. Pesan dari Puyang Tumah Miah tersebut sangat berpengaruh. Sehingga empat Rompok Talang yang berada di pinggiran Sungai Sake bergabung menjadi satu desa yang lebih besar, maka jadilah Desa Kerta Jaya. Menurut bahasa pada zaman itu, orang menyebutnya bahasa Ulu. Kerta artinya Janji, sedangkan Jaya artinya Damai. Maka dapat disimpulkan Kerta Jaya mempunyai arti Perjanjian Damai.</p><p>Masuk pada zaman pemerintahan setiap kampung ada Pengawah, setiap Dusun/Desa ada Kriya, setiap Mergo ada Pesirah. Bagitu juga dengan Desa Kerta Jaya sudah terlulis didalam sejarah. Pertama sekali menjadi Kriya Namanya Kriya Jahapi, Kriya kedua Kriya Lanang, Kriya ketiga Kriya Muhid, Kriya keempat Kriya Pasai, Kriya kelima Kriya Usup, Kriya keenam Kriya Semir, Kriyah ketujuh Kriya Amun, Kriya kedelapan Kriya Umar, Kriya kesembilan Kriya Abdullah Ajad. Nama Kriya diganti menjadi Kepala Desa yang biasa disingkat Kades. Untuk Kades Pertama Desa Kerta Jaya, namanya Abdullah Ajad, Kades kedua Abdullah Ansori, Kades ketiga M. Rusli, Kades keempat M. Syukur, Kades kelima Al-Aziz, Spd.i, Kades keenam atau Kades sekarang kembali lagi dipimpin oleh Bapak M. Syukur.</p><p>Penutur: Sahibir</p>', '648a7d846adc1.webp', 'sejarah', '2023-06-02 05:52:33', '2023-06-14 19:55:00'),
(3, 'Struktural Perangkat Desa Kerta Jaya', '<p>Desa Kerta Jaya mempunyai struktural pemerintahan dari:</p><ol><li>Kepala Desa</li><li>Sekretaris Desa</li><li>Kaur(Kepala Urusan)</li><li>Kasi(Kepala Seksi)</li><li>Kadus(Kepal Dusun),</li><li>RT(Rukun Tetangga)&nbsp;</li></ol>', '648a7a8fb51e7.webp', 'struktur', '2023-06-02 05:52:33', '2023-06-14 19:49:21'),
(4, 'Visi & Misi', '<p>VISI : TERWUJUDNYA PENYELENGARAAN PEMERINTAH DESA YANG SIAP BERSAING,DALAM PEMBANGUNAN,PEMBERDAYAAN MASYARAKAT DAN PEMBINANAN MASYARAKAT YANG BERKUALITAS</p><p>MISI :<br />1. MENINGKATKAN TATA PENYELENGARAAN PELAYANAN MASYARKAT DAN PEMERINTAHAN DESA.<br />2. MENINGKATKAN PEMBANGUNAN SARANA DAN PRASARANA DIDALAM DESA.<br />3. MENINGKATKAN PEMBINAAN MASYARAKAT DESA</p>', '648a7d674bc75.webp', 'visi-misi', '2023-06-02 05:52:33', '2023-06-14 19:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `surats`
--

CREATE TABLE `surats` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `upload_kk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `berkas_pendukung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `alasan_ditolak` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `hasil_surat` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int DEFAULT '2',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', NULL, '$2y$10$32btitxZCPrIkBUsT/ChyeTfdqdThSTaXvETtnzEMbOi2tAsOhmou', NULL, 1, '2023-06-04 20:53:47', '2023-06-06 06:30:13'),
(3, 'User 1', 'user1@gmail.com', NULL, '$2y$10$M4ObN6aY6rIRJmqVoj0EjOe/QPwR2P3gJixYyho2xjhH41E8zk/HS', NULL, 2, '2023-06-06 06:45:07', '2023-07-13 11:55:53'),
(12, 'User 2', 'user2@gmail.com', NULL, '$2y$10$32btitxZCPrIkBUsT/ChyeTfdqdThSTaXvETtnzEMbOi2tAsOhmou', NULL, 2, '2023-08-20 21:04:58', '2023-08-20 21:04:58'),
(13, 'operator', 'operator@gmail.com', NULL, '$2y$10$KYj.3Dk1MInQI1xHpc.Lq.zX9FeDDsL0UJYr7CfsoyX6WVvpXyfPm', NULL, 1, '2023-08-20 21:12:44', '2023-08-20 21:12:44');

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surats`
--
ALTER TABLE `surats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
