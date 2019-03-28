<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>StudentRecords</title>

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
<h2> <center> Record of Student: {{$SFname}} </center></h2>


<a href="StudentSelect"><button type="button" class="btn btn-success" style="width:90px; margin-left:100px; font-size: 22px;">Back</button></a>

<div class="container">
    <br>
    <h3>Upload Form</h3>
    <form method="post" action="{{url('/SaveStudRec')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="file" class="form-control-file" style="font-size: 22px;" name="recordStudfile"/>
        </div>
        <br>
        <button type="submit" class="btn btn-primary  " style="margin-left: 100px;font-size: 22px;">Submit</button>
    </form>
    <br>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    <br>
    <center><h3> Select a record of {{$SFname}}  </h3></center>

    <center><form method="post" action="{{url('/DownStudRec')}}">
            @csrf
            <label>Records:</label>
            <select id="rec" class="form-control" type="text" name="recordStudfileD" size="6" style="width: 600px; height:200px; font-size: 18px;">
                @foreach ($displayRec as $r)
                    <option value="{{$r->record_name}}" >{{$r->record_name}}</option>
                @endforeach
            </select>
            <br><br>
            <button type="submit" class="btn btn-primary " style="font-size: 20px;">Download</button>
        </form></center>
<br>
    <form  id="formdelete" >
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <center><button type="submit" id="delete" style="margin:12px; font-size: 24px; width: 120px;"  class="btn btn-danger ">Delete</button></center>
    </form>
    <script>
        jQuery(document).ready(function(){
            jQuery('#delete').click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                jQuery.ajax({
                    url: "{{route('DeleteRec')}}",
                    method: 'delete',
                    dataType: 'text',
                    data: {
                        Rec: jQuery('#rec').val()
                    },

                    success: function(result){
                        console.log(result);
                    },
                    error: function(jqXHR) {
                        if (jqXHR.status == 500) {
                            alert('Server side error');
                        } else if (jqXHR.status == 404) {
                            alert('not found');
                        }
                    }
                });
                window.location.reload();
            });
        });
    </script>
    <br>

</div>
@include('errors')
</body>
</html>


