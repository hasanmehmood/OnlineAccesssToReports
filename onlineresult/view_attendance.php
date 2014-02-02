<?php 
include('template/header.php'); ?>
<?php 
	$q2 = mysql_query('select * from tehsil');
	if(!$q2)
		die(mysql_error());
	$q3 = mysql_query('select * from school');
	if(!$q3)
		die(mysql_error());				
?>

<div>
	<div class="container">
		<h2><B>Attendance Statistics</B></h2>
			
		<div class="col-sm-6">
			<table class="table ">
			<form action = "" method = "GET">
			<tr>
				<td><center><h3>Town</h3></center></td>
			</tr>
			<tr>
			<td><center><select name = "town">
			<?php
			while($row = mysql_fetch_array($q2)) {
				$id = $row['id']; ?>
				<option value="<?php echo $id ?>"><?php echo $row['name'] ?></option>
		<?php	}?>
		</select><br><br><input type="submit" name="submit_town" class="btn btn-primary"></center></td>
			</tr>
			<tr>

			</form>
			</table>
		</div>
		<div class="col-sm-6">
			<table class="table ">
			<form action = "" method = "GET">
			<tr>
				<td><center><h3>School</h3></center></td>
			</tr>
			<tr>
			<td><center><select name = "school">
			<?php
			while($row = mysql_fetch_array($q3)) {
				$id = $row['id']; ?>
				<option value="<?php echo $id ?>"><?php echo $row['name'] ?></option>
		<?php	}?>
			
		</select><br><br><input type="submit" name="submit_school" class="btn btn-primary"></center></td>
			</tr>
			<tr>
			</form>
			</table>
		</div>
					
			<?php
			if(isset($_GET['submit_school']))
			{	
				if(isset($_GET['school']))
					$school = $_GET['school'];
				$disp = mysql_query("select count(status) from attendance where school = $school");
				$row = mysql_fetch_array($disp); ?>
				<div class="alert alert-success">Number Of Present Students:<strong><?php echo $row[0] ?></strong></div><br>;
<?php
			}
			else if(isset($_GET['submit_town']))
			{	
				if(isset($_GET['town']))
					$town = $_GET['town'];
				$disp = mysql_query("select count(status) from attendance where town = $town");
				$row = mysql_fetch_array($disp);
				echo "<h3>Number Of Present Students:     " . "<strong>$row[0]</strong></h3>". "<br>";

			}

			?>
		</div>

	</div>
</div>

<?php include('template/footer.php') ?>