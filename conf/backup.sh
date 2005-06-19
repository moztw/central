#!/bin/sh
backupdir=/home/moztw/backup
webdir=/home/moztw/htdocs
forumdir=/home/moztw/forum
date=`date +"%Y-%m-%d"`
dumpdb=/usr/local/bin/mysqldump
webexcludes="--exclude htdocs/dls --exclude htdocs/forum --exclude htdocs/tmp"
echo "Backup for $date."

#backup main web: no need now because we have VCS(svn).
#tar -zc $webexcludes -f $backupdir/$date-mozweb.tar.gz -C $webdir/.. htdocs conf

#backup forum php: no need now because we have VCS(svn).
#tar zcf $backupdir/$date-mozforum.prog.tar.gz -C $forumdir/.. forum

#backup mysql db
$dumpdb -u root --all-databases | gzip -c > $backupdir/$date-mozweb.dbdump.sql.gz
