@extends('master.template')

@section('title', 'Books')

@section('body')
    <h1 class='text-center p-5'>Browse Your Favorite Books!</h1>
    <form class="d-flex mx-3" action="/search" method="get">
        <input class="form-control me-2" type="search" placeholder="Search book name" aria-label="Search" name="q">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <div class='d-flex flex-row m-1 row row-cols-5 g-5 justify-content-center'>
        @foreach ($books as $book)
            <div class='card m-2 p-1 zoom-in' style="width: 12rem">
                <img src="{{url('storage\app\public\images\books\\'.$book->photoPath)}}" class="bookimage card-img-top" alt="{{$book->title}}">
            <div class="card-body">
                <h5 class="card-title">{{$book->title}}</h5>
                <span class='card-subtitle mb-2 text-muted'>{{$book->author->name}}</span>
            </div>
            <a href="/bookDetail/{{$book->id}}" class="booksbtn btn btn-outline-dark">Book Detail</a>
        </div>
        @endforeach
    </div>
    <div class="m-5 d-flex justify-content-center">
        {{$books->withQueryString()->links()}}
    </div>
@endsection
