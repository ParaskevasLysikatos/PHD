<!DOCTYPE html>
<html>
<head>
    <title> Assign</title>

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


<style>
    select {
        height: 25%;
        width: 25%;
    }
</style>

<center><h1> Assign Supervisor with a Student </h1></center>
<br>
<form method="post" action="{{route('CreateCon')}}">
    @csrf
    <center><h3 for="ACEmployee">Supervisor:</h3></center>
    <center> <label> Select one: </label></center>
        <center><select class="container" type="text" name="ACFullname" id="ACF" size="6" style="font-size:18px;width: 400px; height: 200px;">
            @foreach ($displayAcad as $Acad)
            <option value="{{$Acad->ACFullname}}" > {{$Acad->ACFullname}}</option>
            @endforeach
        </select></center>
<br>
<center><h3 for="ACEmployee">Student:</h3></center>
    <center> <label> Select one: </label></center>
<center> <select class="container" type="text" name="SFullname" id="SF" size="6" style="font-size:18px; width: 400px; height: 200px;">
        @foreach ($displayStudent as $Stud)
        <option value="{{$Stud->SFullname}} " > {{$Stud->SFullname}}</option>
        @endforeach
    </select></center>
<br>
<center><button type="submit" class="btn btn-primary" style="margin: 10px; font-size:18px;">Connect</button></center>
</form>

<form  id="formdelete" >
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <center><button type="submit" id="delete" style="margin:10px; font-size:20px;" class="btn btn-danger">Delete</button></center>
</form>
<script>
    jQuery(document).ready(function(){
        jQuery('#delete').click(function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{route('DeleteCon')}}",
                method: 'delete',
                dataType: 'text',
                data: {
                    ACF: jQuery('#ACF').val(),
                    SF: jQuery('#SF').val()
                },

                success: function(result){
                    console.log(result);
                },
                error: function(jqXHR) {
                    if (jqXHR.status == 500) {
                       alert('Server side error');
                    } else if (jqXHR.status == 404) {
                        alert('not found');
                    }
                }
            });
            window.location.reload();
        });
    });
</script>
<br>
<div class="container">
<center><h3> View the relations</h3></center>
<br><br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Supervisors Fullname</th>
            <th>is assigned</th>
            <th>Students Fullname</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($displayCon as $display1)
        <tr>
            <td>{{$display1->ACFullname}}</td>
            <td>--></td>
            <td>{{$display1->SFullname}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
<br>
@include('errors');
<br>
</body>
</html>
