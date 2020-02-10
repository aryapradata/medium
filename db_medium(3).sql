-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 05:58 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_medium`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `content_id` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `username`, `content_id`, `comment`) VALUES
(17, 'cindywijaya', 28, 'cindy apah ');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `media` text DEFAULT NULL,
  `status_stories` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `username`, `title`, `content`, `media`, `status_stories`) VALUES
(28, 'cindywijaya', 'cerita1', 'hai cindy wijaya', '3519491.jpg', 1),
(29, 'cindywijaya', 'cerita2', 'Korban tewas dalam penembakan brutal yang dilakukan seorang tentara di Thailand bertambah satu jadi 21 orang. Korban tewas terakhir itu merupakan anggota pasukan keamanan Thailand yang berupaya menghentikan amukan pelaku dalam serangan di mal Terminal 21.\r\n\r\nDua anggota pasukan lainnya terluka dalam serangan tersebut, ungkap Menteri Kesehatan Masyarakat Thailand, Anutin Charnvirakul saat penembakan susulan bergema dari pusat perbelanjaan Terminal 21 di kota Nakhon Ratchasima, Minggu (9/2/2020).\r\n\r\nBaca Juga\r\n\r\n    Tentara Pelaku Penembakan di Thailand Belum Tertangkap, Diduga Sembunyi di Mal\r\n\r\nPenembakan bermula pada Sabtu 8 Februari malam ketika tentara itu menembaki sebuah rumah sebelum bergeser ke pangkalan militer dan kemudian ke pusat perbelanjaan di Nakhon Ratchasima, yang berada 250 Km dari ibu kota Bangkok, kata polisi.\r\n\r\n\"Kami tidak tahu mengapa pelaku melakukan ini. Tampaknya ia gila,\" kata juru bicara Kementerian Pertahanan Kongcheep Tantrawanit.', '4314621.jpg', 1),
(30, 'cindywijaya', 'cerita3', 'jahsiuhwedw', 'ac33fda087da31a81d2f4edf21c334a81.jpg', 1),
(31, 'cindywijaya', 'cerita4', 'jwefhuwehf', 'LOGO_UNIVERSITAS_SRIWIJAYA.png', 1),
(32, 'cindywijaya', 'cerita5', 'jhwcijwkdnc', 'LOGO_UNIVERSITAS_SRIWIJAYA1.png', 0),
(33, 'cindywijaya', 'cerita6', 'jwqdbhwedijwen', '3519492.jpg', 0),
(34, 'cindywijaya', 'cerita7', 'Penelitian yang dilakukan di Amerika Serikat menunjukkan orang yang terlihat sehat namun ternyata memiliki kualitas tidur yang sangat buruk, seperti mengalami gangguan tidur di malam hari sehingga menyebabkan kelelahan di siang hari saat beraktivitas, kemungkinan terserang penyakit Alzheimer.\r\n\r\n“Berdasarkan bukti yang ditemukan sebelumnya, kualitas tidur mungkin dapat meningkatkan risiko penyakit Alzheimer melalui banyak cara. Misalnya, gangguan yang kerap dialami saat tidur di malam hari atau kurang tidur menyebabkan penumpukan plak amiloid. Hal tersebut membuat otak terus bekerja, bahkan saat tidur sekalipun,” jelas Barbara B. Bendlin, dari Universitas Wisconsin – Madison di Amerika Serikat.\r\n\r\nAmiloid sendiri merupakan protein yang tumbuh dalam sel pada sumsum tulang belakang. Jika pertumbuhannya terganggu, amiloid akan berubah menjadi plak yang nantinya menggangu kerja otak.\r\n\r\nStudi yang dipublikasikan dalam sebuah jurnal neurologi tersebut menggunakan 101 orang partisipan dengan usia rata-rata 63 tahun sebagai subjek penelitian yang memiliki daya ingat cukup baik namun berisiko terserang penyakit Alzheimer. Ada dua kemungkinan mengapa ratusan partisipan yang dapat berpikir secara normal dan mengingat semuanya dengan baik di usia senja berisiko terserang Alzheimer.\r\n\r\n\r\nPertama, faktor keturunan, apakah orang tua partisipan mengidap penyakit sama atau tidak. Kedua, adanya gen bawaan bernama apolipoprotein (APOE), yang dapat meningkatkan risiko penyakit Alzheimer pada seseorang. Sumsum tulang belakang para partisipan yang kualitas tidurnya cukup dan buruk diambil untuk diteliti.\r\n\r\nADVERTISEMENT\r\n\r\n\r\nHasilnya, partisipan dengan kualitas tidur buruk menunjukkan tanda-tanda biologis seperti pertumbuhan plak pada otak, kerusakan sel otak, serta inflamasi pada tulang belakang sebagai penyebab utama Alzheimer. Namun, tidak semua orang yang kerap mengalami gangguan tidur pada malam hari, seperti obstructive sleep apnea (ngorok) akan berisiko terserang Alzheimer.\r\n\r\nStudi tersebut juga menemukan tidak adanya kaitan antara Alzheimer dengan obstructive sleep apnea, keadaan di mana saluran udara terhambat saat tidur.\r\n\r\n“Studi yang kami lakukan menunjukkan bahwa gangguan tidur yang kerap dialami para orang tua tidak menghambat fungsi kognitif otak,” tutur Bendlin.\r\n\r\nAlzheimer\r\n \r\nkurang tidur\r\n \r\nPenyakit\r\n \r\n\r\nDirekomendasikan untukmu\r\niklan oleh  \r\nBingung Pake Internet Buat Di Rumah? #PakeBiznet Lebih Cepat!\r\nBingung Pake Internet Buat Di Rumah? #PakeBiznet Lebih Cepat!\r\nBiznet Home\r\nWalau Sehat, Awas jadi Pembawa Virus Corona\r\nWalau Sehat, Awas jadi Pembawa Virus Corona\r\nImunoterapi, Metode Baru Lawan Kanker dan Memperpanjang Hidup\r\nImunoterapi, Metode Baru Lawan Kanker dan Memperpanjang Hidup\r\nDubai Properties Are Up For Sale And The Price Might Interst You\r\nDubai Properties Are Up For Sale And The Price Might Interst You\r\nDubai Properties | Search Ads\r\nIntip 6 Keunggulan Beras Merah dari Beras Putih untuk Kesehatan\r\nIntip 6 Keunggulan Beras Merah dari Beras Putih untuk Kesehatan\r\nKenali Gejala Infeksi Virus Corona selain Demam dan Batuk\r\nKenali Gejala Infeksi Virus Corona selain Demam dan Batuk\r\nAwas, Kebiasaan Buruk Ini Berbahaya buat Otak\r\nAwas, Kebiasaan Buruk Ini Berbahaya buat Otak\r\nAwas, 2 Shio Ini Akan Buntung di Tahun Tikus Logam 2020\r\nAwas, 2 Shio Ini Akan Buntung di Tahun Tikus Logam 2020\r\n \r\n\r\nLihat Juga\r\n\r\n\r\n\r\nTERKAIT\r\nKurang Tidur pada Anak, Bisa Akibatkan Masalah Kesehatan MentalKurang Tidur pada Anak, Bisa Akibatkan Masalah Kesehatan Mental2 hari lalu\r\nMata Panda Menganggu, Penyebabnya Bukan Hanya Kurang TidurMata Panda Menganggu, Penyebabnya Bukan Hanya Kurang Tidur7 hari lalu\r\nPakar Ingatkan Bakteri Kusta yang Bisa Kebal Obat, Cek SebabnyaPakar Ingatkan Bakteri Kusta yang Bisa Kebal Obat, Cek Sebabnya8 hari lalu\r\nRemaja dengan Penyakit Langka Jalani Operasi PlastikRemaja dengan Penyakit Langka Jalani Operasi Plastik12 hari lalu\r\nREKOMENDASI\r\nKanker Tiroid Jarang Menyerang Laki-laki tapi Lebih GanasKanker Tiroid Jarang Menyerang Laki-laki tapi Lebih Ganas16 jam lalu\r\n5 Tipe Introvert yang Perlu Anda Tahu5 Tipe Introvert yang Perlu Anda Tahu22 jam lalu\r\nBerstatus Gawat Darurat, Kenapa Virus Corona Belum Punya Vaksin? Berstatus Gawat Darurat, Kenapa Virus Corona Belum Punya Vaksin?1 hari lalu\r\nCepat Merasa Lesu? Yuk Tambah Stamina dengan 13 Makanan Ampuh IniCepat Merasa Lesu? Yuk Tambah Stamina dengan 13 Makanan Ampuh Ini1 hari lalu\r\nFOTO\r\nMengenal Amanda Nurani, Penjual Tahu Cantik Lulusan S2Mengenal Amanda Nurani, Penjual Tahu Cantik Lulusan S21 hari lalu\r\nDigelar di Everest, Fashion Show ini Cetak Rekor DuniaDigelar di Everest, Fashion Show ini Cetak Rekor Dunia7 hari lalu\r\nMUFFEST 2020 Akan Usung Konsep SustainableMUFFEST 2020 Akan Usung Konsep Sustainable12 hari lalu\r\nLouis Vuitton Pamerkan Berlian Langka KoleksinyaLouis Vuitton Pamerkan Berlian Langka Koleksinya13 hari lalu\r\nVIDEO\r\n9 Cara Efektif Mencegah Kanker Payudara9 Cara Efektif Mencegah Kanker Payudara22 jam lalu\r\nDiadaptasi dari Novel, Ini Fakta Menarik Film Little WomenDiadaptasi dari Novel, Ini Fakta Menarik Film Little Women23 jam lalu\r\nTrailer Film Birds of Prey, Tampilkan Sosok Perempuan MandiriTrailer Film Birds of Prey, Tampilkan Sosok Perempuan Mandiri3 hari lalu\r\nSederet Manfaat Tanaman Porang, Cocok Untuk Diet Sederet Manfaat Tanaman Porang, Cocok Untuk Diet3 hari lalu\r\n\r\n\r\nTERPOPULER\r\n1Kebersihan Tubuh, Kunci Menangkal Penularan Virus Corona\r\n25 Tipe Introvert yang Perlu Anda Tahu\r\n3Meja Kerja Berantakan, Tanda Anda Orang Jenius\r\n45 Tips Meningkatkan Kemandirian Anak\r\n5Kanker Tiroid Jarang Menyerang Laki-laki tapi Lebih Ganas\r\n\r\n\r\nFOKUS\r\nPusat Izinkan Revitalisasi Monas, Anies Baswedan Tambah Luas RTHPusat Izinkan Revitalisasi Monas, Anies Baswedan Tambah Luas RTH\r\nAnies Baswedan Rombak Ulang Jalur Formula EAnies Baswedan Rombak Ulang Jalur Formula E\r\nKala Virus Corona Menggoyang Ekonomi IndonesiaKala Virus Corona Menggoyang Ekonomi Indonesia\r\nRugi Akibat Virus Corona, Dari Pariwisata hingga PertanianRugi Akibat Virus Corona, Dari Pariwisata hingga Pertanian\r\n\r\nTERKINI\r\nJangan Anggap Enteng Sakit Kepala pada Anak, Bisa Jadi Ada TumorJangan Anggap Enteng Sakit Kepala pada Anak, Bisa Jadi Ada Tumor3 jam lalu\r\nAwas, Kurang Tidur Tingkatkan Risiko AlzheimerAwas, Kurang Tidur Tingkatkan Risiko Alzheimer4 jam lalu\r\nBakar Lemak dengan Membersihkan 6 Area Rumah BerikutBakar Lemak dengan Membersihkan 6 Area Rumah Berikut5 jam lalu\r\nNikmatnya Aneka Makanan Berkuah Hangat Ini Kala HujanNikmatnya Aneka Makanan Berkuah Hangat Ini Kala Hujan15 jam lalu\r\nMeja Kerja Berantakan, Tanda Anda Orang Jenius Meja Kerja Berantakan, Tanda Anda Orang Jenius16 jam lalu\r\nKanker Tiroid Jarang Menyerang Laki-laki tapi Lebih GanasKanker Tiroid Jarang Menyerang Laki-laki tapi Lebih Ganas16 jam lalu\r\n6 Langkah Menemukan Barang Tertinggal di Pesawat Terbang6 Langkah Menemukan Barang Tertinggal di Pesawat Terbang18 jam lalu\r\nTips Membeli Properti agar Tidak KecewaTips Membeli Properti agar Tidak Kecewa19 jam lalu\r\n9 Makna Mimpi Pria tentang Wanita9 Makna Mimpi Pria tentang Wanita20 jam lalu\r\nKebersihan Tubuh, Kunci Menangkal Penularan Virus CoronaKebersihan Tubuh, Kunci Menangkal Penularan Virus Corona21 jam lalu\r\nSELENGKAPNYA\r\nGRAFIS\r\nLaktat Memicu Pembentukan Kanker\r\nPara peneliti kini tengah mencari cara untuk mencegat laktat bermutasi menjadi kanker.\r\n\r\nTentang Kami\r\nPedoman Media Siber\r\nKetentuan Layanan\r\nKarir\r\nBeriklan\r\nTEMPO.CO\r\nMajalah TEMPO\r\nTEMPO English Magazine\r\nKoran TEMPO\r\nTEMPO Institute\r\nIndonesiana\r\nTEMPO Store\r\nTEMPO.CO English\r\nTempo Media Group © 2017\r\n\r\n\r\n\r\n', '3519493.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `media` text NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `email`, `password`, `username`, `bio`, `media`, `role_id`, `is_active`, `date_created`, `user_id`) VALUES
('dhiya dc', 'callistaaaa', 'zoe@gmail.com', '$2y$10$b0xnIpMp5DGD8N4fJqs4dOU6aQ09BgYPuCS0fvjQYHvF/bGS2E5AG', 'dhiyyaaaa', 'lah anjay bgt', '', 2, 1, 1580744842, 7),
('arya', 'pradata', 'arya@gmail.com', '$2y$10$WbJyv9vKSHD6klFfBOQUduFJRUN6qWVB/tyRMVd7p8rYLOyORd5OW', 'aryap12345', '', '', 2, 1, 1580801583, 8),
('Dhiya', 'Calista', 'dhiya@gmail.com', '$2y$10$hioszgMChAI0G4UngnLS5.1ZdtB8I6m8VNyl6FEd2XAfm8ppqqZ5S', 'dhiyadice', 'Hey there! I\'m Dhiya! Welcome to my Medium', '', 2, 1, 1580822749, 9),
('Achmad', 'Ichsan', 'isan@gmail.com', '$2y$10$97tFLN9zdpscCBjSyAc6h.zdyWNMCExsgMjRKeQVMR2hFG6zDWCKG', 'isan1234', 'Hey there! I\'m Achmad! Welcome to my Medium', '', 2, 1, 1580879440, 10),
('cindy', 'wijaya', 'cindy@gmail.com', '$2y$10$yvTUTDE45HmZLrs/SHFoqOQP1DoJWyMQwpKm7/1JnWOmgk.HddtbO', 'cindywijaya', 'Hey there! I\'m cin! Welcome to my Medium', '', 2, 1, 1581143005, 11),
('pani', 'pani', 'pani@gmail.com', '$2y$10$dEmxKErejcoJmZ2vkKJqku0e.qeHmwglTeQUDrG/6Uu/rpfK5ir.6', 'pani12345', 'Hey there! I\'m pani! Welcome to my Medium', '', 2, 1, 1581220593, 12);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
