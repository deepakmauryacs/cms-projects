       <!-- start page content -->
       <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">All Video lectures</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Video</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">All Video lectures</li>
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
                                    <header>Video lectures</header>
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
                                                <th>Class</th>
                                                <th>Board</th>
                                                <th>Subject</th>
                                                <th>Video</th>
                                                <th>Description</th>
                                                <th>Teacher</th>
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
                                       <td><img src="<?php echo base_url().'/uploads/course/'.$row->image; ?>" style="width: 50px;height: 50px;" ></td>
                                      
                                       <td><?php echo $row->examtype ; ?></td>
                                       <td><?php echo $row->examname ; ?></td>
                                       <td><?php echo $row->subject ; ?></td>
                                       <td><?php echo $row->videolink ; ?></td>
                                       <td><?php echo $row->description ; ?></td>
                                       <td><?php echo $row->teachername ; ?></td>
                                       <td><?php echo $row->status ; ?></td>
                                                <td>
                                                    <a class="btn btn-tbl-edit btn-xs" data-toggle="modal" data-target="#largeModel<?=$row->id?>">
                                                                <i class="fa fa-pencil"></i>
                                                    </a>

                                                     <a onclick="return confirm('Are you sure?')"  href="<?php echo base_url().'Teacherdashboard/Addexamvideo/delete_examvideo/'.$row->id  ?>" class="btn btn-tbl-delete btn-xs">
                                                                <i class="fa fa-trash-o "></i>
                                                    </a>


                    <!-- Large Model -->
                    <div class="modal fade" id="largeModel<?=$row->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">Update</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                     <form action="<?php echo base_url('Teacherdashboard/Addexamvideo/update_examvideo');?>" method="post" id="form_sample_1" class="form-horizontal"  enctype="multipart/form-data">
                                        <div class="form-body">
                                           
                                             
                                                <div class="form-group row">
                                                <label class="control-label col-md-3">Old image
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
                                                    <input type="disable" value="<?php echo $row->image; ?>" name="oldImage" 
                                                        class="form-control input-height" />
                                                    
                                                 </div>
                                                </div>
                                            
                                            
                                                <div class="form-group row">
                                                <label class="control-label col-md-3">image
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
                                                    <input type="file" name="image"  
                                                        class="form-control input-height" />
                                                    <input type="hidden" name="id" value="<?=$row->id?>">
                                                 </div>
                                                </div>



                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Exam Type
                                                    <span class="required"> * </span>
                                                </label>
                                              <div class="col-md-8">
                                              <select class="form-control" name="examtype" style="height: 46PX;" required>  
                                              <option value="" selected=""> --- Class --- </option>
                                              <option value="Competitive_Exams"> Competitive Exams </option>
                                              <option value="Entrance_Exams"> Entrance Exams </option>
                                              </select>
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Exam Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
                                                <input type="text" name="examname" data-required="1" value="<?php echo $row->examname ; ?>"  class="form-control input-height"  required> </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Subject Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
                                                    <input type="text" name="subject" value="<?php echo $row->subject; ?>" data-required="1"  class="form-control input-height" required> </div>
                                            </div>

                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Video Link
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
                                                    <input type="text" name="videolink" value="<?php echo $row->videolink; ?>" data-required="1"  class="form-control input-height" required> </div>
                                            </div>

                                          

                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Description
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
                                                    <textarea class="ckeditor" name="description"  rows="5" required><?php echo $row->description; ?></textarea>
                                                   
                                              </div>
                                           </div>
                                            

                                           <div class="form-group row">
                                                <label class="control-label col-md-3">Teacher Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
                                                    <input type="text" name="teachername" value="<?php echo $row->teachername; ?>" data-required="1"  class="form-control input-height" required> </div>
                                            </div>
                                            
                                          
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Status
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
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

                                          

