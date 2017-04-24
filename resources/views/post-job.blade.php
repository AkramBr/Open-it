<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.suavedigital.com/jobstar/post-a-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2016 22:56:34 GMT -->
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
    <title>Jobstar - Post a Job</title>

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
            <a class="navbar-brand" href="index-2.html"></a>
          </div><!--/.navbar-header -->
          <div class="collapse navbar-collapse" id="navbar">
             <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="{{ url('/acceuil') }}">Acceuil </a>
                
              </li>
              <li>
                <a href="{{ url('/job') }}" >Offres d'emploi  </a>
              
              </li>
              <li >
                <a href="{{ url('/concours') }}" >Concours </a>
        
              </li>
              <li>
                <a href="{{ url('/contact') }}" >Contact</a>
               </li>
              <li>
                <a href="{{ url('/about') }}">A propos</a>
               
              </li>
           @if (Auth::guest())
                        <li><a href="{{ url('/login') }}"  class="login-nav">Login</a></li>
                        <li><a href="{{ url('/register') }}" class="register">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                               
                                <li><a href="{{ url('/create-resume') }}"><i class="fa fa-btn fa-sign-out"></i>Modifier Profil</a></li>
                                <li><a href="{{ url('/resume-details') }}"><i class="fa fa-btn fa-sign-out"></i>Mon Profil</a></li>
                                 <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
            </ul>
          </div><!--/ Collapse -->
        </div>
      </nav>
    </div>
    <!-- Navbar Ends -->

    <!-- Login Modal -->
    <div class="modal fade login" id="LogIn" role="dialog">
      <div class="modal-dialog login-dialog">
      
        
        <div class="login-content">
          <div class="login-header">
            <h3>Sign In</h3>
            <hr>
          </div>
          <div class="login-body">
            <p>Sign in using your account</p>
            <div class="account-login">
              <a href="#" class="def-btn google"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="def-btn facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="def-btn twitter"><i class="fa fa-twitter"></i></a>
            </div>
            <hr>
            <form action="#" class="form-horizontal">
              <input type="text" name="" class="login-form def-input" placeholder="Email">
              <input type="password" name="" class="login-form def-input" placeholder="Password">
              <div class="remember-me-forgot-pw">
                <div class="col-md-6 no-padding">
                  <input type="checkbox">
                  <label>Remember me</label>
                </div>
                <div class="col-md-6 no-padding text-right">
                  <a href="#">Forgot your password?</a>
                </div>
              </div>
              <a href="#">
                <div class="sign-in">Sign In</div>
              </a>
            </form>
            <div class="dont-have">Don't have an account yet? <a href="#" data-toggle="modal" data-target="#Register" data-dismiss="modal">Register now!</a></div>
          </div>
        </div><!--/.login-content-->
        
      </div>
    </div>
    <!-- Login Ends -->

    <!-- Register -->
    <div class="modal fade login" id="Register" role="dialog">
      <div class="modal-dialog login-dialog">
      
        
        <div class="login-content">
          <div class="login-header">
            <h3>Register</h3>
            <hr>
          </div>
          <div class="login-body">
            <p>Create your account</p>
            <form action="#" class="form-horizontal">
              <input type="text" name="" class="login-form def-input" placeholder="Email">
              <input type="password" name="" class="login-form def-input" placeholder="Password">
              <input type="password" name="" class="login-form def-input" placeholder="Re-type password">
              <input type="checkbox" name=""> I accepted the user agreement
              <a href="#"><div class="sign-in">Register</div></a>
              <div class="dont-have"><a href="#" data-toggle="modal" data-target="#LogIn" data-dismiss="modal">Already have an account</a></div>
            </form>
          </div>
        </div><!--/.login-content-->
        
      </div>
    </div>
    <!-- Register Ends -->

    <!-- Banner Grey Starts -->
    <section class="banner-grey">
      <div class="container sec-hq-pad-t sec-hq-pad-b animated wow fadeIn">
        <h2>Post a Job</h2>
      </div>
    </section>
    <!-- Banner Grey Ends -->

    <section class="post-a-job animated wow fadeIn" data-wow-delay="0.2s">
      <div class="container">
        <form action="#" class="form-horizontal">

          <div class="sec-h-pad-t sec-h-pad-b col-md-12">
            <div class="title-underlined">
              <h3>Job Details</h3>
            </div>

            <div class="form-group">
              <div class="col-md-3 col-sm-3">
                <h4>Job title</h4>
              </div>
              <div class="col-md-9 col-sm-9">
                <input type="text" class="def-input" placeholder="Short title for your job">
              </div>
            </div>
            <div class="form-group mar-t-20 mar-b-20">
              <div class="col-md-3 col-sm-3">
                <h4>Logo &amp; Images</h4>
              </div>
              <div class="col-md-9 col-sm-9">
                <div class="def-btn upload-file-btn">
                  <span><i class="fa fa-upload"></i>&nbsp; Browse Logo</span>
                  <input type="file" class="upload">
                </div>
                <div class="small-desc">
                  Max 20MB
                </div>
                <div class="def-btn upload-file-btn">
                  <span><i class="fa fa-upload"></i>&nbsp; Browse Images</span>
                  <input type="file" class="upload">
                </div>
                <div class="small-desc">
                  Max 20MB
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-sm-3">
                <h4>Job Description</h4>
              </div>
              <div class="col-md-9 col-sm-9">
                <textarea name="" id="" class="def-input" placeholder="Input Job Description"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-sm-3">
                <h4>Working Location</h4>
              </div>
              <div class="col-md-9 col-sm-9">
                <input type="text" class="def-input" placeholder="City, Country">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-sm-3">
              </div>
              <div class="col-md-9 col-sm-9 search-form">
                <input type="text" class="def-input" placeholder="Latitude, Longitude">
                <a href="#"><span class="fa fa-search"></span></a>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-sm-3">
              </div>
              <div class="col-md-9 col-sm-9 mar-t-20">
                <div class="map-canvas" id="map-canvas-post-a-job">
                </div><!--/.map-canvas-post-a-job -->
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-sm-3">
              <h4>Job Type</h4>
              </div>
              <div class="col-md-9 col-sm-9">
                <select name="" id="" class="def-input def-select">
                  <option value="" selected disabled>Choose Type</option>
                  <option value="fulltime">Full Time</option>
                  <option value="parttime">Part Time</option>
                  <option value="freelance">Freelance</option>
                  <option value="internship">Internship</option>
                  <option value="temporary">Temporary</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-sm-3">
              <h4>Job Category</h4>
              </div>
              <div class="col-md-9 col-sm-9">
                <select name="" id="" class="def-input def-select">
                  <option value="" selected disabled>Choose Category</option>
                  <option value="financeaccount"> Financial / Accounting</option>
                  <option value="buildconstruct">Building / Construction</option>
                  <option value="edutrain">Education / Training</option>
                  <option value="marketsale">Marketing / Sales</option>
                  <option value="admin">Administration</option>
                  <option value="IT">Computer / IT</option>
                  <option value="health">Health</option>
                  <option value="science">Science</option>
                  <option value="artmedia">Art / Media</option>
                  <option value="technical">Technical</option>
                  <option value="manufacturing">Manufacturing</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-sm-3">
              <h4>Salary</h4>
              </div>
              <div class="col-md-9 col-sm-9">
                <div class="input-group">
                  <select name="" id="" class="def-input def-select select-grp form-control">
                    <option value="usd">USD $</option>
                    <option value="eur">Euro €</option>
                    <option value="gbp">GBP £</option>
                    <option value="idr">IDR Rp</option>
                  </select>
                  <input type="text" class="def-input input-grp form-control" placeholder="Amount">
                </div>
              </div>
            </div>

          </div>

          <div class="col-md-12 sec-h-pad-t sec-h-pad-b">

          <div class="title-underlined">
            <h3>Company Profile</h3>
          </div>
            
            <div class="form-group">
              <div class="col-md-3 col-sm-3">
              <h4>Company Name</h4>
              </div>
              <div class="col-md-9 col-sm-9">
                <input type="text" class="def-input" placeholder="Your company name">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-sm-3 ">
              <h4>Description</h4>
              </div>
              <div class="col-md-9 col-sm-9">
                <textarea name="" id="" class="def-input" placeholder="Describe your company"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-sm-3">
              <h4>Company Website</h4>
              </div>
              <div class="col-md-9 col-sm-9">
                <input type="text" class="def-input" placeholder="Your company website">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12 text-right mar-t-20">
                <a href="#" class="def-btn btn-bg-blue">Finish</a>
              </div>
            </div>

          </div>
        </form>

      </div>
    </section>

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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJEWOkg4njiqY71jR-xxs-PnQI9yXaYsQ"></script>
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

<!-- Mirrored from demo.suavedigital.com/jobstar/post-a-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2016 22:56:34 GMT -->
</html>