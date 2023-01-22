@extends('master.template')

@section('title', 'cart')

@section('body')

<div class="d-grid gap-2 d-md-flex justify-content-md-end m-4">
    <a class="btn btn-outline-dark" type="button" href="...">Check Out</a>
</div>

<div class="d-flex flex-wrap justify-content-center">
    <div class="card mb-3 mt-4 w-75">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Book title</h5>
                    <p class="card-text">Library Name</p>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-grid gap-2 d-md-flex">
                        <form action="..." method = "post">
                            <button type="submit" class="btn btn-danger">Remove from Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
