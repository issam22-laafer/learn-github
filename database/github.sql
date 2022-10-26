-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 26 oct. 2022 à 22:06
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `github`
--

-- --------------------------------------------------------

--
-- Structure de la table `userr`
--

DROP TABLE IF EXISTS `userr`;
CREATE TABLE IF NOT EXISTS `userr` (
  `namee` varchar(22) DEFAULT NULL,
  `lastname` varchar(22) DEFAULT NULL,
  `username` varchar(22) DEFAULT NULL,
  `email` varchar(22) DEFAULT NULL,
  `passwordd` varchar(22) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `userr`
--

INSERT INTO `userr` (`namee`, `lastname`, `username`, `email`, `passwordd`) VALUES
('zadza', 'azdza', 'azda', 'zadaz@dsfqsd', 'zdzd'),
('zadza', 'azdz', 'zad', 'zad@dzad', 'zad'),
('issam', 'laafar', 'issam22', 'issam508@gmail.com', 'hhhhh'),
('IIII', 'IIII', 'IIII', 'III@FERFER', 'REGERG'),
('ZADAZDZADZAD', 'DZADZADZA', 'DZADZAD', 'd@gg', 'AZDZAD'),
('haitam', 'rais', 'haitam123', 'haitam@gmail.com', 'haitam123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
