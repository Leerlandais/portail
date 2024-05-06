-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2024 at 02:40 PM
-- Server version: 10.5.23-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leerland_`
--
CREATE DATABASE IF NOT EXISTS `leerland_` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `leerland_`;

-- --------------------------------------------------------

--
-- Table structure for table `bronx`
--

CREATE TABLE `bronx` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(501) NOT NULL,
  `sm_img_src` varchar(255) NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bronx`
--

INSERT INTO `bronx` (`id`, `title`, `description`, `sm_img_src`, `img_src`, `date`, `slug`) VALUES
(1, 'Come On Feet', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quae animi eveniet eius? Voluptatum totam ducimus beatae reiciendis consectetur aliquam iste tenetur fuga magni illo optio aliquid architecto asperiores voluptates, debitis eligendi iure et atque rem labore? Assumenda dolorem tempore earum laborum ut totam quod, unde optio nobis perspiciatis reiciendis molestias quos voluptatibus asperiores, iure sint alias voluptatum consequatur incidunt aut adipisci cumque reprehenderit nostrum? Vita', '../public/images/photosProgramme/sm_comeonfeet.jpg', '../public/images/photosProgramme/comeonfeet.jpg', 'SAM. 30 AVRIL 20:00', 'come-on-feet'),
(2, 'Masques', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quae animi eveniet eius? Voluptatum totam ducimus beatae reiciendis consectetur aliquam iste tenetur fuga magni illo optio aliquid architecto asperiores voluptates, debitis eligendi iure et atque rem labore? Assumenda dolorem tempore earum laborum ut totam quod, unde optio nobis perspiciatis reiciendis molestias quos voluptatibus asperiores, iure sint alias voluptatum consequatur incidunt aut adipisci cumque reprehenderit nostrum? Vita', '../public/images/photosProgramme/sm_masques.jpg', '../public/images/photosProgramme/masques.jpg', 'SAM. 30 AVRIL 20:00', 'masques'),
(3, 'Cyrano', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quae animi eveniet eius? Voluptatum totam ducimus beatae reiciendis consectetur aliquam iste tenetur fuga magni illo optio aliquid architecto asperiores voluptates, debitis eligendi iure et atque rem labore? Assumenda dolorem tempore earum laborum ut totam quod, unde optio nobis perspiciatis reiciendis molestias quos voluptatibus asperiores, iure sint alias voluptatum consequatur incidunt aut adipisci cumque reprehenderit nostrum? Vita', '../public/images/photosProgramme/sm_cyrano.jpg', '../public/images/photosProgramme/cyrano.jpg', 'SAM. 30 AVRIL 20:00', 'cyrano'),
(4, 'Love', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quae animi eveniet eius? Voluptatum totam ducimus beatae reiciendis consectetur aliquam iste tenetur fuga magni illo optio aliquid architecto asperiores voluptates, debitis eligendi iure et atque rem labore? Assumenda dolorem tempore earum laborum ut totam quod, unde optio nobis perspiciatis reiciendis molestias quos voluptatibus asperiores, iure sint alias voluptatum consequatur incidunt aut adipisci cumque reprehenderit nostrum? Vita', '../public/images/photosProgramme/sm_love.jpg', '../public/images/photosProgramme/love.jpg', 'SAM. 30 AVRIL 20:00', 'love'),
(5, 'Rome', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quae animi eveniet eius? Voluptatum totam ducimus beatae reiciendis consectetur aliquam iste tenetur fuga magni illo optio aliquid architecto asperiores voluptates, debitis eligendi iure et atque rem labore? Assumenda dolorem tempore earum laborum ut totam quod, unde optio nobis perspiciatis reiciendis molestias quos voluptatibus asperiores, iure sint alias voluptatum consequatur incidunt aut adipisci cumque reprehenderit nostrum? Vita', '../public/images/photosProgramme/sm_rome.jpg', '../public/images/photosProgramme/rome.jpg', 'SAM. 30 AVRIL 20:00', 'rome'),
(6, 'Romeo et Juliette', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quae animi eveniet eius? Voluptatum totam ducimus beatae reiciendis consectetur aliquam iste tenetur fuga magni illo optio aliquid architecto asperiores voluptates, debitis eligendi iure et atque rem labore? Assumenda dolorem tempore earum laborum ut totam quod, unde optio nobis perspiciatis reiciendis molestias quos voluptatibus asperiores, iure sint alias voluptatum consequatur incidunt aut adipisci cumque reprehenderit nostrum? Vita', '../public/images/photosProgramme/sm_juliette.jpg', '../public/images/photosProgramme/juliette.jpg', 'SAM. 30 AVRIL 20:00', 'romeo-et-juliette');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id_comp` int(11) NOT NULL,
  `nom_comp` varchar(255) NOT NULL,
  `slug_comp` varchar(255) NOT NULL,
  `added_by` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id_comp`, `nom_comp`, `slug_comp`, `added_by`) VALUES
(1, 'Alpexa', 'alpexa', 'Lee'),
(2, 'Septriz', 'septriz', 'Lee'),
(3, 'Boogle Partner', 'boogle-partner', 'Lee'),
(4, 'Book Of Faces', 'book-of-faces', 'Lee'),
(5, 'Instakilogrammes', 'instakilogrammes', 'Lee'),
(6, 'What\'s Up', 'what_sym_s-up', 'Lee'),
(7, 'New', 'new', 'Anthony'),
(8, 'PineApple', 'pineapple', 'Pierre'),
(9, 'Coca-Cola', 'coca-cola', 'Anthony'),
(10, 'seb', 'seb', 'Lee'),
(11, 'CF2m', 'cf2m', 'André'),
(12, 'coca cola', 'coca-cola', 'André'),
(13, 'Kevin', 'kevin', 'André');

-- --------------------------------------------------------

--
-- Table structure for table `comp_has_inc`
--

CREATE TABLE `comp_has_inc` (
  `has_comp` int(10) UNSIGNED NOT NULL,
  `has_inc` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comp_has_inc`
--

INSERT INTO `comp_has_inc` (`has_comp`, `has_inc`) VALUES
(1, 1),
(2, 3),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13);

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id_inc` int(11) NOT NULL,
  `inc_jan` int(11) NOT NULL,
  `inc_feb` int(11) NOT NULL,
  `inc_mar` int(11) NOT NULL,
  `inc_apr` int(11) NOT NULL,
  `inc_may` int(11) NOT NULL,
  `inc_jun` int(11) NOT NULL,
  `inc_jul` int(11) NOT NULL,
  `inc_aug` int(11) NOT NULL,
  `inc_sep` int(11) NOT NULL,
  `inc_oct` int(11) NOT NULL,
  `inc_nov` int(11) NOT NULL,
  `inc_dec` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id_inc`, `inc_jan`, `inc_feb`, `inc_mar`, `inc_apr`, `inc_may`, `inc_jun`, `inc_jul`, `inc_aug`, `inc_sep`, `inc_oct`, `inc_nov`, `inc_dec`) VALUES
(1, 45137, 3304, 74003, 68503, 73808, 94246, 62017, 23273, 60285, 61127, 78510, 74088),
(2, 81188, 75759, 22364, 88369, 74788, 80759, 71315, 87816, 63936, 84986, 98514, 40404),
(3, 46611, 56217, 27703, 5773, 73651, 97040, 36482, 58609, 25164, 63690, 60610, 2650),
(4, 26937, 79811, 50785, 35564, 52286, 73493, 92746, 38919, 54428, 32606, 80998, 86212),
(5, 25854, 19422, 21344, 88533, 20683, 82385, 17783, 7448, 72153, 76673, 93315, 45947),
(6, 53882, 80453, 30238, 98621, 45999, 78338, 96038, 5427, 19335, 71624, 33262, 4486),
(7, 456, 454, 65, 465, 4, 54, 54, 5, 4, 564, 5454, 654),
(8, 1234, 2345, 3456, 4567, 5678, 6789, 7890, 10245, 13467, 12456, 3210, 9876),
(9, 125, 14, 2558, 254, 154, 6225, 5566, 2466, 2154, 323, 548, 789),
(10, 121, 32123, 13, 21, 321, 321, 321, 321, 32, 1, 321, 321),
(11, 1655, 4897, -1357, 4654, 654, 65, 465, 456, 465, 465, 46, 6546),
(12, 2500, 2500, 2500, 2500, 2500, 2500, 3500, 3500, 4000, 4000, 4200, 5500),
(13, 999999, 999999, 999999, 999999, 999999, 999999, 999999, 999999, 999999, 999999, 999999, 999999);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `play_id` int(10) UNSIGNED NOT NULL,
  `play_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`play_id`, `play_name`) VALUES
(1, 'Anthony A'),
(2, 'Baris A'),
(3, 'Emrah A'),
(4, 'Erhan E'),
(5, 'Guillame B'),
(6, 'Lee B'),
(7, 'Marwan B'),
(8, 'Rami B'),
(9, 'Tevin B');

-- --------------------------------------------------------

--
-- Table structure for table `poetini_home`
--

CREATE TABLE `poetini_home` (
  `id` tinyint(4) NOT NULL,
  `image_src` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `image_text` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poetini_home`
--

INSERT INTO `poetini_home` (`id`, `image_src`, `image_title`, `image_text`) VALUES
(1, 'https://2023.webdev-cf2m.be/Lee/myStuff/Poetini/public/images/emihache_nopad.jpg', 'Sebastien', 'Magib was here'),
(2, 'https://2023.webdev-cf2m.be/Lee/myStuff/Poetini/public/images/dambrohon_nopad.jpg', 'Anthony', 'Tellement stylé de pouvoir modifier comme ça le contenu de la page'),
(3, 'https://2023.webdev-cf2m.be/Lee/myStuff/Poetini/public/images/fenetrexmas_nopad.jpg', 'San Lucbert', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis praesentium minima qui, veniam at rerum hic veritatis ipsum eligendi! Cum laudantium magnam quae magni vero asperiores pariatur qui odit repellendus, hic, atque cumque praesentium similique a facere debitis reiciendis tempore commodi eos quis iste? Dolor, ab quibusdam. Iusto optio distinctio dolor minus animi, voluptates ipsam reprehenderit suscipit blanditiis exercitationem provident neque, excepturi et ea maxime itaque facilis? Similique illo ad quisquam dignissimos aliquid iusto labore obcaecati perspiciatis enim sit nam dolorum cumque autem, eveniet voluptates beatae tempora ducimus iure inventore perferendis, at pariatur officia! Enim odio est non distinctio quidem magnam repellat aut ipsa? Repellat quibusdam, sequi ipsa error tempore maxime? Quis ipsum voluptatum repudiandae repellat iste soluta, fugiat doloribus earum laboriosam quidem at nihil, quaerat mollitia illo iure possimus recusandae accusamus itaque, porro distinctio ducimus! Consequatur, aliquid eum officia quibusdam perspiciatis saepe amet et similique explicabo expedita atque veniam nulla odio est rerum laudantium ipsum nesciunt iure! Saepe except'),
(4, 'https://2023.webdev-cf2m.be/Lee/myStuff/Poetini/public/images/ireregnauld_nopad.jpg', 'Jade Lindgaard', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis praesentium minima qui, veniam at rerum hic veritatis ipsum eligendi! Cum laudantium magnam quae magni vero asperiores pariatur qui odit repellendus, hic, atque cumque praesentium similique a facere debitis reiciendis tempore commodi eos quis iste? Dolor, ab quibusdam. Iusto optio distinctio dolor minus animi, voluptates ipsam reprehenderit suscipit blanditiis exercitationem provident neque, excepturi et ea maxime itaque facilis? Similique illo ad quisquam dignissimos aliquid iusto labore obcaecati perspiciatis enim sit nam dolorum cumque autem, eveniet voluptates beatae tempora ducimus iure inventore perferendis, at pariatur officia! Enim odio est non distinctio quidem magnam repellat aut ipsa? Repellat quibusdam, sequi ipsa error tempore maxime? Quis ipsum voluptatum repudiandae repellat iste soluta, fugiat doloribus earum laboriosam quidem at nihil, quaerat mollitia illo iure possimus recusandae accusamus itaque, porro distinctio ducimus! Consequatur, aliquid eum officia quibusdam perspiciatis saepe amet et similique explicabo expedita atque veniam nulla odio est rerum laudantium ipsum nesciunt iure! Saepe except'),
(5, 'https://2023.webdev-cf2m.be/Lee/myStuff/Poetini/public/images/jadelindgaard_nopad.jpg', 'Ire Regnauld', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis praesentium minima qui, veniam at rerum hic veritatis ipsum eligendi! Cum laudantium magnam quae magni vero asperiores pariatur qui odit repellendus, hic, atque cumque praesentium similique a facere debitis reiciendis tempore commodi eos quis iste? Dolor, ab quibusdam. Iusto optio distinctio dolor minus animi, voluptates ipsam reprehenderit suscipit blanditiis exercitationem provident neque, excepturi et ea maxime itaque facilis? Similique illo ad quisquam dignissimos aliquid iusto labore obcaecati perspiciatis enim sit nam dolorum cumque autem, eveniet voluptates beatae tempora ducimus iure inventore perferendis, at pariatur officia! Enim odio est non distinctio quidem magnam repellat aut ipsa? Repellat quibusdam, sequi ipsa error tempore maxime? Quis ipsum voluptatum repudiandae repellat iste soluta, fugiat doloribus earum laboriosam quidem at nihil, quaerat mollitia illo iure possimus recusandae accusamus itaque, porro distinctio ducimus! Consequatur, aliquid eum officia quibusdam perspiciatis saepe amet et similique explicabo expedita atque veniam nulla odio est rerum laudantium ipsum nesciunt iure! Saepe except'),
(6, 'https://2023.webdev-cf2m.be/Lee/myStuff/Poetini/public/images/sanlucbert_nopad.jpg', 'Xmas Fenetre', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis praesentium minima qui, veniam at rerum hic veritatis ipsum eligendi! Cum laudantium magnam quae magni vero asperiores pariatur qui odit repellendus, hic, atque cumque praesentium similique a facere debitis reiciendis tempore commodi eos quis iste? Dolor, ab quibusdam. Iusto optio distinctio dolor minus animi, voluptates ipsam reprehenderit suscipit blanditiis exercitationem provident neque, excepturi et ea maxime itaque facilis? Similique illo ad quisquam dignissimos aliquid iusto labore obcaecati perspiciatis enim sit nam dolorum cumque autem, eveniet voluptates beatae tempora ducimus iure inventore perferendis, at pariatur officia! Enim odio est non distinctio quidem magnam repellat aut ipsa? Repellat quibusdam, sequi ipsa error tempore maxime? Quis ipsum voluptatum repudiandae repellat iste soluta, fugiat doloribus earum laboriosam quidem at nihil, quaerat mollitia illo iure possimus recusandae accusamus itaque, porro distinctio ducimus! Consequatur, aliquid eum officia quibusdam perspiciatis saepe amet et similique explicabo expedita atque veniam nulla odio est rerum laudantium ipsum nesciunt iure! Saepe except'),
(7, 'https://2023.webdev-cf2m.be/Lee/myStuff/Poetini/public/images/vivmaier_nopad.jpg', 'Viv Maier', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis praesentium minima qui, veniam at rerum hic veritatis ipsum eligendi! Cum laudantium magnam quae magni vero asperiores pariatur qui odit repellendus, hic, atque cumque praesentium similique a facere debitis reiciendis tempore commodi eos quis iste? Dolor, ab quibusdam. Iusto optio distinctio dolor minus animi, voluptates ipsam reprehenderit suscipit blanditiis exercitationem provident neque, excepturi et ea maxime itaque facilis? Similique illo ad quisquam dignissimos aliquid iusto labore obcaecati perspiciatis enim sit nam dolorum cumque autem, eveniet voluptates beatae tempora ducimus iure inventore perferendis, at pariatur officia! Enim odio est non distinctio quidem magnam repellat aut ipsa? Repellat quibusdam, sequi ipsa error tempore maxime? Quis ipsum voluptatum repudiandae repellat iste soluta, fugiat doloribus earum laboriosam quidem at nihil, quaerat mollitia illo iure possimus recusandae accusamus itaque, porro distinctio ducimus! Consequatur, aliquid eum officia quibusdam perspiciatis saepe amet et similique explicabo expedita atque veniam nulla odio est rerum laudantium ipsum nesciunt iure! Saepe except'),
(8, 'https://2023.webdev-cf2m.be/Lee/myStuff/Poetini/public/images/waltbenjamin_nopad.jpg', 'Walt Benjamin', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis praesentium minima qui, veniam at rerum hic veritatis ipsum eligendi! Cum laudantium magnam quae magni vero asperiores pariatur qui odit repellendus, hic, atque cumque praesentium similique a facere debitis reiciendis tempore commodi eos quis iste? Dolor, ab quibusdam. Iusto optio distinctio dolor minus animi, voluptates ipsam reprehenderit suscipit blanditiis exercitationem provident neque, excepturi et ea maxime itaque facilis? Similique illo ad quisquam dignissimos aliquid iusto labore obcaecati perspiciatis enim sit nam dolorum cumque autem, eveniet voluptates beatae tempora ducimus iure inventore perferendis, at pariatur officia! Enim odio est non distinctio quidem magnam repellat aut ipsa? Repellat quibusdam, sequi ipsa error tempore maxime? Quis ipsum voluptatum repudiandae repellat iste soluta, fugiat doloribus earum laboriosam quidem at nihil, quaerat mollitia illo iure possimus recusandae accusamus itaque, porro distinctio ducimus! Consequatur, aliquid eum officia quibusdam perspiciatis saepe amet et similique explicabo expedita atque veniam nulla odio est rerum laudantium ipsum nesciunt iure! Saepe except');

-- --------------------------------------------------------

--
-- Table structure for table `portail_messages`
--

CREATE TABLE `portail_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(1024) NOT NULL,
  `datemessage` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `portail_messages`
--

INSERT INTO `portail_messages` (`id`, `name`, `email`, `message`, `datemessage`) VALUES
(44, 'Lee', 'lee@leerlandais.com', 'First Test Message', '2024-03-06 10:39:57'),
(45, 'Lee', 'lee@leerlandais.com', 'Second Test Message', '2024-03-06 10:40:54'),
(46, 'Lee', 'lee@leerlandais.com', 'new online test', '2024-03-06 10:25:19'),
(47, 'Kevinalert(&quot;NANI ?!&quot;)', 'coucou@hotmail.com', 'alert(&quot;coucou&quot;)', '2024-03-06 13:48:36'),
(48, 'Anna Wilson', 'annawilson.mkt@gmail.com', 'Hello there,\r\n\r\nCongratulation for your newly launched website &quot; leerlandais.com &quot;,\r\n\r\nI wanted to quickly check if you are planning to appear on your website in the Google Organic Search and on Google Maps Section?\r\n\r\nWe can help you to increase your website ranking with all keywords on Google, Bing and Yahoo.\r\n\r\nIf interested, kindly provide me your name, phone number, and email.\r\n\r\nYour sincerely, \r\nAnna Wilson', '2024-03-06 15:58:29'),
(49, 'Lee', 'lee@leerlandais.com', 'Timezone test', '2024-03-07 07:42:07'),
(50, 'François Lahanque', 'Francoislahanque@gmail.com', 'Bravo mon ami ! Cependant les messages ne sont pas très lisibles, il faudrait essayer d’autres couleurs. Sinon ergonomique ment c’est vachement bien, Oceane a besoin que tu lui fasses un site car elle est récemment devenue Thérapeute.', '2024-03-07 15:44:40'),
(51, 'Annis Titsworth', 'titsworth.annis@gmail.com', 'Designing a good Logo is important for businesses as it creates an image in the minds of the customers, \r\nattract them towards your products and services and they probably make a purchase decision.\r\n\r\nWith these points in mind, here are our top pick for Logo maker in 2024.\r\n\r\nthe details here: https://saloof.com/logo', '2024-03-07 16:35:21'),
(52, 'Nitin Chaudhary', 'nitin.chaudhary@rankinghattechie.com', 'Hello team leerlandais.com,\r\n\r\nI was looking at your website, and while the style and design are outstanding, your website&#039;s rating cannot be found on the first pages of Google.\r\n\r\nWe can increase targeted traffic to your website so that it appears on Google&#039;s first page. Bing, Yahoo, AOL, etc.\r\n\r\nDo you want to appear on the front page, then?\r\n\r\nIf interested. May I send you a package/proposal.?\r\n\r\nRegards,\r\nNitin Chaudhary\r\nInternational Project Manager\r\nEmail:- nitin.chaudhary@rankinghattechie.com\r\nContact Number:- +1- (209) 813-5119\r\n\r\n\r\n\r\n\r\nYour domain: leerlandais.com\r\n\r\n\r\n\r\n\r\n\r\nIf you don’t want me to contact you again about this, reply with “unsubscribe.”', '2024-03-07 19:10:47'),
(53, 'Lee', 'leerlandais@gmail.com', 'Hi Erhan', '2024-03-11 08:00:19'),
(54, 'Nishant Sharma', 'nishant.developer22@gmail.com', 'Hi,\r\n\r\nI was just browsing your website and I came up with a great plan to re-develop your website using the latest technology to generate additional revenue and beat your opponents. (leerlandais.com)\r\n\r\nI&#039;m an excellent web developer capable of almost anything you can come up with, and my costs are affordable for nearly everyone.\r\n\r\nI would be happy to send you &quot;Quotes&quot;, “Proposal” Past work Details, &quot;Our Packages&quot;, and “Offers”!\r\n\r\nThanks in advance,\r\nNishant (Business Development Executive)', '2024-03-11 13:49:37'),
(55, 'Kush', 'digitalxplode1@gmail.com', 'Hi leerlandais.com,\r\n\r\nI hope you are doing great!\r\n\r\nI was going through your website on behalf of this email. It has a good design and it looks great, but it’s not ranking in top on Google and other major search engines.\r\n\r\nI’m an SEO Expert and I helped over 250 businesses rank on the (1st Page on Google). My rates are very affordable.\r\n\r\nLet me know if you are interested, then I can send you our SEO Packages and Price list.\r\n\r\nKinds Regards,\r\nKush', '2024-03-11 20:44:22'),
(56, 'Lee', 'lee@leerlandais.com', 'Test of new SQL and Prepare stmt', '2024-03-12 16:31:07'),
(57, 'Lee', 'lee@leerlandais.com', 'New Test', '2024-03-21 16:25:41'),
(58, 'Paul S', 'info@letsgetuoptimize.com', 'Hello leerlandais.com,\r\n\r\nI would like to discuss SEO!\r\n\r\nI can help your website to get on first page of Google and increase the number of leads and sales you are getting from your website.\r\n\r\nMay I send you a quote &amp; price list?\r\n\r\nThanks &amp; Regards,\r\nPaul S\r\nSr SEO consultant\r\nwww.Letsgetuoptimize.com\r\nPh. No: 949-313-8897 (USA)\r\n\r\n\r\n\r\n\r\n\r\nIf you don’t want me to contact you again about this, reply with “unsubscribe.”', '2024-03-22 09:03:48'),
(59, 'NARYTHY1509352NEYRTHYT', 'justinpropheter1986@noissmail.com', 'MEKYUJTYJ1509352MAERWETT', '2024-04-01 08:33:51'),
(60, 'NAEWTRER1509352NERTHRTYHR', 'clorisreleford@gmail.com', 'MERTHYTJTJ1509352MAMYJRTH', '2024-04-01 09:39:25'),
(61, 'Fannie Reeks', 'fannie.reeks28@outlook.com', 'Greetings!\r\n\r\nAre you ready to unlock a world where your earning potential knows no bounds? With AInfluencer, we&#039;re not just talking about making money; we&#039;re talking about revolutionizing the way you earn online. Imagine tapping into a platform that empowers you to become a leading figure in the digital realm, with AI influencers who work tirelessly to boost your income.\r\n\r\nNo previous experience? No worries! Our user-friendly platform is designed to guide you through every step, transforming your digital journey from novice to financial success story. This is your chance to build a sustainable, profitable online presence without the hassle of traditional content creation.\r\n\r\n=&gt;&gt; https://ainfluencere.blogspot.com/\r\n\r\nDon&#039;t let this opportunity pass you by. Tap into unlimited earnings and embrace the future of online influence. Now start your journey to financial freedom!', '2024-04-06 13:22:04'),
(62, 'Dhruv S', 'info@increaseorganictraffic.com', 'Hi Team leerlandais.com, \r\n \r\nI can help your website to get on first page of Google and increase the number of leads and sales you are getting from your website.\r\n\r\nGoogle-certified SEO professional service for  your  website like :\r\n \r\nSEO – ( Full SEO Packages with plan and activities).\r\n \r\nSMO – ( Facebook , Twitter, LinkedIn, YouTube &amp; My Space, Marketing, Etc.). \r\n\r\nIf interested. May I send you a quote/package/proposal.?  \r\n \r\nThanks &amp; Regards,\r\nDhruv S\r\nSr SEO consultant\r\nwww.Increaseorganictraffic.com\r\nPh. No: 1-804-715-1479 (USA)', '2024-04-10 14:53:51'),
(63, 'best_nvOn', 'conmusicha1977@raiz-pr.com', 'Ensure Your Safety \r\nInvest in Your Future with the Best Solar Generator for Home Backup  \r\nhome backup solar generator https://olargener-ackup.com/ .', '2024-04-19 20:06:07'),
(64, 'Bryce Pettway', 'bryce.pettway@yahoo.com', 'Hi,\r\n\r\nHave you ever struggled to create engaging content for your audience? \r\n\r\nWhat if you could easily transform your ideas into professional-sounding videos and natural-sounding voiceovers?\r\n\r\nToday, I&#039;m excited to introduce you to Fliki, a revolutionary platform that uses artificial intelligence to turn text into high-quality videos and realistic voiceovers.\r\n\r\n=&gt;&gt; https://fliki-ai.blogspot.com/\r\n\r\nFliki.ai is perfect for anyone who wants to:\r\n\r\n* Create explainer videos\r\n* Craft engaging social media content\r\n* Develop presentations and educational materials\r\n* Produce audiobooks and podcasts\r\n\r\nAnd the best part? Fliki =&gt;&gt; https://fliki-ai.blogspot.com/  is incredibly easy to use, even for those with no video editing experience.\r\n\r\n**Here&#039;s a special bonus for you:**\r\n\r\nAs a thank you for being part of my subscriber list, I&#039;d like to offer you a free trial of Fliki =&gt;&gt; https://fliki-ai.blogspot.com/  . This trial will give you access to all of Fliki &#039;s features, so', '2024-04-19 21:45:43'),
(65, 'RichardCip', 'yasen.krasen.13+82168@mail.ru', 'Odowidjwoidwo wojdwkslqmwjfbjjdwkd jkwlsqswknfbjwjdmkqendj kedwjdbwhbdqjswkdwjfj eqwkdwknf leerlandais.com', '2024-04-23 19:30:18'),
(66, 'Lukas Noriega', 'lukas.noriega@msn.com', 'Hello, I have a question', '2024-04-23 19:49:04'),
(67, 'Georgia', 'georgia@getonglobe.com', 'Hi [leerlandais.com],\r\n\r\nI hope this message finds you well. My name is Georgia, and I&#039;m with [Get On Globe], where we specialize in [SEO Optimization]. \r\n\r\nWe&#039;ve had the pleasure of helping businesses like yours achieve [Search Results - Ranking - and - Leads], and I believe [leerlandais.com] could greatly benefit from what we have to offer.\r\n\r\nCould we schedule a brief chat to discuss your goals and how we can contribute to your success?\r\n\r\nJust hit &quot;reply&quot;\r\n\r\nCheers,\r\nGeorgia - (Sr SEO consultant)\r\nwww.GetOnGlobe.com\r\nCall: +1 (917) 310-3348\r\n\r\n\r\n\r\n\r\n\r\nNote: - If you’re not Interested in our Services, please send us unsubscribe in.', '2024-04-25 08:53:43'),
(68, 'Raymondcip', 'no.reply.Karl-ErikDeJong@gmail.com', 'Hi-ya! leerlandais.com \r\n \r\nDid you know that it is possible to send letters completely legally? We are offering a legitimate and legal method of sending requests through feedback forms. \r\nNot thought of as spam, messages sent through Feedback Forms are considered important. \r\nWe offer you the chance to try out our service for free. \r\nWe can dispatch up to 50,000 messages in your behalf. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis message was automatically generated. \r\nPlease use the contact details below to get in touch with us. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nWhatsApp  +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\n \r\nWe only use chat for communication.', '2024-04-25 19:22:42'),
(69, 'Mitchell Dehaven', 'mitchell.dehaven@gmail.com', 'Dear Creator,\r\n\r\nAre you looking to take your YouTube channel to the next level and increase your visibility across both YouTube and Google Search? Look no further! My partner and I are excited to introduce you to our comprehensive video SEO optimization service tailored to maximize your growth potential.\r\n\r\nAs certified YouTube growth experts, we understand the importance of optimizing every aspect of your videos and channel to ensure they reach their fullest potential. With our proven track record and dedication to staying ahead of the curve in technology and trends, we guarantee to implement the most powerful, vital, and essential features to elevate your presence on these platforms.\r\n\r\n=&gt;&gt; https://optimize-youtube-video-seo.blogspot.com/ \r\n\r\nOur service includes:\r\n\r\n1. Keywords Research: We conduct in-depth research to identify the most relevant and high-performing keywords in your niche, ensuring your content is perfectly aligned with what your audience is searching for.\r\n   \r\n2. Video Optimization', '2024-04-28 12:10:43'),
(70, 'TobiasInarp', 'no.reply.AlainPersson@gmail.com', 'Hey! leerlandais.com \r\n \r\nDid you know that it is possible to send message whollСѓ in lawful manner? We suggest a new legal way of sending business proposals through contact forms. \r\nMessages that are sent by Feedback Forms are not seen as spam, since they are thought of as important. \r\nWe offer you the chance to try out our service for free. \r\nWe shall forward up to 50,000 messages for you. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis offer is automatically generated. \r\nPlease use the contact details below to get in touch with us. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nWhatsApp  +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\n \r\nWe only use chat for communication.', '2024-05-01 08:58:46'),
(71, 'Anton Muhammad', 'muhammad.anton@googlemail.com', 'Hey, would you like to get some Bitc0in..\r\n\r\nWithout actually paying for it?\r\n\r\nSound like an impossible task to pull off?\r\n\r\nWell I’m here to tell you that this is NOT the case\r\n\r\n=&gt;&gt; Go here to see the secret for getting Bitc0in &amp; Ethereum\r\n\r\n=&gt;&gt; https://bitcoin-coinz.blogspot.com/\r\n\r\nNothing like this has been accomplished before..\r\n\r\nWith this brand new system… \r\n\r\n..you have the ability to turn ANY phone or \r\ncomputer into a crypt0 extraction machine.\r\n\r\nWant to see it in action?\r\n\r\n=&gt;&gt; https://bitcoin-coinz.blogspot.com/\r\n\r\nThis is one of those things you “wish” \r\nyou had your hands on much earlier..\r\n\r\nCheers,\r\n\r\n[Anton]', '2024-05-02 01:55:38'),
(72, 'Keeley Pilcher', 'pilcher.keeley@hotmail.com', 'Dear %domain_as_name%  Members,\r\n\r\nDo you believe in the power of storytelling for leerlandais.com ? Picture this: a world where any text, URL, or article can seamlessly transform into captivating audiobooks or podcasts with just a few clicks. It sounds like something out of a science fiction novel, doesn&#039;t it? Well, allow me to introduce you to the protagonist of this tale: Ecco.\r\n\r\n=&gt;&gt; https://coursiify.blogspot.com/\r\n\r\nEcco isn&#039;t just another AI tool; it&#039;s a game-changer in the realm of content creation. Powered by ChatGPT4, Ecco brings your words to life in 660 different voices and 80 languages. Whether you&#039;re a seasoned content creator or just starting your journey, Ecco opens doors to endless possibilities.\r\n\r\n=&gt;&gt; https://coursiify.blogspot.com/\r\n\r\nBut here&#039;s the twist: Ecco isn&#039;t just about creating content; it&#039;s about turning that content into profit. With a built-in marketplace boasting 2.3 million active users, you can effortlessly share your creations ', '2024-05-05 06:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `portail_replies`
--

CREATE TABLE `portail_replies` (
  `id` int(11) NOT NULL,
  `parent_message_id` varchar(50) NOT NULL,
  `reply_name` varchar(100) NOT NULL,
  `reply_to_parent` varchar(1024) NOT NULL,
  `date_reply` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `portail_replies`
--

INSERT INTO `portail_replies` (`id`, `parent_message_id`, `reply_name`, `reply_to_parent`, `date_reply`) VALUES
(22, '44', 'Lee', 'First Reply', '2024-03-06 14:25:45'),
(23, '44', 'Lee', 'Second Reply', '2024-03-06 14:25:45'),
(24, '45', 'Lee', 'Reply', '2024-03-06 14:25:45'),
(25, '45', 'Lee', 'Another reply', '2024-03-06 14:25:45'),
(26, '46', 'Lee', 'and reply', '2024-03-06 14:25:45'),
(27, '46', 'Lee', 'yay :)', '2024-03-06 14:25:45'),
(28, '47', 'Lee', 'Heheh, alert(&quot;coucou&quot;) à toi, aussi', '2024-03-06 14:25:45'),
(29, '46', 'Lee', 'Time of reply now visible on hover', '2024-03-06 14:31:46'),
(30, '47', 'Kevin', 'mdr qui ne tente rien n&#039;a rien', '2024-03-06 15:54:04'),
(31, '48', 'Michael', 'Test de réponse', '2024-03-06 19:01:17'),
(32, '48', 'Michael', 'Deuxième réponse', '2024-03-06 19:03:56'),
(33, '48', 'Lee', 'Oui, plusieurs réponses sont possibles et seules les réponses à ce message s&#039;affichent ici :D', '2024-03-06 19:13:34'),
(34, '52', 'Lee', 'test', '2024-03-11 06:10:19'),
(35, '53', 'Erhan', 'Hi Lee', '2024-03-11 08:00:28'),
(36, '53', 'dsfdsf', 'sdfdsf', '2024-03-11 11:57:14'),
(37, '53', 'Magib', 'Hi', '2024-03-11 13:28:19'),
(38, '56', 'Lee', 'and a reply test', '2024-03-12 16:31:18'),
(39, '56', 'dfgdfgd', 'dfgdfgdfg', '2024-03-21 09:32:58'),
(40, '56', 'ddd', 'ddd', '2024-03-21 16:25:25'),
(41, '57', 'Lee', 'check', '2024-03-24 14:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `portail_tabs_artist`
--

CREATE TABLE `portail_tabs_artist` (
  `id` int(11) NOT NULL,
  `artist_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `portail_tabs_artist`
--

INSERT INTO `portail_tabs_artist` (`id`, `artist_name`) VALUES
(1, 'Leonard Cohen'),
(2, 'Tom Waits');

-- --------------------------------------------------------

--
-- Table structure for table `portail_tabs_song`
--

CREATE TABLE `portail_tabs_song` (
  `id` int(10) UNSIGNED NOT NULL,
  `artist_id` int(10) UNSIGNED NOT NULL,
  `song_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `portail_tabs_song`
--

INSERT INTO `portail_tabs_song` (`id`, `artist_id`, `song_name`) VALUES
(2, 1, 'Story of Isaac'),
(3, 2, 'Dead and Lovely');

-- --------------------------------------------------------

--
-- Table structure for table `portail_tabs_tab`
--

CREATE TABLE `portail_tabs_tab` (
  `id` int(10) UNSIGNED NOT NULL,
  `song_id` tinyint(3) UNSIGNED NOT NULL,
  `tab` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portail_tabs_tab`
--

INSERT INTO `portail_tabs_tab` (`id`, `song_id`, `tab`) VALUES
(1, 1, '\"C          G           F             C\r\nI remember you well in the Chelsea Hotel\r\n                    G            Am\r\nYou were talking so brave and so sweet\r\nC         G           F           C\r\nGiving me head on the unmade bed\r\n          F                      G\r\nWhile the limousines wait in the street\r\nAm                         F\r\nThose were the reasons and that was New York\r\n        C               Em/B          Am\r\nWe were running for the money and the flesh\r\n    F                            C\r\nAnd that was called love for the workers in song\r\n         F                          G\r\nProbably still is for those of them left\r\n \r\n        F             C\r\nAh, but you got away, didnt you babe?\r\n                     Em/B        Am\r\nYou just turned your back on the crowd\r\nF                          C\r\nYou got away, I never once heard you say\r\n   F                 C\r\nI need you, I dont need you\r\n  F                 C\r\n\r\nI need you, I dont need you\r\n    F                   Am    G\r\nAnd all of that jiving around\r\n\r\n    C          G           F             C\r\nI remember you well in the Chelsea Hotel\r\n                      G           Am\r\nYou were famous, your heart was a legend\r\n\r\n    C        G                  F            C\r\n\r\nYou told me again you preferred handsome men\r\n        F                               G\r\nBut for me you would make an exception\r\n    Am                          F\r\nAnd clenching your fist for the ones like us\r\n         C               Em/B       Am\r\nWho are oppressed by the figures of beauty\r\n    F                          C\r\nYou fixed yourself, you said: Well, never mind\r\n       F                     G\r\nWe are ugly, but we have the music\r\n\r\n\r\n        C         G                     F         C\r\nI dont mean to suggest that I loved you the best\r\n                      G           Am\r\nI cant keep track of each fallen robin\r\n    C          G           F              C\r\nI remember you well in the Chelsea Hotel\r\n       F                                   G\r\nThats all, I dont even think of you that often\r\n`)\"');

-- --------------------------------------------------------

--
-- Table structure for table `questionarchive`
--

CREATE TABLE `questionarchive` (
  `quest_id` int(10) UNSIGNED NOT NULL,
  `quest_asked` varchar(512) NOT NULL,
  `quest_answer` varchar(512) NOT NULL,
  `quest_player` int(10) UNSIGNED NOT NULL,
  `quest_result` tinyint(3) UNSIGNED NOT NULL COMMENT '1: Great\r\n2: Good\r\n3: Bad\r\n4: Absent',
  `quest_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questionarchive`
--

INSERT INTO `questionarchive` (`quest_id`, `quest_asked`, `quest_answer`, `quest_player`, `quest_result`, `quest_time`) VALUES
(1, 'Comment ça va?', 'uhhh, ternaire!', 8, 3, '2024-04-07 16:50:31'),
(2, 'Ça va?', 'Top', 5, 1, '2024-04-07 16:50:58'),
(3, 'Ça marche, ton projet?', 'Mais oui :)', 6, 1, '2024-04-07 16:52:01'),
(4, 'absent', '', 2, 4, '2024-04-07 16:52:20'),
(5, 'say hi', 'hi Charly', 5, 1, '2024-04-08 07:42:22'),
(6, 'Hi', 'Hey', 1, 1, '2024-04-08 11:10:59'),
(7, 'Tu veux 40c?', 'non', 3, 3, '2024-04-08 11:55:22');

-- --------------------------------------------------------

--
-- Table structure for table `questionchart`
--

CREATE TABLE `questionchart` (
  `total_question` int(10) UNSIGNED NOT NULL,
  `total_great` int(10) UNSIGNED DEFAULT NULL,
  `total_good` int(10) UNSIGNED DEFAULT NULL,
  `total_bad` int(10) UNSIGNED DEFAULT NULL,
  `total_absent` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questionchart`
--

INSERT INTO `questionchart` (`total_question`, `total_great`, `total_good`, `total_bad`, `total_absent`) VALUES
(7, 4, 0, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `scorechart`
--

CREATE TABLE `scorechart` (
  `score_play_id` int(10) UNSIGNED NOT NULL,
  `total_points` int(11) DEFAULT NULL,
  `great_answer` int(10) UNSIGNED DEFAULT NULL,
  `good_answer` int(10) UNSIGNED DEFAULT NULL,
  `bad_answer` int(10) UNSIGNED DEFAULT NULL,
  `absence` int(10) UNSIGNED DEFAULT NULL,
  `total_answer` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scorechart`
--

INSERT INTO `scorechart` (`score_play_id`, `total_points`, `great_answer`, `good_answer`, `bad_answer`, `absence`, `total_answer`) VALUES
(1, 2, 1, 0, 0, 0, 1),
(2, -1, 0, 0, 0, 1, 1),
(3, -1, 0, 0, 1, 0, 1),
(4, 0, 0, 0, 0, 0, 0),
(5, 4, 2, 0, 0, 0, 2),
(6, 2, 1, 0, 0, 0, 1),
(7, 0, 0, 0, 0, 0, 0),
(8, -1, 0, 0, 1, 0, 1),
(9, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bronx`
--
ALTER TABLE `bronx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_comp`);

--
-- Indexes for table `comp_has_inc`
--
ALTER TABLE `comp_has_inc`
  ADD PRIMARY KEY (`has_comp`,`has_inc`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id_inc`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`play_id`);

--
-- Indexes for table `poetini_home`
--
ALTER TABLE `poetini_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portail_messages`
--
ALTER TABLE `portail_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portail_replies`
--
ALTER TABLE `portail_replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portail_tabs_artist`
--
ALTER TABLE `portail_tabs_artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portail_tabs_song`
--
ALTER TABLE `portail_tabs_song`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portail_tabs_tab`
--
ALTER TABLE `portail_tabs_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionarchive`
--
ALTER TABLE `questionarchive`
  ADD PRIMARY KEY (`quest_id`);

--
-- Indexes for table `questionchart`
--
ALTER TABLE `questionchart`
  ADD PRIMARY KEY (`total_question`);

--
-- Indexes for table `scorechart`
--
ALTER TABLE `scorechart`
  ADD PRIMARY KEY (`score_play_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bronx`
--
ALTER TABLE `bronx`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id_comp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id_inc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `play_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `poetini_home`
--
ALTER TABLE `poetini_home`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `portail_messages`
--
ALTER TABLE `portail_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `portail_replies`
--
ALTER TABLE `portail_replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `portail_tabs_artist`
--
ALTER TABLE `portail_tabs_artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portail_tabs_song`
--
ALTER TABLE `portail_tabs_song`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portail_tabs_tab`
--
ALTER TABLE `portail_tabs_tab`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questionarchive`
--
ALTER TABLE `questionarchive`
  MODIFY `quest_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `scorechart`
--
ALTER TABLE `scorechart`
  MODIFY `score_play_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
