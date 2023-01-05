@extends('layout.header')

@section('title_web', 'login')

@section('body')
    <form class="d-flex flex-column align-items-center" action="/authenticate" method="post">
        @csrf
        <div class="col-md-3 align-items-center container-fluid justify-content-center" style="background-color: cyan">
            <h1 class="text-center">Login</h1>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="">
            </div>
            <div class="d-flex flex-column align-items-center">
                <button type="submit" class="btn btn-primary mt-4">Login</button>
                <p class="mt-4">not have account? <a href="#">Register</a></p>
            </div>
        </div>
    </form>
@endsection

@extends('layout.footer')
