<!DOCTYPE html>
<html>
<head>
    <title>View Course</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    
</head>
<body>
<div class="navbar navbar-dark bg-dark">
    <div class="container">
<a href="a" class="navbar-brand">Test Application</a>
    </div>
</div>
<div class="container" style="padding-top: 10px;">
    <div class="row"> 
          <div class="col-md-12">
              <?php
              $success = $this->session->userdata('success');
              if($success!="")
              {
                ?>
                  <div class="alert alert-success"><?php echo $success?></div>
             <?php } ?>

             <?php
              $failure = $this->session->userdata('failure');
              if($failure!="")
              {
                ?>
                  <div class="alert alert-success"><?php echo $failure?></div>
             <?php } ?>
              
          </div>
    </div>
      <div class="row">  
          <div class="col-md-6"> <h3>View Course</h3></div>
              <div class="col-md-6">
                  <a href="<?php echo base_url().'index.php/course/create/';?>" class="btn btn-primary">Add Course</a>
               </div>          
            </div>
            <hr>
    <br>
    <div class="row">
          <div class="col-md-8">
               <table id="courseTable" class="table table-striped">
                   <thead>
                   <tr>
                       <th>ID</th>
                       <th>Course Name</th>
                       <th>Price</th>
                       <th width="60">Edit</th>
                       <th width="100">Delete</th>
                   </tr>
                   </thead> 
                   <tbody>
                   <?php if(!empty($courses)){ foreach($courses as $course){ ?>
                <tr>
                    <td><?php echo $course['id']?></td>
                    <td><?php echo $course['course_name']?></td>
                    <td><?php echo $course['price']?></td>
                    <td>
                        <a href="<?php echo base_url().'index.php/course/edit/'.$course['id']?>" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <a href="<?php echo base_url().'index.php/course/delete/'.$course['id']?>" class="btn btn-danger">Delete</a>
                    </td>
                
                </tr>
<?php } } else {?>
    
    <tr>
        <td col-span="5">Records not found</td>
    </tr>
    <?php } ?>
    </tbody>
               </table>
               
          </div>
    </div>
    
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
       // alert("Ok")
  $('#courseTable').DataTable();
} );
</script>
</body>
</html>

