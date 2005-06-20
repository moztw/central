#include <stdio.h>
#include <stdlib.h>

#define DATAROOT "/home/moztw/sfx"

#define COMMAND \
"cd " DATAROOT " && " \
"echo 'SVN update...' && /usr/local/bin/svn --username moztw --password moztwupdate update"


int main(char *argv[]) {
	printf("\n\n");
	fflush(stdout);
	return system(COMMAND);
}
