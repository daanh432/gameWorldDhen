-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2018 at 05:36 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `categoryImage` varchar(100) NOT NULL,
  `categoryColor` varchar(20) NOT NULL,
  `categoryTextColor` varchar(20) NOT NULL DEFAULT 'black'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `categoryName`, `categoryImage`, `categoryColor`, `categoryTextColor`) VALUES
(1, 'PlayStation 4', 'images/categorys/playstation4.png', '#020151', 'white'),
(2, 'XBox One', 'images/categorys/xboxOne.png', '#127E11', 'black'),
(3, 'Steam', 'images/categorys/steam.png', '#171A21', 'white');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `gameId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `gameName` varchar(255) NOT NULL,
  `gameDescription` text NOT NULL,
  `gamePicture` varchar(255) NOT NULL,
  `gamePrice` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`gameId`, `categoryId`, `gameName`, `gameDescription`, `gamePicture`, `gamePrice`) VALUES
(1, 3, 'Watch Dogs 2', 'Watch Dogs 2 is een action-adventure third-person shooter ontwikkeld door Ubisoft Montreal. Het spel werd op 15 november 2016 uitgegeven door Ubisoft voor de PlayStation 4', '/images/games/watchDogs2.jpg', '59.99'),
(2, 1, 'Rocket League', 'Rocket League is een racevoetbalspel ontwikkeld door Psyonix. In het spel besturen spelers een auto waarmee ze moeten proberen doelpunten te scoren op een veld dat overeenkomsten vertoont met een voetbalveld.', '/images/games/rocketLeague.jpg', '24.99'),
(3, 2, 'Don\'t Starve Together', 'Don\'t Starve Together is de stand-alone multiplayer-uitbreiding van het compromisloze avonturengame wilderness', '/images/games/dontStarveTogheter.jpg', '15.99'),
(4, 3, 'Tom Clancy\'s Rainbow Six Siege', 'Master the art of destruction and gadgetry in Tom Clancy’s Rainbow Six Siege. Face intense close quarters combat, high lethality, tactical decision making, team play and explosive action within every moment. Experience a new era of fierce firefights and expert strategy born from the rich legacy of past Tom Clancy\'s Rainbow Six games.', '/images/games/rainbowSixSiege.jpg', '14.99'),
(5, 3, 'ARK:Survival Evolved', 'Stranded on the shores of a mysterious island  you must learn to survive. Use your cunning to kill or tame the primeval creatures roaming the land', '/images/games/arkSurvivalEvolvedSteam.jpg', '54.99'),
(6, 2, 'ARK:Survival Evolved', 'Stranded on the shores of a mysterious island  you must learn to survive. Use your cunning to kill or tame the primeval creatures roaming the land', '/images/games/arkSurvivalEvolvedXBOX.jpg', '33.33'),
(7, 3, 'Grand Theft Auto V', 'Los Santos is a city of bright lights, long nights and dirty secrets, and they don’t come brighter, longer or dirtier than in GTA Online: After Hours. The party starts now.', '/images/games/gtaVSteam.jpg', '29.99'),
(8, 3, 'Counter-Strike: Global Offensive', 'Counter-Strike: Global Offensive (CS: GO) will expand upon the team-based action gameplay that it pioneered when it was launched 14 years ago. CS: GO features new maps, characters, and weapons and delivers updated versions of the classic CS content (de_dust2, etc.).', '/images/games/csgoLogo.jpg', '12.49'),
(9, 3, 'Garry\'s Mod', 'Garry\'s Mod is a physics sandbox. There aren\'t any predefined aims or goals. We give you the tools and leave you to play.', '/images/games/gmodLogo.png', '9.99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `gameId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
