#!/bin/sh
backupdir=/home/moztw/backup
webdir=/home/moztw/htdocs
forumdir=/home/moztw/htdocs/forum
date=`date +"%Y-%m-%d"`
dumpdb=/usr/local/bin/mysqldump
webexcludes="--exclude htdocs/dls --exclude htdocs/forum --exclude htdocs/tmp"
echo "Backup for $date."

#backup main web
tar -zc $webexcludes -f $backupdir/$date-mozweb.tar.gz -C $webdir/.. htdocs conf

#backup forum php
tar zcf $backupdir/$date-mozforum.prog.tar.gz -C $forumdir/.. forum

#backup mysql db
$dumpdb -u root mozforum | gzip -c > $backupdir/$date-mozforum.dbdump.sql.gz
