-- Adminer 3.3.3 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `sandbox` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sandbox`;

DROP TABLE IF EXISTS `sample_table`;
CREATE TABLE `sample_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `sample_table` (`id`, `content`) VALUES
(1,	'This is the content of variable with id 1.');

-- 2012-12-28 17:24:36
