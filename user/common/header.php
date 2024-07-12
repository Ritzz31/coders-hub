<?php
error_reporting(0);
session_start();

?>

<header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">

           <a href="index.php"> <img src="images/logo.png" style="width: 150px;"></a>
           
          </div>

          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <?php
                 if(isset($_SESSION["User_id"]))
                 {
                    ?>
                        <li><a href="job.php">Job</a></li>
                        <li><a href="project.php">Project</a></li>
                        <li class="has-children">
                            <a href="#">Technical Queries</a>
                            <ul class="dropdown">
                                <li><a href="query.php">Post Query</a></li>
                                <li><a href="allquery.php">All Queries</a></li>
                            </ul>
                        </li>
                        <li><a href="feedback.php">Post Feedback</a></li>
                        <li class="has-children">
                            <a href="#">Account</a>
                            <ul class="dropdown">
                              <li><a href="my_queries.php">My Queries</a></li>
                              <li><a href="my_projects.php">My Projects</a></li>
                                <li><a href="profile.php">Edit Profile</a></li>
                                <li><a href="change_password.php">Change Password</a></li>
                              </ul>
                            </li>
                            
                      <li><a href="logout.php">Log Out</a></li>
                    <?php
                 }
                 else
                 {
                    ?>
                     
                      <li class="has-children">
                            <a href="#">Login</a>
                            <ul class="dropdown">
                               <li><a href="company_login.php">Company Login</a></li>
                                 <li><a href="user_login.php">User Login</a></li>
                            </ul>
                        </li>

                         <li><a href="inquiry.php">Contact</a></li>
                      
                     
                    <?php
                 }
                ?>
                
                
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right d-block">
            
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>
