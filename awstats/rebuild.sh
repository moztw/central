#!/bin/sh

AWROOT=/home/moztw/awstats
for cf in moztw.org forum.moztw.org
do
	cd $AWROOT && make CONF=$cf update && make CONF=$cf output
done
