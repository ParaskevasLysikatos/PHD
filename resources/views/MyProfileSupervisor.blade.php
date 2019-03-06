<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profile Supervisor</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark topnav" style="position: fixed; top: 0;left:0;width: 100%;z-index: 1;">
    <div class="container-fluid" style="background-color: #004d99">
        <!-- Brand -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#"></a>
            <img src="seerc.jpg" width="180"style="vertical-align:middle;" >
        </div>
        <!-- Links -->
        <ul class="nav navbar-nav">

            <li class="nav-item">
                <a class="nav-link"  style="font-size:22px; color: white;" href="MyProfileSupervisor">Supervisor's Profile</a>
            </li>
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            <li>    <a id="top" class="nav-link"  style="color: white; font-size: 22px;" href="">Scroll<img src="https://img.icons8.com/doodle/25/000000/up.png"> </a></li>
        </ul>
        <!-- Logout -->
        <ul class="nav navbar-nav navbar-right">
            <li >
                <a class="navbar-brand"  href="{{ url('/logout') }}">Logout</a>
            </li>
        </ul>
    </div>
</nav>
<style>
    .navbar {
        list-style-type: none;
        margin-top:0%;
        padding: 0;
    }
</style>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h2><center> Edit My Profile Supervisor:@foreach ($displayProfSup as $psup) {{$psup->ACFullname}} @endforeach</center></h2>
<div class="btn">
    <a href="Supervisor"><button type="button" class="btn btn-success" style="width:90px; margin-left:100px; font-size:22px;">Back</button></a>
</div>

<div class="container">
    <h2>Edit form</h2>
    <form  method="POST" action="{{route('EditMyProfSuper')}}">
        @csrf
        @foreach ($displayProfSup as $psup)

            <div class="form-group">
                <label>Email: </label>
                <input type="email" class="form-control" id="ACEmail" placeholder="Enter Email" name="ACEmail" value="{{$psup->ACEmail}}">
            </div>
            <div class="form-group">
                <label>Password: </label>
                <input type="password" class="form-control" id="ACPassword"  placeholder="Attention! will override current password" name="ACPassword">
            </div>
            <div class="form-group">
                <label>Phone: </label>
                <input type="text" class="form-control" id="ACPhone" placeholder="Enter Phone" name="ACPhone" value="{{$psup->ACPhone}}">
            </div>

            <div class="form-group">
                <label>Country: </label>
                <input type="text" class="form-control" id="ACCountry" placeholder="Enter Country" name="ACCountry" value="{{$psup->ACCountry}}">
            </div>

            <div class="form-group">
                <label>Title: </label>
                <input type="text" class="form-control" id="ACTitle" placeholder="Enter Title" name="ACTitle" value="{{$psup->Title}}">
            </div>
            <center><button type="submit" style="width:80px;height:70px;margin-bottom: 100px;margin-top:15px; font-size:22px;" class="btn btn-primary">Edit</button></center>
        @endforeach
    </form>

</div>

</body>
</html>
