<?php 
include('template/header.php');
$id = $_GET['student_id'];
 ?>
<div>
	<div class="container">
		<div class="col-sm-4">
			<table class="table table-hover">
			<tr><h2><B>Results</B></h2> </tr>
			<form action = "" method = "POST">
			<tr>
			<tr>
			<td><strong>Subjects</strong></td>
			<td><strong>Marks</strong></td>
			</tr>
			<td>English</td>
			<td><input type ='text' name = 'eng' class="form-control"></td>
			</tr>
			<tr>
			<td>Maths</td>
			<td><input type = 'text' name = 'maths' class="form-control"></td>
			</tr>
			<tr>
			<td>Science</td>
			<td><input type = 'text' name = 'sci' class="form-control"></td>
			</tr>
			<tr>
			<td></td><td><input type = 'submit' value = 'submit' name = 'submit' class="btn btn-primary"></td>
			</tr>
			</form>
			</table>
		

	<?php
	if(isset($_POST['submit']))
	{	
		if(!empty($_POST['sci'])&&!empty($_POST['eng'])&&!empty($_POST['maths'])){
			$sci = $_POST['sci'];
			$eng = $_POST['eng'];
			$maths = $_POST['maths'];
			$date = explode('-',date('y-m-d'));
			$year = $date[0];
			mysql_query("insert into result values ($id,$year,$eng,$maths,$sci)") or die(mysql_error());
		}
		else
			echo '<div class="alert alert-danger">Please enter marks</div>';
			
		
	}
	?>
</div>
</div>
</div>

<?php include('template/footer.php') ?>