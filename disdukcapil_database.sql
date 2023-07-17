-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 17, 2023 at 08:14 AM
-- Server version: 8.0.33-0ubuntu0.20.04.2
-- PHP Version: 8.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disdukcapil`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'umum', 'umum', '2022-08-21 17:42:21', '2022-08-21 17:42:21'),
(2, 'politik pemerintahan', 'politik-pemerintahan', '2023-05-28 17:26:59', '2023-05-28 17:26:59'),
(3, 'event', 'event', '2023-05-28 17:27:26', '2023-05-28 17:27:26'),
(4, 'prestasi', 'prestasi', '2023-05-28 17:27:59', '2023-05-28 17:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari_kerja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam_buka` time DEFAULT NULL,
  `jam_tutup` time DEFAULT NULL,
  `maps` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `alamat`, `no_telp`, `hari_kerja`, `jam_buka`, `jam_tutup`, `maps`, `created_at`, `updated_at`) VALUES
(1, 'disdukcapil@bolmongkab.go.id', 'Lolak Tambolango, Kec. Lolak, Kabupaten Bolaang Mongondow, Sulawesi Utara', '-', 'Senin-Jumat', '07:30:00', '16:30:00', '<iframe src=\"https://www.google.com/maps/embed?pb=!4v1666071001616!6m8!1m7!1s7Up2pudAaln79I0m4IUWzw!2m2!1d0.871432825057852!2d124.0250394417548!3f99.21834922985263!4f0.7304384118574063!5f0.4000000000000002\" width=\"100%\" height=\"350\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-08-21 18:21:47', '2023-06-04 17:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` bigint UNSIGNED NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `file`, `nama`, `created_at`, `updated_at`) VALUES
(6, 'assets/files/55p1ReOCUqLu0pY82KSUjQM28jmZE3CCajIy3UUE.pdf', 'RENJA DISDUKCAPIL 2021', '2023-07-04 03:07:22', '2023-07-04 03:07:22'),
(7, 'assets/files/x3LoWEFFGlsFr9UqhZqspMlePW1HZSDzKVDRMIDG.pdf', 'RENSTRA DISDUKCAPIL BOLMONG 2017 - 2022', '2023-07-04 03:07:41', '2023-07-04 03:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `hari` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `slug`, `location`, `date`, `time`, `hari`, `content`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Upacara bendera', 'upacara-bendera-1661147497', 'Lapangan kantor bupati bolaang mongondow', '2022-08-17', '07:45:00', 'rabu', '<p>Diwajibkan kepada seluruh pegawai agar hadir dalam rangka memperingati hari kemerdekaan republik indonesia yang ke 77</p>', 'http://127.0.0.1:8000/storage/events', 'Y', '2022-08-21 21:45:57', '2022-08-21 21:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `caption` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `image`, `caption`, `updated_at`) VALUES
(2, 'lwDDha7apaebntYdjcpNg0MQPzvdoZEoksBoUmcr.jpg', 'Komputer', '2023-07-04 04:45:44'),
(3, '92Zjtxo9a1o6WNArmMqV92XZgpu3nYR1Suegz7tU.jpg', 'Printer', '2023-07-04 04:45:55'),
(4, 'y3Ufk0ntb2r6386DVmpC792XWofxwwdaipajRSTp.jpg', 'Front Office', '2023-07-04 04:46:12'),
(5, 'k8ZpkaWlma03j0Q6YxxFT60Ei84sxwx149502Qjt.jpg', 'Air Conditioner (AC)', '2023-07-04 04:46:33'),
(6, 'wdK0F4odh8mouHBM9wUka8y2L4uSn0Lvt9uysoxW.jpg', 'Ruang Tunggu', '2023-07-04 04:46:47'),
(7, 'pfaLcw1g51uzFJvLoQpe8KuuQyQxAqNLAu8vGkZb.jpg', 'Akses Penyandang Disabilitas', '2023-07-04 04:47:07'),
(8, 'nBywvcSS4RI7w8HfFHH9p3N2HssbFu2oRuvgqIZV.jpg', 'Jaringan Internet', '2023-07-04 04:47:25'),
(9, 'nEZspmRkaOFCTYYZFIeLC4he3wQPKkk88yLVIbzs.jpg', 'Ruang Menyusui', '2023-07-04 04:47:45'),
(10, 'OJaraK5ypkkWQvRsLd8db42Mb0qzBdRZF4RP3gfQ.jpg', 'Ruang Bermain Anak', '2023-07-04 04:48:00');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int NOT NULL,
  `question` text COLLATE utf8mb4_general_ci NOT NULL,
  `answer` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Apa tugas dan fungsi dinas kependudukan dan pencatatan sipil (DISDUKCAPIL) ?', 'Dinas Kependudukan dan Pencatatan Sipil mempunyai tugas melaksanakan urusan administrasi kependudukan di bidang Kependudukan dan Pencatatan Sipil berdasarkan Azas Otonomi dan Tugas Pembantuan.', '2023-07-03 18:09:06', '2023-07-03 18:09:06');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `data` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `download` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `infografis`
--

CREATE TABLE `infografis` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `lapors`
--

CREATE TABLE `lapors` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `nama_operator` varchar(255) NOT NULL,
  `keluhan` text NOT NULL,
  `nilai_pelayanan` int NOT NULL,
  `nilai_operator` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `lapors`
--

INSERT INTO `lapors` (`id`, `nama`, `telp`, `nama_operator`, `keluhan`, `nilai_pelayanan`, `nilai_operator`, `created_at`, `updated_at`) VALUES
(13, 'Muhammad Indra Setiawan', '082211559783', 'Takariyanta Paputungan', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 80, 60, '2022-09-20 18:43:53', '2022-09-20 18:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `name`, `url`, `sort`, `position`, `image`, `created_at`, `updated_at`) VALUES
(1, 'pemkab bolmongkab', 'https://bolmongkab.go.id/', NULL, NULL, NULL, '2022-08-21 18:23:52', '2022-08-21 18:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_22_072606_create_permission_tables', 1),
(5, '2020_12_22_085813_create_tags_table', 1),
(6, '2020_12_22_090248_create_categories_table', 1),
(7, '2020_12_22_110720_create_events_table', 1),
(8, '2020_12_22_110947_create_photos_table', 1),
(9, '2020_12_22_111144_create_videos_table', 1),
(10, '2020_12_22_111317_create_sliders_table', 1),
(11, '2021_06_25_005431_create_services_table', 1),
(12, '2021_06_25_054744_create_banners_table', 1),
(13, '2021_06_30_121103_create_downloads_table', 1),
(14, '2021_07_05_070331_create_news_table', 1),
(15, '2022_05_09_043424_create_profiles_table', 1),
(16, '2022_05_09_050859_create_contacts_table', 1),
(17, '2022_05_09_052357_create_files_table', 1),
(18, '2022_05_09_061432_create_sosmeds_table', 1),
(19, '2022_05_09_061826_create_potensis_table', 1),
(20, '2022_05_09_062042_create_links_table', 1),
(21, '2022_05_09_062139_create_visitors_table', 1),
(22, '2022_05_09_062309_create_menus_table', 1),
(23, '2022_05_09_062346_create_submenus_table', 1),
(24, '2022_06_06_003131_create_infografis_table', 1),
(25, '2022_08_04_004922_create_profpegs_table', 1),
(26, '2022_08_04_020501_create_views_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tayang` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `user_id`, `category_id`, `title`, `slug`, `body`, `image`, `tayang`, `created_at`, `updated_at`) VALUES
(10, 3, 1, 'Junjung Demokrasi Sehat, Limi: Saya Terbuka dengan Kritik', 'junjung-demokrasi-sehat-limi-saya-terbuka-dengan-kritik', '<p><strong>BNews, BOLMONG</strong> - Penjabat Bupati Bolaang Mongondow (Bolmong) Ir Limi Mokodompit MM mengaku, bahwa dirinya siap dan terbuka menerima kritik dan saran dari semua pihak.</p>\r\n<p>Hal itu disampaikan Papa Fahmi (sapaan akrab Limi Mokodompit) saat menyampaikan sambutan di acara Doa syukuran atas masa perpanjangan jabatan yang berlangsung di rumah dinas Bupati Bolmong, Lolak, Jumat 26 Mei 2023.</p>\r\n<p>&ldquo;Saya dan keluarga selalu terbuka dengan kritik serta saran dalam kepemimpinan ini,&rdquo; ungkap Papa Fahmi.</p>\r\n<p>Acara yang berlangsung sederhana dan penuh haru itu, pun turut dihadiri Sekretaris Daerah (Sekda) Bolmong Tahlis Gallang, Pimpinan DPRD Welty Komaling, Anggota DPRD Haji Ramono, para Asisten, pimpinan OPD, Camat, Ketua TP-PKK, Ketua KNPI Bolmong, Sangadi, serta para Tokoh Masyarakat dan Agama.<br /><br /></p>\r\n<p>Lanjut Limi mengaku, bahwa Pj Bupati memang harus dikontrol. Terutama para OPD.</p>\r\n<p>Bahkan, dirinya meminta agar masyarakat harus lebih banyak lagi mengingatkan dirinya.</p>\r\n<p>Menurutnya, jika semakin banyak yang mengingatkan, maka suatu keputusan akan semakin tepat untuk diambil.</p>\r\n<p>&ldquo;Oleh karenanya, saya menyampaikan ucapan terima kasih. Saya senang jika masih ada LSM dan Pers yang tengah mengingatkan Pj Bupati,&rdquo; katanya.</p>\r\n<p>&ldquo;Jika kritik itu disampaikan, tentu saya akan merasa senang, Kenapa? karena saya diingatkan,&rdquo; sambung Limi lagi.</p>\r\n<p>Suasana itu pun kian terasa haru. Bahkan Pj Bupati Limi Mokodompit ikut menitihkan air mata saat kembali mengingatkan, agar dirinya bersama keluarga baik itu Istri maupun Anak tercinta, untuk bisa ditegur jika meraka salah.<br /><br /></p>\r\n<p>&ldquo;Saya dan keluarga tak sempurna. Tolong di bimbing dan diingatkan jika anak-anak saya membuat kesalahan. Tolong di tegur jika Istri saya juga salah,&rdquo; ucap Limi dengan suara penuh parau.</p>\r\n<p>&ldquo;Demikian, bila mana kami sekeluarga ada tingkah laku yang salah, kami hanyalah manusia biasa. Tolong saya di kritik dalam koridor untuk membangun negeri ini,&rdquo; sambung Limi lagi.</p>\r\n<p>Di akhir sambutannya, dirinya ikut meminta Doa dan dukungan seluruh OPD dan masyarakat Bolmong.</p>\r\n<p>&ldquo;Mari bekerja. Dan tidak ada lagi keraguan, karena saya akan melanjutkan pemerintahan hingga tahun depan,&rdquo; pungkas Limi.</p>\r\n<p>Diketahui, Selasa 23 Mei 2023 lalu, Ir Limi Mokodompit akhirnya menerima SK Perpanjangan masa jabata sebagai Penjabat Bupati Bolmong periode 2023-2024 dari Mendagri yang diserahkan langsung Wakil Gubernur Sulawesi Utara Steven O.E Kandouw, di Manado.<br /><br /><em><strong>Penulis : Wahyudy Paputungan</strong></em></p>', 'GuqXvYh8fhnhHeumbDwOgopy5nQjKvTLhbpPTU3K.jpg', NULL, '2023-05-28 17:21:15', '2023-05-28 17:22:01'),
(11, 3, 1, 'Bolmong Terbaik Pengelolaan DAK Fisik di Sulut', 'bolmong-terbaik-pengelolaan-dak-fisik-di-sulut-1685323483', '<p><strong>BNews, BOLMONG</strong> - Kepemimpinan Ir Limi Mokodompit MM, akan genap 1 tahun pada Senin 22 Mei 2023 besok.</p>\r\n<p>Diketahui, Limi yang akrab disapa Papa Fahmi ini, secara sah dilantik sebagai Penjabat (Pj) Bupati Bolmong oleh Gubernur Sulawesi Utara (Sulut) Olly Dondokambey SE, pada Minggu 22 Mei 2022, dilaksanakan di Graha Gubernur Sulut, Bumi Beringin, Manado.</p>\r\n<p>Sederet capaian keberhasilan sebagai Penjabat Bupati Bolmong, telah menjadi bukti dirinya mampu membangun tanah kelahirannya Kabupaten Bolaang Mongondow tersebut.</p>\r\n<p>Memiliki tanggung jawab dan tugas yang sangat berat dalam memimpin dan menjalankan roda pemerintahan di Kabupaten Bolmong, maka jika melihat capaian pembangunan dan pelaksanaan pemerintahan pada setahun sebelumnnya, dinilai masih belum cukup atau maksimal.</p>\r\n<p>Terlebih lagi, Indonesia, saat itu, khsusunya Kabupaten Bolmong baru keluar dari zona merah pandemi Covid-19 setelah dua tahun melanda.</p>\r\n<p>Sehingga, diperlukan strategi dan kebijakan yang tepat, cepat dan terukur untuk mengejar ketertinggalan pada beberapa indikator kinerja yang sudah direncanakan oleh Bupati sebelumnya.</p>\r\n<p>Pengalaman terbilang matang di dunia birokrasi yang pada saat ditugaskan sebagai Penjabat Bupati, Limi pun kini yang masih menjabat sebagai Kepala Dinas Lingkungan Hidup (DLH) Provinisi Sulawesi Utara terus berkerja menjalankan apa yang harus diurus oleh seoarang pimpinan daerah.</p>\r\n<p>Sementara, dalam penilaian atas kinerja pucuk pimpinan Limi Mokodompit di Kabupaten Bolmong, dinilai berhasil dan mampu menjadikan Kabupaten Bolmong semakin sukses.</p>\r\n<p>Capian itu, bahkan hingga penganugrahan dan penghargaan yang diterima oleh Pemkab Bolmong, tentunya dipucuk pimpinan Limi Mokodompit.</p>\r\n<p>Salah satu capain itu, Limi berhasil membawa Pemerintah Kabupaten (Pemkab) Bolmong menerima penghargaan dengan peringkat pertama pada kategori pengelolaan Dana Alokasi Khusus (DAK) Fisik tahun anggaran 2022 se Sulawesi Utara (Sulut).</p>\r\n<p>Penghargaan saat itu, pun diterima di Lantai 6, Gedung Keuangan Negara (GKN) Manado, pada Kamis 16 Februari 2023 lalu.</p>\r\n<p>Tentunya, penghargaan yang dicapai, merupakan bentuk apresiasi atas upaya dan kinerja Pemkab Bolmong yang dinilai positif dalam mengelola DAK Fisik yang secara efektif dan efisien, serta transparan.</p>\r\n<p>Maka dengan capaian membanggakan itu, Kabupaten Bolmong patut menonjolkan diri di antara kabupaten lainnya.</p>\r\n<p>Bahkan, kata Kepala Badan Keuangan Daerah (BKD) Seriyanto mengakui, keberhasilan Pemkab Bolmong meraih peringkat pertama se Sulut berkat arahan Penjabat Bupati Bolmong Limi Mokodompit dan Sekretaris Daerah (Sekda) Tahlis Galang dalam memberikan pelayanan kepada masyarakat.</p>\r\n<p>&ldquo;Terima kasih atas petunjuk, arahan dan dorongan dari Bapak Bupati, Bapak Sekda. Terima kasih juga kepada Bapak/Ibu Kepala Perangkat Daerah se Bolaang Mongondow atas bantuan dan kerja keras bersama sehingga kita bisa mendapatkan penghargaan tersebut,&rdquo; ungkap Seriyanto.</p>\r\n<p>Demikian, Sekda Bolmong Tahlis Gallang pun mengatakan, capaian Pengelolaan DAK Pemkab Bolmong 2022 dengan kategori terbaik pertama itu, merupakan kerja keras dan gotong royong antar SKPD.</p>\r\n<p>&ldquo;Berkat kerja keras dan gotong royong bersama ini, maka atas pencapaian tersebut, sepantasnya Pemkab Bolmong menjadi yang terbaik se Sulut atas pengelolaan DAK tahun 2022,&rdquo; tandas Sekda, kala itu di kediaman rumah dinas di Desa Lalow, Sabtu 8 April 2023.</p>\r\n<p>Kinerja Limi Mokodompit pun, selama memimpin Kabupaten Bolmong patut diacungi jempol. Hal itu juga demikian. Pemprov Sulut ikut mengapresiasi kepemimpinan Limi Mokodompit.</p>\r\n<p>Bahkan itu diungkapkan, jajaran Pemprov Sulut, pada rapat evaluasi Kinerja Penjabat Bupati Bolmong belum lama ini.</p>\r\n<p>Dimana pada pemaparan dari tim panelis Pemprov Sulut yang diantaranya, Asisten I Pemprov Sulut Dr Denny Mangala, Asisten II Praseno Hadi, Asisten III Fransiskus Manumpil, Inspektur Drs Meiki Onibala MSi, Kepala BKAD Sulut Femmy Suluh dan Kepala BKD Clay Dondokambey SSTP MAP, memberikan apresiasi atas kerja keras dan prestasi yang telah dicapai Limi Mokodompit selama memimpin Kabupaten Bolmong.</p>\r\n<p>Menurunya, sejumlah aspek yang menjadi indikator penilaian evaluasi Kinerja Penjabat Bupati Bolmong dari Pemprov Sulut mampu dijalankan dengan baik Limi Mokodompit.</p>\r\n<p>Sejak resmi dilantik, Limi pun harus bekerja ekstra keras. Bersama jajaran di Pemkab Bolmong, dirinya telah melakukan berbagai upaya untuk meningkatkan capaian kinerja tahunan.</p>\r\n<p>Baik itu dalam aspek penyelenggaraan urusan pemerintahan, aspek pembangunan maupun aspek kemasyarakatan.</p>\r\n<p>Namun, proses langka kerja Limi Mokodompit dalam setahun, memberikan hasil trend positif dalam menjalankan roda pemerintahan.</p>', 'N21Nak01DR7BY7FLt56MqVbsYPPuCn7M0xauHCSJ.jpg', NULL, '2023-05-28 17:24:43', '2023-05-28 17:24:43'),
(12, 3, 1, 'Buka Rakor GTRA, Limi Sebut Masih Banyak Permasalahan Agraria yang Harus Diselesaikan', 'buka-rakor-gtra-limi-sebut-masih-banyak-permasalahan-agraria-yang-harus-diselesaikan-1685323564', '<p><strong>BNews, BOLMONG</strong> - Penjabat (Pj) Bupati Limi Mokodompit, resmi membuka Rapat Koordinasi (Rakor) Penyelenggaraan Gugus Tugas Reforma Agraria (GTRA) Kabupaten Bolaang Mongondow (Bolmong), bertempat di Sutanraja Hotel Kotamobagu, Rabu 17 Mei 2023, siang tadi.</p>\r\n<p>Diawal sambutan, Penjabat Bupati Limi Mokodompit, menyampaikan ucapan terimakasih dan apresiasi setinggi-tingginya atas terselenggaranya kegiatan ini.</p>\r\n<p>Dikatakan, permasalahan yang terjadi saat ini, merupakan cerminan bagi seluruh pemangku kepentingan yang ada. Maka, perumusan kembali terkait tatanan pertanahan menjadi sebuah keharusan.</p>\r\n<p>Apa lagi, katanya, jika ini terus dibiarkan, maka justru berpotensi menambah permasalahan yang terjadi.</p>\r\n<p>Demikian, pelaksanaan Reforma Agraria ini. Kata Limi, ini adalah sebagai salah satu bentuk cita-cita pemerintah yang merupakan program Nawa Cita ke-5.</p>\r\n<p>Bahkan, kata dia, ini sesuai dengan tema pemerintah yaitu &ldquo;Program Indonesia Kerja dan Indonesia Sejahtera dengan Mendorong Landreform dan Program Kepemilikan Tanah Seluas 9 Juta Hektar&rdquo;.</p>\r\n<p>Dan ini, telah menjadi program prioritas nasional, sesuai dengan amanat RPJMN 2020-2024.</p>\r\n<p>&ldquo;Dimana Nawa Cita ke-5 ini harus didukung penuh oleh kita semua, karena secara umum masih banyak permasalahan utama menyangkut Agraria yang harus diselesaikan,&rdquo; sebut Limi Mokodompit.</p>\r\n<p>Oleh itu, lanju Limi, Reforma Agraria bukan hanya sekedar distribusi atau pembagian tanah kepada masyarakat saja.</p>\r\n<p>Namun, harus menyentuh aspek yang lebih luas, yaitu penguasaan pemilikan dan pemanfaatan tanah, sehingga diharapkan mampu menyelesaiakan persoalan dan sengketa tanah yang dihadapi masyarakat saat ini.</p>\r\n<p>Bahkan, ia menambahkan, ada beberapa konflik Agraria yang selama ini terjadi dan dipicu oleh beberapa hal.</p>\r\n<p>Itu diantaranya, kurang tepatya hukum dan kebijakan pengatur masalah Agraria, serta adanya ketidak adilan proses penyelesaian sengketa lahan.</p>\r\n<p>Limi pun berharap, rakor ini dapat tercipta kesepakatan bersama serta dapat menyatukan pendapat data dan rencana yang akan dilaksanakan oleh tim Gugus Tugas Reforma Agraria atau tim GTRA.</p>\r\n<p>&ldquo;Semoga hasilnya nanti dapat menjadi kesepahaman dan kesepakatan bersama sebagai arah kebijakan maupun penanganan dalam penguatan kapasitas pelaksanaan Reforma Agraria di Kabupaten Bolmong.</p>\r\n<p>&ldquo;Kedepan nanti, keberadaan tim GTRA ini, jga terus menambah success story lainnya, sebagai bentuk nyata dan hasil kinerja dari gugus tugas reforma agraria Kabupaten Bolaang Mongondow,&rdquo; tandas Limi.</p>\r\n<p>Sementara itu, Kepala Kantor BPN Kabupaten Bolmong Eni Sulastri Darmayanti, ikut mengucapkan terimakasih dan apresiasi setinggi-tingginya kepada Pemerintah Kabupaten (Pemkab) Bolmong atas dukungan dan sinergitasnya dalam penyelenggaraan GTRA tahun ini.</p>\r\n<p>Tampak hadir, Kepala Kanwil BPN Provinsi Sulut yang diwakili Kabid Penetapan Hak Ahmad Muaimin Haryono, Dandim 1303 Bolmong Letkol Inf Topan Anker, Stafsus Gubernur Sulut Firasat Mokodompit, Kejaksaan Negeri Kotamobagu, Kapolres Bolmong, beserta jajaran Tim GTRA Kabupaten Bolmong.</p>', '4i2JNIMdT53B77iq3lYHDj8dP7Ra1VLzMPOtsBfP.jpg', NULL, '2023-05-28 17:26:04', '2023-05-28 17:26:04'),
(13, 3, 4, 'Lanjutkan Trend Positif Laporan Keuangan Daerah, Pemkab Bolmong ‘Cetak Hattrick’ WTP dari BPK', 'lanjutkan-trend-positif-laporan-keuangan-daerah-pemkab-bolmong-cetak-hattrick-wtp-dari-bpk-1685323741', '<p><strong>BNews, BOLMONG</strong> - Lagi, Pemerintah Kabupaten (Pemkab) Bolaang Mongondow (Bolmong) kembali meraih predikat Opini Wajar Tanpa Pengecualian (WTP) dari Badan Pemeriksa Keuangan (BPK) Republik Indonesia (RI).</p>\r\n<p>Hasil Laporan Keuangan Pemerintah Daerah (LKPD) tahun 2022 ini, diberikan langsung oleh BPK RI Perwakilan Sulawesi Utara (Sulut) yang berlangsung di Kantor BPK Manado, Senin 15 Mei 2023.</p>\r\n<p>Bahkan, diterima langsung oleh Penjabat Bupati Bolmong Ir Limi Mokodompit MM yang ikut didampingi Ketua DPRD Bolmong Welty Komaling.</p>\r\n<p>Tentu capaian ini, melanjutkan Trend Positif atas Laporan Keuang Daerah,&nbsp;setelah diumumkan Kepala BPK RI Perwakilan Sulut Arief Fadillah, dimana Pemkab Bolmong kembali meraih Opini WTP yang kesian kalinya.</p>\r\n<p>Tentu hasil ini WTP ini, Pemkab Bolmong merupakan ketiga kalinya memperoleh Predikat WTP secara berturut-turut sejak 2021 lalu.</p>\r\n<p>Pada kesempatan tersebut, Penjabat Bupati Bolmong Limi Mokodompit mengatakan, capain WTP ini adalah prestasi yang luar biasa bagi jajaran Pemkab Bolmong.</p>\r\n<p>Ia pun berharap, dengan capaian ini dapat menjadi motivasi bagi semua dan meningkatkan kerja sama ke depan untuk lebih baik lagi.</p>\r\n<p>&ldquo;Semua tercapai atas kerja keras semua pihak. Semoga kedepan tetap konsisten menjaga transparansi dan akuntabilitas dari pengelolaan keuangan APBD,&rdquo; kata Limi Mokodompit, kepada sejumlah awak media usai menerima WTP dari BPK RI.</p>\r\n<p>Demikian yang disampaikan Sekretaris Daerah (Sekda) Bolmong Tahlis Gallang. Dirinya menyampaikan ucapan rasa syukur, karena Pemkab Bolmong mampu mempertahankan Opini WTP untuk kesekian kalinya.</p>\r\n<p>&ldquo;Alhamdulillah di tahun ini Pemkab Bolmong mampu mempertahankan Opini WTP. Ini tidak lepas dari kerja keras semua pihak,&rdquo; ungkap Tahlis Gallang.</p>', 'kaMhT3Xi44dsM0odrARjf25A0guT49vyjCXKUCF5.jpg', NULL, '2023-05-28 17:29:01', '2023-05-28 17:29:01'),
(14, 3, 3, 'Limi: Halal Bihalal Momentum Baik Pupuk Rasa Persaudaraan Antar Sesama', 'limi-halal-bihalal-momentum-baik-pupuk-rasa-persaudaraan-antar-sesama-1685323798', '<p><strong>BNews, BOLMONG</strong> - Tentu Halal Bihalal merupakan momentum yang sangat baik bagi semua untuk memupuk rasa persaudaraan dan saling memaafkan.</p>\r\n<p>Seperti yang dilakukan Pemkab Bolmong di Desa Mopuya Utara, Kecamatan Dumoga Utara, Kabupaten Bolmong, Kamis 4 Mei 2023.</p>\r\n<p>Agenda rutin tahunan yang biasanya digelar usai lebaran Idul Fitri ini, bahkan dihadiri Wakil Gubernur (Wagub) Sulawesi Utara (Sulut) dan Penjabat Bupati Limi Mokodompit.</p>\r\n<p>Adapun tema kali ini, &lsquo;Melalui Halal bihalal Kita Tingkatkan Ukhuwah Islamia, Ukhuwah Wathaniyah dan Ukhuwah Insaniyah.</p>\r\n<p>Seperti yang disampaikan Penjabat Bupati Bolmong Limi Mokodompit, tentu sangat pentingnya mempererat tali silaturahim antara pemerintah dan masyarakat.</p>\r\n<p>Maka pada momentum ini, ia mengajak untuk saling memaafkan antar sesama usai lebaran dan menerima keberagaman dalam bingkai silaturahmi dan memupuk rasa persatuan persaudaraan antar sesama, termasuk di Sulawesi Utara. Khususnya di Kabupaten Bolaang Mongondow.</p>\r\n<p>Apalagi, kata Limi, bahwa Halal Bihalal sudah merupakan suatu tradisi positif yang dilaksanakan oleh umat islam setelah perayaan Idul Fitri, guna menyempurnakan kemenangan dan kesucian yang diraih setelah beribadah puasa selama Ramadhan.</p>\r\n<p>&ldquo;Mari bersama melalui Halal Bihalal ini, kita saling membersihkan diri dengan tulus dan ikhlas, saling memberi dan meminta maaf kepada sesama atas segala khilaf dan dosa yang pernah kita perbuat,&rdquo; ucap Limi ketika sambutan pemerintah.</p>\r\n<p>Selain itu, ia juga mengajak agar seluruh masyarakat dapat menjadikan momentum ini sebagai wahana dan sarana untuk lebih memperkuat komitmen serta tekad, guna lebih meningkatkan kualitas keimanan.</p>\r\n<p>Bahkan, ia berharap sekaligus mengajak untuk bisa menggugah dan kembali membangun kesadaran sebagai makhluk yang fitrah sesuai makna Hari Raya Idul Fitri.</p>\r\n<p>&ldquo;Mari membangun semangat kemenangan dan hati yang fitrah untuk dijadikan sebagai titik awal berbenah diri dan menyiapkan konsep bekerja ikhlas, berkarya nyata, serta senantiasa berkontribusi, berpartisipasi aktif dalam mempercepat tercapainya tujuan pembangunan di Kabupaten Bolmong.</p>\r\n<p>Kemudian mari untuk selalu menjalin hubungan silaturahmi yang baik, serta tetap mempererat tali persaudaraan, sehingga solidaritas sesama umat islam dan toleransi antar umat beragama dapat terjalin dengan baik, apalagi daerah kita terdiri dari berbagai agama, etnis, budaya serta suku bangsa,&rdquo; sebutnya.</p>\r\n<p>Tidak hanya itu, Limi kembali mengingatkan agar memasuki tahun politik, seluruh ASN turut menjaga stabilitas dan keharmonisan.</p>\r\n<p>&ldquo;Jangan ada yang memprovokasi dan menyebarkan berita Hoaks. Mari kita menjaga silaturahmi sehingga tidak terjadi gesekan,&rdquo; tegasnya.</p>\r\n<p>Acara pun di akhiri dengan penyerahan hadiah lomba monuntul yang dilaksanakan pada bulan Ramadhan 1444 Hijriah.</p>\r\n<p>Turut hadir, Sekda Bolmong Tahlis Gallang, para Asisten, unsur Forkopimda, anggota DPRD Bolmong, Camat, Sangadi, serta para Tokoh Agama dan Masyarakat setempat.</p>\r\n<p><em><strong>Berikut nama Desa yang meraih juara pada lomba monuntul :</strong></em></p>\r\n<p>&ndash; Juara 1, Desa Otam Barat, hadiah uang tunai Rp25 juta,<br />&ndash; Juara 2, Desa Bolaang, hadiah unag tunai Rp20 juta<br />&ndash; Juara 3, Desa Doloduo II, hadiah uang tunai Rp15 juta</p>\r\n<p>Sementara, untuk juara harapan 1 yakni Desa Mopait, dengan hadiah uang tunai Rp10 juta dan harapan 2, Desa Otam dengan hadiah uang tunai Rp5 juta.</p>', 'jqbQlW0BBHTVYV8BPDPrO4lrQVcATV1T2IVaAAb3.jpg', NULL, '2023-05-28 17:29:58', '2023-05-28 17:29:58'),
(15, 3, 3, 'Perayaan Hari Raya Nyepi Umat Hindu di Kosio Tunjukan Kekuatan Toleransi di Bolmong', 'perayaan-hari-raya-nyepi-umat-hindu-di-kosio-tunjukan-kekuatan-toleransi-di-bolmong-1685323869', '<p><strong>BNews, BOLMONG</strong> -</p>\r\n<p>Sehingga pada momentum itu, Penjabat Bupati Bolmong Limi Mokodompit, ikut menyampaikan selamat Hari Raya Nyepi tahun baru saka 1945 bagi Umat Hindu se Bolmong, serta memberikan apresiasi kepada pengurus Parisada Hindu Dharma Bolmong atas terselenggaranya acara tersebut.</p>\r\n<p>&ldquo;Tentu acara ini patut kita apresiasi, karena di tengah kemajemukan masyarakat Bolmong, Umat Hindu mampu menunjukan toleransi antar sesama di daerah yang kita cintai bersama ini,&rdquo; ucapnya.</p>\r\n<p>&ldquo;Semoga juga kegiatan ini bisa dijadikan wahana untuk melakukan pembinaan kepada umat, khususnya kepada saudara kita Umat Hindu di Kabupaten Bolmong,&rdquo; sambung Limi.</p>\r\n<p>Sebelumnya, pada 22 Maret 2023, Umat Hindu di Bolmong telah merayakan Hari Raya Nyepi tahun baru saka dengan melaksanakan rangkaian Catur Brata Penyepian.</p>\r\n<p>Sehingga, pada momentum ini ia berharap, Umat Hindu bisa lebih termotivasi dalam meningkatkan nilai-nilai spiritual dan keimanan kepada &lsquo;Ida Sang Hyang Widi Wase&rsquo;.</p>\r\n<p>&ldquo;Selain mampu meningkatkan nilai-nilai keimanan, momentum ini juga bisa mempererat rasa kekeluargaan serta persaudaraan antara sesama umat beragama,&rdquo; ucapnya.</p>\r\n<p>Demikian Limi Mokodompit juga mengajak kepada seluruh elemen masyarakat di Kabupaten Bolmong untuk saling menghargai dan menghormati sesama umat.</p>\r\n<p>&ldquo;Melalui momentum Dharma Santi ini maka saya berharap, agar seluruh masyarakat Bolmong dapat meningkatkan Tri Kerukunan Umat Beragama,&rdquo; pungkas Limi Mokodompit.</p>\r\n<p>Pun diketahui, perayaan Nyepi yang diakhiri dengan Dharma Santi hari ini, merupakan sebagai upaya untuk menjalin harmonisasi antar umat manusia dan khususnya Pemkab Bolmong.</p>\r\n<p>&nbsp;Puncak peringatan Hari Raya Nyepi tahun baru saka 1945/2023 Masehi, Umat Hindu di Kabupaten Bolaang Mongondow (Bolmong) merayakan Dharma Santi Nyepi di Desa Kosio, Kecamatan Dumoga Tengah, Sabtu 6 Mei 2023.</p>\r\n<p>Bahkan, Pejabat Bupati Bolmong Limi Mokodompit, diikuti para Asisten dan seluruh pimpinan OPD, turut menghadiri acara tersebut.</p>\r\n<p>Kegiatan Dharma Santi yang digelar Parisada Hindu Dharma Indonesia (PHDI) Kabupaten Bolomong ini, mamerupakan rangkaian perayaan Hari Raya Nyepi yang memberikan manfaat, khususnya Umat Hindu yang berada di Bolmong.</p>', '0LdD717Ivh350mtvcAhg9xidX6tqDdIKf3IiQOJX.jpg', NULL, '2023-05-28 17:31:09', '2023-05-28 17:31:09'),
(16, 3, 4, 'Inilah Sosok Figur Perintis WTP di Tiga Daerah yang Berbeda', 'inilah-sosok-figur-perintis-wtp-di-tiga-daerah-yang-berbeda-1685323942', '<p><strong>BNews, BOLMONG</strong> - Pemerintah Kabupaten (Pemkab) Bolaang Mongondow (Bolmong), kembali menjaga Trend Positif Laporan Hasil Pemeriksaan (LHP) dari Badan Pemeriksaan Keuangan (BPK) Republik Indonesia (RI) atas Laporan Keuangan Pemerintah Daerah (LKPD) tahun 2022.</p>\r\n<p>Bahkan dalam pengumuman LHP BPK RI Perwakilan Sulawesi Utara (Sulut) yang disampaikan, Pemkab Bolmong kembali meraih predikat Opini Wajar Tanpa Pengecualian (WTP), Manado, Senin 15 Mei 2022</p>\r\n<p>Diketahui, Opini ketiga ini pun diserahkan Kepala BPK RI Perwakilan Sulut Arief Fadillah kepada Penjabat Bupati Bolmong Limi Mokodompit dan ikut didampingi Ketua DPRD Welty Komaling.</p>\r\n<p>Tentu capaian keuangan daerah yang selalu didambakan tiap pemerintahan, ada tokoh yang berperan besar dalam Trend Positif ini.<br /><br /></p>\r\n<p>Tokoh birokrat dibalik capaian Opini WTP ini tentu disematkan kepada Sekretaris Daerah (Sekda) Bolmong Tahlis Gallang.</p>\r\n<p>Tahlis Gallang dianggap berhasil membawa Kabupaten Bolmong keluar dari zona merah atas pengelolaan keuangan daerah serta persoalan aset.</p>\r\n<p>Dengan kerja keras tim, perlahan mampu mengurai aset yang nilainya mencapai puluhan miliar itu, dan itu diungkap oleh sosok Tahlis Gallang.</p>\r\n<p>Sehingga, sekian tahun berada di zona merah, Pemkab Bolmong pun perlahan mampu keluar.</p>\r\n<p>Tak hanya Kabupaten Bolmong, namun ternyata sosok Tahlis Gallang merupakan figur perintis WTP di 3 daerah yang berbeda di Bolaang Mongondo Raya (BMR).</p>\r\n<p>Opini WTP sendiri, bukan sekedar kompetisi bergengsi di lingkup pemerintahan daerah di Indonesia, tapi merupakan satu kewajiban.</p>\r\n<p>Bahkan, di Indonesia, sebutan orang &ldquo;Gila&rdquo; dalam penataan bikrokrasi sudah awam disematkan pada sosok birokrat yang pernah dipercayakan sebagai Sekda di tiga daerah yang berbeda ini.</p>\r\n<p>Diksi kata &ldquo;Gila&rdquo; ini pun, karena memang mendapat amanah untuk mengurus daerah bukan hal yang mudah.</p>\r\n<p>Tahlis Gallang dalam perdana menjabat Sekda di Kabupaten Bolaang Mongondow Selatan (Bolsel) itu, membuat alumni IPDN Angkatan Lima (V) ini, mampu menunjukan kemampuannya dalam bidang pengelolaan keuangan daerah.</p>\r\n<p>Hal tersebut, tentu harus diakui. Terbukti Kabupaten Bolsel kala itu, mampu meraih Opini WTP dari BPK RI.</p>\r\n<p>Trend Positif sosok Tahlis Gallang pun berlanjut ke Pemerintahan Kota Kotamobagu. Hal serupa pun dibuktikan Tahlis, ia mampu menjadi leader dalam bidang pelaporan atas penggunaan dana kepada BPK RI.</p>\r\n<p>Tak hanya sampai disitu. Di tahun 2018 setelah hijrah dan dipercayakan untuk mengatasi penggunaan keuangan daerah di Pemkab Bolmong, perlahan dan pasti, Tahlis Gallang bersama tim mulai menata problem atas pengelolaan keuangan hingga persoalan aset.</p>\r\n<p>Terbukti, tegas dan kerja keras bersama tim yang dibentuk, sejumlah aset mampu diungkap.</p>\r\n<p>Bukan hanya terlibat di atas kertas, tapi ikut terlibat langsung menangani aset yang menjadi problem serius di Pemkab Bolmong.</p>\r\n<p>Sekian perjalanan problem sosok Tahlis, ia mampu membuktikan dan menjawabnya.</p>\r\n<p>Bahkan, jawaban paling berkelas seorang Tahlis Gallang adalah prestasi dan mampu keluar dari zona merah.</p>\r\n<p>&ldquo;Alhamdulillah, musim yang penuh drama saat itu sudah dilewati. Tetapi kami terus berjuang untuk menunjukan bahwa Pemkab Bolmong tidak tinggal diam. Kami terus bekerja dan berhasil membawa Bolmong meraih WTP kembali,&rdquo; ujar Tahlis Gallang.</p>\r\n<p>Tahlis Gallang pun, merupakan sosok yang lebih banyak diam dalam bekerja. Bahkan Ia jarang terekspos di setiap momentum.</p>\r\n<p>Demikian disampaikan Penjabat Bupati Bolmong usia menerima Opini WTP dari BPK, ia mengatakan, capain ini adalah prestasi yang luar biasa bagi jajaran Pemkab Bolmong.</p>\r\n<p>Ia pun berharap, dengan capaian ini dapat menjadi motivasi bagi semua dan meningkatkan kerja sama ke depan untuk lebih baik lagi.</p>\r\n<p>&ldquo;Semua tercapai atas kerja keras semua pihak. Semoga kedepan tetap konsisten menjaga transparansi dan akuntabilitas dari pengelolaan keuangan APBD,&rdquo; kata Limi Mokodompit, kepada sejumlah awak media usai menerima WTP dari BPK RI.</p>', 'OjWBfLRgcIARYZvnqMaMsl7IvXWfrzrHXGUYCymF.jpg', NULL, '2023-05-28 17:32:22', '2023-05-28 17:32:22'),
(17, 3, 4, 'Limi Mokodompit Berhasil Pertahankan Predikat WTP Pemkab Bolmong', 'limi-mokodompit-berhasil-pertahankan-predikat-wtp-pemkab-bolmong-1685323994', '<p><strong>BNews, BOLMONG</strong> - Penjabat Bupati Bolaang Mongondow Ir Limi Mokodompit MM, akhirnya berhasil kembali mempertahankan Opini Wajar Tanpa Pengecualian (WTP) dari Badan Pemeriksa Keuangan (BPK) Republik Indonesia (RI).</p>\r\n<p>Capain ini terkait pengelolaan keuangan tahun anggaran 2022 milik Pemkab Bolmong.</p>\r\n<p>Sementara, predikat Opini WTP Pemkab Bolmong ini merupakan yang ketiga kali secara berturut-turut yang diraih.</p>\r\n<p>Bahkan, Laporan Hasil Pemeriksaan (LHP) BPK RI atas Laporan Keuangan Pemerintah Daerah (LKPD) ini, diterima langsung Pejabat Bupati Bolmong Limi Mokodompit yang ikut didampingi Ketua DPRD Welty Komaling, bertempat di Kantor BPK RI Perwakilan Sulut, Manado, Senin 15 Mei 2023.</p>\r\n<p><strong>Baca Juga</strong>:&nbsp;<strong><a href=\"https://bolmong.news/terkini/pemkab-boltim-sabet-wtp-ke-10/\">Pemkab Boltim Sabet WTP Ke 10</a></strong></p>\r\n<p>Sebelum penyerahan hasil pemeriksaan, Kepala BPK RI Perwakilan Sulut Arief Fadillah, ikut mengumumkan Pemkab Bolmong kembali meraih predikat Opini WTP.</p>\r\n<p>Pada kesempatan itu, Penjabat Bupati Bolmong Limi Mokodompit mengatakan, perolehan capaian WTP ini adalah prestasi yang luar biasa bagi Pemkab Bolmong.</p>\r\n<p>Sehingga, akrab disapa Papa Fahmi ini berharap, capaian tersebut dapat menjadi motivasi bagi semua pihak untuk meningkatkan kerja sama ke depan.</p>\r\n<p>&ldquo;Semua tercapai atas kerja keras semua pihak. Semoga kedepan tetap konsisten menjaga transparansi dan akuntabilitas dari pengelolaan keuangan APBD,&rdquo; sebut Limi usai kegiatan.</p>\r\n<p><strong>Baca Juga</strong>:<strong>&nbsp;<a href=\"https://bolmong.news/terkini/wali-kota-tatong-bara-terima-opini-wtp-yang-ke-10-kali/\">Wali Kota Tatong Bara Terima Opini WTP yang ke 10 Kali</a></strong></p>\r\n<p>&ldquo;Selain itu, saya berharap agar di tahun-tahun berikutnya, Bolmong bisa terus mempertahankan predikat WTP ini,&rdquo; sambungnya lagi.</p>\r\n<p>Sementara itu, Sekretaris Daerah (Sekda) Kabupaten Bolmong Tahlis Gallang mengungkapkan, rasa syukur karena Pemkab Bolmong mampu mempertahankan predikat Opini WTP dari BPK.</p>\r\n<p>&ldquo;Alhamdulillah di tahun ini Pemkab Bolmong mampu mempertahankan Opini WTP. Tentunya capaian ini tidak lepas dari kerja keras semua pihak,&rdquo; ungkap Tahlis.</p>', '8zAE9cZcBwAN4DVKKMWRAdAI9O0ZS2l7hCCFQAfV.jpg', NULL, '2023-05-28 17:33:14', '2023-05-28 17:33:14'),
(18, 3, 3, 'Harkitnas 2023, Tahlis Sebut Momentum Wujudkan Indonesia Emas 2045', 'harkitnas-2023-tahlis-sebut-momentum-wujudkan-indonesia-emas-2045-1685324121', '<p><strong>BNews, BOLMONG</strong> - Sekretaris Daerah (Sekda) Bolaang Mongondow (Bolmong) jadi Inspektur Upacara (Irup) pada peringatan Hari Kebangkitan Nasional (Harkitnas) ke 115, Senin 22 Mei 2023.</p>\r\n<p>Peringatan Harkitnas ini, juga dirangkaikan dengan peringatan Hari Kearsipan Nasional ke 52 dan Hari Buruh Internasional atau May Day.</p>\r\n<p>Upacara yang dipusatkan di alun-alun kantor Bupati Bolmong dengan diikuti seluruh jajaran ASN dan non ASN Bolmong.</p>\r\n<p>Turut hadir pula unsur Forkopimda, para Assisten,staf ahli,seluruh Camat dan para Kepala Desa atau Sangadi.</p>\r\n<p><strong>Baca Juga</strong>:&nbsp;<a href=\"https://bolmong.news/bolmong/bolmong-terbaik-pengelolaan-dak-fisik-di-sulut/\"><strong>Bolmong Terbaik Pengelolaan DAK Fisik di Sulut</strong></a></p>\r\n<p>Sekda Bolmong saat sebelum membacakan pidato Pelaksana Tugas (Plt) Menteri Komunikasi dan Informatika (Menkominfo) Mahfud MD, menyampaikan permohonan maaf atas ketidak hadiran Bupati Bolmong dalam upacara ini.</p>\r\n<p>&ldquo;Mewakili Bupati memohon maaf atas ketidak hadiran Bapak Bupati, karna ada tugas di Provinsi yang tidak bisa diwakilkan&rdquo; ucapnya.</p>\r\n<p>Lanjut Sekda dalam sambutanya, 115 tahun lalu, para persatuan Indonesia sebagai negara mulai menyala.</p>\r\n<p>Hal itu pun ditandai dengan meleburnya berbagai gerakan perjuangan yang bersifat kedaerahan menjadi satu barisan yang utuh dengan didirikannya Boedi Utomo pada 20 Mei 1908.</p>\r\n<p>&ldquo;Sejak saat itu gerakan perjuangan Indonesia dengan gegap gempita bergerak maju mewujudkan Republik Indonesia sebagai negara yang satu, berdaulat, adil, dan makmur,&rdquo; ucap Sekda.</p>\r\n<p><strong>Baca Juga</strong>:&nbsp;<strong><a href=\"https://bolmong.news/bolmong/inilah-sosok-figur-perintis-wtp-di-tiga-daerah-yang-berbeda/\">Inilah Sosok Figur Perintis WTP di Tiga Daerah yang Berbeda</a></strong></p>\r\n<p>Barisan persatuan yang dibentuk oleg Boedi Utomo adalah satu pemantik bagi kekuatan Indonesia dalam menghadapi berbagai tantangan dimasa yang sulit, baik masa pra maupun pasca kemerdekaan.</p>\r\n<p>&ldquo;Dimasa ini saat kemerdekaan kita raih, barisan perjuangan kita harus tetap rapat, erat dan terus maju bergerak mengobarkan api semangat untuk bangkit demi mewujudkan Indonesia emas 2045,&rdquo; sebut Tahlis.</p>\r\n<p>Harkitnas juga dimaknai dengan memperingati perjuangan bersama kita.</p>\r\n<p>Bahkan, kementerian, lembaga, pemerintah daerah sektor swasta, akademisi, pers, komunitas dan seluruh elemen bangsa saling bahu membahu berkolaborasi menerapkan nilai-nilai persatuan dan juga kesatuan dalam mewujudkan kebangkitan bangsa dari berbagai krisis global.</p>\r\n<p><strong>Baca Juga</strong>:&nbsp;<strong><a href=\"https://bolmong.news/bolmut/opini-wtp-jadi-kado-istimewa-hut-ke-16-kabupaten-bolmut/\">Opini WTP jadi Kado Istimewa HUT ke 16 Kabupaten Bolmut</a></strong></p>\r\n<p>&ldquo;Data BPS menunjukkan bahwa perekonomian Indonesia di tahun 2022 tercatat tumbuh 5,31 persen jauh meningkat dari pertumbuhan ditahun 2021 sebesar 3,70 persen dan bahkan melebihi capaian pertumbuhan sebelum masa pandemi di tahun 2019,&rdquo; jelasnya.</p>\r\n<p>Kemudian, tingginya kepercayaan dunia kepada Indonesia menjadi momentum untuk megimpelementasikan semangat kebangkitan nasional dalam menyambut era pasca pandemi Covid-19, sekaligus perjalanan menuju Indonesia emas 2045.</p>\r\n<p>&ldquo;Dengan semangat yang sama pula, kami mengajak seluruh komponen bangsa untuk terus mempertahankan bara api semangat kebangkitan nasional sembari merapatkan barisan perjuangan dengan menunjukkan kerja keras, cerdas, juga demi kemandirian dan kemajuan bangsa yang berkelanjutan,&rdquo; pungkas Sekda Tahlis Galang.</p>\r\n<p>Upacara bendera pun berlangsung tertib dan lancar dengan penuh khidmat.</p>', 'bwtdB1Jjbsna7AaWQVVeAPhttwagPTgdrlKRBvOQ.jpg', NULL, '2023-05-28 17:35:21', '2023-05-28 17:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `news_tag`
--

CREATE TABLE `news_tag` (
  `news_id` int NOT NULL,
  `tag_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `news_tag`
--

INSERT INTO `news_tag` (`news_id`, `tag_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(10, 2),
(10, 1),
(11, 2),
(11, 1),
(12, 2),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 2),
(17, 1),
(18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `pelayanans`
--

CREATE TABLE `pelayanans` (
  `id` int NOT NULL,
  `layanan_1` text COLLATE utf8mb4_general_ci,
  `media_layanan_1` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `layanan_2` text COLLATE utf8mb4_general_ci,
  `media_layanan_2` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `layanan_3` text COLLATE utf8mb4_general_ci,
  `media_layanan_3` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `layanan_4` text COLLATE utf8mb4_general_ci,
  `media_layanan_4` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `layanan_5` text COLLATE utf8mb4_general_ci,
  `media_layanan_5` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `layanan_6` text COLLATE utf8mb4_general_ci,
  `media_layanan_6` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `layanan_7` text COLLATE utf8mb4_general_ci,
  `media_layanan_7` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `layanan_8` text COLLATE utf8mb4_general_ci,
  `media_layanan_8` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `layanan_9` text COLLATE utf8mb4_general_ci,
  `media_layanan_9` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelayanans`
--

INSERT INTO `pelayanans` (`id`, `layanan_1`, `media_layanan_1`, `layanan_2`, `media_layanan_2`, `layanan_3`, `media_layanan_3`, `layanan_4`, `media_layanan_4`, `layanan_5`, `media_layanan_5`, `layanan_6`, `media_layanan_6`, `layanan_7`, `media_layanan_7`, `layanan_8`, `media_layanan_8`, `layanan_9`, `media_layanan_9`, `created_at`, `updated_at`) VALUES
(5, '<strong>1. PERSYARATAN</strong><br /><strong>Penerbitan Kartu Keluarga Baru</strong><br />- Mengisi F1-02<br />- Fotocopy Buku Nikah / Kutipan Akta Perkawinan<br />- SPTJM Perkawinan Belum Tercatat (jika tidak dapat melampirkan Buku Nikah/Akta Perkawinan)<br />\r\n<p><strong>Penerbitan Kartu Keluarga Baru Karena Penggantian Kepala Keluarga (Kematian / Perceraian)<br /></strong>- Mengisi F1-02<br />- Fotocopy Akta Kematian / Akta Perceraian<br />- Fotocopy Kartu Keluarga Lama</p>\r\n<p><strong>Penerbitan Kartu Keluarga Baru Karena Hilang / Rusak<br /></strong>- Mengisi F1-02<br />- Surat Keterangan Hilang dari Kepolisian atau Kartu Keluarga yang rusak<br />- Fotocopy KITAP untuk Orang Asing</p>\r\n<strong><strong>2. JANGKA WAKTU PELAYANAN<br /></strong></strong>Senin &ndash; Kamis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp; 08.00 &ndash; 15.00 Wita<br />Jumat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp; 08.00 &ndash; 13.00 Wita<br />60 Menit per Dokumen ( Di luar rekam cetak KTP-El)<br /><br /><strong>3. BIAYA TARIF</strong><br />Gratis<br /><br /><strong>4. PRODUK</strong><br />Kartu Keluarga<br /><br />\r\n<div><strong><strong>5. LAYANAN PENGADUAN MASYARAKAT<br /></strong></strong>- Datang Langsung<br />- Kotak saran<br />- SP4N lapor &ndash; lapor.go.id<br />- Facebook : dinasdukcapil bolmong<br />- Nomor Whatsapp ( 0822-9241-5903 dan 0813-4355-2293</div>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-03 22:52:21', '2023-07-03 23:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'news.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(2, 'news.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(3, 'news.edit', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(4, 'news.delete', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(5, 'tags.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(6, 'tags.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(7, 'tags.edit', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(8, 'tags.delete', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(9, 'categories.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(10, 'categories.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(11, 'categories.edit', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(12, 'categories.delete', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(13, 'events.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(14, 'events.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(15, 'events.edit', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(16, 'events.delete', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(17, 'photos.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(18, 'photos.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(19, 'photos.delete', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(20, 'videos.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(21, 'videos.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(22, 'videos.edit', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(23, 'videos.delete', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(24, 'files.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(25, 'files.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(26, 'files.edit', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(27, 'files.delete', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(28, 'banners.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(29, 'banners.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(30, 'banners.edit', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(31, 'banners.delete', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(32, 'services.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(33, 'services.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(34, 'services.edit', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(35, 'services.delete', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(36, 'sliders.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(37, 'sliders.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(38, 'sliders.delete', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(39, 'infografis.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(40, 'infografis.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(41, 'infografis.delete', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(42, 'roles.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(43, 'roles.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(44, 'roles.edit', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(45, 'roles.delete', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(46, 'permissions.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(47, 'users.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(48, 'users.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(49, 'users.edit', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(50, 'users.delete', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(51, 'profile.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(52, 'profile.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(53, 'profile.edit', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(54, 'contact.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(55, 'contact.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(56, 'contact.edit', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(57, 'contact.delete', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(58, 'link.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(59, 'link.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(60, 'link.edit', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(61, 'link.delete', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(62, 'sosmed.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(63, 'sosmed.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(64, 'sosmed.edit', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(65, 'sosmed.delete', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(66, 'downloads.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(67, 'downloads.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(68, 'downloads.edit', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(69, 'downloads.delete', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(70, 'profpegs.index', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(71, 'profpegs.create', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(72, 'profpegs.edit', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(73, 'profpegs.delete', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35'),
(74, 'lapors.index', 'web', '2020-09-30 18:40:14', '2021-12-29 01:55:41'),
(75, 'lapors.delete', 'web', '2020-09-30 18:40:14', '2021-12-29 01:55:41'),
(76, 'surveis.index', 'web', NULL, NULL),
(77, 'surveis.delete', 'web', NULL, NULL),
(78, 'facilities.index', 'web', NULL, NULL),
(79, 'facilities.create', 'web', NULL, NULL),
(80, 'facilities.delete', 'web', NULL, NULL),
(81, 'pelayanans.index', 'web', NULL, NULL),
(82, 'pelayanans.create', 'web', NULL, NULL),
(83, 'pelayanans.edit', 'web', NULL, NULL),
(84, 'pelayanans.delete', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image`, `caption`, `created_at`, `updated_at`) VALUES
(2, 'PYiXTXhE3dYPeOSmZtNOWsDS7EC4N5OePaB1amOW.jpg', 'Pelantikan Kepala Dinas', '2023-06-07 22:03:41', '2023-06-07 22:03:41'),
(3, '7G961DQguNT9f360sEC1F21Z4FeW84VVtJ3VPVu4.jpg', 'Tahlis gallang', '2023-06-07 22:07:02', '2023-06-07 22:07:02');

-- --------------------------------------------------------

--
-- Table structure for table `potensis`
--

CREATE TABLE `potensis` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_opd` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dasar_hukum` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sejarah` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `visi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `misi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `program` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tupoksi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `kata_sambutan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `foto_pimpinan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `struktur_organisasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maklumat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `nama_opd`, `short_name`, `dasar_hukum`, `sejarah`, `visi`, `misi`, `program`, `tupoksi`, `kata_sambutan`, `foto_pimpinan`, `struktur_organisasi`, `logo`, `favicon`, `maklumat`, `created_at`, `updated_at`) VALUES
(1, 'Dinas Kependudukan dan Pencatatan Sipil', 'DISDUKCAPIL', 'Kedudukan dan dasar hukum Kegiatan Penyusunan Rencana Pembangunan Jangka Menengah Daerah Kabupaten Bolaang Mongondow Tahun 2017 &ndash; 2022 adalah:<br /><br />a. Undang-Undang Nomor 29 Tahun 1959 tentang Pembentukan Daerah daerahTingkat II di Sulawesi;<br />b. Undang-Undang Nomor 25 Tahun 2004 tentang Sistem Perencanaan Pembangunan Nasional;<br />c. Undang-Undang Nomor 17 Tahun 2007 tentang Rencana Pembangunan Jangka Panjang Nasional Tahun 2005-2025;<br />d. Undang-Undang Nomor 43 Tahun 2007 tentang Perpustakaan ;<br />e. Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik;<br />f. Undang-Undang Nomor 25 Tahun 2009 tentang Pelayanan Publik;<br />g. Undang-Undang Nomor 43 Tahun 2009 tentang Kearsipan;<br />h Undang-Undang Nomor 23 Tahun 2014 Tentang Pemerintahan Daerah dan perubahannya sebagaimana telah diubah terakhir dengan Undang-Undang Nomor 9 Tahun 2015 Tentang Perubahan Kedua atas Undang-Undang Nomor 23 Tahun 2014;<br />i. Peraturan pemerintah No. 8 tahun 2006 tentang Laporan Keuangan dan Kinerja Instansi Pemerintah;<br />j. Peraturan Pemerintah Nomor 39 Tahun 2006 tentang tata cara Pengendalian dan Evaluasi Pelaksanaan Rencana Pembangunan;<br />k. Peraturan Pemerintah Nomor 38 Tahun 2007 tentang Pembagian Urusan Pemerintahan antara Pemerintah, Pemerintah Daerah Provinsi dan Pemerintahan Daerah Kabupaten/Kota;<br />l. Peraturan Pemerintah Nomor 6 Tahun 2008 tentang Pedoman Evaluasi Penyelenggaraan Pemerintah Daerah;<br />m. Peraturan Pemerintah Nomor 8 Tahun 2008 tentang Tahapan, Tata Cara Penyusunan, Pengendalian dan Evaluasi Pelaksanaan Rencana Pembangunan Daerah;<br />n. Peraturan Pemerintah Nomor 28 Tahun 2012 tentang Pelaksanaan Undang- Undang Nomor 43 Tahun 2009 tentang Kearsipan;<br />o. Peraturan Pemerintah Nomor 18 Tahun 2016 tentang Perangkat Daerah;<br />p. Peraturan Presiden Nomor 2 Tahun 2015 tentang Rencana Pembangunan Jangka Menengah Nasional Tahun 2015-2019;<br />q. Peraturan Menteri Dalam Negeri Nomor 86 Tahun 2017 tentang Tata Cara Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah, Tata Cara Evaluasi Rancangan Peraturan Daerah Tentang Rencana Pembangunan Jangka Panjang Daerah dan Rencana Pembangunan Jangka Menengah Daerah, Serta Tata Cara Perubahan Rencana Pembangunan Jangka Panjang Daerah, Rencana Pembangunan Jangka Menengah Daerah, dan Rencana Kerja Pemerintah Daerah;<br />r. Peraturan Daerah Kabupaten Bolaang Mongondow Nomor 1 Tahun 2015 tentang Rencana Pembangunan Jangka Panjang Daerah Kabupaten Bolaang Mongondow Tahun 2005-2025;<br />s. Peraturan Daerah Kabupaten Bolaang Mongondow Nomor 2 Tahun 2014 tentang Rencana Tata Ruang Wilayah Kabupaten Bolaang Mongondow Tahun 2014-2034;<br />t. Peraturan Daerah Kabupaten Bolaang Mongondow Nomor 14 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Kabupaten Bolaang Mongondow;<br />u. Peraturan Daerah Kabupaten Bolaang Mongondow Nomor 6 Tahun 2017 tentang Rencana Pembangunan Jangka Menengah Daerah Kabupaten Bolaang Mongondow Tahun 2017-2022;<br />v. Peraturan Bupati Nomor 33 Tahun 2016 Tentang Susunan Organisasi, Tugas dan Fungsi, serta Tata Kerja Dinas Kependudukan dan Pencatatan Sipil Tipe A Kabupaten Bolaang Mongondow.', '-', '<strong>&ldquo;Menuju Bolaang Mongondow Hebat&rdquo;</strong>', '<strong>&rdquo;Mewujudkan Masyarakat Bahagia Melalui Kepemilikan Dokumen Kependudukan&rdquo;</strong>', '<strong>1. Program Penunjang Urusan Pemerintah Daerah Kabupaten/Kota</strong><br />- Penyediaan Administrasi Pelaksanaan Tugas ASN<br />- Penyediaan Pakaian Dinas Beserta Atribut Kelengkapannya<br />- Penyediaan Peralatan dan Perlengkapan Kantor<br />- Penyediaan Barang Cetakan dan Penggandaan<br />- Penyediaan Bahan Bacaan dan Peraturan Perundang-Undangan<br />- Penyelenggaraan Rapat Koordinasi dan Konsultasi SKPD<br />- Penyediaan Jasa Surat Menyurat<br />- Penyediaan Jasa Komunikasi,Sumber Daya Air dan Listrik<br />- Penyedia Jasa Pelaynan Umum Kantor<br />- Penyediaan Jasa Pemeliharaan,Biaya Pemeliharaan,dan Pajak Kendaraan Perorangan Dinas atau Kendaraan Dinas Jabatan<br />- Pemeliharaan Peralatan dan Mesin Lainnya<br />- Pemeliharaan /Rehabilitasi Gedung Kantor dan bangunan<br /><br /><strong>2. Program Pendaftaran Penduduk</strong><br />- Pengadaan Dokumen Kependudukan sekain Blanko KTP-El,Formulir dan buku terkait Pendaftaran Penduduk sesuai dengan Kebutuhan<br />- Pelayanan secara aktif Pendaftaran Renja Dinas Kependudukan dan Pencatatan Sipil Tahun 2021 <br />- Peristiwa Kependudukan dan Pencatatan Peristiwa Penting Terkait Pendaftaran Penduduk<br /><br /><strong>3. Program Pencatatan Sipil</strong><br />- Penyusunan Tata Cara Perencanaan,Pelaksanaan, Pemantauan ,Evaluasi,Pengendalian dan Pelaopran Penyelenggaraan Adminduk terkait Pencatatn sipil<br /><br /><strong>4. Program Pengelolaan Informasi Administrasi Kependudukan</strong><br />- Kerjasama Pemanfaatan data Kependudukan', 'Dinas Kependukan dan Pencatatan Sipil mempunyai tugas membantu Bupati dalam melaksanakan fungsi penunjang urusan pemerintahan di bidang administrasi kependudukan yang menjadi kewenangan daerah dan tugas pembantuan yang diberikan kepada kabupaten di bidang administrasi kependudukan.', '-', 'assets/profile/DvaEjn6f3pXogKVesLnmDmyRDQ03p8W4hGsxdVlt.png', 'assets/profile/oCdB9JUpwjJfJ4MwQrWuKAowBSFDKsUulpLOoB6I.png', 'assets/profile/QS42BtFKHNZRCSrwaZvHndDFCBvKkg6Q3bKu9227.png', 'assets/profile/6o1B9uK3SGgUqBt7JChFb1ULM884TJ2wibLJ3go1.png', 'assets/profile/wD5p5u786BJN9fM2JUPCxKuB97MbjXdx53t8VNln.png', '2022-08-21 17:40:39', '2023-07-14 02:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `profpegs`
--

CREATE TABLE `profpegs` (
  `id` bigint UNSIGNED NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-08-21 17:38:35', '2022-08-21 17:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `nama`, `content`, `link`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'lapor', '-', 'https://www.lapor.go.id/', NULL, '2022-08-21 18:25:49', '2022-08-21 18:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sort` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title`, `keterangan`, `sort`, `created_at`, `updated_at`) VALUES
(9, 'VObksg14Y4oCdALVAQhYroiTHDR7CoMwsR8drcNL.jpg', 'DISDUKCAPIL', 'Dinas Kependukan dan Pencatatan Sipil', NULL, '2023-06-19 19:22:29', '2023-06-19 19:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `sosmeds`
--

CREATE TABLE `sosmeds` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sosmeds`
--

INSERT INTO `sosmeds` (`id`, `name`, `url`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'facebook', '#', 'fa fa-facebook', '2022-08-28 07:19:44', '2023-05-29 17:30:59'),
(2, 'youtube', '#', 'fa fa-youtube-play', '2022-08-28 07:20:10', '2023-05-29 17:31:18'),
(3, 'twitter', '#', 'fa fa-twitter', '2023-05-29 17:31:54', '2023-05-29 17:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` bigint UNSIGNED NOT NULL,
  `menu_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `surveis`
--

CREATE TABLE `surveis` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `mekanisme_pelayanan` int NOT NULL,
  `jangka_waktu` int NOT NULL,
  `layanan_pengaduan` int NOT NULL,
  `sarana_prasarana` int NOT NULL,
  `nama_pelaksana_pelayanan` varchar(255) NOT NULL,
  `kualitas_pelaksana_pelayanan` int NOT NULL,
  `jaminan_keamanan` int NOT NULL,
  `jaminan_pelayanan` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `surveis`
--

INSERT INTO `surveis` (`id`, `nama`, `telp`, `alamat`, `mekanisme_pelayanan`, `jangka_waktu`, `layanan_pengaduan`, `sarana_prasarana`, `nama_pelaksana_pelayanan`, `kualitas_pelaksana_pelayanan`, `jaminan_keamanan`, `jaminan_pelayanan`, `created_at`, `updated_at`) VALUES
(4, 'John Doe', '82211667893', 'Lolak', 80, 60, 80, 100, 'Dewi Lesmana', 40, 20, 80, '2022-09-20 18:45:00', '2022-09-20 18:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'bolmong', 'bolmong', '2022-08-21 17:42:29', '2022-08-21 17:42:29'),
(2, 'bupati', 'bupati', '2022-09-20 17:34:14', '2022-09-20 17:34:14'),
(3, 'pns', 'pns', '2022-09-20 17:34:25', '2022-09-20 17:34:25');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'egovindra@gmail.com', NULL, '$2y$10$K1RSQeMTS24Fy8r.dKMaTeMHaESmqSxdDhaWMLvlKyF7mpAPieZ3O', NULL, '2022-09-11 23:16:37', '2022-09-20 19:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `embed` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` bigint UNSIGNED NOT NULL,
  `viewable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewable_id` bigint UNSIGNED NOT NULL,
  `visitor` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `collection` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `viewable_type`, `viewable_id`, `visitor`, `collection`, `viewed_at`) VALUES
(1, 'App\\Models\\News', 2, 'rM1KlJSUV91C3J5v7hpyvJVhuYjRvRk0J6uW5YRW6NKbNpMslYCmHpHFWGgbPItLk6Q3oOGZJfhkeb1f', NULL, '2022-08-21 17:45:32'),
(2, 'App\\Models\\News', 1, 'rM1KlJSUV91C3J5v7hpyvJVhuYjRvRk0J6uW5YRW6NKbNpMslYCmHpHFWGgbPItLk6Q3oOGZJfhkeb1f', NULL, '2022-08-21 17:45:40'),
(3, 'App\\Models\\News', 3, 'rM1KlJSUV91C3J5v7hpyvJVhuYjRvRk0J6uW5YRW6NKbNpMslYCmHpHFWGgbPItLk6Q3oOGZJfhkeb1f', NULL, '2022-08-21 18:34:21'),
(4, 'App\\Models\\News', 4, 'rM1KlJSUV91C3J5v7hpyvJVhuYjRvRk0J6uW5YRW6NKbNpMslYCmHpHFWGgbPItLk6Q3oOGZJfhkeb1f', NULL, '2022-08-21 18:34:25'),
(5, 'App\\Models\\News', 4, 'rM1KlJSUV91C3J5v7hpyvJVhuYjRvRk0J6uW5YRW6NKbNpMslYCmHpHFWGgbPItLk6Q3oOGZJfhkeb1f', NULL, '2022-08-21 21:17:46'),
(6, 'App\\Models\\News', 2, 'rM1KlJSUV91C3J5v7hpyvJVhuYjRvRk0J6uW5YRW6NKbNpMslYCmHpHFWGgbPItLk6Q3oOGZJfhkeb1f', NULL, '2022-08-21 22:11:09'),
(7, 'App\\Models\\News', 3, 'vqaIZReCnecxqy74QQFFjW3O95dH28XK7mIlmsh7ykNbkXkLlJFNSjYTqNRVs4WcO4a7FIUcz2wjs9Rb', NULL, '2022-08-24 04:53:34'),
(8, 'App\\Models\\News', 1, 'vqaIZReCnecxqy74QQFFjW3O95dH28XK7mIlmsh7ykNbkXkLlJFNSjYTqNRVs4WcO4a7FIUcz2wjs9Rb', NULL, '2022-08-24 04:53:49'),
(9, 'App\\Models\\News', 4, 'vqaIZReCnecxqy74QQFFjW3O95dH28XK7mIlmsh7ykNbkXkLlJFNSjYTqNRVs4WcO4a7FIUcz2wjs9Rb', NULL, '2022-08-24 04:53:59'),
(10, 'App\\Models\\News', 1, 'YN5BHPtki0QaevXYsSb1WpT2i4Mz9XI31mPMzGIo7sJzRtiG7xdFPmt0oreyG5x3puFFEbEWrovVBUJN', NULL, '2022-08-24 17:27:00'),
(11, 'App\\Models\\News', 2, 'YN5BHPtki0QaevXYsSb1WpT2i4Mz9XI31mPMzGIo7sJzRtiG7xdFPmt0oreyG5x3puFFEbEWrovVBUJN', NULL, '2022-08-24 17:27:08'),
(12, 'App\\Models\\News', 4, 'F7oGFXst3VUkeNGoDLtkharRVng2jKnMyWFcIQ7nBjx1eRp6n1vHbaCcm8WpguqzIrGKKQ0RsCBAOxYf', NULL, '2022-08-28 07:00:16'),
(103, 'App\\Models\\News', 10, 'XIfkZK8Sy8dLG4TdZ03YlFVKLCjsZAlHmfFAxYgCtkBV6mWSwRnG31yFpyNfMR5lkRaYcef5upMhNzPT', NULL, '2023-05-28 17:22:08'),
(104, 'App\\Models\\News', 17, 'XIfkZK8Sy8dLG4TdZ03YlFVKLCjsZAlHmfFAxYgCtkBV6mWSwRnG31yFpyNfMR5lkRaYcef5upMhNzPT', NULL, '2023-05-28 17:33:31'),
(105, 'App\\Models\\News', 13, 'XIfkZK8Sy8dLG4TdZ03YlFVKLCjsZAlHmfFAxYgCtkBV6mWSwRnG31yFpyNfMR5lkRaYcef5upMhNzPT', NULL, '2023-06-04 16:49:31'),
(106, 'App\\Models\\News', 10, 'XIfkZK8Sy8dLG4TdZ03YlFVKLCjsZAlHmfFAxYgCtkBV6mWSwRnG31yFpyNfMR5lkRaYcef5upMhNzPT', NULL, '2023-06-04 16:49:36'),
(107, 'App\\Models\\News', 18, 'XIfkZK8Sy8dLG4TdZ03YlFVKLCjsZAlHmfFAxYgCtkBV6mWSwRnG31yFpyNfMR5lkRaYcef5upMhNzPT', NULL, '2023-06-04 18:26:15'),
(108, 'App\\Models\\News', 12, 'XIfkZK8Sy8dLG4TdZ03YlFVKLCjsZAlHmfFAxYgCtkBV6mWSwRnG31yFpyNfMR5lkRaYcef5upMhNzPT', NULL, '2023-06-04 18:26:20'),
(109, 'App\\Models\\News', 18, 'wNGoslOtv9eQGQp8S46tjaavEahvHLgtnVvqcjUx40iJsMyQEvUcFaEDqMfh8sEK03hJaQVVrZpXMDri', NULL, '2023-06-05 10:40:06'),
(110, 'App\\Models\\News', 14, 'NlkIt0iA3Nd8lyZM3wgJwb9I9U9T8RUBBlJtUazSuTMHp6s5xAchvkO89qeXL5RGC3QDTBzdXudyVoZz', NULL, '2023-06-07 17:48:22'),
(111, 'App\\Models\\News', 18, 'NlkIt0iA3Nd8lyZM3wgJwb9I9U9T8RUBBlJtUazSuTMHp6s5xAchvkO89qeXL5RGC3QDTBzdXudyVoZz', NULL, '2023-06-25 19:13:07'),
(112, 'App\\Models\\News', 17, 'NlkIt0iA3Nd8lyZM3wgJwb9I9U9T8RUBBlJtUazSuTMHp6s5xAchvkO89qeXL5RGC3QDTBzdXudyVoZz', NULL, '2023-06-26 18:23:17'),
(113, 'App\\Models\\News', 17, 'y6LJEv7cYHyQhc64cfh6gJHlGJPkj7V2ij8nAbFxymYnJucADcYtHUHu6n2LW3FWr5xkUIA1BDDMKLfC', NULL, '2023-07-02 21:26:49'),
(114, 'App\\Models\\News', 15, 'y6LJEv7cYHyQhc64cfh6gJHlGJPkj7V2ij8nAbFxymYnJucADcYtHUHu6n2LW3FWr5xkUIA1BDDMKLfC', NULL, '2023-07-02 22:00:32'),
(115, 'App\\Models\\News', 10, 'y6LJEv7cYHyQhc64cfh6gJHlGJPkj7V2ij8nAbFxymYnJucADcYtHUHu6n2LW3FWr5xkUIA1BDDMKLfC', NULL, '2023-07-02 22:09:13'),
(116, 'App\\Models\\News', 16, 'y6LJEv7cYHyQhc64cfh6gJHlGJPkj7V2ij8nAbFxymYnJucADcYtHUHu6n2LW3FWr5xkUIA1BDDMKLfC', NULL, '2023-07-02 22:48:10'),
(117, 'App\\Models\\News', 18, 'y6LJEv7cYHyQhc64cfh6gJHlGJPkj7V2ij8nAbFxymYnJucADcYtHUHu6n2LW3FWr5xkUIA1BDDMKLfC', NULL, '2023-07-02 22:56:04'),
(118, 'App\\Models\\News', 18, 'NR7fjIUN8s6ASJun8C9KSACHXLHXHJuLX4CJs8uVObZwjCrs6rZ3aGn272hY8qRZYM80WRhhEWpMMOQa', NULL, '2023-07-03 08:31:02'),
(119, 'App\\Models\\News', 18, 'NR7fjIUN8s6ASJun8C9KSACHXLHXHJuLX4CJs8uVObZwjCrs6rZ3aGn272hY8qRZYM80WRhhEWpMMOQa', NULL, '2023-07-03 10:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint UNSIGNED NOT NULL,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `device` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`),
  ADD UNIQUE KEY `contacts_no_telp_unique` (`no_telp`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `events_slug_unique` (`slug`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_user_id_foreign` (`user_id`);

--
-- Indexes for table `infografis`
--
ALTER TABLE `infografis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapors`
--
ALTER TABLE `lapors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_slug_unique` (`slug`),
  ADD KEY `news_user_id_foreign` (`user_id`),
  ADD KEY `news_category_id_foreign` (`category_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelayanans`
--
ALTER TABLE `pelayanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potensis`
--
ALTER TABLE `potensis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `potensis_slug_unique` (`slug`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profpegs`
--
ALTER TABLE `profpegs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosmeds`
--
ALTER TABLE `sosmeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submenus_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `surveis`
--
ALTER TABLE `surveis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_viewable_type_viewable_id_index` (`viewable_type`,`viewable_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `infografis`
--
ALTER TABLE `infografis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lapors`
--
ALTER TABLE `lapors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pelayanans`
--
ALTER TABLE `pelayanans`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `potensis`
--
ALTER TABLE `potensis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profpegs`
--
ALTER TABLE `profpegs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sosmeds`
--
ALTER TABLE `sosmeds`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surveis`
--
ALTER TABLE `surveis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `submenus`
--
ALTER TABLE `submenus`
  ADD CONSTRAINT `submenus_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
