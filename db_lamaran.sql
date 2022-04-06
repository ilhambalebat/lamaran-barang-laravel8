-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 06:41 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lamaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tersedia` int(11) NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `kode`, `nama`, `lokasi_id`, `tersedia`, `satuan`, `created_at`, `updated_at`) VALUES
('06cbe179-af57-3a19-ad2c-dd39922c22d8', 'ATK0008', 'AMPLOP H COKLAT JAYA', '48a4f8c1-8e25-3a18-88fa-7f5f95529cf7', 48, 'Pak', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('2d6295f8-2c22-332b-98e7-34e9ec3f29ec', 'ATK00010', 'AMPLOP J COKLAT JAYA', '48a4f8c1-8e25-3a18-88fa-7f5f95529cf7', 82, 'Pak', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('7d60878a-9775-3695-8f71-bd3a55523e18', 'ATK0007', 'AMPLOP G COKLAT JAYA', '48a4f8c1-8e25-3a18-88fa-7f5f95529cf7', 71, 'Pak', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('88101ad8-c674-3d4d-ac2e-f8f594610bf5', 'ATK0001', 'AMPLOP A COKLAT JAYA', 'c3b49527-b2ad-32ab-8fc3-30a2afdcd623', 100, 'Pak', '2022-04-06 08:30:23', '2022-04-06 09:38:23'),
('8966fef2-4f27-3364-a62b-4c2876c23808', 'ATK0003', 'AMPLOP C COKLAT JAYA', 'c3b49527-b2ad-32ab-8fc3-30a2afdcd623', 10, 'Pak', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('97511e43-b9b2-3051-a99e-88a3d1121592', 'ATK0006', 'AMPLOP F COKLAT JAYA', '48a4f8c1-8e25-3a18-88fa-7f5f95529cf7', 50, 'Pak', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('a388ebc5-e009-38b6-af38-392a3499584a', 'ATK0004', 'AMPLOP D COKLAT JAYA', 'c3b49527-b2ad-32ab-8fc3-30a2afdcd623', 98, 'Pak', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('b36a191b-03d3-3998-9d93-fe65b1037ccc', 'ATK0002', 'AMPLOP B COKLAT JAYA', 'c3b49527-b2ad-32ab-8fc3-30a2afdcd623', 68, 'Pak', '2022-04-06 08:30:23', '2022-04-06 09:38:23'),
('c1da1cb2-60ed-3ef8-ab47-8e204af87d19', 'ATK0009', 'AMPLOP I COKLAT JAYA', '48a4f8c1-8e25-3a18-88fa-7f5f95529cf7', 64, 'Pak', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('ec0ebd74-e744-38d2-b50f-3c6d1b6d651f', 'ATK0005', 'AMPLOP E COKLAT JAYA', 'c3b49527-b2ad-32ab-8fc3-30a2afdcd623', 62, 'Pak', '2022-04-06 08:30:23', '2022-04-06 08:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `departemens`
--

CREATE TABLE `departemens` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departemens`
--

