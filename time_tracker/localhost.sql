-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成時間: 2011 年 9 月 23 日 17:31
-- サーバのバージョン: 5.5.8
-- PHP のバージョン: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `time_tracker`
--
CREATE DATABASE `time_tracker` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `time_tracker`;

-- --------------------------------------------------------

--
-- テーブルの構造 `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- テーブルのデータをダンプしています `tasks`
--

INSERT INTO `tasks` (`id`, `name`) VALUES
(1, 'test1'),
(3, 'test3'),
(4, 'test4');

-- --------------------------------------------------------

--
-- テーブルの構造 `time_tracks`
--

CREATE TABLE IF NOT EXISTS `time_tracks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `memo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- テーブルのデータをダンプしています `time_tracks`
--

INSERT INTO `time_tracks` (`id`, `start_time`, `end_time`, `task_id`, `memo`) VALUES
(2, 11, 11, 2, 'test2'),
(3, 11, 11, 4, 'test4');

-- --------------------------------------------------------

--
-- テーブルの構造 `tracking_tasks`
--

CREATE TABLE IF NOT EXISTS `tracking_tasks` (
  `id` int(11) NOT NULL,
  `flag_tracking` tinyint(1) NOT NULL,
  `start_time` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータをダンプしています `tracking_tasks`
--

INSERT INTO `tracking_tasks` (`id`, `flag_tracking`, `start_time`, `task_id`) VALUES
(1, 1, 1316425891, 1);
