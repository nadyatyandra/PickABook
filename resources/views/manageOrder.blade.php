@extends('master.template')

@section('title', 'Manage Order')

@section('body')
    <div class='align-items-center p-5'>
        <table class="table">
            <thead class="table-dark justify-content-center text-center">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Member</th>
                    <th scope="col">Library</th>
                    <th scope="col">Book Title</th>
                    <th scope="col">Courier</th>
                    <th scope="col">Borrow Date</th>
                    <th scope="col">Return Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($books as $book) --}}
                    <tr>
                        {{-- <th scope="row" class="text-center align-middle">{{$loop->index + 1}}</th> --}}
                        <th scope="row" class="text-center align-middle">1</th>
                        <td class="align-middle">asd</td>
                        <td class="align-middle">asd</td>
                        <td class="align-middle">asd</td>
                        <td class="align-middle">asd</td>
                        <td class="align-middle">asd</td>
                        <td class="align-middle">asd</td>
                        <td class="text-center align-middle">
                            {{-- sesuai database, tinggal isi di ... --}}
                            {{-- @if ()
                                <span class="text-white bg-primary p-1">...</span>
                            @elseif ()
                                <span class="text-white bg-secondary p-1">...</span>
                            @elseif ()
                                <span class="text-white bg-dark p-1">...</span>
                            @else
                                 <span class="text-white bg-success p-1">...</span>
                            @endif --}}
                        </td>
                        <td class="text-center d-flex justify-content-center align-middle">
                            <a href="" class="btn btn-outline-dark">Update Status</a>
                        </td>
                    </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
@endsection
