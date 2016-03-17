#!/usr/bin/perl

$| = 1;
require "cgi-lib.pl";
&ReadParse(*input);
$box_1 = $input{'box_1'};
$box_2 = $input{'box_2'};

$tempfile = "/home/tivanet/tmp/mail.form";
open (TEMPFILE, "> $tempfile");
print TEMPFILE ("An incoming message from a fan:\n\n");
print TEMPFILE ("email address: $box_1\n");
print TEMPFILE ("Message: $box_2\n");
close (TEMPFILE);
system ("mail -s \'incoming fan mail!!\' johnj\@tivanet.com < $tempfile");
system ("rm /home/tivanet/tmp/mail.form");

print <<ENDOFHTML;
Content-type: text/html\n\n


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Montgomery Jazz Group - Contact Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://tivanet.com/mjg/mm_entertainment.css" type="text/css" />
</head>
<body bgcolor="#14285f">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="02021e">
    <td width="400" colspan="2" rowspan="2" nowrap="nowrap"><img src="http://tivanet.com/mjg/mm_entertainment_image.jpg" 
alt="Header image" 
width="400" height="140" border="0" /></td>
    <td width="360" height="58" nowrap="nowrap" id="logo" valign="bottom">Montgomery Jazz Group</td>
    <td width="100%">&nbsp;</td>
  </tr>
  <tr bgcolor="02021E">
    <td height="57" nowrap="nowrap" id="tagline" valign="top"><div align="center">Sample music</div></td>
	<td width="100%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#cc3300"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

   <tr>
    <td colspan="4"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

   <tr>
    <td colspan="4" bgcolor="#cc3300"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>
   <tr>
    <td colspan="5" id="dateformat">&nbsp;<br />
	&nbsp; &nbsp; <a href="http://tivanet.com/mjg/index.html">home</a><br />	</td>
  </tr>
  <tr>
    <td width="50" valign="top">&nbsp;</td>
   <td colspan="2" valign="top"><br />
	<table border="0" cellspacing="0" cellpadding="2" width="610">
        <tr>
          <td class="subHeader" colspan="3"><p style="margin-top: 0;">

           
   


</p>




            <p style="margin-bottom: 0;">&nbsp;</p>            </td>
        </tr>
        <tr>
          <td width="320" height="250" rowspan="2" align="center" class="subHeader">&nbsp;</td>
          <td width="30" rowspan="2">&nbsp;</td>
          <td width="260" class="sidebarHeader"><br />
		  <br />          </td>
        </tr>
        <tr>
          <td valign="top" class="bodyText">.


           <h3>
         Montgomery Jazz Group thanks you!           
           </h3>



        </tr>
      </table>	  </td>
	  <td></td>
  </tr>
  <tr>
    <td width="50">&nbsp;</td>
    <td width="350">&nbsp;</td>
    <td width="360">&nbsp;</td>
	<td width="100%">&nbsp;</td>
  </tr>
</table>
<br />
</body>
</html>


 



ENDOFHTML
