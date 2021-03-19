-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2017 a las 08:40:55
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tickets_bdd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conocimiento`
--

CREATE TABLE `conocimiento` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `conenido` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conocimiento`
--

INSERT INTO `conocimiento` (`id`, `titulo`, `conenido`) VALUES
(1, 'Laravel', 'Laravel es un nuevo y poderoso Framework PHP desarrollado por Taylor Otwell, que promete llevar al lenguaje PHP a un nuevo nivel. \r\nDesarrollar aplicaciones usando Laravel es muy sencillo, fundamentalmente debido a su expresiva sintaxis, sus generadores de código, y su ORM incluido de paquete llamado Eloquent ORM.\r\n\r\nLaravel, propone una forma de desarrollar aplicaciones web de un modo mucho más ágil. Por ejemplo, en Laravel opcionalmente podemos usar el patrón de diseño MVC (Modelo-Vista-Controlador) tradicional, donde al igual que otros fameworks PHP, el controlador es programado como una clase. \r\nPor lo tanto, un Controlador es una clase PHP que dispone de métodos públicos que son el punto de entrada final de una petición HTTP (Request PHP) a nuestra aplicación.'),
(2, 'Composer', 'Composer es un gestor de dependencias en proyectos, para programación en PHP. Eso quiere decir que nos permite gestionar (declarar, descargar y mantener actualizados) los paquetes de software en los que se basa nuestro proyecto PHP. Se ha convertido en una herramienta de cabecera para cualquier desarrollador en este lenguaje que aprecie su tiempo y el desarrollo ágil.\r\n\r\nCuando comienzas un proyecto en PHP, ya de cierta complejidad, no te vale solo con la librería de funciones nativa de PHP. Generalmente todos usamos alguna que otra librería de terceros desarrolladores, que nos permite evitar empezar todo desde cero. Ya sea un framework o algo más acotado como un sistema para debug o envío de email, validación de formularios, etc., cualquier cosa que puedas necesitar ya está creada por otros desarrolladores. Si no la estás usando ninguna librería posiblemente estés perdiendo tu precioso tiempo, pero eso es otra discusión.\r\n\r\nDe modo que, al comenzar el proyecto hasta ahora teníamos que ir a la página de cada uno de los componentes de software que queríamos usar, descargarlos, copiarlos en la carpeta de nuestro proyecto, etc. No solo eso, cuando estamos en mitad del desarrollo, o ya en producción, y nos cambian la versión de la librería, tenemos que volverla a descargar manualmente, actualizar los archivos, etc. Nadie se había muerto por hacer todo ese tipo de tareas de configuración y mantenimiento, pero no cabe duda que nos llevan un tiempo.'),
(3, 'Xampp', 'XAMPP es un servidor independiente de plataforma de código libre. Te permite instalar de forma sencilla Apache en tu propio ordenador, sin importar tu sistema operativo (Linux, Windows, MAC  o Solaris). Y lo mejor de todo es que su uso es gratuito.\r\nXAMPP incluye además servidores de bases de datos como MySQL ySQLite con sus respectivos gestores phpMyAdmin y phpSQLiteAdmin. Incorpora también el intérprete de PHP, el intérprete de Perl, servidores de FTP como ProFTPD ó FileZilla FTP Serve, etc. entre muchas cosas más.\r\nSi alguna vez has intentado instalar Apache, sabes que no es una tarea fácil, sin embargo con XAMPP todo es diferente. Una de las ventajas de usar XAMPP es que  su instalación es de lo mas sencilla, basta descargarlo, extraerlo y comenzar a usarlo.\r\n\r\n¿Para que sirve?\r\n\r\nComo ya lo debes haber deducido, XAMPP es una herramienta de desarrollo que te permite probar tu trabajo (páginas web o programación por ejemplo) en tu propio ordenador sin necesidad de tener que accesar a internet.\r\nSi eres un desarrollador que recien está comenzando, tampoco debes preocuparte sobre las configuraciones ya que XAMPP te provee de una configuración totalmente funcional desde el momento que lo instalas (basicamente lo extraes). Sin embargo, es bueno acotar que la seguridad de datos no es su punto fuerte, por lo cual no es suficientemente seguro para ambientes grandes o de producción.'),
(4, 'Admin LTE', '\r\n1. Licenciamiento\r\n\r\nEsta es una de las mejores características ya que como lo menciona en su documentación, el proyecto es open source y está disponible bajo la licencia MIT lo que te permite hacer casi cualquier cosa como por ejemplo modificarlo, usarlo para fines comerciales, etc., claro está que es deseable que se mencione la atribución al que lo desarrolló. Este tipo de licencia es la misma utilizada por grandes proyectos open source como Jquery, Angularjs, etc. \r\n\r\n2. Archivos fuente.\r\n\r\nAlgo sumamente interesante es que el template nos ofrece la descarga con los archivos fuente, esto significa que tendremos disponible los archivos LESS para que podamos modificar el diseño de forma estructurada y ordenada.  La carpeta que se descarga contiene el siguiente arbol de archivos.\r\n\r\nAdminLTE/\r\n??? dist/\r\n?   ??? CSS/\r\n?   ??? JS\r\n?   ??? img\r\n??? build/\r\n?   ??? less/\r\n?   ?   ??? AdminLTE\'s Less files\r\n?   ??? Bootstrap-less/ (Only for reference. No modifications have been made)\r\n?       ??? mixins/\r\n?       ??? variables.less\r\n?       ??? mixins.less\r\n??? plugins/\r\n    ??? All the customized plugins CSS and JS files\r\n \r\n\r\n3. Skins.\r\n\r\nEl template viene con la posibilidad de utilizar 12 tipos de skins, lo cual nos permitirá customizar de forma rápida con estilos predeterminados.\r\n\r\nLos skins son:\r\n\r\nskin-blue\r\nskin-blue-light\r\nskin-yellow\r\nskin-yellow-light\r\nskin-green\r\nskin-green-light\r\nskin-purple\r\nskin-purple-light\r\nskin-red\r\nskin-red-light\r\nskin-black\r\nskin-black-light\r\n \r\n\r\n4. Basado en bootsrap.\r\n\r\n¿Quién no conoce bootstrap? creo que está demas explicar la ventaja de este punto, sin embargo hago la mención ya que vale la pena que sepas que está basado en el sistema de grid que maneja Bootstrap y todos sus componentes, estilos y js.\r\n\r\nLa versión de Bootstrap que utiliza es la 3, si aún no conoces este maravilloso framework de diseño puedes darte una vuelta por su sitio oficial.\r\n\r\n5. Plugins precargados.\r\n\r\nEste template contine una serie de plugins js ya \"precargados\" que puedes utilizar desde que descargas, eso nos reduce el tiempo de búqueda de plugins para acciones genéricas como validaciones de formularios, calendario, etc.\r\n\r\n6. Documentación.\r\n\r\nAdminLTE contiene una documentación bastante buena en donde te explica de forma detallada cómo empezar y cómo hacer las configuraciones necesarias para que puedas implementar en tu sitio.\r\n\r\n7. Ejemplos\r\n\r\nAdminLTE nos ofrece muchos HTML de ejemplo que se descargan junto con la plantilla así que podrás ver como se utilizan todos los plugins que trae y además de que puedes tomarlos como ejemplo para aprender a maquetar con Bootstrap.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapas`
--

CREATE TABLE `etapas` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `caso` varchar(30) NOT NULL,
  `dias` int(11) NOT NULL,
  `fecha_ini` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `diferido` varchar(100) NOT NULL,
  `conclusion` text NOT NULL,
  `solucion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `etapas`
--

INSERT INTO `etapas` (`id`, `username`, `pais`, `caso`, `dias`, `fecha_ini`, `fecha_fin`, `diferido`, `conclusion`, `solucion`) VALUES
(3, 'pedro@gmail.com', 'Brasil', 'Completado', 3, '2017-05-18', '2017-05-21', '', 'Tratado con exito', 'Buscarlo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `job_ti` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `manager` varchar(100) NOT NULL,
  `tipo_hard` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `fecha_compra` varchar(100) NOT NULL,
  `fecha_inicio_garan` date NOT NULL,
  `fecha_fin_garan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `usuario`, `job_ti`, `area`, `manager`, `tipo_hard`, `marca`, `modelo`, `fecha_compra`, `fecha_inicio_garan`, `fecha_fin_garan`) VALUES
