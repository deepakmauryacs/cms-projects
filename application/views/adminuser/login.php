<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
     <title>Skyevo - Education </title>
     <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<!-- <link rel="stylesheet" href="../assets/plugins/iconic/css/material-design-iconic-font.min.css"> -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assetes/adminuser/cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
	<link href="<?php echo base_url(); ?>assetes/adminuser/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assetes/adminuser/assets/css/pages/extra_pages.css">
	<!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon"> 
</head>
<body>
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="<?php echo base_url('Login/login');?>" method="post" id="form_sample_1" class="form-horizontal"  enctype="multipart/form-data">
					<span class="login100-form-logo">
						
						<img alt="" src="<?php echo base_url(); ?>assetes/adminuser/assets/img/logos.png" style="height: 60px;width: 60px;" >
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="email" placeholder="Email" required>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" required>
					</div>


					<!-- <div class="contact100-form-checkbox">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> -->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
    <!-- start js include path -->
     <script src="<?php echo base_url(); ?>assetes/adminuser/assets/plugins/jquery/jquery.min.js" ></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url(); ?>assetes/adminuser/assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="<?php echo base_url(); ?>assetes/adminuser/assets/js/pages/extra_pages/extra_pages.js"></script>
    <!-- end js include path -->
</body>
</html>