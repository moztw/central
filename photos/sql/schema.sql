# $Id: schema.sql,v 1.3 2004/06/30 10:55:30 oddeveloper Exp $

#
# Table structure for table `CPG_albums`
#

CREATE TABLE CPG_albums (
  aid int(11) NOT NULL auto_increment,
  title varchar(255) NOT NULL default '',
  description text NOT NULL,
  visibility int(11) NOT NULL default '0',
  uploads enum('YES','NO') NOT NULL default 'NO',
  comments enum('YES','NO') NOT NULL default 'YES',
  votes enum('YES','NO') NOT NULL default 'YES',
  pos int(11) NOT NULL default '0',
  category int(11) NOT NULL default '0',
  pic_count int(11) NOT NULL default '0',
  thumb int(11) NOT NULL default '0',
  last_addition datetime NOT NULL default '0000-00-00 00:00:00',
  stat_uptodate enum('YES','NO') NOT NULL default 'NO',
  keyword VARCHAR( 50 ),
  PRIMARY KEY  (aid),
  KEY alb_category (category)
) TYPE=MyISAM;
# --------------------------------------------------------

#
# Table structure for table `CPG_categories`
#

CREATE TABLE CPG_categories (
  cid int(11) NOT NULL auto_increment,
  owner_id int(11) NOT NULL default '0',
  name varchar(255) NOT NULL default '',
  description text NOT NULL,
  pos int(11) NOT NULL default '0',
  parent int(11) NOT NULL default '0',
  thumb int(11) NOT NULL default '0',
  subcat_count int(11) NOT NULL default '0',
  alb_count int(11) NOT NULL default '0',
  pic_count int(11) NOT NULL default '0',
  stat_uptodate enum('YES','NO') NOT NULL default 'NO',
  PRIMARY KEY  (cid),
  KEY cat_parent (parent),
  KEY cat_pos (pos),
  KEY cat_owner_id (owner_id)
) TYPE=MyISAM;
# --------------------------------------------------------

#
# Table structure for table `CPG_comments`
#

CREATE TABLE CPG_comments (
  pid mediumint(10) NOT NULL default '0',
  msg_id mediumint(10) NOT NULL auto_increment,
  msg_author varchar(25) NOT NULL default '',
  msg_body text NOT NULL,
  msg_date datetime NOT NULL default '0000-00-00 00:00:00',
  msg_raw_ip tinytext,
  msg_hdr_ip tinytext,
  author_md5_id varchar(32) NOT NULL default '',
  author_id int(11) NOT NULL default '0',
  PRIMARY KEY  (msg_id),
  KEY com_pic_id (pid)
) TYPE=MyISAM;
# --------------------------------------------------------

#
# Table structure for table `CPG_config`
#

CREATE TABLE CPG_config (
  name varchar(40) NOT NULL default '',
  value varchar(255) NOT NULL default '',
  PRIMARY KEY  (name)
) TYPE=MyISAM;
# --------------------------------------------------------

#
# Table structure for table `CPG_pictures`
#

CREATE TABLE CPG_pictures (
  pid int(11) NOT NULL auto_increment,
  aid int(11) NOT NULL default '0',
  filepath varchar(255) NOT NULL default '',
  filename varchar(255) NOT NULL default '',
  filesize int(11) NOT NULL default '0',
  total_filesize int(11) NOT NULL default '0',
  pwidth smallint(6) NOT NULL default '0',
  pheight smallint(6) NOT NULL default '0',
  hits int(10) NOT NULL default '0',
  mtime timestamp(14) NOT NULL,
  ctime int(11) NOT NULL default '0',
  owner_id int(11) NOT NULL default '0',
  owner_name varchar(40) NOT NULL default '',
  pic_rating int(11) NOT NULL default '0',
  votes int(11) NOT NULL default '0',
  title varchar(255) NOT NULL default '',
  caption text NOT NULL,
  keywords varchar(255) NOT NULL default '',
  approved enum('YES','NO') NOT NULL default 'NO',
  user1 varchar(255) NOT NULL default '',
  user2 varchar(255) NOT NULL default '',
  user3 varchar(255) NOT NULL default '',
  user4 varchar(255) NOT NULL default '',
  url_prefix tinyint(4) NOT NULL default '0',
  randpos int(11) NOT NULL default '0',
  pic_raw_ip tinytext,
  pic_hdr_ip tinytext,
  PRIMARY KEY  (pid),
  KEY owner_id (owner_id),
  KEY pic_hits (hits),
  KEY pic_rate (pic_rating),
  KEY aid_approved (aid,approved),
  KEY randpos (randpos),
  KEY pic_aid (aid),
  FULLTEXT KEY search (title,caption,keywords,filename)
) TYPE=MyISAM;
# --------------------------------------------------------

