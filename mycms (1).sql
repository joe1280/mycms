-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 11 月 06 日 00:25
-- 服务器版本: 5.5.40
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mycms`
--

-- --------------------------------------------------------

--
-- 表的结构 `my_admin`
--

CREATE TABLE IF NOT EXISTS `my_admin` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员自增ID',
  `username` varchar(20) NOT NULL COMMENT '管理员名称',
  `password` varchar(32) NOT NULL COMMENT '管理密码',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '管理员状态，1：启用， 0表示：禁用 ',
  `role_id` varchar(255) NOT NULL DEFAULT '' COMMENT '角色ID',
  `photo` varchar(255) NOT NULL DEFAULT '' COMMENT '相片',
  `flag` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '标记',
  `flage_start` int(10) NOT NULL DEFAULT '0' COMMENT '账号有效期开始时间',
  `flag_stop` int(10) NOT NULL DEFAULT '0' COMMENT '账号结束时间',
  `phone` varchar(11) NOT NULL DEFAULT '' COMMENT '手机',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '姓名',
  `birthday` int(11) NOT NULL DEFAULT '0' COMMENT '生日',
  `email` varchar(255) NOT NULL DEFAULT '' COMMENT '邮箱',
  `last_login_ip` varchar(15) NOT NULL DEFAULT '' COMMENT '最后登录IP',
  `last_login_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `my_admin`
--

INSERT INTO `my_admin` (`id`, `username`, `password`, `status`, `role_id`, `photo`, `flag`, `flage_start`, `flag_stop`, `phone`, `name`, `birthday`, `email`, `last_login_ip`, `last_login_time`, `add_time`, `update_time`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '1', '', 0, 0, 0, '', '', 0, '', '', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
