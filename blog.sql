-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Eki 2023, 16:29:53
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abone`
--

CREATE TABLE `abone` (
  `abone_id` int(11) NOT NULL,
  `abone_email` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `abone`
--

INSERT INTO `abone` (`abone_id`, `abone_email`) VALUES
(3, 'infoenesaydn@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(1) NOT NULL,
  `ayar_baslik` varchar(250) NOT NULL,
  `ayar_aciklama` text NOT NULL,
  `ayar_anahtar` varchar(400) NOT NULL,
  `ayar_logo` varchar(120) NOT NULL,
  `ayar_adres` varchar(250) NOT NULL,
  `ayar_telefon` varchar(25) NOT NULL,
  `ayar_email` varchar(80) NOT NULL,
  `ayar_instagram` varchar(200) NOT NULL,
  `ayar_twitter` varchar(200) NOT NULL,
  `ayar_linkedIn` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_baslik`, `ayar_aciklama`, `ayar_anahtar`, `ayar_logo`, `ayar_adres`, `ayar_telefon`, `ayar_email`, `ayar_instagram`, `ayar_twitter`, `ayar_linkedIn`) VALUES
(1, 'EA Blog Sitesi', 'Edindiğim Bilgiler ve Deneyimlerin Yer Alacağı Bir Blog Sitesini Sizlerle Buluşturuyorum', 'Blog Sitesi, Kişisel Gelişim, Deneyimler, Yazılım', '', 'Türkiye/Karabük/Merkez ', '05466046968', 'infoenesaydn@gmail.com', 'https://www.instagram.com/coderenes_/', 'https://twitter.com/coderenes', 'http://www.linkedin.com/in/enesaydn');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_baslik` varchar(240) NOT NULL,
  `blog_aciklama` text NOT NULL,
  `blog_resim` varchar(280) NOT NULL,
  `blog_sira` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `blog_zaman` timestamp NOT NULL DEFAULT current_timestamp(),
  `blog_anahtarkelime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_baslik`, `blog_aciklama`, `blog_resim`, `blog_sira`, `kullanici_id`, `blog_zaman`, `blog_anahtarkelime`) VALUES
(13, 'Yalnızlık Nimettir, Görebiline...', '<p>Twitter&rsquo;da bir s&ouml;z ile karşılaştım. Sizinle de paylaşayım. G&uuml;l&uuml;msedim&hellip; Biraz sessizlik, sanırım kendimi g&ouml;rd&uuml;m. Yalnız yaşamaya başlayalı 4 yılı ge&ccedil;ti, neredeyse 5 yıl oluyor. Koca 5 yıl&hellip; N&ouml;betli &ccedil;alıştığım i&ccedil;in 4 g&uuml;n&uuml;mden 1 tam g&uuml;n işte oluyorum. Diğer 3 g&uuml;n ise evdeyim. Evde ise benden başka kimse yok. Bu sebeple bazı g&uuml;nler hi&ccedil; konuşmadığım g&uuml;nler oluyor. Yatağa girince &ldquo;ben galiba bug&uuml;n hi&ccedil; ağzımı a&ccedil;madım&rdquo; diye şaşırıyorum.Ne b&uuml;y&uuml;k nimetmiş, ne b&uuml;y&uuml;k. Şimdi &ccedil;ok daha iyi anlıyorum. Allah&rsquo;a ş&uuml;k&uuml;rler olsun.Yalnız ge&ccedil;en yıllarımı d&uuml;ş&uuml;nd&uuml;m. Farkında bile değilmişim ancak beni &ccedil;ok olgunlaştırmış. Kitap okumak konusunda biraz tembel olsam da film ve m&uuml;zik k&uuml;lt&uuml;r&uuml;m &ccedil;ok g&uuml;zel gelişmiş. Ayrıca d&uuml;ş&uuml;ncelerim de yavaş yavaş pişmeye başlamış.Sa&ccedil;ma sapan tartışmalara girmiyorum artık. Beni yoran insanları ve ortamları da bir &ccedil;izgide tutmaya devam. Ama iyi ama k&ouml;t&uuml;, bilmiyorum ancak bazı konularda &uuml;midimi de yitirdim. K&ouml;t&uuml; bile olsa en azından beklentilerim d&uuml;şt&uuml; diyelim.Neden mi birden bunları s&ouml;yler oldum?Siyasi d&uuml;ş&uuml;ncelerim olsa da kendimi bir partiye ait g&ouml;rm&uuml;yorum. Son 1 aydır ister istemez herkes gibi ben de politize oldum. Sonucunda ise sanırım yine g&ouml;nl&uuml;m karardı.Ne ondanım, ne bundan. Siyasetten uzak kalmaya devam.Bir duruşum var, bir kokum, bir karakterim, bir bakışım.Yapılacak &ccedil;ok işin var Ceyhun. &Ccedil;alışmaya, okumaya, izlemeye ve dinlemeye devam. &Ouml;n&uuml;m&uuml;zdeki aylarda yapılacak ve hatta bırakılacak koca bir liste daha var.Bana t&uuml;m bunları sunan yalnızlığa ise ş&uuml;k&uuml;r! T&uuml;m herkesin bir kuyuya, bir dağa, bir mağaraya ihtiyacı var.</p>\r\n', '442667478765154426176yalnizlik-nimettir-1920x1280.jpg', 1, 0, '2023-06-02 14:22:08', 'Yanlızlık');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ekip`
--

