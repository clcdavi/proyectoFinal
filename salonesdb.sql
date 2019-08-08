-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2019 a las 21:56:37
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `salonesdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_salones` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos_usuarios`
--

CREATE TABLE `favoritos_usuarios` (
  `fav_sal_id_salones` int(11) NOT NULL,
  `fav_sal_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salones`
--

CREATE TABLE `salones` (
  `sal_id` int(11) NOT NULL,
  `sal_nombre` varchar(30) NOT NULL,
  `sal_descripcion` varchar(1000) NOT NULL,
  `sal_direccion` varchar(30) NOT NULL,
  `sal_telefono` int(30) NOT NULL,
  `sal_cat` int(30) NOT NULL,
  `sal_imagen` varchar(50) NOT NULL,
  `sal_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `salones`
--

INSERT INTO `salones` (`sal_id`, `sal_nombre`, `sal_descripcion`, `sal_direccion`, `sal_telefono`, `sal_cat`, `sal_imagen`, `sal_id_usuario`) VALUES
(1, 'Hoy la Rompo', 'Una barberia', 'Suipacha 618', 51210633, 2, 'hoyLaRompo.jpg', 3),
(2, 'Staff D&D', 'Una barberia', 'Juan Sanchez 2086', 47461987, 2, 'staffD&D.jpg', 3),
(3, 'Urbana', 'Una barberia', 'Av. Nicolas Avellaneda 4402', 1135815251, 2, 'urbana.jpg', 3),
(4, 'Calaveras', 'Una barberia', 'Av. Nicolas Avellaneda 2102', 60275593, 2, 'calaveras.jpg', 2),
(5, 'Real Boyz', 'Una barberia', 'Cnel. Brandsen 1119', 69693722, 2, 'realBoys.jpg', 2),
(6, 'Tendencia', 'Una barberia', 'Gral. Lavalle 1074', 54092315, 2, 'tendencia.jpg', 2),
(7, 'Master Flow Barber Shop', 'Una barberia', 'Constitucion 1409', 1550025353, 2, 'masterFlow.jpg', 2),
(8, 'Style Barber Shop', 'Una barberia', 'Av. Pres. Peron 815', 22663370, 2, 'styleBarberShop.jpg', 0),
(9, 'Franca', 'Una barberia', 'Av. Pres. Peron 770', 47467063, 2, 'franca.jpg', 0),
(10, 'La Barberia', 'Una barberia', '3 de febrero 615', 25024145, 2, 'laBarberia.png', 0),
(11, 'Chau Planchita', 'Una peluqueria', 'General Pinto 2960', 62016965, 1, 'chauPlanchita.jpg', 0),
(12, 'Sueña', 'Una peluqueria', 'Cnel. Brandsen 1119', 58316303, 1, 'sueña.jpg', 0),
(13, 'Bony', 'Una peluqueria', 'Av. Nicolas Avellaneda 3744', 47146059, 1, 'bony.jpg', 0),
(14, 'Urbanas', 'Una peluqueria', 'Av. Nicolas Avellaneda 3080', 47445834, 1, 'urbanas.jpg', 0),
(15, 'unisex Sofi', 'Una peluqueria', 'Av. Nicolas Avellaneda 3288', 1536661321, 1, 'unisexSofi.jpg', 0),
(16, 'Magic Estilismo', 'Una peluqueria', 'Av. Nicolas Avellaneda 3052', 47254689, 1, 'magicEstilismo.jpg', 0),
(17, 'Greys', 'Una peluqueria', 'Av. Nicolas Avellaneda 2224', 23708678, 1, 'greys.jpg', 0),
(18, 'Brisa de Mar', 'Una peluqueria', 'Av. Sobremonte 2070', 1138092299, 1, 'brisaDeMar.jpg', 0),
(19, 'Karina Darc', 'Una peluqueria', 'Constitucion 1175', 47441680, 1, 'karinaDarc.jpg', 0),
(20, 'Lore Unisex', 'Una peluqueria', 'Juan B. Justo 2824', 21886172, 1, 'loreUnisex.jpg', 0),
(21, 'Adara', 'Manicuria', '25 de mayo 3068', 1139156007, 3, 'adara.jpg', 1),
(22, 'Luli Gugli Nails Art', 'Manicuria', 'Ayacucho 1029', 1564402503, 3, 'luliGugli.jpg', 0),
(23, 'Frida Atenea uñas', 'Manicuria', 'Quirno Costa 1326', 1541776631, 3, 'fridaAtenea.jpg', 0),
(24, 'ACP', 'Manicuria', 'Ituzaingo 1193', 45491465, 3, 'acp.jpg', 0),
(25, 'aaaa', 'bb', '', 0, 2, '16b63640fd436a0ea3beca55fb179cf3.jpg', 1),
(26, 'nnnnnn', 'mmmmm', '', 0, 2, '4c5c59b9242018f2c41607d6fdcddc7d.jpg', 1),
(27, 'nnnn', 'bbbb', '', 0, 2, '8e2d903cba80fe5eb757a09d05db40a8.jpg', 1),
(28, 'abc', 'abc est', '', 0, 4, '6e68f249500a645d655ea85d49c6f9fa.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sal_categoria`
--

CREATE TABLE `sal_categoria` (
  `sal_cat_id` int(11) NOT NULL,
  `sal_cat_descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sal_categoria`
--

INSERT INTO `sal_categoria` (`sal_cat_id`, `sal_cat_descripcion`) VALUES
(1, 'peluqueria'),
(2, 'barberia'),
(3, 'uñas'),
(4, 'estetica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sal_sexo`
--

CREATE TABLE `sal_sexo` (
  `id_sexo` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sal_usuarios`
--

CREATE TABLE `sal_usuarios` (
  `user_id` int(11) NOT NULL,
  `user_nombre` varchar(20) NOT NULL,
  `user_nombre_real` varchar(30) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `id_sexo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sal_usuarios`
--

INSERT INTO `sal_usuarios` (`user_id`, `user_nombre`, `user_nombre_real`, `user_pass`, `user_email`, `id_sexo`) VALUES
(1, 'david', 'David Correa', 'david', 'clcdavi@gmail.com', 1),
(2, 'pablo', 'Pablo Tilli', 'pablo', 'tillipablo@gmail.com', 1),
(3, 'root', 'Administrador', 'root', 'root@root.com', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_salones`,`id_usuarios`),
  ADD KEY `id_usuarios` (`id_usuarios`);

--
-- Indices de la tabla `favoritos_usuarios`
--
ALTER TABLE `favoritos_usuarios`
  ADD PRIMARY KEY (`fav_sal_id_salones`,`fav_sal_id_usuario`),
  ADD KEY `fav_sal_id_usuario` (`fav_sal_id_usuario`);

--
-- Indices de la tabla `salones`
--
ALTER TABLE `salones`
  ADD PRIMARY KEY (`sal_id`),
  ADD KEY `sal_cat` (`sal_cat`),
  ADD KEY `sal_id_usuario` (`sal_id_usuario`);

--
-- Indices de la tabla `sal_categoria`
--
ALTER TABLE `sal_categoria`
  ADD PRIMARY KEY (`sal_cat_id`);

--
-- Indices de la tabla `sal_sexo`
--
ALTER TABLE `sal_sexo`
  ADD PRIMARY KEY (`id_sexo`);

--
-- Indices de la tabla `sal_usuarios`
--
ALTER TABLE `sal_usuarios`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `id_sexo` (`id_sexo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `salones`
--
ALTER TABLE `salones`
  MODIFY `sal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `sal_categoria`
--
ALTER TABLE `sal_categoria`
  MODIFY `sal_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sal_sexo`
--
ALTER TABLE `sal_sexo`
  MODIFY `id_sexo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sal_usuarios`
--
ALTER TABLE `sal_usuarios`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_salones`) REFERENCES `salones` (`sal_id_usuario`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_usuarios`) REFERENCES `sal_usuarios` (`user_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `favoritos_usuarios`
--
ALTER TABLE `favoritos_usuarios`
  ADD CONSTRAINT `favoritos_usuarios_ibfk_1` FOREIGN KEY (`fav_sal_id_salones`) REFERENCES `salones` (`sal_id`),
  ADD CONSTRAINT `favoritos_usuarios_ibfk_2` FOREIGN KEY (`fav_sal_id_usuario`) REFERENCES `sal_usuarios` (`user_id`);

--
-- Filtros para la tabla `salones`
--
ALTER TABLE `salones`
  ADD CONSTRAINT `salones_ibfk_1` FOREIGN KEY (`sal_cat`) REFERENCES `sal_categoria` (`sal_cat_id`);

--
-- Filtros para la tabla `sal_sexo`
--
ALTER TABLE `sal_sexo`
  ADD CONSTRAINT `sal_sexo_ibfk_1` FOREIGN KEY (`id_sexo`) REFERENCES `sal_usuarios` (`id_sexo`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
