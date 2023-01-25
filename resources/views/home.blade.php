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
                <img src="{{asset('images/commercial_1.jpeg')}}" class="bookimage d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/commercial_2.jpeg')}}" class="bookimage d-block w-100" alt="...">
            </div>
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
                <h1 class="text-center mt-3">New Release</h1>
                <div class='card border-white container-fluid d-flex flex-row m-1 row row-cols-4 g-4 justify-content-center'>
                @include('layout.bookCard')
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

    <!-- popular -->
    <div id="carouselRelease" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="card container-fluid mt-3 w-75 pb-5" style="background-color: light">
                <h1 class="text-center mt-3">Popular Books</h1>
                <div class='card border-white container-fluid d-flex flex-row m-1 row row-cols-4 g-4 justify-content-center'>
                @include('layout.bookPopularCard')
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

    <!-- editors pick -->
    <div id="carouselRelease" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="card container-fluid mt-3 w-75 pb-5" style="background-color: light">
                <h1 class="text-center mt-3">Editor's Pick</h1>
                <div class='card border-white container-fluid d-flex flex-row m-1 row row-cols-4 g-4 justify-content-center'>
                    @include('layout.bookEditorsCard')
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
        <h1 class="text-center mt-3">Best Author 2023</h1>
        <div class="d-flex flex-row m-1 justify-content-center">
            @foreach ($authors as $author)
                <a class="btn btn-outline-{{$colours[$loop->index%5]}} mx-1" href="/BooksBy/{{$author->name}}">{{$author->name}}</a>
            @endforeach
        </div>
    </div>

    <!-- button -->
    <div class="d-flex justify-content-center my-3">
        <a href="{{route('books')}}" class="btn btn-dark">See More Recommendations</a>
    </div>

    <style>
        .booksbtn{
            display:none;
        }
        .bookcard:hover + .booksbtn, .booksbtn:hover{
            display: inline;
        }
        .below-carousel{
            border-radius:50%;
            background-color:black
        }
        .bookimage{
            width: 100%;
            height: 30vw;
            object-fit: cover;
        }
    </style>
@endsection
