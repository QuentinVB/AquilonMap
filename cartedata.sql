-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 19 Mars 2017 à 16:06
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `carteaquilon`
--

-- --------------------------------------------------------

--
-- Structure de la table `cartedata`
--

CREATE TABLE `cartedata` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `x` int(11) NOT NULL DEFAULT '0',
  `y` int(11) NOT NULL DEFAULT '0',
  `classes` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_ajout` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cartedata`
--

INSERT INTO `cartedata` (`id`, `name`, `x`, `y`, `classes`, `date_ajout`) VALUES
(2, 'Spawn', 310, -78, 'lieu', '2017-03-19 11:45:00'),
(3, 'Ruines entrée', 50, 34, 'ruines', '2017-03-19 11:50:00'),
(4, 'Ruines Balcon', 283, -13, 'ruines', '2017-03-19 13:16:00'),
(5, 'Ruines Forge', 205, 62, 'ruines', '2017-03-19 13:40:14'),
(6, 'PK 0', 0, 0, 'lieu', '2017-03-19 16:12:15'),
(7, 'Ruines sortie marine', 339, -15, 'ruines', '2017-03-19 16:12:42'),
(8, 'limite', -156, -190, 'limite', '2017-03-19 16:13:18'),
(9, 'limite', -65, -314, 'limite', '2017-03-19 16:14:16'),
(10, 'limite', 544, -103, 'limite', '2017-03-19 16:14:31'),
(11, 'limite', 402, 1833, 'limite', '2017-03-19 16:14:46'),
(12, 'limite', 1847, 1280, 'limite', '2017-03-19 16:15:48'),
(13, 'limite', 1056, 537, 'limite', '2017-03-19 16:16:02'),
(14, 'limite', 1700, 1411, 'limite', '2017-03-19 16:16:14'),
(15, 'limite', -726, 1113, 'limite', '2017-03-19 16:16:58'),
(16, 'limite', -650, 1308, 'limite', '2017-03-19 16:17:13'),
(17, 'limite', 1737, 644, 'limite', '2017-03-19 16:17:24'),
(18, 'limite', 1543, 1550, 'limite', '2017-03-19 16:17:58'),
(19, 'limite', 484, 1836, 'limite', '2017-03-19 16:18:36'),
(20, 'Temple Sous-Marin', -376, 58, 'ruines', '2017-03-19 16:19:21'),
(21, 'Temple Sous-Marin', -320, 1700, 'ruines', '2017-03-19 16:19:39'),
(22, 'Temple Sous-Marin', -850, 1160, 'ruines', '2017-03-19 16:20:29'),
(23, 'Temple Sous-Marin', 800, 676, 'ruines', '2017-03-19 16:20:42'),
(24, 'Camp de l\'Ordre', -122, 890, 'lieu', '2017-03-19 16:33:14'),
(25, 'Le Refuge', 891, 1426, 'lieu', '2017-03-19 16:33:52'),
(26, 'SBED', -107, 64, 'lieu', '2017-03-19 16:34:22'),
(27, 'Pont Zeult', 0, 57, 'lieu', '2017-03-19 16:35:14'),
(28, 'Ruines Secretes', 271, 528, 'ruines', '2017-03-19 16:36:18'),
(29, 'Maison Alain Quart-de-main', 306, 233, 'lieu', '2017-03-19 16:37:05'),
(30, 'Machineries étranges', 80, 327, 'ruines', '2017-03-19 16:37:58'),
(31, 'Camp de Vorvask', 29, 1292, 'lieu', '2017-03-19 16:38:22'),
(32, 'Crypte inondée', -71, 1103, 'ruines', '2017-03-19 16:38:40'),
(33, 'Camp Brass\'Ozeille', -70, 1520, 'lieu', '2017-03-19 16:39:16'),
(34, 'Ruines des sables', 1633, 1221, 'ruines', '2017-03-19 16:39:58'),
(35, 'Sanctuaire', 1049, 990, 'ruines', '2017-03-19 16:40:53'),
(36, 'Ancien temple', 322, 1741, 'ruines', '2017-03-19 16:41:07'),
(37, 'Fortin de fortune', -171, 1050, 'lieu', '2017-03-19 16:41:25'),
(38, 'Maison détruite', -189, 954, 'ruines', '2017-03-19 16:43:49'),
(39, 'Arbre d\'Anna', -202, 934, 'lieu', '2017-03-19 16:44:12'),
(40, 'Balise marine', 415, 27, 'lieu', '2017-03-19 16:44:38'),
(41, 'Glacier', 475, 1500, 'biome', '2017-03-19 16:45:12'),
(42, 'Vallé close', 256, 442, 'lieu', '2017-03-19 16:46:58'),
(43, 'Vallé close', 276, 337, 'lieu', '2017-03-19 16:47:12'),
(44, 'Pont', -123, 466, 'lieu', '2017-03-19 16:47:46'),
(45, 'Pont', -123, 568, 'lieu', '2017-03-19 16:48:00'),
(46, 'Désert', 1500, 1200, 'biome', '2017-03-19 16:48:37'),
(47, 'Marais', 0, 1000, 'biome', '2017-03-19 16:49:24'),
(48, 'Banc de sable', 787, 479, 'biome', '2017-03-19 16:50:22'),
(49, 'Banc de sable', 1721, 1000, 'biome', '2017-03-19 16:50:34'),
(50, 'Banc de sable', -280, 1261, 'biome', '2017-03-19 16:50:47'),
(51, 'Port', 694, 1069, 'emplacement', '2017-03-19 16:52:55'),
(52, 'Ville Pilotis', -339, 262, 'emplacement', '2017-03-19 16:53:07'),
(53, 'Plateau Creux', 758, 1668, 'biome', '2017-03-19 16:55:45'),
(54, 'Lac de Plaine', 420, 1010, 'biome', '2017-03-19 16:56:03'),
(55, 'Nouvelle Ile', 2100, 1600, 'biome', '2017-03-19 16:56:41');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cartedata`
--
ALTER TABLE `cartedata`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cartedata`
--
ALTER TABLE `cartedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
