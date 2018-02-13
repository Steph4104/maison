-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 13 Février 2018 à 02:20
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `maison_sort`
--

-- --------------------------------------------------------

--
-- Structure de la table `sort_save`
--

CREATE TABLE `sort_save` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `todo` text NOT NULL,
  `description` varchar(250) NOT NULL,
  `display_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sort_save`
--

INSERT INTO `sort_save` (`id`, `user_id`, `todo`, `description`, `display_order`) VALUES
(1, 2000, 'clean house', '111111', 1),
(0, 2000, 'take out', '0000', 2),
(3, 2000, 'cut grass', '333', 4),
(2, 2000, 'do dishes', '2222', 0),
(5, 2000, 'relax', '5555', 3),
(4, 2000, 'change light bull', '4444', 5);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `sort_save`
--
ALTER TABLE `sort_save`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `sort_save`
--
ALTER TABLE `sort_save`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
