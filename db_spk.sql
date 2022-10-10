-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Okt 2022 pada 12.28
-- Versi server: 10.6.7-MariaDB-2ubuntu1.1
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `kriteria` varchar(32) NOT NULL,
  `bobot` float NOT NULL,
  `keterangan` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `kriteria`, `bobot`, `keterangan`) VALUES
(2, 'Penghasilan Orang Tua', 5, 'C1'),
(3, 'Jumlah Tanggungan', 5, 'C2'),
(11, 'Yatim Piatu', 4, 'C3'),
(12, 'Nilai Raport', 4, 'C4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(10, '2022-09-07-023402', 'App\\Database\\Migrations\\UserMigration', 'default', 'App', 1662697145, 1),
(11, '2022-09-07-024337', 'App\\Database\\Migrations\\SiswaMigration', 'default', 'App', 1662697145, 1),
(12, '2022-09-09-041210', 'App\\Database\\Migrations\\UserMigration', 'default', 'App', 1662697163, 2),
(13, '2022-09-09-102437', 'App\\Database\\Migrations\\Kriteria', 'default', 'App', 1662721791, 3),
(14, '2022-09-29-135140', 'App\\Database\\Migrations\\PesertaMigration', 'default', 'App', 1664529786, 4),
(15, '2022-09-29-153408', 'App\\Database\\Migrations\\NilaiMigration', 'default', 'App', 1664529786, 4),
(16, '2022-10-08-013442', 'App\\Database\\Migrations\\SubkriteriaMigration', 'default', 'App', 1665193293, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `nisn` int(32) NOT NULL,
  `penghasilan` float NOT NULL,
  `tanggungan` int(11) NOT NULL,
  `nilai` float NOT NULL,
  `yatimpiatu` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id`, `nisn`, `penghasilan`, `tanggungan`, `nilai`, `yatimpiatu`) VALUES
(19, 123456, 900000, 4, 80, 'Lengkap'),
(20, 12345678, 850000, 3, 84, 'Lengkap'),
(21, 3, 1000000, 2, 90, 'Yatim'),
(22, 4, 1200000, 3, 80, 'Piatu'),
(23, 5, 900000, 5, 91, 'Yatim Piatu'),
(24, 6, 1500000, 1, 79, 'Lengkap'),
(25, 7, 1700000, 2, 91, 'Lengkap'),
(26, 8, 850000, 3, 90, 'Piatu'),
(27, 9, 2000000, 5, 90, 'Yatim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nama_siswa` varchar(64) NOT NULL,
  `jenis_kelamin` varchar(35) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nisn`, `nama_siswa`, `jenis_kelamin`, `alamat`) VALUES
(2, '123456', 'Valensi Cenalia Laju', 'laki-laki', 'Nusa Dua, Bali'),
(16, '12345678', 'Claudia Arima Jesica', 'laki-laki', 'Labuan Bajo'),
(17, '0003', 'Filomena Elsaviani', 'perempuan', 'Denpasar'),
(18, '0004', 'Helena Yusta Sari', 'laki-laki', 'Nusa Dua'),
(19, '0005', 'Yuliana Gale', 'perempuan', 'Jimbaran'),
(20, '0006', 'Aleksander Adityo', 'laki-laki', 'Denpasar'),
(21, '0007', 'Sony Sufani', 'perempuan', 'Denpasar'),
(22, '008', 'Katarina Lian', 'laki-laki', 'Nusa Dua'),
(23, '0009', 'Andika Sufani', 'laki-laki', 'Badung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `subkriteria` varchar(32) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `subkriteria`
--

INSERT INTO `subkriteria` (`id`, `id_kriteria`, `subkriteria`, `nilai`) VALUES
(13, 2, 'Rp. 800.000 - Rp. 1.200.000', 4),
(14, 2, '> Rp. 1.200.000 - Rp. 1.800.000', 3),
(15, 2, '> Rp. 1.800.000 - Rp. 2.500.000', 2),
(16, 2, '< Rp. 800.000', 5),
(17, 2, '> Rp. 2.500.000', 1),
(19, 3, '4 Anak', 4),
(20, 3, '5 Anak', 5),
(21, 3, '3 Anak', 3),
(22, 3, '2 Anak', 2),
(23, 3, '1 Anak', 1),
(24, 11, 'Lengkap', 1),
(25, 11, 'Yatim Piatu', 5),
(26, 11, 'Yatim', 4),
(27, 11, 'Piatu', 3),
(29, 12, '> 90', 5),
(30, 12, '> 85 - 90', 4),
(32, 12, '> 75 - 85', 3),
(33, 12, '> 60 - 75', 2),
(34, 12, '< 60', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(32) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama_user`, `jabatan`, `username`, `password`, `last_login`) VALUES
(30, 'Coba Saja', 'Kepala Sekolah', 'user', '$2y$10$aWYsFysjKY3zeT/afT6QeO0VO.OMkcHLZmzbxunzRSqF4fpJ8u0dq', '2022-09-09 08:47:53'),
(31, 'Fredik Stefan', 'Admin', 'admin', '$2y$10$KmFocfv62tAnubLGioCOWOOlKuKZCiXyzalK9CLnLAfGswGOW1bPi', '2022-10-09 22:30:10'),
(34, 'asdasd', 'Admin', 'stefan', '$2y$10$j14NOr/zfhLgY8o/8DehKOUgtKCecmL/0p0jomaRyv9YoDQyCYWj2', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
