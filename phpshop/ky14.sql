-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2022-11-24 03:01:46
-- 服务器版本： 8.0.27
-- PHP 版本： 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `ky14`
--

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

DROP TABLE IF EXISTS `goods`;
CREATE TABLE IF NOT EXISTS `goods` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `typeid` int UNSIGNED NOT NULL,
  `price` double(6,2) UNSIGNED NOT NULL,
  `total` int UNSIGNED NOT NULL,
  `pic` varchar(32) NOT NULL,
  `note` text,
  `addtime` int UNSIGNED NOT NULL,
  `updatetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb3;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`id`, `name`, `typeid`, `price`, `total`, `pic`, `note`, `addtime`, `updatetime`) VALUES
(24, '冰酒加拿大原装进口VQA晚收冰白葡萄酒375ml甜白葡萄酒', 1, 68.00, 23, '202211210356313978.jpg', '12', 1669002991, '2022-11-21 03:58:51'),
(25, '零下8度奇迹 液体黄金德国进口西万尼甜白葡萄酒冰酒Eiswein', 1, 163.00, 22, '202211210358224645.jpg', '', 1669003102, NULL),
(26, '加拿大晚收冰白葡萄酒甜白葡萄酒进口维戴尔冰酒赠香槟杯', 1, 118.00, 45, '202211210359326158.jpg', '', 1669003172, NULL),
(27, 'CANA CABIN加拿大派利特瑞原瓶进口Pillitteri冰酒酒庄VQA认证甜葡萄酒红酒甜红赤霞珠晚收冰红375ml单支装', 1, 208.00, 6, '202211210441087800.jpg', '', 1669005668, NULL),
(20, '辽宁袜子批发 男士按摩底高腰袜 秋冬款纯棉袜', 4, 2.00, 1111, '202106282223526347.png', '辽宁袜子批发 男士按摩底高腰袜 秋冬款纯棉袜辽宁袜子批发 男士按摩底高腰袜 秋冬款纯棉袜辽宁袜子批发 男士按摩底高腰袜 秋冬款纯棉袜辽宁袜子批发 男士按摩底高腰袜 秋冬款纯棉袜辽宁袜子批发 男士按摩底高腰袜 秋冬款纯棉袜辽宁袜子批发 男士按摩底高腰袜 秋冬款纯棉袜辽宁袜子批发 男士按摩底高腰袜 秋冬款纯棉袜辽宁袜子批发 男士按摩底高腰袜 秋冬款纯棉袜', 1624890232, NULL),
(19, '昆明儿童帽 志愿者帽子 螺蛳湾红色帽子印字', 3, 6.00, 111, '202106282223064510.png', '昆明儿童帽 志愿者帽子 螺蛳湾红色帽子印字昆明儿童帽 志愿者帽子 螺蛳湾红色帽子印字昆明儿童帽 志愿者帽子 螺蛳湾红色帽子印字昆明儿童帽 志愿者帽子 螺蛳湾红色帽子印字昆明儿童帽 志愿者帽子 螺蛳湾红色帽子印字昆明儿童帽 志愿者帽子 螺蛳湾红色帽子印字昆明儿童帽 志愿者帽子 螺蛳湾红色帽子印字昆明儿童帽 志愿者帽子 螺蛳湾红色帽子印字昆明儿童帽 志愿者帽子 螺蛳湾红色帽子印字昆明儿童帽 志愿者帽子 螺蛳湾红色帽子印字昆明儿童帽 志愿者帽子 螺蛳湾红色帽子印字昆明儿童帽 志愿者帽子 螺蛳湾红色帽子印字昆明儿童帽 志愿者帽子 螺蛳湾红色帽子印字昆明儿童帽 志愿者帽子 螺蛳湾红色帽子印字', 1624890186, NULL),
(18, '工作帽子_针织帽子价格', 3, 8.00, 1111, '202106282222224635.png', '工作帽子_针织帽子价格工作帽子_针织帽子价格工作帽子_针织帽子价格工作帽子_针织帽子价格工作帽子_针织帽子价格工作帽子_针织帽子价格工作帽子_针织帽子价格工作帽子_针织帽子价格工作帽子_针织帽子价格工作帽子_针织帽子价格工作帽子_针织帽子价格工作帽子_针织帽子价格工作帽子_针织帽子价格工作帽子_针织帽子价格工作帽子_针织帽子价格', 1624890142, NULL),
(17, '三件宝 加绒 加绒小脚裤子', 2, 60.00, 11111, '202106282221378096.png', '三件宝 加绒 加绒小脚裤子三件宝 加绒 加绒小脚裤子三件宝 加绒 加绒小脚裤子三件宝 加绒 加绒小脚裤子三件宝 加绒 加绒小脚裤子三件宝 加绒 加绒小脚裤子三件宝 加绒 加绒小脚裤子三件宝 加绒 加绒小脚裤子三件宝 加绒 加绒小脚裤子三件宝 加绒 加绒小脚裤子三件宝 加绒 加绒小脚裤子三件宝 加绒 加绒小脚裤子三件宝 加绒 加绒小脚裤子', 1624890097, NULL),
(15, '2016秋款男士唐装羊毛外套中年爸爸装服装', 1, 220.00, 999, '202106282215556104.png', '2016秋款男士唐装羊毛外套中年爸爸装服装2016秋款男士唐装羊毛外套中年爸爸装服装2016秋款男士唐装羊毛外套中年爸爸装服装2016秋款男士唐装羊毛外套中年爸爸装服装', 1624889755, NULL),
(16, '夏季地摊几元男士牛仔中裤 短七分裤 杂款货源 商务大码裤子', 2, 12.00, 111111, '202106282217225828.png', '夏季地摊几元男士牛仔中裤 短七分裤 杂款货源 商务大码裤子夏季地摊几元男士牛仔中裤 短七分裤 杂款货源 商务大码裤子夏季地摊几元男士牛仔中裤 短七分裤 杂款货源 商务大码裤子', 1624889842, NULL),
(14, '夏季青年时尚唐装男短袖潮款中式立领服装', 1, 110.00, 1000, '202106282213034956.png', '新5 厂家直销 夏季青年时尚唐装男短袖潮款中式立领服装 6005新5 厂家直销 夏季青年时尚唐装男短袖潮款中式立领服装 6005新5 厂家直销 夏季青年时尚唐装男短袖潮款中式立领服装 6005', 1624889583, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tb_order`
--

