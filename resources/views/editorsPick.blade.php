@extends('master.template')

@section('title', 'Editor\'s Pick')

@section('body')
    <h1 class='text-center p-5'>Editor's Pick</h1>
    <div class='d-flex flex-row m-1 pb-5 row row-cols-5 g-5 justify-content-center'>
        @include('layout.bookEditorsCard')
    </div>
    <div class="m-5 d-flex justify-content-center">
        {{$books_editorsPick->withQueryString()->links()}}
    </div>
@endsection
