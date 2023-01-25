@extends('master.template')

@section('title', 'Log In')

@section('body')
    <form action="/authenticate" method="post">
        @csrf
        <div class='d-flex flex-column align-items-center rounded my-4 py-4 container-fluid' style="width: 600px; background-color: bisque">
            <h1 class="text-center my-3">Login</h1>
            <div class="col-md-6 mb-4 w-75">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name='email' id="email" placeholder="example@mail.com" value={{(Cookie::get('emailCookie') !== null)? Cookie::get('emailCookie') : ""}}>
            </div>
            <div class="col-md-6 mb-4 w-75">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name='password' id="password">
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input checkboxBlack" type="checkbox" value="" name="remember" id="remember" checked={{Cookie::get('emailCookie') !== null}}>
                <label class="form-check-label" for="remember">Remember Me</label>
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

    <style>
        .checkboxBlack:checked{
            background-color:black;
            border-color: black
        }
    </style>
@endsection
