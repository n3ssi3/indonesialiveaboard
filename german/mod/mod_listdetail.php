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
        <div align="left"><strong>Boat Name </strong></div></td>
      <td width="60%" valign="top">: <?php echo("<a href=../boats/$data->link_details>$data->boat_name</a>"); ?></td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Boat Type</strong></td>
      <td valign="top">: <?php echo($data->boat_type); ?> </td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Cruise Code</strong></td>
      <td valign="top">: <?php echo($data->cruise_code); ?></td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Destination</strong></td>
      <td valign="top">: <?php echo("<a href=../boats/$data->link_area>$data->destination</a>"); ?></td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Route</strong></td>
      <td valign="top">: <?php echo($data->derive); ?></td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Departure Date</strong></td>
      <td valign="top">: <?php echo("$data->departure_date_dd-$data->departure_date_mm-$data->departure_date_yyyy"); ?></td>
    </tr>
	 <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Departure Port</strong></td>
	  <td valign="top">: <?php echo($data->departure_time); ?></td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Return Date</strong></td>
      <td valign="top">: <?php echo("$data->return_date_dd-$data->return_date_mm-$data->return_date_yyyy"); ?></td>
    </tr>
	<tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Return Port</strong></td>
      <td valign="top">: <?php echo($data->return_time); ?></td>
    </tr>
    
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Duration</strong></td>
      <td valign="top">: <?php echo($data->duration); ?></td>
    </tr>
	<tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Category</strong></td>
      <td valign="top">: <?php echo($data->category); ?></td>
    </tr>
	<tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Price</strong></td>
      <td valign="top">: <?php echo($data->price); ?></td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#EAEAEA"><strong>Notes</strong></td>
      <td valign="top">: <?php echo($data->notes); ?></td>

    <?php } ?>
  </table>
  </form>
