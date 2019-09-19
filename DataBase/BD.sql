
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Base de datos: `apithon16`

CREATE DATABASE IF NOT EXISTS `apithon16` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `apithon16`;

-- --------------------------------------------------------

-- Estructura de tabla para la tabla `tblusuarios`

CREATE TABLE `tblusuarios` (
  `documento` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `numCuenta` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `montoCuenta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcado de datos para la tabla `tblusuarios`

INSERT INTO `tblusuarios` (`documento`, `numCuenta`, `nombre`, `apellido`, `correo`, `pass`, `montoCuenta`) VALUES
('123456', '1234567890', 'pepito', 'perez', 'pepitoQ@sd.co', '1234', 1350000),
('123498765', '987654321', 'juan', 'pepito', 'nose', '12345', 968221);

-- Índices para tablas volcadas

--
-- Indices de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD PRIMARY KEY (`documento`),
  ADD UNIQUE KEY `numCuenta` (`numCuenta`);
--
