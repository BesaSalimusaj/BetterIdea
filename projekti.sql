-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 02:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekti`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `Id` int(11) NOT NULL,
  `Path` varchar(255) NOT NULL,
  `IDperdoruesit` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`Id`, `Path`, `IDperdoruesit`) VALUES
(8, 'images/download (1).jfif', 13),
(9, 'images/download (6).jfif', 13),
(10, 'images/download (5).jfif', 13),
(13, 'images/download (3).jfif', 13),
(14, 'images/download (2).jfif', 13),
(16, 'images/download (8).jfif', 13),
(17, 'images/1.jpg', 13),
(19, 'images/download (13).jfif', 14),
(23, 'images/images (4).jfif', 14);

-- --------------------------------------------------------

--
-- Table structure for table `kalendari`
--

CREATE TABLE `kalendari` (
  `Id` int(6) UNSIGNED NOT NULL,
  `IDperdorues` int(6) UNSIGNED NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp(),
  `Veprimtarite` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kalendari`
--

INSERT INTO `kalendari` (`Id`, `IDperdorues`, `Data`, `Veprimtarite`) VALUES
(9, 13, '2020-02-08 16:24:47', 'With absolute positioning, an element can be placed anywhere on a page. The heading below is placed 100px from the left of the page and 150px from the top of the page'),
(11, 13, '2020-02-08 16:41:46', 'The CSS box model is essentially a box that wraps around every HTML element. It consists of: margins, borders, padding, and the actual content. The image below illustrates the box model:'),
(12, 13, '2020-02-08 16:42:36', 'The CSS box model is essentially a box that wraps around every HTML element. It consists of: margins, borders, padding, and the actual content. The image below illustrates the box model:');

-- --------------------------------------------------------

--
-- Table structure for table `kategoria`
--

CREATE TABLE `kategoria` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Emri_Kategorise` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategoria`
--

INSERT INTO `kategoria` (`ID`, `Emri_Kategorise`) VALUES
(1, 'Koha'),
(2, 'Inspirim'),
(3, 'Familja'),
(4, 'Edukim'),
(5, 'Fjaleteurta'),
(6, 'Eksperienca'),
(7, 'Deshtime'),
(8, 'Liria'),
(9, 'Dashuria'),
(10, 'Jeta'),
(11, 'Lidhjet'),
(12, 'Bukuria');

-- --------------------------------------------------------

--
-- Table structure for table `perdoruesi`
--

CREATE TABLE `perdoruesi` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Emri` varchar(30) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Fjalekalimi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perdoruesi`
--

INSERT INTO `perdoruesi` (`ID`, `Emri`, `Email`, `Fjalekalimi`) VALUES
(8, 'Elsa', 'Elsa@yahoo.com', 'Elsa1234'),
(9, 'Lindita', 'Lindita@gmail.com', 'Lindita1234'),
(10, 'Sude', 'Sude@yahoo.com', 'Sude1234'),
(11, 'Edisnajda', 'Edisnajda@yahoo.com', 'Edisnajda1234'),
(13, 'Besa', 'Besa@yahoo.com', 'Besa1234'),
(14, 'Zeliha', 'Zeli@yahoo.com', 'Zeli1234'),
(15, 'Aishe', 'Aishe@yahoo.com', 'Aishe1234'),
(16, 'Romina', 'Romina@yahoo.com', 'Romina1234'),
(18, 'Jim', 'Jim@yahoo.com', 'Jim1234'),
(19, 'Hysen', 'Hysen@yahoo.com', 'Hysen1234'),
(20, 'Desara', 'desara@hotmail.com', 'Sarasara1');

-- --------------------------------------------------------

--
-- Table structure for table `preferuarat`
--

