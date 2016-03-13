<?
 ///////////////////////////////////////////////////////////
 // Script to DELETE ALL USER for login to database
 ///////////////////////////////////////////////////////////
 
 $conn =mysql_connect("localhost","liveaboards",".abo4rdsl1ve.");
 if ($conn) 
 {
   echo("Success to connect to database!");
 } else {
   echo("Fail to connect to database!");
 }

mysql_query("use liveaboards");

$dump = "delete from usertbl;";
$go_dump = mysql_query($dump);  
if ($go_dump) {
     echo "<br>User Deleted!";
} else {
     echo ("<br>Fail to delete!");  
}

?>