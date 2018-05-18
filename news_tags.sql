-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Час створення: Трв 18 2018 р., 15:57
-- Версія сервера: 5.5.48
-- Версія PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `test`
--

-- --------------------------------------------------------

--
-- Структура таблиці `news_tags`
--

CREATE TABLE IF NOT EXISTS `news_tags` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `news_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `news_tags`
--

INSERT INTO `news_tags` (`id`, `category_id`, `news_id`) VALUES
(15, 2, 5),
(16, 4, 5),
(27, 1, 1),
(28, 2, 1),
(29, 1, 4),
(30, 4, 4),
(31, 1, 3),
(32, 4, 3),
(33, 3, 2),
(34, 4, 2);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `news_tags`
--
ALTER TABLE `news_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-tags-category_id` (`category_id`),
  ADD KEY `fk-tags-news_id` (`news_id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `news_tags`
--
ALTER TABLE `news_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `news_tags`
--
ALTER TABLE `news_tags`
  ADD CONSTRAINT `fk-tags-category_id` FOREIGN KEY (`category_id`) REFERENCES `Category` (`id`),
  ADD CONSTRAINT `fk-tags-news_id` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
