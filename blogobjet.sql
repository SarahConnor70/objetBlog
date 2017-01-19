-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 19 Janvier 2017 à 14:19
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blogobjet`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(45) DEFAULT NULL,
  `auteur` varchar(45) DEFAULT NULL,
  `article` longtext,
  `date_parution` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `auteur`, `article`, `date_parution`) VALUES
(16, 'Ajout d\'un article', 'Romain', 'Ajout d\'un article dans la base de donnÃ©es', '2017-01-18 11:45:42'),
(17, 'bbbbbbb', 'bbb', 'dfghtrh', '2017-01-18 16:23:37'),
(18, 'bbbbbbb', 'bbb', 'dfghtrh', '2017-01-18 16:25:31'),
(19, 'bbbbbbb', 'bbb', 'dfghtrh', '2017-01-18 16:26:03'),
(20, 'texte', 'bbb', 'hgfchjklmjhgfhjkl', '2017-01-18 16:27:51'),
(21, 'vhvhkjhk', 'bbb', 'ghjklhgfcghjkhghj', '2017-01-18 16:31:18'),
(22, 'vhvhkjhk', 'bbb', 'ghjklhgfcghjkhghj', '2017-01-18 16:33:36'),
(23, 'vhvhkjhk', 'romain', 'gfjh,', '2017-01-18 16:35:17'),
(24, 'bbbbbbb', 'heyt', 'erghbrjtghoj,', '2017-01-18 16:36:25'),
(25, 'bbbbbbb', 'caca', 'ezfigbhoifzjeiogjrionjiotjegriohtjgfjgior', '2017-01-18 16:36:56'),
(26, 'bbbbbbb', 'caca', 'ezfigbhoifzjeiogjrionjiotjegriohtjgfjgior', '2017-01-18 16:37:49'),
(27, 'yuguil', 'rygh', 'tegrhbjijfogsewrhdtjy,h', '2017-01-18 16:37:57'),
(28, 'yuguil', 'rygh', 'tegrhbjijfogsewrhdtjy,h', '2017-01-18 16:39:06'),
(29, 'yuguil', 'rygh', 'tegrhbjijfogsewrhdtjy,h', '2017-01-18 16:39:21'),
(30, 'yuguil', 'romain', 'fhstg', '2017-01-18 16:39:35'),
(31, 'bbbbbbb', 'bbb', 'hrfzhgeiorhtn', '2017-01-18 16:41:43'),
(32, 'bbbbbbb', 'bbb', 'hrfzhgeiorhtn', '2017-01-18 16:43:03'),
(33, 'bbbbbbb', 'bbb', 'hrfzhgeiorhtn', '2017-01-18 16:44:57'),
(34, 'bbbbbbb', 'bbb', 'rhnh f', '2017-01-18 16:45:04'),
(35, 'bbbbbbb', 'bbb', 'rhnh f', '2017-01-18 16:45:15'),
(36, 'bbbbbbb', 'bbb', 'rhnh f', '2017-01-18 16:45:34'),
(37, 'bbbbbbb', 'bbb', 'rhnh f', '2017-01-18 16:46:16'),
(38, 'bbbbbbb', 'bbb', 'rhnh f', '2017-01-18 16:46:30'),
(39, 'il fait froid', 'CÃ©dric', 'Ma voiture n\'a pas dÃ©marrer se matin', '2017-01-19 08:40:09');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `auteur` varchar(45) DEFAULT NULL,
  `contenu` varchar(45) DEFAULT NULL,
  `date_parution` varchar(45) DEFAULT NULL,
  `articles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `auteur`, `contenu`, `date_parution`, `articles_id`) VALUES
(2, 'qsdfghjk', 'szdefrgthyjuki,jnhbgvfcd', '2017-01-19 09:38:01', 39),
(3, 'dfghjkl', 'sdfghjkl', '2017-01-19 09:42:06', 39),
(4, 'dfghjklm', 'dfghklmÃ¹', '2017-01-19 09:47:40', 39),
(5, 'sdfghjklm', 'dfghjk', '2017-01-19 09:52:41', 39),
(6, 'dfghjkl', 'fghjklm', '2017-01-19 10:16:01', 39),
(7, 'dfghjkl', 'fghjkl', '2017-01-19 10:18:56', 39),
(8, 'dfghjkl', 'rfghjklm', '2017-01-19 10:35:53', 38),
(9, 'dfghjk', 'dfghjk', '2017-01-19 10:36:12', 30);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`,`articles_id`),
  ADD KEY `fk_commentaires_articles_idx` (`articles_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `fk_commentaires_articles` FOREIGN KEY (`articles_id`) REFERENCES `articles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
