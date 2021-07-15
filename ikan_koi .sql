-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 03:35 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikan_koi`
--

-- --------------------------------------------------------

--
-- Table structure for table `do`
--

CREATE TABLE `do` (
  `id_uji_coba` varchar(11) NOT NULL,
  `baik` float NOT NULL,
  `sedang` float NOT NULL,
  `buruk` float NOT NULL,
  `sangat_buruk` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `do`
--

INSERT INTO `do` (`id_uji_coba`, `baik`, `sedang`, `buruk`, `sangat_buruk`) VALUES
('UJC000001', 1, 0, 0, 0),
('UJC000002', 1, 0, 0, 0),
('UJC000003', 1, 0, 0, 0),
('UJC000004', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_uji_coba` varchar(15) NOT NULL,
  `kohaku` varchar(11) NOT NULL,
  `sanke` varchar(11) NOT NULL,
  `sowa` varchar(11) NOT NULL,
  `shiro` varchar(11) NOT NULL,
  `ogan` varchar(11) NOT NULL,
  `yamabuki` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_uji_coba`, `kohaku`, `sanke`, `sowa`, `shiro`, `ogan`, `yamabuki`) VALUES
('UJC000002', '0', '0', '0', '0', '0', '0'),
('UJC000003', 'Sedang (B)', 'Sedang (B)', 'Sedang (B)', 'Optimal (A)', 'Sedang (B)', 'Sedang (B)'),
('UJC000004', 'Sangat Buru', 'Sangat Buru', 'Sangat Buru', 'Sangat Buru', 'Sangat Buru', 'Sangat Buru');

-- --------------------------------------------------------

--
-- Table structure for table `suhu`
--

CREATE TABLE `suhu` (
  `id_uji_coba` varchar(11) NOT NULL,
  `baik` varchar(11) NOT NULL,
  `sedang` varchar(11) NOT NULL,
  `buruk` varchar(11) NOT NULL,
  `sangat_buruk` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suhu`
--

INSERT INTO `suhu` (`id_uji_coba`, `baik`, `sedang`, `buruk`, `sangat_buruk`) VALUES
('UJC000001', '0', '0', '0', '1'),
('UJC000002', '0', '1', '0', '0'),
('UJC000003', '0', '0', '0', '1'),
('UJC000004', '0', '0', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tds`
--

CREATE TABLE `tds` (
  `id_uji_coba` varchar(11) NOT NULL,
  `baik` varchar(11) NOT NULL,
  `sedang` varchar(11) NOT NULL,
  `buruk` varchar(11) NOT NULL,
  `sangat_buruk` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tds`
--

INSERT INTO `tds` (`id_uji_coba`, `baik`, `sedang`, `buruk`, `sangat_buruk`) VALUES
('UJC000001', '0', '1', '0', '0'),
('UJC000002', '0.088', '0.912', '0', '0'),
('UJC000003', '0.064', '0.936', '0', '0'),
('UJC000004', '0', '1', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `uji_coba`
--

CREATE TABLE `uji_coba` (
  `id_uji_coba` varchar(9) NOT NULL,
  `tanggal` date NOT NULL,
  `suhu` int(11) NOT NULL,
  `tds` int(11) NOT NULL,
  `do` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `hasil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uji_coba`
--

INSERT INTO `uji_coba` (`id_uji_coba`, `tanggal`, `suhu`, `tds`, `do`, `score`, `hasil`) VALUES
('UJC000001', '2021-07-09', 34, 123, 7, 201, 'Sedang (B)'),
('UJC000002', '2021-07-09', 28, 136, 8, 207, 'Sedang (B)'),
('UJC000003', '2021-07-09', 32, 133, 9, 212, 'Sedang (B)'),
('UJC000004', '2021-07-10', 2, 3, 3, 500, 'Sangat Buruk (D)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uji_coba`
--
ALTER TABLE `uji_coba`
  ADD PRIMARY KEY (`id_uji_coba`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
