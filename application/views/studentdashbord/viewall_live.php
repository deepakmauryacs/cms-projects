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
                                    <header>Live Class</header>
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
                                                <th>Class</th>
                                                <th>Sudject</th>
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
                                  
                                  
                                    
                                  
                                      
                                       <td><?php echo $row->class ; ?></td>
                                       <td><?php echo $row->subject ; ?></td>
                                       
                                      
                                              <td>
                                                  <a href="<?php echo $row->link ; ?>" > <button type="button" class="btn btn-round btn-primary btn-sm m-b-10">Join</button></a>

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

                                          

