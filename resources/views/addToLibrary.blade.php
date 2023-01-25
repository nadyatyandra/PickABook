@extends('layout.addToLibrary')

@section('title', 'Add New Book to Library')

@section('pageTitle', 'Add New Book toLibrary')

@section('method')
    method="POST"
@endsection

@section('action')
    action=''
@endsection

@section('button')
    <button type="submit" class="btn btn-dark mx-2">Insert</button>
@endsection
