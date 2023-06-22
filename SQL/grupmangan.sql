-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2023 pada 13.03
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grupmangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `nik` varchar(200) NOT NULL,
  `full_name` varchar(64) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_wa` varchar(18) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `alamat` varchar(32) NOT NULL,
  `id_role` int(11) NOT NULL,
  `tanggal_pendaftaran` date NOT NULL,
  `last_login` date DEFAULT NULL,
  `id_partner` int(11) DEFAULT NULL,
  `last_login_ip` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`nik`, `full_name`, `username`, `password`, `no_wa`, `gender`, `alamat`, `id_role`, `tanggal_pendaftaran`, `last_login`, `id_partner`, `last_login_ip`) VALUES
('1239090', 'Pak suryano', 'Pengajar Handal Hiya', 'iniPassword', '08192381', 'Laki-lak', 'Jl. Ahmad Yani', 2, '2020-01-09', '2023-05-13', 2, '1234'),
('36241123', 'Suriyatno suritne', 'Pencari Ilmu', 'uuuwwwwsss', '08192423', 'Laki-lak', 'Jl. Ahmad Yani', 4, '2020-01-09', '2023-05-13', 2, '1234'),
('asdasd', 'Audrico', 'admin', 'admin', '24123123', 'Laki-lak', 'asdasdd', 1, '2023-05-14', '2023-05-31', NULL, NULL),
('asdsad', 'asdad', 'aasd', 'asd', 'asd', 'Perempua', 'asd', 3, '2023-05-14', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `tanggal_buka` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `harga` int(11) NOT NULL,
  `kelas` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `course`
--

INSERT INTO `course` (`id`, `name`, `tanggal_buka`, `tanggal_berakhir`, `harga`, `kelas`, `description`, `kuota`) VALUES
(1, 'Kelas Public Speaking', '2023-01-02', '2023-06-22', 150000, 'C', 'Pelatihan komprehensif terkait Public Speaking yang akan membantu peserta mengembangkan pengetahuan, keterampilan dan sikap yang diperlukan untuk menjadi seorang marketing hingga public speaker profes', 50),
(2, 'Kelas Menjahit', '2022-07-07', '2022-12-23', 150000, 'A', 'Pelatihan komprehensif terkait menjahit yang akan membantu peserta mengembangkan pengetahuan, keterampilan dan sikap yang diperlukan untuk menjadi seorang penjahit yang telaten dan teliti', 50),
(3, 'Kelas Menulis', '2023-07-06', '2023-12-13', 200000, 'B', 'Pelatihan komprehensif terkait menulis yang akan membantu peserta mengembangkan pengetahuan, keterampilan dan sikap yang diperlukan untuk menjadi seorang penulis yang profesional', 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lampiran`
--

