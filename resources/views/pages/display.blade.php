@extends('app')
@section('content')
<h2>Users Information</h2>
    @foreach($users as $user)
        <article>
            {{--<h2><a href="/articles/{{$article->id}}">{{$article->title}}</a></h2>--}}
            {{--        <h2><a href="{{action('ArticlesController@show',[$article->id])}}">{{$article->title}}</a></h2>--}}
            {{--<h2><a href="{{url('/articles',$article->id)}}">{{$article->title}}</a></h2>--}}
            <h2>{{$user->emp_name}}</h2>
            <h4>{{$user->email}}</h4>
            <h4>{{$user->phone}}</h4>

        </article>
    @endforeach

@stop