-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 11 月 29 日 00:06
-- 服务器版本: 5.5.8
-- PHP 版本: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `xycms`
--

-- --------------------------------------------------------

--
-- 表的结构 `common`
--

CREATE TABLE IF NOT EXISTS `common` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `descriptions` varchar(255) NOT NULL,
  `pl_id` int(11) NOT NULL,
  `info_from` varchar(255) NOT NULL,
  `info_auth` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `c_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `common`
--

INSERT INTO `common` (`id`, `title`, `keywords`, `descriptions`, `pl_id`, `info_from`, `info_auth`, `content`, `c_date`) VALUES
(1, '关于我们e', '关于我们', '关于我们', 1, '', '', '<p>\r\n	XYCMS企业建站系统是专业从事企业网站制作与设计服务，已有四年工作经验，网站系统方便、简洁、容易上手。所设计的版本分为动态版和静态版，比起市场上同类系统，性价比还是很高的，在企业网站建设行业里拥有丰富的经验，并在业界取得好评。选择我们，不会让您失望！ <br />\r\nXYCMS快速建站系统是由站长XY亲手编译的，作为站长，做网站不可能凭空而造，站长也是经过长期学习和借鉴别人的成功经验成就了XYCMS，现在网络上建站源码很多，尤其是ASP网站源码，但事事必有弊端，作为ASP老牌建站首选，XYCMS也融合了网络上广大CXY的看家本领，不敢说完美，但求稳定。方便、简洁、容易上手等优点已经吸引了许多用户的一致好评。 <br />\r\nXY的目标：打造最稳定、安全的建站系统,XYCMS已经走过了好几代的更新，作为站长，我也一直在努力学习，争取用更好的作品来为大家服务！在这里，也感谢网络上的高手们，因为是你们在网络上的无私奉献才让中国互联网一天天进步。最后，向广大网络爱好者致敬，向所有XYCMS用户致敬，为了明天的光明，我们一起起步。\r\n</p>\r\n<p>\r\n	XYCMS建站系统分为动态版和静态版，购买时请注明需要哪种版本，静态版本所有行业模板价格统一，动态版本价格有所不同。有关动态和静态化的优势对比，网络上很多说明，您可以在网络上搜索查看。\r\n</p>', '2012-07-25 18:46:30'),
(2, '销售网络', '销售网络', '销售网络', 2, '', '', '销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络销售网络', '2012-07-25 18:46:24'),
(3, '联系我们', '联系我们', '联系我们', 3, '', '', '联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们', '2012-04-10 21:13:32');

-- --------------------------------------------------------

--
-- 表的结构 `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wzname` varchar(255) NOT NULL,
  `descriptions` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `wzurl` varchar(255) NOT NULL,
  `icp` varchar(255) NOT NULL,
  `managename` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telnum` varchar(255) NOT NULL,
  `phonenum` bigint(20) NOT NULL,
  `faxnum` varchar(255) NOT NULL,
  `qqnum` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `wzlogo` varchar(255) NOT NULL,
  `wzlogow` int(11) NOT NULL,
  `wzlogoh` int(11) NOT NULL,
  `gbook_sh` int(11) NOT NULL,
  `on_run` int(11) NOT NULL,
  `off_dc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `config`
--

INSERT INTO `config` (`id`, `wzname`, `descriptions`, `keywords`, `wzurl`, `icp`, `managename`, `email`, `telnum`, `phonenum`, `faxnum`, `qqnum`, `address`, `wzlogo`, `wzlogow`, `wzlogoh`, `gbook_sh`, `on_run`, `off_dc`) VALUES
(1, 'XYCMS企业建站系统PHP版', 'XYCMS企业建站系统PHP版', 'XYCMS企业建站系统PHP版', 'http://127.0.0.1/', '苏ICP备08067466466', 'admin', 'yang3rui@163.com', '02588888888', 222222222444, '02588888888', 364500483444, '南京市玄武区花园路', '/uploadfile/image/20120410/20120410045313_13301.jpg', 960, 100, 0, 0, '测试网站关闭说明呵呵呵e');

-- --------------------------------------------------------

--
-- 表的结构 `down_fl`
--

CREATE TABLE IF NOT EXISTS `down_fl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `pl_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `down_fl`
--

INSERT INTO `down_fl` (`id`, `title`, `pl_id`) VALUES
(2, '下载分类一', 2),
(3, '下载分类二', 3),
(6, '下载分类三', 4),
(7, '下载分类四', 5);

-- --------------------------------------------------------

--
-- 表的结构 `gbook`
--

CREATE TABLE IF NOT EXISTS `gbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `ly_name` varchar(255) NOT NULL,
  `tel` bigint(20) NOT NULL,
  `spanail` varchar(255) NOT NULL,
  `sf_yc` int(2) NOT NULL,
  `content` text NOT NULL,
  `hf_gbook` text NOT NULL,
  `c_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `gbook`
--

INSERT INTO `gbook` (`id`, `title`, `ly_name`, `tel`, `spanail`, `sf_yc`, `content`, `hf_gbook`, `c_date`) VALUES
(1, '测试留言标题', '杨帆', 15851852314, 'yang3rui@163.com', 0, '测试留言内容测试留言内容测试留言内容测试留言内容测试留言内容', '', '2012-02-08 20:38:13'),
(2, '测试留言标题1', '杨帆', 15851852314, 'yang3rui@163.com', 0, '测试留言标题1测试留言标题1测试留言标题1测试留言标题1测试留言标题1', '', '2012-02-08 20:40:11'),
(3, '测试留言标题2', '杨帆', 15851852314, 'yang3rui@163.com', 0, '测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2测试留言标题2', '', '2012-02-08 20:40:25'),
(4, '测试留言标题3', '杨帆', 15851852314, 'yang3rui@163.com', 0, '测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3测试留言标题3', '', '2012-02-08 20:40:40'),
(5, '测试留言标题4', '杨帆', 15851852314, 'yang3rui@163.com', 0, '测试留言标题4测试留言标题4测试留言标题4测试留言标题4测试留言标题4测试留言标题4测试留言标题4测试留言标题4测试留言标题4测试留言标题4测试留言标题4测试留言标题4测试留言标题4测试留言标题4测试留言标题4测试留言标题4测试留言标题4测试留言标题4测试留言标题4', '斤斤计较', '2012-02-08 20:40:57'),
(6, '测试留言', '烟鬼', 15851852314, 'yang3rui@163.com', 0, 'fdcesg测试留言内容', '', '2012-04-09 22:19:43');

-- --------------------------------------------------------

--
-- 表的结构 `manage_user`
--

CREATE TABLE IF NOT EXISTS `manage_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(255) NOT NULL,
  `m_pwd` varchar(255) NOT NULL,
  `c_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `manage_user`
--

INSERT INTO `manage_user` (`id`, `m_name`, `m_pwd`, `c_date`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2011-11-23 20:53:08');

-- --------------------------------------------------------

--
-- 表的结构 `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `m_title` varchar(255) NOT NULL,
  `m_url` varchar(255) NOT NULL,
  `m_open` varchar(255) NOT NULL,
  `m_px` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `menu`
