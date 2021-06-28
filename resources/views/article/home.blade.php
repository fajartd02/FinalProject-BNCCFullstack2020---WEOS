@extends('layouts.app')

@section('content')
    <h1>Ini nyobain template</h1>
    <a href ="/home/create" class="btn btn-primary">Create New Forum</a>

    @foreach ($articles as $x)
    <div class="card mb-3">
        <div class = "card-body">
            <h1>{{$x['title']}}</h1>
            <p>ini isinya:  {{$x['subjects']}}</p>
            <a href="/home/{{$x->id}}/edit" class = "btn btn-primary">Edit</a>   
        </div>
    </div>
    @endforeach

    <div>
        {{ $articles->links() }}
    </div>
@endsection