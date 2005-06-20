YYYY	!=	date -v -1d +%Y
MM	!=	date -v -1d +%m

CONF 	?= moztw.org
AWROOT	= /home/moztw/awstats
DIR	= $(AWROOT)/$(CONF)/$(YYYY)/$(MM)
#PROG	= ./prog/awstats.pl
PROG	= /usr/local/www/awstats/cgi-bin/awstats.pl
PROG2	= /usr/local/www/awstats/tools/awstats_buildstaticpages.pl
INDEXFN = $(AWROOT)/$(CONF)/index.shtml

all:
	echo $(CONF)

update:
	nice -n 20 time perl $(PROG) -config=$(CONF) -update

output:
	mkdir -p $(DIR)
	# build header
	echo '<!--#include virtual="/inc/meta.html" -->' > $(INDEXFN)
	echo '<!--#include virtual="/inc/title.html" -->' >> $(INDEXFN)
	echo '<!--#include virtual="/inc/class.html" -->' >> $(INDEXFN)
	echo '<!--#include virtual="/inc/header.html" -->' >> $(INDEXFN)
	echo "<h1>Load statistics for $(CONF)</h1><ul>" >> $(INDEXFN)
	cd $(AWROOT)/$(CONF) && find 2*/* -type d | sed -e 's#\(.*\)#<li><a href="\1/">\1</a></li>#g' >> $(INDEXFN)
	echo "</ul>" >> $(INDEXFN)
	echo '<!--#include virtual="/inc/footer.html" -->' >> $(INDEXFN)
	nice -n 20 $(PROG2) -config=$(CONF) -dir=$(DIR) -awstatsprog=$(PROG) -year=$(YYYY) -month=$(MM)
	cd $(DIR) && ln -sf awstats.$(CONF).html index.html

#cleannoise:
#	./cleannoise.pl < awstats072004.txt > X
#	mv X awstats072004.txt
