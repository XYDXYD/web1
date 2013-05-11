-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 05 月 11 日 17:19
-- 服务器版本: 5.5.31-0ubuntu0.13.04.1
-- PHP 版本: 5.4.9-4ubuntu2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `thinkphp`
--

-- --------------------------------------------------------

--
-- 表的结构 `think_activities`
--

CREATE TABLE IF NOT EXISTS `think_activities` (
  `acs_id` int(11) NOT NULL,
  `ac_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `position` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `think_activity`
--

CREATE TABLE IF NOT EXISTS `think_activity` (
  `ac_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `u_id` int(10) unsigned NOT NULL,
  `name` varchar(60) NOT NULL,
  `pub_time` int(10) unsigned NOT NULL,
  `deadline` int(10) unsigned NOT NULL,
  `start_time` varchar(20) NOT NULL,
  `end_time` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `host` varchar(100) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`ac_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- 表的结构 `think_article`
--

CREATE TABLE IF NOT EXISTS `think_article` (
  `a_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `u_id` int(10) unsigned NOT NULL,
  `create_time` int(10) unsigned NOT NULL,
  `last_time` int(10) unsigned NOT NULL,
  `title` varchar(60) NOT NULL,
  `type` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `click` int(10) unsigned DEFAULT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`a_id`),
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- 表的结构 `think_article_type`
--

CREATE TABLE IF NOT EXISTS `think_article_type` (
  `at_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`at_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `think_article_type`
--

INSERT INTO `think_article_type` (`at_id`, `name`) VALUES
(1, '工作通知'),
(2, '新闻公告'),
(3, '文件政策'),
(4, '会员风采');

-- --------------------------------------------------------

--
-- 表的结构 `think_award_type`
--

CREATE TABLE IF NOT EXISTS `think_award_type` (
  `at_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `form` text,
  PRIMARY KEY (`at_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=104 ;

--
-- 转存表中的数据 `think_award_type`
--

INSERT INTO `think_award_type` (`at_id`, `name`, `form`) VALUES
(100, '红棉奖', NULL),
(101, '先进个人', NULL),
(102, '精品项目', NULL),
(103, '先进团队', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `think_file`
--

CREATE TABLE IF NOT EXISTS `think_file` (
  `f_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `savepath` varchar(60) NOT NULL,
  `savename` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `type` enum('image','flash','media','file') NOT NULL,
  `size` int(10) unsigned NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- 表的结构 `think_user`
--

CREATE TABLE IF NOT EXISTS `think_user` (
  `u_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `us_id` int(10) unsigned NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `privilege` tinyint(2) unsigned NOT NULL,
  `last_login` int(10) unsigned NOT NULL,
  `address` varchar(100) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `is_director` tinyint(1) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `think_user`
--

INSERT INTO `think_user` (`u_id`, `us_id`, `username`, `password`, `fullname`, `privilege`, `last_login`, `address`, `postcode`, `is_director`, `status`) VALUES
(1, 0, 'root', '6e8bf7149b4232943a862863f5f41253', '管理员', 0, 1368260802, '', '', 0, 1),
(2, 0, 'admin', 'c3436ac9490ae11d5447d1096080b535', '广东省高校学生工作专业委员会', 1, 1368260926, '', '', 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `think_users`
--

CREATE TABLE IF NOT EXISTS `think_users` (
  `us_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `u_id` int(10) unsigned NOT NULL,
  `name` varchar(40) NOT NULL,
  `position` varchar(60) NOT NULL,
  `office_number` varchar(20) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  PRIMARY KEY (`us_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
