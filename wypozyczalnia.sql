-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Maj 2021, 12:46
-- Wersja serwera: 10.4.16-MariaDB
-- Wersja PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `wypozyczalnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `ID_klienta` int(11) NOT NULL,
  `Imie` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nazwisko` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PESEL` bigint(11) DEFAULT NULL,
  `Miejscowosc` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kod_Pocztowy` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`ID_klienta`, `Imie`, `Nazwisko`, `PESEL`, `Miejscowosc`, `Kod_Pocztowy`) VALUES
(14, 'Nikodem', 'Szubierski', 12312312312, 'Rzeszów', '12-345'),
(210, 'wdwa', 'dawdwd', 12312312312, 'wadwd', '12-312'),
(211, 'wdwa', 'dawdwd', 12312312312, 'wadwd', '12-312'),
(212, 'dawdaw', 'dwadw', 12312312312, 'wdawd', '12-312'),
(213, 'dawdaw', 'dwadw', 12312312312, 'wdawd', '12-312'),
(214, 'dawdaw', 'dwadw', 12312312312, 'wdawd', '12-312');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `placowki`
--

CREATE TABLE `placowki` (
  `ID_placowki` int(11) NOT NULL,
  `Miasto` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `placowki`
--

INSERT INTO `placowki` (`ID_placowki`, `Miasto`) VALUES
(1, 'Warszawa'),
(2, 'Rzeszow'),
(3, 'Krakow'),
(4, 'Torun');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE `samochody` (
  `ID_samochodu` int(11) NOT NULL,
  `Marka` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Model` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Cena` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`ID_samochodu`, `Marka`, `Model`, `Cena`) VALUES
(1, 'Audi', 'A4', 700),
(2, 'Audi', 'A6', 820),
(3, 'Audi', 'e-Tron GT', 1640),
(4, 'Audi', 'R8', 1400),
(5, 'Citroen', 'C5', 630),
(6, 'Hyundai', 'i20', 340),
(7, 'Nissan', 'GTR R35', 1580),
(8, 'Porsche', '911', 1240),
(9, 'Porsche', 'Taycan Turbo S', 1440),
(10, 'Tesla', 'Model S', 930),
(11, 'Toyota', 'Supra MK5', 1620),
(12, 'Volkswagen', 'Arteon', 920),
(13, 'Volkswagen', 'e-UP', 420);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `ID_zamowienia` int(11) NOT NULL,
  `ID_klienta` int(11) DEFAULT NULL,
  `ID_samochodu` int(11) DEFAULT NULL,
  `ID_placowki` int(11) DEFAULT NULL,
  `od` date DEFAULT NULL,
  `do` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`ID_zamowienia`, `ID_klienta`, `ID_samochodu`, `ID_placowki`, `od`, `do`) VALUES
(4, 14, 7, 2, '2021-05-08', '2021-05-31');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`ID_klienta`);

--
-- Indeksy dla tabeli `placowki`
--
ALTER TABLE `placowki`
  ADD PRIMARY KEY (`ID_placowki`);

--
-- Indeksy dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`ID_samochodu`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`ID_zamowienia`),
  ADD KEY `ID_klienta` (`ID_klienta`),
  ADD KEY `ID_samochodu` (`ID_samochodu`),
  ADD KEY `ID_placowki` (`ID_placowki`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `ID_klienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT dla tabeli `placowki`
--
ALTER TABLE `placowki`
  MODIFY `ID_placowki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `samochody`
--
ALTER TABLE `samochody`
  MODIFY `ID_samochodu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `ID_zamowienia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD CONSTRAINT `zamowienia_ibfk_1` FOREIGN KEY (`ID_klienta`) REFERENCES `klienci` (`ID_klienta`),
  ADD CONSTRAINT `zamowienia_ibfk_2` FOREIGN KEY (`ID_samochodu`) REFERENCES `samochody` (`ID_samochodu`),
  ADD CONSTRAINT `zamowienia_ibfk_3` FOREIGN KEY (`ID_placowki`) REFERENCES `placowki` (`ID_placowki`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
