<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>StudentEdit</title>

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
<h1> <center> Edit Student </center></h1>


    <a href="Admin"><button type="button" class="btn btn-success" style="width:90px; margin-left:100px;">Back</button></a>

<div class="container">
<br>
    <h2>Edit Form</h2>

    <form  method="POST"  action="{{route('EditStud')}}">
        @csrf
        @foreach ($displayStud as $s)
            <div class="form-group">
                <label>Username: </label>
                <input type="text" class="form-control" id="SUsername" placeholder="Enter Username" name="SUsername"  value="{{$s->SUsername}}"> <span style="color:Tomato;">not change this</span>
            </div>
        <div class="form-group">
            <label>Full Name:</label>
            <input type="text" class="form-control" id="SFullname" placeholder="Enter Full Name" name="SFullname" value="{{$s->SFullname}}">
        </div>

        <div class="form-group">
            <label>Registration Number:</label>
            <input type="text" class="form-control" id="SRnumber" placeholder="Enter Registeration Number" name="SRnumber" value="{{$s->RN}}">
        </div>

        <div class="form-group">
            <label>Password: </label>
            <input type="password" class="form-control" id="SPassword" placeholder="Attention! will override current password" name="SPassword" >
        </div>

        <div class="form-group">
            <label>Email: </label>
            <input type="email" class="form-control" id="SEmail" placeholder="Enter Email" name="SEmail" value="{{$s->SEmail}}">
        </div>
        <div class="form-group">
            <label>Department: </label>
            <select class="form-control" id="SDepartment" name="SDepartment" value="{{$s->SDepartment}}" required>
                <option></option>
                <option>Computer Science</option>
                <option>Psychology</option>
                <option>Business</option>
            </select>
        </div>
        <div class="form-group">
            <label>Phone: </label>
            <input type="text" class="form-control" id="SPhone" placeholder="Enter Phone" name="SPhone" value="{{$s->SPhone}}">
        </div>
        <div class="form-group">
            <label>PhD Topic: </label>
            <input type="text" class="form-control" id="STopic" placeholder="Enter Topic" name="STopic" value="{{$s->Topic}}">
        </div>
        <div class="form-group">
            <label>Deparmental Secretary: </label>
            <input type="text" class="form-control" id="SDeparmentalSec" placeholder="Enter Deparmental Secretary" name="SDepartmentalSec" value="{{$s->Departmental_Secretary}}">
        </div>
        <div class="form-group">
            <label>Country: </label>
            <input type="text" class="form-control" id="SCountry" placeholder="Enter Country" name="SCountry" value="{{$s->SCountry}}">
        </div>
        <div class="form-group">
            <label>Gender: </label>
            <select class="form-control" id="SGender" name="SGender"  value="{{$s->Gender}}">
                <option></option>
                <option>Male</option>
                <option>Female</option>
            </select>
        </div>
        <div class="form-group">
            <label>Date of Birth: </label>
            <input type="date" class="form-control" id="SDoB" placeholder="Enter Date of Birth" name="SDoB" value="{{$s->Date_Of_Birth}}">
        </div>
        <div class="form-group">
            <label>Mode of Attend: </label>
            <input type="text" class="form-control" id="SMoA" placeholder="Enter Mode of Attend" name="SMoA" value="{{$s->Mode_of_Attend}}">
        </div>
        <div class="form-group">
            <label>First Enrty: </label>
            <input type="date" class="form-control" id="SFirstEntry" placeholder="Enter First Entry" name="SFirstEntry" value="{{$s->FirstEntry}}">
        </div>
        <div class="form-group">
            <label>Expected end date of studies: </label>
            <input type="date" class="form-control" id="SYearofGraduation" placeholder="Enter Expected end date of studies" name="SYearofGraduation" value="{{$s->Year_of_Graduation}}">
        </div>
        <div class="form-group">
            <label>Undergraduate Status: </label>
            <input type="text" class="form-control" id="SUgraduateStatus" placeholder="Enter Expected Undergraduate Status" name="SUgraduateStatus" value="{{$s->Ugraduate_Status}}">
        </div>
        <div class="form-group">
            <label>Fee Waiver / Paying: </label>
            <input type="text" class="form-control" id="SFWP" placeholder="Payment" name="SFWP" value="{{$s->Payment}}">
        </div>
        @endforeach
        <center><button type="submit" style="width:90px;" class="btn btn-primary">Edit</button></center>
    </form>
    <form  method="Post"  action="{{route('DeleteStud')}}">
        @csrf
        @method('delete')
        <br>
        <center> <button type="submit" style="width:90px;" class="btn btn-danger">Delete</button></center>
    </form>
    <br>



</div>

</body>
</html>


