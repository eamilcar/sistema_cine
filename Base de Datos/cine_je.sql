-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2020 a las 05:27:17
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cine_je`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletos`
--

CREATE TABLE `boletos` (
  `id_boletos` int(11) NOT NULL,
  `pelicula` varchar(200) DEFAULT NULL,
  `boletos` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `localidad` varchar(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `sala` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `boletos`
--

INSERT INTO `boletos` (`id_boletos`, `pelicula`, `boletos`, `precio`, `localidad`, `fecha`, `hora`, `sala`) VALUES
(3, 'Interestelar', 1, NULL, NULL, '2020-06-18', '13:00:00', 'Alcon'),
(4, 'Interestelar', 5, NULL, NULL, '2020-06-17', '13:00:00', 'Alcon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartelera`
--

CREATE TABLE `cartelera` (
  `idcartelera` int(11) NOT NULL,
  `idpelicula` int(11) NOT NULL,
  `idestado` int(11) NOT NULL,
  `idsala` int(11) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cartelera`
--

INSERT INTO `cartelera` (`idcartelera`, `idpelicula`, `idestado`, `idsala`, `hora_inicio`, `hora_fin`, `fecha`) VALUES
(1, 0, 0, 0, '13:00:00', '15:00:00', '2020-06-24'),
(2, 1, 1, 1, '14:00:00', '15:00:00', '2020-06-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE `clasificacion` (
  `idclasificacion` int(11) NOT NULL,
  `tipo_clasificacion` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`idclasificacion`, `tipo_clasificacion`) VALUES
(0, 'a'),
(1, 'b'),
(3, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `pelicula_id` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `fecha` date NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `pelicula_id`, `comentario`, `fecha`, `nombre`, `correo`) VALUES
(67, 1, 'Muy buena pelicula!!', '2019-08-01', 'Jose Eduardo', 'je99alvarez@gmail.com'),
(68, 8, 'muy buena pelicula', '2019-08-04', 'juan', 'juan@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idempleado` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` int(8) NOT NULL,
  `cargo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idempleado`, `nombre`, `correo`, `telefono`, `cargo`) VALUES
(1, 'Juan', 'juan@gmail.com', 77370512, 'Gerente'),
(2, 'Antonio', 'antonio@gmail.com', 77376910, 'Acomodador'),
(4, 'Luis', 'luis@gmail.com', 78561200, 'dulceria'),
(5, 'angel', 'angel@gmail.com', 77982100, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato`
--

CREATE TABLE `formato` (
  `idformato` int(11) NOT NULL,
  `tipo_formato` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(25) NOT NULL,
  `tipo_usuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `nombre`, `correo`, `contrasena`, `tipo_usuario`) VALUES
(1, 'eduardojose', 'root@root.com', '123456', 'admin'),
(2, 'karla', 'karla@gmail.com', '123456', 'admin'),
(24, 'luis', 'luissoto@gmail.com', '123456', 'user'),
(25, 'luis', 'luis@gmail.com', '123456', 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL,
  `trailer` text NOT NULL,
  `link_pelicula` text NOT NULL,
  `imagen` text NOT NULL,
  `imagen_bg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `nombre`, `genero`, `descripcion`, `fecha`, `trailer`, `link_pelicula`, `imagen`, `imagen_bg`) VALUES
(1, 'Interestelar', 'Drama | Misterio', 'Gracias a un descubrimiento, un grupo de cientÃ­ficos y exploradores, encabezados por Cooper, se embarcan en un viaje espacial para encontrar un lugar con las condiciones necesarias para reemplazar a la Tierra y comenzar una nueva vida allÃ­.', '2019-08-01', 'zSWdZVtXT7E', 'NqniWGlg5kU', 'pota interes.jpg', 'bg.jpg'),
(4, 'Lucy', 'AcciÃ³n', 'Lucy, una joven que ejerce de mula para unos narcotraficantes, adquiere poderes sobrenaturales tras romperse una de las bolsas de droga que transporta y absorber los estupefacientes.', '2019-08-02', 'G8BCA5hOTzQ', 'XQfmiSMJkrQ', 'lucy-170037491-large.jpg', '402769_16333_1.jpg'),
(6, 'Spider-Man: de regreso a casa', 'FantasÃ­a | ciencia ficciÃ³n', 'Peter Parker asume su nueva identidad como Spider-Man y regresa a vivir con su tÃ­a despuÃ©s de su aventura con los Vengadores. Al volver, mientras sigue bajo la tutela de Tony Stark, descubre que ha surgido un nuevo y despiadado enemigo que pretende destruir todo lo que ama: el Buitre.', '2019-08-02', '39udgGPyYMg', 'U0D3AOldjMU', 'image.jpg', 'sphe-2209664-Full-Image_GalleryBackground-en-US-1505400373815._SX1080_.jpg'),
(7, 'John Wick 3: Parabellum', 'Suspenso | Misterio', 'John Wick regresa de nuevo pero con una recompensa sobre su cabeza que persigue unos mercenarios. Tras asesinar a uno de los miembros de su gremio, Wick es expulsado y se convierte en el foco de atenciÃ³n de todos los sicarios de la organizaciÃ³n.', '2019-08-02', 'rZfOyBifJ1U', 'rZfOyBifJ1U', 'descarga.jpg', '1558435567_900309_1558435601_noticia_normal.jpg'),
(8, 'Hellboy', 'Supernatural | FantasÃ­a', 'Nimue, conocida como \"La Reina de la Sangre\", es antigua hechicera que vuelve a la vida decidida a vengarse de una traiciÃ³n del pasado. Dividido entre el mundo sobrenatural y humano, el legendario medio demonio Hellboy recibe la misiÃ³n de contener esa amenaza y salvar al mundo.', '2019-08-02', 'z5qpu_HdpTA', 'z5qpu_HdpTA', '220px-Hellboy_(2019)_theatrical_poster.png', '1557920337403.jpg'),
(9, 'Avengers: Endgame', ' FantasÃ­a | ciencia ficciÃ³n', 'Los Vengadores restantes deben encontrar una manera de recuperar a sus aliados para un enfrentamiento Ã©pico con Thanos, el malvado que diezmÃ³ el planeta y el universo.', '2019-08-02', 'UQ3bqYKnyhM', 'UQ3bqYKnyhM', 'AvengersEndgame.jpg', 'hipertextual-nuevo-trailer-avengers-endgame-agradece-fans-universo-marvel-2019351167.jpg'),
(10, 'Capitana Marvel', 'FantasÃ­a | Ciencia ficciÃ³n', 'Una guerrera extraterrestre de la civilizaciÃ³n Kree se encuentra atrapada en medio de una batalla. Con la ayuda de Nick Fury trata de descubrir los secretos de su pasado mientras aprovecha sus poderes para terminar la guerra.', '2019-08-02', 'MJIz2gf3Wa8', 'MJIz2gf3Wa8', 'Captain_Marvel_Poster_New.jpg', '440644_731566.jpg'),
(13, 'Iron Man', 'Ciencia ficciÃ³n | AcciÃ³n ', 'El descarado y brillante Tony Stark, tras ver destruido todo su universo personal, debe encontrar y enfrentarse a un enemigo cuyo poder no conoce lÃ­mites. Este viaje pondrÃ¡ a prueba su entereza una y otra vez, y le obligarÃ¡ a confiar en su ingenio.', '2019-08-02', 'E3Tr_ihTx6k', 'E3Tr_ihTx6k', 'IR3.jpg', 'IR3Portada.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `idreserva` int(11) NOT NULL,
  `idcartelera` varchar(100) DEFAULT NULL,
  `idpelicula` varchar(100) DEFAULT NULL,
  `idbutaca` int(11) DEFAULT NULL,
  `idsala` varchar(100) DEFAULT NULL,
  `nu_butaca` int(11) DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL,
  `codigo_reserva` varchar(8) DEFAULT NULL,
  `fecha_reserva` date DEFAULT NULL,
  `hora_reserva` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`idreserva`, `idcartelera`, `idpelicula`, `idbutaca`, `idsala`, `nu_butaca`, `precio`, `codigo_reserva`, `fecha_reserva`, `hora_reserva`) VALUES
(1, '1', 'lucy', 2, 'alcon', 2, '3', '212', '2020-06-16', '12:00:00'),
(2, '1', 'lucy', 2, 'alcon', 2, '3', '212', '2020-06-16', '12:00:00'),
(3, NULL, 'spi', 2, 'a', NULL, '3', NULL, '2020-06-16', '37:00:00'),
(4, NULL, 'spi', 2, 'a', NULL, '3', NULL, '2020-06-16', '37:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `idsala` int(11) NOT NULL,
  `nombre_sala` varchar(25) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `columna` varchar(11) NOT NULL,
  `fila` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`idsala`, `nombre_sala`, `estado`, `columna`, `fila`) VALUES
(1, 'Alcon', 'Activa', 'N', 12),
(5, 'Avatar', 'disponible', 'A', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boletos`
--
ALTER TABLE `boletos`
  ADD PRIMARY KEY (`id_boletos`);

--
-- Indices de la tabla `cartelera`
--
ALTER TABLE `cartelera`
  ADD PRIMARY KEY (`idcartelera`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idempleado`);

--
-- Indices de la tabla `formato`
--
ALTER TABLE `formato`
  ADD PRIMARY KEY (`idformato`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idreserva`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`idsala`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boletos`
--
ALTER TABLE `boletos`
  MODIFY `id_boletos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cartelera`
--
ALTER TABLE `cartelera`
  MODIFY `idcartelera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idempleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `formato`
--
ALTER TABLE `formato`
  MODIFY `idformato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idreserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sala`
--
ALTER TABLE `sala`
  MODIFY `idsala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
