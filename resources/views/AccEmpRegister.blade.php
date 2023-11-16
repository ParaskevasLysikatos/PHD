<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AcademicEmployeeRegister</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <body>
    @include('navbar');
    <br>
    <h2><center> Register a new Academic Employee</center></h2>
    <a href="Admin"><button type="button" class="btn btn-success" style="width:90px; margin-left:100px; font-size:22px;">Back</button></a>


  
<div class="container">
<br>
  <h2>Registration form</h2>
  <div class="row">
<div class="col">
  <form  method="POST">
  @csrf
    <div class="form-group">
      <label>Full Name:</label>
      <input type="text" class="form-control" id="ACFullname" placeholder="Enter Full Name" name="ACFullname"><span style="color:Tomato;">Required</span>
    </div>
    <div class="form-group">
    <label>Username: </label>
      <input type="text" class="form-control" id="ACUsername" placeholder="Enter Username" name="ACUsername"><span style="color:Tomato;">Required</span>
    </div>
    <div class="form-group">
    <label>Email: </label>
      <input type="email" class="form-control" id="ACEmail" placeholder="Enter Email" name="ACEmail">
    </div>
    <div class="form-group">
    <label>Password: </label>
      <input type="password" class="form-control" id="ACPassword" placeholder="Enter Password" name="ACPassword">
    </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label>Phone: </label>
      <input type="text" class="form-control" id="ACPhone" placeholder="Enter Phone" name="ACPhone">
    </div>
    <div class="form-group">
    <label>Department: </label>
    <select class="form-control" id="ACDepartment" name="ACDepartment" >
            <option></option>
        @foreach($deps as $d)
            <option value="{{$d->depName}}">{{$d->depName}}</option>@endforeach
    </select>
    </div>
    <div class="form-group">
    <label>Country: </label>
      <input type="text" class="form-control" id="ACCountry" placeholder="Enter Country" name="ACCountry">
    </div>
    <div class="form-group">
    <label>Role: </label>
    <select class="form-control" name="Role">
        <option></option>
  <option value="Admin">Admin</option>
  <option value="Supervisor">Supervisor</option>
  </select>
</div>
<div class="form-group">
    <label>Title: </label>
      <input type="text" class="form-control" id="ACTitle" placeholder="Enter Country" name="ACTitle">
    </div>
    <center><button type="submit" class="btn btn-primary" style="font-size:20px;">Submit</button></center>
    <br><br>
</form>
</div>
</div>
</div>
@include('errors')
    </body>
</html>
