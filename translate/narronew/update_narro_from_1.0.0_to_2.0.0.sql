ALTER TABLE `narro_context` ADD `comment` TEXT NULL AFTER `context_md5` ;
ALTER TABLE `narro_context` ADD `comment_md5` VARCHAR( 32 ) NULL AFTER `comment` ;
ALTER TABLE `narro_context` ADD UNIQUE `text_id` ( `text_id` , `context_md5` , `file_id` , `comment_md5` );
ALTER TABLE `narro_context` ADD INDEX `project_id_2` ( `project_id` , `active` );

DROP TABLE `narro_context_comment`;

ALTER TABLE `narro_context_info` DROP `has_comments`;

DROP TABLE IF EXISTS `narro_context_plural_info`;
DROP TABLE IF EXISTS `narro_context_plural`;

ALTER TABLE `narro_file` ADD `header` TEXT NULL ;

ALTER TABLE `narro_file_progress` ADD `header` TEXT NULL AFTER `language_id` ;
ALTER TABLE `narro_file_progress` ADD `export` tinyint(1) NULL DEFAULT 1 AFTER `progress_percent` ;
ALTER TABLE `narro_file_progress` ADD INDEX `file_id_3` ( `file_id` , `language_id` , `export` ) ;

DROP TABLE IF EXISTS `narro_glossary_term`;

ALTER TABLE `narro_language` CHANGE `plural_form` `plural_form` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '"Plural-Forms: nplurals=2; plural=n != 1;\\n"' ;

ALTER TABLE `narro_project` ADD `source` text NULL AFTER `project_description` ;

ALTER TABLE `narro_project_progress` ADD `active` tinyint(1) NULL DEFAULT '0' AFTER `language_id` ;
ALTER TABLE `narro_project_progress` ADD `source` TEXT NULL AFTER `progress_percent` ;

ALTER TABLE `narro_suggestion` ADD INDEX `text_id_3` ( `text_id` , `language_id` );

ALTER TABLE `narro_suggestion_vote` DROP `text_id`;

