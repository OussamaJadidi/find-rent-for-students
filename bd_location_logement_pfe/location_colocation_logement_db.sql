-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 24 avr. 2022 à 18:40
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `location_colocation_logement_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `Id_administrateur` int(11) NOT NULL,
  `Nom_utilisateur` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mot_de_passe` varchar(50) NOT NULL,
  `photo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`Id_administrateur`, `Nom_utilisateur`, `Email`, `Mot_de_passe`, `photo`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '');

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `Id_annonce` int(11) NOT NULL,
  `Titre` varchar(150) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Logement_meublé` tinyint(1) NOT NULL,
  `Surface` decimal(10,0) NOT NULL,
  `N_chambre` int(11) NOT NULL,
  `Date_deposition` timestamp NOT NULL DEFAULT current_timestamp(),
  `N_colocation_possible` int(11) NOT NULL,
  `Photo1` varchar(150) NOT NULL,
  `Photo2` varchar(150) NOT NULL,
  `Photo3` varchar(150) NOT NULL,
  `Photo4` varchar(150) NOT NULL,
  `Photo5` varchar(150) NOT NULL,
  `Id_propriétaire` int(11) NOT NULL,
  `Description_logement` text NOT NULL,
  `Ville` varchar(20) NOT NULL,
  `Université` varchar(150) NOT NULL,
  `Pays` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`Id_annonce`, `Titre`, `Adresse`, `Type`, `Prix`, `Logement_meublé`, `Surface`, `N_chambre`, `Date_deposition`, `N_colocation_possible`, `Photo1`, `Photo2`, `Photo3`, `Photo4`, `Photo5`, `Id_propriétaire`, `Description_logement`, `Ville`, `Université`, `Pays`) VALUES
(187, 'une maison a louer a oujda', 'rue atlas lot talhaoui nr 144gg oujda', 'Maison', 1500, 0, '0', 7, '2022-04-24 15:26:21', 5, '../Annonce_images/62656c1d05b960.99458842.jpg', '', '', '', '', 1, '  ', 'oujda', '', 'Maroc'),
(188, 'une appartement à louer à lhoceima', 'rue bn Tlha lot talhaoui nr232 ', 'Appartement', 1200, 0, '0', 0, '2022-04-24 15:27:31', 2, '../Annonce_images/62656c63529e64.64322046.jpg', '', '', '', '', 1, '  ', 'oujda', '', 'Maroc'),
(189, 'chambre a louer a taourirte', 'rue taourirte lot talhaoui nr 144gg oujda', 'Chambre', 700, 0, '0', 0, '2022-04-24 15:29:43', 0, '../Annonce_images/62656ce76612e6.56773459.jpg', '', '', '', '', 1, '  ', 'taourirte', '', 'Maroc'),
(190, 'une bureau a louer a oujda', 'rue atlas lot talhaoui nr 144gg oujda', 'Bureau', 1150, 0, '0', 0, '2022-04-24 15:31:27', 4, '../Annonce_images/62656d4f82d546.07953802.jpg', '', '', '', '', 1, '  ', 'oujda', '', 'Maroc');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `Id_etudiant` int(11) NOT NULL,
  `Nom_utilisateur` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mot_de_passe` varchar(50) NOT NULL,
  `photo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`Id_etudiant`, `Nom_utilisateur`, `Email`, `Mot_de_passe`, `photo`) VALUES
(1, 'hicham louissi', 'blabalbloblobli@gmail.com', 'aa', ''),
(2, 'az', 'aze', '123', ''),
(3, 'etudiant', 'etudiant@gmail.com', 'etudiant', ''),
(4, 'Hicham', 'Hicham.louissi20@ump.ac.ma', 'b', ''),
(17, 'oussama_jadidi', 'oussama_jadidi@hotmail.ma', 'jjj', ''),
(18, 'oussama_jadidi', 'oussamajadidi2002@gmail.com', 'uu', ''),
(19, 'oussama_jadidi', 'oussamajadidi2002@gmail.com', 'hhh', ''),
(20, 'oussama ', 'oussama2020@gmail.com', 'jj', ''),
(21, 'oussama jad', 'oussamajadidi2002@gmail.com', 'jjkk', '');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `Id_message` int(11) NOT NULL,
  `Personne` varchar(20) NOT NULL,
  `Id_personne` int(11) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`Id_message`, `Personne`, `Id_personne`, `Email`, `Message`) VALUES
