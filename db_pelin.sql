-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2015 at 09:47 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pelin`
--

-- --------------------------------------------------------

--
-- Table structure for table `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Admin', '1121', NULL, 'N;'),
('Admin', '232', NULL, 'N;'),
('Admin', '233', NULL, 'N;'),
('Admin', '999', NULL, 'N:'),
('Dosen', '1', NULL, 'N;'),
('Dosen', '1005', NULL, 'N;'),
('Dosen', '1006', NULL, 'N;'),
('Dosen', '1007', NULL, 'N;'),
('Dosen', '1008', NULL, 'N;'),
('Dosen', '1103', NULL, 'N;'),
('Dosen', '1105', NULL, 'N;'),
('Dosen', '1106', NULL, 'N;'),
('Dosen', '1107', NULL, 'N;'),
('Dosen', '1108', NULL, 'N;'),
('Dosen', '1109', NULL, 'N;'),
('Dosen', '1110', NULL, 'N;'),
('Dosen', '1111', NULL, 'N;'),
('Dosen', '1112', NULL, 'N;'),
('Dosen', '1113', NULL, 'N;'),
('Dosen', '1114', NULL, 'N;'),
('Dosen', '1115', NULL, 'N;'),
('Dosen', '1116', NULL, 'N;'),
('Dosen', '1117', NULL, 'N;'),
('Dosen', '1118', NULL, 'N;'),
('Dosen', '1119', NULL, 'N;'),
('Dosen', '1124', NULL, 'N;'),
('Mahasiswa', '1000', NULL, 'N;'),
('Mahasiswa', '1001', NULL, 'N;'),
('Mahasiswa', '1002', NULL, 'N;'),
('Mahasiswa', '1003', NULL, 'N;'),
('Mahasiswa', '1004', NULL, 's:2:"N;";'),
('Mahasiswa', '1010', NULL, 's:2:"N;";'),
('Mahasiswa', '1011', NULL, 's:2:"N;";'),
('Mahasiswa', '1012', NULL, 's:2:"N;";'),
('Mahasiswa', '1016', NULL, 's:2:"N;";'),
('Mahasiswa', '1017', NULL, 's:2:"N;";'),
('Mahasiswa', '1018', NULL, 's:2:"N;";'),
('Mahasiswa', '1019', NULL, 's:2:"N;";'),
('Mahasiswa', '1020', NULL, 's:2:"N;";'),
('Mahasiswa', '1021', NULL, 's:2:"N;";'),
('Mahasiswa', '1022', NULL, 's:2:"N;";'),
('Mahasiswa', '1023', NULL, 's:2:"N;";'),
('Mahasiswa', '1024', NULL, 's:2:"N;";'),
('Mahasiswa', '1025', NULL, 's:2:"N;";'),
('Mahasiswa', '1026', NULL, 's:2:"N;";'),
('Mahasiswa', '1027', NULL, 's:2:"N;";'),
('Mahasiswa', '1028', NULL, 's:2:"N;";'),
('Mahasiswa', '1029', NULL, 's:2:"N;";'),
('Mahasiswa', '1030', NULL, 's:2:"N;";'),
('Mahasiswa', '1031', NULL, 's:2:"N;";'),
('Mahasiswa', '1032', NULL, 's:2:"N;";'),
('Mahasiswa', '1033', NULL, 's:2:"N;";'),
('Mahasiswa', '1034', NULL, 's:2:"N;";'),
('Mahasiswa', '1035', NULL, 's:2:"N;";'),
('Mahasiswa', '1036', NULL, 's:2:"N;";'),
('Mahasiswa', '1037', NULL, 's:2:"N;";'),
('Mahasiswa', '1038', NULL, 's:2:"N;";'),
('Mahasiswa', '1039', NULL, 's:2:"N;";'),
('Mahasiswa', '1040', NULL, 's:2:"N;";'),
('Mahasiswa', '1041', NULL, 's:2:"N;";'),
('Mahasiswa', '1042', NULL, 's:2:"N;";'),
('Mahasiswa', '1043', NULL, 's:2:"N;";'),
('Mahasiswa', '1044', NULL, 's:2:"N;";'),
('Mahasiswa', '1045', NULL, 's:2:"N;";'),
('Mahasiswa', '1046', NULL, 's:2:"N;";'),
('Mahasiswa', '1047', NULL, 's:2:"N;";'),
('Mahasiswa', '1048', NULL, 's:2:"N;";'),
('Mahasiswa', '1049', NULL, 's:2:"N;";'),
('Mahasiswa', '1050', NULL, 's:2:"N;";'),
('Mahasiswa', '1051', NULL, 's:2:"N;";'),
('Mahasiswa', '1052', NULL, 's:2:"N;";'),
('Mahasiswa', '1053', NULL, 's:2:"N;";'),
('Mahasiswa', '1054', NULL, 's:2:"N;";'),
('Mahasiswa', '1055', NULL, 's:2:"N;";'),
('Mahasiswa', '1056', NULL, 's:2:"N;";'),
('Mahasiswa', '1057', NULL, 's:2:"N;";'),
('Mahasiswa', '1058', NULL, 's:2:"N;";'),
('Mahasiswa', '1059', NULL, 's:2:"N;";'),
('Mahasiswa', '1060', NULL, 's:2:"N;";'),
('Mahasiswa', '1061', NULL, 's:2:"N;";'),
('Mahasiswa', '1062', NULL, 's:2:"N;";'),
('Mahasiswa', '1063', NULL, 's:2:"N;";'),
('Mahasiswa', '1064', NULL, 's:2:"N;";'),
('Mahasiswa', '1065', NULL, 's:2:"N;";'),
('Mahasiswa', '1066', NULL, 's:2:"N;";'),
('Mahasiswa', '1067', NULL, 's:2:"N;";'),
('Mahasiswa', '1068', NULL, 's:2:"N;";'),
('Mahasiswa', '1069', NULL, 's:2:"N;";'),
('Mahasiswa', '1070', NULL, 's:2:"N;";'),
('Mahasiswa', '1071', NULL, 's:2:"N;";'),
('Mahasiswa', '1072', NULL, 's:2:"N;";'),
('Mahasiswa', '1073', NULL, 's:2:"N;";'),
('Mahasiswa', '1074', NULL, 's:2:"N;";'),
('Mahasiswa', '1075', NULL, 's:2:"N;";'),
('Mahasiswa', '1076', NULL, 's:2:"N;";'),
('Mahasiswa', '1077', NULL, 's:2:"N;";'),
('Mahasiswa', '1078', NULL, 's:2:"N;";'),
('Mahasiswa', '1079', NULL, 's:2:"N;";'),
('Mahasiswa', '1080', NULL, 's:2:"N;";'),
('Mahasiswa', '1081', NULL, 's:2:"N;";'),
('Mahasiswa', '1082', NULL, 's:2:"N;";'),
('Mahasiswa', '1083', NULL, 's:2:"N;";'),
('Mahasiswa', '1084', NULL, 's:2:"N;";'),
('Mahasiswa', '1085', NULL, 's:2:"N;";'),
('Mahasiswa', '1086', NULL, 's:2:"N;";'),
('Mahasiswa', '1087', NULL, 's:2:"N;";'),
('Mahasiswa', '1088', NULL, 's:2:"N;";'),
('Mahasiswa', '1089', NULL, 's:2:"N;";'),
('Mahasiswa', '1090', NULL, 's:2:"N;";'),
('Mahasiswa', '1091', NULL, 's:2:"N;";'),
('Mahasiswa', '1092', NULL, 's:2:"N;";'),
('Mahasiswa', '1093', NULL, 's:2:"N;";'),
('Mahasiswa', '1094', NULL, 's:2:"N;";'),
('Mahasiswa', '1095', NULL, 's:2:"N;";'),
('Mahasiswa', '1096', NULL, 's:2:"N;";'),
('Mahasiswa', '1097', NULL, 's:2:"N;";'),
('Mahasiswa', '1098', NULL, 's:2:"N;";'),
('Mahasiswa', '1099', NULL, 's:2:"N;";'),
('Mahasiswa', '1100', NULL, 's:2:"N;";'),
('Mahasiswa', '1101', NULL, 's:2:"N;";'),
('Mahasiswa', '1102', NULL, 's:2:"N;";'),
('Mahasiswa', '1120', NULL, 's:2:"N;";'),
('Mahasiswa', '1122', NULL, 's:2:"N;";'),
('Mahasiswa', '1123', NULL, 's:2:"N;";');

-- --------------------------------------------------------

--
-- Table structure for table `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Admin', 2, NULL, NULL, 'N;'),
('Diskusi.*', 1, NULL, NULL, 'N;'),
('Diskusi.Admin', 0, NULL, NULL, 'N;'),
('Diskusi.Create', 0, NULL, NULL, 'N;'),
('Diskusi.Delete', 0, NULL, NULL, 'N;'),
('Diskusi.Index', 0, NULL, NULL, 'N;'),
('Diskusi.Update', 0, NULL, NULL, 'N;'),
('Diskusi.View', 0, NULL, NULL, 'N;'),
('Dosen', 2, 'Dosen yang Mengajar', NULL, 'N;'),
('Dosen.*', 1, NULL, NULL, 'N;'),
('Dosen.Admin', 0, NULL, NULL, 'N;'),
('Dosen.Create', 0, NULL, NULL, 'N;'),
('Dosen.Delete', 0, NULL, NULL, 'N;'),
('Dosen.Index', 0, NULL, NULL, 'N;'),
('Dosen.Update', 0, NULL, NULL, 'N;'),
('Dosen.View', 0, NULL, NULL, 'N;'),
('File.*', 1, NULL, NULL, 'N;'),
('File.Admin', 0, NULL, NULL, 'N;'),
('File.Create', 0, NULL, NULL, 'N;'),
('File.Delete', 0, NULL, NULL, 'N;'),
('File.Download', 0, NULL, NULL, 'N;'),
('File.Index', 0, NULL, NULL, 'N;'),
('File.Update', 0, NULL, NULL, 'N;'),
('File.View', 0, NULL, NULL, 'N;'),
('Group.*', 1, NULL, NULL, 'N;'),
('Group.Admin', 0, NULL, NULL, 'N;'),
('Group.Cek', 0, NULL, NULL, 'N;'),
('Group.Create', 0, NULL, NULL, 'N;'),
('Group.Delete', 0, NULL, NULL, 'N;'),
('Group.Index', 0, NULL, NULL, 'N;'),
('Group.Update', 0, NULL, NULL, 'N;'),
('Group.View', 0, NULL, NULL, 'N;'),
('Guest', 2, 'Front End', NULL, 'N;'),
('Mahasiswa', 2, 'Untuk Mahasiswa Yang Daftar', NULL, 'N;'),
('Mahasiswa.*', 1, NULL, NULL, 'N;'),
('Mahasiswa.Admin', 0, NULL, NULL, 'N;'),
('Mahasiswa.Create', 0, NULL, NULL, 'N;'),
('Mahasiswa.Delete', 0, NULL, NULL, 'N;'),
('Mahasiswa.Index', 0, NULL, NULL, 'N;'),
('Mahasiswa.Update', 0, NULL, NULL, 'N;'),
('Mahasiswa.View', 0, NULL, NULL, 'N;'),
('Materi.*', 1, NULL, NULL, 'N;'),
('Materi.Admin', 0, NULL, NULL, 'N;'),
('Materi.Create', 0, NULL, NULL, 'N;'),
('Materi.Delete', 0, NULL, NULL, 'N;'),
('Materi.Detail', 0, NULL, NULL, 'N;'),
('Materi.Index', 0, NULL, NULL, 'N;'),
('Materi.List', 0, NULL, NULL, 'N;'),
('Materi.Tugas', 0, NULL, NULL, 'N;'),
('Materi.Update', 0, NULL, NULL, 'N;'),
('Materi.View', 0, NULL, NULL, 'N;'),
('Pengumuman.*', 1, NULL, NULL, 'N;'),
('Pengumuman.Admin', 0, NULL, NULL, 'N;'),
('Pengumuman.Create', 0, NULL, NULL, 'N;'),
('Pengumuman.Delete', 0, NULL, NULL, 'N;'),
('Pengumuman.Index', 0, NULL, NULL, 'N;'),
('Pengumuman.Update', 0, NULL, NULL, 'N;'),
('Pengumuman.View', 0, NULL, NULL, 'N;'),
('Peserta.*', 1, NULL, NULL, 'N;'),
('Peserta.Admin', 0, NULL, NULL, 'N;'),
('Peserta.Aprove', 0, NULL, NULL, 'N;'),
('Peserta.Create', 0, NULL, NULL, 'N;'),
('Peserta.Delete', 0, NULL, NULL, 'N;'),
('Peserta.Index', 0, NULL, NULL, 'N;'),
('Peserta.Reject', 0, NULL, NULL, 'N;'),
('Peserta.Update', 0, NULL, NULL, 'N;'),
('Peserta.View', 0, NULL, NULL, 'N;'),
('Site.*', 1, NULL, NULL, 'N;'),
('Site.Active', 0, NULL, NULL, 'N;'),
('Site.Contact', 0, NULL, NULL, 'N;'),
('Site.Error', 0, NULL, NULL, 'N;'),
('Site.Index', 0, NULL, NULL, 'N;'),
('Site.Login', 0, NULL, NULL, 'N;'),
('Site.Logout', 0, NULL, NULL, 'N;'),
('Site.Read', 0, NULL, NULL, 'N;'),
('Site.Register', 0, NULL, NULL, 'N;'),
('Tugas.*', 1, NULL, NULL, 'N;'),
('Tugas.Admin', 0, NULL, NULL, 'N;'),
('Tugas.Create', 0, NULL, NULL, 'N;'),
('Tugas.Delete', 0, NULL, NULL, 'N;'),
('Tugas.Download', 0, NULL, NULL, 'N;'),
('Tugas.Index', 0, NULL, NULL, 'N;'),
('Tugas.Update', 0, NULL, NULL, 'N;'),
('Tugas.View', 0, NULL, NULL, 'N;'),
('User.*', 1, NULL, NULL, 'N;'),
('User.Active', 0, NULL, NULL, 'N;'),
('User.Changepass', 0, NULL, NULL, 'N;'),
('User.ChangeProfile', 0, NULL, NULL, 'N;'),
('User.Create', 0, NULL, NULL, 'N;'),
('User.Delete', 0, NULL, NULL, 'N;'),
('User.Index', 0, NULL, NULL, 'N;'),
('User.Registrasi', 0, NULL, NULL, 'N;'),
('User.Update', 0, NULL, NULL, 'N;'),
('User.View', 0, NULL, NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authitemchild`
--

