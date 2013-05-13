#!/bin/bash
export LANGUAGE=en_US.UTF-8
ROOT='/home/moztw/translate/var/repo'

echo
date
echo

if [ $USER != www-data ]
then
	echo 'You must run this script as www-data (try sudo -u www-data)'
	exit
fi

echo 'Pulling English source code from upstream...'

for REPO in `ls $ROOT -1`
do
	echo '* '$REPO
	cd $ROOT/$REPO
	if [ -e $ROOT/$REPO/.hg ]
	then
		# pull everything down then update to default
		hg pull -u -r default
		# show tip information
		hg tip
	fi
	if [ -e $ROOT/$REPO/.svn ]
	then
		svn update
	fi
	if [ -e $ROOT/$REPO/.git ]
	then
		git pull
		git log -n 1
		echo
	fi
done

echo
date
echo

exit
