@extends('layout.headerMember')

@section('header_member', 'Home')

@section('main_body')

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
        <h1 class="text-center">New Release</h1>
            <div class="card" style="width: 10rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="bookcard card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <a  id="booksbtn" href="#" class="booksbtn btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselRelease" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselRelease" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<style>
    .booksbtn{
        display:none;
    }
    .bookcard:hover + .booksbtn, .booksbtn:hover{
        display: inline;
    }
</style>

@endsection
