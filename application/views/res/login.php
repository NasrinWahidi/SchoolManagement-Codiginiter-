<?php include_once('header.php');?>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
			
			</div>
			<div class="content-error">
				<div class="hpanel" >
                    <div class="panel-body" >
                        <form action="<?php echo base_url();?>index.php/home/login_validation" method="post" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
									
                            </div>
                            <input type="submit" value="Log in">
                      
                         
                        </form>
                     <?php echo anchor('home/loder' , 'Regester')?>
                    </div>
                </div>
			</div>
			
		</div>   
    </div>
    <?php include_once('end.php');?>