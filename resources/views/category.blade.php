@extends('master.template')

@section('title', 'Category')

@section('body')
    <div class="card container-fluid mt-3 w-75 pb-3 mb-3" style="background-color: light">
        <h1 class="mt-3 px-3">{{$name}}</h1>
        <div class="m-3">
            <div class="d-flex flex-wrap m-4 justify-content-center">
                @if ($books == '[]')
                    <h3>No Book Found...</h3>
                @endif
                @include('layout.bookCard')
            </div>
        </div>
    </div>
@endsection
