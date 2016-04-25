-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2016 a las 07:20:43
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
(1, 'Casa Ley S.A. De C.V.', 'Casa Ley', '(667) 759 1000', 'Carretera Internacional Km 1434 Col. Infonavit Humaya C.P. 80020', 'CuliacÃ¡n', 'Sinaloa', '2016-04-12'),
(7, 'sukarne agroindustrial sa de cv', 'sukarne', '777777', 'la primavera', 'Culiacan', 'Aguascalientes', '2016-04-24'),
(8, 'chata sa de cv', 'chata', '11111111', 'bachigualato', 'Culiacan', 'Sinaloa', '2016-04-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_mca` int(11) NOT NULL,
  `nomb_mca` varchar(100) NOT NULL,
  `origen_mca` varchar(50) NOT NULL,
  `prov_mca` varchar(100) NOT NULL,
  `tel_mca` varchar(20) NOT NULL,
  `nota_mca` varchar(100) NOT NULL,
  `fecha_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_mca`, `nomb_mca`, `origen_mca`, `prov_mca`, `tel_mca`, `nota_mca`, `fecha_reg`) VALUES
(29, 'Deltatrak', 'Nacional', 'Deltatrak International Mexico', '7373737373', 'eejjjej', '2016-04-11'),
(31, 'Extruflex', 'ImportaciÃ³n', '', '', '', '2016-04-11'),
(32, 'Taylor', 'Nacional', '', '', '', '2016-04-12'),
(33, 'Extech', 'Nacional', '', '', '', '2016-04-12'),
(34, 'Escort Ilog', 'ImportaciÃ³n', '', '', '', '2016-04-14'),
(37, 'Dare', 'ImportaciÃ³n', 'Dare Products Inc', '888', 'Atn: Bob', '2016-04-17');

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
  `prec_rec` float NOT NULL,
  `fecha_prod` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_prod`, `nomb_prod`, `desc_prod`, `mca_prod`, `origen_prod`, `edo_prod`, `nota_prod`, `cost_prod`, `util_prod`, `prec_prod`, `prec_rec`, `fecha_prod`) VALUES
(1, '16100', 'Graficador Desechable', 'Deltatrak', 'Nacional', 'Activo', 'se usa en los cuartos frios', 100, 30, 130, 1354, '2016-04-11'),
(4, '365510', 'Cronometro digital', 'Extech', 'Nacional', 'Activo', 'se usa en plantas de proceso', 200, 50, 300, 350, '2016-04-12'),
(8, '11050', 'Termometro tipo paleta', 'Deltatrak', 'Nacional', 'Activo', 'aaaaa', 400, 50, 600, 650, '2016-04-15'),
(10, '20901', 'Graficador reusable usb', 'Deltatrak', 'Nacional', 'Activo', 'grafica temperatura', 1000, 30, 1300, 1400, '2016-04-17'),
(11, '1523', 'Termometro digital', 'Avaly', 'Nacional', 'Inactivo', 'sss', 100, 20, 120, 222, '2016-04-17'),
(12, '62Max', 'Termometro infrarrojo digital', 'Fluke', 'Nacional', 'Activo', 'uso de lejos', 100, 200, 300, 350, '2016-04-17');

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
  MODIFY `id_cte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_mca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
