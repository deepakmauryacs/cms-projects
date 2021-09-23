       <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">All Home-Work</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Home-Work</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">All Home-Work</li>
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
                                    <header>All Home-Work</header>
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
                                                <th>Name</th>
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
                                                    foreach ($h as $row)  
                                                   {  
                                                 ?>
                                            <tr>
                                                  <td><?php echo $i++;?></td>
                                  
                                      <td><a href="<?php echo base_url().'/uploads/course/'.$row->pdf; ?>" target="_blank"> <img src="<?php echo base_url(); ?>assetes/adminuser/assets/img/pdf.png" style="height: 30px;"  alt="User Image" /></a></td>
                                       
                                      <td><a href="<?php echo base_url().'/uploads/course/'.$row->pdf; ?>" download> <!-- <img src="<?php echo base_url(); ?>assetes/adminuser/assets/img/pdf.png" style="height: 30px;" alt="User Image" /> -->Download</a></td>
                                  
                                       <td><?php echo $row->teachername ; ?></td>
                                       <td><?php echo $row->class ; ?></td>
                                       <td><?php echo $row->subjectname ; ?></td>
                                       <td><?php echo $row->date ; ?></td>
                                       <td><?php echo $row->note ; ?></td>
                                      
                                                <td>
                                                     <a onclick="return confirm('Are you sure?')"  href="#" class="btn btn-tbl-delete btn-xs">
                                                                <i class="fa fa-trash-o "></i>
                                                    </a>
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

                                          

