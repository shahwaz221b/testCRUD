<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
    <div class="container">
<a href="a" class="navbar-brand">Test Application</a>
    </div>
</div>
<div class="container" style="padding-top: 10px;">
    <h3>Edit Course</h3>
    <br>
    <form method="post" name="createCourse" action="<?php echo base_url().'index.php/course/edit/'.$course['id'];?>">
   <div class="row">
       
        <div class="col-md-6">
             <div class="form-group">
                 <label>Course Name</label>
                 <input type="text" name="name" value="<?php echo set_value('name',$course['course_name'])?>" class="form-control">
                 <?php echo form_error('name'); ?>
             </div>
             <div class="form-group">
                 <label>Price</label>
                 <input type="text" name="price" value="<?php echo set_value('price',$course['price'])?>" class="form-control">
                 <?php echo form_error('price'); ?>
             </div>
             <div class="form-group">
                 <button class="btn btn-primary">Update</button>
                 <a href="<?php echo base_url().'index.php/course/index/';?>" class="btn-secondary btn">Cancel</a>
                 </div>
        </div>
        
  </div>
  </form>
</div>

</body>
</html>
