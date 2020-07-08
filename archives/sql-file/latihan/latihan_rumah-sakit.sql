-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 03:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_rumah-sakit`
--
CREATE DATABASE IF NOT EXISTS `latihan_rumah-sakit` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `latihan_rumah-sakit`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` varchar(50) NOT NULL,
  `nama_dokter` varchar(80) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`) VALUES
('12b48949-0cdb-4245-8ffb-a5ab34f35453', 'Dr. Geonano', 'THT', 'Jl. DEF No. 0987', '0813245123'),
('3f02f9c7-dc31-4d15-a0b8-3092af7d3318', 'Dr. Andi Subagio', 'Mata', 'Jl. Abc No. 123', '0818672443'),
('97424574-abda-455c-ae51-45d441e26d8d', 'Dr. Mizania', 'Pernapasa', 'Jl. Abc No. 321', '0857423721');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(200) NOT NULL,
  `ket_obat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `ket_obat`) VALUES
('0044025b-a8ce-11ea-bd50-14dae9db7f82', 'Paracetamol', 'Obat Penurun Panas'),
('ee6a4ece-a8d3-11ea-bd50-14dae9db7f82', 'Oskadon', 'Obat'),
('ee6a668f-a8d3-11ea-bd50-14dae9db7f82', 'Paramex', 'Obat Juga'),
('ee6a79e1-a8d3-11ea-bd50-14dae9db7f82', 'Ultraflu', 'Obat Flu'),
('ee6a8adf-a8d3-11ea-bd50-14dae9db7f82', 'Komix', 'Obat Batuk');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` varchar(50) NOT NULL,
  `nomor_identitas` varchar(30) NOT NULL,
  `nama_pasien` varchar(80) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nomor_identitas`, `nama_pasien`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
('021e12ff-d13f-40fa-a5a8-2f7633340db6', '436786347836', 'Fadhilla', 'L', 'Bekasi', '34788853489'),
('07537bf1-984d-4026-8acf-6f98c95b7973', '635743769', 'Ryan E. Pelton', 'L', '560 Passaic Street', '453535453'),
('18e93c90-40aa-411f-9b37-e9a0325976f1', '54545256234', 'Joko', 'L', 'Palembang', '54453646457'),
('1bbf7e59-d263-4c7b-ad6b-0a7dd60767b3', '787685765778', 'Jono', 'P', 'hgfhdgf', '4545646346'),
('2350fe48-391c-4fa9-b38f-f05fcb0e9814', '6483768', 'Tono', 'P', 'Jepang', '54657564545647'),
('260fb14c-4149-47de-8d34-ceec7bc44b22', '4333475734', 'Tukijem', 'L', 'Indonesia', '7463788'),
('2c969ecc-400f-4222-b228-43acb92e7df2', '4646782323489', 'Tono', 'P', 'Medan', '5454564'),
('33dc121e-3b7d-4529-8e21-c521952b15b6', '765433445356', 'Najib', 'L', 'Petarukan', '45426234678'),
('3530f896-7f9d-4e01-8c0e-656fd42ddadb', '4333475734', 'Tukijem', 'L', 'Indonesia', '7463788'),
('36760012-7dac-4840-bb02-fa44f8f89515', '478982463435', 'Zahra', 'P', 'Jateng', '47834623947'),
('4870103d-2a0a-4912-86c9-28d45541fad8', '4646782323489', 'Tono', 'P', 'Medan', '5454564'),
('51f278a6-6192-4f6a-9167-2e01d3a1fb06', '54545256234', 'Joko', 'L', 'Palembang', '54453646457'),
('6e5f9b4e-3ae1-4de7-b977-a6a1a3e433f0', '478982463435', 'Zahra', 'P', 'Jateng', '47834623947'),
('77dd0928-575d-47d9-8ddc-51981f232e88', '589578855', 'Muhtasaq', 'L', 'Mana Aja', '345554354'),
('8578d62b-8251-4ee1-af32-9a0a14b6e782', '436786347836', 'Fadhilla', 'L', 'Bekasi', '34788853489'),
('a1543fc8-e575-4b1c-91cd-0d0fe55de09f', '47834854', 'Tono', 'L', 'Sulawesi', '78423784467'),
('b27dda76-9682-4c28-a5fe-273bc6d7b026', '768567864786', 'Sujanto', 'L', 'Tes Daerah', '9237982739'),
('b9043ea1-b4ba-425a-b102-e1e3423c941a', '54656257456', 'Nafisa', 'P', 'Mana Aja', '5462753586357'),
('cb913fc3-53da-49d5-a8aa-e828a655fa88', '589578855', 'Muhtasaq', 'L', 'Mana Aja', '345554354'),
('cc30a623-e3d7-446a-9fad-819f8c898845', '4723423892389', 'Fayza', 'P', 'Bekasi', '47264673595'),
('d4bed716-94f3-4e56-b356-a5272fa7ec3c', '45643544663554648', 'Andi', 'L', 'Batam', '765645623443'),
('d9579f75-2d15-44b2-ab4f-fefd65b17631', '4723423892389', 'Fayza', 'P', 'Bekasi', '47264673595'),
('df547e20-9c90-45d3-9db7-079399fb2da9', '45643544663554648', 'Andi', 'L', 'Batam', '765645623443'),
('e2bacaf8-ea8d-409a-afa1-62d3e43082d7', '768567864786', 'Sujanto', 'L', 'Tes Daerah', '9237982739'),
('e373bb8e-1345-4e1b-8a42-343cf26bb97e', '45443442342', 'Test', 'L', 'Surabaya', '4389935349569'),
('eae1c70e-2cca-42f1-a431-6824cb83ef2e', '787685765778', 'Jono', 'P', 'hgfhdgf', '4545646346');

