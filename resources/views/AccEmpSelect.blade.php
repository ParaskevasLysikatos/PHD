<!DOCTYPE html>
<html>
<head>
    <title> Select an Academic Employee</title>

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
        <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="StudentSelect">Edit Students</a>
    </li>
      <li class="nav-item">
          <a class="nav-link" href="AccEmpSelect">Edit Academic</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="Assign">Assign</a>
      </li>

    <!-- Dropdown -->
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

<center><h1> Select an Academic Employee </h1></center>

<center><form method="post">
        @csrf
        <br>
        <label> Select Academic Employee</label>
        <select class="form-control" type="text" name="ACFullname" size="5" style="width: 400px; height:200px;  ">
            @foreach ($displayAcad as $acad)
                <option value="{{$acad->ACFullname}}" >{{$acad->ACFullname}}</option>
            @endforeach
        </select>
        <br><br>
        <button type="submit" class="btn btn-primary">Find Academic</button>
    </form></center>
<br><br>

</body>
</html>
