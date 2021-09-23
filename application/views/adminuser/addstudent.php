	<?php include('header.php'); ?>
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
                                <li><a class="parent-item" href="#">Doctors</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Student</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Add Student</header>
                                   
                                </div>
                                <div class="card-body" id="bar-parent">
                                    <form action="#" id="form_sample_1" class="form-horizontal">
                                        <div class="form-body">
                                        <div class="form-group row">
                                               
                                                <div class="col-md-6">
                                                    <input type="text" name="firstname" data-required="1" placeholder="First Name" class="form-control input-height" /> 
                                                </div>
                                        


                                                <div class="col-md-6">
                                                    <input type="text" name="firstname" data-required="1" placeholder="Last Name" class="form-control input-height" />
                                                 </div>

                                        </div>
                                       
                                       <div class="form-group row">

                                                  <div class="col-md-6">
                                                    <input type="date" name="firstname" data-required="1" placeholder="enter first name" class="form-control input-height" />
                                                  </div>
                                             

                                                 <div class="col-md-6">
                                                   <select class="form-control input-height" name="gender">
                                                        <option value="">Select Gender...</option>
                                                        <option value="Category 1">Male</option>
                                                        <option value="Category 2">Female</option>
                                                    </select>
                                                 </div>

                                       </div>
                                        
                                      <div class="form-group row">   

                                                 <div class="col-md-6">
                                                    <input type="text" name="email" data-required="1" placeholder="Email" class="form-control input-height" />
                                                 </div>
                                             

                                                <div class="col-md-6">
                                                    <input type="number" name="firstname" data-required="1" placeholder="Content Number" class="form-control input-height" />
                                                 </div>

                                     </div>
                                             
                                     <div class="form-group row"> 

                                                 <div class="col-md-6">
                                                    <input type="text" name="firstname" data-required="1" placeholder="password" class="form-control input-height" />
                                                 </div>
                                             
                                                  <div class="col-md-6">
                                                    <input type="text" name="firstname" data-required="1" placeholder="Confirm password" class="form-control input-height" />
                                                 </div>

                                     </div>

                                       <div class="form-group row">
                                               
                                                <div class="col-md-6">
                                                    <input type="file" name="firstname" data-required="1" placeholder="Confirm password" class="form-control input-height" />
                                                 </div>
                                            </div>


                                     <div class="form-group row"> 

                                                 <div class="col-md-12">
                                                   <textarea name="address" class="form-control" placeholder="Address" rows="3"></textarea>
                                                 </div>
                                             
                                                  
                                    </div>

                                    
                                                  
                                                 
                               
                                             
                                          <!--   <div class="form-group row">
                                                <label class="control-label col-md-3">Last Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="lastname" data-required="1" placeholder="enter last name" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Date Of Birth
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
		                                                <input class="form-control input-height" size="16" placeholder="date of Birth" type="text" value="">
		                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
	                                            	</div>
	                                            	<input type="hidden" id="dtp_input2" value="" />
	                                            </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Gender
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="gender">
                                                        <option value="">Select...</option>
                                                        <option value="Category 1">Male</option>
                                                        <option value="Category 2">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Designation
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="designation" data-required="1" placeholder="enter your designation" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Mobile No.
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input name="number" type="text" placeholder="mobile number" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Email
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                                <i class="fa fa-envelope"></i>
                                                            </span>
                                                        <input type="text" class="form-control input-height" name="email" placeholder="Email Address"> </div>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Address
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="address" placeholder="address" class="form-control-textarea" rows="5" ></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Profile Picture
                                                </label>
                                                <div class="compose-editor">
                                                  <input type="file" class="default" multiple>
                                              </div>
                                            </div> -->
											<!-- <div class="form-group row">
												<label class="control-label col-md-3">Education 
												</label>
												<div class="col-md-5">
													<textarea name="address" class="form-control-textarea" placeholder="Education" rows="5"></textarea>
												</div>
											</div> -->
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
            <?php include('footer.php'); ?>