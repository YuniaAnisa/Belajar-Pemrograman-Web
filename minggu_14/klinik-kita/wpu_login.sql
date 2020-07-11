-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 12:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `id_dokter` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `jeniskelamin` varchar(128) NOT NULL,
  `spesialis` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `nohp` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `jadwal` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `id_dokter`, `name`, `jeniskelamin`, `spesialis`, `alamat`, `nohp`, `email`, `jadwal`) VALUES
(1, 'R0123', 'Rudi', 'laki-laki', 'Dokter anak', 'JL Mawar', '0899999999', 'Rudi@gmail.com', 'Pagi = 08.00-12.00 (Senin - Jumat)\r\nSore = 18.00-21.00 (Sabtu - Minggu)'),
(2, 'A0011', 'Ainun', 'Perempuan', 'Dokter Umum', 'Jl Melati', '0888888888', 'Ainun@gmail.com', 'Pagi = 07.00-12.00 (Senin - Jumat)\r\nSiang = 13.00-17.00 (Sabtu - Minggu)'),
(4, 'A00321', 'asd', 'laki-laki', 'Dokter Umum', 'JL Elang no 20', '0844444444', 'asdasd@gmail.com', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `id_pasien` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `jeniskelamin` varchar(128) NOT NULL,
  `tgl_lahir` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `nohp` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `id_pasien`, `name`, `jeniskelamin`, `tgl_lahir`, `alamat`, `pekerjaan`, `nohp`) VALUES
(2, 'A00001', 'Leylin', 'Perempuan', '1996-04-21', 'JL Melati', 'Marketing', '0822222222'),
(3, 'A00002', 'Kaleid', 'laki-laki', '1994-02-15', 'JL Elang no 20', 'Sales', '0855555555'),
(7, 'a12', 'rio', 'laki-laki', '1995-05-10', 'Jl Merak no 28', 'Guru', '0888888888');

-- --------------------------------------------------------

--
-- Table structure for table `rekamedis`
--

CREATE TABLE `rekamedis` (
  `id` int(11) NOT NULL,
  `id_rekamedis` varchar(128) NOT NULL,
  `id_dokter` varchar(128) NOT NULL,
  `id_pasien` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `gol_darah` varchar(128) NOT NULL,
  `diagnosa` varchar(128) NOT NULL,
  `obat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekamedis`
--

INSERT INTO `rekamedis` (`id`, `id_rekamedis`, `id_dokter`, `id_pasien`, `name`, `gol_darah`, `diagnosa`, `obat`) VALUES
(1, 'RM0001', 'R0123', 'A0001', 'Kaleid', 'A', 'Asam Lambung', 'Ranitidine'),
(2, 'RM0002', 'A0011', 'A00002', 'Lucia', 'O', 'Maag', 'Pro Maag'),
(3, 'RM12', 'A0011', '1234', 'sss', 'B', 'Maag', 'Pro Maag');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id` int(11) NOT NULL,
  `id_resep` varchar(128) NOT NULL,
  `id_rekamedis` varchar(128) NOT NULL,
  `id_pasien` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `id_dokter` varchar(128) NOT NULL,
  `obat` varchar(128) NOT NULL,
  `dosis` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id`, `id_resep`, `id_rekamedis`, `id_pasien`, `name`, `id_dokter`, `obat`, `dosis`) VALUES
(1, 'RP0001', 'RM0001', 'A0001', 'Kaleid', 'A0011', 'Pro Maag', 'Dewasa'),
(2, 'RP0002', 'RM0003', 'A00002', 'Lucia', 'R01234', 'Ranitidine', 'Dewasa'),
(3, 'RP0003', 'RM0004', 'A00005', 'Leylin', 'R01234', 'panadol', 'Dewasa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Yunia Nur Anisa', 'yuniaanisa@gmail.com', 'sun.jpg', '$2y$10$SEQwLPXppyRg8boVdyO.6eM13M.KzZXqmbXYmantO/VXwpeTK70CG', 1, 1, 1594137889),
(4, 'linda', 'linda@gmail.com', 'profil.jpg', '$2y$10$OgoJ1WGW9S7rquHK3D0WsuNd0Oq787F89gJElHqMwR41CKCNeJbtq', 2, 1, 1594138702);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(6, 1, 5),
(7, 1, 7),
(8, 1, 8),
(9, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(5, 'Menu'),
(7, 'Pendataan'),
(8, 'Laporan'),
(9, 'Kelola Data');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 5, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 5, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(9, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(10, 7, 'Data Pasien', 'pendataan', 'fas fa-fw fa-clipboard-list', 1),
(12, 7, 'Data Dokter', 'pendataan/dokter', 'fas fa-fw fa-clipboard-list', 1),
(14, 9, 'Data Rekam Medis', 'kelola_data', 'fas fa-fw fa-clipboard-list', 1),
(15, 9, 'Data Resep', 'kelola_data/resep', 'fas fa-fw fa-clipboard-list', 1),
(16, 8, 'Rekam Medis Pasien', 'laporan/lap_rekamedis', 'fas fa-fw fa-address-book', 1),
(17, 8, 'Resep', 'laporan/lap_resep', 'fas fa-fw fa-book-medical', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekamedis`
--
ALTER TABLE `rekamedis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rekamedis`
--
ALTER TABLE `rekamedis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
