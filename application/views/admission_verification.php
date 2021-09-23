  <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/banner/12.jpg); padding-top: 40px;padding-bottom: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>ADMISSION VERIFICATION</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">ADMISSION VERIFICATION</li>
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
                       
                      



             <?php if ($this->session->flashdata('loginonlineverification')): ?>
             <div class="alert alert-danger alert-dismissible" role="alert" style="background-color: #e55957; color: white;">
             <div class="iq-alert-text"> <?php echo $this->session->flashdata('loginonlineverification'); ?></div>
             <a href="#" class="close" data-dismiss="alert" aria-label="close" style="margin-top: -21px; color: white;">&times;</a>
             </button>
             </div>
            <?php endif; ?>


                   
                        <form action="<?php echo base_url('Admins/Onlineverification/loginonlineverification');?>" method="post" id="register-form" class="white-popup-block" enctype="multipart/form-data">


                        <div class="col-md-9" style="background-color: #ffb606;text-align: center; margin-bottom: 20px;height: 55px; padding-top: 11PX;">
                            <h4 style="color: white; margin-top: 8px;">Admission Verification</h4>
                        </div>

                       
                        <div class="col-md-9 login-custom">
                           
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Enter Your Enrollment No*" name="enumber" type="number" required>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-md-12" style="text-align: center;">
                                <div class="row">
                                    <button type="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->
