YYYY	!=	date -v -1d +%Y
MM	!=	date -v -1d +%m

CONF 	?= moztw.org
AWROOT	= /home/moztw/awstats
DIR	= $(AWROOT)/$(CONF)/$(YYYY)/$(MM)
PROG	= ./prog/awstats.pl

all:
	echo $(CONF)

update:
	nice -n 20 time perl $(PROG) -config=$(CONF) -update

output:
	mkdir -p $(DIR)
	cd $(AWROOT)/$(CONF) && find 2*/* -type d | sed -e 's#\(.*\)#<a href="\1/">\1</a><br>#g' > index.html
	nice -n 20 /usr/local/bin/awstats_buildstaticpages.pl -config=$(CONF) -dir=$(DIR) -awstatsprog=$(PROG) -year=$(YYYY) -month=$(MM)
	cd $(DIR) && ln -sf awstats.$(CONF).html index.html

#cleannoise:
#	./cleannoise.pl < awstats072004.txt > X
#	mv X awstats072004.txt
