-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2016 a las 05:21:33
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
(2, 'Sergio Valenzuela Salazar', 'Distribuidora de Occidente', '(667) 716 4522', 'Rio Zuaque # 980 Col. Antonio Rosales C.P. 80230', 'CuliacÃ¡n', 'Sinaloa', '2016-04-15');

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
(34, 'Escort Ilog', 'ImportaciÃ³n', '2016-04-14'),
(35, 'Avaly', 'Nacional', '2016-04-15'),
(36, 'Fluke', 'Nacional', '2016-04-15');

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
(11, '1523', 'Termometro digital', 'Avaly', 'Nacional', 'Inactivo', 'sss', 100, 20, 120, 222, '2016-04-17');

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
  MODIFY `id_cte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_mca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
