<!DOCTYPE html>
<html>
<head>
    <title> Select a Student</title>

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
<br>

<center><h1> Select a Student </h1></center>

<center><form method="post">
        @csrf
        <br>
        <label>Select one:</label>
        <select class="form-control" type="text" name="SFullname" size="6" style="width: 400px; height:300px;font-size:18px;">
            @foreach ($displayStudent as $Stud)
                <option value="{{$Stud->SFullname}}" >{{$Stud->SFullname}}</option>
            @endforeach
        </select>
        <br><br>
        <button type="submit" class="btn btn-primary" style="font-size:18px;">Find student</button>
    </form></center>
<br><br>

</body>
</html>
