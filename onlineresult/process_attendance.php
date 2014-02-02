<?php
session_start();
include('connect.php');
	$schoolid = $_SESSION["school_id"];
	$tid = $_SESSION['town_id'];
	$did = $_SESSION['district_id'];
	$date = $_POST['date'];
	$studentid = $_GET['studentid'];
	$classid = $_GET['classid'];
	$status = $_POST['status'];
	
	
	if(mysql_query("insert into attendance values ($did,$tid,$schoolid,$classid,$studentid,'$date','$status')") or die(mysql_error()))
		header("Location: display_students.php?class_id=$classid");
	else
		echo 'problem';
	
?>