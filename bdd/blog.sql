-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 26, 2016 at 05:44 PM
-- Server version: 5.7.13-0ubuntu0.16.04.2
-- PHP Version: 7.0.8-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--
-- Creation: Aug 26, 2016 at 02:52 PM
-- Last update: Aug 26, 2016 at 02:52 PM
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `idArticles` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  `brouillon` tinyint(1) NOT NULL DEFAULT '1',
  `date_redac` datetime NOT NULL,
  `comptes_idcomptes` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idArticles`),
  KEY `fk_articles_comptes_idx` (`comptes_idcomptes`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `articles`:
--   `comptes_idcomptes`
--       `comptes` -> `idcomptes`
--

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`idArticles`, `titre`, `contenu`, `brouillon`, `date_redac`, `comptes_idcomptes`) VALUES
(1, 'remplissage 01', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in tempor odio. Nam eget nisi ac mauris maximus laoreet nec id lorem. Pellentesque varius libero ut varius dapibus. Aenean sagittis urna id lectus malesuada rhoncus. Cras at finibus purus. Sed non cursus urna, quis sagittis urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin imperdiet sapien velit, eget vehicula lectus posuere quis. Fusce ornare nunc eu augue ultricies tempus. In pulvinar id velit at malesuada. Donec a tincidunt dolor. Fusce non pulvinar nulla. Sed dapibus orci vitae mi finibus porta. Donec sed odio ipsum.\r\n\r\nSed a volutpat metus. Aliquam ac facilisis sapien. Duis ut turpis sit amet sapien pretium porttitor eu non tellus. Cras faucibus eu lorem vitae laoreet. Nulla odio massa, condimentum ut maximus ut, ornare eu tortor. Ut nec elit mollis risus suscipit congue sit amet sed nibh. Ut in vestibulum ante. Nam vulputate erat elit, a vehicula turpis consectetur nec. Suspendisse nec ultrices justo. Mauris erat tortor, pharetra eget est non, tincidunt porta felis. Phasellus sit amet neque ultricies, dignissim arcu ut, dapibus risus. Etiam feugiat semper iaculis. Sed aliquam tincidunt lectus, nec convallis ipsum placerat in. Suspendisse lacus libero, vulputate et dolor laoreet, eleifend sodales mi. Donec eget faucibus justo, vitae rhoncus erat.\r\n\r\nUt tempus orci at erat dictum consequat. Donec lacinia, lacus non hendrerit malesuada, metus odio ultricies nunc, quis malesuada ante diam maximus metus. Vivamus finibus est lorem, eget molestie odio blandit ac. Proin interdum, ipsum vel commodo vestibulum, massa nibh facilisis risus, sed accumsan purus elit eu metus. Proin fermentum gravida mauris vel congue. Morbi ornare, lorem sit amet faucibus lobortis, elit mi convallis lectus, vitae vestibulum est ipsum sed felis. Aenean ultrices enim vel mauris pellentesque, vel tempus arcu feugiat. Vivamus nisi tellus, vulputate et posuere a, iaculis vel tortor. Phasellus dictum enim tellus, eleifend rhoncus nunc bibendum non. Sed eu odio sed felis ullamcorper egestas. Duis dapibus iaculis ipsum sit amet ullamcorper. Aliquam erat volutpat. Mauris sollicitudin quam in nisi hendrerit, id convallis nunc finibus. Suspendisse lacinia, metus at finibus mollis, ante ipsum blandit nunc, sed volutpat purus libero sed metus. Nulla aliquam dui sed odio finibus rhoncus. Vestibulum in velit sem.\r\n\r\nPraesent elementum leo magna, a vehicula justo viverra sed. Fusce sed iaculis nulla, at tristique sem. Fusce eleifend nisl sapien, sit amet vestibulum nibh cursus at. Donec nec turpis gravida, aliquet lacus sed, convallis libero. Mauris nibh nibh, feugiat in dictum non, accumsan sed orci. Maecenas scelerisque dapibus enim, finibus commodo erat bibendum ac. Curabitur nunc lacus, viverra quis fringilla sodales, tincidunt eget arcu. Integer hendrerit pellentesque arcu, sit amet euismod sapien finibus ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus.\r\n\r\nEtiam et purus at ligula scelerisque pharetra. Nunc tempor et urna sit amet vehicula. Integer non leo a eros feugiat elementum. In nec efficitur mi. Sed iaculis volutpat metus ut fermentum. Etiam imperdiet libero eu augue commodo, in sagittis neque fringilla. Quisque iaculis ante id dui mollis, in fermentum eros condimentum. ', 0, '2016-08-23 01:14:07', 1),
(2, 'remplissage 02', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in tempor odio. Nam eget nisi ac mauris maximus laoreet nec id lorem. Pellentesque varius libero ut varius dapibus. Aenean sagittis urna id lectus malesuada rhoncus. Cras at finibus purus. Sed non cursus urna, quis sagittis urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin imperdiet sapien velit, eget vehicula lectus posuere quis. Fusce ornare nunc eu augue ultricies tempus. In pulvinar id velit at malesuada. Donec a tincidunt dolor. Fusce non pulvinar nulla. Sed dapibus orci vitae mi finibus porta. Donec sed odio ipsum.\r\n\r\nSed a volutpat metus. Aliquam ac facilisis sapien. Duis ut turpis sit amet sapien pretium porttitor eu non tellus. Cras faucibus eu lorem vitae laoreet. Nulla odio massa, condimentum ut maximus ut, ornare eu tortor. Ut nec elit mollis risus suscipit congue sit amet sed nibh. Ut in vestibulum ante. Nam vulputate erat elit, a vehicula turpis consectetur nec. Suspendisse nec ultrices justo. Mauris erat tortor, pharetra eget est non, tincidunt porta felis. Phasellus sit amet neque ultricies, dignissim arcu ut, dapibus risus. Etiam feugiat semper iaculis. Sed aliquam tincidunt lectus, nec convallis ipsum placerat in. Suspendisse lacus libero, vulputate et dolor laoreet, eleifend sodales mi. Donec eget faucibus justo, vitae rhoncus erat.\r\n\r\nUt tempus orci at erat dictum consequat. Donec lacinia, lacus non hendrerit malesuada, metus odio ultricies nunc, quis malesuada ante diam maximus metus. Vivamus finibus est lorem, eget molestie odio blandit ac. Proin interdum, ipsum vel commodo vestibulum, massa nibh facilisis risus, sed accumsan purus elit eu metus. Proin fermentum gravida mauris vel congue. Morbi ornare, lorem sit amet faucibus lobortis, elit mi convallis lectus, vitae vestibulum est ipsum sed felis. Aenean ultrices enim vel mauris pellentesque, vel tempus arcu feugiat. Vivamus nisi tellus, vulputate et posuere a, iaculis vel tortor. Phasellus dictum enim tellus, eleifend rhoncus nunc bibendum non. Sed eu odio sed felis ullamcorper egestas. Duis dapibus iaculis ipsum sit amet ullamcorper. Aliquam erat volutpat. Mauris sollicitudin quam in nisi hendrerit, id convallis nunc finibus. Suspendisse lacinia, metus at finibus mollis, ante ipsum blandit nunc, sed volutpat purus libero sed metus. Nulla aliquam dui sed odio finibus rhoncus. Vestibulum in velit sem.\r\n\r\nPraesent elementum leo magna, a vehicula justo viverra sed. Fusce sed iaculis nulla, at tristique sem. Fusce eleifend nisl sapien, sit amet vestibulum nibh cursus at. Donec nec turpis gravida, aliquet lacus sed, convallis libero. Mauris nibh nibh, feugiat in dictum non, accumsan sed orci. Maecenas scelerisque dapibus enim, finibus commodo erat bibendum ac. Curabitur nunc lacus, viverra quis fringilla sodales, tincidunt eget arcu. Integer hendrerit pellentesque arcu, sit amet euismod sapien finibus ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus.\r\n\r\nEtiam et purus at ligula scelerisque pharetra. Nunc tempor et urna sit amet vehicula. Integer non leo a eros feugiat elementum. In nec efficitur mi. Sed iaculis volutpat metus ut fermentum. Etiam imperdiet libero eu augue commodo, in sagittis neque fringilla. Quisque iaculis ante id dui mollis, in fermentum eros condimentum. ', 1, '2016-08-23 01:14:44', 1),
(3, 'remplissage 03', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in tempor odio. Nam eget nisi ac mauris maximus laoreet nec id lorem. Pellentesque varius libero ut varius dapibus. Aenean sagittis urna id lectus malesuada rhoncus. Cras at finibus purus. Sed non cursus urna, quis sagittis urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin imperdiet sapien velit, eget vehicula lectus posuere quis. Fusce ornare nunc eu augue ultricies tempus. In pulvinar id velit at malesuada. Donec a tincidunt dolor. Fusce non pulvinar nulla. Sed dapibus orci vitae mi finibus porta. Donec sed odio ipsum.\r\n\r\nSed a volutpat metus. Aliquam ac facilisis sapien. Duis ut turpis sit amet sapien pretium porttitor eu non tellus. Cras faucibus eu lorem vitae laoreet. Nulla odio massa, condimentum ut maximus ut, ornare eu tortor. Ut nec elit mollis risus suscipit congue sit amet sed nibh. Ut in vestibulum ante. Nam vulputate erat elit, a vehicula turpis consectetur nec. Suspendisse nec ultrices justo. Mauris erat tortor, pharetra eget est non, tincidunt porta felis. Phasellus sit amet neque ultricies, dignissim arcu ut, dapibus risus. Etiam feugiat semper iaculis. Sed aliquam tincidunt lectus, nec convallis ipsum placerat in. Suspendisse lacus libero, vulputate et dolor laoreet, eleifend sodales mi. Donec eget faucibus justo, vitae rhoncus erat.\r\n\r\nUt tempus orci at erat dictum consequat. Donec lacinia, lacus non hendrerit malesuada, metus odio ultricies nunc, quis malesuada ante diam maximus metus. Vivamus finibus est lorem, eget molestie odio blandit ac. Proin interdum, ipsum vel commodo vestibulum, massa nibh facilisis risus, sed accumsan purus elit eu metus. Proin fermentum gravida mauris vel congue. Morbi ornare, lorem sit amet faucibus lobortis, elit mi convallis lectus, vitae vestibulum est ipsum sed felis. Aenean ultrices enim vel mauris pellentesque, vel tempus arcu feugiat. Vivamus nisi tellus, vulputate et posuere a, iaculis vel tortor. Phasellus dictum enim tellus, eleifend rhoncus nunc bibendum non. Sed eu odio sed felis ullamcorper egestas. Duis dapibus iaculis ipsum sit amet ullamcorper. Aliquam erat volutpat. Mauris sollicitudin quam in nisi hendrerit, id convallis nunc finibus. Suspendisse lacinia, metus at finibus mollis, ante ipsum blandit nunc, sed volutpat purus libero sed metus. Nulla aliquam dui sed odio finibus rhoncus. Vestibulum in velit sem.\r\n\r\nPraesent elementum leo magna, a vehicula justo viverra sed. Fusce sed iaculis nulla, at tristique sem. Fusce eleifend nisl sapien, sit amet vestibulum nibh cursus at. Donec nec turpis gravida, aliquet lacus sed, convallis libero. Mauris nibh nibh, feugiat in dictum non, accumsan sed orci. Maecenas scelerisque dapibus enim, finibus commodo erat bibendum ac. Curabitur nunc lacus, viverra quis fringilla sodales, tincidunt eget arcu. Integer hendrerit pellentesque arcu, sit amet euismod sapien finibus ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus.\r\n\r\nEtiam et purus at ligula scelerisque pharetra. Nunc tempor et urna sit amet vehicula. Integer non leo a eros feugiat elementum. In nec efficitur mi. Sed iaculis volutpat metus ut fermentum. Etiam imperdiet libero eu augue commodo, in sagittis neque fringilla. Quisque iaculis ante id dui mollis, in fermentum eros condimentum. ', 1, '2016-08-23 01:14:51', 1),
(4, 'remplissage 04', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in tempor odio. Nam eget nisi ac mauris maximus laoreet nec id lorem. Pellentesque varius libero ut varius dapibus. Aenean sagittis urna id lectus malesuada rhoncus. Cras at finibus purus. Sed non cursus urna, quis sagittis urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin imperdiet sapien velit, eget vehicula lectus posuere quis. Fusce ornare nunc eu augue ultricies tempus. In pulvinar id velit at malesuada. Donec a tincidunt dolor. Fusce non pulvinar nulla. Sed dapibus orci vitae mi finibus porta. Donec sed odio ipsum.\r\n\r\nSed a volutpat metus. Aliquam ac facilisis sapien. Duis ut turpis sit amet sapien pretium porttitor eu non tellus. Cras faucibus eu lorem vitae laoreet. Nulla odio massa, condimentum ut maximus ut, ornare eu tortor. Ut nec elit mollis risus suscipit congue sit amet sed nibh. Ut in vestibulum ante. Nam vulputate erat elit, a vehicula turpis consectetur nec. Suspendisse nec ultrices justo. Mauris erat tortor, pharetra eget est non, tincidunt porta felis. Phasellus sit amet neque ultricies, dignissim arcu ut, dapibus risus. Etiam feugiat semper iaculis. Sed aliquam tincidunt lectus, nec convallis ipsum placerat in. Suspendisse lacus libero, vulputate et dolor laoreet, eleifend sodales mi. Donec eget faucibus justo, vitae rhoncus erat.\r\n\r\nUt tempus orci at erat dictum consequat. Donec lacinia, lacus non hendrerit malesuada, metus odio ultricies nunc, quis malesuada ante diam maximus metus. Vivamus finibus est lorem, eget molestie odio blandit ac. Proin interdum, ipsum vel commodo vestibulum, massa nibh facilisis risus, sed accumsan purus elit eu metus. Proin fermentum gravida mauris vel congue. Morbi ornare, lorem sit amet faucibus lobortis, elit mi convallis lectus, vitae vestibulum est ipsum sed felis. Aenean ultrices enim vel mauris pellentesque, vel tempus arcu feugiat. Vivamus nisi tellus, vulputate et posuere a, iaculis vel tortor. Phasellus dictum enim tellus, eleifend rhoncus nunc bibendum non. Sed eu odio sed felis ullamcorper egestas. Duis dapibus iaculis ipsum sit amet ullamcorper. Aliquam erat volutpat. Mauris sollicitudin quam in nisi hendrerit, id convallis nunc finibus. Suspendisse lacinia, metus at finibus mollis, ante ipsum blandit nunc, sed volutpat purus libero sed metus. Nulla aliquam dui sed odio finibus rhoncus. Vestibulum in velit sem.\r\n\r\nPraesent elementum leo magna, a vehicula justo viverra sed. Fusce sed iaculis nulla, at tristique sem. Fusce eleifend nisl sapien, sit amet vestibulum nibh cursus at. Donec nec turpis gravida, aliquet lacus sed, convallis libero. Mauris nibh nibh, feugiat in dictum non, accumsan sed orci. Maecenas scelerisque dapibus enim, finibus commodo erat bibendum ac. Curabitur nunc lacus, viverra quis fringilla sodales, tincidunt eget arcu. Integer hendrerit pellentesque arcu, sit amet euismod sapien finibus ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus.\r\n\r\nEtiam et purus at ligula scelerisque pharetra. Nunc tempor et urna sit amet vehicula. Integer non leo a eros feugiat elementum. In nec efficitur mi. Sed iaculis volutpat metus ut fermentum. Etiam imperdiet libero eu augue commodo, in sagittis neque fringilla. Quisque iaculis ante id dui mollis, in fermentum eros condimentum. ', 0, '2016-08-23 01:14:58', 1),
(5, 'remplissage 05', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in tempor odio. Nam eget nisi ac mauris maximus laoreet nec id lorem. Pellentesque varius libero ut varius dapibus. Aenean sagittis urna id lectus malesuada rhoncus. Cras at finibus purus. Sed non cursus urna, quis sagittis urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin imperdiet sapien velit, eget vehicula lectus posuere quis. Fusce ornare nunc eu augue ultricies tempus. In pulvinar id velit at malesuada. Donec a tincidunt dolor. Fusce non pulvinar nulla. Sed dapibus orci vitae mi finibus porta. Donec sed odio ipsum.\r\n\r\nSed a volutpat metus. Aliquam ac facilisis sapien. Duis ut turpis sit amet sapien pretium porttitor eu non tellus. Cras faucibus eu lorem vitae laoreet. Nulla odio massa, condimentum ut maximus ut, ornare eu tortor. Ut nec elit mollis risus suscipit congue sit amet sed nibh. Ut in vestibulum ante. Nam vulputate erat elit, a vehicula turpis consectetur nec. Suspendisse nec ultrices justo. Mauris erat tortor, pharetra eget est non, tincidunt porta felis. Phasellus sit amet neque ultricies, dignissim arcu ut, dapibus risus. Etiam feugiat semper iaculis. Sed aliquam tincidunt lectus, nec convallis ipsum placerat in. Suspendisse lacus libero, vulputate et dolor laoreet, eleifend sodales mi. Donec eget faucibus justo, vitae rhoncus erat.\r\n\r\nUt tempus orci at erat dictum consequat. Donec lacinia, lacus non hendrerit malesuada, metus odio ultricies nunc, quis malesuada ante diam maximus metus. Vivamus finibus est lorem, eget molestie odio blandit ac. Proin interdum, ipsum vel commodo vestibulum, massa nibh facilisis risus, sed accumsan purus elit eu metus. Proin fermentum gravida mauris vel congue. Morbi ornare, lorem sit amet faucibus lobortis, elit mi convallis lectus, vitae vestibulum est ipsum sed felis. Aenean ultrices enim vel mauris pellentesque, vel tempus arcu feugiat. Vivamus nisi tellus, vulputate et posuere a, iaculis vel tortor. Phasellus dictum enim tellus, eleifend rhoncus nunc bibendum non. Sed eu odio sed felis ullamcorper egestas. Duis dapibus iaculis ipsum sit amet ullamcorper. Aliquam erat volutpat. Mauris sollicitudin quam in nisi hendrerit, id convallis nunc finibus. Suspendisse lacinia, metus at finibus mollis, ante ipsum blandit nunc, sed volutpat purus libero sed metus. Nulla aliquam dui sed odio finibus rhoncus. Vestibulum in velit sem.\r\n\r\nPraesent elementum leo magna, a vehicula justo viverra sed. Fusce sed iaculis nulla, at tristique sem. Fusce eleifend nisl sapien, sit amet vestibulum nibh cursus at. Donec nec turpis gravida, aliquet lacus sed, convallis libero. Mauris nibh nibh, feugiat in dictum non, accumsan sed orci. Maecenas scelerisque dapibus enim, finibus commodo erat bibendum ac. Curabitur nunc lacus, viverra quis fringilla sodales, tincidunt eget arcu. Integer hendrerit pellentesque arcu, sit amet euismod sapien finibus ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus.\r\n\r\nEtiam et purus at ligula scelerisque pharetra. Nunc tempor et urna sit amet vehicula. Integer non leo a eros feugiat elementum. In nec efficitur mi. Sed iaculis volutpat metus ut fermentum. Etiam imperdiet libero eu augue commodo, in sagittis neque fringilla. Quisque iaculis ante id dui mollis, in fermentum eros condimentum. ', 0, '2016-08-23 01:15:06', 1),
(6, 'remplissage 06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in tempor odio. Nam eget nisi ac mauris maximus laoreet nec id lorem. Pellentesque varius libero ut varius dapibus. Aenean sagittis urna id lectus malesuada rhoncus. Cras at finibus purus. Sed non cursus urna, quis sagittis urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin imperdiet sapien velit, eget vehicula lectus posuere quis. Fusce ornare nunc eu augue ultricies tempus. In pulvinar id velit at malesuada. Donec a tincidunt dolor. Fusce non pulvinar nulla. Sed dapibus orci vitae mi finibus porta. Donec sed odio ipsum.\r\n\r\nSed a volutpat metus. Aliquam ac facilisis sapien. Duis ut turpis sit amet sapien pretium porttitor eu non tellus. Cras faucibus eu lorem vitae laoreet. Nulla odio massa, condimentum ut maximus ut, ornare eu tortor. Ut nec elit mollis risus suscipit congue sit amet sed nibh. Ut in vestibulum ante. Nam vulputate erat elit, a vehicula turpis consectetur nec. Suspendisse nec ultrices justo. Mauris erat tortor, pharetra eget est non, tincidunt porta felis. Phasellus sit amet neque ultricies, dignissim arcu ut, dapibus risus. Etiam feugiat semper iaculis. Sed aliquam tincidunt lectus, nec convallis ipsum placerat in. Suspendisse lacus libero, vulputate et dolor laoreet, eleifend sodales mi. Donec eget faucibus justo, vitae rhoncus erat.\r\n\r\nUt tempus orci at erat dictum consequat. Donec lacinia, lacus non hendrerit malesuada, metus odio ultricies nunc, quis malesuada ante diam maximus metus. Vivamus finibus est lorem, eget molestie odio blandit ac. Proin interdum, ipsum vel commodo vestibulum, massa nibh facilisis risus, sed accumsan purus elit eu metus. Proin fermentum gravida mauris vel congue. Morbi ornare, lorem sit amet faucibus lobortis, elit mi convallis lectus, vitae vestibulum est ipsum sed felis. Aenean ultrices enim vel mauris pellentesque, vel tempus arcu feugiat. Vivamus nisi tellus, vulputate et posuere a, iaculis vel tortor. Phasellus dictum enim tellus, eleifend rhoncus nunc bibendum non. Sed eu odio sed felis ullamcorper egestas. Duis dapibus iaculis ipsum sit amet ullamcorper. Aliquam erat volutpat. Mauris sollicitudin quam in nisi hendrerit, id convallis nunc finibus. Suspendisse lacinia, metus at finibus mollis, ante ipsum blandit nunc, sed volutpat purus libero sed metus. Nulla aliquam dui sed odio finibus rhoncus. Vestibulum in velit sem.\r\n\r\nPraesent elementum leo magna, a vehicula justo viverra sed. Fusce sed iaculis nulla, at tristique sem. Fusce eleifend nisl sapien, sit amet vestibulum nibh cursus at. Donec nec turpis gravida, aliquet lacus sed, convallis libero. Mauris nibh nibh, feugiat in dictum non, accumsan sed orci. Maecenas scelerisque dapibus enim, finibus commodo erat bibendum ac. Curabitur nunc lacus, viverra quis fringilla sodales, tincidunt eget arcu. Integer hendrerit pellentesque arcu, sit amet euismod sapien finibus ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus.\r\n\r\nEtiam et purus at ligula scelerisque pharetra. Nunc tempor et urna sit amet vehicula. Integer non leo a eros feugiat elementum. In nec efficitur mi. Sed iaculis volutpat metus ut fermentum. Etiam imperdiet libero eu augue commodo, in sagittis neque fringilla. Quisque iaculis ante id dui mollis, in fermentum eros condimentum. ', 0, '2016-08-23 01:15:18', 1),
(7, 'remplissage 07', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in tempor odio. Nam eget nisi ac mauris maximus laoreet nec id lorem. Pellentesque varius libero ut varius dapibus. Aenean sagittis urna id lectus malesuada rhoncus. Cras at finibus purus. Sed non cursus urna, quis sagittis urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin imperdiet sapien velit, eget vehicula lectus posuere quis. Fusce ornare nunc eu augue ultricies tempus. In pulvinar id velit at malesuada. Donec a tincidunt dolor. Fusce non pulvinar nulla. Sed dapibus orci vitae mi finibus porta. Donec sed odio ipsum.\r\n\r\nSed a volutpat metus. Aliquam ac facilisis sapien. Duis ut turpis sit amet sapien pretium porttitor eu non tellus. Cras faucibus eu lorem vitae laoreet. Nulla odio massa, condimentum ut maximus ut, ornare eu tortor. Ut nec elit mollis risus suscipit congue sit amet sed nibh. Ut in vestibulum ante. Nam vulputate erat elit, a vehicula turpis consectetur nec. Suspendisse nec ultrices justo. Mauris erat tortor, pharetra eget est non, tincidunt porta felis. Phasellus sit amet neque ultricies, dignissim arcu ut, dapibus risus. Etiam feugiat semper iaculis. Sed aliquam tincidunt lectus, nec convallis ipsum placerat in. Suspendisse lacus libero, vulputate et dolor laoreet, eleifend sodales mi. Donec eget faucibus justo, vitae rhoncus erat.\r\n\r\nUt tempus orci at erat dictum consequat. Donec lacinia, lacus non hendrerit malesuada, metus odio ultricies nunc, quis malesuada ante diam maximus metus. Vivamus finibus est lorem, eget molestie odio blandit ac. Proin interdum, ipsum vel commodo vestibulum, massa nibh facilisis risus, sed accumsan purus elit eu metus. Proin fermentum gravida mauris vel congue. Morbi ornare, lorem sit amet faucibus lobortis, elit mi convallis lectus, vitae vestibulum est ipsum sed felis. Aenean ultrices enim vel mauris pellentesque, vel tempus arcu feugiat. Vivamus nisi tellus, vulputate et posuere a, iaculis vel tortor. Phasellus dictum enim tellus, eleifend rhoncus nunc bibendum non. Sed eu odio sed felis ullamcorper egestas. Duis dapibus iaculis ipsum sit amet ullamcorper. Aliquam erat volutpat. Mauris sollicitudin quam in nisi hendrerit, id convallis nunc finibus. Suspendisse lacinia, metus at finibus mollis, ante ipsum blandit nunc, sed volutpat purus libero sed metus. Nulla aliquam dui sed odio finibus rhoncus. Vestibulum in velit sem.\r\n\r\nPraesent elementum leo magna, a vehicula justo viverra sed. Fusce sed iaculis nulla, at tristique sem. Fusce eleifend nisl sapien, sit amet vestibulum nibh cursus at. Donec nec turpis gravida, aliquet lacus sed, convallis libero. Mauris nibh nibh, feugiat in dictum non, accumsan sed orci. Maecenas scelerisque dapibus enim, finibus commodo erat bibendum ac. Curabitur nunc lacus, viverra quis fringilla sodales, tincidunt eget arcu. Integer hendrerit pellentesque arcu, sit amet euismod sapien finibus ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus.\r\n\r\nEtiam et purus at ligula scelerisque pharetra. Nunc tempor et urna sit amet vehicula. Integer non leo a eros feugiat elementum. In nec efficitur mi. Sed iaculis volutpat metus ut fermentum. Etiam imperdiet libero eu augue commodo, in sagittis neque fringilla. Quisque iaculis ante id dui mollis, in fermentum eros condimentum. ', 0, '2016-08-23 01:15:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comptes`
--
-- Creation: Aug 26, 2016 at 02:48 PM
-- Last update: Aug 26, 2016 at 02:48 PM
--

