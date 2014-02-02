<?php include('template/header.php'); 
if(isset($_SESSION['admin']))
	header('Location: display_classes.php');
?>
<div>
	<div class="container">
			<div class="col-sm-5">
				<?php
					
					$title = $_POST['title'];
					$school_id = $_POST['schoolid'];
					$content = $_POST['content'];
					
					$query = "INSERT INTO complaint (title, school_id, content) VALUES ('{$title}', {$school_id}, '{$content}')";
					$result = mysql_query($query);
					if (mysql_affected_rows() == 1){
							header("Location: succ_comp.php");
						} else {
							// Deletion Failed..
							echo "Complaint Registration Failed..";
							echo "<p>" . mysql_error() . "</p>";
							echo "<a href=\"index.php\">Return to Manage Notices</a>";
						}
					
				?>
			</div>
			
	</div>
</div>
<div class="container">
	<?php include('template/footer.php') ?>
</div>