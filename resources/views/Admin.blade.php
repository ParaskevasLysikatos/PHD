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
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#"> <img src="seerc.jpg" width="180" height="50" style="vertical-align:middle;" > </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a class="nav-link" href="Admin" style="font-size:18px;">Admin</a></li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li> <a class="nav-link" href="StudentSelect" style="font-size:18px;">Edit Students</a></li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li><a class="nav-link" href="AccEmpSelect" style="font-size:18px;">Edit Academic</a></li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li><a class="nav-link" href="Assign" style="font-size:18px;">Assign</a></li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li><a class="nav-link" href="AlumniSelect" style="font-size:18px;">Alumnis</a></li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="font-size:18px;">
        Register
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="AccEmpRegister">Register Academic Employee</a>
         <a class="dropdown-item" href="StudentRegister">Register Student</a>
      </div>
    </li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="font-size:18px;">
    Search
  </a>
  </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a class="navbar-brand" href="{{ url('/logout') }}">Logout</a></li>
    </ul>
  </div>
</nav>
<!--end of nav and br point beloow-->


<br>
<div class="collapse" id="collapseExample">
<center><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
    Search Academic Employee
  </a>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
    Search Student
  </a>
  <!--search for relations-->
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
    Search Relations
  </a>
  </center>
</div>

<br>
<div class="collapse" id="collapseExample2">
  <div class="card card-body">
  <form method="post" action="{{route('SearchAcad')}}" class="form-horizontal" role="form">
      @csrf
                                <div class="form-group">
                                <label for="contain">Username</label>
                                    <input class="form-control" name="ACUsername" type="text" />
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Fullname</label>
                                    <input class="form-control" name="ACFullname" type="text" />
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Phone</label>
                                    <input class="form-control" name="ACPhone" type="text" />
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Email</label>
                                    <input class="form-control" name="ACEmail" type="text" />
                                  </div>
                                  <div class="form-group">
                                    <label for="filter">Department</label>
                                    <select class="form-control" name="ACDepartment">
                                        <option></option>
                                        <option value="Computer Science">Computer Science</option>
                                        <option value="Electronic and Electrical Engineering">Electronic and Electrical Engineering</option>
                                        <option value="Economics">Economics</option>
                                        <option value="English Language & Linguistics">English Language & Linguistics</option>
                                        <option value="Geography">Geography</option>
                                        <option value="Information School">Information School</option>
                                        <option value="Law">Law</option>
                                        <option value="Management School">Management School</option>
                                        <option value="Politics">Politics</option>
                                        <option value="Psychology">Psychology</option>
                                        <option value="Sociological Studies">Sociological Studies</option>
                                        <option value="School of Health and Related Research (ScHARR)">School of Health and Related Research (ScHARR)</option>
                                        
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="filter">Role</label>
                                    <select class="form-control" name="Role">
                                        <option></option>
                                        <option value="Admin">Admin</option>
                                        <option value="Supervisor">Supervisor</option>
                                    </select>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="contain">Country</label>
                                    <input class="form-control" name="ACCountry" type="text" />
                                  </div>
                                  <center><button type="submit" class="btn btn-primary">Search Academic</button></center>
                                </form>
  </div>
</div>
<div class="collapse" id="collapseExample3">
  <div class="card card-body">
  <form method="post" action="{{route('SearchStud')}}" class="form-horizontal" role="form">
      @csrf
                                <div class="form-group">
                                <label for="contain">Username</label>
                                    <input class="form-control" name="SUsername" type="text" />
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Fullname</label>
                                    <input class="form-control" name="SFullname" type="text" />
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Phone</label>
                                    <input class="form-control" name="SPhone" type="text" />
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Email</label>
                                    <input class="form-control" name="SEmail" type="text" />
                                  </div>
                                  <div class="form-group">
                                    <label for="filter">Department</label>
                                    <select class="form-control" name="SDepartment">
                                        <option></option>
                                        <option value="Computer Science">Computer Science</option>
                                        <option value="Electronic and Electrical Engineering">Electronic and Electrical Engineering</option>
                                        <option value="Economics">Economics</option>
                                        <option value="English Language & Linguistics">English Language & Linguistics</option>
                                        <option value="Geography">Geography</option>
                                        <option value="Information School">Information School</option>
                                        <option value="Law">Law</option>
                                        <option value="Management School">Management School</option>
                                        <option value="Politics">Politics</option>
                                        <option value="Psychology">Psychology</option>
                                        <option value="Sociological Studies">Sociological Studies</option>
                                        <option value="School of Health and Related Research (ScHARR)">School of Health and Related Research (ScHARR)</option>
                                        
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Country</label>
                                    <input class="form-control" name="SCountry" type="text" />
                                  </div>
                                  <center><button type="submit" class="btn btn-primary">Search Student</button></center>
                                </form>
  </div>
</div>
<!--search for the relation form. *don't forget to specify the action*-->
<div class="collapse" id="collapseExample4">
  <div class="card card-body">
  <form method="post" action="{{route('SearchRel')}}" class="form-horizontal" role="form">
      @csrf
                                <div class="form-group">
                                <label for="contain">Academic Employee's Fullname</label>
                                    <input class="form-control" name="ACFullname" type="text" />
                                  </div>
                                  <div class="form-group">
                                <label for="contain">Student's Fullname</label>
                                    <input class="form-control" name="SFullname" type="text" />
                                  </div>
                                  <center><button type="submit" class="btn btn-primary">Search Relation</button></center>
                                  </form>
                                  </div>
                                  </div>


        <h3 style="text-align: center">Welcome {{$displayFullname->ACFullname}}</h3>
        <br>
   <!--new table for the admin panel starts here -->
    <section id="tabs" class="project-tab" style="position: relative;left: -250px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Academic Employee</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Students</a>
                               
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>ACUsername</th>
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
                                        <th>SUsername</th>
                                        <th>SFullname</th>           
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Gender</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">SEmail</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">SDepartment</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">SPhone</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">SCountry</th>
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
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- ends here the table-->

</body>
</html>
