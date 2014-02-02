
<?php include('template/header.php'); 
?>
<div>
	<div class="container">
			<div class="col-sm-5 alert alert-success">
				<?php
					echo "<h3>Registerd Complaints</h3><br>";
					$query = "SELECT * FROM complaint";
					$result = mysql_query($query);
					while($row = mysql_fetch_array($result)){
						echo "<h4>" . $row['title'] . "</h4>";
							$query1 = "SELECT * FROM school where id=" . $row[2];
							if(!$result1 = mysql_query($query1)){
								die(mysql_error());
							}
							$row1 = mysql_fetch_array($result1);
						echo "School Name: " . $row1[1] . "<br>";
						echo "<p>" . $row['content'] . "</p>";
						echo "<br><br>";
					}
					
				?>
			</div>
			
	</div>
</div>
<div class="container">
	<?php include('template/footer.php') ?>
</div>