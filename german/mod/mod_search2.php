<?php     defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
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
<form name="searchfrm" method="post" action="<? echo("$mosConfig_absolute_path/german/data/list.php");?>">
        
          
  <table width="100%" border="0" cellspacing="5" cellpadding="0">
    <tr> 
      <td> <SELECT name="schedule">
          <option value="0" >Kreuzfahrtpläne....... &gt;</option>
          <?php echo $option1; ?> </SELECT> </td>
    </tr>
    <tr> 
      <td> <SELECT name="destination">
          <option value="0" >auchgebiete........... &gt;</option>
          <?php echo $option2; ?> </SELECT> </td>
    </tr>
    <tr> 
      <td> <SELECT name="boats">
          <option value="0" >Boot ........................&gt;</option>
          <?php echo $option3; ?> </SELECT> </td>
    </tr>
    <tr> 
      <td> <input name="submit" type="submit" value="Suche">
        | <a href="<? echo("$mosConfig_absolute_path/german/data/login.php"); ?>">Manage Cruises</a></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
  </table>
      </form>