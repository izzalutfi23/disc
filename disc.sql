-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 08:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disc`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_31_055044_create_nomor_table', 2),
(5, '2020_02_01_141855_cretae_soal_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `nomor`
--

CREATE TABLE `nomor` (
  `nomor` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nomor`
--

INSERT INTO `nomor` (`nomor`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL),
(2, NULL, NULL),
(3, NULL, NULL),
(4, NULL, NULL),
(5, NULL, NULL),
(6, NULL, NULL),
(7, NULL, NULL),
(8, NULL, NULL),
(9, NULL, NULL),
(10, NULL, NULL),
(11, NULL, NULL),
(12, NULL, NULL),
(13, NULL, NULL),
(14, NULL, NULL),
(15, NULL, NULL),
(16, NULL, NULL),
(17, NULL, NULL),
(18, NULL, NULL),
(19, NULL, NULL),
(20, NULL, NULL),
(21, NULL, NULL),
(22, NULL, NULL),
(23, NULL, NULL),
(24, NULL, NULL);

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
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `nomor` int(11) NOT NULL,
  `soal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`nomor`, `soal`, `created_at`, `updated_at`) VALUES
(1, '[{\"pilihan\":\"Mudah bergaul, ramah, menyenangkan\",\"keym\":\"S\",\"keyl\":\"S\"},{\"pilihan\":\"Penuh kepercayaan, percaya kepada orang lain\",\"keym\":\"I\",\"keyl\":\"I\"},{\"pilihan\":\"Petualan, pengambil resiko\",\"keym\":\"B\",\"keyl\":\"D\"},{\"pilihan\":\"Toleran, penuh hormat\",\"keym\":\"C\",\"keyl\":\"C\"}]', '2020-02-04 20:13:05', '2020-02-04 20:13:05'),
(2, '[{\"pilihan\":\"Hasil adalah yang terpenting\",\"keym\":\"D\",\"keyl\":\"D\"},{\"pilihan\":\"Mengerjakan Dengan Benar, Ketepatan sangat penting\",\"keym\":\"C\",\"keyl\":\"C\"},{\"pilihan\":\"Menikmati Proses\",\"keym\":\"B\",\"keyl\":\"I\"},{\"pilihan\":\"Mengerjakan Bersama-sama\",\"keym\":\"B\",\"keyl\":\"S\"}]', '2020-02-04 20:16:07', '2020-02-04 20:16:07'),
(3, '[{\"pilihan\":\"Pendidikan Kebudayaan\",\"keym\":\"B\",\"keyl\":\"C\"},{\"pilihan\":\"Pencapaian, Penghargaan\",\"keym\":\"D\",\"keyl\":\"D\"},{\"pilihan\":\"Keselamatan, Keamanan\",\"keym\":\"S\",\"keyl\":\"S\"},{\"pilihan\":\"Sosilasisasi, Pertemuan Kelompok\",\"keym\":\"I\",\"keyl\":\"B\"}]', '2020-02-04 20:19:01', '2020-02-04 20:19:01'),
(4, '[{\"pilihan\":\"Lembut dalam tutur kata, Pendiam\",\"keym\":\"C\",\"keyl\":\"B\"},{\"pilihan\":\"Optimis, Berpikir ke masa depan\",\"keym\":\"D\",\"keyl\":\"D\"},{\"pilihan\":\"Suka menjadi pusat perhatian, Mudah bersosialisasi\",\"keym\":\"B\",\"keyl\":\"I\"},{\"pilihan\":\"Pendamai, Menyukai keseimbangan\",\"keym\":\"S\",\"keyl\":\"S\"}]', '2020-02-04 20:21:13', '2020-02-04 20:21:13'),
(5, '[{\"pilihan\":\"Tidak tergantung apapun\",\"keym\":\"B\",\"keyl\":\"C\"},{\"pilihan\":\"Akan membeli berdasarkan hasrat\",\"keym\":\"D\",\"keyl\":\"D\"},{\"pilihan\":\"Akan menunggu, Tidak ada tekanan\",\"keym\":\"S\",\"keyl\":\"S\"},{\"pilihan\":\"Akan membelanjakan sesuai keinginan\",\"keym\":\"I\",\"keyl\":\"B\"}]', '2020-02-04 20:22:57', '2020-02-04 20:22:57'),
(6, '[{\"pilihan\":\"Mengambil tanggung jawab, Terlibat langsung\",\"keym\":\"D\",\"keyl\":\"D\"},{\"pilihan\":\"Senang berteman, Antusias\",\"keym\":\"B\",\"keyl\":\"I\"},{\"pilihan\":\"Mudah ditebak, Konsisten\",\"keym\":\"B\",\"keyl\":\"S\"},{\"pilihan\":\"Berhati-hati, Waspada\",\"keym\":\"C\",\"keyl\":\"B\"}]', '2020-02-04 20:25:03', '2020-02-04 20:25:03'),
(7, '[{\"pilihan\":\"Memotivasi orang lain\",\"keym\":\"I\",\"keyl\":\"I\"},{\"pilihan\":\"Berjuang mencapai kesempurnaan\",\"keym\":\"B\",\"keyl\":\"C\"},{\"pilihan\":\"Menyukai menjadi bagian dari kelompok\",\"keym\":\"B\",\"keyl\":\"S\"},{\"pilihan\":\"Ingin menggapai hasil\\/target\",\"keym\":\"D\",\"keyl\":\"B\"}]', '2020-02-04 20:27:48', '2020-02-04 20:27:48'),
(8, '[{\"pilihan\":\"Ramah, Teman yang menyenangkan\",\"keym\":\"S\",\"keyl\":\"B\"},{\"pilihan\":\"Unik, Bosan dengan rutinitas\",\"keym\":\"B\",\"keyl\":\"I\"},{\"pilihan\":\"Sering merubah sesuatu\",\"keym\":\"D\",\"keyl\":\"D\"},{\"pilihan\":\"Menginginkan kepastian\",\"keym\":\"C\",\"keyl\":\"C\"}]', '2020-02-04 20:30:07', '2020-02-04 20:30:07'),
(9, '[{\"pilihan\":\"Tidak mudah dikalahkan\",\"keym\":\"D\",\"keyl\":\"D\"},{\"pilihan\":\"Melakukan seperti yang diperintahkan\",\"keym\":\"S\",\"keyl\":\"B\"},{\"pilihan\":\"Penuh semangat, Gembira\",\"keym\":\"I\",\"keyl\":\"I\"},{\"pilihan\":\"Menghendaki keteraturan, Rapi\",\"keym\":\"B\",\"keyl\":\"C\"}]', '2020-02-04 20:32:29', '2020-02-04 20:32:29'),
(10, '[{\"pilihan\":\"Mudah frustasi\",\"keym\":\"C\",\"keyl\":\"C\"},{\"pilihan\":\"Menyimpan sendiri perasaan dan emosi\",\"keym\":\"S\",\"keyl\":\"S\"},{\"pilihan\":\"Dapat menceritakan kejadian dengan versi saya sendiri\",\"keym\":\"B\",\"keyl\":\"I\"},{\"pilihan\":\"Berani menghadapi pihak oposisi\",\"keym\":\"D\",\"keyl\":\"D\"}]', '2020-02-04 20:35:30', '2020-02-04 20:35:30'),
(11, '[{\"pilihan\":\"Tidak konfrontatif, Mudah menyerah\",\"keym\":\"B\",\"keyl\":\"S\"},{\"pilihan\":\"Sangat perhatian terhadap detil\",\"keym\":\"C\",\"keyl\":\"B\"},{\"pilihan\":\"Mudah berubah pada detik detik terakhir\",\"keym\":\"I\",\"keyl\":\"I\"},{\"pilihan\":\"Penuntu, Gegabah\",\"keym\":\"D\",\"keyl\":\"D\"}]', '2020-02-04 20:37:13', '2020-02-04 20:37:13'),
(12, '[{\"pilihan\":\"Saya akan memimpin mereka\",\"keym\":\"D\",\"keyl\":\"B\"},{\"pilihan\":\"Saya akan mengikuti dengan setia\",\"keym\":\"S\",\"keyl\":\"S\"},{\"pilihan\":\"Saya akan membujuk mereka\",\"keym\":\"I\",\"keyl\":\"I\"},{\"pilihan\":\"Saya akan mendapatkan faktanya\",\"keym\":\"C\",\"keyl\":\"B\"}]', '2020-02-04 20:38:59', '2020-02-04 20:38:59'),
(13, '[{\"pilihan\":\"Lincah, Suka berbicara\",\"keym\":\"S\",\"keyl\":\"S\"},{\"pilihan\":\"Cekatan, Mempunyai keyakinan\",\"keym\":\"D\",\"keyl\":\"I\"},{\"pilihan\":\"Mencoba menjaga keseimbangan\",\"keym\":\"B\",\"keyl\":\"D\"},{\"pilihan\":\"Mencoba mengikuti peraturan\",\"keym\":\"C\",\"keyl\":\"C\"}]', '2020-02-04 20:40:44', '2020-02-04 20:40:44'),
(14, '[{\"pilihan\":\"Menghendaki kemajuan\",\"keym\":\"D\",\"keyl\":\"D\"},{\"pilihan\":\"Mudah puas diri, Merasa terpenuhi\",\"keym\":\"S\",\"keyl\":\"B\"},{\"pilihan\":\"Memperlihatkan perasaan secara terbuka, Ekspresi\",\"keym\":\"I\",\"keyl\":\"B\"},{\"pilihan\":\"Rendah hati, Sederhana\",\"keym\":\"B\",\"keyl\":\"C\"}]', '2020-02-04 20:42:20', '2020-02-04 20:42:20'),
(15, '[{\"pilihan\":\"Memikirkan orang lain terlebih dahulu\",\"keym\":\"S\",\"keyl\":\"S\"},{\"pilihan\":\"Kompetitif, Menyukai tantangan\",\"keym\":\"D\",\"keyl\":\"D\"},{\"pilihan\":\"Optimis, Bersikap positif\",\"keym\":\"I\",\"keyl\":\"I\"},{\"pilihan\":\"Berfikir logis, sistematis\",\"keym\":\"B\",\"keyl\":\"C\"}]', '2020-02-04 20:44:10', '2020-02-04 20:44:10'),
(16, '[{\"pilihan\":\"Dapat mengelola waktu secara efisien\",\"keym\":\"C\",\"keyl\":\"B\"},{\"pilihan\":\"Tergesa-gesa, Merasa tertekan\",\"keym\":\"D\",\"keyl\":\"D\"},{\"pilihan\":\"Lebih mementingkan hal-hal sosial\",\"keym\":\"I\",\"keyl\":\"I\"},{\"pilihan\":\"Menuntaskan apa yang sudah dikerjakan\",\"keym\":\"S\",\"keyl\":\"S\"}]', '2020-02-04 20:45:57', '2020-02-04 20:45:57'),
(17, '[{\"pilihan\":\"Dingin, Pendiam\",\"keym\":\"C\",\"keyl\":\"C\"},{\"pilihan\":\"Bahagia, Riang\",\"keym\":\"I\",\"keyl\":\"I\"},{\"pilihan\":\"Menyenangkan, Baik hati\",\"keym\":\"S\",\"keyl\":\"B\"},{\"pilihan\":\"Tegas, Pemberani\",\"keym\":\"D\",\"keyl\":\"D\"}]', '2020-02-04 20:47:03', '2020-02-04 20:47:03'),
(18, '[{\"pilihan\":\"Menyenangkan orang lain, Ramah\",\"keym\":\"S\",\"keyl\":\"S\"},{\"pilihan\":\"Tertawa terbahak-bahak, enerjik\",\"keym\":\"B\",\"keyl\":\"I\"},{\"pilihan\":\"Berani, Tegas\",\"keym\":\"D\",\"keyl\":\"D\"},{\"pilihan\":\"Tenang, Pendiam\",\"keym\":\"C\",\"keyl\":\"C\"}]', '2020-02-04 20:48:31', '2020-02-04 20:48:31'),
(19, '[{\"pilihan\":\"Menolak perubahan secara mendadak\",\"keym\":\"S\",\"keyl\":\"B\"},{\"pilihan\":\"Cenderung berjanji secara berlebihan\",\"keym\":\"I\",\"keyl\":\"I\"},{\"pilihan\":\"Menarik diri ketika  tertekan\",\"keym\":\"B\",\"keyl\":\"C\"},{\"pilihan\":\"TIdak takut untuk melawan\",\"keym\":\"B\",\"keyl\":\"D\"}]', '2020-02-04 20:50:14', '2020-02-04 20:50:14'),
(20, '[{\"pilihan\":\"Menghabiskan waktu yang berkualitas dengan orang lain\",\"keym\":\"S\",\"keyl\":\"S\"},{\"pilihan\":\"Mempersiapkan masa depan, Mempersiapkan diri\",\"keym\":\"C\",\"keyl\":\"B\"},{\"pilihan\":\"Menyukai petualangan baru\",\"keym\":\"I\",\"keyl\":\"I\"},{\"pilihan\":\"Menikmati penghargaan atas pencapaian\",\"keym\":\"D\",\"keyl\":\"D\"}]', '2020-02-04 20:51:51', '2020-02-04 20:51:51'),
(21, '[{\"pilihan\":\"Menghendaki kekuasaan lebih\",\"keym\":\"B\",\"keyl\":\"D\"},{\"pilihan\":\"Menghendaki kesempatan baru\",\"keym\":\"I\",\"keyl\":\"B\"},{\"pilihan\":\"Menghindari konflik\",\"keym\":\"S\",\"keyl\":\"S\"},{\"pilihan\":\"Menghendaki pentunjuk dan arahan yang jelas\",\"keym\":\"B\",\"keyl\":\"C\"}]', '2020-02-04 20:53:25', '2020-02-04 20:53:25'),
(22, '[{\"pilihan\":\"Motivator yang handal\",\"keym\":\"I\",\"keyl\":\"I\"},{\"pilihan\":\"Pendengar yang baik\",\"keym\":\"S\",\"keyl\":\"S\"},{\"pilihan\":\"Penganalisa yang teliti\",\"keym\":\"C\",\"keyl\":\"C\"},{\"pilihan\":\"Pendelegasi yang efisien\",\"keym\":\"D\",\"keyl\":\"D\"}]', '2020-02-04 20:55:07', '2020-02-04 20:55:07'),
(23, '[{\"pilihan\":\"Peraturan perlu dipertanyakan\",\"keym\":\"B\",\"keyl\":\"D\"},{\"pilihan\":\"Peraturan membuat adil\",\"keym\":\"C\",\"keyl\":\"B\"},{\"pilihan\":\"Peraturan membosankan\",\"keym\":\"I\",\"keyl\":\"I\"},{\"pilihan\":\"Peraturan membuat aman\",\"keym\":\"S\",\"keyl\":\"S\"}]', '2020-02-04 20:56:15', '2020-02-04 20:56:15'),
(24, '[{\"pilihan\":\"Dapat diandalkan, Dapat dipercaya\",\"keym\":\"B\",\"keyl\":\"I\"},{\"pilihan\":\"Kreatif, Unik\",\"keym\":\"I\",\"keyl\":\"I\"},{\"pilihan\":\"Berorientasi kepada hasil\",\"keym\":\"D\",\"keyl\":\"B\"},{\"pilihan\":\"Berpegang teguh pada standar yang tinggi, Akurat\",\"keym\":\"C\",\"keyl\":\"B\"}]', '2020-02-04 20:57:20', '2020-02-04 20:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$xuhF4KSmF43d8HdS8LEBU.oZCsvTEc.QmQex/l45gRtLsUSDSUVum', 'rc0iRxYPZp3BTYc6OMQV', '2020-01-30 21:07:45', '2020-01-30 21:07:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nomor`
--
ALTER TABLE `nomor`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`nomor`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
