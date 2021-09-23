 <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/banner/25.jpg);padding-top: 40px;padding-bottom: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Teacher</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Teacher</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Advisor Area
    ============================================= -->
    <section id="advisor" class="advisor-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="advisor-items text-center text-light">
                     <?php  
                     foreach ($teams as $row)  
                     {  
                     ?>
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="<?php echo base_url().'/uploads/teacher/'.$row->image; ?>" alt="Thumb">  
                                <div class="info-title">
                                    <h4><?php echo $row->name; ?></h4>
                                    <span><?php echo $row->profession; ?></span>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div> 
                    <!-- Single Item -->
                    <?php
                    }
                    ?>

                    <!-- Single Item -->
                 <!--    <div class="col-md-4 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="<?php echo base_url(); ?>assetes/assets/img/advisor/2.jpg" alt="Thumb">  
                                <div class="info-title">
                                    <h4>Monayem Pruda</h4>
                                    <span>Senior Developer</span>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>  -->
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <!-- <div class="col-md-4 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="<?php echo base_url(); ?>assetes/assets/img/advisor/3.jpg" alt="Thumb">  
                                <div class="info-title">
                                    <h4>Dr. Bubly Minu</h4>
                                    <span>Science specialist</span>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>  -->
                    <!-- Single Item -->
                    <!-- Single Item -->
                   <!--  <div class="col-md-4 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="<?php echo base_url(); ?>assetes/assets/img/advisor/4.jpg" alt="Thumb">  
                                <div class="info-title">
                                    <h4>Professon. John Doe</h4>
                                    <span>Senior Writter</span>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>  -->
                    <!-- Single Item -->
                    <!-- Single Item -->
                  <!--   <div class="col-md-4 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="<?php echo base_url(); ?>assetes/assets/img/advisor/5.jpg" alt="Thumb">  
                                <div class="info-title">
                                    <h4>Professon. John Doe</h4>
                                    <span>Senior Writter</span>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>  -->
                    <!-- Single Item -->
                    <!-- Single Item -->
                 <!--    <div class="col-md-4 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="<?php echo base_url(); ?>assetes/assets/img/advisor/1.jpg" alt="Thumb">  
                                <div class="info-title">
                                    <h4>Professon. John Doe</h4>
                                    <span>Senior Writter</span>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>  -->
                    <!-- Single Item -->
                </div>
            </div>
        </div>
    </section>
    <!--End Advisor Area -->