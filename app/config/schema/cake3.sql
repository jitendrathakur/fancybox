-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2014 at 04:23 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cake3`
--

-- --------------------------------------------------------

--
-- Table structure for table `potentries`
--

CREATE TABLE IF NOT EXISTS `potentries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` varchar(512) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `linenumber` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `createdBy` varchar(64) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=266 ;

--
-- Dumping data for table `potentries`
--

INSERT INTO `potentries` (`id`, `tag_id`, `page`, `linenumber`, `created`, `createdBy`, `status`) VALUES
(0, 'tag1', 'edit.ctp', 99, '2014-01-10 18:12:40', 'AUTO', 1),
(260, '260', 'dfgfdg', 0, '2014-01-10 14:40:32', 'dfgfd', 0),
(261, '260', 'dfgfdg', 0, '2014-01-10 14:41:07', 'fdgfdg', 0),
(262, '260', 'fdgfdg', 0, '2014-01-10 16:01:42', 'dfgdfg', 0),
(263, '260', 'dsfdsf', 0, '2014-01-10 16:03:00', 'sdfdsf', 0),
(264, '260', 'dsfsd', 0, '2014-01-10 16:03:42', 'sdfsd', 0),
(265, '260', 'dsfdsf', 0, '2014-01-10 16:05:25', 'dfdsf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `original_tag` varchar(1024) DEFAULT NULL,
  `type` varchar(64) DEFAULT NULL,
  `comment` varchar(1024) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `createdBy` varchar(64) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modifiedBy` varchar(64) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=286 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `original_tag`, `type`, `comment`, `created`, `createdBy`, `modified`, `modifiedBy`, `status`) VALUES
