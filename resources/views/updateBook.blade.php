@extends('layout.fromUpdateBook')

@section('title', 'Update Book')

@section('pageTitle', 'Update Book')

@section('method')
    method="POST"
@endsection

@section('action')
    action='/updateBook/{{$currBook->id}}'
@endsection

@section('method_field')
    @method('PATCH')
@endsection

@section('isbnValue')
    value='{{$currBook->ISBN}}'
@endsection

@section('titleValue')
    value='{{$currBook->title}}'
@endsection

@section('synopsisValue')
{{$currBook->synopsis}}
{{-- hrs rapet kyk gini ya krn textarea --}}
{{-- {{$currBike->bikeDescription}} --}}
@endsection

@section('publishedYearValue')
    value='{{$currBook->publishedYear}}'
@endsection

@section('stockValue')
    value='{{$currStock}}'
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
    value='{{$currBook->weight}}'
@endsection

@section('button')
    <button type="submit" class='btn btn-dark mx-2'>Update</button>
@endsection
