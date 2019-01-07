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
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="">SEERC</a>

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
    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Search
  </a>
  </ul>
  <!--logout button -->
  <div>
    <a class="navbar-brand" href="{{ url('/logout') }}">Logout</a>
  </div>
  
  
</nav>
<br>
<div class="collapse" id="collapseExample">
<center><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
    Search Academic Employee
  </a>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
    Search Student
  </a></center>
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
                                        <option value="Psychology">Psychology</option>
                                        <option value="Business">Business</option>
                                        
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="filter">Role</label>
                                    <select class="form-control" name="Role">
                                        <option></option>
                                        <option value="Admin">Admin</option>
                                        <option value="Supervisor">Supervisor</option>
                                        <option value="Director">Director</option>
                                        
                                    </select>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="contain">Country</label>
                                    <input class="form-control" name="ACCountry" type="text" />
                                  </div>
                                  <center><button type="submit" class="btn btn-primary">Search</button></center>
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
                                        <option value="Psychology">Psychology</option>
                                        <option value="Business">Business</option>
                                        
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Country</label>
                                    <input class="form-control" name="SCountry" type="text" />
                                  </div>
                                  <center><button type="submit" class="btn btn-primary">Search</button></center>
                                </form>
  </div>
</div>
            <br>


    <div>
        <h3 style="text-align: center">Welcome {{$displayFullname->ACFullname}}</h3>
        <h1> Academic Employees</h1>
        <table class="table table-bordered">
            <th>ACUsername</th>
            <th>Title</th>
            <th>Fullname</th>
            <th>ACPassword</th>
            <th>Role</th>
        <!---
            <th>Email</th>
            <th>Deparment</th>
            <th>Country</th>
            <th>Phone</th>
             -->
            @foreach ($display as $accEmp)
                <tr>
                    <td> {{$accEmp->ACUsername}} </td>
                    <td> {{$accEmp->Title}} </td>
                    <td> {{$accEmp->ACFullname}} </td>
                    <td> {{$accEmp->ACPassword}} </td>
                    <td> {{$accEmp->Role}} </td>
                <!---
                    <td> {{$accEmp->ACEmail}} </td>
                    <td> {{$accEmp->ACDepartment}} </td>
                    <td> {{$accEmp->ACCountry}} </td>
                    <td> {{$accEmp->ACPhone}} </td>
                     -->
                </tr>
           @endforeach

            </table>
    </div>
        <h1>Students</h1>
    <div>
        <table class="table table-bordered">
            <th>RegistrationNumber</th>
            <th>SFullname</th>
            <!---
            <th>SUsername</th>
            <th>SPassword</th>
            <th>Gender</th>
            <th>SEmail</th>
            <th>SDepartment</th>
            <th>SPhone</th>
            <th>SCountry</th>
            <th>Payment</th>
            <th>Date of Birth</th>
            <th>First Entry</th>
            <th>Year of graduation</th>
            <th>Mode of Attend</th>
            <th>Topic</th>
            <th>Undergraduate Status</th>
            <th>Departmental Secretary</th>
            -->
            
            @foreach ($displayStud as $stud)
                <tr>
                    <td> {{$stud->RN}} </td>
                    <td> {{$stud->SFullname}}</td> 
                    <!---
                    <td> <a href="StudentEdit">{{$stud->SUsername}}</a> </td>
                    <td> {{$stud->SPassword}} </td>
                    <td> {{$stud->Gender}} </td>
                    <td> {{$stud->SEmail}} </td>
                    <td> {{$stud->SDepartment}} </td>
                    <td> {{$stud->SPhone}} </td>
                    <td> {{$stud->SCountry}} </td>
                    <td> {{$stud->Payment}} </td>
                    <td> {{$stud->Date_Of_Birth}} </td>
                    <td> {{$stud->FirstEntry}} </td>
                    <td> {{$stud->Year_of_Graduation}} </td>
                    <td> {{$stud->Mode_of_Attend}} </td>
                    <td> {{$stud->Topic}} </td>
                    <td> {{$stud->Ugraduate_Status}} </td>
                    <td> {{$stud->Departmental_Secretary}} </td>
                     !-->
                </tr>

            @endforeach
        </table>

    </div>

</body>
</html>