CREATE TABLE `ekip` (
  `ekip_id` int(11) NOT NULL,
  `ekip_isim` varchar(240) NOT NULL,
  `ekip_resim` varchar(250) NOT NULL,
  `ekip_konum` varchar(200) NOT NULL,
  `ekip_aciklama` text NOT NULL,
  `ekip_instagram` varchar(200) NOT NULL,
  `ekip_twitter` varchar(200) NOT NULL,
  `ekip_sira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ekip`
--

INSERT INTO `ekip` (`ekip_id`, `ekip_isim`, `ekip_resim`, `ekip_konum`, `ekip_aciklama`, `ekip_instagram`, `ekip_twitter`, `ekip_sira`) VALUES
(13, 'Enes Aydın', '101trainer-1.jpg', 'Kurucu Ortak', '<p>Başarıya giden yolda adımlarını hızla atan, vizyonuyla geleceği şekillendiren, liderlik vasıflarıyla insanları etkileyen bir iş adamını hayal edin. İş d&uuml;nyasının stratejik oyunlarını ustalıkla y&ouml;neten, zorluklardan fırsatlar &ccedil;ıkaran ve kararlılıkla hedeflerine ilerleyen biri. İşte b&ouml;yle biri, ger&ccedil;ek bir iş adamıdır.</p>\r\n', 'https://www.instagram.com/coderenes_/', 'https://twitter.com/coderenes', 1),
(16, 'Doğukan Boynueğrioğlu', '011trainer-3.jpg', 'Kurucu Ortak', '<p>Bir iş adamı, &ccedil;evresine ilham kaynağı olur. İş d&uuml;nyasında kendini kanıtlamış, tecr&uuml;beli ve bilgili bir profesyoneldir. İş d&uuml;nyasının zorluklarına g&ouml;ğ&uuml;s gererken aynı zamanda etik değerlere de bağlı kalmayı başarır. Başarıyı sadece finansal kazan&ccedil;la &ouml;l&ccedil;mez; aynı zamanda &ccedil;alışanların memnuniyetini, m&uuml;şteri ilişkilerini ve topluma katkısını da &ouml;nemser.</p>\r\n', 'https://www.instagram.com/coderenes_/', 'https://twitter.com/coderenes', 2),
(17, 'Eyüp Şen', '100millet-k-hybri-goretex-ceket-erkek-miv9328-9453-46087-600x600.jpg', 'Kurucu Ortak', '<p>İş adamı, g&uuml;&ccedil;l&uuml; bir liderdir. Karar verme yeteneği, takım &ccedil;alışmasını teşvik etme kabiliyeti ve motive etme becerisi ile &ouml;ne &ccedil;ıkar. İş d&uuml;nyasında karmaşık problemleri &ccedil;&ouml;zerken analitik d&uuml;ş&uuml;nce yapısı ve stratejik planlama becerileriyle &ouml;n plana &ccedil;ıkar. Değişime adapte olurken aynı zamanda fırsatları değerlendirebilme yeteneği sayesinde başarılı sonu&ccedil;lar elde eder.</p>\r\n', 'https://www.instagram.com/coderenes_/', 'https://twitter.com/coderenes', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE `galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_resim` varchar(240) NOT NULL,
  `galeri_sira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`galeri_id`, `galeri_resim`, `galeri_sira`) VALUES
(4, '01171MXEnnUT4L._AC_UF1000,1000_QL80_.jpg', 1),
(6, '001sanal-ofis-neden-tercih-edilmeli.jpg', 2),
(7, '110introimage-resources-whatisprojectmanagement-1000x1000-1.jpg', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(240) NOT NULL,
  `hakkimizda_aciklama` text NOT NULL,
  `hakkimizda_resim` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_aciklama`, `hakkimizda_resim`) VALUES
(1, 'Hakkımda', '<p>Benim i&ccedil;in hayat bir maceradır ve bu blog sayfası, bu maceraları sizlerle paylaşmak i&ccedil;in bir yol olacak. Seyahat, k&uuml;lt&uuml;r, sanat, sağlıklı yaşam, kişisel gelişim gibi konulara ilgi duyuyorum ve bu alanda deneyimlerimi ve araştırmalarımı sizinle paylaşmak i&ccedil;in sabırsızlanıyorum. Benim amacım, size ilham vermek, bilgi aktarmak ve yeni perspektifler sunmaktır.</p>\r\n', '111trainer-1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerik`
--

CREATE TABLE `icerik` (
  `icerik_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `icerik_baslik` varchar(250) NOT NULL,
  `icerik_resim` varchar(200) NOT NULL,
  `icerik_sira` int(11) NOT NULL,
  `icerik_aciklama` text NOT NULL,
  `icerik_zaman` timestamp NOT NULL DEFAULT current_timestamp(),
  `icerik_anahtarkelime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `icerik`
--

INSERT INTO `icerik` (`icerik_id`, `kategori_id`, `icerik_baslik`, `icerik_resim`, `icerik_sira`, `icerik_aciklama`, `icerik_zaman`, `icerik_anahtarkelime`) VALUES
(4, 19, 'HTML', '350074128753745603259unnamed.png', 1, '<p>Hyper Text Markup Language kelimelerinin kısaltması olan HTML Tim Berners Lee tarafından 1991 yılında CERN laboratuvarlarında ortaya &ccedil;ıkmıştır. Bu tarihi web&#39;in doğum tarihi&#39;de denilebilir. HTML5, internetin en &ouml;nemli teknolojilerinden biri olan HTML&lsquo;in şu anlık son s&uuml;r&uuml;m&uuml;d&uuml;r. HTML dili internetin ilk yılından beri kullanıcılara daha iyi bir internet deneyimi sunuyor. Kullanıcılar ve yazılımcılar i&ccedil;in sonsuz &ouml;neme sahip olan bu dil deneyimini en &uuml;st seviyeye taşımak i&ccedil;in artık HTML5 kullanılıyor. HTML5 yeni haliyle &ccedil;ok daha fazla fonksiyon sunduğu i&ccedil;in mobil(tablet, ceptelefonu vb.) cihazlar i&ccedil;in de b&uuml;y&uuml;k &ouml;nem taşıyor. Kodlama yapısı a&ccedil;ısından da yazılımcılara farklı avantajlar sunuyor.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2023-06-03 22:04:36', 'HTML,Yazılım'),
(5, 20, 'CSS', '807964153940043031827d.png', 2, '<p>İnternet sayfaları i&ccedil;in genelge&ccedil;er şablonlar hazırlama olanağı verdiği gibi, bağımsız olarak harflerin stilini, yani&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Renk\">renk</a>, yazı tipi, b&uuml;y&uuml;kl&uuml;k gibi &ouml;zelliklerini değiştirmek i&ccedil;in de kullanılabilir. Bu tekniğin en &ouml;nemli &ouml;zelliği kullanımındaki esnekliktir.</p>\r\n\r\n<p>Bir Web sayfası i&ccedil;erisinde birbiriyle uyumlu birka&ccedil; renk ve birka&ccedil; yazı tip kullanılır ve bunları her sayfada ayrı ayrı tekrar belirtmek yerine CSS yardımıyla bir sefer tanımlayıp b&uuml;t&uuml;n Web sayfalarında ortak olarak kullanılabilir. B&ouml;ylece sayfaların hafızadaki boyutu epey k&uuml;&ccedil;&uuml;ld&uuml;ğ&uuml; gibi g&uuml;ncelleme yapmak da kolaylaşır.</p>\r\n\r\n<p>CSS kodları, HTML kodlarının i&ccedil;ine yazılabildiği gibi harici bir CSS dosyası oluşturularak da işlem yaptırılabilir. T&uuml;r&uuml;ne g&ouml;re&nbsp;<code>&lt;BODY&gt;</code>&nbsp;veya&nbsp;<code>&lt;HEAD&gt;</code>&nbsp;b&ouml;l&uuml;mlerinde yer alabilirler. Ayrıca&nbsp;<em>&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;style.css&quot; /&gt;</em>&nbsp;koduyla CSS dosyası &ccedil;alışma sayfasına eklenebilir. Onları ayrı dosyada veya dosyalarda saklamak, onları değişik HTML sayfalarınca kullanılmasını sağlar, aynı sayfanın değişik aygıtlara g&ouml;re formatlandırılmasını kolaylaştırır, sunumla yapıyı ayırarak değişiklik yapılmasını ekonomikleştirir.</p>\r\n', '2023-06-04 12:11:39', 'CSS');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_baslik` varchar(240) NOT NULL,
  `kategori_sira` int(11) NOT NULL,
  `kategori_durum` int(11) NOT NULL,
  `kategori_zaman` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_baslik`, `kategori_sira`, `kategori_durum`, `kategori_zaman`) VALUES
(19, 'HTML', 1, 1, '2023-06-03 22:02:48');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adsoyad` varchar(240) NOT NULL,
  `kullanici_sifre` varchar(250) NOT NULL,
  `kullanici_email` varchar(200) NOT NULL,
  `kullanici_zaman` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_adsoyad`, `kullanici_sifre`, `kullanici_email`, `kullanici_zaman`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@gmail.com', '2023-06-04 16:10:32');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider1`
--

CREATE TABLE `slider1` (
  `slider_id` int(11) NOT NULL,
  `slider_baslik` varchar(240) NOT NULL,
  `slider_aciklama` text NOT NULL,
  `slider_buton` varchar(50) NOT NULL,
  `slider_link` varchar(200) NOT NULL,
  `slider_resim` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider1`
--

INSERT INTO `slider1` (`slider_id`, `slider_baslik`, `slider_aciklama`, `slider_buton`, `slider_link`, `slider_resim`) VALUES
(1, 'Keşfetmeye Hazır Olun, İlham Veren İçeriklerle Dolu Bir Blog Dünyası.', '<p>Merhaba! Bizim blog d&uuml;nyamıza hoş geldiniz. Burada size ilham verecek, bilgilendirecek ve eğlendirecek i&ccedil;eriklerle dolu bir deneyim sunuyoruz.</p>\r\n', 'Daha Fazlasını Keşfet.', '/WEB/blog.php', '110blog.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `yorum_kategori` varchar(240) NOT NULL,
  `icerik_id` int(11) NOT NULL,
  `yorum_adsoyad` varchar(280) NOT NULL,
  `yorum_detay` text NOT NULL,
  `yorum_zaman` timestamp NOT NULL DEFAULT current_timestamp(),
  `yorum_onay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `yorum_kategori`, `icerik_id`, `yorum_adsoyad`, `yorum_detay`, `yorum_zaman`, `yorum_onay`) VALUES
(4, '1', 13, 'Enes Aydın', 'Deneme Bu Yorum Deneme Yorumudur.', '2023-06-04 14:36:50', 1),
(5, '1', 15, 'Enes Aydın', 'Bu Yorum Deneme Yorumudur.', '2023-06-04 14:37:55', 1),
(6, '2', 4, 'Enes Aydın', 'Bu Yorum Deneme Yorumudur', '2023-06-04 14:38:34', 1),
(7, '2', 5, 'Enes Aydın', 'Bu Yorum Deneme Yorumudur.', '2023-06-04 14:39:21', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abone`
--
ALTER TABLE `abone`
  ADD PRIMARY KEY (`abone_id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Tablo için indeksler `ekip`
--
ALTER TABLE `ekip`
  ADD PRIMARY KEY (`ekip_id`);

--
-- Tablo için indeksler `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `icerik`
--
ALTER TABLE `icerik`
  ADD PRIMARY KEY (`icerik_id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `slider1`
--
ALTER TABLE `slider1`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abone`
--
ALTER TABLE `abone`
  MODIFY `abone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `ekip`
--
ALTER TABLE `ekip`
  MODIFY `ekip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `galeri`
--
ALTER TABLE `galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `icerik`
--
ALTER TABLE `icerik`
  MODIFY `icerik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
