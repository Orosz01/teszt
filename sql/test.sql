-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Okt 14. 13:13
-- Kiszolgáló verziója: 10.4.21-MariaDB
-- PHP verzió: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `test`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `adminok`
--

CREATE TABLE `adminok` (
  `Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `adminok`
--

INSERT INTO `adminok` (`Id`) VALUES
(5);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `hianyzok`
--

CREATE TABLE `hianyzok` (
  `Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ulesrend`
--

CREATE TABLE `ulesrend` (
  `Id` int(10) NOT NULL,
  `nev` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `sor` tinyint(3) NOT NULL,
  `oszlop` tinyint(3) NOT NULL,
  `jelszo` varchar(32) NOT NULL,
  `felhasznalo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `ulesrend`
--

INSERT INTO `ulesrend` (`Id`, `nev`, `sor`, `oszlop`, `jelszo`, `felhasznalo`) VALUES
(1, 'Kulhanek László', 1, 1, '', ''),
(2, 'Molnár Gergő Máté', 2, 1, '', ''),
(3, 'Bakcsányi Dominik', 2, 2, '', ''),
(4, 'Füstös Lóránt', 2, 3, '', ''),
(5, 'Orosz Zsolt', 2, 4, '96d4628ff835c9cfd00fea4e640fd003', 'Szajter'),
(6, 'Harsányi László', 2, 5, '', ''),
(7, 'Kereszturi Kevin', 3, 1, '', ''),
(8, 'Juhász Levente', 3, 2, '', ''),
(9, 'Szabó László', 3, 3, '', ''),
(10, 'Sütő Dániel', 3, 4, '', ''),
(11, 'Détári Klaudia', 3, 5, '', ''),
(12, 'Fazekas Miklós Adrián', 4, 1, '', ''),
(13, '', 4, 2, '', ''),
(14, 'Gombos János', 4, 3, '', ''),
(15, 'Tanár', 4, 4, '', '');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `adminok`
--
ALTER TABLE `adminok`
  ADD PRIMARY KEY (`Id`);

--
-- A tábla indexei `ulesrend`
--
ALTER TABLE `ulesrend`
  ADD PRIMARY KEY (`Id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `adminok`
--
ALTER TABLE `adminok`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT a táblához `ulesrend`
--
ALTER TABLE `ulesrend`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `adminok`
--
ALTER TABLE `adminok`
  ADD CONSTRAINT `id` FOREIGN KEY (`Id`) REFERENCES `ulesrend` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
