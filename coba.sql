-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2011 at 03:55 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE IF NOT EXISTS `bukutamu` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`id`, `nama`, `komentar`) VALUES
(3, 'Heru', 'Ini adalah komentar');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `created` varchar(20) NOT NULL,
  `writer` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `created`, `writer`) VALUES
(11, '10 Trik Mengatasi Cemas Berlebihan', '<p style="text-align: justify;">Cemas dan khawatir rasanya tak mungkin terlewatkan dalam hidup manusia. Sebetulnya, kecemasan bukanlah sesuatu yang berbahaya. Pada keadaan tertentu, kecemasan bahkan bisa memotivasi orang untuk lebih baik lagi menjalankan tugas sehari-harinya. <br /><br /><br />Namun, ada yang mengalaminya terlalu sering atau terlalu berlebihan, ketika sesamanya menanggapi suatu situasi tertentu dengan wajar. Boleh jadi, Anda juga termasuk si pencemas itu. Kalau cemas sudah jadi obsesi, itu bisa menginterupsi kegiatan sehari-hari dan merusaknya. Karena itu, cobalah hilangkan kecemasan itu dengan: <br /><br />1. Mengetahui batas kemampuan Anda Ciptakan dan prioritaskan tujuan Anda, baik kehidupan pribadi maupun profesional. Lalu, jabarkan pelaksanaannya dalam bentuk mingguan, bulanan, atau jangka waktu tertentu. Sadari bahwa tak ada gunanya membuang waktu dan energi untuk terobsesi dalam salah satu isu, event, atau pun orang-orang yang berada di luar kontrol. <br /><br />2. Percayai diri Anda sendiri Setiap kali Anda menghadapi suatu masalah, ingatkan diri bahwa Anda akan bisa menghadapinya. Ingatlah bahwa Anda tak akan diberi suatu beban yang Anda tak mungkin bisa memikulnya. Bisa juga Anda mengingat-ingat sukses yang pernah Anda raih, hanya untuk memastikan bahwa Anda memang berpotensi. <br /><br />3. Persiapan menghadapi risiko terburuk Walau Anda berpikir dengan optimistis, tak ada salahnya mempersiapkan diri menghadapi risiko yang terburuk. Misalnya, bila sekarang Anda sedang bekerja di suatu perusahaan, buatlah skenario tersendiri tentang kantor itu. Yang terburuk adalah, bagaimana bila perusahaan ini tutup dan Anda harus mencari pekerjaan lain. Karena itu, Anda mempersiapkan diri dengan menjalin networking, in case Anda membutuhkannya suatu hari nanti. <br /><br />4. Selalu berharap yang terbaik Walau begitu, Anda tak boleh menyangsikan kemurahan Sang Maha Pencipta. Tetaplah terus berpikir dan berperilaku positif, mengharap keadaan yang terbaik. Tetap berharap akan memacu Anda untuk hidup dengan baik. <br /><br />5. Buat daftar ketakutan Anda Catatlah segala ketakutan dan kecemasan Anda dalam suatu bentuk tertulis. Ketika Anda merasa cemas, bacalah dan sadarilah bahwa ternyata Anda tetap hidup dengan baik selama itu. Percayalah, lambat laun kegelisahan Anda akan lenyap. <br /><br />6. Cari pertolongan Bila Anda merasa segalanya sudah nyaris tak tertahankan, carilah bantuan. Anda bisa membagi masalahnya dengan teman, atau dengan ahli. <br /><br />7. Cari kesibukan Cara lain untuk menghilangkan kecemasan yang berlebihan adalah dengan menjaga Anda tetap sibuk. Kalau Anda merasa bahwa Anda terganggu sedemikian rupa oleh suatu hal, buatlah proyek baru yang akan membuat Anda sibuk. <br /><br />8. Yakin rasa ini bisa hilang Jangan sampai Anda berpikir bahwa rasa cemas ini sudah mendarahdaging dan karena itu tak bisa dihilangkan. <br /><br />9. Selama ada kemauan, pasti ada jalan Buang jauh-jauh rasa putus asa itu. Selama Anda masih punya motivasi untuk mengatasinya, segala macam rasa cemas ini bisa diatasi. <br /><br />10. Pertebal iman Kepercayaan dan iman Anda akan menolong banyak ketika Anda sedang cemas. Anda akan percaya bahwa segala sesuatu itu terjadi karena kehendak Yang Maha Kuasa, dan bahwa Anda akan selalu berada di bawah lindungan-Nya. Kepercayaan seperti ini akan membantu menghilangkan rasa cemas. (hannie k.wardhanie)</p>', '2011-01-06 15:46:33', 'admin'),
(13, 'Tips Merawat Kulit Pada Semua Usia', '<p style="text-align: justify;">Rutin merawat kulit setiap hari dapat membuat kulit Anda terlihat lebih muda dan segar <br />Apakah kata-kata keriput dan kerusakan kulit karena sinar matahari dapat membuat Anda gemetar ketakutan? Bila ya, maka Anda tidak sendirian. Tapi bukan berarti Anda tidak dapat berbuat apa-apa mengenai hal tersebut. Ada beberapa pencegahan yang dapat dilakukan. Jadi, mulai detik ini, hentikan proses penuaan dini Anda. Simak perawatan seperti apa yang dapat Anda lakukan sehari-hari untuk mempertahankan keremajaan kulit. Tak perduli berapapun usia Anda. <br /><br />Bila Anda berusia 20-an :<br /><br />Sehari-hari/Pagi : Cara Anda merawat kulit pada usia 20-an akan mempengaruhi keadaan kulit Anda selanjutnya. Mereka yang memiliki jenis kulit kering lebih baik membasuh kulit dengan pembersih yang ringan dan tidak berbusa. Bila kulit Anda berminyak, gunakan pembersih dalam bentuk gel. Dan Anda juga dapat menggunakan semacam cleaning sheets yang dapat mengangkat minyak pada wajah tanpa merusak make up. Tabir surya merupakan hal yang wajib bagi seorang wanita. Apapun jenis kulitnya. Wanita berjenis kulit normal hingga kering dapat menggunakan pelembab yang mengandung micronized zinc serta mampu menahan sinar UVA dan UVB. <br />Sehari-hari/Malam : Cuci kembali wajah Anda dengan pembersih ringan. Wanita dengan jenis kulit kering seharusnya mengaplikasikan pelembab yang ringan dan noncomedogenic sehingga tidak menyebabkan pori-pori Anda melebar. Bila kulit Anda sensitif, cari produk kosmetik wajah yang tidak mengandung parfum. Wanita dengan kulit berminyak boleh menggunakan penyegar pada bagian wajahnya yang mengkilat. Bila kulit Anda sangat berminyak, pertimbangkan untuk memakai penyegar berbahan dasar alkohol. <br />Mingguan : Apapun jenis kulitnya, kulit Anda harus melakukan pengelupasan (peeling). Wanita dengan jenis kulit berminyak dianjurkan memakai masker tanah liat atau masker yang berbahan dasar biji-bijian. <br /><br />Bila Anda berusia 30-an : <br /><br />Sehari-hari/Pagi : Basuh dengan menggunakan pembersih ringan. Ikuti dengan pemakaian pelembab yang mengandung alpha-hydroxy acids. Bila kulit Anda berminyak, gunakan pembersih alpha-hydroxy cleanser tapi lewatkan penggunaan pelembab. Semua jenis kulit memerlukan tabir surya dan bila budget memungkinkan, gunakan krem vitamin C yang mengandung L-ascorbic acid. <br />Sehari-hari/Malam : Cuci wajah dengan pembersih yang lembut. Kulit berminyak atau berjerawat harus diberikan produk berdasarkan resep dokter dan yang efeknya mampu mengobati kerusakan kulit. Wanita dengan jenis kulit lebih kering dapat mulai mengaplikasikan krem retinol untuk membantu mengurangi kerusakan. <br />Mingguan : Bila ingin melakukan pengelupasan kulit, boleh-boleh saja. Kalau Anda melakukannya, gunakan handuk khusus untuk wajah. Atau coba produk pengelupasan kulit yang tergolong ringan. <br /><br />Bila Anda berusia 40-an :<br /><br />Sehari-hari/Pagi : Semua jenis kulit harus menggunakan pembersih atau sabun muka yang lembut dan diikuti oleh penggunaan krem vitamin C dan tabir surya. Bila kulit Anda kering, gunakan pelembab yang tidak memperbesar pori-pori Anda. <br />Sehari-hari/Malam : Basuh wajah dengan menggunakan sabun lembut atau pembersih. Lalu aplikasikan produk semacam retinol. Atau untuk pengelupasan kulit yang lebih kuat, krem semacam Retin-A dapat membantu. <br />Mingguan : Pilihan lain pengelupasan kulit wajah adalah dengan menggunakan facial scrub yang lembut. <br />Bulanan : Peeling berbahan Acid dapat mengurangi flek akibat sinar matahari dan penuaan dini. Peeling pun berjenis-jenis, ada yang lebih bagus bila diaplikasikan pada kulit berjerawat dan lainnya pada kulit yang rusak. Tetapi produk pengelupasan kulit yang lebih keras lagi harus didapatkan dengan resep dokter. <br /><br />Bila Anda berusia 50-an :<br /><br />Sehari-hari/Pagi : Apapun jenis kulit Anda, cuci dengan pembersih yang lembut. Dan diikuti dengan pengaplikasian pelembab yang mengandung alpha-hydroxy acid dan tabir surya. <br />Sehari-hari/Malam : Basuh wajah dengan sabun ringan atau pembersih. Aplikasikan produk yang mengandung tretinoin (vitamin A). Jangan lakukan pengelupasan kulit wajah. Bahkan handuk wajah yang paling lembut pun dapat merusak kulit yang sudah berusia lebih matang. <br />Bulanan : Peeling kimiawi yang umum didapatkan pada praktek kerja dokter telah membantu beberapa wanita yang telah menunjukkan tanda-tanda penuaan kulit. Untuk hasil terbaik, ada microdermabrasion yang menggunakan formula microcrystals untuk mengelupaskan permukaan kulit. Dengan catatan : Proses ini harus dilakukan oleh seorang dokter yang telah terlatih atau bersertifikat. <br /><br />Bila Anda berusia 60-an :<br /><br />Sehari-hari/Pagi : Basuh wajah dengan sabun ringan atau pembersih. Lalu aplikasikan pelembab yang mengandung tabir surya. Sehari-hari/Malam : Sebelum tidur aplikasikan krem tretinoin (wanita dengan kulit berminyak sebaiknya menggunakan krem ini setiap hari, yang berkulit kering, 2 hari sekali atau seminggu 3 kali dianjurkan). Akhiri dengan pemakaian pelembab krem bermoisturizer untuk melembutkan kulit. <br />Jangka Panjang : Bila Anda sudah memasuki tahap memerangi keriput, Anda mungkin dapat memikirkan untuk melakukan penyinaran laser. Kulit bagian paling luar Anda sajalah yang akan dikenai laser. Hasil akhirnya biasanya sangat memuaskan. Meskipun pasien biasanya harus berkulit merah selama 1 bulan atau lebih setelah pengobatan dilangsungkan. Tapi hasil akhir dapat bertahan hingga 5 sampai 10 tahun. <br /><br /></p>', '2011-01-06 15:50:03', 'heru');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama_langkap` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `nama_langkap` (`nama_langkap`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `nama_langkap`, `email`, `level`) VALUES
(3, 'admin', '123456', 'heru purwito', 'heru.purwito@yahoo.co.id', 'admin'),
(9, 'heru', '123456', 'heru', 'heru@yahoo.com', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
