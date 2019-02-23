<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
    </head>
    <body>
    <br><br>
    <center><h1 style="color: #004d99;"> Login Page</h1></center>
    <br>
                <center>      
        <form method="post">
                    @csrf
            <div class="form-group col-md-4">
                <label for="Username">Username</label>
                <input type="text" name="Username" class="form-control" aria-describedby="emailHelp" placeholder="Enter username">
            </div>
            <br>
            <div class="form-group col-md-4">
                <label for="Password">Password</label>
                <input  type="Password" name="Password" class="form-control"  placeholder="Enter Password">
            </div><br>
            
            <button type="submit" class="btn btn-primary" style=" background-color: #004d99;font-size:22px;">Submit</button>
            </form> 
            </center>
    @include('errors')
    </body>
</html>
