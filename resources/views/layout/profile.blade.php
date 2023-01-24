@extends('master.template')

@section('title', 'Profile')

@section('body')
<div class="d-flex flex-wrap justify-content-center">
    <div class="col-md-6 py-6 card">
        <div class="card-body text-center">
            <h3 class="card-title fs-1">My Profile</h3>
            <h6 class="card-subtitle mb-2 mt-2">Name: {{Auth::user()->name}}</h6>
            <h6 class="card-subtitle mb-2 mt-2">Email: {{Auth::user()->email}}</h6>
            @yield('contentProfile')
        </div>
    </div>
</div>
@endsection
