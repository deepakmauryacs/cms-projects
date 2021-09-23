<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Student</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Student</li>
                            </ol>
                        </div>
                    </div>
                       
         

                    <?php if ($this->session->flashdata('success')): ?>
                     <div class="alert text-white bg-success alert-dismissible" role="alert">
                              <div class="iq-alert-text"><?php echo $this->session->flashdata('success'); ?></div>
                             <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <i class="ri-close-line"></i>
                              </button>
                           </div>
                    <?php endif; ?>


                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Add Student</header>
                                     <button id = "panel-button" 
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>
				                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
				                           data-mdl-for = "panel-button">
				                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
				                        </ul>
                                </div>
                                <div class="card-body" id="bar-parent">
                                    <form action="<?php echo base_url('Admins/Addstudent/addstudent');?>" method="post" id="form_sample_1" class="form-horizontal"  enctype="multipart/form-data">
                                        <div class="form-body">
                                           

                                     

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Student Image
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="file" name="image"  
                                                        class="form-control input-height" required>
                                                 </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Enrollment Number
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="enumber" data-required="1"  class="form-control input-height" required> </div>
                                            </div>


                                           <div class="form-group row">
                                                <label class="control-label col-md-3">Student Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="studentname" data-required="1"  class="form-control input-height" required> </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Class
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    
                                                     <select class="form-control" name="class" style="height: 46PX;" required>  
                                            <option value="" selected=""> --- Class --- </option>
                                            <option value="1" >Class 1</option>
                                            <option value="2" >Class 2</option>
                                            <option value="3">Class 3</option>
                                            <option value="4">Class 4</option>
                                            <option value="5">Class 5</option>
                                            <option value="6">Class 6</option>
                                            <option value="7">Class 7</option>
                                            <option value="8<">Class 8</option>
                                            <option value="9">Class 9</option>
                                            <option value="10">Class 10</option>
                                            <option value="11">Class 11</option>
                                            <option value="12">Class 12</option>
                                           </select>
                                            </div>
                                        </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Student Contact Number
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="contactnumber" data-required="1"  class="form-control input-height" required> </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Student Email Id
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="email" data-required="1"  class="form-control input-height" required> </div>
                                            </div>

                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Password
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="password" data-required="1"  class="form-control input-height" required> </div>
                                            </div>
                                           
                                            
                                          
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Status
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="status" required>
                                                        <option value="">---Select---</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Deactive">Deactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                      
                                           
											
											<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                    <button type="button" class="btn btn-default">Cancel</button>
                                                </div>
                                            	</div>
                                       		 </div>
										</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->