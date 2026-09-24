-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2025 at 03:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mse`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang_proyek`
--

CREATE TABLE `bidang_proyek` (
  `id_bproyek` bigint(20) NOT NULL,
  `nama_bproyek` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bidang_proyek`
--

INSERT INTO `bidang_proyek` (`id_bproyek`, `nama_bproyek`) VALUES
(1, 'Maintenance'),
(2, 'Electrical'),
(3, 'Civil'),
(4, 'Sewa Alat'),
(5, 'Construction'),
(6, 'Pengadaan'),
(7, 'Testing & Commissioning'),
(11, 'Uji Lab');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id_equipment` int(11) NOT NULL,
  `namaquipment` varchar(200) NOT NULL,
  `gambarquipment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id_equipment`, `namaquipment`, `gambarquipment`) VALUES
(1, 'Cable Roller', '1748068030_machine-Roller-Straight_V.jpg'),
(2, 'Cable Roller', '1748068055_machine-Roller-Straight.jpg'),
(3, 'Cable Roller', '1748068190_machine-Roller-Corner3.jpg'),
(4, 'Genset', '1748068235_machine-Essab2.jpg'),
(9, 'Injector', '1748068273_machine-eSF6_Injector_-_Mitsubishi.jpg'),
(11, 'PPM', '1748068347_machine-Foto_alat_PPM.jpg'),
(12, 'Pump', '1748068390_machine-eVacuum_Pump_-_Robinair.jpg'),
(13, 'Tangki', '1748068475_machine-Tangki_24000.jpg'),
(14, 'Testing and Commissioning', '1748068538_machine-01e_Digital_Osciloscope_-_Gould.jpg'),
(15, 'Testing and Commissioning', '1748068571_machine-04a_Digital_Multimeter_-_Fluke_87.jpg'),
(16, 'Testing and Commissioning', '1748068603_machine-05e_LCR_Logic_Multimeter_-_Constant_DMM95.jpg'),
(17, 'Testing and Commissioning', '1748068623_machine-06e_Vector_Digital_Multimeter_-_DTEC.jpg'),
(18, 'Testing and Commissioning', '1748068681_machine-06e_Vector_Digital_Multimeter_-_DTEC (1).jpg'),
(19, 'Testing and Commissioning', '1748068703_machine-10e_Earth_Tester_-_Yokogawa_3235.jpg'),
(20, 'Testing and Commissioning', '1748068753_machine-12a_Eart_Tester_-_Constant_25ER.jpg'),
(21, 'Testing and Commissioning', '1748068771_machine-13e__Earthing_Clamp_-_Kyoritsu_4200.jpg'),
(22, 'Testing and Commissioning', '1748068789_machine-16e_Earth_Test_-_Kyoritsu_3123.jpg'),
(23, 'Testing and Commissioning', '1748068816_machine-17e_Insulation_Resistance_Test_-_Megabrass.jpg'),
(24, 'Testing and Commissioning', '1748068834_machine-18e_Insul_Resistance_-_Constant_21D.jpg'),
(25, 'Testing and Commissioning', '1748068865_machine-19e_Insulation_resistance_-_Kyoritsu_3125.jpg'),
(26, 'Testing and Commissioning', '1748068885_machine-28e_CB_Timing_Trip_-_Vanguard.jpg'),
(27, 'Testing and Commissioning', '1748068903_machine-29e_Primary_Injection_-_ISA.jpg'),
(28, 'Testing and Commissioning', '1748068922_machine-30e_Micro_Ohm-_ISA.jpg'),
(29, 'Testing and Commissioning', '1748068943_machine-32e_DRTS6_-_ISA.jpg'),
(30, 'Testing and Commissioning', '1748068966_machine-33e_Battery_Load_Test_-_Isa_BTS100.jpg'),
(31, 'Testing and Commissioning', '1748068988_machine-33e_Battery_Load_Test_-_Isa_BTS100.jpg'),
(32, 'Testing and Commissioning', '1748069016_machine-34e_Tan_Delta_-_Midas.jpg'),
(33, 'Testing and Commissioning', '1748069035_machine-35e_TTR_-_Megger.jpg'),
(34, 'Testing and Commissioning', '1748069059_machine-36e_Hipot_-_Seba.jpg'),
(35, 'Testing and Commissioning', '1748069075_machine-37e_DGA_-_Kelman.jpg'),
(36, 'Testing and Commissioning', '1748069094_machine-38e_Infrared_Thermal_-_Visir.jpg'),
(37, 'Testing and Commissioning', '1748069120_machine-Amp_Test.jpg'),
(38, 'Testing and Commissioning', '1748069137_machine-eEart_Clamp_Tester_-_GE.jpg'),
(39, 'Transmission', '1748069161_machine-Pulling_Machine_-_Lancier.jpg'),
(40, 'Treatment Oil', '1748069187_machine-Kato-500.jpg'),
(41, 'Treatment Oil', '1748069204_machine-Kato-1000.jpg'),
(42, 'Treatment Oil', '1748069224_machine-Kato-4000.jpg'),
(43, 'Treatment Oil', '1748069527_machine-DSCF7069.jpg'),
(44, 'Treatment Oil', '1748069550_machine-DSCF7074.jpg'),
(45, 'Treatment Oil', '1748069576_machine-TankFlex-25000.jpg'),
(46, 'Treatment Oil', '1748069595_machine-Vacumm_Kato.jpg'),
(47, 'Welding', '1748069619_machine-eTig_Weld_-_ESAB.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `klien`
--

CREATE TABLE `klien` (
  `id_klien` bigint(20) NOT NULL,
  `nama_klien` varchar(200) DEFAULT NULL,
  `alamat_klien` varchar(200) DEFAULT NULL,
  `telp_klien` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`id_klien`, `nama_klien`, `alamat_klien`, `telp_klien`) VALUES
(1, 'HITACHI Indonesia Project Office', 'HITACHI Indonesia Project Office', 'T-'),
(2, 'PT. PLN Proyek Induk Jaringan Jawa Timur dan Bali', 'Jl. Ketintang Baru No. 1 Surabaya', '-'),
(3, 'PT. Wasa Mitra Engineering Proyek PKB Paket VI PT. PLN RJTB', 'Jl. Suningrat 45 (Gardu Induk Waru)', '-'),
(4, 'KOKUBU WORKS of HITACHI, Ltd.', 'Jakarta', '-'),
(5, 'PT. Schneider Electric', 'Jakarta', '-'),
(6, 'PT. Schneider Electric', 'Jakarta', 'T-'),
(7, 'SIEMENS', 'Jl. A. Yani Kab. Jakarta', 'T - (021) 4729252'),
(8, 'PT. PLN (Persero) PJB Region Jawa Bali', 'Jl. Suningrat No. 45 Taman Sby', 'T - (031) 7882114'),
(9, 'PT. PLN P3B Jakarta', 'Jakarta', 'T-'),
(10, 'PT. Aryasada P. Jakarta', 'Tifa Building 3rd. Floor Jl. Kuningan Barat 26 Jakarta', 'T-(021) 5200620'),
(11, 'PT. Vatech Trans. and Distr. Jakarta', 'Vatech Building3rd. Fl. Jl. Talang No. 3 Proklamasi Jkt', 'T-(021) 3906929'),
(12, 'PT. Adiquato Elekt. Banjarmasin', 'Jl. Brigjen Hasan Basri RT 16 No. 23 Banjarmasin', 'T-'),
(13, 'PT. Wasa Mitra Eng. Jakarta', 'Jl. Ry. Cakung KM1 No. 11 Jakarta Timur 13910', 'T-(021) 4604958'),
(14, 'PT. Vatech Trans. Dist. Jakarta', 'Vatech Building3rd. Fl. Jl. Talang No. 3 Proklamasi Jkt', 'T-(021) 3906929'),
(15, 'PT. The Master Steel Jakarta', 'Jl. Ry. Bekasi KM 21 Pulogadung Jakarta', 'T-(021) 4606188'),
(16, 'PT. Truba Jurong Eng Jakarta', 'Jakarta', 'T-'),
(17, 'Pemkab Sidoarjo', 'Sidoarjo', 'T-'),
(18, 'PT. Cita Contrac Jakarta', 'Jakarta', 'T-'),
(19, 'PT. PLN (Persero) Pikitringkal', 'Jl. MT. Haryono 384 Balikpapan', 'T-'),
(20, 'MM2100 Industrial Town', 'Cikarang Barat, Bekasi 17520', 'T - (021) 8981001'),
(21, 'PT. Vatech T & DVatech 	Building3rd. Fl.', 'Jl. Talang No. 3 Proklamasi Jkt', 'T-(021) 3906929'),
(22, 'PT. Meta Epsi', 'Jl. DI Panjaitan Kav. 2 Rawabunga Jatinegara Jaktim 13350', 'T-(021) 8564955'),
(23, 'PT. PLN Wilayah Suluttenggo', 'Jl. Bethesda No. 32 Manado 95116', 'T-(0431)862444'),
(24, 'Cheil JedangDs.', 'Arjosari Kec. Rejoso Pasuruan', 'T-(0343) 401327'),
(25, 'ESDM Propinsi Jawa Timur', 'Jl. Tidar 123 Surabaya', 'T-'),
(26, 'ABB T & D', 'Jl. Gajah Tunggal KM.1, Kec. Jaituwung Tangerang', 'T-'),
(27, 'PT. PLN (Persero) Pikitringkal', 'Jl. M.T. Haryono No. 384 Balikpapan 76114', 'T-(542)871559'),
(28, 'ABB T & D', 'Jl. Wisma Metropolitan II, 8th. Floor Jl. Sudirman Kav. 29031 Jkt', 'T-'),
(29, 'PT. PLN Pikitringkal', 'Jl. MT. Haryono 76114 Balikpapan', 'T-'),
(30, 'Pemkab Kutai Kalimantan', 'Jl. Jend. A. Yani Tenggarong', 'T-'),
(31, 'PT. PLN (Persero) P3B Ragion jawa Timur dan Bali', 'Jl. Suningrat No. 45 Taman Sidaorjo', 'T-'),
(32, 'PT. Rekayasa Industri', 'Jl. Kalibata Timur I/36 Jakarta 12740', 'T-'),
(33, 'PT. Rekayasa Industri', 'Construction Site, Sg. Liang Industrial Park, Brunei Darussalam', 'T-'),
(34, 'PT. Merapi Trams Energi', 'Jl. Sarikaso III No. 9B Sarijadi Bandung', 'T-'),
(35, 'PEMKAB BLITAR', 'Jl. S. Supriyadi No. 86 Pos No. 24 Blitar', 'T-'),
(36, 'PT. PLN (Persero) Jasa Sertifikasi', 'Jl. Laboratorium Duren Tiga Jakarta', 'T-'),
(37, 'PT. Areva T & D', 'Jl. Pulo Buaran Raya Blok IIIEE Kav 2-3-6 Kawasan Industri  Pulogadung Jakarta', 'T-'),
(38, 'PT. KABEL METAL INTERNUSA', 'Jl. Raya Bekasi Km.23,1 – Cakung Jakarta', 'T-'),
(39, 'PT. Elementarika Nusantara', 'Jl Budi Asih Erin No. 3 Bandung Kode Pos 40153', 'T-'),
(40, 'PT. META EPSI', 'Jl. Brigjen DI Panjaitan Kav. 02  Jakarta', 'T-'),
(41, 'PT. CG Power Indonesia', 'Jl. Narogong KM 23,852 Menara Permai KAV 10, Cileungsi Bogor 16820', 'T-'),
(42, 'PT. Persada Engineering & Contacting', 'Ruko Sentra Niaga Boulevar Hijau D/09 Pejuang Medan Satria Bekasi 17131', 'T-'),
(43, 'PT. Centra Multi Teknindo', 'Jl. Kemukus No. 32 Blok B27 Jakarta 11110', 'T-'),
(44, 'PT. PLN (Persero) P3B RJTB', 'Jl. Suningrat No. 45 Taman Sidaorjo', 'T-'),
(45, 'PT. ABB Sakti Industri', 'Gd. WTC 1 Lt. 15 Jl. Jend. Sudirman Kav 29-31 Setiabudi Jakarta Selatan', 'T-'),
(46, 'PT. Siemens Indonesia', 'Jl. Jend. A. Yani Kav 67-68 Jakarta', 'T-'),
(47, 'PT. Alstom Gird', 'Plaza Alstom Lt. 8 Jl. TB Simatupang Kav. 15-1 Cilandak Barat Jakarta', 'T-'),
(48, 'PT. Pertamina AGE Kamojang', 'Menara Cakrawala Lt. 15 Jl. MH Thamrin No. 9 Jakarta', 'T-'),
(49, 'PT. Raga Perkasa Ekaguna', 'Jl. Sultan Agung No. 59 Jakarta 12970', 'T-'),
(50, 'PT. PLN P3B Sumatera', 'Jl. S. Parman No. 221 Padang', 'T-'),
(51, 'PT. PLN  Wilayah Bangka Belitung', 'Jl. Soekarno Hatta KM 5 Pangkal Pinang', 'T-'),
(52, 'PT. Hitachi Power Systems Indonesia', 'EJIP Industrial Park, Plot 8 E Cikarang Selatan Bekasi', 'T-'),
(53, 'PT. Hitachi Power Systems Indonesia', 'EJIP Industrial Park, Blok 8E Cikarang Selatan', 'T-'),
(54, 'PT. ABB Sakti Industri', 'Jl. Wisma Metropolitan II 8th. Fl, Jl. Jend. Sudirman Kav. 29-31 Jakarta', 'T-'),
(55, 'PT. Emdeki Utama', 'Jl. Raya Krikilan No. 294 Driyorejo Gresik', 'T-'),
(56, 'PT. Paiton Energy', 'Jl. Raya Surabaya - Situbondo, Km. 141 Paiton, Probolinggo 67291', 'T-'),
(57, 'PT. ABC Energy', 'Ruko Graha Sutomo Blok D3, Jl. Dr. Soetomo 136-138 Surabaya 60241', 'T-'),
(58, 'ABB PTE LTD', '2 Ayer Rajah Crescent  Singapore 139935', 'T-'),
(59, 'PT. Hitachi Sakti Energy Indonesia', 'Gedung World Trade Center 3 Lt. 24 Jl. Jend. Sudirman Blok Kav 29-31 RT 008 RW 003 Karet Setiabudi', 'T-'),
(60, 'PT. Pancaran Suara Citra', 'Mayjend Sungkono No. 87 Syrabaya', 'T-'),
(61, 'PT. Mega Karya Makmur Rp. 15,000,000', 'Jl. Bubutan No. 127-135 Surabaya', 'T-'),
(62, 'PT. Minepower', 'Safira Garden D2/15B, Ds. Sepande, Kc. Candi, Sidoarjo 61271', 'T-'),
(63, 'PT. Laros Multi Indoteknik', 'Citra Harmoni Blok H1 Nomor 5-6 Trosobo, Taman, Sidoarjo, Jawa Timur 61257', 'T-'),
(64, 'PT. Gresik Power Indonesia', 'Jl. Raya Roomo, Manyar Gresik', 'T-'),
(65, 'PT. Bambang Djaja', 'Jl. Rungkut Industri III/56 Surabaya', 'T-'),
(66, 'PT. Jaya Abadi Energy', 'Bendul Merisi Indah No. 5 Surabaya', 'T-'),
(67, 'CV. Abadi Buana Powerindo', 'Jl. Jeruk VII/J-419, Perum Pondok Tjandra Indah, Tambakrejo, Waru-Sidoarjo', 'T-'),
(68, 'CV. Abadi Buana Powerindo', 'Jl. Jeruk Vil/J-419, Perum Pondok Tjandra Indah, Tambakrejo, Waru, Sda', 'T-'),
(69, 'PT. Ispat Indo', 'Desa Kedungturi, taman, Sidoarjo', 'T-'),
(70, 'PT. Pancaran Suara Citra', 'Mayjend Sungkono No. 87 Surabaya', 'T-'),
(71, 'CV. Jaya Elektrik', 'Wage, Sidoarjo', 'T-'),
(72, 'PT. CJI Pasuruan', 'Perum Istana Bestari CC12. JL DR Wahidin Pekuncen, Panggungrejo, Pasuruan, Jatim', 'T-'),
(73, 'Universitas Ciputra', 'Citraland CBD Boulevard Surabaya 60219', 'T-'),
(74, 'CV. Jaya Elektrik', 'Wage Sidoarjo', 'T-'),
(75, 'Deputi Bidang Infrastruktur Riset dan Inovasi', 'Gedung BJ Habibie, Jalan M.H. Thamrin No. 8 Jakarta Pusat 10340', 'T-'),
(76, 'CV. Mundung Daya Engineering', 'Ruko Klampis Megah Blok D12 Belakang Giant, Sby', 'T-'),
(77, 'PT. Elektrindo Utama Indonesia', 'Ruko Andalusia Square Blok C04 Jl. RA Kartini - Gresik - Jawa Timur 61122', 'T-'),
(78, 'PT. Graha Usaha Teknik', 'Jl. Asem Baris Raya No. I00A Kebon Baru', 'T-'),
(79, 'PT. Hasta Prajatama', 'Jl. Lingkar Timur No.1, Kemiri, Sda', 'T-'),
(80, 'PT. Emdeki Utama', 'Jl. Krikilan 294, Driyorejo Gresik 61177', 'T-'),
(81, 'PT. Multi Daya Mitra', 'Ruko Klampis Megah Blok D12 Belakang Giant, Sby', 'T-'),
(82, 'PT. Bambang Djaja', 'Jl. Rungkut Industri 111/56 Surabaya', 'T-'),
(83, 'PT. Bambang Djaja', 'Rungkut Industri 111/56 Rungkut Menanggal, Gunung Anyar Surabaya 60293', 'T-'),
(84, 'PT. Hokkan Deltapack Industri', 'Jl. Raden Patah, Dusum Adisono RT.005/RW.002 Dusun Lebaksono, Kec.Pungging-Mojosari', 'T-'),
(85, 'PT. Jatim Taman Steel', 'Jl. Raya Taman, Sepanjang, Taman, Kabupaten Sidoarjo, Jawa Timur 61257', 'T-'),
(86, 'PT. Sibelco Minerals', 'Jl. Raya Ngoro Blok C2-2A Mjk', 'T-'),
(87, 'PT. Gresik Gases Indonesia', 'Gresik', 'T-'),
(88, 'CV. Sarana Teknik', 'Griyo Mapan Sentosa Blok EE-48 waru, Sidoarjo', 'T-'),
(89, 'PT. Hokkan Deltapack Industri', 'Jl. Raya Sawunggaling No. 24 Jemundo, Taman, Sidoarjo 61257', 'T-'),
(90, 'PT. Tri Samsu Teknik', 'Duşun Lengkong RT 002 RW 003 Deşa Jatigedong Kec. Ploso', 'T-'),
(91, 'PT. Glory Electric Indonesia', 'Surabaya', 'T-'),
(92, 'PT. Pancaran Suara Citra', 'CIPUTRA WORLD SURABAYA (MALL)', 'T-'),
(93, 'PT. Tiga Pilar Energi', '18 Office Park Lt. 22, Suite E,F,G JI. TB Simatupang Kav 18 Jakarta Selatan', 'T-'),
(94, 'PT. DHL Supply Chain', 'JL.Raya Rungkut Industri no 6a', 'T-'),
(95, 'CV. Teknologi Berjaya', 'Griya Pesona Asri Blok J no 34', 'T-'),
(96, 'PT. Adiprima Buana Bakti', 'JL.Raya Taman Asri TF-41', 'T-'),
(97, 'PT. Hamparan Rejeki Utama', 'Mayjend Suprapto no 87', 'T-'),
(98, 'PT. Multi Makmur', 'Jl. Raya Mojosari Km 3,8 No 888', 'T-'),
(99, 'PT. Easterntex', 'Karang Kepuh, Karang Jati. Pasuruan', 'T-'),
(100, 'PT. Multi Energytama', 'Jalan Ketintang Selatan 1/2 Kav 101 Karah RT 001 RW 009 Surabaya', 'T-'),
(101, 'PT. Trimitra Buana Engineering', 'JL. Brigjend Katamso, Waru', 'T-'),
(102, 'PT.Bintang Timur Utama Sejahtera', 'Jl. Ngagel Dadi II C/1 Sby', 'T-'),
(103, 'PT. Graha Usaha Teknik', 'Jl. Jendral Sudirman, Jakarta', 'T-'),
(104, 'PT. Jaya Abadi Energy', 'JL.Dungus No 9, Sukodono', 'T-'),
(105, 'PT. Persada Indah Muda', 'Surabaya', 'T-'),
(106, 'PT. Ispat Wire Products', 'Desa Kedungturi, taman, Sidoarjo', 'T-'),
(107, 'PT. Trimitra Buana Engineering', 'Jl. Tirta Raya Ruko Graha Tirta No. 9 Waru', 'T-'),
(108, 'PT. Multi Daya Mitra', 'Ruko Jati Kepuh Indah F-26, Dusun Larangan, Larangan, Kec. Candi, Kabupaten Sidoarjo, Jawa Timur 61256', 'T-'),
(109, 'PT. Hamparan Rejeki Utama', 'Ruko Jati Kepuh Indah F-26, Dusun Larangan, Larangan, Kec. Candi, Kabupaten Sidoarjo, Jawa Timur 61256', 'T-'),
(110, 'PT. Master Steel Manufactory', 'Kawasan Industri Maspion Unit V Manyar Gresik', 'T-'),
(111, 'PT. Master Steel', 'Kawasan Industri Maspion Unit V Manyar Gresik', 'T-'),
(112, 'Sekolah Ciputra', 'Surabaya', 'T-'),
(113, 'PT. Sinar Angkasa Rungkut', 'Jl. Rungkut Industri 1/8 Surabaya', 'T-'),
(114, 'PT. Abadi Technology Terbaik', 'Gedung Wirausaha Lt. 1 Unit 104, JI. HR. Rasuna Said Kav C-5, Karet, Setiabudi, Jakarta Selatan, DKI Jakarta', 'T-'),
(115, 'PT. Elektrindo Utama Indonesia', 'Perum. Alam Bukit Raya D2 No. 18 RT. 008 RW. 009 Kembangan, Kebomas, Gres', 'T-'),
(116, 'PT. Sentratek Metalindo', 'JI. Dr. Cipto No. 3 Surabaya', 'T-'),
(117, 'PT. Sorini Towa Berlian Corporindo', 'Desa Cangkringmalang, Beji, Kab. Pasuruan 67154', 'T-'),
(118, 'PT. Sinarindo Megantara', 'JI. Margomulyo No. 20 Surabaya', 'T-'),
(119, 'PT. Palunesia', 'JI. Margomulyo No. 61 Surabaya', 'T-'),
(120, 'PT. The Master Steel Manufactory', 'Kawasan Industri Maspion Unit V Manyar Gresik', 'T-'),
(121, 'PT. Safila Arta Nugraha', 'Dian Regency Apartment No.123 Kel. Keputih, Kc. Sukolilo Surabaya', 'T-'),
(122, 'PT. Hitachi Sakti Energy Indonesia', 'WTC 3 Lt. 24 Jl. Jend. Sudirman, Jakarta 12920', 'T-'),
(123, 'PT. Gansar Jaya', 'Jl. Sekarputih No. 470, Mojokerto', 'T-'),
(124, 'PT. Multi Energytama', 'jl. Ketintang Selatan  I/2 Kav 101', 'T-'),
(125, 'PT. Sarana Karya Utama', 'Jl. KIG Raya Selatan Kav.A', 'T-'),
(126, 'Test Oli Trafo DGA 2 Sample', 'Jl. Sekarputih No. 470, Mojokerto', 'T-'),
(127, 'Bapak Arif Gagah Prasetyo', 'Tulungagung', 'T-'),
(128, 'PT. Etika Dairies Indonesia', 'Jl. Raya Gunung Gangsir KM 4,5 Dsn. Gesing', 'T-'),
(129, 'PT. PG Gorontalo', 'Jl. Residen Sudirman No. 30 Surabaya', 'T-'),
(130, 'Gereja Citraland Surabaya', 'Gereja Citraland Surabaya', 'T-'),
(131, 'Sewa crimping Tools 1 hari', 'Jl. Dr. Cipto No. 5 Surabaya', 'T-'),
(132, 'CV. Ready Tech', 'Jl. Margorejo Indah 36A, Jemursari Surabaya', 'T-'),
(133, 'Bapak Budi Slamet', 'Kediri', 'T-'),
(134, 'PT. Jaya Abadi Energy', 'Jl. Dungus No. 09 Sukodono Sidoarjo', 'T-'),
(135, 'PT. Multi Daya Mitra', 'Ruko Klampis Megah Blok D12 (Belakang Giant, Surabaya)', 'T-'),
(136, 'PT. Cirebon Energi Prasarana', 'Pondok Indah Office Tower 3 Lantai 25, Jl. Sultan Iskandar Muda Kav. V-TA Pondok Pinang Kebayoran Lama,', 'T-'),
(137, 'PT. Multi Energytama', 'Jalan Ketintang Selatan I/2 Kav 101 Karah RT 001 RW 009 Surabaya Jawa Timur', 'T-'),
(138, 'CV. Teknologi Berjaya', 'Griya Pesona Asri Blok J No. 34 Medokan Ayu, Rungkut, Surabaya', 'T-'),
(139, 'PT. Graha Usaha Teknik', 'Jl. Asem Baris Raya No.100A Kebon Baru', 'T-'),
(140, 'PT. Golden Cendana Jaya', 'Jalan Rungkut Industri IV No. 4, Surabaya, Jawa Timur', 'T-'),
(141, 'PT. Karya Sentosa Teknik', 'Taman Menanggal Indah 7, Dukuh Menanggal, Gayungan, Kota Surabaya 60234', 'T-'),
(142, 'Test Oli Trafo PCB 1 Sample', 'Mayjend Suprapto No. 87 RT RW, Kel. Tumapel Kec. Dlanggu Kab. Mojokerto Jawa Timur', 'T-'),
(143, 'The Via & The Vue Apartments', 'Jl. Mayjen Sungkono Kav. 89, Surabaya 60224', 'T-'),
(144, 'PT. Pancaran Suara Citra', 'Jl. Mayjen Sungkono No. 87, Surabaya', 'T-'),
(145, 'PT. Hasta Karya Perdana', 'Jl. Gayung Kebonsari Manunggal 18-20 Surabaya', 'T-'),
(146, 'PT. Rockwell Automation', 'Gedung Jakarta Mori Tower Lt. 16, Jl. Jend. Sudirman Kav. 40-41, DKI Jakarta', 'T-'),
(147, 'PT. Emdeki Utama', 'JL.Krikilan Utama Driyorejo, Gresik', 'T-'),
(148, 'PT. Gansar Jaya', 'Sekarputih No. 470 Mojokerto 61316', 'T-'),
(149, 'PT. Karya Sentosa', 'Taman Menanggal Indah 7, Dukuh Menanggal, Gayungan, Kota Surabaya 60234', 'T-');

-- --------------------------------------------------------

--
-- Table structure for table `level_pekerja`
--

CREATE TABLE `level_pekerja` (
  `id_levelkerja` bigint(20) NOT NULL,
  `jabatan_pekerja` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level_pekerja`
--

INSERT INTO `level_pekerja` (`id_levelkerja`, `jabatan_pekerja`) VALUES
(1, 'Direktur Utama'),
(2, 'Direktur'),
(4, 'Manajer Keuangan'),
(5, 'Staf Keuangan'),
(6, 'Ka Gudang'),
(7, 'Manajer Pembelian'),
(8, 'MR/QHSR'),
(9, 'Staf Dokumen'),
(10, 'Staf Audit QHSE'),
(11, 'Ka Bag Personalia'),
(12, 'Ka Seksi GA'),
(13, 'Admin Personalia'),
(14, 'Teknisi'),
(15, 'Project'),
(16, 'Operator'),
(18, 'Mekanik & Driver'),
(19, 'Driver'),
(20, 'Office Boy'),
(23, 'No Leader');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `admin` varchar(200) NOT NULL,
  `katasandi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`admin`, `katasandi`) VALUES
('AdminMse', '$2y$12$JS5dtBSScnlXGmU.XCCbJuozzGTtdkCzE.FPBiz4tjLwAAzEAuuQS');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_18_054431_create_personal_access_tokens_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pekerja`
--

CREATE TABLE `pekerja` (
  `id_pekerja` bigint(20) NOT NULL,
  `nama_pekerja` varchar(200) NOT NULL,
  `level_pekerja` bigint(20) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `foto_pekerja` varchar(225) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `pendidikan` varchar(225) DEFAULT NULL,
  `jenis_kelamin` varchar(200) DEFAULT NULL,
  `status_pekerja` varchar(255) NOT NULL,
  `nik_pekerja` varchar(200) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pekerja`
--

INSERT INTO `pekerja` (`id_pekerja`, `nama_pekerja`, `level_pekerja`, `updated_at`, `created_at`, `foto_pekerja`, `alamat`, `pendidikan`, `jenis_kelamin`, `status_pekerja`, `nik_pekerja`, `tgl_lahir`, `tgl_masuk`) VALUES
(7, 'Giri Trisanto, ST.MMT.', 1, '2025-05-25', '2025-05-24', '1748170034_1748092570_male.png', 'Jl. Prapen Indah Blok J 16 Surabaya', 'strata-2', 'laki-laki', 'tetap', '3578241409810001', '1976-11-22', '2004-06-26'),
(8, 'Kukuh Karnanto, ST.M.Eng.,Sc.', 2, '2025-05-24', '2025-05-24', '1748089198_male.png', 'Jl. Raya Tenggilis 83 Surabaya', 'strata-2', 'laki-laki', 'tetap', '3578241409810000', '1981-09-14', '2006-06-28'),
(9, 'Drs.Ec. Kholib Al Iswanul', 4, '2025-05-24', '2025-05-24', '1748091709_male.png', 'Kalijaten Taman RT 022 RW 003 Sidoarjo', 'strata-1', 'laki-laki', 'tetap', '3515182402640004', '1964-02-24', '1998-05-01'),
(10, 'Naniek Sri Suprihartini', 5, '2025-05-24', '2025-05-24', '1748092371_woman.png', 'Jl. Blimbing III No. 50 PCI Waru-Sidoarjo', 'smea', 'perempuan', 'tetap', '3515186704540002', '1954-04-27', '1980-03-08'),
(11, 'Djazilun Nawal', 6, '2025-05-24', '2025-05-24', '1748092358_male.png', 'Jl. Bogen 16 A Surabaya', 'sma', 'laki-laki', 'tetap', '3578101304700002', '1970-04-13', '1995-08-21'),
(12, 'Dasuki', 7, '2025-05-24', '2025-05-24', '1748092570_male.png', 'Perum Bumi Koperasi A-52 Suko Sukodono Sidoarjo', 'stm', 'laki-laki', 'tetap', '3515141905650002', '1965-05-19', '1997-03-11'),
(13, 'Hery Winarno', 8, '2025-05-24', '2025-05-24', '1748092690_male.png', 'Jl. Corekan Raya 177 Kediri', 'strata-1', 'laki-laki', 'tetap', '2171060606719000', '1971-06-06', '2021-11-01'),
(14, 'Rofi\'ah', 9, '2025-05-24', '2025-05-24', '1748092859_woman.png', 'Wonocolo Gang Zubair 29 Surabaya', 'diploma-3', 'perempuan', 'tetap', '3578025506680002', '1968-06-15', '1997-10-01'),
(15, 'Amelia Dianita Puspitasari', 9, '2025-06-04', '2025-05-24', '1748092911_woman.png', 'Surabaya', 'sma', 'perempuan', 'tetap', '3578036912970002', '1997-12-29', '2025-01-06'),
(16, 'Riyantoko', 10, '2025-05-24', '2025-05-24', '1748093034_male.png', 'Banyu Urip Wetan Tengah 7-A RT 005 / RW 007', 'sma', 'laki-laki', 'tetap', '3578240303690003', '1969-03-03', '1992-12-01'),
(17, 'Ruslan Mashri', 11, '2025-05-24', '2025-05-24', '1748094558_male.png', 'Jl. Ngagel Mulyo Balantara No.6 Surabaya', 'strata-1', 'laki-laki', 'tetap', '3578041909750001', '1975-09-19', '2022-10-01'),
(18, 'Sugi', 12, '2025-05-24', '2025-05-24', '1748095692_male.png', 'Perum Griyo Mapan Sentosa Blok A No. 45 RT 049 / RW 005 Tropodo Sidoarjo', 'slta', 'laki-laki', 'tetap', '3578240507670002', '1967-07-05', '1984-12-01'),
(19, 'Quick Rifai Kurnia Dharma', 13, '2025-05-24', '2025-05-24', '1748095832_male.png', 'Park Royal Regency Blok Q1-7 Sidoarjo', 'strata-1', 'laki-laki', 'tetap', '3515180702760010', '1976-02-07', '2022-11-01'),
(20, 'Iwan Agus Ariana', 14, '2025-05-24', '2025-05-24', '1748095974_male.png', 'Pucangan 3/95 Surabaya', 'stm', 'laki-laki', 'tetap', '3578080102700000', '1970-02-01', '1991-04-08'),
(21, 'Jaya Satriawan, ST', 15, '2025-05-24', '2025-05-24', '1748096105_male.png', 'Jl. Dr Ciptomangunkusumo RT 002 / RW 008 Margadana Tegal', 'strata-1', 'laki-laki', 'tetap', '3376040409700001', '1970-09-04', '2009-12-31'),
(22, 'Sutomo', 16, '2025-05-24', '2025-05-24', '1748096227_male.png', 'Jojoran III / 11 Surabaya', 'sltp', 'laki-laki', 'tetap', '3578082809660002', '1966-09-28', '1997-12-31'),
(23, 'Anwari Fauzi', 14, '2025-05-24', '2025-05-24', '1748096363_male.png', 'Jl. Merpati RT 004 RW 004 Desa Ngasem Kec. Gurah Kediri', 'sma', 'laki-laki', 'tetap', '3506101201680000', '1968-01-12', '2003-12-31'),
(24, 'A. Rofiq', 14, '2025-05-24', '2025-05-24', '1748096546_male.png', 'Jl. Sungkono 62 RT 003 / RW 002 POGAR Bangil Pasuruan', 'stm', 'laki-laki', 'tetap', '3514141001720004', '1972-01-10', '2009-09-01'),
(25, 'Hendrik Indrijanto', 14, '2025-05-24', '2025-05-24', '1748096733_male.png', 'Jl. Sidosermo IV / 28 Surabaya', 'smk', 'laki-laki', 'tetap', '3578022304780005', '1978-04-23', '2004-12-31'),
(26, 'Budiono', 14, '2025-05-24', '2025-05-24', '1748096894_male.png', 'Kiteran RT 002 / RW 003 Ngawi', 'stm', 'laki-laki', 'tetap', '3521151911840001', '1984-11-19', '2004-12-01'),
(27, 'Moh. Saud', 14, '2025-05-24', '2025-05-24', '1748097027_male.png', 'Pedes Sukorjo Perak Jombang', 'mts', 'laki-laki', 'tetap', '3517012406760002', '1976-06-24', '2002-12-31'),
(28, 'Agus Wibowo', 14, '2025-05-24', '2025-05-24', '1748097143_male.png', 'Ngepung RT 001 / RW 004 Patianrowo, Nganjuk', 'smk', 'laki-laki', 'tetap', '3518081101830001', '1983-01-11', '2010-03-24'),
(29, 'Muhammad Syafi\'i', 14, '2025-05-24', '2025-05-24', '1748097243_male.png', 'Kedung Pandan - Jambon Sidoarjo', 'smk', 'laki-laki', 'tetap', '3515052911920002', '1992-11-23', '2011-09-19'),
(30, 'M. Yusuf', 14, '2025-05-24', '2025-05-24', '1748097369_male.png', 'Tenggilis Lama 4 / 1 Surabaya', 'sltp', 'laki-laki', 'tetap', '3578241512600002', '1986-12-15', '2004-12-31'),
(31, 'Narko', 14, '2025-05-24', '2025-05-24', '1748097518_male.png', 'Dsn Ngrejo RT 001 / RW 005 Desa Kluwut Kec. Wonosari Malang', 'sltp', 'laki-laki', 'tetap', '3507321706880002', '1988-08-17', '2008-12-17'),
(32, 'Elyas', 14, '2025-05-24', '2025-05-24', '1748097663_male.png', 'Tenggilis Lama IV-B No. 12 RT 004 / RW 004 Surabaya', 'slta', 'laki-laki', 'tetap', '3578240507720003', '1972-07-05', '2010-12-01'),
(33, 'Fitra Aristianto', 14, '2025-05-24', '2025-05-24', '1748097833_male.png', 'Jl. Merpati RT 004 / RW 001 Desa Ngasem Kec. Gurah Kediri', 'smp', 'laki-laki', 'tetap', '3506102304900004', '1990-04-23', '2012-09-10'),
(34, 'Bambang Margono', 18, '2025-05-24', '2025-05-24', '1748097956_male.png', 'Sidotopo Wetan III / 44 Surabaya', 'sma', 'laki-laki', 'tetap', '3578171402660001', '1966-02-14', '2011-08-07'),
(35, 'M. Fadlil', 19, '2025-05-24', '2025-05-24', '1748098104_male.png', 'Tenggilis Lama IV / 60 Surabaya', 'sltp', 'laki-laki', 'tetap', '3576240706700002', '1970-06-07', '2010-12-31'),
(36, 'Moh. Yasin Fathullah', 20, '2025-05-24', '2025-05-24', '1748098265_male.png', 'Dsn. Jati RT 001 / RW 002 Tarokan Kediri', 'slta', 'laki-laki', 'tetap', '3506200408830000', '1983-08-04', '2005-12-01'),
(38, 'Wahyudi Akbar', 14, '2025-05-24', '2025-05-24', '1748107733_male.png', 'Mojoklanggru Lor 1 / 11 Surabaya', 'strata-1', 'laki-laki', 'tetap', '3578082205890002', '1989-05-22', '2022-09-01'),
(44, 'No Leader', 23, '2025-05-26', '2025-05-26', '1748232260_1748089198_male.png', '00000', 'sma', 'laki-laki', 'tetap', '00000', '0001-01-01', '0001-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proyek`
--

CREATE TABLE `proyek` (
  `id_proyek` bigint(20) NOT NULL,
  `nama_proyek` varchar(200) NOT NULL,
  `no_kontrak` varchar(200) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `status` enum('Selesai','Proses') DEFAULT NULL,
  `id_pekerja` bigint(20) NOT NULL,
  `id_bproyek` bigint(20) NOT NULL,
  `nama_klien` varchar(200) NOT NULL,
  `lokasi_klien` varchar(200) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `no_brast` varchar(200) DEFAULT NULL,
  `nominal` decimal(15,2) DEFAULT NULL,
  `tahun` varchar(200) DEFAULT NULL,
  `alamat_klien` varchar(200) DEFAULT NULL,
  `telp_klien` varchar(200) DEFAULT NULL,
  `id_klien` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proyek`
--

INSERT INTO `proyek` (`id_proyek`, `nama_proyek`, `no_kontrak`, `tanggal_mulai`, `tanggal_selesai`, `status`, `id_pekerja`, `id_bproyek`, `nama_klien`, `lokasi_klien`, `updated_at`, `created_at`, `no_brast`, `nominal`, `tahun`, `alamat_klien`, `telp_klien`, `id_klien`) VALUES
(19, 'Erection Work for 150 kV Tanjung Priok PT. Hitachi Sakti Energy Indonesia', '0', '1993-03-08', '1994-06-15', 'Selesai', 20, 2, 'HITACHI Indonesia Project Office', 'DKI JAKARTA - KOTA JAKARTA UTARA', '2025-06-04', '2025-05-24', '0', '849200000.00', NULL, 'Jl. Ketintang Baru No. 1 Surabaya', '-', 2),
(20, 'Proyek Konsumen Besar Jawa Timur GIS Bangil & Karangpilang PT. PLN (Persero) P3B Region Jawa Timur dan Bali', '0', '1994-02-10', '1997-09-12', 'Selesai', 44, 2, 'PT. PLN Proyek Induk Jaringan Jawa Timur dan Bali', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-26', '2025-05-24', '0', '3003761196.00', NULL, 'Jl. Ketintang Baru No. 1 Surabaya', '-', NULL),
(21, 'Proyek Konsumen Besar Jawa Timur GIS Waru & Tandes PT. PLN (Persero) P3B Region Jawa Timur dan Bali', '0', '1995-07-13', '1995-12-23', 'Selesai', 44, 2, 'PT. Wasa Mitra Engineering Proyek PKB Paket VI PT. PLN RJTB', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-26', '2025-05-24', '0', '247500000.00', NULL, 'Jl. Suningrat 45 (Gardu Induk Waru)', '-', NULL),
(22, 'Electrical Work for Pulomas Substation PT. Hitachi Sakti Energy Indonesia', 'XIN4-DCP-ME-AG-01, 12 Mar 1997', '1997-11-01', '1998-07-31', 'Selesai', 44, 2, 'KOKUBU WORKS of HITACHI, Ltd.', 'DKI JAKARTA - KOTA JAKARTA PUSAT', '2025-05-26', '2025-05-24', '0', '527000000.00', NULL, 'Jakarta', '-', NULL),
(23, 'Electrical Work for New Cawang Substation PT. Hitachi Sakti Energy Indonesia', 'XIN4-DCP-ME-AG-01, 12 Mar 1997', '1997-06-01', '1998-02-28', 'Selesai', 44, 2, 'KOKUBU WORKS of HITACHI, Ltd.', 'DKI JAKARTA - KOTA JAKARTA PUSAT', '2025-05-26', '2025-05-24', '0', '451000000.00', NULL, 'Jakarta', '-', NULL),
(24, 'Electrical Work Duren Tiga Substation PT. Hitachi Sakti Energy Indonesia', 'XIN4-DCP-ME-AG-01, 12 Mar 1997', '1997-05-15', '1997-10-31', 'Selesai', 44, 2, 'KOKUBU WORKS of HITACHI, Ltd.', 'DKI JAKARTA - KOTA JAKARTA PUSAT', '2025-05-26', '2025-05-24', '0', '407000000.00', NULL, 'Jakarta', '-', NULL),
(25, 'Civil Works for Makale & Palopo 150 kV Substation PT. Schneider Electric', 'Amandment No. 1, 27/01/2000', '1999-12-27', '2000-11-10', 'Selesai', 44, 3, 'PT. Schneider Electric', 'SULAWESI SELATAN - KOTA PALOPO', '2025-05-24', '2025-05-24', '0', '3932364000.00', NULL, 'Jakarta', '-', NULL),
(26, 'Power Development and Efficiency Enhancement Project Power XXV PT. Schneider Electric', '0', '2001-03-27', '2001-10-22', 'Selesai', 44, 2, 'PT. Schneider Electric', 'SUMATERA SELATAN - KOTA PALEMBANG', '2025-05-26', '2025-05-24', '0', '331269000.00', NULL, 'Jakarta', 'T-', NULL),
(27, 'Pengadaan dan Pemasangan Kapasitor 150 kV PT. Siemens Gamesha Renewable Energy', '0', '2001-05-01', '2001-10-22', 'Selesai', 44, 2, 'SIEMENS', 'JAWA TIMUR - KABUPATEN TUBAN', '2025-05-26', '2025-05-24', '0', '246836000.00', NULL, 'Jl. A. Yani Kab. Jakarta', 'T - (021) 4729252', NULL),
(28, 'Pekerjaan Penarikan Circuit ke II SUTT 150 kV PT. PLN (Persero) UIT JBT Unit Pelaksana Transmisi', '035Pj/061/PJTB/2001, 27/12/2001', '2001-12-27', '2002-09-29', 'Selesai', 44, 2, 'PT. PLN (Persero) PJB Region Jawa Bali', 'JAWA TIMUR - KABUPATEN BANGKALAN', '2025-05-26', '2025-05-24', '0', '1903095000.00', NULL, 'Jl. Suningrat No. 45 Taman Sby', 'T - (031) 7882114', NULL),
(29, 'Civil Works & Erection for 150 kV PT. PLN (Persero) P3B Region Jawa Timur dan Bali', '0', '2002-03-02', '2002-11-25', 'Selesai', 44, 2, 'PT. PLN P3B Jakarta', 'BALI - KOTA DENPASAR', '2025-05-26', '2025-05-24', '0', '490001000.00', NULL, 'Jakarta', 'T-', NULL),
(30, 'Erection Work GIS Mampang 150 kV Extention PT. Aryasada', '0', '2002-07-18', '2002-11-26', 'Selesai', 44, 2, 'PT. Aryasada P. Jakarta', 'DKI JAKARTA - KOTA JAKARTA SELATAN', '2025-05-26', '2025-05-24', '0', '110000000.00', NULL, 'Tifa Building 3rd. Floor Jl. Kuningan Barat 26 Jakarta', 'T-(021) 5200620', NULL),
(31, 'Erection Work for GITET 500 kV Equipment at Ungaran PT. Vatech Trans', '0', '2003-09-12', '2004-01-05', 'Selesai', 44, 2, 'PT. Vatech Trans. and Distr. Jakarta', 'JAWA TENGAH - KABUPATEN SEMARANG', '2025-05-26', '2025-05-24', '0', '217466000.00', NULL, 'Vatech Building3rd. Fl. Jl. Talang No. 3 Proklamasi Jkt', 'T-(021) 3906929', NULL),
(32, 'Pekerjaan Pemasangan dan Pengadaan Peralatan GI 150 kV PT. Adiquatro Elektrik', '0', '2003-11-13', '2004-03-30', 'Selesai', 44, 2, 'PT. Adiquato Elekt. Banjarmasin', 'KALIMANTAN SELATAN - KOTA BANJARMASIN', '2025-05-26', '2025-05-24', '0', '215000000.00', NULL, 'Jl. Brigjen Hasan Basri RT 16 No. 23 Banjarmasin', 'T-', NULL),
(33, 'Erection Equipment for Main Transformer 156.8 MVA 150 kV PT. Wasamitra Engineering', '0', '2003-11-12', '2004-03-20', 'Selesai', 44, 2, 'PT. Wasa Mitra Eng. Jakarta', 'BALI - KABUPATEN BADUNG', '2025-05-26', '2025-05-24', '0', '150000000.00', NULL, 'Jl. Ry. Cakung KM1 No. 11 Jakarta Timur 13910', 'T-(021) 4604958', NULL),
(34, 'Erection ( 2 OHL ) 500 kV Muara Tawar and  Supervisi for Testing & Commissioning', '0', '2003-12-18', '2005-02-25', 'Selesai', 44, 2, 'PT. Vatech Trans. Dist. Jakarta', 'MUARA TAWAR', '2025-05-26', '2025-05-24', '0', '208490000.00', NULL, 'Vatech Building3rd. Fl. Jl. Talang No. 3 Proklamasi Jkt', 'T-(021) 3906929', NULL),
(35, 'Pembongkaran Trafo Lama dan Pemasangan Trafo Baru PT. Master Steel Manufactory Rp. 157,886,000', '0', '2004-01-04', '2004-01-29', 'Selesai', 44, 2, 'PT. The Master Steel Jakarta', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-26', '2025-05-25', '0', '157886000.00', NULL, 'Jl. Ry. Bekasi KM 21 Pulogadung Jakarta', 'T-(021) 4606188', NULL),
(36, 'Pemasangan Peralatan GI 150 kV Pemaron PT. Truba Jurong Engineering', '0', '2004-01-10', '2004-03-20', 'Selesai', 44, 2, 'PT. Truba Jurong Eng Jakarta', 'BALI - KABUPATEN BADUNG', '2025-05-26', '2025-05-25', '0', '94500000.00', NULL, 'Jakarta', 'T-', NULL),
(37, 'Penerangan Jalan Umum di wilayah Kabupaten Sidoarjo Pemkab Sidoarjo', '0', '2003-12-31', '2004-05-13', 'Selesai', 44, 2, 'Pemkab Sidoarjo', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-26', '2025-05-25', '0', '47570090000.00', NULL, 'Sidoarjo', 'T-', NULL),
(38, 'Erection 500 kV/150 kV Tasikmalaya S/S PT. Cita Contract', '0', '2004-04-21', '2004-09-21', 'Selesai', 44, 2, 'PT. Cita Contrac Jakarta', 'JAWA BARAT - KABUPATEN TASIKMALAYA', '2025-05-26', '2025-05-25', '0', '1007615000.00', NULL, 'Jakarta', 'T-', NULL),
(39, 'Pembangunan Pondasi S/Y 150 kV Cable Duct dan Peralatan E/M PT. PLN Pikitring Kaltim', '0', '2004-06-07', '2004-07-13', 'Selesai', 44, 2, 'PT. PLN (Persero) Pikitringkal', 'KALIMANTAN TIMUR - KOTA BALIKPAPAN', '2025-05-26', '2025-05-25', '0', '11832517000.00', NULL, 'Jl. MT. Haryono 384 Balikpapan', 'T-', NULL),
(40, 'Pemasangan Peralatan Elektromekanik GI 150 kV Kuala Kapuas PT. PLN Pikitring Kaltim', '0', '2005-03-09', '2005-06-16', 'Selesai', 44, 2, 'PT. PLN (Persero) Pikitringkal', 'KALIMANTAN TIMUR - KOTA SAMARINDA', '2025-05-26', '2025-05-25', '0', '741840000.00', NULL, 'Jl. MT. Haryono 384 Balikpapan', 'T-', NULL),
(41, 'Relokasi Tower SUTT Duri Kosambi Baru Jatirangon dan Ganda Mekar MM2100 Industrial Town', '0', '2005-03-18', '2005-09-03', 'Selesai', 44, 2, 'MM2100 Industrial Town', 'DKI JAKARTA - KOTA JAKARTA TIMUR', '2025-05-26', '2025-05-25', '0', '4300000000.00', NULL, 'Cikarang Barat, Bekasi 17520', 'T - (021) 8981001', NULL),
(42, 'Erection Work for GI Surya Cipta Project PT. Vatech Trans', '0', '2005-09-14', '2006-02-14', 'Selesai', 44, 2, 'PT. Vatech T & DVatech 	Building3rd. Fl.', 'JAWA BARAT - KABUPATEN KARAWANG', '2025-05-26', '2025-05-25', '0', '231000000.00', NULL, 'Jl. Talang No. 3 Proklamasi Jkt', 'T-(021) 3906929', NULL),
(43, 'Pulling Cable 150 kV XLPE Power Cable Proyek Lot III Musi HEPP Bengkulu PT. Meta Epsi', '0', '2005-11-14', '2006-01-24', 'Selesai', 44, 2, 'PT. Meta Epsi', 'SUMATERA SELATAN - KOTA PRABUMULIH', '2025-05-26', '2025-05-25', '0', '397870000.00', NULL, 'Jl. DI Panjaitan Kav. 2 Rawabunga Jatinegara Jaktim 13350', 'T-(021) 8564955', NULL),
(44, 'Pembangunan Gardu Induk 70 kV Talise PT. PLN Wilayah Sulutenggo', '0', '2005-11-14', '2007-07-09', 'Selesai', 44, 2, 'PT. PLN Wilayah Suluttenggo', 'SULAWESI UTARA - KOTA MANADO', '2025-05-26', '2025-05-25', '0', '13453697000.00', NULL, 'Jl. Bethesda No. 32 Manado 95116', 'T-(0431)862444', NULL),
(45, 'Installation 150 kV for New Transformer PT. CJI Pasuruan', '0', '2006-06-09', '2006-09-19', 'Selesai', 44, 2, 'Cheil JedangDs.', 'JAWA TIMUR - KABUPATEN PASURUAN', '2025-05-26', '2025-05-25', '0', '413600000.00', NULL, 'Arjosari Kec. Rejoso Pasuruan', 'T-(0343) 401327', NULL),
(46, 'Pengembangan Jaringan Listrik PLN di dusun terpencil Situbondo ESDM Propinsi Jawa Timur', '0', '2006-09-20', '2008-10-06', 'Selesai', 44, 2, 'ESDM Propinsi Jawa Timur', 'JAWA TIMUR - KABUPATEN SITUBONDO', '2025-05-26', '2025-05-25', '0', '5820800700.00', NULL, 'Jl. Tidar 123 Surabaya', 'T-', NULL),
(47, 'Tjiwi Kimia testing and Commissioning ABB Sakti Industri', '0', '2006-06-07', '2007-03-27', 'Selesai', 44, 7, 'ABB T & D', 'JAWA TIMUR - KABUPATEN MOJOKERTO', '2025-05-25', '2025-05-25', '0', '627159000.00', NULL, 'Jl. Gajah Tunggal KM.1, Kec. Jaituwung Tangerang', 'T-', NULL),
(48, 'Pembangunan Extension 1 Trafo Bay + Trafo 150/20 kV ; 1 x 30 MVA GI Mantul dan Uprating Trafo 150/20 kV GI Asam-Asam PT. PLN Pikitring Kaltim', '0', '2006-12-15', '2008-11-17', 'Selesai', 44, 2, 'PT. PLN (Persero) Pikitringkal', 'KALIMANTAN TIMUR - KOTA BALIKPAPAN', '2025-05-26', '2025-05-25', '0', '16721491000.00', NULL, 'Jl. M.T. Haryono No. 384 Balikpapan 76114', 'T-(542)871559', NULL),
(49, 'Maintenance GI 150 kV Substation Kamojang ABB Sakti Industri', '0', '2007-04-26', '2008-11-25', 'Selesai', 44, 2, 'ABB T & D', 'JAWA BARAT - KABUPATEN GARUT', '2025-05-25', '2025-05-25', '0', '316421857.00', NULL, 'Jl. Wisma Metropolitan II, 8th. Floor Jl. Sudirman Kav. 29031 Jkt', 'T-', NULL),
(50, 'Pembangunan 2 Line Bay + Trafo Bay + Trafo 1 x 30 MVA GI 150 kV Amuntai PT. PLN Pikitring Kaltim', '0', '2007-07-16', '2008-12-11', 'Selesai', 44, 2, 'PT. PLN Pikitringkal', 'KALIMANTAN TIMUR - KOTA BALIKPAPAN', '2025-05-25', '2025-05-25', '0', '26010046000.00', NULL, 'Jl. MT. Haryono 76114 Balikpapan', 'T-', NULL),
(51, 'Pembangunan Sarana dan Prasarana PON XVII Kutai Kartanegara Pemkab Kutai Kartanegara', '747/640/XII/2007 / 11 Des 07', '2007-12-11', '2009-07-06', 'Selesai', 44, 2, 'Pemkab Kutai Kalimantan', 'KALIMANTAN TIMUR - KABUPATEN KUTAI KARTANEGARA', '2025-05-25', '2025-05-25', '0', '48859704000.00', NULL, 'Jl. Jend. A. Yani Tenggarong', 'T-', NULL),
(52, 'Pengadaan dan Pemasangan Sirkit ke 2 SUTT 150 kV Gilimanuk Pemaron PT. PLN (Persero) P3B Region Jawa Timur dan Bali', '038.PJ/611/P3B/2008 / 18 Feb 08', '2008-02-18', '2009-08-11', 'Selesai', 44, 2, 'PT. PLN (Persero) P3B Ragion jawa Timur dan Bali', 'BALI - KABUPATEN BADUNG', '2025-05-25', '2025-05-25', '0', '41110573790.00', NULL, 'Jl. Suningrat No. 45 Taman Sidaorjo', 'T-', NULL),
(53, 'Pengadaan dan Pemasangan Trafo Distribusi 150/20 kV 80 MVA untuk GI Kapal dan Pemasangan Trafo 30 MVA eks GI Kapal berikut PT. PLN (Persero) P3B Region Jawa Timur dan Bali', '011.PJ/611/P3B/2008 / 18 Feb 08', '2008-02-18', '2009-11-10', 'Selesai', 44, 2, 'PT. PLN (Persero) P3B Ragion jawa Timur dan Bali', 'BALI - KABUPATEN JEMBRANA', '2025-05-25', '2025-05-25', '0', '14379357000.00', NULL, 'Jl. Suningrat No. 45 Taman Sidaorjo', 'T-', NULL),
(54, 'Pemasangan Material Elektromekanik 2 Line Bay 150 kV dan Komisioning PT. PLN Pikitring Kaltim', '0', '2008-07-02', '2008-11-28', 'Selesai', 44, 2, 'PT. PLN (Persero) Pikitringkal', 'KALIMANTAN TIMUR - KOTA BALIKPAPAN', '2025-05-25', '2025-05-25', '0', '2939127000.00', NULL, 'Jl. MT. Haryono 384 Balikpapan', 'T-', NULL),
(55, 'Primary & Secondary Injection Saturasi, Rasio & Contact PT. Rekayasa Industri', '0', '2008-08-29', '2008-09-10', 'Selesai', 44, 2, 'PT. Rekayasa Industri', 'SULAWESI UTARA - KOTA TOMOHON', '2025-05-25', '2025-05-25', '0', '121000000.00', NULL, 'Jl. Kalibata Timur I/36 Jakarta 12740', 'T-', NULL),
(56, 'Primary & Secondary Injection Saturasi, Rasio & Contact PT. Rekayasa Industri', '0', '2008-10-28', '2008-11-17', 'Selesai', 44, 2, 'PT. Rekayasa Industri', 'SULAWESI UTARA - KOTA TOMOHON', '2025-05-25', '2025-05-25', '0', '134600000.00', NULL, 'Jl. Kalibata Timur I/36 Jakarta 12740', 'T-', NULL),
(58, 'Relay Protection & Test PT. Rekayasa Industri', '0', '2009-02-21', '2009-04-12', 'Selesai', 44, 2, 'PT. Rekayasa Industri', 'KEPULAUAN RIAU - KOTA B A T A M', '2025-05-25', '2025-05-25', '0', '123000000.00', NULL, 'Jl. Kalibata Timur I/36 Jakarta 12740', 'T-', NULL),
(59, 'Rental of High Voltage Tester and primary secondary injection PT. Rekayasa Industri', '0', '2009-04-03', '2009-05-05', 'Selesai', 44, 2, 'PT. Rekayasa Industri', 'KEPULAUAN RIAU - KOTA B A T A M', '2025-05-25', '2025-05-25', '0', '505833328.00', NULL, 'Construction Site, Sg. Liang Industrial Park, Brunei Darussalam', 'T-', NULL),
(60, 'Testing and Commissioning GI Botupinge Gorontalo PT. Merapi Trans Energi', '01/MOU/MTE/VI/09 - 8 Juni 2009', '2009-06-08', '2009-07-08', 'Selesai', 44, 7, 'PT. Merapi Trams Energi', 'GORONTALO - KOTA GORONTALO', '2025-05-25', '2025-05-25', '0', '396000000.00', NULL, 'Jl. Sarikaso III No. 9B Sarijadi Bandung', 'T-', NULL),
(61, 'Jasa Sertifikasi Laik Operasi untuk Jaringan Listrik Pedesaan Pemkab Blitar', 'SPMK No. 050/04/BM1/30.10.-SLO-1/409.108/2009', '2009-07-15', '2009-07-15', 'Selesai', 44, 2, 'PEMKAB BLITAR', 'JAWA TIMUR - KABUPATEN BLITAR', '2025-05-25', '2025-05-25', '0', '123640000.00', NULL, 'Jl. S. Supriyadi No. 86 Pos No. 24 Blitar', 'T-', NULL),
(62, 'Jasa Pengujian Minyak Trafo (DGA) dan Thermovision PT. PLN (Persero) Jasa Sertifikasi', '441.PJ/613JS2009 / 27 Jul 09', '2009-07-27', '2009-09-25', 'Selesai', 44, 2, 'PT. PLN (Persero) Jasa Sertifikasi', 'SUMATERA UTARA - KOTA MEDAN', '2025-05-25', '2025-05-25', '0', '294250000.00', NULL, 'Jl. Laboratorium Duren Tiga Jakarta', 'T-', NULL),
(64, 'Dismantling, Erection dan Commissioning Assistance 500/150 kV 3 phase IBT PT. Areva T & D', '7008425/23 Nop 09', '2009-11-23', '2009-12-16', 'Selesai', 44, 2, 'PT. Areva T & D', 'BANTEN - KOTA TANGERANG', '2025-05-25', '2025-05-25', '0', '1870000000.00', NULL, 'Jl. Pulo Buaran Raya Blok IIIEE Kav 2-3-6 Kawasan Industri  Pulogadung Jakarta', 'T-', NULL),
(65, 'Pemasangan Outdoor Sealing End Kabel XLPE 1200 mm2 PT. Kabel Metal Internusa', '0193/SPK/Kamesa/XII/2009 – 1 Desember 2009', '2009-12-01', '2010-12-22', 'Selesai', 44, 2, 'PT. KABEL METAL INTERNUSA', 'JAWA BARAT - KABUPATEN BOGOR', '2025-05-25', '2025-05-25', '0', '594000000.00', NULL, 'Jl. Raya Bekasi Km.23,1 – Cakung Jakarta', 'T-', NULL),
(68, 'Pengadaan Sealing End dan Jumpering sementara dengan Kabel XLPE PT. Elementarika Nusantara', 'PO-rev/07/I/2010-ELKANUSA - 11 Jan 2010', '2010-01-11', '2010-01-11', 'Selesai', 44, 2, 'PT. Elementarika Nusantara', 'JAWA BARAT - KOTA BEKASI', '2025-05-25', '2025-05-25', '0', '521400000.00', NULL, 'Jl Budi Asih Erin No. 3 Bandung Kode Pos 40153', 'T-', NULL),
(69, 'Erection Gardu Induk Gandul Trafo 500/150 kV berikut Bay Trafo GITET PT. Meta Epsi', '082NO1-SPB-C-009-VI-10-MSE', '2010-12-23', '2010-12-23', 'Selesai', 44, 2, 'PT. META EPSI', 'JAWA BARAT - KABUPATEN BOGOR', '2025-05-25', '2025-05-25', '0', '1183297500.00', NULL, 'Jl. Brigjen DI Panjaitan Kav. 02  Jakarta', 'T-', NULL),
(70, 'Erection, Testing & Commissioning for 17 Power Transformer PT. CG Power Systems Indonesia', 'Subcontract Agreement C3, Amendment 01 & 02 - 10 Jan 2011', '2011-01-10', '2011-11-14', 'Selesai', 44, 2, 'PT. CG Power Indonesia', 'JAWA BARAT - KABUPATEN BOGOR', '2025-05-25', '2025-05-25', '0', '1851008500.00', NULL, 'Jl. Narogong KM 23,852 Menara Permai KAV 10, Cileungsi Bogor 16820', 'T-', NULL),
(71, 'Terminasi Kabel XLPE 150 kV (CU XLPE 1 x 1600 Sqmm ) GIS 150 kV Tanjung Priok PT. Persada Engineering & Contracting', 'SPK No. 01/PEC/SPK/01/2011 - 27 Jan 2011', '2011-01-27', '2011-02-27', 'Selesai', 44, 2, 'PT. Persada Engineering & Contacting', 'DKI JAKARTA - KOTA JAKARTA UTARA', '2025-05-25', '2025-05-25', '0', '297000000.00', NULL, 'Ruko Sentra Niaga Boulevar Hijau D/09 Pejuang Medan Satria Bekasi 17131', 'T-', NULL),
(72, 'Pekerjaan Jasa Terminasi Proyek Chevron Duri PT. Persada Engineering & Contracting', 'PEC/006/III/2011- 15 Maret 2011', '2011-03-15', '2012-05-31', 'Selesai', 44, 2, 'PT. Persada Engineering & Contacting', 'RIAU - KOTA D U M A I', '2025-05-25', '2025-05-25', '0', '1166000000.00', NULL, 'Ruko Sentra Niaga Boulevar Hijau D/09 Pejuang Medan Satria Bekasi 17131', 'T-', NULL),
(73, 'Site Erection, Testing & Commissioning IBT 500 kV Kembangan PT. Central Multi Teknindo', 'PO No. 0249/PT. CME/III/2011 - 25 Maret 2011', '2011-03-25', '2011-05-31', 'Selesai', 44, 2, 'PT. Centra Multi Teknindo', 'DKI JAKARTA - KOTA JAKARTA BARAT', '2025-05-25', '2025-05-25', '0', '825000000.00', NULL, 'Jl. Kemukus No. 32 Blok B27 Jakarta 11110', 'T-', NULL),
(74, 'Pengadaan dan Pemasangan Trafo IBT ke II 500/150 kV - 500 MVA PT. PLN (Persero) P3B Region Jawa Timur dan Bali', '002.PJ/611/RJTB/2011 - 7 Apr 2011', '2011-04-07', '2011-11-18', 'Selesai', 44, 2, 'PT. PLN (Persero) P3B RJTB', 'JAWA TIMUR - KABUPATEN PASURUAN', '2025-05-25', '2025-05-25', '0', '4835516000.00', NULL, 'Jl. Suningrat No. 45 Taman Sidaorjo', 'T-', NULL),
(75, 'Supply of Installation and Commissioning Timor Leste Substation ABB Sakti Industri', 'PO No. 3762001747 - 5 Aug 2011', '2011-08-05', '2011-12-08', 'Selesai', 44, 2, 'PT. ABB Sakti Industri', 'DKI JAKARTA - KOTA JAKARTA SELATAN', '2025-05-25', '2025-05-25', '0', '584170.00', NULL, 'Gd. WTC 1 Lt. 15 Jl. Jend. Sudirman Kav 29-31 Setiabudi Jakarta Selatan', 'T-', NULL),
(76, 'Erection & Commissioning 150 kV Ulubelu Geothermal Power Plant PT. Siemens Gamesha Renewable Energy', 'PO No. 4503452917 / 16 Aug 2011', '2011-08-16', '2012-01-27', 'Selesai', 44, 2, 'PT. Siemens Indonesia', 'SUMATERA SELATAN - KOTA PALEMBANG', '2025-05-25', '2025-05-25', '0', '2633920300.00', NULL, 'Jl. Jend. A. Yani Kav 67-68 Jakarta', 'T-', NULL),
(77, 'Replacement OLTC of IBT New Balaraja 500 kV Including tools PT. Alstom Grid', 'PO 7013629 - Aug 17, 2011', '2011-08-17', '2011-09-11', 'Selesai', 44, 2, 'PT. Alstom Gird', 'DKI JAKARTA - KOTA JAKARTA BARAT', '2025-05-25', '2025-05-25', '0', '341000000.00', NULL, 'Plaza Alstom Lt. 8 Jl. TB Simatupang Kav. 15-1 Cilandak Barat Jakarta', 'T-', NULL),
(78, 'Inspeksi Peralatan Relay Proteksi, Transformer PT. Pertamina Geothermal Energy', 'Surat Perjanjian : 042/PGE240/2011-SO - 6 Sept 2011', '2011-09-07', '2011-10-10', 'Selesai', 44, 7, 'PT. Pertamina AGE Kamojang', 'JAWA BARAT - KABUPATEN BANDUNG', '2025-05-25', '2025-05-25', '0', '697056250.00', NULL, 'Menara Cakrawala Lt. 15 Jl. MH Thamrin No. 9 Jakarta', 'T-', NULL),
(79, 'Pekerjaan Saluran Air di Santos Grati PT. Raga Perkasa Ekaguna', 'WO No. QSSAOO-WO-CON-106 - 7 Sept 2011', '2011-09-07', '2011-11-30', 'Selesai', 44, 3, 'PT. Raga Perkasa Ekaguna', 'JAWA TIMUR - KABUPATEN PASURUAN', '2025-05-25', '2025-05-25', '0', '528165000.00', NULL, 'Jl. Sultan Agung No. 59 Jakarta 12970', 'T-', NULL),
(80, 'Pembangunan GI PLTG Duri berikut Incomer 150 kV PT. PLN (Persero) P3B Sumatra', '084.PJ/611/P3BS/2011 - 15 Jul 2011', '2012-01-10', '2012-11-30', 'Selesai', 44, 2, 'PT. PLN P3B Sumatera', 'SUMATERA BARAT - KOTA PADANG', '2025-05-25', '2025-05-25', '0', '20809001192.00', NULL, 'Jl. S. Parman No. 221 Padang', 'T-', NULL),
(81, 'Pembangunan Kabel Laut 20 kV Bangka Lepar (KSO Mardika)', 'PO No. 080.PJ/611/AI/W.BABEL/2012 - 31 Aug 2012', '2012-08-31', '2013-03-28', 'Selesai', 44, 2, 'PT. PLN  Wilayah Bangka Belitung', 'SUMATERA', '2025-05-25', '2025-05-25', '0', '5151287499.00', NULL, 'Jl. Soekarno Hatta KM 5 Pangkal Pinang', 'T-', NULL),
(82, 'Erection and Testing for GIS Bandara Ngurah Rai Project', '2012002036 - 22 Okt 2012', '2012-10-22', '2013-01-28', 'Selesai', 44, 2, 'PT. Hitachi Power Systems Indonesia', 'BALI - KOTA DENPASAR', '2025-05-25', '2025-05-25', '0', '777652500.00', NULL, 'EJIP Industrial Park, Plot 8 E Cikarang Selatan Bekasi', 'T-', NULL),
(83, 'Site Erection GIS Cawang', 'No.2013007122 -  5 Sept  2013', '2013-09-05', '2014-01-06', 'Selesai', 44, 2, 'PT. Hitachi Power Systems Indonesia', 'DKI JAKARTA - KOTA JAKARTA TIMUR', '2025-05-25', '2025-05-25', '0', '896720000.00', NULL, 'EJIP Industrial Park, Blok 8E Cikarang Selatan', 'T-', NULL),
(84, 'Site Installation, Testing & Commissioning Belawan Project', '3762003147 - 5 August 2013', '2013-08-05', '2014-05-20', 'Selesai', 44, 2, 'PT. ABB Sakti Industri', 'SUMATERA UTARA - KOTA MEDAN', '2025-05-25', '2025-05-25', '0', '1980000000.00', NULL, 'Jl. Wisma Metropolitan II 8th. Fl, Jl. Jend. Sudirman Kav. 29-31 Jakarta', 'T-', NULL),
(85, 'Pekerjaan Instalasi Listrik di PT. Emdeki Utama', 'M16/08/2013 - 15 Agust 2013', '2013-08-15', '2014-01-28', 'Selesai', 44, 2, 'PT. Emdeki Utama', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-25', '2025-05-25', '0', '578630927.00', NULL, 'Jl. Raya Krikilan No. 294 Driyorejo Gresik', 'T-', NULL),
(88, 'GSUT Unit 7 873 MVA 525/23 kV, Tools, PPE, Consumables, Mob&De--mob, Transport & Accomodation', '47712/PE/IPMOMI/15', '2015-04-25', '2015-04-25', 'Selesai', 44, 2, 'PT. Paiton Energy', 'JAWA TIMUR - KOTA PROBOLINGGO', '2025-05-25', '2025-05-25', '0', '170500000.00', NULL, 'Jl. Raya Surabaya - Situbondo, Km. 141 Paiton, Probolinggo 67291', 'T-', NULL),
(89, 'Jasa Overhaul Transformer di PT. Prima Elektrik Power', '004/DU/ABC/I/2015 - 2 Pebruari 2015', '2015-02-02', '2015-03-11', 'Selesai', 44, 2, 'PT. ABC Energy', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-25', '2025-05-25', '0', '270000000.00', NULL, 'Ruko Graha Sutomo Blok D3, Jl. Dr. Soetomo 136-138 Surabaya 60241', 'T-', NULL),
(90, 'Rental of Oil Filtration 1,000 L/H Betano Timor Leste', '3565091447', '2015-01-04', '2015-02-13', 'Selesai', 44, 2, 'ABB PTE LTD', 'BETANO - TIMOR LESTE', '2025-05-25', '2025-05-25', '0', '478082220.00', NULL, '2 Ayer Rajah Crescent  Singapore 139935', 'T-', NULL),
(102, 'Rental Gas Handling PT. Hitachi Sakti Energy Indonesia', '3762014681', '2023-01-06', '2023-02-15', 'Selesai', 23, 4, 'PT. Hitachi Sakti Energy Indonesia', 'SULAWESI SELATAN - KOTA MAKASSAR', '2025-05-26', '2025-05-26', '0', '308000000.00', NULL, 'Gedung World Trade Center 3 Lt. 24 Jl. Jend. Sudirman Blok Kav 29-31 RT 008 RW 003 Karet Setiabudi', 'T-', NULL),
(103, 'Test BDV Trafo 14 unit', 'PSC-SPK-ER2301-00007', '2023-01-17', '2023-01-17', 'Selesai', 20, 11, 'PT. Pancaran Suara Citra', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-26', '2025-05-26', '0', '1050000.00', NULL, 'Mayjend Sungkono No. 87 Syrabaya', 'T-', NULL),
(104, 'Maintenance Panel & Trafo Cleaning, Pengadaan Meter', '1301-01/MKM/2023', '2023-01-13', '2023-01-24', 'Selesai', 44, 1, 'PT. Mega Karya Makmur Rp. 15,000,000', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-26', '2025-05-26', '0', '15000000.00', NULL, 'Jl. Bubutan No. 127-135 Surabaya', 'T-', NULL),
(105, 'Treatment Oil Trafo 140 kVA', '079/01/MSE-PO/2023 - 18 Januari 2023', '2023-01-18', '2023-02-02', 'Selesai', 24, 1, 'PT. Minepower', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-26', '2025-05-26', '0', '20000000.00', NULL, 'Safira Garden D2/15B, Ds. Sepande, Kc. Candi, Sidoarjo 61271', 'T-', NULL),
(106, 'Test DGA oli trafo', 'LMI22.PO.0249 - 3 Feb 2023', '2023-02-03', '2023-02-03', 'Selesai', 20, 11, 'PT. Laros Multi Indoteknik', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-26', '2025-05-26', '0', '1350000.00', NULL, 'Citra Harmoni Blok H1 Nomor 5-6 Trosobo, Taman, Sidoarjo, Jawa Timur 61257', 'T-', NULL),
(107, 'PM for NGR', '9300543430 - 22 Jan 2023', '2023-01-22', '2023-07-17', 'Selesai', 38, 7, 'PT. Gresik Power Indonesia', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-26', '2025-05-26', '0', '39000000.00', NULL, 'Jl. Raya Roomo, Manyar Gresik', 'T-', NULL),
(108, 'PM for Boiler Transformer', '93005491991 - 21 Feb 2023', '2023-02-21', '2023-06-26', 'Selesai', 38, 1, 'PT. Gresik Power Indonesia', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-26', '2025-05-26', '0', '24000000.00', NULL, 'Jl. Raya Roomo, Manyar Gresik', 'T-', NULL),
(109, 'Test DGA oli trafo', 'PO-23001052#1 - 13 Feb 2023', '2023-02-13', '2023-02-13', 'Selesai', 20, 11, 'PT. Bambang Djaja', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-26', '2025-05-26', '0', '4050000.00', NULL, 'Jl. Rungkut Industri III/56 Surabaya', 'T-', NULL),
(110, 'Test DGA oli trafo', '0', '2023-02-27', '2023-02-27', 'Selesai', 20, 11, 'PT. Jaya Abadi Energy', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-26', '2025-05-26', '0', '3000000.00', NULL, 'Bendul Merisi Indah No. 5 Surabaya', 'T-', NULL),
(111, 'Test DGA oli trafo', 'PO-23001136#1 - 28 Feb 2023', '2023-02-28', '2023-02-28', 'Selesai', 20, 11, 'PT. Bambang Djaja', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-26', '2025-05-26', '0', '1350000.00', NULL, 'Jl. Rungkut Industri III/56 Surabaya', 'T-', NULL),
(112, 'Maintenance Trafo 1600 kVA dan 2500 kVA', 'POABP-23-03-00002-REV - 7 Mar 2023', '2023-03-07', '2023-03-13', 'Selesai', 22, 1, 'CV. Abadi Buana Powerindo', 'JAWA TIMUR - KABUPATEN PASURUAN', '2025-05-26', '2025-05-26', '0', '19525000.00', NULL, 'Jl. Jeruk VII/J-419, Perum Pondok Tjandra Indah, Tambakrejo, Waru-Sidoarjo', 'T-', NULL),
(113, 'Maintenance Trafo 1 (1600 kVA) 1 unit dan Trafo 2 (2500 kVA) 1 unit', 'POABP-23-03-00002, REV- 7 Mar 2023', '2023-03-07', '2023-03-13', 'Selesai', 22, 1, 'CV. Abadi Buana Powerindo', 'JAWA TIMUR - KABUPATEN PASURUAN', '2025-05-26', '2025-05-26', '0', '19525000.00', NULL, 'Jl. Jeruk Vil/J-419, Perum Pondok Tjandra Indah, Tambakrejo, Waru, Sda', 'T-', NULL),
(114, 'Maintenance 150 kV Yard', 'PO No. 1600006704/DSP', '2023-03-09', '2023-03-09', 'Selesai', 23, 2, 'PT. Ispat Indo', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-26', '2025-05-26', '0', '65000000.00', NULL, 'Desa Kedungturi, taman, Sidoarjo', 'T-', NULL),
(115, 'Test DGA oli trafo', 'PSC-SPK-ER2303-00002', '2023-03-14', '2023-03-14', 'Selesai', 20, 11, 'PT. Pancaran Suara Citra', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-26', '2025-05-26', '0', '3000000.00', NULL, 'Mayjend Sungkono No. 87 Surabaya', 'T-', NULL),
(116, 'Treatment Oil Trafo 1000 kVA', '0', '2023-03-18', '2023-03-18', 'Selesai', 24, 1, 'CV. Jaya Elektrik', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-26', '2025-05-26', '0', '2750000.00', NULL, 'Wage, Sidoarjo', 'T-', NULL),
(117, 'Main Electrical Work of CJ BIO PA8 Project', 'PA8-SUB-ELE-004 - 9 Mar 2023', '2023-03-09', '2023-09-30', 'Selesai', 27, 5, 'PT. CJI Pasuruan', 'JAWA TIMUR - KABUPATEN PASURUAN', '2025-05-26', '2025-05-26', '0', '1569000000.00', NULL, 'Perum Istana Bestari CC12. JL DR Wahidin Pekuncen, Panggungrejo, Pasuruan, Jatim', 'T-', NULL),
(118, 'Oil Purification Transformer 630 kVA', 'UC/SPK/20222023/00219, 7 Mar 2023', '2023-03-07', '2023-03-19', 'Selesai', 25, 1, 'Universitas Ciputra', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-26', '2025-05-26', '0', '9000000.00', NULL, 'Citraland CBD Boulevard Surabaya 60219', 'T-', NULL),
(119, 'Test DGA oli trafo', '0', '2023-03-20', '2023-03-20', 'Selesai', 20, 11, 'CV. Jaya Elektrik', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-26', '2025-05-26', '0', '2900000.00', NULL, 'Wage Sidoarjo', 'T-', NULL),
(120, 'Test DGA oli trafo', '23001471#1 - 21 Mar 2023', '2023-03-14', '2023-03-14', 'Selesai', 20, 11, 'PT. Bambang Djaja', 'JAWA TIMUR - KABUPATEN PASURUAN', '2025-05-26', '2025-05-26', '0', '1350000.00', NULL, 'Jl. Rungkut Industri III/56 Surabaya', 'T-', NULL),
(121, 'Treatment Oli Trafo 1000 kVA', 'Surat Pesanan No. 160/PPK.05/DlRBRIN/PO/3/2023', '2023-03-24', '2023-03-31', 'Selesai', 22, 1, 'Deputi Bidang Infrastruktur Riset dan Inovasi', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-26', '2025-05-26', '0', '8250000.00', NULL, 'Gedung BJ Habibie, Jalan M.H. Thamrin No. 8 Jakarta Pusat 10340', 'T-', NULL),
(122, 'Test DGA oli trafo', '4600000815/DJW/', '2023-03-31', '2023-03-31', 'Selesai', 20, 1, 'PT. Ispat Indo', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-26', '2025-05-26', '0', '3000000.00', NULL, 'Desa Kedungturi, taman, Sidoarjo', 'T-', NULL),
(123, 'Test DGA oli trafo', '8912/PRJ1146/MDM/Xll/22', '2022-12-12', '2023-03-28', 'Selesai', 20, 11, 'CV. Mundung Daya Engineering', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-26', '2025-05-26', '0', '4600000.00', NULL, 'Ruko Klampis Megah Blok D12 Belakang Giant, Sby', 'T-', NULL),
(124, 'Service for oil purification Transformer', '23-PO-90', '2023-03-29', '2023-05-27', 'Selesai', 21, 2, 'PT. Elektrindo Utama Indonesia', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-26', '2025-05-26', '0', '178000000.00', NULL, 'Ruko Andalusia Square Blok C04 Jl. RA Kartini - Gresik - Jawa Timur 61122', 'T-', NULL),
(125, 'Test Oil Trafo (DGA, BDV,Water Content )', '23001471#1', '2023-03-21', '2023-05-05', 'Selesai', 38, 11, 'PT. Bambang Djaja', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-26', '2025-05-26', '0', '2000000.00', NULL, 'Jl. Rungkut Industri III/56 Surabaya', 'T-', NULL),
(126, 'Treatment Oil Transforme & Testing', 'PO 23-PO-127', '2023-04-28', '2023-06-08', 'Selesai', 21, 2, 'PT. Elektrindo Utama Indonesia', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-26', '2025-05-26', '0', '154000000.00', NULL, 'Ruko Andalusia Square Blok C04 Jl. RA Kartini - Gresik - Jawa Timur 61122', 'T-', NULL),
(127, 'PM MCC ASU & BOILER MCC, 400 V', '9300562041', '2023-04-30', '2023-06-26', 'Selesai', 38, 1, 'PT. Gresik Power Indonesia', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-26', '2025-05-26', '0', '117500000.00', NULL, 'Jl. Raya Roomo, Manyar Gresik', 'T-', NULL),
(128, 'Jasa Oil Purifier LV Trafo 6.6/0.42 kV', '23-PO-134', '2023-05-10', '2023-05-27', 'Selesai', 21, 1, 'PT. Elektrindo Utama Indonesia', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-26', '2025-05-26', '0', '53000000.00', NULL, 'Ruko Andalusia Square Blok C04 Jl. RA Kartini - Gresik - Jawa Timur 61122', 'T-', NULL),
(129, 'Oil Purification Trafo Rectifier', '23-0593/GUTPO/05(REV-1)', '2023-05-22', '2023-06-05', 'Selesai', 24, 1, 'PT. Graha Usaha Teknik', 'DKI JAKARTA - KOTA JAKARTA PUSAT', '2025-05-26', '2025-05-26', '0', '110000000.00', NULL, 'Jl. Asem Baris Raya No. I00A Kebon Baru', 'T-', NULL),
(130, 'Test DGA oli trafo', 'PO-23002493#1', '2023-05-26', '2023-07-12', 'Selesai', 20, 11, 'PT. Bambang Djaja', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '1350000.00', NULL, 'Jl. Rungkut Industri III/56 Surabaya', 'T-', NULL),
(131, 'Treatment , BDV, XFRA, Winding Resistance, Tan Delta, Ratio, Function', 'No. 673/HPU-Log/V/2023', '2023-05-29', '2023-06-20', 'Selesai', 21, 2, 'PT. Hasta Prajatama', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '75000000.00', NULL, 'Jl. Lingkar Timur No.1, Kemiri, Sda', 'T-', NULL),
(132, 'Jasa Oil Purifier LV Trafo 6.6/0.42 kV', '23-PO-148', '2023-06-03', '2023-07-24', 'Selesai', 21, 2, 'PT. Elektrindo Utama Indonesia', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '121440000.00', NULL, 'Ruko Andalusia Square Blok C04 Jl. RA Kartini - Gresik - Jawa Timur 61122', 'T-', NULL),
(133, 'Jasa Oil Purifier LV Trafo 33/6.9 kV', '23-PO-173', '2023-06-03', '2023-07-24', 'Selesai', 21, 2, 'PT. Elektrindo Utama Indonesia', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '75680000.00', NULL, 'Ruko Andalusia Square Blok C04 Jl. RA Kartini - Gresik - Jawa Timur 61122', 'T-', NULL),
(134, 'Test DGA oli trafo', '234201067', '2023-06-15', '2023-06-22', 'Selesai', 20, 1, 'PT. Emdeki Utama', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '3900000.00', NULL, 'Jl. Krikilan 294, Driyorejo Gresik 61177', 'T-', NULL),
(135, 'Test Oil Trafo (DGA, BDV,Water Content )', 'PO-2306052', '2023-06-09', '2023-06-22', 'Selesai', 20, 11, 'PT. Multi Daya Mitra', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '5600000.00', NULL, 'Ruko Klampis Megah Blok D12 Belakang Giant, Sby', 'T-', NULL),
(136, 'Test DGA oli trafo', 'PO-23002748#1', '2023-06-13', '2023-07-12', 'Selesai', 20, 11, 'PT. Bambang Djaja', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '1350000.00', NULL, 'Jl. Rungkut Industri 111/56 Surabaya', 'T-', NULL),
(137, 'Test Oli DGA PT. Indonesia Polymer Compound - 1 unit', 'PO-23002748#1', '2023-06-13', '2023-07-12', 'Selesai', 20, 11, 'PT. Bambang Djaja', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '1350000.00', NULL, 'Rungkut Industri 111/56 Rungkut Menanggal, Gunung Anyar Surabaya 60293', 'T-', NULL),
(138, 'Test Oli DGA PT. Aisan Nasmoco Industry 1', 'PO-23002750#1', '2023-06-13', '2023-07-12', 'Selesai', 20, 11, 'PT. Bambang Djaja', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '1350000.00', NULL, 'Jl. Rungkut Industri 111/56 Surabaya', 'T-', NULL),
(139, 'Oil Purification Transformer Rectifier', '23-0691/GUT-PO/06 (REV-I)', '2023-06-21', '2023-06-21', 'Selesai', 24, 1, 'PT. Graha Usaha Teknik', 'JAWA TENGAH - KABUPATEN JEPARA', '2025-05-27', '2025-05-27', '0', '25000000.00', NULL, 'Jl. Asem Baris Raya No. I00A Kebon Baru', 'T-', NULL),
(140, 'Check Tegangan Tembus 2500 kVA dan DGA', 'MJS/23/06/077', '2023-07-11', '2023-07-11', 'Selesai', 20, 11, 'PT. Hokkan Deltapack Industri', 'JAWA TIMUR - KABUPATEN MOJOKERTO', '2025-05-27', '2025-05-27', '0', '2000000.00', NULL, 'Jl. Raden Patah, Dusum Adisono RT.005/RW.002 Dusun Lebaksono, Kec.Pungging-Mojosari', 'T-', NULL),
(141, 'Oil Purification Transformer (offline)', 'PO No.1600006763/DSP/', '2023-07-18', '2023-07-18', 'Selesai', 28, 11, 'PT. Ispat Indo', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '5401440.00', NULL, 'Desa Kedungturi, taman, Sidoarjo', 'T-', NULL),
(142, 'Test DGA oli trafo', 'JF/2307/000001-', '2023-08-01', '2023-08-01', 'Selesai', 20, 11, 'PT. Jatim Taman Steel', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '1800000.00', NULL, 'Jl. Raya Taman, Sepanjang, Taman, Kabupaten Sidoarjo, Jawa Timur 61257', 'T-', NULL),
(143, 'CT and OLTC Testing Trafo 33/6.9 kV - 20 MVA', '23-PO-231', '2023-08-05', '2023-08-05', 'Selesai', 21, 7, 'PT. Elektrindo Utama Indonesia', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '27000000.00', NULL, 'Ruko Andalusia Square Blok C04 Jl. RA Kartini - Gresik - Jawa Timur 61122', 'T-', NULL),
(144, 'Services for Oil Purification Transformer Drain Filling Oil Transformer', '23-PO-235_R01', '2023-08-12', '2023-08-12', 'Selesai', 21, 1, 'PT. Elektrindo Utama Indonesia', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '15000000.00', NULL, 'Ruko Andalusia Square Blok C04 Jl. RA Kartini - Gresik - Jawa Timur 61122', 'T-', NULL),
(145, 'Services for Oil Purification Transformer Drain Filling Oil Transformer', '23-PO-237_R01', '2023-08-12', '2023-08-12', 'Selesai', 21, 1, 'PT. Elektrindo Utama Indonesia', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '60000000.00', NULL, 'Ruko Andalusia Square Blok C04 Jl. RA Kartini - Gresik - Jawa Timur 61122', 'T-', NULL),
(146, 'Test DGA oli trafo PT. Sorini Towa Berlian Corporindo', 'PO-23003749#1', '2023-08-04', '2023-08-04', 'Selesai', 20, 11, 'PT. Bambang Djaja', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '16200000.00', NULL, 'Jl. Rungkut Industri 111/56 Surabaya', 'T-', NULL),
(147, 'Test Oil Trafo (DGA, BDV,Water Content )', 'PO-23003747#1', '2023-08-03', '2023-08-04', 'Selesai', 20, 11, 'PT. Bambang Djaja', 'JAWA TENGAH - KABUPATEN BANJARNEGARA', '2025-05-27', '2025-05-27', '0', '8000000.00', NULL, 'Jl. Rungkut Industri 111/56 Surabaya', 'T-', NULL),
(148, 'Test Oil Trafo (DGA, BDV,Water Content )', 'PO-23003747#1', '2023-08-03', '2023-08-04', 'Selesai', 20, 11, 'PT. Bambang Djaja', 'SUMATERA SELATAN - KOTA PALEMBANG', '2025-05-27', '2025-05-27', '0', '8000000.00', NULL, 'Jl. Rungkut Industri 111/56 Surabaya', 'T-', NULL),
(149, 'Treatment Trafo 2000 kVA (online), Cleaning & Maintenance Cubicle', '065/SO-SLM/Vlll/2023', '2023-08-04', '2023-09-04', 'Selesai', 21, 11, 'PT. Sibelco Minerals', 'JAWA TIMUR - KABUPATEN MOJOKERTO', '2025-05-27', '2025-05-27', '0', '7500000.00', NULL, 'Jl. Raya Ngoro Blok C2-2A Mjk', 'T-', NULL),
(150, 'Calibration Relay', 'PO No.5200000253', '2023-08-04', '2023-08-11', 'Selesai', 8, 7, 'PT. Gresik Gases Indonesia', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '72000000.00', NULL, 'Gresik', 'T-', NULL),
(151, 'Test DGA oli trafo & Water Content', 'PO-23003974#1', '2023-08-14', '2023-08-15', 'Selesai', 20, 11, 'PT. Bambang Djaja', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '3500000.00', NULL, 'Jl. Rungkut Industri 111/56 Surabaya', 'T-', NULL),
(152, 'Sewa Mesin Vacuum', 'PO No. SO/PO/STE/VIII/2023', '2023-08-18', '2023-08-18', 'Selesai', 22, 4, 'CV. Sarana Teknik', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '20000000.00', NULL, 'Griyo Mapan Sentosa Blok EE-48 waru, Sidoarjo', 'T-', NULL),
(153, 'Treatment Oil dan Cleaning Cubicle', 'SDA/23/08/021', '2023-09-01', '2023-09-01', 'Selesai', 21, 1, 'PT. Hokkan Deltapack Industri', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '6300000.00', NULL, 'Jl. Raya Sawunggaling No. 24 Jemundo, Taman, Sidoarjo 61257', 'T-', NULL),
(154, 'Filterisasi oli trafo 600 kVA', '231/TST/VIII/2023', '2023-08-23', '2023-08-23', 'Selesai', 7, 1, 'PT. Tri Samsu Teknik', 'JAWA TIMUR - KABUPATEN MOJOKERTO', '2025-05-27', '2025-05-27', '0', '3000000.00', NULL, 'Duşun Lengkong RT 002 RW 003 Deşa Jatigedong Kec. Ploso', 'T-', NULL),
(155, 'Treatment Oil Transforme 500 kV', '23-1164/GUT-PO/09', '2023-10-09', '2023-10-24', 'Selesai', 23, 1, 'PT. Graha Usaha Teknik', 'JAWA TIMUR - KABUPATEN PROBOLINGGO', '2025-05-27', '2025-05-27', '0', '250000000.00', NULL, 'Jl. Asem Baris Raya No. I00A Kebon Baru', 'T-', NULL),
(160, 'Test DGA dan Water Content 1 sample', 'PO No. PO-2311057', '2023-11-06', '2023-11-07', 'Selesai', 20, 11, 'PT. Multi Daya Mitra', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '1900000.00', NULL, 'Ruko Klampis Megah Blok D12 Belakang Giant, Sby', 'T-', NULL),
(161, 'Test DGA 1 sample', 'PO No. PO-2311184', '2023-11-20', '2023-11-21', 'Selesai', 20, 11, 'PT. Multi Daya Mitra', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '1500000.00', NULL, 'Ruko Klampis Megah Blok D12 Belakang Giant, Sby', 'T-', NULL),
(164, 'Sewa Manpower', '0', '2023-11-21', '2023-11-24', 'Selesai', 24, 4, 'PT. Glory Electric Indonesia', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '3000000.00', NULL, 'Surabaya', 'T-', NULL),
(166, 'Inspeksi Infrared Thermograph Panel Listrik 250 titik', 'PSC-SPK-ER240100010', '2024-01-15', '2024-07-30', 'Selesai', 38, 7, 'PT. Pancaran Suara Citra', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '8750000.00', NULL, 'CIPUTRA WORLD SURABAYA (MALL)', 'T-', NULL),
(167, 'Pulling Cable', 'TPE-T4002-HO-SPK', '2024-01-30', '2024-03-06', 'Selesai', 27, 5, 'PT. Tiga Pilar Energi', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '650000000.00', NULL, '18 Office Park Lt. 22, Suite E,F,G JI. TB Simatupang Kav 18 Jakarta Selatan', 'T-', NULL),
(168, 'Treatment Oli Trafo 1000kVA SDF 2024 & Cleaning Cubicle', 'IDN 10010339', '2024-01-24', '2024-02-24', 'Selesai', 21, 1, 'PT. DHL Supply Chain', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '8545000.00', NULL, 'JL.Raya Rungkut Industri no 6a', 'T-', NULL),
(170, 'Test Oil Trafo', '07-02-24', '2024-02-07', '2024-02-07', 'Selesai', 20, 11, 'CV. Teknologi Berjaya', 'JAWA TIMUR - KOTA BLITAR', '2025-05-27', '2025-05-27', '0', '2800000.00', NULL, 'Griya Pesona Asri Blok J no 34', 'T-', NULL),
(171, 'Maintenance Trafo 1 (1600kVA) & 2 (2500kVA)', 'POABB-24-02-00001.REV', '2024-02-06', '2024-02-25', 'Selesai', 22, 1, 'PT. Adiprima Buana Bakti', 'JAWA TIMUR - KABUPATEN PASURUAN', '2025-05-27', '2025-05-27', '0', '21650000.00', NULL, 'JL.Raya Taman Asri TF-41', 'T-', NULL),
(172, 'Test Oli Trafo DGA 1 Sample', '026/PD-I/MSE-HRU/II/2024', '2024-02-09', '2024-02-12', 'Selesai', 20, 11, 'PT. Hamparan Rejeki Utama', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '1400000.00', NULL, 'Mayjend Suprapto no 87', 'T-', NULL),
(173, 'Commisioning TC 150 kv', '1500164912/ZCAP/', '2024-02-22', '2024-03-02', 'Selesai', 27, 7, 'PT. Ispat Indo', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '42000000.00', NULL, 'Desa Kedungturi, taman, Sidoarjo', 'T-', NULL),
(174, 'Test Oli Trafo BDV 14 Sample', 'PSC-SPK-ER2402-00004', '2024-02-29', '2024-03-13', 'Selesai', 24, 11, 'PT. Pancaran Suara Citra', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '1398600.00', NULL, 'CIPUTRA WORLD SURABAYA (MALL)', 'T-', NULL),
(176, 'Test Oli Trafo DGA 1 Sample', 'PO-24001666#1', '2024-03-13', '2024-03-13', 'Selesai', 20, 11, 'PT. Bambang Djaja', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '1350000.00', NULL, 'Jl. Rungkut Industri 111/56 Surabaya', 'T-', NULL),
(181, 'Purifikasi Oli 555kVA & Cleaning Cubicle', '02403044', '2024-03-22', '2024-03-31', 'Selesai', 24, 1, 'PT. Multi Makmur', 'JAWA TIMUR - KABUPATEN MOJOKERTO', '2025-05-27', '2025-05-27', '0', '6270000.00', NULL, 'Jl. Raya Mojosari Km 3,8 No 888', 'T-', NULL),
(183, 'Maintenance 150kV yard substation', '1600007003/DSP/26.03.2024', '2024-03-26', '2024-04-24', 'Selesai', 27, 1, 'PT. Ispat Indo', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '65000000.00', NULL, 'Desa Kedungturi, taman, Sidoarjo', 'T-', NULL),
(184, 'Treatment Oli Trafo 2000kVA & 2500kVA', 'PSC-SPK-ER2403-00006', '2024-04-01', '2024-05-15', 'Selesai', 24, 1, 'PT. Pancaran Suara Citra', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '6712500.00', NULL, 'CIPUTRA WORLD SURABAYA (MALL)', 'T-', NULL),
(185, 'Purifikasi Oli Trafo 1000kVA secara offline', '520.PO.LOC.2024.040002', '2024-04-04', '2024-04-15', 'Selesai', 24, 1, 'PT. Easterntex', 'JAWA TIMUR - KABUPATEN PASURUAN', '2025-05-27', '2025-05-27', '0', '3500000.00', NULL, 'Karang Kepuh, Karang Jati. Pasuruan', 'T-', NULL),
(186, 'Maintenance 150 Bay, maintenance Bay Trafo 150kV, maintenance Kubikel 20kV, dan Lifting penggantian bushing tembok Fasa S', '084/MEN-PO/IV/2024', '2024-04-04', '2024-04-28', 'Selesai', 23, 1, 'PT. Multi Energytama', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '167200000.00', NULL, 'Jalan Ketintang Selatan 1/2 Kav 101 Karah RT 001 RW 009 Surabaya', 'T-', NULL),
(187, 'Test Oli Trafo DGA 9 Sample', '046/PD-I/MSE-TB/IV/2024', '2024-04-15', '2024-04-17', 'Selesai', 20, 11, 'CV. Teknologi Berjaya', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '12600000.00', NULL, 'Griya Pesona Asri Blok J no 34', 'T-', NULL),
(188, 'Precommissioning Cubicle 6,6 kV 16 Panel', '23/PO/Tbe/IV 24 Ri', '2024-04-16', '2024-05-08', 'Selesai', 21, 7, 'PT. Trimitra Buana Engineering', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '192000000.00', NULL, 'JL. Brigjend Katamso, Waru', 'T-', NULL),
(189, 'Pengujian Sebelum & Sesudah Training Cleaning', '112/PO-BUTS/IV/2024', '2024-04-16', '2024-11-20', 'Selesai', 23, 7, 'PT.Bintang Timur Utama Sejahtera', 'JAWA TIMUR - KABUPATEN MALANG', '2025-05-27', '2025-05-27', '0', '65000000.00', NULL, 'Jl. Ngagel Dadi II C/1 Sby', 'T-', NULL),
(191, 'Jasa Oli Trafo Purification Trafo Rectifier 12 Unit', '24-0221/GUT-PO/04', '2024-04-22', '2024-05-28', 'Selesai', 24, 1, 'PT. Graha Usaha Teknik', 'JAWA TENGAH - KABUPATEN JEPARA', '2025-05-27', '2025-05-27', '0', '75000000.00', NULL, 'Jl. Jendral Sudirman, Jakarta', 'T-', NULL),
(192, 'Test Oli Trafo DGA 2 Sample (1250kVA & 2500kVA)', '054/PD-1/MSE-JAE/V/2024', '2024-05-07', '2024-05-08', 'Selesai', 20, 11, 'PT. Jaya Abadi Energy', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '3000000.00', NULL, 'JL.Dungus No 9, Sukodono', 'T-', NULL),
(193, 'Supply Manpower, Consumables, and tools including inspection and testing GSUT, UAT, IPB, NPB, Excitation, PLTA & GCB Outage', '24-0280/GUT-PO/05', '2024-05-08', '2024-06-01', 'Selesai', 21, 7, 'PT. Graha Usaha Teknik', 'KALIMANTAN TENGAH - KOTA PALANGKA RAYA', '2025-05-27', '2025-05-27', '0', '194000000.00', NULL, 'Jl. Asem Baris Raya No. I00A Kebon Baru', 'T-', NULL),
(195, 'Sewa Montage Roll \"Single\" 1 Minggu', '0', '2024-05-14', '2024-05-21', 'Selesai', 44, 4, 'PT. Persada Indah Muda', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '750000.00', NULL, 'Surabaya', 'T-', NULL),
(199, 'MV Cable (E-house to HSB) 2 jalur & Hipot', '59/PO/TBE/V/24', '2024-05-29', '2024-05-30', 'Selesai', 8, 7, 'PT. Trimitra Buana Engineering', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '9000000.00', NULL, 'JL. Brigjend Katamso, Waru', 'T-', NULL),
(200, 'Precommissioning Trafo Distribution (3720-XFR-2000 dan 3720-XFR-2002) 2 unit', '63/PO/TBE/IV/24', '2024-05-31', '2024-06-03', 'Selesai', 8, 7, 'PT. Trimitra Buana Engineering', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '9000000.00', NULL, 'JL. Brigjend Katamso, Waru', 'T-', NULL),
(201, 'Purifikasi Palangkaraya', '24-0375/GUT-PO/05', '2024-05-31', '2024-06-11', 'Selesai', 25, 7, 'PT. Graha Usaha Teknik', 'KALIMANTAN TENGAH - KOTA PALANGKA RAYA', '2025-05-27', '2025-05-27', '0', '83000000.00', NULL, 'Jl. Jendral Sudirman, Jakarta', 'T-', NULL),
(202, 'MV CABLE 2 LINE', '71/PO/TBE/VI/24', '2024-06-12', '2024-06-18', 'Selesai', 8, 7, 'PT. Trimitra Buana Engineering', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '9000000.00', NULL, 'JL. Brigjend Katamso, Waru', 'T-', NULL),
(203, 'Test Oli Trafo DGA 2 Sample', '0', '2024-06-10', '2024-06-10', 'Selesai', 20, 11, 'PT. Ispat Wire Products', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '3000000.00', NULL, 'Desa Kedungturi, taman, Sidoarjo', 'T-', NULL),
(204, 'Test Oli Trafo DGA 5 Sample', '073/PD-I/MSE/TB/VI/2024', '2024-06-14', '2024-06-14', 'Selesai', 20, 11, 'PT. Trimitra Buana Engineering', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '7000000.00', NULL, 'JL. Brigjend Katamso, Waru', 'T-', NULL),
(205, 'Low Voltage Switchgear (LVSWG) 3720-SWG and 3720-MCC (Relay protection and ACB)', '67/PO/TBE/VI/24', '2024-06-10', '2024-06-10', 'Selesai', 8, 7, 'PT. Trimitra Buana Engineering', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '56000000.00', NULL, 'JL. Brigjend Katamso, Waru', 'T-', NULL),
(206, 'Pre-Commisioning Trafo Distribusi', '63/PO/TBE/IV/24', '2024-05-31', '2024-06-03', 'Selesai', 8, 7, 'PT. Trimitra Buana Engineering', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '9000000.00', NULL, 'JL. Brigjend Katamso, Waru', 'T-', NULL),
(207, 'Test DGA 2 Sample', '076/PD-1/ISP-W/VI/2024', '2024-06-28', '2024-06-28', 'Selesai', 20, 11, 'PT. Ispat Wire Products', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '3000000.00', NULL, 'Desa Kedungturi, taman, Sidoarjo', 'T-', NULL),
(208, 'MV Cable (E-Room to EDG) 2 jalur & Hipot', '71/PO/TBE/VI/24', '2024-06-12', '2024-06-18', 'Selesai', 8, 7, 'PT. Trimitra Buana Engineering', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '9000000.00', NULL, 'JL. Brigjend Katamso, Waru', 'T-', NULL),
(209, 'Sewa Anti Twist Ø18mm 12 hasbel - 2 Bulan', '0', '2024-06-14', '2024-08-14', 'Selesai', 44, 4, 'PT. Hasta Prajatama', 'SUMATERA UTARA - KOTA MEDAN', '2025-05-27', '2025-05-27', '0', '60000000.00', NULL, 'Jl. Lingkar Timur No.1, Kemiri, Sda', 'T-', NULL),
(210, 'Precommissioning Trafo 6,6kV di HSB, FMR (winding, megger, dan test report) 2 unit', '080/PD-I/MSE-TBE/VII/2024', '2024-06-27', '2024-07-01', 'Selesai', 8, 7, 'PT. Trimitra Buana Engineering', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '9000000.00', NULL, 'Jl. Tirta Raya Ruko Graha Tirta No. 9 Waru', 'T-', NULL),
(211, 'Repair & Filtration of Transformer No.18 & 29, DGA,PPM, BDV', '1600007061/DSP/28.06.2024', '2024-06-28', '2024-07-20', 'Selesai', 23, 1, 'PT. Ispat Indo', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '22000000.00', NULL, 'Desa Kedungturi, taman, Sidoarjo', 'T-', NULL),
(212, 'Pre-Commisioning Trafo 6.6 kV (LVSWG) 9 Panel', '106/PO/TBE/VII/24', '2024-07-15', '2024-07-16', 'Selesai', 8, 7, 'PT. Trimitra Buana Engineering', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '60000000.00', NULL, 'Jl. Tirta Raya Ruko Graha Tirta No. 9 Waru', 'T-', NULL),
(213, 'Test Oli Trafo DGA 1 Sample', '085/PD-I/MSE-TB/VII/2024', '2024-07-04', '2024-07-11', 'Selesai', 20, 11, 'CV. Teknologi Berjaya', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '1400000.00', NULL, 'Griya Pesona Asri Blok J no 34', 'T-', NULL),
(214, 'Test Oli Trafo DGA 1 sample Praxis', '089/PD-I/MSE-TB/VII/2024', '2024-07-08', '2024-07-18', 'Selesai', 20, 11, 'CV. Teknologi Berjaya', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '1400000.00', NULL, 'Griya Pesona Asri Blok J no 34', 'T-', NULL),
(215, 'Test DGA 1 Sample& Test Colour,Mousture', '091/PD-I/MSE-MDM/VII/2024', '2024-07-08', '2024-07-18', 'Selesai', 20, 11, 'PT. Multi Daya Mitra', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '1500000.00', NULL, 'Ruko Jati Kepuh Indah F-26, Dusun Larangan, Larangan, Kec. Candi, Kabupaten Sidoarjo, Jawa Timur 61256', 'T-', NULL),
(216, 'Test Oli Trafo 2 Sample (Test Colour & Moesture)', '084/PD-I/MSE-HRU/VII/2024', '2024-07-08', '2024-07-11', 'Selesai', 20, 11, 'PT. Hamparan Rejeki Utama', 'JAWA TENGAH - KABUPATEN SEMARANG', '2025-05-27', '2025-05-27', '0', '1600000.00', NULL, 'Ruko Jati Kepuh Indah F-26, Dusun Larangan, Larangan, Kec. Candi, Kabupaten Sidoarjo, Jawa Timur 61256', 'T-', NULL),
(217, 'Test Oli Trafo DGA 1 Sample', '090/PD-I/MSE-TB/VII/2024', '2024-07-10', '2024-07-18', 'Selesai', 20, 11, 'CV. Teknologi Berjaya', 'JAWA TIMUR - KOTA MALANG', '2025-05-27', '2025-05-27', '0', '1400000.00', NULL, 'Griya Pesona Asri Blok J no 34', 'T-', NULL);
INSERT INTO `proyek` (`id_proyek`, `nama_proyek`, `no_kontrak`, `tanggal_mulai`, `tanggal_selesai`, `status`, `id_pekerja`, `id_bproyek`, `nama_klien`, `lokasi_klien`, `updated_at`, `created_at`, `no_brast`, `nominal`, `tahun`, `alamat_klien`, `telp_klien`, `id_klien`) VALUES
(218, 'Test Oli Trafo DGA 22 Sample', '24/07/TMS2/POL/1504', '2024-07-04', '2024-04-09', 'Selesai', 20, 11, 'PT. Master Steel Manufactory', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '118800000.00', NULL, 'Kawasan Industri Maspion Unit V Manyar Gresik', 'T-', NULL),
(219, 'Test Commisioning Low Voltage 9 day', '113/PO/TBE/VII/24 – 29 Juli 2024', '2024-07-29', '2024-08-01', 'Selesai', 8, 7, 'PT. Trimitra Buana Engineering', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '103500000.00', NULL, 'Jl. Tirta Raya Ruko Graha Tirta No. 9 Waru', 'T-', NULL),
(220, 'Test DGA 3 unit PG Krebet', '103/PD-I/MSE-TB/VIII/2024', '2024-07-24', '2024-08-08', 'Selesai', 20, 11, 'CV. Teknologi Berjaya', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '4200000.00', NULL, 'Griya Pesona Asri Blok J no 34', 'T-', NULL),
(221, 'Test BDV 1 sample', '0', '2024-07-28', '2024-07-28', 'Selesai', 20, 11, 'PT. Master Steel', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '400000.00', NULL, 'Kawasan Industri Maspion Unit V Manyar Gresik', 'T-', NULL),
(222, 'Test Oli Trafo DGA 1 Sample', '104/PD-I/MSE-TB/VIII/2024', '2024-07-29', '2024-08-08', 'Selesai', 20, 1, 'CV. Teknologi Berjaya', 'BALI - KABUPATEN TABANAN', '2025-05-27', '2025-05-27', '0', '1400000.00', NULL, 'Griya Pesona Asri Blok J no 34', 'T-', NULL),
(223, 'Treatment Oli di Sekolah Ciputra', 'SC/SPK/2024-2025/00029', '2024-08-05', '2024-09-02', 'Selesai', 24, 1, 'Sekolah Ciputra', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '6000000.00', NULL, 'Surabaya', 'T-', NULL),
(224, 'Test Oli Trafo DGA 1 Sample', '0', '2024-07-29', '2024-08-19', 'Selesai', 20, 11, 'CV. Teknologi Berjaya', 'JAWA TIMUR - KABUPATEN MALANG', '2025-05-27', '2025-05-27', '0', '1400000.00', NULL, 'Griya Pesona Asri Blok J no 34', 'T-', NULL),
(225, 'Treartment Oli Trafo/Purifiying 1480 Liter 1500kVA', 'PO2024/VIII/031', '2024-08-21', '2024-08-29', 'Selesai', 25, 1, 'PT. Sinar Angkasa Rungkut', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '2750000.00', NULL, 'Jl. Rungkut Industri 1/8 Surabaya', 'T-', NULL),
(226, 'Offline Oil Filtration Trafo No. 11 & 20 (DGA, BDV, Water Content, dan PPM)', '1600007094/DSP/26.08.2024', '2024-08-28', '2024-09-03', 'Selesai', 27, 1, 'PT. Ispat Indo', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '9502126.00', NULL, 'Desa Kedungturi, taman, Sidoarjo', 'T-', NULL),
(227, 'Pekerjaan Trafo IBT 500kV IBT #2 Krian', '033/PO/ATT/2024', '2024-08-26', '2024-10-18', 'Selesai', 23, 1, 'PT. Abadi Technology Terbaik', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '510000000.00', NULL, 'Gedung Wirausaha Lt. 1 Unit 104, JI. HR. Rasuna Said Kav C-5, Karet, Setiabudi, Jakarta Selatan, DKI Jakarta', 'T-', NULL),
(228, 'Test Tan Delta 4 Unit', '24-PO-293', '2024-08-31', '2024-09-02', 'Selesai', 21, 7, 'PT. Elektrindo Utama Indonesia', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '16000000.00', NULL, 'Perum. Alam Bukit Raya D2 No. 18 RT. 008 RW. 009 Kembangan, Kebomas, Gres', 'T-', NULL),
(229, 'Sewa Crimping Tools 800mm untuk terminasi', '002/SM3M/VIII/2024', '2024-08-28', '2024-08-28', 'Selesai', 23, 4, 'PT. Sentratek Metalindo', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '2000000.00', NULL, 'JI. Dr. Cipto No. 3 Surabaya', 'T-', NULL),
(230, 'Treartment Oil & Test DGA 3 Trafo (1600kVA, 2000kVA, dan 2500kVA)', 'PO/STBC/2408-012', '2024-08-02', '2024-11-12', 'Selesai', 44, 1, 'PT. Sorini Towa Berlian Corporindo', 'JAWA TIMUR - KABUPATEN PASURUAN', '2025-05-27', '2025-05-27', '0', '15000000.00', NULL, 'Desa Cangkringmalang, Beji, Kab. Pasuruan 67154', 'T-', NULL),
(231, 'Treatment Trafo Offline 2000kVA', '2408H1-PO033 – 28 Agustus 2024', '2024-08-28', '2024-09-02', 'Selesai', 22, 1, 'PT. Sinarindo Megantara', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '4800000.00', NULL, 'JI. Margomulyo No. 20 Surabaya', 'T-', NULL),
(232, 'Treatment Oil Trafo PT. Palunesia', '2408H2-PO022', '2024-08-28', '2024-09-02', 'Selesai', 22, 1, 'PT. Palunesia', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '3000000.00', NULL, 'JI. Margomulyo No. 61 Surabaya', 'T-', NULL),
(233, 'Test Oli Trafo BDV 1 Sample', '0', '2024-09-30', '2024-09-30', 'Selesai', 20, 1, 'PT. The Master Steel Manufactory', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '400000.00', NULL, 'Kawasan Industri Maspion Unit V Manyar Gresik', 'T-', NULL),
(234, '125/PT.SAN/ADM/8/2024 - 30 Agustus 2024', '125/PT.SAN/ADM/8/2024', '2024-08-30', '2024-08-30', 'Selesai', 38, 1, 'PT. Safila Arta Nugraha', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '1500000.00', NULL, 'Dian Regency Apartment No.123 Kel. Keputih, Kc. Sukolilo Surabaya', 'T-', NULL),
(235, 'Testing and commissioning for protection relay of BMPP for 10 days', '4500608230', '2024-09-11', '2024-09-14', 'Selesai', 38, 7, 'PT. Hitachi Sakti Energy Indonesia', 'SULAWESI TENGGARA - KABUPATEN KOLAKA', '2025-05-27', '2025-05-27', '0', '14250000.00', NULL, 'WTC 3 Lt. 24 Jl. Jend. Sudirman, Jakarta 12920', 'T-', NULL),
(236, 'Test Oli Trafo DGA 1 Sample', '114/PD-I/MSE-TB/IX/2024', '2024-09-08', '2024-09-09', 'Selesai', 20, 11, 'CV. Teknologi Berjaya', 'BALI - KOTA DENPASAR', '2025-05-27', '2025-05-27', '0', '1400000.00', NULL, 'Griya Pesona Asri Blok J no 34', 'T-', NULL),
(238, 'Sewa Anti Twist', 'C240952', '2024-09-10', '2025-01-10', 'Selesai', 44, 4, 'PT. Hasta Prajatama', 'LAMPUNG - KOTA METRO', '2025-05-27', '2025-05-27', '0', '60000000.00', NULL, 'Jl. Lingkar Timur No.1, Kemiri, Sda', 'T-', NULL),
(239, 'Test Oli Trafo 1 Sample (Test Colour & PPM)', '117/PD-I/MSE-HRU/IX/2024', '2024-09-18', '2024-09-18', 'Selesai', 20, 11, 'PT. Hamparan Rejeki Utama', 'JAWA TENGAH - KABUPATEN SEMARANG', '2025-05-27', '2025-05-27', '0', '800000.00', NULL, 'Ruko Jati Kepuh Indah F-26, Dusun Larangan, Larangan, Kec. Candi, Kabupaten Sidoarjo, Jawa Timur 61256', 'T-', NULL),
(240, 'Test Oli Trafo (DGA & Furan) 25 Sample', 'GSJ-XXIV-PO-2206', '2024-09-19', '2024-10-10', 'Selesai', 20, 11, 'PT. Gansar Jaya', 'JAWA TIMUR - KABUPATEN MOJOKERTO', '2025-05-27', '2025-05-27', '0', '100000000.00', NULL, 'Jl. Sekarputih No. 470, Mojokerto', 'T-', NULL),
(241, 'PT. Graha Usaha Teknik', '24-0870/GUT-PO/09', '2024-09-23', '2024-09-27', 'Selesai', 24, 1, 'PT. Graha Usaha Teknik', 'JAWA TENGAH - KABUPATEN JEPARA', '2025-05-27', '2025-05-27', '0', '22000000.00', NULL, 'Jl. Asem Baris Raya No. I00A Kebon Baru', 'T-', NULL),
(242, 'Test Oli Trafo DGA 1 Sample', '114/PD-I/MSE-TB/IX/2024', '2024-09-08', '2024-09-09', 'Selesai', 20, 11, 'CV. Teknologi Berjaya', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '1400000.00', NULL, 'Griya Pesona Asri Blok J no 34', 'T-', NULL),
(243, 'Offline Oil Filtration 2 Trafo 40/50MVA & 100MVA (DGA, BDV, Water Content, dan PPM)', '1600007113/DSP/', '2024-09-22', '2024-10-04', 'Selesai', 25, 1, 'PT. Ispat Indo', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '58000000.00', NULL, 'Desa Kedungturi, taman, Sidoarjo', 'T-', NULL),
(244, 'Purification 4 Trafo Kariangau', '24-0905/GUT-PO/10', '2024-10-04', '2024-11-22', 'Selesai', 21, 1, 'PT. Graha Usaha Teknik', 'KALIMANTAN TIMUR - KOTA BALIKPAPAN', '2025-05-27', '2025-05-27', '0', '310000000.00', NULL, 'Jl. Asem Baris Raya No. I00A Kebon Baru', 'T-', NULL),
(245, 'Test Oli Trafo DGA 2 Sample', '206/MEN-PO/X/2024', '2024-10-10', '2024-10-10', 'Selesai', 20, 11, 'PT. Multi Energytama', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '3000000.00', NULL, 'jl. Ketintang Selatan  I/2 Kav 101', 'T-', NULL),
(246, 'Pengadaan dan Pemasangan PM 5350', 'C240952', '2024-10-10', '2024-10-21', 'Selesai', 25, 6, 'PT. Sarana Karya Utama', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '7251000.00', NULL, 'Jl. KIG Raya Selatan Kav.A', 'T-', NULL),
(247, 'Test Oli Trafo DGA 2 Sample', 'GSJ-XXIV-PO-2233', '2024-10-22', '2024-10-22', 'Selesai', 20, 11, 'Test Oli Trafo DGA 2 Sample', 'JAWA TIMUR - KABUPATEN MOJOKERTO', '2025-05-27', '2025-05-27', '0', '3000000.00', NULL, 'Jl. Sekarputih No. 470, Mojokerto', 'T-', NULL),
(248, 'Filtrasi Trafo 3 Unit dan Cubicle Maintenance 5 Unit', '133/PD-I/MSE/XI/2024', '2024-10-23', '2024-11-01', 'Selesai', 23, 1, 'Bapak Arif Gagah Prasetyo', 'JAWA TIMUR - KABUPATEN TULUNGAGUNG', '2025-05-27', '2025-05-27', '0', '22550000.00', NULL, 'Tulungagung', 'T-', NULL),
(249, 'Pengujian Oil Transformer BDV 1 Sample', 'PO.011506', '2024-10-24', '2024-10-24', 'Selesai', 20, 11, 'PT. Etika Dairies Indonesia', 'JAWA TIMUR - KOTA PASURUAN', '2025-05-27', '2025-05-27', '0', '250000.00', NULL, 'Jl. Raya Gunung Gangsir KM 4,5 Dsn. Gesing', 'T-', NULL),
(250, 'Test Oli Trafo BDV 1 Sample', '0', '2024-10-29', '2024-10-29', 'Selesai', 20, 11, 'PT. The Master Steel Manufactory', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '400000.00', NULL, 'Kawasan Industri Maspion Unit V Manyar Gresik', 'T-', NULL),
(251, 'Jasa Top up, Replacement, Purifikasi & Conservator Check GSUT', '24-0991/GUT-PO/10 (REV-2)', '2024-10-28', '2024-11-19', 'Selesai', 27, 1, 'PT. Graha Usaha Teknik', 'KALIMANTAN TENGAH - KOTA PALANGKA', '2025-05-27', '2025-05-27', '0', '120000000.00', NULL, 'Jl. Asem Baris Raya No. I00A Kebon Baru', 'T-', NULL),
(252, 'Test Oli Trafo DGA 8 Sample', '1600007134/DJW/12.11.2024', '2024-11-13', '2024-11-28', 'Selesai', 20, 11, 'PT. Ispat Indo', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '15200000.00', NULL, 'Desa Kedungturi, taman, Sidoarjo', 'T-', NULL),
(253, 'Repair kebocoran isolator trafo, penambahan oli dengan treatment oli trafo PLN PG630kVA', '0088/PGD/SPK-SBY/XI/24', '2024-11-26', '2024-11-28', 'Selesai', 24, 1, 'PT. PG Gorontalo', 'GORONTALO - KABUPATEN GORONTALO', '2025-05-27', '2025-05-27', '0', '26000000.00', NULL, 'Jl. Residen Sudirman No. 30 Surabaya', 'T-', NULL),
(254, 'Jasa Trafo IBT 500kV 3 Unit', '1803/HPU-Log/XI/2024', '2024-11-28', '2024-01-22', 'Selesai', 23, 1, 'PT. Hasta Prajatama', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '260000000.00', NULL, 'Jl. Lingkar Timur No.1, Kemiri, Sda', 'T-', NULL),
(255, 'Test Oli Trafo DGA 3 Sample', 'GSJ-XXIV-PO-2281', '2024-12-02', '2024-12-02', 'Selesai', 20, 11, 'PT. Gansar Jaya', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '4500000.00', NULL, 'Jl. Sekarputih No. 470, Mojokerto', 'T-', NULL),
(256, 'Test Oli Trafo (DGA & BDV) 2 Sample', '244202113', '2024-12-04', '2024-12-09', 'Selesai', 20, 11, 'PT. Emdeki Utama', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '4200000.00', NULL, 'Jl. Krikilan 294, Driyorejo Gresik 61177', 'T-', NULL),
(257, 'Test Oli Trafo BDV 1 Sample', '0', '2024-12-11', '2024-12-12', 'Selesai', 20, 11, 'Gereja Citraland Surabaya', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '250000.00', NULL, 'Gereja Citraland Surabaya', 'T-', NULL),
(258, 'PT. Sentratek Metalindo', '003/SM3M/VIII/2024', '2024-12-12', '2024-12-13', 'Selesai', 44, 4, 'Sewa crimping Tools 1 hari', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-05-27', '2025-05-27', '0', '2000000.00', NULL, 'Jl. Dr. Cipto No. 5 Surabaya', 'T-', NULL),
(259, 'Test Oli Trafo DGA 3 Sample', '153/PD-I/MSE-TB/XII/2024', '2024-12-16', '2024-12-26', 'Selesai', 20, 11, 'CV. Teknologi Berjaya', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '4200000.00', NULL, 'Griya Pesona Asri Blok J no 34', 'T-', NULL),
(260, 'Test Oli Trafo DGA 2 Sample', '0', '2024-12-24', '2024-12-24', 'Selesai', 20, 11, 'CV. Ready Tech', 'JAWA TIMUR - KOTA SURABAYA', '2025-05-27', '2025-05-27', '0', '3000000.00', NULL, 'Jl. Margorejo Indah 36A, Jemursari Surabaya', 'T-', NULL),
(261, 'Hipot Test 1 Jalur', '0', '2024-12-27', '2024-12-27', 'Selesai', 38, 7, 'Bapak Budi Slamet', 'JAWA TIMUR - KABUPATEN KEDIRI', '2025-05-27', '2025-05-27', '0', '2000000.00', NULL, 'Kediri', 'T-', NULL),
(262, 'Test Oli Trafo DGA 1 Sample', '0', '2024-12-30', '2024-12-30', 'Selesai', 20, 11, 'PT. Jaya Abadi Energy', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-05-27', '2025-05-27', '0', '1500000.00', NULL, 'Jl. Dungus No. 09 Sukodono Sidoarjo', 'T-', NULL),
(263, 'Test Oli DGA & Water Content 2 Sample', 'PO-2501066', '2025-01-08', '2025-01-15', 'Selesai', 20, 11, 'PT. Multi Daya Mitra', 'JAWA TIMUR - KOTA MALANG', '2025-06-03', '2025-06-03', '0', '3800000.00', NULL, 'Ruko Klampis Megah Blok D12 (Belakang Giant, Surabaya)', 'T-', NULL),
(264, 'Replacement & Commissioning Panel 20kV', '4500013443/ZCAP/09.01.2025', '2025-01-09', '2025-03-24', 'Selesai', 23, 1, 'PT. Ispat Wire Products', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-06-03', '2025-06-03', '0', '65000000.00', NULL, 'Desa Kedungturi, taman, Sidoarjo', 'T-', NULL),
(265, 'Provide material/spare part and tools to do OLTC inspection/maintenance work', 'PO-ELC-24-00140 - 13 Jan 2025', '2025-01-13', '2025-04-30', 'Selesai', 27, 1, 'PT. Cirebon Energi Prasarana', 'JAWA BARAT - KABUPATEN CIREBON', '2025-06-03', '2025-06-03', '0', '2142062000.00', NULL, 'Pondok Indah Office Tower 3 Lantai 25, Jl. Sultan Iskandar Muda Kav. V-TA Pondok Pinang Kebayoran Lama,', 'T-', NULL),
(266, 'Test Oli Trafo DGA 8 Sample', '010/MEN-PO/I/2025 - 20 Januari 2025', '2025-01-20', '2025-02-04', 'Selesai', 20, 11, 'PT. Multi Energytama', 'JAWA TIMUR - KOTA SURABAYA', '2025-06-03', '2025-06-03', '0', '12000000.00', NULL, 'Jalan Ketintang Selatan I/2 Kav 101 Karah RT 001 RW 009 Surabaya Jawa Timur', 'T-', NULL),
(267, 'Test Oli Trafo DGA 1 Sample', '007/PD-I/MSE-TB/I/2025', '2024-01-22', '2025-01-23', 'Selesai', 20, 11, 'CV. Teknologi Berjaya', 'JAWA TIMUR - KOTA SURABAYA', '2025-06-03', '2025-06-03', '0', '1400000.00', NULL, 'Griya Pesona Asri Blok J No. 34 Medokan Ayu, Rungkut, Surabaya', 'T-', NULL),
(268, 'Distribution Transformer', '25-0157/GUT-PO/02-13 Feb 2025', '2025-02-14', '2025-03-03', 'Selesai', 21, 1, 'PT. Graha Usaha Teknik', 'KALIMANTAN SELATAN - KABUPATEN TABALONG', '2025-06-03', '2025-06-03', '0', '10000000.00', NULL, 'Jl. Asem Baris Raya No.100A Kebon Baru', 'T-', NULL),
(269, 'Jasa Purifikasi Trafo 800 kVA dan pengisian Oil Volume 50.000/liter', 'PO. GOLDEN-2502-0008', '2025-02-19', '2025-02-21', 'Selesai', 22, 1, 'PT. Golden Cendana Jaya', 'JAWA TIMUR - KOTA SURABAYA', '2025-06-03', '2025-06-03', '0', '5650000.00', NULL, 'Jalan Rungkut Industri IV No. 4, Surabaya, Jawa Timur', 'T-', NULL),
(270, 'Test Oli Trafo DGA 3 Sample', '011/PD-I/MSE-KST/II/2025', '2025-02-19', '2025-02-24', 'Selesai', 20, 11, 'PT. Karya Sentosa Teknik', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-06-03', '2025-06-03', '0', '4500000.00', NULL, 'Taman Menanggal Indah 7, Dukuh Menanggal, Gayungan, Kota Surabaya 60234', 'T-', NULL),
(271, 'PT. Hamparan Rejeki Utama', '012/PD-I/MSE-HRU/II/2025', '2025-02-21', '2025-02-24', 'Selesai', 20, 11, 'Test Oli Trafo PCB 1 Sample', 'JAWA TIMUR - KABUPATEN MOJOKERTO', '2025-06-03', '2025-06-03', '0', '2100000.00', NULL, 'Mayjend Suprapto No. 87 RT RW, Kel. Tumapel Kec. Dlanggu Kab. Mojokerto Jawa Timur', 'T-', NULL),
(272, 'Power Transformer', '25-0157/GUT-PO/02-13 Feb 2025', '2025-02-21', '2025-03-03', 'Selesai', 21, 1, 'PT. Graha Usaha Teknik', 'KALIMANTAN SELATAN - KABUPATEN TABALONG', '2025-06-03', '2025-06-03', '0', '160000000.00', NULL, 'Jl. Asem Baris Raya No.100A Kebon Baru', 'T-', NULL),
(273, 'Test Oli Trafo DGA 8 Sample', '013/PD-I/MSE-TB/II/2025', '2025-02-25', '2025-02-27', 'Selesai', 20, 11, 'CV. Teknologi Berjaya', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-06-03', '2025-06-03', '0', '11200000.00', NULL, 'Griya Pesona Asri Blok J No. 34 Medokan Ayu, Rungkut, Surabaya', 'T-', NULL),
(274, 'Test Oli Trafo BDV 2 Sample', '285/SPK/IV/2024', '2025-02-28', '2025-02-28', 'Selesai', 24, 11, 'The Via & The Vue Apartments', 'JAWA TIMUR - KOTA SURABAYA', '2025-06-03', '2025-06-03', '0', '400000.00', NULL, 'Jl. Mayjen Sungkono Kav. 89, Surabaya 60224', 'T-', NULL),
(275, 'Test Oli Trafo DGA 3 Sample', 'PSC-SPK-ER2502-00004', '2025-03-03', '2025-03-13', 'Selesai', 20, 11, 'PT. Pancaran Suara Citra', 'JAWA TIMUR - KOTA SURABAYA', '2025-06-03', '2025-06-03', '0', '4800000.00', NULL, 'Jl. Mayjen Sungkono No. 87, Surabaya', 'T-', NULL),
(276, 'Test Oli Trafo BDV 14 Sample', 'PSC-SPK-ER2502-00005', '2025-03-04', '2025-03-05', 'Selesai', 20, 11, 'PT. Pancaran Suara Citra', 'JAWA TIMUR - KOTA SURABAYA', '2025-06-03', '2025-06-03', '0', '1260000.00', NULL, 'Jl. Mayjen Sungkono No. 87, Surabaya', 'T-', NULL),
(277, 'Test Oli Trafo DGA 1 Sample', '021/PD-I/MSE-TB/III/2025', '2025-03-04', '2025-03-17', 'Selesai', 20, 11, 'CV. Teknologi Berjaya', 'BALI - KABUPATEN BADUNG', '2025-06-03', '2025-06-03', '0', '1400000.00', NULL, 'Griya Pesona Asri Blok J No. 34 Medokan Ayu, Rungkut, Surabaya', 'T-', NULL),
(278, 'Sewa Mesin Purifier dan tangki 8000 liter', '52/SPK/HKP/24-453/III/2025', '2025-03-05', '2025-03-12', 'Selesai', 23, 6, 'PT. Hasta Karya Perdana', 'JAWA TIMUR - KABUPATEN SIDOARJO', '2025-06-03', '2025-06-03', '0', '30000000.00', NULL, 'Jl. Gayung Kebonsari Manunggal 18-20 Surabaya', 'T-', NULL),
(279, 'Supporting Technician for Testing before & after completion', '52752785', '2025-05-20', '2025-05-21', 'Selesai', 8, 7, 'PT. Rockwell Automation', 'DKI JAKARTA - KOTA JAKARTA UTARA', '2025-06-03', '2025-06-03', '0', '35000000.00', NULL, 'Gedung Jakarta Mori Tower Lt. 16, Jl. Jend. Sudirman Kav. 40-41, DKI Jakarta', 'T-', NULL),
(280, 'Test DGA 1 Sample & BDV 2 Sample', '254200712', '2025-05-08', '2025-05-23', 'Selesai', 20, 11, 'PT. Emdeki Utama', 'JAWA TIMUR - KOTA SURABAYA', '2025-06-03', '2025-06-03', '0', '2500000.00', NULL, 'JL.Krikilan Utama Driyorejo, Gresik', 'T-', NULL),
(281, 'Test DGA,BDV,dan Water Content 1 Sample', '0', '2025-04-21', '2025-04-28', 'Selesai', 20, 11, 'PT. Multi Daya Mitra', 'JAWA TIMUR - KOTA SURABAYA', '2025-06-03', '2025-06-03', '0', '3000000.00', NULL, 'Ruko Klampis Megah Blok D12 (Belakang Giant, Surabaya)', 'T-', NULL),
(282, 'Test DGA 2 Sample', 'GSJ-XXV-PO-2075', '2025-04-21', '2025-04-22', 'Selesai', 20, 11, 'PT. Gansar Jaya', 'JAWA TIMUR - KABUPATEN GRESIK', '2025-06-03', '2025-06-03', '0', '3000000.00', NULL, 'Sekarputih No. 470 Mojokerto 61316', 'T-', NULL),
(283, 'Test DGA 2 Sample', '0', '2025-04-21', '2025-04-22', 'Selesai', 20, 11, 'CV. Teknologi Berjaya', 'JAWA TIMUR - KOTA SURABAYA', '2025-06-03', '2025-06-03', '0', '2800000.00', NULL, 'Griya Pesona Asri Blok J no 34', 'T-', NULL),
(284, 'Test DGA 2 Sample', '0', '2025-04-16', '2025-04-17', 'Selesai', 20, 11, 'PT. Karya Sentosa', 'JAWA TIMUR - KOTA SURABAYA', '2025-06-03', '2025-06-03', '0', '3000000.00', NULL, 'Taman Menanggal Indah 7, Dukuh Menanggal, Gayungan, Kota Surabaya 60234', 'T-', NULL),
(286, 'pembangunan2', '0', '2023-08-08', '2024-08-08', 'Proses', 7, 1, 'PT. PLN Proyek Induk Jaringan Jawa Timur dan Bali', 'RIAU - KABUPATEN INDRAGIRI HILIR', '2025-06-03', '2025-06-03', '0', '230000.00', NULL, 'Jl. Ketintang Baru No. 1 Surabaya', '-', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sertifkat`
--

CREATE TABLE `sertifkat` (
  `id_sertifikat` int(11) NOT NULL,
  `nama_sertifikat` varchar(200) NOT NULL,
  `dokumen_sertifikat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sertifkat`
--

INSERT INTO `sertifkat` (`id_sertifikat`, `nama_sertifikat`, `dokumen_sertifikat`) VALUES
(2, 'ISO 45001 : 2015 DCS-HSM231519', '1748938430_ISO 45001 2015 PT. MSE exp 1 Nov 2026.pdf'),
(3, 'ISO 14001 : 2015 DCS-EMS231114', '1748938461_ISO 14001 2015 PT. MSE exp. 1 Nov 2026.pdf'),
(4, 'ISO 9001 : 2015 DCS-QMS231029', '1748938476_ISO 9001 2015 PT. MSE exp. 1 Nov 2026.pdf'),
(5, 'Sertifikat Badan Usaha - 41019', '1748938488_SBU-(41019).pdf'),
(6, 'Sertifikat Badan Usaha - 41013', '1748938502_SBU-(41013).pdf'),
(7, 'Sertifikat Badan Usaha - 41011', '1748938516_SBU-(41011).pdf'),
(8, 'Nomor Induk Berusaha', '1748938544_NIB.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('WvRuDWPvQOHjMZfJz9uj9EfZ0fXLkmJYsqpJrL1U', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidk1WRTJYbUlYV21jSmw4aEFhbXdJQTl4S0tuZnJ1VER4SWc3eHMzayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9qZWN0L3NlbXVhIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo4OiJhZG1pbl9pZCI7TjtzOjEwOiJhZG1pbl9uYW1hIjtzOjg6IkFkbWluTXNlIjtzOjE4OiJpc19hZG1pbl9sb2dnZWRfaW4iO2I6MTt9', 1749388680);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lucie Hackett', 'lydia08@example.com', NULL, '$2y$12$YN3C8.1e2Zh.ovrvoBcBBunLhQ8rZHQxcUDttkQoRMpyMq12c3X3u', NULL, '2025-03-11 01:22:18', '2025-03-11 01:22:18'),
(2, 'Dr. Clyde Leffler I', 'trudie.braun@example.net', NULL, '$2y$12$6o2sNDDgG07Ixojf5c8H7.qmhyANv1rZz5qoJFJNUFXm7eQnnXvr.', NULL, '2025-03-11 01:22:18', '2025-03-11 01:22:18'),
(3, 'Prof. Geovanni Gleason', 'thalia67@example.net', NULL, '$2y$12$pwI0JFFPM8urF23HvLem5.yNSCJAiuMhfIFchepZpIqUQ0OClHqwO', NULL, '2025-03-11 01:22:18', '2025-03-11 01:22:18'),
(4, 'Miguel Durgan', 'fwill@example.net', NULL, '$2y$12$iUBPrPopfj67eGQuRoHuoe76ef28Ybh8zCjlU48um24/zdpUlIbkm', NULL, '2025-03-11 01:22:18', '2025-03-11 01:22:18'),
(5, 'Clifton Heller', 'hills.susanna@example.com', NULL, '$2y$12$041IOFFdzAkEew61sG13gO6J6kuoVXt./t/wKlcMZdpLjp0SVDPV6', NULL, '2025-03-11 01:22:18', '2025-03-11 01:22:18'),
(6, 'Buddy Goldner', 'hammes.derek@example.net', NULL, '$2y$12$Q9wY.u1gj.WWquoMCGv.KeBbqRX4WubWq/fbuBRZRvviHIIz5jE9q', NULL, '2025-03-11 01:22:18', '2025-03-11 01:22:18'),
(7, 'Chase Spencer', 'felton97@example.org', NULL, '$2y$12$sKpEb/6FVCQHVypxD4V0futlPIdGznYujIh8c0HSP1/TTznrlVB/.', NULL, '2025-03-11 01:22:18', '2025-03-11 01:22:18'),
(8, 'Prof. Jerald Weissnat', 'tmonahan@example.net', NULL, '$2y$12$.Y42vmdiIZ2LF76BzzGXC.EYDxJwVNMtR6hYciooIOBWMihgXyJ4e', NULL, '2025-03-11 01:22:18', '2025-03-11 01:22:18'),
(9, 'Dr. Otis Doyle', 'mittie76@example.org', NULL, '$2y$12$Wp3jl2k2x8UGbcWzYnaab.8xVzIhNOgVAWGVdAM2MWCuRs3KGNHyC', NULL, '2025-03-11 01:22:18', '2025-03-11 01:22:18'),
(10, 'Callie Skiles', 'hermina23@example.com', NULL, '$2y$12$87vpgK911MI/QxIydf63eODipqxqpHp7559HewbSx.4qT0vsUrIYa', NULL, '2025-03-11 01:22:18', '2025-03-11 01:22:18'),
(11, 'Admin User', 'admin@example.com', NULL, '$2y$12$NpxU.zC6jNMFmlwd/rhX0esRNWRQiSXarPwfq.AiU3B4ONUQrTDwy', NULL, '2025-03-11 01:22:19', '2025-03-11 01:22:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang_proyek`
--
ALTER TABLE `bidang_proyek`
  ADD PRIMARY KEY (`id_bproyek`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id_equipment`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id_klien`);

--
-- Indexes for table `level_pekerja`
--
ALTER TABLE `level_pekerja`
  ADD PRIMARY KEY (`id_levelkerja`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`admin`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pekerja`
--
ALTER TABLE `pekerja`
  ADD PRIMARY KEY (`id_pekerja`),
  ADD KEY `pekerja_ibfk1` (`level_pekerja`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id_proyek`),
  ADD KEY `proyek_ibfk_1` (`id_pekerja`),
  ADD KEY `proyek_ibfk_2` (`id_bproyek`),
  ADD KEY `proyek_ibfk_3` (`id_klien`);

--
-- Indexes for table `sertifkat`
--
ALTER TABLE `sertifkat`
  ADD PRIMARY KEY (`id_sertifikat`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang_proyek`
--
ALTER TABLE `bidang_proyek`
  MODIFY `id_bproyek` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id_equipment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klien`
--
ALTER TABLE `klien`
  MODIFY `id_klien` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `level_pekerja`
--
ALTER TABLE `level_pekerja`
  MODIFY `id_levelkerja` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pekerja`
--
ALTER TABLE `pekerja`
  MODIFY `id_pekerja` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id_proyek` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT for table `sertifkat`
--
ALTER TABLE `sertifkat`
  MODIFY `id_sertifikat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pekerja`
--
ALTER TABLE `pekerja`
  ADD CONSTRAINT `pekerja_ibfk1` FOREIGN KEY (`level_pekerja`) REFERENCES `level_pekerja` (`id_levelkerja`);

--
-- Constraints for table `proyek`
--
ALTER TABLE `proyek`
  ADD CONSTRAINT `proyek_ibfk_1` FOREIGN KEY (`id_pekerja`) REFERENCES `pekerja` (`id_pekerja`),
  ADD CONSTRAINT `proyek_ibfk_2` FOREIGN KEY (`id_bproyek`) REFERENCES `bidang_proyek` (`id_bproyek`),
  ADD CONSTRAINT `proyek_ibfk_3` FOREIGN KEY (`id_klien`) REFERENCES `klien` (`id_klien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
