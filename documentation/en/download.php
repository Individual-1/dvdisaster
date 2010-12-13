<?php
# dvdisaster: English homepage translation
# Copyright (C) 2004-2010 Carsten Gnörlich
#
# UTF-8 trigger: äöüß 
#
# Include our PHP sub routines, then call begin_page()
# to start the HTML page, insert the header, 
# navigation and news if appropriate.

require("../include/dvdisaster.php");
require("../include/footnote.php");
begin_page();
$show_all=$_GET["showall"];
?>

<!--- Insert actual page content below --->

<h3>Download dvdisaster</h3>

dvdisaster is available for <a href="download10.php">recent versions</a>
of the FreeBSD, GNU/Linux, Mac OS X(Darwin), NetBSD 
and Windows operating systems. It is provided
as <a href="http://www.germany.fsfeurope.org/documents/freesoftware.en.html">free Software</a> 
under the <a href="http://dvdisaster.cvs.sourceforge.net/dvdisaster/dvdisaster/COPYING?view=markup">GNU General Public License v2</a><a href="#gpl3"><sup>*)</sup></a>.<p>

Please download either the source code or a binary version from the list below.
A <a href="download20.php">digital signature</a> is provided for verification that the
packets are in their original state.<p>

<ul>
<li>The source code version contains a file <tt>INSTALL</tt> with further instructions for compiling it.</li>
<li>For Mac OS X a ZIP archive is provided which is installed by unpacking it
into an arbitrary place. Please note the 
<a href="download30.php#mac">special hints for Mac OS X</a>.</li>
<li>To <a href="download30.php#win">install</a> the binary version for Windows
please execute the downloaded program and follow the dialog.</li>
</ul>

<?php
if(!strcmp($have_experimental, "yes"))
{ ?>
<b>Alpha (unstable) versions</b> - new and experimental for experienced users!<p>

Testers are welcome for the upcoming dvdisaster release, but should be aware of remaining
bugs and incompatibilities.
The current unstable release is 
<a href="download40.php"><?php echo $cooked_version?></a>.
<p>
<?php
}
?>

<b>Stable version</b> - recommended for getting started.<p>
<a name="download"></a>

<table class="download" cellpadding="0" cellspacing="5">
<tr><td><b>dvdisaster-0.72</b></td><td align="right">31-Oct-2010</td></tr>
<tr bgcolor="#000000"><td colspan="2"><img width=1 height=1 alt=""></td></tr>
<tr><td colspan="2">
  <table>
    <tr><td align="right">&nbsp;&nbsp;Source code for all operating systems:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.72.2.tar.bz2">dvdisaster-0.72.2.tar.bz2</a></td></tr>
    <tr><td align="right">Digital signature:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.72.2.tar.bz2.gpg">dvdisaster-0.72.2.tar.bz2.gpg</a></td></tr>

<?php
if($mode == "www");
    echo "<tr><td align=\"right\">MD5 checksum:&nbsp;</td><td>312bceef3bf9c0754cf633ed3b12eb71</td></tr>";
?>
    <tr><td colspan="2"><img width=1 height=3</td></tr>

    <tr><td align="right">Binary for Mac OS X 10.5 / x86:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.72.2.app.zip">dvdisaster-0.72.2.app.zip</a>&nbsp;--&nbsp;please read these <a href="download30.php#mac">hints</a> first</td></tr>
    <tr><td align="right">Digital signature:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.72.2.app.zip.gpg">dvdisaster-0.72.2.app.zip.gpg</a></td></tr>

<?php
if($mode == "www");
    echo "<tr><td align=\"right\">MD5 checksum:&nbsp;</td><td>52243c1fafb9d2e496b6eb318c3e534f</td></tr>";
?>
    <tr><td colspan="2"><img width=1 height=3</td></tr>

    <tr><td align="right">Binary for Windows:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.72.2-setup.exe">dvdisaster-0.72.2-setup.exe</a></td></tr>
    <tr><td align="right">Digital signature:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.72.2-setup.exe.gpg">dvdisaster-0.72.2-setup.exe.gpg</a></td></tr>

<?php
if($mode == "www");
    echo "<tr><td align=\"right\">MD5 checksum:&nbsp;</td><td>f80258d27354061fd9e28850ec4701a6</td></tr>";
?>
    <tr><td colspan="2"> </td></tr>

