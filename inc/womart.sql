-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 11, 2022 at 08:13 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `womart`
--

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `nom`, `prenom`, `statut`, `photo`) VALUES
(1, 'karim', 'azerty', 'karim@karim.com', 'karim', 'karim', 0, NULL),
(3, 'marco', '$2y$10$sTWFxdkr3c3jjf3kBDzVNO9fcCsOOyNip8vmooHRnq5AiPxgXguRy', 'marco@marc.com', 'Marcos', 'Drilerting', 0, 'http://localhost:8888/Dev_project_doranco-/inc/photo/marco-bearded-1903465_1920.jpg'),
(4, 'karimo', '$2y$10$ec/9oYCN501c/4T5/8YZwOfW/llmOAVqTHOcmLfMRkoPq2sfY3XRO', 'karim.ammi@hotmail.com', 'azer', 'marco', 0, 'http://localhost:8888/Dev_project_doranco-/inc/photo/karimo-chayanne-885227_1920.jpg'),
(5, 'azer', '$2y$10$97Bfx9JXIUNjH26k/0JqEOu95l5at3RsDhcsq6ZHFjNjYMox8rV3a', 'karim.ammi@hotmail.com', 'azeryuiop', 'azer', 0, ''),
(6, 'franck', 'azerty', 'franck@hotmail.com', 'franck', 'marc', 0, NULL),
(7, 'admin', '$2y$10$gwNpJOBI79VVr6FamqH9N.O1wjEHS0oVEPGvjMpq5RxwftvpHxP9.', 'admin@gmail.com', 'admin', 'admin', 1, 'http://localhost:8888/Dev_project_doranco-/inc/photo/admin-chayanne-885227_1920.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
