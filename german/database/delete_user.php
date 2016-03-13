<?
 ///////////////////////////////////////////////////////////
 // Script to DELETE USER for login to database
 ///////////////////////////////////////////////////////////
 // Enter "User name" and "Password" of user will be deleted?
 
 $user_name = "liveaboards";
 $password = "liveaboards..";
 
 ///////////////////////////////////////////////////////////
 
 $conn =mysql_connect("localhost","liveaboards",".abo4rdsl1ve.");
 if ($conn) 
 {
   echo("Success to connect to database!");
 } else {
   echo("Fail to connect to database!");
 }

mysql_query("use liveaboards");

$dump = "delete from usertbl where user='".$user_name."' and password='".password($password)."';";
$go_dump = mysql_query($dump);  
if ($go_dump) {
     echo "<br>User ".$user_name." DELETED!";
} else {
     echo ("<br>Fail to DELETE user!");  
}

?>