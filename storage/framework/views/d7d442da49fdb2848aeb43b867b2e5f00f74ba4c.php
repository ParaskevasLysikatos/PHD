<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <title> Director Page</title>
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
                <a class="nav-link" href="Director">Home</a>
            </li>
        </ul>
    </nav>
    <br>
    <div class="content">
        <div class="title m-b-md">
            <h1 style="text-align: center;">Director's Profile</h1>
        </div>
        <div>
            <table class="table table-bordered">
                <th>ACUsername</th>
                <th>ACPassword</th>
                <th>Role</th>
                <?php $__currentLoopData = $displayDir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td> <?php echo e($acad->ACFullname); ?> </td>
                        <td> <?php echo e($acad->ACUsername); ?></td>
                        <td> <?php echo e($acad->ACEmail); ?> </td>
                        <td> <?php echo e($acad->ACDepartment); ?> </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
                
            </div>
    </body>
</html>
