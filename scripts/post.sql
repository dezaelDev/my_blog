-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2021 a las 20:33:17
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `autor_post` varchar(50) NOT NULL,
  `fecha_post` date NOT NULL,
  `categoria_post` varchar(50) NOT NULL,
  `titulo_post` varchar(150) NOT NULL,
  `imagen_post` text NOT NULL,
  `descripcion_post` text NOT NULL,
  `contenido_completo_post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id_post`, `autor_post`, `fecha_post`, `categoria_post`, `titulo_post`, `imagen_post`, `descripcion_post`, `contenido_completo_post`) VALUES
(3, 'Dario Olmedo', '2021-11-18', 'Programacion', 'Probando', 'diagrama.png', 'probando post', '<p>probando post</p>'),
(4, 'Dario Olmedo', '2021-11-18', 'Otra', 'Probando por segunda ves', 'mapa.png', 'esta es la segunda', '<div>\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dicta aperiam quos! Accusantium, quasi corrupti error, ut ullam nihil molestiae eaque architecto, nemo illo explicabo! Sit id enim hic voluptatum.</div>\r\n</div>');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
