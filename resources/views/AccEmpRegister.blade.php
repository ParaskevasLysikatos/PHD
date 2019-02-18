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
    <br>
    <h2><center> Register an new Academic Employee</center></h2>
    <a href="Admin"><button type="button" class="btn btn-success" style="width:90px; margin-left:100px; font-size:22px;">Back</button></a>


  
<div class="container">
<br>
  <h2>Registration form</h2>
  <form  method="POST">
  @csrf
    <div class="form-group">
      <label>Full Name:</label>
      <input type="text" class="form-control" id="ACFullname" placeholder="Enter Full Name" name="ACFullname">
    </div>
    <div class="form-group">
    <label>Username: </label>
      <input type="text" class="form-control" id="ACUsername" placeholder="Enter Username" name="ACUsername">
    </div>
    <div class="form-group">
    <label>Email: </label>
      <input type="email" class="form-control" id="ACEmail" placeholder="Enter Email" name="ACEmail">
    </div>
    <div class="form-group">
    <label>Password: </label>
      <input type="password" class="form-control" id="ACPassword" placeholder="Enter Password" name="ACPassword">
    </div>
    <div class="form-group">
    <label>Phone: </label>
      <input type="text" class="form-control" id="ACPhone" placeholder="Enter Phone" name="ACPhone">
    </div>
    <div class="form-group">
    <label>Department: </label>
    <select class="form-control" id="ACDepartment" name="ACDepartment" required>
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
@include('errors')
    </body>
</html>
