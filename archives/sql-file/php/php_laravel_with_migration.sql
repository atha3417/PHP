SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `php_laravel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `php_laravel`;
CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`) VALUES
(1, 'Muhammad Atha Tsaqif', '123123123', 'Atha.3417@gmail.com', 'Teknik Informatika'),
(2, 'Nafisa Zahra Saida', '132132132', 'Nafisa.4810@gmail.com', 'Teknik Mesin'),
(3, 'Fathan Ahmad Tsaiqah', '213213213', 'Fathanahmadts@gmail.com', 'Teknik Planologi'),
(4, 'Fayza Azmina Fachira', '231231231', 'fayza@gmail.com', 'Teknik Informatika'),
(5, 'Marchelle Vicky Angelie', '312312312', 'chelle.289@gmail.com', 'Teknik Industri'),
(6, 'Peserta Baru', '321321321', 'peserta.baru@gmail.com', 'Teknik Apa Saja');
