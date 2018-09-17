-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 17 Septembre 2018 à 19:45
-- Version du serveur :  5.6.37
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `GestionStage`
--

-- --------------------------------------------------------

--
-- Structure de la table `Company`
--

CREATE TABLE IF NOT EXISTS `Company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `administrative_region` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Company`
--

INSERT INTO `Company` (`id`, `name`, `address`, `city`, `province`, `postal_code`, `administrative_region`, `active`, `phone`, `email`) VALUES
(2, 'IGA', '123 Rue de la vie', 'Laval', 'QC', 'H7R4H8', 'Montreal', 1, '4505144500', 'test@hot.com');

-- --------------------------------------------------------

--
-- Structure de la table `Coordonator`
--

CREATE TABLE IF NOT EXISTS `Coordonator` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Internship`
--

CREATE TABLE IF NOT EXISTS `Internship` (
  `id` int(11) NOT NULL,
  `period` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Hiver 2019',
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `hours` int(2) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stage_details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL,
  `company_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_base` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `environment` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Internship`
--

INSERT INTO `Internship` (`id`, `period`, `date_start`, `date_end`, `hours`, `title`, `stage_details`, `active`, `company_id`, `type`, `customer_base`, `environment`) VALUES
(2, 'Hiver 2019', '2018-09-17', '2018-09-17', 44, 'Programmeur Analyste chez IGA', 'Stage en PHP', 0, 2, 'Informatique', 'Service', 'Food'),
(3, 'Hiver 2019', '2018-09-17', '2018-09-20', 35, 'Réseau stagiere', 'Stage en réseau', 1, 2, 'Informatique', 'Service', 'Food'),
(4, 'Hiver 2019', '2018-09-17', '2018-09-17', 40, 'fdsafads', 'Stage en PHP', 1, 2, 'Informatique', 'Service', 'Food');

-- --------------------------------------------------------

--
-- Structure de la table `Student`
--

CREATE TABLE IF NOT EXISTS `Student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other_details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `internship_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Users`
--

INSERT INTO `Users` (`id`, `email`, `password`, `category`) VALUES
(1, 'kev@hotmail.com', '12345', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Company`
--
ALTER TABLE `Company`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Coordonator`
--
ALTER TABLE `Coordonator`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Internship`
--
ALTER TABLE `Internship`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `company_id_2` (`company_id`),
  ADD KEY `company_id_3` (`company_id`);

--
-- Index pour la table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `internship_id` (`internship_id`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Company`
--
ALTER TABLE `Company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Coordonator`
--
ALTER TABLE `Coordonator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Internship`
--
ALTER TABLE `Internship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Student`
--
ALTER TABLE `Student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Internship`
--
ALTER TABLE `Internship`
  ADD CONSTRAINT `gdsgfsdg` FOREIGN KEY (`company_id`) REFERENCES `Company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Student`
--
ALTER TABLE `Student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`internship_id`) REFERENCES `Internship` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
