@extends('layouts.app')

@section('title')
Edited Forum
@endsection

@section('content')

<nav> 
<a href="/home">Back</a>
</nav>
<h1>Edit Forum</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/home/{{$article->id}}" method = "POST">
    @csrf
    @METHOD('PUT')

    <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" name="title" id="title" class="form-control" value = "{{ old('title') ? old('title') : $article->title }}">
    </div>

    <div class="form-group">
        <label for="subject">Subject</label>
        <textarea name="subject" id="subject" class="form-control" rows = "3">{{ old('subject') ? old('subject') : $article->subjects }}</textarea>
    </div>
    <button type = "submimt" class = "btn btn-primary">Submit</button>


</form>
@endsection