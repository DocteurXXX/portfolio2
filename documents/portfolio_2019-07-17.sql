# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Hôte: 127.0.0.1 (MySQL 5.7.25)
# Base de données: portfolio
# Temps de génération: 2019-07-17 15:30:27 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table competences
# ------------------------------------------------------------

DROP TABLE IF EXISTS `competences`;

CREATE TABLE `competences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DB2077CEA76ED395` (`user_id`),
  CONSTRAINT `FK_DB2077CEA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `competences` WRITE;
/*!40000 ALTER TABLE `competences` DISABLE KEYS */;

INSERT INTO `competences` (`id`, `user_id`, `type`, `description`, `image`)
VALUES
	(1,1,'Créativité','Test','creativity.png'),
	(2,1,'Linux','Test2','linux.png'),
	(3,1,'Windows','Test','windows.png'),
	(4,1,'Mac OS','Test	','mac.png'),
	(5,1,'Microsoft Office','Test\n','office.png'),
	(6,1,'Internet','Test','net.png'),
	(7,1,'Commerce','Test	\n','commerce.png'),
	(8,1,'PHP','Test\n','php.png'),
	(9,1,'Symfony 4','Test\n','symfony.png'),
	(10,1,'HTML 5','Test','html.png'),
	(11,1,'CSS 3','test','css.png'),
	(12,1,'JavaScript','test\n','js.png'),
	(13,1,'React','test','react.png'),
	(14,1,'MySQL','Test','mysql.png');

/*!40000 ALTER TABLE `competences` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table experiences
# ------------------------------------------------------------

DROP TABLE IF EXISTS `experiences`;

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `titre` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_societe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `missions` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_82020E70A76ED395` (`user_id`),
  CONSTRAINT `FK_82020E70A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `experiences` WRITE;
/*!40000 ALTER TABLE `experiences` DISABLE KEYS */;

INSERT INTO `experiences` (`id`, `user_id`, `titre`, `nom_societe`, `lieu`, `date_start`, `date_end`, `missions`, `logo`)
VALUES
	(1,1,'Développeur Web & Web Mobile','WILD CODE SCHOOL','Lyon','2019-02-01 00:00:00','2019-11-30 00:00:00','Formation sur langages PHP, HTML5, CSS3, JS, ...\nFramework (Symphony 4), Méthodes agiles, SCRUM, ...','wcs.jpg'),
	(2,1,'Directeur Administration des Ventes','AXESS ONLINE','Valence','2017-12-01 00:00:00','2019-01-01 00:00:00','Pilotage ADV, Directeur Achat et Logistique, Budget et Reporting, Mise en place processus, ...','axess.jpg'),
	(3,1,'Administrateur Fonctionnel Système','KROHNE SAS','Romans sur Isère','2013-12-01 00:00:00','2017-11-01 00:00:00','Dév. et optimisation des SI (ERP, CRM, ...), Pilotage projets (GED, P4T, ...), support et formation utilisateurs, ...','ksas.jpg'),
	(4,1,'Technico-Commercial ADV (Zone Afrique)','KROHNE SAS','Romans sur Isère','2007-04-01 00:00:00','2013-11-01 00:00:00','Interface Client / Fournisseurs, Gestion règlements multimodaux, Réglementation douanières, ADV, ...','ksas.jpg'),
	(5,1,'Support International (Grand Export)','KROHNE SAS','Romans sur Isère','1998-09-01 00:00:00','2007-03-01 00:00:00','Interface technique et commercial Agents, préconisation technique et réglementaire suivant spécifications client, ...','ksas.jpg');

/*!40000 ALTER TABLE `experiences` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table formations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `formations`;

CREATE TABLE `formations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ecole` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `diplome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_40902137A76ED395` (`user_id`),
  CONSTRAINT `FK_40902137A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `formations` WRITE;
/*!40000 ALTER TABLE `formations` DISABLE KEYS */;

