-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 20 Septembre 2019 à 14:11
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `choiqualitycontrol`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_nom` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_tel` varchar(15) DEFAULT NULL,
  `contact_societe` varchar(50) NOT NULL,
  `contact_adresse` varchar(100) NOT NULL,
  `contact_postal` varchar(5) NOT NULL,
  `contact_message` text NOT NULL,
  `contact_date` datetime(1) NOT NULL,
  `contact_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_nom`, `contact_email`, `contact_tel`, `contact_societe`, `contact_adresse`, `contact_postal`, `contact_message`, `contact_date`, `contact_active`) VALUES
(1, 'Essoh', 'essohjean88@gmail.co', '00225474775', 'sifca', '30 rue de la lande du Breil', '57617', 'msg', '2019-05-21 12:38:45.0', 0),
(2, 'eric', 'essohjean88@yahoo.fr', '0022547477553', 'sifca', '30 rue de la lande du Breil', '57617', 'https://www.supinfo.com/articles/single/6782-envoyer-mails-php', '2019-05-21 13:26:05.0', 0),
(3, 'Essoh', 'essohjean88@gmail.com', '00225474775', 'sifca', '30 rue de la lande du Breil', '57617', 'sendmail', '2019-05-21 19:18:50.0', 0),
(4, 'Essoh', 'essohjean88@gmail.com', '00225474775', 'sifca', '30 rue de la lande du Breil', '57617', 'sendmail', '2019-05-21 19:21:06.0', 0),
(5, 'Essoh', 'essohjean88@gmail.com', '00225474775', 'sifca', '30 rue de la lande du Breil', '57617', 'sendmail', '2019-05-21 19:35:57.0', 0),
(6, 'Essoh', 'essohjean88@gmail.com', '0751470845', 'fd', '30 rue de la lande du Breil', '57617', 'sendMail(''choiqualitycontrol@nexgate.ch'', $subject, $msg, $msg);', '2019-05-21 20:12:30.0', 0),
(7, 'Essoh eric2', 'essohjean88@gmail.com', '00225474775', 'sifca', '30 rue de la lande du Breil', '57617', 'Ouverture chimique ', '2019-07-01 15:11:49.0', 0),
(8, 'essoh', 'essohjean88@yahoo.com', '0778899654', 'atos', 'avenue degaule', '2578', 'test de mail', '2019-07-01 15:16:12.0', 0),
(9, 'essoh', 'essoh88@yahoo.com', '0778899654', 'atos', 'avenue degaule', '2578', 'Laboratoire', '2019-07-01 15:18:42.0', 0),
(10, 'Essoh', 'essohjean88@gmail.com', '0751470845', 'sifca', '30 rue de la lande du Breil', '57617', 'test2', '2019-07-01 15:28:02.0', 0),
(11, 'Expertise d’analyses électroniques', 'essohjean88@gmail.com', '00225474775', 'sifca', '30 rue de la lande du Breil', '57617', 'Laboratoire', '2019-07-01 15:51:07.0', 0),
(12, 'essoh', 'essoh88@yahoo.com', '0778899654', 'atos', 'avenue degaule', '2578', 'Laboratoire', '2019-07-01 16:12:48.0', 0),
(13, 'essoh', 'essoh88@yahoo.com', '0778899654', 'atos', 'avenue degaule', '2578', 'Laboratoire', '2019-07-01 16:12:51.0', 0),
(14, 'Essoh', 'essohjean88@gmail.com', '00225474775', 'sifca', '30 rue de la lande du Breil', '57617', 'Adresse manquant', '2019-07-15 12:46:50.0', 0),
(15, 'Essoh', 'essohjean88@gmail.co', '0751470845', 'sifca', '30 rue de la land', '57617', 'Adresse manquant', '2019-07-15 13:05:54.0', 0),
(16, 'Essoh', 'essohjean88@yahoo.fr', '0751470845', 'sifca', '30 rue de la lande du Breil', '57617', 'Adresse manquant', '2019-07-15 13:07:27.0', 0),
(17, 'Essoh eric mel theo', 'essohjean88@gmail.com', '0022547477553', 'sifca', '30 rue de la lande du Breil', '57617', 'Association Le Chaînon Manquant à Paris Organismes de développement économique Association humanitaire, d''entraide, sociale : adresse, photos, retrouvez ...', '2019-07-15 13:29:10.0', 0),
(18, 'Essoh', 'essohjean88@gmail.co', '00225474775', 'sifca', '30 rue de la lande du Breil', '57617', 'ok ça marche.', '2019-07-15 14:06:04.0', 0),
(19, 'Essoh', 'essohjean88@gmail.com', '00225474775', 'sifca', '30 rue de la lande du Breil', '57617', '&lt;/div&gt;', '2019-07-15 14:07:38.0', 0),
(20, 'Essoh eric mel theo', 'essohjean88@gmail.com', '00225474775', 'sifca', '30 rue de la lande du Breil', '57617', 'Succes', '2019-07-15 14:09:52.0', 0),
(21, 'Essoh eric mel theo', 'essohjean88@gmail.com', '00225474775', 'sifca', '30 rue de la lande du Breil', '57617', 'Succes', '2019-07-15 14:37:54.0', 0),
(22, 'Circuits imprimés nus: IPC 600. ok', 'essohjean88@gmail.com', '00225474775', 'sifca', '30 rue de la lande du Breil', '57617', 'ok ', '2019-07-15 14:48:14.0', 0),
(23, 'Essoh', 'essohjean88@gmail.com', '00225474775', 'sifca', '30 rue de la lande du Breil', '57617', 'ok ça marche', '2019-07-16 07:52:32.0', 0),
(24, 'Essoh', 'essohjean88@gmail.com', '00225474775', 'sifca', '30 rue de la lande du Breil', '57617', ' $(''#result'').html(''+ page +'');', '2019-07-22 14:40:47.0', 0),
(25, 'Essoh', 'essohjean88@gmail.com', '00225474775', 'sifca', '30 rue de la lande du Breil', '57617', 'Succes', '2019-07-22 14:51:30.0', 0),
(26, 'Essoh', 'essohjean88@gmail.com', '00225474775', 'sifca', '30 rue de la lande du Breil', '57617', 'Succes', '2019-07-22 14:52:19.0', 0),
(27, 'Essoh', 'essohjean88@gmail.com', '00225474775', 'cqc', '30 rue de la lande du Breil', '57617', '&lt;h4&gt;', '2019-07-23 11:00:36.0', 0),
(28, 'Essoh', 'essohjean88@gmail.com', '0022547477553', 'cqc', '30 rue de la lande du Breil', '5761', '*/', '2019-07-23 11:10:42.0', 0),
(29, 'Essoh', 'essohjean88@gmail.co', '00225474775', 'sifca', '30 rue de la land', '57617', 'formulaire de contact et retour sur le meme formulaire', '2019-07-23 11:50:52.0', 0),
(30, 'Essoh', 'essohjean88@gmail.com', '00225474775', 'cqc', '30 rue de la lande du Breil', '5761', 'essai', '2019-07-23 13:32:35.0', 0),
(31, 'Essoh', 'essohjean88@gmail.com', '00225474775', 'cqc', '30 rue de la lande du Breil', '57617', 'essai', '2019-07-23 13:38:29.0', 0),
(32, 'Essoh', 'essohjean88@gmail.com', '00225474775', 'cqc', '30 rue de la lande du Breil', '57617', 'essai', '2019-07-23 13:43:51.0', 0),
(33, 'Essoh', 'essohjean88@gmail.com', '00225474775', 'cqc', '30 rue de la lande du Breil', '5761', 'ok reçu', '2019-07-23 15:03:50.0', 0),
(34, 'essoh', 'essohjean88@yahoo.com', '0778899654', 'atos', 'avenue degaule', '2578', 'ok', '2019-07-24 12:48:40.0', 0);

