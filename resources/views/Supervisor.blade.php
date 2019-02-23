
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title> Supervisor Page</title>
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
    
    <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark topnav">
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
            <div class="content">
                <div class="title m-b-md">
                    <h2 style="text-align: center;">Supervisor's Profile of @foreach ($displaySuperv as $acad){{$acad->ACFullname}}@endforeach</h2>
                </div>
                <br>


                <section id="tabs" class="project-tab" style="position: relative;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Academic Employee</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <center>
                                        <tr>
                                        <th>Username</th>
                                        <th>Title</th>
                                        <th>Fullname</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                       
                                          <th class="collapse" id="collapseContent" aria-expanded="true"> Department</th>
                                          <th class="collapse" id="collapseContent" aria-expanded="true"> Country </th>
                                          <th class="collapse" id="collapseContent" aria-expanded="true"> Phone </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($displaySuperv as $accEmp)
                                      <tr>
                                          <td> {{$accEmp->ACUsername}} </td>
                                          <td> {{$accEmp->Title}} </td>
                                          <td> {{$accEmp->ACFullname}} </td>
                                        
                                          <td> {{$accEmp->Role}} </td>
                                          <td><a href="mailto:{{$accEmp->ACEmail}}"> {{$accEmp->ACEmail}}</a> </td>
            
                                          <td class="collapse" id="collapseContent" aria-expanded="true"> {{$accEmp->ACDepartment}} </td>
                                          <td class="collapse" id="collapseContent" aria-expanded="true"> {{$accEmp->ACCountry}} </td>
                                          <td class="collapse" id="collapseContent" aria-expanded="true"> {{$accEmp->ACPhone}} </td>
                                          
                                      </tr>
                                      </center>
                                @endforeach
                                    </tbody>
                                </table>
                                <div data-target="#collapseContent" data-toggle="collapse" data-group-id="grandparent" data-role="expander"><div><button class="btn btn-success">Expand/Close</button></div></div> 
                            </div>
                           
                    </div>
                </div>
            </div>
        </section>


              
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
            </div>

    </body>
</html>
