-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-20 09:03:31
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `member`
--

-- --------------------------------------------------------

--
-- 資料表結構 `login`
--

CREATE TABLE `login` (
  `id` int(11) UNSIGNED NOT NULL,
  `acc` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `login`
--

INSERT INTO `login` (`id`, `acc`, `password`, `email`, `create_time`) VALUES
(1, 'admin', '1234', 'admin@gmail', '2020-11-09 05:52:13'),
(2, 'aa', 'aa', 'aa@', '2020-11-09 05:54:39'),
(3, 'bb', 'bb', 'bb@', '2020-11-09 05:55:02'),
(4, 'cc', 'cc', 'cc@', '2020-11-09 05:55:18'),
(5, 'dd', 'dd', 'dd@', '2020-11-09 05:55:44'),
(6, 'ee', 'ee', 'ee@', '2020-11-09 05:55:59');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `role` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `education` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `name`, `birthday`, `role`, `address`, `tel`, `education`, `login_id`) VALUES
(1, '管理員', '2020-11-01', '管理員', '隨便', 9123, '隨便', 1),
(2, 'A', '2020-11-01', '會員', '隨便啦aa', 9123, '高中', 2),
(3, 'B', '2020-11-01', 'VIP', '隨便啦bb', 9123, '碩士', 3),
(4, 'C', '2020-11-01', '會員', '隨便啦cc', 9123, '博士', 4),
(5, 'D1', '2020-11-01', 'VIP', '隨便啦dd', 9123, '大學/專科', 5),
(6, 'E', '2020-11-01', '會員', '隨便啦ee', 9123, '國中', 6);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
