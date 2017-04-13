-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Kwi 2017, 10:55
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
-- Struktura tabeli dla tabeli `kody`
--

CREATE TABLE `kody` (
  `id_kodu` int(20) NOT NULL,
  `kod` varchar(12) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kody`
--

INSERT INTO `kody` (`id_kodu`, `kod`) VALUES
(1, '2147483647'),
(2, '2147483647'),
(3, '2147483647'),
(4, '0'),
(5, '2147483647'),
(6, '2147483647'),
(7, '2147483647'),
(8, '2147483647'),
(9, '2147483647'),
(10, '2147483647'),
(11, '2147483647'),
(12, '2147483647'),
(13, '2147483647'),
(15, '2147483647'),
(16, '2147483647'),
(18, '2147483647'),
(19, '2147483647'),
(20, '2147483647'),
(21, '2147483647'),
(22, '2147483647'),
(23, '2147483647'),
(24, '2147483647'),
(25, '2147483647'),
(26, '2147483647'),
(27, '2147483647'),
(28, '2147483647'),
(29, '2147483647'),
(30, '2147483647'),
(31, '2147483647'),
(32, '2147483647'),
(33, '2147483647'),
(34, '2147483647'),
(35, '2147483647'),
(36, '2147483647'),
(37, '2147483647'),
(38, '2147483647'),
(39, '2147483647'),
(40, '2147483647'),
(41, '2147483647'),
(42, '2147483647'),
(43, '2147483647'),
(44, '2147483647'),
(45, '2147483647'),
(46, '2147483647'),
(47, '2147483647'),
(48, '2147483647'),
(49, '2147483647'),
(50, '0'),
(51, '0'),
(52, '0'),
(53, '0'),
(54, '0'),
(55, '2147483647'),
(56, '2147483647'),
(57, '2147483647'),
(58, '2147483647'),
(59, '2147483647'),
(60, '2147483647'),
(61, '2147483647'),
(62, '2147483647'),
(63, '2147483647'),
(64, '2147483647'),
(65, '2147483647'),
(66, '2147483647'),
(67, '2147483647'),
(68, '2147483647'),
(69, '2147483647'),
(70, '2147483647'),
(71, '2147483647'),
(72, '2147483647'),
(73, '2147483647'),
(74, '2147483647'),
(75, '2147483647'),
(76, '2147483647'),
(77, '2147483647'),
(78, '2147483647'),
(79, '2147483647'),
(80, '2147483647'),
(81, '2147483647'),
(82, '2147483647'),
(83, '2147483647'),
(84, '2147483647'),
(85, '2147483647'),
(86, '2147483647'),
(87, '2147483647'),
(88, '2147483647'),
(89, '2147483647'),
(90, '138726357162'),
(91, '190087133645'),
(92, '942376936251'),
(93, '367077356777'),
(94, '570050233895'),
(95, '9f4ea2025882'),
(96, 'c86896a783ec'),
(97, '3f0991543685'),
(98, 'fa573f1b8920'),
(99, 'b2f40387b022'),
(100, '6324a966ddbc'),
(101, '1b360890865d'),
(102, '50f1152f477d'),
(103, '4221d2e44356'),
(104, '373bed523c61'),
(105, '1ede5563961c'),
(106, '3ce462faa30d'),
(107, '47eb79fa74dc'),
(108, '90db71f74335'),
(109, '185e95f3c737'),
(110, 'eb76ebe8532a'),
(111, '56b9791da674'),
(112, 'c78bd54ea341'),
(113, '06b345039de3'),
(114, 'b8ed0104511c'),
(115, 'dbad61d15481'),
(116, '548282b8667e'),
(117, '40f17662d40c'),
(118, 'e616cd3594a3'),
(119, '89338df1c355'),
(120, '80d2e40592de'),
(121, '54cf25b78f24'),
(122, '56e6ad8e988d'),
(123, '3dd2fba73786'),
(124, '682bd0e47da2'),
(125, '4b2cd82c6cbb'),
(126, '4079284dcafd'),
(127, 'a62f1e4565a5'),
(128, '5e44954fbe55'),
(129, '2e94ab92df89'),
(130, '47bf7fa710d2'),
(131, '049329b5b9f1'),
(132, 'a34789e5c3c0'),
(133, '674a4dea4f0a'),
(134, '08ca7dd436a2');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `kody`
--
ALTER TABLE `kody`
  ADD PRIMARY KEY (`id_kodu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kody`
--
ALTER TABLE `kody`
  MODIFY `id_kodu` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
