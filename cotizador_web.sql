-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2016 a las 03:02:11
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cotizador_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cte` int(11) NOT NULL,
  `comp_cte` varchar(100) NOT NULL,
  `nombcomer_cte` varchar(100) NOT NULL,
  `tel_cte` varchar(50) NOT NULL,
  `dir_cte` varchar(100) NOT NULL,
  `ciud_cte` varchar(100) NOT NULL,
  `edo_cte` varchar(100) NOT NULL,
  `fecha_cte` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cte`, `comp_cte`, `nombcomer_cte`, `tel_cte`, `dir_cte`, `ciud_cte`, `edo_cte`, `fecha_cte`) VALUES
(1, 'Casa Ley S.A. De C.v.', 'Casa Ley', '759 10 00', 'Carretera Internacional Km 1434 Col. Infonavit Humaya C.P. 80020', 'Culiacan', 'Sinaloa', '2016-04-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_mca` int(11) NOT NULL,
  `nomb_mca` varchar(100) NOT NULL,
  `origen_mca` varchar(50) NOT NULL,
  `fecha_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_mca`, `nomb_mca`, `origen_mca`, `fecha_reg`) VALUES
(29, 'Deltatrak', 'Nacional', '2016-04-11'),
(31, 'Extruflex', 'ImportaciÃ³n', '2016-04-11'),
(32, 'Taylor', 'Nacional', '2016-04-12'),
(33, 'Extech', 'Nacional', '2016-04-12'),
(34, 'Escort Ilog', 'ImportaciÃ³n', '2016-04-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_prod` int(11) NOT NULL,
  `nomb_prod` varchar(100) NOT NULL,
  `desc_prod` varchar(100) NOT NULL,
  `mca_prod` varchar(100) NOT NULL,
  `origen_prod` varchar(20) NOT NULL,
  `edo_prod` varchar(15) NOT NULL,
  `nota_prod` varchar(150) NOT NULL,
  `cost_prod` float NOT NULL,
  `util_prod` float NOT NULL,
  `prec_prod` float NOT NULL,
  `fecha_prod` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_prod`, `nomb_prod`, `desc_prod`, `mca_prod`, `origen_prod`, `edo_prod`, `nota_prod`, `cost_prod`, `util_prod`, `prec_prod`, `fecha_prod`) VALUES
(1, '16100', 'Graficador Desechable', 'Deltatrak', 'Nacional', 'Activo', 'se usa en los cuartos frios', 100, 50, 150, '2016-04-11'),
(4, '365510', 'Cronometro digital', 'Extech', 'Nacional', 'Activo', 'se usa en plantas de proceso', 250, 200, 250, '2016-04-12'),
(5, '8.08 Ribbed Conservacion', 'Banda de polivinilo para cortina hawaiana', 'Extruflex', 'ImportaciÃ³n', 'Activo', '', 25, 30, 42, '2016-04-12'),
(6, '6065N', 'Termometro Bimetalico', 'Taylor', 'Nacional', 'Activo', '', 50, 25, 90, '2016-04-12'),
(7, 'EI-HS-', 'Graficador Temperatura y humedad', 'Escort Ilog', 'ImportaciÃ³n', 'Activo', '', 1500, 1000, 2500, '2016-04-14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cte`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_mca`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_prod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_mca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
