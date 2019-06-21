-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2019 at 03:06 PM
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
-- Database: `db_halokes_ver1.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ekskul_absensi`
--

CREATE TABLE `tbl_ekskul_absensi` (
  `id_ekskul_absensi` int(11) NOT NULL,
  `id_ekskul` int(11) DEFAULT NULL,
  `id_ekskul_absensi_url` varchar(20) DEFAULT NULL,
  `eks_abs_topik` varchar(20) DEFAULT NULL,
  `eks_abs_tanggal` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ekskul_absensi_detail`
--

CREATE TABLE `tbl_ekskul_absensi_detail` (
  `id_ekskul_absensi_detail` int(11) NOT NULL,
  `id_ekskul_absensi_detail_url` varchar(20) DEFAULT NULL,
  `id_ekskul_absensi` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru_jadwal_piket`
--

CREATE TABLE `tbl_guru_jadwal_piket` (
  `id_jdw_guru_piket` int(11) NOT NULL,
  `id_tapel` int(11) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `id_jdw_guru_piket_url` varchar(20) DEFAULT NULL,
  `piket_hari` varchar(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru_rpp`
--

CREATE TABLE `tbl_guru_rpp` (
  `id_rpp` int(11) NOT NULL,
  `id_mapel_jadwal` int(11) DEFAULT NULL,
  `id_rpp_url` varchar(20) DEFAULT NULL,
  `kompetensi_dasar` longtext,
  `alokasi_waktu` longtext,
  `kompetensi_inti` longtext,
  `tujuan_pembelajaran` longtext,
  `materi_pembelajaran` longtext,
  `media_pembelajaran` longtext,
  `sumber_belajar` longtext,
  `langkah_pembelajaran` longtext,
  `penilaian_hasil_pembelajaran` longtext,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info_kalender`
--

CREATE TABLE `tbl_info_kalender` (
  `id_kalendar` int(11) NOT NULL,
  `id_kalendar_url` varchar(5) DEFAULT NULL,
  `kalender_nama` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kalender_detail`
--

CREATE TABLE `tbl_kalender_detail` (
  `id_kalendar_detail` int(11) NOT NULL,
  `id_kalendar_detail_url` varchar(20) DEFAULT NULL,
  `id_kalendar` int(11) NOT NULL,
  `id_tapel` int(11) NOT NULL,
  `kalendar_kegiatan` varchar(50) DEFAULT NULL,
  `kalendar_tggl_awal` date DEFAULT NULL,
  `kalendar_tggl_akhir` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_semester` int(11) DEFAULT NULL,
  `id_kelas_url` varchar(20) DEFAULT NULL,
  `kelas_tingkat` int(11) DEFAULT NULL,
  `kelas_abjad` char(2) DEFAULT NULL,
  `kelas_ruang` varchar(10) DEFAULT NULL,
  `kelas_jumlah_nilai` int(11) DEFAULT NULL,
  `kelas_rata_rata_nilai` decimal(10,0) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas_detail`
--

CREATE TABLE `tbl_kelas_detail` (
  `id_kelas_detail` int(11) NOT NULL,
  `id_kelas_detail_url` varchar(20) DEFAULT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas_tugas`
--

CREATE TABLE `tbl_kelas_tugas` (
  `id_kelas_tugas` int(11) NOT NULL,
  `id_mapel_jadwal` int(11) DEFAULT NULL,
  `id_kelas_tugas_url` varchar(20) DEFAULT NULL,
  `tugas_judul` varchar(50) DEFAULT NULL,
  `tugas_deskripsi` longtext,
  `tugas_created` datetime DEFAULT NULL,
  `tugas_deadline` datetime DEFAULT NULL,
  `tugas_lampiran` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel_grup`
--

CREATE TABLE `tbl_mapel_grup` (
  `id_mapel_grup` int(11) NOT NULL,
  `id_mapel_grup_url` varchar(5) DEFAULT NULL,
  `mapel_grup_nama` varchar(20) DEFAULT NULL,
  `mapel_grup_deskripsi` longtext,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel_jadwal`
--

CREATE TABLE `tbl_mapel_jadwal` (
  `id_mapel_jadwal` int(11) NOT NULL,
  `id_mapel_jadwal_url` varchar(20) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `id_kelas` int(11) NOT NULL,
  `jadwal_hari` varchar(10) DEFAULT NULL,
  `jadwal_jampel` varchar(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel_kurikulum`
--

CREATE TABLE `tbl_mapel_kurikulum` (
  `id_mapel_kurikulum` int(11) NOT NULL,
  `id_mapel_kurikulum_url` varchar(5) DEFAULT NULL,
  `kurikulum_nama` varchar(20) DEFAULT NULL,
  `kurikulum_deskripsi` longtext,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_ekskul`
--

CREATE TABLE `tbl_master_ekskul` (
  `id_ekskul` int(11) NOT NULL,
  `id_ekskul_url` varchar(10) DEFAULT NULL,
  `ekskul_nama` varchar(20) DEFAULT NULL,
  `ekskul_deskripsi` longtext,
  `ekskul_jadwal` varchar(30) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_guru`
--

CREATE TABLE `tbl_master_guru` (
  `id_guru` int(11) NOT NULL,
  `id_guru_url` varchar(10) DEFAULT NULL,
  `guru_nama` varchar(50) DEFAULT NULL,
  `guru_nip` varchar(15) DEFAULT NULL,
  `guru_nign` varchar(30) DEFAULT NULL,
  `guru_gelar_depan` varchar(20) DEFAULT NULL,
  `guru_gelar_belakang` varchar(20) DEFAULT NULL,
  `guru_tgl_lahir` date DEFAULT NULL,
  `guru_tempat_lahir` varchar(30) DEFAULT NULL,
  `guru_jkel` char(2) DEFAULT NULL,
  `guru_no_hp` varchar(20) DEFAULT NULL,
  `guru_email` varchar(100) DEFAULT NULL,
  `guru_agama` varchar(10) DEFAULT NULL,
  `guru_username` varchar(20) DEFAULT NULL,
  `guru_password` varchar(150) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_master_guru`
--

INSERT INTO `tbl_master_guru` (`id_guru`, `id_guru_url`, `guru_nama`, `guru_nip`, `guru_nign`, `guru_gelar_depan`, `guru_gelar_belakang`, `guru_tgl_lahir`, `guru_tempat_lahir`, `guru_jkel`, `guru_no_hp`, `guru_email`, `guru_agama`, `guru_username`, `guru_password`, `created_at`, `modified_at`, `status`) VALUES
(1, 'bgA9Hx7Hsl', 'AHMAD MUCHLISIN', '110038', NULL, 'Ir.', 'S.Kom., M.MT', '1970-10-01', 'Pasuruan', 'L', '085230230202', 'muchlisin@isku.com', 'Islam', 'muchlisin@isku.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2019-06-15 19:50:41', NULL, 1),
(2, 'cEO6lNf3W0', 'ENDRO SUHARDI', '110037', NULL, NULL, 'S.Pd., M.Pd.', '1978-10-10', 'Malang', 'L', '089650691537', 'endros@isku.com', 'Islam', 'endros@isku.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2019-06-15 19:53:31', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_mapel`
--

CREATE TABLE `tbl_master_mapel` (
  `id_mapel` int(11) NOT NULL,
  `id_mapel_url` varchar(20) DEFAULT NULL,
  `id_mapel_grup` int(11) DEFAULT NULL,
  `id_mapel_kurikulum` int(11) DEFAULT NULL,
  `mapel_nama` varchar(30) DEFAULT NULL,
  `mapel_kkm` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_sanksi`
--

CREATE TABLE `tbl_master_sanksi` (
  `id_sanksi` int(11) NOT NULL,
  `id_sanksi_url` varchar(20) DEFAULT NULL,
  `sanksi_nama` varchar(50) DEFAULT NULL,
  `sanksi_jenis` int(11) DEFAULT NULL,
  `sanksi_poin` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_siswa`
--

CREATE TABLE `tbl_master_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_siswa_ortu` int(11) DEFAULT NULL,
  `id_tapel` int(11) DEFAULT NULL,
  `id_siswa_url` varchar(20) DEFAULT NULL,
  `siswa_nama` varchar(50) DEFAULT NULL,
  `siswa_nisn` varchar(30) DEFAULT NULL,
  `siswa_nis` varchar(30) DEFAULT NULL,
  `siswa_tgl_lahir` date DEFAULT NULL,
  `siswa_tempat_lahir` varchar(30) DEFAULT NULL,
  `siswa_jkel` char(2) DEFAULT NULL,
  `siswa_alamat` longtext,
  `siswa_no_hp` varchar(20) DEFAULT NULL,
  `siswa_email` varchar(100) DEFAULT NULL,
  `siswa_agama` varchar(10) DEFAULT NULL,
  `siswa_username` varchar(20) DEFAULT NULL,
  `siswa_password` varchar(100) DEFAULT NULL,
  `siswa_status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_kelas`
--

CREATE TABLE `tbl_nilai_kelas` (
  `id_nilai_kelas` int(11) NOT NULL,
  `id_mapel_jadwal` int(11) DEFAULT NULL,
  `id_nilai_topik` int(11) DEFAULT NULL,
  `id_nilai_kelas_url` varchar(20) DEFAULT NULL,
  `nilai_keterangan` varchar(100) DEFAULT NULL,
  `nilai_status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_siswa`
--

CREATE TABLE `tbl_nilai_siswa` (
  `id_nilai_siswa` int(11) NOT NULL,
  `id_nilai_siswa_url` varchar(20) DEFAULT NULL,
  `id_nilai_kelas` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_topik`
--

CREATE TABLE `tbl_nilai_topik` (
  `id_nilai_topik` int(11) NOT NULL,
  `id_nilai_topik_url` varchar(20) DEFAULT NULL,
  `nilai_topik` varchar(10) DEFAULT NULL,
  `persentase` decimal(10,0) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa_absensi`
--

CREATE TABLE `tbl_siswa_absensi` (
  `id_siswa_absensi` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_mapel_jadwal` int(11) DEFAULT NULL,
  `id_siswa_absensi_url` varchar(20) DEFAULT NULL,
  `absensi_ket` varchar(20) DEFAULT NULL,
  `absensi_alasan` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa_baru`
--

CREATE TABLE `tbl_siswa_baru` (
  `id_siswa_baru` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_siswa_baru_url` varchar(20) DEFAULT NULL,
  `sb_asal_sekolah` varchar(50) DEFAULT NULL,
  `sb_un_indo` int(11) DEFAULT NULL,
  `sb_un_mat` int(11) DEFAULT NULL,
  `sb_un_ing` int(11) DEFAULT NULL,
  `sb_ijazah` varchar(10) DEFAULT NULL,
  `sb_skhun` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa_mutasi`
--

CREATE TABLE `tbl_siswa_mutasi` (
  `id_siswa_mutasi` int(11) NOT NULL,
  `id_tapel` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_siswa_mutasi_url` varchar(10) DEFAULT NULL,
  `mutasi_tanggal` date DEFAULT NULL,
  `mutasi_alasan` varchar(20) DEFAULT NULL,
  `mutasi_keterangan` longtext,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa_ortu`
--

CREATE TABLE `tbl_siswa_ortu` (
  `id_siswa_ortu` int(11) NOT NULL,
  `id_siswa_ortu_url` varchar(20) DEFAULT NULL,
  `id_siswa` int(11) NOT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `no_hp_ayah` varchar(20) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `no_hp_ibu` varchar(20) DEFAULT NULL,
  `nama_wali` varchar(50) DEFAULT NULL,
  `no_hp_wali` varchar(20) DEFAULT NULL,
  `ortu_username` varchar(20) DEFAULT NULL,
  `ortu_password` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa_prestasi`
--

CREATE TABLE `tbl_siswa_prestasi` (
  `id_siswa_prestasi` int(11) NOT NULL,
  `id_siswa_prestasi_url` varchar(10) DEFAULT NULL,
  `prestasi_nama` varchar(100) DEFAULT NULL,
  `prestasi_lokasi` varchar(30) DEFAULT NULL,
  `prestasi_penyelenggara` varchar(30) DEFAULT NULL,
  `prestasi_tingkat` varchar(20) DEFAULT NULL,
  `prestasi_tggl_awal` date DEFAULT NULL,
  `prestasi_tggl_akhir` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa_prestasi_detail`
--

CREATE TABLE `tbl_siswa_prestasi_detail` (
  `id_siswa_prestasi_detail` int(11) NOT NULL,
  `id_siswa_prestasi_detail_url` varchar(20) DEFAULT NULL,
  `id_siswa_prestasi` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `prestasi_juara` varchar(20) DEFAULT NULL,
  `prestasi_lampiran` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa_sanksi`
--

CREATE TABLE `tbl_siswa_sanksi` (
  `id_siswa_sanksi` int(11) NOT NULL,
  `id_siswa_sanksi_url` varchar(10) DEFAULT NULL,
  `id_sanksi` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sys_semester`
--

CREATE TABLE `tbl_sys_semester` (
  `id_semester` int(11) NOT NULL,
  `id_tapel` int(11) DEFAULT NULL,
  `id_semester_url` varchar(20) DEFAULT NULL,
  `semester_nama` varchar(20) DEFAULT NULL,
  `semester_aktif` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sys_tapel`
--

CREATE TABLE `tbl_sys_tapel` (
  `id_tapel` int(11) NOT NULL,
  `id_tapel_url` varchar(10) DEFAULT NULL,
  `tapel_nama` varchar(10) DEFAULT NULL,
  `tapel_tahun` varchar(10) DEFAULT NULL,
  `tapel_aktif` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ujian_jadwal`
--

CREATE TABLE `tbl_ujian_jadwal` (
  `id_ujian_jadwal` int(11) NOT NULL,
  `id_ujian_jadwal_url` varchar(20) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `ujian_jadwal_hari` varchar(10) DEFAULT NULL,
  `ujian_jadwal_jam_awal` time DEFAULT NULL,
  `ujian_jadwal_jam_akhir` time DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ekskul_absensi`
--
ALTER TABLE `tbl_ekskul_absensi`
  ADD PRIMARY KEY (`id_ekskul_absensi`),
  ADD KEY `fk_ekskul_ke_absensi` (`id_ekskul`);

--
-- Indexes for table `tbl_ekskul_absensi_detail`
--
ALTER TABLE `tbl_ekskul_absensi_detail`
  ADD PRIMARY KEY (`id_ekskul_absensi_detail`),
  ADD KEY `fk_tbl_ekskul_absensi_detail` (`id_siswa`),
  ADD KEY `fk_tbl_ekskul_absensi_detail2` (`id_ekskul_absensi`);

--
-- Indexes for table `tbl_guru_jadwal_piket`
--
ALTER TABLE `tbl_guru_jadwal_piket`
  ADD PRIMARY KEY (`id_jdw_guru_piket`),
  ADD KEY `fk_guru_jadwal_piket` (`id_guru`),
  ADD KEY `fk_tapel_jadwal` (`id_tapel`);

--
-- Indexes for table `tbl_guru_rpp`
--
ALTER TABLE `tbl_guru_rpp`
  ADD PRIMARY KEY (`id_rpp`),
  ADD KEY `fk_mapel_ke_rpp` (`id_mapel_jadwal`);

--
-- Indexes for table `tbl_info_kalender`
--
ALTER TABLE `tbl_info_kalender`
  ADD PRIMARY KEY (`id_kalendar`);

--
-- Indexes for table `tbl_kalender_detail`
--
ALTER TABLE `tbl_kalender_detail`
  ADD PRIMARY KEY (`id_kalendar_detail`),
  ADD KEY `fk_tbl_kalender_detail` (`id_kalendar`),
  ADD KEY `fk_tbl_kalender_detail2` (`id_tapel`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `fk_semester_ke_kelas` (`id_semester`),
  ADD KEY `fk_wali_kelas` (`id_guru`);

--
-- Indexes for table `tbl_kelas_detail`
--
ALTER TABLE `tbl_kelas_detail`
  ADD PRIMARY KEY (`id_kelas_detail`),
  ADD KEY `fk_tbl_kelas_detail` (`id_kelas`),
  ADD KEY `fk_tbl_kelas_detail2` (`id_siswa`);

--
-- Indexes for table `tbl_kelas_tugas`
--
ALTER TABLE `tbl_kelas_tugas`
  ADD PRIMARY KEY (`id_kelas_tugas`),
  ADD KEY `fk_jadwal_ke_tugas` (`id_mapel_jadwal`);

--
-- Indexes for table `tbl_mapel_grup`
--
ALTER TABLE `tbl_mapel_grup`
  ADD PRIMARY KEY (`id_mapel_grup`);

--
-- Indexes for table `tbl_mapel_jadwal`
--
ALTER TABLE `tbl_mapel_jadwal`
  ADD PRIMARY KEY (`id_mapel_jadwal`),
  ADD KEY `fk_guru_ke_jadwal` (`id_guru`),
  ADD KEY `fk_kelas_ke_jadwal` (`id_kelas`),
  ADD KEY `fk_mapel_ke_jadwal` (`id_mapel`);

--
-- Indexes for table `tbl_mapel_kurikulum`
--
ALTER TABLE `tbl_mapel_kurikulum`
  ADD PRIMARY KEY (`id_mapel_kurikulum`);

--
-- Indexes for table `tbl_master_ekskul`
--
ALTER TABLE `tbl_master_ekskul`
  ADD PRIMARY KEY (`id_ekskul`);

--
-- Indexes for table `tbl_master_guru`
--
ALTER TABLE `tbl_master_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_master_mapel`
--
ALTER TABLE `tbl_master_mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `fk_grup_ke_mapel` (`id_mapel_grup`),
  ADD KEY `fk_kurikulum_ke_mapel` (`id_mapel_kurikulum`);

--
-- Indexes for table `tbl_master_sanksi`
--
ALTER TABLE `tbl_master_sanksi`
  ADD PRIMARY KEY (`id_sanksi`);

--
-- Indexes for table `tbl_master_siswa`
--
ALTER TABLE `tbl_master_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `fk_siswa_ortu` (`id_siswa_ortu`),
  ADD KEY `fk_tapel_ke_siswa` (`id_tapel`);

--
-- Indexes for table `tbl_nilai_kelas`
--
ALTER TABLE `tbl_nilai_kelas`
  ADD PRIMARY KEY (`id_nilai_kelas`),
  ADD KEY `fk_jadwal_ke_nilai` (`id_mapel_jadwal`),
  ADD KEY `fk_topik_ke_kelas` (`id_nilai_topik`);

--
-- Indexes for table `tbl_nilai_siswa`
--
ALTER TABLE `tbl_nilai_siswa`
  ADD PRIMARY KEY (`id_nilai_siswa`),
  ADD KEY `fk_tbl_nilai_siswa` (`id_nilai_kelas`),
  ADD KEY `fk_tbl_nilai_siswa2` (`id_siswa`);

--
-- Indexes for table `tbl_nilai_topik`
--
ALTER TABLE `tbl_nilai_topik`
  ADD PRIMARY KEY (`id_nilai_topik`);

--
-- Indexes for table `tbl_siswa_absensi`
--
ALTER TABLE `tbl_siswa_absensi`
  ADD PRIMARY KEY (`id_siswa_absensi`),
  ADD KEY `fk_jadwal_ke_absen` (`id_mapel_jadwal`),
  ADD KEY `fk_siswa_ke_absen` (`id_siswa`);

--
-- Indexes for table `tbl_siswa_baru`
--
ALTER TABLE `tbl_siswa_baru`
  ADD PRIMARY KEY (`id_siswa_baru`),
  ADD KEY `fk_siswa_ke_sb` (`id_siswa`);

--
-- Indexes for table `tbl_siswa_mutasi`
--
ALTER TABLE `tbl_siswa_mutasi`
  ADD PRIMARY KEY (`id_siswa_mutasi`),
  ADD KEY `fk_siswa_ke_mutasi` (`id_siswa`),
  ADD KEY `fk_tapel_ke_mutasi` (`id_tapel`);

--
-- Indexes for table `tbl_siswa_ortu`
--
ALTER TABLE `tbl_siswa_ortu`
  ADD PRIMARY KEY (`id_siswa_ortu`),
  ADD KEY `fk_siswa_ortu2` (`id_siswa`);

--
-- Indexes for table `tbl_siswa_prestasi`
--
ALTER TABLE `tbl_siswa_prestasi`
  ADD PRIMARY KEY (`id_siswa_prestasi`);

--
-- Indexes for table `tbl_siswa_prestasi_detail`
--
ALTER TABLE `tbl_siswa_prestasi_detail`
  ADD PRIMARY KEY (`id_siswa_prestasi_detail`),
  ADD KEY `fk_tbl_siswa_prestasi_detail` (`id_siswa_prestasi`),
  ADD KEY `fk_tbl_siswa_prestasi_detail2` (`id_siswa`);

--
-- Indexes for table `tbl_siswa_sanksi`
--
ALTER TABLE `tbl_siswa_sanksi`
  ADD PRIMARY KEY (`id_siswa_sanksi`),
  ADD KEY `fk_tbl_siswa_sanksi` (`id_sanksi`),
  ADD KEY `fk_tbl_siswa_sanksi2` (`id_siswa`);

--
-- Indexes for table `tbl_sys_semester`
--
ALTER TABLE `tbl_sys_semester`
  ADD PRIMARY KEY (`id_semester`),
  ADD KEY `fk_tapel_ke_semester` (`id_tapel`);

--
-- Indexes for table `tbl_sys_tapel`
--
ALTER TABLE `tbl_sys_tapel`
  ADD PRIMARY KEY (`id_tapel`);

--
-- Indexes for table `tbl_ujian_jadwal`
--
ALTER TABLE `tbl_ujian_jadwal`
  ADD PRIMARY KEY (`id_ujian_jadwal`),
  ADD KEY `fk_kelas_ke_jadwal_ujian` (`id_kelas`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_ekskul_absensi`
--
ALTER TABLE `tbl_ekskul_absensi`
  ADD CONSTRAINT `fk_ekskul_ke_absensi` FOREIGN KEY (`id_ekskul`) REFERENCES `tbl_master_ekskul` (`id_ekskul`);

--
-- Constraints for table `tbl_ekskul_absensi_detail`
--
ALTER TABLE `tbl_ekskul_absensi_detail`
  ADD CONSTRAINT `fk_tbl_ekskul_absensi_detail` FOREIGN KEY (`id_siswa`) REFERENCES `tbl_master_siswa` (`id_siswa`),
  ADD CONSTRAINT `fk_tbl_ekskul_absensi_detail2` FOREIGN KEY (`id_ekskul_absensi`) REFERENCES `tbl_ekskul_absensi` (`id_ekskul_absensi`);

--
-- Constraints for table `tbl_guru_jadwal_piket`
--
ALTER TABLE `tbl_guru_jadwal_piket`
  ADD CONSTRAINT `fk_guru_jadwal_piket` FOREIGN KEY (`id_guru`) REFERENCES `tbl_master_guru` (`id_guru`),
  ADD CONSTRAINT `fk_tapel_jadwal` FOREIGN KEY (`id_tapel`) REFERENCES `tbl_sys_tapel` (`id_tapel`);

--
-- Constraints for table `tbl_guru_rpp`
--
ALTER TABLE `tbl_guru_rpp`
  ADD CONSTRAINT `fk_mapel_ke_rpp` FOREIGN KEY (`id_mapel_jadwal`) REFERENCES `tbl_mapel_jadwal` (`id_mapel_jadwal`);

--
-- Constraints for table `tbl_kalender_detail`
--
ALTER TABLE `tbl_kalender_detail`
  ADD CONSTRAINT `fk_tbl_kalender_detail` FOREIGN KEY (`id_kalendar`) REFERENCES `tbl_info_kalender` (`id_kalendar`),
  ADD CONSTRAINT `fk_tbl_kalender_detail2` FOREIGN KEY (`id_tapel`) REFERENCES `tbl_sys_tapel` (`id_tapel`);

--
-- Constraints for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD CONSTRAINT `fk_semester_ke_kelas` FOREIGN KEY (`id_semester`) REFERENCES `tbl_sys_semester` (`id_semester`),
  ADD CONSTRAINT `fk_wali_kelas` FOREIGN KEY (`id_guru`) REFERENCES `tbl_master_guru` (`id_guru`);

--
-- Constraints for table `tbl_kelas_detail`
--
ALTER TABLE `tbl_kelas_detail`
  ADD CONSTRAINT `fk_tbl_kelas_detail` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id_kelas`),
  ADD CONSTRAINT `fk_tbl_kelas_detail2` FOREIGN KEY (`id_siswa`) REFERENCES `tbl_master_siswa` (`id_siswa`);

--
-- Constraints for table `tbl_kelas_tugas`
--
ALTER TABLE `tbl_kelas_tugas`
  ADD CONSTRAINT `fk_jadwal_ke_tugas` FOREIGN KEY (`id_mapel_jadwal`) REFERENCES `tbl_mapel_jadwal` (`id_mapel_jadwal`);

--
-- Constraints for table `tbl_mapel_jadwal`
--
ALTER TABLE `tbl_mapel_jadwal`
  ADD CONSTRAINT `fk_guru_ke_jadwal` FOREIGN KEY (`id_guru`) REFERENCES `tbl_master_guru` (`id_guru`),
  ADD CONSTRAINT `fk_kelas_ke_jadwal` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id_kelas`),
  ADD CONSTRAINT `fk_mapel_ke_jadwal` FOREIGN KEY (`id_mapel`) REFERENCES `tbl_master_mapel` (`id_mapel`);

--
-- Constraints for table `tbl_master_mapel`
--
ALTER TABLE `tbl_master_mapel`
  ADD CONSTRAINT `fk_grup_ke_mapel` FOREIGN KEY (`id_mapel_grup`) REFERENCES `tbl_mapel_grup` (`id_mapel_grup`),
  ADD CONSTRAINT `fk_kurikulum_ke_mapel` FOREIGN KEY (`id_mapel_kurikulum`) REFERENCES `tbl_mapel_kurikulum` (`id_mapel_kurikulum`);

--
-- Constraints for table `tbl_master_siswa`
--
ALTER TABLE `tbl_master_siswa`
  ADD CONSTRAINT `fk_siswa_ortu` FOREIGN KEY (`id_siswa_ortu`) REFERENCES `tbl_siswa_ortu` (`id_siswa_ortu`),
  ADD CONSTRAINT `fk_tapel_ke_siswa` FOREIGN KEY (`id_tapel`) REFERENCES `tbl_sys_tapel` (`id_tapel`);

--
-- Constraints for table `tbl_nilai_kelas`
--
ALTER TABLE `tbl_nilai_kelas`
  ADD CONSTRAINT `fk_jadwal_ke_nilai` FOREIGN KEY (`id_mapel_jadwal`) REFERENCES `tbl_mapel_jadwal` (`id_mapel_jadwal`),
  ADD CONSTRAINT `fk_topik_ke_kelas` FOREIGN KEY (`id_nilai_topik`) REFERENCES `tbl_nilai_topik` (`id_nilai_topik`);

--
-- Constraints for table `tbl_nilai_siswa`
--
ALTER TABLE `tbl_nilai_siswa`
  ADD CONSTRAINT `fk_tbl_nilai_siswa` FOREIGN KEY (`id_nilai_kelas`) REFERENCES `tbl_nilai_kelas` (`id_nilai_kelas`),
  ADD CONSTRAINT `fk_tbl_nilai_siswa2` FOREIGN KEY (`id_siswa`) REFERENCES `tbl_master_siswa` (`id_siswa`);

--
-- Constraints for table `tbl_siswa_absensi`
--
ALTER TABLE `tbl_siswa_absensi`
  ADD CONSTRAINT `fk_jadwal_ke_absen` FOREIGN KEY (`id_mapel_jadwal`) REFERENCES `tbl_mapel_jadwal` (`id_mapel_jadwal`),
  ADD CONSTRAINT `fk_siswa_ke_absen` FOREIGN KEY (`id_siswa`) REFERENCES `tbl_master_siswa` (`id_siswa`);

--
-- Constraints for table `tbl_siswa_baru`
--
ALTER TABLE `tbl_siswa_baru`
  ADD CONSTRAINT `fk_siswa_ke_sb` FOREIGN KEY (`id_siswa`) REFERENCES `tbl_master_siswa` (`id_siswa`);

--
-- Constraints for table `tbl_siswa_mutasi`
--
ALTER TABLE `tbl_siswa_mutasi`
  ADD CONSTRAINT `fk_siswa_ke_mutasi` FOREIGN KEY (`id_siswa`) REFERENCES `tbl_master_siswa` (`id_siswa`),
  ADD CONSTRAINT `fk_tapel_ke_mutasi` FOREIGN KEY (`id_tapel`) REFERENCES `tbl_sys_tapel` (`id_tapel`);

--
-- Constraints for table `tbl_siswa_ortu`
--
ALTER TABLE `tbl_siswa_ortu`
  ADD CONSTRAINT `fk_siswa_ortu2` FOREIGN KEY (`id_siswa`) REFERENCES `tbl_master_siswa` (`id_siswa`);

--
-- Constraints for table `tbl_siswa_prestasi_detail`
--
ALTER TABLE `tbl_siswa_prestasi_detail`
  ADD CONSTRAINT `fk_tbl_siswa_prestasi_detail` FOREIGN KEY (`id_siswa_prestasi`) REFERENCES `tbl_siswa_prestasi` (`id_siswa_prestasi`),
  ADD CONSTRAINT `fk_tbl_siswa_prestasi_detail2` FOREIGN KEY (`id_siswa`) REFERENCES `tbl_master_siswa` (`id_siswa`);

--
-- Constraints for table `tbl_siswa_sanksi`
--
ALTER TABLE `tbl_siswa_sanksi`
  ADD CONSTRAINT `fk_tbl_siswa_sanksi` FOREIGN KEY (`id_sanksi`) REFERENCES `tbl_master_sanksi` (`id_sanksi`),
  ADD CONSTRAINT `fk_tbl_siswa_sanksi2` FOREIGN KEY (`id_siswa`) REFERENCES `tbl_master_siswa` (`id_siswa`);

--
-- Constraints for table `tbl_sys_semester`
--
ALTER TABLE `tbl_sys_semester`
  ADD CONSTRAINT `fk_tapel_ke_semester` FOREIGN KEY (`id_tapel`) REFERENCES `tbl_sys_tapel` (`id_tapel`);

--
-- Constraints for table `tbl_ujian_jadwal`
--
ALTER TABLE `tbl_ujian_jadwal`
  ADD CONSTRAINT `fk_kelas_ke_jadwal_ujian` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
