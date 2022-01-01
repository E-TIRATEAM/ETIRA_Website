-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 30 Des 2021 pada 13.24
-- Versi server: 10.3.32-MariaDB-cll-lve
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1694897_a_bws_3_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_paket`
--

CREATE TABLE `daftar_paket` (
  `id_daftar_paket` int(11) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `rating` float NOT NULL,
  `gambar_satu` varchar(20) NOT NULL,
  `gambar_dua` varchar(20) NOT NULL,
  `gambar_tiga` varchar(20) NOT NULL,
  `gambar_empat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_paket`
--

INSERT INTO `daftar_paket` (`id_daftar_paket`, `judul`, `deskripsi`, `rating`, `gambar_satu`, `gambar_dua`, `gambar_tiga`, `gambar_empat`) VALUES
(1, 'Aula', 'Di sini kami menyediakan aula yang bisa digunakan untuk berbagai macam keperluan, seperti pernikahan, meeting, acara ulang tahun, reuni, dan lain-lain. Jika kamu membutuhkan tempat sewa dengan ukuran yang cukup luas untuk menampung banyak orang, maka aula Tirta Agung merupakan solusi yang tepat untuk kamu. Jangan khawatir soal harga.', 4.5, 'aula_lima.jpeg', 'aula_tiga.jpg', 'aula_satu.jpeg', 'aula_empat.jpg'),
(2, 'Kala Senja', 'Ingin menikmati indahnya pemandangan area persawahan dengan indahnya matahari terbenam sambil menikmati hidangan kuliner lezat? Mungkin tempat duduk Kala Senja ini bisa menjadi tujuan liburanmu ketika pergi ke Tirta Agung. Hal paling menarik di Kala Senja adalah kalian bisa melihat keindahan matahari terbenam di area persawahan yang sangat luas.', 5, 'kalasenja_satu.jpg', 'kalasenja_dua.jpg', 'kalasenja_lima.jpg', 'kalasenja_empat.jpg'),
(3, 'Camping Ground', 'Jika kamu ingin menikmati serunya momen bersama keluarga maupun sahabat. Kamu juga bisa camping di sini. Tirta Agung menyediakan spot camping yang tidak kalah menarik dari spot camping lain di luar sana loh. Bagi para pencinta camping, tentu kalian wajib datang Tirta Agung dan mencoba camping di sini.', 5, 'camp_enam.JPG', 'camp_satu.JPG', 'camp_tiga.JPG', 'camp_lima.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_users`
--

CREATE TABLE `data_users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_users`
--

