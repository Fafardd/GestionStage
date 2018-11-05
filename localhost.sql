-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2018 at 01:56 PM
-- Server version: 10.1.36-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tinstage_GestionStage`
--
CREATE DATABASE IF NOT EXISTS `tinstage_GestionStage` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tinstage_GestionStage`;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `city`, `province`, `postal_code`, `administrative_region`, `active`, `phone`, `email`, `user_id`) VALUES
(1, 'Staples', '123 Rue Staples', 'Laval', 'QC', 'H7R2H1', 'Montréal', 1, '5145145144', 'staples@gmail.com', 16),
(2, 'IGA', '123 Rue de la vie', 'Laval', 'QC', 'H7R4H8', 'Montréal', 1, '5145145111', 'iga@gmail.com', 15),
(3, 'Dell', '123 Rue Dell', 'Montréal', 'QC', 'H7R4H8', 'Montréal', 1, '1231231234', 'dell@gmail.com', 21);

-- --------------------------------------------------------

--
-- Table structure for table `coordonators`
--

CREATE TABLE `coordonators` (
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
-- Table structure for table `customerbases`
--

CREATE TABLE `customerbases` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customerbases`
--

INSERT INTO `customerbases` (`id`, `name`) VALUES
(1, 'Perte d\'autonomie fonctionnelle'),
(2, 'Orthopédie/ rhumatologie'),
(5, 'Neurologie'),
(6, 'Cardiorespiratoire'),
(7, 'Autres');

-- --------------------------------------------------------

--
-- Table structure for table `environments`
--

CREATE TABLE `environments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `environments`
--

INSERT INTO `environments` (`id`, `name`) VALUES
(2, 'Hôpital de jour'),
(3, 'Centre de jour'),
(4, 'UTRF'),
(5, 'URFI'),
(6, 'Soins clientèle externe'),
(7, 'Soins clientèle hospitalisée'),
(8, 'Soins clientèle à domicile'),
(9, 'Soins clientèle hébergée'),
(10, 'Recherche clinique'),
(11, 'Rééduc./Renf. au travail'),
(12, 'Autres');

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`id`, `period`, `date_start`, `date_end`, `hours`, `title`, `stage_details`, `active`, `company_id`, `type_id`) VALUES
(3, 'Hiver 2019', '2019-01-03', '2019-05-20', 35, 'Technicien en soutien ', 'Offrir un soutien aux clients', 1, 1, 10),
(4, 'Hiver 2019', '2019-01-04', '2018-08-04', 50, 'Programmeur PHP', 'Programmeur en front-end utilisant CakePHP', 1, 1, 10),
(5, 'Hiver 2019', '2018-10-04', '2019-09-04', 40, 'PHP DevOp', 'gjksfhdjkghjdkfshgkjdfs', 1, 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `internships_customerbases`
--

CREATE TABLE `internships_customerbases` (
  `id` int(11) NOT NULL,
  `internship_id` int(11) NOT NULL,
  `customerbase_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `internships_customerbases`
--

INSERT INTO `internships_customerbases` (`id`, `internship_id`, `customerbase_id`) VALUES
(1, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `internships_environments`
--

CREATE TABLE `internships_environments` (
  `id` int(11) NOT NULL,
  `internship_id` int(11) NOT NULL,
  `environment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `internships_environments`
--

INSERT INTO `internships_environments` (`id`, `internship_id`, `environment_id`) VALUES
(2, 3, 12);

-- --------------------------------------------------------

--
-- Table structure for table `internships_students`
--

CREATE TABLE `internships_students` (
  `id` int(11) NOT NULL,
  `internship_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `internships_students`
--

INSERT INTO `internships_students` (`id`, `internship_id`, `student_id`) VALUES
(1, 3, 1),
(2, 4, 1),
(3, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other_details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `first_name`, `phone`, `email`, `other_details`, `notes`, `user_id`) VALUES
(1, 'Kevin', 'Fafard', '4388811739', 'etudiant@gmail.com', 'Jeune garçon', 'Très étudiant', 20),
(2, 'Louis', 'Bouchard', '4505144500', 'louis@gmail.com', 'Jeune garçon', 'Ceci est une note', 22);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(3, 'CHSLD'),
(4, 'CLSC'),
(7, 'Centre Hospitalier'),
(8, 'Centre Réadaptation'),
(9, 'Clinique privée'),
(10, 'Autres');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `category`) VALUES
(9, 'tinstage_admin@tinstage.ca', '$2y$10$VnUINWaKr.xoozpwTeU0bOhez.ZbVFdkGOBGE4rv2OlWiyTg56i.y', 3),
(15, 'iga@gmail.com', '$2y$10$OQlb7gMJnSt4bXxbol/he.mI/ac1mtpkKJz/c67.N0EQ20.hyw3jq', 2),
(16, 'staples@gmail.com', '$2y$10$CAIM1M3nofFmd4fL6wigT.HzaMJ1iAZrrLTVwI5yopDIREa0Yb1ca', 2),
(17, 'student1@cmontmorency.qc.ca', '$2y$10$m.k0kBK/hqQTPnlxiYoHU.QbVyZ0tR1YNyb.jmT2KhP7axkWyVv9q', 1),
(18, 'student2@cmontmorency.qc.ca', '$2y$10$.Ll/w7UOYlbOIkvZq9leZOolssW5NdniuSMRvPdq9L0fEKY.eZyuO', 1),
(20, 'etudiant@gmail.com', '$2y$10$.4zxxOYxVK/CORoJl3lnKOuoNZsdTOi14AXzACN.WpR/dq.0wlJiu', 1),
(21, 'dell@gmail.com', '$2y$10$KyeGKOR14PjWDztji8gPV.yRVDwq3bGLnHNwtnzsc8AoCmNEbVS8q', 2),
(22, 'louis@gmail.com', '$2y$10$PfqcNrUzAWsp2Rw.XI.YAu2s2m.fWN2.ujQYfXR9fJQoY9vtBPTVK', 1),
(23, 'frederic.england@hotmail.com', '$2y$10$5TrG73Mfg95JMH2Dl3GsfuB6xzzD6TLL8ogh29g4Z5UcfUSe98Ori', 3),
(24, 'gaguifire@hotmail.ca', '$2y$10$oHNfHA8Xk0ogC81d.7mfu.jbmt/51b4I5O0oSwzTwEaIQSWkdB9ju', 3),
(25, 'dvdp26@gmail.com', '$2y$10$vT1236pO2tvIFyn.jwWE4eBIzH8DJzWws3cNEljaK95JKBO5hT4lO', 3),
(26, 'kevin.fafard1@hotmail.com', '$2y$10$5LlsL2puRzX6ao7LzBJMau.8JSyCR/y7F/1ca0R6Vx9MuqFu1MTV6', 3),
(35, 'arkapin18@gmail.com', '$2y$10$bkTwqcEAIheTUpm8DHwhvOGCvSA4Cc6gZOdXi8jGElGXNiSSiNCEy', 1),
(36, 'louis.bouchard@cmontmorency.qc.ca', '$2y$10$iqzbZ3051Qvoo6rW.oI5t.rKlmL2Q4xUOPa7SShq5AAXWS6YK0LqG', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `coordonators`
--
ALTER TABLE `coordonators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `customerbases`
--
ALTER TABLE `customerbases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `environments`
--
ALTER TABLE `environments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `company_id_2` (`company_id`),
  ADD KEY `company_id_3` (`company_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `internships_customerbases`
--
ALTER TABLE `internships_customerbases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `internship_id` (`internship_id`,`customerbase_id`),
  ADD KEY `customerbase_id` (`customerbase_id`);

--
-- Indexes for table `internships_environments`
--
ALTER TABLE `internships_environments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `internship_id` (`internship_id`,`environment_id`),
  ADD KEY `environment_id` (`environment_id`);

--
-- Indexes for table `internships_students`
--
ALTER TABLE `internships_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `internship_id` (`internship_id`,`student_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coordonators`
--
ALTER TABLE `coordonators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customerbases`
--
ALTER TABLE `customerbases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `environments`
--
ALTER TABLE `environments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `internships_customerbases`
--
ALTER TABLE `internships_customerbases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `internships_environments`
--
ALTER TABLE `internships_environments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `internships_students`
--
ALTER TABLE `internships_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `coordonators`
--
ALTER TABLE `coordonators`
  ADD CONSTRAINT `coordonators_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `internships_customerbases`
--
ALTER TABLE `internships_customerbases`
  ADD CONSTRAINT `internships_customerbases_ibfk_1` FOREIGN KEY (`internship_id`) REFERENCES `internships` (`id`),
  ADD CONSTRAINT `internships_customerbases_ibfk_2` FOREIGN KEY (`customerbase_id`) REFERENCES `customerbases` (`id`);

--
-- Constraints for table `internships_environments`
--
ALTER TABLE `internships_environments`
  ADD CONSTRAINT `internships_environments_ibfk_1` FOREIGN KEY (`internship_id`) REFERENCES `internships` (`id`),
  ADD CONSTRAINT `internships_environments_ibfk_2` FOREIGN KEY (`environment_id`) REFERENCES `environments` (`id`);

--
-- Constraints for table `internships_students`
--
ALTER TABLE `internships_students`
  ADD CONSTRAINT `internships_students_ibfk_1` FOREIGN KEY (`internship_id`) REFERENCES `internships` (`id`),
  ADD CONSTRAINT `internships_students_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
