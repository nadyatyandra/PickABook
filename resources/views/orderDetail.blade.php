@extends('master.template')

@section('title', 'Order Detail')

@section('body')
    <div class="d-flex flex-wrap justify-content-center my-2">
        <div class="card my-2 w-75 p-2">
            <div class="card-body">
                <h1 class="text-center">Order</h1>
                {{-- @php
                    $date = Carbon::parse($order->date)->format('d M Y');
                    $returnDate = Carbon::parse($date)->addDays(30)->format('d M Y');
                @endphp --}}

                <h5>asd</h5>
                <h5>Status:</h5>
            </div>
        </div>
    </div>
@endsection
