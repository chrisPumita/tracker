-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2021 a las 03:30:22
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectracker`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(10) NOT NULL,
  `nombre_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `razon_social` varchar(100) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `tipo_cuenta` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa_plan`
--

CREATE TABLE `empresa_plan` (
  `id_contrato` int(10) NOT NULL,
  `id_empresa_fk` int(10) NOT NULL,
  `id_plan_fk` int(10) NOT NULL,
  `inicio` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `estatus` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapas`
--

CREATE TABLE `etapas` (
  `id_etapa` int(10) NOT NULL,
  `id_proyecto_fk` int(10) NOT NULL,
  `nombre_etapa` varchar(100) NOT NULL,
  `estado_proceso` tinyint(2) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `dias` int(10) NOT NULL,
  `indice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupotrabajo_usuario`
--

CREATE TABLE `grupotrabajo_usuario` (
  `id_usuario_fk` int(10) NOT NULL,
  `id_gt_fk` int(10) NOT NULL,
  `fecha_union` datetime NOT NULL,
  `permisos` tinyint(2) NOT NULL,
  `lider` tinyint(2) NOT NULL,
  `estado` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_trabajo`
--

CREATE TABLE `grupo_trabajo` (
  `id_gt` int(10) NOT NULL,
  `id_empresa_fk` int(10) NOT NULL,
  `nombre_gt` varchar(100) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE `plan` (
  `id_plan` int(10) NOT NULL,
  `max_usuarios` int(10) NOT NULL,
  `costo` decimal(10,2) NOT NULL,
  `descripcion` text NOT NULL,
  `max_proyectos` int(10) NOT NULL,
  `tiempo_dias` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id_proyecto` int(10) NOT NULL,
  `id_gt_fk` int(10) NOT NULL,
  `id_categoria_fk` int(10) NOT NULL,
  `nombre_proyecto` varchar(100) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `dias` int(10) NOT NULL,
  `tipo_jornada` tinyint(2) NOT NULL,
  `estado` tinyint(2) NOT NULL,
  `link` text NOT NULL,
  `url_imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subetapas`
--

CREATE TABLE `subetapas` (
  `id_subetapa` int(10) NOT NULL,
  `id_etapa_fk` int(10) NOT NULL,
  `nombre_subetapa` varchar(100) NOT NULL,
  `estado` tinyint(2) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `dias` int(10) NOT NULL,
  `indice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL,
  `id_empresa_fk` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apaterno` varchar(50) NOT NULL,
  `amaterno` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nivel_acceso` tinyint(2) NOT NULL,
  `path_img` text,
  `estado` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `empresa_plan`
--
ALTER TABLE `empresa_plan`
  ADD PRIMARY KEY (`id_contrato`),
  ADD KEY `id_empresa_fk` (`id_empresa_fk`),
  ADD KEY `id_plan_fk` (`id_plan_fk`);

--
-- Indices de la tabla `etapas`
--
ALTER TABLE `etapas`
  ADD PRIMARY KEY (`id_etapa`),
  ADD KEY `id_proyecto_fk` (`id_proyecto_fk`);

--
-- Indices de la tabla `grupotrabajo_usuario`
--
ALTER TABLE `grupotrabajo_usuario`
  ADD PRIMARY KEY (`id_gt_fk`,`id_usuario_fk`),
  ADD KEY `id_usuario_fk` (`id_usuario_fk`,`id_gt_fk`);

--
-- Indices de la tabla `grupo_trabajo`
--
ALTER TABLE `grupo_trabajo`
  ADD PRIMARY KEY (`id_gt`),
  ADD KEY `id_empresa_fk` (`id_empresa_fk`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id_plan`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id_proyecto`),
  ADD KEY `id_gt_fk` (`id_gt_fk`),
  ADD KEY `id_categoria_fk` (`id_categoria_fk`);

--
-- Indices de la tabla `subetapas`
--
ALTER TABLE `subetapas`
  ADD PRIMARY KEY (`id_subetapa`),
  ADD KEY `id_etapa_fk` (`id_etapa_fk`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_empresa_fk` (`id_empresa_fk`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa_plan`
--
ALTER TABLE `empresa_plan`
  MODIFY `id_contrato` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `etapas`
--
ALTER TABLE `etapas`
  MODIFY `id_etapa` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupo_trabajo`
--
ALTER TABLE `grupo_trabajo`
  MODIFY `id_gt` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plan`
--
ALTER TABLE `plan`
  MODIFY `id_plan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id_proyecto` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subetapas`
--
ALTER TABLE `subetapas`
  MODIFY `id_subetapa` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empresa_plan`
--
ALTER TABLE `empresa_plan`
  ADD CONSTRAINT `empresa_plan_ibfk_1` FOREIGN KEY (`id_plan_fk`) REFERENCES `plan` (`id_plan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `empresa_plan_ibfk_2` FOREIGN KEY (`id_empresa_fk`) REFERENCES `empresa` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `etapas`
--
ALTER TABLE `etapas`
  ADD CONSTRAINT `etapas_ibfk_1` FOREIGN KEY (`id_proyecto_fk`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupotrabajo_usuario`
--
ALTER TABLE `grupotrabajo_usuario`
  ADD CONSTRAINT `grupotrabajo_usuario_ibfk_1` FOREIGN KEY (`id_gt_fk`) REFERENCES `grupo_trabajo` (`id_gt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grupotrabajo_usuario_ibfk_2` FOREIGN KEY (`id_usuario_fk`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupo_trabajo`
--
ALTER TABLE `grupo_trabajo`
  ADD CONSTRAINT `grupo_trabajo_ibfk_1` FOREIGN KEY (`id_empresa_fk`) REFERENCES `empresa` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`id_gt_fk`) REFERENCES `grupo_trabajo` (`id_gt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proyecto_ibfk_2` FOREIGN KEY (`id_categoria_fk`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `subetapas`
--
ALTER TABLE `subetapas`
  ADD CONSTRAINT `subetapas_ibfk_1` FOREIGN KEY (`id_etapa_fk`) REFERENCES `etapas` (`id_etapa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_empresa_fk`) REFERENCES `empresa` (`id_empresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
