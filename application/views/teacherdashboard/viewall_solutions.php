       <!-- start page content -->
       <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">All Solutions</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Solutions</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">All Solutions</li>
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
                                    <header>All Solutions</header>
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
                                                <th>Pdf</th>
                                                <th>Download</th>
                                                <th>Class</th>
                                                <th>Board</th>
                                                <th>Subject Name</th>
                                                <th>Date</th>
                                                <th>Note</th>
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
                                  
                                      <td><a href="<?php echo base_url().'/uploads/course/'.$row->pdf; ?>" target="_blank"> <img src="<?php echo base_url(); ?>assetes/adminuser/assets/img/pdf.png" style="height: 30px;"  alt="User Image" /></a></td>
                                       
                                      <td><a href="<?php echo base_url().'/uploads/course/'.$row->pdf; ?>" download> <!-- <img src="<?php echo base_url(); ?>assetes/adminuser/assets/img/pdf.png" style="height: 30px;" alt="User Image" /> -->Download</a></td>
                                  
                                      
                                       <td><?php echo $row->class ; ?></td>
                                       <td><?php echo $row->board ; ?></td>
                                       <td><?php echo $row->subjectname ; ?></td>
                                       <td><?php echo $row->date ; ?></td>
                                       <td><?php echo $row->note ; ?></td>
                                      
                                                <td>
                                                    <a class="btn btn-tbl-edit btn-xs" data-toggle="modal" data-target="#largeModel<?=$row->id?>">
                                                                <i class="fa fa-pencil"></i>
                                                    </a>

                                                     <a onclick="return confirm('Are you sure?')"  href="<?php echo base_url().'Teacherdashboard/Addsolutions/delete_solutions/'.$row->id  ?>" class="btn btn-tbl-delete btn-xs">
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
                                     <form action="<?php echo base_url('Teacherdashboard/Addsolutions/update_solutions');?>" method="post" id="form_sample_1" class="form-horizontal"  enctype="multipart/form-data">
                                        <div class="form-body">
                                           
                                                <div class="form-group row">
                                                <label class="control-label col-md-3">Old Solutions PDF
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
                                                    <input type="disable" value="<?php echo $row->pdf; ?>" name="oldpdf" 
                                                        class="form-control input-height" >
                                                 </div>
                                                </div>
                                            

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Solutions PDF
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
                                                    <input type="file" name="pdf"  
                                                        class="form-control input-height">
                                                    <input type="hidden" name="id" value="<?=$row->id?>">
                                                </div>
                                            </div>



                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Class
                                                    <span class="required"> * </span>
                                                </label>
                                            <div class="col-md-8">
                                            <select class="form-control" name="class" style="height: 46PX;" required>  
                                            <option value="" selected=""> --- Class --- </option>
                                            <option value="1">Class 1</option>
                                            <option value="2">Class 2</option>
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
                                                <label class="control-label col-md-3">Board Type
                                                    <span class="required"> * </span>
                                                </label>
                                            <div class="col-md-8">
                                            <select class="form-control" name="board" style="height: 46PX;" required>  
                                            <option value="" selected=""> --- Board --- </option>
                                            <option value="CBSE" >CBSE</option>
                                            <option value="Stateboard" >State Board</option>
                                        
                                           </select>
                                           </div>
                                       </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Subject
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
                                                    <input type="text" name="subjectname" value="<?php echo $row->subjectname ; ?>" data-required="1"  class="form-control input-height"  required> </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Date
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
                                                    <input type="date" name="date" data-required="1" value="<?php echo $row->date ; ?>"  class="form-control input-height"  required> </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Note
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-8">
                                                <textarea name="note" class="ckeditor" rows="3" required>
                                                      <?php echo $row->note ; ?>
                                                </textarea>
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

                                          

