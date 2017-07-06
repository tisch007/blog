-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 15 Juin 2017 à 08:37
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `news`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `numPost` int(11) NOT NULL,
  `auteur` text CHARACTER SET latin1 NOT NULL,
  `contenu` text CHARACTER SET latin1 NOT NULL,
  `dateAjout` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `numPost`, `auteur`, `contenu`, `dateAjout`) VALUES
(37, 74, 'Chris', 'merci', '2017-06-01 17:57:07'),
(36, 74, 'Cyrille', 'Merci pour cet article instructif !', '2017-06-01 17:56:47');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `auteur` varchar(30) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `chapo` text NOT NULL,
  `contenu` text NOT NULL,
  `dateAjout` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `auteur`, `titre`, `chapo`, `contenu`, `dateAjout`) VALUES
(74, 'Chris  ', 'Le Cervin ', 'La vue du Cervin depuis Zermatt, c\'est quelque chose ! Une montagne comme la dessine les enfants au coup de crayon balbutiant, la pyramide parfaite, pas Ã©tonnant que dÃ¨s le milieu du 19eme siÃ¨cle, les pionniers de l\'alpinisme, anglais et italiens en tÃªte, aient eu envie de se farcir ce colosse de 4 478 mÃ¨tres. ', 'Et l\'histoire de son ascension commence le 12 juillet 1865, par un beau duel Angleterre-Italie. Les anglais sont reprÃ©sentÃ©s par Edward Whymper, sujet de sa majestÃ©, et les italiens par un berger au nom Ã  consonance franÃ§aise: Jean-Antoine Carrel. Et quand ce dernier, sans prÃ©venir personne, attaque l\'ascension par le versant italien, Whymper, pris au dÃ©pourvu, rassemble ses hommes et dÃ©cide de se lancer en catastrophe Ã  l\'assaut du mythe par le cÃ´tÃ© suisse, via Zermatt. Deux jours plus tard, Whymper revient en vainqueur mais il lui manque une partie de sa cordÃ©e: quatre hommes, sur les sept que comptait l\'expÃ©dition au dÃ©part, sont morts ( c\'est la premiÃ¨re grande tragÃ©die de l\'histoire de l\'alpinisme) Pendant ce temps lÃ , Carrel et ses amis se montrÃ¨rent plus prudents et atteignirent finalement le sommet du Cervin le 17 juillet, via lâ€™arÃªte du Lion. Ils rentreront au bercail tous sains et saufs. Cette rÃ©ussite tragique de nos amis anglais allait marquer la fin de ce qu\'il est coutume d\'appeler : l\'Ã¢ge d\'or de l\'alpinisme. Avec la conquÃªte du Cervin, tous les grands sommets des Alpes (Eiger, Grandes Jorasses, etc.) sont, en effet, dÃ©sormais conquis. L\'objectif sera dorÃ©navant la conquÃªte des diffÃ©rentes faces, par toutes les voies possibles et inimaginables, y compris en conditions hivernales. Et sur le Cervin, il faudra attendre 1969 pour voir la derniÃ¨re face conquise: la redoutable nord-nord-ouest.', '2017-06-04 18:42:55'),
(78, 'Chris ', 'Jean-Christophe Lafaille', 'Jean-Christophe Lafaille nâ€™Ã©tait pas bien grand (1,60m) et pourtant le trou quâ€™il a laissÃ© dans la communautÃ© des alpinistes est bÃ©ant. Sa disparition en janvier 2006 au Makalu est encore dans toute les mÃ©moires et ils sont nombreux Ã  regretter le dÃ©part prÃ©maturÃ© de celui qui avait certainement encore beaucoup Ã  faire en Himalaya et ailleurs.', 'Sâ€™il a commencÃ© lâ€™escalade dÃ¨s son plus jeune Ã¢ge dans les annÃ©es 70, câ€™est en 1992 quâ€™a vÃ©ritablement basculÃ© la carriÃ¨re de Jean-Christophe Lafaille, lorsque Pierre Beghin lâ€™emmena avec lui dÃ©couvrir lâ€™Himalaya et la redoutable face sud de lâ€™Annapurna qui lui rÃ©serva un accueil glaciale puisquâ€™il assista impuissant Ã  chute qui couta la vie Ã  ce dernier avant de subir une descente dantesque de plusieurs jours, seul, avec un bras fracassÃ© par une chute de pierre. Il mettra dix ans avant de pouvoir en parler au travers dâ€™un livre poignant: Â« Prisonnier de lâ€™Annapurna Â». MÃªme sâ€™ils nâ€™atteignirent pas le sommet, la voie quâ€™ils empruntÃ¨rent cette annÃ©e-lÃ  porte aujourdâ€™hui un nom qui fait scintiller des Ã©toiles dans les yeux des alpinistes ambitieux : la Beghin-Lafaille.\r\n\r\nMais comme souvent avec les alpinistes habitÃ©s par les sommets, ce drame personnel, mÃªme sâ€™il le marqua au fer rouge, ne lui enlÃ¨vera ni sa motivation, ni son envie. Il reviendra ainsi lâ€™annÃ©e suivante dans la chaine Himalayenne pour rÃ©ussir lâ€™ascension de son premier 8000 mÃ¨tres: le Cho Oyu. En 1994, câ€™est au Shishapangma quâ€™il ouvrira une nouvelle voie, chose qui deviendra une habitude pour cet esthÃ¨te des hautes cimes qui grimpait toujours sans oxygÃ¨ne et souvent en solo, comme au Manaslu en 2000, au Daulaghiri en 2003 et surtout en 1996, annÃ©e de son fameux enchainement Gasherbrum II et Gasherbrum I en moins de quatre jours. En 2004, il rÃ©alise ce quâ€™il considÃ¨re comme la premiÃ¨re en hiver du Shishapangma mais lâ€™alpiniste italien Simone Moro, spÃ©cialiste des hivernales sur les 8000 et auteur lui-mÃªme de la seconde ascension Ã  lâ€™hiver 2005, remettra en cause ce titre, arguant que le 11 dÃ©cembre â€“ date de lâ€™ascension de Lafaille â€“ nâ€™est pas en hiver mais encore en automne.', '2017-06-01 17:55:41'),
(75, 'Chris', 'Lâ€™Eiger', 'Lâ€™Eiger se situe en Suisse et culmine Ã  3970 mÃ¨tres. VoilÃ  pour la prÃ©sentation rapide. Et maintenant, si vous le voulez bien, nous allons nous pencher sur le principal intÃ©rÃªt de lâ€™Eiger, pour nous, fans dâ€™alpinisme: sa lÃ©gendaire et redoutable face nord ! Non, parce que le resteâ€¦ les rando, les balades et le train qui fait tchou-tchou sur le chemin de fer Ã  crÃ©maillÃ¨re, franchement, on sâ€™en fout. Nous, on veut du lourd, on veut la terrifiante histoire de la face nord! Alors cette histoire la voici:', 'Ce quâ€™il y a de super avec la face nord de lâ€™Eiger, câ€™est que dÃ¨s les annÃ©es 30, depuis la longue vue de lâ€™auberge de la Kleine Scheidegg on peut assister en direct aux tragÃ©dies tout en sirotant un petit jus et en prenant les paris. Et les premiers malades mentaux Ã  se donner en spectacle et Ã  se lancer Ã  lâ€™assaut de la vertigineuse face de 1600 mÃ¨tres, sont trois allemands, en 1934. Les spectateurs Ã©bahis assisteront Ã  leur magnifique Ã©chec suite Ã  la chute de Willy Beck, premier fracassÃ© de la face nord. En 1935, câ€™est encore des allemands qui sâ€™y collent: Karl Mehringer et Max Sedlmayr. Mais le public est dÃ©Ã§u car ils mourront Ã  lâ€™abri des regards, perdus dans une tempÃªte de neigeâ€¦ Lâ€™annÃ©e suivante, en revanche, les badauds en auront pour leur argentâ€¦\r\n\r\nCette fois-ci, ils Ã©taient quatre: Andreas Hinterstoisser, Edi Rainer, Willy Angerer et Toni Kurz. Encore des allemands. Hinterstoisser fut emportÃ© par une avalanche, Angerer Ã©crabouillÃ© contre la paroi et Rainer asphyxiÃ© en tentant dâ€™assurer tout ce joli petit monde. Kurz, lui, finit par mourir dâ€™Ã©puisement suspendu Ã  sa corde, sous les yeux des sauveteurs venus Ã  sa rencontre et, bien sÃ»r, des fidÃ¨les de lâ€™auberge de la Kleine Scheidegg qui auront tout le loisir dâ€™observer son cadavre se balancer au grÃ© du vent, jusquâ€™Ã  ce quâ€™on veuille bien venir le dÃ©crocher quelques jours plus tard. Cette sordide histoire fut lâ€™objet dâ€™un film sorti en 2008 et intitulÃ© North Face.', '2017-06-01 17:48:41'),
(76, 'Chris', 'Les Drus', 'Â« Jean a Ã©tÃ© foudroyÃ© au Dru Â». Avouez que Ã§a claque! Je nâ€™ai ni la classe, ni le courage du Jean Servettaz de Frison-Roche mais si demain je meurs comme un con, Ã©touffÃ© par un noyau de cerise, jâ€™aimerais que lâ€™officier dâ€™Ã©tat civil dise Ã  ma femme que jâ€™ai Ã©tÃ© Â« foudroyÃ© au Dru Â». Parce que les Drus, comme endroit mythique pour un fan dâ€™alpinisme, on peut difficilement faire mieuxâ€¦', 'Les Drus sont deux. Comme les Gibus, yâ€™en a un grand et un petit. Ils se situent dans le massif du Mont Blanc, haut lieu de lâ€™alpinisme, qui dÃ©tient la plupart des sommets mythiques des Alpes. Le grand Dru culmine Ã  3754 mÃ¨tres tandis que le petit se contente de 3730 mÃ¨tres. Le sommet, conquis pour la premiÃ¨re fois en 1878, est accessible de plusieurs faÃ§ons mais câ€™est dans la redoutable face ouest que les pionniers de lâ€™alpinisme trouvÃ¨rent un terrain de jeu Ã  la hauteur de leurs ambitions dÃ©mesurÃ©es.\r\n\r\nSi lâ€™ascension de la face ouest, que beaucoup pensaient impossible, est rÃ©ussie en 1952 par une cordÃ©e franÃ§aise composÃ©e de Guido Magnone, Lucien BÃ©rardini, Adrien Dagory et Marcel LainÃ©, pour Walter Bonatti, le plus grand problÃ¨me des Drus se situe ailleurs. Lui, ce qui lâ€™intÃ©resse, câ€™est ce fameux pilier sud-ouest situÃ© sur le versant de Montenvers. AprÃ¨s deux tentatives infructueuses avec ses habituels compagnons de cordÃ©es en 1953 puis en juillet 1955, le grand Walter dÃ©cide finalement dâ€™y aller tout seul, en patron. Ainsi, au mois dâ€™aoÃ»t 1955, il se lance dans ce qui deviendra un des plus grands chefs dâ€™Å“uvre de lâ€™histoire de lâ€™alpinisme et entre dÃ©finitivement dans la lÃ©gende, le 22 aoÃ»t, en donnant son nom Ã  lâ€™une des plus redoutables paroi du monde: le pilier Bonatti. Lâ€™autre voie cÃ©lÃ¨bre des Drus est la Â« Directe AmÃ©ricaine Â» ouverte en 1962 par Gary Hemming et Royal Robbins. Christophe Profit sera le premier Ã  la rÃ©aliser en solo, en 3h10, en 1982 Ã  seulement 21 ans.\r\n\r\nOutre la foudroyante Ã©popÃ©e de Jean Servattaz dans Â« Premier de cordÃ©e Â», les Drus seront souvent le thÃ©Ã¢tre de scÃ¨nes rocambolesques parmi lesquels on peut notamment citer le sauvetage de deux alpinistes allemands par RenÃ© Desmaison en 1966. Ce dernier grilla la politesse aux secours Â« officiels Â» pour ensuite vendre son reportage Ã  Paris-Match. On en parle aujourdâ€™hui encore dans les chaumiÃ¨res de Chamonixâ€¦', '2017-06-01 17:49:45'),
(77, 'Chris', 'Gaston RÃ©buffat', 'Ah ! Câ€™est sÃ»r, câ€™Ã©tait pas un marrant le Gaston ! Il nâ€™Ã©tait pas du genre Ã  mettre un coussin pÃ©teur dans son sac Ã  dos. Une nuit de bivouac tout seul avec lui, tu finissais par parler aux Ã©toilesâ€¦ Et puis cette allure de grand Ã©chalas dÃ©gingandÃ©, ce menton en galoche et cet atroce pull-over Jacquardâ€¦ non vraiment, si Gaston RÃ©buffat nâ€™avait pas Ã©tÃ© un des plus fameux grimpeurs de tous les temps, je me demande bien ce quâ€™on aurait pu faire de luiâ€¦', 'Et pourtant Ã§a partait malâ€¦ vouloir devenir guide de haute montagne en Ã©tant nÃ© Ã  Marseille, fallait Ãªtre salement motivÃ©. Mais la motivation de Gaston RÃ©buffat nâ€™a jamais vraiment Ã©tÃ© un problÃ¨me. La montagne câ€™Ã©tait sa vie depuis son adolescence et son passage au sein de Â« lâ€™Å“uvre Jean Joseph Allemand Â» qui lui donna lâ€™occasion de faire ses premiÃ¨res sorties en montagne. Mais lâ€™aventure de lâ€™alpinisme commence vÃ©ritablement pour le jeune Gaston lorsquâ€™Ã  16 ans, il sâ€™inscrit au Club Alpin FranÃ§ais et rencontre Henry Moulin qui, Ã©quipÃ© dâ€™une voiture, va lui permettre de commencer Ã  aller voir au-delÃ  de ses Â« chÃ¨res calanques Â».\r\n\r\nMais câ€™est surtout lorsquâ€™il sâ€™engage Ã  Â« Jeunesse et Montagne Â» quelques annÃ©es plus tard, que sa carriÃ¨re va prendre un tournant. Sâ€™il nâ€™est pas franchement fan de la discipline militaire quâ€™on lui impose lÃ -bas, son passage au sein de lâ€™institution va lui permettre de rencontrer un certain Lionel Terray qui deviendra son camarade de cordÃ©e pour ses premiÃ¨res grandes courses. En sortant de Â« Jeunesse et Montagne Â», les deux compÃ¨re sâ€™installent dans la ferme des Houches de Terray et partagent leur temps entre la traite des vaches et lâ€™escalade. Et si la vie Ã  la ferme nâ€™est pas franchement leur truc, cette derniÃ¨re reprÃ©sente nÃ©anmoins un fantastique camp de base pour leurs innombrables sorties en altitude qui vont bientÃ´t faire dâ€™eux les meilleurs grimpeurs de leur gÃ©nÃ©ration. Et trÃ¨s vite, Gaston deviendra rÃ©putÃ© pour son style, dâ€™une rare Ã©lÃ©gance.', '2017-06-01 17:54:09'),
(73, 'Chris', 'Les Grandes Jorasses', 'Les Grandes Jorasses, câ€™est avant tout une histoire de pointes. Mais nâ€™allez pas croire par lÃ  quâ€™il sâ€™agisse dâ€™une montagne rÃ©servÃ©e aux danseuses. Regardez une photo, vous comprendrez vite que son arrÃªte sommitale se compose de six pointes bien distinctes.', 'La plus Ã©levÃ©e est la pointe Walker (4208 mÃ¨tres), puis viennent ensuite la Whymper, la Croz, la HÃ©lÃ¨ne, la Marguerite et enfin la Young (3996 mÃ¨tres).\r\n\r\nEt comme bien souvent avec les grandes montagne des Alpes, câ€™est la face nord qui est la plus attirante pour les alpinistes de tous horizons. Car si ce bon Horace Walker est le premier a parvenir au sommet en 1868, en donnant au passage son nom Ã  la pointe la plus cÃ©lÃ¨bre des Alpes, câ€™est bien la cordÃ©e italienne emmenÃ©e par Riccardo Cassin en 1938 qui rÃ©ussit pour la premiÃ¨re fois lâ€™exploit de la gravir par la face nord. Un rapide coup dâ€™Å“il Ã  la liste des alpinistes qui lâ€™ont gravie ensuite donne une idÃ©e de la difficultÃ© de la chose. On trouve lÃ , pÃªle-mÃªle, Pierre Allain, Lionel Terray, Louis Lachenal, Walter Bonatti (premiÃ¨re hivernale), Hermann Buhl ou encore RenÃ© Desmaisonâ€¦ que des grands noms!', '2017-06-01 17:38:31');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
