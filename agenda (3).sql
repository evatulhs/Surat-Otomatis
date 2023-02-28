-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 04:00 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id` int(20) NOT NULL,
  `no_agenda` varchar(255) DEFAULT NULL,
  `nama_acara` text DEFAULT NULL,
  `pa` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `pakaian` varchar(255) DEFAULT NULL,
  `hari` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `jam` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `dis1` text DEFAULT NULL,
  `dis2` text DEFAULT NULL,
  `dis3` text DEFAULT NULL,
  `dis4` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `pejabat_laporan` varchar(255) DEFAULT NULL,
  `laporan` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id`, `no_agenda`, `nama_acara`, `pa`, `lokasi`, `pakaian`, `hari`, `tanggal`, `jam`, `jabatan`, `ket`, `dis1`, `dis2`, `dis3`, `dis4`, `status`, `pejabat_laporan`, `laporan`, `foto`, `file`) VALUES
(8, '1284', 'Rapat Paripurna Istimewa DPRD Kab. Sumenep', 'Ketua DPRD', 'Ruang Graha Paripurna DPRD.', 'Baju Adat Bangsawan Keraton Sumenep.', 'Senin', '31 Oktober 2022', '09:00', '(Kepala Dinas)', '', '', '', '', NULL, '0', NULL, NULL, NULL, NULL),
(9, '1286', 'Prosesi Arya Wiraraja.', 'Bapak Bupati', 'Depan Kantor MPP.', 'Adat Keraton Sumenep', 'Sabtu', '29 Oktober 2022', '07:00', '(Kepala Dinas)', '', 'Saya hadir', '', '', NULL, '1', 'Kepala Dinas', '', 'Prosesi Arya Wiraraja..jpg', NULL),
(11, '-', 'Rapat koordinasi peringatan hari jadi Kabupaten Sumenep ke 753', 'WakapolresSumenep', 'Aula Sutanto Polres Sumenep', 'Yang Berlaku pada hari itu, pakai masker', 'Kamis', '27 Oktober 2022', '14:00', '(Kepala Dinas),(Kepala Bidang TI)', '', 'Hadiri dan laporkan hasilnya', '', '', NULL, '1', 'Kepala Dinas', '<p><span style=\"font-size: 1rem; background-color: rgb(255, 255, 0);\"><b><font color=\"#000000\">Pimpinan Bapak Waka Polres Sumenep.</font></b></span></p><p><span style=\"font-size: 1rem;\">Disampaikan Bapak Waka Polres, agar :</span></p><p>Diskominfo Sumenep', 'Rapat koordinasi peringatan hari jadi Kabupaten Sumenep ke 753.jpg', NULL),
(12, '1293', 'Nonton Bareng Metro TV News Line', 'Bapak Bupati', 'Ruang Rapat Arya Wiraraja Lantai II', 'Yang Berlaku Pada Hari Ini', 'jumat', '28 Oktober 2022', '14:30', '(Kepala Dinas)', '', 'Saya hadir', '', '', NULL, '1', 'Kepala Dinas', '', NULL, NULL),
(13, '1290', '27 Tahun Sweet Models & Rock Legend 90.', 'Bapak Bupati.', 'Lapangan Kesenian Sumenep.', 'Bebas Dan Rapi.', 'Sabtu', '29 Oktober 2022', '19:00', '(Kepala Dinas)', '', '', '', '', NULL, '1', 'Kepala Dinas', '', '27 Tahun Sweet Models & Rock Legend 90..jpg', NULL),
(14, '1302', 'Sumenep Bersholawat.', 'Bapak Bupati.', 'Depan Labeng Mesem.', 'Baju Muslim Putih.', 'Senin', '31 Oktober 2022', '19:00', '(Kepala Dinas)', '', '', '', '', NULL, '1', 'Kepala Dinas', '', 'Sumenep Bersholawat..jpg', NULL),
(15, '1311', 'Penyampaian Nota Keuangan Terhadap Raperda.', 'Ketua DPRD', 'Ruang Graha Paripurna DPRD Kab. Sumenep.', 'PSH', 'Selasa', '01 November 2022', '09:00', '(Kepala Dinas),(Kepala Bidang SP)', '', 'Agar hadir', '', '', NULL, '0', NULL, NULL, NULL, NULL),
(17, '1312', 'Penyampaian Pandangan Umum Fraksi Fraksi.', 'Ketua DPRD', 'Ruang Graha Paripurna DPRD.', 'Yang Berlaku Pada Hari Ini.', 'Rabu', '02 November 2022', '09:00', '(Kepala Dinas),(Kepala Bidang TI)', '', 'Hadiri', '', '', NULL, '1', 'Kepala Bidang TI', '', 'Penyampaian Pandangan Umum Fraksi Fraksi..jpg', NULL),
(18, '1312', 'Penyampaian Jawaban Bapak Bupati.', 'Bapak Bupati', 'Ruang Graha Paripurna DPRD.', 'Batik.', 'Jumat', '04 November 2022', '09:00', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Agar hadir', '', '', NULL, '0', NULL, NULL, NULL, NULL),
(19, '1323', 'Rembuk Stunting.', 'Wakil Bupati Sumenep.', 'Ruang Pertemuan Bappeda Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Kamis', '03 November 2022', '08:00', '(Kepala Dinas),(Kepala Bidang IKP)', '', 'Agar dihadiri sdr. Miko', '', '', NULL, '1', 'Kepala Bidang IKP', '', NULL, NULL),
(20, '1324', 'Bimbingan Teknis Instalasi Aplikasi SI LPPD.', '-', 'Swiss Belinn Airport Surabaya.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '08 November 2022', '09:00', '(Kepala Dinas)', '', '', '', '', NULL, '0', NULL, NULL, NULL, NULL),
(21, '1333', 'Rapat Teknis Penciptaan Dan Penggunaan Teknis.', '-', 'Ruang Rapat Dinad Perpustakaan Dan Kearsipan.', 'Yang Berlaku Hari Itu.', 'Selasa', '08 November 2022', '08:00', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Ditunjuk staf yang akan hadir', '', '', NULL, '0', NULL, NULL, NULL, NULL),
(22, '1334', 'Rapat Staf', '-', 'Ruang Rapat Graha Ariya Wiraraja. Lantai II Kantor Bupati.', 'Tang Berlaku Pada Hari Itu.', 'Senin', '07 November 2022', '07:30', '(Kepala Dinas)', '', '', '', '', NULL, '1', 'Kepala Dinas', '', 'Rapat Staf.jpg', NULL),
(23, '1335', 'Rapat Persiapan Pelaksanaan Upacara Hari Pahlawan.', 'Sekda.', 'Ruang Rapat Graha Aria Wiraraja Lantai II.', 'Yang Berlaku Pada Hari Itu.', 'Senin', '07 November 2022', '07:30', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Sdr Alfian dibantu menghadiri, krn saya ada rapat staf Sekda', '', '', NULL, '0', NULL, NULL, NULL, NULL),
(24, '1336', 'Rapat Koordinasi Tindak Lanjut Penilaian Penyelenggaraan Pelayanan Publik Oleh Ombudsman RI Perwakilan Prov. Jatim.', 'Sekda.', 'Ruang Rapat Sekda Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Senin', '07 November 2022', '13:00', '(Kepala Dinas),(Kepala Bidang TI)', '', 'Sdr. Alvian agar hadir dan laporkan hasilnya', '', '', NULL, '1', 'Kepala Bidang TI', '', NULL, NULL),
(25, '1337', 'Rapat Koordinasi Penyusunan Laporan Tim Percepatan Penurunan Stunting Kab. Sumenep.', '-', 'Ruang Rapat Potre Koning Bappeda Sumenep.', 'Yang Berlaku Pada Hari itu.', 'Selasa', '08 November 2022', '07:30', '(Kepala Dinas),(Kepala Bidang SP)', '', 'Agar ditunjuk yang akan hadir, laporkan hasilnya', '', '', NULL, '0', NULL, NULL, NULL, NULL),
(26, '1338', 'Bimbingan Teknis Instalasi Aplikasi SI LPPD Jatim.', '-', 'Swiss-Belinn Airport Surabaya.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '08 November 2022', '09:00', '(Kepala Dinas),(Kepala Bidang TI)', '', 'Sdr. Rajiv agar hadir, koordBag. Pemerintahan, laporkan hasilnya', '', '', NULL, '1', 'Kepala Bidang TI', '', NULL, NULL),
(27, '1339', 'Rapat Koordinasi Imput Data Indikator RAD SDGs Se Jatim.', '-', 'Ruang Rapat Bapedda Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '08 November 2022', '09:00', '(Kepala Dinas),(Kepala Bidang SP)', '', 'Agar hadir, laporkan hasilnya', '', '', NULL, '0', NULL, NULL, NULL, NULL),
(28, '1340', 'Lokakarya Optimalisasi Peran CSR Dalam Mendukung Percepatan Penurunan Stunting.', '-', 'Meeting Hall Hotel De Baghraf.', 'Yang Berlaku Pada Hari itu.', 'Rabu', '09 November 2022', '08:00', '(Kepala Dinas),(Kepala Bidang SP)', '', 'Sdr Lutfi agar hadir', '', '', NULL, '0', NULL, NULL, NULL, NULL),
(29, '1342', 'Koordinasi Pemberantasan Koropsi, Program Tematik Dan Monitoring MCP Tahun 2022.', 'KPK RI Bersama Bapak Bupati.', 'Ruang Rapat Arya Wiraraja Lantai II Kantor Bupati Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '08 November 2022', '08:30', '(Kepala Dinas)', '', '', '', '', NULL, '1', 'Kepala Dinas', '', 'Koordinasi Pemberantasan Koropsi, Program Tematik Dan Monitoring MCP Tahun 2022..jpg', NULL),
(30, '1349', 'Rapat Forum Koordinasi Pimpinan Daerah.', 'Bapak Bupati Sumenep.', 'Ruang Paseban Agung Sultan Abdurrahman Rumah Dinas Bupati Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Rabu', '09 November 2022', '09:00', '(Kepala Dinas)', '', '', '', '', NULL, '1', 'Kepala Dinas', '<p>Rapat dipimpin oleh Sekda dihadiri oleh Ketua PN, Kasdim dan Kabag Ops Polres serta OPD terkait dg hasil pembahasan :</p><p>1. Pengadilan Negeri mengusulkan terkait Permendagri Nomor 73 Tahun 2022 Pasal 5, dmn Nama tidak boleh disingkat dan terdiri minimal&nbsp;</p><p>2.</p><p>3.</p><p><br></p>', 'Rapat Forum Koordinasi Pimpinan Daerah..jpg', NULL),
(31, '1356', 'Sosialisasi Penyelenggaraan Jaminan Kesehatan Nasional Bagi Penduduk Kab. Sumenep. Dalam Rangka Universal Health Coverage.', '-', 'Ruang Rapat Graha Aria Wiraraja.', 'Yang Berlaku Pada Hari itu.', 'Rabu', '09 November 2022', '13:00', '(Kepala Dinas)', '', '', '', '', NULL, '0', NULL, NULL, NULL, NULL),
(32, '1357', 'Upacara Bendera Peringatan Hari Pahlawan.', '-', 'Taman Makam Pahlawan Jokotole Sumenep', 'PSL ( Full Dress.', 'Kamis', '10 November 2022', '08:00', '(Kepala Dinas)', '', '', '', '', NULL, '0', NULL, NULL, NULL, NULL),
(33, '1364', 'Silaturrahmi Literasi.', '-', 'Aula Diskominfo Kab. Sumenep.', 'Rapi.', 'Minggu', '13 November 2022', '09:00', '(Kepala Dinas)', '', 'Saya hadir ', '', '', NULL, '1', 'Kepala Dinas', '', 'Silaturrahmi Literasi..jpg', NULL),
(34, '1373', 'Rapat KoordinasiAntisipasi Pencegahan Dan Penanganan COVID-19.', '-', 'Aula Graha Abdi Husada Lantai 2. Dinas Kesehatan P2KB Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Jumat', '11 November 2022', '13:00', '(Kepala Dinas),(Kepala Bidang IKP)', '', 'Sdr Miko agar hadir, laporkan hasilnya', '', '', NULL, '1', 'Kepala Bidang IKP', '', NULL, NULL),
(35, '1374', 'Peringatan Hari Kesehatan Nasional Ke 58.', '-', 'Taman Adipura Sumenep.', 'Baju Olah Raga Warna Merah.', 'Minggu', '13 November 2022', '06:00', '(Kepala Dinas)', '', 'Saya hadir', '', '', NULL, '1', 'Kepala Dinas', '', NULL, NULL),
(36, '1379', 'Apel Siaga Perlindungan Siswa.', 'Prof. Dr. Seto Mulyadi,  Psikolog.', 'SMP Negeri 2 Sumenep.', 'Yang Berlaku Pada Hari itu.', 'Jumat', '18 November 2022', '06:30', '(Kepala Dinas)', '', 'Saya hadir', '', '', NULL, '1', 'Kepala Dinas', '<p>Acara dihadiri oleh Kak Seto Mulyadi, Wakil Bupati Sumenep, Kapolres, Kajari dan Kadis Pendidikan</p>', 'Apel Siaga Perlindungan Siswa..jpg', ''),
(37, '1398', 'Malam Penganugerahan Bupati Award bagi Camat Dan Lurah Teladan Tahun 2022', '-', 'Taman Andhap Asor Keraton Sumenep', 'Batik Madura', 'Rabu', '16 November 2022', '19:00', '(Kepala Dinas)', '', 'Saya hadir', '', '', NULL, '1', 'Kepala Dinas', '', 'Malam Penganugerahan Bupati Award bagi Camat Dan Lurah Teladan Tahun 2022.jpg', ''),
(38, '1385', 'Haul Sayyid K. Moh Ali.', 'KH. Musleh Adnan. S.Ag', 'Halaman Asta Gumuk Brambang .', 'Muslim', 'Ahad', '04 Desember 2022', '08:00', '(Kepala Dinas)', '', '', '', '', NULL, '0', NULL, NULL, NULL, ''),
(39, '1383', 'Pembukaan Job Fair, Pasar Murah Dan Bhakti Sosial.', '-', 'Gedung Graha Wicaksana Abdi Negara ( KORPI )', 'Yang Berlaku Pada Hari Ini.', 'Rabu', '16 November 2022', '09:00', '(Kepala Dinas)', '', 'Saya hadir ', '', '', NULL, '1', 'Kepala Dinas', '', 'Pembukaan Job Fair, Pasar Murah Dan Bhakti Sosial..jpg', ''),
(40, '1369', 'Pembukaan PORWANAS XIII/2022.', '-', 'Graha Cakrawala. Kanpus Universitas Negeri Malang. Jl. Cakrawala Sumbersari Lowokwaru, Kota Malang.', '-', 'Senin', '21 November 2022', '18:00', '(Kepala Dinas)', '', 'Saya hadir', '', '', NULL, '1', 'Kepala Dinas', '<p>Acara diawali laporan oleh Ketua PWI Jatim dan Porwanas XIII dibuka langsung oleh Menpora diikuti oleh seluruh kontingen dari 33 Provinsi</p>', 'Pembukaan PORWANAS XIII/2022..jpg', ''),
(41, '1411', 'Penyampaian Laporan Pansus Terhadap Raperda Penyetaraan Modal Pemerintah Kab. Sumenep', '-', 'Ruang Graha DRPD', 'Yang Berlaku Pada Hari Itu', 'Jumat', '18 November 2022', '13:00', '(Kepala Dinas),(Kepala Bidang SP)', '', 'Agar hadir mewakili', '', '', NULL, '1', 'Kepala Bidang SP', '', NULL, ''),
(42, '1418', 'Lokakarya Konvergensi Perencanaan dan Penganggaran Penurunan & Pencegahan Stunting.', '-', 'Hotel C1 Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Rabu--Kamis', '23 November 2022', '08:30', '(Kepala Dinas),(Kepala Bidang TI),(Kepala Bidang SP)', '', 'Sdr Lutfi dan Alfian agar hadir', '', '', NULL, '1', 'Kepala Bidang SP', '', 'Lokakarya Konvergensi Perencanaan dan Penganggaran Penurunan & Pencegahan Stunting..jpg', ''),
(43, '1419', 'FGD Laporan Awal Survey Evaluasi Kinerja Pemerintahan Kab. Sumenep Th. 2022', '-', 'Ruang Rapat Trunojoyo Lt.2 Bappeda Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '22 November 2022', '09:30', '(Kepala Dinas)', '', '', '', '', NULL, '0', NULL, NULL, NULL, ''),
(44, '1437', 'Rapat Koordinasi pelaksanaan Kegiatan Harmoni Nada Santri.', '-', '                    Ruang Rapat Asisten Pemerintahan Dan Kesra Setda Kab. Sumenep.                                                                                                                                                                             ', 'Yang Berlaku Pada Hari Itu ', 'Rabu', '23 November 2022', '14:00', '(Kepala Dinas),(Kepala Bidang IKP)', '', 'Agar hadir mewakili, laporkan hasilnya', '', '', NULL, '1', 'Kepala Bidang IKP', '', NULL, ''),
(45, '1444', 'Koordinasi Penyusunan Konsep Agenda Kalender Event 2022.', '', 'Ruang Meeting Cafe Taneyan Desa Kebunan Kec. Kota.', 'Bebas Dan Rapi.', 'Kamis', '24 November 2022', '19:00', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(46, '1445', 'Membahas Realisasi DBHCHT Kab. Sumenep Tahun Anggaran 2021.', '-', 'Ruang Rapat Jokotole Bappeda Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Senin', '28 November 2022', '13:30', '(Kepala Dinas)', '', 'Saya hadir bersama Kabid IP', '', '', NULL, '1', NULL, NULL, NULL, ''),
(47, '1448', 'Sosialisasi Penetapan dan Pengumuman Daftar Pencarian Arsip (DPA)).', '-', 'Ruang Rapat Dinas Perpustakaan  Dan Kearsipan.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '29 November 2022', '08:00', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Ditunjuk yg akan hadir', 'staf arsiparis / sdri. Anni hadir pada acara dimaksud', '', NULL, '0', NULL, NULL, NULL, ''),
(48, '1454', 'Malam Puncak Harmoni Nada Santri.', '-', 'Halaman Pendopo Keraton Sumenep', 'Baju Muslim', 'Minggu', '27 November 2022', '19:00', '(Kepala Dinas)', '', 'Saya hadir ', '', '', NULL, '1', 'Kepala Dinas', '', 'Malam Puncak Harmoni Nada Santri..jpg', ''),
(49, '1453', 'Rapat Staf', 'Yang Berlaku Pada Hari Itu.', 'Ruang Rapat Graha Ariya Wiraraja Lantai II Kab. Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Senin', '28 November 2022', '08:00', '(Kepala Dinas)', '', 'Saya hadir ', '', '', NULL, '1', 'Kepala Dinas', '', 'Rapat Staf.jpg', ''),
(50, '1458', 'High Level Meeting (HLM) Pengendalian Inflasi Di Kab. Sumenep.', 'Ketua Harian TPID Kab. Sumenep', 'Ruang Rapat Graha Ariya Wiraraja Lantai II Kab. Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '29 November 2022', '08:00', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(51, '1467', 'Rapat  Kerja Bupati Bersama Camat, Pendamping Desa Dan Kepala Desa Se Kab. Sumenep.', 'Bapak Bupati Sumenep.', 'Graha Wicaksana Abdi Negara. Korpri', 'Yang Berlaku Pada Hari Itu.', 'Jumat', '02 Desember 2022', '13:00', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(52, '1465', 'Peluncuran 40 Buku Karya  Komunitas Kata Bintang.', 'Bapak Achmad Fauzi.', 'Taman Andap Asor Pendopo Keraton Sumenep.', 'Bebas Rapi', 'Ahad', '04 Desember 2022', '06:00', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Acara ditunda... ', '', '', NULL, '0', NULL, NULL, NULL, ''),
(53, '1470', 'Rapat Gugus Tugas Kabupaten Layak Anak Kab. Sumenep.', '-', 'Ruang Rapat BAPPEDA Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu', 'Senin', '05 Desember 2022', '09:00', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Agar hadir', '', '', NULL, '0', NULL, NULL, NULL, ''),
(54, '1472', 'Pertemuan Evaluasi Pengukuran Dan Publikasi Stunting.', '-', 'Ballroom Hotel C1 Sumenep.', 'Yang Berlaku  Pada Hari Itu.', 'Senin', '05 Desember 2022', '08:00', '(Kepala Dinas),(Kepala Bidang SP)', '', 'Agar hadir, laporkan hasilnya', '', '', NULL, '0', NULL, NULL, NULL, ''),
(55, '1473', 'Rapat Koordinasi Lintas Sektor Dalam Pembentukan Forum Germas Di Kab. Sumenep.', '-', 'Ruang Pertemuan Hotel C1 Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '06 Desember 2022', '08:30', '(Kepala Dinas),(Kepala Bidang IKP)', '', 'Sdr Miko agar hadir', '', '', NULL, '1', 'Kepala Bidang IKP', '', NULL, ''),
(56, '1474', 'Pelantikan Pimpinan BAZNAS Kab. Sumenep.', '-', 'Ruang Rapat Graha Ariya Wiraraja Lantai II Kab. Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Jumat', '02 Desember 2022', '09:00', '(Kepala Dinas)', '', 'Tidak dihadiri, undangan terlambat datang', '', '', NULL, '0', NULL, NULL, NULL, ''),
(57, '1481', 'Rapat Persiapan Upacara Hari Ibu Ke 94. Hari Bela Negara Ke 74, Hari Nusantara Ke 64, Hari Korpri Ke 51 Dan Hari Kesehatan Nasional Ke 58 Tahun 2022.', '-', 'Aula Badan Kesatuan Bangsa Dan Politik Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Senin', '05 Desember 2022', '09:00', '(Kepala Dinas),(Kepala Bidang IKP)', '', 'Agar hadir', '', '', NULL, '1', 'Kepala Bidang IKP', '', NULL, ''),
(58, '1485', 'Rapat Koordinasi Pembahasan Jenis Dan Besaran Tarif Retribusi Daerah.', '-', 'Ruang Rapat Graha Ariya Wiraraja Lantai II Kab. Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Rabu', '07 Desember 2022', '08:30', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Agar hadir', '', '', NULL, '0', NULL, NULL, NULL, ''),
(59, '1486', 'Pelantikan dan Pengambilan Sumpah Jabji Jabatan Fungsional Di Lingkungan Pemkab. Sumenep.', '-', 'Gedung Graha  Wicaksana Abdi Negara. (KORPRI)', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '06 Desember 2022', '08:00', '(Kepala Dinas)', '', 'Saya hadir', '', '', NULL, '1', 'Kepala Dinas', '', 'Pelantikan dan Pengambilan Sumpah Jabji Jabatan Fungsional Di Lingkungan Pemkab. Sumenep..jpg', ''),
(60, '1488', 'Uji Publik Rancangan Penataan Daerah Pemilihan Dan Alokasi Kursi Anggota DPRD Kab. Sumenep Dalam Pemilu Tahun 2024.', '-', 'Hotel De Baghraf.', 'Yang Berlaku Pada Hari Itu.', 'Kamis', '08 Desember 2022', '09:00', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(61, '1496', 'Kegiatan Diseminasi Hasil Penurunan Stunting.', '-', 'Kantor Bappeda Sumenep.', 'Yang Berlaku Pada Hari Itu ', 'Kamis', '08 Desember 2022', '13:00', '(Kepala Dinas),(Kepala Bidang SP)', '', 'Agar hadir', '', '', NULL, '0', NULL, NULL, NULL, ''),
(62, '1499', 'Projek Penguatan Profil Pelajar Pancasila. Tema Tutur Bermakna Selaksa Kisah.', '-', 'SDN Pangarangan III Kec. Kota Sumenep.', 'Bebas Rapi', 'Sabtu', '10 Desember 2022', '12:00', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(63, '1504', 'Rapat Staf.', 'Yang Berlaku Pada Hari Itu.', 'Ruang Rapat Graha Ariya Wiraraja Lantai II Kab. Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Senin', '12 Desember 2022', '08:00', '(Kepala Dinas)', '', 'Saya hadir', '', '', NULL, '1', 'Kepala Dinas', '<p>Rapat staf Sekda tgl 12-12-2022 pkl 08.00 wib</p><ol><li>Rekomitmen temuan BPK, Sumenep menempati urutan nomor 35 dari 38 Kab/Kota dg tingkat oenyelesaian 82℅</li><li>Agar OPD segera menyelesaikan temuan BPK baik finansial maupun non finansial paling lambat tgl 13 Desember 2022 karena tgl 14 Desember 2022 BPK akan melakukan desk di Kabupaten Sumenep</li><li>Input P3DN Kominfo masih dibawah 50℅ yaitu baru 45℅ dan mendapatkan tegoran keras dari Pimpinan.&nbsp;</li><li>Event tahun 2023 akan segera di launching, agar masing2 OPD yg diberi tanggung jawab utk mulai memetakan rencana aksi dan administrasi. Dinas Kominfo menjadi tanggung jawab event otomotif Mercedes Benz di Sumenep</li><li>Pemanfaatan E-Katalog Lokal agar dimaksimalkan oleh OPD</li><li>Percepatan realisasi anggaran 2022 mengingat waktu yang sdh mepet</li><li>Pada minggu ini akan dilakukan evaluasi TEPPRA dan akan menentukan kinerja OPD yg berakibat pada peninjauan kembali terhadap TPP</li><li>Input SIRUP Anggaran tahun 2023 segera dilakukan (kominfo belum input sama sekali)&nbsp;</li><li>Temuan BPK utk tahun 2022 semua OPD agar KIB segera diinput</li><li><br></li></ol>', 'Rapat Staf..jpg', ''),
(64, '1506', 'Undangan Focus Grup Discussion (FGD).', '-', 'Graha Sumekar Universitas Wiraraja.', 'Yang Berlaku Pada Hari Itu.', 'Senin', '12 Desember 2022', '09:00', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(65, '1509', 'Rapat Teknis Persiapan Kalender Event 2023.', 'Sekda', 'Ruang Rapat Sekda Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Senin', '12 Desember 2022', '13:00', '(Kepala Dinas)', '', 'Saya hadir', '', '', NULL, '1', 'Kepala Dinas', '<p>Rapat Persiapan Kick Off Calendar of Events 2023</p><p>Ruang Sekda 12-12-2022 pkl 13.00 wib</p><ol><li>Kegiatan dilaksanakan di depan labang mesem, diawali dg senam pagi massal dan sarapan bersama dg penerbitan voucher Rp. 15.000,- utk stand UMKM</li><li>Tugas komunfo menyiapkan materi CE 2023 (visual), menyiapkanpublikasi kegiatan kick off, menyiapkan visual launching (tayangan visual kick off pada videotron), siaran langsung youtube</li><li><br></li></ol>', 'Rapat Teknis Persiapan Kalender Event 2023..jpg', ''),
(66, '1510', 'Pembukaan dan Pemantauan Seleksi Kompetensi PPPK Tenaga Kesehatan Di Lingkungan Pemerintah Kab. Sumenep.', '-', 'Universitas Bahaudin Mudhary Batuan Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '13 Desember 2022', '07:30', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(67, '1517', 'Undangan Kegiatan Peringatan HAKORDIA Tahun 2022.', '-', ' Gedung Korpri', 'Batik Merah Blangkon Merah.', 'Kamis', '15 Desember 2022', '09:00', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(68, '1522', 'Sosialisasi Pemanfaatan Data Adminduk dan Perjanjian Kerjasama dengan 8 ( Delapan ) OPD.', '-', 'Hotel Musdalifah 1', 'Yang Berlaku Pada Hari Itu.', 'Rabu', '14 Desember 2022', '08:30', '(Kepala Dinas)', '', '', '', '', NULL, '0', NULL, NULL, NULL, ''),
(69, '1523', 'Penandatanganan Perjanjian Kerjasama  Data Kependudukan Dengan 8 (Delapan) OPD.', '-', 'Hotel Musdalifah 1', 'Yang Berlaku Pada Hari Itu.', 'Rabu', '14 Desember 2022', '08:30', '(Kepala Dinas)', '', '', '', '', NULL, '0', NULL, NULL, NULL, ''),
(70, '1524', 'Pemeriksaan Kesehatan bagi Pejabat Pimpinan Tinggi Pratama Dan Seluruh Camat Di Lingkungan PemKab. Sumenep.', '-', 'RSUD dr. MOH> ANWAR Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Rabu', '14 Desember 2022', '08:00', '(Kepala Dinas)', '', '', '', '', NULL, '0', NULL, NULL, NULL, ''),
(71, '1528', 'Permohonan Sebagai Moderator Rakorda Dan Evaluasi Regsosek 2022.  Rapat Koordinasi Dan Evaluasi Pelaksanaan Pendataan Awal Registrasi Sosial Ekonomi.', '-', 'Hall Hotel C1 Lantai 2', 'Yang Berlaku Pada Hari Itu.', 'Senin', '19 Desember 2022', '08:00', '(Kepala Dinas)', '', 'Saya hadir', '', '', NULL, '1', 'Kepala Dinas', '', 'Permohonan Sebagai Moderator Rakorda Dan Evaluasi Regsosek 2022.  Rapat Koordinasi Dan Evaluasi Pelaksanaan Pendataan Awal Registrasi Sosial Ekonomi..jpg', ''),
(72, '1533', 'Rapat Koordinasi Dalam Rangka Persiapan Operasi Kepolisian.', '-', 'Ruang Aula Sutanto Polres Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Kamis', '15 Desember 2022', '13:00', '(Kepala Dinas)', '', '', '', '', NULL, '0', NULL, NULL, NULL, ''),
(73, '1537', 'Rapat Koordinasi Secara Virtual Dalam Rangka Persiapan Operasi Kepolisian Terpusat Dengan Sandi.', '-', 'Ruang Aula Sutanto Polres Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Jumat', '16 Desember 2022', '13:30', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(74, '1544', 'Rapat Persiapan Upacara Hari Ibu Ke 94. Hari Bela Negara Ke 74 Hari Korpri Ke 51 Tahun 2022.', 'Asisten Pemerintahan.', '                    Ruang Rapat Asisten Pemerintahan Dan Kesra Setda Kab. Sumenep.                                                                                                                                                                             ', 'Yang Berlaku Pada Hari Itu ', 'Senin', '19 Desember 2022', '13:30', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(75, '1549', 'Undangan.  Kegiatan Rakor Teknis Dalam Rangka Persiapan Ops Lilin 2022.', '-', 'Ruang Aula Sutanto Polres Sumenep.', 'Yang Berlaku Pada Hari Itu.', '', '19 Desember 2022', '08:30', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(76, '1553', 'Undangan. Rapat Forum Koordinasi Pimpinan Daerah Dengan Tema Tindak Lanjut Rekomendasi MUI.', '-', 'Ruang Rapat Graha Ariya Wiraraja Lantai II Kab. Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Senin', '19 Desember 2022', '09:00', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(77, '1557', 'Rapat Koordinasi Persiapan Penyusunan Laporan Akhir Tahun Dan Evaluasi Hasil Renja Triwulan IV Tahun 2022.', 'Kepala Bappeda ', 'Ruang Rapat Potre Koneng Bappeda.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '20 Desember 2022', '08:00', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(78, '1559', 'Rapat Koordinasi Evaluasi Kegiatan Tahun 2022 Dan Refleksi Kegiatan Th 2023.', '-', 'Ruang Rapat Disdukcapil Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Rabu', '21 Desember 2022', '08:00', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(79, '1569', 'Peluncuran Indeks Masyarakat Digital (IMD) Indonesia Tahun 2022.', '-', 'Virtual Streaming Youtube', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '20 Desember 2022', '08:00', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(80, '1577', 'West Java Digital Services International Festival 2022.', '-', 'Di Kampus IPDN Jatinangor Kab. Sumedang Prov. Jabar', 'Yang Berlaku Pada Hari Itu.', 'Kamis', '22 Desember 2022', '08:30', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(81, '1578', 'Zoom Cloud Meeting Peluncuran Aksi Pencegahan Korupsi Tahun 2023 - 2024 Secara Daring.', '-', 'Ruang Rapat Graha Ariya Wiraraja Lantai II Kab. Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '20 Desember 2022', '09:30', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(82, '1579', 'Sosialisasi Penetapan Partai Politik Peserta Pemilu Tahun 2024.', '-', 'Aplikasi Zoom Meeting', 'Yang Berlaku Pada Hari Itu.', 'Rabu', '21 Desember 2022', '09:00', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(83, '1597', 'Pembukaan Pekan Seni Madura 7 UKM Sanggar Lentera STKIP PGRI Sumenep.', '-', 'Lapangan Kerapan  Sapi Giling Sumenep.', 'Bebas Rapi', 'Senin', '26 Desember 2022', '19:00', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(84, '1588', 'Upacara Memperingati Hari Ibu Ke  94, Hari Bela Negara Ke 74 Dan Hari Ulang Tahun  Korpri Ke 51 Tahun 2022 Di Kab. Sumenep.', '-', 'Halaman Kantor Bupati Sumenep.', 'Full Dress', 'Kamis', '22 Desember 2022', '08:00', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(85, '1602', 'Penerimaan Silaturrahim Kementrian Luar Negeri RI.', '-', 'Ruang Peseban Agung Sultan Abdurrahim.', 'Yang Berlaku Pada Hari Itu.', 'Kamis', '22 Desember 2022', '14:00', '(Kepala Dinas)', '', '', '', '', NULL, '0', NULL, NULL, NULL, ''),
(86, '1615', 'Rapat Penerimaan Studi Tiru Pemerintah Kab. Blitar.', '-', 'Ruang Rapat BAPPEDA Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '27 Desember 2022', '08:30', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(87, '1602', 'Pameran Produk Dan Lomba  Kewirausahaan SMK Swasta Se Kab. Sumenep.', '-', 'Aula RRI Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '17 Januari 2023', '09:00', '(Kepala Dinas),(Kepala Bidang IKP)', '', 'Agar hadir mewakili', '', '', NULL, '0', NULL, NULL, NULL, ''),
(88, '1624', 'Rapat  Reviu Dokumen Telaah Etalase Katalog Lokal.', 'Asisten Perekonomian.', 'Ruang Rapat Asisten Perekonomian.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '27 Desember 2022', '08:30', '(Kepala Dinas),(Kepala Bidang TI)', '', 'Hadir bersama Sdr. Alfian', '', '', NULL, '1', 'Kepala Bidang TI', '', NULL, ''),
(89, '1628', 'Sosialisasi Dan  Optimalisasi Penghimpunan ZIS Untuk Mengentaskan Kemiskinan Di Kab. Sumenep.', 'Bapak Bupati Sumenep.', 'Aula Al Ikhlas Lantai I Kantor Kementrian Agam Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '27 Desember 2022', '08:30', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Sekdis agar hadir mewakili', '', '', NULL, '0', NULL, NULL, NULL, ''),
(90, '1644', 'Rapat Koordinasi Pengelolaan Server LPSE.', '-', 'Ruang Rapat Pengadaan Barang Dan Jasa Setda Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu ', 'Kamis', '29 Desember 2022', '08:30', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(91, '1646', 'Pelaksanaan Rakor Dalam Rangka Menyambut Tahun Baru 2023.', '-', 'Ruang Aula Sutanto Polres Sumenep.', 'Yang Berlaku Pada Hari Itu ', 'Kamis', '29 Desember 2022', '13:00', '(Kepala Dinas)', '', '', '', '', NULL, '0', NULL, NULL, NULL, ''),
(92, '1664', 'Rapat Koordinasi PPKM Secara Vertual.', '-', 'Ruang Rapat Sekda Kab. Sumenep.', 'PDH Khaki', 'Senin', '02 Januari 2023', '08:30', '(Kepala Dinas)', '', 'Saya hadir', '', '', NULL, '1', 'Kepala Dinas', '', 'Rapat Koordinasi PPKM Secara Vertual..jpg', ''),
(93, '02', 'Webinar Dengan Tema  \" Dukungan Pemerintah Dan Pemerintahan Daerah Dlm Mensukseskan Penyelenggaraan Tahun Pemilu 2024\" Secara Virtual.', '-', 'Ruang Rapat Sekda Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '03 Januari 2023', '08:30', '(Kepala Dinas),(Kepala Bidang IKP)', '', 'Agar hadir', '', '', NULL, '0', NULL, NULL, NULL, ''),
(94, '05', 'Arahan Pelaksanaan Calender Of Event 2023', '-', 'Ruang Rapat Graha Ariya Wiraraja Lantai II Kab. Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Rabu', '04 Januari 2023', '09:00', '(Kepala Dinas),(Kepala Bidang IKP)', '', 'Agar hadir', '', '', NULL, '1', NULL, NULL, NULL, ''),
(95, '27', 'Rapat Dewan Pengurus KORPRI Tahun 2013 - 2024', '-', 'Ruang Rapat Sekda Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Senin', '09 Januari 2023', '13:00', '(Kepala Dinas)', '', 'Saya hadir', '', '', NULL, '1', 'Kepala Dinas', '', 'Rapat Dewan Pengurus KORPRI Tahun 2013 - 2024.jpg', ''),
(96, '24', 'Webinar Dengan Tema Memontum Pemilu Serentak Th 2024 Sebagai Wujud Pembinaan Kesadaran Bela Negara.', '-', 'Aplikasi Zoom Meeting', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '17 Januari 2023', '09:00', '(Kepala Dinas),(Kepala Bidang IKP)', '', 'Agar hadir', '', '', NULL, '0', NULL, NULL, NULL, ''),
(97, '53', 'Integrasi SATU SEHAT.', '-', 'Hotel Doubletree by Hilton Surabaya.', 'Yang Berlaku Pada Hari Itu.', 'Selasa Dan Rabu', '17 Januari 2023', '09:00', '(Kepala Dinas),(Kepala Bidang TI)', '', 'Sdr Alfian agar hadir, laporkan hasilnya, berangkat bersama staf Dikes', '', '', NULL, '1', 'Kepala Bidang TI', '', NULL, ''),
(98, '61', 'Webinar Dalam Rangka Mendukung Kelancaran Penyelenggaraan Pemilu Tahun 2024.', '-', 'Ruang Rapat Graha Ariya Wiraraja Lantai II Kab. Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Rabu', '18 Januari 2023', '09:00', '(Kepala Dinas),(Kepala Bidang IKP)', '', 'Agar dihadiri, laporkanhasilnya', '', '', NULL, '0', NULL, NULL, NULL, ''),
(99, '62', 'Pembukaan Pameran Lukisan Sumenep Masa Kejayaan Dalam Rangka Kalender Event Tahun 2023.                                                                                                                                                                                                                                                                                 ', '-', 'Hotel Suramadu Jl. Trunojoyo-Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Rabu', '18 Januari 2023', '12:30', '(Kepala Dinas)', '', 'Saya hadir', '', '', NULL, '1', 'Kepala Dinas', '', 'Pembukaan Pameran Lukisan Sumenep Masa Kejayaan Dalam Rangka Kalender Event Tahun 2023.                                                                                                                                                                        ', ''),
(100, '60', 'Penandatanganan Perjanjian Kinerja Tahun 2023 antara Pimpinan Perangkat Daerah Dengan Bapak Bupati.', '-', 'Ruang Rapat Graha Ariya Wiraraja Lantai II Kab. Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Rabu', '25 Januari 2023', '08:00', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Saya hadir, ingatkan waktunya', '', '', NULL, '1', NULL, NULL, NULL, ''),
(101, '67', 'Silaturrahmi Pra Pelantikan, Calon Pengurus Dewan Penasehat, Dewan Pakar, Dan Majelis Pengurus Daerah Kab. Sumenep.', '-', 'Graha Sumekar Universitas Wiraraja.', 'Yang Berlaku Pada Hari Itu.', 'Jumat', '20 Januari 2023', '13:30', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Saya hadir', '', '', NULL, '1', 'Kepala Dinas', '', 'Silaturrahmi Pra Pelantikan, Calon Pengurus Dewan Penasehat, Dewan Pakar, Dan Majelis Pengurus Daerah Kab. Sumenep..jpg', ''),
(102, '66', 'Penandatanganan Perjanjian Kinerja Tahun 2023 antara Pimpinan Perangkat Daerah Dengan Bapak Bupati.', 'Bapak Bupati Sumenep.', 'Ruang Rapat Graha Ariya Wiraraja Lantai II Kab. Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Rabu', '25 Januari 2023', '08:00', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Saya hadir', '', '', NULL, '1', 'Kepala Dinas', '<ul><li>Pada kegiatan rapat juga ditambahkan acara penyerahan sertifikat dari BPN Kab. Sumenep kepada Pemkab yg diterima lgsg oleh Bupati</li><li><br></li></ul>', 'Penandatanganan Perjanjian Kinerja Tahun 2023 antara Pimpinan Perangkat Daerah Dengan Bapak Bupati..jpg', ''),
(103, '74', 'Rapat Koordinasi Penyelesaian Kasus Pelanggaran Disiplin ASN Dengan Ancaman Hukuman Disiplin Sedang/Berat.', '-', 'Ruang Rapat Inspektorat Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '24 Januari 2023', '09:30', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Saya hadir, arsiparis mendampingi, siapkan materi pemeriksaan', '', '', NULL, '1', 'Kepala Dinas', '', 'Rapat Koordinasi Penyelesaian Kasus Pelanggaran Disiplin ASN Dengan Ancaman Hukuman Disiplin Sedang/Berat..jpg', ''),
(104, '78', 'Rapat Koordinasi.', '-', 'Ruang Kepala Dinas Kesehatan Pengendalian Penduduk Dan KB.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '24 Januari 2023', '09:00', '(Kepala Dinas),(Kepala Bidang TI)', '', 'Sdr Alfuan agar hadir', '', '', NULL, '1', 'Kepala Bidang TI', '', NULL, ''),
(105, '79', 'Webinar Dalam Rangka Persiapan Menghadapi Pemilu Serentak Tahun 2024.', '-', 'Aplikasi Zoom Meeting', 'Yang Berlaku Pada Hari Itu.', 'Rabu', '25 Januari 2023', '08:30', '(Kepala Dinas),(Kepala Bidang IKP)', '', 'Agar hadir virtual', '', '', NULL, '0', NULL, NULL, NULL, ''),
(106, '80', 'Rakor  Tim Terpadu Pengawasan Dan Penerbitan Perizinan Kab. Sumenep.', '-', 'Ruang Rapat Graha Adirasa Lantai II Kantpr  Bupati Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '24 Januari 2023', '09:30', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Agar hadir mewakili', '', '', NULL, '0', NULL, NULL, NULL, ''),
(107, '81', 'Rakor Persiapan Kunjungan Kerja Mentri Keuangan Ke Kab. Sumenep.', '-', 'Ruang Rapat Graha Ariya Wiraraja Lantai II Kab. Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Rabu', '25 Januari 2023', '13:00', '(Kepala Dinas),(Kepala Bidang IKP)', '', 'Agar hadirmewakili', '', '', NULL, '0', NULL, NULL, NULL, ''),
(108, '86', 'Undangan Narasumber Nusantara Terkini. TvOne Jakarta.', '-', 'Pendopo Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Rabu', '25 Januari 2023', '13:00', '(Kepala Dinas)', '', 'Saya hadir, mendampingi Bupati', '', '', NULL, '1', 'Kepala Dinas', '', 'Undangan Narasumber Nusantara Terkini. TvOne Jakarta..jpg', ''),
(109, '87', 'Rapat Koordinasi Persiapan Kalender Event Bulan Februari 2023.', '-', 'Ruang Rapat Sekda Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Kamis', '26 Januari 2023', '09:00', '(Kepala Dinas),(Kepala Bidang IKP)', '', 'Agar hadir mewakili', '', '', NULL, '0', NULL, NULL, NULL, ''),
(110, '94', 'Kunjungan Mentri Keuangan.', '-', 'Ruang Aula Sutanto Polres Sumenep.', 'Yang Berlaku Pada Hari Itu ', 'Kamis', '26 Januari 2023', '09:00', '(Kepala Dinas),(Kepala Bidang TI)', '', 'Koordinator CC112 Agar hadir', '', '', NULL, '1', 'Kepala Bidang TI', '<p>Pimpinan rapat Kapolres Sumenep</p><p>Tempat : Polres Sumenep</p><p>Hadir pada acara : </p><p>Asisten (H. Masuni), Perwakilan Kodim dan unsur OPD serta masing-masing Polsek</p><p>Hasil Rapat :</p><p>- Persiapan Kunjungan kerja Menteri Keuangan, Menkopolhukam, Anggota III BPKRI, Ketua Banggar DPR RI serta Gubernur Jatim, Kapolda Jatim, Pangdam V Brawijaya, Bupati se Madura</p><p>- Disampaikan Bapak Asisten (H. Masuni) akan di agendakan rapat terkait persiapan kunjungan tersebut</p><p>Lokasi kunjungan :</p><p>STKIP PGRI Sumenep, KIHT Guluk-guluk, Lembaga Pendidikan (Mesjid Fatimah) Kec. Manding, Desa Kebunagung sebagai penerima penghargaan, Pendopo</p>', 'Kunjungan Mentri Keuangan..jpg', ''),
(111, '101', 'Rapat Staf.', '-', 'Ruang Rapat Graha Ariya Wiraraja Lantai II Kab. Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Senin', '30 Januari 2023', '08:00', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Saya hadir', '', '', NULL, '1', 'Kepala Dinas', '<p>1. Penertiban Galian C yang dikuasi pribadi (Penambang Ilegal)</p><p>2. Penertiban Lingkungan (DLH, PU, Pol PP, Disperindag)</p><p>&nbsp; &nbsp;<span style=\"white-space:pre\">	</span>- Rumput Liar di Musim penghujan</p><p>&nbsp; &nbsp;<span style=\"white-space:pre\">	</span>- Turba titik bancir cari penyabab dan solusinya</p><p>&nbsp; &nbsp;<span style=\"white-space:pre\">	</span>- Penertiban PKL harus terpantau jangan sampai overload, dan terkait sampahnya</p><p>&nbsp; &nbsp;<span style=\"white-space:pre\">	</span>- Penertiban Rombong PKL jangan sampai di tinggal (Terutama samping BAPPEDA)</p><p>&nbsp; &nbsp;<span style=\"white-space:pre\">	</span>- Kebersihan Taman OPD harusdirawat seperti Area pemda</p><p>3. Perpus harus lebih masif turba ke sekolah2</p><p>4. Data dinsos harus fokus dikawal hulu-hilir agar benar2 dipersiapkan secara matang dan update</p><p>5. Kepala OPD harus seperti Kadis Perkimhub dengan memanfaatkan Group Wa langsung Aksi dan Turba</p><p>6. Efisiensi Agnggaran yang menjadi sorotan terkait rapat2 di hotel dengan biaya besar dengan memanfaatkan Teknologi Digital</p><p><span style=\"white-space:pre\">	</span>- Seperti Rapat Virtual (Rapat Digital dengan konsep Metaverse)</p><p><span style=\"white-space:pre\">	</span>- Kerjasama dengan Perusahaan Digital&nbsp; yang dirancanakan akan dilakukan MOU di bulan Februari dengan melibatkan Diskominfo</p>', 'Rapat Staf..jpg', ''),
(112, '103', 'Rapat Koordinasi.', '-', 'Ruang Aula Sanika Satyawada Polres Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Senin', '30 Januari 2023', '12:30', '(Kepala Dinas),(Kepala Bidang TI)', '', 'Agar hadir mewakili, laporkan hasilnya', '', '', NULL, '1', 'Kepala Bidang TI', '', NULL, ''),
(113, '104', 'Workshop Analisis Peran Dan Potensi Pentahelix Dalam Upaya Percepatan Perkawinan Anak Di Kab. Sumenep.', '-', 'Ruang Rapat Potre Koneng Bappeda.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '31 Januari 2023', '08:00', '(Kepala Dinas),(Kepala Bidang SP)', '', 'Sdr. Lutfi agar hadir sebagai peserta', '', '', NULL, '1', 'Kepala Bidang SP', '', 'Workshop Analisis Peran Dan Potensi Pentahelix Dalam Upaya Percepatan Perkawinan Anak Di Kab. Sumenep..jpg', ''),
(114, '108', 'Lokakarya Awareness Building Dalam Rangka Percepatan Pelaksanaan Satu Data Kab. Sumenep.', '-', 'Hotel De Baghraf.', 'Yang Berlaku Pada Hari Itu.', 'Rabu - Kamis', '01 Februari 2023', '08:30', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Saya hadir', '', '', NULL, '1', NULL, NULL, NULL, ''),
(115, '114', 'Rapat Koordinasi Terkait  Kunjungan Kerja Mentri Keuangan Ke Kab. Sumenep.', '-', 'Ruang Aula Sutanto Polres Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '31 Januari 2023', '09:00', '(Kepala Dinas),(Kepala Bidang TI)', '', 'Agar hadir mewakili', '', '', NULL, '1', '', '', '', ''),
(116, '119', 'Bimbingan Teknis Humas Pemerintah Tahun 2023.', '-', 'Gedung Bakorwil III Malang. Jl. Simpang Ijen No.2 Oro oro Dowo Kec. Klojen Kota Malang. Jatim.', 'Yang Berlaku Pada Hari Itu.', 'Kamis', '02 Februari 2023', '09:00', '(Kepala Dinas),(Kepala Bidang IKP)', '', 'Sarankan, mengingat acara hanya satu hari', '', '', NULL, '0', NULL, NULL, NULL, ''),
(117, '124', 'Dialog Menteri Keuangan Menko Polhulkam dan Ketua Banggar DPR RI APBN Membangun Madura Raya.', '-', 'Pendopo Agung Keraton Sumenep.', 'Batik  Lengan Panjang Memakai Blankon.', 'Kamis', '02 Februari 2023', '13:00', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(118, '125', 'Halaqah Kelembagaan Membangun Sinergitas Dalam Mewujudkan Keluarga Maslahah.', '-', 'Aula PCNU Lantai 01', 'Yang Berlaku Pada Hari Itu.', 'Jumat', '03 Februari 2023', '08:30', '(Kepala Dinas),(Kepala Bidang IKP)', '', 'Sdr. Miko agar hadir mewakili, saya persiapan keberangkatan ke Batu', '', '', NULL, '0', NULL, NULL, NULL, ''),
(119, '137', 'Rakor  Penyusunan Panduan Belanja Hibah Dan Panduan Sosial Khusus Pokes.', '-', 'Ruang Rapat Jokotole Bappeda Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Senin', '06 Februari 2023', '08:00', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Agar hadir, laporkan hasilnya', '', '', NULL, '0', NULL, NULL, NULL, ''),
(120, '144', 'Rapat Persiapan Pelaksanaan Pemeriksaan Interim BPK RI Perwakilan Prov. Jatim Bersama Tim Pemeriksa BPK.', 'Sekda Kab. Sumenep.', 'Ruang Rapat Graha Ariya Wiraraja Lantai II Kab. Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '07 Februari 2023', '13:30', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Agar dihadiri, laporkan hasilnya', '', '', NULL, '0', NULL, NULL, NULL, ''),
(121, '145', 'Pelaksanaan Forum Konsultasi Publik Ranwal RKPD Kab. Sumenep Tahun 2024.', 'Bapak Bupati Sumenep.', 'Ruang Rapat Graha Ariya Wiraraja Lantai II Kab. Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '07 Februari 2023', '08:00', '(Kepala Dinas),(Kepala Bidang TI),(Koordinator TIK)', '', 'Hadir mewakili, saya sbg narasumber BPS di hotel C1', '', 'hadiri dan laporkan hasilnya', NULL, '0', '', '', '', ''),
(122, '146', 'Focus Group Discussion (FGD) Daerah Dalam Angka Th. 2023.', '-', 'Hall Hotel C1 Lantai 2', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '07 Februari 2023', '09:00', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Saya hadir langsung', '', '', NULL, '1', 'Kepala Dinas', '', 'Focus Group Discussion (FGD) Daerah Dalam Angka Th. 2023..jpg', ''),
(123, '149', 'Resepsi Hari Pers Nasional (HPN) 2023 Dan HUT PWI Ke-77.', '-', 'Balai PWI Sumenep. Jl. Dr. Cipto No. 37 Kolor.', 'Yang Berlaku Pada Hari Itu.', 'Kamis', '09 Februari 2023', '09:00', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Saya hadir', '', '', NULL, '1', 'Kepala Dinas', '', 'Resepsi Hari Pers Nasional (HPN) 2023 Dan HUT PWI Ke-77..jpg', ''),
(124, '153', 'Rapat Koordinasi Tingkat Kabupaten.', 'Yang Berlaku Pada Hari Itu.', 'Ruang Rapat Jokotole Bappeda Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Kamis', '09 Februari 2023', '09:00', '(Kepala Dinas),(Kepala Bidang SP),(Koordinator  Statistik Sektoral)', '', 'Agar hadir', '', 'Pak Lutfi yang hadir', NULL, '0', NULL, NULL, NULL, ''),
(125, '156', 'Memperluas Praktek Balik Penguatan OMS Dan Pelaksanaan Tata Kelolah Isu Tematik Di Sumenep.', '-', 'Ruang Rapat BAPPEDA Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Kamis', '09 Februari 2023', '08:00', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(126, '157', 'Sosialisasi Penyusunan Renja PD Th 2024 Melalui SIPD.', '-', 'Ruang Rapat Potre Koneng Bappeda.', 'Yang Berlaku Pada Hari Itu.', 'Kamis', '09 Februari 2023', '09:00', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Agar hadir bersama staf program', '', '', NULL, '0', NULL, NULL, NULL, ''),
(127, '162', 'Rakor Persiapan Peringatan Israk Mikraj Dan Festival Kreasi Anak Yatim Th. 2023.', '-', 'Ruang Rapat Sekda Kab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Jumat', '10 Februari 2023', '08:00', '(Kepala Dinas),(Kepala Bidang IKP)', '', 'Agar hadir', '', '', NULL, '0', NULL, NULL, NULL, ''),
(128, '163', 'Webinar Dengan Tema Melalui Gerakan Nasional Indonesia Bersatu.', '-', 'Aplikasi Zoom Meeting', 'Yang Berlaku Pada Hari Itu.', 'Rabu', '15 Februari 2023', '09:00', '(Kepala Dinas),(Kepala Bidang IKP)', '', 'Agar hadir virtual', '', '', NULL, '0', NULL, NULL, NULL, ''),
(129, '168', 'Undangan Bintek Internet Banking.', '-', 'Kantor Bank Jatim Cab. Sumenep.', 'Yang Berlaku Pada Hari Itu.', 'Selasa', '21 Februari 2023', '03:30', '(Kepala Dinas),(Sekretaris Dinas)', '', 'Staf yg ditunjuk agar hadir', '', '', NULL, '0', NULL, NULL, NULL, ''),
(130, '180', 'Rapat Koordinasi Gugus Tugas  Kabupaten Layak Anak.', '-', 'Ruang Rapat Graha Ariya Wiraraja Lantai II Kab. Sumenep', 'Yang Berlaku Pada Hari Itu.', 'Rabu', '15 Februari 2023', '13:00', '(Kepala Dinas)', '', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, ''),
(131, '181', 'Rapat Koordinasi Dukungan Dan Sinegritas Dalam Rangka Optimalisasi Pelaksanaan Prog. Di Desa.', '-', 'Graha Wicaksana Abdi Negara. Korpri', 'Yang Berlaku Pada Hari Itu.', 'Kamis', '16 Februari 2023', '11:00', '(Kepala Dinas)', '', '', '', '', NULL, '0', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `id` int(255) NOT NULL,
  `id_acara` varchar(255) DEFAULT NULL,
  `Id_pejabat` varchar(255) DEFAULT NULL,
  `dis1` varchar(255) DEFAULT NULL,
  `dis2` varchar(255) NOT NULL,
  `dis3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`id`, `id_acara`, `Id_pejabat`, `dis1`, `dis2`, `dis3`) VALUES
(9, '3', '2', 'Kepala Dinas : Hadiri', '', ''),
(10, '3', '3', 'Kepala Dinas : Hadiri', '', ''),
(11, '3', '4', 'Kepala Dinas : Hadiri', '', ''),
(12, '3', '5', 'Kepala Dinas : Hadiri', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(255) NOT NULL,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  `sub` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama_jabatan`, `sub`) VALUES
(1, 'Kepala Dinas', NULL),
(2, 'Kepala Bidang TI', 'Kepala Dinas'),
(3, 'Sekretaris Dinas', 'Kepala Dinas'),
(4, 'Kepala Bidang IKP', 'Kepala Dinas'),
(5, 'Kepala Bidang SP', 'Kepala Dinas'),
(6, 'Koordinator TIK', 'Kepala Bidang TI'),
(8, 'Koordinator Perangkat Lunak', 'Kepala Bidang TI'),
(9, 'Koordinator Perangkat Keras', 'Kepala Bidang TI'),
(10, 'Koordinator  Statistik Sektoral', 'Kepala Bidang SP'),
(11, 'Koodinator Persandian', 'Kepala Bidang SP'),
(12, 'Kasubag Program dan Perencanaan', 'Sekretaris Dinas'),
(13, 'Kasubag Keuangan', 'Sekretaris Dinas'),
(14, 'Arsiparis ', 'Sekretaris Dinas'),
(15, 'Koordinator Kerjasama Media', 'Kepala Bidang IKP'),
(16, 'Koordinator Informasi Publik', 'Kepala Bidang IKP'),
(17, 'Koordinator Komunikasi Publik', 'Kepala Bidang IKP');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `foto_profile` varchar(255) DEFAULT NULL,
  `online` varchar(255) DEFAULT NULL,
  `akses` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `jabatan`, `hp`, `email`, `foto_profile`, `online`, `akses`) VALUES
(23, 'kadis', 'f0edb48c5323e159a4e661e5d4c1747b', '', 'Kepala Dinas', '', '', '', '0', 'user'),
(24, 'agen_adm', '91a16446a9a4a880b8ee47f243aeb1d3', '', 'Koordinator TIK', '', '', '', '0', 'admin'),
(27, 'kabidti', '653d0c4da3834a458741dcb68f46d63f', '', 'Kepala Bidang TI', '', '', '', '1', 'user'),
(29, 'ann', '11fa1bc3cc7b5722bd1a653dd1636c48', '', 'Staf TU', '', '', '', '1', 'operator'),
(32, 'sekdis', '1469d2497a303d2afe5d14f6cbf31a3b', '', 'Sekretaris Dinas', '', '', '', '0', 'user'),
(33, 'kabidikp', '0a277b2630cf39264290412366c26e6a', '', 'Kepala Bidang IKP', '', '', '', '1', 'user'),
(34, 'kabidsp', '8594f5e0ac160124b2aa6716a457a11c', '', 'Kepala Bidang SP', '', '', '', '0', 'user'),
(35, 'statistik', '74a79054e4485f37a0efb66ae8720cd7', '', 'Koordinator  Statistik Sektoral', '', '', NULL, '0', 'user'),
(36, 'persandian', 'd41d8cd98f00b204e9800998ecf8427e', '', 'Koodinator Persandian', '', '', NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