--

INSERT INTO `menu` (`id`, `m_title`, `m_url`, `m_open`, `m_px`) VALUES
(1, '网站首页', '/index.php', '_self', 1),
(2, '关于我们', '/common.php?id=1', '_self', 2),
(3, '新闻动态', '/news.php', '_self', 3),
(4, '产品中心', '/products.php', '_self', 4),
(5, '客户案例', '/case.php', '_self', 5),
(6, '销售网络', '/common.php?id=2', '_self', 6),
(7, '资料下载', '/download.php', '_self', 7),
(8, '人力资源', '/careers.php', '_self', 8),
(9, '在线留言', '/gbook.php', '_self', 9),
(10, '联系我们', '/common.php?id=3', '_self', 10);

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `descriptions` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `info_from` varchar(255) NOT NULL,
  `info_auth` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `keywords`, `descriptions`, `img`, `info_from`, `info_auth`, `content`, `p_id`, `c_date`) VALUES
(1, 'dgfdgdf', 'dgfdgdf', 'dgfdgdf', '', '', '', 'dgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdf', 1, '2012-01-12 22:30:35'),
(2, 'dgfdgdf', 'dgfdgdf', 'dgfdgdf', '', '', '', 'dgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdfdgfdgdf', 2, '2012-01-12 22:30:43'),
(3, 'sggsxgsdg', 'sggsxgsdg', 'sggsxgsdg', '', '', '', 'sggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdgsggsxgsdg', 1, '2012-08-05 22:29:46'),
(4, 'ykyghkhk', 'ykyghkhk', 'ykyghkhk', '', '', '', 'ykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhkykyghkhk', 1, '2012-08-05 22:28:44'),
(5, 'sfsfsfsfrtrtretwt', 'sfsfsfsfrtrtretwt', 'sfsfsfsfrtrtretwt', '', '', '', 'sfsfsfsfrtrtretwtsfsfsfsfrtrtretwtsfsfsfsfrtrtretwtsfsfsfsfrtrtretwtsfsfsfsfrtrtretwtsfsfsfsfrtrtretwtsfsfsfsfrtrtretwtsfsfsfsfrtrtretwtsfsfsfsfrtrtretwtsfsfsfsfrtrtretwtsfsfsfsfrtrtretwtsfsfsfsfrtrtretwtsfsfsfsfrtrtretwtsfsfsfsfrtrtretwtsfsfsfsfrtrtretwtsfsfsfsfrtrtretwtsfsfsfsfrtrtretwt', 1, '2012-01-12 22:31:20'),
(6, 'oooooo', 'oooooo', 'oooooo', '', '', '', 'oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo', 1, '2012-01-12 22:31:34'),
(7, 'ououihfhfhf', 'ououihfhfhf', 'ououihfhfhf', '', '', '', 'ououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhfououihfhfhf', 2, '2012-01-12 22:31:47'),
(8, '测试新闻', '测试新闻', '测试新闻', '', '', '', '测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻测试新闻', 1, '2012-01-12 22:57:41'),
(9, '测试新闻3', '测试新闻3', '测试新闻3', '', '', '', '测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3测试新闻3', 1, '2012-01-12 22:57:53'),
(10, '测试新闻e', '测试新闻e', '测试新闻e', '', '', '', '测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e', 1, '2012-01-12 22:58:09'),
(11, '测试新闻e', '测试新闻e', '测试新闻e', '', '', '', '测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e测试新闻e', 3, '2012-08-05 22:36:12'),
(12, '测试新闻eg', '测试新闻eg', '测试新闻eg', '', '', '', '测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg测试新闻eg', 1, '2012-01-12 22:59:03'),
(13, '测试新闻egdd', '测试新闻egdd', '测试新闻egdd', '', '', '', '测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd', 1, '2012-01-12 22:59:16'),
(14, '测试新闻egdd', '测试新闻egdd', '测试新闻egdd', '', '', '', '测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd', 1, '2012-01-12 22:59:36'),
(15, '测试新闻egdd', '测试新闻egdd', '测试新闻egdd', '', '', '', '测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd', 1, '2012-08-05 22:29:52'),
(16, '测试新闻egdd', '测试新闻egdd', '测试新闻egdd', '', '', '', '测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd', 1, '2012-08-05 22:32:51'),
(17, '测试新闻egdd', '测试新闻egdd', '测试新闻egdd', '', '', '', '测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd', 1, '2012-08-05 22:31:17'),
(18, '测试新闻egdd', '测试新闻egdd', '测试新闻egdd', '', '', '', '测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd', 3, '2012-04-09 22:27:54'),
(19, '测试新闻egdd', '测试新闻egdd', '测试新闻egdd', '/uploadfile/image/20120726/20120726135352_27888.jpg', '', '', '测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd测试新闻egdd', 1, '2012-07-26 21:53:54');

