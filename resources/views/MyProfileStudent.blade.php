<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profile Student</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<h1> <center> Edit My Profile Student </center></h1>

<div class="btn">
    <a href="Student"><button type="button" class="btn" style="width:80px;height:70px;margin-bottom: 30px  ;margin-top:30px;margin-left:200px;">Back</button></a>
</div>
<div class="container">
    <h2>Edit Form</h2>

    <form  method="POST"  action="{{route('EditMyProfStud')}}">
        @csrf
        @foreach ($displayProfStud as $pStud)

        <div class="form-group">
            <label>Password: </label>
            <input type="password" class="form-control" id="SPassword"  placeholder="Attention! will override current password" name="SPassword">
        </div>

        <div class="form-group">
            <label>Email: </label>
            <input type="email" class="form-control" id="SEmail" placeholder="Enter Email" name="SEmail" value="{{$pStud->SEmail}}">
        </div>
        <div class="form-group">
            <label>Phone: </label>
            <input type="text" class="form-control" id="SPhone" placeholder="Enter Phone" name="SPhone" value="{{$pStud->SPhone}}">
        </div>
        <div class="form-group">
            <label>Deparmental Secretary: </label>
            <input type="text" class="form-control" id="SDeparmentalSec" placeholder="Enter Deparmental Secretary" name="SDepartmentalSec" value="{{$pStud->Departmental_Secretary}}">
        </div>
        <div class="form-group">
            <label>Country: </label>
            <input type="text" class="form-control" id="SCountry" placeholder="Enter Country" name="SCountry" value="{{$pStud->SCountry}}">
        </div>
        <div class="form-group">
            <label>Date of Birth: </label>
            <input type="date" class="form-control" id="SDoB" placeholder="Enter Date of Birth" name="SDoB" value="{{$pStud->Date_Of_Birth}}">
        </div>
        <div class="form-group">
            <label>Mode of Attend: </label>
            <input type="text" class="form-control" id="SMoA" placeholder="Enter Mode of Attend" name="SMoA" value="{{$pStud->Mode_of_Attend}}">
        </div>

        @endforeach
        <button type="submit" style="width:80px;height:70px;margin-bottom: 100px  ;margin-top:10px;margin-left:30px;" class="btn btn-primary">Edit</button>
    </form>



</div>

</body>
</html>


