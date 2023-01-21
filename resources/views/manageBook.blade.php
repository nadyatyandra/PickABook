@extends('master.template')

@section('title', 'Manage Book')

@section('body')
    <div class='align-items-center p-5'>
        <a href="#" class="btn btn-outline-dark me-3 my-3">Insert Book</a>
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
            <tr>
                <th scope="row" class="text-center">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td class="text-center">
                    <a href="#" class="btn btn-outline-dark">Update Book</a>
                    <a href="#" class="btn btn-outline-danger">Delete Book</a>
                </td>
            </tr>
            <tr>
                <th scope="row" class="text-center">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
        </table>
    </div>
@endsection