(6, 'pedro@gmail.com', 'Universitario', 'Desarrollo', 'Google', 'Laptop', 'Asus', 'sm555', '2017-06-06T03:30', '2017-06-17', '2017-08-31'),
(9, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(10, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `ape_p` varchar(100) NOT NULL,
  `ape_m` varchar(100) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `tema` varchar(200) NOT NULL,
  `problema` text NOT NULL,
  `prioridad` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `progeso` int(11) NOT NULL,
  `createdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mail`
--

INSERT INTO `mail` (`id`, `username`, `nombre`, `ape_p`, `ape_m`, `pais`, `tema`, `problema`, `prioridad`, `image`, `estado`, `progeso`, `createdate`) VALUES
(1, 'pedro@gmail.com', 'Pedro', '3344551243', 'Jimenez', 'Brasil', 'Busqueda del amor', '<p>No encuentro a una shava que vi en el camion krnal</p>\r\n', 'Alto', 'Krysten-Ritter.jpg', 'Abierto', 0, '2017-06-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pend`
--

CREATE TABLE `pend` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ape_p` varchar(100) NOT NULL,
  `ape_m` varchar(100) NOT NULL,
  `pais` varchar(25) NOT NULL,
  `region` varchar(30) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rip`
--

CREATE TABLE `rip` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ape_p` varchar(100) NOT NULL,
  `ape_m` varchar(100) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ape_p` varchar(100) NOT NULL,
  `ape_m` varchar(100) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `tema` varchar(200) NOT NULL,
  `problema` text NOT NULL,
  `prioridad` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `progeso` int(11) NOT NULL,
  `createdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ticket`
--

INSERT INTO `ticket` (`id`, `username`, `nombre`, `ape_p`, `ape_m`, `pais`, `tema`, `problema`, `prioridad`, `image`, `estado`, `progeso`, `createdate`) VALUES
(1, 'pedro@gmail.com', 'Pedro', '3344551243', 'Jimenez', 'Brasil', 'Busqueda del amor', '<p>No encuentro a una shava que vi en el camion krnal</p>\r\n', 'Alto', 'Krysten-Ritter.jpg', 'Abierto', 70, '2017-06-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ape_p` varchar(100) NOT NULL,
  `ape_m` varchar(100) NOT NULL,
  `pais` varchar(20) NOT NULL,
  `region` varchar(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `valpor` varchar(50) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `ape_p`, `ape_m`, `pais`, `region`, `username`, `password`, `tipo`, `valpor`, `createdate`) VALUES
(1, 'Antonio', 'Quiroz', 'Salas', 'Mexico', 'Sureste', 'antonioquiroz8834@gmail.com', 'antonio123', 'admin', 'antonioquiroz8834@gmail.com', '2017-06-04 05:04:34'),
(13, 'Sofia', 'Ruiz', 'Velazco', 'Mexico', 'Centrosur', 'zophy96@gmail.com', 'sofi123', 'admin', 'zophy96@gmail.com', '2017-06-05 03:13:06'),
(14, 'Pedro', '3344551243', 'Jimenez', 'Brasil', 'Oeste', 'pedro@gmail.com', 'pedro123', 'user', 'antonioquiroz8834@gmail.com', '2017-06-05 03:34:25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conocimiento`
--
ALTER TABLE `conocimiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `etapas`
--
ALTER TABLE `etapas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pend`
--
ALTER TABLE `pend`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rip`
--
ALTER TABLE `rip`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conocimiento`
--
ALTER TABLE `conocimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `etapas`
--
ALTER TABLE `etapas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `pend`
--
ALTER TABLE `pend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `rip`
--
ALTER TABLE `rip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
