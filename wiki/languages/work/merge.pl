#!/usr/bin/env perl
use strict;

require "zhtw.pl";
our(%zhtw);
open ENUS, "enus.pl";
my @dat =<ENUS>;
close ENUS;

# eliminate number argumentes
foreach keys(%zhtw)
{
}

foreach(@dat)
{
    if ($_ =~ /(['"])([-a-zA-Z_0-9]*)['"]\s*=>\s*(.*)$/)
    {
	if (exists $zhtw{$2})
	{
	    print "$1$2$1 => $1$zhtw{$2}$1,\n";
	    #print "\t#$3\n";
	} else {
	    print $_;
	}
    } else {
	print $_;
    }
}
