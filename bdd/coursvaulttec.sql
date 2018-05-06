-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 05 Mai 2018 à 03:01
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `coursvaulttec`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `idart` int(11) NOT NULL AUTO_INCREMENT,
  `titreart` varchar(200) NOT NULL,
  `descriptionart` text NOT NULL,
  `codeart` varchar(10) NOT NULL,
  `rubrique` int(11) NOT NULL,
  PRIMARY KEY (`idart`),
  KEY `rubrique` (`rubrique`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`idart`, `titreart`, `descriptionart`, `codeart`, `rubrique`) VALUES
(6, 'CrÃ©ation d''un formulaire en javascript', 'Dans ce premier tutoriel, nous allons tout simplement crÃ©er un formulaire directement en javascript. L''avantage de cette technique est de pouvoir introduire Ã  n''importe quelle moment un element html en fonction d''un Ã©vÃ¨nement du DOM. Par exemple, on pourrait introduire un formulaire que si mon curseur survole une zone de la page', 'A01', 7),
(7, 'CrÃ©er votre premier serveur web avec NodeJS', 'NodeJS est une plateforme construite sur le moteur JavaScript V8 de Chrome qui permet de dÃ©velopper des applications en utilisant du JavaScript. Il se distingue des autres plateformes grÃ ce Ã  une approche non bloquante permettant d''effectuer des entrÃ©es/sorties (I/O) de maniÃ¨re asynchrone. ', 'A02', 7),
(8, 'Canvas', 'La balise "canvas", introduite avec l''HTML5 est dÃ©jÃ  utilisable sur plusieurs navigateurs tels que Mozilla Firefox, Safari, Google Chrome ou Opera. Elle permet, via moult fonctions de dessin Javascript de gÃ©nÃ©rer dans ce dernier, des formes, images ou textes. J''aurais donc pour but dans ce tutoriel de vous apprendre Ã  maÃ®triser les bases du dessin et de l''animation avec "canvas".', 'B01', 8),
(9, 'Hauteur/Largeur (F177)', 'Cette page B4 ne sert qu''a rÃ©pondre Ã  la tache "F177 : Affichage information de la largeur de la page article B4 (copie Ã©cran)" ', 'B02', 8),
(10, 'Ajout du premiÃ¨re onglet par back office', 'Cette article est ajoutÃ© directement par le BackOffice. Il reprÃ©sente le mÃªme niveau qu''un sous onglet', 'C01', 10),
(11, 'DeuxiÃ¨me onglet', 'Description du deuxiÃ¨me article', 'C02', 10);

-- --------------------------------------------------------

