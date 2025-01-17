-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2021 a las 12:23:23
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `employee_v2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(2) DEFAULT NULL,
  `street_address` int(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `postal_code` int(5) DEFAULT NULL,
  `phone_number` int(9) NOT NULL,
  `avatar_seed` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `name`, `last_name`, `email`, `gender`, `age`, `street_address`, `city`, `state`, `postal_code`, `phone_number`, `avatar_seed`) VALUES
(1, 'Rack', 'Lei', 'jackon@network.com', 'man', 24, 126, 'San Jone', 'CA', 394221, 738362762, NULL),
(9, 'John', 'Doe', 'jhondoe@foo.com', 'man', 34, 89, 'New York', 'WA', 9889, 128364564, NULL),
(10, 'Leila', 'Mills', 'mills@leila.com', 'woman', 29, 55, 'San Diego', 'CA', 98765, 998363246, NULL),
(11, 'Richard', 'Desmond', 'dismond@foo.com', 'man', 30, 90, 'Salt lake city', 'UT', 457320, 987698765, NULL),
(12, 'Susan', 'Smith', 'susanmith@baz.com', 'woman', 28, 43, 'Louisville', 'KNT', 445321, 355488976, NULL),
(13, 'Brad', 'Simpson', 'brad@foo.com', 'man', 40, 128, 'Atlanta', 'GEO', 394221, 854634522, NULL),
(14, 'Neil', 'Walker', 'walkerneil@baz.com', 'man', 42, 1, 'Nashville', 'TN', 90143, 372788192, NULL),
(15, 'Robert', 'Thomson', 'jackon@network.net', 'man', 24, 126, 'New Orleans', 'LU', 63281, 232876454, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`) VALUES
(1, 'admin', '$2y$10$nuh1LEwFt7Q2/wz9/CmTJO91stTBS4cRjiJYBY3sVCA', 'admin@assemblerschool.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `EMAIL` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
