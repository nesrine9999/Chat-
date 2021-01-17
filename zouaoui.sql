-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 13 oct. 2019 à 21:44
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `zouaoui`
--

-- --------------------------------------------------------

--
-- Structure de la table `nesrine`
--

DROP TABLE IF EXISTS `nesrine`;
CREATE TABLE IF NOT EXISTS `nesrine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(120) NOT NULL,
  `message` varchar(120) NOT NULL,
  `nbrlike` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `nesrine`
--

INSERT INTO `nesrine` (`id`, `pseudo`, `message`, `nbrlike`) VALUES
(1, 'nesrine', 'bonjour', 2),
(2, 'bn', 'bn', 0),
(3, 'pers', 'msg', 4),
(5, 'bilel', 'salut', 1),
(6, 'nes', 'bye', 2),
(7, 'cc cv', 'ahmed', 0),
(8, 'mm', 'nes', 0),
(9, 'fh', 'kk', 0),
(10, 'fhfj', 'kkj', 0),
(11, 'dacc', 'bhi', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
