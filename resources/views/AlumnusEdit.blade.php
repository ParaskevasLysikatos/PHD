<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AlumnusEdit</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
@include('navbar')
<br>
<h2> <center> Edit an Alumnus:@foreach ($displayEditAlu as $s) {{$s->SFullname}} @endforeach </center></h2>


<a href="AlumniSelect"><button type="button" class="btn btn-success" style="width:90px; margin-left:100px;font-size:22px;">Back</button></a>

<div class="container">
    <br>
    <h2>Edit Form</h2>
    <div class="row">
        <div class="col">
            <form  method="POST"  action="{{route('EditAlu')}}">
                @csrf
                @foreach ($displayEditAlu as $s)
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
                        <input type="text" class="form-control" id="RN" placeholder="Enter Registeration Number" name="RN" value="{{$s->RN}}">
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
                            @foreach($deps as $d)
                                <option value="{{$d->depName}}">{{$d->depName}}</option>@endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Phone: </label>
                        <input type="text" class="form-control" id="SPhone" placeholder="Enter Phone" name="SPhone" value="{{$s->SPhone}}">
                    </div>
                    <div class="form-group">
                        <label>PhD Topic: </label>
                        <input type="text" class="form-control" id="STopic" placeholder="Enter Topic" name="STopic" value="{{$s->STopic}}">
                    </div>
                    <div class="form-group">
                        <label>Deparmental Secretary: </label>
                        <input type="text" class="form-control" id="SDeparmentalSec" placeholder="Enter Deparmental Secretary" name="SDepartmentalSec" value="{{$s->SDepartmentalSec}}">
                    </div>

        </div>
        <div class="col">
            <div class="form-group">
                <label>Country: </label>
                <input type="text" class="form-control" id="SCountry" placeholder="Enter Country" name="SCountry" value="{{$s->SCountry}}">
            </div>
            <div class="form-group">
                <label>Gender: </label>
                <select class="form-control" id="SGender" name="SGender" >
                    <option>{{$s->SGender}}</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
            <div class="form-group">
                <label>Date of Birth: </label>
                <input type="date" class="form-control" id="SDateOfBirth" placeholder="Enter Date of Birth" name="SDateOfBirth" value="{{$s->SDateOfBirth}}">
            </div>
            <div class="form-group">
                <label>Mode of Attend: </label>
                <select  class="form-control" id="SModeOfAttend" placeholder="Enter Mode of Attend" name="SModeOfAttend">
                    <option> {{$s->SModeOfAttend}}</option>
                    <option>Full-time</option>
                    <option>Part-time</option>
                </select>
            </div>
            <div class="form-group">
                <label>First Enrty: </label>
                <input type="date" class="form-control" id="SFirstEntry" placeholder="Enter First Entry" name="SFirstEntry" value="{{$s->SFirstEntry}}">
            </div>
            <div class="form-group">
                <label>Expected end date of studies: </label>
                <input type="date" class="form-control" id="SYearOfGraduation" placeholder="Enter Expected end date of studies" name="SYearOfGraduation" value="{{$s->SYearOfGraduation}}">
            </div>
            <div class="form-group">
                <label>Upgrade Status: </label>
                <input type="text" class="form-control" id="SUpgradeStatus" placeholder="Enter Expected Upgrade Status" name="SUpgradeStatus" value="{{$s->SUpgradeStatus}}">
            </div>
            <div class="form-group">
                <label>Fee Waiver / Paying: </label>
                <input type="text" class="form-control" id="SPayment" placeholder="Payment" name="SPayment" value="{{$s->SPayment}}">
            </div>
            <div class="form-group">
                <label>Submission Date: </label>
                <input type="date" class="form-control" id="SubmissionDate" placeholder="Submission Date" name="SubmissionDate"  value="{{$s->SubmissionDate}}">
            </div>
            <div class="form-group">
                <label>Current Employment: </label>
                <input type="text" class="form-control" id="SCurrentEmployment" placeholder="Current Employment" name="SCurrentEmployment"  value="{{$s->SCurrentEmployment}}">
            </div>
            @endforeach
            <br>

            <center><button type="submit" style="width:90px; font-size:20px;" class="btn btn-primary">Edit</button></center>
            </form>
            <br>

            <form  method="Post"  action="{{route('DeleteAlu')}}">
                @csrf
                @method('delete')
                <br>
                <center> <button type="submit" style="width:100px; font-size:22px;" class="btn btn-danger">Delete</button></center>
            </form>
            <br>
            <br>
        </div>
    </div>
</div>

</body>
</html>


