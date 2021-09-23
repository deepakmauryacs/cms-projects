<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Examin - Education and LMS Template">

    <!-- ========== Page Title ========== -->
    <title>Skyevo - Education </title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="<?php echo base_url(); ?>assetes/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assetes/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assetes/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assetes/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assetes/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assetes/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assetes/assets/css/animate.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assetes/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assetes/assets/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assetes/assets/css/responsive.css" rel="stylesheet" />  
    <link href="<?php echo base_url(); ?>assetes/assets/css/custom.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <!-- <div class="se-pre-con"></div> -->
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area address-two-lines bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 address-info">
                    <div class="info box">
                        <ul>
                            <li>
                                <span><i class="fas fa-map"></i> Address</span>California, TX 70240
                            </li>
                            <li>
                                <span><i class="fas fa-envelope-open"></i> Email</span>Info@gmail.com
                            </li>
                            <li>
                                <span><i class="fas fa-phone"></i> Contact</span>+123 456 7890
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-login text-right col-md-4">
                    <a class="popup-with-form" href="#register-form">
                        <i class="fas fa-edit"></i> Register
                    </a>
                    <a  class="popup-with-form" href="#login-form">
                        <i class="fas fa-user"></i> Login
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <div class="row" style="background-color: #73a9e6;" >
      <div class="col-md-12" style="text-align: center; margin: 5PX; padding-bottom: 3px;">
          
          
   
         <a href="<?php echo base_url(); ?>Web/result" class="btn btn-theme effect btn-md" data-animation="animated slideInUp" style="border-radius: 5px; margin-bottom: 3px;">RESULT</a>
         <a href="<?php echo base_url(); ?>Web/online_admission" class="btn btn-theme effect btn-md" data-animation="animated slideInUp" style="border-radius: 5px; margin-bottom: 3px;">Online ADMISSION</a>
         <a  class="btn btn-theme effect btn-md popup-with-form" href="#123"   style="border-radius: 5px; margin-bottom: 3px;">Feedback</a>
         <a  class="btn btn-theme effect btn-md popup-with-form" href="<?php echo base_url(); ?>Web/contact"   style="border-radius: 5px; margin-bottom: 3px;">Contact Us</a>
     
       
          <!-- Start Feedback Form 
    ============================================= -->
    <form action="#" id="123" class="mfp-hide white-popup-block">
      
        <div class="col-md-12 login-custom">
            <h4>REQUEST SURVEY BASED INFORMATION</h4>

         
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                     
                            <select class="form-control" name="first_hear"  style="height: 45PX;" required="">
                                <option value="">WHICH SERVICE YOU HAVE USED?</option>
                                 <option value="admission">Admission</option>
                                <option value="franchise">Career</option>
                            </select>
                    </div>
                </div>
            </div>

             <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                     
                           <select class="form-control" name="service_rating" style="height: 45PX;" required="" >
                                <option value="" selected="">Give Rating</option>
                                <option value="1">1 Star</option>
                                <option value="2">2 Stars</option>
                                <option value="3">3 Stars</option>
                                <option value="4">4 Stars</option>
                                <option value="5">5 Stars</option>
                            </select>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Username*" type="text">
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Email*" type="email">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Contact Number*" type="text">
                    </div>
                </div>
            </div>
          
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <textarea class="form-control" rows="4" cols="4" name="give your feedback" placeholder="give your feedback" required=""></textarea>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="row">
                    <button type="submit">
                       SEND FEEDBACK
                    </button>
                </div>
            </div>
           
        </div>
    </form>
    <!-- End Register Form -->
          



      </div>
    </div>


