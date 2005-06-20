#!/usr/local/bin/bash

ROOT=/home/moztw/htdocs
TMPDIR=/home/moztw/tmp
URLROOT=http://mozilla-taiwan.org

cd $ROOT
for X in `find . -name "*.shtml"`
do
    X2=${X/shtml/html}
    #mv -f $X2 $X2.old
    #/bin/rm -f $X2
    mv -f $X2 $TMPDIR/.
    wget -nv $URLROOT/$X -O $X2
done
