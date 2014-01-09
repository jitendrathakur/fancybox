
--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` varchar(512) NOT NULL,
  `original_tag` varchar(1024) DEFAULT NULL,
  `type` varchar(64) DEFAULT NULL,
  `comment` varchar(1024) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `createdBy` varchar(64) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modifiedBy` varchar(64) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=260 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

insert into tags values ('tag1', 'tag1', 'CODE', 'This was created from code',NOW(),'POPULATOR', '', '', 1);


--
-- Table structure for table `potentries`
--

DROP TABLE IF EXISTS `potentries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `potentries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` varchar(512) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `linenumber` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `createdBy` varchar(64) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=260 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

insert into potentries values ('', 'tag1', 'edit.ctp', '99',NOW(),'AUTO', '1');

--
-- Table structure for table `transentries`
--

DROP TABLE IF EXISTS `transentries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transentries` (
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
) ENGINE=MyISAM AUTO_INCREMENT=260 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

insert into transentries values ('', 'tag1', 'en', 'tag1_translated',NOW(),'CBM',NOW(),'CBM', '1');

