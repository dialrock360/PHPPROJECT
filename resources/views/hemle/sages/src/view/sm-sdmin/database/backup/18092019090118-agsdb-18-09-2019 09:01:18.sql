SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
--
-- Database: `agsdb`
--




CREATE TABLE `article` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `id_categorie` bigint(255) NOT NULL,
  `nom_article` varchar(254) DEFAULT NULL,
  `pxa_article` double DEFAULT NULL,
  `pxv_article` double DEFAULT NULL,
  `type_article` int(11) DEFAULT NULL,
  `tabidp` varchar(254) DEFAULT NULL,
  `tabqnt` varchar(254) DEFAULT NULL,
  `tabmts` varchar(254) DEFAULT NULL,
  `pxrv` double DEFAULT NULL,
  `flag_article` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_service` (`id_service`),
  KEY `id_categorie` (`id_categorie`),
  CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`),
  CONSTRAINT `article_ibfk_2` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `atelier` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `nom_atelier` varchar(254) DEFAULT NULL,
  `ls_employee_atelier` varchar(254) DEFAULT NULL,
  `coutmaindoeuve_atelier` double DEFAULT NULL,
  `flag_atelier` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_service` (`id_service`),
  CONSTRAINT `atelier_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `caisse` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `date_caisse` datetime DEFAULT NULL,
  `solde_caisse` double DEFAULT NULL,
  `depense_caisse` double DEFAULT NULL,
  `gain_caisse` double DEFAULT NULL,
  `flag_caisse` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_service` (`id_service`),
  CONSTRAINT `caisse_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `categorie` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `id_famille` bigint(255) NOT NULL,
  `nom_categorie` varchar(254) DEFAULT NULL,
  `nbr_produit_categorie` bigint(255) DEFAULT NULL,
  `valeur_categorie` double NOT NULL,
  `flag_categorie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_famille` (`id_famille`),
  KEY `id_service` (`id_service`),
  CONSTRAINT `categorie_ibfk_1` FOREIGN KEY (`id_famille`) REFERENCES `famille` (`id`),
  CONSTRAINT `categorie_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;


INSERT INTO categorie VALUES
("1","1","1","Bierre","0","0","0"),
("2","1","2","Fruits","0","0","0"),
("3","1","2","Legumes","0","0","0"),
("7","1","1","Vins","0","0","0");




CREATE TABLE `categorie_pro` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `nom_categorie_pro` varchar(254) DEFAULT NULL,
  `salaire_base` double DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_service` (`id_service`),
  CONSTRAINT `categorie_pro_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `commercial` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `avatar_commercial` varchar(254) DEFAULT NULL,
  `nom_commercial` varchar(254) DEFAULT NULL,
  `tel_commercial` varchar(254) DEFAULT NULL,
  `email_commercial` varchar(254) DEFAULT NULL,
  `adresse_commercial` varchar(254) DEFAULT NULL,
  `localisation_commercial` varchar(254) DEFAULT NULL,
  `info_commercial` varchar(254) DEFAULT NULL,
  `flag_commercial` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_service` (`id_service`),
  CONSTRAINT `commercial_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `commercial_groupe` (
  `id_commercial` bigint(255) NOT NULL,
  `id_groupe` bigint(255) NOT NULL,
  `id_service` int(11) NOT NULL,
  PRIMARY KEY (`id_commercial`,`id_service`,`id_groupe`),
  KEY `id_groupe` (`id_groupe`),
  KEY `id_service` (`id_service`),
  CONSTRAINT `commercial_groupe_ibfk_1` FOREIGN KEY (`id_commercial`) REFERENCES `commercial` (`id`),
  CONSTRAINT `commercial_groupe_ibfk_2` FOREIGN KEY (`id_groupe`) REFERENCES `groupe` (`id`),
  CONSTRAINT `commercial_groupe_ibfk_3` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `commercial_status` (
  `id_commercial` bigint(255) NOT NULL,
  `id_status` bigint(255) NOT NULL,
  `id_service` int(11) NOT NULL,
  PRIMARY KEY (`id_commercial`,`id_service`,`id_status`),
  KEY `id_service` (`id_service`),
  KEY `id_status` (`id_status`),
  CONSTRAINT `commercial_status_ibfk_1` FOREIGN KEY (`id_commercial`) REFERENCES `commercial` (`id`),
  CONSTRAINT `commercial_status_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`),
  CONSTRAINT `commercial_status_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `status` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `conditionement` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `nom_conditionement` varchar(254) DEFAULT NULL,
  `nbr_utilisation` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom_conditionement` (`nom_conditionement`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


INSERT INTO conditionement VALUES
("1","cartons","0"),
("2","paquets","0"),
("3","sac","0");




CREATE TABLE `conditionement_article` (
  `id` bigint(255) NOT NULL,
  `id_conditionement` bigint(255) NOT NULL,
  `id_article` bigint(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_article` (`id_article`),
  KEY `id_conditionement` (`id_conditionement`),
  CONSTRAINT `conditionement_article_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`),
  CONSTRAINT `conditionement_article_ibfk_2` FOREIGN KEY (`id_conditionement`) REFERENCES `conditionement` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `contrat` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `id_fiche_paie` bigint(255) NOT NULL,
  `typ_contrat` int(11) DEFAULT NULL,
  `datedebut_contrat` datetime DEFAULT NULL,
  `datefin_contrat` datetime DEFAULT NULL,
  `etat_contrat` int(11) DEFAULT NULL,
  `flag_contrat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_fiche_paie` (`id_fiche_paie`),
  KEY `id_service` (`id_service`),
  CONSTRAINT `contrat_ibfk_1` FOREIGN KEY (`id_fiche_paie`) REFERENCES `fiche_paie` (`id`),
  CONSTRAINT `contrat_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `departement` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `nom_departement` varchar(254) DEFAULT NULL,
  `nbr_employee` bigint(255) DEFAULT NULL,
  `id_chefdepartement` bigint(255) DEFAULT NULL,
  `info_departement` varchar(254) DEFAULT NULL,
  `flag_departement` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_service` (`id_service`),
  CONSTRAINT `departement_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `employee` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `id_contrat` bigint(255) DEFAULT NULL,
  `id_poste` bigint(255) NOT NULL,
  `id_departement` bigint(255) NOT NULL,
  `id_categorie_pro` bigint(255) NOT NULL,
  `avatar_employe` varchar(254) DEFAULT NULL,
  `matricul_employee` varchar(254) DEFAULT NULL,
  `cv_employee` varchar(254) DEFAULT NULL,
  `salaire_employee` double DEFAULT NULL,
  `nom_employee` varchar(254) DEFAULT NULL,
  `nature_employee` varchar(254) DEFAULT NULL,
  `tel_employee` varchar(254) DEFAULT NULL,
  `email_employee` varchar(254) DEFAULT NULL,
  `info_employee` varchar(254) DEFAULT NULL,
  `flag_employee` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_categorie_pro` (`id_categorie_pro`),
  KEY `id_poste` (`id_poste`),
  KEY `id_service` (`id_service`),
  KEY `id_departement` (`id_departement`),
  CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`id_categorie_pro`) REFERENCES `categorie_pro` (`id`),
  CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`id_poste`) REFERENCES `poste` (`id`),
  CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`),
  CONSTRAINT `employee_ibfk_4` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `employee_equipe` (
  `id_equipe` bigint(255) NOT NULL,
  `id_employee` bigint(255) NOT NULL,
  `id_service` int(11) NOT NULL,
  PRIMARY KEY (`id_equipe`,`id_service`,`id_employee`),
  KEY `id_employee` (`id_employee`),
  KEY `id_service` (`id_service`),
  CONSTRAINT `employee_equipe_ibfk_1` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id`),
  CONSTRAINT `employee_equipe_ibfk_2` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id`),
  CONSTRAINT `employee_equipe_ibfk_3` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `equipe` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `nom_equipe` varchar(254) DEFAULT NULL,
  `nbr_membre` bigint(255) DEFAULT NULL,
  `info_equipe` varchar(254) DEFAULT NULL,
  `flag_equipe` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_service` (`id_service`),
  CONSTRAINT `equipe_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `equipe_projet` (
  `id_equipe` bigint(255) NOT NULL,
  `id_projet` bigint(255) NOT NULL,
  `id_service` int(11) NOT NULL,
  PRIMARY KEY (`id_equipe`,`id_service`,`id_projet`),
  KEY `id_projet` (`id_projet`),
  KEY `id_service` (`id_service`),
  CONSTRAINT `equipe_projet_ibfk_1` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id`),
  CONSTRAINT `equipe_projet_ibfk_2` FOREIGN KEY (`id_projet`) REFERENCES `projet` (`id`),
  CONSTRAINT `equipe_projet_ibfk_3` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `etat_compte` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `id_famille` bigint(255) NOT NULL,
  `id_mouvement` bigint(255) NOT NULL,
  `date_etat_compte` datetime DEFAULT NULL,
  `depense_etat_compte` double DEFAULT NULL,
  `gain_etat_compte` double DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_famille` (`id_famille`),
  KEY `id_mouvement` (`id_mouvement`),
  KEY `id_service` (`id_service`),
  CONSTRAINT `etat_compte_ibfk_1` FOREIGN KEY (`id_famille`) REFERENCES `famille` (`id`),
  CONSTRAINT `etat_compte_ibfk_2` FOREIGN KEY (`id_mouvement`) REFERENCES `mouvement` (`id`),
  CONSTRAINT `etat_compte_ibfk_3` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `etat_stock` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_stock` bigint(255) NOT NULL,
  `date_etat_stock` date NOT NULL,
  `valeur_stock` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `famille` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `nom_famille` varchar(254) DEFAULT NULL,
  `color_famille` varchar(254) DEFAULT NULL,
  `nbr_categorie_famille` bigint(255) DEFAULT NULL,
  `valeur_famille` double NOT NULL,
  `flag_famille` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_service` (`id_service`),
  CONSTRAINT `famille_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO famille VALUES
