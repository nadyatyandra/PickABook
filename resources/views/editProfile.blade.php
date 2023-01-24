@extends('master.template')

@section('title', 'Edit Profile')

@section('body')
<form action="" method="post">
    @csrf
    <div class="d-flex flex-column align-items-center container-fluid justify-content-center" style="background-color: bisque">
        <h1 class="text-center">Edit Profile</h1>
        <div class="col-md-6 mb-4">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name='name' id="name" placeholder="Your Name" value="{{old('name')}}">
        </div>
        <div class="col-md-6 mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name='email' id="email" placeholder="example@mail.com" value="{{old('email')}}">
        </div>
        <div class="col-md-6 mb-4">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" name='address' id="address" placeholder="(min 5 letters)"></textarea>
        </div>
        <div class="col-md-6 mb-4">
            <label for="number" class="form-label">Phone Number</label>
            <input type="number" class="form-control" name='number' id="number" placeholder="(10-14 digits)" value="{{old('number')}}">
        </div>
        @if ($errors->any())
            <p class="text-center text-warning">{{$errors->first()}}</p>
        @endif
        <div class="d-flex flex-column align-items-center">
            <button type="submit" class="btn btn-primary mt-4">Register</button>
        </div>
        <br>
        <a class="btn btn-outline-danger text-red" type="button" href="{{route('profile')}}">Back</a>
        <br>
    </div>
</form>
@endsection
