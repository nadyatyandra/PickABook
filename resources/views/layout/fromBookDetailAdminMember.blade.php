@extends('master.template')

@section('title', 'Book Detail')

@section('body')
    <div class="d-flex flex-wrap justify-content-center">
        <div class="card mb-3 mt-4 w-75 p-5 align-items-center">
        {{-- <div class="card w-75 row justify-content-center d-flex align-items-center mx-auto my-4"> --}}
            <div class="row align-items-center">
                <div class="col-md-4 px-1">
                    <img src="{{url('storage\app\public\images\books\\'.$book->photoPath)}}" class="img-fluid rounded-start" alt="{{$book->photoPath}}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="card-title">{{$book->title}}</h1>
                        <h4 class="card-text">{{$book->author->name}}</h4>
                        <p class="card-text">ISBN   : {{$book->ISBN}}</p>
                        <p class="card-text">Year   : {{$book->publishedYear}}</p>
                        <p class="card-text">Stock  : {{$stock}}</p>

                        <p class="card-text">Book Publisher</p>
                        {{-- after model relation has been determined on publisher, with function name publisher--}}
                        {{-- <p class="card-text">{{$book->publisher->name}}</p> --}}
                        @yield('details')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-wrap justify-content-center">
        <div class="card mb-3 mt-2 w-75 p-5">
            <h1 class="card-title pb-2">Description</h1>
            <p class="card-text">{{$book->synopsis}}</p>
        </div>
    </div>
@endsection