--
-- Structure de la table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `iddet` int(11) NOT NULL AUTO_INCREMENT,
  `descriptiondeg` text NOT NULL,
  `imagedet` varchar(100) NOT NULL,
  `titre` int(11) NOT NULL,
  PRIMARY KEY (`iddet`),
  KEY `titre` (`titre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Contenu de la table `detail`
--

INSERT INTO `detail` (`iddet`, `descriptiondeg`, `imagedet`, `titre`) VALUES
(1, 'Pour notre exemple, nous allons crÃ©er un dossier "formulaireJS"', 'detail-1.png', 10),
(2, 'et nous allons insÃ©rer un fichier "index.html"', 'detail-2.png', 10),
(3, 'Vous allez maintenant ouvrir votre fichier avec votre Ã©diteur prÃ©fÃ©rÃ©. De prÃ©fÃ©rence, utiliser un Ã©diteur dÃ©diÃ© Ã  la programmation (exemple nodePad++, sublimeText ...). Pour ma part, j''utiliserai sublime text.\r\nUne fois le fichier ouvert, ajoutez les balises de base d''une page web (head, body footer meta etc.)', 'detail-3.png', 11),
(4, 'Pour crÃ©er un formulaire, ouvrez une balise "script" entre les balises "body" de votre page web et utiliser la propriÃ©tÃ© "document.writeln" pour Ã©crire du html avec du javascript.\r\n\r\nCi-dessous, le script pour crÃ©er un formulaire avec deux champs de saisis (login + password), et un bouton de confirmation', 'detail-4.png', 12),
(5, 'Ci-dessous le rÃ©sultat visuel', 'detail-5.png', 12),
(6, 'Maintenant que nous savons crÃ©er un formulaire avec du javascript, nous allons le faire afficher qu''aprÃ¨s le dÃ©clenchement d''un Ã©vÃ¨nement.\r\n\r\nA titre d''exemple, nous allons crÃ©er un carrÃ© avec un id="zone" avec les propriÃ©tÃ©s css ci-dessous', 'detail-6.png', 13),
(7, 'Puis nous rajouterons une div dans notre document html avec un identifiant id="zone" comme ci-dessous', 'detail-7.png', 13),
(8, 'Ce qui nous le rÃ©sultat suivant', 'detail-8.png', 13),
(9, 'Nous allons maintenant modifier notre script javascript pour afficher notre formulaire aprÃ¨s avoir cliquÃ© sur une partie (EvÃ¨nement "onclick" en javascript) de la zone de la div', 'detail-9.png', 13),
(10, 'Ce qui donne le rÃ©sultat suivant', 'detail-10.gif', 13),
(12, 'Rendez-vous sur le site de nodeJs pour tÃ©lÃ©charger lâ€™exÃ©cutable https://nodejs.org/en/', 'detail-11.gif', 14),
(13, 'L''installation se fait facilement, cliquez "suivant" sur chaque Ã©tape demandÃ©e et acceptez le contrat de licence', 'detail-13.gif', 15),
(14, 'A titre d''exemple, crÃ©ez un dossier "nodejs" Ã  la racine de votre serveur web local. Pour ma part, j''utilise wamp. J''ai donc crÃ©Ã© le dossier Ã  l''adresse suivante : "C://wamp/www"\r\nNous allons crÃ©er notre premier serveur web. CrÃ©er un fichier "server.js" Ã  l''intÃ©rieur de votre dossier "nodejs". Puis ouvrez le dans votre Ã©diteur de texte prÃ©fÃ©rer (ex: NotePad++)', 'detail-14.png', 16),
(15, '"require" consiste Ã  faire appel Ã  la bibliothÃ¨que de NodeJS\r\n\r\n"require(''http'')" fait appel Ã  la bibliothÃ¨que pour obtenir un serveur web\r\n\r\nIci, notre serveur Ã©coute le port "8080" et une fois lancÃ©, l''invite de commande affichera un message "Le serveur est connectÃ© au port 8080"', 'detail-15.png', 17),
(16, '', 'detail-16.gif', 18),
(19, 'Pour tester votre serveur, ouvrez votre invite de commande en cliquant sur les touches "win"+"R"\r\n\r\nAller Ã  la racine de votre application nodejs Ã  l''aide la commande "CD"\r\nDans mon exemple j''ai fais "cd /wamp/www/nomdufichier"\r\n\r\nPour lancer l''application utilisation la commande "node" suivi du nom de l''application. Mon exemple "node server.js"', 'detail-17.gif', 19),
(21, '', 'detail-20.png', 20),
(22, '', 'detail-22.png', 21),
(23, '', 'detail-23.png', 22),
(24, 'PremiÃ¨re partie ajoutÃ©e par le backoffice, cette partie doit normalement d''Ã©crire chaque Ã©tape du tuto et on peut ajoutÃ© une image', 'detail-24.jpg', 23),
(25, 'ajout d''une deuxiÃ¨me image dans la mÃªme partie', 'detail-25.png', 23),
(26, 'Description de la deuxiÃ¨me partie', 'detail-26.gif', 24),
(27, 'Blabla', 'detail-27.jpg', 25);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `idmsg` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) NOT NULL,
  `telephone` int(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `receptionDate` varchar(50) NOT NULL,
  `receptionHeure` varchar(50) NOT NULL,
  PRIMARY KEY (`idmsg`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`idmsg`, `nom`, `telephone`, `email`, `sujet`, `message`, `receptionDate`, `receptionHeure`) VALUES
(1, 'GILLES HEITAA', 87714479, 'heitaa.gilles1@gmail.com', 'Demande de contact', 'Demande de contact  Demande de contact  Demande de contact  Demande de contact  Demande de contact  Demande de contact  Demande de contact  Demande de contact  Demande de contact  Demande de contact  Demande de contact  Demande de contact  Demande de contact  ', '4/5/2018', '0:37:35');

-- --------------------------------------------------------

--
-- Structure de la table `rubrique`
--

CREATE TABLE IF NOT EXISTS `rubrique` (
  `idrub` int(11) NOT NULL AUTO_INCREMENT,
  `intitulerub` varchar(255) NOT NULL,
  `descriptionrub` text NOT NULL,
  `imagerub` varchar(100) NOT NULL,
  `newname` varchar(150) NOT NULL,
  `coderub` varchar(20) NOT NULL,
  PRIMARY KEY (`idrub`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `rubrique`
--

INSERT INTO `rubrique` (`idrub`, `intitulerub`, `descriptionrub`, `imagerub`, `newname`, `coderub`) VALUES
(7, 'Partie "programmation"', 'Vous trouvez dans cette rubrique plusieurs astuces relatives Ã  la programmation web ðŸ˜„', 'programmation.jpg', 'rubrique-1.jpg', 'A'),
(8, 'Partie "Design"', 'Vous trouvez dans cette rubrique plusieurs astuces relatives au web design ðŸ˜„', 'Adobe.jpg', 'rubrique-8.jpg', 'B'),
(10, 'Rubrique ajoutÃ© par backoffice', 'Cette rubrique a Ã©tÃ© ajoutÃ© par les formulaires du backoffice', 'header1-2.png', 'rubrique-9.png', 'C');

-- --------------------------------------------------------

--
-- Structure de la table `titre`
--

CREATE TABLE IF NOT EXISTS `titre` (
  `idtitre` int(11) NOT NULL AUTO_INCREMENT,
  `libelletitre` varchar(255) NOT NULL,
  `ordretitre` int(11) NOT NULL,
  `article` int(11) NOT NULL,
  PRIMARY KEY (`idtitre`),
  KEY `article` (`article`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `titre`
--

INSERT INTO `titre` (`idtitre`, `libelletitre`, `ordretitre`, `article`) VALUES
(10, 'PrÃ©parer votre environnement', 1, 6),
(11, 'Ouvrir le fichier index.html', 2, 6),
(12, 'CrÃ©er le formulaire', 3, 6),
(13, 'Affiche le code suite Ã  un Ã©vÃ¨nement', 4, 6),
(14, 'TÃ©lÃ©charger l''excÃ©cutable', 1, 7),
(15, 'Installer NodeJs', 2, 7),
(16, 'PrÃ©parer votre environement de travail', 3, 7),
(17, 'Exemple d''utilisation de nodeJs', 4, 7),
(18, 'CrÃ©ation du serveur nodejs', 5, 7),
(19, 'Lancer votre serveur sur un navigateur web', 6, 7),
(20, 'Exemple', 1, 8),
(21, 'Partie code', 1, 9),
(22, 'Ce qui donne le rÃ©sultat suivant', 2, 9),
(23, 'partie 1 ajoutÃ© par le backoffice', 1, 10),
(24, 'Ajout d''une deuxiÃ¨me partie', 2, 10),
(25, 'BLABLA', 1, 11);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `profil` varchar(10) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`iduser`, `login`, `password`, `nom`, `prenom`, `profil`) VALUES
(12, 'gilles', 'root', 'HEITAA', 'Gilles', 'admin'),
(13, 'philippe', 'Phil-2016', 'BOUQUET', 'Philippe', 'admin');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`rubrique`) REFERENCES `rubrique` (`idrub`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`titre`) REFERENCES `titre` (`idtitre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `titre`
--
ALTER TABLE `titre`
  ADD CONSTRAINT `titre_ibfk_1` FOREIGN KEY (`article`) REFERENCES `article` (`idart`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
