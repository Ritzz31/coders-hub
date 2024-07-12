<?php
session_start();
if(!isset($_SESSION['User_id']))
{
  header('location:user_login.php');
}

$obj = new mysqli("localhost","root","","codershub");

if($obj->connect_errno!=0)
{
  echo $obj->connect_error;
  exit;
}

$Tech_id = $obj->query("select * from technology");
$Sub_id = $obj->query("select * from sub_technology");

if(isset($_POST["Submit"]))
{

  $Title = $_POST["P_title"];
  $Description = trim($obj->real_escape_string($_POST["P_description"]));
  $User_id = $_SESSION["User_id"];
  $createdate = Date('Y-m-d H:i:s');
  $Tech_id = $_POST["Tech_id"];
  $Sub_id = $_POST["Sub_id"];
  
  /// project document
  $filename =  $_FILES["file"]["name"];
  $filename_array = explode(".", $filename);
  $ext = end($filename_array);
  $ext = strtolower($ext);
  $tmp_path = $_FILES["file"]["tmp_name"];
  $path = "project_document/$filename";
  move_uploaded_file($tmp_path, $path);

  //source Code
  $scode =  $_FILES["scode"]["name"];
  $filename_array = explode(".", $scode);
  $ext = end($filename_array);
  $ext = strtolower($ext);

  $tmp_path = $_FILES["scode"]["tmp_name"];
  $path = "project_sourcecode/$scode";
  move_uploaded_file($tmp_path, $path);
  $id = $_SESSION['User_id'];
  
  

   $exe= $obj->query("INSERT INTO project( P_title, P_description,User_id, Date, Document, Sourcecode,Tech_id,Sub_id) VALUES('$Title','$Description','$User_id', '$createdate','$filename','$scode','$Tech_id','$Sub_id')");

  
  
    
  if($exe)
  {
    echo "<script>alert('Upload Successfully');document.location='project.php'</script>";
    
  }
  else
  {
    echo "<script>alert('Error.. Please Try Again');</script>";
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
        <h2 class="mb-0">Project Upload/Download</h2>
        <p class="mb-0 unit-6"><a href="index2.php">Home</a> <span class="sep">></span> <span>Project</span></p>
      </div>
    </div>
 <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
       </div>
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form  class="p-5 bg-white" enctype="multipart/form-data" method="post">
              <h3 align="center"><u>Upload Project</u></h3>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="title">Title</label>
                  <input type="text" id="P_title" name="P_title" class="form-control">
                </div>
              </div>                  
             <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="description">Description</label> 
                  <textarea name="P_description" id="P_description"  cols="30" rows="5" class="form-control" ></textarea>
                </div>
              </div>
               <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Tech_id">Technology:  </label>
                  <select id="Tech_id" name="Tech_id" class="form-control">
                    <?php
                       while($row = $Tech_id->fetch_object())
                       {
                     ?>
             <option value="<?php echo $row->Tech_id;?>"><?php echo $row->Tech_name;?></option>
             <?php
               }
              ?>
              </select>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Sub_id">Subtechnology:   </label>
                  <select id="Sub_id" name="Sub_id" class="form-control">
                    <?php
                       while($row = $Sub_id->fetch_object())
                       {
                     ?>
             <option value="<?php echo $row->Sub_id;?>"><?php echo $row->Sub_tech_name;?></option>
             <?php
               }
              ?>
             
          
        </select>
                </div>
              </div>
          <div class="row form-group">    
        <div class="col-md-12">
          <label class="font-weight-bold" for="document">Document</label> 
        <input type="file" id="file" name="file" class="form-control" accept=".doc,.pdf,.jpg,.png">
      </div>
    </div>
    <div class="row form-group">    
        <div class="col-md-12">
          <label class="font-weight-bold" for="sourcecode">Sourcecode</label> 
        <input type="file" id="scode" name="scode" class="form-control" accept=".zip">
      </div>
    </div>
    <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Upload" name="Submit" class="btn btn-primary  py-2 px-4">
                </div>
              </div>

             </form>       


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