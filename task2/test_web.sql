-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: apr. 17, 2021 la 03:57 PM
-- Versiune server: 10.4.17-MariaDB
-- Versiune PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `test_web`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `items`
--

INSERT INTO `items` (`id`, `title`, `text`, `category`, `image`) VALUES
(165, 'Taleb school system tracking 8000 students', 'In hac habitasse platea dictumst. Vivamus adipiscing farmentum quam volutpat aliquam...', 'MILESTONE', 3),
(166, 'Alcochem applying vision technology to count flies demo', 'Curabitur lobortis id lorem id bibemdum. Ut id consectetur magna. Quisque volutpat...', 'MILESTONE', 2),
(167, 'Indoor location services for wayfinding hospital', 'Vestibulum retrum quam vitae fringilla tincidunt. Suspendisse nec tortor urna. Ut laoreet sod...', 'REFLOW LABS', 1);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
