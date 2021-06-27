@extends('layouts.app')

@section('content')
<h1>New Forum</h1>

<form action="/home" method = "POST">
    @csrf

    <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="subject">Subject</label>
        <textarea name="subject" id="subject" class="form-control" rows = "3"></textarea>
    </div>
    <button type = "submimt" class = "btn btn-primary">Submit</button>


</form>
@endsection