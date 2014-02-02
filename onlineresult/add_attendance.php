<?php 
include('template/header.php'); ?>


<div>
	<div class="container">
		<div class="col-sm-8">
			<tr> Mark attendance </tr>
			<?php 

				$class_id = $_GET['class_id'];
				$student_id = $_GET['student_id'];
				$school_id = $_SESSION["school_id"];
				$district_id = $_SESSION["district_id"];
				$town_id = $_SESSION["town_id"];

			?>
			<form action="process_attendance.php?studentid=<?php echo $student_id.'&classid='.$class_id; ?>" method="post" accept-charset="utf-8" role="form">
			
				<input type="radio" name="status" value="p"> Present<br>
					<input type="radio" name="status" value="a"> Absent<br>
					<input type="radio" name="status" value="l"> Leave<br><br>
					<input type="date" name="date">

					<br>
				<input type="submit" name="submit" value="Login" class="btn btn-p	rimary" /></form>

		</div>

	</div>
</div>
<?php include('template/footer.php') ?>