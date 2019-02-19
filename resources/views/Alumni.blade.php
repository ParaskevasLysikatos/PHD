<!doctype html>
<html lang="{{ app()->getLocale() }}">
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
@include('navbar')

<div class="content">
    <div class="title m-b-md">
        <h3 style="text-align: center;">Alumnus selected:  @foreach ($displayAlu as $a){{$a->SFullname}} @endforeach</h3>
    </div>
    <div>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>Fullname</th>
                <th>Username</th>
                <th>Email</th>
                <th>Deparment</th>
            </tr>
            @foreach ($displayAlu as $a)
                <tr>
                    <td> {{$a->SFullname}} </td>
                    <td> {{$a->SUsername}}</td>
                    <td> {{$a->SEmail}} </td>
                    <td> {{$a->SDepartment}} </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
<br>
<center><a href="AlumniSelect"><button type="button" class="btn btn-success" style="width:90px; margin-left:100px; font-size: 22px;">Back</button></a></center>
</body>
</html>
