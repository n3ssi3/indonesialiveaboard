<?php	                                       			 defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
require_once('conn_new.php'); $sql="";

$sqlsearch ="";
if(isset($_GET['page']))
{
	$pageNum = $_GET['page'];
	$schedule = $_GET['s'];
	$destination = $_GET['d'];
	$boats =$_GET['b'];
} else {
$schedule	= $database->getEscaped($_POST[trim(schedule)]); 
$destination	= $database->getEscaped($_POST[destination]); 
$boats	= $database->getEscaped($_POST[boats]); 
}

if ($schedule) {
 $departure_date_mm = substr($schedule, 0, 2);
 $departure_date_yyyy = substr($schedule, -4, 4);
 $sqlsearch  .= " AND departure_date_mm='".$departure_date_mm."' and departure_date_yyyy='".$departure_date_yyyy."'";
}
if ($destination) { $sqlsearch  .= " AND destination like '%".$destination."%'";}
if ($boats) { $sqlsearch  .=" AND boat_code='".$boats."'";}

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

<form name="form1" method="post" action="<?php	                                       			 echo($PHP_SELF);?>">
  Click on Cruise Code to check Cruise Details<br>
  <table width="100%" border="0" align="center" cellpadding="1" class="text11">
    <tr bgcolor="#CCCCCC"> 
      <td width="15%"><div align="center"><strong><strong>Boat Name</strong><font color="#000000"></font></strong></div></td>
      <td width="28%"><div align="center"><strong>Boat Type</strong></div></td>
      <td width="23%" bgcolor="#CCCCCC"><div align="center"><strong>Destination</strong></div></td>
      <td width="34%" bgcolor="#CCCCCC"> <div align="center"><strong>Duration</strong></div></td>
    </tr>
    <?php	                                       			 	$bgcolor="#EAEAEA";
 $total=0;	  
 $i=$offset+1;
  foreach( $newsfeed as $data )  {  if ($bgcolor=="#EAEAEA") {$bgcolor="#F5F5F5";}else {$bgcolor="#EAEAEA";} 
         echo "<tr bgcolor=$bgcolor  onMouseOver=\"this.style.backgroundColor='#CCCCCC'; 
			this.style.cursor='hand'\"
			onMouseOut=\"this.style.backgroundColor='$bgcolor';\"
			onClick=\"location.href='listdetail.php?id=$data->id'\" >";?>
    <td><div align="center"> </div>
      <div align="left"><?php	                                       			 echo($data->boat_name); ?></div></td>
    <td><?php	                                       			 echo($data->boat_type); ?></td>
    <td><?php	                                       			 echo($data->destination); ?></td>
    <td><?php	                                       			 echo($data->duration); ?> <div align="right"></div></td>
    </tr>
    <tr> 
      <td><font 
              face="Arial, Helvetica, sans-serif" size=2>&nbsp;</font></td>
      <td colspan="3"><strong>Departure Date :</strong> <?php	                                       			 echo("$data->departure_date_dd-$data->departure_date_mm-$data->departure_date_yyyy"); ?>, 
        <strong>Return Date : </strong><?php	                                       			 echo("$data->return_date_dd-$data->return_date_mm-$data->return_date_yyyy"); ?> </td>
      <?php	                                       			 $i++; } ?>
    <tr> 
      <td colspan="4">&nbsp; </td>
    </tr>
    <tr> 
      <td colspan="4"><div align="right"> 
          <?php	                                       			 require "../mod/mod_pages_new.php";?>
        </div></td>
    </tr>
  </table>
</form>
<?php	                                       			

  } else { echo("Record(s) nof found.");} ?>