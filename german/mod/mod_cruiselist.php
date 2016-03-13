<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
require_once('conn.php'); $sql="";
$sqlsearch ="";
$msg="";
$schedule	= $database->getEscaped($_POST[trim(schedule)]); 
$destination	= $database->getEscaped($_POST[destination]); 
$boats	= $database->getEscaped($_POST[boats]); 
$id	= $database->getEscaped($_GET[trim(id)]); 

//Hapus records
if ($id) {
  if($id=='E') { $sql="DELETE FROM cruise"; $msg="<font color=\"#FF0000\"> All records was deleted.</font>";}else {$sql="DELETE FROM cruise WHERE id='$id'";  $msg="<font color=\"#FF0000\"> Record id# $id was deleted.</font>";}
  $database->setQuery( $sql );
		if (!$database->query()) {
			echo $database->stderr(); 
		}
		
}
//Search records
if ($schedule) {
 $departure_date_mm = substr($schedule, 0, 2);
 $departure_date_yyyy = substr($schedule, -4, 4);
 $sqlsearch  .= " AND departure_date_mm='".$departure_date_mm."' AND departure_date_yyyy='".$departure_date_yyyy."'";
}
if ($destination) { $sqlsearch  .= " AND destination like '%".$destination."%'";}
if ($boats) { $sqlsearch  .=" AND boat_code='".$boats."'";}

echo("$msg");
$sql = "SELECT * FROM cruise WHERE 1=1 ";
if ($sqlsearch) {
 $sql .=  $sqlsearch ; }

$query  = $sql;
$sql = $sql."  ORDER BY boat_name, departure_date_yyyy, departure_date_mm, departure_date_dd LIMIT $offset,$rowsPerPage";


$database->setQuery( $sql );
		if (!$database->query()) {
			echo $database->stderr(); 
		}
$newsfeed = $database->loadObjectList();
if ($newsfeed) {
		  
?>

<form name="form1" method="post" action="<?php echo($PHP_SELF);?>">
  Click on Cruise Code to check Cruise Details<br>
  <table width="100%" border="0" align="center" cellpadding="1" class="text11">
    <tr bgcolor="#CCCCCC"> 
      <td width="14%"><div align="center"><strong>Cruise Code<font color="#000000"></font></strong></div></td>
      <td width="30%"><div align="center"><strong>Boat Name</strong></div></td>
      <td width="22%" bgcolor="#CCCCCC"><div align="center"><strong>Boat Type</strong></div></td>
      <td width="34%" bgcolor="#CCCCCC"> <div align="center"><strong>Destinations</strong></div></td>
    </tr>
    <?php 	$bgcolor="#EAEAEA";
 $total=0;	  
 $i=$offset+1;
  foreach( $newsfeed as $data )  {  if ($bgcolor=="#EAEAEA") {$bgcolor="#F5F5F5";}else {$bgcolor="#EAEAEA";} 
         echo "<tr bgcolor=$bgcolor  onMouseOver=\"this.style.backgroundColor='#CCCCCC'; 
			this.style.cursor='hand'\"
			onMouseOut=\"this.style.backgroundColor='$bgcolor';\"
			onClick=\"location.href='cruises.php?id=$data->id'\" >";?>
    <td><div align="center"> </div>
      <div align="left"><?php echo($data->cruise_code); ?></div></td>
    <td><?php echo($data->boat_name); ?></td>
    <td><?php echo($data->boat_type); ?></td>
    <td><?php echo($data->destination); ?> <div align="right"></div></td>
    </tr>
    <tr> 
      <td><font 
              face="Arial, Helvetica, sans-serif" size=2>&nbsp;</font></td>
      <td colspan="3"><strong>Departure Port :</strong> <?php echo("$data->departure_time"); ?>, 
        <strong>Return Port: </strong><?php echo("$data->return_time"); ?> 
      </td>
      <?php $i++; } ?>
    <tr> 
      <td colspan="4">&nbsp; </td>
    </tr>
    <tr> 
      <td colspan="4"><div align="right"> 
          <?php require "../mod/mod_pages.php";?>
        </div></td>
    </tr>
  </table>
</form>
<?php

  } else { echo("<br>Record(s) nof found.");} ?>