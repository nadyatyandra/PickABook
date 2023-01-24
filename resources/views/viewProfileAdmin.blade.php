@extends('layout.profile')

@section('contentProfile')
<h6 class="card-subtitle mb-2 mt-2">Library Name: {{$data->library->name}}</h6>
<div class="d-grid gap-2 d-md-block">
    <a class="btn btn-outline-dark" type="button" href="{{route('editPassword')}}">Edit Password</a>
</div>
@endsection
