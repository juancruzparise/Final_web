-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2020 a las 00:05:50
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `songlist`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` tinyint(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `email`, `password`, `nombre`) VALUES
(1, 'juan@mail.com', '$2y$10$Imk46r/Oj7KDTfC94P0fkeZUL8oJN1MF73NS2URJRVoySNeXx98EW', 'Juan Cruz Parise'),
(2, 'profe@gmail.com', 'parcialdos', 'Maxi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

CREATE TABLE `canciones` (
  `id` int(11) UNSIGNED NOT NULL,
  `tema` varchar(255) NOT NULL,
  `duracion` varchar(50) NOT NULL DEFAULT '',
  `portada` varchar(100) NOT NULL,
  `lanzamiento` int(4) NOT NULL DEFAULT 0,
  `generos_id` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `canciones`
--

INSERT INTO `canciones` (`id`, `tema`, `duracion`, `portada`, `lanzamiento`, `generos_id`) VALUES
(1, 'J. Balvin, Dua Lipa, Bad Bunny, Tainy - UN DIA (ONE DAY)', '3:52', 'oneday_portada.jpg', 2020, 4),
(2, 'Queen - Somebody To Love ', '5:30', 'somebodytolove_portada.jpg', 1976, 2),
(3, 'Harry Styles - Golden', '3:30', 'golden_portada.jpg', 2020, 1),
(4, 'Avicii - Addicted To You', '3:24', 'addictedtoyou_portada.jpg', 2013, 3),
(5, 'In The End- Linkin Park', '3:39', 'intheend_portada.jpg', 2002, 2),
(6, 'Becky G, Paulo Londra - Cuando Te Besé', '4:40', 'cuandotebese_portada.jpg', 2019, 4),
(8, 'Skrillex & Alvin Risk - Try It Out', '3:50', 'skrillex1_portada.jpg', 2014, 5),
(9, 'Justin Bieber - Holy ft. Chance The Rapper', '3:33', 'holy_portada.jpg', 2020, 1),
(10, 'Martin Garrix & Bebe Rexha - In The Name Of Love', '3:26', 'inthenameoflove_portada.jpg', 2016, 3),
(165, '¿Que es dios? - Las pastillas del abuelo', '5:50', 'que_es_dios_portada.jpg', 2008, 7),
(166, 'Avicii - The Nights', '3:10', 'the_nights_portada.jpg', 2014, 3),
(167, 'The Weeknd - Blinding Lights ', '3:23', 'blinding_lights_portada.jpg', 2019, 1),
(168, 'Future - Life Is Good  ft. Drake', '5:35', 'Future_Life_Is_Good_portada.png', 2020, 4),
(169, 'Bad Bunny x Jhay Cortez - Dákiti', '3:33', 'dakiti_portada.jpg', 2020, 4),
(170, 'Los Piojos - Ruleta', '4:16', 'ruleta_portada.jpg', 2000, 7),
(171, 'Maroon 5 - Don\'t Wanna Know', '5:40', 'dontwannaknow_portada.jpg', 2017, 1),
(172, 'Red Hot Chili Peppers - Snow', '5:35', 'rhcp_portada.jpg', 2006, 2),
(173, 'Tiësto - Red Lights', '3:32', 'RedLights_portada.jpg', 2014, 3),
(174, 'Vida de rico - Camilo', '3:07', 'vida_de_rico_portada.jpg', 2020, 6),
(175, 'MYA - 2:50', '2:50', '250_portada.jpg', 2020, 6),
(176, 'No ha parado de llover - Mana', '4:05', 'nohaparadodellover_portada.jpg', 1995, 6),
(177, 'Perdóname- Mau y Ricky', '3:28', 'perdoname_portada.jpg', 2019, 6),
(178, 'Jinn - NAZAAR', '3:35', 'jin_portada.jpg', 2018, 5),
(179, 'Fuego - Intoxicados', '4:41', 'fuego_portada.jpg', 2005, 7),
(180, 'Trátame suavemente - Soda Stereo', '3:20', 'tratame_suavemente_portada.jpg', 1984, 7),
(181, 'A rodar mi vida - Fito Paez', '4:41', 'arodarmivida_portada.jpg', 1992, 7),
(182, 'La calle es su lugar - Git', '4:26', 'lacalleessulugar_portada.jpg', 194, 7),
(183, 'Gustavo Cerati - Puente', '4:03', 'puente_portada.jpg', 1999, 7),
(191, 'Harry Styles - Watermelon Sugar', '3:09', 'sandia_portada.jpg', 2020, 1),
(192, 'Red Hot Chili Peppers - Dark Necessities', '5:03', 'DarkNecessities_portada.jpg', 2016, 2),
(193, 'Post Malone, Swae Lee - Sunflower', '2:41', 'Sunflower_portada.jpg', 2018, 1),
(194, '24kGoldn - Mood  ft. iann dior', '2:30', 'mood.jpg', 2020, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `generos_id` tinyint(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `portada_genero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`generos_id`, `nombre`, `portada_genero`) VALUES
(1, 'Pop', 'pop.jpg'),
(2, 'Rock', 'rock.jpg'),
(3, 'Electro house / Dance', 'techno.jpg'),
(4, 'Trap', 'trap.jpg'),
(5, 'Dubstep', 'dubstep.jpg'),
(6, 'Pop Latino', 'pop_latino.jpg'),
(7, 'Rock Argentino', 'rock_argentino.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `generos_id` (`generos_id`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`generos_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `canciones`
--
ALTER TABLE `canciones`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `generos_id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD CONSTRAINT `canciones_ibfk_1` FOREIGN KEY (`generos_id`) REFERENCES `generos` (`generos_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
