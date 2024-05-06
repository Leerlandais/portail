-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2024 at 04:44 AM
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
CREATE DATABASE IF NOT EXISTS `portail_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `portail_db`;

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
  `dest_url` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `placement` smallint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portals`
--

INSERT INTO `portals` (`id`, `title`, `description`, `img_src`, `dest_url`, `visible`, `placement`) VALUES
(1, 'CRUD Project', 'Projet sur CRUD, Bootstrap et Leaflet', 'url(images/mapCard.png)', 'https://leerlandais.com/newCrud\", \"_self', 1, 1),
(2, 'Jeux du Mémoire', 'Crée 07/03/2024 - 09/03/2024', 'url(images/memCardGame.png)', '?p=cardgame\", \"_self', 1, 2),
(3, 'Countries', 'Un exercice sur les DB et PHP', 'url(images/ie.svg)', 'https://leerlandais.com/newMaps\", \"_self', 1, 3);

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
