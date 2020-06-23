SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
--
-- Database: ``
--




CREATE TABLE `author` (
  `author_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO author VALUES
("1","Pierre ","dialrock360@gmail.com");




CREATE TABLE `book` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `description` varchar(512) NOT NULL,
  `published` date NOT NULL,
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`book_id`),
  KEY `author_fk` (`author_id`),
  CONSTRAINT `author_fk` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO countries VALUES
("1","Guinee"),
("2","Benin");




CREATE TABLE `relation` (
  `idautor` int(11) NOT NULL,
  `idcountry` int(11) NOT NULL,
  `ref` varchar(10) NOT NULL,
  PRIMARY KEY (`idautor`,`idcountry`),
  KEY `idcountry` (`idcountry`),
  CONSTRAINT `relation_ibfk_1` FOREIGN KEY (`idautor`) REFERENCES `author` (`author_id`),
  CONSTRAINT `relation_ibfk_2` FOREIGN KEY (`idcountry`) REFERENCES `countries` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO relation VALUES
("1","1","Citoyen");




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */; 
























create or replace view v_personne as
SELECT p.`id`, p.`nom_personne`, p.`prenom_personne`, p.`genre_personne`, p.`date_naiss_personne`, p.`lieu_naiss_personne`, p.`nationalite_personne`, p.`typepiece_personne`, p.`numpiece_personne`, p.`photo_personne`,  p.`flag_personne`,

 cdn.`adress`, cdn.`tel`, cdn.`codepostal`, cdn.`info_personne`,  cdn.`flag_contact`,
  ps.`personne_id`, ps.`status_id`,  `nom_status`,
 FROM `personne` p
 join  `cordonnees`  cdn on p.id=cdn.personne_id
 join  `personne_status`  ps on p.id=ps.personne_id
 join  `status`  s on p.id=ps.status_id



create or replace view  v_contrat as
SELECT
  c.`id`,`emploie`, c.`cv_contrat`, c.`statut_contrat`, c.`numsecu_sire`, c.`datedebut`, c.`datefin`, c.`duree_essai`, c.`avantages_contrat`, c.`preavie_demande_conger`, c.`nbr_jr_conge_par_mois_tavail`, c.`etat_contrat`, c.`type_contrat_id`,   c.`personne_id`, c.`departement_id`, c.`modalite_contrat_id`, c.`flag_contract` ,
 tc.`nom_type_contrat`, tc.`details`,
 vp.`nom_personne`, vp.`prenom_personne`, vp.`genre_personne`, vp.`date_naiss_personne`, vp.`lieu_naiss_personne`, vp.`nationalite_personne`, vp.`typepiece_personne`, vp.`numpiece_personne`, vp.`photo_personne`, vp.`flag_personne`, vp.`adress`, vp.`tel`, vp.`codepostal`, vp.`info_personne`, vp.`flag_contact`,  `status_id`, vp.`nom_status` ,
 d.`id_service`, d.`nom_departement`, d.`nbr_employee`, d.`jour_ouvrable`, d.`id_chefdepartement`, d.`info_departement`, d.`flag_departement`,
 mc.`nom_modalite`, mc.`clause_modalite`
 FROM `contrat` c
 join  `type_contrat`  tc on  c.type_contrat_id=tc.id
 join  `v_personne`  vp on  vp.personne_id=c.personne_id
 join  `departement`  d on c.departement_id=d.id
 join  `modalite_contrat`  mc on c.modalite_contrat_id=mc.id



create or replace view  v_fiche_paie as SELECT
 fp.`id`, fp.`date_fiche_paie`, fp.`mois_payer`, fp.`est_payer`, fp.`salarier_id`,
 vs.`type_salaire`, vs.`salaire_base`, vs.`temps_travail`, vs.`nbr_heur_travail`, vs.`freq_travail`, vs.`prix_heur_sup`, vs.`contrat_id`, vs.`poste_id`, vs.`etat_contrat`, vs.`type_contrat_id`, vs.`personne_id`, vs.`departement_id`, vs.`nom_type_contrat`, vs.`nom_personne`, vs.`prenom_personne`, vs.`genre_personne`, vs.`date_naiss_personne`, vs.`lieu_naiss_personne`, vs.`nationalite_personne`, vs.`typepiece_personne`, vs.`numpiece_personne`, vs.`photo_personne`, vs.`adress`, vs.`tel`, vs.`codepostal`, vs.`info_personne`, vs.`status_id`, vs.`nom_status`, vs.`id_service`, vs.`nom_departement`, vs.`nom_modalite`, vs.`nom_poste`, vs.`categorie_proffessionelle`, vs.`salaire_base_poste`
 from fiche_paie fp
 join  `v_salarier`  vs on  fp.salarier_id=vs.id





create or replace view  v_fiche_de_presense as SELECT
fpr.`id`, fpr.`present`, fpr.`anne_fiche`, fpr.`date_fiche`, fpr.`heur_arrive`, fpr.`heur_depart`, fpr.`nbr_heur`, fpr.`fiche_paie_id` ,
 vfp.`contrat_id`, vfp.`poste_id`, vfp.`type_contrat_id`, vfp.`personne_id`, vfp.`departement_id`,  vfp.`nom_personne`, vfp.`prenom_personne`, vfp.`genre_personne`,  vfp.`numpiece_personne`, vfp.`photo_personne`,  vfp.`tel`,  vfp.`status_id`, vfp.`nom_status`, vfp.`id_service`, vfp.`nom_departement`,  vfp.`nom_poste`
FROM `fiche_de_presense` fpr
 join  `v_fiche_paie`  vfp on  fpr.fiche_paie_id=vfp.id




create or replace view  v_salarier as  SELECT
 s.`id`, s.`type_salaire`, s.`salaire_base`, s.`temps_travail`, s.`nbr_heur_travail`, s.`freq_travail`, s.`prix_heur_sup`, s.`contrat_id`, s.`poste_id`,

 vc.`etat_contrat`, vc.`type_contrat_id`, vc.`personne_id`, vc.`departement_id`, vc.`modalite_contrat_id`, vc.`nom_type_contrat`,

  vc.`nom_personne`, vc.`prenom_personne`, vc.`genre_personne`, vc.`date_naiss_personne`, vc.`lieu_naiss_personne`, vc.`nationalite_personne`,

  vc.`typepiece_personne`, vc.`numpiece_personne`, vc.`photo_personne`,

   vc.`adress`, vc.`tel`, vc.`codepostal`, vc.`info_personne`,
    vc.`status_id`, vc.`nom_status`, vc.`id_service`, vc.`nom_departement`,
      vc.`nom_modalite`,
  p.`nom_poste`, p.`categorie_proffessionelle`, p.`salaire_base` as salaire_base_poste
 FROM `salarier` s
 join  `v_contrat`  vc on  s.contrat_id=vc.id
 join  `poste`  p on  s.poste_id=p.id




select
 `astk`.`id` AS `id`,`astk`.`ref_article` AS `ref_article`,
 `stk`.`nom_stock`, `stk`.`type_stock`, `stk`.`nbrarticle`, `stk`.`valeur` as valeur_stock,
 `astk`.`id_article` AS `id_article`,
 `astk`.`id_stock` AS `id_stock`,
 `astk`.`id_conditionement_article` AS `id_conditionement_article`,`astk`.`pu_article_en_stock` AS `pu_article_en_stock`,`astk`.`qnt_article_en_stock` AS `qnt_article_en_stock`,`astk`.`mts_article_en_stock` AS `mts_article_en_stock`,`astk`.`min_qnt_article_en_stock` AS `min_qnt_article_en_stock`,`astk`.`max_qnt_article_en_stock` AS `max_qnt_article_en_stock`,`cnart`.`id_conditionement` AS `id_conditionement`,`cnart`.`qnt_unite` AS `qnt_unite`,`cnart`.`prix_unite` AS `prix_unite`,`cnart`.`id_unite` AS `id_unite`,`art`.`nom_article` AS `nom_article`,`art`.`path_photo` AS `path_photo`,`cnd`.`nom_conditionement` AS `nom_conditionement`,`uicnd`.`nom_conditionement` AS `nom_uniteconditionement`
 from
 `agsdb`.`article_en_stock` `astk`
 join `agsdb`.`conditionement_article` `cnart` on `astk`.`id_conditionement_article` = `cnart`.`id`
  join `agsdb`.`v_article` `art` on `astk`.`id_article` = `art`.`id`
     join `agsdb`.`conditionement` `cnd` on `cnart`.`id_conditionement` = `cnd`.`id`
     join `agsdb`.`conditionement` `uicnd` on `cnart`.`id_unite` = `uicnd`.`id`
     right join `agsdb`.`stock` `stk` on `astk`.`id_stock` = `stk`.`id`




select
`a`.`id` AS `id`,`a`.`id_categorie` AS `id_categorie`,`a`.`nom_article` AS `nom_article`,`a`.`ref_article` AS `ref_article`,`a`.`pxa_article` AS `pxa_article`,`a`.`pxv_article` AS `pxv_article`,`a`.`pxvbar_article` AS `pxvbar_article`,
`a`.`type_article` AS `type_article`,`a`.`tabidp` AS `tabidp`,`a`.`tabqnt` AS `tabqnt`,`a`.`tabmts` AS `tabmts`,`a`.`pxrv` AS `pxrv`,`a`.`nbrstockage` AS `nbrstockage`,`a`.`tabidstock` AS `tabidstock`,`a`.`flag_article` AS `flag_article`,
 `c`.`id_famille`,`c`.`nom_categorie`,`c`.`nbr_produit_categorie`,`c`.`valeur_categorie`,`c`.`flag_categorie`,`c`.`id_service`,`c`.`nom_famille`,`c`.`color_famille`,`c`.`nbr_categorie_famille`,`c`.`valeur_famille`,`c`.`flag_famille`,
 c.id_nomenclature_article,c.`ref_nomenclature_article`, c.`nom_nomenclature_article`, c.`code_couleur`,
 p . path_photo , p .`master`
 from   `agsdb`.`article` `a`
  join `agsdb`.`v_categorie` `c` on  `a`.`id_categorie` = `c`.`id`
  left join `agsdb`.`photo_article` `p` on   `a`.`id` = `p`.`id_article` and  `p`.`master` = 1





create view v_famille as
SELECT  f.`id`, f.`id_service`, f.`nom_famille`, f.`color_famille`, f.`nbr_categorie_famille`, f.`valeur_famille`, f.`id_nomenclature_article`, f.`flag_famille`,
  `id`, `na`.`ref_nomenclature_article`, `na`.`nom_nomenclature_article`, `na`.`code_couleur`
 FROM `famille` f
  join `agsdb`.`nomenclature_article` `na` on  `f`.`id_nomenclature_article` = `na`.`id`


--- SERVICE,BIEN,PRODUIT FINI,MATIERE PREMIERE, PRODUIT SEMI FINI, PIECE,,



select `c`.`id` AS `id`,`c`.`id_famille` AS `id_famille`,`c`.`nom_categorie` AS `nom_categorie`,`c`.`nbr_produit_categorie` AS `nbr_produit_categorie`,`c`.`valeur_categorie` AS `valeur_categorie`,`c`.`flag_categorie` AS `flag_categorie`,

`f`.`id_service` AS `id_service`,`f`.`nom_famille` AS `nom_famille`,`f`.`color_famille` AS `color_famille`,`f`.`nbr_categorie_famille` AS `nbr_categorie_famille`,`f`.`valeur_famille` AS `valeur_famille`,f.id_nomenclature_article, `f`.`flag_famille` AS `flag_famille` ,
f.`ref_nomenclature_article`, f.`nom_nomenclature_article`, f.`code_couleur`
from (`agsdb`.`categorie` `c` join `agsdb`.`v_famille` `f` on((`c`.`id_famille` = `f`.`id`)))




select
 `a`.`id`, `a`.`id_categorie`, `a`.`id_catalogue`, `a`.`fiche_technique`, `a`.`nbrstockage`, `a`.`tabidstock`, `a`.`flag_article`,
 `ctlg`.`ref_article`, `ctlg`.`type_article`, `ctlg`.`nom_article`,
 `c`.`id_famille`,`c`.`nom_categorie`,`c`.`nbr_produit_categorie`,`c`.`valeur_categorie`,`c`.`flag_categorie`,`c`.`id_service`,`c`.`nom_famille`,`c`.`color_famille`,`c`.`nbr_categorie_famille`,`c`.`valeur_famille`,`c`.`flag_famille`,
 c.id_nomenclature_article,c.`ref_nomenclature_article`, c.`nom_nomenclature_article`, c.`code_couleur`,
 p . path_photo , p .`master`
 from   `agsdb`.`article` `a`
  join `agsdb`.`catalogue` `ctlg` on  `a`.`id_catalogue` = `ctlg`.`id`
  join `agsdb`.`v_categorie` `c` on  `a`.`id_categorie` = `c`.`id`
  left join `agsdb`.`photo_article` `p` on   `a`.`id` = `p`.`id_article` and  `p`.`master` = 1





select
 `astk`.`id`, `astk`.`ref_article`, `astk`.`id_article`, `astk`.`id_stock`, `astk`.`id_conditionement_article`, `astk`.`prv_article_en_stock`, `astk`.`cout_article_en_stock`, `astk`.`pu_article_en_stock`, `astk`.`pxbar_article_en_stock`, `astk`.`qnt_article_en_stock`, `astk`.`mts_article_en_stock`, `astk`.`min_qnt_article_en_stock`, `astk`.`max_qnt_article_en_stock`,

`cnart`.`id_conditionement` AS `id_conditionement`,`cnart`.`qnt_unite` AS `qnt_unite`,`cnart`.`prix_unite` AS `prix_unite`,`cnart`.`id_unite` AS `id_unite`,`art`.`nom_article` AS `nom_article`,`art`.`path_photo` AS `path_photo`,`cnd`.`nom_conditionement` AS `nom_conditionement`,`uicnd`.`nom_conditionement` AS `nom_uniteconditionement`

 from (`agsdb`.`stock` `stk` join ((((`agsdb`.`article_en_stock` `astk` join `agsdb`.`conditionement_article` `cnart` on((`astk`.`id_conditionement_article` = `cnart`.`id`))) join `agsdb`.`v_article` `art` on((`astk`.`id_article` = `art`.`id`))) join `agsdb`.`conditionement` `cnd` on((`cnart`.`id_conditionement` = `cnd`.`id`))) join `agsdb`.`conditionement` `uicnd` on((`cnart`.`id_unite` = `uicnd`.`id`))) on((`astk`.`id_stock` = `stk`.`id`)))



create view v_famille as
SELECT  f.`id`, f.`id_service`, f.`nom_famille`, f.`color_famille`, f.`nbr_categorie_famille`, f.`valeur_famille`,   f.`flag_famille`,
  `s`.`nom_service`
 FROM `famille` f
  join `agsdb`.`service` `s` on  `f`.`id_service` = `s`.`id`








select
`astk`.`id` AS `id`,`astk`.`ref_article` AS `ref_article`,`astk`.`id_article` AS `id_article`,`astk`.`id_stock` AS `id_stock`,`astk`.`id_conditionement_article` AS `id_conditionement_article`,`astk`.`prv_article_en_stock` AS `prv_article_en_stock`,`astk`.`cout_article_en_stock` AS `cout_article_en_stock`,`astk`.`pu_article_en_stock` AS `pu_article_en_stock`,`astk`.`pxbar_article_en_stock` AS `pxbar_article_en_stock`,`astk`.`qnt_article_en_stock` AS `qnt_article_en_stock`,`astk`.`mts_article_en_stock` AS `mts_article_en_stock`,`astk`.`min_qnt_article_en_stock` AS `min_qnt_article_en_stock`,`astk`.`max_qnt_article_en_stock` AS `max_qnt_article_en_stock`,`cnart`.`id_conditionement` AS `id_conditionement`,`cnart`.`qnt_unite` AS `qnt_unite`,`cnart`.`prix_unite` AS `prix_unite`,`cnart`.`id_unite` AS `id_unite`,`art`.`nom_article` AS `nom_article`,`art`.`path_photo` AS `path_photo`,`cnd`.`nom_conditionement` AS `nom_conditionement`,`uicnd`.`nom_conditionement` AS `nom_uniteconditionement`

 from (`agsdb`.`stock` `stk` join ((((`agsdb`.`article_en_stock` `astk` join `agsdb`.`conditionement_article` `cnart` on((`astk`.`id_conditionement_article` = `cnart`.`id`))) join `agsdb`.`v_article` `art` on((`astk`.`id_article` = `art`.`id`))) join `agsdb`.`conditionement` `cnd` on((`cnart`.`id_conditionement` = `cnd`.`id`))) join `agsdb`.`conditionement` `uicnd` on((`cnart`.`id_unite` = `uicnd`.`id`))) on((`astk`.`id_stock` = `stk`.`id`)))








create or replace view v_categorie as
SELECT
   ct.`id`, ct.`id_famille`, ct.`nom_categorie`, ct.`nbr_produit_categorie`, ct.`valeur_categorie`, ct.`id_nomenclature_article`, ct.`flag_categorie` ,
   vf.`id_service`, vf.`nom_famille`, vf.`color_famille`, vf.`nbr_categorie_famille`, vf.`valeur_famille`, vf.`flag_famille`, vf.`nom_service`,
   nma.`ref_nomenclature_article`, nma.`nom_nomenclature_article`, nma.`code_couleur`
FROM `categorie` ct

  join `agsdb`.`v_famille` `vf` on  `ct`.`id_famille` = `vf`.`id`
  join `agsdb`.`nomenclature_article` `nma` on  `ct`.`id_nomenclature_article` = `nma`.`id`





create or replace view v_conditionement_article as
SELECT
 cna.`id`, cna.`id_article`,  cna.`qnt_unite`, cna.`prix_unite`, cna.`cout_achat_conditionement_article`, cna.`pxv_u_conditionement_article`, cna.`pxv_bar_conditionement_article`, cna.`pxv_conditionement_article`,
cna.`id_conditionement`, `cndp`.`nom_conditionement`,
 cna.`id_unite`, `cndu`.`nom_conditionement` as nom_unite_conditionement

FROM `conditionement_article` cna

  join `agsdb`.`conditionement` `cndp` on  `cna`.`id_conditionement` = `cndp`.`id`
  join `agsdb`.`conditionement` `cndu` on  `cna`.`id_unite` = `cndu`.`id`



create or replace view v_account_sessions as
SELECT
  ass.`session_id`, ass.`account_id`, ass.`account_token`, ass.`login_time`,
  `acc`.`login`,`acc`.`enabled`, `acc`.`levelsecurity`
FROM `account_sessions` ass

  join `agsdb`.`accounts` `acc` on  `ass`.`account_id` = `acc`.`id`    AND (ass.login_time >= (NOW() - INTERVAL 3 DAY))





create or replace view v_article_en_stock as
  SELECT
  `artstk`.`id`, `artstk`.`ref_article`, `artstk`.`id_article`, `artstk`.`id_stock`, `artstk`.`id_conditionement_article`, `artstk`.`qnt_article_en_stock`, `artstk`.`valeur_article_en_stock`, `artstk`.`min_qnt_article_en_stock`, `artstk`.`max_qnt_article_en_stock`,
   vcnd.`qnt_unite`, vcnd.`prix_unite`, vcnd.`cout_achat_conditionement_article`, vcnd.`pxv_u_conditionement_article`, vcnd.`pxv_bar_conditionement_article`, vcnd.`pxv_conditionement_article`, vcnd.`id_conditionement`, vcnd.`nom_conditionement`, vcnd.`id_unite`, vcnd.`nom_unite_conditionement` ,
  `ctlg`.`nom_article` ,
  `stk`.`id_service`, `stk`.`nom_stock`, `stk`.`type_stock`,
   `pfa`.`path_photo`, `pfa`.`master`

FROM `article_en_stock` artstk

  join `agsdb`.`v_conditionement_article` `vcnd` on  `artstk`.`id_conditionement_article` = `vcnd`.`id`
  join `agsdb`.`catalogue` `ctlg` on  `artstk`.`ref_article` = `ctlg`.`ref_article`
  join `agsdb`.`stock` `stk` on  `artstk`.`id_stock` = `stk`.`id`
  join `agsdb`.`photo_article` `pfa` on  `artstk`.`id_article` = `pfa`.`id_article` and `pfa`.`master`=1


create or replace view v_personne as
  SELECT
 p.`id`, p.`nom_personne`, p.`prenom_personne`, p.`genre_personne`, p.`date_naiss_personne`, p.`lieu_naiss_personne`, p.`nationalite_personne`, p.`typepiece_personne`, p.`numpiece_personne`, p.`photo_personne`, p.`details_personne`, p.`id_service`, p.`flag_personne`,
 c.`adress`, c.`tel`, c.`email_personne`, c.`codepostal`, c.`contact_urgent`, c.`etat_civile`, c.`nbr_conjoint`, c.`nbr_enfant`, c.`info_conjoint`, c.`flag_contact` ,
 ps.`status_id`,s.`nom_status`, sv.`nom_service`, sv.`sigle_service`
 FROM `personne`  p

  join `agsdb`.`cordonnees` `c` on  `p`.`id` = `c`.`personne_id`
  join `agsdb`.`personne_status` `ps` on  `p`.`id` = `ps`.`personne_id`
  join `agsdb`.`status` `s` on  `ps`.`status_id` = `s`.`id`
  join `agsdb`.`service` `sv` on  `p`.`id_service` = `sv`.`id`



create or replace view v_article as

select `a`.`id` AS `id`,`a`.`id_categorie` AS `id_categorie`,`a`.`id_catalogue` AS `id_catalogue`,`a`.`fiche_technique` AS `fiche_technique`,`a`.`nbrstockage` AS `nbrstockage`,`a`.`tabidstock` AS `tabidstock`,`a`.`valeur_article` AS `valeur_article`,`a`.`flag_article` AS `flag_article`,`ctlg`.`ref_article` AS `ref_article`,`ctlg`.`type_article` AS `type_article`,`ctlg`.`nom_article` AS `nom_article`,

 c.`id_famille`, c.`nom_categorie`, c.`nbr_produit_categorie`, c.`valeur_categorie`, c.`id_nomenclature_article`, c.`flag_categorie`, c.`id_service`, c.`nom_famille`, c.`color_famille`, c.`nbr_categorie_famille`, c.`valeur_famille`, c.`flag_famille`, c.`nom_service` ,
`p`.`path_photo` AS `path_photo`,`p`.`master` AS `master`

from (((`agsdb`.`article` `a` join `agsdb`.`catalogue` `ctlg` on((`a`.`id_catalogue` = `ctlg`.`id`)))
join `agsdb`.`v_categorie` `c` on((`a`.`id_categorie` = `c`.`id`)))
left join `agsdb`.`photo_article` `p` on(((`a`.`id` = `p`.`id_article`) and (`p`.`master` = 1))))






create or replace view v_categorie as
  SELECT
  `c`.`ID_CAT`, `c`.`IDFA`, `c`.`NOM_CAT`, `c`.`ACHAT`, `c`.`VENTE`, `c`.`COMPT`, `c`.`flag`,
   f.`DESI`,  f.`COLOR`
  FROM `senbd`.`categorie` c

  join `senbd`.`famille` `f` on  `f`.`IDFA` = `c`.`IDFA`


create or replace view v_produit as
SELECT
`p`.`IDP`, `p`.`IDC`, `p`.`ID_CAT`, `p`.`DESI`, `p`.`PHOTO`, `p`.`PRIXA`, `p`.`PRIXV`, `p`.`QNT`, `p`.`COMPOSER`,`p`.`FTECH`, `p`.`FLAG`,
`c`.`IDFA`, `c`.`NOM_CAT`, `c`.`ACHAT`, `c`.`VENTE`, `c`.`COMPT`, `c`.`DESI` as NOMF, `c`.`COLOR`,
`cnd`.`NOMC`,
`idpcmp`
FROM `senbd`.`produit` p
join `senbd`.`v_categorie` `c` on `c`.`ID_CAT` = `p`.`ID_CAT`
join `senbd`.`condis` `cnd` on `cnd`.`IDC` = `p`.`IDC`





create or replace view v_produit_cmp as
SELECT
pc.`idpcmp`, pc.`IDP`, pc.`tabidp`, pc.`tabqnt`, pc.`tabmts`, pc.`prv`,
 p.`IDC`, p.`ID_CAT`, p.`DESI`, p.`PHOTO`, p.`PRIXA`, p.`PRIXV`, p.`QNT`, p.`FTECH`, p.`FLAG`, p.`IDFA`, p.`NOM_CAT`, p.`ACHAT`, p.`VENTE`, p.`COMPT`, p.`NOMF`, p.`COLOR`, p.`NOMC`
FROM `produit_cmp` pc
join `senbd`.`v_produit` `p` on  `p`.`IDP` = `pc`.`IDP`



create or replace view v_article as

select
`ctlg`.`ref_article` AS `ref_article`,`ctlg`.`type_article` AS `type_article`,`ctlg`.`nom_article` AS `nom_article`,
`a`.`id` AS `id`,`a`.`id_categorie` AS `id_categorie`,`a`.`id_catalogue` AS `id_catalogue`,`a`.`fiche_technique` AS `fiche_technique`,`a`.`nbrstockage` AS `nbrstockage`,`a`.`tabidstock` AS `tabidstock`,`a`.`valeur_article` AS `valeur_article`,`a`.`flag_article` AS `flag_article`,

 c.`id_famille`, c.`nom_categorie`, c.`nbr_produit_categorie`, c.`valeur_categorie`, c.`id_nomenclature_article`, c.`flag_categorie`, c.`id_service`, c.`nom_famille`, c.`color_famille`, c.`nbr_categorie_famille`, c.`valeur_famille`, c.`flag_famille`, c.`nom_service` ,
`p`.`path_photo` AS `path_photo`,`p`.`master` AS `master`

from (((`agsdb`.`article` `a` join `agsdb`.`catalogue` `ctlg` on((`a`.`id_catalogue` = `ctlg`.`id`)))
join `agsdb`.`v_categorie` `c` on((`a`.`id_categorie` = `c`.`id`)))
left join `agsdb`.`photo_article` `p` on(((`a`.`id` = `p`.`id_article`) and (`p`.`master` = 1))))
/*
select `a`.`id` AS `id`,`a`.`id_categorie` AS `id_categorie`,`a`.`id_catalogue` AS `id_catalogue`,`a`.`fiche_technique` AS `fiche_technique`,`a`.`nbrstockage` AS `nbrstockage`,`a`.`tabidstock` AS `tabidstock`,`a`.`valeur_article` AS `valeur_article`,`a`.`flag_article` AS `flag_article`,`ctlg`.`ref_article` AS `ref_article`,`ctlg`.`type_article` AS `type_article`,`ctlg`.`nom_article` AS `nom_article`,`c`.`id_famille` AS `id_famille`,`c`.`nom_categorie` AS `nom_categorie`,`c`.`nbr_produit_categorie` AS `nbr_produit_categorie`,`c`.`valeur_categorie` AS `valeur_categorie`,`c`.`id_nomenclature_article` AS `id_nomenclature_article`,`c`.`flag_categorie` AS `flag_categorie`,`c`.`id_service` AS `id_service`,`c`.`nom_famille` AS `nom_famille`,`c`.`color_famille` AS `color_famille`,`c`.`nbr_categorie_famille` AS `nbr_categorie_famille`,`c`.`valeur_famille` AS `valeur_famille`,`c`.`flag_famille` AS `flag_famille`,`c`.`nom_service` AS `nom_service`,`p`.`path_photo` AS `path_photo`,`p`.`master` AS `master`

from (((`agsdb`.`article` `a` join `agsdb`.`catalogue` `ctlg` on((`a`.`id_catalogue` = `ctlg`.`id`))) join `agsdb`.`v_categorie` `c` on((`a`.`id_categorie` = `c`.`id`))) left join `agsdb`.`photo_article` `p` on(((`a`.`id` = `p`.`id_article`) and (`p`.`master` = 1))))
 */
