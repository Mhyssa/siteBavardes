-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 28 mai 2020 à 13:34
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bavardes_site`
--

-- --------------------------------------------------------

--
-- Structure de la table `collab`
--

DROP TABLE IF EXISTS `collab`;
CREATE TABLE IF NOT EXISTS `collab` (
  `collab_id` int(11) NOT NULL AUTO_INCREMENT,
  `collab_name` varchar(200) NOT NULL,
  `collab_link` varchar(200) DEFAULT NULL,
  `file_name` varchar(200) DEFAULT NULL,
  `collab_cat` varchar(50) NOT NULL,
  PRIMARY KEY (`collab_id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `collab`
--

INSERT INTO `collab` (`collab_id`, `collab_name`, `collab_link`, `file_name`, `collab_cat`) VALUES
(1, 'Le Network', 'https://www.facebook.com/nw.amiens', 'logo_225_network.jpg', 'Lieux'),
(2, 'Le Barrio', 'https://www.barrio-amiens.fr/', 'logo_225_barrio.jpg', 'Lieux'),
(3, 'La Gargouille', 'https://www.facebook.com/LaGargouilleAmiens/', 'logo_225_gargouille.jpg', 'Lieux'),
(4, 'Le Charleston', 'https://www.facebook.com/lecharlestoncafe/', 'logo_225_charleston.jpg', 'Lieux'),
(5, 'Le Café', 'https://www.facebook.com/lecafeamiens/', 'logo_225_cafe.jpg', 'Lieux'),
(6, 'Le Capuccino', 'https://www.facebook.com/LeCapuccino', 'logo_225_capuccino.jpg', 'Lieux'),
(7, 'La Boîte Sans Projet', 'http://www.boite-sans-projet.org/', 'logo_225_bsp.jpg', 'Lieux'),
(8, 'Le Centre Léo LaGrange', 'http://ccll-amiens.fr/', 'logo_225_centreLeoLagrange.jpg', 'Lieux'),
(9, 'Le Mic Mac', 'https://www.facebook.com/MicMacAndCot/', 'logo_225_micMac.jpg', 'Lieux'),
(10, 'Les Enfants Terribles', 'https://www.facebook.com/Les-Enfants-Terribles-176177469406995/', 'logo_225_enfants.jpg', 'Lieux'),
(11, 'L\'Officine déphasée', 'https://www.facebook.com/officinedephasee/', 'logo_225_officine.jpg', 'Lieux'),
(12, 'Le Red & White', 'https://www.facebook.com/pages/category/Pub/Red-and-White-Bar-Amiens-203412793125652/', 'logo_225_red.jpg', 'Lieux'),
(13, 'La Péniche Lapin Vert', 'https://www.facebook.com/lelapinvert/?__tn__=K-R&eid=ARAZCFENvegkjgmwZnyzeInEPcmUrcLfhbMr6xsScXRBZ2h6ZFU-p8RySF3Qj3Y2dirr2PV-VfRMVPvG&fref=mentions&__xts__[0]=68.ARCTl2i66tL39HSXNnsHzL_4mt8vjEeiwmNCt0', 'logo_225_lapin.jpg', 'Lieux'),
(14, 'L\'Île aux Fruits', 'https://www.facebook.com/ileauxfruits80/', 'logo_225_ile.jpg', 'Lieux'),
(15, 'Le Füt et à Mesure', 'http://aufutetamesure.fr/bar/aufut-amiens/', 'logo_225_fut.jpg', 'Lieux'),
(16, 'La Taverne Elektrik', 'https://www.facebook.com/pages/category/Pub/La-Taverne-Elektrik-646909932108464/', 'logo_225_taverne.jpg', 'Lieux'),
(17, 'Sports Bar', 'https://www.facebook.com/sportsbaramiens/', 'logo_225_sports.jpg', 'Lieux'),
(18, 'CSC d\'Étouvie', 'https://cscetouvie.fr/', 'logo_225_csc.jpg', 'Lieux'),
(19, 'La Lune des Pirates', 'http://www.lalune.net/', 'logo_225_lune.jpg', 'Lieux'),
(20, 'Lycée Michelis', 'http://michelis.lyc.ac-amiens.fr/', 'logo_225_michelis.jpg', 'Collaborations'),
(21, 'Lycée de la Hotoie', 'http://lahotoie.lyc.ac-amiens.fr/', 'logo_225_laHotoie.jpg', 'Collaborations'),
(22, 'AESP Amiens', 'https://www.facebook.com/aesp.amiens', 'logo_225_aesp.jpg', 'Collaborations'),
(23, 'Le Groupe d\'Appui et de Solidarité', 'https://www.gas-asso.org/', 'logo_225_gas.jpg', 'Collaborations'),
(24, 'Radio Campus', 'http://www.radiocampusamiens.fr/', 'logo_225_radio.jpg', 'Collaborations'),
(25, 'Carmen', 'https://canalnord.org/', 'logo_225_carmen.jpg', 'Collaborations'),
(26, 'Translucide', 'https://www.facebook.com/Translucide80/', 'logo_225_translucide.jpg', 'Collaborations'),
(27, 'Flash Our True Colors', 'https://flash-our-true-colors.fr/', 'logo_225_flash.jpg', 'Collaborations'),
(28, 'Jeanne Magazine', 'https://www.jeanne-magazine.com/', 'logo_225_jeanne.jpg', 'Collaborations'),
(29, 'OSAM', 'http://www.osam.fr/', 'logo_225_osam.jpg', 'Collaborations'),
(30, 'UPJV Amiens', 'https://www.u-picardie.fr/', 'logo_225_upjv.jpg', 'Collaborations'),
(31, 'Cité Carter', 'http://www.citecarter.com/', 'logo_225_citeCarter.jpg', 'Collaborations'),
(32, 'AIDES', 'https://www.aides.org/', 'logo_225_aides.jpg', 'Collaborations'),
(33, 'La Courte Échelle', 'https://www.facebook.com/pages/category/Artist/Le-Collectif-la-Courte-echelle-329157984302928/', 'logo_225_courteEchelle.jpg', 'Collaborations'),
(34, 'Collectif IDAHOT', 'https://www.facebook.com/festivalidahot', 'idahot.jpg', 'Collaborations'),
(35, 'L\'Alimentation Générale', '', 'logo_225_alg.jpg', 'Lieux'),
(36, 'DRJSCS', 'http://hauts-de-france.drjscs.gouv.fr/', 'logo_225_drjscs.jpg', 'Financiers'),
(37, 'DDCS', 'http://www.somme.gouv.fr/Services-de-l-Etat/Sante-et-cohesion-sociale/Direction-departementale-de-la-cohesion-sociale-DDCS', 'logo_225_ddcs.jpg', 'Financiers'),
(38, 'Amiens Métropole', 'https://www.amiens.fr/', 'logo_225_amiensMetro.jpg', 'Financiers'),
(39, 'Amiens Métropole Natation', 'https://amiensnatation.com/', 'logo_225_amiensMetroNatation.jpg', 'Financiers'),
(40, 'Fonds de Dotation Lesbiennes d\'Intérêt Général', 'https://www.fondslesbien.org/', 'logo_225_lig.jpg', 'Financiers'),
(41, 'La Cave du Houblon', 'https://www.lacaveduhoublon.fr/', 'logo_225_cave.jpg', 'Collaborations'),
(42, 'AfroBenin', 'https://afrobenin.org/', 'logo_225_afroBenin.jpg', 'Collaborations'),
(43, 'Pas à Passo Théâtre de l\'Opprimé', 'https://www.facebook.com/PasaPassoTO/', 'logo_225_pap.jpg', 'Collaborations'),
(48, 'Divergenre', 'https://www.facebook.com/Divergenre-105224454220663/', 'divergenre.jpg', 'Collaborations'),
(49, 'SOS Homophobie', 'https://fr.wikipedia.org/wiki/SOS_homophobie', 'sos_homophobie.jpg', 'Collaborations');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(100) NOT NULL,
  `event_date` date DEFAULT NULL,
  `event_heure` varchar(5) DEFAULT NULL,
  `event_lieu` varchar(200) DEFAULT NULL,
  `event_adresse` varchar(200) DEFAULT NULL,
  `event_link` varchar(200) DEFAULT NULL,
  `event_nombre_pers` int(4) DEFAULT NULL,
  `event_inscription` varchar(50) DEFAULT NULL,
  `event_non_mix` varchar(50) DEFAULT NULL,
  `event_description` varchar(1000) DEFAULT NULL,
  `event_cat` varchar(50) NOT NULL,
  `file_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_date`, `event_heure`, `event_lieu`, `event_adresse`, `event_link`, `event_nombre_pers`, `event_inscription`, `event_non_mix`, `event_description`, `event_cat`, `file_name`) VALUES
