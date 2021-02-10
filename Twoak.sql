-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 10 Février 2021 à 17:40
-- Version du serveur :  10.1.45-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Twoak`
--

-- --------------------------------------------------------

--
-- Structure de la table `Commentaire`
--

CREATE TABLE `Commentaire` (
  `ID_Commetaire` int(11) NOT NULL,
  `ID_Twoak` int(11) NOT NULL,
  `Commentaire_contenu` text NOT NULL,
  `ID_User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Follow`
--

CREATE TABLE `Follow` (
  `Fol_ID_Owner` int(11) NOT NULL,
  `Fol_ID_Follower` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Loak`
--

CREATE TABLE `Loak` (
  `ID_Twoak` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Loak_NBLoak` int(11) NOT NULL,
  `ID_Loak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Message`
--

CREATE TABLE `Message` (
  `ID_Message` int(11) NOT NULL,
  `ID_Sender` int(11) NOT NULL,
  `ID_Receiver` int(11) NOT NULL,
  `texte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Notification`
--

CREATE TABLE `Notification` (
  `ID_Notification` int(11) NOT NULL,
  `ID_Twoak` int(11) NOT NULL,
  `ID_Loak` int(11) NOT NULL,
  `ID_Message` int(11) NOT NULL,
  `Notification_FlagMessage` tinyint(2) NOT NULL,
  `Notification_FlagRetwoak` tinyint(2) NOT NULL,
  `Notification_FlagLoak` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Retwoak`
--

CREATE TABLE `Retwoak` (
  `ID_Twoak` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Retwoak_NBRetwoak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Twoak`
--

CREATE TABLE `Twoak` (
  `ID_Twoak` int(11) NOT NULL,
  `Twoak_texte` varchar(255) NOT NULL,
  `Twoak_published` datetime NOT NULL,
  `ID_User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `ID_User` int(11) NOT NULL,
  `user_type` int(2) NOT NULL,
  `user_nom` varchar(25) NOT NULL,
  `user_prenom` varchar(25) NOT NULL,
  `user_login` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_dateNaissance` varchar(10) NOT NULL,
  `user_mail` varchar(25) NOT NULL,
  `user_avatar` varchar(255) NOT NULL,
  `user_banniere` varchar(255) NOT NULL,
  `user_bio` text NOT NULL,
  `user_follower` int(11) NOT NULL,
  `user_sexe` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  ADD PRIMARY KEY (`ID_Commetaire`);

--
-- Index pour la table `Loak`
--
ALTER TABLE `Loak`
  ADD PRIMARY KEY (`ID_Loak`);

--
-- Index pour la table `Message`
--
ALTER TABLE `Message`
  ADD PRIMARY KEY (`ID_Message`);

--
-- Index pour la table `Notification`
--
ALTER TABLE `Notification`
  ADD PRIMARY KEY (`ID_Notification`);

--
-- Index pour la table `Retwoak`
--
ALTER TABLE `Retwoak`
  ADD PRIMARY KEY (`ID_Twoak`,`ID_User`);

--
-- Index pour la table `Twoak`
--
ALTER TABLE `Twoak`
  ADD PRIMARY KEY (`ID_Twoak`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  MODIFY `ID_Commetaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000000;
--
-- AUTO_INCREMENT pour la table `Loak`
--
ALTER TABLE `Loak`
  MODIFY `ID_Loak` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Message`
--
ALTER TABLE `Message`
  MODIFY `ID_Message` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Notification`
--
ALTER TABLE `Notification`
  MODIFY `ID_Notification` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Twoak`
--
ALTER TABLE `Twoak`
  MODIFY `ID_Twoak` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