-- --------------------------------------------------------

--
-- 表的结构 `news_fl`
--

CREATE TABLE IF NOT EXISTS `news_fl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `pl_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `news_fl`
--

INSERT INTO `news_fl` (`id`, `title`, `pl_id`) VALUES
(1, '新闻分类一', 1),
(2, '新闻分类2', 2),
(3, '新闻分类3', 3),
(6, '测试四', 4),
(7, '添加信息5', 5);

-- --------------------------------------------------------

--
-- 表的结构 `pro_fl`
--

CREATE TABLE IF NOT EXISTS `pro_fl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `etitle` varchar(255) NOT NULL,
  `pl_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `pro_fl`
--

INSERT INTO `pro_fl` (`id`, `title`, `etitle`, `pl_id`) VALUES
(1, '笔记本', '', 1),
(2, '手机', '', 2),
(3, '打印机', '', 3),
(6, '上网本', '', 4),
(7, 'PAD', '', 5),
(8, '数码相机', '', 6),
(9, '学习机', '', 7),
(10, '录音笔', '', 8),
(11, 'dsd', '', 22),
(12, 'frrr', '', 33);

-- --------------------------------------------------------

--
-- 表的结构 `xy_case`
--

CREATE TABLE IF NOT EXISTS `xy_case` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `descriptions` varchar(255) NOT NULL,
  `case_dc` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `info_from` varchar(255) NOT NULL,
  `info_auth` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `c_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `xy_case`
--

INSERT INTO `xy_case` (`id`, `title`, `keywords`, `descriptions`, `case_dc`, `img`, `info_from`, `info_auth`, `content`, `c_date`) VALUES
(1, '测试案例信息一t', '测试案例信息一t', '测试案例信息一t', '', '', '', '', '测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一t', '2011-12-14 23:38:19'),
(2, '测试案例信息一', '测试案例信息一', '测试案例信息一', '', '/uploadfile/image/20120206/20120206131640_20881.gif', '', '', '测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一测试案例信息一', '2012-02-06 21:16:47'),
(3, '测试案例信息二', '测试案例信息二', '测试案例信息二', '', '', '', '', '测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二测试案例信息二', '2012-02-06 21:17:00');

-- --------------------------------------------------------

--
-- 表的结构 `xy_download`
--

CREATE TABLE IF NOT EXISTS `xy_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `descriptions` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `info_from` varchar(255) NOT NULL,
  `info_auth` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `xy_download`