(1, 'Les Bavardes débarquent', '2017-10-20', '19:00', 'le cafe', '', 'https://www.facebook.com/events/687997151397099/', 0, NULL, NULL, '', 'Divers', 'les_bavardes_debarquent.jpg'),
(2, 'Ciné débat(vardes) #1 : La violence dans les couples lesbiens', '2017-11-13', '18:00', 'La Boîte Sans Projet', 'La Boîte Sans Projet (Rue Ledieu, Entrée D)', 'https://www.facebook.com/events/715271951996091/', 0, NULL, NULL, '', 'Divers', 'cine-debat_1.jpg'),
(3, 'Les Bavardes débarquent sur l\'Ile aux fruits !', '2017-11-23', '17:00', 'L\'île Aux Fruits', '325 Rue de Verdun, 80000 Amiens', 'https://www.facebook.com/events/2040534989557433/', 0, NULL, NULL, '', 'Divers', 'les_bavardes_debarquent_ile_fruits.jpg'),
(4, 'Soirée des Bavardes pour la PMA pour toutes', '2017-12-09', '20:00', 'Barrio, Resto Bar Tapas', '', 'https://www.facebook.com/events/517075128685532/', 0, NULL, NULL, '', 'Divers', 'soiree_pma.jpg'),
(5, 'Concours photo des Bavardes', '2017-12-27', '', 'Partout !', '', 'https://www.facebook.com/events/797734620428712/', 0, NULL, NULL, '', 'Divers', 'concours_photos.jpg'),
(6, 'La terrible rentrée des Bavardes ! #1', '2018-01-20', '19:30', 'Les Enfants Terribles', '', 'https://www.facebook.com/events/135994347097909/', 0, NULL, NULL, '', 'Divers', 'la_terrible_rentree.jpg'),
(7, 'Scène ouverte 100% MEUF !', '2018-02-15', '20:00', 'Le Capuccino', '', 'https://www.facebook.com/events/214131912481494/', 0, NULL, NULL, '', 'Scenes ouvertes', 'scene_ouverte1.jpg'),
(8, 'Bla-Bla Chatte #1', '2018-03-05', '19:00', 'Barrio, Resto Bar Tapas', '', 'https://www.facebook.com/events/200955003986427/', 15, NULL, NULL, '', 'Bla-bla', 'bla_bla_1.jpg'),
(9, 'Le 8 mars à l\'île aux fruits', '2018-03-08', '17:00', 'L\'île Aux Fruits', '', 'https://www.facebook.com/events/523808851346247/', 15, NULL, NULL, '', 'Divers', 'ile_fruits.jpg'),
(10, 'Bla-Bla Chatte #2', '2018-04-05', '19:00', 'Barrio, Resto Bar Tapas', '', 'https://www.facebook.com/events/1381930735252344/', 15, NULL, NULL, '', 'Bla-bla', 'bla_bla_2.jpg'),
(11, 'Table Ronde Egalité femmes/hommes, bioéthique et libertés', '2018-04-18', '19:00', 'Centre culturel Leo Lagrange', '12 Place Vogel, 80000 Amiens, France', 'https://www.facebook.com/events/2069721843241510/', 0, NULL, NULL, '', 'Divers', 'table_ronde.jpg'),
(12, 'On prend les mêmes et on recommence !', '2018-04-20', '20:30', 'Les Enfants Terribles', '', 'https://www.facebook.com/events/1725279247533678/', 0, NULL, NULL, '', 'Divers', 'on_prend_les_memes.jpg'),
(13, 'Bla-Bla Chatte #3', '2018-05-05', '18:30', 'Barrio, Resto Bar Tapas', '', 'https://www.facebook.com/events/167437783974276/', 15, NULL, NULL, '', 'Bla-bla', 'bla_bla_3.jpg'),
(14, 'Bla-Bla Chatte #4', '2018-06-05', '18:30', 'Barrio, Resto Bar Tapas', '', 'https://www.facebook.com/events/2040946289479155/', 15, NULL, NULL, '', 'Bla-bla', 'bla_bla_4.jpg'),
(15, 'Scène ouverte 100% MEUF !', '2018-06-19', '19:00', 'Le Capuccino', 'Le Capuccino', 'https://www.facebook.com/events/187023205455242/', 0, NULL, NULL, '', 'Scenes ouvertes', 'scene_ouverte.jpg'),
(16, 'Embarquement Immédiat !', '2018-07-20', '19:30', 'La Péniche Lapin Vert', 'Joinville-le-Pont', 'https://www.facebook.com/events/1874867592572892/', 0, NULL, NULL, '', 'Divers', 'embarquement_immediat.jpg'),
(17, 'Bla-Bla Chatte #5', '2018-09-05', '18:30', 'Barrio, Resto Bar Tapas', '', 'https://www.facebook.com/events/667186696990782/', 15, NULL, NULL, '', 'Bla-bla', 'bla_bla_5.jpg'),
(18, 'Bla-Bla Chatte #6', '2018-10-03', '18:30', 'Barrio, Resto Bar Tapas', '', 'https://www.facebook.com/events/341554519755076/', 15, NULL, NULL, '', 'Bla-bla', 'bla_bla_6.jpg'),
(19, 'Bavardes Birthday !', '2018-10-20', '19:30', 'Le Café', '', 'https://www.facebook.com/events/490365368132118/', 0, NULL, NULL, '', 'Divers', 'bavardes_anniv_1an.jpg'),
(20, 'Bla-Bla Chatte #7', '2018-11-05', '18:30', 'Barrio, Resto Bar Tapas', '', 'https://www.facebook.com/events/414145855783926/', 15, NULL, NULL, '', 'Bla-bla', 'bla_bla_7.jpg'),
(21, 'Mobilisation contre les LGBTPhobies à Amiens', '2018-11-20', '17:30', 'Place Gambetta', '', 'https://www.facebook.com/events/2180545762267150/', 0, NULL, NULL, '', 'Divers', 'mobilisation_vs_lgbtqi+phobe.jpg'),
(22, 'Scène ouverte 100% MEUF', '2018-11-21', '19:00', 'Le Charleston', '', 'https://www.facebook.com/events/1089534221214401/', 0, NULL, NULL, '', 'Scenes ouvertes', 'scene_ouverte_3.jpg'),
(23, 'Concours Photos #2 du 3 déc. 2018 - 17 déc. 2018', '2018-12-03', '', '', '', 'https://www.facebook.com/events/342625193181758/', 0, NULL, NULL, '', 'Divers', 'concours_photos_2.jpg'),
(24, 'Bla-Bla Chatte #8', '2018-12-05', '18:30', 'Le Barrio', '', 'https://www.facebook.com/events/2347157455325413/', 15, NULL, NULL, '', 'Bla-bla', 'bla_bla_8.jpg'),
(25, 'Et si on parlait d\'écoféminisme ?', '2018-12-11', '18:30', 'La Boîte sans projet', 'Rue Ledieu 80000 Amiens France', 'https://www.facebook.com/events/2405879366120694/', 0, NULL, NULL, '', 'Divers', 'ecofeminisme.jpg'),
(26, 'Bla-Bla Chatte #9', '2019-01-05', '18:30', 'Barrio, Resto Bar Tapas', '', 'https://www.facebook.com/events/1138372982995468/', 15, NULL, NULL, '', 'Bla-bla', 'bla_bla_9.jpg'),
(27, 'Ciné Débat Femmes de Sport', '2019-01-24', '18:30', 'Maison des Sports', 'Maison des Sports - 2 rue Lescouvé Amiens', 'https://www.facebook.com/events/1426509464152489/', 0, NULL, NULL, '', 'Divers', 'cine_debat-FDS.jpg'),
(28, 'Les Bavardes à Lille !', '2019-02-03', '14:00', 'Salon LGBTI+ de Lille', '7 place Sébastopol', 'https://www.facebook.com/events/2250355981850550/', 0, NULL, NULL, '', 'Divers', 'les_bavardes_à_lille.jpg'),
(29, 'Assemblée Générale #1', '2019-02-04', '18:30', 'Restaurant Leu Duo', '60 rue Vanmarcke Amiens', 'https://www.facebook.com/events/2302732523336041', 0, NULL, NULL, '', 'Divers', 'AG_1.jpg'),
(30, 'Le Bla-Bla des Bavardes #10', '2019-02-05', '18:30', 'Le Barrio', '', 'https://www.facebook.com/events/337186023787627', 15, NULL, NULL, '', 'Bla-bla', 'bla_bla_10.jpg'),
(31, 'Scène ouverte 100% MEUF', '2019-02-15', '20:00', 'Le Charleston', '', 'https://www.facebook.com/events/374298849792128/', 0, NULL, NULL, '', 'Scenes ouvertes', 'scene_ouverte_4.jpg'),
(32, 'Le Bla-Bla des Bavardes #11', '2019-03-05', '18:30', 'Barrio, Resto Bar Tapas', '', 'https://www.facebook.com/events/557458111405078/', 15, NULL, NULL, '', 'Bla-bla', 'bla_bla_11.jpg'),
(33, 'Fest GenRage 8-9-10 mars - 8 mars 2019 - 10 mars 2019', '2019-03-08', '', 'La Boîte sans projet', '', 'https://www.facebook.com/events/2221463397907792/', 0, NULL, NULL, '', 'Festivals', 'fest_gr.jpg'),
(34, 'Le Bla-Bla des Bavardes #12', '2019-04-05', '18:30', 'AAC Tennis', '', 'https://www.facebook.com/events/804706006554106/', 15, NULL, NULL, '', 'Bla-bla', 'bla_bla_12.jpg'),
(35, 'Expo-Concert : Oh les filles ! Oh les filles !', '2019-04-07', '17:00', 'La Lune des Pirates', '', 'https://www.facebook.com/events/822173224810869/', 450, NULL, NULL, '', 'Divers', 'expo_concert.jpg'),
(36, 'Université Pop. Féministe #2 Afro féminisme/intersectionnalité', '2019-04-21', '15:30', 'La Boîte sans projet', '2 rue ledieu entree D amiens', 'https://www.facebook.com/events/432851730872991/', 20, NULL, NULL, '', 'Divers', 'upf_2.jpg'),
(37, 'Le Bla-Bla des Bavardes #13', '2019-05-05', '15:00', 'Restaurant Leu Duo', '60 rue Vanmarcke Amiens', 'https://www.facebook.com/events/2611211735558867/', 15, NULL, NULL, '', 'Bla-bla', 'bla_bla_13.jpg'),
(38, 'Complet - Loto Sexo Bavardes', '2019-05-05', '19:00', 'Restaurant Leu Duo', '60 rue Vanmarcke Amiens', 'https://www.facebook.com/events/339090503623436/', 0, NULL, NULL, '', 'Divers', 'loto_sexo_bavardes.jpg'),
(39, 'Université Pop. Féministe #3 - Hétérosexisme et Homonationalisme', '2019-05-12', '15:30', 'La Boîte sans projet', '2 rue ledieu entree D amiens', 'https://www.facebook.com/events/349682855659990/', 20, NULL, NULL, '', 'Divers', 'upf_3.jpg'),
(40, 'Festival: lutte contre l\'homophobie et la transphobie 13 mai 2019 - 19 mai 2019', '2019-05-13', '', '', '', 'https://www.facebook.com/events/467965543943029/', 0, NULL, NULL, '', 'Festivals', 'fest_lutte.jpg'),
(41, 'Festival Idahot: Soirée inauguration', '2019-05-13', '19:00', 'Restaurant L\'adresse', '', 'https://www.facebook.com/events/2230505233864735/', 0, NULL, NULL, '', 'Festivals', 'fest_idahot-inauguration.jpg'),
(42, 'Festival:Conférence Participative - Le genre en question', '2019-05-14', '18:00', 'Le Mic Mac', '2 Rue Lescouvé, Amiens', 'https://www.facebook.com/events/1078355125695786/', 0, NULL, NULL, '', 'Festivals', 'fest-le_genre_en_question.jpg'),
(43, 'Festival Idahot: Bal des Extravagant.e.s', '2019-05-14', '20:00', 'Le Mic Mac', '2 Rue Lescouvé Amiens', 'https://www.facebook.com/events/382774805647083/', 0, NULL, NULL, '', 'Festivals', 'fest_idahot-bal.jpg'),
(44, 'Rassemblement contre les LGBTQI+Phobies à Amiens', '2019-05-17', '18:00', 'Maison de la Culture', '2 Place Léon Gontier, 80000 Amiens, France', 'https://www.facebook.com/events/318332615526761/', 0, NULL, NULL, '', 'Divers', 'rassemblement_vs_lgbtqi+phobe.jpg'),
(45, 'Atelier Drag Queen, Drag King', '2019-05-18', '20:00', 'Local AIDES', '7 Rue des Hautes Cornes, 80000 Amiens, France', 'https://www.facebook.com/events/823890514648256/', 0, NULL, NULL, '', 'Divers', 'atl_drag.jpg'),
(46, 'Conférence Gesticulée - Femmes de Sport', '2019-05-24', '18:30', 'AAC Tennis', '10 Allée des Tennis, 80000 Amiens, France', 'https://www.facebook.com/events/867541140265492/', 0, NULL, NULL, '', 'Divers', 'conf_gest-FDS.jpg'),
(47, 'Femmes de Sport !', '2019-05-25', '10:00', 'Nautilus', 'Rue Léo Lagrange, 80080 Amiens, France', 'https://www.facebook.com/events/624559811303285/', 0, NULL, NULL, '', 'Divers', 'femme_de_sport.jpg'),
(48, 'Réunion publique Marche des Fiertés Amiens', '2019-06-11', '18:30', 'La Boîte sans projet', '2 rue Ledieu (entrée D) 80000 Amiens', 'https://www.facebook.com/events/484643238945931/', 0, NULL, NULL, '', 'Divers', 'réunion_pub_prideAmiens.jpg'),
(49, 'Scène ouverte 100% MEUF', '2019-06-19', '20:00', 'La Gargouille', '', 'https://www.facebook.com/events/636173716848796/', 0, NULL, NULL, '', 'Scenes ouvertes', 'scene_ouverte_5.jpg'),
(50, '1ère Marche des fiertés 2019 - Amiens', '2019-06-22', '14:00', 'Gare d\'Amiens', '', 'https://www.facebook.com/events/396220987643121/', 2500, NULL, NULL, '', 'Festivals', 'prideAmiens.jpg'),
(51, 'Pique Nique pour tou.tes !', '2019-07-02', '17:00', 'Parc Saint-Pierre', '', 'https://www.facebook.com/events/343019443055837/', 0, NULL, NULL, '', 'Divers', 'pique-nique.jpg'),
(52, 'Le Bla-Bla des Bavardes #14', '2019-09-05', '18:30', 'Le Barrio', '', 'https://www.facebook.com/events/726767477745564/', 15, NULL, NULL, '', 'Bla-bla', 'bla_bla_14.jpg'),
(53, 'Université Pop. Féministe #4 - Queer et Transféminisme', '2019-09-22', '15:30', 'La Boîte sans projet', '2 rue ledieu entrée D', 'https://www.facebook.com/events/533233924115982/', 20, NULL, NULL, '', 'Divers', 'upf_4.jpg'),
(54, 'Les Bavardes fêtent leurs 2 ans !', '2019-10-25', '18:00', '', 'Un peu partout - Suivez l\'programme !', 'https://www.facebook.com/events/465387507521342/', 0, NULL, NULL, '', 'Divers', 'bavardes_anniv_2ans.jpg'),
(55, 'Le Bla-Bla d\'anniversaire ! #15', '2019-10-25', '18:30', 'Au Fût et à mesure', '', 'https://www.facebook.com/events/2494029374022486/', 15, NULL, NULL, '', 'Bla-bla', 'bla_bla_anniv.jpg'),
(56, 'Atelier danse contact', '2019-10-26', '15:30', 'L\'école Entrez dans la Danse ', 'rue Amiral Lejeune', 'https://www.facebook.com/events/557536868350118/', 0, NULL, NULL, '', 'Divers', 'atl_danse_contact.jpg'),
(57, 'Scène ouverte Anniversaire 100% MEUF', '2019-10-26', '20:00', 'La Gargouille', '', 'https://www.facebook.com/events/496311231222081/', 0, NULL, NULL, '', 'Scenes ouvertes', 'scene_ouverte_anniv.jpg'),
(58, 'Université Pop. Féministe #5 Les Masculinités', '2019-10-27', '15:00', 'La Boîte sans projet', '2 rue ledieu entrée D', 'https://www.facebook.com/events/526815631485150/', 20, NULL, NULL, '', 'Divers', 'upf_5.jpg'),
(59, 'Les Bavardes font leur loto d\'anniversaire', '2019-10-27', '19:00', 'La Taverne Elektrik', '', 'https://www.facebook.com/events/444459563159119/', 50, NULL, NULL, '', 'Divers', 'loto_anniv_bavardes.jpg'),
(60, 'Festival Witches Week', '2019-11-05', '21:00', 'Cité Carter', '', 'https://www.facebook.com/events/2441237112758468/', 0, NULL, NULL, '', 'Festivals', 'fest_WW.jpg'),
(61, 'Le Bla-Bla des Sorcières #16', '2019-11-06', '19:30', 'Cité Carter', '', 'https://www.facebook.com/events/1838622449614692/', 15, NULL, NULL, '', 'Bla-bla', 'bla_bla_16.jpg'),
(62, 'Fleche Love à Cité carter pour le festival Haute Frequence', '2019-11-08', '20:30', 'Cité Carter', '', 'https://www.facebook.com/events/2388166354763477/', 0, NULL, NULL, '', 'Festivals', 'fest_haute_freq_fl_love.jpg'),
(63, 'Rassemblons nous contre l\'islamophobie et pour l\'égalité !', '2019-11-09', '15:00', 'Maison de la Culture Amiens', '', 'https://www.facebook.com/events/797285667366325/', 0, NULL, NULL, '', 'Divers', 'rassemblons_nous_vs_islamophobie.jpg'),
(64, 'Witches Week - Atelier Méli Juestz', '2019-11-09', '18:00', 'Cité Carter', '', 'https://www.facebook.com/events/2529888527333045/', 0, NULL, NULL, '', 'Festivals', 'WW-atl_JM.jpg'),
(65, 'Université Pop. Féministe #6 ', '2019-11-24', '15:00', 'La Boîte sans projet,2 rue ledieu entrée D', 'Amiens', 'https://www.facebook.com/events/432637857446314/', 20, NULL, NULL, '', 'Divers', 'upf_6.jpg'),
(66, 'Réunion publique pour festival lgbtqi+', '2019-11-27', '18:30', 'La Boîte sans projet,2 rue Ledieu (entrée D)', 'Amiens', 'https://www.facebook.com/events/2352206374877941/', 0, NULL, NULL, '', 'Divers', 'réunion_pub_fest_lgbtqi+.jpg'),
(67, 'Batailles Féministes #1', '2019-12-05', '18:30', 'Les Enfants Terribles', '', 'https://www.facebook.com/events/795703357532928/', 0, NULL, NULL, '', 'Divers', 'bataille_feministe.jpg'),
(68, 'Les Doigts d\'Or à Amiens avec la Boîte Sans Projet & Fakir', '2020-01-23', '20:00', 'Espace Dewailly', '', 'https://www.facebook.com/events/1291197391089935/', 0, NULL, NULL, '', 'Divers', 'cérémonie_doigts_dhonneur.PNG'),
(69, 'Femmes De Sport #2 Projection Débat', '2020-01-24', '20:00', 'Auberge de jeunesse d\'Amiens - FUAJ', '', 'https://www.facebook.com/events/3287880404615810/', 0, NULL, NULL, '', 'Divers', 'femme_de_sport_2.jpg'),
(70, 'Assemblée Générale // Réunion Publique', '2020-01-25', '12:00', 'La Boîte sans projet', '', 'https://www.facebook.com/events/588438731940914/', 0, NULL, NULL, '', 'Divers', 'AG_réunion_publique.jpg'),
(71, 'Scène ouverte 100% meuf #7', '2020-01-25', '19:00', 'Network', '', 'https://www.facebook.com/events/592625311502321/', 0, NULL, NULL, '', 'Scenes ouvertes', 'scene_ouverte_7.jpg'),
(72, 'Loto Féministe#3 - Figures inspirantes', '2020-01-26', '19:00', 'La Taverne Elektrik', '', 'https://www.facebook.com/events/515815082364951/', 0, NULL, NULL, '', 'Divers', 'loto_feministe_3.jpg'),
(73, 'Le Bla-Bla des Bavardes #17 Sexisme et Handicap', '2020-02-05', '18:30', 'La Boîte sans projet', '', 'https://www.facebook.com/events/569762520269893/', 15, NULL, NULL, '', 'Bla-bla', 'bla_bla_17.jpg'),
(74, 'Batailles Féministes #2', '2020-02-21', '18:30', 'Les Enfants Terribles', '', 'https://www.facebook.com/events/226744791683533/', 0, NULL, NULL, '', 'Divers', 'bataille_feministe_2.jpg'),
(75, 'Festival J\'en(c)rêve - Aprem Lesbienne', '2020-02-22', '16:30', 'La Boîte sans projet', '', 'https://www.facebook.com/events/229710221387818/', 0, NULL, NULL, '', 'Festivals', 'fest_jc-aprem_lesb.jpg'),
(76, 'J\'en(c)rêve Débat La culture du viol', '2020-03-04', '18:00', 'UPJV - UFR droit science politique', '', 'https://www.facebook.com/events/855905454863256/', 0, NULL, NULL, '', 'Festivals', 'fest_jc-debat_cult_viol.jpg'),
(77, 'Festival J\'en(c)rêve - Blabla mensuel #18 le cyberharcelement', '2020-03-05', '18:30', 'Au Fût et à mesure', '', 'https://www.facebook.com/events/500648213979713/', 15, NULL, NULL, '', 'Festivals', 'fest_jc-bb_cyber.jpg'),
(78, 'Festival J\'en(c)rêve - Conférence Gesticulée Vous désirez', '2020-03-06', '20:00', 'La Boîte sans projet', '', 'https://www.facebook.com/events/795696430913093/', 0, NULL, NULL, '', 'Festivals', 'fest_jc-conf_gest_vdesirez.jpg'),
(79, 'Festival J\'en(c)rêve - atelier sexualité et consentement', '2020-03-07', '10:00', 'La Boîte sans projet', '', 'https://www.facebook.com/events/537291157140151/', 0, NULL, NULL, '', 'Festivals', 'fest_jc-at_sex_cons.jpg'),
(80, 'Festival J\'en(c)rêve - Atelier mécanique', '2020-03-07', '14:00', 'La courte echelle', '', 'https://www.facebook.com/events/183929039617688/', 0, NULL, NULL, '', 'Festivals', 'fest_jc-at_meca.jpg'),
(81, 'Festival J\'en(c)rêve du 22 févr. au 7 mars', NULL, '', '', '', 'https://www.facebook.com/events/189902742123084/', 0, NULL, NULL, '', 'Festivals', 'fest_jc.jpg'),
(82, 'Festival J\'en(c)rêve - Tahnee - One Woman Show', '2020-03-07', '20:00', 'La Boîte sans projet', '', 'https://www.facebook.com/events/2558105764465257/', 0, NULL, NULL, '', 'Festivals', 'fest_jc-one_woman_show.jpg'),
(83, 'On arrêtes toutes - Grève des femmes', '2020-03-08', '09:30', 'Amiens', '', 'https://www.facebook.com/events/1486539478187647/', 0, NULL, NULL, '', 'Divers', 'on_arrete_toutes-greve_femmes.jpg'),
(84, 'Flashday Caritatif Mina BanditaX', '2020-03-08', '10:00', 'Officine Déphasée', '3 Rue des Archers, 80000 Amiens', 'https://www.facebook.com/events/618225562302238/', 0, NULL, NULL, '', 'Festivals', 'fest_jc-flashday.jpg'),
(85, 'Festival J\'en(c)rêve - Dimanche en Famille', '2020-03-08', '14:00', 'CSC étouvie', '', 'https://www.facebook.com/events/192635432016184/', 0, NULL, NULL, '', 'Festivals', 'fest_jc-dimanche_famille.jpg'),
(86, 'Scène Ouverte 100% meuf Virtuelle', '2020-03-28', '20:00', 'Canapé', '', 'https://www.facebook.com/events/221756992241134/', 100, NULL, NULL, '', 'Scenes ouvertes', 'scene_ouverte_virtuelle1.jpg'),
(87, 'Scène Ouverte 100% meuf Virtuelle #2', '2020-04-11', '20:00', 'Canapé', '', 'https://www.facebook.com/events/521914232090071/', 0, NULL, NULL, '', 'Scenes ouvertes', 'scene_ouverte_virtuelle.jpg'),
(88, 'Les Bavardes - Scène Ouverte 100% meuf Virtuelle #3', '2020-05-09', '22:00', 'Canapé', '', 'facebook.com/events/2792960314156932/', 0, NULL, NULL, '', 'Scenes ouvertes', 'scene_ouverte_virtuelle_3.jpg'),
(89, 'Les Bavardes -LBTQ confinées : Live Ovaires Bookées', '2020-05-16', '21:30', 'Canapé', '', 'https://www.facebook.com/events/543567806334535/', 0, NULL, NULL, '', 'Divers', 'les_bavardes_on_air.jpg'),
(90, 'Mobilisation féministe', '2020-06-08', '18:30', 'Parc de la Hotoie', 'facebook.com/events/355846492061826/', '', 0, NULL, NULL, '', 'Divers', 'mobilisation_fem_nat.jpg');
-- --------------------------------------------------------

