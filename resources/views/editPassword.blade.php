@extends('master.template')

@section('title', 'Edit Password')

@section('body')
<form action="/profile/editPassword" method="post">
    @csrf
    <div class='d-flex flex-column align-items-center rounded my-4 py-4 container-fluid' style="width: 600px; background-color: bisque">
        <h1 class="text-center my-3">Edit Password</h1>
        <div class="col-md-6 mb-4 w-75">
            <label for="oldPassword" class="form-label">Old Password</label>
            <input type="password" class="form-control" name='oldPassword' id="oldPassword" placeholder="Old Password (min 5 letters)">
        </div>
        <div class="col-md-6 mb-4 w-75">
            <label for="newPassword" class="form-label">New Password</label>
            <input type="password" class="form-control" name='newPassword' id="newPassword" placeholder="New Password (min 5 letters)">
        </div>
        <div class="col-md-6 mb-4 w-75">
            <label for="confirmNewPassword" class="form-label">Confirm New Password</label>
            <input type="password" class="form-control" name='confirmNewPassword' id="confirmNewPassword" placeholder="Confirm New Password (min 5 letters)">
        </div>
        @if ($errors->any())
            <p class="text-center text-danger">{{$errors->first()}}</p>
        @endif
        <div class="d-flex justify-content-between mb-4">
            <a type="submit" class='btn btn-dark mx-2' href="{{route('profile')}}">Back</a>
            <button type="submit" class='btn btn-outline-dark mx-2'>Save Password</button>
        </div>
    </div>
</form>
@endsection
