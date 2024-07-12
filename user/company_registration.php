<?php
$obj = new mysqli("localhost","root","","codershub");

if($obj->connect_errno!=0)
{
  echo $obj->connect_error;
  exit;
}

if(isset($_POST["Submit"]))
{
  $Comp_name = $_POST["Comp_name"];
  $Email = $_POST["Email"];
  $Contact = $_POST["Contact"];
  $Address = trim($obj->real_escape_string($_POST["Address"]));
  $About_company = trim($obj->real_escape_string($_POST["About_company"]));
  // $Logo_company = $_POST["Logo_company"];
  $Owner_name = $_POST["Owner_name"];
  $Established_year = $_POST["Established_year"];
  $Createdate = date('Y-m-d H:i:s');
  $Password=$_POST["Password"];
  $Confirm_password=$_POST["Cpassword"];


  /// project document
  $filename =  $_FILES["Logo_company"]["name"];
  $tmp_path = $_FILES["Logo_company"]["tmp_name"];
  $path = "upload/$filename";
  move_uploaded_file($tmp_path, $path);

if($Password == $Confirm_password)
{

$exe = $obj->query("insert into company(Comp_name,Email,Contact,Address,About_company,Logo_company,Owner_name,Established_year,Reg_date,Password) values('$Comp_name','$Email','$Contact','$Address','$About_company','$filename','$Owner_name','$Established_year','$Createdate','$Password')");

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
        <h2 class="mb-0">Company Registration</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>Company Registration</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
       </div>
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form   method="post" class="p-5 bg-white" enctype="multipart/form-data">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="Comp_name">Company Name</label>
                  <input type="text" id="Comp_name" name="Comp_name" class="form-control">
                </div>
              </div>
               
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Email">Email</label>
                  <input type="email" id="Email" name="Email" class="form-control" >
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Contact">Contact No</label>
                  <input type="text" id="Contact" name="Contact" class="form-control" >
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Address">Address</label>
                  <textarea id="Address" name="Address" class="form-control"> </textarea>  
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="About_company">About Company</label>
                  <textarea id="About_company" name="About_company" class="form-control"> </textarea>  
                </div>
              </div>
               <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Logo_company">Logo company</label>
                  <input type="file" id="Logo_company" name="Logo_company" class="form-control" accept="image/*">
                </div>
              </div>
             
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Owner_name">Owner Name</label>
                  <input type="text" id="Owner_name" name="Owner_name" class="form-control" >
                </div>
              </div>
             <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Established_year">Established Date</label>
                  <input type="date" id="Established_year" name="Established_year" class="form-control" >
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
                  <input type="password" id="Cpassword" name="Cpassword" class="form-control" placeholder="Confirm Password">
                </div>
              </div>
             
              <div class="row form-group">
                <div class="col-md-7">
                  <input type="Submit" value="Submit" name="Submit" class="btn btn-primary  py-2 px-4">
                </div>
              
              <div class="col-md-5">
              
      <p>Already have an account? <a href="company_login.php">Log in</a></p></div></div>
  
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
