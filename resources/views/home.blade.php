@extends('master.template')

@section('title', 'Home')

@section('body')

<!-- commercials -->
<div id="carouselAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{asset('images/commercial_1.jpeg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{asset('images/commercial_2.jpeg')}}" class="d-block w-100" alt="...">
        </div>
        <!-- <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        </div> -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- new release -->
<div id="carouselRelease" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="card container-fluid mt-3 w-75 pb-5" style="background-color: light">
        <h1 class="text-center mt-2">New Release</h1>
        <div class="d-flex flex-wrap mt-2">
            @foreach ($books_newRelease as $book)
                <div class="bookoutline card me-4" style="width: 10rem;">
                    <img src="{{url('storage\app\public\images\books\\'.$book->photoPath)}}" class="card-img-top" alt="{{$book->title}}">
                    <div class="bookcard card-body">
                        <h5 class="card-title">{{$book->title}}</h5>
                        <p class="card-text">{{$book->author->name}}</p>
                    </div>
                    <a href="/bookDetail/{{$book->id}}" class="booksbtn btn btn-outline-dark">Book Detail</a>
                </div>
            @endforeach
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselRelease" data-bs-slide="prev">
        <span class="below-carousel carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselRelease" data-bs-slide="next">
        <span class="below-carousel carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- authors -->
<div class="card container-fluid mt-3 w-75 pb-3 mb-3" style="background-color: light">
    <h1 class="text-center">Best Author 2023</h1>
    <div>
        <button type="button" class="btn btn-outline-dark">Author</button>
    </div>
</div>

<style>
    .booksbtn{
        display:none;
    }
    .bookcard:hover + .booksbtn, .booksbtn:hover{
        display: inline;
    }
    .below-carousel{
        /* outline:black;
        border: 1px solid black; */
        border-radius:50%;
        background-color:black
    }
</style>

@endsection
