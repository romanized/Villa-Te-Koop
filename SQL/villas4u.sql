-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 mei 2023 om 10:31
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `villas4u`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact_gegevens`
--

CREATE TABLE `contact_gegevens` (
  `ID` int(11) NOT NULL,
  `Naam` text NOT NULL,
  `Adres` text NOT NULL,
  `Telefoonnummer` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Vraag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `villas_indexpage`
--

CREATE TABLE `villas_indexpage` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `IMG` text NOT NULL,
  `SLIDEIMG1` text NOT NULL,
  `SLIDEIMG2` text NOT NULL,
  `SLIDEIMG3` text NOT NULL,
  `Indeling` text NOT NULL,
  `Locatie` text NOT NULL,
  `BID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `villas_indexpage`
--

INSERT INTO `villas_indexpage` (`ID`, `Name`, `IMG`, `SLIDEIMG1`, `SLIDEIMG2`, `SLIDEIMG3`, `Indeling`, `Locatie`, `BID`) VALUES
(1, 'Anna Lindhlaan 13', 'https://cloud.funda.nl/valentina_media/175/202/976_720x480.jpg', '', '', '', '', '', 1850000),
(2, 'Schumanlaan 13', 'https://cloud.funda.nl/valentina_media/175/175/415_720x480.jpg', '', '', '', '', '', 1290000),
(3, 'Utrechtsestraatweg 6', 'https://cloud.funda.nl/valentina_media/170/855/726_720x480.jpg', '', '', '', '', '', 1395000),
(4, 'Cattenbroekerdijk 2 a', 'https://cloud.funda.nl/valentina_media/168/664/675_720x480.jpg', '', '', '', '', '', 2295000),
(5, 'Oudelandseweg 22', 'https://cloud.funda.nl/valentina_media/175/204/453_720x480.jpg', '', '', '', '', '', 1150000),
(6, 'George Orwellweg 18', 'https://cloud.funda.nl/valentina_media/173/795/603_720x480.jpg', 'https://cloud.funda.nl/valentina_media/173/795/604_360x240.jpg', 'https://cloud.funda.nl/valentina_media/173/795/605_360x240.jpg', 'https://cloud.funda.nl/valentina_media/173/795/606_360x240.jpg', 'Prachtig ruime vrijstaande villa met hoogstaande afwerking in mooie woonwijk te Woerden. Vanuit dit gedeelte van Snel & Polanen is de A12 in 5 minuten te bereiken. Het station, de binnenstad en het winkelcentrum liggen op 5-10 minuten fietsafstand. ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2451.8953674448917!2d4.900406877028488!3d52.08163456859179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c679e686551f3d%3A0x36cef6803aae20ff!2sGeorge%20Orwellweg%2018%2C%203446%20ZG%20Woerden!5e0!3m2!1snl!2snl!4v1684836349119!5m2!1snl!2snl\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 1035000);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `villa_view`
--

CREATE TABLE `villa_view` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Image_1` text NOT NULL,
  `Image_2` text NOT NULL,
  `Image_3` text NOT NULL,
  `Indeling` text NOT NULL,
  `Locatie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `villa_view`
--

INSERT INTO `villa_view` (`ID`, `Name`, `Image_1`, `Image_2`, `Image_3`, `Indeling`, `Locatie`) VALUES
(6, 'George Orwellweg 18', 'https://cloud.funda.nl/valentina_media/173/795/604_360x240.jpg', 'https://cloud.funda.nl/valentina_media/173/795/605_360x240.jpg', 'https://cloud.funda.nl/valentina_media/173/795/606_360x240.jpg', 'Prachtig ruime vrijstaande villa met hoogstaande afwerking in mooie woonwijk te Woerden. Vanuit dit gedeelte van Snel & Polanen is de A12 in 5 minuten te bereiken. Het station, de binnenstad en het winkelcentrum liggen op 5-10 minuten fietsafstand. ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2451.8953674448917!2d4.900406877028488!3d52.08163456859179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c679e686551f3d%3A0x36cef6803aae20ff!2sGeorge%20Orwellweg%2018%2C%203446%20ZG%20Woerden!5e0!3m2!1snl!2snl!4v1684836349119!5m2!1snl!2snl\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contact_gegevens`
--
ALTER TABLE `contact_gegevens`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `villas_indexpage`
--
ALTER TABLE `villas_indexpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `villa_view`
--
ALTER TABLE `villa_view`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contact_gegevens`
--
ALTER TABLE `contact_gegevens`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `villas_indexpage`
--
ALTER TABLE `villas_indexpage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `villa_view`
--
ALTER TABLE `villa_view`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
