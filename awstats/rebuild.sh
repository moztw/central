#!/bin/sh

AWROOT=/home/moztw/awstats

# since we use lighttpd now, we have some problem building seperated logs.

#for cf in sinica.moztw.org forum.moztw.org
#do

cf=moztw.org
	cd $AWROOT && make CONF=$cf update && make CONF=$cf output
#done
