<?php
session_start();

$obj = new mysqli("localhost","root","","codershub");

if($obj->connect_errno!=0)
{
  echo $obj->connect_error;
  exit;
}

$id = $_SESSION['User_id'];
$user_result = $obj->query("select * from user where User_id='$id'");
$urow = $user_result->fetch_object();

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
  
  $exe = $obj->query("update user set Fname = '$Fname', Lname = '$Lname', Email = '$Email', Gender = '$Gender', Dob = '$Dob', Contact = '$Contact', Address = '$Address',Reg_date = '$createdate' where User_id = '$id' ");

  if($exe)
  {
    echo "<script>alert('Updated Successfully...');document.location='index.php';</script> ";
    
  }
  else
  {
    echo "<script>alert('Error...');</script> ";
  }
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CodersHub &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
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
                <h2 class="mb-0">User Profile</h2>
                <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>User
                        Profile</span></p>
            </div>
        </div>




        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-md-12 col-lg-8 mb-5">



                        <form method="post" class="p-5 bg-white">

                            <div class="row form-group">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="Fname">First Name</label>
                                    <input type="text" id="Fname" name="Fname" class="form-control"
                                        placeholder="First Name" value="<?php echo $urow->Fname; ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="Lname">Last Name</label>
                                    <input type="text" id="Lname" name="Lname" class="form-control"
                                        placeholder="Last Name" value="<?php echo $urow->Lname; ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="font-weight-bold" for="Email">Email</label>
                                    <input type="email" id="Email" name="Email" class="form-control"
                                        value="<?php echo  $urow->Email; ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="font-weight-bold" for="Gender">Gender</label>
                                    <input type="radio" id="rdo1" value="male" name="Gender" <?php 
                                        if($urow->Gender == 'male' or $urow == 'Male'){
                                          echo "checked";
                                        }
                                      ?>>Male
                                    <input type="radio" id="rdo2" value="female" name="Gender" <?php 
                                    if($urow->Gender == 'female' or $urow == 'Female'){
                                          echo "checked";
                                        }
                                        ?>>Female
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="font-weight-bold" for="Dob">DOB</label>
                                    <input type="date" id="Dob" name="Dob" class="form-control" placeholder="DD-MM-YYYY"
                                        value="<?php echo $urow->Dob; ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="font-weight-bold" for="Contact">Contact No</label>
                                    <input type="text" id="Contact" name="Contact" class="form-control"
                                        value="<?php echo $urow->Contact; ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="font-weight-bold" for="add">Address</label>
                                    <textarea id="Address" name="Address"
                                        class="form-control"><?php echo $urow->Address; ?></textarea>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-7">
                                    <br />
                                    <input type="submit" value="Update" name="Submit"
                                        class="btn btn-primary  py-2 px-4">
                                </div>

                                <div class="col-md-5">

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