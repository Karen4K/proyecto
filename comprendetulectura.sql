-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 01:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comprendetulectura`
--

-- --------------------------------------------------------

--
-- Table structure for table `actividadcrucigrama`
--

CREATE TABLE `actividadcrucigrama` (
  `id` int(50) NOT NULL,
  `texto1` text DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `pregunta` varchar(1000) DEFAULT NULL,
  `respuesta1` varchar(100) DEFAULT NULL,
  `respuesta2` varchar(100) DEFAULT NULL,
  `respuestaCorrecta` varchar(100) DEFAULT NULL,
  `beneficio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actividadcrucigrama`
--

INSERT INTO `actividadcrucigrama` (`id`, `texto1`, `autor`, `pregunta`, `respuesta1`, `respuesta2`, `respuestaCorrecta`, `beneficio`) VALUES
(1, ' Titulo: Alicia en el país de las maravillas                                       De repente, un Conejo Blanco con los ojos rosados pasó corriendo junto a ella. Alicia apenas si lo consideró muy notable, pero cuando el Conejo se sacó un reloj del bolsillo de su chaleco y lo miró, y luego echó a correr apresuradamente, Alicia se puso de pie, porque le pareció algo muy extraño ver a un conejo con un chaleco y un reloj.', 'Autor:Lewis Carroll', '¿Qué color eran los ojos del Conejo Blanco?', ' Azules', 'Verdes', 'Rosas', 'Los crucigramas ayudan a ampliar el vocabulario y mejorar la ortografía, incrementan la atención al detalle y desarrollan habilidades cognitivas como la memoria y el pensamiento crítico. Además, mejoran la comprensión del contexto, incrementan la motivación para leer y fomentan el desarrollo de estrategias de solución de problemas.'),
(2, NULL, NULL, '¿Dónde llevaba el Conejo Blanco el reloj?', ' En su cuello', 'En su mano', 'En su bolsillo', NULL),
(3, NULL, NULL, '¿Qué hizo Alicia después de ver al Conejo Blanco con el reloj?', 'Se quedó sentada', 'Se fue a casa', 'Se puso de pie', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `actividadjuegoaventura`
--

CREATE TABLE `actividadjuegoaventura` (
  `id` int(50) NOT NULL,
  `texto` text DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `pregunta` varchar(1000) DEFAULT NULL,
  `respuesta1` varchar(100) DEFAULT NULL,
  `respuesta2` varchar(100) DEFAULT NULL,
  `respuesta3` varchar(100) DEFAULT NULL,
  `respuestaCorrecta` varchar(100) DEFAULT NULL,
  `beneficio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actividadjuegoaventura`
--

INSERT INTO `actividadjuegoaventura` (`id`, `texto`, `autor`, `pregunta`, `respuesta1`, `respuesta2`, `respuesta3`, `respuestaCorrecta`, `beneficio`) VALUES
(1, 'Había una vez un cuervo sediento que voló durante mucho tiempo en busca de agua, hasta que encontró una jarra con un poco del preciado líquido. La jarra tenía un largo y estrecho cuello y por mucho que lo intentara, el cuervo no podía alcanzar el agua con su pico. Desesperado, el cuervo pensó en derribar la jarra y tomar el agua antes de que la tierra la absorbiera, pero la jarra era tan pesada que no se movía con los intentos del pobre cuervo. Al cabo de un rato se le ocurrió otra idea; recogió unas piedrecillas y las dejó caer en la jarra una por una. Con cada piedrecilla, el agua subía un poco más, hasta que por fin estaba lo suficientemente cerca del borde para poder beber. Feliz, el cuervo tomó el agua y siguió volando.', 'Esopo', '¿Por qué el cuervo no podía beber el agua de la jarra al principio?', 'Porque el agua estaba sucia.', 'Porque la jarra estaba rota.', 'Porque no tenía sed.', 'Porque la jarra tenía un largo y estrecho cuello.', 'Desarrolla la comprension profunda, Fomenta la atención y concentración, Mejora la memoria a corto plazo, Mejora el pensamiento critico'),
(2, NULL, NULL, '¿Cuál fue la primera idea del cuervo para intentar conseguir el agua?', 'Llamar a otros animales para ayudar.', 'Volar a otro lugar en busca de agua.', 'Romper la jarra con su pico.', 'Derribar la jarra.', NULL),
(3, NULL, NULL, '¿Qué hizo el cuervo para poder beber el agua finalmente?', ' Derramó la jarra.', 'Rompió la jarra.', 'Pidió ayuda a otros animales.', 'Puso piedrecillas dentro de la jarra.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `actividadsopadeletras`
--

CREATE TABLE `actividadsopadeletras` (
  `id` int(50) NOT NULL,
  `texto1` text DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `pregunta` varchar(1000) DEFAULT NULL,
  `respuestaCorrecta` varchar(100) DEFAULT NULL,
  `beneficio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actividadsopadeletras`
--

INSERT INTO `actividadsopadeletras` (`id`, `texto1`, `autor`, `pregunta`, `respuestaCorrecta`, `beneficio`) VALUES
(1, 'El principito\r\nCuando yo era niño, me gustaban mucho los cuentos de hadas, pero ahora que soy mayor, los prefiero de lejos\r\nPorque los cuentos de hadas hablan de dragones que son vencidos, de gigantes que son derrotados, y de dificultades que son superadas. \r\nAhora sé que esto es solo una simple ficción. \r\nPero las personas grandes se olvidan de esto.\r\n', 'Autor: Antoin de Saint Exupéry', '1. ¿Qué le gustaban mucho cuando era niño?', 'cuentosdehadas', 'Al implementar la sopa de letras con la lectura, \r\n estamos contribuyendo al desarrollo de la estimulación del pensamiento crítico, \r\n ya que al estar concentrados en buscar las palabras en la sopa de letras estamos pensando de manera critica, \r\npermitiendo un mejor desarrollo en la competencia lectora, mejorando también la atención y la movilidad ocular\r\n                https://www.superfriends.es/blog/beneficios-sopa-letras-ingles/ \r\n                    https://www.redalyc.org/articulo.oa?id=446243920007\r\n'),
(2, NULL, NULL, '2. ¿Qué prefiero ahora que soy mayor?', 'lejos', NULL),
(3, NULL, NULL, '3. ¿Qué hablan los cuentos de hadas?', 'dragones gigantes dificultades', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `puntuacion`
--

CREATE TABLE `puntuacion` (
  `nombreusuario` varchar(50) DEFAULT NULL,
  `intento` int(11) DEFAULT NULL,
  `Examen` int(11) DEFAULT NULL,
  `PuntuacionMemorama` int(11) DEFAULT NULL,
  `PuntuacionSopaDeLetras` int(11) DEFAULT NULL,
  `PuntuacionCrucigrama` int(11) DEFAULT NULL,
  `PuntuacionJuevoAventura` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `puntuacion`
--

INSERT INTO `puntuacion` (`nombreusuario`, `intento`, `Examen`, `PuntuacionMemorama`, `PuntuacionSopaDeLetras`, `PuntuacionCrucigrama`, `PuntuacionJuevoAventura`) VALUES
('', 1, NULL, NULL, NULL, NULL, 33),
('', 2, NULL, NULL, NULL, NULL, 100),
('', 3, NULL, NULL, NULL, NULL, 66),
('[object HTMLInputElement]', 1, NULL, NULL, NULL, NULL, 100),
('[object HTMLInputElement]', 2, NULL, NULL, NULL, NULL, 33),
('[object HTMLInputElement]', 3, NULL, NULL, NULL, NULL, 66),
('[object HTMLInputElement]', 4, NULL, NULL, NULL, NULL, 66),
('[object HTMLInputElement]', 5, NULL, NULL, NULL, NULL, 66),
('[object HTMLInputElement]', 6, NULL, NULL, NULL, NULL, 33),
('[object HTMLInputElement]', 7, NULL, NULL, NULL, NULL, 33);

-- --------------------------------------------------------

--
-- Table structure for table `recursos`
--

CREATE TABLE `recursos` (
  `id` int(50) NOT NULL,
  `imagen` varchar(30) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `texto` text DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recursos`
