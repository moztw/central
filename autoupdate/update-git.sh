#!/bin/bash

GIT=`which git`

echo "=============================="
echo "using git: $GIT"
echo "=============================="

#browserpairs
#cd /home/moztw/htdocs/www/foxmosa/game/pairs
#$GIT pull origin master

$GIT --git-dir=/home/moztw/htdocs/www/foxmosa/game/pairs/.git pull origin master
$GIT --git-dir=/home/moztw/git-tw-blackout/.git pull origin gh-pages

