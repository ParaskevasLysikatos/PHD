<!DOCTYPE html>
<html>
<head>
    <title> Admin Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>


<!-- new nav starts here-->
@include('navbar');

        <h3 style="text-align: center">Welcome {{$displayFullname->ACFullname}}</h3>
        <br>
   <!--new table for the admin panel starts here -->
    <section id="tabs" class="project-tab" style="position: relative;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Academic Employee</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Students</a>
                                <a class="nav-item nav-link" id="nav-profile-tab2" data-toggle="tab" href="#nav-profile2" role="tab" aria-controls="nav-profile2" aria-selected="false">Alumni</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
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
                                    @foreach ($display as $accEmp)
                                      <tr>
                                          <td> {{$accEmp->ACUsername}} </td>
                                          <td> {{$accEmp->Title}} </td>
                                          <td> {{$accEmp->ACFullname}} </td>
                                        
                                          <td> {{$accEmp->Role}} </td>
                                          <td><a href="mailto:{{$accEmp->ACEmail}}"> {{$accEmp->ACEmail}}</a> </td>
            
                                          <td class="collapse" id="collapseContent" aria-expanded="true"> {{$accEmp->ACDepartment}} </td>
                                          <td class="collapse" id="collapseContent" aria-expanded="true"> {{$accEmp->ACCountry}} </td>
                                          <td class="collapse" id="collapseContent" aria-expanded="true"> {{$accEmp->ACPhone}} </td>
                                          
                                      </tr>
                                @endforeach
                                    </tbody>
                                </table>
                                <div data-target="#collapseContent" data-toggle="collapse" data-group-id="grandparent" data-role="expander"><div><button class="btn btn-success">Expand/Close</button></div></div> 
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" >
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>     
                                        <th>RegistrationNumber</th>
                                        <th>Username</th>
                                        <th>Fullname</th>           
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Gender</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Email</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Department</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Phone</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Country</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Payment</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Date of Birth</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">First Entry</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Year of graduation</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Mode of Attend</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Topic</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Upgrade Status</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Departmental Secretary</th>       
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        @foreach ($displayStud as $stud)
                <tr>
                
                    <td> {{$stud->RN}} </td>
                    <td> {{$stud->SUsername}} </td>
                    <td> {{$stud->SFullname}}</td>                 
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SGender}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SEmail}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SDepartment}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SPhone}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SCountry}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SPayment}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SDateOfBirth}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SFirstEntry}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SYearOfGraduation}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SModeOfAttend}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->STopic}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SUpgradeStatus}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SDepartmentalSec}} </td>
                </tr>
            @endforeach
                                    </tbody>
                                </table>
                                <div data-target="#collapseContent1" data-toggle="collapse" data-group-id="grandparent" data-role="expander"><div><button class="btn btn-success">Expand/Close</button></div></div> 
                              <br>
                            </div>
                            <!--  -->
                            <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab2" >
                                <table class="table" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>RegistrationNumber</th>
                                        <th>Username</th>
                                        <th>Gender</th>
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Department</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Phone</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Country</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    @foreach ($displayAlu as $a)
                                        <tr>

                                            <td> {{$a->RN}} </td>
                                            <td> {{$a->SUsername}} </td>
                                            <td> {{$a->SGender}} </td>
                                            <td> {{$a->SFullname}}</td>
                                            <td> {{$a->SEmail}}</td>
                                            <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$a->SDepartment}} </td>
                                            <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$a->SPhone}} </td>
                                            <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$a->SCountry}} </td>
                                        </tr>
                                    @endforeach
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
<!-- ends here the table-->
<br>
</body>
</html>
