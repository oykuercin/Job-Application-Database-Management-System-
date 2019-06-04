-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 May 2019, 15:47:37
-- Sunucu sürümü: 10.1.30-MariaDB
-- PHP Sürümü: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `job_database`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `approve`
--

CREATE TABLE `approve` (
  `c_id` int(11) NOT NULL,
  `m_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `candidate`
--

CREATE TABLE `candidate` (
  `c_id` int(11) NOT NULL,
  `c_name` char(30) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `c_adress` char(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `c_age` int(11) DEFAULT NULL,
  `sex` char(10) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `exp_salary` int(11) DEFAULT NULL,
  `c_education` char(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `com_name` char(40) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `w_position` char(20) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `w_period` int(11) DEFAULT NULL,
  `prev_salary` int(11) DEFAULT NULL,
  `j_experience` char(200) AS (concat_ws(' ', com_name, w_position, w_period,
prev_salary)) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `candidate`
--

INSERT INTO `candidate` (`c_id`, `c_name`, `c_adress`, `c_age`, `sex`, `exp_salary`, `c_education`, `com_name`, `w_position`, `w_period`, `prev_salary`, `j_experience`) VALUES
(1, 'beg', 'adoria', 21, 'f', 700, 'lise', 'mccann', 'stajer', 2, 0, 'mccann stajer 2 0'),
(2, 's', '3', 4, 's', 7, 's', 's', 's', 77, 8, 's s 77 8');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `company`
--

CREATE TABLE `company` (
  `com_id` int(11) NOT NULL,
  `com_name` char(30) COLLATE utf8mb4_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `creation`
--

CREATE TABLE `creation` (
  `j_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `job`
--

CREATE TABLE `job` (
  `j_id` int(11) NOT NULL,
  `j_description` char(60) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `exp_education` char(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `exp_experience` char(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `salary` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `job`
--

INSERT INTO `job` (`j_id`, `j_description`, `exp_education`, `exp_experience`, `salary`) VALUES
(1, '12', 'uni', 'a', 1),
(2, '7', 'unii', 'pg', 22);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `login_manager`
--

CREATE TABLE `login_manager` (
  `userid` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `login_manager`
--

INSERT INTO `login_manager` (`userid`, `password`) VALUES
('\0', '\0'),
('user', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `manager`
--

CREATE TABLE `manager` (
  `m_id` int(11) NOT NULL,
  `m_name` char(30) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `s_budget` int(11) DEFAULT NULL,
  `department` char(20) COLLATE utf8mb4_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `manager`
--

INSERT INTO `manager` (`m_id`, `m_name`, `s_budget`, `department`) VALUES
(0, 'oyku', 2, 'a'),
(1, 'o', 5, 'k'),
(5, 'o', 7, 't'),
(23, 'oyk', 2, 'a'),
(20561, 'irem', 600, 'sales');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `selection`
--

CREATE TABLE `selection` (
  `j_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `works_for`
--

CREATE TABLE `works_for` (
  `com_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `approve`
--
ALTER TABLE `approve`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `m_id` (`m_id`);

--
-- Tablo için indeksler `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`c_id`);

--
-- Tablo için indeksler `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`com_id`);

--
-- Tablo için indeksler `creation`
--
ALTER TABLE `creation`
  ADD PRIMARY KEY (`j_id`),
  ADD KEY `m_id` (`m_id`);

--
-- Tablo için indeksler `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`j_id`);

--
-- Tablo için indeksler `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`m_id`);

--
-- Tablo için indeksler `selection`
--
ALTER TABLE `selection`
  ADD PRIMARY KEY (`j_id`,`c_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Tablo için indeksler `works_for`
--
ALTER TABLE `works_for`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `com_id` (`com_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `candidate`
--
ALTER TABLE `candidate`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `job`
--
ALTER TABLE `job`
  MODIFY `j_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `approve`
--
ALTER TABLE `approve`
  ADD CONSTRAINT `approve_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `manager` (`m_id`),
  ADD CONSTRAINT `approve_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `candidate` (`c_id`);

--
-- Tablo kısıtlamaları `creation`
--
ALTER TABLE `creation`
  ADD CONSTRAINT `creation_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `manager` (`m_id`),
  ADD CONSTRAINT `creation_ibfk_2` FOREIGN KEY (`j_id`) REFERENCES `job` (`j_id`);

--
-- Tablo kısıtlamaları `selection`
--
ALTER TABLE `selection`
  ADD CONSTRAINT `selection_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `candidate` (`c_id`),
  ADD CONSTRAINT `selection_ibfk_2` FOREIGN KEY (`j_id`) REFERENCES `job` (`j_id`);

--
-- Tablo kısıtlamaları `works_for`
--
ALTER TABLE `works_for`
  ADD CONSTRAINT `works_for_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `manager` (`m_id`),
  ADD CONSTRAINT `works_for_ibfk_2` FOREIGN KEY (`com_id`) REFERENCES `company` (`com_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
