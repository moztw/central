# $Id: update.sql,v 1.8 2004/07/09 06:57:56 gaugau Exp $

#
# Table structure for table `CPG_filetypes`
#

CREATE TABLE IF NOT EXISTS CPG_filetypes (
  extension char(7) NOT NULL default '',
  mime char(30) default NULL,
  content char(15) default NULL,
  KEY extension (extension)
) TYPE=MyISAM COMMENT='Used to store the file extensions';

ALTER TABLE `CPG_filetypes` DROP INDEX `EXTENSION`, ADD PRIMARY KEY ( `extension` );

INSERT INTO CPG_filetypes VALUES ('jpg', 'image/jpg', 'image');
INSERT INTO CPG_filetypes VALUES ('jpeg', 'image/jpeg', 'image');
INSERT INTO CPG_filetypes VALUES ('jpe', 'image/jpe', 'image');
INSERT INTO CPG_filetypes VALUES ('gif', 'image/gif', 'image');
INSERT INTO CPG_filetypes VALUES ('png', 'image/png', 'image');
INSERT INTO CPG_filetypes VALUES ('psd', 'image/psd', 'image');
INSERT INTO CPG_filetypes VALUES ('bmp', 'image/bmp', 'image');
INSERT INTO CPG_filetypes VALUES ('jpc', 'image/jpc', 'image');
INSERT INTO CPG_filetypes VALUES ('jp2', 'image/jp2', 'image');
INSERT INTO CPG_filetypes VALUES ('jpx', 'image/jpx', 'image');
INSERT INTO CPG_filetypes VALUES ('jb2', 'image/jb2', 'image');
INSERT INTO CPG_filetypes VALUES ('swc', 'image/swc', 'image');
INSERT INTO CPG_filetypes VALUES ('iff', 'image/iff', 'image');
UPDATE CPG_config SET value='ALL' WHERE name='allowed_img_types';

INSERT INTO CPG_filetypes VALUES ('asf', 'video/x-ms-asf', 'movie');
INSERT INTO CPG_filetypes VALUES ('asx', 'video/x-ms-asx', 'movie');
INSERT INTO CPG_filetypes VALUES ('mpg', 'video/mpeg', 'movie');
INSERT INTO CPG_filetypes VALUES ('mpeg', 'video/mpeg', 'movie');
INSERT INTO CPG_filetypes VALUES ('wmv', 'video/x-ms-wmv', 'movie');
INSERT INTO CPG_filetypes VALUES ('swf', 'application/x-shockwave-flash', 'movie');
INSERT INTO CPG_filetypes VALUES ('avi', 'video/avi', 'movie');
INSERT INTO CPG_filetypes VALUES ('mov', 'video/quicktime', 'movie');
INSERT INTO CPG_config VALUES ('allowed_mov_types', 'ALL');

INSERT INTO CPG_filetypes VALUES ('mp3', 'audio/mpeg3', 'audio');
INSERT INTO CPG_filetypes VALUES ('midi', 'audio/midi', 'audio');
INSERT INTO CPG_filetypes VALUES ('mid', 'audio/midi', 'audio');
INSERT INTO CPG_filetypes VALUES ('wma', 'audio/x-ms-wma', 'audio');
INSERT INTO CPG_filetypes VALUES ('wav', 'audio/wav', 'audio');
INSERT INTO CPG_filetypes VALUES ('ogg', 'audio/ogg', 'audio');
INSERT INTO CPG_config VALUES ('allowed_snd_types', 'ALL');

INSERT INTO CPG_filetypes VALUES ('ram', 'audio/x-pn-realaudio', 'document');
INSERT INTO CPG_filetypes VALUES ('ra', 'audio/x-realaudio', 'document');
INSERT INTO CPG_filetypes VALUES ('rm', 'audio/x-realmedia', 'document');
INSERT INTO CPG_filetypes VALUES ('tiff', 'image/tiff', 'document');
INSERT INTO CPG_filetypes VALUES ('tif', 'image/tif', 'document');
INSERT INTO CPG_filetypes VALUES ('doc', 'application/msword', 'document');
INSERT INTO CPG_filetypes VALUES ('txt', 'text/plain', 'document');
INSERT INTO CPG_filetypes VALUES ('rtf', 'text/richtext', 'document');
INSERT INTO CPG_filetypes VALUES ('pdf', 'application/pdf', 'document');
INSERT INTO CPG_filetypes VALUES ('xls', 'application/excel', 'document');
INSERT INTO CPG_filetypes VALUES ('pps', 'application/powerpoint', 'document');
INSERT INTO CPG_filetypes VALUES ('ppt', 'application/powerpoint', 'document');
INSERT INTO CPG_filetypes VALUES ('zip', 'application/zip', 'document');
INSERT INTO CPG_filetypes VALUES ('rar', 'application/rar', 'document');
INSERT INTO CPG_filetypes VALUES ('gz', 'application/gz', 'document');
INSERT INTO CPG_filetypes VALUES ('mdb', 'application/msaccess', 'document');
INSERT INTO CPG_config VALUES ('allowed_doc_types', 'ALL');


#
# Modify structure for table `CPG_comments`
#

ALTER TABLE CPG_comments add msg_raw_ip tinytext;
ALTER TABLE CPG_comments add msg_hdr_ip tinytext;
ALTER TABLE CPG_pictures add pic_raw_ip tinytext;
ALTER TABLE CPG_pictures add pic_hdr_ip tinytext;


