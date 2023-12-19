-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2023 a las 17:43:07
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fotocasacain_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `property`
--

CREATE TABLE `property` (
  `id` int(10) UNSIGNED NOT NULL,
  `cadastral_reference` varchar(255) NOT NULL,
  `square_meters` varchar(255) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `characteristics` varchar(255) NOT NULL,
  `number_of_rooms` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `date_publication` varchar(20) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `property`
--

INSERT INTO `property` (`id`, `cadastral_reference`, `square_meters`, `property_type`, `characteristics`, `number_of_rooms`, `comment`, `date_publication`, `price`) VALUES
(1, 'efdsf', 'efs', 'House', '', 32, 'sesdg', '', 0),
(22, 'CR1', '100', 'House', '', 3, 'Beautiful house with garden', '', 0),
(23, 'CR2', '80', 'Apartment', '', 2, 'Apartment with sea view', '', 0),
(24, 'CR3', '120', 'House', '', 4, 'House with pool', '', 0),
(25, 'CR4', '70', 'Apartment', '', 1, 'Downtown apartment', '', 0),
(26, 'CR5', '200', 'House', '', 5, 'Large house with garage', '', 0),
(27, 'CR6', '90', 'Apartment', '', 2, 'Apartment with balcony', '', 0),
(28, 'CR7', '140', 'House', '', 4, 'House in the suburbs', '', 0),
(29, 'CR8', '75', 'Apartment', '', 1, 'Apartment near park', '', 0),
(30, 'CR9', '180', 'House', '', 4, 'House with large backyard', '', 0),
(31, 'CR10', '85', 'Apartment', '', 2, 'Modern apartment', '', 0),
(32, 'CR11', '130', 'House', '', 3, 'House with attic', '', 0),
(33, 'CR12', '65', 'Apartment', '', 1, 'Cozy apartment', '', 0),
(34, 'CR13', '150', 'House', '', 4, 'House with basement', '', 0),
(35, 'CR14', '95', 'Apartment', '', 2, 'Apartment with large living room', '', 0),
(36, 'CR15', '110', 'House', '', 3, 'House with office room', '', 0),
(37, 'CR16', '80', 'Apartment', '', 2, 'Apartment with two bathrooms', '', 0),
(38, 'CR17', '160', 'House', '', 4, 'House with guest room', '', 0),
(39, 'CR18', '70', 'Apartment', '', 1, 'Apartment with large kitchen', '', 0),
(40, 'CR19', '120', 'House', '', 3, 'House with fireplace', '', 0),
(41, 'CR20', '85', 'Apartment', '', 2, 'Apartment with rooftop terrace', '', 0),
(42, '9898', '20', 'House', 'Balcony, Garage, Pool, Garden', 3, 'pepe', '15/12/2023', 10000),
(44, '53', '35', 'House', 'Balcony, Garden', 2, '35', '15/12/2023', 3500),
(45, '22322', '2323', 'Apartment', 'Balcony,Garage,Pool,Garden', 1, '232', '25/12/2023', 23),
(46, 'Pepe3212', '2323', 'Apartment', 'Balcony,Garage,Pool,Garden', 1, '232', '25/12/2023', 23),
(47, 'newq123', '33', 'House', 'Balcony,Garage,Pool,Garden', 2, '232', '19/12/2023', 2323);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cadastral_reference` (`cadastral_reference`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `property`
--
ALTER TABLE `property`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
