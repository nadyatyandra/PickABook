@extends('master.template')

@section('body')
    <script type="text/javascript">
        $(function() {
            $(".chzn-select").chosen();
        });
    </script>
    <form enctype="multipart/form-data" form @yield('method') @yield('action')>
        @csrf
        @yield('method_field')
        <div class="d-flex flex-column align-items-center container-fluid justify-content-center">
            <h1 class="text-center my-3">@yield('pageTitle')</h1>
            {{-- <div class="col-md-6 mb-4">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" name='isbn' id="isbn" placeholder="ISBN" @yield('isbnValue')>
            </div> --}}
            <div class="col-md-6 mb-4">
                <label for="isbn" class="form-label">ISBN</label>
                <select class="chzn-select form-select" aria-label="Default select example" name='isbn'>
                    @foreach ($books as $book)
                        <option value="{{$book->ISBN}}">{{$book->ISBN}} - {{$book->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-4">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" name='stock' id="stock" placeholder=">0" @yield('stockValue')>
            </div>
            @if ($errors->any())
                <p class="text-center text-danger">{{$errors->first()}}</p>
            @endif
            <div class="d-flex justify-content-between mb-4">
                @yield('button')
            </div>
        </div>
    </form>
@endsection
