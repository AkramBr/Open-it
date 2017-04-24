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
    <title>A Propos</title>

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
        <h2 class="animated wow fadeIn">Resumes Details</h2>
      </div>
    </section>
    <!-- Banner Grey Ends -->

    <!-- User Profile Starts -->
    <section class="user-profile animated wow fadeIn" data-wow-delay="0.2s">

      <div class="container sec-hq-pad-t sec-h-pad-b">

        <div class="col-md-3 col-sm-3 col-xs-12 content-wrap">
          <div class="user-photo-wrap valign-wrap">
            <div class="user-photo valign-middle">
              <img src="assets/images/individu-1.png" alt="">
            </div>
          </div><!--/.user-photo-wrap -->
        </div>

        <div class="personal-data col-md-9 col-sm-9">
          <div class="col-md-12 no-l-padding">
            <div class="col-md-10 col-sm-10 col-xs-10">
              <h3>Glenn Whelan</h3>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 edit-profile">
            </div>
          </div>

          <div class="col-md-12 no-l-padding sec-q-pad-t content">
            <div class="col-md-6 col-sm-6">
              <p><i class="fa fa-briefcase"></i> Graphic Designer</p>
              <p><i class="fa fa-birthday-cake"></i> 21 December 1987</p>
              <p><i class="fa fa-map-marker"></i>&nbsp; &nbsp;New York, United States</p>
            </div>

            <div class="col-md-6 col-sm-6">
              <p><i class="fa fa-phone"></i>&nbsp; 123 456 789</p>
              <p><i class="fa fa-envelope"></i> <a class="__cf_email__" href="http://demo.suavedigital.com/cdn-cgi/l/email-protection" data-cfemail="25464a4b51444651655c4a505748444c490b464a48">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></p>
              <p><i class="fa fa-money"></i> $ 4000 / Month</p>
            </div>
          </div>
          <div class="social-media-wrap col-md-12">
            <a href="#" class="social-media">
                <i class="fa fa-google-plus"></i>
              </a>
              <a href="#" class="social-media">
                <i class="fa fa-instagram"></i>
              </a>
              <a href="#" class="social-media">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#" class="social-media">
                <i class="fa fa-facebook"></i>
              </a>
              <a href="#" class="social-media">
                <i class="fa fa-linkedin"></i>
              </a>
              <a href="#" class="social-media">
                <i class="fa fa-pinterest"></i>
              </a>
          </div><!--/.social-media-wrap -->
        </div><!--/.personal-data -->
      </div><!--/.container -->

      <div class="summary sec-q-pad-t sec-h-pad-b">
        <div class="container timeline-container">
          <div class="col-md-3 col-sm-3">
            <div class="title-underlined">
              <h3>Summary</h3>
            </div>
          </div>
          <div class="col-md-9 col-sm-9">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>

      <div class="education-timeline sec-q-pad-t sec-q-pad-b">
        <div class="container timeline-container">
          <div class="col-md-3 col-sm-3">
            <div class="title-underlined">
              <h3>Education</h3>
            </div>
          </div>
          <div class="col-md-9 col-sm-9">
            <ul class="timeline">
              <li>
                <div class="timeline-icon">
                  <i class="fa fa-graduation-cap"></i>
                </div>
                <div class="timeline-label">
                  <div class="year">
                    <h4>Aug 2005 - Sep 2009</h4>
                  </div>
                  <div class="desc">
                    <h4>Bandung Institute of Technology - <span>Master Of Design</span></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-icon">
                  <i class="fa fa-graduation-cap"></i>
                </div>
                <div class="timeline-label">
                  <div class="year">
                    <h4>Jul 2002 - Jul 2005</h4>
                  </div>
                  <div class="desc">
                    <h4>Malangbong Vocational School - <span>Graphic Design</span></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div><!--/.education-timeline -->

      <div class="work-exp-timeline sec-q-pad-t sec-q-pad-b">
        <div class="container timeline-container">
          <div class="col-md-3 col-sm-3">
            <div class="title-underlined">
              <h3>Work Experience</h3>
            </div>
          </div>
          <div class="col-md-9 col-sm-9">
            <ul class="timeline">
              <li>
                <div class="timeline-icon">
                  <i class="fa fa-briefcase"></i>
                </div>
                <div class="timeline-label">
                  <div class="year">
                    <h4>Nov 2012 - Present</h4>
                  </div>
                  <div class="desc">
                    <h4>Suave Digital <span>- Graphic Designer</span></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-icon">
                  <i class="fa fa-briefcase"></i>
                </div>
                <div class="timeline-label">
                  <div class="year">
                    <h4>Jan 2010 - Nov 2012</h4>
                  </div>
                  <div class="desc">
                    <h4>Graphicriver Company - <span>Graphic Design</span></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div><!--/.work-exp-timeline -->

      <div class="personal-skill sec-q-pad-b">
        <div class="container">
          <div class="col-md-3 col-sm-3">
            <div class="title-underlined">
              <h3>Personal Skill</h3>
            </div>
          </div>
          <div class="col-md-9 col-sm-9">
            <div class="skillbar-wrap">
              <div class="skillbar">
                <div class="skillbar-label valign-middle">
                  <h4>Creativity</h4>
                </div>
                <div class="skillbar-bar valign-middle">
                  <div class="bar">
                    <div class="filled wow animated fadeInLeft" style="width: 70%; visibility: visible; animation-name: fadeInLeft;">
                    </div>
                  </div>
                </div>
                <div class="skillbar-percentage valign-middle">
                  70%
                </div>
              </div>
              <div class="skillbar">
                <div class="skillbar-label valign-middle">
                  <h4>Innovation</h4>
                </div>
                <div class="skillbar-bar valign-middle">
                  <div class="bar">
                    <div class="filled wow animated fadeInLeft" style="width: 65%; visibility: visible; animation-name: fadeInLeft;">
                    </div>
                  </div>
                </div>
                <div class="skillbar-percentage valign-middle">
                  65%
                </div>
              </div>
              <div class="skillbar">
                <div class="skillbar-label valign-middle">
                  <h4>Hardwork</h4>
                </div>
                <div class="skillbar-bar valign-middle">
                  <div class="bar">
                    <div class="filled wow animated fadeInLeft" style="width: 85%; visibility: visible; animation-name: fadeInLeft;">
                    </div>
                  </div>
                </div>
                <div class="skillbar-percentage valign-middle">
                  85%
                </div>
              </div>
              <div class="skillbar">
                <div class="skillbar-label valign-middle">
                  <h4>Teamwork</h4>
                </div>
                <div class="skillbar-bar valign-middle">
                  <div class="bar">
                    <div class="filled wow animated fadeInLeft" style="width: 75%; visibility: visible; animation-name: fadeInLeft;">
                    </div>
                  </div>
                </div>
                <div class="skillbar-percentage valign-middle">
                  75%
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!--/.personal-skill -->

      <div class="professional-skill sec-q-pad-t sec-hq-pad-b">
        <div class="container">
          <div class="col-md-3 col-sm-3">
            <div class="title-underlined">
              <h3>Professional Skill</h3>
            </div>
          </div>
          <div class="col-md-9 col-sm-9">
            <div class="skillbar-wrap">
              <div class="skillbar">
                <div class="skillbar-label valign-middle">
                  <h4>Photoshop</h4>
                </div>
                <div class="skillbar-bar valign-middle">
                  <div class="bar">
                    <div class="filled wow animated fadeInLeft" style="width: 70%; visibility: visible; animation-name: fadeInLeft;">
                    </div>
                  </div>
                </div>
                <div class="skillbar-percentage valign-middle">
                  70%
                </div>
              </div>
              <div class="skillbar">
                <div class="skillbar-label valign-middle">
                  <h4>Illustrator</h4>
                </div>
                <div class="skillbar-bar valign-middle">
                  <div class="bar">
                    <div class="filled wow animated fadeInLeft" style="width: 65%; visibility: visible; animation-name: fadeInLeft;">
                    </div>
                  </div>
                </div>
                <div class="skillbar-percentage valign-middle">
                  65%
                </div>
              </div>
              <div class="skillbar">
                <div class="skillbar-label valign-middle">
                  <h4>HTML</h4>
                </div>
                <div class="skillbar-bar valign-middle">
                  <div class="bar">
                    <div class="filled wow animated fadeInLeft" style="width: 85%; visibility: visible; animation-name: fadeInLeft;">
                    </div>
                  </div>
                </div>
                <div class="skillbar-percentage valign-middle">
                  85%
                </div>
              </div>
              <div class="skillbar">
                <div class="skillbar-label valign-middle">
                  <h4>3D Animation</h4>
                </div>
                <div class="skillbar-bar valign-middle">
                  <div class="bar">
                    <div class="filled wow animated fadeInLeft" style="width: 75%; visibility: visible; animation-name: fadeInLeft;">
                    </div>
                  </div>
                </div>
                <div class="skillbar-percentage valign-middle">
                  75%
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!--/.professional-skill -->
    </section><!--/.user-profile -->
    <!-- User Profile Ends -->



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