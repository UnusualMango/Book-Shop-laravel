@extends('layout')

@section('content')
<div class="container">
  <h2>Orders of {{$clients->fullname}}</h2>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Order ID</th>
        <th>Order date</th>
        <th>Execution date</th>
        <th>Actions</th>
      </tr>

      <tbody>
        <?php foreach ($orders as $order): ?>

        <tr>
          <td>{{$order->order_id}}</td>
          <td>{{$order->order_date}}</td>
          <td>{{$order->execution_date}}</td>
          <td>
            <a href="{{ route('orders.info', $order->order_id)}}" class="btn btn-info" role="button">info</a>
          </td>
        </tr>

        <?php endforeach; ?>

      </tbody>
    </thead>
</div>
@endsection
