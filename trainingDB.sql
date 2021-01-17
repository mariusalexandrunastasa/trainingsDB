-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 16 Ian 2021 la 14:04
-- Versiune server: 5.5.44-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainingDB`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `Departments`
--

CREATE TABLE IF NOT EXISTS `Departments` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `Departments`
--

INSERT INTO `Departments` (`Id`, `Name`) VALUES
(1, 'Software'),
(2, 'Testing'),
(3, 'R&D'),
(4, 'HR'),
(5, 'Hardware'),
(6, 'Software'),
(7, 'Testing'),
(8, 'R&D'),
(9, 'HR'),
(10, 'Hardware'),
(11, 'Software'),
(12, 'Testing'),
(13, 'R&D'),
(14, 'HR'),
(15, 'Hardware'),
(16, 'Software'),
(17, 'Testing'),
(18, 'R&D'),
(19, 'HR'),
(20, 'Hardware'),
(21, 'Software'),
(22, 'Testing'),
(23, 'R&D'),
(24, 'HR'),
(25, 'Hardware'),
(26, 'Software'),
(27, 'Testing'),
(28, 'R&D'),
(29, 'HR'),
(30, 'Hardware'),
(31, 'Software'),
(32, 'Testing'),
(33, 'R&D'),
(34, 'HR'),
(35, 'Hardware'),
(36, 'Software'),
(37, 'Testing'),
(38, 'R&D'),
(39, 'HR'),
(40, 'Hardware'),
(41, 'Software'),
(42, 'Testing'),
(43, 'R&D'),
(44, 'HR'),
(45, 'Hardware'),
(46, 'Software'),
(47, 'Testing'),
(48, 'R&D'),
(49, 'HR'),
(50, 'Hardware');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `Locations`
--

CREATE TABLE IF NOT EXISTS `Locations` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `Locations`
--

INSERT INTO `Locations` (`Id`, `Name`) VALUES
(1, 'Online'),
(2, 'Off-site'),
(3, 'On-site');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `Participants`
--

CREATE TABLE IF NOT EXISTS `Participants` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `JobTitle` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `Participants`
--

INSERT INTO `Participants` (`Id`, `Name`, `JobTitle`) VALUES
(1, 'Nechi', 'QA'),
(2, 'Nasti', 'DEV'),
(3, 'Ioan', 'DEV'),
(4, 'Nechi', 'QA'),
(5, 'Nasti', 'DEV'),
(6, 'Ioan', 'DEV'),
(7, 'Nechi', 'QA'),
(8, 'Nasti', 'DEV'),
(9, 'Ioan', 'DEV'),
(10, 'Nechi', 'QA'),
(11, 'Nasti', 'DEV'),
(12, 'Ioan', 'DEV'),
(13, 'Nechi', 'QA'),
(14, 'Nasti', 'DEV'),
(15, 'Ioan', 'DEV'),
(16, 'Nechi', 'QA'),
(17, 'Nasti', 'DEV'),
(18, 'Ioan', 'DEV'),
(19, 'Nechi', 'QA'),
(20, 'Nasti', 'DEV'),
(21, 'Ioan', 'DEV'),
(22, 'Nechi', 'QA'),
(23, 'Nasti', 'DEV'),
(24, 'Ioan', 'DEV'),
(25, 'Nechi', 'QA'),
(26, 'Nasti', 'DEV'),
(27, 'Ioan', 'DEV'),
(28, 'Nechi', 'QA'),
(29, 'Nasti', 'DEV'),
(30, 'Ioan', 'DEV');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `Trainers`
--

CREATE TABLE IF NOT EXISTS `Trainers` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `JobTitle` varchar(100) NOT NULL,
  `IsExtern` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `Trainers`
--

INSERT INTO `Trainers` (`Id`, `Name`, `JobTitle`, `IsExtern`) VALUES
(1, 'Nechita', 'SWD1', 0),
(2, 'Nastasa', 'QA/SDE1', 1),
(3, 'Tugui', 'BackEndDEV', 0),
(4, 'Drob', 'SWD2', 0),
(5, 'Marius', 'SDE2/TL', 1),
(6, 'Ioan', 'FrontEndDEV', 0),
(7, 'Sebastian', 'SWD3', 0),
(8, 'Alexandru', 'SDE3/SM', 1),
(9, 'Tugui', 'BackEndDEV', 0),
(10, 'Nechita', 'SWD1', 0),
(11, 'Nastasa', 'QA/SDE1', 1),
(12, 'Ioan', 'FrontEndDEV', 0),
(13, 'Drob', 'SWD2', 0),
(14, 'Marius', 'SDE2/TL', 1),
(15, 'Tugui', 'BackEndDEV', 0),
(16, 'Sebastian', 'SWD3', 0),
(17, 'Alexandru', 'SDE3/SM', 1),
(18, 'Ioan', 'FrontEndDEV', 0),
(19, 'Nechita', 'SWD1', 0),
(20, 'Nastasa', 'QA/SDE1', 1),
(21, 'Tugui', 'BackEndDEV', 0),
(22, 'Drob', 'SWD2', 0),
(23, 'Marius', 'SDE2/TL', 1),
(24, 'Ioan', 'FrontEndDEV', 0),
(25, 'Sebastian', 'SWD3', 0),
(26, 'Alexandru', 'SDE3/SM', 1),
(27, 'Tugui', 'BackEndDEV', 0),
(28, 'Nechita', 'SWD1', 0),
(29, 'Nastasa', 'QA/SDE1', 1),
(30, 'Ioan', 'FrontEndDEV', 0),
(31, 'Marius', 'SDE2/TL', 1);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `TrainingParticipants`
--

CREATE TABLE IF NOT EXISTS `TrainingParticipants` (
  `ParticipantId` int(11) NOT NULL,
  `TrainingId` int(11) NOT NULL,
  `IsInvited` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `TrainingParticipants`
--

INSERT INTO `TrainingParticipants` (`ParticipantId`, `TrainingId`, `IsInvited`) VALUES
(1, 1, 0),
(1, 5, 0),
(2, 1, 0),
(2, 2, 1),
(2, 5, 0),
(3, 1, 1),
(3, 2, 1);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `Trainings`
--

CREATE TABLE IF NOT EXISTS `Trainings` (
  `Id` int(11) NOT NULL,
  `TrainingName` varchar(255) NOT NULL,
  `StartDate` datetime NOT NULL,
  `EndDate` datetime NOT NULL,
  `InviteUrl` varchar(255) NOT NULL,
  `IsDeleted` tinyint(1) NOT NULL,
  `Cost` float NOT NULL,
  `DepartamentId` int(11) NOT NULL,
  `TrainerId` int(11) NOT NULL,
  `LocationId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `Trainings`