INSERT INTO `authitemchild` (`parent`, `child`) VALUES
('Mahasiswa', 'Diskusi.Create'),
('Dosen', 'Diskusi.Delete'),
('Dosen', 'File.*'),
('Dosen', 'File.Download'),
('Mahasiswa', 'File.Download'),
('Dosen', 'Group.*'),
('Dosen', 'Materi.*'),
('Guest', 'Materi.Detail'),
('Guest', 'Materi.List'),
('Mahasiswa', 'Materi.Tugas'),
('Dosen', 'Peserta.Aprove'),
('Mahasiswa', 'Peserta.Create'),
('Dosen', 'Peserta.Reject'),
('Dosen', 'Tugas.*'),
('Dosen', 'Tugas.Delete'),
('Dosen', 'Tugas.Download'),
('Mahasiswa', 'Tugas.Download'),
('Dosen', 'User.Changepass'),
('Mahasiswa', 'User.Changepass');

-- --------------------------------------------------------

--
-- Table structure for table `rights`
--

CREATE TABLE IF NOT EXISTS `rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diskusi`
--

CREATE TABLE IF NOT EXISTS `tbl_diskusi` (
`id` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `tgl_post` datetime NOT NULL,
  `jenis` enum('G','M') NOT NULL DEFAULT 'G'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_diskusi`
--

INSERT INTO `tbl_diskusi` (`id`, `pesan`, `user_id`, `group_id`, `tgl_post`, `jenis`) VALUES
(2, 'Bagi mahasiswa yang belum merubah profie silahkan dirubah dulu :)', 232, 29, '2014-10-02 23:25:38', 'G'),
(3, 'dimana dowload materinya pak...????', 1051, 15, '2014-10-05 20:23:16', 'G'),
(4, 'Pilih Group, Pilih Materi muncul download file', 232, 15, '2014-10-05 20:45:55', 'G'),
(5, 'pak kenapa pas klik uplod file ,,, malah error', 1020, 29, '2014-10-07 19:27:16', 'G');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE IF NOT EXISTS `tbl_dosen` (
  `user_id` int(11) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kode_nama_jurusan` smallint(5) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`user_id`, `tgl_lahir`, `kode_nama_jurusan`) VALUES
