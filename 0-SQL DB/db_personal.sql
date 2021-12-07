-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2021 a las 21:40:37
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_personal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `postulantes_id` int(11) NOT NULL,
  `variables_a_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulantes`
--

CREATE TABLE `postulantes` (
  `id` int(11) NOT NULL,
  `ci` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ape_paterno` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ape_materno` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `edad` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `postulantes`
--

INSERT INTO `postulantes` (`id`, `ci`, `nombres`, `ape_paterno`, `ape_materno`, `genero`, `edad`, `telefono`) VALUES
(1, '4587235', 'Diego', 'Calle', 'Quinteros', 'M', '34', '76549867'),
(2, '4356789', 'Pablo', 'Medina', 'Cruz', 'M', '33', '54769834'),
(3, '32547623', 'Paola', 'Quiroga', 'Buezo', 'F', '23', '78965423'),
(4, '4576235', 'Carola', 'Bustillos', 'Nina', 'F', '25', '76598767'),
(5, '3564756', 'Hugo', 'Lluzco', 'Choque', 'M', '26', '75463487'),
(6, '3546576', 'Gloria', 'Medina', 'Vidal', 'F', '27', '69647586'),
(7, '3354675', 'Guido', 'Mamani', 'Chura', 'M', '24', '68543476'),
(8, '3546435', 'Diana', 'Sirpa', 'Dimas', 'F', '32', '77634567'),
(9, '4537264', 'Marcelo', 'Quispe', 'Caro', 'M', '30', '76459373'),
(10, '3449756', 'Maria', 'Quiroz', 'Laime', 'F', '32', '77745456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(1, 'donato', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variables_a`
--

CREATE TABLE `variables_a` (
  `id` int(11) NOT NULL,
  `form_acad` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `exp_lab` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `exp_area` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `entrevista` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `cono_area` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `comunicacion` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `vocacion` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `aprendizaje` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `valores` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `moral` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `legalidad` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `indiferencia` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `corrupto` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `int_eco` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `int_poli` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `int_soci` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `int_reli` varchar(5) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`postulantes_id`,`variables_a_id`),
  ADD KEY `fk_postulantes_has_variables_a_variables_a1_idx` (`variables_a_id`),
  ADD KEY `fk_postulantes_has_variables_a_postulantes_idx` (`postulantes_id`);

--
-- Indices de la tabla `postulantes`
--
ALTER TABLE `postulantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `variables_a`
--
ALTER TABLE `variables_a`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `postulantes`
--
ALTER TABLE `postulantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `variables_a`
--
ALTER TABLE `variables_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD CONSTRAINT `fk_postulantes_has_variables_a_postulantes` FOREIGN KEY (`postulantes_id`) REFERENCES `postulantes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_postulantes_has_variables_a_variables_a1` FOREIGN KEY (`variables_a_id`) REFERENCES `variables_a` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
