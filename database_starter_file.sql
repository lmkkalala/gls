-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 21 Janvier 2021 à 12:39
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+02:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `website_gls_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `autologin`
--

CREATE TABLE IF NOT EXISTS `autologin` (
  `user` int(11) NOT NULL,
  `series` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `created` int(15) NOT NULL,
  PRIMARY KEY (`user`,`series`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `autologin`
--

INSERT INTO `autologin` (`user`, `series`, `key`, `created`) VALUES
(5, '538125c3d0be8233da80e20656235b3c0152c58d68cedc8d4dc74f9bc8d6daa5', '57699125abb1dfba0267a291abeee028ae94d88fc1fc7bf0532467aca55778c1', 1609734741),
(5, 'eb4a068f9569fb2e686b0d535a33935c832a6838db3d4c99b11d98081eaedc9e', '1ca022150646751ec7b9bcc268c6bd6609fd79eaae0ea2ed1bec8dcb8b795e7e', 1609804051),
(6, '3483b08b7a2764918bd54f5f50915dfe872ce023ea7f5d23ba60fc4f0060a165', 'fa307f7ea6ba527e058f36c045e3bd079f5ca0dbac3184c9270db3c859c3f2a5', 1609865515),
(6, '1a0284900c2d81385e396737b3782176b29ed078e4f4252bf099672f4d2ce45e', 'a22db633c7c2fd10c2ecbf289014080479c8f256561d1a4d7a2c47a8858cfd11', 1609867000),
(6, 'dbb52d711d1e400c4211c60283d5c8a8c7a2f961659684262e3f31d8b8000fba', 'c584ef9a344bf0f7f9f811ca330eb83b3fe9e6726acc254e5126390038440f70', 1611090964),
(7, 'e844a101a50d288205fd7b0e4bb463894dec7e937aa74b58ed1eeec5fc6511a6', '34e1a03a429d247ce6ce156487d6a424da8dc9ce5440b14c6dc89e8e0211a3dd', 1611099915),
(6, '1d74f17c04d186c4ea3e9cbbe370c3219bf2053e2fe1c47b965720a616207672', 'b140be497d44ece7c6ca37016caaa1fb47f45a00dc78e82fcf99ed9434e6ca54', 1611100888),
(7, '954721a917463fb8d7b30859a4c49f234232d40fa76c2deb0fc1efc6732e9615', '3879e5a8a5cc488589850edafb0ce091442f859b9abe07db2c2ee28a697cf37b', 1611102061),
(7, '6661c7fde264e01caf87ec764c43ce90b63884165448623e96f33d0d02644887', 'b30d0289748e123ec2dfa717cce382fa0293e908d57be3e2d820d56cf3f9e8ac', 1611152337),
(7, '6568ac1846aede69bf4f7a081b564464f8898a570d34131acd099d87b54773d1', '64649d9b3f2ac545d341b6bc1ec142304df431a652dad8340020d9d9281be7ef', 1611159394),
(7, '3f5477058d94d69429fa8880c6f5ead4029f8f1e851ac7b73a88ce5c71c0c25d', '2cc4140f61d5ffe18cf2ffb873f4f042389cfff57afb6477dd3c94f71776dc97', 1611160703),
(7, '0604791937964d49d6bc8e4e202beca338337b206963e3be9dceec9e1731b1d9', '071492a3b7473c9fbd84e8d996aff4a00f619ffd1d51ad9853ad7938228015f9', 1611168292),
(7, '2c141528ae695a84ccd76e86d65651dee678762b23bd70dabdb49506bd07eb49', 'a1489c27d906f55862f23c77e72d1c2f8ce643e985f93bc1192d0525d3440778', 1611223417);

-- --------------------------------------------------------

--
-- Structure de la table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` varchar(10) NOT NULL,
  `post_date` text NOT NULL,
  `post_owner` longtext NOT NULL,
  `post_caption` varchar(200) NOT NULL,
  `post_content` longtext NOT NULL,
  `post_titre` varchar(100) NOT NULL,
  `post_illustration` blob NOT NULL,
  `validation` int(10) NOT NULL,
  PRIMARY KEY (`post_id`,`post_titre`),
  UNIQUE KEY `post_id` (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `post_comments`
--

CREATE TABLE IF NOT EXISTS `post_comments` (
  `comment_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_id` varchar(10) NOT NULL,
  `comment_date` text NOT NULL,
  `comment_owner` text NOT NULL,
  `comment_content` longtext NOT NULL,
  `validation` int(10) NOT NULL,
  PRIMARY KEY (`comment_id`),
  UNIQUE KEY `comment_id` (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Contenu de la table `post_comments`
--

INSERT INTO `post_comments` (`comment_id`, `post_id`, `comment_date`, `comment_owner`, `comment_content`, `validation`) VALUES
(35, '1611228126', 'January 21, 2021 à 13:22', 'anymous_feedback', 'user_feedback->J''aimerai que ITIG soit serieux', 0),
(34, '1611223721', 'January 21, 2021 à 12:09', 'ANSIMA ELVIS', 'merci!', 1),
(33, '1611223405', 'January 21, 2021 à 12:03', 'anymous_feedback', 'user_feedback->J''aimerai que ITIG soit serieux!', 0),
(32, '1611223234', 'January 21, 2021 à 12:00', 'anymous_feedback', 'user_feedback->J''aimerai que ITIG soit serieux', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `Type` varchar(30) NOT NULL,
  `Noms` varchar(30) NOT NULL,
  `Pseudo` varchar(30) NOT NULL,
  `contacts` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` longblob,
  `profession` text,
  `Apropos` text,
  `Date_creation` varchar(30) NOT NULL,
  `validation` int(10) NOT NULL,
  `key` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `Noms` (`Noms`,`contacts`),
  UNIQUE KEY `Noms_2` (`Noms`),
  UNIQUE KEY `contacts` (`contacts`),
  KEY `Type de compte` (`Type`,`Noms`,`password`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `Type`, `Noms`, `Pseudo`, `contacts`, `password`, `image`, `profession`, `Apropos`, `Date_creation`, `validation`, `key`) VALUES
(7, 'admin', 'ANSIMA ELVIS', '@elvisansima', 'ansimapersic@gmail.com', '$2a$08$0qGo0934pW3Nulft0h/3AetFy.NzEQb0kUDEqNScexth02K8bPDgG', 0x414e53494d415f454c5649532e6a7067, 'Etudiant', 'Simple', '2021-01-20 01:45:04', 1, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