-- --------------------------------------------------------

--
-- Table structure for table `tb_poliklinik`
--

CREATE TABLE `tb_poliklinik` (
  `id_poli` varchar(50) NOT NULL,
  `nama_poli` varchar(50) NOT NULL,
  `gedung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_poliklinik`
--

INSERT INTO `tb_poliklinik` (`id_poli`, `nama_poli`, `gedung`) VALUES
('0ca09b67-a915-4632-92ef-99205c54d5a3', 'Poli B', 'Venus'),
('87073de3-4027-4729-b2a9-128c453b24af', 'Poli H', 'Neptunus'),
('a0f188f6-bcdd-4ade-9f3e-469830632162', 'Poli E', 'Jupiter'),
('a2e2cf3d-6f1d-47b9-9d4b-0874765ec4fc', 'Poli F', 'Saturnus'),
('a5e2c773-e395-4997-8386-bd006d8bdd75', 'Poli C', 'Bumi'),
('a5faef48-f8d8-4c1d-8d1b-c8e47bc5292e', 'Poli G', 'Uranus'),
('b0e38cd6-6576-4f03-9ee7-1c90006dc119', 'Poli A', 'Merkurius'),
('c154dcba-5736-4574-9197-63ee508476cd', 'Poli J', 'Meteorid'),
('dd3a7186-3ced-4c3b-87fa-6ffe4ef6cab4', 'Poli I', 'Pluto'),
('e740479e-e78a-4982-941b-6c6d4b8c1048', 'Poli D', 'Mars');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekammedis`
--

CREATE TABLE `tb_rekammedis` (
  `id_rm` varchar(50) NOT NULL,
  `id_pasien` varchar(50) NOT NULL,
  `keluhan` text NOT NULL,
  `id_dokter` varchar(50) NOT NULL,
  `diagnosa` text NOT NULL,
  `id_poli` varchar(50) NOT NULL,
  `tanggal_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rm_obat`
--

CREATE TABLE `tb_rm_obat` (
  `id` int(11) NOT NULL,
  `id_rm` varchar(50) NOT NULL,
  `id_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(80) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
('ae525424-a8ba-11ea-bd50-14dae9db7f82', 'Muhammad Atha Tsaqif', 'Admin', '33df0a7c29b3cf85e5aa152f1f65178854b7bc4a', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rm` (`id_rm`,`id_obat`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD CONSTRAINT `tb_rekammedis_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id_dokter`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_3` FOREIGN KEY (`id_poli`) REFERENCES `tb_poliklinik` (`id_poli`);

--
-- Constraints for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD CONSTRAINT `tb_rm_obat_ibfk_1` FOREIGN KEY (`id_rm`) REFERENCES `tb_rekammedis` (`id_rm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rm_obat_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `tb_obat` (`id_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
