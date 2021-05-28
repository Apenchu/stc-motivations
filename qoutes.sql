-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 03:09 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qoutes`
--

-- --------------------------------------------------------

--
-- Table structure for table `motivation`
--

CREATE TABLE `motivation` (
  `id` int(11) NOT NULL,
  `judul-thumbnail` varchar(300) NOT NULL,
  `isi` varchar(300) NOT NULL,
  `judul-qoutes` longtext NOT NULL,
  `bagian1` longtext NOT NULL,
  `bagian2` longtext NOT NULL,
  `bagian3` longtext NOT NULL,
  `bagian4` longtext NOT NULL,
  `instagram` longtext NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motivation`
--

INSERT INTO `motivation` (`id`, `judul-thumbnail`, `isi`, `judul-qoutes`, `bagian1`, `bagian2`, `bagian3`, `bagian4`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'Passion', 'Apakah kalian pernah berpikir bahwa kalian tidak memiliki passion?', 'Passion', 'Mugkin kalian pernah melihat seseorang yang sangat hebat sekali di bidang tertentu, sedangkan kalian tidak hebat di bidang itu. Disitulah kalian merasa iri dan berpikir bahwa kalian tidak memiliki passion di bidang itu, karena sudah berusaha keras tetapi tetap tidak hebat seperti dia.', 'Menurut saya, passion itu tidak perlu dicari. mengapa? Karena dari saat kita lahir kita memang tidak memiliki passion yang hebat. Mereka yang hebat di bidang tertentu pasti telah melewati banyak sekali tantangan.', 'Lalu bagaimana caranya agar saya memiliki passion? dengan menekuni bidang yang kalian sukai, tentu boleh lebih dari satu, misalkan kalian menyukai gambar, memasak, musik, dan yang lainnya. Jika memang tertarik dengan bidang itu, kalian cobalah untuk menekuni bidang itu.', 'Nah jika kalian mencoba dan ketika sedang di tengah-tengah perjalanan kalian bosan, capek, lelah, merasa susah lalu menemukan hal lain yang dapat membuat kalian tertarik, kalian boleh meninggalkan yang sebelumnya. Sampai saat kalian menekuni suatu bidang yang kalian sudah bosan, capek, lelah tetapi masih tetap dilakukan.', 'https://www.instagram.com/apenchu/', '2021-05-24 00:39:39', '2021-05-24 00:39:39'),
(2, 'Berusaha', 'Apakah kalian pernah marah, sedih, dendam, karena hasil yang kalian dapatkan tidak bagus?', 'Berusaha', '\"Mengapa aku mendapatkan hasil yang jelek tidak seperti dia hasilnya bagus, padahal usahanya tidak sekeras aku.\"', 'Mungkin menurut kalian usaha kalian sudah yang terbaik, dan pantas mendapatkan hasil yang terbaik pula. Perlu diingat bahwa usaha dan hasil itu perlu seimbang, jika kalian ingin mendapatkan hasil yang terbaik maka harus berusaha lebih baik pula. Jika usahamu kurang, hasil yang didapatkan akan setara dengan usaha yang kalian keluarkan.\r\n', 'Oleh karena itu, kamu tidak boleh berpikir bahwa usahamu lebih baik dari siapapun, karena kamu juga tidak mengetahui seberapa keras mereka berusaha. Dan ketika hasil yang didapatkan tidak sesuai dengan ekspektasi, janganlah kalian marah, emosi, dan sedih yang berlebihan.', 'Jika memang terjadi anggaplah memang segitu hasil yang bisa kalian dapatkan dari usaha kalian. Setelah itu bangkitlah dan raihlah hasil yang lebih dari sebelumnya.', 'https://www.instagram.com/apenchu/', '2021-05-24 00:41:12', '2021-05-24 00:41:12'),
(3, 'Proses', 'Kalian sedang malas dengan proses yang kalian jalani?', 'Proses', '\"Duh, banyak banget sih yang harus dipelajari. Kalo gini ma mending ga perlu belajar.\" Jangan seperti ini ya teman-teman Internet. Kalian harus sabar jika ingin menjadi hebat suatu saat nanti.', 'Orang-orang yang kalian kagumi itu mereka juga melewati jalan awal yang sama dengan kalian yaitu belajar dari dasar. Hanya saja perbedaannya mereka sangat sabar dengan proses yang sedang mereka jalani, sampai saat di mana mereka dikagumi oleh orang-orang seperti kalian.', 'Jika kalian ingin menjadi seperti orang yang kalian kagumi maka kalian juga harus bersabar dengan proses yang kalian jalani saat ini. Tetapi saat kalian sedang merasa bosan, capek, dan menginginkan istirahat, mengapa tidak berhenti terlebih dahulu?\r\nTakut tertinggal?', 'Tidak apa-apa istirahatlah lalu belajar kembali saat kalian menginginkannya, karena lebih baik belajar dengan kondisi bahagia sehingga kalian dapat menikmati prosesnya juga.\r\nJangan terpaku oleh waktu, karena semua orang memiliki waktu yang berbeda untuk menjadi hebat. \r\n\"Semua orang memiliki gilirannya masing-masing.\"', 'https://www.instagram.com/apenchu/', '2021-05-24 00:43:15', '2021-05-24 00:43:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motivation`
--
ALTER TABLE `motivation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `motivation`
--
ALTER TABLE `motivation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
