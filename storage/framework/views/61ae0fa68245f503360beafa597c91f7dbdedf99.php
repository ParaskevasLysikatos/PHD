<!DOCTYPE html>
<html>
<head>
    <title> Select an Alumnus</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<br>

<center><h1> Select an Alumnus </h1></center>

<center><form method="post" action="<?php echo e(route('DisplayAlu')); ?>">
        <?php echo csrf_field(); ?>
        <br>
        <label>Select one:</label>
        <select class="form-control" id="SF" type="text" name="SFullname" size="6" style="width: 400px; height:300px;font-size:18px;">
            <?php $__currentLoopData = $displayAlu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($a->SFullname); ?>" ><?php echo e($a->SFullname); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <br><br>
        <button type="submit" class="btn btn-primary" style="font-size:18px;">Profile Alumnus</button>
    </form></center>
<br><br>


</body>
</html>
