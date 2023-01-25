@extends('layout.fromInsertBook')

@section('title', 'Insert Book')

@section('pageTitle', 'Insert Book')

@section('method')
    method="POST"
@endsection

@section('action')
    action=''
@endsection

@section('authorOption')
    @foreach ($authors as $author)
        <option value="{{$author->id}}">{{$author->name}}</option>
    @endforeach
@endsection

@section('languageOption')
    @foreach ($languages as $language)
        <option value="{{$language->id}}">{{$language->name}}</option>
    @endforeach
@endsection

@section('categoryOption')
    @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
@endsection

@section('publisherOption')
    @foreach ($publishers as $publisher)
        <option value="{{$publisher->id}}">{{$publisher->name}}</option>
    @endforeach
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
