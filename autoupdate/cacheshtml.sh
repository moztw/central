#!/bin/sh

ROOT=/home/moztw/htdocs
TMPDIR=/home/moztw/tmp
URLROOT=http://mozilla-taiwan.org

cd $ROOT
for X in `find . -name "*.shtml"`
do
    X2=`echo $X|sed 's/shtml$/html/'`
    #echo "$X -> $X2"
    #continue

    # determine if file is newer
    if [ -f $X2 -a $X -ot $X2 ]
    then
	#echo "skip $X"
	continue
    fi
    #mv -f $X2 $X2.old
    #/bin/rm -f $X2
    mv -f $X2 $TMPDIR/.
    wget -nv $URLROOT/$X -O $X2
done
