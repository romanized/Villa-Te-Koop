-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 mei 2023 om 11:13
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
(1, 'Anna Lindhlaan 13', 'https://cloud.funda.nl/valentina_media/175/202/976_720x480.jpg', 'https://cloud.funda.nl/valentina_media/175/172/345_720x480.jpg', 'https://cloud.funda.nl/valentina_media/175/172/347_720x480.jpg', 'https://cloud.funda.nl/valentina_media/175/172/346_720x480.jpg', 'Super-de-luxe VILLA van alle gemakken voorzien en nul-op-de-meter! Deze unieke, in 2020 onder architectuur gebouwde, vrijstaande moderne villa is gunstig gelegen op een ruim perceel in het geliefde Villapark Waterrijk Woerden.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2451.5372609092146!2d4.907371277047116!3d52.08815306811189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c679e2be98ddc1%3A0xcb0728e0c4c2dce2!2sAnna%20Lindhlaan%2013%2C%203446%20HG%20Woerden!5e0!3m2!1snl!2snl!4v1684917859113!5m2!1snl!2snl\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 1850000),
(2, 'Schumanlaan 13', 'https://cloud.funda.nl/valentina_media/175/175/415_720x480.jpg', 'https://cloud.funda.nl/valentina_media/175/248/384_720x480.jpg', 'https://cloud.funda.nl/valentina_media/175/248/398_720x480.jpg', 'https://cloud.funda.nl/valentina_media/175/248/385_720x480.jpg', 'Schitterend gelegen deze vrijstaande woning aan een rustige straat en omgeven van vrijstaande woningen in de Villawijk \"Waterrijk\". De onder architectuur gebouwde vrijstaande woning heeft een lessenaarsdak, handvorm gevelsteen in twee formaten, is zeer goed onderhouden, heeft een veranda aan de woonkamer, een loggia op de eerste verdieping en balkon op de tweede verdieping. ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2451.6540164106264!2d4.90756027704702!3d52.08602786826838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c679e32f7ccce5%3A0xd1e3ebce47b0d5e9!2sSchumanlaan%2013%2C%203446%20HE%20Woerden!5e0!3m2!1snl!2snl!4v1684918713597!5m2!1snl!2snl\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 1290000),
(3, 'Hogedijk 16 A', 'https://cloud.funda.nl/valentina_media/175/285/367_720x480.jpg', 'https://cloud.funda.nl/valentina_media/175/285/369_720x480.jpg', 'https://cloud.funda.nl/valentina_media/175/285/368_720x480.jpg', 'https://cloud.funda.nl/valentina_media/175/285/366_720x480.jpg', 'Bent u op zoek naar de perfecte plek om uw bedrijf aan huis te starten? Of bent u simpelweg toe aan rust en ruimte? Deze vrijstaande woning is precies wat u zoekt! U geniet hier het beste van twee werelden.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2445.8166131821818!2d4.8129444770517695!3d52.192206060446274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5df46ee759209%3A0x2e69099582766836!2sHogedijk%2016A%2C%202435%20ND%20Zevenhoven!5e0!3m2!1snl!2snl!4v1684919177322!5m2!1snl!2snl\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 1195000),
(4, 'Waver 51 C', 'https://cloud.funda.nl/valentina_media/175/204/836_720x480.jpg', 'https://cloud.funda.nl/valentina_media/175/204/840_720x480.jpg', 'https://cloud.funda.nl/valentina_media/175/204/843_720x480.jpg', 'https://cloud.funda.nl/valentina_media/175/204/842_720x480.jpg', 'Mooi landelijk gelegen royaal VRIJSTAANDE VILLA met MODERN BIJGEBOUW, HOBBYRUIMTE, GASTENVERBLIJF/MANTELZORGWONING en AANMEERPLEK voor een boot op een perceel van ruim 4.700m2. ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2441.2929503625232!2d4.92410827705543!3d52.27438335438479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c60b3931563dfb%3A0xfb9f1c46b5b3bff6!2sWaver%2051%2C%201191%20KJ%20Ouderkerk%20aan%20de%20Amstel!5e0!3m2!1snl!2snl!4v1684919573395!5m2!1snl!2snl\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 2295000),
(5, 'Bachlaan 2', 'https://cloud.funda.nl/valentina_media/175/245/408_720x480.jpg', 'https://cloud.funda.nl/valentina_media/175/245/419_720x480.jpg', 'https://cloud.funda.nl/valentina_media/175/245/444_720x480.jpg', 'https://cloud.funda.nl/valentina_media/175/245/421_720x480.jpg', 'Imposante, zeer ruime villa op een prachtige locatie! Enerzijds grenzend aan en uitkijkend op het Nollebos, waardoor u zo naar het strand en de boulevard loopt en anderzijds uitkijkend over de landerijen richting de duinen van Dishoek. In de avond heeft u vanuit de voorzijde vrij zicht op de zonsondergang boven de duinen.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.963334740006!2d3.5411371770191207!3d51.45882961424986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c499d4df19f31f%3A0xf4905803a4ebb72!2sBachlaan%202%2C%204384%20LR%20Vlissingen!5e0!3m2!1snl!2snl!4v1684919331552!5m2!1snl!2snl\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 1950000),
(6, 'George Orwellweg 18', 'https://cloud.funda.nl/valentina_media/173/795/603_720x480.jpg', 'https://cloud.funda.nl/valentina_media/173/795/604_360x240.jpg', 'https://cloud.funda.nl/valentina_media/173/795/605_360x240.jpg', 'https://cloud.funda.nl/valentina_media/173/795/606_360x240.jpg', 'Prachtig ruime vrijstaande villa met hoogstaande afwerking in mooie woonwijk te Woerden. Vanuit dit gedeelte van Snel & Polanen is de A12 in 5 minuten te bereiken. Het station, de binnenstad en het winkelcentrum liggen op 5-10 minuten fietsafstand. ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2451.8953674448917!2d4.900406877028488!3d52.08163456859179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c679e686551f3d%3A0x36cef6803aae20ff!2sGeorge%20Orwellweg%2018%2C%203446%20ZG%20Woerden!5e0!3m2!1snl!2snl!4v1684836349119!5m2!1snl!2snl\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 1035000);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
