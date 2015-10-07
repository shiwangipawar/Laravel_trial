@extends('app')
@section('content')
{{--    {!! Form::open(['url' => 'display']) !!}--}}
    {{--    {!! Form::open() !!}--}}
    {!! Form::open(array('action' => 'UserController@postLogin','method' => 'post')) !!}

    <h1>Login</h1>
    <hr>

    <div class="form-group">
        {!! Form::label('email','Email ID :') !!}
        {!! Form::text('email',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password','Password :') !!}
        {!! Form::password('password',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Login',['class' => 'btn btn-primary form-control']) !!}
    </div>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif


    {!! Form::close() !!}

@stop