(1, 'Annonyme', 0, 'oussama2020@gmail.com', 'hi'),
(2, 'Annonyme', 0, 'oussamajadidi2022@gmail.com', 'heellloo'),
(3, 'Annonyme', 0, 'oussamajadidi2020@gmail.com', 'hhhhhhhhhhhh'),
(4, 'Propriétaire', 1, 'oussama_jadidi@htmail.ma', 'fsdf'),
(5, 'Etudiant', 2, 'oussamajadidi2022@gmail.com', 'iiiiiiiii'),
(6, 'Annonyme', 0, 'sdqf', 'fd'),
(7, 'Annonyme', 0, 'oussamajadidi2022@gmail.com', 'sdflkqj'),
(8, 'Annonyme', 0, 'oussamajadidi2020@gmail.com', 'eqfd'),
(9, 'Annonyme', 0, 'oussamajadidi2020@gmail.com', 'eqfd'),
(10, 'Annonyme', 0, 'oussama2020@gmail.com', 'fdsljkmqs'),
(11, 'Annonyme', 0, 'blabalbloblobli@gmail.com', 'qdslfkjmdlfj'),
(12, 'Annonyme', 0, 'oussamajadidi2002@gmail.com', 'qzfeqsdf'),
(13, 'Annonyme', 0, 'oussamajadidi2022@gmail.com', 'fdqjslkfdj'),
(14, 'Annonyme', 0, 'oussama2020@gmail.com', 'qfsdfsqfsqd'),
(15, 'Annonyme', 0, 'oussamajadidi2022@gmail.com', 'qsdfsfdq'),
(16, 'Annonyme', 0, 'oussamaja', 'dsqljkfkfds');

-- --------------------------------------------------------

--
-- Structure de la table `propriétaire`
--

CREATE TABLE `propriétaire` (
  `Id_propriétaire` int(11) NOT NULL,
  `Nom_utilisateur` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `Gmail` varchar(50) NOT NULL,
  `Telephone` varchar(13) NOT NULL,
  `Mot_de_passe` varchar(50) NOT NULL,
  `photo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `propriétaire`
--

INSERT INTO `propriétaire` (`Id_propriétaire`, `Nom_utilisateur`, `Email`, `ville`, `Gmail`, `Telephone`, `Mot_de_passe`, `photo`) VALUES
(1, 'jadidi', 'oussama', 'oujda', 'oussamajadidi2020@gmail.com', '0611241065', 'h', ''),
(65, 'oussama jadidi', 'oussama jadidi', 'oujda', 'oussamajadidi2020@gmail.com', '0611241065', 'a', ''),
(66, 'oussama', 'oussamajadidi2020@gmail.com', 'oujda', 'oussamajadidi2020@gmail.com', '0611241065', 'i', ''),
(70, 'g', 'g', 'g', 'g', 'g', 'g', ''),
(71, 'g', 'g', 'g', 'g', 'g', 'g', ''),
(72, 'g', 'g', 'g', 'g', 'g', 'g', ''),
(73, 'g', 'g', 'g', 'g', 'g', 'g', ''),
(74, 'g', 'g', 'g', 'g', 'g', 'g', ''),
(75, 'g', 'g', 'g', 'g', 'g', 'g', ''),
(76, 'g', 'g', 'g', 'g', 'g', 'g', ''),
(77, 'g', 'g', 'g', 'g', 'g', 'g', ''),
(78, 'g', 'g', 'g', 'g', 'g', 'g', ''),
(79, 'g', 'g', 'g', 'g', 'g', 'g', ''),
(80, 'g', 'g', 'g', 'g', 'g', 'g', ''),
(81, 'w', 'w', 'w', 'w', 'w', 'ww', ''),
(82, 'w', 'w', 'w', 'w', 'w', 'ww', ''),
(83, 'tt', 'tt', 'tt', 'tt', 'tt', 'tt', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`Id_administrateur`);

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`Id_annonce`),
  ADD KEY `Id_propriétaire_fk` (`Id_propriétaire`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`Id_etudiant`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Id_message`);

--
-- Index pour la table `propriétaire`
--
ALTER TABLE `propriétaire`
  ADD PRIMARY KEY (`Id_propriétaire`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `Id_administrateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `Id_annonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `Id_etudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `Id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `propriétaire`
--
ALTER TABLE `propriétaire`
  MODIFY `Id_propriétaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
