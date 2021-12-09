-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2021 a las 03:18:55
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bluepiece`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialista`
--

CREATE TABLE `especialista` (
  `id_especialista` int(10) NOT NULL,
  `nombre_especialista` varchar(64) NOT NULL,
  `apellido_especialista` varchar(64) NOT NULL,
  `estado_especialista` varchar(25) NOT NULL,
  `ciudad_especialista` varchar(25) NOT NULL,
  `telefono_especialista` varchar(11) DEFAULT NULL,
  `email_especialista` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialista`
--

INSERT INTO `especialista` (`id_especialista`, `nombre_especialista`, `apellido_especialista`, `estado_especialista`, `ciudad_especialista`, `telefono_especialista`, `email_especialista`) VALUES
(1, 'Alberto ', 'Villalobos Peña', 'Baja California', 'Ensenada', '6462277721', 'especialista@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `id` int(11) NOT NULL,
  `resultado` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idPaciente` int(11) DEFAULT NULL,
  `riesgo` varchar(100) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evaluacion`
--

INSERT INTO `evaluacion` (`id`, `resultado`, `idUsuario`, `idPaciente`, `riesgo`, `fecha`) VALUES
(1, 0, NULL, NULL, 'Bajo', '2021-05-17'),
(35, 14, NULL, NULL, 'Alto', '2021-05-26'),
(37, 14, 9, 4, 'Alto', '2021-05-26'),
(38, 15, 9, 4, 'Alto', '2021-05-26'),
(39, 13, 9, 23, 'Alto', '2021-05-26'),
(40, 12, 9, 4, 'Alto', '2021-05-26'),
(41, 15, 9, 4, 'Alto', '2021-05-26'),
(42, 14, 9, 23, 'Alto', '2021-05-26'),
(43, 12, 9, 26, 'Alto', '2021-05-26'),
(44, 13, 9, 27, 'Alto', '2021-05-27'),
(45, 13, 9, 27, 'Alto', '2021-05-27'),
(46, 12, 9, 27, 'Alto', '2021-05-27'),
(47, 16, 9, 4, 'Alto', '2021-05-27'),
(48, 12, 9, 27, 'Alto', '2021-05-27'),
(49, 13, 9, 28, 'Alto', '2021-05-27'),
(50, 14, 9, 4, 'Alto', '2021-05-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `id_institucion` int(11) NOT NULL,
  `nombre_institucion` varchar(45) DEFAULT NULL,
  `direccion_institucion` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `servicios` varchar(200) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`id_institucion`, `nombre_institucion`, `direccion_institucion`, `estado`, `ciudad`, `telefono`, `email`, `servicios`, `status`) VALUES
(1, 'San Juan Hospital infantil', 'Calle novena', 'baja california', 'ensenada', '646', 'nosotrossanjuan@correo', 'servicios generales ', 'aceptado'),
(2, 'Instituto para elTEA', 'calle cuarta', NULL, NULL, NULL, NULL, 'especialistas en TEA', 'aceptado'),
(3, 'Hospital infantil para el TEA', 'san juan #12', 'baja california', 'ensenada', '6161111', NULL, NULL, NULL),
(4, 'hospital infantil Bugambilias', 'calle 12', 'baja california', 'ensenada', '64612332', NULL, '', NULL),
(5, 'instituto de medicina infantil', 'calle novena, #12', 'baja california', 'Tijuana', '664123444', NULL, 'Servicios especializados, atencion 24h', NULL),
(11, 'instituto psicologico Baja california', 'Colonia Romo, cale #12', 'baja california', 'ensenada', '6461234343', NULL, 'Atencion psicologica y psiquiatrica infantil', NULL),
(12, 'psicologia infantil san bernardo', 'colonia las flores', 'baja california', 'mexicali', '6641235658', NULL, 'terapia individual', NULL),
(13, 'VIDA CON TEA', '123', 'baja california', 'ensenada', '6461235555', NULL, 'atencion gratuita', NULL),
(14, 'VIDA CON TEA', '123', 'baja california', 'ensenada', '1234567898', NULL, 'ninguno', NULL),
(15, 'psicologia infantil san bernardo', '123', 'baja california', 'ensenada', '123456789', NULL, 'ewfsfsffs', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellido` varchar(150) NOT NULL,
  `edad` varchar(30) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `direccion` varchar(300) DEFAULT NULL,
  `ciudad` varchar(150) DEFAULT NULL,
  `estado` varchar(150) NOT NULL,
  `pais` varchar(150) NOT NULL,
  `telefono` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `nombre`, `apellido`, `edad`, `sexo`, `direccion`, `ciudad`, `estado`, `pais`, `telefono`) VALUES
