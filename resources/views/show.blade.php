@extends('layouts.app')

@section('title')
Forum
@endsection

@section('content')

<h1>{{$article->title}}</h1>
<p>{{$article->subjects}}</p>

<div class="row mb-1">
    <a href="/home/{{$article->id}}/edit" class = "col-1 btn btn-info btn-sm">Edit</a>
    <form action="/home/{{$article->id}}" method = "post" class = "col">
        @csrf
        @METHOD('DELETE')

        <button class="btn btn-sm btn-danger">Delete</button>
    </form> 
</div>

<a href = "/home" class="btn btn-sm btn-info"><< </a>

@endsection