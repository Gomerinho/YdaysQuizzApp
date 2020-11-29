-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 29 nov. 2020 à 23:08
-- Version du serveur :  10.4.16-MariaDB
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quizzapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmation_token` varchar(60) NOT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  `reset_token` varchar(60) NOT NULL,
  `reset_at` datetime DEFAULT NULL,
  `admin` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `profil_pic` text NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `confirmation_token`, `confirmed_at`, `reset_token`, `reset_at`, `admin`, `name`, `first_name`, `profil_pic`, `bio`) VALUES
(4, 'Gomerinh', 'a@a.com', '$2y$10$Tr1DtE/XPgrkWhBMndY.Hu8.nGybAx0iszTk7Dd6YTEJR8OaG0fim', 'MegqNW0EvrtXprEItKGRjKbsLwvYfQ7HP65Fclk9z85T3Vk8UENA0jK9JXUm', NULL, '', NULL, 0, '', '', '', ''),
(5, 'Gomerinho', 'marvin.goliath95@gmail.com', '$2y$10$uJ9e/GuH1ZpAuENKfyKwyO7KJM2./Lb3i/lcazkM4QdrlX74zTD0W', '9LnNMjrkxtrbIApv3asA5FV29PBTJszLS0HSroGWPC6aooqCXRAumPtH06Qm', '2020-11-29 22:53:36', '', NULL, 0, '', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
