-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Mar 2023 pada 08.07
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `02_nurrizkyromadhon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(10) NOT NULL,
  `judul_kegiatan` varchar(255) NOT NULL,
  `isi_kegiatan` tinytext NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `judul_kegiatan`, `isi_kegiatan`, `gambar`) VALUES
(14, 'BPSDMP Kominfo Surabaya bersama Dinas Kominfo Pamekasan Resmi Buka Pelatihan dan Sertifikasi Kompetensi berbasis SKKNI', 'Balai Pengembangan Sumber Daya Manusia dan Penelitian (BPSDMP) Kominfo Surabaya, Selasa 9/3/2021 membuka secara resmi pelaksanaan kegiatan Pelatihan dan Sertifikasi Kompetensi berbasis SKKNI bidang TIK bagi Angkatan Kerja Muda. Kegiatan yang dilaksanakan ', 'GAMBAR KEGIATAN 1.jpg'),
(15, 'Pelatihan dan Sertifikasi Kompetensi Berbasis SKKNI Hadir di Mojokerto', 'BPSDMP Kominfo Surabaya dan Dinas Komunikasi dan Informatika Kota Mojokerto menyelenggarakan kegiatan Pelatihan dan Sertifikasi Kompetensi berbasis SKKNI bidang TIK bagi Angkatan Kerja Muda. Kegiatan yang diadakan di Hotel Ayola Sunrise Mojokerto dibuka o', 'GAMBAR KEGIATAN 2.jpg'),
(16, 'Pelatihan Pengenalan Digital Marketing', 'BPSDMP Kominfo Surabaya dan Gapura Digital bekerjasama menyelenggarakan pelatihan pengenalan digital marketing diikuti oleh 153 orang peserta melalui aplikasi zoom meeting dan youtube channel BPSDMP Kominfo Surabaya. Pelatihan ini bertujuan agar dapat men', 'GAMBAR KEGIATAN 3.png'),
(17, 'Pembukaan Government Transformation Academy Tahun 2021 dan Penandatangan MOU dengan Gubernur NTB', 'Senin, 25 Oktober 2021. Kementerian Komunikasi dan Informatika melalui Badan Penelitian dan Pengembangan Sumber Daya Manusia (Balitbang SDM) menyelenggarakan kegiatan Pembukaan Pelatihan Government Transformation Academy (GTA) Tahun 2021. Kegiatan pembuka', 'GAMBAR KEGIATAN 4.png'),
(18, 'BPSDMP Kominfo Surabaya Resmi Tutup Pelatihan Sertifikasi Kompetensi 2021 di Pamekasan', 'Setelah berlangsung hampir selama 5 hari pelaksanaan pelatihan sertfikasi kompetensi sejak selasa hingga sabtu, 9 sampai dengan 13 Maret 2021, Balai Pengembangan Sumber Daya Manusia dan Penelitian (BPSDMP) Kominfo Surabaya, akhirnya resmi tutup pelatihan ', 'GAMBAR KEGIATAN 5.png'),
(19, 'Tambahan1', 'Tambahan1', 'tambahan 2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
