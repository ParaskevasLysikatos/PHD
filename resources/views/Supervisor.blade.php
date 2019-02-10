<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title> Supervisor Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark topnav">
        <!-- Brand -->
        <a class="navbar-brand" href="">SEERC</a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="Supervisor">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="MyProfileSupervisor">Supervisor's Profile</a>
            </li>
            <!-- Logout -->
         <div class="topnav-right">
            <a class="navbar-brand" href="{{ url('/logout') }}">Logout</a>
        </div>
        </ul>
    </nav>
    <br>
            <div class="content">
                <div class="title m-b-md">
                    <h1 style="text-align: center;">Supervisor Profile</h1>
                </div>
                <table class="table table-bordered">
                    <tr>
                    <th>ACUsername</th>
                    <th>ACPassword</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Department</th>
                    </tr>
                    @foreach ($displaySuperv as $acad)
                        <tr>
                            <td> {{$acad->ACFullname}} </td>
                            <td> {{$acad->ACUsername}}</td>
                            <td> {{$acad->Role}}</td>
                            <td> {{$acad->ACEmail}} </td>
                            <td> {{$acad->ACDepartment}} </td>
                        </tr>
                    @endforeach
                </table>
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
            </div>
    </body>
</html>
