#!/bin/sh

LOGROOT=/home/moztw/log/raw/www
# this script must be executed by root permission
/usr/local/etc/rc.d/lighttpd.sh stop 2>&1 >/dev/null

mv -f $LOGROOT/access.log $LOGROOT/access.`date +'%m%d'`.log 2>&1 >/dev/null
mv -f $LOGROOT/error.log $LOGROOT/error.`date +'%m%d'`.log 2>&1 >/dev/null
#touch $LOGROOT/access.log
#touch $LOGROOT/error.log

/usr/local/etc/rc.d/lighttpd.sh start 2>&1 >/dev/null

