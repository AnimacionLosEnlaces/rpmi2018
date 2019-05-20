-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2019 a las 10:59:40
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `losenlaces_pr7`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesorios`
--

CREATE TABLE `accesorios` (
  `id_accesorio` int(13) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `descr` varchar(250) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'una breve descripción del accesorio'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `accesorios`
--

INSERT INTO `accesorios` (`id_accesorio`, `nombre`, `foto`, `descr`) VALUES
(1, 'Tarjeta de memoria SD ', '', ''),
(2, 'Batería de cámara DSLR Canon', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cats_materiales`
--

CREATE TABLE `cats_materiales` (
  `id_cat` int(13) NOT NULL,
  `nombre` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descr` varchar(250) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Una breve descripción de la categoría'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cats_materiales`
--

INSERT INTO `cats_materiales` (`id_cat`, `nombre`, `descr`) VALUES
(1, 'Cámaras DSLR', 'Cámaras de fotos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cats_usuarios`
--

CREATE TABLE `cats_usuarios` (
  `id_cat` int(13) NOT NULL,
  `nombre` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cats_usuarios`
--

INSERT INTO `cats_usuarios` (`id_cat`, `nombre`) VALUES
(1, 'Alumno'),
(2, 'Profesor'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclos`
--

CREATE TABLE `ciclos` (
  `id_ciclo` int(13) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `abrev` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Para las partes en las que haya que escribir el nombre del ciclo en un cuadro pequeño',
  `code` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Códigos oficiales de los ciclos'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ciclos`
--

INSERT INTO `ciclos` (`id_ciclo`, `nombre`, `abrev`, `code`) VALUES
(1, 'Primero de Iluminación', '1º Ilu', 'ILU1'),
(2, 'Segundo de Iluminación', '2º Ilu', 'ILU2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(13) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `logo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `web` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre`, `logo`, `web`) VALUES
(1, 'Canon', '', 'http://wwww.canon.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id_material` int(13) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descr` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_cat` int(13) NOT NULL COMMENT 'Un material solo puede pertencer a una de las categorías de la tabla correspondiente',
  `id_marca` int(13) NOT NULL COMMENT 'Crearemos una tabla exclusiva de marcas',
  `foto` text COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'La foto codificada en base64',
  `comentarios` text COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Campo que nos permite añadir comentarios a un material en concreto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id_material`, `nombre`, `descr`, `id_cat`, `id_marca`, `foto`, `comentarios`) VALUES
(1, 'Cámara Canon 3300', 'Cámara DSLR', 1, 1, '', 'No permite tarjetas de memoria de más de 2 GB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales_accesorios`
--

CREATE TABLE `materiales_accesorios` (
  `id` int(13) NOT NULL,
  `id_material` int(13) NOT NULL,
  `id_accesorio` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Permite vincular un material con múltiples accesorios';

--
-- Volcado de datos para la tabla `materiales_accesorios`
--

INSERT INTO `materiales_accesorios` (`id`, `id_material`, `id_accesorio`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id_prestamo` int(13) NOT NULL,
  `id_profesor` int(13) NOT NULL COMMENT 'Profesor que presta. Vinculado a tabla de usuarios',
  `id_alumno` int(13) NOT NULL COMMENT 'Alumno que se hace cargo del préstamo',
  `fecha` int(20) NOT NULL COMMENT 'Tiempo en UNIXTIME en el que se crea el préstamo',
  `id_ciclo` int(13) NOT NULL COMMENT 'Ciclo al que pertenece el alumno',
  `comentarios` text COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Si se quiere poner algo en los comentarios'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos_productos`
--

CREATE TABLE `prestamos_productos` (
  `id` int(13) NOT NULL,
  `id_prestamo` int(13) NOT NULL,
  `id_producto` int(13) NOT NULL,
  `fecha` int(20) NOT NULL,
  `comentarios` text COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Comentarios al préstamos de este producto en concreto',
  `devuelto` int(13) DEFAULT NULL COMMENT 'Tiempo en Unixtime de la devolución. Si está vacío, no se ha devuelto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Permite asociar múltiples productos individuales a un présta';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(13) NOT NULL,
  `code` int(12) NOT NULL COMMENT 'Código de barras  del producto',
  `id_material` int(13) NOT NULL COMMENT 'El producto individual está asociado a un material en concreto',
  `inventario` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Nº de inventario del Instituto',
  `disponible` tinyint(1) NOT NULL COMMENT 'float que permite marcar un producto como no disponible',
  `comentarios` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Productos individuales, asociados a un material';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(13) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Apellidos separado de nombre para poder listar por apellido',
  `code` int(12) NOT NULL COMMENT 'Código de barras único para cada usuario',
  `foto` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'El nombre del archivo con la foto',
  `phone` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'aunque es un nº, mejor varchar para permitir espacios y prefijos',
  `id_ciclo` int(13) NOT NULL COMMENT 'Como un usuario no puede pertenecer a varios ciclos a la vez lo ponemos en esta tabla',
  `id_cat` int(13) NOT NULL COMMENT 'Categorías de usuarios'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellidos`, `code`, `foto`, `phone`, `id_ciclo`, `id_cat`) VALUES
(1, 'Francisco', 'González Pérez', 1234567890, 'Martin_Prince.png', '555-123 456', 1, 1),
(2, 'Álvaro', 'Holguera Gozalo', 987654321, 'profesor_bergstrom.jpg', '555 123 12 ', 2, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesorios`
--
ALTER TABLE `accesorios`
  ADD PRIMARY KEY (`id_accesorio`);

--
-- Indices de la tabla `cats_materiales`
--
ALTER TABLE `cats_materiales`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `cats_usuarios`
--
ALTER TABLE `cats_usuarios`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `ciclos`
--
ALTER TABLE `ciclos`
  ADD PRIMARY KEY (`id_ciclo`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id_material`),
  ADD KEY `id_cat` (`id_cat`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indices de la tabla `materiales_accesorios`
--
ALTER TABLE `materiales_accesorios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_material` (`id_material`),
  ADD KEY `id_accesorio` (`id_accesorio`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id_prestamo`),
  ADD KEY `id_profesor` (`id_profesor`),
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_ciclo` (`id_ciclo`);

--
-- Indices de la tabla `prestamos_productos`
--
ALTER TABLE `prestamos_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_prestamo` (`id_prestamo`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_material` (`id_material`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_ciclo` (`id_ciclo`),
  ADD KEY `id_cat` (`id_cat`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesorios`
--
ALTER TABLE `accesorios`
  MODIFY `id_accesorio` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `cats_materiales`
--
ALTER TABLE `cats_materiales`
  MODIFY `id_cat` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cats_usuarios`
--
ALTER TABLE `cats_usuarios`
  MODIFY `id_cat` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ciclos`
--
ALTER TABLE `ciclos`
  MODIFY `id_ciclo` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id_material` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `materiales_accesorios`
--
ALTER TABLE `materiales_accesorios`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id_prestamo` int(13) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `prestamos_productos`
--
ALTER TABLE `prestamos_productos`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(13) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cats_materiales`
--
ALTER TABLE `cats_materiales`
  ADD CONSTRAINT `cats_materiales_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `materiales` (`id_material`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD CONSTRAINT `materiales_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id_marca`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `materiales_accesorios`
--
ALTER TABLE `materiales_accesorios`
  ADD CONSTRAINT `materiales_accesorios_ibfk_1` FOREIGN KEY (`id_material`) REFERENCES `materiales` (`id_material`) ON UPDATE CASCADE,
  ADD CONSTRAINT `materiales_accesorios_ibfk_2` FOREIGN KEY (`id_accesorio`) REFERENCES `accesorios` (`id_accesorio`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`id_profesor`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamos_productos`
--
ALTER TABLE `prestamos_productos`
  ADD CONSTRAINT `prestamos_productos_ibfk_1` FOREIGN KEY (`id_prestamo`) REFERENCES `prestamos` (`id_prestamo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `prestamos_productos_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_material`) REFERENCES `materiales` (`id_material`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `cats_usuarios` (`id_cat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_ciclo`) REFERENCES `ciclos` (`id_ciclo`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
