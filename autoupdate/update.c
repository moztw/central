#include <stdio.h>
#include <stdlib.h>

#define DATAROOT "/home/moztw/htdocs"
#define SCRIPTROOT "/home/moztw/autoupdate"

#define COMMAND \
"cd " DATAROOT " && " \
"echo 'SVN update...' && /usr/local/bin/svn --username anonymous --no-auth-cache update 2>&1 && "\
"echo 'update XML News...' && " SCRIPTROOT "/genxmlnews.pl /home/moztw/htdocs/xmlnews.rdf" \

#define COMMAND_MD5 \
"cd " DATAROOT " && " \
"echo 'update MD5...' && " SCRIPTROOT "/updateMD5.pl dl*-latest.shtml dl*-all.shtml"

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
