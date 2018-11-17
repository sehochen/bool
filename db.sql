/*
Navicat MySQL Data Transfer

Source Server         : phpstudy
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : dazuoye

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-07-03 12:46:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `aboutus`
-- ----------------------------
DROP TABLE IF EXISTS `aboutus`;
CREATE TABLE `aboutus` (
  `a_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `a_name` varchar(46) DEFAULT NULL,
  `a_content` text,
  `a_other` text,
  `a_tag` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of aboutus
-- ----------------------------
INSERT INTO `aboutus` VALUES ('1', '关于我们', '<p style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 13.3333px; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(51, 51, 51); font-family: &#39;Microsoft Yahei&#39;, Helvetica, sans-serif, Lato; font-size: 14px; line-height: 24px; background-color: rgb(255, 255, 255);\">&nbsp; &nbsp;新纶科技创立于2002年，总部在深圳市南山区，2010年在深交所上市（股票代码：002341）。</span></p><p style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 13.3333px; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(51, 51, 51); font-family: &#39;Microsoft Yahei&#39;, Helvetica, sans-serif, Lato; font-size: 14px; line-height: 24px; background-color: rgb(255, 255, 255);\">&nbsp; &nbsp;国家高新技术企业、广东省著名商标；是以新材料研发、生产为本的行业综合服务商，国际领先的集洁净室工程设计、施工、维护，超净产品研发、生产、销售于一体的行业系统解决方案提供商，是中国实验室系统工程及设备提供商与行业领导者。</span></p><p style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 13.3333px; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(51, 51, 51); font-family: &#39;Microsoft Yahei&#39;, Helvetica, sans-serif, Lato; font-size: 14px; line-height: 24px; background-color: rgb(255, 255, 255);\">&nbsp; &nbsp;<span style=\"color: rgb(51, 51, 51); font-family: &#39;Microsoft Yahei&#39;, Helvetica, sans-serif, Lato; font-size: 14px; line-height: 24px; background-color: rgb(255, 255, 255);\">迄今已形成电子功能材料、新型复合材料、净洁室工程与超净产品三大核心产业，构筑起电子功能材料、锂电池包装材料、净化工程、超净产品与清洗、精密模具、医护产品等业务集群，下属30多家控股子公司，资产总规模超过65亿元。</span></span></p><p style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 13.3333px; line-height: 24px; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p>', null, null);

-- ----------------------------
-- Table structure for `config`
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `c_id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `c_title` varchar(20) DEFAULT NULL,
  `c_logo` varchar(150) DEFAULT NULL,
  `c_tel` varchar(11) DEFAULT NULL,
  `c_keyword` mediumtext,
  `c_desc` mediumint(9) DEFAULT NULL,
  `c_copy` varchar(100) DEFAULT NULL,
  `c_address` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='系统配置表';

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('1', '标题', '1498987048_head_default.gif', '17052850085', '强强强强', '8388607', 'icp', '江苏省苏州市');

-- ----------------------------
-- Table structure for `job`
-- ----------------------------
DROP TABLE IF EXISTS `job`;
CREATE TABLE `job` (
  `j_id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `j_title` varchar(150) NOT NULL,
  `j_content` mediumtext NOT NULL,
  `j_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`j_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='招聘，工作';

-- ----------------------------
-- Records of job
-- ----------------------------
INSERT INTO `job` VALUES ('1', 'php11111111111', '<p>php要求，描述</p>', '2017-07-03 12:14:50');
INSERT INTO `job` VALUES ('3', 'php工程师', '<p>php要求，描述</p>', '2017-07-03 12:11:39');
INSERT INTO `job` VALUES ('4', 'phper工程师', '<p>php要求，描述</p><p>php要求，描述</p><p>php要求，描述</p>', '2017-07-03 12:12:23');

-- ----------------------------
-- Table structure for `leave`
-- ----------------------------
DROP TABLE IF EXISTS `leave`;
CREATE TABLE `leave` (
  `l_id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `l_name` varchar(20) NOT NULL,
  `l_tel` varchar(20) NOT NULL,
  `l_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `l_title` varchar(150) NOT NULL DEFAULT '',
  `l_content` mediumtext NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='留言表';

-- ----------------------------
-- Records of leave
-- ----------------------------
INSERT INTO `leave` VALUES ('1', '布尔', '17052850084', '2017-07-03 10:57:49', '留言标题', '留言内容');

-- ----------------------------
-- Table structure for `link`
-- ----------------------------
DROP TABLE IF EXISTS `link`;
CREATE TABLE `link` (
  `l_id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `l_title` varchar(40) NOT NULL,
  `l_url` varchar(150) NOT NULL,
  `l_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of link
-- ----------------------------
INSERT INTO `link` VALUES ('1', '百度', 'http://www.baidu.com', '2017-07-03 12:25:03');
INSERT INTO `link` VALUES ('2', 'meideer', 'http://meideer.cn/', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `n_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `n_title` varchar(20) DEFAULT NULL,
  `n_content` text,
  `n_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `n_fl` tinyint(4) unsigned DEFAULT NULL,
  `n_tag` tinyint(4) unsigned DEFAULT NULL,
  PRIMARY KEY (`n_id`),
  UNIQUE KEY `n_title` (`n_title`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '新闻标题', '<p>新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题</p><p>55555555555555555</p><p>666665555</p>', '2017-06-20 22:50:09', null, null);
INSERT INTO `news` VALUES ('3', '我是测试新闻', '<p>我是测试新闻</p>', '2017-06-19 04:50:50', null, null);

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `p_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `p_name` varchar(20) NOT NULL,
  `p_fl` tinyint(4) NOT NULL,
  `p_content` text NOT NULL,
  `p_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `p_title` varchar(20) NOT NULL,
  `p_img` varchar(150) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', '1', '1', '<p><span style=\"color: rgb(51, 51, 51); font-family: &#39;Microsoft Yahei&#39;, Helvetica, sans-serif, Lato; font-size: 14px; line-height: 24px; text-align: justify; text-indent: 26.6667px; background-color: rgb(255, 255, 255);\">新纶科技</span>产品2描述</p><p><br/></p>', '2017-06-20 22:45:59', '新纶科技产品2', '1497843899_contact_07.jpg');
INSERT INTO `product` VALUES ('2', '2', '0', '<p>333333333333</p>', '2017-06-19 12:08:23', '产品标题3333333', '1497844346_pro_30.jpg');
INSERT INTO `product` VALUES ('4', '', '0', '<p>产品列表1</p>', '2017-06-19 11:36:06', '产品列表1', '1497843289_pro_07.jpg');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `u_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `u_name` varchar(20) NOT NULL,
  `u_pwd` varchar(32) NOT NULL,
  `u_img` varchar(100) DEFAULT NULL,
  `u_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `u_tag` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `u_name` (`u_name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'bool', '21232f297a57a5a743894a0e4a801fc3', '1497966504_.PNG', '2017-06-20 21:48:24', '0');
INSERT INTO `user` VALUES ('2', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1497966492_ynDZOSDJRk33D.jpg', '2017-06-20 21:48:12', null);
