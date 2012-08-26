ALTER TABLE `narro_context`
    CHANGE `created` `created` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
    CHANGE `modified` `modified` DATETIME NULL DEFAULT '0000-00-00 00:00:00';
ALTER TABLE `narro_context_info`
    CHANGE `created` `created` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
    CHANGE `modified` `modified` DATETIME NULL DEFAULT '0000-00-00 00:00:00';
ALTER TABLE `narro_context_comment`
    CHANGE `created` `created` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
    CHANGE `modified` `modified` DATETIME NULL DEFAULT '0000-00-00 00:00:00';
ALTER TABLE `narro_file`
    CHANGE `created` `created` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
    CHANGE `modified` `modified` DATETIME NULL DEFAULT '0000-00-00 00:00:00';
ALTER TABLE `narro_suggestion`
    CHANGE `created` `created` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
    CHANGE `modified` `modified` DATETIME NULL DEFAULT '0000-00-00 00:00:00';
ALTER TABLE `narro_suggestion_comment`
    CHANGE `created` `created` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
    CHANGE `modified` `modified` DATETIME NULL DEFAULT '0000-00-00 00:00:00';
ALTER TABLE `narro_suggestion_vote`
    CHANGE `created` `created` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
    CHANGE `modified` `modified` DATETIME NULL DEFAULT '0000-00-00 00:00:00';
ALTER TABLE `narro_text`
    CHANGE `created` `created` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
    CHANGE `modified` `modified` DATETIME NULL DEFAULT '0000-00-00 00:00:00';
ALTER TABLE `narro_text_comment`
    CHANGE `created` `created` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
    CHANGE `modified` `modified` DATETIME NULL DEFAULT '0000-00-00 00:00:00';

ALTER TABLE `narro_suggestion` ADD `suggestion_word_count` SMALLINT UNSIGNED  DEFAULT '0' AFTER `suggestion_char_count` ;
ALTER TABLE `narro_suggestion` CHANGE `suggestion_char_count` `suggestion_char_count` SMALLINT( 5 ) UNSIGNED DEFAULT '0';
ALTER TABLE `narro_text` ADD `text_word_count` SMALLINT UNSIGNED DEFAULT '0' AFTER `text_char_count` ;

ALTER TABLE `narro_suggestion_comment` DROP FOREIGN KEY `narro_suggestion_comment_ibfk_1` ;
ALTER TABLE `narro_suggestion_comment` ADD FOREIGN KEY ( `suggestion_id` ) REFERENCES `narro_suggestion` (`suggestion_id`);
ALTER TABLE `narro_suggestion_comment` DROP FOREIGN KEY `narro_suggestion_comment_ibfk_2` ;
ALTER TABLE `narro_suggestion_comment` ADD FOREIGN KEY ( `user_id` ) REFERENCES `narro_user` (`user_id`);
ALTER TABLE `narro_suggestion_comment` DROP FOREIGN KEY `narro_suggestion_comment_ibfk_3` ;
ALTER TABLE `narro_suggestion_comment` DROP INDEX `language_id`;
ALTER TABLE `narro_suggestion_comment` DROP `language_id`;

INSERT INTO `narro_permission` (`permission_id` ,`permission_name`) VALUES (NULL , 'Can manage user roles');

ALTER TABLE `narro_context_info` ADD INDEX ( `created` );
ALTER TABLE `narro_context_info` ADD INDEX ( `modified` );

ALTER TABLE  `narro_suggestion` ADD  `is_imported` TINYINT( 1 ) NOT NULL DEFAULT  '0' AFTER  `has_comments`;

ALTER TABLE `narro_project_progress` ADD `last_modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER `language_id` ;

INSERT INTO `narro_file_type` (
`file_type_id` ,
`file_type`
)
VALUES (
NULL , 'Unsupported'
);

ALTER TABLE `narro_context_comment` DROP INDEX `context_id_2`;
ALTER TABLE `narro_text_comment` DROP INDEX `text_id_2` ;

 INSERT INTO `narro_permission` (
`permission_id` ,
`permission_name`
)
VALUES (
NULL , 'Can add context comments'
);

 ALTER TABLE `narro_project` ADD INDEX ( `active` ) ;

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

ALTER TABLE `narro_suggestion_vote` DROP `text_id` ;
ALTER TABLE `narro_file` ADD `header` TEXT NOT NULL ;
ALTER TABLE `narro_file_progress` ADD `export` BOOL NULL DEFAULT TRUE;