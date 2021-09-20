-- MySQL dump 10.13  Distrib 8.0.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: sig
-- ------------------------------------------------------
-- Server version	8.0.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cagarbudaya`
--

DROP TABLE IF EXISTS `cagarbudaya`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cagarbudaya` (
  `id_cagar` int(8) NOT NULL AUTO_INCREMENT,
  `nama_cagar` varchar(255) NOT NULL,
  `kode_pengelolaan` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(2000) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  PRIMARY KEY (`id_cagar`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cagarbudaya`
--

LOCK TABLES `cagarbudaya` WRITE;
/*!40000 ALTER TABLE `cagarbudaya` DISABLE KEYS */;
INSERT INTO `cagarbudaya` VALUES (1,'Petirtaan Jolotundo','KB000448','Di dalam Petirtaan Jolotundo terdapat sejumlah relief dan angka tahun 899 C (977 M) dan nama Udayana. Atas dasar data ini ada pendapat bahwa nama tadi adalah nama Raja Udayana dari Bali yang beristrikan Gunapriyadharmapatni, Ibunda Airlangga. Terdapat pahatan lain yang berbunyi.','Area Hutan Trawas','Seloliman','Trawas','Mojokerto','Jawa Timur','-7.609064164981196','112.59538973779689'),(2,'Candi Minak Jinggo','KB000421','Candi Minak Jinggo merupakan bangunan yang terbuat dari batu andesit dan bata kuna. Candi Minakjinggo yang ada sekarang tinggal puing-puing nya karena sudah tidak terbentuk susunan yang sempurna. Terletak pada luas lahan 2370 m².','Jl. Candi Minak Jinggo','Unggahan','Trowulan','Mojokerto','Jawa Timur','-7.558132824608984','112.38655962738368'),(3,'Candi Brahu','KB000416','Candi Brahu merupakan bangunan berdenah persegi, dan terbuat dari bata. Dengan luas lahan 1345 m². Secara vertikal Candi Brahu di bagi menjadi tiga bagian yaitu: kaki, tubuh dan atap.','Jl. Candi Brahu No.73, Siti Inggil','Bejijong','Trowulan','Mojokerto','Jawa Timur','-7.542952896575765','112.37433785006851'),(4,'Candi Gentong','KB000420','Candi Gentong merupakan tinggalan sejarah yang berupa struktur bata, berada pada luas lahan 1343 m². Bangunan ini hanya tersisa pada bagian dasar yang dulunya tertimbun tanah dan pada tahun anggaran 1995/1996 dikupas umtuk ditampakan secara keseluruhan. Dari hasil pengupasan ini tampak berbentuk segi empat yang terbagi dalam tiga bagian masing-masing berukuran yaitu : - Dinding bagian dalam 9,25 m x 9,25 m, - Dinding bagian tengah 13,30 m x 13,30 m, - Dinding bagian luar 23,25 m x 23,25 m. Dari indikasi reruntuhan pada bagian barat menunjukan adanya sisa penampil yang mengarah ke barat sehingga menunjukan bahwa orentasi bangunan tersebut menhadap ke barat. Sedangkan latar belakang keagamaan dari bangunan ini adalah Budha, hal ini di dukung dengan adanya temuan stupika-stupika pada waktu pengupasan.','Jl. Candi Gentong','Telogo Gede','Trowulan','Mojokerto','Jawa Timur','-7.543793722600345','112.3780147813516'),(5,'Candi Kedaton','KB000422','Candi Kedaton adalah salah satu candi peninggalan Kerajaan Majapahit dan termasuk dalam sejarah Kerajaan Majapahit. Diduga candi ini sudah ada pada abad ke 13. Dilihat dari bentuk Candi Kedaton, diduga bangunan ini dulunya merupakan rumah dari seseorang yang memiliki kedudukan yang cukup istimewa di masa Kerajaan Majapahit.','Jl. Pendopo Agung','Kedaton','Trowulan','Mojokerto','Jawa Timur','-7.570448029560906','112.37950171511244'),(6,'Candi Tikus','KB000417','Candi Tikus merupakan bangunan pertirtaan. Denah bangunan bujur sangkar, sisi-sisinya berukuran 22,5 m memiliki tangga berukuran 9,5 m, lebar 3,5 m di sisi utara. Dinding kolam terdiri dari tiga teras hingga kebagian dasar kolam. Pada dinding teras paling bawah sisi timur, barat dan selatan terdapat pancuran air. Di sebelah barat dan timur tangga terdapat bilik kolam, masing-masing berukuran 3,5 m x 2 m. tinggi dinding bilik kolam 1,05 m. tiap bilik kolam memiliki pintu di sisi selatan 1,2 m, di depannya terdapat tangga. Didinding luar bilik kolam dihias pahatan untaian bunga, sedangkan dinding dalam sisi utara dilengkapi tiga buah pancuran. Selain pancuran, bangunan Candi Tikus memiliki pula saluran masuk maupun saluran pembuangan. Saluran masuk terdapat di sebelah selatan atau di belakang bangunan induk, sedangkan saluran pembuangan terletak di lantai dasar kolam. Pada saat ini sistem pengaliran air sudah tidak berfungsi. Di tengah kolam terdapat bangunan induk setinggi 5,3 m. bangunan tersebut terletak 2 m dari tangga, 4,3 m dari dinding teras paling bawah sisi barat, 3,2 m, dari dinding teras paling bawah sisi timur, menempel dinding teras paling bawah sisi selatan, serta 3,5 m lebih rendah dari tanah disekitarnya. Luas Lokasi Candi Tikus seluas 4200 m². Struktur bangunan induk terdiri dari tiga bagian yaitu: kaki, tubuh dan atap.','Jl. Trowulan-Jatirejo','Temon','Trowulan','Mojokerto','Jawa Timur','-7.571648100501829','112.40353169669591'),(7,'Candi Wringin Lawang','KB000418','Gapura Wringin Lawang adalah sebuah gapura peninggalan kerajaan Majapahit abad ke-14 yang berada di Jatipasar, Kecamatan Trowulan, Kabupaten Mojokerto, Jawa Timur, Indonesia. Bangunan ini terletak tak jauh ke selatan dari jalan utama di Jatipasar. Dalam bahasa Jawa, Wringin Lawang berarti \'Pintu Beringin\'. Gapura agung ini terbuat dari bahan bata merah dengan luas dasar 13 x 11 meter dan tinggi 15,5 meter. Diperkirakan dibangun pada abad ke-14. Gerbang ini lazim disebut bergaya candi bentar atau tipe gerbang terbelah. Gaya arsitektur seperti ini diduga muncul pada era Majapahit dan kini banyak ditemukan dalam arsitektur Bali. Kebanyakan sejarawan sepakat bahwa gapura ini adalah pintu masuk menuju kompleks bangunan penting di ibu kota Majapahit. Dugaan mengenai fungsi asli bangunan ini mengundang banyak spekulasi, salah satu yang paling populer adalah gerbang ini diduga menjadi pintu masuk ke kediaman Mahapatih Gajah Mada.','Jl. Candi Wringin Lawang','Jatipasar','Trowulan','Mojokerto','Jawa Timur','-7.541676057748327','112.391129695768'),(8,'Candi Bajangratu','KB000415','Candi Bajangratu merupakan bangunan gapura paduraksa, yaitu gapura yang bagian atasnya menyatu sebagai atap. Candi Bajangratu terbuat dari bata, kecuali lantai, tangga, serta ambang atas pintu (latiu) terbuat dari batu andesit. Struktur vertikal bangunan Bajangratu dibagi menjadi tiga bagian, kaki, tubuh, dan atap gapura. Candi ini terletak pada lahan seluas 1270 m².','Jl. Candi Tikus No 9, Pelem','Temon','Trowulan','Mojokerto','Jawa Timur','-7.567418175973659','112.39879594306066'),(9,'Kolam Segaran','KB000419','Luas kolam 6,5 Ha yang dikelilingi dinding terbuat dari bata yang tersusun rapat dengan tangga di sisi barat. Di bagian tenggara terdapat saluran yang mengalirkan air masuk ke dalam kolam, sedang di barat laut terdapat saluran yang mengalirkan air ke luar kolam. Kolam segaran merupakan kolam kuna terbesar yang pernah ada di Indonesia.','Jl. Pendopo Agung, Ngelinguk','Temon','Trowulan','Mojokerto','Jawa Timur','-7.556991798874179','112.38260608587699'),(10,'Situs Umpak Sentonorejo','KB000423','Situs Alun-alun umpak Sentonorejo terletak di Dusun Kedaton, Desa Sentonorejo, Kecamatan Trowulan, sekitar 100 meter sebelah barat candi Kedaton. Fisik situs berupa jajaran umpak batu yang tersusun rapi. Situs ini ditemukan pada tahun 1982, diduga posisinya tidak mengalami perubahan sama sekali. Menurut penafsiran Arkeologis, situs umpak Sentonorejo adalah bekas pondasi sebuah bangunan yang menjadi satu kesatuan dengan Candi Kedaton dan situs lantai segi enam.','Jl. Pendopo Agung','Temon','Trowulan','Mojokerto','Jawa Timur','-7.569907917278905','112.37880531203993'),(11,'Situs Kumitir','','Situs Kumitir adalah kompleks peninggalan kepurbakalaan yang bertapak di Dusun Bendo, Desa Kumitir, Kecamatan Jatirejo, Kabupaten Mojokerto. Situs ini mendapatkan perhatian serius sejak tahun 2017, setelah pemberitaan cukup luas pada bulan April 2017 mengenai kegiatan penggalian dan penjualan bongkahan batu bata kuno oleh penyewa lahan. ','Dusun Sedati','Kumitir','Jatirejo','Mojokerto','Jawa Timur','-7.5687294645725025','112.41420360262092'),(12,'Petirtaan Nglinguk','','','Dusun Nglinguk','Temon','Trowulan','Mojokerto','Jawa Timur','-7.56420699530262','112.37687466846639'),(13,'Petirtaan Tegalan','','','Dusun Tegalan','Temon','Trowulan','Mojokerto','Jawa Timur','-7.560537741409789','112.37578032719736');
/*!40000 ALTER TABLE `cagarbudaya` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'sig'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-19  1:00:15
