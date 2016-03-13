<?php session_start();
if(!isset($_SESSION['signid'])){header("location:login.php");}
define( '_VALID_MOS', 1 );
require_once('.../mod/conn.php');$id=$database->getEscaped($_GET[trim(id)]);
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
                            <TD bgcolor="#ffffff"><IMG
                                src="../images/m3.jpg" alt="indonesien_liveaboard_tauchfahrten_sport_tauch_kreuzfahrten"
                                width=67 height=40></TD>
                            <TD bgcolor="#ffffff"><IMG
                                src="../images/m4.jpg" alt="indonesien_liveaboard_tauchfahrten_sport_tauch_kreuzfahrten"
                                width=67 height=40></TD>
                            <TD bgcolor="#ffffff"><IMG
                                src="../images/m2.jpg" alt="indonesien_liveaboard_tauchfahrten_sport_tauch_kreuzfahrten"
                                width=67 height=40></TD>
                          </TR>
                          <TR>
                            <TD colspan="3"><img src="../images/spacer.gif" width="10" height="67"></TD>
                          </TR>
                        </TBODY>
                      </TABLE>
                      <div align="right">
                        <table width="116"  border="0" align="left" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="116" height="59">&nbsp;</td>
                          </tr>
                          <tr>
                            <td><div align="center"><img src="../images/englishflag.gif" width="43" height="30" border="0" usemap="#MapMap"><br>
                                  <strong>Englische Webseite</strong>
                                  <map name="MapMap">
                                    <area shape="rect" coords="3,0,41,27" href=<?php echo("$mosConfig_absolute_path/index.php");?>>
                                  </map>
                            </div></td>
                          </tr>
                        </table>
                      </div></td>
                    <td width="123" background="../images/z2.jpg">&nbsp;</td>
                    <td width="320" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><div align="center"><img src="../images/spacer.gif" width="10" height="45"><span class="style5"><br>
                          </span></div></td>
                        </tr>
                        <tr>
                          <td height="22" valign="top">&nbsp;&nbsp;<span class="style19"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><a href=../index.php><strong>Hauptseite</strong></a></font></span>
                            <span class="style25">|</span> <a href="../boats/contactus.php" class="style19"><strong>Kontakadresse</strong></a></td>
                        </tr>
                        <tr>
                          <td><img src="../images/m1.jpg" alt="indonesien_liveaboard_tauchfahrten_sport_tauch_kreuzfahrten" width="325" height="104"></td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td colspan="3" bgcolor="#006699"><div align="center"><span class="style5"></span></div> <div align="right"><strong><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;&nbsp;</font></strong></div></td>
                  </tr>
                </table></TD></TR></TBODY></TABLE></TD></TR>
  <TR>
    <TD bgColor=#ffffff>
      <TABLE cellSpacing=0 cellPadding=0 width="775" border=0>
          <TBODY>
            <TR>
              <TD width=330 rowspan="2" align=middle vAlign=top bgcolor="#4CCFE3">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><table width="278" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="176" valign="top" background="../images/bgsearch.jpg">
                            <table width="88%" border="0" align="right" cellpadding="0" cellspacing="0">
                              <tr>
                                <td height="42">&nbsp;</td>
                              </tr>
                              <tr>
                                <td valign="top">
                                  <?php define( '_VALID_MOS', 1 ); include "../mod/mod_search.php"; ?>
                                </td>
                              </tr>
                            </table></td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td><table width="278" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="176" valign="top" background="../images/bgdestination.jpg"><table width="87%" border="0" align="left" cellpadding="0" cellspacing="0">
                              <tr>
                                <td height="33" colspan="2">&nbsp;</td>
                              </tr>
                              <tr>
                                <td width="9%"><div align="center"><strong><img src="../images/dot.gif" width="4" height="4"></strong></div></td>
                                <td width="91%" height="18" class="style30"><span class="style27"><strong><span class="style1 style27 style46 style48"><a href="../boats/liburan_index.php" class="style30">Bunaken
                                  Marine Park - Sulawesi </a></span></strong></span></td>
                              </tr>
                              <tr>
                                <td><div align="center"><strong><img src="../images/dot.gif" width="4" height="4"></strong></div></td>
                                <td height="18" class="style30"><span class="style49"><a href="../boats/monalisa_index.php" class="style30">Komodo
                                  Island und National Park</a></span></td>
                              </tr>
                              <tr>
                                <td><div align="center"><strong><img src="../images/dot.gif" width="4" height="4"></strong></div></td>
                                <td height="18" class="style30"><span class="style49"><strong><a href="../boats/wallacea_index.php" class="style30">Sulwesi-
                                  Togian und Banggai Islands </a></strong></span></td>
                              </tr>
                              <tr>
                                <td><div align="center"><strong><img src="../images/dot.gif" width="4" height="4"></strong></div></td>
                                <td height="18" class="style30"><span class="style49"><a href="../boats/moana_index.php" class="style30">Komodo
                                  und Irian Jaya</a></span></td>
                              </tr>
                              <tr>
                                <td><div align="center"><strong><img src="../images/dot.gif" width="4" height="4"></strong></div></td>
                                <td height="18" class="style30"><span class="style29 style48 style46"><a href="../boats/ombak_index.php" class="style30">Komodo
                                  Marine Park</a></span> </td>
                              </tr>
                              <tr>
                                <td><div align="center"><strong><img src="../images/dot.gif" width="4" height="4"></strong></div></td>
                                <td height="18" class="style30"><div align="center" class="style50">
                                    <span class="style30"><strong><strong><strong><a href="../boats/kararu_index.php">Komodo</a><a href="../boats/voyager_index.php">/</a><a href="../boats/kararu_index.php">Alor/Flores/Irian/Raya
                                    Ampat <br>
                                    &quot;Exclusive Liveabaord&quot;</a></strong></strong></strong></span>
                                  </div></td>
                              </tr>
                              <tr>
                                <td height="18" colspan="2"><div align="center">
                                    <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','103','height','24','src','../hotdeals','quality','high','pluginspage','http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#4FB7DC','movie','../hotdeals' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
                                      <param name="movie" value="../hotdeals.swf">
                                      <param name="quality" value="high">
                                      <param name="bgcolor" value="#4FB7DC">
                                      <embed src="../hotdeals.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" bgcolor="#4FB7DC"></embed>
                                    </object></noscript>
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
                <p align="center"><br>
                  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0','width','285','height','60','src','../images/dive_banner','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','../images/dive_banner' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="285" height="60">
                    <param name="movie" value="../images/dive_banner.swf">
                    <param name="quality" value="high">
                    <embed src="../images/dive_banner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="285" height="60"></embed>
                  </object></noscript>
                </p>
                <p align="center">
                  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0','width','285','height','60','src','../images/movie2','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','../images/movie2' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="285" height="60">
                    <param name="movie" value="../images/movie2.swf">
                    <param name="quality" value="high">
                    <embed src="../images/movie2.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="285" height="60"></embed>
                  </object></noscript>
                </p>
                <p align="center" class="style31"><a href="../shoppingpage/ttshoppinggallery1.htm"><br>
                  </a><a href="../map.swf"><img src="../images/balimap.jpg" alt="indonesien_liveaboard_tauchfahrten_sport_tauch_kreuzfahrten" width="200" height="117" border="0"></a>
                  <br>
                  <strong class="style31 style52">Bitte klicken sie obige Bali
                  Karte <br>
                  f&uuml;r die Tauch Terminal Standorte <br>
                  auf Bali. </strong></p>
                <p align="center" class="style31"><a href=".../images/tt.zip"><img src="../images/e-brochure.jpg" alt="tauch terminal digitale e-broschure" width="133" height="187" border="0"></a><br>
                  <a href=".../images/tt.zip" class="style52">Bitte downloaden
                  sie unsere aktuelle &amp; informative digitale Broschure <br>
                  (nur 2,4 Mb) </a></p>
                <p align="center">&nbsp;</p></TD>
              <TD vAlign=top width=5
          background="../images/z6.jpg"><IMG height=4
            src="../images/z6.jpg" width=5></TD>
              <TD rowspan="2" vAlign=top><div align="center">
                  <TABLE cellSpacing=3 cellPadding=5 width=430 border=0>
                    <TBODY>
                      <TR>
                        <TD>
                          <?php include "../mod/mod_listdetail.php"; ?>
                        </TD>
                      </TR>
                    </TBODY>
                  </TABLE>
                </div></TD>
            </TR>
            <TR>
              <TD vAlign=top
          background="../images/z6.jpg">&nbsp;</TD>
            </TR>
          </TBODY>
        </TABLE></TD></TR>
  <TR>
    <TD>
      <TABLE height=26 cellSpacing=0 cellPadding=0 width="100%"
      background="../images/z4.gif" border=0>
        <TBODY>
        <TR>
          <TD height="8"><img src="../images/spacer.gif" width="10" height="8"></TD>
        </TR>
        <tr>
          <td height="18" bgcolor="#FFFFFF">
            <div align="center"><strong><br>
              Jl. Danau Tamblingan X, No. 31 <br>
