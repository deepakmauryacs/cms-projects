<?php  
 foreach ($h as $row)  
{  
?>
<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Index About</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">About</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Index About</li>
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

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Index About</header>
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
                                    <form action="<?php echo base_url('Adminusers/Indexabout/update_indexabout');?>" method="post" id="form_sample_1" class="form-horizontal"  enctype="multipart/form-data">
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
                                                <label class="control-label col-md-3">Heading
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input type="text" name="heading" data-required="1" value="<?php echo $row->heading; ?>"  class="form-control input-height" />
                                                 </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Description
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-6">
                                                     <textarea name="description" class="ckeditor" rows="3">
                                                     <?php echo $row->description; ?>
                                                     </textarea>
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
<?php
}
?>