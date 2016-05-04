-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 12 月 27 日 12:53
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `db_tushu`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL auto_increment COMMENT '主键id',
  `name` varchar(13) default NULL COMMENT '管理员帐号',
  `pwd` varchar(50) default NULL COMMENT '管理员密码',
  `Levels` varchar(1) NOT NULL COMMENT '管理权限',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `name`, `pwd`, `Levels`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', ''),
(2, 'admin1', '21232f297a57a5a743894a0e4a801fc3', '0');

-- --------------------------------------------------------

--
-- 表的结构 `categories`
--

CREATE TABLE `categories` (
  `id` smallint(6) NOT NULL auto_increment COMMENT '主键id',
  `name` varchar(50) NOT NULL COMMENT '分类名称',
  `reid` smallint(6) NOT NULL COMMENT '上级分类id',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=17 ;

--
-- 导出表中的数据 `categories`
--

INSERT INTO `categories` (`id`, `name`, `reid`) VALUES
(10, '文科', 0),
(11, '历史类', 10),
(12, '理科', 0),
(13, '数学', 12),
(14, '国外', 0),
(15, '国外文学', 14),
(16, '国外书籍', 14);

-- --------------------------------------------------------

--
-- 表的结构 `chubanshe`
--

CREATE TABLE `chubanshe` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `chubanshe`
--

INSERT INTO `chubanshe` (`id`, `name`) VALUES
(1, '北京大学出版社'),
(2, '清华大学出版社');

-- --------------------------------------------------------

--
-- 表的结构 `links`
--

CREATE TABLE `links` (
  `id` int(4) NOT NULL auto_increment,
  `linkname` varchar(50) NOT NULL,
  `linkurl` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=11 ;

--
-- 导出表中的数据 `links`
--

INSERT INTO `links` (`id`, `linkname`, `linkurl`) VALUES
(9, 'd', 'd'),
(10, 'dsa', 'asd');

-- --------------------------------------------------------

--
-- 表的结构 `liuyan`
--

CREATE TABLE `liuyan` (
  `id` int(4) NOT NULL auto_increment,
  `userid` varchar(50) default NULL,
  `title` varchar(200) default NULL,
  `content` text,
  `addtime` timestamp NULL default CURRENT_TIMESTAMP,
  `replay` text NOT NULL,
  `rtime` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `liuyan`
--

INSERT INTO `liuyan` (`id`, `userid`, `title`, `content`, `addtime`, `replay`, `rtime`) VALUES
(4, 'ztest', '12', '213', '2012-10-09 10:39:51', 'sd ', '2012-10-09 10:46:06');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL auto_increment COMMENT '主键id',
  `title` varchar(50) NOT NULL COMMENT '新闻公告名称',
  `content` text NOT NULL COMMENT '新闻公告内容',
  `addtime` datetime NOT NULL COMMENT '发布时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `addtime`) VALUES
(1, '起啊桑达', '阿斯阿萨德', '2012-10-06 11:40:33'),
(2, '1', '111', '2012-10-07 09:16:33');

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE `orders` (
  `id` int(4) NOT NULL auto_increment,
  `orderid` varchar(125) default NULL COMMENT '订单号',
  `spc` varchar(125) default NULL,
  `slc` varchar(125) default NULL,
  `shouhuoren` varchar(25) default NULL,
  `sex` varchar(2) default NULL,
  `dizhi` varchar(125) default NULL,
  `youbian` varchar(10) default NULL,
  `tel` varchar(25) default NULL,
  `email` varchar(25) default NULL,
  `shff` varchar(25) default NULL,
  `zfff` varchar(25) default NULL,
  `time` datetime default NULL,
  `xiadanren` varchar(25) default NULL,
  `zt` varchar(50) default NULL,
  `total` varchar(25) default NULL,
  `liuyan` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `orders`
--

INSERT INTO `orders` (`id`, `orderid`, `spc`, `slc`, `shouhuoren`, `sex`, `dizhi`, `youbian`, `tel`, `email`, `shff`, `zfff`, `time`, `xiadanren`, `zt`, `total`, `liuyan`) VALUES
(4, '20121227205016', '1@', '1@', '测试的', '男', '江苏南京财经大学', '444444', '44111111', '11111@qq.com', '普通平邮', '建设银行汇款', '2012-12-27 20:50:16', 'z0001', '已发货', '500', '阿斯'),
(3, '2012109100133', '@@2@@@1@@', '1@1@1@1@1@1@1@', '1', '男', '11', '11', '1', '122222@11.com', '普通平邮', '建设银行汇款', '2012-10-09 10:01:33', 'ztest', '已发货', '5300', '11111111111');

-- --------------------------------------------------------

--
-- 表的结构 `shu`
--

CREATE TABLE `shu` (
  `id` int(4) NOT NULL auto_increment,
  `name` varchar(25) default NULL COMMENT '图书名称',
  `jianjie` mediumtext COMMENT '图书介绍',
  `xinghao` varchar(25) default NULL COMMENT '图书型号',
  `tupian` varchar(200) default NULL COMMENT '图书图片',
  `shuliang` int(4) default NULL COMMENT '图书数量',
  `cishu` int(4) default NULL COMMENT '卖出次数',
  `tuijian` int(4) default NULL COMMENT '是否推荐',
  `dalei` int(4) default NULL COMMENT '大类id',
  `xiaolei` int(4) NOT NULL COMMENT '小类id',
  `huiyuanjia` varchar(25) default NULL COMMENT '会员价',
  `shichangjia` varchar(25) default NULL COMMENT '市场价',
  `chubanshe` varchar(25) default NULL COMMENT '出版社id',
  `tejia` int(2) default NULL COMMENT '是否特价',
  `addtime` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `shu`
--

INSERT INTO `shu` (`id`, `name`, `jianjie`, `xinghao`, `tupian`, `shuliang`, `cishu`, `tuijian`, `dalei`, `xiaolei`, `huiyuanjia`, `shichangjia`, `chubanshe`, `tejia`, `addtime`) VALUES
(1, '辛夷坞暖伤青春作品全集', '全新修订版，暖伤青春代言人辛夷坞“致青春”纯爱经典 感动集结 豪华软精装 全国独家新增6篇新番外', '22854471', 'admin/upimages/2.jpg', 10, 2, 1, 14, 15, '500', '5001', '2', 1, '0000-00-00 00:00:00'),
(2, '严歌苓作品集', '小姨多鹤 一个女人的史诗 扶桑 第九个寡妇 铁梨花）：当代华语第一女作家严歌苓代表作一套收齐  ', '22854474', 'admin/upimages/3.jpg', 79, 1, 1, 10, 11, '4800', '5800', '2', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL auto_increment,
  `name` varchar(25) default NULL,
  `pwd` varchar(50) default NULL,
  `dongjie` int(4) default NULL,
  `email` varchar(25) default NULL,
  `sfzh` varchar(25) default NULL,
  `tel` varchar(25) default NULL,
  `qq` varchar(25) default NULL,
  `dizhi` varchar(100) default NULL,
  `youbian` varchar(25) default NULL,
  `truename` varchar(25) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `pwd`, `dongjie`, `email`, `sfzh`, `tel`, `qq`, `dizhi`, `youbian`, `truename`) VALUES
(3, 'ztest', '123456', 0, '111@11.com', '1', '11', '1123', '10000', '1', '1232'),
(4, 'z0001', '123456', 0, '58850@qq.com', '412584545445521', '1899999', '58811', '江苏南京晓庄', '1233', '测试');
