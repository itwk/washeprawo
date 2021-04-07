-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 07 2021 г., 01:43
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `notes`
--

CREATE TABLE `notes` (
  `ID` int(11) NOT NULL,
  `note` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `notes`
--

INSERT INTO `notes` (`ID`, `note`) VALUES
(1, 'Test note 1'),
(2, 'Test note 2'),
(3, 'Test note 3'),
(4, 'Test note 4'),
(5, 'Test note 5'),
(6, 'Test note 6'),
(7, 'Test note 7'),
(8, 'Test note 8'),
(9, 'Test note 9'),
(10, 'Test note 10'),
(11, 'Test note 11'),
(12, 'Test note 12'),
(13, 'Test note 13'),
(14, 'Test note 14'),
(15, 'Test note 15'),
(16, 'Test note 16'),
(17, 'Test note 17'),
(18, 'Test note 18'),
(19, 'Test note 19'),
(20, 'Test note 20'),
(21, 'sdsdsd'),
(22, 'dsdsd'),
(23, 'rrrrrrrrrrr'),
(24, 'dfdfd'),
(25, 'ssd'),
(26, 'dsfsdfds'),
(27, 'sdsd'),
(28, 'dsfdsfdsf'),
(29, 'xcxcv'),
(30, 'sdfdsf'),
(31, 'sdsds'),
(32, 'sdsaddas'),
(33, 'sdfsd'),
(34, 'sdasdasd'),
(35, 'asdasd'),
(36, 'sdsds'),
(37, 'dsfsdf'),
(38, 'asdas'),
(39, 'dsfdsf'),
(40, 'asdasd'),
(41, 'sadas'),
(42, 'sds'),
(43, 'dsfdsf'),
(44, 'sdsd'),
(45, 'sfsdf'),
(46, 'asdsd'),
(47, 'dsdsf'),
(48, 'dfd'),
(49, 'asdasd'),
(50, '55555'),
(51, '77777'),
(52, 'eqweqwe'),
(53, '5345345'),
(54, 'dsfdsfds'),
(55, 'asdasd'),
(56, 'gggggggg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `notes`
--
ALTER TABLE `notes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