--

INSERT INTO `Trainings` (`Id`, `TrainingName`, `StartDate`, `EndDate`, `InviteUrl`, `IsDeleted`, `Cost`, `DepartamentId`, `TrainerId`, `LocationId`) VALUES
(0, 'Git - Introduction 1', '2020-10-27 06:49:48', '2020-11-07 06:49:48', 'https://teams.microsoft.com/l/channel/19%3a048414b', 0, 1000, 1, 1, 2),
(1, 'Git Begginer', '2020-10-27 06:46:43', '2020-11-07 06:46:43', 'https://teams.microsoft.com/l/channel/19%3a048414b', 0, 1000, 1, 1, 2),
(2, 'Git Intermediate', '2020-10-27 06:46:43', '2020-11-17 06:46:43', 'https://teams.microsoft.com/l/channel/19%3a048414b7qwe156e67i', 0, 1000, 3, 2, 3),
(3, 'Git Advanced', '2020-10-27 06:46:43', '2020-11-13 06:46:43', 'https://teams.microsoft.com/l/channel/19%3a85e26yb7qwe156e67i', 0, 1000, 2, 3, 1),
(4, 'PHP Begginer', '2020-10-27 06:46:43', '2020-11-13 06:46:43', 'https://teams.microsoft.com/l/channel/19%3a048414b7dce149e680', 0, 400, 6, 3, 1),
(5, 'C Algorithms', '2020-11-30 06:46:43', '2020-12-02 06:46:43', 'https://teams.microsoft.com/l/channel/19%3a048414b7dceeop45h2', 0, 300, 3, 3, 1),
(6, 'C# Begginer', '2020-11-29 06:46:43', '2020-12-03 06:46:43', 'https://teams.microsoft.com/l/channel/19%3a85e26yb7qwe156euuu', 0, 200, 1, 3, 1),
(7, 'C#1 Intermediate', '2020-11-28 06:46:43', '2020-12-04 06:46:43', 'https://teams.microsoft.com/l/channel/19%3a85123aaaqwe156euuu', 0, 500, 1, 2, 1),
(8, 'C# Advanced', '2020-10-27 06:46:43', '2020-11-14 06:46:43', 'https://teams.microsoft.com/l/channel/19%3a85123aaaqwe156eaaa', 0, 750, 3, 1, 1),
(9, 'Soft Skills', '2020-09-27 06:46:43', '2020-11-13 06:46:43', 'https://teams.microsoft.com/l/channel/19%23SV123aaaqwe156eaaa', 0, 150, 4, 1, 1),
(10, 'C# .Net Advanced', '2020-08-27 06:46:43', '2020-11-09 06:46:43', 'https://teams.microsoft.com/l/channel/19%23SVmaca5aqweluniaaa', 0, 1200, 3, 3, 1),
(11, 'Git Begginer', '2020-10-27 06:47:14', '2020-11-07 06:47:14', 'https://teams.microsoft.com/l/channel/19%3a048414b7dce149e680', 0, 1000, 1, 1, 2),
(12, 'Git Intermediate', '2020-10-27 06:47:14', '2020-11-17 06:47:14', 'https://teams.microsoft.com/l/channel/19%3a048414b7qwe156e67i', 0, 1000, 3, 2, 3),
(13, 'Git Advanced', '2020-10-27 06:47:14', '2020-11-13 06:47:14', 'https://teams.microsoft.com/l/channel/19%3a85e26yb7qwe156e67i', 0, 1000, 2, 3, 1),
(14, 'PHP Advanced', '2020-10-27 06:47:14', '2020-11-13 06:47:14', 'https://teams.microsoft.com/l/channel/19%23SVmaca5JavaeucPHPspl', 0, 1141, 18, 27, 1),
(15, 'C Testing', '2020-11-30 06:47:14', '2020-12-02 06:47:14', 'https://teams.microsoft.com/l/channel/19%3a048414b7dcee7r85ep', 0, 200, 2, 2, 1),
(16, 'C# Begginer', '2020-11-29 06:47:14', '2020-12-03 06:47:14', 'https://teams.microsoft.com/l/channel/19%3a85e26yb7qwe156euuu', 0, 200, 1, 6, 1),
(17, 'C#1 Intermediate', '2020-11-28 06:47:14', '2020-12-04 06:47:14', 'https://teams.microsoft.com/l/channel/19%3a85123aaaqwe156euuu', 0, 500, 6, 5, 1),
(18, 'C# Advanced', '2020-10-27 06:47:14', '2020-11-14 06:47:14', 'https://teams.microsoft.com/l/channel/19%3a85123aaaqwe156eaaa', 0, 750, 8, 4, 1),
(19, 'Soft Skills', '2020-09-27 06:47:14', '2020-11-13 06:47:14', 'https://teams.microsoft.com/l/channel/19%23SV123aaaqwe156eaaa', 0, 150, 9, 2, 1),
(20, 'C# .Net Advanced', '2020-08-27 06:47:14', '2020-11-09 06:47:14', 'https://teams.microsoft.com/l/channel/19%23SVmaca5aqweluniaaa', 0, 1200, 8, 6, 1),
(21, 'Git - Introduction 1', '2020-10-27 06:47:54', '2020-11-07 06:47:54', 'https://teams.microsoft.com/l/channel/19%3a048414b7dce149e345', 0, 1000, 1, 1, 2),
(22, 'Git Intermediate', '2020-10-27 06:47:54', '2020-11-17 06:47:54', 'https://teams.microsoft.com/l/channel/19%3a048414b7qwe156e67i', 0, 1000, 3, 2, 3),
(23, 'Git Advanced', '2020-10-27 06:47:54', '2020-11-13 06:47:54', 'https://teams.microsoft.com/l/channel/19%3a85e26yb7qwe156e67i', 0, 1000, 2, 3, 1),
(24, 'PHP Advanced', '2020-10-27 06:47:54', '2020-11-13 06:47:54', 'https://teams.microsoft.com/l/channel/19%23SVmaca5JavaeucPHPspl', 0, 1141, 18, 29, 1),
(25, 'C Development', '2020-11-30 06:47:54', '2020-12-02 06:47:54', 'https://teams.microsoft.com/l/channel/19%3a04er53ibdcee7r85ep', 0, 500, 1, 1, 1),
(26, 'C# Begginer', '2020-11-29 06:47:54', '2020-12-03 06:47:54', 'https://teams.microsoft.com/l/channel/19%3a85e26yb7qwe156euuu', 0, 200, 1, 9, 1),
(27, 'C#1 Intermediate', '2020-11-28 06:47:54', '2020-12-04 06:47:54', 'https://teams.microsoft.com/l/channel/19%3a85123aaaqwe156euuu', 0, 500, 11, 8, 1),
(28, 'C# Advanced', '2020-10-27 06:47:54', '2020-11-14 06:47:54', 'https://teams.microsoft.com/l/channel/19%3a85123aaaqwe156eaaa', 0, 750, 13, 7, 1),
(29, 'Soft Skills', '2020-09-27 06:47:54', '2020-11-13 06:47:54', 'https://teams.microsoft.com/l/channel/19%23SV123aaaqwe156eaaa', 0, 150, 14, 3, 1),
(30, 'C# .Net Advanced', '2020-08-27 06:47:54', '2020-11-09 06:47:54', 'https://teams.microsoft.com/l/channel/19%23SVmaca5aqweluniaaa', 0, 1200, 13, 9, 1),
(31, 'Git Begginer', '2020-10-27 06:48:01', '2020-11-07 06:48:01', 'https://teams.microsoft.com/l/channel/19%3a048414b7dce149e680', 0, 1000, 1, 1, 2),
(32, 'Git Intermediate', '2020-10-27 06:48:01', '2020-11-17 06:48:01', 'https://teams.microsoft.com/l/channel/19%3a048414b7qwe156e67i', 0, 1000, 3, 2, 3),
(33, 'Git Advanced', '2020-10-27 06:48:01', '2020-11-13 06:48:01', 'https://teams.microsoft.com/l/channel/19%3a85e26yb7qwe156e67i', 0, 1000, 2, 3, 1),
(34, 'PHP Intermediate', '2020-10-27 06:48:01', '2020-11-13 06:48:01', 'https://teams.microsoft.com/l/channel/19%23SVmaca5JavaeucPHPeas', 0, 587, 26, 19, 1),
(35, 'C Algorithms', '2020-11-30 06:48:01', '2020-12-02 06:48:01', 'https://teams.microsoft.com/l/channel/19%3a048414b7dceeop45h2', 0, 300, 8, 6, 1),
(36, 'C# Begginer', '2020-11-29 06:48:01', '2020-12-03 06:48:01', 'https://teams.microsoft.com/l/channel/19%3a85e26yb7qwe156euuu', 0, 200, 1, 12, 1),
(37, 'C#1 Intermediate', '2020-11-28 06:48:01', '2020-12-04 06:48:01', 'https://teams.microsoft.com/l/channel/19%3a85123aaaqwe156euuu', 0, 500, 16, 11, 1),
(38, 'C# Advanced', '2020-10-27 06:48:01', '2020-11-14 06:48:01', 'https://teams.microsoft.com/l/channel/19%3a85123aaaqwe156eaaa', 0, 750, 18, 10, 1),
(39, 'Soft Skills', '2020-09-27 06:48:01', '2020-11-13 06:48:01', 'https://teams.microsoft.com/l/channel/19%23SV123aaaqwe156eaaa', 0, 150, 19, 4, 1),
(40, 'C# .Net Advanced', '2020-08-27 06:48:01', '2020-11-09 06:48:01', 'https://teams.microsoft.com/l/channel/19%23SVmaca5aqweluniaaa', 0, 1000, 2, 3, 1),
(41, 'Git - Introduction 1', '2020-10-27 06:48:36', '2020-11-07 06:48:36', 'https://teams.microsoft.com/l/channel/19%3a048414b7dce149e234', 0, 1000, 1, 1, 2),
(42, 'Git Intermediate', '2020-10-27 06:48:36', '2020-11-17 06:48:36', 'https://teams.microsoft.com/l/channel/19%3a048414b7qwe156e67i', 0, 1000, 3, 2, 3),
(43, 'Git Advanced', '2020-10-27 06:48:36', '2020-11-13 06:48:36', 'https://teams.microsoft.com/l/channel/19%3a85e26yb7qwe156e67i', 0, 1000, 2, 3, 1),
(44, 'PHP Intermediate', '2020-10-27 06:48:36', '2020-11-13 06:48:36', 'https://teams.microsoft.com/l/channel/19%23SVmaca5JavaeucPHPeas', 0, 592, 48, 27, 1),
(45, 'C Testing', '2020-11-30 06:48:36', '2020-12-02 06:48:36', 'https://teams.microsoft.com/l/channel/19%3a048414b7dcee7r85ep', 0, 200, 2, 5, 1),
(46, 'C# Begginer', '2020-11-29 06:48:36', '2020-12-03 06:48:36', 'https://teams.microsoft.com/l/channel/19%3a85e26yb7qwe156euuu', 0, 201, 1, 3, 1),
(47, 'C# Intermediate', '2020-11-28 06:48:36', '2020-12-04 06:48:36', 'https://teams.microsoft.com/l/channel/19%3a85123aaaqwe156euuu', 0, 509, 1, 2, 1),
(48, 'C# Advanced', '2020-10-27 06:48:36', '2020-11-14 06:48:36', 'https://teams.microsoft.com/l/channel/19%3a85123aaaqwe156eaaa', 0, 765, 3, 1, 1),
(49, 'Soft Skills', '2020-09-27 06:48:36', '2020-11-13 06:48:36', 'https://teams.microsoft.com/l/channel/19%23SV123aaaqwe156eaaa', 0, 152, 9, 3, 1),
(50, 'HF Filters & EMS', '2020-08-27 06:48:36', '2020-11-09 06:48:36', 'https://teams.microsoft.com/l/channel/19%23SVplictiaqwe156eaaa', 0, 265, 5, 11, 1),
(51, 'Git Begginer', '2020-10-27 06:49:05', '2020-11-07 06:49:05', 'https://teams.microsoft.com/l/channel/19%3a048414b7dce149e680', 0, 1000, 1, 1, 2),
(52, 'Git Intermediate', '2020-10-27 06:49:05', '2020-11-17 06:49:05', 'https://teams.microsoft.com/l/channel/19%3a048414b7qwe156e67i', 0, 1000, 3, 2, 3),
(53, 'Git Advanced', '2020-10-27 06:49:05', '2020-11-13 06:49:05', 'https://teams.microsoft.com/l/channel/19%3a85e26yb7qwe156e67i', 0, 1000, 2, 3, 1),
(54, 'PHP Intermediate', '2020-10-27 06:49:05', '2020-11-13 06:49:05', 'https://teams.microsoft.com/l/channel/19%23SVmaca5JavaeucPHPeas', 0, 600, 42, 27, 1),
(55, 'C Development', '2020-11-30 06:49:05', '2020-12-02 06:49:05', 'https://teams.microsoft.com/l/channel/19%3a04er53ibdcee7r85ep', 0, 400, 2, 4, 1),
(56, 'C# Begginer', '2020-11-29 06:49:05', '2020-12-03 06:49:05', 'https://teams.microsoft.com/l/channel/19%3a85e26yb7qwe156euuu', 0, 202, 1, 9, 1),
(57, 'C# Intermediate', '2020-11-28 06:49:05', '2020-12-04 06:49:05', 'https://teams.microsoft.com/l/channel/19%3a85123aaaqwe156euuu', 0, 508, 6, 8, 1),
(58, 'C# Advanced', '2020-10-27 06:49:05', '2020-11-14 06:49:05', 'https://teams.microsoft.com/l/channel/19%3a85123aaaqwe156eaaa', 0, 745, 8, 4, 1),
(59, 'Soft Skills', '2020-09-27 06:49:05', '2020-11-13 06:49:05', 'https://teams.microsoft.com/l/channel/19%23SV123aaaqwe156eaaa', 0, 145, 9, 2, 1),
(60, 'HF Filters & EMS', '2020-08-27 06:49:05', '2020-11-09 06:49:05', 'https://teams.microsoft.com/l/channel/19%23SVplictiaqwe156eaaa', 0, 229, 10, 14, 1),
(61, 'Git - Introduction 1', '2020-10-27 06:49:24', '2020-11-07 06:49:24', 'https://teams.microsoft.com/l/channel/19%3a048414b7dce149e789', 0, 1000, 1, 1, 2),
(62, 'Git Intermediate', '2020-10-27 06:49:24', '2020-11-17 06:49:24', 'https://teams.microsoft.com/l/channel/19%3a048414b7qwe156e67i', 0, 1000, 3, 2, 3),
(63, 'Git Advanced', '2020-10-27 06:49:24', '2020-11-13 06:49:24', 'https://teams.microsoft.com/l/channel/19%3a85e26yb7qwe156e67i', 0, 1000, 2, 3, 1),
(64, 'HTML Intermediate', '2020-10-27 06:49:24', '2020-11-13 06:49:24', 'https://www.w3schools.com/html/', 0, 50, 39, 19, 1),
(65, 'C Algorithms', '2020-11-30 06:49:24', '2020-12-02 06:49:24', 'https://teams.microsoft.com/l/channel/19%3a048414b7dceeop45h2', 0, 300, 13, 9, 1),
(66, 'C# Testing', '2020-11-29 06:49:24', '2020-12-03 06:49:24', 'https://teams.microsoft.com/l/channel/19%23iasiplictiaqwe156eaaa', 0, 454, 2, 27, 1),
(67, 'HF Filters & EMS', '2020-11-28 06:49:24', '2020-12-04 06:49:24', 'https://teams.microsoft.com/l/channel/19%23SVplictiaqwe156eaaa', 0, 225, 5, 13, 1),
(68, 'C# .Net Advanced', '2020-10-27 06:49:24', '2020-11-14 06:49:24', 'https://teams.microsoft.com/l/channel/19%23SVmaca5aqweluniaaa', 0, 1200, 3, 24, 1),
(69, 'C# .Net Advanced', '2020-09-27 06:49:24', '2020-11-13 06:49:24', 'https://teams.microsoft.com/l/channel/19%23SVmaca5aqweluniaaa', 0, 1202, 8, 25, 1),
(70, 'Java Advanced', '2020-08-27 06:49:24', '2020-11-09 06:49:24', 'https://teams.microsoft.com/l/channel/19%23SVmaca5Javaluniaaa', 0, 999, 23, 11, 1),
(72, 'HTML Intermediate', '2020-10-27 06:49:48', '2020-11-17 06:49:48', 'https://www.w3schools.com/html/', 0, 56, 39, 11, 3),
(73, 'Goolag Beginner', '2020-10-27 06:49:48', '2020-11-13 06:49:48', 'https://teams.microsoft.com/l/channel/19%23SVmaca5JavaeucGoagal', 0, 220, 43, 13, 1),
(74, 'Goolag Beginner', '2020-10-27 06:49:48', '2020-11-13 06:49:48', 'https://teams.microsoft.com/l/channel/19%23SVmaca5JavaeucGoagal', 0, 220, 48, 16, 1),
(75, 'C Testing', '2020-11-30 06:49:48', '2020-12-02 06:49:48', 'https://teams.microsoft.com/l/channel/19%3a048414b7dcee7r85ep', 0, 200, 12, 8, 1),
(76, 'C# Testing', '2020-11-29 06:49:48', '2020-12-03 06:49:48', 'https://teams.microsoft.com/l/channel/19%23iasiplictiaqwe156eaaa', 0, 225, 7, 29, 1),
(77, 'HF Filters & EMS', '2020-11-28 06:49:48', '2020-12-04 06:49:48', 'https://teams.microsoft.com/l/channel/19%23SVplictiaqwe156eaaa', 0, 225, 10, 16, 1),
(78, 'Java Advanced', '2020-10-27 06:49:48', '2020-11-14 06:49:48', 'https://teams.microsoft.com/l/channel/19%23SVmaca5Javaluniaaa', 0, 995, 21, 9, 1),
(79, 'Java Advanced', '2020-09-27 06:49:48', '2020-11-13 06:49:48', 'https://teams.microsoft.com/l/channel/19%23SVmaca5Javaluniaaa', 0, 10058, 18, 10, 1),
(80, 'C# .Net Advanced', '2020-08-27 06:49:48', '2020-11-09 06:49:48', 'https://teams.microsoft.com/l/channel/19%23SVmaca5aqweluniaaa', 0, 1208, 13, 26, 1),
(85, 'C Development', '2020-11-30 06:50:10', '2020-12-02 06:50:10', 'https://teams.microsoft.com/l/channel/19%3a04er53ibdcee7r85ep', 0, 400, 11, 7, 1),
(86, 'Python Advanced Algorithms', '2020-11-29 06:50:10', '2020-12-03 06:50:10', 'https://teams.microsoft.com/l/channel/19%23SVmaca5Javaeupython', 0, 1400, 13, 25, 1),
(87, 'C++ Advanced Algorithms', '2020-11-28 06:50:10', '2020-12-04 06:50:10', 'https://teams.microsoft.com/l/channel/19%23SVmaca5Javaeucpluspl', 0, 1300, 13, 17, 1),
(88, 'Python Advanced Algorithms', '2020-10-27 06:50:10', '2020-11-14 06:50:10', 'https://teams.microsoft.com/l/channel/19%23SVmaca5Javaeupython', 0, 1409, 18, 16, 1),
(89, 'C++ Advanced Algorithms', '2020-09-27 06:50:10', '2020-11-13 06:50:10', 'https://teams.microsoft.com/l/channel/19%23SVmaca5Javaeucpluspl', 0, 1300, 18, 8, 1),
(90, 'Ruby as ML language', '2020-08-27 06:50:10', '2020-11-09 06:50:10', 'https://teams.microsoft.com/l/channel/19%23SVmaca5JavaeucRubyML', 0, 890, 16, 24, 1),
(95, 'C Algorithms', '2020-11-30 06:50:26', '2020-12-02 06:50:26', 'https://teams.microsoft.com/l/channel/19%3a048414b7dceeop45h2', 0, 300, 18, 12, 1),
(96, 'Python Advanced Algorithms', '2020-11-29 06:50:26', '2020-12-03 06:50:26', 'https://teams.microsoft.com/l/channel/19%23SVmaca5Javaeupython', 0, 1400, 28, 7, 1),
(97, 'C++ Advanced Algorithms', '2020-11-28 06:50:26', '2020-12-04 06:50:26', 'https://teams.microsoft.com/l/channel/19%23SVmaca5Javaeucpluspl', 0, 1300, 28, 26, 1),
(98, 'Python Advanced Algorithms', '2020-10-27 06:50:26', '2020-11-14 06:50:26', 'https://teams.microsoft.com/l/channel/19%23SVmaca5Javaeupython', 0, 1400, 13, 25, 1),
(99, 'C++ Advanced Algorithms', '2020-09-27 06:50:26', '2020-11-13 06:50:26', 'https://teams.microsoft.com/l/channel/19%23SVmaca5Javaeucpluspl', 0, 1320, 13, 17, 1),
(100, 'Ruby as ML language', '2020-08-27 06:50:26', '2020-11-09 06:50:26', 'https://teams.microsoft.com/l/channel/19%23SVmaca5JavaeucRubyML', 0, 890, 18, 27, 1),
(101, 'Java Beginner', '2021-01-24 09:30:00', '2021-02-12 17:50:00', 'https://www.udemy.com/course/java-tutorial/', 0, 550, 31, 18, 1);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `Users`
--

