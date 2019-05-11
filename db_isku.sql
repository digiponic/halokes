-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 02:49 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_isku`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` int(10) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `gelar_depan` varchar(30) DEFAULT NULL,
  `gelar_belakang` varchar(30) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `alamat` longtext NOT NULL,
  `jkel` char(1) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `golongan` varchar(10) DEFAULT NULL,
  `status_guru` int(1) NOT NULL,
  `status_guru_tugas` int(1) NOT NULL,
  `status_user` int(1) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `gelar_depan`, `gelar_belakang`, `tgl_lahir`, `tempat_lahir`, `alamat`, `jkel`, `no_hp`, `email`, `agama`, `golongan`, `status_guru`, `status_guru_tugas`, `status_user`, `password`, `created_at`) VALUES
(110036, 'SUGENG HARIYANTO', NULL, 'S.Kom., M.Kom.', '1990-11-27', 'Malang', 'Dusun Nampes No 178 Rt 02 Rw 02 Singosari Malang Jawa Timur', 'L', '085606702958', 'sugeng@isku.com', 'Islam', 'III-A', 1, 1, 2, '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2018-11-01 19:18:58'),
(110037, 'ENDRO SUHARDI', NULL, 'S.Pd., M.Pd.', '1978-10-10', 'Malang', 'RT 51 RW 13 Karangploso Malang Jawa Timur ', 'L', '089650691537', 'endros@isku.com', 'Islam', 'III-B', 1, 2, 1, '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2018-10-07 14:12:52'),
(110038, 'AHMAD MUCHLISIN', 'Ir.', 'S.Kom., M.MT', '1970-10-01', 'Pasuruan', 'Jl. Tumapel No 59 Rt 01 Rw 06 Singosari Malang Jawa Timur', 'L', '085230230202', 'muchlisin@isku.com', 'Islam', 'IV-B', 1, 0, 2, '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2018-10-27 21:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_guru_piket`
--

CREATE TABLE `jadwal_guru_piket` (
  `id_jdgrpiket` int(11) NOT NULL,
  `nip` int(10) NOT NULL,
  `hari` enum('senin','selasa','rabu','kamis','jumat','sabtu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_guru_piket`
--

INSERT INTO `jadwal_guru_piket` (`id_jdgrpiket`, `nip`, `hari`) VALUES
(2, 110036, 'senin');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(30) DEFAULT NULL,
  `tingkat` int(2) DEFAULT NULL,
  `abjad` char(1) DEFAULT NULL,
  `ruang` varchar(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `tingkat`, `abjad`, `ruang`, `created_at`) VALUES
('KL001', 'VII A', 7, 'A', 'R 100', '2018-11-12 06:13:36'),
('KL002', 'VII B', 7, 'B', 'R 101', '2018-11-12 06:14:26'),
('KL003', 'VII C', 7, 'C', 'R 102', '2018-11-12 06:14:35'),
('KL004', 'VIII A', 8, 'A', 'R 201', '2018-11-12 06:14:42'),
('KL005', 'VIII B', 8, 'B', 'R 202', '2018-11-12 06:14:51'),
('KL006', 'IX A', 9, 'A', 'R 211', '2018-11-12 06:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `lomba`
--

CREATE TABLE `lomba` (
  `id_lomba` varchar(10) NOT NULL,
  `judul_lomba` varchar(50) NOT NULL,
  `deskripsi` longtext,
  `tingkat` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `poster` varchar(100) DEFAULT NULL,
  `lampiran` varchar(100) DEFAULT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mapel` varchar(10) NOT NULL,
  `nama_mapel` varchar(30) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mapel`, `nama_mapel`, `created_at`) VALUES
('MP001', 'Bahasa Inggris', '2018-10-07 14:25:36'),
('MP002', 'Bahasa Indonesia', '2018-10-07 14:24:25'),
('MP003', 'Matematika', '2018-11-17 22:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `orang_tua`
--

CREATE TABLE `orang_tua` (
  `id_orangtua` varchar(10) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status_user` int(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orang_tua`
--

INSERT INTO `orang_tua` (`id_orangtua`, `nisn`, `username`, `password`, `status_user`, `created_at`) VALUES
('ort_a39x23', '362878329893280', 'a39x23', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 4, '2018-10-07 14:12:52');

-- --------------------------------------------------------

--
-- Table structure for table `partisipan_lomba`
--

CREATE TABLE `partisipan_lomba` (
  `id_partlomba` varchar(10) NOT NULL,
  `id_lomba` varchar(10) DEFAULT NULL,
  `nisn` varchar(30) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `peringkat` int(2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_detail_kelas`
--

CREATE TABLE `riwayat_detail_kelas` (
  `id_riwayat_kelas` varchar(10) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_kelas`
--

CREATE TABLE `riwayat_kelas` (
  `id_riwayat_kelas` varchar(10) NOT NULL,
  `id_kelas` varchar(10) DEFAULT NULL,
  `id_tapel` varchar(10) NOT NULL,
  `wali_kelas` int(10) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_sanksi`
--

CREATE TABLE `riwayat_sanksi` (
  `id_riwayat_sanksi` varchar(10) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `id_sanksi` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sanksi`
--

CREATE TABLE `sanksi` (
  `id_sanksi` varchar(10) NOT NULL,
  `nama_sanksi` longtext NOT NULL,
  `jenis_sanksi` varchar(20) NOT NULL,
  `poin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siadmin`
--

CREATE TABLE `siadmin` (
  `id_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status_user` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(30) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `alamat` longtext NOT NULL,
  `jkel` char(1) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `agama` varchar(25) NOT NULL,
  `tahun_masuk` int(11) NOT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `no_hp_ayah` varchar(20) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `no_hp_ibu` varchar(20) DEFAULT NULL,
  `nama_wali` varchar(50) DEFAULT NULL,
  `no_hp_wali` varchar(20) DEFAULT NULL,
  `status_siswa` int(1) NOT NULL,
  `status_user` int(1) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `alasan_mutasi` varchar(40) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama_siswa`, `tgl_lahir`, `tempat_lahir`, `alamat`, `jkel`, `no_hp`, `email`, `agama`, `tahun_masuk`, `nama_ayah`, `no_hp_ayah`, `nama_ibu`, `no_hp_ibu`, `nama_wali`, `no_hp_wali`, `status_siswa`, `status_user`, `password`, `alasan_mutasi`, `created_at`, `modified_at`) VALUES
('362878320893281', '123711892', 'RIKI AMANDA', '1998-07-05', 'Malang', 'Malang', 'P', '087099679410', 'rikiam@isku.com', 'Kristen Katholik', 2011, NULL, NULL, NULL, NULL, NULL, NULL, 2, 3, '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', NULL, '2018-10-20 07:47:03', NULL),
('362878329893280', '123712890', 'T RAJA HARUN FAHLEVI', '1998-10-02', 'Malang', 'Malang', 'L', '089650691537', 'harunpahlevi@isku.com', 'Islam', 2011, NULL, NULL, NULL, NULL, NULL, NULL, 2, 3, '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', NULL, '2018-10-07 14:12:52', NULL),
('362878329893281', '123712891', 'MUHAMMAD FAZLI', '1998-10-18', 'Bandung', 'Malang', 'L', '084966475001', 'fazli@isku.com', 'Islam', 2011, NULL, NULL, NULL, NULL, NULL, NULL, 3, 3, '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', NULL, '2018-10-20 07:42:36', NULL),
('362878329893282', '123712892', 'INTAN RAHMI', '1998-01-09', 'Malang', 'Malang', 'P', '083458247841', 'intanr@isku.com', 'Islam', 2011, NULL, NULL, NULL, NULL, NULL, NULL, 2, 3, '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', NULL, '2018-10-20 07:45:15', NULL),
('362878329893283', '123712893', 'YUSRA REZKI', '1998-11-10', 'Pasuruan', 'Malang', 'L', '082243989925', 'yusrareski@isku.com', 'Islam', 2011, NULL, NULL, NULL, NULL, NULL, NULL, 4, 3, '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Dikeluarkan', '2018-10-20 07:49:58', '2018-10-27 07:31:08'),
('362878329893284', '123712894', 'AMALIAS PARMANTO', '1998-07-19', 'Surabaya', 'Malang', 'L', '082073348042', 'amaliasp@isku.com', 'Kristen Katholik', 2011, NULL, NULL, NULL, NULL, NULL, NULL, 2, 3, '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', NULL, '2018-10-20 07:53:24', NULL),
('362878329893285', '123712895', 'RIZKI DWI ANUGERAH', '1998-11-08', 'Malang', 'Malang', 'L', '085325995963', 'rizkidwi@isku.com', 'Islam', 2013, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', NULL, '2018-10-20 07:55:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_pelajaran`
--

CREATE TABLE `tahun_pelajaran` (
  `id_tapel` varchar(10) NOT NULL,
  `nama_tapel` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_pelajaran`
--

INSERT INTO `tahun_pelajaran` (`id_tapel`, `nama_tapel`, `semester`, `status`, `created_at`) VALUES
('1617GNP', '2016/2017 GNP', 'genap', 0, '2018-11-11 00:00:00'),
('1617GSL', '2016/2017 GSL', 'ganjil', 0, '2018-11-11 00:00:00'),
('1718GNP', '2017/2018 GNP', 'genap', 0, '2018-11-11 00:00:00'),
('1718GSL', '2017/2018 GSL', 'ganjil', 0, '2018-11-11 00:00:00'),
('1819GSL', '2018/2019 GSL', 'ganjil', 1, '2018-11-11 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jadwal_guru_piket`
--
ALTER TABLE `jadwal_guru_piket`
  ADD PRIMARY KEY (`id_jdgrpiket`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `lomba`
--
ALTER TABLE `lomba`
  ADD PRIMARY KEY (`id_lomba`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`id_orangtua`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `partisipan_lomba`
--
ALTER TABLE `partisipan_lomba`
  ADD PRIMARY KEY (`id_partlomba`),
  ADD KEY `id_lomba` (`id_lomba`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `riwayat_detail_kelas`
--
ALTER TABLE `riwayat_detail_kelas`
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_riwayat_kelas` (`id_riwayat_kelas`);

--
-- Indexes for table `riwayat_kelas`
--
ALTER TABLE `riwayat_kelas`
  ADD PRIMARY KEY (`id_riwayat_kelas`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_tapel` (`id_tapel`),
  ADD KEY `wali_kelas` (`wali_kelas`);

--
-- Indexes for table `riwayat_sanksi`
--
ALTER TABLE `riwayat_sanksi`
  ADD PRIMARY KEY (`id_riwayat_sanksi`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_sanksi` (`id_sanksi`);

--
-- Indexes for table `sanksi`
--
ALTER TABLE `sanksi`
  ADD PRIMARY KEY (`id_sanksi`);

--
-- Indexes for table `siadmin`
--
ALTER TABLE `siadmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`) USING BTREE;

--
-- Indexes for table `tahun_pelajaran`
--
ALTER TABLE `tahun_pelajaran`
  ADD PRIMARY KEY (`id_tapel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_guru_piket`
--
ALTER TABLE `jadwal_guru_piket`
  MODIFY `id_jdgrpiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD CONSTRAINT `orang_tua_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`);

--
-- Constraints for table `partisipan_lomba`
--
ALTER TABLE `partisipan_lomba`
  ADD CONSTRAINT `partisipan_lomba_ibfk_1` FOREIGN KEY (`id_lomba`) REFERENCES `lomba` (`id_lomba`),
  ADD CONSTRAINT `partisipan_lomba_ibfk_2` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`);

--
-- Constraints for table `riwayat_detail_kelas`
--
ALTER TABLE `riwayat_detail_kelas`
  ADD CONSTRAINT `riwayat_detail_kelas_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`),
  ADD CONSTRAINT `riwayat_detail_kelas_ibfk_2` FOREIGN KEY (`id_riwayat_kelas`) REFERENCES `riwayat_kelas` (`id_riwayat_kelas`);

--
-- Constraints for table `riwayat_kelas`
--
ALTER TABLE `riwayat_kelas`
  ADD CONSTRAINT `riwayat_kelas_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `riwayat_kelas_ibfk_2` FOREIGN KEY (`id_tapel`) REFERENCES `tahun_pelajaran` (`id_tapel`);

--
-- Constraints for table `riwayat_sanksi`
--
ALTER TABLE `riwayat_sanksi`
  ADD CONSTRAINT `riwayat_sanksi_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`),
  ADD CONSTRAINT `riwayat_sanksi_ibfk_2` FOREIGN KEY (`id_sanksi`) REFERENCES `sanksi` (`id_sanksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
