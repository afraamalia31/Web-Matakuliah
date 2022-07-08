-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2021 pada 04.20
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_20014547`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `id_course` int(11) NOT NULL,
  `title_course` varchar(255) NOT NULL,
  `description_course` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id_course`, `title_course`, `description_course`) VALUES
(2, 'Perancangan Web 2 ', 'Dosen Pengampu : Firman Asharudin, S.Kom, M.Kom\r\n,Kode Matkul : DT170\r\n,Kelas D3 Teknik Informatika 01 dan 02'),
(14, 'Struktur Data', 'Dosen Pengampu : Ahlihi Masruro, M.Kom\r\n,Kode Matkul : DT152 \r\n,Kelas D3 Teknik Informatika 02\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertemuan`
--

CREATE TABLE `pertemuan` (
  `id_material` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `title_material` varchar(255) NOT NULL,
  `description_material` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pertemuan`
--

INSERT INTO `pertemuan` (`id_material`, `course_id`, `title_material`, `description_material`) VALUES
(39, 2, 'Menjelaskan konsep dasar website', 'Website merupakan suatu aplikasi yang berisikan dokumen- dokumen multimedia (teks, gambar, animasi, video) di dalamnya yang menggunakan protokol HTTP (hypertext Transfer protocol) dan untuk mengaksesnya menggunakan perangkat lunak yang disebut browser. \r\n '),
(40, 2, 'Variable', 'Variabel digunakan untuk menyimpan suatu nilai, seperti text, angka atau array. Ketika sebuah variabel dibuat, variabel tersebut dapat dipakai berulang-ulang. \r\n'),
(41, 2, 'Percabangan', 'Struktur IF dalam bahasa pemograman adalah sebuah struktur logika untuk membuat percabangan alur program. \r\nDengan menggunakan struktur IF dapat mengatur apakah sebuah perintah akan dijalankan atau tidak tergantung kepada kondisinya.\r\n'),
(42, 2, 'Perulangan', 'Loops are used to execute the same block of code again and again, as long as a certain condition is true.\r\n\r\nIn PHP, we have the following loop types:\r\nwhile - loops through a block of code as long as the specified condition is true\r\ndo...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true\r\nfor - loops through a block of code a specified number of times\r\nforeach - loops through a block of code for each element in an array\r\n'),
(43, 2, 'Mengenal Operasi dasar PHP', 'Setelah praktikum ini, praktikan diharapkan dapat :\r\n1.Mahasiswa dapat mengimplementasikan tipe data menggunakan php.\r\n2.Mahasiswa dapat mengimplementasikan variable menggunakan php.\r\n3.Mahasiswa dapat mengimplementasikan konstanta menggunakan php.\r\n4.Mahasiswa dapat mengimplementasikan operator menggunakan php.\r\n'),
(44, 2, 'Percabanga', 'Setelah praktikum ini, praktikan diharapkan dapat :\r\n1. Mahasiswa dapat mengimplementasikan pernyataan if.\r\n2. Mahasiswa dapat mengimplementasikan pernyataan if else.\r\n3. Mahasiswa dapat mengimplementasikan pernyataan if else if.\r\n4. Mahasiswa dapat mengimplementasikan pernyataan switch.'),
(45, 14, 'Review Array', 'Membahas Review List dan KRS, list satu dimensi, list multidimensi, fungsi list yaitu menyimpan banyak item data, memiliki ukaran dan memudahkan manipulasi.'),
(46, 14, 'Riview List (Array)', 'Praktikum memahami konsep penyimpanan dalam Arrat (List).'),
(47, 14, 'Pencarian (Searching)', 'Membahas Materi Sequential Search - Beruntun dan Binary Search  - Data terurut, bagi dua.'),
(48, 14, 'Pencarian Binary', 'Search yang berikutnya adalah binary search, jika dalam Sequential kita bisa gunakan untuk list yang telah terurut maupun yang belum terurut. Maka untuk searching secara binary hanya bisa digunakan untuk data yang telah terurut. Secara garis besar algoritma Binary adalah {bagi data menjadi 2, cocokkan data, bandingkan data (ketiga proses tersebut diulang sampai kondisi data ditemukan atau data tidak bisa dibagi lagi)'),
(49, 14, 'Pengurutan 1', 'Shorting : membahas macam-macam pengurutan ; The Bubble Sort, The Selection Sort, dan The Insertion Sort.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_course`);

--
-- Indeks untuk tabel `pertemuan`
--
ALTER TABLE `pertemuan`
  ADD PRIMARY KEY (`id_material`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pertemuan`
--
ALTER TABLE `pertemuan`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pertemuan`
--
ALTER TABLE `pertemuan`
  ADD CONSTRAINT `pertemuan_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `matkul` (`id_course`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