(4, 'Juanito', 'Escarcha', '16 meses', 'Masculino', 'Calle # Colonia', 'Ensenada', 'Baja California', 'Mexico', '646111111111'),
(23, 'Alice', 'Wonderland', '14 meses', 'Femenino', '', '', 'Baja California', 'Mexico', ''),
(25, 'Juanita', 'Escutia', '4 meses', 'Femenino', 'direccion generica', 'ensenada ', 'baja california', 'Mexico', '6462566621'),
(26, 'Juana', 'De Arco', '2 años', 'Femenino', '', '', 'Mexico', 'Mexico', ''),
(29, 'Yeicob', 'Pruebas', '12 años', 'Masculino', 'Calle novena, los rosales #123', 'Campeche ', 'Baja California ', 'Mexico', '212121212'),
(30, 'martha alicia', 'jacob', '6 meses', 'Femenino', '123', 'ensenada', 'baja california', 'Mexico ', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `Id_Servicio` int(11) NOT NULL,
  `Nombre_Servicio` varchar(30) NOT NULL,
  `Tipo_Servicio` varchar(45) NOT NULL,
  `Institucion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor_paciente`
--

CREATE TABLE `tutor_paciente` (
  `id` int(11) NOT NULL,
  `idTutor` int(11) NOT NULL,
  `idPaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tutor_paciente`
--

INSERT INTO `tutor_paciente` (`id`, `idTutor`, `idPaciente`) VALUES
(1, 11, 4),
(2, 11, 23),
(4, 11, 25),
(5, 11, 26),
(8, 14, 29),
(9, 9, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `email` varchar(130) NOT NULL,
  `contraseña` varchar(40) NOT NULL,
  `ciudad` varchar(150) DEFAULT NULL,
  `estado` varchar(150) DEFAULT NULL,
  `pais` varchar(150) DEFAULT NULL,
  `direccion` varchar(300) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `email`, `contraseña`, `ciudad`, `estado`, `pais`, `direccion`, `telefono`, `tipo`) VALUES
(9, 'Carlo', 'Vega', 'vega.carlo@uabc.edu.mx', 'asdf', 'Mexico', 'México', 'México', 'Calle # Colonia', '646111', 'Tutor'),
(11, 'Juan', 'Escutia', 'juan@escutia', 'asdf', 'Mexico', 'Mexico', 'Mexico', 'Calle Niños Héroes', '111111112', 'Especialista'),
(13, 'Yeicob', 'Hernandez', 'Yei666@gmail.com', 'yeicobugs', '', '32', 'mex', '', '', 'Tutor'),
(14, 'Javier Francisco', 'Montoya Mayoral Jimenez', 'javi@gmail.com', 'mayobugs', 'Ensenada', 'Baja California ', 'Mexico ', 'Los pinos #1999', '646123878800000', 'Especialista'),
(15, 'Yeicob ', 'Pruebas', 'repreYeicob@gmail.com', 'repre666', '', 'B.c', 'Mexico ', '', '', 'Representante'),
(16, 'martha alicia', 'jacob', 'dd@correo', '123456', 'ensenada', 'baja california', 'Mexico ', '123', '', 'Representante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_institucion`
--

CREATE TABLE `usuario_institucion` (
  `id_usuario_institucion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_institucion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_institucion`
--

INSERT INTO `usuario_institucion` (`id_usuario_institucion`, `id_usuario`, `id_institucion`) VALUES
(1, 16, 15);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `especialista`
--
ALTER TABLE `especialista`
  ADD PRIMARY KEY (`id_especialista`);

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id_institucion`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tutor_paciente`
--
ALTER TABLE `tutor_paciente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `usuario_institucion`
--
ALTER TABLE `usuario_institucion`
  ADD PRIMARY KEY (`id_usuario_institucion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id_institucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `tutor_paciente`
--
ALTER TABLE `tutor_paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuario_institucion`
--
ALTER TABLE `usuario_institucion`
  MODIFY `id_usuario_institucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
