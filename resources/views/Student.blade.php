<!DOCTYPE html>
<html>
<head>
    <title> Student Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
    <style> 
        .navbar {
            list-style-type: none;
            margin-top:0%;
            padding: 0;
        }
    </style>
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
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="position: fixed; top: 0;left:0;width: 100%;z-index: 1;">
        <div class="container-fluid" style="background-color: #004d99">
        <!-- Brand -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#"> </a>
                <img src="seerc.jpg" width="180"style="vertical-align:middle;" >
            </div>

        <!-- Links -->
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" style="font-size:22px; color: white;" href="MyProfileStudent">Student's Profile</a>
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="content">
        <div class="title m-b-md">
            <h2 style="text-align: center;">Student's Profile of  @foreach ($displayStud as $stud){{$stud->SFullname}}@endforeach</h2>
        </div>
        <br>
    <div>


    <section id="tabs" class="project-tab" style="position: relative;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" >
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>     
                                        <th>RegistrationNumber</th>
                                        <th>Username</th>
                                        <th>Fullname</th>           
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Gender</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Email</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Department</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Phone</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Country</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Payment</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Date of Birth</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">First Entry</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Year of graduation</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Mode of Attend</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Topic</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Upgrade Status</th>
                                        <th class="collapse" id="collapseContent1" aria-expanded="true">Departmental Secretary</th>       
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        @foreach ($displayStud as $stud)
                <tr>
                
                    <td> {{$stud->RN}} </td>
                    <td> {{$stud->SUsername}} </td>
                    <td> {{$stud->SFullname}}</td>                 
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SGender}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SEmail}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SDepartment}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SPhone}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SCountry}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SPayment}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SDateOfBirth}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SFirstEntry}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SYearOfGraduation}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SModeOfAttend}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->STopic}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SUpgradeStatus}} </td>
                    <td class="collapse" id="collapseContent1" aria-expanded="true"> {{$stud->SDepartmentalSec}} </td>
                </tr>
            @endforeach
                                    </tbody>
                                </table>
                                <div data-target="#collapseContent1" data-toggle="collapse" data-group-id="grandparent" data-role="expander"><div><button class="btn btn-success">Expand/Close</button></div></div> 
                              <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    </div>
    <div class="container">
        <center><h2> View the relations</h2></center>
        <br>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Supervisors Fullname</th>
                <th>is assigned</th>
                <th>Students Fullname</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($displayCon as $display1)
                <tr>
                    <td>{{$display1->ACFullname}}</td>
                    <td>--></td>
                    <td>{{$display1->SFullname}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
