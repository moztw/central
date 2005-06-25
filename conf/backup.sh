#!/bin/sh
backupdir=/home/moztw/backup
webdir=/home/moztw/htdocs
forumdir=/home/moztw/forum
date=`date +"%Y-%m-%d"`
dumpdb=/usr/local/bin/mysqldump
webexcludes="--exclude htdocs/dls --exclude --exclude htdocs/tmp"
forumexcludes="--exclude forum/files"
echo "Backup for $date:"

#backup main web: no need now because we have VCS(svn).
#tar -zc $webexcludes -f $backupdir/$date-mozweb.tar.gz -C $webdir/.. htdocs conf

#backup forum php: no need now because we have VCS(svn).
#tar -zc $forumexcludes -f $backupdir/$date-mozforum.prog.tar.gz -C $forumdir/.. forum

echo "Backup MySQL database..."
#backup mysql db
#nice -n 10 
$dumpdb -F -h localhost -u root --all-databases | gzip -c > $backupdir/$date-mozweb.dbdump.sql.gz

echo "Backup var files..."
# backup dls/files repot
#nice -n 10 rsync --max-delete=23 -a /home/moztw/var /home/backup/var

echo "Done."
