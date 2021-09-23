       <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">All Student</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">All Student</li>
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
                                    <header>All Student</header>
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
                                                <th>Image</th> 
                                                <th>Enrollment Number.</th>
                                                <th>Roll NO.</th>
                                                <th>Exam Id</th>
                                                <th>Student Name</th>
                                                <th>Class</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Status</th>
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
                                       <td><img src="<?php echo base_url().'/uploads/student/'.$row->image; ?>" style="width: 50px;height: 50px;" ></td>
                                       <td><?php echo $row->enumber ; ?></td>
                                       <td><?php echo $row->rollno ; ?></td>
                                       <td><?php echo $row->examid ; ?></td>
                                       <td><?php echo $row->studentname ; ?></td>
                                       <td><?php echo $row->class ; ?></td>
                                       <td><?php echo $row->contactnumber ; ?></td>
                                       <td><?php echo $row->email ; ?></td>
                                       <td><?php echo $row->password ; ?></td>
                                       <td><?php echo $row->status ; ?></td>

                                                <td>
                                                    <a class="btn btn-tbl-edit btn-xs" data-toggle="modal" data-target="#largeModel">
                                                                <i class="fa fa-pencil"></i>
                                                    </a>

                                                     <a onclick="return confirm('Are you sure?')"  href="<?php echo base_url().'Admins/Addstudent/delete_student/'.$row->id  ?>" class="btn btn-tbl-delete btn-xs">
                                                                <i class="fa fa-trash-o "></i>
                                                    </a>


                    <!-- Large Model -->
                    <div class="modal fade" id="largeModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">Update</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                     <form action="<?php echo base_url('Admins/Addstudent/update_student');?>" method="post" id="form_sample_1" class="form-horizontal"  enctype="multipart/form-data">
                                        <div class="form-body">
                                           
                                             
                                                <div class="form-group row">
                                                <label class="control-label col-md-3">Old image
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input type="disable" value="<?php echo $row->image; ?>" name="oldImage" 
                                                        class="form-control input-height" />
                                                    
                                                 </div>
                                                </div>
                                            
                                            
                                                <div class="form-group row">
                                                <label class="control-label col-md-3">image
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input type="file" name="image"  
                                                        class="form-control input-height" />
                                                    <input type="hidden" name="id" value="<?=$row->id?>">
                                                 </div>
                                                </div>



                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Student Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input type="text" name="studentname" data-required="1" value="<?php echo $row->studentname; ?>"  class="form-control input-height" /> </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Class
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input type="text" name="class" data-required="1" value="<?php echo $row->class; ?>" class="form-control input-height" /> </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Student Contact Number
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input type="text" name="contactnumber" value="<?php echo $row->contactnumber; ?>" data-required="1"  class="form-control input-height" /> </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Student Email Id
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input type="text" name="email" value="<?php echo $row->email; ?>" data-required="1"  class="form-control input-height" /> </div>
                                            </div>

                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Password
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input type="text" name="password" value="<?php echo $row->password; ?>" data-required="1"  class="form-control input-height" /> </div>
                                            </div>
                                           
                                            
                                          
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Status
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-6">
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

                                          

