-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 apr 2020 om 15:04
-- Serverversie: 10.4.6-MariaDB
-- PHP-versie: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `missault`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblbadlogins`
--

CREATE TABLE `tblbadlogins` (
  `loginID` int(11) NOT NULL,
  `loginnaam` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `wachtwoord` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dag` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `uur` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ipadres` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblcategorie`
--

CREATE TABLE `tblcategorie` (
  `catID` varchar(50) DEFAULT NULL,
  `catOmschrijving` varchar(50) DEFAULT NULL,
  `catTaal` varchar(50) DEFAULT NULL,
  `catArtikel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblcategorie`
--

INSERT INTO `tblcategorie` (`catID`, `catOmschrijving`, `catTaal`, `catArtikel`) VALUES
('CAT01NL', 'Alle categorieën', 'NL', 'Alle categorieën'),
('CAT01FR', 'Toutes catégories', 'FR', 'Alle categorieën'),
('CAT02NL', 'Coulis', 'NL', 'Coulis'),
('CAT02FR', 'Coulis', 'FR', 'Coulis'),
('CAT03NL', 'Dessert', 'NL', 'Dessert'),
('CAT03FR', 'Desserts', 'FR', 'Dessert'),
('CAT04NL', 'Eindejaar - buches', 'NL', 'Eindejaar - Buches'),
('CAT04FR', 'Fin d\'année - bûches', 'FR', 'Eindejaar - Buches'),
('CAT05NL', 'Eindejaar - dessert', 'NL', 'Eindejaar - Desserts'),
('CAT05FR', 'Fin d\'année - desserts', 'FR', 'Eindejaar - Desserts'),
('CAT06NL', 'Eindejaar - taarten', 'NL', 'Eindejaar - Taarten'),
('CAT06FR', 'Fin d\'année - gâteaux', 'FR', 'Eindejaar - Taarten'),
('CAT07NL', 'Halloween', 'NL', 'Halloween'),
('CAT07FR', 'Halloween', 'FR', 'Halloween'),
('CAT08NL', 'Kindertaarten', 'NL', 'Kindertaart'),
('CAT08FR', 'Gâteaux pour enfants', 'FR', 'Kindertaart'),
('CAT09NL', 'Lange taarten', 'NL', 'Lange taart'),
('CAT09FR', 'Gâteaux longues', 'FR', 'Lange taart'),
('CAT10NL', 'Taarten', 'NL', 'Taart'),
('CAT10FR', 'Gâteaux', 'FR', 'Taart'),
('CAT00NL', 'Kies een categorie', 'NL', 'Kies een categorie'),
('CAT00FR', 'Choississez une catégorie', 'FR', 'Kies een categorie');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbldistributeurs`
--

CREATE TABLE `tbldistributeurs` (
  `disID` varchar(50) NOT NULL,
  `disCode` varchar(50) DEFAULT NULL,
  `disNaam` varchar(50) DEFAULT NULL,
  `disAdres` varchar(50) DEFAULT NULL,
  `disPostcode` varchar(50) DEFAULT NULL,
  `disGemeente` varchar(50) DEFAULT NULL,
  `disTel` varchar(50) DEFAULT NULL,
  `disType` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbldistributeurs`
--

INSERT INTO `tbldistributeurs` (`disID`, `disCode`, `disNaam`, `disAdres`, `disPostcode`, `disGemeente`, `disTel`, `disType`) VALUES
('DIS1001', '8377', 'Van De Walle', 'Kerkstraat 3', '8377', 'Zuienkerke', '---', 'KHB'),
('DIS1002', '3580', 'Portofino', 'Hoogstraat 2', '3580', 'Beringen', '011 43 33 82', 'KHB'),
('DIS1003', '3500', 'Ma Moenia', 'Kiewitstraat 42', '3500', 'Hasselt', '011 74 06 94', 'KHB'),
('DIS1004', '3270', 'Zoete zinne', 'Basilieklaan 14', '3270', 'Scherpenheuvel', '013 55 50 05', 'KHB'),
('DIS1005', '2800', '\'t Kadetje', 'Geerdegem Schone berg 17', '2800', 'Mechelen', '015 42 33 01', 'KHB'),
('DIS1006', '1910', '\'t Koetje', 'Mechelsesteenweg 52', '1910', 'Kampenhout', '016 65 07 03', 'KHB'),
('DIS1007', '3001', 'Cupicado', 'Tervuursesteenweg 215', '3001', 'Heverlee', '016 89 66 10', 'KHB'),
('DIS1008', '1210', 'Patisserie Marie-José', 'Rue Willems 64', '1210', 'Brussel', '02 230 61 76', 'KHB'),
('DIS1009', '1830', 'Deblock', 'Kerklaan 2', '1830', 'Machelen', '02 251 18 75', 'KHB'),
('DIS1010', '1860', '\'t Hoeveke', 'Kapellenlaan 340', '1860', 'Meise', '02 270 18 28', 'KHB'),
('DIS1011', '1850', 'De Witte Ooievaar', 'Borgtstraat 10', '1850', 'Grimbergen', '02 270 90 19', 'KHV'),
('DIS1012', '1850', 'De Witte Ooievaar', 'Borgtstraat 10', '1850', 'Grimbergen', '02 272 05 20', 'GH'),
('DIS1013', '1640', 'Valentine\'s traiteur', 'Zoniënwoudlaan 326', '1640', 'Sint-Genesius-Rode', '02 358 24 43', 'KHB'),
('DIS1014', '1310', 'Godiva', 'Rue des Combattants 3', '1310', 'Ter Hulpen', '02 653 53 33', 'KHB'),
('DIS1015', '9100', 'Boeleken', 'Regentiestraat 16', '9100', 'Sint-Niklaas', '03 776 04 50', 'KHB'),
('DIS1016', '2880', 'Walschap', 'Brandheide 11', '2880', 'Bornem', '03 890 64 70', 'GH'),
('DIS1017', '8940', '\'t Werviks Chocoladehuis', 'Komenstraat 29', '8940', 'Wervik', '0472 77 64 70', 'KHB'),
('DIS1018', '8210', 'Geernaert Traiteur', 'Groenestraat 6', '8210', 'Zedelgem', '050 20 83 69', 'KHB'),
('DIS1019', '8020', 'Bakkerij De Baets', 'Veldhoekstraat 2', '8020', 'Waardamme', '050 27 60 33', 'KHB'),
('DIS1020', '8200', 'Fruitpaleis DG', 'Hogeweg 77', '8200', 'Brugge', '050 31 47 93', 'KHB'),
('DIS1021', '8000', 'Jan & Lucrèce', 'Gentpoortstraat 4', '8000', 'Brugge', '050 33 39 75', 'KHB'),
('DIS1022', '8340', 'Vitamientje', 'Dorpsstraat 43', '8340', 'Sijsele', '050 36 33 23', 'KHB'),
('DIS1023', '8200', 'Missault Brugge', 'Gistelse steenweg 260', '8200', 'Brugge', '050 38 77 34', 'KHV'),
('DIS1024', '8200', 'Missault', 'Grasdreef 15', '8200', 'Brugge', '050 38 83 38', 'GH'),
('DIS1025', '8490', 'Aveve Tuincentrum', 'Oude dorpsweg 82', '8490', 'Varsenare', '050 39 24 14', 'KHB'),
('DIS1026', '8300', 'Traiteur Merlot', 'Duinbergenlaan 88', '8300', 'Knokke-Heist', '050 51 66 55', 'KHB'),
('DIS1027', '8380', 'Kurt Deschacht', 'Lisseweegse steenweg 100', '8380', 'Lissewege', '050 54 40 43', 'KHB'),
('DIS1028', '8380', 'Bakkerij Hendrik', 'Stationstraat 12', '8380', 'Lissewege', '050 54 79 23', 'KHB'),
('DIS1029', '8300', 'Vera\'s kaashuisje', 'Pastoor de Neveplein 4', '8300', 'Westkapelle', '050 60 18 59', 'KHB'),
('DIS1030', '8300', 'Croissy', 'Lippenslaan 20', '8300', 'Knokke-Heist', '050 60 33 29', 'KHB'),
('DIS1031', '8300', 'Vermeersch', 'Paul Parmentierlaan 41', '8300', 'Knokke-Heist', '050 60 66 42', 'GH'),
('DIS1032', '8300', 'Vermeersch', 'Parmentierlaan 41-43', '8300', 'Knokke-Heist', '050 60 66 42', 'KHB'),
('DIS1033', '8300', 'Chocolaterie M.', 'Sylvain Dupuisstraat 38', '8300', 'Knokke-Heist', '050 61 44 60', 'KHB'),
('DIS1034', '8730', '\'t Kiekse', 'Parklaan 9', '8730', 'Beernem', '050 78 18 36', 'KHB'),
('DIS1035', '8210', 'Bakkerij Misseeuw', 'Kattestraat 3', '8210', 'Loppem', '050 82 25 13', 'KHB'),
('DIS1036', '8210', 'Fruitpaleis', 'Stationsstraat 14', '8210', 'Loppem', '050 82 53 69', 'KHB'),
('DIS1037', '8600', 'Verdurmen-Thieren', 'Stokerijstraat 14', '8600', 'Diksmuide', '051 50 29 70', 'GH'),
('DIS1038', '8480', 'Dedulle voeding', 'Zuidstraat 50', '8480', 'Ichtegem', '051 58 84 84', 'KHB'),
('DIS1039', '8755', 'Aveve Ruiselede', 'Pietakkerstraat 2', '8755', 'Ruiselede', '051 68 64 57', 'KHB'),
('DIS1040', '8850', 'Callewaert', 'Berlingmolenstraat 64', '8850', 'Ardooie', '051 74 71 81', 'KHB'),
('DIS1041', '8890', 'Wenca', 'Stationstraat 280', '8890', 'Moorslede', '051 77 82 66', 'KHB'),
('DIS1042', '9280', 'bvba Mila', 'Wolvenstraat 2a', '9280', 'Wieze', '053 78 38 33', 'KHB'),
('DIS1043', '1760', 'Multikado', 'Pamelsklei 24 b1', '1760', 'Roosdaal-Pamel', '054 33 27 32', 'KHB'),
('DIS1044', '9700', '\'De Lekkerbek\'', 'Nestor De Tièrestraat 60', '9700', 'Oudenaarde', '055 30 94 81', 'KHB'),
('DIS1045', '8790', 'Diepfrietscentrale', 'Roterijstraat 145/1', '8790', 'Waregem', '056 61 31 26', 'KHB'),
('DIS1046', '8550', 'Rossini', 'Peter Benoitstraat 38', '8550', 'Zwevegem', '056 75 86 02', 'GH'),
('DIS1047', '8550', 'Rossini Chocolats', 'Peter Benoitstraat 38', '8550', 'Zwevegem', '056 75 86 02', 'KHV'),
('DIS1048', '8920', 'De Kock-Maertens', 'Brugseweg 24', '8920', 'Langemark-Poelkapelle', '057 48 88 35', 'GH'),
('DIS1049', '8920', 'Diepvries De Kock', 'Brugse weg 24', '8920', 'Langemark', '057 48 88 35', 'KHB'),
('DIS1050', '8630', 'Daskalides', 'Zuidstraat 62', '8630', 'Veurne', '058 31 32 10', 'KHB'),
('DIS1051', '8470', 'Diepvries Defraeye', 'Koolaerdstraat 132', '8470', 'Gistel', '059 27 59 69', 'KHH'),
('DIS1052', '8400', 'Rammant', 'Brugsesteenweg 40', '8400', 'Oostende', '059 32 14 83', 'GH'),
('DIS1053', '8400', 'Arthos', 'Nieuwpoortsesteenweg 256', '8400', 'Oostende', '059 43 31 18', 'KHB'),
('DIS1054', '8400', 'Hannibal Pralines', 'Alfons Pieterslaan 38', '8400', 'Oostende', '059 50 92 83', 'KHB'),
('DIS1055', '8400', 'Ongenae', 'Karel Janssenslaan 51', '8400', 'Oostende', '059 51 40 52', 'KHB'),
('DIS1056', '8400', 'Superette VP', 'Fr. Orbanstraat 114', '8400', 'Oostende', '059 51 60 44', 'KHB'),
('DIS1057', '4500', 'Maillard & Fils', 'Avenue Jos Wauters 69', '4500', 'Ben-Ahin', '085 23 35 29', 'KHH'),
('DIS1058', '9030', 'Tom Hanssens banket', 'Mariakerkeplein 6', '9030', 'Mariakerke', '09 226 11 53', 'KHB'),
('DIS1059', '9820', 'Herman Patisserie', 'Hundelgemsesteenweg 143', '9820', 'Merelbeke', '09 230 30 18', 'KHB'),
('DIS1060', '9290', 'Slagerij \'De Brug\'', 'Veerstraat 9', '9290', 'Uitbergen', '09 367 43 04', 'KHB'),
('DIS1061', '9870', 'De Fruitpoort', 'Staatsbaan 51', '9870', 'Zulte', '09 388 65 03', 'KHB');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblgoodlogins`
--

CREATE TABLE `tblgoodlogins` (
  `loginID` int(11) NOT NULL,
  `loginnaam` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `wachtwoord` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dag` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `uur` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ipadres` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblmenu`
--

CREATE TABLE `tblmenu` (
  `MenuID` varchar(50) NOT NULL,
  `MenuItem` varchar(50) DEFAULT NULL,
  `MenuLink` varchar(50) DEFAULT NULL,
  `Volgorde` int(10) DEFAULT NULL,
  `MenuCode` varchar(50) DEFAULT NULL,
  `MenuTaal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblmenu`
--

INSERT INTO `tblmenu` (`MenuID`, `MenuItem`, `MenuLink`, `Volgorde`, `MenuCode`, `MenuTaal`) VALUES
('MEN01', 'Producten', 'product.php', 1, 'ALL', 'NL'),
('MEN02', 'Verkooppunten', 'verkooppunten.php', 2, 'ALL', 'NL'),
('MEN03', 'Nuttige tips', 'tips.php', 3, 'ALL', 'NL'),
('MEN04', 'Wijzig wachtwoord', 'wijzigww.php', 5, 'DIS', 'NL'),
('MEN05', 'Les produits', 'product.php', 1, 'ALL', 'FR'),
('MEN06', 'Points de vente', 'verkooppunten.php', 2, 'ALL', 'FR'),
('MEN07', 'Conseils utiles', 'conseils.php', 3, 'ALL', 'FR'),
('MEN08', 'Changez mot de passe', 'wijzigww.php', 5, 'DIS', 'FR'),
('MEN09', 'Home', 'index.php', 20, 'ALL', 'NL'),
('MEN10', 'Home', 'index.php', 20, 'ALL', 'FR'),
('MEN11', 'Prijslijst', 'prijslijst.php', 4, 'ALL', 'NL'),
('MEN12', 'Liste des prix', 'prijslijst.php', 4, 'ALL', 'FR'),
('MEN13', 'Detailinfo', 'master.php', 8, 'ALL', 'NL'),
('MEN14', 'Detailinfo', 'master.php', 8, 'ALL', 'FR'),
('MENU15', 'Porties - SB', 'porties.php', 9, 'ALL', 'EXTRA'),
('MENU16', 'Distrilijst - SB', 'distrilijst.php', 10, 'ALL', 'EXTRA\n'),
('MENU17', 'Favoriet - SB', 'favoriet.php', 11, 'ALL', 'EXTRA\n');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblproducten`
--

CREATE TABLE `tblproducten` (
  `prodID` varchar(6) NOT NULL,
  `categorie` varchar(20) DEFAULT NULL,
  `productNL` varchar(150) DEFAULT NULL,
  `productFR` varchar(150) DEFAULT NULL,
  `omschrijvingNL` mediumtext DEFAULT NULL,
  `omschrijvingFR` mediumtext DEFAULT NULL,
  `volume` int(6) DEFAULT NULL,
  `minpax` int(6) DEFAULT NULL,
  `maxpax` int(6) DEFAULT NULL,
  `prijs` decimal(5,2) DEFAULT NULL,
  `doos6` decimal(5,2) DEFAULT NULL,
  `doos12` decimal(5,2) DEFAULT NULL,
  `promo` varchar(5) DEFAULT NULL,
  `magazijn` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Gegevens worden geëxporteerd voor tabel `tblproducten`
--

INSERT INTO `tblproducten` (`prodID`, `categorie`, `productNL`, `productFR`, `omschrijvingNL`, `omschrijvingFR`, `volume`, `minpax`, `maxpax`, `prijs`, `doos6`, `doos12`, `promo`, `magazijn`) VALUES
('BUC02', 'Eindejaar - Buches', 'Tranche Speculoos', 'Tranche Speculoos', 'Roomijs vanille en speculoos ', 'Crème glacée vanille et spéculoos', 700, 6, 8, '18.75', '0.00', '0.00', '', 'D4'),
('COU01', 'Coulis', 'Chocolade coulis', 'Coulis Chocolat', 'Chocolade coulis', 'Coulis Chocolat', 200, 25, 50, '3.00', '0.00', '0.00', '', 'D6'),
('COU02', 'Coulis', 'Framboos coulis', 'Coulis Framboise', 'Framboos coulis', 'Coulis Framboise', 200, 25, 50, '3.00', '0.00', '0.00', '', 'D7'),
('DES01', 'Dessert', 'Hartje', 'Petit Coeur', 'Roomijs vanille. coulis framboos. meringue. afgewerkt met een chocolade hartje', 'Crème glacée vanille. coulis framboise. meringue. décoré avec un coeur en chocolat.', 130, 1, 0, '3.00', '15.65', '0.00', '', 'D11'),
('DES02', 'Dessert', 'Hartje 3D', 'Petit Coeur 3D', 'Roomijs Vanille - coulis framboos afgewerkt met goudblokjes ', 'Crème glacée Vanille - coulis framboise décoré de petits cubes d\'or ', 100, 1, 0, '3.00', '15.65', '0.00', 'X', 'D8'),
('DES03', 'Dessert', 'Hart', 'Cœur', 'Roomijs vanille. mousse van passievrucht met stukjes framboos. afgewerkt met chocolade.', 'Crème glacée vanille. mousse de fruits de la passion avec petits morceaux de framboises. décoré avec chocolat ', 600, 4, 0, '12.70', '0.00', '0.00', '', 'D9'),
('DES04', 'Dessert', 'Dôme Framboos', 'Dôme Framboise', 'Sorbet framboos. een stukje gebakken meringue. versierd met frambozen coulis en frambozen sponscake. ', 'Sorbet framboise. un petit morceaux de meringue cuite. décoré avec coulis framboise et spongecake framboise. ', 100, 1, 0, '2.75', '13.85', '0.00', '', 'D2'),
('DES05', 'Dessert', 'Rivoli', 'Rivoli', 'Vanille roomijs met passievruchten mousse met stukjes framboos. Afgewerkt met passievruchtspiegel en framboos. ', 'Crème glacée à la vanille avec mousse de fruit de la passion et pièces de famboises. ', 130, 1, 0, '3.10', '16.20', '0.00', '', 'D10'),
('DES07', 'Dessert', 'Parfait Fraise', 'Parfait Fraise', 'Vanille roomijs. aardbeien mousse. frambozen coulis', 'Crème glacée vanille. mousse de fraises. coulis framboise. ', 130, 1, 0, '3.00', '15.65', '0.00', '', 'D11'),
('DES08', 'Dessert', 'Brésil', 'Brésil', 'Vanille roomijs. een hart van gebakken meringue. in de nootjes gedraaid', 'Crème glacée vanille. un cœur de meringue cuite. enrobée de noisettes', 130, 1, 0, '2.65', '13.85', '0.00', '', 'D11'),
('DES09', 'Dessert', 'Bourbon', 'Bourbon', 'Roomijs Bourbon vanille (met echte vanillestokken). zachte en gebakken meringue. een fijn laagje chocolade. ', 'Crème glacée vanille Bourbon (avec vraies gousses de vanille). meringue moelleuse et cuite. une fine couche de chocolat. ', 150, 1, 0, '2.75', '14.35', '0.00', '', 'D1'),
('DES10', 'Dessert', 'Duo chocolat', 'Duo chocolat', 'Chocolade roomijs. wit chocoladeschuim met Amaretto. ', 'Crème glacée chocolat. mousse au chocolat blanc à l\'Amaretto. ', 130, 1, 0, '2.90', '15.15', '0.00', 'X', 'D4'),
('DES12', 'Dessert', 'Miroir', 'Miroir', 'Straciatella roomijs. hazelnoten soufflé. afgewerkt met coulis chocolade. ', 'Crème glacée Straciatella. soufflé praliné. décoré avec coulis chocolat. ', 130, 1, 0, '2.90', '15.15', '0.00', '', 'D10'),
('DES13', 'Dessert', 'Fruity Chocolate', 'Fruity Chocolate', 'Frambozensorbet met witte chocolademousse afgewerkt met frambozencoulis.', 'Sorbet framboise . mousse au chocolat blanc avec coulis framboise 1 portion - 130 ml', 130, 1, 0, '3.40', '17.75', '0.00', '', 'D4'),
('DES14', 'Dessert', 'Paddenstoel', 'Champignon', 'Gebakken meringue. vanille roomijs. in de chocolade gedompeld. ', 'Meringue cuite. crème glacée vanille. trempée au chocolat.', 150, 1, 0, '2.45', '17.05', '0.00', '', 'D10'),
('DES15', 'Dessert', 'Siberische ijsverrassing', 'Omelette Sibérienne', 'Grand Marnier roomijs. op een laagje biscuit. afgewerkt met zachte meringue. ', 'Crème glacée Grand Marnier. biscuit. décoré avec meringue moelleuse. ', 130, 1, 0, '2.95', '15.40', '0.00', '', 'D5'),
('DES16', 'Dessert', 'Double café', 'Double café', 'Extra sterke koffie roomijs met een vleugje Armagnac.', 'Crème glacée café extra fort avec un peu d\'Armagnac. ', 130, 1, 0, '2.10', '11.00', '0.00', 'X', 'D1'),
('DES17', 'Dessert', 'Ijssoufflé', 'Soufflé glacé', 'IJssoufflé met Cointreau. afgewerkt met geroosterde amandelstukjes. ', 'Soufflé glacé au Cointreau. décoré avec petits morceaux d\'amandes grillés. ', 130, 1, 0, '2.95', '15.40', '0.00', 'X', 'D7'),
('DES18', 'Dessert', 'Beker suikervrij', 'Gobelet sans sucres ajoutés', 'Beker gevuld met vanille roomijs & chocolade mousse. Zonder toegevoegde suikers.', 'Gobelet rempli de crème glacée vanille & mousse au chocolat. Le tout sans sucres ajoutés.', 130, 1, 0, '3.10', '21.60', '0.00', '', 'D4'),
('DES19', 'Dessert', 'Clown', 'Clown', 'Vanille roomijs. clown kopje. ', 'Crème glacée vanille. tête de clown. ', 100, 1, 0, '2.45', '12.80', '0.00', '', 'D4'),
('DES20', 'Dessert', 'Dieren', 'Animaux', 'Beker gevuld met vanille roomijs. ', 'Gobelet rempli de crème glacée vanille. ', 100, 1, 0, '3.75', '19.60', '0.00', '', 'D7'),
('DES21', 'Dessert', 'Beker Tekening', 'Gobelets Dessin', 'Beker gevuld met vanille roomijs ', 'Gobelet rempli de crème glacée vanille.', 100, 1, 0, '3.05', '21.25', '0.00', '', 'D1'),
('DES22', 'Dessert', 'Beker Puzzel', 'Gobelet Puzzle', 'Beker gevuld met vanille roomijs ', 'Gobelet rempli de crème glacée vanille.', 100, 1, 0, '3.15', '27.40', '0.00', '', 'D4'),
('DES23', 'Dessert', 'Vanille 130 ml', 'Vanille 130 ml', 'Potje Roomijs Vanille. ', 'Petit pot de Crème Glacée Vanille. ', 130, 1, 0, '1.35', '0.00', '14.10', '', 'D9'),
('DES24', 'Dessert', 'Chocolade 130 ml', 'Chocolat 130 ml', 'Potje Roomijs Chocolade. ', 'Petit pot de Crème Glacée Chocolat. ', 130, 1, 0, '1.35', '0.00', '14.10', '', 'D1'),
('DES25', 'Dessert', 'Aardbei 130 ml', 'Fraise 130 ml', 'Potje Roomijs Aardbei. ', 'Petit pot de Crème Glacée Fraise.', 130, 1, 0, '1.35', '0.00', '14.10', '', 'D5'),
('DES26', 'Dessert', 'Bekers vanille', 'Gobelets vanille', 'Roomijs vanille met chocoladesaus.', 'Crème glacée vanille avec sauce chocolat. ', 150, 1, 0, '1.80', '0.00', '18.80', '', 'D9'),
('DES27', 'Dessert', 'Bekers praliné', 'Gobelets praliné', 'Roomijs praliné met karamelsaus. ', 'Crème glacée praliné avec sauce caramel. ', 150, 1, 0, '1.80', '0.00', '18.80', '', 'D6'),
('DES28', 'Dessert', 'Mini Vanillesoezen', 'Mini Profiterolles', 'Soezjes gevuld met een bolletje vanille roomijs. ', 'Des choux. remplis d\'une boule de crème glacée vanille. ', 320, 8, 0, '12.00', '0.00', '0.00', '', 'D7'),
('EJB01', 'Eindejaar - Buches', 'Siberische Buche', 'Bûche Sibérienne', 'Vanille roomijs met amarettini koekjes. mokka roomijs. versierd met zachte meringue en chocolade decor. ', 'Crème glacée vanille avec biscuits amarettini. crème glacée moka. décoré avec meringue douce et décoration en chocolat. ', 1625, 12, 16, '23.10', '0.00', '0.00', '', 'D2'),
('EJB02', 'Eindejaar - Buches', 'Super Buche', 'Bûche Super', 'Vanille roomijs. mokka soufflé. aardbeien sorbet. op een laag amandelbiscuit. versierd met slagroom en chocolade decor. ', 'Crème glacée vanille. soufflé mokka. sorbet fraise. sur une couche de biscuit d\'amandes. décoré de crème chantilly et décoration en chocolat. ', 1950, 12, 16, '28.35', '0.00', '0.00', '', 'D5'),
('EJB03', 'Eindejaar - Buches', 'Côte d\'Ivoire', 'Côte d\'Ivoire', 'Stracciatella en chocolade roomijs. in de chocolade gedompeld. versierd met fijne streepjes witte chocolade. ', 'Crème glacée stracciatella et chocolat. trempée au chocolat. décorée avec de fines lignes en chocolat blanc. ', 700, 6, 8, '17.85', '0.00', '0.00', '', 'D10'),
('EJB04', 'Eindejaar - Buches', 'Surprice', 'Surprice', 'Vanille roomijs. aardbei roomijs. krokante meringue frambozen coulis afgewerkt met een strik. ', 'Crème glacée vanille et fraise meringue croquante. coulis de framboise. noeud de chocolat. ', 700, 6, 8, '20.00', '0.00', '0.00', '', 'D6'),
('EJB05', 'Eindejaar - Buches', 'Forêt Framboise', 'Forêt Framboise', 'Vanille roomijs en sorbet framboos . Afgewerkt met framboos coulis en rode chocolade', 'Crème glacé vanille et sorbet framboise. Décorée avec coulis de framboise et chocolat rouge', 700, 6, 8, '20.00', '0.00', '0.00', '', 'D3'),
('EJB06', 'Eindejaar - Buches', 'Boomstronk', 'Souche d\'Arbre', 'Vanille en chocolade roomijs. met caramel met geroosterde hazelnoot.', 'Crème glacée vanille et chocolat. avec caramel. ', 700, 6, 8, '20.00', '0.00', '0.00', '', 'D2'),
('EJB07', 'Eindejaar - Buches', 'Plaisir Pistache', 'Plaisir Pistache', 'Pistache roomijs en vanille roomijs met een heerlijke speculoos mousse in het midden. ', 'Crème glacée pistache et vanille avec un mousse délicieux de speculat. ', 700, 6, 8, '20.00', '0.00', '0.00', '', 'D1'),
('EJB08', 'Eindejaar - Buches', 'Buche Speculoos', 'Bûche Spéculoos', 'Vanille en speculoos roomijs afgewerkt met karamelsaus. slagroom en speculoos koekjes.', 'Crème glacée à la vanille & spéculoos décoré avec du sauce de caramel. chantilly & biscuits de spéculoos.', 700, 6, 8, '20.00', '0.00', '0.00', '', 'D4'),
('EJD01', 'Eindejaar - Desserts', 'Mini buche framboise', 'Mini bûche framboise', 'Frambozensorbet op een biscuit framboos. Afgewerkt met zachte meringue en stukjes framboos. ', 'Sorbet framboise et biscuit framboise avec du meringue & pièces de framboise.', 80, 1, 0, '2.80', '14.65', '0.00', 'X', 'D6'),
('EJD02', 'Eindejaar - Desserts', 'Mini buche straciatella', 'Mini bûche straciatella', 'Straciatella roomijs op een chocolade biscuit afgewerkt met chocolade coulis.', 'Crème glacée straciatella et biscuit chocolat. Décoré avec coulis de chocolat. ', 80, 1, 0, '2.80', '14.65', '0.00', '', 'D1'),
('EJD03', 'Eindejaar - Desserts', 'Mini buche Rudolph', 'Mini bûche Rudolph', 'Speculoos roomijs op een speculoos koekje afgewerkt met chocolade fantasie.', 'Crème glacée au spéculoos et biscuit spéculoos. Décoré avec du chocolat.', 80, 1, 0, '3.35', '17.50', '0.00', '', 'D1'),
('EJD04', 'Eindejaar - Desserts', 'Portie Nelusko', 'Portion Nelusko', 'Hazelnoot chocolade ijs met stukjes cookie. afgewerkt met slagroom en chocolade.', 'Crème glacée praliné & chocolat aux pièces de cookie. Décoré avec du chantilly et du chocolat.', 100, 1, 0, '3.10', '16.20', '0.00', '', 'D12'),
('EJD09', 'Eindejaar - Desserts', 'Mix X’Mas Kids Box', 'Mix X’Mas Kids Box', 'Roomijs vanille. diverse kopjes in marsepein. ', 'Crème glacée vanille. différentes petites têtes en massepain. ', 400, 4, 0, '13.40', '0.00', '0.00', '', 'D7'),
('EJD10', 'Eindejaar - Desserts', 'Bourbon', 'Bourbon', 'Roomijs Bourbon vanille (met echte vanillestokken). zachte en gebakken meringue. een fijn laagje chocolade. ', 'Crème glacée vanille Bourbon (avec vraies gousses de vanille). meringue moelleuse et cuite. une fine couche de chocolat. ', 130, 1, 0, '2.75', '14.35', '0.00', '', 'D3'),
('EJD14', 'Eindejaar - Desserts', 'Sibérienne', 'Sibérienne', 'Vanille roomijs met amaretini koekjes. mokka roomijs en meringue. afgewerkt met een kerster. ', 'Crème glacée vanille avec biscuit amaretini. crème glacée moka et meringue douce. ', 130, 1, 0, '3.10', '18.60', '0.00', '', 'D1'),
('EJD18', 'Eindejaar - Desserts', 'Mini glaasjes Roomijs', 'Mini verres de Crème Glacée', 'Glaasjes gevuld met roomijs vanille met coulis framboos. roomijs chocolade met coulis chocolade. roomijs mokka met slagroom. ', 'Petits verres. remplis de crème glacée vanille avec coulis framboise. crème glacée chocolat avec coulis chocolat. crème glacée moka avec crème chantilly. ', 360, 6, 0, '13.25', '0.00', '0.00', 'X', 'D3'),
('EJD19', 'Eindejaar - Desserts', 'Mini glaasjes Sorbet', 'Mini verres de Sorbet', 'Glaasjes gevuld met sorbet citroen en framboos.', 'Petits verres. remplis de sorbet citron et framboise. ', 360, 6, 0, '13.25', '0.00', '0.00', '', 'D10'),
('EJT01', 'Eindejaar - Taarten', 'Vintage Miserable', 'Vintage Miserable', 'Bourbon vanille roomijs tussen miserable koek afgewerkt met bolletje vanille en bloemsuiker', 'Crème glacée à la vanille Bourbon entre un misérable gâteau et une boule de vanille et de sucre', 900, 7, 0, '29.50', '0.00', '0.00', '', 'D7'),
('EJT02', 'Eindejaar - Taarten', 'Popo De Ijsbeer', 'Popo L\'ours Polaire', 'Vanille ijs. choco ijs met stukjes cookie. afgewerkt met bloemsuiker en chocolade fantasietjes', 'Crème glacée vanille. glace de choco avec pièces de cookie. décoré avec du sucre impalmable et chocolat', 900, 6, 0, '25.15', '0.00', '0.00', '', 'D5'),
('EJT03', 'Eindejaar - Taarten', 'Miroir Café', 'Miroir Café', 'Mokka ijs en ijs met vanille smaak afgetopt met een smakelijke karamel spiegel. afgewerkt met chocolade en meringue. ', 'Glace de café et glace de vanille avec un mirrior de caramel. Décoré avec du chocolat et meringue. ', 800, 6, 0, '23.00', '0.00', '0.00', '', 'D12'),
('EJT04', 'Eindejaar - Taarten', 'Gâteau Bourbon', 'Gâteau Bourbon', 'Bourbon vanille roomijs (met echte vanillestokken). afgewerkt met gebakken & zachte meringue. ', 'Crème glacée vanille Bourbon (avec de véritables bâtons de vanille). décoré avec meringue cuite et moelleuse. ', 1300, 10, 0, '25.40', '0.00', '0.00', '', 'D2'),
('EJT05', 'Eindejaar - Taarten', 'Winterlandschap', 'Paysage d\'hiver', 'Vanille roomijs en woudvruchtensorbet. afgewerkt met meringue en kerstdecoratie.', 'Crème glacée vanille et sorbet fruits de bois. décoré avec meringue et décoration de Noel ', 1100, 8, 10, '26.50', '0.00', '0.00', '', 'D5'),
('EJT06', 'Eindejaar - Taarten', 'Couronne met sorbet', 'Couronne au sorbet', 'Vanille- en woudvruchtenroomijs. afgewerkt met een ring van chocolade en bolletjes sorbet in diverse smaken.', 'Couronne en crème glacée vanille. décoré avec chocolat et différents goûts de sorbet.', 1200, 8, 10, '25.95', '0.00', '0.00', '', 'D11'),
('EJT07', 'Eindejaar - Taarten', 'PAW PATROL', 'PAW PATROL', 'vanille - chocolade roomijs afgewerkt met een chocolade decor en paw patrol figuurtjes', 'Crème glacée vanille et chocolat. décoré avec du chocolat', 1100, 8, 10, '31.25', '0.00', '0.00', '', 'D11'),
('HAL01', 'Halloween', 'Portie spookje Halloween', 'Portion fantôme d\'halloween', 'Roomijs vanille. krokante meringue biscuit en rolfondant.', 'Crème glacée à la vanille. biscuit meringuée croustillant et fondant roulé.', 130, 1, 0, '2.30', '0.00', '0.00', 'X', 'D12'),
('KIT01', 'Kindertaart', 'Hello Kitty', 'Hello Kitty', 'Vanille & aardbeien roomijs. afgewerkt met zachte Italiaanse meringue. ', 'Crème glacée vanille & fraises. décoré de meringue italienne moelleuse. ', 1100, 8, 0, '26.85', '0.00', '0.00', '', 'D12'),
('KIT02', 'Kindertaart', 'Cars', 'Cars', 'Straciatella roomijs (vanille met stukjes chocolade).', 'Crème glacée Straciatella (vanille avec pepittes de chocolat). ', 1300, 10, 0, '28.25', '0.00', '0.00', '', 'D5'),
('KIT03', 'Kindertaart', 'Doornroosje', 'La Belle au bois dormant', 'Vanille roomijs. afgewerkt met chocolade & slagroom. ', 'Crème glacée vanille. décoré de chocolat & crème chantilly. ', 750, 5, 6, '19.40', '0.00', '0.00', '', 'D1'),
('KIT04', 'Kindertaart', 'Clown', 'Clown', 'Vanille roomijs. afgewerkt met Italiaanse meringue. marsepein en slagroom. ', 'Crème glacée vanille. décoré avec meringue moelleuse. massepain et crème chantilly. ', 900, 6, 8, '20.80', '0.00', '0.00', '', 'D6'),
('KIT05', 'Kindertaart', 'OLH-Beestje', 'Coccinelle', 'Vanille roomijs. frambozen sorbet. versierd met slagroom en chocolade. ', 'Crème glacée vanille. sorbet framboises. décoré avec crème chantilly et chocolat. ', 980, 6, 8, '21.00', '0.00', '0.00', '', 'D12'),
('KIT06', 'Kindertaart', 'Voetbalveld', 'Terrain de foot', 'Vanille en aardbeien roomijs. afgewerkt met slagroom. ', 'Crème glacée vanille et fraise. décoré avec crème chantilly.', 2310, 15, 16, '41.80', '0.00', '0.00', '', 'D7'),
('KIT07', 'Kindertaart', 'Frozen', 'Frozen', 'Vanille- en aardbeienroomijs afgewerkt met meringue en blauwe decorgel.', 'Crème glacée vanille et fraise. décoré avec meringue et gel decor blue.', 1100, 8, 0, '27.50', '0.00', '0.00', '', 'D9'),
('KIT09', 'Kindertaart', 'Minion', 'Minion', 'Vanilleroomijs met mangocoulis afgewerkt met suikerpasta.', 'Crème glacée vanille avec coulis mango.', 800, 6, 0, '22.00', '0.00', '0.00', '', 'D6'),
('LTA01', 'Lange taart', 'Tranche Brésilienne', 'Tranche Brésilienne', 'Vanille roomijs. zachte meringue. praline roomijs. in de nootjes gedraaid en versierd met zachte meringue. ', 'Crème glacée vanille. meringue moelleuse. crème glacée praliné. enrobée de noisettes et décoré avec meringue moelleuse. ', 1400, 12, 15, '18.35', '0.00', '0.00', '', 'D4'),
('LTA02', 'Lange taart', 'Tranche Negrito', 'Tranche Negrito', 'Vanille roomijs. chocoladeschuim. praline roomijs. in de chocolade gedompeld en versierd met chocoladeschuim. ', 'Crème glacée vanille. mousse au chocolat. crème glacée praliné. enrobée de chocolat et décoré avec mousse au chocolat. ', 1400, 12, 15, '18.90', '0.00', '0.00', '', 'D7'),
('LTA03', 'Lange taart', 'Tranche Maison', 'Tranche Maison', 'Vanille roomijs. ananas. kersen. Grand Marnier. in de chocolade gedompeld en versierd met slagroom. ', 'Crème glacée vanille. ananas. cerises. Grand Marnier. enrobée de chocolat et décoré avec crème chantilly. ', 1600, 12, 15, '21.35', '0.00', '0.00', '', 'D6'),
('LTA04', 'Lange taart', 'Tranche Nougat Glacé', 'Tranche Nougat Glacé', 'Traditioneel recept op basis van slagroom. meringue. honing. nougatine. gekonfijt fruit. walnoten en bresilienne nootjes. Niet versierd. ', 'Une recette traditionnelle à base de crème chantilly. meringue. miel. nougatine. fruits confits. noix et noix de brésil. Sans décoration. ', 1400, 12, 15, '23.05', '0.00', '0.00', '', 'D12'),
('LTA05', 'Lange taart', 'Tranche Vanille', 'Tranche Vanille', 'Roomijs Vanille. zonder afwerking.', 'Crème glacée Vanille. sans décoration. ', 1600, 12, 16, '12.60', '0.00', '0.00', '', 'D12'),
('LTA06', 'Lange taart', 'Tranche Vanille-Aardbei', 'Tranche Vanille-Fraise', 'Roomijs Vanille en Aardbei. zonder afwerking. ', 'Crème glacée Vanille et Fraise. sans décoration. ', 1600, 12, 16, '13.15', '0.00', '0.00', '', 'D1'),
('LTA07', 'Lange taart', 'Tranche Vanille-Mokka', 'Tranche Vanille-Moka', 'Roomijs Vanille en Mokka. zonder afwerking. ', 'Crème glacée Vanille et Moka. sans décoration. ', 1600, 12, 16, '13.15', '0.00', '0.00', '', 'D7'),
('LTA08', 'Lange taart', 'Tranche Vanille-Praliné', 'Tranche Vanille-Praliné', 'Roomijs Vanille en Praliné. zonder afwerking. ', 'Crème glacée Vanille et Praliné. sans décoration. ', 1600, 12, 16, '13.15', '0.00', '0.00', 'X', 'D9'),
('TRT01', 'Taart', 'Raspberry Sensation', 'Raspberry Sensation', 'Bourbon vanille roomijs. gebakken meringue. frambozen sorbet. versierd met een spiegel. frambozen en chocolade decor.', 'Crème glacée vanille bourbon. meringue cuite. sorbet framboise. décoré avec un miroir. des framboises et décoration en chocolat. ', 800, 6, 8, '17.50', '0.00', '0.00', '', 'D10'),
('TRT02', 'Taart', 'Vintage Meringue', 'Vintage Meringue', 'Passievruchten roomijs met krokante meringue. afgewerkt met smakelijke chocoladeband en bourbon vanille roomijs bolletjes. ', 'Glace aux fruits de la passion avec meringue croustillante. fini avec savoureuse bande de chocolat et boules de crème glacée à la vanille bourbon. ', 900, 8, 0, '29.50', '0.00', '0.00', '', 'D9'),
('TRT05', 'Taart', 'Framboisier', 'Framboisier', 'Vanille roomijs. zachte meringue met stukjes framboos. frambozen sorbet. een bandje zachte biscuit rondom. ', 'Crème glacée vanille. meringue moelleuse avec petits morceaux de framboises. sorbet framboises. une bande de biscuit tendre autour. ', 1100, 8, 0, '25.00', '0.00', '0.00', '', 'D1'),
('TRT06', 'Taart', 'Fraisier', 'Fraisier', 'Vanille roomijs. gebakken meringue. aardbeien sorbet. een bandje zachte biscuit rondom. ', 'Crème glacée vanille. meringue cuite. sorbet fraises. une bande de biscuit tendre autour. ', 1100, 8, 0, '22.50', '0.00', '0.00', '', 'D5'),
('TRT07', 'Taart', 'Sri Lanka', 'Sri Lanka', 'Vanille roomijs. speculaas roomijs. afgewerkt met slagroom. ', 'Crème glacée vanille. crème glacée spéculoos. décoré avec crème chantilly. ', 1100, 8, 0, '18.70', '0.00', '0.00', '', 'D10'),
('TRT08', 'Taart', 'Marbré Chocolat', 'Marbré Chocolat', 'Vanille roomijs & chocoladeschuim. afgewerkt met macarons de Paris. ', 'Crème glacée vanille et mousse au chocolat. décoré avec macarons de Paris. ', 1100, 8, 0, '24.90', '0.00', '0.00', '', 'D5'),
('TRT09', 'Taart', 'Bombe Brazil', 'Bombe Brazil', 'Mokka roomijs. koffiesoufflé. vanille roomijs. afgewerkt met mokkaslagroom. ', 'Crème glacée moka. soufflé café. crème glacée vanille. décoré avec crème chantilly café. ', 900, 6, 8, '20.05', '0.00', '0.00', '', 'D10'),
('TRT10', 'Taart', 'Bombe Nelusko', 'Bombe Nelusko', 'Halve bol roomijs vanille- en chocoladeroomijs met een interieur van hazelnootparfait', 'Une demi boule de crème glacée à la vanille et glace au chocolat avec un intérieur de parfait noisette. ', 900, 6, 0, '24.40', '0.00', '0.00', '', 'D12'),
('TRT11', 'Taart', 'Siberische ijsverrassing', 'Omelette Sibérienne', 'Roomijs parfait. mokka roomijs. op een laag zachte biscuit. afgewerkt met zachte meringue. ', 'Crème glacée parfait. crème glacée moka. sur une couche de biscuit tendre. décoré avec meringue moelleuse. ', 1300, 6, 8, '25.50', '0.00', '0.00', '', 'D1');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblwinkeltypes`
--

CREATE TABLE `tblwinkeltypes` (
  `ID` int(11) NOT NULL,
  `distype` varchar(3) NOT NULL,
  `winkeltype` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblwinkeltypes`
--

INSERT INTO `tblwinkeltypes` (`ID`, `distype`, `winkeltype`) VALUES
(1, 'GH', 'Groothandel'),
(2, 'KHV', 'Kleinhandel - volledig'),
(3, 'KHB', 'Kleinhandel - beperkt'),
(4, 'KHH', 'Thuisverkoop');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tblbadlogins`
--
ALTER TABLE `tblbadlogins`
  ADD PRIMARY KEY (`loginID`);

--
-- Indexen voor tabel `tblcategorie`
--
ALTER TABLE `tblcategorie`
  ADD UNIQUE KEY `catID_2` (`catID`),
  ADD KEY `CatID` (`catID`);

--
-- Indexen voor tabel `tbldistributeurs`
--
ALTER TABLE `tbldistributeurs`
  ADD PRIMARY KEY (`disID`),
  ADD KEY `DISCode` (`disCode`),
  ADD KEY `LevID` (`disID`),
  ADD KEY `LevPostcode` (`disPostcode`);

--
-- Indexen voor tabel `tblgoodlogins`
--
ALTER TABLE `tblgoodlogins`
  ADD PRIMARY KEY (`loginID`);

--
-- Indexen voor tabel `tblmenu`
--
ALTER TABLE `tblmenu`
  ADD PRIMARY KEY (`MenuID`),
  ADD KEY `MenuCode` (`MenuCode`),
  ADD KEY `MenuID` (`MenuID`),
  ADD KEY `Taalcode` (`MenuTaal`);

--
-- Indexen voor tabel `tblproducten`
--
ALTER TABLE `tblproducten`
  ADD PRIMARY KEY (`prodID`);

--
-- Indexen voor tabel `tblwinkeltypes`
--
ALTER TABLE `tblwinkeltypes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tblbadlogins`
--
ALTER TABLE `tblbadlogins`
  MODIFY `loginID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `tblgoodlogins`
--
ALTER TABLE `tblgoodlogins`
  MODIFY `loginID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `tblwinkeltypes`
--
ALTER TABLE `tblwinkeltypes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
