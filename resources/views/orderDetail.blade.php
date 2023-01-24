@extends('master.template')

@section('title', 'Order Detail')

@section('body')
    <div class="d-flex flex-wrap justify-content-center my-2">
        <div class="card my-2 w-75 p-2">
            <div class="card-body">
                <h1 class="text-center">Order #{{$order->id}}</h1>
                @php
                    $date = Carbon::parse($order->date)->format('d M Y');
                    $returnDate = Carbon::parse($date)->addDays(30)->format('d M Y');
                @endphp
                <h5>Member ID: {{$order->memberId}}</h5>
                <h5>Member Name:</h5>
                <h5>Library ID: {{$order->libraryId}}</h5>
                <h5>Library Name:</h5>
                <h5>Book ISBN:</h5>
                <h5>Book Title:</h5>
                <h5>Courier ID:</h5>
                <h5>Courier Name:</h5>
                <h5>Borrow date: {{$date}}</h5>
                <h5>Return date: {{$returnDate}}</h5>
                <h5>Status ID: {{$order->statusId}}</h5>
                <h5>Status Name:</h5>
            </div>
        </div>
    </div>
@endsection
