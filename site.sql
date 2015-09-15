-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 21 2015 г., 17:38
-- Версия сервера: 5.5.35-log
-- Версия PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `site_articles`
--

CREATE TABLE IF NOT EXISTS `site_articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sections_id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `img_prew` varchar(255) DEFAULT NULL,
  `intro_text` text NOT NULL,
  `full_text` text NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `date` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `site_articles`
--

INSERT INTO `site_articles` (`id`, `sections_id`, `title`, `img_prew`, `intro_text`, `full_text`, `meta_desc`, `meta_key`, `date`) VALUES
(1, 1, 'функция addcslashes ', 'img/img_prew.png', '<p>string <b>addcslashes</b> ( string str, string charlist )</p> <p>\r\n Возвращает сроку str, в которой перед каждым символом из перечисленных в charlist символов добавлен обратный слэш (\\). Экранируются \\n, \\r и т.д. в стиле языка C, символы с ASCII менее 32 и более 126 преобразуются в восьмеричное представление.</p> ', '<p>string <b>addcslashes</b> ( string str, string charlist )</p> <p>\r\n Возвращает сроку str, в которой перед каждым символом из перечисленных в charlist символов добавлен обратный слэш (\\). Экранируются \\n, \\r и т.д. в стиле языка C, символы с ASCII менее 32 и более 126 преобразуются в восьмеричное представление.</p> <p>Будьте внимательны при экранировании символв 0, a, b, f, n, r, t и v. Они будут преобразованы в \\0, \\a, \\b, \\f, \\n, \\r, \\t и \\v. В C все они являются предопреденными escape-последовательностями, в то время как в PHP только \\0 (NULL), \\r (возврат каретки), \\n (перевод строки) и \\t (табуляция).</p><p>При передаче charlist вида "\\0..\\37" будут экранированы символы с ASCII кодами от 0 до 37.\r\n</p>', 'функция addcslashes в php', 'addcslashes php, addcslashes ', 1437748778),
(2, 1, 'Функция echo', 'img/img_prew.png', '<p>echo -- Выводит одну или более строк</p><p>void <b>echo</b> ( string arg1 [, string argn...] )</p><p>Выводит все аргументы.</p>', '<p>echo -- Выводит одну или более строк</p><p>void <b>echo</b> ( string arg1 [, string argn...] )</p><p>Выводит все аргументы.</p><p>На самом деле echo() - это не функция, а конструкция языка, поэтому заключать аргументы в скобки не обязательно, даже при использовании нескольких аргументов.</p><p>echo() имеет также краткую форму, представляющую собой знак равенства, следующий непосредственно за открывающим тэгом. Этот сокращенный синтаксис допустим только когда директива конфигурации short_open_tag включена.</p>', 'Функция echo в php', 'echo, echo в php', 1437749099),
(3, 2, 'Функция acos', 'img/img_prew.png', '<p>acos -- арккосинус</p>', '<p>acos -- арккосинус</p><p>float <b>acos</b> ( float arg )</p><p>Возвращает арккосинус аргумента arg в радианах. <b>acos()</b> это дополнительная функция к cos(), что означает, что a==cos(acos(a)) для каждого значения в диапазоне <b>acos()</b>.</p>', 'Функция acos в php', 'acos, acos в php', 1437749349),
(4, 2, 'Функция asin', 'img/img_prew.png', '<p>asin - арксинус.</p><p>float <b>asin</b> ( float arg)</p>', '<p>asin - арксинус.</p><p>float <b>asin</b> ( float arg)</p><p>Возвращает арксинус аргумента arg в радианах. asin() это дополнительная функция к sin(), т.е. a==sin(asin(a)) для каждого значения в диапазоне asin().</p>', 'Функция asin в PHP', 'asin, asin php', 1437749475),
(5, 2, 'Функция pow', 'img/img_prew.png', '<p>pow - экспоненциальное выражение.</p>', '<p>pow - экспоненциальное выражение.</p><p>number <b>pow</b> (number base, number exp)</p><p>Возвращает base, возведённую в степень exp. Если возможно, эта функция возвращает integer.\r\n\r\nЕсли возведение в степень не может быть вычислено, выдаётся предупреждение, а pow() возвращает FALSE.</p>', 'Функция pow в php', 'pow, pow php', 1437749689),
(6, 3, 'Функция date', 'img/img_prew.png', '<p>date -- Форматирует системную дату/время</p>', '<p>date -- Форматирует системную дату/время</p><p>string <b>date</b> ( string format [, int timestamp] )</p><p>Возвращает время, отформатированное в соответствии с аргументом format, используя метку времени, заданную аргументом timestamp или текущее системное время, если timestamp не задан. Другими словами, timestamp является необязательным и по умолчанию равен значению, возвращаемому функцией time().</p><p><b>Замечание:</b> Для большинства систем допустимыми являются даты с 13 декабря 1901, 20:45:54 GMT по 19 января 2038, 03:14:07 GMT. (Эти даты соответствуют минимальному и максимальному значению 32-битового целого со знаком). Для Windows допустимы даты с 01-01-1970 по 19-01-2038.</p><p><b>Замечание:</b> Для получения метки времени из строкового представления даты можно использовать функцию strtotime(). Кроме того, некоторые базы данных имеют собственные функции для преобразования внутреннего представления даты в метку времени (напрмер, функция MySQL UNIX_TIMESTAMP).</p>', 'Функция date в php', 'date. date php', 1437749980);

-- --------------------------------------------------------

--
-- Структура таблицы `site_banners`
--

CREATE TABLE IF NOT EXISTS `site_banners` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `site_banners`
--

INSERT INTO `site_banners` (`id`, `code`) VALUES
(1, 'тут находится код банера 1'),
(2, 'тут находится код банера 2');

-- --------------------------------------------------------

--
-- Структура таблицы `site_menu`
--

CREATE TABLE IF NOT EXISTS `site_menu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `site_menu`
--

