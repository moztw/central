#!/bin/bash

GIT=`which git`

echo "=============================="
echo "using git: $GIT"
echo "=============================="

#browserpairs
cd /home/moztw/htdocs/www/foxmosa/game/pairs
$GIT pull origin master

