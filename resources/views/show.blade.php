@extends('layouts.app')

@section('content')

<h1>{{$article->title}}</h1>
<p>{{$article->subjects}}</p>

<a href = "/home" class="btn btn-sm btn-info"><< </a>

@endsection