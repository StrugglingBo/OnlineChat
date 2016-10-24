-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-09-07 11:40:21
-- 服务器版本： 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `liaotian`
--

-- --------------------------------------------------------

--
-- 表的结构 `chatinfo`
--

CREATE TABLE IF NOT EXISTS `chatinfo` (
  `id` int(10) unsigned NOT NULL,
  `myname` varchar(20) NOT NULL,
  `toname` varchar(20) NOT NULL,
  `chat` varchar(255) NOT NULL,
  `timer` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `chatinfo`
--

INSERT INTO `chatinfo` (`id`, `myname`, `toname`, `chat`, `timer`) VALUES
(3, 'lisi', '李四', '你好', '2016-09-06 21:19:24'),
(4, 'lisi', '张三', '你好', '2016-09-06 21:20:23'),
(5, 'lisi', '李四', '好好', '2016-09-06 21:21:01'),
(6, 'lisi', '李四', '你哈哈', '2016-09-06 21:22:53'),
(7, 'lisi', '李四', '你', '2016-09-06 21:23:46'),
(8, 'lisi', '李四', '你', '2016-09-06 21:24:30'),
(20, 'lisi', '李四', '你好的', '2016-09-07 08:26:28'),
(51, '张三', 'zhangsan', '你大爷的', '2016-09-07 09:11:01'),
(52, 'lisi', '李四', '我是你哥', '2016-09-07 10:17:04'),
(53, 'lisi', '李四', '我是你哥', '2016-09-07 10:17:06'),
(54, 'lisi', '李四', '我是你哥', '2016-09-07 10:18:33'),
(68, 'lisi', '张三', '你好', '2016-09-07 16:33:54'),
(71, '李四', 'lisi', '你好', '2016-09-07 16:51:50'),
(73, 'lisi', '李四', '谢谢', '2016-09-07 17:00:55'),
(78, '李四', 'all', '', '2016-09-07 17:21:14');

-- --------------------------------------------------------

--
-- 表的结构 `liaotian`
--

CREATE TABLE IF NOT EXISTS `liaotian` (
  `id` tinyint(8) unsigned NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=armscii8;

--
-- 转存表中的数据 `liaotian`
--

INSERT INTO `liaotian` (`id`, `username`, `password`) VALUES
(1, '李四', '123'),
(2, 'lisi', '123'),
(3, 'zhangsan', '123'),
(10, '老李', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatinfo`
--
ALTER TABLE `chatinfo`
  ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `liaotian`
--
ALTER TABLE `liaotian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatinfo`
--
ALTER TABLE `chatinfo`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `liaotian`
--
ALTER TABLE `liaotian`
  MODIFY `id` tinyint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
