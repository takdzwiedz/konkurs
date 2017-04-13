-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Kwi 2017, 02:15
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `konkurs`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_user` int(10) NOT NULL,
  `name_field` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `surname_field` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `birth_date_field` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `sex_field` varchar(10) COLLATE utf8_polish_ci NOT NULL,
  `e_mail_field` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `phone_field` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `adress_to_send_prize` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `id_pytania` int(10) DEFAULT NULL,
  `first_question` varchar(100) COLLATE utf8_polish_ci DEFAULT NULL,
  `second_question` varchar(100) COLLATE utf8_polish_ci DEFAULT NULL,
  `agreement_tick` tinyint(1) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_user`, `name_field`, `surname_field`, `birth_date_field`, `sex_field`, `e_mail_field`, `phone_field`, `adress_to_send_prize`, `id_pytania`, `first_question`, `second_question`, `agreement_tick`, `date`) VALUES
(12, 'Artur', 'Kacprzak', '1234-44-44', 'female', 'jan.wszedyrowny@gmail.com', '+48 694 473 288', 'ul. Boya-Żeleńskiego 4a/90 Warszawa; 00-621', NULL, '2 432 098', '7', NULL, '0000-00-00'),
(30, 'Przemek', 'Wlodkowski', '1980-01-01', 'male', 'jan.wszedyrowny@gmail.com', '1666666666', 'ul. Boya-Żeleńskiego 4a/90 Warszawa; 00-621', NULL, '1 748 916', '7', NULL, '2017-04-11'),
(31, 'Milena', 'Sobek', '1992-04-05', 'female', 'milena@super.pl', '+48666666666', 'Adres', NULL, '1 748 916', '11', NULL, '2017-04-12'),
(32, 'Milena', 'Sobek', '1992-04-05', 'female', 'kubel@gmail.com', '+48444444555', 'Adres', NULL, '931 321', '7', NULL, '2017-04-12'),
(33, 'Pola', 'Kacprzal', '1997-09-05', 'female', 'pola@ekstra.pl', '+48333222111', 'Drugi Adres', NULL, '1 748 916', '5', NULL, '2017-04-12'),
(34, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'arni@com.pl', '+53123456789', 'Trzeci Adres', NULL, '1 748 916', '7', NULL, '2017-04-12'),
(35, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'arni@com.pl', '+53123456789', 'Trzeci Adres', NULL, '1 748 916', '7', NULL, '2017-04-12'),
(36, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'arni@com.pl', '+53123456789', 'Trzeci Adres', NULL, '1 748 916', '7', NULL, '2017-04-12'),
(37, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'arni@com.pl', '+53123456789', 'Trzeci Adres', NULL, '1 748 916', '7', NULL, '2017-04-12'),
(38, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'arni@com.pl', '+53123456789', 'Trzeci Adres', NULL, '1 748 916', '7', NULL, '2017-04-12'),
(39, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'arni@com.pl', '+53123456789', 'Trzeci Adres', NULL, '1 748 916', '7', NULL, '2017-04-12'),
(40, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'arni@com.pl', '+50333222111', 'Trzeci Adres', NULL, '931 321', '11', NULL, '2017-04-12'),
(41, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'arni@com.pl', '+50123456789', 'Trzeci Adres', NULL, '1 748 916', '7', NULL, '2017-04-12'),
(42, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'arni@com.pl', '+50123456789', 'Trzeci Adres', NULL, '1 748 916', '7', NULL, '2017-04-12'),
(43, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'arni@com.pl', '+50123456789', 'Trzeci Adres', NULL, '1 748 916', '7', NULL, '2017-04-12'),
(44, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'arni@com.pl', '+50123456789', 'Trzeci Adres', NULL, '1 748 916', '7', NULL, '2017-04-12'),
(45, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'arni@com.pl', '+50123456789', 'Trzeci Adres', NULL, '1 748 916', '7', NULL, '2017-04-12'),
(46, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'jan.wszedyrowny@gmail.com', '+50444444555', 'Trzeci Adres', NULL, '2 432 098', ' 5', NULL, '2017-04-12'),
(47, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'jan.wszedyrowny@gmail.com', '+50444444555', 'Trzeci Adres', NULL, '2 432 098', ' 5', NULL, '2017-04-12'),
(48, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'jan.wszedyrowny@gmail.com', '+50444444555', 'Trzeci Adres', NULL, '2 432 098', ' 5', NULL, '2017-04-12'),
(49, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'jan.wszedyrowny@gmail.com', '+50444444555', 'Trzeci Adres', NULL, '2 432 098', ' 5', NULL, '2017-04-12'),
(50, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'jan.wszedyrowny@gmail.com', '+50444444555', 'Trzeci Adres', NULL, '2 432 098', ' 5', NULL, '2017-04-12'),
(51, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'jan.wszedyrowny@gmail.com', '+50444444555', 'Trzeci Adres', NULL, '2 432 098', ' 5', NULL, '2017-04-12'),
(52, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'jan.wszedyrowny@gmail.com', '+50444444555', 'Trzeci Adres', NULL, '2 432 098', ' 5', NULL, '2017-04-12'),
(53, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'jan.wszedyrowny@gmail.com', '+50123456789', 'Trzeci Adres', NULL, '1 748 916', '7', NULL, '2017-04-12'),
(54, 'Arnold', 'Szwarceneger', '1981-09-06', 'male', 'jan.wszedyrowny@gmail.com', '+50123456789', 'Trzeci Adres', NULL, '1 748 916', '7', NULL, '2017-04-12');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
