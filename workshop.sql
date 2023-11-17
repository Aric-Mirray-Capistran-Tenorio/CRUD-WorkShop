-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2023 a las 01:38:55
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `workshop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(10) NOT NULL,
  `ubicacionId` int(10) NOT NULL,
  `vendedorId` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ubicacionPro` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `precio` varchar(100) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `ubicacionId`, `vendedorId`, `nombre`, `ubicacionPro`, `descripcion`, `precio`, `modelo`, `marca`, `color`, `region`) VALUES
(14, 8, 8, 'Martillo', 'Acapulco #1234', 'Martillo', '30', '1', 'Husky', 'Cafe', 'Mexico'),
(15, 8, 8, 'Generador Electrico', 'Acapulco #1234', 'Generador Electrico Marca Honda 5000wats.', '5000', 'F_386', 'Honda', 'Gris', 'Mexico'),
(16, 8, 8, 'Generador Electrico', 'Acapulco #1234', 'Generador Electrico Marca Honda 5000wats.', '5000', 'F_386', 'Honda', 'Gris', 'Mexico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taller`
--

CREATE TABLE `taller` (
  `id_taller` int(10) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `cant_tecnicos` int(50) NOT NULL,
  `tamano_mts` decimal(10,2) NOT NULL,
  `num_oficinas` int(50) NOT NULL,
  `cant_maquinas` int(50) NOT NULL,
  `contacto` varchar(50) NOT NULL,
  `cod_postal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `taller`
--

INSERT INTO `taller` (`id_taller`, `ubicacion`, `cant_tecnicos`, `tamano_mts`, `num_oficinas`, `cant_maquinas`, `contacto`, `cod_postal`) VALUES
(5, '', 0, '0.00', 0, 0, '', 0),
(6, 'Torres del Pri #6785', 7, '12.00', 8, 4, '6564352343', 8976),
(7, 'Juarez #1243', 3, '10.00', 3, 5, '656423578', 987),
(8, 'Acapulco #1234', 3, '2.00', 22, 2, '656249023', 4567);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `id_vendedor` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contacto` varchar(50) NOT NULL,
  `rfc` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `domicilio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`id_vendedor`, `nombre`, `apellido`, `email`, `contacto`, `rfc`, `genero`, `domicilio`) VALUES
(6, '', '', '', '', '', '', ''),
(7, 'Juan ', 'Perez', 'jPerez@gmail.com', '6562341231', 'JNPR562345HP', 'MASCULINO', 'Col. Costeras #412'),
(8, 'Martin', 'Dominguez', 'MDMZ@gmail.com', '656788344', 'UHFAJN9880', 'MASCULINO', 'Durango #1265');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `categoriaId` (`ubicacionId`),
  ADD KEY `marcaId` (`vendedorId`);

--
-- Indices de la tabla `taller`
--
ALTER TABLE `taller`
  ADD PRIMARY KEY (`id_taller`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `taller`
--
ALTER TABLE `taller`
  MODIFY `id_taller` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id_vendedor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`ubicacionId`) REFERENCES `taller` (`id_taller`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`vendedorId`) REFERENCES `vendedores` (`id_vendedor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
