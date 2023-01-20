@extends('master.template')

@section('title', 'bookDetail')

@section('body')
<div class="d-flex flex-wrap justify-content-center">
    <div class="card mb-3 mt-4 w-75">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h1 class="card-title">Book Title</h1>
                <h4 class="card-text">Author</h4>
                <p class="card-text">ISBN</p>
                <p class="card-text">Release date</p>
                <p class="card-text">Book Publisher</p>
                <p class="card-text">Available Library</p>
                <p class="card-text">Book Stock</p>
                <button class="btn btn-outline-dark col-6" type="submit">Add To Cart</button>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex flex-wrap justify-content-center">
    <div class="card mb-3 mt-2 w-75 p-5">
        <h1 class="card-title pb-2">Description</h1>
        <p class="card-text">Book Synopsis and everything else</p>
    </div>
</div>

@endsection