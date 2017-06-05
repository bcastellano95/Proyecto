-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2017 a las 19:52:43
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `guias_latinwow`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `primer_nombre` varchar(20) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`primer_nombre`, `nombre_usuario`, `email`, `password`, `tipoUsuario`) VALUES
('a', 'a', 'a@a.com', 'a', 0),
('d', 'd', 'd@hotmail.com', 'd', 2),
('w', 'w', 'w@w.com', 'w', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id_clase` int(11) NOT NULL,
  `nom_clase` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id_clase`, `nom_clase`) VALUES
(1, 'Guerrero'),
(2, 'Brujo'),
(3, 'Chaman'),
(4, 'Picaro'),
(5, 'Sacerdote'),
(6, 'Paladin'),
(7, 'Monje'),
(8, 'Mago'),
(9, 'Cazador'),
(10, 'Druida'),
(11, 'Cazador de demonios'),
(12, 'Caballero  de la muerte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especializacion_clases`
--

CREATE TABLE `especializacion_clases` (
  `id_espec` int(11) NOT NULL,
  `id_clases` int(11) NOT NULL,
  `nom_espec` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especializacion_clases`
--

INSERT INTO `especializacion_clases` (`id_espec`, `id_clases`, `nom_espec`) VALUES
(1, 1, 'Armas'),
(2, 1, 'Furia'),
(3, 1, 'Protección'),
(4, 2, 'Aflicción'),
(5, 2, 'Demonologia'),
(6, 2, 'Destrucción'),
(7, 3, 'Elemental'),
(8, 3, 'Mejora'),
(9, 3, 'Restauración'),
(10, 4, 'Asesinato'),
(11, 4, 'Forajido'),
(12, 4, 'Sutileza'),
(13, 5, 'Disciplina'),
(14, 5, 'Sagrado'),
(15, 5, 'Sombra'),
(16, 6, 'Sagrado'),
(17, 6, 'Protección'),
(18, 6, 'Retribución'),
(19, 7, 'Maestro cervecero'),
(20, 7, 'ejedor de niebla  '),
(21, 7, 'Caminante del viento'),
(22, 8, 'Fuego'),
(23, 8, 'Escarcha'),
(24, 8, 'Arcano'),
(25, 9, 'Puntería'),
(26, 9, 'Supervivencia'),
(27, 9, 'Maestria en bestias '),
(28, 10, 'Equilibrio'),
(29, 10, 'Feral'),
(30, 10, 'Guardián'),
(31, 10, 'Restauración'),
(32, 11, 'Caos'),
(33, 11, 'Venganza'),
(34, 12, 'Sangre'),
(35, 12, 'Escarcha'),
(36, 12, 'Profano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guia_bosses`
--

CREATE TABLE `guia_bosses` (
  `nom_raid` varchar(5000) NOT NULL,
  `nom_boss` varchar(100) NOT NULL,
  `intro` varchar(5000) NOT NULL,
  `habilidades` varchar(5000) NOT NULL,
  `estrategia_N_H` varchar(5000) NOT NULL,
  `estrategia_M` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `guia_bosses`
--

INSERT INTO `guia_bosses` (`nom_raid`, `nom_boss`, `intro`, `habilidades`, `estrategia_N_H`, `estrategia_M`) VALUES
('Nighthold', 'Skorpyron', 'Welcome to our World of Warcraft encounter guide for Skorpyron in The Nighthold. We will teach you everything you need to know to defeat the boss in every difficulty.\r\n\r\nOn this particular page, we will give you a short overview of the fight as well as a list of things to watch out for (include LFR tips when applicable).\r\n\r\nThe other pages of our Skorpyron guide can be accessed from the table of contents on the right.', 'Call of the scorpid occurs periodically and summons a host of scorpids to attack the group. The volatile sorcpid will buff the other scorpids with Scorpid Swarm  and explode upon death, while the Cristalline Scorpids will stack a magic Shrouded until actievly engaged in combat.\r\n\r\nArcanoSlash will happen frequiently. hitting all target within an 18 yard hemisphere in front of the boss tanks will be afflicted whit arcanetether which deal arcane damage every secod (stacking every tick)until they are broken. Running 10 yards away from then tether will cause it to break.\r\n\r\nfocu', '1. Tanks should face the boss away from the group and move towards the back wall to protect the raid from ArcanoSlash After each  Call of the scorpid, a tank should quickly pick up the new scorpids and tank them slightly away from the boss. DPS should immediately switch and kill the scorpids as fast as possible; melee should be wary of the lethal explosion when the Volatile Scorpid is killed\r\n\r\n', 'On this page, you will find a list of changes between Normal/Heroic modes and Mythic mode, as well as a working strategy to defeat Skorpyron in The Nighthold in Mythic mode.\r\n\r\nThe other pages of our Skorpyron guide can be accessed from the table of contents on the right.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guia_clases`
--

CREATE TABLE `guia_clases` (
  `id_guia` int(11) NOT NULL,
  `nombre_clase` varchar(5000) NOT NULL,
  `Nombre_espec` varchar(5000) NOT NULL,
  `introduccion` varchar(5000) NOT NULL,
  `Resumendehabilidades` varchar(5000) NOT NULL,
  `Talentos` varchar(5000) NOT NULL,
  `ArtefactoyReliquias` varchar(5000) NOT NULL,
  `EstadisticasPincipales` varchar(5000) NOT NULL,
  `GemasEncantamientos` varchar(5000) NOT NULL,
  `LegendariosBIS` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `guia_clases`
--

INSERT INTO `guia_clases` (`id_guia`, `nombre_clase`, `Nombre_espec`, `introduccion`, `Resumendehabilidades`, `Talentos`, `ArtefactoyReliquias`, `EstadisticasPincipales`, `GemasEncantamientos`, `LegendariosBIS`) VALUES
(1, '1', 'Furia', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `Nombre_Noticia` varchar(200) DEFAULT NULL,
  `Fecha_Noticia` date DEFAULT NULL,
  `Url_img` varchar(200) DEFAULT NULL,
  `Descripcion_Noticia` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `Nombre_Noticia`, `Fecha_Noticia`, `Url_img`, `Descripcion_Noticia`) VALUES
(3, 'a', '2017-05-01', 'a', 'a'),
(4, 'a', '2017-05-01', 'a', 'a'),
(5, 'GuÃ­a Micro-Evento: Festival de Primavera del Globo', '2017-05-09', 'http://www.wowchakra.com/pypgamers/media/wowchakra/2016/Diciembre/13.12.16/redcabLegionMicroEventoFestivalGlobo.png', 'Del 10 al 12 de Mayo tiene lugar en World of Warcraft el Micro-evento: Festival de Primavera del Globo durante estos dÃ­as lugares caracterÃ­sticos de todo Azeroth e incluso de Draenor tendrÃ¡n disponibles globos aerostÃ¡ticos pilotados por Pandarens y Goblins para dar un relajante paseo surcando los cielos y acompaÃ±ados de amigos. Durante estos viajes nuestros divertidos pilotos nos darÃ¡n conversaciones muy interesantes o divertidas de distinta Ã­ndole incluso pidiÃ©ndonos participar por nuestros nombres en ellas.\r\nPara poder participar en estos viajes en globo tendremos que esperar hasta que otras dos personas hagan cola para el viaje, de esta forma siempre iremos 3 personas junto al piloto. Los viajes durarÃ¡n poco, apenas unos minutos, y no sobrevolarÃ¡n toda la zona, tan sÃ³lo una parte pequeÃ±a.\r\n\r\nDurante estos 3 dÃ­as tan sÃ³lo tendremos que dirigirnos a alguno de los puntos marcados con una X roja en el mapa y allÃ­ encontraremos a los pilotos y sus globos, los cuales tendrÃ¡n nombres especiales cada uno. AquÃ­ os dejamos el mapa del mundo con los vuelos. \r\n\r\nhttp://www.wowchakra.com/pypgamers/media/wowchakra/2016/Diciembre/13.12.16/ViajeEnGloboIslasAbruptas.jpg\r\n\r\nSerÃ¡n un total de 8 viajes en globo en 8 zonas distintas de todo el mapa del mundo. Cada uno de ellos tendrÃ¡ un piloto distinto y unos diÃ¡logos personalizados de forma que hacerlos todos serÃ¡ divertido para cualquier jugador.\r\n\r\nAquÃ­ os dejamos todos y cada uno de los vuelos.\r\n\r\nIslas Abruptas\r\n\r\nAzsuna\r\n\r\nEn las coordenadas 50.0, 30.1 de Azsuna, en Tierras Altas de Llothien, encontraremos a Boscoe y Rungle y su genial globo Carro celestial de Boscoe y Rungle.\r\n\r\nGlobo de Boscoe\r\n\r\nDiÃ¡logo del vuelo\r\n\r\nBoscoe dice: Â¡A bordo, globoaficionados! Â¿Alguien quiere una pegatina de un globo? AhÃ­ tenÃ©is.\r\nBoscoe dice: Â¡Viajamos en el globo mÃ¡s molÃ³n de Azeroth! Â¡PregÃºntale a cualquiera, te dirÃ¡ que es verdad!\r\nRungle dice: Â¿QuÃ© tal unas bebidas gratis? Â¡AhÃ­ van!\r\nBoscoe dice: Hoy volaremos sobre Azsuna, la joya de las Islas Abruptas.\r\nRungle dice: Â¿A alguien le apetece caviar? Â¡Tenemos solo lo mejor!\r\nBoscoe dice: Eso de abajo es la Academia de Nar thalas. He oÃ­do que era una escuela para magos en tiempos ancestrales.\r\nRungle dice: Â¿Una toalla caliente? Â¡Solo tenemos lo mejor para nuestros clientes!\r\nBoscoe dice: Rungle, Â¿por quÃ© no enciendes la barbacoa y luego preparas los fuegos artificiales?\r\nRungle dice: Claro, jefe.\r\nBoscoe dice: Os preguntarÃ©is cÃ³mo puedo dirigir un globo de lujo y aÃºn asÃ­ sacar beneficios. Dejad que os lo cuente.\r\nBoscoe dice: Â¡El truco estÃ¡ en no revelar el precio al cliente hasta que ya estÃ¡ volando contigo en el blogo!\r\nBoscoe dice: SerÃ¡n 28 542 de oro cada uno (propina NO incluida). A menos que, claro, querÃ¡is que Rungle os rompa las piernas.\r\nRungle dice: Bueno, jefe. He puesto los fuegos artificiales en la barbacoa, como me habÃ­as dicho.\r\nBoscoe dice: Â¿QUE HAS HECHO QUÃ‰? Â¡Â¡Â¡Rungle, la has vuelto a liar parda!!!\r\n\r\n'),
(6, '', '0000-00-00', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`nombre_usuario`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id_clase`);

--
-- Indices de la tabla `especializacion_clases`
--
ALTER TABLE `especializacion_clases`
  ADD PRIMARY KEY (`id_espec`);

--
-- Indices de la tabla `guia_bosses`
--
ALTER TABLE `guia_bosses`
  ADD PRIMARY KEY (`nom_boss`);

--
-- Indices de la tabla `guia_clases`
--
ALTER TABLE `guia_clases`
  ADD PRIMARY KEY (`id_guia`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `id_clase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `especializacion_clases`
--
ALTER TABLE `especializacion_clases`
  MODIFY `id_espec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `guia_clases`
--
ALTER TABLE `guia_clases`
  MODIFY `id_guia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
