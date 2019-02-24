<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <title> Print Search Academic Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<!-- new nav starts here-->
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
<br>
<div class="content">
    <div class="title m-b-md">
        <h2 style="text-align: center;">Print Search Academic</h2>
    </div>
    <br>
    <div>
        <table class="table table-bordered">
            <tr>
            <th>Fullname</th>
            <th>ACUsername</th>
            <th>Email</th>
            <th>Deparment</th>
            </tr>
            <?php $__currentLoopData = $dataAcad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($acad->ACFullname); ?> </td>
                    <td> <?php echo e($acad->ACUsername); ?></td>
                    <td> <?php echo e($acad->ACEmail); ?> </td>
                    <td> <?php echo e($acad->ACDepartment); ?> </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <br>
    <center><a href ="<?php echo e(url('download-PDF_Academic')); ?>" style="font-size: 26px;">Download pdf Academic</a></center>
</div>
</body>
</html>