CREATE TABLE IF NOT EXISTS `zend_cache` (
  `id` varchar(255) NOT NULL,
  `content` text,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `expire` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `zend_cache_id_expire_index` (`id`,`expire`)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `zend_cache_tag` (
  `name` text,
  `id` text
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `zend_cache_version` (
  `num` int(11) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB;

UPDATE `narro_project_progress` SET narro_project_progress.active=(SELECT narro_project.active FROM narro_project WHERE narro_project.project_id=narro_project_progress.project_id);
UPDATE `narro_file_progress` SET export=1;


ALTER TABLE `narro_file_progress` ADD `file_md5` VARCHAR( 32 ) NULL AFTER `language_id` ;
DROP TABLE IF EXISTS `narro_user_permission`;

ALTER TABLE `narro_file_progress` CHANGE `total_text_count` `total_text_count` INT( 10 ) NOT NULL DEFAULT '0',
CHANGE `approved_text_count` `approved_text_count` INT( 10 ) NOT NULL DEFAULT '0',
CHANGE `fuzzy_text_count` `fuzzy_text_count` INT( 10 ) NOT NULL DEFAULT '0',
CHANGE `progress_percent` `progress_percent` INT( 10 ) NOT NULL DEFAULT '0';
ALTER TABLE `narro_file_progress` CHANGE `export` `export` TINYINT( 1 ) NOT NULL DEFAULT '1';

ALTER TABLE `narro_context_info` DROP FOREIGN KEY `narro_context_info_ibfk_10` ;
ALTER TABLE `narro_context_info` DROP COLUMN `text_access_key` , DROP COLUMN `popular_suggestion_id` 
, DROP INDEX `popular_suggestion_id` ;

ALTER TABLE `narro_context` ADD COLUMN `text_access_key` CHAR(1)  NULL DEFAULT NULL  AFTER `text_id`;
ALTER TABLE `narro_context_info` CHANGE COLUMN `suggestion_access_key` `suggestion_access_key` CHAR(1)  NULL DEFAULT NULL  ;

INSERT INTO `narro_file_type` (
`file_type_id` ,
`file_type`
)
VALUES (
NULL , 'Html'
);

INSERT INTO `narro_project_type` (
`project_type_id` ,
`project_type`
)
VALUES (
NULL , 'Html'
);

ALTER TABLE `narro_language` CHANGE `plural_form` `plural_form` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '"Plural-Forms: nplurals=2; plural=n != 1;\\n"';

ALTER TABLE `narro_context` CHANGE `context_md5` `context_md5` VARCHAR( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `narro_text` CHANGE `text_value_md5` `text_value_md5` VARCHAR( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `narro_suggestion` CHANGE `suggestion_value_md5` `suggestion_value_md5` VARCHAR( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `narro_project` CHANGE `source` `data` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE `narro_project_progress` CHANGE `source` `data` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;


ALTER TABLE `narro_context` ADD `text_command_key` CHAR( 1 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `text_access_key`;
ALTER TABLE `narro_context_info` ADD `suggestion_command_key` CHAR( 1 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `suggestion_access_key`; 


UPDATE `narro_file` SET parent_id=null where active=0;
DELETE FROM narro_file WHERE active=0;
ALTER TABLE `narro_file`
ADD UNIQUE `file_path` ( `file_path` , `project_id` ); 
ALTER TABLE `narro_file` ADD INDEX ( `active` );

CREATE TABLE IF NOT EXISTS `narro_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `language_id` int(10) unsigned DEFAULT NULL,
  `project_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `message` text NOT NULL,
  `priority` smallint(6) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `language_id` (`language_id`,`project_id`),
  KEY `project_id` (`project_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

ALTER TABLE `narro_log`
  ADD CONSTRAINT `narro_log_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `narro_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `narro_log_ibfk_1` FOREIGN KEY (`language_id`) REFERENCES `narro_language` (`language_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `narro_log_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `narro_project` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE;

  ALTER TABLE `narro_suggestion` DROP FOREIGN KEY `narro_suggestion_ibfk_9` ;
ALTER TABLE `narro_suggestion` 
  ADD CONSTRAINT `narro_suggestion_ibfk_9`
  FOREIGN KEY (`language_id` )
  REFERENCES `narro_language` (`language_id` )
  ON DELETE CASCADE
  ON UPDATE CASCADE;
  
ALTER TABLE `narro_context_info` DROP FOREIGN KEY `narro_context_info_ibfk_18` ;
ALTER TABLE `narro_context_info` 
  ADD CONSTRAINT `narro_context_info_ibfk_18`
  FOREIGN KEY (`language_id` )
  REFERENCES `narro_language` (`language_id` )
  ON DELETE CASCADE
  ON UPDATE CASCADE;
  
ALTER TABLE `narro_text_comment` DROP FOREIGN KEY `narro_text_comment_ibfk_11` ;

ALTER TABLE `narro_text_comment` ADD FOREIGN KEY ( `language_id` ) REFERENCES `narro`.`narro_language` (
`language_id`
) ON DELETE CASCADE ON UPDATE CASCADE ;



ALTER TABLE `narro_user_role` DROP FOREIGN KEY `narro_user_role_ibfk_6` ;

ALTER TABLE `narro_user_role` ADD FOREIGN KEY ( `role_id` ) REFERENCES `narro_role` (
`role_id`
) ON DELETE CASCADE ON UPDATE CASCADE ;

ALTER TABLE `narro_user_role` DROP FOREIGN KEY `narro_user_role_ibfk_7` ;

ALTER TABLE `narro_user_role` ADD FOREIGN KEY ( `project_id` ) REFERENCES `narro_project` (
`project_id`
) ON DELETE CASCADE ON UPDATE CASCADE ;

ALTER TABLE `narro_user_role` DROP FOREIGN KEY `narro_user_role_ibfk_8` ;

ALTER TABLE `narro_user_role` ADD FOREIGN KEY ( `language_id` ) REFERENCES `narro_language` (
`language_id`
) ON DELETE CASCADE ON UPDATE CASCADE ;
;

DROP TABLE `zend_cache` ,
`zend_cache_tag` ,
`zend_cache_version` ;

DROP TABLE `narro_suggestion_comment`;

ALTER TABLE `narro_user` ADD `real_name` VARCHAR( 255 ) NULL AFTER `email` ;

ALTER TABLE `narro_user` ADD UNIQUE (
`real_name`
);

UPDATE narro_user SET real_name=username;

INSERT INTO `narro_file_type` (
`file_type_id` ,
`file_type`
)
VALUES (
13 , 'Srt'
);


ALTER TABLE `narro_context_info` CHANGE `suggestion_access_key` `suggestion_access_key` VARCHAR( 10 ) NULL DEFAULT NULL ,
CHANGE `suggestion_command_key` `suggestion_command_key` VARCHAR( 10 ) NULL DEFAULT NULL;

ALTER TABLE `narro_context` CHANGE `text_access_key` `text_access_key` VARCHAR( 10 ) NULL DEFAULT NULL ,
CHANGE `text_command_key` `text_command_key` VARCHAR( 10 ) NULL DEFAULT NULL;