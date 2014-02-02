
<?php include('template/header.php'); 
if(isset($_SESSION['admin']))
	header('Location: display_classes.php');
?>
<div>
	<div class="container">
			<div class="col-sm-5">
				
				<h3>Registration Successful</h3>
				<br>	
				<h4><a href="index.php">Return to Main Page</a></h4>;
					
				
			</div>
			
	</div>
</div>
<div class="container">
	<?php include('template/footer.php') ?>
</div>