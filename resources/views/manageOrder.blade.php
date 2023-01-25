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
                    <th scope="col">Method</th>
                    <th scope="col">Borrow Date</th>
                    <th scope="col">Return Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    @foreach ($order->orderDetail as $orderDetail)
                        <tr>
                            <th scope="row" class="text-center align-middle">{{$loop->index + 1}}</th>
                            <td class="align-middle text-center">{{$order->memberId}}</td>
                            <td class="align-middle text-center">{{$order->libraryId}}</td>
                            <td class="align-middle text-center">{{$orderDetail->book->title}}</td>
                            <td class="align-middle text-center">asd</td>
                            @php
                                $date = Carbon::parse($order->date)->format('d M Y');
                                $returnDate = Carbon::parse($date)->addDays(30)->format('d M Y');
                            @endphp
                            <td class="align-middle text-center">{{$date}}</td>
                            <td class="align-middle text-center">{{$returnDate}}</td>
                            <td class="text-center align-middle" style="max-width: 250px;">
                                @if ($order->statusId == 1)
                                    <span class="text-white bg-primary p-1">{{$order->status->status}}</span>
                                @elseif ($order->statusId == 2)
                                    <span class="text-white bg-secondary p-1">{{$order->status->status}}</span>
                                @elseif ($order->statusId == 3)
                                    <span class="text-white bg-dark p-1">{{$order->status->status}}</span>
                                @elseif ($order->statusId == 4)
                                    <span class="text-white bg-success p-1">{{$order->status->status}}</span>
                                @endif
                            </td>
                            <td class="text-center d-flex justify-content-center align-middle py-3">
                                <a href="/orderDetail/{{$order->id}}" class="btn btn-outline-dark me-2">View Detail</a>
                                <a href="" class="btn btn-outline-dark">Update Status</a>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
