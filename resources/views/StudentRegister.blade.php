<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>StudentRegister</title>

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
<h2> <center> Register a new Student </center></h2>

<a href="Admin"><button type="button" class="btn btn-success" style="width:90px; margin-left:100px;font-size:22px;">Back</button></a>

<div class="container">
    <br>
    <h2>Registration form</h2>
    <div class="row">
<div class="col">
    <form  method="POST">
        @csrf
        <div class="form-group">
            <label>Full Name:</label>
            <input type="text" class="form-control" id="SFullname" placeholder="Enter Full Name" name="SFullname">
        </div>

        <div class="form-group">
            <label>Registration Number:</label>
            <input type="text" class="form-control" id="RN" placeholder="Enter Registeration Number" name="RN">
        </div>
        <div class="form-group">
            <label>Username: </label>
            <input type="text" class="form-control" id="SUsername" placeholder="Enter Username" name="SUsername">
        </div>
        <div class="form-group">
            <label>Password: </label>
            <input type="password" class="form-control" id="SPassword" placeholder="Enter Password" name="SPassword">
        </div>

        <div class="form-group">
            <label>Email: </label>
            <input type="email" class="form-control" id="SEmail" placeholder="Enter Email" name="SEmail">
        </div>
        <div class="form-group">
            <label>Department: </label>
            <select class="form-control" id="SDepartment" name="SDepartment" required>
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
            <label>Phone: </label>
            <input type="text" class="form-control" id="SPhone" placeholder="Enter Phone" name="SPhone">
        </div>
        <div class="form-group">
            <label>PhD Topic: </label>
            <input type="text" class="form-control" id="STopic" placeholder="Enter Topic" name="STopic">
        </div>
        <div class="form-group">
            <label>Deparmental Secretary: </label>
            <input type="text" class="form-control" id="SDepartmentalSec" placeholder="Enter Departmental Secretary" name="SDepartmentalSec">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
            <label>Country: </label>
            <input type="text" class="form-control" id="SCountry" placeholder="Enter Country" name="SCountry">
        </div>
        <div class="form-group">
            <label>Gender: </label>
            <select class="form-control" id="SGender" name="SGender" >
                <option></option>
                <option>Male</option>
                <option>Female</option>
            </select>
        </div>
        <div class="form-group">
            <label>Date of Birth: </label>
            <input type="date" class="form-control" id="SDateOfBirth" placeholder="Enter Date of Birth" name="SDateOfBirth">
        </div>
        <div class="form-group">
            <label>Mode of Attend: </label>
            <select  class="form-control" id="SModeOfAttend" placeholder="Enter Mode of Attend, needed for automatic end of studies" name="SModeOfAttend">
                <option></option>
                <option>Full-time</option>
                <option>Part-time</option>
            </select>
        </div>
        <div class="form-group">
            <label>First Enrty: </label>
            <input type="date" class="form-control" id="SFirstEntry" placeholder="Enter First Entry, needde for automatic end of studies" name="SFirstEntry">
        </div>
        <div class="form-group">
            <label>Expected end date of studies: </label>
            <input type="date" class="form-control" id="SYearOfGraduation" placeholder="Enter Expected end date of studies, leave it null for automatic fill" name="SYearOfGraduation">
        </div>
        <div class="form-group">
            <label>Upgrade Status: </label>
            <input type="text" class="form-control" id="SUpgradeStatus" placeholder="Enter Expected Upgrade Status" name="SUpgradeStatus">
        </div>
        <div class="form-group">
            <label>Fee Waiver / Paying: </label>
            <input type="text" class="form-control" id="SPayment" placeholder="Payment" name="SPayment">
        </div>
        <div class="form-group">
            <label>Submission Date: </label>
            <input type="date" class="form-control" id="SubmissionDate" placeholder="Submission Date" name="SubmissionDate">
        </div>
        <div class="form-group">
            <label>Current Employment: </label>
            <input type="text" class="form-control" id="SCurrentEmployment" placeholder="Current Employment" name="SCurrentEmployment">
        </div>

        <center><button type="submit" class="btn btn-primary" style="font-size:22px;">Submit</button></center>
        <br><br>
    </form>
    </div>
    </div>
</div>
@include('errors')
</body>
</html>


