<?
if (!$conn=mysql_connect("localhost","root","password"))
{
   mysql_error();
  exit;
}

mysql_select_db("liveaboards");


?>