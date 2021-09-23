 <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/banner/12.jpg); padding-top: 40px;padding-bottom: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Gallery</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Portfolio
    ============================================= -->
    <div id="portfolio" class="portfolio-area default-padding">
        <div class="container">
            <div class="portfolio-items-area text-center">
                <div class="row">
                    <div class="col-md-12 portfolio-content">
                        <div class="mix-item-menu active-theme">
                            <button class="active" data-filter="*">All</button>
                         
                             <?php  
                             foreach ($galleryheadings as $row)  
                              {  
                              ?>
                               <button data-filter=".<?php echo $row->datafilterid; ?>"><?php echo $row->heading; ?></button>
                             <?php
                               }
                             ?>

                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery masonary text-light">
                            <div id="portfolio-grid" class="portfolio-items col-4">


                                <?php  
                                foreach ($galleryimages as $row)  
                                {  
                                ?>
                                <div class="pf-item <?php echo $row->datafilterid; ?>">
                                    <div class="item-effect">
                                        <img src="<?php echo base_url().'/uploads/gallery/'.$row->image; ?>" alt="thumb" />
                                        <div class="overlay">
                                            <a href="<?php echo base_url().'/uploads/gallery/'.$row->image; ?>" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                     }
                                ?>
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- End Portfolio -->