<?php
  if($show_all == 0) {
?>
    <tr><td colspan="2"><a href="download.php?showall=1#download">Show older releases in the 0.72 version branch</a></td></tr>
<?php
  }
  else {
?> 
   <tr><td colspan="2"><a href="download.php?showall=0#download">Hide older releases in the 0.72 version branch</a></td></tr>
   <tr><td colspan="2"> </td></tr>
   <tr><td></td><td>Version 0.72.1</td></tr>
    <tr><td align="right">&nbsp;&nbsp;Source code for all operating systems:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.72.1.tar.bz2">dvdisaster-0.72.1.tar.bz2</a></td></tr>
    <tr><td align="right">Digital signature:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.72.1.tar.bz2.gpg">dvdisaster-0.72.1.tar.bz2.gpg</a></td></tr>
    <tr><td align="right">MD5 checksum:&nbsp;</td>
        <td>4da96566bc003be93d9dfb0109b4aa1d</td></tr>
    <tr><td colspan="2"><img width=1 height=3</td></tr>

    <tr><td align="right">Binary for Mac OS X 10.5 / x86:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.72.1.app.zip">dvdisaster-0.72.1.app.zip</a>&nbsp;--&nbsp;please read these <a href="download30.php#mac">hints</a> first</td></tr>
    <tr><td align="right">Digital signature:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.72.1.app.zip.gpg">dvdisaster-0.72.1.app.zip.gpg</a></td></tr>
    <tr><td align="right">MD5 checksum:&nbsp;</td>
        <td>924b5677f69473b6b87991e01779a541</td></tr>
    <tr><td colspan="2"><img width=1 height=3</td></tr>

    <tr><td align="right">Binary for Windows:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.72.1-setup.exe">dvdisaster-0.72.1-setup.exe</a></td></tr>
    <tr><td align="right">Digital signature:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.72.1-setup.exe.gpg">dvdisaster-0.72.1-setup.exe.gpg</a></td></tr>
    <tr><td align="right">MD5 checksum:&nbsp;</td>
        <td>34d062ddebe1a648e808d29ca4e9879f</td></tr>

   <tr><td colspan="2"> </td></tr>
   <tr><td></td><td>Version 0.72</td></tr>
    <tr><td align="right">&nbsp;&nbsp;Source code for all operating systems:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.72.tar.bz2">dvdisaster-0.72.tar.bz2</a></td></tr>
    <tr><td align="right">Digital signature:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.72.tar.bz2.gpg">dvdisaster-0.72.tar.bz2.gpg</a></td></tr>
    <tr><td align="right">MD5 checksum:&nbsp;</td>
        <td>efa35607d91412a7ff185722f270fb8a</td></tr>
    <tr><td colspan="2"><img width=1 height=3</td></tr>

    <tr><td align="right">Binary for Mac OS X 10.5 / x86:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.72.app.zip">dvdisaster-0.72.app.zip</a>&nbsp;--&nbsp;please read these <a href="download30.php#mac">hints</a> first</td></tr>
    <tr><td align="right">Digital signature:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.72.app.zip.gpg">dvdisaster-0.72.app.zip.gpg</a></td></tr>
    <tr><td align="right">MD5 checksum:&nbsp;</td>
        <td>1f28385b2b6d64b664fd416eb4c85e80</td></tr>
    <tr><td colspan="2"><img width=1 height=3</td></tr>

    <tr><td align="right">Binary for Windows:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.72-setup.exe">dvdisaster-0.72-setup.exe</a></td></tr>
    <tr><td align="right">Digital signature:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.72-setup.exe.gpg">dvdisaster-0.72-setup.exe.gpg</a></td></tr>
    <tr><td align="right">MD5 checksum:&nbsp;</td>
        <td>cc8eb2af384917db8d6d983e1d4aac69</td></tr>
<?php
  }
?>
  </table>
</td></tr>
<tr bgcolor="#000000"><td colspan="2"><img width=1 height=1 alt=""></td></tr>
<tr><td colspan="2">
Most important changes in this version:<p>
<ul>
<li>Support for <a href="qa10.php#media">Blu-Ray media</a></li>
<li>"Raw" reading and C2 scans for CD media</li>
<li>Selectable number of reading attempts</li>
<li>First native Mac OS X application bundle</li>
<li>NetBSD-Port by Sergey Svishchev</li>
<li>Improved media type recognition</li>
<li>Info window describing inserted medium</li>
<li>Improved and enhanced preferences dialog</li>
<li>Reworked and enhanced documentation</li>
<li>Russian translations by Igor Gorbounov</li>
<li>... and many more small changes and fixes.</li>
</ul>

<b>Patches</b> (small changes after version 0.72; files above have been updated):<p>

<b>0.72 pl2</b> 
This version introduces a workaround which prevents parallel SCSI
adapters from freezing under Linux. 
Upward compatibility with versions 0.79.x has been improved.<br>
The Windows and Mac OS X versions are now built with the development
environment of dvdisaster 0.79.x and are therefore shipped with newer
versions of the GTK+ graphical toolkit libraries. This update requires
some changes in internal scripts resulting in a different checksum of the
source package (the package published on Oct 31th had the md5 checksum
86110e212aa1bf336a52ba89d3daa93d and is still valid for Linux, FreeBSD 
and NetBSD).(07-11-2010)<p>

<b>0.72 pl1</b> Pablo Almeida provided Portuguese translations of the screen texts.
Added workaround to avoid Win XP freezing on certain CD-RW/drive pairs.(08-Aug-2009)<p>
<i>Update: The workaround has been found to be ineffective in some cases. A
better workaround is included in <a href="download40.php">version 0.79.x</a>;
unfortunately it can not be easily backported into the stable version.</i> (06-Feb-2010)<p>

