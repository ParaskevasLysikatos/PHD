<!DOCTYPE html>
<html>
<head>
    <title> Assign</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<style>
    select {
        height: 25%;
        width: 25%;
    }
</style>

<center><h1> Assign Supervisor with a Student </h1></center>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm">
<form method="post" action="<?php echo e(route('CreateCon')); ?>">
    <?php echo csrf_field(); ?>
    <center><h3 for="ACEmployee">Supervisor:</h3></center>
    <center> <label> Select one: </label></center>
        <center><select class="container" type="text" name="ACFullname" id="ACF" size="6" style="font-size:18px;width: 400px; height: 200px;">
            <?php $__currentLoopData = $displayAcad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Acad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($Acad->ACFullname); ?>" > <?php echo e($Acad->ACFullname); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select></center>
<br>
</div>
<div class="col-sm">
<center><h3 for="ACEmployee">Student:</h3></center>
    <center> <label> Select one: </label></center>
<center> <select class="container" type="text" name="SFullname" id="SF" size="6" style="font-size:18px; width: 400px ;    height: 200px;">
        <?php $__currentLoopData = $displayStudent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Stud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($Stud->SFullname); ?> " > <?php echo e($Stud->SFullname); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select></center>
</div>
<div class="col-md">
<br><br><br>
<center><button type="submit" class="btn btn-primary" style="margin: 10px; font-size:18px;">Connect</button></center>
</form>

<form  id="formdelete" >
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <center><button type="submit" id="delete" style="margin:10px; font-size:20px;" class="btn btn-danger">Delete</button></center>
</form>
</div>
<script>
    jQuery(document).ready(function(){
        jQuery('#delete').click(function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "<?php echo e(route('DeleteCon')); ?>",
                method: 'delete',
                dataType: 'text',
                data: {
                    ACF: jQuery('#ACF').val(),
                    SF: jQuery('#SF').val()
                },

                success: function(result){
                    console.log(result);
                },
                error: function(jqXHR) {
                    if (jqXHR.status == 500) {
                       alert('Server side error');
                    } else if (jqXHR.status == 404) {
                        alert('not found');
                    }
                }
            });
            window.location.reload();
        });
    });
</script>
<br>
<div class="container">
<center><h3> View the relations</h3></center>
<br><br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Supervisors Fullname</th>
            <th>is assigned</th>
            <th>Students Fullname</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $displayCon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $display1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($display1->ACFullname); ?></td>
            <td>--></td>
            <td><?php echo e($display1->SFullname); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div></div></div>
<br>
<?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
<br>
</body>
</html>
