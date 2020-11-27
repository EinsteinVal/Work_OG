-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 25 Mai 2018 à 13:57
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tuto_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `pre_commande`(
    `id` INT(11) NOT NULL,
    `taille` VARCHAR(128) NOT NULL,
    `nom` VARCHAR(128) NOT NULL,
    `prenom` VARCHAR(128) NOT NULL,
    `adresse` VARCHAR(255) NOT NULL,
    `code_postal` INT(5) NOT NULL,
    `ville` VARCHAR(128) NOT NULL,
    `email` VARCHAR(128) NOT NULL,
    `mobile` VARCHAR(128) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `pre_commande`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `pre_commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
