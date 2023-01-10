-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 10 jan 2023 om 11:37
-- Serverversie: 5.7.36
-- PHP-versie: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-pdo-crud-toets`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dureauto`
--

DROP TABLE IF EXISTS `dureauto`;
CREATE TABLE IF NOT EXISTS `dureauto` (
  `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Merk` varchar(200) NOT NULL,
  `Model` varchar(200) NOT NULL,
  `Topsnelheid` smallint(4) NOT NULL,
  `Prijs` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `dureauto`
--

INSERT INTO `dureauto` (`Id`, `Merk`, `Model`, `Topsnelheid`, `Prijs`) VALUES
(19, 'Koenigsegg', 'CCXR Trevita', 401, '4000000'),
(12, 'Bugatti', 'La vioture noire', 420, '16500000'),
(17, 'Bugatti', 'EB110', 390, '7500000'),
(16, 'Rolls-Royce', 'Swaptail', 250, '10960000'),
(18, 'Mercedes-Benz', 'Maybach Exelero', 350, '6700000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