INSERT INTO `formations` (`id`, `user_id`, `titre`, `ecole`, `lieu`, `date_start`, `date_end`, `diplome`, `logo`)
VALUES
	(1,1,'BTS Technico-Commercial','Lycée Sainte-Croix Saint-Euverte','Orléans','1996-01-01 00:00:00','1998-01-01 00:00:00','BTS','stecroix.png'),
	(2,1,'DUT Génie Mécanique et Productique','Campus La Source','Orléans','1995-01-01 00:00:00','1996-01-01 00:00:00','NO','lasource.png'),
	(3,1,'BAC STI Génie Mécanique et Productique','Lycée Jehan de Beauce','Chartres','1995-01-01 00:00:00','1995-01-01 00:00:00','Baccalauréat','jehan.png');

/*!40000 ALTER TABLE `formations` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table job
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job`;

CREATE TABLE `job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Affichage de la table langues
# ------------------------------------------------------------

DROP TABLE IF EXISTS `langues`;

CREATE TABLE `langues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `langues` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_119D3659A76ED395` (`user_id`),
  CONSTRAINT `FK_119D3659A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `langues` WRITE;
/*!40000 ALTER TABLE `langues` DISABLE KEYS */;

INSERT INTO `langues` (`id`, `user_id`, `langues`, `notion`)
VALUES
	(1,1,'Anglais','B2'),
	(2,1,'Français','Courant');

/*!40000 ALTER TABLE `langues` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table liens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `liens`;

CREATE TABLE `liens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A0A0BABCA76ED395` (`user_id`),
  CONSTRAINT `FK_A0A0BABCA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `liens` WRITE;
/*!40000 ALTER TABLE `liens` DISABLE KEYS */;

INSERT INTO `liens` (`id`, `user_id`, `nom`, `lien`)
VALUES
	(1,1,'Linkedin','https://www.linkedin.com/in/julien-beauhaire-816ab497/'),
	(2,1,'Github','https://github.com/DocteurXXX');

/*!40000 ALTER TABLE `liens` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table loisirs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `loisirs`;

CREATE TABLE `loisirs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_56739573A76ED395` (`user_id`),
  CONSTRAINT `FK_56739573A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `loisirs` WRITE;
/*!40000 ALTER TABLE `loisirs` DISABLE KEYS */;

INSERT INTO `loisirs` (`id`, `user_id`, `nom`, `description`, `image`)
VALUES
	(1,1,'Running','Trail, Ultra-trail, ...','trail.png'),
	(2,1,'Cyclisme','VTT, route','velo.png'),
	(3,1,'Sports d\'hiver','Ski, snowboard, ski de randonnée','ski.png'),
	(4,1,'Sports mécanique','Moto, ...	','moto.png');

/*!40000 ALTER TABLE `loisirs` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table migration_versions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migration_versions`;

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;

INSERT INTO `migration_versions` (`version`, `executed_at`)
VALUES
	('20190716150048','2019-07-16 15:00:59');

/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table projets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projets`;

CREATE TABLE `projets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B454C1DBA76ED395` (`user_id`),
  CONSTRAINT `FK_B454C1DBA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Affichage de la table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` int(11) NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naissance` datetime NOT NULL,
  `photo` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_propos` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `nom`, `prenom`, `phone`, `adresse`, `zipcode`, `ville`, `date_naissance`, `photo`, `a_propos`, `titre`)
VALUES
	(1,'juliano070177@gmail.com',X'5B22524F4C455F55534552225D','$argon2id$v=19$m=65536,t=6,p=1$43NpUBI8bDZ+HyoK1KZahQ$ZaqFUC+weU17Vw0Nh7oyc4x15exslHupGFkvuf+cjo0','BEAUHAIRE','Julien','+33 776 691 063','10, rue du Vigna',26260,'BATHERNAY','1977-01-07 07:07:00','Julien_ID.jpg','« Une mer calme ne forme pas de marin d’expérience ». Passionné par le web, j’accorde une grande importance à progresser et à cultiver le partage des connaissances et le travail en équipe. Grandir est mon avenir.','Développeur Web & Web Mobile Junior');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
