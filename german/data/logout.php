<?php     session_start();
if(isset($_SESSION['signid'])) { 
	   session_unset(); session_destroy();}
	   header ("location:../index.php");
	 ?>