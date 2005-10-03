#include <stdio.h>
#include <stdlib.h>

#define SVNROOT "/home/moztw"
#define ADDONSROOT "/home/moztw/mozupdate"
#define WEBROOT "/home/moztw/htdocs"
#define SCRIPTROOT "/home/moztw/autoupdate"

#define DL_FILES \
"dl/ns/index.shtml " \
"dl/ff/index.shtml " \
"dl/moz/index.shtml " \
"dl/tb/index.shtml " \
"dl/nvu/index.shtml " \
"inc/dl*.html "

#define CMD_DONE \
    "echo 'DONE.' "

#define CMD_SVNUP_ADDONS \
"cd " ADDONSROOT " && " \
"echo 'SVN update Mozilla Update...' && /usr/local/bin/svn --username anonymous --no-auth-cache update 2>&1 && "\

#define CMD_SVNUP \
"cd " SVNROOT " && " \
"echo 'SVN update...' && /usr/local/bin/svn --username anonymous --no-auth-cache update 2>&1 && "\

#define CMD_XMLNEWS \
"cd " WEBROOT " && " \
"echo 'Update XML News...' && " SCRIPTROOT "/genxmlnews.pl " WEBROOT "/xmlnews.rdf && " \

#define CMD_CACHE \
"cd " WEBROOT " && " \
"echo 'Updating HTML cache...' && " SCRIPTROOT "/cacheshtml.sh 2>&1 && "\

#define CMD_CACHE_ALL \
"cd " WEBROOT " && " \
"echo 'Rebuilding HTML cache...' && " SCRIPTROOT "/cacheshtml.sh rebuild 2>&1 && "\

#define CMD_MD5 \
"cd " WEBROOT " && " \
"echo 'Update MD5 information...' && " SCRIPTROOT "/updateMD5.pl " DL_FILES " 2>&1 && " \


// #define system puts

int main(int argc, char *argv[]) {
	// svn update local
	int optMD5 = 0,
	    optCache = 0;
	char *cgicmd = NULL;
	int i = 0;

	setuid(geteuid());

	printf ("\n\n");
	fflush(stdout);

	for (i = 1; i < argc; i++)
	{
	    if(strcmp("md5", argv[i]) == 0) {
		optMD5 = 1;
	    } else if (strcmp("cache", argv[i]) == 0) {
		optCache = 1;
	    }
	}
	// CGI
	cgicmd = getenv("QUERY_STRING");
	if(cgicmd != NULL && strncmp("md5", cgicmd, strlen("md5")) == 0) {
		optMD5 = 1;
	}

	if(optMD5)
	{
	    if(optCache)
		return system(
			CMD_SVNUP_ADDONS
			CMD_SVNUP
			CMD_MD5
			CMD_CACHE_ALL 
			CMD_XMLNEWS 
			CMD_DONE);
	    else
		return system(
			CMD_SVNUP_ADDONS
			CMD_SVNUP
			CMD_MD5
			CMD_CACHE 
			CMD_XMLNEWS 
			CMD_DONE);
	} else
	if(optCache)
	    return system(
		    CMD_SVNUP_ADDONS
		    CMD_SVNUP
		    CMD_CACHE_ALL 
		    CMD_XMLNEWS 
		    CMD_DONE);
	else
	    return system(
		    CMD_SVNUP_ADDONS
		    CMD_SVNUP
		    CMD_CACHE 
		    CMD_XMLNEWS 
		    CMD_DONE);
}
