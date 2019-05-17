-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 17 mai 2019 à 08:55
-- Version du serveur :  5.7.25
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chimerebdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `CLIENT`
--

CREATE TABLE `CLIENT` (
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(30) NOT NULL,
  `prenom_client` varchar(30) NOT NULL,
  `email_client` varchar(10) NOT NULL,
  `num_tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `COMMANDE`
--

CREATE TABLE `COMMANDE` (
  `id_commande` int(11) NOT NULL,
  `date_commande` date NOT NULL,
  `date_livraison` date NOT NULL,
  `type_commande` varchar(30) NOT NULL,
  `facture` tinyint(1) NOT NULL,
  `devis_accepter` tinyint(1) NOT NULL,
  `num_bijoux` int(11) NOT NULL,
  `type_bijoux` varchar(30) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_fiche_suivi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `FICHE_SUIVI`
--

CREATE TABLE `FICHE_SUIVI` (
  `id_fiche_suivi` int(11) NOT NULL,
  `date_modif` date NOT NULL,
  `etat` varchar(10) NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  `nb_heures` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_metier` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `METIER`
--

CREATE TABLE `METIER` (
  `id_metier` int(11) NOT NULL,
  `libelle_metier` varchar(30) NOT NULL,
  `id_fiche_suivi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `METIER`
--

INSERT INTO `METIER` (`id_metier`, `libelle_metier`, `id_fiche_suivi`) VALUES
(1, 'Fondeur/Mouleur', NULL),
(2, 'Polisseur', NULL),
(3, 'Tailleur', NULL),
(4, 'Sertisseur', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `UTILISATEUR`
--

CREATE TABLE `UTILISATEUR` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_utilisateur` varchar(30) NOT NULL,
  `prenom_utilisateur` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `email_utilisateur` varchar(30) NOT NULL,
  `num_tel` int(11) NOT NULL,
  `id_metier` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `UTILISATEUR`
--

INSERT INTO `UTILISATEUR` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `login`, `mdp`, `email_utilisateur`, `num_tel`, `id_metier`) VALUES
(1, 'chimere', 'zoro', 'chimere', 'e353722e792f9394a0bed45e2883f232', 'chimere@gmail.com', 48399383, 1),
(2, 'lego', 'toto', 'chimere2', 'e353722e792f9394a0bed45e2883f232', 'chimere2@gmail.com', 48399383, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `CLIENT`
--
ALTER TABLE `CLIENT`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `COMMANDE`
--
ALTER TABLE `COMMANDE`
  ADD PRIMARY KEY (`id_commande`),
  ADD UNIQUE KEY `COMMANDE_FICHE_SUIVI0_AK` (`id_fiche_suivi`),
  ADD KEY `COMMANDE_CLIENT0_FK` (`id_client`);

--
-- Index pour la table `FICHE_SUIVI`
--
ALTER TABLE `FICHE_SUIVI`
  ADD PRIMARY KEY (`id_fiche_suivi`),
  ADD UNIQUE KEY `FICHE_SUIVI_METIER0_AK` (`id_metier`),
  ADD UNIQUE KEY `FICHE_SUIVI_COMMANDE1_AK` (`id_commande`),
  ADD KEY `FICHE_SUIVI_UTILISATEUR0_FK` (`id_utilisateur`);

--
-- Index pour la table `METIER`
--
ALTER TABLE `METIER`
  ADD PRIMARY KEY (`id_metier`),
  ADD UNIQUE KEY `METIER_FICHE_SUIVI0_AK` (`id_fiche_suivi`);

--
-- Index pour la table `UTILISATEUR`
--
ALTER TABLE `UTILISATEUR`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD KEY `UTILISATEUR_METIER` (`id_metier`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `METIER`
--
ALTER TABLE `METIER`
  MODIFY `id_metier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `COMMANDE`
--
ALTER TABLE `COMMANDE`
  ADD CONSTRAINT `COMMANDE_CLIENT0_FK` FOREIGN KEY (`id_client`) REFERENCES `CLIENT` (`id_client`),
  ADD CONSTRAINT `COMMANDE_FICHE_SUIVI1_FK` FOREIGN KEY (`id_fiche_suivi`) REFERENCES `FICHE_SUIVI` (`id_fiche_suivi`);

--
-- Contraintes pour la table `FICHE_SUIVI`
--
ALTER TABLE `FICHE_SUIVI`
  ADD CONSTRAINT `FICHE_SUIVI_COMMANDE2_FK` FOREIGN KEY (`id_commande`) REFERENCES `COMMANDE` (`id_commande`),
  ADD CONSTRAINT `FICHE_SUIVI_METIER` FOREIGN KEY (`id_metier`) REFERENCES `METIER` (`id_metier`),
  ADD CONSTRAINT `FICHE_SUIVI_UTILISATEUR0_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `UTILISATEUR` (`id_utilisateur`);

--
-- Contraintes pour la table `UTILISATEUR`
--
ALTER TABLE `UTILISATEUR`
  ADD CONSTRAINT `UTILISATEUR_METIER` FOREIGN KEY (`id_metier`) REFERENCES `METIER` (`id_metier`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
