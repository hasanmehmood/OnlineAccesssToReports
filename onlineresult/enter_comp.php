
<?php include('template/header.php'); 
?>
<div>
	<div class="container">
			<div class="col-sm-5">
				<h3>Enter Complaint</h3><br>
				<form action="saving_comp.php" method="post" accept-charset="utf-8" role="form">
					<input type="text" name="title" value="" class="form-control" placeholder="Complaint title"  /><br>			
					Select School: <select name="schoolid">
						  <?php
							$query = "SELECT * FROM school";
							$result = mysql_query($query);
							while($row = mysql_fetch_array($result)){
								echo "<option value=\"" . $row['id'] . "\">" . $row['name'] . "</option>";
							}
						  
						  ?>
					</select>
					<h4>Description:</h4>
					<textarea name="content" rows="5" cols="70"></textarea><br><br>								
				<input type="submit" name="submit" value="Login" class="btn btn-primary" /></form>
			</div>
			<div class="col-sm-4 well pull-right">
				<h3>Sidebar</h3>
			</div>
	
	</div>
</div>
<div class="container">
	<?php include('template/footer.php') ?>
</div>