<?php
# dvdisaster: English homepage translation
# Copyright (C) 2004-2012 Carsten Gnörlich
#
# UTF-8 trigger: äöüß 
#
# Include our PHP sub routines, then call begin_page()
# to start the HTML page, insert the header, 
# navigation and news if appropriate.

require("../include/dvdisaster.php");
begin_page();
?>

<!-- Insert actual page content below -->

<h3 class="top">Image level data recovery</h3>

Media recovery with error correcting codes takes place in two steps:

<ol>
<li>First as much data as possible is read from the defective medium.<p></li>
<li>Then the still missing data is recovered using the error correction code.</li>
</ol>

The amount of readable data (step 1) does not only depend on the reading capabilities
of the drive, but also on which logical level the reading process takes place.
This page discusses the logical levels and explains why dvdisaster uses image level reading.<p>

<b>Logical levels of a medium</b><p>

Optical disks are organized into <i>data sectors</i> containing 2048 bytes each.
Consecutively reading and storing these sectors produces a medium <i>image</i>.<p>

But working with single data sectors is unwieldy from a users perspective. Therefore
media contain <i>file systems</i> which combine data sectors into <i>files</i>.
This requires accurate book-keeping about which data sectors the files are comprised of,
and further attributes like file names and access permissions. For this book-keeping
some data sectors are reserved on the medium 
and filled with respective data structures.<p>

As a consequence media contain different <i>logical levels</i>:
Viewing the medium as a sequence of data sectors means working at the <i>image level</i>.
However looking at the medium as a collection of files is the perspective of
the <i>file(system) level</i>.<p>

The two levels have different properties when it comes to data recovery:<p>

<a name="file"> </a>
<b>Shortcomings of reading a medium at the file level</b><p>

Reading a defective medium at the <b>file level</b> means trying 
to read as much data as possible from each file.<p>

But a problem arises when data sectors are damaged which have
book-keeping functions in the file system. The list of files on the medium
may be truncated. Or the mapping of data sectors to files is incomplete.
Therefore files or parts from files may be lost even though the respective
data sectors would still be readable by the hardware. This is very bad
since even small readable portions of damaged files are valuable for
the error correcting code.<p>

An extremely bad case occurs when the error correction data is also
stored in files. Then the error correction data is required to repair the
file system, but the defective file system prevents access to the error
correction data. That means total data loss and rises some issues on the
<a href="#eccfile">treatment of error correction files</a> (more on that later).<p>

A similar problem arises when files are augmented with PAR2 error correction data
and then all these files are stored on the same medium. If the internal bookkeeping
of the file system is damaged now, all files and therefore the error 
correction data become inaccessible and are therefore lost.<p>

However the situation improves greatly when employing an image-based approach:<p>

<a name="image"> </a>
<b>Advantages of reading at the image level</b><p>

Reading at the image level uses direct communication with the drive hardware
to access the data sectors.<p>

The number of readable sectors depends only on the reading capabilities of the drive,
but not on the state of the file system. A read error in one sector does not
block access to other data sectors. Since <i>all</i> sectors are recovered 
which are still readable by the hardware, the method provides the best foundation
for the error correction.<p>

The image contains all data sectors of the medium. When the image is completely
recovered the file system stored within is also fully repaired. A protection at the
image level is therefore more extensive than error correction at the file level.<p>

dvdisaster is working exclusively at the image level to take advantage of these
properties. The <a href="qa33.php">RS02 method</a> even allows for
storing the error correction data at the same medium. This is possible since reading
the error correction information at the image level can not be blocked by errors
at other medium locations (damaged sectors with error correction data will reduce the error
recovery capacity, but not make recovery impossible).<p>

The <a href="qa33.php">RS01 method</a> protects media at the image level, too,
but stores the error correction data in files. The next section hints at some 
pitfalls arising from that.<p>

<a name="eccfile"> </a>
<b>Consequences for error correction file storage</b><p>

The error correction data created by dvdisaster protects media at the image level.
But how are the error correction <i>files</i> protected?<p>

Since error correction files are read at the file level they are subject
to the problems discussed above. If the medium containing the error correction
files becomes damaged it may not be possible to access or read them completely.
<p>

<table width="100%"><tr><td class="vsep"></td><td>
Therefore it is important to protect error correction files at the image level 
as well:
<a href="qa37.php">Media containing error correction files</a>
must be protected with dvdisaster, too.
</td></tr></table><p>


Since image level protection is assumed there is <i>no further damage protection</i>
contained in the RS01 error correction files! This would not help much,
anyways: Error correction files could be created in a way that allows 
them to provide a reduced data recovering capacity even when being 
damaged<sup><a href="#footnote1">*)</a></sup>. 
But however such internal protection would be designed, the
error correction file would still be only protected at the file system
level with all the disadvantages discussed above!<p>

In addition, the computing time and redundancy used for internal protection
is better spent at the image level: The Reed-Solomon error correction works 
best when error correction information
is spread over huge amounts of data. 
It is better to protect the image as a whole
than individually protecting each file within.<p>

<pre> </pre>
<table width="50%"><tr><td><hr></td></tr></table>

<span class="fs">
<a name="footnote1"><sup>*)</sup></a> Error correction files created
with the new RS03 codec have exactly these properties, e.g. they
are robust against damage as long as there is enough error correction
capacity left. This is possible as by now  there is sufficient
computing power and fast hard drive access available to create
a suitable file format. At the time RS01 was developed these resources
were not yet available. But it must be stressed that even for
RS03 error correction files the disadvantages of reading at the
file level hold!
</span>
<!-- do not change below -->

<?php
# end_page() adds the footer line and closes the HTML properly.

end_page();
?>
