<?
 $conn =mysql_connect("localhost","liveaboards",".abo4rdsl1ve.");
 if ($conn) 
 {
   echo("Success to connect to database!");
 } else {
   echo("Fail to connect to database!");
 }

mysql_query("use liveaboards");

$dump = "insert into cruise values('pl03', 'cruise03', 'boat_type03', 'malaysia', 'lembongan', '29', '06', '2005', '08:00', '30', '06', '2005', '15:00', 'boat03.htm', 'area03.htm', 'category03', '400', '2D/1N', 'schedule03');";
$go_dump = mysql_query($dump);  
$dump = "insert into cruise values('pl10', 'cruise10', 'boat_type10', 'benoa', 'lembongan', '14', '06', '2005', '08:00', '15', '06', '2005', '15:00', 'boat10.htm', 'area10.htm', 'category10', '2100', '9D/8N', 'schedule10');";
$go_dump = mysql_query($dump);  
$dump = "insert into cruise values('pl02', 'cruise02', 'boat_type02', 'singapore', 'surabaya', '29', '06', '2005', '08:00', '30', '06', '2005', '15:00', 'boat02.htm', 'area02.htm', 'category02', '1000', '3D/4N', 'schedule02');";
$go_dump = mysql_query($dump);  
$dump = "insert into cruise values('pl06', 'cruise06', 'boat_type06', 'benoa', 'singapore', '15', '04', '2005', '08:00', '18', '04', '2005', '15:00', 'boat06.htm', 'area06.htm', 'category06', '1700', '7D/6N', 'schedule06');";
$go_dump = mysql_query($dump);  
$dump = "insert into cruise values('pl01', 'cruise01', 'boat_type01', 'perth', 'benoa', '18', '06', '2005', '18:00', '21', '06', '2005', '19:00', 'boat01.htm', 'area01.htm', 'category01', '1400', '7D/8N', 'schedule01');";
$go_dump = mysql_query($dump);  
$dump = "insert into cruise values('pl04', 'cruise04', 'boat_type04', 'benoa', 'philipine', '28', '07', '2005', '08:00', '30', '07', '2005', '15:00', 'boat04.htm', 'area04.htm', 'category04', '2500', '9D/10N', 'schedule04');";
$go_dump = mysql_query($dump);  
$dump = "insert into cruise values('pl06', 'cruise06', 'boat_type06', 'singapore', 'perth', '15', '07', '2005', '08:00', '17', '07', '2005', '15:00', 'boat06.htm', 'area06.htm', 'category06', '1700', '7D/6N', 'schedule06');";
$go_dump = mysql_query($dump);  
$dump = "insert into cruise values('pl07', 'cruise07', 'boat_type07', 'benoa', 'surabaya', '09', '09', '2005', '08:00', '12', '09', '2005', '15:00', 'boat07.htm', 'area07.htm', 'category07', '3400', '10D/9N', 'schedule07');";
$go_dump = mysql_query($dump);  
$dump = "insert into cruise values('pl08', 'cruise08', 'boat_type08', 'singapore', 'malaysia', '29', '06', '2005', '08:00', '30', '06', '2005', '15:00', 'boat08.htm', 'area08.htm', 'category08', '80', '3D/4N', 'schedule08');";
$go_dump = mysql_query($dump);  
$dump = "insert into cruise values('pl12', 'cruise12', 'boat_type12', 'lembongan', 'benoa', '16', '06', '2005', '08:00', '18', '06', '2005', '15:00', 'boat12.htm', 'area12.htm', 'category12', '1500', '5D/4N', 'schedule12');";
$go_dump = mysql_query($dump);  
$dump = "insert into cruise values('pl09', 'cruise09', 'boat_type09', 'singapore', 'jakarta', '04', '07', '2005', '08:00', '08', '07', '2005', '15:00', 'boat09.htm', 'area09.htm', 'category09', '1300', '3D/4N', 'schedule09');";
$go_dump = mysql_query($dump);  
$dump = "insert into cruise values('pl11', 'cruise11', 'boat_type11', 'benoa', 'jakarta', '01', '07', '2006', '08:00', '05', '07', '2006', '15:00', 'boat11.htm', 'area11.htm', 'category11', '450', '2D/3N', 'schedule11');";
$go_dump = mysql_query($dump);  
$dump = "insert into cruise values('pl05', 'cruise05', 'boat_type05', 'perth', 'surabaya', '29', '10', '2006', '08:00', '30', '10', '2006', '15:00', 'boat05.htm', 'area05.htm', 'category05', '1200', '4D/3N', 'schedule05');";
$go_dump = mysql_query($dump);  
$dump = "insert into cruise values('pl06', 'cruise06', 'boat_type06', 'singapore', 'benoa', '10', '04', '2005', '08:00', '12', '04', '2005', '15:00', 'boat06.htm', 'area06.htm', 'category06', '1700', '7D/6N', 'schedule06');";
$go_dump = mysql_query($dump);  
if ($go_dump) {
     echo ("<br>Insert data success!");
} else {
     echo ("<br>Insert data fail!");  
}

?>