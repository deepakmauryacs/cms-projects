<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="Sunray" />
    <title>Admin | Bootstrap Responsive College Admin Template</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="<?php echo base_url(); ?>assetes/adminuser/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--bootstrap -->
	<link href="<?php echo base_url(); ?>assetes/adminuser/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
	<link href="<?php echo base_url(); ?>assetes/adminuser/assets/plugins/material/material.min.css" rel="stylesheet" >
	<link href="<?php echo base_url(); ?>assetes/adminuser/assets/css/material_style.css" rel="stylesheet">
	<!-- morris chart -->
    <link href="<?php echo base_url(); ?>assetes/adminuser/assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
    <link href="<?php echo base_url(); ?>assetes/adminuser/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assetes/adminuser/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assetes/adminuser/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assetes/adminuser/assets/css/theme-color.css" rel="stylesheet" type="text/css" />
     <!-- data tables -->
    <link href="<?php echo base_url(); ?>assetes/adminuser/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>

    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

	<!-- favicon -->
    <link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smartangular/source/light/assets/images/favicon.ico"/> 
 </head>
 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.html">
                    <img alt="" src="<?php echo base_url(); ?>assetes/adminuser/assets/img/logos.png">
                    <span class="logo-default" >Skyevo</span> </a>
                </div>
                <!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler font-size-20"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
				</ul>
				 <ul class="nav navbar-nav navbar-left in">
				 	<li class="dropdown dropdown-extended dropdown-notification" >
                            <a href="javascript:;" class="dropdown-toggle app-list-icon font-size-20" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-th" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu app-icon">
                            	<li class="app-dropdown-header">
                                    <p><span class="bold">Applications</span></p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list app-icon-dropdown" data-handle-color="#637283">
										<li>
											<a href="add_patient.html" class="patient-icon">
											<i class="material-icons">local_hotel</i>
											<span class="block">Add Patient</span>
											</a>
										</li>
										<li>
											<a href="email_inbox.html" class="email-icon">
											<i class="material-icons">drafts</i>
											<span class="block">Email</span>
											</a>
										</li>
										<li>
											<a href="view_appointment.html" class="appoint-icon">
											<i class="material-icons">assignment</i>
											<span class="block">Appointment</span>
											</a>
										</li>
										<li>
											<a href="all_doctors.html" class="doctor-icon">
											<i class="material-icons">people</i>
											<span class="block">Doctors</span>
											</a>
										</li>
										<li>
											<a href="google_maps.html" class="map-icon">
											<i class="material-icons">map</i>
											<span class="block">Map</span>
											</a>
										</li>
										<li>
											<a href="payments.html" class="payment-icon">
											<i class="material-icons">monetization_on</i>
											<span class="block">Payments</span>
											</a>
										</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                </ul>
                <ul class="nav navbar-nav navbar-left in">
                	<!-- start full screen button -->
                    <li><a href="javascript:;" class="fullscreen-click font-size-20"><i class="fa fa-arrows-alt"></i></a></li>
                    <!-- end full screen button -->
                </ul>
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- start notification dropdown -->
                        <li class="dropdown dropdown-extended dropdown-notification" >
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="material-icons">notifications</i>
                                <span class="notify"></span>
                                <span class="heartbeat"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3><span class="bold">Notifications</span></h3>
                                    <span class="notification-label purple-bgcolor">New 6</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">just now</span>
                                                <span class="details">
                                                <span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-check"></i></span> Congratulations!. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">3 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></i></span>
                                                <b>John Micle </b>is now following you. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">7 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle blue-bgcolor"><i class="fa fa-comments-o"></i></span>
                                                <b>Sneha Jogi </b>sent you a message. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">12 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle pink"><i class="fa fa-heart"></i></span>
                                                <b>Ravi Patel </b>like your photo. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">15 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle yellow"><i class="fa fa-warning"></i></span> Warning! </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">10 hrs</span>
                                                <span class="details">
                                                <span class="notification-icon circle red"><i class="fa fa-times"></i></span> Application error. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="javascript:void(0)"> All notifications </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
 						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="material-icons">question_answer</i>
                                <span class="notify"></span>
                                <span class="heartbeat"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3><span class="bold">Messages</span></h3>
                                    <span class="notification-label cyan-bgcolor">New 2</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="<?php echo base_url(); ?>assetes/adminuser/assets/img/doc/doc2.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from">Sarah Smith </span>
                                                	<span class="time">Just Now </span>
                                                </span>
                                                <span class="message"> Jatin I found you on LinkedIn... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="<?php echo base_url(); ?>assetes/adminuser/assets/img/doc/doc3.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from">John Deo </span>
                                                	<span class="time">16 mins </span>
                                                </span>
                                                <span class="message"> Fwd: Important Notice Regarding Your Domain Name... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="<?php echo base_url(); ?>assetes/adminuser/assets/img/doc/doc1.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Rajesh </span>
                                                	<span class="time">2 hrs </span>
                                                </span>
                                                <span class="message"> pls take a print of attachments. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="<?php echo base_url(); ?>assetes/adminuser/assets/img/doc/doc8.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Lina Smith </span>
                                                	<span class="time">40 mins </span>
                                                </span>
                                                <span class="message"> Apply for Ortho Surgeon </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="<?php echo base_url(); ?>assetes/adminuser/assets/img/doc/doc5.jpg" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Jacob Ryan </span>
                                                	<span class="time">46 mins </span>
                                                </span>
                                                <span class="message"> Request for leave application. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="#"> All Messages </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end message dropdown -->
 						<!-- start manage user dropdown -->
 						<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="<?php echo base_url(); ?>assetes/adminuser/assets/img/dp.jpg" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="<?php echo base_url(); ?>Studentdashboard/Studentdashboard/Userprofile">
                                        <i class="fa fa-user"></i> Profile </a>
                                </li>
                               
                                <li>
                                    <a href="#">
                                        <i class="fa fa-question-circle"></i> Help
                                    </a>
                                </li>
                                <li class="divider"> </li>
                             
                                <li>
                                    <a href="<?php echo base_url('Admins/studentlogin/logout');?>">
                                        <i class="fa fa-sign-out"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                       <!--  <li class="dropdown dropdown-quick-sidebar-toggler">
                             <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
	                           <i class="material-icons">settings</i>
	                        </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll" class="left-sidemenu">
	                    <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="pull-left image">
	                                    <img src="<?php echo base_url(); ?>assetes/adminuser/assets/img/dp.jpg" class="img-circle user-img-circle" alt="User Image" />
	                                </div>
	                                <div class="pull-left info">
                                    <p>
                                    <?php
                                    $stddata=$this->session->userdata('StudentData');
                                     echo($stddata['studentname']);
                                        ?>
                                    </p>
                                         <small>Student</small>
	                                </div>
	                            </div>
	                        </li>
                              
                            <li class="nav-item active open">
                                <a href="<?php echo base_url(); ?>Studentdashboard/Studentdashboard" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Dashboard</span>
                                    <span class="selected"></span>
                                </a>
                            </li>

	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">E Note-Book</span>
	                                <span class="selected"></span>
                                	<span class="arrow open"></span>
	                            </a>
	                            <ul class="sub-menu">
	                            
	                                
                                    <li class="nav-item ">
                                        <a href="<?php echo base_url(); ?>Studentdashboard/Academicnote/view_academic_note" class="nav-link ">
                                            <span class="title">All Note Book</span>
                                        </a>
                                    </li>
                                     
                                     
                            
	                            </ul>
	                        </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Home Work</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                 
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>Studentdashboard/Homework/view_home_work" class="nav-link ">
                                            <span class="title">All Home Work</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Live Class</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                 
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>Studentdashboard/Liveclass" class="nav-link ">
                                            <span class="title">Live Class</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            

                            

                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Ask Question</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>Adminusers/About" class="nav-link ">
                                            <span class="title">Ask</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Course</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>Adminusers/Why" class="nav-link ">
                                            <span class="title">Course</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                              <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Video Course</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>Adminusers/About" class="nav-link ">
                                            <span class="title">Video Course</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>







	                    </ul>
	                </div>
                </div>
            </div>
			 <!-- end sidebar menu -->