INSERT INTO `data_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(5, 'Amalia Siska', 'admin123'),
(9, 'Azizatun Hasanah', 'admin123'),
(10, 'Bahrul Ulum', 'admin123'),
(11, 'Rindi Susanti', 'admin123'),
(12, 'Rizaldi', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `nama`, `description`, `image`) VALUES
(7, 'Kolam Renang', 'Kawasan ini juga terdapat kolam renang dengan air yang terlihat menyegarkan. Tempat ini juga salah satu area favorit pengunjung untuk merelaksasikan tubuh maupun foto selfie. Kolam pemandian / kolam renang alami dari sumber asli dari alam yang pastinya segar apalagi sangat baik untuk kita refreshing pikiran jenuh karena pekerjaan menumpuk.               Disana kita akan terhibur dengan buah hati bermain di kolam renang sekaligus pemandangan sawah yang saat ini jarang kita temukan.', 'destination-11.JPG'),
(11, 'Gazebo Apung', 'Gazebo Apung yang bisa digunakan untuk duduk sambil bersantai pengunjung. Menariknya saung tersebut berada di atas air dan untuk menghubungkan satu dengan lainnya dibuatnya jembatan kayu kecil.             Banyak pengunjung yang tak ingin melewatkan momen saat berada di tempat tersebut dengan mengambil foto. Salah satu tempat favorit untuk berfoto adalah bagian tengah kolam, terdapat kursi kayu yang bisa untuk duduk sambil bergaya.', 'destination-22.jpeg'),
(13, 'Camping Ground', 'Tirta Agung menyediakan spot camping yang tidak kalah menarik dari spot camping lain di luar sana loh. Bagi para pencinta camping, tentu kalian wajib datang Tirta Agung dan mencoba camping di sini. Jangan lupa juga untuk membawa teman maupun keluarga kamu. Supaya menambah momen liburan menjadi semakin seru.', 'camping (2).JPG'),
(16, 'Kala Senja', 'Tempat duduk Kala Senja ini bisa menjadi tujuan liburanmu ketika pergi ke Tirta Agung. Hal paling menarik di Kala Senja adalah kalian bisa melihat keindahan matahari terbenam di area persawahan yang sangat luas.             Seru rasanya jika kalian mengajak teman maupun keluarga untuk menikmati indahnya matahari terbenam sambil menikmati hidangan kuliner lezat dari tempat duduk Kala Senja. Jangan lupa juga untuk mencicipi kopi di Kala Senja. Dijamin rasanya tidak akan mengecewakan.', '20210509_170506 (1)-min.jpg'),
(17, 'Tari Molong Kopi', 'Gambar disamping adalah gambar tari molong kopi khas kecamatan sumberwringin, yang dipamerkan diwisata tirta agung untuk dipromosikan di media sosial. Kata molong kopi berasal dari bahasa Madura  yang memiliki arti  memetik kopi. Tarian ini menceritakan tentang panen kopi yang menjadi komoditas utama kecamatan Sumberwringin kabupaten Bondowoso.', 'destination-44.jpg'),
(20, 'Soft Opening', 'Soft opening cafe kala senja yang di meriahkan oleh penampilan band asal sukosari kidul yaitu larista akustik, yang didukung langsung oleh Pemprov Jawa Timur, Klinik Bumdes Jawa Timur dan PT HM Sampoerna Untuk Indonesia.', '72_02193.jpg'),
(21, 'Penampilan Tari Topeng', 'Penampilan tari topeng konah pada saat acara slametan Gunung yang ditempatkan di wisata tirta agung sukosari kidul. Tari Topeng Kona adalah satu-satunya kesenian topeng di Bondowoso yang geraknya berbeda dengan tari topeng di daerah lain.', 'tari topeng.jpeg'),
(22, 'Aula Tirta Agung', 'Aula ini bisa digunakan untuk berbagai macam keperluan, seperti pernikahan, meeting, acara ulang tahun, reuni, dan lain-lain. Jika kamu membutuhkan tempat sewa dengan ukuran yang cukup luas untuk menampung banyak orang, maka aula Tirta Agung merupakan solusi yang tepat untuk kamu. Jangan khawatir soal harga.', 'aula.jpeg'),
(23, 'Singo Wulung', 'Tari molong kopi yang berkolaborasi dengan kesenian singo wulung yang merupakan seni tradisional kabupaten Bondowoso. Pada waktu itu tarian dan kasenian tersebut di tampilkan di wisata tirta agung dalam rangka menyambut datangnya kepala Dinas DPMD Provinsi Jawa Timur untuk meresmikan produk wisata baru di wisata tirta agung yang berupa cafe kala senja.', '72_01216 (1)-min.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_fasilitas`
--

CREATE TABLE `tabel_fasilitas` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `ikon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_fasilitas`
--

