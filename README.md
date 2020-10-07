Basit Seviye // POST GET İşlemli REST Api
database.php kısmından gerekli veritabanı bilgilerinin girilmesi gerekmekte.

Urunler isimli tabloyu aşağıdaki biçimde oluşturabilirsiniz.

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 07 Eki 2020, 08:25:40
-- Sunucu sürümü: 5.7.31-0ubuntu0.18.04.1
-- PHP Sürümü: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `testproj`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Urunler`
--

CREATE TABLE `Urunler` (
  `product_id` int(50) NOT NULL,
  `name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `stock` int(50) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `Urunler`
--
ALTER TABLE `Urunler`
  ADD PRIMARY KEY (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
