<?php
session_Start();

$obj = new mysqli("localhost","root","","codershub");

if($obj->connect_errno!=0)
{
  echo $obj->connect_error;
  exit;
}

$pid = $_GET["pid"];

$id = $_SESSION["User_id"];
$result = $obj->query("SELECT project.*, technology.Tech_name, sub_technology.Sub_tech_name FROM project INNER JOIN technology ON project.Tech_id = technology.Tech_id INNER JOIN sub_technology 
ON project.Sub_id = sub_technology.Sub_id WHERE project.P_id='$pid' ");

// $result=$obj->query("select * from project where P_id='$id'");

$row = $result->fetch_object();

// echo '<pre>';
// print_r($row);
 
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
        <h2 class="mb-0">Project</h2>
        <p class="mb-0 unit-6"><a href="index2.php">Home</a> <span class="sep">></span> <span>Project</span></p>
      </div>
    </div>

    
    

    
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
       </div>
          <div class="col-md-12 col-lg-8 mb-5">
         
                 
               </div>
               
              </div>
              
             
                            <div class="col-lg-12"> 
                            <div class="p-5 bg-white">

                             <div class="col-md-12 mb-3 mb-md-0">
                            
                              <h3 align="center" style="font-weight: 600">Project Download</h3>
                              <br/>

  <table border="2" align="center" class="table table-bordered" style="border-color: black">
      <tr>
        <td>ProjectId</td>
        <td><?php echo $row->P_id;?></td>
      </tr>
      <tr>
        <td>Title</td>
        <td><?php echo $row->P_title;?></td>
      </tr>
       <tr>
        <td>Technology</td>
        <td><?php echo $row->Tech_name;?></td>
      </tr>
       <tr>
        <td>Subtechnology</td>
        <td><?php echo $row->Sub_tech_name;?></td>
      </tr>
      <tr>
        <td>Description</td>
        <td><?php echo $row->P_description;?></td>
      </tr>
   <tr>
        <td colspan="2" align="center">
          <a href="project_document/<?php echo $row->Document;?>" class="btn btn-primary" download>Download Document
           <a href="project_sourcecode/<?php echo $row->Sourcecode;?>" class="btn btn-danger" style="margin-left: 10px;" download>Download Source Code</a>
       </td>
      </tr>
     
   


  </table>


                              

                               






      </div>
    </div>
</div>

          <div class="col-lg-4">
            
            
           
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