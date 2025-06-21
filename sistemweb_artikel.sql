-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2025 at 02:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemweb_artikel`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `tanggal` datetime DEFAULT current_timestamp(),
  `judul` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `tanggal`, `judul`, `isi`, `gambar`) VALUES
(1, '2025-06-20 20:53:00', 'Perkembangan AI di Tahun 2023', 'Artificial Intelligence (AI) telah menjadi salah satu teknologi yang paling cepat berkembang dalam beberapa tahun terakhir. Pada tahun 2023, kita menyaksikan kemajuan signifikan dalam berbagai aspek kecerdasan buatan, mulai dari model bahasa besar hingga aplikasi praktis dalam kehidupan sehari-hari.\r\n\r\nSalah satu terobosan terbesar tahun ini adalah pengembangan model bahasa generatif yang semakin canggih. OpenAI meluncurkan GPT-4 yang memiliki kemampuan pemahaman konteks yang jauh lebih baik dibandingkan pendahulunya. Model ini tidak hanya mampu menghasilkan teks yang koheren, tetapi juga dapat memahami nuansa bahasa yang kompleks, termasuk sarkasme dan metafora.\r\n\r\nDi bidang kesehatan, AI mulai digunakan untuk diagnosis penyakit dengan akurasi yang menyaingi dokter ahli. Sistem seperti IBM Watson Health mampu menganalisis jutaan jurnal medis dalam hitungan detik untuk memberikan rekomendasi pengobatan yang personal. Di beberapa rumah sakit terkemuka, AI bahkan digunakan untuk memprediksi potensi komplikasi pasien sebelum gejala muncul.\r\n\r\nNamun, perkembangan AI juga membawa tantangan baru. Isu privasi data menjadi sorotan utama, terutama setelah beberapa kasus kebocoran data pelatihan model AI. Selain itu, dampak AI terhadap lapangan kerja mulai terasa, dengan banyak pekerjaan rutin yang mulai digantikan oleh otomatisasi berbasis AI.\r\n\r\nPara ahli memprediksi bahwa di tahun-tahun mendatang, AI akan semakin terintegrasi dengan berbagai aspek kehidupan. Kunci untuk memanfaatkannya secara optimal adalah dengan membangun regulasi yang tepat dan memastikan pengembangan AI yang etis dan bertanggung jawab.', 'ai-2023.jpg'),
(2, '2025-06-20 20:53:00', 'Tips Menjaga Kesehatan Mental', 'Kesehatan mental sama pentingnya dengan kesehatan fisik, namun seringkali diabaikan dalam kehidupan modern yang serba cepat. Berikut adalah panduan komprehensif untuk menjaga kesehatan mental Anda:\r\n\r\nRutinitas Sehat\r\nMembangun rutinitas yang teratur adalah dasar dari kesehatan mental yang baik. Usahakan untuk tidur 7-8 jam setiap malam pada jam yang konsisten. Bangun pagi dan berjemur di bawah sinar matahari pagi selama 15-30 menit dapat membantu mengatur ritme sirkadian dan meningkatkan produksi serotonin.\r\n\r\nAktivitas Fisik\r\nOlahraga teratur tidak hanya baik untuk tubuh tetapi juga untuk pikiran. Aktivitas aerobik seperti berjalan cepat, berlari, atau berenang selama 30 menit dapat melepaskan endorfin yang berfungsi sebagai antidepresan alami. Yoga dan tai chi juga sangat bermanfaat untuk mengurangi kecemasan.\r\n\r\nPola Makan Seimbang\r\nNutrisi memainkan peran penting dalam kesehatan mental. Konsumsi makanan kaya omega-3 (seperti ikan salmon dan kacang walnut), sayuran hijau, dan buah-buahan dapat mendukung fungsi otak yang optimal. Hindari konsumsi gula berlebihan dan makanan olahan yang dapat menyebabkan fluktuasi mood.\r\n\r\nManajemen Stres\r\nTeknik relaksasi seperti pernapasan dalam, meditasi mindfulness, atau progressive muscle relaxation dapat membantu mengelola stres harian. Alokasikan waktu 10-15 menit setiap hari untuk praktik ini.\r\n\r\nHubungan Sosial\r\nManusia adalah makhluk sosial. Menjaga hubungan yang sehat dengan keluarga dan teman-teman memberikan dukungan emosional yang penting. Jika merasa terisolasi, pertimbangkan untuk bergabung dengan komunitas atau kelompok dengan minat yang sama.\r\n\r\nBatasan Digital\r\nTerlalu banyak waktu di media sosial dapat berdampak negatif pada kesehatan mental. Tetapkan batasan waktu penggunaan gadget dan luangkan waktu untuk aktivitas offline yang menyenangkan.\r\n\r\nJika gejala seperti kesedihan berkepanjangan, kecemasan berlebihan, atau perubahan pola tidur/nafsu makan yang signifikan terjadi selama lebih dari dua minggu, segera konsultasikan dengan profesional kesehatan mental.', 'mental-health.jpg'),
(3, '2025-06-20 20:53:00', 'Strategi Bisnis di Era Digital', 'Transformasi digital telah mengubah lanskap bisnis secara fundamental. Untuk tetap kompetitif, perusahaan perlu mengadopsi strategi yang sesuai dengan era digital ini. Berikut adalah analisis mendalam tentang strategi bisnis digital yang efektif:\r\n\r\nPersonalisasi Pengalaman Pelanggan Konsumen modern mengharapkan pengalaman yang personal. Dengan memanfaatkan data analytics dan AI, bisnis dapat:\r\nMenganalisis perilaku konsumen secara real-time\r\nMenawarkan rekomendasi produk yang sangat relevan\r\nMenyediakan konten yang disesuaikan dengan preferensi individu Contoh sukses: Netflix menggunakan algoritma rekomendasi yang meningkatkan engagement pengguna sebesar 35%.\r\nOmnichannel Marketing Pelanggan saat ini berinteraksi dengan merek melalui berbagai saluran. Strategi omnichannel yang terintegrasi mencakup:\r\nKonsistensi pengalaman di website, mobile app, dan media sosial\r\nIntegrasi data antar saluran untuk pemahaman pelanggan 360 derajat\r\nKemampuan transaksi yang mulus di semua platform\r\nOtomatisasi Proses Bisnis Otomatisasi dapat meningkatkan efisiensi secara signifikan:\r\nChatbot untuk layanan pelanggan 24/7\r\nSistem ERP terintegrasi untuk manajemen operasional\r\nTools otomatisasi pemasaran untuk nurturing lead\r\nKeamanan Siber Dengan meningkatnya ancaman digital, investasi dalam keamanan siber menjadi krusial:\r\nImplementasi enkripsi end-to-end\r\nPelatihan karyawan tentang phishing dan ancaman digital\r\nSistem deteksi intrusi yang canggih\r\nAgile Methodology Kecepatan adaptasi adalah kunci di era digital:\r\nPembentukan tim lintas fungsi yang gesit\r\nSiklus pengembangan produk yang iteratif\r\nKultur perusahaan yang mendukung inovasi dan eksperimen\r\nStudi kasus: Perusahaan retail yang mengadopsi strategi digital lengkap melaporkan peningkatan pendapatan hingga 40% dalam 2 tahun, dengan peningkatan loyalitas pelanggan yang signifikan.', 'digital-business.jpg'),
(4, '2025-06-20 20:53:00', 'AI dalam Kehidupan Sehari-hari', 'Kecerdasan buatan (AI) kini telah menjadi bagian penting dalam kehidupan sehari-hari, memudahkan berbagai aktivitas manusia tanpa disadari. Contohnya, asisten virtual seperti Google Assistant atau Siri membantu mengatur jadwal, mencari informasi, dan membaca email secara otomatis. Selain itu, AI juga digunakan dalam aplikasi perbankan digital, chatbot layanan pelanggan, hingga marketplace yang memberikan rekomendasi produk sesuai kebutuhan pengguna.\r\n\r\nSelain mempermudah aktivitas harian, AI juga berperan besar dalam menganalisis data secara akurat dan cepat. Dalam dunia bisnis, AI membantu perusahaan memahami tren pasar, merumuskan strategi, serta merespons perubahan dengan lebih efektif. Bahkan di bidang kesehatan, AI mampu menganalisis data medis dan membantu diagnosa penyakit, sehingga pengambilan keputusan menjadi lebih tepat dan efisien.', 'ai-harian.jpg'),
(5, '2025-06-20 20:53:00', 'Tren Desain Web 2025', 'Tahun 2025 membawa tren desain web yang semakin modern dan unik, dengan fokus pada pengalaman pengguna dan kemudahan akses. Salah satu tren utama adalah penggunaan teknologi no-code yang memungkinkan siapa saja, bahkan tanpa kemampuan pemrograman, untuk membuat website profesional dan responsif. Platform seperti Webflow, Wix, dan Bubble semakin populer karena menyediakan alat intuitif yang memudahkan proses desain dan kolaborasi.\r\n\r\nSelain itu, optimasi kinerja menjadi prioritas, terutama dalam hal kecepatan loading dan aksesibilitas. Desain web kini harus ramah seluler, mudah diakses oleh semua kalangan, dan memenuhi standar Web Content Accessibility Guidelines (WCAG). Penggunaan AI untuk personalisasi pengalaman pengguna dan integrasi fitur voice search juga diprediksi akan semakin berkembang, menjadikan website lebih interaktif dan inklusif di tahun 2025.', 'desain-web-2025.jpg'),
(6, '2025-06-20 20:53:00', 'Aplikasi Mobile Inovatif', 'Inovasi aplikasi mobile di tahun 2025 didorong oleh kemajuan teknologi seperti AI, machine learning, augmented reality (AR), virtual reality (VR), Internet of Things (IoT), dan jaringan 5G. Aplikasi mobile kini tidak hanya berfungsi sebagai alat komunikasi, tetapi juga sebagai pusat aktivitas manusia, mulai dari transaksi keuangan hingga layanan kesehatan berbasis data real-time. Super apps dan mobile commerce (m-commerce) menjadi tren utama yang menghadirkan solusi personalisasi tinggi bagi pengguna.\r\n\r\nPertumbuhan pasar aplikasi mobile sangat pesat, dengan proyeksi pendapatan global mencapai $613 miliar pada 2025. Untuk tetap bersaing, pengembang aplikasi harus mengadopsi teknologi terbaru, mengoptimalkan desain UX/UI, serta memperhatikan keamanan dan privasi data. Inovasi seperti AI-driven recommendation engine dan aplikasi berbasis IoT semakin memperkuat posisi aplikasi mobile sebagai ekosistem digital terintegrasi yang menghubungkan berbagai aspek kehidupan manusia.', 'aplikasi-mobile.jpg'),
(7, '2025-06-20 20:53:00', 'Menjaga Kesehatan Mental Remaja', 'Kesehatan mental remaja sangat penting untuk mendukung tumbuh kembang dan kesejahteraan mereka. Remaja dianjurkan untuk merawat diri dengan cukup istirahat, melakukan relaksasi seperti yoga atau meditasi, serta membangun pikiran positif. Aktivitas-aktivitas ini dapat membantu meningkatkan kepercayaan diri dan kemampuan memaafkan, sehingga remaja lebih siap menghadapi tantangan kehidupan.\r\n\r\nSelain itu, melakukan aktivitas yang disukai seperti bermain dengan hewan peliharaan, traveling, memasak, atau berkebun juga efektif untuk mengalihkan pikiran dari hal-hal negatif. Namun, remaja perlu diingatkan agar tidak melakukan self diagnosis tanpa bantuan profesional, karena informasi dari internet belum tentu akurat dan dapat menimbulkan risiko salah diagnosa. Jika mengalami masalah kesehatan mental, sebaiknya segera mencari bantuan dari tenaga kesehatan yang kompeten.', 'kesehatan-mental.jpg'),
(8, '2025-06-20 20:53:00', 'Makanan Sehat untuk Otak', 'Makanan sehat sangat berpengaruh terhadap fungsi otak dan kemampuan kognitif. Konsumsi makanan kaya omega-3 seperti ikan salmon, sarden, dan kacang kenari dapat membantu memperbaiki fungsi memori dan konsentrasi. Selain itu, buah-buahan seperti blueberry dan sayuran hijau seperti bayam mengandung antioksidan yang melindungi otak dari kerusakan sel.\r\n\r\nAsupan vitamin B, vitamin E, dan mineral seperti magnesium juga penting untuk mendukung kesehatan otak. Mengonsumsi telur, alpukat, biji-bijian, serta dark chocolate dalam jumlah wajar dapat meningkatkan suasana hati dan daya pikir. Pola makan seimbang yang kaya nutrisi akan membantu otak tetap sehat dan optimal sepanjang hari.', 'makanan-otak.jpg'),
(9, '2025-06-20 20:53:00', 'Cara Memulai Bisnis Online', 'Memulai bisnis online dapat dilakukan dengan langkah sederhana, dimulai dari menentukan produk atau layanan yang ingin dijual. Setelah itu, lakukan riset pasar untuk mengetahui kebutuhan dan preferensi calon pelanggan, serta analisis kompetitor untuk menemukan keunggulan bisnis Anda. Pilih platform online yang sesuai, seperti marketplace, media sosial, atau website pribadi untuk memasarkan produk.\r\n\r\nSetelah bisnis berjalan, fokus pada strategi pemasaran digital seperti optimasi SEO, penggunaan iklan berbayar, dan membangun brand awareness melalui konten yang menarik. Pelayanan pelanggan yang baik dan responsif juga menjadi kunci keberhasilan bisnis online. Terus evaluasi dan kembangkan bisnis berdasarkan feedback pelanggan dan tren pasar agar tetap relevan dan kompetitif.', 'bisnis-online.jpg'),
(10, '2025-06-20 20:53:00', 'Langkah Awal Mendirikan Startup', 'Langkah awal mendirikan startup dimulai dari menemukan ide bisnis yang solutif dan memiliki potensi pasar yang besar. Validasi ide tersebut dengan melakukan survei atau wawancara calon pengguna untuk memastikan kebutuhan nyata di pasar. Setelah itu, bentuk tim yang solid dengan keahlian yang saling melengkapi, mulai dari pengembangan produk hingga pemasaran.\r\n\r\nSelanjutnya, buat prototype atau minimum viable product (MVP) untuk diuji coba kepada pengguna awal. Kumpulkan feedback dan lakukan iterasi produk secara berkelanjutan. Jangan lupa untuk menyusun rencana bisnis yang matang, mencari pendanaan, serta membangun jaringan dengan mentor atau komunitas startup untuk mendukung pertumbuhan bisnis.', 'startup.jpg'),
(11, '2025-06-20 20:53:00', 'Pendidikan Anak Usia Dini', 'Pendidikan anak usia dini sangat penting sebagai fondasi perkembangan kognitif, sosial, dan emosional anak. Pada tahap ini, anak-anak belajar melalui bermain, berinteraksi dengan lingkungan, dan meniru perilaku orang dewasa. Guru dan orang tua berperan penting dalam menciptakan lingkungan belajar yang aman, menyenangkan, dan penuh stimulasi positif.\r\n\r\nSelain pengembangan akademik, pendidikan anak usia dini juga menekankan pembentukan karakter, nilai moral, dan keterampilan sosial. Anak diajarkan untuk berbagi, bekerja sama, dan menghargai perbedaan sejak dini. Investasi pada pendidikan anak usia dini akan memberikan dampak jangka panjang terhadap kualitas sumber daya manusia di masa depan.', 'pendidikan-anak.jpg'),
(12, '2025-06-20 20:53:00', 'Platform E-learning Gratis', 'Platform e-learning gratis kini semakin banyak tersedia dan menjadi solusi belajar yang fleksibel bagi siapa saja. Melalui platform seperti Coursera, Khan Academy, dan Ruangguru, pengguna dapat mengakses ribuan materi pelajaran dari berbagai bidang secara online tanpa biaya. Fitur interaktif seperti video pembelajaran, kuis, dan forum diskusi membantu memperdalam pemahaman materi.\r\n\r\nSelain itu, platform e-learning gratis mendukung pembelajaran mandiri dan pengembangan keterampilan baru sesuai kebutuhan zaman. Banyak platform yang menyediakan sertifikat setelah menyelesaikan kursus, sehingga dapat meningkatkan daya saing di dunia kerja. Dengan kemudahan akses dan beragam pilihan materi, e-learning gratis menjadi alternatif efektif untuk pendidikan di era digital.', 'e-learning.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `keterangan`) VALUES
(1, 'Teknologi', 'Artikel terkait perkembangan teknologi terbaru'),
(2, 'Kesehatan', 'Tips dan informasi seputar kesehatan'),
(3, 'Bisnis', 'Berita dan analisis bisnis terkini'),
(4, 'Pendidikan', 'Materi dan informasi pendidikan'),
(5, 'Teknologi AI', 'Pembahasan tentang Artificial Intelligence dan penerapannya'),
(6, 'Teknologi Web', 'Informasi tentang teknologi pengembangan website'),
(7, 'Teknologi Mobile', 'Perkembangan aplikasi dan OS mobile'),
(8, 'Kesehatan Mental', 'Topik seputar kesehatan jiwa dan psikologi'),
(9, 'Kesehatan Gizi', 'Panduan pola makan dan nutrisi sehat'),
(10, 'Bisnis Online', 'Strategi dan tren bisnis berbasis internet'),
(11, 'Startup', 'Informasi dan tips seputar mendirikan startup'),
(12, 'Pendidikan Anak', 'Metode dan pendekatan pendidikan usia dini'),
(13, 'E-learning', 'Sumber belajar daring dan teknologi pendidikan'),
(14, 'Pengembangan Diri', 'Materi soft skill dan pengembangan karakter dalam pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `kontributor`
--

CREATE TABLE `kontributor` (
  `id_kontributor` int(11) NOT NULL,
  `id_penulis` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_artikel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontributor`
