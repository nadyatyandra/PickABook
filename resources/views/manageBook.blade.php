@extends('master.template')

@section('title', 'Manage Book')

@section('body')
    <div class='align-items-center p-5'>
        <a href="{{route('insertBook')}}" class="btn btn-outline-dark me-3 my-3">Insert New Book</a>
        <a href="{{route('viewAddToLibrary')}}" class="btn btn-outline-dark me-3 my-3">Add to Library</a>
        <table class="table">
            <thead class="table-dark justify-content-center text-center">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Published Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <th scope="row" class="text-center align-middle">{{$loop->index + 1}}</th>
                        <td class="align-middle">{{$book->ISBN}}</td>
                        <td class="align-middle">{{$book->title}}</td>
                        <td class="align-middle">{{$book->author->name}}</td>
                        <td class="align-middle">{{$book->publishedYear}}</td>
                        <td class="text-center d-flex justify-content-center align-middle">
                            <a href="{{route('updateBook')}}" class="btn btn-outline-dark me-2">Update Book</a>
                            <form action="/admin/delete-book/{{$book->id}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger">Delete Book</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
