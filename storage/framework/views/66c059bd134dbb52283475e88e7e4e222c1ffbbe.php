<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.suavedigital.com/jobstar/create-resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2016 22:55:55 GMT -->
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
    <title>Jobstar - Create Resume</title>

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
      <div class="container sec-hq-pad-t sec-hq-pad-b">
        <h2 class="animated wow fadeIn">Create Resume</h2>
      </div>
    </section>
    <!-- Banner Grey Ends -->

    <!-- Resume Form Starts -->
    <section class="resume-form sec-hq-pad-t sec-hq-pad-b animated wow fadeIn" data-wow-delay="0.2s">

      <div class="form-content">
        <div class="container">

          <form action="#" class="form-horizontal" method="post">

            <div class="personal-data col-md-12">
              <div class="col-md-12">
                <div class="title-underlined">
                  <h3>Personal Data</h3>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="user-photo-wrap valign-wrap">
                  <div class="user-photo valign-middle">
                    <i class="fa fa-photo"></i>
                  </div>
                  <input type="file" class="upload">
                </div><!--/.user-photo-wrap -->
              </div>
              <div class="col-md-9 col-sm-9">
                <div class="form-group">
                  <div class="col-md-12">
                    <div class="col-md-12 col-sm-12">
                      <strong>Name*</strong>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <input type="text" class="def-input" placeholder="Your Name">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <div class="col-md-12">
                      <strong>Job Profession*</strong>
                    </div>
                    <div class="col-md-12">
                      <input type="text" class="def-input" placeholder="Your Desired Profession">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <strong>Birthday*</strong>
                    </div>
                    <div class="col-md-12">
                      <input type="text" class="def-input" placeholder="Your Birthday!">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <strong>Location*</strong>
                    </div>
                    <div class="col-md-12">
                      <input type="text" class="def-input" placeholder="Lives in..">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <div class="col-md-12">
                      <strong>Phone*</strong>
                    </div>
                    <div class="col-md-12">
                      <input type="text" class="def-input" placeholder="Your Phone Number">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <strong>E-mail*</strong>
                    </div>
                    <div class="col-md-12">
                      <input type="text" class="def-input" placeholder="Your E-mail Address">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <strong>Expected Salary*</strong>
                    </div>
                    <div class="col-md-12">
                      <input type="text" class="def-input" placeholder="How much?">
                    </div>
                  </div>
                </div>

              </div>
            </div><!--/.personal-data -->

            <div class="social-media col-md-12 no-padding">
              <div class="content-wrap sec-q-pad-t">
                <div class="title-underlined">
                  <h3>Social Media</h3>
                </div>
              </div>
              
              <div class="col-md-6 col-sm-6 content-wrap">
                <div class="form-group">
                  <div class="col-md-12">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                      <input type="text" class="form-control def-input" placeholder="Facebook">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                      <input type="text" class="form-control def-input" placeholder="Twitter">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
                      <input type="text" class="form-control def-input" placeholder="Google+">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 content-wrap">
                <div class="form-group">
                  <div class="col-md-12">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                      <input type="text" class="form-control def-input" placeholder="Linkedin">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                      <input type="text" class="form-control def-input" placeholder="Instagram">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-pinterest"></i></span>
                      <input type="text" class="form-control def-input" placeholder="Pinterest">
                    </div>
                  </div>
                </div>
              </div>

            </div><!--/.social-media -->

            <div class="summary col-md-12 content-wrap sec-q-pad-t content-wrap">
              <div class="title-underlined">
                <h3>Summary</h3>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <strong>Description*</strong>
                </div>
                <div class="col-md-12">
                <textarea name="" id="" class="def-input" placeholder="Describe yourself, be persuasive.."></textarea>
                </div>
              </div>
            </div><!--/.Summary -->

            <div class="education col-md-6 col-sm-6 sec-hq-pad-t content-wrap">
              <div class="form-header">
                <h4>Education</h4>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <strong>School Name*</strong>
                </div>
                <div class="col-md-12">
                  <input type="text" class="def-input" placeholder="School Name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <strong>Qualification*</strong>
                </div>
                <div class="col-md-12">
                  <input type="text" class="def-input" placeholder="Qualification">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <strong>Period*</strong>
                </div>
                <div class="col-md-6 col-sm-6">
                  <select name="" id="" class="def-input def-select">
                    <option value="" disabled selected>Since</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                  </select>
                </div>
                <div class="col-md-6 col-sm-6">
                  <select name="" id="" class="def-input def-select">
                    <option value="" disabled selected>Until</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <strong>Description*</strong>
                </div>
                <div class="col-md-12">
                  <textarea name="" id="" class="def-input" placeholder="Description"></textarea>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 add no-l-padding">
                <a href="#"><i class="fa fa-plus"></i>  &nbsp; <i>Add</i></a>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 no-r-padding remove text-right">
                  <a href="#"><i class="fa fa-times"></i>  &nbsp; <i>Remove</i></a>
              </div>
            </div><!--/.education -->

            <div class="work-exp col-md-6 col-sm-6 sec-hq-pad-t content-wrap">
              <div class="form-header">
                <h4>Working Experience</h4>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <strong>Company Name*</strong>
                </div>
                <div class="col-md-12">
                  <input type="text" class="def-input" placeholder="Company Name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <strong>Positon*</strong>
                </div>
                <div class="col-md-12">
                  <input type="text" class="def-input" placeholder="Position">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <strong>Period*</strong>
                </div>
                <div class="col-md-6 col-sm-6">
                  <select name="" id="" class="def-input def-select">
                    <option value="" disabled selected>Since</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                  </select>
                </div>
                <div class="col-md-6 col-sm-6">
                  <select name="" id="" class="def-input def-select">
                    <option value="" disabled selected>Until</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <strong>Description*</strong>
                </div>
                <div class="col-md-12">
                  <textarea name="" id="" class="def-input" placeholder="Description"></textarea>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 add no-l-padding">
                <a href="#"><i class="fa fa-plus"></i>  &nbsp; <i>Add</i></a>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 no-r-padding remove text-right">
                  <a href="#"><i class="fa fa-times"></i>  &nbsp; <i>Remove</i></a>
              </div>
            </div><!--/.work-exp -->

            <div class="personal-skill col-md-6 col-sm-6 sec-hq-pad-t content-wrap">
              <div class="form-header">
                <h4>Personal Skill</h4>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <strong>Skill Name*</strong>
                </div>
                <div class="col-md-12">
                  <input type="text" class="def-input" placeholder="Skill Name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-5 col-sm-6 col-xs-6">
                  <input type="text" class="def-input" placeholder="1-100">
                </div>
                <div class="col-md-7 col-sm-6 col-xs-6 percentage">
                  %
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 no-l-padding add">
                <a href="#"><i class="fa fa-plus"></i>  &nbsp; <i>Add</i></a>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 remove no-r-padding text-right">
                  <a href="#"><i class="fa fa-times"></i>  &nbsp; <i>Remove</i></a>
              </div>
            </div><!--/.personal-skill -->

            <div class="professional-skill col-md-6 col-sm-6 sec-hq-pad-t content-wrap">
              <div class="form-header">
                <h4>Professional Skill</h4>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <strong>Skill Name*</strong>
                </div>
                <div class="col-md-12">
                  <input type="text" class="def-input" placeholder="Skill Name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-5 col-sm-6 col-xs-6">
                  <input type="text" class="def-input" placeholder="1-100">
                </div>
                <div class="col-md-7 col-sm-6 col-xs-6 percentage">
                  %
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 no-l-padding add">
                <a href="#"><i class="fa fa-plus"></i>  &nbsp; <i>Add</i></a>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 no-r-padding remove text-right">
                  <a href="#"><i class="fa fa-times"></i>  &nbsp; <i>Remove</i></a>
              </div>
            </div><!--/.professional-skill -->

            <div class="col-md-12 sec-h-pad-t text-right">
              <a href="#" class="def-btn btn-bg-blue">Finish</a>
            </div>
          </form>
        </div><!--/.container -->
      </div><!--/.form-content -->
    </section>
    <!-- Resume Form Ends -->

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

<!-- Mirrored from demo.suavedigital.com/jobstar/create-resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2016 22:55:55 GMT -->
</html>