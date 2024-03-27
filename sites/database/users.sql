-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 14 Gru 2021, 14:34
-- Wersja serwera: 5.7.31
-- Wersja PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `users`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `stats`
--

DROP TABLE IF EXISTS `stats`;
CREATE TABLE IF NOT EXISTS `stats` (
  `fuel` decimal(10,2) NOT NULL,
  `distance` decimal(10,2) NOT NULL,
  `money` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `userid` int(11) NOT NULL,
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `stats`
--

INSERT INTO `stats` (`fuel`, `distance`, `money`, `date`, `userid`) VALUES
('50.00', '400.00', '120.00', '2021-11-21', 1),
('30.00', '280.00', '150.00', '2021-11-11', 1),
('12.00', '12.00', '12.00', '0001-11-11', 6),
('12.00', '12.00', '11.00', '1111-11-11', 6),
('50.00', '512.00', '200.00', '2021-10-10', 5),
('35.00', '311.00', '171.00', '2021-10-25', 5),
('120.00', '1400.00', '400.00', '2021-11-26', 5),
('10.00', '70.00', '40.00', '2021-11-15', 5),
('5.00', '35.00', '19.88', '2021-11-27', 5),
('50.00', '500.00', '230.55', '2021-11-27', 5),
('10.00', '140.00', '55.00', '2021-11-29', 5),
('50.00', '800.00', '295.00', '2021-11-22', 8),
('30.00', '432.00', '177.00', '2021-12-22', 8);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users_info`
--

DROP TABLE IF EXISTS `users_info`;
CREATE TABLE IF NOT EXISTS `users_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users_info`
--

INSERT INTO `users_info` (`id`, `login`, `email`, `password`) VALUES
(1, 'kapsel99', 'mati3150@gmail.com', '123123'),
(2, 'kapsel123123', 'leonidasleonidas05@gmail.com', '$2y$10$5k39UaKEV8.seUu5dFMnTeFycRz7VsFsYp7guO0MR5jUGwMXcNsXO'),
(3, 'mateuszfree', 'mateuszmateusz@yahoo.com', '$2y$10$gMr5IMhMTtFmeYQ7BJKOBe6SZu04q/Nwvl2eaWFD9Q0RYI.RWCndK'),
(4, 'testowyuzytkownik', 'user@gmail.com', '$2y$10$/Q5xEJMcE0jKtHmfS.EQZOwyzcD.2G0RFbr0JI3sgthtcqSOjj30G'),
(5, 'mateusz', 'mateusz@mateusz.com', '$2y$10$t0IpR0heZyDPPpl5Sq3TBO03sAajG2ytMJ5KTvhXsIpR3KKdPjXr.'),
(6, 'kapsel999111', 'kapsel@gmail.com', '$2y$10$zCWOowz74fIfVHXdkAnzR.65Cdfch4Wv8eQSCJn9svtW85K8QWReu'),
(7, 'anothermateusz', 'anothermateusz@gmail.com', '$2y$10$s0lk.85iPUoIVmqrJSKIZeWo0jnIitI5bOfbXDVmgb38.dnpfLsAq'),
(8, 'finalnytest', 'finalnytest@gmail.com', '$2y$10$OpsYdKkjhB3Lx.KR4bMv0.GBZPdpWr3o4e.M1uTJFmAFlVockgkl6');

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `stats`
--
ALTER TABLE `stats`
  ADD CONSTRAINT `stats_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users_info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
