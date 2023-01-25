@extends('master.template')

@section('title', 'Popular Books')

@section('body')
    <h1 class='text-center p-5'>Popular Books</h1>
    <div class='d-flex flex-row m-1 pb-5 row row-cols-5 g-5 justify-content-center'>
        @include('layout.bookPopularCard')
    </div>
    <div class="m-5 d-flex justify-content-center">
        {{$books_popular->withQueryString()->links()}}
    </div>
@endsection
