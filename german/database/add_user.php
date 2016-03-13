<?
 ///////////////////////////////////////////////////////////
 // Script to create NEW USER for login to database
 ///////////////////////////////////////////////////////////
 // Enter "User name" and "Password" of user will be created?

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

$dump = "insert into usertbl values($user_name, password($password), 'admin', 'liveaboards');";
$go_dump = mysql_query($dump);  
if ($go_dump) {
     echo "<br>User ".$user_name." added!";
} else {
     echo ("<br>Fail to add user!");  
}

?>