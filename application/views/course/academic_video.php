<style type="text/css">
	ul {
  list-style: none;
}
.noselect {
  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */
}
.tick:before {
  content: '✓';
  padding: 10px;
  color: red;
  font-weight: bold;
}
.cards{
	padding: 5px;
	cursor: default;
	box-shadow: 0px 0px 6px #888888;
}
.cards:hover{
	box-shadow: 0px 0px 12px #888888;
}
.notify-badge{
    position: absolute;
    right:15px;
    top:0px;
    background:#34bd2d;
    text-align: center;
    color:white;
    padding:0px 10px;
    font-size:14px;
}
.btnbg{
 background-color: #ffb606;
}  

.btnbg:hover{
 background-color: #ffb606;
} 

</style>
  <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?php echo base_url(); ?>assetes/assets/img/banner/12.jpg); padding-top: 40px;padding-bottom: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Academic Video Courses</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Video </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog left-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-9">
                        <!-- Single Item -->
                       <h3 class="text-center">Academic Courses</h3>
                       <div class="middle" style="margin-bottom: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="mid">
                        <center>
                        <a class="md-btn" href="<?php echo base_url(); ?>Course/Course/academicbook">E-Book</a>
                        <a class="md-btn" href="<?php echo base_url(); ?>Course/Course/academicnote">E-Note</a>
                        <a class="md-btn" href="<?php echo base_url(); ?>Course/Course/academicvideo">Video</a>
                        <a class="md-btn" href="<?php echo base_url(); ?>Course/Course/academicprevious_years_papers">Previous years papers</a>
                        <a class="md-btn" href="<?php echo base_url(); ?>Course/Course/academicprevious_sample_papers">Sample papers</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
                        <!-- Single Item -->
                        <div class="row">
                        	<form>
                        	<div class="col-md-4"><select class="form-control">
                        		<option>Choose class</option>
                        		<option value="6">6</option>
                        		<option value="7">7</option>
                        		<option value="8">8</option>
                        		<option value="9">9</option>
                        		<option value="10">10</option>
                        		<option value="11">11</option>
                        		<option value="12">12</option>
                        	</select></div>
                        	<div class="col-md-4"><input type="text" class="form-control" style="min-height: 30px;" placeholder="Subject"></div>
                        	<div class="col-md-4 text-center">
							 <input type="submit" class="btn btn-warning btn-xs" style="width: 70%; min-height: 37px; margin-top:-5px; background-color:#ffb606;" value="search"> 
						   
						</div>
                        	</form>
                        </div>
                        <div class="row" style="margin-top: 25px;">
                         <?php                            
                        foreach ($h as $row)  
                         {  
                        ?>
                        <div class="col-md-4">
                        	<div class="cards noselect"> 
                        		<span class="notify-badge">Free</span>
                        		<img src="<?php echo base_url(); ?>assetes/assets/img/maths.jpg" height="100%" width="100%">
                        		<h4 style="padding-top: 10px;"><?php echo $row->subject ; ?> Class <?php echo $row->class ; ?>th....</h4>
                        		<hr>
                                <?php echo $row->description ; ?>
								<hr>
								<p class="text-center" style="padding-top: 10px; color: #ccc;"><?php echo $row->subject ; ?></p>
								<a href="#"><button type="button" class="btn btn-info btn-block btnbg" style="border-radius: 5px">Course Details</button></a>
                        	</div>
                        </div>
                        <?php
                         }
                         ?>
                        <!-- <div class="col-md-4">
                        	<div class="cards noselect">
                        		<span class="notify-badge">Free</span>
                        		<img src="<?php echo base_url(); ?>assetes/assets/img/maths.jpg" height="100%" width="100%">
                        		<h4 style="padding-top: 10px;">Math Class 9th...</h4>
                        		<hr>
                        		<ul>
  									<li class="tick">this is my text</li>
									<li class="tick">this is my text</li>
									<li class="tick">this is my text</li>
								</ul>
								<hr>
								<p class="text-center" style="padding-top: 10px; color: #ccc;">Limited seats only</p>
								<a href="#"><button type="button" class="btn btn-info btn-block btnbg" style="border-radius: 5px">Course Details</button></a>
                        	</div>
                        </div>
                        <div class="col-md-4">
                        	<div class="cards noselect">
                        		<span class="notify-badge">Free</span>
                        		<img src="<?php echo base_url(); ?>assetes/assets/img/maths.jpg" height="100%" width="100%">
                        		<h4 style="padding-top: 10px;">Math Class 9th...</h4>
                        		<hr>
                        		<ul>
  									<li class="tick">this is my text</li>
									<li class="tick">this is my text</li>
									<li class="tick">this is my text</li>
								</ul>
								<hr>
								<p class="text-center" style="padding-top: 10px; color: #ccc;">Limited seats only</p>
								<a href="#" class="btnbg"><button type="button" class="btn btn-info btn-block btnbg" style="border-radius: 5px">Course Details</button></a>
                        	</div>
                        </div>	
                        </div>
						<div class="row" style="margin-top: 25px;">
                        <div class="col-md-4">
                        	<div class="cards noselect">
                        		<span class="notify-badge">Free</span>
                        		<img src="<?php echo base_url(); ?>assetes/assets/img/maths.jpg" height="100%" width="100%">
                        		<h4 style="padding-top: 10px;">Math Class 9th...</h4>
                        		<hr>
                        		<ul>
  									<li class="tick">this is my text</li>
									<li class="tick">this is my text</li>
									<li class="tick">this is my text</li>
								</ul>
								<hr>
								<p class="text-center" style="padding-top: 10px; color: #ccc;">Limited seats only</p>
								<a href="#"><button type="button" class="btn btn-info btn-block btnbg" style="border-radius: 5px">Course Details</button></a>
                        	</div>
                        </div>
                        <div class="col-md-4">
                        	<div class="cards noselect">
                        		<span class="notify-badge">Free</span>
                        		<img src="<?php echo base_url(); ?>assetes/assets/img/maths.jpg" height="100%" width="100%">
                        		<h4 style="padding-top: 10px;">Math Class 9th...</h4>
                        		<hr>
                        		<ul>
  									<li class="tick">this is my text</li>
									<li class="tick">this is my text</li>
									<li class="tick">this is my text</li>
								</ul>
								<hr>
								<p class="text-center" style="padding-top: 10px; color: #ccc;">Limited seats only</p>
								<a href="#"><button type="button" class="btn btn-info btn-block btnbg" style="border-radius: 5px">Course Details</button></a>
                        	</div>
                        </div>
                        <div class="col-md-4">
                        	<div class="cards noselect">
                        		<span class="notify-badge">Free</span>
                        		<img src="<?php echo base_url(); ?>assetes/assets/img/maths.jpg" height="100%" width="100%">
                        		<h4 style="padding-top: 10px;">Math Class 9th...</h4>
                        		<hr>
                        		<ul>
  									<li class="tick">this is my text</li>
									<li class="tick">this is my text</li>
									<li class="tick">this is my text</li>
								</ul>
								<hr>
								<p class="text-center" style="padding-top: 10px; color: #ccc;">Limited seats only</p>
								<a href="#"><button type="button" class="btn btn-info btn-block btnbg" style="border-radius: 5px">Course Details</button></a>
                        	</div>
                        </div>	 -->
                        </div>
                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li><a href="#">Previous</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-3">
                        <aside>

                            <!-- Start Sidebar Item -->
                          
                            <!-- End Sidebar Item -->

                            <!-- Start Sidebar Item -->
                            <div class="sidebar-item category">
                                <div class="title">
                                    <h4>Category</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="#">Math <span>23</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Physics <span>10</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Chemistry <span>12</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Bio <span>17</span></a>
                                        </li>
                                        <li>
                                            <a href="#">English <span>0</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Sidebar Item -->                          
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

