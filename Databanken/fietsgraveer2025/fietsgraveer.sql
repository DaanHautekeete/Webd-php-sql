-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 apr 2024 om 10:51
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
-- Database: `fietsgraveer`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblmenu`
--

CREATE TABLE `tblmenu` (
  `menuID` int(10) NOT NULL,
  `menutekst` varchar(60) DEFAULT NULL,
  `menulink` varchar(100) DEFAULT NULL,
  `login` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblmenu`
--

INSERT INTO `tblmenu` (`menuID`, `menutekst`, `menulink`, `login`) VALUES
(0, 'Home', 'index.php', 'nee'),
(1, 'Overzicht', 'overzicht.php', 'nee'),
(2, 'Registreer', 'registreer.php', 'nee'),
(3, 'Lijsten', 'lijsten.php', 'nee'),
(4, 'Wijzig', 'wijzig.php', 'nee'),
(5, 'Verwijder', 'verwijder.php', 'nee'),
(6, 'Detailinfo', 'detailinfo.php', 'nee'),
(7, 'Zoeken', 'zoeken.php', 'nee'),
(9, 'Mijn data', 'mijndata.php', 'ja');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblnieuwsbrief`
--

CREATE TABLE `tblnieuwsbrief` (
  `nieuwsbriefID` int(11) NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `regdatum` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tblnieuwsbrief`
--

