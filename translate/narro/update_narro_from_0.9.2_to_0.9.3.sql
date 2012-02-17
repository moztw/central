ALTER TABLE `narro_file` ADD `file_md5` VARCHAR( 32 ) NULL AFTER `file_path` ;
ALTER TABLE `narro_file` DROP `encoding`;
DROP TABLE `narro_file_header`;
ALTER TABLE `narro_language` CHANGE `language_code` `language_code` VARCHAR( 64 ) NOT NULL ,CHANGE `country_code` `country_code` VARCHAR( 64 ) NOT NULL;
ALTER TABLE `narro_language` ADD `dialect_code` VARCHAR( 64 ) NULL AFTER `country_code` ;
ALTER TABLE `narro_language` ADD `active` TINYINT( 1 ) NULL DEFAULT '1';
ALTER TABLE `narro_project` ADD `project_category_id` INT( 11 ) UNSIGNED NULL DEFAULT '1' AFTER `project_id` ;
ALTER TABLE `narro_project` ADD `project_description` VARCHAR( 255 ) NULL AFTER `project_type` ;
CREATE TABLE narro_project_category (
  project_category_id int(11) unsigned NOT NULL auto_increment,
  category_name varchar(255) NOT NULL,
  category_description varchar(255) NOT NULL,
  PRIMARY KEY  (project_category_id),
  UNIQUE KEY category_name (category_name)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO narro_project_category (project_category_id, category_name, category_description) VALUES(1, 'General', '');

ALTER TABLE `narro_project` ADD CONSTRAINT narro_project_ibfk_2 FOREIGN KEY (project_category_id) REFERENCES narro_project_category (project_category_id);

INSERT INTO narro_permission (permission_id, permission_name) VALUES(21, 'Can manage roles');

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

ALTER TABLE `narro_role_permission` ADD CONSTRAINT narro_role_permission_ibfk_1 FOREIGN KEY (role_id) REFERENCES narro_role (role_id), ADD CONSTRAINT narro_role_permission_ibfk_2 FOREIGN KEY (permission_id) REFERENCES narro_permission (permission_id);

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

ALTER TABLE `narro_user_role`
  ADD CONSTRAINT narro_user_role_ibfk_1 FOREIGN KEY (user_id) REFERENCES narro_user (user_id),
  ADD CONSTRAINT narro_user_role_ibfk_2 FOREIGN KEY (role_id) REFERENCES narro_role (role_id),
  ADD CONSTRAINT narro_user_role_ibfk_3 FOREIGN KEY (project_id) REFERENCES narro_project (project_id),
  ADD CONSTRAINT narro_user_role_ibfk_4 FOREIGN KEY (language_id) REFERENCES narro_language (language_id);

UPDATE `narro`.`narro_permission` SET `permission_name` = 'Can approve' WHERE `narro_permission`.`permission_id` =3 LIMIT 1 ;

