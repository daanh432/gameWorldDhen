-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2018 at 08:53 AM
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
CREATE DATABASE IF NOT EXISTS `gameworld` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gameworld`;

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `categoryImage` varchar(100) NOT NULL,
  `categoryColor` varchar(20) NOT NULL,
  `categoryTextColor` varchar(20) NOT NULL DEFAULT 'black'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`categoryId`, `categoryName`, `categoryImage`, `categoryColor`, `categoryTextColor`) VALUES
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
  `gamePicture2` varchar(255) DEFAULT '',
  `gamePicture3` varchar(255) NOT NULL DEFAULT '',
  `gamePrice` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`gameId`, `categoryId`, `gameName`, `gameDescription`, `gamePicture`, `gamePicture2`, `gamePicture3`, `gamePrice`) VALUES
(1, 3, 'Watch Dogs 2', 'Play as Marcus Holloway, a brilliant young hacker living in the birthplace of the tech revolution, the San Francisco Bay Area. Team up with Dedsec, a notorious group of hackers, and expose the hidden dangers of ctOS 2.0, which, in the hands of corrupt corporations, is being wrongfully used to monitor and manipulate citizens on a massive scale.', 'images/games/watchDogs2/main.jpg', 'images/games/watchDogs2/one.jpg', 'images/games/watchDogs2/two.jpg', '59.99'),
(2, 1, 'Rocket League', 'Rocket League is a vehicular soccer video game developed and published by Psyonix. The game was first released for Microsoft Windows and PlayStation 4 in July 2015, with ports for Xbox One, macOS, Linux, and Nintendo Switch being released later on.', 'images/games/rocketLeague/main.jpg', 'images/games/rocketLeague/one.jpg', 'images/games/rocketLeague/two.jpg', '24.99'),
(3, 2, 'Don\'t Starve Together', 'Don\'t Starve Together is somewhat of a sequel to Don\'t Starve, and features the highly requested multiplayer mechanics. It was originally scheduled to come out in Summer 2014, though a specific date was not given. However, sign-ups for a limited-access, closed Beta were released. It came out on Mac and Linux after being finalized on Windows.', 'images/games/dontStarveTogheter/main.jpg', 'images/games/dontStarveTogheter/one.jpg', 'images/games/dontStarveTogheter/two.jpg', '15.99'),
(4, 3, 'Tom Clancy\'s Rainbow Six Siege', 'Master the art of destruction and gadgetry in Tom Clancy’s Rainbow Six Siege. Face intense close quarters combat, high lethality, tactical decision making, team play and explosive action within every moment. Experience a new era of fierce firefights and expert strategy born from the rich legacy of past Tom Clancy\'s Rainbow Six games.', 'images/games/rainbowSixSiege/main.jpg', 'images/games/rainbowSixSiege/one.jpg', 'images/games/rainbowSixSiege/two.jpg', '14.99'),
(5, 3, 'ARK:Survival Evolved', 'Stranded on the shores of a mysterious island  you must learn to survive. Use your cunning to kill or tame the primeval creatures roaming the land', 'images/games/arkSurvivalEvolved/mainSteam.jpg', 'images/games/arkSurvivalEvolved/one.jpg', 'images/games/arkSurvivalEvolved/two.jpg', '54.99'),
(6, 2, 'ARK:Survival Evolved', 'Stranded on the shores of a mysterious island  you must learn to survive. Use your cunning to kill or tame the primeval creatures roaming the land', 'images/games/arkSurvivalEvolved/mainXbox.jpg', 'images/games/arkSurvivalEvolved/one.jpg', 'images/games/arkSurvivalEvolved/two.jpg', '33.33'),
(7, 3, 'Grand Theft Auto V', 'Los Santos is a city of bright lights, long nights and dirty secrets, and they don’t come brighter, longer or dirtier than in GTA Online: After Hours. The party starts now.', 'images/games/grandTheftAutoV/main.jpg', 'images/games/grandTheftAutoV/one.jpg', 'images/games/grandTheftAutoV/two.jpg', '29.99'),
(8, 3, 'Counter-Strike: Global Offensive', 'Counter-Strike: Global Offensive (CS: GO) will expand upon the team-based action gameplay that it pioneered when it was launched 14 years ago. CS: GO features new maps, characters, and weapons and delivers updated versions of the classic CS content (de_dust2, etc.).', 'images/games/counterStrikeGlobalOffensive/main.jpg', 'images/games/counterStrikeGlobalOffensive/one.jpg', 'images/games/counterStrikeGlobalOffensive/two.jpg', '12.49'),
(9, 3, 'Garry\'s Mod', 'Garry\'s Mod is a physics sandbox. There aren\'t any predefined aims or goals. We give you the tools and leave you to play.', 'images/games/garrysMod/main.png', 'images/games/garrysMod/one.jpg', 'images/games/garrysMod/two.jpg', '9.99'),
(10, 1, 'DiRT 4', 'Dirt 4 is a rally-themed racing video game developed by Codemasters. It is the twelfth game in the Colin McRae Rally series and the sixth title to carry the Dirt name. The game was released for Microsoft Windows, PlayStation 4 and Xbox One in June 2017.', 'images/games/dirt4/main.jpg', 'images/games/dirt4/one.jpg', 'images/games/dirt4/two.png', '34.95'),
(11, 1, 'Fifa 18', 'FIFA 18 is a football simulation video game in the FIFA series of video games, developed and published by Electronic Arts and was released worldwide on 29 September 2017 for Microsoft Windows, PlayStation 3, PlayStation 4, Xbox 360, Xbox One and Nintendo Switch. It is the 25th instalment in the FIFA series.', 'images/games/fifa18/main.jpg', 'images/games/fifa18/one.jpg', 'images/games/fifa18/two.jpg', '24.99'),
(12, 1, 'Fortnite: Deep Freeze Bundle', 'Fortnite is an online video game first released in 2017 and developed by Epic Games. It is available as separate software packages having different game modes that otherwise share the same general gameplay and game engine.', 'images/games/fortnite_deep_freeze_bundle/main.jpg', 'images/games/fortnite_deep_freeze_bundle/one.jpg', 'images/games/fortnite_deep_freeze_bundle/two.jpg', '29.00'),
(13, 1, 'Just Dance 2018', 'Just Dance 2018 is a dance rhythm game developed by Ubisoft. It was unveiled on June 12, 2017, during its E3 press conference, and was released on October 24, 2017 for PlayStation 3, PlayStation 4, Xbox 360, Xbox One, Wii, Wii U, and Nintendo Switch.', 'images/games/justdance/main.jpg', 'images/games/justdance/one.jpg', 'images/games/justdance/two.jpg', '25.40'),
(14, 1, 'Marvel\'s Spider Man', 'Marvel\'s Spider-Man is an action-adventure game developed by Insomniac Games and published by Sony Interactive Entertainment for the PlayStation 4, based on the Marvel Comics superhero Spider-Man. Released worldwide on September 7, 2018, it is the first licensed game developed by Insomniac.', 'images/games/marvelSpiderMan/main.jpg', 'images/games/marvelSpiderMan/one.jpg', 'images/games/marvelSpiderMan/two.jpg', '38.00'),
(15, 2, 'Battlefield V', 'Battlefield V is a first-person shooter video game developed by EA DICE and published by Electronic Arts. Battlefield V is the sixteenth installment in the Battlefield series. It was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on November 20, 2018.', 'images/games/battlefieldV/main.jpg', 'images/games/battlefieldV/one.jpg', 'images/games/battlefieldV/two.jpg', '59.99'),
(16, 2, 'Farcry 5', 'Far Cry 5 is an action-adventure first-person shooter video game developed by Ubisoft Montreal and Ubisoft Toronto and published by Ubisoft for Microsoft Windows, PlayStation 4 and Xbox One. It is the standalone successor to the 2014 video game Far Cry 4, and the fifth main installment in the Far Cry series.', 'images/games/farcry5/main.jpg', 'images/games/farcry5/one.jpg', 'images/games/farcry5/two.jpg', '29.00'),
(17, 2, 'Hitman 2', 'Hitman 2 is a stealth video game developed by IO Interactive and published by Warner Bros. Interactive Entertainment for Microsoft Windows, PlayStation 4, and Xbox One. It is the seventh entry in the Hitman video game series and is the sequel to the 2016 game Hitman.', 'images/games/hitman2/main.jpg', 'images/games/hitman2/one.jpg', 'images/games/hitman2/two.jpg', '55.00'),
(18, 2, 'Lego City Undercover', 'LEGO City Undercover is an open world and action adventure computer game for the Wii U. It is produced by Traveler\'s Tales and released by Nintendo. Lego City Undercover is based on the toy series LEGO City and Grand Theft Auto.', 'images/games/legoCityUndercover/main.jpg', 'images/games/legoCityUndercover/one.jpg', 'images/games/legoCityUndercover/two.jpg', '19.99'),
(19, 2, 'Steep (Winter Games Edition)', 'Steep is an extreme sports video game developed by Ubisoft Annecy and published by Ubisoft. It was released worldwide on 2 December 2016 for Microsoft Windows, PlayStation 4 and Xbox One.', 'images/games/steepWinterGamesEdition/main.jpg', 'images/games/steepWinterGamesEdition/one.jpg', 'images/games/steepWinterGamesEdition/two.jpg', '17.00'),
(20, 1, 'Tennis World Tour', 'Tennis World Tour is a tennis sports game developed by Breakpoint Studio and published by Bigben Interactive for Nintendo Switch, PlayStation 4, Xbox One and Microsoft Windows.', 'images/games/tennisWorldTour/main.jpg', 'images/games/tennisWorldTour/one.jpg', 'images/games/tennisWorldTour/two.jpg', '35.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameId`),
  ADD KEY `gameCategoryId` (`categoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `gameId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `gameCategoryId` FOREIGN KEY (`categoryId`) REFERENCES `categorys` (`categoryId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
