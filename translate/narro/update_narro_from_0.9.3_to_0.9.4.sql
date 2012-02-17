INSERT INTO `narro`.`narro_permission` (`permission_id` ,`permission_name`) VALUES (NULL , 'Can mass approve');

CREATE TABLE IF NOT EXISTS `narro_file_progress` (
  `file_progress_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file_id` int(10) unsigned NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
  `total_text_count` int(10) NOT NULL,
  `approved_text_count` int(10) NOT NULL,
  `fuzzy_text_count` int(10) NOT NULL,
  `progress_percent` int(10) NOT NULL,
  PRIMARY KEY (`file_progress_id`),
  UNIQUE KEY `file_id` (`file_id`,`language_id`),
  KEY `language_id` (`language_id`),
  KEY `file_id_2` (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `narro_project_progress` (
  `project_progress_id` int(10) NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
  `total_text_count` int(10) unsigned NOT NULL,
  `fuzzy_text_count` int(10) unsigned NOT NULL,
  `approved_text_count` int(10) unsigned NOT NULL,
  `progress_percent` int(10) unsigned NOT NULL,
  PRIMARY KEY (`project_progress_id`),
  UNIQUE KEY `project_id` (`project_id`,`language_id`),
  KEY `language_id` (`language_id`),
  KEY `project_id_2` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


ALTER TABLE `narro_file_progress`
  ADD CONSTRAINT `narro_file_progress_ibfk_1` FOREIGN KEY (`file_id`) REFERENCES `narro_file` (`file_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `narro_file_progress_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `narro_language` (`language_id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `narro_project_progress`
  ADD CONSTRAINT `narro_project_progress_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `narro_project` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `narro_project_progress_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `narro_language` (`language_id`) ON DELETE CASCADE ON UPDATE CASCADE;

