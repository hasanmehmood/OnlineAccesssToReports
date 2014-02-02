
<?php include('template/header.php') ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img data-src="images/slider/s1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img data-src="images/slider/s1.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img data-src="images/slider/s1.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

	<div>
			<div class="container">
				<div class="col-sm-4">
					<img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
					  <h2></h2>
					  <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
					  <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
				</div>
				<div class="col-sm-4">
					<img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
					  <h2>Specific Student</h2>
					  <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
				   
            <form action="" method="get" accept-charset="utf-8" role="form">
              <input type="text" name="student_id" class="form-control" placeholder="Student ID" /><br>
              <input type="submit" class="btn btn-primary">
            </form>
            <?php 
            if(isset($_GET['student_id']))
            {
              $student_id = $_GET['student_id'];
              $date = date('y-m-d');

              $q = mysql_query("select * from attendance where student = $student_id && date = $date");
               

            }
            ?>
        


        </div>
				<div class="col-sm-4">
					<img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
					  <h2>Attendance</h2>
					  <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
					  <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
				</div>
			</div>
	
	</div>
	
    <?php include('template/footer.php')?>
