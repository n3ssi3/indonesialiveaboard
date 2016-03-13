<?php
session_start();
define( '_VALID_MOS', 1 );
require_once('../mod/conn.php'); $msg=""; $msgmail="";
$lost=$database->getEscaped($_GET[trim(lost)]);
$Submit=$database->getEscaped($_POST[trim(Submit)]);
if ($Submit=="Login") {

     $username=$database->getEscaped($_POST[trim(username)]);
	 //$password=md5($database->getEscaped($_POST[trim(password)]));
	 $password=$database->getEscaped($_POST[trim(password)]);
	 if  (check_email_address($username))	{

	 $sql = "select * from usertbl where usertbl.user='$username' and  usertbl.password='$password'";
   	 $database->setQuery( $sql );
     $my = null;
     $database->loadObject( $my );
     if ($my->user) {


    if(isset($_SESSION['signid'])) {
	   session_unset();

	 } else {
	    $_SESSION["signid"]='1';
	    $_SESSION["name"]= $my->name;
		header ("location:admin.php");

	   }
    } else {
	    $msg="<span class=\"style1\">Incorrect login! Please try again.</span>"; 	  }
    }else {
      $msg="<span class=\"style1\">Invalid email address.</span>";
    }
 }

 if ($Submit=="Get Password") {
   $username=$database->getEscaped($_POST[trim(username)]);
   if (check_email_address($username)) {
	 //select user id
	 $sql = "select * from usertbl where usertbl.user='$username'";
     $database->setQuery( $sql );
     $my = null;
     $database->loadObject( $my );
     if ($my->username) {


	  		    $subject="$mosConfig_live_site. Login Information";
  	            $msgmail="Dear $my->user,<br><br>
	            This is your login information :<br>
	            Email : $my->user <br>
	            Password : $my->password <br>
	            Please keep this information securely. <br><br>
	            Thank you <br><br>
	            Best Regards <br>
 	            Administrato<br>
				$mosConfig_live_site<br>";

			    include ".../vlibMimeMail.php";
			    $mail2 = new vlibMimeMail;
			    $mail2->to($my->username);
			    $mail2->from($GBVHEMAIL);
			    $mail2->subject($subject);
			    $mail2->htmlBody($msgmail);
			    $mail2->send();

	                 $msg="<span class=\"style2\">Login information has been sent to $username.</span>";
		         }
	              else {
 	                    $msg="<span class=\"style1\">Sorry,email not found. Please try again.</span>";
	              }

       }else { $msg="<span class=\"style1\">Invalid email address</span>";}
     }

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Liveaboards - Dive &amp; Cruises</TITLE>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<STYLE type=text/css></STYLE>

<META content="MSHTML 6.00.2800.1476" name=GENERATOR>
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
                <p align="center"><br>
                </p>
                <p align="center">&nbsp;</p>
              </TD>
              <TD vAlign=top width=5
          background="../images/z6.jpg"><IMG height=4
            src="../images/z6.jpg" width=5></TD>
              <TD rowspan="2" vAlign=top><div align="center">
                  <TABLE cellSpacing=3 cellPadding=5 width=430 border=0>
                    <TBODY>
                      <TR>
                        <TD height="28">
                          <?php
		   	     if(isset($_SESSION['signid'])) { echo "<script language='JavaScript'> window.location.href = 'admin.php'; </script>";
 } else { if ($lost=='1') { include "../mod/mod_lostpassword.php";} else { include "../mod/mod_login.php";}	}
			 ?>
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
email: <a href="mailto:cruises@indonesia-liveaboard.com" class="style30">cruises@indonesia-liveaboard.com</a><br>
2005 &copy; Copyright Indonesia- Liveaboard. Alle Rechte vorbehalten<br>
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
