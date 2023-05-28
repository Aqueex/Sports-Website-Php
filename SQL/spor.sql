-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 May 2023, 11:09:30
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
-- Veritabanı: `spor`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayakkabilar`
--

CREATE TABLE `ayakkabilar` (
  `id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `text` varchar(500) NOT NULL,
  `aciklama` varchar(500) NOT NULL,
  `fiyat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `ayakkabilar`
--

INSERT INTO `ayakkabilar` (`id`, `img`, `text`, `aciklama`, `fiyat`) VALUES
(4, '/public/default/img/cdn/a__6835_.mercurial.jpg', 'Nike mercurial 7', 'Halı saha ayakkabısı için özel tasarlanmış', '200TL'),
(5, '/public/default/img/cdn/di__2507_.images.jpg', 'Nike Zoom Mercurial Superfly 9 Elite Fg ', 'Halı saha ayakkabısı için özel tasarlanmış', '500TL');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `id` int(11) NOT NULL,
  `site_ismi` varchar(500) NOT NULL,
  `telefon` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `adres` varchar(500) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `twitter` varchar(500) NOT NULL,
  `instagram` varchar(500) NOT NULL,
  `whatsapp` varchar(500) NOT NULL,
  `ust_yazi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`id`, `site_ismi`, `telefon`, `email`, `adres`, `facebook`, `twitter`, `instagram`, `whatsapp`, `ust_yazi`) VALUES
(1, 'Sports', '55555555555', 'example@mail.com', 'loremadres', 'Facebook', 'Twitter', 'İnstagram', 'Whatsapp', 'Duyuru');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `forma`
--

CREATE TABLE `forma` (
  `id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `text` varchar(500) NOT NULL,
  `aciklama` varchar(500) NOT NULL,
  `fiyat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `forma`
--

INSERT INTO `forma` (`id`, `img`, `text`, `aciklama`, `fiyat`) VALUES
(2, '/public/default/img/cdn/cf5982b8-450x450.jpeg', 'ARSENAL İÇ SAHA FORMASI ', '', '500TL'),
(3, '/public/default/img/cdn/mh35902_f-1-450x450.jpg', 'ARSENAL DEPLASMAN FORMASI', 'TERLETMEZ KLİMALI KUMAS (CLİMA COOL)', '299TL');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `konu` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mesaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `name`, `konu`, `email`, `mesaj`) VALUES
(3, 'asd', 'erg', 'asdasd@gmail.com', 'erg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nickname` varchar(2000) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `register_date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `nickname`, `email`, `password`, `register_date`) VALUES
(1, 'asd', 'sala@maill', 'd41d8cd98f00b204e9800998ecf8427e', '2023-03-25 20:19:23'),
(2, 'Mert Uysal', 'mertuysal31@gmail.com', 'a771da5dcc6218160905311d9d38503e', '2023-03-25 20:30:03'),
(3, 'Mert Uysal', 'mertu2802@gmail.com', '79ccca83c7379d3e00748ec73b0d58fd', '2023-04-12 08:00:27'),
(4, 'deneme', 'deneme@gmail.com', '8f10d078b2799206cfe914b32cc6a5e9', '2023-04-12 08:02:11'),
(5, 'Berkcan Seringen', 'beko@gmail.com', 'a8b98026cb7595de301f11ec8460745f', '2023-04-12 12:12:40'),
(6, 'Berkcan Seringen', 'beko@gmail.com', 'cc96d05fd5e74bcf6d1d0249a863954f', '2023-04-12 12:13:15'),
(7, 'Aziz Çakmak', 'azcak80@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '2023-04-13 21:17:33'),
(8, 'asd', 'asd@gmail.com', '7815696ecbf1c96e6894b779456d330e', '2023-04-16 16:04:53'),
(9, 'deneme', 'deneme@gmail', 'asd', '2023-04-16 23:07:47'),
(10, 'sefsdfsdf', 'sala@maill', 'admin', '2023-04-16 23:13:19'),
(11, 'ergergergergerg', 'admin@admin.com', 'admin', '2023-04-18 14:26:26'),
(12, 'hrth', 'rthrth@admin.com', 'admin', '2023-04-18 14:38:50'),
(13, 'ergerg', 'gergerg@admin.com', 'adminerg', '2023-04-18 14:39:15'),
(14, 'asdasdawsd', 'adergmin@admin.com', 'admiasdasdn', '2023-04-18 14:41:27'),
(15, 'asdasdasd', 'adergergmin@admin.com', 'adergergmin', '2023-04-18 14:41:56'),
(16, 'asdasd', 'aasdasddmin@admin.com', 'admiasdasdn', '2023-04-18 14:43:44'),
(17, 'ergergerg', 'rgerg@admin.com', 'admin', '2023-04-18 14:43:55'),
(18, 'asdasd', 'admedrgergin@admin.com', 'admiasdan', '2023-04-18 14:45:03'),
(19, 'tyjtyj', 'adtjktyjmin@admin.com', 'admtyjtyjin', '2023-04-18 14:45:21'),
(20, 'rtjrtj', 'atjrtjrdmin@admin.com', 'admirtj', '2023-04-18 14:45:59'),
(21, 'ergerg', 'admergin@admin.com', 'admingerg', '2023-04-18 14:46:50'),
(22, 'BerkCan', 'beko@gmail.com', 'beko', '2023-05-16 20:35:21'),
(23, 'ergerg', 'adrthrthggmin@admin.com', 'dd', '2023-05-16 22:09:26'),
(24, 'berkcan seringen', 'berksavage0@gmail.com', 'berk123', '2023-05-17 06:07:28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yoneticiler`
--

CREATE TABLE `yoneticiler` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `mail` varchar(500) NOT NULL,
  `sifre` varchar(500) NOT NULL,
  `tag` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `yoneticiler`
--

INSERT INTO `yoneticiler` (`id`, `username`, `mail`, `sifre`, `tag`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', 'asd');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayakkabilar`
--
ALTER TABLE `ayakkabilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `forma`
--
ALTER TABLE `forma`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayakkabilar`
--
ALTER TABLE `ayakkabilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `ayar`
--
ALTER TABLE `ayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `forma`
--
ALTER TABLE `forma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
