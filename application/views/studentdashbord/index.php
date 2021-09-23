
<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Student Notice</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body no-padding height-9">
                                    <div class="row text-center">
			                            <div class="col-md-12" style="height: 50PX;">
			                               
			                                 <marquee behavior="scroll" scrollamount="4" width="100%" direction="pull-right" height="250px" class="marq" onmouseover="this.stop();" onmouseout="this.start();" >
                                 
                                  <?php               
                                  foreach ($h as $row)  
                                     {  
                                   ?>

                                <i class="fa fa-calendar" aria-hidden="true"></i> &nbsp <?php echo $row->date; ?> -
                                 <span> <?php echo $row->notice ; ?>  </span>
                                 &nbsp &nbsp &nbsp

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


					<!-- start widget -->
					<div class="state-overview">
						<div class="row">
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-white">
					      <!--       <span class="info-box-icon push-bottom bg-primary"><i class="material-icons">group</i></span> -->
					            <img alt=""  class="info-box-icon push-bottom" src="<?php echo base_url(); ?>assetes/adminuser/assets/img/student.png">
					            <div class="info-box-content">
					              <span class="info-box-text">New Students</span>
					              <span class="info-box-number">450</span>
					              <div class="progress">
					                <div class="progress-bar bg-primary" style="width: 45%"></div>
					              </div>
					              <span class="progress-description">
					                   10% Increase
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-white">
					           <!--  <span class="info-box-icon push-bottom bg-warning"><i class="material-icons">person</i></span> -->
					             <img alt=""  class="info-box-icon push-bottom" src="<?php echo base_url(); ?>assetes/adminuser/assets/img/course.png">
					            <div class="info-box-content">
					              <span class="info-box-text">Total Courses</span>
					              <span class="info-box-number">47</span>
					              <div class="progress">
					                <div class="progress-bar bg-warning" style="width: 40%"></div>
					              </div>
					              <span class="progress-description">
					                    09% Increase 
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-white">
					            <!-- <span class="info-box-icon push-bottom bg-success"><i class="material-icons">content_cut</i></span> --> 
					            <img alt=""  class="info-box-icon push-bottom" src="<?php echo base_url(); ?>assetes/adminuser/assets/img/awards.png">
					            <div class="info-box-content">
					              <span class="info-box-text">Awards</span>
					              <span class="info-box-number">128</span>
					              <div class="progress">
					                <div class="progress-bar bg-success" style="width: 85%"></div>
					              </div>
					              <span class="progress-description">
					                  18% Increase
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-xl-3 col-md-6 col-12">
					          <div class="info-box bg-white">
					       <!--      <span class="info-box-icon push-bottom bg-info"><i class="material-icons">monetization_on</i></span> -->
					            <img alt=""  class="info-box-icon push-bottom" src="<?php echo base_url(); ?>assetes/adminuser/assets/img/renew.png">
					            <div class="info-box-content">
					              <span class="info-box-text">Revenue</span> 
					              <span class="info-box-number">$48,697</span><span>$</span>
					              <div class="progress">
					                <div class="progress-bar bg-info" style="width: 50%"></div>
					              </div>
					              <span class="progress-description">
					                 42% Increase
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					      </div>
						</div>
					
                     
                    </div>
                 </div>
              
            <!-- end page content -->
