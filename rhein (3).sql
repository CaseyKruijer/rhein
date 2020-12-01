-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 01 dec 2020 om 11:25
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
-- Tabelstructuur voor tabel `hijskraangegevens`
--

CREATE TABLE `hijskraangegevens` (
  `TABEL_ID` int(255) NOT NULL,
  `banden` varchar(10) DEFAULT NULL,
  `stempels` varchar(10) DEFAULT NULL,
  `rupsen` varchar(10) DEFAULT NULL,
  `hoofdgiek_lengte` int(25) DEFAULT NULL,
  `mechanischesectie` int(25) DEFAULT NULL,
  `hulpgiek_lengte` int(25) DEFAULT NULL,
  `gieklengte_hoek` int(25) DEFAULT NULL,
  `hoofdgiek_hoek` decimal(10,0) DEFAULT NULL,
  `hulpgiek` decimal(10,0) DEFAULT NULL,
  `hijskabels` int(25) DEFAULT NULL,
  `RAZV` varchar(10) DEFAULT NULL,
  `EMBLMB` int(20) DEFAULT NULL,
  `bedrijfslast` varchar(10) DEFAULT NULL,
  `LMB` varchar(10) DEFAULT NULL,
  `proeflast` int(10) DEFAULT NULL,
  `afwijking` int(100) DEFAULT NULL,
  `ja` varchar(225) DEFAULT NULL,
  `nee` varchar(25) DEFAULT NULL,
  `TIMESTAMP` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `hijskraangegevens`
--

INSERT INTO `hijskraangegevens` (`TABEL_ID`, `banden`, `stempels`, `rupsen`, `hoofdgiek_lengte`, `mechanischesectie`, `hulpgiek_lengte`, `gieklengte_hoek`, `hoofdgiek_hoek`, `hulpgiek`, `hijskabels`, `RAZV`, `EMBLMB`, `bedrijfslast`, `LMB`, `proeflast`, `afwijking`, `ja`, `nee`, `TIMESTAMP`) VALUES
(13, 'tes1', 'tes2', 'tes3', 0, 0, 0, 0, '0', '0', 0, 'tes11', 0, 'tes13', 'tes15', 0, 0, 'tes17', 'tes18', '2020-11-24 00:44:07');

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
(44, 1, 2, 0, 4, '5', '6', 7, '8', '2020-11-24', '9', '10', '11', '00:00:12', '14', '2020-11-24 00:44:34'),
(45, 5, 4, 8, 10, '16', '19', 20, '90', '2020-11-28', '80', '100', '70', '00:00:04', '3', '2020-11-25 10:45:48'),
(46, 2, 1, 3, 7, '9', '5', 6, '3', '2020-11-29', '9', '0', '1', '00:00:06', '9', '2020-11-29 18:26:02');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `registreren`
--

CREATE TABLE `registreren` (
  `USER_ID` int(255) NOT NULL,
  `user` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  `CURRENTTIME` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `registreren`
--

INSERT INTO `registreren` (`USER_ID`, `user`, `password`, `role`, `CURRENTTIME`) VALUES
(1, 'admin', 'admin', 'admin', '2020-11-18 09:29:09'),
(2, 'test', 'test', 'tester', '2020-11-30 15:34:16');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `hijskraangegevens`
--
ALTER TABLE `hijskraangegevens`
  ADD PRIMARY KEY (`TABEL_ID`);

--
-- Indexen voor tabel `kabelchacklist`
--
ALTER TABLE `kabelchacklist`
  ADD PRIMARY KEY (`TABEL_ID`);

--
-- Indexen voor tabel `registreren`
--
ALTER TABLE `registreren`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `hijskraangegevens`
--
ALTER TABLE `hijskraangegevens`
  MODIFY `TABEL_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT voor een tabel `kabelchacklist`
--
ALTER TABLE `kabelchacklist`
  MODIFY `TABEL_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT voor een tabel `registreren`
--
ALTER TABLE `registreren`
  MODIFY `USER_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
