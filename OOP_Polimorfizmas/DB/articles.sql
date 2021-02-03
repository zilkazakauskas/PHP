-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 01:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `articles`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `author` varchar(40) COLLATE utf16_lithuanian_ci NOT NULL,
  `shortContent` varchar(200) COLLATE utf16_lithuanian_ci NOT NULL,
  `content` text COLLATE utf16_lithuanian_ci NOT NULL,
  `publishDate` date NOT NULL,
  `type` varchar(40) COLLATE utf16_lithuanian_ci NOT NULL,
  `title` varchar(255) COLLATE utf16_lithuanian_ci NOT NULL,
  `addDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `preview` varchar(255) COLLATE utf16_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_lithuanian_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `author`, `shortContent`, `content`, `publishDate`, `type`, `title`, `addDate`, `preview`) VALUES
(1, 'John Doe', 'Shorty Shorts', 'Very shorty shorts were found', '2020-04-01', 'PhotoArticle', 'Kazkoks pavadinimas', '2021-01-29 11:47:50', 'https://findicons.com/files/icons/542/soccer/128/basket_full.png'),
(2, 'Jonas Jon', 'trumptext', 'ilgesnis tekstukas', '2020-04-02', 'ShortArticle', 'Blablabla', '2021-01-28 09:46:22', ''),
(3, 'PetrPetras', 'velgi trumpas', 'tekstas nedidelis', '2020-04-03', 'PhotoArticle', 'Pavadinimas1', '2021-01-29 11:57:02', 'https://findicons.com/files/icons/725/colobrush/128/paper_plane.png'),
(4, 'Vardenis su Pavarde', 'nebeturiu ideju', 'ilgiausias straipsnis ilgiausias straipsnis ilgiausias straipsnis ilgiausias straipsnis ilgiausias straipsnis ilgiausias straipsnis ilgiausias straipsnis ', '2020-04-06', 'NewsArticle', 'Ketvirtas', '2021-01-28 09:46:47', ''),
(5, 'Betkas', 'bla', 'blabla', '2020-05-04', 'NewsArticle', 'Nesamone', '2021-01-28 09:47:00', ''),
(6, 'Veikejas', 'trumpulis', 'Ilgas tekstas', '2020-05-25', 'PhotoArticle', 'Vynuoges', '2021-01-29 11:55:46', 'https://findicons.com/files/icons/326/pry_system/128/desktop_black.png');

-- --------------------------------------------------------

--
-- Table structure for table `preview_images`
--

CREATE TABLE `preview_images` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preview_images`
--

INSERT INTO `preview_images` (`id`, `article_id`, `image`) VALUES
(1, 1, 'https://findicons.com/files/icons/2472/pretty_office_icon_set_part_7/128/sport_dumbbell.png'),
(2, 1, 'https://findicons.com/files/icons/1620/crystal_project/128/clicknrun.png'),
(3, 1, 'https://findicons.com/files/icons/1742/ecqlipse_2/128/pro_evolution_soccer.png'),
(4, 3, 'https://findicons.com/files/icons/772/token_light/128/airplane.png'),
(5, 3, 'https://findicons.com/files/icons/183/gis_gps_map/128/airport.png'),
(6, 3, 'https://findicons.com/files/icons/101/old_school/128/avion.png'),
(7, 6, 'https://findicons.com/files/icons/1067/ipod/128/ipod_video_alternate_black.png'),
(8, 6, 'https://findicons.com/files/icons/870/xbox_360/128/xbox_360_black.png'),
(9, 6, 'https://findicons.com/files/icons/449/canon_digital_camera/128/eos_350d_black.png'),
(10, 2, 'https://findicons.com/files/icons/2219/dot_pictograms/128/man_person_mens_room.png'),
(11, 2, 'https://findicons.com/files/icons/2212/carpelinx/128/password.png'),
(12, 4, 'https://findicons.com/files/icons/1262/amora/128/movies.png'),
(13, 4, 'https://findicons.com/files/icons/2198/dark_glass/128/emoticon.png'),
(14, 4, 'https://findicons.com/files/icons/993/openphone/128/phone.png'),
(15, 5, 'https://findicons.com/files/icons/1015/world_cup_flags/128/usa.png'),
(16, 5, 'https://findicons.com/files/icons/2134/tourism/128/liberty200.png');

-- --------------------------------------------------------

--
-- Table structure for table `straipsniai_temos`
--

CREATE TABLE `straipsniai_temos` (
  `straipsnio_id` int(11) NOT NULL,
  `temos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `straipsniai_temos`
--

INSERT INTO `straipsniai_temos` (`straipsnio_id`, `temos_id`) VALUES
(1, 1),
(1, 3),
(2, 2),
(2, 3),
(3, 2),
(3, 4),
(4, 4),
(5, 3),
(6, 1),
(6, 4),
(1, 5),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `temos`
--

CREATE TABLE `temos` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temos`
--

INSERT INTO `temos` (`id`, `pavadinimas`) VALUES
(1, 'Sportas'),
(2, 'Kriminalai'),
(3, 'Lietuva'),
(4, 'Uzsienis'),
(5, 'Orai'),
(6, 'Laisvalaikis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preview_images`
--
ALTER TABLE `preview_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `straipsniai_temos`
--
ALTER TABLE `straipsniai_temos`
  ADD KEY `straipsnio_id` (`straipsnio_id`),
  ADD KEY `temos_id` (`temos_id`);

--
-- Indexes for table `temos`
--
ALTER TABLE `temos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `preview_images`
--
ALTER TABLE `preview_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `temos`
--
ALTER TABLE `temos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `preview_images`
--
ALTER TABLE `preview_images`
  ADD CONSTRAINT `preview_images_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `straipsniai_temos`
--
ALTER TABLE `straipsniai_temos`
  ADD CONSTRAINT `straipsniai_temos_ibfk_1` FOREIGN KEY (`straipsnio_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `straipsniai_temos_ibfk_2` FOREIGN KEY (`temos_id`) REFERENCES `temos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
