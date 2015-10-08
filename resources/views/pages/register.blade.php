@extends('app')
@section('content')

    {!! Form::open(['url' => 'display']) !!}
{{--    {!! Form::open(['action' => "PagesController{{$latitude->latitude}}" method="post"]) !!}--}}
    {{--<form action="{url('PagesController/latitude') }" method="get">--}}
    {{--    {!! Form::open(array('action' => array('PagesController@store',latitude))) !!}--}}
{{--    {!! Form::open() !!}--}}
    <h1>Register</h1>
    <hr>
    <div class="form-group">
        {!! Form::label('emp_name','Employee Name :') !!}
        {!! Form::text('emp_name',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email','Email ID :') !!}
        {!! Form::text('email',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('phone','Phone :') !!}
        {!! Form::text('phone',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('pass','Password :') !!}
        {!! Form::password('pass',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('conf_pass','Confirm Password :') !!}
        {!! Form::password('conf_pass',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Register',['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
        </ul>
    @endif

    <script>


        function getLocation() {

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert('Geolocation is not supported by this browser.');
            }
        }

        function showPosition(position) {
            var latitude = position.coords.latitude;
            var longitude =position.coords.longitude;
//            alert( "latitude is: "+latitude);
            var dataString = 'latitude'+latitude+'longitude'+longitude;


//            alert(dataString);
//            $.ajax({
//                type: "POST",
//                dataType: "json",
//                url: "PagesController.php",
//                data: {latitude: latitude},
////                data: {latitude: latitude, longitude: longitude},
////                data: latitude,
//
//            });

//            $.ajax({
//                type: "POST",
//                url: "PagesController.php",
//                data: {latitude: latitude, longitude: longitude},
//            });
//            $.ajax({
//                url: 'PagesController.php',
//                type: 'POST',
//                data: {latitude: latitude},
//                dataType: 'json',
//                success: function(info){
//                    console.log(info);
//                }
//
//            });
        }
        getLocation();
    </script>
@stop
