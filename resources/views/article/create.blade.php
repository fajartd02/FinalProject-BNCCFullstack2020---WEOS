@extends('layouts.app')

@section('content')
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
<form action="/home" method = "POST">
    @csrf

    <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" name="title" id="title" class="form-control" value = "{{ old('title') }}">
    </div>

    <div class="form-group">
        <label for="subject">Subject</label>
        <textarea name="subject" id="subject" class="form-control" rows = "3">{{ old('subject') }}</textarea>
    </div>
    <button type = "submimt" class = "btn btn-primary">Submit</button>


</form>
@endsection