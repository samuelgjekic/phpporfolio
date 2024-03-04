-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2024 at 12:29 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `hemsidor`
--

CREATE TABLE `hemsidor` (
  `id` int NOT NULL,
  `titel` varchar(255) NOT NULL,
  `beskrivning` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `bild` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hemsidor`
--

INSERT INTO `hemsidor` (`id`, `titel`, `beskrivning`, `url`, `bild`) VALUES
(1, 'DinAi.se', 'Ett projekt som jag känner stort för, en AI assistent som gör olika saker skapad i .NET Blazor som backend, och wordpress som frontend. Detta med hjälp av .NET och PHP.', 'https://dinai.se', 'dinai.png'),
(2, 'Advantix Webbyrå', 'Min egna webbyrå som jag skapat hemsida för, där jag är väldigt nöjd med resultatet även fast jag föredrar backend programmering.', 'https://advantix.se', 'advantix.png'),
(3, 'Lomma Hjärtmottagning', 'En hjärtmottagning i Lomma som jag skapat hemsida för, min webbyrå står fortfarande för drift,hosting, och support för detta företag.', 'https://lommahjartmottagning.se', 'lomma.png'),
(4, 'Sagapo Resturang', 'En resturang som tyvärr gick i konkurs, mallen är sparad på en av mina subdomäner, detta är en sida jag byggt i drupal.', 'https://grekisk.bredfy.com/', 'grekisk.png'),
(6, 'Goggo Grossist', 'Ett företag jag byggt en webbshop för i woocommerce, med skräddarsydda plugins baserade på kundens behov. Här har jag även underhållit sidan och optimerat den för sökmotorer regelbundet\n', 'https://goggogrossist.se', 'goggo.png'),
(7, 'OpenAI Assistant Wrapper for .NET', 'En wrapper för openais assistant som gör det lättare för andra kodare att använda sig av assistenten i .NET, den använder sig av en standard httpclient som anropar openais API.', 'https://github.com/samuelgjekic/OpenAI-Assistants-API-Wrapper-for-.NET', 'openai.png'),
(8, 'MsBilverkstad', 'Ett av mina mindre första projekt jag hade, en bilverkstad, byggt i wordpress med egenbyggda lösningar för bokningar m.m', 'https://msbilverkstad.se', 'ms.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hemsidor`
--
ALTER TABLE `hemsidor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hemsidor`
--
ALTER TABLE `hemsidor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
