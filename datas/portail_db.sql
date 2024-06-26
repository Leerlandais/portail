-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2024 at 06:16 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portail_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `global_css`
--

DROP TABLE IF EXISTS `global_css`;
CREATE TABLE IF NOT EXISTS `global_css` (
  `id` smallint UNSIGNED NOT NULL AUTO_INCREMENT,
  `selector` text COLLATE utf8mb4_general_ci NOT NULL,
  `value` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `old_value` varchar(1024) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `global_css`
--

INSERT INTO `global_css` (`id`, `selector`, `value`, `old_value`) VALUES
(1, 'Background Colour', 'linear-gradient(180deg, hsla(208, 33%, 21%, 1) 0%, hsla(211, 36%, 46%, 1) 100%)', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portals`
--

DROP TABLE IF EXISTS `portals`;
CREATE TABLE IF NOT EXISTS `portals` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(512) COLLATE utf8mb4_general_ci NOT NULL,
  `img_src` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img_width` tinyint UNSIGNED NOT NULL DEFAULT '80',
  `img_height` tinyint NOT NULL DEFAULT '30',
  `dest_url` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `placement` smallint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `placement` (`placement`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portals`
--

INSERT INTO `portals` (`id`, `title`, `description`, `img_src`, `img_width`, `img_height`, `dest_url`, `visible`, `placement`) VALUES
(1, 'CRUD Project', 'Projet sur CRUD, Bootstrap et Leaflet', 'url(images/mapCard.png)', 80, 30, 'https://leerlandais.com/newCrud', 1, 0),
(2, 'Jeux du Mémoire', 'Crée 07/03/2024 - 09/03/2024', 'url(images/memCardGame.png)', 80, 30, 'https://leerlandais.com/portail/public/?p=cardgame', 1, 1),
(3, 'Countries', 'Un exercice sur les DB et PHP', 'url(images/ie.svg)', 80, 30, 'https://leerlandais.com/newMaps', 1, 3),
(78, 'Tabs', 'Un collection de mes tablatures préférés', 'url(images/guitar1.jpg)', 80, 30, 'https://leerlandais.com/newTabs', 1, 7),
(79, 'Site Préformation', 'Mon premier site. Fait pour le fin de notre préformation (17/11/2023)', 'url(images/cmdrPet.jpeg)', 80, 30, 'https://2023.webdev-cf2m.be/Lee/Site/', 1, 2),
(80, 'Premier Travail d&#039;Intégration', 'Notre premier test d&#039;intégration (14/12/2023)', 'url(images/TI1.png)', 80, 30, 'https://2023.webdev-cf2m.be/Lee/TI/public/', 1, 5),
(81, 'Deuxième Travail d&#039;Intégration', 'Le deuxième test d&#039;intégration (19/02/2024)', 'url(images/postit.jpeg)', 80, 30, 'https://2023.webdev-cf2m.be/Lee/TI2-HomeVersion/public/', 1, 8),
(82, 'GitHub', '', 'url(images/git_shadow.jpeg)', 80, 30, 'https://github.com/Leerlandais', 1, 9),
(83, 'Mes débuts avec JS', 'Mes premiers pas en JS (17/11/2023 - 22/12/2023)', 'url(images/javascript.jpeg)', 80, 30, 'https://2023.webdev-cf2m.be/Lee/javaStuff/', 1, 6),
(84, 'CF2M', 'Vers le site de l&#039;école', 'url(images/cf2m_logo.png)', 80, 30, 'https://www.cf2m.be/home', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(3) COLLATE utf8mb4_general_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nom`, `pwd`) VALUES
(1, 'Lee', '$2y$10$/q8mIZg0fZXVJ6DiddNE8u4VAHJLOe8LEzX.OQG5euAIBaIHWs5ia');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