(232, '2014-09-24', 3),
(1005, NULL, 3),
(1105, NULL, 1),
(1106, NULL, 3),
(1107, NULL, 3),
(1108, NULL, 1),
(1109, NULL, 3),
(1110, NULL, 2),
(1111, NULL, 1),
(1112, NULL, 1),
(1113, NULL, 1),
(1114, NULL, 1),
(1115, NULL, 1),
(1116, NULL, 1),
(1117, NULL, 1),
(1118, NULL, 1),
(1119, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE IF NOT EXISTS `tbl_file` (
`id` int(11) NOT NULL,
  `materi_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tbl_file`
--

INSERT INTO `tbl_file` (`id`, `materi_id`, `file`) VALUES
(8, 35, '8-materi - pertemuan 1.pptx'),
(9, 37, '9-pertemuan 2.pptx'),
(10, 39, '10-pertemuan 4.pptx'),
(11, 40, '11-pertemuan 5.pptx'),
(12, 52, 'variabel operator dan expresi.pdf'),
(13, 55, 'Dasar-dasar-Pemrograman-Visual-Studio-2010.pdf'),
(14, 55, 'Kasus.docx'),
(15, 53, 'MODUL I.pdf'),
(16, 54, 'MODUL II.pdf'),
(17, 56, 'MODUL III.pdf'),
(18, 57, 'MODUL IV.pdf'),
(19, 55, 'Contoh perulangan.zip'),
(20, 58, 'Aplikasi Kasus.pdf'),
(21, 59, 'MODUL IV.docx'),
(22, 60, 'soal praktikum 20142015 visual.docx'),
(23, 59, 'soal pemrograman visual d3 MI.docx'),
(24, 60, 'nilai uts Prak 2014-2015.txt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE IF NOT EXISTS `tbl_group` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_group` varchar(100) NOT NULL,
  `diskripsi` tinytext NOT NULL,
  `tgl_buat` date NOT NULL,
  `sks` smallint(6) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tbl_group`
--

INSERT INTO `tbl_group` (`id`, `user_id`, `nama_group`, `diskripsi`, `tgl_buat`, `sks`, `status`) VALUES
(15, 232, 'Pemrograman Web S1 TI Kelas B', '<p>Pemrograman Web S1 TI Kel B</p>\r\n\r\n<p><strong>Sistem Penilaian</strong></p>\r\n\r\n<ul>\r\n	<li>Harian 20 %</li>\r\n	<li>UTS 30 %</li>\r\n	<li>UAS 50 %</li>\r\n</ul>\r\n', '2014-09-24', NULL, '0'),
(28, 1005, 'Statistik A', '<p>-</p>\r\n', '2014-09-29', NULL, '0'),
(29, 232, 'Pemrograman Visual 1 D3 MI', '<p>Pemrograman Visual 1 D3 MI</p>\r\n', '2014-09-29', NULL, '0'),
(30, 232, 'Pemrograman Visual 1 D3 TI', '<p>Pemrograman Visual 1 D3 TI</p>\r\n', '2014-09-29', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenjang`
--

CREATE TABLE IF NOT EXISTS `tbl_jenjang` (
  `kode_jenjang` char(1) NOT NULL,
  `nama_jenjang` varchar(20) NOT NULL,
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenjang`
--

INSERT INTO `tbl_jenjang` (`kode_jenjang`, `nama_jenjang`, `kode_pengguna_add`, `tanggal_add`, `kode_pengguna_edit`, `tanggal_edit`) VALUES
('3', 'D3', 1, '2012-12-04 06:27:23', 1, '2013-02-19 02:29:16'),
('5', 'S1', 1, '2012-12-27 14:01:40', 1, '2013-02-19 02:29:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE IF NOT EXISTS `tbl_jurusan` (
  `kode_jurusan` char(2) NOT NULL,
  `nama_jurusan` varchar(20) NOT NULL,
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`kode_jurusan`, `nama_jurusan`, `kode_pengguna_add`, `tanggal_add`, `kode_pengguna_edit`, `tanggal_edit`) VALUES
('00', 'Manajemen', 1, '2012-12-28 02:33:27', 1, '2013-02-19 02:30:37'),
('10', 'Teknik', 1, '2012-12-28 02:33:34', 1, '2013-02-19 02:30:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_list_tugas`
--

CREATE TABLE IF NOT EXISTS `tbl_list_tugas` (
`id` int(11) NOT NULL,
  `tugas_id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

--
-- Dumping data for table `tbl_list_tugas`
--

INSERT INTO `tbl_list_tugas` (`id`, `tugas_id`, `filename`, `user_id`) VALUES
(6, 7, 'Muh Haerul Zamroni(1300320006).rar', 1026),
(7, 7, 'FIKRI HAMZAH.rar', 1021),
(8, 7, 'Project1 lala 1300330015.zip', 1024),
(9, 7, 'i putu cindy ary suhartha(1300330032).rar', 1023),
(10, 7, 'asnawati (1300320003).rar', 1025),
(11, 7, 'Desak Nyoman Irma A (1300330009) D3 MI.rar', 1022),
(12, 7, 'marta1300330029.rar', 1031),
(13, 7, 'Andrean D3 MI Visual1.zip', 1027),
(14, 7, 'diah visual 1.zip', 1030),
(15, 7, 'm.zaki azhari 130330011.rar', 1020),
(16, 7, 'muslihatul bariyyah 1300320002.rar', 1033),
(17, 7, 'VB_pertama.rar', 1029),
(18, 7, 'edi kanadi.rar', 1039),
(19, 7, 'program hello.rar', 1037),
(20, 7, 'project1.rar', 1028),
(21, 7, 'm andri yunus 1300320008.rar', 1032),
(22, 7, 'titik apriani-1300330016.rar', 1036),
(23, 7, 'MUHAMMAD IRWAN NIM 1300330023.rar', 1038),
(24, 7, 'hidayatulaini-1300330024.rar', 1035),
(25, 7, 'zohratul aini1300330010.rar', 1034),
(26, 7, '26-desain.mwb', 1018),
(27, 8, '1018-Doa Hishnul Muslim.pdf', 1018),
(28, 9, '1064-Bikin Kalkulator.rar', 1064),
(29, 9, '1080-Lalu Sirhu Atma_1310330014_Pertemuan 1.rar', 1080),
(30, 9, '1068-rahma deny.zip', 1068),
(31, 9, '1066-oktaviany.zip', 1066),
(32, 9, '1081-Satriadi_Latihan1.rar', 1081),
(33, 9, '1078-zaenul.zip', 1078),
(34, 9, '1079-ZULHAM.rar', 1079),
(35, 9, '1077-Praktikum Visual.rar', 1077),
(36, 9, '1075-Praktikum Visual 1.rar', 1075),
(37, 9, '1083-hitung_satria diansyah.rar', 1083),
(38, 9, '1084-nengah1210330018.zip', 1084),
(39, 9, '1076-Visual 1.rar', 1076),
(40, 8, '1021-tugas 1.pdf', 1021),
(41, 8, '1032-M. ANDRI YUNUS.docx', 1032),
(42, 8, '1028-lara agus s.docx', 1028),
(43, 8, '1036-TITIK APRIANI(1300330016).rar', 1036),
(44, 8, '1026-Muh haerul zamroni visual.rar', 1026),
(45, 8, '1027-tugas visual.rar', 1027),
(46, 8, '1020-tugas pertama.doc', 1020),
(47, 8, '1039-GroupBox edi kanadi(1300330014).rar', 1039),
(48, 8, '1022-Desak Nyoman Irma A. (1300330009).docx', 1022),
(49, 8, '1024-lala.docx', 1024),
(50, 8, '1030-TUGAS VISUAL.zip', 1030),
(51, 8, '1025-ASNAWATI.docx', 1025),
(52, 8, '1029-vb.docx', 1029),
(53, 8, '1037-opi.zip', 1037),
(54, 10, '1064-Struktur If.rar', 1064),
(55, 8, '1023-TUGAS VB.rar', 1023),
(56, 8, '1033-Tugas visual.docx', 1033),
(57, 8, '1034-TUGAS VISUAL BASIC.docx', 1034),
(58, 8, '1031-marta1300330029.exe', 1031),
(59, 10, '1066-Oktaviany_1310330019_statement kondisi if_then.docx', 1066),
(60, 10, '1069-statement delphi7 NAMELIA (1310330021).docx', 1069),
(61, 10, '1068-rahma_1310330032_kondisi_if_then.docx', 1068),
(62, 10, '1065-tugas delphi kondisi if.docx', 1065),
(63, 10, '1080-LALU SIRBU ATMA_1310330014_RANGKUMAN_STATEMENT_IF_DELPHI.docx', 1080),
(64, 10, '1085-Tugass Pertemuan 1 & 2.rar', 1085),
(65, 11, '1021-Tipe Rumah.rar', 1021),
(66, 11, '1025-tugas2.vbproj', 1025),
(67, 11, '1029-visual basic.rar', 1029),
(68, 11, '1022-Desak Nyoman Irma A.rar', 1022),
(69, 11, '1023-I Putu Cindy Ary S.rar', 1023),
(70, 11, '1020-pertemuan ke 2.rar', 1020),
(71, 11, '1033-tugas visual.sln', 1033),
(72, 11, '1028-pertemuan 2.rar', 1028),
(73, 11, '1032-m.andri yunus.rar', 1032),
(74, 11, '1026-Muh Haerul Zam roni.rar', 1026),
(75, 11, '1036-titik apriani.rar', 1036),
(76, 11, '1031-tgs Pr.sln', 1031),
(77, 11, '1027-Andrean Wardana Latihan.rar', 1027),
(78, 11, '1034-zohratul aini tugas praktikum.vb', 1034),
(79, 11, '1035-aini3.rar', 1035),
(80, 11, '1039-Edi kanadi tugas 3.rar', 1039),
(81, 11, '1030-WindowsApplication2.rar', 1030),
(82, 11, '1037-ovy vb 3.rar', 1037),
(83, 10, '1067-Tugas (Denny_Dwi_Ardhinata) 1310330013.rar', 1067),
(84, 12, '1026-Tugas 1.rar', 1026),
(85, 12, '1027-tugas andre.rar', 1027),
(86, 12, '1032-andri.rar', 1032),
(87, 12, '1028-lara.rar', 1028),
(88, 12, '1021-FIKRI HAMZAH_1300330018 D3MI.rar', 1021),
(89, 12, '1020-Hotel.rar', 1020),
(90, 12, '1039-edi kanadi tugas 2 vb.rar', 1039),
(91, 12, '1030-diah.rar', 1030),
(92, 12, '1029-ana.rar', 1029),
(93, 12, '1025-tugas asna.rar', 1025),
(94, 12, '1031-tgs vb 1300330029.zip', 1031),
(95, 12, '1036-titik apriani 1300330016.rar', 1036),
(96, 12, '1033-tugas rumah skit.rar', 1033),
(97, 12, '1024-Tugas lala.rar', 1024),
(98, 13, '1064-APLIKASI HOTEL.rar', 1064),
(99, 13, '1066-penginapan hotel.zip', 1066),
(100, 13, '1067-Lat_Modul3 (Denny Dwi Ardhinata).rar', 1067),
(101, 13, '1065-APLIKASI PENGINAPAN HOTEL.zip', 1065),
(102, 13, '1079-program travel zulham purna alwan 1410330004.rar', 1079),
(103, 13, '1069-tugas 1310330021 hotel.rar', 1069),
(104, 13, '1080-APLIKASI PEMESANAN BAJU BY LALU SIRHU ATMA 1310330014.rar', 1080),
(105, 13, '1068-Lat 3 (Rahmadeni(1310330032)).rar', 1068),
(106, 13, '1092-saogie.rar', 1092),
(107, 13, '1083-penginapan.rar', 1083),
(108, 13, '1097-Agil.rar', 1097),
(109, 13, '1090-zulkarnaen(1210320010).zip', 1090),
(110, 13, '1096-APLIKASI TOUR 1310330017 YEK AGIL HUSNOZZON.rar', 1096),
(111, 17, '1028-UJIAN.rar', 1028),
(112, 17, '1021-uts.rar', 1021),
(113, 17, '1026-muh.haerul zamroni.rar', 1026),
(114, 17, '1020-UTS2014.rar', 1020),
(115, 17, '1036-titik apriani.rar', 1036),
(116, 17, '1031-uts 1300330029.rar', 1031),
(117, 17, '1024-LALA BELLA 1300330015.vbproj.rar', 1024),
(118, 17, '1022-WindowsApplication1.zip', 1022),
(119, 17, '1033-uts.rar', 1033),
(120, 17, '1030-WindowsApplication1.zip', 1030),
(121, 17, '1029-uts vb.rar', 1029),
(122, 17, '1025-WindowsApplication7.sln', 1025),
(123, 17, '1027-andrean wardana.rar', 1027),
(124, 17, '1038-muhammad irwan.rar', 1038),
(125, 17, '1032-ANDRI.rar', 1032),
(126, 17, '1034-zohratul aini.rar', 1034),
(127, 17, '1023-Putu Ari Suharta.rar', 1023),
(128, 17, '1039-edi kanadi vb uts.rar', 1039),
(129, 17, '1037-WindowsApplication10.rar', 1037),
(130, 17, '1035-WindowsApplication3.vbproj', 1035),
(131, 17, '1093-WindowsApplication2.rar', 1093);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_mahasiswa` (
  `user_id` int(11) NOT NULL,
  `kode_nama_jurusan` smallint(5) unsigned NOT NULL,
  `tgl_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`user_id`, `kode_nama_jurusan`, `tgl_lahir`) VALUES
(1018, 3, NULL),
(1019, 3, NULL),
(1020, 1, NULL),
(1021, 1, NULL),
(1022, 1, NULL),
(1023, 1, NULL),
(1024, 1, NULL),
(1025, 1, NULL),
(1026, 1, NULL),
(1027, 1, NULL),
(1028, 1, NULL),
(1029, 1, NULL),
(1030, 1, NULL),
(1031, 1, NULL),
(1032, 1, NULL),
(1033, 1, NULL),
(1034, 1, NULL),
(1035, 1, NULL),
(1036, 1, NULL),
(1037, 1, NULL),
(1038, 1, NULL),
(1039, 1, NULL),
(1040, 3, NULL),
(1041, 3, NULL),
(1042, 3, NULL),
(1043, 3, NULL),
(1044, 3, NULL),
(1045, 3, NULL),
(1046, 3, NULL),
(1047, 3, NULL),
(1048, 1, NULL),
(1049, 3, NULL),
(1050, 3, NULL),
(1051, 3, NULL),
(1052, 3, NULL),
(1053, 3, NULL),
(1054, 3, NULL),
(1055, 3, NULL),
(1056, 3, NULL),
(1057, 3, NULL),
(1058, 3, NULL),
(1059, 3, NULL),
(1060, 3, NULL),
(1061, 3, NULL),
(1062, 3, NULL),
(1063, 3, NULL),
(1064, 2, NULL),
(1065, 2, NULL),
(1066, 2, NULL),
(1067, 2, NULL),
(1068, 2, NULL),
(1069, 1, NULL),
(1070, 3, NULL),
(1071, 3, NULL),
(1072, 3, NULL),
(1073, 3, NULL),
(1074, 3, NULL),
(1075, 2, NULL),
(1076, 1, NULL),
(1077, 2, NULL),
(1078, 2, NULL),
(1079, 2, NULL),
(1080, 2, NULL),
(1081, 2, NULL),
(1083, 2, NULL),
(1084, 2, NULL),
(1085, 2, NULL),
(1086, 3, NULL),
(1087, 3, NULL),
(1088, 3, NULL),
(1089, 3, NULL),
(1090, 2, NULL),
(1091, 2, NULL),
(1092, 2, NULL),
(1093, 1, NULL),
(1094, 1, NULL),
(1096, 2, NULL),
(1097, 2, NULL),
(1098, 2, NULL),
(1099, 2, NULL),
(1100, 2, NULL),
(1101, 2, NULL),
(1102, 2, NULL),
(1120, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_materi`
--

CREATE TABLE IF NOT EXISTS `tbl_materi` (
`id` int(11) NOT NULL,
  `materi` varchar(100) DEFAULT NULL,
  `diskripsi` text,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `tbl_materi`
--

INSERT INTO `tbl_materi` (`id`, `materi`, `diskripsi`, `group_id`) VALUES
(35, 'HTML  HyperText Markup Language', '<p>Pengenalan Pemrograman Web 1</p>\r\n', 15),
(37, 'CSS  Cascading Style Sheets', '<p>CSS<br />\r\n&nbsp;Cascading Style Sheets</p>\r\n', 15),
(39, 'Dasar-dasar PHP', '<p>Dasar-dasar PHP<br />\r\n- Pengantar<br />\r\n- variabel<br />\r\n- operator<br />\r\n-struktur kontrol (dession/kondisi)</p>\r\n', 15),
(40, 'Struktur kontrol', '<p>Struktur kontrol<br />\r\n&infin; kondisi&nbsp;<br />\r\n&nbsp;&nbsp; &nbsp;&infin; if-else ,&nbsp;<br />\r\n&nbsp;&nbsp; &nbsp;&infin; switch<br />\r\n&infin; perulangan<br />\r\n&infin; percabangan<br />\r\n&nbsp; &nbsp;/perpindahan</p>\r\n', 15),
(50, 'Pengantar', '<p>-</p>\r\n', 28),
(51, 'Pengantar Pemrograman Visual (Visual Studio)', '<p>Pengenalan Visual Studio&nbsp;2010</p>\r\n', 29),
(52, 'VARIABEL, OPERATOR DAN EKSPRESI ', '<p>Membahas Tentang jenis-jenis operator, cara pembuatan variabel dan ekpresi serta penggunaan dengan contoh.</p>\r\n', 29),
(53, 'Pengantar Pemrograman Visual (Delphi)', '<p>Pengantar Pemrograman Visual (Delphi)</p>\r\n', 30),
(54, 'Variabel, Operator dan Statment', '<p>Statment</p>\r\n', 30),
(55, 'Struktur (IF, Select Case, FOR, WHILE, Until)', '<p>Penggunaan Statment</p>\r\n\r\n<p>IF Then</p>\r\n\r\n<p>FOR</p>\r\n\r\n<p>------------------</p>\r\n\r\n<p>EndFor</p>\r\n\r\n<p>WHILE</p>\r\n\r\n<p>----------------</p>\r\n\r\n<p>ENDWHILE</p>\r\n', 29),
(56, 'Komponen Visual Delphi', '<p>Komponen Visual Delphi</p>\r\n', 30),
(57, 'Studi Kasus', '<p>Latihan Komponen Lanjut, Statment Kondisi, Perulangan</p>\r\n', 30),
(58, 'Latihan', '<p>Aplikasi Sederhana dengan VB 2010</p>\r\n', 29),
(59, 'Subrutine, Fungsi  dan Konsep Dasar OOP', '<p>Subrutine, Fungsi&nbsp; dan Konsep Dasar OOP</p>\r\n', 29),
(60, 'UTS', '<p>Soal UTS</p>\r\n', 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nama_jurusan`
--

CREATE TABLE IF NOT EXISTS `tbl_nama_jurusan` (
`kode_nama_jurusan` smallint(5) unsigned NOT NULL,
  `kode_jurusan` char(2) NOT NULL,
  `kode_jenjang` char(1) NOT NULL,
  `nama_jurusan` varchar(80) NOT NULL,
  `singkatan_jurusan` char(4) NOT NULL,
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_nama_jurusan`
--

INSERT INTO `tbl_nama_jurusan` (`kode_nama_jurusan`, `kode_jurusan`, `kode_jenjang`, `nama_jurusan`, `singkatan_jurusan`, `kode_pengguna_add`, `tanggal_add`, `kode_pengguna_edit`, `tanggal_edit`) VALUES
(1, '00', '3', 'D3 Manajemen Informatika', 'D3MI', 1, '2012-12-28 01:51:50', 1, '2014-08-24 12:41:44'),
(2, '10', '3', 'D3 Teknik Informatika', 'D3TI', 1, '2013-02-23 04:54:32', 1, '2013-03-10 18:58:44'),
(3, '10', '5', 'S1 Teknik Informatika', 'S1', 1, '2013-02-23 07:39:17', 1, '2014-08-27 06:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE IF NOT EXISTS `tbl_pengumuman` (
`id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `header` enum('p','w') NOT NULL DEFAULT 'p',
  `tgl_post` datetime NOT NULL,
  `oleh` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id`, `judul`, `isi`, `header`, `tgl_post`, `oleh`) VALUES
(25, 'Selamat Datang di Pembelajarn Online (Pelin)', '<p>Komputer adalah produk teknologi untuk membantu menyelesaikan proses dengan tingkat kecepatan, keakuratan, dan kecermatan tinggi.&nbsp;Teknologi Informasi sebagai teknologi yang memanfaatkan komputer dalam segala bentuk sehingga meningkatkan kegiatan (aktifitas) dari suatu kegiatan di segala bidang. Ilmu komputer merupakan kebutuhan yang mendesak untuk segera dipelajari dan dikembangkan. Salah satu wujud realisasinya adalah melalui pendidikan formal.</p>\r\n\r\n<p>Tantangan tersebut segera dijawab dengan didirikannya &quot;Yayasan Pendidikan Eksekutip Komputer&quot; Akte Notaris nomor: 39 tanggal 26 September 1987 dihadapan Notaris Abdullah, SH. di Mataram, diikuti dengan berdirinya Perguruan Tinggi Komputer dengan nama Sekolah Tinggi Teknologi Komputer Bumigora (STTK Bumigora). Gagasan untuk mendirikan Perguruan Tinggi tersebut sesungguhnya telah dirintis sejak tahun 1987, namun karena ada kebijaksanaan baru mengenai pendidikan Perguruan Tinggi Swasta (PTS) oleh Dirjen Dikti No. 2834/D/T/1987, tanggal 26 September 1987 dan nomor: 086a/D/T 88, tanggal 16 Januari 1988, rencana tersebut tertunda dan baru dapat diwujudkan dalam tahun akademik 1989/1990 atas dasar:</p>\r\n\r\n<div style="font-family: ''Carrois Gothic'', sans-serif, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; page-break-after: always;">&nbsp;</div>\r\n\r\n<ul>\r\n	<li>Surat Petunjuk dari Kopertis Wilayah VIII, nomor: 117/Kop.8/N/1989 tanggal 11 Mei 1989 perihal Pendirian PTS baru</li>\r\n	<li>Rekomendasi Gubernur Kepala Daerah Tingkat I Propinsi NTB nomor: 421.4/873/008 tanggal 15 Juni 1989.</li>\r\n	<li>Rekomendasi Bupati Kepala Daerah Tingkat II Lombok Barat Nomor: 425.12/563 tanggal 26 Juni 1989.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Keberadaan lembaga pendidikan STMIK Bumigora tersebut kemudian semakin dimantapkan lagi dengan dikeluarkannya Surat Keputusan Menteri Pendidikan dan Kebudayaan melalui Koordinator Perguruan Tinggi Swasta (KOPERTIS) wilayah VIII yang memberi status terdaftar untuk jenjang studi strata 0 (S0) program studi Diploma tiga (D3) Manajemen Informatika, berdasarkan Surat Keputusan nomor 0390/O/1991 sekaligus merubah nama Sekolah Tinggi Teknologi Komputer (STTK) menjadi Sekolah Tinggi Manajemen Informatika (STMIK) Bumigora Mataram. Beberapa waktu kemudian, yaitu tanggal 8 Januari 1992 dengan Surat Keputusan Nomor 026/O/1992, program Diploma Tiga (D3) Teknik Informatika mendapat status Terdaftar.</p>\r\n', 'p', '2014-09-23 20:40:10', NULL),
(26, 'Pelatihan Aplikasi Pelin ', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem.</p>\r\n\r\n<div style="page-break-after: always;"><span style="display:none">&nbsp;</span></div>\r\n\r\n<p>In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy. Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien.</p>\r\n\r\n<p>Donec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec augue. Quisque aliquam tempor magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc ac magna. Maecenas odio dolor, vulputate vel, auctor ac, accumsan id, felis. Pellentesque cursus sagittis felis.</p>\r\n\r\n<p>Pellentesque porttitor, velit lacinia egestas auctor, diam eros tempus arcu, nec vulputate augue magna vel risus. Cras non magna vel ante adipiscing rhoncus. Vivamus a mi. Morbi neque. Aliquam erat volutpat. Integer ultrices lobortis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin semper, ante vitae sollicitudin posuere, metus quam iaculis nibh, vitae scelerisque nunc massa eget pede. Sed velit urna, interdum vel, ultricies vel, faucibus at, quam. Donec elit est, consectetuer eget, consequat quis, tempus quis, wisi.</p>\r\n\r\n<p>In in nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Donec ullamcorper fringilla eros. Fusce in sapien eu purus dapibus commodo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras faucibus condimentum odio. Sed ac ligula. Aliquam at eros. Etiam at ligula et tellus ullamcorper ultrices. In fermentum, lorem non cursus porttitor, diam urna accumsan lacus, sed interdum wisi nibh nec nisl.</p>\r\n\r\n<p>Ut tincidunt volutpat urna. Mauris eleifend nulla eget mauris. Sed cursus quam id felis. Curabitur posuere quam vel nibh. Cras dapibus dapibus nisl. Vestibulum quis dolor a felis congue vehicula. Maecenas pede purus, tristique ac, tempus eget, egestas quis, mauris. Curabitur non eros. Nullam hendrerit bibendum justo. Fusce iaculis, est quis lacinia pretium, pede metus molestie lacus, at gravida wisi ante at libero.</p>\r\n\r\n<p>Quisque ornare placerat risus. Ut molestie magna at mi. Integer aliquet mauris et nibh. Ut mattis ligula posuere velit. Nunc sagittis. Curabitur varius fringilla nisl. Duis pretium mi euismod erat. Maecenas id augue. Nam vulputate. Duis a quam non neque lobortis malesuada.</p>\r\n\r\n<p>Praesent euismod. Donec nulla augue, venenatis scelerisque, dapibus a, consequat at, leo. Pellentesque libero lectus, tristique ac, consectetuer sit amet, imperdiet ut, justo. Sed aliquam odio vitae tortor. Proin hendrerit tempus arcu. In hac habitasse platea dictumst. Suspendisse potenti. Vivamus vitae massa adipiscing est lacinia sodales. Donec metus massa, mollis vel, tempus placerat, vestibulum condimentum, ligula. Nunc lacus metus, posuere eget, lacinia eu, varius quis, libero.</p>\r\n\r\n<p>Aliquam nonummy adipiscing augue. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.</p>\r\n\r\n<p>Aenean nec lorem. In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy. Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'p', '2015-01-05 13:03:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peserta`
--

CREATE TABLE IF NOT EXISTS `tbl_peserta` (
`id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=145 ;

--
-- Dumping data for table `tbl_peserta`
--

INSERT INTO `tbl_peserta` (`id`, `group_id`, `user_id`, `status`) VALUES
(68, 29, 1020, '1'),
(69, 29, 1021, '1'),
(70, 29, 1032, '1'),
(71, 29, 1027, '1'),
(72, 29, 1022, '1'),
(73, 29, 1026, '1'),
(74, 29, 1030, '1'),
(75, 29, 1023, '1'),
(76, 29, 1033, '1'),
(77, 29, 1029, '1'),
(78, 29, 1031, '1'),
(79, 29, 1024, '1'),
(80, 29, 1036, '1'),
(81, 29, 1025, '1'),
(82, 29, 1034, '1'),
(83, 29, 1035, '1'),
(84, 29, 1037, '1'),
(85, 29, 1039, '1'),
(86, 29, 1038, '1'),
(87, 29, 1028, '1'),
(88, 15, 1040, '1'),
(89, 15, 1041, '1'),
(91, 15, 1045, '1'),
(92, 15, 1048, '1'),
(93, 15, 1049, '1'),
(94, 15, 1047, '1'),
(95, 15, 1051, '1'),
(96, 15, 1053, '1'),
(97, 15, 1055, '1'),
(98, 29, 1057, '1'),
(99, 15, 1060, '1'),
(100, 15, 1061, '1'),
(101, 15, 1054, '1'),
(102, 15, 1062, '1'),
(103, 15, 1063, '1'),
(105, 29, 1018, '1'),
(106, 30, 1064, '1'),
(107, 30, 1065, '1'),
(108, 30, 1066, '1'),
(109, 30, 1067, '1'),
(110, 30, 1068, '1'),
(111, 30, 1069, '1'),
(112, 15, 1042, '1'),
(113, 15, 1070, '1'),
(114, 15, 1071, '1'),
(115, 15, 1073, '1'),
(116, 30, 1080, '1'),
(117, 30, 1078, '1'),
(118, 30, 1081, '1'),
(119, 30, 1075, '1'),
(120, 30, 1083, '1'),
(121, 30, 1079, '1'),
(122, 30, 1077, '1'),
(123, 30, 1084, '1'),
(124, 30, 1085, '1'),
(125, 30, 1076, '1'),
(126, 15, 1043, '1'),
(127, 30, 1090, '1'),
(128, 30, 1091, '1'),
(129, 30, 1092, '1'),
(130, 15, 1019, '1'),
(132, 29, 1094, '1'),
(133, 30, 1018, '1'),
(134, 29, 1076, '1'),
(135, 30, 1097, '1'),
(136, 30, 1096, '1'),
(137, 30, 1098, '1'),
(138, 15, 1018, '1'),
(139, 29, 1093, '1'),
(140, 30, 1100, '1'),
(141, 30, 1101, '1'),
(142, 15, 1120, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tugas`
--

CREATE TABLE IF NOT EXISTS `tbl_tugas` (
`id` int(11) NOT NULL,
  `materi_id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `waktu_selesai` datetime NOT NULL,
  `diskripsi` text NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_tugas`
--

INSERT INTO `tbl_tugas` (`id`, `materi_id`, `judul`, `waktu_selesai`, `diskripsi`, `jenis`) VALUES
(7, 51, 'Upload Tugas Latihan Hari ini', '2014-09-30 00:00:00', 'Silahkan upload hasil praktikum tanggal 30 Septeember 2014', 'u'),
(8, 51, 'Properties Komponen Visual Studio', '2014-10-08 23:55:00', 'Silahkan Upload File Anda', 'u'),
(9, 53, 'Praktikum 2', '2014-10-07 00:00:00', 'Silahkan Upload File Anda pada Praktikum Hari ini 6 Oktober 2014', 'u'),
(10, 54, 'Statment', '2014-10-11 12:00:00', 'Buatlah rangkuman dengan menggunakan statment if pada delphi, kemudian diupload', 'u'),
(11, 55, 'Struktur Kendali', '2014-10-15 16:15:00', 'Silahkan Upload file anda', 'u'),
(12, 58, 'Contoh Aplikasi Paket', '2014-10-24 23:55:00', 'Silahkan upload file anda sesuai dengan tugas per tanggal 17 Oktober 2014', 'u'),
(13, 56, 'Tugas Contoh Kasus Paket', '2014-11-11 23:55:00', 'Silahkan Upload File Tugas Anda', 'u'),
(15, 50, 'Tugas 1', '2014-11-22 15:00:00', 'Tugas Pak Herman', 'u'),
(17, 59, 'Upload Soal UTS', '2014-11-04 09:45:00', 'Silahkan upload jawaban anda disini', 'u');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('A','N') NOT NULL DEFAULT 'N',
  `nama_lengkap` varchar(50) NOT NULL,
  `joinDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_add` int(10) DEFAULT NULL,
  `date_add` datetime DEFAULT NULL,
  `user_update` int(11) DEFAULT NULL,
  `date_update` datetime DEFAULT NULL,
  `active_key` varchar(100) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1125 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `email`, `password`, `status`, `nama_lengkap`, `joinDate`, `user_add`, `date_add`, `user_update`, `date_update`, `active_key`, `avatar`) VALUES
(232, 'aenal.abie', 'gerlbluchen@yahoo.co', '$2a$13$37spbdab.HF4PSsz4qB0xuaBHL4X457hf575//YtbTeFQx/NvXvcS', 'A', 'Zaenal Abidin, S.Kom', '2015-01-05 05:06:16', -1, '2014-08-26 19:43:37', 232, '2014-10-03 00:46:27', NULL, '232.jpg'),
(1005, 'hermansah', 'hermansyah@ugm.ac.id', '$2a$13$DLqkg6rY16dWIcFWkrImU.mtXqu1yBsilBArJBZdKMyE/QgBjIJLm', 'A', 'Hermansyah, S.Si. M.Sc', '2014-09-29 17:52:14', 999, '2014-09-26 14:50:16', NULL, NULL, NULL, '1005.jpg'),
(1018, '0610530097', 'aenal.abie@gmail.com', '$2a$13$hxel3DVtxW4X.pIGFG9.N.JxpmuOdEfdzmTP64neKRG9d0JQOgaf6', 'A', 'Aina Salsabila Assyabiya', '2014-10-02 17:17:38', 0, '2014-09-29 19:31:50', 1018, '2014-10-02 01:13:16', 'q2aq13q26aansq2djqoyqgqgf3rouougos5ewwjnkptz10dsvjvrtfskm93i', NULL),
(1019, '1110520126', 'akbarabbasa@yahoo.com', '$2a$13$2Dcunn.6WlbA22H8MvlXyuP3pPXfJQ4kDGx0JkvJDW3u5a0XybRJq', 'A', 'Akbar Abbas Abdullah', '2014-09-29 21:41:09', 0, '2014-09-29 22:08:46', NULL, NULL, 'q2aq13qynjt0rvjzyohrqjfeprwrewrywamiwajnq2n9lskqgqhqnoi77dw', '1019.jpg'),
(1020, '1300330011', 'jack5_a@yahoo.com', '$2a$13$G6y5D1mDwEDhHsywqOKbyOGEYq0hn1fawgx0fONJQELhT2deSUP52', 'A', 'muhammad zaki azhari', '2014-10-03 22:01:37', 0, '2014-09-29 22:11:44', NULL, NULL, 'q2aq13quqdqdftfyvwotdyvn3yrqq2ldtpjttn2zvnjoubroz4emrla2uixq', '1020.jpg'),
(1021, '1300330018', 'fikri.shinjyo@gmail.com', '$2a$13$d.cfYwAWgJv4efhMv8EWEOggdJTapC.PmIiCIckUv7BajeayKfOL.', 'A', 'Fikri Hamzah', '2014-10-03 17:07:51', 0, '2014-09-29 22:11:56', NULL, NULL, 'q2aq13qqd34819bzhkixoindqvyde7qevcpznfrl5urrawworu58erpgfy5q', '1021.jpg'),
(1022, '1300330009', 'desakirma1@gmail.com', '$2a$13$leHEt12K.gHNSZLp5Fmzv.ET.Lb7w.7IgCUDtgd0kdXfXTrVPGsse', 'A', 'Desak Nyoman Irma Asriani ', '2014-09-29 23:06:03', 0, '2014-09-29 22:13:15', NULL, NULL, 'q2aq13qsfw6asbd0q42cv2elw1k1qft4f2w85evpskmom7aqsmwcujft7fe', '1022.jpg'),
(1023, '1300330032', 'putusuharta@yahoo.co.id', '$2a$13$/XIJe.TeIfp0QZdpq0QALOj32DkiqpCbr6zhCA7I1qQdZBDx99y.6', 'A', 'I PUTU CINDY ARY SUHARTHA', '2014-09-29 14:13:29', 0, '2014-09-29 22:13:29', NULL, NULL, 'q2aq13qalei4gsx8qspppolqxsl7uzzmo3bnok30fhmx7uhqrqfp3oqtnini', NULL),
(1024, '1300330015', 'lalabellasafira2@gmail.com', '$2a$13$NN5kKO1O7oPU69krAtNLr.IyYILLlnXMYvUFD7Si8VZiP4zEhz35i', 'A', 'Lala Bella Saphira', '2014-09-29 22:57:53', 0, '2014-09-29 22:14:31', 232, '2014-10-24 00:33:27', 'q2aq13q9rqbnhfdkcpfzpv2jiovaugnyzxn7zwed1tahjqa86akh5fo4hkmi', '1024.jpeg'),
(1025, '1300320003', 'asnawati99@yahoo.co.id', '$2a$13$dQgRAS7BPFtTF91tmRVxlusQYYCBTSZ3/bB14Ecx.YGerd8nYAogG', 'A', 'asnawati', '2014-09-29 23:14:55', 0, '2014-09-29 22:15:19', 232, '2014-11-21 19:20:04', 'q2aq13qhlbrjg3r0rjtjolybw7qmqa6dldw1cejefbrlwk2ryxzd661qsvdq', '1025.jpg'),
(1026, '1300320006', 'roniempatlapan@gmail.com', '$2a$13$yqJzG8s.ccL5Zd56tGEDZuRk66.nbsOkbD8fkihPuHOxMfAbvBbNe', 'A', 'Muh.Haerul zamroni', '2014-09-29 23:14:26', 0, '2014-09-29 22:15:32', NULL, NULL, 'q2aq13qjtdvxeqbj7mhvlwucnlhwokkdfozl7yxdyrd5wtvfzxyf1uqddjnm', '1026.jpg'),
(1027, '1300330027', 'andreanwardana27@yahoo.com', '$2a$13$XL392PFWkle7wObJMEhBQuXIcKtatQRc43g0yKYv9yIFUokASXW7e', 'A', 'andrean wardana', '2014-09-29 21:53:29', 0, '2014-09-29 22:15:38', 232, '2014-11-21 19:20:52', 'q2aq13q1ytm8vwqfqmm7ndrmszijqtjojbeqdyn8jnnhqwxzyzh7je4kmwak', '1027.jpg'),
(1028, '1300320005', 'luge@gmail.com', '$2a$13$ssaR2vQGxbpZJN1.4zNsx.FlJNsdc4HLTkjr4Gj2PZayADZKSAxY.', 'A', 'lara agus susilawati', '2014-09-29 14:15:49', 0, '2014-09-29 22:15:50', 232, '2014-09-30 00:07:04', 'q2aq13qkdkuxnojijcfetkmyoavqeuozuyazhztqodcg63wktzcsm3imp7ck', NULL),
(1029, '1300330021', 'uswatunhasanah.16@yahoo.com', '$2a$13$M/tVAIv4IcLE3OKnmq4ZHekXst3AQcPXMGvX7Q8GfixkRGMZCh0CW', 'A', 'uswatun hasanah', '2014-10-09 22:18:22', 0, '2014-09-29 22:15:52', NULL, NULL, 'q2aq13qbqikncqfqagwbzygn9jososa0yyl17mhtszic0hxg6d76eahes1vg', '1029.bmp'),
(1030, '1300330022', 'diah.wah@gmail.com', '$2a$13$hkNkfPwhKKZ/Lo4XQiRjSO91StFYg2B2jJtJriSWbL6f0QvGv0sEO', 'A', 'halimatussakdiah', '2014-09-29 14:16:11', 0, '2014-09-29 22:16:12', NULL, NULL, 'q2aq13qk39jerpk9vjfkr4bqofrsepn34cytjwrzsii9vojvvoqk3tc2do0k', NULL),
(1031, '1300330029', 'martaevangky@yahoo.com', '$2a$13$wEsKFjCX1DbOUq5YQRGccuZU.sPE21K3qFB60jMuzRMsDPXNg8/uy', 'A', 'Marta Yuly Astutik', '2014-09-29 22:55:36', 0, '2014-09-29 22:16:21', NULL, NULL, 'q2aq13qitbw2fejteap2mjxqxoifuftqcelyahnbrvs9wb6fv0fuhvynjqa2', '1031.jpg'),
(1032, '1300320008', 'jogank_an@yahoo.com', '$2a$13$x2Kt8p58uHK6G5t9n5qwY.MUKd8xRtQM4s3gw/tTk2K6DKFQDGNfG', 'A', 'M. Andri Yunus', '2014-10-03 17:15:09', 0, '2014-09-29 22:17:35', 232, '2014-11-21 19:16:10', 'q2aq13qbmddmdumfjq8hul4yu9b0qwkopyexsdz91bzico3pyqiofouek98m', '1032.jpg'),
(1033, '1300320002', 'riachoi20@yahoo.com', '$2a$13$0b/6lgZl88FdJf3XNkOZJeaNPHhPF75Qwpp0i7NxrAT1.JiP2/HeW', 'A', 'Muslihatul Bariyyah', '2014-09-29 14:18:19', 0, '2014-09-29 22:18:20', NULL, NULL, 'q2aq13qbyw2zedpeizvsn7nex8e6eetehwe5a8wkxbc79qm6thpewsxi3kvu', NULL),
(1034, '1300330010', 'zohratulaini@yahoo.com', '$2a$13$GQRfErdT/KfITLE3KD9XXuBRBAGsh64rsV5E0hRP8po1LUKnOyYN.', 'A', 'zohratul aini', '2014-10-08 05:20:56', 0, '2014-09-29 22:18:24', NULL, NULL, 'q2aq13qvn3quh6accnpeajje2doru0f9wtdh2aawlzi7cbqjm8wqjrinwvra', '1034.jpg'),
(1035, '1300330024', 'ainihida@yahoo.co.id', '$2a$13$JyhD7.LbFUvq.wEzw4WNiehmuVo9hN4BKIlZUVowSGHzk.SGNr85K', 'A', 'hidayatul aini', '2014-09-29 14:18:44', 0, '2014-09-29 22:18:45', NULL, NULL, 'q2aq13q6vpffxgheejqz1m1xgs3q5cwfnl49ipuypddss5xpummkhq8dhma', NULL),
(1036, '1300330016', 'titikaprilliahmad@gmail.com', '$2a$13$r6SKbEo4KDSD5oMigIi6Lu2heqMsmwi6fhF1Kwvh1xsJbDV1fxoaC', 'A', 'Titik apriani', '2014-09-29 14:18:49', 0, '2014-09-29 22:18:50', NULL, NULL, 'q2aq13qok4byqzxq8o1str6whg7sqytkflefqphzz34jw5idlxcovg1t2kcm', NULL),
(1037, '1300330025', 'saupi@yahoo.com', '$2a$13$YuFkie6Y3FrRHwzkV7XRs.K/r9ak5L.qlpqpN39rzUxGU3KeOU3Ga', 'A', 'saupi', '2014-09-29 14:20:00', 0, '2014-09-29 22:20:01', NULL, NULL, 'q2aq13q3jvligknluwwgdsw526rougfgeqkwuzzia0lvt0lwitqbbiacimmo', NULL),
(1038, '1300330023', 'MUHAMMADIRWAN669@gmail.com', '$2a$13$77vkhmuYgPNDP8ZwOfsLfufCe/HNUooWy993wz8JmGehFFJkE1AN6', 'A', 'MUHAMMAD IRWAN', '2014-09-29 14:20:22', 0, '2014-09-29 22:20:23', NULL, NULL, 'q2aq13qc76ycpjdkbdc8bljzrj0nedsu2r4bhtw0ifih3lv7xgttymrcaqq', NULL),
(1039, '1300330014', 'edikanadi95@gmail.com', '$2a$13$iyrLQlQpZIal0hnrf0rX5OdmQtKkwSucBco2VbxzjKSbbjEgPMI4m', 'A', 'edi kanadi', '2014-09-29 14:21:55', 0, '2014-09-29 22:21:56', NULL, NULL, 'q2aq13q7ig9tulcyjl9hgi9wtsj3oesgg5n5sbevrj5wvl5o46dkhqpcsw0i', NULL),
(1040, '1210520105', 'muhammadmahzan28@yahoo.com', '$2a$13$iJOvcEZIXaqTisYWdP1CAueoqE8Ivoi2NSMKvkUImyVaZgC69uS7O', 'A', 'Muhammad Mahzan', '2014-09-29 23:11:31', 0, '2014-09-30 00:03:47', NULL, NULL, 'q2aq13qtgfpfw9tq0em3tjstkawno6h7suh7cj5gimkxspmbc7kxj2vvmw8c', '1040.jpg'),
(1041, '1210520129', 'alusazizi@gmail.com', '$2a$13$I4tn.P9VaCjbnWiREM7jxOupw7nqv32iHfwiTVswDjiPmkSoTrOxi', 'A', 'ALUS AZIZI SAMIRUDDIN', '2014-09-29 16:12:03', 0, '2014-09-30 00:12:04', NULL, NULL, 'q2aq13q7nxwjpws5on2jowjfa8rhqepstsvaiz0l1fuqfuecmyixsn9vk8jq', NULL),
(1042, '1210520145', 'limardyboy@ymail.com', '$2a$13$ESNXl86DaH/x9TlurmQlhOvyf/Zc/.TUptupO27i7KgU.NQh9CCzK', 'A', 'Limarsi', '2014-09-29 16:23:33', 0, '2014-09-30 00:23:35', NULL, NULL, 'q2aq13qmvdzcdpblhbqinya6fmwmouzayqgcqfy3mrp2bc7nr5tlvj76e0cu', NULL),
(1043, '1210520088', 'widyaanggraini78@gmail.com', '$2a$13$Kp4j/KtqdteGrasZBvR6feph7o3CPka98218XtfJIonX/ZK.2avX2', 'A', 'Widya Meli Anggraini', '2014-09-30 01:42:06', 0, '2014-09-30 00:25:29', NULL, NULL, 'q2aq13qnl55lzvsthoz9lual4eqsu2rplilf0xkeglbgop0he04gv9cp9aky', '1043.JPG'),
(1044, '1210520103', 'risayulinda2@gmail.com', '$2a$13$wI7u2gsKQnbcMXMjUpiSsuxjJkoRrbLsV/C8v.e0swmIkz3HFKBOy', 'A', 'risa yulinda', '2014-09-29 16:32:59', 0, '2014-09-30 00:33:00', NULL, NULL, 'q2aq13qytq9i8ski4fehrofm6cvveuq5mwydbs3qz9sjjp8qadn7egeyhprs', NULL),
(1045, '1210520123', 'dazcool11@gmail.com', '$2a$13$ZwUYIkzDqbiVHdF5Os3BnuODYG47BirCAX5kboTjD3Taes1zEqGbS', 'A', 'MOH HAMBALI', '2014-09-29 16:41:36', 0, '2014-09-30 00:41:37', NULL, NULL, 'q2aq13qn8ipqldbsalk496kkaavvqheitehtsov1cnob1s6ssa4ibxmri5ho', NULL),
(1046, '1210520096', 'ahzan_arshavin@yahoo.com', '$2a$13$/A8OL6wcAauMK5GQIPlHF.cuWWq1jXEXTNyAHSPb6jUy89h/.lwNy', 'A', 'ahzan khahmir', '2014-09-29 16:53:08', 0, '2014-09-30 00:53:09', NULL, NULL, 'q2aq13q4nstwqx8zs4xk0kmqmnqeqz0lb4qwwepgcq03lvcqy4uv7e4wmfhq', NULL),
(1047, '1210520098', '1210520098@students.stmikbumigora.ac.id', '$2a$13$IL4CEjArdeeRNRCQ86pD/uBITW70Nm5RRzxFECSQB/aWXC/2ihISG', 'A', 'Ahmad Muhar Dian Lasmita', '2014-09-30 00:35:17', 0, '2014-09-30 01:34:19', NULL, NULL, 'q2aq13qf0zhvvuruf1jlxoczxzoqorvxd4dbgszbrvri7o8xjxusvx5okl9q', '1047.png'),
(1048, '1210520100', 'allinski@yahoo.co.id', '$2a$13$AzX0N8.3hx2/lgWeM98afuy.6ul37tvJHQANa0HJdgz1LKAUll2Re', 'A', 'Kiki Rizki', '2014-09-30 00:39:49', 0, '2014-09-30 01:36:31', NULL, NULL, 'q2aq13qpunzv2dh2mk4bvquecpmqcdmsqojqttesj59nea4uudmq5awptqm', '1048.jpg'),
(1049, '1210520106', 'azuwaru@yahoo.com', '$2a$13$67DlersjRTF5oMSYqdV06.eLcKU7rK5CqFGPFc2jgQImUY/9fNvuC', 'A', 'Muhamad Azwar', '2014-09-29 17:46:35', 0, '2014-09-30 01:46:36', NULL, NULL, 'q2aq13qswqozkubzbvozjweal0bnqkc4aaleo6qrxfqrkuusdbemy03rlcc', NULL),
(1050, '1210520132', 'rossicokerz261@gmail.com', '$2a$13$9VmECf0n7id15cbaReaRCew901RRw9zCenBjBAhqcam0J5nGja4wC', 'A', 'Rosi Winardi', '2014-09-29 18:31:02', 0, '2014-09-30 02:31:03', NULL, NULL, 'q2aq13q3kkllyezdoujr39cjkz8xu1n2vx1i5kovfijvboncyozqtdbgq9rs', NULL),
(1051, '1210520092', 'zulkarnain.ziee@gmail.com', '$2a$13$JsAJWV.LbEKcNBuAAKNPcuiEJTB0jzkLDWVPEpkg1G2YXXV873D2e', 'A', 'zulkarnain', '2014-09-29 18:42:36', 0, '2014-09-30 02:42:37', NULL, NULL, 'q2aq13q5mdhoqsse1pzzm9omkfm0uqkt2quilcz22hklbbrf1hmpvpyr3aki', NULL),
(1052, '1210520134', 'sus.ijolumut@yahoo.com', '$2a$13$wxYkz66SHU2LOYlhy6AUOeXzNAJGiTiEr4Bwn1FxVxhNzhqNwbiw.', 'A', 'susanti muslimin', '2014-09-29 19:17:46', 0, '2014-09-30 03:17:47', NULL, NULL, 'q2aq13qji7vulnceh6htmzocsfsiellctxyaavyllrnyqdofb9fw3qst6vgu', NULL),
(1053, '1110520131', 'tio.bnt@gmail.com', '$2a$13$pZjP4H6aSumVtI3/Fe96nOLcYRj5tBc/ulpmkchLb/yrY./nazoii', 'A', 'sulistio', '2014-09-29 19:27:46', 0, '2014-09-30 03:27:47', NULL, NULL, 'q2aq13qa4vdbqvx8tggq7qnuoqw9o1nqt5e29hua2fl2mta9hqswwoyug2sm', NULL),
(1054, '1210520142', 'kurtubiah123@gmail.com', '$2a$13$TDrOr83RWHQBE5TvDV25lOfOSTal1nRKoV7y0O.4GOFXLTgCC2luC', 'A', 'Kurtubiah', '2014-09-29 19:33:58', 0, '2014-09-30 03:33:59', NULL, NULL, 'q2aq13qgprg1zxequoi9cvffci6be8apchgr0akfpryi6myabjaveelkepl6', NULL),
(1055, '1210520133', 'fdydwidira@gmail.com', '$2a$13$C7fnRwWBzfmAg9Np3rRKGeCS4nbxOD1PdFaPdlDI.kaQT4zaibUMa', 'A', 'Lalu Ringgani Edwin Farady', '2014-09-29 19:34:29', 0, '2014-09-30 03:34:30', NULL, NULL, 'q2aq13q8r0wlbft1n62qcc1gibrjq5upe9iyy4nyqeazgexv5w3hhtiq1pms', NULL),
(1056, '1210520146', 'razak_mama@yahoo.com', '$2a$13$zQi0zZa/bKZHSQMZOT.riu8EvjrKpO4973jaElE3LzZzKVAhIcTeq', 'A', 'Abdul Razak', '2014-09-29 19:36:40', 0, '2014-09-30 03:36:41', NULL, NULL, 'q2aq13qeh6vh74ykjsuyuatquds5uw7sraqwix1hgrkdvec1jqremfql1wjw', NULL),
(1057, '1110520109', 'muhamadkhalidsaputra@rocketmail.com', '$2a$13$WLcnDAdlKOzGEivEnPJBMehqKspYIhWecApHECQUGWo/TBKc5RbMu', 'A', 'muhamad khalid saputra', '2014-09-29 19:37:31', 0, '2014-09-30 03:37:32', NULL, NULL, 'q2aq13qkqlwpswnqgqlsplaxvzgowutuiadozspb2hmxh3vk0c5bfjdhggy', NULL),
(1058, '1210520141', 'ruhulahadiah@gmail.com', '$2a$13$kEiuh6gmvmE3LzFG9RtnpeHWRYTj0dujZQgFfJHqtahyK2d6bKy2y', 'A', 'Ruhul Ahadiah', '2014-09-29 19:38:35', 0, '2014-09-30 03:38:36', NULL, NULL, 'q2aq13qkzbvmwwfj9c6qbqwuparuuothhestxczk6wi6aoc3dtqbdeurcqrq', NULL),
(1059, '1210520079', 'hulaimifadlan@gmail.com', '$2a$13$aLO.1OjwSPd6K4yxI2S1p.yc7CRWgRZ37DQoWCTqTUTP.PiWZF752', 'A', 'hulaimi fadlan', '2014-09-29 19:41:08', 0, '2014-09-30 03:41:09', NULL, NULL, 'q2aq13qxcexot6peztpp9kbg4v6keyl5fvxldjfzcdltkqycgtiyvjlvdwpc', NULL),
(1060, '1210520095', 'arifmulkianyudiantara@yahoo.com', '$2a$13$z1JA8PiLd3CocaiP0nXLIu7O9mtc54Rpql1kFZOhgNa9b/xuBEwX6', 'A', 'Arif Mulkian Yudiantara', '2014-09-29 19:46:00', 0, '2014-09-30 03:46:01', NULL, NULL, 'q2aq13qcyqgvqdh0pf4vbt4q01wreoqnzg4kwe4yhxzyvd5jzsosms7pvqxq', NULL),
(1061, '1210520102', 'cahaya_ardy182@yahoo.com', '$2a$13$K8pNFJ11IpGVKmpjQU1Dte8alkfsreyhxWavKnghQIQiQ/ypRO00C', 'A', 'L.NANDA CAHAYA ARDI', '2014-09-29 19:49:52', 0, '2014-09-30 03:49:53', NULL, NULL, 'q2aq13qzc3wkgr45jmmstpamvxqku7kqpvbhgdw1tkhrql37w0rfvqtx47va', NULL),
(1062, '1210520137', 'ha3rulfajri@gmail.com', '$2a$13$HGZg/ccDuAROCI.U.SpsfeLQtWnx6DgMXDUC6naQmb891ITNAJGSS', 'A', 'Haerul Fajri', '2014-09-29 20:14:31', 0, '2014-09-30 04:14:32', NULL, NULL, 'q2aq13q7xh9yyimpwra6wyzderfqoebhsji7icmcs5ujj5dkbyq570ggapis', NULL),
(1063, '1210520115', 'Ahmad_nazir77@yahoo.com', '$2a$13$OfYRz9QYKW.NTGgdenSgjenJfRKhjqK3Sm79Z3K6u9PkpHfNLo67q', 'A', 'Ahmad Nazir', '2014-09-29 20:18:52', 0, '2014-09-30 04:18:53', NULL, NULL, 'q2aq13qibtfoxe8z7fz5k0v9pae3o2ary4zf0sqdicjzukwtnw2yfluyuq1m', NULL),
(1064, '1310330025', '1310330025@students.stmikbumigora.ac.id', '$2a$13$G9zUB/s8d5s66EHFb8h9AeBNEE8VZ5YwrnUqqHgmgAyHKOEh7s9N6', 'A', 'David Fernanda Pribadi', '2014-10-05 17:35:16', 0, '2014-10-02 00:12:05', NULL, NULL, 'q2aq13qtbq4duoyqvjokjyhugcm6ehqvjazdtvguql1dzcri7pnqqoawuqes', '1064.jpg'),
(1065, '1310320005', '1310320005@students.stmikbumigora.ac.id', '$2a$13$Lrz0AA2EaCutogFR9psjeurHVm2Ei8MMRgS8lS6tOCd2uQX9b4y52', 'A', 'Lalu wirman aprisandi', '2014-10-01 16:14:22', 0, '2014-10-02 00:14:23', NULL, NULL, 'q2aq13qt2zt8hfwpaaeogcmsqjhvogyukygqul8lotutdsfz0qcgi3wh4s0q', NULL),
(1066, '1310330019', 'srioktavia95@yahoo.co.id', '$2a$13$AVWX73OFjcKcscdjUMdykeH3w2eIaJ/0bzxZFvpTpZOJA/52ttlae', 'A', 'Oktaviany', '2014-11-24 23:56:04', 0, '2014-10-02 00:17:32', NULL, NULL, 'q2aq13qntqgibpbq5wmc0lnylskjqlxtnp0svq0jwguzmpwraudd9qhrw1k2', '1066.jpg'),
(1067, '1310330013', 'super.btg@gmail.com', '$2a$13$kerCGlDpC4zxp.5pYO0vKOrg4Z52WZZoHTVZWOnfY96cfR33so0h2', 'A', 'Denny Dwi Ardhinata', '2014-10-10 03:53:16', 0, '2014-10-02 00:27:00', NULL, NULL, 'q2aq13qrn0eptk9bkekbex3zes7ubtpqc4yrmomwjn3lxctk5jv5v0tlxqa', '1067.jpg'),
(1068, '1310330032', 'rahmaradeniy@gmail.com', '$2a$13$0gE6F.//EHlJgIQPwh1v/ulC5CBFTyG2B01oaMNGnNg89VHlWnbGi', 'A', 'Rahma deni', '2014-12-08 22:40:25', 0, '2014-10-02 00:32:48', NULL, NULL, 'q2aq13qp58kdxst5rb8uk9tq8yu7utossgqmcrcnpbnannudy8xsbsx6gwxq', '1068.png'),
(1069, '1310330021', 'lianame21@yahoo.com', '$2a$13$6xoUVb8J5ilQQ7XK0BjsiOQda9UqB8WkwduN7qZlbXMIfks8KaBIu', 'A', 'namelia', '2014-11-09 19:56:09', 0, '2014-10-03 02:27:02', 232, '2014-11-09 19:42:12', 'q2aq13qxwy22bgewt6acp52hjsq6eaqg61moqqjbovkrsfpdslzmqdju3qq6', '1069.jpg'),
(1070, '1210520089', 'yosiwardika@gmail.com', '$2a$13$eln2T4ep6muqUhtb93cz9OBZSv1E0XCi0ECojXFTzhEH5Arj0vvNy', 'A', 'I Komang Yosi Wardika Valintinus', '2014-10-03 12:59:37', 0, '2014-10-03 20:59:38', NULL, NULL, 'q2aq13quzxjieufrtbklbi24mzmcedlxxjdckgyegfxbqfk5ffty1md2hlsi', NULL),
(1071, '1210520084', 'nengahagus93@gmail.com', '$2a$13$lNJBoVJZhtEK11yGUPfbM.6xQCTHf3KxFhxi.O40u5sodo3X4c09e', 'A', 'i nengah agus sudiatmika', '2014-10-03 13:01:11', 0, '2014-10-03 21:01:12', NULL, NULL, 'q2aq13qppldqayqlwlzqtno57ptjuj2pxzfnrehqegm6b8pqqejubq0niy6w', NULL),
(1072, '1210520138', 's.azreal64@yahoo.com', '$2a$13$cmsBpHPNXhTvagWmo40Muuc0zIkag99Tsh248QMmkoTf7GTSF3aMC', 'A', 'Azral Satrani', '2014-10-03 13:02:54', 0, '2014-10-03 21:02:55', NULL, NULL, 'q2aq13qodd9ziakkbd2yhyfxpq1xqmajdtt2mitink5qiihvdsp3iqikz6ag', NULL),
(1073, '1210520074', 'roodhy.seran@gmail.com', '$2a$13$erJxqD/1hP8Jk3r.5Ey6fusZASIvM6OcqTVbL3r4cdu.V3OKCyrvO', 'A', 'Umaruddin S', '2014-10-03 20:12:33', 0, '2014-10-03 21:08:37', NULL, NULL, 'q2aq13qc4zke6t1br5sxcaqylmz1epcv7nntmdwo0kluwmbutrplcovwbs96', '1073.jpg'),
(1074, '1210520076', 'rikudo_wisnu@yahoo.com', '$2a$13$xvYEigvWAH590XvH0v//OeYED71HB28FrGRfzK5xZqK2PvxwqQCfm', 'A', 'wisnu maulana', '2014-10-03 13:10:08', 0, '2014-10-03 21:10:09', NULL, NULL, 'q2aq13qukusivh170ew7xox4hpkxqud2x2czo6itwtsdnepwcuegewwy6vc2', NULL),
(1075, '1210320006', 'august.sbastian21@gmail.com', '$2a$13$wq4ftCGVIMYo0WrcexwMlui3oX9jrLn9cPj6GQhYu3MF8/iTNoqLq', 'A', 'Agus Fajrin', '2014-10-05 09:14:14', 0, '2014-10-05 17:14:15', NULL, NULL, 'q2aq13qqtpq68q93ylmelx4qq0rwo85nkclvygq0x5gqdd0w2zsf2bhtbaoq', NULL),
(1076, '1210330020', 'bintangchidauruk@ymail.com', '$2a$13$Ybsl1FqtPAwBUGY0PiFjYufVnmIFcasTLYpqmNUXYx0y3ohu.qft2', 'A', 'bintang sidauruk', '2014-10-05 09:16:38', 0, '2014-10-05 17:16:39', 232, '2014-11-03 23:49:07', 'q2aq13qnqjfp8c4krudl0l941zcxejdblqpsxvplbvgkiltha8he7ld3wx22', NULL),
(1077, '1210320009', 'widigalih87@gmail.com', '$2a$13$1eDWq/sqV.15QYjyS4dkc.gCrFv3PuM/4eXXq8vz.I9HtBkBh2S6i', 'A', 'Widi Galihutami', '2014-10-05 09:17:42', 0, '2014-10-05 17:17:43', NULL, NULL, 'q2aq13qeteb3mwjr5ofpw3ukpevwoopos0gapwchc48dh2ktqgqfysywe5vq', NULL),
(1078, '1210320007', 'enokjupiter@yahoo.com', '$2a$13$haCn/PzjDAnlKaq.M0kAIOWyM25I1DcfhJCif/dyTUEOaoWktoLPa', 'A', 'Muh.zaenul harsani', '2014-12-29 22:27:24', 0, '2014-10-05 17:18:20', NULL, NULL, 'q2aq13qiuf5ajws8hnp8bt3jqhabqpynbwwshr4liouqtcyul51cfmtv8qrs', '1078.JPG'),
(1079, '1410330004', 'puena@gmail.com', '$2a$13$SlCOWg3FWJ0PrDTDUHQKXOH53.MVFtE7PS3JMzAyUlgvEFtUL51c.', 'A', 'zulham purna alwan', '2014-10-05 09:18:48', 0, '2014-10-05 17:18:49', 232, '2014-11-09 19:18:53', 'q2aq13q0vyqgmaq2gqhisgzb28v8ejdudhppqoyz8aiiyqykf4q0rj07h1zy', NULL),
(1080, '1310330014', 'star_atma@yahoo.com', '$2a$13$sv.CgivMeCeIIPXNbzGgnuidLDGMIl3dOMqcPLLbVUNI2b37g70WC', 'A', 'Lalu Sirhu Atma', '2014-10-05 09:33:58', 0, '2014-10-05 17:33:59', NULL, NULL, 'q2aq13qxsyphrdqmehl4pti3mormuqmoh3nkkkllidbzguxkjxngci86cdue', NULL),
(1081, '1110330037', 'jsjunior94@yahoo.co.od', '$2a$13$X2AtiwaEHHLn65w5rswE8.lUOBxDIp5WS1KXnD/UZN8k1F4R3NpPG', 'A', 'Satriadi Efendi', '2014-10-05 10:35:26', 0, '2014-10-05 18:35:27', NULL, NULL, 'q2aq13qjelp3vguw92wvnopftthqoiubnek6p8uifkbadutkijhcvblbwb2q', NULL),
(1083, '1210320005', 'satriaa1993@gmail.com', '$2a$13$3M4JP3d5VQ/ZIZ1WOH3DXeDdqCNd72L11pIYgUYdhNreQ5InYmk42', 'A', 'Satria Diansyah', '2014-11-11 04:15:36', 0, '2014-10-05 18:42:39', NULL, NULL, 'q2aq13qdrflti4ckunq7cskbm4dmukxqhz6jrhk11jq0f63rrgeq6rrmcvzq', '1083.jpg'),
(1084, '1210330018', 'yasasembilan@yahoo.co.id', '$2a$13$DXUTq73TGacZUS3CeV95A.hN/QrChzBzhlw8ljR9rOe77kf/z2QF6', 'A', 'nengahheryasa', '2014-10-05 10:59:36', 0, '2014-10-05 18:59:37', NULL, NULL, 'q2aq13qielzk6zqmcrskjji6xstjolikolqrqnhjg83gbakp9wxwuewtcib2', NULL),
(1085, '1310330015', '1310330015@students.stmikbumigora.ac.id', '$2a$13$GhTu7Zsz6GrpMguB9VxPMeOQiAj1OWTUAxAH2/XIDlscvrgMvPBZC', 'A', 'Hendri Saputra', '2014-10-05 11:25:59', 0, '2014-10-05 19:26:00', NULL, NULL, 'q2aq13qlhdflyrrqjrequoei8vqaoknjmrfqu5tyyxcqyomj5q6vonlntq5e', NULL),
(1086, '1210520093', 'Rizal.hakiky@yahoo.com', '$2a$13$VTCuq/JHF1jstzv51JbqK.KzZKEZF/C9hYefBH1NRVH.E4K7tr6gu', 'A', 'Rizal Hakiky', '2014-10-06 09:56:26', 0, '2014-10-06 17:56:27', NULL, NULL, 'q2aq13qmghpwojliog6qxubbwywjqdpv5qpiizjq9fopippc8broawr9hxw', NULL),
(1087, '1210520128', 'surur56@yahoo.com', '$2a$13$IEV1JNMFifEHt4uSLa4s7u2W1s6kfSumBpiSm4gbR048OMst1QYB.', 'A', 'muhammad surur', '2014-10-06 10:02:13', 0, '2014-10-06 18:02:14', NULL, NULL, 'q2aq13qfdnqprtuxqo7rpxeyij91oizaitq5b0elymq4ue5foajlvuztwlxm', NULL),
(1088, '1110520081', 'bayusukma977@gmail.com', '$2a$13$z9KQSBHzXwaFSFBizDYUqOdCgAkDM3fZdZiSSJduV76jp6CHTgUJ.', 'A', 'Bayu Sukma', '2014-10-06 10:55:51', 0, '2014-10-06 18:55:51', NULL, NULL, 'q2aq13qscwnbqnlgn4luwhcvjbbluxud5q1wspm9045nqepqehuimpa6dyow', NULL),
(1089, '1110520111', 'daniblokm@gmail.com', '$2a$13$R1oyUaieqFkgwEbeSvO6BOD0Z7H8MJJBHeCE5DGlcoG5Wr1B8MT5W', 'A', 'Muhamad Ramdani', '2014-10-06 12:14:34', 0, '2014-10-06 20:14:35', NULL, NULL, 'q2aq13qywpbuq1gh2wa97e73j8cjobahiqhzxdbehbeqivicx2h28ffwqkgs', NULL),
(1090, '1210320010', 'zkarnaen91@ymail.com', '$2a$13$AJdHoFEO6rPVTMrSR9F44.bCr1pWXK9XxIzUxSUTvmxyH12M11be.', 'A', 'ZULKARNAEN', '2014-10-13 10:56:41', 0, '2014-10-13 18:56:42', 232, '2014-11-03 23:49:31', 'q2aq13qfjc0p5zgzwbh4b6f6vbkkqqycwwzbincjwd5chyf3r5spi0kqnqfc', NULL),
(1091, '1210330021', 'tomiazis07@gmail.com', '$2a$13$e6fOQT1670xy4L33fDSDluq4pXg6WaiuzBkCDX9d8xl7R7gjjXUVu', 'A', 'tomi azis prasetiyo', '2014-10-13 11:20:45', 0, '2014-10-13 19:20:46', NULL, NULL, 'q2aq13qlhfbthq8pvr9sxvrohaerqau5bt2rs4s2c5z1feh8aax0kvcfogw', NULL),
(1092, '1310330016', 'yogiyaustin@yahoo.com', '$2a$13$fXG7SiXO5NdWPeHEE9nl9u7/MrPwkpHHUL/AI85vA4qgUr3xh2flK', 'A', 'Saogie Arfafatka', '2014-10-14 10:46:22', 0, '2014-10-14 18:46:23', NULL, NULL, 'q2aq13q8iwrobiduvosij0gjezahefbrmemgi0g75ym1cncbf0bphm49tqmm', NULL),
(1093, '1200330015', 'alan.ch@yahoo.co.id', '$2a$13$BaM4faNK39AGpu2UMGxhoupvkI/msBw4TrbvRNCWmZEuHYaEOrkua', 'A', 'alan christian', '2014-10-16 16:02:31', 0, '2014-10-17 00:02:32', NULL, NULL, 'q2aq13qsslfkld1rv7fqtygqrjqeuikbds3fhwuotcr6cq8reisy5xdml5wg', NULL),
(1094, '1200320013', 'rahmat.loteng91@yahoo.com', '$2a$13$XRQfu4lbz41JnWFtOwV1AO/TglR8oG0agMS8SK2uLc6hnp8WDEN66', 'A', 'rahmatullah', '2014-10-23 15:52:36', 0, '2014-10-23 23:52:36', NULL, NULL, 'q2aq13qfjfxyqsr5fs8tqtmzcp4eosfsasrupkrbkqspcrjgq1bcwybbiagk', NULL),
(1096, '1310330017', 'agilyex@gmail.com', '$2a$13$rdmAV8ew6mHo4CCxIYVuEejZs5zogIFV25iBUKWQj3DMpApf1Dtc2', 'A', 'yek agil husnuzzon', '2014-11-09 12:21:23', 0, '2014-11-09 20:21:24', NULL, NULL, 'q2aq13q4woik6itki3xxer0u6c2puldong50p31rjy3wgvszhulcqt38alhc', NULL),
(1097, '1310330018', 'agilsaprianto908@yahoo.com', '$2a$13$O5CISdQX.NYet/HzPtZpnu3MSx1JtdrFaysGaecU06a00MvGbCKp6', 'A', 'agil saprianto', '2014-11-10 10:45:22', 0, '2014-11-10 18:45:23', 232, '2014-11-10 23:02:34', 'q2aq13qxlk5xlfj4sqsjsxl2vfhoqgqhgt2aqsqp2ndwxlqwvecbxudlotbk', NULL),
(1098, '1210320015', 'yudanarra@gmail.com', '$2a$13$zW3Mre1ivJB1Selk4iHBHO50QKLJeVvmCYPCiGtffTR6gsHMPYznG', 'A', 'yuda narasimarau', '2014-11-11 08:51:39', 0, '2014-11-11 16:51:40', NULL, NULL, 'q2aq13qo1gnvjnxhe4kbszl93b2ku70k9ifnigzdbwivuefyefjmq3uhxf1e', NULL),
(1099, '1310310029', 'umengPringgos@gmail.com', '$2a$13$YMj.CVkuOgA2gye4kEhU5OK05Qg0t2VP.rbNlQm202i3cbPkSZDVi', 'A', 'Ahmad TaufikQurrahman', '2014-11-11 08:52:19', 0, '2014-11-11 16:52:20', NULL, NULL, 'q2aq13qrabjcqg7u7kw3nfqrnt4rqyjtdyz4ngtlssst5pm3theb87jah2sa', NULL),
(1100, '1110330041', 'dhevildhedhe@ymail.com', '$2a$13$39.7s0rwQYfDX7/RGqc9duSZL6B.9I86VUcZynopXsLcxrE0VqQqi', 'A', 'I Gde Merthayasa', '2014-11-24 14:47:53', 0, '2014-11-24 22:47:54', NULL, NULL, 'q2aq13q9phqfefsvv34xgto5vtyyuwkqjyt87f9zdjdxiajzbyeqrrq2hfz6', NULL),
(1101, '1110320014', 'zulfariandijefri@gmail.com', '$2a$13$POB5WsQbc.oV1ZcA/S.vteK6u82WORRkcLm.tBsC2X/opvWfl90CK', 'A', 'jefrizulfariandi', '2014-12-01 14:21:14', 0, '2014-12-01 22:21:15', NULL, NULL, 'q2aq13qdqdgkf8emjjaxedyaxmcxuks6z2xdza7s3sjqg3x9fqgub058g1iy', NULL),
(1102, '1110320019', 'dork.lucky94@gmail.com', '$2a$13$PqSzOY//fWzY00S0du1VfeZh4L160VMCHVBhp11eByZ6ud4X2XBGy', 'A', 'ihsanul ansory', '2014-12-01 14:24:25', 0, '2014-12-01 22:24:26', NULL, NULL, 'q2aq13qvfgzjbd5zfdtm8g4gs6xzevghmrcufhkqafeo5ptae4pu0rsg2hg2', NULL),
(1105, 'dosen1', 'dosen1@gmail.com', '$2a$13$Muo/H6DNgxfyVp1QKJhwpumk1AqPKWaKaLkKtYT.bqOKVlOm19.eC', 'A', 'Dosen 1', '2015-01-05 05:47:39', 232, '2015-01-05 13:47:17', NULL, NULL, NULL, NULL),
(1106, 'dosen2', 'dosen2@gmail.com', '$2a$13$QPDsXrCSV0uBq2Yq9NxdzO9ZuECbXm21E0..zUgIWrho64eOqrpl2', 'A', 'Dosen 2', '2015-01-05 05:53:40', 232, '2015-01-05 13:49:40', NULL, NULL, NULL, NULL),
(1107, 'dosen3', 'dosen3@gmail.com', '$2a$13$B/7XSfEu1Nenou8RpWoFSO0luQue5XMzKdezihgjBFqZXTRSwoVeC', 'A', 'Dosen 3', '2015-01-05 05:53:48', 232, '2015-01-05 13:50:16', NULL, NULL, NULL, NULL),
(1108, 'dosen4', 'dosen4@gmail.com', '$2a$13$E5wrSpbScolzFapEz7MYZe2s5T6YqL0pEi6oUUGKBXFKbJ.kWnJ8.', 'A', 'Dosen 4', '2015-01-05 05:53:51', 232, '2015-01-05 13:50:42', NULL, NULL, NULL, NULL),
(1109, 'dosen5', 'dosen5@gmail.com', '$2a$13$AHochHwqzqo0q53D02gWO.GcNWbbahMR5XpA8DhHsAZf.TIvd7rCu', 'A', 'dosen5', '2015-01-05 05:53:53', 232, '2015-01-05 13:51:16', NULL, NULL, NULL, NULL),
(1110, 'dosen6', 'dosen6@gmail.com', '$2a$13$x4KtIzvOPr/L6rvUnSWlJ.d0dLJd/ehvfvJYU4Cz0q2ol.TNCLrcK', 'A', 'Dosen 6', '2015-01-05 05:59:21', 232, '2015-01-05 13:56:35', NULL, NULL, NULL, NULL),
(1111, 'dosen7', 'dosen7@gmail.com', '$2a$13$EZ33j6Wd1ks.MVG.G2vN3.R9zBsjZFtB8evRiZUNS8VxKN4nxBWtO', 'A', 'Dosen 7', '2015-01-05 06:09:12', 232, '2015-01-05 13:56:56', NULL, NULL, NULL, NULL),
(1112, 'dosen8', 'dosen8@gmail.com', '$2a$13$H6qA3dPc27KmDFiAsupHnu96w3UVZTUOLjlJz8DGdVPr.7JqlnXNi', 'A', 'Dosen 8', '2015-01-05 05:59:33', 232, '2015-01-05 13:57:16', NULL, NULL, NULL, NULL),
(1113, 'dosen9', 'dosen9@gmail.com', '$2a$13$EMgSePGUPrqYHe147M8Za.XxR3bH9RNrusfj0ZxYxUmw0Z2MUxAdK', 'A', 'Dosen 9', '2015-01-05 05:59:40', 232, '2015-01-05 13:57:36', NULL, NULL, NULL, NULL),
(1114, 'dosen10', 'dosen10@gmail.com', '$2a$13$pp.kbZXJzsL0InpB81p6ieg1bpSAOVuqIB3I55kn.JPgUSYApxHgq', 'A', 'Dosen 10', '2015-01-05 05:59:43', 232, '2015-01-05 13:58:09', NULL, NULL, NULL, NULL),
(1115, 'dosen11', 'dosen11@gmail.com', '$2a$13$2.6THMxMonBNNIpBdABdseHoJxr8KnuX5SMJgHGUR1m2k5IwzwmPW', 'A', 'Dosen 11', '2015-01-05 06:09:17', 232, '2015-01-05 14:01:44', NULL, NULL, NULL, NULL),
(1116, 'dosen12', 'dosen12@gmail.com', '$2a$13$A7AUoWa8qPv.neEH.8dbSOo8Bjicza3dClZ.cLLmz702TsLbOzE7a', 'A', 'Dosen 12', '2015-01-05 06:09:19', 232, '2015-01-05 14:02:01', NULL, NULL, NULL, NULL),
(1117, 'dosen13', 'dosen13@gmail.com', '$2a$13$u1A7pIcQdu.nYSOPRNIUCOIdhTbov8HZMB63E.zDE7qCNXbGLck9m', 'A', 'Dosen 13', '2015-01-05 06:09:27', 232, '2015-01-05 14:02:15', NULL, NULL, NULL, NULL),
(1118, 'dosen14', 'dosen14@gmail.com', '$2a$13$CtQk7HpVnyPExG8ZOlZIMen8EXJdNvm5CXFEiXgcLHO.ZoWMkE1JW', 'N', 'Dosen 14', '2015-01-05 06:02:41', 232, '2015-01-05 14:02:42', NULL, NULL, NULL, NULL),
(1119, 'dosen15', 'dosen15@gmail.com', '$2a$13$AP1Oz4v.r15atsWPx6X4xed2pI937w5/QqY2eHa7j.RKkLJWLuy46', 'A', 'Dosen 15', '2015-01-05 06:09:30', 232, '2015-01-05 14:02:57', NULL, NULL, NULL, NULL),
(1120, '0610051009', 'aenal.abie@stmik.com', '$2a$13$w9Bpt4EYw8adkLg7XqvV3.qNU9g3EDuo2Bpvpb1w9H8aG/7kmDVI6', 'A', 'Zaenal', '2015-01-05 07:33:47', 0, '2015-01-05 15:33:47', NULL, NULL, 'q2aq13qldrbf2iwqwuijnwwxaqfhevikyddxjzinrtskkhiqmlxewleengug', NULL),
(1121, 'dian.aryani', 'dian.aryani@stmikbumigora.ac.id', '$2a$13$1zbO1epcTp8oAvrZkKF83eKo2f0HkQGSImWNQ6eGOTDfjd9fMMorO', 'A', 'Dian Aryani, S.Si', '2015-02-04 02:43:59', 232, '2015-02-04 09:50:05', 1121, '2015-02-04 10:43:59', NULL, '1121.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authassignment`
--
ALTER TABLE `authassignment`
 ADD PRIMARY KEY (`itemname`,`userid`);

--
-- Indexes for table `authitem`
--
ALTER TABLE `authitem`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `authitemchild`
--
ALTER TABLE `authitemchild`
 ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indexes for table `rights`
--
ALTER TABLE `rights`
 ADD PRIMARY KEY (`itemname`);

--
-- Indexes for table `tbl_diskusi`
--
ALTER TABLE `tbl_diskusi`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_tbl_diskusi_tbl_user1_idx` (`user_id`), ADD KEY `fk_tbl_diskusi_tbl_group1_idx` (`group_id`);

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
 ADD PRIMARY KEY (`user_id`), ADD KEY `fk_tbl_dosen_tbl_nama_jurusan1_idx` (`kode_nama_jurusan`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_tbl_file_tbl_materi1_idx` (`materi_id`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_tbl_group_tbl_dosen1_idx` (`user_id`);

--
-- Indexes for table `tbl_jenjang`
--
ALTER TABLE `tbl_jenjang`
 ADD PRIMARY KEY (`kode_jenjang`), ADD KEY `fk_jenjang_pengguna` (`kode_pengguna_add`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
 ADD PRIMARY KEY (`kode_jurusan`), ADD KEY `fk_jurusan_pengguna` (`kode_pengguna_add`);

--
-- Indexes for table `tbl_list_tugas`
--
ALTER TABLE `tbl_list_tugas`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `upload` (`tugas_id`,`user_id`), ADD KEY `fk_tbl_list_tugas_tbl_tugas1_idx` (`tugas_id`), ADD KEY `fk_tbl_list_tugas_tbl_mahasiswa1_idx` (`user_id`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
 ADD PRIMARY KEY (`user_id`), ADD KEY `fk_tbl_mahasiswa_tbl_user1_idx` (`user_id`), ADD KEY `fk_tbl_mahasiswa_tbl_nama_jurusan1_idx` (`kode_nama_jurusan`);

--
-- Indexes for table `tbl_materi`
--
ALTER TABLE `tbl_materi`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_tbl_materi_tbl_group1_idx` (`group_id`);

--
-- Indexes for table `tbl_nama_jurusan`
--
ALTER TABLE `tbl_nama_jurusan`
 ADD PRIMARY KEY (`kode_nama_jurusan`), ADD KEY `fk_nama_jurusan_jenjang` (`kode_jenjang`), ADD KEY `fk_nama_jurusan_jurusan` (`kode_jurusan`), ADD KEY `fk_nama_jurusan_pengguna` (`kode_pengguna_add`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `user_id` (`user_id`,`group_id`), ADD KEY `fk_tbl_peserta_tbl_group1_idx` (`group_id`), ADD KEY `fk_tbl_peserta_tbl_mahasiswa1_idx` (`user_id`);

--
-- Indexes for table `tbl_tugas`
--
ALTER TABLE `tbl_tugas`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_tbl_tugas_tbl_materi1_idx` (`materi_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_diskusi`
--
ALTER TABLE `tbl_diskusi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_group`
--
ALTER TABLE `tbl_group`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `tbl_list_tugas`
--
ALTER TABLE `tbl_list_tugas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT for table `tbl_materi`
--
ALTER TABLE `tbl_materi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `tbl_nama_jurusan`
--
ALTER TABLE `tbl_nama_jurusan`
MODIFY `kode_nama_jurusan` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=145;
--
-- AUTO_INCREMENT for table `tbl_tugas`
--
ALTER TABLE `tbl_tugas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1125;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `authassignment`
--
ALTER TABLE `authassignment`
ADD CONSTRAINT `AuthAssignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `authitemchild`
--
ALTER TABLE `authitemchild`
ADD CONSTRAINT `AuthItemChild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `AuthItemChild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rights`
--
ALTER TABLE `rights`
ADD CONSTRAINT `Rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_diskusi`
--
ALTER TABLE `tbl_diskusi`
ADD CONSTRAINT `fk_tbl_diskusi_tbl_group1` FOREIGN KEY (`group_id`) REFERENCES `tbl_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fk_tbl_diskusi_tbl_user1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
ADD CONSTRAINT `fk_tbl_dosen_tbl_nama_jurusan1` FOREIGN KEY (`kode_nama_jurusan`) REFERENCES `tbl_nama_jurusan` (`kode_nama_jurusan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tbl_dosen_tbl_user1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_file`
--
ALTER TABLE `tbl_file`
ADD CONSTRAINT `fk_tbl_file_tbl_materi1` FOREIGN KEY (`materi_id`) REFERENCES `tbl_materi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_group`
--
ALTER TABLE `tbl_group`
ADD CONSTRAINT `fk_tbl_group_tbl_dosen1` FOREIGN KEY (`user_id`) REFERENCES `tbl_dosen` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_list_tugas`
--
ALTER TABLE `tbl_list_tugas`
ADD CONSTRAINT `fk_tbl_list_tugas_tbl_mahasiswa1` FOREIGN KEY (`user_id`) REFERENCES `tbl_mahasiswa` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tbl_list_tugas_tbl_tugas1` FOREIGN KEY (`tugas_id`) REFERENCES `tbl_tugas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
ADD CONSTRAINT `fk_tbl_mahasiswa_tbl_nama_jurusan1` FOREIGN KEY (`kode_nama_jurusan`) REFERENCES `tbl_nama_jurusan` (`kode_nama_jurusan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tbl_mahasiswa_tbl_user1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_materi`
--
ALTER TABLE `tbl_materi`
ADD CONSTRAINT `fk_tbl_materi_tbl_group1` FOREIGN KEY (`group_id`) REFERENCES `tbl_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_nama_jurusan`
--
ALTER TABLE `tbl_nama_jurusan`
ADD CONSTRAINT `fk_tbl_nama_jurusan_1` FOREIGN KEY (`kode_jenjang`) REFERENCES `tbl_jenjang` (`kode_jenjang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tbl_nama_jurusan_2` FOREIGN KEY (`kode_jurusan`) REFERENCES `tbl_jurusan` (`kode_jurusan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
ADD CONSTRAINT `fk_tbl_peserta_tbl_group1` FOREIGN KEY (`group_id`) REFERENCES `tbl_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fk_tbl_peserta_tbl_mahasiswa1` FOREIGN KEY (`user_id`) REFERENCES `tbl_mahasiswa` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_tugas`
--
ALTER TABLE `tbl_tugas`
ADD CONSTRAINT `fk_tbl_tugas_tbl_materi1` FOREIGN KEY (`materi_id`) REFERENCES `tbl_materi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
