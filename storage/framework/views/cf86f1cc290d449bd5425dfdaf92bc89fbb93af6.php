<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.suavedigital.com/jobstar/resume-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2016 22:55:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Jobstar - Job Board HTML Template" name="description">
    <meta content="Suave Digital" name="author">
    
    <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/images/favicon/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-touch-icon-152x152.png" />
    <title>Concours</title>

    <!--Bootstrap-->
    <link href="assets/stylesheets/css/bootstrap.css" rel="stylesheet">

    <!--Font Style-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,400italic,300italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>

    <!-- font-awesome.css -->
    <link href="assets/stylesheets/css/fontawesome/font-awesome.css" rel="stylesheet">

    <!--JQuery-->
    <script src="assets/javascripts/jquery.min.js"></script>

    <!-- Slick -->
    <link href="assets/stylesheets/css/slick/slick.css" rel="stylesheet">
    <link href="assets/stylesheets/css/slick/slick-theme.css" rel="stylesheet">

    <!-- animate.css -->
    <link href="assets/stylesheets/css/animate.css" rel="stylesheet">

    <!-- pe-icon.css -->
    <link href="assets/stylesheets/css/pe-icon-7-stroke/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/stylesheets/css/pe-icon-7-stroke/helper.css" rel="stylesheet">

    <!-- animate.css -->
    <link href="assets/stylesheets/css/animate.css" rel="stylesheet">

    <!-- User Defined Style -->
    <link href="assets/stylesheets/css/components.css" rel="stylesheet"> 
  </head>

  <body>
    <div class="preloader">
      <div class="image-container">
        <div class="image"><img src="assets/images/preloader.gif" alt=""></div>
      </div>      
    </div>
    <div class="container">
      <!-- Navbar Start -->
      <nav class="navbar navbar-inverse navbar-fixed-top navbar-bg-white">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"></a>
          </div><!--/.navbar-header -->
          <div class="collapse navbar-collapse" id="navbar">
             <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="<?php echo e(url('/acceuil')); ?>">Acceuil </a>
                
              </li>
              <li>
                <a href="<?php echo e(url('/offres')); ?>" >Offres d'emploi  </a>
              
              </li>
              <li >
                <a href="<?php echo e(url('/concours')); ?>" >Concours </a>
        
              </li>
              <li>
                <a href="<?php echo e(url('/contact')); ?>" >Contact</a>
               </li>
              <li>
                <a href="<?php echo e(url('/about')); ?>">A propos</a>
               
              </li>
           <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/login')); ?>"  class="login-nav">Login</a></li>
                        <li><a href="<?php echo e(url('/register')); ?>" class="register">Register</a></li>
                    <?php else: ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                               
                                <li><a href="<?php echo e(url('/create-resume')); ?>"><i class="fa fa-btn fa-sign-out"></i>Modifier Profil</a></li>
                                <li><a href="<?php echo e(url('/resume-details')); ?>"><i class="fa fa-btn fa-sign-out"></i>Mon Profil</a></li>
                                 <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
            </ul>
          </div><!--/ Collapse -->
        </div>
      </nav>
    </div>
    <!-- Navbar Ends -->

    <!-- Login Modal -->
   
    <!-- Login Ends -->

    <!-- Register -->
   
    <!-- Register Ends -->

    <!-- Banner Grey Starts -->
    <section class="banner-grey">
      <div class="container sec-hq-pad-t sec-hq-pad-b">
        <h2 class="animated wow fadeIn">Concours</h2>
      </div>
    </section>
    <!-- Banner Grey Ends -->

    <!-- User Profile Starts --> <section class="job-info-1">
      <div class="container sec-pad">
        <div class="recent-job-1 col-md-12">
        <h2 class="animated wow fadeIn" data-wow-delay="0.1s">Derniers Concours</h2>

          <div class="job-filter-1 animated wow fadeIn" data-wow-delay="0.2s">
            <a href="javascript:void(0)" data-filter="*" class="current">All</a> / 
            <a href="javascript:void(0)" data-filter=".fulltime" class="">Full Time</a> / 
            <a href="javascript:void(0)" data-filter=".parttime" class="">Part Time</a> / 
            <a href="javascript:void(0)" data-filter=".internship" class="">Internship</a> / 
            <a href="javascript:void(0)" data-filter=".freelance" class="">Freelance</a> / 
            <a href="javascript:void(0)" data-filter=".temporary" class="">Temporary</a>
          </div><!--/.job-filter-1-->

          <div class="job-content-1 animated wow fadeIn" data-wow-delay="0.2s">

            <a href="#" class="fulltime">
              <div class="job-list valign-wrap">
                <div class="company-icon valign-middle">
                  <img src="assets/images/graphicriver.png">
                </div>
                <div class="separator"></div>
                <div class="company valign-middle">
                  <div class="company-name">
                    <div class="col-md-6 col-sm-6 name">Graphicriver Company</div>
                    <div class="col-md-4 col-sm-4 text-center"><span>full time</span></div>
                  </div>
                  <div class="company-info">
                    <div class="col-md-4 col-sm-4 row">
                      <i class="fa fa-briefcase"></i>&nbsp; Graphic Designer
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <i class="fa fa-compass"></i>&nbsp; Providence
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <i class="fa fa-money">&nbsp; $1800</i>
                    </div>
                  </div>
                </div>
              </div><!--/.job-list-->
            </a>

            <a href="#" class="internship">
              <div class="job-list valign-wrap">
                <div class="company-icon valign-middle">
                  <img src="assets/images/themeforest.png">
                </div>
                <div class="separator"></div>
                <div class="company valign-middle">
                  <div class="company-name">
                    <div class="col-md-6 col-sm-6 name">Themeforest Company</div>
                    <div class="col-md-4 col-sm-4 text-center"><span>Internship</span></div>
                  </div>
                  <div class="company-info">
                    <div class="col-md-4 col-sm-4 row">
                      <i class="fa fa-briefcase"></i>&nbsp; Internship
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <i class="fa fa-compass"></i>&nbsp; Bronx
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <i class="fa fa-money">&nbsp; $600</i>
                    </div>
                  </div>
                </div>
              </div>
            </a><!--/.job-list-->

            <a href="#" class="freelance">
              <div class="job-list valign-wrap">
                <div class="company-icon valign-middle">
                  <img src="assets/images/audiojungle.png">
                </div>
                <div class="separator"></div>
                <div class="company valign-middle">
                  <div class="company-name">
                    <div class="col-md-6 col-sm-6 name">Audiojungle Company</div>
                    <div class="col-md-4 col-sm-4 text-center"><span>Freelance</span></div>
                  </div>
                  <div class="company-info">
                    <div class="col-md-4 col-sm-4 row">
                      <i class="fa fa-briefcase"></i>&nbsp; Accountant
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <i class="fa fa-compass"></i>&nbsp; Boston
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <i class="fa fa-money">&nbsp; $1000</i>
                    </div>
                  </div>
                </div>
              </div>
            </a><!--/.job-list-->

            <a href="#" class="temporary">
              <div class="job-list valign-wrap">
                <div class="company-icon valign-middle">
                  <img src="assets/images/videohive.png">
                </div>
                <div class="separator"></div>
                <div class="company valign-middle">
                  <div class="company-name">
                    <div class="col-md-6 col-sm-6 name">Videohive Company</div>
                    <div class="col-md-4 col-sm-4 text-center"><span>Temporary</span></div>
                  </div>
                  <div class="company-info">
                    <div class="col-md-4 col-sm-4 row">
                      <i class="fa fa-briefcase"></i>&nbsp; Project Manager
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <i class="fa fa-compass"></i>&nbsp; Atlanta
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <i class="fa fa-money">&nbsp; $ 1200</i>
                    </div>
                  </div>
                </div>
              </div>
            </a><!--/.job-list-->

            <a href="#" class="parttime">
              <div class="job-list valign-wrap">
                <div class="company-icon valign-middle">
                  <img src="assets/images/codecanyon.png">
                </div>
                <div class="separator"></div>
                <div class="company valign-middle">
                  <div class="company-name">
                    <div class="col-md-6 col-sm-6 name">Codecanyon Company</div>
                    <div class="col-md-4 col-sm-4 text-center"><span>Part Time</span></div>
                  </div>
                  <div class="company-info">
                    <div class="col-md-4 col-sm-4 row">
                      <i class="fa fa-briefcase"></i>&nbsp; Web Developer
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <i class="fa fa-compass"></i>&nbsp; San Francisco
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <i class="fa fa-money">&nbsp; $ 1000</i>
                    </div>
                  </div>
                </div>
              </div>
            </a><!--/.job-list -->

          </div><!--/ Job Content -->

          <div class="sec-h-pad-t"></div>

          <div class="col-md-12 text-center sec-h-pad-t">
          <ul class="pagination">
            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
            <li><a class="active" href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
          </ul>
        </div>

        </div><!--/.recent-job-1 -->

        <!-- Job Spotlight -->
     
      </div><!--/.container -->
    </section>   <!-- User Profile Ends -->



    <!-- Footer Starts -->
    <footer>
      <div class="footer-content sec-pad">
        <div class="container">
          
          <div class="col-md-4 col-sm-4 content-wrap">
            <div class="brand-logo"> 
            <img src="assets/images/jobstar-white.png" alt="">
            </div>
            <div class="sec-q-pad-b"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra vulputate tincidunt. Fusce ultricies dui pretium purus vestibulum suscipit. Proin ut turpis a mauris porttitor luctus eu quis velit. Nunc libero dolor, commodo sit amet nunc nec, sollicitudin semper ligula.</p>
          </div>

          <div class="col-md-3 col-sm-3 content-wrap">
            <div class="title-underlined">
              <h3>Job Seekers</h3>
            </div>
            <p><a href="#">Company Profile</a></p>
            <p><a href="#">Jobs by Specialization</a></p>
            <p><a href="#">Vacancy by Company Name</a></p>
            <p><a href="#">Terms of Use</a></p>
            <p><a href="#">Privacy Policy</a></p>
            <p><a href="#">Help</a></p>
          </div>

          <div class="col-md-2 col-sm-2 content-wrap">
            <div class="title-underlined">
              <h3>About</h3>
            </div>
            <p><a href="#">About Me</a></p>
            <p><a href="#">In The News</a></p>
            <p><a href="#">Career With Us</a></p>
            <p><a href="#">Contact Us</a></p>
            <p><a href="#">Site Map</a></p>
          </div>

          <div class="col-md-3 col-sm-3 content-wrap">
            <div class="title-underlined">
              <h3>Jobstar Office</h3>
            </div>
            <p>Jobstar Inc. Indonesia 2837</p>
            <p>Jl. Rancabentang No 297 Blok 27</p>
            <p>Jawa Barat</p>

            <div class="sec-q-pad-b"></div>

            <p>Jobstar Inc. Manado 2873</p>
            <p>Jl. Gorontalo Barat No 297 Blok 27</p>
            <p>North Sulawesi.</p>
          </div>
        </div>
      </div>

      <div class="copyright sec-q-pad">
        <div class="container">
          <div class="col-md-7 col-sm-7 col-xs-6 left-section">
            <p>&copy; 2015 Jobstar - Responsive Job List HTML Template, Designed &amp; Developed by Suavedigital</p>
          </div>
          <div class="col-md-5 col-sm-5 col-xs-6 right-section text-right">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
            <a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Ends -->

    <!-- JavaScripts -->
    <script src="assets/javascripts/bootstrap.min.js"></script>
    <script src="assets/javascripts/wow.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>    
    <script src="assets/javascripts/custom.js"></script>
    <script src="assets/javascripts/jquery.countTo.js"></script>
    <script src="assets/javascripts/isotope.pkgd.min.js"></script>
    <script src="assets/javascripts/slick.min.js"></script>
    <script src="assets/javascripts/jquery.parallax-1.1.3.js"></script>
    <script src="assets/javascripts/jquery.appear.min.js"></script>
    <script src="assets/javascripts/custom-map-job-map.js"></script>
    <script src="assets/javascripts/custom-map-post-a-job.js"></script>
    <script src="assets/javascripts/custom-map-contact-us.js">
    </script>
  </body>

<!-- Mirrored from demo.suavedigital.com/jobstar/resume-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2016 22:55:55 GMT -->
</html>