--

INSERT INTO `recursos` (`id`, `imagen`, `titulo`, `autor`, `texto`, `url`) VALUES
(1, 'principito.png', 'El principito', 'Antoine de Saint-Exupéry', 'La trama sigue a un piloto varado en el desierto del Sahara que se encuentra con el Principito, un niño extraterrestre que viaja por diferentes planetas habitados por personajes simbólicos que representan aspectos de la naturaleza humana y los comportamientos absurdos de los adultos.', NULL),
(2, 'alicia.png', 'Las aventuras de Alicia en el país de las maravillas', 'Charles Lutwidge Dodgson', 'La historia cuenta cómo una niña llamada Alicia cae por un agujero, encontrándose en un mundo peculiar y extraño, poblado por humanos y criaturas antropomórficas. La novela juega con la lógica, lo que le dio una gran popularidad tanto en niños como en adultos.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombreusuario` varchar(50) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `apaterno` varchar(50) NOT NULL,
  `amaterno` varchar(50) DEFAULT NULL,
  `nombres` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `ntelefono` varchar(20) DEFAULT NULL,
  `pais` varchar(50) NOT NULL,
  `genero` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombreusuario`, `contraseña`, `apaterno`, `amaterno`, `nombres`, `correo`, `edad`, `ntelefono`, `pais`, `genero`) VALUES
(1, 'Anita123', '12345678', 'Perez', 'Castro', 'Ana Lucia', 'karabi.solven@gmail.com', 10, '4493534653', 'Mexico', 'otro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
