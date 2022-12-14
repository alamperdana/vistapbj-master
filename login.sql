-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Okt 2022 pada 04.28
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_04_061045_add_role_to_users_table', 2),
(6, '2022_09_04_062009_add_role_to_users_table', 3),
(7, '2022_09_12_064822_create_permission_tables', 4),
(8, '2022_09_12_080759_add_status_to_users_table', 5),
(9, '2022_09_12_081614_add_status_to_users_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_berjalan`
--

CREATE TABLE `paket_berjalan` (
  `metode_paket` varchar(50) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `bulan` varchar(2) DEFAULT NULL,
  `kode_paket` int(11) NOT NULL,
  `nama_paket` varchar(255) DEFAULT NULL,
  `pagu_paket` decimal(10,0) DEFAULT NULL,
  `hps_paket` decimal(10,0) DEFAULT NULL,
  `jenis_paket` varchar(50) DEFAULT NULL,
  `awal_paket` date DEFAULT NULL,
  `akhir_paket` date DEFAULT NULL,
  `awal_kontrak_paket` date DEFAULT NULL,
  `akhir_kontrak_paket` date DEFAULT NULL,
  `paket_berjalan` int(11) DEFAULT NULL COMMENT '0 = tidak, 1 = berjalan',
  `skp` int(11) DEFAULT NULL,
  `npwp_perusahaan` varchar(50) DEFAULT NULL,
  `nama_satker` varchar(100) DEFAULT NULL,
  `nama_perusahaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket_berjalan`
--

INSERT INTO `paket_berjalan` (`metode_paket`, `tahun`, `bulan`, `kode_paket`, `nama_paket`, `pagu_paket`, `hps_paket`, `jenis_paket`, `awal_paket`, `akhir_paket`, `awal_kontrak_paket`, `akhir_kontrak_paket`, `paket_berjalan`, `skp`, `npwp_perusahaan`, `nama_satker`, `nama_perusahaan`) VALUES
(NULL, '2022', '2', 2, 'Jl. H. Zainir Haviz', '4779047619', '999868068', 'Pekerjaan Kontruksi', '2022-08-27', '2022-08-27', '2022-09-01', '2022-10-01', 0, 2, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', 'zakiaaaaa'),
('Tender', '2022', '3', 3, 'Jl. H. Zainir Haviz', '4687619048', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '4', 4, 'Jl. H. Zainir Haviz', '4596190476', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '5', 5, 'Jl. H. Zainir Haviz', '4504761905', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '6', 6, 'Jl. H. Zainir Haviz', '4413333333', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '7', 7, 'Belanja Natura dan Pakan-Natura dan Pakan Lainnya', '4321904762', '359995680', 'Pengadaan Barang', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3424', 'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN KOTA JAMBI', ''),
('Tender', '2022', '8', 8, 'Jl. H. Zainir Haviz', '4230476190', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '9', 9, 'Jl. H. Zainir Haviz', '4139047619', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '1', 10, 'Belanja Natura dan Pakan-Natura dan Pakan Lainnya', '360000000', '359995680', 'Pengadaan Barang', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3424', 'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN KOTA JAMBI', ''),
('Tender', '2022', '2', 20, 'Jl. H. Zainir Haviz', '1000000000', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '3', 30, 'Jl. H. Zainir Haviz', '1000000000', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '4', 40, 'Jl. H. Zainir Haviz', '1000000000', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '3', 46, 'n', '1000000000', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '5', 50, 'Jl. H. Zainir Haviz', '1000000000', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '7', 70, 'Belanja Natura dan Pakan-Natura dan Pakan Lainnya', '1213333333', '359995680', 'Pengadaan Barang', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3424', 'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN KOTA JAMBI', ''),
('Tender', '2022', '8', 80, 'Jl. H. Zainir Haviz', '1304761905', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '9', 90, 'Jl. H. Zainir Haviz', '1396190476', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '1', 100, 'Jl. H. Zainir Haviz', '1487619048', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '9', 110, 'Jl. H. Zainir Haviz', '1579047619', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '9', 120, 'Jl. H. Zainir Haviz', '1670476190', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
(NULL, NULL, NULL, 123, NULL, '123', NULL, 'Pekerjaan Kontruksi', NULL, NULL, NULL, NULL, 1, NULL, '123.33ff.33', 'baseng', ''),
('Tender', '2022', '8', 130, 'Belanja Natura dan Pakan-Natura dan Pakan Lainnya', '1761904762', '359995680', 'Pengadaan Barang', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3424', 'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN KOTA JAMBI', ''),
('Tender', '2022', '7', 140, 'Jl. H. Zainir Haviz', '1853333333', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '6', 150, 'Jl. H. Zainir Haviz', '1944761905', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '5', 160, 'Jl. H. Zainir Haviz', '2036190476', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '1', 170, 'Jl. H. Zainir Haviz', '2127619048', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '9', 180, 'Jl. H. Zainir Haviz', '2219047619', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '9', 190, 'Belanja Natura dan Pakan-Natura dan Pakan Lainnya', '2310476190', '359995680', 'Pengadaan Barang', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3424', 'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN KOTA JAMBI', ''),
('Tender', '2022', '8', 200, 'Jl. H. Zainir Haviz', '2401904762', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '7', 210, 'Jl. H. Zainir Haviz', '2493333333', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '6', 220, 'Jl. H. Zainir Haviz', '2584761905', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '5', 230, 'Jl. H. Zainir Haviz', '2676190476', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '1', 240, 'Jl. H. Zainir Haviz', '2767619048', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '9', 250, 'Belanja Natura dan Pakan-Natura dan Pakan Lainnya', '2859047619', '359995680', 'Pengadaan Barang', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3424', 'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN KOTA JAMBI', ''),
('Tender', '2022', '9', 260, 'Jl. H. Zainir Haviz', '2950476190', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '8', 270, 'Jl. H. Zainir Haviz', '3041904762', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '7', 280, 'Jl. H. Zainir Haviz', '3133333333', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '6', 290, 'Jl. H. Zainir Haviz', '3224761905', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '5', 300, 'Belanja Natura dan Pakan-Natura dan Pakan Lainnya', '3316190476', '359995680', 'Pengadaan Barang', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3424', 'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN KOTA JAMBI', ''),
('Tender', '2022', '1', 310, 'Jl. H. Zainir Haviz', '3407619048', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '9', 320, 'Jl. H. Zainir Haviz', '3499047619', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '9', 330, 'Jl. H. Zainir Haviz', '3590476190', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
(NULL, '2021', '2', 333, 'c', '30000000', '20000', 'Pekerjaan Konstruksi Terintegrasi', '2022-09-09', '2022-09-09', '2022-09-09', '2022-09-09', 0, 2, '12.134.24-2.3422', 'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN KOTA JAMB', ''),
('Tender', '2022', '8', 340, 'Jl. H. Zainir Haviz', '3681904762', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '7', 350, 'Jl. H. Zainir Haviz', '3773333333', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '6', 360, 'Belanja Natura dan Pakan-Natura dan Pakan Lainnya', '3864761905', '359995680', 'Pengadaan Barang', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3424', 'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN KOTA JAMBI', ''),
('Tender', '2022', '5', 370, 'Jl. H. Zainir Haviz', '3956190476', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '9', 380, 'Jl. H. Zainir Haviz', '4047619048', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '9', 390, 'Jl. H. Zainir Haviz', '4139047619', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '8', 400, 'Jl. H. Zainir Haviz', '4230476190', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '7', 410, 'Belanja Natura dan Pakan-Natura dan Pakan Lainnya', '4321904762', '359995680', 'Pengadaan Barang', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3424', 'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN KOTA JAMBI', ''),
('Tender', '2022', '6', 420, 'Jl. H. Zainir Haviz', '4413333333', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '5', 430, 'Jl. H. Zainir Haviz', '4504761905', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '4', 440, 'Jl. H. Zainir Haviz', '4596190476', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '3', 444, 'vb', '1000000000', '999868068', 'Pekerjaan Kontruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', 0, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '3', 450, 'Jl. H. Zainir Haviz', '4687619048', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '2', 460, 'Jl. H. Zainir Haviz', '4779047619', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '1', 470, 'Belanja Natura dan Pakan-Natura dan Pakan Lainnya', '4870476190', '359995680', 'Pengadaan Barang', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3424', 'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN KOTA JAMBI', ''),
('Tender', '2022', '1', 480, 'Jl. H. Zainir Haviz', '4961904762', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '1', 490, 'Jl. H. Zainir Haviz', '5053333333', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '1', 555, 'Belanja Natura dan Pakan-Natura dan Pakan Lainnya', '360000000', '359995680', 'Pengadaan Barang', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3424', 'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN KOTA JAMBI', ''),
('Tender', '2022', '1', 656, ',', '360000000', '359995680', 'Pengadaan Barang', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3424', 'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN KOTA JAMBI', ''),
('Tender', '2022', '3', 787, ',', '1000000000', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '3', 8899, ',', '1000000000', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', ''),
('Tender', '2022', '1', 10796277, 'Belanja Natura dan Pakan-Natura dan Pakan Lainnya', '360000000', '359995680', 'Pengadaan Barang', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', 0, 10, '12.134.24-2.3424', 'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN KOTA JAMBI', 'kia'),
('Tender', '2022', '3', 11847259, 'Jl. H. Zainir Haviz', '1000000000', '999868068', 'Pekerjaan Konstruksi', '2022-08-27', '2022-08-29', '2022-09-01', '2022-10-01', NULL, NULL, '12.134.24-2.3456', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA JAMBI', 'amalia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `npwp_perusahaan` varchar(255) DEFAULT NULL,
  `alamat_penyedia` text DEFAULT NULL,
  `email_penyedia` varchar(50) DEFAULT NULL,
  `pengurus_penyedia` text DEFAULT NULL,
  `keuangan_penyedia` decimal(10,0) DEFAULT NULL,
  `kapasitas_penyedia` text DEFAULT NULL,
  `saranaprasarana_penyedia` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `nama_perusahaan`, `npwp_perusahaan`, `alamat_penyedia`, `email_penyedia`, `pengurus_penyedia`, `keuangan_penyedia`, `kapasitas_penyedia`, `saranaprasarana_penyedia`) VALUES
(18, 'CV. Maya Sari', '02.061.757.7-331.000', 'JL. PS. Sengeti Kab Muaro Jambi', 'mayasaricv@yahoo.co.id', 'MERWANTO (Wakil Direktur)\nJEMI PANDRA (Direktur)', '360000000', 'DADANG IRAWAN (Tenaga Terampil (Tukang Las Konstruksi Plat dan PIpa))\nENDANG SUFRIANI (Administrasi)\nMARITO NAINGGOLAN (Menager Pelaksana (Pelaksana Bangunan Gedung/Pekerjaan ', 'MESIN LAS LISTRIK (1) (Faktur Pembelian)\nPICK UP (1) (Surat Perjanjian Sewa Peralatan)\n'),
(20, 'CV. NOVALINDO PUTRA', '02.537.306.9-331.000', 'Jl.Bangau I No.11 Rt.10/03 Kel.Tambak Sari Kec. Jambi Selatan', 'aldoputra6635@yahoo.co.id', 'ERMANSYAH, Amd (DIREKTUR)\nATTALA NOVALINDO (KOMENDITER)', '1000000000', 'MASNUBI (AHLI K3 KONSTRUKSI)\nZULKHA ADDHA (PETUGAS K3 KONSTRUKSI)\nALHUSRI YANTO (PENGAWAS PERPIPAAN AIR BERSIH)\nALHUSRI YANTO (Pelaksana (Pelaksana Bangunan Gedung/Pekerjaan Gedung) (TA022))\nLISMAN DARWIN\n', 'Pick Up (1) (Surat Perjanjian Sewa Peralatan)\nConcrete Mixer (1) (Faktur Pembelian)\nConcrete Vibrator (1) (Faktur Pembelian)\nWater Tank (1) (Faktur Pembelian)\nGenset (1) (Faktur Pembelian)\nMOTOR WALLES (1) (Surat Perjanjian Sewa Peralatan)\nDUMP TRUCK (2) (Surat Perjanjian Sewa Peralatan)\nPICK UP (1) (Surat Perjanjian Sewa Peralatan)\nCONCRETE VIBRATOR (1) (Faktur Pembelian)\nCONCRETE VIBRATOR (1) (Faktur Pembelian)\nCONCERE MIXER (1) (Faktur Pembelian)\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
  `role` int(11) NOT NULL DEFAULT 0 COMMENT 'role 0 user admin 1',
  `dataupload` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) DEFAULT 0 COMMENT '1 verfied 0 unactive',
  `status` tinyint(1) NOT NULL,
  `nip` int(20) NOT NULL,
  `opd` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `dataupload`, `verified`, `status`, `nip`, `opd`, `telepon`, `avatar`) VALUES
(3, 'zakia', 'zakia@gmail.com', NULL, '$2y$10$4td4wXdujRipUJIAkAe6yua4Vi9CdTCJvOmJ5ys4MN.dCg061Ymim', NULL, '2022-09-05 02:37:21', '2022-10-06 19:25:43', 1, '', 1, 1, 0, '', '', ''),
(4, 'Amalia', 'amalia@gmail.com', NULL, '$2y$10$PipdKYy20DFENpoP6zzvx.IMDZCRSACo6/hKdxH27CP8u5BNuJJz6', NULL, '2022-09-05 02:38:15', '2022-09-05 02:38:15', 0, '', 1, 1, 0, '', '', ''),
(5, 'Perhitungan TKDN KONSTRUKSI nco.pdf', 'y_krisnadi@yahoo.co.id', NULL, '$2y$10$GqNrIwpbMxlNE.b1CLtMDOEH0pa9JSDsujCtdgTABr.7olXhrdqvq', NULL, '2022-09-08 00:25:21', '2022-09-08 00:25:21', 0, NULL, NULL, 0, 0, '', '', ''),
(6, 'ook', 'krisnadi.hjm@gmail.com', NULL, '$2y$10$cPhEEk7splmRUOFcBvxi4eymr0Ygf6FrRLG4QJcgVsVITMOEPZmCm', NULL, '2022-09-08 00:28:51', '2022-09-08 00:28:51', 0, NULL, NULL, 0, 0, '', '', ''),
(7, 'xxxxx', 'aaaaaa@gmail.com', NULL, '$2y$10$pYW5th24KHEBT6kj2glz1.iEnGr6i70Hs4ilqJcP6BxP5pGnWA1hC', NULL, '2022-09-08 00:40:22', '2022-09-08 00:40:22', 0, 'Perhitungan TKDN KONSTRUKSI nco.pdf', NULL, 0, 0, '', '', ''),
(8, 'zakia', 'zakiaamalia1029@gmail.com', NULL, '$2y$10$gOBkmApSl9nTfvRPSP6Mc.60ySueEdNKE5/JlovPNVswj5CCFaBk2', NULL, '2022-09-11 22:02:17', '2022-09-11 22:02:17', 0, NULL, NULL, 0, 0, '', '', ''),
(9, 'zakia', 'zakiaa@gmail.com', NULL, '$2y$10$mHQh6uV4KndgZIqC51.hROR5ymWWz20.prxQ2hm.rHygcJvGo6Nwa', NULL, '2022-09-12 00:36:06', '2022-09-12 00:36:06', 0, NULL, NULL, 0, 0, '', '', ''),
(10, 'amaliaa', 'amaliaa@gmail.com', NULL, '$2y$10$AkFLNowjqAuXdPd5nisDq.jNCT4tYLqusgrgfE41SttLCGU.L014u', NULL, '2022-09-12 00:36:37', '2022-09-12 00:36:37', 1, NULL, NULL, 1, 0, '', '', ''),
(11, 'zakia', 'yourultifriend@gmail.com', NULL, '$2y$10$t81lMfyhE1aeL1hGfcRfyunDbuUH5gjPSuqokEOTwROm22Ddp5Rgy', '1MWgJcZm1UcW6vxRRKE91CrumkWb6f8hWMQL1jXwBGT46s6yrTuqa0WxDgVI', '2022-09-13 21:43:52', '2022-09-28 04:09:06', 1, NULL, 0, 1, 0, '', '', ''),
(12, 'imelda', 'imelda@gmail.com', NULL, '$2y$10$koF3.g5ExL3rcXmKUPGpt.0.tSlLNY8gRrns7l.BzIJFTcAKGa5Q2', NULL, '2022-09-18 21:48:07', '2022-09-28 04:43:30', 0, NULL, 0, 0, 0, '', '', ''),
(13, 'sdf', 'koreaa@gmail.com', NULL, '$2y$10$pAKtHSs/SKLIMzF6owJwyevZIemBt/P0sgtr7hORCSd3c/a0BfLFu', NULL, '2022-09-28 06:06:12', '2022-09-28 06:06:12', 0, NULL, 0, 0, 2233, 'dffgg', '32324', NULL),
(14, '233234', 'korut@gmail.com', NULL, '$2y$10$Y7nusQz0kSXed2FmIBr.eOUyEyGoOLuxbWBMj8DzdveYaV7sXCoLS', NULL, '2022-09-28 06:06:49', '2022-09-28 06:06:49', 0, NULL, 0, 0, 43433, '4dff df', '343434', NULL),
(15, 'www', 'betes@gmail.com', NULL, '$2y$10$BkjqqOWwEkqaaRgRaYkuuu6lRMf33A8kp7l/ihXW3ZOfRLhwp7Psm', NULL, '2022-10-03 22:23:03', '2022-10-03 22:23:03', 0, NULL, 0, 0, 1122, 'sddd', '23334', NULL),
(16, 'zakia', 'battlecry@gmail.com', NULL, '$2y$10$QrOOjP8zSdQnBKCuAdjsb.JrtZcTOUZD10Yt3HEkJSSlLvS4.DxAe', NULL, '2022-10-06 04:16:39', '2022-10-06 04:17:10', 0, NULL, 0, 1, 1997, 'pbjap', '085213457984', NULL),
(17, 'zakia', 'battlecryy@gmail.com', NULL, '$2y$10$r8qOPM783pL/pvyZVXFt2upmJJuoufYZhE4mpiflKjKkTIwaGGzay', NULL, '2022-10-12 20:47:07', '2022-10-12 20:47:07', 0, NULL, 0, 0, 1029, 'amalia', '1029', 'test minat bakat.pdf'),
(18, 'amalia', 'merci@gmail.com', NULL, '$2y$10$lK2.xNWjdFjTeG4vZFNMre4F4e1zW9SdoFw/RjFe4IcB/J8.AQlZK', NULL, '2022-10-12 21:08:48', '2022-10-12 21:08:48', 0, NULL, 0, 0, 1245, 'chang', '123', 'userguidee.pdf'),
(19, 'show me', 'letmedown@gmail.com', NULL, '$2y$10$ehWerCUVrqE3P9HxifqtuOwnkrkiZlMG27pZIKRFss.Avr/zmCk5e', NULL, '2022-10-12 21:32:34', '2022-10-13 03:09:38', 0, NULL, 0, 1, 123, 'eltme', '123', 'test.pdf'),
(20, 'exo', 'exoplanet@gmail.com', NULL, '$2y$10$z5ULpl.LxbMWB0wOfCGdsOp4d/QqD2mnW/QI0R1qaDB4OrhBXL3qm', NULL, '2022-10-12 21:53:36', '2022-10-12 21:53:36', 0, NULL, 0, 0, 123, 'exo', '123', 'JCamScanner_09-13-2022_08.58.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `paket_berjalan`
--
ALTER TABLE `paket_berjalan`
  ADD PRIMARY KEY (`kode_paket`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
