-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 04:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4app`
--

-- --------------------------------------------------------

--
-- Table structure for table `human`
--

CREATE TABLE `human` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `alamat` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `human`
--

INSERT INTO `human` (`id`, `nama`, `email`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Ajiono Winarno', 'puspita.teddy@gmail.co.id', 'Ds. Laswi No. 736, Tanjung Pinang 72734, Jabar', '1970-09-24 17:31:32', '2023-06-23 15:33:07'),
(2, 'Suci Yolanda', 'lanang51@yahoo.co.id', 'Ds. Baing No. 836, Probolinggo 57077, Malut', '1992-12-12 04:57:50', '2023-06-23 15:33:07'),
(3, 'Yance Citra Pratiwi S.Gz', 'hadi25@yahoo.co.id', 'Ki. Pintu Besar Selatan No. 648, Ambon 33626, Kalbar', '2018-08-22 18:24:30', '2023-06-23 15:33:07'),
(4, 'Zulfa Samiah Rahmawati', 'uwais.cinthia@wastuti.biz', 'Dk. Abdul No. 249, Jayapura 92620, Papua', '1994-08-26 08:28:57', '2023-06-23 15:33:07'),
(5, 'Ajimat Sirait', 'kamaria73@napitupulu.id', 'Ds. Kali No. 291, Batu 37544, Jabar', '2000-02-09 19:55:12', '2023-06-23 15:33:07'),
(6, 'Capa Rajasa S.E.', 'vsalahudin@gmail.co.id', 'Kpg. Teuku Umar No. 324, Tidore Kepulauan 57261, Sumsel', '1987-11-08 21:13:36', '2023-06-23 15:33:07'),
(7, 'Fitria Rahayu', 'dtamba@yolanda.sch.id', 'Dk. Bakaru No. 50, Pematangsiantar 92365, Papua', '2019-09-19 00:59:54', '2023-06-23 15:33:07'),
(8, 'Kani Pudjiastuti', 'xhutagalung@nababan.mil.id', 'Ki. Supomo No. 648, Bandung 11122, Jabar', '2018-01-25 06:34:05', '2023-06-23 15:33:07'),
(9, 'Keisha Usada', 'yagustina@anggriawan.go.id', 'Kpg. Jakarta No. 869, Kediri 61667, Kalbar', '2008-05-16 06:55:40', '2023-06-23 15:33:07'),
(10, 'Ajeng Lestari S.Sos', 'raisa08@mandasari.asia', 'Jln. Ekonomi No. 496, Medan 96387, Banten', '1999-08-31 20:21:56', '2023-06-23 15:33:07'),
(11, 'Diah Suryatmi', 'kambali39@yahoo.com', 'Ki. Dipatiukur No. 879, Cimahi 89605, Jambi', '1973-08-14 23:38:03', '2023-06-23 15:33:07'),
(12, 'Ismail Umay Saputra S.Gz', 'okta.purwanti@yahoo.com', 'Jln. R.E. Martadinata No. 533, Administrasi Jakarta Selatan 69031, Lampung', '1979-03-24 17:00:35', '2023-06-23 15:33:07'),
(13, 'Talia Riyanti', 'cawuk.jailani@pudjiastuti.ac.id', 'Dk. Ters. Buah Batu No. 364, Pontianak 55948, Bali', '2021-06-03 22:36:54', '2023-06-23 15:33:07'),
(14, 'Rika Eka Rahimah', 'radit.prakasa@pratiwi.org', 'Ki. Wahidin Sudirohusodo No. 48, Subulussalam 55174, Kalbar', '2001-03-18 03:30:02', '2023-06-23 15:33:07'),
(15, 'Kani Purnawati S.Kom', 'lnugroho@gmail.co.id', 'Gg. Yoga No. 300, Bogor 24701, Kepri', '2000-03-13 08:54:42', '2023-06-23 15:33:07'),
(16, 'Gina Riyanti', 'mzulaika@yahoo.co.id', 'Dk. Bahagia  No. 771, Banda Aceh 51828, Jateng', '1991-05-02 04:04:34', '2023-06-23 15:33:07'),
(17, 'Kartika Indah Purnawati', 'khidayat@yahoo.co.id', 'Jr. Cikapayang No. 769, Solok 74679, DIY', '1980-09-10 15:34:20', '2023-06-23 15:33:07'),
(18, 'Elma Prastuti', 'panggraini@gmail.co.id', 'Kpg. R.E. Martadinata No. 639, Batam 92110, Riau', '1974-10-01 04:15:17', '2023-06-23 15:33:07'),
(19, 'Luis Simon Mahendra', 'jessica66@halim.co.id', 'Kpg. Gardujati No. 54, Binjai 59099, Sulut', '2016-06-25 12:22:59', '2023-06-23 15:33:07'),
(20, 'Lintang Riyanti', 'ratna01@firgantoro.my.id', 'Psr. Monginsidi No. 121, Tegal 34035, Kepri', '2011-06-05 21:25:12', '2023-06-23 15:33:07'),
(21, 'Tania Kusmawati', 'karna.marbun@gmail.com', 'Ki. Wahidin Sudirohusodo No. 162, Payakumbuh 59219, Kalteng', '1992-10-04 09:01:24', '2023-06-23 15:33:07'),
(22, 'Banawi Dabukke', 'ellis26@prasasta.co', 'Gg. Salatiga No. 145, Serang 70633, NTT', '1978-01-05 03:39:19', '2023-06-23 15:33:07'),
(23, 'Zizi Lalita Hassanah S.T.', 'gilang.sihotang@wahyuni.mil.id', 'Kpg. Sadang Serang No. 195, Kotamobagu 53539, Babel', '1988-08-14 05:28:59', '2023-06-23 15:33:07'),
(24, 'Kania Hariyah', 'clara72@yahoo.com', 'Ki. Bappenas No. 907, Palu 69118, Maluku', '2019-10-01 11:49:02', '2023-06-23 15:33:07'),
(25, 'Salsabila Syahrini Hastuti', 'hartaka.najmudin@lailasari.biz', 'Ki. Bara Tambar No. 507, Bandung 24616, Bali', '2005-09-20 07:33:01', '2023-06-23 15:33:08'),
(26, 'Endra Damanik', 'nadine04@yahoo.com', 'Gg. Rumah Sakit No. 598, Prabumulih 51032, Babel', '1987-12-16 06:40:34', '2023-06-23 15:33:08'),
(27, 'Eva Uyainah', 'fwinarsih@yahoo.com', 'Jln. Yap Tjwan Bing No. 953, Cirebon 76831, Sumut', '1979-08-07 02:24:13', '2023-06-23 15:33:08'),
(28, 'Adika Warsita Najmudin', 'haryanti.ani@wijayanti.name', 'Jr. Moch. Ramdan No. 211, Bengkulu 99514, Sulbar', '1974-04-22 10:49:45', '2023-06-23 15:33:08'),
(29, 'Banara Samosir', 'najam70@aryani.org', 'Ds. Banceng Pondok No. 155, Palopo 82724, Riau', '1979-04-28 21:48:26', '2023-06-23 15:33:08'),
(30, 'Winda Laksmiwati', 'mprasasta@purwanti.my.id', 'Ki. BKR No. 262, Lubuklinggau 82654, Aceh', '1973-10-05 14:42:13', '2023-06-23 15:33:08'),
(31, 'Gambira Cakrajiya Nainggolan S.Pt', 'cahyo82@megantara.mil.id', 'Kpg. Sugiono No. 845, Payakumbuh 77521, Kalbar', '2023-03-30 08:28:53', '2023-06-23 15:33:08'),
(32, 'Dalima Riyanti', 'sastuti@saefullah.in', 'Dk. Kebonjati No. 456, Pariaman 43465, Maluku', '2004-11-17 23:31:01', '2023-06-23 15:33:08'),
(33, 'Harsaya Prakasa', 'rwahyuni@sitompul.mil.id', 'Ds. Baranang Siang Indah No. 417, Ambon 74724, Sumut', '1983-12-22 10:10:47', '2023-06-23 15:33:08'),
(34, 'Wani Laksmiwati S.Pt', 'esantoso@yahoo.co.id', 'Gg. Cikutra Timur No. 19, Tasikmalaya 67315, Kalbar', '1995-04-28 03:00:51', '2023-06-23 15:33:08'),
(35, 'Eko Pratama M.TI.', 'mrajasa@yahoo.com', 'Ds. Antapani Lama No. 669, Padangsidempuan 81907, Pabar', '1996-02-23 00:02:37', '2023-06-23 15:33:08'),
(36, 'Ratih Wijayanti', 'nababan.daliono@gmail.com', 'Kpg. Laswi No. 641, Bogor 32248, Kalteng', '1997-01-19 05:02:40', '2023-06-23 15:33:08'),
(37, 'Zizi Ida Yolanda', 'ana.gunarto@sihombing.web.id', 'Ds. Gatot Subroto No. 397, Batu 62062, Jatim', '1981-08-24 10:56:14', '2023-06-23 15:33:08'),
(38, 'Umi Rahimah', 'zwidodo@gmail.co.id', 'Jr. Tambun No. 364, Administrasi Jakarta Pusat 56741, Maluku', '1991-07-25 05:43:03', '2023-06-23 15:33:08'),
(39, 'Shakila Puspasari', 'vanya.nasyidah@gmail.co.id', 'Ki. Pahlawan No. 929, Bandung 85577, Jateng', '1996-04-10 18:02:45', '2023-06-23 15:33:08'),
(40, 'Ibrahim Martaka Wibisono S.Sos', 'panji.sinaga@setiawan.in', 'Gg. Uluwatu No. 741, Metro 77356, Kalsel', '1981-09-22 02:07:15', '2023-06-23 15:33:08'),
(41, 'Febi Usada S.Ked', 'nurul.rahayu@gmail.com', 'Jln. Bank Dagang Negara No. 782, Madiun 49885, Kalbar', '2006-11-26 07:24:09', '2023-06-23 15:33:08'),
(42, 'Gatra Sirait', 'yunita49@yuliarti.desa.id', 'Dk. Jend. Sudirman No. 593, Semarang 26224, Kalsel', '1979-01-25 15:22:38', '2023-06-23 15:33:08'),
(43, 'Ophelia Melani S.Farm', 'prasasta.citra@yahoo.co.id', 'Kpg. Yap Tjwan Bing No. 469, Banjar 45099, Maluku', '1971-07-30 20:36:24', '2023-06-23 15:33:08'),
(44, 'Mutia Wijayanti', 'hasna.aryani@santoso.in', 'Gg. Thamrin No. 936, Administrasi Jakarta Pusat 24944, Sumut', '2012-02-04 20:29:12', '2023-06-23 15:33:08'),
(45, 'Eva Rahayu Rahayu M.Kom.', 'violet57@rajasa.biz', 'Ki. Supono No. 297, Surakarta 69656, Kepri', '1992-11-01 23:48:53', '2023-06-23 15:33:08'),
(46, 'Cahyono Megantara', 'calista.purwanti@gmail.com', 'Kpg. Laswi No. 614, Payakumbuh 37707, Kalbar', '1970-12-13 01:53:06', '2023-06-23 15:33:08'),
(47, 'Makara Panji Uwais', 'sihombing.jinawi@gmail.co.id', 'Kpg. M.T. Haryono No. 367, Batu 58492, Kalbar', '2008-11-10 22:51:09', '2023-06-23 15:33:08'),
(48, 'Tania Bella Palastri', 'outami@yahoo.com', 'Kpg. Cokroaminoto No. 291, Mojokerto 84422, Lampung', '1997-11-19 00:05:03', '2023-06-23 15:33:08'),
(49, 'Karna Nababan S.E.I', 'sabri.pudjiastuti@yahoo.com', 'Ds. Gegerkalong Hilir No. 116, Denpasar 98501, Jatim', '2022-12-27 16:21:50', '2023-06-23 15:33:08'),
(50, 'Vero Sirait', 'wisnu.melani@gmail.com', 'Psr. Ujung No. 163, Tual 58850, Kalsel', '1997-08-07 10:17:03', '2023-06-23 15:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `komik`
--

CREATE TABLE `komik` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `sampul` varchar(300) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komik`
--