INSERT INTO `Users` (`id`, `username`, `password`) VALUES
(1, 'neki', '9258dbcab69f1afad9ea18513f768d44cee018d5daf8a8a85dae7d5d6d0d48da8de2f2c499557fee9ab48cb8f3940511f9e37aa8664db8162b93746ffd182703');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Departments`
--
ALTER TABLE `Departments`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Locations`
--
ALTER TABLE `Locations`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Participants`
--
ALTER TABLE `Participants`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Trainers`
--
ALTER TABLE `Trainers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `TrainingParticipants`
--
ALTER TABLE `TrainingParticipants`
  ADD PRIMARY KEY (`ParticipantId`,`TrainingId`);

--
-- Indexes for table `Trainings`
--
ALTER TABLE `Trainings`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `DepartamentId` (`DepartamentId`),
  ADD KEY `TrainerId` (`TrainerId`),
  ADD KEY `LocationId` (`LocationId`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Departments`
--
ALTER TABLE `Departments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `Locations`
--
ALTER TABLE `Locations`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Participants`
--
ALTER TABLE `Participants`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `Trainers`
--
ALTER TABLE `Trainers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `Trainings`
--
ALTER TABLE `Trainings`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restrictii pentru tabele sterse
--

--
-- Restrictii pentru tabele `Trainings`
--
ALTER TABLE `Trainings`
  ADD CONSTRAINT `Trainings_ibfk_1` FOREIGN KEY (`DepartamentId`) REFERENCES `Departments` (`Id`),
  ADD CONSTRAINT `Trainings_ibfk_2` FOREIGN KEY (`TrainerId`) REFERENCES `Trainers` (`Id`),
  ADD CONSTRAINT `Trainings_ibfk_3` FOREIGN KEY (`LocationId`) REFERENCES `Locations` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
