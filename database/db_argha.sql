-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2020 pada 09.25
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_argha`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_akun` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `email`, `password`, `role`) VALUES
('01', 'akbar@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'HRD'),
('02', 'rara', '827ccb0eea8a706c4c34a16891f84e7b', 'Coba'),
('03', 'ekomh13@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Kepala HRD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Belum Ditentukan'),
(2, 'Tukang '),
(3, 'Ob'),
(4, 'Tukang Galon'),
(5, 'Coba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelamar`
--

CREATE TABLE `tb_pelamar` (
  `id_pelamar` int(11) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `tamat_sekolah` varchar(25) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `ft_ktp` varchar(50) NOT NULL,
  `skck` varchar(50) NOT NULL,
  `ijazah` varchar(50) NOT NULL,
  `ft_transkip` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelamar`
--

INSERT INTO `tb_pelamar` (`id_pelamar`, `nama_lengkap`, `alamat`, `tmpt_lahir`, `tanggal_lahir`, `jenis_kelamin`, `tamat_sekolah`, `jurusan`, `ft_ktp`, `skck`, `ijazah`, `ft_transkip`, `no_telp`) VALUES
(1, 'Zahra', 'Coba', 'Coba', '2020-07-01', 'Perempuan', 'SMA', 'RPL', 'WSL 2.PNG', 'Sial.PNG', 'CI 4.PNG', 'zz.PNG', '08221861428'),
(2, 'Rara', 'Amerika', 'Bogor', '2020-01-01', 'Perempuan', 'SMA', 'RPL', '4edb47e007b2f08885b08f3bab8791af.jpg', '7b29cb8106717e2a75325bac5e8b619c.jpg', '70357b5ba1d5c2a007f3746064197407.jpg', 'aa81f5c786d2af8aa9f72b9d08056efe.jpg', '08221861428'),
(3, 'Nara', 'Indonesia', 'Citeureup', '2019-12-17', 'Laki - Laki', 'SMA', 'HUKUM', 'e6c763e56e839d2674cda51f85199f1c.jpg', 'c46f9598be3b81732d815397c8e6e568.jpg', '3063e0786bf05c8c115142938c6befce.jpg', 'c42870b43ca2dcba12dd80ebec667c1d.jpg', '08221861428'),
(4, 'Rendi Ra', 'Nepal', 'Indo', '2020-07-03', 'Laki - Laki', 'SMA', 'IPA', 'ab7667a87bd94413c4eea26e70e1914b.jpg', 'd5bf00ba088f382bd81d751ec8b52ce9.jpg', 'a82d632e3d81fe987ff778d0ec7527a2.jpg', '1c95c4bfa1b4f4fb1af4eddca5a8f863.jpg', '08221861428'),
(5, 'Caca', 'Cina', 'Tiongkok', '2020-07-25', 'Perempuan', 'SMK', 'MP', '4eb9e1951c48c2028dd2b1b9c2086caf.jpg', '5b0b68d85ebf349428091aec68fb992b.jpg', '65f6f88bf067740a1e0472fe91b923fd.jpg', '123e9176c2d711bb64904cd781de1e20.jpg', '08221861428');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_terima_pelamar`
--

CREATE TABLE `tb_terima_pelamar` (
  `id_pelamar_terima` int(11) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_terima_pelamar`
--

INSERT INTO `tb_terima_pelamar` (`id_pelamar_terima`, `id_pelamar`, `id_jabatan`) VALUES
(1, 1, 2),
(3, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tolak_pelamar`
--

CREATE TABLE `tb_tolak_pelamar` (
  `id_pelamar_tolak` int(11) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tolak_pelamar`
--

INSERT INTO `tb_tolak_pelamar` (`id_pelamar_tolak`, `id_pelamar`, `id_jabatan`) VALUES
(1, 3, 0),
(2, 4, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indeks untuk tabel `tb_terima_pelamar`
--
ALTER TABLE `tb_terima_pelamar`
  ADD PRIMARY KEY (`id_pelamar_terima`);

--
-- Indeks untuk tabel `tb_tolak_pelamar`
--
ALTER TABLE `tb_tolak_pelamar`
  ADD PRIMARY KEY (`id_pelamar_tolak`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  MODIFY `id_pelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_terima_pelamar`
--
ALTER TABLE `tb_terima_pelamar`
  MODIFY `id_pelamar_terima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_tolak_pelamar`
--
ALTER TABLE `tb_tolak_pelamar`
  MODIFY `id_pelamar_tolak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
