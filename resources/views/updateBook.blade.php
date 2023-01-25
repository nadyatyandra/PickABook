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
    <option value="{{$currBook->authorId}}">{{$currBook->author->name}}</option>
    @foreach ($authors as $author) <!-- pake foreach krn datanya berbntk array -->
        @if ($author->id != $currBook->authorId)
            <option value="{{$author->id}}">{{$author->name}}</option>
        @endif
    @endforeach
@endsection

@section('languageOption')
<option value="{{$currBook->languageId}}">{{$currBook->language->name}}</option>
    @foreach ($languages as $language) <!-- pake foreach krn datanya berbntk array -->
        @if ($language->id != $currBook->languageId)
            <option value="{{$language->id}}">{{$language->name}}</option>
        @endif
    @endforeach

@endsection

@section('categoryOption')
    @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
@endsection

@section('publisherOption')
<option value="{{$currBook->publisherId}}">{{$currBook->publisher->name}}</option>
    @foreach ($publishers as $publisher) <!-- pake foreach krn datanya berbntk array -->
        @if ($publisher->id != $currBook->publisherId)
            <option value="{{$publisher->id}}">{{$publisher->name}}</option>
        @endif
    @endforeach
@endsection

@section('weightValue')
    value=''
@endsection

@section('button')
    <button type="submit" class='btn btn-dark mx-2'>Update</button>
@endsection
