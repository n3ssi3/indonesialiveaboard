<? if (ini_get('register_globals')){echo "<font color=red>Registor global is ON</a><br>This is a security issue, please change settings inside your php.ini file</font>";}
else{echo "Register global is OFF";} 


$test=$_POST[test];
if($i) { echo ("print i");}
 echo ("$test");?>