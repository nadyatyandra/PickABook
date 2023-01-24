@extends('master.template')

@section('title', 'Register')

@section('body')
    <form action="/register" method="post">
        @csrf
        <div class="d-flex flex-column align-items-center container-fluid justify-content-center" style="background-color: bisque">
            <h1 class="text-center">Register</h1>
            <div class="col-md-6 mb-4">
                <label for="nik" class="form-label">NIK</label>
                <input type="number" class="form-control" name='nik' id="nik" placeholder="(16 digits)" value="{{old('nik')}}">
            </div>
            <div class="col-md-6 mb-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name='name' id="name" placeholder="Your Name" value="{{old('name')}}">
            </div>
            <div class="col-md-6 mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name='email' id="email" placeholder="example@mail.com" value="{{old('email')}}">
            </div>
            <div class="col-md-6 mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name='password' id="password" placeholder="(min 5 letters)">
            </div>
            <div class="col-md-6 mb-4">
                <label for="confirmed" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name='confirmed' id="confirmed" placeholder="(min 5 letters)">
            </div>
            <div class="col-md-6 mb-4">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" name='address' id="address" placeholder="(min 5 letters)"></textarea>
            </div>
            {{-- DOB belum ada --}}
            <div class="col-md-6 mb-4">
                <label for="number" class="form-label">Phone Number</label>
                <input type="number" class="form-control" name='number' id="number" placeholder="(10-14 digits)" value="{{old('number')}}">
            </div>
            @if ($errors->any())
                <p class="text-center text-warning">{{$errors->first()}}</p>
            @endif
            <div class="d-flex flex-column align-items-center">
                <button type="submit" class="btn btn-primary mt-4">Register</button>
                <p class="mt-4">Already have account? <a href="{{route('login')}}">Login Now!</a></p>
            </div>
        </div>
    </form>
@endsection