INSERT INTO `tabel_fasilitas` (`id`, `nama`, `deskripsi`, `ikon`) VALUES
(1, 'Gazebo Apung', 'Gazebo apung ini merupakan icon dari wisata tirta agung yang tempatnya terapung di atas kolam ikan yang bisa digunakan untuk duduk sambil bersantai.', 'ic_gazeboo.png'),
(2, 'Kolam Renang', 'Objek Wisata ini juga memiliki 2 kolam renang atau pemandian alami yaitu kolam renang untuk anak dan dewasa dari sumber asli alam yang sangat menyegarkan.', 'ic_kolamrenang.png'),
(3, 'Musholla', 'Wisata Tirta Agung juga dilengkapi dengan fasilitas musholla agar para wisatawan, khususnya umat islam dapat melaksanakan ibadah di tempat kami.', 'ic_musholla.png'),
(4, 'Kamar Mandi', 'Wisata Tirta Agung juga menyediakan fasilitas toilet dengan total 4 kamar mandi dan WC yang sangat bersih dan memadai untuk para pengunjung yang singgah.', 'ic_kamarmandi.png'),
(5, 'Cafe Kala Senja', 'Cafe kala senja merupakan cafe outdor dengan suasana persawahan, angin sepoi-sepoi ala sawah menambah nikmatnya makan dan minum.', 'ic_kalasenja.png'),
(6, 'Beanbag', 'Beanbag adalah tempat duduk yang bentuknya menyerupai bantal atau karung besar yang sangat nyaman bagi pengunjung untuk bersantai.', 'ic_beanbag.png'),
(7, 'Aula', 'Terdapat aula yang bisa ditempati untuk berbagai macam keperluan atau acara tertentu seperti pernikahan, meeting, acara ulang tahun, reuni, dan lain-lain.', 'ic_aula.png'),
(8, 'Flying Fox', 'Wisata tirta agung juga dilengkapi dengan wahana flying fox dengan ketinggian 10 meter yang berpadu dengan keindahan alam di sekitarnya.', 'ic_flyingfox.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_gambar`
--

CREATE TABLE `tabel_gambar` (
  `id` int(4) NOT NULL,
  `nama_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_gambar`
--

INSERT INTO `tabel_gambar` (`id`, `nama_gambar`) VALUES
(1, 'kalasenja_satu.jpg'),
(2, 'aula_satu.jpeg'),
(3, 'camp_satu.JPG'),
(4, 'kalasenja_dua.jpg'),
(5, 'aula_dua.jpg'),
(6, 'camp_dua.JPG'),
(7, 'kalasenja_tiga.jpg'),
(8, 'aula_tiga.jpg'),
(9, 'camp_tiga.JPG'),
(10, 'kalasenja_empat.jpg'),
(11, 'aula_empat.jpg'),
(12, 'camp_empat.JPG'),
(13, 'kalasenja_lima.jpg'),
(14, 'aula_lima.jpeg'),
(15, 'camp_lima.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_paket`
--

CREATE TABLE `tabel_paket` (
  `id_paket` int(11) NOT NULL,
  `id_daftar_paket` int(11) NOT NULL,
  `no_paket` varchar(10) NOT NULL,
  `lama_sewa` int(2) NOT NULL,
  `kapasitas` int(3) NOT NULL,
  `harga` varchar(9) NOT NULL,
  `fasilitas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_paket`
--

INSERT INTO `tabel_paket` (`id_paket`, `id_daftar_paket`, `no_paket`, `lama_sewa`, `kapasitas`, `harga`, `fasilitas`) VALUES
(1, 1, 'Paket 1', 1, 50, '500.000', 'Meja dan Kursi, Sound System, LCD Proyektor, Free Wifi, Kapasitas 50 orang'),
(2, 1, 'Paket 2', 1, 30, '350.000', 'Lesehan, Sound System, LCD Proyektor, Free Wifi, Kapasitas 30 Orang'),
(3, 2, 'Paket 1', 1, 25, '400.000', 'Meja, Beanbag, Prasmanan, LCD Proyektor, Sound System, Kapasitas 25 Orang'),
(4, 2, 'Paket 2', 1, 20, '350.000', 'Meja, Beanbag, LCD Proyektor, Sound System, Kapasitas 20 Orang'),
(5, 3, 'Paket 1', 1, 4, '400.000', 'Tenda, Matras, Sleeping Bag, Kompor Portable dan Gas, Kapasitas 4 Orang'),
(6, 3, 'Paket 2', 1, 4, '300.000', 'Tenda, Matras, Gas mini, Kompor Portable, Kapasitas 4 Orang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pemesanan`
--

CREATE TABLE `tabel_pemesanan` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `id_paket` int(2) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `tanggal_pemesanan` varchar(11) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `status_pemesanan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_pemesanan`
--

INSERT INTO `tabel_pemesanan` (`id`, `nama_lengkap`, `id_paket`, `judul`, `tanggal_pemesanan`, `metode_pembayaran`, `status_pemesanan`) VALUES
(1, 'Moh Bahrul Ulum', 2, 'Aula', '30-Dec-2021', 'Transfer BRI (1234567891)', 'Terkonfirmasi'),
(3, 'Amalia Siska K', 5, 'Camping Ground', '01-Jan-2022', 'Transfer BRI (1234567891)', 'Belum Terkonfirmasi'),
(4, 'Amalia Siska K', 4, 'Kala Senja', '04-Jan-2022', 'Transfer BNI (1234567891)', 'Belum Terkonfirmasi'),
(5, 'Moh Bahrul Ulum', 6, 'Camping Ground', '02-Jan-2022', 'Transfer Bank Jatim (1234567891)', 'Belum Terkonfirmasi'),
(6, 'Moh Bahrul Ulum', 1, 'Aula', '31-Dec-2021', 'Transfer BRI (1234567891)', 'Belum Terkonfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ulasan`
--

CREATE TABLE `tb_ulasan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ulasan`
--

INSERT INTO `tb_ulasan` (`id`, `nama`, `email`, `pesan`) VALUES
(17, 'Savina Zahro', 'savinazahro@gmail.com', 'Gilss wajibun bgt sii untuk kesinii... g nyesel samsekk... bener2 tempatnyaa asik bgtt... sejuk, asri, bersih, cocok bgtt buat kumpul-kumpul... asik dehh.. buruann kesanaaa!!!'),
(21, 'Ibnu Batutah', 'ibnu_batutah123@gamil.com', 'Pengalaman yang menyenangkan, Aku ke sana ketika liburan semester. Dan ternyata diluar ekspektasi! tempatnya bagus bangett cocok buat tempat refreshing melepas penat, pokok e recommended lah!'),
(22, 'Vita Nada Agustin', 'vitanada22@gmail.com', 'Progres yang selalu meningkat dulu waktu tahun 2018 hanya ada 1 destinasi. Tapi semakin bertambahnya tahun semua destinasi yang selalu di upgrade. Rbl Rbl Rbl Recommended banget loh!'),
(23, 'Ahmad Wildan', 'ahmad_wildan88@gmail.com', 'Tempat wisata ini sangat cocok untuk liburan keluarga. Banyak pilihan spot-spot menarik yang bisa kita kunjungi. Plus, suasana dan pemandangan yang indah, semakin terasa betah berada di sini.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_tirta`
--

CREATE TABLE `user_tirta` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nomor_hp` varchar(13) NOT NULL,
  `email_user` varchar(25) NOT NULL,
  `password_user` varchar(20) NOT NULL,
  `foto_profil` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_tirta`
--

INSERT INTO `user_tirta` (`id`, `nama_lengkap`, `nomor_hp`, `email_user`, `password_user`, `foto_profil`) VALUES
(1, 'Admin E-TIRA', '082222222222', 'admin@admin.com', 'admin', 'user.png'),
(2, 'Moh Bahrul Ulum', '082334325146', 'bahrul@user.com', 'bahrul', 'bahrul.jpeg'),
(3, 'Amalia Siska K', '085257233349', 'amalia@user.com', 'amalia', 'amel.jpg'),
(4, 'Azizatun Hasanah', '089679829492', 'azizah@user.com', 'azizah', 'azizah.jpg'),
(7, 'Rindi Susanti', '081330834823', 'rindi@user.com', 'rindi', 'rindi.jpg'),
(8, 'Mohammad Rizaldi', '082338906182', 'rizal@user.com', 'rizal', 'rizal.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_paket`
--
ALTER TABLE `daftar_paket`
  ADD PRIMARY KEY (`id_daftar_paket`);

--
-- Indeks untuk tabel `data_users`
--
ALTER TABLE `data_users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_fasilitas`
--
ALTER TABLE `tabel_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_gambar`
--
ALTER TABLE `tabel_gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_paket`
--
ALTER TABLE `tabel_paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_daftar_paket` (`id_daftar_paket`);

--
-- Indeks untuk tabel `tabel_pemesanan`
--
ALTER TABLE `tabel_pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_tirta`
--
ALTER TABLE `user_tirta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_paket`
--
ALTER TABLE `daftar_paket`
  MODIFY `id_daftar_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_users`
--
ALTER TABLE `data_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tabel_fasilitas`
--
ALTER TABLE `tabel_fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tabel_gambar`
--
ALTER TABLE `tabel_gambar`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tabel_paket`
--
ALTER TABLE `tabel_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tabel_pemesanan`
--
ALTER TABLE `tabel_pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user_tirta`
--
ALTER TABLE `user_tirta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
