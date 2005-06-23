#!/bin/sh

datetag=`perl -e 'my ($ss,$mm,$hh,$d,$m) = localtime(time);  $m++;
	if($hh < 12) {($ss,$mm,$hh,$d,$m) = localtime(time-86400); $m++;}
	 printf ("%02d%02d", $m,$d);'`

if [ $datetag = '' ] ; then
    datetag=`date +'%m%d'`
fi

echo "Logrotate: rotated to [$datetag]";

LOGROOT=/home/moztw/log/raw/www
# this script must be executed by root permission
/usr/local/etc/rc.d/lighttpd.sh stop 2>&1 >/dev/null

mv -f $LOGROOT/access.log $LOGROOT/access.$datetag.log 2>&1 >/dev/null
mv -f $LOGROOT/error.log $LOGROOT/error.$datetag.log 2>&1 >/dev/null
#touch $LOGROOT/access.log
#touch $LOGROOT/error.log

/usr/local/etc/rc.d/lighttpd.sh start 2>&1 >/dev/null