#
# Table structure for table `CPG_usergroups`
#

CREATE TABLE CPG_usergroups (
  group_id int(11) NOT NULL auto_increment,
  group_name varchar(255) NOT NULL default '',
  group_quota int(11) NOT NULL default '0',
  has_admin_access tinyint(4) NOT NULL default '0',
  can_rate_pictures tinyint(4) NOT NULL default '0',
  can_send_ecards tinyint(4) NOT NULL default '0',
  can_post_comments tinyint(4) NOT NULL default '0',
  can_upload_pictures tinyint(4) NOT NULL default '0',
  can_create_albums tinyint(4) NOT NULL default '0',
  pub_upl_need_approval tinyint(4) NOT NULL default '1',
  priv_upl_need_approval tinyint(4) NOT NULL default '1',
  upload_form_config tinyint(4) NOT NULL default '3',
  custom_user_upload tinyint(4) NOT NULL default '0',
  num_file_upload tinyint(4) NOT NULL default '5',
  num_URI_upload tinyint(4) NOT NULL default '3',
  PRIMARY KEY  (group_id)
) TYPE=MyISAM;
# --------------------------------------------------------

#
# Table structure for table `CPG_users`
#

CREATE TABLE CPG_users (
  user_id int(11) NOT NULL auto_increment,
  user_group int(11) NOT NULL default '2',
  user_active enum('YES','NO') NOT NULL default 'NO',
  user_name varchar(25) NOT NULL default '',
  user_password varchar(25) NOT NULL default '',
  user_lastvisit datetime NOT NULL default '0000-00-00 00:00:00',
  user_regdate datetime NOT NULL default '0000-00-00 00:00:00',
  user_group_list varchar(255) NOT NULL default '',
  user_email varchar(255) NOT NULL default '',
  user_website varchar(255) NOT NULL default '',
  user_location varchar(255) NOT NULL default '',
  user_interests varchar(255) NOT NULL default '',
  user_occupation varchar(255) NOT NULL default '',
  user_actkey varchar(32) NOT NULL default '',
  PRIMARY KEY  (user_id),
  UNIQUE KEY user_name (user_name)
) TYPE=MyISAM;
# --------------------------------------------------------

#
# Table structure for table `CPG_votes`
#

CREATE TABLE CPG_votes (
  pic_id mediumint(9) NOT NULL default '0',
  user_md5_id varchar(32) NOT NULL default '',
  vote_time int(11) NOT NULL default '0',
  PRIMARY KEY  (pic_id,user_md5_id)
) TYPE=MyISAM;
#---------------------------------------------------------

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
#---------------------------------------------------------

#
# Table structure for table `CPG_exif`
#

CREATE TABLE CPG_exif (
  `filename` varchar(255) NOT NULL default '',
  `exifData` text NOT NULL,
  UNIQUE KEY `filename` (`filename`)
) TYPE=MyISAM;
# --------------------------------------------------------

#
# Table structure for table `CPG_filetypes`
#

CREATE TABLE IF NOT EXISTS CPG_filetypes (
  extension char(7) NOT NULL default '',
  mime char(30) default NULL,
  content char(15) default NULL,
  PRIMARY KEY (extension)
) TYPE=MyISAM COMMENT='Used to store the file extensions';


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
# Table structure for table `CPG_temp_data`
#

CREATE TABLE IF NOT EXISTS `CPG_temp_data` (
`unique_ID` CHAR( 8 ) NOT NULL ,
`encoded_string` BLOB NOT NULL ,
`timestamp` INT( 11 ) UNSIGNED NOT NULL ,
PRIMARY KEY ( `unique_ID` ) 
) TYPE = MYISAM COMMENT = 'Holds temporary file data for multiple file uploads';
