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

<div class="content">
    <div class="title m-b-md">
        <h1 style="text-align: center;">Print Search Alumni</h1>
    </div>
    <div>
        <table class="table table-bordered">
            <tr>
                <th>Fullname</th>
                <th>Username</th>
                <th>Email</th>
                <th>Deparment</th>
            </tr>
            @foreach ($dataA as $stud)
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
</body>
</html>
