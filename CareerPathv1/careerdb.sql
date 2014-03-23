-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `careerpath`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `major`
-- 

CREATE TABLE `major` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- dump ตาราง `major`
-- 

INSERT INTO `major` VALUES (1, 'Software Engineering');
INSERT INTO `major` VALUES (2, 'Information Technology');
INSERT INTO `major` VALUES (3, 'Electronic Business');
INSERT INTO `major` VALUES (4, 'Environmental Geoinformatics');
INSERT INTO `major` VALUES (5, 'Environmental Technology and Management');
