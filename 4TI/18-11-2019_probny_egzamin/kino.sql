-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 17 Lis 2019, 23:40
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kino`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy`
--

CREATE TABLE `filmy` (
  `id` int(11) NOT NULL,
  `tytul` varchar(60) NOT NULL,
  `rezyser` varchar(30) NOT NULL,
  `czas_trwania` time NOT NULL,
  `gatunek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `filmy`
--

INSERT INTO `filmy` (`id`, `tytul`, `rezyser`, `czas_trwania`, `gatunek`) VALUES
(7, 'Indiana Jones i ostatnia krucjata', 'Steven Spielberg', '02:07:00', 1),
(8, 'Park Jurajski', 'Steven Spielberg', '02:07:00', 6),
(9, 'Władca Pierścieni: Powrót króla', 'Peter Jackson', '03:21:00', 3),
(10, 'Król Lew', 'Roger Allers', '01:29:00', 4),
(11, 'Gladiator', 'Ridley Scott', '02:35:00', 5),
(12, 'Avengers: Wojna bez granic', 'Joe Russo', '02:29:00', 6),
(13, 'Szeregowiec Ryan', 'Steven Spielberg', '02:50:00', 7),
(14, 'Gwiezdne wojny: Część V - Imperium kontratakuje', 'Irvin Kershner', '02:04:00', 6),
(15, 'Jak wytresować smoka', 'Chris Sanders', '01:38:00', 4),
(16, 'Szósty zmysł', 'M. Night Shyamalan', '01:47:00', 8),
(17, 'Skrzypek na dachu', 'Norman Jewison', '03:01:00', 9),
(18, 'Upiór w operze', 'Joel Schumacher', '02:23:00', 9),
(19, 'Blues Brothers', 'John Landis', '02:13:00', 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gatunki`
--

CREATE TABLE `gatunki` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `gatunki`
--

INSERT INTO `gatunki` (`id`, `nazwa`) VALUES
(1, 'Przygodowy'),
(2, 'Komediodramat'),
(3, 'Fantasy'),
(4, 'Animowany'),
(5, 'Dramat historyczny'),
(6, 'Sci-Fi'),
(7, 'Wojenny'),
(8, 'Thriller'),
(9, 'Musical'),
(10, 'Komedia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sale`
--

CREATE TABLE `sale` (
  `numer` int(11) NOT NULL,
  `liczba_miejsc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `sale`
--

INSERT INTO `sale` (`numer`, `liczba_miejsc`) VALUES
(1, 40),
(2, 70),
(3, 100),
(4, 40),
(5, 70);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `seanse`
--

CREATE TABLE `seanse` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `godzina` time NOT NULL,
  `film` int(11) NOT NULL,
  `sala` int(11) NOT NULL,
  `cena_biletu` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `seanse`
--

INSERT INTO `seanse` (`id`, `data`, `godzina`, `film`, `sala`, `cena_biletu`) VALUES
(1, '2019-10-01', '18:00:00', 15, 2, '20.00'),
(2, '2019-11-05', '13:00:00', 15, 4, '20.00'),
(3, '2019-10-02', '10:30:00', 10, 1, '18.00'),
(4, '2019-10-03', '12:15:00', 10, 2, '18.00'),
(5, '2019-11-19', '16:00:00', 10, 3, '18.00'),
(6, '2019-10-01', '15:50:00', 8, 3, '25.00'),
(7, '2019-11-05', '20:20:00', 18, 3, '30.00'),
(8, '2019-12-12', '17:00:00', 19, 5, '25.00'),
(9, '2019-12-13', '17:00:00', 19, 5, '25.00'),
(10, '2019-12-18', '21:00:00', 19, 2, '25.00'),
(11, '2019-11-25', '21:00:00', 18, 4, '30.00'),
(12, '2019-12-21', '16:30:00', 8, 4, '25.00'),
(13, '2019-10-02', '18:30:00', 11, 2, '22.00'),
(14, '2019-11-26', '19:00:00', 11, 1, '22.00'),
(15, '2019-12-30', '12:00:00', 14, 2, '24.00'),
(16, '2019-11-28', '14:00:00', 14, 3, '24.00'),
(17, '2019-12-30', '19:20:00', 14, 4, '24.00'),
(18, '2019-11-23', '14:00:00', 14, 3, '24.00');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `filmy`
--
ALTER TABLE `filmy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gatunek` (`gatunek`);

--
-- Indeksy dla tabeli `gatunki`
--
ALTER TABLE `gatunki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`numer`);

--
-- Indeksy dla tabeli `seanse`
--
ALTER TABLE `seanse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film` (`film`),
  ADD KEY `sala` (`sala`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `filmy`
--
ALTER TABLE `filmy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT dla tabeli `gatunki`
--
ALTER TABLE `gatunki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `sale`
--
ALTER TABLE `sale`
  MODIFY `numer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `seanse`
--
ALTER TABLE `seanse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `filmy`
--
ALTER TABLE `filmy`
  ADD CONSTRAINT `filmy_ibfk_1` FOREIGN KEY (`gatunek`) REFERENCES `gatunki` (`id`);

--
-- Ograniczenia dla tabeli `seanse`
--
ALTER TABLE `seanse`
  ADD CONSTRAINT `seanse_ibfk_1` FOREIGN KEY (`film`) REFERENCES `filmy` (`id`),
  ADD CONSTRAINT `seanse_ibfk_2` FOREIGN KEY (`sala`) REFERENCES `sale` (`numer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
