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
    <h3>Candy Comments</h3>
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Order ID</th>
            <th>Comments</th>
            <th>Expected Ship Date</th>
        </tr>
        @foreach ($candy_orders as $order)
            <tr>
                <td>{{ $order->orderid }}</td>
                <td>{{ $order->comments }}</td>
                <td>{{ $order->shipdate_expected }}</td>
            </tr>
        @endforeach
    </table>

    <h3>Comments including call me</h3>
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Order ID</th>
            <th>Comments</th>
            <th>Expected Ship Date</th>
        </tr>
        @foreach ($call_orders as $call_order)
            <tr>
                <td>{{ $call_order->orderid }}</td>
                <td>{{ $call_order->comments }}</td>
                <td>{{ $call_order->shipdate_expected }}</td>
            </tr>
        @endforeach
    </table>

    <h3>Comments including referrals</h3>
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Order ID</th>
            <th>Comments</th>
            <th>Expected Ship Date</th>
        </tr>
        @foreach ($referred_orders as $referred_order)
            <tr>
                <td>{{ $referred_order->orderid }}</td>
                <td>{{ $referred_order->comments }}</td>
                <td>{{ $referred_order->shipdate_expected }}</td>
            </tr>
        @endforeach
    </table>

    <h3>Comments including signatures</h3>
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Order ID</th>
            <th>Comments</th>
            <th>Expected Ship Date</th>
        </tr>
        @foreach ($signature_orders as $signature_order)
            <tr>
                <td>{{ $signature_order->orderid }}</td>
                <td>{{ $signature_order->comments }}</td>
                <td>{{ $signature_order->shipdate_expected }}</td>
            </tr>
        @endforeach
    </table>

    <h3>Miscellaneous Comments</h3>
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Order ID</th>
            <th>Comments</th>
            <th>Expected Ship Date</th>
        </tr>
        @foreach ($miscellaneous_orders as $miscellaneous_order)
            <tr>
                <td>{{ $miscellaneous_order->orderid }}</td>
                <td>{{ $miscellaneous_order->comments }}</td>
                <td>{{ $miscellaneous_order->shipdate_expected }}</td>
            </tr>
        @endforeach
    </table>

@endsection