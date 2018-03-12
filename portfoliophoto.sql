-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 07 Mars 2018 à 01:31
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfoliophoto`
--

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

CREATE TABLE `animaux` (
  `ID_ANIMAUX` int(11) NOT NULL,
  `PATH` varchar(50) NOT NULL,
  `DESCRIPTION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `animaux`
--

INSERT INTO `animaux` (`ID_ANIMAUX`, `PATH`, `DESCRIPTION`) VALUES
(1, 'img/animaux/1.jpg', 'vol de corbeau'),
(2, 'img/animaux/2.jpg', 'écureuils sur une branche'),
(3, 'img/animaux/3.jpg 	', 'vol d\'oiseau noir à bec jaune'),
(4, 'img/animaux/4.jpg 	', 'lapins aux aguets');

-- --------------------------------------------------------

--
-- Structure de la table `paysages`
--

CREATE TABLE `paysages` (
  `ID_PAYSAGES` int(11) NOT NULL,
  `PATH` varchar(50) NOT NULL,
  `DESCRIPTION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `paysages`
--

INSERT INTO `paysages` (`ID_PAYSAGES`, `PATH`, `DESCRIPTION`) VALUES
(1, 'img/paysages/1.jpg', 'montagne au crépuscule'),
(2, 'img/paysages/2.jpg', 'chemin aux arbres ennaigés'),
(3, 'img/paysages/3.jpg', 'lune'),
(4, 'img/paysages/4.jpg', 'éoliennes au crépuscule');

-- --------------------------------------------------------

--
-- Structure de la table `portraits`
--

CREATE TABLE `portraits` (
  `ID_PORTRAITS` int(11) NOT NULL,
  `PATH` varchar(50) NOT NULL,
  `DESCRIPTION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `portraits`
--

INSERT INTO `portraits` (`ID_PORTRAITS`, `PATH`, `DESCRIPTION`) VALUES
(1, 'img/portraits/1.jpg', 'dimanche on brunch'),
(2, 'img/portraits/2.jpg', 'color girl'),
(3, 'img/portraits/3.jpg', 'maman ski'),
(4, 'img/portraits/4.jpg', 'bonnet boy');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD PRIMARY KEY (`ID_ANIMAUX`);

--
-- Index pour la table `paysages`
--
ALTER TABLE `paysages`
  ADD PRIMARY KEY (`ID_PAYSAGES`);

--
-- Index pour la table `portraits`
--
ALTER TABLE `portraits`
  ADD PRIMARY KEY (`ID_PORTRAITS`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `animaux`
--
ALTER TABLE `animaux`
  MODIFY `ID_ANIMAUX` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `paysages`
--
ALTER TABLE `paysages`
  MODIFY `ID_PAYSAGES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `portraits`
--
ALTER TABLE `portraits`
  MODIFY `ID_PORTRAITS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
