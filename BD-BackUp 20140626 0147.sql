-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.30-community


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema etableau
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ etableau;
USE etableau;

--
-- Table structure for table `etableau`.`administration`
--

DROP TABLE IF EXISTS `administration`;
CREATE TABLE `administration` (
  `code` varchar(11) DEFAULT NULL,
  `prenom` varchar(15) DEFAULT NULL,
  `nom` varchar(15) DEFAULT NULL,
  `cadre` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etableau`.`administration`
--

/*!40000 ALTER TABLE `administration` DISABLE KEYS */;
INSERT INTO `administration` (`code`,`prenom`,`nom`,`cadre`) VALUES 
 ('A001','Senhaji','Mahmoud','Houdhoud'),
 ('A002','anas','ouardihri','teraf'),
 ('A003','Kettani','Mountasser','Chaouech'),
 ('A004','qjidaa','taha','seban');
/*!40000 ALTER TABLE `administration` ENABLE KEYS */;


--
-- Table structure for table `etableau`.`etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE `etudiant` (
  `code` varchar(11) NOT NULL,
  `prenom` varchar(15) DEFAULT NULL,
  `nom` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `adresse` varchar(30) DEFAULT NULL,
  `niveau` int(11) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etableau`.`etudiant`
--

/*!40000 ALTER TABLE `etudiant` DISABLE KEYS */;
INSERT INTO `etudiant` (`code`,`prenom`,`nom`,`email`,`telephone`,`adresse`,`niveau`) VALUES 
 ('E001','Hamid','Hilali','Hamid@gmail.com','0610432101','Fes',1),
 ('E002','Hajar','Moussaid','Hajar2@gmail.com','0612016410','Rabat',1),
 ('E003','Said','Rafik','Said@gmail.com','0669901141','Casablanca',3);
/*!40000 ALTER TABLE `etudiant` ENABLE KEYS */;


--
-- Table structure for table `etableau`.`evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE `evenement` (
  `code` int(11) NOT NULL,
  `information` varchar(100) DEFAULT NULL,
  `dateExp` datetime DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `niveau` int(11) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etableau`.`evenement`
--

/*!40000 ALTER TABLE `evenement` DISABLE KEYS */;
INSERT INTO `evenement` (`code`,`information`,`dateExp`,`date`,`niveau`) VALUES 
 (1,'salam','2014-06-27 00:00:00','2014-06-22 00:00:00',0),
 (2,'hello','2014-06-26 00:00:00','2014-06-22 00:00:00',2),
 (3,'hello world','2014-06-29 00:00:00','2014-06-22 00:00:00',4),
 (4,'validation Projet','2014-06-26 00:00:00','2014-06-26 00:00:00',1),
 (5,'Rattrapage Unix','2014-06-27 00:00:00','2014-06-26 00:00:00',3);
/*!40000 ALTER TABLE `evenement` ENABLE KEYS */;


--
-- Table structure for table `etableau`.`professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE `professeur` (
  `code` varchar(11) NOT NULL,
  `prenom` varchar(15) DEFAULT NULL,
  `nom` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etableau`.`professeur`
--

/*!40000 ALTER TABLE `professeur` DISABLE KEYS */;
INSERT INTO `professeur` (`code`,`prenom`,`nom`) VALUES 
 ('P001','Mostafa','BenAissa'),
 ('P002','charaf','fenich');
/*!40000 ALTER TABLE `professeur` ENABLE KEYS */;


--
-- Table structure for table `etableau`.`users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` varchar(11) DEFAULT NULL,
  `login` text,
  `pass` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etableau`.`users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`,`login`,`pass`) VALUES 
 ('A001','admin','12345'),
 ('A002','admin2','00000'),
 ('P001','prof','12345'),
 ('P002','prof2','00000');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
