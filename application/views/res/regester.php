<?php include_once('header.php');?>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
	
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form method="post" action="<?php echo base_url();?>index.php/home/regestration" id="loginForm">
                       
                            <div class="form-group">
                                <label class="control-label" for="username">User Name</label>
                                <input type="text" placeholder="Enter Name" title="Please enter you username" required="" value="<?php echo set_value("username")?>" name="username" id="username" class="form-control">
                               <span  class="text-danger"> <?php echo form_error("username")?></span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="<?php echo set_value("password")?>" name="password" id="password" class="form-control">
                                <span class="text-danger"><?php echo form_error("password")?></span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="<?php echo set_value("email")?>" name="email" id="username" class="form-control">
                               <span  class="text-danger"> <?php echo form_error("email")?></span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Contact Number</label>
                                <input type="number" title="Please enter your password" placeholder="******" required="" value="<?php echo set_value("contact_number")?>" name="contact_number" id="password" class="form-control">
                               <span  class="text-danger"> <?php echo form_error("contact_number")?></span>
                            </div>
                            
                            <!-- <input type="submit" value="register"> -->
                            <input type="submit" value="save">
                           <!-- <a href="<?php //echo base_url().'index.php/home/login'?>" ><button class="btn btn-success btn-block loginbtn">Regester</button></a> -->
                         <!-- <?php //echo form_close();?> -->
                        </form>
                    </div>
                </div>
			</div>
		
		</div>   
    </div>
    