@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Sweetwater Orders </h2>
            </div>
        </div>
    </div>
    <br>
    <h3>Comments</h3>
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Order ID</th>
            <th>Comments</th>
            <th>Expected Ship Date</th>
            <th>Category</th>
        </tr>
        @foreach ($orders_categories as $order)
            <tr>
                <td>{{ $order->orderid }}</td>
                <td>{{ $order->comments }}</td>
                <td>{{ $order->shipdate_expected }}</td>
                <td>{{ $order->category }}</td>
            </tr>
        @endforeach
    </table>

@endsection