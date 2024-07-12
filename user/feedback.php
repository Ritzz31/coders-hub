<?php
error_reporting(0);
session_start();

$obj = new mysqli("localhost","root","","codershub");
if($obj->connect_errno!=0)
{
  echo $obj->connect_error;
  exit;
}
if(isset($_POST["Submit"]))
{
   $createdate = Date('Y-m-d H:i:s');
   $User_id = $_SESSION["User_id"];
  
  $Message = $_POST['Message'];
  $Rating = $_POST['Rating'];

  $exe= $obj->query("INSERT INTO feedback( Date, User_id,Message, Rating) VALUES('$createdate','$User_id','$Message', '$Rating')");
  if($exe)
  {
    echo "<script>alert('Thank You for your feedback...');</script>";
    
  }
  else
  {
    echo "<script>alert('Error....');</script>";
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
        <h2 class="mb-0">Post Feedback</h2>
        <p class="mb-0 unit-6"><a href="index2.php">Home</a> <span class="sep">></span> <span>Feedback</span></p>
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

                
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="rating">Rating</label>
               <select id="Rating" name="Rating" class="form-control">
                  <option value="">---Give Rating---</option>
                  <option value="* * * * *">* * * * *</option>
                  <option value="* * * *">* * * *</option>
                  <option value="* * *">* * *</option>
                  <option value="* *">* *</option>
                  <option value="*">* </option>
               </select>
                  
                </div>
              </div>
             
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label> 
                  <textarea name="Message" id="Message" cols="30" rows="5" class="form-control" placeholder="Enter Your Feedback.."></textarea>
                </div>
              </div>

              
              

              <div class="row form-group">
                <div class="col-md-12">
                  <br/>
                  <input type="submit" value="Post Feedback" name="Submit" class="btn btn-primary  py-2 px-4">
                </div>
              </div>

  
            </form>
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