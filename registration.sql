-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-05-29 13:01:24
-- サーバのバージョン： 10.4.24-MariaDB
-- PHP のバージョン: 8.1.6

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
(22, '馬場典子', 48, 'フリー', '1974-04-27', '東京都', 'O', 160, '大阪芸術大学教授', '馬場典子_0.jpg', '馬場典子_1.jpg', '馬場典子_2.jpg', '2022-05-28 10:13:21', '2022-05-28 10:13:21'),
(23, '相場詩織', 30, 'フリー', '1991-08-01', '秋田県', 'A', 171, '秋田の巨人美女', '相場詩織_0.jpg', '相場詩織_1.jpg', 'nodata.png', '2022-05-28 10:15:54', '2022-05-28 10:15:54'),
(24, '良原安美', 26, '局アナ', '1995-10-09', '神奈川県', 'A', 171, 'スレンダー長身美女', '良原安美_0.jpg', 'nodata.png', '良原安美_2.jpg', '2022-05-28 10:17:05', '2022-05-28 10:17:56'),
(25, '堤礼実', 28, '局アナ', '1993-11-23', '東京都', 'O', 163, 'ダンスが得意', '堤礼実_0.jpg', '堤礼実_1.jpg', '堤礼実_2.jpg', '2022-05-29 01:39:31', '2022-05-29 01:39:31'),
(26, '小澤陽子', 30, '局アナ', '1991-07-29', '神奈川県', 'B', 167, 'スタイル抜群', '小澤陽子_0.jpg', '小澤陽子_1.jpg', '小澤陽子_2.jpg', '2022-05-29 01:42:02', '2022-05-29 01:42:02'),
(27, '高田秋', 30, 'モデル', '1991-09-23', '北海道', 'O', 166, '酒飲みです', '高田秋_0.jpg', '高田秋_1.jpg', '高田秋_2.jpg', '2022-05-29 01:46:03', '2022-05-29 01:46:03'),
(28, '後呂有紗', 28, '局アナ', '1994-04-20', '東京都', 'O', 163, 'お人形みたい', '後呂有紗_0.jpg', '後呂有紗_1.jpg', '後呂有紗_2.jpg', '2022-05-29 01:52:43', '2022-05-29 01:52:43'),
(29, '新井恵理那', 32, 'フリー', '1989-12-22', '神奈川県', 'O', 158, 'お父さんがアナオタ', '新井恵理那_0.jpg', '新井恵理那_1.jpg', '新井恵理那_2.jpg', '2022-05-29 01:58:25', '2022-05-29 01:58:25'),
(30, '上野愛奈', 30, 'フリー', '1991-08-16', '熊本県', 'A', 163, '九州女', '上野愛奈_0.jpg', '上野愛奈_1.jpg', '上野愛奈_2.jpg', '2022-05-29 02:02:45', '2022-05-29 02:02:45'),
(31, '杉本有美', 33, 'モデル', '1989-04-01', '大阪府', 'A', 168, '大阪天王寺の美人', '杉本有美_0.jpg', '杉本有美_1.jpg', '杉本有美_2.jpg', '2022-05-29 02:05:44', '2022-05-29 02:05:44'),
(32, '本田翼', 29, 'モデル', '1992-06-27', '東京都', 'O', 166, 'basas-', '本田翼_0.jpg', '本田翼_1.jpg', '本田翼_2.jpg', '2022-05-29 02:08:53', '2022-05-29 02:08:53');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
