<?php 
include('template/header.php'); ?>


<div>
	<div class="container">
		<div class="col-sm-8">
			<table class="table table-hover">
			<tr><b> Students enrolled in a Class</b> </tr>
			<?php 
			$class_id = $_GET['class_id'];
			$school_id = $_SESSION["school_id"];
			$q = mysql_query("select * from student where classid = $class_id");
			while($row = mysql_fetch_array($q))
			{
				$student_id = $row['id'];
				echo '<tr>';
				?>
				<td><?php echo $row['name']?></td>
				<td>
					<a href="add_attendance.php?class_id=<?php echo $class_id?>&student_id=<?php echo $student_id?>">Attendance</a>
				</td>
				<td><a href="results.php?student_id=<?php echo $student_id?>">Result</td>
				<?php
				echo '</tr>';	
			}
		
		?>

			</table>
		</div>

	</div>
</div>
<?php include('template/footer.php') ?>