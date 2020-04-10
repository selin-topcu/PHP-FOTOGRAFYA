-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 May 2019, 17:40:01
-- Sunucu sürümü: 10.1.34-MariaDB
-- PHP Sürümü: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `fotografegitim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kulad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `ad`, `soyad`, `kulad`, `sifre`) VALUES
(1, 'Selin', 'Dayıoğlu', 'selin', 's123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitimler`
--

CREATE TABLE `egitimler` (
  `egitim_id` int(11) NOT NULL,
  `egitim_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` int(10) NOT NULL,
  `resim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `egitmen_id` int(11) NOT NULL,
  `egitim_bilgi` varchar(10000) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `egitimler`
--

INSERT INTO `egitimler` (`egitim_id`, `egitim_ad`, `fiyat`, `resim`, `egitmen_id`, `egitim_bilgi`) VALUES
(1, 'TEMEL FOTOĞRAF EĞİTİMİ', 200, 'temel.jpg', 1, 'Temel Fotoğraf Eğitimi programına katılan kişiler fotoğraf makineleri ve temel fotoğrafçılık ile ilgili konularda bilgi ve deneyim kazanmış olacaktır'),
(2, 'SOKAK FOTOĞRAFÇILIĞI', 300, 'sokak.jpg', 2, 'Sokak Fotoğrafçılığı programına katılan kişiler hızla akan yaşamda hisettirmeden anı yakalamak ve kalabalıklar içinde fotoğraf makinesiyle görünmez olup nasıl daha iyi çekebilecekleri hakkında bilgi ve deneyim kazanmış olacaktır. '),
(3, 'DOĞA FOTOĞRAFÇILIĞI', 300, 'doğa.jpg', 10, 'Doğa Fotoğrafçılığı Eğitimi Programına katılan kişiler Doğa Fotoğrafı kavramının anlaşılması, doğa\'da ışık kullanımı, dört mevsim manzara fotoğrafları çekmek için gerekli teknik bilgi kazanımı ile ilgili konularda bilgi ve deneyim kazanmış olacaktır. '),
(4, 'İLERİ DÜZEY FOTOĞRAF EĞİTİMİ', 500, 'ileri.jpg', 9, 'İleri Düzey Fotoğraf Eğitimi programına katılan kişiler Katılımcıların ek ışık sistemleri ve yardımcı araçlar gibi teknik gelişimlerin yanısıra kurumsal kimlik, mekan, etkinlik ve özel gün fotoğrafçılığı vb. çekimleri başarabilecek genel düzeyde bilgi ve deneyim kazanmış olacaktır. '),
(5, 'GEZİ FOTOĞRAFÇILIĞI', 700, 'gezi.jpg', 8, 'Gezi Fotoğrafçılığı programına katılan kişiler gezilen yerler de anı yakalayıp doğru zaman da doğru teknik ile hem gezip hem de fotoğraf deneyimleri hakkında bilgi ve deneyim kazanmış olacaktır. '),
(6, 'MİMARİ FOTOĞRAFÇILIK EĞİTİMİ', 300, 'mimari.jpg', 7, 'Mimari Fotoğrafçılık programına katılan kişiler mimari yapılarını çekerken doğru çekim açısı ,doğru teknik hakkında bilgi ve deneyim kazanmış olacaktır. '),
(7, 'SOYUT FOTOĞRAFÇILIK', 300, 'soyut.jpg', 6, 'Soyut Fotoğrafçılık programına katılan kişiler objelerin şekil ve renklerini soyutlayarak, aslında daha çok merak uyandıran estetik fotoğraflar elde etmeyi ve bunun için tekniklerini daha çok hayal güçlerini kullanabilmelerini sağlayan konularda bilgi ve deneyim kazanmış olacaktır. '),
(8, 'SU ALTI FOTOĞRAFÇILIĞI', 800, 'su.jpg', 5, 'Su Altı Fotoğrafçılığı programına katılan kişiler denizin en derinliklerin de en güzel fotoğraflar nasıl çekeceği gibi konularda bilgi ve deneyim kazanmış olacaktır. '),
(9, 'ORTA DÜZEY EĞİTİM ', 300, 'orta.jpg', 4, 'Orta Düzey Fotoğraf Eğitimi programına katılan kişiler doğru pozlama, fotoğraf da ışık, kompozisyon, orta düzey fotoğrafçılık ile ilgili konularda bilgi ve deneyim kazanmış olacaktır. '),
(10, 'PORTRE ÇEKİM EĞİTİMİ', 300, 'portre.jpg', 3, 'Portre Çekim Eğitimi programına katılan kişiler Doğru ışık, doğru ekipman, doğru açı seçimleri ile doğru sonuçlar elde edebileceği ile ilgili konularda bilgi ve deneyim kazanmış olacaktır. ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitmenler`
--

CREATE TABLE `egitmenler` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `e_kulad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `egitmen_bilgi` varchar(10000) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `egitmenler`
--

INSERT INTO `egitmenler` (`id`, `ad`, `soyad`, `e_kulad`, `sifre`, `email`, `telefon`, `egitmen_bilgi`, `resim`) VALUES
(1, 'Ahmet', 'Çelik', 'ahmetcelik', 'ahmet123', 'ahmetcelik@gmail.com', '05061564896', 'Ben Ahmet Çelik.Ankara\'da Siyah-Beyaz Studyoda 5 senedir fotoğraf çekimleri yapmaktayım. Bu platformda ise 3 yıldır Temel fotoğraf Eğitimi derslerini veriyorum.', 'ahmetcelik.jpg'),
(2, 'Ayşe', 'Çalar', 'aysecalar', 'ayse123', 'aysecalar@gmail.com', '05077895632', 'Ben Ayşe Çalar.10 senedir sokak fotoğrafçılığı yapıyorum.Çektiğim fotoğrafları İstanbul Sanatlar Müzesinde düzenli olarak sergiliyorum.Bu platformda ise 4 senedir Sokak Fotoğrafçılığı Eğitimi veriyorum.', 'aysecalar.jpg'),
(3, 'Mehmet', 'Şimşek', 'mehmtsimsk', '1111', 'mehmetsimsek@hotmail.com', '05064678321', 'Ben Mehmet Şimşek.8 senedir Portre Çekimleri yapmaktayım.Kendi işimi kurduktan sonra gönüllü olarak bu platformda Portre Fotoğraf Eğitimi vermekteyim.', 'mehmetsimsek.jpg'),
(4, 'Veli', 'Keskin', 'velikeskin', 'velikeskin214', 'velikeskin@gmail.com', '05031234589', 'Ben Veli Keskin amatör olarak başladığım fotoğrafçılığa bu platformdan aldığım eğitimlerle kendimi oldukça geliştirdim ve şimdi sizlere Orta Düzeyde Fotoğraf eğitimi veriyorum. ', 'velikeskin.jpg'),
(5, 'Fatma', 'Kılış', 'fatmakilis', 'fatmakilis1907', 'fatmakilis@gmail.com', '05078962515', 'Ben Fatma Kılış. 1 senedir bu platform da Su Altı Fotoğrafçılığı eğitimini vermekteyim.Daha öncelerde ise PADI Sualtı Fotoğrafçılığında eğitmen olarak 5 sene çalıştım.', 'fatmakilis.jpg'),
(6, 'Esma', 'Yalman', 'esmayalman', 'esma1991', 'esmayalman@gmail.com', '05531235698', 'Ben Esra Yalman 5 sene önce AFSAD\'da Soyut Fotoğraf Eğitimi aldım.Daha sonrasında AFSAD\'da bir çok fotoğraf seminerleri verdim.Şuan ise Soyut Fotoğraf Eğitimi veriyorum', 'esmayalman.jpg'),
(7, 'Eda', 'Kaplan', 'edakaplan', 'kaplan1970', 'edakaplan@gmail.com', '05534567821', 'Merhaba ben Eda Kaplan.25 senedir Eda Studyoyu yönetiyorum.Şuan da 12 senedir bu Platformda Mimari Fotoğrafçılık Eğitimi veriyorum.', 'edakaplan.jpg'),
(8, 'Sami ', 'Koca', 'samikoca', 'sami123', 'samikoca@outlook.com', '05077894561', 'Merhabalar ben Sami Koca.3 senedir temel çekimler üzerinden çeşitli workshoplar da bulundum.Şuanda ise Fujifilm de hem çalışıp hem de bu platformda Gezi Fotoğrafçılığı eğitimi veren bir eğitimciyim.', 'samikoca.jpg'),
(9, 'Sevinç', 'Kara', 'sevinckara', 'sevinckara1950', 'sevinckara@hotmail.com', '05067895331', 'Ben Sevinç Kara bu platform ilk kurulduğundan bu yana eğitim vermekteyim.Sizlere İleri Düzey Fotoğraf Eğitimi veriyorum. ', 'sevinckara.jpg'),
(10, 'Tarık', 'Can', 'tarikcan', 'tarikcan123', 'tarikcan@gmail.com', '05064568978', 'Ben Tarık Can.Doğayla iç içe büyüdüğüm için doğaya aşık bir insan olarak doğa fotoğraflarını çekmeyi seviyorum .Amatör başlayıp şimdi ise Doğa Fotoğrafçılığı dersini veriyorum.', 'tarikcan.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kullanici-id` int(11) NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `k_kulad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(5) COLLATE utf8_turkish_ci NOT NULL,
  `a_egitim_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici-id`, `ad`, `soyad`, `k_kulad`, `sifre`, `email`, `telefon`, `cinsiyet`, `a_egitim_id`) VALUES
(1, 'Kemal', 'Kadir', 'kemalkadir', 'kemal34', 'kemalkadir@gmail.com', '05074569823', 'Erkek', NULL),
(2, 'Cemal', 'Özyurt', 'cmlyrt', 'cemal424', 'cemalyurt@gmail.com', '05324658921', 'Erkek', NULL),
(3, 'Adem', 'Elmas', 'ademelmas', '134443', 'ademelmas@gmail.com', '05564569821', 'Erkek', NULL),
(4, 'Semih', 'Duran', 'semhduran', 'semih4645', 'semihduran@gmail.com', '05077894532', 'Erkek', NULL),
(5, 'Saliha', 'Kerimoğlu', 'salihkrm', 'saliha5342', 'salihakerim@gmail.com', '05078653298', 'Kadın', NULL),
(6, 'Leyla', 'Karaman', 'lylkrmn', 'leylkrmn', 'leylakaraman@hotmail.com', '05067891235', 'Kadın', NULL),
(7, 'Ceylin', 'Şerbetçioğlu', 'cyln', 'ceylin123', 'ceylinserbetcioglu@gmail.com', '05067895612', 'Kadın', NULL),
(8, 'Ece', 'Demirci', 'ecedemirci', 'demir132', 'ecedemirci@gmail.com', '05367894523', 'Kadın', NULL),
(9, 'Yasin', 'Talat', 'yasintalat', 'yasiin345', 'yasintalat@gmail.com', '05067865122', 'Erkek', NULL),
(10, 'Vedat', 'Sevim', 'vedatsevim', 'vedat32', 'vedatsevim@gmail.com', '05078796512', 'Erkek', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `on_kayit`
--

CREATE TABLE `on_kayit` (
  `kulad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `egitim_id` int(11) NOT NULL,
  `yorum` varchar(10000) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `egitimler`
--
ALTER TABLE `egitimler`
  ADD PRIMARY KEY (`egitim_id`);

--
-- Tablo için indeksler `egitmenler`
--
ALTER TABLE `egitmenler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kullanici-id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `egitimler`
--
ALTER TABLE `egitimler`
  MODIFY `egitim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `egitmenler`
--
ALTER TABLE `egitmenler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kullanici-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
