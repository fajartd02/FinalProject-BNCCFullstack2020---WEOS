@extends('layouts.temp')

@section('title')
Thread Forum
@endsection

@extends('layouts.app')

@section('content')
@endsection

@section('contentTemp')
    <nav> 
    <a href="/index">Home</a>
    </nav>
    <h1>Forum Discussion</h1>
    <a href ="/post/create" class="btn btn-primary">Create New Forum</a> <br><br>

    @foreach ($articles->chunk(3) as $xChunk)
    <div class="row">
        @foreach($xChunk as $x)
        <div class="col card mb-3">
            @if($x->thumbnail)
                <img class ="card-img-top" src="/image/{{$x->thumbnail}}" >
            @endif
            <!-- <img class ="card-img-top" src="/image/{{$x->thumbnail}}"> -->
            <div class = "card-body">
                <h1>{{ucfirst($x->title)}}</h1>
                <p>ini isinya:  {{$x['subjects']}}</p>
                <a href="/post/{{$x->slug}}" class = "btn btn-info btn-sm stretched-link">Read</a>   
            </div>
        </div>
        @endforeach
    </div>
    @endforeach

    <div>
        {{ $articles->links() }}
    </div>
@endsection