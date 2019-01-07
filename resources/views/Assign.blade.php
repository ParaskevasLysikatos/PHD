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
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Register
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="AccEmpRegister">Register Accademic Employee</a>
         <a class="dropdown-item" href="StudentRegister">Register Student</a>
      </div>
    </li>
        <!-- Logout -->
      <div>
        <a class="navbar-brand" href="{{ url('/logout') }}">Logout</a>
      </div>
    </ul>
</nav>
<br>
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
    <center><h2 for="ACEmployee">Supervisor:</h2></center>
        <center><select class="container" type="text" name="ACFullname" id="ACF" size="5">
        <option>Select Supervisor: </option>
            @foreach ($displayAcad as $Acad)
          
            <option value="{{$Acad->ACFullname}}" > {{$Acad->ACFullname}}</option>
            @endforeach
        </select></center>
<br>
<br>
<center><h2 for="ACEmployee">Student:</h2></center>
<center> <select class="container" type="text" name="SFullname" id="SF" size="5">
    <option>Select Student: </option>
        @foreach ($displayStudent as $Stud)
       
        <option value="{{$Stud->SFullname}} " > {{$Stud->SFullname}}</option>
        @endforeach
    </select></center>
<br>
<center><button type="submit" class="btn btn-primary">Connect</button></center>
</form>

<form  id="formdelete" >
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <center><button type="submit" id="delete" style="margin:10px;" class="btn btn-danger">Delete</button></center>
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
<br><br>

<div class="container">
<center><h2> View the relations</h2></center>
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
@include('errors');
</body>
</html>
