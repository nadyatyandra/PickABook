@extends('layout.fromUpdateBook')

@section('title', 'Update Book')

@section('pageTitle', 'Update Book')

@section('method')
    method="POST"
@endsection

@section('action')
    action=''
@endsection

@section('method_field')
    @method('PATCH')
@endsection

@section('isbnValue')
    value=''
@endsection

@section('titleValue')
    value=''
@endsection

@section('synopsisValue')
{{-- hrs rapet kyk gini ya krn textarea --}}
{{-- {{$currBike->bikeDescription}} --}}
@endsection

@section('publishedYearValue')
    value=''
@endsection

@section('stockValue')
    value=''
@endsection

@section('authorOption')
    {{-- error when no library was chosen --}}
    {{-- <option selected disabled value="0">Choose Available Library</option>
    @foreach ($book->library as $library)
        <option value="{{$library->id}}">{{$library->name}}</option>
    @endforeach --}}


    {{-- CONTOH LAB --}}
    {{-- <option value="{{$currBike->brandId}}">{{$currBike->brandName}}</option>
    @foreach ($brandsets as $brand) <!-- pake foreach krn datanya berbntk array -->
        @if ($brand->brandId != $currBike->brandId)
            <option value="{{$brand->brandId}}">{{$brand->brandName}}</option>
        @endif
    @endforeach --}}
@endsection

@section('languageOption')

@endsection

@section('categoryOption')

@endsection

@section('publisherOption')

@endsection

@section('libraryOption')

@endsection

@section('weightValue')
    value=''
@endsection

@section('button')
    <button type="submit" class='btn btn-dark mx-2'>Update</button>
@endsection
