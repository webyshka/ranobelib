-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 15 2016 г., 17:34
-- Версия сервера: 5.5.48
-- Версия PHP: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ranobelib`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chapters`
--

CREATE TABLE IF NOT EXISTS `chapters` (
  `id` int(11) NOT NULL,
  `rubric_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `seo_url` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chapters`
--

INSERT INTO `chapters` (`id`, `rubric_id`, `title`, `description`, `meta_title`, `meta_description`, `seo_url`, `sort_order`) VALUES
(1, 11, 'фывфыв', 'фывфывфывфывфывфыв', 'фывфывфывфывфывфыв', 'фывфывфывфывфывфыв', 'sdrsrdsr', 100);

-- --------------------------------------------------------

--
-- Структура таблицы `rubrics`
--

CREATE TABLE IF NOT EXISTS `rubrics` (
  `rubric_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `seo_url` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rubrics`
--

INSERT INTO `rubrics` (`rubric_id`, `title`, `image`, `description`, `meta_title`, `meta_description`, `sort_order`, `seo_url`) VALUES
(1, 'Тестовая', 'asdasd', 'Тут будет тестовое описание', 'Тут meta_title', 'Тут meta_description', 0, '123123'),
(3, 'asd', 'asd', 'asdasd', 'asdasd', 'asdsad', 111, 'asd');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rubric_id` (`rubric_id`);

--
-- Индексы таблицы `rubrics`
--
ALTER TABLE `rubrics`
  ADD PRIMARY KEY (`rubric_id`),
  ADD UNIQUE KEY `rubric_id` (`rubric_id`),
  ADD KEY `rubric_id_2` (`rubric_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `rubrics`
--
ALTER TABLE `rubrics`
  MODIFY `rubric_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
