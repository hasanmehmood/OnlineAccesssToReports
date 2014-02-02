
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
          
        </div>
        <div class="item">
 
        </div>
        <div class="item">
          
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
				<div class="col-sm-3">
					<img src="images/about.jpg" height="150" width="150" >
					  <h2>About Site</h2>
					  <p>We've implemented an open source prototype for electronic access to school reports for all govt. schools of KPK which acts as an online bridge b/w parents and teachers on the daily progress of student/children!</p>
					  <p></p>
				</div>
				<div class="col-sm-3">
					<img  src="images/attendance1.jpg" height="150" width="150">
					  <h2>Specific Student</h2>
					  <p>Please enter ID of the student and select a date from calender to find attendance on a particular day</p>
				   
            <form action="" method="get" accept-charset="utf-8" role="form">
              <input type="text" name="student_id" class="form-control" placeholder="Student ID" /><br>
              <input type="date" name="date">
              <input type="submit" class="btn btn-primary">
            </form><br>

            <?php 
            

            if(!empty($_GET['student_id']) && !empty($_GET['date']))
            {
              $student_id = $_GET['student_id'];
              $date = $_GET['date'];
              $date =  explode('-',$date);
            
              $day = $date[2];
              $month = $date[1];
              $year = $date[0];


              $q = mysql_query("select * from attendance where student = $student_id && day = $day && month = $month && year = $year");
              $row = mysql_fetch_array($q);
              $status = $row['status'];
              if($status=='p')
                echo '<div class="alert alert-success">Your child is present</div>';
              else if($status=='a')
                echo '<div class="alert alert-danger">Your child is absent</div>';
              else if($status=='l')
                echo '<div class="alert alert-warning">Your child is at leave</div>'; 
              else
                echo '<div class="alert alert-danger">record not found</div>';
            }
            else{
              echo '<div class="alert alert-danger">Please provide both, ID and Date</div>';
            }
            ?>
        
        </div>
				<div class="col-sm-3">
					<img src="images/chart.jpg" height="150" width="150">
					  <h2>Statistical Attendance</h2>
					  <p>Follow the link to find out number of students present in a Town , School, Student</p>
					  <p><a class="btn btn-primary" href="view_attendance.php" role="button">View Page &raquo;</a></p>
				</div>
        <div class="col-sm-3">
          <img src="images/attendance1.jpg" height="150" width="150">
            <h2>View Result</h2>
            <p>Follow the link to find out result of students</p>
            <p><a class="btn btn-primary" href="view_results.php" role="button">View Page &raquo;</a></p>
        </div>
			</div>
	
	</div>
	
    <?php include('template/footer.php')?>
