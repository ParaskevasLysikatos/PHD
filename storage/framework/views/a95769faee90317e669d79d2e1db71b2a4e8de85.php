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
<!-- new nav starts here-->
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="content">
    <div class="title m-b-md">
        <h3 style="text-align: center;">Alumnus selected:  <?php $__currentLoopData = $displayAlu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($a->SFullname); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></h3>
    </div>
    <div>
        <br>

        <section id="tabs" class="project-tab" style="position: relative;left: -7%;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-profile-tab2" data-toggle="tab" href="#nav-profile2" role="tab" aria-controls="nav-profile2" aria-selected="false">Alumni</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            
                            
                            <!--  -->
                            <div class="tab-pane fade show active" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab2" >
                                <table class="table" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>RegistrationNumber</th>
                                        <th>SUsername</th>
                                        <th>Gender</th>
                                        <th>SFullname</th>
                                        <th>SEmail</th>
                                        <th>Current Employment</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">SDepartment</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">SPhone</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">SCountry</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Topic</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">SFirstEntry</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">SYearOfGraduation</th>
                                        
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Payment</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Date of Birth</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Mode of Attend</th>   
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Upgrade Status</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Departmental Secretary</th>   
                                        


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <?php $__currentLoopData = $displayAlu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>

                                            <td> <?php echo e($a->RN); ?> </td>
                                            <td> <?php echo e($a->SUsername); ?> </td>
                                            <td> <?php echo e($a->SGender); ?> </td>
                                            <td> <?php echo e($a->SFullname); ?></td>
                                            <td> <?php echo e($a->SEmail); ?></td>
                                            <td> <?php echo e($a->SCurrentEmployment); ?> </td>
                                            <td class="collapse" id="collapseContent1" aria-expanded="true"> <?php echo e($a->SDepartment); ?> </td>
                                            <td class="collapse" id="collapseContent1" aria-expanded="true"> <?php echo e($a->SPhone); ?> </td>
                                            <td class="collapse" id="collapseContent1" aria-expanded="true"> <?php echo e($a->SCountry); ?> </td>
                                            <td class="collapse" id="collapseContent1" aria-expanded="true"> <?php echo e($a->STopic); ?> </td>
                                            <td class="collapse" id="collapseContent1" aria-expanded="true"> <?php echo e($a->SFirstEntry); ?> </td>
                                            <td class="collapse" id="collapseContent1" aria-expanded="true"> <?php echo e($a->SYearOfGraduation); ?> </td>
                                            <td class="collapse" id="collapseContent1" aria-expanded="true"> <?php echo e($a->SPayment); ?> </td>
                                            <td class="collapse" id="collapseContent1" aria-expanded="true"> <?php echo e($a->SDateOfBirth); ?> </td>
                                            <td class="collapse" id="collapseContent1" aria-expanded="true"> <?php echo e($a->SModeOfAttend); ?> </td>
                                            <td class="collapse" id="collapseContent1" aria-expanded="true"> <?php echo e($a->SUpgradeStatus); ?> </td>
                                            <td class="collapse" id="collapseContent1" aria-expanded="true"> <?php echo e($a->SDepartmentalSec); ?> </td>
           
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <div data-target="#collapseContent1" data-toggle="collapse" data-group-id="grandparent" data-role="expander"><div><button class="btn btn-success">Expand/Close</button></div></div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
    </div>
</div>
<br>
<div><center>
    <form method="post" action="<?php echo e(route('DisplayEditAlu')); ?>">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-primary" style="font-size:18px;">Edit Alumnus</button>
    </form></center>
</div>

</body>
</html>
