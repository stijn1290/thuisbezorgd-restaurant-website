-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 12 apr 2024 om 13:05
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafetaria sema`
--
CREATE DATABASE IF NOT EXISTS `cafetaria sema` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cafetaria sema`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contactformulier`
--

DROP TABLE IF EXISTS `contactformulier`;
CREATE TABLE `contactformulier` (
  `naam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bericht` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `contactformulier`
--

INSERT INTO `contactformulier` (`naam`, `email`, `bericht`, `id`) VALUES
('Levi Eeftink', 'semastore@admin.nl', 'Geachte,', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `eetproducten`
--

DROP TABLE IF EXISTS `eetproducten`;
CREATE TABLE `eetproducten` (
  `id` int(255) NOT NULL,
  `productnaam` varchar(255) NOT NULL,
  `prijs` varchar(255) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `afbeelding` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `eetproducten`
--

INSERT INTO `eetproducten` (`id`, `productnaam`, `prijs`, `omschrijving`, `afbeelding`) VALUES
(35, 'Sashimi mix', '18.50', 'een lekkere sushi roll', 'img\\image5.png'),
(36, 'California roll', '12.00', 'Een populaire roll gemaakt met krab, komkommer en avocado.', 'img/image 8.png'),
(37, 'Rainbow roll', '15.50', 'Een kleurrijke roll met verschillende soorten vis en avocado bovenop.', 'img/image 9.png'),
(38, 'Dragon roll', '14.00', 'Een roll met gefrituurde garnalen en avocado, bedekt met plakjes avocado.', 'img\\DragonRoll.jpg'),
(39, 'Spicy tuna roll', '10.50', 'Een pittige roll gemaakt met tonijn en sriracha saus.', 'img/spicytuna.jpg'),
(40, 'Tempura roll', '13.50', 'Een roll met gefrituurde garnalen en groenten, geserveerd met sojasaus.', 'img/tempuraroll.jpg'),
(41, 'Salmon nigiri', '5.00', 'Verse zalm op een bolletje sushirijst.', 'img/salmonnigiri.jpg'),
(42, 'Vegetable maki', '8.50', 'Een roll gevuld met diverse groenten zoals komkommer, avocado en wortel.', 'img/vegetablemaki.jpg'),
(43, 'Unagi nigiri', '6.50', 'Geroosterde paling op een bolletje sushirijst, bestreken met zoete saus.', 'img/unagi.jpg'),
(44, 'Tuna sashimi', '20.00', 'Dun gesneden verse tonijn, perfect als voorgerecht.', 'img/tuna.jpg'),
(46, 'cola', '1,50', 'verfrissende cola met prik', 'img/image 14.png'),
(47, 'sprite', '1,75', 'sprankelende citroen-limoen frisdrank', 'img/image 15.jpg'),
(48, 'fanta', '1,60', 'zoete sinaasappel frisdrank', 'img/fanta.png'),
(49, 'ice tea', '2,00', 'verfrissende ijsthee met citroen', 'img/ice tea.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`password`, `username`, `rol`, `id`) VALUES
('poep', 'olifant', 'user', 1),
('5671209', 'adminsakura1', 'admin', 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contactformulier`
--
ALTER TABLE `contactformulier`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `eetproducten`
--
ALTER TABLE `eetproducten`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contactformulier`
--
ALTER TABLE `contactformulier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `eetproducten`
--
ALTER TABLE `eetproducten`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
