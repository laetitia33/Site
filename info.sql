-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 25 mai 2019 à 14:07
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `info`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(155) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `reporting` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `author`, `comment`, `comment_date`, `reporting`) VALUES
(1, 'lulu', 'merci bcp', '2019-05-24 15:15:19', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(155) NOT NULL,
  `title` varchar(155) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_creation` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=156 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `author`, `title`, `image`, `content`, `date_creation`) VALUES
(1, 'Bernardi', 'Cours ', 'assets/images/image9.jpg', '<p>Cours</p>', '2019-04-05 13:39:29'),
(3, 'Bernardi', 'Projets personnalisés', 'assets/images/image6.jpg', '<p>&nbsp;Aide &agrave; la conception de livres photos, diaporamas...</p>', '2019-04-05 14:01:09'),
(2, 'Bernardi', 'Creation de site Internet', 'assets/images/image2.jpg', '<p>Creation de site internet<br /><a href=\"index.php?action=site\">sites r&eacute;alis&eacute;s</a></p>', '2019-04-05 14:04:54'),
(4, 'Bernardi', 'Assistance informatique', 'assets/images/image10.jpg', '<p>Assistance informatique &agrave; votre domicile, en ligne , par t&eacute;l&eacute;phone</p>', '2019-04-05 13:33:24');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_group` int(11) NOT NULL DEFAULT '2',
  `pseudo` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pass` varchar(155) CHARACTER SET latin1 NOT NULL,
  `email` varchar(155) NOT NULL,
  `registration_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `id_group`, `pseudo`, `pass`, `email`, `registration_date`) VALUES
(1, 1, 'Bernardi', '$2y$10$MCMO.jMZYVy6u2HwOuJFLeoP8OtFnjAEE/LwRoZJcCn5dyu1EiEeC', '33260laetitia.bernardi@gmail.com', '2019-03-31 16:30:03'),
(11, 2, 'lulu', '$2y$10$ot5VSs.kaH8EtN27BrSs6u2IOPTuQqKOZkav7CdAvFNrZ/aULf8Ta', 'Lgachoucha@yahoo.fr', '2019-04-06 17:10:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
