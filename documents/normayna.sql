-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 07 nov. 2022 à 07:37
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `normayna`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(255) NOT NULL,
  `dataFilter_categorie` varchar(255) NOT NULL,
  `url_categorie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`, `dataFilter_categorie`, `url_categorie`) VALUES
(0, 'Tous nos plats', 'AllProduct', ''),
(1, 'Entrées', 'Entrees', ''),
(2, 'Plats', 'Plats', ''),
(3, 'Suppléments', 'Supplements', ''),
(4, 'Patisseries orientales', 'Patisseries', ''),
(5, 'Desserts', 'Desserts', ''),
(6, 'Boissons', 'Boissons', '');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `id_event` int(11) NOT NULL,
  `theme_event` varchar(255) DEFAULT NULL,
  `adress_event` varchar(255) DEFAULT NULL,
  `date_event` datetime DEFAULT NULL,
  `description_event` text NOT NULL,
  `video_event` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id_event`, `theme_event`, `adress_event`, `date_event`, `description_event`, `video_event`) VALUES
(1, 'gateau orientale', '10 chemin de toto 76500', '2022-07-04 19:28:30', 'to many snack different kind of', '<iframe src=\"https://www.facebook.com/plugins/video.php?height=128&href=https%3A%2F%2Fwww.facebook.com%2F542741335848539%2Fvideos%2F689845509036942%2F&show_text=false&width=360&t=0\" width=\"360\" height=\"128\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(2, 'theme 1025', '55 rue toto 75200', '2022-07-08 19:28:30', 'description de gateau theme 2', '<iframe src=\"https://www.facebook.com/plugins/video.php?height=128&href=https%3A%2F%2Fwww.facebook.com%2F542741335848539%2Fvideos%2F1068517006604300%2F&show_text=false&width=360&t=0\" width=\"360\" height=\"128\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(3, 'gateau non orientale', '', '2022-07-22 19:28:30', '', '<iframe src=\"https://www.facebook.com/plugins/video.php?height=128&href=https%3A%2F%2Fwww.facebook.com%2F542741335848539%2Fvideos%2F267397658830595%2F&show_text=false&width=360&t=0\" width=\"360\" height=\"128\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(4, 'theme 4', '55 rue hiphop 75200', '2022-07-02 19:28:30', 'description de gateau theme 4', ''),
(5, 'beach', 'mm 16 rue x', '2022-08-01 12:00:00', 'toto', ''),
(6, 'plage', 'plage  10 ', '2022-07-28 20:32:52', 'toto ', ''),
(7, 'Argane', 'Rouen 10 rue de la joix', '2022-08-26 23:58:54', 'juste un test donc c\'est rien', ''),
(8, 'Import-export', 'bah une adresse 10556', '2022-08-27 21:58:54', 'franchement j\'ai rien a dire', ''),
(16, 'last teste', 'a', '2022-09-05 15:09:00', 'description', '<iframe src=\"https://www.facebook.com/plugins/video.php?height=128&href=https%3A%2F%2Fwww.facebook.com%2F542741335848539%2Fvideos%2F889103645141636%2F&show_text=false&width=360&t=0\" width=\"360\" height=\"128\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id_produit` int(11) NOT NULL,
  `titre_produit` varchar(255) NOT NULL,
  `prix_produit` float NOT NULL,
  `url_produit` varchar(255) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `description_produit` varchar(600) DEFAULT NULL,
  `dataFilter_produit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_produit`, `titre_produit`, `prix_produit`, `url_produit`, `id_categorie`, `description_produit`, `dataFilter_produit`) VALUES
