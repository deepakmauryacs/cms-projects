       <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">

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
                                    <header>All E Note-Book</header>
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
                                                <th>Teacher Name</th>
                                                <th>Class</th>
                                                <th>Subject Name</th>
                                                <th>Date</th>
                                                <th>Note</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                               <?php  
                                                   $i=1;
                                               
                                                   foreach ($h as $key => $value)
                                                   {  
                                                 ?>
                                            <tr>
                                                  <td><?php echo $i++;?></td>
                                  
                                      <td><a href="<?php echo base_url().'/uploads/course/'.$value['pdf']; ?>" target="_blank"> <img src="<?php echo base_url(); ?>assetes/adminuser/assets/img/pdf.png" style="height: 30px;"  alt="User Image" /></a></td>
                                       
                                      <td><a href="<?php echo base_url().'/uploads/course/'.$value['pdf']; ?>" > <button type="button" class="btn btn-round btn-primary btn-sm m-b-10">Read</button></a></td>
                                  
                                       <td><?php echo $value['teachername']; ?></td>
                                       <td><?php echo $value['class']; ?></td>
                                       <td><?php echo $value['subjectname']; ?></td>
                                       <td><?php echo $value['date']; ?></td>
                                       <td><?php echo $value['note']; ?></td>
                                      
                                              <td>
                                                  <a href="<?php echo base_url().'/uploads/course/'.$value['pdf']; ?>" download> <button type="button" class="btn btn-success btn-sm m-b-10">Download</button></a>

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

                                          