CREATE TABLE `lampiran` (
  `id` int(11) NOT NULL,
  `id_account` varchar(200) NOT NULL,
  `id_tipe` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lampiran`
--

INSERT INTO `lampiran` (`id`, `id_account`, `id_tipe`, `description`, `tanggal_upload`) VALUES
(1, 'asdasd', 3, '0', '2023-05-02'),
(2, 'asdasd', 6, 'Foto KK', '2023-05-02'),
(3, 'asdsad', 3, 'Foto ijazah SMA', '2023-03-15'),
(4, 'asdsad', 5, 'Foto KTP', '2023-02-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `id_pertemuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id`, `nama`, `description`, `location`, `tipe`, `id_pertemuan`) VALUES
(1, 'PPT Dasar Public Speaking', 'Materi untuk dipelajari hari ini, tolong dibaca terlebih dahulu sebelum saya menjelaskan', '/asset/public speaking/dasar public speaking.ppt', 'PPT', 1),
(2, 'PPT Dasar Public Speaking 2', 'Materi untuk dipelajari hari ini, tolong dibaca terlebih dahulu sebelum saya menjelaskan', '/asset/public speaking/dasar public speaking2.ppt', 'PPT', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mentor_course`
--

CREATE TABLE `mentor_course` (
  `id` int(11) NOT NULL,
  `mentor_id` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mentor_course`
--

INSERT INTO `mentor_course` (`id`, `mentor_id`, `course_id`) VALUES
(1, '1239090', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id` int(11) NOT NULL,
  `metode_pembayaran` varchar(200) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id`, `metode_pembayaran`, `tanggal_pembayaran`, `total`) VALUES
(1, 'Qris', '2023-05-01', 150000),
(2, 'M-banking', '2023-02-08', 1000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(200) NOT NULL,
  `nama_kontak` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` varchar(200) NOT NULL,
  `tanggal_pendaftaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `partner`
--

INSERT INTO `partner` (`id`, `nama_perusahaan`, `nama_kontak`, `alamat`, `no_telp`, `tanggal_pendaftaran`) VALUES
(1, 'PT JAYA JAYA JAYA', 'Pak Sudaarsono (Marketing)', 'Jl. Kembang Wangi No.1', '088776655443', '2023-03-07'),
(2, 'PT. IndoCeria', 'Pak Robertus (Marketing)', 'Jl. Suriname No. 4', '0827652342', '2023-05-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `id_metode_pembayaran` int(11) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `id_metode_pembayaran`, `tanggal_pembayaran`, `total`) VALUES
(1, 2, '2023-05-01', 10000000),
(2, 1, '2023-02-08', 8000000),
(3, 1, '2023-05-02', 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertemuan`
--

CREATE TABLE `pertemuan` (
  `id` int(11) NOT NULL,
  `topik` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `id_sponsor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pertemuan`
--

INSERT INTO `pertemuan` (`id`, `topik`, `course_id`, `description`, `id_sponsor`) VALUES
(1, 'Dasar Public Speaking 1', 1, 'Mempelajari Public speaking agar dapat berbicara dengan orang lain dengan baik', 1),
(2, 'Dasar Public Speaking 2', 1, 'Mempelajari cara membuka percakapan dengan orang', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'pengajar'),
(3, 'pendaftar'),
(4, 'student'),
(5, 'alumni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `no_wa` varchar(200) NOT NULL,
  `perusahaan` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `harga` int(200) NOT NULL,
  `id_partner` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sponsor`
--

INSERT INTO `sponsor` (`id`, `name`, `no_wa`, `perusahaan`, `alamat`, `description`, `harga`, `id_partner`, `id_pembayaran`) VALUES
(1, 'Pak sudarsono', '082312312', 'PT. IndoCeria', 'Jl. Jalanin dulu no. 1', 'sponsorship mempromokan sabun', 10000000, 2, 1),
(2, 'Pak supardi', '081247123', 'PT. Jaya Jaya Jaya', 'Jl. Suriname no. 4', 'Menjual peralatan anak', 8000000, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_lampiran`
--

CREATE TABLE `tipe_lampiran` (
  `id` int(11) NOT NULL,
  `tipe` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tipe_lampiran`
--

INSERT INTO `tipe_lampiran` (`id`, `tipe`) VALUES
(1, 'Ijazah SD'),
(2, 'Ijazah SMP'),
(3, 'Ijazah SMA'),
(4, 'Ijazah Kuliah'),
(5, 'Foto KTP'),
(6, 'Foto KK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_course`
--

CREATE TABLE `user_course` (
  `id` int(11) NOT NULL,
  `account_id` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_course`
--

INSERT INTO `user_course` (`id`, `account_id`, `course_id`, `id_pembayaran`) VALUES
(1, '36241123', 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `role` (`id_role`),
  ADD KEY `partner` (`id_partner`);

--
-- Indeks untuk tabel `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lampiran`
--
ALTER TABLE `lampiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lampiran_1` (`id_account`),
  ADD KEY `lampiran_2` (`id_tipe`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materi_1` (`id_pertemuan`);

--
-- Indeks untuk tabel `mentor_course`
--
ALTER TABLE `mentor_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mentor_course_1` (`course_id`),
  ADD KEY `mentor_course_2` (`mentor_id`);

--
-- Indeks untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembayaran_1` (`id_metode_pembayaran`);

--
-- Indeks untuk tabel `pertemuan`
--
ALTER TABLE `pertemuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pertemuan_1` (`course_id`),
  ADD KEY `pertemuan_2` (`id_sponsor`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sponsor_1` (`id_partner`),
  ADD KEY `sponsor_2` (`id_pembayaran`);

--
-- Indeks untuk tabel `tipe_lampiran`
--
ALTER TABLE `tipe_lampiran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_course`
--
ALTER TABLE `user_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_course_1` (`id_pembayaran`),
  ADD KEY `user_course_2` (`course_id`),
  ADD KEY `user_course_3` (`account_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `lampiran`
--
ALTER TABLE `lampiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mentor_course`
--
ALTER TABLE `mentor_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pertemuan`
--
ALTER TABLE `pertemuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tipe_lampiran`
--
ALTER TABLE `tipe_lampiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user_course`
--
ALTER TABLE `user_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `partner` FOREIGN KEY (`id_partner`) REFERENCES `partner` (`id`),
  ADD CONSTRAINT `role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`);

--
-- Ketidakleluasaan untuk tabel `lampiran`
--
ALTER TABLE `lampiran`
  ADD CONSTRAINT `lampiran_1` FOREIGN KEY (`id_account`) REFERENCES `account` (`nik`),
  ADD CONSTRAINT `lampiran_2` FOREIGN KEY (`id_tipe`) REFERENCES `tipe_lampiran` (`id`);

--
-- Ketidakleluasaan untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_1` FOREIGN KEY (`id_pertemuan`) REFERENCES `pertemuan` (`id`);

--
-- Ketidakleluasaan untuk tabel `mentor_course`
--
ALTER TABLE `mentor_course`
  ADD CONSTRAINT `mentor_course_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `mentor_course_2` FOREIGN KEY (`mentor_id`) REFERENCES `account` (`nik`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_1` FOREIGN KEY (`id_metode_pembayaran`) REFERENCES `metode_pembayaran` (`id`);

--
-- Ketidakleluasaan untuk tabel `pertemuan`
--
ALTER TABLE `pertemuan`
  ADD CONSTRAINT `pertemuan_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `pertemuan_2` FOREIGN KEY (`id_sponsor`) REFERENCES `sponsor` (`id`);

--
-- Ketidakleluasaan untuk tabel `sponsor`
--
ALTER TABLE `sponsor`
  ADD CONSTRAINT `sponsor_1` FOREIGN KEY (`id_partner`) REFERENCES `partner` (`id`),
  ADD CONSTRAINT `sponsor_2` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_course`
--
ALTER TABLE `user_course`
  ADD CONSTRAINT `user_course_1` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id`),
  ADD CONSTRAINT `user_course_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `user_course_3` FOREIGN KEY (`account_id`) REFERENCES `account` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
