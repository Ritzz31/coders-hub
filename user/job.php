<?php
error_reporting(0);
session_start();

$obj = new mysqli("localhost","root","","codershub");
if($obj->connect_errno!=0)
{
  echo $obj->connect_error;
  exit;
}
   
$result = $obj->query("select * from job as jb join technology as tc where jb.Tech_id = tc.Tech_id");
    
  
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

    <div class="unit-5 overlay" style="background-image: url('images/jobbackgroung.png');">
      <div class="container text-center">
        <h2 class="mb-0">Job</h2>
        <p class="mb-0 unit-6"><a href="index2.php">Home</a> <span class="sep">></span> <span>Job</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-start text-left mb-5">
         <!--  <div class="col-md-9" data-aos="fade">
            <span class="text-gray-500">Category</span>
            <h2 class="font-weight-bold text-black">Latest Job</h2>
          </div> -->
         <!--  <div class="col-md-3" data-aos="fade" data-aos-delay="200">
            <div class="select-wrap mr-auto">
              <span class="icon-keyboard_arrow_down arrow-down"></span>
              <select name="" id="" class="form-control">
                <option value="">Category</option>
                <option value="fulltime" selected>Full Time</option>
                <option value="fulltime">Part Time</option>
                <option value="freelance">Freelance</option>
                <option value="internship">Internship</option>
                <option value="internship">Termporary</option>
              </select>
            </div>
          </div> -->

          <h1 align="center" style="font-weight: 600; position: relative;left:450px;" >Latest Jobs</h1>
        </div>

       

              
                             <?php
                             while ($row = $result->fetch_object())
                               {
                               ?>
        

        <div class="row" data-aos="fade">
         <div class="col-md-12">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4"><?php echo $row->Title;?></h2>

                 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-4">Full Time</span>
                 </div>
                  
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 
                 <div>
                  <br/>
                  <p style="text-align: justify;"><?php echo $row->Description;?></p>
                  <p><b>Field :</b> <?php echo $row->Tech_name; ?></p>
                  <!-- <p><b>Job Type :</b> <?php echo $row->Job_type; ?></p> -->
                  <b>Location : </b><span class="fl-bigmug-line-big104"></span>
                  <span><?php echo $row->Location;?></span>
                </div>
               </div>
              </div>

              <div class="ml-auto">
                
                <a href="Detail.php?jobid=<?php echo $row->Job_id;?>" class="btn btn-primary py-2">View More Details</a>
              </div>

           </div>
         </div>
        </div>
              <?php 
                }
              ?>
        

        

       
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