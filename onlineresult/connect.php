<?php
$hostname="localhost";
$username="root";
$password="";
$db_name="onlineresult";
$con=mysql_connect("$hostname","$username","$password") or die(mysql_error());
$select=mysql_select_db("$db_name",$con) or die(mysql_error());

?>