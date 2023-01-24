@extends('master.template')

@section('title', 'Edit Password')

@section('body')
<form action="" method="post">
    @csrf
    <div class="d-flex flex-column align-items-center container-fluid justify-content-center" style="background-color: bisque">
        <h1 class="text-center">Edit Password</h1>
        <div class="col-md-6 mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name='password' id="password" placeholder="(min 5 letters)">
        </div>
        <div class="col-md-6 mb-4">
            <label for="confirmed" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name='confirmed' id="confirmed" placeholder="(min 5 letters)">
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