<!-- Large modal -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                  <a class="navbar-brand" href="<?php echo base_url(); ?>">
                  <img src="http://project.codelearning.info/assetes/assets/img/logoa.jpeg" class="logo" style=" height: 40px;" alt="Logo">
                  </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li>
                            <a class="smooth-menu" href="<?php echo base_url(); ?>">Home</a>
                        </li>
                     <!--    <li> 
                            <a class="smooth-menu" href="<?php echo base_url(); ?>Web/about">About</a>
                        </li> -->

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >About</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>Web/about">About College</a></li>
                                <li><a href="#">Chairman Message</a></li> 
                                <li><a href="<?php echo base_url(); ?>Web/vision_mission">Vision Mission</a></li>
                            </ul>
                        </li>



                        <li class="dropdown megamenu-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Academic</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <!-- <li><a href="#">Academic Course</a></li> -->
                                                    <!-- li><a href="#">Goverment Exam</a></li>
                                                    <li><a href="#">Video Classes</a></li>
                                                    <li><a href="#">Online Classes</a></li> -->  
                                                    <li><a href="#">Class 1st - 8th</a>&nbsp;&nbsp;&nbsp;<a href="#">Video Course</a></li>
                                                    <li><a href="#">Class 9th - 10th</a>&nbsp;&nbsp;&nbsp;<a href="#">Video Course</a></li>
                                                    <li><a href="#">Class 11th & 12th</a>&nbsp;&nbsp;&nbsp;<a href="#">Video Course</a></li>
                                                    <li><a href="#">UG Course</a>&nbsp;&nbsp;&nbsp;<a href="#">Video Course</a></li>
                                                    <li><a href="#">PG Course</a>&nbsp;&nbsp;&nbsp;<a href="#">Video Course</a></li>
                                                    <li><a href="#">Other</a>&nbsp;&nbsp;&nbsp;<a href="#">Video Course</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->

                                         <div class="col-menu col-md-3">
                                            <h6 class="title">Competitive Exam</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                   <!--  <li><a href="#">Academic Course</a></li> -->
                                                    <!-- li><a href="#">Goverment Exam</a></li>
                                                    <li><a href="#">Video Classes</a></li>
                                                    <li><a href="#">Online Classes</a></li> -->  
                                                    <li><a href="#">Upsc</a></li>
                                                    <li><a href="#">Mppsc</a></li>
                                                    <li><a href="#">Banking</a></li>
                                                    <li><a href="#">Railway</a></li>
                                                    <li><a href="#">Defence</a></li>
                                                    <li><a href="#">SSC</a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->

                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Entrance Exam </h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">Jee </a></li>
                                                    <li><a href="#">Neet </a></li>
                                                    <li><a href="#">Clat </a></li>
                                                    <li><a href="#">Cat</a></li>
                                                    <li><a href="#">NDA </a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Other Pages</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <!-- <li><a href="<?php echo base_url(); ?>Web/faq">Faq</a></li>
                                                    <li><a href="<?php echo base_url(); ?>Web/contact">Contact</a></li> -->
                                                    <li><a href="#">Vocational course </a></li>
                                                    <li><a href="#">Professional Course </a></li>
                                                    <li><a href="#">Digital marketing course </a></li>
                                                    <li><a href="#">English speaking course </a></li>
                                                    <li><a href="#">Other </a></li>


                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                               
                                </li>
                            </ul>
                        </li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Student zone</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>Web/online_admission">Online Admission</a></li>
                                <li><a href="<?php echo base_url(); ?>Web/admission_verification">Admission Verifiction</a></li> 
                                <li><a href="<?php echo base_url(); ?>Web/addmisson_procedure">Admission procedure</a></li>
                                <li><a href="<?php echo base_url(); ?>Web/print_studentack">Print Acknowledgement</a></li>
                                <li><a href="<?php echo base_url(); ?>Web/print_identity_card">Print ID Card</a></li> 
                                <li><a href="<?php echo base_url(); ?>Web/verificationpage">Verifiction</a></li> 
                                <li><a href="<?php echo base_url(); ?>Web/studentlogin">Tutorials</a></li>
                                <li><a href="<?php echo base_url(); ?>Web/studentlogin">Ebooks</a></li> 
                                <li><a href="<?php echo base_url(); ?>Web/studentlogin">Online Classes</a></li>  
                            </ul>
                        </li>

                        <li>
                            <a class="smooth-menu" href="<?php echo base_url(); ?>Web/teacher">Teacher</a>
                        </li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Media</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>Web/gallery">Image Gallery</a></li>
                                <li><a href="<?php echo base_url(); ?>Web/videogallery">Video Gallery</a></li>
                                <li><a href="<?php echo base_url(); ?>Web/event">Events</a></li>  
                            </ul>
                        </li>

                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Career</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>Web/apply_online">Apply Online</a></li>
                                <li><a href="<?php echo base_url(); ?>Web/job">Current Vacancies</a></li>
                            
                            </ul>
                        </li>
                     
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" class="btn btn-theme effect btn-md" data-animation="animated slideInUp" data-toggle="dropdown" >Login</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>Web/Visiterlogin">Login as Visiter</a></li>
                                <li><a href="<?php echo base_url(); ?>Web/studentlogin">Login as student</a></li>
                                <li><a href="<?php echo base_url(); ?>Web/teacherlogin">Login as teacher</a></li>
                            </ul>
                        </li>
                         <li>
                            <a class="smooth-menu" href="<?php echo base_url(); ?>Web/blog">Blog</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Login Form 
    ============================================= -->
    <form action="#" id="login-form" class="mfp-hide white-popup-block">

       

    <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist" style="margin-bottom: 20px;">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" style="width: 175px; padding: 0px;">Login as Visitor </a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" style="width: 175px; padding: 0px;">Login as Student </a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" style="width: 175px; padding: 0px;">Login as Teacher</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">

    <div role="tabpanel" class="tab-pane active" id="home">
        <div class="col-md-3 login-social">
            <img src="http://market-mirror.com/assets/images/testimonial/13.jpeg" style="margin-top: 40px; margin-bottom: 10px;" alt="">
          <center><h4>Visiter</h4></center>
        </div>
        <div class="col-md-8 login-custom">
            <!-- h4>login as Student</h4> -->
           <form>
            <div class="col-md-12" id="login1">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Email*" type="email">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Password*" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <label for="login-remember"><input type="checkbox" id="login-remember">Remember Me</label>
                    <a title="Lost Password" href="#" class="lost-pass-link">Lost your password?</a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <button type="submit">
                        Login
                    </button>
                </div>
            </div>
            <p class="link-bottom">Not a member yet? <a href="#">Register now</a></p>
           </form>
        </div>

    </div>


    <div role="tabpanel" class="tab-pane" id="profile">
       <div class="col-md-3 login-social">
             <img src="http://market-mirror.com/assets/images/testimonial/13.jpeg" style="margin-top: 40px; margin-bottom: 10px;" alt="">
          <center><h4>Student</h4></center>
        </div>
        <div class="col-md-8 login-custom">
            <!-- h4>login as Student</h4> -->
          <form>
            <div class="col-md-12" id="login1">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Email*" type="email">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Password*" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <label for="login-remember"><input type="checkbox" id="login-remember">Remember Me</label>
                    <a title="Lost Password" href="#" class="lost-pass-link">Lost your password?</a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <button type="submit">
                        Login
                    </button>
                </div>
            </div>
            <p class="link-bottom">Not a member yet? <a href="#">Register now</a></p>
          </form>
        </div> 
    </div>


    <div role="tabpanel" class="tab-pane" id="messages">
        <div class="col-md-3 login-social">
             <img src="http://market-mirror.com/assets/images/testimonial/13.jpeg" style="margin-top: 40px; margin-bottom: 10px;" alt="">
          <center><h4>Teacher</h4></center>
        </div>
        <div class="col-md-8 login-custom">
            <!-- h4>login as Student</h4> -->
           <form>
            <div class="col-md-12" id="login1">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Email*" type="email">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Password*" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <label for="login-remember"><input type="checkbox" id="login-remember">Remember Me</label>
                    <a title="Lost Password" href="#" class="lost-pass-link">Lost your password?</a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <button type="submit">
                        Login
                    </button>
                </div>
            </div>
            <p class="link-bottom">Not a member yet? <a href="#">Register now</a></p>
         </form>
        </div>
    </div>
  </div>

</div> 

    <!-- End Login Form -->







    <!-- Start Register Form 
    ============================================= -->
    <form action="#" id="register-form" class="mfp-hide white-popup-block">
        <div class="col-md-2 login-social">
          
        </div>
        <div class="col-md-8 login-custom">
            <h4>Register a new account</h4>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Email*" type="email">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Username*" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Password*" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Repeat Password*" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <button type="submit">
                        Sign up
                    </button>
                </div>
            </div>
            <p class="link-bottom">Are you a member? <a href="#">Login now</a></p>
        </div>
    </form>
    <!-- End Register Form -->