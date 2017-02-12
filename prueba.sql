-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-02-2017 a las 07:12:10
-- Versión del servidor: 5.7.17-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `panel`
--

CREATE TABLE `panel` (
  `id_panel` int(11) NOT NULL,
  `num_golpe` int(11) NOT NULL,
  `nombre_equipo` varchar(100) DEFAULT NULL,
  `area` varchar(100) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `panel`
--

INSERT INTO `panel` (`id_panel`, `num_golpe`, `nombre_equipo`, `area`, `fecha`) VALUES
(1, 123456, 'motor', 'f098-fibra', '2017-01-13'),
(2, 45678, 'Maquina', 'Pulpa', '0000-00-00'),
(3, 12345, 'Maquina 3', 'Fibra', '2017-01-31'),
(4, 65432, 'Maquina 12', 'Secado', '2017-01-31'),
(5, 4562, 'Motor Auto', '8790', '2017-01-31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `panel`
--
ALTER TABLE `panel`
  ADD PRIMARY KEY (`id_panel`),
  ADD UNIQUE KEY `num_golpe_UNIQUE` (`num_golpe`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `panel`
--
ALTER TABLE `panel`
  MODIFY `id_panel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
