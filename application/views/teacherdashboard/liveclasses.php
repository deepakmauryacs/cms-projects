<!--start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Notebook</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Note</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Notebook</li>
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
                            
                                <div class="card-body" id="bar-parent">
                                        <center> <h2> Go To Live Classes </h2> </center>
                                            
                                       
                                   <center> <a href="http://hangouts.google.com/start" target="_blank"><button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-success" data-upgraded=",MaterialButton,MaterialRipple">Go Live</button> </a> </center>
                                           
											
										
										</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content