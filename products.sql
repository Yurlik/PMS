-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Квт 08 2019 р., 13:34
-- Версія сервера: 5.6.41
-- Версія PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `products`
--

-- --------------------------------------------------------

--
-- Структура таблиці `attribute`
--

CREATE TABLE `attribute` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `attribute`
--

INSERT INTO `attribute` (`id`, `name`, `code`) VALUES
(1, 'Color', 'c250'),
(2, 'width', 'w10'),
(3, 'height', 'h485'),
(4, 'length', 'l100');

-- --------------------------------------------------------

--
-- Структура таблиці `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `description` longtext NOT NULL,
  `pic_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `pic_name`) VALUES
(1, 'first_01', '1500', 'qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty ', 'WP_20180127_15_01_19_Pro.jpg'),
(2, 'Prod_2', '120', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet ipsum accumsan, feugiat tellus ut, consequat urna. Quisque sagittis massa non facilisis tempus. Donec urna ipsum, fermentum eget felis at, consectetur pharetra est. Vivamus ac vestibulum tellus. In hac habitasse platea dictumst. Suspendisse arcu ex, aliquam eget ante a, pharetra semper dolor.', 'prod_2.jpg'),
(3, 'Prod_3', '140', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet ipsum accumsan, feugiat tellus ut, consequat urna. Quisque sagittis massa non facilisis tempus. Donec urna ipsum, fermentum eget felis at, consectetur pharetra est. Vivamus ac vestibulum tellus. In hac habitasse platea dictumst. Suspendisse arcu ex, aliquam eget ante a, pharetra semper dolor.', 'prod_3.jpg'),
(4, 'Prod_4', '160', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet ipsum accumsan, feugiat tellus ut, consequat urna. Quisque sagittis massa non facilisis tempus. Donec urna ipsum, fermentum eget felis at, consectetur pharetra est. Vivamus ac vestibulum tellus. In hac habitasse platea dictumst. Suspendisse arcu ex, aliquam eget ante a, pharetra semper dolor.', 'prod_1.jpg'),
(5, '123', '123', '123', 'WP_20180127_15_01_06_Pro.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `prod_attr`
--

CREATE TABLE `prod_attr` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `attr_id` int(11) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `prod_attr`
--

INSERT INTO `prod_attr` (`id`, `prod_id`, `attr_id`, `value`) VALUES
(1, 1, 1, 'red'),
(2, 2, 1, 'green'),
(3, 1, 2, '100'),
(4, 1, 3, '150'),
(5, 3, 3, '120'),
(6, 3, 2, '300'),
(7, 4, 2, '200'),
(8, 4, 3, '300');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `prod_attr`
--
ALTER TABLE `prod_attr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `attribute`
--
ALTER TABLE `attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблиці `prod_attr`
--
ALTER TABLE `prod_attr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
