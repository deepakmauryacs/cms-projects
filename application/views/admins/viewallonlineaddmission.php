       <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">All Online Admission</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Admission</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">All Admission</li>
                            </ol>
                        </div>
                    </div>


             <?php if ($this->session->flashdata('update')): ?>
             <div class="alert text-white bg-success alert-dismissible" role="alert">
             <div class="iq-alert-text"><?php echo $this->session->flashdata('update'); ?></div>
             <button type="button" class="close" data-dismiss="alert">&times;</button>
             <i class="ri-close-line"></i>
             </button>
             </div>
             <?php endif; ?>

             <?php if ($this->session->flashdata('delete')): ?>
             <div class="alert text-white bg-danger alert-dismissible" role="alert">
             <div class="iq-alert-text"> <?php echo $this->session->flashdata('delete'); ?></div>
             <button type="button" class="close" data-dismiss="alert">&times;</button>
             <i class="ri-close-line"></i>
             </button>
             </div>


            <?php endif; ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>All Admission</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <table id="example1" class="display" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Student Image</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Status</th> 
                                                <th>Status Verification</th>
                                                <th>View All</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                               <?php  
                                                   $i=1;
                                                    foreach ($h as $row)  
                                                   {  
                                                 ?>
                                            <tr>
                                                  <td><?php echo $i++;?></td>
                                       <td> <img src="<?php echo base_url().'/uploads/onlineadmission/'.$row->image; ?>" style="width: 50px;height: 50px;" ></td>
                                       <td><?php echo $row->firstname ; ?></td>
                                       <td><?php echo $row->lastname ; ?></td>
                                       <td><?php echo $row->email ; ?></td>
                                       <td><?php echo $row->contactnumber ; ?></td>
                                       <td>Active</td>
                                       

                                        <td>  <a class="btn btn-tbl-edit btn-xs" data-toggle="modal" data-target="#largeModel<?php echo $row->id ; ?>">
                                                                <i class="fa fa-pencil"></i></a></td>

                                          <!-- Large Model -->
                    <div class="modal fade" id="largeModel<?php echo $row->id ; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">Verification</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                     <form action="<?php echo base_url('Adminusers/Indexstudent/update_student');?>" method="post" id="form_sample_1" class="form-horizontal"  enctype="multipart/form-data">
                                        <div class="form-body">
                                           
                                             
                                                
                                            
                                            
                                                <div class="form-group row">
                                                <label class="control-label col-md-3">Date
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="date" name="Verification_date"  
                                                        class="form-control input-height" />
                                                    <input type="hidden" name="id" value="<?=$row->id?>">
                                                 </div>
                                                </div>



                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Status
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="status">
                                                        <option value="">---Select---</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Deactive">Deactive</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>

                                  
                                         <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" class="btn btn-info">Update</button>
                                                </div>
                                                </div>
                                             </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                                          <td> <a class="btn btn-tbl-edit btn-xs" data-toggle="modal" data-target="#largeModelall<?php echo $row->id ; ?>">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a> </td> 
                                                <td>
                                                    

                                                     <a onclick="return confirm('Are you sure?')"  href="<?php echo base_url().'Adminusers/Indexstudent/delete_student/'.$row->id  ?>" class="btn btn-tbl-delete btn-xs">
                                                                <i class="fa fa-trash-o "></i>
                                                    </a>


                    <!-- Large Model -->
                    <div class="modal fade" id="largeModelall<?php echo $row->id ; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">Details</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                     <form action="<?php echo base_url('Adminusers/Indexstudent/update_student');?>" method="post" id="form_sample_1" class="form-horizontal"  enctype="multipart/form-data">
                                        <div class="form-body">
                                           
                         <div class="row">
                           
                        <div class="col-md-2" style="padding-right: 10px;">
                            <div class="form-group">
                                <p style="margin-top: 10px;"><b>Admission Date</b> </p>
                             </div>
                        </div>



                        <div class="col-md-4" style="padding-right: 10px;">
                            <div class="form-group">
                                <input class="form-control"  type="Date" value="<?php echo $row->admission_date; ?>" name="admission_date">
                            </div>
                        </div>
                           
                        
                         <div class="col-md-2" style="padding-right: 10px;">
                            <div class="form-group">
                                <p style="margin-top: 10px;"><b>Gender</b> </p>
                             </div>
                        </div>



                            <div class="col-md-4">
                                <div class="form-group">
                                <input class="form-control"  type="Date" value="<?php echo $row->gender; ?>" name="admission_date">

                            <!-- <select class="form-control" name="gender" style="height: 45PX;" required="" >
                                <option value="" >Please select your gender:</option>
                                <option value="Male" selected>Male</option>
                                <option value="Female">Female</option>
                            </select>
 -->


                                    </div>
                              
                            </div>

                        </div>
                        <div class="row">
                             <div class="col-md-2">
                                      <p style="margin-top: 10px;"><b>Date Of Birth</b> </p>
                            </div>

                            <div class="col-md-4">
                            
                                    <div class="form-group">
                                       
                                        <input class="form-control"  name="dob" value="<?php echo $row->dob; ?>"  placeholder="" type="Date">
                                    </div>
                              
                            </div>
                            

                         <div class="col-md-2" style="padding-right: 10px;">
                            <div class="form-group">
                                <p style="margin-top: 10px;"><b>Religion</b> </p>
                             </div>
                         </div>


                            <div class="col-md-4">
                            
                                    <div class="form-group">
                                        <input class="form-control" name="religion" value="<?php echo $row->religion; ?>" placeholder="Religion" type="text">
                                    </div>
                              
                            </div>
                        </div>
                           
                        <div class="row">    
                         <div class="col-md-2" style="padding-right: 10px;">
                            <div class="form-group">
                                <p style="margin-top: 10px;"><b>Cast</b> </p>
                             </div>
                         </div>


                            <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" name="cast" value="<?php echo $row->cast; ?>" placeholder="Cast" type="text">
                                    </div>
                            </div>

                        <div class="col-md-2" style="padding-right: 10px;">
                            <div class="form-group">
                                <p style="margin-top: 10px;"><b>Aadhar Number</b> </p>
                             </div>
                         </div>

                            <div class="col-md-4">
                            
                                    <div class="form-group">
                                        <input class="form-control" name="aadhar_number" value="<?php echo $row->aadhar_number; ?>" placeholder="Aadhar Number" type="text">
                                    </div>
                              
                            </div>
                         </div>

                    <div class="row">     
                        <div class="col-md-2" style="padding-right: 10px;">
                            <div class="form-group">
                                <p style="margin-top: 10px;"><b>Community</b></p>
                             </div>
                         </div>
                          

                            <div class="col-md-4">
                                    <div class="form-group">
                                         <input class="form-control" name="aadhar_number" value="<?php echo $row->aadhar_number; ?>" placeholder="Aadhar Number" type="text">
                                         <!-- 
                                           <select class="form-control" name="community" style="height: 45PX;" required="">
                                            <option value="">Please select your Community:</option>
                                            <option value="SC/ST" >SC/ST</option>
                                            <option value="OBC" selected>OBC</option>
                                            <option value="GEN">GEN</option>
                                            <option value="OTHERS">OTHERS</option>
                                           </select> -->
                                    </div>
                            </div>
                      </div>
                      
                      <div class="row">  
                        <div class="col-md-2" style="padding-right: 10px;">
                            <div class="form-group">
                                <p style="margin-top: 10px;"><b>Residential Address</b></p>
                             </div>
                         </div>
                            <div class="col-md-10">
                            
                                    <div class="form-group">
                                       <textarea class="form-control" name="res_address" placeholder="Residential Address" rows="3"><?php echo $row->res_address; ?></textarea>
                                    </div>
                            </div>
                       </div>
                        
                        <div class="row">  
                          <div class="col-md-2" style="padding-right: 10px;">
                            <div class="form-group">
                                <p style="margin-top: 10px;"><b>Correspondence Address</b></p>
                             </div>
                          </div>
                            <div class="col-md-10">
                            
                                    <div class="form-group">
                                         <textarea class="form-control" name="cor_address"  placeholder="Correspondence Address" rows="3"><?php echo $row->cor_address; ?></textarea>
                                    </div>
                              
                            </div>
                        </div>
                          
                          <div class="row">
                          <div class="col-md-2" style="padding-right: 10px;">
                            <div class="form-group">
                                <p style="margin-top: 10px;"><b>Mobile Number</b></p>
                             </div>
                          </div>

                            <div class="col-md-4">
                            
                                    <div class="form-group">
                                        <input class="form-control" name="contactnumber" value="<?php echo $row->contactnumber; ?>" placeholder="Mobile Number" type="text">
                                    </div>
                              
                            </div>

                          <div class="col-md-2" style="padding-right: 10px;">
                            <div class="form-group">
                                <p style="margin-top: 10px;"><b>Father Mobile Number</b></p>
                             </div>
                          </div>



                            <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" name="fathercontact" value="<?php echo $row->fathercontact; ?>" placeholder="Father Mobile Number" type="text">
                                    </div>
                            </div>
                        </div>

                         <div class="row">  
                          <div class="col-md-2" style="padding-right: 10px;">
                            <div class="form-group">
                                <p style="margin-top: 10px;"><b>E-mail ID</b></p>
                             </div>
                          </div>
                            
                              <div class="col-md-10">
                                    <div class="form-group">
                                        <input class="form-control" name="email" value="<?php echo $row->email; ?>" placeholder="E-mail ID" type="email">
                                    </div>
                             </div>
                         </div>

                            <h4 style="margin-left: 24px;"><b>FAMILY INFORMATION </b> </h4>
                         
                         <div class="row">
                        <div class="col-md-3" style="padding-right: 10px;">
                               
                                    <div class="form-group">
                                       <p style="margin-top: 10px;"><b>Father/Guardiam Image</b> </p>
                                    </div>
                               
                         </div>

                         <div class="col-md-9" style="padding-right: 10px;">
                                    <div class="form-group">
                                       <img src="<?php echo base_url().'/uploads/onlineadmission/'.$row->image1; ?>" style="width: 70px;height: 60px;" >
                                    </div>
                        </div>
                      </div>
                        <div class="row">
                          <div class="col-md-2" style="padding-right: 10px;">
                            <div class="form-group">
                                <p style="margin-top: 10px;"><b>Father/Guardiam Name</b></p>
                             </div>
                          </div>

                            <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" name="fathername" value="<?php echo $row->fathername; ?>" placeholder="Father/Guardiam Name" type="text">
                                    </div>
                            </div>
                            
                          <div class="col-md-2" style="padding-right: 10px;">
                            <div class="form-group">
                                <p style="margin-top: 10px;"><b>Age</b></p>
                             </div>
                          </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" name="age"  value="<?php echo $row->age; ?>" placeholder="Age" type="Number">
                                    </div>
                            </div>
                         </div>
                         
                        <div class="row">
                          <div class="col-md-2" style="padding-right: 10px;">
                            <div class="form-group">
                                <p style="margin-top: 10px;"><b>Eduction Qualifiction</b></p>
                             </div>
                          </div>
                              <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" name="edu"  value="<?php echo $row->edu; ?>" placeholder="Eduction Qualifiction" type="text">
                                    </div>
                               </div>
                              
                          <div class="col-md-2" style="padding-right: 10px;">
                            <div class="form-group">
                                <p style="margin-top: 10px;"><b>Occupation</b></p>
                             </div>
                          </div>
                              <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" name="occupation" value="<?php echo $row->occupation; ?>" placeholder="Occupation" type="text">
                                    </div>
                               </div>
                        </div>

                        <div class="row">
                          <div class="col-md-2" style="padding-right: 10px;">
                            <div class="form-group">
                                <p style="margin-top: 10px;"><b>Annual Income</b></p>
                             </div>
                          </div>
                              <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" name="annual_income" value="<?php echo $row->annual_income; ?>" placeholder="Annual Income" type="text">
                                    </div>
                              </div>
                               
                         <div class="col-md-2" style="padding-right: 10px;">
                            <div class="form-group">
                                <p style="margin-top: 10px;"><b>Contact Number</b></p>
                             </div>
                          </div>
                              <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" name="fathernumber" value="<?php echo $row->fathernumber; ?>" placeholder="Contact Number" type="text">
                                    </div>
                             </div>
                        </div>
                       
                        <div class="row">
                          <div class="col-md-2" style="padding-right: 10px;">
                            <div class="form-group">
                                <p style="margin-top: 10px;"><b>Aadhar Number</b></p>
                             </div>
                          </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="fatheraadharnumber"  value="<?php echo $row->fatheraadharnumber; ?>" placeholder="Aadhar Number" type="Number">
                                    </div>
                            </div>
                         </div>
                                             
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                                                </td>
                                            </tr>
                                          <?php
                                             } 
                                           ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            <!-- end page content -->

                                          

