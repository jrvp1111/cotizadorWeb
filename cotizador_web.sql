-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2016 a las 00:53:03
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cotizador_web_prueba`
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
(2, 'productos chata sa de cv', 'Chata', '754512', 'Bachigualato', 'Culiacan', 'Sinaloa', '2016-04-25'),
(3, 'Sukarne Agroindustrial SA DE CV', 'Sukarne', '795454', 'La primaver', 'Culiacan', 'Sinaloa', '2016-04-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id_contacto` int(11) NOT NULL,
  `nomb_contacto` varchar(100) NOT NULL,
  `puesto_contacto` varchar(100) NOT NULL,
  `tel_contacto` varchar(100) NOT NULL,
  `ubicacion_contacto` varchar(100) NOT NULL,
  `correo_contacto` varchar(100) NOT NULL,
  `fecha_contacto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id_contacto`, `nomb_contacto`, `puesto_contacto`, `tel_contacto`, `ubicacion_contacto`, `correo_contacto`, `fecha_contacto`) VALUES
(1, 'edith arias', 'compras', '713 20 00', 'culiacan', 'edith.arias@casaley.com', '2016-06-10'),
(2, 'yeimi gamez', 'compras', '7 15 00 20', 'culiacan', 'yeimi.gamez@casaley.com', '2016-06-10'),
(3, 'guadalupe reyes', 'compras', '7 45 52 20', 'culiacan', 'greyes@chata.com.mx', '2016-06-10'),
(4, 'Paola', 'Compras', '785 25 22', 'Vitaruto', 'paola@sukarne.com', '2016-06-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

CREATE TABLE `cotizaciones` (
  `id_cotizacion` int(11) NOT NULL,
  `num_cotizacion` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha_cotizacion` datetime NOT NULL,
  `email` varchar(30) NOT NULL,
  `atn_cliente` varchar(50) NOT NULL,
  `condiciones` varchar(30) NOT NULL,
  `validez` varchar(20) NOT NULL,
  `entrega` varchar(20) NOT NULL,
  `nota` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_cliente`
--

CREATE TABLE `detalle_cliente` (
  `id_detallecte` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_contacto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_cliente`
--

INSERT INTO `detalle_cliente` (`id_detallecte`, `id_cliente`, `id_contacto`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_cotizaciones`
--

CREATE TABLE `detalle_cotizaciones` (
  `id_detalle_cotizacion` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `num_cotizacion` int(11) NOT NULL,
  `precio_venta` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(37, 'Dare', 'ImportaciÃ³n', 'Dare Products Inc', '888', 'Atn: Bob', '2016-04-17'),
(38, 'Dosatron', 'ImportaciÃ³n', 'Dosatron', '77777777', 'asdadsasd', '2016-04-18'),
(40, 'GLA', 'ImportaciÃ³n', 'GLA Agricultural', '8000 ', 'atn john', '2016-05-03'),
(41, 'Saft', 'ImportaciÃ³n', 'Florida Distributors', '123321321', 'nada', '2016-05-24'),
(42, 'Corona Tools', 'ImportaciÃ³n', 'Corona Clipper', '800 2255 225', 'tijeras', '2016-05-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_prod` int(11) NOT NULL,
  `id_mca` int(100) NOT NULL,
  `nomb_prod` varchar(100) NOT NULL,
  `desc_prod` varchar(100) NOT NULL,
  `origen_prod` varchar(20) NOT NULL,
  `edo_prod` varchar(15) NOT NULL,
  `nota_prod` varchar(150) NOT NULL,
  `cost_prod` float NOT NULL,
  `util_prod` float NOT NULL,
  `prec_prod` float NOT NULL,
  `prec_rec` float NOT NULL,
  `Imagen` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_prod` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_prod`, `id_mca`, `nomb_prod`, `desc_prod`, `origen_prod`, `edo_prod`, `nota_prod`, `cost_prod`, `util_prod`, `prec_prod`, `prec_rec`, `Imagen`, `fecha_prod`) VALUES
(26, 32, 'mex', 'mex desc', 'Nacional', 'Activo', 'nota nada', 10, 15, 150, 155, 'taylor.jpg', '2016-06-07'),
(76, 42, 'ag4910', 'aas', 'Nacional', 'Activo', 'asda', 50, 40, 70, 1200, '', '2016-06-10');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_clientes`
--
CREATE TABLE `vista_clientes` (
`id_cte` int(11)
,`nombcomer_cte` varchar(100)
,`tel_cte` varchar(50)
,`dir_cte` varchar(100)
,`ciud_cte` varchar(100)
,`edo_cte` varchar(100)
,`nomb_contacto` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_clientes`
--
DROP TABLE IF EXISTS `vista_clientes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_clientes`  AS  select `clientes`.`id_cte` AS `id_cte`,`clientes`.`nombcomer_cte` AS `nombcomer_cte`,`clientes`.`tel_cte` AS `tel_cte`,`clientes`.`dir_cte` AS `dir_cte`,`clientes`.`ciud_cte` AS `ciud_cte`,`clientes`.`edo_cte` AS `edo_cte`,`contactos`.`nomb_contacto` AS `nomb_contacto` from ((`detalle_cliente` join `clientes` on((`clientes`.`id_cte` = `detalle_cliente`.`id_cliente`))) join `contactos` on((`contactos`.`id_contacto` = `detalle_cliente`.`id_contacto`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cte`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id_contacto`),
  ADD UNIQUE KEY `id_contacto` (`id_contacto`);

--
-- Indices de la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD PRIMARY KEY (`id_cotizacion`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `num_cotizacion` (`num_cotizacion`);

--
-- Indices de la tabla `detalle_cliente`
--
ALTER TABLE `detalle_cliente`
  ADD PRIMARY KEY (`id_detallecte`),
  ADD KEY `id_contacto` (`id_contacto`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `detalle_cotizaciones`
--
ALTER TABLE `detalle_cotizaciones`
  ADD PRIMARY KEY (`id_detalle_cotizacion`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `num_cotizacion` (`num_cotizacion`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_mca`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `id_mca` (`id_mca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `detalle_cliente`
--
ALTER TABLE `detalle_cliente`
  MODIFY `id_detallecte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_mca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