--

INSERT INTO `kontributor` (`id_kontributor`, `id_penulis`, `id_kategori`, `id_artikel`) VALUES
(11, 1, 1, 1),
(12, 2, 2, 2),
(13, 3, 3, 3),
(14, 4, 4, 4),
(15, 5, 5, 5),
(16, 6, 6, 6),
(17, 7, 7, 7),
(18, 8, 8, 8),
(19, 9, 9, 9),
(20, 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `nama_penulis`, `email`, `password`) VALUES
(1, 'Nisa', 'nisa@example.com', 'satu'),
(2, 'Cika', 'cika@example.com', 'satu'),
(3, 'Nina', 'nina@example.com', 'satu'),
(4, 'Rafi', 'rafi@example.com', 'pass123'),
(5, 'Zahra', 'zahra@example.com', 'pass123'),
(6, 'Bayu', 'bayu@example.com', 'pass123'),
(7, 'Dina', 'dina@example.com', 'pass123'),
(8, 'Iqbal', 'iqbal@example.com', 'pass123'),
(9, 'Siti', 'siti@example.com', 'pass123'),
(10, 'Fajar', 'fajar@example.com', 'pass123'),
(11, 'Mega', 'mega@example.com', 'pass123'),
(12, 'Andre', 'andre@example.com', 'pass123'),
(13, 'Lina', 'lina@example.com', 'pass123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kontributor`
--
ALTER TABLE `kontributor`
  ADD PRIMARY KEY (`id_kontributor`),
  ADD KEY `id_penulis` (`id_penulis`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kontributor`
--
ALTER TABLE `kontributor`
  MODIFY `id_kontributor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kontributor`
--
ALTER TABLE `kontributor`
  ADD CONSTRAINT `kontributor_ibfk_1` FOREIGN KEY (`id_penulis`) REFERENCES `penulis` (`id_penulis`),
  ADD CONSTRAINT `kontributor_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `kontributor_ibfk_3` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id_artikel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
