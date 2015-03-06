-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 16 Avril 2014 à 22:09
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `lespagesblanches`
--

-- --------------------------------------------------------

--
-- Structure de la table `carnet`
--

CREATE TABLE IF NOT EXISTS `carnet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` text NOT NULL,
  `nom` text NOT NULL,
  `mail` text NOT NULL,
  `annee` int(11) NOT NULL,
  `adresse` text NOT NULL,
  `numero` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `carnet`
--

INSERT INTO `carnet` (`id`, `prenom`, `nom`, `mail`, `annee`, `adresse`, `numero`) VALUES
(0, 'Guillaume', 'Briday', 'guillaumebriday@gmail.com', 1994, '304_rue_garibaldi', '06_76_42_83_79'),
(1, 'Quentin', 'Meltzheim', 'aucuneidee@gmail.com', 1995, '21_rue_président_edouard_herriot', '06_11_32_74_67'),
(2, 'Rodolphe', 'Pelissier', 'rodolphepelissier@gmail.com', 1994, 'Neuville_lyon', '06_07_09_08_10'),
(3, 'Maelle', 'Louise', 'aucuneidee@gmail.com', 1995, 'Pe_Rue_Eugene_Vial', '06_07_08_09_10'),
(4, 'Ugo', 'Tollet', 'aucuneidee@gmail.com', 1993, '77_Rue_Pré_Gaudry', '06_21_92_15_96'),
(5, 'Arthur', 'Freiche', 'aucuneidee@gmail.com', 1995, '1_Rue_Marteret', '04_26_55_57_28'),
(6, 'Vivi', 'Vidalounet', 'aucuneidee@gmail.com', 1985, 'ici_ou_la_bas', '06_07_08_09_10'),
(7, 'Fabinou', 'Fernandez', 'aucuneidee@gmail.com', 1995, 'Villette_dans_le_thon', '06_11_82_18_72'),
(8, 'Karine', 'Poinsard', 'aucuneidee@gmail.com', 1995, '28_Rue_Ivry', '06_72_18_73_46');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
