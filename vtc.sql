-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `vtc` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `vtc`;

DROP TABLE IF EXISTS `association_vehicule_conducteur`;
CREATE TABLE `association_vehicule_conducteur` (
  `asso_id_association` int NOT NULL AUTO_INCREMENT,
  `asso_id_vehicule` int NOT NULL,
  `asso_id_conducteur` int NOT NULL,
  PRIMARY KEY (`asso_id_association`),
  KEY `asso_id_vehicule` (`asso_id_vehicule`),
  KEY `asso_id_conducteur` (`asso_id_conducteur`),
  CONSTRAINT `association_vehicule_conducteur_ibfk_1` FOREIGN KEY (`asso_id_vehicule`) REFERENCES `vehicule` (`vehi_id`),
  CONSTRAINT `association_vehicule_conducteur_ibfk_2` FOREIGN KEY (`asso_id_conducteur`) REFERENCES `conducteur` (`condu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `association_vehicule_conducteur` (`asso_id_association`, `asso_id_vehicule`, `asso_id_conducteur`) VALUES
(1,	501,	1),
(2,	502,	2),
(3,	503,	3),
(4,	504,	4),
(5,	501,	3);

DROP TABLE IF EXISTS `conducteur`;
CREATE TABLE `conducteur` (
  `condu_id` int NOT NULL AUTO_INCREMENT,
  `condu_prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `condu_nom` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`condu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `conducteur` (`condu_id`, `condu_prenom`, `condu_nom`) VALUES
(1,	'Julien',	'Avigny'),
(2,	'Morgane',	'Alamia'),
(3,	'Philippe',	'Pandre'),
(4,	'Amelie',	'Blondelle'),
(5,	'Alex',	'Richy');

DROP TABLE IF EXISTS `vehicule`;
CREATE TABLE `vehicule` (
  `vehi_id` int NOT NULL AUTO_INCREMENT,
  `vehi_marque` varchar(255) COLLATE utf8_bin NOT NULL,
  `vehi_modele` varchar(255) COLLATE utf8_bin NOT NULL,
  `vehi_couleur` varchar(255) COLLATE utf8_bin NOT NULL,
  `vehi_immatriculation` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`vehi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `vehicule` (`vehi_id`, `vehi_marque`, `vehi_modele`, `vehi_couleur`, `vehi_immatriculation`) VALUES
(501,	'Peugeot',	'807',	'noir',	'AB-355-CA'),
(502,	'Citroen',	'C8',	'bleu',	'CE-122-AE'),
(503,	'Mercedes',	'Cls',	'vert',	'FG-953-HI'),
(504,	'Volkswagen',	'Touran',	'noir',	'SO-322-NV'),
(505,	'Skoda',	'Octavia',	'gris',	'PB-631-TK'),
(506,	'Volkswagen',	'Passat',	'gris',	'XN-973-MM');

-- 2020-04-29 12:41:35
