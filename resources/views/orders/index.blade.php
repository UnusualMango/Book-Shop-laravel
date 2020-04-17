@extends('layout')

@section('content')
<div class="container">
  <h2>Orders
    <a href="{{ route('orders.create')}}" class="btn btn-success">Create</a>
  </h2>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Clients</th>
        <th>Order date</th>
        <th>Date of execution</th>
        <th>Actions</th>
      </tr>

      <tbody>
        <?php foreach ($orders as $order): ?>

        <tr>
          <td>{{$order->order_id}}</td>
          <td>
            <?
            $results = DB::select('select * from clients');

            foreach ($results as $result)
            {
              if($result->client_id == $order->client_id)
              {
                echo "$result->fullname";
              }
            }
            ?>
          </td>
          <td>{{$order->order_date}}</td>
          <td>{{$order->execution_date}}</td>

          <td>
            <a href="{{ route('orders.info', $order->order_id)}}" class="btn btn-info" role="button">info</a>
            <a href="{{ route('orders.edit', $order->order_id)}}" class="btn btn-success" role="button">edit</a>

            {!! Form::open(["method"=>"DELETE", 'route' => ['orders.destroy', $order->order_id]]) !!}
            <button onclick="return confirm('Delete this order?')" class="btn btn-danger" role="button">delete</button>
            {!! Form::close() !!}

          </td>
        </tr>

        <?php endforeach; ?>

      </tbody>
    </thead>
</div>
@endsection
