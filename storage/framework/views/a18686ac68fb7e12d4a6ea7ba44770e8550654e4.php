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
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="<?php echo e(url('/logout')); ?>">SEERC</a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="Admin">Admin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="StudentSelect">Edit Students</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="AccEmpSelect">Edit Academic</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Assign">Assign</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Register
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="AccEmpRegister">Register Accademic Employee</a>
                <a class="dropdown-item" href="StudentRegister">Register Student</a>
            </div>
        </li>
    </ul>
</nav>
<br>
<div class="content">
    <div class="title m-b-md">
        <h1 style="text-align: center;">Print Search Academic</h1>
    </div>
    <div>
        <table class="table table-bordered">
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
    <a href ="<?php echo e(url('download-pdfA')); ?>">Download pdf ACademic</a>
</div>
</body>
</html>