-- --------------------------------------------------------

--
-- Structure de la table `contenuaccueil`
--

DROP TABLE IF EXISTS `contenuaccueil`;
CREATE TABLE IF NOT EXISTS `contenuaccueil` (
  `contenuAccueil_id` int(11) NOT NULL AUTO_INCREMENT,
  `contenuAccueil_nom` varchar(50) NOT NULL DEFAULT 'accueil',
  `contenuAccueil_titre` text NOT NULL,
  `contenuAccueil_titrean` text,
  `contenuAccueil_date` datetime DEFAULT NULL,
  `contenuAccueil_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`contenuAccueil_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contenuaccueil`
--

INSERT INTO `contenuaccueil` (`contenuAccueil_id`, `contenuAccueil_nom`, `contenuAccueil_titre`, `contenuAccueil_titrean`, `contenuAccueil_date`, `contenuAccueil_active`) VALUES
(1, 'accueil', 'Coupe micrographique', 'Micrographic section ', '2019-09-09 10:52:53', 1),
(2, 'accueil', 'Analyse du MEB', 'MEB analysis', NULL, 1),
(3, 'accueil', 'destructive physical analysis (DPA)', 'destructive physical analysis (DPA)', NULL, 1),
(4, 'accueil', 'Désenrobage, dédorage', 'Undressing, defrosting', NULL, 1),
(5, 'accueil', 'Reverse engineering', 'Reverse engineering', NULL, 1),
(6, 'accueil', 'Non destructive analyse ( Rx-2d, Rx-3d, ultrason..)', 'Non destructive analysis (Rx-2d, Rx-3d, ultrasound ..)', '2019-09-09 10:53:21', 1),
(7, 'accueil', 'Analyse thermique ( ATG, ATD.. )', 'Thermal analysis (ATG, ATD ..)', NULL, 1),
(8, 'accueil', 'Analyse chimique ( IR )', 'Chemical analysis (IR)', NULL, 1),
(9, 'accueil', 'Analyse mécanique (test cisaillement)', 'Mechanical analysis (shear test)', NULL, 1),
(10, 'accueil', 'Essais climatiques et environnementaux', 'Climatic and environmental tests', '2019-05-29 09:31:27', 1);

-- --------------------------------------------------------

--
-- Structure de la table `contexte`
--

DROP TABLE IF EXISTS `contexte`;
CREATE TABLE IF NOT EXISTS `contexte` (
  `contexte_id` int(11) NOT NULL AUTO_INCREMENT,
  `contexte_ligne1` text,
  `contexte_line1` text,
  `contexte_ligne2` text,
  `contexte_line2` text,
  `contexte_ligne3` text,
  `contexte_line3` text,
  `contexte_ligne4` text,
  `contexte_line4` text,
  `contexte_serviceid` int(11) NOT NULL,
  `contexte_date` datetime DEFAULT NULL,
  `contexte_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`contexte_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contexte`
--

INSERT INTO `contexte` (`contexte_id`, `contexte_ligne1`, `contexte_line1`, `contexte_ligne2`, `contexte_line2`, `contexte_ligne3`, `contexte_line3`, `contexte_ligne4`, `contexte_line4`, `contexte_serviceid`, `contexte_date`, `contexte_active`) VALUES
(1, 'L’industrie a besoin de témoins : la validation des produits nouveaux, la validation de la ligne de production , nouveau process', 'The industry needs witnesses:', '', 'validation of new products', '', 'the validation of the production line', '', 'new process', 37, '2019-07-05 15:49:41', 1),
(16, 'Des composants électroniques stratégiques sont requis pour valider le lot par analyse DPA ( destructive physical analysis).', '', '', '', '', '', '', '', 38, '2019-07-01 14:23:16', 1),
(22, 'ligne de texte', 'line1', 'ligne de texte', 'line2', 'ligne de texte', 'line3', 'ligne de texte', 'line4', 39, '2019-07-16 11:43:08', 1),
(23, 'ligne de texte', 'line1', 'ligne de texte', 'line2', 'ligne de texte', 'line3', 'ligne de texte', 'line4', 44, '2019-07-16 12:18:41', 1);

-- --------------------------------------------------------

--
-- Structure de la table `exemple`
--

DROP TABLE IF EXISTS `exemple`;
CREATE TABLE IF NOT EXISTS `exemple` (
  `exemple_id` int(11) NOT NULL AUTO_INCREMENT,
  `exemple_idnom` varchar(15) NOT NULL DEFAULT 'échantillon',
  `exemple_nom` text NOT NULL,
  `exemple_name` text NOT NULL,
  `exemple_serviceid` int(11) NOT NULL,
  `exemple_photo` text,
  `exemple_date` datetime DEFAULT NULL,
  `exemple_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`exemple_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `exemple`
--

INSERT INTO `exemple` (`exemple_id`, `exemple_idnom`, `exemple_nom`, `exemple_name`, `exemple_serviceid`, `exemple_photo`, `exemple_date`, `exemple_active`) VALUES
(1, 'échantillon', '100 % inspection visuelle par microscope binoculaire (x50 ~ x120) de l’aspect brasure selon IPC 610 :( solder balls, solder beads, électro-migration …).', '100 % visual inspection by binocular microscope (x50 ~ x120) of the solder aspect according to IPC 610:(solder balls, solder beads, electro-migration ...).', 37, '10072019143335-echantillon.jpg', '2019-07-10 14:33:35', 1),
(2, 'échantillon', 'Inspection interne par coupe micrographique (x150 ~ x1000) sur 3 ou 4 zones sur composants brasés ( passif, connectique, broche …).', 'Internal inspection by micrographic section (x150 ~ x1000) on 3 or 4 zones on brazed components (passive, connector, spindle ...).', 37, '10072019131248-echantillon.jpg', '2019-07-10 16:12:48', 1),
(3, 'échantillon', 'Inspection interne par microscope électronique à balayage (MEB)( x30 ~ x5000) pour l’analyse EDX (Forme de brasure, mixité, homogénéité, interface, IMC, fissure.).', 'Internal inspection by scanning electron microscope (SEM)(x30 ~ x5000) for EDX analysis (Braze form, mix, homogeneity, interface, BMI, crack.).', 37, '05072019112301-echantillon.jpg', '2019-07-05 14:23:01', 1),
(4, 'échantillon', 'Inspection non-destructive par Rayon-X sur 2 ou 3 zones (relay, press-fit, FNR,..)( taux de porosité, remplissage, …).', 'Non-destructive X-ray inspection on 2 or 3 zones (relay, press-fit, FNR, ..) (porosity rate, filling, ...).', 37, '05072019112328-echantillon.jpg', '2019-07-05 14:23:28', 1),
(5, 'échantillon', 'Mesure de résistance mécanique par test cisaillement.', 'Measurement of mechanical strength by shear test.', 37, '05072019112352-echantillon.jpg', '2019-07-05 14:23:52', 1),
(6, 'échantillon', 'Analyse whiskers par microscope binoculaire (x50 ~ x120) et MEB (x2000 ~x3000).', 'Analysis whiskers by binocular microscope (x50 ~ x 120) and SEM (x2000 ~ x3000).', 37, '05072019112415-echantillon.jpg', '2019-07-05 14:24:15', 1),
(7, 'échantillon', 'Inspection visuelle externe ( marquage, dimensions, l’aspect d’apparence …).', 'External visual inspection (marking, dimensions, appearance appearance ...).', 38, '05072019112435-echantillon.png', '2019-07-05 14:24:53', 1),
(16, 'échantillon', 'Essoh eric mel theo', 'Expertise of electronic analyzes', 39, '16072019083555-essoh-eric-mel-theo.jpg', '2019-07-16 11:35:55', 1),
(17, 'échantillon', 'Essoh eric mel theo', 'ESSOH Jean-Théodore', 44, '16072019091937-essoh-eric-mel-theo.jpg', '2019-07-16 12:19:37', 1),
(18, 'échantillon', 'Essoh', 'ESSOH Jean-Théodore', 71, '16072019092116-essoh.jpg', '2019-07-16 12:21:16', 1);

-- --------------------------------------------------------

--
-- Structure de la table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `info_nom` varchar(50) NOT NULL DEFAULT 'information',
  `info_message` text,
  `info_messagean` text,
  `info_date` datetime DEFAULT NULL,
  `info_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `info`
--

INSERT INTO `info` (`info_id`, `info_nom`, `info_message`, `info_messagean`, `info_date`, `info_active`) VALUES
(1, 'information', 'Nous sommes à la recherche d''un technicien Bac+2.', 'We are looking for a laboratory technician BAC + 2 minimum.', '2019-09-09 10:04:05', 0),
(6, 'information', 'Nous sommes à la recherche d''un technicien laboratoire BAC+2 minimum.', 'We are looking for a laboratory technician BAC+2 minimum.', '2019-06-06 14:49:44', 0),
(2, 'information', 'Bonne arrivée sur notre site web.', 'Welcome on our website.', '2019-06-06 14:51:41', 0),
(3, 'information', 'Bonne arrivée sur notre site web.', 'Welcome on our website.', '2019-06-06 14:51:34', 0),
(4, 'information', 'Message modifiable.', 'Editable message.', '2019-06-06 14:50:21', 0),
(7, 'information', 'Nous sommes à la recherche d''un technicien laboratoire BAC+2 minimum.', 'We are looking for a laboratory technician BAC + 2 minimum.', '2019-06-06 13:55:35', 0),
(8, 'information', 'Essoh eric mel theo', 'ESSOH Jean-Théodore', '2019-06-06 14:37:49', 0),
(9, 'information', 'Essoh eric mel theo', 'ESSOH Jean-Théodore', '2019-06-06 14:40:55', 0),
(10, 'information', 'nom1', 'nom1', '2019-06-06 14:51:25', 0);

-- --------------------------------------------------------

--
-- Structure de la table `norme`
--

DROP TABLE IF EXISTS `norme`;
CREATE TABLE IF NOT EXISTS `norme` (
  `norme_id` int(11) NOT NULL AUTO_INCREMENT,
  `norme_nom` text NOT NULL,
  `norme_name` text,
  `norme_qualiteid` int(11) NOT NULL DEFAULT '1',
  `norme_date` datetime NOT NULL,
  `norme_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`norme_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `norme`
--

INSERT INTO `norme` (`norme_id`, `norme_nom`, `norme_name`, `norme_qualiteid`, `norme_date`, `norme_active`) VALUES
(1, 'Circuits imprimés nus: IPC 600.', 'Printed circuit boards: IPC 600.', 1, '2019-09-05 09:46:52', 1),
(2, 'Circuits imprimés équipés: IPC 610 G.', 'Printed circuits equipped: IPC 610 G.', 1, '2019-06-05 10:35:27', 1),
(3, 'Contrôle press-fit: EN 60352-5.', 'Press-fit control: EN 60352-5.', 1, '2019-06-05 10:36:05', 1),
(4, 'Coupe micrographique: JIS.', 'Micrographic section: JIS.', 1, '2019-06-05 10:36:26', 1);

-- --------------------------------------------------------

--
-- Structure de la table `objectif`
--

DROP TABLE IF EXISTS `objectif`;
CREATE TABLE IF NOT EXISTS `objectif` (
  `objectif_id` int(11) NOT NULL AUTO_INCREMENT,
  `objectif_ligne1` text,
  `objectif_line1` text,
  `objectif_ligne2` text,
  `objectif_line2` text,
  `objectif_ligne3` text,
  `objectif_line3` text,
  `objectif_ligne4` text,
  `objectif_line4` text,
  `objectif_serviceid` int(11) NOT NULL,
  `objectif_date` datetime DEFAULT NULL,
  `objectif_active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`objectif_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `objectif`
--

INSERT INTO `objectif` (`objectif_id`, `objectif_ligne1`, `objectif_line1`, `objectif_ligne2`, `objectif_line2`, `objectif_ligne3`, `objectif_line3`, `objectif_ligne4`, `objectif_line4`, `objectif_serviceid`, `objectif_date`, `objectif_active`) VALUES
(1, 'L’expertise micrographique présente l''état des lieux des produits nouveaux, des lignes de production et des nouveaux process en termes de qualité :', 'Micrographic expertise presents the state of the art of new products, production lines and new processes in terms of quality:', 'Acceptation de la qualité: IPC 600 et IPC 610', 'Acceptance of quality: IPC 600 and IPC 610', 'Qualité d’interface, épaisseur de IMC, homogénéité de la soudure, analyse qualitative des compositions chimiques', 'Interface quality, thickness of IMC, homogeneity of the weld, qualitative analysis of chemical compositions', 'la présence d’anomalies (fissure, vieillissement, void)', 'the presence of anomalies (crack, aging, void)', 37, '2019-07-04 09:52:08', 1),
(2, 'L’analyse DPA permet de critère d’acceptation du lot pour l’assurance de dissipation thermique et fonctionnement.', 'The DPA analysis allows batch acceptance criteria for heat dissipation assurance and operation.', '', '', '', '', '', '', 38, '2019-05-29 17:07:44', 1),
(3, 'Press-fit', 'Press-fit', 'Interface joint soudure', 'Welding joint interface', '', '', '', '', 71, '2019-06-03 13:27:39', 1),
(7, 'ligne de texte', 'line1', 'ligne de texte', 'line2', 'ligne de texte', 'line3', 'ligne de texte', 'line4', 44, '2019-07-16 12:19:12', 1);

-- --------------------------------------------------------

--
-- Structure de la table `qualite`
--

DROP TABLE IF EXISTS `qualite`;
CREATE TABLE IF NOT EXISTS `qualite` (
  `qualite_id` int(11) NOT NULL AUTO_INCREMENT,
  `qualite_nom` text,
  `qualite_name` text,
  `qualite_date` datetime DEFAULT NULL,
  `qualite_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`qualite_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `qualite`
--

INSERT INTO `qualite` (`qualite_id`, `qualite_nom`, `qualite_name`, `qualite_date`, `qualite_active`) VALUES
(1, 'Le laboratoire CQC ( Choi Quality Control) utilise des normes internationales et françaises pour le contrôle qualité et les analyses défaillance.', 'The CQC (Choi Quality Control) laboratory uses international and French standards for quality control and failure analysis.', '2019-09-06 09:53:04', 1),
(2, 'Les cahiers des charges des client et leurs exigences sont aussi respectés scrupuleusement pour avoir un résultat cohérent selon la demande des clients.', 'The specifications of the customers and their requirements are also scrupulously respected to have a consistent result according to customer demand.', '2019-06-05 10:39:41', 1);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_nom` varchar(200) NOT NULL,
  `service_name` varchar(200) DEFAULT NULL,
  `service_prix` varchar(50) NOT NULL DEFAULT '0',
  `service_typeid` int(11) NOT NULL,
  `service_duree` time DEFAULT NULL,
  `service_date` datetime DEFAULT NULL,
  `service_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `service`
--

INSERT INTO `service` (`service_id`, `service_nom`, `service_name`, `service_prix`, `service_typeid`, `service_duree`, `service_date`, `service_active`) VALUES
(37, 'La validation des nouveaux produits électroniques.', 'Validation of new electronic products.', '00', 1, '00:00:00', '2019-07-03 14:32:41', 1),
(38, 'Contrôle d’entrée des composants par analyse DPA.', 'Component input control by DPA analysis.', '00', 1, '00:00:00', '2019-06-05 10:53:32', 1),
(39, 'Contrôle qualité des press-fit par lot.', 'Quality control of batch press-fit.', '00', 1, '00:00:00', '2019-06-05 10:56:12', 1),
(40, 'Analyse micrographique de BGA.', 'Micrographic analysis of BGA.', '00', 1, '00:00:00', '2019-09-06 09:53:20', 0),
(41, 'Analyse dimension de la soudure laser.', 'Dimension analysis of laser welding.', '00', 1, '00:00:00', '2019-06-05 10:56:29', 0),
(42, 'Interface joint soudure par laser.', 'Laser welding joint interface.', '00', 1, '00:00:00', '2019-06-05 10:56:37', 0),
(43, 'Microstructure martensitique.', 'Martensitic microstructure.', '00', 1, '00:00:00', '2019-06-05 10:57:05', 0),
(44, 'Analyse du taux de phosphore de la couche nickel-or.', 'Analysis of the phosphorus content of the nickel-gold layer.', '00', 1, '00:00:00', '2019-06-05 10:57:15', 1),
(45, 'Retouche des coupons pour coupe micrographique.', 'Retouching coupons for micrographic cutting.', '00', 1, '00:00:00', '2019-06-05 10:57:23', 0),
(46, 'La carte à puce par désenrobage.', 'The smart card by stripping.', '00', 2, '00:00:00', '2019-07-04 08:18:12', 1),
(47, 'le résistance passives, condensateur, resistance.', 'passive resistance, capacitor, resistance.', '00', 2, '00:00:00', '2019-06-05 10:57:32', 1),
(48, 'BGA', 'BGA', '00', 2, '00:00:00', '2019-06-05 10:57:44', 1),
(49, 'Tache blue en peinture.', 'Blue stain in paint.', '00', 2, '00:00:00', '2019-06-05 10:57:50', 1),
(50, 'Tache blanc en joint caoutchouc.', 'White task in rubber seal.', '00', 2, '00:00:00', '2019-06-05 10:57:57', 1),
(51, 'Délaminage de circuit imprimée nue.', 'Delamination of bare printed circuit board.', '00', 2, '00:00:00', '2019-06-05 10:58:03', 1),
(52, 'Phénomène black pad sur nickel-or.', 'Black pad phenomenon on nickel-gold.', '00', 2, '00:00:00', '2019-06-05 10:58:10', 1),
(53, 'Smearing de via.', 'Smearing from via.', '00', 2, '00:00:00', '2019-06-05 10:58:19', 1),
(54, 'Interface joint caoutchouc.', 'Rubber seal interface.', '00', 2, '00:00:00', '2019-06-05 10:58:27', 1),
(55, 'Défaillance joint soudure.', 'Failure seal welding.', '00', 2, '00:00:00', '2019-07-04 03:05:26', 1),
(71, 'Formation', 'Formation', '00', 3, '00:00:00', '2019-06-05 10:58:46', 1),
(83, 'Analyse du microscope électronique à balayage (MEB)', '', '', 1, '00:00:00', '2019-07-10 13:31:43', 1);

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

DROP TABLE IF EXISTS `societe`;
CREATE TABLE IF NOT EXISTS `societe` (
  `societe_id` int(11) NOT NULL AUTO_INCREMENT,
  `societe_nom` text NOT NULL,
  `societe_adresse` varchar(100) DEFAULT NULL,
  `societe_email` varchar(200) DEFAULT NULL,
  `societe_postal` varchar(50) DEFAULT NULL,
  `societe_ville` varchar(50) DEFAULT NULL,
  `societe_descriptionfr` text,
  `societe_descriptionan` text,
  `societe_propriofr` text,
  `societe_proprioan` text,
  `societe_tel` varchar(50) DEFAULT NULL,
  `societe_typeid` int(11) DEFAULT NULL,
  `societe_photo` text,
  `societe_datecreation` datetime DEFAULT NULL,
  `societe_active` tinyint(1) NOT NULL DEFAULT '0',
  `societe_date` datetime DEFAULT NULL,
  PRIMARY KEY (`societe_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `societe`
--

INSERT INTO `societe` (`societe_id`, `societe_nom`, `societe_adresse`, `societe_email`, `societe_postal`, `societe_ville`, `societe_descriptionfr`, `societe_descriptionan`, `societe_propriofr`, `societe_proprioan`, `societe_tel`, `societe_typeid`, `societe_photo`, `societe_datecreation`, `societe_active`, `societe_date`) VALUES
(1, 'CHOI QUALITY CONTROL (CQC)', 'C/O Ecam Rennes Contour Antoine de Saint Exupéry Campus de KER LANN', 'Seungkyu.CHOI@ecam-rennes.fr', '35170', 'BRUZ', 'Le laboratoire Choi Quality Control(CQC) a été crée en mai 2006 grâce à une convention technique avec l’école d’ingénieur d’ECAM, en visant le service des entreprises et la participation aux activités académiques.CQC est maintenant dédié aux entreprises qui ont besoin de témoins scientifiques pour assurer la qualité des produits internes et externes et aussi assurer la qualité des lignes de process soit par des anlyses micrographiques soit par d’autres analyses.', 'The laboratory Choi Quality Control(CQC) was created in May 2006 through a technical agreement with the ECAM engineering school, aiming at serving businesses and participating in academic activities.CQC is now dedicated to companies that need scientific witnesses to ensure the quality of internal and external products and also to ensure the quality of process lines either by microscopic analyzes or by other analyzes.', 'Seungkyu CHOI qui est ingénieur matériaux a acquis son expérience industrielle dans des entreprises en tant qu’ingénieur développement et manager de projets. Il est titulaire d’un doctorat dans le domaine des interfaces entre métaux et céramiques pour des joints. Depuis 2006, il s’est consacré aux expertises de coupes micrographiques  sur des produits industriels, dans les domaines électronique, mécanique et organique.', 'Seungkyu CHOI who is a materials engineer has acquired his industrial experience in companies as a development engineer and project manager. He holds a Ph.D. in the field of interfaces between metals and ceramics for joints. Since 2006, he has devoted himself to the expertise of micrographic sections on industrial products, in the electronic, mechanical and organic fields.', '02 99 05 84 55', 1, '01072019110902-choi-quality-control-(cqc).jpg', '2006-05-01 00:00:00', 1, '2019-09-05 09:46:25');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_nom` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`type_id`, `type_nom`) VALUES
(1, 'Expertise d’analyses'),
(2, 'Analyses défaillances'),
(3, 'Autre analyse');

-- --------------------------------------------------------

--
-- Structure de la table `type_societe`
--

DROP TABLE IF EXISTS `type_societe`;
CREATE TABLE IF NOT EXISTS `type_societe` (
  `type_societe_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_societe_nom` varchar(100) DEFAULT NULL,
  `type_societe_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`type_societe_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type_societe`
--

INSERT INTO `type_societe` (`type_societe_id`, `type_societe_nom`, `type_societe_active`) VALUES
(1, 'cqc', 1),
(2, 'partenaire', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nom` varchar(50) DEFAULT NULL,
  `user_prenom` varchar(50) DEFAULT NULL,
  `username` text NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_date` datetime NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`user_id`, `user_nom`, `user_prenom`, `username`, `password`, `user_date`, `admin`) VALUES
(1, 'CHOI', 'Seungkyu', 'choiqualitycontrol', 'choiqualitycontrol', '2019-06-05 12:09:01', 1),
(2, 'Essoh', 'Jean-Théodore', 'cqc', 'cqc', '2019-06-05 12:09:08', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
