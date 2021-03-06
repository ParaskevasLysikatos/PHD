
<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <title> Supervisor Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <style> 
        .navbar {
            list-style-type: none;
            margin-top:0%;
            padding: 0;
        }
    </style>
    
    <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark topnav">
        <div class="container-fluid" style="background-color: #004d99">
        <!-- Brand -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#"></a>
                 <img src="seerc.jpg" width="180"style="vertical-align:middle;" > 
            </div>
        <!-- Links -->
        <ul class="nav navbar-nav">

            <li class="nav-item">
                <a class="nav-link"  style="font-size:22px; color: white;" href="MyProfileSupervisor">Supervisor's Profile</a>
            </li>
        </ul>
            <!-- Logout -->
        <ul class="nav navbar-nav navbar-right">
            <li >
                <a class="navbar-brand"  href="<?php echo e(url('/logout')); ?>">Logout</a>
          </li>
        </ul>
        </div>
    </nav>
    <br>
            <div class="content">
                <div class="title m-b-md">
                    <h2 style="text-align: center;">Supervisor's Profile of <?php $__currentLoopData = $displaySuperv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($acad->ACFullname); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></h2>
                </div>
                <br>


                <section id="tabs" class="project-tab" style="position: relative;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Academic Employee</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <center>
                                        <tr>
                                        <th>Username</th>
                                        <th>Title</th>
                                        <th>Fullname</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                       
                                          <th class="collapse" id="collapseContent" aria-expanded="true"> Department</th>
                                          <th class="collapse" id="collapseContent" aria-expanded="true"> Country </th>
                                          <th class="collapse" id="collapseContent" aria-expanded="true"> Phone </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $displaySuperv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accEmp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                          <td> <?php echo e($accEmp->ACUsername); ?> </td>
                                          <td> <?php echo e($accEmp->Title); ?> </td>
                                          <td> <?php echo e($accEmp->ACFullname); ?> </td>
                                        
                                          <td> <?php echo e($accEmp->Role); ?> </td>
                                          <td><a href="mailto:<?php echo e($accEmp->ACEmail); ?>"> <?php echo e($accEmp->ACEmail); ?></a> </td>
            
                                          <td class="collapse" id="collapseContent" aria-expanded="true"> <?php echo e($accEmp->ACDepartment); ?> </td>
                                          <td class="collapse" id="collapseContent" aria-expanded="true"> <?php echo e($accEmp->ACCountry); ?> </td>
                                          <td class="collapse" id="collapseContent" aria-expanded="true"> <?php echo e($accEmp->ACPhone); ?> </td>
                                          
                                      </tr>
                                      </center>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <div data-target="#collapseContent" data-toggle="collapse" data-group-id="grandparent" data-role="expander"><div><button class="btn btn-success">Expand/Close</button></div></div> 
                            </div>
                           
                    </div>
                </div>
            </div>
        </section>


              
                <div class="container">
                    <center><h2> View the relations</h2></center>
                    <br>
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
                </div>
            </div>

    </body>
</html>