(1, 'Soupes Chorba ou Harira', 3.5, './assets/images/Soupe-Harira.jpg', 1, '', 'Entrees'),
(2, 'Brick Viande Hachée', 2.5, './assets/images/Brick-Viande-hachee.jpeg', 1, '', 'Entrees'),
(3, 'Brick au Thon', 2.5, './assets/images/brick-au-thon.jpeg', 1, '', 'Entrees'),
(4, 'Mselen Farcie au Viande Hachée', 3, './assets/images/msemen-kefta.jpg', 1, '', 'Entrees'),
(5, 'Msemen Farcie au Legumes', 2.5, './assets/images/msemen-farci-legume.jpg', 1, '', 'Entrees'),
(6, 'Salade mechouis', 3.5, './assets/images/salade-mechoui.jpg', 1, '', 'Entrees'),
(7, 'Salade composée crudités', 3, './assets/images/salade-aux-pates-crudites.jpg', 1, '', 'Entrees'),
(8, 'Brick Légumes', 2.5, './assets/images/brickaux-legumes.jpeg', 1, '', 'Entrees'),
(9, 'Brick poulet', 2.5, './assets/images/bricks-au-poulet.jpg', 1, '', 'Entrees'),
(10, 'Couscous Royal(Poulet, Merguez, Agneau)', 13, './assets/images/couscous-royal.jpeg', 2, '', 'Plats'),
(11, 'Couscous Agneau', 11, './assets/images/couscous-agneau.jpg', 2, '', 'Plats'),
(12, 'Couscous Poulet', 9.5, './assets/images/coucous-poulet.jpg', 2, '', 'Plats'),
(13, 'Couscous Végétarien', 8.5, './assets/images/couscous-vegetarien.jpeg', 2, '', 'Plats'),
(14, 'Couscous Sucré salé', 11, './assets/images/couscous-tfaya-sucre.jpg', 2, 'Poulet, oignons confits, raisins secs', 'Plats'),
(15, 'Tajine de Poulet aux olives', 8.5, './assets/images/tajine-poulet.jfif', 2, 'Accompagnement pomme de terre sautée', 'Plats'),
(16, 'Tajine d\'agneau aux pruneaux et amandes', 10.5, './assets/images/Tajine-pruneaux.jpg', 2, 'Accompagnement pomme de terre sautée', 'Plats'),
(17, 'Pastille individuelles sucrée salée au poulet', 4.5, './assets/images/Pastilla-marocaine-au-poulet-et-amandes.jpg', 2, 'Amandes et confits d\'oignons', 'Plats'),
(18, 'Pastille individuelles au poisson', 7, './assets/images/pastilla-au-poisson.jpg', 2, 'Trio de poissons, crustacés et vermicelles de riz', 'Plats'),
(19, 'Merguez', 2, './assets/images/merguez.jpg', 3, '', 'Suppléments'),
(20, 'Brochette de poulet', 2.5, './assets/images/Brochettes-de-poulet.jpg', 3, '', 'Suppléments'),
(21, 'Brochettes d\'Agneau', 3, './assets/images/brochettes-d-agneau-aux-poivrons-et-feta.jpg', 3, '', 'Suppléments'),
(22, 'Plateaux de patisseries', 25, './assets/images/plateau30.png', 4, 'Plateaux de 30 piéces, Cornes de gazelles, Makrout, Boules de neige coco, Briouates aux Amandes Baklawa roumé aux amandes, Sablé confiture', 'Patisseries'),
(23, 'Plateaux de patisseries', 8.5, './assets/images/plateau.jpg', 4, 'Plateaux de 10 piéces, Cornes de gazelles, Makrout, Boules de neige coco, Briouates aux Amandes Baklawa roulé aux amandes, Sablé confiture', 'Patisseries'),
(24, 'Patisseries à l\'unité', 0.95, './assets/images/corne_de_gazelle.jpg', 4, 'Patisserie a l\'unité, Cornes de gazelles, Makrout, Boules de neige coco, Briouates aux Amandes Baklawa roulé aux amandes, Sablé confiture', 'Patisseries'),
(25, 'Msemen', 1.5, './assets/images/Msemen.jpg', 4, 'Galette feuilletée', 'Patisseries'),
(26, 'Baghrir', 1.5, './assets/images/Baghrir.jpg', 4, 'Crêpes milles trous', 'Patisseries'),
(27, 'Tiramisou', 2.5, './assets/images/tiramisou.jpg', 5, 'Tiramisou', 'Desserts'),
(28, 'Pepsi 33Cl', 1.5, './assets/images/pepsi.jpg', 6, '', 'Boissons'),
(29, '7up 33Cl', 1.5, './assets/images/7up-15l.jpg', 6, '', 'Boissons'),
(30, 'Ice Tea 33Cl', 1.5, './assets/images/boisson-ice-tea-peche.jpg', 6, '', 'Boissons'),
(31, 'Orangina 33Cl', 1.5, './assets/images/orangina-15l.jpg', 6, '', 'Boissons'),
(32, 'Badoit 33Cl', 1.5, './assets/images/badoit.jpg', 6, '', 'Boissons'),
(33, 'FREEZ (Mojito) 275ml', 2.5, './assets/images/freez-mojito-275ml.jpg', 6, '', 'Boissons'),
(34, 'FREEZ (Grenadine) 275ml', 2.5, './assets/images/freez-grenadine-275ml.jpg', 6, '', 'Boissons'),
(35, 'FREEZ (Kiwi) 275ml', 2.5, './assets/images/freez-kiwi-275ml.jpg', 6, '', 'Boissons'),
(36, 'FREEZ (Fraise) 275ml', 2.5, './assets/images/freez-fraise-mix-275ml.jpg', 6, '', 'Boissons'),
(37, 'FREEZ (Lemon Ice) 275ml', 2.5, './assets/images/freez20lemon20ice20275ml1-600x600.jpg', 6, '', 'Boissons'),
(38, 'FREEZ (Ananas Coco) 275ml', 2.5, './assets/images/freez-ananas-coco-275ml.jpg', 6, '', 'Boissons'),
(39, 'FREEZ (Blue Hawaï) 275ml', 2.5, './assets/images/freez-blue-hawai-275ml.jpg', 6, '', 'Boissons'),
(40, 'Orangina 1.5L', 2.5, './assets/images/orangina-15l.jpg', 6, '', 'Boissons'),
(41, '7up 1.5L', 2.5, './assets/images/7up-15l.jpg', 6, '', 'Boissons'),
(42, 'Oasis 1.5L', 2.5, './assets/images/oasis15l-1.jpg', 6, '', 'Boissons'),
(43, 'Eau Evian 1.5L', 2, './assets/images/eau-evian.jpg', 6, '', 'Boissons'),
(44, 'Thé à la manthe', 1.5, './assets/images/thé-à-la-menthe-marocain.jpg', 6, '', 'Boissons');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'Bouazzi', 'Hamza', 'hamza@gmail.com', 'azer1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`id_event`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `FK_prdcat` (`id_categorie`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `FK_prdcat` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
