-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2016 a las 01:38:18
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
(2, 'productos chata sa de cv', 'Chata', '754512', 'Bachigualato', 'CuliacÃ¡n', 'Sinaloa', '2016-04-25'),
(3, 'Sukarne Agroindustrial SA DE CV', 'Sukarne', '795454', 'La primaver', 'CuliacÃ¡n', 'Sinaloa', '2016-04-25');

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
-- Estructura de tabla para la tabla `divisas`
--

CREATE TABLE `divisas` (
  `id_tcambio` int(11) NOT NULL,
  `precio_dolar` float NOT NULL,
  `fecha_tcambio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `divisas`
--

INSERT INTO `divisas` (`id_tcambio`, `precio_dolar`, `fecha_tcambio`) VALUES
(7, 13.5, '2016-06-28'),
(9, 19.56, '2016-06-28'),
(10, 19.5, '2016-06-28'),
(11, 15, '2016-06-28'),
(12, 5, '2016-06-28'),
(13, 50, '2016-06-28'),
(14, 19.5, '2016-06-28'),
(15, 19, '2016-06-29');

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
(29, 'Deltatrak', 'Nacional', 'Deltatrak International Mexico', '01 33 31 88 3161', 'Paola Gutierrez o Alejandra Moreno', '2016-04-11'),
(31, 'Extruflex', 'ImportaciÃ³n', 'Extruflex North America', '', 'Fernando CastaÃ±eda', '2016-04-11'),
(32, 'Taylor', 'Nacional', 'Comercial Mofeg', '01 33 1002 1500', 'Nayelo,  descuentos PL-50%-5%-3', '2016-04-12'),
(33, 'Extech', 'Nacional', 'Grainger Mexico', '', 'Alonso', '2016-04-12'),
(34, 'Escort Ilog', 'ImportaciÃ³n', '', '', '', '2016-04-14'),
(37, 'Dare', 'ImportaciÃ³n', 'Dare Products Inc', '888', 'Atn: Bob', '2016-04-17'),
(38, 'Dosatron', 'ImportaciÃ³n', 'Dosatron', '727 443 5404', 'Mario Garcia', '2016-04-18'),
(40, 'GLA Agricultural Electronics', 'ImportaciÃ³n', 'GLA Agricultural Electronics', '800 346 1182', 'John K. Thomas', '2016-05-03'),
(41, 'Saft', 'ImportaciÃ³n', 'Florida Distributors', '123321321', 'nada', '2016-05-24'),
(42, 'Corona Tools', 'ImportaciÃ³n', 'Corona Clipper', '800 2255 225', 'tijeras', '2016-05-24'),
(43, 'Fluke', 'Nacional', 'ABSA Sonora', '712-4885', 'Laura Dominguez', '2016-06-29'),
(44, 'Steren', 'Nacional', 'Electronica Steren de Guadalajara', '01 33 3614 4979', 'GISELA LUNA', '2016-07-18'),
(45, 'Avaly', 'Nacional', 'Comercial Mofeg', '', 'Nataly, descuentos PL-50%-5%-3%', '2016-07-18'),
(46, 'SuperKlean', 'ImportaciÃ³n', 'Racing Revolution Team', '650 375 7001', 'Joel Alvarez, descuentos -35%', '2016-07-18'),
(47, 'Kestrel', 'ImportaciÃ³n', 'Florida Distributors', '', '', '2016-07-18'),
(48, 'Arod', 'Nacional', 'Arod de Mexico', '999-920-1616', 'Mayra Lorena Ext 112', '2016-07-18'),
(49, 'Philips', 'Nacional', 'Arod de Mexico', '', '', '2016-07-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_prod` int(11) NOT NULL,
  `id_mca` int(100) NOT NULL,
  `id_tcambio` int(11) NOT NULL,
  `nomb_prod` varchar(100) NOT NULL,
  `desc_prod` varchar(100) NOT NULL,
  `origen_prod` varchar(20) NOT NULL,
  `edo_prod` varchar(15) NOT NULL,
  `nota_prod` varchar(150) NOT NULL,
  `cost_prod` float NOT NULL,
  `mon_prod` varchar(15) NOT NULL,
  `util_prod` float NOT NULL,
  `prec_prod` float NOT NULL,
  `prec_rec` float NOT NULL,
  `Imagen` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_prod` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_prod`, `id_mca`, `id_tcambio`, `nomb_prod`, `desc_prod`, `origen_prod`, `edo_prod`, `nota_prod`, `cost_prod`, `mon_prod`, `util_prod`, `prec_prod`, `prec_rec`, `Imagen`, `fecha_prod`) VALUES
