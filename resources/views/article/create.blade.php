@extends('layouts.temp')

@section('title')
New Forum
@endsection

@section('contentTemp')

<nav> 
<a href="/post">Back</a>
</nav>
<h1>New Forum</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/post" method = "POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" name="title" id="title" class="form-control" value = "{{ old('title') }}">
    </div>

    <div class="form-group">
        <label for="subject">Subject</label>
        <textarea name="subject" id="subject" class="form-control" rows = "3">{{ old('subject') }}</textarea>
    </div>

    <div class="form-group">
        <label for="thumbnail">Upload Gambar</label> <br>
        <input type="file" class ="form-control-file" id="thumbnail" name="thumbnail">
    </div> <br>

    <button type = "submit" class = "btn btn-primary">Submit</button>


</form>
@endsection