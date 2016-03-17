#!/usr/bin/perl
 
$| = 1;
require "cgi-lib.pl";
&ReadParse(*input);
$box_10 = $input{'item'};

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
    <td height="57" nowrap="nowrap" id="tagline" valign="top"><div align="center">Contact Us</div></td>
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


           
           
           
         <FORM METHOD=POST ACTION=https://diamond.he.net/cgi-bin/suid/~tivanet/sendit.pl>
           
          
          Your email address:  <INPUT TYPE="text" NAME="box_1"><br>
           <p> 
          Enter your message:
          <TEXTAREA NAME = "box_2" rows="10" cols="40">
          </TEXTAREA>
          <p>
          <INPUT TYPE ="submit" VALUE="Submit">
          <INPUT TYPE ="reset">  
          </FORM> 
   
   




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
