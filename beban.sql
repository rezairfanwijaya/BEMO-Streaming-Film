-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2022 pada 03.41
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beban`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `films`
--

CREATE TABLE `films` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `durasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `films`
--

INSERT INTO `films` (`id`, `judul`, `durasi`, `sinopsis`, `cover`, `video`, `created_at`, `updated_at`) VALUES
(21, 'Ant Man', '1j 4m', '<p>Di tahun 1987, Janet van Dyne &ldquo;Wasp&rdquo; menyusut pada molekul misil nuklir Soviet melumpuhkannya namun memasuki alam kuantum mikroskopis. Hank Pym &ldquo;Ant-Man mengangkat putri mereka Hope percaya bahwa Janeh sudah meninggal. Bertahun tahun selanjutnya Scott Langtakes sebagai Ant Man menemukan cara masuk dan kembali dari dunia kuantum.Hope dan Pym bekerja mengulangi prestasi ini percaya mereka bisa menemukan Janet hidup. Hope dan Lang memulai hubungan dan memulai pelatihan bertarung bersama sebagai Wasp dan Ant-Man hingga Lang diam-diam membantu Captain America selama pertempuran Avengers yang melanggar perjanjian Sokovia.&nbsp;</p>\r\n<p>Lang ditempatkan bawah tahanan rumah sementara Hype dan Pym bersembunyi. Dua tahun selanjutnya Hope dan Pym secara singkat berhasil membuka terowongan alam kuantum. Lang mendapat pesan dari Janet yang dia terjerat. Walaupun hanya mempunyai hari tersisa dari tahanan, Lang memutuskan memanggil Pym.Hope menculik Lang meninggalkan umpan untuk tidak menimbulkan kecurigaan Jimmy Woo agen FBI. Melihat pesan Janet masih hidup, Hope dan Pym bekerja menciptakan terowongan sehingga Hope dapat membawa kendaraan ke alam kuantum. Hope mengatur membeli bagian yang diperlukan demi terowongan di pasar gelap kepada Sonny Burch.</p>\r\n<p>Burch telah menyadari potensi keuntungan yang diperoleh dari penelitian Hope dan Pym yang kemudian melipatgandakannya. Hope melawan Burch dan pasukannya hingga dia diserang sosok bertopeng. Lang berusaha membantu melawannya namun dia kabur dengan lab portabel Pym. Pym enggan mengunjungi mantan rekannya Bill Foster.Sosok bertopeng &ldquo;ghost&rdquo; menahan Lang, Pym dan Hope ketika mereka tiba dan menjelaskan dirinya Ava Starr ayah Elihas mantan kekasih Pym secara tidak sengaja bunuh diri. Foster menjelaskan dia telah membantu Ava yang mereka berencana menyembuhkan menggunakan energi kuantum Janet.</p>\r\n<p>Percaya hal ini akan membunuh Janet, Pym menolak membantu mereka dan mereka berhasil melarikan diri. Membuka versi stabil terowongan, Hope dan Pym menghubungi Janet yang memberikan lokasi untuk menemukannya namun memperingatkan bahwa mereka hanya mempunyai dua jam sebelum alam tidak stabil memisahkan mereka selama berabad-abad.Burch memahami lokasi mitra bisnis Lang yaitu Luis Dave dan Kurt lalu memberitahu kontak di FBI. Luis memperingatkan Lang bergegas pulang sebelum Woo melihat dia melanggar tahanan rumah. Ini meninggalkan Hope dan Pym ditangkap agar lab mereka diambil oleh Burch, Lang segera membantu Pym dan Hope melarikan diri lalu mereka mencuri lab kembali dari Burch.</p>\r\n<p>Di tahun 1987, Janet van Dyne &ldquo;Wasp&rdquo; menyusut pada molekul misil nuklir Soviet melumpuhkannya namun memasuki alam kuantum mikroskopis. Hank Pym &ldquo;Ant-Man mengangkat putri mereka Hope percaya bahwa Janeh sudah meninggal. Bertahun tahun selanjutnya Scott Langtakes sebagai Ant Man menemukan cara masuk dan kembali dari dunia kuantum.</p>\r\n<p>Hope dan Pym bekerja mengulangi prestasi ini percaya mereka bisa menemukan Janet hidup. Hope dan Lang memulai hubungan dan memulai pelatihan bertarung bersama sebagai Wasp dan Ant-Man hingga Lang diam-diam membantu Captain America selama pertempuran Avengers yang melanggar perjanjian Sokovia.&nbsp;Lang ditempatkan bawah tahanan rumah sementara Hype dan Pym bersembunyi. Dua tahun selanjutnya Hope dan Pym secara singkat berhasil membuka terowongan alam kuantum. Lang mendapat pesan dari Janet yang dia terjerat. Walaupun hanya mempunyai hari tersisa dari tahanan, Lang memutuskan memanggil Pym.Hope menculik Lang meninggalkan umpan untuk tidak menimbulkan kecurigaan Jimmy Woo agen FBI. Melihat pesan Janet masih hidup, Hope dan Pym bekerja menciptakan terowongan sehingga Hope dapat membawa kendaraan ke alam kuantum. Hope mengatur membeli bagian yang diperlukan demi terowongan di pasar gelap kepada Sonny Burch.</p>\r\n<p>Burch telah menyadari potensi keuntungan yang diperoleh dari penelitian Hope dan Pym yang kemudian melipatgandakannya. Hope melawan Burch dan pasukannya hingga dia diserang sosok bertopeng. Lang berusaha membantu melawannya namun dia kabur dengan lab portabel Pym. Pym enggan mengunjungi mantan rekannya Bill Foster.Sosok bertopeng &ldquo;ghost&rdquo; menahan Lang, Pym dan Hope ketika mereka tiba dan menjelaskan dirinya Ava Starr ayah Elihas mantan kekasih Pym secara tidak sengaja bunuh diri. Foster menjelaskan dia telah membantu Ava yang mereka berencana menyembuhkan menggunakan energi kuantum Janet.Percaya hal ini akan membunuh Janet, Pym menolak membantu mereka dan mereka berhasil melarikan diri. Membuka versi stabil terowongan, Hope dan Pym menghubungi Janet yang memberikan lokasi untuk menemukannya namun memperingatkan bahwa mereka hanya mempunyai dua jam sebelum alam tidak stabil memisahkan mereka selama berabad-abad.</p>\r\n<p>Burch memahami lokasi mitra bisnis Lang yaitu Luis Dave dan Kurt lalu memberitahu kontak di FBI. Luis memperingatkan Lang bergegas pulang sebelum Woo melihat dia melanggar tahanan rumah. Ini meninggalkan Hope dan Pym ditangkap agar lab mereka diambil oleh Burch, Lang segera membantu Pym dan Hope melarikan diri lalu mereka mencuri lab kembali dari Burch.Hope dan Lang mengalihkan perhatian Ava sementara Pym masuk ke dunia kuantum mengambil Janet namun akhirnya melawan Burch dan pasukannya memungkinkan Ava memulai proses mengambil energi Janet. Dave, Luis dan Kurt membantu menangkap Burch sehingga Lang dan Hope menghentikan Ava.Janet dan Pym selamat dari alam kuantum dan Janet secara sukarela memberikan setengah energi kepada Ava guna menyembuhkannya secara sementara. lang kembali ke rumah pada waktunya untuk Woo yang mencurigakannya, membebaskannya di akhir tahanan rumah.</p>\r\n<p>Ava dan Foster Namun Pym, Hope dan Lang serta Janet berencana memanen energi kuantum guna membantu Ava. Dalam adegan terakhir Lang melakukannya di alam kuantum saat Hope, Pym dan Janet semuanya hancur.Hope dan Lang mengalihkan perhatian Ava sementara Pym masuk ke dunia kuantum mengambil Janet namun akhirnya melawan Burch dan pasukannya memungkinkan Ava memulai proses mengambil energi Janet. Dave, Luis dan Kurt membantu menangkap Burch sehingga Lang dan Hope menghentikan Ava.Janet dan Pym selamat dari alam kuantum dan Janet secara sukarela memberikan setengah energi kepada Ava guna menyembuhkannya secara sementara. lang kembali ke rumah pada waktunya untuk Woo yang mencurigakannya, membebaskannya di akhir tahanan rumah.Ava dan Foster Namun Pym, Hope dan Lang serta Janet berencana memanen energi kuantum guna membantu Ava. Dalam adegan terakhir Lang melakukannya di alam kuantum saat Hope, Pym dan Janet semuanya hancur.</p>', 'assets/cover/cover-1643810211.png', 'assets/film/film-1643887301.mp4', '2022-02-02 06:56:51', '2022-02-03 04:21:42'),
(22, 'Black Widow', '3j 1m', '<p>Natasha dan Yelena ( Florence Pough) dibawa pergi oleh orang tua angkat mereka yang bernama Alexei Shostakov dan Melina Vostokoff pada tahun 1995. Kedua orangtua pengganti Natasha dan Yelena bukan orang sembarangan, Alexei adalah seorang Red Guardian dan Melina merupakan agen rahasia, mantan Black Widow. Keduanya merupakan agen rahasia yang menjalankan sebuah misi dengan menyamar menjadi sepasang suami istri.Mereka kabur dari Ohio ke Kuba setelah menyelesaikan misi. Natasha dan Yelena kemudian ditempatkan di Red Room, tempat pelatihan dan pembunuhan rahasia Soviet sebagai agen rahasia program rahasia KGB.Merasa ada yang tak beres, kemudian Natasha melarikan diri setelah menyadari bahwa Red Room adalah sebuah bisnis yang dipimpin Dreykov bertujuan memanipulasi perempuan seusianya untuk membunuh tanpa kendali mereka. Natasha yang kabur lantas menjadi buronan.</p>\r\n<p>Natasha memutuskan untuk menetap di rumahnya di Norwegia. Pelariannya ini dibantu mantan agen S.H.I.E.L.D, Rick Mason.Hidup tenang di sana, tiba-tiba Natasha menerima sebuah paket berisi Red Dust dari Yelena Belova di rumahnya. Rupanya, paket itu adalah sebuah masalah baru untuk Natasha. Red Dust merupakan penawar yang dapat menghilangkan kendali Red Room yang diincar sosok misterius bernama Taskmaster. Akhirnya, Natasha pergi menemui Yelena untuk mencari tahu apa yang sebenarnya terjadi.Setelah berbincang dan berdebat, Natasha dan Yelena memutuskan untuk melindungi Red Dust demi menghancurkan program Black Widow yang dikelola Antonia Dreykov.Dalam menjalankan misi tersebut mereka dibantu Alexei Shostakov atau Red Guardian dan Melina Vostokoff yang membenci Dreykov. Bagaimana perjuangan Natasha dan Yelena dalam melindungi Red Dust?</p>', 'assets/cover/cover-1643810257.png', 'assets/film/film-1643887215.mp4', '2022-02-02 06:57:37', '2022-02-03 04:20:15'),
(23, 'Captain Amerika', '2j 2m', '<p>Pada tahun 1991, prajurit super yang dicuci otaknya, James \"Bucky\" Barnes dikirim dari sebuah pangkalan Hydra di Siberia untuk mencegat sebuah mobil yang membawa sebuah kotak berisi serum tentara super. Pada hari ini, kira-kira satu tahun setelah kekalahan Ultron di negara Sokovia oleh Avengers, Steve Rogers, Natasha Romanoff, Sam Wilson, dan Wanda Maximoff menghentikan Brock Rumlow dari mencuri senjata biologis dari laboratorium di Lagos. Rumlow meledakkan dirinya sendiri, dengan harapan ledakannya bisa membunuh Rogers. Ketika Maximoff melemparkan Rumlow dan ledakannya ke langit dengan telekinesis, ia merusak sebuah bangunan di dekatnya, menewaskan beberapa pekerja kemanusiaan dari Wakanda.</p>\r\n<p>Menteri Luar Negeri Amerika Serikat Thaddeus Ross menginformasikan kepada Avengers bahwa Perserikatan Bangsa-Bangsa sedang mempersiapkan untuk melewati Kesepakatan Sokovia, yang akan membentuk panel PBB untuk mengawasi dan mengendalikan tim Avengers. Avengers dibagi: Tony Stark, Romanoff, Vision dan James Rhodes mendukung pengawasan karena mereka yakin bahwa banyak orang tidak bersalah telah mati karena kesalahan mereka (seperti Charles Spencer), bahwa mereka harus memenangkan kembali kepercayaan pemerintah dan bahwa kekuatan mereka kadang kala membawa malapetaka. Sementara Steve Rogers dan Sam Wilson memiliki keyakinan lebih besar atas penilaian mereka sendiri daripada penilaian pemerintah. Helmut Zemo melacak dan membunuh agen Hydra yang dahulu mengawasi Barnes, mencuri sebuah buku berisi kata-kata pemicu yang mengaktifkan cuci otak Barnes. Pada sebuah konferensi di Wina di mana Kesepakatan harus diratifikasi, sebuah bom membunuh Raja T\'Chaka dari Wakanda. Rekaman keamanan menunjukkan bahwa pengebom tersebut adalah Barnes. Atas kejadian ini, anak T\'Chaka, T\'Challa, bersumpah untuk membunuh Barnes. Diinformasikan oleh Sharon Carter tentang keberadaan Barnes dan niat pihak berwenang untuk membunuhnya, Rogers memutuskan untuk mencoba menghadirkan Barnes&ndash;teman masa kecilnya dan kawan perangnya&ndash;sendiri. Rogers dan Wilson melacak Barnes ke Bukares dan berusaha melindunginya dari T\'Challa dan pihak berwenang, namun keempatnya, termasuk T\'Challa, ditangkap.</p>\r\n<p>Meniru seorang psikiater yang dikirim untuk mewawancarai Barnes, Zemo membacakan kata-kata untuk membuat Barnes mematuhinya. Dia menanyai Barnes, lalu mengirimnya mengamuk untuk menutupi pelariannya sendiri. Rogers menghentikan Barnes dan menyelinap pergi. Ketika Barnes mendapatkan kembali akal sehatnya, dia menjelaskan bahwa Zemo adalah pengebom Wina yang sebenarnya dan ia menginginkan lokasi markas Hydra di Siberia, tempat \"Tentara Musim Dingin\" yang dicuci otaknya disimpan dalam keadaan mati suri. Karena tidak mau menunggu otorisasi untuk menangkap Zemo, Rogers dan Wilson mengabaikan Kesepakatan, dan merekrut Maximoff, Clint Barton, dan Scott Lang untuk tujuan mereka. Dengan izin Ross, Stark mengumpulkan tim yang terdiri dari Romanoff, T\'Challa, Rhodes, Vision, dan Peter Parker untuk menangkap para pemberontak. Tim Stark mencegat kelompok Rogers di Bandara Leipzig/Halle, di mana mereka bertarung sampai Romanoff membiarkan Rogers dan Barnes melarikan diri. Sisa tim Rogers ditangkap dan ditahan di penjara Raft, sementara Rhodes sebagian lumpuh setelah ditelantarkan secara tidak sengaja oleh Vision, dan Romanoff pergi ke pengasingan.</p>\r\n<p>Stark menemukan bukti bahwa Barnes diperalat oleh Zemo dan meyakinkan Wilson untuk memberi tahu tujuan Rogers. Tanpa memberi tahu Ross, Stark pergi ke fasilitas Siberia Hydra dan melakukan gencatan senjata dengan Rogers dan Barnes, tanpa menyadari bahwa mereka diam-diam diikuti oleh T\'Challa. Mereka menemukan bahwa tentara super lainnya telah dibunuh oleh Zemo, yang kemudian menunjukkan rekaman kepada mereka yang mengungkapkan bahwa mobil yang telah dicegat Barnes pada tahun 1991 berisi orang tua Stark, yang kemudian dibunuh oleh Barnes. Marah karena Rogers merahasiakan ini darinya, Stark menyerang Rogers dan Barnes. Setelah pertarungan sengit, Stark menghancurkan tangan logam Barnes dan Rogers akhirnya berhasil melumpuhkan armor Stark dan pergi bersama Barnes, meninggalkan perisainya. Puas bahwa dia telah membalaskan kematian keluarganya di Sokovia dari tindakan Avengers dengan memecah belah Avengers, Zemo mencoba untuk bunuh diri, namun dia dihentikan oleh T\'Challa dan dibawa ke pihak berwenang.</p>\r\n<p>Pada akhir cerita, Stark memberikan Rhodes alat untuk memungkinkannya berjalan lagi, sementara Rogers membebaskan sekutunya dari Raft. Dalam adegan di pertengahan kredit, Barnes, yang diberi suaka di Wakanda, memilih untuk kembali tidur kriogenik sampai obat untuk pencucian otaknya ditemukan. Dalam adegan pasca-kredit, Parker menguji gadget baru yang dibuat oleh Stark.</p>', 'assets/cover/cover-1643810338.png', 'assets/film/film-1643887148.mp4', '2022-02-02 06:58:58', '2022-02-03 04:19:08'),
(24, 'Ice Age', '3j 2m', '<p>Film dimulai dengan saber-toothed Tupai (dikenal sebagai Scrat) yang mencoba untuk menemukan tempat untuk menyimpan acorn nya berharga. Akhirnya, ketika ia mencoba untuk menginjak-injak ke dalam tanah, ia menyebabkan sebuah celah besar di tanah yang meluas untuk mil dan mil dan memicu longsoran besar. Dia nyaris tidak lolos, tetapi menemukan dirinya menginjak oleh kawanan binatang prasejarah. Binatang mencoba untuk menghindari zaman es dengan memigrasi Selatan. Sid, kikuk tanah kemalasan kiri belakang oleh keluarganya, memutuskan untuk melanjutkan sendiri tetapi diserang oleh dua Brontops siapa ia marah. Sid segera diselamatkan oleh Manfred (\"Manny\"), gelisah raksasa yang perkelahian mereka dari dan menuju utara. Tidak ingin menjadi sendirian dan tidak dilindungi, Sid berikut Manny. Sementara itu, Soto, pemimpin kebanggaan Smilodon, ingin membalas dendam pada sekelompok manusia dengan makan kepala bayi anak, Roshan, hidup. Soto memimpin serangan pada kamp manusia, di mana ibu Roshan dipisahkan dari istirahat dan melompat turun air terjun ketika terpojok oleh Soto\'s Letnan, Diego. Untuk kegagalan, Diego yang dikirimkan untuk menemukan dan mengambil bayi tersebut.</p>\r\n<p>Kemudian, Sid dan Roshan tempat Manny dan ibunya di dekat Danau, karena telah selamat risiko nya. Ibu hanya memiliki kekuatan yang cukup untuk mempercayai bayinya untuk Manny sebelum ia menghilang. Setelah banyak persuasi oleh Sid, mereka memutuskan untuk kembali Roshan, tetapi ketika mereka mencapai permukiman manusia, mereka menemukan itu kosong. Mereka bertemu dengan Diego, yang meyakinkan pasangan untuk membiarkan dia membantu dengan melacak manusia. Empat perjalanan, dengan Diego diam-diam memimpin mereka ke nya pack untuk penyergapan.</p>\r\n<p>Sementara memiliki petualangan kecil mereka, mereka mencapai gua dengan beberapa gambar yang dibuat oleh manusia. Belajar tentang masa lalu Manny dan interaksinya sebelumnya dengan pemburu manusia, di mana istri dan anaknya terbunuh, Diego dan Sid meninggalkan Manny penyendiri sinis. Kemudian, Manny, Sid, Diego dan Roshan hampir mencapai setengah-puncak tetapi pertemuan Sungai lava. Manny dan Sid, bersama dengan Roshan, membuat aman, tetapi Diego perjuangan, akan jatuh ke dalam lava. Manny penyelamatan dirinya, nyaris hilang jatuh ke lava dirinya. Kawanan mengambil istirahat untuk malam, dan Roshan mengambil langkah pertama berjalan untuk Diego.</p>\r\n<p>Keesokan harinya, kawanan pendekatan penyergapan, menyebabkan Diego untuk mengaku Manny dan Sid tentang penyergapan, dan dia memberitahu mereka untuk mempercayai-nya. Kawanan pertempuran Soto\'s paket, dan perkelahian singkat terjadi kemudian. Seperti Soto Tutup untuk membunuh di Manny, Diego melompat dan berhenti Soto, yang luka Diego dalam proses. Manny mengetuk Soto ke dinding batu, menyebabkan beberapa tajam es jatuh pada Soto, membunuhnya. Sisa paket kemudian retret. Kelompok kemudian meratapi kecelakaan yang disebabkan kepada Diego. Segera, Manny dan Sid mengelola kembali bayi sukunya, dan Diego bergabung kembali mereka, sebagai kelompok mulai kepala off untuk iklim hangat.</p>\r\n<p>20.000 tahun kemudian, Scrat, beku dalam es, berakhir di tepi sebuah pulau tropis. Ketika es perlahan-lahan meleleh, acorn kemudian adalah dicuci pergi. Ia keliru memicu letusan gunung berapi, setelah kelapa menginjak tanah, dengan frustrasi.</p>', 'assets/cover/cover-1643810555.png', 'assets/film/film-1643887098.mp4', '2022-02-02 07:02:35', '2022-02-03 04:18:18'),
(25, 'Iron Man-2', '2j 1m', '<p>Dunia mulai mengetahui identitas Tony Stark sebagai Iron Man. Namun Tony harus berjuang dengan kesehatannya yang menurun dan berhadapan&nbsp;dengan seorang lelaki pendendam yang terikat dengan warisan ayahnya. Iron Man pertama menceritakan asal-usul penciptaan baju besi&nbsp;Iron Man dengan berbagai senjata. Pada film kedua ini, pria kaya raya Tony Stark (Robert Downey Jr.) mulai mengungkap identitasnya&nbsp;sebagai Iron Man.Sejak saat itu, kepopuleran Tony meroket. Dia sering masuk majalah dan televisi. Militer Amerika Serikat (AS) ingin memanfaatkan&nbsp;keadaan tersebut. Mereka ingin meniru baju besi yang Tony ciptakan. Dengan dalih penelitian, militer Amerika membujuk Tony untuk&nbsp;meminjamkan baju besinya. Namun Tony menolak. Pada salah satu wawancara, Tony mengatakan baju tersebut merupakan rancangan originalnya.&nbsp;</p>\r\n<p>Tidak ada campur tangan orang lain. Mendengar pernyataan tersebut, Ivan Vanko (Mickey Rourke) tidak terima. Dia beranggapan, teknologi&nbsp;baju besi tersebut merupakan buah karya ayahnya dan ayah Tony. Tidak terima dengan perkataan Tony, Ivan menciptakan baju besi mirip&nbsp;dengan kepunyaan Tony. Ivan bekerja sama dengan militer. Setelah baju besi versinya selesai, Ivan akan menyerang Tony dan menimbulkan&nbsp;kekacauan. Iron Man 2 dikerjakan Jon Favreau bersama penulis naskah Justin Theroux. Film ini tayang perdana pada 7 Mei 2010 dengan&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'assets/cover/cover-1643810587.png', 'assets/film/film-1643887014.mp4', '2022-02-02 07:03:07', '2022-02-03 04:16:54'),
(26, 'Luca', '1j 45m', '<p>Berlatar di sebuah kota Portorosso di pinggir pantai Riviera Italia yang indah, Disney and Pixar\'s, Luca, menceritakan petualangan musim panas yang tak terlupakan dari Luca Paguro (Jacob Tremblay), seorang anak laki-laki berusia 13 tahun bersama sahabat barunya, Alberto Scorfano (Jack Dylan Grazer), seorang monster laut remaja yang sangat antusias untuk mencoba hal baru. Tetapi semua kesenangan terancam oleh rahasia besar yang hanya diketahui oleh mereka berdua bahwa mereka merupakan monster laut dari dunia lain di bawah permukaan laut.</p>\r\n<p>Kisah yang mengambil waktu pada akhir 1950-an hingga 1960-an ini menampilkan keajaiban dari petualangan musim panas Luca, yang sudah lama menantikan untuk mengenal dunia manusia di atas permukaan laut. Alberto, sang monster laut lain yang pernah menjelajah dunia manusia pun meyakinkan Luca untuk berani melangkah keluar dari zona nyamannya. Alhasil keduanya pun berhasil keluar dari laut dan melakukan perjalanan ke dunia manusia. Tidak diduga ternyata keduanya juga memiliki kemampuan untuk berubah wujud dan berbaur dengan para manusia selama mereka tetap \'kering\'. Apabila mereka terkena cipratan air, maka rahasia mereka terancam terbongkar.</p>\r\n<p>Selain menemukan berbagai hal baru, Luca dan Alberto juga berkenalan dengan seorang gadis bernama Giulia Marcovaldo (Emma Berman), seorang gadis petualang yang ramah dan menawan yang gemar membaca. Giulia yang tahu keduanya membutuhkan pemandu akhirnya setuju untuk membantu Luca dan Alberto, terutama ketika keduanya setuju membantu Giulia dalam sebuah perlombaan lokal yang sangat ingin ia menangkan.</p>\r\n<p>Musim panas ini pun menjadi pengalaman yang tak terlupakan bagi Luca karena ia bisa memiliki teman manusia yang membawanya mengenal dunia baru dan berpetualang untuk menikmati keindahan alam Portorosso, mencicipi kuliner seperti gelato dan pasta, serta mengendarai skuter tanpa henti selama liburan musim panas.</p>\r\n<p>Di setiap perjalanan, kedua monster ini harus menjaga rahasia mereka yang dapat berubah wujud agar tidak diketahui oleh Giulia dan warga setempat yang mereka temui. Dapatkah Luca dan Alberto menyimpan rahasia tersebut sembari menikmati petualangan musim panasnya?</p>\r\n<p>&nbsp;</p>', 'assets/cover/cover-1643810612.png', 'assets/film/film-1643886945.mp4', '2022-02-02 07:03:32', '2022-02-03 04:15:45'),
(27, 'Peterpan', '1j 45m', '<p>Ini adalah Peter Pan Story For Kids yang terkenal. Pada zaman dahulu kala, ada tiga orang anak bernama Wendy, John dan Michael Darling. Mereka menyukai waktu sebelum tidur karena setiap hari Wendy bercerita tentang Peter Pan. Peter adalah seorang bocah lelaki yang memutuskan untuk tidak tumbuh dewasa. Dia tinggal di Never Land yang jauh, penuh petualangan dan kesenangan. Anak-anak suka mendengar cerita tentang Peter. Dan tanpa mereka sadari Peter sendiri akan terbang ke dunia dan duduk di jendela kamar anak-anak itu sambil mendengar cerita-cerita tentangnya.</p>\r\n<p>Suatu malam Peter meminta anak-anak untuk ikut bersamanya ke Never Land. Wendy senang mendengar ini. Peter mengajari mereka cara terbang. Yang diperlukan hanyalah harapan dan sedikit debu peri dan tentunya sedikit latihan.Kemudian mereka pun terbang ke Never Land. The Never Land adalah tempat yang indah. Ada peri yang hidup di puncak pohon dan putri duyung berenang di laguna. Ada orang Indian merah asli di sebuah desa di tebing dan hutan penuh binatang liar. Yang terbaik dari semuanya, ada kapal-kapal penuh perompak dengan pemimpin yang sangat jahat, Kapten Hook. Wendy, John, dan Michael tahu pada pandangan pertama bahwa mereka akan mencintai Never Land. Mereka menyukai rumah bawah tanah Peter, dengan banyak pintu tersembunyi di pohon berlubang besar. Di sana mereka bertemu the Lost Boys yang berbagi rumah dengan Peter.</p>\r\n<p>Semua anak lelaki senang bahwa Wendy datang untuk menceritakan kisah pengantar tidur kepada mereka, tetapi mereka tidak menghabiskan banyak waktu di rumah bawah tanah itu. Ada terlalu banyak hal menarik untuk dilakukan. Kadang-kadang mereka bermain perang dengan orang-orang Indian merah, yang adalah teman baik mereka. Kadang-kadang mereka memiliki masalah dengan para perompak yang jahat, yang adalah musuh mereka. Suatu hari para perompak mencuri Putri Tiger Lily dari suku Indian. Kepala India, ayahnya, sangat kesal tetapi Peter Pan menyelamatkan Tiger Lily dan membawanya pulang dengan selamat. Ini membuat Kapten Hook, pemimpin bajak laut marah pada Peter, lebih dari sebelumnya.</p>\r\n<p>Dia menculik Wendy, John, Michael dan the lost boys ketika Peter pergi. Dia membawa mereka ke kapalnya. Hook memutuskan untuk membuangnya dari kapal. Wendy yakin bahwa Peter akan menyelamatkan mereka. Pada menit terakhir, Peter muncul Dia mengalahkan Kapten Hook dan membebaskan semua temannya. Mereka menakuti para perompak jahat itu untuk melompat ke laut dan mendayung pergi dengan perahu mereka. Sekarang, mereka mendapatkan kapal bajak laut. Wendy memutuskan untuk pulang. Dengan harapan dan sedikit debu peri, mereka membuat kapal bajak laut itu terbang! Mereka semua berlayar di kapal itu melalui langit ke jendela kamar anak lagi.</p>\r\n<p>Orang tua anak-anak hampir tidak percaya bahwa anak-anak mereka pernah ke Never Land. Wendy, John, dan Michael tidak pernah melupakan Peter Pan bahkan setelah mereka dewasa.</p>', 'assets/cover/cover-1643810637.png', 'assets/film/film-1643886782.mp4', '2022-02-02 07:03:57', '2022-02-03 04:14:46'),
(28, 'Toy Story', '1j 12m', '<p>Toy Story mengisahkan tentang Woody (Tom Hanks), sebuah mainan cowboy, yang menjadi pemimpin dari mainan-mainan yang dimiliki oleh Andy Davis (John Morris).</p>\r\n<p>&nbsp;</p>\r\n<p>Karena keluarga Andy hendak pindah rumah saat ulang tahunnya, Andy akan mendapatkan perayaan ulang tahun seminggu lebih awal, dan Woody serta para mainan lainnya sedang menyiapkan penyambutan mainan baru dari hadiah ulang tahun Andy.</p>\r\n<p>&nbsp;</p>\r\n<p>Mainan Andy yang baru tersebut rupanya adalah Buzz Lightyear (Tim Allen), sebuah mainan pahlawan luar angkasa yang terlihat berteknologi tinggi dan keren.</p>\r\n<p>&nbsp;</p>\r\n<p>Hal ini membuat Woody merasa bahwa Andy akan menggantikan dirinya, mainan terfavorit Andy, dengan Buzz Lightyear yang lebih baru dan terlihat keren.</p>\r\n<p>&nbsp;</p>\r\n<p>Sementara itu, Buzz benar-benar memercayai bahwa dirinya adalah seorang pahlawan luar angkasa yang tengah berada dalam misi kembali ke planet asalnya, di mana Woody tetap meyakinkannya hanya sebagai mainan.</p>\r\n<p>&nbsp;</p>\r\n<p>Mainan Andy yang baru tersebut rupanya adalah Buzz Lightyear (Tim Allen), sebuah mainan pahlawan luar angkasa yang terlihat berteknologi tinggi dan keren.</p>\r\n<p>&nbsp;</p>\r\n<p>Hal ini membuat Woody merasa bahwa Andy akan menggantikan dirinya, mainan terfavorit Andy, dengan Buzz Lightyear yang lebih baru dan terlihat keren.</p>\r\n<p>&nbsp;</p>\r\n<p>Sementara itu, Buzz benar-benar memercayai bahwa dirinya adalah seorang pahlawan luar angkasa yang tengah berada dalam misi kembali ke planet asalnya, di mana Woody tetap meyakinkannya hanya sebagai mainan.</p>\r\n<p>&nbsp;</p>\r\n<p>Karena Buzz tak dapat ditemukan, Andy pun memilih Woody untuk dibawa ke Pizza Planet, namun tanpa ia sadari, Buzz yang ternyata selamat memanjat masuk ke dalam mobil.</p>\r\n<p>&nbsp;</p>\r\n<p>Di Pizza Planet, Woody yang hendak mencari Andy bersama Buzz harus tertahan saat Buzz melihat sebuah mesin mainan yang berlatarkan pesawat luar angkasa.</p>\r\n<p>&nbsp;</p>\r\n<p>Buzz yang masih merasa dirinya seorang pahlawan luar angkasa berusaha masuk ke dalam untuk mengambil pesawat tersebut.</p>\r\n<p>&nbsp;</p>\r\n<p>Namun Buzz dan Woody terpaksa harus diam layaknya mainan biasa saat Sid Phillps (Erik von Detten), tetangga Andy yang kerap menyiksa mainan miliknya, memainkan mesin tersebut dan mengambil Buzz keluar, lengkap dengan Woody yang berusaha memegangi Buzz.</p>\r\n<p>&nbsp;</p>\r\n<p>Woody dan Buzz pun terperangkap di dalam rumah Sid.</p>\r\n<p>&nbsp;</p>\r\n<p>Rencana penyelamatan pun dimulai oleh teman-teman Woody sesama mainan dari Andy.</p>\r\n<p>&nbsp;</p>\r\n<p>Akan kah rencana tersebut berhasil?</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Artikel ini telah tayang di TribunStyle.com dengan judul Sinopsis Toy Story - Persaingan Woody dan Buzz untuk Menjadi Mainan Favorit Andy, https://style.tribunnews.com/2016/12/02/sinopsis-toy-story-persaingan-woody-dan-buzz-untuk-menjadi-mainan-favorit-andy?page=2.</p>\r\n<p>Penulis: Regi Yanuar Widhia Dinnata</p>\r\n<p>Editor: Indan Kurnia Efendi</p>', 'assets/cover/cover-1643810666.png', 'assets/film/film-1643820374.mp4', '2022-02-02 07:04:26', '2022-02-02 09:46:39'),
(29, 'Aladdin', '1j 20m', '<p>Sinopsis Film Aladdin 2019 bercerita tentang perjuangan dan kehidupan aladdin. Cinta dan kocak. Hal yang menjadi sangat menghibur dari film aladdin 2019 ini adalah kehadiran Will Smith yang berperan sebagai jin bernama Genie. Karakter kocak dari sang jin menjadi salah satu daya tarik dalam film disney aladdin ini. Gaya ngerap dan suaranya yang cempreng membuat para penonton tertawa dan tersenyum lucu melihat tingkah lucu si jin genie ini.</p>\r\n<p>Cerita yang dipenuhi dengan remake film disney beberapa tahun silam yang bercerita tentang kehidupan timur tengah dan sangat melegenda. Dirilis dan diproduksi oleh Walt Disney Picture, sontak saja film ini banyak digandrungi karena diperankan oleh artis Mena Massoud, Marwan Kenzari, Naomi Scott, Navid Negahban, Billy Magnussen, dan Nasim Pedrad, serta pemeran jasmine dan aladdin sukses membuat penonton serasa berada di timur tengah dengan gaya dan penampilan yang sangat artistik, totalitas, dan amazing seperti negeri dongeng disney.Cerita perebutan si lampu ajaib juga konflik klasik dan mendunia dari film aladdin 2019 ini. Si Jaffar si penasihat istana juga sangat menginginkan si lampu ajaib yang dimiliki pemuda miskin aladdin. Namun si jaffar haus akan kekuasaan dan tahta sehingga memiliki lampu ajaib dengan sangat obsesi dan membabi buta sehinga pertempuran sengit namun kocak diantara keduanya menambah keseruan dalam film ini.Lampu ajaib yang dapat mengabulkan 3 permintaan ini memang menjadi persaingan antara aladdin dan jafar disela-sela perebutan tersebut kisah unik putri jasmine yang memiliki kecantikan luar biasa sehingga mempuat hati aladdin terpikat dan ingin memilikinya.</p>', 'assets/cover/cover-1643887458.png', 'assets/film/film-1643887458.mp4', '2022-02-03 04:24:18', '2022-02-03 04:25:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `film_users`
--

CREATE TABLE `film_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_01_30_153800_create_films_table', 2),
(5, '2022_02_02_164836_create_koleksis_table', 3),
(6, '2022_02_02_183819_create_film_users_table', 4),
(7, '2022_02_02_184749_create_film_users_table', 5),
(8, '2022_02_03_052804_create_film_user_table', 6),
(9, '2022_02_03_052943_create_film_user_table', 7),
(10, '2022_02_03_090024_create_film_users_table', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '12345admin', 'admin', NULL, '2022-01-29 05:24:25', '2022-01-29 05:24:25'),
(10, 'pengguna pertama', 'penggunapertama', 'user', NULL, '2022-02-01 07:10:55', '2022-02-01 07:10:55'),
(11, 'pengguna kedua', 'penggunakedua', 'user', NULL, '2022-02-01 07:11:14', '2022-02-01 07:11:14'),
(12, 'pengguna ketiga', 'penggunaketiga', 'user', NULL, '2022-02-01 07:11:30', '2022-02-01 07:11:30'),
(13, 'pengguna keempat', 'penggunakeempat', 'user', NULL, '2022-02-01 07:12:41', '2022-02-01 07:12:41'),
(14, 'penguna kelima', 'penggunakelima', 'user', NULL, '2022-02-01 07:13:18', '2022-02-01 07:13:18'),
(15, 'user', 'userpertama', 'user', NULL, '2022-02-02 01:09:27', '2022-02-02 01:09:27'),
(16, 'reza', 'reza123456789', 'user', NULL, '2022-02-02 21:42:40', '2022-02-02 21:42:40'),
(17, 'Abdas', 'abdas123456789', 'user', NULL, '2022-02-03 02:24:14', '2022-02-03 02:24:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `film_users`
--
ALTER TABLE `film_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_users_user_id_foreign` (`user_id`),
  ADD KEY `film_users_film_id_foreign` (`film_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `films`
--
ALTER TABLE `films`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `film_users`
--
ALTER TABLE `film_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `film_users`
--
ALTER TABLE `film_users`
  ADD CONSTRAINT `film_users_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`),
  ADD CONSTRAINT `film_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
