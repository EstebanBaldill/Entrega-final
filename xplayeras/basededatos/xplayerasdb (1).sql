-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-11-2019 a las 17:41:39
-- Versión del servidor: 8.0.15
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `xplayerasdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `id_playera` int(11) DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Numerodepedido` int(5) DEFAULT NULL,
  `FechaPedido` date DEFAULT NULL,
  `FechaEntregado` date DEFAULT NULL,
  `DomicilioEntrega` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_playera` (`id_playera`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `playeras`
--

DROP TABLE IF EXISTS `playeras`;
CREATE TABLE IF NOT EXISTS `playeras` (
  `id_playera` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(150) DEFAULT NULL,
  `Descripcion` varchar(250) DEFAULT NULL,
  `Tipo` int(11) DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `Existencia` int(11) DEFAULT NULL,
  `diseño` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_playera`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `playeras`
--

INSERT INTO `playeras` (`id_playera`, `Nombre`, `Descripcion`, `Tipo`, `Precio`, `Existencia`, `diseño`) VALUES
(1, 'Pareja', 'playera Quenn,King talla chica', 1, 500, 28, 'moderno'),
(2, 'brawl stars', 'playera de l juego brawl stars talla chica', 2, 250, 22, 'personalizado'),
(3, 'Adidas', 'Playera deportiva adidas talla mediana', 3, 300, 29, 'moderno'),
(4, 'nike', 'playera deportiva marca nike talla grande', 4, 200, 29, 'deportivo'),
(5, 'pareja', 'playera deportiva para parejas talla pequeña', 5, 234, 20, 'personalizado'),
(6, 'Gucci', 'playera tipo Polo gucci , talla mediana', 6, 400, 5, 'polo'),
(7, 'polo', 'playera polo deportiva, talla mediana', 7, 500, 98, 'polo'),
(8, 'levis', 'playera levis talla grande ', 8, 330, 45, 'suave');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCompleto` varchar(120) DEFAULT NULL,
  `Tipo` int(11) DEFAULT NULL,
  `Correo` varchar(150) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `NombreCompleto`, `Tipo`, `Correo`, `Password`) VALUES
(1, 'Freddy Esteban Balcazar Padilla', 1, 'freddypadilla190@gmail.com', '55123'),
(2, 'esteban', 2, 'baldill@gmail.com', '55123'),
(3, 'esteban', 2, 'hola', '123'),
(4, 'freddy', 2, 'padilla', '55123');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_playera`) REFERENCES `playeras` (`id_playera`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
