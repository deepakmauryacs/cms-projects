 <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/banner/12.jpg); padding-top: 40px;padding-bottom: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>STUDENT ADMISSION</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">STUDENT ADMISSION</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
   

    <!-- Start Login 
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form action="<?php echo base_url('Admins/Onlineadmission/addonlineadmission');?>" method="post" id="register-form" class="white-popup-block" enctype="multipart/form-data">
                        <div class="col-md-12 login-social">
                          <CENTER> <h4>ADMISSTION</h4> </CENTER>
                        </div>
                        <div class="col-md-12 login-custom">
                            

                            <h4>STUDENT INFORMATION </h4>

                             <?php echo validation_errors(); ?> 
                             
                    <div class="row">
                         
                        <div class="col-md-2" style="padding-right: 10px;">
                               
                                    <div class="form-group">
                                       <p style="margin-top: 10px;"><b>Student Image</b> </p>
                                    </div>
                               
                        </div>

                         <div class="col-md-4" style="padding-right: 10px;">
                               
                                    <div class="form-group">
                                        <input class="form-control"  name="image" type="file">
                                    </div>
                               
                        </div>

                        <div class="col-md-2" style="padding-right: 10px;">
                               
                                    <div class="form-group">
                                       <p style="margin-top: 10px;"><b>Admission Date</b> </p>
                                    </div>
                               
                        </div>



                        <div class="col-md-4" style="padding-right: 10px;">
                               
                                    <div class="form-group">
                                        <input class="form-control"  type="Date" name="admission_date">
                                    </div>
                               
                        </div>
                            <div class="col-md-6" style="padding-right: 10px;">
                               
                                    <div class="form-group">
                                        <input class="form-control" name="firstname" value="deepak"  placeholder="First Name"  type="text">
                                    </div>
                               
                            </div>

                            <div class="col-md-6">
                            
                                    <div class="form-group">
                                        <input class="form-control" name="lastname" value="maurya" placeholder="Last Name" type="text">
                                    </div>
                              
                            </div>


                            <div class="col-md-6">
                            
                                    <div class="form-group">



                            <select class="form-control" name="gender" style="height: 45PX;" required="" >
                                <option value="" >Please select your gender:</option>
                                <option value="Male" selected>Male</option>
                                <option value="Female">Female</option>
                               
                            </select>



                                    </div>
                              
                            </div>
                            
                             <div class="col-md-2">
                                      <p style="margin-top: 10px;"><b>Date Of Birth</b> </p>
                            </div>

                            <div class="col-md-4">
                            
                                    <div class="form-group">
                                       
                                        <input class="form-control"  name="dob"  placeholder="" type="Date">
                                    </div>
                              
                            </div>



                            <div class="col-md-6">
                            
                                    <div class="form-group">
                                        <input class="form-control" name="religion" value="hindu" placeholder="Religion" type="text">
                                    </div>
                              
                            </div>



                            <div class="col-md-6">
                            
                                    <div class="form-group">
                                        <input class="form-control" name="cast" value="koiri" placeholder="Cast" type="text">
                                    </div>
                              
                            </div>


                            <div class="col-md-6">
                            
                                    <div class="form-group">
                                        <input class="form-control" name="aadhar_number" value="987654321234" placeholder="Aadhar Number" type="text">
                                    </div>
                              
                            </div>

                            

                          

                            <div class="col-md-6">
                            
                                    <div class="form-group">
                                           <select class="form-control" name="community" style="height: 45PX;" required="">
                                            <option value="">Please select your Community:</option>
                                            <option value="SC/ST" >SC/ST</option>
                                            <option value="OBC" selected>OBC</option>
                                            <option value="GEN">GEN</option>
                                            <option value="OTHERS">OTHERS</option>
                                           </select>
                                    </div>
                              
                            </div>

                        

                            <div class="col-md-12">
                            
                                    <div class="form-group">
                                       <textarea class="form-control" name="res_address" placeholder="Residential Address" rows="3">lucknow</textarea>
                                    </div>
                              
                            </div>

                            <div class="col-md-12">
                            
                                    <div class="form-group">
                                         <textarea class="form-control" name="cor_address"  placeholder="Correspondence Address" rows="3">lucknow</textarea>
                                    </div>
                              
                            </div>

                            <div class="col-md-6">
                            
                                    <div class="form-group">
                                        <input class="form-control" name="contactnumber" value="8081008926" placeholder="Mobile Number" type="text">
                                    </div>
                              
                            </div>

                              <div class="col-md-6">
                            
                                    <div class="form-group">
                                        <input class="form-control" name="fathercontact" value="9651492242" placeholder="Father Mobile Number" type="text">
                                    </div>
                              
                            </div>
                            
                              <div class="col-md-12">
                            
                                    <div class="form-group">
                                        <input class="form-control" name="email" value="test@gmail.com" placeholder="E-mail ID" type="email">
                                    </div>
                              
                            </div>
                            <h4 style="margin-left: 24px;">FAMILY INFORMATION </h4>

                            <div class="col-md-3" style="padding-right: 10px;">
                               
                                    <div class="form-group">
                                       <p style="margin-top: 10px;"><b>Father/Guardiam Image</b> </p>
                                    </div>
                               
                        </div>

                         <div class="col-md-9" style="padding-right: 10px;">
                               
                                    <div class="form-group">
                                        <input class="form-control" name="image1"  type="file">
                                    </div>
                               
                        </div>

                            <div class="col-md-6">
                            
                                    <div class="form-group">
                                        <input class="form-control" name="fathername" value="raja babu " placeholder="Father/Guardiam Name" type="text">
                                    </div>
                              
                            </div>

                            <div class="col-md-6">
                            
                                    <div class="form-group">
                                        <input class="form-control" name="age"  value="41" placeholder="Age" type="Number">
                                    </div>
                              
                            </div>
      

                              <div class="col-md-6">
                            
                                    <div class="form-group">
                                        <input class="form-control" name="edu"  value="Inter" placeholder="Eduction Qualifiction" type="text">
                                    </div>
                              
                            </div>

                              <div class="col-md-6">
                            
                                    <div class="form-group">
                                        <input class="form-control" name="occupation" value="webdeloper" placeholder="Occupation" type="text">
                                    </div>
                              
                            </div>

                              <div class="col-md-6">
                            
                                    <div class="form-group">
                                        <input class="form-control" name="annual_income" value="1500000" placeholder="Annual Income" type="text">
                                    </div>
                              
                            </div>

                              <div class="col-md-6">
                            
                                    <div class="form-group">
                                        <input class="form-control" name="fathernumber" value="9651492242" placeholder="Contact Number" type="text">
                                    </div>
                              
                            </div>

                            <div class="col-md-6">
                            
                                    <div class="form-group">
                                        <input class="form-control" name="fatheraadharnumber"  value="9876543211234" placeholder="Aadhar Number" type="Number">
                                    </div>
                              
                            </div>

                          
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->