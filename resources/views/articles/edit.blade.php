@extends('layout')


@section('content')
    <h1>Edit article</h1>
    <div>
        <form method="POST" action="/articles/{{$article->id}}">
            @csrf
            @method('PUT')
            <div>
                <label>Title</label>
                <input name="title" id="title" value="{{$article->title}}">
            </div>
            <div>
                <br>
                <label>Excerpt</label>
                <textarea name="excerpt" id="excerpt">{{$article->excerpt}}</textarea>
            </div>
            <br>
            <div>
                <label>Body</label>
                <textarea name="body" id="body">{{$article->excerpt}}</textarea>
            </div>
            <br>
            <div>
                <button class="button is-link" type="submit">Submit</button>
            </div>

        </form>
    </div>
@endsection
