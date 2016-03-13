<?
 $conn =mysql_connect("localhost","indonesi_liv1",".abo4rds");
 if ($conn) 
 {
   echo("Success to connect to database!");
 } else {
   echo("Fail to connect to database!");
 }

mysql_query("use indonesi_liveaboard1");

$dump = "create table cruise(";
$dump .= "	boat_code		varchar(50),";
$dump .= "	boat_name		varchar(200),";
$dump .= "	boat_type		varchar(100),";
$dump .= "	cruise_code		varchar(100),";
$dump .= "	destination		varchar(200),";
$dump .= "	derive			varchar(200),";
$dump .= "	departure_date_dd	char(2),";
$dump .= "	departure_date_mm	char(2),";
$dump .= "	departure_date_yyyy	varchar(4),";
$dump .= "	departure_time	varchar(5),";
$dump .= "	return_date_dd	char(2),";
$dump .= "	return_date_mm	char(2),";
$dump .= "	return_date_yyyy	varchar(4),";
$dump .= "	return_time		varchar(5),";
$dump .= "	link_details	varchar(100),";
$dump .= "	link_area		varchar(100),";
$dump .= "	category		varchar(100),";
$dump .= "	price			varchar(100),";
$dump .= "	duration		varchar(10),";
$dump .= "	notes			text";
$dump .= ");";

$go_dump = mysql_query($dump);  
if ($go_dump) {
     echo ("<br>Success to create table CRUISE!");
} else {
     echo ("<br>Fail to create table CRUISE!");  
}

$dump = "create table usertbl(";
$dump .= "	user		varchar(50),";
$dump .= "	password		varchar(20),";
$dump .= "	status			varchar(20),";
$dump .= "	name			varchar(200)";
$dump .= "	);";

$go_dump = mysql_query($dump);  
if ($go_dump) {
     echo ("<br>Success to create table USERTBL!");
} else {
     echo ("<br>Fail to create table USERTBL!");  
}


$dump = "insert into usertbl values('liveaboards', password('liveaboards..'), 'admin', 'liveaboards');";
$go_dump = mysql_query($dump);  
if ($go_dump) {
     echo ("<br>User LIVEABOARDS added!");
} else {
     echo ("<br>Fail to add user!");  
}


?>
