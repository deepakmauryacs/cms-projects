 <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/banner/2.jpg); padding-top: 40px;padding-bottom: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Video Courses</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Course</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    

    <!-- Start Popular Courses 
    ============================================= -->
    <div class="popular-courses default-padding bottom-less without-carousel" style="margin-top: -40px;"> 
          <!-- Start Registration 
    ============================================= -->
    <div class="reg-area default-padding-top bg-gray" style="padding-top: 0px; ">
        <div class="container">
            <div class="row">
                    <div class="reg-form default-padding-bottom" style="padding-bottom: 40px;">
                        <form action="#">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="" selected="">Please select your Class:</option>
                                            <option value="1" >Class 1</option>
                                            <option value="2" >Class 2</option>
                                            <option value="3">Class 3</option>
                                            <option value="4">Class 4</option>
                                            <option value="5">Class 5</option>
                                            <option value="6">Class 6</option>
                                            <option value="7">Class 7</option>
                                            <option value="8">Class 8</option>
                                            <option value="9">Class 9</option>
                                            <option value="10">Class 10</option>
                                            <option value="11">Class 11</option>
                                            <option value="12">Class 12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" style="margin-top: 0px;">
                                        Submit
                                    </button>
                                </div>
                           
                        </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Registration -->
        <div class="container">
           
            <div class="row" style="margin-top: 20px;">
                <div class="popular-courses-items">
                    
                    <!-- Single Item -->
                     <?php  
                     foreach ($video1 as $row)                          {  
                     ?>

                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <a class="popup-with-form" href="#register-form<?=$row->id?>">
                                    <img src="<?php echo base_url().'/uploads/course/'.$row->image; ?>" style="width: 100%;height: 160px;" alt="Thumb">
                                </a>
                                
                            </div>
                            <div class="info">
                               
                                <h4>Subject Name: &nbsp <span><?php echo $row->subject ; ?></span></h4>
                                <h4>Class: &nbsp <span><?php echo $row->class ; ?></span>th</h4>
                               
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 6,690
                                        </li>
                                        
                                    </ul>
                                    <a  class="popup-with-form" href="#register-form<?=$row->id?>" >PLAY NOW</a>
                                </div>
                                <!-- Modal -->

      <form action="#" id="register-form<?=$row->id?>" class="mfp-hide white-popup-block">
         <div class="col-md-12 login-social" style="height: 320px;">
           
            <iframe width="100%" height="100%" src="<?php echo $row->videolink ; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             
          </div>
      </form>
    
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>


                    <!-- End Single Item -->
                   
                    
                
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Courses -->