--
-- Structure de la table `people`
--

DROP TABLE IF EXISTS `people`;
CREATE TABLE IF NOT EXISTS `people` (
  `people_id` int(11) NOT NULL AUTO_INCREMENT,
  `people_name` varchar(100) NOT NULL,
  `people_link` varchar(200) NOT NULL,
  `people_status` varchar(100) NOT NULL,
  `people_title` varchar(100) DEFAULT NULL,
  `file_name` varchar(100) NOT NULL,
  PRIMARY KEY (`people_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `people`
--

INSERT INTO `people` (`people_id`, `people_name`, `people_link`, `people_status`, `people_title`, `file_name`) VALUES
(1, 'Roxaane', 'https://www.youtube.com/channel/UCytIqXqtZlAPhZ53_wMMsRQ', 'Artiste', 'Chanteuse', 'roxaane.jpg'),
(2, 'Manoah', 'https://twitter.com/officiel_manoah', 'Artiste', 'Chanteuse', 'manoah.jpg'),
(3, 'Kty Patinet', 'https://www.facebook.com/events/2221463397907792/', 'Artiste', 'Humoriste', 'kty.PNG'),
(4, 'Amé', 'https://www.facebook.com/Amé-One-Wo-man-Show-1814308848851811/', 'Artiste', 'Humoriste', 'ame.jpg'),
(5, 'Mekias', 'https://www.instagram.com/mekiasmusic/', 'Artiste', 'Chanteuse', 'mekias.jpg'),
(6, 'Van Campo', 'https://soundcloud.com/queen-of-my-living-room?fbclid=IwAR0e_g1tIwv2zMaLgkEGhdwYUI7mHR4ezSA1BzmL19Z3zKUJ5Z_9Hj1mwOM', 'Artiste', 'DJette', 'van_campo.jpg'),
(7, 'Louiz\'', 'https://www.youtube.com/user/louiiz07/', 'Artiste', 'Chanteuse', 'Louiz.jpg'),
(8, 'Pi Ja Ma', 'https://www.instagram.com/pijamaofficial/', 'Artiste', 'Chanteuse', 'pijama.PNG'),
(9, 'Bali Dou', 'https://www.instagram.com/bali.dou/', 'Artiste', 'Chanteuse', 'bali_dou.jpg'),
(10, 'Manopolo', 'https://soundcloud.com/manopolosound', 'Artiste', 'Chanteuse et Chanteur', 'mano_polo.jpg'),
(11, 'Naoo', 'https://www.instagram.com/naomi_ankh/', 'Artiste', 'Chanteuse', 'naoo.PNG'),
(12, 'Pinkmoloko', 'https://soundcloud.com/pinkmoloko', 'Artiste', 'DJette', 'pinkmoloko.jpg'),
(13, 'Flèche Love', 'https://www.youtube.com/watch?v=pwN2LvwVxn0', 'Artiste', 'Chanteuse', 'fleche_love.jpg'),
(14, 'Pumpkin', 'https://www.youtube.com/channel/UCAvggLZTjgwcZYTtFy8ue9g', 'Artiste', 'Chanteuse', 'pumkin.jpg'),
(15, 'Queen Ci', 'https://soundcloud.com/queenciselections', 'Artiste', 'DJette', 'queen_ci.jpg'),
(16, 'Audrey Jesus', 'https://www.instagram.com/audreyjesus/?hl=en', 'Artiste', 'Humoriste', 'audrey_jesus.PNG'),
(17, 'Audrey Vernon', 'http://audreyvernon.com/', 'Artiste', 'Humoriste', 'audrey_vernon.jpg'),
(18, 'Mefy', 'http://www.radiocampusamiens.fr/la-n12-dovaires-bookees/?fbclid=IwAR0csYdsiiSAJfV006-GEic-a8XcKDdsw0j0_Uf8K9dOfACB52h8Q6NXFPM', 'Artiste', '', 'mefy.PNG'),
(19, 'Sandra Nkaké', 'http://sandrankake.com/', 'Artiste', 'Chanteuse', 'sandra.jpg'),
(20, 'Les Culottées du Bocal', 'https://www.lesculotteesdubocal.org/', 'Artiste', 'Humoriste', 'cullotes.jpg'),
(21, 'Mina Bandita', 'https://www.instagram.com/minabandita.ttt/', 'Artiste', 'Tatoueuse', 'mina.jpg'),
(22, 'Tahnee, L\'autre', 'https://www.instagram.com/tahneelautre/', 'Artiste', 'Humoriste', 'thanee.jpg'),
(23, 'Noémie Fy', 'https://www.noemiefy.com/', 'Intervenant.e', 'Cheffe Monteuse', 'noemie_fy.PNG'),
(24, 'Giovanna Rincon', 'https://www.huffingtonpost.fr/giovanna-rincon/a-l-ecole-dans-la-rue-dans-ma-famille-tout-a-bascule-pour-moi-quand-je-suis-devenue-une-femme-transgenre_a_23436276/', 'Intervenant.e', 'Militante', 'giovana.PNG'),
(25, 'Les Editions du Monstre', 'http://editionsdumonstre.blogspot.com/', 'Intervenant.e', 'Collectif', 'editions_du_monstre.png'),
(26, 'Lisa Balavoine', 'https://leschroniquesculturelles.com/2018/01/23/eparse-de-lisa-balavoine/', 'Intervenant.e', 'Ecrivaine', 'lisa_balavoine.jpg'),
(27, 'Jules Falquet', 'http://julesfalquet.com/', 'Intervenant.e', 'Maîtresse de conférences', 'jules_falquet.jpg'),
(28, 'Ami Sene', 'https://www.instagram.com/amisenepoledancer/?hl=en', 'Intervenant.e', 'Coach sportive', 'ami_sene.jpg'),
(29, 'Andréa, AfroBenin', 'https://www.facebook.com/AfroBenin/', 'Intervenant.e', '', 'andrea.jpg'),
(30, 'Les Immédianes', 'http://www.calames.abes.fr/pub/#details?id=FileId-1808', 'Intervenant.e', 'Collectif', 'immedianes.jpg'),
(31, 'Suzette Robichon', 'https://www.fondslesbien.org/nous-connaitre/', 'Intervenant.e', 'éditrice, écrivaine et militante', 'suzette.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `podcast`
--

DROP TABLE IF EXISTS `podcast`;
CREATE TABLE IF NOT EXISTS `podcast` (
  `podcast_id` int(11) NOT NULL AUTO_INCREMENT,
  `podcast_link` varchar(300) NOT NULL,
  `podcast_name` varchar(100) NOT NULL,
  `file_name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`podcast_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1101 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `podcast`
--

INSERT INTO `podcast` (`podcast_id`, `podcast_link`, `podcast_name`, `file_name`) VALUES
(1, 'https://w.soundcloud.com/player/?url=https://api.soundcloud.com/playlists/635684736&color=#ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=tr', 'Ovaires Bookées #1', NULL),
(2, 'https://w.soundcloud.com/player/?url=https://api.soundcloud.com/playlists/635781318&color=#ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=tr', 'Ovaires Bookées #2', NULL),
(3, 'https://w.soundcloud.com/player/?url=https://api.soundcloud.com/playlists/635837934&color=#ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=tr', 'Ovaires Bookées #3', NULL),
(4, 'https://w.soundcloud.com/player/?url=https://api.soundcloud.com/playlists/636911088&color=#ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=tr', 'Ovaires Bookées #4', NULL),
(5, 'https://w.soundcloud.com/player/?url=https://api.soundcloud.com/tracks/553523859&color=#ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true', 'Ovaires Bookées #5', NULL),
(6, 'https://w.soundcloud.com/player/?url=https://api.soundcloud.com/tracks/553539093&color=#ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true', 'Ovaires Bookées #6 d\'Ete', NULL),
(7, 'https://w.soundcloud.com/player/?url=https://api.soundcloud.com/tracks/553542291&color=#ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true', 'Ovaires Bookées #7', NULL),
(8, 'https://w.soundcloud.com/player/?url=https://api.soundcloud.com/tracks/553560159&color=#ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true', 'Ovaires Bookées #8', NULL),
(9, 'https://w.soundcloud.com/player/?url=https://api.soundcloud.com/tracks/557935875&color=#ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true', 'Ovaires Bookées #9', NULL),
(10, 'https://w.soundcloud.com/player/?url=https://api.soundcloud.com/tracks/774191071&color=#ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true', 'Bavardes Emission du 8 Mars 2020', NULL),
(11, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/797594341&color=%23ffad3f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true', 'Ovaires Bookées #10', NULL),
(12, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/797614000&color=%23ffad3f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true', 'Ovaires Bookées #11', NULL),
(13, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/797645779&color=%23ffad3f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true', 'Ovaires Bookées #13', NULL),
(14, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/797666635&color=%23ffad3f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true', 'Ovaires Bookées #15', NULL),
(15, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/797696104&color=%23ffad3f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true', 'Ovaires Bookées #16', NULL),
(16, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/803693758&color=%23ffad3f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true', 'Ovaires Bookées #17', NULL),
(17, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/803694172&color=%23ffad3f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true', 'Ovaires Bookées #18', NULL),
(18, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/803694613&color=%23ffad3f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true', 'Ovaires Bookées #19', NULL),
(19, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/803694901&color=%23ffad3f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true', 'Ovaires Bookées #20', NULL),
(20, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/803699836&color=%23ffad3f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true\r\n', 'Ovaires Bookées #21', NULL),
(21, 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/803704240&color=%23ffad3f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true\r\n\r\n', 'Ovaires Bookées #22', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `presse`
--

DROP TABLE IF EXISTS `presse`;
CREATE TABLE IF NOT EXISTS `presse` (
  `presse_id` int(11) NOT NULL AUTO_INCREMENT,
  `presse_name` varchar(500) NOT NULL,
  `presse_link` varchar(200) NOT NULL,
  `presse_cat` varchar(100) NOT NULL,
  `presse_description` varchar(500) DEFAULT NULL,
  `file_name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`presse_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `presse`
--

DROP TABLE IF EXISTS `presse`;
CREATE TABLE IF NOT EXISTS `presse` (
  `presse_id` int(11) NOT NULL AUTO_INCREMENT,
  `presse_name` varchar(500) NOT NULL,
  `presse_link` varchar(200) NOT NULL,
  `presse_cat` varchar(100) NOT NULL,
  `presse_description` varchar(500) DEFAULT NULL,
  `file_name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`presse_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `presse`
--

INSERT INTO `presse` (`presse_id`, `presse_name`, `presse_link`, `presse_cat`, `presse_description`, `file_name`) VALUES
(1, 'Résultats de recherche pour : les bavardes', 'https://www.jeanne-magazine.com/?s=les+bavardes', 'Jeanne Magazine', '', ''),
(2, 'à la rencontre des militantes Béninoises', 'https://www.jeanne-magazine.com/le-magazine/2019/10/02/les-bavardes-a-la-rencontre-des-militantes-beninoises_18029/', 'Jeanne Magazine', '', ''),
(3, 'Les Bavardes qui débarquent à Amiens', 'https://www.jeanne-magazine.com/le-magazine/2017/11/28/rencontre-bavardes-debarquent-a-amiens_13003/', 'Jeanne Magazine', '', ''),
(4, 'Rencontre avec les Bavardes', 'https://www.jeanne-magazine.com/le-magazine/2019/06/21/rencontre-avec-les-bavardes-coorganisatrices-de-la-premiere-marche-des-fiertes-a-amiens_17073/', 'Jeanne Magazine', '', ''),
(5, 'Les Bavardes à la rencontre d’Esdra Yaveth Sosa Sierra, militante hondurienne', 'https://www.jeanne-magazine.com/le-magazine/2020/01/06/les-bavardes-a-la-rencontre-desdra-yaveth-sosa-sierra-militante-hondurienne_18885/', 'Jeanne Magazine', '', ''),
(6, 'Municipales Amiens 2020 : une fausse campagne avec de vraies revendications !', 'https://www.jeanne-magazine.com/actualites/2020/03/11/municipales-amiens-2020-une-fausse-campagne-avec-de-vraies-revendications_19163/', 'Jeanne Magazine', '', ''),
(7, 'Militantisme – Les Bavardes à la rencontre du collectif lesbien les Immédianes', 'https://www.jeanne-magazine.com/le-magazine/2020/03/21/sortie-de-jeanne-magazine-n73-mars-2020_19207/', 'Jeanne Magazine', '', ''),
(8, 'Sortie de Jeanne Magazine n°64 – mai 2019', 'https://www.jeanne-magazine.com/le-magazine/2019/05/29/sortie-de-jeanne-magazine-n64-mai-2019_16936/', 'Jeanne Magazine', '', ''),
(9, 'Violences envers les femmes: la lutte prend de l’ampleur à Amiens', 'https://www.courrier-picard.fr/art/69282/article/2017-11-07/violences-envers-les-femmes-la-lutte-prend-de-lampleur-amiens', 'Courrier Picard', '', ''),
(10, '« Les Bavardes » leur ont donné la parole', 'https://www.courrier-picard.fr/art/98873/article/2018-03-23/les-bavardes-leur-ont-donne-la-parole', 'Courrier Picard', '', ''),
(11, 'Soirées cabaret sur la péniche du Lapin Vert', 'https://www.courrier-picard.fr/art/124752/article/2018-07-19/soirees-cabaret-sur-la-peniche-du-lapin-vert-ce-week-end-amiens', 'Courrier Picard', '', ''),
(12, 'Une Journée de la femme très active à Amiens', 'https://www.courrier-picard.fr/art/95333/article/2018-03-07/une-journee-de-la-femme-tres-active-amiens', 'Courrier Picard', '', ''),
(13, 'le festival IDAHOT lutte contre les discriminations', 'https://www.courrier-picard.fr/art/183348/article/2019-05-14/amiens-le-festival-idahot-lutte-contre-les-discriminations', 'Courrier Picard', '', ''),
(14, 'La Marche des fiertés dans les starting-blocks à Amiens', 'https://premium.courrier-picard.fr/id12663/article/2019-05-24/la-marche-des-fiertes-dans-les-starting-blocks-amiens?bot=1', 'Courrier Picard', '', ''),
(15, 'Amiens accueille les premiers pas de la Marche des fiertés', 'https://premium.courrier-picard.fr/id20127/article/2019-06-21/amiens-accueille-les-premiers-pas-de-la-marche-des-fiertes?bot=1', 'Courrier Picard', '', ''),
(16, 'KOMITID - \"Nous vivons un moment historique\"', 'https://www.komitid.fr/2019/06/21/nous-vivons-un-moment-historique-on-a-assiste-a-la-preparation-de-la-toute-premiere-marche-des-fiertes-a-amiens/', 'Luttes LGBTQI+', '', ''),
(17, 'france bleu - Première marche des fiertés à Amiens : Une \"sensibilisation nécessaire\"', 'https://www.francebleu.fr/infos/societe/premiere-marche-des-fiertes-a-amiens-une-sensibilisation-necessaire-1557077042', 'Luttes LGBTQI+', '', ''),
(18, 'france 3 hdf - En Picardie, la lutte contre l\'homophobie avance', 'https://france3-regions.francetvinfo.fr/hauts-de-france/somme/embargo-au-14-mai-7h-picardie-lutte-contre-homophobie-avance-1668769.html', 'Luttes LGBTQI+', '', ''),
(20, 'Orange weo - Première marche des fiertés le 22 juin', 'https://actu.orange.fr/societe/videos/amiens-80-premiere-marche-des-fiertes-le-22-juin-CNT000001fzkM0.html', 'Luttes LGBTQI+', '', ''),
(21, 'Courrier Picard - à Amiens, ils se donnent la main sans craindre les quolibets', 'https://premium.courrier-picard.fr/id20379/article/2019-06-22/amiens-ils-se-donnent-la-main-sans-craindre-les-quolibets?bot=1', 'Luttes LGBTQI+', '', ''),
(22, 'Belle affluence pour la première marche des fiertés d\'Amiens', 'https://www.francebleu.fr/infos/societe/en-images-belle-affluence-pour-la-premiere-marche-des-fiertes-d-amiens-1561218833', 'Luttes LGBTQI+', '', ''),
(23, 'Franc succès pour la marche des fiertés d’Amiens', 'https://www.courrier-picard.fr/id20345/article/2019-06-22/franc-succes-pour-la-marche-des-fiertes-damiens', 'Luttes LGBTQI+', '', ''),
(24, 'Près de 2000 personnes rassemblées pour la 1e marche des fiertés d\'Amiens', 'https://france3-regions.francetvinfo.fr/hauts-de-france/somme/amiens/pres-2000-personnes-rassemblees-1e-marche-fiertes-amiens-1689316.html', 'Luttes LGBTQI+', '', ''),
(25, 'Grenelle des violences conjugales : \"On attend des mesures concrètes, durables et efficaces', 'https://www.francebleu.fr/infos/societe/grenelle-des-violences-conjugales-attend-des-mesures-concretes-durables-et-efficaces-1574667622?fbclid=IwAR28AUEdiI-PZfDN_I4SUqK1vXZgCEETJH_RRWJfzex_HYuedDVtjGZ', 'Divers', '', ''),
(26, 'Stop féminicides !\" : une centaine de manifestantes contre les violences faites aux femmes à Amiens', 'https://www.francebleu.fr/infos/societe/pas-une-de-plus-une-centaine-de-manifestantes-contre-les-violences-faites-aux-femmes-a-amiens-1574541556?fbclid=IwAR0-ACD5MNdYqAH9oWJpPih5u69apnBH1dYQ_kdprTVotj', 'Divers', '', ''),
(27, 'Manifestation à #Amiens, place Gambetta', 'https://twitter.com/fbleupicardie/status/1198270977383247874?ref_src=twsrc^tfw|twcamp^tweetembed|twterm^1198270977383247874&ref_url=https://www.francebleu.fr/infos/societe/pas-une-de-plus-une-centaine', 'Divers', '', ''),
(28, '«J’en (c)rêve!», un festival pour les droits des femmes à Amiens', 'https://premium.courrier-picard.fr/id73569/article/2020-03-06/jen-creve-un-festival-pour-les-droits-des-femmes-amiens', 'Divers', '', ''),
(29, 'Une fausse campagne avec de vraies revendications féministes à Amiens', 'https://premium.courrier-picard.fr/id74372/article/2020-03-10/une-fausse-campagne-avec-de-vraies-revendications-feministes-amiens', 'Divers', '', ''),
(30, 'Dans les Hauts-de-France, les femmes gagnent toujours 25? moins que les hommes', 'https://france3-regions.francetvinfo.fr/hauts-de-france/hauts-france-femmes-gagnent-toujours-25-moins-que-hommes-1795893.html?fbclid=IwAR1-3wXiN9B9J3qrERoU8knglo7FWXpwK8GxqRD9LbkXHsfExuPu8Ehf7Es', 'Divers', '', ''),
(33, '3 questions à Elisabeth Lebovici, cofondatrice de Lesbiennes d\'intérêt Général', 'https://www.komitid.fr/2020/04/24/3-questions-a-elisabeth-lebovici-cofondatrice-de-lesbiennes-dinteret-general/', 'Divers', '', NULL),
(34, 'Face à la crise sanitaire, économique et sociale, un plan d\'urgence féministe!', 'https://blogs.mediapart.fr/les-invites-de-mediapart/blog/220520/face-la-crise-sanitaire-economique-et-sociale-un-plan-durgence-feministe?fbclid=IwAR23OSlXEcubWGk3NqaUM_GPRZZZDSYHxzoYj0z28cjF88cUEThyfJ', 'Divers', '', NULL),
(35, 'LES BAVARDES À LA RENCONTRE DU COLLECTIF LESBIEN LES IMMÉDIANES', 'https://www.jeanne-magazine.com/le-magazine/2020/04/04/les-bavardes-a-la-rencontre-du-collectif-lesbien-les-immedianes_19268/', 'Jeanne Magazine', '', NULL),
(36, 'En Picardie, pour les associations de lutte contre les lgbtphobies, \"difficile de faire savoir qu\'on existe\"', 'https://france3-regions.francetvinfo.fr/hauts-de-france/picardie-associations-lutte-contre-lgbtphobies-difficile-faire-savoir-qu-on-existe-1830222.html', 'Luttes LGBTQI+', '', NULL);
-- --------------------------------------------------------

--
-- Structure de la table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(50) NOT NULL,
  `team_title` varchar(100) NOT NULL,
  `team_description` varchar(2000) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `team_title`, `team_description`, `file_name`) VALUES
(1, 'Audrey', 'Chargé de projet', '\" Netflix, bière/fromage ou fromage/bière. Militante avec les femmes et pour\r\nles femmes. Les Bavardes pour moi c\'est expérimenter l\'auto-gestion en permettant de vivre et de pratiquer la sororité. Je m\'occupe de l\'administratif, la comptabilité, le démarchage, répondre aux sollicitations, la com et l\'animation des temps fort. \"', 'audrey500.jpg'),
(2, 'Marie', 'Chargé de mission', '\" Un collectif créé, pensé et porté par et pour des femmes, pour leurs droits et contre les inégalités qu\'elles subissent, c\'était un rêve, de ceux que l\'on fait le soir avant de s\'endormir, sans trop y croire vraiment. Un projet comme celui là, à Amiens, dans notre contexte social, politique et économique, c\'était impossible, et c\'est pour ça qu\'on l\'a fait. \"', 'marie500.jpg'),
(3, 'Blandine', 'Animatrice Sociale', '\" Chez les Bavardes depuis IDAHOT 2018, je fais partie du STAFF coordination. Bénévole chez les Bavardes pour visibiliser la cause féministe sur Amiens. Ce que j\'aime : LES CHAT.TES \"', 'blandine500.jpg'),
(4, 'Marion B', 'Musicienne et photographe', '\" Musicienne et photographe avec une passion pour le classement. S’occupe entre autre de la logistique et de l’organisation pour les Bavardes \"', 'marionb500.jpg'),
(5, 'Marion J', 'Formatrice Web', '\" Bénévole active sur la plupart des évènements depuis la création. Je m\'occupe principalement de la logistique, de la cohésion et du site internet. Dans les Bavardes pour agir localement et pour maintenir un lien social entre les différents acteur·ices de la vie amiénoise. \"', 'marionj500.jpg'),
(6, 'Maud', 'Magaziniere d\'une épicerie solidaire', '\" Je suis Maud, bientôt 30 ans. Je suis maintenant magasinière d\'une épicerie solidaire mobile. Je suis dans les bavardes depuis juin 2018 et j\'ai tout de suite adoré la force de ce collectif. Dans les bavardes j\'aime m\'occuper de la logistique terrain et je suis à l\'aise avec la nourriture et la boisson (rires). Ce qui compte pour moi dans les bavardes comme dans la vie c\'est la force de la sororité \"', 'maud500.jpg'),
(7, 'Louiza', 'Educatrice spécialisée', '\" Louiza, bénévole active depuis mai 2019, je lutte pour les droits et la cause de toutes les femmes. Sinon, dans la vie, je suis éducatrice spécialisée en formation. \"', 'louiza500.jpg'),
(8, 'Estelle', 'Coordinatrice de formation', '\" Estelle, coordinatrice de formation et passionnée de danse. Présente chez les bavardes depuis la première soirée, bénévole active depuis mars 2019. Je suis dans ce collectif pour militer et pour l\'esprit de sororité qui y réside ! \"', 'estelle500.jpg'),
(9, 'Angélique', 'Humouriste', '\" Mes qualités ? Je suis drôle et spontanée et je danse super bien avec les bras. Les Bavardes c\'est pour moi la famille, elles contribuent à me rendre meilleure, à me faire réflechir autrement à m\'émanciper en tant que femme. Qu\'est ce que je fais au sein des bavardes ? J\'ai animé quelques lotos et un blabla =) mais de manière générale je suis toujours motivée pour tout quand il s\'agit des Bavardes. \"', 'angelique500.jpg'),
(10, 'Aude', 'Mécanicienne Carrossière', '\" Carrossière dont la spécialité est de s’infiltrer dans les milieux dit « masculins ». Dans les Bavardes pour faire justice face aux inégalités salariales. \"', 'aude500.jpg'),
(11, 'Jade', 'Développeuse Web', '\" J\'aime énormément le sport, mais j\'ai par dessus tout une passion pour le catch. J\'adore les bonbons et je déteste le fromage. Les bavardes regroupent ce que je suis: féministe et lesbienne. On retrouve chez les bavardes une réelle cohésion de sororité. \"', 'jade500.jpg'),
(12, 'Justine', 'Technicienne de laboratoire', '\" Justine, souriante, persévérante, aime s\'amuser, la musique et le sport. Pour moi les bavardes c\'est une association en rapport avec mes convictions mais surtout une bande d\'amies, une sororité, une famille avec des personnes toujours là pour aider son prochain. Je suis bénévole depuis mai 2018 et c\'est toujours un réel plaisir d\'aider et de participer aux événements. \"', 'justine500.jpg'),
(13, 'Kenza', 'Artiste', '\" Artiste, bénévole accueil et bar. J\'aime le féminisme et la sororité. Mes points forts sont la diversité et le social. \"', 'kenza500.jpg'),
(14, 'Ludivine', ' Vadrouilleuse dans le monde des plantes', '\" Vadrouilleuse dans le monde des plantes. Dans les Bavardes pour soutenir le collectif dans la lutte contre les inégalités. \"', 'ludivinne500.jpg'),
(15, 'Marine', 'Etudiante', '\" Dans les Bavardes pour rencontrer des gens, en tant que lesbienne ca me fait du bien, je me sens mieux dans la société. J\'aime l\'art, la musique, le chèvre et la tarte citron. Je m\'occuppe de tenir les stands, participer aux actions et de la technique à la radio. \"', 'marine500.jpg'),
(16, 'Orlia', 'Etudiante', '\" J\'aime le chant et lire des fictions. J\'ai rejoint les bavardes en tant que bénévole dans le but de sortir de ma coquille, de m\'entourer de personnes partageant les mêmes idées féministes que les miennes et aussi d\'apprendre et de lutter contre les inégalités. \"', 'orlia500.jpg'),
(17, 'Hélène', 'Prof de lettres-HG', '\" Je suis prof de lettres-HG en Lycée Professionnel. J\'aime la philosophie et la couleur orange. Les Bavardes pour moi c\'est une rencontre alors que je me sentais isolée avec ma conscience féministe et mon envie de lutter. \"', 'helene500.jpg'),
(18, 'Lucille', 'Cheffe de projet', '\" J\'aime la musique, dessiner, discuter. Dans les Bavardes pour donner un sens à la vie, pas que pour moi mais aussi pour les autres. Je participe aux évènements juste pour kiffer ou être bénévole aux temps forts comme la IDAHOT ou la Pride. Je participe à la vision stratégique et politique de l\'asso, de la technique à la radio et des chroniques. \"', 'lucille500.jpg'),
(19, 'Louiz\'', 'Chargé de projet', '\" Les Bavardes pour moi ça a été le grand tournant, la montagne russe de la déconstruction. Ma deuxième naissance. Rien dans ma vie n\'a eu plus de sens que de participer à la construction de ce collectif. Et le voir continuer, m\'emplis de joie et de fierté. Aujourd\'hui, un peu à distance, je continue ce combat contre les inégalités à travers mon travail autour des déchets et de l\'environnement. Et puis on verra, où tout ça nous mène ! \"', 'louiz500.jpg'),
(20, 'Alex', 'Houmousicienne et serpillère de dancefloor', '\" Qui je suis ? Militante, engagée et volontaire, transfem queer libre et solidaire contre toutes les inégalités Qu\'est-ce que j\'apporte ? Parfois une parole, un parcours, de la tempérance, un point de vue situé, du recul, mon énergie et mes fragilités Qu\'est-ce que j\'aime ? La justice, la liberté, vivre et découvrir, l\'expression corporel et artistique, mes Sœurs. Vous pouvez aussi me soudoyer avec du chocolat, de la pizza ou, évidemment, du houmous (la vie) ahah \"', 'alex500.jpg');
-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `us_id` int(11) NOT NULL AUTO_INCREMENT,
  `us_fname` varchar(25) NOT NULL,
  `us_lname` varchar(25) NOT NULL,
  `us_email` varchar(50) NOT NULL,
  `us_password` varchar(200) NOT NULL,
  `us_phone` varchar(10) DEFAULT NULL,
  `us_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=Admin | 0=User',
  `file_name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`us_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`us_id`, `us_fname`, `us_lname`, `us_email`, `us_password`, `us_phone`, `us_status`, `file_name`) VALUES
(1, 'Jade', 'Guehoun', 'wwejgulip@gmail.com', 'db496a2e9e18cb15227ac7abb08c9ba38f339821', '0698129757', 1, 'jade500.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
