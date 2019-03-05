<style>
.navbar {
list-style-type: none;
  margin-top:0%;
  padding: 0;
  position: sticky;

  }
</style>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark"  style="position: fixed; top: 0;left:0;width: 100%;overflow: hidden;z-index: 1;">
    <!-- Brand -->
    <div class="container-fluid" style="background-color: #004d99">
        <div class="navbar-header" style="background-color: white;">
            <a class="navbar-brand" href="#">  </a>
            <img src="seerc.jpg" width="180">
        </div>
        <ul class="nav navbar-nav" style="">
            <li class="active"><a class="nav-link" href="Admin" style="font-size:18px;">Admin</a></li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li> <a class="nav-link" href="StudentSelect" style="color: white; font-size:18px;">Edit Students</a></li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><a class="nav-link" href="AccEmpSelect" style="color: white;font-size:18px;">Edit Academic</a></li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><a class="nav-link" href="Assign" style="color: white; font-size:18px;">Assign</a></li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><a class="nav-link" href="AlumniSelect" style="color: white; font-size:18px;">Alumni</a></li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color: white; font-size:18px;">
                    Register
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="AccEmpRegister">Add an Academic Employee</a>
                    <a class="dropdown-item" href="StudentRegister">Add a Student</a>
                    <a class="dropdown-item" href="ManageDep">Manage Departments</a>
                </div>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"  style="background-color: #ff8c00;font-size:18px;">
                Search
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li>    <a id="top" class="nav-link"  style="color: white; font-size: 18px;" href="">Scroll<img src="https://img.icons8.com/doodle/25/000000/up.png"> </a></li>
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
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
            Search Alumni
        </a>
    </center>
</div>

<br>
<div class="collapse" id="collapseExample2">

  
    <div class="card card-body">
    <div class="container">
    <div class="row">
    <div class="col">
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
            </div>
            <div class="col">
            <div class="form-group">
                <label for="filter">Department</label>
                <select class="form-control" name="ACDepartment">
                    <option></option>
                    @foreach($deps as $d)
                        <option value="{{$d->depName}}">{{$d->depName}}</option>@endforeach

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
            </div>
            </div>
            <div class="row">
            <div class="col">
            <center><button type="submit" class="btn btn-primary">Search Academic</button></center>
            </div>
            </div>
        </form>
    </div>
</div>
</div>
<div class="collapse" id="collapseExample3">
    <div class="card card-body">
    <div class="container">
    <div class="row">
    <div class="col">
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
            </div>
            <div class="col">
            <div class="form-group">
                <label for="contain">Email</label>
                <input class="form-control" name="SEmail" type="text" />
            </div>
            
            <div class="form-group">
                <label for="filter">Department</label>
                <select class="form-control" name="SDepartment">
                    <option></option>
                    @foreach($deps as $d)
                        <option value="{{$d->depName}}">{{$d->depName}}</option>@endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="contain">Country</label>
                <input class="form-control" name="SCountry" type="text" />
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col">
            <center><button type="submit" class="btn btn-primary">Search Student</button></center>
            </div>
            </div>
        </form>
        </div>
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
<!--Alumni-->
<div class="collapse" id="collapseExample5">
    <div class="card card-body">
    <div class="container">
    <div class="row">
    <div class="col">
        <form method="post" action="{{route('SearchAlu')}}" class="form-horizontal" role="form">
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
            </div>
            <div class="col">
            <div class="form-group">
                <label for="contain">Email</label>
                <input class="form-control" name="SEmail" type="text" />
            </div>
            <div class="form-group">
                <label for="filter">Department</label>
                <select class="form-control" name="SDepartment">
                    <option></option>
                    @foreach($deps as $d)
                        <option value="{{$d->depName}}">{{$d->depName}}</option>@endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="contain">Country</label>
                <input class="form-control" name="SCountry" type="text" />
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col">
            <center><button type="submit" class="btn btn-primary">Search Alumni</button></center>
            </div>
            </div>
        </form>
        </div>
    </div>
</div>
<br>
<script>
    //scroll to bottom
    $(document).ready(function() {

        $('body').dblclick(function(){
            $('html, body').animate({scrollTop:$(document).height()}, 'slow');
            return false;
        });

    });
</script>
<script>
    //scroll to top
    $(document).ready(function() {

        $('#top').click(function(){
            $("html,body").animate({scrollTop:0}, 'slow');
            return false;
        });

    });
</script>