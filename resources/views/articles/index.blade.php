@extends('layout')


@section('content')
    <h1>Blog posts</h1>
    <a href="/articles/create">Create a new blog post</a>

    @foreach($articles as $article)
        <h1><a href=articles/{{$article->id}}>Post {{$article->id}}:{{$article->title}}</a></h1>
        <p>{{$article->excerpt}}</p>
    @endforeach


@endsection
