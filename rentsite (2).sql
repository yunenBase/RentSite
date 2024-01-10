-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 11:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_Admin` varchar(50) NOT NULL,
  `Nama_Admin` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_Admin`, `Nama_Admin`, `Password`) VALUES
('UA1', 'azzu', 'azzuganteng'),
('UA2', 'Kina', '$2y$10$9Fym/6uffKo3KSclmQMMlOKLOB/UZDNyd4yWjxm/GXxSTowTnwK.6');

-- --------------------------------------------------------

--
-- Table structure for table `auditorium`
--

CREATE TABLE `auditorium` (
  `Kode_Gedung` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Instansi_Peminjam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auditorium`
--

INSERT INTO `auditorium` (`Kode_Gedung`, `Tanggal`, `Status`, `Instansi_Peminjam`) VALUES
('AU', '2023-12-01', 'Tersedia', ''),
('AU', '2023-12-02', 'Tidak Tersedia', 'BEM KM FTI'),
('AU', '2023-12-03', 'Tersedia', ''),
('AU', '2023-12-04', 'Tersedia', ''),
('AU', '2023-12-05', 'Tersedia', ''),
('AU', '2023-12-06', 'Tidak Tersedia', 'FKI RABBANI'),
('AU', '2023-12-07', 'Tersedia', ''),
('AU', '2023-12-08', 'Tidak Tersedia', 'UKM Penalaran Unand'),
('AU', '2023-12-09', 'Tersedia', ''),
('AU', '2023-12-10', 'Tersedia', ''),
('AU', '2023-12-11', 'Tidak Tersedia', 'BEM KM UNAND'),
('AU', '2023-12-12', 'Tersedia', ''),
('AU', '2023-12-13', 'Tidak Tersedia', 'UKM PIKMAG'),
('AU', '2023-12-14', 'Tersedia', ''),
('AU', '2023-12-15', 'Tidak Tersedia', 'UKM PIKA'),
('AU', '2023-12-16', 'Tersedia', ''),
('AU', '2023-12-17', 'Tersedia', ''),
('AU', '2023-12-18', 'Tersedia', ''),
('AU', '2023-12-19', 'Tidak Tersedia', 'AIESEC UNAND'),
('AU', '2023-12-20', 'Tersedia', ''),
('AU', '2023-12-21', 'Tidak Tersedia', 'UKM NEOTELEMETRI'),
('AU', '2023-12-22', '', ''),
('AU', '2023-12-23', 'Tersedia', ''),
('AU', '2023-12-24', 'Tidak Tersedia', 'GENTA ANDALAS'),
('AU', '2023-12-25', 'Tersedia', ''),
('AU', '2023-12-26', 'Tidak Tersedia', 'UKM PANDEKA'),
('AU', '2023-12-27', 'Tersedia', ''),
('AU', '2023-12-28', 'Tidak Tersedia', 'UKMF FSI AL-FATIH'),
('AU', '2023-12-29', 'Tidak Tersedia', 'KULIAH UMUM UNAND'),
('AU', '2023-12-30', 'Tersedia', ''),
('AU', '2023-12-31', 'Tidak Tersedia', 'BEM KM FEB UNAND');

-- --------------------------------------------------------

--
-- Table structure for table `convention_hall`
--

CREATE TABLE `convention_hall` (
  `Kode_Gedung` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Instansi_Peminjam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `convention_hall`
--

INSERT INTO `convention_hall` (`Kode_Gedung`, `Tanggal`, `Status`, `Instansi_Peminjam`) VALUES
('CH', '2023-12-01', 'Tidak Tersedia', 'BEM KM UNAND'),
('CH', '2023-12-02', 'Tidak Tersedia', 'FSKI'),
('CH', '2023-12-03', 'Tersedia', ''),
('CH', '2023-12-04', 'Tidak Tersedia', 'UKM PIKA'),
('CH', '2023-12-05', 'Tersedia', ''),
('CH', '2023-12-06', 'Tidak Tersedia', 'UKM PRAMUKA'),
('CH', '2023-12-07', 'Tersedia', 'HIMA FISIKA'),
('CH', '2023-12-08', 'Tersedia', ''),
('CH', '2023-12-09', 'Tidak Tersedia', 'BEM KM MIPA'),
('CH', '2023-12-10', 'Tersedia', ''),
('CH', '2023-12-11', 'Tidak Tersedia', 'BEM KM FT'),
('CH', '2023-12-12', 'Tersedia', ''),
('CH', '2023-12-13', 'Tidak Tersedia', 'UKM NeoTelemetri\r\n'),
('CH', '2023-12-14', 'Tersedia', ''),
('CH', '2023-12-15', 'Tidak Tersedia', 'HIPMI UNAND'),
('CH', '2023-12-16', 'Tersedia', ''),
('CH', '2023-12-17', 'Tidak Tersedia', 'UKM PENALARAN UNAND'),
('CH', '2023-12-18', 'Tersedia', ''),
('CH', '2023-12-19', 'Tidak Tersedia', 'FSI FMIPA'),
('CH', '2023-12-20', 'Tersedia', ''),
('CH', '2023-12-21', 'Tidak Tersedia', 'BEM KM FATETA'),
('CH', '2023-12-22', '', ''),
('CH', '2023-12-23', 'Tersedia', ''),
('CH', '2023-12-24', 'Tersedia', ''),
('CH', '2023-12-25', 'Tersedia', ''),
('CH', '2023-12-26', 'Tidak Tersedia', 'FSI FATERNA'),
('CH', '2023-12-27', 'Tersedia', ''),
('CH', '2023-12-28', 'Tidak Tersedia', 'LKEI'),
('CH', '2023-12-29', 'Tersedia', ''),
('CH', '2023-12-30', 'Tidak Tersedia', 'UKM PANDEKA'),
('CH', '2023-12-31', 'Tersedia', '');

-- --------------------------------------------------------

--
-- Table structure for table `dokumenpdf`
--

CREATE TABLE `dokumenpdf` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `isi_file` longblob DEFAULT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokumenpdf`
--

INSERT INTO `dokumenpdf` (`id`, `nama_file`, `isi_file`, `tanggal_dibuat`) VALUES
(1, 'dokumen1.pdf', NULL, '2024-01-01 08:17:58'),
(2, 'dokumen2.pdf', NULL, '2024-01-01 08:17:58'),
(3, 'dokumen3.pdf', NULL, '2024-01-01 08:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `downloads`) VALUES
(127, 'Cetak Rencana Studi - Portal Akademik Universitas Andalas (2).pdf', 163844, 0),
(128, '001 - SK PRES BEM SINERGIdocx.docx.pdf', 406542, 0);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_ged`
--

CREATE TABLE `peminjaman_ged` (
  `id_peminjaman` char(15) NOT NULL,
  `kode_gedung` varchar(255) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_pakai` date DEFAULT NULL,
  `batas_upload_berkas` date DEFAULT NULL,
  `instansi_peminjam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman_ged`
--

INSERT INTO `peminjaman_ged` (`id_peminjaman`, `kode_gedung`, `tanggal_pinjam`, `tanggal_pakai`, `batas_upload_berkas`, `instansi_peminjam`) VALUES
('', 'AU', '2024-01-08', '2024-01-08', '2024-01-22', 'FSI'),
('001', 'AU', '2023-11-28', '2023-12-02', '2023-12-31', 'BEM KM FTI'),
('002', 'CH', '2023-12-15', '2023-12-21', '2023-12-18', 'BEM KM FATETA'),
('003', 'PST', '2023-12-30', '2023-12-05', '2023-12-03', 'kemahasiswaan unand');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_gedung`
--

CREATE TABLE `peminjaman_gedung` (
  `id_peminjaman` int(11) NOT NULL,
  `kode_gedung` varchar(255) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_pakai` date DEFAULT NULL,
  `batas_upload_berkas` date DEFAULT NULL,
  `instansi_peminjam` varchar(255) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `status_upload_berkas` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman_gedung`
--

INSERT INTO `peminjaman_gedung` (`id_peminjaman`, `kode_gedung`, `tanggal_pinjam`, `tanggal_pakai`, `batas_upload_berkas`, `instansi_peminjam`, `id`, `status_upload_berkas`) VALUES
(24, 'AU', '2024-01-09', '2024-02-22', '2024-01-23', 'SINERGI', 127, 2),
(25, 'AU', '2024-01-09', '2024-01-31', '2024-01-23', 'IDOLA', 128, 2),
(26, 'AU', '2024-01-09', '2024-01-30', '2024-01-23', 'BEM FTI', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna_mahasiswa`
--

CREATE TABLE `pengguna_mahasiswa` (
  `Nama_Lengkap` varchar(100) NOT NULL,
  `NIM` char(10) NOT NULL,
  `Fakultas` varchar(100) NOT NULL,
  `Jurusan` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna_mahasiswa`
--

INSERT INTO `pengguna_mahasiswa` (`Nama_Lengkap`, `NIM`, `Fakultas`, `Jurusan`, `Password`) VALUES
('lola', '1016', 'teknik', 'Elektro', '17ebfeb66d2173e72ce691d018169841'),
('Dinda Mestika', '2111511006', 'Teknologi Informasi', 'Teknik Komputer', 'a1b7b1ddfd296af4899e8ba338657e9d'),
('pera', '2111511008', 'teknik', 'sipil', 'bf676ed1364b5857fba69b5623c81b64'),
('Anisa Nur Fitri', '2111511012', 'Teknologi Informasi', 'Teknik Komputer', 'ff6d11fad3287047fcafb104c276e63a'),
('Lola Dwi Putri', '2111511016', 'Teknik', 'Elektro', '17ebfeb66d2173e72ce691d018169841'),
('Alfajri Nurhuda Yudiva', '2111512012', 'Teknologi Informasi', 'Teknik Komputer', 'db0ec1ae52b4fc640b52be7fc2920871'),
('Lathifah Hanum', '2111512014', 'Teknologi Informasi', 'Teknik Komputer', '5fdfbb715d8b8b0248128289f7351fe9'),
('Ikhwanul Hakim', '2111512016', 'Teknologi Informasi', 'Teknik Komputer', 'aloo123'),
('M Azzukhruf', '2111513010', 'Teknologi Informasi', 'Teknik Komputer', 'e1c76a95651ceb18f67734867759a00e'),
('dindaaa', '2111514006', 'Teknik', 'Elektro', '5ef035d11d74713fcb36f2df26aa7c3d'),
('Azoe', '2111514010', 'Teknologi Informasi', 'Teknik Komputer', 'c8eb649bfbbfc0d4fbd84c804dd7a861'),
('iwan', '2111514016', 'Filsafat', 'Teknik Komputer', '');

-- --------------------------------------------------------

--
-- Table structure for table `perpustakaan`
--

CREATE TABLE `perpustakaan` (
  `Kode_Gedung` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Instansi_Peminjam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perpustakaan`
--

INSERT INTO `perpustakaan` (`Kode_Gedung`, `Tanggal`, `Status`, `Instansi_Peminjam`) VALUES
('PST', '2023-12-01', 'Tersedia', ''),
('PST', '2023-12-02', 'Tersedia', ''),
('PST', '2023-12-03', 'Tidak Tersedia', 'BEM KM FEB'),
('PST', '2023-12-04', 'Tersedia', ''),
('PST', '2023-12-05', 'Tidak Tersedia', 'Kemahasiswaan Unand\r\n'),
('PST', '2023-12-06', 'Tidak Tersedia', 'REKTOR'),
('PST', '2023-12-07', 'Tersedia', ''),
('PST', '2023-12-08', 'Tersedia', ''),
('PST', '2023-12-09', 'Tersedia', ''),
('PST', '2023-12-10', 'Tidak Tersedia', 'HIMA TEKOM\r\n'),
('PST', '2023-12-11', 'Tersedia', ''),
('PST', '2023-12-12', 'Tersedia', ''),
('PST', '2023-12-13', 'Tidak Tersedia', 'FBI AS-SYIFA'),
('PST', '2023-12-14', 'Tersedia', ''),
('PST', '2023-12-15', 'Tersedia', ''),
('PST', '2023-12-16', 'Tersedia', ''),
('PST', '2023-12-17', 'Tidak Tersedia', 'Dekan Pertanian'),
('PST', '2023-12-18', 'Tersedia', ''),
('PST', '2023-12-19', 'Tersedia', ''),
('PST', '2023-12-20', 'Tersedia', ''),
('PST', '2023-12-21', 'Tersedia', ''),
('PST', '2023-12-22', 'tidak tersedia', 'BPMAI'),
('PST', '2023-12-23', 'Tersedia', ''),
('PST', '2023-12-24', 'Tidak Tersedia', 'GENTA ANDALAS'),
('PST', '2023-12-25', 'Tersedia', ''),
('PST', '2023-12-26', 'Tidak Tersedia', 'UKM PANDEKA'),
('PST', '2023-12-27', 'Tersedia', ''),
('PST', '2023-12-28', 'Tersedia', ''),
('PST', '2023-12-29', 'Tidak Tersedia', 'KULIAH UMUM UNAND'),
('PST', '2023-12-30', 'Tersedia', ''),
('PST', '2023-12-31', 'Tidak Tersedia', 'BEM KM FEB UNAND');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam_gedung`
--

CREATE TABLE `pinjam_gedung` (
  `id_peminjaman` int(11) NOT NULL,
  `kode_gedung` varchar(255) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_pakai` date DEFAULT NULL,
  `batas_upload_berkas` date DEFAULT NULL,
  `instansi_peminjam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pinjam_gedung`
--

INSERT INTO `pinjam_gedung` (`id_peminjaman`, `kode_gedung`, `tanggal_pinjam`, `tanggal_pakai`, `batas_upload_berkas`, `instansi_peminjam`) VALUES
(1, 'AU', '2024-01-08', '2024-01-15', '2024-01-22', 'HIMATEKOM'),
(2, 'AU', '2024-01-08', '2024-01-08', '2024-01-22', 'FSI'),
(3, 'AU', '2024-01-08', '2024-01-15', '2024-01-22', 'HMSI');

-- --------------------------------------------------------

--
-- Table structure for table `seminar_a1_7`
--

CREATE TABLE `seminar_a1_7` (
  `Kode_Gedung` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Instansi_Peminjam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seminar_a1_7`
--

INSERT INTO `seminar_a1_7` (`Kode_Gedung`, `Tanggal`, `Status`, `Instansi_Peminjam`) VALUES
('SA1.7', '2023-12-01', 'Tersedia', ''),
('SA1.7', '2023-12-02', 'Tersedia', ''),
('SA1.7', '2023-12-03', 'Tersedia', ''),
('SA1.7', '2023-12-04', 'Tidak Tersedia', 'UKM UKOS'),
('SA1.7', '2023-12-05', 'Tidak Tersedia', 'BEM KM UNIDHA'),
('SA1.7', '2023-12-06', ' Tersedia', ''),
('SA1.7', '2023-12-07', 'Tidak Tersedia', 'AIESEC\r\n'),
('SA1.7', '2023-12-08', 'Tersedia', ''),
('SA1.7', '2023-12-09', 'Tersedia', ''),
('SA1.7', '2023-12-10', 'Tersedia', ''),
('SA1.7', '2023-12-11', 'Tidak Tersedia', 'FSI AL-FATIH\r\n'),
('SA1.7', '2023-12-12', 'Tersedia', ''),
('SA1.7', '2023-12-13', 'Tersedia', ''),
('SA1.7', '2023-12-14', 'Tersedia', ''),
('SA1.7', '2023-12-15', 'Tidak Tersedia', 'UKM PIKA'),
('SA1.7', '2023-12-16', 'Tersedia', ''),
('SA1.7', '2023-12-17', 'Tidak Tersedia', 'MPM KM UNAND'),
('SA1.7', '2023-12-18', 'Tersedia', ''),
('SA1.7', '2023-12-19', 'Tersedia', ''),
('SA1.7', '2023-12-20', 'Tersedia', ''),
('SA1.7', '2023-12-21', 'Tersedia', ''),
('SA1.7', '2023-12-22', '', ''),
('SA1.7', '2023-12-23', 'Tersedia', ''),
('SA1.7', '2023-12-24', 'Tidak Tersedia', 'BPMAI'),
('SA1.7', '2023-12-25', 'Tersedia', ''),
('SA1.7', '2023-12-26', 'Tidak Tersedia', 'UKM PANDEKA'),
('SA1.7', '2023-12-27', 'Tersedia', ''),
('SA1.7', '2023-12-28', 'Tidak Tersedia', 'UKMF FSI AL-FATIH'),
('SA1.7', '2023-12-29', 'Tidak Tersedia', 'KULIAH UMUM UNAND'),
('SA1.7', '2023-12-30', 'Tersedia', ''),
('SA1.7', '2023-12-31', 'Tidak Tersedia', 'BEM KM FEB UNAND');

-- --------------------------------------------------------

--
-- Table structure for table `seminar_a1_8`
--

CREATE TABLE `seminar_a1_8` (
  `Kode_Gedung` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Instansi_Peminjam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seminar_a1_8`
--

INSERT INTO `seminar_a1_8` (`Kode_Gedung`, `Tanggal`, `Status`, `Instansi_Peminjam`) VALUES
('SA1.8', '2023-12-01', 'Tersedia', ''),
('SA1.8', '2023-12-02', 'Tersedia', ''),
('SA1.8', '2023-12-03', 'Tersedia', ''),
('SA1.8', '2023-12-04', 'Tidak Tersedia', 'HMSI'),
('SA1.8', '2023-12-05', 'Tersedia', ''),
('SA1.8', '2023-12-06', 'Tersedia', ''),
('SA1.8', '2023-12-07', 'Tersedia', ''),
('SA1.8', '2023-12-08', 'Tidak Tersedia', 'HIMATIKA'),
('SA1.8', '2023-12-09', 'Tersedia', ''),
('SA1.8', '2023-12-10', 'Tersedia', ''),
('SA1.8', '2023-12-11', 'Tersedia', ''),
('SA1.8', '2023-12-12', 'Tersedia', ''),
('SA1.8', '2023-12-13', 'Tersedia', ''),
('SA1.8', '2023-12-14', 'Tersedia', ''),
('SA1.8', '2023-12-15', 'Tidak Tersedia', 'LPI FH UA'),
('SA1.8', '2023-12-16', 'Tersedia', ''),
('SA1.8', '2023-12-17', 'Tersedia', ''),
('SA1.8', '2023-12-18', 'Tersedia', ''),
('SA1.8', '2023-12-19', 'Tidak Tersedia', 'MPM KM MIPA'),
('SA1.8', '2023-12-20', 'Tersedia', ''),
('SA1.8', '2023-12-21', 'Tersedia', ''),
('SA1.8', '2023-12-22', '', ''),
('SA1.8', '2023-12-23', 'Tersedia', ''),
('SA1.8', '2023-12-24', 'Tidak Tersedia', 'AN-NAHL'),
('SA1.8', '2023-12-25', 'Tersedia', ''),
('SA1.8', '2023-12-26', ' Tersedia', ''),
('SA1.8', '2023-12-27', 'Tersedia', ''),
('SA1.8', '2023-12-28', 'Tersedia', ''),
('SA1.8', '2023-12-29', 'Tidak Tersedia', 'DPM KM FTI'),
('SA1.8', '2023-12-30', 'Tersedia', ''),
('SA1.8', '2023-12-31', 'Tersedia', '');

-- --------------------------------------------------------

--
-- Table structure for table `seminar_b`
--

CREATE TABLE `seminar_b` (
  `Kode_Gedung` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Instansi_Peminjam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seminar_b`
--

INSERT INTO `seminar_b` (`Kode_Gedung`, `Tanggal`, `Status`, `Instansi_Peminjam`) VALUES
('SB', '2023-12-01', 'Tersedia', ''),
('SB', '2023-12-02', 'Tidak Tersedia', 'PMM'),
('SB', '2023-12-03', 'Tersedia', ''),
('SB', '2023-12-04', 'Tersedia', ''),
('SB', '2023-12-05', 'Tersedia', ''),
('SB', '2023-12-06', 'Tersedia', ''),
('SB', '2023-12-07', 'Tersedia', ''),
('SB', '2023-12-08', 'Tersedia', ''),
('SB', '2023-12-09', 'Tersedia', ''),
('SB', '2023-12-10', 'Tersedia', ''),
('SB', '2023-12-11', 'Tidak Tersedia', 'BEM KM UNAND'),
('SB', '2023-12-12', 'Tersedia', ''),
('SB', '2023-12-13', 'Tersedia', ''),
('SB', '2023-12-14', 'Tidak Tersedia', 'MAPALA'),
('SB', '2023-12-15', 'Tersedia', ''),
('SB', '2023-12-16', 'Tersedia', ''),
('SB', '2023-12-17', 'Tidak Tersedia', 'DPM KM FEB'),
('SB', '2023-12-18', 'Tersedia', ''),
('SB', '2023-12-19', 'Tidak Tersedia', 'AIESEC UNAND'),
('SB', '2023-12-20', 'Tersedia', ''),
('SB', '2023-12-21', 'Tersedia', ''),
('SB', '2023-12-22', 'Tidak Tersedia', 'UKM PENALARAN'),
('SB', '2023-12-23', 'Tersedia', ''),
('SB', '2023-12-24', 'Tidak Tersedia', ''),
('SB', '2023-12-25', 'Tersedia', ''),
('SB', '2023-12-26', 'Tidak Tersedia', 'KULIAH UMUM'),
('SB', '2023-12-27', 'Tersedia', ''),
('SB', '2023-12-28', 'Tidak Tersedia', 'FORISTEK'),
('SB', '2023-12-29', 'Tidak Tersedia', 'BPMAI'),
('SB', '2023-12-30', 'Tersedia', ''),
('SB', '2023-12-31', 'Tidak Tersedia', 'BEM KM FEB UNAND');

-- --------------------------------------------------------

--
-- Table structure for table `seminar_e`
--

CREATE TABLE `seminar_e` (
  `Kode_Gedung` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Instansi_Peminjam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seminar_e`
--

INSERT INTO `seminar_e` (`Kode_Gedung`, `Tanggal`, `Status`, `Instansi_Peminjam`) VALUES
('SE', '2023-12-01', 'Tidak Tersedia', 'UKM SINEMATOGRAFI'),
('SE', '2023-12-02', ' Tersedia', ''),
('SE', '2023-12-03', 'Tersedia', ''),
('SE', '2023-12-04', 'Tidak Tersedia', 'MENWA'),
('SE', '2023-12-05', 'Tersedia', ''),
('SE', '2023-12-06', 'Tidak Tersedia', 'KSR PMI'),
('SE', '2023-12-07', 'Tersedia', ''),
('SE', '2023-12-08', 'Tidak Tersedia', 'KOSBEMA'),
('SE', '2023-12-09', 'Tersedia', ''),
('SE', '2023-12-10', 'Tersedia', ''),
('SE', '2023-12-11', 'Tidak Tersedia', 'KOPMA'),
('SE', '2023-12-12', 'Tersedia', ''),
('SE', '2023-12-13', 'Tersedia', ''),
('SE', '2023-12-14', 'Tersedia', 'HIPMI'),
('SE', '2023-12-15', 'Tersedia', ''),
('SE', '2023-12-16', 'Tersedia', ''),
('SE', '2023-12-17', 'Tersedia', ''),
('SE', '2023-12-18', 'Tidak Tersedia', 'RACANA'),
('SE', '2023-12-19', ' Tersedia', ''),
('SE', '2023-12-20', 'Tersedia', ''),
('SE', '2023-12-21', ' Tersedia', ''),
('SE', '2023-12-22', 'Tidak Tersedia', 'GENTA ANDALAS'),
('SE', '2023-12-23', 'Tersedia', ''),
('SE', '2023-12-24', 'Tidak Tersedia', 'RABBANI'),
('SE', '2023-12-25', 'Tersedia', ''),
('SE', '2023-12-26', 'Tidak Tersedia', 'UKM PANDEKA'),
('SE', '2023-12-27', 'Tersedia', ''),
('SE', '2023-12-28', 'Tidak Tersedia', 'UKMF FSI AL-FATIH'),
('SE', '2023-12-29', 'Tidak Tersedia', 'KULIAH UMUM UNAND'),
('SE', '2023-12-30', 'Tersedia', ''),
('SE', '2023-12-31', 'Tidak Tersedia', 'BEM KM FEB UNAND');

-- --------------------------------------------------------

--
-- Table structure for table `seminar_f`
--

CREATE TABLE `seminar_f` (
  `Kode_Gedung` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Instansi_Peminjam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seminar_f`
--

INSERT INTO `seminar_f` (`Kode_Gedung`, `Tanggal`, `Status`, `Instansi_Peminjam`) VALUES
('SF', '2023-12-01', 'Tersedia', ''),
('SF', '2023-12-02', 'Tersedia', ''),
('SF', '2023-12-03', 'Tidak Tersedia', 'KOPMA'),
('SF', '2023-12-04', 'Tersedia', ''),
('SF', '2023-12-05', 'Tersedia', ''),
('SF', '2023-12-06', 'Tersedia', ''),
('SF', '2023-12-07', 'Tersedia', ''),
('SF', '2023-12-08', 'Tersedia', ''),
('SF', '2023-12-09', 'Tidak Tersedia', 'NEOTE'),
('SF', '2023-12-10', 'Tersedia', ''),
('SF', '2023-12-11', ' Tersedia', ''),
('SF', '2023-12-12', 'Tidak Tersedia', 'PHP'),
('SF', '2023-12-13', ' Tersedia', ''),
('SF', '2023-12-14', 'Tersedia', 'BEM KM FIB'),
('SF', '2023-12-15', ' Tersedia', ''),
('SF', '2023-12-16', 'Tidak Tersedia', 'DPM KM HUKUM'),
('SF', '2023-12-17', 'Tersedia', ''),
('SF', '2023-12-18', 'Tersedia', ''),
('SF', '2023-12-19', ' Tersedia', ''),
('SF', '2023-12-20', 'Tidak Tersedia', 'DPM KM FK'),
('SF', '2023-12-21', ' Tersedia', ''),
('SF', '2023-12-22', 'Tidak Tersedia', 'BEM KM FISIP'),
('SF', '2023-12-23', 'Tersedia', ''),
('SF', '2023-12-24', ' Tersedia', ''),
('SF', '2023-12-25', 'Tersedia', ''),
('SF', '2023-12-26', 'Tidak Tersedia', 'UKM PANDEKA'),
('SF', '2023-12-27', 'Tersedia', ''),
('SF', '2023-12-28', 'Tidak Tersedia', 'UKMF FSI AL-FATIH'),
('SF', '2023-12-29', 'Tidak Tersedia', 'KULIAH UMUM UNAND'),
('SF', '2023-12-30', 'Tersedia', ''),
('SF', '2023-12-31', 'Tidak Tersedia', 'BEM KM FEB UNAND');

-- --------------------------------------------------------

--
-- Table structure for table `seminar_i`
--

CREATE TABLE `seminar_i` (
  `Kode_Gedung` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Instansi_Peminjam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seminar_i`
--

INSERT INTO `seminar_i` (`Kode_Gedung`, `Tanggal`, `Status`, `Instansi_Peminjam`) VALUES
('SI', '2023-12-01', 'Tersedia', ''),
('SI', '2023-12-02', 'Tidak Tersedia', 'BEM KM FTI'),
('SI', '2023-12-03', 'Tersedia', ''),
('SI', '2023-12-04', 'Tidak Tersedia', 'KOSBEMA'),
('SI', '2023-12-05', 'Tersedia', ''),
('SI', '2023-12-06', 'Tidak Tersedia', 'KOPMA'),
('SI', '2023-12-07', 'Tersedia', ''),
('SI', '2023-12-08', 'Tidak Tersedia', 'KSR PMI'),
('SI', '2023-12-09', 'Tersedia', ''),
('SI', '2023-12-10', 'Tersedia', ''),
('SI', '2023-12-11', 'Tidak Tersedia', 'PANDEKAR'),
('SI', '2023-12-12', 'Tersedia', ''),
('SI', '2023-12-13', 'Tidak Tersedia', 'UKM PIKMAG'),
('SI', '2023-12-14', 'Tersedia', ''),
('SI', '2023-12-15', 'Tidak Tersedia', 'FSI FISIP'),
('SI', '2023-12-16', 'Tersedia', ''),
('SI', '2023-12-17', 'Tidak Tersedia', 'PENALARAN'),
('SI', '2023-12-18', 'Tersedia', ''),
('SI', '2023-12-19', 'Tersedia', ''),
('SI', '2023-12-20', 'Tersedia', ''),
('SI', '2023-12-21', 'Tidak Tersedia', 'BEM KM KESMAS'),
('SI', '2023-12-22', 'Terseda', ''),
('SI', '2023-12-23', 'Tersedia', ''),
('SI', '2023-12-24', 'Tidak Tersedia', 'SINEMATOGRAFI'),
('SI', '2023-12-25', 'Tersedia', ''),
('SI', '2023-12-26', 'Tidak Tersedia', 'UKM PANDEKA'),
('SI', '2023-12-27', 'Tersedia', ''),
('SI', '2023-12-28', 'Tidak Tersedia', 'UKMF FSI AL-FATIH'),
('SI', '2023-12-29', 'Tidak Tersedia', 'KULIAH UMUM UNAND'),
('SI', '2023-12-30', 'Tersedia', ''),
('SI', '2023-12-31', 'Tidak Tersedia', 'BEM KM FEB UNAND');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_dokumen`
--

CREATE TABLE `tabel_dokumen` (
  `ID_Dokumen` int(11) NOT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `isi_file` longblob DEFAULT NULL,
  `ID_Admin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_gedung`
--

CREATE TABLE `tabel_gedung` (
  `Nama_Gedung` varchar(30) NOT NULL,
  `Kode_Gedung` varchar(10) NOT NULL,
  `Lokasi` varchar(30) DEFAULT NULL,
  `Penjaga` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_gedung`
--

INSERT INTO `tabel_gedung` (`Nama_Gedung`, `Kode_Gedung`, `Lokasi`, `Penjaga`) VALUES
('Auditorium', 'AU', 'UNAND', 'Dina'),
('Convention Hall', 'CH', 'UNAND', 'Bowo'),
('Perpustakaan', 'PST', 'UNAND', 'Bayu'),
('Seminar E', 'SE', 'UNAND', 'Katiara'),
('Seminar F', 'SF', 'UNAND', 'Rika'),
('Seminar I', 'SI', 'UNAND', 'Dono');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_peminjaman`
--

CREATE TABLE `tabel_peminjaman` (
  `ID_Peminjaman` int(10) NOT NULL,
  `Tanggal_Pinjam` date DEFAULT NULL,
  `Tanggal_Pakai` date DEFAULT NULL,
  `Batas_Upload_Berkas` date DEFAULT NULL,
  `status` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_penjaga`
--

CREATE TABLE `tabel_penjaga` (
  `Nama_Penjaga` varchar(25) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_penjaga`
--

INSERT INTO `tabel_penjaga` (`Nama_Penjaga`, `Password`) VALUES
('Dina', '2jbg719'),
('Bowo', '8717sgj'),
('Bayu', 'jxh7bhg'),
('Katiara', 'maksj67'),
('Rika', 'nbjsk91'),
('Dono', 's8012jc');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pdf_book`
--

CREATE TABLE `tb_pdf_book` (
  `id` int(11) NOT NULL,
  `nama_file_pdf` varchar(100) NOT NULL,
  `judul_file_pdf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_pdf_book`
--

INSERT INTO `tb_pdf_book` (`id`, `nama_file_pdf`, `judul_file_pdf`) VALUES
(28, 'css.pdf', 'Belajar Css Untuk Pemula'),
(29, 'Belajar Javascript .pdf', 'Belajar Javascript '),
(32, 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara.pdf', 'Ebook PHP Menyelam dan Menaklukan Samudra PHP Loka Dwiartara'),
(33, 'ebook-codeigniter.pdf', 'Ebook codeigniter'),
(34, 'Website dengan PHP.pdf', 'Website dengan PHP'),
(39, 'UTS 2021-2022[1].pdf', 'judul'),
(40, 'TUGAS 2 OARKOM KWLOMPOK 6.pdf', 'jwnldakx'),
(41, 'database.pdf', 'Berkas Dinda Mestika'),
(42, 'Data Open Recruitment Pengurus GenBI Unand 23_24.pdf', 'Form Azzue'),
(43, 'Data Open Recruitment Pengurus GenBI Unand 23_24.pdf', 'Form Dinda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Indexes for table `auditorium`
--
ALTER TABLE `auditorium`
  ADD PRIMARY KEY (`Kode_Gedung`,`Tanggal`);

--
-- Indexes for table `convention_hall`
--
ALTER TABLE `convention_hall`
  ADD PRIMARY KEY (`Tanggal`),
  ADD KEY `fk_convention_hall_gedung` (`Kode_Gedung`);

--
-- Indexes for table `dokumenpdf`
--
ALTER TABLE `dokumenpdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman_ged`
--
ALTER TABLE `peminjaman_ged`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `kode_gedung` (`kode_gedung`);

--
-- Indexes for table `peminjaman_gedung`
--
ALTER TABLE `peminjaman_gedung`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `pengguna_mahasiswa`
--
ALTER TABLE `pengguna_mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD PRIMARY KEY (`Tanggal`),
  ADD KEY `fk_perpustakaan_gedung` (`Kode_Gedung`);

--
-- Indexes for table `pinjam_gedung`
--
ALTER TABLE `pinjam_gedung`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `seminar_a1_7`
--
ALTER TABLE `seminar_a1_7`
  ADD PRIMARY KEY (`Tanggal`),
  ADD KEY `fk_seminar_a1_7_gedung` (`Kode_Gedung`);

--
-- Indexes for table `seminar_a1_8`
--
ALTER TABLE `seminar_a1_8`
  ADD PRIMARY KEY (`Tanggal`),
  ADD KEY `fk_seminar_a1_8gedung` (`Kode_Gedung`);

--
-- Indexes for table `seminar_b`
--
ALTER TABLE `seminar_b`
  ADD PRIMARY KEY (`Tanggal`),
  ADD KEY `fk_seminar_b_gedung` (`Kode_Gedung`);

--
-- Indexes for table `seminar_e`
--
ALTER TABLE `seminar_e`
  ADD PRIMARY KEY (`Tanggal`),
  ADD KEY `fk_seminar_e_gedung` (`Kode_Gedung`);

--
-- Indexes for table `seminar_f`
--
ALTER TABLE `seminar_f`
  ADD PRIMARY KEY (`Tanggal`),
  ADD KEY `fk_seminar_f_gedung` (`Kode_Gedung`);

--
-- Indexes for table `seminar_i`
--
ALTER TABLE `seminar_i`
  ADD PRIMARY KEY (`Tanggal`),
  ADD KEY `fk_seminar_i_gedung` (`Kode_Gedung`);

--
-- Indexes for table `tabel_dokumen`
--
ALTER TABLE `tabel_dokumen`
  ADD PRIMARY KEY (`ID_Dokumen`),
  ADD KEY `ID_Admin` (`ID_Admin`);

--
-- Indexes for table `tabel_gedung`
--
ALTER TABLE `tabel_gedung`
  ADD PRIMARY KEY (`Kode_Gedung`);

--
-- Indexes for table `tabel_peminjaman`
--
ALTER TABLE `tabel_peminjaman`
  ADD PRIMARY KEY (`ID_Peminjaman`);

--
-- Indexes for table `tabel_penjaga`
--
ALTER TABLE `tabel_penjaga`
  ADD PRIMARY KEY (`Password`);

--
-- Indexes for table `tb_pdf_book`
--
ALTER TABLE `tb_pdf_book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumenpdf`
--
ALTER TABLE `dokumenpdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `peminjaman_gedung`
--
ALTER TABLE `peminjaman_gedung`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pinjam_gedung`
--
ALTER TABLE `pinjam_gedung`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pdf_book`
--
ALTER TABLE `tb_pdf_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `convention_hall`
--
ALTER TABLE `convention_hall`
  ADD CONSTRAINT `fk_convention_hall_gedung` FOREIGN KEY (`Kode_Gedung`) REFERENCES `tabel_gedung` (`Kode_Gedung`);

--
-- Constraints for table `peminjaman_ged`
--
ALTER TABLE `peminjaman_ged`
  ADD CONSTRAINT `peminjaman_ged_ibfk_1` FOREIGN KEY (`kode_gedung`) REFERENCES `tabel_gedung` (`Kode_Gedung`);

--
-- Constraints for table `peminjaman_gedung`
--
ALTER TABLE `peminjaman_gedung`
  ADD CONSTRAINT `peminjaman_gedung_ibfk_1` FOREIGN KEY (`id`) REFERENCES `files` (`id`);

--
-- Constraints for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD CONSTRAINT `fk_perpustakaan_gedung` FOREIGN KEY (`Kode_Gedung`) REFERENCES `tabel_gedung` (`Kode_Gedung`);

--
-- Constraints for table `seminar_e`
--
ALTER TABLE `seminar_e`
  ADD CONSTRAINT `fk_seminar_e_gedung` FOREIGN KEY (`Kode_Gedung`) REFERENCES `tabel_gedung` (`Kode_Gedung`);

--
-- Constraints for table `seminar_f`
--
ALTER TABLE `seminar_f`
  ADD CONSTRAINT `fk_seminar_f_gedung` FOREIGN KEY (`Kode_Gedung`) REFERENCES `tabel_gedung` (`Kode_Gedung`);

--
-- Constraints for table `seminar_i`
--
ALTER TABLE `seminar_i`
  ADD CONSTRAINT `fk_seminar_i_gedung` FOREIGN KEY (`Kode_Gedung`) REFERENCES `tabel_gedung` (`Kode_Gedung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