DROP TABLE IF EXISTS `tb_order`;
CREATE TABLE IF NOT EXISTS `tb_order` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `goods_id` int DEFAULT NULL,
  `order_sn` varchar(50) DEFAULT NULL COMMENT '订单号',
  `order_money` float(10,2) DEFAULT NULL COMMENT '订单金额',
  `consignee` varchar(20) DEFAULT NULL COMMENT '收货人',
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL COMMENT '收货地址',
  `createtime` datetime DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

--
-- 转存表中的数据 `tb_order`
--

INSERT INTO `tb_order` (`id`, `user_id`, `goods_id`, `order_sn`, `order_money`, `consignee`, `phone`, `address`, `createtime`, `updatetime`) VALUES
(1, 1, 7, '2020062038683', 19.90, '王冬冬', '18259000000', '福建省测试路', '2020-06-20 10:23:31', NULL),
(2, 5, 6, '2021062825744', 39.80, '清宇', '13616005393', '福州五十路闽江饭店1321', '2021-06-28 21:20:09', NULL),
(3, 5, 22, '2021062893004', 3.00, '清宇', '13515333303', '福州火星区地球村132号', '2021-06-28 22:36:57', NULL),
(8, 6, 22, '2022112033383', 3.00, '123', '123', '123', '2022-11-20 14:57:02', NULL),
(9, 6, 24, '2022112262060', 68.00, '123', '123', '132', '2022-11-22 00:33:52', NULL),
(11, 8, 25, '2022112362035', 163.00, '肖劲东', '13232113231', '南山区粤海街道深圳大学', '2022-11-23 15:46:33', NULL),
(12, 8, 26, '2022112335332', 118.00, '钟泽豪', '321323212132', '南山区粤海街道深圳大学', '2022-11-23 15:46:57', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `createtime`, `updatetime`) VALUES
(1, 'admin', '123', '2020-06-05 10:54:47', '2022-11-19 07:16:59'),
(2, 'tom', '96e79218965eb72c92a549dd5a330112', '2020-06-05 11:38:04', NULL),
(4, 'test', '123', '2020-06-09 00:35:18', '2022-11-23 02:43:57'),
(5, 'qingyu', '202cb962ac59075b964b07152d234b70', '2021-06-24 20:28:09', NULL),
(8, '123', '123', '2022-11-23 02:48:13', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
