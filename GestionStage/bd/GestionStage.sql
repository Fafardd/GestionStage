-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 24 Septembre 2018 à 20:02
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
-- Structure de la table `Companies`
--

CREATE TABLE IF NOT EXISTS `Companies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `administrative_region` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Companies`
--

INSERT INTO `Companies` (`id`, `name`, `address`, `city`, `province`, `postal_code`, `administrative_region`, `active`, `phone`, `email`, `user_id`) VALUES
(4, 'IGA', '123 Rue de la vie', 'Laval', 'QC', 'H7R4H8', 'Montréal', 1, '5145145144', 'admin@admin.com', 4);

-- --------------------------------------------------------

--
-- Structure de la table `Coordonators`
--

CREATE TABLE IF NOT EXISTS `Coordonators` (
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
  `fax` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `customerbases`
--

CREATE TABLE IF NOT EXISTS `customerbases` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `customerbases`
--

INSERT INTO `customerbases` (`id`, `name`) VALUES
(1, 'Perte d''autonomie fonctionnelle'),
(2, 'Orthopédie/ rhumatologie'),
(3, 'Perte d''autonomie fonctionnelle');

-- --------------------------------------------------------

--
-- Structure de la table `environments`
--

CREATE TABLE IF NOT EXISTS `environments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `environments`
--

INSERT INTO `environments` (`id`, `name`) VALUES
(2, 'Hôpital de jour'),
(3, 'Centre de jour');

-- --------------------------------------------------------

--
-- Structure de la table `Internships`
--

CREATE TABLE IF NOT EXISTS `Internships` (
  `id` int(11) NOT NULL,
  `period` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Hiver 2019',
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `hours` int(2) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stage_details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL,
  `company_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Internships`
--

INSERT INTO `Internships` (`id`, `period`, `date_start`, `date_end`, `hours`, `title`, `stage_details`, `active`, `company_id`, `type_id`) VALUES
(1, 'Hiver 2019', '2018-09-24', '2018-09-24', 40, 'Programmeur Analyste chez IGA', 'Stage en PHP', 1, 3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `Internships_customerbases`
--

CREATE TABLE IF NOT EXISTS `Internships_customerbases` (
  `id` int(11) NOT NULL,
  `internship_id` int(11) NOT NULL,
  `customerbase_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Internships_environments`
--

CREATE TABLE IF NOT EXISTS `Internships_environments` (
  `id` int(11) NOT NULL,
  `internship_id` int(11) NOT NULL,
  `environment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `internships_students`
--

CREATE TABLE IF NOT EXISTS `internships_students` (
  `id` int(11) NOT NULL,
  `internship_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `internships_students`
--

INSERT INTO `internships_students` (`id`, `internship_id`, `student_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `Students`
--

CREATE TABLE IF NOT EXISTS `Students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other_details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Students`
--

INSERT INTO `Students` (`id`, `name`, `first_name`, `phone`, `email`, `other_details`, `notes`, `user_id`) VALUES
(1, 'Kevin', 'Fafard', '5145145144', 'kev@vendeur.com', 'Jeune gamer', 'fadsfadsf', 6);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(3, 'CHSLD'),
(4, 'CLSC');

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Users`
--

INSERT INTO `Users` (`id`, `email`, `password`, `category`) VALUES
(4, 'admin@admin.com', '$2y$10$cOujyuvEgi0OlA9pwap3I.ZFWWYUgCjMlXH17FpIvV6t1BfY4YLg.', 1),
(6, 'kev@vendeur.com', '$2y$10$//t8jV1SIukgqDbsZg3XNuhl/z9/elXU7OYTs23ajB4NFzp8.KSUS', 1),
(7, 'kev@hotmail.com', '1234', 2),
(8, 'gg@hotmail.com', '$2y$10$bl7kSryk/zEmKHZgJ62ziOFivqjdyfeyLlng/zpCkjTOc3cj0/Qu6', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Companies`
--
ALTER TABLE `Companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `Coordonators`
--
ALTER TABLE `Coordonators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `customerbases`
--
ALTER TABLE `customerbases`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `environments`
--
ALTER TABLE `environments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Internships`
--
ALTER TABLE `Internships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `company_id_2` (`company_id`),
  ADD KEY `company_id_3` (`company_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Index pour la table `Internships_customerbases`
--
ALTER TABLE `Internships_customerbases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `internship_id` (`internship_id`,`customerbase_id`),
  ADD KEY `customerbase_id` (`customerbase_id`);

--
-- Index pour la table `Internships_environments`
--
ALTER TABLE `Internships_environments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `internship_id` (`internship_id`,`environment_id`),
  ADD KEY `environment_id` (`environment_id`);

--
-- Index pour la table `internships_students`
--
ALTER TABLE `internships_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `internship_id` (`internship_id`,`student_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Index pour la table `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Companies`
--
ALTER TABLE `Companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Coordonators`
--
ALTER TABLE `Coordonators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `customerbases`
--
ALTER TABLE `customerbases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `environments`
--
ALTER TABLE `environments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Internships`
--
ALTER TABLE `Internships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Internships_customerbases`
--
ALTER TABLE `Internships_customerbases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Internships_environments`
--
ALTER TABLE `Internships_environments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `internships_students`
--
ALTER TABLE `internships_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Students`
--
ALTER TABLE `Students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Companies`
--
ALTER TABLE `Companies`
  ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`id`);

--
-- Contraintes pour la table `Coordonators`
--
ALTER TABLE `Coordonators`
  ADD CONSTRAINT `coordonators_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`id`);

--
-- Contraintes pour la table `Internships_customerbases`
--
ALTER TABLE `Internships_customerbases`
  ADD CONSTRAINT `internships_customerbases_ibfk_1` FOREIGN KEY (`internship_id`) REFERENCES `Internships` (`id`),
  ADD CONSTRAINT `internships_customerbases_ibfk_2` FOREIGN KEY (`customerbase_id`) REFERENCES `customerbases` (`id`);

--
-- Contraintes pour la table `Internships_environments`
--
ALTER TABLE `Internships_environments`
  ADD CONSTRAINT `internships_environments_ibfk_1` FOREIGN KEY (`internship_id`) REFERENCES `Internships` (`id`),
  ADD CONSTRAINT `internships_environments_ibfk_2` FOREIGN KEY (`environment_id`) REFERENCES `environments` (`id`);

--
-- Contraintes pour la table `internships_students`
--
ALTER TABLE `internships_students`
  ADD CONSTRAINT `internships_students_ibfk_1` FOREIGN KEY (`internship_id`) REFERENCES `Internships` (`id`),
  ADD CONSTRAINT `internships_students_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `Students` (`id`);

--
-- Contraintes pour la table `Students`
--
ALTER TABLE `Students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
