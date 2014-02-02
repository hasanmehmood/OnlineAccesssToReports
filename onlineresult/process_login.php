<?php
session_start();
include('connect.php');
if(isset($_POST["submit"]))
	{
		
			$username = $_POST["username"];
			$password = $_POST["password"];
			$choice	= $_POST["choice"];
			
			if(!empty($username)&&!empty($password)&&!empty($choice))
			{
				if($choice=='admin')	
				{
					$q = mysql_query("select * from admin where username = '$username' && password='$password'");
					if(mysql_num_rows($q)==0)
						header('Location: login.php?msg=e');
					else
					{
							$row = mysql_fetch_array($q);
							$_SESSION["admin"]="1";
							$_SESSION["school_id"]=$row["school_id"];
							$sid = $_SESSION["school_id"];
							
							//fetch town
							$q = mysql_query("select * from school where id = $sid");
							$fetch_town = mysql_fetch_array($q);
							$_SESSION['town_id'] = $fetch_town['t_id']; 
							$town_id = $_SESSION['town_id'];
							//fetch district
							$q = mysql_query("select * from tehsil where id = $town_id");
							$fetch_district = mysql_fetch_array($q);
							$_SESSION['district_id'] = $fetch_district['d_id'];
							$district = $_SESSION['district_id'];

							
							header('Location: display_classes.php');	
					}
				}
			}
			else
				header('Location: login.php?msg=e');		
	}	
	
?>