@extends('layouts.temp')

@section('title')
Edited Comment
@endsection

@section('contentTemp')

@extends('layouts.app')

@section('content')
@endsection

<h1>Edit Comment</h1>
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
<form action="/comments/{{$comment->id}}" method = "POST" enctype="multipart/form-data">
    @csrf
    @METHOD('PUT')

    <div class="form-group">
        <label for="subject">Subject</label>
        <textarea name="subject" id="subject" class="form-control" rows = "3">{{ old('subject') ? old('subject') : $comment->subject }}</textarea>
    </div>

    <button type = "submit" class = "btn btn-primary">Submit</button>
    <a href = "/post/{{$comment->article->slug}}" class="btn btn-sm btn-info"><< </a>
</form>
@endsection