<b>0.72</b> This is the first stable version of the 0.72 branch.
Igor Gorbounov has completed the russian online documentation.
Some minor bugs from the first release candidate have been removed.<p>
Newer Windows versions may not display the proper screen language
under certain language settings. This problem is rather complex
and will be addressed in the upcoming 0.73.x releases. (04-Jul-2009)
<p>
 
<b>0.72-rc1</b> First release candidate. (11-Apr-2009)
</td></tr></table><p>

If the links above fail to download 
please try getting dvdisaster via
<a href="http://sourceforge.net/projects/dvdisaster/files">SourceForge</a>.

<pre> </pre>

<b>Previous release</b> - upgrading to version 0.72 is recommended.<p>

<table class="download" cellpadding="0" cellspacing="5">
<tr><td><b>dvdisaster-0.70</b></td><td align="right">04-Mar-2008</td></tr>
<tr bgcolor="#000000"><td colspan="2"><img width=1 height=1 alt=""></td></tr>
<tr><td colspan="2">
  <table>
    <tr><td align="right">&nbsp;&nbsp;Source code for all operating systems:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.70.6.tar.bz2">dvdisaster-0.70.6.tar.bz2</a></td></tr>
    <tr><td align="right">Digital signature:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.70.6.tar.bz2.gpg">dvdisaster-0.70.6.tar.bz2.gpg</a></td></tr>
    <tr><td align="right">MD5 checksum:&nbsp;</td>
        <td>c6d2215d7dd582475b19593dfa4fbdc2</td></tr>
    <tr><td colspan="2"><img width=1 height=3</td></tr>

    <tr><td align="right">Binary for Windows:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.70.6-setup.exe">dvdisaster-0.70.6-setup.exe</a></td></tr>
    <tr><td align="right">Digital signature:&nbsp;</td>
        <td><a href="http://dvdisaster.net/downloads/dvdisaster-0.70.6-setup.exe.gpg">dvdisaster-0.70.6-setup.exe.gpg</a></td></tr>
    <tr><td align="right">MD5 checksum:&nbsp;</td>
        <td>82f74bebd08ab7ae783ddc5dd0bba731</td></tr>
  </table>
</td></tr>
<tr bgcolor="#000000"><td colspan="2"><img width=1 height=1 alt=""></td></tr>
<tr><td colspan="2">
The RS02 error correction method
is fully supported in the graphical user interface. Images created
with RS02 can be used 
with the adaptive reading strategy.<p>

Julian Einwag started porting dvdisaster 
to Mac OS X / Darwin.<p>

Daniel Nylander provided Swedish translations of the screen texts.<p>

<b>Patches</b> (small changes after version 0.70; files above have been updated):<p>

<b>pl6</b> Rolled back support for localized file names
as it broke large file support under Windows. A new handler
for localized file names will first be tested in the experimental version
0.71.25. <i>(04-Mar-2008)</i><p>

<b>pl5</b> 
Fixes a problem with newer Linux kernels which may lead to a frozen system under
some circumstances. Treatment of file names containing localized characters has
been improved. 
Contains backports of major bug fixes from 0.71.24. <i>(24-Feb-2008)</i>.<p>

<b>pl4</b> provides better compatibility with two layered DVDs 
(DVD-R DL and DVD+R DL).<br> 
Some minor bugs have been fixed. <i>(20-Jan-2007)</i>.<p>

<b>pl3</b> fixes incorrect recognization of unsupported CD formats which
produced a Windows blue screen under rare circumstances. Added cancel option
during RS02 initialization on DVD RW media.
<i>(10-Dec-2006)</i>.<p>

<b>pl2</b> fixes incorrect memory freeing when the program window is closed.
Unpacking of documentation screen shots is fixed for PPC platforms.
Only the source code archives have been updated.
<i>(03-Oct-2006)</i>.<p>

<b>pl1</b> fixes a bug in adaptive reading for RS02 which would sometimes result in
reading insufficient data for a successful recovery. Adds some small
improvements of documentation and usability. <i>(30-Jul-2006)</i>
</td></tr></table><p>


The dvdisaster source code is also
<a href="http://sourceforge.net/cvs/?group_id=157550">available via CVS</a>.
Some file of particular interest are:
<ul>
<li><a href="http://dvdisaster.cvs.sourceforge.net/dvdisaster/dvdisaster/CHANGELOG?view=markup">CHANGELOG</a>- changes from the previous versions;</li>
<li><a href="http://dvdisaster.cvs.sourceforge.net/dvdisaster/dvdisaster/CREDITS.en?view=markup">CREDITS.en</a>- people involved in the project;</li>
<li><a href="http://dvdisaster.cvs.sourceforge.net/dvdisaster/dvdisaster/INSTALL?view=markup">INSTALL</a> - additional hints for installation;</li>
<li><a href="http://dvdisaster.cvs.sourceforge.net/dvdisaster/dvdisaster/README?view=markup">README</a> - a road map of the source code archive.</li>
</ul>

<!--- do not change below --->

<?php
# end_page() adds the footer line and closes the HTML properly.

end_page();
?>
