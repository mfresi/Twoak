-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 09 Mars 2021 à 09:48
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

--
-- Contenu de la table `Follow`
--

INSERT INTO `Follow` (`Fol_ID_Owner`, `Fol_ID_Follower`) VALUES
(1, 2),
(4, 10),
(4, 10),
(10, 4);

-- --------------------------------------------------------

--
-- Structure de la table `Loak`
--

CREATE TABLE `Loak` (
  `ID_Twoak` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Loak`
--

INSERT INTO `Loak` (`ID_Twoak`, `ID_User`) VALUES
(15, 10),
(14, 10),
(17, 1),
(14, 1),
(15, 1),
(20, 4),
(19, 4);

-- --------------------------------------------------------

--
-- Structure de la table `Message`
--

CREATE TABLE `Message` (
  `ID_Message` int(11) NOT NULL,
  `ID_Sender` int(11) NOT NULL,
  `ID_Receiver` int(11) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Message`
--

INSERT INTO `Message` (`ID_Message`, `ID_Sender`, `ID_Receiver`, `texte`, `Date`) VALUES
(73, 1, 4, 'Oui', '2021-02-16 09:19:00'),
(76, 4, 2, ' A', '2021-02-16 09:16:47'),
(94, 4, 2, ' azer', '2021-02-16 10:20:52'),
(96, 4, 2, ' azer', '2021-02-16 10:21:51'),
(98, 4, 1, ' Nique ta mere', '2021-02-16 10:54:37'),
(99, 1, 4, 'Oui', '2021-02-16 11:00:00'),
(104, 4, 1, ' aled', '2021-02-16 11:03:41'),
(108, 4, 2, ' oui', '2021-02-16 11:07:08'),
(109, 4, 1, ' Message', '2021-02-16 11:17:44'),
(116, 4, 0, ' Test123456', '2021-02-17 08:38:10'),
(117, 4, 0, ' Test123456', '2021-02-17 08:39:12'),
(118, 4, 0, ' Test123456', '2021-02-17 08:39:12'),
(119, 4, 0, ' Test123456', '2021-02-17 08:39:20'),
(120, 4, 0, ' Test123456', '2021-02-17 08:39:34'),
(121, 1, 4, 'sbeub', '0000-00-00 00:00:00'),
(122, 1, 4, 'sbeub', '2021-02-17 09:19:00'),
(125, 1, 4, 'laVie', '2021-02-17 14:00:00'),
(126, 10, 1, ' Test', '2021-02-17 10:23:29'),
(127, 10, 2, ' Oui', '2021-02-17 10:23:34'),
(128, 10, 4, 'Nique ta mere romain', '2021-02-17 10:26:49'),
(129, 10, 4, ' Ton pere commence a plus avoir de cheveux frero', '2021-02-17 10:27:09'),
(130, 4, 10, 'Greg nique ta mere', '2021-02-17 11:00:00'),
(131, 10, 1, ' Aled', '2021-02-17 10:56:49'),
(132, 10, 1, ' a', '2021-02-17 11:39:32'),
(133, 10, 1, ' a', '2021-02-17 11:39:59'),
(134, 10, 1, ' ALED', '2021-02-17 13:38:03'),
(135, 1, 10, ' Plop', '2021-02-17 13:38:57'),
(136, 10, 1, ' WOAW', '2021-03-09 08:50:29');

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

--
-- Contenu de la table `Twoak`
--

INSERT INTO `Twoak` (`ID_Twoak`, `Twoak_texte`, `Twoak_published`, `ID_User`) VALUES
(1, 'coucou ', '2021-02-11 08:02:43', 2),
(2, 'c\'est un twoak\r\n', '2021-02-11 08:20:55', 2),
(3, 'test', '2021-02-11 20:10:49', 1),
(4, 'hola', '2021-02-12 14:33:08', 2),
(5, '', '2021-02-12 14:33:55', 2),
(6, 'jae le pro', '2021-02-12 16:37:32', 1),
(7, 'couocu', '2021-02-12 16:37:54', 1),
(8, 'ed c un movais dev', '2021-02-16 08:07:37', 4),
(9, 'chat chat chaaaat', '2021-02-16 11:47:53', 8),
(10, 'blabla', '2021-02-16 16:08:51', 2),
(11, 'test nathan', '2021-02-16 16:12:32', 7),
(12, 'coucou', '2021-02-16 17:01:35', 2),
(13, 'roro il a un grand front', '2021-02-17 08:08:12', 5),
(14, 'romain il sait pas dev ', '2021-02-17 09:04:47', 4),
(15, 'ehehqqeqehq', '2021-02-17 09:10:27', 8),
(19, 'Sah', '2021-03-09 09:19:25', 4),
(20, '', '2021-03-09 09:26:03', 4);

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
  `user_password` varchar(255) NOT NULL,
  `user_dateNaissance` varchar(10) NOT NULL,
  `user_mail` varchar(25) NOT NULL,
  `user_avatar` varchar(255) NOT NULL,
  `user_banniere` varchar(255) NOT NULL,
  `user_bio` text NOT NULL,
  `user_follower` int(11) NOT NULL,
  `user_sexe` int(2) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT '0',
  `user_ip` varchar(30) NOT NULL,
  `user_ban` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `User`
--

INSERT INTO `User` (`ID_User`, `user_type`, `user_nom`, `user_prenom`, `user_login`, `user_password`, `user_dateNaissance`, `user_mail`, `user_avatar`, `user_banniere`, `user_bio`, `user_follower`, `user_sexe`, `user_status`, `user_ip`, `user_ban`) VALUES
(1, 1, 'Flaquet', 'Edouard', 'edouard', '$2y$10$9giO0FFwKFIYFbxQGOXKiuX1Qix6l2D.ektJ1mcLSfM8ZNylD64Sy', '10/12/2001', 'eflaquet@la-providence.ne', 'images/resources/user-avatar2.jpg', 'images/resources/timeline-1.jpg', '0', 1, 0, 0, '192.168.64.157', 1),
(2, 1, 'fresi', 'mattei', 'mattei', '$2y$10$ymShCRbJsBTT/kux/PZ6UOvBSHw7COqq2AASeB65YZ2BORw5x/nSW', '30/12/2000', 'mfresi@la-providence.net', 'avatar/mattei/20200827_014242.jpg', 'banniere/mattei/673ab1ddbefd571453dd36f8fc8458ea.jpg', '0', 0, 0, 0, '192.168.64.103', 0),
(3, 1, 'eee', 'Edouard', 'ROOT', '$2y$10$WQYrFGCzZhGs5YC5ysoXX.EagdXrrv8ZKp2cas4.sLMBZigUiBBHS', '04/12/2000', 'root', 'images/resources/user-avatar2.jpg', 'images/resources/timeline-1.jpg', '0', 0, 0, 1, '192.168.64.98', 1),
(4, 1, 'Flemal', 'romain', 'roro', '$2y$10$Q4z5Z5gsqC3MjBU21E2PSuiVHv0Os0vRKhav.2ekeMkCx5G0R58nW', '16/02/2021', 'rflemal@gmail.com', 'avatar/roro/Penguins.jpg', 'banniere/roro/stuuff.PNG', '0', 0, 0, 1, '192.168.65.62', 0),
(5, 1, 'Colbert', 'Gregoire', 'Greggg', '$2y$10$T6lFhZOIcqlEudM6mXY2LeWXNjxdsjCsYJ0424Ahda6Ew4o8VQd8W', '15/09/2001', 'gcolbert@-laprovidence.ne', 'images/resources/user-avatar2.jpg', 'images/resources/timeline-1.jpg', '0', 0, 0, 1, '192.168.64.157', 0),
(7, 0, 'danel', 'nathan', 'rootme', '$2y$10$yq2QTv/zll7rnxjSparJr.ViphxM/LCQiYMfarSzY5mJjGZZHf626', '', '', '', '', '', 0, 0, 1, '192.168.65.31', 0),
(8, 1, 'Clermont', 'mathis', 'mathis', '$2y$10$mV7V/UxKYWk.MW75dBRwYusmDyp6cFA29v8zaA3xUVBYbaoa1fpiu', '18/02/2021', 'fils@mail.con', 'images/resources/user-avatar2.jpg', 'images/resources/timeline-1.jpg', '0', 0, 0, 1, '192.168.64.103', 0),
(10, 1, 'Pilou', 'Pierre Louis', 'pl', '$2y$10$gMhyjMm/rvj9.7CdfJQxbeMTegVbAMJss6a.zNjlCAu04Jok1h./u', '25091999', 'pilexssb@gmail.com', 'images/resources/user-avatar2.jpg', 'images/resources/timeline-1.jpg', '0', 0, 0, 0, '', 0),
(16, 0, 'nathan', 'nathan', 'hash1', '$2y$10$ZdCqsECgb7V2dVG1pS1Kt.tWS.2nFHMFP5hu9F6/Qf27BhiqjIdtK', '26/01/2000', 'mail@mail.fr', '', '', '', 0, 0, 0, '0', 0),
(17, 0, 'hash1', 'hash1', 'hash1', '$2y$10$M.E1zENb1yL0IjlSDRvZt.Zkp10dwVVVNmFQ4gVx/5TFkJAL5.bWa', '26/01/2021', 'mail@mail.fr', '', '', '', 0, 0, 0, '0', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
  ADD PRIMARY KEY (`ID_Commetaire`);

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
  MODIFY `ID_Commetaire` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Message`
--
ALTER TABLE `Message`
  MODIFY `ID_Message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT pour la table `Notification`
--
ALTER TABLE `Notification`
  MODIFY `ID_Notification` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Twoak`
--
ALTER TABLE `Twoak`
  MODIFY `ID_Twoak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
