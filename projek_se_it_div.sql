-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 09:38 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_se_it_div`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie_list`
--

CREATE TABLE `movie_list` (
  `movieId` int(11) NOT NULL,
  `movieName` varchar(50) NOT NULL,
  `movieDesc` text NOT NULL,
  `movie_image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_list`
--

INSERT INTO `movie_list` (`movieId`, `movieName`, `movieDesc`, `movie_image`) VALUES
(1, 'Antman-Wasp Quantumania', 'In the film, which officially kicks off phase 5 of the Marvel Cinematic Universe, Super-Hero partners Scott Lang (Paul Rudd) and Hope Van Dyne (Evangeline Lilly) return to continue their adventures as Ant-Man and the Wasp. Together, with Hope’s parents Hank Pym (Michael Douglas) and Janet Van Dyne (Michelle Pfeiffer), the family finds themselves exploring the Quantum Realm, interacting with strange new creatures and embarking on an adventure that will push them beyond the limits of what they thought was possible. Jonathan Majors joins the adventure as Kang.', 0x416e744d616e2d5175616e74756d616e69612e6a7067),
(2, 'Captain Marvel', 'After crashing an experimental aircraft, Air Force pilot Carol Danvers is discovered by the Kree and trained as a member of the elite Starforce Military under the command of her mentor Yon-Rogg. Six years later, after escaping to Earth while under attack by the Skrulls, Danvers begins to discover there\'s more to her past. With help from S.H.I.E.L.D. agent Nick Fury, they set out to unravel the truth.', 0x4361707461696e4d617276656c2e6a7067),
(3, 'Fast X', 'The final road begins! Dom Torretto and his family have made it through thick and thin together while succeeding in various missions and fighting off multiple villains. But now Dom is put to the ultimate test when he goes up against Dante Reyes, the son of an old foe who is out to exact revenge for the death of his father. With time running out and help from new allies, Dom and his family are in for the fight of their lives against the biggest enemy they have ever faced.', 0x46617374582e6a7067),
(4, 'Oppenheimer', 'J. Robert Oppenheimer, (born, April 22, 1904, New York, N.Y., U.S.—died Feb. 18, 1967, Princeton, N.J.), U.S. theoretical physicist. He graduated from Harvard University, did research at Cambridge University, and earned a doctorate from Göttingen University. He returned to the U.S. to teach at the California Institute of Technology (1929–47). His research focused on energy processes of subatomic particles, and he trained a generation of American physicists. In World War II he was named director of the army’s atomic-bomb project, later known as the Manhattan Project, and set up the laboratory in Los Alamos, N.M., that remains a principal weapons-research laboratory. He directed the Institute for Advanced Study in Princeton (1947–66). He strongly opposed the development of the hydrogen bomb, and in 1953 he was suspended from secret nuclear research as an alleged communist sympathizer and a security risk; the case, which pitted him against Edward Teller, became a worldwide cause célèbre. In 1963 he was reinstated and awarded the Enrico Fermi Award.', 0x4f7070656e6865696d65722e6a7067),
(5, 'Transformers: Rise of the Beasts', 'Returning to the action and spectacle that have captured moviegoers around the world, Transformers: Rise of the Beasts will take audiences on a \'90s globetrotting adventure with the Autobots and introduce a whole new faction of Transformers - the Maximals - to join them as allies in the existing battle for earth. Directed by Steven Caple Jr. and starring Anthony Ramos and Dominique Fishback.', 0x5472616e73666f726d6572732e6a7067),
(6, 'Mission: Impossible - Dead Reckoning Part One', 'Ethan Hunt and the IMF team must track down a terrifying new weapon that threatens all of humanity if it falls into the wrong hands. With control of the future and the fate of the world at stake, a deadly race around the globe begins. Confronted by a mysterious, all-powerful enemy, Ethan is forced to consider that nothing can matter more than the mission -- not even the lives of those he cares about most.\r\n', 0x4d697373696f6e496d706f737369626c652e6a7067),
(7, 'John Wick: Chapter 4', 'John Wick uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.\r\n', 0x4a6f686e5769636b342e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_info`
--

CREATE TABLE `ticket_info` (
  `ticketId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `movieId` int(11) NOT NULL,
  `ticketPrice` int(11) NOT NULL,
  `ticketDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_info`
--

INSERT INTO `ticket_info` (`ticketId`, `userId`, `movieId`, `ticketPrice`, `ticketDate`) VALUES
(33, 7, 1, 150, '2023-12-06'),
(34, 7, 2, 150, '2023-12-06'),
(35, 4, 6, 150, '2023-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `user_identity`
--

CREATE TABLE `user_identity` (
  `id` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `phoneNumber` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_identity`
--

INSERT INTO `user_identity` (`id`, `fullName`, `phoneNumber`, `email`, `pass`) VALUES
(3, 'test1', '1231231231', 'test1@gmail.com', 'Testtest1'),
(4, 'test2', '1231231233', 'test2@gmail.com', 'Testtest2'),
(5, 'test3', '1231231232', 'test3@gmail.com', 'Testtest3'),
(6, 'test4', '12344321', 'test4@gmail.com', 'password4'),
(7, 'test5', '1111111111111', 'test5@gmail.com', 'Test5555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie_list`
--
ALTER TABLE `movie_list`
  ADD PRIMARY KEY (`movieId`);

--
-- Indexes for table `ticket_info`
--
ALTER TABLE `ticket_info`
  ADD PRIMARY KEY (`ticketId`);

--
-- Indexes for table `user_identity`
--
ALTER TABLE `user_identity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie_list`
--
ALTER TABLE `movie_list`
  MODIFY `movieId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ticket_info`
--
ALTER TABLE `ticket_info`
  MODIFY `ticketId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user_identity`
--
ALTER TABLE `user_identity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
