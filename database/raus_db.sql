-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2018 a las 06:35:41
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `raus_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas_agrupaciones`
--

CREATE TABLE `artistas_agrupaciones` (
  `id_agrupaciones` int(11) NOT NULL,
  `grupo` varchar(45) DEFAULT NULL,
  `duracion` varchar(45) DEFAULT NULL,
  `anio` varchar(45) DEFAULT NULL,
  `lugar` varchar(100) DEFAULT NULL,
  `artistas_urbanos_id_artistas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `artistas_agrupaciones`
--

INSERT INTO `artistas_agrupaciones` (`id_agrupaciones`, `grupo`, `duracion`, `anio`, `lugar`, `artistas_urbanos_id_artistas`) VALUES
(1, 'qw', 'qw', 'qw', 'qw', 7),
(2, 'z', 'z', 'z', 'z', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas_esp_artisticas`
--

CREATE TABLE `artistas_esp_artisticas` (
  `id_esp_artisticas` int(11) NOT NULL,
  `artistas_urbanos_id_artistas` int(11) NOT NULL,
  `esp_artisticas_id_esp_artistica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas_estudios_realizados`
--

CREATE TABLE `artistas_estudios_realizados` (
  `id_estudios_realizados` int(11) NOT NULL,
  `estudio` varchar(100) DEFAULT NULL,
  `institucion` varchar(100) DEFAULT NULL,
  `duracion` varchar(45) DEFAULT NULL,
  `anio` varchar(45) DEFAULT NULL,
  `artistas_urbanos_id_artistas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `artistas_estudios_realizados`
--

INSERT INTO `artistas_estudios_realizados` (`id_estudios_realizados`, `estudio`, `institucion`, `duracion`, `anio`, `artistas_urbanos_id_artistas`) VALUES
(1, 'gj', 'dg', 'hk', '1999', 4),
(2, 'qw', 'qw', 'qw', 'qw', 7),
(3, 'z', 'z', 'z', 'z', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas_redes_sociales`
--

CREATE TABLE `artistas_redes_sociales` (
  `id_artistas_redes_sociales` int(11) NOT NULL,
  `url_red_social` varchar(300) DEFAULT NULL,
  `artistas_urbanos_id_artistas` int(11) NOT NULL,
  `redes_sociales_id_redes_sociales` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `artistas_redes_sociales`
--

INSERT INTO `artistas_redes_sociales` (`id_artistas_redes_sociales`, `url_red_social`, `artistas_urbanos_id_artistas`, `redes_sociales_id_redes_sociales`) VALUES
(1, 'nose.com', 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas_titulos_obtenidos`
--

CREATE TABLE `artistas_titulos_obtenidos` (
  `id_titulos_obtenidos` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `institucion` varchar(100) DEFAULT NULL,
  `anio` varchar(45) DEFAULT NULL,
  `artistas_urbanos_id_artistas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `artistas_titulos_obtenidos`
--

INSERT INTO `artistas_titulos_obtenidos` (`id_titulos_obtenidos`, `titulo`, `institucion`, `anio`, `artistas_urbanos_id_artistas`) VALUES
(1, 'holaaaaa', 'sadasdsad', 'qweqwe2e4', 4),
(2, 'qw', 'qw', 'qw', 7),
(3, 'z', 'z', 'z', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas_urbanos`
--

CREATE TABLE `artistas_urbanos` (
  `id_artistas` int(11) NOT NULL,
  `resumen_artistico` varchar(500) DEFAULT NULL,
  `usuarios_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `artistas_urbanos`
--

INSERT INTO `artistas_urbanos` (`id_artistas`, `resumen_artistico`, `usuarios_id_usuario`) VALUES
(1, '', 1),
(2, '', 4),
(3, '', 5),
(4, 'kasjdoaskdosakdoaksdopwkdmasdasd', 9),
(5, '', 10),
(6, '', 24),
(7, 'ghtfghgf', 27),
(8, '', 28),
(9, 'htygth', 30),
(10, '', 31),
(11, '', 33),
(12, 'zaqwsx', 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato_patrocinio`
--

CREATE TABLE `contrato_patrocinio` (
  `id_contrato` int(11) NOT NULL,
  `entes_culturales_id_ente_cultural` int(11) NOT NULL,
  `artistas_urbanos_id_artistas` int(11) NOT NULL,
  `servicio_patrocinio_id_servicios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entes_culturales`
--

CREATE TABLE `entes_culturales` (
  `id_ente_cultural` int(11) NOT NULL,
  `nombre_ente` varchar(100) DEFAULT NULL,
  `rif_ente` varchar(45) DEFAULT NULL,
  `usuarios_id_usuario` int(11) NOT NULL,
  `ubicacion_ente` varchar(300) DEFAULT NULL,
  `razon_social` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entes_culturales`
--

INSERT INTO `entes_culturales` (`id_ente_cultural`, `nombre_ente`, `rif_ente`, `usuarios_id_usuario`, `ubicacion_ente`, `razon_social`) VALUES
(1, 'fhj', 'fgjhgk', 11, 'fdjg', 'gtju'),
(2, NULL, NULL, 21, NULL, NULL),
(3, NULL, NULL, 22, NULL, NULL),
(4, NULL, NULL, 23, NULL, NULL),
(5, NULL, NULL, 25, NULL, NULL),
(6, NULL, NULL, 26, NULL, NULL),
(7, NULL, NULL, 29, NULL, NULL),
(8, NULL, NULL, 32, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entes_redes_sociales`
--

CREATE TABLE `entes_redes_sociales` (
  `identes_redes_sociales` int(11) NOT NULL,
  `url_red_social` varchar(300) DEFAULT NULL,
  `redes_sociales_id_redes_sociales` int(11) NOT NULL,
  `entes_culturales_id_ente_cultural` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `esp_artisticas`
--

CREATE TABLE `esp_artisticas` (
  `id_esp_artistica` int(11) NOT NULL,
  `nombre_especialidad_artistica` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `estado`) VALUES
(1, 'Miranda'),
(2, 'Distrito Capital'),
(3, 'Vargas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_municipio` int(11) NOT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  `estados_id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_municipio`, `municipio`, `estados_id_estado`) VALUES
(1, 'Libertador', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parroquias`
--

CREATE TABLE `parroquias` (
  `id_parroquia` int(11) NOT NULL,
  `parroquia` varchar(45) DEFAULT NULL,
  `municipios_id_municipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `parroquias`
--

INSERT INTO `parroquias` (`id_parroquia`, `parroquia`, `municipios_id_municipio`) VALUES
(1, 'El Valle', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes_sociales`
--

CREATE TABLE `redes_sociales` (
  `id_redes_sociales` int(11) NOT NULL,
  `red_social` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `redes_sociales`
--

INSERT INTO `redes_sociales` (`id_redes_sociales`, `red_social`) VALUES
(1, 'Facebook'),
(2, 'Twitter'),
(3, 'Instagram'),
(4, 'Youtube'),
(5, '*Sitio Web');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_patrocinio`
--

CREATE TABLE `servicio_patrocinio` (
  `id_servicios` int(11) NOT NULL,
  `servicios` varchar(45) DEFAULT NULL,
  `tipo_servicio` varchar(45) NOT NULL COMMENT 'A= Arista , E= Ente\n',
  `status_servicios_id_status_servicios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_servicios`
--

CREATE TABLE `status_servicios` (
  `id_status_servicios` int(11) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `doc_ident` varchar(45) NOT NULL COMMENT 'C.I / RIF / Pasaporte',
  `numero_unico_registro` varchar(45) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `telefono` varchar(45) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `parroquias_id_parroquia` int(11) NOT NULL,
  `tipo_usuario` varchar(1) NOT NULL COMMENT '0=Ente , A=Artista, I= Admin',
  `licencia_contrato` varchar(1) DEFAULT '0' COMMENT '0= no aceptado ; 1= aceptado',
  `codigo_area` varchar(4) DEFAULT NULL,
  `pre_ci` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `doc_ident`, `numero_unico_registro`, `contrasena`, `telefono`, `correo`, `direccion`, `parroquias_id_parroquia`, `tipo_usuario`, `licencia_contrato`, `codigo_area`, `pre_ci`) VALUES
(1, 'jose', 'seijas', '2541212121', '00000001', '15989512', '123-1234', 'zaq@gmail.com', '', 1, '2', '0', 'V', '0'),
(4, 'jose', 'seijas', '2541212', '00000001', '14789632', '123-1234', 'zaq@mail.com', '', 1, '2', '0', 'V', '0'),
(5, 'bad bunny', 'seijas', '155152121', '00000001', '123456789', '123-5786', 'jfhjg@gmail.com', '', 1, '2', '0', 'V', '0'),
(6, 'fraiber', 'maldonado', '22951110', '00000001', 'Admin123', '599-5116', 'fraibermaldonado22@gmail.com', 'Tu mama', 1, '2', '0', 'V', '0'),
(9, 'jose', 'seijas', '22951', '00000001', '$2y$10$61CyFeBk5WiP33ZH.eMR9OIWp7Qjgtix0eV9PudJPbJ9P5S6PB1ZW', '123-4567', '121314@nose.com', 'uifd', 1, '2', '1', 'V', '0'),
(10, 'jose', 'luise', '1234567890', '00000001', '$2y$10$vD.LuDWars4cPEE9HU3shelItQUBjVVb9xaBd8H9xrYuCD/S9n0z2', '151-5212', '5fff45@gmna.com', '', 1, '2', '0', 'V', '0'),
(11, 'Jose Luis', 'seijas jr', '1111', '00000001', '$2y$10$z/PmR8QljDyRDcGqbPrqy.rhyDVI5W.Z.6zRpzVsiwz4xOCWZURza', '122-1212', 'luiseijasddfdfd@gmail.com', 'hola', 1, '1', '1', 'V', '0'),
(20, 'a', 'a', '229511101', '00000001', '$2y$10$Jm6FG0bvYqtaU8MB8WIh2ORsVQQdYS7PAPzSzM/FINElcHxgr095a', '124-0545', 'fgh', 'undefined', 1, '1', '0', 'V', '0'),
(21, 'a', 'a', '2295111010', '00000001', '$2y$10$qNgkO7U3bDwjVfwvsZOigOaLc2Ex.WK98VkRll9k6RqL0Y79qPnXG', '124-0545', 'fgh@', 'undefined', 1, '1', '0', 'V', '0'),
(22, 'a', 'a', '22951110100', '00000001', '$2y$10$BcD.nrG5sj2c8VfY4bNDQO3UUPHl.D3k0gBEAJkQPhx6ph.VVXuSK', '124-0545', 'fgh@gmail.com', 'undefined', 1, '1', '0', 'V', '0'),
(23, 'a', 'a', '22951110100000000', '00000001', '$2y$10$GY8tHz4eFAjhrbLxSBAdyeaa928q1fb/UpuZcwcpcFSKrzbJjikYO', '124-0545', 'fgh@gmail.comtgj', 'undefined', 1, '1', '0', 'V', '0'),
(24, 'gh', 'gh', '22951110215141545', '00000001', '$2y$10$H32E9DsN3Ko4eKCBHwFuTOWRQLjG/RMX2eFGFCMJXv.TfFvkEGEO2', '151-5421', 'ghg', 'undefined', 1, '2', '0', 'V', '0'),
(25, 'a', 'a', '229511101212', '00000001', '$2y$10$fnC8Et9iiJNvO7YPE1wXCeJw.Wa9FH5qjgiIWZbcj7Pxp/qNe/ApO', '123-1234', 'jhjhj', 'undefined', 1, '1', '0', 'V', '0'),
(26, 'a', 'a', '123123', '00000001', '$2y$10$kHJRMzl4gH6kwihCWqDTE.KqWJHiOCe5fe2CW8jMhcCowxPWgY0cC', '121-1212', 'qwe@tal.algo', 'undefined', 1, '1', '0', 'V', '0'),
(27, 'a', 'a', '25412121', '00000001', '$2y$10$qr3ritreoOKZVSDOg8VkoupH131zNHEbrfRBqYR0.2Gm9xbNFU2re', '123-1212', '121314@nose.com.ve', 'undefined', 1, '2', '1', 'V', '0'),
(28, 'as', 'as', '21092234', '00000001', '$2y$10$G6koA9Ud1GXtBIpwPEThsuSvdvwd0pvaCEOGSjPGo/lc9eF/X6itS', '123-4567', 'luiseij@gmail.com.ve', 'undefined', 1, '2', '0', 'V', '0'),
(29, 'cu', 'ca', '12122121', '00000001', '$2y$10$Uw.02rKb.MNw/XNbjUwsyuEJVDDMebRMMmUA.7jFpWVJELu8seBmy', '121-2222', 'anpa.ank@gmail.com.ve', 'undefined', 1, '1', '0', 'V', '0'),
(30, 'g', 'g', '0123456789', '00000001', '$2y$10$VVMZR84aoGuzPIqjzxoeR.pUBAvq7KfSCKkmcn/wjo81SltbQUSq2', '121-2222', 'zaq@mail.com.ve', '^(?=.*d)(?=.*[u0021-u002bu003c-u0040])(?=.*[A', 1, '2', '1', 'V', '0'),
(31, 'mipa', 'lote', '21092233', NULL, '$2y$10$EpR37/ANG0pWyq.Qex/lneH.gPIS39zhH1JFgejiD0yerITn7E3oO', '123-1234', 'qwert@gmail.com.ve', 'zaqwe', 1, '2', '0', '0212', 'V'),
(32, 'soytu', 'puto', '1234', 'E00032', '$2y$10$bHkdx2rjyxLaZpE64UJ/Q.PrAJsE8uK3PP3NQZbmGzM0U9OUiZr2O', '123-1212', 'ank@gmail.com', 'zaqwe', 1, '1', '0', '0212', 'V'),
(33, 'JOSE', 'F', '22951110000000', 'A00033', '$2y$10$scB8Wfpqh4oMXDSqbVIbmuCERNxTdLe.T8HsgFQ7kU6Cj3drQl/B6', '548-5454', 'jogfgfse@gmail.com', 'FHH', 1, '2', '0', '0212', 'V'),
(34, 'no', 'se', '1234123', 'A00034', '$2y$10$SGFkkT6V/BvGhCubJDEuf.MUAbAimffRLAtAmwyOJMZ0jme9ecVdW', '123-4567', 'nose@gmail.com', 'zaqwsx', 1, '2', '1', '0212', 'V');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas_agrupaciones`
--
ALTER TABLE `artistas_agrupaciones`
  ADD PRIMARY KEY (`id_agrupaciones`),
  ADD KEY `fk_artistas_agrupaciones_artistas1_idx` (`artistas_urbanos_id_artistas`);

--
-- Indices de la tabla `artistas_esp_artisticas`
--
ALTER TABLE `artistas_esp_artisticas`
  ADD PRIMARY KEY (`id_esp_artisticas`,`esp_artisticas_id_esp_artistica`),
  ADD KEY `fk_artistas_has_esp_artisticas_esp_artisticas1_idx` (`esp_artisticas_id_esp_artistica`),
  ADD KEY `fk_artistas_esp_artisticas_artistas_urbanos1_idx` (`artistas_urbanos_id_artistas`);

--
-- Indices de la tabla `artistas_estudios_realizados`
--
ALTER TABLE `artistas_estudios_realizados`
  ADD PRIMARY KEY (`id_estudios_realizados`),
  ADD KEY `fk_estudios_realizados_artistas1_idx` (`artistas_urbanos_id_artistas`);

--
-- Indices de la tabla `artistas_redes_sociales`
--
ALTER TABLE `artistas_redes_sociales`
  ADD PRIMARY KEY (`id_artistas_redes_sociales`),
  ADD KEY `fk_artistas_redes_sociales_artistas_urbanos1_idx` (`artistas_urbanos_id_artistas`),
  ADD KEY `fk_artistas_redes_sociales_redes_sociales1_idx` (`redes_sociales_id_redes_sociales`);

--
-- Indices de la tabla `artistas_titulos_obtenidos`
--
ALTER TABLE `artistas_titulos_obtenidos`
  ADD PRIMARY KEY (`id_titulos_obtenidos`),
  ADD KEY `fk_artistas_titulos_artistas1_idx` (`artistas_urbanos_id_artistas`);

--
-- Indices de la tabla `artistas_urbanos`
--
ALTER TABLE `artistas_urbanos`
  ADD PRIMARY KEY (`id_artistas`),
  ADD KEY `fk_artistas_usuarios1_idx` (`usuarios_id_usuario`);

--
-- Indices de la tabla `contrato_patrocinio`
--
ALTER TABLE `contrato_patrocinio`
  ADD PRIMARY KEY (`id_contrato`,`servicio_patrocinio_id_servicios`),
  ADD KEY `fk_patrocinio_entes_culturales1_idx` (`entes_culturales_id_ente_cultural`),
  ADD KEY `fk_patrocinio_artistas1_idx` (`artistas_urbanos_id_artistas`),
  ADD KEY `fk_contrato_servicios1_idx` (`servicio_patrocinio_id_servicios`);

--
-- Indices de la tabla `entes_culturales`
--
ALTER TABLE `entes_culturales`
  ADD PRIMARY KEY (`id_ente_cultural`),
  ADD KEY `fk_entes_culturales_usuarios1_idx` (`usuarios_id_usuario`);

--
-- Indices de la tabla `entes_redes_sociales`
--
ALTER TABLE `entes_redes_sociales`
  ADD PRIMARY KEY (`identes_redes_sociales`),
  ADD KEY `fk_entes_redes_sociales_redes_sociales1_idx` (`redes_sociales_id_redes_sociales`),
  ADD KEY `fk_entes_redes_sociales_entes_culturales1_idx` (`entes_culturales_id_ente_cultural`);

--
-- Indices de la tabla `esp_artisticas`
--
ALTER TABLE `esp_artisticas`
  ADD PRIMARY KEY (`id_esp_artistica`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_municipio`),
  ADD KEY `fk_municipios_estados1_idx` (`estados_id_estado`);

--
-- Indices de la tabla `parroquias`
--
ALTER TABLE `parroquias`
  ADD PRIMARY KEY (`id_parroquia`),
  ADD KEY `fk_parroquias_municipios1_idx` (`municipios_id_municipio`);

--
-- Indices de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  ADD PRIMARY KEY (`id_redes_sociales`);

--
-- Indices de la tabla `servicio_patrocinio`
--
ALTER TABLE `servicio_patrocinio`
  ADD PRIMARY KEY (`id_servicios`),
  ADD KEY `fk_servicios_status_servicios1_idx` (`status_servicios_id_status_servicios`);

--
-- Indices de la tabla `status_servicios`
--
ALTER TABLE `status_servicios`
  ADD PRIMARY KEY (`id_status_servicios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `doc_ident_UNIQUE` (`doc_ident`),
  ADD KEY `fk_usuarios_parroquias1_idx` (`parroquias_id_parroquia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas_agrupaciones`
--
ALTER TABLE `artistas_agrupaciones`
  MODIFY `id_agrupaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `artistas_esp_artisticas`
--
ALTER TABLE `artistas_esp_artisticas`
  MODIFY `id_esp_artisticas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `artistas_estudios_realizados`
--
ALTER TABLE `artistas_estudios_realizados`
  MODIFY `id_estudios_realizados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `artistas_redes_sociales`
--
ALTER TABLE `artistas_redes_sociales`
  MODIFY `id_artistas_redes_sociales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `artistas_titulos_obtenidos`
--
ALTER TABLE `artistas_titulos_obtenidos`
  MODIFY `id_titulos_obtenidos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `artistas_urbanos`
--
ALTER TABLE `artistas_urbanos`
  MODIFY `id_artistas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `contrato_patrocinio`
--
ALTER TABLE `contrato_patrocinio`
  MODIFY `id_contrato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entes_culturales`
--
ALTER TABLE `entes_culturales`
  MODIFY `id_ente_cultural` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `entes_redes_sociales`
--
ALTER TABLE `entes_redes_sociales`
  MODIFY `identes_redes_sociales` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `esp_artisticas`
--
ALTER TABLE `esp_artisticas`
  MODIFY `id_esp_artistica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `parroquias`
--
ALTER TABLE `parroquias`
  MODIFY `id_parroquia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  MODIFY `id_redes_sociales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `servicio_patrocinio`
--
ALTER TABLE `servicio_patrocinio`
  MODIFY `id_servicios` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `status_servicios`
--
ALTER TABLE `status_servicios`
  MODIFY `id_status_servicios` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `artistas_agrupaciones`
--
ALTER TABLE `artistas_agrupaciones`
  ADD CONSTRAINT `fk_artistas_agrupaciones_artistas1` FOREIGN KEY (`artistas_urbanos_id_artistas`) REFERENCES `artistas_urbanos` (`id_artistas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `artistas_esp_artisticas`
--
ALTER TABLE `artistas_esp_artisticas`
  ADD CONSTRAINT `fk_artistas_esp_artisticas_artistas_urbanos1` FOREIGN KEY (`artistas_urbanos_id_artistas`) REFERENCES `artistas_urbanos` (`id_artistas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artistas_has_esp_artisticas_esp_artisticas1` FOREIGN KEY (`esp_artisticas_id_esp_artistica`) REFERENCES `esp_artisticas` (`id_esp_artistica`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `artistas_estudios_realizados`
--
ALTER TABLE `artistas_estudios_realizados`
  ADD CONSTRAINT `fk_estudios_realizados_artistas1` FOREIGN KEY (`artistas_urbanos_id_artistas`) REFERENCES `artistas_urbanos` (`id_artistas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `artistas_redes_sociales`
--
ALTER TABLE `artistas_redes_sociales`
  ADD CONSTRAINT `fk_artistas_redes_sociales_artistas_urbanos1` FOREIGN KEY (`artistas_urbanos_id_artistas`) REFERENCES `artistas_urbanos` (`id_artistas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artistas_redes_sociales_redes_sociales1` FOREIGN KEY (`redes_sociales_id_redes_sociales`) REFERENCES `redes_sociales` (`id_redes_sociales`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `artistas_titulos_obtenidos`
--
ALTER TABLE `artistas_titulos_obtenidos`
  ADD CONSTRAINT `fk_artistas_titulos_artistas1` FOREIGN KEY (`artistas_urbanos_id_artistas`) REFERENCES `artistas_urbanos` (`id_artistas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `artistas_urbanos`
--
ALTER TABLE `artistas_urbanos`
  ADD CONSTRAINT `fk_artistas_usuarios1` FOREIGN KEY (`usuarios_id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `contrato_patrocinio`
--
ALTER TABLE `contrato_patrocinio`
  ADD CONSTRAINT `fk_contrato_servicios1` FOREIGN KEY (`servicio_patrocinio_id_servicios`) REFERENCES `servicio_patrocinio` (`id_servicios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_patrocinio_artistas1` FOREIGN KEY (`artistas_urbanos_id_artistas`) REFERENCES `artistas_urbanos` (`id_artistas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_patrocinio_entes_culturales1` FOREIGN KEY (`entes_culturales_id_ente_cultural`) REFERENCES `entes_culturales` (`id_ente_cultural`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `entes_culturales`
--
ALTER TABLE `entes_culturales`
  ADD CONSTRAINT `fk_entes_culturales_usuarios1` FOREIGN KEY (`usuarios_id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `entes_redes_sociales`
--
ALTER TABLE `entes_redes_sociales`
  ADD CONSTRAINT `fk_entes_redes_sociales_entes_culturales1` FOREIGN KEY (`entes_culturales_id_ente_cultural`) REFERENCES `entes_culturales` (`id_ente_cultural`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_entes_redes_sociales_redes_sociales1` FOREIGN KEY (`redes_sociales_id_redes_sociales`) REFERENCES `redes_sociales` (`id_redes_sociales`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `fk_municipios_estados1` FOREIGN KEY (`estados_id_estado`) REFERENCES `estados` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `parroquias`
--
ALTER TABLE `parroquias`
  ADD CONSTRAINT `fk_parroquias_municipios1` FOREIGN KEY (`municipios_id_municipio`) REFERENCES `municipios` (`id_municipio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `servicio_patrocinio`
--
ALTER TABLE `servicio_patrocinio`
  ADD CONSTRAINT `fk_servicios_status_servicios1` FOREIGN KEY (`status_servicios_id_status_servicios`) REFERENCES `status_servicios` (`id_status_servicios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_parroquias1` FOREIGN KEY (`parroquias_id_parroquia`) REFERENCES `parroquias` (`id_parroquia`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
