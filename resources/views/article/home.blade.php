@extends('layouts.app')

@section('content')
    <nav> 
    <a href="/index">Home</a>
    </nav>
    <h1>Ini nyobain template</h1>
    <a href ="/home/create" class="btn btn-primary">Create New Forum</a> <br><br>

    @foreach ($articles as $x)
    <div class="card mb-3">
        <div class = "card-body">
            <h1>{{ucfirst($x->title)}}</h1>
            <p>ini isinya:  {{$x['subjects']}}</p>
            <a href="/home/{{$x->title}}" class = "btn btn-info btn-sm">Read</a> 
            <a href="/home/{{$x->id}}/edit" class = "btn btn-info btn-sm">Edit</a>

            <form action="/home/{{$x->id}}" method = "post">
                @csrf
                @METHOD('DELETE')

                <button class="btn btn-sm btn-danger">Delete</button>
            </form>   
        </div>
    </div>
    @endforeach

    <div>
        {{ $articles->links() }}
    </div>
@endsection