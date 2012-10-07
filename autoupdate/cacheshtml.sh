#!/bin/sh

ROOT=$1
TMPDIR=/tmp
INCDIR=$ROOT/inc
URLROOT=$2

PATH=/usr/local/bin:/usr/bin:$PATH
export PATH

echo "===================="
echo "Updating Cache HTML..."
echo "ROOT=$ROOT"
echo "URLROOT=$URLROOT"
echo "===================="
echo ""

cd $ROOT
for X in `find . -name "*.shtml"`; do
  X2=`echo $X|sed 's/shtml$/html/'`
  #echo "$X -> $X2"
  #continue

  # determine if file is newer
  if [ "$1" != "rebuild" -a -f $X2 ] ; then
    if [ $X -ot $X2 -a $INCDIR -ot $X2 ]
    then
      continue
    fi
  fi
  #mv -f $X2 $X2.old
  #rm -f $X2
  mv -f $X2 $TMPDIR/. 2>/dev/null
  wget -nv $URLROOT/$X -O $X2
done