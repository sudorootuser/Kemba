/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.21-MariaDB : Database - kemba
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kemba` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `kemba`;

/*Table structure for table `documentos` */

DROP TABLE IF EXISTS `documentos`;

CREATE TABLE `documentos` (
  `idDocumentos` int(11) NOT NULL AUTO_INCREMENT,
  `Creditos_idCreditos` int(11) NOT NULL,
  PRIMARY KEY (`idDocumentos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `documentos` */

/*Table structure for table `documentos_x_solicitudes` */

DROP TABLE IF EXISTS `documentos_x_solicitudes`;

CREATE TABLE `documentos_x_solicitudes` (
  `iddocumentos_x_solicitudes` int(11) NOT NULL AUTO_INCREMENT,
  `solicitudes_idSolicitudes` int(11) NOT NULL,
  `documentos_idDocumentos` int(11) NOT NULL,
  PRIMARY KEY (`iddocumentos_x_solicitudes`),
  KEY `fk_documentos_x_solicitudes_solicitudes1_idx` (`solicitudes_idSolicitudes`),
  KEY `fk_documentos_x_solicitudes_documentos1_idx` (`documentos_idDocumentos`),
  CONSTRAINT `fk_documentos_x_solicitudes_documentos1` FOREIGN KEY (`documentos_idDocumentos`) REFERENCES `documentos` (`idDocumentos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_documentos_x_solicitudes_solicitudes1` FOREIGN KEY (`solicitudes_idSolicitudes`) REFERENCES `solicitudes` (`idSolicitudes`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `documentos_x_solicitudes` */

/*Table structure for table `empresas` */

DROP TABLE IF EXISTS `empresas`;

CREATE TABLE `empresas` (
  `idEmpresas` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `referenciador` varchar(45) NOT NULL,
  PRIMARY KEY (`idEmpresas`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `empresas` */

insert  into `empresas`(`idEmpresas`,`nombre`,`referenciador`) values (1,'Avon','1');

/*Table structure for table `historial` */

DROP TABLE IF EXISTS `historial`;

CREATE TABLE `historial` (
  `idHistorial` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `activo` int(11) NOT NULL,
  PRIMARY KEY (`idHistorial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `historial` */

/*Table structure for table `learning` */

DROP TABLE IF EXISTS `learning`;

CREATE TABLE `learning` (
  `idlearning` int(11) NOT NULL AUTO_INCREMENT,
  `Usuarios_idUsuarios` int(11) NOT NULL,
  PRIMARY KEY (`idlearning`),
  KEY `fk_learning_Usuarios1_idx` (`Usuarios_idUsuarios`),
  CONSTRAINT `fk_learning_Usuarios1` FOREIGN KEY (`Usuarios_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `learning` */

/*Table structure for table `notificaciones` */

DROP TABLE IF EXISTS `notificaciones`;

CREATE TABLE `notificaciones` (
  `idNotificaciones` int(11) NOT NULL AUTO_INCREMENT,
  `Usuarios_idUsuarios` int(11) NOT NULL,
  PRIMARY KEY (`idNotificaciones`),
  KEY `fk_Notificaciones_Usuarios1_idx` (`Usuarios_idUsuarios`),
  CONSTRAINT `fk_Notificaciones_Usuarios1` FOREIGN KEY (`Usuarios_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `notificaciones` */

/*Table structure for table `productos` */

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `idProductos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`idProductos`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `productos` */

insert  into `productos`(`idProductos`,`nombre`,`estado`) values (1,'Mi CrediKemba',1),(2,'Mi EcoAhorro',1),(3,'Kemba-Elerning',1);

/*Table structure for table `solicitudes` */

DROP TABLE IF EXISTS `solicitudes`;

CREATE TABLE `solicitudes` (
  `idSolicitudes` int(11) NOT NULL AUTO_INCREMENT,
  `Usuarios_idUsuarios` int(11) NOT NULL,
  `Empresas_idEmpresas` int(11) NOT NULL,
  `Monto` int(11) NOT NULL,
  `dias` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`idSolicitudes`),
  KEY `fk_Solicitudes_Usuarios1_idx` (`Usuarios_idUsuarios`),
  KEY `fk_Solicitudes_Empresas1_idx` (`Empresas_idEmpresas`),
  CONSTRAINT `fk_Solicitudes_Empresas1` FOREIGN KEY (`Empresas_idEmpresas`) REFERENCES `empresas` (`idEmpresas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Solicitudes_Usuarios1` FOREIGN KEY (`Usuarios_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4;



/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `tipo_doc` varchar(35) NOT NULL,
  `numero_documento` varchar(45) NOT NULL,
  `email` varchar(300) NOT NULL,
  `ciuda` varchar(45) DEFAULT NULL,
  `direccion` varchar(150) NOT NULL,
  `nacionalidad` varchar(45) DEFAULT NULL,
  `estado_civil` varchar(45) DEFAULT NULL,
  `personas_cargo` varchar(45) DEFAULT NULL,
  `nivel_academico` varchar(45) DEFAULT NULL,
  `estrato` int(11) DEFAULT NULL,
  `fecha_exp_documento` date DEFAULT NULL,
  `numero_contacto_secundario` varchar(45) DEFAULT NULL,
  `tipo_vivienda` varchar(45) DEFAULT NULL,
  `tiempo_vivineda` varchar(45) DEFAULT NULL,
  `genero` varchar(45) NOT NULL,
  `numero_hijos` int(11) DEFAULT NULL,
  `situacion_labora` int(11) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `rol_idRol` int(11) NOT NULL,
  `token` varchar(60) NOT NULL,
  `activacion` int(2) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idUsuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
