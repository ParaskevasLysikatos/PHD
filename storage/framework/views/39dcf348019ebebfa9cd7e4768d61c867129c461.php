<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <title> Print Search Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php">SEERC</a>

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

</nav>
<br>
<div class="content">
    <div class="title m-b-md">
        <h1 style="text-align: center;">Print Search</h1>
    </div>
    <table class="table table-bordered">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td> <?php echo e($s->SFullname); ?> </td>
                <td> <?php echo e($s->SUsername); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

</div>
</body>
</html>
