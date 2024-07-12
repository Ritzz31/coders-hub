<?php
session_start();
$obj = new mysqli("localhost","root","","codershub");

if($obj->connect_errno!=0)
{
  echo $obj->connect_error;
  exit;
}
$Query_id = $obj->query("select * from query_table");
$User_id = $obj->query("select * from user");
if(isset($_POST["Submit"]))
{

  $qid = $_GET["qid"];

  $id = $_SESSION['User_id'];
  
  $Answer = $_POST["Answer"];
  $createdate = Date('Y-m-d H:i:s');

   $exe = $obj->query("insert into table_answer(Query_id,User_id,Answer,Date) values('$qid','$id','$Answer','$createdate')");
 
  if($exe)
  {
    echo "<script>alert('Posted Successfully');document.location='allquery.php';</script>";
    
    
  }
  else
  {
    echo "<script>alert('Error..Please Try Again');</script>";
  }
}
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
        <h2 class="mb-0">Query</h2>
        <p class="mb-0 unit-6"><a href="user.php">Home</a> <span class="sep">></span> <span>Query</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
       
        <div class="row">
       <div class="col-lg-2">
       </div>
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          <form  class="p-5 bg-white" method="post">
            
               
             
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Answer">Answer</label>
                  <textarea  id="Answer" name="Answer" class="form-control" ></textarea>
                </div>
              </div>
              

              
                  <br/>
                  <input type="submit" value="Post Answer" name="Submit" class="btn btn-primary  py-2 px-4">
                </div>
              </div>

  
            </form>
          </div>

          
        </div>
        <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
       </div>
          <div class="col-md-12 col-lg-8 mb-5">
         
                 
               </div>
               
              </div>
              
             






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