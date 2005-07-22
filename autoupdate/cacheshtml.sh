#!/bin/sh

ROOT=/home/moztw/htdocs
TMPDIR=/home/moztw/tmp
INCDIR=$ROOT/inc
URLROOT=http://mozilla-taiwan.org

PATH=/usr/local/bin:/usr/bin:$PATH
export PATH

cd $ROOT
for X in `find . -name "*.shtml"`
do
    X2=`echo $X|sed 's/shtml$/html/'`
    #echo "$X -> $X2"
    #continue

    # determine if file is newer
    if [ "$1" != "rebuild" -a -f $X2 ] ; then
	if [ $X -ot $X2 -a $INCDIR -ot $X2 ]
	then
	    #echo "skip $X"
	    continue
	fi
    fi
    #mv -f $X2 $X2.old
    #/bin/rm -f $X2
    mv -f $X2 $TMPDIR/. 2>/dev/null
    wget -nv $URLROOT/$X -O $X2
done
