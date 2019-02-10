<!DOCTYPE html>
<html>
<head>
    <title> Student Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand" href="">SEERC</a>

        <!-- Links -->
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="Student">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="MyProfileStudent">Student's Profile</a>
            </li>
        </ul>
            <!-- Logout -->
        <ul class="nav navbar-nav navbar-right">
            <li >
                <a class="navbar-brand"  href="{{ url('/logout') }}">Logout</a>
          </li>
        </ul>
        </div>
    </nav>
    <br>
    <div class="content">
        <div class="title m-b-md">
            <h1 style="text-align: center;">Students Profile</h1>
        </div>
    <div>
        <table class="table table-bordered">
            <tr>
            <th>SFullname</th>
            <th>SUsername</th>
            <th>SEmail</th>
            <th>SDepartment</th>
            </tr>
            @foreach($displayStud as $stud)
                <tr>
                    <td> {{$stud->SFullname}} </td>
                    <td> {{$stud->SUsername}}</td>
                    <td> {{$stud->SEmail}} </td>
                    <td> {{$stud->SDepartment}} </td>
                </tr>
                @endforeach
        </table>
    </div>
    </div>
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
</body>
</html>
