-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 09, 2019 at 09:07 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `maintexts`
--

CREATE TABLE `maintexts` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `url` tinytext NOT NULL,
  `lang` enum('ru','en','by') NOT NULL DEFAULT 'ru',
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `putdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `lang`, `showhide`, `putdate`) VALUES
(1, 'Контакты', 'Телефон', 'contact', 'ru', 'show', '2019-11-28'),
(2, 'Наши вакансии', 'Каталог', 'vacancy', 'ru', 'show', '2019-11-28'),
(4, 'О компании', 'Структура', 'aboute', 'ru', 'show', '2019-11-28'),
(6, 'Для юр. лиц', 'Сотрудничество', 'company', 'ru', 'show', '2019-11-28'),
(8, 'Навигатор', 'Раздел', 'navigation', 'ru', 'show', '2019-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `status` tinytext NOT NULL,
  `putdate` date NOT NULL,
  `lastvisit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `putdate`, `lastvisit`) VALUES
(1, 'Иван', 'ivan@com', '123', 'user', '2019-11-29', '2019-12-08 22:13:43'),
(13, 'Иван', 'ivan@com', '', 'user', '2019-12-09', '2019-12-09 19:44:06'),
(14, '', '', '', 'user', '2019-12-09', '2019-12-09 19:44:34'),
(15, '', '', '', 'user', '2019-12-09', '2019-12-09 19:44:43'),
(16, 'Иван', 'ivan@com', '', 'user', '2019-12-09', '2019-12-09 19:44:53'),
(17, '', '', '', 'user', '2019-12-09', '2019-12-09 19:46:28'),
(18, '', '', '', 'user', '2019-12-09', '2019-12-09 19:47:36'),
(19, '', '', '', 'user', '2019-12-09', '2019-12-09 19:47:41'),
(20, '', '', '', 'user', '2019-12-09', '2019-12-09 19:48:11'),
(21, '', '', '', 'user', '2019-12-09', '2019-12-09 19:48:17'),
(22, 'Иван', 'ivan@com', '123', 'user', '2019-12-09', '2019-12-09 19:55:16'),
(23, 'Петя', 'petrov@com', '1234', 'user', '2019-12-09', '2019-12-09 20:03:27'),
(24, 'Петя', 'petrov@com', '1234', 'user', '2019-12-09', '2019-12-09 20:04:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maintexts`
--
ALTER TABLE `maintexts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maintexts`
--
ALTER TABLE `maintexts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
