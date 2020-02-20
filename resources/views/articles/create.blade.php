@extends('layout')


@section('content')
    <h1>Create a new article</h1>
    <div>
        <form method="POST" action="/articles">
            @csrf
            <div>
                <label>Title</label>
                <input type="text" name="title" id="title" required />

                @error('title')
                <p>{{$errors->first('title')}}</p>
                @enderror
            </div>
            <div>
                <br>
                <label>Excerpt</label>
                <input type="text" name="excerpt" id="excerpt" required />


                @error('excerpt')
                <p>{{$errors->first('excerpt')}}</p>
                @enderror
            </div>
            <br>
            <div>
                <label>Body</label>
                <textarea name="body" id="body" required></textarea>

                @error('body')
                <p>{{$errors->first('body')}}</p>
                @enderror
            </div>
            <br>
            <div>
                <button class="button is-link" type="submit">Submit</button>
            </div>

        </form>
    </div>
@endsection
