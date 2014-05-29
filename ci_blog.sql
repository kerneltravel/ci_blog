/*
Navicat MySQL Data Transfer

Source Server         : 本地MySQL
Source Server Version : 50536
Source Host           : localhost:3306
Source Database       : ci_blog

Target Server Type    : MYSQL
Target Server Version : 50536
File Encoding         : 65001

Date: 2014-05-29 14:32:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增主键',
  `uid` int(10) unsigned DEFAULT '0' COMMENT '所属用户ID',
  `pid` int(10) unsigned DEFAULT '0' COMMENT '父分类ID',
  `name` varchar(255) DEFAULT '' COMMENT '分类名',
  `desc` varchar(255) DEFAULT '' COMMENT '分类描述',
  `status` tinyint(1) unsigned DEFAULT '0' COMMENT '状态：0可用，1不可用',
  `addtime` int(10) unsigned DEFAULT NULL COMMENT '添加时间',
  `updatetime` int(10) unsigned DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='分类表';

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增主键',
  `uid` int(10) unsigned DEFAULT '0' COMMENT '所属用户ID，0为游客',
  `pid` int(10) unsigned DEFAULT '0' COMMENT '父评论ID',
  `postid` int(10) unsigned DEFAULT '0' COMMENT '所属文章ID',
  `content` text COMMENT '评论内容',
  `addtime` int(10) unsigned DEFAULT '0' COMMENT '添加时间',
  `updatetime` int(10) unsigned DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='评论表';

-- ----------------------------
-- Table structure for post
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增主键',
  `uid` int(10) unsigned DEFAULT '0' COMMENT '所属用户ID',
  `cid` int(10) unsigned DEFAULT '0' COMMENT '所属分类ID',
  `title` varchar(255) DEFAULT '' COMMENT '标题',
  `content` longtext COMMENT '内容',
  `tags` varchar(255) DEFAULT '' COMMENT '所属标签ID，以英文逗号分隔',
  `up` int(10) unsigned DEFAULT '0' COMMENT '支持数',
  `down` int(10) unsigned DEFAULT '0' COMMENT '反对数',
  `addtime` int(10) unsigned DEFAULT '0' COMMENT '添加时间',
  `updatetime` int(10) unsigned DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章表';

-- ----------------------------
-- Table structure for tag
-- ----------------------------
DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增主键',
  `uid` int(10) unsigned DEFAULT '0' COMMENT '所属用户ID',
  `name` varchar(255) DEFAULT '' COMMENT '标签名',
  `addtime` int(10) unsigned DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='标签表';

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增主键',
  `username` varchar(255) DEFAULT '' COMMENT '用户名',
  `password` varchar(255) DEFAULT '' COMMENT '用户密码（md5加密）',
  `register_time` int(10) unsigned DEFAULT '0' COMMENT '注册时间',
  `last_login_time` int(10) unsigned DEFAULT '0' COMMENT '最后登录时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='用户表';
