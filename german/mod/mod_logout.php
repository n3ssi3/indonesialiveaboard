<?php     session_start();
if(isset($_SESSION['signid'])) { 
	   session_unset(); }
	   header ("location:index.php?log=1");
	 ?>