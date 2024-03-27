-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 14 Gru 2021, 14:36
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
