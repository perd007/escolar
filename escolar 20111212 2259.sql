-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.27-community-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema escolar
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ escolar;
USE escolar;

--
-- Table structure for table `escolar`.`alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE `alumno` (
  `cedula` int(11) default NULL,
  `nombre` varchar(50) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `edad` int(11) NOT NULL,
  `fecha_nac` date NOT NULL,
  `lugarNac` varchar(50) default NULL,
  `nacionalidad` varchar(20) default NULL,
  `procedencia` varchar(50) default NULL,
  `repitiente` varchar(2) default NULL,
  `calificacion` varchar(2) default NULL,
  `camisa` varchar(5) default NULL,
  `pantalon` varchar(5) default NULL,
  `zapato` varchar(5) default NULL,
  `id` int(11) NOT NULL auto_increment,
  `nombreR` varchar(50) NOT NULL,
  `cedulaR` int(11) NOT NULL,
  `direccionR` varchar(200) NOT NULL,
  `existeR` varchar(2) default NULL,
  `edadR` varchar(2) default NULL,
  `nacionalidadR` varchar(20) default NULL,
  `ingresoR` varchar(10) default NULL,
  `nombreR2` varchar(50) default NULL,
  `cedulaR2` int(11) default NULL,
  `existeR2` varchar(2) default NULL,
  `edadR2` varchar(2) default NULL,
  `nacionalidadR2` varchar(20) default NULL,
  `nivelR2` varchar(20) default NULL,
  `ocupacionR2` varchar(50) default NULL,
  `direccionR2` varchar(200) default NULL,
  `ingresoR2` varchar(10) default NULL,
  `nombreR3` varchar(50) default NULL,
  `cedulaR3` int(11) default NULL,
  `edadR3` varchar(2) default NULL,
  `nacionalidadR3` varchar(20) default NULL,
  `nivelR3` varchar(50) default NULL,
  `ocupacionR3` varchar(50) default NULL,
  `direccionR3` varchar(200) default NULL,
  `ingresoR3` varchar(20) default NULL,
  `vive` varchar(20) default NULL,
  `parientes` varchar(2) default NULL,
  `hermanos` varchar(2) default NULL,
  `zonav` varchar(20) default NULL,
  `enfer1` varchar(50) default NULL,
  `enfer2` varchar(50) default NULL,
  `impedimento` varchar(50) default NULL,
  `vacunas` varchar(100) default NULL,
  PRIMARY KEY  (`id`),
  KEY `cedula` (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `escolar`.`alumno`
--

/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` (`cedula`,`nombre`,`sexo`,`edad`,`fecha_nac`,`lugarNac`,`nacionalidad`,`procedencia`,`repitiente`,`calificacion`,`camisa`,`pantalon`,`zapato`,`id`,`nombreR`,`cedulaR`,`direccionR`,`existeR`,`edadR`,`nacionalidadR`,`ingresoR`,`nombreR2`,`cedulaR2`,`existeR2`,`edadR2`,`nacionalidadR2`,`nivelR2`,`ocupacionR2`,`direccionR2`,`ingresoR2`,`nombreR3`,`cedulaR3`,`edadR3`,`nacionalidadR3`,`nivelR3`,`ocupacionR3`,`direccionR3`,`ingresoR3`,`vive`,`parientes`,`hermanos`,`zonav`,`enfer1`,`enfer2`,`impedimento`,`vacunas`) VALUES 
 (147896541,'joseito','Masculino',12,'2005-01-03',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'',0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (18456321,'luis miguel','Masculino',9,'2001-11-18',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'',0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (11111111,'luis miguel','Masculino',10,'2005-11-08',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,4,'',0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `alumno` (`cedula`,`nombre`,`sexo`,`edad`,`fecha_nac`,`lugarNac`,`nacionalidad`,`procedencia`,`repitiente`,`calificacion`,`camisa`,`pantalon`,`zapato`,`id`,`nombreR`,`cedulaR`,`direccionR`,`existeR`,`edadR`,`nacionalidadR`,`ingresoR`,`nombreR2`,`cedulaR2`,`existeR2`,`edadR2`,`nacionalidadR2`,`nivelR2`,`ocupacionR2`,`direccionR2`,`ingresoR2`,`nombreR3`,`cedulaR3`,`edadR3`,`nacionalidadR3`,`nivelR3`,`ocupacionR3`,`direccionR3`,`ingresoR3`,`vive`,`parientes`,`hermanos`,`zonav`,`enfer1`,`enfer2`,`impedimento`,`vacunas`) VALUES 
 (1234567,'josefina','Femenino',12,'2012-11-21',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,5,'',0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (657937,'juan carlos','Masculino',12,'2009-11-09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6,'',0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (15412369,'juan','Masculino',14,'1990-11-13',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7,'',0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `alumno` (`cedula`,`nombre`,`sexo`,`edad`,`fecha_nac`,`lugarNac`,`nacionalidad`,`procedencia`,`repitiente`,`calificacion`,`camisa`,`pantalon`,`zapato`,`id`,`nombreR`,`cedulaR`,`direccionR`,`existeR`,`edadR`,`nacionalidadR`,`ingresoR`,`nombreR2`,`cedulaR2`,`existeR2`,`edadR2`,`nacionalidadR2`,`nivelR2`,`ocupacionR2`,`direccionR2`,`ingresoR2`,`nombreR3`,`cedulaR3`,`edadR3`,`nacionalidadR3`,`nivelR3`,`ocupacionR3`,`direccionR3`,`ingresoR3`,`vive`,`parientes`,`hermanos`,`zonav`,`enfer1`,`enfer2`,`impedimento`,`vacunas`) VALUES 
 (18777888,'CARMEN','Femenino',14,'2009-11-09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,'',0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
 (21543819,'marilin','Femeninio',15,'1996-11-01',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,11,'',0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;


--
-- Table structure for table `escolar`.`docentes`
--

DROP TABLE IF EXISTS `docentes`;
CREATE TABLE `docentes` (
  `cedula` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` int(11) default NULL,
  `direccion` varchar(50) default NULL,
  `nivel` varchar(50) default NULL,
  `estudioA` varchar(50) default NULL,
  `seccion` varchar(1) default NULL,
  `grado` varchar(10) default NULL,
  `periodo` varchar(20) default NULL,
  `servicio` int(11) default NULL,
  `situacio` varchar(20) default NULL,
  PRIMARY KEY  (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `escolar`.`docentes`
--

/*!40000 ALTER TABLE `docentes` DISABLE KEYS */;
/*!40000 ALTER TABLE `docentes` ENABLE KEYS */;


--
-- Table structure for table `escolar`.`seguridad`
--

DROP TABLE IF EXISTS `seguridad`;
CREATE TABLE `seguridad` (
  `id_seg` int(11) NOT NULL auto_increment,
  `usuario` varchar(10) NOT NULL,
  `clave` varchar(10) NOT NULL,
  `modificar` int(11) default NULL,
  `consultar` int(11) default NULL,
  `registrar` int(11) default NULL,
  `eliminar` int(11) default NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `cedula` int(11) NOT NULL,
  `administrar` int(11) default NULL,
  PRIMARY KEY  (`id_seg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `escolar`.`seguridad`
--

/*!40000 ALTER TABLE `seguridad` DISABLE KEYS */;
INSERT INTO `seguridad` (`id_seg`,`usuario`,`clave`,`modificar`,`consultar`,`registrar`,`eliminar`,`nombre`,`apellido`,`cedula`,`administrar`) VALUES 
 (1,'PERD007','17792270',1,1,1,1,'jose carlos','perdomo herrera',17792270,1),
 (2,'elvis','1234',NULL,1,1,NULL,'elvis','rodriguez',1456987,NULL),
 (3,'admin','1234',NULL,1,NULL,NULL,'elvis','rodriguez',14569874,NULL);
/*!40000 ALTER TABLE `seguridad` ENABLE KEYS */;


--
-- Table structure for table `escolar`.`suplentes`
--

DROP TABLE IF EXISTS `suplentes`;
CREATE TABLE `suplentes` (
  `cedula` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` int(11) default NULL,
  `direccion` varchar(50) default NULL,
  PRIMARY KEY  (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `escolar`.`suplentes`
--

/*!40000 ALTER TABLE `suplentes` DISABLE KEYS */;
/*!40000 ALTER TABLE `suplentes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