("1","1","BOISSON","#151314","2","0","0"),
("2","1","VIVRES","#5af0c5","2","0","0");




CREATE TABLE `fiche_paie` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `id_model` bigint(255) NOT NULL,
  `nom_fiche_paie` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_service` (`id_service`),
  KEY `id_model` (`id_model`),
  CONSTRAINT `fiche_paie_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`),
  CONSTRAINT `fiche_paie_ibfk_2` FOREIGN KEY (`id_model`) REFERENCES `model_fiche` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `frais_production` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `id_production` bigint(255) NOT NULL,
  `nom_frais_production` varchar(254) DEFAULT NULL,
  `valeur_frais_production` double DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_production` (`id_production`),
  KEY `id_service` (`id_service`),
  CONSTRAINT `frais_production_ibfk_1` FOREIGN KEY (`id_production`) REFERENCES `production` (`id`),
  CONSTRAINT `frais_production_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `frontend` (
  `id` int(11) NOT NULL,
  `libele` varchar(254) NOT NULL,
  `slidebar` varchar(254) NOT NULL,
  `id_slidebar` varchar(254) NOT NULL,
  `classe_slidebar` varchar(254) NOT NULL,
  `nmain` varchar(254) NOT NULL,
  `vmain` varchar(254) NOT NULL,
  `skin` varchar(254) NOT NULL,
  `theme` varchar(254) NOT NULL,
  `cible` varchar(254) NOT NULL,
  `section` varchar(254) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;






CREATE TABLE `groupe` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `nom_groupe` varchar(254) DEFAULT NULL,
  `nbr_membre_groupe` bigint(255) DEFAULT NULL,
  `info_groupe` varchar(254) DEFAULT NULL,
  `flag_groupe` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_service` (`id_service`),
  CONSTRAINT `groupe_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `ligne_mouvement` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `id_mouvement` bigint(255) NOT NULL,
  `id_article` bigint(255) DEFAULT NULL,
  `pu_ligne_mouvement` double DEFAULT NULL,
  `qnt_ligne_mouvement` double DEFAULT NULL,
  `mts_ligne_mouvement` double DEFAULT NULL,
  `position_ligne_mouvement` int(11) DEFAULT NULL,
  `designation_ligne_mouvement` varchar(254) DEFAULT NULL,
  `conditionement_ligne_mouvement` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_article` (`id_article`),
  KEY `id_mouvement` (`id_mouvement`),
  KEY `id_service` (`id_service`),
  CONSTRAINT `ligne_mouvement_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`),
  CONSTRAINT `ligne_mouvement_ibfk_2` FOREIGN KEY (`id_mouvement`) REFERENCES `mouvement` (`id`),
  CONSTRAINT `ligne_mouvement_ibfk_3` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `ligne_producion` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `id_article` bigint(255) NOT NULL,
  `id_production` bigint(255) NOT NULL,
  `pxa_ligne_producion` double DEFAULT NULL,
  `qnt_ligne_producion` double DEFAULT NULL,
  `mts_ligne_producion` double DEFAULT NULL,
  `position_ligne_producion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_article` (`id_article`),
  KEY `id_production` (`id_production`),
  KEY `id_service` (`id_service`),
  CONSTRAINT `ligne_producion_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`),
  CONSTRAINT `ligne_producion_ibfk_2` FOREIGN KEY (`id_production`) REFERENCES `production` (`id`),
  CONSTRAINT `ligne_producion_ibfk_3` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `messages` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `date_message` datetime DEFAULT NULL,
  `object_message` varchar(254) DEFAULT NULL,
  `pj_message` varchar(254) DEFAULT NULL,
  `origine_message` varchar(254) DEFAULT NULL,
  `cible_message` varchar(254) DEFAULT NULL,
  `Attribute_10` varchar(254) DEFAULT NULL,
  `Attribute_11` varchar(254) DEFAULT NULL,
  `id_origine` bigint(255) DEFAULT NULL,
  `id_sible` bigint(255) DEFAULT NULL,
  `content_message` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_service` (`id_service`),
  CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `model_fiche` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `nom_model` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `mouvement` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `id_typemouvement` bigint(255) NOT NULL,
  `id_commercial` bigint(255) NOT NULL,
  `id_users` bigint(255) NOT NULL,
  `date_mouvement` datetime DEFAULT NULL,
  `object_mouvement` varchar(254) DEFAULT NULL,
  `content_mouvement` varchar(254) DEFAULT NULL,
  `total_ht_mouvement` double DEFAULT NULL,
  `tva_mouvement` double DEFAULT NULL,
  `totalttc_mouvement` double DEFAULT NULL,
  `totalltr_mouvement` varchar(254) DEFAULT NULL,
  `avance_mouvement` double DEFAULT NULL,
  `reste_mouvement` double DEFAULT NULL,
  `flag_mouvement` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_commercial` (`id_commercial`),
  KEY `id_service` (`id_service`),
  KEY `id_typemouvement` (`id_typemouvement`),
  KEY `id_users` (`id_users`),
  CONSTRAINT `mouvement_ibfk_1` FOREIGN KEY (`id_commercial`) REFERENCES `commercial` (`id`),
  CONSTRAINT `mouvement_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`),
  CONSTRAINT `mouvement_ibfk_3` FOREIGN KEY (`id_typemouvement`) REFERENCES `type_mouvement` (`id`),
  CONSTRAINT `mouvement_ibfk_4` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `payement` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `id_typemouvement` bigint(255) NOT NULL,
  `id_mouvement` bigint(255) NOT NULL,
  `type_payement` varchar(254) DEFAULT NULL,
  `mts_payement` bigint(255) DEFAULT NULL,
  `date_payement` varchar(254) DEFAULT NULL,
  `detail_payement` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_mouvement` (`id_mouvement`),
  KEY `id_service` (`id_service`),
  CONSTRAINT `payement_ibfk_1` FOREIGN KEY (`id_mouvement`) REFERENCES `mouvement` (`id`),
  CONSTRAINT `payement_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `photo` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `id_article` bigint(255) NOT NULL,
  `path_photo` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_article` (`id_article`),
  KEY `id_service` (`id_service`),
  CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`),
  CONSTRAINT `photo_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `piece_jointe` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_tache` bigint(255) NOT NULL,
  `path_piece_jointe` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tache` (`id_tache`),
  CONSTRAINT `piece_jointe_ibfk_1` FOREIGN KEY (`id_tache`) REFERENCES `tache` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `pointer` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `prev_etat_stock` bigint(255) NOT NULL,
  `cur_id_etat_stock` bigint(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `cur_id_etat_stock` (`cur_id_etat_stock`),
  KEY `prev_etat_stock` (`prev_etat_stock`),
  KEY `id_service` (`id_service`),
  CONSTRAINT `pointer_ibfk_1` FOREIGN KEY (`cur_id_etat_stock`) REFERENCES `etat_stock` (`id`),
  CONSTRAINT `pointer_ibfk_2` FOREIGN KEY (`prev_etat_stock`) REFERENCES `etat_stock` (`id`),
  CONSTRAINT `pointer_ibfk_3` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `poste` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `nom_poste` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `production` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `id_atelier` bigint(255) NOT NULL,
  `id_users` bigint(255) NOT NULL,
  `date_production` datetime DEFAULT NULL,
  `nbr_produit_production` double DEFAULT NULL,
  `cout_achat` double DEFAULT NULL,
  `frais_production` double DEFAULT NULL,
  `cout_production` double DEFAULT NULL,
  `flag_production` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_atelier` (`id_atelier`),
  KEY `id_users` (`id_users`),
  KEY `id_service` (`id_service`),
  CONSTRAINT `production_ibfk_1` FOREIGN KEY (`id_atelier`) REFERENCES `atelier` (`id`),
  CONSTRAINT `production_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  CONSTRAINT `production_ibfk_3` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `programme` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `nom_programme` varchar(254) DEFAULT NULL,
  `id_service` int(11) NOT NULL,
  `date_programme` datetime DEFAULT NULL,
  `datefin_programme` datetime DEFAULT NULL,
  `nbr_projet_programme` varchar(254) DEFAULT NULL,
  `etat_programme` int(11) DEFAULT NULL,
  `flag_programme` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_service` (`id_service`),
  CONSTRAINT `programme_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `projet` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_programme` bigint(255) NOT NULL,
  `id_service` int(11) NOT NULL,
  `id_type_projet` bigint(255) NOT NULL,
  `nom_projet` varchar(254) DEFAULT NULL,
  `date_projet` varchar(254) DEFAULT NULL,
  `datefin_projet` datetime DEFAULT NULL,
  `color_projet` varchar(254) DEFAULT NULL,
  `etat_projet` int(11) DEFAULT NULL,
  `flag_projet` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_programme` (`id_programme`),
  KEY `id_service` (`id_service`),
  KEY `id_type_projet` (`id_type_projet`),
  CONSTRAINT `projet_ibfk_1` FOREIGN KEY (`id_programme`) REFERENCES `programme` (`id`),
  CONSTRAINT `projet_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`),
  CONSTRAINT `projet_ibfk_3` FOREIGN KEY (`id_type_projet`) REFERENCES `type_projet` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `rubrique` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_model` bigint(255) NOT NULL,
  `id_service` int(11) NOT NULL,
  `nom_rubrique` varchar(254) DEFAULT NULL,
  `valeur_rubrique` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_model` (`id_model`),
  CONSTRAINT `rubrique_ibfk_1` FOREIGN KEY (`id_model`) REFERENCES `model_fiche` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `rubrique_sous_rubrique` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_rubrique` bigint(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_service` varchar(254) DEFAULT NULL,
  `sigle_service` varchar(254) DEFAULT NULL,
  `ninea_service` varchar(254) DEFAULT NULL,
  `nrc_service` varchar(254) DEFAULT NULL,
  `activitecommercial_service` varchar(254) DEFAULT NULL,
  `ca_service` varchar(254) DEFAULT NULL,
  `logo_service` varchar(254) DEFAULT NULL,
  `theme_service` varchar(254) DEFAULT NULL,
  `flag_service` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO service VALUES
("1","Minam","mn","45555555555555566","fg444444444444","commerce","10000000","logo.png","primary","0");




CREATE TABLE `sous_rubrique` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_model` bigint(255) NOT NULL,
  `nom_sous_rubrique` varchar(254) DEFAULT NULL,
  `valeur_sous_rubrique` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_model` (`id_model`),
  CONSTRAINT `sous_rubrique_ibfk_1` FOREIGN KEY (`id_model`) REFERENCES `model_fiche` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `status` (
  `id` bigint(255) NOT NULL,
  `nom_status` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `stock` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `nom_stock` varchar(254) DEFAULT NULL,
  `nbrarticle` bigint(255) NOT NULL,
  `valeur` double NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_service` (`id_service`),
  CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;


INSERT INTO stock VALUES
("5","1","Stock 2","0","0"),
("7","1","Stock 3","0","0"),
("16","1","Stock 1","0","0");




CREATE TABLE `tache` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `id_projet` bigint(255) NOT NULL,
  `nom_tache` varchar(254) DEFAULT NULL,
  `ls_membre_tache` varchar(254) DEFAULT NULL,
  `date_tache` datetime DEFAULT NULL,
  `datelimit_tache` datetime DEFAULT NULL,
  `etiquette_tache` varchar(254) DEFAULT NULL,
  `etat_tache` int(11) DEFAULT NULL,
  `info_tache` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_projet` (`id_projet`),
  KEY `id_service` (`id_service`),
  CONSTRAINT `tache_ibfk_1` FOREIGN KEY (`id_projet`) REFERENCES `projet` (`id`),
  CONSTRAINT `tache_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `type_mouvement` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `nom_typemouvement` varchar(254) DEFAULT NULL,
  `navigation_typemouvement` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_service` (`id_service`),
  CONSTRAINT `type_mouvement_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `type_projet` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `id_departement` bigint(255) NOT NULL,
  `nom_type_projet` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_departement` (`id_departement`),
  KEY `id_service` (`id_service`),
  CONSTRAINT `type_projet_ibfk_1` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`id`),
  CONSTRAINT `type_projet_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `users` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `login` varchar(254) DEFAULT NULL,
  `password` varchar(254) DEFAULT NULL,
  `levelsecurity` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_service` (`id_service`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO users VALUES
("1","1","dialrock","dial.png","dial","root","3");




CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_categorie` AS select `c`.`id` AS `id`,`c`.`id_service` AS `id_service`,`c`.`id_famille` AS `id_famille`,`c`.`nom_categorie` AS `nom_categorie`,`c`.`nbr_produit_categorie` AS `nbr_produit_categorie`,`c`.`valeur_categorie` AS `valeur_categorie`,`c`.`flag_categorie` AS `flag_categorie`,`f`.`nom_famille` AS `nom_famille`,`f`.`color_famille` AS `color_famille`,`f`.`nbr_categorie_famille` AS `nbr_categorie_famille`,`f`.`valeur_famille` AS `valeur_famille`,`f`.`flag_famille` AS `flag_famille` from (`categorie` `c` join `famille` `f` on((`c`.`id_famille` = `f`.`id`)));


INSERT INTO v_categorie VALUES
("1","1","1","Bierre","0","0","0","BOISSON","#151314","2","0","0"),
("2","1","2","Fruits","0","0","0","VIVRES","#5af0c5","2","0","0"),
("3","1","2","Legumes","0","0","0","VIVRES","#5af0c5","2","0","0"),
("7","1","1","Vins","0","0","0","BOISSON","#151314","2","0","0");




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */; 
