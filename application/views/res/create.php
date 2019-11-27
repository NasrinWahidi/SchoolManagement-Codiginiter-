<!DOCTYPE html>
<html>
<head>
  <title>teachers</title>
  <link rel="stylesheet" href="<?php echo base_url(),"asset/css/bootstrap.min.css"?>">
</head>
<body>

<div>
<h1> Create Teachers</h1>
<hr>
<form method="post" name="createuser" action="<?php echo base_url(),"index.php/Teacher/create"?>">
</div>
<div>
<label>First Name</label>
<input type="text" name="f_name" class="form-control" value="<?php echo set_value("f_name")?>">
<?php echo form_error("f_name")?>
</div>
    
<div>
<label>Last Name</label>
<input type="text" name="l_name" class="form-control" value="<?php echo set_value("l_name")?>">
<?php echo form_error("l_name")?>
</div>
    
<div>
<label>phone</label>
<input type="number" name="phonenum" class="form-control" value="<?php echo set_value("phonenum")?>">
<?php  echo form_error("phonenum")?>
</div>

<div>
<select name="shift">
<option value="1">Morning</option>
<option value="2" >Lunch</option>
<option value="3">afternood</option>
</select>
</div>
    

<a hreh ="<?php echo base_url(),'index.php/home/create';?>" ><button type="submit" value="add" >add</button>  </a>
<a href="<?php echo base_url(),'index.php/home/index';?>" class="btn btn-secondary">cancle</a>

 
</body>
</html>