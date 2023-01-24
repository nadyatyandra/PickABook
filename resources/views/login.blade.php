@extends('master.template')

@section('title', 'Log In')

@section('body')
    <form action="/authenticate" method="post">
        @csrf
        <div class="d-flex flex-column align-items-center container-fluid justify-content-center" style="background-color: bisque">
            <h1 class="text-center">Login</h1>
            <div class="col-md-6 mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name='email' id="email" placeholder="example@mail.com">
            </div>
            <div class="col-md-6 mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name='password' id="password">
            </div>
            @if ($errors->any())
                <p class="text-center text-warning">{{$errors->first()}}</p>
            @endif
            <div class="d-flex flex-column align-items-center">
                <button type="submit" class="btn btn-primary mt-4">Login</button>
                <p class="mt-4">Not have account? <a href="{{route('register')}}">Register Now!</a></p>
            </div>
        </div>
    </form>
@endsection
