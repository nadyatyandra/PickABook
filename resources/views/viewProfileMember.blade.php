@extends('layout.profile')

@section('contentProfile')
<h6 class="card-subtitle mb-2 mt-2">Address: {{$data->address}}</h6>
<h6 class="card-subtitle mb-2 mt-2">Phone Number: {{$data->phoneNumber}}</h6>
<div class="d-grid gap-2 d-md-block">
    <a class="btn btn-outline-primary" type="button" href="{{route('editProfile')}}">Edit Profile</a>
    <a class="btn btn-outline-primary" type="button" href="{{route('editPassword')}}">Edit Password</a>
</div>
@endsection
