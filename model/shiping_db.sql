-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-03-2018 a las 00:51:43
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shiping_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_order`
--

DROP TABLE IF EXISTS `table_order`;
CREATE TABLE IF NOT EXISTS `table_order` (
  `sec_order` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Order_secuence',
  `id_order` int(30) NOT NULL COMMENT 'Id of the order',
  `content` varchar(50) NOT NULL COMMENT 'Content of the order like technology, ofimatic... etc.',
  `tracking` varchar(50) NOT NULL COMMENT 'id of the tracking',
  `days_expected` int(100) NOT NULL COMMENT 'status of the order',
  `status` int(30) NOT NULL COMMENT 'status of the order',
  `id_vendor` int(20) NOT NULL COMMENT 'id to know the vendor of the order',
  `type_id` int(5) NOT NULL COMMENT 'Type id of the receiver',
  `id_receiver` varchar(20) NOT NULL COMMENT 'number id of the receiver',
  `name_receiver` varchar(60) NOT NULL COMMENT 'Name of the receiver',
  `address_receiver` varchar(50) NOT NULL COMMENT 'address to seleivery ',
  `city_receiver` varchar(20) NOT NULL COMMENT 'City to delivery the order',
  `telephone_receiver` varchar(20) NOT NULL COMMENT 'receiver data',
  `email_receiver` varchar(50) NOT NULL COMMENT 'receiver data',
  `departure_date` date NOT NULL COMMENT 'departure_date',
  `delivery_date` date NOT NULL COMMENT 'delivery_date',
  `creation_date` date NOT NULL COMMENT 'Creation of the register',
  PRIMARY KEY (`sec_order`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_vendor`
--

DROP TABLE IF EXISTS `table_vendor`;
CREATE TABLE IF NOT EXISTS `table_vendor` (
  `sec_vendor` int(11) NOT NULL AUTO_INCREMENT,
  `id_vendor` int(20) NOT NULL,
  `name_vendor` varchar(50) NOT NULL,
  `city_vendor` varchar(50) NOT NULL,
  `address_vendor` varchar(50) NOT NULL,
  PRIMARY KEY (`sec_vendor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
