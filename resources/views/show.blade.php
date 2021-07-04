@extends('layouts.temp')

@section('title')
Forum
@endsection

@extends('layouts.app')

@section('content')
@endsection

@section('contentTemp')

<h4>Thread From : {{$article->user->name}}</h4>
<h1>{{$article->title}}</h1>
<div class="col card mb-3">
            @if($article->thumbnail)
                <img class ="card-img-top" src="/image/{{$article->thumbnail}}" >
            @endif
</div>
<p>{{$article->subjects}}</p>

@if (Auth::check())

    @if (Auth::user()->id == $article->user_id)
        <div class="row mb-1">
        <a href="/post/{{$article->id}}/edit" class = "col-1 btn btn-info btn-sm">Edit</a>
        <form action="/post/{{$article->id}}" method = "post" class = "col">
            @csrf
            @METHOD('DELETE')

            <button class="btn btn-sm btn-danger">Delete</button>
        </form>         
        <form action="/post/{{$article->id}}/thread" method = "post" class = "col-1 btn btn-info btn-sm">
            @csrf
            @METHOD('PUT')
            @if($article->validation == 0) 
                <button>Close Thread</button>
            @else 
                <button>Open Thread</button>
            @endif
            
        </form> 
        </div> 
    @endif
@endif

<!-- Komentar -->

<h3>Comments</h3>

@foreach ($article->comments as $comment )
    <div class="row">
        <div class="col card mb-3">
            <p>{{$comment->subject}}</p>
            <span>- {{$comment->user->name}} -</span>
        </div> <br>
        @if (Auth::check())
            @if (Auth::user()->id == $comment->user_id)
                <a href="/comments/{{$comment->id}}/edit" class = "col-1 btn btn-info btn-sm">Edit</a>
                <form action="/comments/{{$comment->id}}" method = "post" class = "col-1">
                    @csrf
                    @METHOD('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form> 
            @endif
        @endif

    </div>

@endforeach

<!-- Isi Comments -->
<hr>
@if (Auth::check())
    @if($article->validation == 0) 
        <form action="/post/{{$article->id}}/comments" method = "POST">
        @csrf      

        <div class="form-group">
            <label for="subject">Comments</label>
            <textarea name="subject" id="subject" class="form-control" rows = "3">{{ old('subject') }}</textarea>
        </div>

        <button type = "submit" class = "btn btn-primary">Submit</button>
        </form>

        <a href = "/post" class="btn btn-sm btn-info"><< </a>
    @else
        <h3>The Thread Has Been Closed By Host</h3>
    @endif
@endif

@endsection