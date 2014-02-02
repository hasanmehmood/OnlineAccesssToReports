<?php
include('template/header.php');
?>
<div>
	<div class="container">
		<div class="col-sm-8">
			<table class="table table-hover">
			<tr> Classes in your school </tr>
			<?php 
			$school_id = $_SESSION['school_id'];
			$q = mysql_query("select * from class where school_id = $school_id");
			echo mysql_num_rows($q);
			while($row = mysql_fetch_array($q))
			{
				$number = $row['number'];
				$id = $row['id'];
				echo '<tr>'; ?>
				<td><a href ="display_students.php?class_id=<?php echo $id;?>"><?php echo 'Class  '.$row['number'] ?> </a></td>
			<?php 	echo '</tr>';
			}
		

			?>

			</table>
</div>
</div>
</div>