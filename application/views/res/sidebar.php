
<?php include_once('header.php');?>
</head>
<body>
<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="<?=base_url();?>templete/img/logo/mak.png" alt="" /></a>
                <strong><a href="index.html"><img src="<?=base_url();?>templete/img/logo/school.png" alt="" /></a></strong>

</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                
                        
                      
                          
                    <li>
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false" name="teacher"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non"><?php echo $this->lang->line('teacher');?></span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Professors" href="<?=base_url();?>index.php/home/index1" name="all teacher"><span class="mini-sub-pro"><?php echo $this->lang->line('all teacher');?></span></a></li>
                                <li><a title="Add Professor" href="<?=base_url();?>index.php/home/insert_teacher" name="add teacher"><span class="mini-sub-pro"><?php echo $this->lang->line('add teacher');?></span></a></li>
                                <li><a title="Login" href="<?=base_url();?>index.php/home/logout"><span class="mini-sub-pro" name="logout"><?php echo $this->lang->line('logout');?></span></a></li>
                          
                              
                               
                            </ul>
                 </li>
                 <li>
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false" name="subject"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non"><?php echo $this->lang->line('subject');?></span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Professors" href="<?=base_url();?>index.php/subject/index1" name="all subject"><span class="mini-sub-pro"><?php echo $this->lang->line('all subject');?></span></a></li>
                                <li><a title="Add Professor" href="<?=base_url();?>index.php/subject/add_subject" name="add subject"><span class="mini-sub-pro"><?php echo $this->lang->line('add subject');?></span></a></li>
                             
                          
                              
                               
                            </ul>
                 </li>
                      
                  
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="<?=base_url();?>templete/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link" name="home"><?php echo $this->lang->line('home');?></a>
                                              
                                                </li>
                                             
                                            
                                                <li class="nav-item"><a href="#" class="nav-link" name="about"><?php echo $this->lang->line('about');?></a>
                                                </li>
                                               
                                               
                                               
                                            </ul>
                                        </div>
                                    </div>
                                
                                    
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            
                                                <li><a title="Login" href="<?=base_url().'index.php/home/login'?>"><span class="mini-sub-pro" name="logout"><?php echo $this->lang->line('logout');?></span></a></li>
                                                <li> <?php $this->load->view('language')?></li>
                                              
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <a href="index.html"><img class="main-logo" src="<?=base_url();?>templete/img/cropper/images.jpg" alt="" style="text_align:center"  width=100%/></a>
            <?php include_once('end.php');?>