-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Paź 2018, 15:11
-- Wersja serwera: 10.1.35-MariaDB
-- Wersja PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `apteka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `formy_podania`
--

CREATE TABLE `formy_podania` (
  `Id` int(11) NOT NULL,
  `forma` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `formy_podania`
--

INSERT INTO `formy_podania` (`Id`, `forma`) VALUES
(1, 'tabletki'),
(2, 'syrop'),
(3, 'maść'),
(4, 'aerozol'),
(5, 'pastylki do ssania');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `leki`
--

CREATE TABLE `leki` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `dawka` int(11) NOT NULL,
  `substancja_czynna` varchar(30) NOT NULL,
  `zastosowanie` varchar(20) NOT NULL,
  `forma_podania` int(11) NOT NULL,
  `cena` decimal(5,2) NOT NULL,
  `ilosc_w_magazynie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `leki`
--

INSERT INTO `leki` (`id`, `nazwa`, `dawka`, `substancja_czynna`, `zastosowanie`, `forma_podania`, `cena`, `ilosc_w_magazynie`) VALUES
(1, 'Linopam', 8, 'Liphaxonylum', 'biegunka', 1, '7.99', 12),
(2, 'Solfinadol', 10, 'Sulfacinolum', 'gorączka', 2, '19.95', 24),
(3, 'Xanaren ', 2000, 'Xanaroxium Oxidum', 'ból stawów', 3, '37.50', 41),
(4, 'Vitaminorin Plus', 12, 'Acidum Ascorbicum', 'witaminy', 1, '4.50', 68),
(5, 'Aspenodal Forte', 100, 'Aspinohentioplyxum', 'ból gardła', 5, '9.80', 27),
(6, 'Raucitasin', 100, 'Tasinerauthinum', 'chrypka', 5, '9.90', 8),
(7, 'Stomachusolvan', 80, 'Acidum Zitropentathexum', 'niestrawność', 1, '15.60', 32),
(8, 'Febrisilan', 500, 'Acetaminofenum', 'gorączka', 1, '14.90', 45),
(9, 'Calidusan Max', 600, 'Paracetamolum', 'gorączka', 1, '18.20', 36),
(10, 'Decirrum', 10, 'Cetiriphyzinum', 'katar', 1, '21.50', 38),
(11, 'Nasusorin', 15, 'Dolphiphyzinum', 'katar', 1, '17.00', 11),
(12, 'Inflantin', 200, 'Oxythetradiflantheminum', 'wzdęcia', 2, '12.50', 48),
(13, 'Astargin', 50, 'Diphloxyoxidum', 'kaszel', 2, '12.90', 58),
(14, 'Amzotrox', 500, 'Amzithromycinum', 'antybiotyk', 2, '47.90', 2),
(15, 'Asferaldin', 600, 'Asferyxothaldinum', 'kaszel', 2, '15.90', 8),
(16, 'Bactriomycin', 200, 'Tridethoprinum', 'antybiotyk', 1, '56.20', 3),
(17, 'Spirorin', 50, 'Asferyxothaldinum', 'kaszel', 1, '20.20', 6),
(18, 'Cantedroxil', 300, 'Cefadroxilum', 'antybiotyk', 2, '35.50', 0),
(19, 'Mucolastin', 200, 'Thaumucothinum', 'kaszel', 2, '18.90', 18),
(20, 'Orofacein Max', 20, 'Thaumucothinum', 'kaszel', 2, '8.20', 1),
(21, 'Pulmonolan Extra', 150, 'Mithryloxydum', 'kaszel', 2, '12.99', 16),
(22, 'Biocuzol', 200, 'Celofazolinum', 'antybiotyk', 4, '38.50', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `formy_podania`
--
ALTER TABLE `formy_podania`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `leki`
--
ALTER TABLE `leki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `formy_podania`
--
ALTER TABLE `formy_podania`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `leki`
--
ALTER TABLE `leki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