<?php
session_start();
if( isset($_POST['submit'])) {
   if( $_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code'] ) ) {
		// Insert you code for processing the form here, e.g emailing the submission, entering it into a database. 
			require("../../lib/class.phpmailer.php");
			require("../../lib/phpmailer.lang-en.php");
			$subject ='Booking request';
			$departure_date= $data->departure_date_dd.'-'.$data->departure_date_mm.'-'.$data->departure_date_yyyy;
			$return_date= $data->return_date_dd.'-'.$data->return_date_mm.'-'.$data->return_date_yyyy;
			$pesan ='<strong>Name : '.$_POST['name'].'</strong><br>
						<strong>E-mail : '.$_POST['email'].'</strong><br>
						<strong>Country : '.$_POST['country'].'</strong><br>
						<strong>Messages : '.$_POST['message'].'</strong><br><br>
						<strong>Boat Name </strong>: '. $data->boat_name .'<br><strong>Boat Type</strong>: '. $data->boat_type .' <br>
						<strong>Cruise Code</strong>: '. $data->cruise_code .'<br>
						<strong>Destination</strong>: '. $data->destination .'<br>
						<strong>Route</strong>: '. $data->derive .'<br>
						<strong>Departure Date</strong>: '. $departure_date .'<br>
						<strong>Departure Port</strong>: '. $data->departure_time .'<br>
						<strong>Return Date</strong>: '. $return_date.'<br>
						<strong>Return Port</strong>: '. $data->return_time .'<br>
						<strong>Duration</strong>: '. $data->duration .'<br>
						<strong>Category</strong>: '. $data->category .'<br>
						<strong>Price</strong>: '. $data->price .'<br>
						<strong>Notes</strong>: '. $data->notes .'<br>
						<br>link : <a href="http://indonesialiveaboard.com/german/data/listdetail.php?id='.$id.'">http://indonesialiveaboard.com/german/data/listdetail.php?id='.$id.'</a>';
			$email = 'cruise@indonesialiveaboard.com';
			$mail = new PHPMailer();
			$mail->IsSMTP(); // telling the class to use SMTP
			$mail->Host = "mail.indonesialiveaboard.com"; // SMTP server
			$mail->From = $_POST['email'];
			$mail->FromName = $_POST['name'];
			$mail->IsHTML(true);
			$mail->SetLanguage("en", "../lib/phpmailer/");
			$mail->AddAddress($email);
			$mail->AddCc('axel@tauch-terminal.com');
			$mail->AddBcc('systems@indonesialiveaboard.com');
			$mail->Subject = $subject;
			$mail->Body = $pesan;
			//$mail->WordWrap = 50;
			
			if(!$mail->Send())
			{
			echo "Server email down. [" . $mail->ErrorInfo . "]";
			}
			else
			{
			echo "Vielen Dank fuer Ihre Anfrage/Buchung, wir kontakten sie innerhalb von 24 Stunden.";
			}
 //-end

   } else {
		// Insert your code for showing an error message here
		echo '<script type="text/javascript">
				<!--
					alert("Incorrect verification code.");
 					
				//-->
				</script>';
		?><div align="center">
		<a href="#booking"  class="text11">
		Diese Tauchkreuzfahrt buchen</a> | <a href="mailto:cruise@indonesialiveaboard.com" class="text11" >Mehr Info zu dieser Tauchkreuzfahrt</a> </div></br><br>
	<form action="<?php echo($PHP_SELF);?>" name="sendmail" method="post">
	<a name="booking"></a><strong>Diese Tauchkreuzfahrt buchen</strong><br><br>
	<table width="100%" border="0" align="center" cellpadding="1" class="text11">
	<tr> 
      <td width="40%" bgcolor="#EAEAEA" valign="top"> 
        <div align="left"><strong>Name </strong></div></td>
      <td width="1%" valign="top">:</td>
      <td width="55%" valign="top"> <input type="text" name="name" id="name" value="<?php echo $_POST['name'] ?>" /></td>
    </tr>
	<tr> 
      <td bgcolor="#EAEAEA" valign="top"> 
        <div align="left"><strong>E-mail </strong></div></td>
      <td valign="top">:</td>
      <td valign="top"><input type="text" name="email" id="email" value="<?php echo $_POST['email'] ?>" /></td>
    </tr>
	<tr> 
      <td bgcolor="#EAEAEA" valign="top"> 
        <div align="left"><strong>Country </strong></div></td>
      <td valign="top">:</td>
      <td valign="top"> <input type="text" name="country" id="country" value="<?php echo $_POST['country'] ?>" /></td>
    </tr>
	<tr> 
      <td bgcolor="#EAEAEA" valign="top"> 
        <div align="left"><strong>Messages </strong></div></td>
      <td valign="top">:</td>
      <td valign="top"><textarea rows="5" cols="25" name="message" id="message" ><?php echo $_POST['message'] ?></textarea></td>
    </tr>
	<tr> 
      <td bgcolor="#EAEAEA" valign="top"> 
        <div align="left"><strong></strong></div></td>
      <td valign="top"></td>
      <td valign="top"><img src="../../captcha/CaptchaSecurityImages.php?width=100&height=40&characters=5" /></td>
    </tr>
	<tr> 
      <td bgcolor="#EAEAEA" valign="top"> 
        <div align="left"><strong>Verification code </strong></div></td>
      <td valign="top">:</td>
      <td valign="top"><input id="security_code" name="security_code" type="text" /></td>
    </tr>
		<tr> 
      <td> 
        <div align="left"><strong></strong></div></td>
      <td valign="top">&nbsp;</td>
      <td valign="top"> <input type="submit" name="submit" value="Submit" /></td>
    </tr>
	</table>
	</form>
<script language="JavaScript">
 new validateForm(document.forms['sendmail']);
 </script>
		<?php
   }
} else {
?>
<div align="center">
		<a href="#booking"  class="text11">
		Diese Tauchkreuzfahrt buchen</a> | <a href="mailto:cruise@indonesialiveaboard.com" class="text11" >Mehr Info zu dieser Tauchkreuzfahrt</a> </div></br><br>
	<form action="<?php echo($PHP_SELF);?>" name="sendmail" method="post">
	<a name="booking"></a><strong>Diese Tauchkreuzfahrt buchen</strong><br><br>
	<table width="100%" border="0" align="center" cellpadding="1" class="text11">
	<tr> 
      <td width="40%" bgcolor="#EAEAEA" valign="top"> 
        <div align="left"><strong>Name </strong></div></td>
      <td width="1%" valign="top">:</td>
      <td width="55%" valign="top"> <input type="text" name="name" id="name" /></td>
    </tr>
	<tr> 
      <td bgcolor="#EAEAEA" valign="top"> 
        <div align="left"><strong>E-mail </strong></div></td>
      <td valign="top">:</td>
      <td valign="top"><input type="text" name="email" id="email" /></td>
    </tr>
	<tr> 
      <td bgcolor="#EAEAEA" valign="top"> 
        <div align="left"><strong>Country </strong></div></td>
      <td valign="top">:</td>
      <td valign="top"> <input type="text" name="country" id="country" /></td>
    </tr>
	<tr> 
      <td bgcolor="#EAEAEA" valign="top"> 
        <div align="left"><strong>Messages </strong></div></td>
      <td valign="top">:</td>
      <td valign="top"><textarea rows="5" cols="25" name="message" id="message"></textarea></td>
    </tr>
	<tr> 
      <td bgcolor="#EAEAEA" valign="top"> 
        <div align="left"><strong></strong></div></td>
      <td valign="top"></td>
      <td valign="top"><img src="../../captcha/CaptchaSecurityImages.php?width=100&height=40&characters=5" /></td>
    </tr>
	<tr> 
      <td bgcolor="#EAEAEA" valign="top"> 
        <div align="left"><strong>Verification code </strong></div></td>
      <td valign="top">:</td>
      <td valign="top"><input id="security_code" name="security_code" type="text" /></td>
    </tr>
		<tr> 
      <td> 
        <div align="left"><strong></strong></div></td>
      <td valign="top">&nbsp;</td>
      <td valign="top"> <input type="submit" name="submit" value="Submit" /></td>
    </tr>
	</table>
	</form>
<script language="JavaScript">
 new validateForm(document.forms['sendmail']);
 </script>

<?php
	}
  } else { echo("Record(s) nof found.");} 

  ?>
  <div align="center"></div>