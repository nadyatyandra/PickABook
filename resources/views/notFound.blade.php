@extends('master.template')

@section('title', 'Not Found')

@section('body')
    <div class="align-items-center">
        <h1 class="justify-content-center text-center pt-2" style="font-size: 16em; font-weight: bold; opacity: .3">404</h1>
        <h3 class="justify-content-center text-center text-dark">Oops! That page can't be found.</h3>
        <p class="justify-content-center text-center text-muted">It looks like nothing was found at this location. Breathe in, and on the out breath, go back and try again.</p>
        <div class="d-flex justify-content-center">
            <a class="justify-content-center text-center btn btn-outline-secondary mb-3" href="/login">Go back and try again</a>
        </div>
    </div>
@endsection
