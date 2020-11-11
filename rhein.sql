-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 nov 2020 om 07:24
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rhein`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `kabelchacklist`
--

CREATE TABLE `kabelchacklist` (
  `TABEL_ID` int(255) NOT NULL,
  `draadbreuk.AMEL` int(10) DEFAULT NULL,
  `draadbreuk.AMEL2` int(10) DEFAULT NULL,
  `buitendrade.MVB` double DEFAULT NULL,
  `roest.NVB` double DEFAULT NULL,
  `kabelvermindring` decimal(5,0) DEFAULT NULL,
  `meetpunt` varchar(25) DEFAULT NULL,
  `totaal.MVB` double DEFAULT NULL,
  `vervormingen.TYPE` varchar(25) DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `kabel_levrancier` varchar(25) DEFAULT NULL,
  `overig` text DEFAULT NULL,
  `handtekening` varchar(25) DEFAULT NULL,
  `uren` time DEFAULT NULL,
  `afleg_reden` text DEFAULT NULL,
  `TIMESTAMP` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `kabelchacklist`
--

INSERT INTO `kabelchacklist` (`TABEL_ID`, `draadbreuk.AMEL`, `draadbreuk.AMEL2`, `buitendrade.MVB`, `roest.NVB`, `kabelvermindring`, `meetpunt`, `totaal.MVB`, `vervormingen.TYPE`, `datum`, `kabel_levrancier`, `overig`, `handtekening`, `uren`, `afleg_reden`, `TIMESTAMP`) VALUES
(15, 10, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-10 21:39:57');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `kabelchacklist`
--
ALTER TABLE `kabelchacklist`
  ADD PRIMARY KEY (`TABEL_ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `kabelchacklist`
--
ALTER TABLE `kabelchacklist`
  MODIFY `TABEL_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
