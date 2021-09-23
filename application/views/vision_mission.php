 <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/banner/21.jpg); padding-top: 40px;padding-bottom: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>VISION & MISSION</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">VISION & MISSION</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->





      <!-- Start mission About 
    ============================================= -->
     <?php  
     foreach ($missions as $row)  
    {  
    ?>

    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="about-info">
                    
                    <div class="col-md-6 info">
                        <h2><?php echo $row->heading; ?></h2>
                        
                         <?php echo $row->description; ?>
                        
                    </div>

                    <div class="col-md-6 thumb">
                        <img src="<?php echo base_url().'/uploads/'.$row->image; ?>" alt="Thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
       }
     ?>
    <!-- End About -->


      <!-- Start target About 
    ============================================= -->
    <?php  
     foreach ($goalss as $row)  
    {  
    ?>

    <div class="about-area default-padding" style="background-color: #f5f5f5;">
        <div class="container">
            <div class="row">
                <div class="about-info">
                     <div class="col-md-6 thumb">
                        <img src="<?php echo base_url().'/uploads/'.$row->image; ?>" alt="Thumb">
                    </div>
                    <div class="col-md-6 info">
                        <h2><?php echo $row->heading; ?></h2>
                        
                         <?php echo $row->description; ?>
                        
                        
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <!-- End About -->
 
      <!-- Start Video Area
    ============================================= -->
    <div class="video-area padding-xl text-center bg-fixed text-light shadow dark-hard" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/banner/16.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="video-heading">
                        <h2>Take a short tour in our campus</h2>
                        <p>
                            Tolerably behaviour may admitting daughters offending her ask own. Praise effect wishes change way and any wanted. Lively use looked latter regard had. Do he it part more last in. Merits ye if mr narrow points. Melancholy particular devonshire alteration it favourable appearance
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="video-info">
                    <div class="overlay-video">
                        <a class="popup-youtube video-play-button" href="https://www.youtube.com/watch?v=8GQTt50izkg">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video Area -->

    <!-- Start Advisor Area
    ============================================= -->
    <section id="advisor" class="advisor-area default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Experience Advisors</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="advisor-carousel owl-carousel owl-theme text-center text-light">

                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="<?php echo base_url(); ?>assetes/assets/img/advisor/1.jpg" alt="Thumb">  
                                <div class="info-title">
                                    <h4>Professon. Nuri Paul</h4>
                                    <span>Chemistry specialist</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>About Nuri Paul</h4>
                                                <p>
                                                    Great explorer of the truth, the master-builder of human happiness.
                                                </p>
                                                <a href="#">Read More</a>
                                                <div class="social">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>    
                        </div> 
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="<?php echo base_url(); ?>assetes/assets/img/advisor/2.jpg" alt="Thumb">  
                                <div class="info-title">
                                    <h4>John Babu</h4>
                                    <span>Interactive Designer</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>About John Babu</h4>
                                                <p>
                                                    Great explorer of the truth, the master-builder of human happiness.
                                                </p>
                                                <a href="#">Read More</a>
                                                <div class="social">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>    
                        </div> 
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="<?php echo base_url(); ?>assetes/assets/img/advisor/3.jpg" alt="Thumb">  
                                <div class="info-title">
                                    <h4>Mridul Druva</h4>
                                    <span>Creative developer</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>About Mridul Druva</h4>
                                                <p>
                                                    Great explorer of the truth, the master-builder of human happiness.
                                                </p>
                                                <a href="#">Read More</a>
                                                <div class="social">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>    
                        </div> 
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="<?php echo base_url(); ?>assetes/assets/img/advisor/4.jpg" alt="Thumb">  
                                <div class="info-title">
                                    <h4>Sufia Nilla</h4>
                                    <span>Project Manager</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>About Sufia Nilla</h4>
                                                <p>
                                                    Great explorer of the truth, the master-builder of human happiness.
                                                </p>
                                                <a href="#">Read More</a>
                                                <div class="social">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>    
                        </div> 
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="<?php echo base_url(); ?>assetes/assets/img/advisor/5.jpg" alt="Thumb">  
                                <div class="info-title">
                                    <h4>Professon. Nuri Paul</h4>
                                    <span>Chemistry specialist</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>About Nuri Paul</h4>
                                                <p>
                                                    Great explorer of the truth, the master-builder of human happiness.
                                                </p>
                                                <a href="#">Read More</a>
                                                <div class="social">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>    
                        </div> 
                        <!-- Single Item -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Advisor Area -->

  
    
    <div class="subscribe-area text-center text-light default-padding bg-fixed shadow dark-hard" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/banner/20.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="content">
                        <h2>Subscribe now</h2> 
                        <p>Receive weekly newsletter with educational materials, new courses <br> interesting posts, popular books and much more!</p>
                    </div>
                    <div class="form">
                        <form action="#">
                            <input type="email" name="email" class="form-control" placeholder="Enter your e-mail here">
                            <button type="submit">
                                Subscribe
                            </button>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
