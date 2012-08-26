SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
DROP TABLE IF EXISTS `narro_suggestion_comment`;
CREATE TABLE IF NOT EXISTS `narro_suggestion_comment` (
  `comment_id` int(10) unsigned NOT NULL auto_increment,
  `suggestion_id` bigint(20) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
  `comment_text` text NOT NULL,
  `comment_text_md5` varchar(128) NOT NULL,
  `created` timestamp NOT NULL default '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`comment_id`),
  UNIQUE KEY `suggestion_id_2` (`suggestion_id`,`user_id`,`language_id`,`comment_text_md5`),
  KEY `suggestion_id` (`suggestion_id`),
  KEY `user_id` (`user_id`),
  KEY `language_id` (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `narro_text_comment`;
CREATE TABLE IF NOT EXISTS `narro_text_comment` (
  `text_comment_id` bigint(20) unsigned NOT NULL auto_increment,
  `text_id` bigint(20) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
  `created` timestamp NOT NULL default '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL default '0000-00-00 00:00:00',
  `comment_text` text NOT NULL,
  `comment_text_md5` varchar(128) NOT NULL,
  PRIMARY KEY  (`text_comment_id`),
  UNIQUE KEY `text_id_2` (`text_id`,`user_id`,`comment_text_md5`,`language_id`),
  KEY `text_id` (`text_id`),
  KEY `user_id` (`user_id`),
  KEY `language_id` (`language_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

ALTER TABLE `narro_suggestion_comment`
  ADD CONSTRAINT `narro_suggestion_comment_ibfk_1` FOREIGN KEY (`suggestion_id`) REFERENCES `narro_suggestion` (`suggestion_id`),
  ADD CONSTRAINT `narro_suggestion_comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `narro_user` (`user_id`),
  ADD CONSTRAINT `narro_suggestion_comment_ibfk_3` FOREIGN KEY (`language_id`) REFERENCES `narro_language` (`language_id`);

ALTER TABLE `narro_text_comment`
  ADD CONSTRAINT `narro_text_comment_ibfk_10` FOREIGN KEY (`user_id`) REFERENCES `narro_user` (`user_id`),
  ADD CONSTRAINT `narro_text_comment_ibfk_11` FOREIGN KEY (`language_id`) REFERENCES `narro_language` (`language_id`),
  ADD CONSTRAINT `narro_text_comment_ibfk_9` FOREIGN KEY (`text_id`) REFERENCES `narro_text` (`text_id`);

SET FOREIGN_KEY_CHECKS=1;