<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AcademicEmployeeEdit</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<h2><center> Edit an Academic Employee:@foreach ($displayEditAc as $a) {{$a->ACFullname}} @endforeach </center></h2>

<a href="AccEmpSelect"><button type="button" class="btn btn-success" style="width:90px; margin-left:100px; font-size:22px;">Back</button></a>



<div class="container">
<br>
    <h2>Edit form</h2>
    <form  method="POST" action="{{route('EditAcad')}}">
        @csrf
        @foreach ($displayEditAc as $a)
        <div class="form-group">
            <label>Full Name:</label>
            <input type="text" class="form-control" id="ACFullname" placeholder="Enter Full Name" name="ACFullname" value="{{$a->ACFullname}}">
        </div>
            <div class="form-group">
                <label>Username: </label>
                <input type="text" class="form-control" id="ACUsername" placeholder="Enter Username" name="ACUsername" value="{{$a->ACUsername}}"> <span style="color:Tomato;">not change this</span>
            </div>
        <div class="form-group">
            <label>Email: </label>
            <input type="email" class="form-control" id="ACEmail" placeholder="Enter Email" name="ACEmail" value="{{$a->ACEmail}}">
        </div>
        <div class="form-group">
            <label>Password: </label>
            <input type="password" class="form-control" id="ACPassword" placeholder="Attention! will override current password" name="ACPassword" >
        </div>
        <div class="form-group">
            <label>Phone: </label>
            <input type="text" class="form-control" id="ACPhone" placeholder="Enter Phone" name="ACPhone" value="{{$a->ACPhone}}">
        </div>
        <div class="form-group">
            <label>Department: </label>
            <select class="form-control" id="ACDepartment" name="ACDepartment" value="{{$a->ACDepartment}}" required >
                <option></option>
                <option>Computer Science</option>
                <option>Psychology</option>
                <option>Business</option>
            </select>
        </div>
        <div class="form-group">
            <label>Country: </label>
            <input type="text" class="form-control" id="ACCountry" placeholder="Enter Country" name="ACCountry" value="{{$a->ACCountry}}">
        </div>
        <div class="form-group">
            <label>Role: </label>
            <select class="form-control" name="Role" value="{{$a->Role}}">
                <option></option>
                <option value="Admin">Admin</option>
                <option value="Director">Director</option>
                <option value="Supervisor">Supervisor</option>
            </select>
        </div>
        <div class="form-group">
            <label>Title: </label>
            <input type="text" class="form-control" id="ACTitle" placeholder="Enter Title" name="ACTitle" value="{{$a->Title}}">
        </div>

        <div class="buttons">
        <center><button type="submit"  class="btn btn-primary" style="width:90px; font-size:20px;">Edit</button></center>
            @endforeach
        </div>
    </form>
  
    <form  method="Post"  action="{{route('DeleteAcad')}}">
        @csrf
        @method('delete')
        <br>
        <center> <button type="submit" class="btn btn-danger" style="width:90px; font-size:22px;">Delete</button></center>
        <br>
    </form>
    </div>
</div>

</body>
</html>
