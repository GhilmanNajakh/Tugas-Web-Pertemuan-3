-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 12:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_php_0049`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_0049`
--

CREATE TABLE `tb_user_0049` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jeniskelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` char(13) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user_0049`
--

INSERT INTO `tb_user_0049` (`id`, `nama`, `jeniskelamin`, `alamat`, `nohp`, `foto`) VALUES
(2, 'Ghilman', 'Laki-Laki', 'j', '44', '6714ddf2c91c4_140b62be90f68bcf5a32315cf0b773df.jpg'),
(3, 'man', 'Laki-Laki', 'hh', '999', '6714de1756a32_wallpaperflare.com_wallpaper.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user_0049`
--
ALTER TABLE `tb_user_0049`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user_0049`
--
ALTER TABLE `tb_user_0049`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
