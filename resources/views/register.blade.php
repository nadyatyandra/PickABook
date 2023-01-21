@extends('master.template')

@section('title', 'Register')

@section('body')
    <form action="" method="post">
        @csrf
        <div class="d-flex flex-column align-items-center container-fluid justify-content-center" style="background-color: bisque">
            <h1 class="text-center">Register</h1>
            <div class="col-md-6 mb-4">
                <label for="nik" class="form-label">NIK</label>
                <input type="number" class="form-control" id="nik" placeholder="(16 digits)">
            </div>
            <div class="col-md-6 mb-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Your Name">
            </div>
            <div class="col-md-6 mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="example@mail.com">
            </div>
            <div class="col-md-6 mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="(min 5 letters)">
            </div>
            <div class="col-md-6 mb-4">
                <label for="confirmed" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmed" placeholder="(min 5 letters)">
            </div>
            <div class="col-md-6 mb-4">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" placeholder="(min 5 letters)"></textarea>
            </div>
            {{-- DOB belum ada --}}
            <div class="col-md-6 mb-4">
                <label for="number" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="number" placeholder="(9-14 digits)">
            </div>
            <div class="d-flex flex-column align-items-center">
                <button type="submit" class="btn btn-primary mt-4">Register</button>
                <p class="mt-4">Already have account? <a href="/login">Login Now!</a></p>
            </div>
        </div>
    </form>
@endsection
