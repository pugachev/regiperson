-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-05-27 07:58:47
-- サーバのバージョン： 10.4.24-MariaDB
-- PHP のバージョン: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `registration`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `personaldata`
--

CREATE TABLE `personaldata` (
  `id` int(11) UNSIGNED NOT NULL,
  `womanname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(3) DEFAULT 0,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthplace` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bloodtype` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` int(3) DEFAULT 0,
  `notices` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picdata0` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picdata1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picdata2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `personaldata`
--

INSERT INTO `personaldata` (`id`, `womanname`, `age`, `category`, `birthday`, `birthplace`, `bloodtype`, `height`, `notices`, `picdata0`, `picdata1`, `picdata2`, `created_at`, `updated_at`) VALUES
(4, '相場詩織', 30, 'フリー', '1991-08-01', '', 'A', 171, '秋田の巨人美女', 'nodata.png', 'nodata.png', 'nodata.png', '2022-05-27 05:54:25', '2022-05-27 05:54:25'),
(5, '馬場典子', 48, 'フリー', '1974-04-27', '東京都', 'O', 160, '大阪芸術大学教授', 'nodata.png', 'nodata.png', 'nodata.png', '2022-05-27 05:55:46', '2022-05-27 05:55:46');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `personaldata`
--
ALTER TABLE `personaldata`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `personaldata`
--
ALTER TABLE `personaldata`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
