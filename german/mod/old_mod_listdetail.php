<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
require_once('conn.php'); $sql="";
$id	= $database->getEscaped($_GET[trim(id)]); 

$sql = "SELECT * FROM cruise WHERE  id='$id' ";
$sql = $sql."  ORDER BY boat_name, departure_date_yyyy, departure_date_mm, departure_date_dd LIMIT $offset,$rowsPerPage";


$database->setQuery( $sql );
		if (!$database->query()) {
			echo $database->stderr(); 
		}
$newsfeed = $database->loadObjectList();
if ($newsfeed) {		  
?>

<form name="form1" method="post" action="<?php echo($PHP_SELF);?>">
  <table width="100%" border="0" align="center" cellpadding="1" class="text11">
    <?php 	$bgcolor="#EAEAEA";
 $total=0;	  
 $i=$offset+1;
  foreach( $newsfeed as $data )  { ?>
    <tr> 
      <td width="40%" valign="top" bgcolor="#EAEAEA"> 
        <div align="left"><strong>Boat Code </strong></div></td>
      <td width="60%" valign="top">: <?php echo($data->boat_code); ?></td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Boat Type</strong></td>
      <td valign="top">: <?php echo($data->boat_type); ?>: </td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Boat Name</strong></td>
      <td valign="top">: <?php echo("<a href=../boats/$data->link_details>$data->boat_name</a>"); ?></td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Cruise Code</strong></td>
      <td valign="top">: <?php echo($data->cruise_code); ?></td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Destination</strong></td>
      <td valign="top">: <?php echo("<a href=../area/$data->link_area>$data->destination</a>"); ?></td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Derive</strong></td>
      <td valign="top">: <?php echo($data->derive); ?></td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Departure Date / Time</strong></td>
      <td valign="top">: <?php echo("$data->departure_date_dd-$data->departure_date_mm-$data->departure_date_yyyy / $data->departure_time"); ?></td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Return Date / Time</strong></td>
      <td valign="top">: <?php echo("$data->return_date_dd-$data->return_date_mm-$data->return_date_yyyy /$data->return_time"); ?></td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Category</strong></td>
      <td valign="top">: <?php echo($data->category); ?></td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Duration</strong></td>
      <td valign="top">: <?php echo($data->duration); ?></td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Notes</strong></td>
      <td valign="top">: <?php echo($data->notes); ?></td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Price</strong></td>
      <td valign="top">: <?php echo($data->price); ?></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <?php } ?>
  </table>
</form>
<?php

  } else { echo("Record(s) nof found.");} ?>