
    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area content-top-heading less-paragraph text-normal">
        <div id="bootcarousel" class="carousel slide animate_text carousel-fade" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-light carousel-zoom">
                <div class="item active">
                    <div class="slider-thumb bg-fixed" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/banner/1.jpg);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInLeft">Reach you career</h3>
                                            <h1 data-animation="animated slideInUp">Learn from best online training course</h1>
                                            <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="#">Learn more</a>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">View Courses</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <?php  
                 foreach ($banners as $row)  
                  {  
                 ?>

                <div class="item">
                    <div class="slider-thumb bg-fixed" style="background-image: url(<?php echo base_url().'/uploads/banner/'.$row->image; ?>);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInLeft"><?php echo $row->heading; ?></h3>
                                            <h1 data-animation="animated slideInUp"><?php echo $row->subheading; ?></h1>
                                            <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="#">Learn more</a>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">View Courses</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <?php
                  }
                  ?>

            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About 
    ============================================= -->
<?php  
 foreach ($indexabouts as $row)  
{  
?>
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="about-info">
                    <div class="col-md-6 thumb">
                        <img src="<?php echo base_url().'/uploads/'.$row->image; ?>" alt="Thumb">
                    </div>
                    <div class="col-md-6 info">
                        <h5>Introduction</h5>
                        <h2><?php echo $row->heading; ?></h2>
                        <p>
                        <?php echo $row->description; ?>
                        </p>
                        <a href="#" class="btn btn-dark border btn-md">Read More</a>
                    </div>
                </div>
                <div class="seperator col-md-12">
                    <span class="border"></span>
                </div>
                <div class="our-features">
                    <div class="col-md-4 col-sm-4">
                        <div class="item mariner">
                            <div class="icon">
                                <i class="flaticon-faculty-shield"></i>
                            </div>
                            <div class="info">
                                <h4>Expert faculty</h4>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item java">
                            <div class="icon">
                                <i class="flaticon-book-2"></i>
                            </div>
                            <div class="info">
                                <h4>Online learning</h4>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item malachite">
                            <div class="icon">
                                <i class="flaticon-education"></i>
                            </div>
                            <div class="info">
                                <h4>Scholarship</h4>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
    <!-- End About -->

    <!-- Start Why Chose Us 
    ============================================= -->
    <?php  
     foreach ($indexawhys as $row)  
    {  
    ?>

    <div class="wcs-area bg-dark text-light">
        <div class="container-full">
            <div class="row">
                <div class="col-md-6 thumb bg-cover" style="background-image: url(<?php echo base_url().'/uploads/'.$row->image; ?>);"></div>
                <div class="col-md-6 content">
                    <div class="site-heading text-left">
                        <h2>Why chose us</h2>
                        <p>
                            <?php echo $row->description; ?>
                        </p>
                    </div>

                    <!-- item -->
                    <div class="item">
                        <div class="icon">
                            <i class="flaticon-trending"></i>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#"><?php echo $row->heading1; ?></a>
                            </h4>
                            <p>
                                <?php echo $row->description1; ?>
                            </p>
                        </div>
                    </div>
                    <!-- item -->

                    <!-- item -->
                    <div class="item">
                        <div class="icon">
                            <i class="flaticon-books"></i>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#"><?php echo $row->heading2; ?></a>
                            </h4>
                            <p>
                              <?php echo $row->description2; ?>
                            </p>
                        </div>
                    </div>
                    <!-- item -->

                    <!-- item -->
                    <div class="item">
                        <div class="icon">
                            <i class="flaticon-professor"></i>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#"><?php echo $row->heading3; ?></a>
                            </h4>
                            <p>
                               <?php echo $row->description3; ?>
                            </p>
                        </div>
                    </div>
                    <!-- item -->

                </div>
            </div>
        </div>
    </div>
    <?php
     }
     ?>
    <!-- End Why Chose Us -->
     

   <!---News Section--->
 <!--   <section class="news-section">
            <div class="container">
                <div class="section-title2">
                    <h2>Latest News</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="news-box" style="height: 400px;" >
                        <div class="news-box img" style="background-image:url((http://kkcoaching.in/assetes/images/noticeb.jpg); height: 360px; ">  
                            <h2 style="color: white">News Board</h2>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-box" style="height: 400px;" >
                            <div class="pin" style="    text-align: center;
    background-color: #f6706d; ">
                     <p style="padding-top: 11px;font-size: 20px; color: white;">Latest News</p>
                        <img src="http://kkcoaching.in/assetes/images/unnamed.png" class="img-fluid" style="max-height:31px;  "></div>
<ul style="background: linear-gradient(to bottom right, #f6706d 65%, #ffb241);
    padding: 10px;
    margin: 0;
    position: relative;">
                        <marquee direction="up" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();" style="height:250px;">
                                
                                <li style="  border-bottom: 1px solid #333; padding:15px 0px 0px 30px; position: relative; overflow: hidden;">
                               
                                <div class="date" style="color: black; margin-bottom:-10px; "><i class="fa fa-calendar"></i>22-06-2020</div>
                                <div class="ho-ev-link" style="    float: left; width: 70%;">
                                    
                                        <h4 style="color: white"> HELLO ADMITION OPEN </h4>
                                
                                </div> 
                                </li>
                               
                             </marquee>
                           </ul> 
                        </div>
                    </div>   
                </div>
            </div>
        </section> -->


   <div class="container-fluid bg">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="ltn">Latest News</h2>
            </div>
        </div>
        <div class="row sec">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-6">
                        <div class="nbg">
                            <div class="img-box">
                                    <img src="<?php echo base_url(); ?>assetes/assets/img/newsboard.png" style="height: 370px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="grad1">
                            <h3 class="ttl text-center">Latest News</h3>
                          <CENTER><img src="http://kkcoaching.in/assetes/images/unnamed.png" class="img-fluid" style="max-height:31px;  "></CENTER>
                            <marquee behavior="scroll" scrollamount="4" width="100%" direction="up" height="250px" class="marq" onmouseover="this.stop();" onmouseout="this.start();" >
                                 <?php                  
                                 foreach ($notice as $row)  
                                 {  
                                 ?>
                                <i class="fa fa-calendar" aria-hidden="true"></i> &nbsp <?php echo $row->date; ?>
                                <p class="desc"><?php echo $row->notice ; ?></p>
                                <hr>
                                <?php
                                   }
                                ?>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!---End News Section --->






  

    <!-- Start Popular Courses 
    ============================================= -->
    <div class="popular-courses circle bg-gray carousel-shadow default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Popular Courses</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="popular-courses-items popular-courses-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>assetes/assets/img/courses/1.jpg" alt="Thumb">
                                </a>
                                <div class="price">Price: Free</div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="<?php echo base_url(); ?>assetes/assets/img/team/7.jpg" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Munil Druva</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.5 (23,890)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="#">data science and software</a></h4>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 6,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 16:00
                                        </li>
                                    </ul>
                                    <a href="#">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>assetes/assets/img/courses/2.jpg" alt="Thumb">
                                </a>
                                <div class="price">Price: $12</div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="<?php echo base_url(); ?>assetes/assets/img/team/8.jpg" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Akua Paul</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>5 (867)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="#">Stanford Engineering</a></h4>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 6,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 16:00
                                        </li>
                                    </ul>
                                    <a href="#">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>assetes/assets/img/courses/3.jpg" alt="Thumb">
                                </a>
                                <div class="price">Price: Free</div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="<?php echo base_url(); ?>assetes/assets/img/team/9.jpg" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Jonathom Kiyam</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>4.9 (2,655)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="#">Covers Big Data analysis</a></h4>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 6,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 16:00
                                        </li>
                                    </ul>
                                    <a href="#">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>assetes/assets/img/courses/4.jpg" alt="Thumb">
                                </a>
                                <div class="price">Price: $46</div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="<?php echo base_url(); ?>assetes/assets/img/team/2.jpg" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Huma Park</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.4 (16,465)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="#">professional web development</a></h4>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 6,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 16:00
                                        </li>
                                    </ul>
                                    <a href="#">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>assetes/assets/img/courses/5.jpg" alt="Thumb">
                                </a>
                                <div class="price">Price: $124</div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="<?php echo base_url(); ?>assetes/assets/img/team/3.jpg" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Prokash Timer</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>5 (7,890)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="#">Java Programming Masterclass</a></h4>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 6,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 16:00
                                        </li>
                                    </ul>
                                    <a href="#">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Courses -->

    <!-- Start Top Categories 
    ============================================= -->
    <div id="top-categories" class="top-cat-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Top Categories</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="top-cat-items">
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/category/1.jpg);">
                            <a href="#">
                                <i class="flaticon-feature"></i>
                                <div class="info">
                                    <h4>software engineering</h4>
                                    <span>(1,226) Topics</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/category/2.jpg);">
                            <a href="#">
                                <i class="flaticon-interaction"></i>
                                <div class="info">
                                    <h4>Interactive Programming</h4>
                                    <span>(2,366) Topics</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/category/3.jpg);">
                            <a href="#">
                                <i class="flaticon-conveyor"></i>
                                <div class="info">
                                    <h4>Quantum Mechanics</h4>
                                    <span>(766) Topics</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/category/4.jpg);">
                            <a href="#">
                                <i class="flaticon-education"></i>
                                <div class="info">
                                    <h4>Preventing Dementia</h4>
                                    <span>(4,500) Topics</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/category/5.jpg);">
                            <a href="#">
                                <i class="flaticon-potential"></i>
                                <div class="info">
                                    <h4>Hidden Potential</h4>
                                    <span>(975) Topics</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/category/6.jpg);">
                            <a href="#">
                                <i class="flaticon-print"></i>
                                <div class="info">
                                    <h4>Introduction Programming</h4>
                                    <span>(3,340) Topics</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/category/7.jpg);">
                            <a href="#">
                                <i class="flaticon-translate"></i>
                                <div class="info">
                                    <h4>Machine Learning</h4>
                                    <span>(7,800) Topics</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/category/8.jpg);">
                            <a href="#">
                                <i class="flaticon-firewall"></i>
                                <div class="info">
                                    <h4>Maintaining a Mindful</h4>
                                    <span>(24,80) Topics</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Categories -->
    <!-- Start Advisor Area
    ============================================= -->
    <section id="advisor" class="advisor-area bg-gray default-padding">
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

    <!-- Start Fun Factor 
    ============================================= -->
    <div class="fun-factor-area default-padding bottom-less text-center bg-fixed shadow dark-hard" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/banner/2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-contract"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="212" data-speed="5000"></span>
                            <span class="medium">National Awards</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-professor"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="128" data-speed="5000"></span>
                            <span class="medium">Best Teachers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-online"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="8970" data-speed="5000"></span>
                            <span class="medium">Students Enrolled</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-reading"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="640" data-speed="5000"></span>
                            <span class="medium">Cources</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor -->

    <!-- Start Event
    ============================================= -->
    <section id="event" class="event-area default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Upcoming Events</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="event-items">
                    <!-- Single Item -->
                    <div class="item horizontal col-md-12">
                        <div class="col-md-6 thumb bg-cover" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/event/1.jpg);">
                            <div class="date">
                                <h4><span>12</span> Dec, 2018</h4>
                            </div>
                        </div>
                        <div class="col-md-6 info">
                            <h4>
                                <a href="#">Secondary Schools United Nations</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 15 Oct, 2019</li>
                                    <li><i class="fas fa-clock"></i>  8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides. Law insensible middletons unsatiable for apartments boy delightful unreserved. 
                            </p>
                            <a href="#" class="btn btn-dark effect btn-sm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-sm">
                                <i class="fas fa-ticket-alt"></i> 43 Available
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->

                    <!-- Single Item -->
                    <div class="item vertical col-md-6">
                        <div class="thumb">
                            <img src="<?php echo base_url(); ?>assetes/assets/img/event/2.jpg" alt="Thumb">
                            <div class="date">
                                <h4><span>27</span> Feb, 2019</h4>
                            </div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Social Science & Humanities</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 15 Oct, 2019</li>
                                    <li><i class="fas fa-clock"></i>  8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides. Law insensible middletons unsatiable for apartments boy delightful unreserved. 
                            </p>
                            <a href="#" class="btn btn-dark effect btn-sm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-sm">
                                <i class="fas fa-ticket-alt"></i> 189 Available
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->

                    <!-- Single Item -->
                    <div class="item vertical col-md-6">
                        <div class="thumb">
                            <img src="<?php echo base_url(); ?>assetes/assets/img/event/3.jpg" alt="Thumb">
                            <div class="date">
                                <h4><span>15</span> Mar, 2019</h4>
                            </div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Actualized Leadership Network Seminar</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 15 Oct, 2019</li>
                                    <li><i class="fas fa-clock"></i>  8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides. Law insensible middletons unsatiable for apartments boy delightful unreserved. 
                            </p>
                            <a href="#" class="btn btn-dark effect btn-sm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-sm">
                                <i class="fas fa-ticket-alt"></i> 32 Available
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->

                    <!-- Single Item -->
                    <div class="item horizontal col-md-12">
                        <div class="col-md-6 thumb bg-cover" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/event/4.jpg);">
                            <div class="date">
                                <h4><span>24</span> Apr, 2019</h4>
                            </div>
                        </div>
                        <div class="col-md-6 info">
                            <h4>
                                <a href="#">International Conference on Art Business</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 15 Oct, 2019</li>
                                    <li><i class="fas fa-clock"></i>  8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides. Law insensible middletons unsatiable for apartments boy delightful unreserved. 
                            </p>
                            <a href="#" class="btn btn-dark effect btn-sm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-sm">
                                <i class="fas fa-ticket-alt"></i> 12 Available
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->

                    <div class="more-btn col-md-12 text-center">
                        <a href="#" class="btn btn-dark border btn-md">View All Events</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Event -->

    <!-- Start Registration 
    ============================================= -->
    <div class="reg-area default-padding-top bg-gray">
        <div class="container">
            <div class="row">
                <div class="reg-items">
                    <div class="col-md-6 reg-form default-padding-bottom">
                        <div class="site-heading text-left">
                            <h2>Get a Free online Registration</h2>
                            <p>
                                written on charmed justice is amiable farther besides. Law insensible middletons unsatiable for apartments boy delightful unreserved. 
                            </p>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="First Name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Last Name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email*" type="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Chose Subject</option>
                                            <option>Computer Engineering</option>
                                            <option>Accounting Technologies</option>
                                            <option>Web Development</option>
                                            <option>Machine Language</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Phone" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit">
                                        Rigister Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 thumb">
                        <img src="<?php echo base_url(); ?>assetes/assets/img/contact.png" alt="Thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Registration -->

    <!-- Start Testimonials 
    ============================================= -->
    <div class="testimonials-area carousel-shadow default-padding bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Students Review</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-review-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <?php  
                        foreach ($indexstudents as $row)  
                         {  
                         ?>

                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="<?php echo base_url().'/uploads/student/'.$row->image; ?>" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                   <?php echo $row->description ; ?>
                                </p>
                                <h4><?php echo $row->name ; ?></h4>
                                <span><?php echo $row->subject ; ?></span>
                            </div>
                        </div>

                       <?php
                       }
                       ?> 
                        <!-- Single Item -->
                        <!-- Single Item -->
                      <!--   <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="<?php echo base_url(); ?>assetes/assets/img/team/3.jpg" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise.. 
                                </p>
                                <h4>Astron Brun</h4>
                                <span>Science Student</span>
                            </div>
                        </div> -->
                        <!-- Single Item -->
                        <!-- Single Item -->
                      <!--   <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="<?php echo base_url(); ?>assetes/assets/img/team/4.jpg" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise.. 
                                </p>
                                <h4>Paol Druva</h4>
                                <span>Development Student</span>
                            </div>
                        </div> -->
                        <!-- Single Item -->
                        <!-- Single Item -->
                       <!--  <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="<?php echo base_url(); ?>assetes/assets/img/team/7.jpg" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise.. 
                                </p>
                                <h4>Druna Patia</h4>
                                <span>Biology Student</span>
                            </div>
                        </div> -->
                        <!-- Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Start Blog 
    ============================================= -->
    <div id="blog" class="blog-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Latest News</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">

                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="<?php echo base_url(); ?>assetes/assets/img/blog/1.jpg" alt="Thumb"></a>
                                <div class="date">
                                    <h4><span>24</span> Nov, 2018</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Objection happiness something</a>
                                </h4>
                                <p>
                                    Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected
                                </p>
                                <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Author</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="<?php echo base_url(); ?>assetes/assets/img/blog/2.jpg" alt="Thumb"></a>
                                <div class="date">
                                    <h4><span>12</span> Sep, 2018</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Meant to learn of vexed</a>
                                </h4>
                                <p>
                                    Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected
                                </p>
                                <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Author</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="<?php echo base_url(); ?>assetes/assets/img/blog/3.jpg" alt="Thumb"></a>
                                <div class="date">
                                    <h4><span>29</span> Dec, 2018</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Delightful up dissimilar</a>
                                </h4>
                                <p>
                                    Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected
                                </p>
                                <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Author</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