DROP TABLE IF EXISTS `comptes`;
CREATE TABLE IF NOT EXISTS `comptes` (
  `idcomptes` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `priv_level` int(11) NOT NULL DEFAULT '3',
  `avatar` varchar(255) DEFAULT NULL,
  `current_ip` varchar(45) DEFAULT NULL,
  `last_ip` varchar(45) DEFAULT NULL,
  `date_inscription` date DEFAULT NULL,
  PRIMARY KEY (`idcomptes`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `comptes`:
--

--
-- Dumping data for table `comptes`
--

INSERT INTO `comptes` (`idcomptes`, `login`, `password`, `email`, `priv_level`, `avatar`, `current_ip`, `last_ip`, `date_inscription`) VALUES
(1, 'admin', '$2y$10$qEwa3kTzCnO4gzFxFpqPX.qMJ2W1nYYUgnmkQudYHYeoyy8BVfKa6', 'admin@certif.com', 1, NULL, '192.168.1.15', '127.0.0.1', NULL),
(2, 'testuser', '$2y$10$ibFuRrSqYo7FmOLJsLkw2Ox25KJgM5MvNtyltvMRU/lpei7f82jNy', 'test@test.com', 3, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--
-- Creation: Aug 26, 2016 at 02:48 PM
-- Last update: Aug 26, 2016 at 02:48 PM
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `idcontact` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `message` longtext NOT NULL,
  `your_timestamp` varchar(45) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcontact`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `contact`:
--

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`idcontact`, `pseudo`, `email`, `message`, `your_timestamp`, `ip`) VALUES
(1, 'tesuser', 'owihef@wue.com', 'ohiowhgqifgoigwqe qiugfiqugfiouhweipuhfiopuqwhiofehw', '1472132564', '127.0.0.1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_articles_comptes` FOREIGN KEY (`comptes_idcomptes`) REFERENCES `comptes` (`idcomptes`) ON DELETE NO ACTION ON UPDATE NO ACTION;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for articles
--
-- Error reading data: (#1100 - Table 'pma__column_info' was not locked with LOCK TABLES)
-- Error reading data: (#1100 - Table 'pma__table_uiprefs' was not locked with LOCK TABLES)
-- Error reading data: (#1100 - Table 'pma__tracking' was not locked with LOCK TABLES)

--
-- Metadata for comptes
--
-- Error reading data: (#1100 - Table 'pma__column_info' was not locked with LOCK TABLES)
-- Error reading data: (#1100 - Table 'pma__table_uiprefs' was not locked with LOCK TABLES)
-- Error reading data: (#1100 - Table 'pma__tracking' was not locked with LOCK TABLES)

--
-- Metadata for contact
--
-- Error reading data: (#1100 - Table 'pma__column_info' was not locked with LOCK TABLES)
-- Error reading data: (#1100 - Table 'pma__table_uiprefs' was not locked with LOCK TABLES)
-- Error reading data: (#1100 - Table 'pma__tracking' was not locked with LOCK TABLES)

--
-- Metadata for blog
--
-- Error reading data: (#1100 - Table 'pma__bookmark' was not locked with LOCK TABLES)
-- Error reading data: (#1100 - Table 'pma__relation' was not locked with LOCK TABLES)
-- Error reading data: (#1100 - Table 'pma__savedsearches' was not locked with LOCK TABLES)
-- Error reading data: (#1100 - Table 'pma__central_columns' was not locked with LOCK TABLES)
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
