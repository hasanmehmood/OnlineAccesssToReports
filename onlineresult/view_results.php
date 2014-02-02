<?php 
include('template/header.php');

?>
<div>
	<div class="container">
		<div class="col-sm-2 well">
			<tr><h2><B>Results</B></h2></tr>
			<form action="" method="get">
				<input type="text" class="form-control" name="student_id"><br>
				<input type="text" class="form-control" name="year"><br>
				<input type="submit" class="btn btn-primary" name="submit">
			</form>
		</div>
		<div class="col-sm-5">
			<p class="alert alert-danger">Enter studnet's ID and Year to view result<p>
			<table class="table table-hover">
			
			<?php 
			
			if(isset($_GET['submit']))
			{
				if(!empty($_GET['student_id'])&&!empty($_GET['year']))
				{
					$sid = $_GET['student_id'];
					$year = $_GET['year'];
					$year =  $year-2000;
					
					$q = mysql_query("select * from result where s_id=$sid && year=$year");
					echo '<table class="table table-hover">';					
					while($row = mysql_fetch_array($q)){
					echo '<tr><th>Subject</th><th>Marks</th></tr>';
					echo '<tr><td>English</td><td>'.$row["eng"].'</td></tr>';
					echo '<tr><td>Maths</td><td>'.$row["math"].'</td></tr>';
					echo '<tr><td>Science</td><td>'.$row["sci"].'</td></tr>';
			
					}
				
				}
			}
			echo '</table>';

			?>	
					
	
			</table>
		</div>

	</div>
</div>

<?php include('template/footer.php') ?>