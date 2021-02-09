-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 09 Février 2021 à 11:01
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
-- Structure de la table `Commentaire`
--

CREATE TABLE `Commentaire` (
  `ID_Commetaire` int(255) NOT NULL,
  `ID_Twoak` int(255) NOT NULL,
  `Commentaire_contenu` text NOT NULL,
  `ID_User` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Loak`
--

CREATE TABLE `Loak` (
  `ID_Twoak` int(255) NOT NULL,
  `ID_User` int(255) NOT NULL,
  `Loak_NBLoak` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Message`
--

CREATE TABLE `Message` (
  `ID_Message` int(255) NOT NULL,
  `ID_Sender` int(255) NOT NULL,
  `ID_Receiver` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Notification`
--

CREATE TABLE `Notification` (
  `ID_Notification` int(255) NOT NULL,
  `ID_Twoak` int(255) NOT NULL,
  `ID_Loak` int(255) NOT NULL,
  `ID_Message` int(255) NOT NULL,
  `Notification_FlagMessage` tinyint(2) NOT NULL,
  `Notification_FlagRetwoak` tinyint(2) NOT NULL,
  `Notification_FlagLoak` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Retwoak`
--

CREATE TABLE `Retwoak` (
  `ID_Twoak` int(255) NOT NULL,
  `ID_User` int(255) NOT NULL,
  `Retwoak_NBRetwoak` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Twoak`
--

CREATE TABLE `Twoak` (
  `ID_Twoak` int(255) NOT NULL,
  `Twoak_texte` varchar(255) NOT NULL,
  `Twoak_published` date NOT NULL,
  `ID_User` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `ID_User` int(255) NOT NULL,
  `User_type` int(2) NOT NULL,
  `User_nom` varchar(25) NOT NULL,
  `User_prenom` varchar(25) NOT NULL,
  `User_login` varchar(20) NOT NULL,
  `User_password` varchar(20) NOT NULL,
  `User_dateNaissance` varchar(10) NOT NULL,
  `User_mail` varchar(25) NOT NULL,
  `User_avatar` varchar(255) NOT NULL,
  `User_banniere` varchar(255) NOT NULL,
  `User_bio` text NOT NULL,
  `User_follower` int(255) NOT NULL,
  `User_sexe` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `User`
--

INSERT INTO `User` (`ID_User`, `User_type`, `User_nom`, `User_prenom`, `User_login`, `User_password`, `User_dateNaissance`, `User_mail`, `User_avatar`, `User_banniere`, `User_bio`, `User_follower`, `User_sexe`) VALUES
(1, 0, '', '', 'Twoak', '1234', '0000-00-00', '', '', '', '', 0, 0),
(2, 0, '', '', 'mattei', 'root', '0000-00-00', '', '', '', '', 0, 0),
(3, 0, '', '', 'ProfilTest', 'passwd', '2021-02-04', 'test@test.fr', '', '', 'testSQL', 0, 0),
(5, 1, 'flemal', 'romain', 'roro', '1234', '23/09/1939', 'rf@gmail.com', '0', '0', '0', 0, 0),
(6, 1, 'flemal', 'romain', '', '1234', '23/05/2001', 'rf@gmail.com', '', '', '', 0, 0),
(7, 1, 'flemal', 'romain', 'crazec', '1234', '0.00229885', 'romain.f@gmail.com', '0', '0', '0', 0, 0),
(8, 1, 'frezale', 'matteo', 'mat', '1234', '0.00125000', 'test.test@gmail.com', '0', '0', '0', 0, 0),
(9, 1, 'coucou', 'coucale', 'mat', '1234', '0.00125000', 'test.test@gmail.com', '0', '0', '0', 0, 0),
(11, 1, 'test2', 'test6', 'mattei', 'tests', '0.00125000', 'test.test@gmail.com', '0', '0', '0', 0, 0),
(12, 1, 'test2', 'test6', 'mattei', 'tests', '0.00125000', 'test.test@gmail.com', '0', '0', '0', 0, 0),
(14, 1, 'langlace', 'julien', 'mattei', 'jllol', '30/12/1945', 'julien.langlace@gmail.com', '0', '0', '0', 0, 0),
(15, 1, 'gremgrem', 'alex', '', 'grem', '15-02-1985', 'alex.gremont@gmail.com', '0', '0', '0', 0, 0),
(16, 1, '', '', '', '', 'mattei', '', '0', '0', '0', 0, 0);

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
  ADD PRIMARY KEY (`ID_Twoak`,`ID_User`);

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
  MODIFY `ID_Commetaire` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Message`
--
ALTER TABLE `Message`
  MODIFY `ID_Message` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Notification`
--
ALTER TABLE `Notification`
  MODIFY `ID_Notification` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Twoak`
--
ALTER TABLE `Twoak`
  MODIFY `ID_Twoak` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `ID_User` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
