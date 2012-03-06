<?php
# dvdisaster: English homepage translation
# Copyright (C) 2004-2010 Carsten Gnörlich
#
# UTF-8 trigger: äöüß 
#
# Include our PHP sub routines, then call begin_page()
# to start the HTML page, insert the header, 
# navigation and news if appropriate.

if($news_flash == 0) 
{  require("../include/dvdisaster.php");
   begin_page();
}

$news_counter = 0;

news_headline("News archive from 2009");

news_item("14.04.2009", "Added: dvdisaster 0.72.rc1 for Mac OS X", "
  The native version for Mac OS X is still a bit <a href=\"download30.php#mac\">rough 
  around the edges</a> in the user interface: The underlying GTK+ library port is in an early
  development stage. But with todays update, dvdisaster is becoming usable on the Mac...
", 9, "2009-04-14T00:00:00Z", "2009-04-14T00:00:00Z");

news_item("11.04.2009", "dvdisaster 0.72.rc1 released", "
  The first release candidate for the stable 0.72 branch is available now.
  Among the new features are Blu-Ray media support, raw reading and C2 scans
  for CD.
  See the <a href=\"download.php\">download page</a> for more information.
", 8, "2009-04-11T00:00:00Z", "2009-04-11T00:00:00Z");

news_item("08.03.2009", "dvdisaster 0.71.28 released", "
  This version fixes \"illegal instruction\" crashes on x86 machines
  which do not support SSE2. More minor fixes towards the release
  candidate.
", 7, "2009-03-08T00:00:00Z", "2009-03-08T00:00:00Z");

news_item("18.01.2009", "dvdisaster 0.71.27 released", "
  The documentation is finally complete. Some crashes and incompatibilities
  with uncommon media and drives have been fixed. This version includes
  the last major internal overhaul planned for the 0.71.x series, so if
  all goes well the next version will be a stable release candidate.
", 6, "2009-01-18T00:00:00Z", "2009-01-18T00:00:00Z");

if($news_flash == 0) 
   end_page();
?>
