-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 03:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakar_krisan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `email`) VALUES
(3, 'admin', '202cb962ac59075b964b07152d234b70', 'Harisman Sihombing', 'e41181135@student.polije.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `basis_pengetahuan`
--

CREATE TABLE `basis_pengetahuan` (
  `kode_pengetahuan` int(11) NOT NULL,
  `kode_hp` varchar(11) NOT NULL,
  `kode_gejala` varchar(11) NOT NULL,
  `mb` float NOT NULL,
  `md` float NOT NULL,
  `cf_pakar` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basis_pengetahuan`
--

INSERT INTO `basis_pengetahuan` (`kode_pengetahuan`, `kode_hp`, `kode_gejala`, `mb`, `md`, `cf_pakar`) VALUES
(1, 'P001', 'G003', 0.8, 0.6, 0.2),
(2, 'P001', 'G018', 1, 0.2, 0.8),
(3, 'P001', 'G022', 0.8, 0, 0.8),
(4, 'P001', 'G024', 1, 0, 1),
(5, 'P002', 'G001', 0.8, 0.2, 0.6),
(6, 'P002', 'G002', 0.8, 0.2, 0.6),
(7, 'P002', 'G003', 0.6, 0, 0.6),
(8, 'P002', 'G017', 1, 0.2, 0.8),
(9, 'P003', 'G007', 0.6, 0, 0.6),
(10, 'P003', 'G011', 1, 0.4, 0.6),
(11, 'P003', 'G021', 0.6, 0, 0.6),
(12, 'P003', 'G026', 1, 0.2, 0.8),
(13, 'P003', 'G032', 0.8, 0, 0.8),
(14, 'P004', 'G016', 1, 0, 1),
(15, 'P004', 'G019', 0.8, 0.2, 0.6),
(16, 'P004', 'G028', 0.6, 0, 0.6),
(17, 'P004', 'G031', 0.6, 0, 0.6),
(18, 'P004', 'G034', 0.8, 0.2, 0.6),
(19, 'P005', 'G010', 0.6, 0, 0.6),
(20, 'P005', 'G012', 0.8, 0.2, 0.6),
(21, 'P005', 'G014', 1, 0.2, 0.8),
(22, 'P006', 'G010', 0.6, 0, 0.6),
(23, 'P006', 'G013', 0.6, 0, 0.6),
(24, 'P006', 'G015', 0.8, 0.2, 0.6),
(25, 'P007', 'G001', 0.8, 0, 0.8),
(26, 'P007', 'G002', 1, 0.2, 0.8),
(27, 'P007', 'G031', 0.8, 0.2, 0.6),
(28, 'P007', 'G033', 1, 0.2, 0.8),
(29, 'P007', 'G034', 0.6, 0, 0.6),
(30, 'P008', 'G002', 0.8, 0, 0.8),
(31, 'P008', 'G008', 1, 0, 1),
(32, 'P008', 'G010', 1, 0.2, 0.8),
(33, 'P009', 'G002', 0.8, 0, 0.8),
(34, 'P009', 'G004', 0.8, 0.2, 0.6),
(35, 'P009', 'G009', 1, 0, 1),
(36, 'P010', 'G002', 0.6, 0, 0.6),
(37, 'P010', 'G004', 0.6, 0, 0.6),
(38, 'P010', 'G020', 0.8, 0, 0.8),
(39, 'P011', 'G005', 1, 0.2, 0.8),
(40, 'P011', 'G023', 0.8, 0, 0.8),
(41, 'P011', 'G025', 0.8, 0.2, 0.6),
(42, 'P011', 'G027', 0.8, 0.2, 0.6),
(43, 'P011', 'G032', 0.8, 0, 0.8),
(44, 'P012', 'G006', 1, 0.2, 0.8),
(45, 'P012', 'G030', 1, 0.2, 0.8),
(46, 'P012', 'G033', 0.8, 0.2, 0.6),
(47, 'P012', 'G035', 0.8, 0.2, 0.6),
(48, 'P013', 'G001', 0.8, 0.2, 0.6),
(49, 'P013', 'G005', 0.8, 0, 0.8),
(50, 'P013', 'G010', 0.8, 0, 0.8),
(51, 'P013', 'G029', 1, 0.4, 0.6),
(52, 'P014', 'G001', 0.6, 0, 0.6),
(53, 'P014', 'G002', 0.8, 0, 0.8),
(54, 'P014', 'G010', 0.6, 0, 0.6),
(55, 'P014', 'G019', 1, 0.2, 0.8);

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` varchar(11) NOT NULL,
  `nama_gejala` varchar(100) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`, `gambar`) VALUES
('G001', 'Daun menguning', 'g001.jpg'),
('G002', 'Daun mengering', 'g002.jpg'),
('G003', 'Daun layu dan Gugur', ''),
('G004', 'Daun Cekung dan Rapuh', 'g004.jpg'),
('G005', 'Daun Kerdil atau Berkerut', ''),
('G006', 'Daun menguning terutama pada bagian bawah', ''),
('G007', 'Tepi daun berkerut, menggulung ke dalam', ''),
('G008', 'Daun tertutupi lapisan hitam seperti jelaga hitam', 'g008.jpg'),
('G009', 'Lapisan tepung pada permukaan daun', 'g009.jpg'),
('G010', 'Serangan pada daun bagian bawah/seluruh daun', ''),
('G011', 'Adanya bercak-bercak putih pada daun', ''),
('G012', 'Bintik kuning pada permukaan atas daun', 'g012.jpg'),
('G013', 'Bintik coklat atau hitam di permukaan atas daun', 'g013.jpg'),
('G014', 'Bintik putih pada permukaan bawah daun', 'g014.jpg'),
('G015', 'Bintik klorosis di permukaan bawah daun', ''),
('G016', 'Terdapat koloni putih dibagian bawah daun', 'go16.jpg'),
('G017', 'Adanya alur berliku bekas kotoran berwarna putih pada daun', 'g017.jpg'),
('G018', 'Tersisa hanya tulang daun pada tanaman', ''),
('G019', 'Bercak coklat pada daun', ''),
('G020', 'Bercak coklat pada pinggir daun', ''),
('G021', 'Bercak-bercak kehitaman pada mahkota bunga', 'g021.jpg'),
('G022', 'Epidermis atau bagian atas daun rusak atau transparan', 'go22.jpg'),
('G023', 'Tidak membentuk tunas samping', ''),
('G024', 'Tunas dan Bunga dimakan Hama', ''),
('G025', 'Berbunga lebih awal dari tanaman sehat', ''),
('G026', 'Bunga bergaris – garis', ''),
('G027', 'Warna bunga yang pucat', ''),
('G028', 'Tangkai bunga terlihat pucat', ''),
('G029', 'Gagal berbunga', ''),
('G030', 'Pangkal batang membusuk', 'g030.jpeg'),
('G031', 'Tanaman membusuk atau mati', ''),
('G032', 'Tanaman kerdil', 'g032.jpg'),
('G033', 'Tanaman layu', ''),
('G034', 'Pertumbuhan bagian atas tanaman tehambat atau mati', ''),
('G035', 'Akar berwarna coklat sampai hitam dan mengkerut', 'g035.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id` varchar(8) DEFAULT NULL,
  `hp` text NOT NULL,
  `kode_gejala` text DEFAULT NULL,
  `kode_hp` varchar(14) DEFAULT NULL,
  `cf_hasil` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hp`
--

CREATE TABLE `hp` (
  `kode_hp` varchar(11) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `det_penyakit` text NOT NULL,
  `srn_penyakit` text NOT NULL,
  `kategori` enum('Hama','Penyakit') NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hp`
--

INSERT INTO `hp` (`kode_hp`, `nama_penyakit`, `det_penyakit`, `srn_penyakit`, `kategori`, `gambar`) VALUES
('P001', 'Ulat Grayak (Spodoptera litura)', 'Hama ini bersifat polifag, Larva yang masih kecil merusak daun dengan meninggalkan sisa-sisa epidermis bagian atas/transparan dan tinggal tulang-tulang daun saja.  Gejala serangan pada daun rusak tidak beraturan, bahkan kadang-kadang hama ini juga memakan tunas dan bunga. Pada serangan berat menyebabkan daun tanaman habis.  Intensitas serangan tinggi biasanya terjadi pada musim kemarau.', 'Pencegahan :\r\nLakukan Sterilisasi pada media tumbuh, misalnya dengan uap panas agar tanaman bebas dari organisme pengganggu tanaman (OPT) yang ditularkan melalui media tumbuh.\r\n\r\nPenanganan :\r\n1. Mencari dan mengumpulkan ulat pada sore atau malam hari untuk dimusnahkan jika jumlahnya masih terbatas.\r\n2. Memasang likat berwarna kuning (yellow trap) atau feromon seks\r\n3. Jika tanaman sudah terlalu parah,  cabut tanaman sakit untuk dikumpulkan lalu dimasukkan ke dalam kantong plastik dan dimusnahkan.', 'Hama', 'ulatGrayak.png'),
('P002', 'Penggrok Daun (Liriomyza sp)', 'Serangga dewasa (imago) berwarna coklat tua kehitaman, berukuran panjang 1,5 - 2 mm.  Sayap transparan mengkilat dan rentang sayap mencapai 2,25 mm, Serangga betina dewasa meletakkan telur pada jaringan daun, sehari setelah kawin, Serangga dewasa menusuk daun-daun muda dengan ovipositornya.  Selain untuk makan (mengisap cairan) juga untuk meletakkan telur.   Larva hidup dengan cara mengorok daun sehingga pada daun terjadi alur-alur bekas korokan yang berliku. Kerusakan tanaman tidak hanya disebabkan oleh kotoran larva, tetapi juga karena tusukan ovipositor serangga betina yang menyebabkan gejala bintik-bintik putih.  Beberapa larva seringkali secara bersama-sama menyerang satu daun yang sama, sehingga daun layu sebelum waktunya dan mati.', 'Pengendalian :\r\n\r\n1. Sanitasi Lingkungan Pertanaman.\r\n2. Memotong dan membuang daun yang terserang.\r\n3. Aplikasi insektisida berbahan aktif kartap hidroklorida atau yang berefek serupa dan rotasi tanaman.(irm)', 'Hama', 'penggorokDaun.jpg'),
('P003', 'Thrips (Thrips parvispinus)', 'Hama trips menyerang dengan cara menggaruk dan mengisap cairan tanaman (daun muda/pucuk) dan tunas-tunas muda, sehingga sel-sel tanaman menjadi rusak dan mati.  Gejala serangan paling banyak dijumpai pada permukaan atas daun atau bunga.  Daun tampak keriput, mengeriting dan melengkung ke atas. Trips biasanya makan di bagian dalam kuncup bunga atau daun yang baru berkembang. Akibat hisapan trips, jaringan tanaman menjadi kering sehingga menimbulkan gejala keperakan. Gejala pada bunga berupa bintik-bintik putih. Kerusakan tanaman ini ditandai dengan adanya bercak-bercak keperak-perakan/kekuning-kuningan seperti perunggu terutama pada permukaan atas daun.  Gejala bercak keperak-perakan awalnya tampak dekat tulang daun menjalar ke tulang daun hingga seluruh permukaan daun menjadi putih.', 'Pencegahan :\r\n1. Mengatur waktu tanam\r\n2. Memasang  perangkap likat warna kuning dan perangkap tersebut dipasang pada saat tanam.\r\n3. Penggunaan mulsa plastik hitam perak untuk memutus siklus hidup hama sehingga tidak dapat berkepompong di dalam tanah di sekitar tanaman karena terhalang oleh mulsa plastik tersebut.\r\n\r\nPengendalian :\r\n1. Penggunaan agens hayati seperti Beauveria bassiana dapat dilakukan  untuk mengendalikan hama trips. \r\n2. Monitoring hama untuk menentukan ambang kendali. Sebagai indikator, pada saat ditemukan 10 nimfa/daun atau kerusakan tanaman mencapai 10% perlu dilakukan penyemprotan insektisida. Aplikasi insektisida berbahan aktif merkaptodimetur dapat dilakukan sesuai dosis anjuran.\r\n3. Pemanfaatan musuh alami predator kumbang Coccinellidae Coccinella repanda, Amblysius cucumeris, Orius minutes, Arachnidea dan patogen Entomophthora sp.', 'Hama', 'thrips.png'),
('P004', 'Kutu kebul/kutu putih (Bemissia tabaci)', 'Gejala serangan kutu kebul menimbulkan sejumlah dampak pada tanaman diantaranya akibat cairan daun yang dihisapnya menyebabkan daun menjadi bercak nekrotik karena rusaknya sel-sel dan jaringan daun. Ekskresi kutu kebul menghasilkan madu yang merupakan media yang baik untuk tempat tumbuhnya embun jelaga yang berwarna hitam. Hal ini menyebabkan proses fotosintesis tidak berlangsung normal. Selain itu, serangan kutu kebul sangat berbahaya karena dapat bertindak sebagai vektor virus. Yang dapat menyebabkan kehilangan hasil sekitar 20 sampai 100 % .', 'Pencegahan :\r\n1. Sanitasi Lingkungan\r\n2. Menanam pinggiran lahan dengan tanaman jagung atau bunga matahari sebagai barier untuk menghalangi atau mengganggu migrasi hama kutu kebul.\r\n3. Pemasangan perangkap likat berwarna kuning mampu menurunkan populasi kutu kebul.\r\n\r\nPengendalian :\r\n1.  Penggunaan pestisida nabati seperti: nimba, suren, mindi, serai wangi dapat digunakan untuk mengendalikan kutu kebul. \r\n2. Apabila cara lain tidak dapat menekan populasi kutu kebul, dapat digunakan insektisida kimia yang efektif antara lain; diafentiuron,  buprofesin, imidakloprid, amitraz, dan asefat.', 'Hama', 'kutuKebul.png'),
('P005', 'Karat Putih (Puccinia horiana)', 'Gejala serangan karat putih adalah terdapatnya bintil-bintil (pustul) putih pada daun bagian bawah yang berisi telium (teliospora) cendawan atau terjadi lekukan-lekukan mendalam berwarna pucat pada permukaan daun bagian atas. Teliospora bersel dua dan berdinding tebal. Penyakit ini berkembang dengan cepat pada suhu 16°-21°C. Pada serangan lebih lanjut, penyakit ini dapat menghambat perkembangan bunga.', 'Pencegahan :\r\nPemberian cendawan antagonis Cladosporium yang disemprotkan pada benih saat ditanam.     \r\n\r\nPengendalain :\r\n1. Sanitasi Lingkungan\r\n2. Aplikasi fungisida, penanaman varietas yang tahan/toleran\r\n3. Perbaikan lingkungan fisik pertanaman terutama aerasi dan kelembaban lingkungan pertanaman dengan penjarangan tanaman atau menanam dengan kerapatan lebih renggang.', 'Penyakit', 'karatPutih-min.jpg'),
('P006', 'Karat Hitam (Puccinia chrysanthemi)', 'Pada karat hitam, teliospora bersel satu, bulat atau berbentuk ginjal, dengan dinding sel berjerawat berwarna coklat atau putih cerah. Kadang-kadang terdapat urediospora yang bersel dua, dianggap sebagai dua urediospora yang berlekatan. Penyakit ini berkembang baik pada kelembaban tinggi terutama dengan pertanaman yang rapat.', 'Pencegahan :\r\nPemberian cendawan antagonis Cladosporium yang disemprotkan pada benih saat ditanam (irm).\r\n\r\nPengendalian :\r\n1. Sanitasi Lingkungan \r\n2. Aplikasi fungisida, penanaman varietas yang tahan/toleran\r\n3. Perbaikan lingkungan fisik pertanaman terutama aerasi dan kelembaban lingkungan pertanaman dengan penjarangan tanaman atau menanam dengan kerapatan lebih renggang.', 'Penyakit', 'karatHitam.jpg'),
('P007', 'Layu Fusarium (Fusarium oxysporum)', 'Gejala serangan Fusarium sp adalah tanaman layu, daun menguning dan mengering mulai dari daun bagian bawah merambat ke daun bagian atas, dan akhirnya mengakibatkan kematian tanaman. Potongan batang melintang pada tanaman yang sakit menunjukkan warna coklat melingkar di sekeliling pembuluhnya. Fusarium sp.  merupakan penyakit tular tanah (soilborne disease) yang dapat bertahan secara alami di dalam media tumbuh dan pada akar-akar tanaman sakit dalam jangka waktu yang relatif lama. Infeksi dapat melalui jaringan tanaman yang  terluka pada tanaman rentan.  Penyakit ini mudah menular melalui benih dan alat pertanian yang digunakan.', 'Pencegahan :\r\nPenanganan kuratif penyakit ini belum banyak diketahui. Pencegahan penyakit dapat melalui sterilisasi lahan pra tanam, penggunaan bibit yang sehat, sanitasi lingkungan dan  Media tanam dapat dicampur dengan biofungsisida berbahan aktif cendawan Gliocladium sp.(irm).\r\n\r\nPengendalian :\r\nApabila tanaman sudah terkena serangan yang cukup parah, segera memangkas tanaman untuk segera di bakar.', 'Penyakit', 'layuFusarium.png'),
('P008', 'Embun jelaga (Capnodium sp)', 'Gejala tanaman yang terserang embun jelaga dimulai dengan adanya bercak putih pada daun bagian bawah. Bercak putih itu berkembang cepat dan membentuk lapisan kehitaman dan lengket di permukaan daun. Bercak putih tersebut merupakan jamur penyebab embun jelaga ini. Ada dua jenis jamur yang menyerang tanaman mengakibatkan terbentuknya embun jelaga.  Capnodium Sp dan Meliola sp merupakan jamur penyebab penyakit embun jelaga.', 'Pengendalian :\r\n1. Sanitasi Lingkungan \r\n2. Pembersihan lokasi dari gulma yang terlalu rimbun. Gulma merupakan inang atau tempat tumbuh yang disukai oleh jamur.\r\n3. Memastikan Sinar matahari  dapat masuk kedalam sehingga suhu dan kelembaban tidak sesuai dengan tumbuhnya jamur jelaga\r\n4.  Daun yang terkena diambil dan dimusnahkan dengan pembakaran agar jamur tidak menyebar.', 'Penyakit', 'embun-jelaga.png'),
('P009', 'Embun Tepung (Oidium chrysanthemi)', 'Gejala serangan penyakit Embun Tepung Oidium chrysanthemi Rab. (Cendawan) yaitu terdapatnya lapisan putih bertepung pada permukaan daun. Tepung putih ini sebenarnya merupakan masa dari konidia cendawan.  Pada serangan berat menyebabkan daun pucat dan mengering. Penyakit biasa menyerang tanaman pada dataran tinggi maupun dataran rendah.  Suhu optimum untuk perkecambahan konidiumnya adalah 25’C. Cendawan berkembang pada cuaca kering, dan konidiumnya dapat berkecambah dalam udara dengan kelembaban  dalam udara dengan kelembaban nisbi rendah (50 - 75%).', 'Pencegahan :\r\n1. Sanitasi Lingkungan . \r\n2. Mengatur jarak tanam\r\n\r\nPengendalian :\r\n1. Segera bagian tanaman yang terserang embun tepung di bersihkan dan di bakar. \r\n2. Pengendalian dengan fungisida dapat dilakukan dengan menggunakan bahan aktif belerang, methyl thiophanate, Carbendazim, Benomyl.\r\n3. Pada musim kering sebaiknya tanaman sering diberikan air bersih setiap hari, jika terdapat gejala serangan, dapat diberikan bubur califoruia (kapur belerang).(irm).', 'Penyakit', 'embunTepung.jpg'),
('P010', 'Hawar Daun (Helminthosporium sp)', 'Hawar daun bakteri yang disebabkan oleh Pseudomonas chicorii, merupakan penyakit serius pada krisan, baik yang dibudidayakan di rumah kaca maupun lahan terbuka. Hawar daun bakteri dinyatakan sebagai penyakit primer pada tanaman krisan, yaitu penyakit yang dapat menurunkan hasil hingga 60%, terutama pada lingkungan bersuhu rendah dan kelembaban tinggi atau pada musim hujanGejala yang ditimbulkan, pada permukaan daun terdapat bercak-bercak coklat tidak beraturan, lama kelamaan bercak tersebut meluas ke seluruh permukaan daun seperti yang mengakibatkan daun gugur saat terkena angin.', 'Pengendalian :\r\n1. penggunaan varietas toleran (Puspita Nusantara, Puspa Kania, Dwina Kencana, Dwina Pelangi, Pasopati, Paras Ratu, dan Wastu Kania)\r\n2. kultur teknis (perompesan daun terinfeksi dan penyiraman pada pagi hari)\r\n3. Aplikasi bakterisida kimia sintetik berbahan aktif hydrogen peroxide dan peroxyacetic acid, atau biopestisida berbahan aktif isolat bakteri antagonis Bacillus subtilis MI600, dan B. amyloliquefaciens IN937, serta kombinasi P. fluorescens Pf Irana dengan Pf Slada-2.', 'Penyakit', 'hawardaun.png'),
('P011', 'Virus Kerdil (Chrysanthemum Stunt Viroid (CSVd)', 'Chrysanthemum Stunt Viroid (CSVd) merupakan salah satu viroid yang menginfeksi tanaman krisan.  Patogen ini jarang menimbulkan gejala yang jelas pada daun. Tanaman yang terserang umumnya menjadi kerdil dan cepat berbunga. Pada bibit yang sudah generasi lanjut, insiden gejala viroid ini persentasenya makin tinggi, mengakibatkan bunga potong yang layak dipasarkan makin berkurang.', 'Pencegahan :  \r\n     Pencegahan dapat dilakukan dengan menamam bibit yang bebas virus, menjaga kebersihan alat-alat pertanian, sanitasi lingkungan dan pencegahan terhadap intrusi serangga vektor.(irm)\r\n\r\nPengendalian :\r\n     Bila serangan sudah terjadi dapat berakibat fatal, karena usaha kuratif bisa dikatakan relatif sulit. Bagi tanaman rentan yang sudah terserang, dianjurkan untuk membuang seluruh tanaman terinfeksi dan mengganti dengan tanaman baru yang berasal dari tanaman sumber bebas virus.', 'Penyakit', 'csvd.png'),
('P012', 'Busuk Pangkal Batang (Pythium spp)', 'Penyakit busuk akar dan pangkal batang terutama pada tanaman Krisan disebabkan oleh cendawan Pythium spp. Penyakit ini sering dijumpai pada proses pengakaran stek hingga pada tanaman muda pada awal pertumbuhan.\r\n\r\nGejala serangan yaitu kelayuan tanaman dan daun menguning terutama daun bagian bawah. Pangkal batang yang berbatasan dengan akar busuk berwarna kehitaman. Bila tanaman dicabut, akar berwarna coklat sampai hitam dan mengkerut, bila bagian yang  akarnya busuk dipegang, bagian luar akan mudah terlepas dari bagian dalamnya.', 'Pencegahan :\r\n1. Menggunakan bahan tanam (benih) dan media tanam yang bebas penyakit serta \r\n2. Menempatkan bak-bak pengakaran lebih tinggi dari permukaan tanah agar dapat mengurangi kemungkinan penularan penyakit.\r\n\r\nPengendalian :\r\n1. Pemanfaatan fungisida, biofungisida berbahan aktif Gliocladium sp.\r\n2. Balai Penelitian Tanaman Hias telah menghasilkan teknologi biofungisida berbahan aktif Gliocladium sp. dengan diberi label atau merk Gliocompost.', 'Penyakit', 'busukPangkalBatang.jpg'),
('P013', 'Kapang kelabu (Botrytis cinerea)', 'Cendawan ini mempunyai inang yang luas, seperti gladiol, anggrek, violces, begonia, lili, mawar, bunga kertas, dan gulma air. Konidia berkecambah pada petal bunga, yang kemudian berkembang menjadi bercak kecil dan bundar dan membesar. Bila kelembaban pada lingkungan pertanaman tinggi (terutama pada musim hujan), intensitas serangan dapat meningkat dan menyebabkan busuk bunga.\r\n\r\n            Cendawan mempunyai konidiofor bercabang-cabang, bersekat, berwarna kelabu, dengan konidium lonjong atau hampir bulat, berukuran 12 - 13 x 9 - 10 ?m. Spora cendawan dapat menyebar dengan perantaraan angin atau serangga.  Cendawan dapat bertahan sebagai saprofit pada sisa-sisa tanaman sakit, dan penyakit biasanya hanya terjadi pada musim hujan pada kondisi yang sangat lembab.', 'Pengendalian :\r\n1. Jika sudah terserang parah sempot dengan Cabrio dua kali seminggu. \r\n2. Sanitasi lingkungan pertanaman dan penjarangan tanaman/bunga.(irm)(Dedihut).', 'Penyakit', 'kapangKelabu-compress1.jpg'),
('P014', 'Bercak daun (Septoria chrysanthemi)', 'Gejala serangan berupa bercak-bercak hitam pada daun. Pada bercak yang disebabkan S. chrysanthemi terdapat badan buah cendawan (piknidium) yang mempunyai lebar 150 - 250 ?m, dan berisi konidium berbentuk tabung, bersel 3 - 4, berukuran 50 - 80 x 2 - 3 ?m. Penyakit akan berkembang bila intensitas cahaya kurang, kelembaban tinggi, jarak tanam terlalu rapat, dan pemberian pupuk nitrogen yang terlalu banyak.Penyakit ini jarang menyerang pada musim kemarau.', 'Pengendalian :\r\nDilakukan dengan pengaturan musim tanam dan memperbaiki lingkungan pertanaman, terutama mengurangi kelembaban lingkungan mikro.(irm)', 'Penyakit', 'bercakDaun-min.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `id` int(11) NOT NULL,
  `kondisi` varchar(64) NOT NULL,
  `bobot` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi`
--

INSERT INTO `kondisi` (`id`, `kondisi`, `bobot`) VALUES
(1, 'Sangat Yakin', '1'),
(2, 'Yakin', '0.8'),
(3, 'Cukup Yakin', '0.6'),
(4, 'Sedikit Yakin', '0.4'),
(5, 'Tidak Tau', '0.2');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `kode_post` int(11) NOT NULL,
  `nama_post` varchar(50) NOT NULL,
  `det_post` text NOT NULL,
  `srn_post` text NOT NULL,
  `kategori` enum('Hama','Penyakit') NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`kode_post`, `nama_post`, `det_post`, `srn_post`, `kategori`, `gambar`) VALUES
(1, 'Ulat Grayak (Spodoptera litura)', '<p><strong>DESKRIPSI :</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Telur berbentuk bulat, berwarna cokelat kekuningan dengan bagian datar melekat pada daun, Warna larva bervariasi. Gejala serangan yaitu bagian tanaman yang diserang tampak robek bekas gigitan. Daun menguning Epidermis atau bagian atas daun rusak/transparan Tersisa hanya tulang daun pada tanaman Hama memakan tunas dan bunga.</p>\r\n\r\n<p><a href=\"http://balithi.litbang.pertanian.go.id/berita-347-ensiklopedia-hama-dan-penyakit-penting-tanaman-hias-krisan-part-6.html\" target=\"_blank\"><img alt=\"\" src=\"http://balithi.litbang.pertanian.go.id/gambar/berita/651.jpg\" style=\"height:174px; width:446px\" /></a></p>\r\n\r\n<p><img alt=\"\" src=\"http://balithi.litbang.pertanian.go.id/berita-347-ensiklopedia-hama-dan-penyakit-penting-tanaman-hias-krisan-part-6.html#\" />Hama ini bersifat polifag, dengan tanaman inang utama cabai, kubis, padi, jagung, tomat, tebu, buncis, jeruk, tembakau, bawang merah, terung, kentang, kacang-kacangan, kangkung, bayam, pisang, dan gulma. Larva yang masih kecil merusak daun dengan meninggalkan sisa-sisa epidermis bagian atas/transparan dan tinggal tulang-tulang daun saja. &nbsp;Gejala serangan pada daun rusak tidak beraturan, bahkan kadang-kadang hama ini juga memakan tunas dan bunga. Pada serangan berat menyebabkan daun tanaman habis. &nbsp;Intensitas serangan tinggi biasanya terjadi pada musim kemarau.</p>\r\n\r\n<p>&nbsp;</p>', '<p><strong>Pengendalian :</strong></p>\r\n\r\n<p>1. Pengendalian secara fisik, dilakukan melalui sterilisasi media tumbuh, misalnya dengan uap panas agar tanaman bebas dari organisme pengganggu tanaman (OPT) yang ditularkan melalui media tumbuh.</p>\r\n\r\n<p>2. Pengendalian secara mekanis, dilakukan dengan cara mencari dan mengumpulkan ulat pada sore atau malam hari untuk dimusnahkan jika jumlahnya masih terbatas, &nbsp;memasang likat berwarna kuning (yellow trap) atau feromon seks</p>\r\n\r\n<p>untuk mengendalikan ngengat pengorok daun dan ulat grayak, dan&nbsp;mencabut tanaman sakit untuk dikumpulkan lalu dimasukkan ke dalam kantong plastik dan dimusnahkan agar pathogen tidak menyebar.</p>', 'Hama', 'ulatGrayak.png'),
(2, 'Penggrok Daun (Liriomyza sp)', '<p><strong>DESKRIPSI :</strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Serangga dewasa (imago) berwarna coklat tua kehitaman, berukuran panjang 1,5 - 2 mm. &nbsp;Sayap transparan mengkilat dan rentang sayap mencapai 2,25 mm, Serangga betina dewasa meletakkan telur pada jaringan daun, sehari setelah kawin, Serangga dewasa menusuk daun-daun muda dengan ovipositornya. &nbsp;Selain untuk makan (mengisap cairan) juga untuk meletakkan telur. &nbsp; Larva hidup dengan cara mengorok daun sehingga pada daun terjadi alur-alur bekas korokan yang berliku. Pada intensitas serangan tinggi bagian daun dan kadang-kadang seluruh tanaman terlihat putih dan populasi pupa dapat mencapai 40 pupa. &nbsp;Pada populasi tinggi beberapa lubang korokan menyatu dan menyebabkan daun menguning mirip gejala serangan cendawan Phytophthora infestans. Kerusakan tanaman tidak hanya disebabkan oleh kotoran larva, tetapi juga karena tusukan ovipositor serangga betina yang menyebabkan gejala bintik-bintik putih. &nbsp;Beberapa larva seringkali secara bersama-sama menyerang satu daun yang sama, sehingga daun layu sebelum waktunya dan mati. &nbsp;.&nbsp;&nbsp;</p>\r\n\r\n<p><a href=\"http://balithi.litbang.pertanian.go.id/berita-554-pengorok-daun-liriomyza-sp.html\" target=\"_blank\"><img alt=\"\" src=\"http://balithi.litbang.pertanian.go.id/gambar/berita/82CollageMaker_20190418_055611222.jpg\" style=\"height:225px; width:225px\" /></a></p>', '<p><strong>Pengendalian</strong></p>\r\n\r\n<p>1. Sanitasi Lingkungan Pertanaman.</p>\r\n\r\n<p>2. Memotong dan membuang daun yang terserang.</p>\r\n\r\n<p>3.&nbsp;Aplikasi insektisida berbahan aktif kartap hidroklorida atau yang berefek serupa dan rotasi tanaman.(irm)</p>', 'Hama', 'penggorokDaun.jpg'),
(3, 'Thrips (Thrips parvispinus)', '<p><strong>DESKRISI :</strong></p>\r\n\r\n<p>Thrips berukuran sangat kecil (panjang tubuh 1 hingga 1,8 mm), ketika dewasa berwarna kuning pucat sampai coklat kehitaman terdapat bercak-bercak merah atau bergaris-garis. Trips muda berwarna putih atau kekuning-kuningan.</p>\r\n\r\n<p>Hama trips menyerang dengan cara menggaruk dan mengisap cairan tanaman (daun muda/pucuk) dan tunas-tunas muda, sehingga sel-sel tanaman menjadi rusak dan mati. &nbsp;Gejala serangan paling banyak dijumpai pada permukaan atas daun atau bunga. &nbsp;Daun tampak keriput, mengeriting dan melengkung ke atas. Trips biasanya makan di bagian dalam kuncup bunga atau daun yang baru berkembang. Akibat hisapan trips, jaringan tanaman menjadi kering sehingga menimbulkan gejala keperakan. Gejala pada bunga berupa bintik-bintik putih. Kerusakan tanaman ini ditandai dengan adanya bercak-bercak keperak-perakan/kekuning-kuningan seperti perunggu terutama pada permukaan atas daun. &nbsp;Gejala bercak keperak-perakan awalnya tampak dekat tulang daun menjalar ke tulang daun hingga seluruh permukaan daun menjadi putih. &nbsp;Daun kemudian menjadi coklat, mengeriting atau keriput dan akhirnya kering.&nbsp;Hama ini juga bertindak sebagai vektor Tomato Spotted Wilt Virus (TSWV).&nbsp; Populasi dan serangan trips biasanya tinggi pada musim kemarau dan menurun pada musim hujan.(BALITHI, 2016).&nbsp;</p>\r\n\r\n<p><a href=\"http://balithi.litbang.pertanian.go.id/berita-344-ensiklopedia-hama-dan-penyakit-penting-tanaman-hias-krisan-part-3.html\" target=\"_blank\"><img alt=\"\" src=\"http://balithi.litbang.pertanian.go.id/gambar/berita/72part3.jpg\" style=\"height:140px; width:450px\" /></a></p>', '<p><strong>Pencegahan :</strong><br />\r\n1. Mengatur waktu tanam<br />\r\n2. Memasang &nbsp;perangkap likat warna kuning dan perangkap tersebut dipasang pada saat tanam.<br />\r\n3. Penggunaan mulsa plastik hitam perak untuk memutus siklus hidup hama sehingga tidak dapat berkepompong di dalam tanah di sekitar tanaman karena terhalang oleh mulsa plastik tersebut.</p>\r\n\r\n<p><strong>Pengendalian :</strong><br />\r\n1. Penggunaan agens hayati seperti Beauveria bassiana dapat dilakukan &nbsp;untuk mengendalikan hama trips.&nbsp;<br />\r\n2. Monitoring hama untuk menentukan ambang kendali. Sebagai indikator, pada saat ditemukan 10 nimfa/daun atau kerusakan tanaman mencapai 10% perlu dilakukan penyemprotan insektisida. Aplikasi insektisida berbahan aktif merkaptodimetur dapat dilakukan sesuai dosis anjuran.</p>\r\n\r\n<p>3.&nbsp;Pemanfaatan musuh alami predator kumbang Coccinellidae Coccinella repanda, Amblysius cucumeris, Orius minutes, Arachnidea dan patogen Entomophthora sp.</p>\r\n\r\n<p>&nbsp;</p>', 'Hama', 'thrips.png'),
(4, 'kutu kebul/kutu putih (Bemissia tabaci)', '<p><strong>DESKRIPSI :</strong></p>\r\n\r\n<p>Gejala serangan kutu kebul menimbulkan sejumlah dampak pada tanaman diantaranya akibat cairan daun yang dihisapnya menyebabkan daun menjadi bercak nekrotik karena rusaknya sel-sel dan jaringan daun. Ekskresi kutu kebul menghasilkan madu yang merupakan media yang baik untuk tempat tumbuhnya embun jelaga yang berwarna hitam. Hal ini menyebabkan proses fotosintesis tidak berlangsung normal. Selain itu, serangan kutu kebul sangat berbahaya karena dapat bertindak sebagai vektor virus. Yang dapat menyebabkan kehilangan hasil sekitar 20 sampai 100 % .</p>\r\n\r\n<p>Telur berbentuk lonjong agak lengkung seperti pisang, berwarna kuning terang, berukuran panjang antara 0,2 - 0,3 mm. Telur biasanya diletakkan di permukaan bawah daun, pada daun teratas (pucuk). Serangga betina lebih menyukai daun yang telah terinfeksi virus mosaik kuning sebagai tempat untuk meletakkan telurnya daripada daun sehat. Rata-rata banyaknya telur yang diletakkan pada daun yang terserang virus adalah 77 butir, sedangkan pada daun sehat hanya 14 butir. Lama stadium telur rata-rata 5,8 hari.(BALITHI, 2016).</p>\r\n\r\n<p><a href=\"http://balithi.litbang.pertanian.go.id/berita-354-info-penelitian-kutu-kebul-bemisia-tabaci-genn.html\" target=\"_blank\"><img alt=\"\" src=\"http://balithi.litbang.pertanian.go.id/gambar/berita/23kutu.jpg\" style=\"height:199px; width:460px\" /></a></p>', '<p><strong>Pengendalian :</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pengendalian hama ini dapat dilakukan dengan menanam pinggiran lahan dengan tanaman jagung atau bunga matahari sebagai barier untuk menghalangi atau mengganggu migrasi hama kutu kebul. Sanitasi lingkungan, terutama untuk mengendalikan gulma daun lebar seperti babadotan dan ceplukan yang dapat menjadi tanaman inang kutu kebul. Pemasangan perangkap likat berwarna kuning mampu menurunkan populasi kutu kebul. Penanaman jagung selain sebagai penghalang fisik masuknya kutu kebul ke pertanaman krisan juga bermanfaat sebagai inang bagi serangga predator&nbsp; kutu kebul seperti kumbang Menochilus sexmaculatus Fab.&nbsp; Dengan demikian diharapkan dapat melestarikan dan meningkatkan musuh alami yang telah ada dengan memanipulasi lingkungan sehingga menguntungkan kemampuan bertahan hidupnya.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; Penggunaan pestisida nabati seperti: nimba, suren, mindi, serai wangi dapat digunakan untuk mengendalikan kutu kebul. Apabila cara lain tidak dapat menekan populasi kutu kebul, dapat digunakan insektisida kimia yang efektif antara lain; diafentiuron,&nbsp; buprofesin, imidakloprid, amitraz, dan asefat. Penyemprotan diusahakan mengenai bagian bawah daun. Perlu dihindari penggunaan pestisida secara berlebihan, karena dapat mendorong meningkatnya populasi kutu kebul.</p>\r\n\r\n<p>&nbsp;</p>', 'Hama', 'kutuKebul.png'),
(5, 'Karat Putih (Puccinia horiana)', '<p><strong>DESKRIPSI :</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Gejala serangan karat putih adalah terdapatnya bintil-bintil (pustul) putih pada daun bagian bawah yang berisi telium (teliospora) cendawan atau terjadi lekukan-lekukan mendalam berwarna pucat pada permukaan daun bagian atas. Teliospora bersel dua dan berdinding tebal. Penyakit ini berkembang dengan cepat pada suhu 16&deg;-21&deg;C. Pada serangan lebih lanjut, penyakit ini dapat menghambat perkembangan bunga. (BALITHI 2021)</p>\r\n\r\n<p><a href=\"http://balithi.litbang.pertanian.go.id/berita-669-karat-puccinia-japanese-white-rust.html\" target=\"_blank\"><img alt=\"\" src=\"http://balithi.litbang.pertanian.go.id/gambar/berita/67IMG_20190717_051648.jpg\" style=\"height:263px; width:369px\" /></a></p>', '<p><strong>Pengendalian :</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Pengendalian dengan sanitasi lingkungan, aplikasi fungisida, penanaman varietas yang tahan/toleran dan perbaikan lingkungan fisik pertanaman terutama aerasi dan kelembaban lingkungan pertanaman dengan penjarangan tanaman atau menanam dengan kerapatan lebih renggang. Pencegahan dapat dilakukan dengan pemberian cendawan antagonis Cladosporium yang disemprotkan pada benih saat ditanam.&nbsp; &nbsp; &nbsp;</p>', 'Penyakit', 'karatPutih-min.jpg'),
(6, 'Karat Hitam (Puccinia chrysanthemi)', '<p><strong>DESKRIPSI :</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pada karat hitam, teliospora bersel satu, bulat atau berbentuk ginjal, dengan dinding sel berjerawat berwarna coklat atau putih cerah. Kadang-kadang terdapat urediospora yang bersel dua, dianggap sebagai dua urediospora yang berlekatan. Penyakit ini berkembang baik pada kelembaban tinggi terutama dengan pertanaman yang rapat (BALITHI, 2018).</p>\r\n\r\n<p><strong><a href=\"http://balithi.litbang.pertanian.go.id/berita-412-mengenal-penyakit-krisan-karat-puccinia-japanese-white-rust-fungi-jamur.html\" target=\"_blank\"><img alt=\"\" src=\"http://balithi.litbang.pertanian.go.id/gambar/berita/98karat%20daun.jpg\" style=\"height:281px; width:412px\" /></a></strong></p>', '<p><strong>Pengendalian:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Cara pengendalian penyakit ini dilakukan dengan sanitasi lingkungan, aplikasi fungisida, penanaman varietas yang tahan/toleran dan perbaikan lingkungan fisik pertanaman terutama aerasi dan kelembaban lingkungan pertanaman dengan penjarangan tanaman atau menanam dengan kerapatan lebih renggang. Pencegahan dapat dilakukan dengan pemberian cendawan antagonis Cladosporium yang disemprotkan pada benih saat ditanam.(irm).</p>', 'Penyakit', 'karatHitam.jpg'),
(7, 'Layu Fusarium (Fusarium oxysporum)', '<p><strong>DESKRIPSI :</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Gejala serangan Fusarium sp adalah tanaman layu, daun menguning dan mengering mulai dari daun bagian bawah merambat ke daun bagian atas, dan akhirnya mengakibatkan kematian tanaman. Potongan batang melintang pada tanaman yang sakit menunjukkan warna coklat melingkar di sekeliling pembuluhnya. Fusarium sp.&nbsp; merupakan penyakit tular tanah (soilborne disease) yang dapat bertahan secara alami di dalam media tumbuh dan pada akar-akar tanaman sakit dalam jangka waktu yang relatif lama.&nbsp; Infeksi dapat melalui jaringan tanaman yang&nbsp; terluka pada tanaman rentan.&nbsp; Penyakit ini mudah menular melalui benih dan alat pertanian yang digunakan.</p>\r\n\r\n<p><a href=\"http://balithi.litbang.pertanian.go.id/berita-653-layu-fusarium-oxysporum.html\" target=\"_blank\"><img alt=\"\" src=\"http://balithi.litbang.pertanian.go.id/gambar/berita/74IMG_20190709_051320.jpg\" style=\"height:336px; width:566px\" /></a></p>', '<p><strong>Pengendalian :</strong></p>\r\n\r\n<p>Penanganan kuratif penyakit ini belum banyak diketahui. Pencegahan penyakit dapat melalui sterilisasi lahan pra tanam, penggunaan bibit yang sehat, sanitasi lingkungan dan&nbsp; Media tanam dapat dicampur dengan biofungsisida berbahan aktif cendawan Gliocladium sp.(irm).</p>', 'Penyakit', 'layuFusarium.png'),
(8, 'Embun jelaga (Capnodium sp)', '<p><strong>DESKRIPSI :</strong></p>\r\n\r\n<p>Gejala tanaman yang terserang embun jelaga dimulai dengan adanya bercak putih pada daun bagian bawah. Bercak putih itu berkembang cepat dan membentuk lapisan kehitaman dan lengket di permukaan daun. Bercak putih tersebut merupakan jamur penyebab embun jelaga ini. Ada dua jenis jamur yang menyerang tanaman mengakibatkan terbentuknya embun jelaga. &nbsp;Capnodium Sp dan Meliola sp merupakan jamur penyebab penyakit embun jelaga.</p>\r\n\r\n<p>Keunikan dari penyakit embun jelaga ini adalah cara penyebarannya. Embun jelaga tersebar karena ada serangga pembawanya (vektor). Ada dua serangga vektornya yaitu kutu putih dan semut. Kadang kedua vektor ini berkumpul dan mempercepat tanaman terkena embun jelaga.</p>\r\n\r\n<p>Biasanya serangga mendatangi pangkal daun atau pangkal buah. Serangga menghisap gula dari tanaman dan bekas hisapan ini merupakan tempat tumbuhnya jamur. Jamur akan tumbuh dan mengambil gula dari tanaman. Serangga tinggal menghisap gula dari jamur. sehingga terjadi hubungan yang saling menguntungkan antara jamur dan serangga.</p>\r\n\r\n<p>Kebanyakan awal dari serangan dimulai dengan hadirnya kutu putih. Kutu putih ini berkumpul di bawah daun dan membentuk koloni menghisap gula dari tanaman. Gula tersebut yang merangsang tumbuhnya jamur jelaga ini. Jamur jelaga akan mengambil makanan dari tempat yang terserang. Nutrisi tanaman akan menurun sehingga pertumbuhan tanaman terganggu. Bila serangan penyakit jelaga ini telah mencapai puncaknya, seluruh daun akan dilapisi jamur dan menghitam.</p>', '<p><strong>Pengendalian :</strong></p>\r\n\r\n<ol>\r\n	<li>Sanitasi lingkungan, pembersihan lokasi dari gulma yang terlalu rimbun. Gulma merupakan inang atau tempat tumbuh yang disukai oleh jamur.</li>\r\n	<li>Mengurangi kerimbunan pohon. Sinar matahari diusahakan dapat masuk kedalam sehingga suhu dan kelembaban tidak sesuai dengan tumbuhnya jamur jelaga. Daun yang terkena diambil dan dimusnahkan dengan pembakaran agar jamur tidak menyebar. Dalam perempelan dahan dan daun yang terkena embung tepung harus hati-hati karena bisa saja jamur justru lepas dan terbawa angin menyerang tanaman lainnya.</li>\r\n</ol>', 'Penyakit', 'embun-jelaga.png'),
(9, 'Embun Tepung (Oidium chrysanthemi)', '<p><strong>DESKRIPSI :</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Gejala serangan penyakit Embun Tepung Oidium chrysanthemi Rab. (Cendawan) yaitu terdapatnya lapisan putih bertepung pada permukaan daun. Tepung putih ini sebenarnya merupakan masa dari konidia cendawan.&nbsp; Pada serangan berat menyebabkan daun pucat dan mengering. Penyakit biasa menyerang tanaman pada dataran tinggi maupun dataran rendah.&nbsp; Suhu optimum untuk perkecambahan konidiumnya adalah 25&rsquo;C. Cendawan berkembang pada cuaca kering, dan konidiumnya dapat berkecambah dalam udara dengan kelembaban nisbi rendah (50 - 75%). (BALITHI, 2019).</p>\r\n\r\n<p><a href=\"http://balithi.litbang.pertanian.go.id/berita-593-mengenali-penyakit-tanaman-hias-embun-tepung-oidium-chrysanthemi-rab.html\" target=\"_blank\"><img alt=\"\" src=\"http://balithi.litbang.pertanian.go.id/gambar/berita/6CollageMaker_20190521_213732735.jpg\" style=\"height:400px; width:400px\" /></a></p>', '<p><strong>Pengendalian :</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pengendalian dengan kultur teknis seperti mengatur jarak tanam, sanitasi lingkungan. Apabila tanaman sudah terserang, segera bagian tanaman yang terserang embun tepung di bersihkan dan di bakar. Pengendalian dengan fungisida dapat dilakukan dengan menggunakan bahan aktif belerang, methyl thiophanate, Carbendazim, Benomyl. Pada musim kering sebaiknya tanaman sering diberikan air bersih setiap hari, jika terdapat gejala serangan, dapat diberikan bubur califoruia (kapur belerang).(irm)</p>', 'Penyakit', 'embunTepung.jpg'),
(10, 'Hawar Daun (Helminthosporium sp)', '<p><strong>DESKRIPSI :</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Hawar daun bakteri yang disebabkan oleh Pseudomonas chicorii, merupakan penyakit serius pada krisan, baik yang dibudidayakan di rumah kaca maupun lahan terbuka. Hawar daun bakteri dinyatakan sebagai penyakit primer pada tanaman krisan, yaitu penyakit yang dapat menurunkan hasil hingga 60%, terutama pada lingkungan bersuhu rendah dan kelembaban tinggi atau pada musim hujanGejala yang ditimbulkan, pada permukaan daun terdapat bercak-bercak coklat tidak beraturan, lama kelamaan bercak tersebut meluas ke seluruh permukaan daun seperti yang mengakibatkan daun gugur saat terkena angin</p>', '<p><strong>Pencegahan&nbsp;:</strong></p>\r\n\r\n<p>1. penggunaan varietas toleran (Puspita Nusantara, Puspa Kania, Dwina Kencana, Dwina Pelangi, Pasopati, Paras Ratu, dan Wastu Kania)<br />\r\n2. kultur teknis (perompesan daun terinfeksi dan penyiraman pada pagi hari)<br />\r\n3. Aplikasi bakterisida kimia sintetik berbahan aktif hydrogen peroxide dan peroxyacetic acid, atau biopestisida berbahan aktif isolat bakteri antagonis Bacillus subtilis MI600, dan B. amyloliquefaciens IN937, serta kombinasi P. fluorescens Pf Irana dengan Pf Slada-2.</p>', 'Penyakit', 'hawardaun.png'),
(11, 'Virus Kerdil (Chrysanthemum Stunt Viroid (CSVd)', '<p><strong>DESKRIPSI :</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Chrysanthemum Stunt Viroid (CSVd) merupakan salah satu viroid yang menginfeksi tanaman krisan.&nbsp; Patogen ini jarang menimbulkan gejala yang jelas pada daun. Tanaman yang terserang umumnya menjadi kerdil dan cepat berbunga. Pada bibit yang sudah generasi lanjut, insiden gejala viroid ini persentasenya makin tinggi, mengakibatkan bunga potong yang layak dipasarkan makin berkurang.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Infeksi CSVd pada tanaman krisan dapat menyebabkan terjadinya degenerasi, akibatnya pertumbuhan tanaman menjadi terhambat (stunting) dengan perakaran yang terbatas, daun-daun berukuran kecil dan berwarna hijau pucat, pembungaan lebih cepat (beberapa hari) dibandingkan dengan yang sehat, dan bunga yang dihasilkan berukuran sangat kecil dengan warna lebih pudar. (BALITHI, 2019).</p>\r\n\r\n<p><a href=\"http://balithi.litbang.pertanian.go.id/berita-690-virus-dan-viroid-pada-krisan.html\"><img alt=\"\" src=\"http://balithi.litbang.pertanian.go.id/gambar/berita/61csvd-oke.png\" style=\"height:433px; width:550px\" /></a></p>', '<p><strong>Pengendalian :</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Bila serangan sudah terjadi dapat berakibat fatal, karena usaha kuratif bisa dikatakan relatif sulit. Bagi tanaman rentan yang sudah terserang, dianjurkan untuk membuang seluruh tanaman terinfeksi dan mengganti dengan tanaman baru yang berasal dari tanaman sumber bebas virus.&nbsp; Pencegahan dapat dilakukan dengan menamam bibit yang bebas virus, menjaga kebersihan alat-alat pertanian, sanitasi lingkungan dan pencegahan terhadap intrusi serangga vektor.(irm)</p>', 'Penyakit', 'csvd.png'),
(12, 'Busuk Pangkal Batang (Pythium spp)', '<p><strong>DESKRIPSI :</strong></p>\r\n\r\n<p>Penyakit busuk akar dan pangkal batang terutama pada tanaman Krisan disebabkan oleh cendawan Pythium spp. Penyakit ini sering dijumpai pada proses pengakaran stek hingga pada tanaman muda pada awal pertumbuhan.</p>\r\n\r\n<p>Gejala serangan yaitu kelayuan tanaman dan daun menguning terutama daun bagian bawah. Pangkal batang yang berbatasan dengan akar busuk berwarna kehitaman. Bila tanaman dicabut, akar berwarna coklat sampai hitam dan mengkerut, bila bagian yang&nbsp; akarnya busuk dipegang, bagian luar akan mudah terlepas dari bagian dalamnya.&nbsp;&nbsp;</p>\r\n\r\n<p>Pencegahan terserangnya penyakit ini dapat dilakukan dengan menggunakan bahan tanam (benih) dan media tanam yang bebas penyakit serta menempatkan bak-bak pengakaran lebih tinggi dari permukaan tanah agar dapat mengurangi kemungkinan penularan penyakit.</p>\r\n\r\n<p><strong><a href=\"http://balithi.litbang.pertanian.go.id/berita-729-mengatasi-penyakit-busuk-akar-dan-pangkal-batang-pada-krisan.html\" target=\"_blank\"><img alt=\"\" src=\"http://balithi.litbang.pertanian.go.id/gambar/berita/33CollageMaker_20190825_133718719-01.jpeg\" style=\"height:380px; width:380px\" /></a></strong></p>', '<p><strong>Pencegahan :</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; Terserangnya penyakit ini dapat dilakukan dengan menggunakan bahan tanam (benih) dan media tanam yang bebas penyakit serta menempatkan bak-bak pengakaran lebih tinggi dari permukaan tanah agar dapat mengurangi kemungkinan penularan penyakit.</p>\r\n\r\n<p><strong>Penanganan :</strong></p>\r\n\r\n<p>Saat ini sudah banyak juga fungisida yang dapat mengendalikan penyakit ini, diantaranya biofungisida berbahan aktif Gliocladium sp.</p>\r\n\r\n<p>Balai Penelitian Tanaman Hias telah menghasilkan teknologi biofungisida berbahan aktif Gliocladium sp. dengan diberi label atau merk Gliocompost. Selain mengandung Gliocladium sp, Gliocompost diperkaya dengan bakteri Azotobacter sp. dan Azospirillium sp., Pseudomonas sp. efektif&nbsp; mengendalikan patogen tular tanah seperti layu fusarium, Plasmodiophora brassicae, Ralstonia solanacearum dan lain-lain. (irm)</p>', 'Penyakit', 'busukPangkalBatang.jpg'),
(13, 'Kapang kelabu (Botrytis cinerea)', '<p><strong>DESKRIPSI :</strong></p>\r\n\r\n<p>Kapang kelabu&nbsp;<em>Botrytis cinerea</em>&nbsp; Pers. (Cendawan)</p>\r\n\r\n<p>Cendawan ini mempunyai inang yang luas, seperti gladiol, anggrek, violces, begonia, lili, mawar, bunga kertas, dan gulma air. Konidia berkecambah pada petal bunga, yang kemudian berkembang menjadi bercak kecil dan bundar dan membesar. Bila kelembaban pada lingkungan pertanaman tinggi (terutama pada musim hujan), intensitas serangan dapat meningkat dan menyebabkan busuk bunga.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Cendawan mempunyai konidiofor bercabang-cabang, bersekat, berwarna kelabu, dengan konidium lonjong atau hampir bulat, berukuran 12 - 13 x 9 - 10 &mu;m. Spora cendawan dapat menyebar dengan perantaraan angin atau serangga.&nbsp; Cendawan dapat bertahan sebagai saprofit pada sisa-sisa tanaman sakit, dan penyakit biasanya hanya terjadi pada musim hujan pada kondisi yang sangat lembab.&nbsp;&nbsp;</p>\r\n\r\n<p>Pengendalian dilakukan dengan sanitasi lingkungan pertanaman dan penjarangan tanaman/bunga.(irm)(Dedihut)</p>\r\n\r\n<p>(BALITHI, 2019).</p>\r\n\r\n<p><a href=\"http://balithi.litbang.pertanian.go.id/berita-541-mengenal-penyakit-tanaman-hias-iii.html\" target=\"_blank\"><img alt=\"\" src=\"http://balithi.litbang.pertanian.go.id/gambar/berita/20CollageMaker_20190406_215633819.jpg\" style=\"height:400px; width:400px\" /></a></p>', '<p><strong>Pengendalian :</strong></p>\r\n\r\n<p>Pengendalian dilakukan dengan membuang daun dan bunga yang telah terinfeksi penyakit ini Untuk pencegahan dilakukan penyemprotan secara rutin dengan fungisida Dithane atau Daconil. Untuk pengendalian jika sudah terserang parah sempot dengan Cabrio dua kali seminggu.&nbsp;Pengendalian dilakukan dengan sanitasi lingkungan pertanaman dan penjarangan tanaman/bunga.(irm)(Dedihut)</p>', 'Penyakit', 'kapangKelabu-compress1.jpg'),
(14, 'Bercak daun (Septoria chrysanthemi)', '<p><strong>DESKRIPSI :</strong></p>\r\n\r\n<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong>Gejala serangan berupa bercak-bercak hitam pada daun. Pada bercak yang disebabkan S. chrysanthemi terdapat badan buah cendawan (piknidium) yang mempunyai lebar 150 - 250 &mu;m, dan berisi konidium berbentuk tabung, bersel 3 - 4, berukuran 50 - 80 x 2 - 3 &mu;m. Penyakit akan berkembang bila intensitas cahaya kurang, kelembaban tinggi, jarak tanam terlalu rapat, dan pemberian pupuk nitrogen yang terlalu banyak.Penyakit ini jarang menyerang pada musim kemarau. (BALITHI, 2019).</p>\r\n\r\n<p><a href=\"http://balithi.litbang.pertanian.go.id/berita-569-bercak-daun-septoria-chrysanthemi-allesch-dan-s-leucanthemi-sacc-et-speg.html\" target=\"_blank\"><img alt=\"\" src=\"http://balithi.litbang.pertanian.go.id/gambar/berita/19CollageMaker_20190503_052913882.jpg\" style=\"height:400px; width:400px\" /></a></p>\r\n\r\n<p>&nbsp;</p>', '<p><strong>Pengendalian :</strong></p>\r\n\r\n<p>Pengendalian dilakukan dengan pengaturan musim tanam dan memperbaiki lingkungan pertanaman, terutama mengurangi kelembaban lingkungan mikro.(irm)</p>', 'Penyakit', 'bercakDaun-min.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  ADD PRIMARY KEY (`kode_pengetahuan`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `hp`
--
ALTER TABLE `hp`
  ADD PRIMARY KEY (`kode_hp`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`kode_post`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  MODIFY `kode_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=361;

--
-- AUTO_INCREMENT for table `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `kode_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
