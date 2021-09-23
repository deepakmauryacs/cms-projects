 <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/banner/12.jpg); padding-top: 40px;padding-bottom: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Teacher Login</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Teacher Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
 <!-- Start Login 
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                
                        <form action="<?php echo base_url('Admins/teacherlogin/login');?>" method="post" id="login-form" class="white-popup-block"  enctype="multipart/form-data">
                        <div class="col-md-4 login-social">
                           <!--  <h4>Login with social</h4> -->
                            
                        </div>
                        <div class="col-md-8 login-custom">
                            <h4>Teacher Login</h4>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" name="emailid" placeholder="Email*" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control"  name="password" placeholder="Password*" type="text">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->
