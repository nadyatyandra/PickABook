@extends('master.template')

@section('title', 'Welcome to PickABook')

@section('body')
    <div style="position: relative; text-align: center;">
        <img
            class="object-cover object-bottom w-100"
            style="height: 500px; object-fit: cover; position: relative;"
            src="{{url('storage\app\public\images\assets\background-landing-page.jpg')}}"
            alt=""
        />
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%; height: 100%; opacity: 40%" class="square bg-dark"></div>
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);" class="justify-content-between text-light">
            <div class="py-3">
                <h1>Welcome to Pick A Book</h1>
            </div>
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%; height: 3%" class="square bg-light mt-1"></div>
            <div class="pt-3">
                <a class="btn btn-light mx-5 btn-lg" href="/login">Log In</a>
                <a class="btn btn-outline-light mx-5 btn-lg" href="/register">Register</a>
            </div>

        </div>
    </div>
@endsection
