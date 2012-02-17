SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE narro_context (
  context_id bigint(20) unsigned NOT NULL auto_increment,
  text_id bigint(20) unsigned NOT NULL,
  project_id int(10) unsigned NOT NULL,
  context text NOT NULL,
  context_md5 varchar(255) NOT NULL,
  file_id int(10) unsigned NOT NULL,
  created timestamp NOT NULL default '0000-00-00 00:00:00',
  modified timestamp NOT NULL default '0000-00-00 00:00:00',
  active tinyint(1) unsigned NOT NULL default '1',
  PRIMARY KEY  (context_id),
  KEY string_id (text_id),
  KEY file_id (file_id),
  KEY project_id (project_id),
  KEY context_md5 (context_md5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE narro_context_comment (
  comment_id bigint(20) unsigned NOT NULL auto_increment,
  context_id bigint(20) unsigned NOT NULL,
  user_id int(11) unsigned NOT NULL,
  language_id int(10) unsigned NOT NULL,
  created timestamp NOT NULL default '0000-00-00 00:00:00',
  modified timestamp NOT NULL default '0000-00-00 00:00:00',
  comment_text text NOT NULL,
  comment_text_md5 varchar(128) NOT NULL,
  PRIMARY KEY  (comment_id),
  UNIQUE KEY context_id_2 (context_id,language_id,comment_text_md5),
  KEY context_id (context_id),
  KEY user_id (user_id),
  KEY language_id (language_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE narro_context_info (
  context_info_id bigint(20) unsigned NOT NULL auto_increment,
  context_id bigint(20) unsigned NOT NULL,
  language_id int(10) unsigned NOT NULL,
  validator_user_id int(10) unsigned default NULL,
  valid_suggestion_id bigint(20) unsigned default NULL,
  popular_suggestion_id bigint(20) unsigned default NULL,
  has_comments tinyint(1) NOT NULL default '0',
  has_suggestions tinyint(1) unsigned default '0',
  text_access_key varchar(2) default NULL,
  suggestion_access_key varchar(2) default NULL,
  created timestamp NOT NULL default '0000-00-00 00:00:00',
  modified timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (context_info_id),
  UNIQUE KEY context_id_2 (context_id,language_id),
  KEY context_id (context_id),
  KEY language_id (language_id),
  KEY suggestion_id (valid_suggestion_id),
  KEY popular_suggestion_id (popular_suggestion_id),
  KEY validator_user_id (validator_user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE narro_file (
  file_id int(10) unsigned NOT NULL auto_increment,
  file_name varchar(255) NOT NULL,
  file_path varchar(255) NOT NULL,
  file_md5 varchar(32) default NULL,
  parent_id int(10) unsigned default NULL,
  type_id tinyint(3) unsigned NOT NULL,
  project_id int(10) unsigned NOT NULL,
  active tinyint(1) NOT NULL default '1',
  created timestamp NOT NULL default '0000-00-00 00:00:00',
  modified timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (file_id),
  UNIQUE KEY file_name (file_name,parent_id),
  KEY type_id (type_id),
  KEY project_id (project_id),
  KEY parent_id (parent_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE narro_file_type (
  file_type_id tinyint(3) unsigned NOT NULL auto_increment,
  file_type varchar(32) NOT NULL,
  PRIMARY KEY  (file_type_id),
  UNIQUE KEY UQ_qdrupal_narro_file_type_1 (file_type)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO narro_file_type (file_type_id, file_type) VALUES(9, 'DumbGettextPo');
INSERT INTO narro_file_type (file_type_id, file_type) VALUES(3, 'Folder');
INSERT INTO narro_file_type (file_type_id, file_type) VALUES(1, 'GettextPo');
INSERT INTO narro_file_type (file_type_id, file_type) VALUES(4, 'MozillaDtd');
INSERT INTO narro_file_type (file_type_id, file_type) VALUES(7, 'MozillaInc');
INSERT INTO narro_file_type (file_type_id, file_type) VALUES(5, 'MozillaIni');
INSERT INTO narro_file_type (file_type_id, file_type) VALUES(6, 'Narro');
INSERT INTO narro_file_type (file_type_id, file_type) VALUES(2, 'OpenOfficeSdf');
INSERT INTO narro_file_type (file_type_id, file_type) VALUES(10, 'PhpMyAdmin');
INSERT INTO narro_file_type (file_type_id, file_type) VALUES(8, 'Svg');

CREATE TABLE narro_language (
  language_id int(10) unsigned NOT NULL auto_increment,
  language_name varchar(128) NOT NULL,
  language_code varchar(64) NOT NULL,
  country_code varchar(64) NOT NULL,
  dialect_code varchar(64) default NULL,
  encoding varchar(10) NOT NULL,
  text_direction varchar(3) NOT NULL default 'ltr',
  special_characters varchar(255) default NULL,
  plural_form varchar(255) NOT NULL default '"Plural-Forms: nplurals=2; plural=n != 1;\\n"',
  active tinyint(1) default '1',
  PRIMARY KEY  (language_id),
  UNIQUE KEY language_name (language_name),
  UNIQUE KEY language_code (language_code)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


INSERT INTO narro_language (language_id, language_name, language_code, country_code, dialect_code, encoding, text_direction, special_characters, plural_form, active) VALUES(1, 'English US', 'en-US', 'en-US', NULL, 'UTF-8', 'ltr', '', '"Plural-Forms: nplurals=2; plural=n != 1;\\n"', 1);
INSERT INTO narro_language (language_id, language_name, language_code, country_code, dialect_code, encoding, text_direction, special_characters, plural_form, active) VALUES(2, 'Romanian', 'ro', 'ro', NULL, 'UTF-8', 'ltr', NULL, '"Plural-Forms:  nplurals=3; plural=n==1 ? 0 : (n==0 || (n%100 > 0 && n%100 < 20)) ? 1 : 2;\\n"', 1);

CREATE TABLE narro_permission (
  permission_id int(10) unsigned NOT NULL auto_increment,
  permission_name varchar(128) NOT NULL,
  PRIMARY KEY  (permission_id),
  UNIQUE KEY permission_name (permission_name)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO narro_permission (permission_id, permission_name) VALUES(12, 'Administrator');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(16, 'Can add language');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(14, 'Can add project');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(4, 'Can comment');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(5, 'Can delete any suggestion');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(17, 'Can delete language');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(11, 'Can delete project');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(6, 'Can edit any suggestion');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(15, 'Can edit language');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(13, 'Can edit project');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(9, 'Can export file');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(19, 'Can export project');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(8, 'Can import file');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(18, 'Can import project');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(10, 'Can manage project');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(21, 'Can manage roles');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(7, 'Can manage users');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(1, 'Can suggest');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(20, 'Can upload project');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(3, 'Can approve');
INSERT INTO narro_permission (permission_id, permission_name) VALUES(2, 'Can vote');
INSERT INTO narro_permission (permission_id ,permission_name) VALUES (22 , 'Can mass approve');

CREATE TABLE narro_project (
  project_id int(10) unsigned NOT NULL auto_increment,
  project_category_id int(11) unsigned default '1',
  project_name varchar(255) NOT NULL,
  project_type smallint(5) unsigned NOT NULL,
  project_description varchar(255) default NULL,
  active tinyint(3) unsigned NOT NULL default '1',
  PRIMARY KEY  (project_id),
  UNIQUE KEY project_name (project_name),
  KEY project_type (project_type),
  KEY project_category_id (project_category_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `narro_project` (`project_id`, `project_category_id`, `project_name`, `project_type`, `project_description`, `active`) VALUES
(1, NULL, 'Narro', 4, NULL, 1);

CREATE TABLE narro_project_category (
  project_category_id int(11) unsigned NOT NULL auto_increment,
  category_name varchar(255) NOT NULL,
  category_description varchar(255) NOT NULL,
  PRIMARY KEY  (project_category_id),
  UNIQUE KEY category_name (category_name)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO narro_project_category (project_category_id, category_name, category_description) VALUES(1, 'General', '');

CREATE TABLE narro_project_type (
  project_type_id smallint(5) unsigned NOT NULL auto_increment,
  project_type varchar(64) NOT NULL,
  PRIMARY KEY  (project_type_id),
  UNIQUE KEY project_type (project_type)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO narro_project_type (project_type_id, project_type) VALUES(6, 'DumbGettextPo');
INSERT INTO narro_project_type (project_type_id, project_type) VALUES(7, 'Generic');
INSERT INTO narro_project_type (project_type_id, project_type) VALUES(3, 'Gettext');
INSERT INTO narro_project_type (project_type_id, project_type) VALUES(1, 'Mozilla');
INSERT INTO narro_project_type (project_type_id, project_type) VALUES(4, 'Narro');
INSERT INTO narro_project_type (project_type_id, project_type) VALUES(2, 'OpenOffice');
INSERT INTO narro_project_type (project_type_id, project_type) VALUES(5, 'Svg');

CREATE TABLE narro_role (
  role_id int(10) unsigned NOT NULL auto_increment,
  role_name varchar(128) NOT NULL,
  PRIMARY KEY  (role_id),
  UNIQUE KEY role_name (role_name)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO narro_role (role_id, role_name) VALUES(5, 'Administrator');
INSERT INTO narro_role (role_id, role_name) VALUES(1, 'Anonymous');
INSERT INTO narro_role (role_id, role_name) VALUES(3, 'Approver');
INSERT INTO narro_role (role_id, role_name) VALUES(4, 'Project manager');
INSERT INTO narro_role (role_id, role_name) VALUES(2, 'User');

CREATE TABLE narro_role_permission (
  role_permission_id int(10) unsigned NOT NULL auto_increment,
  role_id int(10) unsigned NOT NULL,
  permission_id int(10) unsigned NOT NULL,
  PRIMARY KEY  (role_permission_id),
  KEY role_id (role_id),
  KEY permission_id (permission_id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(1, 2, 4);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(2, 2, 2);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(3, 2, 1);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(4, 3, 4);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(5, 3, 2);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(6, 3, 1);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(7, 3, 6);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(8, 3, 5);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(9, 4, 4);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(10, 4, 5);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(11, 4, 6);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(12, 4, 9);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(13, 4, 19);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(14, 4, 8);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(15, 4, 18);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(16, 4, 10);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(17, 4, 7);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(18, 4, 1);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(19, 4, 20);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(20, 4, 3);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(21, 4, 2);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(22, 5, 12);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(23, 5, 16);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(24, 5, 14);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(25, 5, 4);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(26, 5, 5);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(27, 5, 17);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(28, 5, 11);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(29, 5, 6);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(30, 5, 15);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(31, 5, 13);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(32, 5, 9);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(33, 5, 19);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(34, 5, 8);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(35, 5, 18);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(36, 5, 10);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(37, 5, 21);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(38, 5, 7);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(39, 5, 1);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(40, 5, 20);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(41, 5, 3);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(42, 5, 2);
INSERT INTO narro_role_permission (role_permission_id, role_id, permission_id) VALUES(43, 3, 3);

CREATE TABLE narro_suggestion (
  suggestion_id bigint(20) unsigned NOT NULL auto_increment,
  user_id int(10) unsigned default NULL,
  text_id bigint(20) unsigned NOT NULL,
  language_id int(10) unsigned NOT NULL,
  suggestion_value text NOT NULL,
  suggestion_value_md5 varchar(128) NOT NULL,
  suggestion_char_count int(10) unsigned NOT NULL,
  has_comments tinyint(1) default '0',
  created timestamp NOT NULL default '0000-00-00 00:00:00',
  modified timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (suggestion_id),
  UNIQUE KEY text_id_2 (text_id,language_id,suggestion_value_md5),
  KEY user_id (user_id),
  KEY text_id (text_id),
  KEY language_id (language_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE narro_suggestion_comment (
  comment_id int(10) unsigned NOT NULL auto_increment,
  suggestion_id bigint(20) unsigned NOT NULL,
  user_id int(10) unsigned NOT NULL,
  language_id int(10) unsigned NOT NULL,
  comment_text text NOT NULL,
  comment_text_md5 varchar(128) NOT NULL,
  created timestamp NOT NULL default '0000-00-00 00:00:00',
  modified timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (comment_id),
  UNIQUE KEY suggestion_id_2 (suggestion_id,user_id,language_id,comment_text_md5),
  KEY suggestion_id (suggestion_id),
  KEY user_id (user_id),
  KEY language_id (language_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE narro_suggestion_vote (
  suggestion_id bigint(20) unsigned NOT NULL,
  context_id bigint(20) unsigned NOT NULL,
  user_id int(10) unsigned NOT NULL,
  vote_value tinyint(3) NOT NULL,
  created timestamp NOT NULL default '0000-00-00 00:00:00',
  modified timestamp NOT NULL default '0000-00-00 00:00:00',
  UNIQUE KEY suggestion_id (suggestion_id,user_id,context_id),
  KEY suggestion_id_2 (suggestion_id),
  KEY user_id (user_id),
  KEY context_id (context_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE narro_text (
  text_id bigint(20) unsigned NOT NULL auto_increment,
  text_value text NOT NULL,
  text_value_md5 varchar(64) NOT NULL,
  text_char_count smallint(5) unsigned NOT NULL default '0',
  has_comments tinyint(1) default '0',
  created timestamp NOT NULL default '0000-00-00 00:00:00',
  modified timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (text_id),
  UNIQUE KEY string_value_md5 (text_value_md5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE narro_text_comment (
  text_comment_id bigint(20) unsigned NOT NULL auto_increment,
  text_id bigint(20) unsigned NOT NULL,
  user_id int(10) unsigned NOT NULL,
  language_id int(10) unsigned NOT NULL,
  created timestamp NOT NULL default '0000-00-00 00:00:00',
  modified timestamp NOT NULL default '0000-00-00 00:00:00',
  comment_text text NOT NULL,
  comment_text_md5 varchar(128) NOT NULL,
  PRIMARY KEY  (text_comment_id),
  UNIQUE KEY text_id_2 (text_id,user_id,comment_text_md5,language_id),
  KEY text_id (text_id),
  KEY user_id (user_id),
  KEY language_id (language_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE narro_user (
  user_id int(10) unsigned NOT NULL,
  username varchar(128) NOT NULL,
  `password` varchar(64) NOT NULL,
  email varchar(128) NOT NULL,
  `data` text,
  PRIMARY KEY  (user_id),
  UNIQUE KEY username (username),
  UNIQUE KEY email (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO narro_user (user_id, username, password, email, data) VALUES(0, 'Anonymous', '', '', '');

CREATE TABLE narro_user_role (
  user_role_id int(10) unsigned NOT NULL auto_increment,
  user_id int(10) unsigned NOT NULL,
  role_id int(10) unsigned NOT NULL,
  project_id int(10) unsigned default NULL,
  language_id int(10) unsigned default NULL,
  PRIMARY KEY  (user_role_id),
  UNIQUE KEY user_id (user_id,role_id,project_id,language_id),
  KEY role_id (role_id),
  KEY project_id (project_id),
  KEY language_id (language_id),
  KEY user_id_2 (user_id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `narro_file_progress` (
  `file_progress_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file_id` int(10) unsigned NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
  `total_text_count` int(10) unsigned NOT NULL,
  `approved_text_count` int(10) unsigned NOT NULL,
  `fuzzy_text_count` int(10) unsigned NOT NULL,
  `progress_percent` int(10) unsigned NOT NULL,
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


ALTER TABLE `narro_context`
  ADD CONSTRAINT narro_context_ibfk_13 FOREIGN KEY (text_id) REFERENCES narro_text (text_id),
  ADD CONSTRAINT narro_context_ibfk_14 FOREIGN KEY (project_id) REFERENCES narro_project (project_id),
  ADD CONSTRAINT narro_context_ibfk_15 FOREIGN KEY (file_id) REFERENCES narro_file (file_id);

ALTER TABLE `narro_context_comment`
  ADD CONSTRAINT narro_context_comment_ibfk_4 FOREIGN KEY (context_id) REFERENCES narro_context (context_id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT narro_context_comment_ibfk_5 FOREIGN KEY (user_id) REFERENCES narro_user (user_id),
  ADD CONSTRAINT narro_context_comment_ibfk_6 FOREIGN KEY (language_id) REFERENCES narro_language (language_id);

ALTER TABLE `narro_context_info`
  ADD CONSTRAINT narro_context_info_ibfk_10 FOREIGN KEY (popular_suggestion_id) REFERENCES narro_suggestion (suggestion_id) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT narro_context_info_ibfk_15 FOREIGN KEY (validator_user_id) REFERENCES narro_user (user_id) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT narro_context_info_ibfk_17 FOREIGN KEY (context_id) REFERENCES narro_context (context_id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT narro_context_info_ibfk_18 FOREIGN KEY (language_id) REFERENCES narro_language (language_id),
  ADD CONSTRAINT narro_context_info_ibfk_9 FOREIGN KEY (valid_suggestion_id) REFERENCES narro_suggestion (suggestion_id) ON DELETE SET NULL ON UPDATE SET NULL;

ALTER TABLE `narro_file`
  ADD CONSTRAINT narro_file_ibfk_10 FOREIGN KEY (project_id) REFERENCES narro_project (project_id),
  ADD CONSTRAINT narro_file_ibfk_4 FOREIGN KEY (parent_id) REFERENCES narro_file (file_id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT narro_file_ibfk_9 FOREIGN KEY (type_id) REFERENCES narro_file_type (file_type_id);

ALTER TABLE `narro_project`
  ADD CONSTRAINT narro_project_ibfk_2 FOREIGN KEY (project_category_id) REFERENCES narro_project_category (project_category_id),
  ADD CONSTRAINT narro_project_ibfk_3 FOREIGN KEY (project_type) REFERENCES narro_project_type (project_type_id);

ALTER TABLE `narro_role_permission`
  ADD CONSTRAINT narro_role_permission_ibfk_1 FOREIGN KEY (role_id) REFERENCES narro_role (role_id),
  ADD CONSTRAINT narro_role_permission_ibfk_2 FOREIGN KEY (permission_id) REFERENCES narro_permission (permission_id);

ALTER TABLE `narro_suggestion`
  ADD CONSTRAINT narro_suggestion_ibfk_7 FOREIGN KEY (user_id) REFERENCES narro_user (user_id),
  ADD CONSTRAINT narro_suggestion_ibfk_8 FOREIGN KEY (text_id) REFERENCES narro_text (text_id),
  ADD CONSTRAINT narro_suggestion_ibfk_9 FOREIGN KEY (language_id) REFERENCES narro_language (language_id);

ALTER TABLE `narro_suggestion_comment`
  ADD CONSTRAINT narro_suggestion_comment_ibfk_1 FOREIGN KEY (suggestion_id) REFERENCES narro_suggestion (suggestion_id),
  ADD CONSTRAINT narro_suggestion_comment_ibfk_2 FOREIGN KEY (user_id) REFERENCES narro_user (user_id),
  ADD CONSTRAINT narro_suggestion_comment_ibfk_3 FOREIGN KEY (language_id) REFERENCES narro_language (language_id);

ALTER TABLE `narro_suggestion_vote`
  ADD CONSTRAINT narro_suggestion_vote_ibfk_10 FOREIGN KEY (suggestion_id) REFERENCES narro_suggestion (suggestion_id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT narro_suggestion_vote_ibfk_7 FOREIGN KEY (context_id) REFERENCES narro_context (context_id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT narro_suggestion_vote_ibfk_9 FOREIGN KEY (user_id) REFERENCES narro_user (user_id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `narro_text_comment`
  ADD CONSTRAINT narro_text_comment_ibfk_10 FOREIGN KEY (user_id) REFERENCES narro_user (user_id),
  ADD CONSTRAINT narro_text_comment_ibfk_11 FOREIGN KEY (language_id) REFERENCES narro_language (language_id),
  ADD CONSTRAINT narro_text_comment_ibfk_9 FOREIGN KEY (text_id) REFERENCES narro_text (text_id);

ALTER TABLE `narro_user_role`
  ADD CONSTRAINT narro_user_role_ibfk_1 FOREIGN KEY (user_id) REFERENCES narro_user (user_id),
  ADD CONSTRAINT narro_user_role_ibfk_2 FOREIGN KEY (role_id) REFERENCES narro_role (role_id),
  ADD CONSTRAINT narro_user_role_ibfk_3 FOREIGN KEY (project_id) REFERENCES narro_project (project_id),
  ADD CONSTRAINT narro_user_role_ibfk_4 FOREIGN KEY (language_id) REFERENCES narro_language (language_id);

SET FOREIGN_KEY_CHECKS=1;