INSERT INTO `tblnieuwsbrief` (`nieuwsbriefID`, `email`, `regdatum`) VALUES
(1, 'axelle.devos@gmail.com', '2025-04-22T10:37:58+02:00'),
(2, 'toon.ackx@telenet.be', '2025-04-22T10:38:31+02:00'),
(3, 'bas.dekeyser@barco.be', '2025-04-22T10:42:26+02:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblplaatsen`
--

CREATE TABLE `tblplaatsen` (
  `graveerID` int(10) NOT NULL,
  `gemeente` varchar(25) DEFAULT NULL,
  `locatie` varchar(40) DEFAULT NULL,
  `adres` varchar(50) DEFAULT NULL,
  `datum` datetime DEFAULT NULL,
  `uur` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblplaatsen`
--

INSERT INTO `tblplaatsen` (`graveerID`, `gemeente`, `locatie`, `adres`, `datum`, `uur`) VALUES
(1, 'Dudzele', 'gemeentehuis', 'Sint-Lenardsstraat 28', '2025-05-07 00:00:00', '15.00-18.00 u.'),
(2, 'Koolkerke', 'hoeve De Grendel', 'Koolkerkse Steenweg 199', '2025-05-08 00:00:00', '15.00-18.00 u.'),
(3, 'Sint-Michiels', 'gemeentehuis', 'Rijselstraat 98', '2025-05-11 00:00:00', '14.00-18.00 u.'),
(4, 'Sint-Andries', 'gemeentehuis', 'Gistelse Steenweg 524', '2025-05-14 00:00:00', '14.00-18.00 u.'),
(5, 'Sint-Jozef', 'buurthuis', 'Landjuwelenstraat 43', '2025-05-21 00:00:00', '15.00-18.00 u.'),
(6, 'Assebroek', 'gemeentehuis', 'Generaal Lemanlaan 123', '2025-05-22 00:00:00', '14.00-18.00 u.'),
(7, 'Zeebrugge', 'gemeenschapshuis', 'Marktplein 12', '2025-05-18 00:00:00', '15.00-18.00 u.'),
(8, 'Sint-Pieters', 'fietsendienst', 'Sint-Pieterskaai 37', '2025-06-04 00:00:00', '15.00-18.00 u.'),
(9, 'Sint-Kruis', 'gemeenschapshuis', 'Moerkerkse Steenweg 190', '2025-06-18 00:00:00', '14.00-18.00 u.'),
(10, 'Lissewege', 'Oude pastorie', 'Oude Pastoriestraat 5', '2025-06-25 00:00:00', '15.00-18.00 u.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblregistratie`
--

CREATE TABLE `tblregistratie` (
  `registratieID` int(10) NOT NULL,
  `fnaam` varchar(60) DEFAULT NULL,
  `voornaam` varchar(30) DEFAULT NULL,
  `telefoon` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `plaats` int(10) DEFAULT NULL,
  `ipadres` varchar(25) NOT NULL,
  `tijdreg` varchar(80) NOT NULL,
  `wachtwoord` varchar(15) NOT NULL,
  `regcode` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblregistratie`
--

INSERT INTO `tblregistratie` (`registratieID`, `fnaam`, `voornaam`, `telefoon`, `email`, `plaats`, `ipadres`, `tijdreg`, `wachtwoord`, `regcode`) VALUES
(1, 'Defour', 'Rita', '0477 36 49 26', 'rita.defour@gmail.com', 5, '109.131.169.38', '2025-01-04', 'Rita', 'pm9391342BY'),
(2, 'Debruyne', 'Delfine', '0474 26 10 74', 'delfine.debruyne@gmail.com', 6, '109.129.104.26', '2025-03-04', 'Delfine', 'WH2304350pj'),
(3, 'Cloet', 'Karel', '0476 33 57 48', 'karel.cloet@gmail.com', 5, '193.190.147.189', '2025-04-05', 'Karel', 'eF2776822YU'),
(4, 'Crana', 'Elena', '0476 92 22 21', 'elena.crana@gmail.com', 9, '193.190.172.70', '2025-03-06', 'Elena', 'uH8281670eF'),
(5, 'De Meyer', 'Henk', '0476 22 30 17', 'henk.demeyer@gmail.com', 4, '178.119.151.23', '2025-03-04', 'Henk', 'rg4997385Tx'),
(6, 'Deboel', 'Louis', '0478 65 64 16', 'louis.deboel@gmail.com', 6, '81.165.0.118', '2025-02-08', 'Louis', 'Bp6862585pF'),
(7, 'David', 'Marie-Fleur', '0479 70 75 76', 'mariefleur.david@gmail.com', 8, '213.119.233.120', '2025-04-08', 'Marie-Fleur', 'hx7072339cm'),
(8, 'Debevere', 'Ann', '0473 70 29 52', 'ann.debevere@gmail.com', 13, '178.118.76.214', '2025-03-01', 'Ann', 'pN9515357JT'),
(9, 'Vanhoutte', 'Pauline', '0475 30 14 30', 'pauline.vanhoutte@gmail.com', 8, '178.117.133.69', '2025-03-07', 'Pauline', 'fY7426483UM'),
(10, 'Laisnez', 'Linda', '0477 49 67 12', 'linda.laisnez@gmail.com', 13, '91.181.190.156', '2025-02-07', 'Linda', 'GD6368389Jv'),
(11, 'Verstegen', 'Julian', '0473 41 72 21', 'julian.verstegen@gmail.com', 7, '80.200.71.163', '2025-02-07', 'Julian', 'yy8413423kQ'),
(12, 'Verstegen', 'Chloé', '0479 43 16 12', 'chloe.verstegen@gmail.com', 1, '78.22.200.42', '2025-03-07', 'Chloé', 'Rq9311748nZ'),
(13, 'Cloet', 'An', '0475 33 78 66', 'an.cloet@gmail.com', 4, '81.82.228.187', '2025-01-01', 'An', 'Fy5842223hf'),
(14, 'Vanbiervliet', 'Greta', '0478 58 96 56', 'greta.vanbiervliet@gmail.com', 13, '178.116.240.128', '2025-03-08', 'Greta', 'hS1041573Ax'),
(15, 'Vandemaele', 'Tineke', '0473 32 59 97', 'tineke.vandemaele@gmail.com', 6, '91.183.55.215', '2025-01-03', 'Tineke', 'RV4209685pm'),
(16, 'De Cuyper', 'Inge', '0475 60 27 17', 'inge.decuyper@gmail.com', 3, '91.183.156.42', '2025-01-01', 'Inge', 'jw4632101CU'),
(17, 'De Cuyper', 'Frieda', '0477 87 20 93', 'frieda.decuyper@gmail.com', 8, '81.83.17.70', '2025-04-04', 'Frieda', 'nE7909172hg'),
(19, 'De Cuyper', 'Marie ', '0474 21 39 55', 'marie.decuyper@gmail.com', 10, '81.82.206.48', '2025-03-03', 'Marie ', 'uY8120191kB'),
(20, 'Martens', 'Pamela', '0473 41 52 51', 'pamela.martens@gmail.com', 7, '91.183.156.42', '2025-02-06', 'Pamela', 'ZU2646914xh'),
(21, 'De Cuyper', 'Pieter', '0473 52 68 96', 'pieter.decuyper@gmail.com', 13, '141.135.158.7', '2025-04-07', 'Pieter', 'gj5564993Xf'),
(22, 'De Groote', 'Silke', '0473 51 19 99', 'silke.degroote@gmail.com', 8, '141.135.200.152', '2025-03-01', 'Silke', 'CB4363844kH'),
(23, 'Hillewaert', 'Allyson', '0478 47 66 64', 'allyson.hillewaert@gmail.com', 9, '81.11.178.214', '2025-01-06', 'Allyson', 'HJ7518635rn'),
(24, 'De Graer', 'Chelsea', '0479 86 26 76', 'chelsea.degraer@gmail.com', 10, '84.192.22.121', '2025-04-05', 'Chelsea', 'xJ5299934Zv'),
(25, 'Debruyne', 'Emile', '0473 70 61 39', 'emile.debruyne@gmail.com', 7, '78.20.120.36', '2025-03-01', 'Emile', 'mH4513930QK'),
(26, 'Verstraete', 'Sarah', '0479 33 92 13', 'sarah.verstraete@gmail.com', 5, '87.66.213.209', '2025-01-04', 'Sarah', 'eJ5288447TK'),
(27, 'Pieters', 'Guido', '0475 80 44 55', 'guido.pieters@gmail.com', 1, '87.65.206.91', '2025-02-09', 'Guido', 'Fu6206090DA'),
(28, 'Delaere', 'Alix', '0476 76 95 23', 'alix.delaere@gmail.com', 4, '94.227.148.230', '2025-03-04', 'Alix', 'Yf1778345VC'),
(29, 'Pieters', 'Stefaan', '0476 14 93 79', 'stefaan.pieters@gmail.com', 13, '109.130.51.125', '2025-01-06', 'Stefaan', 'pn8396043sy'),
(30, 'Seys', 'Jorn', '0478 68 84 44', 'jorn.seys@gmail.com', 13, '176.62.141.115', '2025-02-06', 'Jorn', 'Zj9579972XA'),
(31, 'D\'Hoore', 'Sedney', '0476 12 64 72', 'sedney.dhoore@gmail.com', 5, '178.116.234.14', '2025-04-05', 'Sedney', 'yH7446358Sx'),
(33, 'Dickx', 'Camille', '0474 40 98 92', 'camille.dickx@gmail.com', 1, '141.135.200.152', '2025-04-07', 'Camille', 'Zq4730229qy'),
(34, 'Reyntens', 'Cathérine', '0476 83 86 89', 'catherine.reyntens@gmail.com', 22, '213.119.108.180', '2025-01-06', 'Cathérine', 'Vx7328216Sw'),
(35, 'Van Canneyt', 'Faye', '0477 78 84 92', 'faye.vancanneyt@gmail.com', 13, '84.199.37.242', '2025-01-08', 'Faye', 'RN6549309Fn'),
(36, 'Stellamans', 'Cindy', '0476 59 66 11', 'cindy.stellamans@gmail.com', 9, '84.194.121.89', '2025-01-07', 'Cindy', 'bp2944462BW'),
(37, 'Pieters', 'Nancy', '0477 48 36 66', 'nancy.pieters@gmail.com', 22, '78.21.193.126', '2025-03-08', 'Nancy', 'Fb5319645bg'),
(38, 'Verbanck', 'Anne', '0479 64 28 38', 'anne.verbanck@gmail.com', 8, '81.242.17.104', '2025-04-09', 'Anne', 'Ry5474817pR'),
(39, 'Verstegen', 'Kristof', '0477 95 85 72', 'kristof.verstegen@gmail.com', 3, '81.82.225.1', '2025-02-01', 'Kristof', 'mY7593673GH'),
(40, 'Vandewoestyne', 'Anne-Marie', '0476 72 95 43', 'annemarie.vandewoestyne@gmail.com', 3, '193.190.138.251', '2025-03-04', 'Anne-Marie', 'gM3914561kt'),
(41, 'Verbeke', 'Maxim', '0473 70 54 26', 'maxim.verbeke@gmail.com', 5, '193.190.138.251', '2025-03-01', 'Maxim', 'kQ2395273kp'),
(42, 'Debruyne', 'Joey', '0473 46 88 71', 'joey.debruyne@gmail.com', 5, '193.190.138.251', '2025-02-08', 'Joey', 'FZ8989474Rc'),
(43, 'Lamont', 'Kawien', '0478 38 93 78', 'kawien.lamont@gmail.com', 4, '193.190.138.251', '2025-04-09', 'Kawien', 'pv1485377BD'),
(44, 'Tanghe', 'Maur', '0476 58 86 91', 'maur.tanghe@gmail.com', 8, '81.82.218.57', '2025-04-05', 'Maur', 'dp6269652yn'),
(45, 'Millecam', 'Bieke', '0475 84 17 99', 'bieke.millecam@gmail.com', 3, '94.224.126.198', '2025-03-05', 'Bieke', 'Yb6085558rf'),
(46, 'Van Canneyt', 'Andrea', '0475 69 68 20', 'andrea.vancanneyt@gmail.com', 4, '141.135.23.154', '2025-03-03', 'Andrea', 'Ev6569487GK'),
(47, 'Kennes', 'Justin', '0478 30 36 46', 'justin.kennes@gmail.com', 22, '193.190.225.246', '2025-02-08', 'Justin', 'hz9414608CV'),
(48, 'Heymans', 'Jan', '0473 77 34 77', 'jan.heymans@gmail.com', 6, '193.190.238.2', '2025-01-05', 'Jan', 'UF7175592ZJ'),
(49, 'De Brabander', 'Cindy', '0476 38 65 60', 'cindy.debrabander@gmail.com', 5, '94.224.57.186', '2025-04-08', 'Cindy', 'DZ6314878jd'),
(50, 'Decleire', 'Hayline', '0473 73 96 43', 'hayline.decleire@gmail.com', 6, '87.64.236.17', '2025-04-09', 'Hayline', 'Vp2774980vs'),
(51, 'De Cuyper', 'Christiane', '0473 80 29 94', 'christiane.decuyper@gmail.com', 9, '81.83.27.225', '2025-03-01', 'Christiane', 'MJ9803672FQ'),
(52, 'De Wispelaere', 'Filip', '0478 74 98 78', 'filip.dewispelaere@gmail.com', 22, '78.22.186.145', '2025-02-01', 'Filip', 'MM2138444fN'),
(53, 'Hillewaert', 'Thibo', '0475 95 36 43', 'thibo.hillewaert@gmail.com', 5, '80.201.51.173', '2025-03-03', 'Thibo', 'qp6657960gm'),
(54, 'Dewilde', 'Yannick', '0476 63 63 99', 'yannick.dewilde@gmail.com', 4, '193.190.138.251', '2025-03-05', 'Yannick', 'CC1002158Va'),
(55, 'Van Pottelberghe', 'Hanne', '0478 39 58 22', 'hanne.vanpottelberghe@gmail.com', 22, '213.49.59.136', '2025-03-08', 'Hanne', 'pk7028853dg'),
(56, 'De Visch', 'Sam', '0476 14 28 23', 'sam.devisch@gmail.com', 6, '109.130.80.207', '2025-04-05', 'Sam', 'HY6731490Hc'),
(57, 'Baert', 'Leen', '0473 52 34 58', 'leen.baert@gmail.com', 13, '81.82.206.48', '2025-01-03', 'Leen', 'Dq8574049qR'),
(58, 'De Graer', 'Petra', '0479 53 22 14', 'petra.degraer@gmail.com', 7, '::1', '2018-04-20T15:53:04+02:00', 'Petra', 'vM9762621qk'),
(60, 'De Sutter', 'Otto', '0476 71 30 10', 'otto.desutter@gmail.com', 3, '81.82.251.68', '2025-02-08', 'Otto', 'CF2730911Fu'),
(61, 'Dykmans', 'Sylvie', '0478 53 63 93', 'sylvie.dykmans@gmail.com', 9, '87.64.2.184', '2025-03-03', 'Sylvie', 'Zy4255116CC'),
(62, 'Bouckaert', 'Céline', '0475 19 11 67', 'celine.bouckaert@gmail.com', 9, '::1', '2025-01-02', 'Céline', 'ma2558335BT'),
(63, 'Burggraeve', 'Duncan', '0478 76 61 54', 'duncan.burggraeve@gmail.com', 7, '81.82.251.68', '2025-03-08', 'Duncan', 'eA1421575FM'),
(64, 'Hillewaert', 'Hans', '0473 54 92 83', 'hans.hillewaert@gmail.com', 4, '81.82.251.68', '2025-01-04', 'Hans', 'DM9175484VE'),
(65, 'Bouve ', 'Arno', '0479 70 12 48', 'arno.bouve@gmail.com', 8, '81.82.251.68', '2025-03-08', 'Arno', 'cU4417369Bf'),
(66, 'De Coster', 'Maxim', '0475 30 36 27', 'maxim.decoster@gmail.com', 22, '81.82.251.68', '2025-01-07', 'Maxim', 'AU2108145Jp'),
(68, 'Van Canneyt', 'Guylian', '0473 46 54 44', 'guylian.vancanneyt@gmail.com', 8, '178.119.156.96', '2025-02-03', 'Guylian', 'zr1028522am'),
(69, 'Claerhout', 'Guy', '0476 36 25 76', 'guy.claerhout@gmail.com', 22, '81.83.17.70', '2025-03-07', 'Guy', 'ps5723343kz'),
(70, 'Messiaen', 'Mieke', '0479 73 85 49', 'mieke.messiaen@gmail.com', 4, '178.116.46.208', '2025-04-07', 'Mieke', 'jH2369999Xq'),
(71, 'Creytens', 'Hans', '0474 68 73 78', 'hans.creytens@gmail.com', 8, '155.140.133.212', '2025-04-06', 'Hans', 'FV7521528JG'),
(72, 'Slock', 'Fangio', '0478 30 47 22', 'fangio.slock@gmail.com', 13, '62.235.16.227', '2025-04-07', 'Fangio', 'yG7192289FK'),
(73, 'Van Parys', 'Chayenne', '0479 47 47 55', 'chayenne.vanparys@gmail.com', 8, '91.183.55.215', '2025-04-07', 'Chayenne', 'jF3358267hQ'),
(74, 'Slock', 'Dominik', '0474 95 73 78', 'dominik.slock@gmail.com', 9, '81.83.4.88', '2025-03-07', 'Dominik', 'mn2415566Dv'),
(75, 'Slock', 'Eline', '0475 79 22 58', 'eline.slock@gmail.com', 4, '78.21.50.67', '2025-01-02', 'Eline', 'ka5861058Uf'),
(76, 'Debruyne', 'Nicholas', '0475 98 23 53', 'nicholas.debruyne@gmail.com', 8, '109.129.144.51', '2025-04-02', 'Nicholas', 'Ru4544039GF'),
(77, 'Demeester', 'Frank', '0479 99 81 33', 'frank.demeester@gmail.com', 8, '81.83.5.238', '2025-03-06', 'Frank', 'xG2198217vD'),
(78, 'De Brabander', 'Gil', '0477 53 20 71', 'gil.debrabander@gmail.com', 5, '78.22.21.176', '2025-03-04', 'Gil', 'Qk8811286yT'),
(79, 'Verbanck', 'Fran', '0476 41 63 41', 'fran.verbanck@gmail.com', 22, '81.82.233.161', '2025-03-01', 'Fran', 'gt4447808Uc'),
(80, 'Gesquiere', 'Chris', '0478 51 92 57', 'chris.gesquiere@gmail.com', 3, '78.21.230.11', '2025-01-01', 'Chris', 'Sv4212411eN'),
(81, 'Christiaens', 'Josephine', '0475 48 74 35', 'josephine.christiaens@gmail.com', 4, '78.21.230.11', '2025-02-09', 'Josephine', 'Gf3521446zM'),
(82, 'Bergeret', 'Wouter', '0475 81 48 80', 'wouter.bergeret@gmail.com', 8, '91.183.62.228', '2025-04-05', 'Wouter', 'sG1129804pk'),
(83, 'Matthys', 'Kris', '0474 65 85 39', 'kris.matthys@gmail.com', 7, '78.20.71.49', '2025-04-01', 'Kris', 'eu8407060pv'),
(85, 'Selleslag', 'Gilbert', '0479 81 53 35', 'gilbert.selleslag@gmail.com', 1, '83.134.9.171', '2025-03-08', 'Gilbert', 'jZ7081876NH'),
(86, 'Gheysen', 'Romy', '0477 26 55 25', 'romy.gheysen@gmail.com', 8, '91.177.27.53', '2025-02-01', 'Romy', 'qK7210264XN'),
(87, 'Coene', 'Mathieu', '0474 38 24 90', 'mathieu.coene@gmail.com', 6, '141.135.112.229', '2025-03-01', 'Mathieu', 'gX4507787bR'),
(88, 'Hoste', 'Cato', '0475 48 21 52', 'cato.hoste@gmail.com', 7, '84.197.140.232', '2025-02-08', 'Cato', 'TV9109468rg'),
(89, 'Cornilly', 'Olivier', '0478 26 16 89', 'olivier.cornilly@gmail.com', 7, '213.118.9.116', '2025-04-08', 'Olivier', 'FF5750424xr'),
(90, 'Decock', 'Evy', '0476 87 69 91', 'evy.decock@gmail.com', 7, '178.116.43.171', '2025-03-05', 'Evy', 'za9611920NY'),
(91, 'Goris', 'Renee', '0473 19 40 89', 'renee.goris@gmail.com', 5, '87.67.100.36', '2025-04-01', 'Renee', 'YW4727753yZ'),
(92, 'Van den Berghe', 'Jason', '0479 39 88 34', 'jason.vandenberghe@gmail.com', 9, '81.83.2.190', '2025-01-03', 'Jason', 'Rn6788416Wk'),
(93, 'Rommel', 'Kobe', '0474 63 66 53', 'kobe.rommel@gmail.com', 8, '94.111.9.55', '2025-03-01', 'Kobe', 'Gk7102674ND'),
(94, 'Vancoetsem', 'Arno', '0476 53 40 68', 'arno.vancoetsem@gmail.com', 22, '83.134.116.203', '2025-01-04', 'Arno', 'BM2126276DA'),
(95, 'Bullinck', 'Pieter', '0473 97 61 70', 'pieter.bullinck@gmail.com', 1, '::1', '2025-04-21', 'Pieter', 'RM5766870ZN'),
(96, 'Pollet', 'Helga', '0476 53 59 32', 'helga.pollet@gmail.com', 22, '91.178.152.97', '2025-04-08', 'Helga', 'UB8048236VD'),
(97, 'Coene', 'Isabelle', '0479 18 76 51', 'isabelle.coene@gmail.com', 3, '81.82.67.222', '2025-02-01', 'Isabelle', 'zg2033132kt'),
(98, 'Pollet', 'Chloé', '0476 77 40 34', 'chloe.pollet@gmail.com', 22, '109.128.169.79', '2025-04-07', 'Chloé', 'Hq3051406qY'),
(99, 'Catrysse', 'Celine', '0473 21 46 37', 'celine.catrysse@gmail.com', 5, '::1', '2025-04-19', 'Celine', 'mv9940725Cv'),
(100, 'Beyls', 'Cedric', '0474 42 97 36', 'cedric.beyls@gmail.com', 9, '81.245.17.127', '2025-02-02', 'Cedric', 'Kp8265365fn'),
(101, 'Depondt', 'Bernard', '0475 54 96 97', 'bernard.depondt@gmail.com', 4, '178.117.220.75', '2025-03-03', 'Bernard', 'he6417244th'),
(102, 'Pollet', 'Arne', '0476 25 30 10', 'arne.pollet@gmail.com', 3, '81.83.164.79', '2025-01-03', 'Arne', 'EJ3171467WA'),
(103, 'Vercauteren', 'Elien', '0473 73 29 38', 'elien.vercauteren@gmail.com', 7, '91.178.135.68', '2025-02-08', 'Elien', 'jj2453908MC'),
(104, 'Clybouw', 'Tibo', '0479 62 86 81', 'tibo.clybouw@gmail.com', 4, '78.22.66.60', '2025-03-03', 'Tibo', 'RS8187862fY'),
(105, 'De Cock', 'Cis', '0478 69 69 20', 'cis.decock@gmail.com', 5, '78.22.66.60', '2025-02-01', 'Cis', 'Ad9054287uz'),
(106, 'De Mey', 'Miguel', '0478 86 96 35', 'miguel.demey@gmail.com', 13, '84.197.146.141', '2025-04-01', 'Miguel', 'Mx7117017kB'),
(107, 'Naessens', 'Omer', '0479 89 95 68', 'omer.naessens@gmail.com', 8, '84.197.141.23', '2025-04-03', 'Omer', 'zp2458710gg'),
(108, 'Wittevrongel', 'Peter-Jan', '0479 31 34 61', 'peterjan.wittevrongel@gmail.com', 4, '178.118.228.8', '2025-01-04', 'Peter-Jan', 'pk4720972cp'),
(109, 'Van Hoornweder', 'Sophie', '0477 35 12 98', 'sophie.vanhoornweder@gmail.com', 5, '178.116.166.119', '2025-04-09', 'Sophie', 'xc7931227fz'),
(110, 'Debbaut', 'Brecht', '0474 74 17 79', 'brecht.debbaut@gmail.com', 1, '81.164.152.226', '2025-03-04', 'Brecht', 'NM3928750Qt'),
(111, 'Messiaen', 'Kimberly', '0477 24 19 99', 'kimberly.messiaen@gmail.com', 4, '81.82.145.230', '2025-01-01', 'Kimberly', 'DQ8012022aQ'),
(112, 'Van den Bussche', 'Wim', '0477 24 27 43', 'wim.vandenbussche@gmail.com', 9, '81.82.233.236', '2025-04-08', 'Wim', 'dv9846233BK'),
(113, 'Maertens', 'Davy', '0476 27 32 56', 'davy.maertens@gmail.com', 9, '81.82.233.236', '2025-03-03', 'Davy', 'ns2961080Rt'),
(114, 'Christiaens', 'Nathalie', '0475 34 73 23', 'nathalie.christiaens@gmail.com', 9, '81.83.227.223', '2025-01-06', 'Nathalie', 'DW6151546Tb'),
(115, 'Elferink', 'Jessica', '0475 59 28 10', 'jessica.elferink@gmail.com', 9, '109.134.255.108', '2025-04-04', 'Jessica', 'ky5117428yr'),
(116, 'Punie', 'Joris', '0474 32 13 89', 'joris.punie@gmail.com', 8, '178.116.108.242', '2025-04-09', 'Joris', 'NA5200381ge'),
(117, 'Andries', 'Gauthier', '0473 64 77 59', 'gauthier.andries@gmail.com', 7, '84.196.225.172', '2025-04-02', 'Gauthier', 'sY1630584er'),
(118, 'Myny', 'Maddy', '0473 26 41 91', 'maddy.myny@gmail.com', 6, '87.65.62.135', '2025-04-04', 'Maddy', 'pw8725596Av'),
(119, 'Choi', 'Pieter', '0476 92 70 33', 'pieter.choi@gmail.com', 6, '178.119.22.188', '2025-04-04', 'Pieter', 'Kh9940209Zc'),
(120, 'Mussche', 'Lies', '0476 86 30 60', 'lies.mussche@gmail.com', 3, '94.227.66.68', '2025-03-07', 'Lies', 'uy2598379XC'),
(121, 'Goris', 'Gino', '0476 17 40 50', 'gino.goris@gmail.com', 13, '178.119.105.98', '2025-04-09', 'Gino', 'yg7436946Ts'),
(122, 'Selleslag', 'Freddy', '0476 60 37 44', 'freddy.selleslag@gmail.com', 7, '81.82.215.142', '2025-04-06', 'Freddy', 'jt4532576zF'),
(123, 'Heijboer', 'Eli', '0479 80 97 45', 'eli.heijboer@gmail.com', 9, '84.197.78.30', '2025-01-06', 'Eli', 'SZ2296365WF'),
(124, 'Selleslag', 'Thomas', '0474 82 97 77', 'thomas.selleslag@gmail.com', 6, '81.82.17.32', '2025-04-03', 'Thomas', 'BG1358853Cm'),
(126, 'Timmermans', 'Els', '0475 11 67 90', 'els.timmermans@gmail.com', 13, '188.188.44.175', '2025-01-05', 'Els', 'tV1938154vy'),
(127, 'Goris', 'Alicia', '0477 55 76 12', 'alicia.goris@gmail.com', 4, '94.227.66.68', '2025-04-08', 'Alicia', 'UD5722511YX'),
(128, 'Laporte', 'Alix', '0479 38 36 86', 'alix.laporte@gmail.com', 8, '141.134.225.146', '2025-03-01', 'Alix', 'hx5090357rU'),
(129, 'Van den Bosch', 'Graciela', '0475 28 94 46', 'graciela.vandenbosch@gmail.com', 3, '193.190.135.210', '2025-02-01', 'Graciela', 'tt4229005gg'),
(130, 'Rommel', 'Brigitte', '0473 10 22 25', 'brigitte.rommel@gmail.com', 13, '84.199.28.130', '2025-03-08', 'Brigitte', 'Jq2772386yG'),
(131, 'Hemeryck', 'Alain', '0477 68 65 42', 'alain.hemeryck@gmail.com', 22, '91.181.181.86', '2025-02-06', 'Alain', 'cX5405211bR'),
(132, 'Robbyns', 'Liselore', '0477 11 36 69', 'liselore.robbyns@gmail.com', 5, '94.226.26.116', '2025-04-08', 'Liselore', 'vk2140983fA'),
(133, 'Van den Berghe', 'Dries', '0479 53 20 24', 'dries.vandenberghe@gmail.com', 22, '81.82.248.80', '2025-03-01', 'Dries', 'dr5226376ke'),
(134, 'Glorieux', 'Sandra', '0478 29 70 73', 'sandra.glorieux@gmail.com', 7, '193.190.147.189', '2025-04-05', 'Sandra', 'Ka4219523sM'),
(135, 'Gheysen', 'Tristan', '0478 61 64 17', 'tristan.gheysen@gmail.com', 8, '81.82.228.182', '2025-02-02', 'Tristan', 'QG8204367Rn'),
(136, 'Gheysen', 'Lieve', '0473 71 77 87', 'lieve.gheysen@gmail.com', 13, '81.83.4.88', '2025-01-05', 'Lieve', 'eg8924858JQ'),
(137, 'Scholtmeijer', 'Sebastien', '0475 76 14 59', 'sebastien.scholtmeijer@gmail.com', 22, '81.82.242.198', '2025-01-01', 'Sebastien', 'fM4642244We'),
(139, 'Dekeuwer', 'Ward', '0478 66 51 21', 'ward.dekeuwer@gmail.com', 6, '178.116.17.173', '2025-03-07', 'Ward', 'HA2253358nk'),
(140, 'Riem', 'Lukas', '0474 61 85 93', 'lukas.riem@gmail.com', 7, '109.130.43.226', '2025-01-06', 'Lukas', 'pn3448228TW'),
(141, 'Verplancke', 'Ellen', '0475 63 77 50', 'ellen.verplancke@gmail.com', 7, '78.20.175.187', '2025-04-02', 'Ellen', 'Xq3576788UA'),
(142, 'Hemeryck', 'Ingrid', '0474 69 62 12', 'ingrid.hemeryck@gmail.com', 4, '81.82.205.139', '2025-01-05', 'Ingrid', 'WV9689213Yb'),
(143, 'Broucke', 'Mieke', '0474 55 97 23', 'mieke.broucke@gmail.com', 7, '81.164.233.87', '2025-04-07', 'Mieke', 'pn2658118qf'),
(144, 'Vandaele', 'Vicky', '0473 99 84 23', 'vicky.vandaele@gmail.com', 7, '81.242.192.218', '2025-03-05', 'Vicky', 'Ss6312500jn'),
(145, 'Degreeffe', 'Jens', '0476 18 13 97', 'jens.degreeffe@gmail.com', 7, '81.82.239.48', '2025-01-01', 'Jens', 'Yq7333697tm'),
(146, 'Decoster ', 'Vanessa', '0477 45 76 33', 'vanessa.decoster@gmail.com', 5, '94.226.177.196', '2025-02-04', 'Vanessa', 'rS4341975nq'),
(147, 'Cornilly', 'Berbe', '0477 70 19 54', 'berbe.cornilly@gmail.com', 7, '81.82.252.240', '2025-02-01', 'Berbe', 'tp7251373wy'),
(148, 'Mulier', 'Diederik ', '0479 20 41 94', 'diederik.mulier@gmail.com', 3, '178.117.175.59', '2025-03-06', 'Diederik ', 'Ug8037506YH'),
(149, 'Pardo', 'Nancy', '0476 52 63 76', 'nancy.pardo@gmail.com', 7, '77.109.115.91', '2025-03-09', 'Nancy', 'hk8923052yt'),
(150, 'Goemaere', 'Gianny', '0473 74 64 75', 'gianny.goemaere@gmail.com', 13, '141.134.195.214', '2025-03-03', 'Gianny', 'cx4711323qj'),
(151, 'Vandeweghe', 'Sébastien', '0479 21 28 91', 'sebastien.vandeweghe@gmail.com', 4, '78.20.24.113', '2025-02-06', 'Sébastien', 'wy8276746xC'),
(152, 'Hemeryck', 'Viktor', '0477 33 37 20', 'viktor.hemeryck@gmail.com', 22, '81.245.149.35', '2025-01-06', 'Viktor', 'wp3531810bG'),
(153, 'Segaert', 'Adriaan', '0473 73 38 11', 'adriaan.segaert@gmail.com', 13, '84.194.186.191', '2025-04-03', 'Adriaan', 'RZ6310266Kh'),
(154, 'Christiaens', 'Mieke', '0474 32 86 72', 'mieke.christiaens@gmail.com', 7, '193.190.172.71', '2025-01-06', 'Mieke', 'RZ5479923mh'),
(155, 'Clybouw', 'Rose-Anne', '0475 15 66 57', 'roseanne.clybouw@gmail.com', 4, '213.118.94.183', '2025-01-07', 'Rose-Anne', 'MT2669626dT'),
(156, 'Clybouw', 'Simon', '0477 39 49 26', 'simon.clybouw@gmail.com', 9, '213.49.238.3', '2025-01-03', 'Simon', 'vg3037043bz'),
(157, 'Sumter', 'Wout', '0475 76 27 59', 'wout.sumter@gmail.com', 1, '81.82.201.170', '2025-03-07', 'Wout', 'zc1931308zR'),
(158, 'Desmet', 'Boris', '0474 42 69 44', 'boris.desmet@gmail.com', 6, '213.49.244.122', '2025-01-06', 'Boris', 'Xr1752496jm'),
(159, 'Vercruysse', 'Simon', '0473 88 98 10', 'simon.vercruysse@gmail.com', 3, '84.192.48.72', '2025-01-07', 'Simon', 'nw1009873GX'),
(160, 'Van der Meersch', 'Cindy', '0475 53 19 81', 'cindy.vandermeersch@gmail.com', 22, '81.83.17.66', '2025-02-02', 'Cindy', 'cS5242764ST'),
(161, 'Dhollander', 'Johan', '0474 64 55 31', 'johan.dhollander@gmail.com', 4, '91.183.55.215', '2025-03-02', 'Johan', 'AJ9686137dA'),
(162, 'Bruynooghe', 'Cindy', '0478 78 64 96', 'cindy.bruynooghe@gmail.com', 6, '::1', '2018-04-20T15:45:21+02:00', 'Cindy', 'pj6612420qE'),
(163, 'Demeyere', 'Stefan', '0476 70 63 65', 'stefan.demeyere@gmail.com', 6, '193.190.147.189', '2025-03-01', 'Stefan', 'qu1624118FM'),
(164, 'Demeyere', 'Jessy', '0473 41 55 76', 'jessy.demeyere@gmail.com', 4, '81.11.185.167', '2025-01-05', 'Jessy', 'pG3619834Ga'),
(165, 'Demeyere', 'Tania', '0473 23 46 74', 'tania.demeyere@gmail.com', 13, '81.165.246.253', '2025-01-02', 'Tania', 'eK7370301Hw'),
(166, 'Dhollander', 'Wesley', '0473 22 58 85', 'wesley.dhollander@gmail.com', 5, '81.82.209.85', '2025-01-04', 'Wesley', 'yY1172947fd'),
(167, 'Haeyen', 'Sien', '0476 84 65 96', 'sien.haeyen@gmail.com', 1, '81.82.253.121', '2025-02-05', 'Sien', 'qE6198527wc'),
(168, 'Hosten', 'Laurence', '0479 99 61 83', 'laurence.hosten@gmail.com', 3, '81.165.236.144', '2025-01-02', 'Laurence', 'Qn8748547pg'),
(169, 'Bruynooghe', 'Ralph', '0475 21 97 62', 'ralph.bruynooghe@gmail.com', 8, '::1', '2025-04-06T14:32:32+02:00', 'Ralph', 'jM5391325Ak'),
(170, 'Grimmelprez', 'Carine', '0478 73 16 38', 'carine.grimmelprez@gmail.com', 1, '109.132.58.21', '2025-04-01', 'Carine', 'yj7887879na'),
(171, 'Demeyere', 'Christel', '0473 95 92 58', 'christel.demeyere@gmail.com', 9, '193.190.77.32', '2025-02-03', 'Christel', 'UY6532034MF'),
(172, 'De Roos', 'Bart', '0476 32 23 31', 'bart.deroos@gmail.com', 1, '78.23.251.246', '2025-03-05', 'Bart', 'da8425479um'),
(173, 'Vergison', 'Barbara', '0474 49 56 75', 'barbara.vergison@gmail.com', 3, '81.165.246.253', '2025-01-07', 'Barbara', 'FA3488183fT'),
(174, 'Wildemeersch', 'Kris', '0474 98 42 92', 'kris.wildemeersch@gmail.com', 5, '213.118.166.34', '2025-01-01', 'Kris', 'HX6768958Ac'),
(175, 'Standaert', 'Christophe', '0474 37 53 55', 'christophe.standaert@gmail.com', 4, '91.180.147.227', '2025-02-04', 'Christophe', 'EN7434074Ab'),
(176, 'Delplancq', 'Dominique', '0474 53 77 29', 'dominique.delplancq@gmail.com', 8, '77.109.118.88', '2025-04-04', 'Dominique', 'qj6464288GY'),
(177, 'Elferink ', 'Arne', '0473 99 33 81', 'arne.elferink@gmail.com', 8, '91.182.85.216', '2025-04-01', 'Arne', 'Cz8177459mp'),
(178, 'Vrielynck', 'Anje', '0478 47 51 64', 'anje.vrielynck@gmail.com', 6, '78.23.196.249', '2025-02-06', 'Anje', 'Qz6598850Yt'),
(179, 'Bruynooghe', 'Dieter', '0474 92 42 52', 'dieter.bruynooghe@gmail.com', 4, '::1', '2018-04-22T18:12:02+02:00', 'Dieter', 'XR1539493Yg'),
(181, 'Vandenheede', 'Xander', '0476 46 75 27', 'xander.vandenheede@gmail.com', 5, '194.29.71.116', '2025-01-05', 'Xander', 'nD4196871vr'),
(182, 'Verrecas', 'Herman', '0479 46 82 15', 'herman.verrecas@gmail.com', 9, '94.224.172.66', '2025-01-09', 'Herman', 'GZ1654229Kh'),
(183, 'Bruynooghe', 'Lien', '0479 46 49 24', 'lien.bruynooghe@gmail.com', 1, '::1', '2025-04-06T14:04:46+02:00', 'Lien', 'Bf2947005MQ'),
(184, 'Delhaye', 'Erik', '0476 45 83 80', 'erik.delhaye@gmail.com', 7, '5.23.141.85', '2025-04-04', 'Erik', 'Dn8798689gr'),
(185, 'Carpentier', 'Josiane', '0479 96 55 88', 'josiane.carpentier@gmail.com', 7, '78.20.179.180', '2025-01-08', 'Josiane', 'Ya8291859hR'),
(186, 'Bonnet', 'Charlotte', '0475 40 51 40', 'charlotte.bonnet@gmail.com', 8, '84.194.102.68', '2025-04-05', 'Charlotte', 'Km7925144eV'),
(187, 'Grimmelprez', 'Frederiek', '0475 21 60 49', 'frederiek.grimmelprez@gmail.com', 4, '81.82.200.211', '2025-04-01', 'Frederiek', 'xM6707874qB'),
(188, 'De Muynck', 'Jay', '0479 54 64 28', 'jay.demuynck@gmail.com', 1, '81.83.31.38', '2025-03-01', 'Jay', 'bX3993554aG'),
(189, 'Verwichte', 'Martine', '0476 36 25 51', 'martine.verwichte@gmail.com', 8, '109.133.12.216', '2025-01-08', 'Martine', 'pk4886627XF'),
(190, 'De Roos', 'Anne', '0479 24 35 69', 'anne.deroos@gmail.com', 13, '66.249.81.234', '2025-03-02', 'Anne', 'Ss8884903KX'),
(191, 'Plancke', 'Joke', '0478 71 73 65', 'joke.plancke@gmail.com', 3, '81.82.247.156', '2025-01-01', 'Joke', 'jp4859304BV'),
(192, 'Duthieuw', 'Trien', '0474 83 13 80', 'trien.duthieuw@gmail.com', 6, '78.23.93.217', '2025-04-05', 'Trien', 'Rn5752967Fp'),
(193, 'De Langhe', 'Wim', '0478 27 19 35', 'wim.delanghe@gmail.com', 7, '78.21.120.79', '2025-01-06', 'Wim', 'ft4418502Um'),
(194, 'Seys', 'Frank', '0474 26 60 57', 'frank.seys@gmail.com', 8, '141.135.136.221', '2025-02-06', 'Frank', 'yh2618870HG'),
(196, 'Vermeulen', 'Lars', '0477 94 35 52', 'lars.vermeulen@gmail.com', 5, '84.197.39.164', '2025-02-05', 'Lars', 'BM8309276an'),
(197, 'Ben Chikha', 'Heidi', '0478 14 36 90', 'heidi.benchikha@gmail.com', 6, '81.82.246.181', '2025-04-06', 'Heidi', 'ng7757029zq'),
(198, 'Beirens', 'Carine', '0474 91 35 51', 'carine.beirens@gmail.com', 6, '178.119.180.170', '2025-02-08', 'Carine', 'sT5823468mF'),
(199, 'Lingier', 'Sofie', '0478 43 86 14', 'sofie.lingier@gmail.com', 6, '84.194.160.252', '2025-03-08', 'Sofie', 'ye4985302Ve'),
(200, 'Fonteyne', 'Britt', '0473 69 32 56', 'britt.fonteyne@gmail.com', 22, '81.165.202.91', '2025-04-04', 'Britt', 'xZ4559876zW'),
(201, 'Vandeputte ', 'Hilde', '0479 35 92 23', 'hilde.vandeputte@gmail.com', 13, '178.119.180.170', '2025-01-02', 'Hilde', 'VC4790577WY'),
(202, 'Demeyere', 'Michelle', '0478 90 89 61', 'michelle.demeyere@gmail.com', 1, '81.247.170.2', '2025-04-01', 'Michelle', 'bV9315675gQ'),
(203, 'Hosten', 'Petra', '0476 95 36 22', 'petra.hosten@gmail.com', 13, '81.165.202.91', '2025-01-01', 'Petra', 'pC1216626Dg'),
(204, 'Helsen', 'Ingrid', '0476 15 66 29', 'ingrid.helsen@gmail.com', 7, '213.118.218.151', '2025-04-01', 'Ingrid', 'Vj9456423tK'),
(205, 'Christiaens', 'Hilde', '0473 16 22 80', 'hilde.christiaens@gmail.com', 5, '91.179.87.22', '2025-03-05', 'Hilde', 'sb7167158Uu'),
(206, 'Vanhoutte', 'Amber', '0479 29 46 21', 'amber.vanhoutte@gmail.com', 4, '78.21.210.114', '2025-04-03', 'Amber', 'zb5858673Hq'),
(207, 'Dumon', 'Louis', '0479 43 90 54', 'louis.dumon@gmail.com', 1, '80.200.110.12', '2025-02-06', 'Louis', 'gx5239790xc'),
(208, 'Spaens', 'Sylvie', '0475 92 75 31', 'sylvie.spaens@gmail.com', 1, '81.83.19.233', '2025-01-01', 'Sylvie', 'FB5393643xm'),
(209, 'Eggermont', 'Amandine', '0473 71 78 12', 'amandine.eggermont@gmail.com', 5, '109.132.20.223', '2025-03-03', 'Amandine', 'FV5341364ba'),
(210, 'Verstraete', 'Julie', '0474 70 37 69', 'julie.verstraete@gmail.com', 8, '62.235.37.89', '2025-01-03', 'Julie', 'Aa5996607yp'),
(211, 'Willems', 'Dirk', '0477 96 50 16', 'dirk.willems@gmail.com', 7, '109.133.46.93', '2025-02-06', 'Dirk', 'VZ7306857av'),
(212, 'Desoete', 'Kristof', '0476 51 77 78', 'kristof.desoete@gmail.com', 8, '109.128.28.16', '2025-01-09', 'Kristof', 'Je7155557wz'),
(214, 'Vanlancker', 'Hilde', '0478 17 93 89', 'hilde.vanlancker@gmail.com', 3, '193.191.158.55', '2025-03-06', 'Hilde', 'Gq6217241VH'),
(215, 'Ryckeboer', 'Mieke', '0479 69 79 38', 'mieke.ryckeboer@gmail.com', 5, '84.193.93.234', '2025-01-08', 'Mieke', 'Sh7393712JR'),
(216, 'Vanmassenhove', 'Axelle', '0477 84 78 11', 'axelle.vanmassenhove@gmail.com', 22, '193.190.154.175', '2025-01-09', 'Axelle', 'pB6090668jZ'),
(217, 'Pieters', 'Filiep', '0473 24 36 39', 'filiep.pieters@gmail.com', 13, '193.190.154.175', '2025-01-05', 'Filiep', 'Cj6257283Fx'),
(218, 'Mestdagh', 'Roger', '0474 30 67 30', 'roger.mestdagh@gmail.com', 5, '193.190.154.174', '2025-01-01', 'Roger', 'Rr2241766mW'),
(219, 'Dhollander', 'David', '0479 29 75 25', 'david.dhollander@gmail.com', 8, '193.190.154.174', '2025-02-08', 'David', 'dT9370735BG'),
(220, 'Kennes', 'Kristof', '0477 44 25 88', 'kristof.kennes@gmail.com', 4, '84.193.89.194', '2025-01-01', 'Kristof', 'ah3648813mX'),
(221, 'Grimmelprez', 'Corneel', '0474 53 14 69', 'corneel.grimmelprez@gmail.com', 4, '178.119.22.188', '2025-03-04', 'Corneel', 'HH6021371zj'),
(222, 'Linthout', 'Enrico', '0473 11 72 37', 'enrico.linthout@gmail.com', 4, '109.133.47.212', '2025-02-05', 'Enrico', 'QC3094943wc'),
(223, 'Huys', 'Cindy', '0479 35 95 15', 'cindy.huys@gmail.com', 4, '178.118.130.98', '2025-04-08', 'Cindy', 'Xq2792171tK'),
(224, 'Poublon', 'Claude', '0474 93 72 31', 'claude.poublon@gmail.com', 9, '178.118.130.98', '2025-03-04', 'Claude', 'yb4540407pS'),
(225, 'Wildemeersch', 'Patrick', '0478 22 64 57', 'patrick.wildemeersch@gmail.com', 4, '178.118.130.98', '2025-03-09', 'Patrick', 'Nt7288798tJ'),
(226, 'Vanneste', 'Emilie', '0477 57 71 25', 'emilie.vanneste@gmail.com', 6, '213.118.210.84', '2025-01-04', 'Emilie', 'et1239277db'),
(227, 'Niville', 'Dylan', '0479 58 45 91', 'dylan.niville@gmail.com', 7, '78.20.116.150', '2025-04-01', 'Dylan', 'Uv6154481Gf'),
(228, 'Elinck', 'Philippe', '0474 61 21 90', 'philippe.elinck@gmail.com', 7, '78.23.68.180', '2025-02-01', 'Philippe', 'na2312036HK'),
(229, 'Ryheul', 'Kim', '0479 91 26 21', 'kim.ryheul@gmail.com', 13, '94.224.182.61', '2025-03-02', 'Kim', 'Df7074013UH'),
(230, 'Lowyck', 'Jérôme', '0477 46 24 56', 'jerome.lowyck@gmail.com', 6, '78.20.11.62', '2025-03-07', 'Jérôme', 'Rf8192922VG'),
(231, 'Rogissart', 'Louison', '0474 48 30 48', 'louison.rogissart@gmail.com', 13, '80.200.238.233', '2025-04-08', 'Louison', 'vr9825621pD'),
(232, 'Fontenoy', 'Kevin', '0477 79 19 16', 'kevin.fontenoy@gmail.com', 7, '87.66.132.62', '2025-01-08', 'Kevin', 'Md1083817gU'),
(233, 'Dezutter', 'Maria-Anne', '0474 52 32 45', 'mariaanne.dezutter@gmail.com', 4, '78.22.176.96', '2025-01-03', 'Maria-Anne', 'bf9366065QN'),
(234, 'Vermeersch', 'Yves', '0478 15 26 28', 'yves.vermeersch@gmail.com', 3, '83.134.95.6', '2025-04-04', 'Yves', 'rB6935767hQ'),
(235, 'Vierstraete ', 'Thibault', '0473 68 16 80', 'thibault.vierstraete@gmail.com', 1, '78.23.169.248', '2025-02-03', 'Thibault', 'mA3633005bC'),
(236, 'Vierstraete', 'Valérie', '0474 67 76 89', 'valerie.vierstraete@gmail.com', 3, '84.194.11.174', '2025-01-07', 'Valérie', 'tS1480029kg'),
(237, 'Van den abeele', 'Axelle', '0473 12 37 12', 'axelle.vandenabeele@gmail.com', 8, '81.11.207.247', '2025-02-09', 'Axelle', 'mx9267404Wh'),
(239, 'Nimi Malou Kedy', 'Lotte', '0479 47 93 59', 'lotte.nimimaloukedy@gmail.com', 9, '81.82.246.178', '2025-04-03', 'Lotte', 'Sg7557615jX'),
(247, 'Goossens', 'Febe', '0478 12 39 27', 'febe.goossens@gmail.com', 9, '::1', '', 'Cfb5224', 'QY6405475uZ'),
(248, 'Goossens', 'Febe', '0478 12 39 27', 'febe.goossens@gmail.com', 9, '::1', '', 'Fwu4818', 'NU');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tblmenu`
--
ALTER TABLE `tblmenu`
  ADD PRIMARY KEY (`menuID`);

--
-- Indexen voor tabel `tblnieuwsbrief`
--
ALTER TABLE `tblnieuwsbrief`
  ADD PRIMARY KEY (`nieuwsbriefID`);

--
-- Indexen voor tabel `tblplaatsen`
--
ALTER TABLE `tblplaatsen`
  ADD PRIMARY KEY (`graveerID`);

--
-- Indexen voor tabel `tblregistratie`
--
ALTER TABLE `tblregistratie`
  ADD PRIMARY KEY (`registratieID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tblmenu`
--
ALTER TABLE `tblmenu`
  MODIFY `menuID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT voor een tabel `tblnieuwsbrief`
--
ALTER TABLE `tblnieuwsbrief`
  MODIFY `nieuwsbriefID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `tblplaatsen`
--
ALTER TABLE `tblplaatsen`
  MODIFY `graveerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `tblregistratie`
--
ALTER TABLE `tblregistratie`
  MODIFY `registratieID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