--

INSERT INTO `xy_download` (`id`, `title`, `keywords`, `descriptions`, `url`, `info_from`, `info_auth`, `content`, `p_id`, `c_date`) VALUES
(3, '测试新闻标题3', '', '', '', '', '', '测试新闻内容3', 3, '2011-11-02 09:20:18'),
(4, '测试新闻标题', '测试新闻标题', '测试新闻标题', '', '', '', '测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题', 2, '2011-12-03 22:14:06'),
(5, '测试新闻标题1', '测试新闻标题1', '测试新闻标题1', '/uploadfile/image/20111203/20111203141534_86478.jpg', '', '', '测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1', 3, '2011-12-03 22:15:36');

-- --------------------------------------------------------

--
-- 表的结构 `xy_pro`
--

CREATE TABLE IF NOT EXISTS `xy_pro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `descriptions` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `info_from` varchar(255) NOT NULL,
  `info_auth` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `xy_pro`
--

INSERT INTO `xy_pro` (`id`, `title`, `keywords`, `descriptions`, `img`, `info_from`, `info_auth`, `content`, `p_id`, `c_date`) VALUES
(3, '测试新闻标题3', '', '', '', '', '', '测试新闻内容3', 3, '2011-11-02 09:20:18'),
(4, '测试新闻标题', '测试新闻标题', '测试新闻标题', '', '', '', '测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题测试新闻标题', 2, '2011-12-03 22:14:06'),
(5, '测试新闻标题1', '测试新闻标题1', '测试新闻标题1', '/uploadfile/image/20111203/20111203141534_86478.jpg', '', '', '测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1测试新闻标题1', 3, '2011-12-03 22:15:36'),
(6, '苹果iPhone 4S（16GB）', '苹果iPhone 4S', '苹果iPhone 4S', '/uploadfile/image/20120413/20120413231731_93144.jpg', '本站', 'admin', '<span id="newPmName_1">上市日期</span>：<span id="newPmVal_1">2011年10月</span> \r\n<li class="hover">\r\n	<span id="newPmName_2">手机类型</span>：<span id="newPmVal_2">3G手机，智能手机，拍照手机</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_3">外观设计</span>：<span id="newPmVal_3">直板</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_4">主屏尺寸</span>：<span id="newPmVal_4">3.5英寸</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_5">触摸屏</span>：<span id="newPmVal_5">电容屏，多点触控</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_6">主屏材质</span>：<span id="newPmVal_6">IPS</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_7">主屏分辨率</span>：<span id="newPmVal_7">960x640像素</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_8">网络类型</span>：<span id="newPmVal_8">单卡多模</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_9">网络模式</span>：<span id="newPmVal_9">GSM，WCDMA，CDMA，CDMA2000</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_10">数据业务</span>：<span id="newPmVal_10">GPRS，EDGE，HSDPA，CDMA 1X，EVDO rev.A</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_11">支持频段</span>：<span id="newPmVal_11">2G：CDMA1X 800<br />\r\n2G：GSM 850/900/1800/1900<br />\r\n3G：WCDMA 800/850/1900/2100 <br />\r\n3G：CDMA EVDO 850/900/1900/2100MHz</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_12">操作系统</span>：<span id="newPmVal_12">iOS 5.0</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_13">核心数</span>：<span id="newPmVal_13">双核</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_14">CPU型号</span>：<span id="newPmVal_14">苹果 A5</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_15">CPU频率</span>：<span id="newPmVal_15">800MHz</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_16">可用空间</span>：<span id="newPmVal_16">16GB</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_17">机身内存</span>：<span id="newPmVal_17">512MB RAM</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_18">电池容量</span>：<span id="newPmVal_18">1420mAh</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_19">理论通话时间</span>：<span id="newPmVal_19">540分钟（2G），360分钟（3G）</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_20">理论待机时间</span>：<span id="newPmVal_20">200小时</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_21">其它使用时间</span>：<span id="newPmVal_21">3G网络时间：6小时<br />\r\nWLAN网络时间：10小时<br />\r\n音乐播放时间：40小时<br />\r\n视频播放时间：10小时</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_22">键盘类型</span>：<span id="newPmVal_22">虚拟QWERTY键盘</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_23">机身颜色</span>：<span id="newPmVal_23">黑色，白色</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_24">手机尺寸</span>：<span id="newPmVal_24">115.2x58.6x9.3mm</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_25">手机重量</span>：<span id="newPmVal_25">140g</span> \r\n</li>\r\n<li>\r\n	<span id="newPmName_26">机身特点</span>：<span id="newPmVal_26">玻璃材质</span> \r\n</li>', 2, '2012-04-14 07:47:31'),
(7, '三星I9100 GALAXY ', '三星I9100 GALAXY ', '三星I9100 GALAXY ', '/uploadfile/image/20120414/20120414003201_44716.jpg', '本站', 'admin', '<span id="newPmName_1">手机昵称</span>：<span id="newPmVal_1">Galaxy S2</span>\r\n<li>\r\n	<span id="newPmName_2">上市日期</span>：<span id="newPmVal_2">2011年07月</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_3">手机类型</span>：<span id="newPmVal_3">3G手机，智能手机，拍照手机</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_4">外观设计</span>：<span id="newPmVal_4">直板</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_5">主屏尺寸</span>：<span id="newPmVal_5">4.3英寸</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_6">触摸屏</span>：<span id="newPmVal_6">电容屏，多点触控</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_7">主屏材质</span>：<span id="newPmVal_7">Super AMOLED PLUS</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_8">主屏分辨率</span>：<span id="newPmVal_8">800x480像素</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_9">主屏色彩</span>：<span id="newPmVal_9">1600万色</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_10">网络类型</span>：<span id="newPmVal_10">单卡双模</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_11">网络模式</span>：<span id="newPmVal_11">GSM，WCDMA</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_12">数据业务</span>：<span id="newPmVal_12">GPRS，EDGE，HSPA+</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_13">支持频段</span>：<span id="newPmVal_13">2G：GSM 850/900/1800/1900<br />\r\n3G：WCDMA 850/900/1900/2100MHz</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_14">理论速率</span>：<span id="newPmVal_14">HSDPA：14.46Mbps<br />\r\nHSUPA：5.4Mbps <br />\r\nHSPA+: 24Mbps</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_15">操作系统</span>：<span id="newPmVal_15">Android OS 2.3</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_16">用户界面</span>：<span id="newPmVal_16">Touch Wiz 4.0</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_17">核心数</span>：<span id="newPmVal_17">双核</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_18">CPU型号</span>：<span id="newPmVal_18">三星 Exynos 4210</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_19">CPU频率</span>：<span id="newPmVal_19">1228MHz</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_20">GPU型号</span>：<span id="newPmVal_20">Mali-400MP</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_21">可用空间</span>：<span id="newPmVal_21">16GB</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_22">机身内存</span>：<span id="newPmVal_22">4GB ROM+1GB RAM</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_23">存储卡</span>：<span id="newPmVal_23">MicroSD卡，支持App2SD功能</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_24">扩展容量</span>：<span id="newPmVal_24">32GB</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_25">电池容量</span>：<span id="newPmVal_25">1650mAh</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_26">键盘类型</span>：<span id="newPmVal_26">虚拟QWERTY键盘</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_27">机身颜色</span>：<span id="newPmVal_27">黑色，白色</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_28">手机尺寸</span>：<span id="newPmVal_28">125.3x66.1x8.49mm</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_29">手机重量</span>：<span id="newPmVal_29">116g</span>\r\n</li>\r\n<li class="hover">\r\n	<span id="newPmName_30">机身特点</span>：<span id="newPmVal_30">采用了曲面屏幕设计，其有弧度的触控表面还带有抗指纹涂层，可带来更出色的使用手感。</span>\r\n</li>', 2, '2012-04-14 08:33:12'),
(8, '苹果MacBook Pro', '苹果MacBook Pro', '苹果MacBook Pro', '/uploadfile/image/20120414/20120414003450_93037.jpg', '本站', 'admin', '<span id="newPmName_5">CPU系列</span>：<span id="newPmVal_5">英特尔 酷睿i5 2代系列（Sandy Bridge）</span>\r\n<li>\r\n	<span id="newPmName_6">CPU型号</span>：<span id="newPmVal_6">Intel 酷睿i5 2430M</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_7">CPU主频</span>：<span id="newPmVal_7">2.4GHz</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_8">总线规格</span>：<span id="newPmVal_8">DMI 5 GT/s</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_9">三级缓存</span>：<span id="newPmVal_9">3MB</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_10">核心类型</span>：<span id="newPmVal_10">Sandy Bridge</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_11">核心/线程数</span>：<span id="newPmVal_11">双核心/四线程</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_12">制程工艺</span>：<span id="newPmVal_12">32nm</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_13">指令集</span>：<span id="newPmVal_13">AVX，64bit</span>\r\n</li>\r\n<li>\r\n	<span id="newPmName_14">功耗</span>：<span id="newPmVal_14">35W</span><span style="display:none;" id="__kindeditor_bookmark_end_24__"></span>\r\n</li>', 1, '2012-04-14 08:35:52'),
(9, '联想ThinkPad T420（4180PLC）', '联想ThinkPad T420（4180PLC）', '联想ThinkPad T420（4180PLC）', '/uploadfile/image/20120414/20120414003707_16273.jpg', '本站', 'admin', '<li>\r\n	屏幕尺寸：14英寸&nbsp; 1366x768\r\n</li>\r\n<li>\r\n	CPU型号：Intel 酷睿i5 2430M\r\n</li>\r\n<li>\r\n	CPU主频：2.4GHz\r\n</li>\r\n<li>\r\n	内存容量：2GB&nbsp; DDR3 1333MHz\r\n</li>\r\n<li>\r\n	硬盘容量：500GB&nbsp; 7200转，SATA\r\n</li>\r\n<li title="NVIDIA Quadro NVS 4200M＋Intel GMA HD（集成于处理器） ">\r\n	显卡芯片：NVIDIA Quadro NVS 4200M＋Intel...\r\n</li>\r\n<ul class="main_param_list">\r\n	<li title="Windows 7 Home Basic（家庭普通版） ">\r\n		操作系统：Windows 7 Home Basic（家庭普通...\r\n	</li>\r\n	<li>\r\n		摄像头：集成摄像头\r\n	</li>\r\n	<li>\r\n		光驱类型：DVD刻录机&nbsp; Rambo\r\n	</li>\r\n	<li>\r\n		无线网卡：Intel 1000 BGN\r\n	</li>\r\n	<li>\r\n		笔记本重量：2.18Kg\r\n	</li>\r\n	<li>\r\n		蓝牙：支持蓝牙功能<span style="display:none;" id="__kindeditor_bookmark_end_8__"></span>\r\n	</li>\r\n</ul>', 1, '2012-04-14 08:37:33'),
(10, '华硕EeePC X101', '华硕EeePC X101', '华硕EeePC X101', '/uploadfile/image/20120414/20120414003856_64698.jpg', '本站', 'admin', '<li>\r\n	<span>屏幕尺寸：</span>10.1英寸&nbsp; 1024x600\r\n</li>\r\n<li>\r\n	<span>处理器型号：</span>Intel Atom N435\r\n</li>\r\n<li>\r\n	<span>处理器主频：</span>1.33GHz\r\n</li>\r\n<li>\r\n	<span>内存容量：</span>1GB&nbsp; DDR3\r\n</li>\r\n<li>\r\n	<span>硬盘容量：</span>8GB&nbsp; SSD固态硬盘\r\n</li>\r\n<ul class="paramlist">\r\n	<li>\r\n		<span>产品重量：</span>1000g\r\n	</li>\r\n	<li>\r\n		<span>摄像头：</span>集成网络摄像头\r\n	</li>\r\n	<li>\r\n		<span>显卡芯片：</span>Intel GMA 600\r\n	</li>\r\n	<li>\r\n		<span>二级缓存：</span>512KB\r\n	</li>\r\n	<li>\r\n		<span>无线网卡：</span>内置无线网卡\r\n	</li>\r\n</ul>', 6, '2012-04-14 08:39:13'),
(11, 'HP P1007', 'HP P1007', 'HP P1007', '/uploadfile/image/20120414/20120414004036_27122.jpg', '本站', 'admin', '<li>\r\n	<span>产品类型：</span>黑白激光打印机\r\n</li>\r\n<li>\r\n	<span>最大打印幅面：</span>A4\r\n</li>\r\n<li>\r\n	<span>黑白打印速度：</span>达到14ppm\r\n</li>\r\n<li>\r\n	<span>最高分辨率：</span>600x600dpi\r\n</li>\r\n<li>\r\n	<span>耗材类型：</span>鼓粉一体\r\n</li>\r\n<li>\r\n	<span>硒鼓寿命：</span>1500页\r\n</li>\r\n<li>\r\n	<span>预热时间：</span>0秒预热\r\n</li>\r\n<li>\r\n	<span>首页打印时间：</span>8.5秒\r\n</li>\r\n<ul class="paramlist">\r\n	<li>\r\n		<span>月打印负荷：</span>达到5000页\r\n	</li>\r\n	<li>\r\n		<span>网络打印：</span>不支持网络打印\r\n	</li>\r\n	<li>\r\n		<span>双面打印：</span>手动\r\n	</li>\r\n	<li>\r\n		<span>进纸盒容量：</span>150页\r\n	</li>\r\n	<li title="2MB嵌入式SIP包（16KB NVRAM） ">\r\n		<span>内存：</span>2MB嵌入式SIP包（16\r\n	</li>\r\n	<li>\r\n		<span>接口类型：</span>USB2.0\r\n	</li>\r\n	<li title="打印：315W，待机/睡眠：3W，手动关闭：0.6W ">\r\n		<span>电源功率：</span>打印：315W，待机/\r\n	</li>\r\n	<li>\r\n		<span>打印语言：</span>基于主机的打印\r\n	</li>\r\n</ul>', 3, '2012-04-14 08:40:53'),
(12, '苹果The new iPad', '苹果The new iPad', '苹果The new iPad', '/uploadfile/image/20120414/20120414004157_16660.jpg', '本站', 'admin', '<li title="9.7英寸  电容式触摸屏，多点式触摸屏">\r\n	<span>屏幕尺寸：</span>9.7英寸&nbsp; 电容式触\r\n</li>\r\n<li>\r\n	<span>操作系统：</span>iOS 5.1\r\n</li>\r\n<li title="Apple A5X 双核，1GHz ">\r\n	<span>处理器：</span>Apple A5X 双核，1G\r\n</li>\r\n<li>\r\n	<span>系统内存：</span>1GB\r\n</li>\r\n<li>\r\n	<span>存储容量：</span>16GB&nbsp;\r\n</li>\r\n<li>\r\n	<span>屏幕分辨率：</span>2048x1536\r\n</li>\r\n<ul class="paramlist">\r\n	<li title="双摄像头（后置：500万像素） ">\r\n		<span>摄像头：</span>双摄像头（后置：50\r\n	</li>\r\n	<li>\r\n		<span>产品重量：</span>652g\r\n	</li>\r\n	<li title="10小时左右，具体时间视使用环境而定 ">\r\n		<span>续航时间：</span>10小时左右，具体时\r\n	</li>\r\n	<li title="支持802.11a/b/g/n无线协议 ">\r\n		<span>WiFi功能：</span>支持802.11a/b/g/n\r\n	</li>\r\n	<li>\r\n		<span>上市时间：</span>2012年\r\n	</li>\r\n	<li title="电容式触摸屏，多点式触摸屏 ">\r\n		<span>屏幕描述：</span>电容式触摸屏，多点\r\n	</li>\r\n</ul>', 7, '2012-04-14 08:42:08'),
(13, '联想Y470N-IFI', '联想Y470N-IFI', '联想Y470N-IFI', '/uploadfile/image/20120414/20120414004330_69683.jpg', '本站', 'admin', '<li>\r\n	<span>屏幕尺寸：</span>14英寸&nbsp; 1366x768\r\n</li>\r\n<li title="Intel 酷睿i5 2410M ">\r\n	<span>CPU型号：</span>Intel 酷睿i5 2410M\r\n</li>\r\n<li>\r\n	<span>CPU主频：</span>2.3GHz\r\n</li>\r\n<li>\r\n	<span>内存容量：</span>4GB&nbsp; DDR3\r\n</li>\r\n<li>\r\n	<span>硬盘容量：</span>750GB&nbsp; SATA\r\n</li>\r\n<li title="NVIDIA GeForce GT 550M＋Intel GMA HD（集成于处理器） ">\r\n	<span>显卡芯片：</span>NVIDIA GeForce GT\r\n</li>\r\n<ul class="paramlist">\r\n	<li title="Windows 7 Home Basic（家庭普通版） ">\r\n		<span>操作系统：</span>Windows 7 Home Bas\r\n	</li>\r\n	<li title="集成200万像素摄像头 ">\r\n		<span>摄像头：</span>集成200万像素摄像\r\n	</li>\r\n	<li title="DVD刻录机  支持DVD SuperMulti双层刻录">\r\n		<span>光驱类型：</span>DVD刻录机&nbsp; 支持DVD\r\n	</li>\r\n	<li title="支持802.11b/g/n无线协议 ">\r\n		<span>无线网卡：</span>支持802.11b/g/n无\r\n	</li>\r\n	<li>\r\n		<span>笔记本重量：</span>2.2Kg\r\n	</li>\r\n	<li>\r\n		<span>有线网卡：</span>1000Mbps以太网卡\r\n	</li>\r\n</ul>', 1, '2012-07-25 18:39:56');

-- --------------------------------------------------------

--
-- 表的结构 `xy_zp`
--

CREATE TABLE IF NOT EXISTS `xy_zp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `descriptions` varchar(255) NOT NULL,
  `renshu` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `c_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `xy_zp`
--

INSERT INTO `xy_zp` (`id`, `title`, `keywords`, `descriptions`, `renshu`, `degree`, `sex`, `content`, `c_date`) VALUES
(3, 'php程序员', 'php程序员', 'php程序员', 5, '博士', '女', 'php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员php程序员', '2012-04-09 22:41:01'),
(4, '网站美工', '招聘ASP程序员', '招聘ASP程序员', 0, '大专', '女', '<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工网站美工\r\n</p>', '2012-07-25 18:47:05'),
(5, 'ASP程序员', 'ASP程序员', 'ASP程序员', 5, '大专', '男', '<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>\r\n<p>\r\n	招聘ASP程序员\r\n</p>', '2012-04-09 22:40:08');
