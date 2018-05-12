-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Час створення: Трв 12 2018 р., 14:06
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
-- Структура таблиці `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1525890441),
('m140209_132017_init', 1525890446),
('m140403_174025_create_account_table', 1525890446),
('m140504_113157_update_tables', 1525890448),
('m140504_130429_create_token_table', 1525890449),
('m140830_171933_fix_ip_field', 1525890449),
('m140830_172703_change_account_table_name', 1525890449),
('m141222_110026_update_ip_field', 1525890449),
('m141222_135246_alter_username_length', 1525890449),
('m150614_103145_update_social_account_table', 1525890450),
('m150623_212711_fix_username_notnull', 1525890450),
('m151218_234654_add_timezone_to_profile', 1525890451),
('m160929_103127_add_last_login_at_to_user_table', 1525890451),
('m180509_184617_create_news_table', 1525897218),
('m180509_190216_add_user_id_column_to_news_table', 1526064084),
('m180511_174511_create_Category_table', 1526064414);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