(260, 'tag1', 'CODE', 'This was created from code', '2014-01-10 18:12:40', 'POPULATOR', '0000-00-00 00:00:00', '', 1),
(261, 'test', 'test', 'test', '2014-01-10 13:57:13', '', '2014-01-10 13:57:13', '', NULL),
(262, 'fgdfg', 'dfgfdg', 'dfgdfg', '2014-01-10 14:29:58', 'hjhjjh', '2014-01-10 14:29:58', 'jhjh', 1),
(263, 'dssad', 'asdasd', 'asdsad', '2014-01-10 14:31:15', 'asdasd', '2014-01-10 14:31:15', 'sads', 0),
(264, 'dfgfdg', 'dfgfdg', 'fdgdfg', '2014-01-10 14:33:30', 'dfgfdg', '2014-01-10 14:33:30', 'dfgdfg', 0),
(265, 'dfgfdgfdg', 'dfgfdgd', 'fgdfgdfg', '2014-01-10 14:33:38', 'fdgfd', '2014-01-10 14:33:38', 'gfdgf', 0),
(266, 'dfgdfgfdg', 'gfdgdf', 'gfdgfd', '2014-01-10 14:33:45', 'gfdgdf', '2014-01-10 14:33:45', 'gfdgdg', 0),
(267, 'dfgfdgdfg', 'dfgfdgfdgdfg', 'dfgdfgf', '2014-01-10 14:33:54', 'dfgdfg', '2014-01-10 14:33:54', 'dfgdfgd', 0),
(268, 'dfgfdgdfgfdgfdg', 'dfgfdgddfgfd', 'dfgfdg', '2014-01-10 14:34:02', 'dfgfdg', '2014-01-10 14:34:02', 'dfgfdg', 0),
(269, 'dfgfdgdfd', 'gfdgfdg', 'dfgfdg', '2014-01-10 14:34:24', 'dfgdfg', '2014-01-10 14:34:24', 'dfgfdg', 0),
(270, 'dfgdfg', 'dfgfdg', 'dfgfdg', '2014-01-10 14:34:39', 'dfgfdg', '2014-01-10 14:34:39', 'dfgfdg', 0),
(271, 'dsfsdf', 'sdfsdf', 'sdfdsf', '2014-01-10 14:38:16', 'sdfdsf', '2014-01-10 14:38:16', 'sdfsdf', 0),
(272, 'fgdfg', 'dfgfdg', 'dfgdfg', '2014-01-10 14:29:58', 'hjhjjh', '2014-01-10 14:29:58', 'jhjh', 1),
(273, 'fgdfg', 'dfgfdg', 'dfgdfg', '2014-01-10 14:29:58', 'hjhjjh', '2014-01-10 14:29:58', 'jhjh', 1),
(274, 'fgdfg', 'dfgfdg', 'dfgdfg', '2014-01-10 14:29:58', 'hjhjjh', '2014-01-10 14:29:58', 'jhjh', 1),
(275, 'fgdfg', 'dfgfdg', 'dfgdfg', '2014-01-10 14:29:58', 'hjhjjh', '2014-01-10 14:29:58', 'jhjh', 1),
(276, 'fgdfg', 'dfgfdg', 'dfgdfg', '2014-01-10 14:29:58', 'hjhjjh', '2014-01-10 14:29:58', 'jhjh', 1),
(277, 'fgdfg', 'dfgfdg', 'dfgdfg', '2014-01-10 14:29:58', 'hjhjjh', '2014-01-10 14:29:58', 'jhjh', 1),
(278, 'fgdfg', 'dfgfdg', 'dfgdfg', '2014-01-10 14:29:58', 'hjhjjh', '2014-01-10 14:29:58', 'jhjh', 1),
(279, 'fgdfg', 'dfgfdg', 'dfgdfg', '2014-01-10 14:29:58', 'hjhjjh', '2014-01-10 14:29:58', 'jhjh', 1),
(280, 'fgdfg', 'dfgfdg', 'dfgdfg', '2014-01-10 14:29:58', 'hjhjjh', '2014-01-10 14:29:58', 'jhjh', 1),
(281, 'fgdfg', 'dfgfdg', 'dfgdfg', '2014-01-10 14:29:58', 'hjhjjh', '2014-01-10 14:29:58', 'jhjh', 1),
(282, 'fgdfg', 'dfgfdg', 'dfgdfg', '2014-01-10 14:29:58', 'hjhjjh', '2014-01-10 14:29:58', 'jhjh', 1),
(283, 'fgdfg', 'dfgfdg', 'dfgdfg', '2014-01-10 14:29:58', 'hjhjjh', '2014-01-10 14:29:58', 'jhjh', 1),
(284, 'fgdfg', 'dfgfdg', 'dfgdfg', '2014-01-10 14:29:58', 'hjhjjh', '2014-01-10 14:29:58', 'jhjh', 1),
(285, 'fgdfg', 'dfgfdg', 'dfgdfg', '2014-01-10 14:29:58', 'hjhjjh', '2014-01-10 14:29:58', 'jhjh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transentries`
--

CREATE TABLE IF NOT EXISTS `transentries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` varchar(512) DEFAULT NULL,
  `language` varchar(8) DEFAULT NULL,
  `translation` varchar(1024) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `createdBy` varchar(64) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modifiedBy` varchar(64) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=263 ;

--
-- Dumping data for table `transentries`
--

INSERT INTO `transentries` (`id`, `tag_id`, `language`, `translation`, `created`, `createdBy`, `modified`, `modifiedBy`, `status`) VALUES
(0, 'tag1', 'en', 'tag1_translated', '2014-01-10 18:12:40', 'CBM', '2014-01-10 18:12:40', 'CBM', 1),
(260, '260', 'fdgfdg', 'dfgfd', '2014-01-10 14:40:38', 'gdfgdfg', '2014-01-10 14:40:38', 'dfgfdg', 0),
(261, '260', 'dfgfdg', 'dfgfdg', '2014-01-10 14:40:58', 'dfgfd', '2014-01-10 14:40:58', 'gfdgdf', 0),
(262, '260', 'sdfdsf', 'sdfsdf', '2014-01-10 16:05:39', 'sdfdsf', '2014-01-10 16:05:39', 'sdfds', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
