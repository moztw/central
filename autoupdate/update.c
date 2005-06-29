#include <stdio.h>
#include <stdlib.h>

#define SVNROOT "/home/moztw"
#define WEBROOT "/home/moztw/htdocs"
#define SCRIPTROOT "/home/moztw/autoupdate"

#define DL_FILES \
"dl/ns/index.shtml " \
"dl/ff/index.shtml " \
"dl/moz/index.shtml " \
"dl/tb/index.shtml " \
"dl/nvu/index.shtml " \
"inc/dl*.html "

#define COMMAND \
"cd " SVNROOT " && " \
"echo 'SVN update...' && /usr/local/bin/svn --username anonymous --no-auth-cache update 2>&1 && "\
"cd " WEBROOT " && " \
"echo 'Recaching HTML files...' && " SCRIPTROOT "/cacheshtml.sh 2>&1 && "\
"echo 'update XML News...' && " SCRIPTROOT "/genxmlnews.pl " WEBROOT "/xmlnews.rdf" \

#define COMMAND_MD5 \
"cd " WEBROOT " && " \
"echo 'update MD5...' && " SCRIPTROOT "/updateMD5.pl " DL_FILES

int main(int argc, char *argv[]) {
	// svn update local
	int cmdMD5 = 0;
	char *cgicmd = NULL;
	setuid(geteuid());

	printf ("\n\n");
	fflush(stdout);
	if (argc > 1) {
		if(strcmp("md5", argv[1]) == 0) {
			cmdMD5 = 1;
		}
	}
	// CGI
	cgicmd = getenv("QUERY_STRING");
	if(cgicmd != NULL && strncmp("md5", cgicmd, strlen("md5")) == 0) {
		cmdMD5 = 1;
	}
	return system(cmdMD5 ? COMMAND_MD5 : COMMAND);
}
