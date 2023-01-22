@extends('master.template')

@section('title', 'bookDetail')

@section('body')
<div class="d-flex flex-wrap justify-content-center">
    <div class="card mb-3 mt-4 w-75">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="{{url('storage\app\public\books\\'.$book->photoPath)}}" class="img-fluid rounded-start" alt="{{$book->photoPath}}">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h1 class="card-title">{{$book->title}}</h1>
                <h4 class="card-text">Author</h4>
                {{-- after model relation has been determined, with function name author --}}
                {{-- <h4 class="card-text">{{$book->author->name}}</h4> --}}

                <p class="card-text">ISBN: {{$book->ISBN}}</p>
                <p class="card-text">{{$book->publishedYear}}</p>

                {{-- get stock from BookLibrary pivot table, and sum it. --}}
                <p class="card-text">Book Stock</p>

                <p class="card-text">Book Publisher</p>
                {{-- after model relation has been determined on publisher, with function name publisher--}}
                {{-- <p class="card-text">{{$book->publisher->name}}</p> --}}

                <select class="form-select" aria-label="Default select example">
                    <option selected>Choose Available Library</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <button class="btn btn-outline-dark col-6 mt-4" type="submit">Add To Cart</button>
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
