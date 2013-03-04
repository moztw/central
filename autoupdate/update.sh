#!/bin/bash

GIT=`which git`
ECHO=

## Following variable will be set after reading the parameters.
REPODIR=
SCRIPTROOT=
WEBROOT=
DLFILES="dl/ns/index.shtml dl/ff/index.shtml dl/moz/index.shtml dl/tb/index.shtml dl/nvu/index.shtml inc/dl*.html"
URLROOT=

## Option parameters.
OPT_MD5=0
OPT_CACHE=0
OPT_STAGE=0

function update_src {
    echo "Update source..."
    $ECHO cd $REPODIR && $ECHO $GIT pull 2>&1
    return $?;
}

function update_xml_news {
    echo "Updating XML news..."
    $ECHO cd $WEBROOT && $ECHO $SCRIPTROOT/genxmlnews.pl $WEBROOT $WEBROOT/xmlnews.rdf
    return $?;
}

function update_cache {
    echo "Rebuilding cache..."
    local rebuild=
    if [ 1 == $OPT_CACHE ]; then
        rebuild="rebuild"
    fi
    $ECHO cd $WEBROOT && $ECHO $SCRIPTROOT/cacheshtml.sh $WEBROOT $URLROOT $rebuild 2>&1
    return $?
}

function update_md5 {
    echo "Updating MD5..."
    $ECHO cd $WEBROOT && $ECHO $SCRIPTROOT/updateMD5.pl $DLFILES 2>&1
    return $?
}

## Handle options.

for var in "$@"; do
    if [ $var = "md5" ]; then
        OPT_MD5=1
    elif [ $var = "cache" ]; then
        OPT_CACHE=1
    elif [ $var = "stage" ]; then
        OPT_STAGE=1
    fi
done

## Setup path

if [ 1 == $OPT_STAGE ]; then
    REPODIR="/home/moztw/moztw-stage"
    SCRIPTROOT="/home/moztw/htdocs/autoupdate"
    WEBROOT="/home/moztw/www-stage/www"
    URLROOT="http://www-stage.moztw.org"
else
    REPODIR="/home/moztw/moztw-git"
    SCRIPTROOT="/home/moztw/htdocs/autoupdate"
    WEBROOT="/home/moztw/htdocs/www"
    URLROOT="http://moztw.org"
fi

## Print configuration

echo "=============================="
echo "using git: $GIT"
if [ 1 == $OPT_STAGE ]; then
    echo "Updating website: stage"
else
    echo "Updating website: production"
fi
echo "=============================="
echo ""

## Run updating procedure.

update_src
if [ 0 != $? ]; then
    echo "!!! Update source fail"
    exit 1
fi

if [ 1 = $OPT_CACHE ]; then
	update_cache
	if [ 0 != $? ]; then
    	echo "!!! Update cache fail"
	    exit 1
	fi
fi

if [ 1 = $OPT_MD5 ]; then
    update_md5
    if [ 0 != $? ]; then
        echo "!!! Update md5 fail"
        exit 1
    fi
fi

update_xml_news
if [ 0 != $? ]; then
    echo "!!! Update XML news fail"
    exit 1
fi
