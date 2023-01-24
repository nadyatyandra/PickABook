@extends('master.template')

@section('title', 'bookDetail')

@section('body')
<div class="d-flex flex-wrap justify-content-center">
    <div class="card mb-3 mt-4 w-75">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="{{url('storage\app\public\books\\'.$book->photoPath)}}" class="img-fluid rounded-start" alt="{{$book->photoPath}}">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h1 class="card-title">{{$book->title}}</h1>
                <h4 class="card-text">{{$book->author->name}}</h4>
                <p class="card-text">ISBN: {{$book->ISBN}}</p>
                <p class="card-text">{{$book->publishedYear}}</p>
                <p class="card-text">Stock: {{$stock}}</p>

                <p class="card-text">Book Publisher</p>
                {{-- after model relation has been determined on publisher, with function name publisher--}}
                {{-- <p class="card-text">{{$book->publisher->name}}</p> --}}

                <form action="/add-book/{{$book->id}}" method="post">
                    @csrf
                    <select class="form-select" aria-label="Default select example" name='library'>
                        {{-- error when no library was chosen --}}
                        <option selected disabled value="0">Choose Available Library</option>
                        @foreach ($book->library as $library)
                            <option value="{{$library->id}}">{{$library->name}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-outline-dark col-6 mt-4" type="submit">Add To Cart</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex flex-wrap justify-content-center">
    <div class="card mb-3 mt-2 w-75 p-5">
        <h1 class="card-title pb-2">Description</h1>
        <p class="card-text">{{$book->synopsis}}</p>
    </div>
</div>

@endsection
