@extends('admin.layouts.master')

@section('page')
    Orders
    @endsection
@section('content')

<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Orders</h4>
                <p class="category">List of all orders</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>

                        @foreach ($orders as $order)
                            <td> {{ $order->id }}</td>
                            <td> {{ $order->user->name }}</td>
                            <td> @foreach( $order->products as $item )
                                    {{ $item->name }}
                                @endforeach
                            </td>
                            <td> @foreach( $order->orderItems as $item )
                                    {{ $item->quantity }}
                                @endforeach
                            </td>

                        <td>@if($order->status)
                                <span class="label label-success">Confirmed</span>
                                @else <span class="label label-warning">Pending</span>
                        @endif
                        </td>
                        <td>
                            <button class="btn btn-sm btn-success ti-close"
                                    title="Cancel Order"></button>

                            <button class="btn btn-sm btn-primary ti-view-list-alt"
                                    title="Details"></button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
