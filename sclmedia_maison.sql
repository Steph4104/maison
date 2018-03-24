-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  sam. 10 mars 2018 à 17:30
-- Version du serveur :  10.1.24-MariaDB-cll-lve
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sclmedia_maison`
--

-- --------------------------------------------------------

--
-- Structure de la table `info_maison`
--

CREATE TABLE `info_maison` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `prix` int(11) NOT NULL,
  `chambre` int(11) NOT NULL,
  `bain` int(11) NOT NULL,
  `autobus` int(11) NOT NULL,
  `habitable` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `taxe_m` int(11) NOT NULL,
  `taxe_s` int(11) NOT NULL,
  `inclusion` text NOT NULL,
  `exclusion` text NOT NULL,
  `pour` text NOT NULL,
  `contre` text NOT NULL,
  `autre` text NOT NULL,
  `sold` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `info_maison`
--

INSERT INTO `info_maison` (`id`, `link`, `prix`, `chambre`, `bain`, `autobus`, `habitable`, `img`, `adresse`, `year`, `taxe_m`, `taxe_s`, `inclusion`, `exclusion`, `pour`, `contre`, `autre`, `sold`) VALUES
(1, 'http://avecuncourtier.com/23372888-103--rue-du-meridien-hull--gatineau--outaouais', 314900, 4, 2, 43, 1800, 'image_house/meridien.jpg', '103 Rue du MÃ©ridien  Hull (Gatineau)', 1993, 3358, 3358, '      stores, rideaux, remise, ouvre porte Ã©lectrique garage, lave-vaisselle.', 'fournaise et reservoir eau chaude sont louÃ©s.', 'Garage double, air clim central, ', 'peinture et cuisine', 'pres de pink et saint raymond', 'dispo'),
(3, 'http://expertimmobilierpm.net/nos-proprietes/propriete-details/?id=17182613', 304777, 4, 3, 42, 1959, 'image_house/gilbert-garneau.jpg', '60 Rue Gilbert-Garneau, J8T4A8', 1969, 3155, 790, ' Fournaise, air climatisÃ©, asp. central et accessoires, hotte et micro-ondes, lave-vaisselle, stores, luminaires, pompe submersible, remise, Ã®lot de cuisine. Dans l\'appartement; poÃªle, frigo et lave-vaisselle. Tous DONNÃ‰S tels quels Ã  la vente.', 'PÃ´les et rideaux, chauffe-eau louÃ©, rÃ©servoir au propane louÃ©', 'Abri auto, walk-in dans la chambre a coucher, 2eim etage en 2016', '2 irrÃ©gularitÃ©, (LE VENDEUR FOURNIRA UNE ASSURANCE TITRE POUR CES 2 IRRÃ‰GULARITÃ‰S.) Quartier', 'Le sousol a un logie parental, donc potention avec reno, Climatiseur central', 'dispo'),
(4, 'https://www.remax-quebec.com/fr/maison-a-vendre-outaouais/29-rue-du-huard-hull-26026961.rmx', 2699000, 4, 3, 41, 1346, 'image_house/huard.jpg', '29 Rue du Huard Hull, Outaouais', 2002, 3242, 657, ' Stores, chauffe-eau (2014), remise', 'Non spÃ©cifiÃ©es', 'cours cloturer, grand stationnement', 'balcon en bois qui a besoin de peinture urgente', 'une salle deau, foyer au bois au salon, jumelÃ©, Salle de bains attenante Ã  la CCP', 'dispo'),
(5, 'http://avecuncourtier.com/14207572-183--rue-de-maremme-aylmer--gatineau--outaouais', 308888, 4, 2, 41, 1460, 'image_house/maremme.jpg', '183 Rue de Maremme', 2010, 3769, 740, ' Lave-vaisselle, aspirateur central et accessoires, Ã©changeur d\'air, climatiseur central, foyer au gaz, remise, ouvre-porte Ã©lectrique du garage.', 'Lustre de la salle Ã  manger, chauffe-eau et fournaise.', 'Garage, belle remise, petit deck, cours cloturer', 'Ne semble pas avoir asp central, le sous sol est Ã©trange', 'Plusieur piece au sous sol quon ne voit pas. Il a un spa a lexterieur', 'dispo'),
(6, 'http://avecuncourtier.com/20998887-38--rue-du-carnavalet-aylmer--gatineau--outaouais', 277900, 3, 2, 44, 1414, 'image_house/carnavalet.jpg', '38 Rue du Carnavalet  Aylmer (Gatineau)', 2010, 3599, 538, ' CuisiniÃ¨re, rÃ©frigÃ©rateur, lave-vaisselle, remise, rideaux et pÃ´les, aspirateur central et accessoires', 'VÃ©nitiennes de la cuisine et de la salle Ã  dÃ®ner', 'ac central et asp central, remise cours', 'boite electrique sur terrain, plafond sous sol non fini', 'bureau au sous sol, deux salle de bain et une salle deau', 'dispo'),
(7, 'http://www.francisvallee.com/details_propriete/80-rue-dandromede/#.Wo7FkqjwYuV', 264900, 3, 2, 46, 1400, 'image_house/andromede.jpg', '80 Rue AndromÃ¨de Aylmer (Gatineau) J9J 0E4', 0, 0, 0, ' Lave-vaisselle, remise, stores, aspirateur central et acc., luminaires, Ã©changeur d\'air, fournaise.', 'N/A', 'ilot cuisine avec stud, grande entree, walk-in chambre des maitre', 'petite remise, facade boff', 'sous sol a verifier, patio en bois', 'dispo'),
(8, 'http://avecuncourtier.com/20453066-215--rue-des-pionniers-aylmer--gatineau--outaouais', 2999000, 4, 2, 43, 1225, 'image_house/pionniers.jpg', '215 Rue des Pionniers  Aylmer (Gatineau)', 1983, 2960, 2960, ' Lave-vaisselle, A/C mural, luminaires, remise, stores, foyer Ã©lectrique, cuisiniÃ¨re, 2 rÃ©frigÃ©rateurs, ouvre-porte de garage. ', 'N/A', 'Garage double, cours privÃ© avec des haies', 'Dans le coin de wilfred lavigne. Loin dans alymers', 'cuisine si enleve le mure, plus grand, remise', 'dispo'),
(9, 'http://www.viacapitalevendu.com/outaouais-gatineau-gatineau-rue-jean-perrin-maison-a-etages-14715452/?centris=1', 285900, 3, 2, 43, 1600, 'image_house/jeanperrin.jpg', ' 212, Rue Jean-Perrin, Gatineau (Gatineau), Quartier HÃ´pital, Val-BoisÃ©e', 1993, 3329, 3329, ' Lave-vaisselle, rideaux, stores, pÃ´les, piscine et accessoires. ', 'Les chauffe-eau et fournaise sont en location.', 'Garage, piscine, a gatineau, chambre principale avec walk in, remise', 'plus petite, tapis escalier', 'une salle de bain une salle d\'eau', 'dispo'),
(10, 'https://www.royallepage.ca/fr/property/quebec/aylmer-gatineau/61-rue-arthur-quesnel/7342878/mls11287958/?ref=1', 289900, 3, 2, 43, 1606, 'image_house/arthurequesnel.jpg', '61 RUE ARTHUR-QUESNEL, AYLMER (GATINEAU), QC, J9H 7T6', 2007, 3067, 3067, '  Laveuse, sÃ©cheuse, luminaires, stores, tringles, Ã©changeur d\'air, climatiseur central, systÃ¨me d\'alarme non reliÃ©, rÃ©frigÃ©rateur.', 'Fournaise et chauffe-eau.', 'belle entrÃ©e indÃ©pendante, grande chambre de bain, cloture semble isolante(cache)', 'partage parking avec voisin, cuisine besoin reno pour plus grand', 'pres de chez jess, possibilite de piece au sous sol, pas de remise', 'dispo'),
(11, 'https://martywaite.com/fr/proprietes/outaouais/aylmer-gatineau/plateau-de-la-capitale/21821002', 338500, 3, 2, 46, 1610, 'image_house/5D99EA6A-EDDE-4C6A-9024-99070BF1C144.jpeg', '87 rue des Scouts', 2014, 4109, 4109, '   N/A', 'N/A', 'Garage, belle cuisine, au gout du jour,beau balcon/pergola, pas de voisin arriere, foyer salle a manger/salon', 'Stationnement partager avec le voisin, un allÃ©, petite cour, sous sol non fini(sur beton)', 'N/A', 'dispo'),
(12, 'http://www.remax-quebec.com/en/house-for-sale-outaouais/29-imp-du-sillon-hull-11587220.rmx', 264900, 4, 2, 39, 1260, 'image_house/sllion.jpg', '29 Impasse du Sillon', 1985, 0, 0, '   ', 'N/A', 'Piscine hors-terre', 'N/A', 'N/A', 'dispo'),
(13, 'http://passerelle.centris.ca/redirect.aspx?CodeDest=REMAX&NoMLS=21160713', 299900, 3, 2, 44, 15000, 'image_house/chantiers.jpg', '210 Rue des Chantiers Aylmer, Outaouais', 1984, 3389, 3389, '   RÃ©frigÃ©rateur, four, lave-vaisselle, chauffe-eau, cabanon, aspirateur central (nouveau moteur 2017), ouvre-porte garage, hotte de four haute-gamme Jenn-Air.', 'Luminaire dans la salle Ã  dÃ®ner.', 'Garage, foyer au bois, grande entrÃ©e, cave multi palier', 'Besoin de petite rÃ©no, de peinture, salle de lavage,tapis', 'une salle de bain complÃ¨te et une salle d\'eau', 'dispo'),
(14, 'https://www.remax-quebec.com/fr/maison-a-vendre-outaouais/298-rue-de-fontenelle-gatineau-17502209.rmx', 299900, 4, 3, 0, 1478, 'image_house/30D1E11F-2E82-4125-916F-5BC8995AB625.png', '298 rue de Fontenelle', 2015, 3247, 3247, '   Lave-vaisselle, a/c central, shed, echangeur dâ€™air', 'Aspirateur central, chauffe-eau et fournaise', 'N/A', 'N/A', 'N/A', 'dispo'),
(15, 'https://www.century21.ca/marcantoine.bleau/Property/QC/J8V_2R4/Gatineau/232_Rue_Jean-Perrin', 314999, 4, 1, 0, 1550, 'image_house/520B964E-0A21-49CA-9EA1-B191441CED90.png', '232 rue Jean-Perrin', 1993, 0, 0, '  Aspirateur central, Ã©changeur dâ€™air, systÃ¨me dâ€™alarme, climatiseur portable', 'N/A', 'N/A', 'Seulement une salle de bain ', 'N/A', 'dispo'),
(16, 'http://avecuncourtier.com/25582232-567--rue-a--gibeault-gatineau--gatineau--outaouais', 309900, 5, 1, 51, 1497, 'image_house/a-gibeault.jpg', '567 Rue A.-Gibeault ', 2007, 3293, 3293, '  Fournaise, hotte micro-onde, lave-vaisselle, stores, rideaux, tringles Ã  rideaux. ', 'TÃ©lÃ©vision et support de tÃ©lÃ©vision Ã  la cuisine, chauffe-eau. ', 'Garage, climatiseur central, spas dans la cours donc panneau good pour, un grand patio d\'interlock couvert d\'une pergola', 'Semble avoir su tapis en haut, 2 autobus ou 30min de marche, sous sol non terminer', 'une salle d\'eau et une salle de bain', 'dispo'),
(17, 'https://www.remax-quebec.com/fr/maison-a-vendre-outaouais/15-rue-de-foligny-mont-luc-13890288.rmx', 329900, 4, 2, 42, 1520, 'image_house/foligny.jpg', '15 Rue de Foligny', 1993, 3631, 3631, '  Lave vaisselle, rideaux, tringles, four encastrÃ©, air climatisÃ© central, aspirateur central, ouvre porte garage Ã©lectrique', 'RÃ©servoir Ã  eau chaude et fournaise (location)', 'Garage, ac et asp-c, foyer gaz, piscine hors terre, deack bois', '2 autobus for sure, un peu chere, ', 'essaie de vendre vite', 'dispo');

-- --------------------------------------------------------

--
-- Structure de la table `sort_save`
--

CREATE TABLE `sort_save` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `display_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sort_save`
--

INSERT INTO `sort_save` (`id`, `user_id`, `display_order`) VALUES
(1, 1, 1),
(9, 6, 5),
(8, 5, 4),
(7, 4, 3),
(6, 3, 2),
(10, 0, 6),
(11, 7, 6),
(12, 8, 7),
(13, 9, 8),
(14, 10, 9),
(15, 11, 10),
(16, 12, 11),
(17, 13, 12),
(18, 14, 0),
(19, 15, 13),
(20, 16, 14),
(21, 17, 15);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `info_maison`
--
ALTER TABLE `info_maison`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sort_save`
--
ALTER TABLE `sort_save`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `info_maison`
--
ALTER TABLE `info_maison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `sort_save`
--
ALTER TABLE `sort_save`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
