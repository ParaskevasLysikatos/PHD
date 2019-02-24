<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Manage Departments</title>

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
<h2><center> Manage Departments </center></h2>

<a href="Admin"><button type="button" class="btn btn-success" style="width:90px; margin-left:100px; font-size:22px;">Back</button></a>

<div class="container">
    <br>
    <h3>Add a department</h3>
    <div class="row">
        <div class="col">
            <form  method="POST" action="<?php echo e(route('AddDep')); ?>">
                <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Type a department:</label>
                        <input type="text" class="form-control" id="dep" placeholder="Type a department" name="dep">
                    </div>
            <div class="buttons">
                <center><button type="submit"  class="btn btn-primary" style="width:90px; font-size:20px;">Add</button></center>
            </div>
            </form>
            <br>
            <?php if(\Session::has('success')): ?>
                <div class="alert alert-success">
                    <ul>
                        <li><?php echo \Session::get('success'); ?></li>
                    </ul>
                </div>
            <?php endif; ?>
            <br>
<br>
            <center><h3> Delete a department </h3></center>

            <center><form  method="Post"  action="<?php echo e(route('DepDel')); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <label> Select one: </label>
                    <select class="form-control" type="text" name="deptodel" size="6" style="width: 400px; height:300px; font-size:18px;  ">
                        <?php $__currentLoopData = $displayDep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($d->depName); ?>" ><?php echo e($d->depName); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <br><br>
                    <button type="submit" class="btn btn-danger " style="font-size:18px;">Delete a department</button>
                </form></center>
        </div>
    </div>
</div>
<?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
</body>
</html>