(83, 33, 0, '365510', 'Cronometro Digital', 'Nacional', 'Activo', '', 288, 'MXN', 56, 449.28, 450, '365510.jpg', '2016-08-04'),
(84, 29, 0, '16100', 'Graficador Desechable 10 DÃ­as', 'Nacional', 'Activo', '', 6.5, 'USD', 30, 164.775, 170, '16100 GRAFICADOR.jpg', '2016-06-29'),
(85, 29, 0, '16200', 'Graficador Desechable 20 DÃ­as', 'Nacional', 'Activo', '', 6.5, 'USD', 30, 164.775, 170, '16100 GRAFICADOR.jpg', '2016-06-29'),
(87, 29, 0, '16300', 'Graficador Desechable 30 DÃ­as', 'Nacional', 'Activo', '', 6.5, 'USD', 30, 164.775, 170, '16100 GRAFICADOR.jpg', '2016-06-29'),
(88, 29, 0, '16400', 'Graficador Desechable 40 DÃ­as', 'Nacional', 'Activo', '', 6.5, 'USD', 30, 164.775, 170, '16100 GRAFICADOR.jpg', '2016-06-29'),
(89, 29, 0, '16500', 'Graficador Desechable 90 DÃ­as', 'Nacional', 'Activo', '', 6.5, 'USD', 30, 164.775, 170, '16100 GRAFICADOR.jpg', '2016-06-29'),
(90, 29, 0, '11050', 'TermÃ³metro tipo paleta', 'Nacional', 'Activo', '', 19, 'USD', 30, 469.3, 480, '11050-wcover_specsheet.png', '2016-07-20'),
(91, 29, 0, '20901', 'Graficador de temperatura reusable', 'Nacional', 'Activo', '', 50.5, 'USD', 30, 1247.35, 1400, 'reusableUSB_small.jpg', '2016-08-04'),
(92, 43, 0, '62Max', 'Termometro Infrarrojo', 'Nacional', 'Activo', '', 99.99, 'USD', 30, 2469.75, 2404, 'FLUKE_62_MAX.jpg', '2016-06-29'),
(94, 48, 0, 'Black Thunder', 'Trampa para moscas', 'Nacional', 'Activo', 'son 200 de flete', 1897.42, 'MXN', 30, 2466.65, 2726.65, 'Black_Thunder.JPG', '2016-07-19'),
(96, 48, 0, 'Black Slim', 'Trampa para moscas', 'Nacional', 'Activo', 'son 200 de flete', 1616.4, 'MXN', 30, 2101.32, 2361.32, 'Black_Slim.JPG', '2016-07-19'),
(97, 48, 0, 'Black Mini Slim', 'Trampa para moscas', '', '', '', 0, '', 0, 0, 0, 'Black_Mini_Slim.JPG', '2016-07-18'),
(98, 49, 0, 'TL-D Secura', 'Lampara inastillable 15 watts', 'Nacional', 'Activo', '', 117, 'MXN', 30, 152.1, 412, 'COMF2788-CLP-global-001.jpg', '2016-07-18'),
(99, 48, 0, 'Black Doble', 'Placa engomada doble 125 pzs', 'Nacional', 'Activo', 'son 200 de flete', 1523.55, 'MXN', 30, 1980.61, 2240.62, 'placa_doble_arod.JPG', '2016-07-19'),
(100, 48, 0, 'Black', 'Placa engomada 75 pzs', '', '', '', 0, '', 0, 0, 0, 'placa_black_arod.JPG', '2016-07-19'),
(101, 48, 0, 'Black Doble', 'Placa engomada doble 75 pzs', 'Nacional', 'Activo', 'son 200 de flete', 1325.63, 'MXN', 30, 1723.32, 1983.32, 'placa_doble_arod.JPG', '2016-07-19'),
(102, 45, 0, 'VA-EDT-1-54', 'TermÃ³metro int. y ext.', 'Nacional', 'Activo', '', 17.55, 'USD', 30, 433.485, 392.42, 'VAEDT154.jpg', '2016-07-19'),
(103, 45, 0, 'VA-EDT-1H', 'Termohigrometro', 'Nacional', 'Activo', '', 16.22, 'USD', 30, 400.634, 362.68, 'VAEDT1H.jpg', '2016-07-19'),
(104, 45, 0, 'VA-RF60A', 'TermÃ³metro para vitrina de bulbo', 'Nacional', 'Activo', '', 19.97, 'USD', 30, 493.259, 446.53, 'VARF604.jpg', '2016-08-04'),
(105, 32, 0, '5981N', 'Termometro para vitrina', 'Nacional', 'Activo', 'Para uso refrigerador', 3.93, 'USD', 30, 97.071, 96, '5981n.JPG', '2016-07-19'),
(107, 32, 0, '5327', 'Termometro de columna Permacolor Int Ext', 'Nacional', 'Activo', '', 4.42, 'USD', 30, 109.174, 120, '5327.JPG', '2016-07-19'),
(108, 32, 0, '9940N', 'Termometro de bulbo para panel de montaje', '', '', '', 0, '', 0, 0, 0, '9940n.JPG', '2016-07-19');

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
-- Indices de la tabla `divisas`
--
ALTER TABLE `divisas`
  ADD PRIMARY KEY (`id_tcambio`);

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
  ADD KEY `id_mca` (`id_mca`),
  ADD KEY `id_tcambio` (`id_tcambio`);

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
-- AUTO_INCREMENT de la tabla `divisas`
--
ALTER TABLE `divisas`
  MODIFY `id_tcambio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_mca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
