-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 09 déc. 2020 à 17:46
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
-- Structure de la table `quizz`
--

CREATE TABLE `quizz` (
  `id_quizz` int(11) NOT NULL,
  `quizz_name` varchar(255) NOT NULL,
  `quizz_q1` varchar(255) DEFAULT NULL,
  `quizz_q1r1` varchar(255) DEFAULT NULL,
  `quizz_q1r2` varchar(255) DEFAULT NULL,
  `quizz_q1r3` varchar(255) DEFAULT NULL,
  `quizz_q1r4` varchar(255) DEFAULT NULL,
  `quizz_q2` varchar(255) DEFAULT NULL,
  `quizz_q2r1` varchar(255) DEFAULT NULL,
  `quizz_q2r2` varchar(255) DEFAULT NULL,
  `quizz_q2r3` varchar(255) DEFAULT NULL,
  `quizz_q2r4` varchar(255) DEFAULT NULL,
  `quizz_q3` varchar(255) DEFAULT NULL,
  `quizz_q3r1` varchar(255) DEFAULT NULL,
  `quizz_q3r2` varchar(255) DEFAULT NULL,
  `quizz_q3r3` varchar(255) DEFAULT NULL,
  `quizz_q3r4` varchar(255) DEFAULT NULL,
  `quizz_q4` varchar(255) DEFAULT NULL,
  `quizz_q4r1` varchar(255) DEFAULT NULL,
  `quizz_q4r2` varchar(255) DEFAULT NULL,
  `quizz_q4r3` varchar(255) DEFAULT NULL,
  `quizz_q4r4` varchar(255) DEFAULT NULL,
  `quizz_q5` varchar(255) DEFAULT NULL,
  `quizz_q5r1` varchar(255) DEFAULT NULL,
  `quizz_q5r2` varchar(255) DEFAULT NULL,
  `quizz_q5r3` varchar(255) DEFAULT NULL,
  `quizz_q5r4` varchar(255) DEFAULT NULL,
  `quizz_q1rb` int(4) DEFAULT NULL,
  `quizz_q2rb` int(4) DEFAULT NULL,
  `quizz_q3rb` int(4) DEFAULT NULL,
  `quizz_q4rb` int(4) DEFAULT NULL,
  `quizz_q5rb` int(4) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `img_link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `quizz`
--

INSERT INTO `quizz` (`id_quizz`, `quizz_name`, `quizz_q1`, `quizz_q1r1`, `quizz_q1r2`, `quizz_q1r3`, `quizz_q1r4`, `quizz_q2`, `quizz_q2r1`, `quizz_q2r2`, `quizz_q2r3`, `quizz_q2r4`, `quizz_q3`, `quizz_q3r1`, `quizz_q3r2`, `quizz_q3r3`, `quizz_q3r4`, `quizz_q4`, `quizz_q4r1`, `quizz_q4r2`, `quizz_q4r3`, `quizz_q4r4`, `quizz_q5`, `quizz_q5r1`, `quizz_q5r2`, `quizz_q5r3`, `quizz_q5r4`, `quizz_q1rb`, `quizz_q2rb`, `quizz_q3rb`, `quizz_q4rb`, `quizz_q5rb`, `id_user`, `img_link`) VALUES
(9, 'Football', 'Combien de Coupes du monde a gagné Pelé ?', '0', '4', '3', '5', 'Quel ancien joueur n\'a jamais évolué en tant qu\'entraîneur ?', 'Zinedine Zidane', 'Michel Platine', 'Johan Cruyf', 'Raymond Kopa', 'Quand la France a-t-elle gagner sa 1ère coupe du monde ?', '2006', '2018', '1998 ', '2002', 'Où se déroulera la prochaine coupe du monde ?', 'Qatar', 'Stockholm ', 'Paris', 'Rio de Janeiro', 'Quel le club de ligue 1 à remporter le plus de fois le championnat ?', 'AS Saint Etienne', 'PSG', 'Marseille', 'FC Nantes', 3, 4, 3, 1, 1, 7, 'https://www.flaticon.com/svg/static/icons/svg/1165/1165187.svg'),
(10, 'Géographie', 'Sur quel continent le Nil coule-t-il ?', 'L’Océanie', 'L’Afrique', 'L’Europe', 'L’Amérique', 'Outre la Belgique et le Luxembourg, quel est le troisième pays formant le Benelux ?', 'Les Pays-Bas', 'L’Allemagne', 'La France', 'L\'Autriche', 'Quelle ville américaine est appelée la Grosse Pomme ?', 'San Francisco', 'Washington', 'New York', 'Chicago ', 'Quelles couleurs figurent sur le drapeau allemand ?', 'Noir - rouge - blanc', 'Noir - rouge - jaune', 'Noir - vert - jaune', 'Noir - orange - blanc ', 'Quel pays surnomme-t-on Terre Sainte ?', 'Arabie Saoudite', 'Italie', 'Israël ', 'Les Etats-Unis', 2, 1, 3, 3, 3, 7, 'https://www.flaticon.com/svg/static/icons/svg/921/921448.svg'),
(11, 'Jeux Vidéos', 'Quel est le jeu vidéo le plus vendu de tous les temps ?', 'Tétris', 'GTA V', 'Minecraft', 'Wii Sports', 'Comment s\'appelle le royaume où se déroule Super Mario ?', 'Le royaume Margarita', 'Le royaume de Peach', 'Le royaume Champignon (Bon)', 'Le royaume Shunshine', 'Dans La légende de Zelda, comment s\'appelle le héros chargé de sauver la princesse ?', 'Zelda', 'Link', 'Ganondorf', 'Snake', 'Quel est le signe distinctif de Donkey Kong (le singe géant) ?', 'Une casquette bleue', 'Une moustache', 'Un slip vert', 'Une cravate rouge', 'En quelle année le premier jeu vidéo a-t-il été créé ?', '1990', '1937', '1958 ', '1974', 1, 1, 2, 4, 3, 7, 'https://www.flaticon.com/svg/static/icons/svg/2728/2728799.svg'),
(12, 'Histoire', 'En quelle année, le Mur de Berlin est-il tombé ?', '1988', '1989', '1990', '1991', 'La première guerre mondiale débute en :', '1914 (Bon)', '1939', '1918', '1910', 'Que s\'est-il passé en 1944 ?', 'Femmes droit de vote', 'Fin 2ème guerre mondiale', 'Début du Front populaire', 'Mort d\'Hitler', 'Napelon 1er est battu a waterloo en :', '1826', '1790', '1815 ', '1783', 'Combien de temps à durer le règne de Louis XIV', '26ans', '43 ans', '59 ans', '72 ans', 2, 1, 1, 1, 4, 7, 'https://www.flaticon.com/svg/static/icons/svg/2794/2794089.svg'),
(13, 'Formule 1', 'Quel constructeur a décroché le plus de titres dans l’histoire de la Formule 1 ?', 'Williams', 'McLaren', 'Ferrari', 'Mercedes', 'Quel pilote actuel est devenu le plus jeune à remporter une victoire en Grand Prix ?', 'Max Verstappen', 'Sebastien Vettel', 'Charles Leclerc', 'Lewis Hamilton', 'Quel pilote a remporté le plus grand nombre de titres de champion du monde ? ', 'Schumacher ', 'Fangio', 'Alain Prost', 'Kimi Raikkonen', 'De quel nationalité est Max Verstappen ?', 'Néerlandaise ', 'Allemande', 'Autrichienne', 'Dannoise', 'Quel est le dernier français, vainqueur d\'un Grand Prix de F1 ? (Jusqu\'en 2020)', 'Alain Prost', 'Olivier Panis', 'Pierre Gasly', 'Charles Leclerc', 3, 1, 1, 1, 3, 7, 'https://www.flaticon.com/svg/static/icons/svg/2418/2418809.svg'),
(14, 'Littérature', 'La collection du \" Livre de Poche \"  date de :', '1948', '1934', '1960', '1953', 'Qui est J. K. Rowlings ?', 'La créatrice de Harry Potter', 'Une réalisatrice de films', 'Une athlète américaine', 'Une femme politique', 'Le Cid, héros de la pièce de Corneille, est torturé par un conflit entre l’amour et : ', 'L\'honneur', 'L\'argent', 'La religion', 'La patrie', 'Quel est le maître de Scapin dans Les Fourberies de Scapin ? ', 'Harpagon', 'Léandre', 'Tartuffe', 'Sganarelle', '« Les sanglots longs des violons de l’automne Blessent mon cœur d’une langueur monotone. » Ces vers sont extraits d’un poème de :', 'Rimbaud', 'Baudelaire', 'Verlaine ', 'Apollinaire', 4, 1, 1, 1, 3, 7, 'https://www.flaticon.com/svg/static/icons/svg/3068/3068489.svg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmation_token` varchar(60) DEFAULT NULL,
  `confirmed_at` datetime NOT NULL DEFAULT current_timestamp(),
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
(5, 'Gomerinho', 'marvin.goliath95@gmail.com', '$2y$10$uJ9e/GuH1ZpAuENKfyKwyO7KJM2./Lb3i/lcazkM4QdrlX74zTD0W', '9LnNMjrkxtrbIApv3asA5FV29PBTJszLS0HSroGWPC6aooqCXRAumPtH06Qm', '2020-11-29 22:53:36', '', NULL, 1, '', '', '', ''),
(7, 'luka', 'luka.mangano@ynov.com', '$2y$10$52lg9s8kk2ahZl2IgUYRXe50Scs.pZgFSelCugOpD7uQhBOoYPbbi', NULL, '2020-12-09 09:40:21', '', NULL, 1, '', '', '', ''),
(8, 'mirado', 'miradofitiavana.ramanoelison@ynov.com', '$2y$10$krHIbtH1OBLaYeRyF3XikeuTAV8jXY0xFgxZgHGRcqSV4ZsTOGwYC', NULL, '2020-12-09 10:54:15', '', NULL, 0, '', '', '', ''),
(9, 'illa', 'mohamedabdallahi.illa@ynov.com', '$2y$10$IZmYtPsT320Qw5bgpPw/pOl3uPGd8SGsvNSTl9BY6nUNHxLb1WdOG', NULL, '2020-12-09 10:54:54', '', NULL, 0, '', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `quizz`
--
ALTER TABLE `quizz`
  ADD PRIMARY KEY (`id_quizz`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `quizz`
--
ALTER TABLE `quizz`
  MODIFY `id_quizz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `quizz`
--
ALTER TABLE `quizz`
  ADD CONSTRAINT `quizz_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
