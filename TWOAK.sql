-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 04 Février 2021 à 16:52
-- Version du serveur :  10.1.45-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `TWOAK`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `ID` int(255) NOT NULL,
  `ID_twoak` int(25) NOT NULL,
  `commentaire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `follow`
--

CREATE TABLE `follow` (
  `ID follow` int(255) NOT NULL,
  `ID follower` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Twoak`
--

CREATE TABLE `Twoak` (
  `ID` int(255) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `published` date NOT NULL,
  `retwoak` int(255) NOT NULL,
  `commentaire` int(255) NOT NULL,
  `ID_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `ID_user` int(255) NOT NULL,
  `user_type` int(2) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_login` varchar(20) NOT NULL,
  `user_dateNaissance` date NOT NULL,
  `user_pseudo` varchar(30) NOT NULL,
  `user_mail` varchar(25) NOT NULL,
  `user_avatar` varchar(255) NOT NULL,
  `user_banniere` varchar(255) NOT NULL,
  `user_bio` text NOT NULL,
  `user_follower` int(255) NOT NULL,
  `user_sexe` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `User`
--

INSERT INTO `User` (`ID_user`, `user_type`, `user_password`, `user_login`, `user_dateNaissance`, `user_pseudo`, `user_mail`, `user_avatar`, `user_banniere`, `user_bio`, `user_follower`, `user_sexe`) VALUES
(1, 0, '1234', 'Twoak', '0000-00-00', '', '', '', '', '', 0, 0),
(2, 0, 'root', 'mattei', '0000-00-00', '', '', '', '', '', 0, 0),
(3, 0, 'passwd', 'ProfilTest', '2021-02-04', 'ProfilTest', 'test@test.fr', '', '', 'testSQL', 0, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_twoak` (`ID_twoak`);

--
-- Index pour la table `follow`
--
ALTER TABLE `follow`
  ADD KEY `ID follow` (`ID follow`),
  ADD KEY `ID follower` (`ID follower`);

--
-- Index pour la table `Twoak`
--
ALTER TABLE `Twoak`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_user` (`ID_user`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `ID_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`ID_twoak`) REFERENCES `Twoak` (`ID`);

--
-- Contraintes pour la table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `follow_ibfk_1` FOREIGN KEY (`ID follow`) REFERENCES `User` (`Id_user`),
  ADD CONSTRAINT `follow_ibfk_2` FOREIGN KEY (`ID follower`) REFERENCES `User` (`Id_user`);

--
-- Contraintes pour la table `Twoak`
--
ALTER TABLE `Twoak`
  ADD CONSTRAINT `Twoak_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `User` (`Id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
