<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profile Supervisor</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<h2><center> Edit My Profile Supervisor:<?php $__currentLoopData = $displayProfSup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $psup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($psup->ACFullname); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></center></h2>
<div class="btn">
    <a href="Supervisor"><button type="button" class="btn btn-success" style="width:90px; margin-left:100px; font-size:22px;">Back</button></a>
</div>

<div class="container">
    <h2>Edit form</h2>
    <form  method="POST" action="<?php echo e(route('EditMyProfSuper')); ?>">
        <?php echo csrf_field(); ?>
        <?php $__currentLoopData = $displayProfSup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $psup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="form-group">
                <label>Email: </label>
                <input type="email" class="form-control" id="ACEmail" placeholder="Enter Email" name="ACEmail" value="<?php echo e($psup->ACEmail); ?>">
            </div>
            <div class="form-group">
                <label>Password: </label>
                <input type="password" class="form-control" id="ACPassword"  placeholder="Attention! will override current password" name="ACPassword">
            </div>
            <div class="form-group">
                <label>Phone: </label>
                <input type="text" class="form-control" id="ACPhone" placeholder="Enter Phone" name="ACPhone" value="<?php echo e($psup->ACPhone); ?>">
            </div>

            <div class="form-group">
                <label>Country: </label>
                <input type="text" class="form-control" id="ACCountry" placeholder="Enter Country" name="ACCountry" value="<?php echo e($psup->ACCountry); ?>">
            </div>

            <div class="form-group">
                <label>Title: </label>
                <input type="text" class="form-control" id="ACTitle" placeholder="Enter Title" name="ACTitle" value="<?php echo e($psup->Title); ?>">
            </div>
            <center><button type="submit" style="width:80px;height:70px;margin-bottom: 100px;margin-top:15px; font-size:22px;" class="btn btn-primary">Edit</button></center>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </form>

</div>

</body>
</html>
