SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- База данных: `db_camagru`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--
CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
`full_name` varchar(128) NOT NULL,
`login` varchar(60) NOT NULL,
`password` varchar(128) NOT NULL,
`email` varchar(128) NOT NULL,
`confirmation` int(6) DEFAULT 0

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Структура таблицы `images`
--
CREATE TABLE IF NOT EXISTS `images` (
`id_images` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
`id_gallery` int(11) NOT NULL,
`path_images` varchar(255) NOT NULL,
`text_images` text NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Структура таблицы `gallery`
--
CREATE TABLE IF NOT EXISTS `gallery` (
`id` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
`id_user` int(11) NOT NULL,
`name_gallery` varchar(255) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Структура таблицы `commenst`
--
CREATE TABLE IF NOT EXISTS `commenst` (
`id_commenst` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
`id_images` int(11) NOT NULL DEFAULT '0',
`user_name` varchar(255) NOT NULL,
`user_email` varchar(128) NOT NULL,
`text_commenst` text NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--
INSERT INTO `users` (`id`, `full_name`, `login`, `password`, `email`) VALUES
(62, 'Maxim', 'admin', '6a4e012bd9583858a5a6fa15f58bd86a25af266d3a4344f1ec2018b778f29ba83be86eb45e6dc204e11276f4a99eff4e2144fbe15e756c2c88e999649aae7d94', 'maks_ru@i.ua');

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;COMMIT;