INSERT INTO `komik` (`id`, `judul`, `slug`, `penulis`, `penerbit`, `sampul`, `created_at`, `updated_at`) VALUES
(1, 'Naruto', 'naruto', 'Mashashi Khisimoto', 'Shonen Jump', 'naruto.jpg', NULL, '2023-06-20 18:30:17'),
(2, 'One Piece', 'one-piece', 'Ichiro Oda', 'Toe Animation', 'one piece.jpg', NULL, NULL),
(23, 'no name', 'no-name', 'no name', '-', 'default.png', '2023-06-22 09:53:47', '2023-06-22 09:53:47'),
(24, 'ubah judul saja', 'ubah-judul-saja', 'sdfds', 'dfsdfds', '1687456902_7e426987bbce1bfd79f0.jpeg', '2023-06-22 10:18:25', '2023-06-22 18:01:42'),
(26, 'ombing', 'ombing', 'joko tingkir', 'abdu rahman', '1687534754_fba6c84fc888c409efbc.png', '2023-06-23 15:39:14', '2023-06-23 15:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-06-23-142220', 'App\\Database\\Migrations\\Human', 'default', 'App', 1687530927, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `human`
--
ALTER TABLE `human`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `human`
--
ALTER TABLE `human`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `komik`
--
ALTER TABLE `komik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
