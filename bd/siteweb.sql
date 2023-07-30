-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 29 oct. 2022 à 22:36
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `siteweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `nouvelle` int(11) NOT NULL,
  `internaute` int(11) NOT NULL,
  `dateC` date NOT NULL,
  `commentaire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `nouvelle`, `internaute`, `dateC`, `commentaire`) VALUES
(1, 1, 1, '2022-10-24', 'C\'est bien'),
(2, 2, 1, '2022-10-24', 'Tres cool'),
(3, 1, 2, '2022-10-25', 'OK');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `telephone` text NOT NULL,
  `whatsapp` text NOT NULL,
  `facebook` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `telephone`, `whatsapp`, `facebook`) VALUES
(1, '0990511958', '+243990511958', 'fba24@gma');

-- --------------------------------------------------------

--
-- Structure de la table `contenu`
--

CREATE TABLE `contenu` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `directeur` int(11) NOT NULL,
  `categorie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contenu`
--

INSERT INTO `contenu` (`id`, `titre`, `description`, `image`, `directeur`, `categorie`) VALUES
(1, 'Historique de l’Ecole Primaire Mwange/Sourds-Muets', 'En 1991, dans les enceintes du centre pour handicapés physiques Heshima Letu comme branche des personnes vivants avec handicap auditif, l’école a timidement débuté. L’école devient autonome  avec dénomination de l’Ecole Primaire Mwange/Sourds-Muets  le 13/Aout 1992 sous le patronage de Saint Louis IX. « MWANGE » qui signifie à kinande « Tumwange »ou « Entraide » .A cette même date, l’Ecole Primaire Mwange/Sourds-Muet organise une première année préparatoire pour les enfants vivant avec handicap auditif avec Six classes autorisées (1ereannée à 6emeannée).\r\nL’Ecole Primaire Mwange/Sourds-Muet  initié par les  religieux frères de l’assomption qui constataient  l’abandon des Sourds-Muet  par leurs familles qui n’osaient pas s’imaginer la possibilité de leur scolarisation et qui pensaient qu’engendrer un Sourds-muet était une malédiction pour la famille. Cet handicap éloigne ces jeunes de toute insertion sociale.\r\nEn créant cette œuvre caritative, les frères de l’Assomption avaient comme objectif « de préparer à la vie les personnes vivants avec handicaps, de développer  leurs aptitudes physiques ; intellectuelles, morale et professionnelles en favorisant  leurs insertion sociales, leur intégration dans la vie socioprofessionnelle ».\r\n', 'epmwange7.jpg', 1, 'Historique'),
(2, 'Apropos de nous', '	Dénomination de l’école : Ecole Primaire Mwange/Sourds-Muets.<br>\r\n	Arrêté d’agrément : MINEPSP/CABMIN/0100/2004 du 21 Juin.<br>\r\n	Ville d’implantation : Butembo.<br>\r\n	Commune : Bulengera.<br>\r\n	Quartier : De l’Evêché.<br>\r\n	Cellule : Vuhumbi n°34.<br>\r\n	Adresse postale : 255 Butembo.<br>\r\n	Régime de vacation : Unique/avant midi.<br>\r\n	Régime de gestion : Conventionnée Catholique.\r\n', '37276-ep.jpg', 1, 'Apropos');

-- --------------------------------------------------------

--
-- Structure de la table `directeur`
--

CREATE TABLE `directeur` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `postnom` varchar(25) NOT NULL,
  `genre` varchar(1) NOT NULL,
  `numTel` varchar(20) NOT NULL,
  `mail` text NOT NULL,
  `pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `directeur`
--

INSERT INTO `directeur` (`id`, `nom`, `postnom`, `genre`, `numTel`, `mail`, `pwd`) VALUES
(1, 'Germaine', 'Mupenda', 'F', '0994353215', 'germaine@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b');

-- --------------------------------------------------------

--
-- Structure de la table `internaute`
--

CREATE TABLE `internaute` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `postnom` varchar(25) NOT NULL,
  `numTel` varchar(20) NOT NULL,
  `pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `internaute`
--

INSERT INTO `internaute` (`id`, `nom`, `postnom`, `numTel`, `pwd`) VALUES
(1, 'Baraka', 'Kinywa', '0993342115', '4a7d1ed414474e4033ac29ccb8653d9b'),
(2, 'Kinywa', 'Baraka', '0993342115', '4a7d1ed414474e4033ac29ccb8653d9b');

-- --------------------------------------------------------

--
-- Structure de la table `nouvelles`
--

CREATE TABLE `nouvelles` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `dateP` date NOT NULL,
  `directeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `nouvelles`
--

INSERT INTO `nouvelles` (`id`, `titre`, `description`, `image`, `dateP`, `directeur`) VALUES
(1, 'Ambiance Scolaire à l\'EP Mwange', 'Ici, nous apprenons à nos enfants de s\'épanouire dans ce milieu de travail pour futurs responsables.', '48752-epmwange4.jpg', '2022-10-22', 1),
(2, 'Rentrée Scolaire 2022', 'Les écoliers regagnent les bancs de l\'école avec joie et sont prêts pour bien débuter l\'année. Envoyer vos enfants aussi pour profiter des enseignants de qualité.', '43743-epmwange5.jpg', '2022-09-24', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `directeur`
--
ALTER TABLE `directeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `internaute`
--
ALTER TABLE `internaute`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `nouvelles`
--
ALTER TABLE `nouvelles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contenu`
--
ALTER TABLE `contenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `directeur`
--
ALTER TABLE `directeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `internaute`
--
ALTER TABLE `internaute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `nouvelles`
--
ALTER TABLE `nouvelles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
