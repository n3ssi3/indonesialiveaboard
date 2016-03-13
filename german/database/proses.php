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
.style1 {color: #0000CC}
.style5 {
	font-size: 14pt;
	color: #FFFFFF;
	font-weight: bold;
}
.style13 {font-size: 10pt}
.style14 {
	font-size: 16px;
	font-weight: bold;
	color: #0033CC;
}
.style25 {color: #FFFFFF}
.style26 {
	font-size: 10pt;
	color: #FFFFFF;
	font-weight: bold;
}
.style27 {color: #0033CC}
</style>
</HEAD>
<BODY bottomMargin=0 bgColor=#006666 leftMargin=0 topMargin=0 rightMargin=0 
marginheight="0" marginwidth="0">
<TABLE width="775" border=0 align="center" cellPadding=0 cellSpacing=0>
  <TBODY>
  <TR>
    <TD>
      <TABLE height=194 cellSpacing=0 cellPadding=0 width="100%" 
      background="images/z3.gif" border=0>
        <TBODY>
        <TR>
              <TD height="194" vAlign=top> 
                <TABLE cellSpacing=0 cellPadding=0 width="100%" 
            background="images/dotline.gif" 
              border=0><TBODY>
              <TR>
                <TD height=1><IMG height=1 
                  src="images/dotline.gif" 
              width=3></TD></TR></TBODY></TABLE>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr> 
                    <td width="332" height="171" valign="bottom" background="images/z1.jpg">
<TABLE width="180" height=40 
                              border=0 align="right" cellPadding=2 cellSpacing=0>
                        <TBODY>
                          <TR> 
                            <TD bgcolor="#ffffff"><IMG height=40 
                                src="images/m3.jpg" 
                                width=67></TD>
                            <TD bgcolor="#ffffff"><IMG height=40 
                                src="images/m4.jpg" 
                                width=67></TD>
                            <TD bgcolor="#ffffff"><IMG height=40 
                                src="images/m2.jpg" 
                                width=67></TD>
                          </TR>
                          <TR> 
                            <TD colspan="3"><img src="images/spacer.gif" width="10" height="67"></TD>
                          </TR>
                        </TBODY>
                      </TABLE>
                      <div align="right"></div></td>
                    <td width="123" background="images/z2.jpg">&nbsp;</td>
                    <td width="320" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><div align="center"><img src="images/spacer.gif" width="10" height="45"><span class="style5"><br> 
                          </span></div></td>
                        </tr>
                        <tr> 
                          <td height="22" valign="top">&nbsp;<span class="style13"><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><a href="proses.php"><strong>Home</strong></a></font></span> </td>
                        </tr>
                        <tr> 
                          <td><img src="images/m1.jpg" width="325" height="104"></td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr bgcolor="#006699"> 
                    <td colspan="3"><div align="center"><span class="style5"></span></div> <div align="right"><strong><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;&nbsp;</font></strong></div></td>
                  </tr>
                </table></TD></TR></TBODY></TABLE></TD></TR>
  <TR>
    <TD bgColor=#ffffff>
      <TABLE cellSpacing=0 cellPadding=0 width="775" border=0>
        <TBODY>
        <TR>
              <TD width=330 align=middle vAlign=top bgcolor="#4DCEE3"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr> 
                    <td><table width="278" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr> 
                          <td height="176" valign="top" background="images/bgsearch.jpg">
                            <?
		  error_reporting(0);
		  include "conn.sc";
		  $option1 = "";
		  $option2 = "";
		  $option3 = "";
		  $data1 = mysql_query("select departure_date_mm, departure_date_yyyy from cruise group by departure_date_yyyy, departure_date_mm"); 
		  while ($hasil1 = mysql_fetch_array($data1))
		  {
		  switch ($hasil1['departure_date_mm']) {
			case '01':
				$temp_month1 = "Jan";
				break;
			case '02':
				$temp_month1 = "Feb";
				break;
			case '03':
				$temp_month1 = "Mar";
				break;
			case '04':
				$temp_month1 = "Apr";
				break;
			case '05':
				$temp_month1 = "May";
				break;
			case '06':
				$temp_month1 = "Jun";
				break;
			case '07':
				$temp_month1 = "Jul";
				break;
			case '08':
				$temp_month1 = "Aug";
				break;
			case '09':
				$temp_month1 = "Sep";
				break;
			case '10':
				$temp_month1 = "Oct";
				break;
			case '11':
				$temp_month1 = "Nov";
				break;
			case '12':
				$temp_month1 = "Dec";
				break;
			}
			
		  		$option1 .= "<option value='".$hasil1['departure_date_mm']."-".$hasil1['departure_date_yyyy']."'>".$temp_month1." - ".$hasil1['departure_date_yyyy']."</option>"; 
		  }
		  $data2 = mysql_query("select destination from cruise group by destination"); 
		  while ($hasil2 = mysql_fetch_array($data2))
		  {
		  $option2 .= "<option value='".$hasil2['destination']."'>".$hasil2['destination']."</option>"; 
		  }
		  $data3 = mysql_query("select boat_name, boat_code from cruise group by boat_name"); 
		  while ($hasil3 = mysql_fetch_array($data3))
		  {
		  $option3 .= "<option value='".$hasil3['boat_code']."'>".$hasil3['boat_name']."</option>"; 
		  }
		  $conn = mysql_close();
		?>
                            <table width="88%" border="0" align="right" cellpadding="0" cellspacing="0">
              <tr> 
                <td height="42">&nbsp;</td>
              </tr>
              <tr> 
                <td><?php include "mod/mod_search.php"; ?></td>
              </tr>
            </table></td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td><table width="278" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr> 
                          <td height="176" valign="top" background="images/bgdestination.jpg"><table width="87%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td height="33" colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="9%"><div align="center"><img src="images/dot.gif" width="4" height="4"></div></td>
                              <td width="91%" height="18"><span class="style1 style27"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="myanggun_divedestinations.php">Similan Islands - Thailand </a></font></span></td>
                            </tr>
                            <tr>
                              <td><div align="center"><img src="images/dot.gif" width="4" height="4"></div></td>
                              <td height="18"><span class="style1 style27"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="myanggun_divedestinations.php">Myanmar/Burma</a></font></span></td>
                            </tr>
                            <tr>
                              <td><div align="center"><img src="images/dot.gif" width="4" height="4"></div></td>
                              <td height="18"><span class="style1 style27"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="wallacea_divecruises.php">Sulwesi- Togian and Banggai Islands</a> </font></span></td>
                            </tr>
                            <tr>
                              <td><div align="center"><img src="images/dot.gif" width="4" height="4"></div></td>
                              <td height="18"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><span class="style27"><a href="baruna_divedestinations.php">Bali </a></span></font></td>
                            </tr>
                            <tr>
                              <td><div align="center"><img src="images/dot.gif" width="4" height="4"></div></td>
                              <td height="18"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><span class="style27"><a href="seasafari_divedestinations.php">Alor</a> </span></font></td>
                            </tr>
                            <tr>
                              <td><div align="center"><img src="images/dot.gif" width="4" height="4"></div></td>
                              <td height="18"><span class="style1 style27"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="seasafari_divedestinations.php">Komodo</a></font></span></td>
                            </tr>
                            <tr>
                              <td height="18" colspan="2"><div align="center">
                                  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
                                    <param name="movie" value="hotdeals.swf">
                                    <param name="quality" value="high">
                                    <param name="bgcolor" value="#4FB7DC">
                                    <embed src="hotdeals.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" bgcolor="#4FB7DC"></embed>
                                  </object>
                              </div></td>
                            </tr>
                            <tr>
                              <td colspan="2"><img src="images/spacer.gif" width="10" height="8"></td>
                            </tr>
                          </table></td>
                        </tr>
                      </table></td>
                  </tr>
                </table>
                <p align="center"><br>
                  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="285" height="60">
                    <param name="movie" value="IMAGES/dive_banner.swf">
                    <param name="quality" value="high">
                    <embed src="IMAGES/dive_banner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="285" height="60"></embed>
                  </object>
                </p>
                <p align="center">
                  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="285" height="60">
                    <param name="movie" value="IMAGES/idcbanner.swf">
                    <param name="quality" value="high">
                    <embed src="IMAGES/idcbanner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="285" height="60"></embed>
                  </object>
</p>
                <p align="center">
                  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="285" height="60">
                    <param name="movie" value="IMAGES/villas_banner.swf">
                    <param name="quality" value="high">
                    <embed src="IMAGES/villas_banner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="285" height="60"></embed>
                  </object>
</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p align="center"><br>
                <img src="IMAGES/MANTA%204.png" width="238" height="167" border="1"> </p>
                <p align="center">&nbsp;</p>
                <p align="center">&nbsp;</p>
                <p align="center"><span class="12wh style14 style1"><img src="IMAGES/plane%20wreck.jpg" width="239" height="165" border="1"></span></p>
              <p align="center">&nbsp;</p>              </TD>
          <TD vAlign=top width=5 
          background="images/z6.jpg"><IMG height=4 
            src="images/z6.jpg" width=5></TD>
          <TD vAlign=top>
            <TABLE cellSpacing=3 cellPadding=5 width=430 border=0>
              <TBODY>
              <TR>
                      <TD> <table width="100%" border="0" cellspacing="5" cellpadding="0">
                          <tr>
                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr> 
                                  <td> 
                                    <?
		  			include "conn.sc";
							
							$tambah = "";
							if ($schedule != "0")
							{
								$departure_date_mm = substr($schedule, 0, 2);
								$departure_date_yyyy = substr($schedule, -4, 4);
								$tambah .= " departure_date_mm='".$departure_date_mm."' and departure_date_yyyy='".$departure_date_yyyy."'";

								if ($destination != "0")
								{
									$tambah .= " and destination like '%".$destination."%'";
									if ($boats != "0")
									{
										 $tambah .= " and boat_code='".$boats."'";
									}
								} elseif($boats != "0") {
									$tambah .= " and boat_code='".$boats."'";
								}
							} elseif($destination != "0") {
								$tambah .= " destination like '%".$destination."%'";
									if ($boats != "0")
									{
										 $tambah .= " and boat_code='".$boats."'";
									}
							} elseif($boats != "0"){
								$tambah .= " boat_code='".$boats."'";
							}
						
							if ($tambah != "")
								{
									$sql = "select * from cruise where".$tambah." order by boat_name";
								} else {
									$sql = "select * from cruise order by boat_name";
							}
						

						$data = mysql_query($sql);
						
						//blocking display jika ngak ada record yang dihasilkan
						$jml_baris = mysql_num_rows($data);
						if($jml_baris >= "0")
						{
							$jml_baris_per_halaman = 5;
							$counter = 0;
							
							if((!(isset($halaman))) || ($halaman < 0) || ($halaman==""))
							{
								$halaman = 1;
								$jml_max_baris = $jml_baris_per_halaman;
								$mulai_baris = 0;
							} else {
								$jml_max_baris = $jml_baris_per_halaman * $halaman;
								$mulai_baris = $jml_max_baris - $jml_baris_per_halaman;
							};

							//menampilkan data halaman
								echo "Record : ";
								echo $mulai_baris + 1;
								
								$max_halaman = bcdiv($jml_baris, $jml_baris_per_halaman) + 1;
								
								if($halaman >= $max_halaman)
								{
								echo " - ".$jml_baris." of ".$jml_baris;
								} else {
								echo " - ".$jml_max_baris." of ".$jml_baris;
								};
								
//mulai table =========================
								echo "</td></tr>";
								echo "<tr><td align=right><b><a href=login.php>Admin Page</a></b></td></tr>";
								echo "<tr><td>&nbsp;</td></tr>";

							while ($hasil = mysql_fetch_array($data))
							{
								if($mulai_baris >= $jml_max_baris)
								{
									break 1;
								}  
								
								if($counter >= $mulai_baris)
								{
									$mulai_baris++;
//mulai looping utk menampilkan data ========================
									
									  echo "<tr>"; 
										echo "<td>"; 
										echo "  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
										echo "	<tr> ";
										echo "	  <td colspan=\"3\"><b><a href=\"".$hasil['link_details']."\">".strtoupper($hasil['boat_name'])."</a>"; 
										echo "		</b></td>";
//										echo "		</b>(".$hasil['boat_code'].")</td>";
										echo "	</tr>";
										echo "	<tr> ";
										echo "	  <td width=\"29%\">Cruise Code</td>";
										echo "	  <td width=\"3%\">:</td>";
										echo "	  <td width=\"68%\">".$hasil['cruise_code']."</td>";
										echo "	</tr>";
										echo "	<tr> ";
										echo "	  <td width=\"29%\">Boat Code</td>";
										echo "	  <td width=\"3%\">:</td>";
										echo "	  <td width=\"68%\">".$hasil['boat_code']."</td>";
										echo "	</tr>";
										echo "	<tr> ";
										echo "	  <td width=\"29%\">Boat type</td>";
										echo "	  <td width=\"3%\">:</td>";
										echo "	  <td width=\"68%\">".$hasil['boat_type']."</td>";
										echo "	</tr>";
										echo "	<tr> ";
										echo "	  <td width=\"29%\">Dive Destinations</td>";
										echo "	  <td width=\"3%\">:</td>";
										echo "	  <td width=\"68%\"><a href='".$hasil['link_area']."'>".$hasil['destination']."</a></td>";
										echo "	</tr>";
										echo "	<tr> ";
										echo "	  <td>Tour-Start/End</td>";
										echo "	  <td>:</td>";
										echo "	  <td>".$hasil['derive']."</td>";
										echo "	</tr>";
										echo "	<tr> ";
										echo "	  <td>Duration</td>";
										echo "	  <td>:</td>";
										echo "	  <td>".$hasil['duration']."</td>";
										echo "	</tr>";
										echo "	<tr> ";
										echo "	  <td>Departure date</td>";
										echo "	  <td>:</td>";
										echo "	  <td>".$hasil['departure_date_dd']."-".$hasil['departure_date_mm']."-".$hasil['departure_date_yyyy']."</td>";
										echo "	</tr>";
										echo "	<tr> ";
										echo "	  <td>Departure time</td>";
										echo "	  <td>:</td>";
										echo "	  <td>".$hasil['departure_time']."</td>";
										echo "	</tr>";
										echo "	<tr> ";
										echo "	  <td>Return date</td>";
										echo "	  <td>: </td>";
										echo "	  <td>".$hasil['return_date_dd']."-".$hasil['return_date_mm']."-".$hasil['return_date_yyyy']."</td>";
										echo "	</tr>";
										echo "	<tr> ";
										echo "	  <td>Return time</td>";
										echo "	  <td>:</td>";
										echo "	  <td>".$hasil['return_time']."</td>";
										echo "	</tr>";
										echo "	<tr> ";
										echo "	  <td>Category</td>";
										echo "	  <td>:</td>";
										echo "	  <td>".$hasil['category']."</td>";
										echo "	</tr>";
										echo "	<tr> ";
										echo "	  <td>Price</td>";
										echo "	  <td>:</td>";
//										echo "	  <td><b>US$ ".sprintf("%01.2f", $hasil['price'])."</b></td>";
										echo "	  <td><b>".$hasil['price']."</b></td>";
										echo "	</tr>";
										echo "	<tr> ";
										echo "	  <td>Notes</td>";
										echo "	  <td>:</td>";
										echo "	  <td>".$hasil['notes']."</td>";
										echo "	</tr>";
										echo "	<tr> ";
										echo "	  <td>&nbsp;</td>";
										echo "	  <td>&nbsp;</td>";
										echo "	  <td><b><a href=\"".$hasil['link_details']."\">MORE DETAILS</a></b></td>";
										echo "	</tr>";
										echo "	<tr> ";
										echo "	  <td>&nbsp;</td>";
										echo "	  <td>&nbsp;</td>";
										echo "	  <td>&nbsp;</td>";
										echo "	</tr>";
										echo "  </table>";
										echo "</td>";
									  echo "</tr>";
									  echo "<tr>";
										echo "<td>&nbsp;</td>";
									  echo "</tr>";
	
								  }
								$counter++;
//akhir looping
								}								
}
mysql_close();

?>
                                <tr> 
                                  <td> 
                                    <?
							
							$alamat_website = "proses.php?schedule=".$schedule."&destination=".$destination."&boats=".$boats."&halaman=";
							echo "<table width='100%' border='1' cellspacing='0' cellpadding='0' bordercolor='#CCCCCC'>";
							echo "<tr>"; 
							echo "<td width='1%' bgcolor='#CCCCCC'><div align='center'><font face='Arial, Helvetica, sans-serif' size='2'>";
							
							$jml_halaman = bcdiv($jml_baris-1, $jml_baris_per_halaman) + 1;
							
							if($halaman <= 1)
							{
							echo "Previous :: ";
							} else{
							$previous = $halaman - 1;
							echo "<a href='".$alamat_website.$previous."' alt='Previous Page'>Previous</a> :: ";
							}
							
							for($i=1; $i <= $jml_halaman; $i++)
							{
							echo "<a href='".$alamat_website.$i."'>".$i."</a> :: ";
							}
							
							if($halaman >= $jml_halaman)
							{
							echo "Next";
							} else{
							$next = $halaman + 1;
							echo "<a href='".$alamat_website.$next."' alt='Next Page'>Next</a>";
							}
							
							echo "</font></div></td>";
							echo "</tr>";
							echo "</table>";
							?>
                                  </td>
                                </tr>
                              </table></td>
                          </tr>
                        </table></TD>
                    </TR></TBODY></TABLE>
            <div align="center">
              <p class="style14">&nbsp;</p>
              </div></TD>
        </TR></TBODY></TABLE></TD></TR>
  <TR>
    <TD>
      <TABLE height=26 cellSpacing=0 cellPadding=0 width="100%" 
      background="images/z4.gif" border=0>
        <TBODY> 
        <TR> 
          <TD height="8"><img src="images/spacer.gif" width="10" height="8"></TD>
        </TR>
        <tr> 
          <td height="18" bgcolor="#FFFFFF">
            <div align="center"><strong>Jl. Danau Tamblingan 31 <br>
              80000 Jimbaran, Bali, Indonesia<br>
              Phone: +62-361 - 774505/772920<br>
              Fax: +62-361 -778473 <br>
              info@liveaboard.com <br>
              2005 &copy; Copyright Liveaboard. All rights Reserved</strong></div>
          </td>
        </tr>
        </TBODY> 
      </TABLE>
    </TD></TR></TBODY></TABLE></BODY></HTML>
