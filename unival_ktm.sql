-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2025 at 12:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unival_ktm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `email`, `created_at`) VALUES
(1, 'admin', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9', 'Administrator', 'admin@example.com', '2025-11-15 01:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan` varchar(150) DEFAULT NULL,
  `angkatan` year(4) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `nohp` varchar(30) DEFAULT NULL,
  `foto_paspor` varchar(255) DEFAULT NULL,
  `ktp_file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `jurusan`, `angkatan`, `email`, `nohp`, `foto_paspor`, `ktp_file`, `created_at`) VALUES
(4, '22040050', 'FABIO VIORINNO', 'Teknik Informatika', 2022, 'fabio@gmail.com', '08393283823', NULL, NULL, '2025-11-17 15:38:50'),
(5, '22040055', 'HARIYANI', 'Teknik Informatika', 2022, 'hary@gmail.com', '08393283827', NULL, NULL, '2025-11-17 15:39:29'),
(6, '22040056', 'FADHLI HILMI', 'Teknik Informatika', 2022, 'fadly@gdmail.com', '08393283828', NULL, NULL, '2025-11-17 15:40:23'),
(7, '22040057', 'NURUL ILMA MALA FADILA', 'Teknik Informatika', 2022, 'mala@gdmail.com', '08393283829', NULL, NULL, '2025-11-17 15:40:56'),
(8, '22040062', 'SAPTA', 'Teknik Informatika', 2022, 'sapta@gdmail.com', '08393283822', NULL, NULL, '2025-11-17 15:41:28'),
(9, '22040064', 'AZURA PUSPITA', 'Teknik Informatika', 2022, 'azura@gmail.com', '', NULL, NULL, '2025-11-17 15:42:02'),
(12, '22040072', 'ABI LAIL NOVALDI', 'Teknik Informatika', 2022, 'abiail@gmail.com', '08393283823', NULL, NULL, '2025-11-17 15:44:44'),
(13, '22040077', 'HAIRUL ANWAR', 'Teknik Informatika', 2022, 'anwar@gmail.com', '083932838245', NULL, NULL, '2025-11-17 15:45:18'),
(14, '22040083', 'RIFKILLAHIL MAULANA', 'Teknik Informatika', 2022, 'ridkilail@gmail.com', '083932838244', NULL, NULL, '2025-11-17 15:45:49'),
(15, '22040084', 'MUHAMMAD LEFAN PERMANA', 'Teknik Informatika', 2022, 'lefan@gmail.com', '083932838247', NULL, NULL, '2025-11-17 15:46:34'),
(16, '22040087', 'RIFKI APRIANSYAH', 'Teknik Informatika', 2022, 'rifki@gmail.com', '0933363673386', NULL, NULL, '2025-11-17 15:47:20'),
(17, '22040093', 'JIHAN KARMILAH', 'Teknik Informatika', 2022, 'jhan@gmail.com', '08383827847', NULL, NULL, '2025-11-17 15:48:24'),
(18, '22041003', 'KHARISMA ADAM', 'Teknik Informatika', 2022, 'adam@gmail.com', '989488929284', NULL, NULL, '2025-11-17 15:48:53'),
(19, '22041007', 'MUHAMMAD ZIDANE SETIAWAN', 'Teknik Informatika', 2022, 'zidan@gmail.com', '-0943988444', NULL, NULL, '2025-11-17 15:49:27'),
(20, '22041011', 'RAMDANI HIDAYATULLAH', 'Teknik Informatika', 2022, 'dani@gmail.com', '03978377374', NULL, NULL, '2025-11-17 15:49:55'),
(21, '22041012', 'OFA ROFAHIYAH', 'Teknik Informatika', 2022, 'ofah@gmail.com', '0838278478', NULL, NULL, '2025-11-17 15:50:25'),
(22, '22041015', 'ADRIAN MAULANA MARBUN', 'Teknik Informatika', 2022, 'marbun@gmail.com', '098287747467', NULL, NULL, '2025-11-17 15:50:57'),
(23, '22041016', 'NOVRI ARDANA BAIHAKI', 'Teknik Informatika', 2022, 'novri@gmail.com', '04983583748', NULL, NULL, '2025-11-17 15:51:26'),
(24, '22041017', 'ANISATUNASIROH', 'Teknik Informatika', 2022, 'nisa@gmail.com', '04983583748', NULL, NULL, '2025-11-17 15:51:52'),
(25, '22041018', 'GILANG STEFHANI', 'Teknik Informatika', 2022, 'gilang@gmail.com', '04983583744', NULL, NULL, '2025-11-17 15:52:34'),
(26, '22041019', 'CHERYO ELNUNO', 'Teknik Informatika', 2022, 'rio@gmail.com', '04983583743', NULL, NULL, '2025-11-17 15:53:02'),
(27, '22041022', 'FAUZI SAPUTRA', 'Teknik Informatika', 2022, 'fauzi@gmail.com', '04983583743', NULL, NULL, '2025-11-17 15:53:31'),
(28, '22041034', 'YIYIK ULADIAN', 'Teknik Informatika', 2022, 'yyik@gmail.com', '04983583743', NULL, NULL, '2025-11-17 15:54:05'),
(29, '22041035', 'DEA RAHMAWATI', 'Teknik Informatika', 2022, 'dea@gmail.com', '04983583743', NULL, NULL, '2025-11-17 15:54:30'),
(30, '22041037', 'DILA AULIA', 'Teknik Informatika', 2022, 'dila@gmail.com', '04983583743', NULL, NULL, '2025-11-17 15:54:55'),
(31, '22041038', 'ADI NIKMATULLAH', 'Teknik Informatika', 2022, 'adi@gmail.com', '04983583743', NULL, NULL, '2025-11-17 15:55:21'),
(32, '22041039', 'HALIMATUSSA\'DIAH', 'Teknik Informatika', 2022, 'halimah2gmail.com', '04983583743', NULL, NULL, '2025-11-17 15:55:45'),
(34, '22041042', 'GIAN ADAM', 'Teknik Informatika', 2022, 'gian@gamil.com', '04983583743', NULL, NULL, '2025-11-17 15:57:10'),
(35, '22041044', 'MUHAMAD ILHAM SAPUTRA', 'Teknik Informatika', 2022, 'ilham@gmail.com', '04983583743', NULL, NULL, '2025-11-17 15:57:35'),
(36, '22041046', 'ALFI SYAHRI FAUZI', 'Teknik Informatika', 2022, 'alfi@gmail.com', '04983583743', NULL, NULL, '2025-11-17 15:57:58'),
(37, '22041049', 'FERDI YANSYAH', 'Teknik Informatika', 2022, 'ferdi@gmail.com', '04983583743', NULL, NULL, '2025-11-17 15:58:22'),
(38, '22041041', 'JUM\'ATUL ANSORI', 'Teknik Informatika', 2022, 'ansorijrl55@gmail.com', '04983583743', 'uploads/foto_22041041_1763444362.png', 'uploads/ktp_22041041_1763444362.png', '2025-11-18 05:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_ktm`
--

CREATE TABLE `permohonan_ktm` (
  `id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `alasan` text DEFAULT NULL,
  `status` enum('pending','approved','rejected') DEFAULT 'pending',
  `admin_note` text DEFAULT NULL,
  `requested_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `processed_at` datetime DEFAULT NULL,
  `ktm_no` varchar(50) DEFAULT NULL,
  `ktm_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permohonan_ktm`
--

INSERT INTO `permohonan_ktm` (`id`, `mahasiswa_id`, `alasan`, `status`, `admin_note`, `requested_at`, `processed_at`, `ktm_no`, `ktm_file`) VALUES
(10, 38, 'jjjj', 'rejected', NULL, '2025-11-18 05:39:22', '2025-11-18 12:45:04', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `permohonan_ktm`
--
ALTER TABLE `permohonan_ktm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahasiswa_id` (`mahasiswa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `permohonan_ktm`
--
ALTER TABLE `permohonan_ktm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permohonan_ktm`
--
ALTER TABLE `permohonan_ktm`
  ADD CONSTRAINT `permohonan_ktm_ibfk_1` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
