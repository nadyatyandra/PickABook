@extends('master.template')

@section('title', 'Log In')

@section('body')
    <form action="/authenticate" method="post">
        @csrf
        <div class="d-flex flex-column align-items-center container-fluid justify-content-center" style="background-color: bisque">
            <h1 class="text-center my-3">Login</h1>
            <div class="col-md-6 mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name='email' id="email" placeholder="example@mail.com">
            </div>
            <div class="col-md-6 mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name='password' id="password">
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                <label class="form-check-label" for="remember_me">Remember Me</label>
            </div>
            @if ($errors->any())
                <p class="text-center text-danger">{{$errors->first()}}</p>
            @endif
            <div class="d-flex flex-column align-items-center">
                <button type="submit" class="btn btn-dark mb-3">Login</button>
                <p class="text-center">Not registered yet? <a class="text-decoration-none text-reset" href="{{route('register')}}"><u>Register now!</u></a></p>
            </div>
        </div>
    </form>
@endsection