INSERT INTO `site_menu` (`id`, `title`, `link`) VALUES
(1, 'Главная', '/'),
(2, 'Строковая функция', '/?view=section&amp;id=1'),
(3, 'Математические функции', '/?view=section&amp;id=2'),
(4, 'Функции даты и времени', '/?view=section&amp;id=3');

-- --------------------------------------------------------

--
-- Структура таблицы `site_sections`
--

CREATE TABLE IF NOT EXISTS `site_sections` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `site_sections`
--

INSERT INTO `site_sections` (`id`, `title`, `img`, `description`, `meta_desc`, `meta_key`) VALUES
(1, 'Строковая функция', 'img/sec_1_2_3.png', '<p>Эти функции предназначены для выполнения различных манипуляций со строками. Более специализированные функции см. в разделах, посвященных регулярным выражениям и обработке URL.</p> <p>Для получения общей информации о работе со строками, особенно об использовании одиночных и двойных кавычек и экранировании символов, смотрите главу "Строки" в разделе "Типы".</p>', 'Строковая функция в PHP', 'функции PHP, строковые функции в PHP'),
(2, 'Математические функции', 'img/sec_1_2_3.png', '<p>Данные функции работают с числами в диапазонах типов integer и float на вашей машине (это отвечает C-типам long и double). Если вам нужно работать с большими числами, обратитесь к разделу BCMath - математические функции повышенной точности.</p>', 'Математические функции', 'функции PHP, Математические функции PHP'),
(3, 'Функции даты и времени', 'img/sec_1_2_3.png', '<p>Эти функции позволяют получить дату и время на сервере, где выполняется PHP скрипт. Используя эти функции, дату и время можно представить в различных форматах.</p> <p><b>Замечание:</b> Обратите внимание, что работа этих функций зависит от текущей локали на сервере. Также следует принимать во внимание летнее время и високосные годы.</p>', 'Функции даты и времени в PHP', 'Функции даты и времени php, функции php');

-- --------------------------------------------------------

--
-- Структура таблицы `site_users`
--

CREATE TABLE IF NOT EXISTS `site_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `regdate` int(11) unsigned NOT NULL,
  `activ-key` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `site_users`
--

INSERT INTO `site_users` (`id`, `login`, `password`, `email`, `regdate`, `activ-key`) VALUES
(1, 'User1', 'de2ed28e3c1dd462dcc6cd8a8e138dab', '', 1440052136, ''),
(2, 'User2', 'cec88ca9a71fe537e4587d20a3cfd453', '', 1440057612, ''),
(15, 'yaslonane', 'de2ed28e3c1dd462dcc6cd8a8e138dab', 'Yaslonane@yandex.ru', 1440158171, ''),
(16, 'lalka', 'de2ed28e3c1dd462dcc6cd8a8e138dab', 'Yaslonane@yandex.ru', 1440158290, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
