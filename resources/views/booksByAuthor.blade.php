@extends('master.template')

@section('title', 'Books By Author')

@section('body')
    <div class="card container-fluid mt-3 w-75 pb-3 mb-3" style="background-color: light">
        <h1  class="m-4">About {{$name}}</h1>
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{url('storage\app\public\authors\\'.$author->photoPath)}}" class="card-img-top m-4" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Born</h5>
                <p class="card-text">{{$author->birthPlace}}, {{$author->birthDate}}</p>
                <h5 class="card-title">Biography</h5>
                <p class="card-text">{{$author->biography}}</p>
            </div>
            </div>
        </div>
    </div>

    <div class="card container-fluid mt-3 w-75 pb-3 mb-3" style="background-color: light">
        <h1  class="m-4">Books By {{$name}}</h1>
        <!-- <img src="{{url('storage\app\public\authors\\'.$author->photoPath)}}" class="card-img-top" alt="..."> -->
        <div class="m-4">
            <button type="button" class="btn btn-outline-dark">Best Seller</button>
            <button type="button" class="btn btn-outline-dark">New Release</button>
            <div class="d-flex flex-wrap m-4 justify-content-center">
                @if ($books == '[]')
                    <h3>No Book Found...</h3>
                @endif
                @include('layout.bookCard')
            </div>
        </div>
    </div>
@endsection
