@extends('layout')


@section('content')
    <h1>Blog posts</h1>

    @foreach($articles as $article)
        <h1><a href="#">{{$article->title }}</a></h1>
        <p>{{$article->excerpt}}</p>
    @endforeach


@endsection
