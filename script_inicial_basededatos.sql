-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.29-MariaDB-6 - Debian buildd-unstable
-- SO del servidor:              debian-linux-gnu
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para programacion_web
CREATE DATABASE IF NOT EXISTS `programacion_web` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `programacion_web`;

-- Volcando estructura para tabla programacion_web.empleados
CREATE TABLE IF NOT EXISTS `empleados` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de tabla',
  `usuario_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `correo_electronico` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`usuario_id`),
  CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla programacion_web.empleados: ~0 rows (aproximadamente)
DELETE FROM `empleados`;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` (`id`, `usuario_id`, `nombre`, `apellido`, `edad`, `correo_electronico`, `created_at`, `updated_at`) VALUES
  (8, 9, 'asdasd', 'asdad', 23, 'asdad@asdasd.com', '2018-11-23 23:35:41', '2018-11-23 23:35:41');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;

-- Volcando estructura para tabla programacion_web.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de tabla',
  `usuario` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contrasena` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla programacion_web.usuarios: ~0 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`, `created_at`, `updated_at`) VALUES
  (9, 'pruebas', '50569377801482295f598d7767e11b9b', '2018-11-23 23:35:41', '2018-11-23 23:35:41');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla programacion_web.visitas
CREATE TABLE IF NOT EXISTS `visitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad_visitas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla programacion_web.visitas: ~0 rows (aproximadamente)
DELETE FROM `visitas`;
/*!40000 ALTER TABLE `visitas` DISABLE KEYS */;
INSERT INTO `visitas` (`id`, `cantidad_visitas`) VALUES
  (1, 34);
/*!40000 ALTER TABLE `visitas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
