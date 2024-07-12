<?php

$obj = new mysqli("localhost","root","","codershub");

if($obj->connect_errno!=0)
{
  echo $obj->connect_error;
  exit;
}
$subtech = $obj->query("select * from Sub_technology");
if(isset($_POST["Submit"]))
{

  $Fname = $_POST["Fname"];
  $Lname =$_POST["Lname"];
  $Email = $_POST["Email"];
  $Gender = $_POST["Gender"];
  $Dob = $_POST["Dob"];
  $Contact = $_POST["Contact"];
  $Address = $_POST["Address"];
  $createdate = date('Y-m-d H:i:s');
  $Password=$_POST["Password"];
  
  $confirm_password=$_POST["Cpassword"];

  if($Password == $confirm_password) 
  {
  
      $exe = $obj->query(" insert into user(Fname, Lname, Email, Gender, Dob, Contact, Address, Password,Reg_date) VALUES('$Fname','$Lname','$Email','$Gender','$Dob','$Contact','$Address','$Password','$createdate')");

      if($exe)
      {
        echo "<script>alert('Registration Successfully...');</script> ";
      }
      else
      {
        echo "<script>alert('Error...');</script> ";
      }
  }
  else
  {
    echo "<script>alert('Missmatched Password...');</script> "; 
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
        <h2 class="mb-0">User Registration</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>User Registration</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
       </div>
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form  method="post" class="p-5 bg-white">

               <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="Fname">First Name</label>
                  <input type="text" id="Fname" name="Fname" class="form-control" placeholder="First Name" required="" pattern="[a-zA-Z]{3,15}" title="Name Must be Chrecter">
                </div>
              </div>
               <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="Lname">Last Name</label>
                  <input type="text" id="Lname" name="Lname" class="form-control" placeholder="Last Name"  required="" pattern="[a-zA-Z]{3,15}" title="Name Must be Chrecter">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Email">Email</label>
                  <input type="email" id="Email" name="Email" class="form-control" required="">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Gender">Gender</label>
                  <input type="radio" id="rdo1" value="male" name="Gender">Male
                  <input type="radio" id="rdo2" value="female" name="Gender">Female
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Dob">DOB</label>
                  <input type="date" id="Dob" name="Dob" class="form-control" placeholder="DD-MM-YYYY" required="">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Contact">Contact No</label>
                  <input type="text" id="Contact" name="Contact" class="form-control" required="" pattern="[0-9]{10}" title="Number Must be Valid">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="add">Address</label>
                  <textarea id="Address" name="Address" class="form-control"> </textarea>  
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Password">Password</label>
                  <input type="password" id="Password" name="Password" class="form-control" placeholder="Password">
                </div>
              </div>
              
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Cpassword">Confirm Password</label>
                  <input type="password" id="cpassword" name="Cpassword" class="form-control" placeholder="Comfirm Password">
                </div>
              </div>
              
             
              <div class="row form-group">
                <div class="col-md-7">
                  <br/>
                <input type="submit" value="Submit" name="Submit" class="btn btn-primary  py-2 px-4" > 
                </div>
              
              <div class="col-md-5">
              
      </div></div>
  
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