@extends('master.template')

@section('title', 'category')

@section('body')

<div class="card container-fluid mt-3 w-75 pb-3 mb-3" style="background-color: light">
    <h1  class="m-4">Genre Name</h1>
    <div class="m-4">
        <button type="button" class="btn btn-outline-dark">Best Seller</button>
        <button type="button" class="btn btn-outline-dark">New Release</button>
        <div class="d-flex flex-wrap m-4">
            <div class="card me-4" style="width: 10rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="bookcard card-body">
                    <h5 class="card-title">Book Title</h5>
                    <p class="card-text">Author</p>
                </div>
                <a href="#" class="booksbtn btn btn-outline-dark">Book Detail</a>
            </div>
        </div>
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