<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">User Profile</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">UI Elements</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">User Profile</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->

                                                <?php  
                                                   $i=1;
                                               
                                                   foreach ($h as $key => $value)
                                                   {  
                                                 ?>


                <div class="rows">
                    <div class="card">
                        <div class="card-body no-padding height-9">
                            <div class="row">
                                <div class="profile-userpic">
                                    <img src="<?php echo base_url().'/uploads/student/'. $value['image']; ?>" style="height: 100px; width:100px; " class="img-responsive" alt=""> </div>
                            </div>
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name">
                                    <?php echo $value['studentname']; ?>
                                </div>
                            </div>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Roll Number</b>
                                    <a class="pull-right">
                                        <?php echo $value['rollno']; ?>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <b>Student Name</b>
                                    <a class="pull-right">
                                        <?php echo $value['studentname']; ?>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <b>Contact Number</b>
                                    <a class="pull-right">
                                        <?php echo $value['contactnumber']; ?>
                                    </a>
                                </li>
                            </ul>
                            <!-- END SIDEBAR USER TITLE -->

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-head ">
                            <header>Account Details</header>
                        </div>
                        <div class="card-body no-padding height-9">

                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Email </b>
                                    <div class="pull-right">
                                        <?php echo $value['email']; ?>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <b>Password </b>
                                    <div class="pull-right">
                                        <?php echo $value['password']; ?>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <?php
                    } 
                ?>
            </div>
            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN PROFILE CONTENT -->

        </div>
    </div>
</div>
<!-- end page content -->