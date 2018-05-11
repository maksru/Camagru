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
CREATE TABLE `users` (
`id` int(10) UNSIGNED NOT NULL,
`full_name` varchar(128) NOT NULL,
`login` varchar(60) NOT NULL,
`password` varchar(128) NOT NULL,
`email` varchar(128) NOT NULL

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