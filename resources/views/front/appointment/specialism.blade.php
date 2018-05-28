@extends('front.main')
@section('content')
<html>
<head>
    <title>specialism</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="{{asset('dist/css/appointment.css')}}" rel="stylesheet">
</head>

<body class="body">

<div class="content">

    <h1 style="text-align: center; color:blue"><i>اختر تخصص</i></h1>
    <br>


    @foreach($specialism->chunk(4) as $chunk)
        <div class="row" style="padding-left: 8em;  >
            @foreach($chunk as $item)

                    <h4>
                        <span style="padding-right: 3em ;padding-left: 3em;" >
                          <a style="color: blue; font-size:xx-large" href="{{url('table',['id'=>$item->id])}}">{{$item->name}}</a>
                        </span>


                    </h4>
            @endforeach
        </div>
    @endforeach
</div>
@endsection




</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>




