<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <title> Print Search Alumnus Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="content">
    <div class="title m-b-md">
        <h1 style="text-align: center;">Print Search Alumni</h1>
    </div>
    <div>
        <table class="table table-bordered">
            <tr>
                <th>SFullname</th>
                <th>SUsername</th>
                <th>SEmail</th>
                <th>SDeparment</th>
            </tr>
            <?php $__currentLoopData = $dataA; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($stud->SFullname); ?> </td>
                    <td> <?php echo e($stud->SUsername); ?></td>
                    <td> <?php echo e($stud->SEmail); ?> </td>
                    <td> <?php echo e($stud->SDepartment); ?> </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
</body>
</html>
