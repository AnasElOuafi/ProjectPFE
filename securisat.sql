-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 17 avr. 2024 à 00:34
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `securisat`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titre` varchar(150) NOT NULL,
  `equipements` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text NOT NULL,
  `avatar` varchar(150) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `titre`, `equipements`, `description`, `avatar`, `date`) VALUES
(2, 'camera 4k', 'camera', 'Installation de caméras de surveillance pour renforcer la sécurité, comprenant le positionnement stratégique des caméras et le raccordement au système d\'enregistrement pour une surveillance efficace.', 'serv1.jpg', '2024-03-09 01:13:41'),
(8, 'New Post', 'Système d\'alarme', 'Installation d\'un système d\'alarme pour protéger votre domicile ou votre entreprise, impliquant la fixation des capteurs, la connexion à l\'unité de contrôle et la configuration des paramètres de sécurité.', 'serv2.jpg', '2024-03-09 01:29:11'),
(12, 'Configuration', 'Dvr', 'L\'enregistreur de télésurveillance est un dispositif essentiel pour stocker les vidéos et les images capturées par les caméras de surveillance. Il permet de conserver les enregistrements pour une analyse ultérieure en cas d\'incident et offre également la possibilité de visionner en temps réel les flux vidéo provenant des caméras connectées au système.\r\n                                 L\'installation de l\'enregistreur de télésurveillance comprend la connexion des caméras, le paramétrage des options d\'enregistrement, ainsi que la configuration de l\'accès à distance pour une surveillance à partir de tout endroit muni d\'une connexion Internet.', 'dvr.jpg', '2024-03-09 01:30:43');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`userID`, `username`, `email`, `comment`) VALUES
(2, 'superadmin', 'Admin@info.fr', 'teeeeeeeeeeeeeeeeeeeeeeeeeest'),
(4, 'superadmin', 'Admin@info.fr', 'test2\r\n22'),
(5, 'El_Ouafi', 'ouafi.info@gmail.com', 'ouafi dev'),
(6, 'sami', 'sami@gmail.com', 'salut securisat');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `object` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `etat` int(11) NOT NULL COMMENT '0 = non lu, 1 = lu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `object`, `email`, `message`, `date`, `etat`) VALUES
(6, 'newAdmin', 'test this object  ', 'test@hotmail.com', 'TEST THIS OBJECT', '2024-02-01', 1),
(9, 'client', 'demande devis', 'client@gmail.com', 'test pour devis', '2024-03-19', 1),
(10, 'sami', '', 'sami-test@gmail.com', '', '2024-03-23', 1);

-- --------------------------------------------------------

--
-- Structure de la table `packs`
--

CREATE TABLE `packs` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `prix` varchar(50) NOT NULL,
  `period` varchar(50) NOT NULL,
  `line1` varchar(50) NOT NULL,
  `line2` varchar(50) NOT NULL,
  `line3` varchar(50) NOT NULL,
  `line4` varchar(50) NOT NULL,
  `line5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `packs`
--

INSERT INTO `packs` (`id`, `titre`, `prix`, `period`, `line1`, `line2`, `line3`, `line4`, `line5`) VALUES
(2, 'camera', '300', 'janvier', 'camera1', 'camera2', 'camera3', 'camera4', 'camera5'),
(3, 'Installation', '500', 'mars', 'Installation1', 'Installation2', 'Installation3', 'Installation4', 'Installation5'),
(5, 'Pack Promo', '-20%', 'janv - mars', '2 camera HD', 'dvr 64G', 'metrage apartir 220m', '------', '-------'),
(6, 'testing', '-20%', 'janv - mars', 'test', 'test', 'test', '---------', '-----------');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `icon`, `name`, `description`) VALUES
(3, 'cctv', 'Installation', 'L\'installation fait référence au processus de mise en place et de configuration initiale d\'un équipement, \r\nd\'un logiciel ou d\'un système afin qu\'il fonctionne correctement et soit prêt à être utilisé.'),
(7, 'surveillance', 'Configuration', 'La configuration consiste à ajuster les paramètres et les réglages d\'un système pour répondre aux besoins spécifiques, en personnalisant les options et les fonctionnalités pour une utilisation optimale.'),
(8, 'camera', 'Maintenance', 'La maintenance désigne l\'ensemble des activités visant à assurer le bon fonctionnement, la fiabilité et la durabilité des équipements, des systèmes ou des installations, par le biais d\'actions préventives, correctives et prédictives.'),
(9, 'double', 'Réparation et Service', 'Notre service de réparation offre des solutions complètes pour restaurer et entretenir vos appareils, assurant leur bon fonctionnement et prolongeant leur durée de vie.'),
(10, 'security-system', 'Monitorage', 'Le monitorage consiste à surveiller en temps réel et de manière proactive des systèmes, des réseaux ou des processus afin de détecter tout problème ou incident potentiel.'),
(11, 'recorder', 'Contrôle d\'accès', 'Le contrôle d\'accès est un système de sécurité qui restreint l\'accès à des zones spécifiques, assurant ainsi la protection des biens et des individus.');

-- --------------------------------------------------------

--
-- Structure de la table `temoingnages`
--

CREATE TABLE `temoingnages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `review` text NOT NULL,
  `avatar` varchar(150) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `temoingnages`
--

INSERT INTO `temoingnages` (`id`, `name`, `review`, `avatar`, `date`) VALUES
(1, 'test', 'etste', 'LogoWebMyStique.jpg', '2024-03-08 00:32:08'),
(10, 'poiuyy', 'dfqsdfqsd', 'blog-2.jpg', '2024-02-24 12:58:12'),
(11, 'femme', 'fzzz', 'testimonial-2.jpg', '2024-02-24 13:58:58'),
(12, 'sami', 'salut secursiat', '_a6d3a96a-16b2-412c-ba01-885f498dec71.jpeg', '2024-03-23 10:20:20');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `date`, `image`) VALUES
(1, 'Admin', 'superadmin', 'superadmin@securisat.tn', '2023-10-12', 'avatar.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`userID`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `packs`
--
ALTER TABLE `packs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `temoingnages`
--
ALTER TABLE `temoingnages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `packs`
--
ALTER TABLE `packs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `temoingnages`
--
ALTER TABLE `temoingnages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