CREATE TABLE `preferuarat` (
  `IDperdoruesit` int(6) UNSIGNED NOT NULL,
  `IDthenies` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preferuarat`
--

INSERT INTO `preferuarat` (`IDperdoruesit`, `IDthenies`) VALUES
(13, 10),
(13, 15),
(13, 17);

-- --------------------------------------------------------

--
-- Table structure for table `thenie`
--

CREATE TABLE `thenie` (
  `Id` int(6) UNSIGNED NOT NULL,
  `IDperdorues` int(6) UNSIGNED NOT NULL,
  `IDkategoria` int(6) UNSIGNED NOT NULL,
  `thenie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thenie`
--

INSERT INTO `thenie` (`Id`, `IDperdorues`, `IDkategoria`, `thenie`) VALUES
(1, 13, 1, 'Një nga përdorimet më të këqija të kohës, është të bësh diçka shumë mirë që nuk është e nevojshme të bëhet.'),
(6, 13, 4, '“Edukimi është lëvizje nga errësira në dritë.”- Allan Bloom'),
(7, 14, 3, 'Nëna është personi i vetëm në botë i cili të do para se të të shohë. '),
(8, 14, 2, ' Lëviz vetë, përpara se të lëvizësh botën'),
(9, 14, 5, 'Nga një vrimë e vogël, rrjedh e gjithë fuçia'),
(10, 11, 5, '\r\nShkon një herë, bëhen gjurma; dy tri herë bëhet udhë'),
(11, 13, 5, '\"Një shkëndijë ndez një mal\"'),
(12, 13, 5, '\"Për një dorë kashtë e vret samari mushkën.\"'),
(13, 13, 5, '\"Për një pe, për një gjilpërë, vajti dëm një punë e tërë\"'),
(15, 13, 5, '\"Së ligës ruaju, e mira të ndjek vetë nga pas.\"'),
(16, 13, 5, '\"Një zog që ndahet nga klloçka, e ha shqipja.\"'),
(17, 11, 5, '\"Pa djalë e pa gocë rrova, pa shok nuk rrojta\"'),
(18, 11, 5, '\"Punën nuk e bën një gisht, po e bën grushti.\"'),
(19, 8, 5, '\"Qentë le të lehin, karvanet të shkojnë përpara\"'),
(20, 8, 9, '“Era e cila do të na merr atë të cilën e duam, është ajo e njejta e cilat do të na sjellin neve diçka për të dashuruar. Prandaj nuk duhet të qajmë për gjërat të cilat kan ikur, sepse ajo që na përket neve me të vërtetë nuk largohet asnjëherë.”'),
(21, 13, 11, '\"Njerëzit që ecin përpara në këtë botë janë ata që ngrihen dhe kërkojnë për rrethanat që ata duan, dhe kur nuk i gjejnë, i krijojnë.\"'),
(22, 13, 11, '\"Ka njerëz që shkatërrojnë me karakterin e tyre, atë që ata ndërtojnë me mendjet e tyre.\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDperdoruesit` (`IDperdoruesit`);

--
-- Indexes for table `kalendari`
--
ALTER TABLE `kalendari`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDperdorues` (`IDperdorues`);

--
-- Indexes for table `kategoria`
--
ALTER TABLE `kategoria`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `perdoruesi`
--
ALTER TABLE `perdoruesi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `preferuarat`
--
ALTER TABLE `preferuarat`
  ADD PRIMARY KEY (`IDperdoruesit`,`IDthenies`),
  ADD KEY `IDthenies` (`IDthenies`);

--
-- Indexes for table `thenie`
--
ALTER TABLE `thenie`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDperdorues` (`IDperdorues`),
  ADD KEY `IDkategoria` (`IDkategoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `kalendari`
--
ALTER TABLE `kalendari`
  MODIFY `Id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategoria`
--
ALTER TABLE `kategoria`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `perdoruesi`
--
ALTER TABLE `perdoruesi`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `thenie`
--
ALTER TABLE `thenie`
  MODIFY `Id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`IDperdoruesit`) REFERENCES `perdoruesi` (`ID`);

--
-- Constraints for table `kalendari`
--
ALTER TABLE `kalendari`
  ADD CONSTRAINT `kalendari_ibfk_1` FOREIGN KEY (`IDperdorues`) REFERENCES `perdoruesi` (`ID`);

--
-- Constraints for table `preferuarat`
--
ALTER TABLE `preferuarat`
  ADD CONSTRAINT `preferuarat_ibfk_1` FOREIGN KEY (`IDperdoruesit`) REFERENCES `perdoruesi` (`ID`),
  ADD CONSTRAINT `preferuarat_ibfk_2` FOREIGN KEY (`IDthenies`) REFERENCES `thenie` (`Id`);

--
-- Constraints for table `thenie`
--
ALTER TABLE `thenie`
  ADD CONSTRAINT `thenie_ibfk_1` FOREIGN KEY (`IDperdorues`) REFERENCES `perdoruesi` (`ID`),
  ADD CONSTRAINT `thenie_ibfk_2` FOREIGN KEY (`IDkategoria`) REFERENCES `kategoria` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
