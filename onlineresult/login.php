
<?php include('template/header.php'); 
if(isset($_SESSION['admin']))
	header('Location: display_classes.php');
?>
<div>
	<div class="container">
			<div class="col-sm-5">
				<h3>Login</h3>
				<form action="process_login.php" method="post" accept-charset="utf-8" role="form">
					<input type="text" name="username" value="" class="form-control" placeholder="Username"  /><br>			
				
					<input type="password" name="password" value="" class="form-control" placeholder="Password"  /><br>
					<input type="radio" name="choice" value="parent"> Parent<br>
					<input type="radio" name="choice" value="admin"> Admin<br><br>
								
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