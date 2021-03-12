-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 07 mars 2021 à 17:23
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hostroom`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `Idcat` int NOT NULL AUTO_INCREMENT,
  `genre` varchar(255) NOT NULL,
  PRIMARY KEY (`Idcat`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`Idcat`, `genre`) VALUES
(1, 'Chambre 1'),
(2, 'Chambre 2'),
(3, 'Chambre 3 ');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `idcli` int NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mot_de_passe` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nomcli` varchar(255) NOT NULL,
  `prenomcli` varchar(255) NOT NULL,
  `Adressecli` varchar(255) NOT NULL,
  `CPcli` int NOT NULL,
  `Villecli` text NOT NULL,
  `Payscli` text NOT NULL,
  `fixecli` int NOT NULL,
  `gsmcli` int NOT NULL,
  `emailcli` varchar(255) NOT NULL DEFAULT 'aaa@bbbbb.com',
  `Niveau` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`idcli`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`idcli`, `nom_utilisateur`, `mot_de_passe`, `nomcli`, `prenomcli`, `Adressecli`, `CPcli`, `Villecli`, `Payscli`, `fixecli`, `gsmcli`, `emailcli`, `Niveau`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'TURGIS', 'DIDRIK', 'RRRRR', 62180, 'VERTON', 'FRANCE', 0, 0, 'didrik.turgis@gmail.com', 'administrateur'),
(11, 'ticars', 'e32188436f617fd0c5e83765a5ad8ed2', 'nomcli', 'prenomcli', 'Adressecli', 0, 'Villecli', 'Payscli', 0, 0, 'dturgis@orange.fr', 'clients'),
(12, 'user', 'd79096188b670c2f81b7001f73801117', 'nomcli', 'prenomcli', 'Adressecli', 0, 'Villecli', 'Payscli', 0, 0, 'emailcli', 'clients'),
(13, 'user', 'd79096188b670c2f81b7001f73801117', 'nomcli', 'prenomcli', 'Adressecli', 0, 'Villecli', 'Payscli', 0, 0, 'emailcli', 'clients');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `idreserv` int NOT NULL AUTO_INCREMENT,
  `genre` varchar(11) NOT NULL,
  `client` int NOT NULL,
  `datedebut` text NOT NULL,
  `datefin` text NOT NULL,
  PRIMARY KEY (`idreserv`) USING BTREE,
  KEY `client` (`client`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`idreserv`, `genre`, `client`, `datedebut`, `datefin`) VALUES
(1, '3', 11, '02/22/2021', '02/28/2021'),
(2, '1', 11, '02/22/2021', '03/19/2021'),
(3, '2', 11, '03/23/2021', '03/31/2021'),
(4, '3', 11, '03/29/2021', '03/31/2021'),
(5, '2', 11, '03/22/2021', '03/24/2021'),
(6, '2', 11, '04/19/2021', '04/21/2021'),
(7, '3', 11, '03/31/2021', '04/08/2021'),
(8, '2', 11, '03/21/2021', '03/24/2021'),
(9, '1', 11, '03/23/2021', '03/25/2021'),
(10, '1', 11, '03/29/2021', '03/31/2021'),
(11, '2', 11, '03/30/2021', '04/15/2021'),
(12, '3', 11, '04/14/2021', '04/22/2021');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
