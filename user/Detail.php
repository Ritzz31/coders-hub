<?php
error_reporting(0);
session_start();

$obj = new mysqli("localhost","root","","codershub");

if($obj->connect_errno!=0)
{
  echo $obj->connect_error;
  exit;
}
$id = $_GET["jobid"];
$result = $obj->query("select * from job where Job_id='$id'");

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CodersHub &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
     <?php include 'common/header.php'; ?>
   

    <div class="unit-5 overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Job Detail</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>Job Detail</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
       </div>
          <div class="col-md-12 col-lg-12 mb-5">
          
             <div class="col-lg-12"> 
              <div class="p-5 bg-white">
               <div class="col-md-12 mb-3 mb-md-0">
    <form method="POST">
            <table class="table table-bordered  ">
            	<?php
            	while ($row = $result->fetch_object())
	                {
                  ?>
             <tr>
                <th>Job Title</th>
                <td><?php echo $row->Title;?></td>
               </tr>
               <tr>
               	<th>Description</th>
               	<td><?php echo $row->Description;?></td>
               </tr>
               <tr>
               	<th>Job Type</th>
               	<td><?php echo $row->Job_type;?></td>
               </tr>
               <tr>
               	<th>Location</th>
               	<td><?php echo $row->Location;?></td>
               </tr>
               <tr>
               	<th> Interview Type</th>
               	 <td><?php echo $row->Interview_type;?></td>
               	</tr>
               	<tr>
               		<th>Vacancies</th>
               		<td><?php echo $row->No_of_vacancy;?></td>
               	</tr>
               	<tr>
               		<th>Min Salary</th>
               		<td><?php echo $row->Min_salary;?> Rs./Month</td>
               	</tr>
               	<tr>
               		<th>Max Salary</th>
               		<td><?php echo $row->Max_salary;?> Rs./Month</td>
               	</tr>
               	<tr>
               		<th>Experience</th>
               		<td><?php echo $row->Exp_from;?>-<?php echo $row->Exp_to;?></td>
               	</tr>
               	
               	<tr>
               		<th>Comp_id </th>
               		<td><?php echo $row->Comp_id;?></td>
               	</tr>

               </table>
                    <a href="job_application.php?jobid=<?php echo $id;?>" class="btn btn-primary py-2">Apply to this Job</a>
               	<?php
                 }
                ?>
             </form>
          </div>

         </div>
     </div>
        </div>
      </div>
      </div>
    </div>
    
    <?php include 'common/footer.php'; ?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  

  <script src="js/main.js"></script>
    
  </body>
</html>