80000 Jimbaran, Bali, Indonesien<br>
Telefon: +62-361 - 774504/772920<br>
Fax: +62-361 -778473 <br>
<a href="mailto:cruise@indonesialiveaboard.com">Bitte emailen sie uns!</a><br>
2005 &copy; Copyright IndonesiaLiveaboard. Alle Rechte vorbehalten<br>
</strong></div>
          </td>
        </tr>
        </TBODY>
      </TABLE>
    </TD></TR></TBODY></TABLE>

<p align="center">&nbsp;</p>
<p align="center" class="style1 style37"> <span class="style59">Bali Tauch Resort,liveaboard,tauchfahrten,tauchtrips,<br>
  Wracktauchen,tauchen,tauchen in Indonesien,Liveaboard in Indonesien,Liveaboard und Tauchausbildung,Rifftauchen,Steilwandtauchen,Segeltour in Indonesien,Segeltrips,Bali Tauchhotel,deutsches liveaboard in indonesien,luxus liveaboard in indonesien,tauchfahrten in indonesien,tauchen in sulawesi,tauchen in irian jaya,tauchen in alor,tauchen in komodo,komodo marine park,bunaken marine park,tauchen auf bali,wracktauchen,bali,alor,sulawesi,flores,komodo,<br>
  tauchabenteuer,tauchexpedition, <strong>tauchen komodo,tauchen alor,tauchen irian jaya, segel fahrt,tauchfahrt,tauchen sulawesi,exklusives tauchen,<br>
nitrox gratis,tauch kreuzfahrt indonesien</strong></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</BODY></HTML>
