-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2020 pada 00.09
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb-sma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `nopen` int(100) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `school` varchar(128) NOT NULL,
  `noun` varchar(100) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `born_place` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`nopen`, `nik`, `school`, `noun`, `fullname`, `gender`, `born_place`, `date`, `alamat`) VALUES
(1, '320112', 'smpn 1 soreang', '34212', 'amelia cintya dewi', 'Female', 'Bandung', '15 Juli 2004', 'jl du no 4'),
(2, '123', 'smpn 1 soreang', '32134', 'amelia cintya dewi', 'Female', 'Bandung', '14 januari 1999', 'Jl Dipatiukur'),
(7, '320110', 'SMPN 5 Bandung', '13344', 'amelia cintya dewi', 'Female', 'bandung', '14 januari 1999', 'jl. cihanjuang'),
(8, '320112', 'smpn 1 soreang', '34212', 'Rizkana', 'Female', 'bandung', '14 januari 1999', 'Jl Dipatiukur'),
(9, '32037887', 'SMPN 5 Bandung', '899302667', 'Amelia Cintya D', 'Female', 'Bandung', '14 januari 1999', 'Soreang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `raport`
--

CREATE TABLE `raport` (
  `id` int(11) NOT NULL,
  `sem1` int(128) NOT NULL,
  `sem2` int(128) NOT NULL,
  `sem3` int(128) NOT NULL,
  `sem4` int(128) NOT NULL,
  `sem5` int(128) NOT NULL,
  `sem6` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `raport`
--

INSERT INTO `raport` (`id`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`) VALUES
(1, 50, 50, 50, 50, 50, 0),
(2, 50, 50, 50, 50, 50, 0),
(3, 60, 50, 40, 20, 10, 0),
(4, 90, 90, 89, 78, 5, 0),
(5, 90, 89, 66, 74, 11, 76);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `nisn` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `nisn`) VALUES
(11, 'PPDB SMAN', 'ppdbsma@sch.id', 'default.jpg', '$2y$10$u/UVL9eYryp71aBQ/aYcUu/vRQG0lN/Op2y1dkZv9kq8b2JZKbu/i', 1, 1, 1595730082, ''),
(12, 'Amelia Cintya Dewi', 'amel@gmail.com', 'default.jpg', '$2y$10$ZvjET48wXLmfyFLE6rUFuuaIi3OoRCQorW94BlwO23ufJqonCHE4m', 2, 1, 1595730092, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(7, 1, 3),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(15, 2, 10),
(16, 1, 13),
(17, 2, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'menu'),
(10, 'Pendaftaran'),
(11, 'Siswa'),
(13, 'Seleksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt\r\n', 1),
(2, 2, 'My profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-cog', 1),
(5, 3, 'Sub Menu Management', 'menu/submenu', 'fas fa-fw fa-cog', 1),
(7, 1, 'role', 'admin/role', 'fas fa-fw fa-users', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(13, 11, 'Daftar Siswa', 'siswa', 'fas fa-fw fa-users', 1),
(14, 10, 'Biodata', 'pendaftaran', 'fas fa-fw fa-file-alt', 1),
(15, 10, 'Isi biodata', 'pendaftaran/biodata', 'far fa-fw fa-edit', 1),
(16, 10, 'Raport', 'pendaftaran/raport', 'fab fa-fw fa-wpforms', 1),
(18, 13, 'Data Pendaftar', 'seleksi', 'fab fa-fw fa-wpforms', 1),
(19, 13, 'Hasil Seleksi', 'seleksi/hasilseleksi', 'fab fa-fw fa-wpforms', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`nopen`);

--
-- Indeks untuk tabel `raport`
--
ALTER TABLE `raport`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `nopen` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `raport`
--
ALTER TABLE `raport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
