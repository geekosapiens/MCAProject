-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `formdata`;
CREATE TABLE `formdata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `fname` varchar(100) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `mname` varchar(100) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `dob` varchar(100) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `gender` varchar(10) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `mobile` double unsigned NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;


-- 2022-09-11 11:45:45
