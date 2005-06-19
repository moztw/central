#!/usr/local/bin/bash

ROOT=/home/moztw/htdocs
URLROOT=http://mozilla-taiwan.org

cd $ROOT
for X in `find . -name "*.shtml"`
do
    X2=${X/shtml/html}
    mv -f $X2 $X2.old
    wget $URLROOT/$X -O $X2
done
