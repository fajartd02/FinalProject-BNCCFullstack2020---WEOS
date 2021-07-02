@extends('layouts.app')

@section('title')
Thread Forum
@endsection


@section('content')
    <nav> 
    <a href="/index">Home</a>
    </nav>
    <h1>Ini nyobain template</h1>
    <a href ="/home/create" class="btn btn-primary">Create New Forum</a> <br><br>

    @foreach ($articles->chunk(3) as $xChunk)
    <div class="row">
        @foreach($xChunk as $x)
        <div class="col card mb-3">
            <div class = "card-body">
                <h1>{{ucfirst($x->title)}}</h1>
                <p>ini isinya:  {{$x['subjects']}}</p>
                <a href="/home/{{$x->slug}}" class = "btn btn-info btn-sm stretched-link">Read</a>   
            </div>
        </div>
        @endforeach
    </div>
    @endforeach

    <div>
        {{ $articles->links() }}
    </div>
@endsection