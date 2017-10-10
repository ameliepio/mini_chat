-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 10 Octobre 2017 à 14:18
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `minichat`
--

-- --------------------------------------------------------

--
-- Structure de la table `mini_chat`
--

CREATE TABLE `mini_chat` (
  `ID` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_chat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `mini_chat`
--

INSERT INTO `mini_chat` (`ID`, `pseudo`, `message`, `date_chat`) VALUES
(51, '', '', '2017-09-14 14:03:59'),
(52, 'wxcvcxwv', 'wxcvcxv', '2017-09-14 14:03:59'),
(53, 'wfwfdxv', 'wcxvcxwv', '2017-09-14 14:03:59'),
(54, 'eyeny', 'etytry', '2017-09-14 14:03:59'),
(55, 'amelie', 'j\'ai fini mon mini chat', '2017-09-14 14:03:59'),
(56, 'amelie', 'YOUPIIIIIIIIIIIIIIIIIIII', '2017-09-14 14:03:59'),
(57, 'AMELIE', 'SUPER', '2017-09-14 14:03:59'),
(58, 'amel', 'coool', '2017-09-14 21:40:34'),
(59, 'MZLDJEDJF', '!LJFdsqmfln', '2017-09-25 14:10:34');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `mini_chat`
--
ALTER TABLE `mini_chat`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `mini_chat`
--
ALTER TABLE `mini_chat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
