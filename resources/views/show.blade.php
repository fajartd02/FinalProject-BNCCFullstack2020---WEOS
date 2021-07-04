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

<div class="row mb-1">
    <a href="/post/{{$article->id}}/edit" class = "col-1 btn btn-info btn-sm">Edit</a>
    <form action="/post/{{$article->id}}" method = "post" class = "col">
        @csrf
        @METHOD('DELETE')

        <button class="btn btn-sm btn-danger">Delete</button>
    </form> 
</div>

<a href = "/post" class="btn btn-sm btn-info"><< </a>

@endsection