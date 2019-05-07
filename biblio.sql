-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2019 a las 11:40:22
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `biblio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE IF NOT EXISTS `autores` (
  `id_autor` int(13) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(150) COLLATE utf8_bin NOT NULL,
  `bio` text COLLATE utf8_bin NOT NULL,
  `foto` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` int(13) NOT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id_autor`, `nombre`, `apellidos`, `bio`, `foto`, `time`) VALUES
(1, 'J. R. R', 'Tolkien', 'sfdsdf ds', 'tolkien,jpg', 1557214417),
(2, 'Isaac', 'Asimov', '', 'redsfd.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cats`
--

CREATE TABLE IF NOT EXISTS `cats` (
  `id_cat` int(13) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `icono` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cats`
--

INSERT INTO `cats` (`id_cat`, `nombre`, `icono`) VALUES
(1, 'fantasía', 'asdasd.svg'),
(2, 'aventuras', 'sadfds.svg'),
(3, 'viajes', 'sdfdsf.svg'),
(4, 'religión', 'asdfasdf.svg'),
(5, 'romance', 'aads .svg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE IF NOT EXISTS `libros` (
  `id_libro` int(13) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) COLLATE utf8_bin NOT NULL,
  `sinopsis` text COLLATE utf8_bin NOT NULL,
  `portada` varchar(150) COLLATE utf8_bin NOT NULL,
  `id_autor` int(13) NOT NULL,
  `tags` varchar(250) COLLATE utf8_bin NOT NULL,
  `anno` int(5) NOT NULL,
  `time` int(13) NOT NULL,
  PRIMARY KEY (`id_libro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `titulo`, `sinopsis`, `portada`, `id_autor`, `tags`, `anno`, `time`) VALUES
(1, 'LOTR', 'das ads asd ', 'lotr1.jpg', 1, '', 1973, 1557214417),
(2, 'La fundación', 'sdf sdf ds f', 'fundacion.jpg', 2, '', 1958, 1557214417),
(3, 'Harry Potter', 'sdfdsf ', 'sdf d', 4, 'sdf', 1980, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros_cats`
--

CREATE TABLE IF NOT EXISTS `libros_cats` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `id_libro` int(13) NOT NULL,
  `id_cat` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `libros_cats`
--

INSERT INTO `libros_cats` (`id`, `id_libro`, `id_cat`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
