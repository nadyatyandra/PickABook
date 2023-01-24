@extends('layout.fromInsertUpdateBook')

@section('title', 'Insert Book')

@section('pageTitle', 'Insert Book')

@section('method')
    method="POST"
@endsection

@section('action')
    action=''
@endsection

@section('authorOption')
    {{-- CONTOH LAB --}}
    {{-- @foreach ($brandsets as $brand) <!-- pake foreach krn datanya berbntk array -->
        <option value="{{$brand->brandId}}">{{$brand->brandName}}</option>
    @endforeach --}}
@endsection

@section('languageOption')

@endsection

@section('publisherOption')

@endsection

@section('libraryOption')

@endsection

@section('insertImage')
    <div class="col-md-6 mb-4">
        <label for="inputImage" class="form-label">Image</label>
        <input name="inputImage" class="form-control" type="file" id="formFile">
    </div>
@endsection

@section('button')
    <button type="submit" class="btn btn-dark mx-2">Insert</button>
@endsection