INSERT INTO `departemens` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('14858b04-59ad-3a71-bebe-89b1e91b680c', 'Tangerang', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('22ecf648-971e-38af-b01b-41f805c34c7c', 'Madiun', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('5f2438ef-03a2-3686-a7c7-ba7cb22092fc', 'Singkawang', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('6153fe43-3d52-3999-97b0-e094e084f6fa', 'Padang', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('62468ba3-6092-3af1-aa7a-968bd5bb6c33', 'Salatiga', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('68683a46-ea11-3a04-bad4-2e186a4c60f6', 'Makassar', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('7a07be24-dcde-3414-b113-e634f3867265', 'Tanjungbalai', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('83feae4e-f64a-3755-877f-917adda8a7f2', 'Samarinda', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('be8ad895-f8cd-3d48-b713-15a841d3f031', 'Ambon', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('fbc732f5-70b2-3aca-9062-3666e211d1e8', 'Bengkulu', '2022-04-06 08:30:23', '2022-04-06 08:30:23');

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
-- Table structure for table `lokasis`
--

CREATE TABLE `lokasis` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokasis`
--

INSERT INTO `lokasis` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('321a33ab-e139-3b70-9199-66b1aafa22f6', 'L8-R8A', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('3871a2f6-6449-3661-82a3-4670a2ae1457', 'L5-R5A', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('3c694ccd-3bd5-3375-a366-4e2f13b39d39', 'L4-R4A', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('424c943f-88a9-3ffe-a6ce-b43abf50af2f', 'L9-R9A', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('48a4f8c1-8e25-3a18-88fa-7f5f95529cf7', 'L2-R2A', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('4db1fef2-3d99-3ac0-9d0c-c71bd196a173', 'L3-R3A', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('681ab23a-52b3-3991-9008-a562ae43e5ac', 'L10-R10A', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('6e4e9a45-dcba-34a9-9adb-21263c197006', 'L6-R6A', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('8d2194a4-d1e8-3e7f-b788-4feaa0d534d0', 'L7-R7A', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('c3b49527-b2ad-32ab-8fc3-30a2afdcd623', 'L1-R1A', '2022-04-06 08:30:23', '2022-04-06 08:30:23');

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
(5, '2022_04_05_000001_create_lokasis_table', 1),
(6, '2022_04_05_000002_create_departemens_table', 1),
(7, '2022_04_05_000003_create_barangs_table', 1),
(8, '2022_04_05_000004_create_pemintas_table', 1),
(9, '2022_04_05_104028_create_permintaans_table', 1),
(10, '2022_04_05_155915_create_permintaan_lists_table', 1);

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
-- Table structure for table `pemintas`
--

CREATE TABLE `pemintas` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departemen_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemintas`
--

INSERT INTO `pemintas` (`id`, `nik`, `nama`, `departemen_id`, `created_at`, `updated_at`) VALUES
('1aad30af-e6c0-3647-aef9-4668264c0108', '089.694.89000', 'Dadap Sakti Mahendra', '83feae4e-f64a-3755-877f-917adda8a7f2', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('296a62f3-94a2-379b-aaa7-191c6668f4d5', '208.250.40318', 'Padmi Pudjiastuti M.Ak', '22ecf648-971e-38af-b01b-41f805c34c7c', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('2add8c04-5ef4-303b-b904-897a2aa9fd79', '921.425.10872', 'Hasna Utami', '83feae4e-f64a-3755-877f-917adda8a7f2', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('2d7156b9-525f-35f1-8dac-5b895b6e3a7e', '057.748.47631', 'Alika Hastuti', '22ecf648-971e-38af-b01b-41f805c34c7c', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('373492e6-6519-33a5-8e9a-34797c4f00a6', '731.408.77860', 'Septi Nilam Mandasari M.Ak', '83feae4e-f64a-3755-877f-917adda8a7f2', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('778cdfb0-129a-3988-b42a-65cc07df3cb2', '346.104.36616', 'Irnanto Hartana Waskita', '22ecf648-971e-38af-b01b-41f805c34c7c', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('ae33fd6d-8cae-32ef-bdf2-0b3806b28b87', '206.600.73835', 'Shakila Kuswandari', '22ecf648-971e-38af-b01b-41f805c34c7c', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('b679141e-c764-3d8e-ae3b-9bb6871c5b35', '209.602.37882', 'Parman Warji Suwarno S.E.', '83feae4e-f64a-3755-877f-917adda8a7f2', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('c2620945-6c30-37b0-bbbc-fdf23b747452', '905.771.21967', 'Zelaya Nabila Purnawati S.IP', '22ecf648-971e-38af-b01b-41f805c34c7c', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('c6395633-3794-309e-9590-178201cf7ab7', '630.460.80737', 'Yulia Nuraini', '83feae4e-f64a-3755-877f-917adda8a7f2', '2022-04-06 08:30:23', '2022-04-06 08:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `permintaans`
--

CREATE TABLE `permintaans` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peminta_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_permintaan` datetime NOT NULL,
  `status` enum('belum diproses','diterima','ditolak','dibatalkan') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'belum diproses',
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permintaans`
--

INSERT INTO `permintaans` (`id`, `peminta_id`, `tanggal_permintaan`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
('0e4d129b-9c82-4338-8fcb-0721dcf608cf', '1aad30af-e6c0-3647-aef9-4668264c0108', '2022-04-06 22:31:00', 'dibatalkan', '-', '2022-04-06 08:31:03', '2022-04-06 08:31:07'),
('10f316fa-27e0-408f-a93e-f5b4cdb82737', '296a62f3-94a2-379b-aaa7-191c6668f4d5', '2022-04-06 22:41:00', 'diterima', '-', '2022-04-06 08:41:53', '2022-04-06 09:38:23'),
('1233aedb-4cb1-36ef-81d6-0d933b796722', '2add8c04-5ef4-303b-b904-897a2aa9fd79', '2022-04-06 15:30:23', 'diterima', '-', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('2358736f-4b8e-3eae-9001-ad42b8fdd594', 'c6395633-3794-309e-9590-178201cf7ab7', '2022-04-06 15:30:23', 'diterima', '-', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('41464185-a836-3591-add5-b3ee6158c47e', '778cdfb0-129a-3988-b42a-65cc07df3cb2', '2022-04-06 15:30:23', 'diterima', '-', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('42e76b37-9ac3-3f76-8113-44f1c865c1e3', '373492e6-6519-33a5-8e9a-34797c4f00a6', '2022-04-06 15:30:23', 'diterima', '-', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('4dae219e-b40d-3c31-ac71-4566a2442f13', '296a62f3-94a2-379b-aaa7-191c6668f4d5', '2022-04-06 15:30:23', 'diterima', '-', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('63717f81-6e73-30d3-acb1-fe31530fcbdc', 'b679141e-c764-3d8e-ae3b-9bb6871c5b35', '2022-04-06 15:30:23', 'diterima', '-', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('785cc24d-8f22-4220-87d8-e13989f423d5', '296a62f3-94a2-379b-aaa7-191c6668f4d5', '2022-04-06 22:31:00', 'diterima', '-', '2022-04-06 08:31:38', '2022-04-06 08:40:30'),
('7fc3be08-67b3-402b-9df6-ede83c01902f', '296a62f3-94a2-379b-aaa7-191c6668f4d5', '2022-04-06 23:39:00', 'belum diproses', '-', '2022-04-06 09:39:03', '2022-04-06 09:39:03'),
('86650834-ddb2-3dd6-8f17-88d351cfd279', 'c2620945-6c30-37b0-bbbc-fdf23b747452', '2022-04-06 15:30:23', 'diterima', '-', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('ae11c2cc-185d-466f-b85f-1eef351d602e', '373492e6-6519-33a5-8e9a-34797c4f00a6', '2022-04-06 22:41:00', 'ditolak', 'Kuantiti barang yang diminta terlalu banyak. restok barang seminggu lagi', '2022-04-06 08:41:13', '2022-04-06 08:42:13'),
('b76fca2b-895a-383f-a12c-4786349330ce', '2d7156b9-525f-35f1-8dac-5b895b6e3a7e', '2022-04-06 15:30:23', 'diterima', '-', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('eeab4e3c-0c50-3c62-82d9-b55671fdebaf', '1aad30af-e6c0-3647-aef9-4668264c0108', '2022-04-06 15:30:23', 'diterima', '-', '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('f6fc7700-9ff8-3958-a1b7-180fcd389266', 'ae33fd6d-8cae-32ef-bdf2-0b3806b28b87', '2022-04-06 15:30:23', 'diterima', '-', '2022-04-06 08:30:23', '2022-04-06 08:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_lists`
--

CREATE TABLE `permintaan_lists` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permintaan_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuantiti` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permintaan_lists`
--

INSERT INTO `permintaan_lists` (`id`, `permintaan_id`, `barang_id`, `kuantiti`, `created_at`, `updated_at`) VALUES
('0185ceea-808f-32ad-bb50-b5dc21abc57b', '42e76b37-9ac3-3f76-8113-44f1c865c1e3', 'ec0ebd74-e744-38d2-b50f-3c6d1b6d651f', 1, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('029bc78d-5d7b-4dd4-98f7-c8921d9a489a', '10f316fa-27e0-408f-a93e-f5b4cdb82737', 'b36a191b-03d3-3998-9d93-fe65b1037ccc', 100, '2022-04-06 08:41:53', '2022-04-06 08:41:53'),
('03158dfb-04b4-4a35-9e96-7b782af031c9', '10f316fa-27e0-408f-a93e-f5b4cdb82737', '88101ad8-c674-3d4d-ac2e-f8f594610bf5', 50, '2022-04-06 08:41:53', '2022-04-06 08:41:53'),
('05b9ef08-46e8-36d1-afee-56e47734e43d', '4dae219e-b40d-3c31-ac71-4566a2442f13', 'ec0ebd74-e744-38d2-b50f-3c6d1b6d651f', 13, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('07eb21e4-a78a-39e8-95fa-35376923fc50', '42e76b37-9ac3-3f76-8113-44f1c865c1e3', 'c1da1cb2-60ed-3ef8-ab47-8e204af87d19', 14, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('08221afb-c255-3ec0-82cb-35c05fa4d8fa', 'eeab4e3c-0c50-3c62-82d9-b55671fdebaf', '8966fef2-4f27-3364-a62b-4c2876c23808', 5, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('08bf8c5b-ec26-364d-b5af-232eeb000e35', '4dae219e-b40d-3c31-ac71-4566a2442f13', 'c1da1cb2-60ed-3ef8-ab47-8e204af87d19', 13, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('0adefa51-718c-345b-84a2-f7f80cf35cdb', '42e76b37-9ac3-3f76-8113-44f1c865c1e3', '8966fef2-4f27-3364-a62b-4c2876c23808', 2, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('0d3d55aa-d469-315b-825e-0c0ae84d8be7', 'f6fc7700-9ff8-3958-a1b7-180fcd389266', '06cbe179-af57-3a19-ad2c-dd39922c22d8', 7, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('0d7f90a5-9fc5-380b-a196-0db92b07b0b4', 'eeab4e3c-0c50-3c62-82d9-b55671fdebaf', '7d60878a-9775-3695-8f71-bd3a55523e18', 11, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('0ea47046-2a6e-3390-9e62-7c50456a2434', '4dae219e-b40d-3c31-ac71-4566a2442f13', '7d60878a-9775-3695-8f71-bd3a55523e18', 12, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('0f19ff35-2b8e-3145-9817-895f28bc7b4f', '42e76b37-9ac3-3f76-8113-44f1c865c1e3', 'b36a191b-03d3-3998-9d93-fe65b1037ccc', 4, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('0f8822e0-5099-35c0-9058-5da28f65809c', '63717f81-6e73-30d3-acb1-fe31530fcbdc', '7d60878a-9775-3695-8f71-bd3a55523e18', 13, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('1152fef4-0d08-37d5-9851-f04ac8d0ec2f', '2358736f-4b8e-3eae-9001-ad42b8fdd594', '7d60878a-9775-3695-8f71-bd3a55523e18', 8, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('122eba0e-7018-341c-9211-d09d0d81c170', '4dae219e-b40d-3c31-ac71-4566a2442f13', 'b36a191b-03d3-3998-9d93-fe65b1037ccc', 4, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('13764827-e9ca-36dc-8458-d069f76b8988', '41464185-a836-3591-add5-b3ee6158c47e', '2d6295f8-2c22-332b-98e7-34e9ec3f29ec', 11, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('17e735ff-d77f-3d2d-9e43-d22fe5ac4cd0', 'eeab4e3c-0c50-3c62-82d9-b55671fdebaf', 'c1da1cb2-60ed-3ef8-ab47-8e204af87d19', 4, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('19000385-6272-4ed6-96a2-7fce3c67663d', '0e4d129b-9c82-4338-8fcb-0721dcf608cf', '8966fef2-4f27-3364-a62b-4c2876c23808', 40, '2022-04-06 08:31:03', '2022-04-06 08:31:03'),
('19db62a7-50ee-3b72-991c-068a4f9555a1', '4dae219e-b40d-3c31-ac71-4566a2442f13', '88101ad8-c674-3d4d-ac2e-f8f594610bf5', 9, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('1aafb166-6482-307e-b1b3-1c9583a6949e', '86650834-ddb2-3dd6-8f17-88d351cfd279', '06cbe179-af57-3a19-ad2c-dd39922c22d8', 6, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('2034c25c-f8a8-3120-ba6a-8588637c5c58', 'f6fc7700-9ff8-3958-a1b7-180fcd389266', 'ec0ebd74-e744-38d2-b50f-3c6d1b6d651f', 9, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('22199ef2-abac-35a5-8fe4-74373a2ad5e1', '41464185-a836-3591-add5-b3ee6158c47e', '97511e43-b9b2-3051-a99e-88a3d1121592', 8, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('26ec3f24-8d64-355b-ada6-553867651aba', 'f6fc7700-9ff8-3958-a1b7-180fcd389266', '88101ad8-c674-3d4d-ac2e-f8f594610bf5', 6, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('2bd4daa2-e10f-3991-85fd-9ab2c5bb4a56', 'eeab4e3c-0c50-3c62-82d9-b55671fdebaf', '06cbe179-af57-3a19-ad2c-dd39922c22d8', 8, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('2e7c7ca4-6d08-3cc9-855f-6a499d380f99', '4dae219e-b40d-3c31-ac71-4566a2442f13', '8966fef2-4f27-3364-a62b-4c2876c23808', 5, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('2e805a0c-93f0-432f-b4b1-4a931438f943', '7fc3be08-67b3-402b-9df6-ede83c01902f', '88101ad8-c674-3d4d-ac2e-f8f594610bf5', 150, '2022-04-06 09:39:03', '2022-04-06 09:39:03'),
('31b8e871-1f0f-3712-9e8f-37f5f6c162c2', '2358736f-4b8e-3eae-9001-ad42b8fdd594', '8966fef2-4f27-3364-a62b-4c2876c23808', 13, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('366cf3f6-525b-3f8b-b5a0-11543d2d7e5b', '1233aedb-4cb1-36ef-81d6-0d933b796722', '8966fef2-4f27-3364-a62b-4c2876c23808', 10, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('375d7694-013e-3741-b1a7-2c6c2d2d9e4a', '63717f81-6e73-30d3-acb1-fe31530fcbdc', '8966fef2-4f27-3364-a62b-4c2876c23808', 11, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('37ebdb9b-60fb-34e2-bfed-8a2f66ef4793', '1233aedb-4cb1-36ef-81d6-0d933b796722', 'ec0ebd74-e744-38d2-b50f-3c6d1b6d651f', 6, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('38136e75-d217-3d12-b549-40f2746e4679', '42e76b37-9ac3-3f76-8113-44f1c865c1e3', 'a388ebc5-e009-38b6-af38-392a3499584a', 15, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('3bc98457-695b-3c5d-a951-c924aeb90ced', 'b76fca2b-895a-383f-a12c-4786349330ce', 'b36a191b-03d3-3998-9d93-fe65b1037ccc', 3, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('40ebf2c0-938a-32ba-997b-ea2a552b62ac', '86650834-ddb2-3dd6-8f17-88d351cfd279', '8966fef2-4f27-3364-a62b-4c2876c23808', 12, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('437945e0-8b37-3ae6-b8d2-37ea89c14840', 'eeab4e3c-0c50-3c62-82d9-b55671fdebaf', 'ec0ebd74-e744-38d2-b50f-3c6d1b6d651f', 14, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('448946e1-0a70-417d-98bb-f9d6651381a5', '785cc24d-8f22-4220-87d8-e13989f423d5', '88101ad8-c674-3d4d-ac2e-f8f594610bf5', 5, '2022-04-06 08:31:38', '2022-04-06 08:31:38'),
('49e28a43-b76d-3b5b-8dce-f6487086eb9c', 'f6fc7700-9ff8-3958-a1b7-180fcd389266', '8966fef2-4f27-3364-a62b-4c2876c23808', 8, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('4c7a4b8d-1e00-3089-9dfd-7241aa0bc7bc', '41464185-a836-3591-add5-b3ee6158c47e', '88101ad8-c674-3d4d-ac2e-f8f594610bf5', 9, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('4f3fa06a-efd8-31f5-af70-e76219ce1c19', '86650834-ddb2-3dd6-8f17-88d351cfd279', 'c1da1cb2-60ed-3ef8-ab47-8e204af87d19', 7, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('5218f4f8-9c9d-32a2-bda8-09daea01eaa6', '86650834-ddb2-3dd6-8f17-88d351cfd279', '7d60878a-9775-3695-8f71-bd3a55523e18', 12, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('521d57aa-7481-37c9-87b5-5060d8a9f45e', '63717f81-6e73-30d3-acb1-fe31530fcbdc', 'b36a191b-03d3-3998-9d93-fe65b1037ccc', 6, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('53ca5f58-e1b9-41e6-8798-1133d4b1acdd', '7fc3be08-67b3-402b-9df6-ede83c01902f', 'b36a191b-03d3-3998-9d93-fe65b1037ccc', 50, '2022-04-06 09:39:03', '2022-04-06 09:39:03'),
('57933473-afd6-3dcc-868c-e9c7a81331b0', '2358736f-4b8e-3eae-9001-ad42b8fdd594', '06cbe179-af57-3a19-ad2c-dd39922c22d8', 15, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('583c048a-0db8-3a0c-bb87-83803488c954', '63717f81-6e73-30d3-acb1-fe31530fcbdc', '06cbe179-af57-3a19-ad2c-dd39922c22d8', 2, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('5e660b94-058e-304c-86cf-9632839cf8ed', '1233aedb-4cb1-36ef-81d6-0d933b796722', '88101ad8-c674-3d4d-ac2e-f8f594610bf5', 13, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('603ba9aa-7148-332b-88f2-20f02589776b', '42e76b37-9ac3-3f76-8113-44f1c865c1e3', '2d6295f8-2c22-332b-98e7-34e9ec3f29ec', 8, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('6071db6c-0e7b-3216-8bf7-3144c7ef2144', '41464185-a836-3591-add5-b3ee6158c47e', 'c1da1cb2-60ed-3ef8-ab47-8e204af87d19', 15, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('61a41950-e803-38ce-b5f6-eebe213d02b1', '41464185-a836-3591-add5-b3ee6158c47e', 'a388ebc5-e009-38b6-af38-392a3499584a', 6, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('6629efd9-645f-3b68-a130-7839cff70851', '4dae219e-b40d-3c31-ac71-4566a2442f13', '2d6295f8-2c22-332b-98e7-34e9ec3f29ec', 4, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('6c0a0894-fcbd-3580-adcf-4b05c710f441', 'b76fca2b-895a-383f-a12c-4786349330ce', 'c1da1cb2-60ed-3ef8-ab47-8e204af87d19', 1, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('6d7fa3ff-04d4-341f-a971-34610c4ace2e', '4dae219e-b40d-3c31-ac71-4566a2442f13', '97511e43-b9b2-3051-a99e-88a3d1121592', 4, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('6fa7803d-fed0-3944-aeeb-42c975478a04', '1233aedb-4cb1-36ef-81d6-0d933b796722', '97511e43-b9b2-3051-a99e-88a3d1121592', 10, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('6fd4dccd-82c5-379e-bce4-e4f032d30b33', 'b76fca2b-895a-383f-a12c-4786349330ce', '88101ad8-c674-3d4d-ac2e-f8f594610bf5', 5, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('7116ada0-bc51-34c0-8625-bb286de8bf06', 'b76fca2b-895a-383f-a12c-4786349330ce', '2d6295f8-2c22-332b-98e7-34e9ec3f29ec', 14, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('724ddf1a-ca91-389f-b426-64d40376042d', '1233aedb-4cb1-36ef-81d6-0d933b796722', '06cbe179-af57-3a19-ad2c-dd39922c22d8', 12, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('7980a450-ef03-327c-8059-46405cd9e088', 'f6fc7700-9ff8-3958-a1b7-180fcd389266', '2d6295f8-2c22-332b-98e7-34e9ec3f29ec', 6, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('7d9aa914-51e7-317b-a054-45cba566de82', 'f6fc7700-9ff8-3958-a1b7-180fcd389266', 'c1da1cb2-60ed-3ef8-ab47-8e204af87d19', 7, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('80eddefd-b89e-37cf-aebf-d18d9b3271d5', '41464185-a836-3591-add5-b3ee6158c47e', 'ec0ebd74-e744-38d2-b50f-3c6d1b6d651f', 3, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('82259a79-a10f-3559-a3a4-45697378c9c4', '63717f81-6e73-30d3-acb1-fe31530fcbdc', '88101ad8-c674-3d4d-ac2e-f8f594610bf5', 14, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('83803e5a-f511-3ed9-96c4-85404b15de7a', '2358736f-4b8e-3eae-9001-ad42b8fdd594', 'a388ebc5-e009-38b6-af38-392a3499584a', 7, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('83e9060b-8374-30cc-ae97-92976d86b63d', '86650834-ddb2-3dd6-8f17-88d351cfd279', '2d6295f8-2c22-332b-98e7-34e9ec3f29ec', 2, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('85195102-d964-322e-bdb8-9cad67390dde', '86650834-ddb2-3dd6-8f17-88d351cfd279', '97511e43-b9b2-3051-a99e-88a3d1121592', 2, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('86dac5bb-e39d-3885-99ab-a46fb609cfcf', '63717f81-6e73-30d3-acb1-fe31530fcbdc', 'c1da1cb2-60ed-3ef8-ab47-8e204af87d19', 4, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('8d07a4b0-82d1-3b6a-8f7b-17063d144c88', '42e76b37-9ac3-3f76-8113-44f1c865c1e3', '7d60878a-9775-3695-8f71-bd3a55523e18', 13, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('91f12839-45a2-3852-b1c6-25c78965a3f6', '2358736f-4b8e-3eae-9001-ad42b8fdd594', '2d6295f8-2c22-332b-98e7-34e9ec3f29ec', 11, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('9256d134-005a-34f2-a3fd-36e93f8c6d4a', 'eeab4e3c-0c50-3c62-82d9-b55671fdebaf', 'a388ebc5-e009-38b6-af38-392a3499584a', 8, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('92f934b3-692d-3a4d-9066-d88db3f44649', 'b76fca2b-895a-383f-a12c-4786349330ce', 'ec0ebd74-e744-38d2-b50f-3c6d1b6d651f', 11, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('97b9c3b6-dbe5-3f3f-af21-e1642d4b3501', '4dae219e-b40d-3c31-ac71-4566a2442f13', '06cbe179-af57-3a19-ad2c-dd39922c22d8', 1, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('9c8298d8-f872-3ea3-ab3c-d91f1b970f2c', 'b76fca2b-895a-383f-a12c-4786349330ce', '97511e43-b9b2-3051-a99e-88a3d1121592', 10, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('9dbaa480-4c40-3aa2-9246-67918f916f14', '2358736f-4b8e-3eae-9001-ad42b8fdd594', '97511e43-b9b2-3051-a99e-88a3d1121592', 10, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('a58d1a98-4257-45d3-b24f-e5d49a5dbe10', 'ae11c2cc-185d-466f-b85f-1eef351d602e', '2d6295f8-2c22-332b-98e7-34e9ec3f29ec', 200, '2022-04-06 08:41:13', '2022-04-06 08:41:13'),
('a8694e3d-cc23-30f7-a0aa-e5f96d2bc4f6', '1233aedb-4cb1-36ef-81d6-0d933b796722', 'c1da1cb2-60ed-3ef8-ab47-8e204af87d19', 6, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('a8b50911-debf-35c5-a5c3-168b3cf74363', '2358736f-4b8e-3eae-9001-ad42b8fdd594', 'c1da1cb2-60ed-3ef8-ab47-8e204af87d19', 12, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('ac4fbfcc-941d-3dac-98f4-1f717581d80c', 'b76fca2b-895a-383f-a12c-4786349330ce', '8966fef2-4f27-3364-a62b-4c2876c23808', 7, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('b08d853c-127c-303a-ba14-dbc9b4829d94', '42e76b37-9ac3-3f76-8113-44f1c865c1e3', '06cbe179-af57-3a19-ad2c-dd39922c22d8', 1, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('b794284a-6284-354e-b063-d38c24b6a84f', 'f6fc7700-9ff8-3958-a1b7-180fcd389266', '7d60878a-9775-3695-8f71-bd3a55523e18', 6, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('b8d0cbb4-bc62-3cb4-adbf-cf02ec67984b', 'f6fc7700-9ff8-3958-a1b7-180fcd389266', '97511e43-b9b2-3051-a99e-88a3d1121592', 11, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('becb89b0-8eba-3f0f-8675-e56af89c72ca', '4dae219e-b40d-3c31-ac71-4566a2442f13', 'a388ebc5-e009-38b6-af38-392a3499584a', 10, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('c1029472-fea5-3640-bbf7-248a19946235', 'b76fca2b-895a-383f-a12c-4786349330ce', '06cbe179-af57-3a19-ad2c-dd39922c22d8', 8, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('c13399bd-8d80-39a9-b4ea-12682f444851', '41464185-a836-3591-add5-b3ee6158c47e', '06cbe179-af57-3a19-ad2c-dd39922c22d8', 9, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('c17a96b0-c86e-340a-a13a-be74a12e2ef3', '63717f81-6e73-30d3-acb1-fe31530fcbdc', 'a388ebc5-e009-38b6-af38-392a3499584a', 1, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('c2fa1478-fbcf-40cb-8c05-54116e415a0c', '785cc24d-8f22-4220-87d8-e13989f423d5', 'b36a191b-03d3-3998-9d93-fe65b1037ccc', 5, '2022-04-06 08:31:38', '2022-04-06 08:31:38'),
('c3cdccd8-48ed-3a0c-aaf0-df53ee6af6ac', 'f6fc7700-9ff8-3958-a1b7-180fcd389266', 'a388ebc5-e009-38b6-af38-392a3499584a', 6, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('c4703b68-51d9-3e26-b598-1c713d4d0c53', '1233aedb-4cb1-36ef-81d6-0d933b796722', '2d6295f8-2c22-332b-98e7-34e9ec3f29ec', 7, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('c554d55e-cb49-3b42-8f5d-47ec95a8d1e7', '42e76b37-9ac3-3f76-8113-44f1c865c1e3', '88101ad8-c674-3d4d-ac2e-f8f594610bf5', 9, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('cc34104a-5ca7-3ee6-b263-8d4c17c89bcb', '2358736f-4b8e-3eae-9001-ad42b8fdd594', 'b36a191b-03d3-3998-9d93-fe65b1037ccc', 3, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('d2100947-8f93-33af-8489-820d658f81dd', '1233aedb-4cb1-36ef-81d6-0d933b796722', 'b36a191b-03d3-3998-9d93-fe65b1037ccc', 4, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('d37d7825-63c9-3eee-800c-23cdc7b6236c', 'eeab4e3c-0c50-3c62-82d9-b55671fdebaf', 'b36a191b-03d3-3998-9d93-fe65b1037ccc', 12, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('d5024a37-2e80-31a8-bd73-bbe8031f0135', '63717f81-6e73-30d3-acb1-fe31530fcbdc', '2d6295f8-2c22-332b-98e7-34e9ec3f29ec', 15, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('d569ad89-42e0-3c9a-a235-01ed32034bda', 'b76fca2b-895a-383f-a12c-4786349330ce', '7d60878a-9775-3695-8f71-bd3a55523e18', 1, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('d5a460bf-a340-3b07-b019-4e1dd0654a15', '41464185-a836-3591-add5-b3ee6158c47e', 'b36a191b-03d3-3998-9d93-fe65b1037ccc', 11, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('d7f2e6a2-8adf-34dd-9263-94d12594fd39', '1233aedb-4cb1-36ef-81d6-0d933b796722', '7d60878a-9775-3695-8f71-bd3a55523e18', 10, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('d8dc55d7-b55f-3f3f-8ad2-1c57b160ec68', '86650834-ddb2-3dd6-8f17-88d351cfd279', '88101ad8-c674-3d4d-ac2e-f8f594610bf5', 14, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('d94781fe-ab32-3d0b-ba1d-432b1358ce1a', '41464185-a836-3591-add5-b3ee6158c47e', '8966fef2-4f27-3364-a62b-4c2876c23808', 5, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('dba34202-3d55-3ad1-ba0f-496298d22e04', '63717f81-6e73-30d3-acb1-fe31530fcbdc', '97511e43-b9b2-3051-a99e-88a3d1121592', 12, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('dd5bbe80-237e-3ad1-b7cf-6d2f7255367d', 'eeab4e3c-0c50-3c62-82d9-b55671fdebaf', '88101ad8-c674-3d4d-ac2e-f8f594610bf5', 14, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('ddf5a251-7b40-3027-8232-aa7a08c8bc4e', '2358736f-4b8e-3eae-9001-ad42b8fdd594', '88101ad8-c674-3d4d-ac2e-f8f594610bf5', 14, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('df48cf03-3449-3220-9f92-74775bafeb0f', '42e76b37-9ac3-3f76-8113-44f1c865c1e3', '97511e43-b9b2-3051-a99e-88a3d1121592', 4, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('e1508b1d-4196-3885-8ead-3a81f1f49b40', 'f6fc7700-9ff8-3958-a1b7-180fcd389266', 'b36a191b-03d3-3998-9d93-fe65b1037ccc', 5, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('e359c7e7-e3f2-3671-a07f-3fecc477d75d', '86650834-ddb2-3dd6-8f17-88d351cfd279', 'a388ebc5-e009-38b6-af38-392a3499584a', 12, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('e3975450-78e7-3d74-988e-2e89ada52886', '86650834-ddb2-3dd6-8f17-88d351cfd279', 'ec0ebd74-e744-38d2-b50f-3c6d1b6d651f', 2, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('e608c160-ecbb-3ebd-befa-2ea0d5b2b5e3', '1233aedb-4cb1-36ef-81d6-0d933b796722', 'a388ebc5-e009-38b6-af38-392a3499584a', 11, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('e9ab90da-578e-37c5-a337-20b1a24d8c8f', 'eeab4e3c-0c50-3c62-82d9-b55671fdebaf', '2d6295f8-2c22-332b-98e7-34e9ec3f29ec', 6, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('eb88ca61-15bb-301b-9425-9fdf9945d52f', 'b76fca2b-895a-383f-a12c-4786349330ce', 'a388ebc5-e009-38b6-af38-392a3499584a', 15, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('eba9f145-2a6b-32e3-aab6-160e4101a930', '2358736f-4b8e-3eae-9001-ad42b8fdd594', 'ec0ebd74-e744-38d2-b50f-3c6d1b6d651f', 2, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('ed4257b2-86b9-3be9-b420-2d9fa83e43bc', '63717f81-6e73-30d3-acb1-fe31530fcbdc', 'ec0ebd74-e744-38d2-b50f-3c6d1b6d651f', 9, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('edf27971-80a1-3108-964f-8fcb7fb489ba', '41464185-a836-3591-add5-b3ee6158c47e', '7d60878a-9775-3695-8f71-bd3a55523e18', 11, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('eec8a1b7-c26e-3ea9-9f56-c2a49b93e60b', 'eeab4e3c-0c50-3c62-82d9-b55671fdebaf', '97511e43-b9b2-3051-a99e-88a3d1121592', 9, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('f3364da0-7de2-3d80-9f86-0b83c3fcb097', '86650834-ddb2-3dd6-8f17-88d351cfd279', 'b36a191b-03d3-3998-9d93-fe65b1037ccc', 7, '2022-04-06 08:30:23', '2022-04-06 08:30:23');

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('isAdmin','isUser') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'isUser',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
('8524b956-6ab3-461a-b24c-e3ad2defcd7a', 'admin', 'admin@gmail.com', '2022-04-06 08:30:23', '$2y$10$/gG5tVRCq2MRwVrld06aJeWRrSvuPgfFsjnnfCEp79Dmrxz2/k3G2', 'isAdmin', NULL, '2022-04-06 08:30:23', '2022-04-06 08:30:23'),
('cfdcd921-fcec-470c-89ce-b5e06bb4c58b', 'user', 'user@gmail.com', '2022-04-06 08:30:23', '$2y$10$f6j1wqqmsGegf2WeCgWcL.PeuYVcSMAd/Ko/R.rsdihg8YcZiHc5G', 'isUser', NULL, '2022-04-06 08:30:23', '2022-04-06 08:30:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangs_lokasi_id_foreign` (`lokasi_id`);

--
-- Indexes for table `departemens`
--
ALTER TABLE `departemens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lokasis`
--
ALTER TABLE `lokasis`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pemintas`
--
ALTER TABLE `pemintas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemintas_departemen_id_foreign` (`departemen_id`);

--
-- Indexes for table `permintaans`
--
ALTER TABLE `permintaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permintaan_lists`
--
ALTER TABLE `permintaan_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangs`
--
ALTER TABLE `barangs`
  ADD CONSTRAINT `barangs_lokasi_id_foreign` FOREIGN KEY (`lokasi_id`) REFERENCES `lokasis` (`id`);

--
-- Constraints for table `pemintas`
--
ALTER TABLE `pemintas`
  ADD CONSTRAINT `pemintas_departemen_id_foreign` FOREIGN KEY (`departemen_id`) REFERENCES `departemens` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