INSERT INTO CPG_config VALUES ('thumb_use', 'any');
INSERT INTO CPG_config VALUES ('show_private', '0');
INSERT INTO CPG_config VALUES ('first_level', '1');
INSERT INTO CPG_config VALUES ('display_film_strip', '1');
INSERT INTO CPG_config VALUES ('max_film_strip_items', '5');
INSERT INTO CPG_config VALUES ('comment_email_notification', '0');
INSERT INTO CPG_config VALUES ('read_iptc_data', '0');
INSERT INTO CPG_config VALUES ('display_uploader', '0');
INSERT INTO CPG_config VALUES ('offline', '0');

#gtroll wil implement
#INSERT INTO CPG_config VALUES ('picinfo_display_filename', '1');
#INSERT INTO CPG_config VALUES ('picinfo_display_album_name', '1');
#INSERT INTO CPG_config VALUES ('picinfo_display_file_size', '1');
#INSERT INTO CPG_config VALUES ('picinfo_display_dimensions', '1');
#INSERT INTO CPG_config VALUES ('picinfo_display_count_displayed', '1');
#INSERT INTO CPG_config VALUES ('picinfo_display_URL', '1');
#INSERT INTO CPG_config VALUES ('picinfo_display_URL_bookmark', '1');
#INSERT INTO CPG_config VALUES ('picinfo_display_favorites', 1');

INSERT INTO CPG_config VALUES ('reg_notify_admin_email', '0');
INSERT INTO CPG_config VALUES ('disable_comment_flood_protect', '0');
INSERT INTO CPG_config VALUES ('upl_notify_admin_email', '0');

INSERT INTO CPG_config VALUES ('language_list', '0');
INSERT INTO CPG_config VALUES ('language_flags', '0');
INSERT INTO CPG_config VALUES ('theme_list', '0');
INSERT INTO CPG_config VALUES ('language_reset', '1');
INSERT INTO CPG_config VALUES ('theme_reset', '1');
INSERT INTO CPG_config VALUES ('offline', '0');

INSERT INTO CPG_config VALUES ('allow_memberlist', '0');
INSERT INTO CPG_config VALUES ('display_faq', '0');
INSERT INTO CPG_config VALUES ('views_in_thumbview', '1');
INSERT INTO CPG_config VALUES ('show_bbcode_help', '1');
INSERT INTO CPG_config VALUES ('log_ecards', '0');
INSERT INTO CPG_config VALUES ('email_comment_notification', '0');
INSERT INTO CPG_config VALUES ('enable_zipdownload', '1');
INSERT INTO CPG_config VALUES ('debug_notice', '0');
INSERT INTO CPG_config VALUES ('slideshow_interval', '5000');


# Modify structure for category thumb
ALTER TABLE `CPG_categories` ADD `thumb` INT NOT NULL AFTER `parent` ;

# Modify structure for multi album pictures
ALTER TABLE `CPG_albums` ADD `keyword` VARCHAR( 50 ) NOT NULL ;


#
# Table structure for table `CPG_banned`
#

CREATE TABLE CPG_banned (
        ban_id int(11) NOT NULL auto_increment,
        user_id int(11) DEFAULT NULL,
        ip_addr tinytext DEFAULT NULL,
        expiry datetime DEFAULT NULL,
        PRIMARY KEY  (ban_id)
) TYPE=MyISAM;

#
# Table structure for table `CPG_exif`
#
CREATE TABLE CPG_exif (
  `filename` varchar(255) NOT NULL default '',
  `exifData` text NOT NULL,
  UNIQUE KEY `filename` (`filename`)
) TYPE=MyISAM;

#
# Table structure for table `CPG_ecards`
#

CREATE TABLE CPG_ecards (
  eid int(11) NOT NULL auto_increment,
  sender_name varchar(50) NOT NULL default '',
  sender_email text NOT NULL,
  recipient_name varchar(50) NOT NULL default '',
  recipient_email text NOT NULL,
  link text NOT NULL,
  date tinytext NOT NULL,
  sender_ip tinytext NOT NULL,
  PRIMARY KEY  (eid)
) TYPE=MyISAM COMMENT='Used to log ecards';

#
# Modify structure for table 'CPG_usergroups' - Upload form control - Hyperion
#

ALTER TABLE `CPG_usergroups` ADD `upload_form_config` TINYINT(4) DEFAULT '3' NOT NULL;
ALTER TABLE `CPG_usergroups` ADD `custom_user_upload` TINYINT(4) DEFAULT '0' NOT NULL;
ALTER TABLE `CPG_usergroups` ADD `num_file_upload` TINYINT(4) DEFAULT '5' NOT NULL;
ALTER TABLE `CPG_usergroups` ADD `num_URI_upload` TINYINT(4) DEFAULT '3' NOT NULL;



#
# Table structure for table `CPG_temp_data` - Temporary data for file uploads - Hyperion
#

CREATE TABLE IF NOT EXISTS `CPG_temp_data` (
`unique_ID` CHAR( 8 ) NOT NULL ,
`encoded_string` BLOB NOT NULL ,
`timestamp` INT( 11 ) UNSIGNED NOT NULL ,
PRIMARY KEY ( `unique_ID` )
) TYPE = MYISAM COMMENT = 'Holds temporary file data for multiple file uploads';

#
# Close security hole and re-point default theme in 1.3 - Jack
#

UPDATE `CPG_config` SET value='classic' WHERE (name='theme' AND value='default');
DELETE FROM `CPG_filetypes` WHERE mime='text/html';

#
# Finally remove all user_lang references - Jack
#

ALTER TABLE `CPG_users` CHANGE user_lang user_group_list varchar(255) NOT NULL default '';

#
# Fix usermgr timing out with 1k+ users -Omni
#
ALTER TABLE CPG_pictures ADD INDEX ( `owner_id` );


#
# Record the last hit IP
#

ALTER TABLE `CPG_pictures` ADD `lasthit_ip` TINYTEXT ;

#
# Store favpics in DB
#

ALTER TABLE `CPG_users` ADD `user_favpics` TEXT ;
